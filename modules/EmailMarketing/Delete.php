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
/*********************************************************************************

 * Description:  TODO: To be written.
 * Portions created by SugarCRM are Copyright (C) SugarCRM, Inc.
 * All Rights Reserved.
 * Contributor(s): ______________________________________..
 ********************************************************************************/



global $mod_strings;

$focus = BeanFactory::newBean('EmailMarketing');

if(!isset($_REQUEST['record'])) {
	sugar_die($mod_strings['LBL_SPECIFY_RECORD_NUM']);
}
$focus->retrieve($_REQUEST['record']);
if(!$focus->ACLAccess('Delete')){
	ACLController::displayNoAccess(true);
	sugar_cleanup(true);
}
$focus->mark_deleted($_REQUEST['record']);

if(isset($_REQUEST['record']))
{
    $query = 'DELETE FROM emailman WHERE marketing_id = ' . $focus->db->quoted($_REQUEST['record']);
	$focus->db->query($query);
}

$location = 'index.php?' . http_build_query([
        'module' => $_REQUEST['return_module'],
        'action' => $_REQUEST['return_action'],
        'record' => $_REQUEST['return_id'],
    ]);
header("Location: $location");
