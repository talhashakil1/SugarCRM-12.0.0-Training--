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
 * Assign Record action configuration view
 *
 * @class View.Views.Base.AdministrationActionbuttonAssignRecordView
 * @alias SUGAR.App.view.views.BaseAdministrationActionbuttonAssignRecordView
 * @extends View.View
 */
({
    /**
     * @inheritdoc
     */
    initialize: function(options) {
        this._beforeInit(options);
        this._super('initialize', [options]);

        this._initProperties();
        this._registerEvents();
    },

    /**
     * Initialization of properties needed before calling the sidecar/backbone initialize method
     *
     * @param {Object} options
     *
     */
    _beforeInit: function(options) {
        this._buttonId = options.buttonId;
        this._actionId = options.actionId;

        if (options.actionData &&
            options.actionData.properties &&
            Object.keys(options.actionData.properties).length !== 0) {
            this._properties = options.actionData.properties;
        } else {
            this._properties = {
                id: '',
                name: ''
            };
        }
    },

    /**
     * Property initialization, nothing to do for this view
     *
     */
    _initProperties: function() {
    },

    /**
     * Context event registration, nothing to do for this view
     *
     */
    _registerEvents: function() {
    },

    /**
     * @inheritdoc
     */
    _render: function() {
        this._super('_render');

        this._createSelection();
    },

    /**
     * Some basic validation of properties
     *
     * @return {bool}
     */
    canSave: function() {
        if (this._properties.id === '') {
            app.alert.show('alert_actionbutton_assign_nodata', {
                level: 'error',
                title: app.lang.get('LBL_ACTIONBUTTON_INVALID_DATA'),
                messages: app.lang.get('LBL_ACTIONBUTTON_SELECT_RECORD'),
                autoClose: true,
                autoCloseDelay: 5000
            });

            return false;
        }

        return true;
    },

    /**
     * View setup, nothing to do for this view
     *
     */
    setup: function() {
    },

    /**
     * Return action configuration
     *
     * @return {Object}
     */
    getProperties: function() {
        return this._properties;
    },

    /**
     * Update action properties & UI based on selection
     *
     * @param {Object} selection
     *
     */
    setValue: function(selection) {
        if (selection) {
            this._properties = {
                id: selection.id,
                name: selection.name
            };

            this._updateSelect2View();
            this._updateActionProperties();
        }
    },

    /**
     * Update Select2 selection with configured action
     *
     */
    _updateSelect2View: function() {
        if (this.disposed) {
            return;
        }

        this.$('[name="preset_user_name"]').select2('data', {
            id: this._properties.id,
            text: this._properties.name
        });
    },

    /**
     * Update action properties in context
     *
     */
    _updateActionProperties: function() {
        // update action data into the main data container
        var ctxModel = this.context.get('model');
        var buttonsData = ctxModel.get('data');
        buttonsData.buttons[this._buttonId].actions[this._actionId].properties = this._properties;

        ctxModel.set('data', buttonsData);
    },

    /**
     * Create relate field against Users module
     *
     */
    _createSelection: function() {
        this._disposeUserSelectField();

        this.model.set({
            preset_user_name: this._properties.name,
            preset_user_id: this._properties.id,
            name: this._properties.name,
        });

        this.userSelectField = app.view.createField({
            def: {
                type: 'relate',
                module: 'Users',
                name: 'preset_user_name',
                rname: 'name',
                id_name: 'preset_user_id',
            },
            view: this,
            viewName: 'edit',
        });

        this.userSelectField.render();
        this.userSelectField.setValue = _.bind(this.setValue, this);
        this.$('[data-container="field"]').append(this.userSelectField.$el);
    },

    /**
     * Dispose the relate sidecar field
     *
     */
    _disposeUserSelectField: function() {
        if (this.userSelectField) {
            this.userSelectField.dispose();
            this.userSelectField = null;
        }
    },

    /**
     * @inheritdoc
     */
    _dipose: function() {
        this._disposeUserSelectField();

        this._super('_dispose');
    },
});
