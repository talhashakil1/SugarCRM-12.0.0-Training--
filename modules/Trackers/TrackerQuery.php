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

class TrackerQuery extends SugarBean
{
    var $module_dir = 'Trackers';
    var $module_name = 'TrackerQueries';
    var $object_name = 'tracker_queries';
    var $table_name = 'tracker_queries';
    var $acltype = 'TrackerQuery';
    var $acl_category = 'TrackerQueries';
    var $disable_custom_fields = true;

    var $disable_row_level_security = true;

    function bean_implements($interface){
        switch($interface){
            case 'ACL': return true;
        }
        return false;
    }
}
