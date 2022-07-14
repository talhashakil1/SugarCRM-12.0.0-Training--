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
$viewdefs['ProspectLists']['EditView'] = [
    'templateMeta' => [
        'form' => ['hidden' => ['<input type="hidden" name="campaign_id" value="{$smarty.request.campaign_id}">']],
        'maxColumns' => '2',
        'widths' => [
            ['label' => '10', 'field' => '30'],
            ['label' => '10', 'field' => '30'],
        ],
        'javascript' => '<script type="text/javascript">
function toggle_domain_name(list_type)  {ldelim} 
    domain_name = document.getElementById(\'domain_name_div\');
    domain_label = document.getElementById(\'domain_label_div\');
    if (list_type.value == \'exempt_domain\')  {ldelim} 
        domain_name.style.display=\'block\'; 
        domain_label.style.display=\'block\';
     {rdelim}  else  {ldelim} 
        domain_name.style.display=\'none\';
        domain_label.style.display=\'none\';
     {rdelim} 
 {rdelim} 
</script>',
    ],
    'panels' => [
        'default' => [
            [
                ['name' => 'name', 'displayParams' => ['required' => true]],
                [
                    'name' => 'list_type',
                    'displayParams' => [
                        'required' => true,
                        'javascript' => 'onchange="toggle_domain_name(this);"',
                    ],
                ],
            ], [
                ['name' => 'description'],
                [
                    'name' => 'domain_name',
                    'customLabel' => '<div {if $fields.list_type.value != "exempt_domain"} '
                        . 'style=\'display:none\'{/if} id=\'domain_label_div\'>{$MOD.LBL_DOMAIN}</div>',
                    'customCode' => '<div {if $fields.list_type.value != "exempt_domain"} '
                        . 'style=\'display:none\'{/if} id=\'domain_name_div\'><input name="domain_name" '
                        . 'id="domain_name" maxlength="255" type="text" value="{$fields.domain_name.value}"></div>',
                ],
            ],

        ],
        'LBL_PANEL_ASSIGNMENT' => [
            [
                [
                    'name' => 'assigned_user_name',
                    'label' => 'LBL_ASSIGNED_TO_NAME',
                ],
                [
                    'name' => 'team_name',
                    'displayParams' => ['display' => true],
                ],
            ],
        ],
    ],
];
