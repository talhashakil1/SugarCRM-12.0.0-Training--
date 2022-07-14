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
$module_name = 'Escalations';
$viewdefs[$module_name]['base']['menu']['header'] = [
    [
        'route' => '#'.$module_name.'/create',
        'label' => 'LNK_NEW_ESCALATIOM',
        'acl_action' => 'create',
        'acl_module' => $module_name,
        'icon' => 'sicon-plus',
    ],
    [
        'route' => '#'.$module_name,
        'label' => 'LNK_ESCALATION_LIST',
        'acl_action' => 'list',
        'acl_module' => $module_name,
        'icon' => 'sicon-list-view',
    ],
    [
        'route' => '#bwc/index.php?' . http_build_query([
            'module' => 'Import',
            'action' => 'Step1',
            'import_module' => $module_name,
            'return_module' => $module_name,
            'return_action' => 'index',
        ]),
        'label' => 'LNK_IMPORT_ESCALATIONS',
        'acl_action' => 'import',
        'acl_module' => $module_name,
        'icon' => 'sicon-upload',
    ],
];
