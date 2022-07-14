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
    extendsFrom: 'ListView',

    /**
     * @inheritdoc
     *
     * Add KBContent plugin for view.
     * Create filter defs for current collection.
     */
    initialize: function(options) {
        this.plugins = _.union(this.plugins || [], [
            'KBContent'
        ]);

        this._super('initialize', [options]);

        if (this.collection) {
            this.collection.filterDef = _.extend(
                [],
                this.context.get('collection').origFilterDef,
                this.context.get('filterDef')
            );
        }
    }

})
