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
$viewdefs['Opportunities']['base']['filter']['create-add-on']['filters'][] = [
    'id' => 'filterOpportunityTemplate',
    'name' => 'LBL_FILTER_OPPORTUNITY_TEMPLATE',
    'filter_definition' => array(
        array(
            'account_id' => '',
        ),
    ),
    'editable' => true,
    'is_template' => true,
];
