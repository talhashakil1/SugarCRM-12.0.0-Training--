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


class SugarFieldPassword extends SugarFieldBase
{
    /**
     * @see SugarFieldBase::importSanitize()
     */
    public function importSanitize(
        $value,
        $vardef,
        $focus,
        ImportFieldSanitize $settings
        )
    {
        $value = User::getPasswordHash($value);

        return $value;
    }

    /**
     * {@inheritDoc}
     */
    public function apiFormatField(
        array &$data,
        SugarBean $bean,
        array $args,
        $fieldName,
        $properties,
        array $fieldList = null,
        ServiceBase $service = null
    ) {
        $this->ensureApiFormatFieldArguments($fieldList, $service);

        $data[$fieldName] = true;
        if(empty($bean->$fieldName)) {
            $data[$fieldName] = null;
        }
    }

    /**
     * Encrypt and save a password
     * {@inheritdoc}
     */
    public function apiSave(SugarBean $bean, array $params, $fieldName, $properties)
    {
        if(!isset($params[$fieldName])) {
            return;
        }
        if(empty($params[$fieldName])) {
            $bean->$fieldName = null;
        } elseif($params[$fieldName] !== true) {
            $bean->$fieldName = User::getPasswordHash($params[$fieldName]);
        }
    }

    /**
     * Validate password from api
     *
     * @param SugarBean $bean
     * @param array $params
     * @param string $field
     * @param array $properties
     * @return boolean
     */
    public function apiValidate(SugarBean $bean, array $params, $field, $properties)
    {
        // We only enforce portal password here. Free form passwords are still used in other areas,
        // enforcing all of them would cause existing behaviors change and test failures.
        if (!empty($params[$field]) &&
            !empty($properties['group']) &&
            $properties['group'] === 'portal') {
            return BeanFactory::getBean('Users')->check_password_rules($params[$field]);
        }
        return parent::apiValidate($bean, $params, $field, $properties);
    }
}
