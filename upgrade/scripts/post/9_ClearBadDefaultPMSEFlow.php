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
 * Clear the bad default values in the pmse_bpm_flow table.
 */
class SugarUpgradeClearBadDefaultPMSEFlow extends UpgradeScript
{
    public $order = 9600;
    public $type = self::UPGRADE_DB;

    /**
     * @inheritdoc
     */
    public function run()
    {
        if (version_compare($this->from_version, '8.2.0', '<')) {
            $query = "UPDATE pmse_bpm_flow SET cas_sugar_module = '' WHERE cas_sugar_module = 'ProcessMaker'";
            $this->db->query($query);
        }
    }
}
