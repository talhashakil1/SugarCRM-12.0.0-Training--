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
$module_name = 'Prospects';
$viewdefs[$module_name]['base']['menu']['header'] = array(
    array(
        'route'=>'#'.$module_name.'/create',
        'label' =>'LNK_NEW_PROSPECT',
        'acl_action'=>'create',
        'acl_module'=>$module_name,
        'icon' => 'sicon-plus',
    ),
    array(
        'route'=>'#'.$module_name.'/vcard-import',
        'label' =>'LNK_IMPORT_VCARD',
        'acl_action'=>'create',
        'acl_module'=>$module_name,
        'icon' => 'sicon-plus',
    ),
    array(
        'route'=>'#'.$module_name,
        'label' =>'LNK_PROSPECT_LIST',
        'acl_action'=>'list',
        'acl_module'=>$module_name,
        'icon' => 'sicon-list-view',
    ),
    array(
        'route'=>'#bwc/index.php?module=Import&action=Step1&import_module=Prospects&return_module=Prospects&return_action=index',
        'label' =>'LNK_IMPORT_PROSPECTS',
        'acl_action'=>'import',
        'acl_module'=>$module_name,
        'icon' => 'sicon-upload',
    ),
);
