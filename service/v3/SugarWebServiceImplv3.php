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
require_once 'service/core/SugarWebServiceImpl.php';

use  Sugarcrm\Sugarcrm\Util\Arrays\ArrayFunctions\ArrayFunctions;

/**
 * This class is an implemenatation class for all the rest services
 */
class SugarWebServiceImplv3 extends SugarWebServiceImpl {

    public function __construct()
    {
        self::$helperObject = new SugarWebServiceUtilv3();
    }


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
    public function login($user_auth, $application, $name_value_list){
        $user_auth = object_to_array_deep($user_auth);
        $name_value_list = object_to_array_deep($name_value_list);
        $this->getLogger()->info('Begin: SugarWebServiceImpl->login');
        global $sugar_config;
        $error = new SoapError();
        $user = BeanFactory::newBean('Users');
        $success = false;
        $authController = AuthenticationController::getInstance();

        if (!empty($user_auth['encryption']) && $user_auth['encryption'] === 'PLAIN' &&
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
        } elseif (!$authController->authController instanceof OAuth2Authenticate) {
            $password = self::$helperObject->decrypt_string($user_auth['password']);
            $authController->loggedIn = false; // reset login attempt to try again with decrypted password
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
            $currencyObject = BeanFactory::getBean('Currencies', $cur_id);
            $nameValueArray['user_currency_name'] = self::$helperObject->get_name_value('user_currency_name', $currencyObject->name);
            $_SESSION['user_language'] = $current_language;
            return array('id'=>session_id(), 'module_name'=>'Users', 'name_value_list'=>$nameValueArray);
        }
        LogicHook::initialize();
        $GLOBALS['logic_hook']->call_custom_logic('Users', 'login_failed');
        $error->set_error('invalid_login');
        self::$helperObject->setFaultObject($error);
        $this->getLogger()->fatal('End: SugarWebServiceImpl->login - failed login');
    }

    /**
     * Retrieve the md5 hash of the vardef entries for a particular module.
     *
     * @param String $session -- Session ID returned by a previous call to login.
     * @param String|array $module_name -- The name of the module to return records from.  This name should be the name the module was developed under (changing a tab name is studio does not affect the name that should be passed into this method)..
     * @return String The md5 hash of the vardef definition.
     * @exception 'SoapFault' -- The SOAP error, if any
     */
    function get_module_fields_md5($session, $module_name){
        $module_name = object_to_array_deep($module_name);

        $this->getLogger()->info('Begin: SugarWebServiceImpl->get_module_fields_md5(v3) for module: '. print_r($module_name, true));

        $results = array();
        if( is_array($module_name) )
        {
            foreach ($module_name as $module)
                $results[$module] = md5(serialize(self::get_module_fields($session, $module)));
        }
        else
            $results[$module_name] = md5(serialize(self::get_module_fields($session, $module_name)));

        return $results;
    }

    /**
     * Gets server info. This will return information like version, flavor and gmt_time.
     * @return Array - flavor - String - Retrieve the specific flavor of sugar.
     * 				 - version - String - Retrieve the version number of Sugar that the server is running.
     * 				 - gmt_time - String - Return the current time on the server in the format 'Y-m-d H:i:s'. This time is in GMT.
     * @exception 'SoapFault' -- The SOAP error, if any
     */
    function get_server_info(){
        $this->getLogger()->info('Begin: SugarWebServiceImpl->get_server_info');
        global $sugar_flavor, $sugar_version;
        if (empty($sugar_version))
        {
            require_once('sugar_version.php');
        }
        $this->getLogger()->info('End: SugarWebServiceImpl->get_server_info');

    	return array('flavor' => $sugar_flavor, 'version' => $sugar_version, 'gmt_time' => TimeDate::getInstance()->nowDb());
    } // fn

    /**
     * Retrieve the layout metadata for a given module given a specific type and view.
     *
     * @param String $session -- Session ID returned by a previous call to login.
     * @param array $module_name(s) -- The name of the module(s) to return records from.  This name should be the name the module was developed under (changing a tab name is studio does not affect the name that should be passed into this method)..
     * @param array $a_type
     * @param array $a_view
     * @param bool $md5
     * @return array $type The type(s) of views requested.  Current supported types are 'default' (for application) and 'wireless'
     * @return array $view The view(s) requested.  Current supported types are edit, detail, list, and subpanel.
     * @exception 'SoapFault' -- The SOAP error, if any
     */
    public function get_module_layout($session, $a_module_names, $a_type, $a_view, $md5 = false)
    {
        $this->getLogger()->info('Begin: SugarWebServiceImpl->get_module_layout');

    	global  $beanList, $beanFiles;
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
                if($seed->ACLAccess($aclViewCheck, true) )
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
     * Retrieve the md5 hash of a layout metadata for a given module given a specific type and view.
     *
     * @param String $session -- Session ID returned by a previous call to login.
     * @param array $module_name(s) -- The name of the module to return records from.  This name should be the name the module was developed under (changing a tab name is studio does not affect the name that should be passed into this method)..
     * @return array $type(s) The type of view requested.  Current supported types are 'default' (for application) and 'wireless'
     * @return array $view(s) The view requested.  Current supported types are edit, detail, and list.
     * @exception 'SoapFault' -- The SOAP error, if any
     */
    function get_module_layout_md5($session, $module_name, $type, $view){
        $this->getLogger()->info('Begin: SugarWebServiceImpl->get_module_layout_md5');
        $results = $this->get_module_layout($session, $module_name, $type, $view, true);
            return array('md5'=> $results);
        $this->getLogger()->info('End: SugarWebServiceImpl->get_module_layout_md5');
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
    	        $modules = $availModules;
    	}

        $this->getLogger()->info('End: SugarWebServiceImpl->get_available_modules');
    	return array('modules'=> $modules);
    } // fn

    /**
     * Retrieve a list of recently viewed records by module.
     *
     * @param String $session -- Session ID returned by a previous call to login.
     * @param Array $module_names -- An array of modules or 'Home' to indicate all.
     * @return Array The recently viewed records
     * @exception 'SoapFault' -- The SOAP error, if any
     */
    function get_last_viewed($session, $module_names)
    {
        $module_names = object_to_array_deep($module_names);
        $this->getLogger()->info('Begin: SugarWebServiceImpl->get_last_viewed');
        $error = new SoapError();
    	if (!self::$helperObject->checkSessionAndModuleAccess($session, 'invalid_session', '', '', '', $error))
    	{
    		$error->set_error('invalid_login');
            $this->getLogger()->info('End: SugarWebServiceImpl->get_last_viewed');
    		return;
    	} // if

    	$results = array();
    	foreach ($module_names as $module )
    	{
    	    if(!self::$helperObject->check_modules_access($GLOBALS['current_user'], $module, 'read'))
            {
                $this->getLogger()->debug("SugarWebServiceImpl->get_last_viewed: NO ACCESS to $module");
                continue;
            }

            if($module == 'Home') $module = '';
    	    $tracker = BeanFactory::newBean('Trackers');
            $entryList = $tracker->get_recently_viewed($GLOBALS['current_user']->id, $module);
            foreach ($entryList as $entry)
                $results[] = $entry;
    	}

        $this->getLogger()->info('End: SugarWebServiceImpl->get_last_viewed');
        return $results;
    }

    /**
     * Retrieve a list of upcoming activities including Calls, Meetings,Tasks and Opportunities
     *
     * @param String $session -- Session ID returned by a previous call to login.
     * @return Array List of upcoming activities
     * @exception 'SoapFault' -- The SOAP error, if any
     */
    function get_upcoming_activities($session)
    {
        $this->getLogger()->info('Begin: SugarWebServiceImpl->get_upcoming_activities');
        $error = new SoapError();
    	if (!self::$helperObject->checkSessionAndModuleAccess($session, 'invalid_session', '', '', '', $error))
    	{
    		$error->set_error('invalid_login');
            $this->getLogger()->info('End: SugarWebServiceImpl->get_upcoming_activities');
    		return;
    	} // if

    	$results = self::$helperObject->get_upcoming_activities();

        $this->getLogger()->info('End: SugarWebServiceImpl->get_upcoming_activities');

        return $results;
    }

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
     * @return Array return_search_result 	- Array('Accounts' => array(array('name' => 'first_name', 'value' => 'John', 'name' => 'last_name', 'value' => 'Do')))
     * @exception 'SoapFault' -- The SOAP error, if any
     */
    function search_by_module($session, $search_string, $modules, $offset, $max_results,$assigned_user_id = '', $select_fields = array()){
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
                    if (is_array($where_clauses) && count($where_clauses) > 0) {
                        $where = '(' . implode(' ) OR ( ', $where_clauses) . ')';
                    }

    				$mod_strings = return_module_language($current_language, $seed->module_dir);

                    if (is_array($select_fields) && count($select_fields) > 0) {
                        $filterFields = $select_fields;
                    } else {
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

    /**
     * Retrieve a collection of beans that are related to the specified bean and optionally return relationship data for those related beans.
     * So in this API you can get contacts info for an account and also return all those contact's email address or an opportunity info also.
     *
     * @param String $session -- Session ID returned by a previous call to login.
     * @param String $module_name -- The name of the module that the primary record is from.  This name should be the name the module was developed under (changing a tab name is studio does not affect the name that should be passed into this method)..
     * @param String $module_id -- The ID of the bean in the specified module
     * @param String $link_field_name -- The name of the lnk field to return records from.  This name should be the name the relationship.
     * @param String $related_module_query -- A portion of the where clause of the SQL statement to find the related items.  The SQL query will already be filtered to only include the beans that are related to the specified bean.
     * @param Array $related_fields - Array of related bean fields to be returned.
     * @param Array $related_module_link_name_to_fields_array - For every related bean returrned, specify link fields name to fields info for that bean to be returned. For ex.'link_name_to_fields_array' => array(array('name' =>  'email_addresses', 'value' => array('id', 'email_address', 'opt_out', 'primary_address'))).
     * @param Number $deleted -- false if deleted records should not be include, true if deleted records should be included.
     * @param String $order_by -- field to order the result sets by
     * @return Array 'entry_list' -- Array - The records that were retrieved
     *	     		 'relationship_list' -- Array - The records link field data. The example is if asked about accounts contacts email address then return data would look like Array ( [0] => Array ( [name] => email_addresses [records] => Array ( [0] => Array ( [0] => Array ( [name] => id [value] => 3fb16797-8d90-0a94-ac12-490b63a6be67 ) [1] => Array ( [name] => email_address [value] => hr.kid.qa@example.com ) [2] => Array ( [name] => opt_out [value] => 0 ) [3] => Array ( [name] => primary_address [value] => 1 ) ) [1] => Array ( [0] => Array ( [name] => id [value] => 403f8da1-214b-6a88-9cef-490b63d43566 ) [1] => Array ( [name] => email_address [value] => kid.hr@example.name ) [2] => Array ( [name] => opt_out [value] => 0 ) [3] => Array ( [name] => primary_address [value] => 0 ) ) ) ) )
    * @exception 'SoapFault' -- The SOAP error, if any
    */
    function get_relationships($session, $module_name, $module_id, $link_field_name, $related_module_query, $related_fields, $related_module_link_name_to_fields_array, $deleted, $order_by = ''){
        $related_fields = object_to_array_deep($related_fields);
        $related_module_link_name_to_fields_array = object_to_array_deep($related_module_link_name_to_fields_array);
        $this->getLogger()->info('Begin: SugarWebServiceImpl->get_relationships');
    	$error = new SoapError();
    	if (!self::$helperObject->checkSessionAndModuleAccess($session, 'invalid_session', $module_name, 'read', 'no_access', $error)) {
            $this->getLogger()->info('End: SugarWebServiceImpl->get_relationships');
    		return;
    	} // if

    	$mod = BeanFactory::getBean($module_name, $module_id);

        if (!self::$helperObject->checkQuery($error, $related_module_query, $order_by)) {
            $this->getLogger()->info('End: SugarWebServiceImpl->get_relationships');
        	return;
        } // if

        if (!self::$helperObject->checkACLAccess($mod, 'DetailView', $error, 'no_access')) {
            $this->getLogger()->info('End: SugarWebServiceImpl->get_relationships');
        	return;
        } // if

        $output_list = array();
    	$linkoutput_list = array();

    	// get all the related mmodules data.
        $result = self::$helperObject->getRelationshipResults($mod, $link_field_name, $related_fields, $related_module_query,$order_by);
        if ($this->getLogger()->wouldLog('debug')) {
            $this->getLogger()->debug('SoapHelperWebServices->get_relationships - return data for getRelationshipResults is ' . var_export($result, true));
        } // if
    	if ($result) {
    		$list = $result['rows'];
    		$filterFields = $result['fields_set_on_rows'];

    		if (sizeof($list) > 0) {
    			// get the related module name and instantiate a bean for that.
    			$submodulename = $mod->$link_field_name->getRelatedModuleName();

    			foreach($list as $row) {
    				$submoduleobject = BeanFactory::newBean($submodulename);
    				// set all the database data to this object
    				foreach ($filterFields as $field) {
    					$submoduleobject->$field = $row[$field];
    				} // foreach
    				if (isset($row['id'])) {
    					$submoduleobject->id = $row['id'];
    				}
    				$output_list[] = self::$helperObject->get_return_value_for_fields($submoduleobject, $submodulename, $filterFields);
    				if (!empty($related_module_link_name_to_fields_array)) {
    					$linkoutput_list[] = self::$helperObject->get_return_value_for_link_fields($submoduleobject, $submodulename, $related_module_link_name_to_fields_array);
    				} // if

    			} // foreach
    		}

    	} // if

        $this->getLogger()->info('End: SugarWebServiceImpl->get_relationships');
    	return array('entry_list'=>$output_list, 'relationship_list' => $linkoutput_list);

    } // fn
}

SugarWebServiceImplv3::$helperObject = new SugarWebServiceUtilv3();
