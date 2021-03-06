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
 * @class View.Fields.Base.RevenueLineItems.DateField
 * @alias SUGAR.App.view.fields.BaseRevenueLineItemsDateField
 * @extends View.Fields.Base.DateField
 */
({
    extendsFrom: 'DateField',

    /**
     * List of valid cascadable fields of this type
     * @property {Array}
     */
    cascadableFields: ['date_closed', 'service_start_date'],

    /**
     * @inheritdoc
     */
    bindDataChange: function() {
        this._super('bindDataChange');

        if (this.model && this.name && this.name === 'service_start_date') {
            this.model.on('addon:pli:changed', this.handleRecalculateServiceDuration, this);
            this.model.on('change:' + this.name, this.handleRecalculateServiceDuration, this);
        }

        if (this.view.name === 'subpanel-for-opportunities-create' && this.cascadableFields.includes(this.name)) {
            let oppModel = this.context.parent.get('model');
            oppModel.on('cascade:checked:' + this.name, function(checked) {
                if (this.disposed || !app.utils.isRliFieldValidForCascade(this.model, this.name)) {
                    return;
                }
                this.setDisabled(checked, {trigger: true});
            }, this);

            this.context.on('field:disabled', function(fieldName) {
                if (this.name === fieldName) {
                    let oppModel = this.context.parent.get('model');
                    if (app.utils.isTruthy(oppModel.get(this.name + '_cascade_checked'))) {
                        this.setDisabled(true);
                    }
                }
            }, this);
        }
    },

    /**
     * If this is a coterm RLI, recalculate the service duration when the start date
     * changes so that the end date remains constant.
     */
    handleRecalculateServiceDuration: function() {
        if (!_.isEmpty(this.model.get('add_on_to_id')) && app.utils.isTruthy(this.model.get('service'))) {
            var startDate = app.date(this.model.get('service_start_date'));
            var endDate = app.date(this.model.get('service_end_date'));

            if (startDate.isSameOrBefore(endDate)) {
                // we want to be inclusive of the end date
                endDate.add(1, 'days');
            }

            // calculates the whole years, months, or days
            var wholeDurationUnit = this.getWholeDurationUnit(
                startDate.format('YYYY-MM-DD'),
                endDate.format('YYYY-MM-DD')
            );

            if (!_.isEmpty(wholeDurationUnit)) {
                this.model.set('service_duration_unit', wholeDurationUnit);
                this.model.set('service_duration_value', endDate.diff(startDate, wholeDurationUnit + 's'));
            } else {
                this.model.set('service_duration_unit', 'day');
                this.model.set('service_duration_value', endDate.diff(startDate, 'days'));
            }
        }
    },

    /**
     * Gets the whole years, months, or days between two dates
     *
     * @param {string} startDate the start date
     * @param {string} endDate the end date
     * @return {string} whole year, month or day unit
     */
    getWholeDurationUnit: function(startDate, endDate) {
        var start = app.date(startDate);
        var end = app.date(endDate);

        var years = end.diff(start, 'years');
        start.add(years, 'years');
        var months = end.diff(start, 'months');
        start.add(months, 'months');
        var days = end.diff(start, 'days');

        return days > 0 ? 'day' : (months > 0 ? 'month' : (years > 0 ? 'year' : ''));
    }
})
