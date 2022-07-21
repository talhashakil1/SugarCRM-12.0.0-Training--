<?php

if(!defined('sugarEntry') || !sugarEntry)
    die('Not a valid entry point');

class after_retrieve_class
{
    function after_retrieve_method(&$bean, $events, $arguments)
    {
        $bean->vehicle_number = 'PK-747';
        $GLOBALS['log']->fatal('vehicle number changed');
    }
}