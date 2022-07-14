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

class pmse_Emails_Templates_sugar extends Basic {
	var $new_schema = true;
    var $module_name = 'pmse_Emails_Templates';
	var $module_dir = 'pmse_Emails_Templates';
	var $object_name = 'pmse_Emails_Templates';
	var $table_name = 'pmse_emails_templates';
	var $importable = false;
		var $id;
		var $name;
		var $date_entered;
		var $date_modified;
		var $modified_user_id;
		var $modified_by_name;
		var $created_by;
		var $created_by_name;
		var $description;
		var $deleted;
		var $created_by_link;
		var $modified_user_link;
		var $activities;
		var $assigned_user_id;
		var $assigned_user_name;
		var $assigned_user_link;
		var $from_name;
		var $from_address;
		var $subject;
		var $body;
		var $body_html;
		var $type;
		var $base_module;
		var $text_only;
		var $published;
        var $disable_row_level_security = true;

    const CURRENT_ACTIVITY_LINK = 'current_activity';


	public function __construct(){
		parent::__construct();
	}
	
	public function bean_implements($interface){
		switch($interface){
			case 'ACL': return true;
		}
		return false;
}
		
}

