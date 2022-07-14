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
    extendsFrom: 'RecordView',

    /**
     * @inheritdoc
     */
    initialize: function(options) {
        this.plugins = _.union(this.plugins || [], ['HistoricalSummary']);
        this._super('initialize', [options]);
    },

    /**
     * Remove id, status and converted fields
     * (including associations created during conversion) when duplicating a Lead
     * @param prefill
     */
    setupDuplicateFields: function(prefill){
        // Clear sugar predict fields
        const predictFields = [
            'ai_icp_fit_score_classification',
            'ai_icp_fit_score_classification_c',
            'ai_conv_score_classification',
            'ai_conv_score_classification_c'
        ];
        predictFields.forEach(fieldName => prefill.unset(fieldName));

        var duplicateBlackList = ['id', 'status', 'converted', 'account_id', 'opportunity_id', 'contact_id'];
        _.each(duplicateBlackList, function(field){
            if(field && prefill.has(field)){
                //set blacklist field to the default value if exists
                if (!_.isUndefined(prefill.fields[field]) && !_.isUndefined(prefill.fields[field].default)) {
                    prefill.set(field, prefill.fields[field].default);
                } else {
                    prefill.unset(field);
                }
            }
        });
    }
})
