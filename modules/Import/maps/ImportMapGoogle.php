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



class ImportMapGoogle extends ImportMapOther
{
	/**
     * String identifier for this import
     */
    public $name = 'google';
    
    /**
     * Gets the default mapping for a module
     *
     * @param  string $module
     * @return array field mappings
     */
	public function getMapping($module)
    {
         $return_array = array(
             'first_name' => array('sugar_key' => 'first_name', 'sugar_label' => '', 'default_label' => 'Given Name'),
             'last_name' => array('sugar_key' => 'last_name', 'sugar_label' => '', 'default_label' => 'Family Name'),
             'birthday' => array('sugar_key' => 'birthdate', 'sugar_label' => '', 'default_label' => 'Birthday'),
             'title' => array('sugar_key' => 'title', 'sugar_label' => '', 'default_label' => 'Title'),
             'notes' => array('sugar_key' => 'description', 'sugar_label' => '', 'default_label' => 'Notes'),

             'alt_address_street' => array('sugar_key' => 'alt_address_street', 'sugar_label' => '', 'default_label' => 'Home Street'),
             'alt_address_postcode' => array('sugar_key' => 'alt_address_postalcode', 'sugar_label' => '', 'default_label' => 'Home Postcode'),
             'alt_address_city' => array('sugar_key' => 'alt_address_city', 'sugar_label' => '', 'default_label' => 'Home City'),
             'alt_address_state' => array('sugar_key' => 'alt_address_state', 'sugar_label' => '', 'default_label' => 'Home State'),
             'alt_address_country' => array('sugar_key' => 'alt_address_country', 'sugar_label' => '', 'default_label' => 'Home Country'),

             'primary_address_street' => array('sugar_key' => 'primary_address_street', 'sugar_label' => '', 'default_label' => 'Work Street'),
             'primary_address_postcode' => array('sugar_key' => 'primary_address_postalcode', 'sugar_label' => '', 'default_label' => 'Work Postcode'),
             'primary_address_city' => array('sugar_key' => 'primary_address_city', 'sugar_label' => '', 'default_label' => 'Work City'),
             'primary_address_state' => array('sugar_key' => 'primary_address_state', 'sugar_label' => '', 'default_label' => 'Work State'),
             'primary_address_country' => array('sugar_key' => 'primary_address_country', 'sugar_label' => '', 'default_label' => 'Work Country'),

             'phone_main' => array('sugar_key' => 'phone_other', 'sugar_label' => '', 'default_label' => 'Main Phone'),
             'phone_mobile' => array('sugar_key' => 'phone_mobile', 'sugar_label' => '', 'default_label' => 'Mobile Phone'),
             'phone_home' => array('sugar_key' => 'phone_home', 'sugar_label' => '', 'default_label' => 'Home phone'),
             'phone_work' => array('sugar_key' => 'phone_work', 'sugar_label' => '', 'default_label' => 'Work phone'),
             'phone_fax' => array('sugar_key' => 'phone_fax', 'sugar_label' => '', 'default_label' => 'Fax phone'),

             'email1' => array('sugar_key' => 'email1', 'sugar_label' => 'LBL_EMAIL_ADDRESS', 'default_label' => 'Email Address'),
             'email2' => array('sugar_key' => 'email2', 'sugar_label' => 'LBL_OTHER_EMAIL_ADDRESS', 'default_label' => 'Other Email'),

             'assigned_user_name' => array('sugar_key' => 'assigned_user_name', 'sugar_help_key' => 'LBL_EXTERNAL_ASSIGNED_TOOLTIP', 'sugar_label' => 'LBL_ASSIGNED_TO_NAME', 'default_label' => 'Assigned To'),
             'team_name' => array('sugar_key' => 'team_name', 'sugar_help_key' => 'LBL_EXTERNAL_TEAM_TOOLTIP','sugar_label' => 'LBL_TEAMS', 'default_label' => 'Teams'),
            );

        if($module == 'Users')
        {
            $return_array['status'] =  array('sugar_key' => 'status', 'sugar_label' => '', 'default_label' => 'Status');
            $return_array['full_name'] =  array('sugar_key' => 'user_name', 'sugar_label' => '', 'default_label' => 'Full Name');
        }
        return $return_array;
    }
}


?>
