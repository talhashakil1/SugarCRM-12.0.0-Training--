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
/*********************************************************************************
 * Portions created by SugarCRM are Copyright (C) SugarCRM, Inc.
 * All Rights Reserved.
 * Contributor(s): ______________________________________..
 ********************************************************************************/

$viewdefs['Accounts']['mobile']['view']['detail'] = [
    'templateMeta' => [
        'maxColumns' => '1',
        'widths' => [
            [
                'label' => '10',
                'field' => '30',
            ],
        ],
    ],
    'panels' => [
        [
            'label' => 'LBL_PANEL_DEFAULT',
            'fields' => [
                [
                    'name'=>'name',
                    'displayParams' => [
                        'required' => true,
                        'wireless_edit_only' => true,
                    ],
                ],
                'phone_office',
                [
                    'name' => 'website',
                    'displayParams' => [
                        'type'=>'link',
                    ],
                ],
                'email',
                'tag',
                'billing_address_street',
                'billing_address_city',
                'billing_address_state',
                'billing_address_postalcode',
                'billing_address_country',
                'shipping_address_street',
                'shipping_address_city',
                'shipping_address_state',
                'shipping_address_postalcode',
                'shipping_address_country',
                'assigned_user_name',
                'team_name',
            ],
        ],
    ],
];
