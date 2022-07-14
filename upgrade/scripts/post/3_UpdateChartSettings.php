<?php
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
 * Updates the chart engine to Chart.js
 */
class SugarUpgradeUpdateChartSettings extends UpgradeScript
{
    public $order = 3100;
    public $type = self::UPGRADE_CUSTOM;

    /**
     * @inheritdoc
     */
    public function run()
    {
        if (version_compare($this->from_version, '11.3.0', '>=')) {
            return;
        }

        $configurator = new Configurator();
        $configurator->config['chartEngine'] = 'chartjs';
        $configurator->handleOverride();
        $configurator->clearCache();
        SugarConfig::getInstance()->clearCache();
    }
}
