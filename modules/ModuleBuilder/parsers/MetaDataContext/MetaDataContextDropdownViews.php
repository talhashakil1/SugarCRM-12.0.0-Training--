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

/**
 * Dropdown based metadata context
 */
class MetaDataContextDropdownViews implements MetaDataContextInterface
{
    /** {@inheritDoc} */
    public function getHash()
    {
        return null;
    }

    /** {@inheritDoc} */
    public function isValid(array $file)
    {
        // dropdownField and dropdownValue should set in params to be valid
        return isset($file['params']['dropdownField']) && isset($file['params']['dropdownValue']);
    }

    /** {@inheritDoc} */
    public function compare(array $a, array $b)
    {
        // all files are equal since they are not context specific
        return 0;
    }
}
