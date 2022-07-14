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
require_once('service/core/SoapHelperWebService.php');
class SugarWebServiceUtilv3 extends SoapHelperWebServices {

    function get_name_value($field,$value)
    {
        if($value instanceof Link2 && !method_exists($value, '__toString'))
            $value = '';
		return array('name'=>$field, 'value'=>$value);
	}

    function filter_fields($value, $fields)
    {
        $this->getLogger()->info('Begin: SoapHelperWebServices->filter_fields');
        global $invalid_contact_fields;
        $filterFields = array();
        foreach($fields as $field)
        {
            if (is_array($invalid_contact_fields))
            {
                if (in_array($field, $invalid_contact_fields))
                {
                    continue;
                }
            }
            if (isset($value->field_defs[$field]))
            {
                $var = $value->field_defs[$field];
                if($var['type'] == 'link') continue;
                if( isset($var['source'])
                    && ($var['source'] != 'db' && $var['source'] != 'custom_fields' && $var['source'] != 'non-db')
                    && $var['name'] != 'email1' && $var['name'] != 'email2'
                    && (!isset($var['type'])|| $var['type'] != 'relate')
                    && (!isset($var['type'])|| $var['type'] == 'id' && !isset($var['link']))) {

                    if( $value->module_dir == 'Emails'
                        && (($var['name'] == 'description') || ($var['name'] == 'description_html') || ($var['name'] == 'from_addr_name')
                            || ($var['name'] == 'reply_to_addr') || ($var['name'] == 'to_addrs_names') || ($var['name'] == 'cc_addrs_names')
                            || ($var['name'] == 'bcc_addrs_names') || ($var['name'] == 'raw_source')))
                    {

                    }
                    else
                    {
                        continue;
                    }
                }
            }
            $filterFields[] = $field;
        }
        $this->getLogger()->info('End: SoapHelperWebServices->filter_fields');
        return $filterFields;
    }

    function getRelationshipResults($bean, $link_field_name, $link_module_fields, $optional_where = '', $order_by = '') {
        $this->getLogger()->info('Begin: SoapHelperWebServices->getRelationshipResults');
		global  $beanList, $beanFiles, $current_user;
		global $disable_date_format, $timedate;

		$bean->load_relationship($link_field_name);
		if (isset($bean->$link_field_name)) {
			//First get all the related beans
            $params = array();
            if (!empty($optional_where))
            {
                $params['where'] = $optional_where;
            }
            $related_beans = $bean->$link_field_name->getBeans($params);
            //Create a list of field/value rows based on $link_module_fields
			$list = array();
            $filterFields = array();
            if (!empty($order_by) && !empty($related_beans))
            {
                $related_beans = order_beans($related_beans, $order_by);
            }
            foreach($related_beans as $id => $bean)
            {
                if (empty($filterFields) && !empty($link_module_fields))
                {
                    $filterFields = $this->filter_fields($bean, $link_module_fields);
                }
                $row = array();
                foreach ($filterFields as $field) {
                    if (isset($bean->$field))
                    {
                        if (isset($bean->field_defs[$field]['type']) && $bean->field_defs[$field]['type'] == 'date') {
                            $row[$field] = $timedate->to_display_date_time($bean->$field);
                        }
                        $row[$field] = $bean->$field;
                    }
                    else
                    {
                        $row[$field] = "";
                    }
                }
                //Users can't see other user's hashes
                if(is_a($bean, 'User') && $current_user->id != $bean->id && isset($row['user_hash'])) {
                    $row['user_hash'] = "";
                }
                $row = clean_sensitive_data($bean->field_defs, $row);
                $list[] = $row;
            }
            $this->getLogger()->info('End: SoapHelperWebServices->getRelationshipResults');
            return array('rows' => $list, 'fields_set_on_rows' => $filterFields);
		} else {
            $this->getLogger()->info('End: SoapHelperWebServices->getRelationshipResults - ' . $link_field_name . ' relationship does not exists');
			return false;
		} // else

	} // fn

	function get_field_list($value, $fields, $translate=true) {

        $this->getLogger()->info('Begin: SoapHelperWebServices->get_field_list');
		$module_fields = array();
		$link_fields = array();
		if(!empty($value->field_defs)){

			foreach($value->field_defs as $var){
				if(!empty($fields) && !in_array( $var['name'], $fields))continue;
				if(isset($var['source']) && ($var['source'] != 'db' && $var['source'] != 'non-db' &&$var['source'] != 'custom_fields') && $var['name'] != 'email1' && $var['name'] != 'email2' && (!isset($var['type'])|| $var['type'] != 'relate'))continue;
				if ((isset($var['source']) && $var['source'] == 'non_db') || (isset($var['type']) && $var['type'] == 'link')) {
					continue;
				}
				$required = 0;
				$options_dom = array();
				$options_ret = array();
				// Apparently the only purpose of this check is to make sure we only return fields
				//   when we've read a record.  Otherwise this function is identical to get_module_field_list
				if( isset($var['required']) && ($var['required'] || $var['required'] == 'true' ) ){
					$required = 1;
				}

				if(isset($var['options'])){
					$options_dom = translate($var['options'], $value->module_dir);
					if(!is_array($options_dom)) $options_dom = array();
					foreach($options_dom as $key=>$oneOption)
						$options_ret[$key] = $this->get_name_value($key,$oneOption);
				}

	            if(!empty($var['dbType']) && $var['type'] == 'bool') {
	                $options_ret['type'] = $this->get_name_value('type', $var['dbType']);
	            }

	            $entry = array();
	            $entry['name'] = $var['name'];
	            $entry['type'] = $var['type'];
	            $entry['group'] = isset($var['group']) ? $var['group'] : '';
	            $entry['id_name'] = isset($var['id_name']) ? $var['id_name'] : '';

	            if ($var['type'] == 'link') {
		            $entry['relationship'] = (isset($var['relationship']) ? $var['relationship'] : '');
		            $entry['module'] = (isset($var['module']) ? $var['module'] : '');
		            $entry['bean_name'] = (isset($var['bean_name']) ? $var['bean_name'] : '');
					$link_fields[$var['name']] = $entry;
	            } else {
		            if($translate) {
		            	$entry['label'] = isset($var['vname']) ? translate($var['vname'], $value->module_dir) : $var['name'];
		            } else {
		            	$entry['label'] = isset($var['vname']) ? $var['vname'] : $var['name'];
		            }
		            $entry['required'] = $required;
		            $entry['options'] = $options_ret;
		            $entry['related_module'] = (isset($var['id_name']) && isset($var['module'])) ? $var['module'] : '';
					if(isset($var['default'])) {
					   $entry['default_value'] = $var['default'];
					}
					$module_fields[$var['name']] = $entry;
	            } // else
			} //foreach
		} //if

		if($value->module_dir == 'Bugs'){
			$seedRelease = BeanFactory::newBean('Releases');
			$options = $seedRelease->get_releases(TRUE, "Active");
			$options_ret = array();
			foreach($options as $name=>$value){
				$options_ret[] =  array('name'=> $name , 'value'=>$value);
			}
			if(isset($module_fields['fixed_in_release'])){
				$module_fields['fixed_in_release']['type'] = 'enum';
				$module_fields['fixed_in_release']['options'] = $options_ret;
			}
			if(isset($module_fields['release'])){
				$module_fields['release']['type'] = 'enum';
				$module_fields['release']['options'] = $options_ret;
			}
			if(isset($module_fields['release_name'])){
				$module_fields['release_name']['type'] = 'enum';
				$module_fields['release_name']['options'] = $options_ret;
			}
		}

		if(isset($value->assigned_user_name) && isset($module_fields['assigned_user_id'])) {
			$module_fields['assigned_user_name'] = $module_fields['assigned_user_id'];
			$module_fields['assigned_user_name']['name'] = 'assigned_user_name';
		}
		if(isset($value->assigned_name) && isset($module_fields['team_id'])) {
			$module_fields['team_name'] = $module_fields['team_id'];
			$module_fields['team_name']['name'] = 'team_name';
		}
		if(isset($module_fields['modified_user_id'])) {
			$module_fields['modified_by_name'] = $module_fields['modified_user_id'];
			$module_fields['modified_by_name']['name'] = 'modified_by_name';
		}
		if(isset($module_fields['created_by'])) {
			$module_fields['created_by_name'] = $module_fields['created_by'];
			$module_fields['created_by_name']['name'] = 'created_by_name';
		}

        $this->getLogger()->info('End: SoapHelperWebServices->get_field_list');
		return array('module_fields' => $module_fields, 'link_fields' => $link_fields);
	}

	function get_subpanel_defs($module, $type)
	{
	    global $beanList, $beanFiles;
	    $results = array();
	    switch ($type)
	    {
	        case 'wireless':
	            $defs = SugarAutoLoader::existingCustomOne('modules/'.$module.'/metadata/wireless.subpaneldefs.php');
	            if($defs) {
	                require $defs;
	            }
                //If an Ext/WirelessLayoutdefs/wireless.subpaneldefs.ext.php file exists, then also load it as well
                $defs = SugarAutoLoader::loadExtension("wireless_subpanels", $module);
                if($defs) {
                    require $defs;
                }
	            break;
	        case 'default':
	        default:
	            $defs = SugarAutoLoader::loadWithMetafiles($module, 'subpaneldefs');
	            if($defs) {
	            	require $defs;
	            }
	            $defs = SugarAutoLoader::loadExtension('layoutdefs', $module);
	            if($defs) {
                    require $defs;
	            }
	    }

        if (isset($layout_defs) && is_array($layout_defs)
            && isset($layout_defs[$module]) && is_array($layout_defs[$module])) {
            //Filter results for permissions
            foreach ($layout_defs[$module]['subpanel_setup'] as $subpanel => $subpaneldefs) {
                $moduleToCheck = $subpaneldefs['module'];
                $bean = BeanFactory::newBean($moduleToCheck);
                if (empty($bean)) {
                    continue;
                }
                if ($bean->ACLAccess('list')) {
                    $results[$subpanel] = $subpaneldefs;
                }
            }
        }

	    return $results;

	}

    function get_module_view_defs($module_name, $type, $view){
        $metadataFile = null;
        $view = strtolower($view);
        if ($view == 'subpanel') {
            return $this->get_subpanel_defs($module_name, $type);
        }

        $v = new SugarView(null,array());
        $v->module = $module_name;
        $v->type = $view;
        $fullView = ucfirst($view) . 'View';
        $metadataFile = $v->getMetaDataFile();
        require_once $metadataFile;
        $results = array();
        if ($view == 'list') {
            $results = $listViewDefs[$module_name];
        } else {
            $results = $viewdefs[$module_name][$fullView];
        }

        return $results;
    }

    /**
     * Examine the wireless_module_registry to determine which modules have been enabled for the mobile view.
     *
     * @param array $availModules An array of all the modules the user already has access to.
     * @return array Modules enalbed for mobile view.
     */
    function get_visible_mobile_modules($availModules){
        $enabled_modules = array();
        $availModulesKey = array_flip($availModules);
        foreach(SugarAutoLoader::existingCustom('include/MVC/Controller/wireless_module_registry.php') as $file) {
            require $file;
        }

        foreach ( $wireless_module_registry as $e => $def )
        {
        	if( isset($availModulesKey[$e]) )
                $enabled_modules[] = $e;
        }

        return $enabled_modules;
    }
    /**
     * Examine the application to determine which modules have been enabled..
     *
     * @param array $availModules An array of all the modules the user already has access to.
     * @return array Modules enabled within the application.
     */
    function get_visible_modules($availModules) {
        $controller = new TabController();
        $tabs = $controller->get_tabs_system();
        $enabled_modules= array();
        $availModulesKey = array_flip($availModules);
        foreach ($tabs[0] as $key=>$value)
        {
            if( isset($availModulesKey[$key]) )
                $enabled_modules[] = $key;
        }

        return $enabled_modules;
    }

    /**
     * Retrieve all of the upcoming activities for a particular user.
     *
     * @return array
     */
    function get_upcoming_activities()
    {
        $maxCount = 10;

        $activityModules = array('Meetings' => array('date_field' => 'date_start','status' => 'Planned','status_field' => 'status', 'status_opp' => '='),
                                 'Calls' => array('date_field' => 'date_start','status' => 'Planned','status_field' => 'status', 'status_opp' => '='),
                                 'Tasks' => array('date_field' =>'date_due','status' => 'Not Started','status_field' => 'status','status_opp' => '='),
                                 'Opportunities' => array('date_field' => 'date_closed','status' => array('Closed Won','Closed Lost'), 'status_field' => 'sales_stage', 'status_opp' => '!=') );
        $results = array();
        foreach ($activityModules as $module => $meta)
        {
            if(!self::check_modules_access($GLOBALS['current_user'], $module, 'read'))
            {
                $this->getLogger()->debug("SugarWebServiceImpl->get_last_viewed: NO ACCESS to $module");
                continue;
            }

	        $seed = BeanFactory::newBean($module);
            $query = $this->generateUpcomingActivitiesWhereClause($seed, $meta);

            $response = $seed->get_list(/* Order by date field */"{$meta['date_field']} ASC",  /*Where clause */$query, /* No Offset */ 0,
                                        /* No limit */-1, /* Max 10 items */10, /*No Deleted */ 0 );

            $result = array();

            if( isset($response['list']) )
                $result = $this->format_upcoming_activities_entries($response['list'],$meta['date_field']);

            $results = array_merge($results,$result);
        }

        //Sort the result list by the date due flag in ascending order
        usort( $results, array( $this , "cmp_datedue" ) ) ;

        //Only return a subset of the results.
        $results = array_slice($results, 0, $maxCount);

        return $results;
    }

    function generateUpcomingActivitiesWhereClause($seed,$meta)
    {
        $query = array();
        $query_date = TimeDate::getInstance()->nowDb();
        $query[] = " {$seed->table_name}.{$meta['date_field']} > '$query_date'"; //Add date filter
        $query[] = "{$seed->table_name}.assigned_user_id = '{$GLOBALS['current_user']->id}' "; //Add assigned user filter
        if (is_array($meta['status'])) {
            foreach ($meta['status'] as $field) {
                $query[] = "{$seed->table_name}.{$meta['status_field']} {$meta['status_opp']} '" . $GLOBALS['db']->quote($field) . "' ";
            }
        } else {
            $query[] = "{$seed->table_name}.{$meta['status_field']} {$meta['status_opp']} '" . $GLOBALS['db']->quote($meta['status']) . "' ";
        }

        return implode(" AND ",$query);
    }
    /**
     * Given a list of bean entries, format the expected response.
     *
     * @param array $list An array containing a bean list.
     * @param string $date_field Name of the field storing the date field we are examining
     * @return array The results.
     */
    function format_upcoming_activities_entries($list,$date_field)
    {
        $results = array();
        foreach ($list as $bean)
        {
            $results[] = array('id' => $bean->id, 'module' => $bean->module_dir,'date_due' => $bean->$date_field,
                                'summary' => $bean->get_summary_text() );
        }

        return $results;
    }

    /**
     * Sort the array for upcoming activities based on the date due flag ascending.
     *
     * @param array $a
     * @param array $b
     * @return int Indicates equality for date due flag
     */
    static function cmp_datedue( $a, $b )
    {
        $a_date = strtotime( $a['date_due'] ) ;
        $b_date = strtotime( $b['date_due'] ) ;

        if( $a_date == $b_date ) return 0 ;
        return ($a_date > $b_date ) ? 1 : -1;
  }

}
