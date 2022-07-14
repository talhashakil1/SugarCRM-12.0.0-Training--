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
    'LBL_LOADING' => 'Laden' /*for 508 compliance fix*/,
    'LBL_HIDEOPTIONS' => 'Hide Options' /*for 508 compliance fix*/,
    'LBL_DELETE' => 'Verwijderen' /*for 508 compliance fix*/,
    'LBL_POWERED_BY_SUGAR' => 'Aangedreven door SugarCRM' /*for 508 compliance fix*/,
    'LBL_ROLE' => 'Role',
    'LBL_BASE_LAYOUT' => 'Basislay-out',
    'LBL_FIELD_NAME' => 'Veldnaam',
    'LBL_FIELD_VALUE' => 'Waarde',
    'LBL_LAYOUT_DETERMINED_BY' => 'Lay-out bepaald door:',
    'layoutDeterminedBy' => [
        'std' => 'Standaard lay-out',
        'role' => 'Rol',
        'dropdown' => 'Vervolgkeuzeveld',
    ],
    'LBL_DELETE_CUSTOM_LAYOUTS' => 'Alle aangepaste lay-outs worden verwijderd. Weet u zeker dat u de huidige lay-outdefinities wilt wijzigen?',
'help'=>array(
    'package'=>array(
            'create'=>'Provide a <b>Name</b> for the package.  The name you enter must be alphanumeric and contain no spaces. (Example: HR_Management)<br/><br/> You can provide <b>Author</b> and <b>Description</b> information for package. <br/><br/>Click <b>Save</b> to create the package.',
            'modify'=>'De eigenschappen en mogelijke acties voor het <b>Pakket</b> verschijnen hier.<br><br>U kunt de <b>Naam</b>, <b>Auteur</b> en <b>Beschrijving</b> van het pakket wijzigen en u kunt alle modules van het pakket bekijken en personaliseren.<br><br>Klik op <b>Nieuwe module</b> om een module voor het pakket aan te maken.<br><br>Als het pakket ten minste één module bevat kunt u het pakket <br>Publiceren</b> en <b>Inzetten</b>, maar u kunt ook de wijzigingen die u heeft doorgevoerd in het pakket <b>Exporteren</b>.',
            'name'=>'This is the <b>Name</b> of the current package. <br/><br/>The name you enter must be alphanumeric, start with a letter and contain no spaces. (Example: HR_Management)',
            'author'=>'Dit is de <b>Auteur</b> die tijdens installatie wordt getoond als de naam van de entiteit die het pakket heeft aangemaakt.<br><br>De auteur kan een persoon of een bedrijf zijn.',
            'description'=>'Dit is de <b>Beschrijving</b> van het pakket die tijdens installatie wordt getoond.',
            'publishbtn'=>'Klik op <b>Publiceren</b> om alle ingevoerde gegevens op te slaan en een .zip bestand aan te maken met de geïnstalleerde versie van het pakket.<br><br>Gebruik <b>Module lader</b> om het .zip bestand te uploaden en het pakket te installeren.',
            'deploybtn'=>'Klik opk <b>Inzetten</b> om alle ingevoerde gegevens op te slaan en het pakket op het huidige exemplaar te installeren, inclusief alle modules.',
            'duplicatebtn'=>'Klik op <b>Dupliceren</b> om de inhoud van het pakket te kopiëren naar een nieuw pakket en het nieuwe pakket weer te geven. <br/><br/>Voor het nieuwe pakket zal automatisch een nieuwe naam worden gegenereerd door een cijfer toe te voegen aan het einde van de naam van het pakket. Dit cijfer wordt gebruikt voor de nieuwe naam. U kunt de naam van het nieuwe pakket wijzigen door een nieuwe <b>naam</b> in te voeren en op <b>Opslaan</b> te klikken.',
            'exportbtn'=>'Klik op <b>Exporteren</b> om een .zip bestand aan te maken dat de wijzigingen bevat die u heeft doorgevoerd in het pakket.<br><br>Het gegenereerde bestand is geen versie van het pakket die u kunt installeren.<br><br>Gebruik <b>Module lader</b> om het .zip bestand te importeren en om het pakket, inclusief de wijzigingen, in de Module bouwer te bekijken.',
            'deletebtn'=>'Klik op <b>Verwijderen</b> om dit pakket en alle bestanden die er betrekking op hebben te verwijderen.',
            'savebtn'=>'Klik op <b>Opslaan</b> om alle ingevoerde gegevens die betrekking hebben op het pakket op te slaan.',
            'existing_module'=>'Klik op het pictogram <b>Module</b> om de eigenschappen te bewerken en de velden, relaties in layouts te wijzigen die betrekking hebben op de module.',
            'new_module'=>'Klik op <b>Nieuwe module</b> om een nieuwe module aan te maken voor dit pakket.',
            'key'=>'Deze 5-cijferige, alfanumerieke <b>Sleutel</b> wordt gebruikt als voorvoegsel van alle mappen, klasnamen en databasetabellen van alle modules in het huidige pakket.<br><br>De sleutel wordt gebruikt om unieke namen binnen de tabel te maken.',
            'readme'=>'Klik om <b>Leesmij</b>-tekst toe te voegen aan dit pakket.<br><br>De Leesmij blijft beschikbaar ten tijde van de installatie.',

),
    'main'=>array(

    ),
    'module'=>array(
        'create'=>'Voer een <b>Naam</b> voor de module in. Het <b>Label</b> dat u invoert verschijnt in het navigatietabblad. <br/><br/>Kies om een navigatietabblad voor de module weer te geven door het selectievakje <b>Navigatietabblad</b> te selecteren.<br/><br/>Selecteer het selectievakje <b>Teambeveiliging</b> om een teamselectieveld binnen de modulerecords toe te voegen. <br/><br/>Kies vervolgens het type module dat u wilt aanmaken. <br/><br/>Selecteer een type sjabloon. Elk sjabloon bevat een specifieke set velden, evenals vooraf gedefinieerde layouts, die u als basis kunt gebruiken voor uw module. <br/><br/>Klik op <b>Opslaan</b> om de module aan te maken.',
        'modify'=>'U kunt de eigenschappen van de module wijzigen of de <b>Velden</b>, <b>Relaties</b> en <b>Layouts</b> aanpassen die betrekking hebben op de module.',
        'importable'=>'Door het selectievakje <b>Importeerbaar</b> te selecteren kunt u deze module importeren.<br><br>Een link naar de wizard Importeren verschijnt in het sneltoetsenpaneel in de module. De wizard Importeren verzorgt het importeren van de gegevens uit externe bronnen in een aangepaste module.',
        'team_security'=>'Checking the <b>Team Security</b> checkbox will enable team security for this module.  <br/><br/>If team security is enabled, the Team selection field will appear within the records in the module',
        'reportable'=>'Door dit vakje te selecteren kunnen er rapporten van de module worden gegenereerd.',
        'assignable'=>'Door dit vakje te selecteren kan een record in deze module worden toegewezen aan een geselecteerde gebruiker.',
        'has_tab'=>'Door <b>Navigatietabblad</b> te selecteren wordt een navigatietabblad voor de module getoond.',
        'acl'=>'Door dit vakje te selecteren wordt de toegangsbediening van deze module ingeschakeld, inclusief veldniveaubeveiliging.',
        'studio'=>'Door dit vakje te selecteren kunnen beheerders deze module aanpassen binnen Studio.',
        'audit'=>'Door dit vakje te selecteren wordt auditering voor deze module ingeschakeld. Wijzigingen van bepaalde velden worden opgemerkt zodat beheerders de wijzigingsgeschiedenis kunnen bekijken.',
        'viewfieldsbtn'=>'Klik op <b>Velden bekijken</b> om de velden te bekijken die bij de module horen en om aangepaste velden aan te maken en te bewerken.',
        'viewrelsbtn'=>'Klik op <b>Relaties bekijken</b> om de relaties te bekijken die bij deze module horen en om nieuwe relaties aan te maken.',
        'viewlayoutsbtn'=>'Klik op <b>Layouts bekijken</b> om de layouts te bekijken voor de module en om de veldindeling binnen de layouts te wijzigen.',
        'viewmobilelayoutsbtn' => 'Klik p[ <b>Mobiele layouts bekijken</b> om de mobiele layouts voor de module te bekijken en om de veldindeling binnen de layouts te wijzigen.',
        'duplicatebtn'=>'Klik op <b>Dupliceren</b> om de eigenschappen van de module naar een nieuwe module te kopiëren en de nieuwe module weer te geven. <br/><br/>Er zal voor de nieuwe module automatisch een nieuwe naam worden gegenereerd door een cijfer aan het einde van de naam van de module toe te voegen en een nieuwe naam aan te maken.',
        'deletebtn'=>'Klik op <b>Verwijderen</b> om deze module te verwijderen.',
        'name'=>'Dit is de <b>Naam</b> van de huidige module.<br/><br/>De naam moet alfanumeriek zijn en moet met een letter beginnen. Deze naam mag geen spaties bevatten (Voorbeeld: HR_Management)',
        'label'=>'This is the <b>Label</b> that will appear in the navigation tab for the module.',
        'savebtn'=>'Klik op <b>Opslaan</b> om alle ingevoerde gegevens die betrekking hebben op de module op te slaan.',
        'type_basic'=>'Het <b>Basis</b> type sjabloon bevat basisvelden zoals de velden Naam, Toegewezen aan, Team, Datum aangemaakt en Beschrijving.',
        'type_company'=>'Het <b>Bedrijf</b> type sjabloon bevat organisatiespecifieke velden zoals Bedrijfsnaam, Industrie en Factuuradres.<br/><br/>Gebruik dit sjabloon om modules aan te maken die lijken op de standaard Accounts module.',
        'type_issue'=>'Het <b>Probleem</b> type sjabloon bevat casus- en bugspecifieke velden zoals Nummer, Status, Prioriteit en Beschrijving.<br/><br/>Gebruik dit sjabloon om modules aan te maken die op de standaard modules Casus en Bug tracker lijken.',
        'type_person'=>'Het <b>Persoon</b> type sjabloon bevat persoonsgebonden velden zoals Aanhef, Titel, Naam, Adres en Telefoonnummer.<br/><br/>Gebruik dit sjabloon om modules aan te maken die op de standaard modules Contactpersonen en Leads lijken.',
        'type_sale'=>'Het <b>Verkoop</b> type sjabloon bevat specifieke velden voor mogelijkheden, zoals Leadbron, Fase, Bedrag en Kans. <br/><br/>Gebruik dit sjabloon om modules aan te maken die op de standaard module Mogelijkheden lijken.',
        'type_file'=>'Het <b>Bestand</b> type sjabloon bevat documentspecifieke velden zoals Bestandsnaam, Type document en Publicatiedatum.<br><br>Gebruik dit sjabloon om modules aan te maken die op de standaard module Documenten lijken.',

    ),
    'dropdowns'=>array(
        'default' => 'Alle <b>Vervolgkeuzelijsten</b> voor de toepassing staan hier.<br><br>De vervolgkeuzelijsten kunnen worden gebruikt voor vervolgkeuzelijsten in elke module.<br><br>Om wijzigingen door te voeren in een bestaande vervolgkeuzelijst klikt u op de naam van de vervolgkeuzelijst.<br><br>Klik op <b>Vervolgkeuzelijst toevoegen</b> om een nieuwe vervolgkeuzelijst aan te maken.',
        'editdropdown'=>'Vervolgkeuzelijsten kunnen worden gebruikt voor standaard of aangepaste vervolgkeuzevelden in elke module.<br><br>Voer een <b>Naam</b> in voor de vervolgkeuzelijst.<br><br>Als taalpakketten in de toepassing zijn geïnstalleerd kunt u de <b>Taal</b> selecteren die u wilt gebruiken voor de onderdelen van de lijst.<br><br>In het veld <b>Naam onderdeel</b> voert u een naam in voor de optie in de vervolgkeuzelijst. Deze naam verschijnt niet in de vervolgkeuzelijst die zichtbaar is voor gebruikers.<br><br>In het veld <b>Weergavelabel</b> voert u een label in dat zichtbaar is voor gebruikers.<br><br>Nadat u de naam van het onderdeel en weergavelabel heeft ingevoerd klikt u op <b>Toevoegen</b> om het onderdeel toe te voegen aan de vervolgkeuzelijst.<br><br>Om de onderdelen in de lijst opnieuw te schikken versleept u de onderdelen naar de gewenste posities.<br><br>Om het weergavelabel van een onderdeel te bewerken klikt u op het pictogram <b>Bewerken</b> en voert u een nieuw loabel in. Om een onderdeel te verwijderen uit de vervolgkeuzelijst klikt u op het pictogram <b>Verwijderen</b>.<br><br>Om een wijziging van een weergavelabel ongedaan te maken klikt u op <b>Ongedaan maken</b>.  Om een wijziging die ongedaan gemaakt is weer te herstellen klikt u op <b>Opnieuw</b>.<br><br>Klik op <b>Opslaan</b> om de vervolgkeuzelijst op te slaan.',

    ),
    'subPanelEditor'=>array(
        'modify'	=> 'All of the fields that can be displayed in the <b>Subpanel</b> appear here.<br><br>The <b>Default</b> column contains the fields that are displayed in the Subpanel.<br/><br/>The <b>Hidden</b> column contains fields that can be added to the Default column.'
    . '<br/><br/><!--not_in_theme!--><img src="themes/default/images/SugarLogic/icon_dependent.png"/>Indicates a Dependent field that may or may not be visible based on the value of a formula.<br/><!--not_in_theme!--><img src="themes/default/images/SugarLogic/icon_calculated.png" /> Indicates a Calculated field whose value will be automatically determined based on a formula.'
    ,
        'savebtn'	=> 'Klik p[ <b>Opslaan & Inzetten</b> om de wijzigingen die u heeft doorgevoerd op te slaan en ze actief te maken binnen de module.',
        'historyBtn'=> 'Klik op <b>Geschiedenis bekijken</b> om een eerder opgeslagen layout in de geschiedenis te bekijken en te herstellen.',
        'historyRestoreDefaultLayout'=> 'Klik op <b>Standaard layout herstellen</b> om een weergave naar de originele layout te herstellen.',
        'Hidden' 	=> '<b>Verborgen</b> velden verschijnen niet in het subpaneel.',
        'Default'	=> '<b>Standaard</b> velden verschijnen in het subpaneel.',

    ),
    'listViewEditor'=>array(
        'modify'	=> 'All of the fields that can be displayed in the <b>ListView</b> appear here.<br><br>The <b>Default</b> column contains the fields that are displayed in the ListView by default.<br/><br/>The <b>Available</b> column contains fields that a user can select in the Search to create a custom ListView. <br/><br/>The <b>Hidden</b> column contains fields that can be added to the Default or Available column.'
    . '<br/><br/><!--not_in_theme!--><img src="themes/default/images/SugarLogic/icon_dependent.png"/>Indicates a Dependent field that may or may not be visible based on the value of a formula.<br/><!--not_in_theme!--><img src="themes/default/images/SugarLogic/icon_calculated.png" /> Indicates a Calculated field whose value will be automatically determined based on a formula.'
    ,
        'savebtn'	=> 'Klik p[ <b>Opslaan & Inzetten</b> om de wijzigingen die u heeft doorgevoerd op te slaan en ze actief te maken binnen de module.',
        'historyBtn'=> 'Klik op <b>Geschiedenis bekijken</b> om een eerder opgeslagen layout in de geschiedenis te bekijken en te herstellen.<br><br><b>Herstellen</b> binnen <b>Geschiedenis bekijken</b> herstelt het vervangen veld door eerder opgeslagen layouts. Om veldlabels te wijzigen klikt u op het pictogram Bewerken naast elk veld.',
        'historyRestoreDefaultLayout'=> 'Klik op <b>Standaard layout herstellen</b> om een weergave naar de originele layout te herstellen.<br><br><b>Standaard layout herstellen</b> herstelt alleen het vervangen veld door de originele layout. Om de veldlabels te wijzigen klikt u op het pictogram Bewerken naast elk veld.',
        'Hidden' 	=> '<b>Verborgen</b> velden die momenteel niet beschikbaar zijn voor gebruikers in de Lijstweergaves.',
        'Available' => '<b>Beschikbare</b> velden worden niet standaard weergegeven maar kunnen door gebruikers wel aan de Lijstweergaves worden toegevoegd.',
        'Default'	=> '<b>Standaard</b> velden verschijnen in Lijstweergaves die niet door gebruikers zijn aangepast.'
    ),
    'popupListViewEditor'=>array(
        'modify'	=> 'All of the fields that can be displayed in the <b>ListView</b> appear here.<br><br>The <b>Default</b> column contains the fields that are displayed in the ListView by default.<br/><br/>The <b>Hidden</b> column contains fields that can be added to the Default or Available column.'
    . '<br/><br/><!--not_in_theme!--><img src="themes/default/images/SugarLogic/icon_dependent.png"/>Indicates a Dependent field that may or may not be visible based on the value of a formula.<br/><!--not_in_theme!--><img src="themes/default/images/SugarLogic/icon_calculated.png" /> Indicates a Calculated field whose value will be automatically determined based on a formula.'
    ,
        'savebtn'	=> 'Klik p[ <b>Opslaan & Inzetten</b> om de wijzigingen die u heeft doorgevoerd op te slaan en ze actief te maken binnen de module.',
        'historyBtn'=> 'Klik op <b>Geschiedenis bekijken</b> om een eerder opgeslagen layout in de geschiedenis te bekijken en te herstellen.<br><br><b>Herstellen</b> binnen <b>Geschiedenis bekijken</b> herstelt het vervangen veld door eerder opgeslagen layouts. Om veldlabels te wijzigen klikt u op het pictogram Bewerken naast elk veld.',
        'historyRestoreDefaultLayout'=> 'Klik op <b>Standaard layout herstellen</b> om een weergave naar de originele layout te herstellen.<br><br><b>Standaard layout herstellen</b> herstelt alleen het vervangen veld door de originele layout. Om de veldlabels te wijzigen klikt u op het pictogram Bewerken naast elk veld.',
        'Hidden' 	=> '<b>Verborgen</b> velden die momenteel niet beschikbaar zijn voor gebruikers in de Lijstweergaves.',
        'Default'	=> '<b>Standaard</b> velden verschijnen in Lijstweergaves die niet door gebruikers zijn aangepast.'
    ),
    'searchViewEditor'=>array(
        'modify'	=> 'All of the fields that can be displayed in the <b>Search</b> form appear here.<br><br>The <b>Default</b> column contains the fields that will be displayed in the Search form.<br/><br/>The <b>Hidden</b> column contains fields available for you as an admin to add to the Search form.'
    . '<br/><br/><!--not_in_theme!--><img src="themes/default/images/SugarLogic/icon_dependent.png"/>Indicates a Dependent field that may or may not be visible based on the value of a formula.<br/><!--not_in_theme!--><img src="themes/default/images/SugarLogic/icon_calculated.png" /> Indicates a Calculated field whose value will be automatically determined based on a formula.'
    . '<br/><br/>This configuration applies to popup search layout in legacy modules only.',
        'savebtn'	=> 'Door op <b>Opslaan & Inzetten</b> te klikken worden alle huidige wijzigingen opgeslagen en actief gemaakt',
        'Hidden' 	=> '<b>Verborgen</b> velden verschijnen niet in Zoeken.',
        'historyBtn'=> 'Klik op <b>Geschiedenis bekijken</b> om een eerder opgeslagen layout in de geschiedenis te bekijken en te herstellen.<br><br><b>Herstellen</b> binnen <b>Geschiedenis bekijken</b> herstelt het vervangen veld door eerder opgeslagen layouts. Om veldlabels te wijzigen klikt u op het pictogram Bewerken naast elk veld.',
        'historyRestoreDefaultLayout'=> 'Klik op <b>Standaard layout herstellen</b> om een weergave naar de originele layout te herstellen.<br><br><b>Standaard layout herstellen</b> herstelt alleen het vervangen veld door de originele layout. Om de veldlabels te wijzigen klikt u op het pictogram Bewerken naast elk veld.',
        'Default'	=> '<b>Standaard</b> velden verschijnen in Zoeken.'
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
        'saveBtn'	=> 'Klik op <b>Opslaan</b> om de wijzigingen van de layout die u heeft gedaan sinds de laatste keer dat u het heeft opgeslagen door te voeren.<br><br>De wijzigingen worden niet weergegeven in de module tot u de opgeslagen veranderingen Inzet.',
        'historyBtn'=> 'Klik op <b>Geschiedenis bekijken</b> om een eerder opgeslagen layout in de geschiedenis te bekijken en te herstellen.<br><br><b>Herstellen</b> binnen <b>Geschiedenis bekijken</b> herstelt het vervangen veld door eerder opgeslagen layouts. Om veldlabels te wijzigen klikt u op het pictogram Bewerken naast elk veld.',
        'historyRestoreDefaultLayout'=> 'Klik op <b>Standaard layout herstellen</b> om een weergave naar de originele layout te herstellen.<br><br><b>Standaard layout herstellen</b> herstelt alleen het vervangen veld door de originele layout. Om de veldlabels te wijzigen klikt u op het pictogram Bewerken naast elk veld.',
        'publishBtn'=> 'Klik op <b>Opslaan & Inzetten</b> om alle wijzigingen op te slaan van de layout die u heeft doorgevoerd sinds de laatste keer dat u het heeft opgeslagen en om de wijzigingen actief te maken in de module.<br><br>De layout wordt direct weergegeven in de module.',
        'toolbox'	=> 'De <b>Toolbox</b> bevat de <b>Prullenbak</b>, aanvullende onderdelen van de layout en de set beschikbare velden die aan de layout kunnen worden toegevoegd.<br/><br/>De onderdelen en velden van de layout kunnen in de layout worden gesleept en de onderdelen en velden van de layout kunnen uit de layout naar de Toolbox worden gesleept.<br><br>De onderdelen van de layout zijn <b>Panelen</b> en <b>Rijen</b>. Door een nieuwe rij of paneel aan de layout toe te voegen worden extra locaties in de layout vrijgemaakt voor velden.<br/><br/>Versleep de velden uit de Toolbox of layout naar een veldpositie die bezet is om de locatie van de twee velden met elkaar te wisselen.<br/><br/>Het veld <b>Vuller</b> maakt een lege ruimte in de layout waar het wordt geplaatst.',
        'panels'	=> 'Het gebied <b>Layout</b> geeft een weergave van hoe de layout verschijnt in de module zodra de wijzigingen van de layout zijn ingezet.<br/><br/>U kunt de plaats van velden en panelen wijzigen door ze naar de gewenste locatie te verslepen.<br/><br/>Verwijder onderdelen door ze naar de <b>Prullenbak</b> in de Toolbox te verslepen of voeg nieuwe onderdelen en velden toe door ze uit de <b>Toolbox</b> te slepen en neer te zetten op de gewenste locatie in de layout.',
        'delete'	=> 'Versleep eventuele onderdelen hier naartoe om ze uit de layout te verwijderen',
        'property'	=> 'Edit The label displayed for this field. <br/><b>Tab Order</b> controls in what order the tab key switches between fields.',
    ),
    'fieldsEditor'=>array(
        'default'	=> 'De <b>Velden</b> die beschikbaar zijn voor de module worden hier weergegeven.<br><br>Aangepaste velden die voor de module zijn aangemaakt verschijnen boven de velden die standaard beschikbaar zijn voor de module.<br><br>Om een veld te bewerken klikt u op de <b>Veldnaam</b>.<br/><br/>Om een nieuw veld aan te maken klikt u op <b>Veld toevoegen</b>.',
        'mbDefault'=>'De <b>Velden</b> die beschikbaar zijn voor de module worden hier weergegeven op Veldnaam.<br><br>Klik op de Veldnaam om de eigenschappen van een veld te configureren.<br><br>Om een nieuw veld aan te maken klikt u op <b>Veld toevoegen</b>. Het label en de andere eigenschappen van het nieuwe veld kunnen na aanmaak worden bewerkt door op de Veldnaam te klikken.<br><br>Nadat de module is ingezet worden de nieuwe velden die in de Module bouwer zijn aangemaakt in de ingezette module in Studio als standaard velden beschouwd.',
        'addField'	=> 'Selecteer een <b>Type gegevens</b> voor het nieuwe veld. Het type dat u selecteert bepaalt wat voor tekens kunnen worden ingevoerd voor het veld. Er kunnen bijvoorbeeld alleen cijfers worden ingevoerd in velden die van het gegevenstype Integer zijn.<br><br> Voer een <b>Naam</b> in voor het veld. De naam moet alfanumeriek zijn en mag geen spaties bevatten. Lage streepjes zijn wel geldig.<br><br> Het <b>Weergavelabel</b> is het label dat voor de velden verschijnt in de module layouts. Het <b>SysteemLabel</b> wordt gebruikt om naar het veld in de code te verwijzen.<br><br> Afhankelijk van het geselecteerde gegevenstype van het veld kunnen sommige of alle van de volgende eigenschappen worden ingesteld voor het veld:<br><br> <b>Hulptekst</b> verschijnt tijdelijk als een gebruiker over het veld zweeft en kan worden gebruikt om de gebruiker te vragen naar het type gewenste invoer.<br><br> <b>Tekst opmerking</b> is alleen zichtbaar in Studio &/of Module bouwer en kan worden gebruikt om het veld te beschrijven voor beheerders.<br><br> <b>Standaard waarde</b> verschijnt in het veld. Gebruikers kunnen een nieuwe waarde invoeren of de standaard waarde gebruiken.<br><br> Selecteer het selectievakje <b>Massa update</b> om de functie Massa update te gebruiken voor het veld.<br><br>De waarde <b>Max grootte</b> bepaalt het maximale aantal tekens dat in het veld kan worden ingevoerd.<br><br> Selecteer het selectievakje <b>Verplicht veld</b> om het veld verplicht te maken. Er moet een waarde in het veld worden ingevoerd om een record met het veld op te slaan.<br><br> Select het selectievakje <b>Rapporteerbaar</b> om de mogelijkheid te bieden dat het veld voor filters wordt gebruikt of om gegevens weer te geven in Rapporten.<br><br> Selecteer het selectievakje <b>Audit</b> om wijzigingen van het veld te volgen in het Veranderingslog.<br><br>Selecteer een optie in het veld <b>Importeerbaar</b> om toe te staan, te weigeren of te verplichten dat het veld wordt geïmporteerd in de Importeerwizard.<br><br>Selecteer een optie in het veld <b>Duplicaten Samenvoegen</b> om de functies Duplicaten samenvoegen en Duplicaten vinden in of uit te schakelen.<br><br>Voor bepaalde gegevenstypes kunnen aanvullende eigenschappen worden ingesteld.',
        'editField' => 'De eigenschappen van dit veld kunnen worden gewijzigd.<br><br>Klik op <b>Klonen</b>om een nieuw veld met dezelfde eigenschappen aan te maken.',
        'mbeditField' => 'Het <b>Weergavelabel</b> van het veld van een sjabloon kan worden gewijzigd. De andere eigenschappen van het veld kunnen niet worden gewijzigd.<br><br>Klik op <b>Klonen</b> om een nieuw veld met dezelfde eigenschappen aan te maken.<br><br>Om een veld van het sjabloon te verwijderen zodat deze niet in de module wordt weergegeven verwijdert u het veld uit de juiste <b>Layouts</b>.'

    ),
    'exportcustom'=>array(
        'exportHelp'=>'Exporteer aanpassingen die u doorgevoerd heeft in Studio door pakketten aan te maken die naar een ander Sugar exemplaar kunnen worden geüpload via de <b>Module lader</b>.<br><br> Voer eerst een <b>Pakketnaam</b> in. U kunt ook de <b>Auteur</b> en een <b>Beschrijving</b> invoeren voor pakketten.<br><br>Selecteer de module(s) die de wijzigingen bevatten die u wilt exporteren. Alleen modules met wijzigingen verschijnen ter selectie om te exporteren.<br><br>Klik vervolgens op <b>Exporteren</b> om een .zip bestand aan te maken van het pakket met de wijzigingen.',
        'exportCustomBtn'=>'Klik op <b>Exporteren</b> om een .zip bestand aan te maken van het pakket dat de wijzigingen bevat die u wilt exporteren.',
        'name'=>'Dit is de <b>Naam</b> van het pakket. Deze naam wordt tijdens installatie weergegeven.',
        'author'=>'Dit is de <b>Auteur</b> die tijdens installatie wordt weergegeven als de naam van de entiteit die het pakket heeft aangemaakt. De auteur kan een persoon of een bedrijf zijn.',
        'description'=>'Dit is de <b>Beschrijving</b> van het pakket die tijdens installatie wordt getoond.',
    ),
    'studioWizard'=>array(
        'mainHelp' 	=> 'Welkom in het gebied met de <b>Middelen voor ontwikkelaars</b>. <br/><br/>Gebruik de middelen in dit veld om standaard en aangepaste modules en velden aan te maken en te beheren.',
        'studioBtn'	=> 'Gebruik <b>Studio</b> om de modules die zijn ingezet te wijzigen.',
        'mbBtn'		=> 'Gebruik <b>Module bouwer</b> om nieuwe modules aan te maken.',
        'sugarPortalBtn' => 'Gebruik <b>Sugar Portaal Editor</b> om het Sugar Portaal te beheren en te wijzigen.',
        'dropDownEditorBtn' => 'Gebruik <b>Vervolgkeuzelijst Editor</b> om algemene vervolgkeuzes van vervolgkeuzelijsten toe te voegen en te bewerken.',
        'appBtn' 	=> 'In de toepassingsmodus kunt u verschillende eigenschappen van het programma verkrijgen, zoals hoeveel TPS rapporten worden weergegeven op de startpagina',
        'backBtn'	=> 'Terug naar de vorige stap.',
        'studioHelp'=> 'Gebruik <b>Studio</b> om te bepalen welke en hoeveel informatie wordt weergegeven in de modules.',
        'studioBCHelp' => 'indicates the module is a backward compatible module',
        'moduleBtn'	=> 'Klik om deze module te bewerken.',
        'moduleHelp'=> 'De onderdelen die u kunt bewerken voor de module verschijnen hier.<br><br>Klik op een pictogram om het te bewerken onderdeel te selecteren.',
        'fieldsBtn'	=> 'Maak <b>Velden</b> aan en wijzig ze om informatie in de module op te slaan.',
        'labelsBtn' => 'Bewerk de <b>Labels</b> die voor de velden en andere titels in de module worden weergegeven.'	,
        'relationshipsBtn' => 'Voeg nieuwe <b>Relaties</b> toe aan de module of bekijk bestaande Relaties.' ,
        'layoutsBtn'=> 'Wijzig de module <b>Layouts</b>. De layouts zijn de verschillende weergaves van de module die velden bevatten.<br><br>U kunt bepalen welke velden verschijnen en hoe zij in elke layout zijn ingedeeld.',
        'subpanelBtn'=> 'Bepaal welke velden verschijnen in de <b>Subpanelen</b> in de module.',
        'portalBtn' =>'Wijzig de <b>Layouts</b> die verschijnen in het <b>Sugar Portaal</b>.',
        'layoutsHelp'=> 'De module <b>Layouts</b> die kan worden gewijzigd verschijnt hier.<br><br>De layout weergavevelden en de veldgegevens.<br><br>Klik op een pictogram om de te bewerken layout te selecteren.',
        'subpanelHelp'=> 'De <b>Subpanelen</b> in de module die kunnen worden gewijzigd verschijnen hier.<br><br>Klik op een pictogram om de te bewerken module te selecteren.',
        'newPackage'=>'Klik op <b>Nieuw pakket</b> om een nieuw pakket aan te maken.',
        'exportBtn' => 'Klik op <b>Wijzigingen exporteren</b> om een pakket met de wijzigingen die u voor specifieke modules in Studio heeft doorgevoerd aan te maken en te downloaden.',
        'mbHelp'    => 'Gebruik <b>Module bouwer</b> om pakketten aan te maken met standaard modules die zijn gebaseerd op standaard of aangepaste objecten.',
        'viewBtnEditView' => 'Customize the module&#39;s <b>EditView</b> layout.<br><br>The EditView is the form containing input fields for capturing user-entered data.',
        'viewBtnDetailView' => 'Customize the module&#39;s <b>DetailView</b> layout.<br><br>The DetailView displays user-entered field data.',
        'viewBtnDashlet' => 'De module&#39; s <b>Sugar Dashlet</b> wijzigen, inclusief de Sugar Dashlet&#39; s Lijstweergave en Zoeken.<br><br>De Sugar Dashlet blijft beschikbaar om de pagina&#39;s in de module Start toe te voegen.',
        'viewBtnListView' => 'De layout van de module&#39; s <b>Lijstweergave</b> wijzigen.<br><br>De zoekresultaten verschijnen in de lijstweergave.',
        'searchBtn' => 'Wijzig de layout van de module&#39; s <b>Zoeken</b>.<br><br>Bepaal welke velden kunnen worden gebruikt om records te filteren die verschijnen in de lijstweergave.',
        'viewBtnQuickCreate' =>  'Customize the module&#39;s <b>QuickCreate</b> layout.<br><br>The QuickCreate form appears in subpanels and in the Emails module.',

        'searchHelp'=> 'De <b>Zoekformulieren</b> die kunnen worden gewijzigd verschijnen hier.<br><br>Zoekformulieren bevatten velden voor filterrecords.<br><br>Klik op een pictogram om de te bewerken zoeklayout te selecteren.',
        'dashletHelp' =>'De <b>Sugar Dashlet</b> layouts die kunnen worden gewijzigd verschijnen hier.<br><br>De Sugar Dashlet is beschikbaar om aan de pagina&#39;s te worden toegevoegd in de Startmodule.',
        'DashletListViewBtn' =>'De <b>Sugar Dashlet Lijstweergave</b> geeft records weer op basis van de Sugar Dashlet zoekfilters.',
        'DashletSearchViewBtn' =>'De <b>Sugar Dashlet Zoekfilterrecords</b> voor de Sugar Dashlet lijstweergave.',
        'popupHelp' =>'De <b>Popup</b> layouts die kunnen worden gewijzigd verschijnen hier.<br>',
        'PopupListViewBtn' => 'De <b>Popup Lijstweergave</b> layout wordt gebruikt om een lijst met records te tonen als één of meerdere records worden geselecteerd die bij het huidige record horen.',
        'PopupSearchViewBtn' => 'In de layout <b>Popup zoeken</b> kunt u zoeken naar records die betrekking hebben op een bestaand record en die boven de poo-up lijstweergave verschijnen in hetzelfde scherm. Legacy modules gebruiken deze layout voor pop-up zoeken, terwijl Sidecar modules de layoutconfiguratie voor zoeken gebruiken.',
        'BasicSearchBtn' => 'Wijzig het <b>Basis zoekformulier</b> dat in het Basis zoektabblad verschijnt in het gebied Zoeken voor de module.',
        'AdvancedSearchBtn' => 'Pas het <b>Geavanceerd zoekformulier</b> aan dat verschijnt in het tabblad Geavanceerd zoeken in het Zoekgebied voor de module.',
        'portalHelp' => 'Het <b>Sugar Portaal</b> beheren en aanpassen.',
        'SPUploadCSS' => 'Upload een <b>Stijlblad</b> voor het Sugar Portaal.',
        'SPSync' => '<b>Synchroniseer</b> aanpassingen naar het Sugar Portaal exemplaar.',
        'Layouts' => 'Pas de <b>Layouts</b> van de Sugar Portaal modules aan.',
        'portalLayoutHelp' => 'De modules in het Sugar Portaal verschijnen in dit gebied.<br><br>Selecteer een module om de <b>Layouts</b> te bewerken.',
        'relationshipsHelp' => 'Alle <b>Relaties</b> die bestaan tussen de module en andere ingezette modules verschijnen hier.<br><br>De <b>Naam</b> van de relatie is de door het systeem gegenereerde naam voor de relatie.<br><br>De <b>Primaire module</b> is de module die eigenaar is van de relaties. Alle eigenschappen van de relaties waarvoor de module Accounts de primaire module is worden bijvoorbeeld opgeslagen in de Accounts databasetabellen.<br><br>Het <b>Type</b> is het type relatie die bestaat tussen de Primaire module en de <b>Soortgelijke module</b>.<br><br>Klik op de titel van een kolom om te sorteren op de kolom.<br><br>Klik op een rij in de relatietabel om de eigenschappen te bekijken die aan de relatie zijn gekoppeld.<br><br>Klik op <b>Relatie toevoegen</b> om een nieuwe relatie aan te maken.<br><br>Relaties kunnen tussen elke twee ingezette modules worden aangemaakt.',
        'relationshipHelp'=>'<b>Relationships</b> can be created between the module and another deployed module.<br><br> Relationships are visually expressed through subpanels and relate fields in the module records.<br><br>Select one of the following relationship <b>Types</b> for the module:<br><br> <b>One-to-One</b> - Both modules&#39; records will contain relate fields.<br><br> <b>One-to-Many</b> - The Primary Module&#39;s record will contain a subpanel, and the Related Module&#39;s record will contain a relate field.<br><br> <b>Many-to-Many</b> - Both modules&#39; records will display subpanels.<br><br> Select the <b>Related Module</b> for the relationship. <br><br>If the relationship type involves subpanels, select the subpanel view for the appropriate modules.<br><br> Click <b>Save</b> to create the relationship.',
        'convertLeadHelp' => "Here you can add modules to the convert layout screen and modify the settings of existing ones.<br/><br/><br />        <b>Ordering:</b><br/><br />        Contacts, Accounts, and Opportunities must maintain their order. You can re-order any other module by dragging its row in the table.<br/><br/><br />        <b>Dependency:</b><br/><br />        If Opportunities is included, Accounts must either be required or removed from the convert layout.<br/><br/><br />        <b>Module:</b> The name of the module.<br/><br/><br />        <b>Required:</b> Required modules must be created or selected before the lead can be converted.<br/><br/><br />        <b>Copy Data:</b> If checked, fields from the lead will be copied to fields with the same name in the newly created records.<br/><br/><br />        <b>Delete:</b> Remove this module from the convert layout.<br/><br/>",
        'editDropDownBtn' => 'Een algemene vervolgkeuze bewerken',
        'addDropDownBtn' => 'Een nieuwe algemene vervolgkeuze toevoegen',
    ),
    'fieldsHelp'=>array(
        'default'=>'De <b>velden</b> in de module worden hier weergegeven op Veldnaam.<br><br>Het modulesjabloon bevat een vooraf gedefinieerde set velden.<br><br>Om een nieuw veld aan te maken klikt u op <b>Veld toevoegen</b>.<br><br>Om een veld te bewerken klikt u op de <b>Veldnaam</b>.<br/><br/>Nadat de module is ingezet worden de nieuwe velden, die in de Modulebouwer zijn aangemaakt, evenals de sjabloonvelden, in Studio als standaard velden beschouwd.',
    ),
    'relationshipsHelp'=>array(
        'default'=>'De <b>Relatie</b> die is aangemaakt tussen de module en andere modules verschijnen hier.<br><br>De <b>Naam</b> van de relatie is de door het systeem gegenereerde naam voor de relatie.<br><br>De <b>Primaire module</b> is de module die eigenaar is van de relaties. De eigenschappen van de relatie worden opgeslagen in de databasetabellen die bij de primaire module horen.<br><br>Het <b>Type</b> is het type relatie dat bestaat tussen de Primaire module en de <b>Soortgelijke module</b>.<br><br>Klik op de titel van een kolom om te sorteren op de kolom.<br><br>Klik op een rij in de relatietabel om de eigenschappen te bekijken en bewerken die bij de relatie horen.<br><br>Klik op <b>Relatie toevoegen</b> om een nieuwe relatie toe te voegen.',
        'addrelbtn'=>'zweef er met de muis over om een relatie toe te voegen.',
        'addRelationship'=>'<b>Relationships</b> can be created between the module and another custom module or a deployed module.<br><br> Relationships are visually expressed through subpanels and relate fields in the module records.<br><br>Select one of the following relationship <b>Types</b> for the module:<br><br> <b>One-to-One</b> - Both modules&#39; records will contain relate fields.<br><br> <b>One-to-Many</b> - The Primary Module&#39;s record will contain a subpanel, and the Related Module&#39;s record will contain a relate field.<br><br> <b>Many-to-Many</b> - Both modules&#39; records will display subpanels.<br><br> Select the <b>Related Module</b> for the relationship. <br><br>If the relationship type involves subpanels, select the subpanel view for the appropriate modules.<br><br> Click <b>Save</b> to create the relationship.',
    ),
    'labelsHelp'=>array(
        'default'=> 'De <b>Labels</b> voor de velden en andere titels in de module kunnen worden gewijzigd.<br><br>Bewerk het label door er in het veld op te klikken, een nieuw label in te voeren en op <b>Opslaan</b> te klikken.<br><br>Als taalpakketten zijn geïnstalleerd in de toepassing kunt u de <b>Taal</b> selecteren die u wilt gebruiken voor de labels.',
        'saveBtn'=>'Klik op <b>Opslaan</b> om alle wijzigingen op te slaan.',
        'publishBtn'=>'Klik op <b>Opslaan & Inzetten</b> om alle wijzigingen op te slaan en ze actief te maken.',
    ),
    'portalSync'=>array(
        'default' => 'Voer de <b>Sugar Portaal URL</b> van het portaalexemplaar om bij te werken en klik op <b>Gaan</b>.<br><br>Voer een geldige Sugar gebruikersnaam en wachtwoord in en klik op <b>Synchroniseren starten</b>.<br><br>De wijzigingen die in de <b>Layouts</b> van Sugar Portaal zijn gedaan, evenals het <b>Stijlblad</b> als die is geüpload, worden naar het geselecteerde portaalexemplaar overgebracht.',
    ),
    'portalConfig'=>array(
           'default' => '',
       ),
    'portalStyle'=>array(
        'default' => 'U kunt het uiterlijk van het Sugar Portaal aanpassen door een stijlblad te gebruiken.<br><br>Selecteer een <b>Stijlblad</b> dat u wilt uploaden.<br><br>Het stijlblad wordt de volgende keer dat er wordt gesynchroniseerd in het Sugar Portaal geïmplementeerd.',
    ),
),

'assistantHelp'=>array(
    'package'=>array(
            //custom begin
            'nopackages'=>'Om met een project te beginnen klikt u op <b>Nieuw pakket</b> om een nieuw pakket aan te maken waar u uw aangepaste module(s) in wilt onderbrengen. <br/><br/>Elk pakket kan één of meerdere modules bevatten.<br/><br/>U kunt bijvoorbeeld een pakket aanmaken dat één standaard module bevat die verband houdt met de standaard Accounts module. Ook kunt u bijvoorbeeld een pakket aanmaken dat verschillende nieuwe modules bevat die samenwerken als een project en die verband houden met elkaar en andere modules die zich reeds in de toepassing bevinden.',
            'somepackages'=>'Een <b>pakket</b> werkt als een container voor aangepaste modules, welke allemaal onderdeel zijn van één project. Het pakket kan één of meerdere aangepaste <b>modules</b> bevatten die verband houden met elkaar of met andere modules in de toepassing.<br/><br/>Nadat u een pakket heeft aangemaakt voor uw project kunt u meteen modules aanmaken voor het pakket of u kunt later terugkeren naar de Module bouwer om het project te voltooien.<br><br>Als het project is voltooid kunt u het pakket <b>Inzetten</b> om de aangepaste modules binnen de toepassing te installeren.',
            'afterSave'=>'Your new package should contain at least one module. You can create one or more custom modules for the package.<br/><br/>Click <b>New Module</b> to create a custom module for this package.<br/><br/> After creating at least one module, you can publish or deploy the package to make it available for your instance and/or other users&#39; instances.<br/><br/> To deploy the package in one step within your Sugar instance, click <b>Deploy</b>.<br><br>Click <b>Publish</b> to save the package as a .zip file. After the .zip file is saved to your system, use the <b>Module Loader</b> to upload and install the package within your Sugar instance.  <br/><br/>You can distribute the file to other users to upload and install within their own Sugar instances.',
            'create'=>'Een <b>pakket</b> functioneert als container voor aangepaste modules, welke allemaal onderdeel zijn van één project. Het pakket kan één of meer aangepaste <b>modules</b> bevatten die verband kunnen houden met elkaar of met andere modules in de toepassing.<br/><br/>Nadat u een pakket heeft aangemaakt voor uw project kunt u meteen modules aanmaken voor het pakket of u kunt later terugkeren naar de Module bouwer om het project te voltooien.',
            ),
    'main'=>array(
        'welcome'=>'Gebruik de <b>Middelen voor ontwikkelaars</b> om de standaard en aangepaste modules en velden aan te maken en te beheren. <br/><br/>Om modules te beheren in de toepassing klikt u op <b>Studio</b>. <br/><br/>Om aangepaste modules aan te maken klikt u op <b>Module bouwer</b>.',
        'studioWelcome'=>'Alle momenteel geïnstalleerde modules, waaronder standaard en in de module geladen objecten, kunnen in Studio worden gewijzigd.'
    ),
    'module'=>array(
        'somemodules'=>"Omdat het huidige pakket ten minste één module bevat kunt u de modules <b>Inzetten</b> in het pakket in uw exemplaar van Sugar of u kunt het pakket <b>Publiceren</b> zodat het in het huidige of een ander exemplaar van Sugar wordt geïnstalleerd door middel van de <b>Modulelader</b>.<br/><br/>Om het pakket direct in uw exemplaar van Sugar te installeren klikt u op <b>Inzetten</b>.<br><br>Om een .zip bestand aan te maken van het pakket, wat kan worden geladen en geïnstalleerd in het huidige exemplaar van Sugar en andere exemplaren door middel van de <b>Modulelader</b> klikt u op <b>Publiceren</b>.<br/><br/> U kunt de modules voor dit pakket in fases opbouwen en deze publiceren of inzetten wanneer u daar klaar voor bent. <br/><br/>Nadat u een pakket heeft gepubliceerd of ingezet kunt u wijzigingen doorvoeren van de eigenschappen van het pakket en de modules verder wijzigen. Vervolgens kunt u het pakket opnieuw publiceren, de publicatie ongedaan maken of de wijzigingen toepassen." ,
        'editView'=> 'Hier kunt u de bestaande velden bewerken. In het linkerpaneel kunt u de bestaande velden verwijderen of beschikbare velden toevoegen.',
        'create'=>'Als u het <b>Type</b> module aan het kiezen bent dat u wilt aanmaken, moet u het type velden onthouden dat u in de module wilt gebruiken. <br/><br/>Elk modulesjabloon bestaat uit een set velden die bij het type module horen die door de titel zijn beschreven.<br/><br/><b>Basis</b> - Bevat basisvelden die in standaard modules verschijnen zoals de velden Naam, Toegewezen aan, Team, Datum aangemaakt en Beschrijving.<br/><br/> <b>Bedrijf</b> - Bevat organisatiespecifieke velden zoals Bedrijfsnaam, Industrie en Factuuradres. Gebruik dit sjabloon om modules aan te maken die lijken op de standaard Accountsmodule.<br/><br/> <b>Persoon</b> - Bevat persoonsgebonden velden zoals Aanhef, Titel, Naam, Adres en Telefoonnummer. Gebruik dit sjabloon om modules aan te makean die lijken op de standaard modules Contactpersonen en Leads.<br/><br/><b>Probleem</b> - Bevat casus- en bugspecifieke velden zoals Nummer, Status, Prioriteit en Beschrijving. Gebruik dit sjabloon aan te maken die lijken op de standaard modules Casus en Bug tracker.<br/><br/>Opmerking: nadat u de module heeft aangemaakt kunt u de labels van de velden bewerken die door het sjabloon zijn gegeven. Ook kunt u aangepaste velden aanmaken die u aan de layouts van modules kunt toevoegen.',
        'afterSave'=>'Pas de module aan zodat hij aan uw behoeften voldoet door velden te bewerken en aan te maken, relaties te leggen met andere modules en de velden te schikken in de layouts.<br/><br/>Om de velden van het sjabloon te bekijken en de aangepaste velden in de module te beheren klikt u op <b>Velden bekijken</b>.<br/><br/>Om relaties tussen de module en andere modules aan te maken en te beheren, ongeacht of modules zich al in de toepassing bevinden of andere aangepaste modules in hetzelfde pakket, klikt u op <b>Relaties bekijken</b>.<br/><br/>Om de layouts van de module te bewerken klikt u op <b>Layouts bekijken</b>. U kunt de layouts Detailoverzicht, Weergave bewerken en Lijstweergave van de module bewerken zoals u zou doen voor de modules die zich reeds in de toepassing bevinden in Studio.<br/><br/> Om een module aan te maken met dezelfde eigenschappen als de huidige module klikt u op <b>Dupliceren</b>.  U kunt de nieuwe module verder wijzigen.',
        'viewfields'=>'De velden in de module kunt u aan naar wens aanpassen.<br/><br/>U kunt geen standaard velden verwijderen, maar u kunt ze wel uit de layout verwijderen op de Layoutpagina&#39;s. <br/><br/>U kunt snel nieuwe velden aanmaken die soortgelijke eigenschappen bevatten als bestaande velden door op <b>Klonen</b> te klikken in het formulier <b>Eigenschappen</b>. Voer eventuele nieuwe eigenschappen toe en klik op <b>Opslaan</b>.<br/><br/>Aanbevolen wordt om alle eigenschappen van de standaard velden en aangepaste velden in te stellen voordat u het pakket publiceert en installeert met de aangepaste module.',
        'viewrelationships'=>'U kunt veel-naar-veel relaties leggen tussen de huidige module en andere modules in het pakket en/of tussen de huidige module en de modules die reeds in de toepassing zijn geïnstalleerd.<br><br> Om één-naar-veel en één-op-één relaties te leggen klikt u op de velden <b>Relatie maken</b> en <b>Flexibele relatie maken</b> van de modules.',
        'viewlayouts'=>'In de <b>Detailweergave</b> kunt u aangeven welke velden beschikbaar zijn om gegevens vast te leggen.  In de <br>Detailweergave</b> kunt ook aangeven welke gegevens worden weergegeven. De weergaves hoeven niet overeen te komen. <br/><br/>Het formulier Snel aanmaken wordt weergegeven als u op <b>Aanmaken</b> klikt in het subpaneel van een module. Standaard is de layout van het formulier <b>Snel aanmaken</b> hetzelfde als de standaard layout van <b>Weergave bewerken</b>. U kunt het formulier Snel aanmaken bewerken zodat deze minder en/of verschillende velden bevat dan de layout Weergave bewerken. <br><br>U kunt de beveiliging van de module bepalen door de layout aan te passen in <b>Rolbeheer</b>.<br><br>',
        'existingModule' =>'Nadat u deze module heeft aangemaakt en gewijzigd kunt u aanvullende modules aanmaken of terugkeren naar het pakket om het te <b>Publiceren</b> of u kunt hem <b>Inzetten</b>.<br><br>Om aanvullende modules aan te maken klikt u op <b>Dupliceren</b> om een module aan te maken met dezelfde eigenschappen als de huidige module of u kunt terugkeren naar het pakket en op <b>Nieuwe module</b> klikken.<br><br> Als u klaar bent om het pakket van deze module te <b>Publiceren</b> of hem te gaan <b>Inzetten</b> keert u terug naar het pakket om deze functies uit te voeren. U kunt pakketten met ten minste één module publiceren en inzetten.',
        'labels'=> 'De labels van de standaard velden, evenals van aangepaste velden, kunnen worden gewijzigd. Door veldlabels te wijzigen worden de gegevens die in de velden zijn opgeslagen niet gewijzigd.',
    ),
    'listViewEditor'=>array(
        'modify'	=> 'Er worden links drie kolommen weergegeven. De "Standaard" kolom bevat de velden die standaard worden weergegeven in een lijstweergave, de "Beschikbaar" kolom bevat velden die een gebruiker kan kiezen om een aangepaste lijstweergave aan te maken en de "Verborgen" kolom bevat velden die momenteel zijn uitgeschakeld en die u als beheerder kunt gebruiken om toe te voegen aan de Standaard of Beschikbaar kolommen zodat gebruikers ze kunnen gebruiken.',
        'savebtn'	=> 'Door op <b>Opslaan</b> te klikken worden alle wijzigingen opgeslagen en actief gemaakt.',
        'Hidden' 	=> 'Verborgen velden zijn velden die momenteel niet beschikbaar zijn voor gebruikers ter gebruik in lijstweergaves.',
        'Available' => 'Beschikbare velden zijn velden die niet standaard worden weergegeven, maar die wel door gebruikers kunnen worden ingeschakeld.',
        'Default'	=> 'Standaard velden worden weergegeven voor gebruikers die geen aangepaste instellingen voor de lijstweergave hebben aangemaakt.'
    ),

    'searchViewEditor'=>array(
        'modify'	=> 'Er worden links twee kolommen weergegeven. De "Standaard" kolom bevat de velden die worden weergegeven in de zoekweergave en de "Verborgen" kolom bevat velden die u als beheerder kunt toevoegen aan de weergave.',
        'savebtn'	=> 'Door op <b>Opslaan & Inzetten</b> te klikken worden alle wijzigingen opgeslagen en actief gemaakt.',
        'Hidden' 	=> 'Verborgen velden zijn velden die niet in de zoekweergave worden weergegeven.',
        'Default'	=> 'Standaard velden worden in de zoekweergave weergegeven.'
    ),
    'layoutEditor'=>array(
        'default'	=> 'Er worden links twee kolommen weergegeven. In de rechterkolom, met als label Huidige layout of Voorvertoning layout, kunt u de layout van de module wijzigen. De linkerkolom, met als naam Toolbox, bevat handige onderdelen en middelen die u voor bewerking van de layout kunt gebruiken. <br/><br/>Als het layoutgebied Huidige layout heet werkt u aan een kopie van de layout die momenteel voor weergave wordt gebruikt door de module.<br/><br/>Als deze Voorvertoning layout heet werkt u aan een kopie die eerder is opgeslagen door op de knop Opslaan te drukken en die wellicht gewijzigd is ten opzichte van de versie die gebruikers van deze module zien.',
        'saveBtn'	=> 'Door op deze knop te klikken wordt d elayout opgeslagen zodat u uw wijzigingen kunt opslaan. Als u terugkeert naar deze module begint u vanuit deze gewijzigde layout. Uw layout zal echter niet zichtbaar zijn voor gebruikers van deze module totdat u op de knop Opslaan en Publiceren heeft geklikt.',
        'publishBtn'=> 'Klik op deze knop om de layout in te zetten. Dit betekent dat deze layout direct zichtbaar is voor gebruikers van deze module.',
        'toolbox'	=> 'De toolbox bevat een aantal handige functies voor het bewerken van layouts, waaronder een prullenbak, een set aanvullende onderdelen en een set beschikbare velden. Deze kunnen naar de layout worden gesleept.',
        'panels'	=> 'In dit gebied ziet u hoe uw layout eruit zal zien voor gebruikers van deze module zodra deze is ingezet.<br/><br/>U kunt onderdelen zoals velden, rijen en panelen herplaatsen door ze te verslepen. Verwijder onderdelen door ze naar de prullenbak in de toolbox te slepen of voeg nieuwe onderdelen toe door ze uit de toolbox te slepen en op de gewenste positie in de layout te zetten.'
    ),
    'dropdownEditor'=>array(
        'default'	=> 'Er worden links twee kolommen weergegeven. In de rechterkolom, met als label Huidige layout of Voorvertoning layout, kunt u de layout van de module wijzigen. De linkerkolom, met als naam Toolbox, bevat handige onderdelen en middelen die u voor bewerking van de layout kunt gebruiken. <br/><br/>Als het layoutgebied Huidige layout heet werkt u aan een kopie van de layout die momenteel voor weergave wordt gebruikt door de module.<br/><br/>Als deze Voorvertoning layout heet werkt u aan een kopie die eerder is opgeslagen door op de knop Opslaan te drukken en die wellicht gewijzigd is ten opzichte van de versie die gebruikers van deze module zien.',
        'dropdownaddbtn'=> 'Door op deze knop te klikken wordt een nieuw onderdeel aan de vervolgkeuze toegevoegd.',

    ),
    'exportcustom'=>array(
        'exportHelp'=>'Wijzigingen die in Studio worden gedaan met dit exemplaar kunnen worden ingepakt en ingezet in een ander exemplaar. <br><br>Voer een <b>Pakketnaam</b> in.  U kunt de <b>Auteur</b> en de <b>Beschrijving</b> invoeren voor het pakket.<br><br>Selecteer de module(s) die de te exporteren wijzigingen bevat. (U kunt alleen modules selecteren die wijzigingen bevatten.)<br><br>Klik op <b>Exporteren</b> om een .zip bestand met de wijzigingen aan te maken voor het pakket. Het .zip bestand kan via de <b>Module lader</b> naar een ander exemplaar worden geüpload.',
        'exportCustomBtn'=>'Click <b>Export</b> to create a .zip file for the package containing the customizations that you wish to export.',
        'name'=>'De <b>Naam</b> van het pakket wordt in Module lader weergegeven nadat het pakket is geüpload voor installatie in Studio.',
        'author'=>'The <b>Author</b> is the name of the entity that created the package. The Author can be either an individual or a company.<br><br>The Author will be displayed in Module Loader after the package is uploaded for installation in Studio.',
        'description'=>'De <b>Beschrijving</b> van het pakket wordt in Module lader weergegeven nadat het pakket is geüpload voor installatie in Studio.',
    ),
    'studioWizard'=>array(
        'mainHelp' 	=> 'Welkom bij de <b>Middelen voor ontwikkelaars</b1>. <br/><br/>Gebruik de middelen in dit gebied om standaard en aangepaste modules en velden aan te maken en te beheren.',
        'studioBtn'	=> 'Gebruik <b>Studio</b> om geïnstalleerde modules te wijzigen door de veldindeling te wijzigen, te selecteren welke velden beschikbaar zijn en door aangepaste gegevensvelden aan te maken.',
        'mbBtn'		=> 'Gebruik <b>Module bouwer</b> om nieuwe modules aan te maken.',
        'appBtn' 	=> 'Gebruik de modus Toepassing om verschillende eigenschappen van het programma te wijzigen, bijvoorbeeld hoeveel TPS rapporten worden weergegeven op de startpagina',
        'backBtn'	=> 'Terug naar de vorige stap.',
        'studioHelp'=> 'Gebruik <b>Studio</b> om geïnstalleerde modules te wijzigen.',
        'moduleBtn'	=> 'Klik om deze module te bewerken.',
        'moduleHelp'=> 'Selecteer het onderdeel van de module die u wilt bewerken',
        'fieldsBtn'	=> 'Bewerk de informatie in de module is opgeslagen door naar <b>Velden</b> te gaan in de module.<br/><br/>Hier kunt u aangepaste velden bewerken en aanmaken.',
        'layoutsBtn'=> 'Wijzig de <b>Layouts</b> van de weergave Bewerken, Details, Lijst en Zoeken.',
        'subpanelBtn'=> 'Bewerk de informatie die in de subpanelen van deze modules wordt weergegeven.',
        'layoutsHelp'=> 'Selecteer <b>Te bewerken layout</b>.<br/<br/>Om de layout te bewerken die gegevensvelden bevat om gegevens in te voeren klikt u op <b>Bewerkingsweergave</b>.<br/><br/>Om de layout te wijzigen die de gegevens weergeeft in de velden in de Bewerkingsweergave klikt u op <b>Detailweergave</b>.<br/><br/>Om de kolommen te bewerken die in de standaard lijst verschijnen klikt u op <b>Lijstweergave</b>.<br/><br/>Om het Basis en Geavanceerde zoekformulier te wijzigen klikt u op <b>Zoeken</b>.',
        'subpanelHelp'=> 'Selecteer een <b>Subpaneel</b> dat u wilt bewerken.',
        'searchHelp' => 'Selecteer een <b>Zoeken</b> layout om te bewerken.',
        'labelsBtn'	=> 'Bewerk de <b>Etiketten</b> die voor waarden in deze module worden getoond.',
        'newPackage'=>'Klik op <b>Nieuw pakket</b> om een nieuw pakket aan te maken.',
        'mbHelp'    => '<b>Welkom bij de Module bouwer.</b><br/><br/>Gebruik de <b>Module bouwer</b> om pakketten aan te maken die aangepaste modules bevatten op basis van standaard of aangepaste objecten. <br/><br/>Om te beginnen klikt u op <b>Nieuw pakket</b> om een nieuw pakket aan te maken of selecteer een pakket om te bewerken.<br/><br/> Een <b>pakket</b> functioneert als container voor aangepaste modules, welke allemaal onderdeel zijn van één project. Het pakket kan één of meerdere aangepaste modules bevatten die betrekking hebben op elkaar of op modules in de toepassing. <br/><br/>Voorbeelden: wellicht wilt u een pakket aanmaken met één aangepaste module die betrekking heeft op de standaard Accounts module. Of u kunt een pakket aanmaken met verschillende nieuwe modules die samenwerken als project en die betrekking hebben op elkaar en op modules in de toepassing.',
        'exportBtn' => 'Klik op <b>Wijzigingen exporteren</b> om een pakket aan te maken die wijzigingen bevat van specifieke modules die in Studio zijn doorgevoerd.',
    ),

),
//HOME
'LBL_HOME_EDIT_DROPDOWNS'=>'Vervolgkeuze editor',

//ASSISTANT
'LBL_AS_SHOW' => 'Assistent weergeven in de toekomst.',
'LBL_AS_IGNORE' => 'Assistent negeren in de toekomst.',
'LBL_AS_SAYS' => 'Assistent zegt:',

//STUDIO2
'LBL_MODULEBUILDER'=>'Module bouwer',
'LBL_STUDIO' => 'Studio',
'LBL_DROPDOWNEDITOR' => 'Vervolgkeuze editor',
'LBL_EDIT_DROPDOWN'=>'Vervolgkeuze bewerken',
'LBL_DEVELOPER_TOOLS' => 'Middelen voor ontwikkelaars',
'LBL_SUGARPORTAL' => 'Sugar Portaal Editor',
'LBL_SYNCPORTAL' => 'Portaal synchroniseren',
'LBL_PACKAGE_LIST' => 'Pakketlijst',
'LBL_HOME' => 'Start',
'LBL_NONE'=>'-Geen-',
'LBL_DEPLOYE_COMPLETE'=>'Inzetten voltooid',
'LBL_DEPLOY_FAILED'   =>'Er heeft zich een fout voorgedaan tijdens het inzetproces. Uw pakket is mogelijk niet juist geïnstalleerd.',
'LBL_ADD_FIELDS'=>'Aangepaste velden toevoegen',
'LBL_AVAILABLE_SUBPANELS'=>'Beschikbare subpanelen',
'LBL_ADVANCED'=>'Advanced',
'LBL_ADVANCED_SEARCH'=>'Geavanceerd zoeken',
'LBL_BASIC'=>'Basis',
'LBL_BASIC_SEARCH'=>'Basis zoeken',
'LBL_CURRENT_LAYOUT'=>'Layout',
'LBL_CURRENCY' => 'Currency',
'LBL_CUSTOM' => 'Aangepast',
'LBL_DASHLET'=>'Sugar Dashlet',
'LBL_DASHLETLISTVIEW'=>'Sugar Dashlet Lijstweergave',
'LBL_DASHLETSEARCH'=>'Sugar Dashlet zoeken',
'LBL_POPUP'=>'Pop-upweergave',
'LBL_POPUPLIST'=>'Popup Lijstweergave',
'LBL_POPUPLISTVIEW'=>'Popup Lijstweergave',
'LBL_POPUPSEARCH'=>'Pop-up zoeken',
'LBL_DASHLETSEARCHVIEW'=>'Sugar Dashlet zoeken',
'LBL_DISPLAY_HTML'=>'HTML code weergeven',
'LBL_DETAILVIEW'=>'Detail weergave',
'LBL_DROP_HERE' => '[Hier neerzetten]',
'LBL_EDIT'=>'Edit',
'LBL_EDIT_LAYOUT'=>'Edit Layout',
'LBL_EDIT_ROWS'=>'Rijen bewerken',
'LBL_EDIT_COLUMNS'=>'Kolommen bewerken',
'LBL_EDIT_LABELS'=>'Labels bewerken',
'LBL_EDIT_PORTAL'=>'Edit Portal for',
'LBL_EDIT_FIELDS'=>'Velden bewerken',
'LBL_EDITVIEW'=>'Bewerkingsweergave',
'LBL_FILTER_SEARCH' => "Zoeken",
'LBL_FILLER'=>'(vuller)',
'LBL_FIELDS'=>'Fields',
'LBL_FAILED_TO_SAVE' => 'Opslaan mislukt',
'LBL_FAILED_PUBLISHED' => 'Publiceren mislukt',
'LBL_HOMEPAGE_PREFIX' => 'Mijn',
'LBL_LAYOUT_PREVIEW'=>'Voorvertoning layout',
'LBL_LAYOUTS'=>'Layouts',
'LBL_LISTVIEW'=>'Lijstweergave',
'LBL_RECORDVIEW'=>'Recordweergave',
'LBL_RECORDDASHLETVIEW'=>'Recordweergave dashlet',
'LBL_PREVIEWVIEW'=>'Preview View',
'LBL_MODULE_TITLE' => 'Studio',
'LBL_NEW_PACKAGE' => 'Nieuw pakket',
'LBL_NEW_PANEL'=>'Nieuw paneel',
'LBL_NEW_ROW'=>'Nieuwe rij',
'LBL_PACKAGE_DELETED'=>'Pakket verwijderd',
'LBL_PUBLISHING' => 'Publiceren ...',
'LBL_PUBLISHED' => 'Gepubliceerd',
'LBL_SELECT_FILE'=> 'Bestand selecteren',
'LBL_SAVE_LAYOUT'=> 'Layout opslaan',
'LBL_SELECT_A_SUBPANEL' => 'Selecteer een subpaneel',
'LBL_SELECT_SUBPANEL' => 'Selecteer subpaneel',
'LBL_SUBPANELS' => 'Subpanelen',
'LBL_SUBPANEL' => 'Subpaneel',
'LBL_SUBPANEL_TITLE' => 'Title:',
'LBL_SEARCH_FORMS' => 'Zoeken',
'LBL_STAGING_AREA' => 'Fasegebied (sleep hier onderdelen naartoe)',
'LBL_SUGAR_FIELDS_STAGE' => 'Sugar velden (klik op onderdelen om toe te voegen aan het fasegebied)',
'LBL_SUGAR_BIN_STAGE' => 'Sugar bak (klik op onderdelen om ze aan het fasegebied toe te voegen)',
'LBL_TOOLBOX' => 'Toolbox',
'LBL_VIEW_SUGAR_FIELDS' => 'Sugar velden bekijken',
'LBL_VIEW_SUGAR_BIN' => 'Sugar bak bekijken',
'LBL_QUICKCREATE' => 'Snel aanmaken',
'LBL_EDIT_DROPDOWNS' => 'Een algemene vervolgkeuze bewerken',
'LBL_ADD_DROPDOWN' => 'Een nieuwe algemene vervolgkeuze toevoegen',
'LBL_BLANK' => '-leeg-',
'LBL_TAB_ORDER' => 'Volgorde tabblad',
'LBL_TAB_PANELS' => 'Tabbladen inschakelen',
'LBL_TAB_PANELS_HELP' => 'Als tabbladen zijn ingeschakeld gebruikt u het "type" vervolgkeuzeveld<br />voor elk onderdeel om te definiëren hoe het wordt weergegeven (tabblad of paneel)',
'LBL_TABDEF_TYPE' => 'Type weergave',
'LBL_TABDEF_TYPE_HELP' => 'Selecteer hoe dit onderdeel moet worden weergegeven. Deze optie gaat alleen van kracht als u tabbladen heeft ingeschakeld voor deze weergave.',
'LBL_TABDEF_TYPE_OPTION_TAB' => 'Tabblad',
'LBL_TABDEF_TYPE_OPTION_PANEL' => 'Paneel',
'LBL_TABDEF_TYPE_OPTION_HELP' => 'Selecteer Paneel om dit paneel weer te geven binnen de weergave van de layout. Selecteer Tabblad om dit paneel weer te geven binnen een apart tabblad binnen de layout. Als Tabblad is gespecificeerd voor een paneel worden volgende panelen die voor weergave als Paneel zijn ingesteld in het tabblad weergegeven. <br/>Er wordt een nieuw Tabblad gestart voor het volgende paneel waarvoor Tabblad is geselecteerd. Als Tabblad is geselecteerd voor een paneel onder het eerste paneel moet het eerste paneel een Tabblad zijn.',
'LBL_TABDEF_COLLAPSE' => 'Inklappen',
'LBL_TABDEF_COLLAPSE_HELP' => 'Selecteren om de standaard status van dit paneel ingeklapt te maken.',
'LBL_DROPDOWN_TITLE_NAME' => 'Name',
'LBL_DROPDOWN_LANGUAGE' => 'Language',
'LBL_DROPDOWN_ITEMS' => 'Onderdelenlijst',
'LBL_DROPDOWN_ITEM_NAME' => 'Naam onderdeel',
'LBL_DROPDOWN_ITEM_LABEL' => 'Weergavelabel',
'LBL_SYNC_TO_DETAILVIEW' => 'Synchroniseren naar detailweergave',
'LBL_SYNC_TO_DETAILVIEW_HELP' => 'Select this option to sync this EditView layout to the corresponding DetailView layout. Fields and field placement in the EditView<br>will be sync&#39;d and saved to the DetailView automatically upon clicking Save or Save & Deploy in the EditView. <br>Layout changes will not be able to be made in the DetailView.',
'LBL_SYNC_TO_DETAILVIEW_NOTICE' => 'This DetailView is sync&#39;d with the corresponding EditView.<br> Fields and field placement in this DetailView reflect the fields and field placement in the EditView.<br> Changes to the DetailView cannot be saved or deployed within this page. Make changes or un-sync the layouts in the EditView.',
'LBL_COPY_FROM' => 'Kopiëren van',
'LBL_COPY_FROM_EDITVIEW' => 'Kopiëren uit bewerkingsweergave',
'LBL_DROPDOWN_BLANK_WARNING' => 'Er zijn waarden nodig voor zowel de Naam onderdeel als het Weergavelabel. Om een leeg onderdeel toe te voegen klikt u op Toevoegen zonder een waarde in te voeren voor de Naam onderdeel en het Weergavelabel.',
'LBL_DROPDOWN_KEY_EXISTS' => 'Sleutel bestaat steeds in lijst',
'LBL_DROPDOWN_LIST_EMPTY' => 'De lijst moet minimaal één ingeschakeld onderdeel bevatten',
'LBL_NO_SAVE_ACTION' => 'Kan de actie Opslaan niet vinden voor deze weergave.',
'LBL_BADLY_FORMED_DOCUMENT' => 'Studio2:establishLocation: slecht gevormd document',
// @TODO: Remove this lang string and uncomment out the string below once studio
// supports removing combo fields if a member field is on the layout already.
'LBL_INDICATES_COMBO_FIELD' => '** Geeft een combinatieveld aan. Een combinatieveld is een verzameling individuele velden. "Adres" is bijvoorbeeld een combinatieveld bestaande uit "Straat en huisnummer", "Stad", "Postcode", "Provincie" en "Land".<br><br>Dubbelklik op een combinatieveld om te zien welke velden het bevat.',
'LBL_COMBO_FIELD_CONTAINS' => 'bevat:',

'LBL_WIRELESSLAYOUTS'=>'Mobiele layouts',
'LBL_WIRELESSEDITVIEW'=>'Mobiele bewerkingsweergave',
'LBL_WIRELESSDETAILVIEW'=>'Mobile Detail weergave',
'LBL_WIRELESSLISTVIEW'=>'Mobile Lijstweergave',
'LBL_WIRELESSSEARCH'=>'Mobiel zoeken',

'LBL_BTN_ADD_DEPENDENCY'=>'Afhankelijkheid toevoegen',
'LBL_BTN_EDIT_FORMULA'=>'Formule bewerken',
'LBL_DEPENDENCY' => 'Afhankelijkheid',
'LBL_DEPENDANT' => 'Afhankelijk',
'LBL_CALCULATED' => 'Berekende waarde',
'LBL_READ_ONLY' => 'Alleen lezen',
'LBL_FORMULA_BUILDER' => 'Formulebouwer',
'LBL_FORMULA_INVALID' => 'Ongeldige formule',
'LBL_FORMULA_TYPE' => 'The formula must be of type',
'LBL_NO_FIELDS' => 'Geen velden gevonden',
'LBL_NO_FUNCS' => 'Geen functies gevonden',
'LBL_SEARCH_FUNCS' => 'Functies zoeken...',
'LBL_SEARCH_FIELDS' => 'Velden zoeken...',
'LBL_FORMULA' => 'Formule',
'LBL_DYNAMIC_VALUES_CHECKBOX' => 'Afhankelijk',
'LBL_DEPENDENT_DROPDOWN_HELP' => 'Versleep opties uit de lijst links van de beschikbare opties in de afhankelijke vervolgkeuze van de lijsten aan de rechterkant om de opties beschikbaar te stellen als de bovenliggende optie is geselecteerd. Als er geen onderdelen onder een bovenliggende optie zijn als de bovenliggende optie is geselecteerd zal de afhankelijke vervolgkeuze niet worden weergegeven.',
'LBL_AVAILABLE_OPTIONS' => 'Beschikbare opties',
'LBL_PARENT_DROPDOWN' => 'Bovenliggende vervolgkeuze',
'LBL_VISIBILITY_EDITOR' => 'Zichtbaarheidseditor',
'LBL_ROLLUP' => 'Samenstellen',
'LBL_RELATED_FIELD' => 'Soortgelijk veld',
'LBL_PORTAL_ROLE_DESC' => 'Verwijder deze rol niet. De rol zelfbedieningsportaal van de klant is een door het systeem gegenereerde rol die tijdens het activatieproces van Sugar Portaal is aangemaakt. Gebruik de toegangsbediening binnen deze rol om bugs, casussen of modules in de kennisbasis van het Sugar Portaal in of uit te schakelen. Wijzig geen andere toegangsbediening voor deze rol om onbekend en onvoorspelbaar gedrag van het systeem te voorkomen. Indien deze rol per ongeluk wordt verwijderd probeert u deze opnieuw aan te maken door Sugar Portaal in en uit te schakelen.',

//RELATIONSHIPS
'LBL_MODULE' => 'Module',
'LBL_LHS_MODULE'=>'Primaire module',
'LBL_CUSTOM_RELATIONSHIPS' => '* relatie aangemaakt in Studio',
'LBL_RELATIONSHIPS'=>'Relaties',
'LBL_RELATIONSHIP_EDIT' => 'Relatie bewerken',
'LBL_REL_NAME' => 'Name',
'LBL_REL_LABEL' => 'Label',
'LBL_REL_TYPE' => 'Type',
'LBL_RHS_MODULE'=>'Related Module',
'LBL_NO_RELS' => 'Geen Relaties',
'LBL_RELATIONSHIP_ROLE_ENTRIES'=>'Optionele voorwaarde' ,
'LBL_RELATIONSHIP_ROLE_COLUMN'=>'Kolom',
'LBL_RELATIONSHIP_ROLE_VALUE'=>'Waarde',
'LBL_SUBPANEL_FROM'=>'Subpaneel van',
'LBL_RELATIONSHIP_ONLY'=>'Er zullen geen zichtbare onderdelen worden aangemaakt voor deze relatie omdat er reeds een zichtbare relatie aanwezig is tussen deze twee modules.',
'LBL_ONETOONE' => 'Eén-naar-één',
'LBL_ONETOMANY' => 'Eén-naar-veel',
'LBL_MANYTOONE' => 'Veel-naar-één',
'LBL_MANYTOMANY' => 'Veel-naar-veel',

//STUDIO QUESTIONS
'LBL_QUESTION_FUNCTION' => 'Selecteer een functie of onderdeel.',
'LBL_QUESTION_MODULE1' => 'Selecteer een module.',
'LBL_QUESTION_EDIT' => 'Selecteer een module die u wilt bewerken.',
'LBL_QUESTION_LAYOUT' => 'Selecteer een layout die u wilt bewerken.',
'LBL_QUESTION_SUBPANEL' => 'Selecteer een subpaneel dat u wilt bewerken.',
'LBL_QUESTION_SEARCH' => 'Selecteer een zoeklayout die u wilt bewerken.',
'LBL_QUESTION_MODULE' => 'Selecteer een module-onderdeel dat u wilt bewerken.',
'LBL_QUESTION_PACKAGE' => 'Selecteer een pakket dat u wilt bewerken of maak een nieuw pakket aan.',
'LBL_QUESTION_EDITOR' => 'Selecteer een hulpmiddel.',
'LBL_QUESTION_DROPDOWN' => 'Selecteer een vervolgkeuze die u wilt bewerken of maak een nieuwe vervolgkeuze aan.',
'LBL_QUESTION_DASHLET' => 'Selecteer een dashlet layout die u wilt bewerken.',
'LBL_QUESTION_POPUP' => 'Selecteer een pop-uplayout die u wilt bewerken.',
//CUSTOM FIELDS
'LBL_RELATE_TO'=>'Gerelateerd aan',
'LBL_NAME'=>'Name',
'LBL_LABELS'=>'Labels',
'LBL_MASS_UPDATE'=>'Massa-update',
'LBL_AUDITED'=>'Auditeren',
'LBL_CUSTOM_MODULE'=>'Module',
'LBL_DEFAULT_VALUE'=>'Standaard waarde',
'LBL_REQUIRED'=>'Verplicht',
'LBL_DATA_TYPE'=>'Type',
'LBL_HCUSTOM'=>'AANGEPAST',
'LBL_HDEFAULT'=>'STANDAARD',
'LBL_LANGUAGE'=>'Taal:',
'LBL_CUSTOM_FIELDS' => '* veld aangemaakt in Studio',

//SECTION
'LBL_SECTION_EDLABELS' => 'Labels bewerken',
'LBL_SECTION_PACKAGES' => 'Pakketten',
'LBL_SECTION_PACKAGE' => 'Pakket',
'LBL_SECTION_MODULES' => 'Modules',
'LBL_SECTION_PORTAL' => 'Portaal',
'LBL_SECTION_DROPDOWNS' => 'Vervolgkeuzes',
'LBL_SECTION_PROPERTIES' => 'Eigenschappen',
'LBL_SECTION_DROPDOWNED' => 'Vervolgkeuze bewerken',
'LBL_SECTION_HELP' => 'Help',
'LBL_SECTION_ACTION' => 'Action',
'LBL_SECTION_MAIN' => 'Hoofd',
'LBL_SECTION_EDPANELLABEL' => 'Paneellabel bewerken',
'LBL_SECTION_FIELDEDITOR' => 'Veld bewerken',
'LBL_SECTION_DEPLOY' => 'Inzetten',
'LBL_SECTION_MODULE' => 'Module',
'LBL_SECTION_VISIBILITY_EDITOR'=>'Zichtbaarheid bewerken',
//WIZARDS

//LIST VIEW EDITOR
'LBL_DEFAULT'=>'Standaard',
'LBL_HIDDEN'=>'Hidden',
'LBL_AVAILABLE'=>'Beschikbaar',
'LBL_LISTVIEW_DESCRIPTION'=>'Er worden hieronder drie kolommen weergegeven. De <b>Standaard</b> kolom bevat velden die standaard worden weergegeven in een lijstweergave. De <b>Aanvullende</b> kolom bevat velden die een gebruiker kan kiezen voor gebruik om een aangepaste weergave aan te maken. De <b>Beschikbaar</b> geeft velden weer die voor u als beheerder beschikbaar zijn om toe te voegen aan de Standaard of Aanvullende kolom voor gebruik door gebruikers.',
'LBL_LISTVIEW_EDIT'=>'Lijstweergave bewerker',

//Manager Backups History
'LBL_MB_PREVIEW'=>'Voorvertoning',
'LBL_MB_RESTORE'=>'Herstellen',
'LBL_MB_DELETE'=>'Verwijderen',
'LBL_MB_COMPARE'=>'Vergelijken',
'LBL_MB_DEFAULT_LAYOUT'=>'Standaard layout',

//END WIZARDS

//BUTTONS
'LBL_BTN_ADD'=>'Add',
'LBL_BTN_SAVE'=>'Opslaan',
'LBL_BTN_SAVE_CHANGES'=>'Wijzigingen opslaan',
'LBL_BTN_DONT_SAVE'=>'Wijzigingen negeren',
'LBL_BTN_CANCEL'=>'Cancel',
'LBL_BTN_CLOSE'=>'Close',
'LBL_BTN_SAVEPUBLISH'=>'Opslaan & Inzetten',
'LBL_BTN_NEXT'=>'Next',
'LBL_BTN_BACK'=>'Terug',
'LBL_BTN_CLONE'=>'Klonen',
'LBL_BTN_COPY' => 'Copy',
'LBL_BTN_COPY_FROM' => 'Kopiëren van…',
'LBL_BTN_ADDCOLS'=>'Kolommen toevoegen',
'LBL_BTN_ADDROWS'=>'Rijen toevoegen',
'LBL_BTN_ADDFIELD'=>'Veld toevoegen',
'LBL_BTN_ADDDROPDOWN'=>'Vervolgkeuze toevoegen',
'LBL_BTN_SORT_ASCENDING'=>'Oplopend sorteren',
'LBL_BTN_SORT_DESCENDING'=>'Aflopend sorteren',
'LBL_BTN_EDLABELS'=>'Labels bewerken',
'LBL_BTN_UNDO'=>'Ongedaan maken',
'LBL_BTN_REDO'=>'Opnieuw',
'LBL_BTN_ADDCUSTOMFIELD'=>'Aangepast veld toevoegen',
'LBL_BTN_EXPORT'=>'Aanpassingen exporteren',
'LBL_BTN_DUPLICATE'=>'Dupliceren',
'LBL_BTN_PUBLISH'=>'Publiceren',
'LBL_BTN_DEPLOY'=>'Inzetten',
'LBL_BTN_EXP'=>'Export',
'LBL_BTN_DELETE'=>'Verwijderen',
'LBL_BTN_VIEW_LAYOUTS'=>'Layouts bekijken',
'LBL_BTN_VIEW_MOBILE_LAYOUTS'=>'Mobiele layouts bekijken',
'LBL_BTN_VIEW_FIELDS'=>'Velden bekijken',
'LBL_BTN_VIEW_RELATIONSHIPS'=>'Bekijk Relaties',
'LBL_BTN_ADD_RELATIONSHIP'=>'Relatie toevoegen',
'LBL_BTN_RENAME_MODULE' => 'Modulenaam wijzigen',
'LBL_BTN_INSERT'=>'Insert',
'LBL_BTN_RESTORE_BASE_LAYOUT' => 'Basislay-out herstellen',
//TABS

//ERRORS
'ERROR_ALREADY_EXISTS'=> 'Fout: veld bestaat reeds',
'ERROR_INVALID_KEY_VALUE'=> "Error: Invalid Key Value: [&#39;]",
'ERROR_NO_HISTORY' => 'Geen geschiedenisbestanden gevonden',
'ERROR_MINIMUM_FIELDS' => 'De layout moet minimaal één veld bevatten',
'ERROR_GENERIC_TITLE' => 'Er heeft zich een fout voorgedaan',
'ERROR_REQUIRED_FIELDS' => 'Are you sure you wish to continue? The following required fields are missing from the layout:',
'ERROR_ARE_YOU_SURE' => 'Weet u zeker dat u wilt doorgaan?',
'ERROR_DATABASE_ROW_SIZE_LIMIT' => 'Veld kon niet worden aangemaakt. U hebt de rij-omvanglimiet van deze tabel in uw database bereikt. <a href="https://support.sugarcrm.com/SmartLinks/Custom/MySQL_Row_Size_Limit/" target="_blank">Lees meer</a>.',

'ERROR_CALCULATED_MOBILE_FIELDS' => 'De volgende veld(en) bevatten berekende waarden die niet real-time opnieuw zullen worden berekend in de mobiele bewerkingsweergave van SugarCRM:',
'ERROR_CALCULATED_PORTAL_FIELDS' => 'De volgende veld(en) bevatten berekende waarden die niet real-time herberekend zullen worden in de bewerkingsweergave van het portaal in SugarCRM:',

//SUGAR PORTAL
    'LBL_PORTAL_DISABLED_MODULES' => 'De volgende module(s) zijn uitgeschakeld:',
    'LBL_PORTAL_ENABLE_MODULES' => 'Als u deze in het portaal wilt inschakelen kunt u ze <a id="configure_tabs" target="_blank" href="./index.php?module=Administration&amp;action=ConfigureTabs">hier</a> inschakelen.',
    'LBL_PORTAL_CONFIGURE' => 'Portaal configureren',
    'LBL_PORTAL_ENABLE_PORTAL' => 'Portaal inschakelen',
    'LBL_PORTAL_SHOW_KB_NOTES' => 'Schakel notities in de module Knowledge Base in',
    'LBL_PORTAL_ALLOW_CLOSE_CASE' => 'Portaalgebruikers toestaan om de zaak te sluiten',
    'LBL_PORTAL_ENABLE_SELF_SIGN_UP' => 'Laat nieuwe gebruikers zich aanmelden',
    'LBL_PORTAL_USER_PERMISSIONS' => 'Gebruikersrechten',
    'LBL_PORTAL_THEME' => 'Thema portaal',
    'LBL_PORTAL_ENABLE' => 'Inschakelen',
    'LBL_PORTAL_SITE_URL' => 'Uw portaalsite is beschikbaar op:',
    'LBL_PORTAL_APP_NAME' => 'Naam toepassing',
    'LBL_PORTAL_CONTACT_PHONE' => 'Tel',
    'LBL_PORTAL_CONTACT_EMAIL' => 'E-mailadres',
    'LBL_PORTAL_CONTACT_EMAIL_INVALID' => 'Moet een geldig e-mailadres invoeren',
    'LBL_PORTAL_CONTACT_URL' => 'URL',
    'LBL_PORTAL_CONTACT_INFO_ERROR' => 'Er moet minimaal één contactmethode worden gespecificeerd',
    'LBL_PORTAL_LIST_NUMBER' => 'Aantal records die moeten worden weergegeven in de lijst',
    'LBL_PORTAL_DETAIL_NUMBER' => 'Aantal weer te geven velden in de Detailweergave',
    'LBL_PORTAL_SEARCH_RESULT_NUMBER' => 'Aantal weer te geven resultaten in Algemeen zoeken',
    'LBL_PORTAL_DEFAULT_ASSIGN_USER' => 'Standaard toegewezen aan nieuwe portaalregistraties',
    'LBL_PORTAL_MODULES' => 'Portaalmodules',
    'LBL_CONFIG_PORTAL_CONTACT_INFO' => 'Contactinformatie portaal',
    'LBL_CONFIG_PORTAL_CONTACT_INFO_HELP' => 'Configureer de contactinformatie die aan portaalgebruikers wordt gepresenteerd die extra hulp nodig hebben met hun account. Er moet minimaal één optie worden geconfigureerd.',
    'LBL_CONFIG_PORTAL_MODULES_HELP' => 'Versleep de namen van de portaalmodules die u wilt weergeven of verbergen (in de navigatiebalk of subpanelen) naar de desbetreffende gebieden. Om toegang tot de portaalmodules te beheren, maak gebruik van <a href="?module=ACLRoles&action=index">rollen & rechten.</a>',
    'LBL_CONFIG_PORTAL_MODULES_DISPLAYED' => 'Weergegeven modules',
    'LBL_CONFIG_PORTAL_MODULES_HIDDEN' => 'Verborgen modules',
    'LBL_CONFIG_VISIBILITY' => 'Zichtbaarheid',
    'LBL_CASE_VISIBILITY_HELP' => 'Definieer welke portaalgebruikers een case kunnen zien.',
    'LBL_EMAIL_VISIBILITY_HELP' => 'Definieer welke portaalgenruikers e-mails m. b. t. een case kunnen zien. Deelnemende contactpersonen zijn die in de velden Aan, CC en BCC staan.',
    'LBL_MESSAGE_VISIBILITY_HELP' => 'Definieer welke portaalgenruikers berichten m. b. t. een case kunnen zien. Deelnemende contactpersonen zijn die in het veld Gasten staan.',
    'CASE_VISIBILITY_OPTIONS' => [
        'all' => 'Alle contactpersonen m. b. t. het account',
        'related_contacts' => 'Alleen primaire contactpersonen en contactpersonen m. b. t. de case',
    ],
    'EMAIL_VISIBILITY_OPTIONS' => [
        'related_contacts' => 'Alleen deelnemende contactpersonen',
        'all' => 'Alle contactpersonen die de case kunnen zien',
    ],
    'MESSAGE_VISIBILITY_OPTIONS' => [
        'related_contacts' => 'Alleen deelnemende contactpersonen',
        'all' => 'Alle contactpersonen die de case kunnen zien',
    ],


'LBL_PORTAL'=>'Portaal',
'LBL_PORTAL_LAYOUTS'=>'Portaallayouts',
'LBL_SYNCP_WELCOME'=>'Voer de URL in van uw exemplaar van het portaal die u wilt bijwerken.',
'LBL_SP_UPLOADSTYLE'=>'Selecteer een stijlblad op uw computer dat u wilt uploaden.<br> Het stijlblad wordt de volgende keer dat u synchroniseert geïmplementeerd in het Sugar Portaal.',
'LBL_SP_UPLOADED'=> 'Geüpload',
'ERROR_SP_UPLOADED'=>'Zorg ervoor dat u een css stijlblad uploadt.',
'LBL_SP_PREVIEW'=>'Hier volgt een voorvertoning van hoe het Sugar Portaal eruit zal zijn met het stijlblad.',
'LBL_PORTALSITE'=>'Sugar Portal URL:',
'LBL_PORTAL_GO'=>'Gaan',
'LBL_UP_STYLE_SHEET'=>'Stijlblad uploaden',
'LBL_QUESTION_SUGAR_PORTAL' => 'Selecteer een Sugar Portaal layout die u wilt bewerken.',
'LBL_QUESTION_PORTAL' => 'Selecteer een portaallayout die u wilt bewerken.',
'LBL_SUGAR_PORTAL'=>'Sugar Portaal Editor',
'LBL_USER_SELECT' => '-- Selecteren --',

//PORTAL PREVIEW
'LBL_CASES'=>'Cases',
'LBL_NEWSLETTERS'=>'Nieuwsbrieven',
'LBL_BUG_TRACKER'=>'Bug Tracker',
'LBL_MY_ACCOUNT'=>'Mijn account',
'LBL_LOGOUT'=>'Logout',
'LBL_CREATE_NEW'=>'Create New',
'LBL_LOW'=>'Laag',
'LBL_MEDIUM'=>'Medium',
'LBL_HIGH'=>'Hoog',
'LBL_NUMBER'=>'Nummer:',
'LBL_PRIORITY'=>'Priority:',
'LBL_SUBJECT'=>'Subject',

//PACKAGE AND MODULE BUILDER
'LBL_PACKAGE_NAME'=>'Pakketnaam:',
'LBL_MODULE_NAME'=>'Modulenaam:',
'LBL_MODULE_NAME_SINGULAR' => 'Naam enkele module:',
'LBL_AUTHOR'=>'Auteur:',
'LBL_DESCRIPTION'=>'Description:',
'LBL_KEY'=>'Sleutel:',
'LBL_ADD_README'=>'Readme',
'LBL_MODULES'=>'Modules:',
'LBL_LAST_MODIFIED'=>'Laatst gewijzigd:',
'LBL_NEW_MODULE'=>'Nieuwe module',
'LBL_LABEL'=>'Meervoudig label',
'LBL_LABEL_TITLE'=>'Label',
'LBL_SINGULAR_LABEL' => 'Enkel label',
'LBL_WIDTH'=>'Breedte',
'LBL_PACKAGE'=>'Pakket:',
'LBL_TYPE'=>'Type:',
'LBL_TEAM_SECURITY'=>'Teambeveiliging',
'LBL_ASSIGNABLE'=>'Toewijsbaar',
'LBL_PERSON'=>'Persoon',
'LBL_COMPANY'=>'Bedrijf',
'LBL_ISSUE'=>'Probleem',
'LBL_SALE'=>'Verkoop',
'LBL_FILE'=>'Bestand',
'LBL_NAV_TAB'=>'Navigatietabblad',
'LBL_CREATE'=>'Create',
'LBL_LIST'=>'List',
'LBL_VIEW'=>'View',
'LBL_LIST_VIEW'=>'Lijstweergave',
'LBL_HISTORY'=>'View History',
'LBL_RESTORE_DEFAULT_LAYOUT'=>'Standaard layout herstellen',
'LBL_ACTIVITIES'=>'Activity Stream',
'LBL_SEARCH'=>'Zoeken',
'LBL_NEW'=>'Nieuw',
'LBL_TYPE_BASIC'=>'basis',
'LBL_TYPE_COMPANY'=>'bedrijf',
'LBL_TYPE_PERSON'=>'persoon',
'LBL_TYPE_ISSUE'=>'probleem',
'LBL_TYPE_SALE'=>'verkoop',
'LBL_TYPE_FILE'=>'bestand',
'LBL_RSUB'=>'Dit is het subpaneel dat in uw module wordt weergegeven',
'LBL_MSUB'=>'Dit is het subpaneel dat uw module aan de gerelateerde module levert voor weergave',
'LBL_MB_IMPORTABLE'=>'Import toestaan',

// VISIBILITY EDITOR
'LBL_VE_VISIBLE'=>'zichtbaar',
'LBL_VE_HIDDEN'=>'verborgen',
'LBL_PACKAGE_WAS_DELETED'=>'[[package]] werd verwijderd',

//EXPORT CUSTOMS
'LBL_EC_TITLE'=>'Aanpassingen exporteren',
'LBL_EC_NAME'=>'Pakketnaam:',
'LBL_EC_AUTHOR'=>'Auteur:',
'LBL_EC_DESCRIPTION'=>'Description:',
'LBL_EC_KEY'=>'Sleutel:',
'LBL_EC_CHECKERROR'=>'Selecteer een module.',
'LBL_EC_CUSTOMFIELD'=>'aangepaste veld(en)',
'LBL_EC_CUSTOMLAYOUT'=>'aangepaste layout(s)',
'LBL_EC_CUSTOMDROPDOWN' => 'aangepaste vervolgkeuze(s)',
'LBL_EC_NOCUSTOM'=>'Er zijn geen modules aangepast.',
'LBL_EC_EXPORTBTN'=>'Export',
'LBL_MODULE_DEPLOYED' => 'Module is ingezet.',
'LBL_UNDEFINED' => 'niet gedefinieerd',
'LBL_EC_CUSTOMLABEL'=>'aangepaste label(s)',

//AJAX STATUS
'LBL_AJAX_FAILED_DATA' => 'Gegevens ophalen mislukt',
'LBL_AJAX_TIME_DEPENDENT' => 'Een tijdsafhankelijke actie wordt uitgevoerd. Een ogenblik geduld aub, probeer het over een paar seconden opnieuw.',
'LBL_AJAX_LOADING' => 'Laden...',
'LBL_AJAX_DELETING' => 'Verwijderen...',
'LBL_AJAX_BUILDPROGRESS' => 'Er wordt gebouwd...',
'LBL_AJAX_DEPLOYPROGRESS' => 'Wordt ingezet...',
'LBL_AJAX_FIELD_EXISTS' =>'De veldnaam die u invoerde bestaat reeds. Voer een nieuwe veldnaam in.',
//JS
'LBL_JS_REMOVE_PACKAGE' => 'Weet u zeker dat u dit pakket wilt verwijderen? Hierdoor worden alle bestanden die bij dit pakket horen permanent verwijderd.',
'LBL_JS_REMOVE_MODULE' => 'Weet u zeker dat u deze module wilt verwijderen? Hierdoor worden alle bestanden die bij deze module horen permanent verwijderd.',
'LBL_JS_DEPLOY_PACKAGE' => 'Eventuele wijzigingen die u heeft doorgevoerd in Studio worden overschreven als deze module opnieuw wordt ingezet. Weet u zeker dat u wilt doorgaan?',

'LBL_DEPLOY_IN_PROGRESS' => 'Pakket inzetten',
'LBL_JS_VALIDATE_NAME'=>'Name - Must be alphanumeric, begin with a letter and contain no spaces.',
'LBL_JS_VALIDATE_PACKAGE_KEY'=>'Pakketsleutel bestaat reeds',
'LBL_JS_VALIDATE_PACKAGE_NAME'=>'Pakketnaam bestaat reeds',
'LBL_JS_PACKAGE_NAME'=>'Pakketnaam - Moet beginnen met een letter en mag alleen bestaan uit letters, cijfers en lage streepjes. Er mogen geen spaties of andere speciale tekens worden gebruikt.',
'LBL_JS_VALIDATE_KEY_WITH_SPACE'=>'Sleutel - Moet alfanumeriek zijn en beginnen met een letter.',
'LBL_JS_VALIDATE_KEY'=>'Sleutel - Moet alfanumeriek zijn, beginnen met een letter en mag geen spaties bevatten.',
'LBL_JS_VALIDATE_LABEL'=>'Voer een label in dat u kunt gebruiken als weergavenaam voor deze module',
'LBL_JS_VALIDATE_TYPE'=>'Selecteer uit de bovenstaande lijst een type module die u wilt bouwen',
'LBL_JS_VALIDATE_REL_NAME'=>'Naam - Moet alfanumeriek zijn zonder spaties',
'LBL_JS_VALIDATE_REL_LABEL'=>'Label - voeg een label toe dat boven het subpaneel wordt weergegeven',

// Dropdown lists
'LBL_JS_DELETE_REQUIRED_DDL_ITEM' => 'Weet u zeker dat u dit verplichte onderdeel van de vervolgkeuzelijst wilt verwijderen? Hierdoor wordt de functie van uw toepassing aangetast.',

// Specific dropdown list should be:
// LBL_JS_DELETE_REQUIRED_DDL_ITEM_(UPPERCASE_DDL_NAME)
'LBL_JS_DELETE_REQUIRED_DDL_ITEM_SALES_STAGE_DOM' => 'Weet u zeker dat u dit onderdeel van de vervolgkeuzelijst wilt verwijderen? Door de Gesloten gewonnen of Gesloten verloren fases te verwijderen werkt de Voorspellingsmodule niet goed',

// Specific list items should be:
// LBL_JS_DELETE_REQUIRED_DDL_ITEM_(UPPERCASE_ITEM_NAME)
// Item name should have all special characters removed and spaces converted to
// underscores
'LBL_JS_DELETE_REQUIRED_DDL_ITEM_NEW' => 'Weet u zeker dat u de nieuwe verkoopstatus wilt verwijderen? Door deze status te verwijderen werkt de werkstroom van de omzetregel in de Mogelijkhedenmodule wellicht niet goed.',
'LBL_JS_DELETE_REQUIRED_DDL_ITEM_IN_PROGRESS' => 'Weet u zeker dat u de status Voortgang verkoop wilt verwijderen? Door deze status te verwijderen werkt de werkstroom van de omzetregel in de Mogelijkhedenmodule wellicht niet goed.',
'LBL_JS_DELETE_REQUIRED_DDL_ITEM_CLOSED_WON' => 'Weet u zeker dat u de Gesloten gewonnen verkoopfase wilt verwijderen? Door de fase te verwijderen werkt de Voorspellingsmodule wellicht niet goed',
'LBL_JS_DELETE_REQUIRED_DDL_ITEM_CLOSED_LOST' => 'Weet u zeker dat u de Gesloten verloren verkoopfase wilt verwijderen? Door deze fase te verwijderen werkt de Voorspellingsmodule wellicht niet goed',

//CONFIRM
'LBL_CONFIRM_FIELD_DELETE'=>'Deleting this custom field will delete both the custom field and all the data related to the custom field in the database. The field will be no longer appear in any module layouts.'
        . ' If the field is involved in a formula to calculate values for any fields, the formula will no longer work.'
        . '\n\nThe field will no longer be available to use in Reports; this change will be in effect after logging out and logging back in to the application. Any reports containing the field will need to be updated in order to be able to be run.'
        . '\n\nDo you wish to continue?',
'LBL_CONFIRM_RELATIONSHIP_DELETE'=>'Are you sure you wish to delete this relationship?',
'LBL_CONFIRM_RELATIONSHIP_DEPLOY'=>'Hierdoor wordt deze relatie permanent gemaakt. Weet u zeker dat u deze relatie wilt inzetten?',
'LBL_CONFIRM_DONT_SAVE' => 'Er zijn wijzigingen doorgevoerd sinds de laatste keer dat u heeft opgeslagen. Wilt u deze opslaan?',
'LBL_CONFIRM_DONT_SAVE_TITLE' => 'Wijzigingen opslaan?',
'LBL_CONFIRM_LOWER_LENGTH' => 'Er kunnen gegevens verloren gaan en dit kan niet ongedaan worden gemaakt. Weet u zeker dat u wilt doorgaan?',

//POPUP HELP
'LBL_POPHELP_FIELD_DATA_TYPE'=>'Selecteer het geschikte gegevenstype op basis van het type gegevens die in het veld wordt ingevoerd.',
'LBL_POPHELP_FTS_FIELD_CONFIG' => 'Configureer het veld om de volledige tekst te kunnen doorzoeken.',
'LBL_POPHELP_FTS_FIELD_BOOST' => 'Door boosten wordt de relevantie van de velden in een record verbeterd.<br />Velden met een hoger boostniveau krijgen voorrang wanneer er wordt gezocht. Als er wordt gezocht zullen records die velden bevatten met meer voorrang hoger verschijnen in de zoekresultaten.<br />De standaard waarde is 1.0, wat voor een neutrale boost staat. Om een positieve boost toe te passen wordt een zwevende waarde van meer dan 1 geaccepteerd. Voor een negatieve boost gebruikt u waarden lager dan 1. Een waarde van 1.35 zorgt bijvoorbeeld voor een positieve boost van 135%. Een waarde van 0.60 leidt tot een negatieve boost.<br />Houd er rekening mee dat het in vorige versies verplicht was om een zoekopdracht in de volledige tekst opnieuw te indexeren. Dit is niet langer verplicht.',
'LBL_POPHELP_IMPORTABLE'=>'<b>Ja</b>: het veld wordt opgenomen in een importeerhandeling.<br><b>Nee</b>: het veld wordt niet opgenomen in een importeerhandeling.<br><b>Verplicht</b>: er moet een waarde worden ingevoerd voor een importeerhandeling.',
'LBL_POPHELP_PII'=>'Dit veld wordt automatisch gemarkeerd voor auditeren en zal beschikbaar zijn in de weergave Persoonsgegevens.<br>Velden van Persoonsgegevens kunnen ook permanent worden gewist als het record betrekking heeft op een verzoek om het wissen van Gegevensprivacy.<br>Wissen vindt plaats via de module Gegevensprivacy en kan door gebruikers of beheerders met de rol Manager Gegevensprivacy worden uitgevoerd.',
'LBL_POPHELP_IMAGE_WIDTH'=>'Voer een nummer in voor de breedte, gemeten in pixels.<br>De geüploade afbeelding wordt tot deze breedte geschaald.',
'LBL_POPHELP_IMAGE_HEIGHT'=>'Voer een nummer in voor de hoogte, gemeten in pixels.<br>De geüploade afbeelding wordt tot deze hoogte geschaald.',
'LBL_POPHELP_DUPLICATE_MERGE'=>'<b>Enabled</b>: The field will appear in the Merge Duplicates feature, but will not be available to use for the filter conditions in the Find Duplicates feature.<br><b>Disabled</b>: The field will not appear in the Merge Duplicates feature, and will not be available to use for the filter conditions in the Find Duplicates feature.'
. '<br><b>In Filter</b>: The field will appear in the Merge Duplicates feature, and will also be available in the Find Duplicates feature.<br><b>Filter Only</b>: The field will not appear in the Merge Duplicates feature, but will be available in the Find Duplicates feature.<br><b>Default Selected Filter</b>: The field will be used for a filter condition by default in the Find Duplicates page, and will also appear in the Merge Duplicates feature.'
,
'LBL_POPHELP_CALCULATED'=>"Create a formula to determine the value in this field.<br>"
   . "Workflow definitions containing an action that are set to update this field will no longer execute the action.<br>"
   . "Fields using formulas will not be calculated in real-time in "
   . "het Sugar zelfbedieningsportaal of "
   . "Mobile EditView layouts.",

'LBL_POPHELP_DEPENDENT'=>"Create a formula to determine whether this field is visible in layouts.<br/>"
        . "Dependent fields will follow the dependency formula in the browser-based mobile view, <br/>"
        . "but will not follow the formula in the native applications, such as Sugar Mobile for iPhone. <br/>"
        . "Deze volgen de formule in het Sugar zelfbedieningsportaal niet.",
'LBL_POPHELP_REQUIRED'=>"Maak een formule om te bepalen of dit veld verplicht is in layouts.<br/>"
    . "Verplichte velden volgen de formule in de op de browser gebaseerde mobiele weergave,<br/>"
    . "maar volgen niet de formulie in de oorspronkelijke applicaties, zoals Sugar Mobile voor de iPhone. <br/>"
    . "Deze volgen de formule in het Sugar zelfbedieningsportaal niet.",
'LBL_POPHELP_READONLY'=>"Maak een formule om te bepalen of dit veld alleen-lezen is in lay-outs.<br/>"
        . "Alleen-lezen velden volgen de formule in de op de browser gebaseerde mobiele weergave, <br/>"
        . "maar volgen niet de formule in de originele toepassingen, zoals Sugar Mobile voor de iPhone. <br/>"
        . "Ze volgen niet de formule in het Sugar Self-Service Portal.",
'LBL_POPHELP_GLOBAL_SEARCH'=>'Selecteer om dit veld te gebruiken als u naar records zoekt via Algemeen Zoeken in deze module.',
//Revert Module labels
'LBL_RESET' => 'Resetten',
'LBL_RESET_MODULE' => 'Module resetten',
'LBL_REMOVE_CUSTOM' => 'Wijzigingen verwijderen',
'LBL_CLEAR_RELATIONSHIPS' => 'Wissen Relaties',
'LBL_RESET_LABELS' => 'Labels resetten',
'LBL_RESET_LAYOUTS' => 'Layouts resetten',
'LBL_REMOVE_FIELDS' => 'Aangepaste velden verwijderen',
'LBL_CLEAR_EXTENSIONS' => 'Uitbreidingen wissen',

'LBL_HISTORY_TIMESTAMP' => 'Tijdstempel',
'LBL_HISTORY_TITLE' => 'history',

'fieldTypes' => array(
                'varchar'=>'Tekstveld',
                'int'=>'Integer',
                'float'=>'Zweven',
                'bool'=>'Selectievakje',
                'enum'=>'Vervolgkeuze',
                'multienum' => 'Meerdere selecteren',
                'date'=>'Datum:',
                'phone' => 'Telefoon',
                'currency' => 'Valuta',
                'html' => 'HTML',
                'radioenum' => 'Keuzerondje',
                'relate' => 'Relateren',
                'address' => 'Adres',
                'text' => 'Tekstgebied',
                'url' => 'URL',
                'iframe' => 'IFrame',
                'image' => 'Afbeelding',
                'encrypt'=>'Coderen',
                'datetimecombo' =>'Datum tijd',
                'decimal'=>'Decimaal',
                'autoincrement' => 'Automatisch verhogen',
                'actionbutton' => 'Actieknop',
),
'labelTypes' => array(
    "" => "Veel gebruikte labels",
    "all" => "Alle labels",
),

'parent' => 'Flexibel relateren',

'LBL_ILLEGAL_FIELD_VALUE' =>"Vervolgkeuzesleutel kan geen uitspraken bevatten.",
'LBL_CONFIRM_SAVE_DROPDOWN' =>"U selecteert dit onderdeel om deze uit de vervolgkeuzelijst te verwijderen. Eventuele vervolgkeuzevelden in deze lijst met dit onderdeel als waarde geeft de waarde niet langer weer en de waarde kan niet langer worden geselecteerd uit de vervolgkeuzevelden. Weet u zeker dat u wilt doorgaan?",
'LBL_POPHELP_VALIDATE_US_PHONE'=>"Select to validate this field for the entry of a 10-digit<br>" .
                                 "phone number, with allowance for the country code 1, and<br>" .
                                 "to apply a U.S. format to the phone number when the record<br>" .
                                 "is saved. The following format will be applied: (xxx) xxx-xxxx.",
'LBL_ALL_MODULES'=>'Alle modules',
'LBL_RELATED_FIELD_ID_NAME_LABEL' => '{0} (gerelateerd {1} ID)',
'LBL_HEADER_COPY_FROM_LAYOUT' => 'Kopiëren uit layout',
'LBL_RELATIONSHIP_TYPE' => 'Relatie',

// Edit Labels
'LBL_COMPARISON_LANGUAGE' => 'Taal vergelijking',
'LBL_LABEL_NOT_TRANSLATED' => 'Dit label mag niet vertaald worden',
);
