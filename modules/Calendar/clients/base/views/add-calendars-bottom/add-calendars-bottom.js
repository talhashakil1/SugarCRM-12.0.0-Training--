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
 * @class View.Views.Base.Calendar.AddCalendarsBottomView
 * @alias SUGAR.App.view.views.BaseCalendarAddCalendarsBottomView
 * @extends View.Views.Base.ListBottomView
 */
({
    extendsFrom: 'ListBottomView',

    /**
     * Assign proper label for 'show more' link.
     * Label should be 'More recipients...'.
     */
    setShowMoreLabel: function() {
        this.showMoreLabel = app.lang.getModString('LBL_CALENDAR_ADD_SHOW_MORE_RECIPIENTS', this.module);
    }
});
