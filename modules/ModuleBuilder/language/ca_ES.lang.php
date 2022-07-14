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
    'LBL_LOADING' => 'S&#39;està carregant' /*for 508 compliance fix*/,
    'LBL_HIDEOPTIONS' => 'Amaga opcions' /*for 508 compliance fix*/,
    'LBL_DELETE' => 'Esborrar' /*for 508 compliance fix*/,
    'LBL_POWERED_BY_SUGAR' => 'Desenvolupat per SugarCRM' /*for 508 compliance fix*/,
    'LBL_ROLE' => 'Funció',
    'LBL_BASE_LAYOUT' => 'Disseny base',
    'LBL_FIELD_NAME' => 'Nom del camp',
    'LBL_FIELD_VALUE' => 'Valor',
    'LBL_LAYOUT_DETERMINED_BY' => 'Disseny determinat per:',
    'layoutDeterminedBy' => [
        'std' => 'Disseny estàndard',
        'role' => 'Funció',
        'dropdown' => 'Camp desplegable',
    ],
    'LBL_DELETE_CUSTOM_LAYOUTS' => 'Se suprimiran tots els dissenys personalitzats. Segur que voleu canviar les definicions del vostre disseny actual?',
'help'=>array(
    'package'=>array(
            'create'=>'Proporcioni un <b>Nom</b> per el paquet. El nom que introdueixi ha de ser alfanumèric i no ha de contenir espais. (Exemple: HR_Management)<br/><br/> Pot proporcionar la informació de l&#39; <b>Autor</b> i la <b>Descripció</b> del paquet. <br/><br/>Faci clic a <b>Guardar</b> per crear el paquet.',
            'modify'=>'Les propietats i accions possibles del <b>Paquet</b> apareixen aquí.<br><br>Pot modificar el <b>Nom</b>, <b>Autor</b> i <b>Descripció</b> del paquet, així com veure i personalitzar qualsevol dels mòduls continguts en el paquet.<br><br>Faci clic a <b>Nou Mòdul</b> per crear un mòdul per el paquet.<br><br>Si el paquet conté al menys un mòdul, pot <b>Publicar</b> i <b>Desplegar</b> el paquet, així com <b>Exportar</b> les personaltizacions realitzades al paquet.',
            'name'=>'Aquest és el <b>Nom</b> del paquet actual. <br/><br/>El nom que introdueixi ha de ser alfanumèric, començar per una lletra i no contenir espais. (Exemple: HR_Management)',
            'author'=>'Aquest és l&#39; <b>Autor</b> mostrat durant la instal·lació com el nom de l&#39;entitat que ha creat el paquet.<br><br>L&#39;Autor podría ser un individu o una empresa.',
            'description'=>'Aquesta és la <b>Descripció</b> del paquet que es mostra durant la instal·lació.',
            'publishbtn'=>'Faci clic a <b>Publicar</b> per guardar totes les dades introduides i per a crear un arxiu .zip que sigui una versió instalable del paquet.<br><br>Utilitzi el <b>Carregador de Mòduls</b> per pujar l&#39;arxiu .zip i instalar el paquet.',
            'deploybtn'=>'Faci clic a <b>Desplegar</b> per guardar totes les dades introduides i per instalar el paquet, incloent tots els mòduls, a la instància actual.',
            'duplicatebtn'=>'Faci clic a <b>Duplicar</b> per a copiar el contingut del paquet en un paquet nou i mostrar l&#39;acabat de creat paquet. <br/><br/>Es crearà de manera automàtica un nou nom per el nou paquet afegint un número al final del nom del paquet original. Pot renombrar el nou paquet introduint un nou <b>Nom</b> i fent clic a <b>Guardar</b>.',
            'exportbtn'=>'Faci clic a <b>Exportar</b> per crear un arxiu .zip que contingui les personalitzacions fetes al paquet.<br><br> L&#39;arxiu generat no és una versió instal·lable del paquet.<br><br>Utilitzi el <b>Carregador de Mòduls</b> per importar l&#39;arxiu .zip i per a que el paquet, personalitzacions incloses, apareixi en el Constructor de Mòduls.',
            'deletebtn'=>'Faci clic a <b>Eliminar</b> per eliminar aquest paquet i tots els arxius relacionats amb aquest paquet.',
            'savebtn'=>'Faci clic a <b>Guardar</b> per guardar totes les dades introduides relatives al paquet.',
            'existing_module'=>'Faci clic a l&#39;icona <b>Mòdul</b> per editar les propietats i personalitzar els camps, relacions i dissenys associats al mòdul.',
            'new_module'=>'Faci clic a <b>Nou Mòdul</b> per crear un nou mòdul per aquest paquet.',
            'key'=>'Aquesta <b>Clau</b> alfanumèrica de 5 lletres s&#39;utilitzarà per prefixar tots els directoris, noms de classes i taules de base de dades de tots els mòduls en el paquet actual.<br><br>La clau s&#39;utilitza per contribuir a la unicitat dels noms de taules.',
            'readme'=>'Faci clic per agregar un text <b>Llegeix-me</b> per aquest paquet.<br><br>El Llegeix-me quedarà disponible en el moment de instal·lació.',

),
    'main'=>array(

    ),
    'module'=>array(
        'create'=>'Proporcioni un <b>Nom</b> per al mòdul. L&#39; <b>Etiqueta</b> que introdueixi apareixerà a la pestanya de navegació. <br/><br/>Trii mostrar una pestanya de navegació per al mòdul marcant el quadre <b>Pestanya de Navegació</b>.<br/><br/>Marqui el quadre <b>Seguritat d&#39;Equips</b> per a tenir un camp de selecció d&#39;Equips dins de los registres del mòdul. <br/><br/>Finalment, seleccioni el tipus de mòdul que desitja crear. <br/><br/>Seleccioni un tipus de plantilla. Cada plantilla conté un conjunt determinat de camps, així com dissenys predefinits, per a ser utilitzats com a base del seu mòdul. <br/><br/>Faci clic a <b>Guardar</b> per crear el mòdul.',
        'modify'=>'Pot canviar les propietats del mòdul o personalitzar els <b>Camps</b>, <b>Relacions</b> i <b>Dissenys</b> relacionats amb el mòdul.',
        'importable'=>'Marcant l&#39;opció <b>Importable</b> s&#39;habilitarà la importació per aquest mòdul.<br><br>Un enllaç a l&#39;Assistent d&#39;Importació apareixerà en el panell de Dreceres del mòdul.  L&#39;Assistent d&#39;Importació li facilitarà la importació de dades provinents de fonts externes en el mòdul personalitzat.',
        'team_security'=>'Marcant l&#39;opció <b>Seguretat d&#39;Equips</b> s&#39;habilitarà la seguretat d&#39;equips per aquest mòdul.  <br/><br/>Si la seguretat d&#39;equips està habilitada, el camp de selecció d&#39;Equip apareixerà en els registres del mòdul',
        'reportable'=>'Marcant aquesta opció permetrà que aquest mòdul tingui informes que corrin contra ell.',
        'assignable'=>'Marcant aquesta opció permetrà que un registre d&#39;aquest mòdul sigui assignat a un usuari.',
        'has_tab'=>'Marcant <b>Pestanya de Navegació</b> proveïrà al mòdul d&#39;una pestanya de navegació.',
        'acl'=>'Marcant aquesta opció habilitarà els Controls d&#39;Accés per aquest mòdul, incluent la Seguretat a Nivell de Camp.',
        'studio'=>'Marcant aquesta opció permetrà que els administradors personalitzin aquest mòdul dins de l&#39;Estudi.',
        'audit'=>'Marcant aquesta opció habilitarà l&#39;Auditoria per  aquest mòdul. Els canvis a alguns dels camps seran registrats de manera que els administradors puguin revisar l&#39;historial de canvis.',
        'viewfieldsbtn'=>'Faci clic a <b>Veure Camps</b> per veure els camps associats amb el mòdul i crear i editar camps personalitzats.',
        'viewrelsbtn'=>'Faci clic a <b>Veure Relacions</b> per a veure les relacions associades amb aquest mòdul i crear noves relacions.',
        'viewlayoutsbtn'=>'Faci clic a <b>Veure Dissenys</b> per a veure els dissenys d&#39;aquest mòdul i personalitzar la disposició dels camps dins dels dissenys.',
        'viewmobilelayoutsbtn' => 'Feu clic a <b>Veure dissenys mòbils</b> per veure els dissenys mòbils del mòdul i per personalitzar la distribució de camps dins dels dissenys.',
        'duplicatebtn'=>'Faci clic a <b>Duplicar</b> per copiar les propietats del mòdul en un nou i mostrar el nou mòdul. <br/><br/>Es crearà de manera automàtica un nou nom per el nou mòdul afegint un número al final del nom del mòdul original.',
        'deletebtn'=>'Faci clic a <b>Eliminar</b> per eliminar aquest mòdul.',
        'name'=>'Aquest és el <b>Nom</b> del mòdul actual.<br/><br/>El nom ha de ser alfanumèric, començar per una lletra i no contenir espais. (Exemple: HR_Management)',
        'label'=>'Aquesta és l&#39;<b>Etiqueta</b> que apareixerà a la pestanya de navegació del mòdul.',
        'savebtn'=>'Faci clic a <b>Guardar</b> per guardar totes les dades introduides relacionades amb el mòdul.',
        'type_basic'=>'El tipus de plantilla <b>Bàsica</b> proporciona els camps bèsics, com Nom, Assignat a, Equip, Data de Creació i Descripció.',
        'type_company'=>'El tipus de plantilla <b>Empresa</b> proporciona camps particulars d&#39;una organizació, com Nom d&#39;Empresa, Indústria i Adreça de Facturació.<br/><br/>Utilitzi aquesta plantilla per crear mòduls que sigui similars al mòdul estàndar de Comptes.',
        'type_issue'=>'El tipus de plantilla <b>Incidència</b> proporciona camps particulars de casos i incidèncis, com Número, Estat, Prioritat i Descripció.<br/><br/>Utilitzi aquesta plantilla pera crear mòduls que siguin similars als mòduls estàndar de Casos i Seguiment d&#39;Incidències.',
        'type_person'=>'El tipus de plantilla <b>Persona</b> proporciona camps particulars d&#39;individus, com Salutació, Càrrec, Nom, Adreça i Número de Telèfon.<br/><br/>Utilitzi aquesta plantilla per crear mòduls que siguin similars als mòduls estàndar de Contactes i Clients Potencials.',
        'type_sale'=>'El tipus de plantilla <b>Ventes</b> proporciona camps específics d&#39;una oportunitat, com la Presa de Contacte, Etapa, Quantitat i Probabilitat.<br/><br/>Utilitzi aquesta plantilla per crear mòduls que siguin similars al mòdul estàndar d&#39;Oportunitats.',
        'type_file'=>'La plantilla <b>Arxiu</b> proporciona camps específics d&#39;un Document, com Nom d&#39;Arxiu, tipus de Document, i Data de Publicació.<br><br>Utilitzi aquesta plantilla per crear mòduls que siguin similars al mòdul estàndar de Documents.',

    ),
    'dropdowns'=>array(
        'default' => 'Totes les <b>Llistes Desplegables</b> de l&#39;aplicació es llisten a aquí.<br><br>Les llistes desplegables poden ser utilitzades per camps de llista desplegable de qualsevol mòdul.<br><br>Per a realitzar canvis a una llista desplegable existent, faci clic al seu nom.<br><br>Faci clic a <b>Afegir Desplegable</b> per crear un nou desplegable.',
        'editdropdown'=>'Les llistes desplegables poden ser utilitzades per camps desplegables estàndar o personaltizats de qualsevol mòdul.<br><br>Proporcioni un <b>Nom</b> per a la llista desplegable.<br><br>Si té instalat altres paquets d&#39;idioma a l&#39;aplicació, podrà seleccionar l&#39; <b>Idioma</b> a utilitzar per als elements de la llista.<br><br>En el camp <b>Nom d&#39;Element</b>, proporcioni un nom per a l&#39;opció a la llista desplegable.  Aquest nom no apareixerà a la llista desplegable que és visible als usuaris.<br><br>En el camp <b>Etiqueta de Visualizació</b>, proporcioni una etiqueta que serà visible als usuaris.<br><br>Després de  proporcionar el nom d&#39;element i l&#39;etiqueta de visualització, faci clic a <b>Afegir</b> per afegir l&#39;element a la llista desplegable.<br><br>Per canviar l&#39;ordre dels elements a la llista, arrossegui i deixi anar elements en les posicions desitjades.<br><br>Per editar l&#39;etiqueta de visualizació d&#39;un element, faci clic a l&#39;icona <b>Editar</b>, y introdueixi una nueva etiqueta. Per eliminar un element de la llista desplegable, faci clic a l&#39;icona <b>Eliminar</b>.<br><br>Per a desfer un canvi realitzat a una etiqueta de visualizació, faci clic a <b>Desfer</b>.  Per a refer un canvi que ha estat previament desfet, faci clic a <b>Refer</b>.<br><br>Faci clic a <b>Guardar</b> per a guardar la llista desplegable.',

    ),
    'subPanelEditor'=>array(
        'modify'	=> 'All of the fields that can be displayed in the <b>Subpanel</b> appear here.<br><br>The <b>Default</b> column contains the fields that are displayed in the Subpanel.<br/><br/>The <b>Hidden</b> column contains fields that can be added to the Default column.'
    . '<br/><br/><!--not_in_theme!--><img src="themes/default/images/SugarLogic/icon_dependent.png"/>Indicates a Dependent field that may or may not be visible based on the value of a formula.<br/><!--not_in_theme!--><img src="themes/default/images/SugarLogic/icon_calculated.png" /> Indicates a Calculated field whose value will be automatically determined based on a formula.'
    ,
        'savebtn'	=> 'Faci clic a <b>Guardar i Desplegar</b> per guardar els canvis que ha realitzat i activar-los all mòdul.',
        'historyBtn'=> 'Faci clic a <b>Veure Historial</b> per a veure i restaurar de l&#39;historial un disseny previament guardat.',
        'historyRestoreDefaultLayout'=> 'Feu clic a <b>Disposició per defecte de restaurar</b> per restaurar una vista a la seva disposició original.',
        'Hidden' 	=> 'Els camps <b>Ocults</b> no apareixen al subpanell.',
        'Default'	=> 'Els camps <b>Per Defecte</b> apareixen al subpanell.',

    ),
    'listViewEditor'=>array(
        'modify'	=> 'All of the fields that can be displayed in the <b>ListView</b> appear here.<br><br>The <b>Default</b> column contains the fields that are displayed in the ListView by default.<br/><br/>The <b>Available</b> column contains fields that a user can select in the Search to create a custom ListView. <br/><br/>The <b>Hidden</b> column contains fields that can be added to the Default or Available column.'
    . '<br/><br/><!--not_in_theme!--><img src="themes/default/images/SugarLogic/icon_dependent.png"/>Indicates a Dependent field that may or may not be visible based on the value of a formula.<br/><!--not_in_theme!--><img src="themes/default/images/SugarLogic/icon_calculated.png" /> Indicates a Calculated field whose value will be automatically determined based on a formula.'
    ,
        'savebtn'	=> 'Faci clic a <b>Guardar i Desplegar</b> per guardar els canvis que ha realitzat i activar-los all mòdul.',
        'historyBtn'=> 'Faci clic a <b>Veure Historial</b> per veure i restaurar de l&#39;historial un disseny previament guardat.',
        'historyRestoreDefaultLayout'=> 'Feu clic a <b>Disposició per defecte de restaurar</b> per restaurar una vista a la seva disposició original. <br><br><b>Restaurar la disposició per defecte</b> només restaura la col. locació de camp dins el traçat original. Per canviar les etiquetes de camp, feu clic a la icona d&#39;edició al costat de cada camp.',
        'Hidden' 	=> 'Els camps <b>Ocults</b> no estan disponibles per a ser vistos per els usuaris en les Vistes de Llista.',
        'Available' => 'Els camps <b>Disponibles</b> no es mostren per defecte, però poden ser agregats a les Vistes de Llista per els usuaris.',
        'Default'	=> 'Els camps <b>Per Defecte</b> apareixen en les Vistes de Llista que no han estat personalitzades per els usuaris.'
    ),
    'popupListViewEditor'=>array(
        'modify'	=> 'All of the fields that can be displayed in the <b>ListView</b> appear here.<br><br>The <b>Default</b> column contains the fields that are displayed in the ListView by default.<br/><br/>The <b>Hidden</b> column contains fields that can be added to the Default or Available column.'
    . '<br/><br/><!--not_in_theme!--><img src="themes/default/images/SugarLogic/icon_dependent.png"/>Indicates a Dependent field that may or may not be visible based on the value of a formula.<br/><!--not_in_theme!--><img src="themes/default/images/SugarLogic/icon_calculated.png" /> Indicates a Calculated field whose value will be automatically determined based on a formula.'
    ,
        'savebtn'	=> 'Faci clic a <b>Guardar i Desplegar</b> per guardar els canvis que ha realitzat i activar-los all mòdul.',
        'historyBtn'=> 'Faci clic a <b>Veure Historial</b> per veure i restaurar de l&#39;historial un disseny previament guardat.',
        'historyRestoreDefaultLayout'=> 'Feu clic a <b>Disposició per defecte de restaurar</b> per restaurar una vista a la seva disposició original. <br><br><b>Restaurar la disposició per defecte</b> només restaura la col. locació de camp dins el traçat original. Per canviar les etiquetes de camp, feu clic a la icona d&#39;edició al costat de cada camp.',
        'Hidden' 	=> 'Els camps <b>Ocults</b> no estan disponibles per a ser vistos per els usuaris en les Vistes de Llista.',
        'Default'	=> 'Els camps <b>Per Defecte</b> apareixen en les Vistes de Llista que no han estat personalitzades per els usuaris.'
    ),
    'searchViewEditor'=>array(
        'modify'	=> 'All of the fields that can be displayed in the <b>Search</b> form appear here.<br><br>The <b>Default</b> column contains the fields that will be displayed in the Search form.<br/><br/>The <b>Hidden</b> column contains fields available for you as an admin to add to the Search form.'
    . '<br/><br/><!--not_in_theme!--><img src="themes/default/images/SugarLogic/icon_dependent.png"/>Indicates a Dependent field that may or may not be visible based on the value of a formula.<br/><!--not_in_theme!--><img src="themes/default/images/SugarLogic/icon_calculated.png" /> Indicates a Calculated field whose value will be automatically determined based on a formula.'
    . '<br/><br/>This configuration applies to popup search layout in legacy modules only.',
        'savebtn'	=> 'Al fer clic a <b>Guardar i Desplegar</b> guardarà tots els canvis i els activarà',
        'Hidden' 	=> 'Els camps <b>Ocults</b> no apareixen a la recerca.',
        'historyBtn'=> 'Faci clic a <b>Veure Historial</b> per veure i restaurar de l&#39;historial un disseny previament guardat.',
        'historyRestoreDefaultLayout'=> 'Feu clic a <b>Disposició per defecte de restaurar</b> per restaurar una vista a la seva disposició original. <br><br><b>Restaurar la disposició per defecte</b> només restaura la col. locació de camp dins el traçat original. Per canviar les etiquetes de camp, feu clic a la icona d&#39;edició al costat de cada camp.',
        'Default'	=> 'Els camps <b>Per Defecte</b> apareixen a la Recerca..'
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
        'saveBtn'	=> 'Faci clic a <b>Guardar</b> per a preservar els canvis que ha realitzat al disseny des de la última vegada que ha va guardar.<br><br>Els canvis no es mostraran al mòdul fins que Desplegui els canvis guardats.',
        'historyBtn'=> 'Faci clic a <b>Veure Historial</b> per veure i restaurar de l&#39;historial un disseny previament guardat.',
        'historyRestoreDefaultLayout'=> 'Feu clic a <b>Disposició per defecte de restaurar</b> per restaurar una vista a la seva disposició original. <br><br><b>Restaurar la disposició per defecte</b> només restaura la col. locació de camp dins el traçat original. Per canviar les etiquetes de camp, feu clic a la icona d&#39;edició al costat de cada camp.',
        'publishBtn'=> 'Faci clic a <b>Guardar i Desplegar</b> per a guardar tots els canvis que ha realitzat al disseny des de la última vegada que ho va guardar, i per deixar actius els canvis al mòdul.<br><br>El disseny serà mostrat de nou immediatament al mòdul.',
        'toolbox'	=> 'La <b>Caixa d&#39;Eines</b> conté la <b>Paperera de Reciclatge</b>, elements de disseny adicionals i el conjunt de camps disponibles per a ser afegits al disseny.<br/><br/>Els elements de disseny i els camps de la Caixa d&#39;Eines poden ser arrossegats i deixats anar en el disseny, y els elements de disseny i els camps poden ser arrossegats i deixats anar del disseny a la Caixa d&#39;Eines.<br><br>Els elements de disseny son <b>Panells</b> i <b>Files</b>. Agregant una nova fila o un nou panell al disseny proporciona ubicacions adicionals al disseny per als camps.<br/><br/>Arrossegui i deixi qualsevol camp a la Caixa d&#39;Eines o en el disseny a una posició de camp ocupada per a intercanviar les ubicacions dels dos camps.<br/><br/>El camp de <b>Farcit</b> crea espai buit en el disseny allà  on és colocat.',
        'panels'	=> 'L&#39;àrea de <b>Disseny</b> proporciona una vista sobre com el disseny apareixerà al mòdul quan els canvis realitzats al disseny siguin desplegats.<br/><br/>Pot reposicionar camps, files i panells arrossegant-los i deixant-los anar  a la ubicació desitjada.<br/><br/>Tregui elements arrossegant-los i deixant-los anar a la <b>Paperera de Reciclatge</b> de la Caixa d&#39;Eines, o afegeixi nous elements i camps arrossegant-los de la <b>Caixa d&#39;Eines</b> i deixant-los anar a la ubicació desitjada del disseny.',
        'delete'	=> 'Arrossegui i deixi anar qualsevol element aquí per a treure&#39;l  del disseny',
        'property'	=> 'Editi l&#39;etiqueta mostrada per aquest camp. <br/>El <b>Ordre de Tabulació</b> controla en quuin ordre la tecla tabulador canviarà el focus entre els diferents camps.',
    ),
    'fieldsEditor'=>array(
        'default'	=> 'Els <b>Camps</b> disponibles per a un mòdul es llisten aquí per Nom de Camp.<br><br>Els camps personalitzats creatss pel mòdul aparreixen sobre els camps disponibles pel mòdul per defecte.<br><br>Per editar un camp, faci clic al <b>Nom de Camp</b>.<br/><br/>Per a crear un noe camp, faci clic a <b>Afegir Camp</b>.',
        'mbDefault'=>'Els <b>Camps</b> disponibles per un mòdul es llisten aquí per Nom de Camp.<br><br>Per personalitzar l&#39;etiqueta del camp plantilla, faci clic al Nom de Camp.<br><br>Per a crear un nou camp, faci clic a <b>Afegir Camp</b>. L&#39;etiqueta i la resta de propietats del nou camp poden ser editades després de la seva creació fent clic al Nom de Camp.<br><br>Després del desplegament del mòdul, els nous camps creats amb el Constructor de Mòduls seran tractats com camps estandar del mòdul desplegat a l&#39;Estudi.',
        'addField'	=> 'Seleccioni un <b>Tipus de Dades</b> per el nou camp. El tipus que seleccioni determinarà quin tipus de caràcters poden introduir-se per el camp. Per exemple, només es podran introduir números sencers en camps que son del tipus de dades Senceres.<br><br> Provi al camp d&#39;un <b>Nom</b>.  El nom he de ser alfanumèric i no contenir espais. El caràcter subratllat també és vàlid.<br><br> L&#39; <b>Etiqueta de Visualizació</b> és l&#39;etiqueta que apareixerà per als camps en els dissenys de mòduls.  L&#39; <b>Etiqueta del Sistema</b> s&#39;utiltza per a fer referència al camp al codi.<br><br> Segons el tipus de dades seleccionades per al camp, algunes o totes les següents propietats podran ser establertes en el mateix:<br><br> El <b>Text d&#39;Ajuda</b> apareix temporalment quan l&#39;usuari manté el cursor sobre el camp i pot ser utilitzat per indicar a l&#39;usuari el tipus d&#39;entrada desitjada.<br><br> El <b>Text de Comentari</b> només es veu a l&#39;Estudi i/o Constructor de Mòduls, i pot ser utilitzat per a descriure el camp als administradors.<br><br> El <b>Valor per Defecte</b> que apareixerà en el camp.  Els usuaris poden introduir un nou valor  al camp o deixar el valor predeterminat.<br><br> Seleccioni l&#39;opció d&#39;<b>Actualització Massiva</b> per poder utilitzar la característica d&#39;Actualizació Massiva al camp.<br><br>El valor del <b>Tamany Màxim</b> determina el màxim número de caràcters que poden ser introduits al camp.<br><br> Seleccioni l&#39;opció <b>Camp Requerit</b> per a fer el camp requerit. Ha de suministrar-se un valor per aquest camp per poder guardar un registre que el contingui.<br><br> Seleccioni l&#39;opció <b>Informable</b> per a permetre que el camp sigui utilitzat en filtres y per mostrar dades en Informes.<br><br> Seleccioni l&#39;opció <b>Auditar</b> per poder realitzar un seguiment dels canvis el camp en el Registre de Canvis.<br><br>Seleccioni una de les opcions en el camp <b>Importable</b> per a permetre, prohibir o requerir que el camp sigui importat mitjançant l&#39;Assistent d&#39;Importació.<br><br>Seleccioni una opció al camp <b>Combinar Duplicats</b> per habilitar o no les característiques de Combinar Duplicats i Recerca de Duplicatss.<br><br>Per certs tipus de dsdes es podran establir propietats adicionals.',
        'editField' => 'Les propietats d&#39;aquest camp poden  ser personalitzades.<br><br>Faci clic a <b>Clonar</b> per crear un nou camp amb les mateixes propietats.',
        'mbeditField' => 'L&#39;<b>Etiqueta de Visualizació</b> d&#39;un camp de Sugar pot ser personalitzada. La resta de propietats del camp no poden ser personaltzades.<br><br>Faci clic a <b>Clonar</b> per crear un nou camp amb les mateixes propietats.<br><br>Per treure un camp plantilla de manera que no apareixi al mòdul, tregui el camp dels <b>Dissenys</b> corresponents.'

    ),
    'exportcustom'=>array(
        'exportHelp'=>'Exportar personalitzacions realitzades en l&#39;Estudi creant paquets que poden ser pujats en altres instàncies de Sugar a través del <b>Carregador de Mòduls</b>.<br><br>  Abans de començar, proporcioni un <b>Nom de Paquet</b>.  Pot introduir la informació sobre l&#39; <b>Autor</b> i la <b>Descripció</b> del paquet també.<br><br>Seleccioni el o els mòduls que contenguin les personalitzacions que desitja exportar. Només aquells mòduls que contenguin personalitzacions apareixeran a la llista de selecció.<br><br>Faci clic a <b>Exportar</b> per crear un arxiu .zip per el paquet que contengui les personalitzacions.',
        'exportCustomBtn'=>'Faci clic a <b>Exportar</b> per crear un arxiu .zip per el paquet que contingui les personalitzacions que desitja exportar.',
        'name'=>'Aquest és el <b>Nom</b> del paquet. Aquest nom serà mostrat durant la instalació.',
        'author'=>'Aquest és l &#39;<b>Autor</b> que serà mostrat durant la instal·lació com el nom de l&#39;entitat que va crear el paquet. L&#39;Autor pot ser un individu o una empresa.',
        'description'=>'Aquesta és la <b>Descripció</b> del paquet que es mostra durant la instal·lació.',
    ),
    'studioWizard'=>array(
        'mainHelp' 	=> 'Benvingut a l&#39;àrea d&#39;<b>Eines de Desenvolupament</b>. <br/><br/>Utilitzi les einess d&#39;aquesta àrea per crear i gestionar mòduls i camps tan estàndar com personalitzats.',
        'studioBtn'	=> 'Utilitzi l&#39; <b>Estudi</b> per personalitzar els mòduls desplegats.',
        'mbBtn'		=> 'Utilitzi el <b>Constructor de Mòduls</b> per crear nous mòduls.',
        'sugarPortalBtn' => 'Utilitzi l&#39; <b>Editor de Portal de Sugar</b> per administrar i personalitzar el Portal Sugar.',
        'dropDownEditorBtn' => 'Utilitzi l&#39; <b>Editor de Llistes Desplegables</b> per agregar i editar llistes desplegables globals per a camps de llista desplegable.',
        'appBtn' 	=> 'La manera  d&#39;aplicació li permet personalitzar vàries propietats del programa, com per exemple, quants informes es mostren a la pàgina d&#39;inici',
        'backBtn'	=> 'Tornar al pas previ.',
        'studioHelp'=> 'Utilitzi l&#39;<b>Estudi</b> per establir quina informació del mòdul es mostra i com ho fa.',
        'studioBCHelp' => 'Indica que el mòdul es un mòdul compatible.',
        'moduleBtn'	=> 'Faci clic per editar aquest modul.',
        'moduleHelp'=> 'Els components del mòdul que pot personalitzar apareixen aquí.<br><br>Faci clic a una icona per seleccionar el component a editar.',
        'fieldsBtn'	=> 'Crear i personalitzar els <b>Camps</b> que emmagatzemen la informació al mòdul.',
        'labelsBtn' => 'Editar les <b>Etiquetes</b> mostrades per els camps i altres títols del mòdul.'	,
        'relationshipsBtn' => 'Afegir noves <b>Relacions</b> del mòdul o veure les existents.' ,
        'layoutsBtn'=> 'Personalitzar els <b>Dissenys</b> del mòdul.  Els dissenys son les diferents vistes del mòdul que contenen camps.<br><br>Pot establir quins camps apareixen i com son organitzats a cada disseny.',
        'subpanelBtn'=> 'Determina quins camps apareixen als <b>Subpanells</b> del mòdul.',
        'portalBtn' =>'Personalitzar els <b>Dissenys</b> del mòdul que apareixen al <b>Portal Sugar</b>.',
        'layoutsHelp'=> 'Els <b>Dissenys</b> d&#39;un mòdul que poden ser personalitzats apareixen aquí.<br><br>Els dissenys mostren els camps i les seve dades.<br><br>Faci clic a una icona per a seleccionar el disseny a editar.',
        'subpanelHelp'=> 'Els <b>Subpanells</b> d&#39;un mòdul que poden ser personalitzats apareixen aquí.<br><br>Faci clic a una icona per seleccionar el mòdul a editar.',
        'newPackage'=>'Faci clic a <b>Nou Paquet</b> per crear un nou paquet.',
        'exportBtn' => 'Faci clic a <b>Exportar Personalitzacions</b> per crear i descarregar un paquet que contingui les personalitzacions que ha realitzat en l&#39;Estudi a varis mòduls específics.',
        'mbHelp'    => 'Utilitzi el <b>Constructor de Mòduls</b> per crear paquets que continguin mòduls personalitzats basats en objectes estàndar o personalitzats.',
        'viewBtnEditView' => 'Personalitzar el disseny de <b>Vista d&#39;Edició</b> del mòdul.<br><br>La Vista d&#39;Edició és el formulari que conté els camps d&#39;entrada per capturar les dades introduides per l&#39;usuari.',
        'viewBtnDetailView' => 'Personalitzar el disseny <b>Vista de Detall</b> del mòdul.<br><br>La Vista de Detall mostra dades de camps introduits per l&#39;usuari.',
        'viewBtnDashlet' => 'Personalitzar el <b>Sugar Dashlet</b> del mòdul, incloent la Vista de Llista  la Búsqueda del Sugar Dashlet.<br><br>El Sugar Dashlet estará disponible per ser afegit a les pàgines del mòdul Inici.',
        'viewBtnListView' => 'Personalitzar el disseny <b>Vista de Llista</b> del mòdul<br><br>Els resultats de la Recerca apareixen a la Vista de Llista.',
        'searchBtn' => 'Personalitzar els dissenys de <b>Recerca</b> del mòdul.<br><br>Determina quins camps poden ser utilitzats per a filtrar els registres que apareixen a la Vista de Llista.',
        'viewBtnQuickCreate' =>  'Personalitzar el disseny <b>Creació Ràpida</b> del mòdul.<br><br>El formulari de Creació Ràpida apareix en els subpanells i en el mòdul d&#39;Emails.',

        'searchHelp'=> 'Els formularis de <b>Recerca</b> que poden ser personalitzats apareixen aquí. <br><br>Els formularis de recerca contenen camps per filtrar registres.<br><br>Faci clic a una icona per a seleccionar el disseny de recerca a editar.',
        'dashletHelp' =>'Els dissenys de <b>Sugar Dashlet</b> que poden ser personalitzats aparreixen aquí.<br><br>El Sugar Dashlet estarà disponible per a ser afegit a les pàgines del mòdulo Inici.',
        'DashletListViewBtn' =>'La <b>Vista de Llista de Sugar Dashlet</b> mostra els registres basant-se en els fíltres de recerca del Sugar Dashlet.',
        'DashletSearchViewBtn' =>'La <b>Recerca de Sugar Dashlet</b> filtra els registres de la vista de llista de Sugar Dashlet.',
        'popupHelp' =>'Els dissenys <b> Emergents</b> que poden ser personalitzats apareixen aquí..<br>',
        'PopupListViewBtn' => 'La <b>La Vista de Llista Emergent </b> mostra registres basats a les vistes de Recerca Emergent.',
        'PopupSearchViewBtn' => 'Els registres de vista de <b>Recerca Emergent</b> per la vista de llista Emergent.',
        'BasicSearchBtn' => 'Personalitzar el formulari de <b>Recerca Bàsica</b> que apareix a la pestanya de Recerca Bàsica a l&#39;àrea de Recerca del mòdul.',
        'AdvancedSearchBtn' => 'Personalitzar el formulari de <b>Recerca Avançada</b> que apareix a la pestanya de Recerca Avançada a l&#39;àrea de Recerca del mòdul.',
        'portalHelp' => 'Administrar i personalitzar el <b>Portal de Sugar</b>.',
        'SPUploadCSS' => 'Pujar una <b>Fulla d&#39;Estils</b> per el Portal de Sugar.',
        'SPSync' => '<b>Sincronitzi</b> les personalitzacions a la instància del Portal de Sugar.',
        'Layouts' => 'Personalitzar els <b>Dissenys</b> dels mòduls del Portal de Sugar.',
        'portalLayoutHelp' => 'Els mòduls del Portal de Sugar apareixen en aquesta àrea.<br><br>Seleccioni un mòdul per editar els seus <b>Dissenys</b>.',
        'relationshipsHelp' => 'Totes les <b>Relacions</b> que existeixen entre el mòdul i altres mòduls desplegats apareixen aquí.<br><br>El <b>Nom</b> de la relació és un nom generat per el sistema per la relació.<br><br>El <b>Mòdul Principal</b> és el mòdul que poseeix les relacions.  Per exemple, totes les propietats de les relacions per les que el mòdul de Comptes és el mòdul principal s&#39;emmagatzemen a les taules de base de dades de Comptes.<br><br>El <b>Tipus</b> és el tipus de relació existent entre el Mòdul Principal i el <b>Mòdul Relacionat</b>.<br><br>Faci clic al títol d&#39;una columna per ordenar per la columna.<br><br>Faci clic a una fila de la taula de la relació per veure i editar les propietats associades amb la relació.<br><br>Faci clic a <b>Agregar Relació</b> per crear una nova relació.<br><br>Es poden crear relacions entre dos mòduls desplegats qualssevol.',
        'relationshipHelp'=>'Les <b>Relacions</b> poden ser creades entre el mòdul i altre mòdul personalitzat o desplegat.<br><br> Les relacions s&#39;expressen visualment a través de subpanells i relacionen camps dels registres del mòdul.<br><br>Seleccioni un dels següents <b>Tipus</b> de relació per el mòdul:<br><br> <b>Un-a-Un</b> - Els registres d&#39;ambdós mòduls contindran camps relacionats.<br><br> <b>Un-a-Molts</b> - Els registrs del Mòdul Principal contindran un subpanell, i els registres del Mòdul Relacionat contindran un camp relacionat.<br><br> <b>Molts-a-Molts</b> - Els registrs d&#39;ambdós mòduls mostraran subpanells.<br><br> Seleccioni el <b>Mòdul Relacionat</b> per la relació. <br><br>Si el tipus de relació implica l&#39;ús de subpanells, seleccioni la vista de subpanell per als mòduls corresponents.<br><br> Faci clic a <b>Guardar</b> per crear la relació.',
        'convertLeadHelp' => "Aquí pot agregar mòduls a la pantalla de disseny de conversió i modificar els dissenys exixtents. Pot reordenar els mòduls arrossegant les seves files a la taula.<br><br><b>Mòdul:</b> El nom del mòdul.<br><br><b>Requerits:</b>Mòduls requerits que han de ser creats o seleccionats abans que el client potencial pugui ser convertit.<br><br><b>Copiar Dades:</b>Si està seleccionat, els camps del client potencial seran copiats a camps amb el mateix nom en els registres recent creats.<br><br><b>Permetre Selecció:</b>Els mòduls amb un camp relacionat en Contactes poden ser seleccionats enlloc de creats durant el procés se conversió del client potencial.<br><br><b>Editar:</b>Modificar el disseny de conversió per aquest mòdul.<br><br><b>Eliminar:</b>Treure aquest mòdul del disseny de conversió.",
        'editDropDownBtn' => 'Editar una Llista Desplegable global',
        'addDropDownBtn' => 'Afegir una nova Llista Desplegable global',
    ),
    'fieldsHelp'=>array(
        'default'=>'Els <b>Camps</b> del mòdul apareixen aquí llistats per Nom de Camp.<br><br>La plantilla del mòdul inclou un conjunt predeterminat de camps.<br><br>Per crear un nou camp, Faci clic a <b>Afegir Camp</b>.<br><br>Per editar un camp, faci clic al <b>Nom de Camp</b>.<br/><br/>Després el desplegament del mòdul, els nous camps creats al Constructor de Mòduls, així com els camps de la plantilla, es tractaran com camps estàndar en l&#39;Estudi.',
    ),
    'relationshipsHelp'=>array(
        'default'=>'Les <b>Relacions</b> que han estat creades entre el mòdul i altres mòduls apareixen aquí.<br><br>El <b>Nom</b> de la relació és un nom generat per el sistema per la relació.<br><br>El <b>Mòdul Principal</b> és el mòdul que poseeix les relacions. Les propietats de la relació son guardades en taules de la base de dades pertanyents al mòdul primari.<br><br>El <b>Tipus</b> és el tipus de relació existent entre el Mòdul Principal i el <b>Mòdul Relacionat</b>.<br><br>Faci clic al títol d&#39;una columna per ordenar per la columna.<br><br>Faci clic a una fila de la taula de la relació per veure i editar les propietats associades amb la relació.<br><br>Faci clic a <b>Afegir Relació</b> per crear una nova relació.',
        'addrelbtn'=>'ajuda emergent per afegir relació...',
        'addRelationship'=>'Les <b>Relacions</b> poden ser creades entre el mòdul i altre mòdul personalitzat o desplegat.<br><br> Les relacions s&#39;expressen visualment a través de subpanells i relacionen camps dels registres del mòdul.<br><br>Seleccioni un dels següents <b>Tipus</b> de relació per el mòdul:<br><br> <b>Un-a-Un</b> - Els registres d&#39;ambdós mòduls contindran camps relacionats.<br><br> <b>Un-a-Molts</b> - Els registres del Mòdul Principal contindran un subpanell, i els registres del Mòdul Relacionat contindran un camp relacionat.<br><br> <b>Molts-a-Molts</b> - Els registres d&#39;ambdós mòduls mostraran subpanells.<br><br> Seleccioni el <b>Mòdul Relacionat</b> per la relació. <br><br>Si el tipus de relació implica l&#39;ús de subpanells, seleccioni la vista de subpanell per els mòduls corresponents.<br><br> Faci clic a <b>Guardar</b> per crear la relació.',
    ),
    'labelsHelp'=>array(
        'default'=> 'Les <b>Etiquetes</b> dels camps, així com altres títols al mòdul, poden ser canviades.<br><br>Editi l&#39;etiqueta fent clic dins del camp, introduint una nova etiqueta i fent clic a <b>Guardar</b>.<br><br>Si hi ha algun paquet d&#39;idioma instal·lat a l&#39;aplicació, pot seleccionar l&#39;<b>Idioma</b> a utilitzar per les etiquetes.',
        'saveBtn'=>'Faci clic a <b>Guardar</b> per guardar tots els canvis.',
        'publishBtn'=>'Faci clic a <b>Guardar i Desplegar</b> per guardar tots els canvis i activar-los.',
    ),
    'portalSync'=>array(
        'default' => 'Introdueixi la <b>URL de Portal de Sugar</b> de la instància de portal a actualitzar, i faci clic a <b>Endavant</b>.<br><br>Després d&#39;això, introdueixi un usuari i contrasenya de Sugar vàlids, i faci clic a <b>Iniciar Sincronització</b>.<br><br>Les personalitzacions que hagi realitzat en els <b>Dissenys</b> de Portal de Sugar, així com la <b>Fulla d&#39;Estils</b> si alguna hagués estat pujada, seran transferides a la instància de portal especificada.',
    ),
    'portalConfig'=>array(
           'default' => '',
       ),
    'portalStyle'=>array(
        'default' => 'Pot personalitzar l&#39;apariència del Portal de Sugar mitjançant una fulla d&#39;estils.<br><br>Seleccioni la <b>Fulla d&#39;Estils</b> a pujar.<br><br>La fulla d&#39;estils serà desplegada al Portal Sugar la propera vegada que realitzi una sincronització.',
    ),
),

'assistantHelp'=>array(
    'package'=>array(
            //custom begin
            'nopackages'=>'Per començar un projecte, faci clic a <b>Nou Paquet</b> i crearà un nou paquet en el que allotjar els seus mòduls personalitzats. <br/><br/>Cada paquet pot contenir un o més mòduls.<br/><br/>Per exemple, pot voler crear un paquet que contingui un mòdul personalitzat relacionat amb el mòdul estàndar de Comptes. O pot voler crear un paquet que contingui varis mòduls nous que treballen de manera conjunta com un projecte i que estan relacionats entre sí i amb altres mòduls ja existents a l&#39;aplicació.',
            'somepackages'=>'Un <b>paquet</b> actúa com contenidor de mòduls pesonalitzats, tots els quals son part d&#39;un projecte. El paquet pot contenir un o més <b>mòduls</b> personalitzats que poden estar relacionats entre ells o amb d&#39;atres mòduls de l&#39;aplicació.<br/><br/>Després de  la creació d&#39;un paquet per el seu projecte, pot crear mòduls per el paquet de manera inmediata, o tornar al Constructor de Mòduls més tard per completar el projecte.<br><br>Quan el projecte ha estat completat, pot <b>Desplegar</b> el paquet per instal·lar els mòduls personalitzats dind de l&#39;aplicació.',
            'afterSave'=>'El seu nou paquet hauria de contenir al menys un mòdul. Pot crear un o més mòduls personalitzats per el paquet.<br/><br/>Faci clic a <b>Nou Mòdul</b> per crear un mòdul personalitzat per aquest paquet.<br/><br/> Després de la creació d&#39;almenys un mòdul, pot publicar o desplegar el paquet i deixar-lo així disponible per la seva instància i/o per les instàncies d&#39;altres usuaris.<br/><br/> Per desplegar el paquet en un pas a la seva instància de Sugar, faci clic a <b>Desplegar</b>.<br><br>Faci clic a <b>Publicar</b> per guardar el paquet com un arxiu .zip. Després de  guardar l&#39;arxiu .zip en el seu equip, utilitzi el <b>Carregador de Mòduls</b> per pujar i instal·lar el paquet a la  seva instància de Sugar.  <br/><br/>Pot distribuir l&#39;arxiu a altres usuaris per què el pugin i instalin en les seves propies instàncies de Sugar.',
            'create'=>'Un <b>paquet</b> actua com a contenidor de mòduls personalitzats, tots els quals son part d&#39;un projecte. El paquet pot contenir uno o més <b>mòduls</b> personalitzats que poden estar relacionats entre ells o amb altres mòduls de l&#39;aplicació.<br/><br/>Després de la creació d&#39;un paquet per al seu projecte, pot crear mòduls per el paquet de manera inmediata, o tornar al Constructor de Mòduls més tard per completar el projecte.',
            ),
    'main'=>array(
        'welcome'=>'Utilitzi les <b>Eines de Desenvolupament</b> per crear i administrar mòduls i camps tant estàndar com personalitzats. <br/><br/>Per administrar els mòduls de l&#39;aplicació, faci clic a <b>Estudi</b>. <br/><br/>Per crear mòduls personalitzats, faci clic a <b>Constructor de Mòduls</b>.',
        'studioWelcome'=>'Tots els mòduls actualment instal·lats, incloent els objectes estàndars així com els carregats per un mòdul, son personalitzables dins de l&#39;Estudi.'
    ),
    'module'=>array(
        'somemodules'=>"Ja que el paquet actual conté al menys un mòdul, pot <b>Desplegar</b> els mòduls en el paquet dins de la seva instància de Sugar o <b>Publicar</b> el paquet a instal·lar a la instància de Sugar actual o en altra instància utilitzant el <b>Carregador de Mòduls</b>.<br/><br/>Per instal·lar el paquet directament a la seva instància de Sugar, faci clic a <b>Desplegar</b>.<br><br>Per crear un arxiu .zip per el paquet que pugui ser carregat i instal·lat tant a la instància actual de Sugar com en altres instàncies mitjançant el <b>Carregador de Mòduls</b>, faci clic a <b>Publicar</b>.<br/><br/> Pot construir els mòduls per aquest paquet en etapes, i publicar-los o desplegar-los quan estigueu disposats a fer-ho. <br/><br/>Després de publicar o deplegar de un paquet, pot fer canvis a les propietats del mateix  i personalitzar els mòduls.  Després d&#39;això, publiqui o desplegui de nou el paquet per què els canvis siguin aplicats." ,
        'editView'=> 'Aquí pot editar els camps existents. Pot teure qualsevol dels camps existents o afegir els camps disponibles al panell situat a l&#39;esquerra.',
        'create'=>'Quan seleccioni el tipus de <b>Tipus</b> de mòdul que desitja crear, tingui en compte els tipus de camps que desitja tenir dins del mòdul. <br/><br/>Cada plantilla de mòdul conté un conjunt de camps pertanyents al tipus de mòdul descrit en el seu títol.<br/><br/><b>Básica</b> - Proporciona els camps bàsics que apareixen en mòduls estàndar, com el Nom, Assignat a, Equip, Data de Creació i Descripció.<br/><br/> <b>Empresa</b> - Proporciona camps específics d&#39;una organizació, com Nom d&#39;Empresa, Indústria i Adreçá de Facturació.  Utilitzi aquesta plantilla per crear mòduls que son similars al mòdul estàndar de Comptes.<br/><br/> <b>Persona</b> - Proporciona camps específics d&#39;un individu, com Salutació, Càrrec, Nom, Direcció i Número de Telèfon. Utilitzi aquesta plantilla per crear mòduls que siguin similars als mòduls estàndar de Contactes i Clients Potencials.<br/><br/><b>Incidència</b> - Proporciona camps particulars de casos i incidències, com Número, Estat, Prioritat i Descripció. Utilitzi aquesta plantilla per crear mòduls que siguin similars als mòduls estàndar de Casos i Seguiment d&#39;Incidències.<br/><br/>Nota: Després de la creació del mòdul, pot editar les etiquetes dels camps inclosos a la plantilla, així com crear camps personalitzats per agregar-los als dissenys del mòdul.',
        'afterSave'=>'Personalitzi el mòdul per ajustar-se a les seves necessitats mitjançant l&#39;edició i creació de camps, i l&#39;establiment de relacions amb altres mòduls i de la disposició dels camps en els dissenys.<br/><br/>Per veure els camps plantilla i administrar els camps personaltizats dins del mòdul, faaci clic a <b>Veure Camps</b>.<br/><br/>Per crear i administrar relacions entre el mòdul i altres mòduls, independentment de si els mòduls ja existeixen a l&#39;aplicació o son altres mòduls personalitzats del mateix paquet, faci clic a <b>Veure Relacions</b>.<br/><br/>Per editar els dissenys de mòduls, faci clic a <b>Ver Dissenys</b>. Pot canviar els dissenys de les Vistes de Detall i d&#39;Edició del mòdul de la mateixa forma que ho faria per mòduls existents a l&#39;aplicació, utilitzant l&#39;Estudi.<br/><br/> Per crear un mòdul amb les mateixes propietats que el mòdul actual, faci clic a <b>Duplicar</b>.  Després podrà personalitzar el nou mòdul.',
        'viewfields'=>'Els camps del mòdul poden ser personalitzats per ajustar-se a les seves necessitats.<br/><br/>No pot eliminar camps estàndar, però pot treure&#39;ls dels dissenys corresponents dins de les pàgines de Dissenys. <br/><br/>Pot editar les etiquetes dels camps estàndar. La resta de propietats dels camps estàndar no son editables. No obstant, pot crear facilment nous camps que tinguin propietats similars fent clic al nom d&#39;un camp i després en <b>Clonar</b> dins del formulari de <b>Propietats</b>.  Introdueixi qualsevol propietat nova, i faci clic a <b>Guardar</b>.<br/><br/>Si està personalitzant un nou mòdul, una vegada aquest hagi estat instal·lat, no totes les propietats dels camps podran ser editades.  Estableixi totes les propietats per els camps estàndar i personalitzats abans que publiqui i instali el paquet que conté el mòdul personalitzat.',
        'viewrelationships'=>'Pot crear relacions molts-a-molts entre el mòdul actual i qualsevol altre mòdul del paquet, i/o entre el mòdul actual i altres mòduls ja instalats a l&#39;aplicació.<br><br> Per crear relacions un-a-molts i un-a-un, creei camps <b>Relatiu a</b> y <b>Possiblement Relatiu a</b> per els mòduls.',
        'viewlayouts'=>'Pot controlar quins mòduls estan disponibles per captura de dades des de la <b>Vista d&#39;Edició</b>.  També pot controlar quines dades son mostrades des de la <b>Vista de Detall</b>.  Les vistes no han de ser iguals. <br/><br/>El formulari de Creació Ràpida es mostra quan fa clic a <b>Crear</b> dins del subpanell d&#39;un mòdul. Per defecte, el disseny del formulari de <b>Creació Ràpida</b> és el mateix que el disseny per defecte de <b>Vista d&#39;Edició</b>. Pot personalitzar el formulari de Creació Ràpida de manera que contingui menys i/o diferents camps que el disseny de Vista d&#39;Edició. <br><br>Pot establir la seguretat del mòdul utilizant la personalització del Disseny conjuntament amb l&#39;<b>Administració de Rols</b>.<br><br>',
        'existingModule' =>'Després de crear i personalitzar aquest mòdul, pot crear mòduls adicionals o tornar al paquet per <b>Publicar</b> o <b>Desplegar</b> el mateix.<br><br>Si desitja crear mòduls addicionals, faci clic a <b>Duplicar</b> per crear un mòdul amb les mateixess propietats que el mòdul actual, o torni a navegar al paquet i faci clic a <b>Nou Mòdul</b>.<br><br> Si ja està llest per <b>Publicar</b> o <b>Desplegar</b> el paquet que conté aquest mòdul, torni a navegar al paquet per a realitzar aquestes funcions. Pot publicar i desplegar paquets que continguin almenys un mòdul.',
        'labels'=> 'Les etiquetes dels camps estàndar així com les dels camps personalitzats poden ser canviades. Els canvis a les etiquetes dels camps no afecta a les dades emmagatzemades en els mateixos.',
    ),
    'listViewEditor'=>array(
        'modify'	=> 'A l&#39;esquerra té tres columnes. La columna "Per Defecte" conté els camps que son mostratss en una vista de llista per defecte, la columna "Disponibles" conté els camps que un usuari pot seleccionar per utilitzar al crear una vista de llista personalitzada, i la columna "Ocults" conté els camps actualment deshabilitats però disponibles per què vostè, com administrador, els afegeixi a les columnes Per Defecte o Disponibles de manera que els usuaris puguin utilitzar-los.',
        'savebtn'	=> 'Fent clic a <b>Guardar</b> guardarà tots els canvis i els activarà.',
        'Hidden' 	=> 'Els camps Ocults son camps que no estan disponibles actualment perquè  els usuaris els utilitzin en les vistes de llista.',
        'Available' => 'Els camps Disponibles són camps que no es mostren per defecte, però que poden ser habilitats per els usuaris.',
        'Default'	=> 'Els camps Per Defecte son mostrats als usuaris que no han personalitzat la configuració de les vistes de llista.'
    ),

    'searchViewEditor'=>array(
        'modify'	=> 'Hi ha dos columnes mostrades a l&#39;esquerra. La columna "Per Defecte" conté els camps que seran mostrats a la vista de recerca, i la columna "Ocults" conté els camps disponibles perquè vostè, com administrador, els pugui afegir a la vista.',
        'savebtn'	=> 'Al fer clic a <b>Guardar i Desplegar</b> guardarà tots els canvis i els activarà.',
        'Hidden' 	=> 'Els camps ocults son camps que no son mostrats a la vista de recerca.',
        'Default'	=> 'Els camps Per Defecte seran mostrats a la vista de recerca.'
    ),
    'layoutEditor'=>array(
        'default'	=> 'A l&#39;esquerra té dos columnes. La de la dreta, que es diu Disseny Actual o Vista Preliminar de Disseny, és on realitza els canvis al disseny del mòdul. La de l&#39;esquerraa, que es diu Caixa d&#39;Eines, conté elements útils i eines per utilitzar a l&#39;edició del disseny. <br/><br/>Quan l&#39;àrea de disseny es diu Disseny Actual, està treballant en una còpia del disseny actualment utilitzat per la presentació del mòdul.<br/><br/>Si es diu Vista Preliminar del Disseny, està treballant amb una còpia creada previament mitjançant un clic al botó Guardar, i que pot haver estat ja canviada des que es va crear la versió que veuen els usuaris d&#39;aquest mòdul.',
        'saveBtn'	=> 'Al fer clic en aquest botó guarda el disseny de manera que pot preservar els seus canvis. Quan torni a aquest mòdul treballarà amb el nou disseny. El seu disseny, però, no es veurà vist per la resta d&#39;usuaris del mòdul fins que faci clic al botó Guardar i Publicar.',
        'publishBtn'=> 'Faci clic a aquest botó per desplegar el disseny. Això implica que el disseny quedarà visible de manera inmediata per els usuaris d&#39;aquest mòdul.',
        'toolbox'	=> 'La caixa d&#39;eines conté una varietat de característiques útils per editar dissenys, incloent un àrea de paperera i una serie d&#39;elements addicionals, com un conjunt de camps disponibles. Qualsevol d&#39;aquests pot ser arrossegat i deixat anar al disseny.',
        'panels'	=> 'Aquest àrea mostra com els usuaris d&#39;aquest mòdul veuran el seu disseny quan sigui desplegat.<br/><br/>Pot reposicionar els elements, com camps, files i panells arrossegant i deixant-los anar; eliminar elements arrossegant-los i deixant-los anar en àrea de la paperera a la caixa d&#39;eines, o afegirr nous elements arrossegant-los des de la caixa d&#39;eines i deixant-los anar en la posició desitjada del disseny.'
    ),
    'dropdownEditor'=>array(
        'default'	=> 'A l&#39;esquerra té dos columnes. La de la dreta, que es diu Disseny Actual o Vista Preliminar de Disseny, és on realitza els canvis al disseny del mòdul. La de l&#39;esquerraa, que es diu Caixa d&#39;Eines, conté elements útils i eines per utilitzar a l&#39;edició del disseny. <br/><br/>Quan l&#39;àrea de disseny es diu Disseny Actual, està treballant en una còpia del disseny actualment utilitzat per la presentació del mòdul.<br/><br/>Si es diu Vista Preliminar del Disseny, està treballant amb una còpia creada previament mitjançant un clic al botó Guardar, i que pot haver estat ja canviada des que es va crear la versió que veuen els usuaris d&#39;aquest mòdul.',
        'dropdownaddbtn'=> 'Fent clic a aquest botó s&#39;afegeix un nou element a la llista desplegable.',

    ),
    'exportcustom'=>array(
        'exportHelp'=>'Les personalitzacions realitzades a l&#39;Estudi dins de d&#39;aquesta instància poden ser empaquetades i desplegades en una altra instància. <br><br>Proporcioni un <b>Nom de Paquet</b>. Pot proporcionar informació sobre l&#39;<b>Autor</b> i la <b>Descripció</b> del paquet.<br><br>Seleccioni els mòduls que contenen les personalitzacions a exportar. (Només els mòduls que continguin personalitzacions estaran disponibles per a ser seleccionats.)<br><br>Faci clic a <b>Exportar</b> per crear un arxiu .zip per el paquet que contengui les personalitzacions. L&#39;arxiu .zip podrà ser pujat en una altra instància mitjançant el <b>Carregador de Móduls</b>.',
        'exportCustomBtn'=>'Faci clic a <b>Exportar</b> per crear un arxiu .zip per el paquet que contingui les personalitzacions que desitja exportar.',
        'name'=>'El <b>Nom</b> del paquet serà mostrat al Carregador de Mòduls després que el paquet sigui pujat a l&#39;Estudi per la seva instal·lació.',
        'author'=>'L&#39; <b>Autor</b> és el nom de l&#39;entitat que ha creat el paquet. L&#39;Autor pot ser un individu o una empresa.<br><br>L&#39;Autor serà mostrat al Carregador de Mòduls després que el paquet sigui pujat a l&#39;Estudi per la seva instal·lació.',
        'description'=>'La <b>Descripció</b> del paquet serà mostrada al Carregador de Mòduls després que el paquet sigui pujat l&#39;Estudi per la seva instal·lació.',
    ),
    'studioWizard'=>array(
        'mainHelp' 	=> 'Benvingut a l&#39;àrea d&#39;<b>Eines de Desenvolupament</b>. <br/><br/>Utilitzi les eines d&#39;aquesta àrea per crear i administrar mòduls i camps tant estàndar com personalitzats.',
        'studioBtn'	=> 'Utilitzi l&#39;<b>Estudi</b> per personalitzar els mòduls instalats canviant la disposició dels camps, seleccionant els camps que estan disponibles i creant camps de dades personalitzades.',
        'mbBtn'		=> 'Utilitzi el <b>Constructor de Mòduls</b> per crear nous mòduls.',
        'appBtn' 	=> 'La manera d&#39;aplicació li permet personalitzar vàries propietats del programa, com per exemple, quants informes es mostren a la pàgina d&#39; inici',
        'backBtn'	=> 'Tornar al pas previ.',
        'studioHelp'=> 'Utilitzi l&#39;<b>Estudi</b> per a personalitzar els mòduls instal·lats.',
        'moduleBtn'	=> 'Faci clic per editar aquest modul.',
        'moduleHelp'=> 'Seleccioni el component de mòdul que desitja editar',
        'fieldsBtn'	=> 'Editi quina informació és emmagatzemada al mòdul mitjançant el control dels <b>Camps</b> del mateix.<br/><br/>Pot editar i crear camps personalitzats aquí.',
        'layoutsBtn'=> 'Personalitzi els <b>Dissenys</b> de les vistes d&#39;Edició, Detall, Llista i Recerca.',
        'subpanelBtn'=> 'Editi la informació que es mostra en els subpanells d&#39;aquests mòduls.',
        'layoutsHelp'=> 'Seleccioni un <b>Disseny a editar</b>.<br/<br/>Per canviar el disseny que conté els camps d&#39;introducció de dades, faci clic a <b>Vista d&#39;Edició</b>.<br/><br/>Per canviar el disseny que mostra les dades introduides en els camps a la Vista d&#39;Edició, faci clic a <b>Vista de Detall</b>.<br/><br/>Per canviar les columnes que apareixen a la llista per defecte, faci clic a <b>Vista de Llista</b>.<br/><br/>Per canviar els dissenys dels formularis de recerca Bàsica i Avançada, faci clic a <b>Recerca</b>.',
        'subpanelHelp'=> 'Seleccioni un <b>Subpanell</b> a editar.',
        'searchHelp' => 'Seleccioni un disseny de <b>Recerca</b> a editar.',
        'labelsBtn'	=> 'Editar les <b>Etiquetes</b> per mostrar els valors d&#39;aquest mòdul.',
        'newPackage'=>'Faci clic a <b>Nou Paquet</b> per crear un nou paquet.',
        'mbHelp'    => '<b>Benvingut al Constructor de Mòduls.</b><br/><br/>Utilitzi el <b>Constructor de Mòduls</b> per crear paquets que continguin mòduls personalitzats basats en objetes estàndar o personalitzats. <br/><br/>Per començar, faci clic a <b>Nou Paquet</b> per crear un nou paquet, o seleccioni el paquet a editar.<br/><br/> Un <b>paquet</b> actúa com contenidor de mòduls personalitzats, tots els quals son part d&#39;un projecte. El paquet pot contenir un o més mòduls personalitzats que poden estar relacionats entre ells o amb altres mòduls de l&#39;aplicació. <br/><br/>Per exemple: Pot voler crear un paquet que contingui un mòdul personalitzat que estigui relacionat amb el mòdul estàndar de Comptes. O, pot desitjar crear un paquet que contingui varis mòduls nous que funcionen conjuntament com un projecte i que estan relacionats entre ells i amb altres mòduls de l&#39;aplicació.',
        'exportBtn' => 'Faci clic a <b>Exportar Personalitzacions</b> per crear un paquet que contingui les personalitzacions que ha realitzat en l&#39;Estudi a varis mòduls específics.',
    ),

),
//HOME
'LBL_HOME_EDIT_DROPDOWNS'=>'Editor de Llistes Desplegables',

//ASSISTANT
'LBL_AS_SHOW' => 'Mostrar a l&#39;Assistent en el futur.',
'LBL_AS_IGNORE' => 'Ignorar a l&#39;Assistent en el futur.',
'LBL_AS_SAYS' => 'L&#39;Assistent Suggereix:',

//STUDIO2
'LBL_MODULEBUILDER'=>'Constructor de Mòduls',
'LBL_STUDIO' => 'Estudi',
'LBL_DROPDOWNEDITOR' => 'Editor de Llistes Desplegables',
'LBL_EDIT_DROPDOWN'=>'Editar Llista Desplegable',
'LBL_DEVELOPER_TOOLS' => 'Eines de Desenvolupament',
'LBL_SUGARPORTAL' => 'Editor del portal Sugar',
'LBL_SYNCPORTAL' => 'Sincronizar Portal',
'LBL_PACKAGE_LIST' => 'Llista de Paquetts',
'LBL_HOME' => 'Inici',
'LBL_NONE'=>'-Cap-',
'LBL_DEPLOYE_COMPLETE'=>'Desplegament completat',
'LBL_DEPLOY_FAILED'   =>'Hi ha hagut un error durant el procés de desplegament. És possible que el seu paquet no hagi estat instal·lat correctament',
'LBL_ADD_FIELDS'=>'Afegirr Camps Personalitzats',
'LBL_AVAILABLE_SUBPANELS'=>'Subpanells Disponibles',
'LBL_ADVANCED'=>'Avançada',
'LBL_ADVANCED_SEARCH'=>'Cerca avançada',
'LBL_BASIC'=>'Bàsica',
'LBL_BASIC_SEARCH'=>'Cerca bàsica',
'LBL_CURRENT_LAYOUT'=>'Disseny',
'LBL_CURRENCY' => 'Moneda',
'LBL_CUSTOM' => 'Personalitzat',
'LBL_DASHLET'=>'Sugar Dashlet',
'LBL_DASHLETLISTVIEW'=>'Vista de Llista de Sugar Dashlet',
'LBL_DASHLETSEARCH'=>'Recerca de Sugar Dashlet',
'LBL_POPUP'=>'Vista Emergent',
'LBL_POPUPLIST'=>'Vista de Llista Emergent',
'LBL_POPUPLISTVIEW'=>'Vista de Llista Emergent',
'LBL_POPUPSEARCH'=>'Recerca Emergent',
'LBL_DASHLETSEARCHVIEW'=>'Recerca de Sugar Dashlet',
'LBL_DISPLAY_HTML'=>'Mostrar Codi HTML',
'LBL_DETAILVIEW'=>'Vista Detallada',
'LBL_DROP_HERE' => '[Deixar anar aquí]',
'LBL_EDIT'=>'Edita',
'LBL_EDIT_LAYOUT'=>'Editar Disseny',
'LBL_EDIT_ROWS'=>'Editar Files',
'LBL_EDIT_COLUMNS'=>'Editar Columnes',
'LBL_EDIT_LABELS'=>'Editar Etiquetes',
'LBL_EDIT_PORTAL'=>'Editar Portal per a',
'LBL_EDIT_FIELDS'=>'Editar Camps',
'LBL_EDITVIEW'=>'Vista d&#39;Edició',
'LBL_FILTER_SEARCH' => "Cerca",
'LBL_FILLER'=>'(farcit)',
'LBL_FIELDS'=>'Camps',
'LBL_FAILED_TO_SAVE' => 'Error Al Guardar',
'LBL_FAILED_PUBLISHED' => 'Error Al Publicar',
'LBL_HOMEPAGE_PREFIX' => 'Meu',
'LBL_LAYOUT_PREVIEW'=>'Vista Preliminar del Disseny',
'LBL_LAYOUTS'=>'Dissenys',
'LBL_LISTVIEW'=>'Vista de llista',
'LBL_RECORDVIEW'=>'Vista del Registre',
'LBL_RECORDDASHLETVIEW'=>'Dashlet de visualització de registres',
'LBL_PREVIEWVIEW'=>'Preview View',
'LBL_MODULE_TITLE' => 'Estudi',
'LBL_NEW_PACKAGE' => 'Nou Paquet',
'LBL_NEW_PANEL'=>'Nou Panell',
'LBL_NEW_ROW'=>'Nova Fila',
'LBL_PACKAGE_DELETED'=>'Paquet Eliminat',
'LBL_PUBLISHING' => 'Publicant ...',
'LBL_PUBLISHED' => 'Publicat',
'LBL_SELECT_FILE'=> 'Selecciona el fitxer',
'LBL_SAVE_LAYOUT'=> 'Guardar Disseny',
'LBL_SELECT_A_SUBPANEL' => 'Seleccioni un Subpanell',
'LBL_SELECT_SUBPANEL' => 'Seleccioni Subpanell',
'LBL_SUBPANELS' => 'Subpanells',
'LBL_SUBPANEL' => 'Subpanell',
'LBL_SUBPANEL_TITLE' => 'Càrrec:',
'LBL_SEARCH_FORMS' => 'Cerca',
'LBL_STAGING_AREA' => 'Àrea de Disseny (arrossegui i deixi anar  elements aquí)',
'LBL_SUGAR_FIELDS_STAGE' => 'Camps Sugar (faci clic als elements pra afegir-los a l&#39;àrea de disseny)',
'LBL_SUGAR_BIN_STAGE' => 'Paperera Sugar (faci clic als elements per afegir-los a l&#39;àrea de disseny)',
'LBL_TOOLBOX' => 'Caixa d&#39;Eines',
'LBL_VIEW_SUGAR_FIELDS' => 'Veure Cams Sugar',
'LBL_VIEW_SUGAR_BIN' => 'Veure Paperera Sugar',
'LBL_QUICKCREATE' => 'Creació Ràpida',
'LBL_EDIT_DROPDOWNS' => 'Editar una Llista Desplegable Global',
'LBL_ADD_DROPDOWN' => 'Afegirr una nova Llista Desplegable Global',
'LBL_BLANK' => '-buit-',
'LBL_TAB_ORDER' => 'Órdre de Tabulació',
'LBL_TAB_PANELS' => 'Mostrar panells com pestanyes',
'LBL_TAB_PANELS_HELP' => 'Mostrar cada panell com la seva pròpia pestanya enlloc de fer que apareixin tots en una pantalla',
'LBL_TABDEF_TYPE' => 'Tipus de Visualització',
'LBL_TABDEF_TYPE_HELP' => 'Seleccioneu la manera en aquesta secció, s&#39;ha de mostrar. Aquesta opció només té efecte si s&#39;ha habilitat pestanyes en aquesta vista.',
'LBL_TABDEF_TYPE_OPTION_TAB' => 'Pestanya',
'LBL_TABDEF_TYPE_OPTION_PANEL' => 'Panell',
'LBL_TABDEF_TYPE_OPTION_HELP' => 'Seleccioneu Panell per tenir aquesta tauler dins de la vista de la disposició. Seleccioneu Pestanya per tenir aquest panell que es mostra en una pestanya independent en el disseny. Quan la Pestanya s&#39;especifica per un panell, panells posteriors configurar per mostrar com el Panell es mostrarà a la pestanya.<br />Una nova pestanya s&#39;iniciaran el proper panell de la fitxa que estigui seleccionada. Si es selecciona la pestanya d&#39;un panell per sota del primer panell, el primer panell serà necessàriament una Pestanya.',
'LBL_TABDEF_COLLAPSE' => 'Col·lapse',
'LBL_TABDEF_COLLAPSE_HELP' => 'Seleccioneu aquesta opció per fer que l&#39;estat per defecte d&#39;aquest panell es vegi tancat.',
'LBL_DROPDOWN_TITLE_NAME' => 'Nom',
'LBL_DROPDOWN_LANGUAGE' => 'Idioma',
'LBL_DROPDOWN_ITEMS' => 'Elements de Llista',
'LBL_DROPDOWN_ITEM_NAME' => 'Nom de l&#39;Element',
'LBL_DROPDOWN_ITEM_LABEL' => 'Etiqueta de Visualizació',
'LBL_SYNC_TO_DETAILVIEW' => 'Sincronitzar amb DetailView',
'LBL_SYNC_TO_DETAILVIEW_HELP' => 'Seleccioneu aquesta opció per sincronitzar aquesta disposició EditView a la disposició DetailView corresponent. Camps i <br>col·locació sobre el terreny en el EditView serà sincronitzat i es guarda en la DetailView automàticament en fer clic a <br>Guardar o Guardar i Despleguen en el EditView. Els canvis de disseny no seran capaços de fer en el DetailView.',
'LBL_SYNC_TO_DETAILVIEW_NOTICE' => 'Aquest DetailView és sincronitzat amb el EditView corresponent.<br>Camps i col·locació sobre el terreny en aquest DetailView reflecteixen els camps i col·locació sobre el terreny en el EditView.<br>Els canvis en el DetailView no es poden guardar o desplegats en aquesta pàgina. Realitzar canvis o dessincronitzar les vistes del EditView.',
'LBL_COPY_FROM' => 'Copia de',
'LBL_COPY_FROM_EDITVIEW' => 'Còpia de EditView',
'LBL_DROPDOWN_BLANK_WARNING' => 'Els valors són necessaris tant per al nom de l&#39;element i l&#39;etiqueta de la pantalla. Per afegir un element en blanc, feu clic a Afegeix, sense entrar en cap valor per al nom de l&#39;element i l&#39;etiqueta de la pantalla.',
'LBL_DROPDOWN_KEY_EXISTS' => 'Clau existent al llistat.',
'LBL_DROPDOWN_LIST_EMPTY' => 'La llista ha de contenir al menys un element habilitat',
'LBL_NO_SAVE_ACTION' => 'No s&#39;ha trobat l&#39;acció de guardar per aquesta vista.',
'LBL_BADLY_FORMED_DOCUMENT' => 'Studio2:establishLocation: Document mal format',
// @TODO: Remove this lang string and uncomment out the string below once studio
// supports removing combo fields if a member field is on the layout already.
'LBL_INDICATES_COMBO_FIELD' => '** Indica un camp combinat.Un camp combinat es una col·leció de camps individuals.Per exemple, "Direcció" es un camp combinat que conté "Carrer", "Ciutat", "Codi Postal", "Estat" i "País". <br><br> Pot fer doble clic en un camp combinat per veure quins camps conté.',
'LBL_COMBO_FIELD_CONTAINS' => 'conté:',

'LBL_WIRELESSLAYOUTS'=>'Dissenys per a Mòbils',
'LBL_WIRELESSEDITVIEW'=>'Vista de Edició per a Mòbils',
'LBL_WIRELESSDETAILVIEW'=>'Vista de Detall per a Mòbils',
'LBL_WIRELESSLISTVIEW'=>'Vista de Llista per a Mòbils',
'LBL_WIRELESSSEARCH'=>'Recerca per a Mòbils',

'LBL_BTN_ADD_DEPENDENCY'=>'Afegir dependència',
'LBL_BTN_EDIT_FORMULA'=>'Edita fórmula',
'LBL_DEPENDENCY' => 'Dependència',
'LBL_DEPENDANT' => 'Dependent',
'LBL_CALCULATED' => 'Valor calculat',
'LBL_READ_ONLY' => 'Només lectura',
'LBL_FORMULA_BUILDER' => 'Generador de fórmules',
'LBL_FORMULA_INVALID' => 'Fórmula no vàlida',
'LBL_FORMULA_TYPE' => 'La fórmula ha de ser del tipus',
'LBL_NO_FIELDS' => 'No en trobat camps',
'LBL_NO_FUNCS' => 'No en trobat funcions',
'LBL_SEARCH_FUNCS' => 'Recerca de funcions...',
'LBL_SEARCH_FIELDS' => 'Cercar de camps...',
'LBL_FORMULA' => 'Fórmula',
'LBL_DYNAMIC_VALUES_CHECKBOX' => 'Dependent',
'LBL_DEPENDENT_DROPDOWN_HELP' => 'Arrossegueu els elements de la llista d&#39;opcions disponibles a l&#39;esquerra per una de les llistes de la dreta per fer que l&#39;opció està disponible quan l&#39;opció dels pares donat se selecciona.',
'LBL_AVAILABLE_OPTIONS' => 'Opcions',
'LBL_PARENT_DROPDOWN' => 'Pares desplegable',
'LBL_VISIBILITY_EDITOR' => 'Visibilitat editor',
'LBL_ROLLUP' => 'Rollup',
'LBL_RELATED_FIELD' => 'Camp relacionat',
'LBL_PORTAL_ROLE_DESC' => 'No esborreu aquest rol. Customer Self-Service Portal Rol és un rol generat pel sistema creat durant el procés d&#39;activació Sugar Portal. Utilitzeu els controls d&#39;accés a l&#39;interior d&#39;aquesta funció per activar i/o desactivar els errors, casos o mòduls de la base de coneixements al Portal de Sugar. No modifiqueu els controls d&#39;accés per a altres aquesta funció per evitar el comportament del sistema desconegut i imprevisible. En cas d&#39;eliminació accidental d&#39;aquesta funció, torni a crear-lo per desactivació i activació Sugar Portal.',

//RELATIONSHIPS
'LBL_MODULE' => 'Módul',
'LBL_LHS_MODULE'=>'Módul Principal',
'LBL_CUSTOM_RELATIONSHIPS' => '* relació creada a l&#39;Estudi o en el Constructor de Mòduls',
'LBL_RELATIONSHIPS'=>'Relacions',
'LBL_RELATIONSHIP_EDIT' => 'Editar Relació',
'LBL_REL_NAME' => 'Nom',
'LBL_REL_LABEL' => 'Etiqueta',
'LBL_REL_TYPE' => 'Tipus',
'LBL_RHS_MODULE'=>'Mòdul Relacionat',
'LBL_NO_RELS' => 'Sense Relacions',
'LBL_RELATIONSHIP_ROLE_ENTRIES'=>'Condició Opcional' ,
'LBL_RELATIONSHIP_ROLE_COLUMN'=>'Columna',
'LBL_RELATIONSHIP_ROLE_VALUE'=>'Valor',
'LBL_SUBPANEL_FROM'=>'Subpanell de',
'LBL_RELATIONSHIP_ONLY'=>'No es crearà cap element visible per aquesta relació ja que existía anteriorment una relació visible entre aquets dos mòduls.',
'LBL_ONETOONE' => 'Un a Un',
'LBL_ONETOMANY' => 'Un a Molts',
'LBL_MANYTOONE' => 'Molts a Un',
'LBL_MANYTOMANY' => 'Molts a Molts',

//STUDIO QUESTIONS
'LBL_QUESTION_FUNCTION' => 'Seleccioni una funció o component.',
'LBL_QUESTION_MODULE1' => 'Seleccioni un mòdul.',
'LBL_QUESTION_EDIT' => 'Seleccioni un mòdul a editar.',
'LBL_QUESTION_LAYOUT' => 'Seleccioni un disseni a editar.',
'LBL_QUESTION_SUBPANEL' => 'Seleccioni un subpanell a editar.',
'LBL_QUESTION_SEARCH' => 'Seleccioni un disseny de recerca a editar.',
'LBL_QUESTION_MODULE' => 'Seleccioni un component de mòdul a editar.',
'LBL_QUESTION_PACKAGE' => 'Seleccioni un paquet a editar, o creii un nou paquet.',
'LBL_QUESTION_EDITOR' => 'Seleccioni una eina.',
'LBL_QUESTION_DROPDOWN' => 'Seleccioni una llista desplegable a editar, o creii una nova llista desplegable.',
'LBL_QUESTION_DASHLET' => 'Seleccioni un disseny de dashlet a editar.',
'LBL_QUESTION_POPUP' => 'Seleccioni un disseny mergent a editar.',
//CUSTOM FIELDS
'LBL_RELATE_TO'=>'Relatiu A',
'LBL_NAME'=>'Nom',
'LBL_LABELS'=>'Etiquetes',
'LBL_MASS_UPDATE'=>'Actualizació Massiva',
'LBL_AUDITED'=>'Auditoria',
'LBL_CUSTOM_MODULE'=>'Mòdul',
'LBL_DEFAULT_VALUE'=>'Valor per defecte',
'LBL_REQUIRED'=>'Obligatori',
'LBL_DATA_TYPE'=>'Tipus',
'LBL_HCUSTOM'=>'PERSONALITZAT',
'LBL_HDEFAULT'=>'PER DEFECTE',
'LBL_LANGUAGE'=>'Idioma:',
'LBL_CUSTOM_FIELDS' => '* camp creat a Studio',

//SECTION
'LBL_SECTION_EDLABELS' => 'Editar Etiquetes',
'LBL_SECTION_PACKAGES' => 'Paquets',
'LBL_SECTION_PACKAGE' => 'Paquet',
'LBL_SECTION_MODULES' => 'Mòduls',
'LBL_SECTION_PORTAL' => 'Portal',
'LBL_SECTION_DROPDOWNS' => 'Llistes Desplegables',
'LBL_SECTION_PROPERTIES' => 'Propietats',
'LBL_SECTION_DROPDOWNED' => 'Editar Llista Desplegable',
'LBL_SECTION_HELP' => 'Ajuda',
'LBL_SECTION_ACTION' => 'Acció',
'LBL_SECTION_MAIN' => 'Principal',
'LBL_SECTION_EDPANELLABEL' => 'Editar Etiqueta de Panell',
'LBL_SECTION_FIELDEDITOR' => 'Editar Camp',
'LBL_SECTION_DEPLOY' => 'Desplegar',
'LBL_SECTION_MODULE' => 'Mòdul',
'LBL_SECTION_VISIBILITY_EDITOR'=>'Editar Visibilitat',
//WIZARDS

//LIST VIEW EDITOR
'LBL_DEFAULT'=>'Per Defecte',
'LBL_HIDDEN'=>'Ocult',
'LBL_AVAILABLE'=>'Disponible',
'LBL_LISTVIEW_DESCRIPTION'=>'A continuació es mostren tres columnes. La columna <b>Per Defecte</b> conté els camps que es mostren en una llista per defecte. La columna <b>Addicional</b> conté camps que un usuari pot triar a l&#39;hora de crear una vista personalitzada. La columna <b>Disponible</b> mostra columnes disponibles per vostè com administrador per , o bé afegir-les a les columnes Per Defecte, o a les Addicionals perquè siguin utilizadess per usuaris.',
'LBL_LISTVIEW_EDIT'=>'Editor de Llistes',

//Manager Backups History
'LBL_MB_PREVIEW'=>'Vista Preliminar',
'LBL_MB_RESTORE'=>'Restaurar',
'LBL_MB_DELETE'=>'Eliminar',
'LBL_MB_COMPARE'=>'Comparar',
'LBL_MB_DEFAULT_LAYOUT'=>'Disseny per Defecte',

//END WIZARDS

//BUTTONS
'LBL_BTN_ADD'=>'Afegir',
'LBL_BTN_SAVE'=>'Desa',
'LBL_BTN_SAVE_CHANGES'=>'Guardar Canvis',
'LBL_BTN_DONT_SAVE'=>'Descartar Canvis',
'LBL_BTN_CANCEL'=>'Cancel·la',
'LBL_BTN_CLOSE'=>'Tancar',
'LBL_BTN_SAVEPUBLISH'=>'Guardar i Desplegar',
'LBL_BTN_NEXT'=>'Següent',
'LBL_BTN_BACK'=>'Anterior',
'LBL_BTN_CLONE'=>'Clonar',
'LBL_BTN_COPY' => 'Copia',
'LBL_BTN_COPY_FROM' => 'Copia de...',
'LBL_BTN_ADDCOLS'=>'Afegir Columnes',
'LBL_BTN_ADDROWS'=>'Afegir Files',
'LBL_BTN_ADDFIELD'=>'Afegir Camp',
'LBL_BTN_ADDDROPDOWN'=>'Afegir Llista Desplegable',
'LBL_BTN_SORT_ASCENDING'=>'Ordenar Ascendent',
'LBL_BTN_SORT_DESCENDING'=>'Ordenar Descendent',
'LBL_BTN_EDLABELS'=>'Editar Etiquetas',
'LBL_BTN_UNDO'=>'Desfee',
'LBL_BTN_REDO'=>'Repetir',
'LBL_BTN_ADDCUSTOMFIELD'=>'Afegirr Camp Personalitzat',
'LBL_BTN_EXPORT'=>'Exportar Personalitzacions',
'LBL_BTN_DUPLICATE'=>'Duplicar',
'LBL_BTN_PUBLISH'=>'Publicar',
'LBL_BTN_DEPLOY'=>'Desplegar',
'LBL_BTN_EXP'=>'Exportar',
'LBL_BTN_DELETE'=>'Eliminar',
'LBL_BTN_VIEW_LAYOUTS'=>'Veure Dissenys',
'LBL_BTN_VIEW_MOBILE_LAYOUTS'=>'Veure dissenys mòbils',
'LBL_BTN_VIEW_FIELDS'=>'Veure Camps',
'LBL_BTN_VIEW_RELATIONSHIPS'=>'Veure Relacions',
'LBL_BTN_ADD_RELATIONSHIP'=>'Afegir Relació',
'LBL_BTN_RENAME_MODULE' => 'Canvi de nom del mòdul',
'LBL_BTN_INSERT'=>'Insertar',
'LBL_BTN_RESTORE_BASE_LAYOUT' => 'Restableix el disseny base',
//TABS

//ERRORS
'ERROR_ALREADY_EXISTS'=> 'Error: El Camp Ja Existeix',
'ERROR_INVALID_KEY_VALUE'=> "Error: Valor de Clau No Vàlid: [&#39;]",
'ERROR_NO_HISTORY' => 'No s&#39;han trobat arxius a l&#39;historial',
'ERROR_MINIMUM_FIELDS' => 'El disseny ha de contenir al menys un camp',
'ERROR_GENERIC_TITLE' => 'Hi ha hagut un error',
'ERROR_REQUIRED_FIELDS' => 'Està segur que desitja continuar? Els següents camps requerits no es troben en el disseny:',
'ERROR_ARE_YOU_SURE' => 'Esteu segur que voleu continuar?',
'ERROR_DATABASE_ROW_SIZE_LIMIT' => 'No es pot crear el camp. Heu arribat al límit de mida de la fila d&#39;aquesta taula a la base de dades. <a href="https://support.sugarcrm.com/SmartLinks/Custom/MySQL_Row_Size_Limit/" target="_blank">Obteniu-ne més informació</a>.',

'ERROR_CALCULATED_MOBILE_FIELDS' => 'El camp següent(s) han calculat els valors que no es tornarà a calcular en temps real en el SugarCRM Portal Edició:',
'ERROR_CALCULATED_PORTAL_FIELDS' => 'El camp següent(s) han calculat els valors que no es tornarà a calcular en temps real en el SugarCRM Portal Edició:',

//SUGAR PORTAL
    'LBL_PORTAL_DISABLED_MODULES' => 'El següent mòdul(s) estan desactivats:',
    'LBL_PORTAL_ENABLE_MODULES' => 'Si desitja activar per veure en el portal, si us plau aneu <a id="configure_tabs" target="_blank" href="./index.php?module=Administration&amp;action=ConfigureTabs">aquí</a>.',
    'LBL_PORTAL_CONFIGURE' => 'Configuració de Portal',
    'LBL_PORTAL_ENABLE_PORTAL' => 'Habilita portal',
    'LBL_PORTAL_SHOW_KB_NOTES' => 'Permet notes al mòdul de Base de Coneixement',
    'LBL_PORTAL_ALLOW_CLOSE_CASE' => 'Permet que els usuaris del portal tanquin el cas',
    'LBL_PORTAL_ENABLE_SELF_SIGN_UP' => 'Permet que els nous usuaris inicien la sessió',
    'LBL_PORTAL_USER_PERMISSIONS' => 'Permisos d&#39;usuari',
    'LBL_PORTAL_THEME' => 'Portal temàtic',
    'LBL_PORTAL_ENABLE' => 'Habilitar',
    'LBL_PORTAL_SITE_URL' => 'El seu portal està disponible a:',
    'LBL_PORTAL_APP_NAME' => 'Nom de l&#39;aplicació',
    'LBL_PORTAL_CONTACT_PHONE' => 'Telèfon',
    'LBL_PORTAL_CONTACT_EMAIL' => 'Correu electrònic',
    'LBL_PORTAL_CONTACT_EMAIL_INVALID' => 'S&#39;ha d&#39;introduir una adreça de correu electrònic vàlida',
    'LBL_PORTAL_CONTACT_URL' => 'URL',
    'LBL_PORTAL_CONTACT_INFO_ERROR' => 'S&#39;ha d&#39;especificar com a mínim un mètode de contacte',
    'LBL_PORTAL_LIST_NUMBER' => 'Nombre de registres a mostrar en una llista',
    'LBL_PORTAL_DETAIL_NUMBER' => 'Nombre de camps a mostrar en Vista de detalls',
    'LBL_PORTAL_SEARCH_RESULT_NUMBER' => 'Quantitat de resultats a mostrar a la Recerca Global',
    'LBL_PORTAL_DEFAULT_ASSIGN_USER' => 'Per defecte assignat per usuari de portal',
    'LBL_PORTAL_MODULES' => 'Mòduls del Portal',
    'LBL_CONFIG_PORTAL_CONTACT_INFO' => 'Informació de contacte del Portal',
    'LBL_CONFIG_PORTAL_CONTACT_INFO_HELP' => 'Configureu la informació de contacte que es presenta als usuaris del Portal que requereixin ajuda addicional amb el seu compte. S&#39;ha de configurar com a mínim una opció.',
    'LBL_CONFIG_PORTAL_MODULES_HELP' => 'Arrossegueu i deixeu anar els noms dels mòduls del Portal per configurarles i que es mostren o s&#39;oculten a la barra de navegació superior del Portal. Per controlar l&#39;accés dels usuaris del Portal als mòduls, utilitzeu <a href="?module=ACLRoles&action=index">Administració de rols.</a>',
    'LBL_CONFIG_PORTAL_MODULES_DISPLAYED' => 'Mòduls visibles',
    'LBL_CONFIG_PORTAL_MODULES_HIDDEN' => 'Mòduls ocults',
    'LBL_CONFIG_VISIBILITY' => 'Visibilitat',
    'LBL_CASE_VISIBILITY_HELP' => 'Defineix quins usuaris del portal poden veure un cas.',
    'LBL_EMAIL_VISIBILITY_HELP' => 'Defineix quins usuaris del portal poden veure els correus electrònics relacionats amb un cas. Els contactes que hi participen són els dels camps A, De, CC i BCC.',
    'LBL_MESSAGE_VISIBILITY_HELP' => 'Defineix quins usuaris del portal poden veure els missatges relacionats amb un cas. Els contactes que hi participen són els dels camps Convidats.',
    'CASE_VISIBILITY_OPTIONS' => [
        'all' => 'Tots els contactes relacionats amb el compte',
        'related_contacts' => 'Només els contactes principals i els contactes relacionats amb el cas',
    ],
    'EMAIL_VISIBILITY_OPTIONS' => [
        'related_contacts' => 'Només els contactes participants',
        'all' => 'Tots els contactes que poden veure el cas',
    ],
    'MESSAGE_VISIBILITY_OPTIONS' => [
        'related_contacts' => 'Només els contactes participants',
        'all' => 'Tots els contactes que poden veure el cas',
    ],


'LBL_PORTAL'=>'Portal',
'LBL_PORTAL_LAYOUTS'=>'Dissenys de portal',
'LBL_SYNCP_WELCOME'=>'Si us Plau, introdueixi la URL de la instància de portal que desitja actualitzar.',
'LBL_SP_UPLOADSTYLE'=>'Seleccioni la fulla d&#39;estils a pujar des del seu equip.<br> La fulla d&#39;estils serà utilitzada al Portal de Sugar la propera vegada que realitzi una sincroniztació.',
'LBL_SP_UPLOADED'=> 'Pujat',
'ERROR_SP_UPLOADED'=>'Su us Plau, assegureu-vos que està pujant una fulla d&#39;estils CSS.',
'LBL_SP_PREVIEW'=>'Aquí té una vista preliminar de l&#39;aparència que tindrà el Portal de Sugar utilitzant la fulla d&#39;estils.',
'LBL_PORTALSITE'=>'URL de Portal de Sugar:',
'LBL_PORTAL_GO'=>'Endavant',
'LBL_UP_STYLE_SHEET'=>'Pujar Fulla d&#39;Estils',
'LBL_QUESTION_SUGAR_PORTAL' => 'Seleccioni el disseny de Portal de Sugar a editar.',
'LBL_QUESTION_PORTAL' => 'Seleccioni el disseny de portal a editar.',
'LBL_SUGAR_PORTAL'=>'Editor del portal Sugar',
'LBL_USER_SELECT' => '-- Selecciona --',

//PORTAL PREVIEW
'LBL_CASES'=>'Casos',
'LBL_NEWSLETTERS'=>'Bolletins de Notícies',
'LBL_BUG_TRACKER'=>'Seguiment d&#39;Incidències',
'LBL_MY_ACCOUNT'=>'El Meu Compte',
'LBL_LOGOUT'=>'Sortir',
'LBL_CREATE_NEW'=>'Crear nou',
'LBL_LOW'=>'Baixa',
'LBL_MEDIUM'=>'Mitjana',
'LBL_HIGH'=>'Alta',
'LBL_NUMBER'=>'Número:',
'LBL_PRIORITY'=>'Prioritat:',
'LBL_SUBJECT'=>'Assumpte',

//PACKAGE AND MODULE BUILDER
'LBL_PACKAGE_NAME'=>'Nom del Paquet:',
'LBL_MODULE_NAME'=>'Nom del mòdul:',
'LBL_MODULE_NAME_SINGULAR' => 'Nom del mòdul en singular:',
'LBL_AUTHOR'=>'Autor:',
'LBL_DESCRIPTION'=>'Descripció:',
'LBL_KEY'=>'Clau:',
'LBL_ADD_README'=>'Llegeix-me',
'LBL_MODULES'=>'Móduls:',
'LBL_LAST_MODIFIED'=>'Última Modificació:',
'LBL_NEW_MODULE'=>'Nou Mòdul',
'LBL_LABEL'=>'Etiqueta:',
'LBL_LABEL_TITLE'=>'Etiqueta',
'LBL_SINGULAR_LABEL' => 'Etiqueta singular',
'LBL_WIDTH'=>'Amplada',
'LBL_PACKAGE'=>'Paquet:',
'LBL_TYPE'=>'Tipus:',
'LBL_TEAM_SECURITY'=>'Seguretat d&#39;Equips',
'LBL_ASSIGNABLE'=>'Assignable',
'LBL_PERSON'=>'Persona',
'LBL_COMPANY'=>'Companyia',
'LBL_ISSUE'=>'Incidència',
'LBL_SALE'=>'Venta',
'LBL_FILE'=>'Arxiu',
'LBL_NAV_TAB'=>'Pestanya de Navegació',
'LBL_CREATE'=>'Crea',
'LBL_LIST'=>'Llista',
'LBL_VIEW'=>'Vista',
'LBL_LIST_VIEW'=>'Vista de llista',
'LBL_HISTORY'=>'Veure historial',
'LBL_RESTORE_DEFAULT_LAYOUT'=>'Restaurar disposició d&#39;omissió',
'LBL_ACTIVITIES'=>'Seqüència d&#39;activitats',
'LBL_SEARCH'=>'Cerca',
'LBL_NEW'=>'Nou',
'LBL_TYPE_BASIC'=>'bàsica',
'LBL_TYPE_COMPANY'=>'companyia',
'LBL_TYPE_PERSON'=>'persona',
'LBL_TYPE_ISSUE'=>'incidència',
'LBL_TYPE_SALE'=>'venta',
'LBL_TYPE_FILE'=>'arxiu',
'LBL_RSUB'=>'Aquest és el subpanell que es mostrarà al seu mòdul',
'LBL_MSUB'=>'Aquest és el subpanell que el seu mòdul proporciona perquè sigui mostrat per el mòdul relacionat',
'LBL_MB_IMPORTABLE'=>'Permet importacions',

// VISIBILITY EDITOR
'LBL_VE_VISIBLE'=>'visible',
'LBL_VE_HIDDEN'=>'ocult',
'LBL_PACKAGE_WAS_DELETED'=>'[[package]] s&#39;ha suprimit',

//EXPORT CUSTOMS
'LBL_EC_TITLE'=>'Exportar Personalitzacions',
'LBL_EC_NAME'=>'Nom del Paquet:',
'LBL_EC_AUTHOR'=>'Autor:',
'LBL_EC_DESCRIPTION'=>'Descripció:',
'LBL_EC_KEY'=>'Clau:',
'LBL_EC_CHECKERROR'=>'Si us Plau, seleccioni un mòdul.',
'LBL_EC_CUSTOMFIELD'=>'camps personalitzats',
'LBL_EC_CUSTOMLAYOUT'=>'disseny personalitzats',
'LBL_EC_CUSTOMDROPDOWN' => 'desplegable(s) personalitzats',
'LBL_EC_NOCUSTOM'=>'No s&#39;ha personalitzat cap mòdul.',
'LBL_EC_EXPORTBTN'=>'Exportar',
'LBL_MODULE_DEPLOYED' => 'El mòdul ha estat desplegat.',
'LBL_UNDEFINED' => 'no definit',
'LBL_EC_CUSTOMLABEL'=>'Etiquetes editades',

//AJAX STATUS
'LBL_AJAX_FAILED_DATA' => 'Error al recuperar dades',
'LBL_AJAX_TIME_DEPENDENT' => 'Hi ha en progrés una acció dependent del temps. Si us Plau, esperi i intententi-ho de nou en uns instants.',
'LBL_AJAX_LOADING' => 'Carregant...',
'LBL_AJAX_DELETING' => 'Eliminant...',
'LBL_AJAX_BUILDPROGRESS' => 'Construcció En Progrés...',
'LBL_AJAX_DEPLOYPROGRESS' => 'Despegament En Progrés...',
'LBL_AJAX_FIELD_EXISTS' =>'El nom del camp que ha introduit ja exixteix. Si us Plau, introdueixi un nou nom per el camp.',
//JS
'LBL_JS_REMOVE_PACKAGE' => 'Està segur que desitja treure aquest paquet? Això eliminarà permanentment tots els arxius associats amb aquest paquet.',
'LBL_JS_REMOVE_MODULE' => 'Està segur que desitja treure aquest mòdul? Això eliminarà permanentment tots els arxius associats amb aquest mòdul.',
'LBL_JS_DEPLOY_PACKAGE' => 'Qualsevol personalització que hagi realitzat en l&#39;Estudi serà sobreescrita quan aquest mòdul sigui desplegat de nou. Està segur que desitja procedir?',

'LBL_DEPLOY_IN_PROGRESS' => 'Desplegant Paquet',
'LBL_JS_VALIDATE_NAME'=>'Nom - Ha de ser alfanumèric, sense espais i començant per lletra',
'LBL_JS_VALIDATE_PACKAGE_KEY'=>'Paquet clau ja existeix',
'LBL_JS_VALIDATE_PACKAGE_NAME'=>'Nom del paquet ja existeix',
'LBL_JS_PACKAGE_NAME'=>'Nom del paquet - Ha de començar per una lletra i només pot incloure lletres, xifres i guions baixos. No s&#39;hi poden utilitzar espais ni cap altre caràcter especial.',
'LBL_JS_VALIDATE_KEY_WITH_SPACE'=>'Clau - Ha de ser alfanumèrica i començar amb una lletra.',
'LBL_JS_VALIDATE_KEY'=>'Clau - Ha de ser alfanumèrica, sense espais i començat per lletra',
'LBL_JS_VALIDATE_LABEL'=>'Si us Plau, introdueixi l&#39;etiqueta que s&#39;utilizarà com a Nom Visible d&#39;aquest mòdul',
'LBL_JS_VALIDATE_TYPE'=>'Si us Plau, seleccioni el tipus de mòdul que vol construir de la llista anterior',
'LBL_JS_VALIDATE_REL_NAME'=>'Nom - Ha de ser alfanumèric i sense espais',
'LBL_JS_VALIDATE_REL_LABEL'=>'Etiqueta - si us plau, afegeixi l&#39;etiqueta que serà mostrada sobre el subpanell',

// Dropdown lists
'LBL_JS_DELETE_REQUIRED_DDL_ITEM' => 'Està segur de que vol eliminar aquest element requerit del llistat desplegable? Això pot afectar la funcionalitat de la seva aplicació.',

// Specific dropdown list should be:
// LBL_JS_DELETE_REQUIRED_DDL_ITEM_(UPPERCASE_DDL_NAME)
'LBL_JS_DELETE_REQUIRED_DDL_ITEM_SALES_STAGE_DOM' => 'Està segur de que vol eliminar aquest element del llistat desplegable? Eliminant les etapes Guanyada Tancada o Perduda Tancada causarà que el mòdul de Previsió no funcioni correctament.',

// Specific list items should be:
// LBL_JS_DELETE_REQUIRED_DDL_ITEM_(UPPERCASE_ITEM_NAME)
// Item name should have all special characters removed and spaces converted to
// underscores
'LBL_JS_DELETE_REQUIRED_DDL_ITEM_NEW' => 'Esteu segur que voleu suprimir l&#39;estat de "Nou" de l&#39;oportunitat? La supressió d&#39;aquest estat farà que el mòdul de línies d&#39;ingressos de les oportunitats, no funcioni correctament.',
'LBL_JS_DELETE_REQUIRED_DDL_ITEM_IN_PROGRESS' => 'Esteu segur que voleu suprimir l&#39;estat de "En progres" de l&#39;oportunitat? La supressió d&#39;aquest estat farà que el mòdul de línies d&#39;ingressos de les oportunitats, no funcioni correctament.',
'LBL_JS_DELETE_REQUIRED_DDL_ITEM_CLOSED_WON' => 'Està segur de que vol eliminar la etapa de Guanyada Tancada? Eliminant aquesta estapa causarà que el mòdul de Previsió no funcioni correctament.',
'LBL_JS_DELETE_REQUIRED_DDL_ITEM_CLOSED_LOST' => 'Està segur de que vol eliminar la etapa de ventes Perduda Tancada. Eliminant aquesta estapa causarà que el mòdul de Previsió no funcioni correctament.',

//CONFIRM
'LBL_CONFIRM_FIELD_DELETE'=>'Deleting this custom field will delete both the custom field and all the data related to the custom field in the database. The field will be no longer appear in any module layouts.'
        . ' If the field is involved in a formula to calculate values for any fields, the formula will no longer work.'
        . '\n\nThe field will no longer be available to use in Reports; this change will be in effect after logging out and logging back in to the application. Any reports containing the field will need to be updated in order to be able to be run.'
        . '\n\nDo you wish to continue?',
'LBL_CONFIRM_RELATIONSHIP_DELETE'=>'Està segur que desitja eliminar aquesta relació?',
'LBL_CONFIRM_RELATIONSHIP_DEPLOY'=>'Això farà la relació permanent. Està segur que desitja desplegar aquesta relació?',
'LBL_CONFIRM_DONT_SAVE' => 'Hi ha canvis pendents de ser guardats, desitja guardar-los ara?',
'LBL_CONFIRM_DONT_SAVE_TITLE' => 'Guardar Canvis?',
'LBL_CONFIRM_LOWER_LENGTH' => 'Les dades poden ser truncades i aquest no podrà desfer-se, està segur que desitja continuar?',

//POPUP HELP
'LBL_POPHELP_FIELD_DATA_TYPE'=>'Seleccioni el tipus de dades apropiat d&#39;acord amb el tipus de dades que serà introduit al el camp.',
'LBL_POPHELP_FTS_FIELD_CONFIG' => 'Configurar el camp per a que siguin cerques de text complet.',
'LBL_POPHELP_FTS_FIELD_BOOST' => 'Impuls és el procés de millorar la rellevància dels camps d&#39;un registre.<br/>Els camps amb un nivell més alt d&#39;impuls rebran un nivell d&#39;impuls més elevat quan es faci la cerca. Quan es realitza una cerca, els registres coincidents que contenen camps amb més pes apareixeran a la part més alta dels resultats de la cerca.<br />El valor per defecte és 1.0 que correspon a un impuls neutre. Per aplicar un impuls positiu, s&#39;accepta qualsevol valor Float superior a 1. Per a un impuls negatiu, feu servir valors inferiors a 1. Per exemple, un valor d&#39;1,35 impulsarà positivament un camp en un 135%. Si es fa servir un valor de 0,60, s&#39;aplicarà un impuls negatiu.<br />Tingueu en compte que en las versions anteriors s&#39;havia de tornar a indexar completament la cerca de text complet. Això ja no és necessari.',
'LBL_POPHELP_IMPORTABLE'=>'<b>Sí</b>: El camp serà inclòs en una operació d&#39;importació.<br><b>No</b>: El camp no serà inclò en una importació.<br><b>Requerit</b>: Ha de suministrar-se un valor per el camp en tota importació.',
'LBL_POPHELP_PII'=>'Aquest camp es marcarà automàticament per fer-ne una auditoria i estarà disponible a la vista d&#39;informació personal.<br>El camps d&#39;informació personal també es poden eliminar permanentment quan el registre està relacionat amb una sol·licitud d&#39;eliminació per la privacitat de dades.<br>L&#39;eliminació es fa a través del módul de privacitat de dades i la poden fer els administradors o usuaris amb una funció de responsable de privacitat de dades.',
'LBL_POPHELP_IMAGE_WIDTH'=>'Introdueixi un número per l&#39;Amplada, com a mida en píxels.<br>La imatge pujada serà esclada a aquesta Amplada.',
'LBL_POPHELP_IMAGE_HEIGHT'=>'Introdueixi un número per l&#39;Alçada, com a mida en píxels.<br>La imatge pujada serà escalada a aquesta Alçada.',
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
'LBL_POPHELP_REQUIRED'=>"Crea una fórmula per determinar si aquest camp és obligatori al disseny.<br/>"
    . "Els camps obligatoris seguiran la fórmula a la vista mòbil basada en navegador, <br/>"
    . "però no seguiran la fórmula a les aplicacions natives, com ara Sugar Mobile per a iPhone.<br/>"
    . "No seguiran la fórmula al Portal autoservei de Sugar.",
'LBL_POPHELP_READONLY'=>"Crea una fórmula per determinar si aquest camp és només de lectura al disseny.<br/>"
        . "Els camps de només lectura seguiran la fórmula a la vista mòbil basada en navegador, <br/>"
        . "però no seguiran la fórmula a les aplicacions natives, com ara Sugar Mobile per a iPhone.<br/>"
        . "No seguiran la fórmula al Portal autoservei de Sugar.",
'LBL_POPHELP_GLOBAL_SEARCH'=>'Seleccioneu-ho per utilitzar aquest camp quan cerqueu registres amb la Cerca global a aquest mòdul.',
//Revert Module labels
'LBL_RESET' => 'Restablir',
'LBL_RESET_MODULE' => 'Restablir Mòdul',
'LBL_REMOVE_CUSTOM' => 'Treure Personalitzacions',
'LBL_CLEAR_RELATIONSHIPS' => 'Netejar Relacions',
'LBL_RESET_LABELS' => 'Restablir Etiquetes',
'LBL_RESET_LAYOUTS' => 'Restablir Dissenys',
'LBL_REMOVE_FIELDS' => 'Treure Camps Personalitzats',
'LBL_CLEAR_EXTENSIONS' => 'Netejar extensions',

'LBL_HISTORY_TIMESTAMP' => 'Registre de Temps',
'LBL_HISTORY_TITLE' => 'historial',

'fieldTypes' => array(
                'varchar'=>'Camp de Text',
                'int'=>'Sencer',
                'float'=>'Decimal',
                'bool'=>'Casella de Verificació',
                'enum'=>'Desplegable',
                'multienum' => 'Selecció Múltiple',
                'date'=>'Data',
                'phone' => 'Telèfon',
                'currency' => 'Moneda',
                'html' => 'HTML',
                'radioenum' => 'Opció',
                'relate' => 'Relacionat',
                'address' => 'Adreça',
                'text' => 'Àrea de Text',
                'url' => 'URL',
                'iframe' => 'IFrame',
                'image' => 'Imatge',
                'encrypt'=>'Encriptat',
                'datetimecombo' =>'Data i hora',
                'decimal'=>'Decimal',
                'autoincrement' => 'AutoIncrementa',
                'actionbutton' => 'Botó d&#39;acció',
),
'labelTypes' => array(
    "" => "Les etiquetes d&#39;ús freqüent",
    "all" => "Totes les etiquetes",
),

'parent' => 'Possiblement Relatiu a',

'LBL_ILLEGAL_FIELD_VALUE' =>"Les claus d&#39;un despleglable no poden contenir cometes.",
'LBL_CONFIRM_SAVE_DROPDOWN' =>"Està seleccionant aquest element per la seva eliminació de la llista despleglable. Qualsevol camp despleglable que utilitzi aquesta llista amb aquest element com a valor ja no mostrarà aquest valor, i el valor ja no podrà ser seleccionat als camps despleglables. Està segur que desitja continuar?",
'LBL_POPHELP_VALIDATE_US_PHONE'=>"Select to validate this field for the entry of a 10-digit<br>" .
                                 "phone number, with allowance for the country code 1, and<br>" .
                                 "to apply a U.S. format to the phone number when the record<br>" .
                                 "is saved. The following format will be applied: (xxx) xxx-xxxx.",
'LBL_ALL_MODULES'=>'Tots el mòduls',
'LBL_RELATED_FIELD_ID_NAME_LABEL' => '{0} (relacionat {1} ID)',
'LBL_HEADER_COPY_FROM_LAYOUT' => 'Copia del disseny',
'LBL_RELATIONSHIP_TYPE' => 'Relació',

// Edit Labels
'LBL_COMPARISON_LANGUAGE' => 'Idioma de comparació',
'LBL_LABEL_NOT_TRANSLATED' => 'Potser aquesta etiqueta no estigui traduïda',
);
