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
 * @class View.Views.Base.AuditView
 * @alias SUGAR.App.view.views.BaseAuditView
 * @extends View.Views.Base.FilteredListView
 */
({
    extendsFrom: 'FilteredListView',

    fallbackFieldTemplate: 'list',

    /**
     * @inheritdoc
     * Assign base module and record id.
     * Override the new Audit collection
     * in order to fetch correct audit end-point.
     */
    initialize: function(options) {
        // in order to render the 'list' template on each field
        this.action = 'list';
        // populating metadata for audit module
        if (options.context.parent) {
            this.baseModule = options.context.parent.get('module');
            this.baseRecord = options.context.parent.get('modelId');
        }
        this._super('initialize', [options]);

       if (!this.collection) {
           this._initCollection();
       }
    },

    /**
     * Override the collection set up by new audit REST end-point.
     * @private
     */
    _initCollection: function() {
        var self = this;
        var AuditCollection = app.BeanCollection.extend({
            module: 'audit',
            baseModule: this.baseModule,
            baseRecordId: this.baseRecord,

            // FIXME PX-46: remove this function
            buildURL: function(params) {
                params = params || {};

                var parts = [],
                    url;
                parts.push(app.api.serverUrl);
                parts.push(this.baseModule);
                parts.push(this.baseRecordId);
                parts.push(this.module);
                url = parts.join('/');
                params = $.param(params);
                if (params.length > 0) {
                    url += '?' + params;
                }
                return url;
            },
            sync: function(method, model, options) {
                var auditedModel = self.context.get('model');
                var url = this.buildURL(options.params);
                var callbacks = app.data.getSyncCallbacks(method, model, options);
                var defaultSuccessCallback = app.data.getSyncSuccessCallback(method, model, options);
                callbacks.success = function(data, request) {
                    self._applyModelDataOnRecords(auditedModel, data.records);
                    return defaultSuccessCallback(data, request);
                };
                app.api.call(method, url, options.attributes, callbacks);
            }
        });
        this.collection = new AuditCollection();
    },

    /**
     * Filter the metadata in order to initiate the searchable fields.
     * @protected
     */
    _initFilter: function() {
        var filter = this._filter || _.chain(this.getFields())
            .filter(function(field) {
                return field.filter;
            })
            .map(function(field) {
                return {
                    name: field.name,
                    label: app.lang.get(field.label, this.module),
                    filter: field.filter,
                    type: field.type
                };
            }, this)
            .value();
        this.context.trigger('filteredlist:filter:set', _.pluck(filter, 'label'));

        if (_.isEmpty(filter)) {
            return;
        }
        this._filter = filter;
    },

    /**
     * Filtering collection that matches with search term.
     * In order to activate filtering on the field,
     * the filter term should be defined in the metadata.
     * There are three types of filter type (startsWith, contains, endsWith).
     */
    filterCollection: function() {
        var term = this.escapeRegExp(this.searchTerm);
        var filter = this._filter;
        var baseFields = this.model.fields;

        if (!_.isEmpty(term) && _.isString(term)) {
            this.filteredCollection = this.collection.filter(function(model) {
                return _.some(filter, function(params) {
                    var pattern = this._patternToReg[params.filter].replace('term', term);
                    var tester = new RegExp(pattern, 'i');
                    var fieldValue = '';
                    if (params.type === 'fieldtype') {
                        fieldValue = app.lang.get(baseFields[model.get(params.name)].vname, this.baseModule);
                    } else {
                        fieldValue = model.get(params.name);
                    }
                    if (_.isArray(fieldValue)) {
                        fieldValue = _.pluck(fieldValue, 'name').join(', ');
                    }
                    return tester.test(fieldValue);
                }, this);
            }, this);
        }
    },

    /**
     * Escape reserved chars of regular expression.
     *
     * @param {string} string Search term.
     */
    escapeRegExp: function(string) {
        return string.replace(/[.*+?^${}()|[\]\\]/g, '\\$&'); // $& means the whole matched string
    },

    /**
     * Apply erased field information from the model to records.
     *
     * @private
     */
    _applyModelDataOnRecords: function(model, records) {
        var erasedFields = model.get('_erased_fields');
        _.each(erasedFields, function(erasedField) {
            // Apply erased fields only for records that are marked
            var erasedFieldName = erasedField.field_name || erasedField;

            var properties;
            var recordsRequiringErasedFields;
            if (erasedField.field_name) {
                // email and other non-scalar erased fields
                // check both the before and after fields
                // of each record to see if it matches up with
                // an erased email's ID, and if so mark that field as erased
                var fieldsToCheck = ['before', 'after'];
                _.each(fieldsToCheck, function(fieldToCheck) {
                    properties = {field_name: erasedFieldName};
                    properties[fieldToCheck] = erasedField.id;
                    recordsRequiringErasedFields = _.where(records, properties);
                    _.each(recordsRequiringErasedFields, function(record) {
                        record._erased_fields = record._erased_fields || [];
                        record._erased_fields.push(fieldToCheck);
                    });
                });
            } else {
                properties = {field_name: erasedFieldName};
                recordsRequiringErasedFields = _.where(records, properties);
                _.each(recordsRequiringErasedFields, function(record) {
                    record._erased_fields = ['before', 'after'];
                });
            }
        });
    },

    /**
     * @inheritdoc
     * Instead of fetching context, it fetches the collection directly.
     */
    loadData: function() {
        if (this.collection.dataFetched) {
            return;
        }
        this.collection.fetch();
    },

    /**
     * @inheritdoc
     *
     * Patch audit models `before` and `after` fields with information of
     * original field available within parent model, in order to render
     * properly.
     */
    _renderData: function() {
        var parentModule = this.context.parent.get('module');
        var fields = app.metadata.getModule(parentModule).fields;

        _.each(this.collection.models, function(model) {
            model.fields = app.utils.deepCopy(this.metaFields);

            var before = _.findWhere(model.fields, {name: 'before'});
            _.extend(before, fields[model.get('field_name')], {name: 'before'});

            var after = _.findWhere(model.fields, {name: 'after'});
            _.extend(after, fields[model.get('field_name')], {name: 'after'});

            // relate fields can be stored in the audit log as id, relate, or varchar.
            // Make sure they get rendered as relate.
            var baseField = fields[model.get('field_name')];
            if (baseField && _.contains(['id', 'relate'], baseField.type)) {
                before.type = 'relate';
                after.type = 'relate';
            }

            // FIXME: Temporary fix due to time constraints, proper fix will be addressed in TY-359
            // We can check just `before` since `before` and `after` refer to same field
            if (_.contains(['multienum', 'enum'], before['type']) && before['function']) {
                before['type'] = 'base';
                after['type'] = 'base';
            }

            // FIXME: This method should not be used as a public method (though
            // it's being used everywhere in the app) this should be reviewed
            // when SC-3607 gets in
            model.fields = app.metadata._patchFields(
                this.module,
                app.metadata.getModule(this.module),
                model.fields
            );
        }, this);

        this._super('_renderData');
    }
})
