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

$dictionary['VisualPipeline'] = array(
    'table' => 'visual_pipeline',
    'comment' => 'VisualPipeline is required for module name and routing',
    'audited' => false,
    'activity_enabled' => false,
    'duplicate_merge' => false,
    'fields' => array(
        'enabled_module' =>
            array(
                'required' => false,
                'name' => 'enabled_module',
                'vname' => 'LBL_LIST_ENABLED_MODULE',
                'type' => 'varchar',
                'massupdate' => false,
                'default' => '',
                'no_default' => false,
                'comments' => '',
                'help' => '',
                'importable' => 'true',
                'duplicate_merge' => 'enabled',
                'duplicate_merge_dom_value' => '1',
                'audited' => false,
                'reportable' => true,
                'unified_search' => false,
                'merge_filter' => 'disabled',
                'full_text_search' =>
                    array(
                        'enabled' => '0',
                        'boost' => '1',
                        'searchable' => false,
                    ),
                'calculated' => false,
                'len' => '255',
                'size' => '20',
            ),
        'table_header' =>
            array(
                'required' => true,
                'name' => 'table_header',
                'vname' => 'LBL_PIPELINE_TABLE_HEADER',
                'type' => 'text',
                'comment' => '',
                'full_text_search' =>
                    array(
                        'enabled' => true,
                        'searchable' => true,
                        'boost' => 0.70999999999999996,
                    ),
                'rows' => 6,
                'cols' => 80,
                'duplicate_on_record_copy' => 'always',
            ),
        'hidden_values' =>
            array(
                'name' => 'hidden_values',
                'vname' => 'LBL_PIPELINE_HIDDEN_VALUES',
                'type' => 'text',
                'comment' => '',
                'full_text_search' =>
                    array(
                        'enabled' => true,
                        'searchable' => true,
                        'boost' => 0.70999999999999996,
                    ),
                'rows' => 6,
                'cols' => 80,
                'duplicate_on_record_copy' => 'always',
            ),
        'tile_header' =>
            array(
                'required' => true,
                'name' => 'tile_header',
                'vname' => 'LBL_PIPELINE_TILE_HEADER',
                'type' => 'enum',
                'options' => '',
                'len' => 50,
                'duplicate_on_record_copy' => 'always',
                'comment' => '',
                'merge_filter' => 'enabled',
            ),
        'tile_body_fields' =>
            array(
                'required' => true,
                'name' => 'tile_body_fields',
                'vname' => 'LBL_PIPELINE_TILE_BODY_FIELDS',
                'type' => 'text',
                'comment' => '',
                'full_text_search' =>
                    array(
                        'enabled' => true,
                        'searchable' => true,
                        'boost' => 0.70999999999999996,
                    ),
                'rows' => 6,
                'cols' => 80,
                'duplicate_on_record_copy' => 'always',
            ),
        'records_per_column' =>
            array(
                'required' => true,
                'name' => 'records_per_column',
                'vname' => 'LBL_PIPELINE_RECORDS_PER_COLUMN',
                'type' => 'enum',
                'options' => 'pipeline_records_per_column',
                'len' => '255',
                'audited' => true,
                'merge_filter' => 'enabled',
            ),
        'available_columns' =>
            array(
                'name' => 'available_columns',
                'vname' => 'LBL_PIPELINE_AVAILABLE_COLUMNS',
                'type' => 'text',
                'comment' => 'An array of white-listed column names',
            ),
    ),
);

VardefManager::createVardef('VisualPipeline', 'VisualPipeline', array('default'));
