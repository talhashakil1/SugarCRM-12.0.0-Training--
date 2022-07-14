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
require_once('soap/SoapHelperFunctions.php');

use  Sugarcrm\Sugarcrm\Util\Arrays\ArrayFunctions\ArrayFunctions;

/*************************************************************************************

THIS IS FOR SUGARCRM USERS


*************************************************************************************/
$disable_date_format = true;

$server->addFunction([
    'is_user_admin',
    'login',
    'is_loopback',
    'seamless_login',
    'get_entry_list',
    'get_entry',
    'get_entries',
    'set_entry',
    'set_entries',
    'set_note_attachment',
    'get_note_attachment',
    'relate_note_to_module',
    'get_related_notes',
    'logout',
    'get_module_fields',
    'get_available_modules',
    'update_portal_user',
    'get_user_id',
    'get_user_team_id',
    'get_server_time',
    'get_gmt_time',
    'get_sugar_flavor',
    'get_server_version',
    'get_relationships',
    'set_relationship',
    'set_relationships',
    'set_document_revision',
    'search_by_module',
    'get_mailmerge_document',
    'get_mailmerge_document2',
    'get_document_revision',
    'set_campaign_merge',
    'get_entries_count',
    'set_entries_details',
]);

/**
 * Return if the user is an admin or not
 *
 * @param String $session -- Session ID returned by a previous call to login.
 * @return int 1 or 0 depending on if the user is an admin
 */
function is_user_admin($session){
	if(validate_authenticated($session)){
		global $current_user;
		return is_admin($current_user);

	}else{
		return 0;
	}
}

/**
 * Log the user into the application
 *
 * @param UserAuth array $user_auth -- Set user_name and password (password needs to be
 *      in the right encoding for the type of authentication the user is setup for.  For Base
 *      sugar validation, password is the MD5 sum of the plain text password.
 * @param String $application -- The name of the application you are logging in from.  (Currently unused).
 * @return Array(session_id, error) -- session_id is the id of the session that was
 *      created.  Error is set if there was any error during creation.
 */
function login($user_auth, $application){
    $user_auth = object_to_array_deep($user_auth);
    global $sugar_config;

	$error = new SoapError();
	$user = BeanFactory::newBean('Users');
	$success = false;
    $authController = AuthenticationController::getInstance();

	$isLoginSuccess = $authController->login($user_auth['user_name'], $user_auth['password'], array('passwordEncrypted' => true));
	$usr_id=$user->retrieve_user_id($user_auth['user_name']);
	if($usr_id) {
		$user->retrieve($usr_id);
	}

	if ($isLoginSuccess) {
		if ($_SESSION['hasExpiredPassword'] =='1') {
			$error->set_error('password_expired');
			$GLOBALS['log']->fatal('password expired for user ' . $user_auth['user_name']);
			LogicHook::initialize();
			$GLOBALS['logic_hook']->call_custom_logic('Users', 'login_failed');
			return array('id'=>-1, 'error'=>$error);
		} // if
		if(!empty($user) && !empty($user->id) && !$user->is_group) {
			$success = true;
			global $current_user;
			$current_user = $user;
		} // if
	} else if($usr_id && isset($user->user_name) && ($user->getPreference('lockout') == '1')) {
			$error->set_error('lockout_reached');
			$GLOBALS['log']->fatal('Lockout reached for user ' . $user_auth['user_name']);
			LogicHook::initialize();
			$GLOBALS['logic_hook']->call_custom_logic('Users', 'login_failed');
			return array('id'=>-1, 'error'=>$error);
    } else {
        $password = decrypt_string($user_auth['password']);
        $authController = AuthenticationController::getInstance();
        $authController->loggedIn = false; // reset login attempt to try again with decrypted password
        if ($authController->login($user_auth['user_name'], $password)) {
            $success = true;
        }
    }

	if($success){
		session_start();
		global $current_user;
		//$current_user = $user;
		login_success();
		$current_user->loadPreferences();
        $_SESSION['authenticated_user_id'] = $current_user->id;
		$_SESSION['is_valid_session']= true;
		$_SESSION['ip_address'] = query_client_ip();
		$_SESSION['user_id'] = $current_user->id;
		$_SESSION['type'] = 'user';
		$_SESSION['avail_modules']= get_user_module_list($current_user);
		$_SESSION['authenticated_user_id'] = $current_user->id;
		$_SESSION['unique_key'] = $sugar_config['unique_key'];

		$current_user->call_custom_logic('after_login');
		return array('id'=>session_id(), 'error'=>$error);
	}
	$error->set_error('invalid_login');
	$GLOBALS['log']->fatal('SECURITY: User authentication for '. $user_auth['user_name']. ' failed');
	LogicHook::initialize();
	$GLOBALS['logic_hook']->call_custom_logic('Users', 'login_failed');
	return array('id'=>-1, 'error'=>$error);

}

//checks if the soap server and client are running on the same machine

/**
 * Check to see if the soap server and client are on the same machine.
 * We don't allow a server to sync to itself.
 *
 * @return true -- if the SOAP server and client are on the same machine
 * @return false -- if the SOAP server and client are not on the same machine.
 */
function is_loopback(){
	if(query_client_ip() == $_SERVER['SERVER_ADDR'])
		return 1;
	return 0;
}

/**
 * Validate the provided session information is correct and current.  Load the session.
 *
 * @param String $session_id -- The session ID that was returned by a call to login.
 * @return true -- If the session is valid and loaded.
 * @return false -- if the session is not valid.
 */
function validate_authenticated($session_id){
	if(!empty($session_id)){
		session_id($session_id);
		session_start();

		if(!empty($_SESSION['is_valid_session']) && is_valid_ip_address('ip_address') && $_SESSION['type'] == 'user'){

			global $current_user;

			$current_user = BeanFactory::getBean('Users', $_SESSION['user_id']);
			login_success();
			return true;
		}

		session_destroy();
	}
	LogicHook::initialize();
	$GLOBALS['log']->fatal('SECURITY: The session ID is invalid');
	$GLOBALS['logic_hook']->call_custom_logic('Users', 'login_failed');
	return false;
}

/**
 * Use the same logic as in SugarAuthenticate to validate the ip address
 *
 * @param string $session_var
 * @return bool - true if the ip address is valid, false otherwise.
 */
function is_valid_ip_address($session_var){
	global $sugar_config;
	// grab client ip address
	$clientIP = query_client_ip();
	$classCheck = 0;
	// check to see if config entry is present, if not, verify client ip
	if (!isset ($sugar_config['verify_client_ip']) || $sugar_config['verify_client_ip'] == true) {
		// check to see if we've got a current ip address in $_SESSION
		// and check to see if the session has been hijacked by a foreign ip
		if (isset ($_SESSION[$session_var])) {
			$session_parts = explode(".", $_SESSION[$session_var]);
			$client_parts = explode(".", $clientIP);
            if(count($session_parts) < 4) {
             	$classCheck = 0;
            }else {
    			// match class C IP addresses
    			for ($i = 0; $i < 3; $i ++) {
    				if ($session_parts[$i] == $client_parts[$i]) {
    					$classCheck = 1;
    						continue;
    				} else {
    					$classCheck = 0;
    					break;
    					}
    				}
                }
				// we have a different IP address
				if ($_SESSION[$session_var] != $clientIP && empty ($classCheck)) {
					$GLOBALS['log']->fatal("IP Address mismatch: SESSION IP: {$_SESSION[$session_var]} CLIENT IP: {$clientIP}");
					return false;
				}
			} else {
				return false;
			}
	}
	return true;
}

/**
 * Perform a seamless login.  This is used internally during the sync process.
 *
 * @param String $session -- Session ID returned by a previous call to login.
 * @param String $ip IP address of the client which is expected to login
 * @return true -- if the session was authenticated
 * @return false -- if the session could not be authenticated
 */
function seamless_login($session, $ip = null)
{
		if(!validate_authenticated($session)){
			return 0;
		}

        $_SESSION['seamless_login'] = true;
        if ($ip) {
            $_SESSION['seamless_login_ip'] = $ip;
        }

		return 1;
}

/**
 * Retrieve a list of beans.  This is the primary method for getting list of SugarBeans from Sugar using the SOAP API.
 *
 * @param String $session -- Session ID returned by a previous call to login.
 * @param String $module_name -- The name of the module to return records from.  This name should be the name the module was developed under (changing a tab name is studio does not affect the name that should be passed into this method)..
 * @param String $query -- SQL where clause without the word 'where'
 * @param String $order_by -- SQL order by clause without the phrase 'order by'
 * @param String $offset -- The record offset to start from.
 * @param Array  $select_fields -- A list of the fields to be included in the results. This optional parameter allows for only needed fields to be retrieved.
 * @param String $max_results -- The maximum number of records to return.  The default is the sugar configuration value for 'list_max_entries_per_page'
 * @param Number $deleted -- false if deleted records should not be include, true if deleted records should be included.
 * @return Array 'result_count' -- The number of records returned
 *               'next_offset' -- The start of the next page (This will always be the previous offset plus the number of rows returned.  It does not indicate if there is additional data unless you calculate that the next_offset happens to be closer than it should be.
 *               'field_list' -- The vardef information on the selected fields.
 *                      Array -- 'field'=>  'name' -- the name of the field
 *                                          'type' -- the data type of the field
 *                                          'label' -- the translation key for the label of the field
 *                                          'required' -- Is the field required?
 *                                          'options' -- Possible values for a drop down field
 *               'entry_list' -- The records that were retrieved
 *               'error' -- The SOAP error, if any
 */
function get_entry_list($session, $module_name, $query, $order_by,$offset, $select_fields, $max_results, $deleted ){
    $select_fields = object_to_array_deep($select_fields);

	$error = new SoapError();
	if(!validate_authenticated($session)){
		$error->set_error('invalid_login');
		return array('result_count'=>-1, 'entry_list'=>array(), 'error'=>$error->get_soap_array());
	}
    $using_cp = false;
    if($module_name == 'CampaignProspects'){
        $module_name = 'Prospects';
        $using_cp = true;
    }
	global $current_user;
	if(!check_modules_access($current_user, $module_name, 'read')){
		$error->set_error('no_access');
		return array('result_count'=>-1, 'entry_list'=>array(), 'error'=>$error->get_soap_array());
	}

	// If the maximum number of entries per page was specified, override the configuration value.
	if($max_results > 0){
		global $sugar_config;
		$sugar_config['list_max_entries_per_page'] = $max_results;
	}

    $seed = BeanFactory::newBean($module_name);
	if(empty($seed)){
		$error->set_error('no_module');
		return array('result_count'=>-1, 'entry_list'=>array(), 'error'=>$error->get_soap_array());
	}
    if(! ($seed->ACLAccess('Export') && $seed->ACLAccess('list')))
	{
		$error->set_error('no_access');
		return array('result_count'=>-1, 'entry_list'=>array(), 'error'=>$error->get_soap_array());
	}

	$valid = new SugarSQLValidate();
	if(!$valid->validateQueryClauses($query, $order_by)) {
        $GLOBALS['log']->error("Bad query: $query $order_by");
	    $error->set_error('no_access');
	    return array(
    			'result_count' => -1,
    			'error' => $error->get_soap_array()
    	);
	}
	if($query == ''){
		$where = '';
	}
	if($offset == '' || $offset == -1){
		$offset = 0;
	}
    if($using_cp){
        $response = $seed->retrieveTargetList($query, $select_fields, $offset,-1,-1,$deleted);
    }else{
        $response = $seed->get_list($order_by, $query, $offset, -1, -1, $deleted, true, $select_fields);
    }
	$list = $response['list'];


	$output_list = array();

    $isEmailModule = false;
    if($module_name == 'Emails'){
        $isEmailModule = true;
    }
	// retrieve the vardef information on the bean's fields.
	$field_list = array();

    require_once 'modules/Currencies/Currency.php';
    $currencies = array();

	foreach($list as $value)
	{
		if(isset($value->emailAddress)){
			$value->emailAddress->handleLegacyRetrieve($value);
		}
        if($isEmailModule){
            $value->retrieveEmailText();
        }
		$value->fill_in_additional_detail_fields();

        // bug 55129 - populate currency from user settings
        if (property_exists($value, 'currency_id'))
        {
            if (!isset($currencies[$value->currency_id])) {
                $currencies[$value->currency_id] = SugarCurrency::getCurrencyByID($value->currency_id);
            }
            $row_currency = $currencies[$value->currency_id];

            // walk through all currency-related fields
            foreach ($value->field_defs as $temp_field)
            {
                if (isset($temp_field['type']) && 'relate' == $temp_field['type']
                    && isset($temp_field['module'])  && 'Currencies' == $temp_field['module']
                    && isset($temp_field['id_name']) && 'currency_id' == $temp_field['id_name'])
                {
                    // populate related properties manually
                    $temp_property     = $temp_field['name'];
                    $currency_property = $temp_field['rname'];
                    $value->$temp_property = $row_currency->$currency_property;
                }
            }
        }
        // end of bug 55129

		$output_list[] = get_return_value($value, $module_name);
		if(empty($field_list)){
			$field_list = get_field_list($value);
		}
	}

	// Filter the search results to only include the requested fields.
	$output_list = filter_return_list($output_list, $select_fields, $module_name);

	// Filter the list of fields to only include information on the requested fields.
	$field_list = filter_return_list($field_list,$select_fields, $module_name);

	// Calculate the offset for the start of the next page
	$next_offset = $offset + sizeof($output_list);

	return array('result_count'=>sizeof($output_list), 'next_offset'=>$next_offset,'field_list'=>$field_list, 'entry_list'=>$output_list, 'error'=>$error->get_soap_array());
}

/**
 * Retrieve a single SugarBean based on ID.
 *
 * @param String $session -- Session ID returned by a previous call to login.
 * @param String $module_name -- The name of the module to return records from.  This name should be the name the module was developed under (changing a tab name is studio does not affect the name that should be passed into this method)..
 * @param String $id -- The SugarBean's ID value.
 * @param Array  $select_fields -- A list of the fields to be included in the results. This optional parameter allows for only needed fields to be retrieved.
 * @return unknown
 */
function get_entry($session, $module_name, $id,$select_fields ){
	return get_entries($session, $module_name, array($id), $select_fields);
}

/**
 * Retrieve a list of SugarBean's based on provided IDs.
 *
 * @param String $session -- Session ID returned by a previous call to login.
 * @param String $module_name -- The name of the module to return records from.  This name should be the name the module was developed under (changing a tab name is studio does not affect the name that should be passed into this method)..
 * @param Array $ids -- An array of SugarBean IDs.
 * @param Array $select_fields -- A list of the fields to be included in the results. This optional parameter allows for only needed fields to be retrieved.
 * @return Array 'field_list' -- Var def information about the returned fields
 *               'entry_list' -- The records that were retrieved
 *               'error' -- The SOAP error, if any
 */
function get_entries($session, $module_name, $ids,$select_fields ){
    $ids = object_to_array_deep($ids);
    $select_fields = object_to_array_deep($select_fields);
	global  $beanList;
	$error = new SoapError();
	$field_list = array();
	$output_list = array();
	if(!validate_authenticated($session)){
		$error->set_error('invalid_login');
		return array('field_list'=>$field_list, 'entry_list'=>array(), 'error'=>$error->get_soap_array());
	}
    $using_cp = false;
    if($module_name == 'CampaignProspects'){
        $module_name = 'Prospects';
        $using_cp = true;
    }
	if(empty($beanList[$module_name])){
		$error->set_error('no_module');
		return array('field_list'=>$field_list, 'entry_list'=>array(), 'error'=>$error->get_soap_array());
	}
	global $current_user;
	if(!check_modules_access($current_user, $module_name, 'read')){
		$error->set_error('no_access');
		return array('field_list'=>$field_list, 'entry_list'=>array(), 'error'=>$error->get_soap_array());
	}

	//todo can modify in there to call bean->get_list($order_by, $where, 0, -1, -1, $deleted);
	//that way we do not have to call retrieve for each bean
	//perhaps also add a select_fields to this, so we only get the fields we need
	//and not do a select *
	foreach($ids as $id){
		$seed = BeanFactory::newBean($module_name);


    if($using_cp){
        $seed = $seed->retrieveTarget($id);
    }else{
		if ($seed->retrieve($id) == null)
			$seed->deleted = 1;
    }

    if ($seed->deleted == 1) {
    	$list = array();
    	$list[] = array('name'=>'warning', 'value'=>'Access to this object is denied since it has been deleted or does not exist');
		$list[] = array('name'=>'deleted', 'value'=>'1');
    	$output_list[] = Array('id'=>$id,
								'module_name'=> $module_name,
    							'name_value_list'=>$list,
    							);
		continue;
    }
	if(! $seed->ACLAccess('DetailView')){
		$error->set_error('no_access');
		return array('field_list'=>$field_list, 'entry_list'=>array(), 'error'=>$error->get_soap_array());
	}
	if($module_name == 'Reports'){
		$result = get_report_value($seed);
		$output_list = $result['output_list'];
		$field_list = $result['field_list'];
	}else{
		$output_list[] = get_return_value($seed, $module_name);
	}

		if(empty($field_list)){
				$field_list = get_field_list($seed);

		}
	}

		$output_list = filter_return_list($output_list, $select_fields, $module_name);
		$field_list = filter_field_list($field_list,$select_fields, $module_name);

	return array( 'field_list'=>$field_list, 'entry_list'=>$output_list, 'error'=>$error->get_soap_array());
}

/**
 * Update or create a single SugarBean.
 *
 * @param String $session -- Session ID returned by a previous call to login.
 * @param String $module_name -- The name of the module to return records from.  This name should be the name the module was developed under (changing a tab name is studio does not affect the name that should be passed into this method)..
 * @param Array $name_value_list -- The keys of the array are the SugarBean attributes, the values of the array are the values the attributes should have.
 * @return Array    'id' -- the ID of the bean that was written to (-1 on error)
 *                  'error' -- The SOAP error if any.
 */
function set_entry($session,$module_name, $name_value_list){
    $name_value_list = object_to_array_deep($name_value_list);
	$error = new SoapError();
	if(!validate_authenticated($session)){
		$error->set_error('invalid_login');
		return array('id'=>-1, 'error'=>$error->get_soap_array());
	}
	global $current_user;
	if(!check_modules_access($current_user, $module_name, 'write')){
		$error->set_error('no_access');
		return array('id'=>-1, 'error'=>$error->get_soap_array());
	}

	$seed = BeanFactory::newBean($module_name);
	if(empty($seed)){
		$error->set_error('no_module');
		return array('id'=>-1, 'error'=>$error->get_soap_array());
	}


	foreach($name_value_list as $value){
        if($value['name'] == 'id' && isset($value['value']) && strlen($value['value']) > 0){
			$result = $seed->retrieve($value['value']);
            //bug: 44680 - check to ensure the user has access before proceeding.
            if(is_null($result))
            {
                $error->set_error('no_access');
		        return array('id'=>-1, 'error'=>$error->get_soap_array());
            }
            else
            {
                break;
            }

		}
	}
	foreach($name_value_list as $value){
        $GLOBALS['log']->debug($value['name']." : ".$value['value']);
        $seed->{$value['name']} = $value['value'];
	}
	if(! $seed->ACLAccess('Save') || ($seed->deleted == 1  &&  !$seed->ACLAccess('Delete')))
	{
		$error->set_error('no_access');
		return array('id'=>-1, 'error'=>$error->get_soap_array());
	}
    if ($module_name == 'Opportunities') {
        /* @var $admin Administration */
        $admin = BeanFactory::newBean('Administration');
        $config = $admin->getConfigForModule('Forecasts');

        if ($config['is_setup'] == 1 && $seed->deleted == 1) {
            $status_field = 'sales_stage';
            $status_field = 'sales_status';

            $status = array_merge($config['sales_stage_won'], $config['sales_stage_lost']);

            if ($seed->closed_revenue_line_items > 0 || in_array($seed->$status_field, $status)) {
                $error->set_error('no_access');
                return array('id'=>-1, 'error'=>$error->get_soap_array());
            }
        }
    }
    try{
        $seed->save();
    } catch (SugarApiExceptionNotAuthorized $ex) {
        $GLOBALS['log']->info('End: SoapSugarUsers->set_entry');
        switch($ex->messageLabel) {
            case 'ERR_USER_NAME_EXISTS':
                $error_string = 'duplicates';
                break;
            case 'ERR_REPORT_LOOP':
                $error_string = 'user_loop';
                break;
            default:
                $error_string = 'error_user_create_update';
        }
        $error->set_error($error_string);
        return array('id' => -1, 'error' => $error->get_soap_array());
    }
	if($seed->deleted == 1){
			$seed->mark_deleted($seed->id);
	}
	return array('id'=>$seed->id, 'error'=>$error->get_soap_array());

}

/**
 * Update or create a list of SugarBeans
 *
 * @param String $session -- Session ID returned by a previous call to login.
 * @param String $module_name -- The name of the module to return records from.  This name should be the name the module was developed under (changing a tab name is studio does not affect the name that should be passed into this method)..
 * @param Array $name_value_lists -- Array of Bean specific Arrays where the keys of the array are the SugarBean attributes, the values of the array are the values the attributes should have.
 * @return Array    'ids' -- Array of the IDs of the beans that was written to (-1 on error)
 *                  'error' -- The SOAP error if any.
 */
function set_entries($session,$module_name, $name_value_lists){
    $name_value_lists = object_to_array_deep($name_value_lists);
	$error = new SoapError();

	if(!validate_authenticated($session)){
		$error->set_error('invalid_login');

		return array(
			'ids' => array(),
			'error' => $error->get_soap_array()
		);
	}

	return handle_set_entries($module_name, $name_value_lists, FALSE);
}

/*
NOTE SPECIFIC CODE
*/

/**
 * Add or replace the attachment on a Note.
 *
 * @param String $session -- Session ID returned by a previous call to login.
 * @param Binary $note -- The flie contents of the attachment.
 * @return Array 'id' -- The ID of the new note or -1 on error
 *               'error' -- The SOAP error if any.
 */
function set_note_attachment($session,$note)
{
    $note = object_to_array_deep($note);
	$error = new SoapError();
	if(!validate_authenticated($session)){
		$error->set_error('invalid_login');
		return array('id'=>-1, 'error'=>$error->get_soap_array());
	}

	$ns = new NoteSoap();
	return array('id'=>$ns->saveFile($note), 'error'=>$error->get_soap_array());

}

/**
 * Retrieve an attachment from a note
 * @param String $session -- Session ID returned by a previous call to login.
 * @param Binary $note -- The flie contents of the attachment.
 * @return Array 'id' -- The ID of the new note or -1 on error
 *               'error' -- The SOAP error if any.
 *
 * @param String $session -- Session ID returned by a previous call to login.
 * @param String $id -- The ID of the appropriate Note.
 * @return Array 'note_attachment' -- Array String 'id' -- The ID of the Note containing the attachment
 *                                          String 'filename' -- The file name of the attachment
 *                                          Binary 'file' -- The binary contents of the file.
 *               'error' -- The SOAP error if any.
 */
function get_note_attachment($session,$id)
{
	$error = new SoapError();
	if(!validate_authenticated($session)){
		$error->set_error('invalid_login');
		return array('result_count'=>-1, 'entry_list'=>array(), 'error'=>$error->get_soap_array());
	}

	$note = BeanFactory::getBean('Notes', $id);
	if(!$note->ACLAccess('DetailView')){
		$error->set_error('no_access');
		return array('result_count'=>-1, 'entry_list'=>array(), 'error'=>$error->get_soap_array());
	}
	$ns = new NoteSoap();
	if(!isset($note->filename)){
		$note->filename = '';
	}
	$file= $ns->retrieveFile($id,$note->filename);
	if($file == -1){
		$error->set_error('no_file');
		$file = '';
	}

	return array('note_attachment'=>array('id'=>$id, 'filename'=>$note->filename, 'file'=>$file), 'error'=>$error->get_soap_array());

}

/**
 * Attach a note to another bean.  Once you have created a note to store an
 * attachment, the note needs to be related to the bean.
 *
 * @param String $session -- Session ID returned by a previous call to login.
 * @param String $note_id -- The ID of the note that you want to associate with a bean
 * @param String $module_name -- The name of the module to return records from.  This name should be the name the module was developed under (changing a tab name is studio does not affect the name that should be passed into this method)..
 * @param String $module_id -- The ID of the bean that you want to associate the note with
 * @return no error for success, error for failure
 */
function relate_note_to_module($session,$note_id, $module_name, $module_id){
	global  $beanList;
	$error = new SoapError();
	if(!validate_authenticated($session)){
		$error->set_error('invalid_login');
		return $error->get_soap_array();
	}
	if(empty($beanList[$module_name])){
		$error->set_error('no_module');
		return $error->get_soap_array();
	}
	global $current_user;
	if(!check_modules_access($current_user, $module_name, 'read')){
		$error->set_error('no_access');
		return $error->get_soap_array();
	}

	$seed = BeanFactory::getBean('Notes', $note_id);

	if(!$seed->ACLAccess('ListView')){
		$error->set_error('no_access');
		return array('result_count'=>-1, 'entry_list'=>array(), 'error'=>$error->get_soap_array());
	}

	if($module_name != 'Contacts'){
		$seed->parent_type=$module_name;
		$seed->parent_id = $module_id;

	}else{

		$seed->contact_id=$module_id;

	}

	$seed->save();

	return $error->get_soap_array();

}

/**
 * Retrieve the collection of notes that are related to a bean.
 *
 * @param String $session -- Session ID returned by a previous call to login.
 * @param String $module_name -- The name of the module to return records from.  This name should be the name the module was developed under (changing a tab name is studio does not affect the name that should be passed into this method)..
 * @param String $module_id -- The ID of the bean that you want to associate the note with
 * @param Array  $select_fields -- A list of the fields to be included in the results. This optional parameter allows for only needed fields to be retrieved.
 * @return Array    'result_count' -- The number of records returned (-1 on error)
 *                  'next_offset' -- The start of the next page (This will always be the previous offset plus the number of rows returned.  It does not indicate if there is additional data unless you calculate that the next_offset happens to be closer than it should be.
 *                  'field_list' -- The vardef information on the selected fields.
 *                  'entry_list' -- The records that were retrieved
 *                  'error' -- The SOAP error, if any
 */
function get_related_notes($session,$module_name, $module_id, $select_fields){
    $select_fields = object_to_array_deep($select_fields);
	$error = new SoapError();
	if(!validate_authenticated($session)){
		$error->set_error('invalid_login');
		return array('result_count'=>-1, 'entry_list'=>array(), 'error'=>$error->get_soap_array());
	}
	global $current_user;
	if(!check_modules_access($current_user, $module_name, 'read')){
		$error->set_error('no_access');
		return array('result_count'=>-1, 'entry_list'=>array(), 'error'=>$error->get_soap_array());
	}

	$seed = BeanFactory::getBean($module_name, $module_id);
	if(empty($seed)){
		$error->set_error('no_module');
		return array('result_count'=>-1, 'entry_list'=>array(), 'error'=>$error->get_soap_array());
	}
	if(!$seed->ACLAccess('DetailView')){
		$error->set_error('no_access');
		return array('result_count'=>-1, 'entry_list'=>array(), 'error'=>$error->get_soap_array());
	}
	$list = $seed->get_linked_beans('notes','Note', array(), 0, -1, 0);

	$output_list = Array();
	$field_list = Array();
	foreach($list as $value)
	{
		$output_list[] = get_return_value($value, 'Notes');
    	if(empty($field_list))
    	{
			$field_list = get_field_list($value);
		}
	}
	$output_list = filter_return_list($output_list, $select_fields, $module_name);
	$field_list = filter_field_list($field_list,$select_fields, $module_name);

	return array('result_count'=>sizeof($output_list), 'next_offset'=>0,'field_list'=>$field_list, 'entry_list'=>$output_list, 'error'=>$error->get_soap_array());
}

/**
 * Log out of the session.  This will destroy the session and prevent other's from using it.
 *
 * @param String $session -- Session ID returned by a previous call to login.
 * @return Empty error on success, Error on failure
 */
function logout($session){
	global $current_user;

	$error = new SoapError();
	LogicHook::initialize();
	if(validate_authenticated($session)){
		$current_user->call_custom_logic('before_logout');
		session_destroy();
		$GLOBALS['logic_hook']->call_custom_logic('Users', 'after_logout');
		return $error->get_soap_array();
	}
	$error->set_error('no_session');
	$GLOBALS['logic_hook']->call_custom_logic('Users', 'after_logout');
	return $error->get_soap_array();
}

/**
 * Retrieve vardef information on the fields of the specified bean.
 *
 * @param String $session -- Session ID returned by a previous call to login.
 * @param String $module_name -- The name of the module to return records from.  This name should be the name the module was developed under (changing a tab name is studio does not affect the name that should be passed into this method)..
 * @return Array    'module_fields' -- The vardef information on the selected fields.
 *                  'error' -- The SOAP error, if any
 */
function get_module_fields($session, $module_name){
	global  $beanList;
	$error = new SoapError();
	$module_fields = array();
	if(! validate_authenticated($session)){
		$error->set_error('invalid_session');
		return array('module_fields'=>$module_fields, 'error'=>$error->get_soap_array());
	}
	if(empty($beanList[$module_name])){
		$error->set_error('no_module');
		return array('module_fields'=>$module_fields, 'error'=>$error->get_soap_array());
	}
	global $current_user;
	if(!check_modules_access($current_user, $module_name, 'read')){
		$error->set_error('no_access');
		return array('module_fields'=>$module_fields, 'error'=>$error->get_soap_array());
	}
	$seed = BeanFactory::newBean($module_name);

	if(empty($seed))
	{
       $error->set_error('no_file');
       return array('module_fields'=>$module_fields, 'error'=>$error->get_soap_array());
	}

	if($seed->ACLAccess('ListView', true) || $seed->ACLAccess('DetailView', true) || 	$seed->ACLAccess('EditView', true) )
    {
    	return get_return_module_fields($seed, $module_name, $error);
    }
    else
    {
    	$error->set_error('no_access');
    	return array('module_fields'=>$module_fields, 'error'=>$error->get_soap_array());
    }
}

/**
 * Retrieve the list of available modules on the system available to the currently logged in user.
 *
 * @param String $session -- Session ID returned by a previous call to login.
 * @return Array    'modules' -- An array of module names
 *                  'error' -- The SOAP error, if any
 */
function get_available_modules($session){
	$error = new SoapError();
	$modules = array();
	if(! validate_authenticated($session)){
		$error->set_error('invalid_session');
		return array('modules'=> $modules, 'error'=>$error->get_soap_array());
	}
	$modules = ArrayFunctions::array_access_keys($_SESSION['avail_modules']);

	return array('modules'=> $modules, 'error'=>$error->get_soap_array());
}

/**
 * Update the properties of a contact that is portal user.  Add the portal user name to the user's properties.
 *
 * @param String $session -- Session ID returned by a previous call to login.
 * @param String $portal_name -- The portal user_name of the contact
 * @param Array $name_value_list -- collection of 'name'=>'value' pairs for finding the contact
 * @return Empty error on success, Error on failure
 */
function update_portal_user($session,$portal_name, $name_value_list){
    $name_value_list = object_to_array_deep($name_value_list);
	global  $beanList, $beanFiles;
	$error = new SoapError();
	if(! validate_authenticated($session)){
		$error->set_error('invalid_session');
		return $error->get_soap_array();
	}
	$contact = BeanFactory::newBean('Contacts');

	$searchBy = array('deleted'=>0);
	foreach($name_value_list as $name_value){
			$searchBy[$name_value['name']] = $name_value['value'];
	}
	if($contact->retrieve_by_string_fields($searchBy) != null){
		if(!$contact->duplicates_found){
			$contact->portal_name = $portal_name;
			$contact->portal_active = 1;
			if($contact->ACLAccess('Save')){
				$contact->save();
			}else{
				$error->set_error('no_access');
			}
			return $error->get_soap_array();
		}
		$error->set_error('duplicates');
		return $error->get_soap_array();
	}
	$error->set_error('no_records');
	return $error->get_soap_array();
}

/**
 * Return the user_id of the user that is logged into the current session.
 *
 * @param String $session -- Session ID returned by a previous call to login.
 * @return String -- the User ID of the current session
 *                  -1 on error.
 */
function get_user_id($session){
	if(validate_authenticated($session)){
		global $current_user;
		return $current_user->id;

	}else{
		return '-1';
	}
}

/**
 * Return the ID of the default team for the user that is logged into the current session.
 *
 * @param String $session -- Session ID returned by a previous call to login.
 * @return String -- the Team ID of the current user's default team
 *                  -1 on error.
 */
function get_user_team_id($session){
	if(validate_authenticated($session))
	{
		global $current_user;
		return $current_user->default_team;
	}else{
		return '-1';
	}
}

/**
 * Return the current time on the server in the format 'Y-m-d H:i:s'.  This time is in the server's default timezone.
 *
 * @return String -- The current date/time 'Y-m-d H:i:s'
 */
function get_server_time(){
	return date('Y-m-d H:i:s');
}

/**
 * Return the current time on the server in the format 'Y-m-d H:i:s'.  This time is in GMT.
 *
 * @return String -- The current date/time 'Y-m-d H:i:s'
 */
function get_gmt_time(){
	return TimeDate::getInstance()->nowDb();
}

/**
 * Retrieve the specific flavor of sugar.
 *
 * @return String   'PRO' -- For Professional
 *                  'ENT' -- For Enterprise
 */
function get_sugar_flavor(){
 global $sugar_flavor;

 return $sugar_flavor;
}

/**
 * Retrieve the version number of Sugar that the server is running.
 *
 * @return String -- The current sugar version number.
 *                   '1.0' on error.
 */
function get_server_version(){

	$admin = Administration::getSettings('info');
	if(isset($admin->settings['info_sugar_version'])){
		return $admin->settings['info_sugar_version'];
	}else{
		return '1.0';
	}

}

/**
 * Retrieve a collection of beans tha are related to the specified bean.
 * As of 4.5.1c, all combinations of related modules are supported
 *
 * @param String $session -- Session ID returned by a previous call to login.
 * @param String $module_name -- The name of the module that the primary record is from.  This name should be the name the module was developed under (changing a tab name is studio does not affect the name that should be passed into this method)..
 * @param String $module_id -- The ID of the bean in the specified module
 * @param String $related_module -- The name of the related module to return records from.  This name should be the name the module was developed under (changing a tab name is studio does not affect the name that should be passed into this method)..
 * @param String $related_module_query -- A portion of the where clause of the SQL statement to find the related items.  The SQL query will already be filtered to only include the beans that are related to the specified bean.
 * @param Number $deleted -- false if deleted records should not be include, true if deleted records should be included.
 * @return unknown
 */
function get_relationships($session, $module_name, $module_id, $related_module, $related_module_query, $deleted){
		$error = new SoapError();
	$ids = array();
	if(!validate_authenticated($session)){
		$error->set_error('invalid_login');
		return array('ids'=>$ids,'error'=> $error->get_soap_array());
	}
	$error = new SoapError();

	$mod = BeanFactory::getBean($module_name, $module_id);
    $related_mod = BeanFactory::newBean($related_module);

	if(empty($mod) || empty($related_mod)){
		$error->set_error('no_module');
		return array('ids'=>$ids, 'error'=>$error->get_soap_array());
	}
	if(!$mod->ACLAccess('DetailView')){
		$error->set_error('no_access');
		return array('ids'=>$ids, 'error'=>$error->get_soap_array());
	}

	$valid = new SugarSQLValidate();
	if(!$valid->validateQueryClauses($related_module_query)) {
        $GLOBALS['log']->error("Bad query: $related_module_query");
        $error->set_error('no_access');
	    return array(
    			'result_count' => -1,
    			'error' => $error->get_soap_array()
    		);
    }

    $id_list = get_linked_records($related_module, $module_name, $module_id);

	if ($id_list === FALSE) {
		$error->set_error('no_relationship_support');
		return array('ids'=>$ids, 'error'=>$error->get_soap_array());
	}
	elseif (count($id_list) == 0) {
		return array('ids'=>$ids, 'error'=>$error->get_soap_array());
	}

	$list = array();

	$in = "'".implode("', '", $id_list)."'";

	$sql = "SELECT {$related_mod->table_name}.id FROM {$related_mod->table_name} ";

	$related_mod->add_team_security_where_clause($sql);

    if (isset($related_mod->custom_fields)) {
        $customJoin = $related_mod->custom_fields->getJOIN();
        $sql .= $customJoin ? $customJoin['join'] : '';
    }

	$sql .= " WHERE {$related_mod->table_name}.id IN ({$in}) ";

	if (!empty($related_module_query)) {
		$sql .= " AND ( {$related_module_query} )";
	}

	$result = $related_mod->db->query($sql);
	while ($row = $related_mod->db->fetchByAssoc($result)) {
		$list[] = $row['id'];
	}

	$return_list = array();

	foreach($list as $id) {
		$related_mod = BeanFactory::getBean($related_module, $id);

		$return_list[] = array(
			'id' => $id,
			'date_modified' => $related_mod->date_modified,
			'deleted' => $related_mod->deleted
		);
	}

	return array('ids' => $return_list, 'error' => $error->get_soap_array());
}

/**
 * Set a single relationship between two beans.  The items are related by module name and id.
 *
 * @param String $session -- Session ID returned by a previous call to login.
 * @param Array $set_relationship_value --
 *      'module1' -- The name of the module that the primary record is from.  This name should be the name the module was developed under (changing a tab name is studio does not affect the name that should be passed into this method)..
 *      'module1_id' -- The ID of the bean in the specified module
 *      'module2' -- The name of the module that the related record is from.  This name should be the name the module was developed under (changing a tab name is studio does not affect the name that should be passed into this method)..
 *      'module2_id' -- The ID of the bean in the specified module
 * @return Empty error on success, Error on failure
 */
function set_relationship($session, $set_relationship_value){
    $set_relationship_value = object_to_array_deep($set_relationship_value);
	$error = new SoapError();
	if(!validate_authenticated($session)){
		$error->set_error('invalid_login');
		return $error->get_soap_array();
	}
	return handle_set_relationship($set_relationship_value, $session);
}

/**
 * Setup several relationships between pairs of beans.  The items are related by module name and id.
 *
 * @param String $session -- Session ID returned by a previous call to login.
 * @param Array $set_relationship_list -- One for each relationship to setup.  Each entry is itself an array.
 *      'module1' -- The name of the module that the primary record is from.  This name should be the name the module was developed under (changing a tab name is studio does not affect the name that should be passed into this method)..
 *      'module1_id' -- The ID of the bean in the specified module
 *      'module2' -- The name of the module that the related record is from.  This name should be the name the module was developed under (changing a tab name is studio does not affect the name that should be passed into this method)..
 *      'module2_id' -- The ID of the bean in the specified module
 * @return Empty error on success, Error on failure
 */
function set_relationships($session, $set_relationship_list){
    $set_relationship_list = object_to_array_deep($set_relationship_list);
	$error = new SoapError();
	if(!validate_authenticated($session)){
		$error->set_error('invalid_login');
		return -1;
	}
	$count = 0;
	$failed = 0;
	foreach($set_relationship_list as $set_relationship_value){
		$reter = handle_set_relationship($set_relationship_value, $session);
		if($reter['number'] == 0){
			$count++;
		}else{
			$failed++;
		}
	}
	return array('created'=>$count , 'failed'=>$failed, 'error'=>$error);
}



//INTERNAL FUNCTION NOT EXPOSED THROUGH SOAP
/**
 * (Internal) Create a relationship between two beans.
 *
 * @param Array $set_relationship_value --
 *      'module1' -- The name of the module that the primary record is from.  This name should be the name the module was developed under (changing a tab name is studio does not affect the name that should be passed into this method)..
 *      'module1_id' -- The ID of the bean in the specified module
 *      'module2' -- The name of the module that the related record is from.  This name should be the name the module was developed under (changing a tab name is studio does not affect the name that should be passed into this method)..
 *      'module2_id' -- The ID of the bean in the specified module
 * @return Empty error on success, Error on failure
 */
function handle_set_relationship($set_relationship_value, $session='')
{
    global  $beanList, $beanFiles;
    $error = new SoapError();

    $db = DBManagerFactory::getInstance();
    $module1 = $set_relationship_value['module1'];
    $module1_id = $set_relationship_value['module1_id'];
    $module2 = $set_relationship_value['module2'];
    $module2_id = $set_relationship_value['module2_id'];

    if(empty($beanList[$module1]) || empty($beanList[$module2]) )
    {
        $error->set_error('no_module');
        return $error->get_soap_array();
    }
    $mod = BeanFactory::getBean($module1, $module1_id);
	if(!$mod->ACLAccess('DetailView')){
		$error->set_error('no_access');
		return $error->get_soap_array();
	}
	if($module1 == "Contacts" && $module2 == "Users"){
		$key = 'user_sync';
	}
	else{
    	$key = array_search(strtolower($module2),$mod->relationship_fields);
    	if(!$key) {
            $key = $mod->retrieve_by_modules($module1, $module2, $GLOBALS['db']);

            // BEGIN SnapLogic fix for bug 32064
            if ($module1 == "Quotes" && $module2 == "ProductBundles") {
                // Alternative solution is perhaps to
                // do whatever Sugar does when the same
                // request is received from the web:
                $pb = BeanFactory::getBean($module2, $module2_id);

                // Check if this relationship already exists
                $query = sprintf(
                    'SELECT count(*) AS count FROM product_bundle_quote
                     WHERE quote_id = %s AND bundle_id = %s AND deleted = 0',
                    $db->quoted($module1_id),
                    $db->quoted($module2_id)
                );
                $result = $GLOBALS['db']->query($query, true, "Error checking for previously existing relationship between quote and product_bundle");
                $row = $GLOBALS['db']->fetchByAssoc($result);
                if(isset($row['count']) && $row['count'] > 0){
                    return $error->get_soap_array();
                }

                $query = sprintf(
                    'SELECT MAX(bundle_index)+1 AS idx FROM product_bundle_quote WHERE quote_id = %s AND deleted = 0',
                    $db->quoted($module1_id)
                );
                $result = $GLOBALS['db']->query($query, true, "Error getting bundle_index");
                $GLOBALS['log']->debug("*********** Getting max bundle_index");
                $GLOBALS['log']->debug($query);
                $row = $GLOBALS['db']->fetchByAssoc($result);

                $idx = 0;
                if ($row) {
                    $idx = $row['idx'];
                }

                $pb->set_productbundle_quote_relationship($module1_id,$module2_id,$idx);
                $pb->save();
                return $error->get_soap_array();

            } else if ($module1 == "ProductBundles" && $module2 == "Products") {
                // And, well, similar things apply in this case
                $pb = BeanFactory::getBean($module1, $module1_id);

                // Check if this relationship already exists
                $query = sprintf(
                    'SELECT count(*) AS count FROM product_bundle_product
                     WHERE bundle_id = %s AND product_id = %s AND deleted = 0',
                    $db->quoted($module1_id),
                    $db->quoted($module2_id)
                );
                $result = $GLOBALS['db']->query($query, true, "Error checking for previously existing relationship between quote and product_bundle");
                $row = $GLOBALS['db']->fetchByAssoc($result);
                if(isset($row['count']) && $row['count'] > 0){
                    return $error->get_soap_array();
                }

                $query = sprintf(
                    'SELECT MAX(product_index)+1 AS idx FROM product_bundle_product WHERE bundle_id = %s',
                    $db->quoted($module1_id)
                );
                $result = $GLOBALS['db']->query($query, true, "Error getting bundle_index");
                $GLOBALS['log']->debug("*********** Getting max bundle_index");
                $GLOBALS['log']->debug($query);
                $row = $GLOBALS['db']->fetchByAssoc($result);

                $idx = 0;
                if ($row) {
                    $idx = $row['idx'];
                }
                $pb->set_productbundle_product_relationship($module2_id,$idx,$module1_id);
                $pb->save();

                $prod = BeanFactory::getBean($module2, $module2_id);
                $prod->quote_id = $pb->quote_id;
                $prod->save();
                return $error->get_soap_array();
            }
            // END SnapLogic fix for bug 32064

    		if (!empty($key)) {
    			$mod->load_relationship($key);
    			$mod->$key->add($module2_id);
    			return $error->get_soap_array();
    		} // if
        }
    }

    if(!$key)
    {
        $error->set_error('no_module');
        return $error->get_soap_array();
    }

    if(($module1 == 'Meetings' || $module1 == 'Calls') && ($module2 == 'Contacts' || $module2 == 'Users')) {
    	$key = strtolower($module2);
    	$mod->load_relationship($key);
    	$mod->$key->add($module2_id);
    } else if($module1 == 'Contacts' && $module2 == 'Users') {
        $mod->load_relationship($key);
        if($module2_id) {
            $mod->$key->add($module2_id);
        } else {
            $mod->$key->delete($module2_id);
        }
    }
    else if ($module1 == 'Contacts' && ($module2 == 'Notes' || $module2 == 'Calls' || $module2 == 'Meetings' || $module2 == 'Tasks') && !empty($session)){
        $mod->$key = $module2_id;
        $mod->save_relationship_changes(false);
        if (!empty($mod->account_id)) {
            // when setting a relationship from a Contact to these activities, if the Contacts is related to an Account,
            // we want to associate that Account to the activity as well
            $ret = set_relationship($session, array('module1'=>'Accounts', 'module1_id'=>$mod->account_id, 'module2'=>$module2, 'module2_id'=>$module2_id));
        }
    }
    else{
    	$mod->$key = $module2_id;
    	$mod->save_relationship_changes(false);
    }

    return $error->get_soap_array();
}

/**
 * Enter description here...
 *
 * @param String $session -- Session ID returned by a previous call to login.
 * @param unknown_type $document_revision
 * @return unknown
 */
function set_document_revision($session,$document_revision)
{
    $document_revision = object_to_array_deep($document_revision);
	$error = new SoapError();
	if(!validate_authenticated($session)){
		$error->set_error('invalid_login');
		return array('id'=>-1, 'error'=>$error->get_soap_array());
	}

	$dr = new DocumentSoap();
	return array('id'=>$dr->saveFile($document_revision), 'error'=>$error->get_soap_array());

}

/**
 * Given a list of modules to search and a search string, return the id, module_name, along with the fields
 * as specified in the $query_array
 *
 * @param string $user_name 		- username of the Sugar User
 * @param string $password			- password of the Sugar User
 * @param string $search_string 	- string to search
 * @param string[] $modules			- array of modules to query
 * @param int $offset				- a specified offset in the query
 * @param int $max_results			- max number of records to return
 * @return get_entry_list_result 	- id, module_name, and list of fields from each record
 */
function search_by_module($user_name, $password, $search_string, $modules, $offset, $max_results){
    $modules = object_to_array_deep($modules);
	$error = new SoapError();
    $hasLoginError = false;

    if(empty($user_name) && !empty($password))
    {
        if(!validate_authenticated($password))
        {
            $hasLoginError = true;
        }
    } else if(!validate_user($user_name, $password)) {
		$hasLoginError = true;
	}

    //If there is a login error, then return the error here
    if($hasLoginError)
    {
        $error->set_error('invalid_login');
        return array('result_count'=>-1, 'entry_list'=>array(), 'error'=>$error->get_soap_array());
    }

	global $current_user;
	if($max_results > 0){
		global $sugar_config;
		$sugar_config['list_max_entries_per_page'] = $max_results;
	}
	//  MRF - BUG:19552 - added a join for accounts' emails below
	$query_array = array('Accounts'=>array('where'=>array('Accounts' => array(0 => "accounts.name like '{0}%'"), 'EmailAddresses' => array(0 => "ea.email_address like '{0}%'")),'fields'=>"accounts.id, accounts.name"),
	                        'Bugs'=>array('where'=>array('Bugs' => array(0 => "bugs.name like '{0}%'", 1 => "bugs.bug_number = {0}")),'fields'=>"bugs.id, bugs.name, bugs.bug_number"),
							'Cases'=>array('where'=>array('Cases' => array(0 => "cases.name like '{0}%'", 1 => "cases.case_number = {0}")),'fields'=>"cases.id, cases.name, cases.case_number"),
							'Leads'=>array('where'=>array('Leads' => array(0 => "leads.first_name like '{0}%'",1 => "leads.last_name like '{0}%'"), 'EmailAddresses' => array(0 => "ea.email_address like '{0}%'")), 'fields'=>"leads.id, leads.first_name, leads.last_name, leads.status"),
 							'Project'=>array('where'=>array('Project' => array(0 => "project.name like '{0}%'")), 'fields'=>"project.id, project.name"),
                            'ProjectTask'=>array('where'=>array('ProjectTask' => array(0 => "project.id = '{0}'")), 'fields'=>"project_task.id, project_task.name"),
							'Contacts'=>array('where'=>array('Contacts' => array(0 => "contacts.first_name like '{0}%'", 1 => "contacts.last_name like '{0}%'"), 'EmailAddresses' => array(0 => "ea.email_address like '{0}%'")),'fields'=>"contacts.id, contacts.first_name, contacts.last_name"),
							'Opportunities'=>array('where'=>array('Opportunities' => array(0 => "opportunities.name like '{0}%'")), 'fields'=>"opportunities.id, opportunities.name"),
							'Users'=>array('where'=>array('EmailAddresses' => array(0 => "ea.email_address like '{0}%'")),'fields'=>"users.id, users.user_name, users.first_name, ea.email_address"),
						);

	$more_query_array = array();
	foreach($modules as $module) {
	    if (!array_key_exists($module, $query_array)) {
	        $lc_module = strtolower($module);
            $seed = BeanFactory::newBean($module);
            $table_name = $seed->table_name;
            if (!empty($seed->field_defs['name']['db_concat_fields'])) {
                $namefield = $seed->db->concat($table_name, $seed->field_defs['name']['db_concat_fields']);
            } else {
                $namefield = "$lc_module.name";
            }

            $more_query_array[$module] = array(
                'where' => array(
                    $module => array(
                        0 => "$namefield like '{0}%'"
                    ),
                    'EmailAddresses' => array(
                        0 => "ea.email_address like '{0}%'"
                    )
                ),
                'fields' => "$lc_module.id, $namefield AS name"
            );
	    }
	}

	if (!empty($more_query_array)) {
	    $query_array = array_merge($query_array, $more_query_array);
	}

	if(!empty($search_string) && isset($search_string)){
		foreach($modules as $module_name){
		    $seed = BeanFactory::newBean($module_name);
			if(empty($seed)){
				continue;
			}
			if(!check_modules_access($current_user, $module_name, 'read')){
				continue;
			}
			if(! $seed->ACLAccess('ListView'))
			{
				continue;
			}

			if(isset($query_array[$module_name])){
				$query = '';
				$tmpQuery = '';
				//split here to do while loop
				foreach($query_array[$module_name]['where'] as $key => $value){
					foreach($value as $where_clause){
						$addQuery = true;
						if(!empty($query))
							$tmpQuery = ' UNION ';
						$tmpQuery .= "SELECT ".$query_array[$module_name]['fields']." FROM $seed->table_name ";
						// We need to confirm that the user is a member of the team of the item.
						if ($module_name != 'Users') {
							$seed->add_team_security_where_clause($tmpQuery);
							$tmpQuery .= "LEFT JOIN teams ON $seed->table_name.team_id=teams.id AND (teams.deleted=0) ";
						}


		                if($module_name == 'ProjectTask'){
		                    $tmpQuery .= "INNER JOIN project ON $seed->table_name.project_id = project.id ";
		                }

		               	if(isset($seed->emailAddress) && $key == 'EmailAddresses'){
		               		$tmpQuery .= " INNER JOIN email_addr_bean_rel eabl  ON eabl.bean_id = $seed->table_name.id and eabl.deleted=0";
		              		$tmpQuery .= " INNER JOIN email_addresses ea ON (ea.id = eabl.email_address_id) ";
		                }
						$where = "WHERE (";
						$search_terms = explode(", ", $search_string);
						$termCount = count($search_terms);
						$count = 1;
						if($key != 'EmailAddresses'){
							foreach($search_terms as $term){
								if(!strpos($where_clause, 'number')){
									$where .= string_format($where_clause,array($GLOBALS['db']->quote($term)));
								}elseif(is_numeric($term)){
									$where .= string_format($where_clause,array($GLOBALS['db']->quote($term)));
								}else{
									$addQuery = false;
								}
								if($count < $termCount){
									$where .= " OR ";
								}
								$count++;
							}
						}else{
                            $where .= '(';
                            foreach ($search_terms as $term)
                            {
                                $where .= "ea.email_address LIKE '".$GLOBALS['db']->quote($term)."'";
                                if ($count < $termCount)
                                {
                                    $where .= " OR ";
                                }
                                $count++;
                            }
                            $where .= ')';
						}
						$tmpQuery .= $where;
						$tmpQuery .= ") AND $seed->table_name.deleted = 0";
						if($addQuery)
							$query .= $tmpQuery;
					}
				}
				//grab the items from the db
				$result = $seed->db->query($query, $offset, $max_results);

				while(($row = $seed->db->fetchByAssoc($result)) != null){
					$list = array();
                    foreach ($row as $field => $value) {
                        $list[$field] = array('name'=>$field, 'value'=>$value);
					}

					$output_list[] = array('id'=>$row['id'],
									   'module_name'=>$module_name,
									   'name_value_list'=>$list);
					if(empty($field_list)){
						$field_list = get_field_list($row);
					}
				}//end while
			}
		}//end foreach
	}

	$next_offset = $offset + sizeof($output_list);

	return array('result_count'=>sizeof($output_list), 'next_offset'=>$next_offset,'field_list'=>$field_list, 'entry_list'=>$output_list, 'error'=>$error->get_soap_array());

}//end function

/**
 * Get MailMerge document
 *
 * @param String $session -- Session ID returned by a previous call to login.
 * @param unknown_type $file_name
 * @param unknown_type $fields
 * @return unknown
 */
function get_mailmerge_document($session, $file_name, $fields)
{
    $fields = object_to_array_deep($fields);
    global $app_list_strings;
    $error = new SoapError();
    if(!validate_authenticated($session))
    {
        $error->set_error('invalid_login');
        return array('result'=>'', 'error'=>$error->get_soap_array());
    }
    if(!preg_match('/^sugardata[\.\d\s]+\.php$/', $file_name)) {
        $error->set_error('no_records');
        return array('result'=>'', 'error'=>$error->get_soap_array());
    }
    $html = '';

    $file_name = sugar_cached('MergedDocuments/').pathinfo($file_name, PATHINFO_BASENAME);

    $master_fields = array();
    $related_fields = array();

    if(file_exists($file_name))
    {
        include($file_name);

        $class1 = $merge_array['master_module'];
        $seed1 = BeanFactory::newBean($merge_array['master_module']);

        if(!empty($merge_array['related_module']))
        {
            $seed2 = BeanFactory::newBean($merge_array['related_module']);
        }

        //parse fields
        //$token1 = strtolower($class1);
        if($class1 == 'Prospects'){
            $class1 = 'CampaignProspects';
        }
        foreach($fields as $field)
        {
            $pos = strpos(strtolower($field), strtolower($class1));
            $pos2 = strpos(strtolower($field), strtolower($seed2->module_dir));
            if($pos !== false){
            	$fieldName = str_replace(strtolower($class1).'_', '', strtolower($field));
            	array_push($master_fields, $fieldName);
            }else if($pos2 !== false){
            	$fieldName = str_replace(strtolower($seed2->module_dir).'_', '', strtolower($field));
            	array_push($related_fields, $fieldName);
            }
        }

        $html = '<html ' . get_language_header() .'><body><table border = 1><tr>';

        foreach($master_fields as $master_field){
            $html .= '<td>'.$class1.'_'.$master_field.'</td>';
        }
        foreach($related_fields as $related_field){
            $html .= '<td>'.$seed2->module_dir.'_'.$related_field.'</td>';
        }
        $html .= '</tr>';

        $ids = $merge_array['ids'];
        $is_prospect_merge = ($seed1->object_name == 'Prospect');
        foreach($ids as $key=>$value){
            if($is_prospect_merge){
                $seed1 = $seed1->retrieveTarget($key);
            }else{
                $seed1->retrieve($key);
            }
            $html .= '<tr>';
            foreach($master_fields as $master_field){
                if(isset($seed1->$master_field)){
                    if ($seed1->field_defs[$master_field]['type'] == 'enum') {
                        //pull in the translated dom
                         $html .= '<td>'
                             . $app_list_strings[$seed1->field_defs[$master_field]['options']][$seed1->$master_field]
                             . '</td>';
                    }else{
                        $html .='<td>'.$seed1->$master_field.'</td>';
                    }
                }
                else{
                    $html .= '<td></td>';
                    }
            }
            if(isset($value) && !empty($value)){
                $seed2->retrieve($value);
                foreach($related_fields as $related_field){
                    if(isset($seed2->$related_field)){
                        if ($seed2->field_defs[$related_field]['type'] == 'enum') {
                            //pull in the translated dom
                            $html .= '<td>'
                                . $app_list_strings[
                                    $seed2->field_defs[$related_field]['options']
                                ][$seed2->$related_field]
                                . '</td>';
                        }else{
                            $html .= '<td>'.$seed2->$related_field.'</td>';
                        }
                    }
                    else{
                        $html .= '<td></td>';
                    }
                }
            }
            $html .= '</tr>';
        }
        $html .= "</table></body></html>";
     }

    $result = base64_encode($html);
    return array('result' => $result, 'error' => $error);
}

/**
 * Enter description here...
 *
 * @param String $session -- Session ID returned by a previous call to login.
 * @param unknown_type $file_name
 * @param unknown_type $fields
 * @return unknown
 */
function get_mailmerge_document2($session, $file_name, $fields)
{
    $fields = object_to_array_deep($fields);
    global $app_list_strings, $app_strings;

    $error = new SoapError();
    if(!validate_authenticated($session))
    {
        $GLOBALS['log']->error('invalid_login');
        $error->set_error('invalid_login');
        return array('result'=>'', 'error'=>$error->get_soap_array());
    }
    if(!preg_match('/^sugardata[\.\d\s]+\.php$/', $file_name)) {
        $GLOBALS['log']->error($app_strings['ERR_NO_SUCH_FILE'] . " ({$file_name})");
        $error->set_error('no_records');
        return array('result'=>'', 'error'=>$error->get_soap_array());
    }
    $html = '';

    $file_name = sugar_cached('MergedDocuments/').pathinfo($file_name, PATHINFO_BASENAME);

    $master_fields = array();
    $related_fields = array();

    if(file_exists($file_name))
    {
        include($file_name);

        $class1 = $merge_array['master_module'];
        $seed1 = BeanFactory::newBean($merge_array['master_module']);

        if(!empty($merge_array['related_module']))
        {
            $class2 = $merge_array['related_module'];
            $seed2 = BeanFactory::newBean($merge_array['related_module']);
        }

        //parse fields
        if($class1 == 'Prospects'){
            $class1 = 'CampaignProspects';
        }
        foreach($fields as $field)
        {
        	$pos = strpos(strtolower($field), strtolower($class1));
            $pos2 = strpos(strtolower($field), strtolower($class2));
            if($pos !== false){
            	$fieldName = str_replace(strtolower($class1).'_', '', strtolower($field));
            	array_push($master_fields, $fieldName);
            }else if($pos2 !== false){
            	$fieldName = str_replace(strtolower($class2).'_', '', strtolower($field));
            	array_push($related_fields, $fieldName);
            }
        }

        $html = '<html ' . get_language_header() . '><body><table border = 1><tr>';

        foreach($master_fields as $master_field){
            $html .= '<td>'.$class1.'_'.$master_field.'</td>';
        }
        foreach($related_fields as $related_field){
            $html .= '<td>'.$class2.'_'.$related_field.'</td>';
        }
        $html .= '</tr>';

        $ids = $merge_array['ids'];
        $resultIds = array();
        $is_prospect_merge = ($seed1->object_name == 'Prospect');
        if($is_prospect_merge){
        	$pSeed = $seed1;
        }
        foreach($ids as $key=>$value){

            if($is_prospect_merge){
                $seed1 = $pSeed->retrieveTarget($key);
            }else{
                $seed1->retrieve($key);
            }
             $resultIds[] = array('name' => $seed1->module_name, 'value' => $key);
            $html .= '<tr>';
            foreach($master_fields as $master_field){
                if(isset($seed1->$master_field)){
                    if ($seed1->field_defs[$master_field]['type'] == 'enum') {
                        //pull in the translated dom
                         $html .= '<td>'
                             . $app_list_strings[$seed1->field_defs[$master_field]['options']][$seed1->$master_field]
                             . '</td>';
                    } elseif ($seed1->field_defs[$master_field]['type'] == 'multienum') {
                        if (isset($app_list_strings[$seed1->field_defs[$master_field]['options']])) {
                            $items = unencodeMultienum($seed1->$master_field);
                            $output = array();
                            foreach($items as $item) {
                                if (!empty($app_list_strings[$seed1->field_defs[$master_field]['options']][$item])) {
                                    $output[] = $app_list_strings[$seed1->field_defs[$master_field]['options']][$item];
                                }
                            } // foreach

                            $encoded_output = encodeMultienumValue($output);
                            $html .= "<td>$encoded_output</td>";

                        }
                    } else {
                       $html .='<td>'.$seed1->$master_field.'</td>';
                    }
                }
                else{
                    $html .= '<td></td>';
                    }
            }
            if(isset($value) && !empty($value)){
                $resultIds[] = array('name' => $seed2->module_name, 'value' => $value);
				$seed2->retrieve($value);
                foreach($related_fields as $related_field){
                    if(isset($seed2->$related_field)){
                        if ($seed2->field_defs[$related_field]['type'] == 'enum') {
                            //pull in the translated dom
                            $html .= '<td>'
                                . $app_list_strings[
                                    $seed2->field_defs[$related_field]['options']
                                ][$seed2->$related_field]
                                . '</td>';
                        }else{
                            $html .= '<td>'.$seed2->$related_field.'</td>';
                        }
                    }
                    else{
                        $html .= '<td></td>';
                    }
                }
            }
            $html .= '</tr>';
        }
        $html .= "</table></body></html>";
     }
    $result = base64_encode($html);

    return array('html' => $result, 'name_value_list' => $resultIds, 'error' => $error);
}

/**
 * This method is used as a result of the .htaccess lock down on the cache directory. It will allow a
 * properly authenticated user to download a document that they have proper rights to download.
 *
 * @param String $session -- Session ID returned by a previous call to login.
 * @param String $id      -- ID of the document revision to obtain
 * @return return_document_revision - this is a complex type as defined in SoapTypes.php
 */
function get_document_revision($session,$id)
{
    global $sugar_config;

    $error = new SoapError();
    if(!validate_authenticated($session)){
        $error->set_error('invalid_login');
        return array('id'=>-1, 'error'=>$error->get_soap_array());
    }


    $dr = BeanFactory::getBean('DocumentRevisions', $id);
    if(!empty($dr->filename)){
        $filename = "upload://{$dr->id}";
        $contents = base64_encode(sugar_file_get_contents($filename));
        return array('document_revision'=>array('id' => $dr->id, 'document_name' => $dr->document_name, 'revision' => $dr->revision, 'filename' => $dr->filename, 'file' => $contents), 'error'=>$error->get_soap_array());
    }else{
        $error->set_error('no_records');
        return array('id'=>-1, 'error'=>$error->get_soap_array());
    }

}

/**
*   Once we have successfuly done a mail merge on a campaign, we need to notify Sugar of the targets
*   and the campaign_id for tracking purposes
*
* @param session        the session id of the authenticated user
* @param targets        a string array of ids identifying the targets used in the merge
* @param campaign_id    the campaign_id used for the merge
*
* @return error_value
*/
function set_campaign_merge($session,$targets, $campaign_id){
    $targets = object_to_array_deep($targets);
    $error = new SoapError();
    if(!validate_authenticated($session)){
        $error->set_error('invalid_login');
        return $error->get_soap_array();
    }
    if (empty($campaign_id) or !is_array($targets) or count($targets) == 0) {
        $GLOBALS['log']->debug('set_campaign_merge: Merge action status will not be updated, because, campaign_id is null or no targets were selected.');
    } else {
        require_once('modules/Campaigns/utils.php');
        campaign_log_mail_merge($campaign_id,$targets);
    }

    return $error->get_soap_array();
}

/**
*   Retrieve number of records in a given module
*
* @param session        the session id of the authenticated user
* @param module_name    module to retrieve number of records from
* @param query          allows webservice user to provide a WHERE clause
* @param deleted        specify whether or not to include deleted records
*
@return get_entries_count_result - this is a complex type as defined in SoapTypes.php
*/
function get_entries_count($session, $module_name, $query, $deleted) {
	global $current_user;

	$error = new SoapError();

	if (!validate_authenticated($session)) {
		$error->set_error('invalid_login');
		return array(
			'result_count' => -1,
			'error' => $error->get_soap_array()
		);
	}

	if(!check_modules_access($current_user, $module_name, 'list')){
		$error->set_error('no_access');
		return array(
			'result_count' => -1,
			'error' => $error->get_soap_array()
		);
	}

	$seed = BeanFactory::newBean($module_name);
	if (empty($seed)) {
		$error->set_error('no_module');
		return array(
				'result_count' => -1,
				'error' => $error->get_soap_array()
		);
	}

	if (!$seed->ACLAccess('ListView')) {
		$error->set_error('no_access');
		return array(
			'result_count' => -1,
			'error' => $error->get_soap_array()
		);
	}

	$sql = 'SELECT COUNT(*) result_count FROM ' . $seed->table_name . ' ';

	$seed->add_team_security_where_clause($sql);

    $customJoin = $seed->getCustomJoin();
    $sql .= $customJoin['join'];

	// build WHERE clauses, if any
	$where_clauses = array();
	if (!empty($query)) {
	    $valid = new SugarSQLValidate();
	    if(!$valid->validateQueryClauses($query)) {
            $GLOBALS['log']->error("Bad query: $query");
	        $error->set_error('no_access');
	        return array(
    			'result_count' => -1,
    			'error' => $error->get_soap_array()
    		);
	    }
		$where_clauses[] = $query;
	}
	if ($deleted == 0) {
		$where_clauses[] = $seed->table_name . '.deleted = 0';
	}

	// if WHERE clauses exist, add them to query
	if (!empty($where_clauses)) {
		$sql .= ' WHERE ' . implode(' AND ', $where_clauses);
	}

	$res = $GLOBALS['db']->query($sql);
	$row = $GLOBALS['db']->fetchByAssoc($res);

	return array(
		'result_count' => $row['result_count'],
		'error' => $error->get_soap_array()
	);
}

/**
 * Update or create a list of SugarBeans, returning details about the records created/updated
 *
 * @param String $session -- Session ID returned by a previous call to login.
 * @param String $module_name -- The name of the module to return records from.  This name should be the name the module was developed under (changing a tab name is studio does not affect the name that should be passed into this method)..
 * @param Array $name_value_lists -- Array of Bean specific Arrays where the keys of the array are the SugarBean attributes, the values of the array are the values the attributes should have.
 * @param Array  $select_fields -- A list of the fields to be included in the results. This optional parameter allows for only needed fields to be retrieved.
 * @return Array    'name_value_lists' --  Array of Bean specific Arrays where the keys of the array are the SugarBean attributes, the values of the array are the values the attributes should have.
 *                  'error' -- The SOAP error if any.
 */
function set_entries_details($session, $module_name, $name_value_lists, $select_fields) {
    $name_value_lists = object_to_array_deep($name_value_lists);
    $select_fields = object_to_array_deep($select_fields);

	$error = new SoapError();

	if(!validate_authenticated($session)){
		$error->set_error('invalid_login');

		return array(
			'ids' => array(),
			'error' => $error->get_soap_array()
		);
	}

	return handle_set_entries($module_name, $name_value_lists, $select_fields);
}

// INTERNAL FUNCTION NOT EXPOSED THROUGH API
function handle_set_entries($module_name, $name_value_lists, $select_fields = FALSE) {
	global $beanList, $app_list_strings, $current_user;

	$error = new SoapError();
	$ret_values = array();

	if(empty($beanList[$module_name])){
		$error->set_error('no_module');
		return array('ids'=>array(), 'error'=>$error->get_soap_array());
	}

    if(!check_modules_access($current_user, $module_name, 'write')){
		$error->set_error('no_access');
		return array('ids'=>-1, 'error'=>$error->get_soap_array());
	}

	$ids = array();
	$count = 1;
	$total = sizeof($name_value_lists);

	foreach($name_value_lists as $name_value_list){
		$seed = BeanFactory::newBean($module_name);

		$seed->update_vcal = false;

        //See if we can retrieve the seed by a given id value
		foreach($name_value_list as $value)
        {
			if($value['name'] == 'id')
            {
				$seed->retrieve($value['value']);
				break;
			}
		}


        $dataValues = array();

		foreach($name_value_list as $value)
        {
			$val = $value['value'];

            if ($seed->field_defs[$value['name']]['type'] == 'enum'
                || $seed->field_defs[$value['name']]['type'] == 'radioenum') {
                $vardef = $seed->field_defs[$value['name']];
				if(isset($app_list_strings[$vardef['options']]) && !isset($app_list_strings[$vardef['options']][$val]) )
                {
		            if ( in_array($val,$app_list_strings[$vardef['options']]) )
                    {
		                $val = array_search($val,$app_list_strings[$vardef['options']]);
		            }
		        }
            } elseif ($seed->field_defs[$value['name']]['type'] == 'multienum') {
                $vardef = $seed->field_defs[$value['name']];

                if(isset($app_list_strings[$vardef['options']]) && !isset($app_list_strings[$vardef['options']][$value]) )
                {
					$items = explode(",", $val);
					$parsedItems = array();
					foreach ($items as $item)
                    {
						if ( in_array($item, $app_list_strings[$vardef['options']]) )
                        {
							$keyVal = array_search($item,$app_list_strings[$vardef['options']]);
							array_push($parsedItems, $keyVal);
						}
					}

		           	if (!empty($parsedItems))
                    {
						$val = encodeMultienumValue($parsedItems);
		           	}
		        }
			}

            //Apply the non-empty values now since this will be used for duplicate checks
            //allow string or int of 0 to be updated if set.
            if(!empty($val) || ($val==='0' || $val===0))
            {
                $seed->{$value['name']} = $val;
            }
            //Store all the values in dataValues Array to apply later
            $dataValues[$value['name']] = $val;
		}

		if($count == $total)
        {
			$seed->update_vcal = false;
		}
		$count++;

		//Add the account to a contact
		if($module_name == 'Contacts'){
			$GLOBALS['log']->debug('Creating Contact Account');
			add_create_account($seed);
			$duplicate_id = check_for_duplicate_contacts($seed);
            if ($duplicate_id === null) {
				if($seed->ACLAccess('Save') && ($seed->deleted != 1 || $seed->ACLAccess('Delete')))
                {
                    //Now apply the values, since this is not a duplicate we can just pass false for the $firstSync argument
                    apply_values($seed, $dataValues, false);
					$seed->save();
					if($seed->deleted == 1){
						$seed->mark_deleted($seed->id);
					}
					$ids[] = $seed->id;
				}
			}else{
				//since we found a duplicate we should set the sync flag
				if( $seed->ACLAccess('Save'))
                {
                    //Determine if this is a first time sync.  We find out based on whether or not a contacts_users relationship exists
                    $seed->id = $duplicate_id;
                    $seed->load_relationship("user_sync");
                    $beans = $seed->user_sync->getBeans();
                    $first_sync = empty($beans);

                    //Now apply the values and indicate whether or not this is a first time sync
                    apply_values($seed, $dataValues, $first_sync);
					$seed->contacts_users_id = $current_user->id;
					$seed->save();
					$ids[] = $duplicate_id;//we have a conflict
				}
			}

        } else if($module_name == 'Meetings' || $module_name == 'Calls'){
			//we are going to check if we have a meeting in the system
			//with the same outlook_id. If we do find one then we will grab that
			//id and save it
			if( $seed->ACLAccess('Save') && ($seed->deleted != 1 || $seed->ACLAccess('Delete'))){
				if(empty($seed->id) && !isset($seed->id)){
					if(!empty($seed->outlook_id) && isset($seed->outlook_id)){
						//at this point we have an object that does not have
						//the id set, but does have the outlook_id set
						//so we need to query the db to find if we already
						//have an object with this outlook_id, if we do
						//then we can set the id, otherwise this is a new object
						$order_by = "";
						$query = $seed->table_name.".outlook_id = '".$seed->outlook_id."'";
						$response = $seed->get_list($order_by, $query, 0,-1,-1,0);
						$list = $response['list'];
						if(count($list) > 0){
							foreach($list as $value)
							{
								$seed->id = $value->id;
								break;
							}
						}//fi
					}//fi
				}//fi
				if (empty($seed->reminder_time)) {
                    $seed->reminder_time = -1;
                }
				if($seed->reminder_time == -1){
					$defaultRemindrTime = $current_user->getPreference('reminder_time');
					if ($defaultRemindrTime != -1){
                        $seed->reminder_checked = '1';
                        $seed->reminder_time = $defaultRemindrTime;
					}
				}
				$seed->save();
				if ($seed->deleted == 1) {
					$seed->mark_deleted($seed->id);
				}
				$ids[] = $seed->id;
			}//fi
		}
		else if ($module_name == 'Opportunities') {
            static $config;
            if (!is_array($config)) {
                /* @var $admin Administration */
                $admin = BeanFactory::newBean('Administration');
                $config = $admin->getConfigForModule('Forecasts');
            }

            if ($config['is_setup'] == 1 && $seed->deleted == 1) {
                $status_field = 'sales_stage';
                $status_field = 'sales_status';

                $status = array_merge($config['sales_stage_won'], $config['sales_stage_lost']);

                if ($seed->closed_revenue_line_items > 0 || in_array($seed->$status_field, $status)) {
                    $error->set_error('no_access');
                    return array('id'=>-1, 'error'=>$error->get_soap_array());
                }
            }

            if( $seed->ACLAccess('Save') && ($seed->deleted != 1 || $seed->ACLAccess('Delete'))){
				$seed->save();
				$ids[] = $seed->id;
			}
		}
        else {
			if( $seed->ACLAccess('Save') && ($seed->deleted != 1 || $seed->ACLAccess('Delete'))){
				$seed->save();
				$ids[] = $seed->id;
			}
		}

		// if somebody is calling set_entries_detail() and wants fields returned...
		if ($select_fields !== FALSE) {
			$ret_values[$count] = array();

			foreach ($select_fields as $select_field) {
				if (isset($seed->$select_field)) {
					$ret_values[$count][] = get_name_value($select_field, $seed->$select_field);
				}
			}
		}
	}

	// handle returns for set_entries_detail() and set_entries()
	if ($select_fields !== FALSE) {
		return array(
			'name_value_lists' => $ret_values,
			'error' => $error->get_soap_array()
		);
	}
	else {
		return array(
			'ids' => $ids,
			'error' => $error->get_soap_array()
		);
	}
}

