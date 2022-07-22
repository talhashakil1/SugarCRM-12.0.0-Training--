<?php



if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

class Vehicle_Retrieve
{
	function updateVehicleNumber($bean, $event, $arguments)
	{
		$bean->billing_address_street = "New York, United States";
	}
}