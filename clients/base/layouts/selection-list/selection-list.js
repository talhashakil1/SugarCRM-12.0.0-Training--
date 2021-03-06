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
 * @class View.Layouts.Base.SelectionListLayout
 * @alias SUGAR.App.view.layouts.BaseSelectionListLayout
 * @extends View.Layout
 */
({
    plugins: ['ShortcutSession', 'ConfigDrivenList'],

    shortcuts: [
        'Headerpane:Cancel',
        'Sidebar:Toggle'
    ],

    loadData: function(options) {
        var fields = _.union(this.getFieldNames(), (this.context.get('fields') || []));
        this.context.set('fields', fields);
        this._super('loadData', [options]);
    }
})
