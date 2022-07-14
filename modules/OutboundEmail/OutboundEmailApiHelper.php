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

class OutboundEmailApiHelper extends SugarBeanApiHelper
{
    /**
     * Fields to unset for 'system-override' accounts
     * @var array
     */
    private $unsetSysOverrides = [
        'mail_sendtype',
        'mail_smtptype',
        'mail_smtpserver',
        'mail_smtpport',
        'mail_smtpauth_req',
        'mail_smtpssl',
    ];

    /**
     * Fields to unset for 'system' and 'system-override' accounts
     * @var array
     */
    private $unsetSys = [
        'name',
        'type',
        'team_id',
        'team_set_id',
        'team_name',
    ];

    /**
     * Fields to unset for all accounts
     * @var array
     */
    private $unsetDefault = [
        'user_id',
    ];

    /**
     * {@inheritdoc}
     *
     * The user_id argument is unset and will be defaulted to the current user when the record is saved. This prevents a
     * user from attempting to steal ownership of a record.
     *
     * The name, type, and team arguments are unset for system and system-override accounts as they cannot be changed. These
     * types of accounts cannot be created through the REST API; only user accounts can. The type field will always
     * become "user" when the record is created. The type field will remain unchanged when updating an existing record
     * of any type.
     */
    public function populateFromApi(\SugarBean $bean, array $submittedData, array $options = [])
    {
        $unset = [];

        // Avoid errors for attempting to change immutable fields by removing those fields.
        switch ($bean->type) {
            case OutboundEmail::TYPE_SYSTEM_OVERRIDE:
                $unset = array_merge($unset, $this->unsetSysOverrides);
                // Fall through to unset fields specified in $unsetSys.
            case OutboundEmail::TYPE_SYSTEM:
                $unset = array_merge($unset, $this->unsetSys);
                // Fall through to unset fields specified in $unsetDefault.
            default:
                $unset = array_merge($unset, $this->unsetDefault);
                break;
        }

        foreach ($unset as $u) {
            unset($submittedData[$u]);
        }

        return parent::populateFromApi($bean, $submittedData, $options);
    }

    /**
     * {@inheritdoc}
     *
     * The password field will return true if the field was requested and a password exists.
     */
    public function formatForApi(SugarBean $bean, array $fieldList = array(), array $options = array())
    {
        /*
         * When retrieving a list of OutboundEmail records that includes the system account, FilterApi::populateRelatedFields()
         * creates an instance of an EmailAddress bean on $bean->related_beans for the system account, which contains
         * the email_address field with the value of the email address for the system account. When formatting
         * the system account for the response, the system account's email address value is then set on the
         * response object by SugarFieldRelate::apiFormatField(). This overwrites the email address that
         * might have been set on the bean by the logic from OutboundEmail::populateFromRow() and
         * OutboundEmail::populateFromUser() when the bean was first loaded by SugarBean::fetchFromQuery().
         * We want to respond with the data that is already on set on the bean. Unsetting the related bean for the
         * email_address link guarantees that SugarFieldRelate::apiFormatField() will fall back to using the existing
         * value on the bean instead of using the value from the related bean.
         */
        unset($bean->related_beans['email_addresses']);

        $record = parent::formatForApi($bean, $fieldList, $options);

        if (isset($record['mail_smtppass'])) {
            $record['mail_smtppass'] = empty($record['mail_smtppass']) ? null : true;
        }

        return $record;
    }
}
