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
 * @class View.Fields.Base.Quotes.CopyField
 * @alias SUGAR.App.view.fields.BaseQuotesCopyField
 * @extends View.Fields.Base.CopyField
 */
({
    extendsFrom: 'CopyField',

    /**
     * If this field is on a view that is converting from a "Ship To" Subpanel
     */
    isConvertingFromShipping: undefined,

    /**
     * If this is a Quote Record Copy
     */
    isCopy: undefined,

    /**
     * Is this the first time the Copy field has run
     */
    firstRun: undefined,

    /**
     * @inheritdoc
     */
    initialize: function(options) {
        this._super('initialize', [options]);

        this.firstRun = true;
        this.isCopy = this.context.get('copy') || false;
        this.isConvertingFromShipping = this.view.isConvertFromShippingOrBilling === 'shipping';
    },

    /**
     * Extending to set Shipping Account Name field editable after copy
     *
     * @inheritdoc
     */
    sync: function(enable) {
        var shippingAcctNameField;
        var isChecked = this._isChecked();

        // do not sync field mappings if this is a quote record copy
        if (this.isCopy) {
            enable = false;
        }

        this._super('sync', [enable]);

        // do not sync field mappings if this is a quote record copy
        if (this.firstRun) {
            this.firstRun = false;
        }

        // if this is coming from a Ship To subpanel and the Copy Billing to Shipping box
        // is not checked then re-enable the Shipping Account Name field so it can be canceled
        if (!isChecked) {
            shippingAcctNameField = this.getField('shipping_account_name');
            if (shippingAcctNameField) {
                shippingAcctNameField.setDisabled(false);
            }
        }
    },

    /**
     * @inheritdoc
     * Overwriting the copy method so that the billing and shipping details are correct when a quote is created from
     * Accounts Quotes Bill-to or Ship-to subpanel
     */
    copy: function(from, to) {
        var _link = this.context.get('fromLink');
        var _fromModule = this.context.previous('parentModel') ?
            this.context.previous('parentModel').get('_module') :
            '';

        // came from Accounts Quote Bill-To
        if (_link === 'quotes' && this.firstRun === true && _fromModule === 'Accounts') {
            var billingAccounts = this.model.get('billing_accounts');

            if (!this.model.has(from)) {
                return;
            }

            if (_.isUndefined(this._initialValues[to])) {
                this._initialValues[to] = this.model.get(to);
            }

            if (to === 'shipping_account_name') {
                this.model.set(to, billingAccounts.name);
            } else if (to === 'shipping_account_id') {
                this.model.set(to, billingAccounts.id);
            } else if (app.acl.hasAccessToModel('edit', this.model, to)) {
                this.model.set(to, billingAccounts[to]);
            }

        } else if (_link === 'quotes_shipto' && this.firstRun === true && _fromModule === 'Accounts') { // came from
            // Accounts Quote Ship-To
            var shippingAccounts = this.model.get('shipping_accounts');

            if (_.isUndefined(this._initialValues[to])) {
                this._initialValues[to] = this.model.get(to);
            }

            if (to === 'shipping_account_name') {
                this.model.set(from, shippingAccounts.name);
            } else if (to === 'shipping_account_id') {
                this.model.set(from, shippingAccounts.id);
            } else if (app.acl.hasAccessToModel('edit', this.model, from)) {
                this.model.set(from, shippingAccounts[from]);
            }
        } else {
            this._super('copy', [from, to]);
        }
    },

    /**
     * Extending to add the model value condition in pre-rendered versions of the field
     *
     * @inheritdoc
     */
    toggle: function() {
        this.sync(this._isChecked());
    },

    /**
     * Pulling this out to a function that can be checked from multiple places if the field
     * is checked or if the field does not exist yet (pre-render) then use the model value
     *
     * @return {boolean} True if the field is checked or false if not
     * @private
     */
    _isChecked: function() {
        return this.$fieldTag ? this.$fieldTag.is(':checked') : this.model.get(this.name);
    },

    /**
     * Extending to check if we need to add sync events or not
     *
     * @inheritdoc
     */
    syncCopy: function(enable) {
        if ((!this.isConvertingFromShipping && !_.isUndefined(this._isChecked())) ||
            (this.isConvertingFromShipping && this._isChecked())) {
            // if this view is not coming from a Ship To convert subpanel,
            // or if it IS but the user specifically checked the Copy Billing to Shipping checkbox
            this._super('syncCopy', [enable]);
        } else {
            // set _inSync to be false so that sync() will work properly
            this._inSync = false;

            if (!enable) {
                // remove sync events from the model
                this.model.off(null, this.copyChanged, this);
                return;
            }
        }
    }
})
