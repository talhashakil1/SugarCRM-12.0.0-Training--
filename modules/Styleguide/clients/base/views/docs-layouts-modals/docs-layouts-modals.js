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
    className: 'container-fluid',

    // layouts modals
    _renderHtml: function () {
        this._super('_renderHtml');

        this.$('[rel=popover]').popover();

        this.$('.modal').tooltip({
          selector: '[rel=tooltip]'
        });
        this.$('#dp1').datepicker({
          format: 'mm-dd-yyyy'
        });
        this.$('#dp3').datepicker();
        this.$('#tp1').timepicker();
    }
})
