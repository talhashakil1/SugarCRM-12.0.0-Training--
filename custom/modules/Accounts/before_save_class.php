<?php

if(!defined('sugarEntry') || !sugarEntry)
    die('Not a valid entry point');

class before_save_class
{
    function before_save_method(&$bean, $events, $arguments)
    {
        global $current_user;
        if($bean->fetched_row['account_type'] != $bean->account_type)
        {
            //$bean->website = 'kaggle';

            $tasks = BeanFactory::newBean('Tasks');
            $tasks->name = $bean->name;
            $tasks->description = "Please complete this by tomorrow";
            $tasks->parent_type = 'Tasks';
            $tasks->parent_id = $bean->id;
            $tasks->save();
        }
    }
}