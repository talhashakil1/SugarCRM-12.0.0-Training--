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
    extendsFrom: 'PanelTopView',

    /**
     * @inheritdoc
     */
    initialize: function(options) {
        var userACLs;

        this._super('initialize', [options]);

        if (['Accounts', 'Documents'].includes(this.parentModule)) {
            this.context.parent.on('editablelist:save', this._reloadOpportunities, this);
            this.on('linked-model:create', this._reloadOpportunities, this);
        }

        if (this.parentModule === 'Accounts') {
            this.meta.buttons = _.filter(this.meta.buttons, function(item) {
                return item.type !== 'actiondropdown';
            });
        }

        userACLs = app.user.getAcls();

        if (!(_.has(userACLs.Opportunities, 'edit') ||
            _.has(userACLs.RevenueLineItems, 'access') ||
            _.has(userACLs.RevenueLineItems, 'edit'))) {
            // need to trigger on app.controller.context because of contexts changing between
            // the PCDashlet, and Opps create being in a Drawer, or as its own standalone page
            // app.controller.context is the only consistent context to use
            var viewDetails = this.closestComponent('record') ?
                this.closestComponent('record') :
                this.closestComponent('create');

            // only allow PCDashlet and QuickPicks to add RLIs if this is the Opps or RLI
            // page and the link is revenuelineitems
            if (!_.isUndefined(viewDetails) &&
                (this.module === 'Opportunities' || this.module === 'RevenueLineItems') &&
                this.context.get('link') === 'revenuelineitems') {
                app.controller.context.on(viewDetails.cid + ':productCatalogDashlet:add', this.openRLICreate, this);
            }
        }
    },

    /**
     * Refreshes the RevenueLineItems subpanel when a new Opportunity is added
     * @private
     */
    _reloadOpportunities: function() {
        var $oppsSubpanel = $('div[data-subpanel-link="opportunities"]');
        // only reload Opportunities if it is closed & no data exists
        if ($('li.subpanel', $oppsSubpanel).hasClass('closed')) {
            if ($('table.dataTable', $oppsSubpanel).length) {
                this.context.parent.trigger('subpanel:reload', {links: ['opportunities']});
            } else {
                this.context.parent.trigger('subpanel:reload');
            }
        } else {
            this.context.parent.trigger('subpanel:reload', {links: ['opportunities']});
        }
    },

    /**
     * @inheritdoc
     */
    bindDataChange: function() {
        this._super('bindDataChange');
        this.context.parent.on('subpanel:reload', function(args) {
            if (!_.isUndefined(args) && _.isArray(args.links) && _.contains(args.links, this.context.get('link'))) {
                // have to set skipFetch to false so panel.js will toggle this panel open
                this.context.set('skipFetch', false);
                this.context.reloadData({recursive: false});
            }
        }, this);
    },

    /**
     * @inheritdoc
     */
    createRelatedClicked: function(event) {
        // close RLI warning alert
        app.alert.dismiss('opp-rli-create');

        this._super('createRelatedClicked', [event]);
    },

    /**
     * Open a new Drawer with the RLI Create Form
     */
    openRLICreate: function(data) {
        var routerFrags = app.router.getFragment().split('/');
        var parentModel;
        var model;
        var userCurrency;
        var createInPreferred;
        var currencyFields;
        var currencyFromRate;

        if (routerFrags[1] === 'create' || app.drawer.count()) {
            // if panel-top has been initialized on a record, but we're currently in create, ignore the event
            // or if there is already an Opps drawer opened
            return;
        }

        userCurrency = app.user.getCurrency();
        createInPreferred = userCurrency.currency_create_in_preferred;

        if (data.product_template_id) {
            var metadataFields = app.metadata.getModule('Products', 'fields');

            // getting the fields from metadata of the module and mapping them to data
            if (metadataFields && metadataFields.product_template_name &&
                metadataFields.product_template_name.populate_list) {
                _.each(metadataFields.product_template_name.populate_list, function(val, key) {
                    data[val] = data[key];
                }, this);
            }
        }

        parentModel = this.context.parent.get('model');
        model = this.createLinkModel(parentModel, 'revenuelineitems');

        data.likely_case = data.discount_price;
        data.best_case = data.discount_price;
        data.worst_case = data.discount_price;
        data.assigned_user_id = app.user.get('id');
        data.assigned_user_name = app.user.get('name');
        // Update price on Flexible Duration Service
        data.catalog_service_duration_value = data.service_duration_value;
        data.catalog_service_duration_unit = data.service_duration_unit;

        if (createInPreferred) {
            currencyFields = _.filter(model.fields, function(field) {
                return field.type === 'currency';
            });
            currencyFromRate = data.base_rate;
            data.currency_id = userCurrency.currency_id;
            data.base_rate = userCurrency.currency_rate;

            _.each(currencyFields, function(field) {
                // if the field exists on the model, convert the value to the new rate
                if (data[field.name] && field.name.indexOf('_usdollar') === -1) {
                    data[field.name] = app.currency.convertWithRate(
                        data[field.name],
                        currencyFromRate,
                        userCurrency.currency_rate
                    );
                }
            }, this);
        }

        model.set(data);
        model.ignoreUserPrefCurrency = true;

        app.drawer.open({
            layout: 'create',
            context: {
                create: true,
                module: 'RevenueLineItems',
                model: model
            }
        }, _.bind(this.rliCreateClose, this));
    },

    /**
     * Callback for when the create drawer closes
     *
     * @param {Data.Bean} model
     */
    rliCreateClose: function(model) {
        var rliCtx;
        var ctx;

        if (!model) {
            return;
        }

        ctx = this.context;
        ctx.resetLoadFlag();
        ctx.set('skipFetch', false);
        ctx.loadData();

        // find the child collection for the RLI subpanel
        // if we find one and it has the loadData method, call that method to
        // force the subpanel to load the data.
        rliCtx = _.find(ctx.children, function(child) {
            return child.get('module') === 'RevenueLineItems';
        }, this);
        if (!_.isUndefined(rliCtx) && _.isFunction(rliCtx.loadData)) {
            rliCtx.loadData();
        }
    },

    /**
     * @inheritdoc
     */
    _dispose: function() {
        if (app.controller && app.controller.context) {
            var viewDetails = this.closestComponent('record') ?
                this.closestComponent('record') :
                this.closestComponent('create');

            if (!_.isUndefined(viewDetails) &&
                (this.module === 'Opportunities' || this.module === 'RevenueLineItems') &&
                this.context.get('link') === 'revenuelineitems') {
                app.controller.context.off(viewDetails.cid + ':productCatalogDashlet:add', null, this);
            }
        }

        this._super('_dispose');
    }
})
