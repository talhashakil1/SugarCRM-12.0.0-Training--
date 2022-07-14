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
    events: {
        'click .search': 'showSearch'
    },

    _renderHtml: function() {
        if (app.acl.hasAccess('create', this.module)) {
            this.context.set('isCreateEnabled', true);
        }
        app.view.View.prototype._renderHtml.call(this);
    },

    showSearch: function() {
        app.logger.warn('View.Views.Portal.PortalListTop#showSearch is deprecated. ' +
            'The functionality is handled by the FilterApi.');
    },
});
