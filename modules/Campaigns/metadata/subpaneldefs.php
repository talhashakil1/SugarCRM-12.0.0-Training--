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
 
$layout_defs['Campaigns'] = array( 
	// list of what Subpanels to show in the DetailView 
	'subpanel_setup' => array(
        'prospectlists' => array(
			'order' => 10,
			'sort_order' => 'asc',
			'sort_by' => 'name',
			'module' => 'ProspectLists',
			'get_subpanel_data'=>'prospectlists',
			'set_subpanel_data'=>'prospectlists',			
			'subpanel_name' => 'default',
			'title_key' => 'LBL_PROSPECT_LIST_SUBPANEL_TITLE',
		),
        'tracked_urls' => array(
			'order' => 15,
			'sort_order' => 'asc',
			'sort_by' => 'tracker_name',
			'module' => 'CampaignTrackers',
			'get_subpanel_data'=>'tracked_urls',
			'subpanel_name' => 'default',
			'title_key' => 'LBL_TRACKED_URLS_SUBPANEL_TITLE',
		),
        'emailmarketing' => array(
            'order' => 20,
            'sort_order' => 'desc',
            'sort_by' => 'date_start',
            'module' => 'EmailMarketing',
            'get_subpanel_data'=>'emailmarketing',
            'subpanel_name' => 'default',
            'title_key' => 'LBL_EMAIL_MARKETING_SUBPANEL_TITLE',
        ),

		//subpanels for the tracking view...
        'track_queue' => array(
			'order' => 100,
			'module' => 'EmailMan',
			'get_subpanel_data'=>'function:get_queue_items',
            'function_parameters'=>array('EMAIL_MARKETING_ID_VALUE'=>'','distinct'=>'emailman.id', 'group_by'=>'emailman.related_id,emailman.marketing_id'),					
            'subpanel_name' => 'default',
			'title_key' => 'LBL_MESSAGE_QUEUE_TITLE',
			'sort_order' => 'desc',
		),
        'targeted' => array(
			'order' => 110,
			'module' => 'CampaignLog',
			'get_subpanel_data'=>"function:track_log_entries",
			'function_parameters'=>array(0=>'targeted','EMAIL_MARKETING_ID_VALUE'=>'',/*'distinct'=>'campaign_log.target_id','group_by'=>'campaign_log.target_id, campaign_log.marketing_id'*/),
			'subpanel_name' => 'default',
			'title_key' => 'LBL_LOG_ENTRIES_TARGETED_TITLE',
			'sort_order' => 'desc',
			'sort_by' => 'campaign_log.id'
		),
        'viewed' => array(
			'order' => 120,
			'module' => 'CampaignLog',
			'get_subpanel_data'=>"function:track_log_entries",
			'subpanel_name' => 'default',
			'function_parameters'=>array(0=>'viewed','EMAIL_MARKETING_ID_VALUE'=>'',/*'group_by'=>'campaign_log.target_id','distinct'=>'campaign_log.target_id'*/),
			'title_key' => 'LBL_LOG_ENTRIES_VIEWED_TITLE',
			'sort_order' => 'desc',
			'sort_by' => 'campaign_log.id'
		),
        'link' => array(
			'order' => 130,
			'module' => 'CampaignLog',
			'get_subpanel_data'=>"function:track_log_entries",
			'function_parameters'=>array(0=>'link','EMAIL_MARKETING_ID_VALUE'=>'',/*'group_by'=>'campaign_log.target_id','distinct'=>'campaign_log.target_id'*/),
			'subpanel_name' => 'default',
			'title_key' => 'LBL_LOG_ENTRIES_LINK_TITLE',
			'sort_order' => 'desc',
			'sort_by' => 'campaign_log.id'
		),
        'lead' => array(
            'order' => 140,
            'module' => 'CampaignLog',
            'get_subpanel_data'=>"function:track_log_leads",
            'subpanel_name' => 'default',
            'title_key' => 'LBL_LOG_ENTRIES_LEAD_TITLE',
            'sort_order' => 'desc',
            'sort_by' => 'campaign_log.id',
            'top_buttons' => array(
                array('widget_class' => 'SubPanelAddToProspectListButton', 'create' => true),
            )
        ),
        'contact' => array(
			'order' => 150,
			'module' => 'CampaignLog',
			'get_subpanel_data'=>"function:track_log_entries",
			'function_parameters'=>array(0=>'contact','EMAIL_MARKETING_ID_VALUE'=>'',/*'group_by'=>'campaign_log.target_id','distinct'=>'campaign_log.target_id'*/),
			'subpanel_name' => 'default',
			'title_key' => 'LBL_LOG_ENTRIES_CONTACT_TITLE',
			'sort_order' => 'desc',
			'sort_by' => 'campaign_log.id'
		),
        'invalid_email' => array(
			'order' => 160,
			'module' => 'CampaignLog',
			'get_subpanel_data'=>"function:track_log_entries",
			'function_parameters'=>array(0=>'invalid email','EMAIL_MARKETING_ID_VALUE'=>'',/*'group_by'=>'campaign_log.target_id','distinct'=>'campaign_log.target_id'*/),
			'subpanel_name' => 'default',
			'title_key' => 'LBL_LOG_ENTRIES_INVALID_EMAIL_TITLE',
			'sort_order' => 'desc',
			'sort_by' => 'campaign_log.id'
		),				
        'send_error' => array(
			'order' => 170,
			'module' => 'CampaignLog',
			'get_subpanel_data'=>"function:track_log_entries",
			'function_parameters'=>array(0=>'send error','EMAIL_MARKETING_ID_VALUE'=>'',/*'group_by'=>'campaign_log.target_id','distinct'=>'campaign_log.target_id'*/),
			'subpanel_name' => 'default',
			'title_key' => 'LBL_LOG_ENTRIES_SEND_ERROR_TITLE',
			'sort_order' => 'desc',
			'sort_by' => 'campaign_log.id'
		),
        'removed' => array(
			'order' => 180,
			'module' => 'CampaignLog',
			'get_subpanel_data'=>"function:track_log_entries",
			'function_parameters'=>array(0=>'removed','EMAIL_MARKETING_ID_VALUE'=>'',/*'group_by'=>'campaign_log.target_id','distinct'=>'campaign_log.target_id'*/),
			'subpanel_name' => 'default',
			'title_key' => 'LBL_LOG_ENTRIES_REMOVED_TITLE',
			'sort_order' => 'desc',
			'sort_by' => 'campaign_log.id'
		),
        'blocked' => array(
			'order' => 185,
			'module' => 'CampaignLog',
			'get_subpanel_data'=>"function:track_log_entries",
			'function_parameters'=>array(0=>'blocked','EMAIL_MARKETING_ID_VALUE'=>'',/*'group_by'=>'campaign_log.target_id','distinct'=>'campaign_log.target_id'*/),
			'subpanel_name' => 'default',
			'title_key' => 'LBL_LOG_ENTRIES_BLOCKEDD_TITLE',
			'sort_order' => 'desc',
			'sort_by' => 'campaign_log.id'
		),		
        'accounts' => array(
            'order' => 190,
            'sort_order' => 'desc',
            'sort_by' => 'name',
            'module' => 'Accounts',
            'get_subpanel_data'=>'accounts',
            'subpanel_name' => 'default',
            'title_key' => 'LBL_CAMPAIGN_ACCOUNTS_SUBPANEL_TITLE',
            'top_buttons' => array(),
        ),          
        'leads' => array(
            'order' => 195,
            'sort_order' => 'desc',
            'sort_by' => 'name',
            'module' => 'Leads',
            'get_subpanel_data'=>'leads',
            'subpanel_name' => 'default',
            'title_key' => 'LBL_CAMPAIGN_LEAD_SUBPANEL_TITLE',
            'top_buttons' => array(),
        ),        
        'opportunities' => array(
            'order' => 200,
            'sort_order' => 'desc',
            'sort_by' => 'name',
            'module' => 'Opportunities',
            'get_subpanel_data'=>'opportunities',
            'subpanel_name' => 'default',
            'title_key' => 'LBL_OPPORTUNITY_SUBPANEL_TITLE',
            'top_buttons' => array(),
        ),           
        
	),
);		
?>