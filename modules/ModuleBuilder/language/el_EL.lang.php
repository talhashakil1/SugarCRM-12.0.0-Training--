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
    'LBL_LOADING' => 'Φορτώνει' /*for 508 compliance fix*/,
    'LBL_HIDEOPTIONS' => 'Απόκρυψη Επιλογών' /*for 508 compliance fix*/,
    'LBL_DELETE' => 'Διαγραφή' /*for 508 compliance fix*/,
    'LBL_POWERED_BY_SUGAR' => 'Με την ισχύ του SugarCRM' /*for 508 compliance fix*/,
    'LBL_ROLE' => 'Ρόλος',
    'LBL_BASE_LAYOUT' => 'Διάταξη βάσης',
    'LBL_FIELD_NAME' => 'Όνομα Πεδίου',
    'LBL_FIELD_VALUE' => 'Τιμή',
    'LBL_LAYOUT_DETERMINED_BY' => 'Η διάταξη καθορίζεται από:',
    'layoutDeterminedBy' => [
        'std' => 'Τυπική διάταξη',
        'role' => 'Ρόλος',
        'dropdown' => 'Αναπτυσσόμενο πεδίο',
    ],
    'LBL_DELETE_CUSTOM_LAYOUTS' => 'Είστε βέβαιοι ότι θέλετε να αλλάξετε τους τρέχοντες ορισμούς της διάταξης;',
'help'=>array(
    'package'=>array(
            'create'=>'δημιουργία. <br />Δώστε ένα Όνομα για το πακέτο. Το όνομα που εισάγετε πρέπει να είναι αλφαριθμητικό και να μην περιέχει κενά διαστήματα. (Παράδειγμα: HR_Management).<br /><br />Μπορείτε να παρέχετε πληροφορίες  του Συγγραφέα και Περιγραφή για το πακέτο.<br /><br />Πατήστε στο κουμπί "Αποθήκευση" για να δημιουργήσετε το πακέτο.',
            'modify'=>'τροποποίηση. <br />Οι ιδιότητες και τις πιθανές ενέργειες για το Πακέτο εμφανίζονται εδώ.<br /> <br />Μπορείτε να τροποποιήσετε το Όνομα, τον Συγγραφέα, και την Περιγραφή του πακέτου, καθώς και να προβάλετε και να προσαρμόσετε όλες τις ενότητες που περιλαμβάνονται στο πακέτο.<br /> <br />Πατήστε στο κουμπί Νέα Ενότητα για να δημιουργήσετε την ενότητα για το πακέτο.<br /><br />Αν το πακέτο περιέχει τουλάχιστον μία ενότητα, μπορείτε να το Δημοσιεύσετε και να το Αναπτύξετε, καθώς και να κάνετε Εξαγωγή ως τις προσαρμογές που κάνατε στο πακέτο.',
            'name'=>'όνομα. <br />Αυτό είναι το Όνομα του τρέχων πακέτου.<br /><br />Το όνομα που εισάγετε πρέπει να είναι αλφαριθμητικό, να αρχίζει με ένα γράμμα και να μην περιέχει κενά διαστήματα.',
            'author'=>'συγγραφέας<br />Ο Συγγραφέας είναι το όνομα της οντότητας που δημιούργησε το πακέτο. <br /><br />Ο Συγγραφέας μπορεί να είναι είτε ένα άτομο ή μία εταιρεία.',
            'description'=>'περιγραφή<br />Αυτή είναι η περιγραφή του πακέτου που εμφανίζεται κατά την εγκατάσταση.',
            'publishbtn'=>'δημοσίευση<br />Πατήστε στο κουμπί Δημοσίευση για να αποθηκεύσετε όλα τα δεδομένα που έχουν εισαχθεί και να δημιουργήσετε ένα αρχείο .Zip που είναι μια έκδοση εγκατάστασης του πακέτου. <br /><br />Χρησιμοποιήστε τον  Φορτωτή Ενότητας για να φορτώσει το .zip αρχείο και να εγκαταστήσει το πακέτο.',
            'deploybtn'=>'ανάπτυξη<br />Πατήστε στο κουμπί Ανάπτυξη για να αποθηκεύσετε όλα τα δεδομένα που έχουν εισαχθεί και να εγκαταστήσετε το πακέτο, συμπεριλαμβανομένων όλων των ενοτήτων, στην συγκεκριμένη περίπτωση.',
            'duplicatebtn'=>'αντίγραφο<br />Πατήστε στο κουμπί Αντίγραφο για να αντιγράψει το περιεχόμενο του πακέτου σε ένα νέο και για να εμφανίσει το νέο πακέτο. <br /><br />Για το νέο πακέτο, ένα νέο όνομα θα δημιουργηθεί αυτόματα με την παράθεση ενός αριθμού στο τέλος του ονόματος του πακέτου που χρησιμοποιείται για να δημιουργήσει το νέο. Μπορείτε να μετονομάσετε το νέο πακέτο, εισάγοντας ένα νέο  Όνομα και πατώντας στο κουμπί Αποθήκευση.',
            'exportbtn'=>'εξαγωγή<br />Πατήστε στο κουμπί Εξαγωγή για να δημιουργήσετε ένα αρχείο .zip που περιέχει τις προσαρμογές έχουν γίνει στο πακέτο. <br /><br />Το παραγόμενο αρχείο δεν είναι μια έκδοση εγκατάστασης του πακέτου. <br /><br />Χρησιμοποιήστε τον  Φορτωτή Ενότητας για την εισαγωγή του .zip αρχείου και να έχει το πακέτο, συμπεριλαμβανομένων προσαρμογών, εμφανίζονται στην Ενότητα Δόμησης.',
            'deletebtn'=>'διαγραφή<br />Πατήστε στο κουμπί Διαγραφή να διαγράψετε αυτό το πακέτο και όλα τα αρχεία που σχετίζονται με αυτό το πακέτο.',
            'savebtn'=>'αποθήκευση<br />Πατήστε στο κουμπί Αποθήκευση για να αποθηκεύσετε όλα τα δεδομένα που έχουν εισαχθεί σχετικά με το πακέτο.',
            'existing_module'=>'υπάρχουσα ενότητα<br />Πατήστε στο εικονίδιο Ενότητα για να επεξεργαστείτε τις ιδιότητες και να προσαρμόσετε τα πεδία, και σχέσεις και διατάξεις που σχετίζονται με την ενότητα.',
            'new_module'=>'νέα ενότητα<br />Πατήστε στο κουμπί Νέα Ενότητα για να δημιουργήσετε μια νέα ενότητα για αυτό το πακέτο.',
            'key'=>'This 5-letter, alphanumeric <b>Key</b> will be used to prefix all directories, class names and database tables for all of the modules in the current package.<br><br>The key is used in an effort to achieve table name uniqueness.',
            'readme'=>'διάβασε με<br />Πατήστε για να προσθέσετε κείμενο "Διάβασε με" για αυτό το πακέτα. Το αρχείο "Διάβασε με" θα είναι διαθέσιμο κατά τη στιγμή της εγκατάστασης.',

),
    'main'=>array(

    ),
    'module'=>array(
        'create'=>'δημιουργία. <br />Δώστε ένα<b> Όνομα</b> για την ενότητα. Η <b>Ετικέτα</b> που παρέχετε θα εμφανίζεται στην καρτέλα πλοήγησης.<br /><br />Επιλέξτε να εμφανιστεί μια καρτέλα πλοήγησης για την ενότητα, επιλέγοντας το πλαίσιο ελέγχου στη <b> Καρτέλα Πλοήγησης</b>.<br /><br />Επιλέξτε το πλαίσιο ελέγχου <b>Ασφαλεία Ομάδας</b> να έχετε ένα πεδίο επιλογής Ομάδας στην σελίδα εγγραφές ενότητας.<br /><br />Κατόπιν επιλέξτε τον τύπο ενότητας που θα επιθυμούσατε να δημιουργήσετε.<br /><br />Επιλέξτε έναν τύπο προτύπου. Κάθε πρότυπο περιέχει ένα συγκεκριμένο σύνολο πεδίων, όπως οι προκαθορισμένες διατάξεις, στη χρήση σαν βάση για την ενότητά σας.<br /><br />Πατήστε Αποθήκευση να δημιουργήσετε την ενότητα.',
        'modify'=>'You can change the module properties or customize the <b>Fields</b>, <b>Relationships</b> and <b>Layouts</b> related to the module.',
        'importable'=>'Checking the <b>Importable</b> checkbox will enable importing for this module.<br><br>A link to the Import Wizard will appear in the Shortcuts panel in the module.  The Import Wizard facilitates importing of data from external sources into the custom module.',
        'team_security'=>'Checking the <b>Team Security</b> checkbox will enable team security for this module.  <br/><br/>If team security is enabled, the Team selection field will appear within the records in the module ',
        'reportable'=>'ανακοινώσιμες<br />Επιλέγοντας αυτό το πλαίσιο θα επιτρέψει σε αυτή την ενότητα να τρέξει αναφορές εναντίον της.',
        'assignable'=>'αντιστοίχιση<br />Επιλέγοντας αυτό το πλαισίο, θα επιτρέψει την εγγραφή σε αυτή την ενότητα να ανατεθεί σε επιλεγμένο χειριστή.',
        'has_tab'=>'έχει_καρτέλα<br />Επιλέγοντας την <b>Καρτέλα Πλοήγησης,</b> θα παράσχει μία καρτέλα πλοήγησης για την ενότητα.',
        'acl'=>'δράση<br />Επιλέγοντας αυτό το πλαισίο, θα επιτρέψει Έλεγχο Πρόσβασης σε αυτή την ενότητα, συμπεριλαμβανομένου του Πεδίου Ασφάλεια Επιπέδου.',
        'studio'=>'στούντιο<br />Επιλέγοντας αυτό το πλαίσιο, θα επιτρέπει στους διαχειριστές να προσαρμόσσουν αυτή την ενότητα μέσα στο Στούντιο.',
        'audit'=>'Checking this box will enable Auditing for this module. Changes to certain fields will be recorded so that administrators can review the change history.',
        'viewfieldsbtn'=>'Click <b>View Fields</b> to view the fields associated with the module and to create and edit custom fields.',
        'viewrelsbtn'=>'Click <b>View Relationships</b> to view the relationships associated with this module and to create new relationships.',
        'viewlayoutsbtn'=>'Click <b>View Layouts</b> to view the layouts for the module and to customize the field arrangement within the layouts.',
        'viewmobilelayoutsbtn' => 'Click <b>View Mobile Layouts</b> to view the mobile layouts for the module and to customize the field arrangement within the layouts.',
        'duplicatebtn'=>'Click <b>Duplicate</b> to copy the properties of the module into a new module and to display the new module. <br/><br/>For the new module, a new name will be generated automatically by appending a number to the end of the name of the module used to create the new one.',
        'deletebtn'=>'διαγραφή<br />Πατήστε το κουμπί <b>Διαγραφή</b>, για να διαγράψετε αυτή την ενότητα.',
        'name'=>'όνομα<br />Αυτό είναι το<b> Όνομα</b> της τρέχουσας ενότητας. Το όνομα πρέπει να είναι αλφαριθμητικό και πρέπει να αρχίζει με ένα γράμμα και να μην περιέχει κενά',
        'label'=>'Αυτό είναι η <b>Ετικέτα</b> που θα εμφανίζεται την καρτέλα πλοήγησης για την ενότητα.',
        'savebtn'=>'αποθήκευση<br />Πατήστε το κουμπί <b>Αποθήκευση</b> για να αποθηκεύσετε όλα τα δεδομένα που έχουν εισαχθεί σχετικά με την ενότητα.',
        'type_basic'=>'Ο <b>Βασικός</b> τύπος προτύπου παρέχει βασικά πεδία, όπως το Όνομα, Ανατέθηκε σε, Ομάδα, Ημερομηνία Δημιουργίας, και πεδία Περιγραφής.',
        'type_company'=>'Ο τύπος προτύπου της <b>Εταιρείας</b> παρέχει την οργάνωση-συγκεκριμένων πεδίων, όπως το Όνομα Εταιρείας, Κλάδο, και την Διεύθυνση Τιμολόγησης. Χρησιμοποιήστε αυτό το πρότυπο για να δημιουργήσετε ενότητες που είναι παρόμοιες με την κανονική ενότητα Λογαριασμών.',
        'type_issue'=>'The <b>Issue</b> template type provides case- and bug-specific fields, such as Number, Status, Priority and Description.<br/><br/>Use this template to create modules that are similar to the standard Cases and Bug Tracker modules.',
        'type_person'=>'The <b>Person</b> template type provides individual-specific fields, such as Salutation, Title, Name, Address and Phone Number.<br/><br/>Use this template to create modules that are similar to the standard Contacts and Leads modules.',
        'type_sale'=>'The <b>Sale</b> template type provides opportunity specific fields, such as Lead Source, Stage, Amount and Probability. <br/><br/>Use this template to create modules that are similar to the standard Opportunities module.',
        'type_file'=>'The <b>File</b> template provides Document specific fields, such as File Name, Document type, and Publish Date.<br><br>Use this template to create modules that are similar to the standard Documents module.',

    ),
    'dropdowns'=>array(
        'default' => 'All of the <b>Dropdowns</b> for the application are listed here.<br><br>The dropdowns can be used for dropdown fields in any module.<br><br>To make changes to an existing dropdown, click on the dropdown name.<br><br>Click <b>Add Dropdown</b> to create a new dropdown.',
        'editdropdown'=>'Dropdown lists can be used for standard or custom dropdown fields in any module.<br><br>Provide a <b>Name</b> for the dropdown list.<br><br>If any language packs are installed in the application, you can select the <b>Language</b> to use for the list items.<br><br>In the <b>Item Name</b> field, provide a name for the option in the dropdown list.  This name will not appear in the dropdown list that is visible to users.<br><br>In the <b>Display Label</b> field, provide a label that will be visible to users.<br><br>After providing the item name and display label, click <b>Add</b> to add the item to the dropdown list.<br><br>To reorder the items in the list, drag and drop items into the desired positions.<br><br>To edit the display label of an item, click the <b>Edit icon</b>, and enter a new label. To delete an item from the dropdown list, click the <b>Delete icon</b>.<br><br>To undo a change made to a display label, click <b>Undo</b>.  To redo a change that was undone, click <b>Redo</b>.<br><br>Click <b>Save</b> to save the dropdown list.',

    ),
    'subPanelEditor'=>array(
        'modify'	=> 'All of the fields that can be displayed in the <b>Subpanel</b> appear here.<br><br>The <b>Default</b> column contains the fields that are displayed in the Subpanel.<br/><br/>The <b>Hidden</b> column contains fields that can be added to the Default column.'
    . '<br/><br/><!--not_in_theme!--><img src="themes/default/images/SugarLogic/icon_dependent.png"/>Indicates a Dependent field that may or may not be visible based on the value of a formula.<br/><!--not_in_theme!--><img src="themes/default/images/SugarLogic/icon_calculated.png" /> Indicates a Calculated field whose value will be automatically determined based on a formula.'
    ,
        'savebtn'	=> 'αποθήκευση<br />Πατήστε το κουμπί <b>Αποθήκευση και Ανάπτυξη</b> να αποθηκεύσετε όλες τις αλλαγές και να τις καταστήσετε ενεργές.',
        'historyBtn'=> 'ιστορικό<br />Πατήστε την επιλογή <b>Προβολή Ιστορικού</b> για να δείτε και να αποκαταστήσει μια ήδη αποθηκευμένη διάταξη από την ιστορία.',
        'historyRestoreDefaultLayout'=> 'Click <b>Restore Default Layout</b> to restore a view to its original layout.',
        'Hidden' 	=> 'κρυφά<br />Τα <b>Κρυφά</b> πεδία είναι πεδία δεν θα εμφανίζονται στην προβολή αναζήτησης.',
        'Default'	=> 'προεπιλογή<br />Η Προεπιλογή πεδίων θα εμφανίζονται στην προβολή αναζήτησης',

    ),
    'listViewEditor'=>array(
        'modify'	=> 'All of the fields that can be displayed in the <b>ListView</b> appear here.<br><br>The <b>Default</b> column contains the fields that are displayed in the ListView by default.<br/><br/>The <b>Available</b> column contains fields that a user can select in the Search to create a custom ListView. <br/><br/>The <b>Hidden</b> column contains fields that can be added to the Default or Available column.'
    . '<br/><br/><!--not_in_theme!--><img src="themes/default/images/SugarLogic/icon_dependent.png"/>Indicates a Dependent field that may or may not be visible based on the value of a formula.<br/><!--not_in_theme!--><img src="themes/default/images/SugarLogic/icon_calculated.png" /> Indicates a Calculated field whose value will be automatically determined based on a formula.'
    ,
        'savebtn'	=> 'αποθήκευση<br />Πατήστε το κουμπί <b>Αποθήκευση και Ανάπτυξη</b> να αποθηκεύσετε όλες τις αλλαγές και να τις καταστήσετε ενεργές.',
        'historyBtn'=> 'ιστορικό<br />Πατήστε στην επιλογή <b>Προβολή Ιστορικού</b> για να δείτε και να αποκαταστήσει μια ήδη αποθηκευμένη διάταξη από την ιστορία.<br /><br />Η <b>Επαναφορά</b> στην <b>Προβολή Ιστορικού</b> αποκαθιστά την τοποθέτηση πεδίου στο χώρο προηγουμένως αποθηκεύσει διατάξεις. Για να αλλάξετε ετικέτες πεδίου, πατήστε στο εικονίδιο Επεξεργασία δίπλα σε κάθε πεδίο.',
        'historyRestoreDefaultLayout'=> 'Click <b>Restore Default Layout</b> to restore a view to its original layout.<br><br><b>Restore Default Layout</b> only restores the field placement within the original layout. To change field labels, click the Edit icon next to each field.',
        'Hidden' 	=> 'κρυφά<br />Τα <b>Κρυφά</b> πεδία δεν είναι διαθέσιμα για τους χρήστες να δουν στην Προβολή Λίστας.',
        'Available' => 'διαθέσιμα<br />Τα <b>Διαθέσιμα</b> πεδία δεν εμφανίζονται από προεπιλογή, αλλά μπορούν να προστεθούν στην Προβολή Λίστας από τους χρήστες.',
        'Default'	=> 'προεπιλογή<br />Η <b>Προεπιλογή</b> πεδίων εμφανίζεται στις Προβολή Λίστας που δεν έχει προσαρμοστεί από τους χειριστές.'
    ),
    'popupListViewEditor'=>array(
        'modify'	=> 'All of the fields that can be displayed in the <b>ListView</b> appear here.<br><br>The <b>Default</b> column contains the fields that are displayed in the ListView by default.<br/><br/>The <b>Hidden</b> column contains fields that can be added to the Default or Available column.'
    . '<br/><br/><!--not_in_theme!--><img src="themes/default/images/SugarLogic/icon_dependent.png"/>Indicates a Dependent field that may or may not be visible based on the value of a formula.<br/><!--not_in_theme!--><img src="themes/default/images/SugarLogic/icon_calculated.png" /> Indicates a Calculated field whose value will be automatically determined based on a formula.'
    ,
        'savebtn'	=> 'αποθήκευση<br />Πατήστε το κουμπί <b>Αποθήκευση και Ανάπτυξη</b> να αποθηκεύσετε όλες τις αλλαγές και να τις καταστήσετε ενεργές.',
        'historyBtn'=> 'ιστορικό<br />Πατήστε στην επιλογή <b>Προβολή Ιστορικού</b> για να δείτε και να αποκαταστήσει μια ήδη αποθηκευμένη διάταξη από την ιστορία.<br /><br />Η <b>Επαναφορά</b> στην <b>Προβολή Ιστορικού</b> αποκαθιστά την τοποθέτηση πεδίου στο χώρο προηγουμένως αποθηκεύσει διατάξεις. Για να αλλάξετε ετικέτες πεδίου, πατήστε στο εικονίδιο Επεξεργασία δίπλα σε κάθε πεδίο.',
        'historyRestoreDefaultLayout'=> 'Click <b>Restore Default Layout</b> to restore a view to its original layout.<br><br><b>Restore Default Layout</b> only restores the field placement within the original layout. To change field labels, click the Edit icon next to each field.',
        'Hidden' 	=> 'κρυφά<br />Τα <b>Κρυφά</b> πεδία δεν είναι διαθέσιμα για τους χρήστες να δουν στην Προβολή Λίστας.',
        'Default'	=> 'προεπιλογή<br />Η <b>Προεπιλογή</b> πεδίων εμφανίζεται στις Προβολή Λίστας που δεν έχει προσαρμοστεί από τους χειριστές.'
    ),
    'searchViewEditor'=>array(
        'modify'	=> 'All of the fields that can be displayed in the <b>Search</b> form appear here.<br><br>The <b>Default</b> column contains the fields that will be displayed in the Search form.<br/><br/>The <b>Hidden</b> column contains fields available for you as an admin to add to the Search form.'
    . '<br/><br/><!--not_in_theme!--><img src="themes/default/images/SugarLogic/icon_dependent.png"/>Indicates a Dependent field that may or may not be visible based on the value of a formula.<br/><!--not_in_theme!--><img src="themes/default/images/SugarLogic/icon_calculated.png" /> Indicates a Calculated field whose value will be automatically determined based on a formula.'
    . '<br/><br/>This configuration applies to popup search layout in legacy modules only.',
        'savebtn'	=> 'αποθήκευση<br />Πατώντας το κουμπί <b>Αποθήκευση & Ανάπτυξη</b> θα αποθηκεύσετε όλες τις αλλαγές και θα τις καταστήσετε ενεργές.',
        'Hidden' 	=> 'Κρυφά<br />Τα <b>Κρυφά</b> πεδία δεν εμφανίζονται στην προβολή αναζήτησης.',
        'historyBtn'=> 'ιστορικό<br />Πατήστε στην επιλογή <b>Προβολή Ιστορικού</b> για να δείτε και να αποκαταστήσει μια ήδη αποθηκευμένη διάταξη από την ιστορία.<br /><br />Η <b>Επαναφορά</b> στην <b>Προβολή Ιστορικού</b> αποκαθιστά την τοποθέτηση πεδίου στο χώρο προηγουμένως αποθηκεύσει διατάξεις. Για να αλλάξετε ετικέτες πεδίου, πατήστε στο εικονίδιο Επεξεργασία δίπλα σε κάθε πεδίο.',
        'historyRestoreDefaultLayout'=> 'Click <b>Restore Default Layout</b> to restore a view to its original layout.<br><br><b>Restore Default Layout</b> only restores the field placement within the original layout. To change field labels, click the Edit icon next to each field.',
        'Default'	=> 'Προεπιλογή<br />Η <b>Προεπιλογή</b> πεδίων θα εμφανίζονται στην προβολή αναζήτησης'
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
        'saveBtn'	=> 'αποθήκευση<br />Πατήστε το κουμπί <b>Αποθήκευση</b> για να διατηρήσετε τις αλλαγές που κάνατε στη διάταξη από την τελευταία φορά που αποθηκεύσατε. <br /><br />Οι αλλαγές δεν θα εμφανιστούν στην ενότητα μέχρι να Αναπτύξετε τις αποθηκευμένες αλλαγές.',
        'historyBtn'=> 'ιστορικό<br />Πατήστε στην επιλογή <b>Προβολή Ιστορικού</b> για να δείτε και να αποκαταστήσει μια ήδη αποθηκευμένη διάταξη από την ιστορία.<br /><br />Η <b>Επαναφορά</b> στην <b>Προβολή Ιστορικού</b> αποκαθιστά την τοποθέτηση πεδίου στο χώρο προηγουμένως αποθηκεύσει διατάξεις. Για να αλλάξετε ετικέτες πεδίου, πατήστε στο εικονίδιο Επεξεργασία δίπλα σε κάθε πεδίο.',
        'historyRestoreDefaultLayout'=> 'Click <b>Restore Default Layout</b> to restore a view to its original layout.<br><br><b>Restore Default Layout</b> only restores the field placement within the original layout. To change field labels, click the Edit icon next to each field.',
        'publishBtn'=> 'δημοσίευση<br />Πατήστε το κουμπί <b>Αποθήκευση & Ανάπτυξη</b> για να αποθηκεύσετε όλες τις αλλαγές και να τις καταστήσετε ενεργές.<br /><br />Η διάταξη θα πρέπει να εμφανιστεί αμέσως στην ενότητα.',
        'toolbox'	=> 'The <b>Toolbox</b> contains the <b>Recycle Bin</b>, additional layout elements and the set of available fields to add to the layout.<br/><br/>The layout elements and fields in the Toolbox can be dragged and dropped into the layout, and the layout elements and fields can be dragged and dropped from the layout into the Toolbox.<br><br>The layout elements are <b>Panels</b> and <b>Rows</b>. Adding a new row or a new panel to the layout provides additional locations in the layout for fields.<br/><br/>Drag and drop any of the fields in the Toolbox or layout onto a occupied field position to swap the locations of the two fields.<br/><br/>The <b>Filler</b> field creates blank space in the layout where it is placed.',
        'panels'	=> 'ταμπλό<br />Η περιοχή <b>Διάταξης</b> παρέχει μία προβολή για το πώς η διάταξη θα εμφανιστεί μέσα στην ενότητα, όταν επεκτείνονται οι αλλαγές που γίνονται σε αυτή. <br /><br />Μπορείτε να επανατοποθετήσετε τα στοιχεία όπως τα πεδία, οι σειρές και οι επιτροπές, με σύρσιμο του ποντικιού και απόθεση τους.  <br /><br />Αφαιρέστε στοιχεία με σύρσιμο του ποντικιού και απόθεση στον <b>Κάδο Ανακύκλωσης</b> στην εργαλειοθήκη, ή προσθέστε νέα στοιχεία και πεδία σύροντάς τα, με το ποντίκι, από τις <b>Εργαλειοθήκες</b> και ρίχνοντάς τα στην επιθυμητή θέση στην διάταξη.',
        'delete'	=> 'διαγραφή<br />Μεταφέρετε και αποθέστε κάθε στοιχείο εδώ για να το αφαιρέσετε από τη διάταξη',
        'property'	=> 'Edit the <b>Label</b> displayed for this field.<br><br><b>Width</b> provide a width value in pixels for Sidecar modules and as a percentage of the table width for backward compatible modules.',
    ),
    'fieldsEditor'=>array(
        'default'	=> 'The <b>Fields</b> that are available for the module are listed here by Field Name.<br><br>Custom fields created for the module appear above the fields that are available for the module by default.<br><br>To edit a field, click the <b>Field Name</b>.<br/><br/>To create a new field, click <b>Add Field</b>.',
        'mbDefault'=>'προεπιλογή ενότητας<br />Τα <b>Πεδία</b> που είναι διαθέσιμα για την ενότητα παρατίθενται εδώ με Όνομα Πεδίου. <br /><br />Για να ρυθμίσετε τις ιδιότητες για ένα πεδίο, πατήστε στο Όνομα του Πεδίου. <br /><br />Για να δημιουργήσετε ένα νέο πεδίο, πατήστε στο κουμπί <b>Προσθήκη Πεδίων</b>. Η ετικέτα, μαζί με τις άλλες ιδιότητες για το νέο πεδίο μπορεί να τροποποιηθεί μετά τη δημιουργία του, πατήστε στο Όνομα του Πεδίου. <br /><br />Αφού η ενότητα έχει αναπτυχθεί, τα νέα πεδία που δημιουργούνται στην Ενότητα Δόμησης θεωρούνται ως πρότυπα πεδία στην επεκταμένη ενότητα στο Στούντιο.',
        'addField'	=> 'Select a <b>Data Type</b> for the new field. The type you select determines what kind of characters can be entered for the field. For example, only numbers that are integers may be entered into fields that are of the Integer data type.<br><br> Provide a <b>Name</b> for the field.  The name must be alphanumeric and must not contain any spaces. Underscores are valid.<br><br> The <b>Display Label</b> is the label that will appear for the fields in the module layouts.  The <b>System Label</b> is used to refer to the field in the code.<br><br> Depending on the data type selected for the field, some or all of the following properties can be set for the field:<br><br> <b>Help Text</b> appears temporarily while a user hovers over the field and can be used to prompt the user for the type of input desired.<br><br> <b>Comment Text</b> is only seen within Studio &/or Module Builder, and can be used to describe the field for administrators.<br><br> <b>Default Value</b> will appear in the field.  Users can enter a new value in the field or use the default value.<br><br> Select the <b>Mass Update</b> checkbox in order to be able to use the Mass Update feature for the field.<br><br>The <b>Max Size</b> value determines the maximum number of characters that can be entered in the field.<br><br> Select the <b>Required Field</b> checkbox in order to make the field required. A value must be provided for the field in order to be able to save a record containing the field.<br><br> Select the <b>Reportable</b> checkbox in order to allow the field to be used for filters and for displaying data in Reports.<br><br> Select the <b>Audit</b> checkbox in order to be able to track changes to the field in the Change Log.<br><br>Select an option in the <b>Importable</b> field to allow, disallow or require the field to be imported into in the Import Wizard.<br><br>Select an option in the <b>Duplicate Merge</b> field to enable or disable the Merge Duplicates and Find Duplicates features.<br><br>Additional properties can be set for certain data types.',
        'editField' => 'επεξεργασία πεδίου<br />Οι ιδιότητες αυτού του πεδίου μπορούν να προσαρμοστούν. <br /><br />Πατήστε το κουμπί Κλώνος για να δημιουργήσετε ένα νέο πεδίο με τις ίδιες ιδιότητες.',
        'mbeditField' => 'The <b>Display Label</b> of a template field can be customized. The other properties of the field can not be customized.<br><br>Click <b>Clone</b> to create a new field with the same properties.<br><br>To remove a template field so that it does not display in the module, remove the field from the appropriate <b>Layouts</b>.'

    ),
    'exportcustom'=>array(
        'exportHelp'=>'βοήθεια εξαγωγής<br />Οι προσαρμογές που γίνονται στο Στούντιο μέσα σε αυτήν την περίπτωση μπορούν να συσκευαστούν και να επεκταθούν σε μια άλλη περίπτωση μέσα από την <b>Ενότητα Φορτωτή</b>. <br /><br />Πρώτα, παρέχετε ένα<b>Όνομα Πακέτου</b>. Μπορείτε να παρέχετε στον <b>Συντάκτη</b> και τις πληροφορίες <b>Περιγραφής</b> για το πακέτο. <br /><br />Επιλέξτε την ενότητα που περιέχει τις προσαρμογές για να εξαγάγει. Μόνο οι ενότητες που περιέχουν τις προσαρμογές θα εμφανιστούν για εσάς που επιλέγετε. <br /><br />Πατήστε στο κουμπί <b>Εξαγωγή</b> για να δημιουργήσετε ένα zip αρχείο για το πακέτο που περιέχει τις προσαρμογές.',
        'exportCustomBtn'=>'προσαρμοσένη επιλογή<br />Πατήστε <b>Εξαγωγή</b> για να δημιουργήσετε ένα αρχείο Zip για το πακέτο που περιέχει τις προσαρμογές που θέλετε να εξαγάγετε.',
        'name'=>'όνομα<br />Αυτό είναι το <b>Όνομα</b> του πακέτου. Αυτό το όνομα θα εμφανίζεται κατά την εγκατάσταση.',
        'author'=>'συγγραφέας<br />Ο <b>Συγγραφέα</b>ς είναι το όνομα της οντότητας που δημιούργησε το πακέτο. Ο Συγγραφέας μπορεί να είναι είτε ένα άτομο ή μία εταιρεία.',
        'description'=>'περιγραφή<br />Αυτή είναι η περιγραφή του πακέτου που εμφανίζεται κατά την εγκατάσταση.',
    ),
    'studioWizard'=>array(
        'mainHelp' 	=> 'βασική βοήθεια<br />Καλώς ήρθατε στην περιοχή <b>Εργαλεία Προγραμματιστή</b>. <br /><br />Χρησιμοποιήστε τα εργαλεία σε αυτόν τον τομέα για να δημιουργήσετε και να διαχειριστείτε πρότυπες και προσαρμοσμένες ενότητες και πεδία.',
        'studioBtn'	=> 'στούντιο<br />Χρησιμοποιήστε το <b>Στούντιο</b> για να προσαρμόσει τις επεκταμένες ενότητες.',
        'mbBtn'		=> 'ενότητα δόμησης<br />Χρησιμοποιήστε την <b>Ενότητα Δόμησης</b> για τη δημιουργία νέων ενοτήτων.',
        'sugarPortalBtn' => 'Sugar Portal<br />Χρησιμοποιήστε τον <b>Συντάκτη Sugar Portal</b> να διαχειριστείτε και να προσαρμόσετε το Sugar Portal.',
        'dropDownEditorBtn' => 'αναδυόμενος συντάκτης<br />Χρησιμοποιήστε τον <b>Αναδυόμενο Συντάκτη</b> για να προσθέσετε και να επεξεργαστείτε σφαιρικά αναπτυσσόμενα μενού για αναπτυσσόμενα πεδία.',
        'appBtn' 	=> 'εφαρμογή<br />Η Εφαρμογή λειτουργίας είναι από όπου μπορείτε να προσαρμόσετε διάφορες ιδιότητες του προγράμματος, όπως πόσες TPS αναφορές εμφανίζονται στην αρχική σελίδα.',
        'backBtn'	=> 'επιστροφή<br />Επιστροφή στο προηγούμενο βήμα.',
        'studioHelp'=> 'στούντιο βοήθεια<br />Χρησιμοποιήστε το Στούντιο για να καθορίσει τι και πώς οι πληροφορίες εμφανίζονται στις ενότητες.',
        'studioBCHelp' => ' indicates the module is a backward compatible module',
        'moduleBtn'	=> 'ενότητα<br />Πατήστε για να επεξεργαστείτε αυτή την ενότητα.',
        'moduleHelp'=> 'ενότητα βοήθεια<br />Τα στοιχεία που μπορείτε να προσαρμόσετε για την ενότητα εμφανίζονται εδώ. <br /><br />Πατήστε σε ένα εικονίδιο για να επιλέξετε το στοιχείο να επεξεργαστείτε.',
        'fieldsBtn'	=> 'πεδία<br />Δημιουργήστε και προσαρμόστε <b>Πεδία</b> για να αποθηκεύσει πληροφορίες στην ενότητα.',
        'labelsBtn' => 'Επεξεργαστείτε τις <b>Ετικέτες</b> που εμφανίζονται για τα πεδία και τους άλλους τίτλους στην ενότητα.'	,
        'relationshipsBtn' => 'σχέση<br />Προσθήκη νέων ή δείτε τις υπάρχουσες <b>Σχέσεις</b> για την ενότητα.' ,
        'layoutsBtn'=> 'διατάξεις<br />Προσαρμόστε τις <b>Διατάξεις</b> ενότητας. Οι διατάξεις είναι οι διαφορετικές προβολές των ενοτήτων συμπεριλαμβανομένων των πεδίων. <br /><br />Μπορείτε να καθορίσετε ποια πεδία εμφανίζονται και πώς οργανώνονται σε κάθε διάταξη.',
        'subpanelBtn'=> 'υπο-ομάδα<br />Καθορίστε τα πεδία που εμφανίζονται στΙς <b>Υποομάδες</b> στη μονάδα.',
        'portalBtn' =>'portal<br />Προσαρμόστε την ενότητα <b>Διατάξεις</b> που εμφανίζονται στο <b>Sugar Portal</b>.',
        'layoutsHelp'=> 'διατάξεις<br />Η Ενότητα <b>Διατάξεις</b> που μπορούν να προσαρμοστούν εμφανίζονται εδώ. Οι διατάξεις εμφανίζουν πεδία και τα δεδομένα πεδίου. <br /><br />Πατήστε σε ένα εικονίδιο για να επιλέξετε τη διάταξη να επεξεργαστείτε.',
        'subpanelHelp'=> 'υποπίνακες<br />Οι <b>Υποπίνακες</b> στην ενότητα που μπορούν να προσαρμοστούν, εμφανίζονται εδώ. <br /><br />Πατήστε σε ένα εικονίδιο για να επιλέξετε την ενότητα για να επεξεργαστείτε.',
        'newPackage'=>'νέο πακέτο<br />Πατήστε στην επιλογή <b>Νέο Πακέτο</b> για να δημιουργήσετε ένα νέο πακέτο.',
        'exportBtn' => 'εξαγωγή<br />Πατήστε στην επιλογή "Εξαγωγή Προσαρμογών" για να δημιουργήσετε και να κατεβάσετε ένα πακέτο που περιέχει προσαρμογές που γίνονται στο Στούντιο για συγκεκριμένες ενότητες.',
        'mbHelp'    => 'ενότητα βοήθεια<br />Χρησιμοποιήστε την <b>Ενότητα Δόμησης</b> για τη δημιουργία πακέτων που περιέχουν προσαρμοσμένες ενότητες που βασίζονται σε τυποποιημένα ή κατά παραγγελία αντικείμενα.',
        'viewBtnEditView' => 'Προβολή Επεξεργασίας<br />Προσαρμογή της διάταξης <b>Προβολή Επεξεργασίας</b> της ενότητας. Η Προβολή Επεξεργασίας είναι η φόρμα που περιέχει τα πεδία εισαγωγής για τη σύλληψη του χειριστή-εισάγωγη δεδομένων.',
        'viewBtnDetailView' => 'Προβολή Πληροφορίας <br />Προσαρμογή της διάταξης <b>Προβολή Πληροφοριών</b> της ενότητας. <br /><br />Η Προβολή Πληροφοριών εμφανίζει τον χειριστή εισάγει τα δεδομένα πεδίου.',
        'viewBtnDashlet' => 'Πίνακας Στοιχείων<br />Προσαρμογή του Πίνακα Στοιχείων της ενότητας <b>Πίνακα Στοιχείων Sugar</b>, συμπεριλαμβανομένων τον Πίνακα Στοιχείων Sugar Προβολή Λίστας και Αναζήτησης. <br /><br />Ο Πίνακα Στοιχείων Sugar θα είναι διαθέσιμΟς για να προσθέσετε τις σελίδες στην ενότητα Αρχική σελίδα.',
        'viewBtnListView' => 'Προσαρμογή της διάταξης <b>Προβολή Λίστας</b> της ενότητας. Τα αποτελέσματα αναζήτησης εμφανίζονται στην Προβολή Λίστας.',
        'searchBtn' => 'αναζήτηση<br />Προσαρμογή διατάξεων στην ενότητα <b>Αναζήτηση.</b> <br /><br />Προσδιορίστε ποια πεδία μπορούν να χρησιμοποιηθούν για το φιλτράρισμα των αρχείων που εμφανίζονται στην Προβολή Λίστας.',
        'viewBtnQuickCreate' =>  'Γρήγορη Δημιουργία<br />Προσαρμογή της διάταξης <b>Γρήγορη Δημιουργία</b> της ενότητας. <br /><br />Η Γρήγορη Δημιουργία εμφανίζεται στην υπο-ομάδα και στην ενότητα Emails.',

        'searchHelp'=> 'αναζήτηση βοήθεια<br />Οι μορφές <b>Αναζήτησης</b> που μπορούν να προσαρμοστούν εμφανίζονται εδώ. <br /><br />Οι μορφές Αναζήτησης περιέχουν πεδία για το φιλτράρισμα εγγραφών. <br /><br />Πατήστε σε ένα εικονίδιο για να επιλέξετε τη διάταξη αναζήτησης να επεξεργαστείτε.',
        'dashletHelp' =>'Πίνακας Στοιχείων<br />Οι Διατάξεις  <b>Πίνακας Στοιχείων Sugar</b> που μπορούν να προσαρμοστούν εμφανίζονται εδώ. <br /><br />Ο Πίνακας Στοιχείων Sugar θα είναι διαθέσιμος για να προσθέσετε τις σελίδες στην ενότητα Αρχική σελίδα.',
        'DashletListViewBtn' =>'Λίστα Προβολής στον Πίνακα Στοιχείων Sugar<br />Η  <b>Λίστα Προβολής στον Πίνακα Στοιχείων Sugar </b> εμφανίζει εγγραφές βασισμένες στην αναζήτηση φίλτρων στον Πίνακα Στοιχείων Sugar .',
        'DashletSearchViewBtn' =>'Αναζήτηση Πίνακα Στοιχείων Sugar<br />Τα φίλτρα <b>Αναζήτηση Πίνακα Στοιχείων Sugar </b> για την Λίστα Προβολής στον Πίνακα Στοιχείων Sugar.',
        'popupHelp' =>'αναδυόμενες βοήθεια<br />Οι  <b>Αναδυόμενες</b> διατάξεις που μπορούν να προσαρμοστούν εμφανίζονται εδώ.',
        'PopupListViewBtn' => 'Αναδυόμενη Προβολή Λίστας<br />Η  <b>Αναδυόμενη Προβολή Λίστας</b> εμφανίζει εγγρφές βασισμένες στη Αναδυόμενη αναζήτηση προβολών.',
        'PopupSearchViewBtn' => 'Αναδυόμενη Αναζήτηση<br />Η  <b>Αναδυόμενη Αναζήτηση</b> προβολών εγγραφών για την Αναδυόμενη Λίστα Προβολής',
        'BasicSearchBtn' => 'Βασική Αναζήτηση<br />Προσαρμόστε τη <b>Βασική</b> μορφή <b>Αναζήτησης</b> που εμφανίζεται στην καρτέλα Βασική Αναζήτηση στην περιοχή αναζήτησης για την ενότητα.',
        'AdvancedSearchBtn' => 'Προηγμένη Αναζήτηση<br />Προσαρμόστε την φόρμα <b>Προηγμένη Αναζήτηση b> που εμφανίζεται στην καρτέλα Προηγμένη Αναζήτηση στην περιοχή Αναζήτησης για την ενότητα.',
        'portalHelp' => 'portal ΒΟΉΘΕΙΑ<br />Διαχειριστείτε και προσαρμόστε το <b>Sugar Portal </b>.',
        'SPUploadCSS' => 'SP Φόρτωση CSS <br />Ανεβάστε ένα <b>Ύφος Φύλλου</b> για το Sugar Portal.',
        'SPSync' => 'SP συγχρονισμός<br /> <b>Συγχρονίστε</b> προσαρμογές στην περίπτωση Sugar Portal.',
        'Layouts' => 'Διατάξεις<br />Προσαρμόστε τις  <b>Διατάξεις </b> στις ενότητες του Sugar Portal.',
        'portalLayoutHelp' => 'portal διατάξεις βοήθεια<br />Οι ενότητες στο πλαίσιο του Sugar Portal εμφανίζονται σε αυτό τον τομέα. <br /><br />Επιλέξτε μια ενότητα να επεξεργαστείτε τις  <b>Διατάξεις </b>.',
        'relationshipsHelp' => 'σχέσεις<br />Όλες οι  <b>Σχέσεις </b> που υπάρχουν μεταξύ των ενοτήτων και άλλες διατεθιμένες ενότητες εμφανίζονται εδώ. <br /><br />Το  <b>Όνομα της σχέσης </b> είναι το σύστημα που δημιουργεί όνομα για τη σχέση. <br /><br />Η  <b>Βασική ενότητα </b> είναι η ενότητα στην οποία ανήκουν οι σχέσεις. Για παράδειγμα, όλες οι ιδιότητες των σχέσεων για τις οποίες η ενότητα Λογαριασμοί είναι η βασική ενότητα, αποθηκεύονται στα δεδομένα Λογαριασμών. <br /><br />Ο  <b>Τύπος</b> είναι ο τύπος της σχέσης μεταξύ της πρωτοβάθμιας και της ενότητας Σχετική ενότητα. Πατήστε σε ένα τίτλο της στήλης για ταξινόμηση κατά τη στήλη. <br /><br />Πατήστε σε μια σειρά στη σχέση του πίνακα για να δείτε τις ιδιότητες που συνδέονται με τη σχέση. <br /><br />Πατήστε στο κουμπί  <b>Προσθήκη Σχέσης </b> να δημιουργήσετε μια νέα σχέση. <br /><br />Οι σχέσεις μπορούν να δημιουργηθούν μεταξύ οποιωνδήποτε δύο επεκταμένων ενοτήτων.',
        'relationshipHelp'=>'σχέσεις βοήθεια<br />Οι <b>Σχέσεις </b> μπορούν να δημιουργηθούν μεταξύ της ενότητας και άλλης αναπτυγμένης ενότητας. <br /><br />Οι σχέσεις εκφράζονται μέσα από υπο-ομάδες και αφορούν τα πεδία στις εγγρφαφές ενότητας. <br /><br />Επιλέξτε έναν από τους ακόλουθους Τύπους σχέσης για την ενότητα:<br /><br /> <b>Ένα-σε-Ένα </b> - Τα Αρχεία και των δύο ενοτήτων θα περιέχουν σχετικά πεδία.<br /><br />Ένα-σε-Πολλά - Η Βασική ενότητα εγγραφής θα περιέχει υπο-ομάδα, και η Σχετικές Ενότητες εγγραφής θα περιέχουν σχετικά πεδία. <br /><br /> <b>Πολλές-σε-Πολλές</b>- Οι εγγραφές και των δύο ενοτήτων θα εμφανίσουν υπο-ομάδες. <br /><br />Επιλέξτε <b>Σχετική ενότητα </b> για τη σχέση. <br /><br />Εάν ο τύπος σχέσης περιλαμβάνει υπο-ομάδες, επιλέξτε την προβολή υπο-ομάδας για τις κατάλληλες ενότητες. <br /><br />Πατήστε στο κουμπί Αποθήκευση για να δημιουργήσετε τη σχέση.',
        'convertLeadHelp' => "μετατροπή υποψήφιου πελάτη βοήθεια<br />Εδώ μπορείτε να προσθέσετε ενότητες στην οθόνη διάταξης και να τροποποιήσετε τις υφιστάμενες διατάξεις. <br />Μπορείτε να ξαναβάλετε τις ενότητες σύροντας τις γραμμές τους στον πίνακα. <br /><br /> <b>Ενότητα: </b> Το όνομα της ενότητας.<br /><br /> <b>Υποχρεωτική: </b> Υποχρεωτική ενότητα πρέπει να δημιουργηθεί ή να επιλεγεί πριν από την μετατροπή του υποψήφιου πελάτη.<br /><br /> <b>Αντιγραφή δεδομένων:  </b>Αν τσεκαριστεί, τα πεδία από τον αγωγό θα αντιγραφούν τα πεδία με το ίδιο όνομα με τα νεοϊδρυθέντα αρχεία. <br /><br /> <b>Επιτρέψτε Επιλογή:</b> Ενότητες με σχετικά πεδία στις Επαφές μπορούν να επιλαγούν αντί δημιουργούνται κατά τη διαδικασία μετατροπής του υποψήφιου πελάτη. <br /><br /> <b>Επεξεργασία:</b>Τροποποιήστε τη διάταξη για να μετατρέψει αυτή την ενότητα. <br /><br /> <b>Διαγραφή:</b>Αφαιρέστε αυτή την ενότητα από τη διάταξη μετατρωπών.",
        'editDropDownBtn' => 'Επεξεργασία ενός Σφαιρικού Αναδυόμενου',
        'addDropDownBtn' => 'Προσθήκη ενός νέου σφαιρικού Αναδυόμενου',
    ),
    'fieldsHelp'=>array(
        'default'=>'προεπιλογή<br />Τα πεδία της ενότητας παρατίθενται εδώ με Όνομα Πεδίου. <br /><br />Η Πρότυπη ενότητα περιλαμβάνει ένα προκαθορισμένο σύνολο πεδίων. Για να δημιουργήσετε ένα νέο Πεδίο, πατήστε στο κουμπί <b>"Προσθήκη Πεδίων".</b> <br /><br />Για να επεξεργαστείτε ένα πεδίο, πατήστε στο <b>Όνομα του Πεδίου.</b> <br /><br />Αφού η ενότητα αναπτυχθεί, τα νέα πεδία που δημιουργήθηκαν στην "Ενότητα Δόμησης", μαζί με τα πρότυπα πεδία, θεωρούνται ως πρότυπα πεδία στο Στούντιο.',
    ),
    'relationshipsHelp'=>array(
        'default'=>'The <b>Relationships</b> that have been created between the module and other modules appear here.<br><br>The relationship <b>Name</b> is the system-generated name for the relationship.<br><br>The <b>Primary Module</b> is the module that owns the relationships. The relationship properties are stored in the database tables belonging to the primary module.<br><br>The <b>Type</b> is the type of relationship exists between the Primary module and the <b>Related Module</b>.<br><br>Click a column title to sort by the column.<br><br>Click a row in the relationship table to view and edit the properties associated with the relationship.<br><br>Click <b>Add Relationship</b> to create a new relationship.',
        'addrelbtn'=>'το ποντίκι πέρα βοηθά για να προσθέσει τη σχέση..',
        'addRelationship'=>'<b>Relationships</b> can be created between the module and another custom module or a deployed module.<br><br> Relationships are visually expressed through subpanels and relate fields in the module records.<br><br>Select one of the following relationship <b>Types</b> for the module:<br><br> <b>One-to-One</b> - Both modules&#39; records will contain relate fields.<br><br> <b>One-to-Many</b> - The Primary Module&#39;s record will contain a subpanel, and the Related Module&#39;s record will contain a relate field.<br><br> <b>Many-to-Many</b> - Both modules&#39; records will display subpanels.<br><br> Select the <b>Related Module</b> for the relationship. <br><br>If the relationship type involves subpanels, select the subpanel view for the appropriate modules.<br><br> Click <b>Save</b> to create the relationship.',
    ),
    'labelsHelp'=>array(
        'default'=> 'προεπιλογή<br />Οι<b> Ετικέτες</b> για τα πεδία και τους άλλους τίτλους της ενότητας μπορεί να αλλάξουν. <br /><br />Επεξεργαστείτε την ετικέτα, πατώντας στο πεδίο, εισέρχεται σε μια νέα ετικέτα και πατήστε στο κουμπί <b>Αποθήκευση.</b><br /><br />Εάν οποιαδήποτε πακέτα γλωσσών είναι εγκατεστημένα στην εφαρμογή, μπορείτε να επιλέξετε τη <b>Γλώσσα</b> που θα χρησιμοποιηθεί για τις ετικέτες.',
        'saveBtn'=>'αποθήκευση<br />Πατήστε στο κουμπί <b>Αποθήκευση</b> να αποθηκεύσετε όλες τις αλλαγές.',
        'publishBtn'=>'δημοσίευση<br />Πατήστε στο κουμπί <b>Αποθήκευση & Ανάπτυξη</b> για να αποθηκεύσετε όλες τις αλλαγές και να τις καταστήσετε ενεργοές.',
    ),
    'portalSync'=>array(
        'default' => 'Enter the <b>Sugar Portal URL</b> of the portal instance to update, and click <b>Go</b>.<br><br>Then enter a valid Sugar user name and password, and then click <b>Begin Sync</b>.<br><br>The customizations made to the Sugar Portal <b>Layouts</b>, along with the <b>Style Sheet</b> if one was uploaded, will be transferred to specified the portal instance.',
    ),
    'portalConfig'=>array(
           'default' => '',
       ),
    'portalStyle'=>array(
        'default' => 'You can customize the look of the Sugar Portal by using a style sheet.<br><br>Select a <b>Style Sheet</b> to upload.<br><br>The style sheet will be implemented in the Sugar Portal the next time a sync is performed.',
    ),
),

'assistantHelp'=>array(
    'package'=>array(
            //custom begin
            'nopackages'=>'To get started on a project, click <b>New Package</b> to create a new package to house your custom module(s). <br/><br/>Each package can contain one or more modules.<br/><br/>For instance, you might want to create a package containing one custom module that is related to the standard Accounts module. Or, you might want to create a package containing several new modules that work together as a project and that are related to each other and to other modules already in the application.',
            'somepackages'=>'A <b>package</b> acts as a container for custom modules, all of which are part of one project. The package can contain one or more custom <b>modules</b> that can be related to each other or to other modules in the application.<br/><br/>After creating a package for your project, you can create modules for the package right away, or you can return to the Module Builder at a later time to complete the project.<br><br>When the project is complete, you can <b>Deploy</b> the package to install the custom modules within the application.',
            'afterSave'=>'Your new package should contain at least one module. You can create one or more custom modules for the package.<br/><br/>Click <b>New Module</b> to create a custom module for this package.<br/><br/> After creating at least one module, you can publish or deploy the package to make it available for your instance and/or other users&#39; instances.<br/><br/> To deploy the package in one step within your Sugar instance, click <b>Deploy</b>.<br><br>Click <b>Publish</b> to save the package as a .zip file. After the .zip file is saved to your system, use the <b>Module Loader</b> to upload and install the package within your Sugar instance.  <br/><br/>You can distribute the file to other users to upload and install within their own Sugar instances.',
            'create'=>'A <b>package</b> acts as a container for custom modules, all of which are part of one project. The package can contain one or more custom <b>modules</b> that can be related to each other or to other modules in the application.<br/><br/>After creating a package for your project, you can create modules for the package right away, or you can return to the Module Builder at a later time to complete the project.',
            ),
    'main'=>array(
        'welcome'=>'καλώς ήλθατε. <br />Χρησιμιποιήστε τα <b>Εργαλεία Προγραμματιστή</b> για να δημιουργήσετε και να διαχειριστείτε τα πρότυπα και τις προσαρμοσμένες ενότητες και πεδία. <br /><br />Για να διαχειριστείτε τις ενότητες κατά την εφαρμογή, πατήστε στο κουμπί <b>Στούντιο.</b> <br /><br />Για να δημιουργήσετε προσαρμοσμένες ενότητες, πατήστε στο κουμπί <b>"Ενότητα Δόμησης".</b>',
        'studioWelcome'=>'καλώς ήλθατε στο στούντιο.<br />Όλες τα τρέχοντες εγκατεστημένες ενότητες, συμπεριλαμβανομένων των προτύπων και η ενότητα-φορτωμένων αντικειμένων, μπορούν να προσαρμοστούν στο στούντιο.'
    ),
    'module'=>array(
        'somemodules'=>"Since the current package contains at least one module, you can <b>Deploy</b> the modules in the package within your Sugar instance or <b>Publish</b> the package to be installed in the current Sugar instance or another instance using the <b>Module Loader</b>.<br/><br/>To install the package directly within your Sugar instance, click <b>Deploy</b>.<br><br>To create a .zip file for the package that can be loaded and installed within the current Sugar instance and other instances using the <b>Module Loader</b>, click <b>Publish</b>.<br/><br/> You can build the modules for this package in stages, and publish or deploy when you are ready to do so. <br/><br/>After publishing or deploying a package, you can make changes to the package properties and customize the modules further.  Then re-publish or re-deploy the package to apply the changes." ,
        'editView'=> 'προβολή επεξεργασία<br />Εδώ μπορείτε να επεξεργαστείτε τα υπάρχοντα πεδία. Μπορείτε να αφαιρέσετε οποιοδήποτε από τα υπάρχοντα πεδία ή να προσθέσετε τα διαθέσιμα πεδία στον αριστερό πίνακα.',
        'create'=>'When choosing the type of <b>Type</b> of module that you wish to create, keep in mind the types of fields you would like to have within the module. <br/><br/>Each module template contains a set of fields pertaining to the type of module described by the title.<br/><br/><b>Basic</b> - Provides basic fields that appear in standard modules, such as the Name, Assigned to, Team, Date Created and Description fields.<br/><br/> <b>Company</b> - Provides organization-specific fields, such as Company Name, Industry and Billing Address.  Use this template to create modules that are similar to the standard Accounts module.<br/><br/> <b>Person</b> - Provides individual-specific fields, such as Salutation, Title, Name, Address and Phone Number.  Use this template to create modules that are similar to the standard Contacts and Leads modules.<br/><br/><b>Issue</b> - Provides case- and bug-specific fields, such as Number, Status, Priority and Description.  Use this template to create modules that are similar to the standard Cases and Bug Tracker modules.<br/><br/>Note: After you create the module, you can edit the labels of the fields provided by the template, as well as create custom fields to add to the module layouts.',
        'afterSave'=>'Customize the module to suit your needs by editing and creating fields, establishing relationships with other modules and arranging the fields within the layouts.<br/><br/>To view the template fields and manage custom fields within the module, click <b>View Fields</b>.<br/><br/>To create and manage relationships between the module and other modules, whether modules already in the application or other custom modules within the same package, click <b>View Relationships</b>.<br/><br/>To edit the module layouts, click <b>View Layouts</b>. You can change the Detail View, Edit View and List View layouts for the module just as you would for modules already in the application within Studio.<br/><br/> To create a module with the same properties as the current module, click <b>Duplicate</b>.  You can further customize the new module.',
        'viewfields'=>'The fields in the module can be customized to suit your needs.<br/><br/>You can not delete standard fields, but you can remove them from the appropriate layouts within the Layouts pages. <br/><br/>You can quickly create new fields that have similar properties to existing fields by clicking <b>Clone</b> in the <b>Properties</b> form.  Enter any new properties, and then click <b>Save</b>.<br/><br/>It is recommended that you set all of the properties for the standard fields and custom fields before you publish and install the package containing the custom module.',
        'viewrelationships'=>'You can create many-to-many relationships between the current module and other modules in the package, and/or between the current module and modules already installed in the application.<br><br> To create one-to-many and one-to-one relationships, create <b>Relate</b> and <b>Flex Relate</b> fields for the modules.',
        'viewlayouts'=>'You can control what fields are available for capturing data within the <b>Edit View</b>.  You can also control what data displays within the <b>Detail View</b>.  The views do not have to match. <br/><br/>The Quick Create form is displayed when the <b>Create</b> is clicked in a module subpanel. By default, the <b>Quick Create</b> form layout is the same as the default <b>Edit View</b> layout. You can customize the Quick Create form so that it contains less and/or different fields than the Edit View layout. <br><br>You can determine the module security using Layout customization along with <b>Role Management</b>.<br><br>',
        'existingModule' =>'After creating and customizing this module, you can create additional modules or return to the package to <b>Publish</b> or <b>Deploy</b> the package.<br><br>To create additional modules, click <b>Duplicate</b> to create a module with the same properties as the current module, or navigate back to the package, and click <b>New Module</b>.<br><br> If you are ready to <b>Publish</b> or <b>Deploy</b> the package containing this module, navigate back to the package to perform these functions. You can publish and deploy packages containing at least one module.',
        'labels'=> 'ετικέτες<br />Οι ετικέτες των τυποποιημένων πεδίων καθώς και τα προσαρμοσμένα πεδία μπορούν να αλλάξουν. Η Αλλαγή στο πεδίο ετικετών δεν θα επηρεάσει τα δεδομένα που είναι αποθηκευμένα στα πεδία.',
    ),
    'listViewEditor'=>array(
        'modify'	=> 'τροποποίηση<br />Υπάρχουν τρεις στήλες που εμφανίζονται στα αριστερά. Η στήλη "Προεπιλογή" που περιέχει τα πεδία που θα εμφανίζονται στην λίστα προεπιλογής, στη στήλη "Διαθέσιμη" που περιέχει πεδία που ένας χειριστής μπορεί να επιλέξει να χρησιμοποιήσει για τη δημιουργία μιας προσαρμοσμένης προβολής λίστας, και η "Κρυφή" στήλη περιέχει πεδία που είναι διαθέσιμα για σας ως διαχειριστή, είτε να προσθέσετε τις προεπιλεγμένες στήλες ή διαθέσιμες για χρήση από τους χειριστές, αλλά είναι αυτήν την περίοδο εκτός λειτουργίας.',
        'savebtn'	=> 'αποθήκευση<br />Πατώντας Αποθήκευση θα αποθηκεύσετε όλες τις αλλαγές και θα τις καταστήσετε ενεργές.',
        'Hidden' 	=> 'Κρυφά<br />Τα Κρυφά πεδία είναι τα πεδία που δεν είναι διαθέσιμα στους χειριστές για χρήση σε προβολές λίστας.',
        'Available' => 'Διαθέσιμα<br />Διαθέσιμα πεδία είναι τα πεδία που δεν εμφανίζονται από προεπιλογή, αλλά μπορούν να ενεργοποιηθούν από τους χειριστές.',
        'Default'	=> 'Προεπιλογή<br />Τα πεδία Προεπιλογή εμφανίζονται στους χειριστές που δεν έχουν δημιουργήσει τις προσαρμοσμένες ρυθμίσεις προβολής λίστας.'
    ),

    'searchViewEditor'=>array(
        'modify'	=> 'τροποποίηση<br />Υπάρχουν δύο στήλες που εμφανίζονται στα αριστερά. Η στήλη "Προεπιλογή" που περιέχει τα πεδία που θα εμφανίζονται στην προβολή αναζήτησης, και η "Κρυφή" στήλη που περιέχει πεδία που είναι διαθέσιμα για εσάς ως διαχειριστής για να προσθέσετε στην προβολή.',
        'savebtn'	=> 'αποθήκευση<br />Πατώντας στο κουμπί <b>Αποθήκευση & Ανάπτυξη</b> θα αποθηκεύσετε όλες τις αλλαγές και θα τις καταστήσετε ενεργές.',
        'Hidden' 	=> 'Κρυφά<br />Τα Κρυφά πεδία είναι πεδία που δεν θα εμφανίζεται στην προβολή αναζήτησης.',
        'Default'	=> 'Προεπιλογή<br />Η Προεπιλογή πεδίων θα εμφανίζεται στην προβολή αναζήτησης'
    ),
    'layoutEditor'=>array(
        'default'	=> 'Προεπιλογή<br />Υπάρχουν δύο στήλες που εμφανίζονται στα αριστερά. Η δεξιά στήλη, με την ένδειξη Τρέχουσα Διάταξη ή Προηγούμενη Διάταξη, είναι όπου μπορείτε να αλλάξετε τη διάταξη της ενότητας. Η αριστερή στήλη, με τίτλο Εργαλειοθήκη, περιέχει χρήσιμα στοιχεία και εργαλεία για χρήση κατά την επεξεργασία της διάταξης. <br /><br />Αν η περιοχή διάταξης είναι με τίτλο Τρέχουσα Διάταξη τότε εργάζεστε σε ένα αντίγραφο της διάταξης που χρησιμοποιείται από την ενότητα για την προβολή. <br /><br />Αν η περιοχή διάταξης είναι με τίτλο Προεπισκόπηση Διάταξης τότε εργάζεστε σε ένα αντίγραφο που δημιουργήσατε νωρίτερα πριν πατήσετε το κουμπί Αποθήκευση, που μπορεί να έχει ήδη αλλάξει από την έκδοση που βλέπει από τους χειριστές αυτής της ενότητας.',
        'saveBtn'	=> 'αποθήκευση<br />Πατώντας αυτό το κουμπί σώζει την διάταξη έτσι ώστε μπορείτε να συντηρήσετε τις αλλαγές σας. Όταν επιστρέψετε σε αυτήν την ενότητα θα αρχίσετε από αυτήν την αλλαγμένη διάταξη. Η  διάταξη σας εντούτοις δεν θα διαπιστωθεί από τους χειριστές της ενότητας έως ότου πατήσετε εκτός Αποθήκευση και Δημοσιεύετε το κουμπί.',
        'publishBtn'=> 'δημοσίευση<br />Πατήστε αυτό το κουμπί για να επεκτείνετε την διάταξη. Αυτό σημαίνει ότι αυτή η διάταξη αμέσως θα διαπιστωθεί από τους χειριστές αυτής της ενότητας',
        'toolbox'	=> 'εργαλειοθήκη<br />Η εργαλειοθήκη περιλαμβάνει μια ποικιλία από χρήσιμες λειτουργίες για την επεξεργασία διατάξεων, συμπεριλαμβανομένου ενός χώρου σκουπιδιών, μια σειρά από πρόσθετα στοιχεία και μια σειρά από τα διαθέσιμα πεδία. Οποιοιδήποτε από αυτούς μπορούν να συρθούν και να πέσουν επάνω στην διάταξη.',
        'panels'	=> 'ταμπλό<br />Αυτή η περιοχή  επιδεικνύει πώς η διάταξη σας θα κοιτάξει στους χειριστές αυτής της ενότητας όταν αναπτυχθεί. <br /><br />Μπορείτε να επανατοποθετήσετε τα στοιχεία όπως τα πεδία, οι σειρές και οι επιτροπές με το σύρσιμο και τη ρίψη τους;  διαγράψτε τα στοιχεία με το σύρσιμο και τη ρίψη τους στην περιοχή απορριμμάτων στην εργαλειοθήκη, ή προσθέστε τα νέα στοιχεία με το σύρσιμο τους από την εργαλειοθήκη και τη ρίψη τους προς την διάταξη στην επιθυμητή θέση.'
    ),
    'dropdownEditor'=>array(
        'default'	=> 'Προεπιλογή<br />Υπάρχουν δύο στήλες που εμφανίζονται στα αριστερά. Η δεξιά στήλη, με την ένδειξη Τρέχουσα Διάταξη ή Προηγούμενη Διάταξη, είναι όπου μπορείτε να αλλάξετε τη διάταξη της ενότητας. Η αριστερή στήλη, με τίτλο Εργαλειοθήκη, περιέχει χρήσιμα στοιχεία και εργαλεία για χρήση κατά την επεξεργασία της διάταξης. <br /><br />Αν η περιοχή διάταξης είναι με τίτλο Τρέχουσα Διάταξη τότε εργάζεστε σε ένα αντίγραφο της διάταξης που χρησιμοποιείται από την ενότητα για την προβολή. <br /><br />Αν η περιοχή διάταξης είναι με τίτλο Προεπισκόπηση Διάταξης τότε εργάζεστε σε ένα αντίγραφο που δημιουργήσατε νωρίτερα πριν πατήσετε το κουμπί Αποθήκευση, που μπορεί να έχει ήδη αλλάξει από την έκδοση που βλέπει από τους χειριστές αυτής της ενότητας.',
        'dropdownaddbtn'=> 'φόρτωση αναπτυσσόμενη<br />Πατώντας σε αυτό το κουμπί προσθέτετε ένα νέο είδος στην αναπτυσσόμενη λίστα.',

    ),
    'exportcustom'=>array(
        'exportHelp'=>'εξαγωγή βοήθεια<br />Οι προσαρμογές που γίνονται στο Στούντιο μέσα σε αυτήν την περίπτωση μπορούν να συσκευαστούν και να επεκταθούν σε μια άλλη περίπτωση. Παρέχετε ένα Όνομα Πακέτου. <br /><br />Μπορείτε να παρέχετε στον <b>Συντάκτη</b> και τις Πληροφορίες <b>Περιγραφής</b> για το πεκέτο. <br /><br />Επιλέξτε την ενότητα που περιέχει τις προσαρμογές για να εξαγάγει. (Μόνο οι ενότητες που περιέχουν τις προσαρμογές θα εμφανιστούν για εσάς που επιλέγετε.). <br /><br />Χτυπήστε την εξαγωγή για να δημιουργήσετε ένα zip αρχείο για το πακέτο που περιέχει τις προσαρμογές. Το zip αρχείο μπορεί να φορτωθεί σε μια άλλη περίπτωση μέσω του <b>Φορτωτή Ενότητας.</b>',
        'exportCustomBtn'=>'Εξαγωγή προεπιλογή<br />Πατήστε το κουμπί Εξαγωγή για να δημιουργήσετε ένα αρχείο Zip για το πακέτο που περιέχει τις προσαρμογές που θέλετε να εξαγάγετε.',
        'name'=>'όνομα<br />Το<b> Όνομα</b> του πακέτου θα πρέπει να εμφανίζεται στην Ενότητα Φορτωτή μετά το πακέτο αποστέλλεται για την εγκατάσταση στο Στούντιο.',
        'author'=>'συγγραφέας<br />Ο <b>Συγγραφέας</b> είναι το όνομα της οντότητας που δημιούργησε το πακέτο. <br /><br />Ο Συγγραφέας μπορεί να είναι είτε ένα άτομο ή μία εταιρεία. Ο Συγγραφέας θα εμφανιστεί στην Ενότητα Φορτωτή μετά το πακέτο αποστέλλεται για την εγκατάσταση στο Στούντιο.',
        'description'=>'περιγραφή<br />Η <b>Περιγραφή</b> του πακέτου θα πρέπει να εμφανίζεται στην Ενότητα Φορτωτή μετά το πακέτο αποστέλλεται για την εγκατάσταση στο Στούντιο.',
    ),
    'studioWizard'=>array(
        'mainHelp' 	=> 'βασική βοήθεια<br />Καλώς ήρθατε στην περιοχή <b>Εργαλεία Προγραμματιστή. </b><br /><br />Χρησιμοποιήστε τα εργαλεία σε αυτήν την περιοχή για να δημιουργήσετε και να διαχειριστείτε πρότυπες και προσαρμοσμένες ενότητες και πεδία.',
        'studioBtn'	=> 'στούντιο<br /><b>Χρησιμοποιήστε το Στούντιο για να προσαρμόσετε τις εγκατεστημένες μονάδες με την αλλαγή της διευθέτησης πεδίου, επιλέγοντας ποια πεδία είναι διαθέσιμα και δημιουργήστε προσαρμοσμένα πεδία δεδομένων.</b>',
        'mbBtn'		=> 'ενότητα δόμησης<br />Χρησιμοποιήστε την <b>Ενότητα Δόμησης</b> για τη δημιουργία νέων ενοτήτων.',
        'appBtn' 	=> 'εφαρμογή<br /><b>Χρησιμοποιήστε τη λειτουργία Εφαρμογή για να προσαρμόσετε διάφορες ιδιότητες του προγράμματος, όπως πόσες TPS αναφορές εμφανίζονται στην αρχική σελίδα.</b>',
        'backBtn'	=> 'επιστροφή<br />Επιστροφή στο προηγούμενο βήμα.',
        'studioHelp'=> 'Βοήθεια στούντιο <br /><b>Χρησιμοποιήστε το Στούντιο για να προσαρμόσετε τις εγκατεστημένες ενότητες.</b>',
        'moduleBtn'	=> 'ενότητα<br />Πατήστε για να επεξεργαστείτε αυτή την ενότητα.',
        'moduleHelp'=> 'Βοήθεια ενότητα<br /><b>Επιλέξτε το στοιχείο ενότητας που θα θέλατε να επεξεργαστείτε</b>',
        'fieldsBtn'	=> 'πεδία<br /><b>Επεξεργαστείτε τις πληροφορίες που αποθηκεύονται στην ενότητα κατά τον έλεγχο των Πεδίων στην ενότητα. <br /><br />Μπορείτε να επεξεργαστείτε και να δημιουργήσετε προσαρμοσμένα πεδία εδώ.</b>',
        'layoutsBtn'=> 'διατάξεις<br /><b>Προσαρμόστε τις Διατάξεις από Επεξεργασία, Λεπτομέρεια, Λίστα και αναζήτηση προβολών..</b>',
        'subpanelBtn'=> 'υπο-ομάδα<br />Επεξεργασία ποιες πληροφορίες εμφανίζονται σε αυτές τις ενότητες υπο-ομάδων.',
        'layoutsHelp'=> 'Βοήθεια διατάξεων<br /></b>Για να αλλάξετε τη διάταξη που περιέχει πεδία δεδομένων για την καταχώριση δεδομένων, πατήστε στο κουμπί Προβολή Επεξεργασίας. <br /><br />Για να αλλάξετε τη διάταξη που εμφανίζει τα δεδομένα που έχουν εισαχθεί στα πεδία στην Προβολή Επεξεργασίας, πατήστε στην επιλογή Προβολή Λεπτομέρειας. <br /><br />Για να αλλάξετε τις στήλες που εμφανίζονται στην προεπιλεγμένη λίστα, πατήστε  στην επιλογή Προβολή Λίστας. <br /><br />Για να αλλάξετε την Βασική και Προχωρημένη αναζήτηση φόρμας διάταξης, πατήστε στο κουμπί Αναζήτηση.</b>',
        'subpanelHelp'=> 'Βοήθεια υπο-ομάδας<br />Επιλέξτε μία <b>Υποομάδα να επεξεργαστείτε.</b>',
        'searchHelp' => 'Επιλέξτε μια <b>Αναζήτηση</b> διάταξης να επεξεργαστείτε.',
        'labelsBtn'	=> 'Τροποποιήστε το <b>Ετικέτες</b> για να εμφανίζει τις τιμές σε αυτή την ενότητα.',
        'newPackage'=>'νέο πακέτο<br />Πατήστε στην επιλογή <b>Νέο Πακέτο</b> για να δημιουργήσετε ένα νέο πακέτο.',
        'mbHelp'    => '<b>Καλώς Ήλθατε στην Ενότητα Δόμησης.</b><br/><br/>Χρησιμοποιήστε την <b>Ενότητα Δόμησης</b> για τη δημιουργία πακέτων που περιέχουν προσαρμοσμένες ενότητες που βασίζονται σε τυποποιημένα ή προσαρμοσμένα αντικείμενα.<br/><br/>Για να ξεκινήσετε, πατήστεο το κουμπί<b>Νέο Πακέτο</b> για την δημιουργία νέου πακέτου, ή επιλέξτε ένα πακέτο για να επεξεργαστείτε.<br/><br/> Ένα <b>πακέτο</b> λειτουργεί ως δοχείο για προσαρμοσμένες ενότητες, το οποίο αποτελεί μέρος ενός έργου. Το πακέτο μπορεί να περιέχει μία ή περισσότερες προσαρμοσμένες ενότητες που μπορούν να σχετίζονται ματαξύ τους ή σε ενότητες στην εφαρμογή. <br/><br/>Παραδείγματα: Μπορεί να θέλετε να δημιουργήσετε ένα πακέτο που να περιέχει μία προσαρμοσμένη ενότητα η οποία σχετίζεται με τον τυποποιημένο Λογαριασμό ενότητας. Ή, μπορεί να θέλετε να δημιουργήσετε ένα πακέτο που να περιέχει πολλές νέες ενότητες που να λειτουργούν μαζί ως ένα έργο και που να σχετίζονται μεταξύ τους και με τις ενότητες στην εφαρμογή.',
        'exportBtn' => 'εξαγωγή<br />Πατήστε στην επιλογή<b>Εξαγωγή Προσαρμογών</b> για να δημιουργήσετε ένα πακέτο που περιέχει προσαρμογές που γίνονται στο Στούντιο για συγκεκριμένες ενότητες.',
    ),

),
//HOME
'LBL_HOME_EDIT_DROPDOWNS'=>'Αναδυόμενος Συντάκτης',

//ASSISTANT
'LBL_AS_SHOW' => 'Εμφάνιση Βοηθού στο μέλλον.',
'LBL_AS_IGNORE' => 'Αγνόηση Βοηθού στο μέλλον.',
'LBL_AS_SAYS' => 'Βοηθός Λέει:',

//STUDIO2
'LBL_MODULEBUILDER'=>'Ενότητα Δόμησης',
'LBL_STUDIO' => 'Στούντιο',
'LBL_DROPDOWNEDITOR' => 'Αναδυόμενος Συντάκτης',
'LBL_EDIT_DROPDOWN'=>'Επεξεργασία Αναδυόμενου',
'LBL_DEVELOPER_TOOLS' => 'Εργαλεία Προγραμματιστή',
'LBL_SUGARPORTAL' => 'Συντάκτης Sugar Portal',
'LBL_SYNCPORTAL' => 'Συγχρονισμός Portal',
'LBL_PACKAGE_LIST' => 'Λίστα Πακέτων',
'LBL_HOME' => 'Αρχή',
'LBL_NONE'=>'Κανένα',
'LBL_DEPLOYE_COMPLETE'=>'Ολοκλήρωση Ανάπτυξης',
'LBL_DEPLOY_FAILED'   =>'Παρουσιάστηκε σφάλμα κατά τη διάρκεια της διαδικασίας ανάπτυξης, το πακέτο σας μπορεί να μην έχει εγκατασταθεί σωστά',
'LBL_ADD_FIELDS'=>'Προσθήκη Προσαρμοσμένων Πεδίων',
'LBL_AVAILABLE_SUBPANELS'=>'Διαθέσιμοι Υποπίνακες',
'LBL_ADVANCED'=>'Σύνθετη',
'LBL_ADVANCED_SEARCH'=>'Σύνθετη Αναζήτηση',
'LBL_BASIC'=>'Βασική',
'LBL_BASIC_SEARCH'=>'Βασική Αναζήτηση',
'LBL_CURRENT_LAYOUT'=>'Διάταξη',
'LBL_CURRENCY' => 'Νόμισμα',
'LBL_CUSTOM' => 'Προσαρμοσμένη',
'LBL_DASHLET'=>'Πίνακας Στοιχείων Sugar',
'LBL_DASHLETLISTVIEW'=>'Προβολή Λίστας Πίνακα Στοιχείων Sugar',
'LBL_DASHLETSEARCH'=>'Αναζήτηση Πίνακα Στοιχείων Sugar',
'LBL_POPUP'=>'Προβολή Αναδυόμενης',
'LBL_POPUPLIST'=>'Προβολή Αναδυόμενης Λίστας',
'LBL_POPUPLISTVIEW'=>'Προβολή Αναδυόμενης Λίστας',
'LBL_POPUPSEARCH'=>'Αναζήτηση Αναδυόμενου',
'LBL_DASHLETSEARCHVIEW'=>'Αναζήτηση Πίνακα Στοιχείων Sugar',
'LBL_DISPLAY_HTML'=>'Εμφάνιση HTML Κώδικα',
'LBL_DETAILVIEW'=>'Προβολή Λεπτομερειών',
'LBL_DROP_HERE' => '[Πτώση Εδώ]',
'LBL_EDIT'=>'Επεξεργασία',
'LBL_EDIT_LAYOUT'=>'Επεξεργασία Διάταξης',
'LBL_EDIT_ROWS'=>'Επεξεργασία Γραμμών',
'LBL_EDIT_COLUMNS'=>'Επεξεργασία Στηλών',
'LBL_EDIT_LABELS'=>'Επεξεργασία Ετικετών',
'LBL_EDIT_PORTAL'=>'Επεξεργασία Portal για',
'LBL_EDIT_FIELDS'=>'Επεξεργασία Πεδίων',
'LBL_EDITVIEW'=>'Προβολή Επεξεργασίας',
'LBL_FILTER_SEARCH' => "Αναζήτηση",
'LBL_FILLER'=>'(φίλτρο)',
'LBL_FIELDS'=>'Πεδία',
'LBL_FAILED_TO_SAVE' => 'Αποτυχία Αποθήκευσης',
'LBL_FAILED_PUBLISHED' => 'Αποτυχία Δημοσίευσης',
'LBL_HOMEPAGE_PREFIX' => 'Δική Μου',
'LBL_LAYOUT_PREVIEW'=>'Προηγούμενη Διάταξη',
'LBL_LAYOUTS'=>'Διατάξεις',
'LBL_LISTVIEW'=>'Προβολή Λίστας',
'LBL_RECORDVIEW'=>'Προβολή εγγραφής',
'LBL_RECORDDASHLETVIEW'=>'Εμφάνιση πίνακα στοιχείων εγγραφής',
'LBL_PREVIEWVIEW'=>'Preview View',
'LBL_MODULE_TITLE' => 'Στούντιο',
'LBL_NEW_PACKAGE' => 'Νέο Πακέτο',
'LBL_NEW_PANEL'=>'Νέος Πίνακας',
'LBL_NEW_ROW'=>'Νέα Γραμμή',
'LBL_PACKAGE_DELETED'=>'Πακέτο Διαγράφηκε',
'LBL_PUBLISHING' => 'Δημοσίευση...',
'LBL_PUBLISHED' => 'Δημοσιεύτηκε',
'LBL_SELECT_FILE'=> 'Επιλογή Αρχείου',
'LBL_SAVE_LAYOUT'=> 'Αποθήκευση Διάταξης',
'LBL_SELECT_A_SUBPANEL' => 'Επιλογή ενός Υποπίνακα',
'LBL_SELECT_SUBPANEL' => 'Επιλογή Υποπίνακα',
'LBL_SUBPANELS' => 'Υποπίνακες',
'LBL_SUBPANEL' => 'Υποπίνακας',
'LBL_SUBPANEL_TITLE' => 'Τίτλος:',
'LBL_SEARCH_FORMS' => 'Αναζήτηση',
'LBL_STAGING_AREA' => 'Οργάνωση Περιοχής (μεταφορά και πτώση αντικειμένων εδώ)',
'LBL_SUGAR_FIELDS_STAGE' => 'Πεδία Sugar (πατήστε στα είδη για να προστεθούν στην περιοχή οργάνωσης)',
'LBL_SUGAR_BIN_STAGE' => 'Καλάθι Απορριμάτων Sugar (πατήστε το κουμπί είδη για να τα προσθέσει στην περιοχή οργάνωσης)',
'LBL_TOOLBOX' => 'Εργαλεία',
'LBL_VIEW_SUGAR_FIELDS' => 'Προβολή Πεδίων Sugar',
'LBL_VIEW_SUGAR_BIN' => 'Προβολή Καλαθιού Απορριμάτων Sugar',
'LBL_QUICKCREATE' => 'Γρήγορη Δημιουργία',
'LBL_EDIT_DROPDOWNS' => 'Επεξεργασία μίας Σφαιρικής Αναδυόμενης',
'LBL_ADD_DROPDOWN' => 'Προσθήκη νέας Σφαιρικής Αναδυόμενης',
'LBL_BLANK' => '-κενό-',
'LBL_TAB_ORDER' => 'Παραγγελία Καρτέλας',
'LBL_TAB_PANELS' => 'Εμφάνιση πινάκων ως καρτέλες',
'LBL_TAB_PANELS_HELP' => 'Όταν οι καρτέλες είναι ενεργοποιημένες, χρησιμοποιήστε το αναδυόμενο κουτί "τύπος"<br />για κάθε ενότητα για να προσδιορίσετε τον τρόπο με τον οποίο θα εμφανιστεί (καρτέλα ή ταμπλό)',
'LBL_TABDEF_TYPE' => 'Τύπος Εμφάνισης:',
'LBL_TABDEF_TYPE_HELP' => 'Επιλέξτε τον τρόπο που αυτό το τμήμα θα πρέπει να εμφανίζεται. Η επιλογή αυτή έχει επίδραση μόνο αν έχετε ενεργοποιήσει καρτέλες για αυτή την προβολή.',
'LBL_TABDEF_TYPE_OPTION_TAB' => 'Καρτέλα',
'LBL_TABDEF_TYPE_OPTION_PANEL' => 'Πίνακας',
'LBL_TABDEF_TYPE_OPTION_HELP' => 'Επιλέξτε Πίνακα, για να έχετε αυτό τον πίνακα εμφάνισης κατά την προβολή της διάταξης. Επιλέξτε Καρτέλα να εμφανίσετε αυτήν την ομάδα μέσα σε μια χωριστή καρτέλα μέσα στη διάταξη. Όταν η Καρτέλα καθοριστεί για ένα πίνακα, οι μεταγενέστεροι πίνακες θα εμφανίζονται ως Πίνακας στην καρτέλα. Μια νέα Καρτέλα θα ξεκινήσει για την επόμενη ομάδα για την οποία η Καρτέλα έχει επιλεγεί. Εάν έχει επιλεγεί Καρτέλα για μία ομάδα κάτω από το πρώτο φύλλο, το πρώτο φύλλο θα είναι αναγκαστικά μία Καρτέλα.',
'LBL_TABDEF_COLLAPSE' => 'Κατάρρευση',
'LBL_TABDEF_COLLAPSE_HELP' => 'Επιλέξτε να κάνετε σε κατάσταση προεπιλογής αυτόν τον πίνακα.',
'LBL_DROPDOWN_TITLE_NAME' => 'Όνομα',
'LBL_DROPDOWN_LANGUAGE' => 'Γλώσσα',
'LBL_DROPDOWN_ITEMS' => 'Λίστα Στοιχείων',
'LBL_DROPDOWN_ITEM_NAME' => 'Όνομα Στοιχείου',
'LBL_DROPDOWN_ITEM_LABEL' => 'Εμφάνιση Ετικέτας',
'LBL_SYNC_TO_DETAILVIEW' => 'Συγχρονισμός στη Προβολή Λεπτομέρειας',
'LBL_SYNC_TO_DETAILVIEW_HELP' => 'Επιλέξτε αυτήν την επιλογή για να συγχρονίσετε αυτή τη διάταξη "Προβολή Επεξεργασίας" με την αντίστοιχη διάταξη "Προβολή Λεπτομερειών". Τα Πεδία και η τοποθέτηση στο χώρο "Προβολή Επεξεργασίας" θα συγχρονστούν και θα αποθηκευτούν στο πεδίο "Προβολή Λεπτομερειών" αυτόματα πατώντας στο κουμπί "Αποθήκευση" ή "Αποθήκευση και Ανάπτυξη" στην  "Προβολή Επεξεργασίας".<br />Οι αλλαγές Διάταξης δεν θα είναι σε θέση να γίνουν στο "Προβολή Επεγεργασίας".',
'LBL_SYNC_TO_DETAILVIEW_NOTICE' => 'Αυτή η "Προβολή Λεπτομέρειας" είναι συγχρονισμένη με την αντίστοιχη "Προβολή Επεξεργασίας". Τα πεδία και η τοποθέτηση στο πεδίο "Προβολή Λεπτομερειών" απεικονίζουν τα πεδία και την τοποθέτηση πεδίου στην "Προβολή Επεξεργασίας".<br />Οι Αλλαγές στην "Προβολή Λεπτομερειών" δεν μπορούν να αποθηκευτούν ή να αναπτυχθούν μέσα σε αυτή τη σελίδα. Κάντε τις αλλαγές ή ξε-συγχρονίσετε τις διατάξεις "Προβολή Επεξεργασίας".',
'LBL_COPY_FROM' => 'Αντιγραφή από',
'LBL_COPY_FROM_EDITVIEW' => 'Αντιγραφή από Προβολή Επεξεργασίας',
'LBL_DROPDOWN_BLANK_WARNING' => 'Οι αξίες απαιτούνται και για το Όνομα Στοιχείου και για την Ετικέτα Εμφάνισης. Για να προσθέσετε ένα κενό στοιχείο, πατήστε στο κουμπί "Προσθήκη" χωρίς να εισέρχονται τιμές για το Όνομα Στοιχείου και την Ετικέτα Εμφάνισης.',
'LBL_DROPDOWN_KEY_EXISTS' => 'Το Κλειδί υπάρχει ήδη στην λίστα',
'LBL_DROPDOWN_LIST_EMPTY' => 'Η λίστα πρέπει να περιλαμβάνει τουλάχιστον ένα ενεργοποιημένο στοιχείο',
'LBL_NO_SAVE_ACTION' => 'Δεν μπορούσε να βρει την ενέργεια για αυτή την προβολή.',
'LBL_BADLY_FORMED_DOCUMENT' => 'Studio2:establishLocation: badly formed document',
// @TODO: Remove this lang string and uncomment out the string below once studio
// supports removing combo fields if a member field is on the layout already.
'LBL_INDICATES_COMBO_FIELD' => '** Δηλώνει ένα συνδυασμό πεδίου. Ένας συνδυασμός πεδίου, είναι μια συλλογή από μεμονωμένα πεδία. Για παράδειγμα, "Διεύθυνση" είναι ένας συνδυασμός πεδίου που περιέχει "Διεύθυνση, Οδός", "Πόλη", "Τ.Κ","Περιοχή" και "Χώρα".<br><br>Κάντε διπλό κλικ στον συνδυασμό του πεδίου για να δείτε ποια πεδία περιέχει.',
'LBL_COMBO_FIELD_CONTAINS' => 'περιέχει:',

'LBL_WIRELESSLAYOUTS'=>'Διατάξεις Κινητών',
'LBL_WIRELESSEDITVIEW'=>'Προβολή Επεξεργασίας Κινητού',
'LBL_WIRELESSDETAILVIEW'=>'Προβολή Λεπτομερειών Κινητού',
'LBL_WIRELESSLISTVIEW'=>'Προβολή Λίστας Κινητών',
'LBL_WIRELESSSEARCH'=>'Αναζήτηση Κινητού',

'LBL_BTN_ADD_DEPENDENCY'=>'Προσθήκη Εξάρτησης',
'LBL_BTN_EDIT_FORMULA'=>'Επεξεργασία Υποδείγματος',
'LBL_DEPENDENCY' => 'Εξάρτηση',
'LBL_DEPENDANT' => 'Εξαρτώμενα',
'LBL_CALCULATED' => 'Υπολογιζόμενη Τιμή',
'LBL_READ_ONLY' => 'Μόνο για Ανάγνωση',
'LBL_FORMULA_BUILDER' => 'Υπόδειγμα Δόμησης',
'LBL_FORMULA_INVALID' => 'Άκυρος Υπόδειγμα',
'LBL_FORMULA_TYPE' => 'Το Υπόδειγμα πρέπει να είναι του τύπου',
'LBL_NO_FIELDS' => 'Δεν Βρέθηκαν Πεδία',
'LBL_NO_FUNCS' => 'Δεν βρέθηκαν Λειτουργίες',
'LBL_SEARCH_FUNCS' => 'Εύρεση Λειτουργιών...',
'LBL_SEARCH_FIELDS' => 'Εύρεση Πεδίων...',
'LBL_FORMULA' => 'Υπόδειγμα',
'LBL_DYNAMIC_VALUES_CHECKBOX' => 'Εξαρτώμενη',
'LBL_DEPENDENT_DROPDOWN_HELP' => 'Σύρετε τις επιλογές από τη λίστα στα αριστερά από τις διαθέσιμες εξαρτημένες αναπτυσσόμενες επιλογές από τις σχετικές λίστες με το δικαίωμα να κάνουν αυτές τις επιλογές που είναι διαθέσιμες, όταν η επιλογή γονέα έχει επιλεγεί. Εάν δεν υπάρχουν είδη κάτω από ένα γονέα επιλογής, όταν η επιλογή γονέας έχει επιλεγεί, η εξαρτημένη αναπτυσσόμενη δεν θα εμφανίζεται.',
'LBL_AVAILABLE_OPTIONS' => 'Διαθέσιμες Επιλογές',
'LBL_PARENT_DROPDOWN' => 'Αναδυόμενος Γονέας',
'LBL_VISIBILITY_EDITOR' => 'Ορατότητα Εκδότη',
'LBL_ROLLUP' => 'Κυλιόμενο',
'LBL_RELATED_FIELD' => 'Σχετικά Πεδία',
'LBL_PORTAL_ROLE_DESC' => 'Μην διαγράψετε αυτόν τον ρόλο. Ο Ρόλος του Portal Αυτο-Εξυπηρέτησης Πελατών είναι ένα σύστημα-παραγμένου ρόλου, που δημιουργείται κατά τη διάρκεια ενεργοποίησης του Sugar Portal. Χρήση Ελέγχων Πρόσβασης μέσα σε αυτόν τον Ρόλο για ενεργοποίηση ή/και απενεργοποίηση των Σφαλμάτων, Υποθέσεων ή Βάση Γνώσεων στο Sugar Portal. Μην τροποποιείτε οποιαδήποτε άλλα στοιχεία ελέγχου πρόσβασης για αυτόν τον ρόλο για την αποφυγή άγνωστης και απρόβλεπτης συμπεριφοράς του συστήματος. Σε περίπτωση τυχαίας διαγραφής αυτού του ρόλου, ξανα-δημιουργήστε με απενεργοποίηση και ενεργοποίηση του Sugar Portal.',

//RELATIONSHIPS
'LBL_MODULE' => 'Ενότητα',
'LBL_LHS_MODULE'=>'Βασική Ενότητα',
'LBL_CUSTOM_RELATIONSHIPS' => '* σχέση που δημιουργείται στο Στούντιο',
'LBL_RELATIONSHIPS'=>'Σχέσεις',
'LBL_RELATIONSHIP_EDIT' => 'Επεξεργασία Σχέσης',
'LBL_REL_NAME' => 'Όνομα',
'LBL_REL_LABEL' => 'Ετικέτα',
'LBL_REL_TYPE' => 'Τύπος',
'LBL_RHS_MODULE'=>'Σχετική ενότητα',
'LBL_NO_RELS' => 'Δεν υπάρχουν Σχέσεις',
'LBL_RELATIONSHIP_ROLE_ENTRIES'=>'Προαιρετικός Όρος' ,
'LBL_RELATIONSHIP_ROLE_COLUMN'=>'Στήλη',
'LBL_RELATIONSHIP_ROLE_VALUE'=>'Αξία',
'LBL_SUBPANEL_FROM'=>'Υπο-πίνακας από',
'LBL_RELATIONSHIP_ONLY'=>'Δεν θα δημιουργηθούν ορατά στοιχεία για αυτή τη σχέση, καθώς υπάρχει μια προϋπάρχουσα ορατή σχέση μεταξύ αυτών των δύο ενοτήτων.',
'LBL_ONETOONE' => 'Ένα σε Ένα',
'LBL_ONETOMANY' => 'Ένα σε Πολλά',
'LBL_MANYTOONE' => 'Πολλά σε Ένα',
'LBL_MANYTOMANY' => 'Πολλά σε Πολλά',

//STUDIO QUESTIONS
'LBL_QUESTION_FUNCTION' => 'Επιλέξτε μια λειτουργία ή συστατικό.',
'LBL_QUESTION_MODULE1' => 'Επιλέξτε μία ενότητα.',
'LBL_QUESTION_EDIT' => 'Επιλέξτε μία ενότητα για επεξεργασία.',
'LBL_QUESTION_LAYOUT' => 'Επιλέξτε μία διάταξη για επεξεργασία.',
'LBL_QUESTION_SUBPANEL' => 'Επιλέξτε ένα υπο-πίνακα για επεξεργασία.',
'LBL_QUESTION_SEARCH' => 'Επιλέξτε μία αναζήτηση διάταξης για επεξεργασία.',
'LBL_QUESTION_MODULE' => 'Επιλέξτε ένα συστατικό ενότητας για επεξεργασία.',
'LBL_QUESTION_PACKAGE' => 'Επιλέξτε ένα πακέτο για επεξεργασία, ή δημιουργήστε ένα νέο πακέτο.',
'LBL_QUESTION_EDITOR' => 'Επιλέξτε ένα εργαλείο.',
'LBL_QUESTION_DROPDOWN' => 'Επιλέξτε μια αναδυόμενη λίστα να επεξεργαστείτε, ή δημιουργήστε μία νέα αναδυόμενη λίστα.',
'LBL_QUESTION_DASHLET' => 'Επιλέξτε μια διάταξη του πίνακα στοιχείων για επεξεργασία.',
'LBL_QUESTION_POPUP' => 'Επιλέξτε μία αναδυόμενη διάταξη για επεξεργασία.',
//CUSTOM FIELDS
'LBL_RELATE_TO'=>'Σχετικό Με',
'LBL_NAME'=>'Όνομα',
'LBL_LABELS'=>'Ετικέτες',
'LBL_MASS_UPDATE'=>'Μαζική Ενημέρωση',
'LBL_AUDITED'=>'Λογιστικός Έλεγχος',
'LBL_CUSTOM_MODULE'=>'Ενότητα',
'LBL_DEFAULT_VALUE'=>'Προκαθορισμένη Τιμή',
'LBL_REQUIRED'=>'Υποχρεωτικό',
'LBL_DATA_TYPE'=>'Τύπος',
'LBL_HCUSTOM'=>'ΠΡΟΣΑΡΜΟΣΜΕΝΟ',
'LBL_HDEFAULT'=>'ΠΡΟΕΠΙΛΟΓΗ',
'LBL_LANGUAGE'=>'Γλώσσα:',
'LBL_CUSTOM_FIELDS' => '* πεδίο που δημιουργείται στο Στούντιο',

//SECTION
'LBL_SECTION_EDLABELS' => 'Επεξεργασία Ετικετών',
'LBL_SECTION_PACKAGES' => 'Πακέτα',
'LBL_SECTION_PACKAGE' => 'Πακέτο',
'LBL_SECTION_MODULES' => 'Ενότητες',
'LBL_SECTION_PORTAL' => 'Portal',
'LBL_SECTION_DROPDOWNS' => 'Αναδυόμενες',
'LBL_SECTION_PROPERTIES' => 'Ιδιότητες',
'LBL_SECTION_DROPDOWNED' => 'Επεξεργασία Αναδυόμενης',
'LBL_SECTION_HELP' => 'Βοήθεια',
'LBL_SECTION_ACTION' => 'Δράση',
'LBL_SECTION_MAIN' => 'Κύρια',
'LBL_SECTION_EDPANELLABEL' => 'Επεξεργασία Φύλλου Ετικέτας',
'LBL_SECTION_FIELDEDITOR' => 'Επεξεργασία Πεδίου',
'LBL_SECTION_DEPLOY' => 'Ανάπτυξη',
'LBL_SECTION_MODULE' => 'Ενότητα',
'LBL_SECTION_VISIBILITY_EDITOR'=>'Ορατή Επεξεργασία',
//WIZARDS

//LIST VIEW EDITOR
'LBL_DEFAULT'=>'Προεπιλογή',
'LBL_HIDDEN'=>'Κρυφή',
'LBL_AVAILABLE'=>'Διαθέσιμη',
'LBL_LISTVIEW_DESCRIPTION'=>'Υπάρχουν τρεις στήλες που εμφανίζονται παρακάτω. Η στήλη "Προεπιλογή", περιέχει πεδία που εμφανίζονται σε μια προβολή λίστας, από προεπιλογή. Η "Πρόσθετη" στήλη, περιέχει πεδία που ένας χειριστής μπορεί να επιλέξει να χρησιμοποιήσει για τη δημιουργία μιας προσαρμοσμένης προβολής. Η "Διαθέσιμη" στήλη, εμφανίζει πεδία που διαθέτει για εσάς ως διαχειριστής για να προσθέσετε στην Προεπιλογή ή Διαθέσιμη στήλη περισσότερες στήλες για χρήση από τους χειριστές.',
'LBL_LISTVIEW_EDIT'=>'Προβολή Λίστας Συντάκτη',

//Manager Backups History
'LBL_MB_PREVIEW'=>'Προηγούμενο',
'LBL_MB_RESTORE'=>'Επαναφορά',
'LBL_MB_DELETE'=>'Διαγραφή',
'LBL_MB_COMPARE'=>'Σύγκριση',
'LBL_MB_DEFAULT_LAYOUT'=>'Προεπιλεγμένη Διάταξη',

//END WIZARDS

//BUTTONS
'LBL_BTN_ADD'=>'Προσθήκη',
'LBL_BTN_SAVE'=>'Αποθήκευση',
'LBL_BTN_SAVE_CHANGES'=>'Αποθήκευση Αλλαγών',
'LBL_BTN_DONT_SAVE'=>'Απόρριψη Αλλαγών',
'LBL_BTN_CANCEL'=>'Ακύρωση',
'LBL_BTN_CLOSE'=>'Κλείσιμο',
'LBL_BTN_SAVEPUBLISH'=>'Αποθήκευση & Ανάπτυξη',
'LBL_BTN_NEXT'=>'Επόμενο',
'LBL_BTN_BACK'=>'Πίσω',
'LBL_BTN_CLONE'=>'Κλώνος',
'LBL_BTN_COPY' => 'Αντιγραφή',
'LBL_BTN_COPY_FROM' => 'Αντιγραφή από...',
'LBL_BTN_ADDCOLS'=>'Προσθήκη Στηλών',
'LBL_BTN_ADDROWS'=>'Προσθήκη Γραμμών',
'LBL_BTN_ADDFIELD'=>'Προσθήκη Πεδίου',
'LBL_BTN_ADDDROPDOWN'=>'Προσθήκη Αναδυόμενης',
'LBL_BTN_SORT_ASCENDING'=>'Αύξουσα Ταξινόμηση',
'LBL_BTN_SORT_DESCENDING'=>'Φθίνουσα Ταξινόμηση',
'LBL_BTN_EDLABELS'=>'Επεξεργασία Ετικετών',
'LBL_BTN_UNDO'=>'Αναίρεση',
'LBL_BTN_REDO'=>'Ξανά',
'LBL_BTN_ADDCUSTOMFIELD'=>'Προσθήκη Προσαρμοσμένου Πεδίου',
'LBL_BTN_EXPORT'=>'Εξαγωγή Προσαρμογών',
'LBL_BTN_DUPLICATE'=>'Αντίγραφο',
'LBL_BTN_PUBLISH'=>'Δημοσίευση',
'LBL_BTN_DEPLOY'=>'Ανάπτυξη',
'LBL_BTN_EXP'=>'Εξαγωγή',
'LBL_BTN_DELETE'=>'Διαγραφή',
'LBL_BTN_VIEW_LAYOUTS'=>'Προβολή Διατάξεων',
'LBL_BTN_VIEW_MOBILE_LAYOUTS'=>'Προβολή Διατάξεων Κινητών',
'LBL_BTN_VIEW_FIELDS'=>'Προβολή Πεδίων',
'LBL_BTN_VIEW_RELATIONSHIPS'=>'Προβολή Σχέσεων',
'LBL_BTN_ADD_RELATIONSHIP'=>'Προσθήκη Σχέσης',
'LBL_BTN_RENAME_MODULE' => 'Αλλαγή Ονόματος Ενότητας',
'LBL_BTN_INSERT'=>'Εισαγωγή',
'LBL_BTN_RESTORE_BASE_LAYOUT' => 'Επαναφορά διάταξης βάσης',
//TABS

//ERRORS
'ERROR_ALREADY_EXISTS'=> 'Λάθος: Το Πεδίο Υπάρχει Ήδη',
'ERROR_INVALID_KEY_VALUE'=> "Λάθος: Άκυρη Αξία Κλειδιού: [*]",
'ERROR_NO_HISTORY' => 'Δεν βρέθηκαν αρχεία με ιστορικό',
'ERROR_MINIMUM_FIELDS' => 'Η διάταξη πρέπει να περιέχει τουλάχιστον ένα πεδίο',
'ERROR_GENERIC_TITLE' => 'Παρουσιάστηκε λάθος',
'ERROR_REQUIRED_FIELDS' => 'Είστε σίγουροι ότι θέλετε να συνεχίσετε; Τα παρακάτω υποχρεωτικά πεδία λείπουν από την διάταξη:',
'ERROR_ARE_YOU_SURE' => 'Είστε σίγουροι ότι θέλετε να συνεχίσετε;',
'ERROR_DATABASE_ROW_SIZE_LIMIT' => 'Δεν είναι δυνατή η δημιουργία πεδίου. Έχετε φτάσει το όριο μεγέθους σειράς αυτού του πίνακα στη βάση δεδομένων σας. <a href="https://support.sugarcrm.com/SmartLinks/Custom/MySQL_Row_Size_Limit/" target="_blank">Μάθετε περισσότερα</a>.',

'ERROR_CALCULATED_MOBILE_FIELDS' => 'Το επόμενο πεδίο(α) έχει υπολογίσει αξίες που δεν θα υπολογιστούν εκ νέου σε πραγματικό χρόνο στο SugarCRM Επεξεργασία Προβολής Κινητού:',
'ERROR_CALCULATED_PORTAL_FIELDS' => 'Το επόμενο πεδίο(α) έχει υπολογίσει αξίες που δεν θα υπολογιστούν εκ νέου σε πραγματικό χρόνο στο SugarCRM Επεξεργασία Προβολής Portal:',

//SUGAR PORTAL
    'LBL_PORTAL_DISABLED_MODULES' => 'Η ακόλουθη ενότητα(ες) είναι απενεργοποιημένη:',
    'LBL_PORTAL_ENABLE_MODULES' => 'Αν θα θέλατε να τις ενεργοποιήσετε στο portal, παρακαλώ ενεργοποιήστε τες <a id="configure_tabs" target="_blank" href="./index.php?module=Administration&amp;action=ConfigureTabs">εδώ</a>.',
    'LBL_PORTAL_CONFIGURE' => 'Διαμόρφωση Portal',
    'LBL_PORTAL_ENABLE_PORTAL' => 'Ενεργοποίηση πύλης',
    'LBL_PORTAL_SHOW_KB_NOTES' => 'Ενεργοποίηση σημειώσεων στην ενότητα Γνωσιακής Βάσης',
    'LBL_PORTAL_ALLOW_CLOSE_CASE' => 'Επιτρέψτε στους χρήστες της πύλης να κλείσουν την υπόθεση',
    'LBL_PORTAL_ENABLE_SELF_SIGN_UP' => 'Επιτρέψτε στους νέους χρήστες να εγγραφούν',
    'LBL_PORTAL_USER_PERMISSIONS' => 'Δικαιώματα χρήστη',
    'LBL_PORTAL_THEME' => 'Θέμα Portal',
    'LBL_PORTAL_ENABLE' => 'Ενεργοποιημένο',
    'LBL_PORTAL_SITE_URL' => 'Η Δικτυακή σας πύλη είναι διαθέσιμη στο:',
    'LBL_PORTAL_APP_NAME' => 'Όνομα Εφαρμογής',
    'LBL_PORTAL_CONTACT_PHONE' => 'Τηλέφωνο',
    'LBL_PORTAL_CONTACT_EMAIL' => 'Email',
    'LBL_PORTAL_CONTACT_EMAIL_INVALID' => 'Πρέπει να καταχωρήσετε μια έγκυρη διεύθυνση ηλεκτρονικού ταχυδρομείου',
    'LBL_PORTAL_CONTACT_URL' => 'Διεύθυνση URL',
    'LBL_PORTAL_CONTACT_INFO_ERROR' => 'Πρέπει να προσδιορίζεται τουλάχιστον μία μέθοδος επαφής',
    'LBL_PORTAL_LIST_NUMBER' => 'Αριθμός εγγραφών που θα εμφανίζονται στη λίστα',
    'LBL_PORTAL_DETAIL_NUMBER' => 'Αριθμός πεδίων που θα εμφανίζονται στη Προβολή Λεπτομερειών',
    'LBL_PORTAL_SEARCH_RESULT_NUMBER' => 'Αριθμός αποτελεσμάτων που θα εμφανίζονται στη Σφαιρική Αναζήτηση',
    'LBL_PORTAL_DEFAULT_ASSIGN_USER' => 'Προεπιλογή που ορίζεται για τις νέες εγγραφές στο portal',
    'LBL_PORTAL_MODULES' => 'Ενότητες πύλης',
    'LBL_CONFIG_PORTAL_CONTACT_INFO' => 'Στοιχεία επικοινωνίας της πύλης',
    'LBL_CONFIG_PORTAL_CONTACT_INFO_HELP' => 'Διαμορφώστε τα στοιχεία επικοινωνίας που παρουσιάζονται στους χρήστες της πύλης που χρειάζονται πρόσθετη βοήθεια με το λογαριασμό τους. Πρέπει να διαμορφωθεί τουλάχιστον μία επιλογή.',
    'LBL_CONFIG_PORTAL_MODULES_HELP' => 'Μεταφέρετε και αποθέστε τα ονόματα των ενοτήτων της πύλης και ορίστε τα ώστε να εμφανίζονται ή να αποκρύπτονται στην επάνω γραμμή πλοήγησης της πύλης. Για να ελέγξετε την πρόσβαση των χρηστών της πύλης σε ενότητες, χρησιμοποιήστε τη <a href="?module=ACLRoles&action=index"> Διαχείριση ρόλων. </a>',
    'LBL_CONFIG_PORTAL_MODULES_DISPLAYED' => 'Εμφανιζόμενες Ενότητες',
    'LBL_CONFIG_PORTAL_MODULES_HIDDEN' => 'Κρυφές Ενότητες',
    'LBL_CONFIG_VISIBILITY' => 'Ορατότητα',
    'LBL_CASE_VISIBILITY_HELP' => 'Ορίστε ποιοι χρήστες πύλης μπορούν να δουν μια υπόθεση.',
    'LBL_EMAIL_VISIBILITY_HELP' => 'Ορίστε ποιοι χρήστες της πύλης μπορούν να δουν τα μηνύματα που σχετίζονται με μια υπόθεση. Οι επαφές που συμμετέχουν είναι αυτές στα πεδία Προς, Από, CC και BCC.',
    'LBL_MESSAGE_VISIBILITY_HELP' => 'Ορίστε ποιοι χρήστες της πύλης μπορούν να δουν τα μηνύματα που σχετίζονται με μια υπόθεση. Οι επαφές που συμμετέχουν είναι αυτές στο πεδίο Επισκέπτες.',
    'CASE_VISIBILITY_OPTIONS' => [
        'all' => 'Όλες οι επαφές που σχετίζονται με τον λογαριασμό',
        'related_contacts' => 'Μόνο πρωτεύουσες επαφές και επαφές που σχετίζονται με την υπόθεση',
    ],
    'EMAIL_VISIBILITY_OPTIONS' => [
        'related_contacts' => 'Μόνο συμμετέχουσες επαφές',
        'all' => 'Όλες οι επαφές που μπορούν να δουν την υπόθεση',
    ],
    'MESSAGE_VISIBILITY_OPTIONS' => [
        'related_contacts' => 'Μόνο συμμετέχουσες επαφές',
        'all' => 'Όλες οι επαφές που μπορούν να δουν την υπόθεση',
    ],


'LBL_PORTAL'=>'Portal',
'LBL_PORTAL_LAYOUTS'=>'Διατάξεις Portal',
'LBL_SYNCP_WELCOME'=>'Παρακαλώ εισάγετε την διεύθυνση URL του portal στην περίπτωση που θέλετε να ενημερώσετε.',
'LBL_SP_UPLOADSTYLE'=>'Επιλέξτε ένα ύφος φύλλου για να ανεβάσετε από τον υπολογιστή σας. Το ύφος του φύλλου θα εφαρμοστεί στο Sugar Portal την επόμενη φορά που θα εκτελέσετε ένα πρόγραμμα συγχρονισμού.',
'LBL_SP_UPLOADED'=> 'Φορτωμένο',
'ERROR_SP_UPLOADED'=>'Παρακαλώ βεβαιωθείτε ότι στέλνετε ένα φύλλο ύφους css.',
'LBL_SP_PREVIEW'=>'Εδώ είναι μια προεπισκόπηση με τι θα μοιάζει το Sugar Portal χρησιμοποιώντας το φύλλο ύφους.',
'LBL_PORTALSITE'=>'Sugar Portal URL:',
'LBL_PORTAL_GO'=>'Πηγαίνετε',
'LBL_UP_STYLE_SHEET'=>'Ανεβάστε Ύφος Φύλλου',
'LBL_QUESTION_SUGAR_PORTAL' => 'Επιλέξτε την διάταξη της Sugar στο Portal για επεξεργασία.',
'LBL_QUESTION_PORTAL' => 'Επιλέξτε την πύλη διάταξης για επεξεργασία.',
'LBL_SUGAR_PORTAL'=>'Συντάκτης Sugar Portal',
'LBL_USER_SELECT' => '-- Επιλογή --',

//PORTAL PREVIEW
'LBL_CASES'=>'Υποθέσεις',
'LBL_NEWSLETTERS'=>'Ενημερωτικά Δελτία',
'LBL_BUG_TRACKER'=>'Σφάλμα Σημείου Εντοπισμού',
'LBL_MY_ACCOUNT'=>'Λογαριασμός Mου',
'LBL_LOGOUT'=>'Έξοδος',
'LBL_CREATE_NEW'=>'Δημιουργία Νέας',
'LBL_LOW'=>'Χαμηλή',
'LBL_MEDIUM'=>'Μεσαία',
'LBL_HIGH'=>'Υψηλή',
'LBL_NUMBER'=>'Αριθμός:',
'LBL_PRIORITY'=>'Προτεραιότητα:',
'LBL_SUBJECT'=>'Θέμα',

//PACKAGE AND MODULE BUILDER
'LBL_PACKAGE_NAME'=>'Όνομα Πακέτου:',
'LBL_MODULE_NAME'=>'Όνομα Ενότητας:',
'LBL_MODULE_NAME_SINGULAR' => 'Μοναδικό Όνομα Ενότητας:',
'LBL_AUTHOR'=>'Συγγραφέας:',
'LBL_DESCRIPTION'=>'Περιγραφή:',
'LBL_KEY'=>'Κλειδί:',
'LBL_ADD_README'=>'Διάβασε με',
'LBL_MODULES'=>'Ενότητες:',
'LBL_LAST_MODIFIED'=>'Τελευταία Τροποποίηση:',
'LBL_NEW_MODULE'=>'Νέα Ενότητα',
'LBL_LABEL'=>'Ετικέτα:',
'LBL_LABEL_TITLE'=>'Ετικέτα',
'LBL_SINGULAR_LABEL' => 'Μοναδική Ετικέτα',
'LBL_WIDTH'=>'Πλάτος',
'LBL_PACKAGE'=>'Πακέτο:',
'LBL_TYPE'=>'Τύπος:',
'LBL_TEAM_SECURITY'=>'Ομάδα Ασφαλείας',
'LBL_ASSIGNABLE'=>'Αντιστοίχιση',
'LBL_PERSON'=>'Άτομο',
'LBL_COMPANY'=>'Εταιρεία',
'LBL_ISSUE'=>'ζήτημα',
'LBL_SALE'=>'πώληση',
'LBL_FILE'=>'Αρχείο',
'LBL_NAV_TAB'=>'Πλοήγηση Καρτέλας',
'LBL_CREATE'=>'Δημιουργία',
'LBL_LIST'=>'Λίστα',
'LBL_VIEW'=>'Προβολή',
'LBL_LIST_VIEW'=>'Προβολή Λίστας',
'LBL_HISTORY'=>'Προβολή Ιστορικού',
'LBL_RESTORE_DEFAULT_LAYOUT'=>'Restore Default Layout',
'LBL_ACTIVITIES'=>'Δραστηριότητες',
'LBL_SEARCH'=>'Αναζήτηση',
'LBL_NEW'=>'Νέα',
'LBL_TYPE_BASIC'=>'βασική',
'LBL_TYPE_COMPANY'=>'εταιρεία',
'LBL_TYPE_PERSON'=>'άτομο',
'LBL_TYPE_ISSUE'=>'ζήτημα',
'LBL_TYPE_SALE'=>'πώληση',
'LBL_TYPE_FILE'=>'αρχείο',
'LBL_RSUB'=>'Αυτή είναι η υπο-ομάδα που θα εμφανίζεται στην ενότητα σας',
'LBL_MSUB'=>'Αυτό είναι η υπο-ομάδα που η ενότητά σας παρέχει την σχετική ενότητα για την εμφάνιση',
'LBL_MB_IMPORTABLE'=>'Επιτρέπονται οι εισαγωγές',

// VISIBILITY EDITOR
'LBL_VE_VISIBLE'=>'ορατό',
'LBL_VE_HIDDEN'=>'κρυφό',
'LBL_PACKAGE_WAS_DELETED'=>'[[package]] διεγράφηκε',

//EXPORT CUSTOMS
'LBL_EC_TITLE'=>'Εξαγωγή Προσαρμοσμένων',
'LBL_EC_NAME'=>'Όνομα Πακέτου:',
'LBL_EC_AUTHOR'=>'Συγγραφέας:',
'LBL_EC_DESCRIPTION'=>'Περιγραφή:',
'LBL_EC_KEY'=>'Κλειδί:',
'LBL_EC_CHECKERROR'=>'Παρακαλώ επιλέξτε ενότητα.',
'LBL_EC_CUSTOMFIELD'=>'προσαρμοσμένο πεδίο(α)',
'LBL_EC_CUSTOMLAYOUT'=>'προσαρμοσμένη διάταξη(εις)',
'LBL_EC_CUSTOMDROPDOWN' => 'προσαρμοσμένο dropdown',
'LBL_EC_NOCUSTOM'=>'Καμία ενότητα δεν έχει προσαρμοστεί.',
'LBL_EC_EXPORTBTN'=>'Εξαγωγή',
'LBL_MODULE_DEPLOYED' => 'Η Ενότητα έχει αναπτυχθεί',
'LBL_UNDEFINED' => 'απροσδιόριστο',
'LBL_EC_CUSTOMLABEL'=>'προσαρμοσμένες ετικέτες',

//AJAX STATUS
'LBL_AJAX_FAILED_DATA' => 'Αποτυχία στην ανάκτηση δεδομένων',
'LBL_AJAX_TIME_DEPENDENT' => 'Μια χρονικά εξαρτημένη δράση είναι σε εξέλιξη. Παρακαλώ περιμένετε και δοκιμάστε ξανά σε λίγα δευτερόλεπτα.',
'LBL_AJAX_LOADING' => 'Φορτώνει...',
'LBL_AJAX_DELETING' => 'Διαγράφει...',
'LBL_AJAX_BUILDPROGRESS' => 'Κατασκευή σε Εξέλιξη...',
'LBL_AJAX_DEPLOYPROGRESS' => 'Ανάπτυξη σε Εξέλιξη...',
'LBL_AJAX_FIELD_EXISTS' =>'Το όνομα του πεδίου που καταχωρήσατε υπάρχει ήδη. Παρακαλώ εισάγετε ένα νέο όνομα πεδίου.',
//JS
'LBL_JS_REMOVE_PACKAGE' => 'Είστε βέβαιοι ότι θέλετε να αφαιρέσετε αυτό το πακέτο; Αυτό θα διαγράψει μόνιμα όλα τα αρχεία που σχετίζονται με αυτό το πακέτο.',
'LBL_JS_REMOVE_MODULE' => 'Είστε βέβαιοι ότι θέλετε να αφαιρέσετε αυτή την ενοτητα; Αυτό θα διαγράψει μόνιμα όλα τα αρχεία που σχετίζονται με αυτή την ενότητα.',
'LBL_JS_DEPLOY_PACKAGE' => 'Οποιεσδήποτε προσαρμογές που κάνατε στο Στούντιο θα επικαλυφθούν όταν αυτή η ενότητα αναπτυχθεί. Είστε βέβαιοι ότι θέλετε να προχωρήσετε;',

'LBL_DEPLOY_IN_PROGRESS' => 'Ανάπτυξη Πακέτου',
'LBL_JS_VALIDATE_NAME'=>'Όνομα - Πρέπει να είναι αλφαριθμητικά, να αρχίζει με ένα γράμμα και να μην περιέχουν κενά διαστήματα.',
'LBL_JS_VALIDATE_PACKAGE_KEY'=>'Package Key already exists',
'LBL_JS_VALIDATE_PACKAGE_NAME'=>'Όνομα Πακέτου υπάρχει ήδη',
'LBL_JS_PACKAGE_NAME'=>'Όνομα πακέτου - Πρέπει να ξεκινά με γράμμα και να περιλαμβάνει μόνο γράμματα, αριθμούς και κάτω παύλες. Δεν μπορούν να χρησιμοποιηθούν διαστήματα ή άλλοι ειδικοί χαρακτήρες.',
'LBL_JS_VALIDATE_KEY_WITH_SPACE'=>'Κλειδί - Πρέπει να είναι .αλφαριθμητικό και να ξεκινά με γράμμα.',
'LBL_JS_VALIDATE_KEY'=>'Κλειδί - Πρέπει να είναι αλφαριθμητικά, να αρχίζει με ένα γράμμα και να μην περιέχουν κενά διαστήματα.',
'LBL_JS_VALIDATE_LABEL'=>'Παρακαλώ εισάγετε μια ετικέτα που θα χρησιμοποιηθεί ως Όνομα Εμφάνισης για αυτήν την ενότητα',
'LBL_JS_VALIDATE_TYPE'=>'Παρακαλώ επιλέξτε τον τύπο της ενότητας που θέλετε να δημιουργήσετε από την παραπάνω λίστα',
'LBL_JS_VALIDATE_REL_NAME'=>'Όνομα - Πρέπει να είναι αλφαριθμητικό, χωρίς κενά διαστήματα',
'LBL_JS_VALIDATE_REL_LABEL'=>'Ετικέτα - παρακαλώ προσθέστε μια ετικέτα που θα εμφανίζεται πάνω από την υπο-ομάδα',

// Dropdown lists
'LBL_JS_DELETE_REQUIRED_DDL_ITEM' => 'Είστε βέβαιοι ότι θέλετε να διαγράψετε αυτό το υποχρεωτικό στοιχείο της αναδυόμενης λίστας; Αυτό μπορεί να επηρεάσει τη λειτουργικότητα της εφαρμογής σας.',

// Specific dropdown list should be:
// LBL_JS_DELETE_REQUIRED_DDL_ITEM_(UPPERCASE_DDL_NAME)
'LBL_JS_DELETE_REQUIRED_DDL_ITEM_SALES_STAGE_DOM' => 'Είστε βέβαιοι ότι θέλετε να διαγράψετε αυτό το στοιχείο της αναδυόμενης λίστας; Διαγράφοντας το  "Κλειστό Κέρδισε" ή  "Κλειστό Χαμένο"στάδιο, η Ενότητα Πρόβλεψης δεν θα λειτουργεί σωστά',

// Specific list items should be:
// LBL_JS_DELETE_REQUIRED_DDL_ITEM_(UPPERCASE_ITEM_NAME)
// Item name should have all special characters removed and spaces converted to
// underscores
'LBL_JS_DELETE_REQUIRED_DDL_ITEM_NEW' => 'Είστε βέβαιοι ότι θέλετε να διαγράψετε τη Νέα κατάσταση πωλήσεων; Η διαγραφή σε αυτή την περίπτωση θα προκαλέσει στην ενότητα Ευκαιριών στη ροή εργασίας της Γραμμής Στοιχείων Εσόδων, να μην λειτουργούν σωστά.',
'LBL_JS_DELETE_REQUIRED_DDL_ITEM_IN_PROGRESS' => 'Είστε σίγουροι ότι θέλετε να διαγράψετε την Εξέλιξη της κατάστασης των πωλήσεων; Η διαγραφή στην περίπτωση αυτή, θα προκαλέσει στην ενότητα Ευκαιριών στη ροή εργασίας της Γραμμής Στοιχείων Εσόδων να μην λειτουργεί σωστά.',
'LBL_JS_DELETE_REQUIRED_DDL_ITEM_CLOSED_WON' => 'Είστε βέβαιοι ότι θέλετε να διαγράψετε το στάδιο πώλησης "Κλειστό Κέρδισε"; Διαγράφοντας αυτό το στάδιο, η Ενότητα Πρόβλεψης δεν θα λειτουργεί σωστά',
'LBL_JS_DELETE_REQUIRED_DDL_ITEM_CLOSED_LOST' => 'Είστε βέβαιοι ότι θέλετε να διαγράψετε το στάδιο πώλησης "Κλειστό Χαμένο"; Διαγράφοντας αυτό το στάδιο, η Ενότητα Πρόβλεψης δεν θα λειτουργεί σωστά',

//CONFIRM
'LBL_CONFIRM_FIELD_DELETE'=>'Deleting this custom field will delete both the custom field and all the data related to the custom field in the database. The field will be no longer appear in any module layouts.'
        . ' If the field is involved in a formula to calculate values for any fields, the formula will no longer work.'
        . '\n\nThe field will no longer be available to use in Reports; this change will be in effect after logging out and logging back in to the application. Any reports containing the field will need to be updated in order to be able to be run.'
        . '\n\nDo you wish to continue?',
'LBL_CONFIRM_RELATIONSHIP_DELETE'=>'Είστε βέβαιοι ότι θέλετε να διαγράψετε αυτή τη σχέση;',
'LBL_CONFIRM_RELATIONSHIP_DEPLOY'=>'Αυτό θα κάνει αυτή η σχέση μόνιμη. Είστε βέβαιοι ότι θέλετε να αναπτύξετε αυτήν την σχέση;',
'LBL_CONFIRM_DONT_SAVE' => 'Αλλαγές έχουν γίνει από την τελευταία σας αποθήκευση, θα θέλατε να αποθηκεύσετε;',
'LBL_CONFIRM_DONT_SAVE_TITLE' => 'Αποθήκευση Αλλαγών;',
'LBL_CONFIRM_LOWER_LENGTH' => 'Τα δεδομένα μπορούν να περικοπούν και αυτό δεν μπορεί να αναιρεθεί, είστε βέβαιοι ότι θέλετε να συνεχίσετε;',

//POPUP HELP
'LBL_POPHELP_FIELD_DATA_TYPE'=>'Επιλογή του κατάλληλου τύπου δεδομένων με βάση το είδος των δεδομένων που θα εισαχθεί στο πεδίο.',
'LBL_POPHELP_FTS_FIELD_CONFIG' => 'Configure the field to be full text searchable.',
'LBL_POPHELP_FTS_FIELD_BOOST' => 'Τόνωση είναι η διαδικασία ενίσχυσης της σχετικότητας των πεδίων αρχείου/ων.<br />Πεδία με υψηλότερο επίπεδο τόνωσης θα λάβουν υψηλότερη βαρύτητα όταν εκτελεστεί η αναζήτηση. Όταν εκτελείται αναζήτηση, τα ταυτόσημα αρχεία που περιέχουν πεδία με υψηλότερη βαρύτητα θα εμφανίζονται υψηλότερα στα αποτελέσματα αναζήτησης.<br />Η τιμή προεπιλογής είναι 1.0, κάτι που συμβολίζιει ουδέτερη τόνωση. Για να εφαρμόσετε θετική τόνωση, οποιαδήποτε μεταβλητή τιμή υψηλότερη του 1 είναι αποδεκτή. Για αρνητική τόνωση, χρησιμοποιήστε τιμές χαμηλότερες του 1. Για παράδειγμα, τιμή 1.35 θα τονώσει θετικά ένα πεδίο επί 135%. Η χρήση τιμής 0.60 θα εφαρμόσει αρνητική τόνωση.<br />Σημειώστε ότι σε προηγούμενες εκδόσεις υπήρχε η απαίτηση εκτέλεσης εκ νέου ομαδοποίησης έρευνας πλήρους κειμένου. Κάτι τέτοιο δεν απαιτείται πλέον.',
'LBL_POPHELP_IMPORTABLE'=>'Ναι: Το πεδίο θα πρέπει να περιλαμβάνεται στην εισαγωγή εφαρμογής. <br />Όχι: Το πεδίο δεν θα συμπεριληφθεί στην εισαγωγή. <br />Υποχρεωτικό: Η αξία για το πεδίο πρέπει να παρέχεται σε κάθε εισαγωγή.',
'LBL_POPHELP_PII'=>'Αυτό το πεδίο θα σημειώνονται αυτόματα για έλεγχο και ως διαθέσιμο στην προβολή προσωπικών πληροφοριών.<br>Πεδία προσωπικών πληροφοριών μπορούν επίσης να σβηστούν μόνιμα όταν η εγγραφή σχετίζεται με αίτημα διαγραφήςγια την προστασία προσωπικών δεδομένων.<br>Η διαγραφή εκτελείται μέσα από την μονάδα προστασία προσωπικών δεδομένων και μπορεί να εκτελεστεί από τους διαχειριστές ή τους χρήστες στο ρόλο τους ως υπεύθυνοι προστασίας προσωπικών δεδομένων.',
'LBL_POPHELP_IMAGE_WIDTH'=>'Πληκτρολογήστε έναν αριθμό για το Πλάτος, όπως μετριέται σε pixels. Η εικόνα που αποστέλετε θα κλιμακωθεί σε αυτό το Πλάτος.',
'LBL_POPHELP_IMAGE_HEIGHT'=>'Πληκτρολογήστε έναν αριθμό για το Ύψος, όπως μετριέται σε pixels. Η εικόνα που αποστέλετε θα κλιμακωθεί σε αυτό το Ύψος.',
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
'LBL_POPHELP_REQUIRED'=>"Δημιουργήστε έναν τύπο για να προσδιορίσετε εάν αυτό το πεδίο απαιτείται σε διατάξεις.<br/>"
    . "Τα απαιτούμενα πεδία θα ακολουθήσουν τον τύπο στην προβολή κινητού που βασίζεται στο πρόγραμμα περιήγησης, <br/>"
    . "αλλά δεν θα εφαρμόσει τον τύπο στις εγγενείς εφαρμογές, όπως το Sugar Mobile για iPhone. <br/>"
    . "Δεν θα εφαρμόσουν τον τύπο στο Portal Sugar Self-Service.",
'LBL_POPHELP_READONLY'=>"Δημιουργήστε έναν τύπο για να προσδιορίσετε εάν αυτό το πεδίο θα διαβάζεται μόνο σε διατάξεις.<br/>"
        . "Τα πεδία μόνο για ανάγνωση θα ακολουθήσουν τον τύπο στην προβολή κινητού που βασίζεται στο πρόγραμμα περιήγησης, <br/>"
        . "αλλά δεν θα ακολουθούν τον τύπο στις εγγενείς εφαρμογές, όπως το Sugar Mobile για iPhone. <br/>"
        . "Δεν θα ακολουθήσουν τον τύπο στο Self-Service Portal Sugar.",
'LBL_POPHELP_GLOBAL_SEARCH'=>'Επιλέξτε να χρησιμοποιείτε αυτό το πεδίο κατά την αναζήτηση εγγραφών χρησιμοποιώντας την Καθολική αναζήτηση σε αυτήν την ενότητα.',
//Revert Module labels
'LBL_RESET' => 'Επαναφορά',
'LBL_RESET_MODULE' => 'Επαναφορά Ενότητας',
'LBL_REMOVE_CUSTOM' => 'Αφαίρεση Προσαρμογών',
'LBL_CLEAR_RELATIONSHIPS' => 'Εκκαθάριση Σχέσεων',
'LBL_RESET_LABELS' => 'Επαναφορά Ετικετών',
'LBL_RESET_LAYOUTS' => 'Επαναφορά Διατάξεων',
'LBL_REMOVE_FIELDS' => 'Αφαίρεση Προσαρμοσμένων Πεδίων',
'LBL_CLEAR_EXTENSIONS' => 'Εκκαθάριση Επεκτάσεων',

'LBL_HISTORY_TIMESTAMP' => 'Σφραγίδα Χρόνου',
'LBL_HISTORY_TITLE' => 'Ιστορικό',

'fieldTypes' => array(
                'varchar'=>'Πεδίο Κειμένου',
                'int'=>'Ακέραιος αριθμός',
                'float'=>'Float',
                'bool'=>'Παράθυρο Ελέγχου',
                'enum'=>'Αναδυόμενο',
                'multienum' => 'Επιλογή Πολλών',
                'date'=>'Ημερομηνία',
                'phone' => 'Τηλέφωνο:',
                'currency' => 'Νόμισμα',
                'html' => 'HTML',
                'radioenum' => 'Ραδιόφωνο',
                'relate' => 'Σχετικός',
                'address' => 'Διεύθυνση',
                'text' => 'Περιοχή Κειμένου',
                'url' => 'Διεύθυνση URL',
                'iframe' => 'IFrame',
                'image' => 'Εικόνα',
                'encrypt'=>'Κρυπτογράφηση',
                'datetimecombo' =>'Ημερομηνία Ώρα',
                'decimal'=>'Δεκαδικός αριθμός',
                'autoincrement' => 'auto-increment',
                'actionbutton' => 'ActionButton',
),
'labelTypes' => array(
    "" => "Ετικέτες Συχνής Χρήσης",
    "all" => "Όλες οι Ετικέτες",
),

'parent' => 'Εύκαμπτος Συσχετισμός',

'LBL_ILLEGAL_FIELD_VALUE' =>"Το αναδυόμενο κλειδί δεν μπορεί να περιέχει προσφορές.",
'LBL_CONFIRM_SAVE_DROPDOWN' =>"Επιλέξατε αυτό το είδος για την αφαίρεση του από την αναδυόμενη λίστα. Οποιαδήποτε αναδυόμενα πεδία που χρησιμοποιούν αυτόν τον κατάλογο με αυτό το είδος ως αξία δεν θα επιδείξουν πλέον την αξία, και η αξία δεν θα είναι σε θέση πλέον να επιλεχτεί από τα αναδυόμενα πεδία. Είστε βέβαιοι ότι θέλετε να συνεχίσετε;",
'LBL_POPHELP_VALIDATE_US_PHONE'=>"Select to validate this field for the entry of a 10-digit<br>" .
                                 "phone number, with allowance for the country code 1, and<br>" .
                                 "to apply a U.S. format to the phone number when the record<br>" .
                                 "is saved. The following format will be applied: (xxx) xxx-xxxx.",
'LBL_ALL_MODULES'=>'Όλες οι Ενότητες',
'LBL_RELATED_FIELD_ID_NAME_LABEL' => '{0} (related {1} ID)',
'LBL_HEADER_COPY_FROM_LAYOUT' => 'Αντιγραφή από διάταξη',
'LBL_RELATIONSHIP_TYPE' => 'Σχέση',

// Edit Labels
'LBL_COMPARISON_LANGUAGE' => 'Γλώσσα σύγκρισης',
'LBL_LABEL_NOT_TRANSLATED' => 'Αυτή η ετικέτα δεν μπορεί να μεταφραστεί',
);
