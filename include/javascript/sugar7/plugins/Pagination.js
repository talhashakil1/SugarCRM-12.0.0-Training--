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
(function(app) {
    app.events.on('app:init', function() {

        /**
         * Pagination plugin helps to fetch the next offset records to append
         * on the next table body element.
         * For the dashlet view, the pagination bottom link will be added
         * automatically. To avoid the default pagination link, please add the
         * below code.
         *
         *     @example
         *     <pre><code>
         *     this.meta.customPagination = true;
         *     </code></pre>
         *
         *     or assigning in the metadata
         *
         *     <pre><code>
         *     array(
         *         ...
         *         customPagination => true,
         *     );
         *     </code></pre>
         *
         * In order to use appending DOM element, the below items are required.
         * - this.tbodyTag: The parent dom selector
         *  where each row template is appended.
         * - Row template (row.hbs): Row level template.
         *  The model will be bound in this.rowModel.
         *
         *     @example
         *     <pre><code>
         *     {{#with rowModel}}
         *         {{#each ../meta.fields}}
         *              {{field ../../this mode=../this}}
         *         {{/each}}
         *     {{/with}}
         *     </code></pre>
         *
         * Otherwise, it will refresh the DOM with the new data collection.
         **/
        app.plugins.register('Pagination', ['view'], {
            onAttach: function(component, plugin) {
                var origBDC = component.bindDataChange;
                this.bindDataChange = function() {
                    if (origBDC) {
                        origBDC.call(this);
                    }
                    if (this.collection) {
                        //No need to do a full render if we are just getting the reset from the initial data load
                        this.collection.off('reset', this.render, this);
                        this.collection.on('reset', function(collection, options) {
                            //Verify the table header has rendered, but we don't have any rows yet.
                            if (options && _.isEmpty(options.previousModels) &&
                                this.$('tbody > tr').length === 0 && this.$('thead > tr').length > 0
                            ) {
                                this._renderRows(collection, collection.models);
                            } else {
                                this.render();
                            }

                            if (_.includes(['recordlist', 'selection-list', 'multi-selection-list-link'], this.type)) {
                                this.$('.flex-list-view-content .no-data-available')
                                    .toggleClass('hidden', !!collection.models.length);
                            }
                        }, this);
                    }
                };

                this.on('init', function() {
                    this.rowTemplate = app.template.getView(this.name + '.row', this.module) ||
                        app.template.getView(this.name + '.row') ||
                        this.rowTemplate;
                    if (!_.contains(this.plugins, 'Dashlet') || this.meta.config) {
                        return;
                    }
                    if (this.layout && !this.hidePagination) {
                        this.layout.on('init', this._initPaginationBottom, this);
                    }
                }, this);
                this.on('render', function() {
                    this.$tableBody = this.$(this.tbodyTag || 'tbody');
                }, this);
            },

            /**
             * Add pagination view in the bottom of the dashlet layout.
             * @private
             */
            _initPaginationBottom: function() {
                if (!this.layout) {
                    return;
                }
                var pageComponent = this.layout.getComponent('list-bottom');
                if (pageComponent) {
                    return;
                }

                if (this.context && this.context.get('isUsingListPagination')) {
                    var panelTopFields = app.view.createView({
                        context: this.context,
                        type: 'panel-top',
                        meta: {
                            template: 'panel-top.fields'
                        },
                        primary: false,
                        module: this.module,
                        layout: this.layout,
                    });
                    this.layout.addComponent(panelTopFields);

                    var listPaginationView = app.view.createView({
                        context: this.context,
                        type: 'list-pagination',
                        module: this.module,
                        layout: this.layout,
                        className: 'list-pagination-wrapper',
                    });
                    this.layout.addComponent(listPaginationView);
                } else {
                    pageComponent = app.view.createView({
                        context: this.context,
                        type: 'list-bottom',
                        meta: {
                            template: 'list-bottom.dashlet-bottom'
                        },
                        module: this.module,
                        primary: false,
                        layout: this.layout,
                        hideFirstPaginationLoadingMessage: this.hideFirstPaginationLoadingMessage,
                        usePaginationComponent: this.usePaginationComponent,
                    });
                    this.layout.addComponent(pageComponent);
                }
            },

            /**
             * Paginates a collection and handles rendering appending DOM
             * element. FOR INTERNAL USE ONLY.
             *
             * FIXME This function needs refactoring to become
             * render-agnostic, see SC-2605
             *
             * @param {Object} options (optional) Fetch options.
             * See {@link BeanCollection#fetch} for details.
             */
            getNextPagination: function(options) {
                var beanCollection;

                if (_.isFunction(this.getPaginationCollection)) {
                    beanCollection = this.getPaginationCollection();
                }
                beanCollection = beanCollection || this.collection;
                if (!beanCollection.dataFetched) {
                    return;
                }

                options = options || {};
                var originalOptions = _.extend({}, this.collection.options, options);
                var defaultOnSuccess = options.success;
                options.success = null;
                if (_.isFunction(this.getPaginationOptions)) {
                    options = _.extend({}, options, this.getPaginationOptions() || {});
                }

                // Indicates records will be added to those already loaded in to view
                options.add = true;
                var origOnSuccess = options.success;
                options.success = _.bind(function(collection, data) {
                    if (_.isFunction(defaultOnSuccess)) {
                        defaultOnSuccess(collection, data);
                    }
                    if (_.isFunction(origOnSuccess)) {
                        origOnSuccess(collection, data);
                    }
                    if (this.disposed) {
                        return;
                    }
                    this._renderRows(collection, data);

                }, this);

                if (this.limit) {
                    options.limit = this.limit;
                }

                var _complete = options.complete;
                options.complete = _.bind(function(xhr, status) {
                    if (_.isFunction(_complete)) {
                        _complete.call(this, xhr, status);
                    }
                    this.collection.options = originalOptions;
                }, this);

                beanCollection.paginate(options);
            },

            /**
             * Render partial row element by appending to
             * the parent list element.
             *
             * @param {Backbone.Model} model Row model.
             * @private
             */
            _renderRow: function(model) {
                this.rowModel = model;
                var $row = $(this.rowTemplate(this)),
                    self = this;
                this.$tableBody.append($row);
                $row.find('span[sfuuid]').each(function() {
                    var $this = $(this),
                        sfId = $this.attr('sfuuid');
                    if (self.fields[sfId]) {
                        self.fields[sfId].setElement($this);
                        self.fields[sfId].render();
                    }
                });

                return $row;
            },

            /**
             * Render rows from partials for a given collection and record set
             * @param {Backbone.Collection} collection
             * @param {Backbone.Model[]} data
             * @private
             */
            _renderRows: function(collection, data) {
                if (this.module !== collection.module) {
                    this.rowTemplate = app.template.getView(this.name + '.row', collection.module) ||
                        this.rowTemplate;
                }
                if (_.isEmpty(this.$tableBody) || !this.rowTemplate) {
                    app.logger.warn('Create a row.hbs template to avoid a full render.');
                    this.render();
                    return;
                }

                // FIXME Remove this event-driven behaviour for SC-2605
                if (!this.triggerBefore('render:rows', data)) {
                    return;
                }
                _.each(data, function(model) {
                    this._renderRow(this.collection.get(model.id));
                }, this);
                this.trigger('render:rows');
            }
        });
    });
})(SUGAR.App);
