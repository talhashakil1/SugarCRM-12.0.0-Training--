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
 

$layout_defs['ACLRoles'] = array(
	// sets up which panels to show, in which order, and with what linked_fields
	'subpanel_setup' => array(
        'users' => array(
			'top_buttons' => array(	array('widget_class' => 'SubPanelTopSelectUsersButton', 'mode' => 'MultiSelect', 'popup_module' => 'Users', 'filter_out_is_admin' => true,),),
			'order' => 20,
			'module' => 'Users',
			'sort_by' => 'user_name',
			'sort_order' => 'asc',
			'subpanel_name' => 'default',
			'get_subpanel_data' => 'users',
			'add_subpanel_data' => 'user_id',
			'title_key' => 'LBL_USERS_SUBPANEL_TITLE',
		),
	),
);
$layout_defs['UserRoles'] = array(
	// sets up which panels to show, in which order, and with what linked_fields
	'subpanel_setup' => array(
        'aclroles' => array(
			'top_buttons' => array(array('widget_class' => 'SubPanelTopSelectUsersButton', 'mode' => 'MultiSelect','popup_module' => 'ACLRoles', 'filter_out_is_admin' => true,),),
			'order' => 20,
			'module' => 'ACLRoles',
			'sort_by' => 'name',
			'sort_order' => 'asc',			
			'subpanel_name' => 'default',
			'get_subpanel_data' => 'aclroles',
			'add_subpanel_data' => 'role_id',
			'title_key' => 'LBL_ROLES_SUBPANEL_TITLE',
		),
	),
	
);


?>