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

class TrackerPerf extends SugarBean
{
    var $module_dir = 'Trackers';
    var $object_name = 'tracker_perf';
    var $module_name = 'TrackerPerfs';
    var $table_name = 'tracker_perf';
    var $acltype = 'TrackerPerf';
    var $acl_category = 'TrackerPerfs';
    var $disable_custom_fields = true;

    var $disable_row_level_security = true;

    function bean_implements($interface){
        switch($interface){
            case 'ACL': return true;
        }
        return false;
    }
}
