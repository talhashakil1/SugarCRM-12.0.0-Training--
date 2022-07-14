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

    // forms switch
    _renderHtml: function () {
        this._super('_renderHtml');

        this.$('#mySwitch').on('switch-change', function (e, data) {
            var $el = $(data.el),
                value = data.value;
        });
    },

    _dispose: function() {
        this.$('#mySwitch').off('switch-change');

        this._super('_dispose');
    }
})
