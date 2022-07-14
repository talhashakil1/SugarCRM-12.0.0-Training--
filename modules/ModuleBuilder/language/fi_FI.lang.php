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
    'LBL_LOADING' => 'Ladataan' /*for 508 compliance fix*/,
    'LBL_HIDEOPTIONS' => 'Piilota valinnat' /*for 508 compliance fix*/,
    'LBL_DELETE' => 'Poista' /*for 508 compliance fix*/,
    'LBL_POWERED_BY_SUGAR' => 'Powered By SugarCRM' /*for 508 compliance fix*/,
    'LBL_ROLE' => 'Rooli',
    'LBL_BASE_LAYOUT' => 'Kannan asettelu',
    'LBL_FIELD_NAME' => 'Kentän nimi',
    'LBL_FIELD_VALUE' => 'Arvo',
    'LBL_LAYOUT_DETERMINED_BY' => 'Asettelun määrittänyt:',
    'layoutDeterminedBy' => [
        'std' => 'Normaali asettelu',
        'role' => 'Rooli',
        'dropdown' => 'Pudotusvalikon kenttä',
    ],
    'LBL_DELETE_CUSTOM_LAYOUTS' => 'Kaikki mukautetut asettelut poistetaan. Haluatko varmasti muuttaa nykyisiä asettelumäärityksiä?',
'help'=>array(
    'package'=>array(
            'create'=>'Anna <b>nimi</b> paketille. Nimen on oltava aakkosnumeerinen, eikä se saa sisältää välilyöntejä. (Esimerkki: HR_Management) <br/><br/>Voit antaa paketille myös <b>tekijän</b> tiedot ja <b>kuvauksen</b>. <br/>Napsauta <b>Tallenna</b> luodaksesi paketin.',
            'modify'=>'<b>Paketin</b> ominaisuudet ja mahdolliset toiminnot näkyvät tässä.<br/><br/>Voit muokata paketin <b>nimi-</b>, <b>tekijä-</b>, ja <b>kuvaus</b>kenttiä, sekä katsella ja muokata kaikkia moduuleja, jotka ovat paketissa.<br/><br/>Klikkaa <b>Uusi moduuli</b> -painiketta lisätäksesi moduulin pakettiin.<br/><br/>Jos paketissa on ainakin yksi moduuli, voit <b>julkaista</b> ja <b>jakaa</b> paketin sekä <b>viedä</b> pakettiin tehdyt muutokset.',
            'name'=>'Määrittele nimi',
            'author'=>'Tämä on <b>tekijä</b>, joka näytetään asennuksen yhteydessä paketin luoneena tahona.<br/><br/>Tekijä voisi olla joko yksilö tai yritys.',
            'description'=>'Tämä on paketin <b>kuvaus</b>, joka nähdään asennuksen yhteydessä.',
            'publishbtn'=>'Painamalla <b>julkaise</b> kaikki syötetty tieto tallennetaan ja siitä luodaan .zip-tiedosto, joka on asennettava versio paketista.<br><br>Käytä <b>Moduulilataajaa</b> lähettääksesi .zip-tiedoston ja asentaaksesi paketin.',
            'deploybtn'=>'Valitse <b>jaa</b> tallentaaksesi kaikki syötetyt tiedot ja asentaaksesi paketin moduuleineen tähän instanssiin.',
            'duplicatebtn'=>'Valitse <b>monista</b> kopioidaksesi nykyisen paketin sisällön uuteen pakettiin, joka näytetään.<br/><br/>Uuden paketin nimi generoidaan automaattisesti lisäämällä numero vanhan paketin nimen loppuun. Voit nimetä paketin uudelleen kirjoittamalla uuden <b>nimen</b> ja painamalla <b>tallenna</b>.',
            'exportbtn'=>'Painamalla <b>Vie</b> luodaan uusi .zip -tiedosto, joka sisältää pakettiin tehdyt muutokset.<br/><br/>Generoitu tiedosto ei ole asennettava versio paketista.<br/><br/>Käytä <b>Moduulilataajaa</b> tuodaksesi .zip -tiedoston. Paketti ja siihen tehdyt muutokset näkyvät Moduulirakentajassa.',
            'deletebtn'=>'Painamalla <b>Poista</b> poistat tämän paketin ja kaikki tähän pakettiin liittyvät tiedostot.',
            'savebtn'=>'Painamalla <b>Tallenna</b> kaikki pakettiin liittyvät syötetyt tiedot tallennetaan.',
            'existing_module'=>'Napsauta <b>moduuli</b>-kuvaketta muokataksesi ominaisuuksia ja moduuliin liittyviä kenttiä, yhteyksiä ja asetteluja.',
            'new_module'=>'Paina painiketta <b>Uusi moduuli</b> luodaksesi uuden moduulin tälle paketille.',
            'key'=>'Tätä 5-kirjaimista, aakkosnumeerista <b>avainta</b> käytetään kaikkien tässä paketissa olevien moduulien kansioiden, luokkanimien ja tietokantataulujen etuliitteenä.<br><br>Avainta käytetään taulujen nimien ainutlaatuisuuden varmistamiseksi.',
            'readme'=>'Napsauta lisätäksesi <b>ReadMe</b>-tekstiä tähän pakettiin.<br/><br/>ReadMe on luettavissa asennuksen aikana.',

),
    'main'=>array(

    ),
    'module'=>array(
        'create'=>'Anna moduulin <b>nimi</b>. Antamasi <b>tunniste</b> näkyy navigaatiovälilehdessä.<br/><br/>Valitse <b>navigaatiovälilehti</b>-valintaruutu näyttääksesi moduulisi mahdollisen navigaatiovälilehden.<br/><br/>Valitse sitten, millaisen moduulin haluat luoda.<br/><br/>Valitse mallityyppi. Jokainen malli sisältää tietyt kentät sekä ennalta määritetyt asettelut, joita voi käyttää pohjana omaa moduulia varten.<br/><br/>Napsauta <b>Tallenna</b>luodaksesi moduulin.',
        'modify'=>'Voit vaihtaa moduulin ominaisuuksia tai muokata moduuliin liittyviä <b>kenttiä</b>, <b>yhteyksiä</b> ja <b>asetteluja</b>.',
        'importable'=>'Valitsemalla <b>Tuonti</b>-valintaruudun mahdollistat tuonnin tähän moduuliin.<br/><br/>Linkki tuontityökaluun ilmestyy moduulin pikakuvakepaneeliin. Tuontityökalu auttaa tietojen tuomisessa moduuliin ulkoisista lähteistä.',
        'team_security'=>'<b>Ryhmäsuojaus</b>-valintaruutu kytkee päälle ryhmäsuojauksen tälle moduulille.<br><br>Jos ryhmäsuojaus on päällä, ryhmänvalintakenttä näkyy moduulin tietueissa.',
        'reportable'=>'Valitsemalla tämän valintaruudun tästä moduulista voidaan ajaa raportteja.',
        'assignable'=>'Valitsemalla tämän valintaruudun voidaan valitulle käyttäjälle osoittaa tämän moduulin tietueita.',
        'has_tab'=>'Kohdan <b>navigaatiovälilehti</b> valitseminen antaa moduulille navigaatiovälilehden.',
        'acl'=>'Tämä valintaruutu kytkee päälle pääsyvalvonnan tälle moduulille.',
        'studio'=>'Tämän valitseminen sallii järjestelmänvalvojien muokata tätä moduulia Studiossa.',
        'audit'=>'Tämä valintaruutu kytkee päälle tarkastuksen tälle moduulille. Muutokset tiettyihin kenttiin kirjataan, jotta järjestelmän ylläpitäjät voivat tarkistaa muutoshistorian.',
        'viewfieldsbtn'=>'Valitse <b>Näytä kentät</b> nähdäksesi moduuliin liittyviä kenttiä sekä luodaksesi ja muokataksesi mukautettuja kenttiä.',
        'viewrelsbtn'=>'Valitse <b>Näytä suhteet</b> nähdäksesi moduuliin liittyvät suhteet ja luodaksesi uusia suhteita.',
        'viewlayoutsbtn'=>'Valitse <b>Näytä asettelut</b> nähdäksesi moduulin asettelut ja muokataksesi kenttäjärjestystä asettelussa.',
        'viewmobilelayoutsbtn' => 'Klikkaa "näytä mobiiliasettelut" nähdäksesi moduulin mobiiliasettelut, ja muokataksesi kenttien järjestystä asetteluissa.',
        'duplicatebtn'=>'Valitse <b>Monista</b> kopioidaksesi moduulin ominaisuudet uuteen moduuliin, ja näyttääksesi sen.<br/><br/>Uuden moduulin nimi generoidaan lisäämällä luku vanhan moduulin nimen perään.',
        'deletebtn'=>'Valitse <b>Poista</b> poistaaksesi tämän moduulin.',
        'name'=>'Tämä on nykyisen moduulin <b>nimi</b>.<br/><br/>Nimen tulee olla aakkosnumeerinen, alkaa kirjaimella, ja olla sisältämättä välilyöntejä. (Esim. HR_Management)',
        'label'=>'Tämä on <b>tunniste</b>, joka näkyy moduulin navigaatiovälilehdessä.',
        'savebtn'=>'Valitse <b>Tallenna</b> tallentaaksesi kaikki syötetty moduuliin liittyvä tieto.',
        'type_basic'=>'<b>Basic</b>-mallityyppi tarjoaa peruskentät, kuten nimi, vastuuhenkilö, tiimi, luontipäivä ja kuvaus -kentät.',
        'type_company'=>'<b>Yritys</b>-mallityyppi tarjoaa organisaatiota kuvaavia kenttiä, kuten yrityksen nimi, ala ja laskutusosoite.<br/> Käytä tätä mallia, kun luot moduuleja, jotka ovat samankaltaisia Tilit-moduulin kanssa.',
        'type_issue'=>'<b>Ongelma</b>-mallityyppi tarjoaa tapaus- ja bugikohtaisia kenttiä, kuten numero, status, prioriteetti ja kuvaus.<br/><br/>Käytä tätä mallia, kun luot moduuleja, jotka ovat samankaltaisia Tapaus ja Bugiseuranta -moduulien kanssa.',
        'type_person'=>'<b>Henkilö</b>-mallityyppi tarjoaa henkilökohtaisia kenttiä, kuten puhuttelumuoto, titteli, nimi, osoite ja puhelinnumero.<br/><br/>Käytä tätä mallia, kun luot moduuleja, jotka ovat samankaltaisia Kontaktit ja Liidi -moduulien kanssa.',
        'type_sale'=>'<b>Myynti</b>-mallityyppi tarjoaa myyntimahdollisuuskohtaisia kenttiä, kuten päälähde, vaihe, määrä ja todennäköisyys.<br/><br/>Käytä tätä mallia kun luot moduuleja, jotka ovat samankaltaisia Myyntimahdollisuus-moduulin kanssa.',
        'type_file'=>'<b>Tiedosto</b>-malli sisältää asiakirjakohtaisia kenttiä, kuten tiedoston nimi, asiakirjan tyyppi ja julkaisupäivä.<br/><br/>Käytä tätä mallia kun luot moduuleja, jotka ovat samankaltaisia Asiakirja-moduulin kanssa.',

    ),
    'dropdowns'=>array(
        'default' => 'Oletus',
        'editdropdown'=>'Pudotusvalikoita voi käyttää standardisena tai mukautettuna kenttänä missä tahansa moduulissa.<br/><br/>Anna <b>nimi</b> pudotusvalikko.<br/><br/>Jos ohjelmaan on asennettuna kielipaketteja, voit valita listan elementeissä käytetty <b>kieli</b>.<br/><br/><b>Kohteen nimi</b> -kentässä voit antaa nimen pudotusvalikossa esiintyvälle valinnalle. Tämä nimi ei näy käyttäjälle näkyvässä listassa.<br/><br/>Käyttäjälle näkyvä selite annetaan <b>näyttöselite</b>-kenttään.<br/><br/>Kun olet syöttänyt kohteen nimen ja näyttöselitteen, paina <b>Lisää</b>-painiketta lisätäksesi kohteen pudotusvalikkoon.<br/><br/>Jos haluat muuttaa kohteiden järjestystä, vedä ja pudota kohteet haluttuihin sijainteihin.<br/><br/>Jos haluat muuttaa kohteen näyttöselitettä, paina <b>Muokkaa</b>-painiketta ja syötä uusi selite. Jos haluat poistaa kohteen pudotusvalikosta, paina <b>Poista</b>-painiketta.<br/><br/>Jos haluat kumota näyttöselitteelle tehdyn muutoksen, paina <b>Kumoa</b>. Jos haluat tehdä kumotun muutoksen uudelleen, paina <b>Tee uudelleen</b>.<br/><br/>Paina <b>Tallenna</b> tallentaaksesi pudotusvalikon.<br/><br/>',

    ),
    'subPanelEditor'=>array(
        'modify'	=> 'All of the fields that can be displayed in the <b>Subpanel</b> appear here.<br><br>The <b>Default</b> column contains the fields that are displayed in the Subpanel.<br/><br/>The <b>Hidden</b> column contains fields that can be added to the Default column.'
    . '<br/><br/><!--not_in_theme!--><img src="themes/default/images/SugarLogic/icon_dependent.png"/>Indicates a Dependent field that may or may not be visible based on the value of a formula.<br/><!--not_in_theme!--><img src="themes/default/images/SugarLogic/icon_calculated.png" /> Indicates a Calculated field whose value will be automatically determined based on a formula.'
    ,
        'savebtn'	=> 'Valitse <b>Tallenna ja ota käyttöön</b> tallentaaksesi tekemäsi muutokset ja tehdäksesi moduuliin tehdyt muutokset aktiiviseksi.',
        'historyBtn'=> 'Valitse <b>Näytä historia</b> nähdäksesi ja palauttaaksesi ennen tallennetun asettelun historiasta.',
        'historyRestoreDefaultLayout'=> 'Valitse <b>Palauta oletusasettelu</b> palauttaaksesi näkymän sen alkuperäiseen asetteluun.',
        'Hidden' 	=> '<b>Piilotetut</b> kentät eivät näy alapaneelissa.',
        'Default'	=> '<b>Oletus</b>kentät näkyvät alapaneelissa.',

    ),
    'listViewEditor'=>array(
        'modify'	=> 'All of the fields that can be displayed in the <b>ListView</b> appear here.<br><br>The <b>Default</b> column contains the fields that are displayed in the ListView by default.<br/><br/>The <b>Available</b> column contains fields that a user can select in the Search to create a custom ListView. <br/><br/>The <b>Hidden</b> column contains fields that can be added to the Default or Available column.'
    . '<br/><br/><!--not_in_theme!--><img src="themes/default/images/SugarLogic/icon_dependent.png"/>Indicates a Dependent field that may or may not be visible based on the value of a formula.<br/><!--not_in_theme!--><img src="themes/default/images/SugarLogic/icon_calculated.png" /> Indicates a Calculated field whose value will be automatically determined based on a formula.'
    ,
        'savebtn'	=> 'Valitse <b>Tallenna ja ota käyttöön</b> tallentaaksesi tekemäsi muutokset ja tehdäksesi moduuliin tehdyt muutokset aktiiviseksi.',
        'historyBtn'=> 'Valitse <b>Näytä historia</b> nähdäksesi ja palauttaaksesi ennen tallennetun asettelun historiasta.<br/><br/><b>Palauta</b>-painike historianäkymässä palauttaa kenttäasettelun edelliseen tallennettuun asetteluun. Muuttaaksesi kenttien selitteitä, paina Muokkaa-painiketta kentän vieressä.',
        'historyRestoreDefaultLayout'=> 'Valitse <b>Palauta oletusasettelu</b> palauttaaksesi näkymän sen alkuperäiseen asetteluun.<br><br><b>Palauta oletusasettelu</b> palauttaa vain kenttien sijainnit alkuperäisiin paikkoihin. Muuttaaksesi kenttien selitteitä, paina kentän vieressä olevaa Muokkaa-painiketta.',
        'Hidden' 	=> 'Käyttäjät eivät voi nähdä <b>piilotettuja</b> kenttiä listanäkymissä.',
        'Available' => '<b>Saatavissa</b> olevat kentät eivät ole oletuksena esillä, mutta käyttäjät voivat lisätä niitä listanäkymiin.',
        'Default'	=> '<b>Oletus</b>kentät näkyvät listanäkymissä, joita käyttäjä ei ole muokannut.'
    ),
    'popupListViewEditor'=>array(
        'modify'	=> 'All of the fields that can be displayed in the <b>ListView</b> appear here.<br><br>The <b>Default</b> column contains the fields that are displayed in the ListView by default.<br/><br/>The <b>Hidden</b> column contains fields that can be added to the Default or Available column.'
    . '<br/><br/><!--not_in_theme!--><img src="themes/default/images/SugarLogic/icon_dependent.png"/>Indicates a Dependent field that may or may not be visible based on the value of a formula.<br/><!--not_in_theme!--><img src="themes/default/images/SugarLogic/icon_calculated.png" /> Indicates a Calculated field whose value will be automatically determined based on a formula.'
    ,
        'savebtn'	=> 'Valitse <b>Tallenna ja ota käyttöön</b> tallentaaksesi tekemäsi muutokset ja tehdäksesi moduuliin tehdyt muutokset aktiiviseksi.',
        'historyBtn'=> 'Valitse <b>Näytä historia</b> nähdäksesi ja palauttaaksesi ennen tallennetun asettelun historiasta.<br/><br/><b>Palauta</b>-painike historianäkymässä palauttaa kenttäasettelun edelliseen tallennettuun asetteluun. Muuttaaksesi kenttien selitteitä, paina Muokkaa-painiketta kentän vieressä.',
        'historyRestoreDefaultLayout'=> 'Valitse <b>Palauta oletusasettelu</b> palauttaaksesi näkymän sen alkuperäiseen asetteluun.<br><br><b>Palauta oletusasettelu</b> palauttaa vain kenttien sijainnit alkuperäisiin paikkoihin. Muuttaaksesi kenttien selitteitä, paina kentän vieressä olevaa Muokkaa-painiketta.',
        'Hidden' 	=> 'Käyttäjät eivät voi nähdä <b>piilotettuja</b> kenttiä listanäkymissä.',
        'Default'	=> '<b>Oletus</b>kentät näkyvät listanäkymissä, joita käyttäjä ei ole muokannut.'
    ),
    'searchViewEditor'=>array(
        'modify'	=> 'All of the fields that can be displayed in the <b>Search</b> form appear here.<br><br>The <b>Default</b> column contains the fields that will be displayed in the Search form.<br/><br/>The <b>Hidden</b> column contains fields available for you as an admin to add to the Search form.'
    . '<br/><br/><!--not_in_theme!--><img src="themes/default/images/SugarLogic/icon_dependent.png"/>Indicates a Dependent field that may or may not be visible based on the value of a formula.<br/><!--not_in_theme!--><img src="themes/default/images/SugarLogic/icon_calculated.png" /> Indicates a Calculated field whose value will be automatically determined based on a formula.'
    . '<br/><br/>This configuration applies to popup search layout in legacy modules only.',
        'savebtn'	=> 'Painikkeen <b>Tallenna ja ota käyttöön</b> napsauttaminen tallentaa kaikki muutokset ja tekee niistä aktiivisia',
        'Hidden' 	=> '<b>Piilotetut</b> kentät eivät näy haussa.',
        'historyBtn'=> 'Valitse <b>Näytä historia</b> nähdäksesi ja palauttaaksesi ennen tallennetun asettelun historiasta.<br/><br/><b>Palauta</b>-painike historianäkymässä palauttaa kenttäasettelun edelliseen tallennettuun asetteluun. Muuttaaksesi kenttien selitteitä, paina Muokkaa-painiketta kentän vieressä.',
        'historyRestoreDefaultLayout'=> 'Valitse <b>Palauta oletusasettelu</b> palauttaaksesi näkymän sen alkuperäiseen asetteluun.<br><br><b>Palauta oletusasettelu</b> palauttaa vain kenttien sijainnit alkuperäisiin paikkoihin. Muuttaaksesi kenttien selitteitä, paina kentän vieressä olevaa Muokkaa-painiketta.',
        'Default'	=> '<b>Oletus</b>kentät näkyvät haussa.'
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
        'saveBtn'	=> 'Valitse <b>Tallenna</b> tallentaaksesi asetteluun tekemäsi muutokset.<br/><br/>Muutokset eivät näy moduulissa, kunnes otat tallennetut muutokset käyttöön.',
        'historyBtn'=> 'Valitse <b>Näytä historia</b> nähdäksesi ja palauttaaksesi ennen tallennetun asettelun historiasta.<br/><br/><b>Palauta</b>-painike historianäkymässä palauttaa kenttäasettelun edelliseen tallennettuun asetteluun. Muuttaaksesi kenttien selitteitä, paina Muokkaa-painiketta kentän vieressä.',
        'historyRestoreDefaultLayout'=> 'Valitse <b>Palauta oletusasettelu</b> palauttaaksesi näkymän sen alkuperäiseen asetteluun.<br><br><b>Palauta oletusasettelu</b> palauttaa vain kenttien sijainnit alkuperäisiin paikkoihin. Muuttaaksesi kenttien selitteitä, paina kentän vieressä olevaa Muokkaa-painiketta.',
        'publishBtn'=> '<b>Tallenna ja ota käyttöön</b> -napin painaminen tallentaa kaikki tekemäsi muutokset asetteluun ja tekee muutokset aktiiviseksi.<br/><br/>Uusi asettelu näkyy heti moduulissa.',
        'toolbox'	=> '<b>Työkaluihin</b> kuuluu <b>roskakori</b>, lisää asetteluelementtejä ja kenttiä, joita voi lisätä asettelualueelle.<br/><br/>Työkaluissa olevia asetteluelementtejä ja kenttiä voi vetää ja pudottaa asettelualueelle, ja asettelualueella olevia asetteluelementtejä ja kenttiä voi vetää ja pudottaa työkaluihin.<br/><br/>Asetteluelementtejä ovat <b>paneelit</b> ja <b>rivit</b>. Uuden rivin tai paneelin lisääminen asettelualueelle antaa lisäsijainteja joihin voi laittaa kenttiä.<br/><br/>Vedä ja pudota kenttä työkaluista tai asettelualueelta toisen kentän päälle vaihtaaksesi kenttien sijainteja.<br/><br/><b>Täyttökenttä</b> luo tyhjän alueen haluttuun paikkaan asettelualueelle.',
        'panels'	=> '<b>Asettelualue</b> tarjoaa esikatselun siitä, miltä asettelu näyttää moduulin sisällä, kun muutokset otetaan käyttöön.<br/><br/>Voit siirtää kenttiä, rivejä ja paneeleja vetämällä ja pudottamalla ne haluamaasi paikkaan.<br/><br/>Poista elementtejä vetämällä ja pudottamalla ne työkaluissa olevaan <b>roskakoriin</b>, tai lisää uusia elementtejä ja kenttiä vetämällä ne <b>työkaluista</b> ja pudottamalla ne haluamaasi paikkaan asettelualueella.',
        'delete'	=> 'Pudota mikä tahansa elementti tähän poistaaksesi sen asettelusta',
        'property'	=> 'Muokkaa tämän kentän selitettä.<br/><br/><b>Sarkainjärjestys</b> ohjaa sitä, missä järjestyksessä sarkain vaihtaa kenttiä.',
    ),
    'fieldsEditor'=>array(
        'default'	=> 'Oletus',
        'mbDefault'=>'<b>Kentät</b>, jotka ovat moduulissa käytettävissä on tässä lueteltu kentän nimen mukaan.<br/><br/>Määrittääksesi kentän ominaisuudet napsauta kentän nimeä.<br/><br/>Luodaksesi uuden kentän napsauta <b>Lisää kenttä</b> -painiketta. Kentän luonnin jälkeen sen selitettä sekä muita ominaisuuksia voi muokata painamalla kentän nimeä.<br/><br/>Kun moduuli on käytössä, uudet Moduulirakentajassa luodut kentät pidetään moduulin vakiokenttinä Studiossa.',
        'addField'	=> 'Valitse <b>tietotyyppi</b> uudelle kentälle. Valitsemasi tietotyyppi määrittää, mitä merkkejä kenttään voi syöttää. Esimerkiksi vain numeroita voi syöttää kenttään, jonka tietotyyppinä on Kokonaisluku.<br/><br/>Syötä <b>nimi</b> kentälle. Nimen pitää olla aakkosnumeerinen eikä se saa sisältää välilyöntejä. Alaviiva on sallittu merkki.<br/><br/><b>Näyttöselite</b> on se selite, joka annetaan kentille moduulien asettelualueissa. <b>Järjestelmäselitettä</b> käytetään koodissa viittauksissa kenttään.<br/><br/>Riippuen kentälle valitusta tietotyypistä, jotkin tai kaikki seuraavista ominaisuuksista voidaan määrittää:<br/><br/><b>Aputeksti</b> näytetään, kun käyttäjä pitää osoitinta kentän päällä. Tällä voidaan pyytää käyttäjältä haluttua syötettä.<br/><br/><b>Kommenttiteksti</b> näkyy ainoastaan Studiossa tai Moduulirakentajassa. Tällä kuvataan kenttää järjestelmänvalvojille.<br/><br/><b>Oletusarvo</b> näkyy kentässä. Käyttäjät voivat syöttää uuden arvon tai käyttää oletusarvoa.<br/><br/>Valitse <b>Massapäivitys</b>-valintaruutu, jos haluat käyttää massapäivitysominaisuutta kentässä.<br/><br/><b>Maksimiarvo</b> määrittää suurimman mahdollisen määrän merkkejä, joita voidaan syöttää kenttään.<br/><br/>Valitse <b>Pakollinen kenttä</b> -valintaruutu tehdäksesi kentästä pakollisen. Kenttään on pakko syöttää arvo, jotta kentän sisältävä tietue voidaan tallentaa.<br/><br/>Valitse <b>Raportoitava</b>-valintaruutu mahdollistaaksesi kentän käytön suodattimissa sekä tiedon näyttämisen raporteissa.<br/><br/>Valitse <b>Katselmointi</b>-valintaruutu mahdollistaaksesi muutosten seuraamisen muutoslokissa.<br/><br/>Valitse asetus <b>Tuonti</b>-kentästä sallitaksesi, kieltääksesi tai vaatiaksesi kentän tuonnin tuontityökalussa.<br/><br/>Valitse asetus <b>Kopioiden sulautus</b> -kentästä salliaksesi tai kieltäeksäsi kopioiden sulautus- ja kopioiden etsintäominaisuudet.<br/><br/>Lisäasetuksia voi asettaa joillekin tietotyypeille.',
        'editField' => 'Tämän kentän ominaisuuksia voi muokata.<br/><br/>Klikkaa <b>Kloonaa</b> luodaksesi uuden kentän samoilla ominaisuuksilla.',
        'mbeditField' => 'Mallikentän <b>näyttöselitettä</b> voidaan muokata. Kentän muita ominaisuuksia ei voi muokata.<br/><br/>Klikkaa <b>Kloonaa</b> luodaksesi uuden kentän, jolla on samat ominaisuudet.<br/><br/>Jos haluat poistaa mallikentän niin, ettei se näy moduulissa, poista se tarvittavista <b>asetteluista</b>.'

    ),
    'exportcustom'=>array(
        'exportHelp'=>'Vie Studiossa tehdyt muokkaukset luomalla paketteja, joita voidaan lähettää toiseen Sugar-instanssiin <b>Moduulilataajan</b> kautta.<br/><br/>Syötä ensin <b>paketin nimi</b>. Voit antaa paketille myös <b>tekijän</b> ja <b>kuvauksen</b>.<br/><br/>Valitse ne moduulit, jotka sisältävät mukautukset, jotka haluat viedä. Vain muokatut moduulit ilmestyvät valintaa varten.<br/><br/>Napsauta <b>Vie</b> luodaksesi .zip-tiedoston muokatulle paketille.',
        'exportCustomBtn'=>'Valitse <b>Vie</b> luodaksesi .zip-tiedoston sille muokatulle paketille, jonka haluat viedä.',
        'name'=>'Määrittele nimi',
        'author'=>'Tämä on <b>tekijä</b>, joka näkyy asennuksen aikana paketin luoneena tahona. Tekijä voi olla joko yksilö tai yritys.',
        'description'=>'Tämä on paketin <b>kuvaus</b>, joka nähdään asennuksen yhteydessä.',
    ),
    'studioWizard'=>array(
        'mainHelp' 	=> 'Tervetuloa <b>kehitystyökalut</b>-alueelle.<br /><br />Käytä tällä aluella olevia työkaluja luodaksesi ja hallitaksesi sekä Sugarin oletusmoduuleja ja -kenttiä ja muita moduuleja ja kenttiä.',
        'studioBtn'	=> 'Käytä <b>Studiota</b> muokataksesi käytössä olevia moduuleja.',
        'mbBtn'		=> 'Käytä <b>Moduulirakentajaa</b> luodaksesi uusia moduuleja.',
        'sugarPortalBtn' => 'Käytä <b>Sugar Portal Editoria</b> hallitaksesi ja muokataksesi Sugar Portalia.',
        'dropDownEditorBtn' => 'Käytä <b>Pudotusvalikkoeditoria</b> lisätäksesi ja muokataksesi globaaleja pudotusvalikkoja pudotusvalikkokentille.',
        'appBtn' 	=> 'Sovellustila on missä voit muokata ohjelman ominaisuuksia, esimerkiksi kuinka monta TPS-raporttia kotisivulla näytetään.',
        'backBtn'	=> 'Palaa edelliseen kohtaan.',
        'studioHelp'=> 'Käytä <b>Studiota</b> määrittääksesi mitä ja miten tietoja näytetään moduuleissa.',
        'studioBCHelp' => 'kertoo, että moduuli on taaksepäin yhteensopiva moduuli',
        'moduleBtn'	=> 'Klikkaa muokataksesi tätä moduulia.',
        'moduleHelp'=> 'Ne moduulin komponentit, joita voit muokata, näkyvät tässä.<br /><br />Klikkaa kuvaketta valitaksesi muokattavan komponentin.',
        'fieldsBtn'	=> 'Luo ja muokkaa <b>kenttiä</b> tallentaaksesi tietoja moduulissa.',
        'labelsBtn' => 'Muokkaa moduulin otsikoiden ja kenttien <b>selitteitä</b>.'	,
        'relationshipsBtn' => 'Lisää tai katsele moduulin <b>suhteita</b>.' ,
        'layoutsBtn'=> 'Muokkaa moduulin <b>asetteluja</b>. Asettelut ovat kenttiä sisältävät moduulin näkymät.<br /><br />Asetteluissa voit määrittää, mitkä kentät näytetään ja miten ne asetellaan sivulla.',
        'subpanelBtn'=> 'Määritä mitkä kentät näkyvät moduulin <b>alapaneeleissa</b>.',
        'portalBtn' =>'Kustomoi <b>Sugar Portalissa</b> ilmestyviä moduulien <b>asetteluja</b>.',
        'layoutsHelp'=> 'Ne moduulin <b>asettelut</b>, joita voi muokata, näkyvät tässä.<br /><br />. Asettelut näyttävät kenttiä ja kenttien tietoja.<br /><br />Klikkaa ikonia valitaksesi muokattava asettelu.',
        'subpanelHelp'=> 'Ne moduulin <b>alapaneelit</b>, joita voi muokata, näkyvät tässä.<br /><br />Klikkaa ikonia valitaksesi muokattava moduuli.',
        'newPackage'=>'Klikkaa <b>uusi pakkaus</b> luodaksesi uuden pakkauksen.',
        'exportBtn' => 'Klikkaa <b>Vie muutokset</b> ladataksesi paketin, joka sisältää Studiossa tehdyt muutokset moduuleihin.',
        'mbHelp'    => 'Käytä <b>moduulirakentajaa</b> luodaksesi paketteja, jotka sisältävät kustomoituja moduuleja, jotka perustuvat standardeihin tai kustomoituihin objekteihin.',
        'viewBtnEditView' => 'Muokkaa moduulin <b>muokkausnäkymän</b> asettelua.<br /><br />Muokkausnäkymä on se lomake, joka sisältää syöttökenttiä joilla saa käyttäjältä tietoja.',
        'viewBtnDetailView' => 'Muokkaa moduulin <b>tietonäkymän</b> asettelua.<br /><br />Tietonäkymä näyttää käyttäjän syöttämiä tietoja.',
        'viewBtnDashlet' => 'Kustomoi moduulin <b>Sugar Dashletia</b>, myös Sugar Dashletin listanäkymää ja hakua.<br /><br />Sugar Dashlet voidaan lisätä työpöydälle.',
        'viewBtnListView' => 'Kustomoi moduulin <b>listanäkymän</b> asettelua.<br /><br />Hakutulokset näkyvät listanäkymässä.',
        'searchBtn' => 'Kustomoi moduulin <b>hakuasetteluja</b>. Määritä, mitä kenttiä käytetään listanäkymän tietueiden suodatukseen.',
        'viewBtnQuickCreate' =>  'Kustomoi moduulin <b>pikaluontiasettelua</b>.<br /><br />Pikaluontilomake näkyy alipaneeleissa ja Sähköpostit-moduulissa.',

        'searchHelp'=> 'Muokattavat <b>hakulomakkeet</b> näkyvät tässä.<br /><br />Hakulomakkeet sisältävät kenttiä tietueiden suodattamiseen.<br /><br />Klikkaa ikonia valitaksesi muokattava asettelu.',
        'dashletHelp' =>'Muokattavat <b>Sugar Dashlet</b> -asettelut näkyvät tässä.<br /><br />Sugar Dashletteja voi lisätä etusivulla olevalle työpöydälle.',
        'DashletListViewBtn' =>'<b>Sugar Dashletin listanäkymä</b> näyttää tietueita perustuen dashletin hakusuodattimiin.',
        'DashletSearchViewBtn' =>'<b>Sugar Dashletin haku</b> suodattaa dashletin listanäkymää.',
        'popupHelp' =>'Muokattavat <b>popup</b>-asettelut näkyvät tässä.',
        'PopupListViewBtn' => '<b>Popup-listanäkymä</b> näyttää tietueita perustuen popupin hakunäkymiin.',
        'PopupSearchViewBtn' => '<b>Popup-haku</b> näyttää tietueita perustuen popup-listanäkymään.',
        'BasicSearchBtn' => 'Muokkaa <b>perushakulomaketta</b>, joka näkyy perushakuvälilehdellä moduulin hakualueella.',
        'AdvancedSearchBtn' => 'Muokkaa <b>edistyneen haun lomaketta</b>, joka näkyy edistyneen haun välilehdellä moduulin hakualueella.',
        'portalHelp' => 'Hallitse ja kustomoi <b>Sugar Portalia</b>.',
        'SPUploadCSS' => 'Lataa <b>tyylitiedosto</b> Sugar Portaliin.',
        'SPSync' => '<b>Synkronoi</b> Sugar Portal-instanssiin tehdyt muutokset.',
        'Layouts' => 'Muokkaa Sugar Portalin moduulien <b>asetteluja</b>.',
        'portalLayoutHelp' => 'Sugar Portalin moduulit näkyvät tällä alueella.<br /><br />Valitse moduuli muokataksesi sen asetteluja.',
        'relationshipsHelp' => 'Kaikki suhteet tämän moduulin ja toisten moduulien välillä näkyvät tässä.<br /><br />Suhteen <b>nimi</b> on järjestelmän generoima nimi suhteelle.<br /><br /><b>Primäärimoduuli</b> on suhteet omistava moduuli. Esimerkiksi: kaikki ominaisuudet niille suhteille, joiden primäärimoduuli on <code>Asiakkaat</code>, tallennetaan Asiakkaat-moduulin tietokantatauluihin.<br /><br /><b>Tyyppi</b> on suhteen tyyppi primäärimoduulin ja <b>liittyvän moduulin</b> välillä.<br /><br />Klikkaa sarakkeen otsikkoa lajitellaksesi sarakkeen mukaan.<br /><br />Klikkaa riviä suhtedaulukossa nähdäksesi suhteen ominaisuudet.<br /><br />Klikkaa <b>Lisää suhde</b> luodaksesi uusi suhde.<br /><br />Suhteita voidaan luoda minkä tahansa kahden moduulin välille.',
        'relationshipHelp'=>'<b>Suhteita</b> voidaan luoda moduulin ja toisen käytössä olevan moduulin välille.<br /><br />Suhteita näytetään visuaalisesti alapaneelien ja relate-kenttien kautta moduulitietueissa.<br /><br />Valitse yksi seuraavista <b>suhteen tyypeistä</b> moduulille:<br /><br /><b>Yksi yhteen</b> &ndash; Molempien moduulin tietueilla on relate-kenttiä.<br /><br /><b>Yksi moneen</b> &ndash; Primäärimoduulin tietueilla on alapaneeli, ja liittyvän moduulin tietueilla on relate-kenttä.<br /><br /><b>Monta moneen</b> &ndash; Molempien moduulin tietueilla on alapaneeleita.<br /><br />Valitse <b>liittyvä moduuli</b> suhteelle.<br /><br />Jos suhdetyyppi käsittää alipaneeleita, valitse alipaneelinäkymä sopiville moduuleille.<br /><br />Klikkaa <b>Tallenna</b> tallentaaksesi suhteen.',
        'convertLeadHelp' => "Täällä voit lisätä moduuleja muunnoksen asettelunäkymään ja muokata olemassa olevien asetteluja.<br />Voit järjestää uudelleen moduuleja raahaamalla taulukon rivejä.<br /><br /><b>Moduuli:</b> Moduulin nimi.<br /><br /><b>Vaaditaan:</b> Vaaditut moduulit pitää luoda tai valita ennen kuin liidi voidaan muuntaa.<br /><br /><b>Kopioi tiedot:</b> Jos tämä on valittu, liidin kentät kopioidaan samannimisiin kenttin uusissa tietueissa.<br /><br /><b>Salli valinta:</b> Moduulit, joilla on relate-kenttä kontakteissa voidaan valita luomisen sijaan liidin muunnosprosessissa.<br /><br /><b>Muokkaa:</b> Muokkaa tämän moduulin muunnosasettelua.<br /><br /><b>Poista:</b> Poista tämä moduuli muunnosasettelusta.",
        'editDropDownBtn' => 'Muokkaa globaalia pudotusvalikkoa',
        'addDropDownBtn' => 'Luo globaali pudotusvalikko',
    ),
    'fieldsHelp'=>array(
        'default'=>'Oletus',
    ),
    'relationshipsHelp'=>array(
        'default'=>'Oletus',
        'addrelbtn'=>'Siirrä hiirtä tämän yli saadaksesi apua suhteen lisäyksessä...',
        'addRelationship'=>'<b>Suhteita</b> voidaan luoda moduulin ja toisen käyttöönotetun moduulin välille.<br/><br/>Suhteet näytetään visuaalisesti alapaneeleilla ja suhdekentillä moduulitietueissa.<br/><br/>Valitse yksi seuraavista <b>suhdetyypeistä</b> moduulille:<br/><br/> <b>Yksi yhteen</b> - Molempien moduulien tietueet tulevat sisältämään suhdekentät.<br/><br/> <b>Yksi useampaan</b> - Ensisijaisen moduulin tietue tulee sisältämään alapaneelin, ja liittyvän moduulin tietue tulee sisältämään suhdekentän.<br/><br/> <b>Moni moneen</b> - Molempien moduulien tietueet näyttävät alapaneelin.<br/><br/> Valitse <b>liittyvä moduuli</b> suhteelle. <br/><br/>Jos suhdetyyppi sisältää alapaneeleja, valitse alapaneelinäkymä tarvittaville moduuleille.<br/><br/> Napsauta <b>Tallenna</b> luodaksesi suhteen.',
    ),
    'labelsHelp'=>array(
        'default'=> 'Oletus',
        'saveBtn'=>'Valitse <b>Tallenna</b> tallentaaksesi kaikki muutokset.',
        'publishBtn'=>'Valitse <b>Tallenna ja ota käyttöön</b> tallentaaksesi kaikki muutokset, sekä tehdäksesi niistä aktiivisia.',
    ),
    'portalSync'=>array(
        'default' => 'Oletus',
    ),
    'portalConfig'=>array(
           'default' => '',
       ),
    'portalStyle'=>array(
        'default' => 'Oletus',
    ),
),

'assistantHelp'=>array(
    'package'=>array(
            //custom begin
            'nopackages'=>'Aloittaaksesi projektin, klikkaa <b>Uusi pakkaus</b> luodaksesi uuden pakkauksen, joka tulee sisältämään muokkaamasi moduulit.<br/><br/>Jokaisessa pakkauksessa voi olla yksi tai useampi moduuli.<br/><br/>Voit esimerkiksi haluta luoda pakkauksen, joka sisältää yhden muokatun moduulin, joka liittyy standardiin Tilit-moduuliin. Tai voit haluta luoda pakkauksen, joka sisältää monta uutta moduulia, jotka toimivat yhdessä projektina ja jotka liittyvät toisiinsa tai jo olemassa oleviin moduuleihin.',
            'somepackages'=>'<b>Pakkaus</b> toimii säiliönä kustomoiduille moduuleille, kaikki osana yhtä projektia. Pakkauksessa voi olla yksi tai useampi kustomoitu <b>moduuli</b>, jotka voivat liittyä toisiinsa tai toisiin, ohjelmassa jo oleviin moduuleihin.<br/><br/>Kun olet luonut pakkauksen projektillesi, voit luoda moduuleja pakkaukseen heti, tai voit palata Moduulirakentajaan myöhemmin. Kun projekti on valmis, voit <b>ottaa käyttöön</b> pakkauksen asentaaksesi kustomoidut moduulit ohjelmaan.',
            'afterSave'=>'Uuden pakettisi tulisi sisältää ainakin yksi moduuli. Voit luoda yhden tai useamman mukautetun moduulin pakettia varten.<br/><br/>Napsauta <b>Uusi moduuli</b> luodaksesi mukautetun moduulin tälle paketille.<br/><br/> Luotuasi ainakin yhden moduulin, voit julkaista tai jakaa paketin laittaaksesi sen oman ja/tai muiden instanssien saatavaksi.<br/><br/> Jakaaksesi paketin yhdessä vaiheessa Sugar-instanssisi sisällä napsauta <b>Jaa</b>-painiketta.<br/><br/>Napsauta <b>Julkaise</b>-painiketta tallentaaksesi paketin .zip-tiedostona. Jahka .zip-tiedosto on tallennettu järjestelmääsi, käytä <b>Moduulilataajaa</b> lataaksesi ja asentaaksesi paketin Sugar-instansiisi.<br/><br/>Voit jakaa tiedostoa toisille käyttäjille heidän omiin Sugar-instansseihinsa lataamista ja asentamista varten.',
            'create'=>'<b>Pakkaus</b> toimii säiliönä kustomoiduille moduuleille, kaikki osana yhtä projektia. Pakkauksessa voi olla yksi tai useampi mukautettu <b>moduuli</b>, jotka voivat liittyä toisiinsa tai toisiin jo olemassaoleviin moduuleihin.<br/><br/>Kun olet luonut pakkauksen projektillesi, voit luoda moduuleja pakkaukseen heti, tai voit palata Moduulirakentajaan myöhemmin.',
            ),
    'main'=>array(
        'welcome'=>'Käytä <b>kehitystyökaluja</b> luodaksesi ja hallitaksesi mukautettuja moduuleja ja kenttiä.<br/><br/>Hallitaksesi sovelluksessa olevia moduuleja, klikkaa <b>Studiota</b>.<br/><br/>Luodaksesi omia moduuleja, klikkaa <b>Moduulirakentajaa</b>.',
        'studioWelcome'=>'Studiossa voidaan muokata kaikkia sovellukseen asennettuja moduuleita. Tähän sisältyy sekä Sugarin oletusmoduuleja että jälkeenpäin asennettuja objekteja.'
    ),
    'module'=>array(
        'somemodules'=>"Koska nykyinen paketti sisältää ainakin yhden moduulin, voit <b>Jakaa</b> paketin moduulit Sugar-instanssisi sisällä tai <b>Julkaista</b> paketin asennettavaksi nykyisessä tai muussa Sugar-instanssissa <b>Moduulilataajaa</b> käyttäen.<br/><br/>Asentaaksesi paketin suoraan Sugar-instanssiisi, napsauta <b>Jaa</b>.<br/><br/>Luodaksesi .zip-tiedoston, joka voidaan ladata ja asentaa nykyisessä ja muissa Sugar-instansseissa käyttäen <b>Moduulilataajaa</b>, paina <b>Julkaise</b>.<br/><br/> Voit rakentaa moduuleja tälle paketille osissa, ja julkaista tai jakaa, kun olet valmist tekemään niin. <br/><br/>Paketin julkaisemisen ta jakamisen jälkeen voit tehdä muutoksia paketin ominaisuuksiin ja mukauttaa moduuleja enemmän. Sitten voit uudelleenjulkaista tai uudelleenjakaa paketin ottaaksesi muutokset käyttöön." ,
        'editView'=> 'Täällä voit muokata olemassa olevia kenttiä. Voit poistaa olemassa olevia kenttiä tai lisätä uusia kenttiä vasemmalla sijaitsevassa paneelissa.',
        'create'=>'Kun valitset minkä <b>tyyppisen</b> moduulin haluat luoda, pidä mielessä moduuliin haluamasi kenttien tyypit.<br/><br/>Jokainen moduulimalli sisältää joukon kenttiä, jotka koskevat moduulin tyyppiä.<br/><br/><b>Yksinkertainen</b> - Tarjoaa yksinkertaisia kenttiä, jotka ilmestyvät standardeissa moduuleissa, kuten nimi, vastuuhenkilö, tiimi, luontipäivämäärä ja kuvaus.<br/><br/><b>Yritys</b> - Tarjoaa yrityksiin liittyviä kenttiä, kuten yrityksen nimi, ala, ja laskutusosoite. Käytä tätä mallia luodaksesi moduuleja, jotka ovat samankaltaisia kuin standardi Tilit-moduuli.<br/><br/><b>Henkilö</b> - Tarjoaa henkilöihin liittyviä kenttiä, kuten puhuttelumalli, titteli, nimi, osoite, ja puhelinnumero. Käytä tätä mallia luodaksesi moduuleja, jotka ovat samankaltaisia standardien Kontakti- ja Liidi-moduulien kanssa.<br/><br/><b>Ongelma</b> - tarjoaa tapaus- ja bugikohtaisia kenttiä, kuten numero, status, prioriteetti ja kuvaus. Käytä tätä mallia luodaksesi moduuleja, jotka ovat samankaltaisia kuin Tapaus ja Bugiseuranta -moduulit.<br/><br/>Huomautus: kun olet luonut moduulin, voit muokata mallin tarjoamien kenttien selitteitä, sekä luoda kustomoituja kenttiä, joita voit lisätä moduulin asetelmiin.',
        'afterSave'=>'Mukauta moduulia tarpeidesi mukaan muokkaamalla ja luomalla uusia kenttiä, luomalla suhteita toisten moduulein kanssa ja asettelemalla kenttiä asetelmissa.<br/><br/>Jos haluat nähdä mallikentät ja hallita kustomoituja kenttiä moduulissa, paina <b>Näytä kentät</b>.<br/><br/>Jos haluat luoda ja hallita tämän ja toisten moduulien suhteita, paina <b>Näytä suhteet</b>.<br/><br/>Muokataksesi moduulin asetteluja, paina <b>Näytä asettelut</b>. Voit muokata yksityiskohtanäkymän, muokkausnäkymän, ja listanäkymän asetteluja samalla tavalla kuin voit muokata sovelluksessa jo olevia moduuleja.<br/><br/>Luodaksesi moduulin, jolla on samat ominaisuudet kuin nykyisellä moduulilla, paina <b>Monista</b>. Voit mukauttaa uutta moduulia.',
        'viewfields'=>'Moduulissa olevia kenttiä voidaan mukauttaa tarpeidesi mukaan.<br/><br/>Et voi poistaa standardikenttiä, mutta voit poistaa ne asetteluista asettelusivuilla.<br/><br/>Voit pikaisesti luoda uusia kenttiä, joilla on samankaltaiset ominaisuudet kuin olemassaolevilla kentillä painamalla <b>Kloonaa</b>-painiketta <b>Ominaisuudet</b>-lomakkeessa. Syötä halutessasi uusia ominaisuuksia, ja paina <b>Tallenna</b>.<br/><br/>On suositeltavaa, että asetat kaikki ominaisuudet sekä standardikentille että mukautetuille kentille ennen kuin julkaiset ja asennat pakkauksen, joka sisältää kustomoidun moduulin.',
        'viewrelationships'=>'Voit luoda monesta-moneen suhteita tämän moduulin ja muiden paketissa olevien moduulien välille, ja/tai tämän moduulin ja sovellukseen jo asennettujen moduulien välille.<br/><br/>Luodaksesi yhdestä-moneen ja yhdestä-yhteen suhteita, luo <b>Relate</b> ja <b>Flex Relate</b>-kentät moduuleille.',
        'viewlayouts'=>'Voit hallita, mitkä kentät ovat käytettävissä tietojen kaappausta varten <b>muokkausnäkymässä</b>. Voit myös hallita, mitä tietoja näyttää <b>yksityiskohtanäkymässä</b>. Näkymien ei tarvitse täsmätä.<br/><br/>Pikaluontilomake näytetään, kun <b>Luo</b>-painiketta painetaan moduulialapaneelissa. Oletuksena <b>pikaluontilomakkeen</b> asettelu on sama kuin <b>muokkausnäkymän</b> asettelu. Voit kustomoida pikaluontilomaketta niin, että se sisältää vähemmän ja/tai eri kenttiä kuin muokkausnäkymä.<br/><br/>Voit määrittää moduulin turvallisuuden käyttämällä asettelun mukauttamista sekä <b>roolihallintaa</b>.<br/><br/>',
        'existingModule' =>'Kun olet luonut ja kustomoinut moduulin, voit luoda lisämoduuleja tai palata pakkaukseen joko <b>julkaisemaan</b> tai <b>ottamaan käyttöön</b> pakkauksen.<br/><br/>Luodaksesi uusia moduuleja, paina <b>Monista</b> luodaksesi moduulin samoilla ominaisuuksilla kuin nykyinen moduuli, tai voit navigoida pakkaukseen ja painaa <b>Uusi moduuli</b>.<br/><br/>Jos olet valmiina <b>julkaisemaan</b> tai <b>ottamaan käyttöön</b> tämän moduulin sisältävän pakkauksen, navigoi pakkaukseen näitä toimintoja varten. Voit julkaista ja ottaa käyttöön pakkauksia, joissa on ainakin yksi moduuli.',
        'labels'=> 'Standardien kenttien selitteitä sekä kustomoituja kenttiä voi muuttaa. Kenttien selitteiden muuttaminen ei vaikuta niihin tallennettuihin tietoihin.',
    ),
    'listViewEditor'=>array(
        'modify'	=> 'Vasemmalla puolella on kolme saraketta. <i>Oletus</i>-sarake sisältää ne kentät, jotka näkyvät listanäkymässä oletuksena, <i>Saatavilla</i>-sarake sisältää ne kentät, joita käyttäjä voi käyttää mukautetussa listanäkymässä, ja <i>Piilotetut</i>-sarake sisältää ne kentät jotka järjestelmänvalvojana voit siirtää <i>Oletus</i>- tai <i>Piilotetut</i>-sarakkeisiin, mutta jotka ovat tällä hetkellä pois käytöstä.',
        'savebtn'	=> '<b>Tallenna</b> tallentaa kaikki muutokset ja tekee niistä aktiivisia.',
        'Hidden' 	=> 'Piilotetut kentät ovat kenttiä, joita käyttäjä ei voi käyttää listanäkymissä.',
        'Available' => 'Saatavilla olevat kentät ovat kenttiä, joita ei näytetä oletuksena, mutta joita käyttäjä voi halutessaan laittaa päälle.',
        'Default'	=> 'Oletus-kentät näkyvät käyttäjille, jotka eivät ole mukauttaneet listanäkymiä.'
    ),

    'searchViewEditor'=>array(
        'modify'	=> 'Vasemmalla puolella näkyy kaksi saraketta. <i>Oletus</i>-sarake sisältää kenttiä, jotka näkyvät hakunäkymässä, ja <i>Piilotetut</i>-sarake sisältää kenttiä, joita järjestelmänvalvojana voit lisätä näkymään.',
        'savebtn'	=> '<b>Tallenna ja ota käyttöön</b> tallentaa kaikki muutokset ja tekee niistä aktiivisia.',
        'Hidden' 	=> 'Piilotetut kentät ovat kenttiä, jotka eivät näy hakunäkymässä.',
        'Default'	=> 'Oletus-kentät näytetään hakunäkymässä.'
    ),
    'layoutEditor'=>array(
        'default'	=> 'Oletus',
        'saveBtn'	=> 'Tämä painike tallentaa asettelun, jotta voit säästää muutoksesi. Kun palaat tähän moduuliin, aloitat tällä muutetulla asettelulla. Moduulin käyttäjät eivät näe muutoksia, kunnes painat Tallenna ja ota käyttöön -painiketta.',
        'publishBtn'=> 'Napsauta tätä painiketta ottaaksesi asettelu käyttöön. Moduulin käyttäjät näkevät heti tämän asettelun.',
        'toolbox'	=> 'Työkalualue sisältää hyödyllisiä työkaluja asettelujen muokkausta varten. Työkaluihin kuuluu mm. roskakori, lisäelementtejä sekä lisäkenttiä. Näitä voidaan vetää ja pudottaa asettelualueelle.',
        'panels'	=> 'Tällä alueella näet, miten moduulin käyttäjä näkee asettelun.<br/><br/>Voit siirtää elementtejä kuten kenttiä, rivejä ja paneeleja vetämällä ja pudottamalla niitä, poistaa elementtejä pudottamalla ne työkaluissa olevaan roskakoriin, tai lisätä elementtejä vetämällä ne työkaluista ja pudottamalla ne asettelualuelle.'
    ),
    'dropdownEditor'=>array(
        'default'	=> 'Oletus',
        'dropdownaddbtn'=> 'Tämä painike lisää kohteen pudotusvalikkoon.',

    ),
    'exportcustom'=>array(
        'exportHelp'=>'Tässä instanssissa Studiossa tehdyt mukautukset voidaan pakata ja ottaa käyttöön toisessa instanssissa.<br/><br/>Syötä pakkauksen <b>nimi</b>. Voit myös syöttää pakkauksen <b>tekijän</b> sekä <b>kuvauksen</b>.<br/><br/>Valitse ne moduulit, jotka sisältävät vietävät muokkaukset. Vain muokatut pakkaukset ovat valittavissa.<br/><br/>Klikkaa <b>Vie</b> luodaksesi .zip-tiedoston, joka sisältää muokatun pakkauksen. Tiedoston voi ladata toiseen instanssiin Moduulilataajan kautta.',
        'exportCustomBtn'=>'Napsauta <b>Vie</b> luodaksesi paketille .zip-tiedostona joka sisältää mukautukset, jotka haluaisit viedä.',
        'name'=>'Määrittele nimi',
        'author'=>'Tämä on <b>tekijä</b>, joka näytetään asennuksen yhteydessä paketin luoneena tahona.<br/><br/>Tekijä voisi olla joko yksilö tai yritys.<br/><br/>Tekijä näytetään Moduulilataajassa sen jälkeen, kun paketti on ladattu Studiossa asentamista varten.',
        'description'=>'Paketin <b>kuvaus</b> näkyy Moduulilataajassa, kun pakkaus on ladattu Studioon asennusta varten.',
    ),
    'studioWizard'=>array(
        'mainHelp' 	=> 'Tervetuloa <b>kehitystyökalut</b>-alueelle.<br /><br />Käytä tällä aluella olevia työkaluja luodaksesi ja hallitaksesi sekä Sugarin oletusmoduuleja ja -kenttiä ja muita moduuleja ja kenttiä.',
        'studioBtn'	=> 'Käytä <b>Studiota</b> muokataksesi käytössä olevia moduuleja, muuttamalla kenttien järjestystä, valitsemalla mitä kenttiä on saatavilla, ja luomalla mukautettuja tietokenttiä.',
        'mbBtn'		=> 'Käytä <b>Moduulirakentajaa</b> luodaksesi uusia moduuleja.',
        'appBtn' 	=> 'Sovellustila on missä voit muokata ohjelman ominaisuuksia, esimerkiksi kuinka monta TPS-raporttia kotisivulla näytetään.',
        'backBtn'	=> 'Palaa edelliseen kohtaan.',
        'studioHelp'=> 'Käytä <b>Studiota</b> muokataksesi asennettuja moduuleja.',
        'moduleBtn'	=> 'Klikkaa muokataksesi tätä moduulia.',
        'moduleHelp'=> 'Valitse moduulin komponentti, jota haluat muokata.',
        'fieldsBtn'	=> 'Muuta moduulin tallentamia tietoja hallitsemalla moduulin <b>kenttiä</b>.',
        'layoutsBtn'=> 'Muokkaa moduulin muokkaus-, tieto- ja listanäkymien <b>asetteluja</b>.',
        'subpanelBtn'=> 'Muokkaa, mitä tietoja näytetään tämän moduulin alapaneeleissa.',
        'layoutsHelp'=> 'Valitse <b>muokattava asettelu</b>.<br /><br />Muuttaaksesi sitä asettelua, joka sisältää tietojensyöttökenttiä, klikkaa <b>muokkausnäkymä</b>.<br /><br />Muuttaaksesi sitä asettelua, joka näyttää muokkausnäkymässä syötettyjä tietoja, klikkaa <b>tietonäkymä</b>.<br /><br />Muuttaaksesi oletuslistassa näytettäviä sarakkeita, klikkaa <b>listanäkymä</b>.<br /><br />Muuttaaksesi perus- ja edistyneiden hakulomakkeiden asetteluja, klikkaa <b>haku</b>.',
        'subpanelHelp'=> 'Valitse muokattava <b>alapaneeli</b>.',
        'searchHelp' => 'Valitse muokattava <b>hakuasettelu</b>.',
        'labelsBtn'	=> 'Muokkaa <b>otsikoiden</b> näkyvät arvot tässä moduulissa.',
        'newPackage'=>'Klikkaa <b>uusi pakkaus</b> luodaksesi uuden pakkauksen.',
        'mbHelp'    => '<b>Tervetuloa Moduulirakentajaan.</b><br /><br />Käytä Moduulirakentajaa luodaksesi paketteja, jotka sisältävät mukautettuja moduuleita, jotka perustuvat standardeihin tai mukautettuihin objekteihin.<br /><br />Aloittaaksesi, klikkaa <b>Uusi paketti</b> luodaksesi uuden paketin, tai valitse muokattava paketti.<br /><br /><b>Paketti</b> on mukautetun moduulin säiliö, ja projekti koostuu eri paketeista. Paketissa voi olla yksi tai useampi mukautettu moduuli. Moduulit voivat liittyä toisiinsa tai sovelluksen moduuleihin.<br /><br />Esimerkkejä: Voisit haluta luoda paketin, joka sisältää mukautetun moduulin, joka liittyy standardiin Asiakkaat-moduuliin. Tai voisit luoda paketin joka sisältää useita uusia moduuleja, jotka toimivat yhdessä projektina, ja jotka liittyvät toisiinsa ja sovelluksen moduuleihin.',
        'exportBtn' => 'Klikkaa <b>Vie muutokset</b> ladataksesi paketin, joka sisältää Studiossa tehdyt muutokset moduuleihin.',
    ),

),
//HOME
'LBL_HOME_EDIT_DROPDOWNS'=>'Pudotusvalikkoeditori',

//ASSISTANT
'LBL_AS_SHOW' => 'Näytä opaste tulevaisuudessa.',
'LBL_AS_IGNORE' => 'Ole huomioimatta opastetta tulevaisuudessa.',
'LBL_AS_SAYS' => 'Opaste sanoo:',

//STUDIO2
'LBL_MODULEBUILDER'=>'Moduulirakentaja',
'LBL_STUDIO' => 'Studio',
'LBL_DROPDOWNEDITOR' => 'Pudotusvalikkoeditori',
'LBL_EDIT_DROPDOWN'=>'Muokkaa pudotusvalikkoa',
'LBL_DEVELOPER_TOOLS' => 'Kehittäjätyökalut',
'LBL_SUGARPORTAL' => 'Sugar Portal -muokkain',
'LBL_SYNCPORTAL' => 'Synkronoi Portal',
'LBL_PACKAGE_LIST' => 'Pakettiluettelo',
'LBL_HOME' => 'Etusivu',
'LBL_NONE'=>'Tyhjä',
'LBL_DEPLOYE_COMPLETE'=>'Jako valmis',
'LBL_DEPLOY_FAILED'   =>'Jakoprosessin aikana on ilmennyt virhe, pakettisi ei välttämättä asentunut oikein',
'LBL_ADD_FIELDS'=>'Lisää mukautettuja kenttiä',
'LBL_AVAILABLE_SUBPANELS'=>'Saatavilla olevat alapaneelit',
'LBL_ADVANCED'=>'Laajat asetukset',
'LBL_ADVANCED_SEARCH'=>'Laaja haku',
'LBL_BASIC'=>'Perusasetukset',
'LBL_BASIC_SEARCH'=>'Hae',
'LBL_CURRENT_LAYOUT'=>'Asettelu',
'LBL_CURRENCY' => 'Valuutta:',
'LBL_CUSTOM' => 'Mukautettu',
'LBL_DASHLET'=>'Sugar Dashlet',
'LBL_DASHLETLISTVIEW'=>'Sugar Dashlet -listanäkymä',
'LBL_DASHLETSEARCH'=>'Sugar Dashlet -haku',
'LBL_POPUP'=>'Popup-näkymä',
'LBL_POPUPLIST'=>'Popup-listanäkymä',
'LBL_POPUPLISTVIEW'=>'Popup-listanäkymä',
'LBL_POPUPSEARCH'=>'Popup-haku',
'LBL_DASHLETSEARCHVIEW'=>'Sugar Dashlet -haku',
'LBL_DISPLAY_HTML'=>'Näytä HTML-koodi',
'LBL_DETAILVIEW'=>'Yksityiskohtanäkymä',
'LBL_DROP_HERE' => '[Pudota tänne]',
'LBL_EDIT'=>'Muokkaa',
'LBL_EDIT_LAYOUT'=>'Muokkaa asettelua',
'LBL_EDIT_ROWS'=>'Muokkaa rivejä',
'LBL_EDIT_COLUMNS'=>'Muokkaa sarakkeita',
'LBL_EDIT_LABELS'=>'Muokkaa selitteitä',
'LBL_EDIT_PORTAL'=>'Muokkaa Portalia',
'LBL_EDIT_FIELDS'=>'Muokkaa kenttiä',
'LBL_EDITVIEW'=>'Muokkausnäkymä',
'LBL_FILTER_SEARCH' => "Haku",
'LBL_FILLER'=>'(täyte)',
'LBL_FIELDS'=>'Kentät',
'LBL_FAILED_TO_SAVE' => 'Tallentaminen epäonnistui',
'LBL_FAILED_PUBLISHED' => 'Julkaiseminen epäonnistui',
'LBL_HOMEPAGE_PREFIX' => 'Oma',
'LBL_LAYOUT_PREVIEW'=>'Asettelun esikatselu',
'LBL_LAYOUTS'=>'Asettelut',
'LBL_LISTVIEW'=>'Listanäkymä',
'LBL_RECORDVIEW'=>'Tietuenäkymä',
'LBL_RECORDDASHLETVIEW'=>'Tietuenäkymän pienohjelma',
'LBL_PREVIEWVIEW'=>'Preview View',
'LBL_MODULE_TITLE' => 'Studio',
'LBL_NEW_PACKAGE' => 'Uusi paketti',
'LBL_NEW_PANEL'=>'Uusi paneeli',
'LBL_NEW_ROW'=>'Uusi rivi',
'LBL_PACKAGE_DELETED'=>'Paketti poistettu',
'LBL_PUBLISHING' => 'Julkaistaan ...',
'LBL_PUBLISHED' => 'Julkaistu',
'LBL_SELECT_FILE'=> 'Valitse tiedosto',
'LBL_SAVE_LAYOUT'=> 'Tallenna asettelu',
'LBL_SELECT_A_SUBPANEL' => 'Valitse alapaneeli',
'LBL_SELECT_SUBPANEL' => 'Valitse alapaneeli',
'LBL_SUBPANELS' => 'Alapaneelit',
'LBL_SUBPANEL' => 'Alapaneeli',
'LBL_SUBPANEL_TITLE' => 'Otsikko:',
'LBL_SEARCH_FORMS' => 'Etsi',
'LBL_STAGING_AREA' => 'Odotusalue (vedä ja pudota kohteita tähän)',
'LBL_SUGAR_FIELDS_STAGE' => 'Sugar-kentät (napsauta kohteita lisätäksesi ne odotusalueelle)',
'LBL_SUGAR_BIN_STAGE' => 'Sugar-roskakori (napsauta kohteita lisätäksesi ne odotusalueelle)',
'LBL_TOOLBOX' => 'Työkalut',
'LBL_VIEW_SUGAR_FIELDS' => 'Näytä Sugar-kentät',
'LBL_VIEW_SUGAR_BIN' => 'Näytä Sugar-roskakori',
'LBL_QUICKCREATE' => 'Pikaluonti',
'LBL_EDIT_DROPDOWNS' => 'Muokkaa globaalia pudotusvalikkoa',
'LBL_ADD_DROPDOWN' => 'Lisää globaali pudotusvalikko',
'LBL_BLANK' => '-tyhjä-',
'LBL_TAB_ORDER' => 'Sarkainjärjestys',
'LBL_TAB_PANELS' => 'Ota välilehdet käyttöön',
'LBL_TAB_PANELS_HELP' => 'Kun välilehdet ovat käytössä, käytä ‘tyyppi’-pudotusvalikkoa joka kohdalle määrittääksesi, miten se näytetään (välilehti tai paneeli)',
'LBL_TABDEF_TYPE' => 'Näyttötyyppi',
'LBL_TABDEF_TYPE_HELP' => 'Valitse, kuinka tämä kohta tulisi näyttää. Tällä asetuksella on vaikutus vain, jos olet ottanut välilehdet käyttöön tässä näkymässä.',
'LBL_TABDEF_TYPE_OPTION_TAB' => 'Välilyönti',
'LBL_TABDEF_TYPE_OPTION_PANEL' => 'Paneeli',
'LBL_TABDEF_TYPE_OPTION_HELP' => 'Valitse paneeli näyttääksesi tämän paneelin asettelun näkymässä. Valitse välilehti näyttääksesi tämän paneelin erillisessä välilehdessä asettelun sisällä. Kun välilehti on määritetty paneelille, sitä seuraavat paneelit, jotka ollaan asetettu näkymään paneeleina, näytetään välilehden sisällä. <br/>Uusi välilehti aloitetaan seuraavalle paneelille, jolle välilehti on valittu. Jos välilehti on valittu paneelille ennen ensimmäistä paneelia, ensimmäinen paneeli on pakollisesti välilehti.',
'LBL_TABDEF_COLLAPSE' => 'Piilota',
'LBL_TABDEF_COLLAPSE_HELP' => 'Valitse asettaaksesi tämän paneelin oletustilan piilotetuksi.',
'LBL_DROPDOWN_TITLE_NAME' => 'Nimi',
'LBL_DROPDOWN_LANGUAGE' => 'Kieli',
'LBL_DROPDOWN_ITEMS' => 'Listan kohteet',
'LBL_DROPDOWN_ITEM_NAME' => 'Kohteen nimi',
'LBL_DROPDOWN_ITEM_LABEL' => 'Näyttöselite',
'LBL_SYNC_TO_DETAILVIEW' => 'Synkronoi yksityiskohtanäkymään',
'LBL_SYNC_TO_DETAILVIEW_HELP' => 'Valitse tämä asetus synkronoidaksesi tämän muokkausnäkymän asettelun vastaavaan yksityiskohtanäkymän asetteluun. Kentät ja kenttien sijoitus muokkausnäkymässä<br/>synkronoidaan ja tallennetaan yksityiskohtanäkymään automaattisesti, kun muokkausnäkymä tallennetaan. <br/>Asettelun muutoksia ei tulla voimaan tehdä yksityiskohtanäkymässä.',
'LBL_SYNC_TO_DETAILVIEW_NOTICE' => 'Tämä yksityiskohtanäkymä on synkronoitu vastaavan muokkausnäkymän kanssa.<br/> Kentät ja kenttien sijoitus tässä yksityiskohtanäkymässä vastaa niiden tilaa muokkausnäkymässä.<br/> Yksityiskohtanäkymän muutoksia ei voida tallentaa tai julkaista tältä sivulta. Tee muutoksia tai riko asettelujen synkronointi muokkausnäkymässä.',
'LBL_COPY_FROM' => 'Kopioi arvo tästä:',
'LBL_COPY_FROM_EDITVIEW' => 'Kopioi muokkausnäkymästä',
'LBL_DROPDOWN_BLANK_WARNING' => 'Arvot vaaditaan niin kohteen nimikenttään kuin näyttöselitteeseen. Lisätäksesi tyhjän kohteen, napsauta Lisää täyttämättä kyseisiä kenttiä.',
'LBL_DROPDOWN_KEY_EXISTS' => 'Avain on jo listassa',
'LBL_DROPDOWN_LIST_EMPTY' => 'Listassa on oltava vähintään yksi sallittu arvo',
'LBL_NO_SAVE_ACTION' => 'Ei löydetty tallennustoimintoa tälle näkymälle',
'LBL_BADLY_FORMED_DOCUMENT' => 'Studio2:establishLocation: väärin muotoiltu dokumentti',
// @TODO: Remove this lang string and uncomment out the string below once studio
// supports removing combo fields if a member field is on the layout already.
'LBL_INDICATES_COMBO_FIELD' => '** Indikoi kombinaatiokentän. Kombinaatiokenttä on kokoelma yksittäisiä kenttiä. Esimerkiksi, ‘Osoite’ on kombinaatiokenttä joka sisältää kentät ‘Katuosoite’, ‘Postinumero’, ‘Kaupunki’ ja ‘Maa’.<br /><br />Kaksoisklikkaa kombinaatiokenttää nähdäksesi mitä kenttiä se sisältää.',
'LBL_COMBO_FIELD_CONTAINS' => 'sisältää:',

'LBL_WIRELESSLAYOUTS'=>'Mobiiliasettelut',
'LBL_WIRELESSEDITVIEW'=>'Mobiili-muokkausnäkymä',
'LBL_WIRELESSDETAILVIEW'=>'Mobiili-yksityiskohtanäkymä',
'LBL_WIRELESSLISTVIEW'=>'Mobiili-listanäkymä',
'LBL_WIRELESSSEARCH'=>'Mobiilihaku',

'LBL_BTN_ADD_DEPENDENCY'=>'Lisää riippuvuus',
'LBL_BTN_EDIT_FORMULA'=>'Muokkaa kaavaa',
'LBL_DEPENDENCY' => 'Riippuvuus',
'LBL_DEPENDANT' => 'on riippuvainen',
'LBL_CALCULATED' => 'Laskettu arvo',
'LBL_READ_ONLY' => 'Vain luku',
'LBL_FORMULA_BUILDER' => 'Kaavarakentaja',
'LBL_FORMULA_INVALID' => 'Kelpaamaton kaava',
'LBL_FORMULA_TYPE' => 'Kaavan tyypin on oltava',
'LBL_NO_FIELDS' => 'Ei löydetty kenttiä',
'LBL_NO_FUNCS' => 'Ei löydetty funktioita',
'LBL_SEARCH_FUNCS' => 'Etsi funktioita...',
'LBL_SEARCH_FIELDS' => 'Etsi kenttiä...',
'LBL_FORMULA' => 'Kaava',
'LBL_DYNAMIC_VALUES_CHECKBOX' => 'Riippuvainen',
'LBL_DEPENDENT_DROPDOWN_HELP' => 'Vasemmalla on lista valinnoista, jotka ovat saatavilla riippuvaisessa pudotusvalikossa (<i>dependent dropdown</i>). Voit raahata tästä listasta valintoja oikealla oleville listoille. Raahatut valinnat ovat saatavilla kun vanhempi valinta (<i>parent option</i>) on valittu.<br />Jos vanhemman valinnan (<i>parent option</i>) alla ei ole valintoja, kun vanhempi valinta valitaan, riippuvaista pudotusvalikkoa ei näytetä.',
'LBL_AVAILABLE_OPTIONS' => 'Saatavilla olevat valinnat',
'LBL_PARENT_DROPDOWN' => 'Vanhempien pudotusvalikko',
'LBL_VISIBILITY_EDITOR' => 'Näkyvyyseditori',
'LBL_ROLLUP' => 'Yhteenveto',
'LBL_RELATED_FIELD' => 'Liittyvä kenttä',
'LBL_PORTAL_ROLE_DESC' => 'Älä poista tätä roolia. <i>Customer Self-Service Portal Role</i> on järjestelmän generoima rooli, joka luotiin Sugar Portalin aktivointiprosessissa. Käytä pääsykontrolleja tässä roolissa ottaaksesi käyttöön tai poistaaksesi Sugar Portalista <i>bugit-</i>, <i>palvelupyynnöt-</i> tai <i>knowlege base-</i>moduulit. Älä muokkaa muita pääsykontrolleja tässä roolissa välttääksesi ennalta arvaamattomia järjestelmäongelmia. Jos vahingossa poistat tämän roolin, voit luoda sen uudelleen poistamalla käytöstä ja jälleen ottamalla käyttöön Sugar Portalin.',

//RELATIONSHIPS
'LBL_MODULE' => 'Moduuli',
'LBL_LHS_MODULE'=>'Ensisijainen moduuli',
'LBL_CUSTOM_RELATIONSHIPS' => '* Studiossa luotu suhde',
'LBL_RELATIONSHIPS'=>'Suhteet',
'LBL_RELATIONSHIP_EDIT' => 'Muokkaa suhdetta',
'LBL_REL_NAME' => 'Nimi',
'LBL_REL_LABEL' => 'Selite',
'LBL_REL_TYPE' => 'Tyyppi',
'LBL_RHS_MODULE'=>'Liittyvä moduuli',
'LBL_NO_RELS' => 'Ei suhteita',
'LBL_RELATIONSHIP_ROLE_ENTRIES'=>'Vapaaehtoinen edellytys' ,
'LBL_RELATIONSHIP_ROLE_COLUMN'=>'Sarake',
'LBL_RELATIONSHIP_ROLE_VALUE'=>'Arvo',
'LBL_SUBPANEL_FROM'=>'Alapaneeli kohteesta',
'LBL_RELATIONSHIP_ONLY'=>'Näkyviä elementtejä ei luoda tälle suhteelle, koska niillä on vielä aiempi olemassaoleva näkyvä suhde.',
'LBL_ONETOONE' => 'Yksi yhteen (one-to-one)',
'LBL_ONETOMANY' => 'Yksi moneen (one-to-many)',
'LBL_MANYTOONE' => 'Monta yhteen (many-to-one)',
'LBL_MANYTOMANY' => 'Monta moneen (many-to-many)',

//STUDIO QUESTIONS
'LBL_QUESTION_FUNCTION' => 'Valitse funktio tai komponentti.',
'LBL_QUESTION_MODULE1' => 'Valitse moduuli.',
'LBL_QUESTION_EDIT' => 'Valitse muokattava moduuli.',
'LBL_QUESTION_LAYOUT' => 'Valitse muokattava asettelu.',
'LBL_QUESTION_SUBPANEL' => 'Valitse muokattava alapaneeli.',
'LBL_QUESTION_SEARCH' => 'Valitse muokattava hakuasettelu.',
'LBL_QUESTION_MODULE' => 'Valitse muokattava moduulikomponentti.',
'LBL_QUESTION_PACKAGE' => 'Valitse muokattava paketti tai luo uusi.',
'LBL_QUESTION_EDITOR' => 'Valitse työkalu.',
'LBL_QUESTION_DROPDOWN' => 'Valitse muokattava pudotusvalikko tai luo uusi.',
'LBL_QUESTION_DASHLET' => 'Valitse muokattava dashlet-asettelu.',
'LBL_QUESTION_POPUP' => 'Valitse muokattava popup-asettelu.',
//CUSTOM FIELDS
'LBL_RELATE_TO'=>'Yhdistä kohteeseen',
'LBL_NAME'=>'Nimi',
'LBL_LABELS'=>'Selitteet',
'LBL_MASS_UPDATE'=>'Massapäivitys',
'LBL_AUDITED'=>'Tarkastettu',
'LBL_CUSTOM_MODULE'=>'Moduuli',
'LBL_DEFAULT_VALUE'=>'Oletusarvo',
'LBL_REQUIRED'=>'Vaadittu',
'LBL_DATA_TYPE'=>'Tyyppi',
'LBL_HCUSTOM'=>'MUKAUTETTU',
'LBL_HDEFAULT'=>'OLETUS',
'LBL_LANGUAGE'=>'Kieli:',
'LBL_CUSTOM_FIELDS' => '* Studiossa luotu kenttä',

//SECTION
'LBL_SECTION_EDLABELS' => 'Muokkaa selitteitä',
'LBL_SECTION_PACKAGES' => 'Paketit',
'LBL_SECTION_PACKAGE' => 'Paketti',
'LBL_SECTION_MODULES' => 'Moduulit',
'LBL_SECTION_PORTAL' => 'Portaali',
'LBL_SECTION_DROPDOWNS' => 'Pudotusvalikot',
'LBL_SECTION_PROPERTIES' => 'Ominaisuudet',
'LBL_SECTION_DROPDOWNED' => 'Muokkaa pudotusvalikkoa',
'LBL_SECTION_HELP' => 'Ohje',
'LBL_SECTION_ACTION' => 'Toiminto',
'LBL_SECTION_MAIN' => 'Päävalikko',
'LBL_SECTION_EDPANELLABEL' => 'Muokkaa paneelin selitettä',
'LBL_SECTION_FIELDEDITOR' => 'Muokkaa kenttää',
'LBL_SECTION_DEPLOY' => 'Jaa',
'LBL_SECTION_MODULE' => 'Moduuli',
'LBL_SECTION_VISIBILITY_EDITOR'=>'Muokkaa näkyvyyttä',
//WIZARDS

//LIST VIEW EDITOR
'LBL_DEFAULT'=>'Oletus',
'LBL_HIDDEN'=>'Piilotettu',
'LBL_AVAILABLE'=>'Saatavilla',
'LBL_LISTVIEW_DESCRIPTION'=>'Alla on kolme saraketta. <b>Oletussarake</b> sisältää ne kentät, jotka näytetään listanäkymässä oletuksena. <b>Lisäsarake</b> näyttää kentät, joita käyttäjä voi käyttää mukautetun näkymän luomisessa. <b>Saatavilla</b>-sarakkeessa on sarakkeet, jotka ovat saatavilla sinulle ylläpitäjänä tai lisäsarakkeina käyttäjille, mutta jotka eivät juuri nyt ole käytössä.',
'LBL_LISTVIEW_EDIT'=>'Listanäkymän muokkain',

//Manager Backups History
'LBL_MB_PREVIEW'=>'Esikatselu',
'LBL_MB_RESTORE'=>'Palauta',
'LBL_MB_DELETE'=>'Poista',
'LBL_MB_COMPARE'=>'Vertaa',
'LBL_MB_DEFAULT_LAYOUT'=>'Oletusasettelu',

//END WIZARDS

//BUTTONS
'LBL_BTN_ADD'=>'Lisää',
'LBL_BTN_SAVE'=>'Tallenna',
'LBL_BTN_SAVE_CHANGES'=>'Tallenna muutokset',
'LBL_BTN_DONT_SAVE'=>'Hylkää muutokset',
'LBL_BTN_CANCEL'=>'Peruuta',
'LBL_BTN_CLOSE'=>'Sulje',
'LBL_BTN_SAVEPUBLISH'=>'Tallenna ja julkaise',
'LBL_BTN_NEXT'=>'Seuraava',
'LBL_BTN_BACK'=>'Takaisin',
'LBL_BTN_CLONE'=>'Kloonaa',
'LBL_BTN_COPY' => 'Kopioi',
'LBL_BTN_COPY_FROM' => 'Kopioi täältä...',
'LBL_BTN_ADDCOLS'=>'Lisää sarakkeita',
'LBL_BTN_ADDROWS'=>'Lisää rivejä',
'LBL_BTN_ADDFIELD'=>'Lisää kenttä',
'LBL_BTN_ADDDROPDOWN'=>'Lisää pudotusvalikko',
'LBL_BTN_SORT_ASCENDING'=>'Järjestä nousevasti',
'LBL_BTN_SORT_DESCENDING'=>'Järjestä laskevasti',
'LBL_BTN_EDLABELS'=>'Muokkaa selitteitä',
'LBL_BTN_UNDO'=>'Kumoa',
'LBL_BTN_REDO'=>'Tee uudelleen',
'LBL_BTN_ADDCUSTOMFIELD'=>'Lisää mukautettu kenttä',
'LBL_BTN_EXPORT'=>'Vie mukautukset',
'LBL_BTN_DUPLICATE'=>'Kahdenna',
'LBL_BTN_PUBLISH'=>'Julkaise',
'LBL_BTN_DEPLOY'=>'Jaa',
'LBL_BTN_EXP'=>'Vie',
'LBL_BTN_DELETE'=>'Poista',
'LBL_BTN_VIEW_LAYOUTS'=>'Näytä asettelut',
'LBL_BTN_VIEW_MOBILE_LAYOUTS'=>'Näytä mobiiliasettelut',
'LBL_BTN_VIEW_FIELDS'=>'Näytä kentät',
'LBL_BTN_VIEW_RELATIONSHIPS'=>'Näytä suhteet',
'LBL_BTN_ADD_RELATIONSHIP'=>'Lisää suhde',
'LBL_BTN_RENAME_MODULE' => 'Vaihda moduulin nimi',
'LBL_BTN_INSERT'=>'Lisää',
'LBL_BTN_RESTORE_BASE_LAYOUT' => 'Palauta kannan asettelu',
//TABS

//ERRORS
'ERROR_ALREADY_EXISTS'=> 'Virhe: kenttä on jo olemassa',
'ERROR_INVALID_KEY_VALUE'=> "Virhe: kelvoton avainarvo: [&#39;]",
'ERROR_NO_HISTORY' => 'Historiatiedostoja ei löytynyt',
'ERROR_MINIMUM_FIELDS' => 'Asettelun tulee sisältää ainakin yksi kenttä',
'ERROR_GENERIC_TITLE' => 'Virhe on tapahtunut',
'ERROR_REQUIRED_FIELDS' => 'Oletko varma, että haluat jatkaa? Seuraavat vaaditut kentät puuttuvat asettelusta:',
'ERROR_ARE_YOU_SURE' => 'Oletko varma, että haluat jatkaa?',
'ERROR_DATABASE_ROW_SIZE_LIMIT' => 'Kenttää ei voi luoda. Tietokantasi rivien kokoraja on saavutettu tässä taulukossa. <a href="https://support.sugarcrm.com/SmartLinks/Custom/MySQL_Row_Size_Limit/" target="_blank">Lue lisää</a>.',

'ERROR_CALCULATED_MOBILE_FIELDS' => 'Seuraavissa kentissä on laskettuja arvoja joita ei lasketa uudelleen reaaliajassa SugarCRM Mobilen muokkausnäkymässä:',
'ERROR_CALCULATED_PORTAL_FIELDS' => 'Seuraavissa kentissä on laskettuja arvoja joita ei lasketa uudelleen reaaliajassa SugarCRM Portalin muokkausnäkymässä:',

//SUGAR PORTAL
    'LBL_PORTAL_DISABLED_MODULES' => 'Seuraavat moduulit eivät ole käytössä:',
    'LBL_PORTAL_ENABLE_MODULES' => 'Jos haluat ottaa käyttöön ne portaalissa, klikkaa <a id=&#39;configure_tabs&#39; target=&#39;_blank&#39; href=&#39;./index.php?module=Administration&amp;action=ConfigureTabs&#39;>tästä</a>.',
    'LBL_PORTAL_CONFIGURE' => 'Konfiguroi Portal',
    'LBL_PORTAL_ENABLE_PORTAL' => 'Ota portaali käyttöön',
    'LBL_PORTAL_SHOW_KB_NOTES' => 'Ota muistiinpanot käyttöön Tietokanta-moduulissa',
    'LBL_PORTAL_ALLOW_CLOSE_CASE' => 'Salli portaalin käyttäjien sulkea palvelupyyntö',
    'LBL_PORTAL_ENABLE_SELF_SIGN_UP' => 'Salli uusien käyttäjien rekisteröityä',
    'LBL_PORTAL_USER_PERMISSIONS' => 'Käyttäjäoikeudet',
    'LBL_PORTAL_THEME' => 'Portal-teema',
    'LBL_PORTAL_ENABLE' => 'Ota käyttöön',
    'LBL_PORTAL_SITE_URL' => 'Portal-sivusi on saatavilla osoitteessa:',
    'LBL_PORTAL_APP_NAME' => 'Sovelluksen nimi',
    'LBL_PORTAL_CONTACT_PHONE' => 'Puhelinnumero',
    'LBL_PORTAL_CONTACT_EMAIL' => 'Sähköpostiosoite',
    'LBL_PORTAL_CONTACT_EMAIL_INVALID' => 'Anna kelvollinen sähköpostisoite',
    'LBL_PORTAL_CONTACT_URL' => 'URL',
    'LBL_PORTAL_CONTACT_INFO_ERROR' => 'Määritä vähintään yksi yhteystieto',
    'LBL_PORTAL_LIST_NUMBER' => 'Listassa näytettävien tietueiden määrä:',
    'LBL_PORTAL_DETAIL_NUMBER' => 'Yksityiskohtanäkymässä näytettävien kenttien määrä',
    'LBL_PORTAL_SEARCH_RESULT_NUMBER' => 'Globaalihaussa näytettävien tulosten määrä',
    'LBL_PORTAL_DEFAULT_ASSIGN_USER' => 'Oletus-assignment uusille portal-rekisteröinneille',
    'LBL_PORTAL_MODULES' => 'Portaalin moduulit',
    'LBL_CONFIG_PORTAL_CONTACT_INFO' => 'Portaalin yhteystiedot',
    'LBL_CONFIG_PORTAL_CONTACT_INFO_HELP' => 'Määritä yhteystiedot, jotka näytetään portaalin käyttäjille, jotka tarvitsevat tiliin liittyvää apua. Vähintään yksi vaihtoehdoista on määritettävä.',
    'LBL_CONFIG_PORTAL_MODULES_HELP' => 'Voit näyttää tai piilottaa portaalin moduulien nimet portaalin ylänavigointipalkissa vetämällä ja pudottamalla. Portaalin käyttäjien pääsyä moduuleihin hallinnoidaan <a href="?module=ACLRoles&action=index">roolienhallinnassa.</a>',
    'LBL_CONFIG_PORTAL_MODULES_DISPLAYED' => 'Näkyvät moduulit',
    'LBL_CONFIG_PORTAL_MODULES_HIDDEN' => 'Piilotetut moduulit',
    'LBL_CONFIG_VISIBILITY' => 'Näkyvyys',
    'LBL_CASE_VISIBILITY_HELP' => 'Määritä, mitkä portaalin käyttäjät voivat nähdä tapauksen.',
    'LBL_EMAIL_VISIBILITY_HELP' => 'Määritä, mitkä portaalin käyttäjät voivat nähdä tapaukseen liittyviä sähköposteja. Osallistuvat yhteystiedot ovat kentissä Vastaanottaja, Lähettäjä, Kopio ja Piilokopio.',
    'LBL_MESSAGE_VISIBILITY_HELP' => 'Määritä, mitkä portaalin käyttäjät voivat nähdä tapaukseen liittyviä viestejä. Osallistuvat yhteystiedot ovat kentässä Vieraat.',
    'CASE_VISIBILITY_OPTIONS' => [
        'all' => 'Kaikki tiliin liittyvät yhteystiedot',
        'related_contacts' => 'Vain ensisijainen yhteystieto ja tapaukseen liittyvät yhteystiedot',
    ],
    'EMAIL_VISIBILITY_OPTIONS' => [
        'related_contacts' => 'Vain osallistuvat yhteystiedot',
        'all' => 'Kaikki yhteystiedot, jotka voivat nähdä tapauksen',
    ],
    'MESSAGE_VISIBILITY_OPTIONS' => [
        'related_contacts' => 'Vain osallistuvat yhteystiedot',
        'all' => 'Kaikki yhteystiedot, jotka voivat nähdä tapauksen',
    ],


'LBL_PORTAL'=>'Portaali',
'LBL_PORTAL_LAYOUTS'=>'Portal-asettelut',
'LBL_SYNCP_WELCOME'=>'Syötä päivitettävän portal-instanssin URL.',
'LBL_SP_UPLOADSTYLE'=>'Valitse tietokoneeltasi ladattava tyylitiedosto.<br />Tyylitiedostoa käytetään Sugar Portalissa seuraavan kerran kuin synkronoidaan.',
'LBL_SP_UPLOADED'=> 'Ladattu',
'ERROR_SP_UPLOADED'=>'Varmista, että olet lataamassa CSS-tyylitiedostoa.',
'LBL_SP_PREVIEW'=>'Tässä on esikatselu siitä, miltä Sugar Portal näyttäisi käyttäen tyylitiedostoa.',
'LBL_PORTALSITE'=>'Sugar Portal -URL:',
'LBL_PORTAL_GO'=>'Siirry',
'LBL_UP_STYLE_SHEET'=>'Lataa tyylitiedosto',
'LBL_QUESTION_SUGAR_PORTAL' => 'Valitse muokattava Sugar Portal-asettelu.',
'LBL_QUESTION_PORTAL' => 'Valitse muokattava portal-asettelu.',
'LBL_SUGAR_PORTAL'=>'Sugar Portal -editori',
'LBL_USER_SELECT' => '-- Valitse --',

//PORTAL PREVIEW
'LBL_CASES'=>'Palvelupyynnöt',
'LBL_NEWSLETTERS'=>'Uutiskirjeet',
'LBL_BUG_TRACKER'=>'Bug tracker',
'LBL_MY_ACCOUNT'=>'Omat tiedot',
'LBL_LOGOUT'=>'Kirjaudu ulos',
'LBL_CREATE_NEW'=>'Luo uusi',
'LBL_LOW'=>'Matala',
'LBL_MEDIUM'=>'Keskisuuri',
'LBL_HIGH'=>'Korkea',
'LBL_NUMBER'=>'Numero:',
'LBL_PRIORITY'=>'Prioriteetti:',
'LBL_SUBJECT'=>'Aihe',

//PACKAGE AND MODULE BUILDER
'LBL_PACKAGE_NAME'=>'Paketin nimi:',
'LBL_MODULE_NAME'=>'Moduulin nimi',
'LBL_MODULE_NAME_SINGULAR' => 'Yksikössä oleva moduulin nimi:',
'LBL_AUTHOR'=>'Tekijä:',
'LBL_DESCRIPTION'=>'Kuvaus',
'LBL_KEY'=>'Tietue:',
'LBL_ADD_README'=>'Lueminut',
'LBL_MODULES'=>'Moduulit:',
'LBL_LAST_MODIFIED'=>'Viimeksi muokattau:',
'LBL_NEW_MODULE'=>'Uusi moduuli',
'LBL_LABEL'=>'Selite:',
'LBL_LABEL_TITLE'=>'Selite',
'LBL_SINGULAR_LABEL' => 'Yksikössä oleva tunniste',
'LBL_WIDTH'=>'Leveys',
'LBL_PACKAGE'=>'Paketti:',
'LBL_TYPE'=>'Tyyppi:',
'LBL_TEAM_SECURITY'=>'Tiimin turvallisuus',
'LBL_ASSIGNABLE'=>'Osoitettavissa',
'LBL_PERSON'=>'Henkilö',
'LBL_COMPANY'=>'Yritys',
'LBL_ISSUE'=>'Ongelma',
'LBL_SALE'=>'Myynti',
'LBL_FILE'=>'Tiedosto',
'LBL_NAV_TAB'=>'Navigaatiovälilehti',
'LBL_CREATE'=>'Luo',
'LBL_LIST'=>'Lista',
'LBL_VIEW'=>'Näkymä',
'LBL_LIST_VIEW'=>'Listanäkymä',
'LBL_HISTORY'=>'Näytä historia',
'LBL_RESTORE_DEFAULT_LAYOUT'=>'Palauta oletusasettelu',
'LBL_ACTIVITIES'=>'Aktiviteetit',
'LBL_SEARCH'=>'Etsi',
'LBL_NEW'=>'Uusi',
'LBL_TYPE_BASIC'=>'perus',
'LBL_TYPE_COMPANY'=>'yritys',
'LBL_TYPE_PERSON'=>'henkilö',
'LBL_TYPE_ISSUE'=>'ongelma',
'LBL_TYPE_SALE'=>'myynti',
'LBL_TYPE_FILE'=>'tiedosto',
'LBL_RSUB'=>'Tämä on moduulissasi näytettävä alapaneeli',
'LBL_MSUB'=>'Tämä on alapaneeli, jonka moduulisi tarjoaa liittyvälle moduulille näytettäväksi',
'LBL_MB_IMPORTABLE'=>'Salli tuonti',

// VISIBILITY EDITOR
'LBL_VE_VISIBLE'=>'näkyvissä',
'LBL_VE_HIDDEN'=>'piilotettu',
'LBL_PACKAGE_WAS_DELETED'=>'[[package]] poistettiin',

//EXPORT CUSTOMS
'LBL_EC_TITLE'=>'Viennin mukautukset',
'LBL_EC_NAME'=>'Paketin nimi:',
'LBL_EC_AUTHOR'=>'Tekijä:',
'LBL_EC_DESCRIPTION'=>'Kuvaus:',
'LBL_EC_KEY'=>'Tietue:',
'LBL_EC_CHECKERROR'=>'Valitse moduuli.',
'LBL_EC_CUSTOMFIELD'=>'mukautetut kentät',
'LBL_EC_CUSTOMLAYOUT'=>'mukautetut asettelut',
'LBL_EC_CUSTOMDROPDOWN' => 'mukautetut alasvetolistat',
'LBL_EC_NOCUSTOM'=>'Moduuleita ei ole mukautettu.',
'LBL_EC_EXPORTBTN'=>'Vie',
'LBL_MODULE_DEPLOYED' => 'Moduuli on jaettu.',
'LBL_UNDEFINED' => 'määrittelemätön',
'LBL_EC_CUSTOMLABEL'=>'mukautetut selitteet',

//AJAX STATUS
'LBL_AJAX_FAILED_DATA' => 'Ei kyetty hakemaan tietoa',
'LBL_AJAX_TIME_DEPENDENT' => 'Ajasta riippuvainen toimi on käynnissä. Odota ja yritä uudelleen hetken kuluttua.',
'LBL_AJAX_LOADING' => 'Ladataan...',
'LBL_AJAX_DELETING' => 'Poistetaan...',
'LBL_AJAX_BUILDPROGRESS' => 'Rakentaminen käynnissä...',
'LBL_AJAX_DEPLOYPROGRESS' => 'Jakaminen käynnissä...',
'LBL_AJAX_FIELD_EXISTS' =>'Kentälle antamasi nimi on jo käytössä. Anna kentälle uusi nimi.',
//JS
'LBL_JS_REMOVE_PACKAGE' => 'Oletko varma, että haluat poistaa tämän paketin? Tämä poistaa pysyvästi kaikki pakettiin liittyvät tiedostot.',
'LBL_JS_REMOVE_MODULE' => 'Oletko varma, että haluat poistaa tämän moduulin? Tämä poistaa pysyvästi kaikki moduuliin liittyvät tiedostot.',
'LBL_JS_DEPLOY_PACKAGE' => 'Kaikki Studiossa tekemäsi mukautukset tullaan ylikirjoittamaan, kun moduuli otetaan uudelleen käyttöön. Oletko varma, että haluat jatkaa?',

'LBL_DEPLOY_IN_PROGRESS' => 'Otetaan pakettia käyttöön',
'LBL_JS_VALIDATE_NAME'=>'Nimi - Täytyy olla aakkosnumeerinen, alkaa kirjaimella ja olla sisältämättä välilyöntejä.',
'LBL_JS_VALIDATE_PACKAGE_KEY'=>'Paketin avain on jo olemassa',
'LBL_JS_VALIDATE_PACKAGE_NAME'=>'Paketin nimi on jo käytössä',
'LBL_JS_PACKAGE_NAME'=>'Paketin nimi - Nimen pitää alkaa kirjaimella ja se saa sisältää ainoastaan kirjaimia, numeroita ja alaviivoja. Nimi ei saa sisältää välilyöntejä tai muita erikoismerkkejä.',
'LBL_JS_VALIDATE_KEY_WITH_SPACE'=>'Avain – tämän on oltava alfanumeerinen (a-z, 0-9, ei ääkkösiä) ja sen on alettava kirjaimella.',
'LBL_JS_VALIDATE_KEY'=>'Tietue - Täytyy olla aakkosnumeerinen, alkaa kirjaimella ja olla sisältämättä välilyöntejä.',
'LBL_JS_VALIDATE_LABEL'=>'Syötä selite, jota käytetään tämän moduulin näyttönimenä',
'LBL_JS_VALIDATE_TYPE'=>'Valitse yllä olevasta listasta tyyppi, jonka pohjalta haluat rakentaa moduulin',
'LBL_JS_VALIDATE_REL_NAME'=>'Nimi - Täytyy olla aakkosnumeerinen ja olla sisältämättä välilyöntejä',
'LBL_JS_VALIDATE_REL_LABEL'=>'Tunniste - lisää tunniste, joka näytetään alapaneelin yläpuolella',

// Dropdown lists
'LBL_JS_DELETE_REQUIRED_DDL_ITEM' => 'Haluatko varmasti poistaa tämän <i>pakollisen</i> pudotusvalikkokohdan? Tämä saattaa haitata sovelluksesi toimivuutta.',

// Specific dropdown list should be:
// LBL_JS_DELETE_REQUIRED_DDL_ITEM_(UPPERCASE_DDL_NAME)
'LBL_JS_DELETE_REQUIRED_DDL_ITEM_SALES_STAGE_DOM' => 'Haluatko varmasti poistaa pudotusvalikkolistakohdan? <i>Suljettu / voitettu</i>- tai <i>Suljettu / hävitty</i>-vaiheiden poistaminen rikkoo Ennusteet-moduulin.',

// Specific list items should be:
// LBL_JS_DELETE_REQUIRED_DDL_ITEM_(UPPERCASE_ITEM_NAME)
// Item name should have all special characters removed and spaces converted to
// underscores
'LBL_JS_DELETE_REQUIRED_DDL_ITEM_NEW' => 'Poistetaanko varmasti myyntistatus ‘Uusi’? Tämän poistaminen rikkoo myynti&shy;mahdollisuus&shy;moduulin tuoterivi&shy;työnkulun.',
'LBL_JS_DELETE_REQUIRED_DDL_ITEM_IN_PROGRESS' => 'Poistetaanko varmasti myyntistatus ‘Käynnissä’? Tämän poistaminen rikkoo myynti&shy;mahdollisuus&shy;moduulin tuoterivi&shy;työnkulun.',
'LBL_JS_DELETE_REQUIRED_DDL_ITEM_CLOSED_WON' => 'Haluatko varmasti poistaa <i>Suljettu / voitettu</i>-myyntivaiheen? Tämän vaiheen poistaminen rikkoo Ennusteet-moduulin.',
'LBL_JS_DELETE_REQUIRED_DDL_ITEM_CLOSED_LOST' => 'Haluatko varmasti poistaa <i>Suljettu / hävitty</i>-myyntivaiheen? Tämän vaiheen poistaminen rikkoo Ennusteet-moduulin.',

//CONFIRM
'LBL_CONFIRM_FIELD_DELETE'=>'Deleting this custom field will delete both the custom field and all the data related to the custom field in the database. The field will be no longer appear in any module layouts.'
        . ' If the field is involved in a formula to calculate values for any fields, the formula will no longer work.'
        . '\n\nThe field will no longer be available to use in Reports; this change will be in effect after logging out and logging back in to the application. Any reports containing the field will need to be updated in order to be able to be run.'
        . '\n\nDo you wish to continue?',
'LBL_CONFIRM_RELATIONSHIP_DELETE'=>'Oletko varma, että haluat poistaa tämän suhteen?',
'LBL_CONFIRM_RELATIONSHIP_DEPLOY'=>'Tämä tekee suhteesta pysyvän. Oletko varma, että haluat ottaa tämän suhteen käyttöön?',
'LBL_CONFIRM_DONT_SAVE' => 'Muutoksia on tehty sitten viime tallentamisen, haluatko tallentaa?',
'LBL_CONFIRM_DONT_SAVE_TITLE' => 'Tallenna muutokset?',
'LBL_CONFIRM_LOWER_LENGTH' => 'Tiedot saatetaan katkaista ennen niiden loppua, eikä tätä voida kumota. Oletko varma, että haluat jatkaa?',

//POPUP HELP
'LBL_POPHELP_FIELD_DATA_TYPE'=>'Valitse sopiva tietotyyppi kenttään syötettävälle tiedolle.',
'LBL_POPHELP_FTS_FIELD_CONFIG' => 'Määritä kenttä haettavaksi kokotekstinä.',
'LBL_POPHELP_FTS_FIELD_BOOST' => 'Tehostus on prosessi, jolla parannetaan tietueen kenttien osuvuutta.<br />Kentät, joiden tehostusarvo on suurempi, saavat enemmän painoarvoa haussa. Kun haku tehdään, suuremman tehostusarvon saaneet kentät näytetään hakutuloksissa ylempänä.<br />Oletusarvo on 1.0, joka on neutraali. Positiivinen tehostus voi olla mikä tahansa lukua 1 suurempi float-lukuarvo. Negatiivinen tehostus on lukua 1 pienempi arvo. Esimerkiksi arvo 1.35 antaa kentälle tehostusarvon 135 %. Arvo 0.60 antaa negatiivisen tehostuksen.<br />Huomaa, että aiemmissa versioissa vaadittiin kokotekstihaun uudellenindeksointi, jota ei enää vaadita.',
'LBL_POPHELP_IMPORTABLE'=>'<b>Kyllä</b>: Kenttä sisällytetään tuontioperaatioon.<br><b>Ei</b>: Kenttää ei sisällytetä tuontiin.<br><b>Vaadittu</b>: Kentälle täytyy antaa arvo missä tahansa tuonnissa.',
'LBL_POPHELP_PII'=>'Tämä kenttä merkitään automaattisesti tarkastukseen ja se on käytettävissä Henkilötiedot-näkymässä.<br>Henkilötiedot-kenttiä voi myös pysyvästi poistaa, kun tietue liittyy tietosuojan poistopyyntöön.<br>Poisto tehdään tietosuojamoduulissa ja sen voi suorittaa järjestelmänvalvoja tai käyttäjä jolla on tietosuojavalvojan rooli.',
'LBL_POPHELP_IMAGE_WIDTH'=>'Syötä luku leveydelle, mitattuna pikseleissä.<br/>Ladattu kuva skaalataan tähän leveyteen.',
'LBL_POPHELP_IMAGE_HEIGHT'=>'Syötä luku korkeudelle, mitattuna pikseleissä.<br/>Ladattu kuva skaalataan tähän korkeuteen.',
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
'LBL_POPHELP_REQUIRED'=>"Luo asettelumalli, joka määrittää, onko tämä pakollinen kenttä.<br/>"
    . "Pakolliset kentät noudattavat selainpohjaisesessa mobiilinäkymässä olevaa mallia, <br/>"
    . "mutta ne eivät noudata alkuperäisissä sovelluksissa, kuten Sugar Mobile iPhone-laitteille, olevaa mallia.<br/>"
    . "Ne eivät noudata Sugarin itsepalveluportaalissa olevaa mallia.",
'LBL_POPHELP_READONLY'=>"Luo asettelumalli, joka määrittää, onko tämä vain luku -muotoinen kenttä.<br/>"
        . "Vain luku -muotoiset kentät noudattavat selainpohjaisesessa mobiilinäkymässä olevaa mallia, <br/>"
        . "mutta ne eivät noudata alkuperäisissä sovelluksissa, kuten Sugar Mobile iPhone-laitteille, olevaa mallia.<br/>"
        . "Ne eivät noudata Sugarin itsepalveluportaalissa olevaa mallia.",
'LBL_POPHELP_GLOBAL_SEARCH'=>'Käytä tätä kenttää, kun haet tietueita yleishaulla tässä moduulissa.',
//Revert Module labels
'LBL_RESET' => 'Palauta',
'LBL_RESET_MODULE' => 'Palauta moduuli',
'LBL_REMOVE_CUSTOM' => 'Poista mukautukset',
'LBL_CLEAR_RELATIONSHIPS' => 'Poista suhteet',
'LBL_RESET_LABELS' => 'Palauta selitteet',
'LBL_RESET_LAYOUTS' => 'Palauta asettelut',
'LBL_REMOVE_FIELDS' => 'Poista mukautetut kentät',
'LBL_CLEAR_EXTENSIONS' => 'Poista laajennukset',

'LBL_HISTORY_TIMESTAMP' => 'Aikaleima',
'LBL_HISTORY_TITLE' => '- historia',

'fieldTypes' => array(
                'varchar'=>'Tekstikenttä',
                'int'=>'Kokonaisluku',
                'float'=>'Liukuluku',
                'bool'=>'Valintaruutu',
                'enum'=>'Pudotusvalikko',
                'multienum' => 'Monivalinta',
                'date'=>'Päivämäärä',
                'phone' => 'Puhelin',
                'currency' => 'Valuutta',
                'html' => 'HTML sähköposti',
                'radioenum' => 'Radio',
                'relate' => 'Yhdistä',
                'address' => 'Osoite',
                'text' => 'Tekstialue',
                'url' => 'URL',
                'iframe' => 'IFrame',
                'image' => 'Kuva',
                'encrypt'=>'Salaa',
                'datetimecombo' =>'Päivä ja aika',
                'decimal'=>'Desimaalinumero',
                'autoincrement' => 'Automaattinen lisäys',
                'actionbutton' => 'Toimintapainike',
),
'labelTypes' => array(
    "" => "Usein käytetyt selitteet",
    "all" => "Kaikki",
),

'parent' => 'Flex Relate',

'LBL_ILLEGAL_FIELD_VALUE' =>"Pudotusvalikon kenttäavain ei saa sisältää lainausmerkkejä.",
'LBL_CONFIRM_SAVE_DROPDOWN' =>"Olet valitsemassa tämän kohteen poistettavaksi pudotusvalikkolistasta. Kaikki tätä listaa käyttävät pudotusvalikot eivät enää näytä arvoa, eikä arvoa voida enää valita pudotusvalikon kentistä. Oletko varma, että haluat jatkaa?",
'LBL_POPHELP_VALIDATE_US_PHONE'=>"Select to validate this field for the entry of a 10-digit<br>" .
                                 "phone number, with allowance for the country code 1, and<br>" .
                                 "to apply a U.S. format to the phone number when the record<br>" .
                                 "is saved. The following format will be applied: (xxx) xxx-xxxx.",
'LBL_ALL_MODULES'=>'Kaikki moduulit',
'LBL_RELATED_FIELD_ID_NAME_LABEL' => '{0} (liittyviä {1} ID)',
'LBL_HEADER_COPY_FROM_LAYOUT' => 'Kopioi asettelusta...',
'LBL_RELATIONSHIP_TYPE' => 'Suhde',

// Edit Labels
'LBL_COMPARISON_LANGUAGE' => 'Vertailukieli',
'LBL_LABEL_NOT_TRANSLATED' => 'Tätä selitettä ei käännetä',
);
