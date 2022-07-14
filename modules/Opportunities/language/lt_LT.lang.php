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

$mod_strings = array(
    // Dashboard Names
    'LBL_OPPORTUNITIES_LIST_DASHBOARD' => 'Pardavimų sąrašo ataskaitų sritis',
    'LBL_OPPORTUNITIES_RECORD_DASHBOARD' => 'Pardavimų duomenų ataskaitų sritis',
    'LBL_OPPORTUNITIES_MULTI_LINE_DASHBOARD' => 'Išsami informacija apie galimybes',
    'LBL_OPPORTUNITIES_FOCUS_DRAWER_DASHBOARD' => '„Focus Drawer“ galimybės',
    'LBL_RENEWAL_OPPORTUNITY' => 'Atnaujinimo galimybė',

    'LBL_MODULE_NAME' => 'Pardavimas',
    'LBL_MODULE_NAME_SINGULAR' => 'Pardavimas',
    'LBL_MODULE_TITLE' => 'Pardavimai: Pradžia',
    'LBL_SEARCH_FORM_TITLE' => 'Pardavimų paieška',
    'LBL_VIEW_FORM_TITLE' => 'Pardavimų vaizdas',
    'LBL_LIST_FORM_TITLE' => 'Pardavimų sąrašas',
    'LBL_OPPORTUNITY_NAME' => 'Pardavimo pavadinimas:',
    'LBL_OPPORTUNITY' => 'Pardavimas:',
    'LBL_NAME' => 'Pardavimo pavadinimas',
    'LBL_TIME' => 'Laikas',
    'LBL_INVITEE' => 'Kontaktas',
    'LBL_CURRENCIES' => 'Valiutos',
    'LBL_LIST_OPPORTUNITY_NAME' => 'Pavadinimas',
    'LBL_LIST_ACCOUNT_NAME' => 'Kliento pavadinimas',
    'LBL_LIST_DATE_CLOSED' => 'Sandorio data',
    'LBL_LIST_AMOUNT' => 'Suma',
    'LBL_LIST_AMOUNT_USDOLLAR' => 'Suma',
    'LBL_ACCOUNT_ID' => 'Kliento ID',
    'LBL_CURRENCY_RATE' => 'Valiutos kursas',
    'LBL_CURRENCY_ID' => 'Valiutos ID',
    'LBL_CURRENCY_NAME' => 'Valiuta',
    'LBL_CURRENCY_SYMBOL' => 'Valiutos simbolis',
//DON'T CONVERT THESE THEY ARE MAPPINGS
    'db_sales_stage' => 'LBL_LIST_SALES_STAGE',
    'db_name' => 'LBL_NAME',
    'db_amount' => 'LBL_LIST_AMOUNT',
    'db_date_closed' => 'LBL_LIST_DATE_CLOSED',
//END DON'T CONVERT
    'UPDATE' => 'Pardavimas - Valiutos atnaujinimas',
    'UPDATE_DOLLARAMOUNTS' => 'Atnaujinti Lt sumas',
    'UPDATE_VERIFY' => 'Patikrinti sumas',
    'UPDATE_VERIFY_TXT' => 'Patikrina ar pardavimų sumos yra skaitinės reikšmės susidedančios iš (0-9) ir dešimtainės skirtuko (,)',
    'UPDATE_FIX' => 'Pataisyti sumas',
    'UPDATE_FIX_TXT' => 'Bando pataisyti neteisingai įvestas sumas.',
    'UPDATE_DOLLARAMOUNTS_TXT' => 'Atnaujinti pardavimų sumas litais, pagal įvestus valiutų kursus.',
    'UPDATE_CREATE_CURRENCY' => 'Kuria naują valiutą:',
    'UPDATE_VERIFY_FAIL' => 'Rasti neteisingi įrašai:',
    'UPDATE_VERIFY_CURAMOUNT' => 'Esama suma',
    'UPDATE_VERIFY_FIX' => 'Pataisius būtų',
    'UPDATE_INCLUDE_CLOSE' => 'Įtraukti užbaigtus įrašus',
    'UPDATE_VERIFY_NEWAMOUNT' => 'Nauja suma:',
    'UPDATE_VERIFY_NEWCURRENCY' => 'Nauja valiuta:',
    'UPDATE_DONE' => 'Užbaigta',
    'UPDATE_BUG_COUNT' => 'Rastos klaidos ir bandyta ištaisyti',
    'UPDATE_BUGFOUND_COUNT' => 'Rastos klaidos:',
    'UPDATE_COUNT' => 'Įrašai atnaujinti:',
    'UPDATE_RESTORE_COUNT' => 'Įrašų sumos atstatytos:',
    'UPDATE_RESTORE' => 'Atstatyti sumas',
    'UPDATE_RESTORE_TXT' => 'Atstato sumą į pradinę būseną',
    'UPDATE_FAIL' => 'Nepavyko atnaujinti -',
    'UPDATE_NULL_VALUE' => 'Suma yra NULL, tad priskiriamas jai 0 -',
    'UPDATE_MERGE' => 'Apjungti valiutas',
    'UPDATE_MERGE_TXT' => 'Apjungti keletą valiutų į vieną valiutą.',
    'LBL_ACCOUNT_NAME' => 'Kliento vardas:',
    'LBL_CURRENCY' => 'Valiuta:',
    'LBL_DATE_CLOSED' => 'Pardavimo data:',
    'LBL_DATE_CLOSED_TIMESTAMP' => 'Tikėtina užbaigimo data',
    'LBL_TYPE' => 'Tipas:',
    'LBL_CAMPAIGN' => 'Kampanija:',
    'LBL_NEXT_STEP' => 'Kitas žingsnis:',
    'LBL_SERVICE_START_DATE' => 'Paslaugos pradžios data',
    'LBL_LEAD_SOURCE' => 'Pritraukimo metodas:',
    'LBL_SALES_STAGE' => 'Pardavimo etapas:',
    'LBL_SALES_STATUS' => 'Statusas:',
    'LBL_PROBABILITY' => 'Tikimybė (%):',
    'LBL_DESCRIPTION' => 'Aprašymas:',
    'LBL_DUPLICATE' => 'Galimas pardavimų dubliavimasis',
    'MSG_DUPLICATE' => 'Pardavimų įrašą, kurį ketinate sukurti gali dubliuotis su jau esamu įrašu. Žemiau pateikti pardavimų įrašai turintys panašius pavadinimus.<br>Paspauskite Išsaugoti, jei norite vis tiek sukurti šį pardavimą arba paspauskite Atšaukti, kad grįžtumėte į modulį nesukūrę jokio pardavimo.',
    'LBL_NEW_FORM_TITLE' => 'Sukurti pardavimą',
    'LNK_NEW_OPPORTUNITY' => 'Sukurti pardavimą',
    'LNK_CREATE' => 'Create Deal',
    'LNK_OPPORTUNITY_LIST' => 'Pardavimai',
    'ERR_DELETE_RECORD' => 'Įrašo numeris turi būti nurodytas norint ištrinti pardavimą.',
    'LBL_TOP_OPPORTUNITIES' => 'Mano neužbaigti pardavimai',
    'NTC_REMOVE_OPP_CONFIRMATION' => 'Ar tikrai norite išimti šį kontaktą iš pardavimų?',
    'OPPORTUNITY_REMOVE_PROJECT_CONFIRM' => 'Ar tikrai norite išimti šį pardavimą iš projekto?',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Pardavimai',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Priminimai',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Istorija',
    'LBL_RAW_AMOUNT' => 'Pradinė suma',
    'LBL_LEADS_SUBPANEL_TITLE' => 'Potencialus kontaktas',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Kontaktai',
    'LBL_DOCUMENTS_SUBPANEL_TITLE' => 'Dokumentai',
    'LBL_PROJECTS_SUBPANEL_TITLE' => 'Projektai',
    'LBL_ASSIGNED_TO_NAME' => 'Atsakingas:',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Atsakingas',
    'LBL_LIST_SALES_STAGE' => 'Pardavimų etapas',
    'LBL_MY_CLOSED_OPPORTUNITIES' => 'Mano baigti pardavimai',
    'LBL_TOTAL_OPPORTUNITIES' => 'Visi pardavimai',
    'LBL_CLOSED_WON_OPPORTUNITIES' => 'Baigti sėkmingi pardavimai',
    'LBL_ASSIGNED_TO_ID' => 'Atsakingas:',
    'LBL_CREATED_ID' => 'Kūrėjo ID',
    'LBL_MODIFIED_ID' => 'Redaguotojo ID',
    'LBL_MODIFIED_NAME' => 'Redagavo',
    'LBL_CREATED_USER' => 'Sukūrė',
    'LBL_MODIFIED_USER' => 'Redagavo',
    'LBL_CAMPAIGN_OPPORTUNITY' => 'Kampanijos',
    'LBL_PROJECT_SUBPANEL_TITLE' => 'Projektai',
    'LABEL_PANEL_ASSIGNMENT' => 'Paskyrimas',
    'LNK_IMPORT_OPPORTUNITIES' => 'Importuoti pardavimus',
    'LBL_EDITLAYOUT' => 'Redaguoti išdėstymą' /*for 508 compliance fix*/,
    //For export labels
    'LBL_EXPORT_CAMPAIGN_ID' => 'Kampanijos ID',
    'LBL_OPPORTUNITY_TYPE' => 'Pardavimo tipas',
    'LBL_EXPORT_ASSIGNED_USER_NAME' => 'Atsakingas',
    'LBL_EXPORT_ASSIGNED_USER_ID' => 'Atsakingo ID',
    'LBL_EXPORT_MODIFIED_USER_ID' => 'Redaguotojo ID',
    'LBL_EXPORT_CREATED_BY' => 'Sukūrėjo ID',
    'LBL_EXPORT_NAME' => 'Pavadinimas',
    // SNIP
    'LBL_CONTACT_HISTORY_SUBPANEL_TITLE' => 'Susijusio kontakto el. paštas',
    'LBL_FILENAME' => 'Prisegtukas',
    'LBL_PRIMARY_QUOTE_ID' => 'Pagrindinis pasiūlymas',
    'LBL_CONTRACTS' => 'Sutartys',
    'LBL_CONTRACTS_SUBPANEL_TITLE' => 'Sutartys',
    'LBL_PRODUCTS' => 'Prekės',
    'LBL_RLI' => 'Revenue Line Items',
    'LNK_OPPORTUNITY_REPORTS' => 'Pardavimų ataskaitos',
    'LBL_QUOTES_SUBPANEL_TITLE' => 'Pasiūlymai',
    'LBL_TEAM_ID' => 'Komandos ID:',
    'LBL_TIMEPERIODS' => 'Laiko periodai',
    'LBL_TIMEPERIOD_ID' => 'Laiko periodas ID',
    'LBL_COMMITTED' => 'Atsakingas',
    'LBL_FORECAST' => 'Įtraukti į prognozę',
    'LBL_COMMIT_STAGE' => 'Įsipareigojimo stadija',
    'LBL_COMMIT_STAGE_FORECAST' => 'Forecast',
    'LBL_WORKSHEET' => 'Lentelė',
    'LBL_PURCHASED_LINE_ITEMS' => 'Pirkimo eilutės prekės',

    'LBL_FORECASTED_LIKELY' => 'Prognozuojama panašiai',
    'LBL_RENEWAL' => 'Atnaujinimas',
    'LBL_RENEWAL_OPPORTUNITIES' => 'Atnaujinimo galimybės',
    'LBL_RENEWAL_PARENT' => 'Pagrindinė galimybė',
    'LBL_PARENT_RENEWAL_OPPORTUNITY_ID' => 'Atnaujinimo pagrindinis ID',
    'LBL_MONTH_YEAR_RENEWAL' => '{{year}} {{month}}',

    'LBL_WIDGET_SALES_STAGE' => 'Pardavimo etapas',
    'LBL_WIDGET_DATE_CLOSED' => 'Numatoma uždarymo data',
    'LBL_WIDGET_AMOUNT' => 'Suma',

    'TPL_RLI_CREATE' => 'An Opportunity must have an associated Revenue Line Item.',
    'TPL_RLI_CREATE_LINK_TEXT' => 'Create a Revenue Line Item.',
    'LBL_PRODUCTS_SUBPANEL_TITLE' => 'Quoted Line Items',
    'LBL_RLI_SUBPANEL_TITLE' => 'Revenue Line Items',

    'LBL_TOTAL_RLIS' => '# of Total Revenue Line Items',
    'LBL_CLOSED_RLIS' => '# of Closed Revenue Line Items',
    'LBL_CLOSED_WON_RLIS' => '# uždarytų laimėtų pajamų eilutės prekių skaičius',
    'LBL_SERVICE_OPEN_FLEX_DURATION_RLIS' => '„Open Service Flex“ trukmės pajamų eilutės elementų skaičius',
    'NOTICE_NO_DELETE_CLOSED_RLIS' => 'You cannot delete Opportunities that contain closed Revenue Line Items',
    'WARNING_NO_DELETE_CLOSED_SELECTED' => 'One or more of the selected records contains closed Revenue Line Items and cannot be deleted.',
    'LBL_INCLUDED_RLIS' => '# of Included Revenue Line Items',
    'LBL_UPDATE_OPPORTUNITIES_RLIS' => 'Atnaujinti atidarytus',
    'LBL_CASCADE_RLI_EDIT' => 'Atnaujinti atvirų pajamų eilutės elementus',
    'LBL_CASCADE_RLI_CREATE' => 'Nustatykite visus pajamų eilutės elementus',
    'LBL_SERVICE_START_DATE_INVALID' => 'Paslaugos pradžios datos negalima nustatyti pasibaigus bet kurio atviro priedo pajamų eilutės elemento paslaugos pabaigos datai.',

    'LBL_QUOTE_SUBPANEL_TITLE' => 'Quotes',
    'LBL_FILTER_OPPORTUNITY_TEMPLATE' => 'Galimybės naudojant „Dynamic“ paskyrą',


    // Config
    'LBL_OPPS_CONFIG_VIEW_BY_LABEL' => 'Opportunity Hierarchy',
    'LBL_OPPS_CONFIG_VIEW_BY_DATE_ROLLUP' => 'Set the Expected Close Date field on the resulting Opportunity records to be the earliest or latest close dates of the existing Revenue Line Items',

    //Dashlet
    'LBL_PIPELINE_TOTAL_IS' => 'Pipeline Total is ',

    'LBL_OPPORTUNITY_ROLE'=>'Opportunity Role',
    'LBL_NOTES_SUBPANEL_TITLE' => 'Užrašai',

    // Help Text
    'LBL_OPPS_CONFIG_ALERT' => 'By clicking Confirm, you will be erasing ALL Forecasts data and changing your Opportunities View. If this is not what you intended, click cancel to return to previous settings.',
    'LBL_OPPS_CONFIG_ALERT_TO_OPPS' =>
        'Spustelėję Patvirtinti, ištrinsite VISUS prognozių duomenis ir pakeisite galimybių rodinį. '
        .'Taip pat bus išjungti VISI procesų apibrėžimai su pajamų eilutės prekių tiksliniu moduliu. '
        .'Jei norėjote ne to, spustelėdami Atšaukti galite grįžti į ankstesnius nustatymus.',
    'LBL_OPPS_CONFIG_SALES_STAGE_1a' => 'If all Revenue Line Items are closed and at least one was won,',
    'LBL_OPPS_CONFIG_SALES_STAGE_1b' => 'the Opportunity Sales Stage is set to "Closed Won".',
    'LBL_OPPS_CONFIG_SALES_STAGE_2a' => 'If all Revenue Line Items are in the "Closed Lost" Sales Stage,',
    'LBL_OPPS_CONFIG_SALES_STAGE_2b' => 'the Opportunity Sales Stage is set to "Closed Lost".',
    'LBL_OPPS_CONFIG_SALES_STAGE_3a' => 'If any Revenue Line Items are still open,',
    'LBL_OPPS_CONFIG_SALES_STAGE_3b' => 'the Opportunity will be marked with the least-advanced Sales Stage.',

// BEGIN ENT/ULT

    // Opps Config - View By Opportunities
    'LBL_HELP_CONFIG_OPPS' => 'After you initiate this change, the Revenue Line Item summarization notes will be built in the background. When the notes are complete and available, a notification will be sent to the email address on your user profile. If your instance is set up for {{forecasts_module}}, Sugar will also send you a notification when your {{module_name}} records are synced to the {{forecasts_module}} module and available for new {{forecasts_module}}. Please note that your instance must be configured to send email via Admin > Email Settings in order for the notifications to be sent.',

    // Opps Config - View By Opportunities And RLIs
    'LBL_HELP_CONFIG_RLIS' => 'After you initiate this change, Revenue Line Item records will be created for each existing {{module_name}} in the background. When the Revenue Line Items are complete and available, a notification will be sent to the email address on your user profile. Please note that your instance must be configured to send email via Admin > Email Settings in order for the notification to be sent.',
    // List View Help Text
    'LBL_HELP_RECORDS' => 'Modulis {{plural_module_name}} leidžia stebėti individualius pardavimus nuo pradžios iki pabaigos. Kiekvienas {{module_name}} įrašas nurodo būsimą pardavimą ir pateikia atitinkamus pardavimo duomenis, taip pat susijusius su kitais svarbiais įrašais, tokiais kaip {{quotes_module}}, {{contacts_module}} ir t. t. Modulis {{module_name}} paprastai pereina keletą pardavimo etapų, kol jis pažymimas „Uždarytas kaip laimėtas“ arba „Uždarytas kaip nelaimėtas“. Modulį {{plural_module_name}} galima išnaudoti dar geriau naudojant „Sugar“ {{forecasts_singular_module}} modulį, kad suprastumėte ir nuspėtumėte pardavimo tendencijas, taip pat sutelktumėte dėmesį į pardavimo planų pasiekimą.',

    // Record View Help Text
    'LBL_HELP_RECORD' => 'Modulis {{plural_module_name}} leidžia nuo pradžios iki pabaigos stebėti atskirus pardavimus ir tiems pardavimams priklausančius eilutės elementus. Kiekvienas „{{module_name}}“ įrašas nurodo būsimą pardavimą ir pateikia atitinkamus pardavimo duomenis, taip pat susijusius su kitais svarbiais įrašais, tokiais kaip {{quotes_module}}, {{contacts_module}} ir kt.

- Redaguokite šio įrašo laukus spustelėdami atskirą lauką arba mygtuką „Redaguoti“.
- Peržiūrėkite arba keiskite nuorodas į kitus įrašus subpaneliuose, perjungdami apatinę kairę sritį į parinktį „Duomenų rodinys“.
- Komentuokite patys ir peržiūrėkite vartotojų komentarus ir įrašykite pakeitimų istoriją {{activitystream_singular_module}} perjungdami apatinę kairę sritį į parinktį „Veiklos srautas“.
- Sekite arba pasižymėkite šį įrašą kaip mėgstamiausią naudodami piktogramas, esančias įrašo pavadinimo dešinėje pusėje.
- Papildomų veiksmų galima atlikti pasirinkus išskleidžiamąjį veiksmų meniu, esantį mygtuko „Redaguoti“ dešinėje pusėje.',

    // Create View Help Text
    'LBL_HELP_CREATE' => 'Naudodami {{plural_module_name}} modulį galite stebėti atskirus pardavimus ir jiems priklausančių eilučių prekes nuo pradžios iki pabaigos. Kiekvienas {{module_name}} įrašas nurodo galimą pardavimą ir apima susijusius pardavimo duomenis bei kitus svarbius įrašus, pvz., {{quotes_module}}, {{contacts_module}} ir pan.

Norėdami sukurti {{module_name}}:
1. Nurodykite norimas laukų reikšmes.
 - Laukus, pažymėtus kaip „Būtinas“, prieš išsaugant reikia užpildyti.
 - Jei reikia, kad būtų parodyti papildomi laukai, spustelėkite „Rodyti daugiau“.
2. Spustelėję „Išsaugoti“ užbaigsite naują įrašą ir grįšite į ankstesnį puslapį.',

// END ENT/ULT

    //Marketo
    'LBL_MKTO_SYNC' => 'Sync to Marketo&reg;',
    'LBL_MKTO_ID' => 'Marketo Lead ID',

    'LBL_DASHLET_TOP10_SALES_OPPORTUNITIES_NAME' => 'Top 10 Sales Opportunities',
    'LBL_TOP10_OPPORTUNITIES_CHART_DESC' => 'Displays top ten Opportunities in a bubble chart.',
    'LBL_TOP10_OPPORTUNITIES_MY_OPP' => 'My Opportunities',
    'LBL_TOP10_OPPORTUNITIES_MY_TEAMS_OPP' => "My Team's Opportunities",

    'LBL_PIPELINE_ERR_CLOSED_SALES_STAGE' => 'Nepavyksta pakeisti {{fieldName}}, nes šis {{moduleSingular}} neturi atidarytų eilutės prekių.',
    'TPL_ACTIVITY_TIMELINE_DASHLET' => 'Pardavimo laiko juosta',

    'LBL_CASCADE_SERVICE_WARNING' => 'negali būti nustatytas bet kuriame iš šių pajamų eilutės elementų, nes jie nėra paslaugos. Ar norite tęsti kūrimą?',
    'LBL_CASCADE_DURATION_WARNING' => 'negali būti nustatytas bet kuriame iš šių pajamų eilutės elementų, nes jų trukmė yra užrakinta. Ar norite tęsti kūrimą?',

    // AI Predict
    'LBL_AI_OPPORTUNITY_CLOSE_PREDICTION_NAME' => 'Galimybė uždaryti nuspėjimą',
    'LBL_AI_OPPORTUNITY_CLOSE_PREDICTION_DESC' => 'Peržiūrėti konkrečios galimybės nuspėjimo išsamią informaciją',
);
