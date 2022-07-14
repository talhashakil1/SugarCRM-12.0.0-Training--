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
 * @class View.Views.Base.Opportunities.CreateView
 * @alias SUGAR.App.view.views.OpportunitiesCreateView
 * @extends View.Views.Base.CreateView
 */
({
    extendsFrom: 'CreateView',

    /**
     * Used by the alert openRLICreate method
     */
    createdModel: undefined,

    /**
     * Used by the openRLICreate method
     */
    listContext: undefined,

    /**
     * The original success message to call from the new one we set in the getCustomSaveOptions method
     */
    originalSuccess: undefined,

    /**
     * Holds a reference to the alert this view triggers
     */
    alert: undefined,

    /**
     * What are we viewing by
     */
    viewBy: 'Opportunities',

    /**
     * Does the current user has access to RLI's?
     */
    hasRliAccess: true,

    /**
     * Flag to store if the user has confirmed the save if there are validation warnings
     *
     * @property {boolean}
     */
    hasConfirmedSave: false,


    /**
     * If subpanel models are valid
     */
    validSubpanelModels: true,

    /**
     * @inheritdoc
     */
    initialize: function(options) {
        this.plugins = _.union(this.plugins, ['LinkedModel']);
        this.viewBy = app.metadata.getModule('Opportunities', 'config').opps_view_by;
        this.hasRliAccess = app.acl.hasAccess('edit', 'RevenueLineItems');
        this._super('initialize', [options]);
        app.utils.hideForecastCommitStageField(this.meta.panels);
    },

    /**
     * @inheritdoc
     */
    initiateSave: function(callback) {
        this.disableButtons();
        async.waterfall([
            _.bind(function(cb) {
                async.parallel([
                    _.bind(this.validateSubpanelModelsWaterfall, this),
                    _.bind(this.validateModelWaterfall, this)
                ], function(err) {
                    // err is undefined if no errors
                    cb(!_.isUndefined(err));
                });
            }, this),
            _.bind(this.dupeCheckWaterfall, this),
            _.bind(this.createRecordWaterfall, this)
        ], _.bind(function(error) {
            this.enableButtons();
            if (error && error.status == 412 && !error.request.metadataRetry) {
                this.handleMetadataSyncError(error);
            } else if (!error && !this.disposed) {
                this.context.lastSaveAction = null;
                callback();
            }
        }, this));
    },

    /**
     * Check to see if all fields are valid
     *
     * @inheritdoc
     */
    validateModelWaterfall: function(callback) {
        // override this.model.doValidate() to display error if subpanel model validation failed
        this.model.trigger('validation:start');
        this.model.isValidAsync(this.getFields(this.module), _.bind(function(isValid, errors) {
            this._handleValidationComplete(isValid, errors, callback);
        }, this));
    },

    /**
     * Check to see if there are subpanel create models on this view
     * And trigger an event to tell the subpanel to validate itself
     *
     * @inheritdoc
     */
    validateSubpanelModelsWaterfall: function(callback) {
        this.hasSubpanelModels = false;
        this.validSubpanelModels = true;
        _.each(this.context.children, function(child) {
            if (child.get('isCreateSubpanel')) {
                this.hasSubpanelModels = true;
                this.context.trigger('subpanel:validateCollection:' + child.get('link'),
                    _.bind(function(notValid) {
                        if (this.validSubpanelModels && notValid) {
                            this.validSubpanelModels = false;
                        }
                        callback(notValid);
                    }, this),
                    true
                );
            }
        }, this);

        // If there are no subpanel models, callback false so the waterfall can continue
        if (!this.hasSubpanelModels) {
            return callback(false);
        }
    },

    /**
     * When validation is complete, see if there are any cascade warnings to show
     * @param isValid
     * @param errors
     * @param callback
     * @private
     */
    _handleValidationComplete: function(isValid, errors, callback) {
        let hasRlis = this.viewBy === 'RevenueLineItems' && this.hasRliAccess;
        let cascadeWarning = this.validateCascadeFields();
        if (this.validSubpanelModels &&
            isValid &&
            hasRlis &&
            cascadeWarning &&
            (!this._isOnLeadConvert() || !this.hasConfirmedSave)
        ) {
            app.alert.show('delete_recurrence_confirmation', {
                title: app.lang.get('LBL_WARNING'),
                level: 'confirmation',
                messages: cascadeWarning,
                onConfirm: () => {
                    this.hasConfirmedSave = true;
                    this.model.trigger('validation:success');
                    this.model.trigger('validation:complete', this.model._processValidationErrors(errors));
                    callback(!isValid);
                },
                onCancel: () => {
                    this.enableButtons();
                }
            });
        } else {
            if (this.validSubpanelModels && isValid) {
                this.model.trigger('validation:success');
            } else if (!this.validSubpanelModels) {
                this.model.trigger('error:validation');
            }
            this.model.trigger('validation:complete', this.model._processValidationErrors(errors));
            callback(!isValid);
        }
    },


    /**
     * Checks if the Opp create view is on the leads convert layout
     * @return {boolean}
     * @private
     */
    _isOnLeadConvert: function() {
        return this.context && this.context.parent && this.context.parent.get('convertModuleList');
    },

    /**
     * Gets the RLIs under this Opp
     * @return {*}
     * @private
     */
    _getRliCollection: function() {
        let rliContext = this.context.getChildContext({link: 'revenuelineitems'});
        rliContext.prepare();
        return rliContext.get('collection');
    },

    /**
     * Returns true if every RLI is not marked as a service
     * @param rliCollection
     * @return {boolean}
     * @private
     */
    _checkForNonServiceRlis: function(rliCollection) {
        return rliCollection.models.every(model => !app.utils.isTruthy(model.get('service')));
    },

    /**
     * Returns true if every RLI has an uneditable duration
     * @param rliCollection
     * @return {boolean}
     * @private
     */
    _checkForLockedDurationServiceRlis: function(rliCollection) {
        let serviceRlis = rliCollection.models.filter(model => app.utils.isTruthy(model.get('service')));
        if (serviceRlis.length === 0) {
            return false;
        }
        return serviceRlis.every(model => {
            return !_.isEmpty(model.get('add_on_to_id')) || app.utils.isTruthy(model.get('lock_duration'));
        });
    },

    /**
     * Checks if there are any warnings to show for the cascade fields. Returns the message if a warning exists,
     * or null otherwise.
     * @return {null|string}
     */
    validateCascadeFields: function() {
        if (this.viewBy !== 'RevenueLineItems' || !this.hasRliAccess) {
            return null;
        }

        let rliCollection = this._getRliCollection();
        if (_.isEmpty(rliCollection)) {
            return null;
        }

        let durationFields = ['service_duration_value', 'service_duration_unit'];
        let durationFieldsEmpty = durationFields.every(field => !this.model.get(field));
        let startDateEmpty = _.isEmpty(this.model.get('service_start_date'));
        let durationChecked = app.utils.isTruthy(this.model.get('service_duration_cascade_checked'));
        let startDateChecked = app.utils.isTruthy(this.model.get('service_start_date_cascade_checked'));

        if (this._checkForNonServiceRlis(rliCollection)) {
            let fieldsWithErrors = [];
            if (!durationFieldsEmpty && durationChecked) {
                fieldsWithErrors.push('LBL_SERVICE_DURATION');
            }
            if (!startDateEmpty && startDateChecked) {
                fieldsWithErrors.push('LBL_SERVICE_START_DATE');
            }
            if (!_.isEmpty(fieldsWithErrors)) {
                return this._buildCascadeWarning(fieldsWithErrors, 'LBL_CASCADE_SERVICE_WARNING');
            }
        }

        if (this._checkForLockedDurationServiceRlis(rliCollection) && !durationFieldsEmpty && durationChecked) {
            return this._buildCascadeWarning(['LBL_SERVICE_DURATION'], 'LBL_CASCADE_DURATION_WARNING');
        }

        return null;
    },

    /**
     * Builds the cascade field warnings from the provided field labels
     * @param fieldLabels
     * @param baseLabel
     * @return {string}
     * @private
     */
    _buildCascadeWarning: function(fieldLabels, baseLabel) {
        let translatedFieldLabels = fieldLabels.map(fieldLabel => app.lang.get(fieldLabel, 'Opportunities'));
        let andLabel = app.lang.get('LBL_AND').toLowerCase().trim();
        return translatedFieldLabels.join(` ${andLabel} `) + app.lang.get(baseLabel, 'Opportunities');
    },

    /**
     * Custom logic to make sure that none of the rli records have changed
     *
     * @inheritdoc
     */
    hasUnsavedChanges: function() {
        var ret = this._super('hasUnsavedChanges');
        if (this.viewBy === 'RevenueLineItems' && this.hasRliAccess && ret === false) {
            // now lets check for RLI's
            var rli_context = this.context.getChildContext({link: 'revenuelineitems'});
            rli_context.prepare();

            // if there is more than one record in the related context collection, then return true
            if (rli_context.get('collection').length > 1) {
                ret = true;
            } else if (rli_context.get('collection').length === 0) {
                // if there is no RLI in the related context collection, then return false
                ret = false;
            } else {
                // if there is only one model, we need to verify that the model is not dirty.
                // check the non default attributes to make sure they are not empty.
                var model = rli_context.get('collection').at(0),
                    attr_keys = _.difference(_.keys(model.attributes), ['id']),
                    // if the value is not empty and it doesn't equal the default value
                    // we have a dirty model
                    unsavedRliChanges = _.find(attr_keys, function(attr) {
                        var val = model.get(attr);
                        return (!_.isEmpty(val) && (model._defaults[attr] !== val));
                    });

                ret = (!_.isUndefined(unsavedRliChanges));
            }
        }

        return ret;
    },

    /**
     * @inheritdoc
     */
    getCustomSaveOptions: function(options) {
        if (this.viewBy === 'RevenueLineItems') {
            this.createdModel = this.model;
            // since we are in a drawer
            this.listContext = this.context.parent || this.context;
            this.originalSuccess = options.success;

            if (app.metadata.getModule(this.module).isTBAEnabled === true) {
                // make sure new RLIs inherit opportunity's teamset and selected teams
                var addedRLIs = this.createdModel.get('revenuelineitems') || false;
                if (addedRLIs && addedRLIs.create && addedRLIs.create.length) {
                    _.each(addedRLIs.create, function (data) {
                        data.team_name = this.createdModel.get('team_name');
                    }, this);
                }
            }

            var success = _.bind(function(model) {
                this.originalSuccess(model);
                this._checkForRevenueLineItems(model, options);
            }, this);

            return {
                success: success
            };
        }
    },

    /**
     * Check for Revenue Line Items, if the user has edit access and non exist, then
     * display the RLI Warning Message.
     *
     * @param {{Data.Bean}} model
     * @param {{object}} options
     * @private
     */
    _checkForRevenueLineItems: function(model, options) {
        // lets make sure we have edit/create access to RLI's
        // if we do, lets make sure that the values where added
        if (this.hasRliAccess) {
            // check to see if we added RLIs during create
            var addedRLIs = model.get('revenuelineitems') || false;
            addedRLIs = (addedRLIs && addedRLIs.create && addedRLIs.create.length);
            if (!addedRLIs) {
                this.showRLIWarningMessage(this.listContext.get('module'));
            }
        }
    },

    /**
     * Display the warning message about missing RLIs
     */
    showRLIWarningMessage: function() {
        // add a callback to close the alert if users navigate from the page
        app.routing.before('route', this.dismissAlert, this);

        var message = app.lang.get('TPL_RLI_CREATE', 'Opportunities') +
            '  <a href="javascript:void(0);" id="createRLI">' +
            app.lang.get('TPL_RLI_CREATE_LINK_TEXT', 'Opportunities') + '</a>';

        this.alert = app.alert.show('opp-rli-create', {
            level: 'warning',
            autoClose: false,
            title: app.lang.get('LBL_ALERT_TITLE_WARNING') + ':',
            messages: message,
            onLinkClick: _.bind(function() {
                app.alert.dismiss('create-success');
                this.openRLICreate();
            }, this),
            onClose: _.bind(function() {
                app.routing.offBefore('route', this.dismissAlert, this);
            }, this)
        });
    },

    /**
     * Handle dismissing the RLI create alert
     */
    dismissAlert: function(data) {
        // if we are not navigating to the Opps list view, dismiss the alert
        if (data && !(data.args && data.args[0] === 'Opportunities' && data.route === 'list')) {
            app.alert.dismiss('opp-rli-create');
            // close RLI warning alert
            // remove before route event listener
            app.routing.offBefore('route', this.dismissAlert, this);
        }
    },

    /**
     * Open a new Drawer with the RLI Create Form
     */
    openRLICreate: function() {
        // close RLI warning alert
        this.dismissAlert(true);

        var model = this.createLinkModel(this.createdModel || this.model, 'revenuelineitems');

        app.drawer.open({
            layout: 'create',
            context: {
                create: true,
                module: model.module,
                model: model
            }
        }, _.bind(function(model) {
            if (!model) {
                return;
            }

            var ctx = this.listContext || this.context;

            ctx.reloadData({recursive: false});

            // reload opportunities and RLIs subpanels
            ctx.trigger('subpanel:reload', {links: ['opportunities', 'revenuelineitems']});
        }, this));
    },

    /**
     * @inheritdoc
     */
    _dispose: function() {
        if (this.alert) {
            this.alert.getCloseSelector().off('click');
        }

        this._super('_dispose', []);
    }
})
