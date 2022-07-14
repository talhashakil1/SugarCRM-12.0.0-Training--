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
 * @class View.Views.Base.ForecastsListHeaderpaneView
 * @alias SUGAR.App.view.layouts.BaseForecastsListHeaderpaneView
 * @extends View.Views.Base.ListHeaderpaneView
 */
({
    extendsFrom: 'HeaderpaneView',

    plugins: ['FieldErrorCollection'],

    /**
     * If the Save button should be hidden or not
     * @type Boolean
     */
    saveBtnDisabled: true,

    /**
     * If the Commit button should be disabled or not
     * @type Boolean
     */
    commitBtnDisabled: true,

    /**
     * Flag for if the Cancel button should be hidden or not
     * @type Boolean
     */
    cancelBtnHidden: true,

    /**
     * If any fields in the view have errors or not
     * @type Boolean
     */
    fieldHasErrorState: false,

    /**
     * The Save Draft Button Field
     * @type View.Fields.Base.ButtonField
     */
    saveDraftBtnField: null,

    /**
     * The Commit Button Field
     * @type View.Fields.Base.ButtonField
     */
    commitBtnField: null,

    /**
     * Cancel button
     * @type View.Fields.Base.ButtonField
     */
    cancelBtnField: null,

    /**
     * If Forecasts' data sync is complete and we can render buttons
     * @type Boolean
     */
    forecastSyncComplete: false,

    /**
     * Commit button tooltip labels
     * @type Object
     */
    commitBtnTooltips: {},

    /**
     * Save button labels
     * @type Object
     */
    saveBtnLabels: {},

    /**
     * Holds the prefix string that is rendered before the same of the user
     * @type String
     */
    forecastWorksheetLabel: '',

    /**
     * @inheritdoc
     */
    initialize: function(options) {
        this._super('initialize', [options]);

        this.commitBtnTooltips = {
            'Rollup': app.lang.get('LBL_COMMIT_TOOLTIP_MGR', this.module),
            'Direct': app.lang.get('LBL_COMMIT_TOOLTIP_REP', this.module),
        };

        let moduleName = app.metadata.getModule('Opportunities', 'config').opps_view_by;
        let translatedModule = app.lang.get('LBL_MODULE_NAME', moduleName);
        this.saveBtnLabels = {
            'Rollup': app.lang.get('LBL_SAVE_LABEL_MGR', this.module),
            'Direct': `${app.lang.get('LBL_SAVE_LABEL_REP', this.module)}${translatedModule}`,
        };

        // Update label for worksheet
        let selectedUser = this.context.get('selectedUser');
        if (selectedUser) {
            this._title = this._getForecastWorksheetLabel(selectedUser);
        }
    },

    /**
     * @inheritdoc
     */
    bindDataChange: function() {
        this.layout.context.on('forecasts:sync:start', function() {
            this.forecastSyncComplete = false;
            this.setButtonStates();
        }, this);
        this.layout.context.on('forecasts:sync:complete', function() {
            this.forecastSyncComplete = true;
            this.setButtonStates();
        }, this);

        this.on('render', function() {
            // switching from mgr to rep leaves $el null, so make sure we grab a fresh reference
            // to the field if it's there but $el is null in the current reference
            if (!this.commitBtnField || (this.commitBtnField && _.isNull(this.commitBtnField.$el))) {
                // get reference to the Commit button Field
                this.commitBtnField = this.getField('commit_button');
            }
            this.saveDraftBtnField = this.getField('save_draft_button');
            this.cancelBtnField = this.getField('cancel_button');

            this.saveDraftBtnField.hide();
            this.commitBtnField.setDisabled();
            this.cancelBtnField.hide();
        }, this);

        this.context.on('change:selectedUser', function(model, changed) {
            this._title = this._getForecastWorksheetLabel(changed);
            if (!this.disposed) {
                this.render();
            }
        }, this);

        this.context.on('plugin:fieldErrorCollection:hasFieldErrors', function(collection, hasErrors) {
            if(this.fieldHasErrorState !== hasErrors) {
                this.fieldHasErrorState = hasErrors;
                this.setButtonStates();
            }
        }, this);

        this.context.on('button:print_button:click', function() {
            window.print();
        }, this);

        this.context.on('forecasts:worksheet:is_dirty', (worksheetType, isDirty) => {
            isDirty = !isDirty;
            if (this.saveBtnDisabled !== isDirty ||
                this.commitBtnDisabled !== isDirty ||
                this.cancelBtnHidden !== isDirty
            ) {
                this.saveBtnDisabled = isDirty;
                this.commitBtnDisabled = isDirty && this.context.get('lastCommitModel') instanceof Backbone.Model;
                this.cancelBtnHidden = isDirty;
                this.setButtonStates();
            }
        });

        let allBtnEvents = 'button:commit_button:click button:save_draft_button:click button:cancel_button:click';
        this.context.on(allBtnEvents, () => {
            if (!this.saveBtnDisabled || !this.commitBtnDisabled || !this.cancelBtnHidden) {
                this.saveBtnDisabled = true;
                this.commitBtnDisabled = this.context.get('lastCommitModel') instanceof Backbone.Model;
                this.cancelBtnHidden = true;
                this.setButtonStates();
            }
        });

        this.context.on('forecasts:worksheet:saved', function(totalSaved, worksheet_type, wasDraft) {
            if(wasDraft === true && this.commitBtnDisabled) {
                this.commitBtnDisabled = false;
                this.setButtonStates();
            }
        }, this);

        this.context.on('forecasts:worksheet:needs_commit', function(worksheet_type) {
            if (this.commitBtnDisabled) {
                this.commitBtnDisabled = false;
                this.setButtonStates();
            }
        }, this);

        // When a forecast datapoint value is changed, we want to enable/show
        // the cancel and commit buttons, but not the save draft button.
        this.listenTo(this.context, 'forecasts:datapoint:changed', function() {
            if (this.cancelBtnHidden || this.commitBtnDisabled) {
                this.cancelBtnHidden = false;
                this.commitBtnDisabled = false;
                this.setButtonStates();
            }
        });

        this._super('bindDataChange');
    },

    /**
     * Sets the appropriate button states
     */
    setButtonStates: function() {
        // make sure all data sync has finished before updating button states
        if(this.forecastSyncComplete) {
            // fieldHasErrorState trumps the disabled flags, but when it's cleared
            // revert back to whatever states the buttons were in
            if (this.fieldHasErrorState) {
                this.cancelBtnField.hide();
                this.saveDraftBtnField.hide();
                this.commitBtnField.setDisabled(true);
                this.commitBtnField.$('.commit-button').tooltip();
            } else {
                this.commitBtnField.setDisabled(this.commitBtnDisabled);

                if (this.cancelBtnHidden) {
                    this.cancelBtnField.hide();
                } else {
                    this.cancelBtnField.show();
                }

                if (this.saveBtnDisabled) {
                    this.saveDraftBtnField.hide();
                } else {
                    this.saveDraftBtnField.show();
                }

                if (!this.commitBtnDisabled) {
                    this.commitBtnField.$('.commit-button').tooltip('destroy');
                } else {
                    this.commitBtnField.$('.commit-button').tooltip();
                }
            }
        } else {
            // disable buttons while syncing
            if (this.saveDraftBtnField) {
                this.saveDraftBtnField.hide();
            }
            if (this.commitBtnField) {
                this.commitBtnField.setDisabled(true);
            }
            if (this.cancelBtnField) {
                this.cancelBtnField.hide();
            }
        }

        let worksheetType = this._getWorksheetType();
        if (worksheetType) {
            this.$('.commit-button').attr('title', this.commitBtnTooltips[worksheetType]);
            this.$('.save-draft-button').text(this.saveBtnLabels[worksheetType]);
        }
    },

    /**
     * Gets the current worksheet type
     * @return {string} Either "Rollup" or "Direct". Returns empty string if current user could not be found
     * @private
     */
    _getWorksheetType: function() {
        let selectedUser = this.context.get('selectedUser');
        if (!selectedUser) {
            return '';
        }
        return app.utils.getForecastType(selectedUser.is_manager, selectedUser.showOpps);
    },

    /**
     * Gets the correct language label dependent on "Rollup" vs "Direct" worksheet
     * @param {*} selectedUser The current user whose worksheet is being viewed, stored in this.context
     * @return {string}
     * @private
     */
    _getForecastWorksheetLabel: function(selectedUser) {
        return this._getWorksheetType() === 'Rollup' ?
            app.lang.get('LBL_RU_TEAM_FORECAST_HEADER', this.module, {name: selectedUser.full_name}) :
            app.lang.get('LBL_FDR_FORECAST_HEADER',
                this.module,
                {name: selectedUser.full_name}
            );
    },

    /**
     * @inheritdoc
     */
    _renderHtml: function() {
        if(!this._title) {
            var user = this.context.get('selectedUser') || app.user.toJSON();
            this._title = user.full_name;
        }

        this._super('_renderHtml');
    },

    /**
     * @inheritdoc
     */
    _dispose: function() {
        if(this.layout.context) {
            this.layout.context.off('forecasts:sync:start', null, this);
            this.layout.context.off('forecasts:sync:complete', null, this);
        }
        this.stopListening();
        this._super('_dispose');
    }
})
