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
 * Login form view.
 *
 * @class View.Views.Base.LoginView
 * @alias SUGAR.App.view.views.BaseLoginView
 * @extends View.View
 */
({
    /**
     * @inheritdoc
     */
    plugins: ['ErrorDecoration'],

    /**
     * @inheritdoc
     */
    fallbackFieldTemplate: 'edit',

    /**
     * @inheritdoc
     */
    events: {
        'click [name=login_button]': 'login',
        'keypress': 'handleKeypress',
        "click [name=external_login_button]": "external_login",
        "click [name=login_form_button]": "login_form"
    },

    /**
     * An object containing the keys of the alerts that may be displayed in this
     * view.
     *
     * @type {Object}
     */
    _alertKeys: {
        adminOnly: 'admin_only',
        invalidGrant: 'invalid_grant_error',
        login: 'login',
        needLogin: 'needs_login_error',
        offsetProblem: 'offset_problem',
        loading: 'loading'
    },

    /**
     * Flag to indicate if the link to reset the password should be displayed.
     *
     * @type {Boolean}
     */
    showPasswordReset: false,

    /**
     * The company logo url.
     *
     * @type {String}
     */
    logoUrl: null,

    /**
     * Is external login in progress?
     *
     * @type {boolean}
     */
    isExternalLoginInProgress: false,

    /**
     * Save login popup handler
     */
    childLoginPopup: null,

    /**
     * Process login on key `Enter`.
     *
     * @param {Event} event The `keypress` event.
     */
    handleKeypress: function(event) {
        if (event.keyCode === 13) {
            this.$('input').trigger('blur');
            this.login();
        }
    },

    /**
     * Get the fields metadata from panels and declare a Bean with the metadata
     * attached.
     *
     * Fields metadata needs to be converted to {@link Data.Bean#declareModel}
     * format.
     *
     *     @example
     *      {
     *        "username": { "name": "username", ... },
     *        "password": { "name": "password", ... },
     *        ...
     *      }
     *
     * @param {Object} meta The view metadata.
     * @private
     */
    _declareModel: function(meta) {
        meta = meta || {};

        var fields = {};
        _.each(_.flatten(_.pluck(meta.panels, 'fields')), function(field) {
            fields[field.name] = field;
        });
        app.data.declareModel('Login', {fields: fields});
    },

    /**
     * @inheritdoc
     */
    initialize: function(options) {
        if (app.progress) {
            app.progress.hide();
        }
        // Declare a Bean so we can process field validation
        this._declareModel(options.meta);

        // Reprepare the context because it was initially prepared without metadata
        options.context.prepare(true);

        this._super('initialize', [options]);

        var config = app.metadata.getConfig();
        if (config && app.config.forgotpasswordON === true) {
            this.showPasswordReset = true;
        }

        /**
         * Set window open handler to save popup handler
         */
        app.api.setExternalLoginUICallback(_.bind(function(url, name, params) {
            this.closeLoginPopup();
            this.childLoginPopup = window.open(url, name, params);
        }, this));

        if ((config &&
            app.config.externalLogin === true && 
            app.config.externalLoginSameWindow === true) || app.config.idmModeEnabled
        ) {
            this.externalLoginForm = true;
            this.externalLoginUrl = app.config.externalLoginUrl;
            app.api.setExternalLoginUICallback(_.bind(function(url) {
                this.externalLoginUrl = app.config.externalLoginUrl = url;
                if (this.isExternalLoginInProgress || app.config.idmModeEnabled) {
                    this.isExternalLoginInProgress = false;
                    app.api.setRefreshingToken(true);
                    window.location.replace(this.externalLoginUrl);
                } else {
                    this.render();
                }
            }, this));
        }

        // Set the page title to 'SugarCRM' while on the login screen
        $(document).attr('title', 'SugarCRM');
    },

    /**
     * @inheritdoc
     */
    _render: function() {
        if (app.config.idmModeEnabled) {
            app.alert.show(this._alertKeys.loading, {
                level: 'process',
                title: app.lang.get('LBL_LOADING'),
                autoClose: false
            });
            return;
        }
        this.logoUrl = this.getLogoImage();
        //It's possible for errors to prevent the postLogin from triggering so contentEl may be hidden.
        app.$contentEl.show();

        this._super('_render');

        this.refreshAdditionalComponents();

        var config = app.metadata.getConfig(),
            level = config.system_status && config.system_status.level;

        if (level === 'maintenance' || level === 'admin_only') {
            app.alert.show(this._alertKeys.adminOnly, {
                level: 'warning',
                title: '',
                messages: [
                    '',
                    app.lang.get(config.system_status.message)
                ]
            });
        }
        app.alert.dismiss(this._alertKeys.offsetProblem);
        return this;
    },

    /**
     * Gets the logo image for sugar and portal
     */
    getLogoImage: function() {
        // Fallback to Sugar logo for portal
        return app.metadata.getLogoUrl(app.utils.isDarkMode());
    },

    /**
     * Refresh additional components
     */
    refreshAdditionalComponents: function() {
        _.each(app.additionalComponents, function(component) {
            component.render();
        });
    },

    /**
     * Process login.
     *
     * We have to manually set `username` and `password` to the model because
     * browser autocomplete does not always trigger DOM change events that would
     * propagate changes into the model.
     */
    login: function() {
        //FIXME: Login fields should trigger model change (SC-3106)
        this.model.set({
            password: this.$('input[name=password]').val(),
            username: this.$('input[name=username]').val()
        });

        // Prepare local auth variables if user chooses local auth
        if (app.api.isExternalLogin() &&
            app.config.externalLogin === true &&
            !_.isNull(app.config.externalLoginSameWindow) &&
            app.config.externalLoginSameWindow === false
        ) {
            app.config.externalLogin = false;
            app.config.externalLoginUrl = undefined;
            app.api.setExternalLogin(false);
            this.closeLoginPopup();
        }

        this.model.doValidate(null,
            _.bind(function(isValid) {
                if (isValid) {
                    app.$contentEl.hide();

                    app.alert.show(this._alertKeys.login, {
                        level: 'process',
                        title: app.lang.get('LBL_LOADING'),
                        autoClose: false
                    });

                    var args = {
                        password: this.model.get('password'),
                        username: this.model.get('username')
                    };

                    app.login(args, null, {
                        error: _.bind(function(error) {
                            this.showSugarLoginForm(error);
                        }, this),
                        success: _.bind(function() {
                            app.logger.debug('logged in successfully!');
                            app.alert.dismiss(this._alertKeys.invalidGrant);
                            app.alert.dismiss(this._alertKeys.needLogin);
                            app.alert.dismiss(this._alertKeys.login);
                            //External login URL should be cleaned up if the login form was successfully used instead.
                            app.config.externalLoginUrl = undefined;

                            app.events.on('app:sync:complete', function() {
                                app.events.trigger('data:sync:complete', 'login', null, {
                                    'showAlerts': {'process': true}
                                });
                                app.api.setRefreshingToken(false);
                                app.logger.debug('sync in successfully!');
                                _.defer(_.bind(this.postLogin, this));
                            }, this);
                        }, this),
                        complete: _.bind(function(request) {
                            if (request.xhr.status == 401) {
                                this.showSugarLoginForm();
                            }
                        }, this)
                    });
                }
            }, this)
        );

        app.alert.dismiss('offset_problem');
    },

    /**
     * When SAML enabled app login error callback will be run only when _refreshToken = true and
     * app login complete callback will be run when _refreshToken = false
     * So to avoid form disappearance after second incorrect login we need to run the same code into to two callbacks
     */
    showSugarLoginForm: function(error) {
        if (error !== undefined && error.code == 'license_seats_needed') {
            app.alert.show(this._alertKeys.adminOnly, {
                level: 'error',
                title: '',
                messages: [
                    '',
                    error.message
                ]
            });
            app.logger.debug('Number of seats exceeded license limit.');
        }
        app.alert.dismiss(this._alertKeys.login);
        app.api.setExternalLogin(false);
        app.config.externalLoginUrl = undefined;
        app.$contentEl.show();
        app.logger.debug('login failed!');
    },

    /**
     * close log in popup
     */
    closeLoginPopup: function() {
        if (!_.isNull(this.childLoginPopup)) {
            this.childLoginPopup.close();
            this.childLoginPopup = null;
        }
    },

    /**
     * After login and app:sync:complete, we need to see if there's any post
     * login setup we need to do prior to rendering the rest of the Sugar app.
     */
    postLogin: function() {
        if (!app.user.get('show_wizard') && !app.user.get('is_password_expired') && app.user.get('cookie_consent')) {

            this.refreshAdditionalComponents();

            if (new Date().getTimezoneOffset() != (app.user.getPreference('tz_offset_sec') / -60)) {
                var link = new Handlebars.SafeString('<a href="#' +
                    app.router.buildRoute('Users', app.user.id, 'edit') + '">' +
                    app.lang.get('LBL_TIMEZONE_DIFFERENT_LINK') + '</a>');

                var message = app.lang.get('TPL_TIMEZONE_DIFFERENT', null, {link: link});

                app.alert.show(this._alertKeys.offsetProblem, {
                    messages: message,
                    closeable: true,
                    level: 'warning'
                });
            }
        }
        app.$contentEl.show();
    },

    /**
     * Process Login
     */
    external_login: function() {
        this.isExternalLoginInProgress = true;
        app.api.setRefreshingToken(false);
        app.api.ping(null, {});
    },
    
    /**
     * Show Login form
     */
    login_form: function() {
        app.config.externalLogin = false;
        app.api.setExternalLogin(false);
        app.controller.loadView({
            module: "Login",
            layout: "login",
            create: true
        });
    }
})
