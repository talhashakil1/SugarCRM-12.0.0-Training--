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


$layout_defs['ProjectTask'] = array(
	// list of what Subpanels to show in the DetailView
	'subpanel_setup' => array(

	'activities' => array(
			'order' => 20,
			'sort_order' => 'desc',
			'sort_by' => 'date_start',
			'title_key' => 'LBL_ACTIVITIES_SUBPANEL_TITLE',
			'type' => 'collection',
			'subpanel_name' => 'activities',   //this values is not associated with a physical file.
			'module'=>'Activities',

			'top_buttons' => array(
				array('widget_class' => 'SubPanelTopCreateTaskButton'),
				array('widget_class' => 'SubPanelTopScheduleMeetingButton'),
				array('widget_class' => 'SubPanelTopScheduleCallButton'),
				array('widget_class' => 'SubPanelTopComposeEmailButton'),
			),

			'collection_list' => array(
				'meetings' => array(
					'module' => 'Meetings',
					'subpanel_name' => 'ForActivities',
					'get_subpanel_data' => 'meetings',
				),
				'tasks' => array(
					'module' => 'Tasks',
					'subpanel_name' => 'ForActivities',
					'get_subpanel_data' => 'tasks',
				),
				'calls' => array(
					'module' => 'Calls',
					'subpanel_name' => 'ForActivities',
					'get_subpanel_data' => 'calls',
				),
			)
		),

		'history' => array(
			'order' => 30,
			'sort_order' => 'desc',
			'sort_by' => 'date_entered',
			'title_key' => 'LBL_HISTORY_SUBPANEL_TITLE',
			'type' => 'collection',
			'subpanel_name' => 'history',   //this values is not associated with a physical file.
			'module'=>'Activities',

			'top_buttons' => array(
			array('widget_class' => 'SubPanelTopCreateNoteButton'),
			array('widget_class' => 'SubPanelTopArchiveEmailButton'),
            array('widget_class' => 'SubPanelTopSummaryButton'),
			),

			'collection_list' => array(
				'meetings' => array(
					'module' => 'Meetings',
					'subpanel_name' => 'ForHistory',
					'get_subpanel_data' => 'meetings',
				),
				'tasks' => array(
					'module' => 'Tasks',
					'subpanel_name' => 'ForHistory',
					'get_subpanel_data' => 'tasks',
				),
				'calls' => array(
					'module' => 'Calls',
					'subpanel_name' => 'ForHistory',
					'get_subpanel_data' => 'calls',
				),
				'notes' => array(
					'module' => 'Notes',
					'subpanel_name' => 'ForHistory',
					'get_subpanel_data' => 'notes',
				),
				'emails' => array(
					'module' => 'Emails',
					'subpanel_name' => 'ForHistory',
					'get_subpanel_data' => 'emails',
				),
			)
		),
	),
);
?>
