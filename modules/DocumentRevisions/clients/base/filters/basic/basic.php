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
$viewdefs['DocumentRevisions']['base']['filter']['basic'] = [
    'create' => false,
    'quicksearch_field' => ['filename'],
    'quicksearch_priority' => 1,
    'filters' => [
        [
            'id' => 'revisions_for_doc',
            'name' => 'LBL_REVISIONS_FOR_DOC',
            'filter_definition' => [
                [
                    'document_id' => [
                        '$in' => [],
                    ],
                ],
            ],
            'editable' => true,
            'is_template' => true,
        ],
    ],
];
