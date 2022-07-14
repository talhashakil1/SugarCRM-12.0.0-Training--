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

use Sugarcrm\Sugarcrm\Entitlements\SubscriptionManager;

global $current_user;

$productCodes = $current_user->getProductCodes();
$productCodes = urlencode(implode(',', $productCodes));

$flavor = isset($GLOBALS['sugar_flavor']) ? $GLOBALS['sugar_flavor'] : '';
$version = isset($GLOBALS['sugar_version']) ? $GLOBALS['sugar_version'] : '';
$language = isset($GLOBALS['current_language']) ? $GLOBALS['current_language'] : '';
$action = isset($GLOBALS['action']) ? $GLOBALS['action'] : '';
$status = getVersionStatus($version);
$key = isset($GLOBALS['key']) ? $GLOBALS['key'] : '';
$module = 'DocuSignAdmin';

$url = "https://www.sugarcrm.com/crm/product_doc.php?edition={$flavor}&version={$version}&lang={$language}&" .
    "products={$productCodes}&help_action={$action}&status={$status}&key={$key}&module={$module}";

$connector_strings = [
    'LBL_LICENSING_INFO' => "Steps to set up DocuSign connector:
        <br> - Generate an integration key
        <br> - Enable DocuSign Connect for Envelopes
        (i.e. the webhook used by DocuSign for subscribing to a Sugar entrypoint)
        <br> - Set up a new application in DocuSign and make sure to insert the redirect uri and generate a secret key.
        The redirect uri must be https://YOUR_SUGAR_URL/oauth-handler/DocuSignOauth2Redirect
        <br> In case of IP restrictions on Sugar instance, add DocuSign's IP addresses to the allowlist
        <br> For more information, refer to the <a href=\"{$url}\">DocuSign Connector</a> documentation.",
    'environment' => 'Environment',
    'integration_key' => 'Integration Key',
    'client_secret' => 'Client secret',
];
