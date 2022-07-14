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
 * @class View.Fields.Base.HintNewsDashletSearchField
 * @alias SUGAR.App.view.fields.BaseHintNewsDashletSearchField
 * @extends View.Fields.Base.BaseField
 */
({
    events: {
        'click #hint-news-dashlet-searchbtn': 'filterNews',
        'click #hint-news-dashlet-resetbtn': 'resetFilter',
        'keyup #hint-news-dashlet-searchinput': 'filterOnEnter'
    },

    /**
     * Filter news
     */
    filterNews: function() {
        app.events.trigger('hint-news-dashlet:search', this.searchInput.val());
    },

    /**
     * Filter on enter key
     *
     * @param {Object} event
     */
    filterOnEnter: function(event) {
        var key = event.which || event.keyCode;
        if (key === 13) {
            this.filterNews();
        }
        this.toggleResetButton();
    },

    /**
     * Reset filter
     */
    resetFilter: function() {
        this.searchInput.val('');
        this.toggleResetButton();
        this.filterNews();
    },

    /**
     * Toggle reset button
     */
    toggleResetButton: function() {
        if (this.searchInput.val()) {
            this.resetButton.removeClass('hide');
        } else {
            this.resetButton.addClass('hide');
        }
    },

    /**
     * Apply search term
     *
     * @param {string} term
     */
    applySearchTerm: function(term) {
        this.searchInput.val(term);
        this.toggleResetButton();
    },

    /**
     * @inheritdoc
     */
    _render: function() {
        app.events.on('hint-news-dashlet:apply', this.applySearchTerm, this);
        this._super('_render');
        this.resetButton = this.$el.find('#hint-news-dashlet-resetbtn');
        this.searchInput = this.$el.find('#hint-news-dashlet-searchinput');
    },

    /**
     * @inheritdoc
     */
    _dispose: function() {
        app.events.off('hint-news-dashlet:apply', this.applySearchTerm, this);
        this._super('_dispose');
    }
});
