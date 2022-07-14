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
    'LBL_LOADING' => 'Betöltés' /*for 508 compliance fix*/,
    'LBL_HIDEOPTIONS' => 'Lehetőségek elrejtése' /*for 508 compliance fix*/,
    'LBL_DELETE' => 'Törlés' /*for 508 compliance fix*/,
    'LBL_POWERED_BY_SUGAR' => 'Szolgáltató: SugarCRM' /*for 508 compliance fix*/,
    'LBL_ROLE' => 'Szerepkör',
    'LBL_BASE_LAYOUT' => 'Alap elrendezés',
    'LBL_FIELD_NAME' => 'Mező neve',
    'LBL_FIELD_VALUE' => 'Érték',
    'LBL_LAYOUT_DETERMINED_BY' => 'Az elrendezést meghatározta:',
    'layoutDeterminedBy' => [
        'std' => 'Alapértelmezett elrendezés',
        'role' => 'Szerep',
        'dropdown' => 'Legördülő mező',
    ],
    'LBL_DELETE_CUSTOM_LAYOUTS' => 'Minden egyéni elrendezés eltávolításra került. Biztos benne, hogy szeretné megváltoztatni a jelenlegi elrendezés meghatározásait?',
'help'=>array(
    'package'=>array(
            'create'=>'Nevezze el a csomagot! A név csak alfanumerikus karaktereket tartalmazhat, szóközt nem (pl.: HR_Management)<br /><br />Megadhat egy Szerzőt és egy Leírást is a csomaghoz.<br /><br />Kattintson a Mentés gombra.',
            'modify'=>'A csomag tulajdonságai és a kapcsolódó lehetséges műveletek itt jelennek meg.<br /><br />Módosíthatja a Név, Szerző és Leírás mezőket, valamint megtekintheti és testre szabhatja a csomagban lévő összes modult.<br /><br />Kattintson az Új modul-ra egy modul létrehozásához!<br /><br />Ha a csomag legalább egy modult tartalmaz, akkor azt közzéteheti és alkalmazhatja, továbbá exportálhatja annak egyedi tartalmát.',
            'name'=>'Ez az aktuális csomag neve. <br /><br />A név kizárólag betűvel kezdődhet és csak alfanumerikus karaktereket tartalmazhat, szóközt nem (pl.: HR_Management).',
            'author'=>'A telepítés során a Szerző neve fog megjelenni, mint a csomag létrehozójának neve.<br /><br />A Szerző lehet cég vagy magánszemély.',
            'description'=>'A telepítés során ez a Leírás fog megjelenni a csomagra vonatkozóan.',
            'publishbtn'=>'Kattintson a Közzététel gombra a bevitt adatok mentéséhez, illetve egy .zip fájl létrehozásához, amely később a csomag telepítő verziójaként funkcionál.<br /><br />Használja a Modul töltőt a .zip  fájl feltöltéséhez és a csomag telepítéséhez!',
            'deploybtn'=>'Kattintson az Alkalmaz gombra a bevitt adatok mentéséhez, illetve a csomag telepítéséhez, amely tartalmazza az aktuális példány moduljait.',
            'duplicatebtn'=>'Kattintson a Kettőz gombra a csomag tartalmának másolásához és megjelenítéséhez!<br /><br />Az új csomag nevét automatikusan generálja a rendszer úgy, hogy az eredeti csomag nevéhez hozzáad egy sorszámot. Új név megadásával és mentésével a csomag átnevezhető.',
            'exportbtn'=>'Kattintson az Exportálás gombra egy .zip fájl létrehozásához, amely tartalmazza a csomag egyedi beállításait.<br /><br />A létrehozott fájl nem minősül a csomag telepítő verziójának.<br /><br />Használja a Modul töltőt a .zip fájl betöltéséhez, hogy az egyedi beállítások megjelenjenek a Module Builder felületén!',
            'deletebtn'=>'Kattintson a Törlés gombra ennek a csomagnak és az összes kapcsolódó fájl törléséhez!',
            'savebtn'=>'Kattintson a Mentés gombra a csomagban szereplő összes adat mentéséhez!',
            'existing_module'=>'Kattintson a Modul ikonra a tulajdonságok szerkesztéséhez, valamint a mezők, kapcsolatok és felületek testre szabásához!',
            'new_module'=>'Kattintson az Új modul gombra egy csomaghoz kapcsolódó új modul létrehozásához!',
            'key'=>'Ez az öt betűből álló alfanumerikus Kulcs szerepel majd a csomag minden könyvtárának, osztálynevének és adattáblájának előtagjaként.<br /><br />A kulcs a táblák egyedi elnevezését szolgálja.',
            'readme'=>'Kattintson az Olvass el fájlra a csomag részletesebb leírásához!<br /><br />Az Olvass el fájl a telepítés után lesz elérhető.',

),
    'main'=>array(

    ),
    'module'=>array(
        'create'=>'Adjon meg egy Nevet a modulhoz! A Címke a navigációs fülön fog megjelenni.<br /><br />A Navigációs fül megjelenítéséhez jelölje be a kapcsolódó jelölőnégyzetet. <br /><br />Jelölje be a Csoport biztonság jelölőnégyzetet, hogy hozzáférjen a Csoportok mezőihez a modul rekordjain belül!<br /><br />Következő lépésként válassza ki annak a modulnak a típusát, amelyet létre szeretne hozni!<br /><br />Válasszon ki egy sablontípust! Minden sablon mezők és megjelenítések egy előre megadott kombinációját tartalmazza, amely a saját modul kiépítésének alapja.<br /><br />Mentse el a modult a Mentés gombra kattintva.',
        'modify'=>'Itt módosíthatja a modul tulajdonságait vagy testre szabhatja a modulhoz kapcsolódó Mezőket, Kapcsolatokat, és Elrendezéseket.',
        'importable'=>'Az importálás engedélyezésével elérhetővé válik a modulba történő adatátvétel.<br /><br />Az Importálás varázsló meg fog jelenni a modul paneljén. Az Importálás varázsló a külső helyekről származó adatátvitelt segíti.',
        'team_security'=>'A Csoport biztonság jelölőnégyzet bejelölése lehetővé teszi a csoport biztosítását erre a modulra.<br /><br />Amennyiben a csoport biztonság funkció él, hozzáfér a Csoportok mezőihez a modul rekordjain belül.',
        'reportable'=>'Ennek a négyzetnek a bejelölése lehetővé teszi a jelentések futtatását.',
        'assignable'=>'Ennek a négyzetnek a bejelölése lehetővé teszi, hogy a modulban szereplő rekordokat hozzárendelje a kiválasztott felhasználókhoz.',
        'has_tab'=>'A Navigációs fül bejelölése lehetőséget ad a navigációs fül eléréséhez.',
        'acl'=>'Ennek a négyzetnek a bejelölése megjeleníti a Hozzáférés vezérlőt a modulban, így a Mező szintű biztonság vezérlőjét is.',
        'studio'=>'Ennek a négyzetnek a bejelölése lehetővé teszi az adminisztrátoroknak a modul testreszabását a Stúdió segítségével.',
        'audit'=>'Ennek a négyzetnek a bejelölése lehetővé teszi a modul könyvvizsgálatát. A mezőkben történő változások rögzítésre kerülnek, így az adminisztrátorok megtekinthetnek minden korábban eszközölt változást.',
        'viewfieldsbtn'=>'Kattintson a Mező nézetre a modulhoz kapcsolódó mezők megjelenítéséhez, továbbá az egyedi mezők létrehozásához és szerkesztéséhez!',
        'viewrelsbtn'=>'Kattintson a Kapcsolatok nézetre a modulra vonatkozó kapcsolatok megtekintéséhez és további kapcsolatok kialakításához.',
        'viewlayoutsbtn'=>'Kattintson az Elrendezés nézetre a modulra vonatkozó elrendezés megtekintéséhez és a mezők elrendezésének testreszabásához.',
        'viewmobilelayoutsbtn' => 'Kattintson a Mobil Elrendezési Nézet gombra, hogy megtekinthesse a modul mobile elrendezéseit és hogy testre tudja szabni az adatmező elrendezést az objektumon belül.',
        'duplicatebtn'=>'Kattintson a Kettőz gombra a modul tulajdonságainak egy új modulba való másolásához és az új modul megjelenítéséhez.<br /><br />Az új modul nevét automatikusan generálja a rendszer úgy, hogy az eredeti modul nevéhez hozzáad egy sorszámot.',
        'deletebtn'=>'Kattintson a Törlés gombra a modul törléséhez.',
        'name'=>'Ez az aktuális modul neve.<br /><br />A név kizárólag betűvel kezdődhet és csak alfanumerikus karaktereket tartalmazhat, szóközt nem (pl.: HR_Management).',
        'label'=>'Ez a Címke fog megjelenni a modulhoz kapcsolódóan a navigációs fülön.',
        'savebtn'=>'Kattintson a Mentés gombra a modulra vonatkozó összes adat mentéséhez.',
        'type_basic'=>'Az Alap sablon olyan alapvető mezőket tartalmaz, mint a Név, a Hozzárendelés, a Csoport, a Létrehozás dátuma és a mező Leírása.',
        'type_company'=>'A Cég sablon szervezetspecifikus mezőket foglal magába, mint például a Cégnév, a Szektor és a Számlázási cím.<br />Használja ezt a sablont a Kliens modulhoz hasonló modulok létrehozásához.',
        'type_issue'=>'Az Eset sablon ügy- és hibaspecifikus mezőket kínál, mint a Szám, az Állapot, a Prioritás és a Leírás.<br />Használja ezt a sablont az Esetek és a Hibakövető modulokhoz hasonló modulok létrehozásához.',
        'type_person'=>'A Személy sablon egyénspecifikus mezőket szolgáltat, mint a Megszólítás, a Titulus, a Név, a Cím és a Telefonszám.<br />Használja ezt a sablont a Kapcsolatok és az Ajánlások modulokhoz hasonló modulok létrehozásához.',
        'type_sale'=>'Az Eladás sablon lehetőségspecifikus mezőket tartalmaz, mint az Ajánlás Forrása, a Szint, az Összeg és a Valószínűség.<br />Használja ezt a sablont a Lehetőségek modulhoz hasonló modulok létrehozásához.',
        'type_file'=>'A Fájl sablon dokumentumspecifikus mezőket foglal magába, mint a Fájlnév, a Dokumentumtípus és a Közzététel dátuma.<br />Használja ez a sablont a Dokumentumok modulhoz hasonló mondulok létrehozásához.',

    ),
    'dropdowns'=>array(
        'default' => 'Az alkalmazás minden legördülő menüje megtalálható itt.<br /><br />A legördülő menük a különböző modulok bármely mezőjére alkalmazhatók. <br /><br />Változások eszközöléséhez kattintson a legördülő nevére!<br /><br />Kattintson a Legördülő hozzáadása gombra egy új legördülő menü létrehozásához.',
        'editdropdown'=>'A legördülő menük minden modul normál vagy egyéni legördülő mezőire alkalmazhatók.<br /><br />Adjon meg egy nevet a legördülő menünek!<br /><br />Amennyiben alkalmazáshoz kapcsolódó nyelvi csomag van telepítve, kiválaszthatja a menük nyelvét.<br /><br />Az Elem neve mezőben nevezze el a menüt oly módon, ahogy az nem lesz látható a felhasználók számára.<br /><br />A Megjelenített címke mezőben adja meg a nevet úgy, ahogy azt a felhasználók számára láthatóvá kívánja tenni.<br /><br />Az Elem neve és a Megjelenített címke adatainak megadása után kattintson a Hozzáad gombra a menü legördülő listához való hozzáadásához.<br /><br />A menüpontok sorrendjének megváltoztatásához húzással rendezze azokat a kívánt sorrendbe.<br /><br />A Megjelenített címke módosításához kattintson a Szerkesztés ikonra és adjon meg egy új nevet. A menüpontok törléséhez kattintson a Töröl ikonra.<br /><br />A változások visszavonásához kattintson a Visszavon gombra. A változások ismételt életbe léptetéséhez kattintson az Ismét gombra.<br /><br />Kattintson a Mentés gombra a legördülő menü mentéséhez!',

    ),
    'subPanelEditor'=>array(
        'modify'	=> 'All of the fields that can be displayed in the <b>Subpanel</b> appear here.<br><br>The <b>Default</b> column contains the fields that are displayed in the Subpanel.<br/><br/>The <b>Hidden</b> column contains fields that can be added to the Default column.'
    . '<br/><br/><!--not_in_theme!--><img src="themes/default/images/SugarLogic/icon_dependent.png"/>Indicates a Dependent field that may or may not be visible based on the value of a formula.<br/><!--not_in_theme!--><img src="themes/default/images/SugarLogic/icon_calculated.png" /> Indicates a Calculated field whose value will be automatically determined based on a formula.'
    ,
        'savebtn'	=> 'Kattintson a Mentés & alkalmazás gombra a változtatások elmentéséhez és azok modulban való aktiválásához.',
        'historyBtn'=> 'Kattintson az Előzmények megtekintése gombra az előzőleg mentett elrendezések megtekintéséhez és visszaállításához.',
        'historyRestoreDefaultLayout'=> 'Kattintson az <b>Alapértelmezett elrendezés visszaállítása</b> pontra, hogy visszarendezze a nézetet az eredetire.',
        'Hidden' 	=> 'Rejtett mezők nem jelennek meg az alpanelen.',
        'Default'	=> 'Alapértelmezett mezők megjelennek az alpanelen.',

    ),
    'listViewEditor'=>array(
        'modify'	=> 'All of the fields that can be displayed in the <b>ListView</b> appear here.<br><br>The <b>Default</b> column contains the fields that are displayed in the ListView by default.<br/><br/>The <b>Available</b> column contains fields that a user can select in the Search to create a custom ListView. <br/><br/>The <b>Hidden</b> column contains fields that can be added to the Default or Available column.'
    . '<br/><br/><!--not_in_theme!--><img src="themes/default/images/SugarLogic/icon_dependent.png"/>Indicates a Dependent field that may or may not be visible based on the value of a formula.<br/><!--not_in_theme!--><img src="themes/default/images/SugarLogic/icon_calculated.png" /> Indicates a Calculated field whose value will be automatically determined based on a formula.'
    ,
        'savebtn'	=> 'Kattintson a Mentés & alkalmazás gombra a változtatások elmentéséhez és azok modulban való aktiválásához.',
        'historyBtn'=> 'Kattintson az Előzmények megtekintése gombra az előzőleg mentett elrendezések megtekintéséhez és visszaállításához.<br /><br />A Visszaállítás gomb megnyomásával az elrendezés visszaáll a korábban mentett állapotba. A mezőcímkék szerkesztéséhez kattintson a Szerkesztés ikonra a mezők mellett.',
        'historyRestoreDefaultLayout'=> 'Kattintson az <b>Alapértelmezett elrendezés visszaállítása</b> lehetőségre hogy visszaállítsa a nézetet az eredeti elrendezésre. Az <br><br><b>Alapértelmezett elrendezés visszaállítása</b> csak az eredeti elrendezésen belül állítja vissza a mezőelrendezést. A mezőcímkék módosításához kattinson az egyes mezők melletti Szerkesztés ikonra.',
        'Hidden' 	=> 'Rejtett mezők, amelyek nem listázódnak a felhasználók számára.',
        'Available' => 'Elérhető mezők, amelyek nem jelennek meg alapértelmezettként, de listázhatók a felhasználók által.',
        'Default'	=> 'Alapértelmezett mezők, amelyek automatikusan listázódnak a felhasználók egyéb rendelkezésének hiányában.'
    ),
    'popupListViewEditor'=>array(
        'modify'	=> 'All of the fields that can be displayed in the <b>ListView</b> appear here.<br><br>The <b>Default</b> column contains the fields that are displayed in the ListView by default.<br/><br/>The <b>Hidden</b> column contains fields that can be added to the Default or Available column.'
    . '<br/><br/><!--not_in_theme!--><img src="themes/default/images/SugarLogic/icon_dependent.png"/>Indicates a Dependent field that may or may not be visible based on the value of a formula.<br/><!--not_in_theme!--><img src="themes/default/images/SugarLogic/icon_calculated.png" /> Indicates a Calculated field whose value will be automatically determined based on a formula.'
    ,
        'savebtn'	=> 'Kattintson a Mentés & alkalmazás gombra a változtatások elmentéséhez és azok modulban való aktiválásához.',
        'historyBtn'=> 'Kattintson az Előzmények megtekintése gombra az előzőleg mentett elrendezések megtekintéséhez és visszaállításához.<br /><br />A Visszaállítás gomb megnyomásával az elrendezés visszaáll a korábban mentett állapotba. A mezőcímkék szerkesztéséhez kattintson a Szerkesztés ikonra a mezők mellett.',
        'historyRestoreDefaultLayout'=> 'Kattintson az <b>Alapértelmezett elrendezés visszaállítása</b> lehetőségre hogy visszaállítsa a nézetet az eredeti elrendezésre. Az <br><br><b>Alapértelmezett elrendezés visszaállítása</b> csak az eredeti elrendezésen belül állítja vissza a mezőelrendezést. A mezőcímkék módosításához kattinson az egyes mezők melletti Szerkesztés ikonra.',
        'Hidden' 	=> 'Rejtett mezők, amelyek nem listázódnak a felhasználók számára.',
        'Default'	=> 'Alapértelmezett mezők, amelyek automatikusan listázódnak a felhasználók egyéb rendelkezésének hiányában.'
    ),
    'searchViewEditor'=>array(
        'modify'	=> 'All of the fields that can be displayed in the <b>Search</b> form appear here.<br><br>The <b>Default</b> column contains the fields that will be displayed in the Search form.<br/><br/>The <b>Hidden</b> column contains fields available for you as an admin to add to the Search form.'
    . '<br/><br/><!--not_in_theme!--><img src="themes/default/images/SugarLogic/icon_dependent.png"/>Indicates a Dependent field that may or may not be visible based on the value of a formula.<br/><!--not_in_theme!--><img src="themes/default/images/SugarLogic/icon_calculated.png" /> Indicates a Calculated field whose value will be automatically determined based on a formula.'
    . '<br/><br/>This configuration applies to popup search layout in legacy modules only.',
        'savebtn'	=> 'Kattintson a Mentés & alkalmazás gombra a változtatások elmentéséhez és azok modulban való aktiválásához.',
        'Hidden' 	=> 'A Rejtett mezők nem jelennek meg a Keresésben.',
        'historyBtn'=> 'Kattintson az Előzmények megtekintése gombra az előzőleg mentett elrendezések megtekintéséhez és visszaállításához.<br /><br />A Visszaállítás gomb megnyomásával az elrendezés visszaáll a korábban mentett állapotba. A mezőcímkék szerkesztéséhez kattintson a Szerkesztés ikonra a mezők mellett.',
        'historyRestoreDefaultLayout'=> 'Kattintson az <b>Alapértelmezett elrendezés visszaállítása</b> lehetőségre hogy visszaállítsa a nézetet az eredeti elrendezésre. Az <br><br><b>Alapértelmezett elrendezés visszaállítása</b> csak az eredeti elrendezésen belül állítja vissza a mezőelrendezést. A mezőcímkék módosításához kattinson az egyes mezők melletti Szerkesztés ikonra.',
        'Default'	=> 'Alapértelmezett mezők megjelennek a Keresésben.'
    ),
    'layoutEditor'=>array(
        'defaultdetailview'=>'The <b>Layout</b> area contains the fields that are currently displayed within the <b>DetailView</b>.<br/><br/>The <b>Toolbox</b> contains the <b>Recycle Bin</b> and the fields and layout elements that can be added to the layout.<br><br>Make changes to the layout by dragging and dropping elements and fields between the <b>Toolbox</b> and the <b>Layout</b> and within the layout itself.<br><br>To remove a field from the layout, drag the field to the <b>Recycle Bin</b>. The field will then be available in the Toolbox to add to the layout.'
    . '<br/><br/><!--not_in_theme!--><img src="themes/default/images/SugarLogic/icon_dependent.png"/>Indicates a Dependent field that may or may not be visible based on the value of a formula.<br/><!--not_in_theme!--><img src="themes/default/images/SugarLogic/icon_calculated.png" /> Indicates a Calculated field whose value will be automatically determined based on a formula.'
    ,
        'defaultquickcreate'=>'The <b>Layout</b> area contains the fields that are currently displayed within the <b>QuickCreate</b> form.<br><br>The QuickCreate form appears in the subpanels for the module when the Create button is clicked.<br/><br/>The <b>Toolbox</b> contains the <b>Recycle Bin</b> and the fields and layout elements that can be added to the layout.<br><br>Make changes to the layout by dragging and dropping elements and fields between the <b>Toolbox</b> and the <b>Layout</b> and within the layout itself.<br><br>To remove a field from the layout, drag the field to the <b>Recycle Bin</b>. The field will then be available in the Toolbox to add to the layout.'
    . '<br/><br/><!--not_in_theme!--><img src="themes/default/images/SugarLogic/icon_dependent.png"/>Indicates a Dependent field that may or may not be visible based on the value of a formula.<br/><!--not_in_theme!--><img src="themes/default/images/SugarLogic/icon_calculated.png" /> Indicates a Calculated field whose value will be automatically determined based on a formula.'
    ,
        //this defualt will be used for edit view
        'default'	=> 'The <b>Layout</b> area contains the fields that are currently displayed within the <b>EditView</b>.<br/><br/>The <b>Toolbox</b> contains the <b>Recycle Bin</b> and the fields and layout elements that can be added to the layout.<br><br>Make changes to the layout by dragging and dropping elements and fields between the <b>Toolbox</b> and the <b>Layout</b> and within the layout itself.<br><br>To remove a field from the layout, drag the field to the <b>Recycle Bin</b>. The field will then be available in the Toolbox to add to the layout.'
    . '<br/><br/><!--not_in_theme!--><img src="themes/default/images/SugarLogic/icon_dependent.png"/>Indicates a Dependent field that may or may not be visible based on the value of a formula.<br/><!--not_in_theme!--><img src="themes/default/images/SugarLogic/icon_calculated.png" /> Indicates a Calculated field whose value will be automatically determined based on a formula.'
    ,
        //this defualt will be used for edit view
        'defaultrecordview'   => 'The <b>Layout</b> area contains the fields that are currently displayed within the <b>Record View</b>.<br/><br/>The <b>Toolbox</b> contains the <b>Recycle Bin</b> and the fields and layout elements that can be added to the layout.<br><br>Make changes to the layout by dragging and dropping elements and fields between the <b>Toolbox</b> and the <b>Layout</b> and within the layout itself.<br><br>To remove a field from the layout, drag the field to the <b>Recycle Bin</b>. The field will then be available in the Toolbox to add to the layout.'
    . '<br/><br/><!--not_in_theme!--><img src="themes/default/images/SugarLogic/icon_dependent.png"/>Indicates a Dependent field that may or may not be visible based on the value of a formula.<br/><!--not_in_theme!--><img src="themes/default/images/SugarLogic/icon_calculated.png" /> Indicates a Calculated field whose value will be automatically determined based on a formula.'
    ,
        'saveBtn'	=> 'Kattintson a Mentés gombra az elrendezés változtatásainak megőrzéséhez!.<br />A változtatások nem fognak megjelenni a modulban, amíg azokat nem alkalmazza.',
        'historyBtn'=> 'Kattintson az Előzmények megtekintése gombra az előzőleg mentett elrendezések megtekintéséhez és visszaállításához.<br /><br />A Visszaállítás gomb megnyomásával az elrendezés visszaáll a korábban mentett állapotba. A mezőcímkék szerkesztéséhez kattintson a Szerkesztés ikonra a mezők mellett.',
        'historyRestoreDefaultLayout'=> 'Kattintson az <b>Alapértelmezett elrendezés visszaállítása</b> lehetőségre hogy visszaállítsa a nézetet az eredeti elrendezésre. Az <br><br><b>Alapértelmezett elrendezés visszaállítása</b> csak az eredeti elrendezésen belül állítja vissza a mezőelrendezést. A mezőcímkék módosításához kattinson az egyes mezők melletti Szerkesztés ikonra.',
        'publishBtn'=> 'Kattintson a Mentés & alkalmazás gombra a legutóbbi mentés óta tett változtatások mentéséhez, és a modulban aktívvá tételéhez.<br />Az elrendezés azonnal megjelenik a mondulban.',
        'toolbox'	=> 'Az eszköztár tartalmazza a Szemetest, továbbá azokat a mezőket és elemeket, amelyek hozzáadhatók az elrendezéshez.<br /><br />Az eszköztár elemei áthúzhatók az aktuális elrendezésbe, ahogy az elrendezés elemei is áthúzhatók az eszköztárba.<br /><br />Az elrendezés elemei sorok és panelek. Új sorok és panelek hozzáadásával mezők elhelyezésére alkalmas felületek alakulnak ki. <br /><br />Az új mezők már foglalt helyre való behúzásával a mezők helye felcserélődik.<br /><br />A töltelék mezők helykitöltő mezőként funkcionálnak az elrendezésbe való behúzáskor.',
        'panels'	=> 'Az Elrendezési terület egy képet nyújt arról, hogy fog megjelenni az elrendezés a modulban, miután alkalmazta a változtatásokat.<br /><br />Áthelyezhet mezőket, sorokat és paneleket azok kívánt helyre húzásával.<br /><br />Az elemek eltávolításához húzza be azokat a Szemetesbe, illetve adjon hozzá új elemeket az eszköztárból való behúzással.',
        'delete'	=> 'Húzza be ide az elemeket az elrendezésből való törléshez!',
        'property'	=> 'Módosítsa a mező címkéjét!<br />A fülek sorrendje szabja meg azt, hogy a tabulátor gomb milyen sorrendben vált a mezők között.',
    ),
    'fieldsEditor'=>array(
        'default'	=> 'A modul számára elérhető mezők a Mező neve alatt szerepelnek.<br /><br />A modul részére létrehozott mezők az alapértelmezett mezők felett fognak megjelenni. <br /><br />Mező szerkesztéséhez kattintson a Mező nevére.<br /><br />Új mező hozzáadásához kattintson a Mező hozzáadása gombra.',
        'mbDefault'=>'A modul számára elérhető mezők a Mező neve alatt szerepelnek.<br /><br />A mező tulajdonságainak megváltoztatásához kattintson a Mező nevére!<br /><br />Új mező létrehozásához kattintson a Mező hozzáadása gombra! A mező tulajdonságai, csakúgy, mint a mező neve módosítható lesz a Mező nevére való kattintással.<br /><br />A modul alkalmazása után a Stúdióban megjelennek a Module Builder egyéni mezői.',
        'addField'	=> 'Válasszon egy Adattípust az új mezőhöz. A típus meghatározza, hogy milyen karaktereket használhat az adatbevitel során. Egész számok kiválasztása esetén például csak egész számokat adhat majd meg a mező számára.<br /><br />Adjon nevet a mező számára! A név csak alfanumerikus karakterek sorozata lehet, szóköz nélkül, míg a vonás engedélyezett.<br /><br />A Megjelenített címke az a címke, amely a mezőket fogja jelezni a modul elrendezésben. A Rendszer címke az a címke, amely a kódban fog a mezőkre utalni.<br /><br />A mező adattípusától függően az alábbi paramétereket adhatja meg:<br /><br />A Segítség szöveg addig jelenik meg, amíg a felhasználó a mezőn időz, s így az a helyes adatok bevitelére ösztönözheti.<br /><br />A Megjegyzés szöveg, amely csak a Stúdióban és a Module Builderben fog megjelenni, részletes leírásként használható az adminisztrátorok számára.<br /><br />Az Alapértelmezett érték a mezőben fog megjelenni. A felhasználók megadhatnak egy új értéket a mezőben, de használhatják az alapértelmezettet is.<br /><br />Válassza ki a Tömeges Frissítés jelölőnégyzetet, amennyiben egyszerre nagyobb mennyiségű adat frissítését szeretné végrehajtani a mezőben.<br /><br />A Maximális érték határozza meg, hogy mekkora lehet az aktuális mezőben a maximálisan begépelhető karakterek száma.<br /><br />Válassza ki a Kötelező mező jelölőnégyzetet a kötelezően kitöltendő mezőkhöz. Ennek beállításával beállíthatjuk, mely adatokat szeretnénk kötelezően kitölthetővé tenni.<br /><br />Válassza ki a Riportolható jelölőnégyzetet, ha szeretné szűrhetővé és megjeleníthetővé tenni a Riportokban a mező tartalmát.<br /><br />Válassza ki az Ellenőrzés jelölőnégyzetet ha nyomon szeretné követni a mező változásait.<br /><br />Válassza ki az Importálható opciót ha szeretné importálhatóvá tenni az összes mezőt az Importálás varázslóban.<br /><br />Válassza ki a Kettőzött mezők egyesítése opciót a többszörös mezőnevek kereséséhez és összeolvasztásához.<br /><br />Adattípustól függően további tulajdonságok is megadhatók.',
        'editField' => 'E mező tulajdonságai testreszabhatók.<br />Kattintson a Klónozásra egy hasonló tulajdonságú új mező létrehozásához!',
        'mbeditField' => 'A sablon mezőinek Megjelenített címkéje testreszabható. A mezők egyéb tulajdonságai nem változtathatók.<br />Kattintson a Klónozásra egy hasonló tulajdonságú új mező létrehozásához!<br />A mező oly módon való eltávolításához, hogy többé ne jelenjen meg a modulban, távolítsa el azt a megfelelő Megjelenítésből.'

    ),
    'exportcustom'=>array(
        'exportHelp'=>'A Stúdióban létrehozott egyedi beállítások csomag formájában exportálhatók, hogy később a Modul töltő segítségével egyéb Sugar alkalmazásokba feltölthetők legyenek.<br /><br />Elsőként nevezze el a csomagot. Megadhatja a szerző nevét és leírást is kapcsolhat hozzá.<br /><br />Válassza ki azokat a modulokat, amelyeket exportálni szeretne, illetve amelyek az egyedi beállításokat tartalmazzák. Csak az egyedi beállításokat tartalmazó modulok jelennek meg kiválasztható állapotban. <br /><br />Kattintson az Export gombra a .zip fájl létrehozásához, amely tartalmazza az egyedi beállításokat!',
        'exportCustomBtn'=>'Kattintson az Export gombra az exportálható, egyéni beállításokat tartalmazó .zip fájl létrehozásához!',
        'name'=>'Ez a Neve a csomagnak. Ez a név fog megjelenni a telepítés során.',
        'author'=>'A telepítés során a Szerző neve fog megjelenni, mint a csomag létrehozójának neve.<br /><br />A Szerző lehet cég vagy magánszemély.',
        'description'=>'A telepítés során ez a Leírás fog megjelenni a csomagra vonatkozóan.',
    ),
    'studioWizard'=>array(
        'mainHelp' 	=> 'Üdvözöljük a Fejlesztő eszközök felhasználói felületén!<br />A Fejlesztő eszközök segítségével egyedi és hagyományos modulokat, illetve mezőket hozhat létre, továbbá kezelheti is azokat.',
        'studioBtn'	=> 'Használja a Studiót a telepített modulok testreszabásához.',
        'mbBtn'		=> 'Használja a Module Buildert új modulok létrehozásához.',
        'sugarPortalBtn' => 'Használja a Sugar portál szerkesztőt a Sugar portál kezeléséhez és testreszabásához.',
        'dropDownEditorBtn' => 'Használja a Legördülő szerkesztőt a legördülő menük hozzáadása és szerkesztése érdekében.',
        'appBtn' 	=> 'Alkalmazási mód, ahol testreszabhatja a program különböző tulajdonságait, mint pl. hány TPS jelentés jelenjen meg a  honlapon.',
        'backBtn'	=> 'Térjen vissza az előző lépéshez.',
        'studioHelp'=> 'A Stúdió segítségével adja meg, hogy milyen információk jelenjenek meg a modulokban, illetve milyen formában.',
        'studioBCHelp' => 'azt jelöli, hogy a modul visszafele kompatibilis',
        'moduleBtn'	=> 'Kattintson ennek a modulnak a szerkesztéséhez.',
        'moduleHelp'=> 'A testreszabható komponensek itt jelennek meg.<br /><br />A szerkesztéshez kattintson a megfelelő ikonokra.',
        'fieldsBtn'	=> 'Hozzon létre és szabjon testre Mezőket, hogy adatokat tároljon a modulban.',
        'labelsBtn' => 'Szerkesztheti a mezők címkéit, illetve a modul összes elnevezését.'	,
        'relationshipsBtn' => 'Adjon hozzá, vagy tekintsen meg meglévő Kapcsolatokat a modulban.' ,
        'layoutsBtn'=> 'Testreszabhatja a modul elrendezését. Az elrendezések a modul különböző nézetei, amik mezőket tartalmaznak.<br /><br />Megadhatja, milyen mezők jelenjenek meg, illetve milyen sorrendben.',
        'subpanelBtn'=> 'Határozza meg, hogy milyen mezők jelenjenek meg a modulban az Alpanelen.',
        'portalBtn' =>'Adja meg a modul elrendezését, amely meg fog jelenni a Sugar portálon.',
        'layoutsHelp'=> 'A modulban testreszabható Elrendezések itt találhatók.<br /><br />Az elrendezések a mezőket és az abban szereplő adatokat tartalmazzák.<br /><br />Kattintson a megfelelő ikonra az elrendezés szerkesztéséhez.',
        'subpanelHelp'=> 'A modulban testreszabható Alpanelek itt találhatók.<br /><br />Kattintson a megfelelő ikonra a modul szerkesztéséhez.',
        'newPackage'=>'Kattintosn az Új csomagra egy új csomag létrehozásához!',
        'exportBtn' => 'Kattintson a Testre szabott elemek exportálása gombra, hogy létrehozza és lementse a Stúdióban megalkotott egyedi elemeket tartalmazó csomagot.',
        'mbHelp'    => 'Használja a Modul Buildert az egyedi tartalmakat magába foglaló csomagok létrehozásához.',
        'viewBtnEditView' => 'A Szerkesztési nézet testreszabása. <br /><br />A Szerkesztési nézet adatbeviteli mezőket tartalmaz a felhasználótól származó adatok befogadására.',
        'viewBtnDetailView' => 'A Részletes nézet testreszabása.<br />A Részletes nézet jeleníti meg a felszanáló által bevitt, mezőkben szereplő adatokat.',
        'viewBtnDashlet' => 'A modul Sugar Dashletének testreszabása, beleértve annak Lista nézetét és keresési funkcióját.<br />A Sugar Dashlet hozzáadható marad a kezdő modul oldalaihoz.',
        'viewBtnListView' => 'A modul Lista nézetének testreszabása.<br />A Keresési eredmények megjelennek a Lista nézetben.',
        'searchBtn' => 'A modul Keresési elrendezésének testreszabása.<br />Határozza meg, milyen mezőket lehet használni az adatok szűrésére, amelyek megjelennek a Lista nézetben.',
        'viewBtnQuickCreate' =>  'A modul Gyors létrehozási elrendezésének testreszabása.<br />A Gyors létrehozási menü az alpanelen és az email modulban jelenik meg.',

        'searchHelp'=> 'A Keresés feltételeit itt adhatja meg.<br /><br />A keresési formák szűrési mezőket tartalmaznak.<br /><br />Kattintson a megfelelő ikonra az elrendezés szerkesztéséhez.',
        'dashletHelp' =>'A testreszabható Sugar Dashlet elrendezés itt jelenik meg.<br />A Sugar Dashlet hozzáadható marad a kezdő modul oldalaihoz.',
        'DashletListViewBtn' =>'A Sugar Dashlet Lista nézet a Sugar Dashlet keresési szűrő alapján jeleníti meg az eredményeket.',
        'DashletSearchViewBtn' =>'A Sugar Dashlet Keresés adatokat szűr a Sugar Dashlet Lista nézete számára.',
        'popupHelp' =>'A testreszabható Felugró elrendezések itt jelennek meg.',
        'PopupListViewBtn' => 'A Felugró Lista nézet eredményeket jeleníti meg a Felugró keresési nézet alapján.',
        'PopupSearchViewBtn' => 'A Felugró Keresés adatokat szűr a Felugró Lista nézete számára.',
        'BasicSearchBtn' => 'Testreszabhatja az Egyszerű keresési formát, amely megjelenik az Egyszerű keresési fülön a modul Keresési felületén.',
        'AdvancedSearchBtn' => 'Testreszabhatja a Részletes keresési formát, amely megjelenik a Részletes keresési fülön a modul Keresési felületén.',
        'portalHelp' => 'A Sugar portál kezelése és testreszabása.',
        'SPUploadCSS' => 'Stíluslap feltöltése a Sugar portál számára.',
        'SPSync' => 'Testreszabott elemek szinkronizálása a Sugar portállal.',
        'Layouts' => 'A Sugar portál modulok elrendezésének testreszabása.',
        'portalLayoutHelp' => 'A Sugar portál moduljai itt jelennek meg.<br /><br />Válasszon ki egy modult az elrendezés szerkesztéséhez!',
        'relationshipsHelp' => 'Az összes modulhoz tartozó Kapcsolat itt jelenik meg.<br /><br />A Kapcsolat nevét a rendszer generálta.<br /><br />Az Elsődleges modul az a modul, amelyhez a kapcsolatok tartoznak. Például a Kliensek modul kapcsolatainak összes tulajdonsága lesz az az elsődleges modul, amely a Kliensek adatbázis táblájában van eltárolva.<br /><br />A Típus a kapcsolat típusa, amely az Elsődleges modul és a Kapcsolódó modul között fennáll.<br /><br />Kattintson az oszlop címére a rekordok oszlop szerinti sorba rendezéséhez. <br /><br />Kattintson egy sorra a kapcsolat táblában, hogy megtekinthesse annak tulajdonságait.<br /><br />Kattintson a Kapcsolat hozzáadása gombra egy új kapcsolat létrehozásához.<br /><br />Kapcsolatokat létrehozhat bármely két létező modul között.',
        'relationshipHelp'=>'A telepített modulok között kapcsolat hozható létre.<br /><br />A Kapcsolatok a modul rekordokban lévő mezőkön és alpaneleken keresztül láthatók.<br /><br />Válasszon az alábbi kapcsolatok közül:<br /><br />Egy az egyhez: a modulok rekordjai átfedéseket fognak tartalmazni.<br /><br />Egy a sokhoz: az Elsődleges modul rekordjai alpanelt fognak tartalmazni, míg a Kapcsolódó modul csupán egy kapcsolódó mezőt.<br /><br />Sok a sokhoz: mindkét modul rekordjai alpanelekben fognak megjelenni.<br /><br />Válassza ki a Kapcsolódó modult a kapcsolat létrehozásához!<br /><br />Ha a kapcsolat típusa alpaneleket is érint, válassza az alpanel nézetet a megfelelő modulok megjelenítéséhez.<br /><br />Kattintson a Mentés gombra a kapcsolat létrehozásához!',
        'convertLeadHelp' => "Itt tud létrehozni modulokat a megjelenítő felület konvertálásához és módosíthatja a már meglévő modulok elrendezéseit. A modulok sorrendje áthúzással megváltoztatható.<br /><br />Modul: a modul neve.<br /><br />Kötelező: e modulokat létre kell hozni vagy egy már meglévőt ki kell választani, mielőtt az ajánlás átkonvertálja.<br /><br />Adat másolása: kijelölése esetén a mezők az ajánlásokból át lesznek másolva egy másik mezőbe ugyanazzal a névvel az újonnan létrehozott rekordokban.<br /><br />Kiválasztás engedélyezése: a kapcsolatban álló modulok kiválaszthatóak lesznek; nem kell őket újra létrehozni a konvertálás során.<br /><br />Szerkesztés: módosíthatja a felület elrendezését.<br /><br />Törlés: eltávolíthatja ezt a modult a felületről.",
        'editDropDownBtn' => 'Globális legördülő szerkesztése',
        'addDropDownBtn' => 'Új globális legördülő hozzáadása',
    ),
    'fieldsHelp'=>array(
        'default'=>'A modulban elérhető mezők a Mező neve alatt vannak felsorolva.<br />A modul sablon egy előre meghatározott mező csoportot tartalmaz.<br />Új mező létrehozásához kattintson a Mező hozzáadása gombra.<br />A mező szerkesztéséhez kattintson a Mező nevére.<br />A modul telepítése után a Module Builderben létrehozott mezők automatikusan megjelennek a Stúdióban a sablonhoz tartozó mezőkkel együtt.',
    ),
    'relationshipsHelp'=>array(
        'default'=>'Az összes modulhoz tartozó Kapcsolat itt jelenik meg.<br /><br />A Kapcsolat nevét a rendszer generálta.<br /><br />Az Elsődleges modul az a modul, amelyhez a kapcsolatok tartoznak. A kapcsolatok tulajdonságai adatbázisokban érhetők el.<br /><br />A Típus a kapcsolat típusa, amely az Elsődleges modul és a Kapcsolódó modul között fennáll.<br /><br />Kattintson az oszlop címére a rekordok oszlop szerinti sorba rendezéséhez. <br /><br />Kattintson egy sorra a kapcsolat táblában, hogy megtekinthesse annak tulajdonságait.<br /><br />Kattintson a Kapcsolat hozzáadása gombra egy új kapcsolat létrehozásához.',
        'addrelbtn'=>'Segítséget kaphatunk a kapcsolatok hozzáadásához, ha az egeret fölé visszük.',
        'addRelationship'=>'A telepített modulok között kapcsolat hozható létre.<br /><br />A Kapcsolatok a modul rekordokban lévő mezőkön és alpaneleken keresztül láthatók.<br /><br />Válasszon az alábbi kapcsolatok közül:<br /><br />Egy az egyhez: a modulok rekordjai átfedéseket fognak tartalmazni.<br /><br />Egy a sokhoz: az Elsődleges modul rekordjai alpanelt fognak tartalmazni, míg a Kapcsolódó modul csupán egy kapcsolódó mezőt.<br /><br />Sok a sokhoz: mindkét modul rekordjai alpanelekben fognak megjelenni.<br /><br />Válassza ki a Kapcsolódó modult a kapcsolat létrehozásához!<br /><br />Ha a kapcsolat típusa alpaneleket is érint, válassza az alpanel nézetet a megfelelő modulok megjelenítéséhez.<br /><br />Kattintson a Mentés gombra a kapcsolat létrehozásához!',
    ),
    'labelsHelp'=>array(
        'default'=> 'A mezők Címkéi és az egyéb elnevezések a modulban megváltoztathatók.<br />Kattintson egy mezőre, szerkessze a címkéjét majd mentse el azt.<br />Ha az alkalmazásban van futó nyelvi csomag, megadhatja a címkék elnevezéséhez használt nyelvet.',
        'saveBtn'=>'Kattintson a Mentés gombra a változások elmentéséhez!',
        'publishBtn'=>'Kattintson a Mentés & alkalmazás gombra a változtatások elmentéséhez és azok modulban való aktiválásához.',
    ),
    'portalSync'=>array(
        'default' => 'Adja meg a Sugar portál URL-t a portál példány frissítéséhez és kattintson a Mehet gombra.<br />Ezután adjon meg egy érvényes Sugar felhasználói nevet és jelszót, majd kattintson a Szinkronizálás kezdése gombra.<br />A testreszabott Sugar portál elrendezés, valamint a feltöltött Stíluslap átkerül a meghatározott protál példányba.',
    ),
    'portalConfig'=>array(
           'default' => '',
       ),
    'portalStyle'=>array(
        'default' => 'Testreszabhatja a Sugar portál megjelenését stíluslap használatával.<br />Válasszon egy Stíluslapot a feltöltéshez.<br />A stíluslap a következő szinkronizálás után fog megjelenni a Sugar portálon.',
    ),
),

'assistantHelp'=>array(
    'package'=>array(
            //custom begin
            'nopackages'=>'Egy új projekt létrehozásához kattintson az Új csomag gombra, amely a későbbiekben az egyéni modul(oka)t fogja tartalmazni.<br /><br />A csomagok egy vagy több modult tartalmazhatnak.<br /><br />Elképzelhető, hogy Ön egy olyan csomagot szeretne létrehozni, amely egyetlen modult tartalmaz a Kliensek modulhoz hasonlóan. Az is megoldható azonban, hogy a csomag egyszerre több modult tartalmazzon, amelyek egymáshoz, vagy a már meglévő modulokhoz kapcsolódnak.',
            'somepackages'=>'A csomagok a projektekhez kapcsolódó egyedi modulok tárhelyei. Egy csomag tartalmazhat egy vagy több modult, amelyek egymáshoz, vagy a már meglévő modulokhoz kapcsolódnak.<br /><br />A csomag létrehozása után azonnal adhat hozzá modulokat, de a későbbiekben is visszatérhet a Modul Builder alkalmazásba, hogy ezt kivitelezze.<br /><br />Amennyiben elkészült, a csomagot alkalmaznia kell az egyéni modulok telepítése végett.',
            'afterSave'=>'Az új csomagnak legalább egy modult kell tartalmaznia. Létrehozhat egy vagy akár több egyéni modult is a csomag számára. <br /><br />Kattintson az Új modul gombra egy egyéni modul létrehozásához!<br /><br />Amennyiben legalább egy modult sikerült létrehoznia, alkalmazhatja és közzéteheti a csomagot a saját vagy a többi felhasználó Sugar példánya számára.<br /><br />Az alkalmazáshoz kattintson az Alkalmazás gombra!<br /><br />Kattintson a Közzététel gombra, amennyiben a csomagot .zip fájl formájában menteni szeretné. A későbbiekben a .zip fájlt a Modul töltő segítségével telepítheti saját Sugar példányán.<br /><br />A fájlt megoszthatja más Sugar felhasználókkal is, akik szintén feltölthetik és telepíthetik azt.',
            'create'=>'A csomagok a projektekhez kapcsolódó egyedi modulok tárhelyei. Egy csomag tartalmazhat egy vagy több modult, amelyek egymáshoz, vagy a már meglévő modulokhoz kapcsolódnak.<br /><br />A csomag létrehozása után azonnal adhat hozzá modulokat, de a későbbiekben is visszatérhet a Modul Builder alkalmazásba, hogy ezt kivitelezze.',
            ),
    'main'=>array(
        'welcome'=>'A Fejlesztő eszközök segítségével egyedi és hagyományos modulokat, illetve mezőket hozhat létre, továbbá kezelheti is azokat.<br /><br />A modulok kezeléséhez lépjen be a Stúdióba.<br /><br />Egyéni modulok létrehozásához válassza a Module Builder eszközt!',
        'studioWelcome'=>'Az összes jelenleg telepített modul testreszabható a Stúdióban, beleértve az alapértelmezett és a modulhoz köthető tárgyakat.'
    ),
    'module'=>array(
        'somemodules'=>"Miután az aktuális csomag legalább egy modult tartalmaz, alkalmazhatja saját Sugar példányán vagy közzéteheti a többi felhasználó számára, hogy a Modul töltő segítségével ők is telepítsék. <br /><br />A csomag közvetlen telepítéséhez kattintson az Alkalmaz gombra!<br /><br />Kattintson a Közzététel gombra, amennyiben a csomagot .zip fájl formájában menteni szeretné, hogy a későbbiekben a Modul töltő segítségével telepíthető legyen az Ön vagy a többi felhasználó példányán.<br /><br />A csomag moduljait lépésről lépésre alakíthatja ki, alkalmazhatja és teheti közzé, amint arra készen áll. <br /><br />Közzététel vagy alkalmazás után további változtatásokat vitelezhet ki; egyaránt megváltoztathatja a csomag és a modulok tulajdonságait. A módosítások véglegesítéséhez ekkor újra kell publikálnia vagy telepítenie a csomagot." ,
        'editView'=> 'Itt tudja szerkeszteni a meglévő mezőket. Eltávolíthat bármely meglévő mezőt, vagy hozzáadhat elérhető mezőket a bal panelben.',
        'create'=>'A modul típusának megadásakor ügyeljen arra, hogy a különböző modulok más-más mezőket tartalmaznak.<br /><br />Minden modul felajánl egy-egy mezősablont, ahogy azt a neve is sugallja.<br /><br />Az Alap sablon olyan alapvető mezőket tartalmaz, mint a Név, a Hozzárendelés, a Csoport, a Létrehozás dátuma és a mező Leírása.<br /><br />A Cég sablon szervezetspecifikus mezőket foglal magába, mint például a Cégnév, a Szektor és a Számlázási cím. Használja ezt a sablont a Kliens modulhoz hasonló modulok létrehozásához.<br /><br />A Személy sablon egyénspecifikus mezőket szolgáltat, mint a Megszólítás, a Titulus, a Név, a Cím és a Telefonszám. Használja ezt a sablont a Kapcsolatok és az Ajánlások modulokhoz hasonló modulok létrehozásához.<br /><br />Az Eset sablon ügy- és hibaspecifikus mezőket kínál, mint a Szám, az Állapot, a Prioritás és a Leírás.Használja ezt a sablont az Esetek és a Hibakövető modulokhoz hasonló modulok létrehozásához.<br /><br />Megjegyzés: a modul létrehozása után módosíthatja annak mezőit és címkéit, továbbá egyedi mezőket adhat tartalmához.',
        'afterSave'=>'Az igényeinek megfelelően alakíthatja a modul tartalmát; mezőket adhat hozzá és szerkesztheti azokat, kapcsolatot építhet ki más modulokkal, továbbá megváltoztathatja elrendezését.<br /><br />Kattintson a Mező nézetre a sablon által biztosított és az egyedileg hozzáadott mezők megtekintéséhez!<br /><br />Modulok közti kapcsolat kialakításához, legyen szó akár aktuális vagy csomagban szereplő modulokról, kattintson a Kapcsolati nézet gombra.<br /><br />Az elrendezés szerkesztéséhez kattintson az Elrendezés nézetre. A részletes, szerkesztési és listanézet ugyanúgy szerkeszthető, mint a Stúdióban már aktív modulok esetén.<br /><br />Az aktuális modulhoz hasonló modul létrehozásához kattintson a Kettőz gombra. Az új modul tulajdonságai továbbmódosíthatók.',
        'viewfields'=>'Az igényeinek megfelelően a modul mezői módosíthatók. <br /><br />Az alapértelmezett mezők nem törölhetők, de eltávolíthatja őket az elrendezésből.<br /><br />A Tulajdonságok menüben elérhető Klónozás funkcióval könnyedén hozhat létre olyan új mezőket, amelyek tulajdonságai megegyeznek a korábbi mezőkkel. Adjon meg új tulajdonságokat és kattintson a Mentés gombra.<br /><br />Célszerű beállítani a mezők összes tulajdonságát mielőtt közzéteszi és telepíti a csomagot.',
        'viewrelationships'=>'Sok a sokhoz típusú kapcsolatot építhet ki a modul és a csomag egyéb moduljai, vagy a már korábban telepített modulok között.<br /><br />Az egy a sokhoz és az egy az egyhez típusú kapcsolatok létrehozásához adjon meg kapcsolt és rugalmasan kapcsolt mezőket a modulokban.',
        'viewlayouts'=>'Szabályozhatja, mely mezők adatai lesznek elérhetők a Szerkesztési nézet számára. Megadhatja azt is, mely adatok jelenjenek meg a Részletes nézetben. A megjelenítési nézeteknek nem kell fedniük egymást.<br /><br />A Gyors létrehozás űrlap akkor jelenik meg, ha az alpanel modulon belül a Létrehozás gombra kattint. Alapértelmezetten a Gyors létrehozás elrendezése ugyanaz, mint a Szerkesztési nézeté. A Gyors létrehozás elrendezését szabadon módosíthatja úgy, hogy az kevesebb és/vagy más mező(ke)t tartalmazzon a Szerkesztési nézethez képest.<br /><br />A modulok biztonságát az elrendezés beállításakor szabályozhatja.',
        'existingModule' =>'A modul létrehozása és testreszabása után hozzáadhat további modulokat vagy visszatérhet a csomaghoz, hogy azt közzétegye, illetve alkalmazza.<br /><br />Egyező tulajdonságokkal rendelkező modulok hozzáadásához kattintson a Kettőz gombra, új modulok létrehozásához pedig térjen vissza a csomagba és kattintson az Új modul opcióra.<br /><br />Amennyiben kész a közzétételre és a csomag alkalmazására, térjen vissza a csomagba a parancsok végrehajtásához. Csak azokat a csomagokat tudja telepíteni vagy publikálni, amelyek legalább egy modult tartalmaznak.',
        'labels'=> 'Az alapértelmezett, továbbá az egyéni mezők címkéi is megváltoztathatók. A címkék megváltoztatása nem befolyásolja a mezőben tárolt adatokat.',
    ),
    'listViewEditor'=>array(
        'modify'	=> 'Három oszlop jelenik meg balra. Az Alapértelmezett oszlop tartalmazza azokat a mezőket, amelyek automatikusan megjelennek a Lista nézetben. Az Elérhető oszlop olyan mezőket kínál, amelyek elérhetők az egyéni lista nézetek kialakításához. A Rejtett oszlop azokat a mezőket tartalmazza, amelyeket az adminisztrátorok egyedileg hozzáadhatnak az Alapértelmezett és Elérhető oszlopokhoz.',
        'savebtn'	=> 'A Mentés gombra kattintással elmenti a változtatásokat és aktívvá teszi őket.',
        'Hidden' 	=> 'A rejtett mezők olyan mezők, amelyekhez a felhasználók nem férnek hozzá a Lista nézet kialakítása során.',
        'Available' => 'Az elérhető mezők olyan mezők, amelyek automatikusan nem jelennek meg, de a felhasználók engedélyezhetik őket.',
        'Default'	=> 'Az alapértelmezett mezők azon felhasználók számára jelennek meg, akik nem hoztak létre egyéni lista nézet beállítást.'
    ),

    'searchViewEditor'=>array(
        'modify'	=> 'Két oszlop jelenik meg balra. Az Alapértelmezett oszlop tartalmazza a keresés nézetben megjelenített mezőket, míg a Rejtett oszlop mutatja az adminisztrátor számára elérhető és a nézethez hozzáadható mezőket.',
        'savebtn'	=> 'Kattintson a Mentés & alkalmazás gombra a változtatások elmentéséhez és azok modulban való aktiválásához.',
        'Hidden' 	=> 'A rejtett mezők nem jelennek meg a keresési nézetben.',
        'Default'	=> 'Az alapértelmezett mezők megjelennek a keresés nézetben.'
    ),
    'layoutEditor'=>array(
        'default'	=> 'Két oszlop jelenik meg balra. A jobboldali az Aktuális elrendezés vagy Elrendezési előnézet, ahol megváltoztathatja a modul elrendezését. A baloldali az Eszköztár, amely az elrendezés szerkesztéséhez kínál hasznos elemeket és eszközöket.<br /><br />Ha az elrendezési terület Jelenlegi elrendezés név alatt fut, akkor Ön a modul által jelenleg használt elrendezés egy példányán dolgozik. <br /><br />Ha Elrendezés előnézet elnevezéssel dolgozik, akkor egy előzőleg mentett másolat van kezében, amit lehet, hogy már megváltoztattak a használt példányhoz képest.',
        'saveBtn'	=> 'Erre a gombra kattintva elmentheti az elrendezést, hogy megőrizze a változtatásait. Amint visszatér a modulhoz, a megváltozott elrendezéssel fog találkozni. A változások mindaddig nem lesznek láthatók a felhasználók számára, amíg nem kattint a Mentés és Közzététel gombokra.',
        'publishBtn'=> 'Kattintson a gombra az elrendezés telepítéséhez! Az elrendezés azonnal alkalmazásra kerül és a felhasználók számára elérhető lesz.',
        'toolbox'	=> 'Az eszköztár számos hasznos funkciót tartalmaz az elrendezés szerkesztéséhez, beleértve a lomtárat, egy sor további kiegészítő elemet, és a rendelkezésre álló mezőket. Ezek közül bármi bemozgatható a felületbe.',
        'panels'	=> 'Ez a terület azt mutatja, hogy az elrendezés hogyan fog megjelenni a többi felhasználó számára. <br /><br />A mezők, sorok és panelek helyét egyaránt megváltoztathatja az új helyre való behúzással; azokat a szemetesbe húzva törölheti is. Új elemek hozzáadása az eszköztárból való kihúzással történik.'
    ),
    'dropdownEditor'=>array(
        'default'	=> 'Két oszlop jelenik meg balra. A jobboldali az Aktuális elrendezés vagy Elrendezési előnézet, ahol megváltoztathatja a modul elrendezését. A baloldali az Eszköztár, amely az elrendezés szerkesztéséhez kínál hasznos elemeket és eszközöket.<br /><br />Ha az elrendezési terület Jelenlegi elrendezés név alatt fut, akkor Ön a modul által jelenleg használt elrendezés egy példányán dolgozik. <br /><br />Ha Elrendezés előnézet elnevezéssel dolgozik, akkor egy előzőleg mentett másolat van kezében, amit lehet, hogy már megváltoztattak a használt példányhoz képest.',
        'dropdownaddbtn'=> 'Erre a gombra kattintva hozzáadhat új elemeket a legördülőhöz.',

    ),
    'exportcustom'=>array(
        'exportHelp'=>'A Stúdió módosításai csomaggá konvertálhatók és telepíthetők egy másik alkalmazáson.<br /><br />Adja meg a csomag nevét. Megadhatja a szerzőt és leírást is biztosíthat a csomag mellé.<br /><br />Válassza ki az exportálni kívánt testreszabott modul(oka)t! (Csak olyan modulok lesznek elérhetők, amelyek módosításokat tartalmaznak.)<br /><br />Kattintson az Exportálás gombra egy .zip fájl létrehozásához, amely tartalmazza a csomag egyedi beállításait. A .zip fájl a Modul töltő segítségével lesz futtatható.',
        'exportCustomBtn'=>'Kattintson az Exportálás gombra egy .zip fájl létrehozásához, amely tartalmazni fogja a csomag azon egyedi beállításait, amelyeket exportálni szeretne.',
        'name'=>'A csomag neve meg fog jelenni a Modul töltőben, amint az bekerült a Stúdióba és elérhetővé vált a telepítés számára.',
        'author'=>'A Szerző a csomag létrehozójának elnevezése. A Szerző lehet cég vagy magánszemély.<br /><br />A Szerző neve meg fog jelenni a Modul töltőben, amint az bekerült a Stúdióba és elérhetővé vált a telepítés számára.',
        'description'=>'A csomag leírása meg fog jelenni a Modul töltőben, amint az bekerült a Stúdióba és elérhetővé vált a telepítés számára.',
    ),
    'studioWizard'=>array(
        'mainHelp' 	=> 'Üdvözöljük a Fejlesztő eszközök felhasználói felületén!<br />A Fejlesztő eszközök segítségével egyedi és hagyományos modulokat, illetve mezőket hozhat létre, továbbá kezelheti is azokat.',
        'studioBtn'	=> 'Használja a Stúdiót a telepített modulok testreszabásához: rendezze el a mezőket, válassza ki, mely mezők lesznek elérhetők, illetve hozzon létre egyéni adatmezőket.',
        'mbBtn'		=> 'Használja a Module Buildert új modulok létrehozásához.',
        'appBtn' 	=> 'Használja az Alkalmazási módot, ahol testre szabhatja a program különböző tulajdonságait, mint pl. hány TPS jelentés jelenjen meg a  honlapon.',
        'backBtn'	=> 'Térjen vissza az előző lépéshez.',
        'studioHelp'=> 'Használja a Stúdiót a telepített modulok testreszabásához!',
        'moduleBtn'	=> 'Kattintson ennek a modulnak a szerkesztéséhez.',
        'moduleHelp'=> 'Válassza ki azt a modulkomponenst, amelyet szerkeszteni kíván.',
        'fieldsBtn'	=> 'A mezők beállításain keresztül adja meg, hogy a modul milyen információkat fog tartalmazni.<br /><br />Egyedi mezőket hozhat létre és szerkesztheti is őket.',
        'layoutsBtn'=> 'Testreszabhatja a szerkesztési, részletes és lista nézetet, továbbá a keresési megjelenítést.',
        'subpanelBtn'=> 'Adja meg, hogy a modul alpaneleiben milyen információk fognak szerepelni!',
        'layoutsHelp'=> 'Válassza ki az elrendezést szerkesztéshez!<br />Az adatokat tartalmazó mezők elrendezésének megváltoztatásához, kattintson a Szerkesztési nézetre!<br />Ha a Szerkesztési nézetben bevitt adatok megjelenítését kívánja módosítani, kattintson a Részletes nézetre!<br />Az alapértelmezett lista oszlopainak megváltoztatásához, kattintson a Lista nézetre!<br />Az elrendezésben elérhető egyszerű és részletes keresés megváltoztatásához kattintson a Keresésre!',
        'subpanelHelp'=> 'Válassza ki az Alpanelt szerkesztésre!',
        'searchHelp' => 'Válassza ki a Keresés nézetet szerkesztésre!',
        'labelsBtn'	=> 'Szerkessze a <b>Címkéket</b> a modulon belüli értékek megjelenítéséhez.',
        'newPackage'=>'Kattintosn az Új csomagra egy új csomag létrehozásához!',
        'mbHelp'    => 'Üdvözöljük a Module Builder eszköz felületén!<br /><br />Használja a Module Buildert egyedi csomagok létrehozására, amelyek standard vagy egyéni tárgyakon alapulnak.<br /><br />A kezdéshez kattintson az Új csomagra egy új csomag létrehozásához, vagy jelöljön ki egy korábban létrehozott csomagot szerkesztésre.<br /><br />A csomagok a projektekhez kapcsolódó egyedi modulok tárhelyei. Egy csomag tartalmazhat egy vagy több modult, amelyek egymáshoz, vagy a már meglévő modulokhoz kapcsolódnak.<br /><br />Példa: elképzelhető, hogy Ön egy olyan csomagot szeretne létrehozni, amely egyetlen modult tartalmaz a Kliensek modulhoz hasonlóan. Az is megoldható azonban, hogy a csomag egyszerre több modult tartalmazzon, amelyek egymáshoz, vagy a már meglévő modulokhoz kapcsolódnak.',
        'exportBtn' => 'Kattintson a Testre szabott elemek exportálása gombra, hogy létrehozza és lementse a Stúdióban megalkotott egyedi elemeket tartalmazó csomagot.',
    ),

),
//HOME
'LBL_HOME_EDIT_DROPDOWNS'=>'Legördülő szerkesztő',

//ASSISTANT
'LBL_AS_SHOW' => 'Segéd bekacsolása.',
'LBL_AS_IGNORE' => 'Segéd kikacsolása.',
'LBL_AS_SAYS' => 'Segéd ajánlása:',

//STUDIO2
'LBL_MODULEBUILDER'=>'Modulépítő',
'LBL_STUDIO' => 'Stúdió',
'LBL_DROPDOWNEDITOR' => 'Legördülő szerkesztő',
'LBL_EDIT_DROPDOWN'=>'Legördülő menü szerkesztés',
'LBL_DEVELOPER_TOOLS' => 'Fejlesztőeszközök',
'LBL_SUGARPORTAL' => 'Sugar portál szerkesztő',
'LBL_SYNCPORTAL' => 'Portál szinkronizálása',
'LBL_PACKAGE_LIST' => 'Csomagok listája',
'LBL_HOME' => 'Főoldal',
'LBL_NONE'=>'-Egyik sem-',
'LBL_DEPLOYE_COMPLETE'=>'Az alkalmazás megtörtént',
'LBL_DEPLOY_FAILED'   =>'Hiba lépett fel az alkalmazás során, így elképzelhető, hogy a csomag nem lett rendesen telepítve',
'LBL_ADD_FIELDS'=>'Egyedi mezők hozzáadása',
'LBL_AVAILABLE_SUBPANELS'=>'Elérhető alpanelek',
'LBL_ADVANCED'=>'Részletes',
'LBL_ADVANCED_SEARCH'=>'Részletes keresés',
'LBL_BASIC'=>'Egyszerű',
'LBL_BASIC_SEARCH'=>'Egyszerű keresés',
'LBL_CURRENT_LAYOUT'=>'Elrendezés',
'LBL_CURRENCY' => 'Pénznem',
'LBL_CUSTOM' => 'Egyedi',
'LBL_DASHLET'=>'Sugar Dashlet',
'LBL_DASHLETLISTVIEW'=>'Sugar Dashlet listakép',
'LBL_DASHLETSEARCH'=>'Sugar Dashlet keresés',
'LBL_POPUP'=>'Popup nézet',
'LBL_POPUPLIST'=>'Popup listakép',
'LBL_POPUPLISTVIEW'=>'Popup listakép',
'LBL_POPUPSEARCH'=>'Popup keresés',
'LBL_DASHLETSEARCHVIEW'=>'Sugar Dashlet keresés',
'LBL_DISPLAY_HTML'=>'HTML kód megjelenítése',
'LBL_DETAILVIEW'=>'Részletes nézet',
'LBL_DROP_HERE' => '[Húzza ide]',
'LBL_EDIT'=>'Szerkesztés',
'LBL_EDIT_LAYOUT'=>'Elrendezés szerkesztése',
'LBL_EDIT_ROWS'=>'Sorok szerkesztése',
'LBL_EDIT_COLUMNS'=>'Oszlopok szerkesztése',
'LBL_EDIT_LABELS'=>'Címkék szerkesztése',
'LBL_EDIT_PORTAL'=>'Portál szerkesztés',
'LBL_EDIT_FIELDS'=>'Mezők szerkesztése',
'LBL_EDITVIEW'=>'Szerkesztési nézet',
'LBL_FILTER_SEARCH' => "Keresés",
'LBL_FILLER'=>'(töltelék)',
'LBL_FIELDS'=>'Mezők',
'LBL_FAILED_TO_SAVE' => 'Nem sikerült menteni',
'LBL_FAILED_PUBLISHED' => 'Nem sikerült a közzététel',
'LBL_HOMEPAGE_PREFIX' => 'Saját',
'LBL_LAYOUT_PREVIEW'=>'Elrendezési nézet',
'LBL_LAYOUTS'=>'Elrendezések',
'LBL_LISTVIEW'=>'Listanézet',
'LBL_RECORDVIEW'=>'Rekord nézet',
'LBL_RECORDDASHLETVIEW'=>'Dashlet rekord nézet',
'LBL_PREVIEWVIEW'=>'Preview View',
'LBL_MODULE_TITLE' => 'Stúdió',
'LBL_NEW_PACKAGE' => 'Új csomag',
'LBL_NEW_PANEL'=>'Új panel',
'LBL_NEW_ROW'=>'Új sor',
'LBL_PACKAGE_DELETED'=>'Csomag törölve',
'LBL_PUBLISHING' => 'Közzététel...',
'LBL_PUBLISHED' => 'Közzétéve',
'LBL_SELECT_FILE'=> 'Válasszon egy fájlt',
'LBL_SAVE_LAYOUT'=> 'Elrendezés mentése',
'LBL_SELECT_A_SUBPANEL' => 'Válasszon ki egy alpanelt',
'LBL_SELECT_SUBPANEL' => 'Alpanel kiválasztása',
'LBL_SUBPANELS' => 'Alpanelek',
'LBL_SUBPANEL' => 'Alpanel',
'LBL_SUBPANEL_TITLE' => 'Cím:',
'LBL_SEARCH_FORMS' => 'Keresés',
'LBL_STAGING_AREA' => 'Próbaterület (húzzon ide elemeket)',
'LBL_SUGAR_FIELDS_STAGE' => 'Sugar mezők (kattintson az elemek hozzáadásához)',
'LBL_SUGAR_BIN_STAGE' => 'Sugar szemetes (kattintson az elemek hozzáadásához)',
'LBL_TOOLBOX' => 'Eszköztár',
'LBL_VIEW_SUGAR_FIELDS' => 'Sugar mezők megtekintése',
'LBL_VIEW_SUGAR_BIN' => 'Sugar szemetes megtekintése',
'LBL_QUICKCREATE' => 'Gyors létrehozás',
'LBL_EDIT_DROPDOWNS' => 'Globális legördülő szerkesztése',
'LBL_ADD_DROPDOWN' => 'Új globális legördülő lista hozzáadása',
'LBL_BLANK' => '-üres-',
'LBL_TAB_ORDER' => 'Fülek sorrendje',
'LBL_TAB_PANELS' => 'Panelek fülekként való megjelenítése',
'LBL_TAB_PANELS_HELP' => 'Egyablakos megjelenítés helyett füleken való elkülönítés.',
'LBL_TABDEF_TYPE' => 'Megjelenítés típusa',
'LBL_TABDEF_TYPE_HELP' => 'Válassza ki, ez a szekció a továbbiakban hogy jelenjen meg! A beállítás csak akkor lesz érvényben, ha korábban engedélyezte a fülek megjelenítését.',
'LBL_TABDEF_TYPE_OPTION_TAB' => 'Fül',
'LBL_TABDEF_TYPE_OPTION_PANEL' => 'Panel',
'LBL_TABDEF_TYPE_OPTION_HELP' => 'Válassza a Panel opciót, ha a panelt szeretné megjeleníteni a nézetben. Ha a Fül lehetőséget választja, a tartalom külön fülön fog megjelenni. Mind a paneles, mind a füles elrendezés folytatólagos, vagyis a megadott információk után következő adatok hasonlóképp fognak megjelenni.',
'LBL_TABDEF_COLLAPSE' => 'Bezár',
'LBL_TABDEF_COLLAPSE_HELP' => 'Alapértelmezett beállítások mellett panelként zárja be ezt a szekciót',
'LBL_DROPDOWN_TITLE_NAME' => 'Név',
'LBL_DROPDOWN_LANGUAGE' => 'Nyelv',
'LBL_DROPDOWN_ITEMS' => 'Lista elemek',
'LBL_DROPDOWN_ITEM_NAME' => 'Elem neve',
'LBL_DROPDOWN_ITEM_LABEL' => 'Megjelenített címke',
'LBL_SYNC_TO_DETAILVIEW' => 'Szinkronizálás a Részletes nézethez',
'LBL_SYNC_TO_DETAILVIEW_HELP' => 'Válassza ezt az opciót a Szerkesztési nézet Részletes nézettel való szinkronizálásához. A Szerkesztési nézet mezőbeállításai automatikusan meg fognak jelenni a Részletes nézetben a Mentés, illetve a Mentés & alkalmazás gombok lekattintásával. Az elrendezés csak a Szerkesztési nézetben módosítható.',
'LBL_SYNC_TO_DETAILVIEW_NOTICE' => 'Ez Részletes nézet megfelel a Szerkesztési nézetnek.<br />A mezők, illetve azok helye megegyezik a Szerkesztési nézetben tapasztaltakkal.<br />A Részletes nézet változásai nem menthetők ezen az oldalon. Elrendezést érintő változások csupán a Szerkesztési nézetben eszközölhetők.',
'LBL_COPY_FROM' => 'Másolás innen',
'LBL_COPY_FROM_EDITVIEW' => 'Másolás Szerkesztési nézetből',
'LBL_DROPDOWN_BLANK_WARNING' => 'Az értékek megadása kötelező egyaránt az Elemnévre és a Megjelenített címkére nézve. Egy üres elem hozzáadásához kattintson a Hozzáadás gombra, értékek megadása nélkül.',
'LBL_DROPDOWN_KEY_EXISTS' => 'A kulcs már létezik a listában',
'LBL_DROPDOWN_LIST_EMPTY' => 'A listának legalább egy engedélyezett elemet kell tartalmaznia.',
'LBL_NO_SAVE_ACTION' => 'A nézethez nem található mentési művelet.',
'LBL_BADLY_FORMED_DOCUMENT' => 'Studio2:establishLocation: hibás formátumú dokumentum',
// @TODO: Remove this lang string and uncomment out the string below once studio
// supports removing combo fields if a member field is on the layout already.
'LBL_INDICATES_COMBO_FIELD' => '** Kombinált mezőt jelöl. A kombinált mezők több külön mező összevonásával jönnek léte. A "Cím" például kombinált mező, amely magába foglalja az "Utca", "Város", "Irányítószám", "Megye" és "Állam" mezők összességét.<br /><br />Ahhoz, hogy megtekintse, egy kombinált mező mely másik mezőket foglalja magába, kattintson duplán a mező nevére!',
'LBL_COMBO_FIELD_CONTAINS' => 'tartalma:',

'LBL_WIRELESSLAYOUTS'=>'Mobil elrendezés',
'LBL_WIRELESSEDITVIEW'=>'Mobil-szerkesztő nézet',
'LBL_WIRELESSDETAILVIEW'=>'Mobil részletes nézet',
'LBL_WIRELESSLISTVIEW'=>'Mobil listakép',
'LBL_WIRELESSSEARCH'=>'Mobil keresés',

'LBL_BTN_ADD_DEPENDENCY'=>'Függőség hozzáadása',
'LBL_BTN_EDIT_FORMULA'=>'Szabály módosítása',
'LBL_DEPENDENCY' => 'Függőség',
'LBL_DEPENDANT' => 'Függő',
'LBL_CALCULATED' => 'Számított érték',
'LBL_READ_ONLY' => 'Csak olvasható',
'LBL_FORMULA_BUILDER' => 'Szabálykészítő',
'LBL_FORMULA_INVALID' => 'Érvénytelen képlet',
'LBL_FORMULA_TYPE' => 'A képlet típusa',
'LBL_NO_FIELDS' => 'Nincsenek elérhető mezők',
'LBL_NO_FUNCS' => 'Nincsenek elérhető funkciók',
'LBL_SEARCH_FUNCS' => 'Funkciók keresése...',
'LBL_SEARCH_FIELDS' => 'Mezők keresése...',
'LBL_FORMULA' => 'Szabály',
'LBL_DYNAMIC_VALUES_CHECKBOX' => 'Függő',
'LBL_DEPENDENT_DROPDOWN_HELP' => 'A baloldali lista elemeit húzza át jobboldalra, amennyiben az elemeket elérhetővé kívánja tenni a szülő opció kiválasztásánál!',
'LBL_AVAILABLE_OPTIONS' => 'Elérhető lehetőségek',
'LBL_PARENT_DROPDOWN' => 'Legördülő szülő',
'LBL_VISIBILITY_EDITOR' => 'Láthatósági szerkesztő',
'LBL_ROLLUP' => 'Felgöngyölít',
'LBL_RELATED_FIELD' => 'Kapcsolódó mezők',
'LBL_PORTAL_ROLE_DESC' => 'Ne törölje ki ez a szerepet! Az önkiszolgáló vásárló szerepét a rendszer a Sugar Portál aktiválása során automatikusan hozza létre. A hozzáférés szabályozásával megadhatja, hogy a Hibák, Esetek és Tudásbázis modulok közül melyek jelenjenek meg a Sugar Portálban. A rendszer előre be nem számítható működésének elkerülése végett ne módosítson a további hozzáféréseken. Ha véletlenül kitörölné ezt a szerepet, tiltsa le, majd engedélyezze ismét a Sugar Portált, hogy visszanyerje azt!',

//RELATIONSHIPS
'LBL_MODULE' => 'Modul',
'LBL_LHS_MODULE'=>'Elsődleges modul',
'LBL_CUSTOM_RELATIONSHIPS' => '* Studióban létrehozott kapcsolat',
'LBL_RELATIONSHIPS'=>'Kapcsolatok',
'LBL_RELATIONSHIP_EDIT' => 'Kapcsolat szerkesztése',
'LBL_REL_NAME' => 'Név',
'LBL_REL_LABEL' => 'Címke',
'LBL_REL_TYPE' => 'Típus',
'LBL_RHS_MODULE'=>'Kapcsolódó modul',
'LBL_NO_RELS' => 'Nincs összefüggés',
'LBL_RELATIONSHIP_ROLE_ENTRIES'=>'Opcionális feltétel' ,
'LBL_RELATIONSHIP_ROLE_COLUMN'=>'Oszlop',
'LBL_RELATIONSHIP_ROLE_VALUE'=>'Érték',
'LBL_SUBPANEL_FROM'=>'Alpanel innen',
'LBL_RELATIONSHIP_ONLY'=>'A kapcsolatban nem jönnek létre látható elemek, mivel a két modul már kapcsolatban áll egymással.',
'LBL_ONETOONE' => 'Egy az egyhez',
'LBL_ONETOMANY' => 'Egy a sokhoz',
'LBL_MANYTOONE' => 'Sok az egyhez',
'LBL_MANYTOMANY' => 'Sok a sokhoz',

//STUDIO QUESTIONS
'LBL_QUESTION_FUNCTION' => 'Válasszon egy funkciót vagy komponenst!',
'LBL_QUESTION_MODULE1' => 'Válasszon egy modult!',
'LBL_QUESTION_EDIT' => 'Válasszon egy szerkesztendő modult!',
'LBL_QUESTION_LAYOUT' => 'Válassza ki a szerkesztendő elrendezést!',
'LBL_QUESTION_SUBPANEL' => 'Válasszon egy alpanelt a szerkesztéshez!',
'LBL_QUESTION_SEARCH' => 'Válasszon ki egy szerkesztendő kereső elrendezést!',
'LBL_QUESTION_MODULE' => 'Válasszon ki egy szerkesztendő modulkomponenst!',
'LBL_QUESTION_PACKAGE' => 'Válasszon ki egy szerkesztendő csomagot vagy készítsen egy újat!',
'LBL_QUESTION_EDITOR' => 'Válasszon ki egy eszközt!',
'LBL_QUESTION_DROPDOWN' => 'Válassza ki a szerkesztendő legördülő listát vagy készítsen egy újat!',
'LBL_QUESTION_DASHLET' => 'Válassza ki a szerkesztendő dashlet elrendezést!',
'LBL_QUESTION_POPUP' => 'Válassza ki a szerkesztendő felugró elrendezést!',
//CUSTOM FIELDS
'LBL_RELATE_TO'=>'Kapcsolja ehhez:',
'LBL_NAME'=>'Név',
'LBL_LABELS'=>'Címkék',
'LBL_MASS_UPDATE'=>'Tömeges frissítés',
'LBL_AUDITED'=>'Ellenőrzés',
'LBL_CUSTOM_MODULE'=>'Modul',
'LBL_DEFAULT_VALUE'=>'Alapértelmezett érték',
'LBL_REQUIRED'=>'Szükséges',
'LBL_DATA_TYPE'=>'Típus',
'LBL_HCUSTOM'=>'Szokásos',
'LBL_HDEFAULT'=>'Alapértelmezett',
'LBL_LANGUAGE'=>'Nyelv:',
'LBL_CUSTOM_FIELDS' => '* a Stúdióban létrehozott mező',

//SECTION
'LBL_SECTION_EDLABELS' => 'Címkék szerkesztése',
'LBL_SECTION_PACKAGES' => 'Csomagok',
'LBL_SECTION_PACKAGE' => 'Csomag',
'LBL_SECTION_MODULES' => 'Modulok',
'LBL_SECTION_PORTAL' => 'Portál',
'LBL_SECTION_DROPDOWNS' => 'Legördülők',
'LBL_SECTION_PROPERTIES' => 'Tulajdonságok',
'LBL_SECTION_DROPDOWNED' => 'Legördülő menü szerkesztése',
'LBL_SECTION_HELP' => 'Segítség',
'LBL_SECTION_ACTION' => 'Feladat',
'LBL_SECTION_MAIN' => 'Fő',
'LBL_SECTION_EDPANELLABEL' => 'Panel címke szerkesztése',
'LBL_SECTION_FIELDEDITOR' => 'Mező szerkesztése',
'LBL_SECTION_DEPLOY' => 'Alkalmaz',
'LBL_SECTION_MODULE' => 'Modul',
'LBL_SECTION_VISIBILITY_EDITOR'=>'Láthatóság szerkesztése',
//WIZARDS

//LIST VIEW EDITOR
'LBL_DEFAULT'=>'Alapértelmezett',
'LBL_HIDDEN'=>'Rejtett',
'LBL_AVAILABLE'=>'Elérhető',
'LBL_LISTVIEW_DESCRIPTION'=>'Az alábbiakban három oszlop látható. Az Alapértelmezett oszlop azokat a mezőket tartalmazza, amelyek normál beállítások mellett megjelennek a listanézetben. Az Egyéb oszlop azokat a mezőket tartalmazza, amelyeket a felhasználók egyedileg hozzáadhatnak a listanézethez. Az Elérhető oszlop olyan mezőket jelenít meg, amelyeket rendszergazdaként elérhetővé tehet az Alapértelmezett és az Egyéb oszlopokban való megjelenítéshez.',
'LBL_LISTVIEW_EDIT'=>'Listanézet szerkesztő',

//Manager Backups History
'LBL_MB_PREVIEW'=>'Előnézet',
'LBL_MB_RESTORE'=>'Visszaállítás',
'LBL_MB_DELETE'=>'Törlés',
'LBL_MB_COMPARE'=>'Összehasonlítás',
'LBL_MB_DEFAULT_LAYOUT'=>'Alapértelmezett elrendezés',

//END WIZARDS

//BUTTONS
'LBL_BTN_ADD'=>'Hozzáadás',
'LBL_BTN_SAVE'=>'Mentés',
'LBL_BTN_SAVE_CHANGES'=>'Módosítások mentése',
'LBL_BTN_DONT_SAVE'=>'Módosítások elvetése',
'LBL_BTN_CANCEL'=>'Mégsem',
'LBL_BTN_CLOSE'=>'Bezár',
'LBL_BTN_SAVEPUBLISH'=>'Mentés & alkalmazás',
'LBL_BTN_NEXT'=>'Tovább',
'LBL_BTN_BACK'=>'Vissza',
'LBL_BTN_CLONE'=>'Klónozás',
'LBL_BTN_COPY' => 'Másolás',
'LBL_BTN_COPY_FROM' => 'Másolás innen...',
'LBL_BTN_ADDCOLS'=>'Oszlopok hozzáadása',
'LBL_BTN_ADDROWS'=>'Sorok hozzáadása',
'LBL_BTN_ADDFIELD'=>'Mező hozzáadása',
'LBL_BTN_ADDDROPDOWN'=>'Legördülő lista hozzáadása',
'LBL_BTN_SORT_ASCENDING'=>'Növekvő elrendezés',
'LBL_BTN_SORT_DESCENDING'=>'Csökkenő elrendezés',
'LBL_BTN_EDLABELS'=>'Címkék szerkesztése',
'LBL_BTN_UNDO'=>'Visszavon',
'LBL_BTN_REDO'=>'Ismét',
'LBL_BTN_ADDCUSTOMFIELD'=>'Egyéni mező hozzáadása',
'LBL_BTN_EXPORT'=>'Testre szabott elemek exportálása',
'LBL_BTN_DUPLICATE'=>'Kettőz',
'LBL_BTN_PUBLISH'=>'Közzétesz',
'LBL_BTN_DEPLOY'=>'Alkalmaz',
'LBL_BTN_EXP'=>'Export',
'LBL_BTN_DELETE'=>'Törlés',
'LBL_BTN_VIEW_LAYOUTS'=>'Elrendezések megtekintése',
'LBL_BTN_VIEW_MOBILE_LAYOUTS'=>'Mobil Elrendezési Nézet',
'LBL_BTN_VIEW_FIELDS'=>'Mezők megtekintése',
'LBL_BTN_VIEW_RELATIONSHIPS'=>'Kapcsolatok megtekintése',
'LBL_BTN_ADD_RELATIONSHIP'=>'Kapcsolat hozzáadása',
'LBL_BTN_RENAME_MODULE' => 'Modul nevének megváltoztatása',
'LBL_BTN_INSERT'=>'Beszúr',
'LBL_BTN_RESTORE_BASE_LAYOUT' => 'Alap elrendezés visszaállítása',
//TABS

//ERRORS
'ERROR_ALREADY_EXISTS'=> 'Hiba: Mező már létezik',
'ERROR_INVALID_KEY_VALUE'=> "Hiba: Érvénytelen kulcs érték: [&#39;]",
'ERROR_NO_HISTORY' => 'Előzmény fájlok nem találhatók',
'ERROR_MINIMUM_FIELDS' => 'Az elrendezésnek tartalmaznia kell legalább egy mezőt',
'ERROR_GENERIC_TITLE' => 'Hiba történt',
'ERROR_REQUIRED_FIELDS' => 'Biztos benne, hogy folytatni kívánja? Az alábbi kötelezően kitöltendő mezők hiányoznak az elrendezésből:',
'ERROR_ARE_YOU_SURE' => 'Biztos benne, hogy folytatni kívánja?',
'ERROR_DATABASE_ROW_SIZE_LIMIT' => 'A mezőt nem lehetett létrehozni. Elérte a sorok méretének határát az adatbázisa ezen táblázatában. <a href="https://support.sugarcrm.com/SmartLinks/Custom/MySQL_Row_Size_Limit/" target="_blank">Tudjon meg többet</a>.',

'ERROR_CALCULATED_MOBILE_FIELDS' => 'Az alábbi mezők számolt értékeket tartalmaznak, amelyeket valós időben nem lehet frissíteni a SugarCRM mobil szerkesztő nézetében.',
'ERROR_CALCULATED_PORTAL_FIELDS' => 'Az alábbi mezők számolt értékeket tartalmaznak, amelyeket valós időben nem lehet frissíteni a SugarCRM portál szerkesztő nézetében.',

//SUGAR PORTAL
    'LBL_PORTAL_DISABLED_MODULES' => 'A következő modulok vannak letiltva:',
    'LBL_PORTAL_ENABLE_MODULES' => 'Ha engedélyezni szeretné ezeket a portálon, kérjük, tegye meg azt <a id="configure_tabs" target="_blank" href="./index.php?module=Administration&amp;action=ConfigureTabs">itt</a>.',
    'LBL_PORTAL_CONFIGURE' => 'Portál konfigurálása',
    'LBL_PORTAL_ENABLE_PORTAL' => 'Portál engedélyezése',
    'LBL_PORTAL_SHOW_KB_NOTES' => 'Megjegyzések engedélyezése a Tudásbázis modulban',
    'LBL_PORTAL_ALLOW_CLOSE_CASE' => 'Esetzárások engedélyezése a portál felhasználói számára',
    'LBL_PORTAL_ENABLE_SELF_SIGN_UP' => 'Új felhasználók feliratkozásának engedélyezése',
    'LBL_PORTAL_USER_PERMISSIONS' => 'Felhasználói engedélyek',
    'LBL_PORTAL_THEME' => 'Portál téma',
    'LBL_PORTAL_ENABLE' => 'Engedélyezés',
    'LBL_PORTAL_SITE_URL' => 'Az Ön portál oldala:',
    'LBL_PORTAL_APP_NAME' => 'Alkalmazás neve',
    'LBL_PORTAL_CONTACT_PHONE' => 'Telefon',
    'LBL_PORTAL_CONTACT_EMAIL' => 'E-mail',
    'LBL_PORTAL_CONTACT_EMAIL_INVALID' => 'Adjon meg érvényes e-mail címet',
    'LBL_PORTAL_CONTACT_URL' => 'URL',
    'LBL_PORTAL_CONTACT_INFO_ERROR' => 'Meg kell adnia legalább egy értesítési módot',
    'LBL_PORTAL_LIST_NUMBER' => 'Listán megjeleníthető rekordok száma',
    'LBL_PORTAL_DETAIL_NUMBER' => 'A Részletes nézet mezőinek száma',
    'LBL_PORTAL_SEARCH_RESULT_NUMBER' => 'A Globális keresés találatainak megjelenített mennyisége',
    'LBL_PORTAL_DEFAULT_ASSIGN_USER' => 'Alapértelmezett új portál regisztráció esetén',
    'LBL_PORTAL_MODULES' => 'Portál modulok',
    'LBL_CONFIG_PORTAL_CONTACT_INFO' => 'Portál kapcsolati információ',
    'LBL_CONFIG_PORTAL_CONTACT_INFO_HELP' => 'Konfigurálja a kapcsolati információt, amely megjelenik a portál felhasználóinak, akik további segítséget igényelnek a kliensükkel. Konfiguráljon legalább egy opciót.',
    'LBL_CONFIG_PORTAL_MODULES_HELP' => 'Húzza be a portál modulok nevét a megfelelő helyre aszerint, hogy láthatóvá akarja tenni vagy el akarja rejteni őket a portál felső navigációs sávjában. A portál modulokhoz való felhasználói hozzáférés meghatározásához használja a <a href="?module=ACLRoles&action=index">Feladatkörök kezelését.</a>',
    'LBL_CONFIG_PORTAL_MODULES_DISPLAYED' => 'Megjelenített modulok',
    'LBL_CONFIG_PORTAL_MODULES_HIDDEN' => 'Elrejtett modulok',
    'LBL_CONFIG_VISIBILITY' => 'Láthatóság',
    'LBL_CASE_VISIBILITY_HELP' => 'Határozza meg, hogy az esetet mely portálok felhasználói láthatják.',
    'LBL_EMAIL_VISIBILITY_HELP' => 'Határozza meg, hogy mely portálok felhasználói láthatják az esethez kapcsolódó e-maileket. A résztvevő kapcsolatok azok, akik a Címzett, Feladó, Másolat és Titkos másolat mezőkben szerepelnek.',
    'LBL_MESSAGE_VISIBILITY_HELP' => 'Határozza meg, hogy mely portálok felhasználói láthatják az esethez kapcsolódó üzeneteket. A résztvevő kapcsolatok azok, amelyet a Vendégek mezőben szerepelnek.',
    'CASE_VISIBILITY_OPTIONS' => [
        'all' => 'A fiókhoz tartozó minden kapcsolat',
        'related_contacts' => 'Csak az elsődleges kapcsolattartók és az ügyhöz tartozó kapcsolattartók',
    ],
    'EMAIL_VISIBILITY_OPTIONS' => [
        'related_contacts' => 'Csak a résztvevő kapcsolattartók',
        'all' => 'Minden kapcsolattartó, aki látja az esetet',
    ],
    'MESSAGE_VISIBILITY_OPTIONS' => [
        'related_contacts' => 'Csak a résztvevő kapcsolattartók',
        'all' => 'Minden kapcsolattartó, aki látja az esetet',
    ],


'LBL_PORTAL'=>'Portál',
'LBL_PORTAL_LAYOUTS'=>'Portál elrendezések',
'LBL_SYNCP_WELCOME'=>'Kérem, adja meg a portál URL címét, amelyet frissíteni szeretne!',
'LBL_SP_UPLOADSTYLE'=>'Válassza ki a feltöltendő stíluslapot a számítógépéről!<br />Szinkronizálás után a Sugar Portál már az új stíluslappal fog megjelenni.',
'LBL_SP_UPLOADED'=> 'Feltöltött',
'ERROR_SP_UPLOADED'=>'Kérjük, ellenőrizze, hogy helyes stíluslapot töltött-e fel!',
'LBL_SP_PREVIEW'=>'Ez egy előnézet, amely a Sugar Portál megjelenését mutatja a stíluslap alkalmazása után.',
'LBL_PORTALSITE'=>'Sugar Portál URL:',
'LBL_PORTAL_GO'=>'Tovább',
'LBL_UP_STYLE_SHEET'=>'Stíluslap feltöltése',
'LBL_QUESTION_SUGAR_PORTAL' => 'Válassza ki a szerkesztendő Sugar Portál elrendezést!',
'LBL_QUESTION_PORTAL' => 'Válassza ki a szerkesztendő portál elrendezést!',
'LBL_SUGAR_PORTAL'=>'Sugar Portál szerkesztő',
'LBL_USER_SELECT' => '-- Kiválasztás --',

//PORTAL PREVIEW
'LBL_CASES'=>'Esetek',
'LBL_NEWSLETTERS'=>'Hírlevelek',
'LBL_BUG_TRACKER'=>'Hibakövető',
'LBL_MY_ACCOUNT'=>'Kliensem',
'LBL_LOGOUT'=>'Kilépés',
'LBL_CREATE_NEW'=>'Új létrehozás',
'LBL_LOW'=>'Alacsony',
'LBL_MEDIUM'=>'Közepes',
'LBL_HIGH'=>'Magas',
'LBL_NUMBER'=>'Szám:',
'LBL_PRIORITY'=>'Prioritás:',
'LBL_SUBJECT'=>'Tárgy',

//PACKAGE AND MODULE BUILDER
'LBL_PACKAGE_NAME'=>'Csomag neve:',
'LBL_MODULE_NAME'=>'Modul neve:',
'LBL_MODULE_NAME_SINGULAR' => 'Egyedülálló modul neve:',
'LBL_AUTHOR'=>'Szerző:',
'LBL_DESCRIPTION'=>'Leírás:',
'LBL_KEY'=>'Kulcs:',
'LBL_ADD_README'=>'Súgó',
'LBL_MODULES'=>'Modulok:',
'LBL_LAST_MODIFIED'=>'Utolsó módosítás:',
'LBL_NEW_MODULE'=>'Új modul',
'LBL_LABEL'=>'Címke',
'LBL_LABEL_TITLE'=>'Címke',
'LBL_SINGULAR_LABEL' => 'Egyesszám',
'LBL_WIDTH'=>'Szélesség',
'LBL_PACKAGE'=>'Csomag:',
'LBL_TYPE'=>'Típus:',
'LBL_TEAM_SECURITY'=>'Csoport biztonság',
'LBL_ASSIGNABLE'=>'Hozzárendelhető',
'LBL_PERSON'=>'Személy',
'LBL_COMPANY'=>'Cég',
'LBL_ISSUE'=>'Eset',
'LBL_SALE'=>'Értékesítés',
'LBL_FILE'=>'Fájl',
'LBL_NAV_TAB'=>'Navigációs fül',
'LBL_CREATE'=>'Új létrehozása',
'LBL_LIST'=>'Lista',
'LBL_VIEW'=>'Megtekintés',
'LBL_LIST_VIEW'=>'Lista nézet',
'LBL_HISTORY'=>'Előzmények megtekintése',
'LBL_RESTORE_DEFAULT_LAYOUT'=>'Alapértelmezett elrendezés visszaállítása',
'LBL_ACTIVITIES'=>'Tevékenységek',
'LBL_SEARCH'=>'Keresés',
'LBL_NEW'=>'Új',
'LBL_TYPE_BASIC'=>'alap',
'LBL_TYPE_COMPANY'=>'cég',
'LBL_TYPE_PERSON'=>'személy',
'LBL_TYPE_ISSUE'=>'eset',
'LBL_TYPE_SALE'=>'eladás',
'LBL_TYPE_FILE'=>'fájl',
'LBL_RSUB'=>'Ez az alpanel lesz látható az Ön moduljában',
'LBL_MSUB'=>'Ez az az alpanel, amelyet az Ön modulja szolgáltat a kapcsolódó modul megjelenítőjén',
'LBL_MB_IMPORTABLE'=>'Import Engedélyezése',

// VISIBILITY EDITOR
'LBL_VE_VISIBLE'=>'látható',
'LBL_VE_HIDDEN'=>'rejtett',
'LBL_PACKAGE_WAS_DELETED'=>'[[package]] törölve',

//EXPORT CUSTOMS
'LBL_EC_TITLE'=>'Testre szabott elemek exportálása',
'LBL_EC_NAME'=>'Csomag neve:',
'LBL_EC_AUTHOR'=>'Szerző:',
'LBL_EC_DESCRIPTION'=>'Leírás:',
'LBL_EC_KEY'=>'Kulcs:',
'LBL_EC_CHECKERROR'=>'Kérem, válasszon egy modult!',
'LBL_EC_CUSTOMFIELD'=>'egyedi mező(k)',
'LBL_EC_CUSTOMLAYOUT'=>'egyedi elrendezés(ek)',
'LBL_EC_CUSTOMDROPDOWN' => 'Testreszabott legördülő menű(k)',
'LBL_EC_NOCUSTOM'=>'Egyetlen modul sem lett testre szabva.',
'LBL_EC_EXPORTBTN'=>'Export',
'LBL_MODULE_DEPLOYED' => 'A modul bevezetésre került.',
'LBL_UNDEFINED' => 'nem definiált',
'LBL_EC_CUSTOMLABEL'=>'személyre szabott címkék',

//AJAX STATUS
'LBL_AJAX_FAILED_DATA' => 'Nem sikerült lekérni az adatokat',
'LBL_AJAX_TIME_DEPENDENT' => 'Egy időfüggő tevékenység folyamatban van. Kérem, várjon és próbálkozzon újra egy pár másodperc múlva!',
'LBL_AJAX_LOADING' => 'Betöltés...',
'LBL_AJAX_DELETING' => 'Törlés...',
'LBL_AJAX_BUILDPROGRESS' => 'Létrehozás folyamatban...',
'LBL_AJAX_DEPLOYPROGRESS' => 'Alkalmazás folyamatban...',
'LBL_AJAX_FIELD_EXISTS' =>'Már létezik ilyen nevű mező. Kérem, adjon meg egy új nevet!',
//JS
'LBL_JS_REMOVE_PACKAGE' => 'Biztosan el szeretné távolítani ezt a csomagot? A művelet végleg törli a csomaghoz társított összes fájlt.',
'LBL_JS_REMOVE_MODULE' => 'Biztosan el szeretné távolítani ezt a modult? A művelet végleg törli a modulhoz társított összes fájlt.',
'LBL_JS_DEPLOY_PACKAGE' => 'Minden Stúdióból származó testreszabás felülíródik a modul frissítésénél. Biztos benne, hogy folytatni szeretné?',

'LBL_DEPLOY_IN_PROGRESS' => 'Csomag telepítése',
'LBL_JS_VALIDATE_NAME'=>'Név - csak alfanumerikus karakterek, szóköz nélkül, szókezdő betűvel',
'LBL_JS_VALIDATE_PACKAGE_KEY'=>'A csomagkulcs már létezik',
'LBL_JS_VALIDATE_PACKAGE_NAME'=>'Csomagnév már létezik',
'LBL_JS_PACKAGE_NAME'=>'Csomag neve - Mindenképp betűvel kell kezdődnie, és csak betűket, számokat és alulvonást tartalmazhat. Ne használjon szüneteket vagy speciális karaktereket.',
'LBL_JS_VALIDATE_KEY_WITH_SPACE'=>'Kulcs - alfanumerikusnak kell lennie és betűvel kell kezdődnie.',
'LBL_JS_VALIDATE_KEY'=>'Kulcs - csak alfanumerikus karakterek, szóköz nélkül, szókezdő betűvel',
'LBL_JS_VALIDATE_LABEL'=>'Kérem, adja meg a címkét, amelyet ez a modul megjelenő névként fog használni!',
'LBL_JS_VALIDATE_TYPE'=>'Kérem, válassza ki, milyen típusú modult kíván építeni a fenti listából!',
'LBL_JS_VALIDATE_REL_NAME'=>'Név - csak alfanumerikus karakterek, szóköz nélkül',
'LBL_JS_VALIDATE_REL_LABEL'=>'Címke - Kérjük adja meg az alpanel címkéjét',

// Dropdown lists
'LBL_JS_DELETE_REQUIRED_DDL_ITEM' => 'Biztos benne, hogy törölni kívánja ezt a kötelező legördülő lista elemet? Ez megzavarhatja az alkalmazás működését.',

// Specific dropdown list should be:
// LBL_JS_DELETE_REQUIRED_DDL_ITEM_(UPPERCASE_DDL_NAME)
'LBL_JS_DELETE_REQUIRED_DDL_ITEM_SALES_STAGE_DOM' => 'Biztos benne, hogy törölni kívánja ezt a legördülő lista elemet? A "Lezárt, megnyert" és "Lezárt, elvesztett" opciók törlése kihatással van az Előrejelzések modul helyes működésére.',

// Specific list items should be:
// LBL_JS_DELETE_REQUIRED_DDL_ITEM_(UPPERCASE_ITEM_NAME)
// Item name should have all special characters removed and spaces converted to
// underscores
'LBL_JS_DELETE_REQUIRED_DDL_ITEM_NEW' => 'Valóban törölni kívánja az "új" értékesítési státuszt? A státusz törlése kihatással van a Lehetőségek modul bevételi sor tételeire.',
'LBL_JS_DELETE_REQUIRED_DDL_ITEM_IN_PROGRESS' => 'Valóban törölni kívánja a "folyamatban" értékesítési státuszt? A státusz törlése kihatással van a Lehetőségek modul bevételi sor tételeire.',
'LBL_JS_DELETE_REQUIRED_DDL_ITEM_CLOSED_WON' => 'Biztos benne, hogy törölni kívánja a "Lezárt, megnyert" értékesítési fázist? Az opció törlése kihatással van az Előrejelzések modul helyes működésére.',
'LBL_JS_DELETE_REQUIRED_DDL_ITEM_CLOSED_LOST' => 'Biztos benne, hogy törölni kívánja a "Lezárt, elvesztett" értékesítési fázist? Az opció törlése kihatással van az Előrejelzések modul helyes működésére.',

//CONFIRM
'LBL_CONFIRM_FIELD_DELETE'=>'Deleting this custom field will delete both the custom field and all the data related to the custom field in the database. The field will be no longer appear in any module layouts.'
        . ' If the field is involved in a formula to calculate values for any fields, the formula will no longer work.'
        . '\n\nThe field will no longer be available to use in Reports; this change will be in effect after logging out and logging back in to the application. Any reports containing the field will need to be updated in order to be able to be run.'
        . '\n\nDo you wish to continue?',
'LBL_CONFIRM_RELATIONSHIP_DELETE'=>'Biztosan törölni akarja ezt a kapcsolatot?',
'LBL_CONFIRM_RELATIONSHIP_DEPLOY'=>'A kapcsolat ezzel állandóvá válik. Biztos benne, hogy állandósítja a kapcsolatot?',
'LBL_CONFIRM_DONT_SAVE' => 'Változások történtek, mióta utoljára mentett. Szeretne menteni?',
'LBL_CONFIRM_DONT_SAVE_TITLE' => 'Menti a változtatásokat?',
'LBL_CONFIRM_LOWER_LENGTH' => 'Az adatok visszavonhatatlanul sérülhetnek. Biztos, hogy folytatni szeretné?',

//POPUP HELP
'LBL_POPHELP_FIELD_DATA_TYPE'=>'Válassza ki, hogy milyen típusú adatokat szeretne majd ebbe a mezőbe bevinni!',
'LBL_POPHELP_FTS_FIELD_CONFIG' => 'Konfigurálja a mezőt, hogy a szöveg teljes mértékben kereshető legyen.',
'LBL_POPHELP_FTS_FIELD_BOOST' => 'Erősítés az a folyamat, amelynek során javítják egy rekord mezőinek relevanciáját.<br />Kereséskor az erősebb mezők nagyobb súlyt kapnak. Kereéskor az erősebb mezőket tartalmazó, megfelelő rekordok előbb jelennek meg a keresési listán.<br />Az alapértelmezett érték 1.0, ez a semleges erősítést jelöli. Pozitív erősítéshez bármilyen, 1-nél nagyobb lebegési érték elfogadható. Negatív erősítéshez használjon 1-nél gyengébb értékeket. Ha az érték például 1,35, ez 135%-kal erősíti pozitívan a mezőt. Ha az érték 0,60, ez gyengíti a mezőt. <br />Ne feledje, hogy a korábbi verziókban a teljes szövegkeresés újraindexelésére volt szükség. Ez többé már nem szükséges.',
'LBL_POPHELP_IMPORTABLE'=>'Igen: A mező adatbeviteli mező.<br />Nem: A mező nem adatbeviteli mező.<br />Szükséges: A mező értékének megadása kötelező.',
'LBL_POPHELP_PII'=>'A mezőt automatikusan bejelöli a rendszer auditra, és elérhetővé válik a Személyes adatok nézetben.<br>A személyes adatok mezők véglegesen törölhetők is, ha a rekord adatvédelmi törlési kéréshez kapcsolódik.<br>A törlés az Adatvédelem modulban történik, a művelet végrehajtása pedig rendszergazdák vagy adatvédelmi menedzser szerepkörrel rendelkező felhasználók számára lehetséges.',
'LBL_POPHELP_IMAGE_WIDTH'=>'Írja be a szélességet, képpontban mérve.<br />A feltöltött kép ehhez a szélességhez lesz igazítva.',
'LBL_POPHELP_IMAGE_HEIGHT'=>'Írja be a magasságot, képpontban mérve.<br />A feltöltött kép ehhez a magassághoz lesz igazítva.',
'LBL_POPHELP_DUPLICATE_MERGE'=>'<b>Enabled</b>: The field will appear in the Merge Duplicates feature, but will not be available to use for the filter conditions in the Find Duplicates feature.<br><b>Disabled</b>: The field will not appear in the Merge Duplicates feature, and will not be available to use for the filter conditions in the Find Duplicates feature.'
. '<br><b>In Filter</b>: The field will appear in the Merge Duplicates feature, and will also be available in the Find Duplicates feature.<br><b>Filter Only</b>: The field will not appear in the Merge Duplicates feature, but will be available in the Find Duplicates feature.<br><b>Default Selected Filter</b>: The field will be used for a filter condition by default in the Find Duplicates page, and will also appear in the Merge Duplicates feature.'
,
'LBL_POPHELP_CALCULATED'=>"Create a formula to determine the value in this field.<br>"
   . "Workflow definitions containing an action that are set to update this field will no longer execute the action.<br>"
   . "Fields using formulas will not be calculated in real-time in "
   . "the Sugar Self-Service Portal or "
   . "Mobile EditView layouts.",

'LBL_POPHELP_DEPENDENT'=>"Create a formula to determine whether this field is visible in layouts.<br/>"
        . "Dependent fields will follow the dependency formula in the browser-based mobile view, <br/>"
        . "but will not follow the formula in the native applications, such as Sugar Mobile for iPhone. <br/>"
        . "They will not follow the formula in the Sugar Self-Service Portal.",
'LBL_POPHELP_REQUIRED'=>"Hozzon létre képletet annak meghatározására, hogy a mező kitöltése kötelező-e az elrendezésekben.<br/>"
    . "A kötelező mezők követik a képletet a böngészőalapú mobilnézetben, <br/>"
    . "de nem követik a képletet a natív alkalmazásokban, így például a Sugar Mobile for iPhone alkalmazásban. <br/>"
    . "Nem követik a képletet a Sugar Önkiszolgáló Portálban.",
'LBL_POPHELP_READONLY'=>"Hozzon létre képletet annak meghatározására, hogy a mező csak olvasható-e az elrendezésekben.<br/>"
        . "A csak olvasható mezők követik a képletet a böngészőalapú mobilnézetben, <br/>"
        . "de nem követik a képletet a natív alkalmazásokban, így például a Sugar Mobile for iPhone alkalmazásban. <br/>"
        . "Nem követik a képletet a Sugar Önkiszolgáló Portálban.",
'LBL_POPHELP_GLOBAL_SEARCH'=>'Válassza ki ennek a mezőnek a használatát, ha rekordokat keres a Globális kereső használatával ebben a modulban.',
//Revert Module labels
'LBL_RESET' => 'Visszaállít',
'LBL_RESET_MODULE' => 'Modul visszaállítása',
'LBL_REMOVE_CUSTOM' => 'Testreszabás eltávolítása',
'LBL_CLEAR_RELATIONSHIPS' => 'Kapcsolatok törlése',
'LBL_RESET_LABELS' => 'Címkék visszaállítása',
'LBL_RESET_LAYOUTS' => 'Elrendezések visszaállítása',
'LBL_REMOVE_FIELDS' => 'Egyedi mezők törlése',
'LBL_CLEAR_EXTENSIONS' => 'Kiterjesztések törlése',

'LBL_HISTORY_TIMESTAMP' => 'Időbélyeg',
'LBL_HISTORY_TITLE' => 'előzmények',

'fieldTypes' => array(
                'varchar'=>'Szövegmező',
                'int'=>'Egész szám',
                'float'=>'Lebegőpontos',
                'bool'=>'Jelölő négyzet',
                'enum'=>'Legördülő',
                'multienum' => 'MultiSelect',
                'date'=>'Dátum',
                'phone' => 'Telefon',
                'currency' => 'Pénznem',
                'html' => 'HTML',
                'radioenum' => 'Rádiógomb',
                'relate' => 'Összekapcsol',
                'address' => 'Cím',
                'text' => 'Szövegterület',
                'url' => 'URL',
                'iframe' => 'IFrame',
                'image' => 'kép',
                'encrypt'=>'Titkosított',
                'datetimecombo' =>'Dátum-Idő',
                'decimal'=>'Decimális',
                'autoincrement' => 'Automatikus növelés',
                'actionbutton' => 'AkcióGomb',
),
'labelTypes' => array(
    "" => "gyakran használt címkék",
    "all" => "minden címke",
),

'parent' => 'Rugalmas társítás',

'LBL_ILLEGAL_FIELD_VALUE' =>"Legördülő kulcs nem tartalmazhat idézőjelet.",
'LBL_CONFIRM_SAVE_DROPDOWN' =>"Ön törölni kívánja ezt a tételt a legördülő listából. A tétel minden legördülő listából törlődik és nem lesz elérhető a legördülő mezőkben sem. Biztos benne, hogy folytatja?",
'LBL_POPHELP_VALIDATE_US_PHONE'=>"Select to validate this field for the entry of a 10-digit<br>" .
                                 "phone number, with allowance for the country code 1, and<br>" .
                                 "to apply a U.S. format to the phone number when the record<br>" .
                                 "is saved. The following format will be applied: (xxx) xxx-xxxx.",
'LBL_ALL_MODULES'=>'Minden modul',
'LBL_RELATED_FIELD_ID_NAME_LABEL' => '{0} (kapcsolódó {1} azon.)',
'LBL_HEADER_COPY_FROM_LAYOUT' => 'Másolás az elrendezésből',
'LBL_RELATIONSHIP_TYPE' => 'Kapcsolat',

// Edit Labels
'LBL_COMPARISON_LANGUAGE' => 'Összehasonlítás nyelv',
'LBL_LABEL_NOT_TRANSLATED' => 'Elképzelhető, hogy ez a címke nincs lefordítva',
);
