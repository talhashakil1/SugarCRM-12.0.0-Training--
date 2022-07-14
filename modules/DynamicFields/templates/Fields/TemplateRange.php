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
use Sugarcrm\Sugarcrm\Util\Files\FileLoader;

class TemplateRange extends TemplateText
{

	/**
	 * __construct
	 *
	 * Constructor for class.  This constructor ensures that TemplateRanage instances have the
	 * enable_range_search vardef value.
	 */
	public function __construct()
	{
		$this->vardef_map['enable_range_search'] = 'enable_range_search';
		$this->vardef_map['options'] = 'options';
	}


	/**
	 * This method checks to see if enable_range_search is set.  If so, ensure that the
	 * searchdefs for the module include the additional range fields.
     *
     * {@inheritDoc}
	 */
    public function populateFromPost(Request $request = null)
    {
        if (!$request) {
            $request = InputValidation::getService();
        }

        parent::populateFromPost($request);
		//If we are enabling range search, make sure we add the start and end range fields
		$request = InputValidation::getService();
		$viewModule = $request->getValidInputRequest('view_module', 'Assert\ComponentName');
		$name = $request->getValidInputRequest('name', 'Assert\ComponentName');

		if (!empty($this->enable_range_search))
		{
			//If range search is enabled, set the options attribute for the dropdown choice selections
			$this->options = ($this->type == 'date' || $this->type == 'datetimecombo' || $this->type == 'datetime') ? 'date_range_search_dom' : 'numeric_range_search_dom';

            $module = $request->getValidInputRequest('view_module', 'Assert\ComponentName');
            if ($module !== null) {
				$searchFields = SugarAutoLoader::loadSearchFields($module);

                $name = $request->getValidInputRequest('name');
                $field_name = $this->get_field_name($module, $name);

                if(isset($searchFields[$module]))
                {
                	$field_name_range = 'range_' . $field_name;
                	$field_name_start = 'start_range_' . $field_name;
                	$field_name_end = 'end_range_' . $field_name;

                	$isDateField = $this->type == 'date' || $this->type == 'datetimecombo' || $this->type == 'datetime';


                    $searchFields[$module][$field_name_range] = array('query_type'=>'default', 'enable_range_search'=>true);
                    if($isDateField)
                    {
                   	   $searchFields[$module][$field_name_range]['is_date_field'] = true;
                    }

                    $searchFields[$module][$field_name_start] = array('query_type'=>'default', 'enable_range_search'=>true);
                    if($isDateField)
                    {
                   	   $searchFields[$module][$field_name_start]['is_date_field'] = true;
                    }

                    $searchFields[$module][$field_name_end] = array('query_type'=>'default', 'enable_range_search'=>true);
                    if($isDateField)
                    {
                   	   $searchFields[$module][$field_name_end]['is_date_field'] = true;
                    }

                	if(!file_exists('custom/modules/'.$module.'/metadata/SearchFields.php'))
                	{
                	   mkdir_recursive('custom/modules/'.$module.'/metadata');
                	}
                	write_array_to_file("searchFields['{$module}']", $searchFields[$module], 'custom/modules/'.$module.'/metadata/SearchFields.php');
                }

			    if(file_exists($cachefile = sugar_cached("modules/$module/SearchForm_basic.tpl")))
                {
                   unlink($cachefile);
                }

                if(file_exists($cachefile = sugar_cached("modules/$module/SearchForm_advanced.tpl")))
                {
                   unlink($cachefile );
                }
			}
		} else {
		//Otherwise, try to restore the searchFields to their state prior to being enabled
            $module = $request->getValidInputRequest('view_module', 'Assert\ComponentName');
            if ($module !== null) {
                if (file_exists('modules/'.$module.'/metadata/SearchFields.php')) {
                	require('modules/'.$module.'/metadata/SearchFields.php');
                }

			    if(file_exists('custom/modules/'.$module.'/metadata/SearchFields.php'))
			    {
                    require('custom/modules/'.$module.'/metadata/SearchFields.php');
			    }

                $name = $request->getValidInputRequest('name');
                $field_name = $this->get_field_name($module, $name);

                if(isset($searchFields[$module]))
                {
                	$field_name_range = 'range_' . $field_name;
                	$field_name_start = 'start_range_' . $field_name;
                	$field_name_end = 'end_range_' . $field_name;


                    if(isset($searchFields[$module][$field_name_range]))
                	{
                	   unset($searchFields[$module][$field_name_range]);
                	}

                	if(isset($searchFields[$module][$field_name_start]))
                	{
                	   unset($searchFields[$module][$field_name_start]);
                	}

                    if(isset($searchFields[$module][$field_name_end]))
                	{
                	   unset($searchFields[$module][$field_name_end]);
                	}

                    if(!file_exists('custom/modules/'.$module.'/metadata/SearchFields.php'))
                	{
                	   mkdir_recursive('custom/modules/'.$module.'/metadata');
                	}
                	write_array_to_file("searchFields['{$module}']", $searchFields[$module], 'custom/modules/'.$module.'/metadata/SearchFields.php');
                }

			    if(file_exists($cachefile = sugar_cached("modules/$module/SearchForm_basic.tpl")))
                {
                   unlink($cachefile);
                }

                if(file_exists($cachefile = sugar_cached("modules/$module/SearchForm_advanced.tpl")))
                {
                   unlink($cachefile );
                }
			}
		}
	}


	/**
	 * get_field_def
	 *
	 * @see parent::get_field_def
	 * This method checks to see if the enable_range_search key/value entry should be
	 * added to the vardef entry representing the module
	 */
    function get_field_def()
    {
		$vardef = parent::get_field_def();
    	if(!empty($this->enable_range_search))
    	{
		   $vardef['enable_range_search'] = $this->enable_range_search;
		   $vardef['options'] = ($this->type == 'date' || $this->type == 'datetimecombo' || $this->type == 'datetime') ? 'date_range_search_dom' : 'numeric_range_search_dom';
		} else {
		   $vardef['enable_range_search'] = false;
		}
		return $vardef;
    }


    public static function repairCustomSearchFields($vardefs, $module, $package='')
    {

    	$fields = array();

    	//Find any range search enabled fields
		foreach($vardefs as $key=>$field)
		{
			if(!empty($field['enable_range_search'])) {
			   $fields[$field['name']] = $field;
			}
		}

		if(!empty($fields))
		{
				if(file_exists('custom/modules/'.$module.'/metadata/SearchFields.php'))
			    {
                    require FileLoader::validateFilePath('custom/modules/'.$module.'/metadata/SearchFields.php');
                } else if (file_exists('modules/'.$module.'/metadata/SearchFields.php')) {
                	require FileLoader::validateFilePath('modules/'.$module.'/metadata/SearchFields.php');
                } else if (file_exists('custom/modulebuilder/' . $package . '/modules/' . $module . '/metadata/SearchFields.php')) {
                	require FileLoader::validateFilePath('custom/modulebuilder/' . $package . '/modules/' . $module . '/metadata/SearchFields.php');
                }

    			foreach($fields as $field_name=>$field)
    			{
                	$field_name_range = 'range_' . $field_name;
                	$field_name_start = 'start_range_' . $field_name;
                	$field_name_end = 'end_range_' . $field_name;

                	$type = $field['type'];

                	$isDateField = $type == 'date' || $type == 'datetimecombo' || $type == 'datetime';

    			    $searchFields[$module][$field_name_range] = array('query_type'=>'default', 'enable_range_search'=>true);
                    if($isDateField)
                    {
                   	   $searchFields[$module][$field_name_range]['is_date_field'] = true;
                    }

                    $searchFields[$module][$field_name_start] = array('query_type'=>'default', 'enable_range_search'=>true);
                    if($isDateField)
                    {
                   	   $searchFields[$module][$field_name_start]['is_date_field'] = true;
                    }

                    $searchFields[$module][$field_name_end] = array('query_type'=>'default', 'enable_range_search'=>true);
                    if($isDateField)
                    {
                   	   $searchFields[$module][$field_name_end]['is_date_field'] = true;
                    }
    			}

                if(!file_exists('custom/modules/'.$module.'/metadata/SearchFields.php'))
                {
                   mkdir_recursive('custom/modules/'.$module.'/metadata');
                }

                write_array_to_file("searchFields['{$module}']", $searchFields[$module], 'custom/modules/'.$module.'/metadata/SearchFields.php');

		}
    }


}
