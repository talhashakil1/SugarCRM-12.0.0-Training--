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

$subpanel_layout = array(
	'top_buttons' => array(
		array('widget_class' => 'SubPanelTopSelectButton', 'popup_module' => 'Quotes'),
	),

	'where' => '',
	
	

	'list_fields' => array(
		'name'=>array(
			'vname' => 'LBL_LIST_QUOTE_NAME',
			'widget_class' => 'SubPanelDetailViewLink',
			'width' => '40%',
		),
		'account_name'=>array(
			'vname' => 'LBL_LIST_ACCOUNT_NAME',
			'widget_class' => 'SubPanelDetailViewLink',
			'module' => 'Accounts',
			'width' => '32%',
			'target_record_key' => 'account_id',
			'target_module' => 'Accounts',
            'sortable' => false,
		),
		'total_usdollar'=>array(
			'vname' => 'LBL_LIST_AMOUNT_USDOLLAR',
			'width' => '10%',
		),
		'date_quote_expected_closed'=>array(
			'name' => 'date_quote_expected_closed',
			'vname' => 'LBL_LIST_DATE_QUOTE_EXPECTED_CLOSED',
			'width' => '10%',
		),
		'edit_button'=>array(
			'vname' => 'LBL_EDIT_BUTTON',
			'widget_class' => 'SubPanelEditButton',
		 	'module' => 'Quotes',
	 		'width' => '4%',
		),
		'currency_id'=>array(
			'usage'=>'query_only',
		),
	),
);
?>