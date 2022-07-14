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
/**
 * @class View.Views.Base.ListBottomView
 * @alias SUGAR.App.view.views.BaseListBottomView
 * @extends View.View
 */
({
    events: {
        'click [data-action="show-more"]': 'showMoreRecords'
    },

    /**
     * Flag for if the loading placeholder text should be hidden or not
     *
     * @property {boolean}
     */
    hideLoading: false,

    initialize: function(options) {
        this._super('initialize', [options]);
        // This component should always have a `list` action.
        this.action = 'list';

        /**
         * Label key used for {@link #showMoreLabel}.
         *
         * You can define it in metadata under `label` property. Defaults to
         * `TPL_SHOW_MORE_MODULE`.
         *
         * @type {string}
         * @private
         */
        this._showMoreLabel = this.meta && this.meta.label || 'TPL_SHOW_MORE_MODULE';
        this._initPagination();

        if (app.utils.isTruthy(options.usePaginationComponent)) {
            this.collection = this.paginationComponent.collection;
            this.moduleIsAvailable = true;
        }
        if (app.utils.isTruthy(options.hideFirstPaginationLoadingMessage)) {
            this.hideLoading = true;
        }
    },

    /**
     * Initialize pagination component in order to react the show more link.
     * @private
     */
    _initPagination: function() {
        this.paginationComponent = _.find(this.layout._components, function(component) {
            return _.contains(component.plugins, 'Pagination');
        }, this);
    },

    /**
     * Retrieving the next page records by pagination plugin.
     *
     * Please see the {@link app.plugins.Pagination#getNextPagination}
     * for detail.
     */
    showMoreRecords: function() {
        if (!this.paginationComponent) {
            return;
        }

        this.hideLoading = false;

        var options = {};
        options.success = _.bind(function() {
            this.layout.trigger('list:paginate:success');

            // Tell the side drawer that there are new records to look at
            if (app.sideDrawer) {
                app.sideDrawer.trigger('sidedrawer:collection:change', this.collection);
            }

            // FIXME: This should trigger on `this.collection` instead of
            // `this.context`. Will be fixed as part of SC-2605.
            this.context.trigger('paginate');
            this.render();
        }, this);
        // collection offset is not properly set before Pagination fetch.
        this.collection.offset = this.collection.length;
        this.paginationComponent.getNextPagination(options);
        this.render();
    },

    /**
     * Assign proper label for 'show more' link.
     * Label should be "More <module name>...".
     */
    setShowMoreLabel: function() {
        if (!this.collection) {
            return;
        }

        var model = this.collection.at(0);
        var module = model ? model.module : this.context.get('module');
        var context = {
            count: this.collection.length,
            offset: this.collection.next_offset >= 0
        };
        if (module) {
            context.module = new Handlebars.SafeString(app.lang.getModuleName(module, {plural: true}).toLowerCase());
        }

        /**
         * Label used in the template to display Show more message.
         *
         * By default it will display "More {module}...".
         *
         * @type {string}
         * @private
         */
        this.showMoreLabel = app.lang.get(this._showMoreLabel, module, context);
    },

    /**
     * Reset previous collection handlers and
     * bind the listeners for new collection.
     */
    onCollectionChange: function() {
        var prevCollection = this.context.previous('collection');
        if (prevCollection) {
            prevCollection.off(null, null, this);
        }
        this.collection = this.context.get('collection');
        if (this.collection) {
            this.collection.on('add remove reset', this.render, this);
        }
        this.render();
    },

    /**
     * @inheritdoc
     */
    _renderHtml: function() {
        this.setShowMoreLabel();

        this.moreClassToggle();
        this._super('_renderHtml');
    },

    /**
     * @inheritdoc
     *
     * Bind listeners for collection updates.
     * The pagination link synchronizes its visibility with the collection's
     * status.
     */
    bindDataChange: function() {
        this.context.on('change:collection', this.onCollectionChange, this);
        this.collection.on('add remove reset', this.render, this);
    },

    /**
    * Toggle CSS class to show if pagination button is available.
    */
    moreClassToggle: function() {
        if (!this.paginationComponent.layout) {
            return;
        }

        let layout = this.paginationComponent.layout.$el;

        layout.removeClass('more-active');
        let collectionDataFetched = _.has(this.collection, 'dataFetched') && this.collection.dataFetched;
        let isLastOffset = _.has(this.collection, 'next_offset') && this.collection.next_offset !== -1;
        if (collectionDataFetched && isLastOffset) {
            layout.addClass('more-active');
        }
    },

    /**
     * @inheritdoc
     *
     * Add dashlet placeholder's class in order to handle the custom css style.
     */
    show: function() {
        this._super('show');
        if (!this.paginationComponent) {
            return;
        }
        this.paginationComponent.layout.$el.addClass('pagination');
    },

    /**
     * @inheritdoc
     *
     * Remove pagination custom CSS class on dashlet placeholder.
     */
    hide: function() {
        this._super('hide');
        if (!this.paginationComponent) {
            return;
        }
        this.paginationComponent.layout.$el.removeClass('pagination');
    }
})
