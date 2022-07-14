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

class ProspectListsApiHelper extends SugarBeanApiHelper
{
    /**
     * {@inheritDoc}
     */
    public function formatForApi(\SugarBean $bean, array $fieldList = array(), array $options = array())
    {
        /** @var ProspectList $bean */
        $bean->entry_count = $bean->get_entry_count();
        return parent::formatForApi($bean, $fieldList, $options);
    }
}
