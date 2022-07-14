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

namespace Sugarcrm\Sugarcrm\Elasticsearch\Query\Aggregation;

use Sugarcrm\Sugarcrm\Elasticsearch\Mapping\Mapping;

/**
 *
 * Module aggregation
 *
 */
class ModuleAggregation extends TermsAggregation
{
    /**
     * Ctor
     * @param integer $size
     */
    public function __construct($size = 5)
    {
        $this->setOptions(array(
            'field' => Mapping::MODULE_NAME_FIELD,
            'size' => $size,
            'order' => array('_count', 'desc'),
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function buildMapping(Mapping $mapping, $field, array $defs)
    {
        // Nothing to do here as _type field is already implied in the mapping.
    }

}
