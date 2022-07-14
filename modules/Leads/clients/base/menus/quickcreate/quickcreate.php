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

$module_name = 'Leads';
$viewdefs[$module_name]['base']['menu']['quickcreate'] = array(
    'layout' => 'create',
    'label' => 'LNK_NEW_LEAD',
    'visible' => true,
    'order' => 4,
    'icon' => 'sicon-plus',
    'related' => array(
        array(
            'module' => 'Accounts',
            'link' => 'leads',
        ),
        array(
            'module' => 'Contacts',
            'link' => 'leads',
        ),
        array(
            'module' => 'Opportunities',
            'link' => 'leads',
        ),
    ),
);
