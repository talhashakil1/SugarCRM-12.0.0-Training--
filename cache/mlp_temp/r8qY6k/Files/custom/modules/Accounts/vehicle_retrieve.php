<?php



if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

class Vehicle_Retrieve
{
	function updateVehicleNumber($bean, $event, $arguments)
	{
		$bean->description = "BOEING 343";
	}
}