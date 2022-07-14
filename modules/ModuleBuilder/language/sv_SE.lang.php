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
    'LBL_LOADING' => 'Laddar' /*for 508 compliance fix*/,
    'LBL_HIDEOPTIONS' => 'Dölj Alternativ' /*for 508 compliance fix*/,
    'LBL_DELETE' => 'Radera' /*for 508 compliance fix*/,
    'LBL_POWERED_BY_SUGAR' => 'Drivs av SugarCRM' /*for 508 compliance fix*/,
    'LBL_ROLE' => 'Roll',
    'LBL_BASE_LAYOUT' => 'Grundlayout',
    'LBL_FIELD_NAME' => 'Fältnamn',
    'LBL_FIELD_VALUE' => 'Värde',
    'LBL_LAYOUT_DETERMINED_BY' => 'Layouten avgörs av:',
    'layoutDeterminedBy' => [
        'std' => 'Standardlayout',
        'role' => 'Roll',
        'dropdown' => 'Rullgardinsfält',
    ],
    'LBL_DELETE_CUSTOM_LAYOUTS' => 'Alla anpassade layouter kommer att tas bort. Vill du verkligen ändra dina aktuella layoutdefinitioner?',
'help'=>array(
    'package'=>array(
            'create'=>'Provide a <b>Name</b> for the package.  The name you enter must be alphanumeric and contain no spaces. (Example: HR_Management)<br/><br/> You can provide <b>Author</b> and <b>Description</b> information for package. <br/><br/>Click <b>Save</b> to create the package.',
            'modify'=>'You can modify the <b>Name</b>, <b>Author</b> and <b>Description</b> of the package, as well as view and customize all of the modules contained within the package.<br><br>You can also <b>Publish</b> and <b>Deploy</b> the package, as well as <b>Export</b> the customizations made in the package.',
            'name'=>'This is the <b>Name</b> of the current package. <br/><br/>The name you enter must be alphanumeric and contain no spaces. (Example: HR_Management)',
            'author'=>'This is the <b>Author</b> that is displayed during installation as the name of the entity that created the package. The Author can be either an individual or a company.',
            'description'=>'Detta är <b>beskrivningen</b> på paketet som visas under installationen.',
            'publishbtn'=>'Click <b>Publish</b> to save all entered data and create a .zip file that is an installable version of the package.<br><br>Use <b>Module Loader</b> to upload the .zip file and install the package.',
            'deploybtn'=>'Click <b>Deploy</b> to save all entered data and install the package, including all modules, in the current instance.',
            'duplicatebtn'=>'Klicka på <b>Duplicera</b> för att kopiera innehållet i paketet till ett nytt paket och visa det. <br/><br/>Det nya paketet kommer att få ett namn automatiskt utifrån det gamla med en siffra på slutet. Du kan döpa om paketet genom att skriva ett nytt <b>namn</b> och klicka på <b>Spara</b>.',
            'exportbtn'=>'Click <b>Export</b> to create a .zip file containing the customizations made in the package.<br><br> The generated file contains code for the package customizations, and it is not an installable version of the package.<br><br>Use <b>Module Loader</b> to import the .zip file and to make the customizations available for new packages.',
            'deletebtn'=>'Klicka på <b>Radera</b> för att ta bort detta paket och alla filer med anknytning till detta paket.',
            'savebtn'=>'Klicka på <b>Spara</b> för att spara all data relaterad till paketet.',
            'existing_module'=>'Click the <b>name of a module</b> to edit the properties and customize the fields, relationships and layouts associated with the module.',
            'new_module'=>'Klicka på <b>Ny modul</b> för att skapa en ny modul till detta paket.',
            'key'=>'Denna alfanumeriska <b>nyckel</b> med fem tecken kommer att skrivas före alla sökvägar, klassnamn, och databastabeller för alla moduler i det aktiva paketet.<br><br>Nyckeln används för att se till att alla tabellnamn bli unika.',
            'readme'=>'You can add <b>Readme</b> text for this package.<br><br>The Readme will be available at the time of installation.',

),
    'main'=>array(

    ),
    'module'=>array(
        'create'=>'Ge modulen ett <b>Namn</b>. <b>Etiketten</b> du anger kommer att visas i navigationsfliken. <br/><br/>Välj att visa en navigationsflik i modulen genom att klicka i kryssrutan <b>Navigationsflik</b>.<br/><br/>Klicka i kryssrutan <b>Lagsäkerhet</b> för att få ett lagvalsfält i modulens poster. <br/><br/>Välj sedan vilken typ av modul du vill skapa. <br/><br/>Välj en malltyp. Varje mall innehåller ett specifikt antal fält och ett antal fördefinierade layouter du kan använda som grund till din modul. <br/><br/>Klicka på <b>Spara</b> för att skapa modulen.',
        'modify'=>'Du kan ändra på modulens inställningar eller redigera <b>Fälten</b>, <b>Förhållandena</b> och <b>Layouterna</b> som tillhör den.',
        'importable'=>'Väljer du kryssrutan <b>Importerbar</b> så kommer modulen vara importerbar. <br><br>En länk till importguiden kommer att visas i modulens Genvägspanel. Importguiden hjälper dig importera data från externa källor till din modul.',
        'team_security'=>'Checking the <b>Team Security</b> checkbox will enable team security for this module.  <br/><br/>If team security is enabled, the Team selection field will appear within the records in the module',
        'reportable'=>'Kryssar du i den här rutan låter du modulen ingå i rapporter.',
        'assignable'=>'Kryssar du i den här rutan låter du en post i modulen tilldelas en vald användare.',
        'has_tab'=>'Kryssar du i <b>Navigationsflik</b> ges modulen en navigationsflik.',
        'acl'=>'Kryssar du i den här rutan aktiveras Åtkomstkontroller i modulen, inklusive fältsäkerhet.',
        'studio'=>'Kryssar du i den här rutan så kan administratörer redigera modulen i Studio.',
        'audit'=>'Kryssar du i den här rutan aktiveras granskning för modulen. Ändringar i vissa fält sparas så att administratörer kan granska förändringshistoriken.',
        'viewfieldsbtn'=>'Klicka på <b>Visa fält</b> för att se fälten som tillhör modulen, och för att skapa eller redigera fält.',
        'viewrelsbtn'=>'Klicka på <b>Visa relationer</b> för att visa relationerna associerade med modulen och skapa nya.',
        'viewlayoutsbtn'=>'Klicka på <b>Visa layouter</b> för att visa modulens layouter och anpassa hur fält ligger i dem.',
        'viewmobilelayoutsbtn' => 'Klicka på <b>Visa mobillayouter</b> för att visa modulens mobillayouter och anpassa hur fält ligger i dem.',
        'duplicatebtn'=>'Click <b>Duplicate</b> to copy the properties of the module into a new module and to display the new module. <br/><br/>For the new module, a new name will be generated automatically by appending a number to the end of the name of the module used to create the new one.<br><br>You can rename the new modulee by entering a new <b>Name</b> and clicking <b>Save</b>.',
        'deletebtn'=>'Klicka <b>Radera</b> för att radera modulen.',
        'name'=>'This is the <b>Name</b> of the current module. <br/><br/>The name you enter must be alphanumeric and must start with a letter and contain no spaces. (Example: HR_Management)',
        'label'=>'This is the <b>Label</b> that will appear in the navigation tab for the module.',
        'savebtn'=>'Klicka på <b>Spara</b> för att spara all inmatad data relaterad till modulen.',
        'type_basic'=>'<b>Grundmallen</b> erbjuder grundläggande fält som Namn, Tilldelad, Lag, Datum skapad, och Beskrivning.',
        'type_company'=>'<b>Företagsmallen</b> erbjuder organisationsspecifika fält som Företagsnamn, Bransch, och Fakturaadress.<br/><br/>Använd den här mallen för att skapa moduler som liknar den inbyggda Konto-modulen.',
        'type_issue'=>'<b>Klagomålsmallen</b> erbjuder falls- och buggspecifika fält som Nummer, Status, Prioritet och Beskrivning.<br/><br/>Använd den här modulen för att skapa moduler som liknar de inbyggda Fall- och Buggtracker-modulerna.',
        'type_person'=>'<b>Personmallen</b> erbjuder individspecifika fält som Titel, Namn, Adress, och Telefonnummer.<br/><br/>Använd den här modulen för att skapa moduler som liknar de inbyggda Kontakt- och Möjlig kund-modulerna.',
        'type_sale'=>'<b>Affärsmallen</b> erbjuder affärsmöjlighetsspecifika fält som Leadkälla, Fas, Mängd, och Sannolikhet.<br/><br/>Använd den här modulen för att skapa moduler som liknar den inbyggda Affärsmöjlighets-modulen.',
        'type_file'=>'<b>Filmallen</b> erbjuder dokumentspecifika fält som Filnamn, Dokumenttyp, och Publiceringsdatum.<br><br>Använd den här modulen för att skapa moduler som liknar den inbyggda Dokument-modulen.',

    ),
    'dropdowns'=>array(
        'default' => 'Alla <b>listrutor</b> i nedrullningsbara listor för programmet listas här.<br><br>Listrutorna kan användas för listrutefält i valfri modul.<br><br>För att göra ändringar i en befintlig listruta, klicka på dess namn.<br><br>Klicka på<b>Lägg till listruta</b> för att skapa en ny listruta.',
        'editdropdown'=>'Rullgardinslistor kan användas som standard- eller anpassade fält i alla moduler.<br><br>Ange ett <b>Namn</b> för rullgardinslistan.<br><br>Om språkpaket är installerade i programmet kan du välja <b>Språket</b> du vill använda för listans poster.<br><br>Ange ett namn för posten i fältet<b>Postnamn</b>. Detta är inte namnet som kommer att visas för användare.<br><br>Ange namnet som ska synas mot användare i fältet <b>Visningsnamn</b><br><br>När namn och visningsnamn angivits, klicka på <b>Lägg till</b> för att lägga till posten i rullgardinslistan.<br><br>Drag och släpp poster för att ordna om dem.<br><br>Klicka på <b>ikonen Redigera</b> och skriv ett nytt namn för att ändra visningsnamnet på en post. Klicka på <b>ikonen Radera</b> för att radera en post ur listan.<br><br>Klicka på <b>Ångra</b> för att ångra en ändring som gjorts i ett visningsnamn. Klicka på <b>Återställ</b> för att återställa något som ångrats.<br><br>Klicka på <b>Spara</b> för att spara rullgardinslistan.',

    ),
    'subPanelEditor'=>array(
        'modify'	=> 'All of the fields that can be displayed in the <b>Subpanel</b> appear here.<br><br>The <b>Default</b> column contains the fields that are displayed in the Subpanel.<br/><br/>The <b>Hidden</b> column contains fields that can be added to the Default column.'
    . '<br/><br/><!--not_in_theme!--><img src="themes/default/images/SugarLogic/icon_dependent.png"/>Indicates a Dependent field that may or may not be visible based on the value of a formula.<br/><!--not_in_theme!--><img src="themes/default/images/SugarLogic/icon_calculated.png" /> Indicates a Calculated field whose value will be automatically determined based on a formula.'
    ,
        'savebtn'	=> 'Klicka på <b>Spara och rulla ut</b> för att spara ändringar och aktivera dem i modulen.',
        'historyBtn'=> 'Klicka på <b>Visa historik</b> för att visa och återställa en sparad layout från historiken.',
        'historyRestoreDefaultLayout'=> 'Klicka på <b>Återställ grundlayout</b> för att återställa vyn till sin grundlayout.',
        'Hidden' 	=> '<b>Dolda</b> fält syns inte i underpanelen.',
        'Default'	=> '<b>Standard</b>fält visas i underpanelen.',

    ),
    'listViewEditor'=>array(
        'modify'	=> 'All of the fields that can be displayed in the <b>ListView</b> appear here.<br><br>The <b>Default</b> column contains the fields that are displayed in the ListView by default.<br/><br/>The <b>Available</b> column contains fields that a user can select in the Search to create a custom ListView. <br/><br/>The <b>Hidden</b> column contains fields that can be added to the Default or Available column.'
    . '<br/><br/><!--not_in_theme!--><img src="themes/default/images/SugarLogic/icon_dependent.png"/>Indicates a Dependent field that may or may not be visible based on the value of a formula.<br/><!--not_in_theme!--><img src="themes/default/images/SugarLogic/icon_calculated.png" /> Indicates a Calculated field whose value will be automatically determined based on a formula.'
    ,
        'savebtn'	=> 'Klicka på <b>Spara och rulla ut</b> för att spara ändringar och aktivera dem i modulen.',
        'historyBtn'=> 'Klicka på <b>Visa historik</b> för att visa och återställa en sparad layout från historiken.<br><br>Klicka på <b>Återställ</b> i <b>Visa historik</b> för att återställa fältens placering i tidigare sparade layouter. Klicka på ikonen Redigera vid varje fält för att ändra rubrik.',
        'historyRestoreDefaultLayout'=> 'Klicka på <b>Återställ grundlayout</b> för att återställa en vy till sin grundlayout. <br><br><b>Återställ grundlayout</b> återställer bara fältplaceringen i originallayouten. Klicka på ikonen Redigera vid ett fält för att ändra rubrik.',
        'Hidden' 	=> 'Hidden fields not currently available for users to see in list views.',
        'Available' => 'Available fields are not shown by default, but can be added to list views by users.',
        'Default'	=> 'Default fields are displayed to users who have not created custom list views.'
    ),
    'popupListViewEditor'=>array(
        'modify'	=> 'All of the fields that can be displayed in the <b>ListView</b> appear here.<br><br>The <b>Default</b> column contains the fields that are displayed in the ListView by default.<br/><br/>The <b>Hidden</b> column contains fields that can be added to the Default or Available column.'
    . '<br/><br/><!--not_in_theme!--><img src="themes/default/images/SugarLogic/icon_dependent.png"/>Indicates a Dependent field that may or may not be visible based on the value of a formula.<br/><!--not_in_theme!--><img src="themes/default/images/SugarLogic/icon_calculated.png" /> Indicates a Calculated field whose value will be automatically determined based on a formula.'
    ,
        'savebtn'	=> 'Klicka på <b>Spara och rulla ut</b> för att spara ändringar och aktivera dem i modulen.',
        'historyBtn'=> 'Klicka på <b>Visa historik</b> för att visa och återställa en sparad layout från historiken.<br><br>Klicka på <b>Återställ</b> i <b>Visa historik</b> för att återställa fältens placering i tidigare sparade layouter. Klicka på ikonen Redigera vid varje fält för att ändra rubrik.',
        'historyRestoreDefaultLayout'=> 'Klicka på <b>Återställ grundlayout</b> för att återställa en vy till sin grundlayout. <br><br><b>Återställ grundlayout</b> återställer bara fältplaceringen i originallayouten. Klicka på ikonen Redigera vid ett fält för att ändra rubrik.',
        'Hidden' 	=> 'Hidden fields not currently available for users to see in list views.',
        'Default'	=> 'Default fields are displayed to users who have not created custom list views.'
    ),
    'searchViewEditor'=>array(
        'modify'	=> 'All of the fields that can be displayed in the <b>Search</b> form appear here.<br><br>The <b>Default</b> column contains the fields that will be displayed in the Search form.<br/><br/>The <b>Hidden</b> column contains fields available for you as an admin to add to the Search form.'
    . '<br/><br/><!--not_in_theme!--><img src="themes/default/images/SugarLogic/icon_dependent.png"/>Indicates a Dependent field that may or may not be visible based on the value of a formula.<br/><!--not_in_theme!--><img src="themes/default/images/SugarLogic/icon_calculated.png" /> Indicates a Calculated field whose value will be automatically determined based on a formula.'
    . '<br/><br/>This configuration applies to popup search layout in legacy modules only.',
        'savebtn'	=> 'Klicka på <b>Spara och rulla ut</b> för att spara alla ändringar och aktivera dem',
        'Hidden' 	=> 'Hidden fields are fields that will not be shown in the search view.',
        'historyBtn'=> 'Klicka på <b>Visa historik</b> för att visa och återställa en sparad layout från historiken.<br><br>Klicka på <b>Återställ</b> i <b>Visa historik</b> för att återställa fältens placering i tidigare sparade layouter. Klicka på ikonen Redigera vid varje fält för att ändra rubrik.',
        'historyRestoreDefaultLayout'=> 'Klicka på <b>Återställ grundlayout</b> för att återställa en vy till sin grundlayout. <br><br><b>Återställ grundlayout</b> återställer bara fältplaceringen i originallayouten. Klicka på ikonen Redigera vid ett fält för att ändra rubrik.',
        'Default'	=> 'Default fields will be shown in the search view.'
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
        'saveBtn'	=> 'Click <b>Save</b> to preserve the changes you make to the layout. If you do not deploy the changes before you leave Studio, the changes will not be displayed in the module.  When you return to Studio to edit the layout, you will view the layout with the preserved changes. The layout will not be displayed in the module until you click <b>Save & Deploy</b>.',
        'historyBtn'=> 'Klicka på <b>Visa historik</b> för att visa och återställa en sparad layout från historiken.<br><br>Klicka på <b>Återställ</b> i <b>Visa historik</b> för att återställa fältens placering i tidigare sparade layouter. Klicka på ikonen Redigera vid varje fält för att ändra rubrik.',
        'historyRestoreDefaultLayout'=> 'Klicka på <b>Återställ grundlayout</b> för att återställa en vy till sin grundlayout. <br><br><b>Återställ grundlayout</b> återställer bara fältplaceringen i originallayouten. Klicka på ikonen Redigera vid ett fält för att ändra rubrik.',
        'publishBtn'=> 'Click <b>Save & Deploy</b> to deploy the layout.<br><br>After deployment, the layout will immediately be displayed in the module.',
        'toolbox'	=> 'The <b>Toolbox</b> contains a variety of useful tools for editing layouts, including the Trash, additional layout elements and the set of available fields.<br/><br/>Any of the elements and fields can be dragged and dropped into the layout, and any layout elements and fields can be dragged and dropped into the Trash.<br/><br/>Dragging a new row or new panel element to the layout will add it in to the layout where it is dropped.<br/><br/>A filler field creates blank space in the layout where it is placed.<br/><br/>Drag and drop any of the available fields onto a field in a panel to swap the two.',
        'panels'	=> 'This area displays how your layout will appear within the module when it is deployed.<br/><br/>You can reposition fields, rows and panels by dragging and dropping them in the desired location.<br/><br/>Remove elements by dragging and dropping them in the Trash in the Toolbox, or add new elements and fields by dragging them from the Toolbox and dropping them in the desired location in the layout.',
        'delete'	=> 'Drag och släpp ett element hit för att ta bort det ur layouten',
        'property'	=> 'Redigera fältets <b>Rubrik</b>.<br><br><b>Bredd</b> anger en bredd i pixlar för Sidecar-moduler såväl som en procentsats av tabellens bredd för bakåtkompatibla moduler.',
    ),
    'fieldsEditor'=>array(
        'default'	=> 'All of the fields that are available for the current module are listed here.<br><br> The standard fields that are included in the module by default appear in the <b>Default</b> area.<br><br>Custom fields that were created for the module appear in the <b>Custom</b> area.<br><br>To edit fields, click the <b>Field Name</b>.  Make changes within the <b>Properties</b> form in the right-hand pane, and click <b>Save</b>.  <br/><br/>While viewing the field properties, you can quickly create a new field with similar properties by clicking <b>Clone</b>.  Make changes, as necessary, and then click <b>Save</b>.<br><br>To create a new field, click <b>Add Field</b>. Enter properties for the field in the <b>Properties</b> form, and click <b>Save</b>. The new field will appear in the <b>Custom</b> area.<br><br>To change labels for any of the fields, click <b>Edit Labels</b>.',
        'mbDefault'=>'<b>Fälten</b> tillgängliga för modulen listas här efter fältnamn.<br><br>Klicka på fältnamnet för att konfigurera ett fält.<br><br>Klicka på <b>Lägg till fält</b> för att lägga till fält. Rubriken och andra inställningar kan ändras efter ett fält skapats genom att klicka på fältnamnet.<br><br>När modulen rullas ut anses de nya fälten som skapats i Module Builder vara standard i modulen i Studio.',
        'addField'	=> 'Välj en <b>datatyp</b> till ditt nya fält. Typen du väljer bestämmer vad för data som kan matas in i fältet. Exempelvis kan bara siffror matas in i fält av typen Heltal.<br><br>Ge fältet ett <b>Namn</b>. Namnet måste vara alfanumeriskt och får inte innehålla mellanslag, dock är understreck tillåtet.<br><br><b>Visningsnamnet</b> är namnet som kommer att visas för fältet i modullayouten. <b>Systemnamnet</b> används för att referera till fältet i koden.<br><br> Beroende på fältets datatyp kan ett antal av följande inställningar användas för fältet:<br><br> <b>Hjälptext</b> visas tillfälligt om användaren håller muspekaren över fältet och kan används för att begära rätt sorts inmatning.<br><br> <b>Kommentarstext</b> kan bara ses i Studio och/eller Module Builder, och används för att beskriva fältet för administratörer<br><br> <b>Standardvärde</b> står i fältet från början. Användaren kan skriva in ett nytt eller använda standard.<br><br> Markera rutan <b>Mass Update</b> för att kunna använda funktionen för detta fält.<br><br> <b>Maximal storlek</b> bestämmer det största antal tecken som kan matas in i fältet.<br><br> Kryssrutan <b>Obligatorisk</b> bestämmer om värdet är obligatoriskt. Ett värde måste i sådana fall anges för att posten skall kunna sparas.<br><br> Kryssrutan <b>Rapporterbar</b> bestämmer om fältet får användas för filter och datavisualisering i Reports.<br><br> Välj rutan <b>Granska</b> för att kunna spåra ändringar i förändringsloggen.<br><br> Välj något av alternativen i fältet <b>Importerbar</b> för att tillåta, förbjuda eller kräva import av fältet i Importguiden.<br><br> Välj ett alternativ i fältet <b>Slå ihop dubletter</b> för att slå på och av funktionerna Slå ihop dubletter och Ta bort dubletter.<br><br> Vissa datatyper har ytterligare inställningar.',
        'editField' => 'Det här fältet kan anpassas.<br><br>Klicka på <b>Klona</b> för att skapa ett nytt fält med samma inställningar.',
        'mbeditField' => '<b>Visningsnamnet</b> för ett fält i en mall kan anpassas. Fältets andra inställningar kan inte ändras.<br><br>Klicka på <b>Klona</b> för att skapa ett nytt fält med samma inställningar.<br><br>För att radera ett fält i en mall så att den inte syns i modulen, ta bort fältet från lämplig <b>Layout</b>.'

    ),
    'exportcustom'=>array(
        'exportHelp'=>'Exportera anpassningar du gjort i Studio genom att skapa paket som kan laddas in i en annan Sugarinstans genom <b>Module Loader</b>.<br><br> Ange först ett <b>Paketnamn</b>. Du kan även ange <b>Författare</b> och <b>Beskrivning</b>.<br><br>Välj moduler som innehåller anpassningarna du vill exportera. Endast anpassade moduler kommer att synas här.<br><br>Klicka sedan <b>Exportera</b> för att skapa en .zip-fil som innehåller paketet med anpassningar.',
        'exportCustomBtn'=>'Klicka på <b>Exportera</b> för att skapa en .zip-fil som innehåller paketet med anpassningar du vill exportera.',
        'name'=>'Detta är paketets <b>Namn</b>. Detta kommer att visas under installation.',
        'author'=>'Detta är <b>Författaren</b> som visas under installation. Författaren kan vara en individ eller ett företag.',
        'description'=>'Detta är <b>beskrivningen</b> på paketet som visas under installationen.',
    ),
    'studioWizard'=>array(
        'mainHelp' 	=> 'Välkommen till <b>Utvecklings</b>området.<br/><br/>Använd verktygen häri för att skapa och hantera standard- och egna moduler och fält.',
        'studioBtn'	=> 'Use <b>Studio</b> to customize installed modules.',
        'mbBtn'		=> 'Använd <b>Module Builder</b> för att skapa nya moduler.',
        'sugarPortalBtn' => 'Använd <b>Sugar Portal Editor</b> för att hantera och anpassa Sugarportalen.',
        'dropDownEditorBtn' => 'Använd <b>Dropdown Editor</b> för att lägga till och redigera globala listrutor för listrutefält.',
        'appBtn' 	=> 'I Applikationsläget kan du anpassa diverse egenskaper i programmet, som hur många rapporter som visas på hemsidan',
        'backBtn'	=> 'Återgå till föregående steg.',
        'studioHelp'=> 'In <b>Studio</b>, you can change how information is displayed, determine what data is available and create custom data fields for <i>installed</i> modules.',
        'studioBCHelp' => 'indicates the module is a backward compatible module',
        'moduleBtn'	=> 'Klicka för att redigera denna modul.',
        'moduleHelp'=> 'Select which module component you would like to edit.',
        'fieldsBtn'	=> 'Determine what information can be stored in the module by controlling the <b>Fields</b> in the module. <br/><br/>You can edit and create new fields to store information.',
        'labelsBtn' => 'Edit the <b>Labels</b> that display for the fields in the module.'	,
        'relationshipsBtn' => 'Lägg till eller se modulens befintliga <b>Relationer</b>.' ,
        'layoutsBtn'=> 'Edit the following module <b>Layouts</b>: Edit View, Detail View, List View and Search View.',
        'subpanelBtn'=> 'Determine what information is displayed in the <b>Subpanels</b> for this module.',
        'portalBtn' =>'Anpassa <b>modullayouterna</b> som visas i <b>Sugarportalen</b>.',
        'layoutsHelp'=> 'Select a <b>Layout</b> to edit.',
        'subpanelHelp'=> 'Select a <b>Subpanel</b> to edit.',
        'newPackage'=>'Klicka på <b>Nytt paket</b> för att skapa ett nytt paket.',
        'exportBtn' => 'Click <b>Export Customizations</b> to create a package containing customizations made in Studio for specific modules.',
        'mbHelp'    => '<b>Welcome to Module Builder.</b><br/><br/>Use <b>Module Builder</b> to create packages containing custom modules based on standard or custom objects. <br/><br/>To begin, click <b>New Package</b> to create a new package, or select a package to edit.',
        'viewBtnEditView' => 'Edit the module&#39;s <b>EditView</b> layout.',
        'viewBtnDetailView' => 'Edit the module&#39;s <b>Detail View</b> layout.',
        'viewBtnDashlet' => 'Anpassa modulens <b>Sugardashlet</b>, inklusive Sugardashletens Listvy och Sökning.<br><br>Sugardashleten kommer att finnas tillgänglig att lägga till i sidor från Hemmodulen.',
        'viewBtnListView' => 'Edit the module&#39;s <b>List View</b> layout.',
        'searchBtn' => 'Edit the module&#39;s <b>Search</b> layouts.',
        'viewBtnQuickCreate' =>  'Edit the module&#39;s <b>Quick Create</b> layout.',

        'searchHelp'=> 'Select a <b>Search Layout</b> to edit.',
        'dashletHelp' =>'Anpassningsbara layouter för <b>Sugardashleten</b> visas här.<br><br>Sugardashleten går att lägga till i sidorna i Hemmodulen.',
        'DashletListViewBtn' =>'<b>Sugardashletens listvy</b> visar poster baserat på Sugardashletens sökfilter.',
        'DashletSearchViewBtn' =>'<b>Sugardashletens sökfunktion</b> filtrerar poster för Sugardashletens listvy.',
        'popupHelp' =>'<b>Popuplayouterna</b> som kan anpassas visas här.<br>',
        'PopupListViewBtn' => '<b>Popuplistvy</b> används för att visa en lista över poster när en eller fler poster skall väljas i relation till den aktuella posten.',
        'PopupSearchViewBtn' => '<b>Popup Search</b> layout allows users to search for records to relate to a current record and appears above the popup listview in the same window. Legacy modules use this layout for popup searching while Sidecar modules use the Search layout’s configuration.',
        'BasicSearchBtn' => 'Edit the <b>Basic Search</b> form that appears in the Basic Search tab in the Search area for the module.',
        'AdvancedSearchBtn' => 'Edit the <b>Advanced Search</b> form that appears in the Advanced Search tab in the Search area for the module.',
        'portalHelp' => 'Överse och anpassa <b>Sugarportalen</b>.',
        'SPUploadCSS' => 'Ladda upp en <b>Stilmall</b> för Sugarportalen.',
        'SPSync' => '<b>Synka</b> anpassningar till Sugarportalsinstansen.',
        'Layouts' => 'Edit the <b>Layouts</b> of the Sugar Portal modules.',
        'portalLayoutHelp' => 'Modulerna i Sugarportalen syns här.<br><br>Välj en modul för att redigera <b>Layouter</b>.',
        'relationshipsHelp' => 'You can relate this module to other modules in the same package or to modules already installed in the application.<br/><br/>To create a new relationship, click <b>Add Relationship</b>. The relationship properties are displayed in the form in the right-hand pane. Use the <b>Relate To</b> drop down list to select the module to which to relate the current module.<br><br>Provide a <b>Label</b> that will display as title of the sub-panel for the related module.<br><br>The relationships between the modules&#39; records will be managed through sub-panels that appear under the Detail Views of the modules.<br><br>For the sub-panel of the related module, you might be able to select different sub-panel layouts, depending on which module is selected for the relationship.<br/><br/> Click <b>Save</b> to create the relationship. Click <b>Delete</b> to delete the selected relationship.<br/><br/>To edit an existing relationship, click the <b>Relationship Name</b>, and edit the properties within the right-hand pane.',
        'relationshipHelp'=>'<b>Relationships</b> can be created between the module and another deployed module.<br><br> Relationships are visually expressed through subpanels and relate fields in the module records.<br><br>Select one of the following relationship <b>Types</b> for the module:<br><br> <b>One-to-One</b> - Both modules&#39; records will contain relate fields.<br><br> <b>One-to-Many</b> - The Primary Module&#39;s record will contain a subpanel, and the Related Module&#39;s record will contain a relate field.<br><br> <b>Many-to-Many</b> - Both modules&#39; records will display subpanels.<br><br> Select the <b>Related Module</b> for the relationship. <br><br>If the relationship type involves subpanels, select the subpanel view for the appropriate modules.<br><br> Click <b>Save</b> to create the relationship.',
        'convertLeadHelp' => "Here you can add modules to the convert layout screen and modify the settings of existing ones.<br/><br/><br />        <b>Ordering:</b><br/><br />        Contacts, Accounts, and Opportunities must maintain their order. You can re-order any other module by dragging its row in the table.<br/><br/><br />        <b>Dependency:</b><br/><br />        If Opportunities is included, Accounts must either be required or removed from the convert layout.<br/><br/><br />        <b>Module:</b> The name of the module.<br/><br/><br />        <b>Required:</b> Required modules must be created or selected before the lead can be converted.<br/><br/><br />        <b>Copy Data:</b> If checked, fields from the lead will be copied to fields with the same name in the newly created records.<br/><br/><br />        <b>Delete:</b> Remove this module from the convert layout.<br/><br/>",
        'editDropDownBtn' => 'Redigera en global rullista',
        'addDropDownBtn' => 'Läg till en ny global rullista',
    ),
    'fieldsHelp'=>array(
        'default'=>'Modulens <b>fält</b> listas här efter namn.<br><br>Modulmallen innehåller en förutbestämd uppsättning fält.<br><br> För att skapa ett nytt fält klicka på <b>Lägg till fält</b>.<br><br>För att redigera ett fält, klicka på <b>Fältnamnet</b>.<br/><br/>Efter att modulen rullats ut ses de nya fälten som skapats i Module Builder, såväl som mallens fält, som standard i Studio.',
    ),
    'relationshipsHelp'=>array(
        'default'=>'<b>Relationerna</b> som skapats mellan modulen och andra moduler syns här.<br><br><b>Relationsnamnet</b> än det systemgenererade namnet för relationen.<br><br>Den <b>Primära modulen</b> är modulen som äger relationerna. Relationens egenskaper sparas i tabellerna som tillhör den primära modulen.<br><br><b>Typen</b> bestämmer hur den primära modulen är relaterad till sin <b>Relaterade modul</b>.<br><br>Klicka på en kolumntitel för att sortera efter den kolumnen.<br><br>Klicka på en rad i relationstabellen för att se och redigera egenskaperna associerade med relationen.<br><br>Klicka på <b>Skapa ny relation</b> för att skapa en ny relation.',
        'addrelbtn'=>'mouse-over-hjälp för &#39;lägg till relation&#39;..',
        'addRelationship'=>'<b>Relationships</b> can be created between the module and another custom module or a deployed module.<br><br> Relationships are visually expressed through subpanels and relate fields in the module records.<br><br>Select one of the following relationship <b>Types</b> for the module:<br><br> <b>One-to-One</b> - Both modules&#39; records will contain relate fields.<br><br> <b>One-to-Many</b> - The Primary Module&#39;s record will contain a subpanel, and the Related Module&#39;s record will contain a relate field.<br><br> <b>Many-to-Many</b> - Both modules&#39; records will display subpanels.<br><br> Select the <b>Related Module</b> for the relationship. <br><br>If the relationship type involves subpanels, select the subpanel view for the appropriate modules.<br><br> Click <b>Save</b> to create the relationship.',
    ),
    'labelsHelp'=>array(
        'default'=> 'Fältens och titlarnas <b>Namn</b> i modulen kan ändras. <br><br>Redigera namnet genom att klicka i fältet, ange ett nytt namn och sedan klicka <b>Spara</b>.<br><br>Om språkpaket används i applikationen kan du välja <b>Språk</b> att använda i namnen.',
        'saveBtn'=>'Klicka på <b>Spara</b> för att spara ändringar.',
        'publishBtn'=>'Klicka på <b>Spara och rulla ut</b> för att spara alla ändringar och aktivera dem.',
    ),
    'portalSync'=>array(
        'default' => 'Enter the <b>Sugar Portal URL</b> of the portal instance to update, and click <b>Go</b>.<br><br>Enter a valid Sugar user name and password, and then click <b>Begin Sync</b>.<br><br>The customizations made to the Sugar Portal <b>Layouts</b>, along with the <b>Style Sheet</b> if one was uploaded, will be transferred to specified the portal instance.',
    ),
    'portalConfig'=>array(
           'default' => '',
       ),
    'portalStyle'=>array(
        'default' => 'From here you can customize the look of the Sugar Portal.',
    ),
),

'assistantHelp'=>array(
    'package'=>array(
            //custom begin
            'nopackages'=>'För att påbörja ett projekt, klicka på <b>Nytt paket</b> för att skapa ett nytt paket för dina egna moduler.<br/><br/>Varje paket kan innehålla en eller fler moduler.<br/><br/>Exempelvis kanske du vill skapa ett paket som innehåller en egen modul relaterad till den vanliga Kontomodulen, eller så kanske du vill skapa ett paket som innehåller flera nya moduler, som jobbar tillsammans i ett projekt relaterade till varann och andra befintliga moduler.',
            'somepackages'=>'Ett <b>paket</b> fungerar som en behållare för egna moduler som alla är del i ett projekt. Paketet kan innehålla en eller fler egna <b>moduler</b> som kan relateras till varann eller andra moduler i applikationen.<br/><br/>Efter att du skapat ett paket åt ditt projekt, kan du skapa moduler åt projektet direkt, eller så kan du återvända till Module Builder senare för att slutföra projektet.<br><br>När projektet är klart kan du <b>Rulla ut</b> paketet för att installera de egna modulerna i applikationen.',
            'afterSave'=>'Your new package should contain at least one module. You can create one or more custom modules for the package.<br/><br/>Click <b>New Module</b> to create a custom module for this package.<br/><br/> After creating at least one module, you can publish or deploy the package to make it available for your instance and/or other users&#39; instances.<br/><br/> To deploy the package in one step within your Sugar instance, click <b>Deploy</b>.<br><br>Click <b>Publish</b> to save the package as a .zip file. After the .zip file is saved to your system, use the <b>Module Loader</b> to upload and install the package within your Sugar instance.  <br/><br/>You can distribute the file to other users to upload and install within their own Sugar instances.',
            'create'=>'Ett <b>paket</b> fungerar som en behållare för anpassade moduler som alla är del i ett projekt. Paketet kan innehålla en eller fler anpassade <b>moduler</b> som kan relateras till varann eller andra moduler i applikationen.<br/><br/>Efter att du skapat ett paket åt ditt projekt, kan du skapa moduler åt projektet direkt, eller så kan du återvända till Module Builder senare för att slutföra projektet.',
            ),
    'main'=>array(
        'welcome'=>'Använd <b>Utvecklingsverktygen</b> för att skapa och hantera vanliga och egna moduler eller fält. <br/><br/>För att hantera moduler i applikationen, klicka på <b>Studio</b>.<br/><br/>För att skapa egna moduler, klicka på <b>Module Builder</b>.',
        'studioWelcome'=>'Alla installerade moduler (inklusive standard- och modulladdade objekt) går att anpassa i Studio.'
    ),
    'module'=>array(
        'somemodules'=>"Eftersom det nuvarande paketet innehåller minst en modul kan du <b>Rulla ut</b> modulerna i paketet i  din Sugarinstans eller <b>Publicera</b> paketet så det kan installeras i din Sugarinstans eller en annan via <b>Module Loader</b>.<br/><br/>För att installera paketet direkt i din Sugarinstans klickar du på <b>Rulla ut</b>.<br><br>För att skapa en .zip-fil av paketet som kan laddas och installeras i din nuvarande eller andra Sugarinstanser med <b>Module Loader</b> klickar du <b>Publicera</b>.<br/><br/>Modulerna kan byggas i steg, och publiceras eller rullas ut när de är klara.<br/><br/>När du publicerat eller rullat ut ett paket kan du ändra paketinställningar och anpassa modulerna mer. Publicera eller rulla ut dem igen sedan för att verkställa ändringarna." ,
        'editView'=> 'Här kan du redigera existerande fält. Du kan ta bort ett befintligt fält eller lägga till fler i högerpanelen.',
        'create'=>'När du väljer vilken <b>Typ</b> av modul du vill skapa bör du ha i åtanke vilken typ av fält du vill ha i modulen. <br/><br/>Varje modulmall innehåller en uppsättning fält som hör till sortens modul beskriven i titeln.<br/><br/><b>Grundmall</b>: innehåller grundläggande fält som förekommer i de flesta moduler, som Namn, Tilldelad, Lag, Skapad, och Beskrivning.<br/><br/><b>Företagsmallen</b> erbjuder organisationsspecifika fält som Företagsnamn, Bransch, och Fakturaadress. Använd den här mallen för att skapa moduler som liknar den inbyggda Kontomodulen.<br/><br/> <b>Personmallen</b> erbjuder individspecifika fält som Titel, Namn, Adress, och Telefonnummer. Använd den här modulen för att skapa moduler som liknar de inbyggda Kontakt- och Möjlig kund-modulerna.<br/><br/><b>Klagomålsmallen</b> erbjuder falls- och buggspecifika fält som Nummer, Status, Prioritet och Beskrivning. Använd den här modulen för att skapa moduler som liknar de inbyggda Fall- och Buggtracker-modulerna.<br/><br/>Obs. att efter modulen skapas kan du redigera fältens namn i mallen såväl som skapa egna fält att lägga till i modullayouten.',
        'afterSave'=>'Anpassa modulen efter dina behov genom att redigera och lägga till fält, sätta upp relationer med andra moduler och arrangera om befintliga fält. <br/><br/>För att se mallens fält och hantera anpassade fält i modulen, klicka på <b>Visa fält</b>.<br/><br/>För att skapa och hantera relationer mellan modulen och andra, oavsett om de redan är i applikationen eller är i samma paket, klicka på <b>Visa relationer</b>.<br/><br/> För att redigera modullayouterna, klicka på <b>Visa layouter</b>. Du kan ändra Detaljvy-, Redigeringsvy- och Listvylayouterna för modulen precis som för moduler redan i applikationen från Studio.<br/><br/> För att skapa en modul med samma egenskaper som den nuvarande modulen, klicka på <b>Duplicera</b>. Du kan anpassa den nya modulen vidare.',
        'viewfields'=>'The fields in the module can be customized to suit your needs.<br/><br/>You can not delete standard fields, but you can remove them from the appropriate layouts within the Layouts pages. <br/><br/>You can edit the labels of the standard fields. The other properties of the standard fields are not editable. However, you can quickly create new fields that have similar properties by clicking a field name and then clicking <b>Clone</b> in the <b>Properties</b> form.  Enter any new properties, and then click <b>Save</b>.<br/><br/>If you are customizing a new module, once the module has been installed, not all of the field properties can be edited.  Set all of the properties for the standard fields and custom fields before you publish and install the package containing the custom module.',
        'viewrelationships'=>'Du kan skapa många-till-många-relationer mellan den nuvarande modulen och andra moduler i paketet, och/eller moduler redan installerade i applikationen.<br><br> För att skapa en-till-många- och en-till-en-förhållanden, klicka på modulernas <b>Relatera-</b> och <b>Flexrelatera</b>fält.',
        'viewlayouts'=>'Du kan kontrollera vilka fält som kan lagra data i <b>Redigeringsvyn</b>. Du kan också kontrollera vilken data som syns i <b>Detaljvyn</b>. Vyerna behöver inte överensstämma. <br/><br/> Formuläret Snabbskapa visas när du klickar på <b>Skapa</b> i en moduls underpanel. Som standard är layouten på <b>Snabbskapa</b> samma som den vanliga <b>Redigeringsvyn</b>. Du kan anpassa Snabbskapa-mallen så att den innehåller färre eller olika fält än Redigeringsvyn. <br><br>Du kan bestämma modulsäkerhet genom Layoutanpassning eller <b>Rollhantering</b>.<br><br>',
        'existingModule' =>'Efter att du skapat och anpassat modulen kan du skapa ytterligare moduler eller återgå till paketet för att <b>Publicera</b> eller <b>Rulla ut</b> paketet.<br><br>För att skapa ytterligare moduler, klicka på <b>Duplicera</b> för att skapa en modul med samma egenskaper som den nuvarande modulen, eller navigera tillbaka till paketet och klicka på <b>Ny modul</b>.<br><br> Om du är redo att <b>Publicera</b> eller <b>Rulla ut</b> paketet som innehåller modulerna kan du navigera tillbaka till paketet för att göra det. Du kan publicera och rulla ut paket som innehåller minst en modul.',
        'labels'=> 'Namnen på både standardfält och anpassade fält kan ändras. Namnbyte påverkar inte data lagrad i fälten.',
    ),
    'listViewEditor'=>array(
        'modify'	=> 'Tre kolumner visas till vänster. "Standard"-kolumnen innehåller de fält som visas i en listvy som standard. Kolumnen "Tillgänglig" innehåller fält som en användare kan använda för att skapa en anpassad listvy. Kolumnen "Dold" innehåller fält som administratörer kan lägga till i antingen Standard eller Tillgänglig, så användare kan komma åt dem, men som just nu är dolda.',
        'savebtn'	=> 'Clicking <b>Save</b> will save all changes and make them active',
        'Hidden' 	=> 'Dolda fält är inte just nu är tillgängliga för användare som vill skapa listvyer.',
        'Available' => 'Tillgängliga fält visas inte som standard, men kan aktiveras av användare.',
        'Default'	=> 'Standardfält visas för de användare som inte anpassat sina inställningar för listvyer.'
    ),

    'searchViewEditor'=>array(
        'modify'	=> 'Två kolumner visas till vänster. "Standard"-kolumnen innehåller de fält som visas i en listvy som standard. Kolumnen "Dold" innehåller fält som du som administratörer kan lägga till i vyn.',
        'savebtn'	=> 'Clicking <b>Save & Deploy</b> will save all changes and make them active',
        'Hidden' 	=> 'Dolda fält kommer inte att visas i sökvyn.',
        'Default'	=> 'Standardfält kommer att visas i sökvyn.'
    ),
    'layoutEditor'=>array(
        'default'	=> 'Det finns två kolumner till vänster. Den högra heter Nuvarande layout eller Förhandsgranskning, och det är där du kan ändra modullayouten. Den vänstra heter Verktygslåda och innehåller användbara element och verktyg för att jobba med layouten. <br/><br/>Om layoutområdet heter Nuvarande layout så jobbar du med en kopia av layouten som just nu används i modulen.<br/><br/>Om det heter Förhandsgranskning så jobbar du med en kopia skapad med Sparaknappen, som redan kan ha ändrats från versionen som användare ser.',
        'saveBtn'	=> 'Den här knappen sparar layouten så att du kan bevara dina ändringar. Din ändrade layout kommer att vara här när du återvänder, men kommer inte att ses av användare förrän du klickar på Spara och Publicera.',
        'publishBtn'=> 'Klicka på den här knappen för att rulla ut layouten. Detta innebär att layouten direkt kommer att synas för modulens användare.',
        'toolbox'	=> 'Verktygslådan innehåller en massa användbara funktioner som en papperskorg, en uppsättning extra element och en uppsättning med tillgängliga fält. Dessa kan alla dras och släppas på layouten.',
        'panels'	=> 'Det här området visar hur layouten ser ut för modulens användare när den rullas ut.<br/><br/>Du kan placera om element som fält, rader och paneler genom att dra och släppa dem. Radera element genom att släppa dem i papperskorgen i verktygslådan, eller lägg till nya element genom att dra dem från verktygslådan dit du vill ha dem.'
    ),
    'dropdownEditor'=>array(
        'default'	=> 'Det finns två kolumner till vänster. Den högra heter Nuvarande layout eller Förhandsgranskning, och det är där du kan ändra modullayouten. Den vänstra heter Verktygslåda och innehåller användbara element och verktyg för att jobba med layouten. <br/><br/>Om layoutområdet heter Nuvarande layout så jobbar du med en kopia av layouten som just nu används i modulen.<br/><br/>Om det heter Förhandsgranskning så jobbar du med en kopia skapad med Sparaknappen, som redan kan ha ändrats från versionen som användare ser.',
        'dropdownaddbtn'=> 'Den här knappen lägger till en ny post i rullgardinsmenyn.',

    ),
    'exportcustom'=>array(
        'exportHelp'=>'Export customizations made in Studio by creating packages that can be uploaded into another Sugar instance through the <b>Module Loader</b>.<br><br>  First, provide a <b>Package Name</b>.  You can provide <b>Author</b> and <b>Description</b> information for package as well.<br><br>Select the module(s) that contain the customizations you wish to export. Only modules containing customizations will appear for you to select.<br><br>Then click <b>Export</b> to create a .zip file for the package containing the customizations.',
        'exportCustomBtn'=>'Click <b>Export</b> to create a .zip file for the package containing the customizations that you wish to export.',
        'name'=>'This is the <b>Name</b> of the package. This name will be displayed during installation.',
        'author'=>'This is the <b>Author</b> that is displayed during installation as the name of the entity that created the package. The Author can be either an individual or a company.',
        'description'=>'This is the <b>Description</b> of the package that is displayed during installation.',
    ),
    'studioWizard'=>array(
        'mainHelp' 	=> 'Välkommen till området <b>Utvecklingsverktyg</b1>. <br/><br/>Använd verktygen här för att skapa och hantera vanliga eller anpassade moduler och fält.',
        'studioBtn'	=> 'Använd <b>Studio</b> för att anpassa installerade moduler genom att ändra fältplacering, vilka fält som är tillgängliga och skapa egna datafält.',
        'mbBtn'		=> 'Använd <b>Module Builder</b> för att skapa nya moduler.',
        'appBtn' 	=> 'Använd Applikationsläget för att anpassa diverse egenskaper i programmet, som hur många rapporter som visas på hemsidan',
        'backBtn'	=> 'Återgå till föregående steg.',
        'studioHelp'=> 'Använd <b>Studio</b> för att anpassa installerade moduler.',
        'moduleBtn'	=> 'Klicka för att redigera denna modul.',
        'moduleHelp'=> 'Välj modulkomponenten du vill redigera',
        'fieldsBtn'	=> 'Välj vilken data som ska sparas i modulen genom att kontrollera modulens <b>Fält</b>.<br/><br/>Du kan redigera och skapa egna fält här.',
        'layoutsBtn'=> 'Anpassa <b>Layouter</b> för Redigera-, Detalj-, List-, och Sökvyerna.',
        'subpanelBtn'=> 'Redigera vad som ska synas i modulens underpaneler.',
        'layoutsHelp'=> 'Välj vilken <b>Layout du vill redigera</b>.<br/<br/>Klicka <b>Redigeringsvy</b> för att ändra layouten som innehåller datafält för inmatning.<br/><br/> Klicka på <b>Detaljvy</b> för att välja layouten som visar datan inmatad i Redigeringsvyn.<br/><br/>Klicka <b>Listvy</b> för att välja välja vilka kolumner som syns i standardlistan.<br/><br/>Klicka på <b>Sök</b> för att ändra layouten på det vanliga och avancerade sökformuläret.',
        'subpanelHelp'=> 'Välj en <b>Underpanel</b> att redigera.',
        'searchHelp' => 'Välj vilken <b>Sök</b>layout du vill redigera.',
        'labelsBtn'	=> 'Redigera <b>Etiketter</b> ska visas för värden i den här modulen.',
        'newPackage'=>'Klicka på <b>Nytt paket</b> för att skapa ett nytt paket.',
        'mbHelp'    => '<b>Välkommen till Module Builder.</b><br/><br/>Använd <b>Module Builder</b> för att skapa egna paket med egna moduler baserade på standard- eller vanliga objekt.<br/><br/>Klicka på <b>Nytt paket</b> för att skapa ett nytt paket eller väl ett paket att redigera.<br/><br/> Ett <b>paket</b> fungerar som en behållare för anpassade moduler som är med i ett projekt. Paketet kan innehålla en eller fler egna moduler relaterade till varann eller till moduler i applikationen.<br/><br/>Exempelvis kanske du vill skapa ett paket som innehåller en egen modul relaterad till den vanliga Kontomodulen, eller så kanske du vill skapa ett paket med ett antal egna moduler relaterade till både varann och till moduler i applikationen.',
        'exportBtn' => 'Klicka på <b>Exportera anpassningar</b> för att skapa ett paket som innehåller anpassningar gjorda för specifika moduler i Studio.',
    ),

),
//HOME
'LBL_HOME_EDIT_DROPDOWNS'=>'Edit Dropdowns',

//ASSISTANT
'LBL_AS_SHOW' => 'Visa assistenten hädanefter.',
'LBL_AS_IGNORE' => 'Ignorera assistenten hädanefter.',
'LBL_AS_SAYS' => 'Assistenten säger:',

//STUDIO2
'LBL_MODULEBUILDER'=>'Module Builder',
'LBL_STUDIO' => 'Studio',
'LBL_DROPDOWNEDITOR' => 'Dropdown Editor',
'LBL_EDIT_DROPDOWN'=>'Redigera rullgardinsmeny',
'LBL_DEVELOPER_TOOLS' => 'Utvecklingverktyg',
'LBL_SUGARPORTAL' => 'Sugarportal-editor',
'LBL_SYNCPORTAL' => 'Sync-portal',
'LBL_PACKAGE_LIST' => 'Paketlista',
'LBL_HOME' => 'Hem',
'LBL_NONE'=>'-Ingen-',
'LBL_DEPLOYE_COMPLETE'=>'Utplacering färdig',
'LBL_DEPLOY_FAILED'   =>'Ett fel uppstod under hanteringen av utplaceringsprocessen, ditt paket kan ha installerats felaktigt',
'LBL_ADD_FIELDS'=>'Add Custom Fields',
'LBL_AVAILABLE_SUBPANELS'=>'Tillgängliga underpaneler',
'LBL_ADVANCED'=>'Advanced',
'LBL_ADVANCED_SEARCH'=>'Avancerad sökning',
'LBL_BASIC'=>'Grundläggande',
'LBL_BASIC_SEARCH'=>'Vanlig sökning',
'LBL_CURRENT_LAYOUT'=>'Current Layout',
'LBL_CURRENCY' => 'Currency',
'LBL_CUSTOM' => 'Anpassad',
'LBL_DASHLET'=>'Sugar Dashlet',
'LBL_DASHLETLISTVIEW'=>'Listvy i Sugardashlet',
'LBL_DASHLETSEARCH'=>'Sugardashlet-sökning',
'LBL_POPUP'=>'Popupvisning',
'LBL_POPUPLIST'=>'Popup Listvisning',
'LBL_POPUPLISTVIEW'=>'Popup Listvisning',
'LBL_POPUPSEARCH'=>'Popup Sök',
'LBL_DASHLETSEARCHVIEW'=>'Sugardashlet-sökning',
'LBL_DISPLAY_HTML'=>'Display HTML Code',
'LBL_DETAILVIEW'=>'Detaljvy',
'LBL_DROP_HERE' => '[Drop Here]',
'LBL_EDIT'=>'Edit',
'LBL_EDIT_LAYOUT'=>'Edit Layout',
'LBL_EDIT_ROWS'=>'Edit Rows',
'LBL_EDIT_COLUMNS'=>'Edit Columns',
'LBL_EDIT_LABELS'=>'Edit Labels',
'LBL_EDIT_PORTAL'=>'Edit Portal for',
'LBL_EDIT_FIELDS'=>'Redigera fält',
'LBL_EDITVIEW'=>'Redigeringsvy',
'LBL_FILTER_SEARCH' => "Sök",
'LBL_FILLER'=>'(utfyllnad)',
'LBL_FIELDS'=>'Fields',
'LBL_FAILED_TO_SAVE' => 'Failed To Save',
'LBL_FAILED_PUBLISHED' => 'Failed to Publish',
'LBL_HOMEPAGE_PREFIX' => 'Min',
'LBL_LAYOUT_PREVIEW'=>'Förhandsgranskning av Layout',
'LBL_LAYOUTS'=>'Layouter',
'LBL_LISTVIEW'=>'Listvy',
'LBL_RECORDVIEW'=>'Postvy',
'LBL_RECORDDASHLETVIEW'=>'Inspelningsvy instrumentpanel',
'LBL_PREVIEWVIEW'=>'Preview View',
'LBL_MODULE_TITLE' => 'Studio',
'LBL_NEW_PACKAGE' => 'Nytt paket',
'LBL_NEW_PANEL'=>'Ny panel',
'LBL_NEW_ROW'=>'Ny rad',
'LBL_PACKAGE_DELETED'=>'Paket Raderad',
'LBL_PUBLISHING' => 'Publishing ...',
'LBL_PUBLISHED' => 'Published',
'LBL_SELECT_FILE'=> 'Select File',
'LBL_SAVE_LAYOUT'=> 'Save Layout',
'LBL_SELECT_A_SUBPANEL' => 'Select a Subpanel',
'LBL_SELECT_SUBPANEL' => 'Select Subpanel',
'LBL_SUBPANELS' => 'Underpaneler',
'LBL_SUBPANEL' => 'Underpanel',
'LBL_SUBPANEL_TITLE' => 'Titel:',
'LBL_SEARCH_FORMS' => 'Search Forms',
'LBL_STAGING_AREA' => 'Staging Area (drag and drop items here)',
'LBL_SUGAR_FIELDS_STAGE' => 'Sugar Fields (click items to add to staging area)',
'LBL_SUGAR_BIN_STAGE' => 'Sugar Bin (click items to add to staging area)',
'LBL_TOOLBOX' => 'Toolbox',
'LBL_VIEW_SUGAR_FIELDS' => 'View Sugar Fields',
'LBL_VIEW_SUGAR_BIN' => 'View Sugar Bin',
'LBL_QUICKCREATE' => 'Snabbskapa',
'LBL_EDIT_DROPDOWNS' => 'Redigera en global rullgardinsmeny',
'LBL_ADD_DROPDOWN' => 'Lägg till en ny global rullgardinsmeny',
'LBL_BLANK' => '-tom-',
'LBL_TAB_ORDER' => 'Flikordning',
'LBL_TAB_PANELS' => 'Aktivera flikar',
'LBL_TAB_PANELS_HELP' => 'När flikar är aktiverade, använd "typ" dropdown boxen<br />för varje sektion för att definiera hur den ska visas (flik eller panel)',
'LBL_TABDEF_TYPE' => 'Visningstyp',
'LBL_TABDEF_TYPE_HELP' => 'Välj hur den här sektionen ska visas. Det här valet har bara om du aktiverat flikar i den här visningen.',
'LBL_TABDEF_TYPE_OPTION_TAB' => 'Flik',
'LBL_TABDEF_TYPE_OPTION_PANEL' => 'Panel',
'LBL_TABDEF_TYPE_OPTION_HELP' => 'Välj Panel för att visa den här panelen inom layouten. Välj Flik för att visa den här panelen som en separat flik inom layouten. När Flik anges för en panel, kommer efterförljande paneler angivits som Panel visas inom fliken. <br />En ny flik startas för nästa panel för vilken flik är vald. Om Fliken väljs för en panel under den första panelen, kommer den första panelen nödvändigtvis bli en flik.',
'LBL_TABDEF_COLLAPSE' => 'Minimeringsbar',
'LBL_TABDEF_COLLAPSE_HELP' => 'Välj för att göra standardutförandet för den här panelen minimerad.',
'LBL_DROPDOWN_TITLE_NAME' => 'Dropdown Name',
'LBL_DROPDOWN_LANGUAGE' => 'Dropdown Language',
'LBL_DROPDOWN_ITEMS' => 'Dropdown Items',
'LBL_DROPDOWN_ITEM_NAME' => 'Elementnamn',
'LBL_DROPDOWN_ITEM_LABEL' => 'Visningsnamn',
'LBL_SYNC_TO_DETAILVIEW' => 'Synka med DetailView',
'LBL_SYNC_TO_DETAILVIEW_HELP' => 'Välj det här alternativet för att synkronisera denna EditView layouten till motsvarande DetailView layouten. Fält och fält placering i EditView<br />kommer synkroniseras och sparas i DetailView automatiskt när du klickar på Spara eller Spara & Använda i EditView.<br />Layoutändringar kommer inte att kunna göras i DetailView.',
'LBL_SYNC_TO_DETAILVIEW_NOTICE' => 'Denna DetailView är synkroniserad med motsvarande EditView.<br />Fält och fält placering i denna DetailView återspeglar fälten och fält placering i EditView.<br />Ändringar av DetailView kan inte sparas eller användas inom denna sida. Gör ändringar eller av-synkronisera layouten i EditView.',
'LBL_COPY_FROM' => 'Kopiera från',
'LBL_COPY_FROM_EDITVIEW' => 'Kopiera från EditView',
'LBL_DROPDOWN_BLANK_WARNING' => 'Värden krävs för både Objektnamn och Visnings märkning. För att lägga till ett tomt objekt, klicka Lägg till utan att lägga in värden för varken Objektnamn och Visnings märkning.',
'LBL_DROPDOWN_KEY_EXISTS' => 'Nyckel finns redan i listan',
'LBL_DROPDOWN_LIST_EMPTY' => 'Listan måste innehålla åtminstone ett aktiverat värde',
'LBL_NO_SAVE_ACTION' => 'Det gick inte att hitta spara åtgärd för denna vy.',
'LBL_BADLY_FORMED_DOCUMENT' => 'Studio2:establishLocation: dåligt formad dokument',
// @TODO: Remove this lang string and uncomment out the string below once studio
// supports removing combo fields if a member field is on the layout already.
'LBL_INDICATES_COMBO_FIELD' => '** Indikerar ett kombinationsfält. En kombination fält är en samling av enskilda områden. Till exempel är "Address" en kombination fält som innehåller "Gatuadress", "Stad", "Postnummer", "Ort" och "Land".<br /><br />Dubbelklicka en kombination fält för att se vilka områden det innehåller.',
'LBL_COMBO_FIELD_CONTAINS' => 'innehåller:',

'LBL_WIRELESSLAYOUTS'=>'Mobil Layout',
'LBL_WIRELESSEDITVIEW'=>'Mobil EditView',
'LBL_WIRELESSDETAILVIEW'=>'Mobil DetailView',
'LBL_WIRELESSLISTVIEW'=>'Mobil ListView',
'LBL_WIRELESSSEARCH'=>'Mobil Sök',

'LBL_BTN_ADD_DEPENDENCY'=>'Lägg till Beroende',
'LBL_BTN_EDIT_FORMULA'=>'Redigera Formel',
'LBL_DEPENDENCY' => 'Beroende',
'LBL_DEPENDANT' => 'Beroende',
'LBL_CALCULATED' => 'Beräknad värde',
'LBL_READ_ONLY' => 'Endast läsa',
'LBL_FORMULA_BUILDER' => 'Formelbyggare',
'LBL_FORMULA_INVALID' => 'Ogiltig Formel',
'LBL_FORMULA_TYPE' => 'Formeln måste vara av typen',
'LBL_NO_FIELDS' => 'Inga Fält Funna',
'LBL_NO_FUNCS' => 'Inga Funktioner funna',
'LBL_SEARCH_FUNCS' => 'Sök Funktioner...',
'LBL_SEARCH_FIELDS' => 'Sök Fält...',
'LBL_FORMULA' => 'Formel',
'LBL_DYNAMIC_VALUES_CHECKBOX' => 'Beroende',
'LBL_DEPENDENT_DROPDOWN_HELP' => 'Dra alternativ från listan till vänster av tillgängliga alternativ i beroende dropdown till listorna till höger för att göra dessa tillgängliga alternativ när förälder alternativet är markerat. Om inga objekt är under en förälder alternativet när föräldern är markerat, kommer beroende dropdown inte visas.',
'LBL_AVAILABLE_OPTIONS' => 'Möjliga alternativ',
'LBL_PARENT_DROPDOWN' => 'Förälder Dropdown',
'LBL_VISIBILITY_EDITOR' => 'Synlighetseditor',
'LBL_ROLLUP' => 'Rollup',
'LBL_RELATED_FIELD' => 'Relaterat Fält',
'LBL_PORTAL_ROLE_DESC' => 'Ta inte bort denna roll. Customer Self-Service Portal Roll är en system genererad roll skapad under Sugar Portal aktiveringsprocessen. Använda Access kontroller inom denna roll för att aktivera och / eller avaktivera buggar, fall eller kunskapsbarmoduler i Sugar Portal. Ändra inte några andra åtkomst inställningar för denna roll för att undvika okända och oförutsägbara systeme beteenden. Vid oavsiktlig radering av denna roll, återskapa den genom att inaktivera och aktivera Sugar Portal.',

//RELATIONSHIPS
'LBL_MODULE' => 'Modul',
'LBL_LHS_MODULE'=>'Primär modul',
'LBL_CUSTOM_RELATIONSHIPS' => '* relationship created in Studio or Module Builder',
'LBL_RELATIONSHIPS'=>'Relationer',
'LBL_RELATIONSHIP_EDIT' => 'Redigera Relation',
'LBL_REL_NAME' => 'Name',
'LBL_REL_LABEL' => 'Label',
'LBL_REL_TYPE' => 'Type',
'LBL_RHS_MODULE'=>'Related Module',
'LBL_NO_RELS' => 'Inga relationer',
'LBL_RELATIONSHIP_ROLE_ENTRIES'=>'Frivilligt villkor' ,
'LBL_RELATIONSHIP_ROLE_COLUMN'=>'Kolumn',
'LBL_RELATIONSHIP_ROLE_VALUE'=>'Värde',
'LBL_SUBPANEL_FROM'=>'Underpanel från',
'LBL_RELATIONSHIP_ONLY'=>'Inga synliga element kommer att skapas för relationen eftersom att det finns en befintlig synlig relation mellan de två modulerna.',
'LBL_ONETOONE' => 'Ett till ett',
'LBL_ONETOMANY' => 'Ett till många',
'LBL_MANYTOONE' => 'Många till En',
'LBL_MANYTOMANY' => 'Många till många',

//STUDIO QUESTIONS
'LBL_QUESTION_FUNCTION' => 'Välj en funktion eller komponent.',
'LBL_QUESTION_MODULE1' => 'Välj en modul.',
'LBL_QUESTION_EDIT' => 'Välj en modul att redigera.',
'LBL_QUESTION_LAYOUT' => 'Välj en layout att redigera.',
'LBL_QUESTION_SUBPANEL' => 'Välj en underpanel att redigera.',
'LBL_QUESTION_SEARCH' => 'Välj en söklayout att redigera.',
'LBL_QUESTION_MODULE' => 'Välj en modulkomponent att redigera.',
'LBL_QUESTION_PACKAGE' => 'Välj ett paket att redigera eller skapa ett nytt paket.',
'LBL_QUESTION_EDITOR' => 'Välj ett verktyg.',
'LBL_QUESTION_DROPDOWN' => 'Välj en rullgardinsmeny att redigera eller skapa en ny.',
'LBL_QUESTION_DASHLET' => 'Välj en dashletlayout att redigera.',
'LBL_QUESTION_POPUP' => 'Välj en popup layout att redigera.',
//CUSTOM FIELDS
'LBL_RELATE_TO'=>'Relatera till',
'LBL_NAME'=>'Name',
'LBL_LABELS'=>'Etiketter',
'LBL_MASS_UPDATE'=>'Mass Update',
'LBL_AUDITED'=>'Audit',
'LBL_CUSTOM_MODULE'=>'Module',
'LBL_DEFAULT_VALUE'=>'Default Value',
'LBL_REQUIRED'=>'Required',
'LBL_DATA_TYPE'=>'Type',
'LBL_HCUSTOM'=>'EGEN',
'LBL_HDEFAULT'=>'STANDARD',
'LBL_LANGUAGE'=>'Language:',
'LBL_CUSTOM_FIELDS' => '*fält skapad i Studio',

//SECTION
'LBL_SECTION_EDLABELS' => 'Edit Labels',
'LBL_SECTION_PACKAGES' => 'Paket',
'LBL_SECTION_PACKAGE' => 'Paket',
'LBL_SECTION_MODULES' => 'Modules',
'LBL_SECTION_PORTAL' => 'Portal',
'LBL_SECTION_DROPDOWNS' => 'Rullgardinsmenyer',
'LBL_SECTION_PROPERTIES' => 'Egenskaper',
'LBL_SECTION_DROPDOWNED' => 'Redigera rullgardinsmeny',
'LBL_SECTION_HELP' => 'Help',
'LBL_SECTION_ACTION' => 'Action',
'LBL_SECTION_MAIN' => 'Primär',
'LBL_SECTION_EDPANELLABEL' => 'Redigera panelnamn',
'LBL_SECTION_FIELDEDITOR' => 'Field Editor',
'LBL_SECTION_DEPLOY' => 'Rulla ut',
'LBL_SECTION_MODULE' => 'Module',
'LBL_SECTION_VISIBILITY_EDITOR'=>'Ändra synlighet',
//WIZARDS

//LIST VIEW EDITOR
'LBL_DEFAULT'=>'Default',
'LBL_HIDDEN'=>'Hidden',
'LBL_AVAILABLE'=>'Available',
'LBL_LISTVIEW_DESCRIPTION'=>'Tre kolumner visas nedan. <b>Standardkolumnen</b> innehåller fält som visas som standard i listvyn. <b>Tilläggskolumnen</b> innehåller fält som användaren kan välja från när de skapar egna vyer.  <b>Tillgänglig-kolumnen</b> innehåller fält som administratörer kan lägga till i antingen Standard eller Tillgänglig, så användare kan komma åt dem.',
'LBL_LISTVIEW_EDIT'=>'List View Editor',

//Manager Backups History
'LBL_MB_PREVIEW'=>'Preview',
'LBL_MB_RESTORE'=>'Restore',
'LBL_MB_DELETE'=>'Delete',
'LBL_MB_COMPARE'=>'Compare',
'LBL_MB_DEFAULT_LAYOUT'=>'Standard Layout',

//END WIZARDS

//BUTTONS
'LBL_BTN_ADD'=>'Add',
'LBL_BTN_SAVE'=>'Save',
'LBL_BTN_SAVE_CHANGES'=>'Spara ändringar',
'LBL_BTN_DONT_SAVE'=>'Kasta ändringar',
'LBL_BTN_CANCEL'=>'Cancel',
'LBL_BTN_CLOSE'=>'Close',
'LBL_BTN_SAVEPUBLISH'=>'Save & Deploy',
'LBL_BTN_NEXT'=>'Next',
'LBL_BTN_BACK'=>'Back',
'LBL_BTN_CLONE'=>'Klon',
'LBL_BTN_COPY' => 'Kopiera',
'LBL_BTN_COPY_FROM' => 'kopiera från...',
'LBL_BTN_ADDCOLS'=>'Add Columns',
'LBL_BTN_ADDROWS'=>'Add Rows',
'LBL_BTN_ADDFIELD'=>'Add Field',
'LBL_BTN_ADDDROPDOWN'=>'Lägg till rullgardinsmeny',
'LBL_BTN_SORT_ASCENDING'=>'Sortera Ökande',
'LBL_BTN_SORT_DESCENDING'=>'Sortera Minskande',
'LBL_BTN_EDLABELS'=>'Edit Labels',
'LBL_BTN_UNDO'=>'Undo',
'LBL_BTN_REDO'=>'Redo',
'LBL_BTN_ADDCUSTOMFIELD'=>'Add Custom Field',
'LBL_BTN_EXPORT'=>'Exportera anpassningar',
'LBL_BTN_DUPLICATE'=>'Duplicera',
'LBL_BTN_PUBLISH'=>'Publish',
'LBL_BTN_DEPLOY'=>'Rulla ut',
'LBL_BTN_EXP'=>'Export',
'LBL_BTN_DELETE'=>'Delete',
'LBL_BTN_VIEW_LAYOUTS'=>'Se layouter',
'LBL_BTN_VIEW_MOBILE_LAYOUTS'=>'Visa Mobil-layouten',
'LBL_BTN_VIEW_FIELDS'=>'Se fält',
'LBL_BTN_VIEW_RELATIONSHIPS'=>'Se relationer',
'LBL_BTN_ADD_RELATIONSHIP'=>'Lägg till relation',
'LBL_BTN_RENAME_MODULE' => 'Ändra Modul Namn',
'LBL_BTN_INSERT'=>'Infoga',
'LBL_BTN_RESTORE_BASE_LAYOUT' => 'Återställ grundlayout',
//TABS

//ERRORS
'ERROR_ALREADY_EXISTS'=> 'Error: Field Already Exists',
'ERROR_INVALID_KEY_VALUE'=> "Error: Invalid Key Value: [&#39;]",
'ERROR_NO_HISTORY' => 'Ingen historikfil funnen',
'ERROR_MINIMUM_FIELDS' => 'Layouten måste innehålla minst ett fält',
'ERROR_GENERIC_TITLE' => 'Ett fel har uppstått.',
'ERROR_REQUIRED_FIELDS' => 'Är du säker på att du vill fortsätta? Följande krävda fält saknas från layouten:',
'ERROR_ARE_YOU_SURE' => 'Är du säker på att du vill fortsätta?',
'ERROR_DATABASE_ROW_SIZE_LIMIT' => 'Fält kan inte skapas. Du har nått gränsen för radstorlek för denna tabell i din databas. <a href="https://support.sugarcrm.com/SmartLinks/Custom/MySQL_Row_Size_Limit/" target="_blank">Läs mer</a>.',

'ERROR_CALCULATED_MOBILE_FIELDS' => 'Följande fält har beräknade värden vilka inte kommer bli återberäknade i real tid i SugarCRM Mobil Edit View:',
'ERROR_CALCULATED_PORTAL_FIELDS' => 'Följande fält har beräknade värden vilka inte kommer bli återberäknade i real tid i SugarCRM Mobil Edit View:',

//SUGAR PORTAL
    'LBL_PORTAL_DISABLED_MODULES' => 'Följande modul(er) är avaktiverade:',
    'LBL_PORTAL_ENABLE_MODULES' => 'Om du önskar att aktivera dem i portal vänligen aktivera dem  <a id="configure_tabs" target="_blank" href="./index.php?module=Administration&amp;action=ConfigureTabs">här</a>.',
    'LBL_PORTAL_CONFIGURE' => 'Konfigurera Portal',
    'LBL_PORTAL_ENABLE_PORTAL' => 'Aktivera portal',
    'LBL_PORTAL_SHOW_KB_NOTES' => 'Aktivera anteckningar i Knowledge Base-modulen',
    'LBL_PORTAL_ALLOW_CLOSE_CASE' => 'Tillåt portalanvändare att avsluta ärenden',
    'LBL_PORTAL_ENABLE_SELF_SIGN_UP' => 'Tillåt nya användare att registrera sig',
    'LBL_PORTAL_USER_PERMISSIONS' => 'Användarrättigheter',
    'LBL_PORTAL_THEME' => 'Tema Portal',
    'LBL_PORTAL_ENABLE' => 'Aktivera',
    'LBL_PORTAL_SITE_URL' => 'Din portal sida är tillgänglig på:',
    'LBL_PORTAL_APP_NAME' => 'Applikation Namn',
    'LBL_PORTAL_CONTACT_PHONE' => 'Telefon',
    'LBL_PORTAL_CONTACT_EMAIL' => 'E-post',
    'LBL_PORTAL_CONTACT_EMAIL_INVALID' => 'Måste ange en giltig e-postadress',
    'LBL_PORTAL_CONTACT_URL' => 'URL',
    'LBL_PORTAL_CONTACT_INFO_ERROR' => 'Minst en kontaktmetod måste anges',
    'LBL_PORTAL_LIST_NUMBER' => 'Antal protokoll att visa på lista',
    'LBL_PORTAL_DETAIL_NUMBER' => 'Antal fält att visa på Detail View',
    'LBL_PORTAL_SEARCH_RESULT_NUMBER' => 'Antal resultat att visa på Global Sök',
    'LBL_PORTAL_DEFAULT_ASSIGN_USER' => 'Standard tilldelning för nya portal registreringar',
    'LBL_PORTAL_MODULES' => 'Portalmoduler',
    'LBL_CONFIG_PORTAL_CONTACT_INFO' => 'Portalkontaktinformation',
    'LBL_CONFIG_PORTAL_CONTACT_INFO_HELP' => 'Konfigurera kontaktinformationen som visas för portalanvändare som begär extra assistans med sitt konto. Minst ett alternativ måste konfigureras.',
    'LBL_CONFIG_PORTAL_MODULES_HELP' => 'Drag och släpp portalmodulernas namn för att ställa in dem att visas eller döljas i portalens översta navigeringsfält. För att styra portalanvändares åtkomst till moduler, använd <a href="?module=ACLRoles&action=index">Rollhantering.</a>',
    'LBL_CONFIG_PORTAL_MODULES_DISPLAYED' => 'Visade moduler',
    'LBL_CONFIG_PORTAL_MODULES_HIDDEN' => 'Dolda moduler',
    'LBL_CONFIG_VISIBILITY' => 'Synlighet',
    'LBL_CASE_VISIBILITY_HELP' => 'Ange vilka portalanvändare som kan se ett ärende.',
    'LBL_EMAIL_VISIBILITY_HELP' => 'Definiera vilka portalanvändare som kan se e-postmeddelanden relaterade till ett ärende. Deltagande kontakter är de i fälten Till, Från, Kopia och Hemlig kopia.',
    'LBL_MESSAGE_VISIBILITY_HELP' => 'Ange vilka portalanvändare som kan se meddelanden relaterade till ett ärende. Deltagande kontakter är de i fältet Gäster.',
    'CASE_VISIBILITY_OPTIONS' => [
        'all' => 'Alla kontakter som är relaterade till kontot',
        'related_contacts' => 'Endast primär kontakt och kontakter relaterade till ärendet',
    ],
    'EMAIL_VISIBILITY_OPTIONS' => [
        'related_contacts' => 'Endast deltagande kontakter',
        'all' => 'Alla kontakter som kan se ärendet',
    ],
    'MESSAGE_VISIBILITY_OPTIONS' => [
        'related_contacts' => 'Endast deltagande kontakter',
        'all' => 'Alla kontakter som kan se ärendet',
    ],


'LBL_PORTAL'=>'Portal',
'LBL_PORTAL_LAYOUTS'=>'Portal-layouter',
'LBL_SYNCP_WELCOME'=>'Ange URL:en till den portalinstans du vill uppdatera.',
'LBL_SP_UPLOADSTYLE'=>'Välj en stilmall att ladda upp från din dator.<br> Stilmallen kommer att implementeras i Sugarportalen nästa gång du synkroniserar.',
'LBL_SP_UPLOADED'=> 'Uploaded',
'ERROR_SP_UPLOADED'=>'Kontrollera att du laddar upp en css-fil.',
'LBL_SP_PREVIEW'=>'Här är en förhandsgranskning av Sugarportalen med din stilmall.',
'LBL_PORTALSITE'=>'Sugar Portal URL:',
'LBL_PORTAL_GO'=>'Kör',
'LBL_UP_STYLE_SHEET'=>'Ladda upp stilmall',
'LBL_QUESTION_SUGAR_PORTAL' => 'Välj en Sugarportallayout att redigera.',
'LBL_QUESTION_PORTAL' => 'Välj en portallayout att redigera.',
'LBL_SUGAR_PORTAL'=>'Sugarportal-editor',
'LBL_USER_SELECT' => '-- Välj --',

//PORTAL PREVIEW
'LBL_CASES'=>'Cases',
'LBL_NEWSLETTERS'=>'Nyhetsbrev',
'LBL_BUG_TRACKER'=>'Buggtracker',
'LBL_MY_ACCOUNT'=>'Mitt konto',
'LBL_LOGOUT'=>'Logout',
'LBL_CREATE_NEW'=>'Create New',
'LBL_LOW'=>'Låg',
'LBL_MEDIUM'=>'Medel',
'LBL_HIGH'=>'Hög',
'LBL_NUMBER'=>'Nummer:',
'LBL_PRIORITY'=>'Priority:',
'LBL_SUBJECT'=>'Subject',

//PACKAGE AND MODULE BUILDER
'LBL_PACKAGE_NAME'=>'Paketnamn:',
'LBL_MODULE_NAME'=>'Modulnamn:',
'LBL_MODULE_NAME_SINGULAR' => 'Singulär modul namn:',
'LBL_AUTHOR'=>'Författare:',
'LBL_DESCRIPTION'=>'Description:',
'LBL_KEY'=>'Nyckel:',
'LBL_ADD_README'=>'Readme',
'LBL_MODULES'=>'Moduler:',
'LBL_LAST_MODIFIED'=>'Senast ändrad:',
'LBL_NEW_MODULE'=>'Ny modul',
'LBL_LABEL'=>'Flertalig rubrik',
'LBL_LABEL_TITLE'=>'Label',
'LBL_SINGULAR_LABEL' => 'Singulär rubrik',
'LBL_WIDTH'=>'Bredd',
'LBL_PACKAGE'=>'Paket:',
'LBL_TYPE'=>'Type:',
'LBL_TEAM_SECURITY'=>'Lagsäkerhet',
'LBL_ASSIGNABLE'=>'Kan tilldelas',
'LBL_PERSON'=>'Person',
'LBL_COMPANY'=>'Företag',
'LBL_ISSUE'=>'Problem',
'LBL_SALE'=>'Affär',
'LBL_FILE'=>'Fil',
'LBL_NAV_TAB'=>'Navigationsflik',
'LBL_CREATE'=>'Create',
'LBL_LIST'=>'List',
'LBL_VIEW'=>'Visa',
'LBL_LIST_VIEW'=>'Listvy',
'LBL_HISTORY'=>'History',
'LBL_RESTORE_DEFAULT_LAYOUT'=>'Återställ standardlayout',
'LBL_ACTIVITIES'=>'Aktivitetsström',
'LBL_SEARCH'=>'Search',
'LBL_NEW'=>'Ny',
'LBL_TYPE_BASIC'=>'grundläggande',
'LBL_TYPE_COMPANY'=>'företag',
'LBL_TYPE_PERSON'=>'person',
'LBL_TYPE_ISSUE'=>'problem',
'LBL_TYPE_SALE'=>'affär',
'LBL_TYPE_FILE'=>'fil',
'LBL_RSUB'=>'Detta är underpanelen som visas i din modul',
'LBL_MSUB'=>'Detta är underpanelen din modul visar i den relaterade modulen',
'LBL_MB_IMPORTABLE'=>'Tillåt importer',

// VISIBILITY EDITOR
'LBL_VE_VISIBLE'=>'visningsbar',
'LBL_VE_HIDDEN'=>'dold',
'LBL_PACKAGE_WAS_DELETED'=>'[[package]] raderades',

//EXPORT CUSTOMS
'LBL_EC_TITLE'=>'Exportera anpassningar',
'LBL_EC_NAME'=>'Paketnamn:',
'LBL_EC_AUTHOR'=>'Författare:',
'LBL_EC_DESCRIPTION'=>'Description:',
'LBL_EC_KEY'=>'Nyckel:',
'LBL_EC_CHECKERROR'=>'Välj en modul.',
'LBL_EC_CUSTOMFIELD'=>'anpassade fält',
'LBL_EC_CUSTOMLAYOUT'=>'anpassade layouter',
'LBL_EC_CUSTOMDROPDOWN' => 'anpassade dropdown(s)',
'LBL_EC_NOCUSTOM'=>'Inga moduler har anpassats.',
'LBL_EC_EXPORTBTN'=>'Export',
'LBL_MODULE_DEPLOYED' => 'Modulen har rullats ut.',
'LBL_UNDEFINED' => 'odefinierad',
'LBL_EC_CUSTOMLABEL'=>'anpassade etikett (er)',

//AJAX STATUS
'LBL_AJAX_FAILED_DATA' => 'Kunde inte hämta data',
'LBL_AJAX_TIME_DEPENDENT' => 'A time dependent action is in progress please wait and try again in a few seconds',
'LBL_AJAX_LOADING' => 'Laddar...',
'LBL_AJAX_DELETING' => 'Raderar...',
'LBL_AJAX_BUILDPROGRESS' => 'Bygger...',
'LBL_AJAX_DEPLOYPROGRESS' => 'Rullar ut...',
'LBL_AJAX_FIELD_EXISTS' =>'Fältnamnet du angav finns redan. Vänligen skriv in nytt fältnamn.',
//JS
'LBL_JS_REMOVE_PACKAGE' => 'Är du säker på att du vill radera paketet? Detta kommer att radera alla filer som hör till paketet och kan inte ångras.',
'LBL_JS_REMOVE_MODULE' => 'Är du säker på att du vill ta bort den här modulen? Det kommer permanent radera alla filer tillhörande den här modulen.',
'LBL_JS_DEPLOY_PACKAGE' => 'Alla anpassningar som du gjort i Studio kommer att skrivas över när denna modul omgrupperas. Är du säker på att du vill fortsätta?',

'LBL_DEPLOY_IN_PROGRESS' => 'Rullar ut paket',
'LBL_JS_VALIDATE_NAME'=>'Name - Must be alphanumeric with no spaces and starting with a letter',
'LBL_JS_VALIDATE_PACKAGE_KEY'=>'Paketnyckeln finns redan',
'LBL_JS_VALIDATE_PACKAGE_NAME'=>'Paketnamn existerar redan',
'LBL_JS_PACKAGE_NAME'=>'Paketets namn - måste börja med en bokstav och kan endast bestå av bokstäver, siffror och understreck. Inga blanksteg eller andra specialtecken får användas.',
'LBL_JS_VALIDATE_KEY_WITH_SPACE'=>'Nyckel - Måste vara alfanumeriska och börja med en bokstav.',
'LBL_JS_VALIDATE_KEY'=>'Nyckel - Måste vara alfanumerisk, börja med en bokstav och får inte innehålla mellanrum.',
'LBL_JS_VALIDATE_LABEL'=>'Ange ett namn som kommer att användas som visningsnamn för modulen',
'LBL_JS_VALIDATE_TYPE'=>'Välj vilken typ av modul du vill bygga ur listan ovan',
'LBL_JS_VALIDATE_REL_NAME'=>'Namn; måste vara alfanumeriskt utan mellanslag',
'LBL_JS_VALIDATE_REL_LABEL'=>'Etikett; ange en etikett som kommer att synas ovanför underpanelen',

// Dropdown lists
'LBL_JS_DELETE_REQUIRED_DDL_ITEM' => 'Är du säker på att du vill radera denna erfordras rullgardinsmeny objekt? Detta kan påverka funktionaliteten hos din applikation.',

// Specific dropdown list should be:
// LBL_JS_DELETE_REQUIRED_DDL_ITEM_(UPPERCASE_DDL_NAME)
'LBL_JS_DELETE_REQUIRED_DDL_ITEM_SALES_STAGE_DOM' => 'Är du säker på att du vill ta bort denna rullgardinslista objekt? Radering av Stängt Vunna eller Stängt Förlorade stadier gör att prognosmodulen inte fungerar korrekt',

// Specific list items should be:
// LBL_JS_DELETE_REQUIRED_DDL_ITEM_(UPPERCASE_ITEM_NAME)
// Item name should have all special characters removed and spaces converted to
// underscores
'LBL_JS_DELETE_REQUIRED_DDL_ITEM_NEW' => 'Är du säker på att du vill ta bort Nya försäljningsstatus? Radera denna status kommer att orsaka att modulen Intäkts posters arbetsflöde inte vill fungera korrekt.',
'LBL_JS_DELETE_REQUIRED_DDL_ITEM_IN_PROGRESS' => 'Är du säker på att du vill ta bort In Progress försäljningsstatus? Radera denna status kommer att orsaka att modulen Opportunities intäktslinjepost arbetsflöde at inte fungera korrekt.',
'LBL_JS_DELETE_REQUIRED_DDL_ITEM_CLOSED_WON' => 'Är du säker på att du vill ta bort Closed Won försäljningsfas? Radera detta stadium kommer att orsaka att prognosmodulen inte fungerar korrekt',
'LBL_JS_DELETE_REQUIRED_DDL_ITEM_CLOSED_LOST' => 'Är du säker på att du vill ta bort Closed Förlorade försäljningsfas? Radera detta stadium kommer att orsaka att prognosmodulen inte fungerar korrekt',

//CONFIRM
'LBL_CONFIRM_FIELD_DELETE'=>'Deleting this custom field will delete both the custom field and all the data related to the custom field in the database. The field will be no longer appear in any module layouts.'
        . ' If the field is involved in a formula to calculate values for any fields, the formula will no longer work.'
        . '\n\nThe field will no longer be available to use in Reports; this change will be in effect after logging out and logging back in to the application. Any reports containing the field will need to be updated in order to be able to be run.'
        . '\n\nDo you wish to continue?',
'LBL_CONFIRM_RELATIONSHIP_DELETE'=>'Are you sure you wish to delete this relationship?',
'LBL_CONFIRM_RELATIONSHIP_DEPLOY'=>'Detta kommer att göra relationen permanent. Är du säker på att du vill rulla ut relationen?',
'LBL_CONFIRM_DONT_SAVE' => 'Ändringar har gjorts sedan du sparade senast, vill du spara?',
'LBL_CONFIRM_DONT_SAVE_TITLE' => 'Spara ändringar?',
'LBL_CONFIRM_LOWER_LENGTH' => 'Data kan trunkeras och detta kan inte ångras, är du säker på att du vill fortsätta?',

//POPUP HELP
'LBL_POPHELP_FIELD_DATA_TYPE'=>'Välj en lämplig datatyp för inmatning i fältet.',
'LBL_POPHELP_FTS_FIELD_CONFIG' => 'Anpassa fältet för fulltextsökning.',
'LBL_POPHELP_FTS_FIELD_BOOST' => '"Boosting" eller förstärkning är en metod för att göra fälten i en post mer relevanta.<br />Fält med högre boostnivå får mer vikt i en sökning. När resultaten från en sökning visas kommer träffar med större vikt att visas högre i resultaten.<br />Grundvärdet är 1,0 vilket är ett neutralt boostvärde. Alla boostvärden över 1 representerar positiv boost, och alla under 1 är negativa. Exempelvis representerar boostvärdet 1,35 en förstärkning på 135%, och 0,6 representerar 60%.<br />Obs. att en fulltext-omindexering inte längre är nödvändig.',
'LBL_POPHELP_IMPORTABLE'=>'<b>Ja</b>: Fältet kommer att inkluderas i en import.<br><b>Nej</b>: Fältet kommer inte att inkluderas i en import.<br><b>Obligatorisk</b>: Ett värde måste inkluderas i en import.',
'LBL_POPHELP_PII'=>'Det här fältet kommer automatiskt att markeras för granskning och är tillgängligt i vyn för personliga information.<br>Fälten med personlig information kan även raderas permanent när posten är relaterad till en datasekretess raderingsförfrågan.<br>Radering sker via modulen för datasekretess och kan utföras av administratörer eller användare i rollen chef för datasekretess.',
'LBL_POPHELP_IMAGE_WIDTH'=>'Ange ett värde för Bredd, mätt i pixlar.<br />Den uppladdade bilden skalas till denna bredd.',
'LBL_POPHELP_IMAGE_HEIGHT'=>'Ange ett värde för Höjd, mätt i pixlar.<br />Den uppladdade bilden skalas till denna höjd.',
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
'LBL_POPHELP_REQUIRED'=>"Skapa en formel för att avgöra om detta fält är obligatoriskt i layouter.<br/>"
    . "Obligatoriska fält följer formeln i webbläsarbaserad mobilvy, <br/>"
    . "men kommer att följa formeln i de nativa applikationerna, såsom Sugar Mobile för iPhone.<br/>"
    . "De kommer inte att följa formeln på Sugar Self-Service-portalen.",
'LBL_POPHELP_READONLY'=>"Skapa en formel för att avgöra om detta fält är skrivskyddat i layouter.<br/>"
        . "Skrivskyddade fält följer formeln i den webbläsarbaserad mobilvyn, <br/>"
        . "men kommer inte att följa formeln i de nativa applikationerna, såsom Sugar Mobile för iPhone.<br/>"
        . "De kommer inte att följa formeln på Sugar Self Service-portalen.",
'LBL_POPHELP_GLOBAL_SEARCH'=>'Markera fältet för att använda det när du söker efter poster med Global Search på denna modul.',
//Revert Module labels
'LBL_RESET' => 'Återställ',
'LBL_RESET_MODULE' => 'Reset Modul',
'LBL_REMOVE_CUSTOM' => 'Ta bort Anpassningar',
'LBL_CLEAR_RELATIONSHIPS' => 'Rensa Relationer',
'LBL_RESET_LABELS' => 'Återställ Labels',
'LBL_RESET_LAYOUTS' => 'Återställ layouter',
'LBL_REMOVE_FIELDS' => 'Ta bort Anpassade Fält',
'LBL_CLEAR_EXTENSIONS' => 'Rensa Tillägg',

'LBL_HISTORY_TIMESTAMP' => 'Tidsstämpel',
'LBL_HISTORY_TITLE' => 'historik',

'fieldTypes' => array(
                'varchar'=>'Textfält',
                'int'=>'Heltal',
                'float'=>'Flyttal',
                'bool'=>'Kryssruta',
                'enum'=>'Rullgardin',
                'multienum' => 'Flerval',
                'date'=>'Datum:',
                'phone' => 'Telefon',
                'currency' => 'Valuta',
                'html' => 'HTML',
                'radioenum' => 'Radio',
                'relate' => 'Relatera',
                'address' => 'Adress',
                'text' => 'Textområde',
                'url' => 'URL',
                'iframe' => 'IFrame',
                'image' => 'Bild',
                'encrypt'=>'Kryptera',
                'datetimecombo' =>'Datum och tid',
                'decimal'=>'Decimaltal',
                'autoincrement' => 'Automatisk ökning',
                'actionbutton' => 'Åtgärdsknapp',
),
'labelTypes' => array(
    "" => "Frekvent använda labels",
    "all" => "Alla Labels",
),

'parent' => 'Flexrelatera',

'LBL_ILLEGAL_FIELD_VALUE' =>"Drop down nyckel kan inte innehålla citationstecken.",
'LBL_CONFIRM_SAVE_DROPDOWN' =>"Du väljer detta objekt för borttagning i dropdown listan. Eventuella dropdown områden med denna lista med detta objekt som ett värde visas inte längre värdet och värdet kommer inte längre att kunna väljas från dropdown fält. Är du säker på att du vill fortsätta?",
'LBL_POPHELP_VALIDATE_US_PHONE'=>"Select to validate this field for the entry of a 10-digit<br>" .
                                 "phone number, with allowance for the country code 1, and<br>" .
                                 "to apply a U.S. format to the phone number when the record<br>" .
                                 "is saved. The following format will be applied: (xxx) xxx-xxxx.",
'LBL_ALL_MODULES'=>'Alla moduler',
'LBL_RELATED_FIELD_ID_NAME_LABEL' => '{0} (relaterad {1} ID)',
'LBL_HEADER_COPY_FROM_LAYOUT' => 'Koiera från layout',
'LBL_RELATIONSHIP_TYPE' => 'Relation',

// Edit Labels
'LBL_COMPARISON_LANGUAGE' => 'Jämförelsespråk',
'LBL_LABEL_NOT_TRANSLATED' => 'Den här etiketten får inte översättas',
);
