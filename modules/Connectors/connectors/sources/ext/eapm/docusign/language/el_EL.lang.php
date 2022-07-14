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
    'LBL_LICENSING_INFO' => 'Βήματα για τη χρήση της υποδοχής σύνδεσης DocuSign:
        <br> - Δημιουργήστε ένα κλειδί ενοποίησης
        <br> - Ενεργοποιήστε το DocuSign Connect για Φακέλους
       (δηλαδή το webhook που χρησιμοποιείται από το DocuSign για την εγγραφή σε ένα σημείο εισόδου Sugar) 
        <br> - Ρυθμίστε μια νέα εφαρμογή στο DocuSign και φροντίστε να εισαγάγετε το uri ανακατεύθυνσης και να δημιουργήσετε ένα μυστικό κλειδί.
        Το uri ανακατεύθυνσης πρέπει να είναι https://SUGAR_URL/oauth-handler/DocuSignOauth2Redirect
        <br> Σε περίπτωση περιορισμών IP στην περίπτωση Sugar, προσθέστε στη λίστα επιτρεπόμενων τις διευθύνσεις IP του DocuSign',
    'environment' => 'Περιβάλλον',
    'integration_key' => 'Κλειδί ενοποίησης',
    'client_secret' => 'Μυστικό πελάτη',
];
