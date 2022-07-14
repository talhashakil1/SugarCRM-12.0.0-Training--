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
/*********************************************************************************

 * Description: Holds import setting for Salesforce.com files
 * Portions created by SugarCRM are Copyright (C) SugarCRM, Inc.
 * All Rights Reserved.
 ********************************************************************************/


class ImportMapSalesforce extends ImportMapOther
{
	/**
     * String identifier for this import
     */
    public $name = 'salesforce';
	/**
     * Field delimiter
     */
    public $delimiter = ',';
    /**
     * Field enclosure
     */
    public $enclosure = '"';
	/**
     * Do we have a header?
     */
    public $has_header = true;

	/**
     * Gets the default mapping for a module
     *
     * @param  string $module
     * @return array field mappings
     */
	public function getMapping(
        $module
        )
    {
        $return_array = parent::getMapping($module);
        switch ($module) {
        case 'Contacts':
        case 'Leads':
            return $return_array + array(
                "Description"=>"description",
                "Birthdate"=>"birthdate",
                "Lead Source"=>"lead_source",
                "Assistant"=>"assistant",
                "Asst. Phone"=>"assistant_phone",
                "Mailing Street"=>"primary_address_street",
                "Mailing Address Line1"=>"primary_address_street_2",
                "Mailing Address Line2"=>"primary_address_street_3",
                "Mailing Address Line3"=>"primary_address_street_4",
                "Mailing City"=>"primary_address_city",
                "Mailing State"=>"primary_address_state",
                "Mailing Zip/Postal Code"=>"primary_address_postalcode",
                "Mailing Country"=>"primary_address_country",
                "Other Street"=>"alt_address_street",
                "Other Address Line 1"=>"alt_address_street_2",
                "Other Address Line 2"=>"alt_address_street_3",
                "Other Address Line 3"=>"alt_address_street_4",
                "Other City"=>"alt_address_city",
                "Other State"=>"alt_address_state",
                "Other Zip/Postal Code"=>"alt_address_postalcode",
                "Other Country"=>"alt_address_country",
                "Phone"=>"phone_work",
                "Mobile"=>"phone_mobile",
                "Home Phone"=>"phone_home",
                "Other Phone"=>"phone_other",
                "Fax"=>"phone_fax",
                "Email"=>"email1",
                "Email Opt Out"=>"email_opt_out",
                "Do Not Call"=>"do_not_call",
                "Account Name"=>"account_name",
                );
            break;
        case 'Accounts':
            return array(
                "Account Name"=>"name",
                "Annual Revenue"=>"annual_revenue",
                "Type"=>"account_type",
                "Ticker Symbol"=>"ticker_symbol",
                "Rating"=>"rating",
                "Industry"=>"industry",
                "SIC Code"=>"sic_code",
                "Ownership"=>"ownership",
                "Employees"=>"employees",
                "Description"=>"description",
                "Billing Street"=>"billing_address_street",
                "Billing Address Line1"=>"billing_address_street_2",
                "Billing Address Line2"=>"billing_address_street_3",
                "Billing City"=>"billing_address_city",
                "Billing State"=>"billing_address_state",
                "Billing State/Province"=>"billing_address_state",
                "Billing Zip/Postal Code"=>"billing_address_postalcode",
                "Billing Country"=>"billing_address_country",
                "Shipping Street"=>"shipping_address_street",
                "Shipping Address Line1"=>"shipping_address_street_2",
                "Shipping Address Line2"=>"shipping_address_street_3",
                "Shipping City"=>"shipping_address_city",
                "Shipping State"=>"shipping_address_state",
                "Shipping Zip/Postal Code"=>"shipping_address_postalcode",
                "Shipping Country"=>"shipping_address_country",
                "Phone"=>"phone_office",
                "Fax"=>"phone_fax",
                "Website"=>"website",
                "Created Date"=>"date_entered",
                );
            break;
        default:
            return $return_array;
        }
    }
	
	/**
	* @see ImportMapOther::getIgnoredFields()
     */
	public function getIgnoredFields(
		$module
		)
	{
		return array_merge(parent::getIgnoredFields($module),array('id'));
	}
}


?>
