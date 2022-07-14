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

$buttons = array('EDIT', 'DUPLICATE', 'DELETE', 'FIND_DUPLICATES');
$viewdefs['Cases']['DetailView'] = array(

'templateMeta' => array('form' => array('buttons' =>$buttons),

                        'maxColumns' => '2',
                        'widths' => array(
                                        array('label' => '10', 'field' => '30'),
                                        array('label' => '10', 'field' => '30')
                                        ),
                        ),
'panels' =>array (
  'lbl_case_information'=>array(
	  array (
	    array('name' => 'case_number', 'label' => 'LBL_CASE_NUMBER'),
	    'priority'
	  ),

	  array (
	    'status',
          'follow_up_datetime',
	  ),
	  array (
	      'type',
          'account_name',
	  ),

        array (
            'business_center_name',
        ),

	  array (

	    array (
	      'name' => 'name',
	      'label' => 'LBL_SUBJECT',
	    ),
	  ),

	  array (
	    'description',
	  ),

	  array (
	    'resolution',
        'resolved_datetime',
	  ),

	  array (
	     array('name'=>'portal_viewable',
			   'label' => 'LBL_SHOW_IN_PORTAL',
		       'hideIf' => 'empty($PORTAL_ENABLED)',
		      ),
	  ),
	),

	'LBL_PANEL_ASSIGNMENT' => array(
        array (
          array (
            'name' => 'assigned_user_name',
            'label' => 'LBL_ASSIGNED_TO',
          ),
          array (
            'name' => 'date_modified',
            'label' => 'LBL_DATE_MODIFIED',
            'customCode' => '{$fields.date_modified.value} {$APP.LBL_BY} {$fields.modified_by_name.value}',
          ),
        ),
        array (

		  'team_name',
          array (
            'name' => 'date_entered',
            'customCode' => '{$fields.date_entered.value} {$APP.LBL_BY} {$fields.created_by_name.value}',
          ),
        ),
	),
)



);
