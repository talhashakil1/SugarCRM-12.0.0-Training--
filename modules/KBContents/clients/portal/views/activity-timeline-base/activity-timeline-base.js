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
 * @class View.Views.KBContents.Portal.ActivityTimelineBaseView
 * @alias SUGAR.App.view.views.KBContents.PortalActivityTimelineBaseView
 * @extends View.Views.Portal.ActivityTimelineBaseView
 */
({
    extendsFrom: 'PortalActivityTimelineBaseView',

    /**
     * @inheritdoc
     */
    initialize: function(options) {
        this._super('initialize', [options]);

        var recordLayout = this.closestComponent('record');
        if (recordLayout) {
            this.hideActivity = recordLayout.shouldHideActivity();
        }
    },
})
