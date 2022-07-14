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
    'LBL_LOADING' => 'ngarkimi...' /*for 508 compliance fix*/,
    'LBL_HIDEOPTIONS' => 'Fshih opcione' /*for 508 compliance fix*/,
    'LBL_DELETE' => 'Fshi' /*for 508 compliance fix*/,
    'LBL_POWERED_BY_SUGAR' => 'Mundësuar nga SugarCRM' /*for 508 compliance fix*/,
    'LBL_ROLE' => 'Roli',
    'LBL_BASE_LAYOUT' => 'Struktura bazë',
    'LBL_FIELD_NAME' => 'Emri i fushës',
    'LBL_FIELD_VALUE' => 'Vlera',
    'LBL_LAYOUT_DETERMINED_BY' => 'Struktura e përcaktuar nga:',
    'layoutDeterminedBy' => [
        'std' => 'Strukturë standarde',
        'role' => 'Roli',
        'dropdown' => 'Fushë me lëshim poshtë',
    ],
    'LBL_DELETE_CUSTOM_LAYOUTS' => 'Të gjitha strukturat e personalizuara do të hiqen. Je i sigurt që dëshiron të ndryshosh përkufizimet e tua aktuale të strukturës?',
'help'=>array(
    'package'=>array(
            'create'=>'krijoni<br />Ofroni emrin për paketën. Emri që ju keni shkruar duhet të jetë alfanumerik dhe nuk duhet të përmbaje hapësira. (Shembull: HR_Management)<br /><br />Ju mund të ofroni Autorin dhe Përshkrimin e informacionit për paketën.<br /><br />Klikoni Ruaj për të krijuar paketën.',
            'modify'=>'modifikoni<br />Pronat dhe veprimet e mundshme për Paketën do të shfaqen këtu.<br /><br />Ju mund të modifikoni emrin, Autorin dhe Përshkrimin e paketës, si dhe të shikoni dhe të përshtateni të gjitha modulet e përfshira në paketën.<br /><br />Klikoni Modulin e ri për të krijuar një modul për paketën.<br /><br />Nëse paketa përmban të paktën një modul, ju mund të publikoni dhe të instaloni paketën, si dhe të Eksportoni Përshtatjet e bëra në paketë.',
            'name'=>'emër<br />Ky është Emri i paketës aktuale.<br /><br />Emri që keni shkruar duhet të jetë alfanumerik, të fillojë me një letër dhe të mos përmbaje hapësira. (Shembull: HR_Management)',
            'author'=>'autor<br />Ky është Autori që është shfaqur gjatë instalimit si emër i subjektit që e ka krijuar paketën.<br /><br />Autori mund të jetë ose një individ apo kompani.',
            'description'=>'përshkrim<br />Ky është Përshkrimi i paketës që është shfaqur gjatë instalimit.',
            'publishbtn'=>'publikimbtn<br />Klikoni Publikim për të ruajtur të gjitha të dhënat e futura dhe për të krijuar një dosje .zip që është një version instalues i paketës.<br /><br />Përdoreni Modulin ngarkues për të ngarkoni dosjen .zip dhe instaloni paketën.',
            'deploybtn'=>'vendosbtn<br />Klikoni Vendos për të ruajtur të gjitha të dhënat e futura dhe për të instaluar paketën, duke përfshirë të gjitha modulet, në shkallën aktuale.',
            'duplicatebtn'=>'duplikatëbtn<br />Klikoni Duplikatë të kopoje përmbajtjen e paketës në një paketë të re dhe për të shfaqur paketën e re.<br /><br />Për paketën e re, një emër i ri do të gjenerohet automatikisht duke bashkëngjitur një numër në fund të emrit të paketës së përdorur për të krijuar një të re. Ju mund të riemërtoni paketën e re duke hyrë me një emër të ri dhe duke klikuar Ruaj.',
            'exportbtn'=>'eksportbtn<br />Klikoni Eksport për të krijuar një dosje .zip që përmban Përshtatjet e bëra në paketë.<br /><br />Dosja e gjeneruar nuk është një version instalues i paketës.<br /><br />Përdoreni modulin ngarkues për importin e dosjes .zip që të keni paketën, duke përfshirë përshtatjet, të paraqitura në Modulin ndërtues.',
            'deletebtn'=>'fshibtn<br />Klikoni Fshi të fshini këtë paketë dhe të gjitha dosjet në lidhje me këtë paketë.',
            'savebtn'=>'ruajbtn<br />Klikoni Ruaj për të ruajtur të gjitha të dhënat e futura në lidhje me paketën.',
            'existing_module'=>'moduli_ekzistues<br />Klikoni ikonën e Modulit për të ndryshuar pronat dhe përshtatjen e fushave, lidhjet dhe paraqitjet që lidhen me modulin.',
            'new_module'=>'moduli_ri<br />Klikoni Modulin e Ri për të krijuar një modul të ri për këtë paketë.',
            'key'=>'Kjo letra e- 5, e çelësit alafanumerik do të përdoret për prefiksin e të gjitha drejtorive, emrat e klasës dhe tabelat e bazës së të dhënave për të gjitha modulet në paketën e aktuale.',
            'readme'=>'lexoni <br />Klikoni për të shtuar tekstin e Leximit për këtë paketë.<br /><br />Leximi do të jenë në dispozicion në kohën e instalimit.',

),
    'main'=>array(

    ),
    'module'=>array(
        'create'=>'krijoni<br />Ofroni një emër për modulin.Etiketa që ju ofroni do të shfaqet në skedën e navigacionit.<br /><br />Zgjidhni për të shfaqur një skedë navigacioni për modulin duke kontrolluar  kutinë e kontrollit të skedës së Navigacionit.<br /><br />Kontrolloni kutinë për Sigurimin e Grupit të keni një fushë të selektuar  brenda regjistrimeve të modulit.<br /><br />Pastaj zgjidhni llojin e modulit që do të donit të krijoni.<br /><br />Selektoni një lloj shablloni. Çdo shabllon përmban një grup të veçantë të fushave, si dhe para-përcaktimi i Paraqitjeve, për të përdorur si bazë për modulin tuaj.<br /><br />Kliko Ruaj për të krijuar modulin.',
        'modify'=>'Ka dy kolona të shfaqura në të majtë. "Parazgjedhja" e kolonës përmban fushat që do të shfaqen në pamjen e kërkimit, dhe "fshehur" në kolonën që përmban fushat në dispozicion për ju si një admin për të shtuar pamjen..',
        'importable'=>'Vendosja e shenjës në kutinë <b>E importueshme</b> do të aktivizojë importimin për këtë modul.<br><br>Në panelin Shkurtoret në modul do të shfaqet një lidhje me Ekspertin e importit.  Eksperti i importit lehtëson importin e të dhënave nga burime të jashtme në modulin e personalizuar.',
        'team_security'=>'Checking the <b>Team Security</b> checkbox will enable team security for this module.  <br/><br/>If team security is enabled, the Team selection field will appear within the records in the module',
        'reportable'=>'Vendosja e shenjës në këtë kuti do ta lejojë këtë modul të bëjë raporte kundër tij.',
        'assignable'=>'Vendosja e shenjës në këtë kuti do të lejojë që një regjistrim në këtë modul t&#39;i caktohet përdoruesit të zgjedhur.',
        'has_tab'=>'Vendosja e shenjës në <b>Skedën e navigimit</b> do të japë një skedë navigimi për modulin.',
        'acl'=>'Vendosja e shenjës në këtë kuti do të aktivizojë kontrollet e hyrjes në këtë modul, përfshirë sigurinë në nivel fushe.',
        'studio'=>'Vendosja e shenjës në këtë kuti do të lejojë administratorët ta personalizojnë këtë modul brenda Studios.',
        'audit'=>'Vendosja e shenjës në këtë kuti do të aktivizojë Kontrollin për këtë modul. Ndryshimet në fusha të caktuara do të regjistrohen në mënyrë që administratorët ta shqyrtojnë historikun e ndryshimit.',
        'viewfieldsbtn'=>'Kliko <b>Shiko fushat</b> për të parë fushat e lidhura me modulin dhe për të krijuar dhe modifikuar fushat e personalizuara.',
        'viewrelsbtn'=>'Kliko <b>Shiko marrëdhëniet</b> për të parë marrëdhëniet e lidhura me këtë modul dhe për të krijuar marrëdhënie të reja.',
        'viewlayoutsbtn'=>'Kliko <b>Shiko paraqitjet</b> për të parë paraqitjet për modulin dhe për të personalizuar sistemimin e fushës brenda paraqitjes.',
        'viewmobilelayoutsbtn' => 'Kliko <b>Shiko Faqosjet Mobile</b> për të parë faqosjet mobile për ketë modul dhe të rregulloni marrëveshjen në terren brenda faqosjeve.',
        'duplicatebtn'=>'duplikatëbtn<br />Klikoni Duplikatë të kopoje përmbajtjen e paketës në një paketë të re dhe për të shfaqur paketën e re.<br /><br />Për paketën e re, një emër i ri do të gjenerohet automatikisht duke bashkëngjitur një numër në fund të emrit të paketës së përdorur për të krijuar një të re. Ju mund të riemërtoni paketën e re duke hyrë me një emër të ri dhe duke klikuar Ruaj.',
        'deletebtn'=>'fshibtn<br />Klikoni Fshi të fshini këtë paketë dhe të gjitha dosjet në lidhje me këtë paketë.',
        'name'=>'Ky është <b>Emri</b> i modulit aktual.<br/><br/>Emri duhet të jetë alfanumerik dhe duhet të fillojë me një germë dhe të mos përmbajë hapësira. (Shembull: HR_Management)',
        'label'=>'This is the <b>Label</b> that will appear in the navigation tab for the module.',
        'savebtn'=>'Kliko <b>Ruaj</b> për të ruajtur të gjitha të dhënat e vendosura që lidhen me modulin.',
        'type_basic'=>'Lloji i shabllonit <b>Bazë</b> ofron fushat bazë, si p.sh. fushat Emri, Caktuar te, Ekipi, Data e krijimit dhe Përshkrimi.',
        'type_company'=>'Lloji i shabllonit <b>Kompania</b> ofron fusha specifike për organizatën, si p.sh. Emri i kompanisë, Industria dhe Adresa e faturimit.<br/><br/>Përdorni këtë shabllon për të krijuar module që janë të ngjashme me modulin standard Llogaritë.',
        'type_issue'=>'Lloji i shabllonit <b>Issue</b> ofron fusha specifike për rastet dhe gabimet, si p.sh. Numri, Statusi, Prioriteti dhe Përshkrimi.<br/><br/>Përdorni këtë shabllon për të krijuar module të ngjashme me modulet e gjurmimit të rastit dhe gabimeve.',
        'type_person'=>'Lloji i shabllonit <b>Personi</b> ofron fusha specifike për individët, si p.sh. Përshëndetjet, Titulli, Emri, Adresa dhe Numri i telefonit.<br/><br/>Përdorni këtë shabllon për të krijuar module të ngashme me modulet standarde të kontakteve dhe udhëzuesve.',
        'type_sale'=>'Lloji i shabllonit <b>Personi</b> ofron fusha specifike për individët, si p.sh. Përshëndetjet, Titulli, Emri, Adresa dhe Numri i telefonit.<br/><br/>Përdorni këtë shabllon për të krijuar module të ngjashme me modulet standarde të kontakteve dhe udhëzuesve.',
        'type_file'=>'The <b>File</b> template provides Document specific fields, such as File Name, Document type, and Publish Date.<br><br>Përdorni këtë shabllon për të krijuar module të ngjashme me modulet standarde të dokumenteve.',

    ),
    'dropdowns'=>array(
        'default' => 'Parazgjedhja<br />Të gjitha të tërheqjet për aplikim janë të shënuara këtu.<br /><br />Tërheqjet mund të përdoren për fushat e tërheqjes në çdo modul.<br /><br />Për të bërë ndryshime në një dropdown ekzistues, klikoni mbi emrin dropdown.<br /><br />Kliko Shto dropdown për të krijuar një dropdown të ri.',
        'editdropdown'=>'Listat me zbritje mund të përdoren për fushat standarde ose të personalizuara me zbritje në çdo modul.<br><br>Jepni një <b>Emër</b> për listën me zbritje.<br><br>Nëse paketat e gjuhës janë instaluar në aplikacion, mund të zgjidhni <b>Gjuhën</b> për të përdorur zërat e listës.<br><br>Në fushën <b>Emri i zërit</b> jepni një emër për opsionin në listën me zbritje.  Ky emër nuk do të shfaqet në listën me zbritje që është e dukshme për përdoruesit.<br><br>Në fushën <b>Etiketa e afishimit</b> jepni një etiketë që do të jetë e dukshme për përdoruesit.<br><br>Pasi të jepni emrin e zërit dhe etiketën e afishimit, klikoni <b>Shto</b> për të shtuar zërin në listën me zbritje.<br><br>Për të rirenditur zërat në listë, tërhiqni dhe lëshoni zërat në pozicionet e dëshiruara.<br><br>Për të modifikuar etiketën e afishimit të një zëri, klikoni <b>Modifiko ikonën</b> dhe jepni një etiketë të re. Për ta fshirë një zë nga lista me zbritje, klikoni <b>Fshi ikonën</b>.<br><br>Për ta zhbërë një ndryshim te një etiketë afishimi, klikoni <b>Zhbëj</b>.  Për ta ribërë një ndryshim të zhbërë, klikoni <b>Ribëj</b>.<br><br>Klikoni <b>Ruaj</b> për të ruajtur listën me zbritje.',

    ),
    'subPanelEditor'=>array(
        'modify'	=> 'All of the fields that can be displayed in the <b>Subpanel</b> appear here.<br><br>The <b>Default</b> column contains the fields that are displayed in the Subpanel.<br/><br/>The <b>Hidden</b> column contains fields that can be added to the Default column.'
    . '<br/><br/><!--not_in_theme!--><img src="themes/default/images/SugarLogic/icon_dependent.png"/>Indicates a Dependent field that may or may not be visible based on the value of a formula.<br/><!--not_in_theme!--><img src="themes/default/images/SugarLogic/icon_calculated.png" /> Indicates a Calculated field whose value will be automatically determined based on a formula.'
    ,
        'savebtn'	=> 'Klikoni <b>Ruaj dhe nis</b> për të ruajtur ndryshimet e bëra dhe për t&#39;i bërë aktive brenda modulit.',
        'historyBtn'=> 'Klikoni <b>Shiko historikun</b> për të parë e për të rikthyer paraqitjen e ruajtur më parë nga historiku.',
        'historyRestoreDefaultLayout'=> 'Klikoni <b>Rikthe paraqitjen e paracaktuar</b> për të rikthyer një pamje në paraqitjen e saj fillestare.',
        'Hidden' 	=> 'Fushat <b>e fshehura</b> nuk shfaqen në panelin e poshtëm.',
        'Default'	=> 'Fushat <b>e paracaktuara</b> shfaqen në panelin e poshtëm.',

    ),
    'listViewEditor'=>array(
        'modify'	=> 'All of the fields that can be displayed in the <b>ListView</b> appear here.<br><br>The <b>Default</b> column contains the fields that are displayed in the ListView by default.<br/><br/>The <b>Available</b> column contains fields that a user can select in the Search to create a custom ListView. <br/><br/>The <b>Hidden</b> column contains fields that can be added to the Default or Available column.'
    . '<br/><br/><!--not_in_theme!--><img src="themes/default/images/SugarLogic/icon_dependent.png"/>Indicates a Dependent field that may or may not be visible based on the value of a formula.<br/><!--not_in_theme!--><img src="themes/default/images/SugarLogic/icon_calculated.png" /> Indicates a Calculated field whose value will be automatically determined based on a formula.'
    ,
        'savebtn'	=> 'Klikoni <b>Ruaj dhe nis</b> për të ruajtur ndryshimet e bëra dhe për t&#39;i bërë aktive brenda modulit.',
        'historyBtn'=> 'Klikoni <b>Shiko historikun</b> për të parë dhe për të rikthyer paraqitjen e ruajtur më parë nga historiku.<br><br><b>Rikthe</b> brenda <b>Shiko historikun</b> rikthen zëvendësimin e fushës brenda paraqitjeve të ruajtura më parë. Për të ndryshuar etiketat e fushave, klikoni ikonën Modifiko pranë secilës fushë.',
        'historyRestoreDefaultLayout'=> 'Klikoni <b>Rikthe paraqitjen e paracaktuar</b> për të rikthyer pamjen në paraqitjen fillestare.<br><br><b>Rikthe paraqitjen e paracaktuar</b> rikthen vetëm vendosjen e fushës brenda paraqitjes fillestare. Për të ndryshuar etiketat e fushës, klikoni ikonën Modifiko pranë secilës fushë.',
        'Hidden' 	=> 'Fushat <b>e fshehura</b> nuk disponohen aktualisht për përdoruesit që t&#39;i shohin në ListViews.',
        'Available' => 'Fushat <b>e disponueshme</b> nuk shfaqen në mënyrë të paracaktuar, por mund të shtohen nga përdoruesit në ListViews.',
        'Default'	=> 'Fushat <b>e paracaktuara</b> shfaqen në ListViews që nuk janë personalizuar nga përdoruesit.'
    ),
    'popupListViewEditor'=>array(
        'modify'	=> 'All of the fields that can be displayed in the <b>ListView</b> appear here.<br><br>The <b>Default</b> column contains the fields that are displayed in the ListView by default.<br/><br/>The <b>Hidden</b> column contains fields that can be added to the Default or Available column.'
    . '<br/><br/><!--not_in_theme!--><img src="themes/default/images/SugarLogic/icon_dependent.png"/>Indicates a Dependent field that may or may not be visible based on the value of a formula.<br/><!--not_in_theme!--><img src="themes/default/images/SugarLogic/icon_calculated.png" /> Indicates a Calculated field whose value will be automatically determined based on a formula.'
    ,
        'savebtn'	=> 'Klikoni <b>Ruaj dhe nis</b> për të ruajtur ndryshimet e bëra dhe për t&#39;i bërë aktive brenda modulit.',
        'historyBtn'=> 'Klikoni <b>Shiko historikun</b> për të parë dhe për të rikthyer paraqitjen e ruajtur më parë nga historiku.<br><br><b>Rikthe</b> brenda <b>Shiko historikun</b> rikthen zëvendësimin e fushës brenda paraqitjeve të ruajtura më parë. Për të ndryshuar etiketat e fushave, klikoni ikonën Modifiko pranë secilës fushë.',
        'historyRestoreDefaultLayout'=> 'Klikoni <b>Rikthe paraqitjen e paracaktuar</b> për të rikthyer pamjen në paraqitjen fillestare.<br><br><b>Rikthe paraqitjen e paracaktuar</b> rikthen vetëm vendosjen e fushës brenda paraqitjes fillestare. Për të ndryshuar etiketat e fushës, klikoni ikonën Modifiko pranë secilës fushë.',
        'Hidden' 	=> 'Fushat <b>e fshehura</b> nuk disponohen aktualisht për përdoruesit që t&#39;i shohin në ListViews.',
        'Default'	=> 'Fushat <b>e paracaktuara</b> shfaqen në ListViews që nuk janë personalizuar nga përdoruesit.'
    ),
    'searchViewEditor'=>array(
        'modify'	=> 'All of the fields that can be displayed in the <b>Search</b> form appear here.<br><br>The <b>Default</b> column contains the fields that will be displayed in the Search form.<br/><br/>The <b>Hidden</b> column contains fields available for you as an admin to add to the Search form.'
    . '<br/><br/><!--not_in_theme!--><img src="themes/default/images/SugarLogic/icon_dependent.png"/>Indicates a Dependent field that may or may not be visible based on the value of a formula.<br/><!--not_in_theme!--><img src="themes/default/images/SugarLogic/icon_calculated.png" /> Indicates a Calculated field whose value will be automatically determined based on a formula.'
    . '<br/><br/>This configuration applies to popup search layout in legacy modules only.',
        'savebtn'	=> 'Klikimi në <b>Ruaj dhe nis</b> do të ruajë të gjitha ndryshimet dhe do t&#39;i bëjë aktive',
        'Hidden' 	=> 'Fushat <b>e fshehura</b> nuk shfaqen në kërkim.',
        'historyBtn'=> 'Klikoni <b>Shiko historikun</b> për të parë dhe për të rikthyer paraqitjen e ruajtur më parë nga historiku.<br><br><b>Rikthe</b> brenda <b>Shiko historikun</b> rikthen zëvendësimin e fushës brenda paraqitjeve të ruajtura më parë. Për të ndryshuar etiketat e fushave, klikoni ikonën Modifiko pranë secilës fushë.',
        'historyRestoreDefaultLayout'=> 'Klikoni <b>Rikthe paraqitjen e paracaktuar</b> për të rikthyer pamjen në paraqitjen fillestare.<br><br><b>Rikthe paraqitjen e paracaktuar</b> rikthen vetëm vendosjen e fushës brenda paraqitjes fillestare. Për të ndryshuar etiketat e fushës, klikoni ikonën Modifiko pranë secilës fushë.',
        'Default'	=> 'Fushat <b>e paracaktuara</b> shfaqen në kërkim.'
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
        'saveBtn'	=> 'Klikoni <b>Ruaj</b> për të ruajtur ndryshimet që keni bërë te paraqitja që nga hera e fundit që e keni ruajtur.<br><br>Ndryshimet nuk do të shfaqen në modul derisa të nisni ndryshimet e ruajtura.',
        'historyBtn'=> 'Klikoni <b>Shiko historikun</b> për të parë dhe për të rikthyer paraqitjen e ruajtur më parë nga historiku.<br><br><b>Rikthe</b> brenda <b>Shiko historikun</b> rikthen zëvendësimin e fushës brenda paraqitjeve të ruajtura më parë. Për të ndryshuar etiketat e fushave, klikoni ikonën Modifiko pranë secilës fushë.',
        'historyRestoreDefaultLayout'=> 'Klikoni <b>Rikthe paraqitjen e paracaktuar</b> për të rikthyer pamjen në paraqitjen fillestare.<br><br><b>Rikthe paraqitjen e paracaktuar</b> rikthen vetëm vendosjen e fushës brenda paraqitjes fillestare. Për të ndryshuar etiketat e fushës, klikoni ikonën Modifiko pranë secilës fushë.',
        'publishBtn'=> 'Klikoni <b>Ruaj dhe nis</b> për të ruajtur të gjitha ndryshime që i keni bërë te paraqitja që prej herës së fundit që e keni ruajtur dhe për t&#39;i bërë ndryshimet aktive në modul.<br><br>Paraqitja do të shfaqet menjëherë në modul.',
        'toolbox'	=> '<b>Kutia e veglave</b> përmban <b>Koshin e mbeturinave</b>, elemente shtesë të paraqitjes dhe grupin e fushave të disponueshme që do t&#39;i shtohen paraqitjes.<br/><br/>Elementet e paraqitjes dhe fushat në Kutinë e veglave mund të tërhiqen dhe të lëshohen në paraqitje dhe zërat dhe fushat e paraqitjes mund të tërhiqen dhe të lëshohen nga paraqitje te Kutia e veglave.<br><br>Elementet e paraqitjes janë <b>Panelet</b> dhe <b>Rreshtat</b>. Shtimi i një rreshti ose paneli të ri në paraqitje sjell vendndodhje shtesë në paraqitje për fushat.<br/><br/>Tërhiqni dhe lëshoni ndonjë nga fushat te Kutia e veglave ose paraqitjen në një pozicion të zënë fushe për t&#39;u ndërruar vendndodhjet dy fushave.<br/><br/>Fusha <b>Mbushje</b> krijon hapësirë boshe në paraqitjen ku vendoset.',
        'panels'	=> 'Zona <b>Paraqitja</b> ofron një pamje sesi do të shfaqet paraqitja brenda modulit ku nisen ndryshimet e bëra në paraqitje.<br/><br/>Mund t&#39;i ripoziciononi fushat duke i tërhequr dhe lëshuar ato në vendndodhjen e dëshiruar.<br/><br/>Hiqni elementet duke tërhequr dhe lëshuar ato te <b>Koshi i mbeturinave</b> në Kutinë e veglave ose shtoni elemente dhe fusha të reja duke i tërhequr ato nga <b>Kutia e veglave</b> dhe duke i lëshuar në vendndodhjen e dëshiruar në paraqitje.',
        'delete'	=> 'Tërhiqni dhe lëshoni çdo element këtu për ta hequr nga paraqitja',
        'property'	=> 'Edit The label displayed for this field. <br/><b>Tab Order</b> controls in what order the tab key switches between fields.',
    ),
    'fieldsEditor'=>array(
        'default'	=> '<b>Fushat</b> e disponueshme për modulin janë renditur këtu sipas Emrit të fushës.<br><br>Fushat e personalizuara të krijuara për modulin shfaqen lart fushave të disponueshme për modulin në mënyrë të paracaktuar.<br><br>Për të modifikuar një fushë, klikoni <b>Emri i fushës</b>.<br/><br/>Për të krijuar një fushë të re, klikoni <b>Shto fushën</b>.',
        'mbDefault'=>'<b>Fushat</b> e disponueshme për modulin janë renditur këtu sipas Emrit të fushës.<br><br>Për të konfiguruar vetitë e një fushe, klikoni Emrin e fushës.<br><br>Për të krijuar një fushë të re, klikoni <b>Shto fushë</b>. Etiketa, bashkë me vetitë e tjera të fushës së re mund të modifikohen pas krijimit duke klikuar Emrin e fushës.<br><br>Pas nisjes së modulit, fushat e reja të krijuara në ndërtuesin e modulit quhen fusha standarde në modulin e nisur në Studio.',
        'addField'	=> 'Zgjidhni një <b>Lloj të dhëne</b> për fushën e re. Lloji që zgjidhni përcakton se çfarë karakteresh do të vendosen në fushë. Për shembull, vetëm numra të plotë mund të vendosen në fushat që janë me llojin e të dhënave me numër të plotë.<br><br> Jepni një <b>Emër</b> për fushën. Emri duhet të jetë alfanumerik dhe nuk duhet të ketë hapësira. Vizat poshtë janë të vlefshme.<br><br> <b>Etiketa e afishimit</b> është etiketa që do të shfaqet për fushat në paraqitjet e modulit. <b>Etiketa e sistemit</b> përdoret për t&#39;iu referuar një fushe në kod.<br><br> Në varësi të llojit të të dhënave që zgjidhni për fushën, disa ose të gjitha vetitë e mëposhtme mund të zgjidhen për fushën:<br><br> <b>Teksti i ndihmës</b> shfaqet përkohësisht kur përdoruesi kalon mbi fushë dhe mund të përdoret për ta pyetur përdoruesin për llojin e vendosjes që dëshiron.<br><br> <b>Teksti i komentit</b> shihet vetëm brenda Studios dhe/ose Ndërtuesit të modulit dhe mund të përdoret për të përshkruar fushën për administratorët.<br><br> <b>Vlera e paracaktuar</b> do të shfaqet në fushë. Përdoruesit mund të vendosin një vlerë të re në fushë ose të përdorin vlerën e paracaktuar.<br><br> Zgjidhni kutinë <b>Përditësim në masë</b> për të mundur të përdorni veçorinë e përditësimit në masë për fushën.<br><br>Vlera <b>Madhësia maksimale</b> përcakton numrin maksimal të karaktereve që mund të vendosen në fushë.<br><br> Zgjidhni kutinë <b>Fusha e kërkuar</b> për të bërë fushën e kërkuar. Duhet të jepet një vlerë për fushën në mënyrë që të ruhet një regjistrim që përmban fushën.<br><br> Zgjidhni kutinë <b>E raportueshme</b> për të lejuar fushën të përdoret për filtra dhe për afishimin e të dhënave në raporte.<br><br> Zgjidhni kutinë <b>Kontrolli</b> për të gjurmuar ndryshimet në fushë në evidencën e ndryshimeve.<br><br>Zgjidhni një opsion në fushën <b>E importueshme</b> për të lejuar, mos lejuar ose kërkuar që fusha të importohet në ekspertin e importit.<br><br>Zgjidhni një opsion në fushën <b>Dubliko shkrirjen</b> për të aktivizuar ose çaktivizuar veçoritë e dublikateve të shkrirjes dhe gjetjes së dublikateve.<br><br>Për lloje të tjera të dhënash mund të caktohen veti të tjera.',
        'editField' => 'Cilësitë e kësaj fushe mund të ndryshohen.<br /><br />Kliko klono për të krijuar një fushë të re me cilësitë e njëjta.',
        'mbeditField' => 'Etiketa e shfaqjes së fushës së mostrës mund të ndryshohet. Cilësitë tjera të fushës nuk mund të ndryshohen.'

    ),
    'exportcustom'=>array(
        'exportHelp'=>'Përshtatjet e bëra në Studio brenda këtij rasti mund të paketohen dhe vendosen në rastin tjetër.<br /> <br />Ofrimi i Emrit të paketës. Ju mund të ofroni Autorin dhe Përshkrimin e informacionit për paketë.<br /><br />Selekto Modulin(et) që përmbajnë përshtatjet për eksportin. (Vetëm modulet që përmbajnë përshtatjet do të shfaqen për ju që t$#39;i selektoni.) <br /><br />Kliko Eksport për të krijuar dosjen a.zip për paketën që përmban përshtatjet. Dosja .zip mund të jetë e ngarkuar në rastin tjetër përmes Modulit të ngarkuar.',
        'exportCustomBtn'=>'Kliko Eksport për të krijuar dosjen .zip për paketën që përmban përshtatjet që ju dëshironi të eksportoni.',
        'name'=>'Ky është emri i paketës. Emri do të shfaqet gjatë instalimit.',
        'author'=>'Autori është emri i subjektit që ka krijuar paketën.Autori mund të jetë ose një individ apo  kompani.<br /><br />Autori do të shfaqet në Module të ngarkuara pas paketës që është ngarkuar për instalimin në Studio.',
        'description'=>'përshkrim<br />Ky është Përshkrimi i paketës që është shfaqur gjatë instalimit.',
    ),
    'studioWizard'=>array(
        'mainHelp' 	=> 'Mirë se vini në zonën e zhvillimit të mjeteve.<br /><br />Përdorni mjetet brenda kësaj zone për të krijuar dhe menaxhuar standarde dhe module të porositura dhe fushat.',
        'studioBtn'	=> 'Përdor Studio për të ndryshuar modulet e vendosura.',
        'mbBtn'		=> 'Përdorni Modulin ndërtues për të krijuar modulet e reja.',
        'sugarPortalBtn' => 'Përdorni Editorin në Portalin Sugar për të menaxhuar dhe ndryshuar Sugar Portalin.',
        'dropDownEditorBtn' => 'Përdorni editorin e tendave për të shtuar dhe të redaktoni tendat globale për fushat e tendave.',
        'appBtn' 	=> 'Përdorni mënyrën e aplikimit për të përshtatur pronat të ndryshme të programit, të tilla si sa raporte TPS janë shfaqur në faqen kryesore',
        'backBtn'	=> 'Kthehuni në hapin e mëparshëm.',
        'studioHelp'=> 'Përdorni studion për të përshtatur modulet e instalimit.',
        'studioBCHelp' => 'Wizard studio',
        'moduleBtn'	=> 'Klikoni për të ndryshuar këtë modul.',
        'moduleHelp'=> 'Selektoni modulin komponentë që ju dëshironi për të ndryshuar',
        'fieldsBtn'	=> 'Ndryshoni se çfarë informacioni është i ruajtur në modul, duke kontrolluar fushat në modul.',
        'labelsBtn' => 'Ndrysho etiketat për të shfaqur vlerat në këtë modul.'	,
        'relationshipsBtn' => 'Shto ose shiko marrëdhëniet ekzistuese për modulin.' ,
        'layoutsBtn'=> 'Përshtateni paraqitjet e Ndryshimit, detajit, listës dhe pikëpamjet e kërkimit.',
        'subpanelBtn'=> 'Ndryshoni cilat informata janë shfaqur në këto module të nënpaneleve.',
        'portalBtn' =>'Ndrysho ekpozimin e moduleve që shfaqen në portalin e Sugar.',
        'layoutsHelp'=> 'Selektoni paraqitjen për të ndryshuar.<br />Për të ndryshuar paraqitjen që përmban fushat e të dhënave për regjistrimin e të dhënave, kliko pamjen e ndryshimit.<br /><br />Për të ndryshuar paraqitjen që shfaq të dhënat e regjistruara në fushat e pamjes së ndryshimit, klikoni pamje të detajit.<br /><br />Për të ndryshuar kolonat të cilat shfaqen në listën e parazgjedhur, klikoni Listën e pamjes.<br /><br />Për të ndryshuar bazën dhe formën e kërkimit të paraqitjeve të avancuara, kliko Kërko.',
        'subpanelHelp'=> 'Selektoni nënpanelin për të ndryshuar.',
        'newPackage'=>'Kliko paketa e re të krijuar një paketë të re.',
        'exportBtn' => 'Kliko eksporto ndryshimet  për të krijuar dhe të shkarkuar një paketë që përmban ndryshime të bëra në studio për module specifike.',
        'mbHelp'    => 'Përdorni ndërtuesin e moduleve  për të krijuar paketa që përmbajnë module me porosi bazuar në objekte standarde ose me porosi.',
        'viewBtnEditView' => 'Ndrysho listën e ndryshimit të pamjes së modulit.<br /><br />Ndryshimi i pamjes është forma e cila përmban fusha për kapjen e të dhënave të futura nga përdoruesi.',
        'viewBtnDetailView' => 'Ndrysho pamjen e detajuar të modulit.<br /><br />Pamja e detajuar shfaq fushën e të dhënave të futura nga përdoruesi.',
        'viewBtnDashlet' => 'Ndrysho',
        'viewBtnListView' => 'Ndrysho pamjen e listës së pamjes të modulit.<br /><br />Resultatet e kërkimit shfaqen në listën e pamjes.',
        'searchBtn' => 'Ndrysho pamjen e kërkimit të modulit.<br /><br />Gjeje se cilat fusha mund të përdoren për të filtruar të dhënat të cilat shfaqen në listën e pamjes.',
        'viewBtnQuickCreate' =>  'Ndrysho krijimin e shpejtë të modulit.<br /><br />Forma e krijimit të shpejtë shfaqet në nën panelet dhe në modulin e emaileve.',

        'searchHelp'=> 'Format e kërkimit të cilat mund të ndryshohen shfaqen këtu.<br /><br />Format e kërkimit përmbajnë fusha për filtrimin e të dhënave.<br /><br />Kliko një ikonë për të zgjedhur pamjen e kërkimit për të ndryshuar.',
        'dashletHelp' =>'Pamjet e tabelës së Sugar të cilat mund të ndryshohen shfaqen këtu.<br /><br />Tabela e Sugar do të jetë në dispozicion për të shtuar të dhëna në faqe në modulin e ballinës.',
        'DashletListViewBtn' =>'Tabela e e listës në Sugar shfaq të dhëna të bazuara në filtrat e kërkimit të tabelës së Sugar.',
        'DashletSearchViewBtn' =>'Tabela e kërkimit e Sugar filtron të dhënat për tabelën e e listës së pamjes së Sugar.',
        'popupHelp' =>'Shfaqja e pamjeve që mund të ndryshohen paraqiten këtu.',
        'PopupListViewBtn' => 'Shfaqja e pamjes së listës shfaq të dhëna bazuar në kërkimet e shfaqura.',
        'PopupSearchViewBtn' => 'The <b>Popup Search</b> views records for the Popup listview.',
        'BasicSearchBtn' => 'Ndrysho  formën e kërkimit të thjeshtë e cila shfaqet në lidhësen e kërkimit të thjeshtë në fushën e kërkimit për modulin.',
        'AdvancedSearchBtn' => 'Ndrysho formën e kërkimit të avansuar e cila paraqitet në lidhësen e kërmimit të avansuar në fushën kërko për modulin.',
        'portalHelp' => 'Menaxho dhe ndrysho portalin e Sugar.',
        'SPUploadCSS' => 'Ngarko stilin e fletës për portalin e Sugar.',
        'SPSync' => 'Ndryshimet e sinkronizuara te portali i Sugar në instancë.',
        'Layouts' => 'Ndrysho pamjet e moduleve te portali i Sugar.',
        'portalLayoutHelp' => 'Modulet brenda portalit Sugar shfaqen në këtë zonë.<br><br>Zgjidhni një modul për të modifikuar <b>Paraqitjet</b>.',
        'relationshipsHelp' => 'Të gjitha <b>Marrëdhëniet</b> që ekzistojnë mes modulit dhe moduleve të tjera të nisura shfaqen këtu.<br><br>Marrëdhënia <b>Emër</b> është një emër i gjeneruar nga sistemi për marrëdhënien.<br><br> <b>Moduli kryesor</b> është moduli që zotëron marrëdhëniet. Për shembull, të gjitha vetitë e marrëdhënieve për të cilat moduli Llogaritë është moduli kryesor, ruhen në tabelat e të dhënave të llogarisë.<br><br> <b>Lloji</b> është lloji i marrëdhënies që ekziston mes modulit kryesor dhe <b>Modulit të lidhur</b>.<br><br>Klikoni titullin e një kolone për të renditur sipas kolonës.<br><br>Klikoni një rresht në tabelën e marrëdhënies për të parë vetitë që shoqërohen me marrëdhënien.<br><br>Klikoni <b>Shto marrëdhënie</b> për të krijuar një marrëdhënie të re.<br><br>Marrëdhëniet mund të krijohen ndërmjet çdo dy moduleve.',
        'relationshipHelp'=>'<b>Relationships</b> can be created between the module and another deployed module.<br><br> Relationships are visually expressed through subpanels and relate fields in the module records.<br><br>Select one of the following relationship <b>Types</b> for the module:<br><br> <b>One-to-One</b> - Both modules&#39; records will contain relate fields.<br><br> <b>One-to-Many</b> - The Primary Module&#39;s record will contain a subpanel, and the Related Module&#39;s record will contain a relate field.<br><br> <b>Many-to-Many</b> - Both modules&#39; records will display subpanels.<br><br> Select the <b>Related Module</b> for the relationship. <br><br>If the relationship type involves subpanels, select the subpanel view for the appropriate modules.<br><br> Click <b>Save</b> to create the relationship.',
        'convertLeadHelp' => "Here you can add modules to the convert layout screen and modify the layouts of existing ones.<br/><br />		You can re-order the modules by dragging their rows in the table.<br/><br/><br /><br />		<b>Module:</b> The name of the module.<br/><br/><br />		<b>Required:</b> Required modules must be created or selected before the lead can be converted.<br/><br/><br />		<b>Copy Data:</b> If checked, fields from the lead will be copied to fields with the same name in the newly created records.<br/><br/><br />		<b>Allow Selection:</b> Modules with a relate field in Contacts can be selected rather than created during the convert lead process.<br/><br/><br />		<b>Edit:</b> Modify the convert layout for this module.<br/><br/><br />		<b>Delete:</b> Remove this module from the convert layout.<br/><br/>",
        'editDropDownBtn' => 'Ndrysho një shftetim global.',
        'addDropDownBtn' => 'Shto një shfletim global.',
    ),
    'fieldsHelp'=>array(
        'default'=>'<b>Fushat</b> në modul renditen këtu sipas emrit të fushës.<br><br>Shablloni i modulit përfshin një grup të paracaktuar fushash.<br><br>Për të krijuar një fushë të re, klikoni <b>Shto fushë</b>.<br><br>Për të redaktuar një fushë, klikoni <b>Emri i fushës</b>.<br/><br/>Pasi të jetë nisur moduli, fushat e reja të krijuara në Ndërtuesin e moduleve, së bashku me fushat e shabllonit quhen si fusha standarde në.',
    ),
    'relationshipsHelp'=>array(
        'default'=>'<b>Marrëdhëniet</b> që janë krijuar mes modulit dhe moduleve të tjera shfaqen këtu.<br><br>Marrëdhënia <b>Emri</b> është emër i gjeneruar nga sistemi për marrëdhënien.<br><br> <b>Moduli kryesor</b> është moduli që zotëron marrëdhëniet. Vetitë e marrëdhënies ruhen në tabelat e bazës së të dhënave që i përkasin modulit kryesor.<br><br> <b>Lloji</b> është lloji i marrëdhënieve që ekzistojnë mes modulit kryesor dhe <b><Modulit të lidhur</b>.<br><br>Klikoni titullin e kolonës për t&#39;i renditur sipas kolonës.<br><br>Klikoni një rresht në tabelën e marrëdhënieve për të parë dhe modifikuar vetitë e shoqëruara me marrëdhënien.<br><br>Klikoni <b>Shto marrëdhënie</b> për të krijuar një marrëdhënie të re.',
        'addrelbtn'=>'Kaloni me maus mbi ndihmën për të shtuar marrëdhënien.',
        'addRelationship'=>'<b>Relationships</b> can be created between the module and another custom module or a deployed module.<br><br> Relationships are visually expressed through subpanels and relate fields in the module records.<br><br>Select one of the following relationship <b>Types</b> for the module:<br><br> <b>One-to-One</b> - Both modules&#39; records will contain relate fields.<br><br> <b>One-to-Many</b> - The Primary Module&#39;s record will contain a subpanel, and the Related Module&#39;s record will contain a relate field.<br><br> <b>Many-to-Many</b> - Both modules&#39; records will display subpanels.<br><br> Select the <b>Related Module</b> for the relationship. <br><br>If the relationship type involves subpanels, select the subpanel view for the appropriate modules.<br><br> Click <b>Save</b> to create the relationship.',
    ),
    'labelsHelp'=>array(
        'default'=> '<b>Etiketat</b> për fushat dhe titujt e tjerë në modul mund të ndryshohen.<br><br>Modifikoni etiketën duke klikuar brenda fushës, duke vendosur një etiketë të re dhe duke klikuar <b>Ruaj</b>.<br><br>Nëse në aplikacion është instaluar, mund të zgjidhni <b>Gjuha</b> për t&#39;u përdorur për etiketa.',
        'saveBtn'=>'Klikoni <b>Ruaj</b> për të ruajtur të gjitha ndryshimet.',
        'publishBtn'=>'Klikoni <b>Ruaj dhe nis</b> për të ruajtur të gjitha ndryshimet dhe për t&#39;i bërë aktive.',
    ),
    'portalSync'=>array(
        'default' => 'Vendosni <b>URL-në e portalit Sugar</b> në mjedisin e portalit për t&#39;u përditësuar dhe klikoni <b>Shko</b>.<br><br>Pastaj vendosni një emrë dhe fjalëkalim të vlefshëm në Sugar dhe më pas klikoni <b>Fillo sinkronizimin</b>.<br><br>Personalizimet që i bëhen <b>Paraqitjeve</b> të portalit Sugar, bashkë me <b>Fletën e stilit</b>, nëse është ngarkuar, do të transferohet te mjedisi i portalit të specifikuar.',
    ),
    'portalConfig'=>array(
           'default' => '',
       ),
    'portalStyle'=>array(
        'default' => 'Ka dy kolona të shfaqura në të majtë. Kolona në anën e djathtë, etiketohet si faqosje aktuale ose para faqosje, është aty ku ju ndryshoni modulin e faqosjes.Kolona në anën e majtë, me titull Mjete, përmban elemente të dobishme dhe mjetet për përdorim kur ndryshoni faqosjen.<br /><br />Nëse zona e faqosjes është titulluar Faqosje aktuale atëherë ju jeni duke punuar në kopjen e faqosjes që aktualisht përdoret nga moduli për shfaqje.<br /><br />Nëse kjo është titulluar si para faqosje atëherë ju jeni duke punuar në kopjen e krijuar më herët nga klikimi në butonin Ruaj, që tashmë mund të ketë ndryshime nga versioni që është parë nga përdoruesit i këtij moduli.',
    ),
),

'assistantHelp'=>array(
    'package'=>array(
            //custom begin
            'nopackages'=>'Për të filluar në një projekt, klikoni paketën e re për të krijuar një paketë të re për të strehuar modulin tuaj të porositur.<br /><br />Çdo paketë mund të përmbaje një ose më shumë module.<br /><br />Për rastin, që ju mund të dëshironi të krijoni një paketë që përmban një modul të porositur që lidhet me standarde të llogarive të modulit. Ose, ju mund të dëshironi të krijoni një paketë që përmban disa module të reja që të punojnë së bashku si një projekt dhe që janë të lidhura me njëri-tjetrin dhe për module të tjera tashmë në aplikim.',
            'somepackages'=>'Një paketë vepron si një kontejner për modulet e porositura, të cilat janë pjesë e një projekti.Paketa mund të përmbaje një ose më shumë module të porositura që mund të lidhen me njëri-tjetrin apo për module të tjera në aplikim.<br /><br />Pas krijimit të një paketë për projektin tuaj, ju mund të krijoni modulet për paketën menjëherë, ose ju mund të ktheheni në modulin e ndërtimit në një kohë më vonë për të përfunduar projektin.<br /><br />Kur projekti është i plotë, ju mund të vendosni për të instaluar paketën e moduleve të porositura brenda aplikacionit.',
            'afterSave'=>'pas ruajtjes <br />Paketa juaj e re duhet të përmbajë të paktën një modul. Ju mund të krijoni një ose më shumë module me porosi për paketën.<br /><br />Klikoni Module të reja për të krijuar një modul me porosi për këtë paketë.<br /><br />Pas krijimit të paktën një modul, ju mund të publikoni ose të vendosni paketën për ta bërë atë në dispozicion për rastin tuaj dhe/ose rastet e përdoruesve të tjerë.<br /><br />Për instalimin e paketës në një hap në kuadër rastit tuaj Sugar, klikoni vendosë.<br /><br />Kliko Publikoni për të ruajtur paketën si një dosje .zip. Pasi që dosja .zip është ruajtur në sistemin tuaj, përdorni Modulin ngarkues që të ngarkoni dhe instaloni paketën brenda rastit tuaj të Sugarit.<br /><br />Ju mund të shpërndajë skedarin për përdoruesit e tjerë të ngarkoni dhe instaluar brenda tyre raste të sheqerit tyre.',
            'create'=>'krijoni<br />Një paketë vepron si një kontejner për module me porosi, të cilat janë pjesë e një projekti.Paketa mund të përmbaje një ose më shumë module me porosi që mund të lidhen me njëri-tjetrin apo për module të tjera në aplikim.<br /><br />Pas krijimit të një paketë për projektin tuaj, ju mund të krijoni modulet për paketën menjëherë, ose ju mund të ktheheni në Modulin e ndërtimit në një kohë më vonë për të përfunduar projektin.',
            ),
    'main'=>array(
        'welcome'=>'Përdorni Mjetet Zhvilluese për të krijuar dhe menaxhuar modulet standarde dhe modulet me porosi dhe fushat. <br /><br />Për të menaxhuar modulet në aplikacionin, klikoni Studio. <br /><br />Për të krijuar module me porosi, klikoni Module ndërtuese.',
        'studioWelcome'=>'Të gjitha modulet e instaluara aktualisht, duke përfshirë objektet standarde dhe Modulin e-ngarkuar, janë të përshtatshëm brenda Studios.'
    ),
    'module'=>array(
        'somemodules'=>"disa module<br />Që nga paketa aktuale që përmbajnë të paktën një modul, ju mund të vendosni modulet në paketën brenda rastit tuaj Sugar ose të publikoni paketën për t$#39;u instaluar në rastin aktual të Sugarit apo në një tjetër rast duke përdorur Modulin ngarkues.<br /><br />Për të instaluar paketën drejtpërdrejt brenda rastit tuaj Sugar, klikoni vendosë.<br /><br />Për të krijuar një dosje .zip për paketën që mund të ngarkohet dhe instalohet brenda rastit të sugarit aktual dhe raste të tjera duke përdorur Modulin ngarkues, klikoni Publiko.<br /><br />Ju mund të ndërtoni modulet për këtë paketë me fazat, dhe të publikoni ose të vendosni kur të jeni gati për ta bërë këtë.<br /><br />Pas publikimit ose vendosni paketën, ju mund të bëni ndryshimet në pronat e paketës dhe të rregulloni më tej modulet. Pastaj ri-publikoni ose ri-instaloni paketën për të aplikuar ndryshimet." ,
        'editView'=> 'Këtu ju mund të ndryshoni fushat ekzistuese. Ju mund te hiqni ndonjë nga fushat ekzistuese ose të shtoni fushat në dispozicion në panelin e majtë.',
        'create'=>'krijoni<br />Kur zgjedhni llojin e llojit e modulit që ju dëshironi për të krijuar, mbani në mend llojet e fushave që ju do të dëshironi të keni në kuadër të modulit.<br /><br />Çdo shabllon i modulit përmban një grup të fushave që kanë të bëjnë me llojin e modulit të përshkruar nga titulli.<br /><br />Bazik - Ofron fushat themelore që shfaqen në modulet standarde, të tilla si emri, caktimi për të, grupi, Data e Krijuar dhe përshkrimi i fushave.<br /><br />Kompania - Ofron organizim- specifik të fushave, të tilla si emri i kompanisë, Industria dhe adresa e faturimit. Përdoreni këtë shabllon për të krijuar modulet që janë të ngjashme me standarde të llogarive të modulit.<br /><br />Personi - Ofron fushat individuale specifike, të tilla si përshëndetjet,Titulli, Emri, adresa dhe numrin e telefonit. Përdoreni këtë shabllon për të krijuar modulet që janë të ngjashme me Kontaktet standarde dhe drejtojnë module.<br /><br />Issue - Ofron rast-dhe bug-e të Caktuar fusha, të tilla si, Numër status prioritar dhe përshkrimi. Përdoreni këtë template për të krijuar modulet që janë të ngjashme me rastet standard dhe modulet gjurmimin e të metave.<br /><br />Shënim: Pasi ta keni krijuar modulin, ju mund të redaktoni etiketat e fushat e ofruara nga template, si dhe krijojnë fusha porosi për të shtuar në Layouts modul.',
        'afterSave'=>'pas ruajtjes<br />Rregulloni modul që i përshtatet nevojave tuaja duke ndryshuar dhe krijimin e fushave, krijimin e marrëdhënieve me modulet e tjera dhe rregullimin e fushave brenda faqosjeve.<br /><br />Për të parë fushat e shabllonit dhe për të menaxhuar fushat me porosi brenda modulit, klikoni Shiko fushat.<br /><br />Për të krijuar dhe menaxhuar lidhjet në mes të modulit dhe moduleve të tjera, nëse modulet tashmë janë në aplikim apo modulet tjera me porosi në kuadër të paketës së njëjtë, klikoni Shiko Lidhjet.<br /><br />Për të ndryshuar paraqitjet e modulit, klikoni Shiko paraqitjet. Ju mund të ndryshoni pamjen e Detajit, Ndryshimin e pamjes dhe paraqitjen e Listës  për modulin ashtu sic ju doni për module të tashmë në aplikim brenda Studios.<br /><br />Për të krijuar një modul me pronat e njëjta si në modulin aktual, kliko Duplikim. Ju mund pastaj të rregulloni modulin e ri.',
        'viewfields'=>'shikoni fushat<br />Fushat në modulin mund të pershtaten me nevojat tuaja.<br /><br />Ju nuk mund të fshini fushat standarde, por ju mund të hiqni ata nga paraqitjet e përshtatshme brenda faqeve të paraqitjes.<br /><br />Ju mund shpejtë të krijoni fusha të reja që kanë pronat të ngjashme me fushat ekzistuese duke klikuar klonin në formën e Pronës. Shkruani ndonjë pronë të re, dhe pastaj klikoni Ruaj.<br /><br />Është e rekomanduar që ju të përcaktoni të gjitha pronat për fushat standarde dhe fushat me porosi para se të publikoni dhe të instaloni paketën që përmban modulin me porosi.',
        'viewrelationships'=>'Ju mund të krijoni lidhjet shumë-për-shumë midis modulit aktual dhe modulet e tjera në paketën, <br />dhe/ose në mes të modulit aktual dhe modulet aktuale të instaluara në aplikim.<br /><br />Për të krijuar lidhjet një-për-shumë dhe një-për-një, krijoni lidhjen dhe lidhjen fleksibile të fushave për modulet.',
        'viewlayouts'=>'shikoni paraqitjet<br />Ju mund të kontrolloni se cilat fusha janë në dispozicion për kapjen e të dhënave brenda pamjes së ndryshimit. Ju gjithashtu mund të kontrolloni se cilat të dhëna shfaqen brenda shikimit të detajit. Pikëpamjet nuk duhet të përputhen.<br /><br />Formulari i shpejtë i Krijimit shfaqet kur Krijimi është klikuar në një nënpanel të modulit. Nga parazgjedhja, Formulari i Shpejtë i Krijimit të paraqitjes është i njëjtë me paraqitjen e parazgjedhur të pamjes së ndryshimit. Ju mund të rregulloni formularin e krijimit të shpejtë në mënyrë që ai përmban më pak dhe/ose fusha të ndryshme se sa paraqitjen e pamjes së ndryshimit.<br /><br />Ju mund të përcaktoni sigurinë e modulit të përshtatjes të përdorur së bashku me Rolin e Menaxhimit.',
        'existingModule' =>'Moduli ekzistues<br />Pas krijimit dhe përshtatjes në këtë modul, ju mund të krijoni modulet shtesë ose të ktheheni në paketën për të publikuar ose instaluar paketat.<br /><br />Për të krijuar modulet shtesë, klikoni Duplikatë për të krijuar një modul me pronat e njëjta si modulin aktual, ose të navigoni përsëri në paketën, dhe klikoni Moduli i ri.<br /><br />Nëse jeni gati për të Publikuar apo për të vendosur paketën që përmban këtë modul, navigoni përsëri në paketë për të kryer këto funksionet. Ju mund të publikoni dhe të vendosni paketat që përmbajnë të paktën një modul.',
        'labels'=> 'Etiketat e fushave standarde, si dhe fusha me porosi mund të ndryshohet. Ndryshimi i Etiketave të fushës nuk do të ndikojë në të dhënat e ruajtura në fushat.',
    ),
    'listViewEditor'=>array(
        'modify'	=> 'Ka tre shtylla të shfaqura në të majtë.:Parazgjedhja" e kolonës përmban fushat që janë shfaqur në  pamjen e listë nga parazgjedhja, Kolona në"Dispozicion" përmban fushat që përdoruesi mund t$#39;i zgjidhe për të përdorur krijimin e pamjes me porosi të listës, dhe " të fsheh" kolonën që përmban fushat në dispozicion për ju si një admin ose të shtoni në shtyllat e parazgjedhjes ose fushat në dispozicion për përdorim nga përdoruesit por që janë joaktive për momentin.',
        'savebtn'	=> 'Klikimi Ruaj do të ruaje të gjitha ndryshimet dhe do t$#39;i bëjë ato aktive.',
        'Hidden' 	=> 'Fushat e fshehura janë fusha që nuk janë aktualisht në dispozicion për përdoruesit të përdorjes në pamjen e listave.',
        'Available' => 'Fushat në dispozicion janë fusha që nuk janë treguar nga faqosja, por mund të jenë të aktivizuara nga përdoruesit.',
        'Default'	=> 'Fushat e parazgjedhjes janë shfaqur për përdoruesit të cilët nuk kanë krijuar listën e parametrave të porositura.'
    ),

    'searchViewEditor'=>array(
        'modify'	=> 'Ka dy kolona të shfaqura në të majtë. "Parazgjedhja" e kolonës përmban fushat që do të shfaqen në pamjen e kërkimit, dhe "fshehur" në kolonën që përmban fushat në dispozicion për ju si një admin për të shtuar pamjen.',
        'savebtn'	=> 'Klikimi Ruaj do të ruaje të gjitha ndryshimet dhe do t$#39;i bëjë ato aktive.',
        'Hidden' 	=> 'Fushat e parazgjedhjes janë fushat që nuk do të shfaqen në pikëpamjen e kërkimit.',
        'Default'	=> 'Fushat e parazgjedhjes do të shfaqen në pikëpamjen e kërkimit.'
    ),
    'layoutEditor'=>array(
        'default'	=> 'Ka dy kolona të shfaqura në të majtë. Kolona në anën e djathtë, etiketohet si faqosje aktuale ose para faqosje, është aty ku ju ndryshoni modulin e faqosjes.Kolona në anën e majtë, me titull Mjete, përmban elemente të dobishme dhe mjetet për përdorim kur ndryshoni faqosjen.<br /><br />Nëse zona e faqosjes është titulluar Faqosje aktuale atëherë ju jeni duke punuar në kopjen e faqosjes që aktualisht përdoret nga moduli për shfaqje.<br /><br />Nëse kjo është titulluar si para faqosje atëherë ju jeni duke punuar në kopjen e krijuar më herët nga klikimi në butonin Ruaj, që tashmë mund të ketë ndryshime nga versioni që është parë nga përdoruesit i këtij moduli.',
        'saveBtn'	=> 'Klikimi i këtij butoni ruan faqosjen në mënyrë që ju mund të ruani ndryshimet tuaja. Kur ju të ktheheni në këtë modul ju do të filloni nga kjo faqosje e ndryshuar. Megjithatë, faqosja juaj nuk do të shihet nga përdoruesit e modulit derisa ju të klikoni Ruaj dhe Publikoni butonin.',
        'publishBtn'=> 'Klikoni këtë buton për të vendosur faqosjen. Kjo nënkupton se faqosja do të shihet menjëherë nga përdoruesit e këtij moduli.',
        'toolbox'	=> 'Mjetet përmbajnë shumëllojshmëri të karakteristika të dobishme për ndryshimin e faqosjes, duke përfshirë zonën, grupin e elementeve shtesë dhe një sërë fushash në dispozicion. Ndonjë nga këto mund të tërhiqen dhe lëshohen mbi faqosjen.',
        'panels'	=> 'Kjo zonë tregon se si do të duket faqosja juaj për përdoruesit e këtij moduli, kur ajo është vendosur.<br /><br />Ju mund të rivendosni elemente të tilla si fusha, rreshta dhe panele duke i tërhequr dhe duke i lëshuar ato, fshini elementet duke i tërhequr dhe duke i lëshuar ato në zonën e kutisë së veglave, ose shtoni elemente të reja duke i tërhequr ato nga vegla dhe lëshoni ato për faqosjen në pozitën e dëshiruar.'
    ),
    'dropdownEditor'=>array(
        'default'	=> 'Ka dy kolona të shfaqura në të majtë. Kolona në anën e djathtë, etiketohet si faqosje aktuale ose para faqosje, është aty ku ju ndryshoni modulin e faqosjes.Kolona në anën e majtë, me titull Mjete, përmban elemente të dobishme dhe mjetet për përdorim kur ndryshoni faqosjen.<br /><br />Nëse zona e faqosjes është titulluar Faqosje aktuale atëherë ju jeni duke punuar në kopjen e faqosjes që aktualisht përdoret nga moduli për shfaqje.<br /><br />Nëse kjo është titulluar si para faqosje atëherë ju jeni duke punuar në kopjen e krijuar më herët nga klikimi në butonin Ruaj, që tashmë mund të ketë ndryshime nga versioni që është parë nga përdoruesit i këtij moduli.',
        'dropdownaddbtn'=> 'Klikoni butonin shtesë të artikullit të ri për tërheqjen.',

    ),
    'exportcustom'=>array(
        'exportHelp'=>'Përshtatjet e bëra në Studio brenda këtij rasti mund të paketohen dhe vendosen në rastin tjetër.<br /> <br />Ofrimi i Emrit të paketës. Ju mund të ofroni Autorin dhe Përshkrimin e informacionit për paketë.<br /><br />Selekto Modulin(et) që përmbajnë përshtatjet për eksportin. (Vetëm modulet që përmbajnë përshtatjet do të shfaqen për ju që t$#39;i selektoni.) <br /><br />Kliko Eksport për të krijuar dosjen a.zip për paketën që përmban përshtatjet. Dosja .zip mund të jetë e ngarkuar në rastin tjetër përmes Modulit të ngarkuar.',
        'exportCustomBtn'=>'Kliko Eksport për të krijuar dosjen .zip për paketën që përmban përshtatjet që ju dëshironi të eksportoni.',
        'name'=>'Emri i paketës do të shfaqet në Modulie të ngarkuara pas paketës që është ngarkuar për instalimin në Studio.',
        'author'=>'Autori është emri i subjektit që ka krijuar paketën.Autori mund të jetë ose një individ apo  kompani.<br /><br />Autori do të shfaqet në Module të ngarkuara pas paketës që është ngarkuar për instalimin në Studio.',
        'description'=>'Përshkrimi i paketës do të shfaqet në Module të ngarkuara pas paketës që është ngarkuar për instalimin në Studio.',
    ),
    'studioWizard'=>array(
        'mainHelp' 	=> 'Mirë se vini në zonën e zhvillimit të mjeteve.<br /><br />Përdorni mjetet brenda kësaj zone për të krijuar dhe menaxhuar standarde dhe module të porositura dhe fushat.',
        'studioBtn'	=> 'Përdorni Studion për të përshtatur modulin e instaluar duke ndryshuar marrëveshjen e fushës, duke selektuar se cilat fusha janë në dispozicion dhe krijimin e të dhënave të porositura të fushave.',
        'mbBtn'		=> 'Përdorni Modulin ndërtues për të krijuar modulet e reja.',
        'appBtn' 	=> 'Përdorni mënyrën e aplikimit për të përshtatur pronat të ndryshme të programit, të tilla si sa raporte TPS janë shfaqur në faqen kryesore',
        'backBtn'	=> 'Kthehuni në hapin e mëparshëm.',
        'studioHelp'=> 'Përdorni studion për të përshtatur modulet e instalimit.',
        'moduleBtn'	=> 'Klikoni për të ndryshuar këtë modul.',
        'moduleHelp'=> 'Selektoni modulin komponentë që ju dëshironi për të ndryshuar',
        'fieldsBtn'	=> 'Ndryshoni se çfarë informacioni është i ruajtur në modul, duke kontrolluar fushat në modul.<br /><br />Ju mund të ndryshoni dhe të krijojnë fushat e porositura këtu.',
        'layoutsBtn'=> 'Përshtateni paraqitjet e Ndryshimit, detajit, listës dhe pikëpamjet e kërkimit.',
        'subpanelBtn'=> 'Ndryshoni cilat informata janë shfaqur në këto module të nënpaneleve.',
        'layoutsHelp'=> 'Selektoni paraqitjen për të ndryshuar.<br />Për të ndryshuar paraqitjen që përmban fushat e të dhënave për regjistrimin e të dhënave, kliko pamjen e ndryshimit.<br /><br />Për të ndryshuar paraqitjen që shfaq të dhënat e regjistruara në fushat e pamjes së ndryshimit, klikoni pamje të detajit.<br /><br />Për të ndryshuar kolonat të cilat shfaqen në listën e parazgjedhur, klikoni Listën e pamjes.<br /><br />Për të ndryshuar bazën dhe formën e kërkimit të paraqitjeve të avancuara, kliko Kërko.',
        'subpanelHelp'=> 'Selektoni nënpanelin për të ndryshuar.',
        'searchHelp' => 'Selektoni kërkimin e paraqitjes për të ndryshuar.',
        'labelsBtn'	=> 'Ndrysho <b>Etiketat</b> që të shfaqen për vlerat në këtë modul.',
        'newPackage'=>'Kliko paketa e re të krijuar një paketë të re.',
        'mbHelp'    => '<b>Mirë se vjen në Ndërtuesin e modulit.</b><br/><br/>Përdorni <b>Ndërtuesin e modulit</b> për të krijuar paketa që përmbajnë module të personalizuara bazuar në objekte standarde ose të personalizuara. <br/><br/>Për të filluar, klikoni <b>Paketë e re</b> për të krijuar një paketë të re ose zgjidhni një paketa për ta modifikuar.<br/><br/> Një <b>paketë</b> vepron si mbajtëse e moduleve të personalizuara, ku të gjitha janë pjesë e një projekti. Paketa mund të përmbajë një ose më shumë modulesh të personalizuara që mund të lidhen me njëra-tjetrën ose me modulet në aplikacion. <br/><br/>Shembuj: Mund t&#39;ju duhet të krijoni një paketë që përmban një modul të personalizuar që lidhet me modulin standard të Llogarive. Ose nëse dëshironi të krijoni një paketë që përmban disa module të reja që funksionojnë bashkë si projekt dhe që lidhen me njëra-tjetrën dhe me modulet e aplikacionit.',
        'exportBtn' => 'Klikoni <b>Eksporto personalizimet</b> për të krijuar një paketë që përmban personalizimet e bëra në Studio për module specifike.',
    ),

),
//HOME
'LBL_HOME_EDIT_DROPDOWNS'=>'ndryshuesi i lëshimit',

//ASSISTANT
'LBL_AS_SHOW' => 'Trego mbështetjen në të ardhme.',
'LBL_AS_IGNORE' => 'Injoro mbështjetje në të ardhmen.',
'LBL_AS_SAYS' => 'Mbështjetja thotë:',

//STUDIO2
'LBL_MODULEBUILDER'=>'Ndërtuesi i modulit',
'LBL_STUDIO' => 'Studio',
'LBL_DROPDOWNEDITOR' => 'Ndryshuesi i lëshimit',
'LBL_EDIT_DROPDOWN'=>'Ndrysho lëshimin',
'LBL_DEVELOPER_TOOLS' => 'Mjetet e zhvillimit',
'LBL_SUGARPORTAL' => 'Ndryshuesi i Sugar Portali',
'LBL_SYNCPORTAL' => 'Synk Portal',
'LBL_PACKAGE_LIST' => 'Lista e paketave',
'LBL_HOME' => 'Ballina',
'LBL_NONE'=>'Asnjëra',
'LBL_DEPLOYE_COMPLETE'=>'Pozicionimi i përfunduar',
'LBL_DEPLOY_FAILED'   =>'Një gabim ndodhi gjatë procesit të pozicionimit, paketa juaj mund të mos jetë instaluar në mënyrë korekte.',
'LBL_ADD_FIELDS'=>'Shto fusha të zakonta',
'LBL_AVAILABLE_SUBPANELS'=>'Nënpanele të disponueshme',
'LBL_ADVANCED'=>'Avancuar',
'LBL_ADVANCED_SEARCH'=>'Kërkim i avancuar',
'LBL_BASIC'=>'Bazike',
'LBL_BASIC_SEARCH'=>'Kërkim bazik',
'LBL_CURRENT_LAYOUT'=>'Format',
'LBL_CURRENCY' => 'monedha',
'LBL_CUSTOM' => 'Zakonshëm',
'LBL_DASHLET'=>'Nënvizimi i Sugar',
'LBL_DASHLETLISTVIEW'=>'Shikimi në formë liste e nënvizimeve të Sugar',
'LBL_DASHLETSEARCH'=>'Kërkimi i nënvizimeve të Sugar',
'LBL_POPUP'=>'Pamjet e shfaqura',
'LBL_POPUPLIST'=>'Shfaqja e shikimeve në formë liste',
'LBL_POPUPLISTVIEW'=>'Shfaqja e shikimeve në formë liste',
'LBL_POPUPSEARCH'=>'Shfaqja e kërkimeve',
'LBL_DASHLETSEARCHVIEW'=>'Kërkimi i nënvizimeve të Sugar',
'LBL_DISPLAY_HTML'=>'Shfaq kodin HTML',
'LBL_DETAILVIEW'=>'Shikim i detajuar',
'LBL_DROP_HERE' => '[Lësho këtu]',
'LBL_EDIT'=>'Ndrysho',
'LBL_EDIT_LAYOUT'=>'Ndrysho formatin',
'LBL_EDIT_ROWS'=>'Ndrysho reshtat',
'LBL_EDIT_COLUMNS'=>'Ndrysho kolonat',
'LBL_EDIT_LABELS'=>'Ndrysho formatin',
'LBL_EDIT_PORTAL'=>'Ndrysho portalin për',
'LBL_EDIT_FIELDS'=>'Ndrysho fushat',
'LBL_EDITVIEW'=>'Ndrysho pamje',
'LBL_FILTER_SEARCH' => "LBL_FILTRIM_KERKIM",
'LBL_FILLER'=>'(mbushës)',
'LBL_FIELDS'=>'Fushat',
'LBL_FAILED_TO_SAVE' => 'Dështoi të ruhet',
'LBL_FAILED_PUBLISHED' => 'Dështoi të publikohet.',
'LBL_HOMEPAGE_PREFIX' => 'Mia',
'LBL_LAYOUT_PREVIEW'=>'Pasqyrë e formatit',
'LBL_LAYOUTS'=>'Formatet',
'LBL_LISTVIEW'=>'Pamje në formë liste',
'LBL_RECORDVIEW'=>'LBL_SHIKIM_REGJISTRIMESH',
'LBL_RECORDDASHLETVIEW'=>'Nënvizimi i pamjes së regjistrimit',
'LBL_PREVIEWVIEW'=>'Preview View',
'LBL_MODULE_TITLE' => 'Studio',
'LBL_NEW_PACKAGE' => 'Paketë e re',
'LBL_NEW_PANEL'=>'Panel  i ri',
'LBL_NEW_ROW'=>'Resht i ri',
'LBL_PACKAGE_DELETED'=>'Paketa u fshi.',
'LBL_PUBLISHING' => 'Publikim...',
'LBL_PUBLISHED' => 'publikuar',
'LBL_SELECT_FILE'=> 'Zgjidh skedar',
'LBL_SAVE_LAYOUT'=> 'Ruaj formatin',
'LBL_SELECT_A_SUBPANEL' => 'Selekto nënpanel',
'LBL_SELECT_SUBPANEL' => 'Selekto nënpanel',
'LBL_SUBPANELS' => 'Nënpanelet',
'LBL_SUBPANEL' => 'Nënpanel',
'LBL_SUBPANEL_TITLE' => 'Titulli',
'LBL_SEARCH_FORMS' => 'Kërkim',
'LBL_STAGING_AREA' => 'Zona e organizimit ( vendos dhe lësho këtu artikujt)',
'LBL_SUGAR_FIELDS_STAGE' => 'Fushat e Sugar',
'LBL_SUGAR_BIN_STAGE' => 'Kazani i Sugar',
'LBL_TOOLBOX' => 'Kutia e veglave',
'LBL_VIEW_SUGAR_FIELDS' => 'Shih fushat e Sugar',
'LBL_VIEW_SUGAR_BIN' => 'Shih Sugar kazanat',
'LBL_QUICKCREATE' => 'Krijim i shpejt',
'LBL_EDIT_DROPDOWNS' => 'Ndrysho lëshim global',
'LBL_ADD_DROPDOWN' => 'Shto lëshim global të ri',
'LBL_BLANK' => '-bosh-',
'LBL_TAB_ORDER' => 'porosia e lidhëses',
'LBL_TAB_PANELS' => 'Shfaq panelet si lidhëse',
'LBL_TAB_PANELS_HELP' => 'Shfaq çdo panel si lidhëse të saj në vend të shfaqjes së të gjithë atyre në një ekran.',
'LBL_TABDEF_TYPE' => 'Shfaq llojin',
'LBL_TABDEF_TYPE_HELP' => 'Zgjidhni se si ky seksion duhet të shfaqet. Ky opsion ka efekt vetëm  nëse ju keni aktivizuar skedat në këtë pikëpamje.',
'LBL_TABDEF_TYPE_OPTION_TAB' => 'Lidhëse',
'LBL_TABDEF_TYPE_OPTION_PANEL' => 'Paneli',
'LBL_TABDEF_TYPE_OPTION_HELP' => 'Zgjidhni Panelin për ta bërë panelin që të afishohet brenda pamjes së paraqitjes. Zgjidhni Skedën për ta bërë panelin të paraqitet brenda një skede të veçantë brenda paraqitjes. Kur specifikohet skeda për një panel, panelet vijues do të afishohen brenda skedës. <br/>Për panelin tjetër për të cilin zgjidhet skeda do të nisë një skedë e re. Nëse skeda zgjidhet për panelin poshtë panelit të parë, paneli i parë do të jetë detyrimisht skedë.',
'LBL_TABDEF_COLLAPSE' => 'Shemb',
'LBL_TABDEF_COLLAPSE_HELP' => 'Zgjidhni që gjendja e  parazgjedhur e këtij paneli si të shembur.',
'LBL_DROPDOWN_TITLE_NAME' => 'Emri',
'LBL_DROPDOWN_LANGUAGE' => 'Gjuha',
'LBL_DROPDOWN_ITEMS' => 'Lista e artikujve',
'LBL_DROPDOWN_ITEM_NAME' => 'Emri i artikullit',
'LBL_DROPDOWN_ITEM_LABEL' => 'formati i shfaqur',
'LBL_SYNC_TO_DETAILVIEW' => 'Sink në pamje të detajuar',
'LBL_SYNC_TO_DETAILVIEW_HELP' => 'Selektoni këtë opsion për të sinkronizuar faqosjen në ndryshimin e pamjes në faqosjen koresponduese të ndryshimit të pamjes.Fushat dhe vendosja e fushës në pamjen e ndryshimit<br />do të sinkronizohen dhe ruhen në pamje të detajuar automatikisht mbi klikimin Ruaj ose Ruaj & Vendosë në ndryshimin e pamjes.<br />Ndryshimet e faqosjes nuk do të jenë në gjendje për t$#39;u bërë në pamje të detajuar.',
'LBL_SYNC_TO_DETAILVIEW_NOTICE' => 'Kjo pamje e detajuar është sinkronizuar me ndryshimin e pamjes përkatëse.<br />Fushat dhe vendosja e fushës në këtë pamje të detajuar reflekton fushat dhe vendosjen e fushës në ndryshimin e pamjes.<br />Ndryshimet në pamje të detajuar nuk mund të ruhen ose të vendoset në këtë faqe. Bëni ndryshime apo mos-sinkronizoni faqosjet në ndryshimin e pamjes.',
'LBL_COPY_FROM' => 'Kopjo nga:',
'LBL_COPY_FROM_EDITVIEW' => 'Kopjo nga NdryshoPamje',
'LBL_DROPDOWN_BLANK_WARNING' => 'Vlerat janë të nevojshme për të dyja edhe për Emrin e artikullit edhe për Etiketën e shfaqur. Për të shtuar një artikull bosh, shtyp Shto duke mos vendosur asnjë vlerë për Emrin e artikullit edhe për Etiketën e shfaqur',
'LBL_DROPDOWN_KEY_EXISTS' => 'LBL_HUDHJE_KYCE_EKZISTIM',
'LBL_DROPDOWN_LIST_EMPTY' => 'Lista duhet të përfshijë të paktën një send të aktivizuar',
'LBL_NO_SAVE_ACTION' => 'LBL_AKSION_JO_I_RUAJTUR',
'LBL_BADLY_FORMED_DOCUMENT' => 'Studio2:establishLocation: dokument i keqformuar',
// @TODO: Remove this lang string and uncomment out the string below once studio
// supports removing combo fields if a member field is on the layout already.
'LBL_INDICATES_COMBO_FIELD' => 'LBL_INDIKON_KOMBO_FUSHE',
'LBL_COMBO_FIELD_CONTAINS' => 'LBL_KOMBO_FUSHA_PERMBAN',

'LBL_WIRELESSLAYOUTS'=>'Lëviz formatet',
'LBL_WIRELESSEDITVIEW'=>'Lëviz NdryshimPamje',
'LBL_WIRELESSDETAILVIEW'=>'Lëviz Pamje të detajuar',
'LBL_WIRELESSLISTVIEW'=>'Lëviz Pamje në formë listes',
'LBL_WIRELESSSEARCH'=>'Lëviz kërkimin',

'LBL_BTN_ADD_DEPENDENCY'=>'Shto varësi',
'LBL_BTN_EDIT_FORMULA'=>'Ndrysho formulën',
'LBL_DEPENDENCY' => 'Varësia',
'LBL_DEPENDANT' => 'I varur',
'LBL_CALCULATED' => 'vlera e kalkuluar',
'LBL_READ_ONLY' => 'vetëm e lexueshme',
'LBL_FORMULA_BUILDER' => 'Krijimi i formulës',
'LBL_FORMULA_INVALID' => 'Formulë jovalide',
'LBL_FORMULA_TYPE' => 'Formula duhet të jetë e llojit',
'LBL_NO_FIELDS' => 'Asnjë fushë nuk u gjet',
'LBL_NO_FUNCS' => 'Asnjë funksion nuk u gjet',
'LBL_SEARCH_FUNCS' => 'Kërko funksionet...',
'LBL_SEARCH_FIELDS' => 'Kërko fushat',
'LBL_FORMULA' => 'formula',
'LBL_DYNAMIC_VALUES_CHECKBOX' => 'i varur',
'LBL_DEPENDENT_DROPDOWN_HELP' => 'Tërhiqi opsionet nga lista në të majtën e opsionëve në dispozicion të varur në listat në të djathtën për të bërë këto opsione të disponueshme kur opsioni i prindit është selektuar. Nëse artikujt janë nën opsionin e prindit, kur opsioni i prindit është selektuar, tërhiqja e varur nuk do të shfaqet.',
'LBL_AVAILABLE_OPTIONS' => 'Opcionet e mundshme',
'LBL_PARENT_DROPDOWN' => 'Mëma e lëshuar',
'LBL_VISIBILITY_EDITOR' => 'Ndryshuesi i pamjes',
'LBL_ROLLUP' => 'Mbështjell',
'LBL_RELATED_FIELD' => 'Fusha të ngjashme',
'LBL_PORTAL_ROLE_DESC' => 'Mos e fshini këtë rol. Roli portal i vetëshërbimit të klientit është një rol që gjenerohet nga sistemi, i krijuar gjatë procesit të aktivizimit të portalit Sugar. Përdorni kontrollet e hyrjes brenda këtij roli për të aktivizuar dhe/ose çaktivizuar gabimet, rastet ose modulet e bazës së njohurive në portalin Sugar. Mos modifikoni asnjë kontroll tjetër hyrjeje për këtë rol për të shmangur sjelljen e panjohur dhe të paparashikueshme të sistemit. Në rastin e fshirjes aksidentale të këtij roli, rikrijojeni atë duke çaktivizuar dhe aktivizuar portalin Sugar.',

//RELATIONSHIPS
'LBL_MODULE' => 'Moduli',
'LBL_LHS_MODULE'=>'Modula primare',
'LBL_CUSTOM_RELATIONSHIPS' => 'lidhja krijuar në Studio',
'LBL_RELATIONSHIPS'=>'Lidhjet',
'LBL_RELATIONSHIP_EDIT' => 'Ndrysho lidhjen',
'LBL_REL_NAME' => 'Emri',
'LBL_REL_LABEL' => 'kalsifikim',
'LBL_REL_TYPE' => 'Lloji',
'LBL_RHS_MODULE'=>'Modul i lidhur',
'LBL_NO_RELS' => 'asnjë lidhje',
'LBL_RELATIONSHIP_ROLE_ENTRIES'=>'Kushte fakultative' ,
'LBL_RELATIONSHIP_ROLE_COLUMN'=>'Kolona',
'LBL_RELATIONSHIP_ROLE_VALUE'=>'Vlera',
'LBL_SUBPANEL_FROM'=>'Forma e nënpanelit:',
'LBL_RELATIONSHIP_ONLY'=>'Nuk ka elemente të dukshme që do të krijohen për këtë lidhje që nuk ekziston para-ekzistimit të lidhjes së dukshme ndërmjet këtyre dy module.',
'LBL_ONETOONE' => 'Një për një',
'LBL_ONETOMANY' => 'Një për shumë',
'LBL_MANYTOONE' => 'Shumë për një',
'LBL_MANYTOMANY' => 'Shumë për shumë',

//STUDIO QUESTIONS
'LBL_QUESTION_FUNCTION' => 'Selekto funksion ose përbërës',
'LBL_QUESTION_MODULE1' => 'Selekto modulë',
'LBL_QUESTION_EDIT' => 'Selekto modul për të ndryshuar',
'LBL_QUESTION_LAYOUT' => 'Selekto format për të ndryshuar',
'LBL_QUESTION_SUBPANEL' => 'Selekto nënpanel për të ndryshuar',
'LBL_QUESTION_SEARCH' => 'Selekto kërkim paneli për të ndryshuar.',
'LBL_QUESTION_MODULE' => 'Selekto përbërës të modulit për të ndryshuar',
'LBL_QUESTION_PACKAGE' => 'Selekto paketë për të ndryshuar, ose krijo paketë të re',
'LBL_QUESTION_EDITOR' => 'Selekto një mjet.',
'LBL_QUESTION_DROPDOWN' => 'Selekto një lëshim për të ndryshuar, ose krijo një të re.',
'LBL_QUESTION_DASHLET' => 'Selekto një format të nënvizuar për të ndryshuar.',
'LBL_QUESTION_POPUP' => 'Selekto një format të shfaqur për të ndryshuar.',
//CUSTOM FIELDS
'LBL_RELATE_TO'=>'Lidh me',
'LBL_NAME'=>'Emri',
'LBL_LABELS'=>'Etiketat',
'LBL_MASS_UPDATE'=>'Masa e rinovuar',
'LBL_AUDITED'=>'Audito',
'LBL_CUSTOM_MODULE'=>'Modul',
'LBL_DEFAULT_VALUE'=>'Vlerë e gabuar',
'LBL_REQUIRED'=>'E nevojshme',
'LBL_DATA_TYPE'=>'Lloji',
'LBL_HCUSTOM'=>'ZAKONSHËM',
'LBL_HDEFAULT'=>'ÇAKTIVIZUAR',
'LBL_LANGUAGE'=>'Gjuha',
'LBL_CUSTOM_FIELDS' => 'fushat e krijuara në studio',

//SECTION
'LBL_SECTION_EDLABELS' => 'Ndrysho formatet',
'LBL_SECTION_PACKAGES' => 'Paketat',
'LBL_SECTION_PACKAGE' => 'Paketa',
'LBL_SECTION_MODULES' => 'Modulet',
'LBL_SECTION_PORTAL' => 'Portali',
'LBL_SECTION_DROPDOWNS' => 'Lëshimet',
'LBL_SECTION_PROPERTIES' => 'Karakteristikat',
'LBL_SECTION_DROPDOWNED' => 'Ndrysho lëshimin',
'LBL_SECTION_HELP' => 'Ndihmë',
'LBL_SECTION_ACTION' => 'Veprim',
'LBL_SECTION_MAIN' => 'Kryesore',
'LBL_SECTION_EDPANELLABEL' => 'Ndrysho etiketën e panelit',
'LBL_SECTION_FIELDEDITOR' => 'Ndrysho fushën',
'LBL_SECTION_DEPLOY' => 'Poziciono',
'LBL_SECTION_MODULE' => 'Moduli',
'LBL_SECTION_VISIBILITY_EDITOR'=>'ndrysho dukshmërinë',
//WIZARDS

//LIST VIEW EDITOR
'LBL_DEFAULT'=>'Çaktivizuar',
'LBL_HIDDEN'=>'E fshehur',
'LBL_AVAILABLE'=>'e disponueshme',
'LBL_LISTVIEW_DESCRIPTION'=>'Janë tre kolona të shfaqura më poshtë.Kolona e parazgjedhjes përmban fushat që janë shfaqur në pikëpamjen e listës nga parazgjedhja, kolona shtesë përmban fushat që përdoruesi mund të zgjedh  përdorimin për krijimin e pamjes me porosi, dhe kolonat në dispozicion janë kolona të disponueshme për ju si një admin ose mund të shtoni parazgjedhjen ose kolonat shtesë për t$#39;u përdorur nga përdoruesit, por që nuk janë përdorur aktualisht.',
'LBL_LISTVIEW_EDIT'=>'Ndryshues i pamjes në formë liste',

//Manager Backups History
'LBL_MB_PREVIEW'=>'Mëparshëm',
'LBL_MB_RESTORE'=>'Rikrijo',
'LBL_MB_DELETE'=>'Fshi',
'LBL_MB_COMPARE'=>'Krahaso',
'LBL_MB_DEFAULT_LAYOUT'=>'Format i çaktivizuar',

//END WIZARDS

//BUTTONS
'LBL_BTN_ADD'=>'shto',
'LBL_BTN_SAVE'=>'Ruaj',
'LBL_BTN_SAVE_CHANGES'=>'Ruaj ndryshimet',
'LBL_BTN_DONT_SAVE'=>'Heq dorë nga ndryshimet',
'LBL_BTN_CANCEL'=>'Anulo',
'LBL_BTN_CLOSE'=>'Mbyll:',
'LBL_BTN_SAVEPUBLISH'=>'Ruaj dhe vendos',
'LBL_BTN_NEXT'=>'Vijues',
'LBL_BTN_BACK'=>'Kthe',
'LBL_BTN_CLONE'=>'Klono',
'LBL_BTN_COPY' => 'Kopjo',
'LBL_BTN_COPY_FROM' => 'Kopjo nga...',
'LBL_BTN_ADDCOLS'=>'Shto kolona',
'LBL_BTN_ADDROWS'=>'Shto reshta',
'LBL_BTN_ADDFIELD'=>'Shto fushë',
'LBL_BTN_ADDDROPDOWN'=>'Shto lëshim',
'LBL_BTN_SORT_ASCENDING'=>'Klasifiko rritjen',
'LBL_BTN_SORT_DESCENDING'=>'Klasifiko zbritjen',
'LBL_BTN_EDLABELS'=>'Ndrysho etiketimin',
'LBL_BTN_UNDO'=>'Zhbëj',
'LBL_BTN_REDO'=>'Ribëj',
'LBL_BTN_ADDCUSTOMFIELD'=>'Shto fushë të rëndomtë',
'LBL_BTN_EXPORT'=>'Eksporto përshtatjet',
'LBL_BTN_DUPLICATE'=>'Dublo',
'LBL_BTN_PUBLISH'=>'Publiko',
'LBL_BTN_DEPLOY'=>'Poziciono',
'LBL_BTN_EXP'=>'Eksporto',
'LBL_BTN_DELETE'=>'Fshi',
'LBL_BTN_VIEW_LAYOUTS'=>'Shih Formatet',
'LBL_BTN_VIEW_MOBILE_LAYOUTS'=>'Shiko faqosjet mobile',
'LBL_BTN_VIEW_FIELDS'=>'Shih fushat',
'LBL_BTN_VIEW_RELATIONSHIPS'=>'Shih lidhjet',
'LBL_BTN_ADD_RELATIONSHIP'=>'Shto lidhje',
'LBL_BTN_RENAME_MODULE' => 'Ndrysho emrin e modulës',
'LBL_BTN_INSERT'=>'Shto',
'LBL_BTN_RESTORE_BASE_LAYOUT' => 'Rivendos strukturën bazë',
//TABS

//ERRORS
'ERROR_ALREADY_EXISTS'=> 'Gabim: fusha tashmë ekziston',
'ERROR_INVALID_KEY_VALUE'=> "Gabim: vlerë jovalide e çelësit:[&#39;]",
'ERROR_NO_HISTORY' => 'Nuk u gjetë asnjë dosje historie',
'ERROR_MINIMUM_FIELDS' => 'Formati duhet së paku të përmbaj një fushë',
'ERROR_GENERIC_TITLE' => 'Ka ndodhur një gabim',
'ERROR_REQUIRED_FIELDS' => 'A jeni i sigurt që dëshironi të vazhdoni? Fushat vijuese të nevojshme mungojnë nga formati:',
'ERROR_ARE_YOU_SURE' => 'A jeni i sigurt që dëshironi të vazhdoni?',
'ERROR_DATABASE_ROW_SIZE_LIMIT' => 'Fusha nuk mund të krijohet. Ke arritur limitin e madhësisë së rreshtit të kësaj tabele në bazën tënde të të dhënave. <a href="https://support.sugarcrm.com/SmartLinks/Custom/MySQL_Row_Size_Limit/" target="_blank">Mëso më shumë</a>.',

'ERROR_CALCULATED_MOBILE_FIELDS' => 'Fusha(t) në vijim kanë llogaritur vlerat të cilat nuk do të ri-llogaritën në kohën reale në pamjen e ndryshimit të SugarCRM Celular:',
'ERROR_CALCULATED_PORTAL_FIELDS' => 'Fusha(t) në vijim kanë llogaritur vlerat të cilat nuk do të ri-llogaritën në kohën reale në pamjen e ndryshimit të SugarCRM Celular:',

//SUGAR PORTAL
    'LBL_PORTAL_DISABLED_MODULES' => 'Moduli(et)  mëposhtëm  është i çaktivizuar:',
    'LBL_PORTAL_ENABLE_MODULES' => 'Nëse ju do të dëshironit për të mundësuar ato në portal ju lutemi aktivizoni ato këtu.',
    'LBL_PORTAL_CONFIGURE' => 'Konfiguroni portalin',
    'LBL_PORTAL_ENABLE_PORTAL' => 'Aktivizo portalin',
    'LBL_PORTAL_SHOW_KB_NOTES' => 'Aktivizo shënimet në modulin "Baza e njohurive"',
    'LBL_PORTAL_ALLOW_CLOSE_CASE' => 'Lejo përdoruesit e portalit që të mbyllin rastin',
    'LBL_PORTAL_ENABLE_SELF_SIGN_UP' => 'Lejo përdoruesit e rinj që të regjistrohen',
    'LBL_PORTAL_USER_PERMISSIONS' => 'Lejet e përdoruesit',
    'LBL_PORTAL_THEME' => 'Tema e portalit',
    'LBL_PORTAL_ENABLE' => 'Aktivizo',
    'LBL_PORTAL_SITE_URL' => 'Sajti i portalit tuaj është në dispozicion në:',
    'LBL_PORTAL_APP_NAME' => 'Emri i aplikacionit',
    'LBL_PORTAL_CONTACT_PHONE' => 'Telefoni',
    'LBL_PORTAL_CONTACT_EMAIL' => 'Emaili',
    'LBL_PORTAL_CONTACT_EMAIL_INVALID' => 'Duhet të shkruash një adresë emaili të vlefshme',
    'LBL_PORTAL_CONTACT_URL' => 'URL',
    'LBL_PORTAL_CONTACT_INFO_ERROR' => 'Duhet të specifikohet të paktën një mënyrë kontakti',
    'LBL_PORTAL_LIST_NUMBER' => 'Numri i regjistrave të shfaqen në listën',
    'LBL_PORTAL_DETAIL_NUMBER' => 'Numri i fushave të shfaqen në Pamje të Detajuara',
    'LBL_PORTAL_SEARCH_RESULT_NUMBER' => 'Numri i rezultateve të shfaqen në Kërkimi Global',
    'LBL_PORTAL_DEFAULT_ASSIGN_USER' => 'Parazgjedhimet e caktuara për regjistruesit e rinj',
    'LBL_PORTAL_MODULES' => 'Modulet e Portalit',
    'LBL_CONFIG_PORTAL_CONTACT_INFO' => 'Portali Informacione për kontakt',
    'LBL_CONFIG_PORTAL_CONTACT_INFO_HELP' => 'Konfiguro informacionin e kontaktit që i prezantohet përdoruesve të Portalit që kërkojnë mbështetje shtesë me llogarinë e tyre. Duhet të konfigurohet të paktën një opsion.',
    'LBL_CONFIG_PORTAL_MODULES_HELP' => 'Tërhiqi emrat e moduleve më poshtë për t&#39;i vendosur ato të shfaqen apo të fshehen në krye të shtyllës së navigacionit. Për të kontrolluar qasjen në module, përdorni <a href="?module=ACLRoles&action=index">Rolin e Menaxhimit.</a>',
    'LBL_CONFIG_PORTAL_MODULES_DISPLAYED' => 'Shfaqja e moduleve',
    'LBL_CONFIG_PORTAL_MODULES_HIDDEN' => 'Modulet e fshehura',
    'LBL_CONFIG_VISIBILITY' => 'Dukshmëria',
    'LBL_CASE_VISIBILITY_HELP' => 'Përcakto cilët përdorues të portalit mund ta shikojnë në rast.',
    'LBL_EMAIL_VISIBILITY_HELP' => 'Përcakto cilët përdorues të portalit mund të shikojnë email-et e lidhura me një rast. Kontaktet pjesëmarrëse janë ato që gjenden në fushat "Për:", "Nga:", "CC:" dhe "BCC:".',
    'LBL_MESSAGE_VISIBILITY_HELP' => 'Përcakton cilët përdorues të portalit mund të shikojnë mesazhet e lidhura me një rast. Kontaktet pjesëmarrëse janë ato në fushën "Të ftuarit".',
    'CASE_VISIBILITY_OPTIONS' => [
        'all' => 'Të gjitha kontaktet e lidhura me llogarinë',
        'related_contacts' => 'Vetëm kontakti kryesor dhe kontaktet e lidhura me rastin',
    ],
    'EMAIL_VISIBILITY_OPTIONS' => [
        'related_contacts' => 'Vetëm kontaktet pjesëmarrëse',
        'all' => 'Të gjitha kontaktet që mund ta shikojnë rastin',
    ],
    'MESSAGE_VISIBILITY_OPTIONS' => [
        'related_contacts' => 'Vetëm kontaktet pjesëmarrëse',
        'all' => 'Të gjitha kontaktet që mund ta shikojnë rastin',
    ],


'LBL_PORTAL'=>'Portali',
'LBL_PORTAL_LAYOUTS'=>'Formatet e portalit',
'LBL_SYNCP_WELCOME'=>'Ju lutemi vendosni URL e portalit që dëshironi të rifreskoni.',
'LBL_SP_UPLOADSTYLE'=>'Selekto stilin e faqës nga kompjuteri juaj që të ngarkoni.<br />StilI i faqës do të implementohet herën tjetër në Portalin Sugar që ju të kryeni sinkronizimin.',
'LBL_SP_UPLOADED'=> 'E ngarkuar.',
'ERROR_SP_UPLOADED'=>'Ju lutemi siguroni që ju keni ngarkuar stilin css të faqës.',
'LBL_SP_PREVIEW'=>'Kjo është një pasqyrë se si duket stili i fletës tuaj.',
'LBL_PORTALSITE'=>'URL e Sugar Portalit :',
'LBL_PORTAL_GO'=>'Shko',
'LBL_UP_STYLE_SHEET'=>'Ngargoni Stilin e Faqës',
'LBL_QUESTION_SUGAR_PORTAL' => 'Selekto faqosjen e portalit Sugar për të ndryshuar.',
'LBL_QUESTION_PORTAL' => 'Selekto faqosjen e portalit për të ndryshuar.',
'LBL_SUGAR_PORTAL'=>'Ndryshuesi i Sugar Portali',
'LBL_USER_SELECT' => '--Selekto përdorues--',

//PORTAL PREVIEW
'LBL_CASES'=>'rastet',
'LBL_NEWSLETTERS'=>'Buletinet',
'LBL_BUG_TRACKER'=>'Gjyrmues i gabimeve',
'LBL_MY_ACCOUNT'=>'Llogaritë e mia',
'LBL_LOGOUT'=>'Dalje',
'LBL_CREATE_NEW'=>'Krijo të re',
'LBL_LOW'=>'I ulët',
'LBL_MEDIUM'=>'Mesatar',
'LBL_HIGH'=>'I lartë',
'LBL_NUMBER'=>'numri',
'LBL_PRIORITY'=>'priorieti',
'LBL_SUBJECT'=>'subjekti',

//PACKAGE AND MODULE BUILDER
'LBL_PACKAGE_NAME'=>'Emri i paketës',
'LBL_MODULE_NAME'=>'Emri i modulës',
'LBL_MODULE_NAME_SINGULAR' => 'Emri njëjës i modulit',
'LBL_AUTHOR'=>'Autori:',
'LBL_DESCRIPTION'=>'Përshkrim',
'LBL_KEY'=>'Çelësi',
'LBL_ADD_README'=>'Më lexo:',
'LBL_MODULES'=>'Modulet',
'LBL_LAST_MODIFIED'=>'Ndryshimi i fundit',
'LBL_NEW_MODULE'=>'Module e re',
'LBL_LABEL'=>'kalsifikim',
'LBL_LABEL_TITLE'=>'kalsifikim',
'LBL_SINGULAR_LABEL' => '_LBL_ETIKETIM_NJEJES',
'LBL_WIDTH'=>'gjerësia',
'LBL_PACKAGE'=>'Paketa:',
'LBL_TYPE'=>'Lloji',
'LBL_TEAM_SECURITY'=>'Sigurimi i grupit',
'LBL_ASSIGNABLE'=>'Tjetërsohet',
'LBL_PERSON'=>'Personi',
'LBL_COMPANY'=>'Kompania',
'LBL_ISSUE'=>'Çështja',
'LBL_SALE'=>'Shitje',
'LBL_FILE'=>'dosja',
'LBL_NAV_TAB'=>'Skeda e navigacionit',
'LBL_CREATE'=>'Krijo',
'LBL_LIST'=>'lista',
'LBL_VIEW'=>'Pamje',
'LBL_LIST_VIEW'=>'Pamja e listës',
'LBL_HISTORY'=>'shiko historinë',
'LBL_RESTORE_DEFAULT_LAYOUT'=>'Rikthe paraqitjen e paracaktuar',
'LBL_ACTIVITIES'=>'Aktivitetet',
'LBL_SEARCH'=>'Kërkim',
'LBL_NEW'=>'E re',
'LBL_TYPE_BASIC'=>'Bazike',
'LBL_TYPE_COMPANY'=>'Kompania',
'LBL_TYPE_PERSON'=>'Personi',
'LBL_TYPE_ISSUE'=>'çështje',
'LBL_TYPE_SALE'=>'shitje',
'LBL_TYPE_FILE'=>'Dosja',
'LBL_RSUB'=>'Ky është nënpaneli që do të shfaqet në modulet tuaja',
'LBL_MSUB'=>'Ky është nënpaneli që moduli juaj ofron module të ngjashme për shfaqje',
'LBL_MB_IMPORTABLE'=>'Allow Imports',

// VISIBILITY EDITOR
'LBL_VE_VISIBLE'=>'e dukshme',
'LBL_VE_HIDDEN'=>'e fshehur',
'LBL_PACKAGE_WAS_DELETED'=>'[[package]] është fshirë',

//EXPORT CUSTOMS
'LBL_EC_TITLE'=>'Eksporto përshtatjet',
'LBL_EC_NAME'=>'Emri i paketës',
'LBL_EC_AUTHOR'=>'Autori:',
'LBL_EC_DESCRIPTION'=>'Përshkrimi:',
'LBL_EC_KEY'=>'Çelësi:',
'LBL_EC_CHECKERROR'=>'Ju lutemi selektoni një modulë.',
'LBL_EC_CUSTOMFIELD'=>'fushë(at) e përshtatur',
'LBL_EC_CUSTOMLAYOUT'=>'faqosja(et) e përshtatur',
'LBL_EC_CUSTOMDROPDOWN' => 'rënie e përshtatur poshtë',
'LBL_EC_NOCUSTOM'=>'Asnjë modul nuk ka qënë i përshtatur.',
'LBL_EC_EXPORTBTN'=>'Eksporto',
'LBL_MODULE_DEPLOYED' => 'Moduli ka qenë i vendosur.',
'LBL_UNDEFINED' => 'E papërcaktuar',
'LBL_EC_CUSTOMLABEL'=>'Etiketime të përshtatura',

//AJAX STATUS
'LBL_AJAX_FAILED_DATA' => 'Dështoi për t$#39;i rifituar të dhënat',
'LBL_AJAX_TIME_DEPENDENT' => 'Koha e varur nga veprimi është në progres. Ju lutemi prisni dhe provoni përsëri për disa sekonda.',
'LBL_AJAX_LOADING' => 'Ngarkimi...',
'LBL_AJAX_DELETING' => 'Fshirja...',
'LBL_AJAX_BUILDPROGRESS' => 'Ndërtimi në proces',
'LBL_AJAX_DEPLOYPROGRESS' => 'Pozicionimi në proces',
'LBL_AJAX_FIELD_EXISTS' =>'Emri i fushës që ju keni hyrë tashmë ekziston. Ju lutemi shkruani emrin e ri të fushës.',
//JS
'LBL_JS_REMOVE_PACKAGE' => 'A jeni të sigurtë që dëshironi të fshini këtë paketë? Kjo do të fshijë të gjitha dosjet e shoqëruara me këtë paketë.',
'LBL_JS_REMOVE_MODULE' => 'A jeni të sigurtë që dëshironi të fshini këtë modul? Kjo do të fshijë të gjitha dosjet e shoqëruara me këtë modul.',
'LBL_JS_DEPLOY_PACKAGE' => 'Çdo përshtatje që keni bërë në studio do të mbishkruhet kur ky modul është ri-vendosur. A jeni te sigurtë që doni të vazhdoni?',

'LBL_DEPLOY_IN_PROGRESS' => 'Vendosja e Paketës',
'LBL_JS_VALIDATE_NAME'=>'Emri - Duhet të jetë alfanumerik, të fillojë me letrën dhe mos të përmbaje hapësira.',
'LBL_JS_VALIDATE_PACKAGE_KEY'=>'Çelësi i paketës ekziston tashmë',
'LBL_JS_VALIDATE_PACKAGE_NAME'=>'Emri paketës tashmë ekziston',
'LBL_JS_PACKAGE_NAME'=>'Emri i paketës - Duhet të fillojë me një germë dhe mund të përbëhet vetëm nga germa, numra dhe karaktere nënvijëzimi. Nuk mund të përdoren hapësira ose karaktere të tjera të veçanta.',
'LBL_JS_VALIDATE_KEY_WITH_SPACE'=>'LBL_JS_VALIDIM_KYC_ME_HAPESIRE',
'LBL_JS_VALIDATE_KEY'=>'Çelësi - Duhet të jetë alfanumerik, të fillojë me letrën dhe mos të përmbaje hapësira.',
'LBL_JS_VALIDATE_LABEL'=>'Ju lutemi shkruani etiketën që do të përdoret si Emër i Shfaqjes për këtë modul',
'LBL_JS_VALIDATE_TYPE'=>'Ju lutemi selektoni llojin e modulit që ju dëshironi të ndërtoni nga lista e mësipërme',
'LBL_JS_VALIDATE_REL_NAME'=>'Emri - Duhet të jetë alfanumerik pa hapësira',
'LBL_JS_VALIDATE_REL_LABEL'=>'Etiketë - ju lutemi shtoni etiketën që do të shfaqet sipër nënpanelit',

// Dropdown lists
'LBL_JS_DELETE_REQUIRED_DDL_ITEM' => 'LBL_JS_FSHIRJE_KERKIM_DDL_SEND',

// Specific dropdown list should be:
// LBL_JS_DELETE_REQUIRED_DDL_ITEM_(UPPERCASE_DDL_NAME)
'LBL_JS_DELETE_REQUIRED_DDL_ITEM_SALES_STAGE_DOM' => 'LBL_JS_FSHIRJE_KERKIM_DDL)SEND_SHITJE_ETAPE_DOM',

// Specific list items should be:
// LBL_JS_DELETE_REQUIRED_DDL_ITEM_(UPPERCASE_ITEM_NAME)
// Item name should have all special characters removed and spaces converted to
// underscores
'LBL_JS_DELETE_REQUIRED_DDL_ITEM_NEW' => 'Jeni të sigurtë që dëshironi të fshini statusin e ri të shitjes? Fshirja e këtij statusi do të shkaktojë që Moduli i mundësive të rrjeshtit të të ardhurave të mos punojë si duhet.',
'LBL_JS_DELETE_REQUIRED_DDL_ITEM_IN_PROGRESS' => 'Jeni të sigurtë që dëshironi të fshini statusin e progresit të shitjes? Fshirja e këtij statusi do të shkaktojë që Moduli i mundësive të rrjeshtit të të ardhurave të mos punojë si duhet.',
'LBL_JS_DELETE_REQUIRED_DDL_ITEM_CLOSED_WON' => 'LBL_JS_FSHIRJE_KERKIM_DDL_SEND_MBYLLUR_FITON',
'LBL_JS_DELETE_REQUIRED_DDL_ITEM_CLOSED_LOST' => 'LBL_JS_FSHIRJE_KERKIM_DDL_SEND_MBYLLUR_HUMB',

//CONFIRM
'LBL_CONFIRM_FIELD_DELETE'=>'Deleting this custom field will delete both the custom field and all the data related to the custom field in the database. The field will be no longer appear in any module layouts.'
        . ' If the field is involved in a formula to calculate values for any fields, the formula will no longer work.'
        . '\n\nThe field will no longer be available to use in Reports; this change will be in effect after logging out and logging back in to the application. Any reports containing the field will need to be updated in order to be able to be run.'
        . '\n\nDo you wish to continue?',
'LBL_CONFIRM_RELATIONSHIP_DELETE'=>'A jeni të sigurtë që dëshironi të fshini këtë lidhje?',
'LBL_CONFIRM_RELATIONSHIP_DEPLOY'=>'Kjo do të bëjë këtë lidhje të përhershme. A jeni të sigurtë që dëshironi të vendosni këtë lidhje?',
'LBL_CONFIRM_DONT_SAVE' => 'Ndryshimet janë bërë që nga ruajtja e juaj e fundit, Dëshironi të ruani?',
'LBL_CONFIRM_DONT_SAVE_TITLE' => 'Ruani Ndryshimet?',
'LBL_CONFIRM_LOWER_LENGTH' => 'Të dhënat mund të jenë të shkurtuara dhe kjo nuk mund të anulohet, a jeni të sigurt që doni të vazhdoni?',

//POPUP HELP
'LBL_POPHELP_FIELD_DATA_TYPE'=>'Selekto llojin e përshtatshëm të dhënave bazuar në llojin e të dhënave që do të hynë në fushë.',
'LBL_POPHELP_FTS_FIELD_CONFIG' => 'Konfiguroni fushën që të kërkohet plotësisht për tekst.',
'LBL_POPHELP_FTS_FIELD_BOOST' => 'Përforcimi është procesi i përforcimit të ngjashmërisë së fushave të një regjistrimi.<br />Fushave me nivel më të lartë përforcimi do t&#39;u jepet peshë më e madhe kur të kryhet kërkimi. Kur kërkimi të kryhet, të dhënat që përputhen që përmbajnë fushat me peshë më të lartë do të shfaqen më lart në rezultatet e kërkimit.<br />Vlera e paracaktuar është 1.0, e cila përkthehet në përforcim neutral. Për të aplikuar një përforcim pozitiv, pranohet çdo vlerë pezull, më e lartë se 1. Për një përforcim negativ, përdorni vlera më të ulëta se 1. Për shembull, vlera prej 1,35 do të përforcojë pozitivisht një fushë me 135%. Përdorimi i një vlere 0.60 do të aplikojë një përforcim negativ.<br />Mbani parasysh se në versionet e mëparshme kërkohej që të kryhej një riindeksim i plotë i kërkimit të tekstit. Kjo nuk kërkohet më.',
'LBL_POPHELP_IMPORTABLE'=>'Po: Fusha do të përfshihet në një operacion të importit. <br />Nr: Fusha nuk do të përfshihet në një import. <br />Kërkohet: Vlera për fushën e cila duhet të sigurohet në çdo import.',
'LBL_POPHELP_PII'=>'Kjo fushë do të shënohet automatikisht për auditim dhe do të ofrohet në pamjen e të dhënave personale.<br>Fushat e të dhënave personale mund të fshihen përgjithmonë edhe kur të dhënat i referohen kërkesës për fshirje të privatësisë së të dhënave.<br>Fshirja kryhet përmes modulit të privatësisë së të dhënave dhe mund të ekzekutohet nga administratorët apo përdoruesit në rolin e menaxherit të privatësisë së të dhënave.',
'LBL_POPHELP_IMAGE_WIDTH'=>'Shkruani numrin për gjerësinë, të matur si në pixels.<br />Imazhi i ngarkuar do të jetë i shkallëzuar në këtë gjerësi.',
'LBL_POPHELP_IMAGE_HEIGHT'=>'Shkruani numrin për lartësinë, të matur si në pixels.<br />Imazhi i ngarkuar do të jetë i shkallëzuar në këtë lartësi.',
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
'LBL_POPHELP_REQUIRED'=>"Krijo një formulë për të përcaktuar nëse kjo fushë kërkohet në formatime.<br/>"
    . "Fushat e kërkuara do të ndjekin formulën në pamjen celulare të bazuar në shfletues,<br/>"
    . "por nuk do të ndjekin formulën në aplikacionet origjinale, si \"Sugar Mobile\" për \"iPhone\". <br/>"
    . "Ato nuk do të ndjekin formulën në portalin e vetëshërbimit të \"Sugar\".",
'LBL_POPHELP_READONLY'=>"Krijo një formulë për të përcaktuar nëse kjo fushë lexohet vetëm në skica.<br/>"
        . "Fushat vetëm për lexim do të ndjekin formulën në pamjen e celularit në shfletues, <br/>"
        . "por nuk do ta ndjekin formulën në aplikacionet origjinale, si p.sh. Sugar Mobile për iPhone. <br/><0/>"
        . "Ata nuk do ta ndjekin formulën në portalin e vetëshërbimit të Sugar.",
'LBL_POPHELP_GLOBAL_SEARCH'=>'Zgjidh përdorimin e kësaj fushe gjatë kërkimit për të dhënat duke përdorur "Kërkimi global" në këtë modul.',
//Revert Module labels
'LBL_RESET' => 'Rivendos',
'LBL_RESET_MODULE' => 'Rivendosni Module',
'LBL_REMOVE_CUSTOM' => 'Fshini Përshtatjet',
'LBL_CLEAR_RELATIONSHIPS' => 'Marrëdhëniet e qarta',
'LBL_RESET_LABELS' => 'Rivendosni Etiketat',
'LBL_RESET_LAYOUTS' => 'Rivendos faqosjet',
'LBL_REMOVE_FIELDS' => 'Fshini Fushat me porosi',
'LBL_CLEAR_EXTENSIONS' => 'Zgjerime të qarta',

'LBL_HISTORY_TIMESTAMP' => 'Koha e vulës',
'LBL_HISTORY_TITLE' => 'Historia',

'fieldTypes' => array(
                'varchar'=>'Fusha e tekstit',
                'int'=>'Numër i plotë',
                'float'=>'Pezull',
                'bool'=>'Kuti zgjedhjeje',
                'enum'=>'Me zbritje',
                'multienum' => 'Multizgjedhe',
                'date'=>'Data',
                'phone' => 'Telefoni',
                'currency' => 'monedha',
                'html' => 'HTML',
                'radioenum' => 'Radio',
                'relate' => 'Lidh',
                'address' => 'adresa',
                'text' => 'Zona e tekstit',
                'url' => 'URL',
                'iframe' => 'IFrame',
                'image' => 'Imazh',
                'encrypt'=>'Enkriptim',
                'datetimecombo' =>'Data dhe koha',
                'decimal'=>'Dhjetor',
                'autoincrement' => 'Rritje automatike',
                'actionbutton' => 'Buton veprimi',
),
'labelTypes' => array(
    "" => "Labelat e përdorura shpesh",
    "all" => "Të gjitha etiketat",
),

'parent' => 'Lidhja fleksibile',

'LBL_ILLEGAL_FIELD_VALUE' =>"Celësi i tërheqjes nuk mund të përmbajë citatet.",
'LBL_CONFIRM_SAVE_DROPDOWN' =>"Ju keni selektuar këtë artikull për heqjen nga lista. Çdo fushë e përdorur në këtë listë me këtë artikull si një vlerë nuk do të shfaq vlerën, dhe vlera nuk do të jetë në gjendje për të selektuar fushat. A jeni të sigurtë qe doni të vazhdoni?",
'LBL_POPHELP_VALIDATE_US_PHONE'=>"Select to validate this field for the entry of a 10-digit<br>" .
                                 "phone number, with allowance for the country code 1, and<br>" .
                                 "to apply a U.S. format to the phone number when the record<br>" .
                                 "is saved. The following format will be applied: (xxx) xxx-xxxx.",
'LBL_ALL_MODULES'=>'Të gjitha Modulet',
'LBL_RELATED_FIELD_ID_NAME_LABEL' => 'LBL_E_NDERLIDHUR_FUSHE_ID_EMRI_ETIKETIM',
'LBL_HEADER_COPY_FROM_LAYOUT' => 'Kopjo nga faqosja',
'LBL_RELATIONSHIP_TYPE' => 'Lidhja',

// Edit Labels
'LBL_COMPARISON_LANGUAGE' => 'Gjuha e krahasimit',
'LBL_LABEL_NOT_TRANSLATED' => 'Kjo etiketë mund të mos përkthehet',
);
