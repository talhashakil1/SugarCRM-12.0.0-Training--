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
(function(app) {
    app.events.on('app:init', function() {
        app.plugins.register('CloudDrive', ['view'], {
            /**
             * Search in the layout for the cloud drive
             *
             * @param {string} type
             */
            _searchForDashlet: function(type) {
                let layout = app.controller.layout;
                if (layout.name !== 'record') {
                    return false;
                }

                let sidebar = layout.getComponent('sidebar');
                if (!sidebar) {
                    return false;
                }
                let dashboardPane = sidebar.getComponent('dashboard-pane');

                if (!dashboardPane) {
                    return false;
                }

                let base = dashboardPane.getComponent('base');
                let baseDashboard = base.getComponent('dashboard');

                if (!baseDashboard) {
                    return false;
                }

                let dashletMain = baseDashboard.getComponent('dashlet-main');

                if (!dashletMain) {
                    return false;
                }

                let dashlets = dashletMain.getComponent('dashboard-grid');

                if (!dashlets) {
                    return false;
                }

                for (let dashlet of dashlets._components) {
                    if (dashlet.getComponent('cloud-drive')) {
                        let _dashlet = dashlet.getComponent('cloud-drive');
                        if (_dashlet && _dashlet.options.driveType === type) {
                            return _dashlet.cid;
                        }
                    }
                }

                return false;
            },

            /**
             * trigger a reload on the dashlet
             */
            syncDriveDashlet: function(dashletCid) {
                app.events.trigger(`${dashletCid}:cloud-drive:reload`);
            },
        });
    });
})(SUGAR.App);
