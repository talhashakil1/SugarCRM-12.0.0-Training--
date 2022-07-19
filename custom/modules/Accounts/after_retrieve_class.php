<?php

if(!defined('sugarEntry') || !sugarEntry)
    die('Not a valid entry point');

class after_retrieve_class
{
    function after_retrieve_method($bean, $events, $arguments)
    {  
        $GLOBALS['log']->fatal('hook');
        $bean->description = 'Text Description 14-06-16';
    }
}