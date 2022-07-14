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
    'LBL_OPPORTUNITIES_LIST_DASHBOARD' => 'Lehetőségek listája műszerfal',
    'LBL_OPPORTUNITIES_RECORD_DASHBOARD' => 'Lehetőség bejegyzések műszerfal',
    'LBL_OPPORTUNITIES_MULTI_LINE_DASHBOARD' => 'Lehetőség részletei',
    'LBL_OPPORTUNITIES_FOCUS_DRAWER_DASHBOARD' => 'Lehetőségek figyelemfelhívás',
    'LBL_RENEWAL_OPPORTUNITY' => 'Megújítási lehetőség',

    'LBL_MODULE_NAME' => 'Lehetőségek',
    'LBL_MODULE_NAME_SINGULAR' => 'Lehetőség',
    'LBL_MODULE_TITLE' => 'Lehetőségek: Főoldal',
    'LBL_SEARCH_FORM_TITLE' => 'Lehetőségek keresése',
    'LBL_VIEW_FORM_TITLE' => 'Lehetőségek megtekintése',
    'LBL_LIST_FORM_TITLE' => 'Lehetőségek listája',
    'LBL_OPPORTUNITY_NAME' => 'Lehetőség neve:',
    'LBL_OPPORTUNITY' => 'Lehetőség:',
    'LBL_NAME' => 'Lehetőség neve',
    'LBL_TIME' => 'Idő',
    'LBL_INVITEE' => 'Kapcsolatok',
    'LBL_CURRENCIES' => 'Pénznemek',
    'LBL_LIST_OPPORTUNITY_NAME' => 'Név',
    'LBL_LIST_ACCOUNT_NAME' => 'Kliens neve',
    'LBL_LIST_DATE_CLOSED' => 'Zárás',
    'LBL_LIST_AMOUNT' => 'Valószínű',
    'LBL_LIST_AMOUNT_USDOLLAR' => 'Teljes összeg',
    'LBL_ACCOUNT_ID' => 'Kliens azonosító',
    'LBL_CURRENCY_RATE' => 'Árfolyam',
    'LBL_CURRENCY_ID' => 'Pénznem azonosító',
    'LBL_CURRENCY_NAME' => 'Pénznem neve',
    'LBL_CURRENCY_SYMBOL' => 'Pénznem szimbólum',
//DON'T CONVERT THESE THEY ARE MAPPINGS
    'db_sales_stage' => 'LBL_LIST_SALES_STAGE',
    'db_name' => 'LBL_NAME',
    'db_amount' => 'LBL_LIST_AMOUNT',
    'db_date_closed' => 'LBL_LIST_DATE_CLOSED',
//END DON'T CONVERT
    'UPDATE' => 'Lehetőség - Pénznem frissítése',
    'UPDATE_DOLLARAMOUNTS' => 'USA dollár összegek frissítése',
    'UPDATE_VERIFY' => 'Összegek ellenőrzése',
    'UPDATE_VERIFY_TXT' => 'Ellenőrzi, hogy az összegek érvényes decimális(,) vagy numerikus(0-9) karakterek-e.',
    'UPDATE_FIX' => 'Javított összegek',
    'UPDATE_FIX_TXT' => 'Megkísérli kijavítani az érvénytelen értékeket valós decimális értékekre. Minden módosított összeg biztonsági mentés adatbázisban tárolódik. Ha futás közben hibát észlel, ne futtassa újra helyreállítás nélkül a biztonsági mentést, mert a régit felül fogja írni az érvénytelen új adattal.',
    'UPDATE_DOLLARAMOUNTS_TXT' => 'Frissíti az USA dollár összegeket a beállított napi árfolyamok alapján. Az összegek a grafikonokban és a Pénznem értékek lista nézetében fognak megjelenni.',
    'UPDATE_CREATE_CURRENCY' => 'Új pénznem létrehozása:',
    'UPDATE_VERIFY_FAIL' => 'Az ellenőrzés során hibát jelentő rekord:',
    'UPDATE_VERIFY_CURAMOUNT' => 'Jelenlegi összeg:',
    'UPDATE_VERIFY_FIX' => 'A hibajavítás a következőt végzi el',
    'UPDATE_INCLUDE_CLOSE' => 'Zárt rekordokkal együtt',
    'UPDATE_VERIFY_NEWAMOUNT' => 'Új összeg:',
    'UPDATE_VERIFY_NEWCURRENCY' => 'Új pénznem:',
    'UPDATE_DONE' => 'Kész',
    'UPDATE_BUG_COUNT' => 'Talált hibák, amelyeket a rendszer megpróbált kijavítani:',
    'UPDATE_BUGFOUND_COUNT' => 'Talált hibák:',
    'UPDATE_COUNT' => 'Frissített rekordok:',
    'UPDATE_RESTORE_COUNT' => 'Rekord összegei helyreállítva:',
    'UPDATE_RESTORE' => 'Összegek helyreállítása',
    'UPDATE_RESTORE_TXT' => 'Az összeg értékeinek helyreállítása biztonsági mentésből.',
    'UPDATE_FAIL' => 'Nem sikerült frissíteni -',
    'UPDATE_NULL_VALUE' => 'Összeg NULL beállítása 0-ra',
    'UPDATE_MERGE' => 'Pénznemek egyesítése',
    'UPDATE_MERGE_TXT' => 'Több pénznem egyesítése egy pénznemre. Ha több pénznem tartozik ugyanahhoz a pénznemhez, egyesíthetjük őket. A parancs a többi modul számára is egyesíteni fogja a pénznemeket.',
    'LBL_ACCOUNT_NAME' => 'Kliens neve:',
    'LBL_CURRENCY' => 'Pénznem:',
    'LBL_DATE_CLOSED' => 'Várható lezárása dátuma:',
    'LBL_DATE_CLOSED_TIMESTAMP' => 'Lezárás várható dátuma időbélyegző',
    'LBL_TYPE' => 'Típus:',
    'LBL_CAMPAIGN' => 'Kampány:',
    'LBL_NEXT_STEP' => 'Következő lépés:',
    'LBL_SERVICE_START_DATE' => 'Szolgáltatás kezdési dátuma',
    'LBL_LEAD_SOURCE' => 'Ajánlás forrása:',
    'LBL_SALES_STAGE' => 'Eladási szint:',
    'LBL_SALES_STATUS' => 'Állapot',
    'LBL_PROBABILITY' => 'Valószínűség (%):',
    'LBL_DESCRIPTION' => 'Leírás:',
    'LBL_DUPLICATE' => 'Elképzelhető, hogy kettőzött lehetőség',
    'MSG_DUPLICATE' => 'A lehetőség bejegyzés, amit épp létrehozni kíván, elképzelhető, hogy egy korábbi bejegyzés ismétlése. A hasonló névvel szereplő bejegyzések lentebb láthatók. Kattintson a Mentés gombra, ha folytatni kívánja a lehetőség létrehozását, vagy kattintson a Mégsem gombra, hogy visszatérjen a lehetőség létrehozása nélkül a modulba.',
    'LBL_NEW_FORM_TITLE' => 'Lehetőség létrehozása',
    'LNK_NEW_OPPORTUNITY' => 'Lehetőség létrehozása',
    'LNK_CREATE' => 'Megegyezés létrehozása',
    'LNK_OPPORTUNITY_LIST' => 'Lehetőségek megtekintése',
    'ERR_DELETE_RECORD' => 'Ki kell jelölni egy rekordot a lehetőség törléséhez.',
    'LBL_TOP_OPPORTUNITIES' => 'Legjobb nyitott lehetőségeim',
    'NTC_REMOVE_OPP_CONFIRMATION' => 'Biztosan el akarja távolítani ezt a személyt a lehetőségtől?',
    'OPPORTUNITY_REMOVE_PROJECT_CONFIRM' => 'Biztosan el akarja távolítani ezt a lehetőséget a projekttől?',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Lehetőségek',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Tevékenységek',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Előzmények',
    'LBL_RAW_AMOUNT' => 'Nyers összeg',
    'LBL_LEADS_SUBPANEL_TITLE' => 'Ajánlások',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Kapcsolatok',
    'LBL_DOCUMENTS_SUBPANEL_TITLE' => 'Dokumentumok',
    'LBL_PROJECTS_SUBPANEL_TITLE' => 'Projektek',
    'LBL_ASSIGNED_TO_NAME' => 'Felelős:',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Felelős felhasználó',
    'LBL_LIST_SALES_STAGE' => 'Eladási szint:',
    'LBL_MY_CLOSED_OPPORTUNITIES' => 'Lezárt lehetőségeim',
    'LBL_TOTAL_OPPORTUNITIES' => 'Lehetőségek összesen',
    'LBL_CLOSED_WON_OPPORTUNITIES' => 'Lezárt, megnyert lehetőségek',
    'LBL_ASSIGNED_TO_ID' => 'Hozzárendelt felhasználó:',
    'LBL_CREATED_ID' => 'Létrehozva azonosító alapján',
    'LBL_MODIFIED_ID' => 'Módosítva azonosító alapján',
    'LBL_MODIFIED_NAME' => 'Módosítva felhasználó neve szerint',
    'LBL_CREATED_USER' => 'Létrehozott felhasználó',
    'LBL_MODIFIED_USER' => 'Módosított felhasználó',
    'LBL_CAMPAIGN_OPPORTUNITY' => 'Kampányok',
    'LBL_PROJECT_SUBPANEL_TITLE' => 'Projektek',
    'LABEL_PANEL_ASSIGNMENT' => 'Feladat',
    'LNK_IMPORT_OPPORTUNITIES' => 'Lehetőségek importálása',
    'LBL_EDITLAYOUT' => 'Elrendezés szerkesztése' /*for 508 compliance fix*/,
    //For export labels
    'LBL_EXPORT_CAMPAIGN_ID' => 'Kampány azonosítója',
    'LBL_OPPORTUNITY_TYPE' => 'Lehetőség típusa',
    'LBL_EXPORT_ASSIGNED_USER_NAME' => 'Felelős felhasználó neve',
    'LBL_EXPORT_ASSIGNED_USER_ID' => 'Felelős felhasználó azonosítója',
    'LBL_EXPORT_MODIFIED_USER_ID' => 'Módosító azonosítója',
    'LBL_EXPORT_CREATED_BY' => 'Létrehozó azonosítója',
    'LBL_EXPORT_NAME' => 'Név',
    // SNIP
    'LBL_CONTACT_HISTORY_SUBPANEL_TITLE' => 'Kontakszemélyek emailjei',
    'LBL_FILENAME' => 'Melléklet',
    'LBL_PRIMARY_QUOTE_ID' => 'Elsődleges ajánlat',
    'LBL_CONTRACTS' => 'Szerződések',
    'LBL_CONTRACTS_SUBPANEL_TITLE' => 'Szerződések',
    'LBL_PRODUCTS' => 'Termékek',
    'LBL_RLI' => 'Bevétel sorok',
    'LNK_OPPORTUNITY_REPORTS' => 'Lehetőségek jelentéseinek megtekintése',
    'LBL_QUOTES_SUBPANEL_TITLE' => 'Árajánlatok',
    'LBL_TEAM_ID' => 'Csoport azonosító',
    'LBL_TIMEPERIODS' => 'Időperiódusok',
    'LBL_TIMEPERIOD_ID' => 'Időperiódus azonosítója',
    'LBL_COMMITTED' => 'Hozzárendelve',
    'LBL_FORECAST' => 'Belefoglal az előjelzésbe',
    'LBL_COMMIT_STAGE' => 'Elköteleződés szintje',
    'LBL_COMMIT_STAGE_FORECAST' => 'Előrejelzés',
    'LBL_WORKSHEET' => 'Munkalap',
    'LBL_PURCHASED_LINE_ITEMS' => 'Megvásárolt tételsorok',

    'LBL_FORECASTED_LIKELY' => 'Előrejelzés valószínű',
    'LBL_RENEWAL' => 'Megújítás',
    'LBL_RENEWAL_OPPORTUNITIES' => 'Megújítási lehetőségek',
    'LBL_RENEWAL_PARENT' => 'Szülőlehetőség',
    'LBL_PARENT_RENEWAL_OPPORTUNITY_ID' => 'Megújítási szülőazonosító',
    'LBL_MONTH_YEAR_RENEWAL' => '{{month}}, {{year}}',

    'LBL_WIDGET_SALES_STAGE' => 'Értékesítési szint',
    'LBL_WIDGET_DATE_CLOSED' => 'Lezárás várható dátuma',
    'LBL_WIDGET_AMOUNT' => 'Mennyiség',

    'TPL_RLI_CREATE' => 'Minden lehetőségnek kapcsolódnia kell egy bevételi sorhoz. <a href="javascript:void(0);" id="createRLI">Bevételi sor létrehozása</a>.',
    'TPL_RLI_CREATE_LINK_TEXT' => 'Bevételi sor tétel létrehozása.',
    'LBL_PRODUCTS_SUBPANEL_TITLE' => 'Megajánlott Tételek',
    'LBL_RLI_SUBPANEL_TITLE' => 'Bevétel sorok',

    'LBL_TOTAL_RLIS' => '# összes bevételi sor',
    'LBL_CLOSED_RLIS' => '# lezárt bevételi sor',
    'LBL_CLOSED_WON_RLIS' => '# megnyert bevételi sor',
    'LBL_SERVICE_OPEN_FLEX_DURATION_RLIS' => 'Nyitott szolgáltatású, rugalmas időtartamú bevételi sortételek száma',
    'NOTICE_NO_DELETE_CLOSED_RLIS' => 'Azok a lehetőségek, amelyekhez lezárt bevételi sorok kapcsolódnak, nem törölhetők.',
    'WARNING_NO_DELETE_CLOSED_SELECTED' => 'A kijelölt rekordok közül, egy vagy több bejegyzés lezárt bevételi sort tartalmaz, ezért nem lehet törölni.',
    'LBL_INCLUDED_RLIS' => 'Bevett bevételsor-elemek száma',
    'LBL_UPDATE_OPPORTUNITIES_RLIS' => 'Frissítés nyitva',
    'LBL_CASCADE_RLI_EDIT' => 'Nyitott tételsorok tételeinek frissítése',
    'LBL_CASCADE_RLI_CREATE' => 'Tételsoron keresztüli tételek beállítása',
    'LBL_SERVICE_START_DATE_INVALID' => 'A szolgáltatás kezdődátuma nem lehet későbbi a szolgáltatás záróidőpontjánál egyetlen árbevételi tételsor esetén sem.',

    'LBL_QUOTE_SUBPANEL_TITLE' => 'Árajánlatok',
    'LBL_FILTER_OPPORTUNITY_TEMPLATE' => 'Lehetőségek dinamikus fiók szerint',


    // Config
    'LBL_OPPS_CONFIG_VIEW_BY_LABEL' => 'Lehetőségek hierarchiája',
    'LBL_OPPS_CONFIG_VIEW_BY_DATE_ROLLUP' => 'Adja meg a Várható Zárási Dátummezőt az ebből következő Lehetőségi adatban, úgy hogy az a legkorábban, legkésőbb legyen a meglévő Bevételi Sortételek zárási dátumaihoz',

    //Dashlet
    'LBL_PIPELINE_TOTAL_IS' => 'A pipeline teljes értéke',

    'LBL_OPPORTUNITY_ROLE'=>'Lehetőség szerepe',
    'LBL_NOTES_SUBPANEL_TITLE' => 'Feljegyzések',

    // Help Text
    'LBL_OPPS_CONFIG_ALERT' => 'A Visszaigazolás gombra kattintva Ön ki fog törölni MINDEN Előrejelző adatot a Lehetőségek Nézetéből. Ha Ön nem ezt akarta, kattintson a Vissza gombra, hogy visszatérhessen az előző oldal beállításaihoz.',
    'LBL_OPPS_CONFIG_ALERT_TO_OPPS' =>
        'A megerősítésre kattintva kitörli az ÖSSZES előrejelzés adatot és megváltoztatja a Lehetőségek Nézetet. '
        .'A bevételi tételek MINDEN cél-modullal rendelkező folyamat meghatározása le lesz tiltva. '
        .'Ha nem ez volt a szándéka, kattintson a mégse gombra az előző oldalra való visszatéréshez.',
    'LBL_OPPS_CONFIG_SALES_STAGE_1a' => 'Ha minden Bevételi Sortétel be van zárva és legalább egy megnyert tétel van,',
    'LBL_OPPS_CONFIG_SALES_STAGE_1b' => 'a Lehetőségi Eladások Státusza a "Bezárva Megnyerve" értéket veszi fel.',
    'LBL_OPPS_CONFIG_SALES_STAGE_2a' => 'Ha minden Bevételi Sortétel Eladási Státusza a "Bezárva Elveszítve" értéket veszi fel,',
    'LBL_OPPS_CONFIG_SALES_STAGE_2b' => 'akkor a Lehetőségi Eladások Státuszát a "Bezárva Elveszítve" értékre kell állítani.',
    'LBL_OPPS_CONFIG_SALES_STAGE_3a' => 'Ha minden Bevételi Sortétel még nyitva van,',
    'LBL_OPPS_CONFIG_SALES_STAGE_3b' => 'akkor a Lehetőség az Eladások legutolsó előremeneteli Állapotával lesz jelezve.',

// BEGIN ENT/ULT

    // Opps Config - View By Opportunities
    'LBL_HELP_CONFIG_OPPS' => 'Ha Ön kezdeményezi ezt a változtatást, a Bevételi Sortételek összefoglaló megjegyzései a háttérben megjelennek. Ha a megjegyzések készen vannak és rendelkezésre állnak a rendszer értesítést küld az Ön felhasználói profiljának e-mail címére. Ha az Ön példánya a {{forecasts_module}} modulra van beállítva, a Sugar akkor is küld Önnek értesítést, ha az Ön {{module_name}} adatai a {{forecasts_module}} modullal szinkronizálásra kerültek és az új {{forecasts_module}} modul számára elérhetők. Kérjük, vegye figyelembe, hogy a példánya úgy kell legyen konfigurálva, hogy tudjon e-mailt küldeni az Admin > Email Beállításokon keresztül, hogy az értesítés elküldhető legyen.',

    // Opps Config - View By Opportunities And RLIs
    'LBL_HELP_CONFIG_RLIS' => 'Miután Ön kezdeményezi ezt a változtatást, a Bevételi Sortételek adatai minden meglévő {{module_name}} modulra vonatkozóan a háttérben megjelennek. Ha a Bevételi Sortételek adatai készen vannak és rendelkezésre állnak a rendszer értesítést küld az Ön felhasználói profiljának e-mail címére. Kérjük, vegye figyelembe, hogy a példánya úgy kell legyen konfigurálva, hogy tudjon e-mailt küldeni az Admin > Email Beállításokon keresztül, hogy az értesítés elküldhető legyen.',
    // List View Help Text
    'LBL_HELP_RECORDS' => '{{plural_module_name}} modul lehetővé teszi az egyedi értékesítések nyomon követését a kezdéstől a befejezésig. Minden {{module_name}} bejegyzés egy lehetséges értékesítést jelképez és magába foglalja a vonatkozó értékesítés és más kapcsolódó értékesítések adatait, mint péládul: {{quotes_module}},{{contacts_module}}, stb. Egy {{module_name}} jellemzően számos értékesítési szinten keresztülmegy azelőtt, mielőtt "Lezárt, megnyert" vagy "Lezárt, elveszített" státuszba kerülne. A {{plural_module_name}} még mélyebben kiaknázható a Sugar {{forecasts_singular_module}} moduljának használatával az értékesítési tendenciák megértésére és becslésére, illetve az értékesítési mennyiségek teljesítésére.',

    // Record View Help Text
    'LBL_HELP_RECORD' => 'A(z) {{plural_module_name}} modul segítségével a kezdetektől a végéig nyomon követheti az egyedi értékesítéseket és az adott értékesítésekhez tartozó sor tételeket. Minden {{module_name}} bejegyzés egy prospektív értékesítést jelent, és tartalmazza a releváns értékesítési adatokat, valamint az olyan fontos bejegyzésekhez kapcsolódó adatokat, mint a(z) {{quotes_module}}, {{contacts_module}} stb.

- Szerkessze ennek a rekordnak a mezőit külön-külön, vagy kattintson a Szerkesztés gombra!
- Tekintse meg vagy szerkessze az egyéb bejegyzésekre vonatkozó, alpanelekben található linkeket a bal alsó „Adatnézet” kapcsoló használatával!
- Hozzon létre vagy tekintsen meg felhasználói hozzászólásokat, illetve rögzítse a módosítási előzményeket a(z) {{activitystream_singular_module}} modulban a bal alsó panel „Tevékenységfolyam” opcióra állításával.
- A rekord neve mellett található ikonok segítségével jelölje be kedvencének a tartalmat, vagy kövesse annak utóéletét!
- Egyéb tevékenységek a Szerkesztés gombtól jobbra szereplő műveleti gomb legördülő menüjében találhatók.',

    // Create View Help Text
    'LBL_HELP_CREATE' => 'A(z) {{plural_module_name}} modul segítségével a kezdetektől a végéig nyomon követheti az egyedi értékesítéseket és az adott értékesítésekhez tartozó sor tételeket. Minden {{module_name}} bejegyzés egy prospektív értékesítést jelent, és tartalmazza a releváns értékesítési adatokat, valamint az olyan fontos bejegyzésekhez kapcsolódó adatokat, mint a(z) {{quotes_module}}, {{contacts_module}} stb.

{{module_name}} létrehozásához:
1. Adjon meg értékeket a mezőkben szükség szerint.
 - A „kötelező” jelöléssel rendelkező mezők kitöltése nélkül mentés nem lehetséges.
 - Kattintson a „Több mutatása” lehetőségre további mezők megjelenítéséhez, szükség szerint.
2. Kattintson a „Mentés” gombra a rekord mentéséhez és a korábbi nézethez való visszatéréshez.',

// END ENT/ULT

    //Marketo
    'LBL_MKTO_SYNC' => 'Sznkronizálás ehhez: Marketo®',
    'LBL_MKTO_ID' => 'Marketo Lead azonosító',

    'LBL_DASHLET_TOP10_SALES_OPPORTUNITIES_NAME' => 'Tíz legjobb Eladási Lehetőség Termékei',
    'LBL_TOP10_OPPORTUNITIES_CHART_DESC' => 'A tíz legjobb Eladási Lehetőség Termékeit jeleníti meg egy diagramon.',
    'LBL_TOP10_OPPORTUNITIES_MY_OPP' => 'Lehetőségeim',
    'LBL_TOP10_OPPORTUNITIES_MY_TEAMS_OPP' => "Csoportom Lehetőségei",

    'LBL_PIPELINE_ERR_CLOSED_SALES_STAGE' => 'A(z) {{fieldName}} módosítása nem lehetséges, mivel ez a(z) {{moduleSingular}} nem rendelkezik nyitott sortételekkel.',
    'TPL_ACTIVITY_TIMELINE_DASHLET' => 'Lehetőség idővonal',

    'LBL_CASCADE_SERVICE_WARNING' => ' nem tehető rá egyik Tételsorra tételre sem, mert nem szolgáltatások. Szeretné folytatni a létrehozásukat?',
    'LBL_CASCADE_DURATION_WARNING' => ' nem tehető rá egyik Tételsorra tételre sem, mert az időtartamuk zárolva van. Szeretné folytatni a létrehozásukat?',

    // AI Predict
    'LBL_AI_OPPORTUNITY_CLOSE_PREDICTION_NAME' => 'A lehetőség lezárásának becslése',
    'LBL_AI_OPPORTUNITY_CLOSE_PREDICTION_DESC' => 'Az adott lehetőség előrejelzésével kapcsolatos részletek megtekintése',
);
