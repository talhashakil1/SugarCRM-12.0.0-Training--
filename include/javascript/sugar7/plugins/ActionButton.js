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
(function register(app) {
    app.events.on('app:init', function init() {
        /**
         * Action Button plugin adds the ability to a Sidecar component
         * to be a host for (and be aware of) ActioButton typed fields
         */
        app.plugins.register('ActionButton', ['field', 'view', 'layout'], {
            /**
             * @inheritdoc
             */
            onAttach: function(component, plugin) {
                this.on('init', function registerActionrRunner() {
                    if (!_.contains(['record', 'recordlist', 'subpanel-list'], this.type)) {
                        return true;
                    }

                    if (_.isObject(this.meta)) {
                        this.meta.actionButtons = this.getActionButtonsMeta();
                        this.insertActionButtonsRows();
                    }
                });
            },

            /**
             * Insert all the valid action buttons into Edit dropdowns
             */
            insertActionButtonsRows() {
                const rowActionButtons = this.getActionButtonsRowActions();

                if (this.type === 'record') {
                    this.insertInRecord(rowActionButtons);
                } else if (this.type === 'dashablerecord') {
                    this.insertInDashableRecord(rowActionButtons);
                } else if (this.type === 'recordlist' || this.type === 'subpanel-list') {
                    this.insertInRecordList(rowActionButtons);
                }
            },

            /**
             * Insert buttons in record edit
             * @param {Array} rowActionButtons
             */
            insertInRecord(rowActionButtons) {
                if (_.isEmpty(rowActionButtons)) {
                    return;
                }

                _.each(this.meta.buttons, function insertActionButtonsRows(metaButton) {
                    if (
                        metaButton.type === 'actiondropdown' &&
                        metaButton.name === 'main_dropdown' &&
                        _.isArray(metaButton.buttons)
                    ) {

                        let insertAtIdx = metaButton.buttons.findIndex(function find(btn) {
                            return btn.name === 'delete_button' || btn.name === 'unlink_button';
                        });

                        if (insertAtIdx === -1) {
                            insertAtIdx = metaButton.buttons.length;
                        }

                        _.each(rowActionButtons, function insertButton(actionButton) {
                            metaButton.buttons.splice(insertAtIdx, 0, {type: 'divider'});
                            metaButton.buttons.splice(insertAtIdx + 1, 0, actionButton);
                            insertAtIdx = insertAtIdx + 2;
                        }, this);

                        metaButton.buttons.splice(insertAtIdx, 0, {type: 'divider'});
                    }
                }, this);
            },

            /**
             * Insert buttons in dashable record edit
             * @param {Array} rowActionButtons
             */
            insertInDashableRecord(rowActionButtons) {
                _.each(this._headerButtons, function insertActionButtonsRows(metaButton) {
                    if (
                        metaButton.type === 'actiondropdown' &&
                        metaButton.name === 'dashlet_main_dropdown' &&
                        _.isArray(metaButton.buttons)
                    ) {
                        _.each(rowActionButtons, function insertButton(actionButton) {
                            if (metaButton.buttons.length > 1) {
                                metaButton.buttons.push({type: 'divider'});
                            }
                            metaButton.buttons.push(actionButton);
                        }, this);
                    }
                }, this);
            },

            /**
             * Insert buttons in list edit
             * @param {Array} rowActionButtons
             */
            insertInRecordList(rowActionButtons) {
                if (_.isEmpty(rowActionButtons)) {
                    return;
                }

                let insertAtIdx = this.meta.rowactions.actions.findIndex(function find(btn) {
                    return btn.name === 'delete_button' || btn.name === 'unlink_button';
                });

                if (insertAtIdx === -1) {
                    insertAtIdx = this.meta.rowactions.actions.length;
                }

                _.each(rowActionButtons, function insertButton(actionButton) {
                    this.meta.rowactions.actions.splice(insertAtIdx, 0, {type: 'divider'});
                    this.meta.rowactions.actions.splice(insertAtIdx + 1, 0, actionButton);
                    insertAtIdx = insertAtIdx + 2;
                }, this);

                this.meta.rowactions.actions.splice(insertAtIdx, 0, {type: 'divider'});
            },

            /**
             * Return button definitions from all ActionButton type fields
             * that are direct children of the component
             * @return {Array}
             */
            getActionButtonsRowActions() {
                const mappingTable = {
                    'record': 'recordView',
                    'recordlist': 'listView',
                    'subpanel-list': 'subpanels',
                    'dashablerecord': 'recordViewDashlet',
                };

                let validButtons = [];

                if (!this.model) {
                    return validButtons;
                }

                const fieldsDef = this.model.fields;

                let actionButtons = app.utils.deepCopy(this.getActionButtons(fieldsDef));

                _.each(actionButtons, function selectValidButtons(button) {
                    let parsedData = JSON.parse(button.options);
                    let decodedData = this.base64Parse(parsedData, false);

                    if (decodedData.actionMenu && decodedData.actionMenu[mappingTable[this.type]]) {
                        button.actionMenuOrder = decodedData.actionMenu.orderNumber;
                        decodedData.settings.type = 'button';
                        decodedData.settings.isRowAction = true;

                        // remove icons
                        _.each(decodedData.buttons, function removeIcon(buttonData) {
                            buttonData.properties.showIcon = false;
                        }, this);

                        let encodedData = this.base64Parse(decodedData, true);
                        button.options = JSON.stringify(encodedData);

                        validButtons.push(button);
                    }
                }, this);

                validButtons = _.sortBy(validButtons, 'actionMenuOrder');

                return validButtons;
            },

            /**
             * Return button definitions from all ActionButton type fields
             * that are direct children of the component
             *
             * @return {Array}
             */
            getActionButtonsMeta() {
                const fieldsDef = this.model.fields;
                const maxAllowedSize = 45;

                let actionButtons = this.getActionButtons(fieldsDef);

                let composedActionButtons = [];
                let composedMeta = {
                    buttons: {},
                    settings: {
                        hideOnEdit: false,
                        showFieldLabel: false,
                        showInRecordHeader: true,
                        size: 'default',
                        type: 'dropdown'
                    }
                };

                let currentSize = 0;
                let orderNumber = 0;

                _.each(actionButtons, function composeButtons(item, key) {
                    const encode = false;

                    let parsedData = JSON.parse(item.options);
                    let decodedData = this.base64Parse(parsedData, encode);

                    if (!decodedData.settings.showInRecordHeader) {
                        return;
                    }

                    if (_.has(decodedData, 'actionMenu') && _.has(decodedData.actionMenu, 'orderNumber')) {
                        let sortedButtons = _(decodedData.buttons)
                                                .chain()
                                                .sortBy('orderNumber')
                                                .map(function(val, key) { return val.buttonId; })
                                                .value();
                        item.actionMenuOrder = decodedData.actionMenu.orderNumber;
                        item.buttonsIds = sortedButtons;
                    }

                    _.each(decodedData.buttons, function calculateLabelSize(button, buttonKey) {
                        let buttonProp = button.properties;

                        if (buttonProp.showLabel) {
                            if (buttonProp.label.length < 3) {
                                currentSize += 3;
                            } else {
                                currentSize += buttonProp.label.length;
                            }
                        } else {
                            currentSize += 2;
                        }

                        if (buttonProp.showIcon) {
                            currentSize += 3;
                        }

                        decodedData.buttons[buttonKey].orderNumber = orderNumber;
                        orderNumber++;

                    });

                    Object.assign(composedMeta.buttons, decodedData.buttons);

                }, this);

                if (currentSize > maxAllowedSize) {
                    const encode = true;

                    var sortedFields = _.sortBy(actionButtons, 'actionMenuOrder');

                    composedMeta = this.sortHeaderDropdownButtons(composedMeta, sortedFields);

                    let mainActionButton = Object.assign({}, sortedFields.pop());

                    mainActionButton.options = JSON.stringify(this.base64Parse(composedMeta, encode));

                    composedActionButtons.push(mainActionButton);

                    return composedActionButtons;
                } else {
                    return actionButtons;
                }
            },

            /**
             * Sort the buttons for header dropdown based on Order from Action Menu
             *
             * @param {Object} meta
             * @param {Array} sortedFields
             * @return {Object}
             */
            sortHeaderDropdownButtons(meta, sortedFields) {
                let currentPosition = 0;

                _.each(sortedFields, function iterateFields(buttonField) {
                    if (!_.has(buttonField, 'buttonsIds')) {
                        return;
                    }
                    _.each(buttonField.buttonsIds, function iterateButtons(buttonId) {
                        meta.buttons[buttonId].orderNumber = currentPosition;
                        currentPosition++;
                    });
                });

                return meta;
            },

            /**
             * Encode/Decode the base64 field meta, recursively.
             *
             *
             * @param {Object|string} data
             * @param {Bool} encode
             *
             * @return {Array}
             */
            base64Parse(data, encode) {
                _.each(data, function parseButtons(childData, key) {
                    if (typeof childData === 'object' && childData !== null) {
                        data[key] = this.base64Parse(childData, encode);
                    } else if (typeof childData === 'string') {
                        data[key] = encode ? btoa(childData) : atob(childData);
                    }
                }, this);

                return data;
            },

            /**
             * Return all configured actions for a given button field definition
             *
             * @param {Object} fieldsDef
             *
             * @return {Array}
             */
            getActionButtons(fieldsDef) {
                const actionButtons = _.filter(fieldsDef, function filter(field) {
                    if (field.type === 'actionbutton') {
                        field.readonly = false;
                        try {
                            field.decodedOptions = JSON.parse(field.options);
                        } catch (e) {
                            app.logger.fatal(e.stack);
                        }

                        return true;
                    }

                });

                return actionButtons;
            },
        });
    });
})(SUGAR.App);
