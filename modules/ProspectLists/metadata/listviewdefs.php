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


$listViewDefs['ProspectLists'] = [
    'NAME' => [
        'width' => '25',
        'label' => 'LBL_LIST_PROSPECT_LIST_NAME',
        'link' => true,
        'default' => true],
    'LIST_TYPE' => [
        'width' => '15',
        'label' => 'LBL_LIST_TYPE_LIST_NAME',
        'default' => true],
    'DESCRIPTION' => [
        'width' => '40',
        'label' => 'LBL_LIST_DESCRIPTION',
        'default' => true],
    'ASSIGNED_USER_NAME' => [
        'width' => '10',
        'label' => 'LBL_LIST_ASSIGNED_USER',
        'module' => 'Employees',
        'id' => 'ASSIGNED_USER_ID',
        'default' => true],
    'DATE_ENTERED' => [
        'type' => 'datetime',
        'label' => 'LBL_DATE_ENTERED',
        'width' => '10',
        'default' => true],
];
