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
 * @class View.Views.Base.Quotes.ConfigColumnsView
 * @alias SUGAR.App.view.views.BaseQuotesConfigColumnsView
 * @extends View.Views.Base.Quotes.ConfigPanelView
 */
({
    /**
     * @inheritdoc
     */
    extendsFrom: 'QuotesConfigPanelView',

    /**
     * @inheritdoc
     */
    events: {
        'click .restore-defaults-btn': 'onClickRestoreDefaultsBtn'
    },

    /**
     * The default list of field names for the Quotes worksheet columns
     */
    listDefaultFieldNames: [
        'quantity',
        'product_template_name',
        'mft_part_num',
        'discount_price',
        'discount_field',
        'total_amount'
    ],

    /**
     * The Label names from each of the default fields
     */
    listDefaultFieldNameLabels: undefined,

    /**
     * The list header view
     * @type {View.Views.Base.Quotes.ConfigListHeaderColumnsView}
     */
    listHeaderView: undefined,

    /**
     * Contains an array of all the default fields to reset the list header
     */
    defaultFields: undefined,

    /**
     * Contains an array of all the current fields in the list header
     */
    listHeaderFields: undefined,

    /**
     * Products Module vardefs
     */
    productsFieldMeta: undefined,

    /**
     * @inheritdoc
     */
    initialize: function(options) {
        var productListMeta = app.metadata.getView('Products', 'quote-data-group-list');

        this._super('initialize', [options]);

        this.productsFieldMeta = app.metadata.getModule('Products', 'fields');

        //If service duration value and unit exists
        //Add a custom service_duration field in the productsFieldMeta
        if (!_.isUndefined(this.productsFieldMeta.service_duration_value) &&
            !_.isUndefined(this.productsFieldMeta.service_duration_unit)) {

            var durationField = {
                'name': 'service_duration',
                'type': 'fieldset',
                'css_class': 'service-duration-field',
                'label': 'LBL_SERVICE_DURATION',
                'inline': true,
                'show_child_labels': false,
                'fields': [
                    this.productsFieldMeta.service_duration_value,
                    this.productsFieldMeta.service_duration_unit,
                ],
                'related_fields': [
                    'service_start_date',
                    'service_end_date',
                    'renewable',
                    'service',
                ],
            };
            this.productsFieldMeta.service_duration = durationField;
        }

        this.defaultFields = [];

        // pluck all the fields arrays from panels and flatten into one array
        this.listHeaderFields = _.flatten(_.pluck(productListMeta.panels, 'fields'));
        // exclude the line_num field
        this.listHeaderFields = _.reject(this.listHeaderFields, function(field) {
            return field.name === 'line_num';
        });

        _.each(this.listHeaderFields, function(field) {
            field.labelModule = this._getFieldLabelModule(field);
        }, this);

        this.model.set(this.eventViewName, this.listHeaderFields);
    },

    /**
     * @inheritdoc
     */
    _getEventViewName: function() {
        return 'worksheet_columns';
    },

    /**
     * Returns the module to use for the label if no label module is given
     *
     * @param {Object} field
     * @return {string}
     * @private
     */
    _getFieldLabelModule: function(field) {
        var label = field.label || field.vname;
        var labelModule = field.labelModule || 'Products';
        var tmpLabel = app.lang.get(label, labelModule);

        if (tmpLabel.indexOf('LBL_') !== -1) {
            labelModule = 'Quotes';
        }

        return labelModule;
    },

    /**
     * @inheritdoc
     */
    _onDependentFieldsChange: function(context, fieldDeps) {
        var pFieldDeps;
        var pRelatedFields;
        var pRelatedField;
        var pDependentField;
        var tmpRelatedFields;
        var relatedFieldsList = [];
        var tmpField;

        this._super('_onDependentFieldsChange', [context, fieldDeps]);

        pFieldDeps = this.dependentFields.Products;
        pRelatedFields = this.relatedFields.Products;

        // build default fields
        var defaultWorksheetColumns = this.context.get('defaultWorksheetColumns');

        // pluck all the fields arrays from panels and flatten into one array
        this.defaultFields = _.flatten(_.pluck(defaultWorksheetColumns.panels, 'fields'));
        // exclude the line_num field
        this.defaultFields = _.reject(this.defaultFields, function(field) {
            return field.name === 'line_num';
        });

        // building Default Fields
        this.buildDefaultFields();

        _.each(this.panelFields, function(field) {
            pDependentField = pFieldDeps[field.name];
            pRelatedField = pRelatedFields[field.name];

            if (pDependentField) {
                tmpRelatedFields = _.extend({}, pDependentField.locked, pDependentField.related);

                if (!_.isEmpty(tmpRelatedFields)) {
                    field.dependentFields = tmpRelatedFields;
                    field.required = true;
                }

                if (field.required && !field.initialState) {
                    field.initialState = 'filled';
                    relatedFieldsList.push(field.name);
                }
            }

            if (pRelatedField) {
                tmpRelatedFields = _.extend({}, pRelatedField.locked, pRelatedField.related);

                if (!_.isEmpty(tmpRelatedFields)) {
                    field.relatedFields = field.relatedFields || [];

                    _.each(tmpRelatedFields, function(relField, relFieldName) {
                        field.relatedFields.push(relFieldName);
                    }, this);
                }
            }

            tmpField = _.find(this.listHeaderFields, function(headerField) {
                return headerField.name === field.name;
            });
            if (tmpField) {
                // if this panelField exists in listHeaderFields, set to visible
                field.initialState = 'checked';
            }
        }, this);

        this.model.set(this.eventViewName + '_related_fields', relatedFieldsList);

        // Signal to the layout that the fields for this panel are loaded
        this.layout.trigger('config:panel:fields:loaded', this);
    },

    /**
     *
     */
    buildDefaultFields: function() {
        var field;
        var fieldLabel;
        var fieldLabels = [];
        var fieldLabelModule;
        var tmpField;
        var _defaultFields = this.defaultFields;

        this.listDefaultFieldNameLabels = _.pluck(_defaultFields, 'name');
        var namesLen = this.listDefaultFieldNameLabels.length;

        // build the list header labels and defaultFields
        this.listDefaultFieldNameLabels = [];
        this.defaultFields = [];

        for (var i = 0; i < namesLen; i++) {
            // try to get view defs from the quote-data-group-list meta
            field = _.find(this.listHeaderFields, function(headerField) {
                return this.listDefaultFieldNames[i] === headerField.name;
            }, this);

            if (!field) {
                // if the field didn't exist in the group list meta, use the field vardef
                field = _.find(_defaultFields, {name: this.listDefaultFieldNames[i]}) ||
                this.productsFieldMeta[this.listDefaultFieldNames[i]];
            }

            // use either label (viewdefs) or vname (vardefs)
            if (field && (field.label || field.vname)) {
                fieldLabel = field.label || field.vname;

                // check Products strings first
                fieldLabel = app.lang.get(fieldLabel, 'Products');
                fieldLabelModule = 'Products';

                if (fieldLabel.indexOf('LBL_') !== -1) {
                    // if Products label just returned LBL_ string, check Quotes
                    fieldLabel = app.lang.get(fieldLabel, 'Quotes');
                    fieldLabelModule = 'Quotes';
                }

                fieldLabels.push(fieldLabel);

                tmpField = {
                    name: field.name,
                    label: fieldLabel,
                    labelModule: fieldLabelModule,
                    widthClass: field.widthClass,
                    css_class: field.css_class || field.cssClass || ''
                };
                if (field.name === 'product_template_name') {
                    tmpField.type = 'quote-data-relate';
                    tmpField.required = true;
                }
                if (field.type === 'currency') {
                    tmpField.convertToBase = true;
                    tmpField.showTransactionalAmount = true;
                    tmpField.related_fields = ['currency_id', 'base_rate'];
                }
                if (field.name === 'discount_field') {
                    tmpField.type = 'fieldset';
                    tmpField.css_class += ' discount-field quote-discount-percent';
                    tmpField.fields = [{
                        name: 'discount_amount',
                        label: 'LBL_DISCOUNT_AMOUNT',
                        type: 'discount-amount',
                        discountFieldName: 'discount_select',
                        related_fields: ['currency_id'],
                        convertToBase: true,
                        base_rate_field: 'base_rate',
                        showTransactionalAmount: true
                    }, {
                        name: 'discount_select',
                        type: 'discount-select',
                        options: [],
                    }];
                }

                // push the fieldDefs to default fields
                this.defaultFields.push(tmpField);
            }
        }

        this.listDefaultFieldNameLabels = fieldLabels.join(', ');
    },

    /**
     * @inheritdoc
     */
    _onConfigFieldChange: function(field, oldState, newState) {
        var fieldVarDef = _.find(this.defaultFields, {name: field.name}) ?
            _.find(this.defaultFields, {name: field.name}) :
            this.productsFieldMeta[field.name];
        var fieldViewDef;
        var wasVisible = oldState === 'checked';
        var isNowVisible = newState === 'checked';
        var isUnchecked = newState === 'unchecked';
        var columnChanged = false;
        var toggleRelatedFields;
        var serviceRelatedFieldsArr = [
            'service_duration',
            'service_start_date',
            'service_end_date',
            'renewable',
            'service'
        ];

        if (!wasVisible && isNowVisible) {
            // field was not visible, but now is visible
            fieldViewDef = {
                name: fieldVarDef.name,
                type: fieldVarDef.type,
                label: fieldVarDef.vname || fieldVarDef.label
            };

            if (fieldVarDef.type === 'relate') {
                fieldViewDef.id_name = fieldVarDef.id_name;
            }
            if (fieldVarDef.type === 'parent') {
                fieldViewDef.id_name = fieldVarDef.id_name;
                fieldViewDef.type_name = fieldVarDef.type_name;
            }

            fieldViewDef.name === 'discount_amount' ?
                (fieldViewDef.label = app.lang.get('LBL_DISCOUNT_AMOUNT_VALUE', 'Products')) :
                fieldViewDef.label;

            if (fieldViewDef.name === 'discount') {
                fieldViewDef = fieldVarDef;
            }

            fieldViewDef.labelModule = this._getFieldLabelModule(field);

            // add the column to header fields
            this.listHeaderView.addColumnHeaderField(fieldViewDef);

            // if a service field is added, then add all its related fields to the worksheet column as well
            if (_.intersection(fieldVarDef.related_fields, serviceRelatedFieldsArr).length > 0) {
                _.each(fieldVarDef.related_fields, function(relField) {
                    var relatedFieldVarDef = this.productsFieldMeta[relField];
                    fieldViewDef = {};
                    fieldViewDef = {
                        name: relatedFieldVarDef.name,
                        type: relatedFieldVarDef.type,
                        label: relatedFieldVarDef.vname || relatedFieldVarDef.label
                    };
                    fieldViewDef.labelModule = this._getFieldLabelModule(relatedFieldVarDef);
                    this.listHeaderView.addColumnHeaderField(fieldViewDef);
                }, this);
            }

            toggleRelatedFields = true;
            columnChanged = true;
        } else if (wasVisible && !isNowVisible) {
            // field was visible, but now is not visible, so remove from columns
            // remove the column from header fields
            this.listHeaderView.removeColumnHeaderField(fieldVarDef);
            // if a service field is removed, then remove all its related fields to the worksheet column as well
            if (_.intersection(fieldVarDef.related_fields, serviceRelatedFieldsArr).length > 0) {
                _.each(fieldVarDef.related_fields, function(relField) {
                    var relatedFieldVarDef = this.productsFieldMeta[relField];
                    this.listHeaderView.removeColumnHeaderField(relatedFieldVarDef);
                }, this);
            }

            toggleRelatedFields = false;
            columnChanged = true;
        } else if (!wasVisible && !isNowVisible && isUnchecked) {
            columnChanged = true;
            toggleRelatedFields = false;
        }

        if (columnChanged) {
            if (!_.isUndefined(toggleRelatedFields) && field.def.relatedFields) {
                _.each(field.def.relatedFields, function(fieldName) {
                    this.context.trigger(
                        'config:' + this.eventViewName + ':' + fieldName + ':related:toggle',
                        field,
                        toggleRelatedFields
                    );
                }, this);
            }
        }
    },

    /**
     * @inheritdoc
     */
    _getPanelFields: function() {
        return this.context.get('productsFields');
    },

    /**
     * @inheritdoc
     */
    _getPanelFieldsModule: function() {
        return 'Products';
    },

    /**
     * @inheritdoc
     */
    render: function() {
        this._super('render');

        this.listHeaderView = app.view.createView({
            context: this.context,
            eventViewName: this.eventViewName,
            type: 'config-list-header-columns',
            layout: this,
            model: this.model
        });

        this.$('.quote-data-list-table').append(this.listHeaderView.el);

        // set the column header fields and render
        this.listHeaderView.setColumnHeaderFields(this.listHeaderFields);
    },

    /**
     * Handles the click event when user clicks to Restore Default fields
     * @param evt
     */
    onClickRestoreDefaultsBtn: function(evt) {
        var fieldList = _.pluck(this.defaultFields, 'name');
        this.listHeaderView.setColumnHeaderFields(this.defaultFields);
        this.context.trigger('config:fields:' + this.eventViewName + ':reset', fieldList);
    },

    /**
     * @inheritdoc
     */
    onConfigPanelShow: function() {
        if (this.dependentFields) {
            //picking the service duration value and unit
            //these will be reinserted in the panelFields as a single fieldset
            var durationValueField =
                _.find(this.panelFields, function(field) { return field.name === 'service_duration_value'; });
            var durationUnitField =
                _.find(this.panelFields, function(field) { return field.name === 'service_duration_unit'; });

            //If service duration value and unit exists, don't add these to the howto panel columns
            //instead, add a custom service_duration field that ecapsulates both
            if (!_.isUndefined(durationValueField) && !_.isUndefined(durationUnitField)) {
                //removing the service duration unit and value fields from the howto panel
                this.panelFields = _.without(this.panelFields, durationUnitField, durationValueField);

                var durationField = {
                    'name': 'service_duration',
                    'type': 'tristate-checkbox',
                    'css_class': 'service-duration-field',
                    'label': 'LBL_SERVICE_DURATION',
                    'labelModule': 'Products',
                    'fields': [
                        {
                            'name': 'service_duration_value',
                            'label': 'LBL_SERVICE_DURATION_VALUE',
                        },
                        {
                            'name': 'service_duration_unit',
                            'label': 'LBL_SERVICE_DURATION_UNIT',
                        }
                    ],
                    'relatedFields': [
                        'service',
                        'service_start_date',
                        'service_end_date',
                        'renewable',
                    ],
                    'eventViewName': this.eventViewName,
                };
                this.panelFields = _.union(this.panelFields, [durationField]);
            }
            this.context.trigger('config:fields:change', this.eventViewName, this.panelFields);
        }
    },

    /**
     * @inheritdoc
     */
    _customFieldDef: function(def) {
        def.name === 'discount_amount' ?
            (def.label = app.lang.get('LBL_DISCOUNT_AMOUNT_VALUE', 'Products')) :
            def.label;
        def.eventViewName = this.eventViewName;

        return def;
    },

    /**
     * @inheritdoc
     */
    _dispose: function() {
        if (this.listHeaderView) {
            this.listHeaderView.dispose();
            this.listHeaderView = null;
        }

        this._super('_dispose');
    }
})
