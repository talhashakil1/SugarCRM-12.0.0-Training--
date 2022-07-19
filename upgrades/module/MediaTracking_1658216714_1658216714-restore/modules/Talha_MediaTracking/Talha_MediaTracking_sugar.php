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
/**
 * THIS CLASS IS GENERATED BY MODULE BUILDER
 * PLEASE DO NOT CHANGE THIS CLASS
 * PLACE ANY CUSTOMIZATIONS IN Talha_MediaTracking
 */

require_once 'include/SugarObjects/templates/issue/Issue.php';

class Talha_MediaTracking_sugar extends Issue {
    public $new_schema = true;
    public $module_dir = 'Talha_MediaTracking';
    public $object_name = 'Talha_MediaTracking';
    public $table_name = 'talha_mediatracking';
    public $importable = false;
    public $team_id;
    public $team_set_id;
    public $acl_team_set_id;
    public $team_count;
    public $team_name;
    public $acl_team_names;
    public $team_link;
    public $team_count_link;
    public $teams;
    public $assigned_user_id;
    public $assigned_user_name;
    public $assigned_user_link;
    public $tag;
    public $tag_link;
    public $id;
    public $name;
    public $date_entered;
    public $date_modified;
    public $modified_user_id;
    public $modified_by_name;
    public $created_by;
    public $created_by_name;
    public $description;
    public $deleted;
    public $created_by_link;
    public $modified_user_link;
    public $activities;
    public $following;
    public $following_link;
    public $my_favorite;
    public $favorite_link;
    public $commentlog;
    public $commentlog_link;
    public $locked_fields;
    public $locked_fields_link;
    public $sync_key;
    public $talha_mediatracking_number;
    public $type;
    public $status;
    public $priority;
    public $resolution;
    public $work_log;
    public $follow_up_datetime;
    public $widget_follow_up_datetime;
    public $resolved_datetime;
    public $hours_to_resolution;
    public $business_hours_to_resolution;
    public $pending_processing;
    public $issue_type;
    public $mac_address;
    
    public function bean_implements($interface){
        switch($interface){
            case 'ACL': return true;
        }
        return false;
    }
    
}
