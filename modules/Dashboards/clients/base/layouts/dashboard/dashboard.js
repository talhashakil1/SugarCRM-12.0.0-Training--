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
 * The outer layout of the dashboard.
 *
 * This layout contains the header view and wraps the daslet-main layout.
 * The layouts for each dashboard are stored in the server.
 *
 * @class View.Layouts.Dashboards.DashboardLayout
 * @alias SUGAR.App.view.layouts.DashboardsDashboardLayout
 * @extends View.BaseLayout
 */
({
    extendsFrom: 'BaseLayout',

    className: 'row-fluid',

    //FIXME We need to remove this. TY-1132 will address it.
    dashboardLayouts: {
        'record': 'record-dashboard',
        'records': 'list-dashboard',
        'search': 'search-dashboard'
    },

    /**
     * Mapping of metadata files based on the dashboard names
     *
     * @property {Object}
     */
    metaFileNames: {
        'da438c86-df5e-11e9-9801-3c15c2c53980': 'renewal-console',
        'c108bb4a-775a-11e9-b570-f218983a1c3e': 'agent-dashboard'
    },

    events: {
        'click [data-action=create]': 'createClicked'
    },

    error: {
        //Dashboard is a special case where a 404 here shouldn't break the page,
        //it should just send us back to the default homepage
        handleNotFoundError: function(error) {
            var currentRoute = Backbone.history.getFragment();
            if (currentRoute.substr(0, 5) === 'Home/') {
                app.router.redirect('#Home');
                //Prevent the default error handler
                return false;
            }
        },
        handleValidationError: function(error) {
            return false;
        }
    },

    /**
     * What is the current Visible State of the dashboard
     */
    dashboardVisibleState: 'open',

    /**
     * @inheritdoc
     */
    initialize: function(options) {
        this.plugins = _.union((this.plugins || []), ['FilterSharing']);
        var context = options.context;
        var module = context.parent && context.parent.get('module') || context.get('module');

        if (options.meta && options.meta.method && options.meta.method === 'record' && !context.get('modelId')) {
            context.set('create', true);
        }

        var hasDashboardModels;

        // The dashboard can be used to display facets on the search page.
        // This is a special use case for dashboards.
        // This checks to see if we're in the search context (i.e. the search page).
        if (context.parent && context.parent.get('search')) {
            // Note that dashboard.js is initialized twice because `navigateLayout` will call initComponents directly,
            // which creates a new context for each dashboard.
            // See `navigateLayout` for more details.
            // Also note that the module for the facets dashboard is set to `Home` in the search layout metadata.
            // Therefore, we have two brother contexts, both of which are in the `Home` module.
            // One is the initial dashboard that is created when the search layout is created.
            // The other is instantiated by the dashboard's `navigateLayout` method.
            var contextBro = context.parent.getChildContext({module: 'Home'});
            hasDashboardModels = contextBro.get('collection') && contextBro.get('collection').length;
            if (hasDashboardModels) {
                context.set({
                    // For the search page, we hardcode the facet dashboard index to 0.
                    // This is possible because in search, we only allow the
                    // facets dashboard.
                    // See `loadData` for more details.
                    model: contextBro.get('collection').at(0),
                    collection: this._getNewDashboardObject('collection', context),
                    skipFetch: true
                });
            }
        }

        if (!hasDashboardModels) {
            var model;
            if (_.contains(['multi-line', 'focus'], context.get('layout'))) {
                // On the multi-line list and focus view, side drawer/focus drawer, the dashlets need
                // the correct model context, which is set here.
                var layout = options && options.layout && options.layout.layout;
                if (layout) {
                    model = layout.model;
                    model.set('view_name', layout.context.get('layout'));
                    model.dashboardModule = layout.context.get('module');
                }
            } else {
                model = this._getNewDashboardObject('model', context);
            }
            if (context.get('modelId')) {
                model.set('id', context.get('modelId'), {silent: true});
            }
            context.set({
                model: model,
                collection: this._getNewDashboardObject('collection', context)
            });
        }

        this._super('initialize', [options]);

        this._bindButtonEvents();

        this.model.on('setMode', function(mode) {
            if (mode === 'edit' || mode === 'create') {
                this.$('.dashboard').addClass('edit');
            } else {
                this.$('.dashboard').removeClass('edit');
            }
        }, this);

        var defaultLayout = this.closestComponent('sidebar');
        if (defaultLayout) {
            this.listenTo(defaultLayout, 'sidebar:state:changed', function(state) {
                this.dashboardVisibleState = state;
            }, this);

            try {
                this.dashboardVisibleState = defaultLayout.isSidePaneVisible() ? 'open' : 'close';
            } catch (error) {
                // this happens when the dashboard component is initially created because the defaultLayout doesn't
                // have _hideLastStateKey key set yet.  Just ignore this for now as with the way dashboards work
                // it this code will get run again once the logic below selects which dashboard to show.
            }
        }

        if (module === 'Home' && context.has('modelId')) {
            // save it as last visit
            var lastVisitedStateKey = this.getLastStateKey();
            app.user.lastState.set(lastVisitedStateKey, context.get('modelId'));
        }
    },

    /**
     * Get the dashboard model attributes.
     *
     * @return {Object} Dashboard model fields to save.
     * @private
     */
    _getDashboardModelAttributes: function() {
        var ctx = this.context && this.context.parent || this.context;
        var dashboardModule = ctx.get('module');
        var viewName = dashboardModule === 'Home' ? '' : ctx.get('layout');
        return {
            'assigned_user_id': app.user.id,
            'dashboard_module': dashboardModule,
            'view_name': viewName
        };
    },

    /**
     * Binds the button events that are specific to the record pane.
     *
     * @protected
     */
    _bindButtonEvents: function() {
        this.context.on('button:save_button:click', this.handleSave, this);
    },

    /**
     * Overrides {@link View.Layout#initComponents} to trigger `change:metadata`
     * event if we are in the search results page.
     *
     * For other dashboards than the facet dashboard, `change:metadata` is
     * triggered by {@link View.Fields.Base.Home.LayoutbuttonField} but we don't
     * use this field in the facets dashboard so we need to trigger it here.
     *
     * @override
     */
    initComponents: function(components, context, module) {
        this._super('initComponents', [components, context, module]);
        if (this.isSearchContext()) {
            // For non-search dashboards, `change:metadata` is triggered by the
            // `layoutbutton.js`. We don't use this field in the facets
            // dashboard, so we need to trigger it here.
            this.model.trigger('change:metadata');
        }
    },

    /**
     * Indicates if we are in the search page or not.
     *
     * @return {boolean} `true` means we are in the search page.
     */
    isSearchContext: function() {
        return this.context.parent && this.context.parent.get('search');
    },

    /**
     * Gets the brother context.
     *
     * @param {string} module The module to get the brother context from.
     * @return {Core.Context} The brother context.
     */
    getContextBro: function(module) {
        return this.context.parent.getChildContext({module: module});
    },

    /**
     * @inheritdoc
     */
    loadData: function(options) {
        // Dashboards store their own metadata as part of their model.
        // For search facet dashboard, we do not want to load the dashboard
        // metadata from the database. Instead, we build the metadata below.
        if (this.isSearchContext()) {
            // The model does not have metadata the first time this function
            // is called. In subsequent calls, the model should have metadata
            // so we do not need to fetch it.
            if (this.model.has('metadata')) {
                return;
            }

            this._loadSearchDashboard();

            this.context.set('skipFetch', true);
            this.navigateLayout('search');
            return;
        }

        if (this.context.parent && !this.context.parent.isDataFetched()) {
            var parent = this.context.parent.get('modelId') ?
                this.context.parent.get('model') : this.context.parent.get('collection');

            if (parent) {
                parent.once('sync', function() {
                    this._super('loadData', [options]);
                }, this);
            }
        } else {
            this._super('loadData', [options]);
        }
    },

    /**
     * Loads the facet dashboard for the search page, and add it.
     *
     * @private
     */
    _loadSearchDashboard: function() {
        var dashboardMeta = this._getInitialDashboardMetadata();
        var model = this._getNewDashboardObject('model', this.context);
        // In `dashMeta`, we have a `metadata` property which contains all
        // the metadata needed for the dashboard.
        model.set(dashboardMeta);
        this.collection.add(model);
    },

    /**
     * Navigate to the create layout when create button is clicked.
     *
     * @param {Event} evt Mouse event.
     */
    createClicked: function(evt) {
        if (this.model.dashboardModule === 'Home') {
            var route = app.router.buildRoute(this.module, null, 'create');
            app.router.navigate(route, {trigger: true});
        } else {
            this.navigateLayout('create');
        }
    },

    /**
     * Places only components that include the Dashlet plugin and places them in the 'main-pane' div of
     * the dashlet layout.
     * @param {app.view.Component} component
     * @private
     */
    _placeComponent: function(component) {
        var dashboardEl = this.$('[data-dashboard]');
        var css = this.context.get('create') ? ' edit' : '';

        if (dashboardEl.length === 0) {
            dashboardEl = $('<div></div>').attr({
                'class': 'cols row-fluid'
            });
            this.$el.append(
                $('<div></div>')
                    .addClass('dashboard bg-secondary-content-background w-full absolute' + css)
                    .attr({'data-dashboard': 'true'})
                    .append(dashboardEl)
            );
        } else {
            dashboardEl = dashboardEl.children('.row-fluid');
        }
        dashboardEl.append(component.el);
    },

    /**
     * If current context doesn't contain dashboard model id,
     * it will trigger set default dashboard to create default metadata
     */
    bindDataChange: function() {
        if (this.isSearchContext()) {
            return;
        }
        var modelId = this.context.get('modelId');
        if (!(modelId && this.context.get('create')) && this.collection) {
            // On the search page, we don't want to save the facets dashboard
            // in the database, so we don't need to listen to changes on the
            // collection nor do we need to call `setDefaultDashboard`.
            this.collection.on('reset', this.setDefaultDashboard, this);
        }
        this.context.on('dashboard:restore-dashboard:clicked', this.restoreConsoleDashlets, this);
    },

    /**
     * Set or render the appropriate dashboard for display.
     *
     * The appropriate dashboard is selected using this order of preference:
     * 1. The last viewed dashboard
     * 2. The last modified default dashboard
     * 3. The last modified favorite dashboard
     * 4. Render dashboard-empty template
     */
    setDefaultDashboard: function() {
        if (this.disposed) {
            return;
        }
        var lastVisitedStateKey = this.getLastStateKey();
        var lastViewed = app.user.lastState.get(lastVisitedStateKey);
        var model;

        // FIXME: SC-4915 will change this to rely on the `hidden` context flag
        // instead.
        var hasParentContext = this.context && this.context.parent;
        var parentModule = hasParentContext && this.context.parent.get('module') || 'Home';

        // this.collection contains all the default and favorited dashboards
        // ordered by date modified (descending).
        if (this.collection.length > 0) {
            var currentModule = this.context.get('module');

            // Use the last viewed dashboard.
            if (lastViewed) {
                var lastVisitedModel = this.collection.get(lastViewed);
                // It should navigate to the last viewed dashboard if available,
                // and it should clean out the cached record in lastState
                if (!_.isEmpty(lastVisitedModel)) {
                    app.user.lastState.set(lastVisitedStateKey, '');
                    model = lastVisitedModel;
                }
            }

            // If there is no dashboard found yet,
            // use the last modified default dashboard.
            if (!model) {
                model = _.find(this.collection.models, function(model) {
                    return model.get('default_dashboard');
                });
            }

            // If there is no dashboard found yet,
            // use the last modified favorite dashboard.
            if (!model) {
                // If we get in here, there are no default dashboards in the
                // collection, so the collection only has favorite dashboards.
                model = _.first(this.collection.models);
            }

            if (currentModule == 'Home' && _.isString(lastViewed) && lastViewed.indexOf('bwc_dashboard') !== -1) {
                app.router.navigate(lastViewed, {trigger: true});
            } else {
                // use the _navigate helper
                this._navigate(model);
            }
            // There are no favorite or default dashboards, so the collection
            // is empty.
        } else {
            this._renderEmptyTemplate();
        }
    },

    /**
     * Restore tab metadata for console Dashboards (Service and Renewals)
     *
     * @param tabIndex {number} index of the tab for which metadata needs to be reset
     */
    restoreConsoleDashlets: function(tabIndex) {
        var dashboardId = this.model.get('id');
        var metaFileName = this.metaFileNames[dashboardId];

        if (metaFileName) {
            var attributes = {
                id: dashboardId
            };
            var params = {
                dashboard: metaFileName,
                tab_index: tabIndex,
                dashboard_module: 'Home',
            };

            var url = app.api.buildURL('Dashboards', 'restore-tab-metadata', attributes, params);
            app.api.call('update', url, null, {
                success: _.bind(function(response) {
                    var dashboard = this.layout.getComponent('dashboard');
                    if (dashboard) {
                        var tabbedDash = dashboard.getComponent('tabbed-dashboard');
                        tabbedDash.model.set(response);
                        tabbedDash.model.setSyncedAttributes({});
                    }
                }, this)
            });
        }
    },

    /**
     * Gets initial dashboard metadata
     *
     * @return {Object} dashboard metadata
     * @private
     */
    _getInitialDashboardMetadata: function() {
        var layoutName = this.dashboardLayouts[this.context.parent && this.context.parent.get('layout') || 'record'];
        var initDash = app.metadata.getLayout(this.model.dashboardModule, layoutName) || {};
        return initDash;
    },

    /**
     * Build the cache key for last visited dashboard
     * Combine parent module and view name to build the unique id
     *
     * @return {string} hash key.
     */
    getLastStateKey: function() {
        if (this._lastStateKey) {
            return this._lastStateKey;
        }

        var model = this.context.get('model');
        var view = model.get('view_name');
        var module = model.dashboardModule;
        var key = module + '.' + view;

        // For side drawers using the row-model-data layout, we need to mock the
        // component being a "Home" module component so the last state key is
        // built correctly
        var sideDrawerLayouts = ['multi-line', 'focus'];
        if (this.layout && this.layout.context && this.layout.context.parent &&
            _.contains(sideDrawerLayouts, this.layout.context.parent.get('layout'))) {
            this._lastStateKey = app.user.lastState.key(key, {
                module: 'Home',
                meta: this.meta
            });
        } else {
            this._lastStateKey = app.user.lastState.key(key, this);
        }

        return this._lastStateKey;
    },

    /**
     * Utility method to use when trying to figure out how we need to navigate when switching dashboards
     *
     * @param {Backbone.Model} (dashboard) The dashboard we are trying to navigate to
     * @private
     */
    _navigate: function(dashboard) {
        if (this.disposed) {
            return;
        }

        var hasParentContext = (this.context && this.context.parent);
        var hasModelId = (dashboard && dashboard.has('id'));
        var actualModule = (hasParentContext) ? this.context.parent.get('module') : this.module;
        var isHomeModule = (actualModule === 'Home');

        if (hasParentContext && hasModelId) {
            // we are on a module and we have an dashboard id
            this._navigateLayout(dashboard.get('id'));
        } else if (hasParentContext && !hasModelId) {
            // we are on a module but we don't have a dashboard id
            this._navigateLayout('list');
        } else if (!hasParentContext && hasModelId && isHomeModule) {
            // we on the Home module and we have a dashboard id
            app.navigate(this.context, dashboard);
        } else if (isHomeModule) {
            // we on the Home module and we don't have a dashboard
            var route = app.router.buildRoute(this.module);
            app.router.navigate(route, {trigger: true});
        }
    },

    /**
     * Intercept the navigateLayout calls to make sure that the dashboard we are currently on didn't change.
     * If it did, we need to prompt and make sure they want to continue or cancel.
     *
     * @param {string} dashboard What dashboard do we want to display
     * @return {boolean}
     * @private
     */
    _navigateLayout: function(dashboard) {
        var onConfirm = _.bind(function() {
            this.navigateLayout(dashboard);
        }, this);
        var headerpane = this.getComponent('dashboard-headerpane');

        // if we have a headerpane and it was changed then run the warnUnsavedChanges method
        if (headerpane && headerpane.changed) {
            return headerpane.warnUnsavedChanges(
                onConfirm,
                undefined,
                _.bind(function() {
                    // when the cancel button is presses, we need to clear out the collection
                    // because it messes with the add dashlet screen.
                    this.collection.reset([], {silent: true});
                }, this)
            );
        }

        // if we didn't have a headerpane or we did have one, but nothing changed, just run the normal method
        onConfirm();
    },

    /**
     * For the RHS dashboard, this method loads entire dashboard component
     *
     * @param {string} id dashboard id. This id can be the dashboard id, or
     * the following strings: create, list, search.
     * @param {string} type (Deprecated) the dashboard type.
     */
    navigateLayout: function(id, type) {
        if (!_.isUndefined(type)) {
            // TODO: Remove the `type` parameter. This is to be done in TY-654
            app.logger.warn('The `type` parameter to `View.Layouts.Dashboards.DashboardLayout.navigateLayout`' +
                'has been deprecated since 7.9.0.0. Please update your code to stop using it.');
        }
        var layout = this.layout;
        var lastVisitedStateKey = this.getLastStateKey();
        this.dispose();

        //if dashboard layout navigates to the different dashboard,
        //it should store last visited dashboard id.
        if (!_.contains(['create', 'list'], id)) {
            app.user.lastState.set(lastVisitedStateKey, id);
        }

        var ctxVars = {};
        if (id === 'create') {
            ctxVars.create = true;
        } else if (id !== 'list') {
            ctxVars.modelId = id;
        }

        // For search dashboards, use the search-dashboard-headerpane
        // For multi-line-list and focus dashboards, use the side-drawer-header
        // Otherwise, use the dashboard-headerpane
        var headerPane;
        var actionButtons;
        var sideDrawerHeaderLayouts = ['multi-line', 'focus'];
        if (id === 'search') {
            headerPane = {
                view: 'search-dashboard-headerpane'
            };
            actionButtons = {};
        } else if (layout.context && layout.context.parent &&
            _.contains(sideDrawerHeaderLayouts, layout.context.parent.get('layout'))) {
            headerPane = {
                view: 'side-drawer-headerpane',
                loadModule: 'Dashboards'
            };
            actionButtons = {
                view: 'dashboard-fab',
                loadModule: 'Dashboards'
            };
        } else {
            headerPane = {
                view: 'dashboard-headerpane',
                loadModule: 'Dashboards'
            };
            actionButtons = {
                view: 'dashboard-fab',
                loadModule: 'Dashboards'
            };
        }

        var component = {
            // Note that we reinitialize the dashboard layout itself, creating a new context (forceNew: true)
            layout: {
                type: 'dashboard',
                components: (id === 'list') ? [] : [
                    headerPane,
                    {
                        layout: 'dashlet-main'
                    },
                    actionButtons
                ],
                last_state: {
                    id: 'last-visit'
                }
            },
            context: _.extend({
                module: 'Home',
                forceNew: true
            }, ctxVars),
            loadModule: 'Dashboards'
        };
        layout.initComponents([component]);

        layout.removeComponent(0);
        layout.loadData({});
        layout.render();
    },

    /**
     * @inheritdoc
     */
    unbindData: function() {
        if (this.collection) {
            this.collection.off('reset', this.setDefaultDashboard, this);
        }

        if (this.context.parent) {
            var model = this.context.parent.get('model');
            var collection = this.context.parent.get('collection');

            if (model) {
                model.off('sync', null, this);
            }
            if (collection) {
                collection.off('sync', null, this);
            }
        }

        this._super('unbindData');
    },

    /**
     * Returns a Dashboard Model or Dashboard Collection based on modelOrCollection
     *
     * @param {string} modelOrCollection The return type, 'model' or 'collection'
     * @param {Object} context
     * @return {Bean|BeanCollection}
     * @private
     */
    _getNewDashboardObject: function(modelOrCollection, context) {
        var obj;
        var ctx = context && context.parent || context;
        var module = ctx.get('module') || context.get('module');
        var layoutName = ctx.get('layout') || '';

        /**
         * Overrides the datamanager sync with dashboard specific functionality.
         *
         * sync overrides {@link Data.DataManager#sync}.
         */
        var sync = function(method, model, options) {
            var callbacks = app.data.getSyncCallbacks(method, model, options);

            var getEditableFields = function() {
                var fieldNames = _.keys(model.attributes);

                var editableFields = _.filter(fieldNames, function(fieldName) {
                    return app.acl.hasAccess('edit', 'Dashboards', {field: fieldName});
                });

                if (editableFields.indexOf('id') < 0) {
                    editableFields.push('id');
                }

                return model.toJSON({
                    fields: editableFields
                });
            };

            // When favoriting, use the favorite endpoint to be consistent
            // with the rest of sidecar.
            if (options.favorite) {
                return app.api.favorite(
                    'Dashboards',
                    model.id,
                    model.isFavorite(),
                    callbacks,
                    options.apiOptions
                );
            }

            options = app.data.parseOptionsForSync(method, model, options);
            // There is no max limit for number of dashboards per module view.
            if (options && options.params) {
                options.params.max_num = -1;
            }
            if (_.isEmpty(options.params)) {
                options.params = {};
            }
            options.params.filter = [{
                'dashboard_module': module,
                '$or': [
                    {'$favorite': ''},
                    {'default_dashboard': 1}
                ]
            }];

            options.order_by = {'date_modified': 'DESC'};
            if (module !== 'Home') {
                options.params.filter.push({view_name: layoutName});
            }

            app.data.trigger('data:sync:start', method, model, options);
            model.trigger('data:sync:start', method, options);

            // Only update the fields that the current user is allowed to modify
            app.api.records(method, model.apiModule, getEditableFields(), options.params, callbacks);
        };

        if (module === 'Home') {
            layoutName = '';
        }
        switch (modelOrCollection) {
            case 'model':
                obj = this._getNewDashboardModel(module, layoutName, sync);
                break;

            case 'collection':
                obj = this._getNewDashboardCollection(module, layoutName, sync);
                break;
        }

        return obj;
    },

    /**
     * Returns a new Dashboard Bean with proper view_name and sync function set.
     *
     * @param {string} module The name of the module we're in
     * @param {string} layoutName The name of the layout
     * @param {Function} syncFn The sync function to use
     * @param {boolean} [getNew=true] If you want a new instance or just the
     *   Dashboard definition.
     * @return {Dashboard} a new Dashboard Bean
     * @private
     */
    _getNewDashboardModel: function(module, layoutName, syncFn, getNew) {
        getNew = (_.isUndefined(getNew)) ? true : getNew;
        var Dashboard = app.Bean.extend({
            sync: syncFn,
            apiModule: 'Dashboards',
            module: 'Home',
            dashboardModule: module,
            maxColumns: (module === 'Home') ? 3 : (layoutName === 'multi-line' ? 2 : 1),
            minColumnSpanSize: (module === 'Home') ? 4 : (layoutName === 'multi-line' ? 6 : 12),
            defaults: {
                view_name: layoutName
            },
            fields: {}
        });
        return (getNew) ? new Dashboard() : Dashboard;
    },

    /**
     * Returns a new DashboardCollection with proper view_name and sync function set
     *
     * @param {string} module The name of the module we're in
     * @param {string} layoutName The name of the layout
     * @param {Function} syncFn The sync function to use
     * @param {boolean} [getNew=true] If you want a new instance or just the
     *   DashboardCollection definition.
     * @return {DashboardCollection} A new Dashboard BeanCollection
     * @private
     */
    _getNewDashboardCollection: function(module, layoutName, syncFn, getNew) {
        getNew = (_.isUndefined(getNew)) ? true : getNew;

        var Dashboard = this._getNewDashboardModel(module, layoutName, syncFn, false);
        var DashboardCollection = app.BeanCollection.extend({
            sync: syncFn,
            apiModule: 'Dashboards',
            module: 'Home',
            dashboardModule: module,
            model: Dashboard
        });

        return (getNew) ? new DashboardCollection() : DashboardCollection;
    },

    /**
     * Collects params for Dashboard model save
     *
     * @return {Object} The dashboard model params to pass to its save function
     * @private
     */
    _getDashboardModelSaveParams: function() {
        var params = {
            silent: true,
            //Don't show alerts for this request
            showAlerts: false
        };

        params.error = _.bind(this._renderEmptyTemplate, this);

        params.success = _.bind(function(model) {
            if (!this.disposed) {
                this._navigate(model);
            }
        }, this);

        return params;
    },

    /**
     * Gets the empty dashboard view template from dashboards/clients/base/views
     * and renders it to <pre><code>this.$el</code></pre>
     *
     * @private
     */
    _renderEmptyTemplate: function() {
        var headerPane = {};
        var layout = this.layout;
        if (layout) {
            var isSideDrawer = layout.$el.closest('#side-drawer').length > 0;

            if (isSideDrawer) {
                headerPane = {
                    view: 'side-drawer-headerpane',
                    loadModule: 'Dashboards'
                };
            }
            var component = {
                layout: {
                    type: 'dashboard',
                    components: [
                        headerPane,
                        {
                            view: 'dashboard-empty',
                            loadModule: 'Dashboards'
                        },
                    ],
                    last_state: {
                        id: 'last-visit'
                    }
                },
                context: {
                    module: 'Home',
                    forceNew: true,
                    create: true,
                    emptyDashboard: true
                },
                loadModule: 'Dashboards'
            };
            layout.initComponents([component]);

            layout.removeComponent(0);
            layout.loadData({});
            layout.render();
        }
    },

    /**
     * Saves the dashboard to the server.
     */
    handleSave: function() {
        var attributes = this._getDashboardModelAttributes();

        // Favorite new dashboards by default
        if (!this.model.get('id')) {
            attributes.my_favorite = true;
        }

        this.model.save(attributes, {
            showAlerts: true,
            fieldsToValidate: {
                'name': {
                    required: true
                },
                'metadata': {
                    required: true
                }
            },
            success: _.bind(function() {
                this.model.unset('updated');
                this.triggerListviewFilterUpdate();
                if (this.context.get('create')) {
                    // We have a parent context only for dashboards in the RHS.
                    if (this.context.parent) {
                        this.getContextBro('Home').get('collection').add(this.model);
                        this.navigateLayout(this.model.id);
                    } else {
                        app.navigate(this.context, this.model);
                    }
                } else {
                    this.context.trigger('record:set:state', 'view');
                }
            }, this),
            error: function() {
                app.alert.show('error_while_save', {
                    level: 'error',
                    title: app.lang.get('ERR_INTERNAL_ERR_MSG'),
                    messages: ['ERR_HTTP_500_TEXT_LINE1', 'ERR_HTTP_500_TEXT_LINE2']
                });
            }
        });
    },

    /**
     * @inheritdoc
     */
    _dispose: function() {
        var defaultLayout = this.closestComponent('sidebar');
        if (defaultLayout) {
            this.stopListening(defaultLayout);
        }

        this.dashboardLayouts = null;
        this.context.off('dashboard:restore-dashboard:clicked', this.restoreConsoleDashlets, this);
        this._super('_dispose');
    }
})
