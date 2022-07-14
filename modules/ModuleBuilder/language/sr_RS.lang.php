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
    'LBL_LOADING' => 'Učitavanje' /*for 508 compliance fix*/,
    'LBL_HIDEOPTIONS' => 'Sakrij Opcije' /*for 508 compliance fix*/,
    'LBL_DELETE' => 'Obriši' /*for 508 compliance fix*/,
    'LBL_POWERED_BY_SUGAR' => 'Pokreće SugarCRM' /*for 508 compliance fix*/,
    'LBL_ROLE' => 'Uloga',
    'LBL_BASE_LAYOUT' => 'Osnovni izgled',
    'LBL_FIELD_NAME' => 'Naziv polja',
    'LBL_FIELD_VALUE' => 'Vrednost',
    'LBL_LAYOUT_DETERMINED_BY' => 'Izgled je određen sledećim stavkama:',
    'layoutDeterminedBy' => [
        'std' => 'Standardni izgled',
        'role' => 'Uloga',
        'dropdown' => 'Polje padajućeg menija',
    ],
    'LBL_DELETE_CUSTOM_LAYOUTS' => 'Biće uklonjeni svi prilagođeni izgledi. Želite li stvarno da promenite trenutne definicije izgleda?',
'help'=>array(
    'package'=>array(
            'create'=>'Unesite <b>Naziv</b> paketa.  Naziv koji unesete mora da bude alfanumerički bez razmaka. (Na primer: HR_Menagement)<br><br> Možete da unesete <b>Autora</b> i <b>Opis</b> informacije za paket.<br><br>Kliknite na <b>Sačuvaj</b> da bi ste kreirali paket.',
            'modify'=>'Svojstva i moguće akcije za <b>Paket</b> se pojavljuju ovde.<br><br>Možete promeniti <b>Naziv</b>, <b>Autora</b> i <b>Opis</b> paketa, kao i da vidite i prilagodite sve module koji se nalaze u paketu.<br><br>Kliknite <b>Novi modul</b> da bi ste kreirali modul za paket.<br><br>Ako paket sadrži bar jedan modul, možete <b>Objaviti</b> i <b>Rasporediti</b> paket, kao i <b>Izvesti</b> prilagođavanja koja su napravljena u paketu.',
            'name'=>'Ovo je <b>Naziv</b> trenutnog paketa.<br><br>Naziv koji unesete mora biti alfanumerički, koji počinje slovom i ne sarži prazna polja. (Na primer: HR_Management)',
            'author'=>'Ovo je <b>Autor</b> koji je prikazan za vreme instalacije kao ime entiteta koje je kreirale paket.<br><br>Autor može biti kako individua, tako i kompanija.',
            'description'=>'Ovo je <b>Opis</b> paketa koji je prikazan za vreme instalacije.',
            'publishbtn'=>'Kliknite na <b>Objavi</b> da bi ste sačuvali unesene podatke i kreirali .zip fajl koji je instalaciona verzija paketa.<br><br>Koristite <b>Module Loader</b> da bi se učitali .zip fajl i instalirali paket.',
            'deploybtn'=>'Kliknite na <b>Rasporedi</b> da bi ste sačuvali unesene podatke i instalirali paket, uključujući sve module na trenutnoj instanci.',
            'duplicatebtn'=>'Kliknite na <b>Dupliciraj</b> da bi ste kopirali sadržaj paketa u novi paket i da bi ste prikazali novi paket.<br><br>Za novi paket, novi naziv će biti generisan automatski, dodavanjem broja na kraj naziva paketa koji je korišćen da bi se kreirao novi. Možete promeniti naziv novog paketa upisivanjem novog <b>Naziva</b> i klikom na <b>Sačuvaj</b>.',
            'exportbtn'=>'Kliknite <b>Izvezi</b> da bi kreirali .zip fajl koji sadrži načinjene izmene u paketu.<br><br>Generisan fajl nije instalaciona verzija paketa<br><br>Koristite <b>Module Loader</b> da bi uvezli .zip fajl i da bi se paket, uključujući i izmene prikazao u Kreatoru modula.',
            'deletebtn'=>'Kliknite <b>Obriši</b> da bi obrisali ovaj paket i sve fajlove povezane sa ovim paketom.',
            'savebtn'=>'Kliknite <b>Sačuvaj</b> da bi sačuvali sve unete podatke povezane sa paketom.',
            'existing_module'=>'Kliknite na <b>Modul</b> ikonicu da bi izmenili svojstva i prilagodili polja, veze i resporede povezane sa modulom.',
            'new_module'=>'Kliknite <b>Novi Modul</b> da bi kreirali nov modul za ovaj paket.',
            'key'=>'Ovaj alfanumerički sa 5 slova <b>Ključ</b> će se koristiti kao prefiks svim direktorijumima, nazivima klasa i tabelama baze za sve module u trenutnom paketu.<br><br>Ključ se koristi  da bi se postigli jedinstveni nazivi tabela.',
            'readme'=>'Kliknite da dodate <b>Pročitaj-me</b> tekst za ovaj paket.<br><br>Pročitaj-me će biti dostupan u vreme instalacije.',

),
    'main'=>array(

    ),
    'module'=>array(
        'create'=>'Unesite <b>Naziv</b> za modul. <b>Labela</b> koju unesete će se prikazati u navigacionoj kartici. <br><br>Odaberite prikaz navigacione kartice za modul klikom na polje za čekiranje <b>Navigaciona kartica</b>.<br><br>Odaberite <b>Stigurnost tima</b> da bi imali polje za odabir Tima u zapisima modula. <br><br>Onda odaberite tip modula koji želite da kreirate. <br><br>Odaberite tip šablona. Svaki šablon sadrži specifičan set polja, kao i predefinisane rasporede, koji će se koristiti kao osnova za modul. <br><br>Kliknite <b>Sačuvaj</b> da bi kreirali modul.',
        'modify'=>'Možete da promenite svojstva modula, ili prilagodite <b>Polja</b>, <b>Veze</b> i <b>Rasporede</b> u vezi sa modulom.',
        'importable'=>'Odabirom opcije <b>Dostupno za uvoz</b> ćete omućiti uvoz u ovaj modul.<br><br>Link za Čarobnjaka za uvoz će se pojaviti u meniju Prečice u modulu. Čarobnjak za uvoz omogućava uvoz podataka iz spoljnih izvora u prilagođen modul.',
        'team_security'=>'Odabirom polja za potvrdu <b>Sigurnost Tima</b> će se omogućiti sigurnost tima za ovaj modul. <br><br>Ako je sigurnost tima omogućena, polje za odabir tima će se pojaviti u okviru zapisa u modulu',
        'reportable'=>'Odabirom ovog polja će se omogućiti izveštaji za ovaj modul.',
        'assignable'=>'Odabirom ovog polja će se omogućiti zapisima iz ovog modula da budu dodeljeni izabranom korisniku.',
        'has_tab'=>'Odabirom <b>Navigacione kartice</b> će se obezbediti navigaciona kartica za ovaj modul.',
        'acl'=>'Odabirom ovog polja će se omogućiti kontrola pristupa ovom modulu, uključujući i nivo bezbednosti polja.',
        'studio'=>'Odabirom ovog polja će se omogućiti administratorima da prilagođavaju modul kroz Studio.',
        'audit'=>'Odabirom ovog polja će se omogućiti praćenje promena za ovaj modul. Promene u određenim poljima će biti zabeležene tako da administratori mogu da pregledaju istoriju promena.',
        'viewfieldsbtn'=>'Kliknite na <b>Pregledaj polja</b> da bi ste videli polja u vezi sa modulom i da kreirajte i uređujute prilagođena polja.',
        'viewrelsbtn'=>'Kliknite na <b>Pogledaj Veze</b> da vidite odnose u vezi sa ovim modulom i da stvorite nove odnose.',
        'viewlayoutsbtn'=>'Kliknite <b>Pogledaj Rasporede</b> da biste videli rasporede za modul i da prilagodite raspored polja u okviru modula.',
        'viewmobilelayoutsbtn' => 'Klikom na Prikazati mobilni raspored se prikazuje raspored modula i mogućnost prilagođavanja polja u okviru modula prema sopstvenim potrebama.',
        'duplicatebtn'=>'Kliknite <b>Duplikat</b> da kopirate svojstva modula u novi modul i da prikažete novi modul. <br><br> Za novi modul, novo ime će biti automatski generisano dodavanjem broja na kraj naziva modula korišćenog za kreiranje novog modula.',
        'deletebtn'=>'Kliknite <b>Obriši</b> da biste izbrisali ovaj modul.',
        'name'=>'Ovo je <b>Ime</b> trenutnog modula.<br><br>Ime mora biti alfanumeričko i mora početi sa slovom i ne sme da sadrži razmake. (Primer: HR_Management )',
        'label'=>'Ovo je <b>Labela</b> koja će se pojaviti u navigacionoj kartici za modul.',
        'savebtn'=>'Kliknite <b>Sačuvaj</b> da sačuvate sve unete podatke vezane za modul.',
        'type_basic'=>'<b>Osnovni</b> tip šablona pruža osnovna polja, kao što su Ime, Dodeljeno, Tim, Datum kreiranja i Opis polja.',
        'type_company'=>'Šablon tipa <b>Preduzeće</b> nudi organizaciono specifična polja, kao što je Naziv Firme, Industrija i Adresa za Naplatu. <br><br>Koristite ovaj šablon da bi ste napravili module koji su slični standardnom modulu kompanije.',
        'type_issue'=>'Šablon tipa <b>Problem</b> pruža specifična polja slučaja i defekata, kao što su Broj, Status, Prioritet i Opis.<br><br>Koristite ovaj šablon za kreiranje modula koji su slični standardnim Slučajevi i moduli za praćenje grešaka.',
        'type_person'=>'Šablon tipa <b>Osoba</b> nudi individualno specifična polja, kao što su Pozdrav, Naslov, Ime, Adresa i Broj Telefona.<br><br>Koristite ovaj šablon za kreiranje modula koji su slični standardnim modulima Kontakti i Potencijalni klijenti.',
        'type_sale'=>'Šablon tipa <b>Prodaja</b> pruža mogućnost određenih polja, kao što su Izvor Potencijalnog klijenta, Faza, Iznos i Verovatnoća. <br><br>Koristite ovaj šablon da bi ste napravili module koji su slični standardnom modulu Prodajne prilike.',
        'type_file'=>'Šablon tipa <b>Fajl</b> pruža dokument specifična polja, kao što su Ime fajla,Tip dokumenta, i Datum objavljivanja.<br><br>Koristite ovaj šablon da bi ste napravili module koji su slični standardnom modulu Dokumenta.',

    ),
    'dropdowns'=>array(
        'default' => 'Sve <b>Padajuće liste</b> za aplikaciju su navedene ovde.<br><br>Padajuće liste se mogu koristiti za padajuća polja u bilo kom modulu.<br><br> Da bi ste izmenili postojeću padajuću listu, kliknite na ime padajuće liste.<br><br>Kliknite <b>Dodaj Padajuću listu</b> da kreirate novu padajuću listu.',
        'editdropdown'=>'Padajuća lista može da se koristi za standardna ili prilagođena padajuća polja u bilo kom modulu.<br><br>Obezbedite <b>Ime</b> za padajuću listu.<br><br>Ako su instalirani bilo koji jezički paketi u aplikaciji, možete da izaberete <b>Jezik</b> da koristite za stavke liste.<br><br>U polju <b>Naziv stavke</b>, obezbedite ime za opciju u padajućoj listi. Ovo ime se neće pojaviti u padajućoj listi koja je vidljiva za korisnike.<br><br>U polju <b>Prikaži Labelu</b> je labela koja će biti vidljiva za korisnike. <br><br>Nakon dodavanja imena stavke i labele za prikaz, kliknite na <b>Dodaj</b> da bi ste dodali stavku na padajuću listu.<br><br>Da bi ste promenili redosled stavki u listi, prevucite i spustite stavke na željenu poziciju.<br><br>Da bi ste izmenili labelu za prikaz stavke, kliknite na <b>Izmeni ikonikonicu</b> i unesite novu labelu. Da biste izbrisali stavku iz padajuće liste, kliknite na ikonu <b>Obriši</b>.<br><br>Da bi ste poništili promenu napravljenu za prikaz labele, kliknite na <b>Poništi</b>. Da ponovo vratite promenu koja je bila poništena, kliknite na dugme <b>Vrati poništeno</b>.</br></br>Kliknite<b> Sačuvaj </b> da bi ste sačuvali padajuću listu.',

    ),
    'subPanelEditor'=>array(
        'modify'	=> 'All of the fields that can be displayed in the <b>Subpanel</b> appear here.<br><br>The <b>Default</b> column contains the fields that are displayed in the Subpanel.<br/><br/>The <b>Hidden</b> column contains fields that can be added to the Default column.'
    . '<br/><br/><!--not_in_theme!--><img src="themes/default/images/SugarLogic/icon_dependent.png"/>Indicates a Dependent field that may or may not be visible based on the value of a formula.<br/><!--not_in_theme!--><img src="themes/default/images/SugarLogic/icon_calculated.png" /> Indicates a Calculated field whose value will be automatically determined based on a formula.'
    ,
        'savebtn'	=> 'Kliknite <b>Sačuvaj & Rasporedi</b> da bi ste sačuvali promene koje ste napravili i da ih učinite aktivnim u modulu.',
        'historyBtn'=> 'Kliknite <b>Pogled Istorije</b> da vidite i vratite prethodno sačuvani raspored iz istorije.',
        'historyRestoreDefaultLayout'=> 'Kliknite <b>Vrati podrazumevan raspored</b> da vratite pogled na svoj prvobitni raspored.',
        'Hidden' 	=> '<b>Skrivena</b> polja se ne pojavljuju u subpanelu.',
        'Default'	=> '<b>Podrazumevana</b> polja se pojavljuju u subpanelu.',

    ),
    'listViewEditor'=>array(
        'modify'	=> 'All of the fields that can be displayed in the <b>ListView</b> appear here.<br><br>The <b>Default</b> column contains the fields that are displayed in the ListView by default.<br/><br/>The <b>Available</b> column contains fields that a user can select in the Search to create a custom ListView. <br/><br/>The <b>Hidden</b> column contains fields that can be added to the Default or Available column.'
    . '<br/><br/><!--not_in_theme!--><img src="themes/default/images/SugarLogic/icon_dependent.png"/>Indicates a Dependent field that may or may not be visible based on the value of a formula.<br/><!--not_in_theme!--><img src="themes/default/images/SugarLogic/icon_calculated.png" /> Indicates a Calculated field whose value will be automatically determined based on a formula.'
    ,
        'savebtn'	=> 'Kliknite <b>Sačuvaj & Rasporedi</b> da bi ste sačuvali promene koje ste napravili i da ih učinite aktivnim u modulu.',
        'historyBtn'=> 'Kliknite <b>Pogled Istorije</b> da vidite i vratite prethodno sačuvani raspored iz istorije.',
        'historyRestoreDefaultLayout'=> 'Kliknite <b>Vrati podrazumevan izgled</b> da vratite pogled na svoj prvobitni raspored.<br><br><b>Vrati podrazumevan izgled</b> vraća samo postavku polja unutar originalnog prikaza. Da promenite oznake polja, kliknite na ikonu Izmena koja se nalazi pored svakog polja.',
        'Hidden' 	=> '<b>Skrivena</b> polja koja trenutno nisu dostupna korisnicima na Pregledu u vidu liste.',
        'Available' => '<b>Dostupna</b> polja koja se podrazumevano ne prikazuju, ali korisnici mogu da ih dodaju na pregled u vidu listi.',
        'Default'	=> '<b>Podrazumevana</b>polja se pojavljuju na pregledu u vidu liste i ne menjaju ih korisnici.'
    ),
    'popupListViewEditor'=>array(
        'modify'	=> 'All of the fields that can be displayed in the <b>ListView</b> appear here.<br><br>The <b>Default</b> column contains the fields that are displayed in the ListView by default.<br/><br/>The <b>Hidden</b> column contains fields that can be added to the Default or Available column.'
    . '<br/><br/><!--not_in_theme!--><img src="themes/default/images/SugarLogic/icon_dependent.png"/>Indicates a Dependent field that may or may not be visible based on the value of a formula.<br/><!--not_in_theme!--><img src="themes/default/images/SugarLogic/icon_calculated.png" /> Indicates a Calculated field whose value will be automatically determined based on a formula.'
    ,
        'savebtn'	=> 'Kliknite <b>Sačuvaj & Rasporedi</b> da bi ste sačuvali promene koje ste napravili i da ih učinite aktivnim u modulu.',
        'historyBtn'=> 'Kliknite <b>Pogled Istorije</b> da vidite i vratite prethodno sačuvani raspored iz istorije.',
        'historyRestoreDefaultLayout'=> 'Kliknite <b>Vrati podrazumevan izgled</b> da vratite pogled na svoj prvobitni raspored.<br><br><b>Vrati podrazumevan izgled</b> vraća samo postavku polja unutar originalnog prikaza. Da promenite oznake polja, kliknite na ikonu Izmena koja se nalazi pored svakog polja.',
        'Hidden' 	=> '<b>Skrivena</b> polja koja trenutno nisu dostupna korisnicima na Pregledu u vidu liste.',
        'Default'	=> '<b>Podrazumevana</b>polja se pojavljuju na pregledu u vidu liste i ne menjaju ih korisnici.'
    ),
    'searchViewEditor'=>array(
        'modify'	=> 'All of the fields that can be displayed in the <b>Search</b> form appear here.<br><br>The <b>Default</b> column contains the fields that will be displayed in the Search form.<br/><br/>The <b>Hidden</b> column contains fields available for you as an admin to add to the Search form.'
    . '<br/><br/><!--not_in_theme!--><img src="themes/default/images/SugarLogic/icon_dependent.png"/>Indicates a Dependent field that may or may not be visible based on the value of a formula.<br/><!--not_in_theme!--><img src="themes/default/images/SugarLogic/icon_calculated.png" /> Indicates a Calculated field whose value will be automatically determined based on a formula.'
    . '<br/><br/>This configuration applies to popup search layout in legacy modules only.',
        'savebtn'	=> 'Kliknite <b>Sačuvaj & Rasporedi</b> da bi ste sačuvali promene koje ste napravili i da ih učinite aktivnim u modulu.',
        'Hidden' 	=> '<b>Skrivena</b> polja koja trenutno nisu dostupna u Pretrazi.',
        'historyBtn'=> 'Kliknite <b>Pogled Istorije</b> da vidite i vratite prethodno sačuvani raspored iz istorije.',
        'historyRestoreDefaultLayout'=> 'Kliknite <b>Vrati podrazumevan izgled</b> da vratite pogled na svoj prvobitni raspored.<br><br><b>Vrati podrazumevan izgled</b> vraća samo postavku polja unutar originalnog prikaza. Da promenite oznake polja, kliknite na ikonu Izmena koja se nalazi pored svakog polja.',
        'Default'	=> '<b>Podrazumevana</b>polja se pojavljuju u Pretrazi.'
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
        'saveBtn'	=> 'Kliknite <b>Sačuvaj</b> da sačuvate promene koje ste uneli u raspored nakon poslednjeg čuvanja.<br><br>Promene neće biti prikazane u modulu dok ne Rasporedite sačuvane promene.',
        'historyBtn'=> 'Kliknite <b>Pogled Istorije</b> da vidite i vratite prethodno sačuvani raspored iz istorije.',
        'historyRestoreDefaultLayout'=> 'Kliknite <b>Vrati podrazumevan izgled</b> da vratite pogled na svoj prvobitni raspored.<br><br><b>Vrati podrazumevan izgled</b> vraća samo postavku polja unutar originalnog prikaza. Da promenite oznake polja, kliknite na ikonu Izmena koja se nalazi pored svakog polja.',
        'publishBtn'=> 'Kliknite <b>Sačuvaj & Rasporedi</b> da bi ste sačuvali sve promene koje ste uneli u raspored nakon poslednjeg čuvanja, i da aktivirate promene u modulu. <br><br>Raspored će odmah biti prikazan u modulu.',
        'toolbox'	=> '<b>Set alata</b> sadrži <b>Korpu za otpatke</b>, dodatni raspored elemenata i skup dostupnih polja za dodavanje na raspored.<br><br>Raspored elemenata i polja u Setu alata se može prevući i spustiti u raspored, a raspored elemenata i polja se može prevući i spustiti sa rasporeda u Setu alata.<br><br>Elementi rasporeda su <b>Paneli</b> i <b>Redovi</b>. Dodavanje novog reda ili novog panela u raspored pruža dodatne lokacije u rasporedu za polja. <br><br>Prevucite i spustite bilo koja polja u Setu alata ili rasporedu na poziciji okupiranog polja da zamenite lokacije dva polja.<br><br><b>Prazno</b> polje stvara prazan prostor na rasporedu gde se stavi.',
        'panels'	=> 'Područje <b>Raspored</b> pruža pogled na to kakav raspored će se pojaviti u okviru modula kada se načine promene na rasporedu. <br><br>Možete menjati položaj polja, redova i panela prevlačenjem i spuštanjem na željeno mesto.<br><br>Uklanjanje elemenata vršite prevlačenjem i spuštanjem u <b>Korpu za otpatke</b> u Setu alata , ili dodavanje novih elemenata i poljavršite prevlačenjem i spuštanjem sa <b>Seta alata</b> na željeno mesto u raspored.',
        'delete'	=> 'Prevucite i spustite bilo koji elemenat ovde da ga uklonite iz rasporeda',
        'property'	=> 'Izmena prikazane Labele za ovo polje <br><b>Redosled kartica</b> kontroliše kojim redosledom se tabulator prebacuje između polja.',
    ),
    'fieldsEditor'=>array(
        'default'	=> '<b>Polja</b> koja su dostupna za modul su ovde navedena po Nazivu polja.<br><br>Prilagođena polja kreirana za modul se pojavljuju iznad polja koja su na raspolaganju za modul po podrazumevanoj vrednosti.<br><br>Da bi ste izmenili polje, kliknite na <b>Ime polja</b>.<br><br>Da bi ste kreirali novo polje, kliknite na dugme <b>Dodaj polje</b>.',
        'mbDefault'=>'<b>Polja</b> koja su dostupna za modul su ovde navedena po Nazivu polja.<br><br> Da bi ste konfigurisali svojstva za polje, kliknite na ime polja.<br><br> Da bi ste kreirali novo polje, kliknite na dugme <b>Dodaj polje</b>. Labela, zajedno sa drugim svojstvima novog polja se može izmeniti nakon stvaranja polja klikom na Ime polja.<br><br>Nakon raspoređivanja modula, nova polja stvorena u Kreatoru Modula smatraju se kao standardna polja u raspoređenom modulu u Studio-u.',
        'addField'	=> 'Odaberite <b>Tip podataka</b> za novo polje. Tip koji odaberete određuje kakav skup karaktera se može uneti u polje. Na primer, samo brojevi koji su celi brojevi se mogu uneti u polja koja su tipa Integer.<br><br>Obezbedite <b>Ime</b> za polje. Ime mora da bude alfanumeričko i ne sme sadržati razmake. Donje crte su validne.<br><br><b>Labela za prikaz</b> je labela koja će se pojaviti za polja u rasporedima modula. <b>Sistemska labela</b> se koristi da označi polje u kodu.<br><br> U zavisnosti od tipa podataka izabranog za polje, neke ili sve od sledećih osobina se mogu podesiti za polje:<br><br><b>Tekst za pomoć</b> se pojavljuje privremeno dok korisnik pređe preko polja i može se koristiti da pita korisnika za tip željenog unosa.<br><br><b>Komentar tekst</b> se vidi samo u okviru Studio-a i/ili Kreatora Modula, i može se koristiti da opiše polje za administratore.<br><br><b>Podrazumevana vrednost</b> će se pojaviti u polju. Korisnici mogu da unesu novu vrednost u polje ili koriste podrazumevanu vrednost.<br><br>Izaberite <b>Masovno ažuriranje</b> kako bi mogli da koristite funkciju masovnog ažuriranja polja.<br><br><b>Maksimalna veličina</b> vrednosti određuje maksimalni broj karaktera koje se mogu uneti u polje.<br><br>Izaberite<b>Obavezno polje</b> za potvrdu da bi polje bilo obavezno. Vrednost mora biti uneta u polje da bi mogli da sačuvate zapis koji sadrži polje.<br><br>Izaberite <b>Dostupno u izveštajima</b> kako bi se omogućilo da se polje koristi za filtere i za prikaz podataka u izveštajima.<br><br>Izaberite <b>Praćenje promena</b> kako bi mogli da pratite izmene u polju u Dnevniku promena.<br><br>Izaberite opciju <b>Za uvoz</b> da dozvolite, onemogućite ili zahtevate polje da se uveze pomoću Čarobnjaka za uvoz.<br><br>Izaberite opciju <b>Spajanje duplikata</b> da omogućite ili onemogućite funkciju spajanje duplikata i Pronalaženje duplikata.<br><br>Dodatna svojstva se mogu podesiti za određene vrste podataka.',
        'editField' => 'Svojstva ovog polja se mogu prilagoditi<br><br>Kliknite <b>Kloniraj</b> da bi kreirali novo polje sa istim svojstvima.',
        'mbeditField' => '<b>Labela za prikaz</b> šablona polja se može prilagoditi. Druga svojstva polja se ne mogu prilagođavati.<br><br>Kliknite <b>Kloniraj</b>da bi kreirali novo polje sa istim svojstvima.<br><br>Da bi uklonili šablon polje da se ne bi prikazivalo u modlulu, uklonite polje sa odgovarajućeg <b>Rasporeda</b>.'

    ),
    'exportcustom'=>array(
        'exportHelp'=>'Izvezite kastomizacija načinjene kroz Studio kreiranjem paketa koji mogu da se uvezu u drugu instancu  Sugar-a kroz <b>Modul Loader</b>.<br><br>Prvo unesite <b>Naziv paketa</b>. Možete uneti <b>Autora</b> i <b>Opis</b> za paket.<br><br>Odaberite modul(e) koji sadrže kastomizacije koje želite da izvezete. Samo moduli koji sadrže kastomizacije će se pojaviti za odabir.<br><br>Onda kliknite <b>Izvoz</b> da kreirate .zip fajl za paket koji sadrži kastomizacije.',
        'exportCustomBtn'=>'Kliknite <b>Izvoz</b> da kreirate .zip fajl za paket koji sadrži kastomizacije koje želite da izvezete.',
        'name'=>'Ovo je <b>Naziv</b> paketa. Ovaj naziv će se prikazati za vreme instalacije.',
        'author'=>'Ovo je <b>Autor</b> koji je prikazan za vreme instalacije kao ime entiteta koje je kreiralo paket. Autor može biti kako individua, tako i kompanija.',
        'description'=>'Ovo je <b>Opis</b> paketa koji je prikazan za vreme instalacije.',
    ),
    'studioWizard'=>array(
        'mainHelp' 	=> 'Dobrodošli u oblast <b>Razvojni alati</b>.<br><br>Koristite alate iz ove oblasti da upravljate standardnim i prilagođenim modulima i poljima.',
        'studioBtn'	=> 'Koristite <b>Studio</b> da prilagodite raspoređene module.',
        'mbBtn'		=> 'Koristite <b>Kreator modula</b> da bi kreirali nove module.',
        'sugarPortalBtn' => 'Koristite <b>Izmena Sugar Portal-a</b> da bi upravljali i prilagođavali Sugar Portal.',
        'dropDownEditorBtn' => 'Koristite <b>Izmena padajućih listi</b> da dodate i izmenite globalne padajuće liste i polja padajućih listi.',
        'appBtn' 	=> 'U modu aplikacije možete da prilagodite razna svojstva programa, kao što je koliko TRP izveštaja će se prikazati na početnoj stranici.',
        'backBtn'	=> 'Povratak na prethodni korak.',
        'studioHelp'=> 'Koristite <b>Studio</b> da odredite koje informacije i kako će se prikazati u modulima.',
        'studioBCHelp' => 'označava da je modul kompatibilan sa prethodnim izdanjima.',
        'moduleBtn'	=> 'Kliknite da izmenite ovaj modul.',
        'moduleHelp'=> 'Ovde su prikazane komponente koje možete da prilagodite za modul.<br><br>Kliknite na ikonu da odaberete komponentu za izmenu.',
        'fieldsBtn'	=> 'Kreirajte i prilagodite <b>Polja</b> da sačuvate informacije u modulu.',
        'labelsBtn' => 'Izmenite <b>Labele</b> koje se prikazuju za polja i druge naslove u modulu.'	,
        'relationshipsBtn' => 'Dodaj nove ili pregledaj postojeće <b>Veze</b> za modul.' ,
        'layoutsBtn'=> 'Prilagodite <b>Rasporede</b> modula.  Rasporedi su različiti pregledi polja koji se nalaze u modulu.<br><br>Možete odrediti koja polja se prikazuju i kako su organizovana u svakom rasporedu.',
        'subpanelBtn'=> 'Odredite koja polja se prikazuju u <b>Podpanelima</b> u modulu.',
        'portalBtn' =>'Prilagodite <b>Rasporede</b> modula koji se prikazuju u <b>Sugar Portal-u</b>.',
        'layoutsHelp'=> '<b>Rasporedi</b> modula koji mogu da se prilagode su prikazani ovde.<br><br>Rasporedi prikazuju polja i podatke polja.<br><br>Kliknite na ikonu da odaberete raspored za izmenu.',
        'subpanelHelp'=> '<b>Podpaneli</b> u modulu koji mogu da se prilagode su prikazani ovde.<br><br>Kliknite na ikonu da odaberete modul za izmenu.',
        'newPackage'=>'Kliknite <b>Novi paket</b> da bi kreirali novi paket.',
        'exportBtn' => 'Kliknite <b>Izvezi Prilagođavanja</b>da bi kreirali i preuzeli paket koji sadrži prilagođavanja napravljena u Studio-u za određene module.',
        'mbHelp'    => 'Koristite <b>Kreator modula</b> da bi kreirali pakete koji sadrže prilagođene module zasnovane na standardnim ili prilagođenim objektima.',
        'viewBtnEditView' => 'Prilagodite raspored <b>Pregled za izmenu</b> modula.<br><br>Pregled za izmenu je forma koja sadrži polja za unos za prikupljanje podataka koje je korisnik uneo.',
        'viewBtnDetailView' => 'Prilagodite raspored <b>Detaljan pregled</b> modula.<br><br>Detaljan pregled prikazuje podatke koje je korisnik uneo.',
        'viewBtnDashlet' => 'Prilagodite <b>Sugar Dashlet</b> u modulima, uključujući pregled u vidu liste i pretragu Sugar Dashleta.<br><br>Sugar Dashlet će biti dostupan za dodavanje na stranicu u modulu Početna strana.',
        'viewBtnListView' => 'Prilagodite <b>Pregled u vidu liste</b> raspored.<br><br>Rezultati pretrage se prikazuju u pregledu u vidu liste.',
        'searchBtn' => 'Prilagodite raspored <b>Pretrage</b>.<br><br>Odredite koja polja mogu da se koriste da bi se filtrirali zapisi koji se prikazuju u pregledu u vidu liste.',
        'viewBtnQuickCreate' =>  'Prilagodite raspored <b>Brzo kreiraj</b>.<br><br>Forma brzo kreiraj se pojavljuje na podpanelima i u modulu Email.',

        'searchHelp'=> 'Forme <b>Pretraga</b> ovde mogu da se prilagode.<br><br>Forme pretraga sadrže polja za filtriranje zapisa.<br><br>Kliknite na ikonicu da odaberete raspored pretrage za izmenu.',
        'dashletHelp' =>'Rasporedi <b>Sugar Dashlet-a</b> koji mogu da se prilagode se prikazuju ovde.<br><br>Sugar Dashlet će biti dostupan za dodavanje na stranama u modulu Početna strana.',
        'DashletListViewBtn' =>'<b>Sugar Dashlet pregled u vidu liste</b> prikazuje zapise zasnovane na filterima pretrage Sugar Dashlet-a.',
        'DashletSearchViewBtn' =>'Filtrirani zapisi <b>Sugar Dashlet Pretrage</b> za pregled u vidu liste Sugar Dashlet-a.',
        'popupHelp' =>'<b>Popup</b> rasporedi koji se mogu prilagoditi se prikazuju ovde.<br>',
        'PopupListViewBtn' => '<b>Popup pregled u vidu liste</b> prikazuje zapise zasnovane na Popup pretrazi.',
        'PopupSearchViewBtn' => '<b>Popup Pretraga</b> prikazuje zapise za Popup pregled u vidu liste.',
        'BasicSearchBtn' => 'Prilagodite formu <b>Osnovne pretrage</b> koja se prikazuje u kartici Osnovne pretrage u pretrazi modula.',
        'AdvancedSearchBtn' => 'Prilagodite formu <b>Napredne pretrage</b> koja se prikazuje u kartici Napredne pretrage u pretrazi modula.',
        'portalHelp' => 'Upravljajte i prilagodite <b>Sugar Portal</b>.',
        'SPUploadCSS' => 'Uvezite <b>Opis stilova</b> za Sugar Portal.',
        'SPSync' => '<b>Sinhronizujte</b> prilagođavanja Sugar Portal instance.',
        'Layouts' => 'Prilagodite <b>Rasporede</b> Sugar Portal modula.',
        'portalLayoutHelp' => 'Ovde su prikazani moduli Sugar Portala<br><br>Odaberite modul da izmenite <b>Rasporede</b>.',
        'relationshipsHelp' => 'Sve <b>Relacije</b> koje postoje između modula i drugih raspoređenih modula se pojavljuju ovde.<br><br><b>Ime</b> veze je sistemski generisano ime za vezu.<br><br><b>Osnovni Modul</b> je modul koji poseduje relaciju. Na primer, sva svojstva veze za koje je modul Kompanije primarni modul se čuvaju u tabeli Kompanije u bazi podataka.<br><br><b>Tip</b> je vrsta veze koja postoji između Primarnog modula i <b>Povezanog modula.</b><br><br>Kliknite na naslov kolone da bi ste sortirali po koloni.<br><br>Kliknite na red u vezanoj tabeli da bi ste prikazali svojstva u vezi sa relacijom.<br><br>Kliknite <b>Dodaj vezu</b> da kreirate novu vezu.<br><br>Veze mogu biti kreirane između bilo koja dva raspoređena modula.',
        'relationshipHelp'=>'<b>Relacije</b> se mogu kreirati između modula i drugog raspoređenog modula.<br><br>Relacije se vizuelno izražavaju kroz podpanele i vezana polja u zapisima modula.<br><br>Izaberite jednu od sledećih <b>Tipova</b> relacije za modul:<br><br><b>jedan-na-jedan</b> - evidencija oba modula će sadržati povezana polja <br><br><b>Jedan-na-više</b> - Primarni zapis modula će sadržati podpanel, i zapis povezanog modula će sadržati povezano polje.<br><br><b>Više-na-Više</ b> - Oba zapisa modula će prikazati podpanele.<br><br> Izaberite <b>Povezani modul</b> za relaciju.<br><br>Ako tip relacije podrazumeva podpanele, izaberite prikaz subpanela za odgovarajuće module.<br><br>Kliknite <b>Sačuvaj</b> da kreirate relaciju.',
        'convertLeadHelp' => "Ovde možete dodati module za konvertovanje rasporeda prikaza na ekranu i izmeniti rasporede postojećih. <br>Možete ponovo promeniti redosled modula povlačenjem njihovih redova u tabelu.<br><br><b> Modul: </b>Ime modula.<br><br><b>Obavezno:</b> Potrebni moduli moraju biti kreirani ili izabrani pre nego što potencijalni klijent može biti konvertovan.<br><br><b>Kopiranje podataka:</b> Ako je provereno, polja iz potencijalnog klijenta će biti kopirana u polja sa istim imenom u novonastalim zapisima.<br><br><b>Dozvolite Izbor:</b> Moduli sa vezanim poljima u kontaktima mogu biti izabrana umesto da budu kreirana tokom procesa konvertovanja potencijalnog klijenta.<br> <br><b> Izmena:</b> Izmeni konverziju rasporeda za ovaj modul<br><br><b> Obriši:</b> Ukloni ovaj modul iz konvertovanja rasporeda. <br><br>",
        'editDropDownBtn' => 'Izmeni globalnu padajuću listu',
        'addDropDownBtn' => 'Dodaj novu globalnu padajuću listu',
    ),
    'fieldsHelp'=>array(
        'default'=>'<b>Polja</b> koja su dostupna za modul su ovde navedena po Nazivu polja.<br><br>Šabloni polja podrazumevaju predefinisan set polja.<br><br>Da bi ste izmenili polje, kliknite na <b>Ime polja</b>.<br><br>Da bi ste kreirali novo polje, kliknite na dugme <b>Dodaj polje</b>.<br><br>Nakon raspoređivanja modula, nova polja koja su kreirana u Kreatoru modula, zajedno sa šablon poljima, se prihvataju kao standardna polja u Studio-u.',
    ),
    'relationshipsHelp'=>array(
        'default'=>'Sve <b>Relacije</b> koje su kreirane između modula i drugih raspoređenih modula se pojavljuju ovde.<br><br><b>Ime</b> veze je sistemski generisano ime za vezu.<br><br><b>Osnovni Modul</b> je modul koji poseduje relaciju. Svojstva veze se čuvaju u tabelama baze podataka koje pripadaju primarnom modulu.<br><br><b>Tip</b> je vrsta veze koja postoji između Primarnog modula i <b>Povezanog modula.</b><br><br>Kliknite na naslov kolone da bi ste sortirali po koloni.<br><br>Kliknite na red u vezanoj tabeli da bi ste prikazali i izmenili svojstva u vezi sa relacijom.<br><br>Kliknite <b>Dodaj vezu</b> da kreirate novu vezu.',
        'addrelbtn'=>'mišem preko pomoći za dodavanje veze.',
        'addRelationship'=>'<b>Relacije</b> se mogu kreirati između modula i drugog raspoređenog modula.<br><br>Relacije se vizuelno izražavaju kroz podpanele i vezana polja u zapisima modula.<br><br>Izaberite jednu od sledećih <b>Tipova</b> relacije za modul:<br><br><b>Jedan-na-jedan</b> - Evidencija oba modula će sadržati povezana polja <br><br><b>Jedan-na-više</b> - Primarni zapis modula će sadržati podpanel, i zapis povezanog modula će sadržati opovezano polje.<br><br><b>Više-na-Više</ b> - Oba zapisa modula će prikazati podpanele.<br><br> Izaberite <b>Povezani modul</b> za relaciju.<br><br>Ako tip relacije podrazumeva podpanele, izaberite prikaz podpanela za odgovarajuće module.<br><br>Kliknite <b>Sačuvaj</b> da kreirate relaciju.',
    ),
    'labelsHelp'=>array(
        'default'=> '<b>Labele</b> za polja i druge naslove se mogu promeniti.<br><br>Izmenite labelu klikom na polje, unosom nove labele i klikom na dugme <b>Sačuvaj</b>.<br><br>Ako je neki jezički paket instaliran u aplikaciji, možete odabrati <b>Jezik</b> za kortišćenje za labele.',
        'saveBtn'=>'Kliknite <b>Sačuvaj </b> da sačuvate sve promene.',
        'publishBtn'=>'Kliknite <b>Sačuvaj & Rasporedi</b> da bi ste sačuvali sve promene i da ih aktivirate.',
    ),
    'portalSync'=>array(
        'default' => 'Unesite <b>Sugar Portal URL</b> portal instance da bi je ažurirali, i kliknite na <b>Idi</b>.<br><br>Onda unesite validno korisničko ime i lozinku Sugara, i zatim kliknite <b>Započni sinhronizaciju</b>.<br><br>Načinjena prilagođavanja na <b>Rasporedima</b> Sugar portala, sve zajedno sa <b>Stilovima</b> ako su uvedeni, će biti prebačeni na određenu portal instancu.',
    ),
    'portalConfig'=>array(
           'default' => '',
       ),
    'portalStyle'=>array(
        'default' => 'Možete prilagoditi izgled Sugar Portala koristeći stilove.<br><br>Odaberite <b>Stil</b> za uvoz.<br><br>Sledeći put kada se izvrši sinhronizacija, stilovi će biti implementirani u Sugar portal.',
    ),
),

'assistantHelp'=>array(
    'package'=>array(
            //custom begin
            'nopackages'=>'Da bi započeli projekat, kliknite <b>Novi paket</b> da bi kreirali novi paket za prilagođeni modul. <br><br>Svaki paket može da sadrži jedan ili više modula.<br><br>Na primer, možda ćete želeti da kreirate paket koji sadrži jedan prilagođen modul koji je povezan sa standardnim modulom Kompanije. Ili ćete možda želeti da kreirate paket koji sadrži više novih modula koji zajedno rade kao projekat i koji su međusobno povezani i povezani sa drugim postojećim modulima u aplikaciji.',
            'somepackages'=>'<b>Paket</b> se ponaša kao kontejner za prilagođene module, i svi su deo jednog projekta. Paket može da sadrži jedan ili više prilagođenih <b>Modula</b> koji mogu biti povezani međusobno i sa drugim modulima u aplikaciji.<br><br>Nakon kreiranja paketa za projekat, možete odmah kreirati module paketa, ili se možete vratiti na Kreator modula kasnije, da kopmletirate projekat.<br><br>Kada je projekat završen, možete da <b>Rasporedite</b> paket da bi instalirali prilagođene module u aplikaciju.',
            'afterSave'=>'Vaš novi paket treba da sadrži bar jedan modul. Možete da kreirate jedan ili više prilagođenih modula za paket.<br><br>Kliknite <b>Novi modul</b> da bi kreirali prilagođeni modul za ovaj paket.<br><br> Nakon kreiranja bar jednog modula, možete objaviti i rasporediti paket da bi ga učinili dostupnim za vašu instancu ili instance drugih korisnika.<br><br> Da bi rasporedili paket u jednom koraku kroz vašu Sugar instancu, kliknite <b>Rasporedi</b>.<br><br>Kliknite <b>Objavi</b> da bi sačuvali paket kao .zip fajl. Kada je .zip fajl sačuvan na vaš sistem, koristite <b>Module Loader</b> da uvezete i instalirate paket kroz vašu Sugar instancu. <br><br>Možete da distribuirate fajl drugim korisnicima da mogu da uvezu i instaliraju kroz njihove Sugar instance.',
            'create'=>'<b>Paket</b> se ponaša kao kontejner za prilagođene module, i svi su deo jednog projekta. Paket može da sadrži jedan ili više prilagođenih <b>modula</b> koji mogu biti povezani međusobno i sa drugim modulima u aplikaciji.<br><br>Nakon kreiranja paketa za projekat, možete odmah kreirati module paketa, ili se možete vratiti na Kreator modula kasnije, da kopmletirate projekat.',
            ),
    'main'=>array(
        'welcome'=>'Koristite <b>Razvojne alate</b> da kreirate i upravljate standardnim i prilagođenim modulima i poljima. <br><br>Da bi upravljali modulima u aplikaciji, kliknite <b>Studio</b>. <br><br>Da bi kreirali prilagođeni modul, kliknite <b>Kreator modula</b>.',
        'studioWelcome'=>'Svi trenutno instalirani moduli, uključujući standardne i modul-učitane objekte, su prilagodljivi kroz Studio.'
    ),
    'module'=>array(
        'somemodules'=>"Obzirom da trenutni paket sadrži najmanje jedan modul, možete <b>Rasporediti</b> module u paketu kroz vašu Sugar instancu ili <b>Objaviti</b> paket da bi bio instaliran u trenutnoj Sugar instanci ili drugoj instanci koristeći <b>Module Loader</b>.<br><br>Da bi instalirali paket direktno kroz vašu Sugar instancu, kliknite <b>Rasporedi</b>.<br><br>Da bi kreirali .zip fajl za paket da bi mogao da se učita i instalira kroz tekuću Sugar instancu i druge instance koristeći <b>Module Loader</b>, kliknite <b>Objavi</b>.<br><br>Možete da kreirate module za ovaj paket u fazama, i objaviti ili rasporediti kada su spremni za to. <br><br>Nakon objavljivanja i raspoređivanja paketa, možete da menjate svojstva paketa i prilagođavate modul dalje. Onda ponovo objavite i ponovo rasporedite paket da bi se primenile promene." ,
        'editView'=> 'Ovde možete da izmenite postojeća polja. Možete da uklonite bilo koje postojeće polje ili dodate dostupna polja na levom panelu.',
        'create'=>'Pri odabiru <b>Tipa</b> modula koji želite da kreirate, imajte na umu tipove polja koje želite da imate u modulu. <br><br>Svaki šablon modula sadrži set polja koja se odnose na tip modula opisan u naslovu.<br><br><b>Osnovno</b> - Obezbeđuje osnovna polja koja se pojavljuju u standardnim modulima, kao što su Ime, Dodeljeno, Tim, Datum kreiranja i Opis.<br><br> <b>Kompanija</b> - Obezbeđuje organizaciono-specifična polja kao što je Naziv kompanije, Industrija, Adresa naplate. Koristite ovaj šablon da kreirate module koji su slični stadardnom modulu Kompanije.<br><br> <b>Osoba</b> - Obezbeđuje individualno-specifična polja, kao što je pozdrav, Titula, Ime, Adresa i Broj telefona. Koristite ovaj šablon da kreirate module koji su slični stadardnom modulu Kontakti i Potencijalni klijenti.<br><br><b>Problemi</b> - Obezbeđuje slučaj- i defekt-specifična polja, kao što je broj, Status, Prioritet i Opis. Koristite ovaj šablon da kreirate module koji su slični stadardnom modulu Slučajevi i Praćenje defekata.<br><br>Beleška: Nakon kreiranja modula, možete da izmenite labele polja koje su obezbeđene šablonom, kao i da kreirate prilagođena polja da bi ih dodali na raspored modula.',
        'afterSave'=>'Prilagodite modul prema svojim potrebama, izmenom i kreiranjem polja, kreiranjem veza sa drugim modulima i uređivanjem polja kroz rasporede.<br><br>Da bi videli šablone polja i upravljali prilagođenim poljima kroz modul, kliknite <b>Pregled polja</b>.<br><br>Da bi kreirali i upravljali relacijama između modula i i drugih modula, bilo da su moduli već u aplikaciji ili drugim prilagođenim modulima kroz isti paket, kliknite <b>Pregled veza</b>.<br><br>Da bi izmenili raspored modula, kliknite <b>Pregled rasporeda</b>. Možete da izmenite Detaljan pregled, Pregled za izmenu i Pregled u vidu liste, za modul isto kao što bi za module koji već postoje u aplikaciji kroz Studio.<br><br> Da bi kreirali modul sa istim svojstvima kao i tekući modul, kliknite <b>Duplciraj</b>. Dalje možete prilagođavati novi modul.',
        'viewfields'=>'Polja u modulu možete prilagođavati prema svojim potrebama.<br><br>Ne možete brisati standardna polja, ali ih možete ukloniti sa odgovarajućeg rasporeda kroz strane rasporeda. <br><br>Možete brzo kreirati nova polja koja imaju slična svojstva postojećim klikom na <b>Kloniraj</b> u formi <b>Svojstva</b>.  Unesite neko novo svojstvo, a onda kliknite <b>Sačuvaj</b>.<br><br>Preporučuje se da podesite sva svojstva za standardna polja i prilagođema polja pre nego što objavite i instalirate paket koji sadrži prilagođen modul.',
        'viewrelationships'=>'Možete da kreirate vezu više-na-više između tekućeg modula i drugih modula u paketu, i između tekućeg modula i modula koji su već instalirani u aplikaciji.<br><br>Da bi kreirali jedan-na-više i jedan-na-jedan veze, kreirajte polja <b>Veza</b> i <b>Fleksibilna veza</b> za module.',
        'viewlayouts'=>'Možete konstrolisati koja polja su dostupna za preuzimanje podataka kroz <b>Pregled za izmenu</b>. Možete takođe da kontrolišete podatke koji se prikazuju kroz <b>Detaljan pregled</b>. Pregledi nemaju podudaranja. <br><br>Forma za brzo kreiranje je prikazana kada je kliknuto na <b>Kreiraj</b> u podpanelu modula. Podrazumevano, raspored forme <b>Brzo kreiraj</b> je isti kao i podarazumevani raspored <b>Pregled za izmenu</b>. Možete da prilagodite formu Brzog kreiranja tako da sadrži manje ili različita polja nego raspored pregleda za izmenu.<br><br>Možete da odredite sigurnost modula koristeći prilagođavanja rasporeda kroz <b>Upravljanje ulogama</b>.<br><br>',
        'existingModule' =>'Nakon kreiranja i prilagođavanja ovog modula, možete da kreirate dodatne module ili da se vratite u paket da bi ga <b>Objavili</b> ili <b>Rasporedili</b>.<br><br>Da bi kreirali dodatne module, kliknite <b>Dupliciraj</b> da bi kreirali modul sa istim svojstvima kao i tekući modul, ili se vratite nazad na paket i kliknite <b>Novi modul</b>.<br><br> Ako ste spremni da <b>Objavite</b> ili <b>Rasporedite</b> paket u kom se nalazi ovaj modul, vratite se nazad na paket da bi izvršili ove funkcije. Možete da objavite i rasporedite pakete koji sadrže najmanje jedan modul.',
        'labels'=> 'Mogu da se promene labele standardnih polja, kao i prilagođenih polja. Menjanje labela polja neće uticati na podatke sačuvane u poljima.',
    ),
    'listViewEditor'=>array(
        'modify'	=> 'Levo su prikazane tri kolone. "Podrazumevana" kolona sadrži polja koja su podrazumevano prikazana u pregledu u vidu liste, "Dostupna" kolona sadrži polja koja korisnik može da odabere za kreiranje u prilagođenom pregledu u vidu liste, i "Skrivena" kolona sadrži polja koja su vam dostupna kao administratoru da ih ili dodate podrazumevanim ili dostupnim kolonama koje će koristiti korisnici i koja su trenutno onemogućena.',
        'savebtn'	=> 'Klikom <b>Sačuvaj</b> će sačuvati sve promene i učiniti ih aktivnim.',
        'Hidden' 	=> 'Skrivena polja su polja koja trenutno nisu dostupna korisnicima za korišćenje za pregled u vidu listi.',
        'Available' => 'Dostupna polja su polja koja se podrazumevano ne prikazuju, ali korisnici mogu da ih omoguće.',
        'Default'	=> 'Podrazumevana polja su prikazana korisnicima koji nisu kreirali podešavanja prilagođenog pregleda u vidu liste.'
    ),

    'searchViewEditor'=>array(
        'modify'	=> 'Levo su prikazane dve kolone. "Podrazumevana" kolona sadrži polja koja će biti prikazana na pregled pretrage i "Skrivena" kolona sadrži polja koja su vam dostupna kao administratoru da ih dodate na pregled pretrage.',
        'savebtn'	=> 'Kliknite <b>Sačuvaj & Rasporedi</b> da bi ste sačuvali promene koje ste napravili i da ih učinite aktivnim u modulu.',
        'Hidden' 	=> '<b>Skrivena</b> polja koja trenutno nisu dostupna u Pretrazi.',
        'Default'	=> '<b>Podrazumevana</b> polja se pojavljuju u Pretrazi.'
    ),
    'layoutEditor'=>array(
        'default'	=> 'Levo su prikazane dve kolone. Desna kolona, nazvana Trenutni raspored ili Pregled rasporeda, je mesto gde menjate raspored modula. Leva kolona, pod nazivom Set alata sadrži korisne elemente i alate koje možete korititi pri izmeni rasporeda.<br><br>Ako je oblast rasporeda nazvana Trenutni raspored, onda radite na kopiji rasporeda koji trenutno koristi modul za prikaz.<br><br>Ako je oblast rasporeda nazvana Pregled rasporeda, onda radite na kopiji kreiranoj ranije klikom na dugme Sačuvaj, i koja je možda već promenjena nakon verzije koju su videli korisnici u ovom modulu.',
        'saveBtn'	=> 'Klikom na ovo dugme čuvate raspored tako da bi sačuvali promene. Kada se vratite na ovaj modul možete da nastavite promene rasporeda. Drugi korisnici modula neće moći da vide raspored dok ne kliknete Saćuvaj i Rasporedi.',
        'publishBtn'=> 'Kliknite ovo dugme da bi rasporedili. Ovo zanči da će drugi korisnici moći trenutno da vide raspored u ovom modulu.',
        'toolbox'	=> 'Set alata sadrži razne korisne funkcionalnosti za izmenu rasporeda, uključujući oblast otpad, i set dodatnih elemenata i set dostupnih polja. Svaki od njih se mogu prevući i spustiti na raspored.',
        'panels'	=> 'Ova oblast prikazuje kako će raspored izgledati korisnicima ovog modula kada se rasporedi.<br><br>Možete pomeriti elemente kao što su polja, redovi i paneli prevlačenjem i spuštanjem; brisati elemente prevlačenjem i spuštanjem u oblast za otpad u setu alata, ili dodavati nove elemente prevlačenjem sa seta alata i spuštanjem na raspored na željeno mesto.'
    ),
    'dropdownEditor'=>array(
        'default'	=> 'Levo su prikazane dve kolone. Desna kolona, nazvana Trenutni raspored ili Pregled rasporeda, je mesto gde menjate raspored modula. Leva kolona, pod nazivom Set alata sadrži korisne elemente i alate koje možete korititi pri izmeni rasporeda.<br><br>Ako je oblast rasporeda nazvana Trenutni raspored, onda radite na kopiji rasporeda koji trenutno koristi modul za prikaz.<br><br>Ako je oblast rasporeda nazvana Pregled rasporeda, onda radite na kopiji kreiranoj ranije klikom na dugme Sačuvaj, i koja je možda već promenjena nakon verzije koju su videli korisnici u ovom modulu.',
        'dropdownaddbtn'=> 'Klikom na ovo dugme dodajete novu stavku u padajuću listu.',

    ),
    'exportcustom'=>array(
        'exportHelp'=>'Kastomizacije načinjene kroz Studio kroz ovu instancu mogu da se spakuju i rasporede u drugu instancu.  <br><br>Prvo unesite <b>Naziv paketa</b>. Možete uneti <b>Autora</b> i <b>Opis</b> za paket.<br><br>Odaberite modul(e) koji sadrže kastomizacije koje želite da izvezete. Samo moduli koji sadrže kastomizacije će se pojaviti za odabir.<br><br>Onda kliknite <b>Izvoz</b> da kreirate .zip fajl za paket koji sadrži kastomizacije.',
        'exportCustomBtn'=>'Kliknite <b>Izvoz</b> da kreirate .zip fajl za paket koji sadrži kastomizacije koje želite da izvezete.',
        'name'=>'<b>Naziv</b> paketa će se prikazati pri učitavanju modula nakon što se paket uveze za instaliranje u Studio.',
        'author'=>'Ovo je <b>Autor</b> koji je prikazan za vreme instalacije kao ime entiteta koje je kreiralo paket. Autor može biti kako individua, tako i kompanija.<br><br>Autor će biti prikazan pri učitavanju modula nakon što se paket uveze za instaliranje u Studio.',
        'description'=>'<b>Opis</b> paketa će biti prikazan pri učitavanju modula nakon što se paket uveze za instalaciju u Studio-u.',
    ),
    'studioWizard'=>array(
        'mainHelp' 	=> 'Dobrodošli u oblast <b>Razvojni alati</b>.<br><br>Koristite alate iz ove oblasti da kreirate i upravljate standardnim i prilagođenim modulima i poljima.',
        'studioBtn'	=> 'Koristite <b>Studio</b> da prilagodite instalirane module promenom argumenata polja, odabirom koja polja su dostupna i kreiranjem prilagođenih polja.',
        'mbBtn'		=> 'Koristite <b>Kreator modula</b> da bi kreirali nove module.',
        'appBtn' 	=> 'U modu aplikacije možete da prilagodite razna svojstva programa, kao što je koliko TRP izveštaja će se prikazazi na početnoj stranici.',
        'backBtn'	=> 'Povratak na prethodni korak.',
        'studioHelp'=> 'Koristite <b>Studio</b> da prilagodite instalirane module.',
        'moduleBtn'	=> 'Kliknite da izmenite ovaj modul.',
        'moduleHelp'=> 'Izaberite komponentu modula koju želite da promenite.',
        'fieldsBtn'	=> 'Izmenite koje informacije se čuvaju u modulu kontrolišući <Polja</b> u modulu.<br><br>Možete da izmenite i dodate prilagođena polja ovde.',
        'layoutsBtn'=> 'Prilagodite <b>Rasporede</b> pregleda za izmenu, detaljan pregled, pregled u vidu liste i pretragu.',
        'subpanelBtn'=> 'Izmenite informacije koje se prikazuju u podpanelima modula.',
        'layoutsHelp'=> 'Odaberite <b>Rasored za izmenu</b>.<br><br>Da bi izmenili raspored koji sadrži polja sa podacima za unos podataka, kliknite <b>Pregled za izmenu</b>.<br><br>Da bi izmenili raspored koji prikazuje podatke unesene u polja u Pregledu za izmenu, kliknite <b>Detaljan pregled</b>.<br><br>Da bi promenili kolone koje se pojavljuju na podrazumevanoj listi, kliknite <b>Pregled u vidu liste</b>.<br><br>Da bi promenili raspored formi za osnovnu i naprednu pretragu, kliknite <b>Pretraga</b>.',
        'subpanelHelp'=> 'Odaberite Podpanel za izmenu.',
        'searchHelp' => 'Odaberite raspored pretrage a izmenu.',
        'labelsBtn'	=> 'Uredite <b>oznake</b> za prikaz vrednosti u ovom modulu.',
        'newPackage'=>'Kliknite <b>Novi paket</b> da bi kreirali novi paket.',
        'mbHelp'    => '<b>Dobrodošli u kreator modula.</b><br><br>Koristite <b>Kreator modula</b> da bi kreirali pakete koji sadrže prilagođene module zasnovane na standardnim ili prilagođenim objektima. <br><br>Da počnete, kliknite <b>Novi paket</b> da bi kreirali novi paket ili odabrali paket za izmenu.<br><br><b>Paket</b> se ponaša kao kontejner za prilagođene module, i svi su deo jednog projekta. Paket može da sadrži jedan ili više prilagođenih <b>modula</b> koji mogu biti povezani međusobno i sa drugim modulima u aplikaciji. <br><br>Na primer, možda ćete želeti da kreirate paket koji sadrži jedan prilagođen modul koji je povezan sa standardnim modulom Kompanije. Ili ćete možda želeti da kreirate paket koji sadrži više novih modula koji zajedno rade kao projekat i koji su međusobno povezani i povezani sa drugim postojećim modulima u aplikaciji.',
        'exportBtn' => 'Kliknite <b>Izvezi Prilagođavanja</b> da bi kreirali i preuzeli paket koji sadrži prilagođavanja napravljena u Studio-u za određene module.',
    ),

),
//HOME
'LBL_HOME_EDIT_DROPDOWNS'=>'Editor padajućih listi',

//ASSISTANT
'LBL_AS_SHOW' => 'U budućnosti pokaži asistenta.',
'LBL_AS_IGNORE' => 'U budućnosti ignoriši asistenta.',
'LBL_AS_SAYS' => 'Asistent kaže:',

//STUDIO2
'LBL_MODULEBUILDER'=>'Kreator modula',
'LBL_STUDIO' => 'Studio',
'LBL_DROPDOWNEDITOR' => 'Editor padajućih listi',
'LBL_EDIT_DROPDOWN'=>'Izmeni padajuću listu',
'LBL_DEVELOPER_TOOLS' => 'Razvojni alati',
'LBL_SUGARPORTAL' => 'Editor Sugar portala',
'LBL_SYNCPORTAL' => 'Sinhonizacija portala',
'LBL_PACKAGE_LIST' => 'Lista paketa',
'LBL_HOME' => 'Početna strana',
'LBL_NONE'=>'-- nema --',
'LBL_DEPLOYE_COMPLETE'=>'Raspoređivanje završeno',
'LBL_DEPLOY_FAILED'   =>'Desila se greška tokom procesa raspoređivanja, Vaš paket se možda nije instalirao ispravno.',
'LBL_ADD_FIELDS'=>'Dodaj prilagođena polja',
'LBL_AVAILABLE_SUBPANELS'=>'Dostupni podpaneli',
'LBL_ADVANCED'=>'Napredno',
'LBL_ADVANCED_SEARCH'=>'Napredna pretraga',
'LBL_BASIC'=>'Osnovno',
'LBL_BASIC_SEARCH'=>'Osnovna pretraga',
'LBL_CURRENT_LAYOUT'=>'Raspored',
'LBL_CURRENCY' => 'Valuta',
'LBL_CUSTOM' => 'Prilagođen',
'LBL_DASHLET'=>'Sugar dašlet',
'LBL_DASHLETLISTVIEW'=>'Pregled Sugar dašleta u vidu liste',
'LBL_DASHLETSEARCH'=>'Pretraga Sugar dašleta',
'LBL_POPUP'=>'Popup pregled',
'LBL_POPUPLIST'=>'Pregled popup-a u vidu liste',
'LBL_POPUPLISTVIEW'=>'Pregled popup-a u vidu liste',
'LBL_POPUPSEARCH'=>'Pretraga popup-a',
'LBL_DASHLETSEARCHVIEW'=>'Pretraga Sugar dašleta',
'LBL_DISPLAY_HTML'=>'Prikaži HTML kod',
'LBL_DETAILVIEW'=>'Pregled detalja',
'LBL_DROP_HERE' => '[Spusti ovde]',
'LBL_EDIT'=>'Izmeni',
'LBL_EDIT_LAYOUT'=>'Izmeni raspored',
'LBL_EDIT_ROWS'=>'Izmeni redove',
'LBL_EDIT_COLUMNS'=>'Izmeni kolone',
'LBL_EDIT_LABELS'=>'Izmeni labele',
'LBL_EDIT_PORTAL'=>'Izmeni portal za',
'LBL_EDIT_FIELDS'=>'Izmeni polja',
'LBL_EDITVIEW'=>'Pregled za izmenu',
'LBL_FILTER_SEARCH' => "Pretraga",
'LBL_FILLER'=>'(prazno)',
'LBL_FIELDS'=>'Polja',
'LBL_FAILED_TO_SAVE' => 'Čuvanje nije uspelo',
'LBL_FAILED_PUBLISHED' => 'Objavljivanje nije uspelo',
'LBL_HOMEPAGE_PREFIX' => 'Moja',
'LBL_LAYOUT_PREVIEW'=>'Prikaz rasporeda',
'LBL_LAYOUTS'=>'Rasporedi',
'LBL_LISTVIEW'=>'Pregled u vidu liste',
'LBL_RECORDVIEW'=>'Pregled zapisa',
'LBL_RECORDDASHLETVIEW'=>'Dašlet prikaza zapisa',
'LBL_PREVIEWVIEW'=>'Preview View',
'LBL_MODULE_TITLE' => 'Studio',
'LBL_NEW_PACKAGE' => 'Novi paket',
'LBL_NEW_PANEL'=>'Novi panel',
'LBL_NEW_ROW'=>'Novi red',
'LBL_PACKAGE_DELETED'=>'Obrisani paket',
'LBL_PUBLISHING' => 'Objavljivanje...',
'LBL_PUBLISHED' => 'Objavljen',
'LBL_SELECT_FILE'=> 'Izaberite fajl',
'LBL_SAVE_LAYOUT'=> 'Sačuvaj raspored',
'LBL_SELECT_A_SUBPANEL' => 'Izaberite podpanel',
'LBL_SELECT_SUBPANEL' => 'Izaberite podpanel',
'LBL_SUBPANELS' => 'Podpaneli',
'LBL_SUBPANEL' => 'Podpaneli',
'LBL_SUBPANEL_TITLE' => 'Naslov:',
'LBL_SEARCH_FORMS' => 'Pretraga',
'LBL_STAGING_AREA' => 'Oblast za postavljanje (prevuci i spusti elemente ovde)',
'LBL_SUGAR_FIELDS_STAGE' => 'Sugar polja (kliknite na elemente da bi ga dodali u oblast za postavljanje)',
'LBL_SUGAR_BIN_STAGE' => 'Sugar bin (kliknite na elemente koje želite da dodate u oblast za postavljanje)',
'LBL_TOOLBOX' => 'Set alata',
'LBL_VIEW_SUGAR_FIELDS' => 'Pregled Sugar polja',
'LBL_VIEW_SUGAR_BIN' => 'Pregled Sugar bin-a',
'LBL_QUICKCREATE' => 'Brzo kreiraj',
'LBL_EDIT_DROPDOWNS' => 'Izmeni globalnu padajući meni',
'LBL_ADD_DROPDOWN' => 'Dodaj novi globalni padajući meni',
'LBL_BLANK' => '-prazno-',
'LBL_TAB_ORDER' => 'Redosled kartica',
'LBL_TAB_PANELS' => 'Prikaži panele kao kartice',
'LBL_TAB_PANELS_HELP' => 'Prikaži svaki panel na svojoj kartici umesto da se svi prikazuju na jednom ekranu',
'LBL_TABDEF_TYPE' => 'Tip prikaza:',
'LBL_TABDEF_TYPE_HELP' => 'Odaberite kako će ova sekcija biti prikazana. Ova opcija je validna samo ukoliko ste omogućili tabove na ovom pogledu.',
'LBL_TABDEF_TYPE_OPTION_TAB' => 'Tabulator',
'LBL_TABDEF_TYPE_OPTION_PANEL' => 'Pano',
'LBL_TABDEF_TYPE_OPTION_HELP' => 'Odaberite Pano da bi ovaj pano bio prikazan u okviru pogleda prikaza. Odaberite Tab da bi ovaj pano bio prikazan u odvojenom tabu u okviru prikaza. Kada je Tab određen za pano, u okviru njega će biti prikazani svi sledeći panoi. Novi tab će biti pokrenut za sledeći pano za koji je odabrana opcija Tab. Ako je opcija Tab odabrana za pano ispod prvog panoa, prvi pano će morati da bude Tab.',
'LBL_TABDEF_COLLAPSE' => 'Sakrij',
'LBL_TABDEF_COLLAPSE_HELP' => 'Odaberi da podrazumevano stanje ovog panoa bude "sakriven".',
'LBL_DROPDOWN_TITLE_NAME' => 'Naziv',
'LBL_DROPDOWN_LANGUAGE' => 'Jezik',
'LBL_DROPDOWN_ITEMS' => 'Elementi liste',
'LBL_DROPDOWN_ITEM_NAME' => 'Naziv elementa',
'LBL_DROPDOWN_ITEM_LABEL' => 'Prikaži labelu',
'LBL_SYNC_TO_DETAILVIEW' => 'Sinhornizacija Pregleda detalja',
'LBL_SYNC_TO_DETAILVIEW_HELP' => 'Odaberite ovu opciju da bi ste sinhronizovali izgled Pregleda za izmenu sa izgledom odgovarajućeg Pregleda detalja. Polja i njihova mesta na Pregledu za izmenu će biti sinhronizovana i sačuvana automatski na Pregledu detalja kada se klikne na Sačuvaj ili Sačuvaj i rasporedi na Pregledu za izmenu. Promene izgleda neće biti moguće vršiti u Pregledu detalja.',
'LBL_SYNC_TO_DETAILVIEW_NOTICE' => 'Ovaj Pregled detalja je sinhronizovan sa odgovarajućim Pregledom za izmenu. Polja i njihova mesta na ovom Pregledu detalja su odraz polja i njihovih mesta na Pregledu za izmenu. Promene na Pregledu detalja ne mogu da se sačuvaju ili rasporede unutar ove stranice. Napravite promene ili desinhronizujte izglede u Pregledu za izmenu.',
'LBL_COPY_FROM' => 'Kopiraj vrednost iz',
'LBL_COPY_FROM_EDITVIEW' => 'Kopiraj iz Pregleda za izmenu',
'LBL_DROPDOWN_BLANK_WARNING' => 'Vrednosti su obavezne i za naziv elementa i za prikaz labele. Da biste dodali prazan element, kliknite na dugme Dodaj bez unošenja bilo vrednosti za Naziv, bilo za prikaz labele.',
'LBL_DROPDOWN_KEY_EXISTS' => 'Ključ već postoji u listi',
'LBL_DROPDOWN_LIST_EMPTY' => 'Lista mora sadržati maka jednu dostupnu stavku',
'LBL_NO_SAVE_ACTION' => 'Ovaj pogled nije moguće sačuvati.',
'LBL_BADLY_FORMED_DOCUMENT' => 'Studio2:establishLocation: loše formatiran dokument',
// @TODO: Remove this lang string and uncomment out the string below once studio
// supports removing combo fields if a member field is on the layout already.
'LBL_INDICATES_COMBO_FIELD' => '** Obeležava kombinovano polje. Kombinovano polje je sastavljeno od pojedinačnih polja. Na primer, "Adresa" je kombinovano polje koje sadrži polja "Ulica", "Grad", "Poštanski kod" i "Republika" i "Država".<br><br>Kliknite dva puta na kombinovano polje da vidite od kojih polja se sastoji.',
'LBL_COMBO_FIELD_CONTAINS' => 'sadrži:',

'LBL_WIRELESSLAYOUTS'=>'Raspored za mobilne uređaje',
'LBL_WIRELESSEDITVIEW'=>'Pogled za izmenu za mobilne uređaje',
'LBL_WIRELESSDETAILVIEW'=>'Pregled detalja za mobilne uređaje',
'LBL_WIRELESSLISTVIEW'=>'Pregled u vidu liste za mobilne uređaje',
'LBL_WIRELESSSEARCH'=>'Pretraga za mobilne uređaje',

'LBL_BTN_ADD_DEPENDENCY'=>'Dodaj zavisnost',
'LBL_BTN_EDIT_FORMULA'=>'Izmeni formulu',
'LBL_DEPENDENCY' => 'Zavisnost',
'LBL_DEPENDANT' => 'Zavisno',
'LBL_CALCULATED' => 'Izračunata vrednost',
'LBL_READ_ONLY' => 'Samo za čitanje',
'LBL_FORMULA_BUILDER' => 'Kreator formule',
'LBL_FORMULA_INVALID' => 'Nevažeća formula',
'LBL_FORMULA_TYPE' => 'Formula mora biti tipa',
'LBL_NO_FIELDS' => 'Nema pronađenih polja',
'LBL_NO_FUNCS' => 'Nema pronađenih funkcija',
'LBL_SEARCH_FUNCS' => 'Pretraga funkcija...',
'LBL_SEARCH_FIELDS' => 'Pretraga polja...',
'LBL_FORMULA' => 'Formula',
'LBL_DYNAMIC_VALUES_CHECKBOX' => 'Zavisno',
'LBL_DEPENDENT_DROPDOWN_HELP' => 'Prevucite opcije iz leve liste dostupnih opcija u listu sa desne strane kako bi ove opcije bile dostupne kad se odabere opcija roditelj. Ako opcija roditelj nema podopcija, kada je odabran, neće biti prikazan padajući meni sa podopcijama.',
'LBL_AVAILABLE_OPTIONS' => 'Dostupne opcije',
'LBL_PARENT_DROPDOWN' => 'Padajuća lista nadređenih',
'LBL_VISIBILITY_EDITOR' => 'Uređivač vidljivosti',
'LBL_ROLLUP' => 'Udružen',
'LBL_RELATED_FIELD' => 'Srodno polje',
'LBL_PORTAL_ROLE_DESC' => 'Nemojte brisati ovu rolu. Uloga "Customer Self-Service Portal" je sistemski generisana uloga, nastala za vreme aktivacionog procesa Sugar Portala. Koristite kontrole pristupa u okviru ove uloge da omogućite ili onemogućite module za Bagove, Slučajeve i Bazu znanja u okviru Sugar portala. Nemojte modifikovati bilo koje druge kontrole pristupa za ovu ulogu kako biste izbegli nepredviđeno ponašanje sistema. U slučaju nenamernog brisanja ove uloge, ponovo je kreirate onemogućavanjem i ponovnim omogućavanjem Sugar portala.',

//RELATIONSHIPS
'LBL_MODULE' => 'Modul',
'LBL_LHS_MODULE'=>'Primarni modul',
'LBL_CUSTOM_RELATIONSHIPS' => '* veza kreirana u Studo-u',
'LBL_RELATIONSHIPS'=>'Veze',
'LBL_RELATIONSHIP_EDIT' => 'Izmeni vezu',
'LBL_REL_NAME' => 'Naziv',
'LBL_REL_LABEL' => 'Labela',
'LBL_REL_TYPE' => 'Tip',
'LBL_RHS_MODULE'=>'Povezani modul',
'LBL_NO_RELS' => 'Nema veza',
'LBL_RELATIONSHIP_ROLE_ENTRIES'=>'Opcioni uslov' ,
'LBL_RELATIONSHIP_ROLE_COLUMN'=>'Kolona',
'LBL_RELATIONSHIP_ROLE_VALUE'=>'Vrednost',
'LBL_SUBPANEL_FROM'=>'Podpanel za',
'LBL_RELATIONSHIP_ONLY'=>'Nema vidljivih elemenata koji će biti kreirani za ovu vezu kao da već postoji vidljiva veza između ova dva modula.',
'LBL_ONETOONE' => 'Jedan na jedan',
'LBL_ONETOMANY' => 'Jedan na više',
'LBL_MANYTOONE' => 'Više na jedan',
'LBL_MANYTOMANY' => 'Više na više',

//STUDIO QUESTIONS
'LBL_QUESTION_FUNCTION' => 'Odaberi funkciju ili komponentu.',
'LBL_QUESTION_MODULE1' => 'Odaberite modul.',
'LBL_QUESTION_EDIT' => 'Odaberite modul koji želite da izmenite.',
'LBL_QUESTION_LAYOUT' => 'Odaberite izgled koji želite da izmenite.',
'LBL_QUESTION_SUBPANEL' => 'Odaberite podpanel koji želite da izmenite.',
'LBL_QUESTION_SEARCH' => 'Odaberite izgled pretrage koji želite da izmenite.',
'LBL_QUESTION_MODULE' => 'Odaberite komponentu modula koju želite da izmenite.',
'LBL_QUESTION_PACKAGE' => 'Odaberite paket koji želite da izmenite, ili kreirajte novi paket.',
'LBL_QUESTION_EDITOR' => 'Odaberite alat.',
'LBL_QUESTION_DROPDOWN' => 'Izaberite padajuću listu koju želite da izmenite, ili kreirajte novu.',
'LBL_QUESTION_DASHLET' => 'Izaberite izgled dašleta koji želite da izmenite.',
'LBL_QUESTION_POPUP' => 'Izaberite izgled popup-a koji želite da izmenite.',
//CUSTOM FIELDS
'LBL_RELATE_TO'=>'Poveži sa',
'LBL_NAME'=>'Naziv',
'LBL_LABELS'=>'Labele',
'LBL_MASS_UPDATE'=>'Masovno ažuriranje',
'LBL_AUDITED'=>'Praćenje promena',
'LBL_CUSTOM_MODULE'=>'Modul',
'LBL_DEFAULT_VALUE'=>'Podrazumevana vrednost',
'LBL_REQUIRED'=>'Zahtevano',
'LBL_DATA_TYPE'=>'Tip',
'LBL_HCUSTOM'=>'PRILAGOĐEN',
'LBL_HDEFAULT'=>'PODRAZUMEVAN',
'LBL_LANGUAGE'=>'Jezik:',
'LBL_CUSTOM_FIELDS' => '* polje kreirano u Studiju',

//SECTION
'LBL_SECTION_EDLABELS' => 'Izmeni labele',
'LBL_SECTION_PACKAGES' => 'Paketi',
'LBL_SECTION_PACKAGE' => 'Paket',
'LBL_SECTION_MODULES' => 'Moduli',
'LBL_SECTION_PORTAL' => 'Portal',
'LBL_SECTION_DROPDOWNS' => 'Padajuće liste',
'LBL_SECTION_PROPERTIES' => 'Svojstva',
'LBL_SECTION_DROPDOWNED' => 'Izmeni padajuću listu',
'LBL_SECTION_HELP' => 'Pomoć',
'LBL_SECTION_ACTION' => 'Akcija',
'LBL_SECTION_MAIN' => 'Glavno',
'LBL_SECTION_EDPANELLABEL' => 'Izmeni labelu panela.',
'LBL_SECTION_FIELDEDITOR' => 'Izmeni polje',
'LBL_SECTION_DEPLOY' => 'Raporedi',
'LBL_SECTION_MODULE' => 'Modul',
'LBL_SECTION_VISIBILITY_EDITOR'=>'Izmeni vidljivost',
//WIZARDS

//LIST VIEW EDITOR
'LBL_DEFAULT'=>'Podrazumevano',
'LBL_HIDDEN'=>'Sakriven',
'LBL_AVAILABLE'=>'Dostupno',
'LBL_LISTVIEW_DESCRIPTION'=>'Ispod su prikazane tri kolone. <b>Podrazumevana</b> kolona sadrži polja koja su prikazana u listi pregleda kao podrazumevana. <b>Dodatna</b> kolona sadrži polja koja korisnik može da izabere da koristi za kreiranje prilagođenog izgleda. <b>Dostupna</b> kolona sadrži polja koja su na raspolaganju da ih koristi administrator da ih doda u podrazumevanu ili dodatnu kolonu za korišćenje korisnicima ali se te kolone trenutno ne koriste.',
'LBL_LISTVIEW_EDIT'=>'Editor pregleda u vidu liste',

//Manager Backups History
'LBL_MB_PREVIEW'=>'Pregled',
'LBL_MB_RESTORE'=>'Obnovi',
'LBL_MB_DELETE'=>'Obriši',
'LBL_MB_COMPARE'=>'Uporedi',
'LBL_MB_DEFAULT_LAYOUT'=>'Podrazumevani raspored',

//END WIZARDS

//BUTTONS
'LBL_BTN_ADD'=>'Dodaj',
'LBL_BTN_SAVE'=>'Sačuvaj',
'LBL_BTN_SAVE_CHANGES'=>'Sačuvaj promene',
'LBL_BTN_DONT_SAVE'=>'Odbaci promene',
'LBL_BTN_CANCEL'=>'Otkaži',
'LBL_BTN_CLOSE'=>'Zatvori',
'LBL_BTN_SAVEPUBLISH'=>'Sačuvaj i rasporedi',
'LBL_BTN_NEXT'=>'Sledeći',
'LBL_BTN_BACK'=>'Nazad',
'LBL_BTN_CLONE'=>'Kloniraj',
'LBL_BTN_COPY' => 'Kopiraj',
'LBL_BTN_COPY_FROM' => 'Kopiraj iz...',
'LBL_BTN_ADDCOLS'=>'Dodaj kolone',
'LBL_BTN_ADDROWS'=>'Dodaj redove',
'LBL_BTN_ADDFIELD'=>'Dodaj polje',
'LBL_BTN_ADDDROPDOWN'=>'Dodaj padajuću listu',
'LBL_BTN_SORT_ASCENDING'=>'Sortiraj rastuće',
'LBL_BTN_SORT_DESCENDING'=>'Sortiraj opadajuće',
'LBL_BTN_EDLABELS'=>'Izmeni labele',
'LBL_BTN_UNDO'=>'Poništi',
'LBL_BTN_REDO'=>'Vrati poništeno',
'LBL_BTN_ADDCUSTOMFIELD'=>'Dodaj prilagođeno polje',
'LBL_BTN_EXPORT'=>'Izvezi prilagođavanja',
'LBL_BTN_DUPLICATE'=>'Napravi duplikat',
'LBL_BTN_PUBLISH'=>'Objavi',
'LBL_BTN_DEPLOY'=>'Rasporedi',
'LBL_BTN_EXP'=>'Izvoz',
'LBL_BTN_DELETE'=>'Obriši',
'LBL_BTN_VIEW_LAYOUTS'=>'Pregled rasporeda',
'LBL_BTN_VIEW_MOBILE_LAYOUTS'=>'Prikazati mobilni raspored',
'LBL_BTN_VIEW_FIELDS'=>'Pregled polja',
'LBL_BTN_VIEW_RELATIONSHIPS'=>'Pregled veza',
'LBL_BTN_ADD_RELATIONSHIP'=>'Dodaj vezu',
'LBL_BTN_RENAME_MODULE' => 'Promeni ime modula',
'LBL_BTN_INSERT'=>'Unesi',
'LBL_BTN_RESTORE_BASE_LAYOUT' => 'Vrati osnovni izgled',
//TABS

//ERRORS
'ERROR_ALREADY_EXISTS'=> 'Greška: Polje već postoji',
'ERROR_INVALID_KEY_VALUE'=> "Greška: Neispravna vrednost ključa: [&#39;]",
'ERROR_NO_HISTORY' => 'Nisu nađeni fajlovi istorije',
'ERROR_MINIMUM_FIELDS' => 'Ovaj izgled mora da sadrži makar jedno',
'ERROR_GENERIC_TITLE' => 'Desila se greška',
'ERROR_REQUIRED_FIELDS' => 'Da li ste sigurni da želite da nastavite? Sledeća obavezna polja nedostaju iz rasporeda:',
'ERROR_ARE_YOU_SURE' => 'Da li ste sigurni da želite da nastavite?',
'ERROR_DATABASE_ROW_SIZE_LIMIT' => 'Polje ne može da se kreira. Dostigli ste ograničenje veličine reda za ovu tabelu u bazi podataka. <a href="https://support.sugarcrm.com/SmartLinks/Custom/MySQL_Row_Size_Limit/" target="_blank">Saznajte više</a>.',

'ERROR_CALCULATED_MOBILE_FIELDS' => 'Sledeća polja imaju izračunate vrednosti koje neće biti ponovo izračunate u redalnom vremenu u SugarCRM Modile pregledu za izmenu:',
'ERROR_CALCULATED_PORTAL_FIELDS' => 'Sledeća polja imaju izračunate vrednosti koje neće biti ponovo izračunate u redalnom vremenu u SugarCRM Portal pregledu za izmenu:',

//SUGAR PORTAL
    'LBL_PORTAL_DISABLED_MODULES' => 'Sledeći moduli su onemogućeni:',
    'LBL_PORTAL_ENABLE_MODULES' => 'Ukoliko želite da ih ponovo omogućite u okviru portala, molimo omogućite ih <a id="configure_tabs" target="_blank" href="./index.php?module=Administration&amp;action=ConfigureTabs">ovde</a>.',
    'LBL_PORTAL_CONFIGURE' => 'Konfigurišite portal',
    'LBL_PORTAL_ENABLE_PORTAL' => 'Omogući portal',
    'LBL_PORTAL_SHOW_KB_NOTES' => 'Omogućite napomene na modulu Baza znanja',
    'LBL_PORTAL_ALLOW_CLOSE_CASE' => 'Dozvoli korisnicima portala da zatvore predmet',
    'LBL_PORTAL_ENABLE_SELF_SIGN_UP' => 'Dozvolite korisnicima da se registruju',
    'LBL_PORTAL_USER_PERMISSIONS' => 'Dozvole korisnika',
    'LBL_PORTAL_THEME' => 'Portal sa temama',
    'LBL_PORTAL_ENABLE' => 'Omogući',
    'LBL_PORTAL_SITE_URL' => 'Sajt Vašeg portala je dostupan na adresi:',
    'LBL_PORTAL_APP_NAME' => 'Ime aplikacije',
    'LBL_PORTAL_CONTACT_PHONE' => 'Telefon',
    'LBL_PORTAL_CONTACT_EMAIL' => 'E-pošta',
    'LBL_PORTAL_CONTACT_EMAIL_INVALID' => 'Morate da unesete važeću e-adresu',
    'LBL_PORTAL_CONTACT_URL' => 'URL',
    'LBL_PORTAL_CONTACT_INFO_ERROR' => 'Morate da navedete najmanje jedan metod za kontakt',
    'LBL_PORTAL_LIST_NUMBER' => 'Broj zapisa koji će biti prikazan na listi',
    'LBL_PORTAL_DETAIL_NUMBER' => 'Broj polja koji će biti prikazani u okviru Detaljnog pregleda',
    'LBL_PORTAL_SEARCH_RESULT_NUMBER' => 'Broj rezultata koji će bitui prikazan u globalnoj pretrai',
    'LBL_PORTAL_DEFAULT_ASSIGN_USER' => 'Podrazumevano zadužen za nove registracije na portalu',
    'LBL_PORTAL_MODULES' => 'Moduli portala',
    'LBL_CONFIG_PORTAL_CONTACT_INFO' => 'Kontaktne informacije portala',
    'LBL_CONFIG_PORTAL_CONTACT_INFO_HELP' => 'Konfigurišite kontaktne informacije koje su predstavljene korisnicima portala kojima je potrebna dodatna pomoć sa nalogom. Najmanje jedna opcija mora da bude konfigurisana.',
    'LBL_CONFIG_PORTAL_MODULES_HELP' => 'Prevucite i otpustite nazive modula portala da biste podesili da budu prikazani ili skriveni u gornjoj navigacionoj traci. Da biste kontrolisali pristup modulima korisnika portala koristite <a href="?module=ACLRoles&action=index">Upravljanje ulogama.</a>',
    'LBL_CONFIG_PORTAL_MODULES_DISPLAYED' => 'Prikazani moduli',
    'LBL_CONFIG_PORTAL_MODULES_HIDDEN' => 'Skriveni moduli',
    'LBL_CONFIG_VISIBILITY' => 'Vidljivost',
    'LBL_CASE_VISIBILITY_HELP' => 'Definišite koji korisnici portala mogu da vide slučaj.',
    'LBL_EMAIL_VISIBILITY_HELP' => 'Definišite koji korisnici portala mogu da vide e-poruke koje se odnose na slučaj. Kontakti koji učestvuju su oni u poljima „Za”, „Od”, CC i BCC.',
    'LBL_MESSAGE_VISIBILITY_HELP' => 'Definišite koji korisnici portala mogu da vide poruke koje se odnose na slučaj. Kontakti koji učestvuju su oni u polju Gosti.',
    'CASE_VISIBILITY_OPTIONS' => [
        'all' => 'Svi kontakti koji su povezani sa ovim nalogom',
        'related_contacts' => 'Samo primarni kontakti i kontakti povezani sa ovim slučajem',
    ],
    'EMAIL_VISIBILITY_OPTIONS' => [
        'related_contacts' => 'Samo kontakti koji učestvuju',
        'all' => 'Svi kontakti koji mogu da vide slučaj',
    ],
    'MESSAGE_VISIBILITY_OPTIONS' => [
        'related_contacts' => 'Samo kontakti koji učestvuju',
        'all' => 'Svi kontakti koji mogu da vide slučaj',
    ],


'LBL_PORTAL'=>'Portal',
'LBL_PORTAL_LAYOUTS'=>'Izgled portala',
'LBL_SYNCP_WELCOME'=>'Molim, unesite URL portala koji želite da ažurirate.',
'LBL_SP_UPLOADSTYLE'=>'Izaberite stil koji želite da uvezete sa Vašeg računara.<br>Stil će biti implementiran u Sugar portalu kada sledeći put uradite sinhronizaciju.',
'LBL_SP_UPLOADED'=> 'Uveženo',
'ERROR_SP_UPLOADED'=>'Molim proverite da uvozite css opis stila.',
'LBL_SP_PREVIEW'=>'Ovo je prikaz kako će Sugar portal izgledati koristeći stil.',
'LBL_PORTALSITE'=>'URL Sugar portala:',
'LBL_PORTAL_GO'=>'Idi',
'LBL_UP_STYLE_SHEET'=>'Uvezi opis stila',
'LBL_QUESTION_SUGAR_PORTAL' => 'Odaberite raspored Sugar portala koji želite da izmenite.',
'LBL_QUESTION_PORTAL' => 'Odaberite raspored portala koji želite da izmenite.',
'LBL_SUGAR_PORTAL'=>'Editor Sugar portala',
'LBL_USER_SELECT' => '-- Izaberi --',

//PORTAL PREVIEW
'LBL_CASES'=>'Slučajevi',
'LBL_NEWSLETTERS'=>'Bilteni',
'LBL_BUG_TRACKER'=>'Praćenje defekata',
'LBL_MY_ACCOUNT'=>'Moj nalog',
'LBL_LOGOUT'=>'Odjavi se',
'LBL_CREATE_NEW'=>'Kreiraj novi',
'LBL_LOW'=>'Nizak',
'LBL_MEDIUM'=>'Srednje',
'LBL_HIGH'=>'Visok',
'LBL_NUMBER'=>'Broj:',
'LBL_PRIORITY'=>'Prioritet:',
'LBL_SUBJECT'=>'Naslov',

//PACKAGE AND MODULE BUILDER
'LBL_PACKAGE_NAME'=>'Naziv paketa:',
'LBL_MODULE_NAME'=>'Naziv modula:',
'LBL_MODULE_NAME_SINGULAR' => 'Jedinstveno ime modula:',
'LBL_AUTHOR'=>'Autor:',
'LBL_DESCRIPTION'=>'Opis',
'LBL_KEY'=>'Ključ:',
'LBL_ADD_README'=>'Pročitaj-me',
'LBL_MODULES'=>'Moduli',
'LBL_LAST_MODIFIED'=>'Poslednja izmena',
'LBL_NEW_MODULE'=>'Novi modul',
'LBL_LABEL'=>'Labela:',
'LBL_LABEL_TITLE'=>'Labela',
'LBL_SINGULAR_LABEL' => 'Jednina',
'LBL_WIDTH'=>'Širina',
'LBL_PACKAGE'=>'Paket:',
'LBL_TYPE'=>'Tip:',
'LBL_TEAM_SECURITY'=>'Bezbednost tima',
'LBL_ASSIGNABLE'=>'Dodeljivo',
'LBL_PERSON'=>'Osoba',
'LBL_COMPANY'=>'Kompanija',
'LBL_ISSUE'=>'Problem',
'LBL_SALE'=>'Prodaja',
'LBL_FILE'=>'Fajl',
'LBL_NAV_TAB'=>'Kartica navigacije',
'LBL_CREATE'=>'Kreiraj',
'LBL_LIST'=>'Lista',
'LBL_VIEW'=>'Pregled',
'LBL_LIST_VIEW'=>'Pregled u vidu liste',
'LBL_HISTORY'=>'Pregled istorije',
'LBL_RESTORE_DEFAULT_LAYOUT'=>'Povrati podrazumevani prikaz',
'LBL_ACTIVITIES'=>'Aktivnosti',
'LBL_SEARCH'=>'Pretraga',
'LBL_NEW'=>'Novo',
'LBL_TYPE_BASIC'=>'osnovna',
'LBL_TYPE_COMPANY'=>'kompanija',
'LBL_TYPE_PERSON'=>'osoba',
'LBL_TYPE_ISSUE'=>'problem',
'LBL_TYPE_SALE'=>'prodaja',
'LBL_TYPE_FILE'=>'fajl',
'LBL_RSUB'=>'Ovo je podpanel koji će biti prikazan u Vašem modulu',
'LBL_MSUB'=>'Ovo je podpanel koji Vaš modul obezbeđuje za prikazivanje modulima sa kojima je u vezi',
'LBL_MB_IMPORTABLE'=>'Dozvoli uvoze',

// VISIBILITY EDITOR
'LBL_VE_VISIBLE'=>'vidljiv',
'LBL_VE_HIDDEN'=>'sakriven',
'LBL_PACKAGE_WAS_DELETED'=>'[[package]] je obrisan',

//EXPORT CUSTOMS
'LBL_EC_TITLE'=>'Izvezi prilagođavanja',
'LBL_EC_NAME'=>'Naziv paketa:',
'LBL_EC_AUTHOR'=>'Autor:',
'LBL_EC_DESCRIPTION'=>'Opis:',
'LBL_EC_KEY'=>'Ključ:',
'LBL_EC_CHECKERROR'=>'Molim, izaberite modul.',
'LBL_EC_CUSTOMFIELD'=>'prilagođeno(a) polje(a)',
'LBL_EC_CUSTOMLAYOUT'=>'prilagođani raspored(i)',
'LBL_EC_CUSTOMDROPDOWN' => 'prilagođeni padajući meni',
'LBL_EC_NOCUSTOM'=>'Nijedan modul nije prilagođavan.',
'LBL_EC_EXPORTBTN'=>'Izvoz',
'LBL_MODULE_DEPLOYED' => 'Modul je raspoređen.',
'LBL_UNDEFINED' => 'Nedefinisano',
'LBL_EC_CUSTOMLABEL'=>'prilagođene etikete',

//AJAX STATUS
'LBL_AJAX_FAILED_DATA' => 'Neupešan povraćaj podataka',
'LBL_AJAX_TIME_DEPENDENT' => 'U toku je izvršavanje akcije koje zavisi od vremena. Molim sačekajte i pokušajte ponovo za nekoliko trenutaka.',
'LBL_AJAX_LOADING' => 'Učitava se...',
'LBL_AJAX_DELETING' => 'Briše se...',
'LBL_AJAX_BUILDPROGRESS' => 'U toku je kreiranje...',
'LBL_AJAX_DEPLOYPROGRESS' => 'U toku je raspoređivanje...',
'LBL_AJAX_FIELD_EXISTS' =>'Naziv polja koje ste uneli već postoji. Molim vas unesite nov naziv polja.',
//JS
'LBL_JS_REMOVE_PACKAGE' => 'Da li ste sigurni da želite da uklonite ovaj paket? Ovo će trajno obrisati sve fajlove koji su povezani sa ovim paketom.',
'LBL_JS_REMOVE_MODULE' => 'Da li ste sigurni da želite da izbrišete ovaj modul? Ovo će trajno izbrisati sve fajlove koji su povezani sa ovim modulom.',
'LBL_JS_DEPLOY_PACKAGE' => 'Sva prilagođavanja koja ste napravili u Studio-u će biti zamenjena kada se ovaj modul ponovo rasporedi. Da li ste sigurni da želite da nastavite?',

'LBL_DEPLOY_IN_PROGRESS' => 'Raspoređivanje paketa',
'LBL_JS_VALIDATE_NAME'=>'Ime - Mora biti alfanumeričko, bez razmaka i mora da počinje slovom.',
'LBL_JS_VALIDATE_PACKAGE_KEY'=>'Paket ključa već postoji',
'LBL_JS_VALIDATE_PACKAGE_NAME'=>'Naziv paketa već postoji',
'LBL_JS_PACKAGE_NAME'=>'Naziv paketa – mora da počinje slovom i može da se sastoji samo od slova, brojeva i podvlaka. Nije dozvoljeno koristiti razmake ni ostale posebne znakove.',
'LBL_JS_VALIDATE_KEY_WITH_SPACE'=>'Ključ - Mora biti alfanumerički i počinjati slovom.',
'LBL_JS_VALIDATE_KEY'=>'Ključ - Mora biti alfanumerički, bez razmaka i mora da počinje slovom.',
'LBL_JS_VALIDATE_LABEL'=>'Molim, unesite labelu koja će biti korišćena kao Ime za prikaz za ovaj modul',
'LBL_JS_VALIDATE_TYPE'=>'Molim, izaberite tip modula koji želite da kreirate iz gornje liste',
'LBL_JS_VALIDATE_REL_NAME'=>'Naziv - Mora biti alfanumerički bez razmaka',
'LBL_JS_VALIDATE_REL_LABEL'=>'Labela - molim, dodajte labelu koja će biti prikazana u podpanelu iznad',

// Dropdown lists
'LBL_JS_DELETE_REQUIRED_DDL_ITEM' => 'Da li ste sigurni da želite da obrišete ovu potrebnu stavku padajuće liste? Ovo može imati uticaja na funkcionalnost vaše aplkacije.',

// Specific dropdown list should be:
// LBL_JS_DELETE_REQUIRED_DDL_ITEM_(UPPERCASE_DDL_NAME)
'LBL_JS_DELETE_REQUIRED_DDL_ITEM_SALES_STAGE_DOM' => 'Da li ste sigurni da želite da obrišete ovu stavku padajuće liste? Brisanje zatvorenih dobijeni i zatvorenih izgubljenih faza može izazvati da modul za prognozu ne funkcioniše kako treba.',

// Specific list items should be:
// LBL_JS_DELETE_REQUIRED_DDL_ITEM_(UPPERCASE_ITEM_NAME)
// Item name should have all special characters removed and spaces converted to
// underscores
'LBL_JS_DELETE_REQUIRED_DDL_ITEM_NEW' => 'Da li ste sigurni da želite da obrišete status prodaje Novo? Brisanjem ovog statusa radni tok stavki prihoda modula prodajne prilike neće fnkcionisati',
'LBL_JS_DELETE_REQUIRED_DDL_ITEM_IN_PROGRESS' => 'Da li ste sigurni da želite da obrišete status prodaje U toku? Brisanjem ovog statusa radni tok stavki prihoda modula prodajne prilike neće fnkcionisati',
'LBL_JS_DELETE_REQUIRED_DDL_ITEM_CLOSED_WON' => 'Da li ste sigurni da želite da izbrišete zatvorenu dobijenu fazu prodaje? Zbog brisanja ove faze vaš modul za prognozu neće funkcionisati kako treba.',
'LBL_JS_DELETE_REQUIRED_DDL_ITEM_CLOSED_LOST' => 'Da li ste sigurni da želite da izbrišete zatvorenu izgubljenu fazu prodaje? Zbog brisanja ove faze vaš modul za prognozu neće funkcionisati kako treba.',

//CONFIRM
'LBL_CONFIRM_FIELD_DELETE'=>'Deleting this custom field will delete both the custom field and all the data related to the custom field in the database. The field will be no longer appear in any module layouts.'
        . ' If the field is involved in a formula to calculate values for any fields, the formula will no longer work.'
        . '\n\nThe field will no longer be available to use in Reports; this change will be in effect after logging out and logging back in to the application. Any reports containing the field will need to be updated in order to be able to be run.'
        . '\n\nDo you wish to continue?',
'LBL_CONFIRM_RELATIONSHIP_DELETE'=>'Da li ste sigurni da želite da obrišete ovu vezu?',
'LBL_CONFIRM_RELATIONSHIP_DEPLOY'=>'Ova veza će postati trajna. Da li ste sigurni da želite da rasporedite ovu vezu?',
'LBL_CONFIRM_DONT_SAVE' => 'Da li želite da sačuvate promene koje su nastale nakon poslednjeg čuvanja?',
'LBL_CONFIRM_DONT_SAVE_TITLE' => 'Sačuvaj promene?',
'LBL_CONFIRM_LOWER_LENGTH' => 'Moguće je da će podaci biti okrnjeni bez mogućnosti povratka na prethodno stanje, da li ste sigurni da želite da nastavite?',

//POPUP HELP
'LBL_POPHELP_FIELD_DATA_TYPE'=>'Izaberite odgovarajući tip podatka zasnovan na tipu podatka koji će biti unet u polje.',
'LBL_POPHELP_FTS_FIELD_CONFIG' => 'Konfiguriši polje tako da se tekst u potpunosti može pretražiti.',
'LBL_POPHELP_FTS_FIELD_BOOST' => 'Uvećanje je postupak povećanja relevantnosti polja zapisa.<br />Polja sa višim nivoom uvećanja imaće značajnu prednost kada se obavlja pretraga. Kada se obavlja pretraga, uparivi zapisi koji sadrže polja sa većom težinom pojaviće se među prvima u rezultatima pretrage.<br />Podrazumevana vrednost je 1,0 koja predstavlja neutralno uvećanje. Da biste primenili pozitivno uvećanje prihvata se svaka lebdeća vrednost koja je veća od 1. Za upotrebu negativnog uvećanja koristite vrednosti manje od 1. Na primer, vrednost od 1,35 će pozitivno uvećati polje za 135%. Upotrebom vrednosti od 0,60 primeniće se negativno uvećanje.<br />Zapamtite da je u prethodnim verzijama bilo neophodno da se obavi reindeksiranje pune pretrage teksta. Ovo više nije potrebno.',
'LBL_POPHELP_IMPORTABLE'=>'<b>Da</b>: Polje će biti uključeno u operaciju uvoza.<br><b>Ne</b>: Polje neće biti uključeno u uvoz.<br><b>Zahtevano</b>: Vrednost polja mora biti uneta pri svakom uvozu.',
'LBL_POPHELP_PII'=>'Ovo polje će biti automatski označeno za nadzor i biće dostupno u prikazu Lične informacije.<br>Polja za Lične informacije takođe mogu trajno da se izbrišu kada je zapis povezan sa zahtevom za brisanje Privatnosti podataka.<br>Brisanje se vrši putem modula Privatnost podataka i mogu ga izvršiti administratori ili korisnici u ulozi Menadžer privatnosti podataka.',
'LBL_POPHELP_IMAGE_WIDTH'=>'Unesite broj za širinu, merenu u pikselima.<br> Učitana slika će biti smanjena prema ovoj širini.',
'LBL_POPHELP_IMAGE_HEIGHT'=>'Unesite broj za visinu, merenu u pikselima.<br> Učitana slika će biti smanjena prema ovoj visini.',
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
'LBL_POPHELP_REQUIRED'=>"Kreirajte formulu kojom se utvrđuje da li je ovo polje obavezno u rasporedima.<br/>"
    . "Obavezna polja će pratiti formulu u mobilnom prikazu zasnovanom na pregledaču,<br/>"
    . "ali neće pratiti formulu u izvornim aplikacijama, kao što su Sugar Mobile za iPhone.<br/>"
    . "Neće pratiti formulu na Sugar samouslužnom portalu.",
'LBL_POPHELP_READONLY'=>"Kreirajte formulu kojom se utvrđuje da li je ovo polje samo za čitanje u rasporedima.<br/>"
        . "Polja samo za čitanje će pratiti formulu u mobilnom prikazu zasnovanom na pregledaču,<br/>"
        . "ali neće pratiti formulu u izvornim aplikacijama, kao što su Sugar Mobile za iPhone.<br/>"
        . "Neće pratiti formulu na Sugar samouslužnom portalu.",
'LBL_POPHELP_GLOBAL_SEARCH'=>'Odaberite kako biste koristili ovo polje pri pretraživanju zapisa pomoću globalnog pretraživanja na ovom modulu.',
//Revert Module labels
'LBL_RESET' => 'Resetuj',
'LBL_RESET_MODULE' => 'Resetuj modul',
'LBL_REMOVE_CUSTOM' => 'Ukloni prilagođavanje',
'LBL_CLEAR_RELATIONSHIPS' => 'Obriši veze',
'LBL_RESET_LABELS' => 'Resetuj labele',
'LBL_RESET_LAYOUTS' => 'Resetuj rasporede',
'LBL_REMOVE_FIELDS' => 'Ukloni prilagođena polja',
'LBL_CLEAR_EXTENSIONS' => 'Obriši ekstenzije',

'LBL_HISTORY_TIMESTAMP' => 'VremePečat',
'LBL_HISTORY_TITLE' => 'Istorija',

'fieldTypes' => array(
                'varchar'=>'TekstPolje',
                'int'=>'Ceo broj',
                'float'=>'Broj s pokretnim zarezom',
                'bool'=>'Polje za potvrdu',
                'enum'=>'Padajući',
                'multienum' => 'Više odabira',
                'date'=>'Datum',
                'phone' => 'Telefon',
                'currency' => 'Valuta',
                'html' => 'HTML',
                'radioenum' => 'Radio',
                'relate' => 'Veza',
                'address' => 'Adresa:',
                'text' => 'OblastTeksta',
                'url' => 'URL',
                'iframe' => 'IFrame',
                'image' => 'Slika',
                'encrypt'=>'Šifrovati',
                'datetimecombo' =>'Datum i vreme',
                'decimal'=>'Decimalni',
                'autoincrement' => 'Samopovećanje',
                'actionbutton' => 'ActionButton',
),
'labelTypes' => array(
    "" => "Često korišćene labele.",
    "all" => "Sve labele",
),

'parent' => 'Srodno savijanje',

'LBL_ILLEGAL_FIELD_VALUE' =>"Padajući ključ ne može da sadrži navodnike.",
'LBL_CONFIRM_SAVE_DROPDOWN' =>"Izabrali ste da uklonite ovu stavku sa padajuće liste. Sva padajuća polja koja koriste listu sa vrednostima ove stavke više neće prikazati vrednost, a vrednost više neće moći da se izabere iz padajućih polja. Da li ste sigurni da želite da nastavite?",
'LBL_POPHELP_VALIDATE_US_PHONE'=>"Select to validate this field for the entry of a 10-digit<br>" .
                                 "phone number, with allowance for the country code 1, and<br>" .
                                 "to apply a U.S. format to the phone number when the record<br>" .
                                 "is saved. The following format will be applied: (xxx) xxx-xxxx.",
'LBL_ALL_MODULES'=>'Svi moduli',
'LBL_RELATED_FIELD_ID_NAME_LABEL' => '{0} (povezan {1} ID)',
'LBL_HEADER_COPY_FROM_LAYOUT' => 'Kopirati iz rasporeda',
'LBL_RELATIONSHIP_TYPE' => 'Odnos',

// Edit Labels
'LBL_COMPARISON_LANGUAGE' => 'Jezik za poređenje',
'LBL_LABEL_NOT_TRANSLATED' => 'Ova oznaka se možda neće prevesti',
);
