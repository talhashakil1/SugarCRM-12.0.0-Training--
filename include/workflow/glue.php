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

require_once('include/workflow/workflow_utils.php');



class WorkFlowGlue {
    /** @var DBManager */
	var $db;

	var $shell_object;
	var $past_object;
	var $future_object;

	var $alert_meta_data;
	var $action_meta_data;
	var $trigger_meta_data;
	var $plugin_meta_data;

	var $eval = "";

	var $operator_array = array(
        'Equals' => '==',
        'Is empty' => '==',
        'Less Than' => '<',
        'More Than' => '>',
        'Does not Equal' => '!=',
        'Is not empty' => '!=',
    );
    var $translateOperators = array(
        'Is empty' => 'LBL_IS_EMPTY',
        'Is not empty' => 'LBL_IS_NOT_EMPTY',
    );


    public function __construct()
    {
		global $db;
		$this->db = & $db;

	}

    public function translateOperator($operatorName) 
    {
        foreach ($this->translateOperators as $key => $value) 
        {
            if (translate($value) == $operatorName)
            {
                return $this->operator_array[$key];
            }
        }
        return $this->operator_array[$operatorName];
    }

    /**
     * Generates field equality comparison PHP code
     *
     * @param WorkFlowTriggerShell $shell_object
     * @param bool $is_equal
     * @return string
     */
    private function getCompareText($shell_object, $is_equal)
    {
        global $dictionary;

        $parentWorkflow = $shell_object->get_workflow_type();
        if (empty($parentWorkflow->base_module)) {
            $GLOBALS['log']->error(
                "WorkFlowTriggerShell ({$shell_object->id}) " .
                "parent WorkFlow ({$parentWorkflow->id}) has no base module set."
            );
        }

        $useStrict = true;

        $moduleName = $parentWorkflow->base_module;
        $objectName = BeanFactory::getObjectName($moduleName);
        $field = $shell_object->field;
        VardefManager::loadVardef($moduleName, $objectName);

        if (!empty($dictionary[$objectName]) && !empty($dictionary[$objectName]['fields'][$field])) {
            $vardef = $dictionary[$objectName]['fields'][$field];

            // Don't use strict for numerical types
            if (!empty($vardef['type']) && (in_array($vardef['type'], array('currency', 'double', 'int')))) {
                $useStrict = false;
            }

            // Use to_display_date for Date fields
            if (!empty($vardef['type']) && (in_array($vardef['type'], array('date')))) {
                $dateTimeFunction = 'to_display_date';
            }
            // Use to_display_date_time for DateTime fields
            if (!empty($vardef['type']) && (in_array($vardef['type'], array('datetime', 'datetimecombo')))) {
                $dateTimeFunction = 'to_display_date_time';
            }
        }

        $sep = $is_equal ? '==' : '!=';
        if ($useStrict) {
            $sep .= '=';
        }

        $equalityCheck = "\$focus->fetched_row['" . $field . "'] " . $sep . " \$focus->" . $field;

        if (!empty($dateTimeFunction)) {
            $equalityCheck = "\$GLOBALS['timedate']->{$dateTimeFunction}(\$focus->fetched_row['" . $field . "'])"
                . " $sep "
                . "\$GLOBALS['timedate']->{$dateTimeFunction}(\$focus->" . $field . ")";
        }

        // Due to sidecar pushing unchanged fields, we need a check when that happens
        if (!$is_equal) {
            $equalityCheck .= " && !(\$focus->fetched_row['" . $field . "'] === null && strlen(\$focus->" . $field . ") === 0)";
        }

        return ' (isset($focus->' . $field . ')'
            . ' && (empty($focus->fetched_row)'
            . ' || (array_key_exists(' . var_export($field, true) . ', $focus->fetched_row)'
            . ' && ' . $equalityCheck . ')))';
    }

	function glue_normal_compare_change(& $shell_object){

		if(empty($this->temp_eval)) $this->temp_eval = "";



        $this->temp_eval .= $this->getCompareText($shell_object, false);


		return $this->temp_eval;

	//end function glue_normal_compare_change
	}

    /**
     * Generate the clauses for 'field does not change for ...'
     *
     * @param WorkFlowTriggerShell $shellObject
     * @return string
     */
    public function glue_normal_compare_any_time($shellObject)
    {
        if (empty($this->temp_eval)) {
            $this->temp_eval = "";
        }

        $this->temp_eval .= " ( ";
        $this->temp_eval .= $this->getCompareText($shellObject, true);
        $this->temp_eval .= ' || !isset($focus->' . $shellObject->field . ')';
        $this->temp_eval .= " ) || ( ";

        $this->temp_eval .= "isset(\$_SESSION['workflow_parameters']['$shellObject->parent_id'])
		    && \$_SESSION['workflow_parameters']['$shellObject->parent_id'] == \$focus->" . $shellObject->field . " \n";

        $this->temp_eval .= " && !empty(\$_SESSION['workflow_cron']) && \$_SESSION['workflow_cron']==\"Yes\"";
        $this->temp_eval .= " ) ";

        return $this->temp_eval;
    }

	function glue_normal_type(& $shell_object, & $past_object, & $future_object){
		$this->shell_object = $shell_object;
		$this->past_object = $past_object;
		$this->future_object = $future_object;

		if(empty($this->temp_eval)) $this->temp_eval = "";

		//Past component?
		if(!empty($this->past_object->id) && $this->past_object->id!=""){

			$this->temp_eval .= $this->glue_normal_expression($past_object);
			$this->temp_eval .= "&& \n";
		//end if past component is present
		} else {
		//Need to make sure the future state was not the past state
			//call the expression building function
			//dwheeler. bug 19581, multienum is a special case in that its "inverse" being false does not mean its positive is true
			//We only want to verify that the value did change, not the the old value was not in the set
			if($future_object->operator=="in" || $future_object->operator=="not_in"){
				$this->temp_eval .= "(\$focus->fetched_row['{$future_object->lhs_field}'] != \$focus->{$future_object->lhs_field})";
			} else {
				$this->temp_eval .= $this->glue_normal_expression($future_object, true);
			}
			$this->temp_eval .= " && \n";
		//handle compare future to past if no past expression exists
		}

		//Handle future component
		$this->temp_eval .= $this->glue_normal_expression($future_object);

		return $this->temp_eval;

	//end function glue_normal_type
	}

	function glue_time_type($shell_object, $future_object){
		$this->shell_object = $shell_object;
		$this->future_object = $future_object;

		if(empty($this->temp_eval)) $this->temp_eval = "";

			$this->temp_eval .= " ( ";
			//Need to make sure the future state was not the past state
			//call the expression building function

			if(
				$future_object->exp_type!="datetime" &&
				$future_object->exp_type!="date" &&
				$future_object->exp_type!="datetimecombo"
			){
			$this->temp_eval .= $this->glue_normal_expression($future_object, true);
			$this->temp_eval .= " && \n";

			}

			$this->temp_eval .= $this->glue_normal_expression($future_object, false, true);
			$this->temp_eval .= " ) ";


			$this->temp_eval .= " || ";

			///Time Condition
			//Handle the way of coming here, with session time cron
			$this->temp_eval .= " ( ";


			$this->temp_eval .= $this->glue_normal_expression($future_object);

			$this->temp_eval .= " && !empty(\$_SESSION['workflow_cron']) && \$_SESSION['workflow_cron']==\"Yes\"";
			$this->temp_eval .= " ) ";


		return $this->temp_eval;

	//end function glue_time_type
	}


	function glue_enum_multi($parent_type, & $type_object){
			$eval_string = "";

			$enum_multi_array = unencodeMultienum($type_object->rhs_value);

			$enum_multi_start = true;
			//rrs - bug 10066
			foreach($enum_multi_array as $key => $value){

				if($enum_multi_start!=true){
					if($type_object->operator == "not_in")
						$eval_string .=" && \n";
					else
						$eval_string .=" || \n";
				}
				$eval_string .= "( ";
				if($type_object->operator == "not_in")
					$eval_string .= "!";
				$eval_string .= "in_array(";

				$eval_string .= " '$value',";
				if($parent_type=="past"){
					$eval_string .= "unencodeMultienum(\$focus->fetched_row['".$type_object->lhs_field."']) ";
				} else {
					$eval_string .= "unencodeMultienum(\$focus->".$type_object->lhs_field.") ";
				}
				$eval_string .= ") )";

				$enum_multi_start = false;

			//end foreach
			}
		return $eval_string;

	//end function glue_enum_multi
	}


	function glue_bool($parent_type, & $type_object){

		$eval_string = "";

		$op = $this->operator_array[$type_object->operator];
		if($op == '==' || $op == "!=") {
		    $op .= '='; // Bug 42923: use exact conditions for booleans
		}

		if($type_object->rhs_value=="bool_true"){
		//bool true
		    $values = array('true', "'true'", "'on'", '1', "'1'");
		} else {
		//bool false
		    $values = array('false', "'false'", "'off'", '0', "'0'");
		    $bool_1 = 'false';
			$bool_2	= 'off';
			$bool_3 = '0';
		}
        $evals = array();
        foreach($values as $value) {
            $evals[] = " \t\t".build_source_array($parent_type, $type_object->lhs_field)." $op $value";
        }
		$eval_string = "\n \t ( \n".join(" ||\n", $evals)."\n \t )  \n";

		return $eval_string;
	//end function glue_bool
	}

	function glue_date($parent_type, & $type_object, $include_same_compare=false){
		$eval_string = "";

		$eval_string .= "\n \t ( \n";
		$eval_string .= " ".build_source_array($parent_type, $type_object->lhs_field);
		$eval_string .= " !='' && ";
		$eval_string .= " ".build_source_array($parent_type, $type_object->lhs_field);

		if($type_object->exp_type=='date'){
		$eval_string .= " !='0000-00-00' ";
            $datetimeFunction = 'fromDbDate';
		}
		if($type_object->exp_type=='datetime'  || $type_object->exp_type == 'datetimecombo'){
			$eval_string .= " !='0000-00-00 00:00:00' ";
            $datetimeFunction = 'fromDb';
		}

		//compensates if the user changes the field sometime later
		if($include_same_compare==true){
			$eval_string .= "\n && ".build_source_array("past", $type_object->lhs_field);

            // Bug # 45219 && Bug # 45125 - workflow breaks on future date fields
            if (strcmp($parent_type,"future")==0)
                $eval_string .= "!= \$focus->{$type_object->lhs_field}";
            else    // parent type = past
                $eval_string .= "!= ".build_source_array($parent_type, $type_object->lhs_field)." \n";
		}

		$eval_string .= ")  \n";
            if (in_array($type_object->exp_type, array('date', 'datetime', 'datetimecombo'))) {
            // rgonzalez Bug 50258, 50482 - date comparisons being improperly evaluated
            // Logic should be if LHS Field is MORE THAN x days old then the eval
            // should be $lhsfield < (time() - interval) [field timestamp LESS THAN
            // tinerval timestamp]. If the LHS Field is LESS THAN x days old, the eval
            // should be reversed, $lhsfield > (time() - interval) [field timestamp
            // GREATER THAN interval timestamp.
            $operator = $this->operator_array[$type_object->operator]=='<' ? '>' : '<';

            $eval_string .= ' && ' . sprintf(
                'TimeDate::getInstance()->%s($focus->%s)->getTimestamp()',
                $datetimeFunction,
                $type_object->lhs_field
            );
            $eval_string .= " $operator ";
            
            // Sign should be driven by point in time
            $sign = $parent_type == 'past' ? '+' : '-';
            $eval_string .= sprintf('(time() %s %s)', $sign, $type_object->ext1);
        }
		return $eval_string;

	//end function glue_date
	}

	function glue_normal_expression(& $type_object, $inverse=false, $include_same_compare=false){

		//Inverse is used to compare future values against itself.
		if($inverse==false){
			if($type_object->parent_type == "past_trigger"){
				$parent_type = "past";
			} else {
				$parent_type = "future";
			}


		} else {

			$parent_type = "past";
		}

		$eval_string = "";
		$express_evaluated = false;
		$right_value = $type_object->rhs_value;

			$eval_string .= " (";

			//if inverse is true
			if($inverse==true){
				$eval_string .= " !(";
			}
			$GLOBALS['log']->debug("CESELY SMITH OPERATOR: ". $type_object->operator);
			//Type Multi Enum
			if($type_object->operator=="in" || $type_object->operator=="not_in"){
				$eval_string .= $this->glue_enum_multi($parent_type, $type_object);
				$express_evaluated = true;
			//end if enum multi
			}

			//Type Boolean
			if ($type_object->exp_type=="bool"){
				$eval_string .= $this->glue_bool($parent_type, $type_object);
				$express_evaluated = true;
			//end if bool
			}

			//Type Datetime / Date
			if ($type_object->exp_type=="date" || $type_object->exp_type=="datetime" || $type_object->exp_type=="datetimecombo"){
				$eval_string .= $this->glue_date($parent_type, $type_object, $include_same_compare);
				$express_evaluated = true;
			//end if bool
			}

			//Area to add for other types

            // Type Encrypt
            if ($type_object->exp_type == 'encrypt')
            {
                $eval_string .= build_source_array($parent_type, $type_object->lhs_field);
                $eval_string .= " ".$this->operator_array[$type_object->operator]." ";
                $eval_string .= " " . $this->write_escape($type_object->encrpyt_before_save($right_value));
                $express_evaluated = true;
            }

			if($express_evaluated ==false){

				//use the variable, but from the past array

				$eval_string .= build_source_array($parent_type, $type_object->lhs_field);
				$eval_string .= " " . $this->translateOperator($type_object->operator) . " ";

				//escape the quotes as needed
				$eval_string .= " " . $this->write_escape($right_value);



			//end if expression has not been evaluated
			}

			//if inverse is true
			if($inverse==true){
				$eval_string .= " )";
			}

			$eval_string .= ")";




			return $eval_string;

	//end function glue_normal_expression
	}

///////////////////////ALERT GLUING FUNCTIONS/////////////////////////////





	function build_trigger_alerts($alertshell_id, $array_position_name){


		$this->alert_meta_data .= "'".$array_position_name."' => \n\n";
		$this->alert_meta_data .= "array ( \n\n";

		$this->alert_meta_data .= $this->build_alert_user_list($alertshell_id);

		$this->alert_meta_data .= "), \n\n";

	//end function build_trigger_alerts
	}

	function build_alert_user_list($alertshell_id){

		$alert_user_array = "";
		$user_alert_count = 0;

        $query = <<<SQL
SELECT * from workflow_alerts
WHERE workflow_alerts.deleted = '0'
AND workflow_alerts.parent_id = ?
SQL;
        $stmt = $this->db->getConnection()
            ->executeQuery($query, [$alertshell_id]);

		// Get the id and the name.
        foreach ($stmt as $row) {
			$user_array_name = "user_".$user_alert_count;

			$alert_user_array .= "\t '".$user_array_name."' => array ( \n\n";

			///Start - Add the user items

				$alert_user_array .= "\t\t 'user_type' => '".$row['user_type']."', \n";
				$alert_user_array .= "\t\t 'address_type' => '".$row['address_type']."', \n";
				$alert_user_array .= "\t\t 'array_type' => '".$row['array_type']."', \n";
				$alert_user_array .= "\t\t 'relate_type' => '".$row['relate_type']."', \n";
				$alert_user_array .= "\t\t 'field_value' => '".$row['field_value']."', \n";
				$alert_user_array .= "\t\t 'where_filter' => '".$row['where_filter']."', \n";
				$alert_user_array .= "\t\t 'rel_module1' => '".strtolower($row['rel_module1'])."', \n";
				$alert_user_array .= "\t\t 'rel_module2' => '".strtolower($row['rel_module2'])."', \n";
				$alert_user_array .= "\t\t 'rel_module1_type' => '".$row['rel_module1_type']."', \n";
				$alert_user_array .= "\t\t 'rel_module2_type' => '".$row['rel_module2_type']."', \n";
				$alert_user_array .= "\t\t 'rel_email_value' => '".$row['rel_email_value']."', \n";
				$alert_user_array .= "\t\t 'user_display_type' => '".$row['user_display_type']."', \n";


					if($row['user_type']=='rel_user_custom'){
						$this->compile_rel_filter($row['id'], "expression", "filter", $alert_user_array);
					}
					if($row['rel_module1_type']=="filter"){
						$this->compile_rel_filter($row['id'], "rel1_filter", "rel1_alert_fil", $alert_user_array);
					}
					if($row['rel_module2_type']=="filter"){
						$this->compile_rel_filter($row['id'], "rel2_filter", "rel2_alert_fil", $alert_user_array);
					}


					//End - Add user items

			$alert_user_array .= "\t ), \n\n";

			++$user_alert_count;

		//end while
		}

		return $alert_user_array;

	//end function build_alert_user_list
	}

	function start_alert_meta_array(){

		$this->alert_meta_data = "\$alert_meta_array = array ( \n\n";
	//end function start_alert_meta_array
	}

	function end_alert_meta_array(){

		$this->alert_meta_data .= "); \n\n";
	//end function end_alert_meta_array
	}



	function write_alert_meta_file($module){
		global $beanlist;

		$file = "modules/".$module."/workflow/alerts_array.php";
		$file = create_custom_directory($file);
		$dump = $this->alert_meta_data;
		$fp = sugar_fopen($file, 'wb');
		fwrite($fp,"<?php\n");
		fwrite($fp, "//Workflow Alert Meta Data Arrays \n");
		fwrite($fp, $dump);
		fwrite($fp, " \n");
		fwrite($fp, "\n?>");
		fclose($fp);

	//end function write_alert_meta_file
	}

    /**
     * Write out a file containing the set of alerts to be processed
     * @param module - the module to write the file for
     * @param contents - the contents of the file
     */
    function write_workflow_alerts_file($module, $contents){
        global $beanlist;
        if (!\BeanFactory::getBeanClass($module)) {
            throw new \RuntimeException(sprintf('Invalid module %s', $module));
        }
        $file = "modules/".$module."/workflow/workflow_alerts.php";
        $file = create_custom_directory($file);
       $fp = sugar_fopen($file, 'wb');
        fwrite($fp,"<?php\n");
        fwrite($fp,'
include_once("include/workflow/alert_utils.php");
    class '.$module.'_alerts {
    '.$contents.'

    //end class
    }
');
        fwrite($fp, "\n?>");
        fclose($fp);
    //end function write_alert_meta_file
    }

////////////////////////////////////////////////////////////END ALERT GLUING








///////////////////////ACTION GLUING FUNCTIONS/////////////////////////////





	function build_trigger_actions($actionshell_id, $array_position_name, $action_array){


		$this->action_meta_data .= "'".$array_position_name."' => \n\n";
		$this->action_meta_data .= "array ( \n\n";
		$this->action_meta_data .= $this->build_action_shell_list($action_array);
		$this->action_meta_data .= $this->build_action_component_list($actionshell_id);

		$this->action_meta_data .= "), \n\n";

	//end function build_trigger_alerts
	}

	function build_action_shell_list($action_array){

		global $beanList;

		$action_shell_array = "";

		$action_module = $action_array['action_module'];
		if (empty($beanList[$action_module])) {
		    if (!empty($beanList[ucfirst(strtolower($action_module))])) {
		        $action_module = ucfirst(strtolower($action_module));
		    }
		}

		$action_shell_array .= "\t\t 'action_type' => '".$action_array['action_type']."', \n";
		$action_shell_array .= "\t\t 'action_module' => '".$action_module."', \n";
		$action_shell_array .= "\t\t 'rel_module' => '".strtolower($action_array['rel_module'])."', \n";
		$action_shell_array .= "\t\t 'rel_module_type' => '".$action_array['rel_module_type']."', \n";


		//Check to see if this action is new meeting or new call and add the appropriate bridge id

		$action_shell = BeanFactory::newBean('WorkFlowActionShells');
		$action_shell_array .= $action_shell->check_for_invitee_bridge_meta($action_array);

		return $action_shell_array;

	//end function build_action_shell_list
	}


	function build_action_component_list($actionshell_id){

		$action_component_array = "";
		$this->compile_action_basic($actionshell_id, $action_component_array);
		$this->compile_action_advanced($actionshell_id, $action_component_array);
		$this->compile_rel_filter($actionshell_id, "rel_filter", "rel1_action_fil", $action_component_array);

		return $action_component_array;

	//end function build_action_component_list
	}


	function compile_action_basic($actionshell_id, & $action_component_array){

        $query = <<<SQL
SELECT * from workflow_actions
WHERE workflow_actions.deleted = '0'
AND workflow_actions.parent_id = ?
AND workflow_actions.set_type = 'Basic'
SQL;

        $stmt = $this->db->getConnection()
            ->executeQuery($query, [$actionshell_id]);
        $action_component_array .= "\t 'basic' => array ( \n\n";
        $action_component_array_ext = "";
        // Get the id and the name.
        foreach ($stmt as $row) {
            ///Start - Add the individual action components
            $action_component_array .= "\t\t '" . $row['field'] . "' => " . $this->write_escape($row['value']) . ",\n";
            if ($row['ext1'] != "") {
                $action_component_array_ext .= "\t\t '" . $row['field'] . "' => '" . $row['ext1'] . "', \n";
            }
            //End - Add user items

		//end while
		}
		$action_component_array .= "\t ), \n\n";
		$action_component_array .= "\t 'basic_ext' => array ( \n\n";
		$action_component_array .= $action_component_array_ext;
		$action_component_array .= "\t ), \n\n";
	//end compile_action_basic
	}

	function compile_action_advanced($actionshell_id, & $action_component_array){

        $query = <<<SQL
SELECT * from workflow_actions
WHERE workflow_actions.deleted = '0'
AND workflow_actions.parent_id = ?
AND workflow_actions.set_type = 'Advanced'
SQL;

        $stmt = $this->db->getConnection()
            ->executeQuery($query, [$actionshell_id]);
        $action_component_array .= "\t 'advanced' => array ( \n\n";
        // Get the id and the name.
        foreach ($stmt as $row) {
            $action_component_array .= "\t '".$row['field']."' => array ( \n\n";
            ///Start - Add the individual action components
            $action_component_array .= "\t\t\t 'value' => " . $this->write_escape($row['value']) . ",\n";
            $action_component_array .= "\t\t\t 'ext1' => '".$row['ext1']."', \n";
            $action_component_array .= "\t\t\t 'ext2' => '".$row['ext2']."', \n";
            $action_component_array .= "\t\t\t 'ext3' => '".$row['ext3']."', \n";
            $action_component_array .= "\t\t\t 'adv_type' => '".$row['adv_type']."', \n";
            //End - Add user items
            $action_component_array .= "\t ), \n\n";
		//end while
		}
		$action_component_array .= "\t ), \n\n";

	//end function compile_action_advanced
	}

	function compile_rel_filter($target_id, $array_name, $parent_type, & $target_component_array){

        $query = <<<SQL
SELECT lhs_module, lhs_field, operator, rhs_value
FROM expressions
WHERE expressions.deleted = '0'
AND expressions.parent_id = ?
AND expressions.parent_type = ?
SQL;

        $stmt = $this->db->getConnection()
            ->executeQuery($query, [$target_id, $parent_type]);
		// Get the id and the name.
        foreach ($stmt as $row) {
			$target_component_array .= $this->build_trigger_array_component($array_name, $row);

		//end while filters
		}

	//end function compile_action_rel_filter
	}

	function start_action_meta_array(){

		$this->action_meta_data = "\$action_meta_array = array ( \n\n";
	//end function start_action_meta_array
	}

	function end_action_meta_array(){

		$this->action_meta_data .= "); \n\n";
	//end function end_action_meta_array
	}



	function write_action_meta_file($module){
		global $beanlist;

		$file = "modules/".$module."/workflow/actions_array.php";
		$file = create_custom_directory($file);
		$dump = $this->action_meta_data;
		$fp = sugar_fopen($file, 'wb');
		fwrite($fp,"<?php\n");
		fwrite($fp, "//Workflow Action Meta Data Arrays \n");
		fwrite($fp, $dump);
		fwrite($fp, " \n");
		fwrite($fp, "\n?>");
		fclose($fp);

	//end function write_action_meta_file
	}


////////////////////////////////////////////////////////////END ACTION GLUING


/////////////////BEGIN TRIGGER GLUING - count//////////////////////////////


	function build_trigger_triggers($array_position_name, $triggershell_id){

		$this->trigger_meta_data .= "'".$array_position_name."' => \n\n";
		$this->trigger_meta_data .= "array ( \n\n";



/////////////BASE ARRAY

        $query = <<<SQL
SELECT id, lhs_type, lhs_module, operator, rhs_value, lhs_field
FROM expressions
WHERE expressions.deleted='0'
AND expressions.parent_id = ?
AND expressions.parent_type = 'expression'
SQL;

        $row = $this->db->getConnection()
            ->executeQuery($query, [$triggershell_id])
            ->fetchAssociative();

			$base_array['lhs_field'] = $row['lhs_field'];
			$base_array['lhs_type'] = $row['lhs_type'];
			$base_array['lhs_module'] = $row['lhs_module'];
			$base_array['operator'] = $row['operator'];
			$base_array['rhs_value'] = $row['rhs_value'];

		$this->trigger_meta_data .= $this->build_trigger_array_component("base", $base_array);

		////////Now check for filters

		$filter_count = 1;

        $query = <<<SQL
SELECT lhs_field, operator, rhs_value
FROM expressions
WHERE expressions.deleted = '0'
AND expressions.parent_exp_id = ?
SQL;

        $stmt = $this->db->getConnection()
            ->executeQuery($query);
        // Get the id and the name.
        foreach ($stmt as $row) {
            $this->trigger_meta_data .= $this->build_trigger_array_component("filter" . $filter_count, $row);

		++$filter_count;

		//end while filters
		}

		$this->trigger_meta_data .= "), \n\n";

	//end function build_trigger_alerts
	}

	function build_trigger_array_component($name, $sub_array){

		$trigger_shell_array = "";

		$trigger_shell_array .= "\t '".$name."' => array ( \n\n";

		foreach($sub_array as $key => $value){
			$trigger_shell_array .= "\t\t '" . $key . "' => " . $this->write_escape($value) . ",\n";
		}

		$trigger_shell_array .= "\t ), \n\n";

		return $trigger_shell_array;

	//end function build_trigger_array_component
	}

	function start_trigger_meta_array(){

		$this->trigger_meta_data = "\$trigger_meta_array = array ( \n\n";
	//end function start_trigger_meta_array
	}

	function end_trigger_meta_array(){

	$this->trigger_meta_data .= "); \n\n";
	//end function end_trigger_meta_array
	}


	function write_trigger_meta_file($module){
		global $beanlist;

		$file = "modules/".$module."/workflow/triggers_array.php";
		$file = create_custom_directory($file);
		$dump = $this->trigger_meta_data;
		$fp = sugar_fopen($file, 'wb');
		fwrite($fp,"<?php\n");
		fwrite($fp, "//Workflow Triggers Meta Data Arrays \n");
		fwrite($fp, $dump);
		fwrite($fp, " \n");
		fwrite($fp, "\n?>");
		fclose($fp);

	//end function write_action_meta_file
	}

/////////////////////END TRIGGER GLUING FUNCTIONS/////////////////




/////////////////////BEGIN PLUGIN GLUING FUNCTIONS/////////////////

	function start_plugin_meta_array(){

		$this->plugin_meta_data = "\$plugin_meta_array = array ( \n\n";
	//end function start_plugin_meta_array
	}

	function end_plugin_meta_array(){

	$this->plugin_meta_data .= "); \n\n";
	//end function end_plugin_meta_array
	}


	function write_plugin_meta_file($module){
		global $beanlist;

		$file = "modules/".$module."/workflow/plugins_array.php";
		$file = create_custom_directory($file);
		$dump = $this->plugin_meta_data;
		$fp = sugar_fopen($file, 'wb');
		fwrite($fp,"<?php\n");
		fwrite($fp, "//Workflow plugins Meta Data Arrays \n");
		fwrite($fp, $dump);
		fwrite($fp, " \n");
		fwrite($fp, "\n?>");
		fclose($fp);

	//end function write_action_meta_file
	}

/////////////////////END PLUGIN GLUING FUNCTIONS/////////////////

    /**
     * Decode HTML values, and return the value for use in PHP, safe from injections
     *
     * @param $value - Value to be decoded/escaped
     * @return string
     */
    public function write_escape($value) {
        $target_value = html_entity_decode($value, ENT_QUOTES);
        return "stripslashes('" . addslashes($target_value) . "')";
    }
}
