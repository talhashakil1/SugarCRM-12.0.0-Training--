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
    'LBL_LOADING' => 'Ielāde' /*for 508 compliance fix*/,
    'LBL_HIDEOPTIONS' => 'Paslēpt iespējas' /*for 508 compliance fix*/,
    'LBL_DELETE' => 'Dzēst' /*for 508 compliance fix*/,
    'LBL_POWERED_BY_SUGAR' => 'Nodrošina SugarCRM' /*for 508 compliance fix*/,
    'LBL_ROLE' => 'Loma',
    'LBL_BASE_LAYOUT' => 'Pamata izkārtojums',
    'LBL_FIELD_NAME' => 'Lauka nosaukums',
    'LBL_FIELD_VALUE' => 'Vērtība',
    'LBL_LAYOUT_DETERMINED_BY' => 'Izkārtojumu noteica:',
    'layoutDeterminedBy' => [
        'std' => 'Standarta izkārtojums',
        'role' => 'Loma',
        'dropdown' => 'Nolaižamais lauks',
    ],
    'LBL_DELETE_CUSTOM_LAYOUTS' => 'Visi pielāgotie izkārtojumi tiks noņemti. Vai tiešām vēlaties mainīt pašreizējās izkārtojuma definīcijas?',
'help'=>array(
    'package'=>array(
            'create'=>'Ievadi  <b>Nosaukumu</b> priekš pakotnes.  Ievadītajam nosaukumam jābūt burtiem un cipariem un bez atstarpēm (Piemērs: HR_Management)<br/><br/> Tu vari ievadīt  pakotnes <b>Autora</b> and <b>Apraksta</b> informāciju. <br/><br/>Klikšķini <b>Saglabāt</b> lai izveidotu pakotni.',
            'modify'=>'<b>Pakotnes</b> īpašības un iespējamās darbības parādās šeit.<br><br>Tu vari modificēt pakotnes <b>Nosaukumu</b>, <b>Autoru</b> un <b>Aprakstu</b>,  kā arī aplūkot un pielāgot visus moduļus, kuri ir iekļauti pakotnē.<br><br>Klikšķini<b>Jauns modulis</b> lai pakotnē izveidotu jaunu moduli.<br><br>Ja pakotne satur vismaz vienu moduli tad, tu vari  <b>Publicēt</b> un <b>Izvietot</b> pakotni, as kā arī <b>Eksportēt</b> izmaiņas kuras veiktas pakotnē.',
            'name'=>'Šis ir tekošās pakotnes <b>Nosaukums</b> . <br/><br/>Ievadītajam nosaukumam jābūt burtiem un cipariem un bez atstarpēm (Piemērs: HR_Management)',
            'author'=>'Šis ir <b>Autors</b>, kurš parādās instalēšanas laikā, kā entītijas, kura izveidoja šo pakotni nosaukums.<br><br>Autors var būt persona vai uzņēmums.',
            'description'=>'Šis ir pakotnes<b>Apraksts</b>, kurš tiks izvadīts instalācijas laikā.',
            'publishbtn'=>'Klikšķini <b>Publicēt</b>, lai saglabātu visus ievadītos datus un izveidotu .zip failu, kas ir instalējama pakotnes versija.<br><br>Imanto <b>Moduļu ielādētāju</b>, lai augšupielādētu .zip failu un instalētu pakotni.',
            'deploybtn'=>'Klikšķini <b>Izvietot</b>, lai saglabātu visus ievadītos datus un instalētu pakotni, iekļaujot visus moduļus.',
            'duplicatebtn'=>'Klikšķini <b>Dublicēt</b> lai kopētu pakotnes saturu uz jaunā paketē un šo saturu attēlotu jaunajā pakotnē <br/><br/>Jaunajai pakotnei nosaukums tiks izveidots automātiski, pievienojot avota pakotnes nosaukuma beigās skaitli. Tu vari pārsaukt pakotni ievadot jaunu <b>Nosaukumu</b> un klikšķinot <b>Saglabāt</b>.',
            'exportbtn'=>'Klikšķini <b>Eksportēt</b>, lai izveidotu .zip failu ar pakotnē veiktajiem pielāgojumiem.<br><br> ģenerētais fails nav pakotnes instalējama versija.<br><br>Lieto <b>Moduļu ielādētāju</b> lai importētu pakotni un iegūtu pakotni, ar pielāgojumiem, kuri ir redzami Moduļu veidotājā.',
            'deletebtn'=>'Klikšķini <b>Dzēst</b>, lai dzēstu šo pakotni un visus ar to saistītos failus.',
            'savebtn'=>'Klikšķini <b>Saglabāt</b>, lai saglabātu visus ievadītos datus saistībā ar šo pakotni.',
            'existing_module'=>'Klikšķini uz <b>Moduļa</b> ikonas, lai rediģētu un pielāgotu laukus, relācijas un izkārtojumus saistībā ar šo moduli.',
            'new_module'=>'Klikšķini <b>Jauns modulis</b>, lai izveidotu jaunu moduli šajā pakotnē.',
            'key'=>'Šo piecu, burtciparu <b>Atslēga</b> tiks izmantota kā prefikss visiem katalogiem, klašu nosaukumiem un datubāzes tabulām visiem moduļiem šajā pakotnē.<br><br>Atslēga tiek izmantota lai nodrošinātu tabulu nosaukumu unikalitāti.',
            'readme'=>'Klikšķini lai pievienotu <b>Lasimani</b> tekstu šai pakotnei.<br><br>Lasimani būs pieejams instalācijas laikā.',

),
    'main'=>array(

    ),
    'module'=>array(
        'create'=>'Ievadi moduļa <b>Nosaukumu</b>. Jūsu ievadītā <b>Etiķete</b>parādīsies navigācijas cilnē. <br/><br/>Izvēlieties attēlot navigācijas cilni atzīmējot izvēles rūtiņu - <b>Navigācijas cilne</b> .<br/><br/>Atzīmējiet<b>Darbagrupu drošības</b> izvēles rūtiņu lai moduļa ierakstos būtu pieejams Darba grupu  izvēles lauks. <br/><br/>Tālāk izvēlies moduļa tipu . <br/><br/>Izvēlies veidnes tipu. Katra veidne satur noteiktu lauku kopu, kā arī iepriekš definētus izkārtojumus, kurus izmantot kā pamatu Jūsu modulim. <br/><br/>Klikšķini <b>Saglabāt</b>, lai izveidotu moduli.',
        'modify'=>'Tu vari izmainīt moduļa īpašības vai pielāgot moduļa <b>Laukus</b>, <b>Relācijas</b> un <b>Izkārtojumus</b>.',
        'importable'=>'Atzīmējot izvēles rūtiņu <b>Importējams</b>, šim modulim tiks aktivizēta ierakstu importēšana.<br><br>Saite uz Importēšanas vedni parādīsies moduļa Īsceļu panelī . Importēšanas vednis atvieglo datu importēšanu pielāgotajā modulī no ārējiem datu avotiem.',
        'team_security'=>'Atzīmējot <b>Darba grupu drošības</b> izvēles rūtiņu, šim modulim tiks aktivizēta darba grupu drošība .  <br/><br/>Ja ir aktivizēta darba grupu drošība, tad moduļa ierakstiem parādīsies Darba grupas izvēles lauks.',
        'reportable'=>'Atzīmējot šo izvēli šis modulis būs pieejams veidojot atskaites.',
        'assignable'=>'Atzīmējot šo rūtiņu, šī moduļa ierakstus varēs piešķirt izvēlētam lietotājam.',
        'has_tab'=>'Atzīmējot <b>Navigācijas cilne</b>, šim modulim tiks izveidota navigācijas cilne.',
        'acl'=>'Atzīmējot šo izvēles rūtiņu, tiks aktivizēta pieejas kontrole, iekļaujot lauka līmeņa drošību. šim modulim.',
        'studio'=>'Atzīmējot šo izvēles rūtiņu, administratori varēs pielāgot šo moduli izmantojot Studio rīku.',
        'audit'=>'Atzīmējot šo rūtiņu, tiks aktivizēta moduļa auditēšana. Izmaiņas noteiktos laukos tiks saglabātas un administratori varēs apskatīt izmaiņu vēsturi.',
        'viewfieldsbtn'=>'Klikšķini <b>Aplūkot laukus</b>, lai aplūkotu moduļa laukus un izveidotu un rediģētu pielāgotos laukus.',
        'viewrelsbtn'=>'Klikšķini <b>Aplūkot relācijas</b> , lai aplūkotu šim modulim piesaistītās relācijas un izveidotu jaunas relācijas.',
        'viewlayoutsbtn'=>'Klikšķini <b>Aplūkot izkārtojumus</b> lai aplūkotu moduļa izkārtojumus un izkārtojumos pielāgotu lauku kārtību.',
        'viewmobilelayoutsbtn' => 'Klikšķiniet <b>Skatīt mobilos izkārtojumu</b> lai redzētu moduļa mobilos izkārtojumus un rediģētu lauku secību izkārtojumos.',
        'duplicatebtn'=>'Klikšķini <b>Dublicēt</b> lai kopētu moduļa īpašības uz jaunu moduli un attēlotu tās jaunajā modulī. <br/><br/>Jaunajam modulim nosaukums tiks izveidots automātiski, pievienojot avota moduļa nosaukuma beigās skaitli.',
        'deletebtn'=>'Klikšķini <b>Dzēst</b> lai dzēstu šo moduli.',
        'name'=>'Šis ir patreizējā moduļa <b>Nosaukums</b>.<br/><br/>Nosaukumam jābūt burtciparu un jāsākas ar burtu un tas nedrīkst saturēt atstarpes. (Piemēram: HR_Management)',
        'label'=>'Šī <b>Etiķete</b> parādīsies moduļa navigācijas cilnē.',
        'savebtn'=>'Klikšķini  <b>Saglabāt</b>,lai saglabātu visus datus saistībā ar šo moduli.',
        'type_basic'=>'<b>Pamata</b>veidne nodrošina pamata laukus, tādus kā Vārds, Piesaistīts, Darba grupa, Izveidošanas datums un Apraksts.',
        'type_company'=>'<b>Uzņēmuma</b> veidnes tips nodrošina organizācijai raksturīgus laukus, tādus kā Uzņēmuma nosaukums, Nozare un Norēķinu adrese.<br/><br/>Lieto šo veidni, lai veidotu standarta Uzņēmuma modulim līdzīgus moduļus.',
        'type_issue'=>'<b>Problēmu</b> veidnes tips nodrošina pieteikumiem un kļūdām raksturīgus laukus, tādus kā Numurs, Statuss, Prioritāte un Apraksts.<br/><br/>Lieto šo veidni, lai izveidotu standarta Pieteikumu un Kļūdu sekotāja moduļiem līdzīgus moduļus.',
        'type_person'=>'<b>Personas</b> veidnes tips nodrošina Personai raksturīgus laukus, tādus kā Uzruna, amats, Vārds, Adrese un  Tālruņa numurs.<br/><br/>Lieto šo veidni, lai izveidotu standarta Kontaktu un Interesentu moduļiem līdzīgus moduļus.',
        'type_sale'=>'<b>Pārdošanas</b> veidnes tips nodrošina iespējām raksturīgus laukus, tādus kā Interesenta avots, Stadija, Apjoms un Varbūtība. <br/><br/>Lieto šo veidni, lai izveidotu standarta Iespēju modulim līdzīgus moduļus.',
        'type_file'=>'<b>Faila</b> veidne nodrošina Dokumentiem raksturīgus laukus, tādus kā Faila nosaukums, Dokumenta tips un Publicēšanas datums.<br><br>Lieto šo veidni, lai veidotu standarta dokumentu modulim līdzīgus moduļus.',

    ),
    'dropdowns'=>array(
        'default' => 'Visi lietojumprogrammas <b>Nolaižamie saraksti</b> ir uzskaitīti šeit.<br><br>Nolaižamie saraksti var tikt izmantoti nolaižamo saraksta izvēlnes laukiem jebkurā modulī<br><br>Lai veiktu izmaiņas esošajos nolaižamajos sarakstos, klikšķiniet uz nolaižamā saraksta nosaukuma.<br><br>Klikšķiniet <b>Pievienot nolaižamo sarakstu</b>, lai izveidotu jaunu nolaižamo sarakstu.',
        'editdropdown'=>'Nolaižamos sarakstus var izmantot standarta un pielāgotajos laukos jebkurā modulī.<br><br>Ievadiet nolaižamā saraksta<b>Nosaukumu</b>.<br><br>Ja lietojumprogrammā ir uzinstalēta kāda valodas pakotne, variet izvēlēties <b>valodu</b> lietošanai saraksta elementos. <br><br>Laukā<b>Vienuma nosaukums</b>, norādiet nolaižamā saraksta izvēles nosaukumu.  Šis nosaukums neparādīsies lietotājiem redzamā nolaižamajās sarakstā.<br><br>Laukā <b>Etiķete</b>, ievadiet lietotājiem redzamo etiķetes tekstu.<br><br>Pēc vienuma nosaukuma un etiķetes ievades, klikšķiniet <b>Pievienot</b>, lai pievienotu elementu nolaižamajam sarakstam.<br><br>Lai pārkārtotu saraksta elementus, velciet un nometiet tos vajadzīgajā pozīcijā.<br><br>Lai rediģētu attēlošanas etiķeti, klikšķiniet uz <b>Rediģēšanas ikonas</b>, un ievadiet jaunu etiķeti. Lai dzēstu elementu no nolaižamā saraksta, klikšķiniet uz <b>Dzēšanas ikonas</b>.<br><br>Lai atsauktu etiķetē veiktās izmaiņas, klikšķiniet <b>Atsaukt</b>.  Lai atatsauktu atsauktās izmaiņas, klikšķiniet <b>Atatsaukt</b>.<br><br>Klikšķiniet<b>Saglabāt</b>, lai saglabātu nolaižamo sarakstu..',

    ),
    'subPanelEditor'=>array(
        'modify'	=> 'All of the fields that can be displayed in the <b>Subpanel</b> appear here.<br><br>The <b>Default</b> column contains the fields that are displayed in the Subpanel.<br/><br/>The <b>Hidden</b> column contains fields that can be added to the Default column.'
    . '<br/><br/><!--not_in_theme!--><img src="themes/default/images/SugarLogic/icon_dependent.png"/>Indicates a Dependent field that may or may not be visible based on the value of a formula.<br/><!--not_in_theme!--><img src="themes/default/images/SugarLogic/icon_calculated.png" /> Indicates a Calculated field whose value will be automatically determined based on a formula.'
    ,
        'savebtn'	=> 'Klikšķinot <b>Saglabāt un izvietot</b> tiks saglabātas un aktivizētas visas izmaiņas.',
        'historyBtn'=> 'Klikšķini <b>Aplūkot vēsturi</b>, lai aplūkotu vēsturi un atjaunotu iepriekš saglabātus izkārtojumus no vēstures.',
        'historyRestoreDefaultLayout'=> 'Uzklikšķināt <b>Atjaunot noklusēto izkārtojumu</b>, lai atjaunotu skatījumu tā oriģinālajā izkārtojumā.',
        'Hidden' 	=> '<b>Slēptie</b> lauki neparādās apakšpanelī.',
        'Default'	=> 'Noklusētie lauki parādās apakšpanelī.',

    ),
    'listViewEditor'=>array(
        'modify'	=> 'All of the fields that can be displayed in the <b>ListView</b> appear here.<br><br>The <b>Default</b> column contains the fields that are displayed in the ListView by default.<br/><br/>The <b>Available</b> column contains fields that a user can select in the Search to create a custom ListView. <br/><br/>The <b>Hidden</b> column contains fields that can be added to the Default or Available column.'
    . '<br/><br/><!--not_in_theme!--><img src="themes/default/images/SugarLogic/icon_dependent.png"/>Indicates a Dependent field that may or may not be visible based on the value of a formula.<br/><!--not_in_theme!--><img src="themes/default/images/SugarLogic/icon_calculated.png" /> Indicates a Calculated field whose value will be automatically determined based on a formula.'
    ,
        'savebtn'	=> 'Klikšķinot <b>Saglabāt un izvietot</b> tiks saglabātas un aktivizētas visas izmaiņas.',
        'historyBtn'=> 'Klikšķini <b>Aplūkot vēsturi</b>, lai aplūkotu vēsturi un atjaunotu iepriekš saglabātus izkārtojumus no vēstures.<br><br><b>Atjaunošana</b> caur <b>Aplūkot vēsturi</b> atjauno lauku novietojumu tādu kā iepriekš saglabātajos izkārtojumos. Lai izmainītu lauku etiķetes, klikšķini uz ikonas Rediģēt, blakus katram laukam.',
        'historyRestoreDefaultLayout'=> 'Uzklikšķināt <b>Atjaunot noklusēto izkārtojumu</b>, lai atjaunotu skatījumu tā oriģinālajā izkārtojumā.<br><br><b>Atjaunot noklusēto izkārtojumu</b> atjauno tikai lauku izvietojumu oriģinālajā izkārtojumā. Lai mainītu lauku etiķetes, uzklikšķiniet uz Rediģēšanas ikonas, kas atrodas blakus katram laukam.',
        'Hidden' 	=> '<b>Slēptie</b> lauki pašreiz nav lietotājiem pieejami aplūkošanai Saraksta skatījumā.',
        'Available' => 'Pieejamie lauki pēc noklusējuma nav redzami, bet lietotāji tos var pievienot Saraksta skatījumam.',
        'Default'	=> '<b>Noklusētie</b> lauki parādās Saraksta skatījumos, kurus lietotāji nav pielāgojuši.'
    ),
    'popupListViewEditor'=>array(
        'modify'	=> 'All of the fields that can be displayed in the <b>ListView</b> appear here.<br><br>The <b>Default</b> column contains the fields that are displayed in the ListView by default.<br/><br/>The <b>Hidden</b> column contains fields that can be added to the Default or Available column.'
    . '<br/><br/><!--not_in_theme!--><img src="themes/default/images/SugarLogic/icon_dependent.png"/>Indicates a Dependent field that may or may not be visible based on the value of a formula.<br/><!--not_in_theme!--><img src="themes/default/images/SugarLogic/icon_calculated.png" /> Indicates a Calculated field whose value will be automatically determined based on a formula.'
    ,
        'savebtn'	=> 'Klikšķinot <b>Saglabāt un izvietot</b> tiks saglabātas un aktivizētas visas izmaiņas.',
        'historyBtn'=> 'Klikšķini <b>Aplūkot vēsturi</b>, lai aplūkotu vēsturi un atjaunotu iepriekš saglabātus izkārtojumus no vēstures.<br><br><b>Atjaunošana</b> caur <b>Aplūkot vēsturi</b> atjauno lauku novietojumu tādu kā iepriekš saglabātajos izkārtojumos. Lai izmainītu lauku etiķetes, klikšķini uz ikonas Rediģēt, blakus katram laukam.',
        'historyRestoreDefaultLayout'=> 'Uzklikšķināt <b>Atjaunot noklusēto izkārtojumu</b>, lai atjaunotu skatījumu tā oriģinālajā izkārtojumā.<br><br><b>Atjaunot noklusēto izkārtojumu</b> atjauno tikai lauku izvietojumu oriģinālajā izkārtojumā. Lai mainītu lauku etiķetes, uzklikšķiniet uz Rediģēšanas ikonas, kas atrodas blakus katram laukam.',
        'Hidden' 	=> '<b>Slēptie</b> lauki pašreiz nav lietotājiem pieejami aplūkošanai Saraksta skatījumā.',
        'Default'	=> '<b>Noklusētie</b> lauki parādās Saraksta skatījumos, kurus lietotāji nav pielāgojuši.'
    ),
    'searchViewEditor'=>array(
        'modify'	=> 'All of the fields that can be displayed in the <b>Search</b> form appear here.<br><br>The <b>Default</b> column contains the fields that will be displayed in the Search form.<br/><br/>The <b>Hidden</b> column contains fields available for you as an admin to add to the Search form.'
    . '<br/><br/><!--not_in_theme!--><img src="themes/default/images/SugarLogic/icon_dependent.png"/>Indicates a Dependent field that may or may not be visible based on the value of a formula.<br/><!--not_in_theme!--><img src="themes/default/images/SugarLogic/icon_calculated.png" /> Indicates a Calculated field whose value will be automatically determined based on a formula.'
    . '<br/><br/>This configuration applies to popup search layout in legacy modules only.',
        'savebtn'	=> 'Klikšķinot <b>Saglabā un izvietot</b> tiks saglabātas un aktivizētas visas izmaiņas.',
        'Hidden' 	=> '<b>Slēptie</b> lauki neparādās Meklēšanā.',
        'historyBtn'=> 'Klikšķini <b>Aplūkot vēsturi</b>, lai aplūkotu vēsturi un atjaunotu iepriekš saglabātus izkārtojumus no vēstures.<br><br><b>Atjaunošana</b> caur <b>Aplūkot vēsturi</b> atjauno lauku novietojumu tādu kā iepriekš saglabātajos izkārtojumos. Lai izmainītu lauku etiķetes, klikšķini uz ikonas Rediģēt, blakus katram laukam.',
        'historyRestoreDefaultLayout'=> 'Uzklikšķināt <b>Atjaunot noklusēto izkārtojumu</b>, lai atjaunotu skatījumu tā oriģinālajā izkārtojumā.<br><br><b>Atjaunot noklusēto izkārtojumu</b> atjauno tikai lauku izvietojumu oriģinālajā izkārtojumā. Lai mainītu lauku etiķetes, uzklikšķiniet uz Rediģēšanas ikonas, kas atrodas blakus katram laukam.',
        'Default'	=> '<b>Noklusētie</b> lauki parādās Meklēšanas skatījumā.'
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
        'saveBtn'	=> 'Kliksķini <b>Saglabāt</b>, lai saglabātu izmaiņas kuras Jūs veicāt kopš pēdējās saglabāšanas .<br><br>Izmaiņas modulī neparādīsies, kamēr Jūs nebūsiet Izvietojis saglabātās izmaiņas.',
        'historyBtn'=> 'Klikšķini <b>Aplūkot vēsturi</b>, lai aplūkotu vēsturi un atjaunotu iepriekš saglabātus izkārtojumus no vēstures.<br><br><b>Atjaunošana</b> caur <b>Aplūkot vēsturi</b> atjauno lauku novietojumu tādu kā iepriekš saglabātajos izkārtojumos. Lai izmainītu lauku etiķetes, klikšķini uz ikonas Rediģēt, blakus katram laukam.',
        'historyRestoreDefaultLayout'=> 'Uzklikšķināt <b>Atjaunot noklusēto izkārtojumu</b>, lai atjaunotu skatījumu tā oriģinālajā izkārtojumā.<br><br><b>Atjaunot noklusēto izkārtojumu</b> atjauno tikai lauku izvietojumu oriģinālajā izkārtojumā. Lai mainītu lauku etiķetes, uzklikšķiniet uz Rediģēšanas ikonas, kas atrodas blakus katram laukam.',
        'publishBtn'=> 'Klikšķini <b>Saglabāt & Izvietot</b>, lai saglabātu un aktivizētu visas izkārtojuma izmaiņas kopš pēdējās saglabāšanas.<br><br> Šis izkārtojums nekavējoties tiks parādīts modulī.',
        'toolbox'	=> '<b>Rīkjosla</b> satur <b>Atkritni</b>, papildus elementus un pieejamo lauku kopu, pievienošanai izkārtojumam.<br/><br/>Izkārtojuma elementi un lauki Rīkjoslā, var tikt vilkti un nomesti izkārtojumā, un izkārtojuma elementi un lauki var tikt vilkti un nomesti no izkārtojuma uz rīkjoslu.<br><br>Izkārtojuma elementi ir <b>Paneļi</b> un <b>Rindas</b>. Jaunu rindu un paneļu pievienošana nodrošina papildus vietu izkārtojuma laukiem.<br/><br/>Velc un nomet jebkuru no laukiem Rīkjoslā vai izkārtojumā uz aizņemtu lauku lai samainītu divu lauku novietojumu.<br/><br/><b>Filler</b> lauks, vietā, kur tas ir novietots izkārtojumā, izveido neaizpildītu vietu.',
        'panels'	=> '<b>Izkārtojuma</b> zona parāda, kā izkārtojums parādīsies modulī, kad izkārtojumā veiktās izmaiņas tiks izvietotas .<br/><br/>Tu vari mainīt lauku, rindu un  paneļu pozīciju velkot un nometot tos paredzētajā vietā.<br/><br/>Izņem elementus, velkot un nometot tos, <b>Atktitnē</b> Rīkjoslā, vai pievieno jaunus elementus un laukus velkot  tos no <b>Rīkjoslas</b>, un nometot tos izkārtojumā paredzētajā vietā.',
        'delete'	=> 'Vilkt un nomest jebkuru elementu lai izņemtu to no izkārtojuma',
        'property'	=> 'Rediģēt šī lauka etiķeti. <br/><b>Ciļņu kārtība</b> kontrolē kādā kārtībā cilnes atslēga pārslēdzas starp laukiem.',
    ),
    'fieldsEditor'=>array(
        'default'	=> 'Modulī pieejamie <b>Lauku</b> nosaukumi ir uzskaitīti šeit.<br><br>Pielāgotie lauki ir saraksta sākumā, tiem seko modulī pēc noklusējuma pieejamie lauki.<br><br>Lai rediģētu lauku, klikšķiniet uz <b>Lauka nosaukuma</b>.<br/><br/>Lai izveidotu jaunu lauku, klikšķiniiet <b>Pievienot lauku</b>.',
        'mbDefault'=>'Modulī pieejamie <b>Lauki</b> ir uzskaitīti šeit pēc nosaukumiem.<br><br>Lai konfigurētu lauka īpašības, klikšķiniet uz Lauka nosaukuma.<br><br>Lai izveidotu jaunu lauku, klikšķiniet <b>Pievienot lauku</b>. Etiķete un citas jaunā lauka īpašības pēc izveidošanas pieejamas rediģēšanai, klikšķinot uz Lauka nosaukuma.<br><br>Pēc moduļa izvietošanas, ar Moduļu veidotāju radītie lauki Studio tiek uzskatīti par standarta laukiem.',
        'addField'	=> 'Izvēlieties <b>Datu tipu</b> jaunajam laukam. Izvēlētais tips noteiks, kādas rakstu zīmes var tikt ievadītas laukā. Piemēram, laukos ar datu tipu Integer  var ievadīt tikai skaitļus .<br><br> Ievadi lauka <b>Nosaukumu</b>.  Nosaukumam jābūt burtciparu un bez atstarpēm. Var izmantot arī pasvītrojuma zīmi.<br><br> <b>Etiķete</b> ir s izkārtojumos redzamais lauku nosaukums.   <b>Sistēmas etiķete</b> tiek lietota lai atsauktos uz lauku programmas kodā.<br><br> Atkarībā no izvēlētā lauka datu tipa, šim laukam var uzstādīt dažas vai visas no sekojošajām īpašībām:<br><br> <b>Palīdzības teksts</b> parādās īslaicīgi kamēr lietotājs pārvietojas pār lauku un var tikt izmantots, lai lietotājiem palīdzētu veikt datu ievadīšanu.<br><br> <b>Komentārs</b> ir redzams tikai Studio un/vai Moduļu veidotājā, un var tikt izmantots, lai aprakstītu šo lauku administratoriem.<br><br> <b>Noklusētā vērtība</b> parādīsies laukā.  Lietotāji var ievadīt jaunu vērtību vai atstāt noklusēto vērtību.<br><br> Atzīmējiet <b>Masveida izmaiņas</b> izvēlnes rūtiņu, lai izpildītu Masveida izmaiņu darbību šim laukam .<br><br> <b>Maksimālā izmēra</b> vērtība nosaka maksimālo rakstu zīmju skaitu, kurš var tikt ievadīts laukā.<br><br> Atzīmējiet<b>Obligāts lauks</b> izvēles rūtiņu, lai šis lauks būtu obligāti aizpildāms. Lai saglabātu ierakstu, šajā laukā obligāti jābūt ievadītai vērtībai.<br><br> Atzīmējiet <b>Pieejams atskaitēs</b> izvēles rūtiņu, lai ļautu šo lauku izmantot atskaitēs - filtros un datu attēlošanai.<br><br> Atzīmējiet <b>Audita</b> izvēles rūtiņu, lai izmaiņu žurnālā varētu izsekot veiktās izmaiņas.<br><br>Izvēlieties iespēju <b>Importējams</b>, lai importējot  importēšanas vednī šis lauks būtu pieejams, aizliegts vai obligāts.<br><br>Atzīmējiet <b>Dublikātu sapludināšanas</b> iespēju, lai aktivizētu vai deaktivizētu Dublikātu sapludināšanas un Dublikātu meklēšanas funkcijas.<br><br>Dažiem datu tipiem var iestatīt papildus īpašības.',
        'editField' => 'Šī lauka īpašības var tikt rediģētas. br><br>Klikšķiniet <b>Klonēt</b> , lai radītu lauku ar tādām pašām īpašībām.',
        'mbeditField' => 'Veidnes lauka <b>Etiķeti</b> var modificēt. Citas lauka īpašības nevar pielāgot.<br><br>Klikškiniet <b>Klonēt</b>, lai izveidotu jaunu lauku, ar tādām pašām īpašībām.<br><br>Lai izņemtu veidnes laukus, tie jāizņem no  atbilstošiem <b>Izkārtojumiem</b>.'

    ),
    'exportcustom'=>array(
        'exportHelp'=>'Eksportē Studio veiktās izmaiņas, izveidojot pakotnes, kuras var augšupielādēt citā Sugar instancē lietojot <b>Moduļu ielādētāju</b>.<br><br>  Vispirms ievadiet <b>Pakotnes nosaukumu</b>.  Variet ievadīt arī pakotnes <b>Autora</b> un <b>Apraksta</b> informāciju.<br><br>Izvēlieties  pielāgojumus saturošu moduli(us) eksportēšanai. Izvēlei būs pieejami tikai tie moduļi, kuri satur izmaiņas.<br><br>Tad klikšķiniet <b>Eksportēt</b>, lai pakotnei izveidotu .zip failu ar pielāgojumiem.',
        'exportCustomBtn'=>'Klikšķiniet <b>Eksportēt</b>, lai izveidotu .zip failu eksportējamai pakotnei, kas satur pielāgojumus.',
        'name'=>'Šis ir pakotnes nosaukums. Šis nosaukums tiks parādīts instalācijas laikā.',
        'author'=>'Šis ir <b>Autors</b>- pakotni radījušās entītes nosaukums, kuru rāda instalēšanas laikā. Autors var būt persona vai uzņēmums.',
        'description'=>'Šis ir pakotnes<b>Apraksts</b>, kurš tiks izvadīts instalācijas laikā.',
    ),
    'studioWizard'=>array(
        'mainHelp' 	=> 'Laipni lūgti <b>Izstrādātāja Rīku</b1> zonā. <br/><br/> Izmanto šos rīkus lai izveidoti un vadītu standarta un pielāgotos laukus',
        'studioBtn'	=> 'Lieto <b>Studio</b>l, ai pielāgotu izvietotos moduļus.',
        'mbBtn'		=> 'Lieto <b>Moduļu veidotāju</b> lai veidotu jaunus moduļus.',
        'sugarPortalBtn' => 'Lieto Sugar Portāla redaktoru, lai pārvaldītu un pielāgotu Sugar Portālu.',
        'dropDownEditorBtn' => 'Lieto <b>Nolaižamās izvēlnes redaktoru</b> lai pievienotu un rediģētu globālās nolaižamās izvēlnes nolaižamās izvēlnes laukiem.',
        'appBtn' 	=> 'Lietojumprogrammas režīmā Tu vari pielāgot dažādas programmas īpašības, tādas kā mājaslapā attēloto TPS atskaišu skaits.',
        'backBtn'	=> 'Atgriezties iepriekšējā solī.',
        'studioHelp'=> 'Lieto <b>Studio</b>, lai noteiktu kāda un kā informācija tiks parādīta moduļos.',
        'studioBCHelp' => 'norāda ka modulis ir savietojams ar iepriekšējām versijām',
        'moduleBtn'	=> 'Klikšķini la rediģētu šo moduli.',
        'moduleHelp'=> 'Moduļa rediģēšanai pieejamās komponentes parādās šeit<br><br>Klikšķini uz ikonas lai atlasītu komponenti rediģēšanai.',
        'fieldsBtn'	=> 'Izveido un pielāgo <b>Laukus</b> lai glabātu informāciju šajā modulī.',
        'labelsBtn' => 'Rediģēt <b>Etiķetes</b>, kuras attēlo moduļa lauku un citus nosaukumus.'	,
        'relationshipsBtn' => 'Pievieno jaunas moduļa relācijas vai aplūko esošās.' ,
        'layoutsBtn'=> 'Pielāgo moduļa <b>Izkārtojumus</b>. Izkārtojumi ir dažādi moduļa skatījumi kuri satur laukus<br><br>Tu vari noteikt, kuri lauki tiks attēloti un kā tie tiks izkārtoti katrā izkārtojumā.',
        'subpanelBtn'=> 'Nosaki kuri lauki parādīsies moduļa apakšpaneļos.',
        'portalBtn' =>'Pielāgo moduļa izkārtojumus, kuri parādās Sugar Portālā.',
        'layoutsHelp'=> 'Pielāgošanai pieejamie moduļa <b>Izkārtojumi</b> parādās šeit.<br><br>Izkārtojumi attēlo laukus un lauku datus.<br><br>Klikšķini uz ikonas, lai atlasītu izkārtojumu rediģēšanai.',
        'subpanelHelp'=> 'Šajā modulī, Pielāgošanai pieejamie  <b>Apakšpaneļi</b>, parādās šeit.<br><br>Klikšķini uz ikonas, lai atlasītu moduli rediģēšanai.',
        'newPackage'=>'Klikšķini <b>Jauna pakotne</b>, lai izveitotu jaunu pakotni.',
        'exportBtn' => 'Klikšķini <b>Eksportēt pielāgojumus</b>, lai izveidotu un lejupielādētu pakotni ar Studio veiktajām izmaiņām, norādītajiem moduļiem.',
        'mbHelp'    => 'Lieto <b>Moduļu veidotāju</b> lai veidotu pakotnes ar pielāgotajiem moduļiem izmantojot standarta un pielāgotos objektus.',
        'viewBtnEditView' => 'Pielāgot moduļa <b>Rediģēšanas skatījuma</b> izkārtojumu.<br><br>Rediģēšanas skatījums ir forma, kura satur ievades laukus, lietotāja ievadīto datu iegūšanai.',
        'viewBtnDetailView' => 'Pielāgot moduļa <b>Detalizētā skatījuma</b> izkārtojumu.<br><br>Detalizētais skatījums attēlo lietotāja ievadītos datus.',
        'viewBtnDashlet' => 'Pielāgot moduļa <b>Sugar Dašletu</b>, iekļaujot Sugar dašletu Saraksta skatījumu un Meklēšanu.<br><br>Sugar Dašlets būs pieejams pievienošanai lapām Sākuma modulī.',
        'viewBtnListView' => 'Pielāgot moduļa<b>Saraksta skatījuma</b> izkārtojumu.<br><br>Saraksta skatījumā tiek attēloti meklēšanas rezultāti.',
        'searchBtn' => 'Pielāgot moduļu <b>Meklēšanas</b> izkārtojumus.<br><br>Nosaki, kuri lauki var tikt izmantoti ierakstu filtrēšanai priekš Saraksta skatījuma.',
        'viewBtnQuickCreate' =>  'Pielāgot moduļa <b>Ātrās izveidošanas</b> izkārtojumu.<br><br>Ātrās izveidošanas forma parādās apakšpaneļos un E-pastu modulī.',

        'searchHelp'=> 'Pielāgošanai pieejamās <b>Meklēšanas</b> formas parādās šeit.<br><br>Meklēšanas formas satur laukus ierakstu filtrēšanai.<br><br>Klikšķini uz ikonas, lai atlasītu meklēšanas izkārtojumu rediģēšanai. .',
        'dashletHelp' =>'Pielāgošanai pieejamie <b>Sugar Dašletu</b> izkārtojumi parādās šeit.<br><br>Sugar dašlets būs pieejams pievienošanai Sākuma moduļa lapās.',
        'DashletListViewBtn' =>'<b>Sugar Dašletu Saraksta skatījums</b> attēlo ierakstus balstoties uz Sugar Dašletu meklēšanas filtriem.',
        'DashletSearchViewBtn' =>'<b>Sugar Dašletu meklēšana</b> filtrē ierakstus Sugar Dašletu saraksta skatījumam.',
        'popupHelp' =>'<b>Uznirstošie</b> izkārtojumi, kurus ir iespējams pielāgot, parādās šeit.<br>',
        'PopupListViewBtn' => '<b>Uznirstošais saraksta skatījums</b> attēlo ierakstus balstoties uz Uznirstošo meklēšanas skatījumu.',
        'PopupSearchViewBtn' => '<b>Uznirstošās meklēšanas</b> skatījuma ieraksti uznirstošajam saraksta skatījumam.',
        'BasicSearchBtn' => 'Pielāgo <b>Pamata meklēšanas</b> formu, kura parādās Pamata meklēšanas cilnē moduļa Meklēšanas zonā.',
        'AdvancedSearchBtn' => 'Pielāgo <b>Paplašinātās meklēšanas</b> formu, kura parādās Paplašinātās meklēšanas cilnē moduļa Meklēšanas zonā.',
        'portalHelp' => 'Pārvaldi un pielāgo Sugar Portālu.',
        'SPUploadCSS' => 'Augšupielādē <b>Stila lapas</b> Sugar Portālam.',
        'SPSync' => '<b>Sinhronizēt</b> pielāgojumus ar Sugar Portāla instanci .',
        'Layouts' => 'Pielāgot Sugar Portāla moduļu <b>izkārtojumus</b>.',
        'portalLayoutHelp' => 'Sugar Portāla moduļi parādās šajā zonā<br><br>Atlasi moduli, lai rediģētu <b>Izkārtojumus</b>.',
        'relationshipsHelp' => 'Visas esošās <b>Relācijas</b> starp moduli un citiem izvietotiem moduļiem parādās šeit.<br><br>Relācijas <b>Nosaukums</b> ir sistēmas ģenerēts relācijas nosaukums.<br><br><b>Primārais modulis</b> ir modulis, kuram pieder relācija.  Piemēram, visas relācijas īpašības, kurām Uzņēmumu modulis ir primārais modulis ir saglabātas Uzņēmuma moduļa datubāzes tabulās.<br><br> <b>Tips</b> ir relācijas tips kurš eksistē starp primāro moduli un <b>Saistīto moduli</b>.<br><br>Klikšķini uz kolonnas nosaukuma, lai ierakstus sašķirotu pēc kolonnas.<br><br>Klikšķini uz ieraksta saišu tabulā lai aplūkotu relācijas īpašības.<br><br>Klikšķini <b>Pievienot saiti</b>, lai izveidotu jaunu saiti<br><br>Relācijas var izveidot starp jebkuriem diviem izvietotiem moduļiem.',
        'relationshipHelp'=>'<b>Relācijas</b> var tikt izveidotas starp moduli un citu izvietoto moduli.<br><br> Relācijas tiek vizuāli izteiktas caur apakšpaneļiem un moduļa ierakstu saistītajiem laukiem.<br><br>Atlasi vienu no sekojošajiem saišu  <b>Tipiem</b>:<br><br> <b>Viens pret vienu</b> - Abu moduļu ieraksti satur saistītos laukus.<br><br> <b>Viens pret daudziem</b> - Primārā moduļa ieraksts satur apakšpaneli un Saistītā moduļa ieraksts satur saistīto lauku.<br><br> <b>Daudzi pret daudziem</b> - Abu moduļu ieraksti attēlos apakšpaneļus.<br><br> Atlasi <b>Saistīto moduli</b> relācijai. <br><br>Ja relācijas tips ietver apakšpaneļus, izvēlies apakšpaneļu skatījumu atbilstošajiem moduļiem.<br><br> Klikšķini <b>Saglabāt</b>, lai izveidotu saiti.',
        'convertLeadHelp' => "Šeit Tu vari pievienot moduļus konvertēšanas izkārtojuma ekrānam un modificēt jau esošus izkārtojumus.<br/><br />		Tu vari pārkārtot moduļus nometot to rindas tabulā.<br/><br/><br /><br />		<b>Modulis:</b> Moduļa nosaukums.<br/><br/><br />		<b>Nepieciešams:</b> Nepieciešamajiem moduļiem jābūt izveidotiem vai atlasītiem pirms interesents var tikt konvertēts.<br/><br/><br />		<b>Copy Data:</b> If checked, fields from the lead will be copied to fields with the same name in the newly created records.<br/><br/><br />		<b>Atļaut atlasīt:</b>Moduļa ieraksti ar saistīto lauku Kontaktpersonu modulī var tikt atlasīti nevis izveidoti interesenta konvertēšanas procesā .<br/><br/><br />		<b>Rediģēt:</b> Modificēt interesentu konvertēšanas izkārtojumu šim modulim.<br/><br/><br />		<b>Dzēst:</b> Izņemt šo moduli no konvertēšanas izkārtojuma.<br/><br/>",
        'editDropDownBtn' => 'Rediģēt globālo nolaižamo izvēlni',
        'addDropDownBtn' => 'Pievienot jaunu globālo nolaižamo izvēlni',
    ),
    'fieldsHelp'=>array(
        'default'=>'Moduļa <b>Lauki</b> šeit ir uzskaitīti pēc to nosaukumiem.<br><br>Moduļa veidne ietver iepriekš definētu lauku kopu.<br><br>Lai izveidotu jaunu lauku, klikšķiniet <b>Pievienot lauku</b>.<br><br>Lai rediģētu lauku, klikšķiniet uz <b>Lauka nosaukuma</b>.<br/><br/>Pēc moduļa izvietošanas, Moduļu veidotājā jaunizveidotie lauki tāpat kā veidnes lauki Studio rīkā tiks uzskatīti par standarta laukiem.',
    ),
    'relationshipsHelp'=>array(
        'default'=>'<b>Relācijas</b>, kuras ir izveidotas starp moduli un citiem moduļiem parādās šeit .<br><br> Relācijas<b>Nosaukums</b> ir sistēmas ģenerēts relācijas nosaukums.<br><br><b>Primārais modulis</b>ir modulis, kuram pieder relācija. Saišu īpašības glabājas Primārā moduļa datubāzes tabulās.<br><br><b>Tips</b> ir ralācijas tips, kurš pastāv starp Primāro moduli un <b>Saistīto moduli</b>.<br><br>Klikšķini uz kolonnas nosaukuma, lai ierakstus sašķirotu pēc kolonnas.<br><br>Klikšķini uz ieraksta saišu tabulā lai aplūkotu relācijas īpašības.<br><br>Klikšķini <b>Pievienot saiti</b>, lai izveidotu jaunu saiti.',
        'addrelbtn'=>'uzvelciet peli uz palīdzības, informācijai par relācijas pievienošanu..',
        'addRelationship'=>'<b>Relācijas</b> var tikt izveidotas starp moduli un citu izvietoto moduli.<br><br> Relācijas tiek vizuāli izteiktas caur apakšpaneļiem un moduļa ierakstu saistītajiem laukiem.<br><br>Atlasi vienu no sekojošajiem saišu  <b>Tipiem</b>:<br><br> <b>Viens pret vienu</b> - Abu moduļu ieraksti satur saistītos laukus.<br><br> <b>Viens pret daudziem</b> - Primārā moduļa ieraksts satur apakšpaneli un Saistītā moduļa ieraksts satur saistīto lauku.<br><br> <b>Daudzi pret daudziem</b> - Abu moduļu ieraksti attēlos apakšpaneļus.<br><br> Atlasi <b>Saistīto moduli</b> relācijai. <br><br>Ja relācijas tips ietver apakšpaneļus, izvēlies apakšpaneļu skatījumu atbilstošajiem moduļiem.<br><br> Klikšķini <b>Saglabāt</b>, lai izveidotu saiti.',
    ),
    'labelsHelp'=>array(
        'default'=> 'Moduļa lauku un citu nosaukumu <b>Etiķetes</b> var tikt mainītas.<br><br>Rediģējiet etiķeti klikšķinot uz lauka, ievadot jaunu tekstu un klikšķinot <b>Saglabāt</b>.<br><br>Ja lietojumprogrammā ir uzinstalēta kāda valodas pakotne, varieti izvēlēties  etiķetēs izmantojamo <b>Valodu</b>.',
        'saveBtn'=>'Klikšķiniet Saglabāt, lai saglabātu visas izmaiņas.',
        'publishBtn'=>'Klikšķiniet <b>Saglabāt & Izvietot</b>, lai saglabātu un aktivizētu visas izmaiņas.',
    ),
    'portalSync'=>array(
        'default' => 'Ievadiet <b>Sugar Portāla URL</b> portāla instancei kuru vēlaties atjaunināt, un klikšķiniet <b>Iet uz</b>.<br><br>Tad ievadiet derīgu Sugar lietotājvārdu un paroli, un tad klikšķiniet <b>Sākt sinhronizāciju</b>.<br><br>Pielāgojumi, kuri veikti Sugar Portal <b>Izkārtojumos</b>, kopā ar  <b>Stila lapām</b>, ja tādas augšupielādētas, tiks pārsūtītas uz norādīto Sugar Portāla instanci.',
    ),
    'portalConfig'=>array(
           'default' => '',
       ),
    'portalStyle'=>array(
        'default' => 'Tu vari pielāgot Sugar Portāla izskatu izmantojot stila lapas<br><br>Izvēlies <b>Stila lapu</b>, kuru augšupielādēt.<br><br>Stila lapa tiks īstenota Sugar Portālā nākamās sinhronizācijas laikā.',
    ),
),

'assistantHelp'=>array(
    'package'=>array(
            //custom begin
            'nopackages'=>'Lai sāktu projektu, klikšķiniet <b>Jauna pakotne</b>. Rezultāta tiks izveidotu jauna pakotne Jūsu pielāgoto moduļu glabāšanai. <br/><br/>Katra pakotne var saturēt vienu vai vairākus moduļus.<br/><br/>Piemēram, variet izveidot pakotni ar vienu pielāgoto moduli, kurš ir saistīts ar standarta Uzņēmumu moduli. Variet arī izveidot pakotni ar vairākiem jauniem  moduļiem, kuri darbojas kopā kā projekts, un ir saistīti viens ar otru, kā arī ar moduļiem lietojumprogrammā.',
            'somepackages'=>'<b>Pakotne</b> darbojas kā viena projekta pielāgoto moduļu konteiners. Pakotne var saturēt vienu vai vairākus <b>moduļus</b>, kuri var būt saistīti savā starpā, vai ar citiem moduļiem lietojumprogrammā.<br/><br/>Pēc pakotnes izveidošanas projektam, tūdaļ variet radīt moduļus šai pakotnei, vai atgriezties Moduļu veidotājā vēlāk, lai pabeigtu projektu. Kad projekts ir pabeigts, varieti <b>Izvietot</b> pakotni, lai instalētu visus pielāgotos moduļus lietojumprogrammā.',
            'afterSave'=>'Jūsu jaunajā pakotnē jābūt vismaz vienam modulim. Pakotnei Jūs varat izveidot vienu vai vairākus pielāgotos moduļus.<br/><br/>Klikšķiniet <b>Jauns modulis</b>, lai izveidotu pielāgoto moduli šai pakotnei.<br/><br/> Pēc vismaz viena moduļa izveidošanas, variet publicēt vai izvietot pakotni, lai tā būtu pieejama Jūsu instancē un/vai citu lietotāju instancēs.<br/><br/> Lai pakotni Jūsu instancē izvietotu vienā solī, klikšķiniet <b>Izvietot</b>.<br><br>Klikšķiniet <b>Publicēt</b>, lai saglabātu pakotni .zip failā. Pēc .zip faila saglabāšanas Jūsu sistēmā, lietojiet <b>Moduļu ielādētāju</b> pakotnes augšupielādei un instalēšanai Jūsu Sugar instancē.  <br/><br/>Variet izplatīt šo failu citiem lietotājiem augšupielādei un instalēšanai viņu Sugar instancēs.',
            'create'=>'<b>Pakotne</b> darbojas kā viena projekta pielāgoto moduļu konteiners. Pakotne var saturēt vienu vai vairākus <b>moduļus</b>, kuri var būt saistīti savā starpā, kā arī ar citiem moduļiem lietojumprogrammā.<br/><br/>Pēc pakotnes izveidošanas projektam, tūdaļ variet radīt tajā iekļaujamos moduļus, vai atgriezties Moduļu veidotājā vēlāk, lai pabeigtu projektu.',
            ),
    'main'=>array(
        'welcome'=>'Lietojiet <b>Izstrādātāja rīkus</b> standarta, pielāgoto moduļu un lauku  izveidei un pārvaldītšanai. <br/><br/>Lai pārvaldītu moduļus lietojumprogrammā, klikšķiniet <b>Studio</b>. <br/><br/>Lai izveidotu pielāgotos moduļus, klikšķiniet <b>Moduļu veidotājs</b>.',
        'studioWelcome'=>'Visi patreiz instalētie moduļi, ieskaitot standarta un ielādētos objektus, ir pielāgojami ar rīku Studio.'
    ),
    'module'=>array(
        'somemodules'=>"Tiklīdz pakotne satur vismaz vienu moduli, variet <b>Izvietot</b> pakotnē esošos moduļus savā Sugar instancē, vai <b>Publicēt</b> pakotni, lai instalētu to šajā vai citā Suagr instancē ar <b>Moduļu ielādētāju</b>.<br/><br/>Lai instalētu pakotni jūsu instancē, klikšķiniet <b>Izvietot</b>.<br><br>Lai izveidotu pakotnes .zip failu, kuru var ielādēt šajā Sugar un citās Sugar instancēs, lietojot <b>Moduļu ielādētāju</b>, klikšķiniet <b>Publicēt</b>.<br/><br/> Moduļus šai pakotnei variet veidot pa posmiem un tos publicēt vai izvietot, kad esat gatavs to darīt. <br/><br/>Pēc pakotnes publicēšanas un izvietošanas, variet mainīt pakotnes īpašības un pielāgot moduļus arī turpmāk. Lai izmaiņas stātos spēkā, pakotne atkārtoti jāpublicē vai izvieto." ,
        'editView'=> 'Šeit variet rediģēt esošus laukus. Ir iespēja izņemt jebkuru no esošajiem laukiem, kā arī pievienot pieejamos laukus no kreisās puses paneļa',
        'create'=>'Kad izvēlies <b>Tipu</b> veidojamam modulim, paturi prātā lauku tipus, kurus vēlies redzēt modulī. <br/><br/>Katra moduļa veidne satur lauku kopu, kura attiecas uz moduļa nosaukumā aprakstīto tipu.<br/><br/><b>Pamata</b> - satur standarta moduļu pamata laukus, tādus kā Vārds, Piesaistīts, Darba grupa, Izveidošanas datums un Apraksts.<br/><br/> <b>Uzņēmuma</b> - nodrošina organizācijai raksturīgus laukus, tādus kā Uzņēmuma nosaukums, Nozare un Norēķinu adrese.Lieto šo veidni, lai veidotu standarta Uzņēmuma modulim līdzīgus moduļus.<br/><br/> <b>Personas</b> - nodrošina Personai raksturīgus laukus, tādus kā Uzruna, Amats, Vārds, Adrese un  Tālruņa numurs. Lieto šo veidni, lai izveidotu standarta Kontaktu un Interesentu moduļiem līdzīgus moduļus.<br/><br/><b>Problēmu</b> - nodrošina pieteikumiem un kļūdām raksturīgus laukus, tādus kā Numurs, Statuss, Prioritāte un Apraksts.Lieto šo veidni, lai izveidotu standarta Pieteikumu un Kļūdu sekotāja moduļiem līdzīgus moduļus.<br/><br/>Piezīme: Pēc moduļa izveidošanas, variet rediģēt veidnes lauku etiķetes, kā arī izveidot moduļu izkārtojumiem pievienojamus pielāgotos laukus.',
        'afterSave'=>'Pielāgojiet moduļus savām vajadzībām, rediģējot un veidojot laukus, veidojot relācijas ar citiem moduļiem un sakārtojot laukus izkārtojumos<br/><br/>Lai aplūkotu veidnes laukus un pārvaldītu moduļa pielāgotos laukus, klikšķiniet <b>Aplūkot laukus</b>.<br/><br/>Lai veidotu un pārvaldītu relācijas starp moduli un citiem moduļiem, kā arī lietojumprogrammā jau esošiem moduļiem vai šajā pakotnē iekļautajiem pielāgotajiem moduļiem, klikšķiniet <b>Aplūkot relācijas</b>.<br/><br/>Lai rediģētu moduļa izkārtojumus, klikšķiniet <b>Aplūkot izkārtojumus</b>. Varieti izmainīt moduļa Detalizētā skatījuma, Rediģēšanas skatījuma un Saraksta skatījuma izkārtojumus, tieši tāpat kā jau lietojumprogrammā esošiem moduļiem Studi orīkā .<br/><br/> Lai izveidotu moduli ar tādām pašām īpašībām kā pašreizējajam modulim, klikšķiniet <b>Duplicēt</b>.  Pēc tam variet to pielāgot atbilstoši vajadzībām.',
        'viewfields'=>'Moduļa laukus iespējams pielāgot atbilstoši Jūsu vajadzībām.<br/><br/>Jūs nevariet dzēst standarta laukus, bet variet izņemt tos no atbilstošajiem izkārtojumiem izkārtojumu lapās. <br/><br/>Jūs variet ātri izveidot jaunus laukus, kuru īpašības ir līdzīgas esošajiem laukiem, klikšķinot <b>Klonēt</b>  <b>Īpašību</b> formā. Ievadiet jaunās īpašības un klikšķiniet <b>Saglabāt</b>.<br/><br/>Ieteicams iestatīt visas standarta un pielāgoto lauku īpašības pirms pielāgotos laukus saturošās pakotnes publicēšanas un instalēšanas.',
        'viewrelationships'=>'Variet izveidot daudz-pret-daudziem relācijas starp tekošo un citiem pakotnē iekļautajiem moduļiem un/vai starp tekošo un lietojumā jau instalētajiem moduļiem.<br><br> Lai definētu viens-pret-daudziem un viens-pret-vienu relācijas, izveidojiet <b>Saistīt</b> un<b>Elastīgi saistīt</b> laukus moduļiem.',
        'viewlayouts'=>'<b>Rediģēšanas skatījumu</b> variet noteikt, kuri lauki ir pieejami datu ievadīšanai.  Tapat variet noteikt, kādi dati redzami<b>Detalizētajā skatījumā</b>. Skatījumiem nav jābūt vienādiem. <br/><br/>Ātrās izveides forma atveras, noklikšķinot pogu <b>Izveidot</b> moduļa apakšpanelī. Pēc noklusējuma,  <b>Ātrās izveidošanas</b> formas izkārtojums ir vienāds ar noklusēto <b>Rediģēšanas skatījuma</b> izkārtojumu. Jūs veriet pielāgot ātrās izveides formu, lai tā saturētu mazāk un/vai citus laukus, kā Rediģēšanas skatījuma izkārtojums. <br><br>Jūs variet noteikt moduļa drošības īpašibas, izmantojot izkārtojuma pielāgošanu kopā ar <b>Lomu pārvaldību</b>.<br><br>',
        'existingModule' =>'Pēc moduļa izveidošanas un pielāgošanas, variet izveidot papildus moduļus vai atgriezties pakotnes sākuma lapā, lai <b>Publicētu</b> vai <b>Izvietotu</b> pakotni.<br><br>Lai izveidotu papildus moduļus ar tādām pašām īpašībām kā patreizējajam modulim, klikšķiniet <b>Dublicēt</b>, vai pakotnes sākuma lapā klikšķiniet<b>Jauns modulis</b>.<br><br> Ja esiet gatavs <b>Publicēt</b> vai <b>Izvietot</b> pakotni, kura satur šo moduli, dodies uz pakotnes sākuma lapu, lai izpildītu šīs funkcijas. Jūs varieti publicēt un izvietot pakotnes, kurās ir vismaz viens modulis.',
        'labels'=> 'Standarta un pielāgoto lauku etiķetes var tikt mainītas. Lauka etiķetes maiņa neietekmē šajā laukā glabātos datus.',
    ),
    'listViewEditor'=>array(
        'modify'	=> 'Kreisajā pusē ir redzamas trīs kolonnas. Kolonna "Noklusēts" satur laukus, kuri ir redzami saraksta  skatījumā pēc noklusējuma. Kolonna "Pieejams" satur laukus, kurus lietotājs var izvēlēties veidojot pielāgotus saraksta skatījumus. Kolonna "Slēpts" satur laukus, kuri ir pieejami Jums kā administratoram, lai tos pievienotu kolonnām Noklusēts vai Pieejams, tādejādi padarot tos pieejamus citiem lietotājiem.',
        'savebtn'	=> 'Klikšķinot <b>Saglabāt</b> tiks saglabātas un aktivizētas visas izmaiņas.',
        'Hidden' 	=> 'Slēptie lauki ir tādi, kuri pašreiz lietotājiem nav pieejami izmantošanai saraksta skatījumā.',
        'Available' => 'Pieejamie lauki ir lauki, kurus pēc noklusējuma lietotājs neredz, bet var aktivizēt.',
        'Default'	=> 'Noklusētie lauki ir redzami lietotājiem, kuri nav izveidojuši pielāgotos saraksta skatījuma iestatījumus.'
    ),

    'searchViewEditor'=>array(
        'modify'	=> 'Kreisajā pusē ir redzamas divas kolonnas. Kolonna "Noklusēts" satur laukus, kuri tiks attēloti meklēšanas skatījumā, kolonna "Slēpts" satur laukus, kuri ir pieejami Tev kā administratoram, lai tos pievienotu skatījumam',
        'savebtn'	=> 'Klikšķinot <b>Saglabāt un izvietot</b> tiks saglabātas un aktivizētas visas izmaiņas.',
        'Hidden' 	=> 'Slēptie lauki ir lauki, kuri netiks parādīti meklēšanas skatījumā.',
        'Default'	=> 'Noklusētie lauki tiks parādīti meklēšanas skatījumā.'
    ),
    'layoutEditor'=>array(
        'default'	=> 'Kreisajā pusē ir redzamas divas kolonnas. Kolonna pa labi, ar nosaukumu Patreizējais izkārtojums vai Izkārtojuma priekšskatījums, variet izmainīt moduļa izkārtojumu. Kolonna pa kreisi, kurā ir Rīkjosla, satur noderīgus elementus un rīkus izkārtojumu rediģēšanai. <br/><br/>Ja izkārtojuma zona nosaukums ir Patreizējais izkārtojums, Jūs strādājiet ar patreiz modulī lietoto izkārtojumu<br/><br/>Ja izkārtojuma zonas nosaukums ir Izkārtojuma priekšskatījums, Jūs strādājiet ar agrāk izveidotu kopiju, kas var atšķirties no lietotājam redzamās.',
        'saveBtn'	=> 'Klikšķis uz šīs pogas saglabā izkārtojumu izmaiņu turpināšanai. Atgriežoties šajā modulī vēlāk, verēsiet turpināt izkārtojuma rediģēšanu. Jūsu izkārtojums nebūs redzams moduļa lietotājiem, kamēr nebūs noklikšķināta poga Saglabāt un Izvietot.',
        'publishBtn'=> 'Klikšķiniet šo pogu, lai izvietotu izkārtojumu. Rezultātā izkārtojums nekavējoties būs redzams šī moduļa lietotājiem.',
        'toolbox'	=> 'Rīkjosla satur vairākus noderīgus elementus izkārtojumu rediģēšanai, tai skaitā , atkritumu vietni, papildus elementu kopu un pieejamo lauku kopu. Visi elementi izklājumā ir izvietojami ar vilkšanas-nomešanas metodi.',
        'panels'	=> 'Šajā zonā parādīts, kā izkārtojums būs redzams šī moduļa lietotājiem pēc tā izvietošanas.<br/><br/>Variet izmainīt lauku, rindu un paneļu novietojumu, tos velkot un nometot; dzēst elementus velkot un nometot tos uz Atkritni Rīku joslā, vai pievienot jaunus elementus ,velkot tos no rīkjoslas un nometot izkārtojumā paredzētajā vietā.'
    ),
    'dropdownEditor'=>array(
        'default'	=> 'Kreisajā pusē ir redzamas divas kolonnas. Kolonna pa labi, ar nosaukumu Patreizējais izkārtojums vai Izkārtojuma priekšskatījums, variet izmainīt moduļa izkārtojumu. Kolonna pa kreisi, kurā ir Rīkjosla, satur noderīgus elementus un rīkus izkārtojumu rediģēšanai. <br/><br/>Ja izkārtojuma zona nosaukums ir Patreizējais izkārtojums, Jūs strādājiet ar patreiz modulī lietoto izkārtojumu<br/><br/>Ja izkārtojuma zonas nosaukums ir Izkārtojuma priekšskatījums, Jūs strādājiet ar agrāk izveidotu kopiju, kas var atšķirties no lietotājam redzamās.',
        'dropdownaddbtn'=> 'Klikšķinot šo pogu, izvēlnes sarakstam tiks pievienots jauns elements.',

    ),
    'exportcustom'=>array(
        'exportHelp'=>'Šajā instancē ar Studio veiktie pielāgojumi var tikt sapakoti un izvietoti citā instancē.  <br><br>Ievadiet <b>Pakotnes nosaukumu</b>.  Variet ievadīt arī pakotnes <b>Autoru</b> un <b>Apraksta</b> informāciju.<br><br>Atlasiet moduli(ļus), kus satur eksportējamās izmaiņas. (Atlasei ir pieejami tikai pielāgojumus saturoši moduļi)<br><br>Klikšķiniet <b>Eksportēt</b>, lai izveidotu .zip failu ar pielāgojumiem. .zip fails var tikt augšupielādēts citā instancē ar <b>Moduļu ielādētāju</b>.',
        'exportCustomBtn'=>'Klikšķiniet <b>Eksportēt</b>, lai izveidotu .zip failu pakotnei, kurā iekļauti eksportējamie pielāgojumi.',
        'name'=>'Pakotnes <b>Nosaukums</b>  tiks parādīts Moduļu ielādētājā pēc pakotnes augšupielādēšanas instalēšanai Studio.',
        'author'=>'<b>Autors</b> ir entītes, kura izveidoja pakotni nosaukums. Autors var būt persona vai uzņēmums.<br><br>Autors tiks parādīts Moduļu ielādētājā pēc pakotnes augšupielādēšanas instalēšanai Studio.',
        'description'=>'Pakotnes <b>Apraksts</b> tiks parādīts Moduļu ielādētājā pēc pakotnes augšupielādēšanas instalēšanai Studio.',
    ),
    'studioWizard'=>array(
        'mainHelp' 	=> 'Laipni lūgti <b>Izstrādātāja Rīku</b1> zonā. <br/><br/> Izmantojiet zonā esošos rīkus, lai izveidotu un pārvaldītu standarta, ka arī pielāgotos moduļus un laukus.',
        'studioBtn'	=> 'Lietojiet Studio, lai pielāgotu instalētos moduļus, izmainot lauku kārtību, atlasot pieejamos laukus un izveidojot pielāgotos datu laukus.',
        'mbBtn'		=> 'Lieto <b>Moduļu veidotāju</b> lai veidotu jaunus moduļus.',
        'appBtn' 	=> 'Lietojiet Lietojumprogrammas režīmu, lai pielāgotu dažādas programmas īpašības, tādas kā mājaslapā attēloto TPS atskaišu skaits.',
        'backBtn'	=> 'Atgriezties iepriekšējā solī.',
        'studioHelp'=> 'Izmantojiet <b>Studio</b>, lai pielāgotu instalētos moduļus.',
        'moduleBtn'	=> 'Klikšķini la rediģētu šo moduli.',
        'moduleHelp'=> 'Izvēlieties moduļa komponenti rediģēšanai',
        'fieldsBtn'	=> 'Rediģējiet, kāda informācija tiek glabāta modulī, pārvaldot moduļa <b>Laukus</b>.<br/><br/>Šeit variet rediģēt un izveidot jaunus pielāgotos laukus.',
        'layoutsBtn'=> 'Pielāgojiet izkārtojumus Rediģēšanas, Detalizētajiem, Sarakstu un Meklēšanas skatījumiem.',
        'subpanelBtn'=> 'Rediģējiet, kāda informācija tiks parādīta šajos moduļu apakšpaneļos.',
        'layoutsHelp'=> 'Izvēlieties <b>Izkārtojumu rediģēšanai</b>.<br/<br/>Lai izmainītu datu ievadlaukus saturošu izkārtojumu, klikšķiniet <b>Rediģēšanas skatījums</b>.<br/><br/>Lai izmainītu izkārtojumu, kurš attēlo Rediģēšanas skatījumā ievadītos datus, klikšķiniet <b>Detalizēts skatījums</b>.<br/><br/>Lai izmainītu kolonnas, kuras parādās noklusētajā sarakstā, klikšķiniet <b>Saraksta skatījums</b>.<br/><br/>Lai izmainītu Pamata un Izvērstās meklēšanas formas izkārtojumus, klikšķiniet <b>Meklēšana</b>.',
        'subpanelHelp'=> 'Atlasiet Apakšpaneli rediģēšanai.',
        'searchHelp' => 'Atlasiet <b>Meklēšanas</b> izkārtojumu rediģēšanai.',
        'labelsBtn'	=> 'Rediģējiet <b>Etiķetes</b>, lai parādītu lielumus šajā modulī.',
        'newPackage'=>'Klikšķini <b>Jauna pakotne</b>, lai izveitotu jaunu pakotni.',
        'mbHelp'    => '<b>Laipni lūgti Moduļu veidotājā.</b><br/><br/>Lietojiet <b>Moduļu veidotāju</b>, lai radītu pakotnes ar pielāgotajiem moduļiem, izmantojot standarta un pielāgotus objektus. <br/><br/>Lai izveidotu jaunu pakotni, klikškiniet<b>Jauna pakotne</b>, vai izvēlies esošu pakotni rediģēšanai.<br/><br/> <b>Pakotne</b> darbojas kā viena projekta pielāgoto moduļu konteiners. Pakotne var saturēt vienu vai vairākus <b>moduļus</b>, kuri var būt saistīti savā starpā, vai ar citiem moduļiem lietojumprogrammā. <br/><br/>Piemēri: Variet izveidot pakotni ar vienu pielāgoto moduli, kurš ir saistīts ar standarta Uzņēmuma moduli. Vai arī variet izveidot pakotni ar vairākiem jauniem  moduļiem, kuri darbojas kopā kā projekts, un ir saistīti viens ar otru un arī ar moduļiem lietojumprogrammā.',
        'exportBtn' => 'Klikšķiniet <b>Eksportēt pielāgojumus</b>, lai izveidotu un lejupielādētu pakotni ar Studio veiktajām izmaiņām, norādītajiem moduļiem.',
    ),

),
//HOME
'LBL_HOME_EDIT_DROPDOWNS'=>'Nolaižamās izvēlnes redaktors',

//ASSISTANT
'LBL_AS_SHOW' => 'Turpmāk rādīt palīgu',
'LBL_AS_IGNORE' => 'Turpmāk ignorēt palīgu',
'LBL_AS_SAYS' => 'Palīgs saka:',

//STUDIO2
'LBL_MODULEBUILDER'=>'Moduļu veidotājs',
'LBL_STUDIO' => 'Studio',
'LBL_DROPDOWNEDITOR' => 'Nolaižamās izvēlnes redaktors',
'LBL_EDIT_DROPDOWN'=>'Rediģēt nolaižamo izvēlni',
'LBL_DEVELOPER_TOOLS' => 'Izstrādātāja rīki',
'LBL_SUGARPORTAL' => 'Sugar portāla redaktors',
'LBL_SYNCPORTAL' => 'Sinhronizēt portālu',
'LBL_PACKAGE_LIST' => 'Pakotņu saraksts',
'LBL_HOME' => 'Sākums',
'LBL_NONE'=>'-- neviens --',
'LBL_DEPLOYE_COMPLETE'=>'Izvietošana pabeigta',
'LBL_DEPLOY_FAILED'   =>'Izvietošanas laikā tika konstatēta kļūda, jūsu pakotne var nebūt korekti uzinstalēta',
'LBL_ADD_FIELDS'=>'Pievienot pielāgotus laukus',
'LBL_AVAILABLE_SUBPANELS'=>'Pieejamie apakšpaneļi',
'LBL_ADVANCED'=>'Paplašināts',
'LBL_ADVANCED_SEARCH'=>'Paplašinātā meklēšana',
'LBL_BASIC'=>'Pamata',
'LBL_BASIC_SEARCH'=>'Pamatmeklēšana',
'LBL_CURRENT_LAYOUT'=>'Izkārtojums',
'LBL_CURRENCY' => 'Valūta',
'LBL_CUSTOM' => 'Pielāgots',
'LBL_DASHLET'=>'Sugar dašlets',
'LBL_DASHLETLISTVIEW'=>'Sugar Dašletu saraksta skatījums',
'LBL_DASHLETSEARCH'=>'Sugar Dašletu meklēšana',
'LBL_POPUP'=>'Uznirstošais skatījums',
'LBL_POPUPLIST'=>'Uznirstošais saraksta skatījums',
'LBL_POPUPLISTVIEW'=>'Uznirstošais saraksta skatījums',
'LBL_POPUPSEARCH'=>'Uznirstošā meklēšana',
'LBL_DASHLETSEARCHVIEW'=>'Sugar Dašletu meklēšana',
'LBL_DISPLAY_HTML'=>'Parādīt HTML kodu',
'LBL_DETAILVIEW'=>'Detalizēts skatījums',
'LBL_DROP_HERE' => '[Nomest šeit]',
'LBL_EDIT'=>'Rediģēt',
'LBL_EDIT_LAYOUT'=>'Rediģēt izkārtojumu',
'LBL_EDIT_ROWS'=>'Rediģēt rindas',
'LBL_EDIT_COLUMNS'=>'Rediģēt kolonas',
'LBL_EDIT_LABELS'=>'Rediģēt etiķetes',
'LBL_EDIT_PORTAL'=>'Rediģēt portālu',
'LBL_EDIT_FIELDS'=>'Rediģēt laukus',
'LBL_EDITVIEW'=>'Rediģēšanas skatījums',
'LBL_FILTER_SEARCH' => "Meklēt",
'LBL_FILLER'=>'(aizpildītājs)',
'LBL_FIELDS'=>'Lauki',
'LBL_FAILED_TO_SAVE' => 'Neizdevās saglabāt',
'LBL_FAILED_PUBLISHED' => 'Neizdevās publicēt',
'LBL_HOMEPAGE_PREFIX' => 'Mans',
'LBL_LAYOUT_PREVIEW'=>'Izkārtojuma priekšskatījums',
'LBL_LAYOUTS'=>'Izkārtojumi',
'LBL_LISTVIEW'=>'Saraksta skatījums',
'LBL_RECORDVIEW'=>'Ieraksta skats',
'LBL_RECORDDASHLETVIEW'=>'Ieraksta skata dašlets',
'LBL_PREVIEWVIEW'=>'Preview View',
'LBL_MODULE_TITLE' => 'Studio',
'LBL_NEW_PACKAGE' => 'Jauna pakotne',
'LBL_NEW_PANEL'=>'Jauns panelis',
'LBL_NEW_ROW'=>'Jauna rinda',
'LBL_PACKAGE_DELETED'=>'Pakotne izdzēsta',
'LBL_PUBLISHING' => 'Publicē...',
'LBL_PUBLISHED' => 'Publicēts',
'LBL_SELECT_FILE'=> 'Norādīt failu',
'LBL_SAVE_LAYOUT'=> 'Saglabāt izkārtojumu',
'LBL_SELECT_A_SUBPANEL' => 'Norādīt apakšpaneli',
'LBL_SELECT_SUBPANEL' => 'Norādīt apakšpaneli',
'LBL_SUBPANELS' => 'Apakšpaneļi',
'LBL_SUBPANEL' => 'Apakšpanelis',
'LBL_SUBPANEL_TITLE' => 'Virsraksts:',
'LBL_SEARCH_FORMS' => 'Meklēt',
'LBL_STAGING_AREA' => 'Izveidošanas zona (velciet un nometiet vienumus šeit)',
'LBL_SUGAR_FIELDS_STAGE' => 'Sugar lauki (klikšķiniet uz vienumiem, lai pievienotu sākuma zonai)',
'LBL_SUGAR_BIN_STAGE' => 'Sugar Bin (klikšķiniet uz vienumiem, lai pievienotu izveidošanas zonai)',
'LBL_TOOLBOX' => 'Rīkjosla',
'LBL_VIEW_SUGAR_FIELDS' => 'Skatīt Sugar laukus',
'LBL_VIEW_SUGAR_BIN' => 'Skatīt Sugar Bin',
'LBL_QUICKCREATE' => 'Ātri izveidot',
'LBL_EDIT_DROPDOWNS' => 'Rediģēt globālo nolaižamo izvēlni',
'LBL_ADD_DROPDOWN' => 'Pievienot jaunu globālo nolaižamo izvēlni',
'LBL_BLANK' => '-tukšs-',
'LBL_TAB_ORDER' => 'Ciļņu secība',
'LBL_TAB_PANELS' => 'Rādīt paneļus kā cilnes',
'LBL_TAB_PANELS_HELP' => 'Rādīt katru paneli savā cilnē nevis visus vienā ekrānā',
'LBL_TABDEF_TYPE' => 'Attēlošanas veids',
'LBL_TABDEF_TYPE_HELP' => 'Izvēlies, kā šī sadaļa tiks attēlota. Šī iespēja būs aktīva, ja jums ir aktivizētas cilnes šim skatījumam.',
'LBL_TABDEF_TYPE_OPTION_TAB' => 'Cilne',
'LBL_TABDEF_TYPE_OPTION_PANEL' => 'Panelis',
'LBL_TABDEF_TYPE_OPTION_HELP' => 'Norādiet Panelis lai varētu attēlot šo paneli izkārtojuma skatā. Norādiet Cilne lai šo paneli izkārtojumā attēlotu atsevišķā cilnē. Ja panelim norādīts, kas tā  ir cilne sekojošs paneļus norāda kā paneļus lai tie tiktu parādīti tajā  pašā cilnē.  <br/>Jauna cilne tiks izveidota sākot no nākošā Cilnes paneļa. Ja panelim zem pirmā paneļa norāda, ka tas ir cilnes panelis, tad arī pirmajam ir jābūt cilnes panelim.',
'LBL_TABDEF_COLLAPSE' => 'Savērst',
'LBL_TABDEF_COLLAPSE_HELP' => 'Savērst šo sadaļu pēc noklusējuma, kad šī sadaļa ir definēta kā panelis',
'LBL_DROPDOWN_TITLE_NAME' => 'Nosaukums',
'LBL_DROPDOWN_LANGUAGE' => 'Valoda',
'LBL_DROPDOWN_ITEMS' => 'Saraksta vienumi',
'LBL_DROPDOWN_ITEM_NAME' => 'Vienuma nosaukums',
'LBL_DROPDOWN_ITEM_LABEL' => 'Attēlošanas etiķete',
'LBL_SYNC_TO_DETAILVIEW' => 'Sinhronizēt ar detalizēto skatu',
'LBL_SYNC_TO_DETAILVIEW_HELP' => 'Izvēlieties šo iespēju, lai sinhronizētu šo rediģēšanas izkārtojumu ar atbilstošo detalizēto izkārtojumu. Lauki un lauku izvietojums rediģēšanas skatījumā tiks sinhronizēts un saglabāts detalizētajā skatījumā automātiski, noklikšķinot uz Saglabāt vai Saglabāt un Izvietot rediģēšanas skatījumā. Izkārtojumu nevarēs izmainīt detalizētajā skatījumā.',
'LBL_SYNC_TO_DETAILVIEW_NOTICE' => 'Šis detalizētais skatījums ir sinhronizēts ar atbilstošu rediģēšanas skatījumu. Lauki un lauku novietojums šajā detalizētajā skatījumā atspoguļo laukus un lauku novietojumu rediģēšanas skatījumā. Šajā lapā detalizētā skatījumā izmaiņas nevar saglabāt vai izvietot. Veiciet izmaiņas vai atceliet izkārtojumu sinhronizāciju Rediģēšanas skatījumā.',
'LBL_COPY_FROM' => 'Kopēt no',
'LBL_COPY_FROM_EDITVIEW' => 'Kopēt no rediģēšanas skatījuma',
'LBL_DROPDOWN_BLANK_WARNING' => 'Vērtības ir nepieciešamas vienuma Nosaukumam un Etiķetei. Lai pievienotu tukšu vienumu, nospiediet Pievienot, neievadot vērtības Nosaukumam un Etiķetei.',
'LBL_DROPDOWN_KEY_EXISTS' => 'Atslēga jau ir sarakstā',
'LBL_DROPDOWN_LIST_EMPTY' => 'Sarakstā jābūt vismaz vienai aktīvai vērtībai',
'LBL_NO_SAVE_ACTION' => 'Nevar atrast saglabāšanas darbību šim skatam.',
'LBL_BADLY_FORMED_DOCUMENT' => 'Studio2:establishLocation: nepareizi izveidots dokuments',
// @TODO: Remove this lang string and uncomment out the string below once studio
// supports removing combo fields if a member field is on the layout already.
'LBL_INDICATES_COMBO_FIELD' => '* * Norāda kombinēto lauku. Kombinētais lauks ir atsevišķo lauku apvienojums. Piemēram, "Adrese" ir kombinētais lauks, kas satur "Iela", "Pilsēta", "Indekss", "Štats" un "Valsts". <br><br>Uzklikšķiniet divreiz uz kombinētā lauka, lai redzētu, kurus laukus tas satur.',
'LBL_COMBO_FIELD_CONTAINS' => 'satur:',

'LBL_WIRELESSLAYOUTS'=>'Mobilie izkārtojumi',
'LBL_WIRELESSEDITVIEW'=>'Mobilais rediģēšanas skatījums',
'LBL_WIRELESSDETAILVIEW'=>'Mobilais detalizētais skatījums',
'LBL_WIRELESSLISTVIEW'=>'Mobilais saraksta skatījums',
'LBL_WIRELESSSEARCH'=>'Mobilā meklēšana',

'LBL_BTN_ADD_DEPENDENCY'=>'Pievienot atkarību',
'LBL_BTN_EDIT_FORMULA'=>'Rediģēt formulu',
'LBL_DEPENDENCY' => 'Atkarība',
'LBL_DEPENDANT' => 'Atkarīgs',
'LBL_CALCULATED' => 'Aprēķināta vērtība',
'LBL_READ_ONLY' => 'Tikai lasīt',
'LBL_FORMULA_BUILDER' => 'Formulu redaktors',
'LBL_FORMULA_INVALID' => 'Nederīga formula',
'LBL_FORMULA_TYPE' => 'Formulas tipam jābūt',
'LBL_NO_FIELDS' => 'Lauki netika atrasti',
'LBL_NO_FUNCS' => 'Funkcijas netika atrastas',
'LBL_SEARCH_FUNCS' => 'Meklē funkcijas...',
'LBL_SEARCH_FIELDS' => 'Meklē laukus...',
'LBL_FORMULA' => 'Formula',
'LBL_DYNAMIC_VALUES_CHECKBOX' => 'Atkarīgs',
'LBL_DEPENDENT_DROPDOWN_HELP' => 'Pārvelciet pieejamās iespējas saistītajā izkrītošajā sarakstā no kreisās puses uz labo pusi, lai tās padarītu pieejamas, kad ir izvēlēta priekšteča iespēja. Ja izvēletajai priekšteča iepējai nav pakārtoto iespēju, saistītais izkrītošais saraksts netiks parādīts.',
'LBL_AVAILABLE_OPTIONS' => 'Pieejamās izvēles',
'LBL_PARENT_DROPDOWN' => 'Priekšteča nolaižamā izvēlne',
'LBL_VISIBILITY_EDITOR' => 'Redzamības redaktors',
'LBL_ROLLUP' => 'Apkopojums',
'LBL_RELATED_FIELD' => 'Saistītais lauks',
'LBL_PORTAL_ROLE_DESC' => 'Nedzēsiet šo lomu. Customer Self-Service Portal Role ir sistēmas ģenerēta loma, kas ir izveidota Sugar Portal aktivēšanas laikā. Izmantojot lietotāja pieejas kontroles uzstādījumus šajā lomā lai aktivētu un/vai deaktivētu Kļūdu, Pieteikumu, Zināšanas bāzes moduļus Sugar Portālā. Nemainiet citas pieejas kontroles tiesības šajā lomā lai izvairītos no neparedzamas sistēmas uzvedības. Ja loma netīšām ir izdzēsta atjaunojiet to deaktivējot un atkal aktivējot Sugar Portālu.',

//RELATIONSHIPS
'LBL_MODULE' => 'Modulis',
'LBL_LHS_MODULE'=>'Primārais modulis',
'LBL_CUSTOM_RELATIONSHIPS' => '* relācija izveidota Studio rīkā',
'LBL_RELATIONSHIPS'=>'Relācijas',
'LBL_RELATIONSHIP_EDIT' => 'Rediģēt relāciju',
'LBL_REL_NAME' => 'Nosaukums',
'LBL_REL_LABEL' => 'Etiķete',
'LBL_REL_TYPE' => 'Tips',
'LBL_RHS_MODULE'=>'Saistītais modulis',
'LBL_NO_RELS' => 'Nav relāciju',
'LBL_RELATIONSHIP_ROLE_ENTRIES'=>'Papildus nosacījums' ,
'LBL_RELATIONSHIP_ROLE_COLUMN'=>'Kolonna',
'LBL_RELATIONSHIP_ROLE_VALUE'=>'Vērtība',
'LBL_SUBPANEL_FROM'=>'Apakšpanelis no',
'LBL_RELATIONSHIP_ONLY'=>'Starp šiem diviem moduļiem jau eksistē redzama relācija, tādēļ jauni redzami elementi netiks veidoti.',
'LBL_ONETOONE' => 'Viens pret Vienu',
'LBL_ONETOMANY' => 'Viens pret Daudziem',
'LBL_MANYTOONE' => 'Daudzi pret vienu',
'LBL_MANYTOMANY' => 'Daudzi pret daudziem',

//STUDIO QUESTIONS
'LBL_QUESTION_FUNCTION' => 'Atlasiet funkciju vai komponenti.',
'LBL_QUESTION_MODULE1' => 'Atlasiet moduli.',
'LBL_QUESTION_EDIT' => 'Atlasiet moduli rediģēšanai.',
'LBL_QUESTION_LAYOUT' => 'Atlasiet izkārtojumu rediģēšanai.',
'LBL_QUESTION_SUBPANEL' => 'Atlasiet apakšpaneli rediģēšanai.',
'LBL_QUESTION_SEARCH' => 'Atlasiet meklēšanas izkārtojumu rediģēšanai.',
'LBL_QUESTION_MODULE' => 'Atlasiet moduli vai komponenti rediģēšanai.',
'LBL_QUESTION_PACKAGE' => 'Atlasiet pakotni rediģēšanai vai izveido jaunu pakotni.',
'LBL_QUESTION_EDITOR' => 'Atlasiet rīku.',
'LBL_QUESTION_DROPDOWN' => 'Atlasiet nolaižamo izvēlni rediģēšanai vai veidojiet jaunu.',
'LBL_QUESTION_DASHLET' => 'Atlasiet dašleta izkārtojumu rediģēšanai.',
'LBL_QUESTION_POPUP' => 'Atlasiet uznirstošo izkārtojumu rediģēšanai.',
//CUSTOM FIELDS
'LBL_RELATE_TO'=>'Saistīts ar',
'LBL_NAME'=>'Nosaukums',
'LBL_LABELS'=>'Etiķetes',
'LBL_MASS_UPDATE'=>'Masveida izmaiņas',
'LBL_AUDITED'=>'Audits',
'LBL_CUSTOM_MODULE'=>'Modulis',
'LBL_DEFAULT_VALUE'=>'Noklusētā vērtība',
'LBL_REQUIRED'=>'Obligāts',
'LBL_DATA_TYPE'=>'Tips',
'LBL_HCUSTOM'=>'PIELĀGOTS',
'LBL_HDEFAULT'=>'NOKLUSĒTS',
'LBL_LANGUAGE'=>'Valoda:',
'LBL_CUSTOM_FIELDS' => '* lauks izveidots Studio rīkā',

//SECTION
'LBL_SECTION_EDLABELS' => 'Rediģēt etiķetes',
'LBL_SECTION_PACKAGES' => 'Pakotnes',
'LBL_SECTION_PACKAGE' => 'Pakotne',
'LBL_SECTION_MODULES' => 'Moduļi',
'LBL_SECTION_PORTAL' => 'Portāls',
'LBL_SECTION_DROPDOWNS' => 'Nolaižamās izvēlnes',
'LBL_SECTION_PROPERTIES' => 'Īpašības',
'LBL_SECTION_DROPDOWNED' => 'Rediģēt nolaižamo izvēlni',
'LBL_SECTION_HELP' => 'Palīdzība',
'LBL_SECTION_ACTION' => 'Darbība',
'LBL_SECTION_MAIN' => 'Galvenā sadaļa',
'LBL_SECTION_EDPANELLABEL' => 'Rediģēt paneļa etiķeti',
'LBL_SECTION_FIELDEDITOR' => 'Rediģēt lauku',
'LBL_SECTION_DEPLOY' => 'Izvietot',
'LBL_SECTION_MODULE' => 'Modulis',
'LBL_SECTION_VISIBILITY_EDITOR'=>'Rediģēt redzamību',
//WIZARDS

//LIST VIEW EDITOR
'LBL_DEFAULT'=>'Noklusēts',
'LBL_HIDDEN'=>'Slēpts',
'LBL_AVAILABLE'=>'Pieejams',
'LBL_LISTVIEW_DESCRIPTION'=>'Zemāk ir attēlotas 3 kolonnas. Kolonna, <b>Noklusēts</b> , satur laukus, kuri ir attēloti saraksta skatījumā pēc noklusējuma. Kolonna, <b>Papildus</b>, satur laukus, kurus lietotājs var izvēlēties, veidojot pielāgoto skatījumu.Kolonna, <b>Piejams</b> ,satur laukus, kurus Jūs kā administrators variet pievienot kolonnām - Noklusēts un Papildus, padarot tos pieejamus citiem lietotājiem.',
'LBL_LISTVIEW_EDIT'=>'Sarakstu skatījuma redaktors',

//Manager Backups History
'LBL_MB_PREVIEW'=>'Priekšskatījums',
'LBL_MB_RESTORE'=>'Atjaunot',
'LBL_MB_DELETE'=>'Dzēst',
'LBL_MB_COMPARE'=>'Salīdzināt',
'LBL_MB_DEFAULT_LAYOUT'=>'Noklusētais izvietojums',

//END WIZARDS

//BUTTONS
'LBL_BTN_ADD'=>'Pievienot',
'LBL_BTN_SAVE'=>'Saglabāt',
'LBL_BTN_SAVE_CHANGES'=>'Saglabāt izmaiņas',
'LBL_BTN_DONT_SAVE'=>'Atmest izmaiņas',
'LBL_BTN_CANCEL'=>'Atcelt',
'LBL_BTN_CLOSE'=>'Aizvērt',
'LBL_BTN_SAVEPUBLISH'=>'Saglabāt un izvietot',
'LBL_BTN_NEXT'=>'Nākamais',
'LBL_BTN_BACK'=>'Atpakaļ',
'LBL_BTN_CLONE'=>'Klonēt',
'LBL_BTN_COPY' => 'Kopēt',
'LBL_BTN_COPY_FROM' => 'Kopē no …',
'LBL_BTN_ADDCOLS'=>'Pievienot kolonnas',
'LBL_BTN_ADDROWS'=>'Pievienot rindas',
'LBL_BTN_ADDFIELD'=>'Pievienot lauku',
'LBL_BTN_ADDDROPDOWN'=>'Pievienot nolaižamo izvēlni',
'LBL_BTN_SORT_ASCENDING'=>'Kārtot augošā secībā',
'LBL_BTN_SORT_DESCENDING'=>'Kārtot dilstošā secībā',
'LBL_BTN_EDLABELS'=>'Rediģēt etiķetes',
'LBL_BTN_UNDO'=>'Atsaukt',
'LBL_BTN_REDO'=>'Atatsaukt',
'LBL_BTN_ADDCUSTOMFIELD'=>'Pievienot pielāgotu lauku',
'LBL_BTN_EXPORT'=>'Eksportēt pielāgojumus',
'LBL_BTN_DUPLICATE'=>'Dublicēt',
'LBL_BTN_PUBLISH'=>'Publicēt',
'LBL_BTN_DEPLOY'=>'Izvietot',
'LBL_BTN_EXP'=>'Eksportēt',
'LBL_BTN_DELETE'=>'Dzēst',
'LBL_BTN_VIEW_LAYOUTS'=>'Skatīt izkārtojumus',
'LBL_BTN_VIEW_MOBILE_LAYOUTS'=>'Skatīt mobilos izkārtojumus',
'LBL_BTN_VIEW_FIELDS'=>'Skatīt laukus',
'LBL_BTN_VIEW_RELATIONSHIPS'=>'Skatīt relācijas',
'LBL_BTN_ADD_RELATIONSHIP'=>'Pievienot relāciju',
'LBL_BTN_RENAME_MODULE' => 'Mainīt moduļa nosaukumu',
'LBL_BTN_INSERT'=>'Ievietot',
'LBL_BTN_RESTORE_BASE_LAYOUT' => 'Atjaunot pamata izkārtojumu',
//TABS

//ERRORS
'ERROR_ALREADY_EXISTS'=> 'Kļūda: Lauks jau eksistē',
'ERROR_INVALID_KEY_VALUE'=> "Kļūda: Nederīga atslēgas vērtība: [$#39;]",
'ERROR_NO_HISTORY' => 'Vēstures faili netika atrasti',
'ERROR_MINIMUM_FIELDS' => 'Izkārtojumam jāsatur vismaz viens lauks',
'ERROR_GENERIC_TITLE' => 'Notikusi kļūda',
'ERROR_REQUIRED_FIELDS' => 'Vai tiešām vēlaties turpināt? Sekojoši obligātie lauki iztrūkst izkārtojumā:',
'ERROR_ARE_YOU_SURE' => 'Vai tiešām vēlaties turpināt?',
'ERROR_DATABASE_ROW_SIZE_LIMIT' => 'Lauku nevar izveidot. Jūs sasniedzāt rindas izmēra ierobežojumu šai tabulai jūsu datu bāzē. <a href="https://support.sugarcrm.com/SmartLinks/Custom/MySQL_Row_Size_Limit/" target="_blank">Uzzināt vairāk</a>.',

'ERROR_CALCULATED_MOBILE_FIELDS' => 'Sekojoši lauki satur aprēķinātas vērtības, kuras netiks pārrēķinātas reālajā laikā SugarCRM Mobile rediģēšanas skatījumā:',
'ERROR_CALCULATED_PORTAL_FIELDS' => 'Sekojoši lauki satur aprēķinātas vērtības, kuras netiks pārrēķinātas reālajā laikā SugarCRM Portāla rediģēšanas skatījumā:',

//SUGAR PORTAL
    'LBL_PORTAL_DISABLED_MODULES' => 'Sekojoši moduļi ir atspējoti:',
    'LBL_PORTAL_ENABLE_MODULES' => 'Ja vēlaties tos aktivēt portālā, tad aktivējiet tos  <a id="configure_tabs" target="_blank" href="./index.php?module=Administration&amp;action=ConfigureTabs">šeit</a>.',
    'LBL_PORTAL_CONFIGURE' => 'Konfigurēt portālu',
    'LBL_PORTAL_ENABLE_PORTAL' => 'Aktivizēt portālu',
    'LBL_PORTAL_SHOW_KB_NOTES' => 'Iespējojiet piezīmes Zināšanu bāzes modulī',
    'LBL_PORTAL_ALLOW_CLOSE_CASE' => 'Atļaut portāla lietotājiem slēgt pieteikumu',
    'LBL_PORTAL_ENABLE_SELF_SIGN_UP' => 'Atļaut reģistrēties jauniem lietotājiem',
    'LBL_PORTAL_USER_PERMISSIONS' => 'Lietotāja atļaujas',
    'LBL_PORTAL_THEME' => 'Portāla tēma',
    'LBL_PORTAL_ENABLE' => 'Aktivēt',
    'LBL_PORTAL_SITE_URL' => 'Jūsu portāla vietne ir pieejama:',
    'LBL_PORTAL_APP_NAME' => 'Aplikācijas nosaukums',
    'LBL_PORTAL_CONTACT_PHONE' => 'Tālrunis',
    'LBL_PORTAL_CONTACT_EMAIL' => 'E-pasts',
    'LBL_PORTAL_CONTACT_EMAIL_INVALID' => 'Ir jāievada derīga e-pasta adrese',
    'LBL_PORTAL_CONTACT_URL' => 'URL',
    'LBL_PORTAL_CONTACT_INFO_ERROR' => 'Ir jānorāda vismaz viena saziņas metode',
    'LBL_PORTAL_LIST_NUMBER' => 'Sarakstā rādāmo ierakstu skaits',
    'LBL_PORTAL_DETAIL_NUMBER' => 'Detalizētā skatā rādāmo lauku skaits',
    'LBL_PORTAL_SEARCH_RESULT_NUMBER' => 'Globālās meklēšanas rezultātos rādāmo ierakstu skaits',
    'LBL_PORTAL_DEFAULT_ASSIGN_USER' => 'Pēc noklusējuma piešķirts jaunām portāla reģistrācijām',
    'LBL_PORTAL_MODULES' => 'Portāla moduļi',
    'LBL_CONFIG_PORTAL_CONTACT_INFO' => 'Portāla kontaktinformācija',
    'LBL_CONFIG_PORTAL_CONTACT_INFO_HELP' => 'Konfigurējiet kontaktinformāciju, kas tiks parādīta Portāla lietotājiem, kuriem ir nepieciešama papildu palīdzība ar viņu uzņēmumu. Ir jākonfigurē vismaz viena opcija.',
    'LBL_CONFIG_PORTAL_MODULES_HELP' => 'Pavelciet un nometiet Portāla moduļu nosaukumus, lai iestatītu tos kā parādītus vai slēptus Portāla augšējā navigācijas joslā. Lai kontrolētu Portāla lietotāja piekļuvi moduļiem, izmantojiet <a href="?module=ACLRoles&action=index">Lomu pārvaldība.</a>',
    'LBL_CONFIG_PORTAL_MODULES_DISPLAYED' => 'Parādītie moduļi',
    'LBL_CONFIG_PORTAL_MODULES_HIDDEN' => 'Slēptie moduļi',
    'LBL_CONFIG_VISIBILITY' => 'Redzamība',
    'LBL_CASE_VISIBILITY_HELP' => 'Nosakiet, kuri portāla lietotāji var redzēt pieteikumu.',
    'LBL_EMAIL_VISIBILITY_HELP' => 'Nosakiet, kuri portāla lietotāji var redzēt ar pieteikumu saistītus e-pastus. Piedalās kontaktpersonas, kuras ir laukos Kam, No, Kopija un Slēptā kopija.',
    'LBL_MESSAGE_VISIBILITY_HELP' => 'Nosakiet, kuri portāla lietotāji var redzēt ar pieteikumu saistītus ziņojumus. Piedalās kontaktpersonas, kuras ir Viesu laukos.',
    'CASE_VISIBILITY_OPTIONS' => [
        'all' => 'Visi kontakti, kas ir saistīti ar uzņēmumu',
        'related_contacts' => 'Tikai primārā kontaktpersona un ar pieteikumu saistītās kontaktpersonas',
    ],
    'EMAIL_VISIBILITY_OPTIONS' => [
        'related_contacts' => 'Tikai kontaktpersonas - dalībnieki',
        'all' => 'Visas kontaktpersonas, kuras var redzēt pieteikumu',
    ],
    'MESSAGE_VISIBILITY_OPTIONS' => [
        'related_contacts' => 'Tikai kontaktpersonas - dalībnieki',
        'all' => 'Visas kontaktpersonas, kuras var redzēt pieteikumu',
    ],


'LBL_PORTAL'=>'Portāls',
'LBL_PORTAL_LAYOUTS'=>'Portāla izkārtojumi',
'LBL_SYNCP_WELCOME'=>'Lūdzu ievadiet atjaunināmās portāla instances URL.',
'LBL_SP_UPLOADSTYLE'=>'Izvēlieties no sava datora augšuplādējamu stila lapu.<br />Stila lapa Sugar portālā tiks izmantota, kad nākamo reizi veiksiet sinhronizāciju.',
'LBL_SP_UPLOADED'=> 'Augšupielādēts',
'ERROR_SP_UPLOADED'=>'Lūdzu pārliecinieties, ka augšuplādējat css stila lapu.',
'LBL_SP_PREVIEW'=>'Šādi izskatās Sugar portāls, lietojot stila lapu.',
'LBL_PORTALSITE'=>'Sugar Portāla URL:',
'LBL_PORTAL_GO'=>'Iet uz',
'LBL_UP_STYLE_SHEET'=>'Augšuplādēt stila lapu',
'LBL_QUESTION_SUGAR_PORTAL' => 'Atlasiet Sugar portāla izkārtojumu rediģēšanai.',
'LBL_QUESTION_PORTAL' => 'Atlasiet portāla izkārtojumu rediģēšanai.',
'LBL_SUGAR_PORTAL'=>'Sugar portāla redaktors',
'LBL_USER_SELECT' => '-- Atlasīt--',

//PORTAL PREVIEW
'LBL_CASES'=>'Pieteikumi',
'LBL_NEWSLETTERS'=>'Biļeteni',
'LBL_BUG_TRACKER'=>'Kļūdu sekotājs',
'LBL_MY_ACCOUNT'=>'Mans konts',
'LBL_LOGOUT'=>'Iziet',
'LBL_CREATE_NEW'=>'Izveidot jaunu',
'LBL_LOW'=>'Zema',
'LBL_MEDIUM'=>'Vidēja',
'LBL_HIGH'=>'Augsta',
'LBL_NUMBER'=>'Numurs:',
'LBL_PRIORITY'=>'Prioritāte:',
'LBL_SUBJECT'=>'Temats',

//PACKAGE AND MODULE BUILDER
'LBL_PACKAGE_NAME'=>'Pakotnes nosaukums:',
'LBL_MODULE_NAME'=>'Moduļa nosaukums:',
'LBL_MODULE_NAME_SINGULAR' => 'Moduļa nosaukums vienskaitlī:',
'LBL_AUTHOR'=>'Autors:',
'LBL_DESCRIPTION'=>'Apraksts:',
'LBL_KEY'=>'Atslēga:',
'LBL_ADD_README'=>' Lasi mani',
'LBL_MODULES'=>'Moduļi:',
'LBL_LAST_MODIFIED'=>'Pēdējoreiz modificēts:',
'LBL_NEW_MODULE'=>'Jauns modulis',
'LBL_LABEL'=>'Etiķete:',
'LBL_LABEL_TITLE'=>'Etiķete',
'LBL_SINGULAR_LABEL' => 'Etiķete vienskaitlī',
'LBL_WIDTH'=>'Platums',
'LBL_PACKAGE'=>'Pakotne:',
'LBL_TYPE'=>'Tips:',
'LBL_TEAM_SECURITY'=>'Darba grupas drošība',
'LBL_ASSIGNABLE'=>'Piešķirams',
'LBL_PERSON'=>'Persona',
'LBL_COMPANY'=>'Uzņēmums:',
'LBL_ISSUE'=>'Problēma',
'LBL_SALE'=>'Pārdošana',
'LBL_FILE'=>'Fails',
'LBL_NAV_TAB'=>'Navigācijas cilne',
'LBL_CREATE'=>'Izveidot',
'LBL_LIST'=>'Saraksts',
'LBL_VIEW'=>'Skats',
'LBL_LIST_VIEW'=>'Saraksta skatījums',
'LBL_HISTORY'=>'Aplūkot vēsturi',
'LBL_RESTORE_DEFAULT_LAYOUT'=>'Atjaunot noklusēto izkārtojumu',
'LBL_ACTIVITIES'=>'Darbības',
'LBL_SEARCH'=>'Meklēt',
'LBL_NEW'=>'Jauns',
'LBL_TYPE_BASIC'=>'pamata',
'LBL_TYPE_COMPANY'=>'uzņēmums',
'LBL_TYPE_PERSON'=>'persona',
'LBL_TYPE_ISSUE'=>'problēma',
'LBL_TYPE_SALE'=>'pārdošana',
'LBL_TYPE_FILE'=>'fails',
'LBL_RSUB'=>'Šis ir apakšpanelis, kurš parādīsies jūsu modulī',
'LBL_MSUB'=>'Šis ir apakšpanelis, kuru Jūsu modulis piedāvā attēlošanai saistītos moduļos',
'LBL_MB_IMPORTABLE'=>'Atļaut importēšanu',

// VISIBILITY EDITOR
'LBL_VE_VISIBLE'=>'redzams',
'LBL_VE_HIDDEN'=>'slēpts',
'LBL_PACKAGE_WAS_DELETED'=>'[[package]] tika izdzēsta',

//EXPORT CUSTOMS
'LBL_EC_TITLE'=>'Eksportēt pielāgojumus',
'LBL_EC_NAME'=>'Pakotnes nosaukums:',
'LBL_EC_AUTHOR'=>'Autors:',
'LBL_EC_DESCRIPTION'=>'Apraksts:',
'LBL_EC_KEY'=>'Atslēga:',
'LBL_EC_CHECKERROR'=>'Lūdzu izvēlieties moduli.',
'LBL_EC_CUSTOMFIELD'=>'pielāgotais(ie) lauks(i)',
'LBL_EC_CUSTOMLAYOUT'=>'pielāgots(ie) izkārtojums(i)',
'LBL_EC_CUSTOMDROPDOWN' => 'Pielāgotie izvēles saraksti',
'LBL_EC_NOCUSTOM'=>'Neviens modulis nav pielāgots.',
'LBL_EC_EXPORTBTN'=>'Eksportēt',
'LBL_MODULE_DEPLOYED' => 'Modulis ir izvietots.',
'LBL_UNDEFINED' => 'nav noteikts',
'LBL_EC_CUSTOMLABEL'=>'pielāgotās etiķetes',

//AJAX STATUS
'LBL_AJAX_FAILED_DATA' => 'Neizdevās izgūt datus',
'LBL_AJAX_TIME_DEPENDENT' => 'Notiek no laika atkarīga darbība. Lūdzu gaidiet un pēc dažām sekundēm mēģiniet vēlreiz.',
'LBL_AJAX_LOADING' => 'Notiek ielāde ...',
'LBL_AJAX_DELETING' => 'Dzēš...',
'LBL_AJAX_BUILDPROGRESS' => 'Notiek būvēšana...',
'LBL_AJAX_DEPLOYPROGRESS' => 'Notiek izvietošana...',
'LBL_AJAX_FIELD_EXISTS' =>'Ievadītais lauka nosaukums jau eksistē. Lūdzu ievadiet jaunu lauka nosaukumu.',
//JS
'LBL_JS_REMOVE_PACKAGE' => 'Vai tiešām vēlaties izņemt šo pakotni? Darbības rezultātā tiks izdzēsti visi ar pakotni saistītie faili.',
'LBL_JS_REMOVE_MODULE' => 'Vai tiešām vēlaties izņemt šo moduli? Darbības rezultātā tiks izdzēsti visi ar moduli saistītie faili.',
'LBL_JS_DEPLOY_PACKAGE' => 'Jebkuras Studio veiktās izmaiņas tiks pārrakstītas, šo moduli izvietojot atkārtoti. Vai vēlaties turpināt?',

'LBL_DEPLOY_IN_PROGRESS' => 'Izvieto pakotni',
'LBL_JS_VALIDATE_NAME'=>'Nosaukums - Jāsastāv tikai no cipariem un burtiem, jāsākas ar burtu un nedrīkst saturēt atstarpes.',
'LBL_JS_VALIDATE_PACKAGE_KEY'=>'Pakotnes atslēga jau eksistē',
'LBL_JS_VALIDATE_PACKAGE_NAME'=>'Pakotnes nosaukums jau eksistē',
'LBL_JS_PACKAGE_NAME'=>'Pakotnes nosaukums - jāsākas ar burtu un var sastāvēt tikai no burtiem, cipariem un pasvītrojumiem. Nedrīkst saturēt atstarpes vai citus īpašos simbolus.',
'LBL_JS_VALIDATE_KEY_WITH_SPACE'=>'Atslēga - jābūt burtu un ciparu kombinācijai un jāsākas ar burtu.',
'LBL_JS_VALIDATE_KEY'=>'Atslēga - Jābūt burtciparu, jāsākas ar burtu un nedrīkst saturēt atstarpes.',
'LBL_JS_VALIDATE_LABEL'=>'Lūdzu ievadiet etiķeti, ko lietot par šī moduļa attēlošanas vārdu',
'LBL_JS_VALIDATE_TYPE'=>'Lūdzu atlasiet veidojamā moduļa tipu no augstāk esošā saraksta',
'LBL_JS_VALIDATE_REL_NAME'=>'Nosaukums - Jābūt burtciparu un bez atstarpēm',
'LBL_JS_VALIDATE_REL_LABEL'=>'Etiķete- lūdzu pievieno etiķeti, kura būs redzama virs apakšpaneļa.',

// Dropdown lists
'LBL_JS_DELETE_REQUIRED_DDL_ITEM' => 'Vai tiešām vēlies dzēst šo obligāto nolaižamās izvēlnes saraksta vienumu? Tas var ietekmēt lietojumprogrammas funkcionalitāti.',

// Specific dropdown list should be:
// LBL_JS_DELETE_REQUIRED_DDL_ITEM_(UPPERCASE_DDL_NAME)
'LBL_JS_DELETE_REQUIRED_DDL_ITEM_SALES_STAGE_DOM' => 'Vai tiešām vēlies dzēst šo obligāto nolaižamās izvēlnes saraksta vienumu?Dzēšot pārdošanas stadiju  "Aizvērts - zaudēts" vai "Aizvērts - iegūts"  Prognožu modulis nedarbosies korekti.',

// Specific list items should be:
// LBL_JS_DELETE_REQUIRED_DDL_ITEM_(UPPERCASE_ITEM_NAME)
// Item name should have all special characters removed and spaces converted to
// underscores
'LBL_JS_DELETE_REQUIRED_DDL_ITEM_NEW' => 'Vai tiešām vēlaties dzēst statusu "Jauns"? Šī statusa izdzēšana ietekmēs Iespēju moduļa ieņēmumu posteņu procesu pareizu darbību.',
'LBL_JS_DELETE_REQUIRED_DDL_ITEM_IN_PROGRESS' => 'Vai tiešām vēlaties dzēst statusu "Procesā"? Šī statusa izdzēšana ietekmēs Iespēju moduļa ieņēmumu posteņu procesu pareizu darbību.',
'LBL_JS_DELETE_REQUIRED_DDL_ITEM_CLOSED_WON' => 'Vai tiešām vēlies dzēst pārdošanas stadiju "Aizvērts - iegūts"? Dzēšot šo pārdošanas stadiju Prognožu modulis nedarbosies korekti.',
'LBL_JS_DELETE_REQUIRED_DDL_ITEM_CLOSED_LOST' => 'Vai tiešām vēlies dzēst pārdošanas stadiju "Aizvērts - zaudēts"? Dzēšot šo pārdošanas stadiju Prognožu modulis nedarbosies korekti.',

//CONFIRM
'LBL_CONFIRM_FIELD_DELETE'=>'Deleting this custom field will delete both the custom field and all the data related to the custom field in the database. The field will be no longer appear in any module layouts.'
        . ' If the field is involved in a formula to calculate values for any fields, the formula will no longer work.'
        . '\n\nThe field will no longer be available to use in Reports; this change will be in effect after logging out and logging back in to the application. Any reports containing the field will need to be updated in order to be able to be run.'
        . '\n\nDo you wish to continue?',
'LBL_CONFIRM_RELATIONSHIP_DELETE'=>'Vai tiešām vēlaties dzēst šo relāciju?',
'LBL_CONFIRM_RELATIONSHIP_DEPLOY'=>'Tādejādi tiks radīta pastāvīga relācija. Vai tiešām vēlaties izvietot šo relāciju?',
'LBL_CONFIRM_DONT_SAVE' => 'Kopš pēdējās saglabāšanas ir veiktas izmaiņas, vai vēlaties saglabāt?',
'LBL_CONFIRM_DONT_SAVE_TITLE' => 'Saglabāt izmaiņas?',
'LBL_CONFIRM_LOWER_LENGTH' => 'Dati var tikt saīsināti un to nevarēs atsaukt, vai tiešām vēlies turpināt?',

//POPUP HELP
'LBL_POPHELP_FIELD_DATA_TYPE'=>'Atlasiet piemērotu datu tipu atkarībā no šajā laukā ievadītās informācijas',
'LBL_POPHELP_FTS_FIELD_CONFIG' => 'Konfigurēt lauku, lai tajā varētu veikt pilna teksta meklēšanu.',
'LBL_POPHELP_FTS_FIELD_BOOST' => 'Palielināšana ir process, kurā tiek uzlabota ieraksta lauku atbilstība. <br />Laukiem ar lielāku palielinājuma līmeni tiks piešķirta lielāka nozīme meklēšanas laikā. Meklēšanas laikā atbilstošie ieraksti, kas satur laukus ar lielāku nozīmi, parādīsies augstāk meklēšanas rezultātos. <br />Noklusējuma vērtība ir 1,0, kas apzīmē neitrālu palielinājumu. Lai piemērotu pozitīvu palielinājumu, tiek pieņemta jebkura mainīga vērtība, kas ir lielāka par 1. Negatīvam palielinājumam izmanto vērtību, kas zemāka par 1. Piemēram, vērtība 1,35 pozitīvi palielinās lauku par 135 %. Izmantojot vērtību 0,60, tiks piemērots negatīvs palielinājums. <br />Ņemiet vērā, ka iepriekšējās versijās bija nepieciešams veikt pilna teksta meklēšanas atkārtotu indeksēšanu. Tas vairs nav nepieciešams.',
'LBL_POPHELP_IMPORTABLE'=>'<b>Jā</b>: Lauks tiks iekļauts importēšanas operācijā.<br><b>Nē</b>: Lauks netiks iekļauts importa operācijā<br><b>Obligāts</b>: Lauka vērtībai jābūt norādītai jebkurā importa operācijā.',
'LBL_POPHELP_PII'=>'Šis lauks tiks automātiski atzīmēts auditam un pieejams Personiskās informācijas skatam.<br>Personiskās informācijas lauki var arī tikt neatgriezeniski izdzēsti, kad ieraksts attiecas uz datu privātuma nodrošināšanas pieprasījumu.<br>Dzēšana tiek veikta, izmantojot Datu privātuma moduli, un to var izpildīt administratori vai lietotāji datu privātuma pārvaldnieka lomā.',
'LBL_POPHELP_IMAGE_WIDTH'=>'Ievadiet platumu pikseļos. <br> Augšupielādētais attēls tiks mērogots atbilstoši šim platumam.',
'LBL_POPHELP_IMAGE_HEIGHT'=>'Ievadiet augstumu pikseļos. <br> Augšupielādētais attēls tiks mērogots atbilstoši šim augstumam.',
'LBL_POPHELP_DUPLICATE_MERGE'=>'<b>Iespējots</b>: Lauks parādīsies Dublikātu sapludināšanas funkcijā, taču nebūs pieejams izmantošanai filtra nosacījumu noteikšanai Dublikātu meklēšanas funkcijā.<br><b>Atspējots</b>: Lauks neparādīsies Dublikātu sapludināšanas funkcijā un nebūs pieejams izmantošanai filtra nosacījumu noteikšanai Dublikātu meklēšanas funkcijā.'
. '<br><b>Filtrā</b>: Lauks parādīsies Dublikātu sapludināšanas funkcijā un būs pieejams arī Dublikātu meklēšanas funkcijā.<br><b>Tikai filtrs</b>: Lauks neparādīsies Dublikātu sapludināšanas funkcijā, taču būs pieejams Dublikātu meklēšanas funkcijā.<br><b>Pēc noklusējuma izvēlēts filtrs</b>: Lauks tiks izmantots filtra nosacījuma noteikšanai pēc noklusējuma Dublikāta meklēšanas lapā, kā arī parādīsies Dublikātu sapludināšanas funkcijā.'
,
'LBL_POPHELP_CALCULATED'=>"Izveidojiet formulu, lai noteiktu vērtību šajā laukā.<br>"
   . "Darbplūsmas definīcijas, kas satur darbību un ir iestatītas, lai atjauninātu šo lauku, vairs nepildīs šo darbību.<br>"
   . "Lauki, kuros izmantotas formulas, netiks aprēķināti reāllaikā "
   . "sugar pašapkalpošanās portālā vai "
   . "Mobilās rediģēšanas skatījuma izkārtojumos.",

'LBL_POPHELP_DEPENDENT'=>"Izveidojiet formulu, lai noteiktu, vai šis lauks ir redzams izkārtojumos.<br/>"
        . "Atkarīgiem laukiem uz pārlūku balstītā mobilajā skatā tiks piemērota atkarības formula, <br/>"
        . "bet oriģinālajās lietotnēs, tādās kā Sugar Mobile for iPhone, šī formula netiks piemērota. <br/>"
        . "Sugar pašapkalpošanās portālā tiem šī formula netiks piemērota.",
'LBL_POPHELP_REQUIRED'=>"Izveidojiet formulu, lai noteiktu, vai šis lauks ir obligāts izkārtojumos.<br/>"
    . "Obligātajiem laukiem uz pārlūku balstītā mobilajā skatā tiks piemērota formula, <br/>"
    . "bet oriģinālajās lietotnēs, tādās kā Sugar Mobile for iPhone, šī formula netiks piemērota. <br/>"
    . "Sugar pašapkalpošanās portālā tiem šī formula netiks piemērota.",
'LBL_POPHELP_READONLY'=>"Izveidojiet formulu, lai noteiktu, vai šis lauks ir tikai lasāms izkārtojumos.<br/>"
        . "Tikai lasāmajiem laukiem uz pārlūku balstītā mobilajā skatā tiks piemērota formula, <br/>"
        . "bet oriģinālajās lietotnēs, tādās kā Sugar Mobile for iPhone, šī formula netiks piemērota. <br/>"
        . "Sugar pašapkalpošanās portālā tiem šī formula netiks piemērota.",
'LBL_POPHELP_GLOBAL_SEARCH'=>'Atlasiet, lai izmantotu šo lauku, kad meklējat ierakstus, šajā modulī izmantojot globālo meklēšanu.',
//Revert Module labels
'LBL_RESET' => 'Atiestatīt',
'LBL_RESET_MODULE' => 'Atiestatīt moduli',
'LBL_REMOVE_CUSTOM' => 'Noņemt pielāgojumus',
'LBL_CLEAR_RELATIONSHIPS' => 'Dzēst relācijas',
'LBL_RESET_LABELS' => 'Atiestatīt etiķetes',
'LBL_RESET_LAYOUTS' => 'Atiestatīt izkārtojumus',
'LBL_REMOVE_FIELDS' => 'Noņemt pielāgotos laukus',
'LBL_CLEAR_EXTENSIONS' => 'Notīrīt paplašinājumus',

'LBL_HISTORY_TIMESTAMP' => 'Laika zīmogs',
'LBL_HISTORY_TITLE' => 'vēsture',

'fieldTypes' => array(
                'varchar'=>'Teksta lauks',
                'int'=>'Vesels skaitlis',
                'float'=>'Peldošs',
                'bool'=>'Izvēles rūtiņa',
                'enum'=>'Nolaižamā izvēlne',
                'multienum' => 'Vairākizvēle',
                'date'=>'Datums',
                'phone' => 'Tālrunis',
                'currency' => 'Valūta',
                'html' => 'HTML',
                'radioenum' => 'Radio',
                'relate' => 'Attiecas uz',
                'address' => 'Adrese',
                'text' => 'Teksta zona',
                'url' => 'URL',
                'iframe' => 'IFrame',
                'image' => 'Attēls',
                'encrypt'=>'Šifrēt',
                'datetimecombo' =>'Datums/laiks',
                'decimal'=>'Decimālais',
                'autoincrement' => 'Automātiskā palielināšana',
                'actionbutton' => 'Darbības poga',
),
'labelTypes' => array(
    "" => "Biežāk izmantotās etiķetes",
    "all" => "Visas etiķetes",
),

'parent' => 'Elastīgi saistīt',

'LBL_ILLEGAL_FIELD_VALUE' =>"Nolaižamās izvēlnes atslēga nedrīkst saturēt pēdiņas.",
'LBL_CONFIRM_SAVE_DROPDOWN' =>"Esat izvēlējies šo elementu izņemšanai no nolaižamās izvēlnes saraksta. Jebkuri nolaižamās izvēlnes saraksta lauki, kuri izmanto šo sarakstu vairs nesaturēs šo elementu, un tas vairs nebūs pieejams atlasīšanai no nolaižamās izvēlnes laukiem. Vai vēlaties turpināt?",
'LBL_POPHELP_VALIDATE_US_PHONE'=>"Select to validate this field for the entry of a 10-digit<br>" .
                                 "phone number, with allowance for the country code 1, and<br>" .
                                 "to apply a U.S. format to the phone number when the record<br>" .
                                 "is saved. The following format will be applied: (xxx) xxx-xxxx.",
'LBL_ALL_MODULES'=>'Visi moduļi',
'LBL_RELATED_FIELD_ID_NAME_LABEL' => '{0} (saistīts ar {1} ID)',
'LBL_HEADER_COPY_FROM_LAYOUT' => 'Kopēt no izkārtojuma',
'LBL_RELATIONSHIP_TYPE' => 'Relācija',

// Edit Labels
'LBL_COMPARISON_LANGUAGE' => 'Salīdzināšanas valoda',
'LBL_LABEL_NOT_TRANSLATED' => 'Šo etiķeti nevar tulkot',
);
