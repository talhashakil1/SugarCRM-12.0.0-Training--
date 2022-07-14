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


// ENT/ULT only fields
$fields = array(
    array(
        'name' => 'name',
        'link' => true,
        'label' => 'LBL_LIST_NAME',
        'enabled' => true,
        'default' => true
    ),
    array(
        'name' => 'opportunity_name',
        'sortable' => false,
        'enabled' => true,
        'default' => true
    ),
    array(
        'name' => 'account_name',
        'readonly' => true,
        'sortable' => false,
        'enabled' => true,
        'default' => true
    ),
    array(
        'name' => 'sales_stage',
        'enabled' => true,
        'default' => true
    ),
    array(
        'name' => 'probability',
        'enabled' => true,
        'default' => true
    ),
    array(
        'name' => 'date_closed',
        'enabled' => true,
        'default' => true
    ),
    array(
        'name' => 'commit_stage',
        'enabled' => true,
        'default' => true
    ),
    array(
        'name' => 'product_template_name',
        'sortable' => false,
        'enabled' => true,
        'default' => true
    ),
    array(
        'name' => 'category_name',
        'sortable' => false,
        'enabled' => true,
        'default' => true
    ),
    array(
        'name' => 'quantity',
        'enabled' => true,
        'default' => true
    ),
    array(
        'name' => 'worst_case',
        'type' => 'currency',
        'related_fields' => array(
            'currency_id',
            'base_rate',
            'total_amount',
            'quantity',
            'discount_amount',
            'discount_price'
        ),
        'showTransactionalAmount' => true,
        'convertToBase' => true,
        'currency_field' => 'currency_id',
        'base_rate_field' => 'base_rate',
        'enabled' => true,
        'default' => true
    ),
    array(
        'name' => 'likely_case',
        'type' => 'currency',
        'related_fields' => array(
            'currency_id',
            'base_rate',
            'total_amount',
            'quantity',
            'discount_amount',
            'discount_price'
        ),
        'showTransactionalAmount' => true,
        'convertToBase' => true,
        'currency_field' => 'currency_id',
        'base_rate_field' => 'base_rate',
        'enabled' => true,
        'default' => true
    ),
    array(
        'name' => 'best_case',
        'type' => 'currency',
        'related_fields' => array(
            'currency_id',
            'base_rate',
            'total_amount',
            'quantity',
            'discount_amount',
            'discount_price'
        ),
        'showTransactionalAmount' => true,
        'convertToBase' => true,
        'currency_field' => 'currency_id',
        'base_rate_field' => 'base_rate',
        'enabled' => true,
        'default' => true
    ),
    array(
        'name' => 'quote_name',
        'label' => 'LBL_ASSOCIATED_QUOTE',
        'related_fields' => array('quote_id'),
        // this is a hack to get the quote_id field loaded
        'readonly' => true,
        'bwcLink' => true,
        'enabled' => true,
        'default' => true
    ),
    array(
        'name' => 'assigned_user_name',
        'sortable' => false,
        'enabled' => true,
        'default' => true
    ),
    [
        'name' => 'add_on_to_name',
        'type' => 'add-on-to',
        'default' => false,
    ],
);

$viewdefs['RevenueLineItems']['base']['view']['subpanel-list'] = array(
    'favorite' => true,
    'panels' => array(
        array(
            'name' => 'panel_header',
            'label' => 'LBL_PANEL_1',
            'fields' => $fields
        ),
    ),
);
