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
    'LBL_LOADING' => 'Chargement' /*for 508 compliance fix*/,
    'LBL_HIDEOPTIONS' => 'Masquer options' /*for 508 compliance fix*/,
    'LBL_DELETE' => 'Supprimer' /*for 508 compliance fix*/,
    'LBL_POWERED_BY_SUGAR' => 'Powered By SugarCRM' /*for 508 compliance fix*/,
    'LBL_ROLE' => 'Rôle',
    'LBL_BASE_LAYOUT' => 'Mise en page de base',
    'LBL_FIELD_NAME' => 'Nom du champ',
    'LBL_FIELD_VALUE' => 'Valeur',
    'LBL_LAYOUT_DETERMINED_BY' => 'Mise en page déterminée par :',
    'layoutDeterminedBy' => [
        'std' => 'Mise en page standard',
        'role' => 'Rôle',
        'dropdown' => 'Champ déroulant',
    ],
    'LBL_DELETE_CUSTOM_LAYOUTS' => 'Toutes les mises en page personnalisées seront supprimées. Êtes-vous sûr de vouloir modifier les définitions de votre mise en page actuelle ?',
'help'=>array(
    'package'=>array(
            'create'=>'Fournir un <b>Nom</b> pour le paquet. Le nom doit commencer par une lettre et peut se composer uniquement de lettres, de chiffres et de caractères de soulignement. Les espaces ou d&#39;autres caractères spéciaux peuvent être utilisés. (Exemple : HR_Management) <br/><br/>Vous pouvez entrer le <b>Nom</b> et la <b>Description</b> du package. <br/><br/>Cliquez sur<b> Enregistrer</b> pour créer le package.',
            'modify'=>'Les propriétés et les actions possibles pour le<b>Package </ b>apparaîtront ici. <br><br>Vous pouvez modifier le <b>nom</b>, <b>l&#39;auteur</b> et la <b>description</b> de ce package ainsi que l&#39;affichage des modules contenus dans ce package. Si vous désirez ajouter un nouveau module à ce package, <br><br>cliquez<b> sur <b>Nouveau Module</b>. Si le package contient au moins un module, vous pouvez <b>Publier</b> et <b>Déployer</b> le package, ainsi que <b>Exporter</b> les personnalisations contenues dans ce package.',
            'name'=>'Il s&#39;agit du <b>Nom</b> du package sur lequel vous travaillez. <br/><br/>Vous pouvez le modifier en utilisant uniquement des caractères alphanumériques. Ce nom doit commencer par une lettre et ne doit pas contenir d&#39;espace (Exemple : HR_Managment)',
            'author'=>'Nom de l&#39;<b>Auteur</b>qui a créé le package. Ce nom apparaît lors de l&#39;installation. <br><br>Il peut s&#39;agir d&#39;un individu ou d&#39;une entreprise.',
            'description'=>'Il s&#39;agit de la <b>description</b> qui s&#39;affiche lorsque le package est sur le point d&#39;être installé.',
            'publishbtn'=>'Cliquez sur <b>Publier</b> pour enregistrer toutes les données et pour créer un fichier zip contenant une version installable de ce package.<br><br>Utilisez le<b>Chargeur de Modules</b> pour charger le fichier zip et installer le package.',
            'deploybtn'=>'Cliquez sur <b>Déployer</b> pour enregistrer toutes les données saisies et pour installer le package, y compris tous les modules, dans l&#39;instance en cours.',
            'duplicatebtn'=>'Cliquez sur <b>Dupliquer</b> pour copier les propriétés du package dans un nouveau package et afficher le nouveau package. <br /> <br />Pour le nouveau package, un nouveau nom sera généré automatiquement en ajoutant un nombre à la fin du nom du package utilisé pour créer le nouveau package. Vous pouvez renommer le nouveau package en entrant un nouveau <b>Nom</b> et en cliquant sur <b>Enregistrer</b>.',
            'exportbtn'=>'Cliquez sur <b>Exporter</b> pour créer un fichier zip contenant toutes les modifications faites dans ce package.<br><br>Le fichier généré n&#39;est pas une version installable du package.<br><br>Utiliser le <b>Chargeur de Module</b> pour importer le fichier zip sur un autre SugarCRM, le package apparaitra avec toutes ces modifications dans le Module Builder.',
            'deletebtn'=>'Cliquez sur<b>Supprimer</b> pour supprimer ce package et tous les dossiers relatifs à celui-ci.',
            'savebtn'=>'Cliquez sur <b>Sauvegarder</b> pour enregistrer toutes les données saisies relatives à ce package.',
            'existing_module'=>'Cliquez sur l&#39;icône du <b>module</b> pour modifier les propriétés et personnaliser les champs, les relations et la mise en page associée à ce module.',
            'new_module'=>'Cliquez sur <b> nouveau module </b> pour créer un nouveau module pour ce package.',
            'key'=>'La <b>Clé</b> (chaîne alphanumérique  de 5 lettres max) sera utilisée pour préfixer tous les répertoires, les noms de classe et les tables de base de données de tous les modules du Package.<br /><br />Cette clé est utilisée dans un effort d&#39;unicité des noms de table.',
            'readme'=>'Cliquer pour ajouter un texte <b>Lisez moi</b> pour ce package.<br /><br />Ce Lisez moi sera disponible durant l&#39;installation.',

),
    'main'=>array(

    ),
    'module'=>array(
        'create'=>'Vous devez entrer un nom pour le module, ainsi que vérifier le type de fonctionnalité que vous souhaitez pour le module. Enfin, vous devez choisir le type du module. Chaque type a des champs spécifiques qui vous aideront à démarrer ainsi que des modèles prédéfinis à utiliser comme base pour la création de votre module.',
        'modify'=>'Vous pouvez renommer ce module ou modifier les fonctionnalitées de ce module.',
        'importable'=>'Cocher la case <b>Import</b> pour activer la fonctionnalité d&#39;import pour ce module.<br><br>Un lien vers l&#39;assistant d&#39;Import apparaitra dans le menu des raccourcis de ce module. L&#39;assistant d&#39;import facilite l&#39;import des données depuis une source externe dans le module créé.',
        'team_security'=>'Cochez cette case permet d&#39;activer la sécurité par équipe pour ce module.',
        'reportable'=>'Cochez cette case permet de réaliser des rapports sur ce module.',
        'assignable'=>'Cochez cette case permet d&#39;assigné à un utilisateur les enregistrements de ce module.',
        'has_tab'=>'Cochez cette case permet d&#39;avoir un onglet de navigation pour ce module.',
        'acl'=>'Cochez cette case permet d&#39;activer les contrôles d&#39;accès à ce module y compris la sécurité par champ',
        'studio'=>'Cochez cette case permet d&#39;autoriser les admins à personnaliser ce module via le Studio',
        'audit'=>'Cochez cette case permet de supporter les audits de modification. Cela stockera les changements de certains champs, les admins pourront ainsi visualiser les changements.',
        'viewfieldsbtn'=>'Cliquez sur <b>Afficher les champs</b> pour afficher les champs associés au module et pour créer/modifier des champs personnalisés.',
        'viewrelsbtn'=>'Cliquez sur <b>Afficher les Relations</b> pour afficher les liens associés à ce module et créer de nouvelles relations.',
        'viewlayoutsbtn'=>'Cliquez sur <b>Afficher les mises en page</b> pour afficher la mise en page du module et personnaliser la mise en page des champs.',
        'viewmobilelayoutsbtn' => 'Cliquez <b>Afficher la mise en page mobile</b> pour afficher la mise en page de la vue mobile et personnaliser la disposition des champs sur la vue.',
        'duplicatebtn'=>'Cliquez sur <b>Dupliquer</b> pour copier les propriétés du module dans un nouveau module et afficher le nouveau module. <br /> <br />Pour le nouveau module, un nouveau nom sera généré automatiquement en ajoutant un nombre à la fin du nom du module utilisé pour créer le nouveau module.',
        'deletebtn'=>'Cliquez sur <b>Supprimer</b> supprimera ce module.',
        'name'=>'Ceci est le <b>Nom</b> du module courant. <br /><br />Le nom que vous saisissez doit être alphanumérique,  ne doit pas contenir d&#39;espace, et <b>doit commencer par une lettre</b>. (Exemple : HR_Management)',
        'label'=>'Ceci est le <b>Libellé</b> qui apparaitra dans l&#39;onglet de navigation pour ce module.',
        'savebtn'=>'Cliquez sur <b>Sauvegarder</b> sauvegardera toutes les données saisies relatives à ce module.',
        'type_basic'=>'La mise en page <b>Basique</b> fournie les champs basiques, comme le nom, assigné à, l&#39;équipe, la date de création et la description.',
        'type_company'=>'Le modèle <b>Société</b> prévoit la mise en page des champs spécifiques, tels que Nom de l&#39;entreprise, l&#39;activité et l&#39;adresse de facturation. <br /><br />Utiliser ce modèle afin de créer des modules qui sont semblables au module Compte.',
        'type_issue'=>'Le type de modèle <b>Problème</b> prévoit des champs spécifiques aux Bugs et aux Tickets, comme le Nombre, le Statut, la Priorité et la Description.<br /><br />Utilisez ce modèle afin de créer des modules qui sont semblables aux modules Ticket et Bugs.',
        'type_person'=>'Le modèle <b>Personne</b> prévoit la mise en page des champs spécifiques aux personnes, comme le Titre, le Nom, l&#39;Adresse et le Numéro de Téléphone.<br /><br />Utiliser ce modèle afin de créer des modules qui sont semblables aux modules Contacts et Leads.',
        'type_sale'=>'Le modèle <b>Vente</b> prévoit la mise en page des champs spécifiques aux Affaires, comme la source du Lead, les phases de l&#39;affaire, le montant et la probabilité. <br/><br/>Utiliser ce modèle pour créer des modules qui sont semblables au module Affaire.',
        'type_file'=>'Le modèle <b>Fichier</b> prévoit la mise en page des champs spécifiques au Document, comme un Nom de fichier, un Type de document et une date de Publication.<br><br>Utiliser ce modèle pour créer des modules qui sont semblables au module Document.',

    ),
    'dropdowns'=>array(
        'default' => 'Toutes les listes déroulantes de l&#39;application sont listées ici.<br /><br /> Pour faire un changement dans une liste déroulante existante, cliquez sur le nom de celle-ci.<br /><br /> Faites vos changements dans le formulaire de <b>l&#39;éditeur de liste déroulante</b> dans le panneau de droite, et cliquez sur <b>Sauvegarder</b>. Faites autant de changements que nécessaire, puis n&#39;oubliez pas de cliquez sur <b>Sauvegarder</b>.<br /><br />Pour créer une nouvelle liste déroulante, cliquez sur <b>Ajouter une liste déroulante</b>. Saisir les propriétés dans le formulaire de <b>l&#39;éditeur de liste déroulante</b> et cliquez sur <b>Sauvegarder</b>.',
        'editdropdown'=>'Les listes déroulantes peuvent être utilisé pour des champs de type custom ou standard dans tous les modules.<br><br>Fournir un <b>Nom</b> pour la liste déroulante.<br><br>Si plusieurs packs de langue sont installés, vous pouvez Sélectionnez la <b>Langue</b> à utiliser pour les éléments de la liste.<br><br>Dans le champ <b>Nom de l&#39;élément</b>, saisir un nom pour une option de la liste déroulante. Ce n&#39;est pas le nom qui apparait dans les listes déroulantes visibles par les utilisateurs.<br><br>Dans le champ <b>libellé Affiché</b> saisir un libellé qui sera visible par les utilisateurs.<br><br>Après avoir fournit un nom et un libellé, cliquez sur <b>Ajouter<b> pour ajouter cet élément à la liste déroulante.<br><br>Pour ordonner les enregistrements dans la liste, glisser/déposer les enregistrements dans l&#39;ordre voulue.<br><br>Pour éditer un libellé d&#39;un élément, cliquez sur <b>l&#39;icône Éditer</b>, et saisir un nouveau libellé. Pour supprimer un élément de la liste déroulante, cliquez sur <b>l&#39;icône Supprimer</b>.<br><br> Pour annuler un changement effectuer sur un lable, cliquez sur <b>Annuler</b>. Pour re-effectuer un changement annulé, cliquez sur <b>Re-Faire</b>.<br><br>Cliquez sur <b>Sauvegarder</b> pour sauvegarder la liste déroulante.',

    ),
    'subPanelEditor'=>array(
        'modify'	=> 'All of the fields that can be displayed in the <b>Subpanel</b> appear here.<br><br>The <b>Default</b> column contains the fields that are displayed in the Subpanel.<br/><br/>The <b>Hidden</b> column contains fields that can be added to the Default column.'
    . '<br/><br/><!--not_in_theme!--><img src="themes/default/images/SugarLogic/icon_dependent.png"/>Indicates a Dependent field that may or may not be visible based on the value of a formula.<br/><!--not_in_theme!--><img src="themes/default/images/SugarLogic/icon_calculated.png" /> Indicates a Calculated field whose value will be automatically determined based on a formula.'
    ,
        'savebtn'	=> 'Cliquez sur <b>Sauvegarder &amp; Déployer</b> sauvegardera tous les changements et les rendra actifs dans le module.',
        'historyBtn'=> 'Cliquez sur <b>Afficher historique</b> pour afficher et restaurer une version précédente de la mise en page présente dans l&#39;historique.',
        'historyRestoreDefaultLayout'=> 'Cliquez sur <b>Rétablir la disposition par défaut</b> pour restaurer une vue sur son plan d&#39;origine.',
        'Hidden' 	=> 'Les champs cachés sont les champs qui ne seront pas affichés dans les sous-panels.',
        'Default'	=> 'Les champs par défaut seront affichés dans les sous-panels.',

    ),
    'listViewEditor'=>array(
        'modify'	=> 'All of the fields that can be displayed in the <b>ListView</b> appear here.<br><br>The <b>Default</b> column contains the fields that are displayed in the ListView by default.<br/><br/>The <b>Available</b> column contains fields that a user can select in the Search to create a custom ListView. <br/><br/>The <b>Hidden</b> column contains fields that can be added to the Default or Available column.'
    . '<br/><br/><!--not_in_theme!--><img src="themes/default/images/SugarLogic/icon_dependent.png"/>Indicates a Dependent field that may or may not be visible based on the value of a formula.<br/><!--not_in_theme!--><img src="themes/default/images/SugarLogic/icon_calculated.png" /> Indicates a Calculated field whose value will be automatically determined based on a formula.'
    ,
        'savebtn'	=> 'Cliquez sur <b>Sauvegarder &amp; Déployer</b> sauvegardera tous les changements et les rendra actifs dans le module.',
        'historyBtn'=> 'Cliquez sur <b>Afficher l&#39;historique</b> pour afficher et restaurer une version précédemment sauvegardée de la mise en page.',
        'historyRestoreDefaultLayout'=> 'Cliquez sur <b>Rétablir la disposition par défaut</b> pour restaurer une vue sur son plan d&#39;origine. <br><br><b>Restaurer la disposition par défaut</b> rétablit uniquement le placement au sein de la disposition originale. Pour modifier les étiquettes de champ, cliquez sur l&#39;icône modifier en regard de chaque champ.',
        'Hidden' 	=> 'Les champs <b>cachés</b> sont des champs qui ne sont pas visibles par les utilisateurs et qui n&#39;apparaissent pas dans les vues liste.',
        'Available' => 'Les champs <b>disponibles</b> sont des champs qui ne sont pas visibles par défaut mais qui peuvent être activés par les utilisateurs.',
        'Default'	=> 'Les champs <b>par défaut</b> sont visibles par les utilisateurs qui n&#39;ont pas personnalisé les paramètres de leurs vues liste.'
    ),
    'popupListViewEditor'=>array(
        'modify'	=> 'All of the fields that can be displayed in the <b>ListView</b> appear here.<br><br>The <b>Default</b> column contains the fields that are displayed in the ListView by default.<br/><br/>The <b>Hidden</b> column contains fields that can be added to the Default or Available column.'
    . '<br/><br/><!--not_in_theme!--><img src="themes/default/images/SugarLogic/icon_dependent.png"/>Indicates a Dependent field that may or may not be visible based on the value of a formula.<br/><!--not_in_theme!--><img src="themes/default/images/SugarLogic/icon_calculated.png" /> Indicates a Calculated field whose value will be automatically determined based on a formula.'
    ,
        'savebtn'	=> 'Cliquez sur <b>Sauvegarder &amp; Déployer</b> sauvegardera tous les changements et les rendra actifs dans le module.',
        'historyBtn'=> 'Cliquez sur <b>Afficher l&#39;historique</b> pour afficher et restaurer une version précédemment sauvegardée de la mise en page.',
        'historyRestoreDefaultLayout'=> 'Cliquez sur <b>Rétablir la disposition par défaut</b> pour restaurer une vue sur son plan d&#39;origine. <br><br><b>Restaurer la disposition par défaut</b> rétablit uniquement le placement au sein de la disposition originale. Pour modifier les étiquettes de champ, cliquez sur l&#39;icône modifier en regard de chaque champ.',
        'Hidden' 	=> 'Les champs <b>cachés</b> sont des champs qui ne sont pas visibles par les utilisateurs et qui n&#39;apparaissent pas dans les vues liste.',
        'Default'	=> 'Les champs <b>par défaut</b> sont visibles par les utilisateurs qui n&#39;ont pas personnalisé les paramètres de leurs vues liste.'
    ),
    'searchViewEditor'=>array(
        'modify'	=> 'All of the fields that can be displayed in the <b>Search</b> form appear here.<br><br>The <b>Default</b> column contains the fields that will be displayed in the Search form.<br/><br/>The <b>Hidden</b> column contains fields available for you as an admin to add to the Search form.'
    . '<br/><br/><!--not_in_theme!--><img src="themes/default/images/SugarLogic/icon_dependent.png"/>Indicates a Dependent field that may or may not be visible based on the value of a formula.<br/><!--not_in_theme!--><img src="themes/default/images/SugarLogic/icon_calculated.png" /> Indicates a Calculated field whose value will be automatically determined based on a formula.'
    . '<br/><br/>This configuration applies to popup search layout in legacy modules only.',
        'savebtn'	=> 'Cliquez sur <b>Sauvegarder &amp; Déployer</b> sauvegardera tous les changements et les rendra actifs',
        'Hidden' 	=> 'Les champs <b>cachés</b> sont les champs qui ne seront pas affichés dans les vues de recherche.',
        'historyBtn'=> 'Cliquez sur <b>Afficher l&#39;historique</b> pour afficher et restaurer une version précédemment sauvegardée de la mise en page.',
        'historyRestoreDefaultLayout'=> 'Cliquez sur <b>Rétablir la disposition par défaut</b> pour restaurer une vue sur son plan d&#39;origine. <br><br><b>Restaurer la disposition par défaut</b> rétablit uniquement le placement au sein de la disposition originale. Pour modifier les étiquettes de champ, cliquez sur l&#39;icône modifier en regard de chaque champ.',
        'Default'	=> 'Les champs <b>par défaut</b> seront affichés dans les vues de recherche.'
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
        'saveBtn'	=> 'Cliquez sur le bouton <b>Sauvegarder</b> permet d&#39;enregistrer les changements effectués depuis la dernière sauvegarde, ainsi vous préservez vos changements. Quand vous retournerez sur ce module vous aurez donc cette mise en page. Votre mise en page ne sera pas accessible par les utilisateurs tant que vous n&#39;avez pas cliquez sur le bouton "Sauvegarder et Publier".',
        'historyBtn'=> 'Cliquez sur <b>Afficher l&#39;historique</b> pour afficher et restaurer une version précédemment sauvegardée de la mise en page.',
        'historyRestoreDefaultLayout'=> 'Cliquez sur <b>Rétablir la disposition par défaut</b> pour restaurer une vue sur son plan d&#39;origine. <br><br><b>Restaurer la disposition par défaut</b> rétablit uniquement le placement au sein de la disposition originale. Pour modifier les étiquettes de champ, cliquez sur l&#39;icône modifier en regard de chaque champ.',
        'publishBtn'=> 'Cliquez sur le bouton <b>Sauvegarder &amp; Publier</b> pour publier cette mise en page et la rendre ainsi immédiatement accessible par les utilisateurs de ce module.',
        'toolbox'	=> 'La boite à outils contient de multiple fonctionnalités pour éditer votre mise en page, elle inclut une zone poubelle, une liste d&#39;éléments additionnels et une liste d’éléments disponibles. Tous ces éléments peuvent être glissés et déposés dans la mise en page.<br><br>Vous pouvez ainsi ajouter de nouveau <b>Panneau</> ainsi que de nouvelle <b>ligne</b> dans votre mise en page afin d&#39;avoir de nouveaux emplacements pour positionner vos champs. L’élément <b>Remplissage</b> permet de créer un espace vide dans la mise en page à l&#39;endroit où il est positionné.',
        'panels'	=> 'Cette zone montre comment votre mise en page apparaitra pour les utilisateurs de ce module quand il sera publié.<br /><br />Vous pouvez repositionner les éléments comme les champs, les lignes et les panneaux via un glisser-deposer, supprimer les éléments en les déplacent dans la zone poubelle présente dans la boite à outils, ou ajouter de nouveaux éléments via un glisser-deposer depuis la boite à outils vers la zone désirée dans la mise en page.',
        'delete'	=> 'Glisser / Déposer ici les éléments de votre mise en page à supprimer',
        'property'	=> 'Éditer le libellé affiché pour le champ.<br><br>L&#39;<b>ordre de tabulation</b> permet de controler l&#39;ordre dans lequel le basculement d&#39;un champ à l&#39;autre ce fait au moyen de la touche Shift.',
    ),
    'fieldsEditor'=>array(
        'default'	=> 'Tous les champs disponibles sur le module courant sont listés ici.<br /><br />Les champs personnalisés créés pour ce module apparaissent au dessus des champs standards de ce module. Pour éditer les champs, cliquez sur le <b>nom du champ</b>.<br /><br />Pour créer un nouveau champ, cliquez sur <b>Ajouter un champ</b>.',
        'mbDefault'=>'Les <b>Champs</b> disponible pour le module sont listés ici et triés par Nom.<br><br>Pour personnaliser un libellé ou les propriétés d&#39;un champ, cliquez sur le nom du champ.<br><br>Pour créer un nouveau champ, cliquez sur <b>Ajouter un champ</b>. Le libellé ainsi que certaines autres propriétés du champs peuvent être éditées après la création du champ en cliquant sur son libellé.<br><br> Après le déploiement du module, les champs créés dans le Module Builder apparaissent comme des champs standards pour ce module dans le Studio.',
        'addField'	=> 'Sélectionnez un <b>Type de donnée</b> pour le nouveau champ. Le type que vous sélectionnez détermine les propriétés du champ à définir. Par exemple, seuls des chiffres peuvent être saisis si le type de données est Entier.<br><br>Fournir un <b>Nom</B> pour le champ. Le nom doit être sous forme alphanumérique sans espace, ni caractères spéciaux (sauf le caractère underscore "_").<br><br>Le <b>libellé affiché</b> est le libellé qui apparaitra dans les mises en page du module pour ce champ. Le <b>libellé système</b> est utilisé pour référencer le champ dans le code source.<br><br>En fonction du type de donnée, les propriétés à définir ne sont pas les mêmes.<br><br>Un<b> Texte d&#39;Aide</b> apparait temporairement au dessus du champ pour informer l&#39;utilisateur sur le type du champ utilisé.<br><br>Un<b> Texte de Commentaire</b> est seulement visible dans le Studio et/ou le Module Builder, il peut être utilisé pour décrire le champ aux administrateurs.<br><br>La <b>Valeur par Défaut</b> apparait dans le champ. Les utilisateurs peuvent entrer une nouvelle valeur dans le champ ou utiliser la valeur par défaut. Sélectionnez la case à cocher <b>Mise à jour Globale</b> pour rendre ce champ accessible dans cette fonctionnalité.<br><br>La <b>taille maximum</b> détermine le nombre maximum de caractères qui peuvent être saisis pour le champ.<br><br>Cocher la case <b>Champs Requis</b> pour rendre ce champ obligatoire dans les interface de saisie.<br><br>Sélectionnez la case à cocher <b>Rapports</b> pour rendre ce champ disponible dans les filtres et les données affichables dans les rapports.<br><br>Sélectionnez la case à cocher <b>Auditer</b> pour activer l&#39;historique des modifications lorsque ce champ change de valeur.<br><br>D&#39;autres propriétés peuvent être demandées en fonction du type de donnée.',
        'editField' => 'Le <b>libellé</b> d&#39;un champ Sugar peut être personnalisé. Les autres propriétés ne peuvent pas être modifiées.<br><br>Cliquez sur <b>Cloner</b> pour créer un nouveau champ avec les mêmes propriétés.',
        'mbeditField' => 'Le <b>libellé affiché</b> pour un modèle de champ peut être personnalisé. Les autres propriétés du champs ne peuvent plus être personnalisées.<br><br>Cliquez sur <b>Cloner</b> pour créer un nouveau champ avec les mêmes propriétés.<br><br>Pour supprimer un modèle de champ qui ne pas être affiché dans le module, il faut supprimer le champ des <b>mises en page</b> appropriées.'

    ),
    'exportcustom'=>array(
        'exportHelp'=>'Vous pouvez exporter les personnalisations effectuées via le Studio en créant des packages qui peuvent ensuite être uploader sur d&#39;autre instance de Sugar via le <b>Chargeur de Module</b>.<br /><br /> Tout d&#39;abord fournir un <b>Nom de Package</b>, un <b>Auteur</b> et une <b>description</b> pour ce package.<br /><br /> Sélectionnez le ou les modules contenant les personnalisations que vous voulez exporter. Seulement les modules contenant des personnalisations pourront être séclèctionnés.<br /><br /> Cliquez sur <b>Exporter</b> pour créer le fichier .zip du package qui contiendra ainsi les personnalisations.',
        'exportCustomBtn'=>'Cliquez sur <b>Exporter</b> pour créer un fichier .zip pour le package contenant les personnalisations que vous souhaitez exporter.',
        'name'=>'Ceci est le <b>Nom</b> du package. Ce nom sera affiché lors de l&#39;installation.',
        'author'=>'Ceci est l&#39;<b>Auteur</b> qui est affichée lors de l&#39;installation comme le nom de l&#39;entité qui a créé le package. L&#39;auteur peut être une personne physique ou une société.',
        'description'=>'Il s&#39;agit de la <b>description</b> qui s&#39;affiche lorsque le package est sur le point d&#39;être installé.',
    ),
    'studioWizard'=>array(
        'mainHelp' 	=> 'Commencez par Sélectionnez un mode d&#39;édition en utilisant l&#39;un des boutons de la gauche. Vous pouvez passer votre souris sur une option pour avoir une description détaillée.',
        'studioBtn'	=> 'Dans le Studio vous pouvez personnaliser les modules installées en changant l&#39;affichage des informations, en indiquant les données disponnibles ou en créant des champs de donnée personnalisés.',
        'mbBtn'		=> 'Le Module Builder est utilisé pour créer de nouveaux modules.',
        'sugarPortalBtn' => 'Utiliser l&#39;<b>Editeur de Portail Sugar</b> pour gérer et personnaliser le Portail Sugar.',
        'dropDownEditorBtn' => 'Utiliser l&#39;<b>Editeur de liste déroulante</b> pour ajouter ou éditer une des listes déroulantes globales de l&#39;application.',
        'appBtn' 	=> 'Le mode Application est l&#39;endoirt où vous pouvez personnaliser les propriétés du programme, comme le nombre de rapports TPS affichés sur la page d&#39;accueil',
        'backBtn'	=> 'Retourner à l&#39;étape précédente.',
        'studioHelp'=> 'Le Studio vous permet de personnaliser les différents modules de SugarCRM.<br><br>Vous pouvez y modifier l&#39;apparences des différents modules, ajouter de nouveaux champs, personnaliser les libellés des différents modules, etc.',
        'studioBCHelp' => 'indique que le module est en mode rétrocompatibilité',
        'moduleBtn'	=> 'Cliquer pour personnaliser ce module.',
        'moduleHelp'=> 'Les composants que vous pouvez personnaliser apparaissent ici.<br><br>Cliquez sur l&#39;icone du composant que vous voulez modifier.',
        'fieldsBtn'	=> 'Personnalisation des champs du module courant. <br><br>Vous pouvez ajouter et personnaliser de nouveaux champs pour stocker des informations relatives à ce module.',
        'labelsBtn' => 'Modification des libellés du module courant.'	,
        'relationshipsBtn' => 'Personnalisation des relations entre le module courant et les autres modules de SugarCRM.' ,
        'layoutsBtn'=> 'Personnalisation des différentes vues du module.<br><br>Vous pouvez personnaliser l&#39;apparence des vues "Détail", "Édition/Création", "Liste", "Recherche", etc.',
        'subpanelBtn'=> 'Personnalisation des colonnes des sous-panels du module courant.',
        'portalBtn' =>'Personnalisation des différentes <b>mise en page</b> utilisées dans le <b>Portail Sugar</b>.',
        'layoutsHelp'=> 'Les différentes <b>vues</b> personnalisables du module apparaissent ici.<br><br>Sélectionnez la vue que vous voulez modifier en cliquant sur l&#39;icone adéquate.',
        'subpanelHelp'=> 'Les sous-panels personnalisables du module courant apparaissent ici.<br><br>Les sous-panels liés aux Activités ne sont pas modifiables.<br><br>Sélectionnez un sous-panel que vous voulez modifier.',
        'newPackage'=>'Cliquer ici pour créer un nouveau package',
        'exportBtn' => 'Cliquez sur "Exporter les personnalisations" pour créer un package contenant les modifications faites dans le Studio.',
        'mbHelp'    => 'Le <b>Module Builder</b> vous permet de créer des packages contenant vos propres modules basés sur les objets standards de SugarCRM.',
        'viewBtnEditView' => 'Personnaliser la mise en page de l&#39;<b>Vue Édition</b> du module.<br><br> La Vue Édition est le formulaire contenant les champs permettant aux utilisateurs de saisir des données.',
        'viewBtnDetailView' => 'Personnaliser la mise en page de la <b>Vue Détail</b> du module.<br><br> La Vue Détail permet de visualiser les données saisies par les utilistateurs.',
        'viewBtnDashlet' => 'Personnaliser la mise en page de des <b>Dashlet</b> du module, cela inclus la Vue Liste et la Vue Recherche.<br><br> Le dashlet doit être disponible sur la page hôte du module.',
        'viewBtnListView' => 'Personnaliser la mise en page de la <b>Vue Liste</b> du module.<br><br> La Vue Liste affiche les résultats des formulaires de recherche.',
        'searchBtn' => 'Personnaliser la mise en page de la <b>Recherche</b> du module.<br><br>Permet de déterminer les champs qui seront utilisés pour filter les enregistrements qui apparaîtront dans la Vue Liste.',
        'viewBtnQuickCreate' =>  'Personnaliser la mise en page de la <b>Création rapide</b> du module.<br><br>Le formulaire de Création rapide apparait dans les sous-panels ainsi que dans le module Email.',

        'searchHelp'=> 'Les formulaires de <b>Recherche</b> qui peuvent être personnalisé, apparaissent ici.<br><br> Les formulaire de recherche contiennent les champs permettant de filtrer les enregistrements.<br><br>Sélectionnez une mise en page de <b>Recherche</b> pour l&#39;éditer.',
        'dashletHelp' =>'Les mise en page des <b>Dashlets</b> qui peuvent être personnalisé, apparaissent ici.<br><br>Le dashlet doit être disponible sur la page hôte du module.',
        'DashletListViewBtn' =>'La <b>Vue liste du Dashlet</b> affiche les enregistrement liés aux filtre de recherche pour ce dashlet.',
        'DashletSearchViewBtn' =>'La <b>Vue recherche du Dashlet</b> filtre les enregistrements à afficher dans la Vue Liste du dashlet.',
        'popupHelp' =>'Les <b> Popups </ b> qui peuvent être personnalisés apparaissent ici.<br>',
        'PopupListViewBtn' => 'La <b>vue liste de la popup</b> affiche les enregistrements basés sur la vue recherche de la popup.',
        'PopupSearchViewBtn' => 'La <b>vue recherche de la popup</b> permet de rechercher les enregistrements dans la vue liste de la popup.',
        'BasicSearchBtn' => 'Personnaliser le formulaire de la <b>Recherche Basique</b> qui apparait dans l&#39;onglet de Recherche Basique dans la zone Recherche du module.',
        'AdvancedSearchBtn' => 'Personnaliser le formulaire de la <b>Recherche Avancée</b> qui apparait dans l&#39;onglet de Recherche Avancée dans la zone Recherche du module.',
        'portalHelp' => 'Gérer et personnaliser le <b>Portail Sugar</b>.',
        'SPUploadCSS' => 'Uploader une <b>Feuille de Style</b> pour le Portail Sugar.',
        'SPSync' => '<b>Synchroniser</b> les personnalisations de l&#39;instance du Portail Sugar.',
        'Layouts' => 'Personnaliser la <b>Mise en page</b> des modules du Portail Sugar.',
        'portalLayoutHelp' => 'Les modules du Portail Sugar apparaissent dans cette zone.<br /><br />Sélectionnez un module pour éditer la <b>Mise en Page</b>.',
        'relationshipsHelp' => 'Toutes les <b>relations</b> entre le module courant et les autres modules apparaissent ici.<br><br>Le <b>Nom</b> de la relation est le nom système (stocké dans la base de données) de la relation.<br><br>Le <b>Module principal</b> est le module "propriétaire" des relations. Les propriétés de la relation sont stockées dans les tables rattachés au module principal. Par exemple, toutes les propriétés des relations dont le module Compte est le module principal sont stockées dans les tables contenant les données des Comptes.<br><br>Cliquez sur une des relations présentes dans le tableau ci-dessous pour afficher et éditer les propriétés associées à cette relation.<br><br>Cliquez sur <b>Ajouter une relation</b> pour créer une nouvelle relation.<br><br>Des relations ne peuvent être créées qu&#39;entre deux modules déjà déployés.',
        'relationshipHelp'=>'Des <b>relations</b> peuvent être créées entre un module principal et un module déployé.<br><br>Les relations sont visibles de manière explicite via des sous-panels et des champs liés dans une vue d&#39;un enregistrement d&#39;un module.<br><br> Si une relation existe déjà entre deux modules, toutes nouvelles relations créés entre ces deux modules n&#39;apparaitra pas de manière explicite.<br><br>Sélection un des <b>Types</b> de relation possible pour le module :<br><br> <b>One-to-One</b> - Les deux enregistrements des modules contiennent des champs liés.<br><br><b>One-to-Many</b> - L&#39;enregistrement du module principal contient un sous-panel et l&#39;enregistrement du module lié contient un champ lié.<br><br> <b>Many-to-Many</b> - Les enregistrements des deux modules affichent un sous-panel.<br><br> Sélectionnez le <b>Module Lié</b> pour la relation. <br><br>Si le type de relation requiert un sous-panel, sélectioner la vue du sous-panel pour le module approprié.<br><br>Cliquez sur <b>Déployer</b> pour créer la relation. Une fois une relation créé, celle-ci ne peut être ni modifié ni supprimé.',
        'convertLeadHelp' => "Ici vous pouvez ajouter des modules à l'écran de conversion de Lead et modifier la mise en page des différents modules présents.<br/><br />		Vous pouvez changer l'ordre des modules en faisant glisser les lignes dans le tableau.<br/><br/><br />		<br />		<b>Module :</b> Nom du module.<br/><br/><br />		<b>Requis :</b> Les modules recquis doivent être créés ou sélectionnés avant que le Lead puisse être converti.<br/><br/><br />		<b>Copie des données :</b> Si cochée, les champs du Lead seront copiés dans les champs ayant le même nom dans les enregistrements des modules de destination.<br/><br/><br />		<b>Autoriser sélection :</b> Les modules liés avec le module Contacts pourront être sélectionné plutôt que créer durant le processus de conversion de Lead.<br/><br/><br />		<b>Éditer :</b> Modifier la mise en page pour ce module.<br/><br/><br />		<b>Supprimer :</b> Supprimer ce module de la Conversion de Lead.<br/><br/>",
        'editDropDownBtn' => 'Éditer une liste déroulante globale',
        'addDropDownBtn' => 'Ajouter une nouvelle liste déroulante globale',
    ),
    'fieldsHelp'=>array(
        'default'=>'Les <b>champs</b> du module sont listés ici avec leur nom.<br><br>Le modèle de module inclus un ensemble de champ prédéfinis.<br><br>Pou créer un nouveau champ, cliquez sur <b>Ajouter un champ</b>.<br><br>Pour éditer un champs, cliquez sur le <b>Nom de fichier</b>.<br><br>Après que le module soit déployé, les nouveaux champs créés dans le Module Builder, ainsi que leurs dispositions, seront accéssibles comme les autres champs standards du module dans le Studio.',
    ),
    'relationshipsHelp'=>array(
        'default'=>'Les <b>relations</b> qui sont créées entre le module et les autres modules apparaîtront ici.<br><br>Le <b>Nom</b> de la relation est le nom système généré pour cette relation.<br><br>Le <b>Module principal</b> est le module propriétaire des relations. Les propriétés de la relation sont stockées dans les tables rattachées au module principal.<br><br>Cliquez sur une des relations présentes dans le tableau ci dessous pour voir et éditer les propriétés associées à cette relation.<br><br>Cliquez sur <b>Ajouter une Relation</b> pour créer une relation.',
        'addrelbtn'=>'Une aide apparait pour créer une relation.',
        'addRelationship'=>'Des <b>relations</b> peuvent être créées entre le module et un autre module personnalisé ou un module déployé.<br><br>Les relations sont visible au travers des sous-panels ou des champs liés dans un enregistrement du module.<br><br>Sélection un des <b>Types</b> de relation possible pour le module :<br><br> <b>One-to-One</b> - Les deux enregistrements des modules contiennent des champs liés.<br><br< <b>One-to-Many</b> - L&#39;enregistrement du module principal contient un sous-panel et l&#39;enregistrement du module lié contient un champ lié.<br><br> <b>Many-to-Many</b> - Les enregistrements des deux modules affichent un sous-panel.<br><br> Sélectionnez le <b>Module Lié</b> pour la relation. <br><br>Si le type de relation requiert un sous-panel, sélectioner la vue du sous-panel pour le module approprié.<br><br>Cliquez sur <b>Sauvegarder</b> pour créer la relation.',
    ),
    'labelsHelp'=>array(
        'default'=> 'Les <b>Libellés</b> utilisés dans le module courant peuvent être personnalisés ici.<br><br>Si plusieurs packs de langue sont installés, vous pouvez personnaliser les libellés d&#39;une langue spécifique en la choisissant dans la liste déroulante "Langue".',
        'saveBtn'=>'Cliquez sur <b>Sauvegarder</b> pour sauvegarder tous les changements.',
        'publishBtn'=>'Cliquez sur <b>Sauvegarder &amp; Publier</b> pour sauvegarder tous les changements et les rendre visibles par les utilisateurs.',
    ),
    'portalSync'=>array(
        'default' => 'Entrer l&#39;<b>URL du Portail Sugar</b> de l&#39;instance portail à mettre à jour, et cliquez sur <b>Aller</b>.<br /><br /> Enter une nom d&#39;utilisateur Sugar et un mot de passe valide, et cliquez sur <b>Commender la Syncrhonisation</b>.<br /><br />Les personnalisations faites pour la <b>Mise en page</b> du Portail Sugar, comme l&#39;upload d&#39;une <b>Feuille de Style</b>, seront envoyés aux instances portail spécifiées.',
    ),
    'portalConfig'=>array(
           'default' => '',
       ),
    'portalStyle'=>array(
        'default' => 'Vous pouvez personnaliser ici l&#39;apparence du Portail Sugar en utilisant des feuilles de style.<br><br>Sélectionnez une <b>Feuille de style</b> à Uploader.<br><br> La feuille de style sera utilisée dans le Portail Sugar dés que la prochaine synchronisation avec celui-ci sera effectuée.',
    ),
),

'assistantHelp'=>array(
    'package'=>array(
            //custom begin
            'nopackages'=>'Pour démarrer un projet, cliquez sur <b>Nouveau Package</b> pour créer un nouveau package pour héberger vos modules personnalisés. <br /><br /> Chaque package peut contenir un ou plusieurs modules.<br /><br /> Par exemple, vous pouvez créer un package contenant un module personnalisé qui est relatif au module Compte. Ou, vous pouvez créer un package contenant plusieurs nouveaux modules qui fonctionnent ensemble comme un projet et qui sont liés les uns aux autres et aux modules existants.',
            'somepackages'=>'Un <b>package</b> agit comme un conteneur pour les modules personnalisés, qui sont tous une partie d&#39;un projet. Le package peut contenir un ou plusieurs </b>modules</b> personnalisés qui peuvent être liés les uns aux autres ou à des modules existants dans l&#39;application.<br /><br /> Après la création d&#39;un package pour votre projet, vous pouvez créer des modules pour le package, ou vous pouvez revenir à la création du module à une date ultérieure pour compléter le projet.',
            'afterSave'=>'Votre nouveau package doit contenir au moins un module. Vous pouvez créer un ou plusieurs modules personnalisés pour un package.<br /><br /> Cliquez sur <b>Nouveau module</b> pour créer un module pour ce package.<br /><br /> Après la création d&#39;au moins un module, vous pouvez publier ou déployer le package pour le rendre disponible pour votre instance et / ou d&#39;autres instances. Cliquez sur <b>Publier</b> pour créer le package via un fichier .zip. Après avoir enregistré le fichier .zip sur votre système, utiliser le <b>Chargeur de Module</b> pour télécharger et installer le package dans votre instance de Sugar.<br /><br /> Vous pouvez distribuer le fichier à d&#39;autres utilisateurs pour qu&#39;ils puissent l&#39;installer sur leur instance de Sugar.<br /><br /> Pour déployer le package en une seule étape, au sein de votre Sugar, cliquez sur <b>Déployer</b>.',
            'create'=>'Un <b>package</b> agit comme un conteneur pour les modules personnalisés, qui sont tous une partie d&#39;un projet. Le package peut contenir un ou plusieurs </b>modules</b> personnalisés qui peuvent être liés les uns aux autres ou à des modules existants dans l&#39;application.<br /><br /> Après la création d&#39;un package pour votre projet, vous pouvez créer des modules pour le package, ou vous pouvez revenir à la création du module à une date ultérieure pour compléter le projet.',
            ),
    'main'=>array(
        'welcome'=>'Bienvenue dans la zone des Outils pour dévellopeur. Utiliser les outils de cette zone pour créer et gérer vos champs standards ou personnalisés.<br /><br /> Pour gérer les modules existants, cliquez sur <b>Studio</b>. <br /><br /> Pour créer des modules personnalisés, cliquez sur <b>Module Builder</b>.',
        'studioWelcome'=>'Bienvenu dans le studio.'
    ),
    'module'=>array(
        'somemodules'=>"Maintenant que vous avez au moins un module pour ce package, vous pouvez <b>Publier</b> ou <b>Déployer</b> le package de votre instance de Suar.<br /><br /> Pour créer un fichier .zip pour le package qui peuvent être chargés et installés dans votre instance de Sugar et dans les autres instances utilisateurs, cliquez sur <b>Publier</b>.<br /><br /> Pour installer le package directement dans votre instance de Sugar sans créet auparavant un fichier .zip chargeable, cliquez sur <b>Déployer</b>.<br /><br /> Vous pouvez construire par étapes les modules pour ce package, et le publier ou le déployer lorsque vous êtes prêt à le faire. <br /><br /> Après la publication ou le déploiement d'un package, vous pouvez apporter des modifications à l'ensemble des propriétés et personnaliser d'avantage les modules. Puis, de re-publier de nouveau ou de re-déployer le package pour appliquer les modifications." ,
        'editView'=> 'Ici, vous pouvez modifier les champs existants. Vous pouvez supprimer un champs existants ou ajouter des champs disponibles dans la fenêtre de gauche.',
        'create'=>'Quand vous choisissez le <b>Type</b> de module que vous voulez créer, gardez à l&#39;esprit les types de champ que vous aimeriez avoir dans le module.<br /><br />Chaque modèle de module contient un ensemble de champ afférents au type du module décrit par le titre.<br /><br /><b>Basique</b> - Fournit les champs basiques qui apparaissent dans les modules standard comme le Nom, Assigné à, l&#39;équipe, la date de création et la Description.<br /><br /><b>Sociétés</b> - Fournit les champs spécifiques aux organisations comme le Nom de la Société, l&#39;Industrieet l&#39;adresse de facturation. Utiliser ce modèle pour créer les modules qui sont similaires au module standard Comptes.<br /><br /><b>Personne</b> - Fournit les champs spécifiques aux personnes individuelles comme la Salutation, le Titre, le Nom, l&#39;Adresse et le Numéro de téléphone. Utiliser ce modèle pour créer des modules qui sont similaires au module standard Contacts et Leads.<br /><br /><b>Problème</b> - Fournitdes champs spécifiques aux bugs et aux différents cas comme un Numéro, un Statuts, une Priorité et une Description. Utiliser ce modèle pour créer des modules qui sont similaires aux modules standards Bugs et Tickets.<br /><br />Note : Aprés avoir créé le module, vous pouvez éditer les champs fournit par le modèle, ainsi que de créer et d&#39;ajouter des champs personnalisés à l&#39;ensemble des champs déjà contenus dans le module.',
        'afterSave'=>'Personnaliser le module en fonction de vos besoins par l&#39;édition et la création de champ, en établissant des relations avec les autres modules, et en organisant les champs dans la mise en page.<br /><br /> Pour afficher le modèle des champs et gérer les champs personnalisés du module, cliquez sur <b>Afficher les champs</b>.<br /><br /> Pour créer et gérer les relations entre le module et les autres modules, si les modules existants et les autres modules personnalisés sont dans le même package, cliquez sur <b>Voir les relations</b>.<br /><br /> Pour éditer la mise en place cliquez sur <b>Voir a mise en page</b>. Vous pouvez changer la mise en page de la Vue Détails, la vue Édition et la Vue liste pour le module exactement comme vous le feriez pour les modules existants au sein de Studio.<br /><br /> Pour créer un module avec les même propriétés que le module courant cliquez sur <b>Dupliquer</b>. Vous pourrez ultérieurement modifier le nouveau module créé.',
        'viewfields'=>'Les champs dans le module peuvent être personnalisés en fonction de vos besoins.<br /><br /> Pour créer des champs personnalisés, cliquez sur <b>Ajouter un champs</b>. Saisissez les propriétés du champ dans le panneau de droite et cliquez sur <b>Sauvegarder</b>.<br /><br /> Pour changer les libellés de vos champs, cliquez sur<b>Éditer les libellés</b>.<br /><br /> Pour éditer les champs, cliquez sur le nom du champs et les propriétés apparaîtront dans le panneau de droite. Faite vos changements puis cliquez sur <b>Sauvegarder</b>.<br /><br /> Vous pouvez créer rapidement de nouveaux champs qui ont des propriétés similaires en cliquant sur <b>Cloner</b>. Entrez les nouvelles propriétés, puis cliquez sur <b>Sauvegarder</b>.<br /><br /> Pour supprimer un champ, vous pouvez le supprimer des mises en page appropriées.<br /><br />Note : Une fois le module installé, toutes les propriétés des champs ne sont pas éditables. Positionnez toutes les propriétés pour la mise en page des champs et des champs personnalisés avant de publier et d&#39;installer le package.',
        'viewrelationships'=>'Vous pouvez rapporter ce module avec les autres modules dans le même package ou à des modules déjà installés dans l&#39;application.<br /><br /> Pour modifier une relation existante, cliquez sur le  nom, et modifiez les propriétés dans le volet de droite.<br /><br /> Pour créer de nouvelle relation, cliquez sur <b>Ajouter une relation</b>. Les propriétés de la relation s&#39;affichent dans le volet de droite. Utilisez la liste déroulante <b>Relatif à</b> pour Sélectionnez le module. Fournisez un <b>Libellé</b> qui sera utilisé pour le sous-panel du module relatif. Vous pouvez être en mesure de Sélectionnez différents sous-panels dépendants du module sélectionnés.<br /><br /> Cliquez sur <b>Sauvegarder</b> pour créer une relation. Cliquez sur <b> Supprimer</p> pour supprimer la relation sélectionnée.',
        'viewlayouts'=>'Vous pouvez contrôler les champs qui sont disponibles pour la saisie des données dans la Vue Édition. Vous pouvez aussi controler les données qui seront affichées dans la Vue Détails. Les vues ne doivent pas forcement correspondres.<br /><br /> Vous pouvez déterminer la sécurité du module en utilisant la mise en page personnalisée et la gestion des rôles.',
        'existingModule' =>'Après avoir créé et personnalisé ce module, vous pouvez créer un module complémentaire ou retourner au package pour <b>Publier</b> ou <b>Déployer</b> le package.<br><br>Pour créer un module complémentaire, vous pouvez cliquez sur <b>Dupliquer</b> pour créer un module avec les mêmes propriétés que le module courant, ou retourner au package, et cliquez sur <b>Nouveau Module</b>.<br><br> Si vous êtes prêt à <b>Publier</b> ou <b>Déployer</b> le package contenant ce module, retourner au package pour réaliser ces fonctions. Vous pouvez publier ou déployer des packages contenant au moins un module.',
        'labels'=> 'Les libellés des champs standards ainsi que des champs personnalisés peuvent être modifiés. Changer les libellés des champs n&#39;aura pas d&#39;incidence sur les données stockées dans ces champs.',
    ),
    'listViewEditor'=>array(
        'modify'	=> 'Il y a trois colonnes d&#39;affichées à gauche. La colonne "Défaut" contient les champs affichés par défaut dans les vues listes, la colonne "Disponible" contient les champs dont l&#39;utilisateur peut se servir pour créer des vues listes personnalisées, et la colonne "Caché" contient les champs disponible pour vous en tant qu&#39;administrateur et que vous pouvez ajouter dans la colonne "Disponible" ou "Défaut" pour que les utilisateurs puissent s&#39;en servir.',
        'savebtn'	=> 'Cliquez sur ce bouton sauvegarde les changements et les rend actifs',
        'Hidden' 	=> 'Les champs cachés sont des champs qui ne sont pas disponibles aux utilisateurs et qui ne peuvent donc pas les utiliser dans les vues listes.',
        'Available' => 'Les champs disponibles sont les champs qui ne sont pas affichés par défaut, mais qui peuvent être activés par les utilisateurs.',
        'Default'	=> 'Les champs par défaut sont proposés aux utilisateurs qui n&#39;ont pas paramétrés de liste personnalisée.'
    ),

    'searchViewEditor'=>array(
        'modify'	=> 'Il y a deux colonnes affichées sur la gauche. La colonne "Défaut" contient les champs qui seront affichés dans le vue recherche, et la colonne "Caché" contient les champs diponible pour vous an tant que admin que vous pouvez ajouter dans la vue.',
        'savebtn'	=> 'Cliquez sur <b>Sauvegarder &amp; Déployer</b> sauvegardera tous les changements et les rendra actifs',
        'Hidden' 	=> 'Les champs cachés sont les champs qui ne seront pas visibles dans la vue de recherche.',
        'Default'	=> 'Les champs par défauts seront affichés dans les vue de recherche.'
    ),
    'layoutEditor'=>array(
        'default'	=> 'Il y a deux colonnes affichées sur la gauche. La colonne de droite nommée "Mise en page courante" ou "Prévisualisation de la mise en page" est l&#39;endroit où vous changez la mise en page du module. La colonne de gauche, nommée "Boite à outils", contient les éléments usuels et les outils que vous pouvez utiliser pour éditer la mise en page.<br /><br /> Si la zone de modification de la mise en page est nommée "Mise en page courante" cela signifie que vous travaillez sur une copie de la mise en page utilisée actuellement pour l&#39;affichage de ce module.<br /><br /> Si elle est nommée "Prévisualisation de la mise en page", alors vous travaillez sur une copie précédente lorsque vous avez cliqué sur le bouton "Sauvegarder", et qui peut avoir déjà été changée par rapport à la version vue par les utilisateurs de ce module.',
        'saveBtn'	=> 'Cliquez sur ce bouton sauvegarde la mise en page et vous permet ainsi de conserver vos changements. Quand vous retournez sur ce module vous pourrez commencer à changer cette mise en page. Votre mise en page ne sera pas visible par les utilisateurs tant que vous n&#39;avez pas cliqué sur le bouton "Sauvegarder et Publier".',
        'publishBtn'=> 'Cliquez sur ce bouton pour publier la mise en page. Cela rendra cette mise en page immédiatement visible par les utilisateurs de ce module.',
        'toolbox'	=> 'La boîte à outils contient une variété de fonctions utiles pour éditer la mise en page, y compris une zone poubelle, un ensemble d&#39;éléments supplémentaires et un ensemble de champs disponibles. Chacun de ces éléments peut être utilisé dans la mise en place via un glisser/déposer.',
        'panels'	=> 'Cette zone affiche ce que votre mise en page montrera aux utilisateurs de ce module quand il sera publié.<br /><br /> Vous pouvez re-positionner les éléments comme les champs, les lignes et les panels via un glisser/déposer; supprimer des éléments en les déplaçant dans la zone poubelle de la boite à outils, ou ajouter des nouveaux éléments en les faisant glisser depuis la boite à outils vers l&#39;endroit souhaité dans votre mise en page.'
    ),
    'dropdownEditor'=>array(
        'default'	=> 'Il y a deux colonnes affichées sur la gauche. La colonne de droite nommée "Mise en page courante" ou "Prévisualisation de la mise en page" est l&#39;endroit où vous changez la mise en page du module. La colonne de gauche, nommée "Boite à outils", contient les éléments usuels et les outils que vous pouvez utiliser pour éditer la mise en page.<br /><br /> Si la zone de modification de la mise en page est nommée "Mise en page courante" cela signifie que vous travaillez sur une copie de la mise en page utilisée actuellement pour l&#39;affichage de ce module.<br /><br /> Si elle est nommée "Prévisualisation de la mise en page", alors vous travaillez sur une copie précédente lorsque vous avez cliqué sur le bouton "Sauvegarder", et qui peut avoir déjà été changée par rapport à la version vue par les utilisateurs de ce module.',
        'dropdownaddbtn'=> 'Cliquez sur ce bouton pour ajouter un nouvel élément à la liste déroulante.',

    ),
    'exportcustom'=>array(
        'exportHelp'=>'Vous pouvez exporter les personnalisations faites via le Studio en créant des packages qui peuvent être uploader dans d&#39;autre instance de Sugar via le <b>Chargeur de module</b>.<br /><br />  En premier, fournir un <b>Nom de package</b>. Vous pouvez aussi fournir un <b>Auteur</b> et une <b>Description</b> pour ce package.<br /><br />Ensuite, sélectionnez le ou les modules qui contiennent les personnalisations que vous voulez exporter. Seuls les modules qui contiennent des personnalisations pourront être sélectionnés.<br /><br />Cliquez sur <b>Exporter</b> pour créer un fichier .zip contenant les personnalisations pour ce package.',
        'exportCustomBtn'=>'Cliquez sur <b>Export</b> pour créer un fichier .zip du package qui contient les personnalisations que vous désirez exporter.',
        'name'=>'Ceci est le <b>Nom</b> du package. Ce nom sera affiché durant l&#39;installation.',
        'author'=>'Ceci est le nom de l&#39;<b>auteur</b> qui est affiché durant l&#39;installation comme le nom de l&#39;entité qui à créé ce package. L&#39;auteur peut être une entité physique (individu) ou morale (société).',
        'description'=>'Ceci est la <b>Description</b> du package qui sera affichée durant l&#39;installation.',
    ),
    'studioWizard'=>array(
        'mainHelp' 	=> 'Bienvenue dans <b>La boite à outils des développeurs</b>. <br /><br />Utiliser les outils qui sont ici pour créer, gérer et personnaliser vos modules et vos champs.',
        'studioBtn'	=> 'Utiliser le <b>Studio</b> pour personnaliser les modules installés en changeant le positionnement des champs, Sélectionnez les champs disponibles et créer des champs de données personnalisés.',
        'mbBtn'		=> 'Le Module Builder est utilisé pour créer de nouveaux modules.',
        'appBtn' 	=> 'Utiliser le mode Application pour personnaliser les différentes propriétés du programme, comme le nombe de rapports TPS affichés sur la page d&#39;accueil',
        'backBtn'	=> 'Retourner à l&#39;étape précédente.',
        'studioHelp'=> 'Utiliser le <b>Studio</b> pour personnalisé les modules installés. Sélectionnez un module pour commencer.',
        'moduleBtn'	=> 'Cliquer pour personnaliser ce module.',
        'moduleHelp'=> 'Sélectionnez le composant du module que vous voulez éditer',
        'fieldsBtn'	=> 'Éditer les informations qui sont stockées dans le module. Vous pouvez créer, ici, des champs personnalisés.',
        'layoutsBtn'=> 'Éditer la mise en page pour les vues Édition, Détails, Liste, et Recherche.',
        'subpanelBtn'=> 'Éditer quelles informations sont affichées dans les sous-panels de ce module.',
        'layoutsHelp'=> 'Sélectionnez une mise en page à éditer.<br/<br />Pour changer la mise en page qui contient des champs de données qui peuvent être saisis, cliquez sur <b>Éditer la vue</b>.<br /><br />Pour changer la mise en page qui affiche les données saisies dans l&#39;édition, cliquez sur <b>Vue Détails</b>.<br /><br />Pour changer les colonnes qui apparaissent dans les listes par défaut, cliquez sur <b>Vue Liste</b>.<br /><br />Pour changer la mise en page des recherches basiques et avancées, cliquez sur <b>Recherche</b>.',
        'subpanelHelp'=> 'Sélectionnez le sous-panel que vous voulez modifier en cliquant sur l&#39;cone adéquate.',
        'searchHelp' => 'Sélectionnez une mise en page recherchée à éditer.',
        'labelsBtn'	=> 'Éditer les <b>Étiquettes</b> de façon à afficher les valeurs dans ce module.',
        'newPackage'=>'Cliquer ici pour créer un nouveau package',
        'mbHelp'    => '<b>Bienvenue dans le Module Builder.</b><br /><br />Utiliser le <b>Module Builder</b> pour créer des projets qui contiennent des modules personnalisés basés sur des objets standars ou personalisés. <br /><br />Pour commencer, cliquez sur <b>Nouveau Package</b> pour créer un nouveau Package, ou Sélectionnez un package à éditer.<br /><br />Un <b>package</b> agit comme un agit comme un conteneur pour les modules personnalisés, qui sont tous une partie d&#39;un projet. Le package peut contenir un ou plusieurs modules personnalisés peuvant être liées entre eux ou avec des modules existants dans l&#39;application. <br /> <br /> Exemples : Vous avez peut-être envie de créer un package contenant un module de personnalisé, ce qui est relati au module Compte. Ou bien, vous pouvez créer un package contenant plusieurs nouveaux modules qui fonctionnent ensemble comme un projet et qui sont liés les uns aux autres et aux modules existants.',
        'exportBtn' => 'Cliquez sur "Exporter les personnalisations" pour créer un package contenant les modifications faites dans le Studio.',
    ),

),
//HOME
'LBL_HOME_EDIT_DROPDOWNS'=>'Editeur de liste déroulante',

//ASSISTANT
'LBL_AS_SHOW' => 'Afficher dorénavant l&#39;Assistant.',
'LBL_AS_IGNORE' => 'Ignorer dorénavant l&#39;Assistant.',
'LBL_AS_SAYS' => 'L&#39;Assistant vous informe :',

//STUDIO2
'LBL_MODULEBUILDER'=>'Générateur de module',
'LBL_STUDIO' => 'Studio',
'LBL_DROPDOWNEDITOR' => 'Editeur de listes déroulantes',
'LBL_EDIT_DROPDOWN'=>'Éditer la liste déroulante',
'LBL_DEVELOPER_TOOLS' => 'Outils pour les développeurs',
'LBL_SUGARPORTAL' => 'Editeur Portail Sugar',
'LBL_SYNCPORTAL' => 'Synchronisation du Portail',
'LBL_PACKAGE_LIST' => 'Liste des Packages',
'LBL_HOME' => 'Accueil',
'LBL_NONE'=>'-Aucun-',
'LBL_DEPLOYE_COMPLETE'=>'Déploiement terminé',
'LBL_DEPLOY_FAILED'   =>'Une erreur s&#39;est produite pendant le processus de déploiement, votre paquet n&#39;est peut-être pas installé correctement',
'LBL_ADD_FIELDS'=>'Ajouter des champs personnalisés',
'LBL_AVAILABLE_SUBPANELS'=>'Sous-panels disponibles',
'LBL_ADVANCED'=>'Avancée',
'LBL_ADVANCED_SEARCH'=>'Recherche Avancée',
'LBL_BASIC'=>'Basique',
'LBL_BASIC_SEARCH'=>'Recherche Basique',
'LBL_CURRENT_LAYOUT'=>'Mise en page courante',
'LBL_CURRENCY' => 'Devise',
'LBL_CUSTOM' => 'Personnalisé',
'LBL_DASHLET'=>'Dashlet',
'LBL_DASHLETLISTVIEW'=>'Vue Liste du Dashlet',
'LBL_DASHLETSEARCH'=>'Recherche du Dashlet',
'LBL_POPUP'=>'Vue Popup',
'LBL_POPUPLIST'=>'Vue Liste de la Popup',
'LBL_POPUPLISTVIEW'=>'Vue Liste de la Popup',
'LBL_POPUPSEARCH'=>'Vue Recherche de la Popup',
'LBL_DASHLETSEARCHVIEW'=>'Vue Recherche du Dashlet',
'LBL_DISPLAY_HTML'=>'Afficher le code HTML',
'LBL_DETAILVIEW'=>'Vue Détail',
'LBL_DROP_HERE' => '[Déposer ici]',
'LBL_EDIT'=>'Éditer',
'LBL_EDIT_LAYOUT'=>'Éditer la mise en page',
'LBL_EDIT_ROWS'=>'Éditer les lignes',
'LBL_EDIT_COLUMNS'=>'Éditer les colonnes',
'LBL_EDIT_LABELS'=>'Éditer les libellés',
'LBL_EDIT_PORTAL'=>'Éditer le Portail pour',
'LBL_EDIT_FIELDS'=>'Éditer les champs personnalisés',
'LBL_EDITVIEW'=>'Vue Édition',
'LBL_FILTER_SEARCH' => "Recherche",
'LBL_FILLER'=>'(caractère de remplissage)',
'LBL_FIELDS'=>'Champs',
'LBL_FAILED_TO_SAVE' => 'Échec de la sauvegarde',
'LBL_FAILED_PUBLISHED' => 'Échec de publication',
'LBL_HOMEPAGE_PREFIX' => 'Mes',
'LBL_LAYOUT_PREVIEW'=>'Pré-visualisation de la Mise en page',
'LBL_LAYOUTS'=>'Mise en page',
'LBL_LISTVIEW'=>'Vue Liste',
'LBL_RECORDVIEW'=>'Enregistrement',
'LBL_RECORDDASHLETVIEW'=>'Dashlet de vue d&#39;enregistrement',
'LBL_PREVIEWVIEW'=>'Preview View',
'LBL_MODULE_TITLE' => 'Studio',
'LBL_NEW_PACKAGE' => 'Nouveau Package',
'LBL_NEW_PANEL'=>'Nouveau Panneau',
'LBL_NEW_ROW'=>'Nouvelle ligne',
'LBL_PACKAGE_DELETED'=>'Package supprimé',
'LBL_PUBLISHING' => 'Publication ...',
'LBL_PUBLISHED' => 'Publié',
'LBL_SELECT_FILE'=> 'Sélectionnez un fichier',
'LBL_SAVE_LAYOUT'=> 'Sauvegarder la mise en page',
'LBL_SELECT_A_SUBPANEL' => 'Sélectionnez un sous-panel',
'LBL_SELECT_SUBPANEL' => 'Sélectionnez un sous-panel',
'LBL_SUBPANELS' => 'Sous-panels',
'LBL_SUBPANEL' => 'Sous-panel',
'LBL_SUBPANEL_TITLE' => 'Fonction :',
'LBL_SEARCH_FORMS' => 'Recherche',
'LBL_STAGING_AREA' => 'Instance de test (glisser et déposer les éléments ici)',
'LBL_SUGAR_FIELDS_STAGE' => 'Champs Sugar (cliquer sur les éléments à ajouter dans l&#39;instance de test)',
'LBL_SUGAR_BIN_STAGE' => 'Poubelle Sugar (cliquer sur les éléments à ajouter dans l&#39;instance de test)',
'LBL_TOOLBOX' => 'Boite à outils',
'LBL_VIEW_SUGAR_FIELDS' => 'Afficher les champs Sugar',
'LBL_VIEW_SUGAR_BIN' => 'Afficher la poubelle Sugar',
'LBL_QUICKCREATE' => 'Creation Rapide',
'LBL_EDIT_DROPDOWNS' => 'Éditer une liste déroulante globale',
'LBL_ADD_DROPDOWN' => 'Ajouter une nouvelle liste déroulante globale',
'LBL_BLANK' => '-vide-',
'LBL_TAB_ORDER' => 'Ordre des onglets',
'LBL_TAB_PANELS' => 'Affichage des panneaux sous forme d&#39;onglets',
'LBL_TAB_PANELS_HELP' => 'Affichage de chaque panneau comme un onglet au lieu d&#39;avoir tous les panneaux qui s&#39;affiche à la suite d&#39;une seule page',
'LBL_TABDEF_TYPE' => 'Type d&#39;affichage',
'LBL_TABDEF_TYPE_HELP' => 'Sélectionnez l&#39;affiche de cette vue. Cette option n&#39;a d&#39;effet que si vous avez activé les onglets sur cette vue.',
'LBL_TABDEF_TYPE_OPTION_TAB' => 'Onglet',
'LBL_TABDEF_TYPE_OPTION_PANEL' => 'Panneau',
'LBL_TABDEF_TYPE_OPTION_HELP' => 'Sélectionnez "Panneau" pour avoir ce panneau affiché directement dans la vue. Sélectionnez "Onglet" pour avoir ce panneau affiché dans un onglet séparé de la vue. Lorsque "Onglet" est spécifié pour un panneau, les panneaux suivants définis en "Panneau" seront affichés dans un même onglet. Un nouvel onglet sera affiché pour le prochain panneau défini en tant que "Onglet". Si "Onglet" est sélectionné pour au moins un panneau alors le premier panneau sera forcément affiché dans un onglet.',
'LBL_TABDEF_COLLAPSE' => 'Rétracter',
'LBL_TABDEF_COLLAPSE_HELP' => 'Sélectionnez pour rétracter par défaut ce panel.',
'LBL_DROPDOWN_TITLE_NAME' => 'Nom de la liste déroulante',
'LBL_DROPDOWN_LANGUAGE' => 'Langue de la liste déroulante',
'LBL_DROPDOWN_ITEMS' => '<u>Eléments de la liste déroulante</u>',
'LBL_DROPDOWN_ITEM_NAME' => 'Clé',
'LBL_DROPDOWN_ITEM_LABEL' => 'Libellé',
'LBL_SYNC_TO_DETAILVIEW' => 'Synchro avec la vue Détail',
'LBL_SYNC_TO_DETAILVIEW_HELP' => 'Sélectionner cette option pour synchroniser cette mise en page de la vue Édition avec la mise en page de la vue Détail correspondante. <br>Lors du clic sur le bouton Sauvegarde ou Sauvegarder et Déployer dans la vue Édition, la disposition des champs de la vue Détail sera automatiquement mise à jour avec celle-ci. <br>Il ne sera plus possible de modifier la mise en page des champs sur la vue Édition.',
'LBL_SYNC_TO_DETAILVIEW_NOTICE' => 'Cette vue Détail est synchronisée avec la vue Édition correspondante.<br>La disposition des champs dans cette vue Détail reflète la disposition des champs dans la vue Édition.<br>Les changements effectués sur la cette vue Détail ne seront pas sauvegardés. Effectuez le changement sur la vue Édition correspondante ou décocher la case "Syncrho avec la vue Détail" présente sur la vue Édition.',
'LBL_COPY_FROM' => 'Copier depuis',
'LBL_COPY_FROM_EDITVIEW' => 'Copie depuis la vue Édition',
'LBL_DROPDOWN_BLANK_WARNING' => 'Les valeurs sont obligatoires pour les deux parties : Clé et Libellé. Pour ajouter un élément vide, cliquez sur Ajouter sans entrée de valeur ni dans la Clé, ni dans le Libellé',
'LBL_DROPDOWN_KEY_EXISTS' => 'Cette clé existe déjà dans la liste',
'LBL_DROPDOWN_LIST_EMPTY' => 'La liste doit contenir au moins une valeur possible',
'LBL_NO_SAVE_ACTION' => 'Impossible de trouver l&#39;action de sauvegarde pour cette vue.',
'LBL_BADLY_FORMED_DOCUMENT' => 'Studio2 :establishLocation : Document mal formé',
// @TODO: Remove this lang string and uncomment out the string below once studio
// supports removing combo fields if a member field is on the layout already.
'LBL_INDICATES_COMBO_FIELD' => '** Indique une collection de champ. Une collection de champ est un regroupement de champ individuel. Par exemple, "Adresse" est une collection de champ qui contient "Rue", "Ville", "Code postal", "Région" et "Pays".<br><br>Un double clic sur une collection de champ affiche les champs contenus dans celle-ci.',
'LBL_COMBO_FIELD_CONTAINS' => 'contient :',

'LBL_WIRELESSLAYOUTS'=>'Mise en page Mobile',
'LBL_WIRELESSEDITVIEW'=>'Vue Édition',
'LBL_WIRELESSDETAILVIEW'=>'Vue Détail',
'LBL_WIRELESSLISTVIEW'=>'Vue Liste mobile',
'LBL_WIRELESSSEARCH'=>'Recherche',

'LBL_BTN_ADD_DEPENDENCY'=>'Ajouter une dépendance',
'LBL_BTN_EDIT_FORMULA'=>'Éditer la formule',
'LBL_DEPENDENCY' => 'Dépendance',
'LBL_DEPENDANT' => 'Dépendant',
'LBL_CALCULATED' => 'Calculé',
'LBL_READ_ONLY' => 'Lecture seule',
'LBL_FORMULA_BUILDER' => 'Constructeur de formule',
'LBL_FORMULA_INVALID' => 'Formule invalide',
'LBL_FORMULA_TYPE' => 'La formule doit être du type',
'LBL_NO_FIELDS' => 'Aucun champ trouvé',
'LBL_NO_FUNCS' => 'Aucune fonction trouvée',
'LBL_SEARCH_FUNCS' => 'Recherche de fonctions...',
'LBL_SEARCH_FIELDS' => 'Recherche de champs...',
'LBL_FORMULA' => 'Formule',
'LBL_DYNAMIC_VALUES_CHECKBOX' => 'Dépendant',
'LBL_DEPENDENT_DROPDOWN_HELP' => 'Glissez les éléments depuis la liste des options disponibles à gauche sur l&#39;une des listes à droite pour rendre cette option disponible lorsque son parent est sélectionné',
'LBL_AVAILABLE_OPTIONS' => 'Options disponibles',
'LBL_PARENT_DROPDOWN' => 'Liste des parents',
'LBL_VISIBILITY_EDITOR' => 'Editeur d&#39;affichage',
'LBL_ROLLUP' => 'Formule de consolidation',
'LBL_RELATED_FIELD' => 'Champ relatif',
'LBL_PORTAL_ROLE_DESC' => 'Ne supprimez pas ce rôle. Le rôle Customer Self-Service Portal / Portail client est un rôle générée par le système et créé pendant le processus d&#39;activation du portail Sugar. Utilisez les contrôles d&#39;accès dans ce rôle à activer et / ou désactiver les modules Bugs, Tickets ou Base de connaissances sur le portail Sugar. Ne modifiez pas les autres contrôles d&#39;accès pour ce rôle afin d&#39;éviter le comportement du système inconnu et imprévisible. En cas de suppression accidentelle de ce rôle, vous pouvez le recréer en désactivant puis en réactivant le portail Sugar.',

//RELATIONSHIPS
'LBL_MODULE' => 'Module',
'LBL_LHS_MODULE'=>'Module principal',
'LBL_CUSTOM_RELATIONSHIPS' => '* relation(s) créée(s) via le studio',
'LBL_RELATIONSHIPS'=>'Relations',
'LBL_RELATIONSHIP_EDIT' => 'Édition de la relation',
'LBL_REL_NAME' => 'Nom',
'LBL_REL_LABEL' => 'Libellé',
'LBL_REL_TYPE' => 'Type',
'LBL_RHS_MODULE'=>'Module lié',
'LBL_NO_RELS' => 'Aucune relation',
'LBL_RELATIONSHIP_ROLE_ENTRIES'=>'Condition Optionnelle' ,
'LBL_RELATIONSHIP_ROLE_COLUMN'=>'Colonne',
'LBL_RELATIONSHIP_ROLE_VALUE'=>'Valeur',
'LBL_SUBPANEL_FROM'=>'Libellé du Sous Panel listant les',
'LBL_RELATIONSHIP_ONLY'=>'Aucun élément visible ne sera créé pour cette relation car il y a déjà une relation visible pré-existante entre ces deux modules.',
'LBL_ONETOONE' => 'Un pour un',
'LBL_ONETOMANY' => 'Un à plusieurs',
'LBL_MANYTOONE' => 'Plusieurs à un',
'LBL_MANYTOMANY' => 'Plusieurs à plusieurs',

//STUDIO QUESTIONS
'LBL_QUESTION_FUNCTION' => 'Sélectionnez une fonction ou un composant.',
'LBL_QUESTION_MODULE1' => 'Sélectionnez un module.',
'LBL_QUESTION_EDIT' => 'Sélectionnez le module que vous voulez modifier.',
'LBL_QUESTION_LAYOUT' => 'Sélectionnez la vue que vous voulez modifier.',
'LBL_QUESTION_SUBPANEL' => 'Sélectionnez le sous-panel que vous voulez modifier.',
'LBL_QUESTION_SEARCH' => 'Sélectionnez le vue "recherche" que vous voulez modifier.',
'LBL_QUESTION_MODULE' => 'Sélectionnez le composant que vous voulez modifier.',
'LBL_QUESTION_PACKAGE' => 'Sélectionnez le package à modifier ou cliquez sur "Nouveau Package" pour en créer un nouveau.',
'LBL_QUESTION_EDITOR' => 'Sélectionnez un outil.',
'LBL_QUESTION_DROPDOWN' => 'Sélectionnez la liste déroulante que vous voulez modifier, ou créer une nouvelle liste déroulante.',
'LBL_QUESTION_DASHLET' => 'Sélectionnez une mise en page de dashlet à éditer.',
'LBL_QUESTION_POPUP' => 'Sélectionnez une mise en page de popup à éditer.',
//CUSTOM FIELDS
'LBL_RELATE_TO'=>'Relatif à',
'LBL_NAME'=>'Nom',
'LBL_LABELS'=>'Libellés',
'LBL_MASS_UPDATE'=>'Mise à jour globale',
'LBL_AUDITED'=>'Audit',
'LBL_CUSTOM_MODULE'=>'Module',
'LBL_DEFAULT_VALUE'=>'valeur par defaut',
'LBL_REQUIRED'=>'Requis',
'LBL_DATA_TYPE'=>'Type',
'LBL_HCUSTOM'=>'PERSONNALISE',
'LBL_HDEFAULT'=>'DEFAUT',
'LBL_LANGUAGE'=>'Langue du Groupe :',
'LBL_CUSTOM_FIELDS' => '* champ créé via le Studio',

//SECTION
'LBL_SECTION_EDLABELS' => 'Éditer les libellés',
'LBL_SECTION_PACKAGES' => 'Paquets',
'LBL_SECTION_PACKAGE' => 'Paquets',
'LBL_SECTION_MODULES' => 'Modules',
'LBL_SECTION_PORTAL' => 'Portail',
'LBL_SECTION_DROPDOWNS' => 'Listes déroulantes',
'LBL_SECTION_PROPERTIES' => 'Propriétés',
'LBL_SECTION_DROPDOWNED' => 'Éditer la liste déroulante',
'LBL_SECTION_HELP' => 'Aide',
'LBL_SECTION_ACTION' => 'Action',
'LBL_SECTION_MAIN' => 'Principal',
'LBL_SECTION_EDPANELLABEL' => 'Éditer le libellé du panneau',
'LBL_SECTION_FIELDEDITOR' => 'Editeur de champ',
'LBL_SECTION_DEPLOY' => 'Déployer',
'LBL_SECTION_MODULE' => 'Module',
'LBL_SECTION_VISIBILITY_EDITOR'=>'Éditer la visibilité',
//WIZARDS

//LIST VIEW EDITOR
'LBL_DEFAULT'=>'Défaut',
'LBL_HIDDEN'=>'Caché',
'LBL_AVAILABLE'=>'Disponible',
'LBL_LISTVIEW_DESCRIPTION'=>'Il y a trois colonnes affichées ci-dessous. La colonne <b>Par défaut</b> contient des champs qui sont affichés dans une liste par défaut. La colonne <b>Additionnel</b> contient des champs que l&#39;utilisateur peut choisir d&#39;utiliser pour créer un affichage personnalisé. La colonne <b>Disponible</b> affiche les champs disponibles pour vous comme admin à ajouter à la valeur par défaut ou des colonnes supplémentaires pour l&#39;utilisation par les utilisateurs.',
'LBL_LISTVIEW_EDIT'=>'Editeur de liste',

//Manager Backups History
'LBL_MB_PREVIEW'=>'Prévisualiser',
'LBL_MB_RESTORE'=>'Restaurer',
'LBL_MB_DELETE'=>'Supprimer',
'LBL_MB_COMPARE'=>'Comparer',
'LBL_MB_DEFAULT_LAYOUT'=>'Mise en page par défaut',

//END WIZARDS

//BUTTONS
'LBL_BTN_ADD'=>'Ajouter',
'LBL_BTN_SAVE'=>'Sauvegarder',
'LBL_BTN_SAVE_CHANGES'=>'Sauvegarder les modifications',
'LBL_BTN_DONT_SAVE'=>'Annuler les modifications',
'LBL_BTN_CANCEL'=>'Annuler/Fermer',
'LBL_BTN_CLOSE'=>'Fermer',
'LBL_BTN_SAVEPUBLISH'=>'Sauvegarder &amp; Publier',
'LBL_BTN_NEXT'=>'Suivant',
'LBL_BTN_BACK'=>'Précédent',
'LBL_BTN_CLONE'=>'Cloner',
'LBL_BTN_COPY' => 'Copier',
'LBL_BTN_COPY_FROM' => 'Copie depuis...',
'LBL_BTN_ADDCOLS'=>'Ajouter des Colonnes',
'LBL_BTN_ADDROWS'=>'Ajouter des Lignes',
'LBL_BTN_ADDFIELD'=>'Ajouter un champ',
'LBL_BTN_ADDDROPDOWN'=>'Ajouter une liste déroulante',
'LBL_BTN_SORT_ASCENDING'=>'Tri Ascendant',
'LBL_BTN_SORT_DESCENDING'=>'Tri Descendant',
'LBL_BTN_EDLABELS'=>'Éditer les libellés',
'LBL_BTN_UNDO'=>'Annuler',
'LBL_BTN_REDO'=>'Réappliquer',
'LBL_BTN_ADDCUSTOMFIELD'=>'Ajouter des champs personnalisés',
'LBL_BTN_EXPORT'=>'Exporter les personnalisations',
'LBL_BTN_DUPLICATE'=>'Dupliquer',
'LBL_BTN_PUBLISH'=>'Publier',
'LBL_BTN_DEPLOY'=>'Déployer',
'LBL_BTN_EXP'=>'Exporter',
'LBL_BTN_DELETE'=>'Supprimer',
'LBL_BTN_VIEW_LAYOUTS'=>'Afficher les mises en page',
'LBL_BTN_VIEW_MOBILE_LAYOUTS'=>'Afficher la mise en page mobile',
'LBL_BTN_VIEW_FIELDS'=>'Afficher les champs',
'LBL_BTN_VIEW_RELATIONSHIPS'=>'Afficher les relations',
'LBL_BTN_ADD_RELATIONSHIP'=>'Ajouter une relation',
'LBL_BTN_RENAME_MODULE' => 'Changer le nom du module',
'LBL_BTN_INSERT'=>'Insérer',
'LBL_BTN_RESTORE_BASE_LAYOUT' => 'Rétablir la mise en page par défaut',
//TABS

//ERRORS
'ERROR_ALREADY_EXISTS'=> 'Ce champ existe déjà',
'ERROR_INVALID_KEY_VALUE'=> "Erreur : valuer de clé invalide : [']",
'ERROR_NO_HISTORY' => 'Aucun fichier contenant un historique a été trouvé',
'ERROR_MINIMUM_FIELDS' => 'Cette mise en page doit contenir au moins un champ',
'ERROR_GENERIC_TITLE' => 'Une erreur s&#39;est produite',
'ERROR_REQUIRED_FIELDS' => 'Êtes-vous sûr de vouloir continuer? Les champs obligatoires suivants sont absents de la mise en page :',
'ERROR_ARE_YOU_SURE' => 'Êtes-vous sûr de vouloir continuer?',
'ERROR_DATABASE_ROW_SIZE_LIMIT' => 'Le champ ne peut pas être créé. Vous avez atteint la limite de taille de ligne de cette table dans votre base de données. <a href="https://support.sugarcrm.com/SmartLinks/Custom/MySQL_Row_Size_Limit/" target="_blank">En savoir plus</a>.',

'ERROR_CALCULATED_MOBILE_FIELDS' => 'Les champs suivants ont calculé des valeurs qui ne seront pas recalculées en temps réel dans la vue Édition Mobile SugarCRM :',
'ERROR_CALCULATED_PORTAL_FIELDS' => 'Les champs suivants ont calculé des valeurs qui ne seront pas recalculées en temps réel dans la vue Édition Portail SugarCRM :',

//SUGAR PORTAL
    'LBL_PORTAL_DISABLED_MODULES' => 'Les modules suivants sont désactivés :',
    'LBL_PORTAL_ENABLE_MODULES' => 'Si vous souhaitez activez ces modules dans le portail Sugar, vous pouvez les activez <a id="configure_tabs" target="_blank" href="./index.php?module=Administration&amp;action=ConfigureTabs">ici</a>',
    'LBL_PORTAL_CONFIGURE' => 'Configuration du portail',
    'LBL_PORTAL_ENABLE_PORTAL' => 'Activer le portail',
    'LBL_PORTAL_SHOW_KB_NOTES' => 'Activer les notes sur le module de la base de connaissances',
    'LBL_PORTAL_ALLOW_CLOSE_CASE' => 'Permettre aux utilisateurs du portail de clore le ticket',
    'LBL_PORTAL_ENABLE_SELF_SIGN_UP' => 'Permettre aux nouveaux utilisateurs de s&#39;inscrire',
    'LBL_PORTAL_USER_PERMISSIONS' => 'Permissions des utilisateurs',
    'LBL_PORTAL_THEME' => 'Thème du portail',
    'LBL_PORTAL_ENABLE' => 'Activer',
    'LBL_PORTAL_SITE_URL' => 'Votre portail Sugar est disponibleà l&#39;URL :',
    'LBL_PORTAL_APP_NAME' => 'Nom de l&#39;application',
    'LBL_PORTAL_CONTACT_PHONE' => 'Téléphone',
    'LBL_PORTAL_CONTACT_EMAIL' => 'Email',
    'LBL_PORTAL_CONTACT_EMAIL_INVALID' => 'Nécessite une adresse email valide',
    'LBL_PORTAL_CONTACT_URL' => 'URL',
    'LBL_PORTAL_CONTACT_INFO_ERROR' => 'Au moins un mode de contact doit être spécifié',
    'LBL_PORTAL_LIST_NUMBER' => 'Nombre maximum d’éléments affichés par page dans les vues Liste',
    'LBL_PORTAL_DETAIL_NUMBER' => 'Nombre maximum de champs affichés par page dans les vues Detail',
    'LBL_PORTAL_SEARCH_RESULT_NUMBER' => 'Nombre maximum de résultats affichés dans la recherche globale',
    'LBL_PORTAL_DEFAULT_ASSIGN_USER' => 'Utilisateur assigné aux enregistrements créés via le portail',
    'LBL_PORTAL_MODULES' => 'Modules du portail',
    'LBL_CONFIG_PORTAL_CONTACT_INFO' => 'Coordonnées du portail',
    'LBL_CONFIG_PORTAL_CONTACT_INFO_HELP' => 'Configurez les coordonnées qui sont présentées aux utilisateurs du portail ayant besoin d&#39;une aide supplémentaire pour leur compte. Au moins une option doit être configurée.',
    'LBL_CONFIG_PORTAL_MODULES_HELP' => 'Glissez et déposez les noms des modules du portail pour les afficher ou les masquer dans la barre de navigation supérieure du portail. Pour contrôler l&#39;accès des utilisateurs du portail aux modules, utilisez <a href="?module=ACLRoles&action=index">Role Management.</a>',
    'LBL_CONFIG_PORTAL_MODULES_DISPLAYED' => 'Modules affichés',
    'LBL_CONFIG_PORTAL_MODULES_HIDDEN' => 'Modules masqués',
    'LBL_CONFIG_VISIBILITY' => 'Visibilité',
    'LBL_CASE_VISIBILITY_HELP' => 'Définissez les utilisateurs du portail qui peuvent voir un ticket.',
    'LBL_EMAIL_VISIBILITY_HELP' => 'Définissez les utilisateurs du portail qui peuvent voir les e-mails liés à un ticket. Les contacts participants sont ceux qui figurent dans les champs À, De, CC et Cci.',
    'LBL_MESSAGE_VISIBILITY_HELP' => 'Définissez les utilisateurs du portail qui peuvent voir les messages liés à un ticket. Les contacts participants sont ceux qui figurent dans le champ Invités.',
    'CASE_VISIBILITY_OPTIONS' => [
        'all' => 'Tous les contacts liés au compte',
        'related_contacts' => 'Seulement le contact principal et les contacts liés au ticket',
    ],
    'EMAIL_VISIBILITY_OPTIONS' => [
        'related_contacts' => 'Uniquement les contacts participants',
        'all' => 'Tous les contacts qui peuvent voir le ticket',
    ],
    'MESSAGE_VISIBILITY_OPTIONS' => [
        'related_contacts' => 'Uniquement les contacts participants',
        'all' => 'Tous les contacts qui peuvent voir le ticket',
    ],


'LBL_PORTAL'=>'Portail',
'LBL_PORTAL_LAYOUTS'=>'Mise en page Portail',
'LBL_SYNCP_WELCOME'=>'Veuillez saisir l&#39;URL de l&#39;instance du portail que vous voulez mettre à jour, puis cliquez sur <b>Go</b>.<br /> Cela vous ouvrira une fenêtre vous permettant de saisir un nom d&#39;utilisateur et un mot de passe.<br /> Veuillez saisir votre nom d&#39;utilisateur Sugar ainsi que votre mot de passe puis cliquez sur <b>Commencer la Synchro</b>.',
'LBL_SP_UPLOADSTYLE'=>'Cliquez sur <b>Naviguer</b> et Sélectionnez une feuille de style sur votre ordinateur que vous voulez uploader.<br /> A la prochaine synchronisation avec le portail, cela synchronisera aussi cette feuille de style.',
'LBL_SP_UPLOADED'=> 'Uploader',
'ERROR_SP_UPLOADED'=>'Veuillez vous assurer que vous uploader une feuille de style CSS.',
'LBL_SP_PREVIEW'=>'Voici un aperçu du rendu de votre feuille de style.',
'LBL_PORTALSITE'=>'URL du Portail Sugar :',
'LBL_PORTAL_GO'=>'Aller',
'LBL_UP_STYLE_SHEET'=>'Uploader une feuille de style',
'LBL_QUESTION_SUGAR_PORTAL' => 'Sélectionnez la mise en page du portail Sugar à éditer.',
'LBL_QUESTION_PORTAL' => 'Sélectionnez la mise en page du portail à éditer.',
'LBL_SUGAR_PORTAL'=>'Editeur du Portail Sugar',
'LBL_USER_SELECT' => 'Sélectionner Utilisateurs',

//PORTAL PREVIEW
'LBL_CASES'=>'Tickets',
'LBL_NEWSLETTERS'=>'Newsletters',
'LBL_BUG_TRACKER'=>'Bugs',
'LBL_MY_ACCOUNT'=>'Mon Compte',
'LBL_LOGOUT'=>'Déconnecter',
'LBL_CREATE_NEW'=>'Créer un nouveau',
'LBL_LOW'=>'Basse',
'LBL_MEDIUM'=>'Moyenne',
'LBL_HIGH'=>'Haute',
'LBL_NUMBER'=>'Numéro :',
'LBL_PRIORITY'=>'Priorité :',
'LBL_SUBJECT'=>'Sujet',

//PACKAGE AND MODULE BUILDER
'LBL_PACKAGE_NAME'=>'Nom du Package :',
'LBL_MODULE_NAME'=>'Nom du module :',
'LBL_MODULE_NAME_SINGULAR' => 'Nom du module au singulier',
'LBL_AUTHOR'=>'Auteur :',
'LBL_DESCRIPTION'=>'Description :',
'LBL_KEY'=>'Clé :',
'LBL_ADD_README'=>'Lisez-moi',
'LBL_MODULES'=>'Modules',
'LBL_LAST_MODIFIED'=>'Date de modification :',
'LBL_NEW_MODULE'=>'Nouveau Module',
'LBL_LABEL'=>'Libellé',
'LBL_LABEL_TITLE'=>'Libellé',
'LBL_SINGULAR_LABEL' => 'Nom du module au singulier',
'LBL_WIDTH'=>'Largeur',
'LBL_PACKAGE'=>'Package :',
'LBL_TYPE'=>'Type :',
'LBL_TEAM_SECURITY'=>'Sécurité par équipe',
'LBL_ASSIGNABLE'=>'Assignation',
'LBL_PERSON'=>'Personne',
'LBL_COMPANY'=>'Société',
'LBL_ISSUE'=>'Ticket',
'LBL_SALE'=>'Affaire',
'LBL_FILE'=>'Document',
'LBL_NAV_TAB'=>'Onglet de Navigation',
'LBL_CREATE'=>'Créer',
'LBL_LIST'=>'Catalogue',
'LBL_VIEW'=>'Afficher',
'LBL_LIST_VIEW'=>'Vue Liste',
'LBL_HISTORY'=>'Historique',
'LBL_RESTORE_DEFAULT_LAYOUT'=>'Rétablir la disposition par défaut',
'LBL_ACTIVITIES'=>'Activités',
'LBL_SEARCH'=>'Recherche',
'LBL_NEW'=>'Nouveau',
'LBL_TYPE_BASIC'=>'basique',
'LBL_TYPE_COMPANY'=>'société',
'LBL_TYPE_PERSON'=>'personne',
'LBL_TYPE_ISSUE'=>'ticket',
'LBL_TYPE_SALE'=>'affaire',
'LBL_TYPE_FILE'=>'document',
'LBL_RSUB'=>'Ceci est le sous-panel qui apparaitra dans votre module',
'LBL_MSUB'=>'Ceci est le sous-panel que votre module founis pour être affiché dans les modules qui lui sont liés',
'LBL_MB_IMPORTABLE'=>'Autoriser les importations',

// VISIBILITY EDITOR
'LBL_VE_VISIBLE'=>'visible',
'LBL_VE_HIDDEN'=>'caché',
'LBL_PACKAGE_WAS_DELETED'=>'[[package]] a été supprimé',

//EXPORT CUSTOMS
'LBL_EC_TITLE'=>'Export des personnalisations',
'LBL_EC_NAME'=>'Nom du package :',
'LBL_EC_AUTHOR'=>'Auteur :',
'LBL_EC_DESCRIPTION'=>'Description :',
'LBL_EC_KEY'=>'Clé :',
'LBL_EC_CHECKERROR'=>'Vous devez sélectionnez au moins un module',
'LBL_EC_CUSTOMFIELD'=>'Champ(s) personnalisé(s)',
'LBL_EC_CUSTOMLAYOUT'=>'Mise(s) en page personnalisée(s)',
'LBL_EC_CUSTOMDROPDOWN' => 'listes déroulantes personnalisées',
'LBL_EC_NOCUSTOM'=>'Aucun module personnalisé',
'LBL_EC_EXPORTBTN'=>'Exporter',
'LBL_MODULE_DEPLOYED' => 'Le module a été déployé.',
'LBL_UNDEFINED' => 'non défini',
'LBL_EC_CUSTOMLABEL'=>'libellé(s) personnalisé(s)',

//AJAX STATUS
'LBL_AJAX_FAILED_DATA' => 'Échec lors de la récupération de données',
'LBL_AJAX_TIME_DEPENDENT' => 'Une action transparente est en cours, veuillez patienter et ré-essayer dans quelques secondes',
'LBL_AJAX_LOADING' => 'Chargement...',
'LBL_AJAX_DELETING' => 'Suppression...',
'LBL_AJAX_BUILDPROGRESS' => 'Construction en cours...',
'LBL_AJAX_DEPLOYPROGRESS' => 'Déploiement en cours...',
'LBL_AJAX_FIELD_EXISTS' =>'Le nom que vous avez choisi pour ce champ est déjà utilisé. Veuillez choisir un autre nom.',
//JS
'LBL_JS_REMOVE_PACKAGE' => 'Êtes-vous sûr(e) de vouloir supprimer ce Package ? Cela supprimera définitivement tous les fichiers associés à celui-ci.',
'LBL_JS_REMOVE_MODULE' => 'Êtes-vous sûr(e) de vouloir supprimer ce Module? Cela supprimera définitivement tous les fichiers associés à celui-ci.',
'LBL_JS_DEPLOY_PACKAGE' => 'Toutes les personnalisations que vous avez fait dans le Studio seront écrasées lorsque ce module sera de nouveau déployée. Êtes-vous sûr de vouloir continuer?',

'LBL_DEPLOY_IN_PROGRESS' => 'Déploiement du package',
'LBL_JS_VALIDATE_NAME'=>'Nom - Doit être alphanumérique sans espace et commencer par une lettre',
'LBL_JS_VALIDATE_PACKAGE_KEY'=>'La clé de paquet existe déjà',
'LBL_JS_VALIDATE_PACKAGE_NAME'=>'Ce nom de package existe déjà',
'LBL_JS_PACKAGE_NAME'=>'Nom du package – Doit être alphanumérique sans espace et commencer par une lettre.',
'LBL_JS_VALIDATE_KEY_WITH_SPACE'=>'Clé - Doit contenir uniquement des caractères alphanumériques et commencer par une lettre',
'LBL_JS_VALIDATE_KEY'=>'Clé - Doit être alphanumérique sans espace et commencer par une lettre',
'LBL_JS_VALIDATE_LABEL'=>'Veuillez saisir un libellé qui sera utilisé comme nom public pour ce module',
'LBL_JS_VALIDATE_TYPE'=>'Veuillez sélectionnez le type de module que vous voulez construire dans la liste ci-dessus',
'LBL_JS_VALIDATE_REL_NAME'=>'Nom - doit être un alphanumérique sans espace',
'LBL_JS_VALIDATE_REL_LABEL'=>'Libellé - veuillez ajouter un libellé qui sera affiché au dessus du sous-panel',

// Dropdown lists
'LBL_JS_DELETE_REQUIRED_DDL_ITEM' => 'Êtes-vous sur de vouloir supprimer cette valeur requise de la liste déroulante ? Cela peut affecter le fonctionnement de votre application.',

// Specific dropdown list should be:
// LBL_JS_DELETE_REQUIRED_DDL_ITEM_(UPPERCASE_DDL_NAME)
'LBL_JS_DELETE_REQUIRED_DDL_ITEM_SALES_STAGE_DOM' => 'Êtes-vous sur de vouloir supprimer cette valeur de la liste déroulante? Supprimer les valeurs "Gagnée" ou "Perdue" peut engendrer des dysfonctionnements du module de prévison',

// Specific list items should be:
// LBL_JS_DELETE_REQUIRED_DDL_ITEM_(UPPERCASE_ITEM_NAME)
// Item name should have all special characters removed and spaces converted to
// underscores
'LBL_JS_DELETE_REQUIRED_DDL_ITEM_NEW' => 'Êtes-vous sur de vouloir supprimer le statut Nouveau ? La suppression de ce statut peut entraîner des dysfonctionnements entre le module Affaire et le module Ligne de revenu.',
'LBL_JS_DELETE_REQUIRED_DDL_ITEM_IN_PROGRESS' => 'Êtes-vous sur de vouloir supprimer le statut En cours ? La suppression de ce statut peut entraîner des dysfonctionnements entre le module Affaire et le module Ligne de revenu.',
'LBL_JS_DELETE_REQUIRED_DDL_ITEM_CLOSED_WON' => 'Êtes-vous sur de vouloir supprimer la valeur "Gagné" ? Supprimer cette valeur peut engendrer des dysfonctionnements du module de prévison',
'LBL_JS_DELETE_REQUIRED_DDL_ITEM_CLOSED_LOST' => 'Êtes-vous sur de vouloir supprimer la valeur "Perdu" ? Supprimer cette valeur peut engendrer des dysfonctionnements du module de prévison',

//CONFIRM
'LBL_CONFIRM_FIELD_DELETE'=>'Deleting this custom field will delete both the custom field and all the data related to the custom field in the database. The field will be no longer appear in any module layouts.'
        . ' If the field is involved in a formula to calculate values for any fields, the formula will no longer work.'
        . '\n\nThe field will no longer be available to use in Reports; this change will be in effect after logging out and logging back in to the application. Any reports containing the field will need to be updated in order to be able to be run.'
        . '\n\nDo you wish to continue?',
'LBL_CONFIRM_RELATIONSHIP_DELETE'=>'Êtes-vous sûr(e) de vouloir supprimer cette relation ?',
'LBL_CONFIRM_RELATIONSHIP_DEPLOY'=>'Cela rendra votre relation permanente. Êtes-vous sûr(e) de vouloir déployer cette relation ?',
'LBL_CONFIRM_DONT_SAVE' => 'Attention vous avez fait des modifications depuis votre dernière sauvegarde, voulez-vous sauvegarder ces modifications ?',
'LBL_CONFIRM_DONT_SAVE_TITLE' => 'Sauvegarder les changements ?',
'LBL_CONFIRM_LOWER_LENGTH' => 'Les données peuvent être tronqués et cela ne peut pas être annulée, êtes-vous sûr de vouloir continuer ?',

//POPUP HELP
'LBL_POPHELP_FIELD_DATA_TYPE'=>'Sélectionnez le type de donnée du champ que vous voulez ajouter',
'LBL_POPHELP_FTS_FIELD_CONFIG' => 'Configurer le champ pour pouvoir faire des recherches sur tout le texte.',
'LBL_POPHELP_FTS_FIELD_BOOST' => 'Le Boosting consiste à augmenter la pertinence d&#39;un champ.<br />Les champs qui ont un "niveau de boosting" plus élevé auront un poids supérieur en cas de recherche. Lors d&#39;une recherche, les enregistrements correspondants contenant des champs de poids supérieur apparaîtront en tête des résultats de la recherche. <br />La valeur par défaut est 1,0, ce qui signifie un "Boosting" neutre (pas de modification de poids). Pour appliquer un boosting positif, toute valeur décimale supérieure à 1 est acceptée. Pour un boosting négatif (diminution de poids), saisir une valeur inférieure à 1,0. Par exemple, une valeur de 1,35 va augmenter le poids d&#39;un champ de 135%. Une valeur de 0,60 diminuera le poids du champ dans les recherches.<br />Notez que dans les versions précédentes, il était obligatoire de lancer une rechercher sur le texte complet. Ceci n&#39;est plus requis.',
'LBL_POPHELP_IMPORTABLE'=>'<b>Oui</b> : Le champ sera importable.<br><b>Non</b> : Le champ ne sera pas importable.<br><b>Requis</b> : Le champ sera obligatoire lors des imports.',
'LBL_POPHELP_PII'=>'Ce champ sera automatiquement marqué pour audit et sera disponible dans la vue de données personnelles.<br>Des champs de données personnelles peuvent aussi être effacés de manière permanente, lorsque l&#39;enregistrement est lié à une demande d&#39;effacement de confidentialité des données.<br>L&#39;effacement est réalisé via le module de confidentialité des données et peut être exécuté par des administrateurs ou des utilisateurs dans le rôle de Gestionnaire de confidentialité des données.',
'LBL_POPHELP_IMAGE_WIDTH'=>'Entrez un nombre pour la largeur, mesurée en pixels.<br> L&#39;image téléchargée sera réduite à cette largeur.',
'LBL_POPHELP_IMAGE_HEIGHT'=>'Entrez un nombre pour la hauteur, mesurée en pixels.<br> L&#39;image téléchargée sera réduite à cette hauteur.',
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
'LBL_POPHELP_REQUIRED'=>"Créez une formule pour déterminer si ce champ est nécessaire dans les mises en page.<br/>"
    . "Les champs obligatoires suivront la formule de l'affichage mobile du navigateur, <br/>"
    . "mais ne suivra pas la formule dans les applications natives, comme Sugar Mobile pour iPhone. <br/>"
    . "Ils ne suivront pas la formule du portail libre-service Sugar.",
'LBL_POPHELP_READONLY'=>"Créez une formule pour déterminer si ce champ est en lecture seule dans les mises en page.<br/>"
        . "Les champs en lecture seule suivront la formule de l'affichage mobile du navigateur, <br/>"
        . "mais ne suivra pas la formule dans les applications natives, comme Sugar Mobile pour iPhone. <br/>"
        . "Ils ne suivront pas la formule du portail libre-service Sugar.",
'LBL_POPHELP_GLOBAL_SEARCH'=>'Cochez cette case pour utiliser ce champ lorsque vous recherchez des enregistrements à l&#39;aide de la recherche globale de ce module.',
//Revert Module labels
'LBL_RESET' => 'Réinitialiser',
'LBL_RESET_MODULE' => 'Réinitialiser Module',
'LBL_REMOVE_CUSTOM' => 'Supprimer Personnalisations',
'LBL_CLEAR_RELATIONSHIPS' => 'Nettoyer Relations',
'LBL_RESET_LABELS' => 'Réinitialiser Libellés',
'LBL_RESET_LAYOUTS' => 'Réinitialiser les présentations',
'LBL_REMOVE_FIELDS' => 'Supprimer Champs personnalisés',
'LBL_CLEAR_EXTENSIONS' => 'Nettoyer Extensions',

'LBL_HISTORY_TIMESTAMP' => 'Tampon horodateur',
'LBL_HISTORY_TITLE' => 'historique',

'fieldTypes' => array(
                'varchar'=>'Saisie libre',
                'int'=>'Entier',
                'float'=>'Float',
                'bool'=>'Case à cocher',
                'enum'=>'Liste à choix simple',
                'multienum' => 'Liste à choix multiple',
                'date'=>'Date',
                'phone' => 'Téléphone',
                'currency' => 'Devise',
                'html' => 'HTML',
                'radioenum' => 'Spot radio',
                'relate' => 'Champ relatif',
                'address' => 'Adresse',
                'text' => 'Mémo',
                'url' => 'URL',
                'iframe' => 'I-Frame',
                'image' => 'Image',
                'encrypt'=>'Crypté',
                'datetimecombo' =>'Date/heure',
                'decimal'=>'Décimal',
                'autoincrement' => 'Incrément automatique',
                'actionbutton' => 'Bouton Action',
),
'labelTypes' => array(
    "" => "Libellés fréquemment utilisés",
    "all" => "Tous les libellés",
),

'parent' => 'Relier par Flex',

'LBL_ILLEGAL_FIELD_VALUE' =>"La clé dans une liste déroulante ne peut pas contenir des guillemets.",
'LBL_CONFIRM_SAVE_DROPDOWN' =>"Vous avez sélectionné un élément de la liste déroulante à supprimer. Tous les champs de type liste déroulante utilisant cette liste ne vont plus afficher cette valeur, et elle ne pourra plus être sélectionnée dans la liste déroulante de ces champs. Êtes-vous sûr de vouloir continuer ?",
'LBL_POPHELP_VALIDATE_US_PHONE'=>"Select to validate this field for the entry of a 10-digit<br>" .
                                 "phone number, with allowance for the country code 1, and<br>" .
                                 "to apply a U.S. format to the phone number when the record<br>" .
                                 "is saved. The following format will be applied: (xxx) xxx-xxxx.",
'LBL_ALL_MODULES'=>'tous les modules',
'LBL_RELATED_FIELD_ID_NAME_LABEL' => '{0} (ID lié {1} )',
'LBL_HEADER_COPY_FROM_LAYOUT' => 'Copie depuis la mise en page',
'LBL_RELATIONSHIP_TYPE' => 'Relation',

// Edit Labels
'LBL_COMPARISON_LANGUAGE' => 'Langue de comparaison',
'LBL_LABEL_NOT_TRANSLATED' => 'Ce libellé peut ne pas être traduit',
);
