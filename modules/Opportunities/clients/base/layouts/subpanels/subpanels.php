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
$viewdefs['Opportunities']['base']['layout']['subpanels'] = array(
    'components' => array(
        array(
            'layout' => 'subpanel',
            'label' => 'LBL_CALLS_SUBPANEL_TITLE',
            'context' => array(
                'link' => 'calls',
            ),
        ),
        array(
            'layout' => 'subpanel',
            'label' => 'LBL_MEETINGS_SUBPANEL_TITLE',
            'context' => array(
                'link' => 'meetings',
            ),
        ),
        array(
            'layout' => 'subpanel',
            'label' => 'LBL_TASKS_SUBPANEL_TITLE',
            'context' => array(
                'link' => 'tasks',
            ),
        ),
        array(
            'layout' => 'subpanel',
            'label' => 'LBL_NOTES_SUBPANEL_TITLE',
            'context' => array(
                'link' => 'notes',
            ),
        ),
        array(
            'layout' => 'subpanel-with-massupdate',
            'label' => 'LBL_RLI_SUBPANEL_TITLE',
            'override_subpanel_list_view' => 'subpanel-for-opportunities',
            'context' => array(
                'link' => 'revenuelineitems',
            ),
        ),
        array(
            'layout' => 'subpanel',
            'label' => 'LBL_QUOTE_SUBPANEL_TITLE',
            'context' => array(
                'link' => 'quotes',
            ),
        ),
        array(
            'layout' => 'subpanel',
            'label' => 'LBL_PRODUCTS_SUBPANEL_TITLE',
            'context' => array(
                'link' => 'products',
            ),
        ),
        array(
            'layout' => 'subpanel',
            'label' => 'LBL_INVITEE',
            'override_subpanel_list_view' => 'subpanel-for-opportunities',
            'context' => array(
                'link' => 'contacts',
            ),
        ),
        array(
            'layout' => 'subpanel',
            'label' => 'LBL_LEADS_SUBPANEL_TITLE',
            'context' => array(
                'link' => 'leads',
            ),
        ),
        array(
            'layout' => 'subpanel',
            'label' => 'LBL_DOCUMENTS_SUBPANEL_TITLE',
            'context' => array(
                'link' => 'documents',
            ),
        ),
        array (
            'layout' => 'subpanel',
            'label' => 'LBL_CONTRACTS_SUBPANEL_TITLE',
            'context' => array (
                'link' => 'contracts',
            ),
        ),
        array(
            'layout' => 'subpanel',
            'label' => 'LBL_EMAILS_SUBPANEL_TITLE',
            'override_subpanel_list_view' => 'subpanel-for-opportunities-archived-emails',
            'context' => array (
                'link' => 'archived_emails',
            ),
        ),
        array(
            'layout' => 'subpanel',
            'label' => 'LBL_PROJECTS_SUBPANEL_TITLE',
            'context' => array(
                'link' => 'project',
            )
        ),
        [
            'layout' => 'subpanel',
            'label' => 'LBL_ESCALATIONS_SUBPANEL_TITLE',
            'context' => [
                'link' => 'escalations',
            ],
        ],
    ),
);
