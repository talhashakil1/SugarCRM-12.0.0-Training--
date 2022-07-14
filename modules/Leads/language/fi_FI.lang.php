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

$mod_strings = array (
    //DON'T CONVERT THESE THEY ARE MAPPINGS
    'db_last_name' => 'LBL_LIST_LAST_NAME',
    'db_first_name' => 'LBL_LIST_FIRST_NAME',
    'db_title' => 'LBL_LIST_TITLE',
    'db_email1' => 'LBL_LIST_EMAIL_ADDRESS',
    'db_account_name' => 'LBL_LIST_ACCOUNT_NAME',
    'db_email2' => 'LBL_LIST_EMAIL_ADDRESS',

    //END DON'T CONVERT

    // Dashboard Names
    'LBL_LEADS_LIST_DASHBOARD' => 'Liidiluettelon työpöytä',
    'LBL_LEADS_RECORD_DASHBOARD' => 'Liiditietueiden työpöytä',
    'LBL_LEADS_FOCUS_DRAWER_DASHBOARD' => 'Liidit-tietolaatikko',

    'ERR_DELETE_RECORD' => 'Tietuenumero tulee määritellä, jotta voit poistaa liidin.',
    'LBL_ACCOUNT_DESCRIPTION'=> 'Asiakkaan kuvaus',
    'LBL_ACCOUNT_ID'=>'Asiakkaan ID',
    'LBL_ACCOUNT_NAME' => 'Asiakkaan nimi:',
    'LBL_ACTIVITIES_SUBPANEL_TITLE'=>'Aktiviteetit',
    'LBL_ADD_BUSINESSCARD' => 'Lisää käyntikortti',
    'LBL_ADDRESS_INFORMATION' => 'Osoitetiedot',
    'LBL_ALT_ADDRESS_CITY' => 'Vaihtoehtoinen kaupunki',
    'LBL_ALT_ADDRESS_COUNTRY' => 'Vaihtoehtoinen maa',
    'LBL_ALT_ADDRESS_POSTALCODE' => 'Vaihtoehtoinen postinumero',
    'LBL_ALT_ADDRESS_STATE' => 'Vaihtoehtoinen osavaltio',
    'LBL_ALT_ADDRESS_STREET_2' => 'Vaihtoehtoinen katu 2',
    'LBL_ALT_ADDRESS_STREET_3' => 'Vaihtoehtoinen katu 3',
    'LBL_ALT_ADDRESS_STREET' => 'Vaihtoehtoinen katu',
    'LBL_ALTERNATE_ADDRESS' => 'Muu osoite:',
    'LBL_ANY_ADDRESS' => 'Mikä tahansa osoite:',
    'LBL_ANY_EMAIL' => 'Sähköposti:',
    'LBL_ANY_PHONE' => 'Mikä tahansa puhelinnumero:',
    'LBL_ASSIGNED_TO_NAME' => 'Vastuuhenkilö',
    'LBL_ASSIGNED_TO_ID' => 'Vastuuhenkilö:',
    'LBL_BACKTOLEADS' => 'Takaisin liideihin',
    'LBL_BUSINESSCARD' => 'Muunna liidi',
    'LBL_CITY' => 'Kaupunki:',
    'LBL_CONTACT_ID' => 'Kontaktin ID',
    'LBL_CONTACT_INFORMATION' => 'Yleiskatsaus',
    'LBL_CONTACT_NAME' => 'Liidin nimi:',
    'LBL_CONTACT_OPP_FORM_TITLE' => 'Liidi-tilaisuus:',
    'LBL_CONTACT_ROLE' => 'Rooli:',
    'LBL_CONTACT' => 'Liidi:',
    'LBL_CONVERT_BUTTON_LABEL' => 'Muunna',
    'LBL_SAVE_CONVERT_BUTTON_LABEL' => 'Tallenna ja muuta',
    'LBL_CONVERT_PANEL_OPTIONAL' => '(valinnainen)',
    'LBL_CONVERT_ACCESS_DENIED' => 'Sinulla ei ole muokkausoikeutta liidin muunnokseen tarvituille moduuleille: {{requiredModulesMissing}}',
    'LBL_CONVERT_FINDING_DUPLICATES' => 'Etsitään duplikaatteja...',
    'LBL_CONVERT_IGNORE_DUPLICATES' => 'Ohita ja luo uusi',
    'LBL_CONVERT_BACK_TO_DUPLICATES' => 'Takaisin duplikaatteihin',
    'LBL_CONVERT_SWITCH_TO_CREATE' => 'Luo uusi',
    'LBL_CONVERT_SWITCH_TO_SEARCH' => 'Haku',
    'LBL_CONVERT_DUPLICATES_FOUND' => 'Löytyi {{duplicateCount}} duplikaattia',
    'LBL_CONVERT_CREATE_NEW' => 'Uusi {{moduleName}}',
    'LBL_CONVERT_SELECT_MODULE' => 'Valitse {{moduleName}}',
    'LBL_CONVERT_SELECTED_MODULE' => 'Valitaan {{moduleName}}',
    'LBL_CONVERT_CREATE_MODULE' => 'Luo {{moduleName}}',
    'LBL_CONVERT_CREATED_MODULE' => 'Luodaan {{moduleName}}',
    'LBL_CONVERT_RESET_PANEL' => 'Palauta',
    'LBL_CONVERT_COPY_RELATED_ACTIVITIES' => 'Kopioi liittyvät aktiviteetit kohteeseen',
    'LBL_CONVERT_MOVE_RELATED_ACTIVITIES' => 'Siirrä liittyvät aktiviteetit kohteeseen',
    'LBL_CONVERT_MOVE_ACTIVITIES_TO_CONTACT' => 'Siirrä liittyvät toiminnot kontaktin tietueelle',
    'LBL_CONVERTED_ACCOUNT'=>'Muunnettu asiakas:',
    'LBL_CONVERTED_CONTACT' => 'Muunnettu kontakti:',
    'LBL_CONVERTED_OPP'=>'Muunnettu tilaisuus:',
    'LBL_CONVERTED'=> 'Muunnettu',
    'LBL_CONVERTLEAD_BUTTON_KEY' => 'V',
    'LBL_CONVERTLEAD_TITLE' => 'Muunna liidi',
    'LBL_CONVERTLEAD' => 'Muunna liidi',
    'LBL_CONVERTLEAD_WARNING' => 'Varoitus: aiot muuntaa liidin jonka tila on jo ‘muunnettu’. Kontakti- ja/tai asiakastietueita on ehkä jo luotu liidistä. Jos haluat jatkaa liidin muuntamisella, paina Tallenna. Palataksesi liidiin muuntamatta sitä, paina Peruuta.',
    'LBL_CONVERTLEAD_WARNING_INTO_RECORD' => 'Mahdollinen kontakti:',
    'LBL_CONVERTLEAD_ERROR' => 'Ei voitu muuntaa liidiä',
    'LBL_CONVERTLEAD_FILE_WARN' => 'Liidi {{leadName}} muunnettiin, mutta liitteiden lataamisessa ilmeni joitain ongelmia joissakin tietueissa.',
    'LBL_CONVERTLEAD_SUCCESS' => 'Liidi {{leadName}} muunnettiin.',
    'LBL_COUNTRY' => 'Maa:',
    'LBL_CREATED_NEW' => 'Luotiin uusi',
	'LBL_CREATED_ACCOUNT' => 'Luotiin uusi tili',
    'LBL_CREATED_CALL' => 'Luotiin uusi puhelu',
    'LBL_CREATED_CONTACT' => 'Luotiin uusi kontakti',
    'LBL_CREATED_MEETING' => 'Luotiin uusi kokous',
    'LBL_CREATED_OPPORTUNITY' => 'Luotiin uusi myyntimahdollisuus',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Liidit',
    'LBL_DEPARTMENT' => 'Osasto:',
    'LBL_DESCRIPTION_INFORMATION' => 'Kuvaustietoja',
    'LBL_DESCRIPTION' => 'Kuvaus:',
    'LBL_DO_NOT_CALL' => 'Älä soita:',
    'LBL_DUPLICATE' => 'Samanlaisia liidejä',
    'LBL_EMAIL_ADDRESS' => 'Sähköpostiosoite:',
    'LBL_EMAIL_OPT_OUT' => 'Ei lähetetä sähköpostia:',
    'LBL_EXISTING_ACCOUNT' => 'Käytetään olemassa olevaa tiliä',
    'LBL_EXISTING_CONTACT' => 'Käytetään jo olemassa olevaa kontaktia',
    'LBL_EXISTING_OPPORTUNITY' => 'Käytetään jo olemassa olevaa mahdollisuutta',
    'LBL_FAX_PHONE' => 'Faksi:',
    'LBL_FIRST_NAME' => 'Etunimi:',
    'LBL_FULL_NAME' => 'Koko nimi:',
    'LBL_HISTORY_SUBPANEL_TITLE'=>'Historia',
    'LBL_HOME_PHONE' => 'Kotipuhelin:',
    'LBL_IMPORT_VCARD' => 'Tuo vCard',
    'LBL_IMPORT_VCARD_SUCCESS' => 'Liidi luotiin vCardista',
    'LBL_VCARD' => 'vCard',
    'LBL_IMPORT_VCARDTEXT' => 'Luo automaattisesti uusi liidi tuomalla vCard tiedostojärjestelmästäsi.',
    'LBL_INVALID_EMAIL'=>'Virheellinen sähköposti:',
    'LBL_INVITEE' => 'Suora raportointi',
    'LBL_LAST_NAME' => 'Sukunimi:',
    'LBL_LEAD_SOURCE_DESCRIPTION' => 'Liidin lähteen kuvaus:',
    'LBL_LEAD_SOURCE' => 'Liidin lähde:',
    'LBL_LIST_ACCEPT_STATUS' => 'Hyväksynnän tila',
    'LBL_LIST_ACCOUNT_NAME' => 'Asiakkaan nimi',
    'LBL_LIST_CONTACT_NAME' => 'Liidin nimi',
    'LBL_LIST_CONTACT_ROLE' => 'Rooli',
    'LBL_LIST_DATE_ENTERED' => 'Luontipäivä',
    'LBL_LIST_EMAIL_ADDRESS' => 'Sähköposti',
    'LBL_LIST_FIRST_NAME' => 'Etunimi',
    'LBL_VIEW_FORM_TITLE' => 'Liidinäkymä',
    'LBL_LIST_FORM_TITLE' => 'Liidilista',
    'LBL_LIST_LAST_NAME' => 'Sukunimi',
    'LBL_LIST_LEAD_SOURCE_DESCRIPTION' => 'Liidin lähteen kuvaus',
    'LBL_LIST_LEAD_SOURCE' => 'Liidin lähde',
    'LBL_LIST_MY_LEADS' => 'Omat liidit',
    'LBL_LIST_NAME' => 'Nimi',
    'LBL_LIST_PHONE' => 'Toimiston puhelin',
    'LBL_LIST_REFERED_BY' => 'Viitattu',
    'LBL_LIST_STATUS' => 'Tila',
    'LBL_LIST_TITLE' => 'Titteli',
    'LBL_MARKET_INTEREST_PREDICTION' => 'Markkinakorkoennuste',
    'LBL_MARKET_SCORE' => 'Markkinointipisteytys',
    'LBL_MOBILE_PHONE' => 'Matkapuhelin:',
    'LBL_MODULE_NAME' => 'Liidit',
    'LBL_MODULE_NAME_SINGULAR' => 'Liidi',
    'LBL_MODULE_TITLE' => 'Liidit: Etusivu',
    'LBL_NAME' => 'Nimi:',
    'LBL_NEW_FORM_TITLE' => 'Uusi liidi',
    'LBL_NEW_PORTAL_PASSWORD' => 'Uusi portaalin salasana:',
    'LBL_OFFICE_PHONE' => 'Toimistopuhelin:',
    'LBL_OPP_NAME' => 'Myyntimahdollisuuden nimi:',
    'LBL_OPPORTUNITY_AMOUNT' => 'Myyntimahdollisuuden määrä:',
    'LBL_OPPORTUNITY_ID'=>'Myyntimahdollisuuden ID',
    'LBL_OPPORTUNITY_NAME' => 'Myyntimahdollisuuden nimi:',
    'LBL_CONVERTED_OPPORTUNITY_NAME' => 'Muunnetun myyntimahdollisuuden nimi',
    'LBL_OTHER_EMAIL_ADDRESS' => 'Muu sähköposti:',
    'LBL_OTHER_PHONE' => 'Muu puhelin:',
    'LBL_PHONE' => 'Puhelin:',
    'LBL_PORTAL_ACTIVE' => 'Portaali aktiivinen:',
    'LBL_PORTAL_APP'=> 'Portaalisovellus',
    'LBL_PORTAL_INFORMATION' => 'Portaalin tiedot',
    'LBL_PORTAL_NAME' => 'Portaalin nimi:',
    'LBL_PORTAL_PASSWORD_ISSET' => 'Portaalin salasana asetettu:',
    'LBL_POSTAL_CODE' => 'Postinumero:',
    'LBL_STREET' => 'Katuosoite',
    'LBL_PRIMARY_ADDRESS_CITY' => 'Ensisijainen osoite, kaupunki',
    'LBL_PRIMARY_ADDRESS_COUNTRY' => 'Ensisijainen osoite, maa',
    'LBL_PRIMARY_ADDRESS_POSTALCODE' => 'Ensisijainen osoite, postinumero',
    'LBL_PRIMARY_ADDRESS_STATE' => 'Ensisijainen osoite, osavaltio',
    'LBL_PRIMARY_ADDRESS_STREET_2'=>'Ensisijainen osoite, katuosoite 2',
    'LBL_PRIMARY_ADDRESS_STREET_3'=>'Ensisijainen osoite, katuosoite 3',
    'LBL_PRIMARY_ADDRESS_STREET' => 'Ensisijainen osoite, katuosoite',
    'LBL_PRIMARY_ADDRESS' => 'Ensisijainen osoite:',
    'LBL_RECORD_SAVED_SUCCESS' => '{{moduleSingularLower}}<a href="#{{buildRoute model=this}}"></a> on luotu.',
    'LBL_REFERED_BY' => 'Viitattu:',
    'LBL_REPORTS_TO_ID'=>'Raportoi ID:lle',
    'LBL_REPORTS_TO' => 'Raportoi henkilölle:',
    'LBL_REPORTS_FROM' => 'Raportit:',
    'LBL_SALUTATION' => 'Puhuttelumuoto',
    'LBL_MODIFIED'=>'Muokannut',
	'LBL_MODIFIED_ID'=>'Muokkaajan ID',
	'LBL_CREATED'=>'Luonut',
	'LBL_CREATED_ID'=>'Luojan ID',
    'LBL_SEARCH_FORM_TITLE' => 'Liidihaku',
    'LBL_SELECT_CHECKED_BUTTON_LABEL' => 'Valitse tarkastetut liidit',
    'LBL_SELECT_CHECKED_BUTTON_TITLE' => 'Valitse tarkastetut liidit',
    'LBL_STATE' => 'Osavaltio:',
    'LBL_STATUS_DESCRIPTION' => 'Tilan kuvaus:',
    'LBL_STATUS' => 'Tila:',
    'LBL_TITLE' => 'Titteli:',
    'LBL_UNCONVERTED'=> 'Muuntamattomat',
    'LNK_IMPORT_VCARD' => 'Luo liidi vCardista',
    'LNK_LEAD_LIST' => 'Näytä liidit',
    'LNK_NEW_ACCOUNT' => 'Luo asiakas',
    'LNK_NEW_APPOINTMENT' => 'Luo tapaaminen',
    'LNK_NEW_CONTACT' => 'Luo kontakti',
    'LNK_NEW_LEAD' => 'Luo liidi',
    'LNK_NEW_NOTE' => 'Luo muistiinpano',
    'LNK_NEW_TASK' => 'Luo tehtävä',
    'LNK_NEW_CASE' => 'Luo asia',
    'LNK_NEW_CALL' => 'Kirjaa puhelu',
    'LNK_NEW_MEETING' => 'Varaa kokous',
    'LNK_NEW_OPPORTUNITY' => 'Luo myyntimahdollisuus',
	'LNK_SELECT_ACCOUNTS' => ' <b> TAI </b> Valitse asiakas',
    'LNK_SELECT_CONTACTS' => ' <b>TAI</b> Valitse kontakti',
    'NTC_COPY_ALTERNATE_ADDRESS' => 'Kopioi vaihtoehtoinen osoite ensisijaiseen osoitteeseen',
    'NTC_COPY_PRIMARY_ADDRESS' => 'Kopioi ensisijainen osoite vaihtoehtoiseen osoitteeseen',
    'NTC_DELETE_CONFIRMATION' => 'Haluatko poistaa tämän tietueen?',
    'NTC_OPPORTUNITY_REQUIRES_ACCOUNT' => 'Myyntimahdollisuuden luominen vaatii tilin.\n Luo tili tai valitse olemassa oleva tili.',
    'NTC_REMOVE_CONFIRMATION' => 'Haluatko poistaa tämän liidin tästä tapauksesta?',
    'NTC_REMOVE_DIRECT_REPORT_CONFIRMATION' => 'Oletko varma, että haluat poistaa tämän tietueen suorana raporttina?',
    'LBL_CAMPAIGN_LIST_SUBPANEL_TITLE'=>'Kampanjaloki',
    'LBL_TARGET_OF_CAMPAIGNS'=>'Onnistunut kampanja:',
    'LBL_TARGET_BUTTON_LABEL'=>'Kohdennettu',
    'LBL_TARGET_BUTTON_TITLE'=>'Kohdennettu',
    'LBL_TARGET_BUTTON_KEY'=>'L',
    'LBL_CAMPAIGN' => 'Kampanja:',
  	'LBL_LIST_ASSIGNED_TO_NAME' => 'Vastuuhenkilö',
    'LBL_PROSPECT_LIST' => 'Prospektilista',
    'LBL_PROSPECT' => 'Tavoite',
    'LBL_CAMPAIGN_LEAD' => 'Kampanjat',
	'LNK_LEAD_REPORTS' => 'Näytä liidiraportit',
    'LBL_BIRTHDATE' => 'Syntymäaika:',
    'LBL_THANKS_FOR_SUBMITTING_LEAD' =>'Kiitos viestistäsi.',
    'LBL_SERVER_IS_CURRENTLY_UNAVAILABLE' =>'Palvelimeen ei saada yhteyttä. Yritä myöhemmin uudelleen.',
    'LBL_ASSISTANT_PHONE' => 'Assistentin puhelin',
    'LBL_ASSISTANT' => 'Assistentti',
    'LBL_REGISTRATION' => 'Ilmoittautuminen',
    'LBL_MESSAGE' => 'Syötä tietosi alle. Tiedot ja/tai tili luodaan sinulle, hyväksyntää odottaen.',
    'LBL_SAVED' => 'Kiitos rekisteröinnistä. Tilisi luodaan ja joku ottaan sinuun pian yhteyttä.',
    'LBL_CLICK_TO_RETURN' => 'Palaa portaaliin',
    'LBL_CREATED_USER' => 'Luoja',
    'LBL_MODIFIED_USER' => 'Muokkaaja',
    'LBL_CAMPAIGNS' => 'Kampanjat',
    'LBL_CAMPAIGNS_SUBPANEL_TITLE' => 'Kampanjat',
    'LBL_CONVERT_MODULE_NAME' => 'Moduuli',
    'LBL_CONVERT_MODULE_NAME_SINGULAR' => 'Moduuli',
    'LBL_CONVERT_REQUIRED' => 'Pakollinen',
    'LBL_CONVERT_SELECT' => 'Salli valinta',
    'LBL_CONVERT_COPY' => 'Kopioi tiedot',
    'LBL_CONVERT_EDIT' => 'Muokkaa',
    'LBL_CONVERT_DELETE' => 'Poista',
    'LBL_CONVERT_ADD_MODULE' => 'Lisää moduuli',
    'LBL_CONVERT_EDIT_LAYOUT' => 'Muokkaa muuntoasettelua',
    'LBL_CREATE' => 'Luo',
    'LBL_SELECT' => ' <b>TAI</b> Valitse',
	'LBL_WEBSITE' => 'Verkkosivusto',
	'LNK_IMPORT_LEADS' => 'Tuo liidit',
	'LBL_NOTICE_OLD_LEAD_CONVERT_OVERRIDE' => 'Huomio: nykyinen Muunna liidi -näyttö sisältää mukautettuja kenttiä. Kun mukautat Muunna liidi -näyttöä Studiossa ensimmäisen kerran, sinun pitää lisätä mukautettuja kenttiä asetteluun tarpeen mukaan. Mukautetut kentät eivät automaattisesti näy asettelussa, toisin kuin aiemmin.',
//Convert lead tooltips
	'LBL_MODULE_TIP' 	=> 'Moduuli, johon luodaan uusi tietue',
	'LBL_REQUIRED_TIP' 	=> 'Pakolliset moduulit pitää luoda tai valita, ennen kuin liidi voidaan muuntaa.',
	'LBL_COPY_TIP'		=> 'Jos tämä on valittu, liidin kentät kopioidaan samannimisiin kenttiin uusissa tietueissa.',
	'LBL_SELECTION_TIP' => 'Moduulit, joilla on kontakteihin liittyvä kenttä voidaan valita luonnin sijaan liidin muunnosprosessissa.',
	'LBL_EDIT_TIP'		=> 'Muokkaa muunnoksen asettelua tälle moduulille.',
	'LBL_DELETE_TIP'	=> 'Poista tämä moduuli muunnoksen asettelusta.',

    'LBL_ACTIVITIES_MOVE'   => 'Siirrä aktiviteetit',
    'LBL_ACTIVITIES_COPY'   => 'Kopioi aktiviteetit',
    'LBL_ACTIVITIES_MOVE_HELP'   => "Valitse tietue, joka pitäisi siirtää liidin aktiviteetteihin. Tehtävät, puhelut, kokoukset, muistiinpanot ja sähköpostit siirretään valittuihin tietueisiin.",
    'LBL_ACTIVITIES_COPY_HELP'   => "Valitse tietueet, joille luoda kopioita liidin aktiviteeteista. Uudet tehtävät, puhelut, kokoukset, ja muistiinpanot luodaan jokaiselle valitulle tietueelle. Sähköpostit liitetään (relate) valittuihin tietueisiin.",
    //For export labels
    'LBL_PHONE_HOME' => 'Kotipuhelin',
    'LBL_PHONE_MOBILE' => 'Matkapuhelin',
    'LBL_PHONE_WORK' => 'Työpuhelin',
    'LBL_PHONE_OTHER' => 'Muu puhelin',
    'LBL_PHONE_FAX' => 'Puhelin, faksi',
    'LBL_CAMPAIGN_ID' => 'Kampanjan ID',
    'LBL_EXPORT_ASSIGNED_USER_NAME' => 'Vastuuhenkilön nimi',
    'LBL_EXPORT_ASSIGNED_USER_ID' => 'Vastuuhenkilön ID',
    'LBL_EXPORT_MODIFIED_USER_ID' => 'Muokkaajan ID',
    'LBL_EXPORT_CREATED_BY' => 'Luojan ID',
    'LBL_EXPORT_PHONE_MOBILE' => 'Matkapuhelin',
    'LBL_EXPORT_EMAIL2'=>'Muu sähköpostiosoite',
	'LBL_EDITLAYOUT' => 'Muokkaa asettelua' /*for 508 compliance fix*/,
	'LBL_ENTERDATE' => 'Syötä päivämäärä' /*for 508 compliance fix*/,
	'LBL_LOADING' => 'Ladataan' /*for 508 compliance fix*/,
	'LBL_EDIT_INLINE' => 'Muokkaa' /*for 508 compliance fix*/,
    //D&B Principal Identification
    'LBL_DNB_PRINCIPAL_ID' => 'D&B-esimiehen Id',
    //Dashlet
    'LBL_OPPORTUNITIES_SUBPANEL_TITLE' => 'Myyntimahdollisuudet',

    //Document title
    'TPL_BROWSER_SUGAR7_RECORDS_TITLE' => '{{module}} &raquo; {{appId}}',
    'TPL_BROWSER_SUGAR7_RECORD_TITLE' => '{{#if last_name}}{{#if first_name}}{{first_name}} {{/if}}{{last_name}} &raquo; {{/if}}{{module}} &raquo; {{appId}}',
    'LBL_NOTES_SUBPANEL_TITLE' => 'Muistiot',

    'LBL_HELP_CONVERT_TITLE' => 'Muunna {{module_name}}',

    // Help Text
    // List View Help Text
    'LBL_HELP_RECORDS' => '{{plural_module_name}}-moduuli mallintaa yksittäisiä prospekteja, jotka saattaisivat olla kiinnostuneita organisaatiosi tuotteesta tai palvelusta. Kun {{module_name}} kvalivioituu myynti­­mahdollisuudeksi {{opportunities_singular_module}}, {{plural_module_name}} voidaan muuntaa {{contacts_module}}, {{opportunities_module}} tai {{accounts_module}}.{{plural_module_name}} voi luoda monella tapaa Sugarissa, esimerkiksi {{plural_module_name}}-moduulin kautta, tietueiden kopioinnilla, tai tuomalla {{plural_module_name}} jne. Kun {{module_name}}-tietue on luotu, {{module_name}}-tietueen tietoja voi lukea ja muokata {{plural_module_name}}-moduulin tietuenäkymän kautta.',

    // Record View Help Text
    'LBL_HELP_RECORD' => '{{plural_module_name}}-moduuli mallintaa yksittäisiä prospekteja, jotka saattaisivat olla kiinnostuneita organisaatiosi tuotteesta tai palvelusta.

- Muokkaa tietueen kenttiä klikkaamalla itse kenttää tai Muokkaa-painiketta.

- Muokkaa linkkejä muihin teitueisiin valitsemalla alavasemmalla oleva paneeli ‘tietonäkymään’.

- Luo ja lue käyttäjäkommentteja ja tietueen historiaa {{activitystream_singular_module}}-näkymään. Aktiviteettivirran saat esiin valitsemalla alavasemmalla olevan paneelin ‘aktiviteettivirta’-näkymään.

- Seuraa tai merkkaa tämä tietue suosikiksi käyttämällä tietueen nimen oikealta puolelta löytyviä kuvakkeita.

- Muut toiminnot löytyvät ‘Muokkaa’-painikkeen oikealla puolella olevasta ‘Toiminnot’-valikosta.',

    // Create View Help Text
    'LBL_HELP_CREATE' => '{{plural_module_name}}-moduuli mallintaa yksittäisiä prospekteja, jotka saattaisivat olla kiinnostuneita organisaatiosi tuotteesta tai palvelusta. Kun {{module_name}} pätevöityy myynnin {{opportunities_singular_module}}, se voidaan muuntaa {{contacts_singular_module}}, {{accounts_singular_module}}, {{opportunities_singular_module}} tai muuksi tietueeksi.

{{module_name}} luonnin vaiheet:
1. Syötä kentille arvoja.
- Pakollisiksi merkityt kentät pitää täyttää ennen kuin tietue voidaan tallentaa.
- Saat esille lisää kenttiä tarvittaessa napsauttamalla "Näytä lisää".
2. Paina ‘Tallenna’ luodaksesi tietueen. Tämän jälkeen palaat edelliselle sivulle.',

    // Convert View Help Text
    'LBL_HELP_CONVERT' => 'Voit muuntaa {{plural_module_name}}-tietueen Sugarissa {{contacts_module}}-tietueeksi, {{accounts_module}}-tietueeksi tai muun tyyppisiksi tietueiksi. Muunnos tapahtuu {{module_name}}-tietueen saavuttaessa kvalifiointikriteerit.

Käy tietueiden läpi, muokkaa kenttiä, ja vahvista tietueen arvot klikkaamalla jokaista ‘assosioi’-painiketta.

Jos Sugar löytää jo olemassa olevan tietueen, joka vastaa {{module_name}}-tietueen tietoja, voit joko
- valita duplikaatin (valinta vahvistetaan ‘assosioi’-painikkeella), tai
- klikata ‘Ohita ja luo uusi’ ja jatkaa normaalisti.

Tietueiden vahvistamisen jälkeen paina ylhäällä olevaa ‘Tallenna ja muunna’ -painiketta, jolloin muunnos tapahtuu.',

    //Marketo
    'LBL_MKTO_SYNC' => 'Synkronoi Marketoon',
    'LBL_MKTO_ID' => 'Marketo liidin ID',
    'LBL_MKTO_LEAD_SCORE' => 'Liidin pisteet',

    'LBL_FILTER_LEADS_REPORTS' => 'Liidien raportit',
    'LBL_DATAPRIVACY_BUSINESS_PURPOSE' => 'Suostumus liiketoimintatarkoituksiin kohteelle',
    'LBL_DATAPRIVACY_CONSENT_LAST_UPDATED' => 'Suostumus päivitetty viimeksi',

    // Leads Pipeline view
    'LBL_PIPELINE_ERR_CONVERTED' => 'Moduulin {{moduleSingular}} tilaa ei voida muuttaa. {{moduleSingular}} on jo muunnettu.',

    // AI Predict
    'LBL_AI_LEADS_CONVERSION_PREDICTION_NAME' => 'Liidin muuntoennuste',
    'LBL_AI_LEADS_CONVERSION_PREDICTION_DESC' => 'Tarkastele tietyn liidin ennustetietoja',

    // Admin convert lead layout
    'LBL_ENABLE_RLIS' => 'Salli tuoterivit',
    'LBL_REQUIRE_RLIS' => 'Tuoterivit pakollisia, kun luodaan uusi myyntimahdollisuus',
    'LBL_COPY_DATA_RLIS' => 'Kopioi liidin tiedot tuoteriveille, kun luodaan uusi myyntimahdollisuus',
);
