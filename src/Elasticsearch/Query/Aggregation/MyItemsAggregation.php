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

/**
 *
 * The implementation class for MyItems Aggregation based on
 * on current user context.
 *
 */
class MyItemsAggregation extends FilterAggregation
{
    /**
     * {@inheritdoc}
     */
    protected function getAggFilter($field)
    {
        return new \Elastica\Query\Terms($field, array($this->user->id));
    }
}
