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

class SugarWidgetFieldEnum extends SugarWidgetReportField
{
    /**
     * Create a partial SQL query to do an is-empty query in a WHERE clause.
     *
     * @param array $layoutDef Field definition from the report.
     * @return string Partial SQL query to do an "is empty" filter.
     */
    public function queryFilterEmpty($layoutDef)
    {
        // For empty queries, important to ifnull because LENGTH(NULL) is NULL, not 0
        // we cannot use indices on this filter either way, so the performance impact is negligible
        $column = $this->_get_column_select($layoutDef, true);
        return "(coalesce(" . $this->reporter->db->convert($column, "length") . ",0) = 0 OR $column = '^^')";
    }

    /**
     * Create a partial SQL query to do a not-empty query in a WHERE clause.
     *
     * @param array $layoutDef Field definition from the report.
     * @return string Partial SQL query to do an "is not empty" filter.
     */
    public function queryFilterNot_Empty($layoutDef)
    {
        // For not-empty queries, important to ifnull because LENGTH(NULL) is NULL, not 0
        // we cannot use indices on this filter either way, so the performance impact is negligible
        $column = $this->_get_column_select($layoutDef, true);
        return "(coalesce(" . $this->reporter->db->convert($column, "length") . ",0) > 0 AND $column != '^^' )\n";
    }

    /**
     * Create a partial SQL query to do an equal query in a WHERE clause.
     *
     * @param array $layoutDef Field definition from the report.
     * @return string Partial SQL query to do an "is equal to" filter.
     */
    public function queryFilteris($layoutDef)
    {
        $input_name0 = $this->getInputValue($layoutDef);
        return $this->_get_column_select($layoutDef, false) . ' = ' . $this->reporter->db->quoted($input_name0) . "\n";
	}

    /**
     * Create a partial SQL query to do a not-equal query in a WHERE clause.
     *
     * @param array $layoutDef Field definition from the report.
     * @return string Partial SQL query to do a "not equal" filter.
     */
    public function queryFilteris_not($layoutDef)
    {
        $inputName0 = $this->reporter->db->quoted($this->getInputValue($layoutDef));
        $fieldName = $this->_get_column_select($layoutDef, false);
        $nullPart = $this->reporter->db->getIsNullSQL($fieldName);
        $notNullPart = $this->reporter->db->getIsNotNullSQL($inputName0);
        return "{$fieldName} <> {$inputName0} OR ({$nullPart} AND {$notNullPart})";
	}

    /**
     * Create a partial SQL query to do an IN query in a WHERE clause.
     *
     * @param array $layoutDef Field definition from the report.
     * @return string Partial SQL query to do an "is one of" filter.
     */
    public function queryFilterone_of($layoutDef)
    {
		$arr = array ();
        foreach ($layoutDef['input_name0'] as $value) {
            $arr[] = $this->reporter->db->quoted($value);
		}
        $str = implode(',', $arr);

        // suppress IFNULL to allow use of database indices over full table scans
        // note that filters of the type "is one of <blank>" are not possible
        return $this->_get_column_select($layoutDef, false) . ' IN (' . $str . ")\n";
	}

    /**
     * Create a partial SQL query to do a NOT IN query in a WHERE clause.
     *
     * @param array $layoutDef Field definition from the report.
     * @return string Partial SQL query to do an "is not one of" filter.
     */
    public function queryFilternot_one_of($layoutDef)
    {
        $arr = array();
        foreach ($layoutDef['input_name0'] as $value) {
            $arr[] = $this->reporter->db->quoted($value);
		}
        $str = implode(',', $arr);

        $fieldName = $this->_get_column_select($layoutDef, false);
        $notInPart = $fieldName . ' NOT IN (' . $str . ')';

        // note, "not one of (null)" is not an option
        $nullPart = $this->reporter->db->getIsNullSQL($fieldName);
        return $notInPart . ' OR ' . $nullPart . "\n";
	}

    /**
     * Retrieves this column for use in a select statement.
     *
     * @param array $layoutDef Layout definition.
     * @param bool $shouldIfNull If true, wrap return value in IFNULL.
     *   Defaults to true; set to false if needed to enable database indices.
     * @return string|null Partial SQL query for select statement.
     */
    // @codingStandardsIgnoreStart
    public function _get_column_select($layoutDef, bool $shouldIfNull = true)
    {
    // @codingStandardsIgnoreEnd
        // NULL and '' are displayed as None at least for enum fields
        $alias = parent::_get_column_select($layoutDef);
        $columnSelect = $alias;

        if ($shouldIfNull) {
            $db = $this->reporter->db;
            $columnSelect = $db->convert($alias, 'IFNULL', array($db->emptyValue('enum')));
        }

        return $columnSelect;
    }

    function displayList($layout_def)
    {
        if(!empty($layout_def['column_key'])){
            $field_def = $this->reporter->all_fields[$layout_def['column_key']];
        }else if(!empty($layout_def['fields'])){
            $field_def = $layout_def['fields'];
        }
        $cell = $this->displayListPlain($layout_def);
        $str = $cell;
        global $sugar_config;
        if (isset ($sugar_config['enable_inline_reports_edit']) && $sugar_config['enable_inline_reports_edit']) {
            $module = $this->reporter->all_fields[$layout_def['column_key']]['module'];
            $name = $layout_def['name'];
            $layout_def['name'] = 'id';
            $key = $this->_get_column_alias($layout_def);
            $key = strtoupper($key);

            //If the key isn't in the layout fields, skip it
            if (!empty($layout_def['fields'][$key]))
            {
                $record = $layout_def['fields'][$key];
                $field_name = $field_def['name'];
                $field_type = $field_def['type'];
                $div_id = $field_def['module'] ."&$record&$field_name";
                $str = "<div id='$div_id'>" . $cell . "&nbsp;"
                     . SugarThemeRegistry::current()->getImage(
                        "edit_inline",
                        "border='0' alt='Edit Layout' align='bottom' onClick='SUGAR.reportsInlineEdit.inlineEdit(" .
                        "\"$div_id\",\"$cell\",\"$module\",\"$record\",\"$field_name\",\"$field_type\");'"
                       )
                     . "</div>";
            }
        }
        return $str;
    }
    public function displayListPlain($layout_def)
    {
		if(!empty($layout_def['column_key'])){
			$field_def = $this->reporter->all_fields[$layout_def['column_key']];
		}else if(!empty($layout_def['fields'])){
			$field_def = $layout_def['fields'];
		}

		if (!empty($layout_def['table_key'] ) &&( empty ($field_def['fields']) || empty ($field_def['fields'][0]) || empty ($field_def['fields'][1]))){
			$value = $this->_get_list_value($layout_def);
		}else if(!empty($layout_def['name']) && !empty($layout_def['fields'])){
			$key = strtoupper($layout_def['name']);
			$value = $layout_def['fields'][$key];
		}
		$cell = '';

        $list = getOptionsFromVardef($field_def);
        if ($list && isset($list[$value])) {
            $cell = $list[$value];
        } elseif (is_array($list)) {
            // $list returned from getOptionsFromVardef could also be array containing translation for options.
            $cell = $list;
        }

        if (is_array($cell)) {

			//#22632
			$value = unencodeMultienum($value);
			$cell=array();
			foreach($value as $val){
				$returnVal = translate($field_def['options'],$field_def['module'],$val);
				if(!is_array($returnVal)){
					array_push( $cell, translate($field_def['options'],$field_def['module'],$val));
				}
			}
			$cell = implode(", ",$cell);

            if ($cell === '' && $val !== '') {
                $cell = $val;
            }
		}
		return $cell;
	}

	public function queryOrderBy($layout_def) {
		$field_def = $this->reporter->all_fields[$layout_def['column_key']];
		if (!empty ($field_def['sort_on'])) {
			$order_by = $layout_def['table_alias'].".".$field_def['sort_on'];
		} else {
			$order_by = $this->_get_column_select($layout_def);
		}

        $list = getOptionsFromVardef($field_def);
        if ($list === false) {
            $list = array();
        }

		if (empty ($layout_def['sort_dir']) || $layout_def['sort_dir'] == 'a') {
			$order_dir = "ASC";
		} else {
			$order_dir = "DESC";
		}
		return $this->reporter->db->orderByEnum($order_by, $list, $order_dir);
    }

    public function displayInput($layout_def) {
        global $app_list_strings;

        if(!empty($layout_def['remove_blank']) && $layout_def['remove_blank']) {
            if ( isset($layout_def['options']) &&  is_array($layout_def['options']) ) {
                $ops = $layout_def['options'];
            }
            elseif (isset($layout_def['options']) && isset($app_list_strings[$layout_def['options']])){
            	$ops = $app_list_strings[$layout_def['options']];
                if(array_key_exists('', $app_list_strings[$layout_def['options']])) {
             	   unset($ops['']);
	            }
            }
            else{
            	$ops = array();
            }
        }
        else {
            $ops = $app_list_strings[$layout_def['options']];
        }

        $str = '<select multiple="true" size="3" name="' . $layout_def['name'] . '[]">';
        $str .= get_select_options_with_id($ops, $layout_def['input_name0']);
        $str .= '</select>';
        return $str;
    }
}
