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
 * @class View.Views.Base.Tasks.ActivityCardHeaderView
 * @alias SUGAR.App.view.views.BaseTasksActivityCardHeaderView
 * @extends View.Views.Base.ActivityCardHeaderView
 */
({
    extendsFrom: 'ActivityCardHeaderView',

    /**
     * @inheritdoc
     */
    setUsersFields: function() {
        var panel = this.getUsersPanel();
        this.leftUserField = _.find(panel.fields, function(field) {
            return field.name === 'created_by_name';
        });
        this.rightUserField = _.find(panel.fields, function(field) {
            return field.name === 'assigned_user_name';
        });

        this.hasAvatarUser = !!this.leftUserField && !!this.rightUserField;
    }
})
