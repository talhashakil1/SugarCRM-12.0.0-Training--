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
 * @class View.Layouts.Base.Quotes.ConfigDrawerContentLayout
 * @alias SUGAR.App.view.layouts.BaseQuotesConfigDrawerContentLayout
 * @extends View.Layouts.Base.ConfigDrawerContentLayout
 */
({
    /**
     * @inheritdoc
     */
    extendsFrom: 'BaseConfigDrawerContentLayout',

    /**
     * @inheritdoc
     */
    bindDataChange: function() {
        this.on('config:panel:fields:loaded', this.onConfigPanelFieldsLoad, this);
    },

    /**
     * Handles when the fields for a config panel are loaded. If the panel is
     * the current/active one, set its fields as the current config fields
     * @param configPanel the panel view containing the loaded fields
     */
    onConfigPanelFieldsLoad: function(configPanel) {
        if (configPanel.name === this.selectedPanel) {
            this.context.trigger('config:fields:change', configPanel.eventViewName, configPanel.panelFields);
        }
    },

    /**
     * @inheritdoc
     */
    _switchHowToData: function(helpId) {
        switch (helpId) {
            case 'config-columns':
            case 'config-summary':
            case 'config-footer':
                this.currentHowToData.title = app.lang.get('LBL_CONFIG_FIELD_SELECTOR', this.module, {
                    moduleName: app.lang.get('LBL_MODULE_NAME', this.module)
                });
                this.currentHowToData.text = '';
                break;
        }
    }
})
