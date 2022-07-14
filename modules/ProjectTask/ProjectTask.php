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

class ProjectTask extends SugarBean {
	// database table columns
	var $id;
	var $date_entered;
	var $date_modified;
	var $team_id;
	var $name;
    var $description;
    var $project_id;
    var $project_task_id;
    var $date_start;
    var $date_finish;
    var $duration;
    var $duration_unit;
    var $percent_complete;
    var $parent_task_id;
    var $predecessors;
    var $resource_id;
    var $resource_name;
    var $priority;

	// related information
	var $assigned_user_name;
	var $parent_name;
	var $depends_on_name;
	var $email_id;
	var $team_name;

	var $table_name = 'project_task';
	var $object_name = 'ProjectTask';
	var $module_dir = 'ProjectTask';

	var $new_schema = true;

	var $relationship_fields = array(
		'email_id' => 'emails',
	);

    /**
     * @var bool skip updating parent percent complete
     */
    protected $_skipParentUpdate = false;

	//////////////////////////////////////////////////////////////////
	// METHODS
	//////////////////////////////////////////////////////////////////

	/*
	 *
	 */
	public function __construct($init=true)
	{
		parent::__construct();
		if ($init && empty($GLOBALS['installing'])) {

			// default value for a clean instantiation
			$this->utilization = 100;

			global $current_user;
			if(empty($current_user))
			{
                $this->assigned_user_id = '1';
				$admin_user = BeanFactory::getBean('Users', $this->assigned_user_id);
				$this->assigned_user_name = $admin_user->user_name;
			}
			else
			{
				$this->assigned_user_id = $current_user->id;
				$this->assigned_user_name = $current_user->user_name;
			}

			global $current_user;
			if(!empty($current_user)) {
				$this->team_id = $current_user->default_team;	//default_team is a team id
			} else {
				$this->team_id = 1; // make the item globally accessible
			}
		}
	}
    /**
     * @param bool $skip updating parent percent complete
     */
    public function skipParentUpdate($skip = true)
    {
        $this->_skipParentUpdate = $skip;
    }
	function save($check_notify = FALSE)
	{
		//Bug 46012.  When saving new Project Tasks instance in a workflow, make sure we set a project_task_id value
		//associated with the Project if there is no project_task_id specified.
        if ($this->in_workflow && empty($this->id) && empty($this->project_task_id) && !empty($this->project_id))
        {
            $this->project_task_id = $this->getNumberOfTasksInProject($this->project_id) + 1;
        }

        $id = parent::save($check_notify);
        if($this->_skipParentUpdate == false)
        {
            $this->updateStatistic();
        }
        return $id;
	}

	/**
	 * overriding the base class function to do a join with users table
	 */

	/*
	 *
	 */
   function fill_in_additional_detail_fields()
   {
       parent::fill_in_additional_detail_fields();
       $this->project_name = $this->_get_project_name($this->project_id);
       $this->resource_name = $this->getResourceName();
   }

	/*
	 *
	 */
   function fill_in_additional_list_fields()
   {
      $this->fill_in_additional_detail_fields();
   }

	/*
	 *
	 */
	function get_summary_text()
	{
		return $this->name;
	}

	/*
	 *
	 */
	function _get_depends_on_name($depends_on_id)
	{
		$return_value = '';

		$query  = "SELECT name, assigned_user_id FROM {$this->table_name} WHERE id='{$depends_on_id}'";
		$result = $this->db->query($query,true," Error filling in additional detail fields: ");
		$row = $this->db->fetchByAssoc($result);
		if($row != null)
		{
			$this->depends_on_name_owner = $row['assigned_user_id'];
			$this->depends_on_name_mod = 'ProjectTask';
			$return_value = $row['name'];
		}

		return $return_value;
	}

    function _get_project_name($project_id)
    {
        $return_value = '';

        $query  = "SELECT name, assigned_user_id FROM project WHERE id='{$project_id}'";
        $result = $this->db->query($query,true," Error filling in additional detail fields: ");
        $row = $this->db->fetchByAssoc($result);
        if($row != null)
        {
            $return_value = $row['name'];
        }

        return $return_value;
    }
	/*
	 *
	 */
	function _get_parent_name($parent_id)
	{
		$return_value = '';

		$query  = "SELECT name, assigned_user_id FROM project WHERE id='{$parent_id}'";
		$result = $this->db->query($query,true," Error filling in additional detail fields: ");
		$row = $this->db->fetchByAssoc($result);
		if($row != null)
		{
			$this->parent_name_owner = $row['assigned_user_id'];
			$this->parent_name_mod = 'Project';
			$return_value = $row['name'];
		}

		return $return_value;
	}

	/*
	 *
	 */
	function build_generic_where_clause ($the_query_string)
	{
		$where_clauses = array();
		$the_query_string = $GLOBALS['db']->quote($the_query_string);
		array_push($where_clauses, "project_task.name like '$the_query_string%'");

		$the_where = "";
		foreach($where_clauses as $clause)
		{
			if($the_where != "") $the_where .= " or ";
			$the_where .= $clause;
		}

		return $the_where;
	}

	function get_list_view_data(){
        global $action, $currentModule, $current_language, $focus, $app_list_strings, $timedate, $locale;
        $current_module_strings = return_module_language($current_language, 'ProjectTask');
		$today = $timedate->handle_offset(date($GLOBALS['timedate']->get_db_date_time_format(), time()), $timedate->dbDayFormat, true);
		$task_fields =$this->get_list_view_array();
        if (isset($this->parent_type))
			$task_fields['PARENT_MODULE'] = $this->parent_type;

        if ( !isset($task_fields["FIRST_NAME"]) )
            $task_fields["FIRST_NAME"] = '';
        if ( !isset($task_fields["LAST_NAME"]) )
            $task_fields["LAST_NAME"] = '';
        $task_fields['CONTACT_NAME'] = trim($locale->getLocaleFormattedName($task_fields["FIRST_NAME"], $task_fields["LAST_NAME"]));
		$task_fields['TITLE'] = '';
		if (!empty($task_fields['CONTACT_NAME'])) {
            $task_fields['TITLE'] .= ($current_module_strings['LBL_LIST_CONTACT'] ?? 'LBL_LIST_CONTACT')
                . ": " . $task_fields['CONTACT_NAME'];
		}

		return $task_fields;
	}

	function bean_implements($interface){
		switch($interface){
			case 'ACL':return true;
		}
		return false;
	}
	function listviewACLHelper(){
		$array_assign = parent::listviewACLHelper();
		$is_owner = false;
		if(!empty($this->parent_name)){

			if(!empty($this->parent_name_owner)){
				global $current_user;
				$is_owner = $current_user->id == $this->parent_name_owner;
			}
		}
			if(ACLController::checkAccess('Project', 'view', $is_owner)){
				$array_assign['PARENT'] = 'a';
			}else{
				$array_assign['PARENT'] = 'span';
			}
		$is_owner = false;
		if(!empty($this->depends_on_name)){

			if(!empty($this->depends_on_name_owner)){
				global $current_user;
				$is_owner = $current_user->id == $this->depends_on_name_owner;
			}
		}
			if( ACLController::checkAccess('ProjectTask', 'view', $is_owner)){
				$array_assign['PARENT_TASK'] = 'a';
			}else{
				$array_assign['PARENT_TASK'] = 'span';
			}

		return $array_assign;
	}

    public function create_new_list_query(
        $order_by,
        $where,
        $filter = array(),
        $params = array(),
        $show_deleted = 0,
        $join_type = '',
        $return_array = false,
        $parentbean = null,
        $singleSelect = false,
        $ifListForExport = false
    ) {
        if (isset($filter['resource_name']) && $filter['resource_name'] !== false) {
            $filter['resource_id'] = true;
        }
        return parent::create_new_list_query(
            $order_by,
            $where,
            $filter,
            $params,
            $show_deleted,
            $join_type,
            $return_array,
            $parentbean,
            $singleSelect,
            $ifListForExport
        );
    }

    function getResourceName($resource_id = '')
    {
        //if resource is is not passed in then get it from current bean
        if (empty($resource_id)) {
            $resource_id = $this->resource_id;
        }
        $db = DBManagerFactory::getInstance();
        $resourceType = $db->getConnection()
            ->executeQuery(
                'SELECT DISTINCT resource_type FROM project_resources WHERE resource_id = ?',
                [$resource_id]
            )->fetchOne();
        if (false !== $resourceType) {
            if (empty($resourceType)) {
                return '&nbsp;';
            }
            $resourceBean = BeanFactory::newBean($resourceType);
            if (!$resourceBean instanceof SugarBean) {
                return '&nbsp;';
            }
            $resourceTableName = $resourceBean->getTableName();
            $resource = $db->concat($resourceTableName, array('first_name', 'last_name'));
            return $db->getConnection()
                ->executeQuery(
                    "SELECT {$resource} as resource_name FROM {$resourceTableName} WHERE id = ?",
                    [$resource_id]
                )->fetchOne();
        } else {
            return '';
        }
    }


    /**
    * This method recalculates the percent complete of a parent task
    */
    public function updateParentProjectTaskPercentage()
	{

		if (empty($this->parent_task_id))
		{
			return;
		}

		if (!empty($this->project_id))
		{
            //determine parent task
            $parentProjectTask = $this->getProjectTaskParent();

            //get task children
            if ($parentProjectTask)
            {
                $subProjectTasks = $parentProjectTask->getAllSubProjectTasks();
                $tasks = array();
                foreach($subProjectTasks as &$task)
                {
                    array_push($tasks, $task->toArray());
                }
                $parentProjectTask->percent_complete = $this->_calculateCompletePercent($tasks);
                unset($tasks);
                $parentProjectTask->save(isset($GLOBALS['check_notify']) ? $GLOBALS['check_notify'] : '');
            }
		}
	}

    /**
     * Calculate percent complete for parent task based on it's children tasks
     * @param $subProjectTasks mixed Array of children tasks
     * @return int percent complete
     */
    private function _calculateCompletePercent(&$subProjectTasks)
    {
        $totalHours = 0;
        $cumulativeDone = 0;
        //update cumulative calculation - mimics gantt calculation
        foreach ($subProjectTasks as $key => &$value)
        {
            if ($value['duration'] == "")
            {
                $value['duration'] = 0;
            }

            if ($value['percent_complete'] == "")
            {
                $value['percent_complete'] = 0;
            }

            if ($value['duration_unit'] == "Hours")
            {
                $totalHours += $value['duration'];
                $cumulativeDone += $value['duration'] * ($value['percent_complete'] / 100);
            }
            else
            {
                $totalHours += ($value['duration'] * 8);
                $cumulativeDone += ($value['duration'] * 8) * ($value['percent_complete'] / 100);
            }
        }

        $cumulativePercentage = 0;
        if ($totalHours != 0)
        {
            $cumulativePercentage = round(($cumulativeDone/$totalHours) * 100);
        }
        return $cumulativePercentage;
    }

    /**
    * Retrieves the parent project task of a project task
    * returns project task bean
    */
    function getProjectTaskParent()
    {

        $projectTaskParent=false;

        if (!empty($this->parent_task_id) && !empty($this->project_id))
        {
            $query = "SELECT id FROM project_task WHERE project_id = '{$this->project_id}' AND project_task_id = '{$this->parent_task_id}' AND deleted = 0 ORDER BY date_modified DESC";
            $project_task_id = $this->db->getOne($query, true, "Error retrieving parent project task");

            if (!empty($project_task_id))
            {
                $projectTaskParent = BeanFactory::getBean('ProjectTask', $project_task_id);
            }
        }

        return $projectTaskParent;
    }

    /**
    * Retrieves all the child project tasks of a project task
    * returns project task bean array
    */
    function getAllSubProjectTasks()
    {
		$projectTasksBeans = array();

        if (!empty($this->project_task_id) && !empty($this->project_id))
		{
            //select all tasks from a project
            $query = "SELECT id, project_task_id, parent_task_id FROM project_task WHERE project_id = '{$this->project_id}' AND deleted = 0 ORDER BY project_task_id";

            $result = $this->db->query($query, true, "Error retrieving child project tasks");

            $projectTasks=array();
            while($row = $this->db->fetchByAssoc($result))
            {
                $projectTasks[$row['id']]['project_task_id'] = $row['project_task_id'];
                $projectTasks[$row['id']]['parent_task_id'] = $row['parent_task_id'];
            }

            $potentialParentTaskIds[$this->project_task_id] = $this->project_task_id;
            $actualParentTaskIds=array();
            $subProjectTasks=array();

            $startProjectTasksCount=0;
            $endProjectTasksCount=0;

            //get all child tasks
            $run = true;
            while ($run)
            {
                $count=0;

                foreach ($projectTasks as $id=>$values)
                {
                    if (in_array($values['parent_task_id'], $potentialParentTaskIds))
                    {
                        $potentialParentTaskIds[$values['project_task_id']] = $values['project_task_id'];
                        $actualParentTaskIds[$values['parent_task_id']] = $values['parent_task_id'];

                        $subProjectTasks[$id]=$values;
                        $count=$count+1;
                    }
                }

                $endProjectTasksCount = count($subProjectTasks);

                if ($startProjectTasksCount == $endProjectTasksCount)
                {
                    $run = false;
                }
                else
                {
                    $startProjectTasksCount = $endProjectTasksCount;
                }
            }

            foreach($subProjectTasks as $id=>$values)
            {
                //ignore tasks that are parents
                if(!in_array($values['project_task_id'], $actualParentTaskIds))
                {
                    $projectTaskBean = BeanFactory::getBean('ProjectTask', $id);
                    array_push($projectTasksBeans, $projectTaskBean);
                }
            }
		}

		return $projectTasksBeans;
	}


	/**
	 * getNumberOfTasksInProject
	 *
	 * Returns the count of project_tasks for the given project_id
	 *
	 * This is a private helper function to get the number of project tasks for a given project_id.
	 *
	 * @param $project_id integer value of the project_id associated with this ProjectTask instance
	 * @return total integer value of the count of project tasks, 0 if none found
	 */
    private function getNumberOfTasksInProject($project_id='')
    {
    	if(!empty($project_id))
    	{
	        $query = "SELECT count(project_task_id) AS total FROM project_task WHERE project_id = '{$project_id}'";
	        $result = $this->db->query($query, true);
	        if($result)
	        {
		        $row = $this->db->fetchByAssoc($result);
		        if(!empty($row['total']))
		        {
		           return $row['total'];
		        }
	        }
    	}
        return 0;
    }

    /**
     * Update percent complete for project tasks with children tasks based on children's values
     */
    public function updateStatistic()
    {
        /**
         * @var array Array of tasks for current project
         */
        $list = array();
        /**
         * @var array Key-value array of project_task_id => parent_task_id
         */
        $tree = array();
        /**
         * @var array Array with nodes which have childrens
         */
        $nodes = array();
        /**
         * @var array Array with IDs of list which have been changed
         */
        $changed = array();

        $db = DBManagerFactory::getInstance();
        $this->disable_row_level_security = true;
        $query = $this->create_new_list_query('', "project_id = {$db->quoted($this->project_id)}");
        $this->disable_row_level_security = false;
        $res = $db->query($query);
        while($row = $db->fetchByAssoc($res))
        {
            array_push($list, $row);
        }
        // fill in $tree
        foreach($list as $k => &$v)
        {
            if(isset($v['project_task_id']) && $v['project_task_id'] != '')
            {
                $tree[$v['project_task_id']] = $v['parent_task_id'];
                if(isset($v['parent_task_id']) && $v['parent_task_id'])
                {
                    if(!isset($nodes[$v['parent_task_id']]))
                    {
                        $nodes[$v['parent_task_id']] = 1;
                    }
                }
            }
        }
        unset($v);
        // fill in $nodes array
        foreach($nodes as $k => &$v)
        {
            $run = true;
            $i = $k;
            while($run)
            {
                if(isset($tree[$i]) &&  $tree[$i]!= '')
                {
                    $i = $tree[$i];
                    $v++;
                }
                else
                {
                    $run = false;
                }
            }
        }
        arsort($nodes);
        unset($v);
        // calculating of percentages and comparing calculated value with database one
        foreach($nodes as $k => &$v)
        {
            $currRow = null;
            $currChildren = array();
            $run = true;
            $tmp = array();
            $i = $k;
            while($run)
            {
                foreach($list as $id => &$taskRow)
                {
                    if($taskRow['project_task_id'] == $i && $currRow === null)
                    {
                        $currRow = $id;
                    }
                    if($taskRow['parent_task_id'] == $i)
                    {
                        if(!in_array($taskRow['project_task_id'], array_keys($nodes)))
                        {
                            array_push($currChildren, $taskRow);
                        }
                        else
                        {
                            array_push($tmp, $taskRow['project_task_id']);
                        }
                    }
                }
                unset($taskRow);
                if(count($tmp) == 0)
                {
                    $run = false;
                }
                else
                {
                    $i = array_shift($tmp);
                }
            }
            $subres = $this->_calculateCompletePercent($currChildren);
            if($subres != $list[$currRow]['percent_complete'])
            {
                $list[$currRow]['percent_complete'] = $subres;
                array_push($changed, $currRow);
            }
        }
        unset($v);
        // updating data in database for changed tasks
        foreach($changed as $k => &$v)
        {
            $task = BeanFactory::newBean('ProjectTask');
            $task->populateFromRow($list[$v]);
            $task->skipParentUpdate();
            $task->save(false);
        }
    }

    public function updateRelatedCalcFields($linkName = "")
    {
        parent::updateRelatedCalcFields($linkName);
        if ($linkName == 'projects' && !$this->project_id && $this->deleted != 1) {
            $this->mark_deleted($this->id);
        }
    }
}

function getUtilizationDropdown($focus, $field, $value, $view) {
	global $app_list_strings;

	if($view == 'EditView') {
		global $app_list_strings;
        $html = '<select name="'.$field.'">';
        $html .= get_select_options_with_id($app_list_strings['project_task_utilization_options'], $value);
        $html .= '</select>';
        return $html;
    }

    return translate('project_task_utilization_options', '', $focus->$field);
}
?>
