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
$dictionary['Currency'] = array(
    'table' => 'currencies',
    'favorites' => false,
    'comment' => 'Currencies allow Sugar to store and display monetary values in various denominations',
    'fields' => array(
        'id' => array(
            'name' => 'id',
            'vname' => 'LBL_NAME',
            'type' => 'id',
            'required' => true,
            'reportable' => false,
            'comment' => 'Unique identifer'
        ),
        'name' => array(
            'name' => 'name',
            'vname' => 'LBL_LIST_NAME',
            'type' => 'name',
            'dbType' => 'varchar',
            'len' => '36',
            'required' => true,
            'comment' => 'Name of the currency',
            'importable' => 'required',
        ),
        'symbol' => array(
            'name' => 'symbol',
            'vname' => 'LBL_LIST_SYMBOL',
            'type' => 'varchar',
            'len' => '36',
            'required' => true,
            'comment' => 'Symbol representing the currency',
            'importable' => 'required',
        ),
        'iso4217' => array(
            'name' => 'iso4217',
            'vname' => 'LBL_LIST_ISO4217',
            'type' => 'varchar',
            'len' => '3',
            'comment' => '3-letter identifier specified by ISO 4217 (ex: USD)',
        ),
        'conversion_rate' => array(
            'name' => 'conversion_rate',
            'vname' => 'LBL_LIST_RATE',
            'type' => 'decimal',
            'default' => '0',
            'len' => '26,6',
            'required' => true,
            'comment' => 'Conversion rate factor (relative to stored value)',
            'importable' => 'required',
            'validation' => array('type' => 'range', 'min' => 0.000001),
        ),
        'status' => array(
            'name' => 'status',
            'vname' => 'LBL_STATUS',
            'type' => 'enum',
            'dbType' => 'varchar',
            'options' => 'currency_status_dom',
            'len' => 100,
            'comment' => 'Currency status',
            'importable' => 'required',
        ),
        'deleted' => array(
            'name' => 'deleted',
            'vname' => 'LBL_DELETED',
            'type' => 'bool',
            'required' => false,
            'reportable' => false,
            'comment' => 'Record deletion indicator'
        ),
        'date_entered' => array(
            'name' => 'date_entered',
            'vname' => 'LBL_DATE_ENTERED',
            'type' => 'datetime',
            'required' => true,
            'comment' => 'Date record created'
        ),
        'date_modified' => array(
            'name' => 'date_modified',
            'vname' => 'LBL_DATE_MODIFIED',
            'type' => 'datetime',
            'required' => true,
            'comment' => 'Date record last modified'
        ),
        'created_by' => array(
            'name' => 'created_by',
            'reportable' => false,
            'vname' => 'LBL_CREATED_BY',
            'type' => 'id',
            'required' => true,
            'comment' => 'User ID who created record'
        ),
        'sync_key' => [
            'is_sync_key' => true,
            'name' => 'sync_key',
            'vname' => 'LBL_SYNC_KEY',
            'type' => 'varchar',
            'enforced' => '',
            'required' => false,
            'massupdate' => false,
            'readonly' => true,
            'default' => null,
            'isnull' => true,
            'no_default' => false,
            'comments' => 'External default id of the remote integration record',
            'help' => '',
            'importable' => 'true',
            'duplicate_merge' => 'disabled',
            'merge_filter' => 'disabled',
            'duplicate_on_record_copy' => 'no',
            'audited' => true,
            'reportable' => true,
            'unified_search' => false,
            'calculated' => false,
            'len' => '100',
            'size' => '20',
            'studio' => [
                'recordview' => true,
                'wirelessdetailview' => true,
                'listview' => false,
                'wirelesseditview' => false,
                'wirelesslistview' => false,
                'wireless_basic_search' => false,
                'wireless_advanced_search' => false,
                'portallistview' => false,
                'portalrecordview' => false,
                'portaleditview' => false,
            ],
        ],
    ),
    'acls' => array('SugarACLAdminOnly' => array('allowUserRead' => true)),
    'indices' => array(
        array('name' => 'currenciespk', 'type' => 'primary', 'fields' => array('id')),
        array('name' => 'idx_currency_name', 'type' => 'index', 'fields' => array('name', 'deleted')),
        [
            'name' => 'idx_currencies_skey',
            'type' => 'unique',
            'fields' => ['sync_key'],
        ],
    )
);
