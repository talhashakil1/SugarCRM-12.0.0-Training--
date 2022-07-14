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

$connector_strings = [
    'LBL_LICENSING_INFO' => 'Kroky k použití konektoru DocuSign:
        <br> - Vygenerujte integrační klíč
        <br> - Povolte funkci DocuSign Connect pro obálky
        (tj. webhook používaný DocuSign pro přihlášení ke vstupnímu bodu Sugar.)
        <br> - Nastavte novou aplikaci v DocuSign, nezapomeňte vložit identifikátor uri přesměrování a vygenerujte tajný klíč.
        Identifikátor uri přesměrování musí být https://SUGAR_URL/oauth-handler/DocuSignOauth2Redirect
        <br> V případě omezení IP adres v instanci Sugar vytvořte seznam povolených IP adres adres DocuSign',
    'environment' => 'Prostředí',
    'integration_key' => 'Integrační klíč',
    'client_secret' => 'Tajný klíč klienta',
];
