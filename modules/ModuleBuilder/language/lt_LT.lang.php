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
    'LBL_LOADING' => 'Įkeliama' /*for 508 compliance fix*/,
    'LBL_HIDEOPTIONS' => 'Slėpti parinktis' /*for 508 compliance fix*/,
    'LBL_DELETE' => 'Naikinti' /*for 508 compliance fix*/,
    'LBL_POWERED_BY_SUGAR' => 'Teikia „SugarCRM“' /*for 508 compliance fix*/,
    'LBL_ROLE' => 'Vaidmuo',
    'LBL_BASE_LAYOUT' => 'Pagrindinis išdėstymas',
    'LBL_FIELD_NAME' => 'Lauko pavadinimas',
    'LBL_FIELD_VALUE' => 'Vertė',
    'LBL_LAYOUT_DETERMINED_BY' => 'Išdėstymas, nustatytas:',
    'layoutDeterminedBy' => [
        'std' => 'Standartinis išdėstymas',
        'role' => 'Vaidmuo',
        'dropdown' => 'Išskleidžiamasis laukas',
    ],
    'LBL_DELETE_CUSTOM_LAYOUTS' => 'Visi pasirinktiniai išdėstymai bus pašalinti. Ar tikrai norite pakeisti dabartinius išdėstymo apibrėžimus?',
'help'=>array(
    'package'=>array(
            'create'=>'Suteikite paketui <b>Pavadinimą</b>. Pavadinimas turi prasidėti raide, o jį sudaryti gali tik raidės, skaitmenys ir pabraukimo brūkšniai. Tarpų ar kitų specialiųjų simbolių naudoti negalima. (Pvz.: Personalo_valdymas)<br/><br/> Galite nurodyti paketo <b>Autorių</b> ir <b>Aprašą</b>. <br/><br/>Paketą sukursite spustelėdami <b>Įrašyti</b>.',
            'modify'=>'Čia rodomos <b>Paketo</b> ypatybės ir galimi veiksmai.<br><br>Galite modifikuoti paketo <b>Pavadinimą</b>, <b>Autorių</b> ir <b>Aprašą</b>, taip pat galite peržiūrėti ir tinkinti visus pakete esančius modulius.<br><br>Spustelėdami <b>Naujas modulis</b> sukursite paketo modulį.<br><br>Jei pakete yra bent vienas modulis, paketą galite <b>Publikuoti</b> ir <b>Visuotinai diegti</b>, taip pat galite <b>Eksportuoti</b> padarytus paketo tinkinimus.',
            'name'=>'Tai yra dabartinio paketo <b>Pavadinimas</b>. <br/><br/>Pavadinimas turi prasidėti raide, o jį sudaryti gali tik raidės, skaitmenys ir pabraukimo brūkšniai. Tarpų ar kitų specialiųjų simbolių naudoti negalima. (Pvz.: Personalo_valdymas)',
            'author'=>'Tai yra <b>Autorius</b>, kuris diegimo metu rodomas kaip paketą sukūrusio subjekto vardas.<br><br>Autoriumi gali būti asmuo arba įmonė.',
            'description'=>'Tai yra paketo <b>Aprašas</b>, rodomas diegimo metu.',
            'publishbtn'=>'Spustelėkite <b>Publikuoti</b>, jei norite įrašyti visus įvestus duomenis ir sukurti .zip failą, kaip diegiamąją paketo versiją.<br><br>Naudodamiesi <b>Modulių įkelties programa</b>, nusiųskite .zip failą ir įdiekite paketą.',
            'deploybtn'=>'Spustelėkite <b>Visuotinai diegti</b>, jei norite įrašyti visus įvestus duomenis ir į dabartinį egzempliorių įdiegti paketą su visais moduliais.',
            'duplicatebtn'=>'Spustelėkite <b>Dubliuoti</b>, jei norite paketo turinį nukopijuoti į naują paketą ir matyti tą naują paketą ekrane. <br/><br/>Naujojo paketo pavadinimas bus sugeneruotas automatiškai, pridedant numerį to paketo pavadinimo gale, kurį naudojant buvo sukurtas naujasis paketas. Naujojo paketo pavadimą galite pakeisti, įvesdami naują <b>Pavadinimą</b> ir spustelėdami <b>Įrašyti</b>.',
            'exportbtn'=>'Spustelėkite <b>Eksportuoti</b>, jei norite sukurti .zip failą su padarytais paketo tinkinimais.<br><br> Sugeneruotas failas nėra diegiamoji paketo versija.<br><br>Naudodamiesi <b>Modulių darykle</b>, importuokite .zip failą, ir paketas su tinkinimais atsiras modulių daryklėje.',
            'deletebtn'=>'Spustelėkite <b>Naikinti</b>, jei norite ištrinti šį paketą ir visus su juo susijusius failus.',
            'savebtn'=>'Spustelėkite <b>Įrašyti</b>, jei norite išsaugoti visus įvestus duomenis, susijusius su šiuo paketu.',
            'existing_module'=>'Spustelėkite piktogramą <b>Modulis</b>, jei norite redaguoti su moduliu susietas ypatybes, laukus, ryšius ir išdėstymus.',
            'new_module'=>'Spustelėkite <b>Naujas modulis</b>, jei norite sukurti naują šio paketo modulį.',
            'key'=>'Šis 5 raidžių, raidinis-skaitinis <b>Raktas</b> bus naudojamas kaip priešvardis visuose kataloguose, klasių pavadinimuose ir duomenų bazių lentelėse, esančiose visuose dabartinio paketo moduliuose.<br><br> Šis raktas naudojamas norint suteikti lentelėms unikalius pavadinimus.',
            'readme'=>'Spustelėkite, norėdami įtraukti <b>Readme</b> tekstą į šį paketą.<br><br> Diegimo metu failas „Readme“ bus pasiekiamas.',

),
    'main'=>array(

    ),
    'module'=>array(
        'create'=>'Nurodykite modulio <b>pavadinimą</b>. Nurodyta <b>etiketė</b> pasirodys navigacijos kortelėje. <br/><br/>Pasirinkite rodymui navigacijos kortelę pažymint <b>Navigacijos kortelėb</b>.<br/><br/>Pasirinkite modulio tipą, kurį norėtumėte sukurti. <br/><br/>Pasirinkite šablono tipą. Kiekvienas šablonas talpina specifinį laukų rinkinį, taip pat kaip apibūdinti išdėstymai, naudojimui kaip bazę jūsų moduliui. <br/><br/>Paspauskite <b>Išsaugoti</b> tam, kad sukurtumėte modulį.',
        'modify'=>'Jūs galite pakeisti ,odulio savybes arba pritaikyti <b>Laukus</b>, <b>Ryšius</b> ir <b>Išdėstymus</b> susijusius su moduliu.',
        'importable'=>'Tikrinama  <b>Importuojamumas</b>, pažymėjimas įgalins importą šiam moduliui.<br><br>Nuoroda importavimo vedlio atsiras gretų kelių modulio panelėje. Importavimo vedlys palengvina duomenų importavimą iš išorinių šaltinių į pasirinktą modulį.',
        'team_security'=>'Tikrinama  <b>Komandų saugumas</b> pažymėjimas įgalins komandų saugumą šiam moduliui.  <br/><br/>Jeigu komandų saugumas yra įjungtas, tai komandų pasirinkimo laukas atsiras viduje įrašų',
        'reportable'=>'Pažymint šį lauką, šiam moduliui bus leista vykdyti ataskaitas.',
        'assignable'=>'Pažymint šį lauką, įrašui bus leista būti priskirtam pasirinktam vartotojui šiame modulyje.',
        'has_tab'=>'Pažymint <b>Navigacijos kortelę</b> pateiks navigacijos kortelę moduliui.',
        'acl'=>'Pažymint šį lauką įgalins priėjimo kontrolę šiam moduliui, įskaitant laukų lygio saugumą.',
        'studio'=>'Pažymint šį lauką, administratoriams bus leista pritaikyti modulį naudojantis Studio.',
        'audit'=>'Pažymint šį lauką, bus leista daryti auditą šiam moduliui. Pakeitimai atitinkamiems laukams bus įrašyti, todėl administratorius galės pasižiūrėti pakeitimų istoriją.',
        'viewfieldsbtn'=>'Paspauskite <b>Rodyti laukus</b> tam, kad pamatytumėte laukus asocijuotus su moduliu ir galėtumėte sukurti ir redaguoti pasirinktus laukus.',
        'viewrelsbtn'=>'Paspauskite <b>Rodyti ryšius</b>, kad pamatytumėte ryšius asocijuotus su šiuo moduliu ir galėtumėte sukurti naujus ryšius.',
        'viewlayoutsbtn'=>'Paspauskite ant Žiūrėti išdėstymus, jei norite koreguoti laukų išdėstymus modulio formose.',
        'viewmobilelayoutsbtn' => 'Click <b>View Mobile Layouts</b> to view the mobile layouts for the module and to customize the field arrangement within the layouts.',
        'duplicatebtn'=>'Paspauskite <b>Dublikuoti</b> tam, kad nukopijuotumėte esamo modulio savybes į naują modulį ir parodyti naują modulį. <br/><br/>Naujam moduliui bus sukurtas automatiškai naujas pavadinimas pridedant skaičių prie modulio pavadinimo galo.',
        'deletebtn'=>'Paspauskite <b>Ištrinti</b> tam, kad ištrintumėte šį modulį.',
        'name'=>'Tai yra esamo modulio<b>Pavadinimas</b>.<br/><br/>Pavadinimas susideda iš raidžių ir skaitmenų ir turi prasidėti raidėmis, ir neturėti tarpų. (Pavyzdys: HR_Management)',
        'label'=>'Tai yra <b>Etiketė</b>, kuri pasirodys modulio navigacijos kortelėje.',
        'savebtn'=>'Paspauskite <b>Išsaugoti</b> tam, kad išsaugotumėte visus įvestus duomenis susijusius su šiuo moduliu.',
        'type_basic'=>'<b>Bazinis</b> šablono tipas teikia bazinius laukus tokius kaip vardas, atsakingas, komanda, sukūrimo data ir aprašymo laukais.',
        'type_company'=>'<b>Įmonės</b> šablono tipas teikia organizacijos specifinius laukus tokius kaip Įmonė, Vardas, Pramonė ir Sąskaitų siuntimo adresas.<br/><br/>Naudoti šį šabloną modulių sukūrimui, kurie yra panašūs standartiniam Kliento moduliui.',
        'type_issue'=>'<b>Svarstomų klausimų</b> šablono tipas teikia atvejų ir klaidų specifikavimo laukus tokius kaip Skaičiai, Statusas, Svarbumas ir Aprašymas.<br/><br/>Naudoti šį šabloną modulių sukūrimui, kurie yra panašūs standartiniams aptarnavimų ir klaidų moduliams.',
        'type_person'=>'<b>Asmuens</b> šablono tipas pateikia individualius-specifinius laukus tokius kaip Sveikinimas, Pavadinimas, Vardas, Adresas ir Telefono numeris.<br/><br/>Naudoti šį šabloną modulių sukūrimui, kurie yra panašūs į standartinius Kontaktų ir Potencialių kontaktų modulius.',
        'type_sale'=>'Pardavimo šablonas turi su pardavimais susijusius laukus, kaip: pritraukimo metodas, pardavimo etapas, tikimybė. Panaudokite šį šabloną sukurti naujus modulius panašius į standartinį pardavimų modulį.',
        'type_file'=>'<b>Failo</b> šablonas pateikia dokumentų specifinius laukus tokius kaip Vardas, Dokumento tipas, Paskelbti duomenis.<br><br>Naudoti šį šabloną modulių sukūrimui, kurie yra panašūs į standartinį Dokumentų modulį.',

    ),
    'dropdowns'=>array(
        'default' => 'Visi <b>Iššokantys sąrašai programoms pateikti čia.<br><br>Iššokantys sąrašai gali būti naudojami bet kokiame modulyje.<br><br>Norint atlikti pakeitimus iššokančiam sąrašui, paspauskite ant jo pavadinimo.<br><br>Paspauskite <b>Pridėti iššokantį sąrašą</b> norint sukurti naują iššokantį sąrašą.',
        'editdropdown'=>'Iššokančius sąrašus  gali būti naudojami standartiniams arba pasirinktiems iššokančio sąrašo laukams bet kokiame modulyje.<br><br>Pateikite <b>pavadinimą</b> iššokančiam sąrašui.<br><br>Jeigu bet koks kalbos paketas yra instaliuotas programoje, jūs galite pasirinkite <b>Kalba</b> ir ją naudoti sąrašų elementams.<br><br><b>Elemento pavadinimo</b> lauke, nurodykite pavadinimą pasirinkimui iššokančiame sąraše. Šis pavadinimas nepasirodys iššokančiame sąraše, kuris yra nematomas vartotojams.<br><br>  <b>Vaizdavimo etiketės</b> lauke, nurodykite etiketės pavadinimą, kuris bus matomas vartotojams.<br><br>Nurodžius elemento pavadinimą ir rodymo etiketę, paspauskite <b>Pridėti</b>, kad pridėtumėte elementą į iššokantį sąrašą. <br><br>Įrašyti elementus į sąrašą, tempkite ir meskite juos į reikiamą vietą.<br><br>Norint redaguoti rodomas etiketes, paspauskite  <b>Redaguoti ikoną</b>, ir įveskite nauję etiketę. Norint ištrynti elementą iš iššokančio sąrašo, paspauskite  <b>Ištrinti ikoną</b>.<br><br>Panaikinti pakeitimus padarytus rodomai etiketei, paspauskite <b>Anuliuoti</b>.  Atstatyti pakeitimus, paspauskite <b>Atstatyti</b>.<br><br>Paspauskite <b>Išsaugoti</b> išsaugoti iššokantį sąrašą.',

    ),
    'subPanelEditor'=>array(
        'modify'	=> 'All of the fields that can be displayed in the <b>Subpanel</b> appear here.<br><br>The <b>Default</b> column contains the fields that are displayed in the Subpanel.<br/><br/>The <b>Hidden</b> column contains fields that can be added to the Default column.'
    . '<br/><br/><!--not_in_theme!--><img src="themes/default/images/SugarLogic/icon_dependent.png"/>Indicates a Dependent field that may or may not be visible based on the value of a formula.<br/><!--not_in_theme!--><img src="themes/default/images/SugarLogic/icon_calculated.png" /> Indicates a Calculated field whose value will be automatically determined based on a formula.'
    ,
        'savebtn'	=> 'Paspauskite <b>Išsaugoti ir išdėstyti</b> norint išsaugoti pakeitimus, kuriuos padarėte ir padaryti juos aktyvius modulyje.',
        'historyBtn'=> 'Paspauskite <b>Rodyti istorija</b> peržiūrėti ir atstatyti anksčiau išsaugotus istorijos išdėstymus.',
        'historyRestoreDefaultLayout'=> 'Click <b>Restore Default Layout</b> to restore a view to its original layout.',
        'Hidden' 	=> '<b>Paslėpti</b> laukai neatsirado subpanelyje.',
        'Default'	=> '<b>Numatyti</b> laukai atsirado subpanelyje.',

    ),
    'listViewEditor'=>array(
        'modify'	=> 'Visi laukai, kurie gali būti rodomi <b>ListView</b>, pateikiami čia.<br><br>Stulpelyje <b>Default</b> yra laukai, kurie pagal numatytuosius parametrus rodomi „ListView“.<br/><br/>Stulpelyje <b>Available</b> yra laukai, kuriuos naudotojas gali rinktis ieškoje ir kurti savo pasirinktinį „ListView“. <br/><br/>Stulpelyje <b>Hidden</b> yra laukai, kuriuos galima įtraukti į stulpelius „Default“ ir „Available“.'
    . '<br/><br/><!--not_in_theme!--><img src="themes/default/images/SugarLogic/icon_dependent.png"/>Indicates a Dependent field that may or may not be visible based on the value of a formula.<br/><!--not_in_theme!--><img src="themes/default/images/SugarLogic/icon_calculated.png" /> Indicates a Calculated field whose value will be automatically determined based on a formula.'
    ,
        'savebtn'	=> 'Paspauskite <b>Išsaugoti ir išdėstyti</b> norint išsaugoti pakeitimus, kuriuos padarėte ir padaryti juos aktyvius modulyje.',
        'historyBtn'=> 'Paspauskite <b>Rodyti istorija</b> peržiūrėti ir atstatyti anksčiau išsaugotus istorijos išdėstymus.',
        'historyRestoreDefaultLayout'=> 'Click <b>Restore Default Layout</b> to restore a view to its original layout.<br><br><b>Restore Default Layout</b> only restores the field placement within the original layout. To change field labels, click the Edit icon next to each field.',
        'Hidden' 	=> '<b>Paslėpti</b> laukai dabar negalimi vartotojui pamatyti esančius ListViews.',
        'Available' => '<b>Galimi</b> laukai nerodomi pagal numatymą, bet gali vartotojas pridėti prie ListViews.',
        'Default'	=> '<b>Numatyti</b> laukai yra parodyti ListViews, kurie nebuvo paliesti vartotojo.'
    ),
    'popupListViewEditor'=>array(
        'modify'	=> 'All of the fields that can be displayed in the <b>ListView</b> appear here.<br><br>The <b>Default</b> column contains the fields that are displayed in the ListView by default.<br/><br/>The <b>Hidden</b> column contains fields that can be added to the Default or Available column.'
    . '<br/><br/><!--not_in_theme!--><img src="themes/default/images/SugarLogic/icon_dependent.png"/>Indicates a Dependent field that may or may not be visible based on the value of a formula.<br/><!--not_in_theme!--><img src="themes/default/images/SugarLogic/icon_calculated.png" /> Indicates a Calculated field whose value will be automatically determined based on a formula.'
    ,
        'savebtn'	=> 'Paspauskite <b>Išsaugoti ir išdėstyti</b> norint išsaugoti pakeitimus, kuriuos padarėte ir padaryti juos aktyvius modulyje.',
        'historyBtn'=> 'Paspauskite <b>Rodyti istorija</b> peržiūrėti ir atstatyti anksčiau išsaugotus istorijos išdėstymus.',
        'historyRestoreDefaultLayout'=> 'Click <b>Restore Default Layout</b> to restore a view to its original layout.<br><br><b>Restore Default Layout</b> only restores the field placement within the original layout. To change field labels, click the Edit icon next to each field.',
        'Hidden' 	=> '<b>Paslėpti</b> laukai dabar negalimi vartotojui pamatyti esančius ListViews.',
        'Default'	=> '<b>Numatyti</b> laukai yra parodyti ListViews, kurie nebuvo paliesti vartotojo.'
    ),
    'searchViewEditor'=>array(
        'modify'	=> 'All of the fields that can be displayed in the <b>Search</b> form appear here.<br><br>The <b>Default</b> column contains the fields that will be displayed in the Search form.<br/><br/>The <b>Hidden</b> column contains fields available for you as an admin to add to the Search form.'
    . '<br/><br/><!--not_in_theme!--><img src="themes/default/images/SugarLogic/icon_dependent.png"/>Indicates a Dependent field that may or may not be visible based on the value of a formula.<br/><!--not_in_theme!--><img src="themes/default/images/SugarLogic/icon_calculated.png" /> Indicates a Calculated field whose value will be automatically determined based on a formula.'
    . '<br/><br/>This configuration applies to popup search layout in legacy modules only.',
        'savebtn'	=> 'Spaudžiant <b>saugoti ir išdėstyti</b> išsaugos visus pakeitimus ir padarys juos aktyvius',
        'Hidden' 	=> '<b>Paslėpti</b> laukai nematomi paieškoje.',
        'historyBtn'=> 'Paspauskite <b>Rodyti istorija</b> peržiūrėti ir atstatyti anksčiau išsaugotus istorijos išdėstymus.',
        'historyRestoreDefaultLayout'=> 'Click <b>Restore Default Layout</b> to restore a view to its original layout.<br><br><b>Restore Default Layout</b> only restores the field placement within the original layout. To change field labels, click the Edit icon next to each field.',
        'Default'	=> '<b>Numatyti</b> laukai rodomi paieškoje.'
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
        'saveBtn'	=> 'Paspauskite <b>Išsaugoti</b> norint išsaugoti pakeitimus, kuriuos atlikote išdėstymui nuo paskutinio išsaugojimo.<br><br>Pakeitimai nebus rodomi modulyje, kol neišsaugojote išdėstymo pakeitimų.',
        'historyBtn'=> 'Paspauskite <b>Rodyti istorija</b> peržiūrėti ir atstatyti anksčiau išsaugotus istorijos išdėstymus.',
        'historyRestoreDefaultLayout'=> 'Click <b>Restore Default Layout</b> to restore a view to its original layout.<br><br><b>Restore Default Layout</b> only restores the field placement within the original layout. To change field labels, click the Edit icon next to each field.',
        'publishBtn'=> 'Paspauskite <b>Išsaugoti ir išdėstyti</b> tam kad, išsaugotumėte visus pakeitimus, kuriuos padarėte išdėstymui nuo paskutinio išsaugojimo karto ir padaryti pakeitimus aktyvius modulyje.<br><br>Išdėstymai bus nedelsiant parodyti modulyje.',
        'toolbox'	=> '<b>Įrankių dėžė</b> talpina  <b>Šiukšliadėžę</b>, papildomi išdėstymo elementai ir rinkinys kintamųjų laukų skirtų pridėti prie išdėstymo.<br/><br/>Išdėstymo elementai ir laukai įrankių dėžėje gali būti nutraukti ir numesti iš išdėstymo į įrankių dėžę.<br><br>Išdėstymo elementai yra <b>panelės</b> ir <b>eilutės</b>. Pridedant naują eilutę arba panelį į išdėstymą, bus pateikta papildoma vieta išdėstyme laukams.<br/><br/>Tempkite ir meskite bet kokį lauką į įrankių dėžę arba išdėstymą ant užimto lauko pozicijos, norint ištrinti du laukus.<br/><br/> <b>Užpildomas</b> laukas sukuria tuščią erdvę išdėstyme, kur jis yra įdėtas.',
        'panels'	=> '<b>Išdėstymo</b> plotas pateikia vaizdą kaip išdėstymas atrodys modulyje, kai bus atlikti pakeitimai išdėstymui.<br/><br/>Jūs galite pertvarkyti laukus ir panelius tempiant ir metant į pasirinktą vietą.<br/><br/>Išmeskite elementus tempiant ir metant į <b>Šiukšliadėžę</b> įrankių dėžėje, arba pridėkite naujus elementus ir laukus tempiant ir metant iš <b>Įrankių dėžės</b>s į išdėstymo pasirinktą vietą.',
        'delete'	=> 'Norint išmesti elementus iš išdėstymo, juos reikia tempti ir mesti čia',
        'property'	=> 'Redaguoti rodomą etiketę šiam laukui. <br/><b>Kortelė Užsakymas</b> kontroliuoja kokia tavrka kortelių raktai persijungia tarp laukų.',
    ),
    'fieldsEditor'=>array(
        'default'	=> 'Čia yra išvardinti visi modulio laukai. Nestandartiniai laukai yra pateikti virš standartinių laukų.',
        'mbDefault'=>'<b>Laukai</b>, kurie yra galimi moduliui, yra pateikti čia pagal lauko pavadinimą<br><br>Norint pritaikyti etiketę šablono lauko, paspauskite  lauko pavadinimą.<br><br>Sukurti naują lauką, paspauskite <b>Pridėti lauką</b>. Etiketės savybės gali būti redaguojamos paspaudus lauko pavadinimą.<br><br>Po to kai modulis yra padėtas, naujų laukų kūrimui Module Builder yra laikomi kaip standartiniai laukai išdėstyti modulyje Studio.',
        'addField'	=> 'Pasirinkite a <b>Duomenų tipą</b> naujiems laukams. Tipą pasirenkate pagal tai, kokie simboliai bus vedami į lauką. Pavyzdžiui, tik sveikieji skaičiai gali būti įvesti jeigu lauko tipas skaičius.<br><br> Nurodykite a <b>pavadinimą</b> laukui.  Vardas turi būt iiš raidžių ir skaičių ir be tarpų. Pabraukimai leidžiami.<br><br> <b>vaizdavimo etiketė</b> yra etiketė, kuri matoma modulio išdėstyme.  <b>Sistemos etiketė</b>  naudojama nurodyti lauką kodo rėžime.<br><br> Priklausomai nuo duomenų tipo parinkto laukui, kai kurios arba visos savybės gali būti nustatytos laukui:<br><br> <b>pagalbos tekstas</b> pasirodo laikinai kol vartotojas užeina virš lauko.<br><br> <b>Komentarų tekstas</b> matomas tik per Studio &/arba Module Builder, ir gali būti naudojamas aprašyti lauką administratoriams.<br><br> <b>Numatyta reikšmė</b> pasirodys lauke.  Vartotojai gali įvesti naują reikšmę į lauką arba naudoti numatytas reikšmes.<br><br> Pasirinkite  <b>Mass Atnaujinti</b> checkbox in order to be able to Naudoti  Mass Atnaujinti feature for  laukas.<br><br>The <b>Max Size</b> reikšmė determines  maximum number of characters that galite be entered in  laukas.<br><br> Pasirinkite  <b>Reikiamą lauką</b> pažymėkite ar laukas yra privalomas. Reikšmė turi būti nurodyta laukui tam, kad būtų galimaišsaugoti įrašą.<br><br> Pasirinkite  <b>atsakomą</b> pasirinkimą tam, kad leistų naudoti lauką filtrams ir rodyti duomenims ataskaitose.<br><br> Pasirinkite  <b>Auditas</b> pasirinkimą tam, kad būtų galima sekti laukų pasikeitimus esančius Change Log faile.<br><br> Papildomos savybės gali būti nustatytos atitinkamiems duomenų tipams.',
        'editField' => '<b>Rodoma etiketė</b> Sugar lauko gali būti pritaikyta. Kitos lauko savybės gali būti ir nepritaikytos.<br><br>Paspauskite <b>Kopijuoti</b>, norint sukurti naują lauką su tomis pačiomis savybėmis.',
        'mbeditField' => '<b>Rodyti etiketę</b> lauko šablono, kuris gali būti pritaikytas. Kito lauko savybės gali būti nepritaikytos.<br><br>Paspauskite <b>kopijuoti</b>, norint sukurti naują lauką su tokiomis pačiomis savybėmis.<br><br>Norint išmesti lauko šabloną, kad jis nepasirodytų modulyje, išmeskite lauką iš <b>Išdėstymų</b>.'

    ),
    'exportcustom'=>array(
        'exportHelp'=>'Eksportuoti pritaikymus padarytus su Studio, sukuriant paketus, kurie gali būti išsiųsti į kitą Sugar vietą per  <b>Module Loader</b>.<br><br>  Pirmiausia, nurodykite <b>Paketo vardą</b>.  Jūs galite nurodyti <b>Autorių</b> ir <b>Aprašymą</b> ir visą kitą informaciją paketui. <br><br>Pasirinkite  modulį(-ius) kurie talpina pritaikymus ir juos norite eksportuoti. Tik moduliai turintys pritaikymus bus matomi jums.<br><br>Tada paspauskite <b>Exportuoti</b>, norint sukurti .zip failą paketui talpinančiam pritaikymus.',
        'exportCustomBtn'=>'Paspauskite <b>Exportuoti</b> norint sukurti .zip failą paketui talpinančiam pritaikymus.',
        'name'=>'Tai yra paketo <b>Pavadinimas</b>. Šis pavadinimas bus rodomas instaliavimo metu.',
        'author'=>'Tai yra <b>Autorius</b>, kuris sukūrė paketa ir bus rodomas instaliavimo metu Autorius gali būti individualus asmuo arba įmonė.',
        'description'=>'Tai yra <b>Aprašymas</b> paketo, kuris rodomas instaliavimo metu.',
    ),
    'studioWizard'=>array(
        'mainHelp' 	=> '<b>Vykdytojo įrankių</b> vieta. <br/><br/>Naudoti įrankius modulių ir laukų valdymui ir sukūrimui.',
        'studioBtn'	=> 'Naudoti <b>Studija</b> modulių pritaikymui.',
        'mbBtn'		=> 'Naudoti <b>Modulio kūrėjas</b> naujų modulių sukūrimui.',
        'sugarPortalBtn' => 'Naudoti <b>Sugar portalo redagaktorius</b> Sugar portalo valdymui ir pritaikymui.',
        'dropDownEditorBtn' => 'Naudoti <b>Iššokantį meniu redaguotoją</b> norint pridėti ir redaguoti bendrus iššokančius meniu jų laukams.',
        'appBtn' 	=> 'Programos rėžimas yra tai, kur jūs galite pritaikyti įvairias programų savybes, tokias kaip TPS ataskaitas rodomas pradžios puslapyje',
        'backBtn'	=> 'Grįžti į ankstesnį žingsnį.',
        'studioHelp'=> 'Naudoti <b>Studiją</b> kad nuordyti kokia ir kaip informacija vaizduojama moduliuose.',
        'studioBCHelp' => ' indicates the module is a backward compatible module',
        'moduleBtn'	=> 'Paspauskite redaguoti modulį.',
        'moduleHelp'=> 'Komponentai, kuriuos galite pritaikyti, yra čia.<br><br>Paspauskite ikoną, norint pasirinkti komponentą redagavimui.',
        'fieldsBtn'	=> 'Sukurti ir pritaikyti <b>Laukus</b> tam, kad talpintų informaciją moduluje.',
        'labelsBtn' => 'Redaguoti <b>Etiketes</b>, kurios vaizduoja laukus ir kitus pavadinimus modulyje.'	,
        'relationshipsBtn' => 'Pridėti naujus arba rodyti esamus modulio <b>Ryšius</b>.' ,
        'layoutsBtn'=> 'Pritaikyti modulių <b>Išdėstymą</b>.  Išdėstymai skiriasi moduliuose.<br><br>Jūs galite nuspręsti kaip laukai turi atrodyti ir organizuoti kiekviename išdėstyme.',
        'subpanelBtn'=> 'Nuspręskite, kurie laukai bus rodomi modulio <b>Subpanelyje</b>.',
        'portalBtn' =>'Pritaikyti <b>Išdėstymų</b> modulį, kuris bus rodomas <b>Sugar portale</b>.',
        'layoutsHelp'=> 'Modulių <b>Išdėstymus</b>, kurie gali būti pritaikyti yra čia.<br><br>Išdėstymai rodo laukus ir jų duomenis.<br><br>Paspauskite ikoną, norint redaguoti išdėstymą.',
        'subpanelHelp'=> '<b>Subpaneliai</b> modulyje gali būti pritaikyti čia.<br><br>Paspauskite ikoną, norint redaguoti modulį.',
        'newPackage'=>'Norėdami sukurti naują paketą paspauskite <b>Naujas paketas</b>.',
        'exportBtn' => 'Paspauskite <b>Eksportuoti pritaikymus</b>, norint sukurti ir parsisiųsti paketą su aptarnavimais sukurtą su Studio specifiniams moduliams.',
        'mbHelp'    => 'Norint sukurti paketus su pasirinktais moduliais ir standartiniais arba pasirinktais objektais, paspauskite <b>Module Builder</b>.',
        'viewBtnEditView' => 'Pritaikyti modulį(-ius) <b>EditView</b> išdėstymui.<br><br>EditView yra forma talpinanti įvedimo laukus, skirtus vartotojo duomenų įvedimui.',
        'viewBtnDetailView' => 'Pritaikyti modulį(-ius) <b>DetailView</b> išdėstymui.<br><br>DetailView atvaizduoja vartoto įvestus duomenis.',
        'viewBtnDashlet' => 'Pritaikyti modulį(-ius) <b>paneliams</b>, įskaitant  panelių ListView ir paiešką.<br><br> Panelius bus galima pridėti į puslapius Pradžios modulyje.',
        'viewBtnListView' => 'Pritaikyti modulį(-ius) <b>ListView</b> išdėstymui.<br><br>Paieškos rezultatai matomi ListView.',
        'searchBtn' => 'Pritaikyti modulį(-ius) <b>ieškoti</b> Išdėstymų.<br><br>Nuspręskite, kokie laukai gali būti naudojami įrašų filtravimui, kuriuos matome ListView faile.',
        'viewBtnQuickCreate' =>  'Pritaikyti modulį(-ius) <b>QuickCreate</b> išdėstymui.<br><br>QuickCreate forma matomas subpanelyje ir in  el. pašto modulyje.',

        'searchHelp'=> '<b>Paieškos</b> forma gali būti pritaikyta čia.<br><br>paieškos forma talpina laukus, skirtu įrašų filtravimui.<br><br>Paspauskite ikoną tam, kad pasirinkitumėte redaguoti paieškos išdėstymą.',
        'dashletHelp' =>'<b>Panelių</b> išdėstymai, kurie gali būti pritaikyti yra čia.<br><br>Panelį bus galima pridėti į puslapius Pradžios modulyje.',
        'DashletListViewBtn' =>'<b>Panelio ListView</b> vaizduoja įrašus ir panelio paieškos filtrus.',
        'DashletSearchViewBtn' =>'<b>Panelio paieškos</b> įrašų filtrai skirti panelio listview.',
        'popupHelp' =>'The <b>Popup</b> išdėstymo modifikavimas.<br>',
        'PopupListViewBtn' => '<b>Popup ListView</b> rodo įrašus pagal Popup search views.',
        'PopupSearchViewBtn' => '<b>Popup Search</b> atvaizduoja įrašus Popup listview.',
        'BasicSearchBtn' => 'Pritaikyti <b>Bazinės paieškos</b> formą, kuri matoma bazinės paieškos kortelėje.',
        'AdvancedSearchBtn' => 'Pritaikyti <b>Detalios paieškos</b> formos, kuri matoma detalios paieškos kortelėje.',
        'portalHelp' => 'Valdyti ir pritaikyti <b>Sugar portalą</b>.',
        'SPUploadCSS' => 'Išsiųsti <b>Stiliaus lapą</b> Sugar portalui.',
        'SPSync' => '<b>Sinchronizuoti</b> pritaikymus Sugar portalui.',
        'Layouts' => 'Pritaikyti Sugar portalo modulių <b>Išdėstymus</b>.',
        'portalLayoutHelp' => 'Moduliai Sugar portalo rodomi šiame plote.<br><br>Pasirinkite modulį redagavimui <b>Išdėstymuose</b>.',
        'relationshipsHelp' => 'Visi <b>Ryšiai</b>, kurie egzistuoja tarp vieno modulio ir kito yra čia.<br><br>Ryšio <b>Pavadinimas</b> yra sugeneruotas sistemos ryšiui.<br><br><b>Pagrindinis modulis</b> yra tas, kuris turi ryšius. Pavyzdžiui, visos Kliento modulio ryšių savybės yra sudėtos modulio Klientas duomenų bazės lentelėse.<br><br>Paspauskite eilutę ryšių lentelėje norint pažiūrėti savybes susietas su ryšiu.<br><br>Norėdami sukurti naują ryšį paspauskite <b>Pridėti ryšį</b>.<br><br>Ryšiai gali būti sukurti tarp bet kokių modulių.',
        'relationshipHelp'=>'<b>Ryšiai</b> gali būti sukurti tarp pagrindinio modulio ir bet kokio kito modulio.<br><br> Ryšiai vizualiai išreikšti naudojant subpanelius ir susijusius laukus modulio įrašuose.<br><br> Jeigu ryšys yra tarp dviejų modulių, bet koks naujas sukurtas ryšys tarp jų nebus vizualiai išreikštas.<br><br> Pasirinkite vieną iš šių ryšių<b>Types</b>moduliui:<br><br> <b>Vienas-su-Vienu</b> - Abu modulių&#39; įrašai talpins susijusius laukus.<br><br> <b>Vienas-su-daug</b> - Pirminio modulio įrašas talpins subpanelę ir  susieto modulio įrašas talpins susijusį lauką.<br><br> <b>Daug-su-Daug</b> - Abiejų modulių įrašai rodys subpaneles.<br><br> Pasirinkite  <b>Sisijusį modulį</b> ryšio sukūrimui. <br><br> Jei ryšio tipas įtraukia subpanelius, pasirinkite  subpanelio rodymą atitinkamiems moduliams.<br><br> Paspauskite <b>Išsaugoti</b> tam, kad sukurtumėte ryšį. Kai  ryšys sukurtas, jis negali būti redaguojamas arba ištrintas.',
        'convertLeadHelp' => "Čia Jūs galite pridėti modulius konvertavimo išdėstymo ekranui ir modifikuoti esamus.<br />		Modulius galite sukeisti vietomis tempdami eilutę.<br/><br/><br />		<b>Modulis:</b> Modulio pavadinimas.<br/><br/><br />		<b>Privaloma:</b> Privalomi moduliai turi būti sukurti arba pasirinkti, jei norite atlikti potencialaus kontakto kovertacijas.<br/><br/><br />		<b>Duomenų kopijavimas:</b> Jei pažymėta, laukai iš potencialaus kontakto bus nukopijuoti į laukus su tuo pačiu pavadinimu naujai sukurtuose įrašuose.<br/><br/><br />		<b>Pasirinkimo leidimas:</b> Modulis su susietu lauku Kontaktuose gali būti pasirinktas, o ne sukurtas.<br/><br/><br />		<b>Redaguoti:</b> Modifikuoti šį modulį konvertavimo išdėstymui.<br/><br/><br />		<b>Ištrinti:</b> Šalinti šį modulį iš konvertavimo išdėstymo.<br/><br/>",
        'editDropDownBtn' => 'Redaguoti bendrą iššokantį sąrašą',
        'addDropDownBtn' => 'Pridėti naują bendrą sąrašą',
    ),
    'fieldsHelp'=>array(
        'default'=>'<b>Laukai</b> modulyje yra pateikti pagal lauko pavadinimą.<br><br>Modulio šablonas turi apspręstą laukų rinkinį.<br><br>Norint sukurti naują lauką, paspauskite <b>Pridėti lauką</b>.<br><br>Norint redaguoti lauką, paspauskite  <b>Lauko pavadinimą</b>.<br/><br/>Po to kai modulis yra išdėstytas, sukurkite naujus laukus į Module Builder kartu su šablono laukais, kaip standartiniai laukai esantys Studio.',
    ),
    'relationshipsHelp'=>array(
        'default'=>'The <b>Relationships</b> that have been created between the module and other modules appear here.<br><br>The relationship <b>Name</b> is the system-generated name for the relationship.<br><br>The <b>Primary Module</b> is the module that owns the relationships. The relationship properties are stored in the database tables belonging to the primary module.<br><br>The <b>Type</b> is the type of relationship exists between the Primary module and the <b>Related Module</b>.<br><br>Click a column title to sort by the column.<br><br>Click a row in the relationship table to view and edit the properties associated with the relationship.<br><br>Click <b>Add Relationship</b> to create a new relationship.',
        'addrelbtn'=>'ieškoti pagalbos kaip pridėti ryšį..',
        'addRelationship'=>'<b>Ryšiai</b> gali būti sukurti tarp pagrindinio modulio ir bet kokio kito modulio.<br><br> Ryšiai vizualiai išreikšti naudojant subpanelius ir susijusius laukus modulio įrašuose.Pasirinkite vieną iš šių ryšių<b>Types</b>moduliui:<br><br> <b>Vienas-su-Vienu</b> - Abu modulių&#39; įrašai talpins susijusius laukus.<br><br> <b>Vienas-su-daug</b> - Pirminio modulio įrašas talpins subpanelę ir  susieto modulio įrašas talpins susijusį lauką.<br><br> <b>Daug-su-Daug</b> - Abiejų modulių įrašai rodys subpaneles.<br><br> Pasirinkite  <b>Sisijusį modulį</b> ryšio sukūrimui. <br><br> Jei ryšio tipas įtraukia subpanelius, pasirinkite  subpanelio rodymą atitinkamiems moduliams.<br><br> Paspauskite <b>Išsaugoti</b> tam, kad sukurtumėte ryšį.',
    ),
    'labelsHelp'=>array(
        'default'=> 'Modulio laukų pavadinimai gali būti keičiami.<br><br>Norėdami redaguoti pavadinimą paspauskite ant lauko, įveskite naują pavadinimą ir paspauskite <b>Saugoti</b>.<br>Jei yra įdiegtos kelios kalbos, galite pasirinkti kalbą, kuriai bus įrašytas šis pavadinimas.',
        'saveBtn'=>'Paspauskite <b>Išsaugoti</b> tam, kad išsaugotumėte visus pakeitimus.',
        'publishBtn'=>'Paspauskite <b>Išsaugoti ir išdėstyti</b>tam, kad išsaugoti visus pakeitimus ir padaryti juos aktyvius.',
    ),
    'portalSync'=>array(
        'default' => 'Įveskite  <b>Sugar portalo URL</b>, ir paspauskite <b>Eiti</b>.<br><br>Įveskite galiojantį Sugar vartotojo vardą ir slaptažodį, ir paspauskite <b>Pradėti sinchronizaciją</b>.<br><br>Pritaikymai padaryti Sugar portalo <b>Išdėstymams</b>, su  <b>Stiliaus lapais</b>, bus nusiųsti į specifinę portalo vietą, jeigu jie buvo išsiųsti.',
    ),
    'portalConfig'=>array(
           'default' => '',
       ),
    'portalStyle'=>array(
        'default' => 'Jūs galite pritaikyti Sugar portalo išvaizdą pasinaudojant stiliaus lapais.<br><br>Pasirinkite <b>Stiliaus lapą</b> išsiuntimui.<br><br>Stiliaus lapas bus realizuotas Sugar portale litą sykį, kai bus atlikta sinchronizacija.',
    ),
),

'assistantHelp'=>array(
    'package'=>array(
            //custom begin
            'nopackages'=>'Norint pradėti naują projektą, jūs turite paspausti <b>Naujas paketas</b> tam, kad sukurtumėte naują paketą vartotojo moduliams talpinti. <br/><br/>Kiekvienas paketas gali talpinti vieną arba kelis modulius.<br/><br/>Pavyzdžiui, jūs galite norėti sukurti paketą talpinantį vieną  pritaikomą modulį, kuris yra susijęs su standartiniu Kliento moduliu. Arbajūs galite norėti sukurti paketą talpinantį kelis modulius, kurie veikia kartu kaip projektas ir vienas su kitu susiję.',
            'somepackages'=>'<b>Paketas</b> veikia kaip konteineris pritaikytiems moduliams, esantiems projekto dalimi. Paketas gali talpinti vieną ar daugiau pritaikytų <b>modulių</b>, kurie gali būti susiję vienas su kitu.<br/><br/>Sukūrus paketą vartotojo projektui, jūs galite kūrti modulius paketui, arba galite grįžti į Module Builder kitu laiku, kad pabaigtumėte projektą.<br><br>Kada projektas yra baigtas, jūs galite <b>išdėstyti</b> peketus instaliavimui pritaikytiems moduliams.',
            'afterSave'=>'Vartotojo nauji paketai turėtų talpinti bent vieną modulį. Jūs galite sukurti vieną arba daugiau pritaikytų modulių paketui.<br/><br/>Paspauskite <b>Naujas modulis</b> pritaikyto modulio paketui sukūrimo.<br/><br/> Sukūrus bent vieną modulį, jūs galite paskelbti arba išdėstyti packetą, kad jis būtų prieinamas vartotojui ir/arba kitam vartotojams.<br/><br/> Išdėstyti paketą per vieną Sugar vartotojo žingsnį, paspauskite <b>Išdėstyti</b>.<br><br>Paspauskite <b>Paskelbti</b>, norint išsaugoti kaip .zip failą. Kai .zip failas yra išsaugotas vartotojo sistemoje, naudoti  <b>Module Loader</b> išsiuntimui ir instaliavimui paketo į vartotojo Sugar programą.  <br/><br/>Jūs galite distribute  file to Kitas USERs to upload ir install within their own Sugar instances.',
            'create'=>'<b>Paketas</b> veikia kaip konteineris pritaikytiems moduliams, esantiems projekto dalimi. Paketas gali talpinti vieną ar daugiau pritaikytų <b>modulių</b> kurie gali būti susiję vienas su kitu.<br/><br/>Sukūrus paketą vartotojo projektui, jūs galite kūrti modulius paketui, arba galite grįžti į Module Builder kitu laiku, kad pabaigtumėte projektą.',
            ),
    'main'=>array(
        'welcome'=>'Naudoti <b>Kūrėjo įrankius</b> sukūrimui ir valdymui standartinių ir pritaikytus modulius ir laukus. <br/><br/>Valdyti modulius programoje, paspauskite <b>Studio</b>. <br/><br/>TPritaikytų modulių sukūrimui, paspauskite <b>Module Builder</b>.',
        'studioWelcome'=>'Visi jau instaliuoti moduliai, įskaitant standartinį ir modulio-užkrovėjo objektus, pritaikoma naudojant Studio.'
    ),
    'module'=>array(
        'somemodules'=>"Nuo tada, kai esamas projektas talpina mažiausiai bent vieną modulį, jūs galite <b>Išdėstyti</b> modulius pakete in paketas viduje vartotojo Sugar sistemos arba <b>Paskelbti</b> apie paketo instaliavimą į Sugar arba pridėti naudojant <b>Module Loader</b>.<br/><br/>Norint instaliuoti paketą tiesiogiai į vartotojo Sugar vietą, paspauskite <b>Išdėstyti</b>.<br><br>.zip failo sukūrimui paketui, kuris gali būti užkrautas ir instaliuotas įesamą Sugar atvejį ir kitus atvejus naudojant <b>Module Loader</b>, paspauskite <b>Paskelbti</b>.<br/><br/> Jūs galite sukurti modulius paketui lygiais, ir paskelbti arba išdėstyti, kai esate tam pasiruošę. <br/><br/>paskelbus arba išdėsčius paketą, jūs galite atlikti pakeitimus paketo savybėms ir pritaikyti moduliui. Tada vėl vėl paskelbti arba išdėstyti  paketus, kad pritaikytumėte pakeitimus." ,
        'editView'=> 'Čia galite redaguoti esančius laukus. Jūs galite išmesti bet kokį esamą lauką arba pridėti galimus laukus, esančius kairėje panelėje.',
        'create'=>'Pasirenkant modulio <b>Tipą</b>, kurį jūs norite sukurti, žinokite laukų tipus kokius norite turėti modulyje. <br/><br/>Kiekvienas modulio šablonas talpina rinkinį laukų susijusių su modulio tipu aprašomu pavadinimu.<br/><br/><b>Pagrindai</b> - pateikia bazinius laukus, kurie yra standartiniuose moduliuose,tokiuose kaip Vardas, Atsakingas, Komanda, Sukūrimo Data ir Aprašymas.<br/><br/> <b>Įmonė</b> - pateikia organizacijos specifinius laukus, tokius kaip Įmonė, Vardas, Pramonė, Sąskaitų siuntimo adresas.  Naudoti šį šabloną modulių sukūrimui, kurie yra panašūs standartiniamd Klientas moduliui.<br/><br/> <b>Asmuo</b> - pateikia individualius specifinius laukus, tokius kaip Sveikinimas, Pavadinimas, Vardas, Adresas ir Telefono numeris.  Naudoti šį šabloną modulių sukūrimui, kurie yra panašūs į standartinį Kontaktų ir Potencialus kontaktas modulius.<br/><br/><b>Svarbūs dalykai</b> - Pateikia  case ir klaidų specifinius laukus, tokius kaip Numeris, Statusas, Svarbumas ir Aprašymas. Naudoti šį šabloną modulių sukūrimui, kurie yra panašūs į standartinius Cases ir Klaidų sekėjų modulius.<br/><br/>Pastaba: Sukūrus modulį, jūs galite redaguoti laukų etiketes pateikiamas šablone, taip pat sukurti, pridėti ir pritaikyti laukus modulio Išdėstymui.',
        'afterSave'=>'Pritaikyti modulį patenkinti vartotojo poreikius redaguojant ir sukuriant laukus, nustatant ryšius su kitais moduliais ir surūšiuojant laukus išdėstyme.<br/><br/>Norint rodyti šablono laukus ir valdyti pritaikytus laukus modulyje, paspauskite <b>Rodyti laukus</b>.<br/><br/>Sukurti ir valdyti ryšius tarp modulio ir kitų modulių, kai moduliai yra programoje arba kiti moduliai pritaikyti tame pačiame pakete, paspauskite <b>Rodyti ryšius</b>.<br/><br/>Redaguoti modulio išdėstymus, paspauskite <b>Rodyti išdėstymus</b>. Jūs galite pakeisti detalų rodymą, redaguoti rodymą ir sąrašą. <br/><br/> Norėdami sukurti modulį su tokiomis pačiomis savybėmis kaip esamas modulis, paspauskite <b>Dublikuoti</b>. Toliau galite pritaikyti naują modulį.',
        'viewfields'=>'Laukai jūsų modulyje gali būti pritaikyti pagal poreikius.<br/><br/>Jūs galite netrinti standartinių laukų, o išmesti juos iš atitinkamų išdėstymų puslapių. <br/><br/>Jūs galite redaguoti etiketes standartiniams laukams. Kitas savybės standartinių laukų neredaguojamos. Tačiau, jūs galite greitai sukurti naujus laukus, kurie turi panašias savybes paspaudžiant lauko pavadinamą ir tada paspausti <b>Klonuoti</b> į <b>Savybes</b> iš.  Įveskite bet kokias naujas savybes ir paspauskite <b>Išsaugoti</b>.<br/><br/>Jeigu jūs pritaikote naują modulį, tai kai modulis bus instaliuotas, tai ne visos laukų savybės bus redaguojamos. Nustatyti savybes standartiniams laukams ir pritaikyti laukus prieš paskelbiant ir instaliuojant paketą talpinantį pritaikytus modulius.',
        'viewrelationships'=>'Jūs galite sukurti daug-su-daug ryšį tarp esamų modulių irkitų modulių pakete ir/arba tarp instaliuotų modulių programoje.<br><br> Norint sukurti vienas-su-daug ir vienas-su-vienu  ryšius, sukurkite  <b>Susiejimą</b> ir <b>Lankstų susiejimą</b> laukus moduliams.',
        'viewlayouts'=>'You can control what fields are available for capturing data within the <b>Edit View</b>.  You can also control what data displays within the <b>Detail View</b>.  The views do not have to match. <br/><br/>The Quick Create form is displayed when the <b>Create</b> is clicked in a module subpanel. By default, the <b>Quick Create</b> form layout is the same as the default <b>Edit View</b> layout. You can customize the Quick Create form so that it contains less and/or different fields than the Edit View layout. <br><br>You can determine the module security using Layout customization along with <b>Role Management</b>.<br><br>',
        'existingModule' =>'Sukūrus ir pritaikius modulį, Jūs galite sukurti papildomus modulius arba grįžti į paketą <b>Paskelbti</b> arba <b>Išdėstyti</b> paketą.<br><br>Sukurti papildomus modulius, paspauskite <b>Dubliuoti</b>, norint sukurti modulį su tokiomis pačiomis savybėmis, kaip esamas modulis, eikite atgal į paketą ir paspauskite <b>Naujas modulis</b>.<br><br> Jeigu jūs esate pasiruošęs <b>Paskelbti</b> arba <b>Išdėstyti</b> paketą talpinantį šį modulį, eikite atgal į paketą tam, akd atliktumėte šaias funkcijas. Jūs galite paskelbti ir išdėstyti paketus talpinančius mažiausiai vieną modulį.',
        'labels'=> 'Etiketės standartinių laukų taip pat kaip ir pritaikyti laukai gali būti pakeisti. Pakeičiant lauko etiketę nepaveiks duomenų sukauptų laukuose.',
    ),
    'listViewEditor'=>array(
        'modify'	=> 'Kairėje pavaizduoti trys stulpeliai. "Numatytas" stulpelis talpina  laukus, kurie naudojami sąrašo rodymui pagal numatymą,  "Galimas" stulpelis talpina laukus, kur vartotojas gali pasirinkti naudojimui norint sukurti pritaikytą sąrašo rodymą ir  "Paslėptas" stulpelis talpina laukus, prieinamus jums, kaip administratoriui, norint pridėti į "Numatytas"  arba "Galimas" stulpelius.',
        'savebtn'	=> 'Paspaudžiant <b>Išsaugoti</b> išsaugos visus pakeitimus ir padarys juos aktyvius.',
        'Hidden' 	=> 'Paslėpti laukai yra laukai, kurie nėra prieinami vartotojui naudojimui sąrašų žiūrėjimui.',
        'Available' => 'Galimi laukai yra laukai, kurie nerodomi pagal numatymą, bet gali būti įjungti vartotojų.',
        'Default'	=> 'Numatyti laukai  yra rodomi vartotojams, kurie nesukūrė pritaikytų sąrašų rodymo nustatymų.'
    ),

    'searchViewEditor'=>array(
        'modify'	=> 'Kairėje pavaizduoti du stulpeliai. Stulpelis "Numatytas" talpina laukus, kurie bus rodomi paieškoje, ir "Paslėptas" stulpelis talpina laukus, galimus jums, kaip administratoriui, norint pridėti žiūrėjimui.',
        'savebtn'	=> 'Paspaudžiant <b>Išsaugoti ir išdėstyti</b> išsaugos visus pakeitimus ir padarys juos aktyvius.',
        'Hidden' 	=> 'Paslėpti laukai yra laukai, kurie nebus rodomi paieškoje.',
        'Default'	=> 'Numatyti laukai bus rodomi vartotojui paieškoje.'
    ),
    'layoutEditor'=>array(
        'default'	=> 'There are two columns displayed to the left. The right-hand column, labeled Current Layout or Layout Preview, is where you change the module layout. The left-hand column, entitled Toolbox, contains useful elements and tools for use when editing the layout. <br/><br/>If the layout area is titled Current Layout then you are working on a copy of the layout currently used by the module for display.<br/><br/>If it is titled Layout Preview then you are working on a copy created earlier by a click on the Save button, that might have already been changed from the version seen by users of this module.',
        'saveBtn'	=> 'Paspauskite <b>Išsaugoti</b> tam, kad išsaugotumėte visus pakeitimus. Vartotojams pakeitimai bus matomi, kai paspausite Saugoti ir išdėstyti mygtuką.',
        'publishBtn'=> 'Spauskite šį mygtuką, jei norite kad šie išdėstymai iš kart pasimatytų vartotojams.',
        'toolbox'	=> 'Įrankių dėžė talpina papildomus išdėstymo elementus. Kiekvienas iš jų gali būti pritaikytas išdėstymui koreguoti.',
        'panels'	=> '<b>Išdėstymo</b> plotas pateikia vaizdą kaip išdėstymas atrodys modulyje, kai bus atlikti pakeitimai išdėstymui.<br/><br/>Jūs galite pertvarkyti laukus ir panelius tempiant ir metant į pasirinktą vietą.<br/><br/>Išmeskite elementus tempiant ir metant į <b>Šiukšliadėžę</b> įrankių dėžėje, arba pridėkite naujus elementus ir laukus tempiant ir metant iš <b>Įrankių dėžės</b>s į išdėstymo pasirinktą vietą.'
    ),
    'dropdownEditor'=>array(
        'default'	=> 'There are two columns displayed to the left. The right-hand column, labeled Current Layout or Layout Preview, is where you change the module layout. The left-hand column, entitled Toolbox, contains useful elements and tools for use when editing the layout. <br/><br/>If the layout area is titled Current Layout then you are working on a copy of the layout currently used by the module for display.<br/><br/>If it is titled Layout Preview then you are working on a copy created earlier by a click on the Save button, that might have already been changed from the version seen by users of this module.',
        'dropdownaddbtn'=> 'Paspaudžiant šį mygtuką pridės naują elementą į iššokantį meniu.',

    ),
    'exportcustom'=>array(
        'exportHelp'=>'Pritaikymai atlikti Studio gali būti supakuoti ir padėti kitoje vietoje. <br><br>Nurodykite a <b>paketo pavadinimą</b>.  Jūs galite nurodyti <b>Autorių</b> ir <b>Aprašymą</b>, bei visą kitą paketo informaciją.<br><br>Pasirinkite  modulį(-ius), kurie turi pritaikymus eksportavimui. (Tik moduliai ,turintys pritaikymus, bus rodomi jums pasirenkant)<br><br>Paspauskite <b>Eksportuoti</b> tam, kad sukurtumėte .zip failą paketui turinčiam pritaikymus. .zip failas gali būti išsiųstas į kitą vietą per <b>Module Loader</b>.',
        'exportCustomBtn'=>'Paspauskite <b>Eksportuoti</b> tam, kad sukurtumėte .zip failą paketui turinčiam pritaikymus, kuriuos norite eksportuoti.',
        'name'=>'Paketo <b>Pavadinimas</b> bus rodomas Module Loader tada, kai paketas yra išsiųstas instaliacijai į Studio.',
        'author'=>'<b>Autoriaus</b> vardas yra to kas sukūrė visą paketą. Autorius gali būti individualus asmuo arba įmonė.<br><br>Autorius bus rodomas Module Loaderpo to, kai paketas bus išsiųstas instaliavimui į Studio.',
        'description'=>'Paketo <b>Aprašymas</b> bus rodomas Module Loader po to, kai paketas bus išsiųstas instaliacijai į Studio.',
    ),
    'studioWizard'=>array(
        'mainHelp' 	=> '<b>Kūrėjo įrankių</b1> vieta. <br/><br/>Naudoti  įrankius su šiuo plotu norint sukurti ir valdyti standartinius pritaikytus modulius ir laukus.',
        'studioBtn'	=> 'Naudoti <b>Studio</b> pritaikyti instaliuotus modulius pakeičiant laukų surikiavimą, pasirenkant kokie laukai yra galimi ir kokie yra galimi duomenų sukūrimui.',
        'mbBtn'		=> 'Naudoti <b>Modulio kūrėjas</b> naujų modulių sukūrimui.',
        'appBtn' 	=> 'Naudoti programos rėžimą pritaikyti įvairias savybes, tokias kaip daug TPS ataskaitų yra rodoma pradžios puslapyje',
        'backBtn'	=> 'Grįžti į ankstesnį žingsnį.',
        'studioHelp'=> 'Naudoti <b>Studio</b> pritaikyti instaliuotus modulius.',
        'moduleBtn'	=> 'Paspauskite redaguoti modulį.',
        'moduleHelp'=> 'Pasirinkite  modulio komponentą redagavimui',
        'fieldsBtn'	=> 'Redaguoti informaciją, kuri yra laikoma modulio <b>Laukuose</b>.<br/><br/>Jūs galite redaguoti ir sukurti pritaikomus laukus čia.',
        'layoutsBtn'=> 'Pritaikyti <b>Išdėstymus</b> Redagavimo, Detalaus, sąrašų ir paieškos rodymų.',
        'subpanelBtn'=> 'Redaguoti, kokią informacija rodoma šių modulių subpaneliuose.',
        'layoutsHelp'=> 'Pasirinkite redagavimui <b>Išdėstymą </b>.<br/<br/>Pakeisti išdėstymą, kuris talpina duomenų laukus, paspauskite <b>Redaguoti rodymą</b>.<br/><br/>Pakeisti išdėstymą, kuris vaizduoja duomenis įvestus į laukus Redaguoti rodymą, paspauskite <b>Detalus rodymas</b>.<br/><br/>Pakeisti stulpelius, kurie rodomi numatytame sąrašes, paspauskite <b>Rodyti sąrašą</b>.<br/><br/>Norint pakeisti bazinę ir detalią paiešką formos išdėstymus,paspauskite <b>Ieškoti</b>.',
        'subpanelHelp'=> 'Pasirinkite redagavimui <b>Subpanelį</b>.',
        'searchHelp' => 'Pasirinkite išdėstymo redagavimuia <b>Ieškoti</b>.',
        'labelsBtn'	=> 'Redaguokite rodytinas šio modulių reikšmių <b>etiketes</b>.',
        'newPackage'=>'Norėdami sukurti naują paketą paspauskite <b>Naujas paketas</b>.',
        'mbHelp'    => '<b>Module Builder.</b><br/><br/>Naudoti <b>Module Builder</b> paketų sukūrimui, talpinantiems pritaikytus modulius, paremtus standartiniais arba pritaikytais objektais. <br/><br/>Norėdami pradėti, paspauskite <b>Naujas paketas</b> naujo paketo sukūrimui arba pasirinkite redaguoti paketą.<br/><br/> <b>Paketas</b> veikia kai konteineris atitinkamiems moduliams ir kitiems, kurie yra projekto dalis. Paketas gali turėti vieną arba daugiau pitaikytų modulių, kurie gali būti susiję vienas su kitų programoje. <br/><br/>Pavyzdys: Jūs galite sukurti paketą, talpinantį vieną pritaikytą modulį, kuris yra susijęs su standartiniu Kliento moduliu arba galite sukurti paketą talpinantį kelis naujus modulius, kurie veikia kartu kaip projektas, bei yra susiję vienas su kitu ir kitais moduliais programoje.',
        'exportBtn' => 'Paspauskite <b>Eksportuoti pritaikymus</b> tam, kad sukurtumėte paketą talpinančius pritaikymus, padarytus su Studio specifiniams moduliams.',
    ),

),
//HOME
'LBL_HOME_EDIT_DROPDOWNS'=>'Iššokančio sąrašo redaktorius',

//ASSISTANT
'LBL_AS_SHOW' => 'Rodyti padėjėją ateityje.',
'LBL_AS_IGNORE' => 'Ignoruoti padėjėją ateityje.',
'LBL_AS_SAYS' => 'Padėjėjas sako:',

//STUDIO2
'LBL_MODULEBUILDER'=>'Modulio kūrėjas',
'LBL_STUDIO' => 'Studija',
'LBL_DROPDOWNEDITOR' => 'Iššokančio sąrašo redaktorius',
'LBL_EDIT_DROPDOWN'=>'Redaguoti iššokantį sąrašą',
'LBL_DEVELOPER_TOOLS' => 'Kūrėjo įrankiai',
'LBL_SUGARPORTAL' => 'Sugar portalo redaktorius',
'LBL_SYNCPORTAL' => 'Sinchronizuoti portalą',
'LBL_PACKAGE_LIST' => 'Paketų sąrašas',
'LBL_HOME' => 'Pradžia',
'LBL_NONE'=>'-Joks-',
'LBL_DEPLOYE_COMPLETE'=>'Išdėstymas baigtas',
'LBL_DEPLOY_FAILED'   =>'Klaida išdėstymo metu, Jūsų paketo nepavyko sėkmingai įdiegti.',
'LBL_ADD_FIELDS'=>'Pridėti nestandartinį lauką',
'LBL_AVAILABLE_SUBPANELS'=>'Matomi subpaneliai',
'LBL_ADVANCED'=>'Detalus',
'LBL_ADVANCED_SEARCH'=>'Detali paieška',
'LBL_BASIC'=>'Bazinis',
'LBL_BASIC_SEARCH'=>'Bazinė paieška',
'LBL_CURRENT_LAYOUT'=>'Išdėstymas',
'LBL_CURRENCY' => 'Valiuta',
'LBL_CUSTOM' => 'Nestandartinis',
'LBL_DASHLET'=>'Panelis',
'LBL_DASHLETLISTVIEW'=>'Panelio ListView',
'LBL_DASHLETSEARCH'=>'Panelio paieška',
'LBL_POPUP'=>'PopupView',
'LBL_POPUPLIST'=>'Popup sąrašas',
'LBL_POPUPLISTVIEW'=>'Popup sąrašas',
'LBL_POPUPSEARCH'=>'Popup paieška',
'LBL_DASHLETSEARCHVIEW'=>'Panelio paieška',
'LBL_DISPLAY_HTML'=>'Rodyti HTML kodą',
'LBL_DETAILVIEW'=>'DetailView',
'LBL_DROP_HERE' => '[Mesti čia]',
'LBL_EDIT'=>'Redaguoti',
'LBL_EDIT_LAYOUT'=>'Redaguoti Išdėstymą',
'LBL_EDIT_ROWS'=>'Redaguoti eiles',
'LBL_EDIT_COLUMNS'=>'Redaguoti stulpelius',
'LBL_EDIT_LABELS'=>'Redaguoti etiketes',
'LBL_EDIT_PORTAL'=>'Redaguoti portalą',
'LBL_EDIT_FIELDS'=>'Redaguoti laukus',
'LBL_EDITVIEW'=>'EditView',
'LBL_FILTER_SEARCH' => "Search",
'LBL_FILLER'=>'(Užpildas)',
'LBL_FIELDS'=>'Laukai',
'LBL_FAILED_TO_SAVE' => 'Nepavyko išsaugoti',
'LBL_FAILED_PUBLISHED' => 'Nepavyko paskelbti',
'LBL_HOMEPAGE_PREFIX' => 'Mano',
'LBL_LAYOUT_PREVIEW'=>'Išdėstymo peržiūra',
'LBL_LAYOUTS'=>'Išdėstymai',
'LBL_LISTVIEW'=>'Sąrašas',
'LBL_RECORDVIEW'=>'Record View',
'LBL_RECORDDASHLETVIEW'=>'Įrašų rodymo skydelis',
'LBL_PREVIEWVIEW'=>'Preview View',
'LBL_MODULE_TITLE' => 'Studija',
'LBL_NEW_PACKAGE' => 'Naujas paketas',
'LBL_NEW_PANEL'=>'Naujas panelis',
'LBL_NEW_ROW'=>'Naujos eilutės',
'LBL_PACKAGE_DELETED'=>'Paketas ištrintas',
'LBL_PUBLISHING' => 'Paskelbiama ...',
'LBL_PUBLISHED' => 'Paskelbtas',
'LBL_SELECT_FILE'=> 'Pasirinkite failą',
'LBL_SAVE_LAYOUT'=> 'Išsaugoti išdėstymą',
'LBL_SELECT_A_SUBPANEL' => 'Pasirinkite subpanelį',
'LBL_SELECT_SUBPANEL' => 'Pasirinkite subpanelį',
'LBL_SUBPANELS' => 'Subpaneliai',
'LBL_SUBPANEL' => 'Subpanelis',
'LBL_SUBPANEL_TITLE' => 'Pavadinimas:',
'LBL_SEARCH_FORMS' => 'Paieška',
'LBL_STAGING_AREA' => 'Staging Area (tempti ir mesti elementus čia)',
'LBL_SUGAR_FIELDS_STAGE' => 'Sugar Laukai (paspauskite elementus, norint pridėti į staging area)',
'LBL_SUGAR_BIN_STAGE' => 'Sugar Bin (paspauskite elementus, norint pridėti į staging area)',
'LBL_TOOLBOX' => 'Įrankių dėžė',
'LBL_VIEW_SUGAR_FIELDS' => 'Rodyti Sugar laukus',
'LBL_VIEW_SUGAR_BIN' => 'Rodyti Sugar Bin',
'LBL_QUICKCREATE' => 'Greitas sukūrimas',
'LBL_EDIT_DROPDOWNS' => 'Redaguoti bendrus iššokančius sąrašus',
'LBL_ADD_DROPDOWN' => 'Pridėti naują bendrą iššokantį sąrašą',
'LBL_BLANK' => '-Tuščia-',
'LBL_TAB_ORDER' => 'Kortelė užsakymas',
'LBL_TAB_PANELS' => 'Rodyti panelius kaip korteles',
'LBL_TAB_PANELS_HELP' => 'Rodyti kiekvieną panelį kaip kortelę',
'LBL_TABDEF_TYPE' => 'Atvaizdavimo tipas:',
'LBL_TABDEF_TYPE_HELP' => 'Nurodykite kaip ši sritis turi būti atvaizduota.',
'LBL_TABDEF_TYPE_OPTION_TAB' => 'Skiltis',
'LBL_TABDEF_TYPE_OPTION_PANEL' => 'Panelis',
'LBL_TABDEF_TYPE_OPTION_HELP' => 'Pasirinkite panelį, jeigu norite turėti atskirą sritį tame pačiame lange. Pasirinkite skiltį jeigu norite turėti sritį naujame lange.',
'LBL_TABDEF_COLLAPSE' => 'Susitraukiantis',
'LBL_TABDEF_COLLAPSE_HELP' => 'Skyrius bus sutrauktas, jei nurodyta kaip panelis.',
'LBL_DROPDOWN_TITLE_NAME' => 'Vardas',
'LBL_DROPDOWN_LANGUAGE' => 'Kalba',
'LBL_DROPDOWN_ITEMS' => 'Sąrašo elementai',
'LBL_DROPDOWN_ITEM_NAME' => 'Elemento vardas',
'LBL_DROPDOWN_ITEM_LABEL' => 'Rodyti etiketę',
'LBL_SYNC_TO_DETAILVIEW' => 'Sinchronizuoti į peržiūros rėžimą',
'LBL_SYNC_TO_DETAILVIEW_HELP' => 'Pasirinkite šį pasirinkimą norėdami perkelti (sinchronizuoti) redagavimo lango išdėstymą į detalaus lango išdėstymą.<br> Išdėstymas bus pakeistas paspaudus Išsaugoti arba Išsaugoti ir išdėstyti mygtukus. Po išsaugojimo detalaus lango rėžime pakeitimų atlikti nebus galima.',
'LBL_SYNC_TO_DETAILVIEW_NOTICE' => 'Detalaus lango išdėstymas susinchronizuotas su atitinkamu redagavimo lango išdėstymu.<br><br />Laukai ir jų išdėstymas detaliame lange atitinka redagavimo lango išdėstymą.<br><br />Pakeitimų detaliojo lango išdėstyme šiame puslapyje atlikti negalima. Padaryti pakeitimus arba atšaukti sinchronizavimą galima redagavimo lango išdėstymo puslapyje.',
'LBL_COPY_FROM' => 'Copy from',
'LBL_COPY_FROM_EDITVIEW' => 'Kopijuoti iš redagavimo rėžimo',
'LBL_DROPDOWN_BLANK_WARNING' => 'Elemento vardas ir Rodyti etiketę laukeliai turi būti užpildyti. Norėdami įterpti tuščią pasirinkimą paspauskite Pridėti palikdami tuščius abu laukelius.',
'LBL_DROPDOWN_KEY_EXISTS' => 'Key already exists in list',
'LBL_DROPDOWN_LIST_EMPTY' => 'The list must contain at least one enabled item',
'LBL_NO_SAVE_ACTION' => 'Could not find the save action for this view.',
'LBL_BADLY_FORMED_DOCUMENT' => 'Studio2:establishLocation: netinkamas dokumento formatas',
// @TODO: Remove this lang string and uncomment out the string below once studio
// supports removing combo fields if a member field is on the layout already.
'LBL_INDICATES_COMBO_FIELD' => '** Reiškia sudėtinį lauką. Sudėtinis laukas yra atskirų laukų rinkinys. Pvz., sudėtinį lauką „Address“ sudaro laukai „Street address“, „City“, „Zip Code“, „State“ ir „Country".<br><br>Norėdami pamatyti, kokie laukai sudaro sudėtinį lauką, jį dukart spustelėkite.',
'LBL_COMBO_FIELD_CONTAINS' => 'sudaro:',

'LBL_WIRELESSLAYOUTS'=>'Mobilios versijos išdėstymas',
'LBL_WIRELESSEDITVIEW'=>'Mobili redagavimo forma',
'LBL_WIRELESSDETAILVIEW'=>'Mobili peržiūros forma',
'LBL_WIRELESSLISTVIEW'=>'Mobili sąrašo forma',
'LBL_WIRELESSSEARCH'=>'Mobili paieškos forma',

'LBL_BTN_ADD_DEPENDENCY'=>'Įdėti priklausomybę',
'LBL_BTN_EDIT_FORMULA'=>'Redaguoti formulę',
'LBL_DEPENDENCY' => 'Priklausomybė',
'LBL_DEPENDANT' => 'Priklausomas',
'LBL_CALCULATED' => 'Apskaičiuota reikšmė',
'LBL_READ_ONLY' => 'Tik skaityti',
'LBL_FORMULA_BUILDER' => 'Formulės kūrėjas',
'LBL_FORMULA_INVALID' => 'Neteisinga formulė',
'LBL_FORMULA_TYPE' => 'Formulės tipas turi būti',
'LBL_NO_FIELDS' => 'Laukas nerastas',
'LBL_NO_FUNCS' => 'Funkcija nerasta',
'LBL_SEARCH_FUNCS' => 'Ieškoti funkcijos...',
'LBL_SEARCH_FIELDS' => 'Ieškoti laukų...',
'LBL_FORMULA' => 'Formulė',
'LBL_DYNAMIC_VALUES_CHECKBOX' => 'Priklausomas',
'LBL_DEPENDENT_DROPDOWN_HELP' => 'Nuvilkite parinktis iš galimų parinkčių išplečiamojo sąrašo kairėje į dešinėje esantį sąrašą, kad tas parinktis būtų galima rinktis pasirinkus pagrindinę parinktį. Jei pagrindinės parinkties sudėtinių elementų nėra, pasirinkus pagrindinę parinktį priklausantis išplečiamasis sąrašas nerodomas.',
'LBL_AVAILABLE_OPTIONS' => 'Galimi pasirinkimai',
'LBL_PARENT_DROPDOWN' => 'Tėvinis dropdown',
'LBL_VISIBILITY_EDITOR' => 'Matomumo redaktorius',
'LBL_ROLLUP' => 'Rollup',
'LBL_RELATED_FIELD' => 'Susijęs laukas',
'LBL_PORTAL_ROLE_DESC' => 'Prašome neištrinti šios rolės. Customer Self-Service Portal rolė yra sistemos sugeneruota rolė, kai buvo aktyvuotas Sugar portalas. Nustatykite šiai rolei teises prieiti prie klaidų, aptarnavimų ir žinių bazės modulio. Jeigu per klaidą ištrynėte šią rolę, Jums tereikia išjungti ir vėl atgal įjungti Sugar portalą ir rolės vėl susikurs.',

//RELATIONSHIPS
'LBL_MODULE' => 'Modulis',
'LBL_LHS_MODULE'=>'Pirminis modulis',
'LBL_CUSTOM_RELATIONSHIPS' => '* ryšys sukurtas Studijoje',
'LBL_RELATIONSHIPS'=>'Ryšiai',
'LBL_RELATIONSHIP_EDIT' => 'Redaguoti ryšius',
'LBL_REL_NAME' => 'Vardas',
'LBL_REL_LABEL' => 'Etiketė',
'LBL_REL_TYPE' => 'Tipas',
'LBL_RHS_MODULE'=>'Susijęs modulis',
'LBL_NO_RELS' => 'Nėra ryšių',
'LBL_RELATIONSHIP_ROLE_ENTRIES'=>'Pasirenkamos sąlygos' ,
'LBL_RELATIONSHIP_ROLE_COLUMN'=>'Stulpelis',
'LBL_RELATIONSHIP_ROLE_VALUE'=>'Reikšmė',
'LBL_SUBPANEL_FROM'=>'Subpanelis iš',
'LBL_RELATIONSHIP_ONLY'=>'Jokių matomų matomų elementų bus nesukurta šiam ryšiui, nes čia yra matomi ryšiai tarp šių dviejų modulių.',
'LBL_ONETOONE' => 'Vienas-su-vienu',
'LBL_ONETOMANY' => 'Vienas-su-daug',
'LBL_MANYTOONE' => 'Daug-su-vienu',
'LBL_MANYTOMANY' => 'Daug-su-daug',

//STUDIO QUESTIONS
'LBL_QUESTION_FUNCTION' => 'Pasirinkite funkciją arba komponentus.',
'LBL_QUESTION_MODULE1' => 'Pasirinkite modulį.',
'LBL_QUESTION_EDIT' => 'Pasirinkite modulį redagavimui.',
'LBL_QUESTION_LAYOUT' => 'Pasirinkite išdėstymo redagavimą.',
'LBL_QUESTION_SUBPANEL' => 'Pasirinkite subpanelį redagavimui.',
'LBL_QUESTION_SEARCH' => 'Pasirinkite  paiešką išdėstymui redaguoti.',
'LBL_QUESTION_MODULE' => 'Pasirinkite modulio komponentą redagavimui.',
'LBL_QUESTION_PACKAGE' => 'Pasirinkite paketą redagavimui, arba sukurti naują paketą.',
'LBL_QUESTION_EDITOR' => 'Pasirinkite įrankį.',
'LBL_QUESTION_DROPDOWN' => 'Pasirinkite iššokantį sąrašą redagavimui, arba sukurti naują iššokantį sąrašą.',
'LBL_QUESTION_DASHLET' => 'Pasirinkite panelį išdėstymui redaguoti.',
'LBL_QUESTION_POPUP' => 'Pasirinkite iššokantį langą redagavimui.',
//CUSTOM FIELDS
'LBL_RELATE_TO'=>'Susijęs su',
'LBL_NAME'=>'Vardas',
'LBL_LABELS'=>'Etiketė',
'LBL_MASS_UPDATE'=>'Masinis atnaujinimas',
'LBL_AUDITED'=>'Auditas',
'LBL_CUSTOM_MODULE'=>'Modulis',
'LBL_DEFAULT_VALUE'=>'Numatyta reikšmė',
'LBL_REQUIRED'=>'Reikiamas',
'LBL_DATA_TYPE'=>'Tipas',
'LBL_HCUSTOM'=>'NESTANDARTINIS',
'LBL_HDEFAULT'=>'Numatytas',
'LBL_LANGUAGE'=>'Kalba:',
'LBL_CUSTOM_FIELDS' => '* Studijoje sukurta laukas',

//SECTION
'LBL_SECTION_EDLABELS' => 'Redaguoti etiketes',
'LBL_SECTION_PACKAGES' => 'Paketai',
'LBL_SECTION_PACKAGE' => 'Paketas',
'LBL_SECTION_MODULES' => 'Moduliai',
'LBL_SECTION_PORTAL' => 'Portalas',
'LBL_SECTION_DROPDOWNS' => 'Iššokantis sąrašas',
'LBL_SECTION_PROPERTIES' => 'Savybės',
'LBL_SECTION_DROPDOWNED' => 'Redaguoti iššokantį sąrašą',
'LBL_SECTION_HELP' => 'Pagalba',
'LBL_SECTION_ACTION' => 'Veiksmas',
'LBL_SECTION_MAIN' => 'Pagrindinis',
'LBL_SECTION_EDPANELLABEL' => 'Redaguoti panelio etiketę',
'LBL_SECTION_FIELDEDITOR' => 'Redaguoti laukus',
'LBL_SECTION_DEPLOY' => 'Išdėstyti',
'LBL_SECTION_MODULE' => 'Modulis',
'LBL_SECTION_VISIBILITY_EDITOR'=>'Redaguoti matomumą',
//WIZARDS

//LIST VIEW EDITOR
'LBL_DEFAULT'=>'Numatytas',
'LBL_HIDDEN'=>'Paslėptas',
'LBL_AVAILABLE'=>'Galimas',
'LBL_LISTVIEW_DESCRIPTION'=>'Parodyti trys stulpeliai. <b>Numatytas</b> stulpelis talpina laukus, kurie rodomi sąraše pagal Numatytas.  <b>Papildoma</b> stulpelis talpina laukus, kuriuos vartotojas gali naudotipritaikyto žiūrėjimo kūrimui. <b>Galimi</b> stulpelis rodo laukus, kurie yra prieinami jums, kaip administratoriui, norint pridėti juos prie Numatytas arba galimi stulpelių tam, kad jais galėtų naudotis vartotojai.',
'LBL_LISTVIEW_EDIT'=>'Rodyti sąrašo redaguotoją',

//Manager Backups History
'LBL_MB_PREVIEW'=>'Peržiūra',
'LBL_MB_RESTORE'=>'Atstatyti',
'LBL_MB_DELETE'=>'Ištrinti',
'LBL_MB_COMPARE'=>'Palyginti',
'LBL_MB_DEFAULT_LAYOUT'=>'Numtatytas išdėstymas',

//END WIZARDS

//BUTTONS
'LBL_BTN_ADD'=>'Pridėti',
'LBL_BTN_SAVE'=>'Išsaugoti',
'LBL_BTN_SAVE_CHANGES'=>'Išsaugoti pakeitimus',
'LBL_BTN_DONT_SAVE'=>'Išmesti pakeitimus',
'LBL_BTN_CANCEL'=>'Atšaukti',
'LBL_BTN_CLOSE'=>'Uždaryti',
'LBL_BTN_SAVEPUBLISH'=>'Išsaugoti ir išdėstyti',
'LBL_BTN_NEXT'=>'Toliau',
'LBL_BTN_BACK'=>'Atgal',
'LBL_BTN_CLONE'=>'Klonas',
'LBL_BTN_COPY' => 'Kopijuoti',
'LBL_BTN_COPY_FROM' => 'Copy from…',
'LBL_BTN_ADDCOLS'=>'Pridėti stulpelių',
'LBL_BTN_ADDROWS'=>'Pridėti eilių',
'LBL_BTN_ADDFIELD'=>'Pridėti lauką',
'LBL_BTN_ADDDROPDOWN'=>'Pridėti iššokantį sąrašą',
'LBL_BTN_SORT_ASCENDING'=>'Rikiuoti didėjimo tvarka',
'LBL_BTN_SORT_DESCENDING'=>'Rikiuoti mažėjimo tvarka',
'LBL_BTN_EDLABELS'=>'Redaguoti etiketes',
'LBL_BTN_UNDO'=>'Panaikinti',
'LBL_BTN_REDO'=>'Atstatyti',
'LBL_BTN_ADDCUSTOMFIELD'=>'Pridėti nestandartinį lauką',
'LBL_BTN_EXPORT'=>'Eksportuoti pritaikymus',
'LBL_BTN_DUPLICATE'=>'Dublikatas',
'LBL_BTN_PUBLISH'=>'Paskelbti',
'LBL_BTN_DEPLOY'=>'Išdėstyti',
'LBL_BTN_EXP'=>'Eksportuoti',
'LBL_BTN_DELETE'=>'Ištrinti',
'LBL_BTN_VIEW_LAYOUTS'=>'Rodyti išdėstymą',
'LBL_BTN_VIEW_MOBILE_LAYOUTS'=>'View Mobile Layouts',
'LBL_BTN_VIEW_FIELDS'=>'Rodyti laukus',
'LBL_BTN_VIEW_RELATIONSHIPS'=>'Rodyti ryšius',
'LBL_BTN_ADD_RELATIONSHIP'=>'Pridėti ryšius',
'LBL_BTN_RENAME_MODULE' => 'Pakeisti modulio pavadinimą',
'LBL_BTN_INSERT'=>'Įdėti',
'LBL_BTN_RESTORE_BASE_LAYOUT' => 'Atkurti pagrindinį išdėstymą',
//TABS

//ERRORS
'ERROR_ALREADY_EXISTS'=> 'Klaida: Laukas jau egzistuoja',
'ERROR_INVALID_KEY_VALUE'=> "Klaida: Neteisinga rakto Reikšmė: [&#39;]",
'ERROR_NO_HISTORY' => 'Nerastas istorijos failas',
'ERROR_MINIMUM_FIELDS' => 'Išdėstymas turi turėti bent vieną lauką',
'ERROR_GENERIC_TITLE' => 'Klaida',
'ERROR_REQUIRED_FIELDS' => 'Ar tikrai norite tęsti? Privalomi laukai, kurie yra praleisti:',
'ERROR_ARE_YOU_SURE' => 'Ar tikrai norite tęsti?',
'ERROR_DATABASE_ROW_SIZE_LIMIT' => 'Lauko sukurti negalima. Savo duomenų bazėje pasiekėte šios lentelės eilučių dydžio apribojimą. <a href="https://support.sugarcrm.com/SmartLinks/Custom/MySQL_Row_Size_Limit/" target="_blank">Sužinokite daugiau</a>.',

'ERROR_CALCULATED_MOBILE_FIELDS' => 'Šie laukai turi reikšmes, kurios nebus perskaičiuotos SugarCRM mobilioje redagavimo formos versijoje:',
'ERROR_CALCULATED_PORTAL_FIELDS' => 'Šie laukai turi reikšmes, kurios nebus perskaičiuotos SugarCRM portalo redagavimo formos versijoje:',

//SUGAR PORTAL
    'LBL_PORTAL_DISABLED_MODULES' => 'Šie moduliai yra išjungti:',
    'LBL_PORTAL_ENABLE_MODULES' => 'Jeigu Jūs norite įjungti juos portale, prašome įjungti juos <a id="configure_tabs" target="_blank" href="./index.php?module=Administration&amp;action=ConfigureTabs">čia</a>',
    'LBL_PORTAL_CONFIGURE' => 'Konfigūruoti portalą',
    'LBL_PORTAL_ENABLE_PORTAL' => 'Įjungti portalą',
    'LBL_PORTAL_SHOW_KB_NOTES' => 'Įgalinkite pastabų rodymą žinių bazės modulyje',
    'LBL_PORTAL_ALLOW_CLOSE_CASE' => 'Leisti portalo vartotojams uždaryti registrą',
    'LBL_PORTAL_ENABLE_SELF_SIGN_UP' => 'Leisti prisiregistruoti naujiems vartotojams',
    'LBL_PORTAL_USER_PERMISSIONS' => 'Vartotojo leidimai',
    'LBL_PORTAL_THEME' => 'Portalo tema',
    'LBL_PORTAL_ENABLE' => 'Įjungti',
    'LBL_PORTAL_SITE_URL' => 'Jūsų portalo tinklapis yra prieinamas per:',
    'LBL_PORTAL_APP_NAME' => 'Programos pavadinimas',
    'LBL_PORTAL_CONTACT_PHONE' => 'Telefonas',
    'LBL_PORTAL_CONTACT_EMAIL' => 'El. paštas',
    'LBL_PORTAL_CONTACT_EMAIL_INVALID' => 'Būtina įvesti galiojantį el. pašto adresą',
    'LBL_PORTAL_CONTACT_URL' => 'URL',
    'LBL_PORTAL_CONTACT_INFO_ERROR' => 'Privaloma nurodyti bent vieną būdą susisiekti',
    'LBL_PORTAL_LIST_NUMBER' => 'Sąrašo režime atvaizduojamų įrašų skaičius',
    'LBL_PORTAL_DETAIL_NUMBER' => 'Peržiūros režime atvaizduojamų laukų skaičius',
    'LBL_PORTAL_SEARCH_RESULT_NUMBER' => 'Globalioje paieškoje atvaizduojamų įrašų skaičius',
    'LBL_PORTAL_DEFAULT_ASSIGN_USER' => 'Pagal nutylėjimą priskirtas naujoms portalo registracijoms',
    'LBL_PORTAL_MODULES' => 'Portalo moduliai',
    'LBL_CONFIG_PORTAL_CONTACT_INFO' => 'Portalo kontaktinė informacija',
    'LBL_CONFIG_PORTAL_CONTACT_INFO_HELP' => 'Sukonfigūruokite kontaktinę informaciją, rodomą portalo vartotojams, kuriems reikia papildomos pagalbos dėl paskyros. Būtina sukonfigūruoti bent vieną parinktį.',
    'LBL_CONFIG_PORTAL_MODULES_HELP' => 'Nuvilkite portalo modulių pavadinimus, kad nustatytumėte, jog jie būtų rodomi arba paslėpti portalo viršutinėje naršymo juostoje. Norėdami valdyti portalo vartotojo prieigą prie modulių, naudokite <a href="?module=ACLRoles&action=index">vaidmėnų valdymą.</a>',
    'LBL_CONFIG_PORTAL_MODULES_DISPLAYED' => 'Rodomi moduliai',
    'LBL_CONFIG_PORTAL_MODULES_HIDDEN' => 'Paslėpti moduliai',
    'LBL_CONFIG_VISIBILITY' => 'Matomumas',
    'LBL_CASE_VISIBILITY_HELP' => 'Apibrėžkite, kurie portalo vartotojai galės matyti atvejį.',
    'LBL_EMAIL_VISIBILITY_HELP' => 'Apibrėžkite, kurie portalo vartotojai galės matyti el. laiškus, susijusius su atveju. Įtraukti kontaktai nurodyti laukuose „Kam“, „Nuo“, CC ir BCC.',
    'LBL_MESSAGE_VISIBILITY_HELP' => 'Apibrėžkite, kurie portalo vartotojai galės matyti žinutes, susijusias su atveju. Įtraukti kontaktai nurodyti lauke „Svečiai“.',
    'CASE_VISIBILITY_OPTIONS' => [
        'all' => 'Visi su paskyra susiję kontaktai',
        'related_contacts' => 'Tik pagrindinis kontaktas ir su atveju susiję kontaktai',
    ],
    'EMAIL_VISIBILITY_OPTIONS' => [
        'related_contacts' => 'Tik įtraukti kontaktai',
        'all' => 'Visi kontaktai, galintys matyti atvejį',
    ],
    'MESSAGE_VISIBILITY_OPTIONS' => [
        'related_contacts' => 'Tik įtraukti kontaktai',
        'all' => 'Visi kontaktai, galintys matyti atvejį',
    ],


'LBL_PORTAL'=>'Portalas',
'LBL_PORTAL_LAYOUTS'=>'Portalo išdėstymas',
'LBL_SYNCP_WELCOME'=>'Įveskite portalo egzemplioriaus, kurį norite naujinti, adresą.',
'LBL_SP_UPLOADSTYLE'=>'Pasirinkite stiliaus lapą kurį norite užkrauti iš savo kompiuterio .<br> Kai kitą kartą sinchronizuosite duomenis Sugar portalas pradės naudoti šį stiliaus lapą.',
'LBL_SP_UPLOADED'=> 'Nusiųsta',
'ERROR_SP_UPLOADED'=>'Prašome pasitikrinti, kad Jūs keliate CSS failą.',
'LBL_SP_PREVIEW'=>'Štai taip atrodys Sugar portalas su šiuo stiliaus lapu',
'LBL_PORTALSITE'=>'Sugar portalo adresas:',
'LBL_PORTAL_GO'=>'Eiti',
'LBL_UP_STYLE_SHEET'=>'Užkrauti stiliaus lapą (CSS)',
'LBL_QUESTION_SUGAR_PORTAL' => 'Pasirinkite kurį Sugar portalo išdėstymą norite redaguoti.',
'LBL_QUESTION_PORTAL' => 'Pasirinkite kurį portalo išdėstymą norite redaguoti.',
'LBL_SUGAR_PORTAL'=>'Sugar portalo redaguotojas',
'LBL_USER_SELECT' => '-- Pasirinkti --',

//PORTAL PREVIEW
'LBL_CASES'=>'Aptarnavimai',
'LBL_NEWSLETTERS'=>'Naujienlaiškis',
'LBL_BUG_TRACKER'=>'Klaidos',
'LBL_MY_ACCOUNT'=>'Mano nustatymai',
'LBL_LOGOUT'=>'Atsijungti',
'LBL_CREATE_NEW'=>'Sukurti naują',
'LBL_LOW'=>'Maža',
'LBL_MEDIUM'=>'Vidutinė',
'LBL_HIGH'=>'Didelė',
'LBL_NUMBER'=>'Numeris:',
'LBL_PRIORITY'=>'Svarba:',
'LBL_SUBJECT'=>'Tema',

//PACKAGE AND MODULE BUILDER
'LBL_PACKAGE_NAME'=>'Paketo pavadinimas:',
'LBL_MODULE_NAME'=>'Modulio pavadinimas:',
'LBL_MODULE_NAME_SINGULAR' => 'Modulio pavadinimas vienaskaita',
'LBL_AUTHOR'=>'Autorius:',
'LBL_DESCRIPTION'=>'Aprašymas:',
'LBL_KEY'=>'Raktas:',
'LBL_ADD_README'=>'Perskaityk',
'LBL_MODULES'=>'Moduliai:',
'LBL_LAST_MODIFIED'=>'Paskutini kartą redaguota:',
'LBL_NEW_MODULE'=>'Naujas Modulis',
'LBL_LABEL'=>'Etiketė:',
'LBL_LABEL_TITLE'=>'Etiketė',
'LBL_SINGULAR_LABEL' => 'Vienaskaita',
'LBL_WIDTH'=>'Plotis',
'LBL_PACKAGE'=>'Paketas:',
'LBL_TYPE'=>'Tipas:',
'LBL_TEAM_SECURITY'=>'Komandos apsauga',
'LBL_ASSIGNABLE'=>'Priskiriamas',
'LBL_PERSON'=>'Asmuo',
'LBL_COMPANY'=>'Įmonė',
'LBL_ISSUE'=>'Issue',
'LBL_SALE'=>'Pardavimas',
'LBL_FILE'=>'Failas',
'LBL_NAV_TAB'=>'Navigacijos kortelė',
'LBL_CREATE'=>'Sukurti',
'LBL_LIST'=>'Sąrašas',
'LBL_VIEW'=>'View',
'LBL_LIST_VIEW'=>'Rodyti sąrašą',
'LBL_HISTORY'=>'Rodyti istoriją',
'LBL_RESTORE_DEFAULT_LAYOUT'=>'Restore Default Layout',
'LBL_ACTIVITIES'=>'Priminimai',
'LBL_SEARCH'=>'Paieška',
'LBL_NEW'=>'Naujas',
'LBL_TYPE_BASIC'=>'pagrindinis',
'LBL_TYPE_COMPANY'=>'Įmonė',
'LBL_TYPE_PERSON'=>'asmeninis',
'LBL_TYPE_ISSUE'=>'problema',
'LBL_TYPE_SALE'=>'pardavimas',
'LBL_TYPE_FILE'=>'failas',
'LBL_RSUB'=>'Tai subpanelis, kuris bus rodomas jūsų modulyje',
'LBL_MSUB'=>'Tai yra subpanelis, kurį vartotojo modulis pateikia rodymui susijusiam moduliui.',
'LBL_MB_IMPORTABLE'=>'Leisti importuoti',

// VISIBILITY EDITOR
'LBL_VE_VISIBLE'=>'matomas',
'LBL_VE_HIDDEN'=>'paslėptas',
'LBL_PACKAGE_WAS_DELETED'=>'[[package]] ištrintas',

//EXPORT CUSTOMS
'LBL_EC_TITLE'=>'Eksportavimo pritaikymai',
'LBL_EC_NAME'=>'Pakutės pavadinimas:',
'LBL_EC_AUTHOR'=>'Autorius:',
'LBL_EC_DESCRIPTION'=>'Aprašymas:',
'LBL_EC_KEY'=>'Raktas:',
'LBL_EC_CHECKERROR'=>'Prašome pasirinkite modulį.',
'LBL_EC_CUSTOMFIELD'=>'nestandartiniai laukai',
'LBL_EC_CUSTOMLAYOUT'=>'nestandartiniai išdėstymai',
'LBL_EC_CUSTOMDROPDOWN' => 'tinkintas (-i) išplečiamasis (-ieji) sąrašas (-ai)',
'LBL_EC_NOCUSTOM'=>'Jokie moduliai nebuvo adaptuoti.',
'LBL_EC_EXPORTBTN'=>'Eksportas',
'LBL_MODULE_DEPLOYED' => 'Moduliai buvo išdėstyti.',
'LBL_UNDEFINED' => 'neapibrėžtas',
'LBL_EC_CUSTOMLABEL'=>'tinkinta (-os) žymė (-ės)',

//AJAX STATUS
'LBL_AJAX_FAILED_DATA' => 'Nepavyko išgauti duomenų',
'LBL_AJAX_TIME_DEPENDENT' => 'Nuo laiko priklausomas veiksmas yra vykdomas dabar prašome palaukti ir pabandyt po keliu sekundžių',
'LBL_AJAX_LOADING' => 'Kraunasi...',
'LBL_AJAX_DELETING' => 'Ištrinama...',
'LBL_AJAX_BUILDPROGRESS' => 'Tvarkoma...',
'LBL_AJAX_DEPLOYPROGRESS' => 'Išsidėstymas vykdomas...',
'LBL_AJAX_FIELD_EXISTS' =>'Laukas tokiu pavadinimu jau egzistuoja. Prašome įvesti naują lauko pavadinimą.',
//JS
'LBL_JS_REMOVE_PACKAGE' => 'Ar tikrai norite išimiti šį paketą? Tai visam laikui ištrins failus, susijusius su šiuo paketu.',
'LBL_JS_REMOVE_MODULE' => 'Ar tikrai norite išimti šį modulį? Tai visam laikui ištrins failus, susijusius su šiuo moduliu.',
'LBL_JS_DEPLOY_PACKAGE' => 'Visi pakeitimai kuriuos padarėte Studijoje bus užrašyti ant viršaus, kai šis modulis bus pakartotinai užkrautas. Ar norite tęsti?',

'LBL_DEPLOY_IN_PROGRESS' => 'Išdėstomas paketas',
'LBL_JS_VALIDATE_NAME'=>'Pavadinimas turi būti iš raidžių ir skaičių be tarpų ir turi prasidėti iš raidžių',
'LBL_JS_VALIDATE_PACKAGE_KEY'=>'Paketo raktas jau yra',
'LBL_JS_VALIDATE_PACKAGE_NAME'=>'Paketo pavadinimas jau egzistuoja',
'LBL_JS_PACKAGE_NAME'=>'Paketo pavadinimas. Turi prasidėti raide ir jį gali sudaryti tik raidės, skaitmenys ir pabraukimo brūkšniai. Tarpų ar kitų specialių simbolių naudoti negalima.',
'LBL_JS_VALIDATE_KEY_WITH_SPACE'=>'Raktas – jis gali būti sudarytas iš skaitmenų ir raidžių; jis turi prasidėti raide.',
'LBL_JS_VALIDATE_KEY'=>'Raktas - turi būti raidinis skaitmeninis.',
'LBL_JS_VALIDATE_LABEL'=>'Prašome įvesti etiketę, kuri bus naudojama pavadinimo vaizdavimui šiam moduliui',
'LBL_JS_VALIDATE_TYPE'=>'Prašome pasirinkti modulio tipą, kurį jūs norite sukurti iš sąrašo',
'LBL_JS_VALIDATE_REL_NAME'=>'Pavadinimas – jis turi būti sudarytas iš raidžių ir skaitmenų; jame negali būti tarpų',
'LBL_JS_VALIDATE_REL_LABEL'=>'Etiketė - prašome pridėti etiketę, kuri bus matoma subpanelyje',

// Dropdown lists
'LBL_JS_DELETE_REQUIRED_DDL_ITEM' => 'Ar tikrai norite pašalinti šį būtiną išskleidžiamojo sąrašo elementą? Tai gali paveikti jūsų programos funkcijų veikimą.',

// Specific dropdown list should be:
// LBL_JS_DELETE_REQUIRED_DDL_ITEM_(UPPERCASE_DDL_NAME)
'LBL_JS_DELETE_REQUIRED_DDL_ITEM_SALES_STAGE_DOM' => 'Ar tikrai norite pašalinti šį būtiną išskleidžiamojo sąrašo elementą? Pašalinus etapus „Closed Won“ arba „Closed Lost“ prognozavimo modulis neveiks tinkamai',

// Specific list items should be:
// LBL_JS_DELETE_REQUIRED_DDL_ITEM_(UPPERCASE_ITEM_NAME)
// Item name should have all special characters removed and spaces converted to
// underscores
'LBL_JS_DELETE_REQUIRED_DDL_ITEM_NEW' => 'Ar tikrai norite pašalinti būseną „New sales“? Pašalinus šią būseną galimybių modulio darbo eiga „Revenue Line Item“ neveiks tinkamai.',
'LBL_JS_DELETE_REQUIRED_DDL_ITEM_IN_PROGRESS' => 'Ar tikrai norite pašalinti būseną „Progress sales“? Pašalinus šią būseną galimybių modulio darbo eiga „Revenue Line Item“ neveiks tinkamai.',
'LBL_JS_DELETE_REQUIRED_DDL_ITEM_CLOSED_WON' => 'Ar tikrai norite pašalinti etapą „Closed Won sales“? Pašalinus šį etapą prognozavimo modulis neveiks tinkamai',
'LBL_JS_DELETE_REQUIRED_DDL_ITEM_CLOSED_LOST' => 'Ar tikrai norite pašalinti etapą „Closed Lost sales“? Pašalinus šį etapą prognozavimo modulis neveiks tinkamai',

//CONFIRM
'LBL_CONFIRM_FIELD_DELETE'=>'Pašalinus šį pasirinktinį lauką bus pašalintas ir laukas, ir visi su pasirinktiniu lauku susiję duomenys duomenų bazėje. Laukas nebebus rodomas nė viename modulio makete.'
        . ' Jei šis laukas bus įtrauktas į formulę skaičiuoti bet kurių laukų vertėms, formulė nebeveiks.'
        . '\n\nLauko nebebus galima naudoti ataskaitose; šis pakeitimas įsigalios atsijungus ir vėl prisijungus prie programos. Visos ataskaitos, kuriose yra laukas, turės būti atnaujintos, kad būtų galima jas vykdyti.'
        . '\n\nAr norite tęsti?',
'LBL_CONFIRM_RELATIONSHIP_DELETE'=>'Ar tikrai norite panaikinti šį ryšį? <br> Pastaba: ši operacija gali būti nebaigta kelioms minutėms.',
'LBL_CONFIRM_RELATIONSHIP_DEPLOY'=>'Tai padarys šį ryšį pastovų. Ar tikrai norite sukurti šį ryšį?',
'LBL_CONFIRM_DONT_SAVE' => 'pakeitimai buvo atlikti nuo paskutinio išsaugojimo, ar norėtumėte išsaugoti?',
'LBL_CONFIRM_DONT_SAVE_TITLE' => 'Išsaugoti pakeitimus?',
'LBL_CONFIRM_LOWER_LENGTH' => 'Duomenys gali būti ištrinti negrįžtamai, ar norite tęsti?',

//POPUP HELP
'LBL_POPHELP_FIELD_DATA_TYPE'=>'Pasirinkite  atitinkamą duomenų tipą, paremtą duomenimis, kurie bus įvedami į lauką.',
'LBL_POPHELP_FTS_FIELD_CONFIG' => 'Konfigūruokite lauką, kad būtų galima ieškoti viso teksto.',
'LBL_POPHELP_FTS_FIELD_BOOST' => 'Padidinimas yra įrašo laukų tinkamumo padidinimo procesas.<br />Vykdant iešką suteikiama pirmenybė laukams, kurių padidinimo lygis yra didesnis. Vykdant iešką laukai, kuriuose yra atitinkančių įrašų ir kurių svoris didesnis, bus rodomi ieškos rezultatų viršuje.<br />Numatytoji reikšmė yra 1,0, tai reiškia neutralų padidinimą. Norėdami didinti pasirinkite bet kokią už 1 didesnę srauto reikšmę. Norėdami mažinti didinimą pasirinkite bet kokią už 1 mažesnę reikšmę. Pavyzdžiui, reikšmė 1,35 teigiamai padidina lauką iki 135 %. Naudojant reikšmę 0,60 didinimas mažinamas.<br />Nepamirškite, kad ankstesnėse versijose reikėjo iš naujo sukurti viso teksto ieškos rodyklę. Dabar to nebereikia.',
'LBL_POPHELP_IMPORTABLE'=>'<b>Taip</b>: Laukas bus įtrauktas importavimui.<br><b>Ne</b>: Laukas nebus įtrauktas importavimui.<br><b>Privalomas</b>: reikšmė importavimui privalo būti pateikta visiems importavimams.',
'LBL_POPHELP_PII'=>'Šis laukas bus automatiškai pažymėtas tikrinti ir prieinamas asmeninės informacijos rodinyje.<br>Asmeninės informacijos laukus taip pat galima ištrinti visam laikui, kai įrašas susijęs su duomenų privatumo trynimo užklausa.<br>Trynimas atliekamas naudojant duomenų privatumo modulį; šią operaciją vykdyti gali administratoriai arba duomenų privatumo vadovo vaidmenį atliekantys vartotojai.',
'LBL_POPHELP_IMAGE_WIDTH'=>'Įveskite plotį pikseliais.<br> Užkraunamas paveiksliukas bus sumažintas iki tokio pločio.',
'LBL_POPHELP_IMAGE_HEIGHT'=>'Įveskite aukštį pikseliais.<br> Užkraunamas paveiksliukas bus sumažintas iki tokio aukščio.',
'LBL_POPHELP_DUPLICATE_MERGE'=>'<b>Enabled</b>: laukas rodomas dublikatų suliejimo funkcijoje, tačiau jo negalima naudoti filtro sąlygai dublikatų ieškos funkcijoje.<br><b>Disabled</b>: laukas nerodomas dublikatų suliejimo funkcijoje ir jo negalima naudoti filtro sąlygai dublikatų ieškos funkcijoje.'
. '<br><b>In Filter</b>: laukas rodomas dublikatų suliejimo funkcijoje ir galima jį naudoti dublikatų ieškos funkcijoje.<br><b>Filter Only</b>: laukas neveikia dublikatų suliejimo funkcijoje, tačiau jį galima naudoti dublikatų ieškos funkcijoje.<br><b>Default Selected Filter</b>: laukas pagal numatytuosius parametrus naudojamas filtro sąlygai dublikatų ieškos puslapyje, jis rodomas ir dublikatų suliejimo funkcijoje.'
,
'LBL_POPHELP_CALCULATED'=>"Sukurkite formulę, kad nustatytumėte reikšmę šiame lauke.<br>"
   . "Darbo eigos apibrėžtys, kuriose yra veiksmas, nustatytas šiam laukui atnaujinti, nebevykdys veiksmo. <br>"
   . "Laukai, kuriuose naudojamos formulės, nebus skaičiuojami realiuoju laiku "
   . "„Sugar“ savitarnos portalas arba "
   . "Mobilieji „EditView“ maketai.",

'LBL_POPHELP_DEPENDENT'=>"Sukurkite formulę, kad nustatytumėte, ar šis laukas matomas maketuose.<br/>"
        . "Priklausomi laukai naršyklės mobiliajame rodinyje bus rodomi pagal priklausomybės formulę, <br/>"
        . "bet netaikys formulės vietinėse programose, pvz., „Sugar Mobile“, skirtoje „iPhone“. <br/>"
        . "Jie nesilaikys „Sugar“ savitarnos portale pateiktos formulės.",
'LBL_POPHELP_REQUIRED'=>"Sukurkite formulę, kad nustatytumėte, ar šis laukas privalomas maketuose.<br/>"
    . "Reikalingi laukai bus rodomi pagal formulę naršyklės mobiliajame rodinyje, <br/>"
    . "bet nesilaikys formulės vietinėse programose, pvz., „Sugar Mobile“, skirtoje „iPhone“. <br/>"
    . "Jie nesilaikys „Sugar“ savitarnos portale pateiktos formulės.",
'LBL_POPHELP_READONLY'=>"Sukurkite formulę, kad nustatytumėte, ar šis laukas paruoštas tik maketuose.<br/>"
        . "Skaitytini laukai bus rodomi pagal formulę naršyklės mobiliajame rodinyje, <br/>"
        . "bet netaikys formulės vietinėse programose, pvz., „Sugar Mobile“, skirtoje „iPhone“. <br/>"
        . "Jie nesilaikys „Sugar“ savitarnos portale pateiktos formulės.",
'LBL_POPHELP_GLOBAL_SEARCH'=>'Pasirinkite, kad šis laukas būtų naudojamas ieškant įrašų naudojant šio modulio visuotinę paiešką.',
//Revert Module labels
'LBL_RESET' => 'Atstatyti',
'LBL_RESET_MODULE' => 'Atstatyti modulį',
'LBL_REMOVE_CUSTOM' => 'Išmesti pakeitimus',
'LBL_CLEAR_RELATIONSHIPS' => 'Išvalyti ryšius',
'LBL_RESET_LABELS' => 'Atstatyti pavadinimus',
'LBL_RESET_LAYOUTS' => 'Maketus nustatyti iš naujo',
'LBL_REMOVE_FIELDS' => 'Išmesti pridėtus laukus',
'LBL_CLEAR_EXTENSIONS' => 'Išvalyti išplėtimus',

'LBL_HISTORY_TIMESTAMP' => 'Data ir laikas',
'LBL_HISTORY_TITLE' => 'istorija',

'fieldTypes' => array(
                'varchar'=>'Tekstas',
                'int'=>'Skaičius',
                'float'=>'Slankusis simbolis',
                'bool'=>'Žymimasis langelis',
                'enum'=>'Iššokantis sąrašas',
                'multienum' => 'Kelių pasirinkimas',
                'date'=>'Data',
                'phone' => 'Telefonas',
                'currency' => 'Valiuta',
                'html' => 'HTML',
                'radioenum' => 'Radio',
                'relate' => 'Susijęs',
                'address' => 'Adresas',
                'text' => 'Teksto sritis',
                'url' => 'URL',
                'iframe' => 'IFrame',
                'image' => 'Paveikslėlis',
                'encrypt'=>'Šifruoti',
                'datetimecombo' =>'Data ir laikas',
                'decimal'=>'Dešimtainis',
                'autoincrement' => 'Automatinis padidinimas',
                'actionbutton' => 'Veiksmo mygtukas',
),
'labelTypes' => array(
    "" => "Anksčiau naudoti pavadinimai",
    "all" => "Visi",
),

'parent' => 'Lankstusis ryšys',

'LBL_ILLEGAL_FIELD_VALUE' =>"Iššokantis sąrašo raktas negali turėti kabučių.",
'LBL_CONFIRM_SAVE_DROPDOWN' =>"Jūs pasirinkote pašalinti šį elementą iš išskleidžiamojo sąrašo. Visuose išskleidžiamuosiuose laukuose, kuriuose naudojamas šis sąrašas su šiuo elementu, nebebus rodoma reikšmė ir jos nebebus galima pasirinkti išskleidžiamuosiuose laukuose. Ar norite tęsti?",
'LBL_POPHELP_VALIDATE_US_PHONE'=>"Select to validate this field for the entry of a 10-digit<br>" .
                                 "phone number, with allowance for the country code 1, and<br>" .
                                 "to apply a U.S. format to the phone number when the record<br>" .
                                 "išsaugota. Bus pritaikytas toks formatas: (xxx) xxx-xxxx.",
'LBL_ALL_MODULES'=>'Visi moduliai',
'LBL_RELATED_FIELD_ID_NAME_LABEL' => '{0} (related {1} ID)',
'LBL_HEADER_COPY_FROM_LAYOUT' => 'Kopijuoti iš maketo',
'LBL_RELATIONSHIP_TYPE' => 'Ryšiai',

// Edit Labels
'LBL_COMPARISON_LANGUAGE' => 'Lyginimo kalba',
'LBL_LABEL_NOT_TRANSLATED' => 'Ši etiketė gali būti neišversta',
);
