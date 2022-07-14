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
 * @class View.Views.Base.AdministrationDriveConfigButtonsView
 * @alias SUGAR.App.view.views.BaseAdminstrationDriveConfigButtonsView
 * @extends View.Views.Base.ConfigHeaderButtonsView
 */
({
    extendsFrom: 'ConfigHeaderButtonsView',

    /**
     * @inheritdoc
     */
    initialize: function(options) {
        this._super('initialize', arguments);
        let driveType = this.context.get('driveType');
        this.driveType = app.lang.getAppListStrings('drive_types')[driveType];
    }
});
