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
 * @class View.Views.Base.DupecheckListMultiselectView
 * @alias SUGAR.App.view.views.BaseDupecheckListMultiselectView
 * @extends View.Views.Base.DupecheckListView
 */
({
    extendsFrom: 'DupecheckListView',
    additionalTableClasses: 'duplicates-multiselect',

    /**
     * @inheritdoc
     */
    initialize: function(options) {
        this.plugins = _.union(this.plugins, ['MassCollection']);
        this._super('initialize', [options]);
    }
})
