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
 * @class View.Views.Base.FinishImpersonation
 * @alias SUGAR.App.view.views.FinishImpersonation
 * @extends View.View
 */
({

    cache: null,

    /**
     * @inheritdoc
     */
    initialize: function(options) {
        this.cache = app[app.config.authStore || 'cache'];
        this._super('initialize', [options]);
    },

    /**
     * @override
     * @private
     */
    _render: function() {
        this.finishImpersonation();
    },

    /**
     * Finishing impersonation sesssion.
     */
    finishImpersonation: function() {
        let self = this;
        app.bwc.logout(
            function(data) {
                self.cache.cut('ImpersonationFor');

                self.cache.set('AuthAccessToken', self.cache.get('OriginAuthAccessToken'));
                self.cache.set('AuthRefreshToken', self.cache.get('OriginAuthRefreshToken'));

                self.cache.cut('OriginAuthAccessToken');
                self.cache.cut('OriginAuthRefreshToken');

                // Have to login to BWC after admin token has been switched back
                app.bwc.login(null, function() {
                    if (window.opener) {
                        window.close();
                    } else {
                        window.location.replace(self.getComeBackUrl());
                    }
                });
            }
        );
    },

    /**
     * Generate come back url.
     * @return {string}
     */
    getComeBackUrl: function() {
        return this.meta.comeBackUrl +
            '&user_hint=' +
            encodeURIComponent(app.utils.createUserSrn(app.cache.get('ImpersonationFor')));
    }

})
