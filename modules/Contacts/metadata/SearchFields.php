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
$searchFields['Contacts'] = 
	array (
		'first_name' => array( 'query_type'=>'default'),
		'last_name'=> array('query_type'=>'default'),
		'search_name'=> array('query_type'=>'default','db_field'=>array('first_name','last_name'),'force_unifiedsearch'=>true),
		'account_name'=> array('query_type'=>'default','db_field'=>array('accounts.name')),
		'lead_source'=> array('query_type'=>'default','operator'=>'=', 'options' => 'lead_source_dom', 'template_var' => 'LEAD_SOURCE_OPTIONS'),
		'do_not_call'=> array('query_type'=>'default', 'input_type' => 'checkbox', 'operator'=>'='),
		'phone'=> array('query_type'=>'default','db_field'=>array('phone_mobile','phone_work','phone_other','phone_fax','assistant_phone')),
		'email'=> array(
			'query_type' => 'default',
			'operator' => 'subquery',
			'subquery' => 'SELECT eabr.bean_id FROM email_addr_bean_rel eabr JOIN email_addresses ea ON (ea.id = eabr.email_address_id) WHERE eabr.deleted=0 AND ea.email_address LIKE',
			'db_field' => array(
				'id',
			),
		),	
		'assistant'=> array('query_type'=>'default'),
		'address_street'=> array('query_type'=>'default','db_field'=>array('primary_address_street','alt_address_street')),
		'address_city'=> array('query_type'=>'default','db_field'=>array('primary_address_city','alt_address_city')),
		'address_state'=> array('query_type'=>'default','db_field'=>array('primary_address_state','alt_address_state')),
		'address_postalcode'=> array('query_type'=>'default','db_field'=>array('primary_address_postalcode','alt_address_postalcode')),
		'address_country'=> array('query_type'=>'default','db_field'=>array('primary_address_country','alt_address_country')),
		'current_user_only'=> array('query_type'=>'default','db_field'=>array('assigned_user_id'),'my_items'=>true, 'vname' => 'LBL_CURRENT_USER_FILTER', 'type' => 'bool'),
		'assigned_user_id'=> array('query_type'=>'default'),
        'account_id'=> array('query_type'=>'default','db_field'=>array('accounts.id')),
        'campaign_name'=> array('query_type'=>'default'),
		'favorites_only' => array(
            'query_type'=>'format',
			'operator' => 'subquery',
			'subquery' => 'SELECT sugarfavorites.record_id FROM sugarfavorites 
			                    WHERE sugarfavorites.deleted=0 
			                        and sugarfavorites.module = \'Contacts\' 
			                        and sugarfavorites.assigned_user_id = \'{0}\'',
			'db_field'=>array('id')),
		'sync_contact' => array(
            'query_type'=>'format',
			'operator' => 'subquery',
			'subquery_in_clause' => array('0'=>'NOT IN','1'=>'IN'),
			'subquery' => 'SELECT contacts_users.contact_id FROM contacts_users 
			                    WHERE contacts_users.deleted=0 
			                        and contacts_users.user_id = \'{1}\'',
			'db_field'=>array('id')),
		//Range Search Support 
	    'range_date_entered' => array ('query_type' => 'default', 'enable_range_search' => true, 'is_date_field' => true),
	    'start_range_date_entered' => array ('query_type' => 'default', 'enable_range_search' => true, 'is_date_field' => true),
	    'end_range_date_entered' => array ('query_type' => 'default', 'enable_range_search' => true, 'is_date_field' => true),
	    'range_date_modified' => array ('query_type' => 'default', 'enable_range_search' => true, 'is_date_field' => true),
	    'start_range_date_modified' => array ('query_type' => 'default', 'enable_range_search' => true, 'is_date_field' => true),
        'end_range_date_modified' => array ('query_type' => 'default', 'enable_range_search' => true, 'is_date_field' => true),	
	    //Range Search Support 			
	);
?>
