<?php
if(!defined('sugarEntry'))define('sugarEntry', true);
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

require_once('service/v3/SugarWebServiceImplv3.php');
require_once('SugarWebServiceUtilv3_1.php');

use  Sugarcrm\Sugarcrm\Util\Arrays\ArrayFunctions\ArrayFunctions;

/**
 * This class is an implemenatation class for all the rest services
 */
class SugarWebServiceImplv3_1 extends SugarWebServiceImplv3 {

    public function __construct()
    {
        self::$helperObject = new SugarWebServiceUtilv3_1();
    }

   /**
    * Retrieve a single SugarBean based on ID.
    *
    * @param String $session -- Session ID returned by a previous call to login.
    * @param String $module_name -- The name of the module to return records from.  This name should be the name the module was developed under (changing a tab name is studio does not affect the name that should be passed into this method)..
    * @param String $id -- The SugarBean's ID value.
    * @param Array  $select_fields -- A list of the fields to be included in the results. This optional parameter allows for only needed fields to be retrieved.
    * @param Array $link_name_to_fields_array -- A list of link_names and for each link_name, what fields value to be returned. For ex.'link_name_to_fields_array' => array(array('name' =>  'email_addresses', 'value' => array('id', 'email_address', 'opt_out', 'primary_address')))
    * @param bool $trackView -- Should we track the record accessed.
    * @return Array
    *        'entry_list' -- Array - The records name value pair for the simple data types excluding link field data.
    *	     'relationship_list' -- Array - The records link field data. The example is if asked about accounts email address then return data would look like Array ( [0] => Array ( [name] => email_addresses [records] => Array ( [0] => Array ( [0] => Array ( [name] => id [value] => 3fb16797-8d90-0a94-ac12-490b63a6be67 ) [1] => Array ( [name] => email_address [value] => hr.kid.qa@example.com ) [2] => Array ( [name] => opt_out [value] => 0 ) [3] => Array ( [name] => primary_address [value] => 1 ) ) [1] => Array ( [0] => Array ( [name] => id [value] => 403f8da1-214b-6a88-9cef-490b63d43566 ) [1] => Array ( [name] => email_address [value] => kid.hr@example.name ) [2] => Array ( [name] => opt_out [value] => 0 ) [3] => Array ( [name] => primary_address [value] => 0 ) ) ) ) )
    * @exception 'SoapFault' -- The SOAP error, if any
    */
    function get_entry($session, $module_name, $id,$select_fields, $link_name_to_fields_array,$track_view = FALSE)
    {
        $this->getLogger()->info('Begin: SugarWebServiceImpl->get_entry');
        return self::get_entries($session, $module_name, array($id), $select_fields, $link_name_to_fields_array, $track_view);
        $this->getLogger()->info('end: SugarWebServiceImpl->get_entry');
    }

    /**
     * Retrieve the md5 hash of the vardef entries for a particular module.
     *
     * @param String $session -- Session ID returned by a previous call to login.
     * @param String $module_name -- The name of the module to return records from.  This name should be the name the module was developed under (changing a tab name is studio does not affect the name that should be passed into this method)..
     * @return String The md5 hash of the vardef definition.
     * @exception 'SoapFault' -- The SOAP error, if any
     */
    function get_module_fields_md5($session, $module_name){
        $module_name = object_to_array_deep($module_name);

        $this->getLogger()->info('Begin: SugarWebServiceImpl->get_module_fields_md5(v3_1) for module: '. print_r($module_name, true));

        $results = array();
        if( is_array($module_name) )
        {
            foreach ($module_name as $module)
                $results[$module] = md5(serialize(self::get_module_fields($session, $module)));
        }
        else
            $results[$module_name] = md5(serialize(self::get_module_fields($session, $module_name)));

        $this->getLogger()->info('End: SugarWebServiceImpl->get_module_fields_md5 (v3_1) for module: ' . print_r($module_name, true));

        return $results;
    }

    /**
     * Retrieve the md5 hash of a layout metadata for a given module given a specific type and view.
     *
     * @param String $session -- Session ID returned by a previous call to login.
     * @param array $module_name(s) -- The name of the module to return records from.  This name should be the name the module was developed under (changing a tab name is studio does not affect the name that should be passed into this method)..
     * @return array $type(s) The type of view requested.  Current supported types are 'default' (for application) and 'wireless'
     * @return array $view(s) The view requested.  Current supported types are edit, detail, and list.
     * @exception 'SoapFault' -- The SOAP error, if any
     */
    function get_module_layout_md5($session, $module_name, $type, $view, $acl_check = TRUE){
        $this->getLogger()->info('Begin: SugarWebServiceImpl->get_module_layout_md5');
        $results = $this->get_module_layout($session, $module_name, $type, $view, true, $acl_check);
            return array('md5'=> $results);
        $this->getLogger()->info('End: SugarWebServiceImpl->get_module_layout_md5');
    }


    /**
    * Retrieve a list of SugarBean's based on provided IDs. This API will not wotk with report module
    *
    * @param String $session -- Session ID returned by a previous call to login.
    * @param String $module_name -- The name of the module to return records from.  This name should be the name the module was developed under (changing a tab name is studio does not affect the name that should be passed into this method)..
    * @param Array $ids -- An array of SugarBean IDs.
    * @param Array $select_fields -- A list of the fields to be included in the results. This optional parameter allows for only needed fields to be retrieved.
    * @param Array $link_name_to_fields_array -- A list of link_names and for each link_name, what fields value to be returned. For ex.'link_name_to_fields_array' => array(array('name' =>  'email_addresses', 'value' => array('id', 'email_address', 'opt_out', 'primary_address')))
    * @param bool $trackView -- Should we track the record accessed.
    * @return Array
    *        'entry_list' -- Array - The records name value pair for the simple data types excluding link field data.
    *	     'relationship_list' -- Array - The records link field data. The example is if asked about accounts email address then return data would look like Array ( [0] => Array ( [name] => email_addresses [records] => Array ( [0] => Array ( [0] => Array ( [name] => id [value] => 3fb16797-8d90-0a94-ac12-490b63a6be67 ) [1] => Array ( [name] => email_address [value] => hr.kid.qa@example.com ) [2] => Array ( [name] => opt_out [value] => 0 ) [3] => Array ( [name] => primary_address [value] => 1 ) ) [1] => Array ( [0] => Array ( [name] => id [value] => 403f8da1-214b-6a88-9cef-490b63d43566 ) [1] => Array ( [name] => email_address [value] => kid.hr@example.name ) [2] => Array ( [name] => opt_out [value] => 0 ) [3] => Array ( [name] => primary_address [value] => 0 ) ) ) ) )
    * @exception 'SoapFault' -- The SOAP error, if any
    */
    function get_entries($session, $module_name, $ids, $select_fields, $link_name_to_fields_array, $track_view = FALSE)
    {
        $ids = object_to_array_deep($ids);
        $select_fields = object_to_array_deep($select_fields);
        $link_name_to_fields_array = object_to_array_deep($link_name_to_fields_array);

        $this->getLogger()->info('Begin: SugarWebServiceImpl->get_entries');
        global  $beanList, $beanFiles;
        $error = new SoapError();

        $linkoutput_list = array();
        $output_list = array();
        $using_cp = false;
        if($module_name == 'CampaignProspects')
        {
            $module_name = 'Prospects';
            $using_cp = true;
        }
        if (!self::$helperObject->checkSessionAndModuleAccess($session, 'invalid_session', $module_name, 'read', 'no_access', $error))
        {
            $this->getLogger()->info('No Access: SugarWebServiceImpl->get_entries');
            return;
        } // if

        foreach($ids as $id)
        {
            $seed = BeanFactory::newBean($module_name);
            if($using_cp)
                $seed = $seed->retrieveTarget($id);
            else
            {
                if ($seed->retrieve($id) == null)
                    $seed->deleted = 1;
            }

            if ($seed->deleted == 1)
            {
                $list = array();
                $list[] = array('name'=>'warning', 'value'=>'Access to this object is denied since it has been deleted or does not exist');
                $list[] = array('name'=>'deleted', 'value'=>'1');
                $output_list[] = Array('id'=>$id,'module_name'=> $module_name,'name_value_list'=>$list,);
                continue;
            }
            if (!self::$helperObject->checkACLAccess($seed, 'DetailView', $error, 'no_access'))
            {
                return;
            }
            $output_list[] = self::$helperObject->get_return_value_for_fields($seed, $module_name, $select_fields);
            if (!empty($link_name_to_fields_array))
            {
                $linkoutput_list[] = self::$helperObject->get_return_value_for_link_fields($seed, $module_name, $link_name_to_fields_array);
            }

            $this->getLogger()->info('Should we track view: ' . $track_view);
            if($track_view)
            {
                self::$helperObject->trackView($seed, 'detailview');
            }
        }

        $this->getLogger()->info('End: SugarWebServiceImpl->get_entries');
        return array('entry_list'=>$output_list, 'relationship_list' => $linkoutput_list);
    }

    /**
     * Update or create a single SugarBean.
     *
     * @param String $session -- Session ID returned by a previous call to login.
     * @param String $module_name -- The name of the module to return records from.  This name should be the name the module was developed under (changing a tab name is studio does not affect the name that should be passed into this method)..
     * @param Array $name_value_list -- The keys of the array are the SugarBean attributes, the values of the array are the values the attributes should have.
     * @param Bool $track_view -- Should the tracker be notified that the action was performed on the bean.
     * @return Array    'id' -- the ID of the bean that was written to (-1 on error)
     * @exception 'SoapFault' -- The SOAP error, if any
     */
    function set_entry($session,$module_name, $name_value_list, $track_view = FALSE){
        global $current_user;

        $this->getLogger()->info('Begin: SugarWebServiceImpl->set_entry');
        if ($this->getLogger()->wouldLog('debug')) {
            $this->getLogger()->debug('SoapHelperWebServices->set_entry - input data is ' . var_export($name_value_list, true));
        } // if
        $name_value_list = object_to_array_deep($name_value_list);
        $error = new SoapError();
        if (!self::$helperObject->checkSessionAndModuleAccess($session, 'invalid_session', $module_name, 'write', 'no_access', $error)) {
            $this->getLogger()->info('End: SugarWebServiceImpl->set_entry');
            return;
        } // if
        $seed = BeanFactory::newBean($module_name);
        foreach($name_value_list as $name=>$value){
            if(is_array($value) &&  $value['name'] == 'id'){
                $seed->retrieve($value['value']);
                break;
            }else if($name === 'id' ){

                $seed->retrieve($value);
                break;
            }
        }

        if (self::$helperObject->isIDMMode()
                && self::$helperObject->isIDMModeModule($module_name)
                && !$seed->isUpdate()) {
            $error->set_error('idm_mode_cannot_create_user');
            self::$helperObject->setFaultObject($error);
            return;
        }

        $return_fields = array();
        foreach($name_value_list as $name=>$value){
            if($module_name == 'Users' && !empty($seed->id) && ($seed->id != $current_user->id) && $name == 'user_hash'){
                continue;
            }
            if (!empty($seed->field_defs[$name]['sensitive'])) {
                    continue;
            }

            if (is_array($value)) {
                $name = $value['name'];
                $value = $value['value'];
            }

            if (self::$helperObject->isIDMMode()
                    && self::$helperObject->isIDMModeModule($module_name)
                    && self::$helperObject->isIDMModeField($name)) {
                continue;
            }

            if (!self::$helperObject->checkFieldValue($seed, $name, $value)) {
                $error->set_error('invalid_data_format');
                self::$helperObject->setFaultObject($error);
                $this->getLogger()->info('End: SugarWebServiceImpl->set_entry');
                return;
            }

            $seed->$name = $value;
            $return_fields[] = $name;

        }
        if ($module_name == 'Contacts') {
            global $current_language;
            if (!in_array("preferred_language", $name_value_list)) {
                $seed->preferred_language = $current_language;
            } else {
                if (empty($name_value_list["preferred_language"])) {
                    $seed->preferred_language = $current_language;
                }
            }
        }
        if (!self::$helperObject->checkACLAccess($seed, 'Save', $error, 'no_access') || ($seed->deleted == 1  && !self::$helperObject->checkACLAccess($seed, 'Delete', $error, 'no_access'))) {
            $this->getLogger()->info('End: SugarWebServiceImpl->set_entry');
            return;
        } // if

        try{
            $seed->save(self::$helperObject->checkSaveOnNotify());
        } catch (SugarApiExceptionNotAuthorized $ex) {
            $this->getLogger()->info('End: SugarWebServiceImplv3_1->set_entry');
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
            self::$helperObject->setFaultObject($error);
            return;
        }


        $return_entry_list = self::$helperObject->get_name_value_list_for_fields($seed, $return_fields );

        if($seed->deleted == 1){
            $seed->mark_deleted($seed->id);
        }

        if($track_view){
            self::$helperObject->trackView($seed, 'editview');
        }

        $this->getLogger()->info('End: SugarWebServiceImpl->set_entry');
        return array('id'=>$seed->id, 'entry_list' => $return_entry_list);
    } // fn


    /**
     * Log the user into the application
     *
     * @param UserAuth array $user_auth -- Set user_name and password (password needs to be
     *      in the right encoding for the type of authentication the user is setup for.  For Base
     *      sugar validation, password is the MD5 sum of the plain text password.
     * @param String $application -- The name of the application you are logging in from.  (Currently unused).
     * @param array $name_value_list -- Array of name value pair of extra parameters. As of today only 'language' and 'notifyonsave' is supported
     * @return Array - id - String id is the session_id of the session that was created.
     * 				 - module_name - String - module name of user
     * 				 - name_value_list - Array - The name value pair of user_id, user_name, user_language, user_currency_id, user_currency_name,
     *                                         - user_default_team_id, user_is_admin, user_default_dateformat, user_default_timeformat
     * @exception 'SoapFault' -- The SOAP error, if any
     */
    public function login($user_auth, $application, $name_value_list = array()){
        $user_auth = object_to_array_deep($user_auth);
        $name_value_list = object_to_array_deep($name_value_list);
        $this->getLogger()->info('Begin: SugarWebServiceImpl->login');
        global $sugar_config;
        $error = new SoapError();
        $user = BeanFactory::newBean('Users');
        $success = false;
        $authController = AuthenticationController::getInstance();

        if (!empty($user_auth['encryption']) && $user_auth['encryption'] === 'PLAIN' &&
            !$authController->authController instanceof IdMLDAPAuthenticate &&
            !$authController->authController instanceof OAuth2Authenticate) {
            $user_auth['password'] = md5($user_auth['password']);
        }
        $isLoginSuccess = (bool) $authController->login(
            $user_auth['user_name'],
            $user_auth['password'],
            ['passwordEncrypted' => true]
        );
        $usr_id=$user->retrieve_user_id($user_auth['user_name']);
        if($usr_id)
            $user->retrieve($usr_id);

        if ($isLoginSuccess)
        {
            if ($_SESSION['hasExpiredPassword'] =='1')
            {
                $error->set_error('password_expired');
                $this->getLogger()->fatal('password expired for user ' . $user_auth['user_name']);
                LogicHook::initialize();
                $GLOBALS['logic_hook']->call_custom_logic('Users', 'login_failed');
                self::$helperObject->setFaultObject($error);
                return;
            }
            if(!empty($user) && !empty($user->id) && !$user->is_group)
            {
                $success = true;
                global $current_user;
                $current_user = $user;
            }
        }
        else if($usr_id && isset($user->user_name) && ($user->getPreference('lockout') == '1'))
        {
            $error->set_error('lockout_reached');
            $this->getLogger()->fatal('Lockout reached for user ' . $user_auth['user_name']);
            LogicHook::initialize();
            $GLOBALS['logic_hook']->call_custom_logic('Users', 'login_failed');
            self::$helperObject->setFaultObject($error);
            return;
        } elseif ($authController->authController instanceof IdMLDAPAuthenticate
            && (empty($user_auth['encryption']) || $user_auth['encryption'] !== 'PLAIN')
        ) {
            $error->set_error('ldap_error');
            LogicHook::initialize();
            $GLOBALS['logic_hook']->call_custom_logic('Users', 'login_failed');
            self::$helperObject->setFaultObject($error);
            return;
        } elseif (!$authController->authController instanceof OAuth2Authenticate) {
            $password = self::$helperObject->decrypt_string($user_auth['password']);
            if($authController->login($user_auth['user_name'], $password) && isset($_SESSION['authenticated_user_id']))
                $success = true;
        }

        if($success)
        {
            session_start();
            global $current_user;
            //$current_user = $user;
            self::$helperObject->login_success($name_value_list);
            $current_user->loadPreferences();
            $_SESSION['is_valid_session']= true;
            $_SESSION['ip_address'] = query_client_ip();
            $_SESSION['user_id'] = $current_user->id;
            $_SESSION['type'] = 'user';
            $_SESSION['avail_modules']= self::$helperObject->get_user_module_list($current_user);
            $_SESSION['authenticated_user_id'] = $current_user->id;
            $_SESSION['unique_key'] = $sugar_config['unique_key'];
            $current_user->call_custom_logic('after_login');
            $this->getLogger()->info('End: SugarWebServiceImpl->login - succesful login');
            $nameValueArray = array();
            global $current_language;
            $nameValueArray['user_id'] = self::$helperObject->get_name_value('user_id', $current_user->id);
            $nameValueArray['user_name'] = self::$helperObject->get_name_value('user_name', $current_user->user_name);
            $nameValueArray['user_language'] = self::$helperObject->get_name_value('user_language', $current_language);
            $cur_id = $current_user->getPreference('currency');
            $nameValueArray['user_currency_id'] = self::$helperObject->get_name_value('user_currency_id', $cur_id);
            $nameValueArray['user_is_admin'] = self::$helperObject->get_name_value('user_is_admin', is_admin($current_user));
            $nameValueArray['user_default_team_id'] = self::$helperObject->get_name_value('user_default_team_id', $current_user->default_team );
            $nameValueArray['user_default_dateformat'] = self::$helperObject->get_name_value('user_default_dateformat', $current_user->getPreference('datef') );
            $nameValueArray['user_default_timeformat'] = self::$helperObject->get_name_value('user_default_timeformat', $current_user->getPreference('timef') );

            $num_grp_sep = $current_user->getPreference('num_grp_sep');
            $dec_sep = $current_user->getPreference('dec_sep');
            $nameValueArray['user_number_seperator'] = self::$helperObject->get_name_value('user_number_seperator', empty($num_grp_sep) ? $sugar_config['default_number_grouping_seperator'] : $num_grp_sep);
            $nameValueArray['user_decimal_seperator'] = self::$helperObject->get_name_value('user_decimal_seperator', empty($dec_sep) ? $sugar_config['default_decimal_seperator'] : $dec_sep);

            $nameValueArray['mobile_max_list_entries'] = self::$helperObject->get_name_value('mobile_max_list_entries', $sugar_config['wl_list_max_entries_per_page'] );
            $nameValueArray['mobile_max_subpanel_entries'] = self::$helperObject->get_name_value('mobile_max_subpanel_entries', $sugar_config['wl_list_max_entries_per_subpanel'] );

            if($application == 'mobile')
            {
                $availModules = ArrayFunctions::array_access_keys($_SESSION['avail_modules']); //ACL check already performed.
                $modules = self::$helperObject->get_visible_mobile_modules($availModules);
                $nameValueArray['available_modules'] = $modules;
                //Get the vardefs md5
                foreach($modules as $mod_def)
                    $availModuleNames[] = $mod_def['module_key'];

                $nameValueArray['vardefs_md5'] = self::get_module_fields_md5(session_id(), $availModuleNames);
            }

            $currencyObject = BeanFactory::getBean('Currencies', $cur_id);
            $nameValueArray['user_currency_name'] = self::$helperObject->get_name_value('user_currency_name', $currencyObject->name);
            $_SESSION['user_language'] = $current_language;
            return array('id'=>session_id(), 'module_name'=>'Users', 'name_value_list'=>$nameValueArray);
        }
        LogicHook::initialize();
        $GLOBALS['logic_hook']->call_custom_logic('Users', 'login_failed');
        $error->set_error('invalid_login');
        self::$helperObject->setFaultObject($error);
        $this->getLogger()->info('End: SugarWebServiceImpl->login - failed login');
    }

    /**
     * Retrieve the list of available modules on the system available to the currently logged in user.
     *
     * @param String $session -- Session ID returned by a previous call to login.
     * @param String $filter --  Valid values are: all     - Return all modules,
     *                                             default - Return all visible modules for the application
     *                                             mobile  - Return all visible modules for the mobile view
     * @return Array    'modules' -- Array - An array of module names
     * @exception 'SoapFault' -- The SOAP error, if any
     */
    function get_available_modules($session,$filter='all'){
        $this->getLogger()->info('Begin: SugarWebServiceImpl->get_available_modules');

    	$error = new SoapError();
    	if (!self::$helperObject->checkSessionAndModuleAccess($session, 'invalid_session', '', '', '', $error)) {
    		$error->set_error('invalid_login');
            $this->getLogger()->info('End: SugarWebServiceImpl->get_available_modules');
    		return;
    	} // if

    	$availModules = ArrayFunctions::array_access_keys($_SESSION['avail_modules']); //ACL check already performed.
    	switch ($filter){
    	    case 'default':
    	        $modules = self::$helperObject->get_visible_modules($availModules);
    	       break;
    	    case 'mobile':
    	        $modules = self::$helperObject->get_visible_mobile_modules($availModules);
    	        break;
    	    case 'all':
    	    default:
    	        $modules = self::$helperObject->getModulesFromList(array_flip($availModules), $availModules);
    	}

        $this->getLogger()->info('End: SugarWebServiceImpl->get_available_modules');
    	return array('modules'=> $modules);
    } // fn


    /**
     * Enter description here...
     *
     * @param string $session   - Session ID returned by a previous call to login.
     * @param array $modules Array of modules to return
     * @param bool $MD5 Should the results be md5d
     */
    function get_language_definition($session, $modules, $MD5 = FALSE)
    {
        $this->getLogger()->info('Begin: SugarWebServiceImpl->get_language_file');
        global  $beanList, $beanFiles;
        global $sugar_config,$current_language;

        $error = new SoapError();
        $output_list = array();
        if (!self::$helperObject->checkSessionAndModuleAccess($session, 'invalid_session', '', '', '', $error))
        {
            $error->set_error('invalid_login');
            $this->getLogger()->info('End: SugarWebServiceImpl->get_report_pdf');
            return;
        }

        if( is_string($modules) )
            $modules = array($modules);

        $results = array();
        foreach ($modules as $mod)
        {
            if( strtolower($mod) == 'app_strings' )
            {
                $values = return_application_language($current_language);
                $key = 'app_strings';
            }
            else if ( strtolower($mod) == 'app_list_strings' )
            {
            	$values = return_app_list_strings_language($current_language);
            	$key = 'app_list_strings';
            }
            else
            {
                $values = return_module_language($current_language, $mod);
                $key = $mod;
            }

            if( $MD5 )
                $values = md5(serialize($values));

            $results[$key] = $values;
        }

        return $results;
    }

    /**
     * Get the base64 contents of a quote pdf.
     *
     * @param string $session   - Session ID returned by a previous call to login.
     * @param string $quote_id
     * @param string $pdf_format Either Standard or Invoice
     */
    function get_quotes_pdf($session, $quote_id, $pdf_format = 'Standard')
    {
        $this->getLogger()->info('Begin: SugarWebServiceImpl->get_quotes_pdf');
        global  $beanList, $beanFiles;
        global $sugar_config,$current_language;

        $error = new SoapError();
        $output_list = array();
        if (!self::$helperObject->checkSessionAndModuleAccess($session, 'invalid_session', '', '', '', $error))
        {
            $error->set_error('invalid_login');
            $this->getLogger()->info('End: SugarWebServiceImpl->get_report_pdf');
            return;
        }

        $bean = BeanFactory::getBean('Quotes', $quote_id);
        $sugarpdfBean = SugarpdfFactory::loadSugarpdf($pdf_format, 'Quotes', $bean, array() );
        $sugarpdfBean->process();

        $pdfContents = $sugarpdfBean->Output('','S');
        $pdfContents = base64_encode($pdfContents);

        return array('file_contents' => $pdfContents);
    }


    /**
     * For a particular report, generate the associated pdf report.  All caching should be done
     * on the client side.
     *
     * @param string $session   - Session ID returned by a previous call to login.
     * @param string $report_id - The id of the report bean.
     *
     * @return array - file_contents key with pdf base64 encoded.
     *
     */
    function get_report_pdf($session, $report_id)
    {
        $this->getLogger()->info('Begin: SugarWebServiceImpl->get_report_pdf');
    	global  $beanList, $beanFiles;
    	global $sugar_config,$current_language;

    	$error = new SoapError();
    	$output_list = array();
    	if (!self::$helperObject->checkSessionAndModuleAccess($session, 'invalid_session', '', '', '', $error))
    	{
    		$error->set_error('invalid_login');
            $this->getLogger()->info('End: SugarWebServiceImpl->get_report_pdf');
    		return;
    	}

    	require_once('modules/Reports/templates/templates_pdf.php');

    	$saved_report = BeanFactory::getBean('Reports', $report_id);

    	$contents = '';
    	if($saved_report->id != null)
    	{
    	    $reporter = new Report(html_entity_decode($saved_report->content));
    	    $reporter->layout_manager->setAttribute("no_sort",1);
    	    //Translate pdf to correct language
    	    $module_for_lang = $reporter->module;
    	    $mod_strings = return_module_language($current_language, 'Reports');

    	    //Generate actual pdf
    	    $report_filename = template_handle_pdf($reporter, false);

    	    //Get file pdf file contents
    	    $contents = self::$helperObject->get_file_contents_base64($report_filename, TRUE);
    	}

    	return array('file_contents' => $contents);

        $this->getLogger()->info('End: SugarWebServiceImpl->get_report_pdf');
    }

    /**
     * Retrieve the layout metadata for a given module given a specific type and view.
     *
     * @param String $session -- Session ID returned by a previous call to login.
     * @param array $module_name(s) -- The name of the module(s) to return records from.  This name should be the name the module was developed under (changing a tab name is studio does not affect the name that should be passed into this method)..
     * @param array $a_type
     * @param array $a_view
     * @param bool $md5
     * @param bool $acl_check
     * @return array $type The type(s) of views requested.  Current supported types are 'default' (for application) and 'wireless'
     * @return array $view The view(s) requested.  Current supported types are edit, detail, list, and subpanel.
     * @exception 'SoapFault' -- The SOAP error, if any
     */
    public function get_module_layout(
        $session,
        $a_module_names,
        $a_type,
        $a_view,
        $md5 = false,
        $acl_check = true
    ) {
        $this->getLogger()->fatal('Begin: SugarWebServiceImpl->get_module_layout');

    	$error = new SoapError();
        $results = array();
        foreach ($a_module_names as $module_name)
        {
            if (!self::$helperObject->checkSessionAndModuleAccess($session, 'invalid_session', $module_name, 'read', 'no_access', $error))
            {
                $this->getLogger()->info('End: SugarWebServiceImpl->get_module_layout');
                continue;
            }

            $seed = BeanFactory::newBean($module_name);

            foreach ($a_view as $view)
            {
                $aclViewCheck = (strtolower($view) == 'subpanel') ? 'DetailView' : ucfirst(strtolower($view)) . 'View';
                if(!$acl_check || $seed->ACLAccess($aclViewCheck, true) )
                {
                    foreach ($a_type as $type)
                    {
                        $a_vardefs = self::$helperObject->get_module_view_defs($module_name, $type, $view);
                        if($md5)
                            $results[$module_name][$type][$view] = md5(serialize($a_vardefs));
                        else
                            $results[$module_name][$type][$view] = $a_vardefs;
                    }
                }
            }
        }

        $this->getLogger()->info('End: SugarWebServiceImpl->get_module_layout');

        return $results;
    }

    /**
     * Retrieve a list of beans.  This is the primary method for getting list of SugarBeans from Sugar using the SOAP API.
     *
     * @param String $session -- Session ID returned by a previous call to login.
     * @param String $module_name -- The name of the module to return records from.  This name should be the name the module was developed under (changing a tab name is studio does not affect the name that should be passed into this method)..
     * @param String $query -- SQL where clause without the word 'where'
     * @param String $order_by -- SQL order by clause without the phrase 'order by'
     * @param integer $offset -- The record offset to start from.
     * @param Array  $select_fields -- A list of the fields to be included in the results. This optional parameter allows for only needed fields to be retrieved.
     * @param Array $link_name_to_fields_array -- A list of link_names and for each link_name, what fields value to be returned. For ex.'link_name_to_fields_array' => array(array('name' =>  'email_addresses', 'value' => array('id', 'email_address', 'opt_out', 'primary_address')))
     * @param integer $max_results -- The maximum number of records to return.  The default is the sugar configuration
     *                                  value for 'list_max_entries_per_page'
     * @param integer $deleted -- false if deleted records should not be include, true if deleted records should be included.
     * @param bool $favorites
     * @return Array 'result_count' -- integer - The number of records returned
     *               'next_offset' -- integer - The start of the next page (This will always be the previous offset plus the number of rows returned.  It does not indicate if there is additional data unless you calculate that the next_offset happens to be closer than it should be.
     *               'entry_list' -- Array - The records that were retrieved
     *	     		 'relationship_list' -- Array - The records link field data. The example is if asked about accounts email address then return data would look like Array ( [0] => Array ( [name] => email_addresses [records] => Array ( [0] => Array ( [0] => Array ( [name] => id [value] => 3fb16797-8d90-0a94-ac12-490b63a6be67 ) [1] => Array ( [name] => email_address [value] => hr.kid.qa@example.com ) [2] => Array ( [name] => opt_out [value] => 0 ) [3] => Array ( [name] => primary_address [value] => 1 ) ) [1] => Array ( [0] => Array ( [name] => id [value] => 403f8da1-214b-6a88-9cef-490b63d43566 ) [1] => Array ( [name] => email_address [value] => kid.hr@example.name ) [2] => Array ( [name] => opt_out [value] => 0 ) [3] => Array ( [name] => primary_address [value] => 0 ) ) ) ) )
    * @exception 'SoapFault' -- The SOAP error, if any
    */
    public function get_entry_list(
        $session,
        $module_name,
        $query,
        $order_by,
        $offset,
        $select_fields,
        $link_name_to_fields_array,
        $max_results,
        $deleted = 0,
        $favorites = false
    ) {
        $select_fields = object_to_array_deep($select_fields);
        $link_name_to_fields_array = object_to_array_deep($link_name_to_fields_array);

        $this->getLogger()->info('Begin: SugarWebServiceImpl->get_entry_list');
        $error = new SoapError();
        $using_cp = false;
        if($module_name == 'CampaignProspects'){
            $module_name = 'Prospects';
            $using_cp = true;
        }
        if (!self::$helperObject->checkSessionAndModuleAccess($session, 'invalid_session', $module_name, 'read', 'no_access', $error)) {
            $this->getLogger()->info('End: SugarWebServiceImpl->get_entry_list');
            return;
        } // if

        if (!self::$helperObject->checkQuery($error, $query, $order_by)) {
            $this->getLogger()->info('End: SugarWebServiceImpl->get_entry_list');
        	return;
        } // if

        // If the maximum number of entries per page was specified, override the configuration value.
        if($max_results > 0){
            global $sugar_config;
            $sugar_config['list_max_entries_per_page'] = $max_results;
        } // if

        $seed = BeanFactory::newBean($module_name);

        if (!self::$helperObject->checkACLAccess($seed, 'Export', $error, 'no_access')) {
            $this->getLogger()->info('End: SugarWebServiceImpl->get_entry_list');
            return;
        } // if

        if (!self::$helperObject->checkACLAccess($seed, 'list', $error, 'no_access')) {
            $this->getLogger()->info('End: SugarWebServiceImpl->get_entry_list');
            return;
        } // if

        if($query == ''){
            $where = '';
        } // if
        if($offset == '' || $offset == -1){
            $offset = 0;
        } // if
        if($using_cp){
            $response = $seed->retrieveTargetList($query, $select_fields, $offset,-1,-1,$deleted);
        }else
        {
            $response = self::$helperObject->get_data_list($seed,$order_by, $query, $offset,-1,-1,$deleted,$favorites);
        } // else
        $list = $response['list'];

        $output_list = array();
        $linkoutput_list = array();

        foreach($list as $value) {
            if(isset($value->emailAddress)){
                $value->emailAddress->handleLegacyRetrieve($value);
            } // if
            $value->fill_in_additional_detail_fields();

            $output_list[] = self::$helperObject->get_return_value_for_fields($value, $module_name, $select_fields);
            if(!empty($link_name_to_fields_array)){
                $linkoutput_list[] = self::$helperObject->get_return_value_for_link_fields($value, $module_name, $link_name_to_fields_array);
            }
        } // foreach

        // Calculate the offset for the start of the next page
        $next_offset = $offset + sizeof($output_list);

		$returnRelationshipList = array();
		foreach($linkoutput_list as $rel){
			$link_output = array();
			foreach($rel as $row){
				$rowArray = array();
				foreach($row['records'] as $record){
					$rowArray[]['link_value'] = $record;
				}
				$link_output[] = array('name' => $row['name'], 'records' => $rowArray);
			}
			$returnRelationshipList[]['link_list'] = $link_output;
		}

		$totalRecordCount = $response['row_count'];
        if( !empty($sugar_config['disable_count_query']) )
            $totalRecordCount = -1;

        $this->getLogger()->info('End: SugarWebServiceImpl->get_entry_list');
        return array('result_count'=>sizeof($output_list), 'total_count' => $totalRecordCount, 'next_offset'=>$next_offset, 'entry_list'=>$output_list, 'relationship_list' => $returnRelationshipList);
    } // fn



    /**
     * Given a list of modules to search and a search string, return the id, module_name, along with the fields
     * We will support Accounts, Bug Tracker, Cases, Contacts, Leads, Opportunities, Project, ProjectTask, Quotes
     *
     * @param string $session			- Session ID returned by a previous call to login.
     * @param string $search_string 	- string to search
     * @param string[] $modules			- array of modules to query
     * @param int $offset				- a specified offset in the query
     * @param int $max_results			- max number of records to return
     * @param string $assigned_user_id	- a user id to filter all records by, leave empty to exclude the filter
     * @param string[] $select_fields   - An array of fields to return.  If empty the default return fields will be from the active list view defs.
     * @param bool $unified_search_only - A boolean indicating if we should only search against those modules participating in the unified search.
     * @return Array return_search_result 	- Array('Accounts' => array(array('name' => 'first_name', 'value' => 'John', 'name' => 'last_name', 'value' => 'Do')))
     * @exception 'SoapFault' -- The SOAP error, if any
     */
    function search_by_module($session, $search_string, $modules, $offset, $max_results,$assigned_user_id = '', $select_fields = array(), $unified_search_only = TRUE){
        $modules = object_to_array_deep($modules);
        $select_fields = object_to_array_deep($select_fields);
        $this->getLogger()->info('Begin: SugarWebServiceImpl->search_by_module');
    	global  $beanList, $beanFiles;
    	global $sugar_config,$current_language;

    	$error = new SoapError();
    	$output_list = array();
    	if (!self::$helperObject->checkSessionAndModuleAccess($session, 'invalid_session', '', '', '', $error)) {
    		$error->set_error('invalid_login');
            $this->getLogger()->info('End: SugarWebServiceImpl->search_by_module');
    		return;
    	}
    	global $current_user;
    	if($max_results > 0){
    		$sugar_config['list_max_entries_per_page'] = $max_results;
    	}

    	require_once 'include/utils.php';
    	$usa = new UnifiedSearchAdvanced();
        if(!file_exists($cachedfile = sugar_cached('modules/unified_search_modules.php'))) {
            $usa->buildCache();
        }

    	include($cachedfile);
    	$modules_to_search = array();
    	$unified_search_modules['Users'] =   array('fields' => array());

    	$unified_search_modules['ProjectTask'] =   array('fields' => array());

        //If we are ignoring the unified search flag within the vardef we need to re-create the search fields.  This allows us to search
        //against a specific module even though it is not enabled for the unified search within the application.
        if( !$unified_search_only )
        {
            foreach ($modules as $singleModule)
            {
                if( !isset($unified_search_modules[$singleModule]) )
                {
                    $newSearchFields = array('fields' => self::$helperObject->generateUnifiedSearchFields($singleModule) );
                    $unified_search_modules[$singleModule] = $newSearchFields;
                }
            }
        }


        foreach($unified_search_modules as $module=>$data) {
        	if (in_array($module, $modules)) {
            	$modules_to_search[$module] = $beanList[$module];
        	} // if
        } // foreach

        $this->getLogger()->info('SugarWebServiceImpl->search_by_module - search string = ' . $search_string);

    	if(!empty($search_string) && isset($search_string)) {
        	foreach($modules_to_search as $name => $beanName) {
        		$where_clauses_array = array();
    			$unifiedSearchFields = array () ;
    			foreach ($unified_search_modules[$name]['fields'] as $field=>$def ) {
    				$unifiedSearchFields[$name] [ $field ] = $def ;
    				$unifiedSearchFields[$name] [ $field ]['value'] = $search_string;
    			}

    			$seed = BeanFactory::newBean($name);
    			require_once 'include/SearchForm/SearchForm2.php' ;
    			if ($beanName == "User"
    			    || $beanName == "ProjectTask"
    			    ) {
    				if(!self::$helperObject->check_modules_access($current_user, $seed->module_dir, 'read')){
    					continue;
    				} // if
    				if(!$seed->ACLAccess('ListView')) {
    					continue;
    				} // if
    			}

    			if ($beanName != "User"
    			    && $beanName != "ProjectTask"
    			    ) {
    				$searchForm = new SearchForm ($seed, $name ) ;

    				$searchForm->setup(array ($name => array()) ,$unifiedSearchFields , '' , 'saved_views' /* hack to avoid setup doing further unwanted processing */ ) ;
    				$where_clauses = $searchForm->generateSearchWhere() ;

    				$where = '';
    				if (count($where_clauses) > 0 ) {
    					$where = '('. implode(' ) OR ( ', $where_clauses) . ')';
    				}

    				$mod_strings = return_module_language($current_language, $seed->module_dir);

    				if(count($select_fields) > 0)
    				    $filterFields = $select_fields;
    				else {
    				    require_once SugarAutoLoader::loadWithMetafiles($seed->module_dir, 'listviewdefs');

        				$filterFields = array();
        				foreach($listViewDefs[$seed->module_dir] as $colName => $param) {
        	                if(!empty($param['default']) && $param['default'] == true)
        	                    $filterFields[] = strtolower($colName);
        	            }
        	            if (!in_array('id', $filterFields))
        	            	$filterFields[] = 'id';
    				}

    				//Pull in any db fields used for the unified search query so the correct joins will be added
    				$selectOnlyQueryFields = array();
    				foreach ($unifiedSearchFields[$name] as $field => $def){
    				    if( isset($def['db_field']) && !in_array($field,$filterFields) ){
    				        $filterFields[] = $field;
    				        $selectOnlyQueryFields[] = $field;
    				    }
    				}

    	            //Add the assigned user filter if applicable
    	            if (!empty($assigned_user_id) && isset( $seed->field_defs['assigned_user_id']) ) {
    	               $ownerWhere = $seed->getOwnerWhere($assigned_user_id);
    	               $where = "($where) AND $ownerWhere";
    	            }

    	            if( $beanName == "Employee" )
    	            {
    	                $where = "($where) AND users.deleted = 0 AND users.is_group = 0 AND users.employee_status = 'Active'";
    	            }

    				$ret_array = $seed->create_new_list_query('', $where, $filterFields, array(), 0, '', true, $seed, true);
    		        if(empty($params) or !is_array($params)) $params = array();
    		        if(!isset($params['custom_select'])) $params['custom_select'] = '';
    		        if(!isset($params['custom_from'])) $params['custom_from'] = '';
    		        if(!isset($params['custom_where'])) $params['custom_where'] = '';
    		        if(!isset($params['custom_order_by'])) $params['custom_order_by'] = '';
    				$main_query = $ret_array['select'] . $params['custom_select'] . $ret_array['from'] . $params['custom_from'] . $ret_array['where'] . $params['custom_where'] . $ret_array['order_by'] . $params['custom_order_by'];
    			} else {
    				if ($beanName == "User") {
                        $filterFields = ['id', 'user_name', 'first_name', 'last_name', 'email_address'];
                        $main_query = <<<SQL
SELECT users.id, ea.email_address, users.user_name, first_name, last_name
FROM users
LEFT JOIN email_addr_bean_rel eabl ON eabl.bean_module = %s
LEFT JOIN email_addresses ea ON (ea.id = eabl.email_address_id)
WHERE (
  (users.first_name LIKE %s) 
  OR (users.last_name LIKE %s) 
  OR (users.user_name LIKE %s) 
  OR (ea.email_address LIKE %s)
) AND users.deleted = 0 AND users.is_group = 0 AND users.employee_status = 'Active'
SQL;
                        $main_query = sprintf(
                            $main_query,
                            $seed->db->quoted($seed->module_dir),
                            $seed->db->quoted($search_string),
                            $seed->db->quoted($search_string),
                            $seed->db->quoted($search_string),
                            $seed->db->quoted($search_string)
                        );
    				} // if
    				if ($beanName == "ProjectTask") {
                        $filterFields = ['id', 'name', 'project_id', 'project_name'];
                        $table = $seed->table_name;
                        $main_query = <<<SQL
SELECT {$table}.project_task_id id, {$table}.project_id, {$table}.name, project.name project_name 
FROM {$table}
SQL;
                        $seed->add_team_security_where_clause($main_query);

                        $main_query .= <<<SQL
LEFT JOIN teams ON {$table}.team_id=teams.id AND teams.deleted = 0
LEFT JOIN project ON {$table}.project_id = project.id
WHERE {$table}.name LIKE %s
SQL;
                        $main_query = sprintf($main_query, $seed->db->quoted($search_string . '%'));
    				} // if
    			} // else

                $this->getLogger()->info('SugarWebServiceImpl->search_by_module - query = ' . $main_query);
    	   		if($max_results < -1) {
    				$result = $seed->db->query($main_query);
    			}
    			else {
    				if($max_results == -1) {
    					$limit = $sugar_config['list_max_entries_per_page'];
    	            } else {
    	            	$limit = $max_results;
    	            }
    	            $result = $seed->db->limitQuery($main_query, $offset, $limit + 1);
    			}

    			$rowArray = array();
    			while($row = $seed->db->fetchByAssoc($result)) {
    				$nameValueArray = array();
    				foreach ($filterFields as $field) {
    				    if(in_array($field, $selectOnlyQueryFields))
    				        continue;
    					$nameValue = array();
    					if (isset($row[$field])) {
    						$nameValueArray[$field] = self::$helperObject->get_name_value($field, $row[$field]);
    					} // if
    				} // foreach
    				$rowArray[] = $nameValueArray;
    			} // while
    			$output_list[] = array('name' => $name, 'records' => $rowArray);
        	} // foreach

            $this->getLogger()->info('End: SugarWebServiceImpl->search_by_module');
    	return array('entry_list'=>$output_list);
    	} // if
    	return array('entry_list'=>$output_list);
    } // fn
}

SugarWebServiceImplv3_1::$helperObject = new SugarWebServiceUtilv3_1();
