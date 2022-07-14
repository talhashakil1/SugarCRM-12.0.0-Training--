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

use Sugarcrm\Sugarcrm\Security\InputValidation\InputValidation;
use Sugarcrm\Sugarcrm\Security\InputValidation\Request;


/**
 * Data set for ListView
 * @api
 */
class ListViewData {

    /**
     * @var Request 
     */
    protected $request;

	var $additionalDetails = true;
    var $listviewName = null;
	var $additionalDetailsAllow = null;
    var $additionalDetailsAjax = true; // leave this true when using filter fields
    var $additionalDetailsFieldToAdd = 'NAME'; // where the span will be attached to
    var $base_url = null;
    /*
     * If you want overwrite the query for the count of the listview set this to your query
     * otherwise leave it empty and it will use SugarBean::create_list_count_query
     */
    var $count_query = '';

	/**
	 * Constructor sets the limitName to look up the limit in $sugar_config
	 *
     * @param Request $request
	 * @return ListViewData
	 */
    public function __construct(Request $request = null)
    {
		$this->limitName = 'list_max_entries_per_page';
        $this->db = DBManagerFactory::getInstance('listviews');
        $this->request = $request ?: InputValidation::getService();
	}

    /**
     * checks the request for the order by and if that is not set then it checks the session for it
     *
     * @return array containing the keys orderBy => field being ordered off of and sortOrder => the sort order of that field
     */
    function getOrderBy($orderBy = '', $direction = '') {
        // Safe $_REQUEST[$this->var_order_by']
        $reqOrderBy = $this->request->getValidInputRequest($this->var_order_by, 'Assert\Sql\OrderBy');

        if (!empty($orderBy) || !empty($reqOrderBy)) {

            if (!empty($reqOrderBy)) {
                $direction = 'ASC';
                $orderBy = $reqOrderBy;

                // Safe $_REQUEST['lvso']
                $reqLvso = $this->request->getValidInputRequest('lvso', 'Assert\Sql\OrderDirection');

                if (!empty($reqLvso) && (empty($_SESSION['lvd']['last_ob']) ||
                    strcmp($orderBy, $_SESSION['lvd']['last_ob']) == 0))
                {
                    $direction = $reqLvso;
                }
            }

            $_SESSION[$this->var_order_by] = array('orderBy'=>$orderBy, 'direction'=> $direction);
            $_SESSION['lvd']['last_ob'] = $orderBy;

        } else {
            $userPreferenceOrder = $GLOBALS['current_user']->getPreference('listviewOrder', $this->var_name);
			if (!empty($_SESSION[$this->var_order_by])) {
				$orderBy = $_SESSION[$this->var_order_by]['orderBy'];
				$direction = $_SESSION[$this->var_order_by]['direction'];
            } elseif (!empty($userPreferenceOrder)) {
                $orderBy = $userPreferenceOrder['orderBy'];
                $direction = $userPreferenceOrder['sortOrder'];
            } else {
				$orderBy = 'date_entered';
				$direction = 'DESC';
			}
		}

        if (!empty($direction)) {
            if (strtolower($direction) == "desc") {
                $direction = 'DESC';
            } else {
                $direction = 'ASC';
            }
        }

        return array('orderBy' => $orderBy, 'sortOrder' => $direction);
    }

	/**
	 * gets the reverse of the sort order for use on links to reverse a sort order from what is currently used
	 *
	 * @param STRING (ASC or DESC) $current_order
	 * @return  STRING (ASC or DESC)
	 */
	function getReverseSortOrder($current_order){
		return (strcmp(strtolower($current_order), 'asc') == 0)?'DESC':'ASC';
	}
	/**
	 * gets the limit of how many rows to show per page
	 *
	 * @return INT (the limit)
	 */
	function getLimit() {
		return $GLOBALS['sugar_config'][$this->limitName];
	}

	/**
	 * returns the current offset
	 *
	 * @return INT (current offset)
	 */
	function getOffset() {
        // Safe $_REQUEST[$this->var_offset]
        return (isset($_REQUEST[$this->var_offset]) && ($_REQUEST[$this->var_offset] === 'end'))
            ? $_REQUEST[$this->var_offset]
            : $this->request->getValidInputRequest(
                $this->var_offset,
                array('Assert\Type' => array('type' => 'numeric')),
                0
            );
	}

    /**
     * generates the base url without
     * any files in the block variables will not be part of the url
     *
     * @return Array (the base url as an array)
     */
    protected function getBaseQuery()
    {
        global $beanList;

        $blockVariables = array('mass', 'uid', 'massupdate', 'delete', 'merge', 'selectCount',$this->var_order_by, $this->var_offset, 'lvso', 'sortOrder', 'orderBy', 'request_data', 'current_query_by_page');
        foreach($beanList as $bean)
        {
            $blockVariables[] = 'Home2_'.strtoupper($bean).'_ORDER_BY';
        }
        $blockVariables[] = 'Home2_CASE_ORDER_BY';

        // Added mostly for the unit test runners, which may not have these superglobals defined
        $params = array_merge($_POST, $_GET);
        $params = array_diff_key($params, array_flip($blockVariables));

        return $params;
    }

	/**
	 * based off of a base name it sets base, offset, and order by variable names to retrieve them from requests and sessions
	 *
	 * @param unknown_type $baseName
	 */
	function setVariableName($baseName, $where, $listviewName = null){
        global $timedate;

        // Safe $_REQUEST['module']
        $reqModule = $this->request->getValidInputRequest('module', 'Assert\Mvc\ModuleName');

        $module = (!empty($listviewName)) ? $listviewName: $reqModule;
        $this->var_name = $module .'2_'. strtoupper($baseName);

		$this->var_order_by = $this->var_name .'_ORDER_BY';
		$this->var_offset = $this->var_name . '_offset';
        $timestamp = sugar_microtime();
        $this->stamp = $timestamp;

        $_SESSION[$module .'2_QUERY_QUERY'] = $where;

        $_SESSION[strtoupper($baseName) . "_FROM_LIST_VIEW"] = $timestamp;
        $_SESSION[strtoupper($baseName) . "_DETAIL_NAV_HISTORY"] = false;
	}

	function getTotalCount($main_query){
		if(!empty($this->count_query)){
		    $count_query = $this->count_query;
		}else{
	        $count_query = $this->seed->create_list_count_query($main_query);
	    }
		if($row = $this->db->fetchOne($count_query)){
			return $row['c'];
		}
		return 0;
	}

	/**
	 * takes in a seed and creates the list view query based off of that seed
	 * if the $limit value is set to -1 then it will use the default limit and offset values
	 *
	 * it will return an array with two key values
	 * 	1. 'data'=> this is an array of row data
	 *  2. 'pageData'=> this is an array containg three values
	 * 			a.'ordering'=> array('orderBy'=> the field being ordered by , 'sortOrder'=> 'ASC' or 'DESC')
	 * 			b.'urls'=>array('baseURL'=>url used to generate other urls ,
	 * 							'orderBy'=> the base url for order by
	 * 							//the following may not be set (so check empty to see if they are set)
	 * 							'nextPage'=> the url for the next group of results,
	 * 							'prevPage'=> the url for the prev group of results,
	 * 							'startPage'=> the url for the start of the group,
	 * 							'endPage'=> the url for the last set of results in the group
	 * 			c.'offsets'=>array(
	 * 								'current'=>current offset
	 * 								'next'=> next group offset
	 * 								'prev'=> prev group offset
	 * 								'end'=> the offset of the last group
	 * 								'total'=> the total count (only accurate if totalCounted = true otherwise it is either the total count if less than the limit or the total count + 1 )
	 * 								'totalCounted'=> if a count query was used to get the total count
	 *
	 * @param SugarBean $seed
	 * @param string $where
	 * @param int:0 $offset
	 * @param int:-1 $limit
	 * @param string[]:array() $filter_fields
	 * @param array:array() $params
	 * 	Potential $params are
		$params['distinct'] = use distinct key word
		$params['include_custom_fields'] = (on by default)
        $params['custom_XXXX'] = append custom statements to query
	 * @param string:'id' $id_field
	 * @return array('data'=> row data, 'pageData' => page data information, 'query' => original query string)
	 */
	function getListViewData($seed, $where, $offset=-1, $limit = -1, $filter_fields=array(),$params=array(),$id_field = 'id',$singleSelect=true) {
        global $current_user;
        SugarVCR::erase($seed->module_dir);
        $this->seed = $seed;
        $totalCounted = empty($GLOBALS['sugar_config']['disable_count_query']);
        $_SESSION['MAILMERGE_MODULE_FROM_LISTVIEW'] = $seed->module_dir;

        // Safe $_REQUEST['action'] - may need a constraint
        $reqAction = $this->request->getValidInputRequest('action');

        if(empty($reqAction) || $reqAction != 'Popup'){
            $_SESSION['MAILMERGE_MODULE'] = $seed->module_dir;
        }

        $this->setVariableName($seed->object_name, $where, $this->listviewName);

        // if $params tell us to override all ordering
        if(!empty($params['overrideOrder']) && !empty($params['orderBy'])) {
            $order = $this->getOrderBy(strtolower($params['orderBy']), (empty($params['sortOrder']) ? '' : $params['sortOrder'])); // retreive from $_REQUEST
        }
        else {
            $order = $this->getOrderBy(); // retreive from $_REQUEST
        }

        // still empty? try to use settings passed in $param
        if(empty($order['orderBy']) && !empty($params['orderBy'])) {
            $order['orderBy'] = $params['orderBy'];
            $order['sortOrder'] =  (empty($params['sortOrder']) ? '' : $params['sortOrder']);
        }

        //rrs - bug: 21788. Do not use Order by stmts with fields that are not in the query.
        // Bug 22740 - Tweak this check to strip off the table name off the order by parameter.
        // Samir Gandhi : Do not remove the report_cache.date_modified condition as the report list view is broken
        $orderby = $order['orderBy'];
        if (strpos($order['orderBy'],'.') && ($order['orderBy'] != "report_cache.date_modified")) {
            $orderby = substr($order['orderBy'],strpos($order['orderBy'],'.')+1);
        }
        if ($orderby != 'date_entered' && !in_array($orderby, array_keys($filter_fields))) {
        	$order['orderBy'] = '';
        	$order['sortOrder'] = '';
        }

		if (empty($order['orderBy'])) {
            $orderBy = '';
        } else {
            $orderBy = $order['orderBy'] . ' ' . $order['sortOrder'];
            //wdong, Bug 25476, fix the sorting problem of Oracle.
            if (isset($params['custom_order_by_override']['ori_code']) && $order['orderBy'] == $params['custom_order_by_override']['ori_code'])
                $orderBy = $params['custom_order_by_override']['custom_code'] . ' ' . $order['sortOrder'];
        }

        if (empty($params['skipOrderSave'])) { // don't save preferences if told so
            $current_user->setPreference('listviewOrder', $order, 0, $this->var_name); // save preference
        }
        if ($seed->isFavoritesEnabled()) {
            $params['favorites'] = !empty($_REQUEST['my_favorites'])?2:1;
		}
        //Make sure all dependent fields have thier required data
        $triggers = DependencyManager::getDependentFieldTriggerFields($filter_fields, $this->seed->field_defs);
        foreach($triggers as $field)
        {
            $filter_fields[$field] = true;
        }

		// If $params tells us to override for the special last_name, first_name sorting
		if (!empty($params['overrideLastNameOrder']) && $order['orderBy'] == 'last_name') {
			$orderBy = 'last_name '.$order['sortOrder'].', first_name '.$order['sortOrder'];
		}

		$ret_array = $seed->create_new_list_query($orderBy, $where, $filter_fields, $params, 0, '', true, $seed, $singleSelect);
        $ret_array['inner_join'] = '';
        if (!empty($this->seed->listview_inner_join)) {
            $ret_array['inner_join'] = ' ' . implode(' ', $this->seed->listview_inner_join) . ' ';
        }

		if(!is_array($params)) $params = array();
        if(!isset($params['custom_select'])) $params['custom_select'] = '';
        if(!isset($params['custom_from'])) $params['custom_from'] = '';
        if(!isset($params['custom_where'])) $params['custom_where'] = '';
        if(!isset($params['custom_order_by'])) $params['custom_order_by'] = '';
		$main_query = $ret_array['select'] . $params['custom_select'] . $ret_array['from'] . $params['custom_from'] . $ret_array['inner_join']. $ret_array['where'] . $params['custom_where'] . $ret_array['order_by'] . $params['custom_order_by'];

        //Prevent multiple (same) ACLAccess calls
        $seedACL['ListView'] = $this->seed->ACLAccess('ListView');

		//C.L. - Fix for 23461
		if(empty($_REQUEST['action']) || $_REQUEST['action'] != 'Popup') {
          	   $_SESSION['export_where'] = $ret_array['where'];
		}
   		if($limit < -1) {
			$result = $this->db->query($main_query);
		}
		else {
			if($limit == -1) {
				$limit = $this->getLimit();
            }
			$dyn_offset = $this->getOffset();
			if($dyn_offset > 0 || !is_int($dyn_offset))$offset = $dyn_offset;

            if(strcmp($offset, 'end') == 0){
            	$totalCount = $this->getTotalCount($main_query);
            	$offset = (floor(($totalCount -1) / $limit)) * $limit;
            }
            if($seedACL['ListView']) {
                $result = $this->db->limitQuery($main_query, $offset, $limit + 1);
            }
            else {
                $result = array();
            }

		}

		$data = array();

		$temp = clone $seed;

		$rows = array();
		$count = 0;
        $idIndex = array();
        $id_list = '';

   		while(($row = $this->db->fetchByAssoc($result)) != null)
        {
   			if($count < $limit)
            {
                $row = $seed->convertRow($row);
                $id_list .= ',\'' . $this->db->quote($row[$id_field]) . '\'';
   				$idIndex[$row[$id_field]][] = count($rows);
                $rows[] = $row;
   			}
   			$count++;
   		}

        if (!empty($id_list))
        {
            $id_list = '('.substr($id_list, 1).')';
        }

        SugarVCR::store($this->seed->module_dir,  $main_query);
		if($count != 0) {
			//NOW HANDLE SECONDARY QUERIES
			if(!empty($ret_array['secondary_select'])) {
				$secondary_query = $ret_array['secondary_select'] . $ret_array['secondary_from'] . ' WHERE '.$this->seed->table_name.'.id IN ' .$id_list;
                if(isset($ret_array['order_by']))
                {
                    $secondary_query .= ' ' . $ret_array['order_by'];
                }

                $secondary_result = $this->db->query($secondary_query);

                $ref_id_count = array();
				while($row = $this->db->fetchByAssoc($secondary_result)) {

                    $ref_id_count[$row['ref_id']][] = true;
					foreach($row as $name=>$value) {
						//add it to every row with the given id
						foreach($idIndex[$row['ref_id']] as $index){
						    $rows[$index][$name]=$value;
						}
					}
				}

                $rows_keys = array_keys($rows);
                foreach($rows_keys as $key)
                {
                    $rows[$key]['secondary_select_count'] = count($ref_id_count[$rows[$key]['ref_id']]);
                }
			}

            // retrieve parent names
            if(!empty($filter_fields['parent_name']) && !empty($filter_fields['parent_id']) && !empty($filter_fields['parent_type'])) {
                foreach($idIndex as $id => $rowIndex) {
                    if(!isset($post_retrieve[$rows[$rowIndex[0]]['parent_type']])) {
                        $post_retrieve[$rows[$rowIndex[0]]['parent_type']] = array();
                    }
                    if(!empty($rows[$rowIndex[0]]['parent_id'])) $post_retrieve[$rows[$rowIndex[0]]['parent_type']][] = array('child_id' => $id , 'parent_id'=> $rows[$rowIndex[0]]['parent_id'], 'parent_type' => $rows[$rowIndex[0]]['parent_type'], 'type' => 'parent');
                }
                if(isset($post_retrieve)) {
                    $parent_fields = $seed->retrieve_parent_fields($post_retrieve);
                    foreach($parent_fields as $child_id => $parent_data) {
                        //add it to every row with the given id
						foreach($idIndex[$child_id] as $index){
						    $rows[$index]['parent_name']= $parent_data['parent_name'];
						}
                    }
                }
            }

			$pageData = array();

			reset($rows);
            $additionalDetailsFile = SugarAutoLoader::existingCustomOne('modules/' . $seed->module_dir . '/metadata/additionalDetails.php');
			while($row = current($rows)){

                $temp = clone $seed;
			    $dataIndex = count($data);

                if (!isset($temp->custom_fields) && empty($temp->disable_custom_fields)) {
                    $temp->setupCustomFields($temp->module_dir);
                }
				$temp->loadFromRow($row);
				if($idIndex[$row[$id_field]][0] == $dataIndex){
				    $pageData['tag'][$dataIndex] = $temp->listviewACLHelper();
				}else{
				    $pageData['tag'][$dataIndex] = $pageData['tag'][$idIndex[$row[$id_field]][0]];
				}
				$temp->updateDependentFieldForListView('', $filter_fields);
				$data[$dataIndex] = $temp->get_list_view_data($filter_fields);
                $data[$dataIndex] = $this->formatRowDates($temp, $data[$dataIndex]);

                if($temp->isFavoritesEnabled()){
					$data[$dataIndex]['star'] = SugarFavorites::generateStar(!empty($row['my_favorite']), $temp->module_dir, $temp->id);
				}

				$temp->ACLFilterFieldList($data[$dataIndex]);
                //Preventing multiple (same) ACLAccess calls
                $tempACL['EditView'] = $temp->ACLAccess('EditView');
                $tempACL['DetailView'] = $temp->ACLAccess('DetailView');

                $pageData['rowAccess'][$dataIndex] = array('view' => $tempACL['DetailView'], 'edit' => $tempACL['EditView']);
                $additionalDetailsAllow = $this->additionalDetails && $tempACL['DetailView'] && !empty($additionalDetailsFile);
			    //if($additionalDetailsAllow) $pageData['additionalDetails'] = array();
			    $additionalDetailsEdit = $tempACL['EditView'];
				if($additionalDetailsAllow) {
                    if($this->additionalDetailsAjax) {
					   $ar = $this->getAdditionalDetailsAjax($data[$dataIndex]['ID']);
                    }
                    else {
                        require_once $additionalDetailsFile;
                        $ar = $this->getAdditionalDetails($data[$dataIndex],
                                    (empty($this->additionalDetailsFunction) ? 'additionalDetails' : $this->additionalDetailsFunction) . $this->seed->object_name,
                                    $additionalDetailsEdit);
                    }
                    $pageData['additionalDetails'][$dataIndex] = $ar['string'];
                    $pageData['additionalDetails']['fieldToAddTo'] = $ar['fieldToAddTo'];
                }
                next($rows);
            }
        }
        $nextOffset = -1;
        $prevOffset = -1;
        $endOffset = -1;
        if($count > $limit) {
            $nextOffset = $offset + $limit;
        }

        if($offset > 0) {
            $prevOffset = $offset - $limit;
            if($prevOffset < 0)$prevOffset = 0;
        }
        $totalCount = $count + $offset;

        if( $count >= $limit && $totalCounted){
            $totalCount  = $this->getTotalCount($main_query);
        }
        SugarVCR::recordIDs($this->seed->module_dir, array_keys($idIndex), $offset, $totalCount);
        $module_names = array(
            'Prospects' => 'Targets'
        );
        $endOffset = (floor(($totalCount - 1) / $limit)) * $limit;
        $pageData['ordering'] = $order;
        $pageData['ordering']['sortOrder'] = $this->getReverseSortOrder($pageData['ordering']['sortOrder']);
        //get url parameters as an array
        $pageData['queries'] = $this->generateQueries($pageData['ordering']['sortOrder'], $offset, $prevOffset, $nextOffset,  $endOffset, $totalCounted);
        //join url parameters from array to a string
        $pageData['urls'] = $this->generateURLS($pageData['queries']);
        $pageData['offsets'] = array( 'current'=>$offset, 'next'=>$nextOffset, 'prev'=>$prevOffset, 'end'=>$endOffset, 'total'=>$totalCount, 'totalCounted'=>$totalCounted);
        $pageData['bean'] = array(
            'objectName' => $seed->object_name,
            'moduleDir' => $seed->module_dir,
            'moduleName' => strtr($seed->module_dir, $module_names),
            'moduleTitle' => isset($seed->module_title) ? $seed->module_title : null,
            'parentTitle' => isset($seed->parent_title) ? $seed->parent_title : null,
            'parentModuleDir' => isset($seed->parent_module_dir) ? $seed->parent_module_dir : null,
            'createAction' => isset($seed->create_action) ? $seed->create_action : 'EditView',
            'showLink' => isset($seed->show_link) ? $seed->show_link : null,
            'importable' => $seed->importable
        );
        $pageData['stamp'] = $this->stamp;
        $pageData['access'] = array('view' => $this->seed->ACLAccess('DetailView'), 'edit' => $this->seed->ACLAccess('EditView'));
        $pageData['idIndex'] = $idIndex;
        if(!$seedACL['ListView']) {
            $pageData['error'] = 'ACL restricted access';
        }

        $searchString = '';

        if( isset($_REQUEST["searchFormTab"]) && $_REQUEST["searchFormTab"] == "advanced_search" ||
        	isset($_REQUEST["type_basic"]) && (count($_REQUEST["type_basic"] > 1) || $_REQUEST["type_basic"][0] != "") ||
        	isset($_REQUEST["module"]) && $_REQUEST["module"] == "MergeRecords")
        {
            $searchString = "-advanced_search";
        }
        else if (isset($_REQUEST["searchFormTab"]) && $_REQUEST["searchFormTab"] == "basic_search")
        {
            if ($seed->module_dir == "Reports") {
                $searchMetaData = SearchFormReports::retrieveReportsSearchDefs();
            } else {
                $searchMetaData = method_exists('SearchForm','retrieveSearchDefs') ? SearchForm::retrieveSearchDefs($seed->module_dir) : array();
            }

            $basicSearchFields = array();

            if( isset($searchMetaData['searchdefs']) && isset($searchMetaData['searchdefs'][$seed->module_dir]['layout']['basic_search']) )
                $basicSearchFields = $searchMetaData['searchdefs'][$seed->module_dir]['layout']['basic_search'];

            foreach( $basicSearchFields as $basicSearchField)
            {
                $field_name = (is_array($basicSearchField) && isset($basicSearchField['name'])) ? $basicSearchField['name'] : $basicSearchField;
                $field_name .= "_basic";
                if( isset($_REQUEST[$field_name])  && ( !is_array($basicSearchField) || !isset($basicSearchField['type']) || $basicSearchField['type'] == 'text' || $basicSearchField['type'] == 'name') )
                {
                    $searchString = $this->request->getValidInputRequest($field_name);
                    break;
                }
            }
        }


        return array('data'=>$data , 'pageData'=>$pageData, 'query' => $searchString);
	}


    /**
     * generates urls as a string for use by the display layer
     *
     * @param array $queries
     * @return array of urls orderBy and baseURL are always returned the others are only returned  according to values passed in.
     */
    protected function generateURLS($queries)
    {
        foreach ($queries as $name => $value)
        {
            $queries[$name] = 'index.php?' . http_build_query($value);
        }
        $this->base_url = $queries['baseURL'];
        return $queries;
    }

    /**
     * generates queries for use by the display layer
     *
     * @param int $sortOrder
     * @param int $offset
     * @param int $prevOffset
     * @param int $nextOffset
     * @param int $endOffset
     * @param int $totalCounted
     * @return array of queries orderBy and baseURL are always returned the others are only returned  according to values passed in.
     */
    protected function generateQueries($sortOrder, $offset, $prevOffset, $nextOffset, $endOffset, $totalCounted)
    {
        $queries = array();
        $queries['baseURL'] = $this->getBaseQuery();
        $queries['baseURL']['lvso'] = $sortOrder;

        $queries['orderBy'] = $queries['baseURL'];
        $queries['orderBy'][$this->var_order_by] = '';
        // Do not send entryPoint for sorting URLs
        unset($queries['orderBy']['entryPoint']);

        if($nextOffset > -1)
        {
            $queries['nextPage'] = $queries['baseURL'];
            $queries['nextPage'][$this->var_offset] = $nextOffset;
        }
        if($offset > 0)
        {
            $queries['startPage'] = $queries['baseURL'];
            $queries['startPage'][$this->var_offset] = 0;
        }
        if($prevOffset > -1)
        {
            $queries['prevPage'] = $queries['baseURL'];
            $queries['prevPage'][$this->var_offset] = $prevOffset;
        }
        if($totalCounted)
        {
            $queries['endPage'] = $queries['baseURL'];
            $queries['endPage'][$this->var_offset] = $endOffset;
        }
        else
        {
            $queries['endPage'] = $queries['baseURL'];
            $queries['endPage'][$this->var_offset] = 'end';
        }
        return $queries;
    }

	/**
	 * generates the additional details span to be retrieved via ajax
	 *
	 * @param GUID id id of the record
	 * @return array string to attach to field
	 */
	function getAdditionalDetailsAjax($id)
    {
        global $app_strings;

        $jscalendarImage = SugarThemeRegistry::current()->getImageURL('info_inline.gif');

        $extra = "<span id='adspan_" . $id . "' "
                . "onclick=\"lvg_dtails('$id')\" "
				. " style='position: relative;'><!--not_in_theme!--><img vertical-align='middle' class='info' border='0' alt='".$app_strings['LBL_ADDITIONAL_DETAILS']."' src='$jscalendarImage'></span>";

        return array('fieldToAddTo' => $this->additionalDetailsFieldToAdd, 'string' => $extra);
	}

    /**
     * generates the additional details values
     *
     * @param array $fields
     * @param string $adFunction
     * @param boolean $editAccess
     * @return array string to attach to field
     */
    function getAdditionalDetails($fields, $adFunction, $editAccess)
    {
        global $app_strings;
        global $mod_strings;

        $results = $adFunction($fields);

        $results['string'] = str_replace(array("&#039", "'"), '\&#039', $results['string']); // no xss!

        if(trim($results['string']) == '')
        {
            $results['string'] = $app_strings['LBL_NONE'];
        }
         	$close = false;
            $extra = "<img alt='{$app_strings['LBL_INFOINLINE']}' style='padding: 0px 5px 0px 2px' border='0' onclick=\"SUGAR.util.getStaticAdditionalDetails(this,'";

            $extra .= str_replace(array("\rn", "\r", "\n"), array('','','<br />'), $results['string']) ;
            $extra .= "','<div style=\'float:left\'>{$app_strings['LBL_ADDITIONAL_DETAILS']}</div><div style=\'float: right\'>";

	        if($editAccess && !empty($results['editLink']))
	        {
	            $extra .=  "<a title=\'{$app_strings['LBL_EDIT_BUTTON']}\' href={$results['editLink']}><img style=\'margin-left: 2px;\' border=\'0\' src=\'".SugarThemeRegistry::current()->getImageURL('edit_inline.png')."\'></a>";
	            $close = true;
	        }
	        $close = (!empty($results['viewLink'])) ? true : $close;
	        $extra .= (!empty($results['viewLink']) ? "<a title=\'{$app_strings['LBL_VIEW_BUTTON']}\' href={$results['viewLink']}><img style=\'margin-left: 2px;\' border=\'0\' src=".SugarThemeRegistry::current()->getImageURL('view_inline.png')."></a>" : '');

            if($close == true) {
            	$closeVal = "true";
            	$extra .=  "<a title=\'{$app_strings['LBL_ADDITIONAL_DETAILS_CLOSE_TITLE']}\' href=\'javascript: SUGAR.util.closeStaticAdditionalDetails();\'><img style=\'margin-left: 2px;\' border=\'0\' src=\'".SugarThemeRegistry::current()->getImageURL('close.png')."\'></a>";
            } else {
            	$closeVal = "false";
            }
            $extra .= "',".$closeVal.")\" src='".SugarThemeRegistry::current()->getImageURL('info_inline.png')."' class='info'>";

        return array('fieldToAddTo' => $results['fieldToAddTo'], 'string' => $extra);
    }

    private function formatRowDates(SugarBean $bean, array $row) : array
    {
        foreach ($bean->field_defs as $name => $field_def) {
            $nameUpper = strtoupper($name);

            if (!isset($row[$nameUpper])) {
                continue;
            }

            $row[$nameUpper] = ViewDateFormatter::format($field_def['type'], $row[$nameUpper]);
        }

        return $row;
    }
}
