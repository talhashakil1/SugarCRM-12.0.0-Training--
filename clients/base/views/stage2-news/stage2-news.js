/*
 * Your installation or use of this SugarCRM file is subject to the applicable
 * terms available at
 * http://support.sugarcrm.com/Resources/Master_Subscription_Agreements/.
 * If you do not agree to all of the applicable terms or do not have the
 * authority to bind the entity as an authorized representative, then do not
 * install or use this SugarCRM file.
 *
 * Copyright (C) SugarCRM Inc. All rights reserved.
 */
({
    plugins: ['EllipsisInline', 'Stage2CssLoader'],

    events: {
        'click [data-action=newsClick]': 'trackNewsSelect'
    },

    /**
     * This is a mapping used to sort news into categories based on Orwell's news types.
     */
    filterMap: {
        'NEWS': 'General',
        'PRESS': 'Press Releases',
        'FUNDING': 'Finance',
        'ACQUISITION': 'Finance',
        'PEOPLE': 'People',
        'BLOG': 'Other',
        'VIDEOS': 'Other'
    },

    /**
     * Load threshold indicates how many news should be fake-loaded initially and on scroll.
     */
    loadThreshold: 5,

    /**
     * The model id is used for saving the user's filter/search preference.
     * When the user opens the same news feed again, the filter/search will be applied.
     */
    modelId: '',

    /**
     * Indicates if more news should be loaded. On initial load and on scroll
     * this variable should be true, but if we simply apply a filter, it should be false.
     */
    loadMore: true,

    /**
     * Shows that how much did we scroll down. When a filter is applied, the scroll is reset.
     * We reapply the amount of scroll we did with the help of the scrollPosition.
     */
    scrollPosition: 0,

    /**
     * Shows that how many times is the news request retryed on error.
     * On each fail the counter will be decreased and on 0 retry will be stopped.
     */
    newsRetryCounter: 3,

    /**
     * Shows the order number of the last displayed news article.
     * Filtering/searching will always be done only on the news already displayed once.
     */
    lastDisplayedNewsIndex: 0,

    /**
     * Initially and on loading we would like to show a placeholder for the user.
     * Since we start with loading the dependencies, we show the placeholder by default.
     */
    isHintRequestLoading: true,

    /**
     * The list of news articles loaded.
     */
    news: [],

    /**
     * The list of news articles based on the search term/filer.
     */
    searchResults: [],

    /**
     * Holds the time duration of a valid data enrichment access token (1 hour).
     */
    tokenExpirationTimeOut: 60 * 60 * 1000,

    /**
     * @inheritdoc
     */
    initialize: function(options) {
        options.context.set('forceNew', true);
        this._super('initialize', [options]);
        this.getDependencies();
        this.isDarkMode = app.utils.isDarkMode();
        app.events.on('hint-news-panel:filter', this.applyFilter, this);
        this.context.parent.on('change:model', _.bind(this.refreshNews, this));
    },

    /**
     * An error handler used by the stage2 dependency calls.
     *
     * @param {string} message Error message to log.
     * @param {Object} error Error object holding information about the failed request.
     */
    setStage2errorCode: function(message, error) {
        app.logger.error(message.concat(JSON.stringify(error)));
        if (_.isUndefined(this.stage2errorCode)) {
            this.stage2errorCode = error.status;
            this.render();
        }
    },

    /**
     * First dependency of the news request. The news will be get using the url retrieved from here.
     * Invokes the callback function once we have obtained the url.
     */
    getStage2Url: function(callback) {
        var self = this;
        app.api.call('GET', app.api.buildURL('stage2/params'), null, {
            success: function(data) {
                self.stage2url = data.enrichmentServiceUrl;
                callback();
            },
            error: _.bind(this.setStage2errorCode, this, 'Failed to get Hint param: ')
        });
    },

    /**
     * Second dependency of the news request. News can be retrieved only with a valid access token.
     * Invokes the callback function once we have obtained the auth token.
     */
    getStage2AccessToken: function(callback) {
        var self = this;
        app.api.call('create', app.api.buildURL('stage2/token'), null, {
            success: function(data) {
                // Track the data enrichment access token locally so we know when that we have it
                // and that it is valid or invalid (and when invalid to update the token).
                SUGAR.App.user.set('authToken', data.accessToken);
                SUGAR.App.user.set('authTokenExpiration', Date.now() + self.tokenExpirationTimeOut);
                callback();
            },
            error: _.bind(self.setStage2errorCode, self, 'Failed to get Hint access token: ')
        });
    },

    /**
     * Will save the domain and the name of the account so we could reuse it later for getting news.
     * The domain will be checked if it exists in the following sources
     * and retrieved from the first source found; website, primary email, any email.
     *
     * @param {bean} bean The fetched bean.
     */
    saveCompanyInfoForNews: function(bean) {
        var domain = bean.get('website');

        if (domain && domain.trim() !== '') {
            domain = domain.replace(/^https?\:\/\//i, '');
        } else if (!_.isEmpty(bean.get('email'))) {
            var email = _.findWhere(bean.get('email'), {
                primary_address: true
            });

            email = !email ? bean.get('email')[0].email_address : email.email_address;

            if (email.indexOf('@') > 0) {
                var mailDomain = email.split('@')[1].trim();
                if (!_.isEmpty(mailDomain)) {
                    domain = mailDomain;
                }
            }
        }

        this.companyInfo = {
            domain: domain || '',
            name: bean.module === 'Accounts' ? bean.get('name') : bean.get('account_name')
        };

        // At this point, all of our 3 dependencies (data enrichment URL, access token, company info)
        // have been successfully set.
        this.initNewsRequest();
    },

    /**
     * The third and last dependency of the news request.
     * Retrieves information about the source of the news to be fetched.
     * We also reset the news already loaded since the context is going to be changed.
     *
     * @param {Bean} model The parent model, which for example could be an account or a contact model.
     */
    getCompanyInfo: function(model) {
        var bean = app.data.createBean(model.module, {
            id: model.id
        });

        this.news = [];
        delete this.companyInfo;

        bean.fetch({
            success: _.bind(this.saveCompanyInfoForNews, this),
            error: function(error) {
                app.logger.error('Failed to fetch: ' + JSON.stringify(error));
            }
        });
    },

    /**
     * Will load all 3 news dependencies. _withValidAuthentication() will ensure that we have
     * a valid data enrichment URL and a non-expired access token (our first 2 dependencies).
     * We then fetch company info as our final dependency step.
     * Without a context we will not be able to define what kind of news should be loaded.
     * information regarding the source of the news.
     */
    getDependencies: function() {
        var self = this;
        if (self.context.parent) {
            var previewModel = self.context.parent.get('model');
            self.modelId = previewModel.get('id');
            self._withValidAuthentication(function() {
                self.getCompanyInfo(previewModel);
            });
        }
    },

    /**
     * Checks if we have the necessary information regarding the news' source.
     * Company information is valid if there is an assigned domain and a name to identify by.
     *
     * @return {boolean} True is the company information is valid.
     */
    hasValidCompanyInfo: function() {
        var info = this.companyInfo;
        if (info != null) {
            if (info.domain != null && info.domain.trim() !== '') {
                return true;
            } else if (info.name != null && info.name.trim() !== '') {
                return true;
            }
        }
        return false;
    },

    /**
     * Ensures we have the data enrichment URL and a valid auth token before retrieving news.
     * If then token is expired, we fetch a new access token and update the local token expiration timer.
     * We then invoke the provided callback function once we have the URL and token.
     */
    _withValidAuthentication: function(callback) {
        var self = this;
        if (!self.stage2url) {
            self.getStage2Url(function() {
                self._withValidAuthentication(callback);
            });
            return;
        }
        if (self.isTokenExpired()) {
            self.getStage2AccessToken(function() {
                self._withValidAuthentication(callback);
            });
            return;
        }
        callback();
    },

    /**
     * Once we have valid company data we call getNews() to retrieve the latest 50 news articles
     */
    initNewsRequest: function() {
        if (this.hasValidCompanyInfo()) {
            this.getNews();
        } else {
            this.isHintRequestLoading = false;
            this.render();
        }
    },

    /**
     * Ensures that we have a valid access token
     */
    isTokenExpired: function() {
        var authTokenExpiration = SUGAR.App.user.get('authTokenExpiration');
        return (!authTokenExpiration || authTokenExpiration < Date.now());
    },

    /**
     * If there is no active request for getting news it will send out a request.
     */
    getNews: function() {
        var self = this;
        if (self.disposed === true) {
            return;
        }
        if (self.activeRequest) {
            self.activeRequest.abort();
        }

        self._withValidAuthentication(function() {
            self.activeRequest = $.ajax({
                type: 'GET',
                data: self.getNewsRequestData(),
                url: self.stage2url.concat('/company-news'),
                headers: {
                    authToken: SUGAR.App.user.get('authToken'),
                },
                success: _.bind(self.loadNews, self),
                error: _.bind(self.handleFailedNewsFetch, self)
            });
        });
    },

    /**
     * Composes a list of necessary parameters in order to be able to retrieve news.
     *
     * @return {Object} Hold details about the source of the news and metrics.
     */
    getNewsRequestData: function() {
        if (this.context) {
            return {
                companyInfo: JSON.stringify({
                    country: undefined,
                    tickerSymbol: undefined,
                    name: this.companyInfo.name,
                    domain: this.companyInfo.domain
                }),
                moduleName: this.context.get('module'),
                metricsToken: app.user.get('hintMetricsToken')
            };
        }
    },

    /**
     * Retry news request
     */
    retryNewsRequest: function() {
        if (this.newsRetryCounter <= 0) {
            this.isHintRequestLoading = false;
            this.newsRetryCounter = 3;
            this.render();
        } else if (this.newsRetryCounter > 0) {
            this.getNews();
            app.logger.debug('News fetch retry #'.concat(3 - this.newsRetryCounter));
        }
    },

    /**
     * Error handler for the news request. Error should be handled only if the
     * request was not aborted manually. Also if the retrieval fails it will try
     * to fetch the news again for a limited number of times.
     */
    handleFailedNewsFetch: function(error) {
        this.activeRequest = null;
        if (error && error.statusText !== 'abort') {
            app.logger.error('Failed to fetch news on Hint: ' + JSON.stringify(error));
            this.newsRetryCounter--;
            this.retryNewsRequest();
        }
    },

    /**
     * Each article should receive the following information:
     * an id, used for searching the news titles for a specific value
     * hide flag, used to show/hide news on the page - initially all news are hidden
     * type, used for the fixed filter categories
     * Additionally we create a map of the news' titles for the case when
     * we would like to filter them by a custom word.
     *
     * @param {Array} news A list of news articles.
     */
    extendNews: function(news) {
        _.each(news, function(article, i) {
            article.id = i;
            article.hide = true;
            article.type = this.filterMap[article.category];
        }, this);
        this.news = news;
    },

    /**
     * All the news will be marked as hidden.
     * Used when applying a filter/search term.
     */
    markNewsAsHidden: function() {
        _.each(this.news, function(news) {
            news.hide = true;
        });
    },

    /**
     * This is where the actual search is happening. The searchResults will hold a list of news,
     * these news all contain the search term in their titles. Based on the searchResults
     * we will be able to tell, which  articles need to be marked visible.
     * Important note: here we make the search on ALL available news, however we display none,
     * it is the responsibility of `toggleNews` to display news that are found in the results saved here.
     *
     * @param {string} searchTerm A phrase or a single word.
     */
    searchNews: function(searchTerm) {
        this.searchResults = [];
        _.each(this.news, function(article) {
            if (article.title.toLowerCase().indexOf(searchTerm.toLowerCase()) > -1) {
                this.searchResults.push(article);
            }
        }, this);
    },

    /**
     * Checks if the given string is a predefined category. If it isn't, it must be a search term.
     *
     * @param {string|null} filter The value of the filter. `Null` means no filter.
     * @return {boolean} True of the filter is in fact a search term.
     */
    isSearchFilter: function(filter) {
        return filter && _.values(this.filterMap).indexOf(filter) === -1;
    },

    /**
     * We check if the given filter is set by the user.
     * In the case the user did not set a filter yet, the value will be undefined.
     *
     * @param {string|null} filter The value of the filter.
     * @return {boolean} True if the filter is set by the user.
     */
    hasUserSetFilter: function(filter) {
        return !!(filter || filter === null);
    },

    /**
     * If the user did filter/search already the news assigned to the current context
     * we reapply it on the list. Note that `null` means that the user desires to see all news.
     */
    applyExistingFilter: function() {
        var filter = this.readFilter();
        if (this.hasUserSetFilter(filter)) {
            app.events.trigger('hint-news-panel-filter:set', filter);
        }

        if (this.isSearchFilter(filter)) {
            this.searchNews(filter);
        } else {
            this.filterNews(filter);
        }
        this.toggleNews();
    },

    /**
     * Initializes the search/filter process when the user changes the assigned field.
     *
     * @param {string|null} filter
     */
    applyFilter: function(filter) {
        if (this.news.length && this.readFilter() !== filter) {
            this.loadMore = false;
            this.scrollPosition = 0;
            this.markNewsAsHidden();
            this.writeFilter(filter);

            if (this.isSearchFilter(filter)) {
                this.searchNews(filter);
            } else {
                this.filterNews(filter);
            }
            this.toggleNews();
        }
    },

    /**
     * News request success handler. If we managed to retrieve news,
     * they need to be processed, and displayed. Only a limited number of news will be displayed.
     * The rest of the news will get rendered on scroll. Render will happen through filtering.
     *
     * @param {Object} data The response to the news request.
     */
    loadNews: function(data) {
        this.activeRequest = null;
        this.newsRetryCounter = 3;

        if (!this.disposed && data && data.news) {
            this.isHintRequestLoading = false;
            if (data.news.length === 0) {
                app.events.trigger('hint-news-panel-filter:set', null);
                this.render();
            } else {
                this.extendNews(data.news);
                this.applyExistingFilter();
            }
        }
    },

    /**
     * @return {string} A unique id for identifying the filter for the current context.
     */
    getFilterKey: function() {
        return 'news-filter-option*' + this.modelId;
    },

    /**
     * Retrieves the filter applied by the user the last time.
     */
    readFilter: function() {
        return app.user.lastState.get(this.getFilterKey());
    },

    /**
     * Saves the filter value as a user preference. `Null` means no filter.
     *
     * @param {string|null} filter
     */
    writeFilter: function(filter) {
        app.user.lastState.set(this.getFilterKey(), filter);
    },

    /**
     * This method may returns 2 kind of lists of news.
     * One is returned upon scrolling:
     * we need to apply the current filter on the news to be displayed.
     * The other just on searching/filtering:
     * we apply the search term/filter on all the news.
     *
     * @return {Array} A list of news.
     */
    getNextSegmentForFilter: function() {
        var start = this.loadMore ? this.lastDisplayedNewsIndex : 0;
        this.lastDisplayedNewsIndex += this.loadMore ? this.loadThreshold : 0;
        return this.searchResults.slice(start, this.lastDisplayedNewsIndex);
    },

    /**
     * News are filtered here. The searchResults will hold a list of news based on the selected category.
     * Important note: here we do the filter on ALL available news, however we display none.
     * It is the responsibility of `toggleNews` to display news that are found in the results saved here.
     *
     * @param {string|null} filter A news category.
     */
    filterNews: function(filter) {
        this.searchResults = [];
        _.each(this.news, function(article) {
            if (!filter || article.type === filter) {
                this.searchResults.push(article);
            }
        }, this);
    },

    /**
     * News articles will be marked as visible.
     * Applying a render will show/hide the corresponding news.
     */
    toggleNews: function() {
        var segment = this.getNextSegmentForFilter();
        _.each(segment, function(article) {
            if (_.findWhere(this.searchResults, {id: article.id})) {
                article.hide = false;
            }
        }, this);
        this.render();
    },

    /**
     * Scroll handler on the news container. When we reach the end of the container we "load" more news.
     * What happens in fact, is that we take the next couple of hidden news and render the visible
     * according to the current filter/search term applied.
     *
     * @param {EventObject} event Scroll event.
     */
    verifyScrollPosition: function(event) {
        var target = event.target;

        if (target.offsetHeight + target.scrollTop == target.scrollHeight) {
            var delay = 750;
            var delayedTrigger = _.debounce(_.bind(this.triggerFakeLoad, this), delay);
            delayedTrigger(target.scrollTop);
        }
    },

    /**
     * This is a fake load that happens on scroll. No new request will be made,
     * but a batch of hidden news will be processed.
     *
     * @param {number} newScrollTop The amount of scrolling we already did.
     */
    triggerFakeLoad: function(newScrollTop) {
        if (this.lastDisplayedNewsIndex < this.searchResults.length) {
            this.loadMore = true;
            this.scrollPosition = newScrollTop;
            this.toggleNews();
        }
    },

    /**
     * If the parent context's model changes we need to refresh the news.
     *
     * @param {Component} ctx The parent context.
     * @param {Bean} model The parent context's model.
     */
    refreshNews: function(ctx, model) {
        this.loadMore = true;
        this.scrollPosition = 0;
        this.modelId = model.get('id');
        this.lastDisplayedNewsIndex = 0;
        this.isHintRequestLoading = true;
        this.getCompanyInfo(model);
    },

    /**
     * Verifies if there are any news marked as visible among the news that have been already loaded.
     */
    checkNewsToDisplay: function() {
        this.displayNews = _.find(this.searchResults.slice(0, this.lastDisplayedNewsIndex), function(article) {
            return article.hide === false;
        });
    },

    /**
     * @inheritdoc
     * Additionally checks if there are any news to be displayed.
     * Attaches scroll event handler to the news container (can be done after the first render).
     * Also applies any scrolling done already (important why filtering/searching).
     */
    _render: function(options) {
        this.checkNewsToDisplay();
        this._super('_render', [options]);
        var newsArea = this.$('#newsarea');
        if (!newsArea.attr('hasScrollEvent')) {
            newsArea.on('scroll', _.bind(this.verifyScrollPosition, this));
        }
        if (this.scrollPosition) {
            newsArea.scrollTop(this.scrollPosition);
        }
    },

    /**
     * @inheritdoc
     * Detach event handlers.
     */
    _dispose: function() {
        this.$('#newsarea').off('scroll', _.bind(this.verifyScrollPosition, this));
        app.events.off('hint-news-panel:filter', this.applyFilter, this);
        this._super('_dispose');
    },

    /**
     * Tracks which news has been opened by the user.
     *
     * @param {EventObject} event Event information
     */
    trackNewsSelect: function(event) {
        var self = this;
        self._withValidAuthentication(function() {
            $.ajax({
                type: 'POST',
                data: {
                    clickType: 'news',
                    origin: self.context.get('module'),
                    clickedURL: event.currentTarget.href,
                    title: event.currentTarget.innerText,
                    metricsToken: app.user.get('hintMetricsToken')
                },
                url: self.stage2url.concat('/url-click'),
                headers: {
                    authToken: SUGAR.App.user.get('authToken')
                },
                error: function(err) {
                    app.logger.error('Failed to record news click event: ' + JSON.stringify(err));
                }
            });
        });
    }
});
