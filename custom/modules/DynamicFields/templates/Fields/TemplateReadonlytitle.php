<?php

if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

require_once 'modules/DynamicFields/templates/Fields/TemplateField.php';

class TemplateReadonlytitle extends TemplateText
{
    function __construct()
    {
        return super.__construct();
    }

    function get_xtpl_edit()
    {
        return super.get_xtpl_edit();
        
    }

    function get_xtpl_search()
    {
        return super.get_xtpl_search();
        
    }

    function get_xtpl_detail()
    {
        return super.get_xtpl_detail();
        
    }
    
    function get_field_def()
    {
        return super.get_field_def();
        
    }
}