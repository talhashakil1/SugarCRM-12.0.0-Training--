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
/*
 Removes Relationships, input is a form POST

ARGS:
 $_REQUEST['module']; : the module associated with this Bean instance (will be used to get the class name)
 $_REQUEST['record']; : the id of the Bean instance
 $_REQUEST['linked_field']; : the linked field name of the Parent Bean
 $_REQUEST['linked_id']; : the id of the Related Bean instance to

 $_REQUEST['return_url']; : the URL to redirect to
  or use:
  1) $_REQUEST['return_id']; :
  2) $_REQUEST['return_module']; :
  3) $_REQUEST['return_action']; :
*/

require_once('include/formbase.php');

$focus = BeanFactory::newBean($_REQUEST['module']);
if (  empty($_REQUEST['linked_id']) || empty($_REQUEST['linked_field'])  || empty($_REQUEST['record']))
{
	die("need linked_field, linked_id and record fields");
}
$linked_field = $_REQUEST['linked_field'];
$record = $_REQUEST['record'];
$linked_id = $_REQUEST['linked_id'];


$projectTaskBean = BeanFactory::newBean('ProjectTask');

$query = sprintf(
    'SELECT id FROM project_task WHERE resource_id LIKE %s AND project_id = %s',
    $projectTaskBean->db->quoted($linked_id),
    $projectTaskBean->db->quoted($record)
);
$result = $projectTaskBean->db->query($query, true, "Unable to select project task id from user project");
$row = $projectTaskBean->db->fetchByAssoc($result);

while ($row != null){
    $update_query = sprintf(
        'UPDATE project_task SET resource_id = NULL, assigned_user_id = NULL WHERE id = %s',
        $projectTaskBean->db->quoted($row['id'])
    );
	$projectTaskBean->db->query($update_query, true, "Unable to update resource for project task");

	$row = $projectTaskBean->db->fetchByAssoc($result);
}

// cut it off:
$focus->load_relationship($linked_field);
$focus->$linked_field->delete($record,$linked_id);

$GLOBALS['log']->debug("deleted relationship: bean: {$_REQUEST['module']}, linked_field: $linked_field, linked_id:$linked_id" );
if(empty($_REQUEST['refresh_page'])){
	handleRedirect();
}
exit;

