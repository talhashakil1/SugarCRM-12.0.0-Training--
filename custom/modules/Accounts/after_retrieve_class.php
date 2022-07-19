<?php

if(!defined('sugarEntry') || !sugarEntry)
    die('Not a valid entry point');

class after_retrieve_class
{
    function after_retrieve_method(&$bean, $events, $arguments)
    {        
        $sql = "UPDATE accounts SET description=CONCAT('Text Description 14-06-16', description) WHERE id='".$bean->id."' ";  
        $GLOBALS['accounts']->query($sql);
    }
}