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

$dictionary['messages_leads'] = [
    'table' => 'messages_leads',
    'fields' => [
        'id' => [
            'name' => 'id',
            'type' => 'id',
        ],
        'message_id' => [
            'name' => 'message_id',
            'type' => 'id',
        ],
        'lead_id' => [
            'name' => 'lead_id',
            'type' => 'id',
        ],
        'required' => [
            'name' => 'required',
            'type' => 'varchar',
            'len' => '1',
            'default' => '1',
        ],
        'accept_status' => [
            'name' => 'accept_status',
            'type' => 'varchar',
            'len' => '25',
            'default' => 'none',
        ],
        'date_modified' => [
            'name' => 'date_modified',
            'type' => 'datetime',
        ],
        'deleted' => [
            'name' => 'deleted',
            'type' => 'bool',
            'len' => '1',
            'default' => '0',
            'required' => false,
        ],
    ],
    'indices' => [
        [
            'name' => 'messages_leadspk',
            'type' => 'primary',
            'fields' => [
                'id',
            ],
        ],
        [
            'name' => 'idx_lead_message_lead',
            'type' => 'index',
            'fields' => [
                'lead_id',
            ],
        ],
        [
            'name' => 'idx_message_lead',
            'type' => 'alternate_key',
            'fields' => [
                'message_id',
                'lead_id',
            ],
        ],
    ],
    'relationships' => [
        'messages_leads' => [
            'lhs_module' => 'Messages',
            'lhs_table' => 'messages',
            'lhs_key' => 'id',
            'rhs_module' => 'Leads',
            'rhs_table' => 'leads',
            'rhs_key' => 'id',
            'relationship_type' => 'many-to-many',
            'join_table' => 'messages_leads',
            'join_key_lhs' => 'message_id',
            'join_key_rhs' => 'lead_id',
        ],
    ],
];
