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
/*********************************************************************************

 * Description:
 * Portions created by SugarCRM are Copyright (C) SugarCRM, Inc. All Rights
 * Reserved. Contributor(s): ______________________________________..
 * *******************************************************************************/

$mod_strings = array(
	'LBL_BASIC_SEARCH'					=> 'Kërkim bazik',
	'LBL_ADVANCED_SEARCH'				=> 'Kërkim i avancuar',
	'LBL_BASIC_TYPE'					=> 'lloj bazik',
	'LBL_ADVANCED_TYPE'					=> 'lloj i avancuar',
	'LBL_SYSOPTS_1'						=> 'selekto nga opcionet konfigurimet e sistemeve vijuese',
    'LBL_SYSOPTS_2'                     => 'Çfar lloji të bazës së të fhënave do të përdoret për Sugar shembullin që jeni duke instaluar?',
	'LBL_SYSOPTS_CONFIG'				=> 'Konfigurimi i sistemit',
	'LBL_SYSOPTS_DB_TYPE'				=> '',
	'LBL_SYSOPTS_DB'					=> 'Përcakto llojin e bazës së të dhënave',
    'LBL_SYSOPTS_DB_TITLE'              => 'lloji i bazës së të dhënave',
	'LBL_SYSOPTS_ERRS_TITLE'			=> 'Ju lutemi ndreqni gabimet vijuese para se të vazhdoni:',
	'LBL_MAKE_DIRECTORY_WRITABLE'      => 'Ju lutemi bëjeni udhëzimin vijues të shkruajtur:',


    'ERR_DB_LOGIN_FAILURE_IBM_DB2'		=> 'Hosti i bazës së të dhënave, emri i përdorimit dhe/ose fjalëkalimi është jo valide dhe një lidhje me bazën e të dhënave nuk mund të vendoset. Ju lutemi vendosni një host, emër përdorimi dhe fjalëkalim valid',
    'ERR_DB_IBM_DB2_CONNECT'			=> 'Hosti i bazës së të dhënave, emri i përdorimit dhe/ose fjalëkalimi është jo valide dhe një lidhje me bazën e të dhënave nuk mund të vendoset. Ju lutemi vendosni një host, emër përdorimi dhe fjalëkalim valid',
    'ERR_DB_IBM_DB2_VERSION'			=> 'Versioni juaj i DB2 (%s) nuk është i mbështetur nga Sugar. Do të duhet të instaloni një version të përshtatshëm me aplikacionin e Sugar. Ju lutemi konsultoni Matriksin Kompatibil në shënimet e publikuara për mbështetje të DB2 Verzionet.',

	'LBL_SYSOPTS_DB_DIRECTIONS'			=> 'Duhet patur një klient Oracle të instaluar dhe konfigurar në qoftë se zgjidhni Oracle.',
	'ERR_DB_LOGIN_FAILURE_OCI8'			=> 'Hosti i bazës së të dhënave, emri i përdorimit dhe/ose fjalëkalimi është jo valide dhe një lidhje me bazën e të dhënave nuk mund të vendoset. Ju lutemi vendosni një host, emër përdorimi dhe fjalëkalim valid',
	'ERR_DB_OCI8_CONNECT'				=> 'Hosti i bazës së të dhënave, emri i përdorimit dhe/ose fjalëkalimi është jo valide dhe një lidhje me bazën e të dhënave nuk mund të vendoset. Ju lutemi vendosni një host, emër përdorimi dhe fjalëkalim valid',
	'ERR_DB_OCI8_VERSION'				=> 'Versioni juaj i Oracle (%s) nuk është i mbështetur nga Sugar. Do të duhet të instaloni një të përshtashëm me aplikimin e Sugar. Ju lutemi konsultoheni me Matriks përshtashmërinë në shënimet e publikuara për versionet Oracle të mbështetura.',
    'LBL_DBCONFIG_ORACLE'               => 'Ju lutemi mundësoni emrin e bazës suaj të të dhënave. Kjo do të jetë hapsirë e çregistruar e tabelës që është e drejtuar për përdoruesin tuaj (SID nga tnsnames.ora)',
	// seed Ent Reports
	'LBL_Q'								=> 'Pyetjet e mundësisë',
	'LBL_Q1_DESC'						=> 'Mundësitë sipas llojit',
	'LBL_Q2_DESC'						=> 'Mundësitë sipas llogarive',
	'LBL_R1'							=> '6 muaj Shitjes së Raportit të Tubacionit',
	'LBL_R1_DESC'						=> 'Mundësitë gjatë 6 muajve të ardhshëm ndahen sipas muajit dhe llojit',
	'LBL_OPP'							=> 'Mundësite të Dhënave Bazë',
	'LBL_OPP1_DESC'						=> 'Këtu është ku mund të ndryshoni pamjen dhe ndjenjën e pyetjes së rëndomtë',
	'LBL_OPP2_DESC'						=> 'Kjo pyetje do të afishohet nën pyetjen e parë në raportin',
    'ERR_DB_VERSION_FAILURE'			=> 'Çmundëso të kontrollohet versioni i bazës së të dhënave',

	'DEFAULT_CHARSET'					=> 'UTF-8',
    'ERR_ADMIN_USER_NAME_BLANK'         => 'Mundësoni emrin e përdorimit për admin përdoruesin e Sugar.',
	'ERR_ADMIN_PASS_BLANK'				=> 'Mundësoni fjalëkalimin për admin përdoruesin e Sugar.',

    'ERR_CHECKSYS'                      => 'Gabimet janë zbuluar gjatë kontrollit të pajtueshmërisë. Me qëllim që instalimi juaj SugarCRM të funksionije sic duhet, ju lutem të merni hapat e duhura për të trajtuar cështjet e listuara më poshtë ose të shtypni butonin edhe njëherë të verifikoni apo të provoni ta instaloni përsëri.',
    'ERR_CHECKSYS_CALL_TIME'            => 'Lejoni thirrjet në kohë të kalojnë ku Referenca është Aktive (kjo duhet të bëhet Off në php.ini)',

	'ERR_CHECKSYS_CURL'					=> 'Nuk u gjet: Planifikuesi i "Sugar" do të funksionojë me funksionalitet të kufizuar. Shërbimi i arkivimit të emaileve nuk do të funksionojë.',
    'ERR_CHECKSYS_IMAP'					=> 'Nuk gjendet:Emaill-at hyrse dhe Fushatat (Email) do të kërkojnë bibliotekat IMAP. Asnjëra nuk do të funksionojë.',
	'ERR_CHECKSYS_MSSQL_MQGPC'			=> 'Kuotat Magjike GPC nuk mund të shëndrrohen "Aktive" kur përdorni MS SQL Server.',
	'ERR_CHECKSYS_MEM_LIMIT_0'			=> 'Paralajmërim:',
	'ERR_CHECKSYS_MEM_LIMIT_1'			=> '(Përcakto këtë në',
	'ERR_CHECKSYS_MEM_LIMIT_2'			=> 'M ose më të madhe në php.ini dosjen tënde',
	'ERR_CHECKSYS_MYSQL_VERSION'		=> 'Versioni minimal 4.1.2- i gjetur:',
	'ERR_CHECKSYS_NO_SESSIONS'			=> 'Dështimi për të shkruar dhe leximi i seancave të variablave. Në pamundësi për të vazhduar me instalimin.',
	'ERR_CHECKSYS_NOT_VALID_DIR'		=> 'Nuk është valide drejtoria.',
	'ERR_CHECKSYS_NOT_WRITABLE'			=> 'Paralajmërim: e pashkruajtur',
	'ERR_CHECKSYS_PHP_INVALID_VER'		=> 'Versioni juaj i PHP nuk është i mbështetur nga Sugar. Do të duhet të instaloni një të përshtashëm me aplikimin e Sugar. Ju lutemi konsultoheni me Matriks përshtashmërinë në shënimet e publikuara për versionet PHP të mbështetura. Versioni juaj është',
	'ERR_CHECKSYS_IIS_INVALID_VER'      => 'Versioni juaj i IIS nuk është i mbështetur nga Sugar. Do të duhet të instaloni një të përshtashëm me aplikimin e Sugar. Ju lutemi konsultoheni me Matriks përshtashmërinë në shënimet e publikuara për versionet IIS të mbështetura. Versioni juaj është',
    'ERR_CHECKSYS_FASTCGI'              => 'Zbuluam se nuk po përdorni një hartë FastCGI për hapjen e PHP. Duhet të instaloni/konfiguroni një version që pajtohet me aplikacionin e Sugar. Ju lutemi konsultohuni me matricën e pajtueshmërisë në shënimet e publikuara për versionet e mbështetura. Për hollësi, ju lutemi shikoni  <a href="http://www.iis.net/php/" target="_blank" rel="nofollow noopener noreferrer">http://www.iis.net/php/</a> ',
	'ERR_CHECKSYS_FASTCGI_LOGGING'      => 'Për eksperiencën optimale duhet përdorur IIS/FastCGI sapi, të vendosur fastcgi.kycu në 0 te skedari juaj php.ini',
    'ERR_CHECKSYS_PHP_UNSUPPORTED'		=> 'Version PHP i pambështetur i instaluar',
    'LBL_DB_UNAVAILABLE'                => 'Baza e të dhënave e padisponueshme',
    'LBL_CHECKSYS_DB_SUPPORT_NOT_AVAILABLE' => 'Mbështetja e bazës së të dhënave nuk u gjet. Sigurohu që të kesh njësitë e nevojshme për një nga llojet e mëposhtme të bazës së mbështetur të të dhënave: MySQL, MS SQLServer, Oracle ose DB2. Mund të të duhet të heqësh komentin nga shtesa në skedarin php.ini ose të përpilosh sërish me skedarin e duhur binar, në varësi të versionit tënd të PHP. Shiko manualin PHP për më shumë informacion se si të aktivizosh mbështetjen e bazës së të dhënave.',
    'LBL_CHECKSYS_XML_NOT_AVAILABLE'        => 'Funksionet që lidhen me XML bibliotekat Parser që janë të nevojshme nga ana aplikimit Sugar nuk janë gjetur. Ju mund të keni nevojë të pa pakoment në shtrirjen e dosjes php.ini, ose të përpiloni dosjen binare të drejtë në varësi të versionit tuaj të PHP. Ju lutemi referojuni në PHP manualin tuaj për më shumë informacione.',
    'LBL_CHECKSYS_CSPRNG' => 'Gjeneruesi i numrave të rastësishëm',
    'ERR_CHECKSYS_MBSTRING'             => 'Funksionet lidhur me zgjerimin e funksionit Strings PHP (mbstring) që janë të nevojshmë nga ana e aplikimit Sugar nuk u gjetën.<br /><br />Në përgjithësi, moduli mbstring nuk është i aktivizuar nga default në PHP dhe duhet të aktivizoni llogarinë tuaj me --aktivizo--mbstring kur PHP është ndërtuar binare.',
    'ERR_CHECKSYS_SESSION_SAVE_PATH_NOT_SET'       => 'Vendosja e sesionit save_path setting në dosjen e konfigurimit tuaj (php.ini) nuk është vendosur ose është vendosur në një dosje që nuk egziston.',
    'ERR_CHECKSYS_SESSION_SAVE_PATH_NOT_WRITABLE'  => 'Vendosja e sesionit save_path setting në dosjen e konfigurimit tuaj (php.ini) është vendosur në një dosje që nuk është e lexueshme. Ju lutemi të merrni hapat e nevojshme pë të bërë dosjen e lexueshme. Në varësi të sistemit tuaj operativ, kjo mund të kërkoje nga ju ndryshimin e të drejtave në drejtimin chmod  766, ose klikoni në të djathtë mbi emrin e skedarit për të hyrë në pronat dhe hiqni nga lista leximin e opsionit të vetëm.',
    'ERR_CHECKSYS_CONFIG_NOT_WRITABLE'  => 'Dokumenti i konfigurimit ekziston, por nuk është i regjistruar. Ju lutemi të merrni hapat e nevojshëm për të bërë dokumentin e regjistruar. Në varësi nga sistemi juaj operativ, kjo mund të kërkojë nga ju të ndryshoni lejet me drejtimin chmod 766, ose klikoni drejtë mbi emrin e dokumentit për të hyrë në pronat dhe zgjidhni opsionin e vetëm për të lexuar.',
    'ERR_CHECKSYS_CONFIG_OVERRIDE_NOT_WRITABLE'  => 'Dokumenti i konfigurimit ekziston, por nuk është i regjistruar. Ju lutemi të merrni hapat e nevojshëm për të bërë dokumentin e regjistruar. Në varësi nga sistemi juaj operativ, kjo mund të kërkojë nga ju të ndryshoni lejet me drejtimin chmod 766, ose klikoni drejtë mbi emrin e dokumentit për të hyrë në pronat dhe zgjidhni opsionin e vetëm për të lexuar.',
    'ERR_CHECKSYS_CUSTOM_NOT_WRITABLE'  => 'Drejtoria e përshtatur ekziston, por nuk është e regjistruar. Ju mund të ndryshoni lejet për (chmod 766) ose klikoni drejtë mbi atë dhe zgjidhni opsionin e vetëm të leximit, në varësi nga Sistemi juaj Operativ. Ju lutemi të merrni hapat e nevojshëm për të bërë dokumentin e regjistruar.',
    'ERR_CHECKSYS_FILES_NOT_WRITABLE'   => "Dokumentët apo dosjet e listuara më poshtë nuk janë të regjistruara ose janë humbur dhe nuk mund të krijohen. Në varësi nga Sistemi juaj Operativ, korrigjimi mund të kërkojë nga ju të ndryshoni lejet për dokumentët apo dosjet kryesore (chmod 766), ose klikoni drejtë në dosjen kryesore dhe zgjidhni opsionin \"lexoni vetëm\" dhe aplikoni atë në të gjitha nëndosjet.",
	'ERR_CHECKSYS_SAFE_MODE'			=> 'Mënyra e sigurt është aktive (ju mund të dëshironi të çaktivizoni në php.ini)',
    'ERR_CHECKSYS_ZLIB'					=> 'Mbështetja Zlib nuk u gjet: SugarCRM korr përfitime të mëdha të performancës me ngjeshje zlib.',
    'ERR_CHECKSYS_ZIP'					=> 'ZIP mbështjetja nuk është gjetur; SugarCRM ka nevojë për ZIP mbështetje për të procesuar dosjet e përmbledhura.',
    'ERR_CHECKSYS_BCMATH'				=> 'BCMATH mbështetja nuk u gjet: SugarCRM i duhet BCMATH mbështetje për të llogaritur në mënyrë precize.',
    'ERR_CHECKSYS_HTACCESS'             => 'Testimi për rishkruarjen e .htaccess dështoi. Kjo zakonisht don të thotë se ju nuk keni AllowOverride set up për Sugar.',
    'ERR_CHECKSYS_CSPRNG' => 'Përjashtim CSPRNG',
	'ERR_DB_ADMIN'						=> 'Me kusht që Baza e të dhënave të emrit përdorues dhe fjalëkalimit të administratorit është jovalid, dhe lidhja për bazën e të dhënave nuk mund të krijohet. Ju lutem shkruani emrin valid të përdoruesit dhe fjalëkalimin.',
    'ERR_DB_ADMIN_MSSQL'                => 'Me kusht që Baza e të dhënave të emrit përdorues dhe fjalëkalimit të administratorit është jovalid, dhe lidhja për bazën e të dhënave nuk mund të krijohet. Ju lutem shkruani emrin valid të përdoruesit dhe fjalëkalimin.',
	'ERR_DB_EXISTS_NOT'					=> 'Baza e të dhënave e veçuar nuk ekziston.',
	'ERR_DB_EXISTS_WITH_CONFIG'			=> 'Baza e të dhënave tashmë ekziston me të dhënat e konfigurimit. Për të drejtuar një instalim me bazën e të dhënave të zgjedhur, ju lutem ri-drejtoni instalimin dhe zgjidhni "Hiqni dhe rikrijoni tabelat ekzistuese SugarCRM?" Për të përmirësuar, përdorni Upgrade Wizard në Admin Console. Ju lutemi lexoni dokumentacionin e përmirësuar të vendosur këtu.',
	'ERR_DB_EXISTS'						=> 'Baza e të dhënave e dhënë tashmë ekziston - nuk mund të krijohet një tjetër me të njejtin emër.',
    'ERR_DB_EXISTS_PROCEED'             => 'Emri i dhënë së Bazës së të dhënave tashmë ekziston. Ju mund<br />1. goditni mbrapa butonin dhe zgjidhni një emër të ri të bazës së të dhënave<br />2. klikoni më tej dhe vazhdoni, por të gjitha tabelat ekzistuese mbi këtë bazë të dhënave do të hiqen. Kjo do të thotë se tabelat tuaja dhe të dhënat do të jenë të copëtuara.',
	'ERR_DB_HOSTNAME'					=> 'Emri i hostit nuk mund të jetë zbrazët.',
	'ERR_DB_INVALID'					=> 'Është selektuar lloj jovalid i bazës së të dhënave',
	'ERR_DB_LOGIN_FAILURE'				=> 'Hosti i bazës së të dhënave, emri i përdorimit dhe/ose fjalëkalimi është jo valide dhe një lidhje me bazën e të dhënave nuk mund të vendoset. Ju lutemi vendosni një host, emër përdorimi dhe fjalëkalim valid',
	'ERR_DB_LOGIN_FAILURE_MYSQL'		=> 'Hosti i bazës së të dhënave, emri i përdorimit dhe/ose fjalëkalimi është jo valide dhe një lidhje me bazën e të dhënave nuk mund të vendoset. Ju lutemi vendosni një host, emër përdorimi dhe fjalëkalim valid',
	'ERR_DB_LOGIN_FAILURE_MSSQL'		=> 'Hosti i bazës së të dhënave, emri i përdorimit dhe/ose fjalëkalimi është jo valide dhe një lidhje me bazën e të dhënave nuk mund të vendoset. Ju lutemi vendosni një host, emër përdorimi dhe fjalëkalim valid',
	'ERR_DB_MYSQL_VERSION'				=> 'Versioni juaj i MySQL(%s) nuk është i mbështetur nga Sugar. Do të duhet të instaloni një të përshtashëm me aplikimin e Sugar. Ju lutemi konsultoheni me Matriks përshtashmërinë në shënimet e publikuara për versionet MySQL të mbështetura.',
	'ERR_DB_NAME'						=> 'Emri i bazës së të dhënave nuk mund të jetë i zbrazët.',
	'ERR_DB_NAME2'						=> "Emri i bazës së të dhënave nuk mund të përmbaj &#39;\\&#39;, &#39;/&#39;, ose &#39;.&#39;",
    'ERR_DB_MYSQL_DB_NAME_INVALID'      => "Emri i bazës së të dhënave nuk mund të përmbaj &#39;\\&#39;, &#39;/&#39;, ose &#39;.&#39;",
    'ERR_DB_MSSQL_DB_NAME_INVALID'      => "Emri i bazës së të dhënave nuk mund të filloj me numër, &#39;#&#39;, ose &#39;@&#39; dhe të përmbaj hapsirë, &#39;\"&#39;, \"&#39;\", &#39;*&#39;, &#39;/&#39;, &#39;\\&#39;, &#39;?&#39;, &#39;:&#39;, &#39;<&#39;, &#39;>&#39;, &#39;&&#39;, &#39;!&#39;, ose &#39;-&#39;",
    'ERR_DB_OCI8_DB_NAME_INVALID'       => "Emri i bazës së të dhënave mund të përbëhet nga karaktere alfanumerike dhe simbolet '#', '_', '-', ':', '.', '/' or '$'",
	'ERR_DB_PASSWORD'					=> 'Fjalëkalimet e parashikuara për administratorin e bazës së të dhënave Sugar nuk përputhen. Ju lutem ri-shkruani fjalëkalimet e njëjta në fushat e fjalëkalimit.',
	'ERR_DB_PRIV_USER'					=> 'Sigurimi i emrit përdorues të administratorit të bazës së të dhënave. Ky përdorues është i nevojshëm për lidhjen fillestare të bazës së të dhënave.',
	'ERR_DB_USER_EXISTS'				=> 'Emri i përdoruesit të bazës së të dhënave për përdoruesit Sugar tashmë ekziston -- nuk mund të krijojë një tjetër me të njëjtin emër. Ju lutemi shkruani një emër përdoruesi të ri.',
	'ERR_DB_USER'						=> 'Futni një emër përdoruesi për bazën e të dhënave të administratorit Sugar.',
	'ERR_DBCONF_VALIDATION'				=> 'Ju lutemi ndreqni gabimet vijuese para se të vazhdoni:',
    'ERR_DBCONF_PASSWORD_MISMATCH'      => 'Fjalëkalimet e ofruara për përdoruesit e bazës së të dhënave Sugar nuk përputhen. Ju lutem ri-shkruani fjalëkalimet e njëjta në fushat fjalëkalimin.',
	'ERR_ERROR_GENERAL'					=> 'Gabimet e mëposhtme janë hasur:',
	'ERR_LANG_CANNOT_DELETE_FILE'		=> 'Nuk mund të fshijë dosjen:',
	'ERR_LANG_MISSING_FILE'				=> 'Nuk mund të gjejë dosjen:',
	'ERR_LANG_NO_LANG_FILE'			 	=> 'Nuk u gjet paket të gjuhës në brendinë e përfshi/gjuhë',
	'ERR_LANG_UPLOAD_1'					=> 'Nodhi problem gjatë ngarkimit tuaj. Ju lutemi provoni përsëri.',
	'ERR_LANG_UPLOAD_2'					=> 'Paketat e gjuhëve duhet të jenë tek arkivat e ZIP.',
	'ERR_LANG_UPLOAD_3'					=> 'PHP nuk mund të lëvize dokumentin temp tek dosja e përmisuar.',
	'ERR_LICENSE_MISSING'				=> 'Mungojnë fusha të nevojshme.',
	'ERR_LICENSE_NOT_FOUND'				=> 'Dosja e licencës nuk u gjet!',
	'ERR_LOG_DIRECTORY_NOT_EXISTS'		=> 'Dosja e dhënë e regjistrimit nuk është dosje valide.',
	'ERR_LOG_DIRECTORY_NOT_WRITABLE'	=> 'Dosja e dhënë e regjistrimit nuk është dosje e regjistruar.',
	'ERR_LOG_DIRECTORY_REQUIRED'		=> 'Regjistrimi i dosjes është i nevojshëm në qoftë se ju dëshironi ta specifikoni vetë.',
	'ERR_NO_DIRECT_SCRIPT'				=> 'E pamundur të procesojë skriptën në mënyrë direkte.',
	'ERR_NO_SINGLE_QUOTE'				=> 'Nuk mund të përdor shenjën e citimit për',
	'ERR_PASSWORD_MISMATCH'				=> 'Fjalëkalimet e mundësuara për Sugar nuk përputhen. Ju lutemi rishkruani fjalëkalime të njejta në fushat e fjalëkalimeve;',
	'ERR_PERFORM_CONFIG_PHP_1'			=> 'Nuk mund të shkruaj conf.php dosjen',
	'ERR_PERFORM_CONFIG_PHP_2'			=> 'Ju mund të vazhdoni këtë instalim me dorë duke krijuar dokumentin config.php dhe futje të informatave të konfigurimit më poshtë në dokumentin config.php. Megjithatë, ju duhet të krijoni dokumentin config.php para se të vazhdoni me hapin tjetër.',
	'ERR_PERFORM_CONFIG_PHP_3'			=> 'A u kujtuat të krijoni config.php dosje?',
	'ERR_PERFORM_CONFIG_PHP_4'			=> 'Kujdes: Nuk mund të shkruaj tek dokumenti config.php. Ju lutemi të siguroni se ekziston.',
	'ERR_PERFORM_HTACCESS_1'			=> 'Nuk mund të shkruaj në',
	'ERR_PERFORM_HTACCESS_2'			=> 'dosje.',
	'ERR_PERFORM_HTACCESS_3'			=> 'Nëse ju doni të siguroni dokumentin e regjistrimit tuaj nga të qenit të arritshëm nëpërmjet shfletuesit,  krijojë një .htaccess në direktorinë tuaj të regjistrimit me vijën.:',
	'ERR_PERFORM_NO_TCPIP'				=> 'Ne nuk mund të zbulojmë një lidhje në Internet. Kur ju keni një lidhje, ju lutem vizitoni http://www.sugarcrm.com/home/index.php?option=com_extended_registration&task=register regjistroheni me SugarCRM. Duke na lënë të dimë pak rreth asaj se si kompania juaj ka në plan të përdorë SugarCRM, ne mund të sigurojmë se jemi gjithmonë në dhënien e drejtë të aplikimit për nevojat e biznesit tuaj.',
	'ERR_SESSION_DIRECTORY_NOT_EXISTS'	=> 'Sesioni i listës së dhënë nuk është listë valide.',
	'ERR_SESSION_DIRECTORY'				=> 'Sesionit i listës së dhënë nuk është listë e regjistruar.',
	'ERR_SESSION_PATH'					=> 'Sesioni i rugës kërkohet nëse ju dëshironi të specifikoni.',
	'ERR_SI_NO_CONFIG'					=> 'Ju nuk keni përfshirë config_si.php në rrënjën e dokumentit, ose ju nuk e keni të përcaktuar $ sugar_config_si në config.php',
	'ERR_SITE_GUID'						=> 'Aplikimi i identitetit është i nevojshëm nësë ju dëshironi të specifikoni.',
    'ERROR_SPRITE_SUPPORT'              => "Aktualisht ne nuk jemi në gjendje për të gjetur vendndodhjen e bibliotekës GD,si rezultat ju nuk do të jeni në gjendje të përdorni funksionalitetin CSS Sprite.",
	'ERR_UPLOAD_MAX_FILESIZE'			=> 'Kujdes: Konfigurimi juaj PHP duhet të ndryshohet për të lejuar dosjet të paktën 6MB për t&#39;u ngarkuar së fundi.',
    'LBL_UPLOAD_MAX_FILESIZE_TITLE'     => 'Ngarko madhësinë e dosjes',
	'ERR_URL_BLANK'						=> 'Mundëso URL e bazës për shemuj të Sugar.',
	'ERR_UW_NO_UPDATE_RECORD'			=> 'Nuk mundej të gjente regjistrimin e instalimit',
    'ERROR_FLAVOR_INCOMPATIBLE'         => 'Skedari i ngarkuar nuk përputhet me shijen (edicioni profesional, i ndërmarrjes ose final) e Sugar: ',
	'ERROR_LICENSE_EXPIRED'				=> "Gabim: licenca juaj ka skaduar",
	'ERROR_LICENSE_EXPIRED2'			=> "ditë më parë. Ju lutemi shkoni në Licence Menaxhment në ekranin e admin për të shtypur çelësin e ri të licencimit. Në qoftë se nuk shtypni një çelës të ri të licencimit, nuk do të mundeni më të keni qasje në këtë aplikim.",
	'ERROR_MANIFEST_TYPE'				=> 'Dosja e manifestuar duhet të përcaktoj llojin e paketit.',
	'ERROR_PACKAGE_TYPE'				=> 'Dosja e manifestuar përcakton lloji paketi që nuk njihet.',
	'ERROR_VALIDATION_EXPIRED'			=> "Gabim: çelsi juaj i validimit ka skaduar",
	'ERROR_VALIDATION_EXPIRED2'			=> "ditë më parë. Ju lutemi shkoni në Licence Menaxhment në ekranin e admin për të shtypur çelësin e ri të licencimit. Në qoftë se nuk shtypni një çelës të ri të licencimit, nuk do të mundeni më të keni qasje në këtë aplikim.",
	'ERROR_VERSION_INCOMPATIBLE'		=> 'Dosja e ngarkuar nuk është e përshtatshme me versionin e Sugar.',

	'LBL_BACK'							=> 'Kthe',
    'LBL_CANCEL'                        => 'Anulo',
    'LBL_ACCEPT'                        => 'Pranoj',
	'LBL_CHECKSYS_1'					=> 'Në mënyrë që instalimi Juaj SugarCRM të funksionojnë siç duhet, ju lutemi të siguroni të gjitha sendet e sistemit të kontrolit të listuara më poshtë nësë janë të gjelbër. Nëse janë të kuqe, ju lutemi të merrni hapat e nevojshëm për t&#39;i rregulluar ato.<br /><br />Për ndihmë në këto sisteme të kontrollit, ju lutem vizitoni Sugar Wiki.',
	'LBL_CHECKSYS_CACHE'				=> 'Shkruhet Cache Nën-Listat',
    'LBL_DROP_DB_CONFIRM'               => 'Emri i dhënë të Bazës së të dhënave tashmë ekziston.<br />Ju mund ose:<br />1. Kliko në butonin Anulo dhe zgjidhni një emër të ri të bazës së të dhënave, ose<br />2. Klikoni butonin Prano dhe vazhdoni. Të gjitha tabelat ekzistuese në bazën e të dhënave do të hiqet. Kjo do të thotë se të gjitha tabelat dhe të dhënat para-ekzistuese do të fshihen.',
	'LBL_CHECKSYS_CALL_TIME'			=> 'PHP Lejon Kohën e Thirrjes së Kalimit të Referencës së fikur',
    'LBL_CHECKSYS_COMPONENT'			=> 'Përbërës',
	'LBL_CHECKSYS_COMPONENT_OPTIONAL'	=> 'Përbërës fakultativ',
	'LBL_CHECKSYS_CONFIG'				=> 'Shkruhet konfigurimi i SugarCRM të dokumentit (config.php)',
	'LBL_CHECKSYS_CONFIG_OVERRIDE'		=> 'Shkruhet konfigurimi i SugarCRM të dokumentit (config_override.php)',
	'LBL_CHECKSYS_CURL'					=> 'cURL modula',
    'LBL_CHECKSYS_SESSION_SAVE_PATH'    => 'Sesioni i ruajtjes për rrugën e vendosjes',
	'LBL_CHECKSYS_CUSTOM'				=> 'Shkruhet Drejtoria e përshtatur',
	'LBL_CHECKSYS_DATA'					=> 'Shkruhen të Dhënat e Nën-Drejtorive',
	'LBL_CHECKSYS_IMAP'					=> 'IMAP Modula',
	'LBL_CHECKSYS_MQGPC'				=> 'Magic Kuota GPC',
	'LBL_CHECKSYS_MBSTRING'				=> 'MB Moduli i Vargjeve',
	'LBL_CHECKSYS_MEM_OK'				=> 'OK (Pa Limit)',
	'LBL_CHECKSYS_MEM_UNLIMITED'		=> 'OK (e palimituar)',
	'LBL_CHECKSYS_MEM'					=> 'PHP Memori Limiti',
	'LBL_CHECKSYS_MODULE'				=> 'Modulet regjistrohen Nën-Listat dhe Dosjet',
	'LBL_CHECKSYS_MYSQL_VERSION'		=> 'MySQL Versioni',
	'LBL_CHECKSYS_NOT_AVAILABLE'		=> 'E padisponuar',
	'LBL_CHECKSYS_OK'					=> 'OK',
	'LBL_CHECKSYS_PHP_INI'				=> 'Lokacioni në konfigurimit tuaj PHP të dosjes (php.ini):',
	'LBL_CHECKSYS_PHP_OK'				=> 'OK (ver',
	'LBL_CHECKSYS_PHPVER'				=> 'PHP Versioni',
    'LBL_CHECKSYS_IISVER'               => 'IIS Versioni',
    'LBL_CHECKSYS_FASTCGI'              => 'FastCGI',
	'LBL_CHECKSYS_RECHECK'				=> 'Rikontrollo',
	'LBL_CHECKSYS_SAFE_MODE'			=> 'PHP Mënyra e sigurtë është fikur',
	'LBL_CHECKSYS_SESSION'				=> 'Sesioni i Regjistrimit të Ruajtjes së Rrugës (',
	'LBL_CHECKSYS_STATUS'				=> 'Statusi',
	'LBL_CHECKSYS_TITLE'				=> 'Kontrollo Sistemin e Pranimit',
	'LBL_CHECKSYS_VER'					=> 'Gjetur: ( ver',
	'LBL_CHECKSYS_XML'					=> 'XML Analizë',
	'LBL_CHECKSYS_ZLIB'					=> 'ZLIB  Modul i përmbledhur',
	'LBL_CHECKSYS_ZIP'					=> 'Trajtimi i Modulit ZIP',
    'LBL_CHECKSYS_BCMATH'				=> 'Moduli për precizitet në llogaritje',
    'LBL_CHECKSYS_HTACCESS'				=> 'Lejo mundësimin e .htaccess',
    'LBL_CHECKSYS_FIX_FILES'            => 'Ju lutemi të rregulloni dosjet e mëposhtme ose drejtoritë përpara procedurës:',
    'LBL_CHECKSYS_FIX_MODULE_FILES'     => 'Ju lutemi të rregulloni modulin e drejtorive të mëposhtme dhe dosjet nën ata përpara procedurës:',
    'LBL_CHECKSYS_UPLOAD'               => 'Regjistrimi në Dosjen e Ngarkuar',
    'LBL_CLOSE'							=> 'Mbyll:',
    'LBL_THREE'                         => '3',
	'LBL_CONFIRM_BE_CREATED'			=> 'është krijuar',
	'LBL_CONFIRM_DB_TYPE'				=> 'lloji i bazës së të dhënave',
	'LBL_CONFIRM_DIRECTIONS'			=> 'Ju lutemi konfirmoni cilësimet më poshtë. Nëse dëshironi të ndryshoni ndonjë nga vlerat, kliko "Prapa" për të redaktuar. Përndryshe, kliko "Vazhdo" për të filluar instalimin.',
	'LBL_CONFIRM_LICENSE_TITLE'			=> 'Informacioni i licencës',
	'LBL_CONFIRM_NOT'					=> 'nuk është',
	'LBL_CONFIRM_TITLE'					=> 'Konfirmo parametrat',
	'LBL_CONFIRM_WILL'					=> 'do të',
	'LBL_DBCONF_CREATE_DB'				=> 'Krijo bazë  të të dhënave',
	'LBL_DBCONF_CREATE_USER'			=> 'Krijo përdorues  [Alt+N]',
	'LBL_DBCONF_DB_DROP_CREATE_WARN'	=> 'Kujdes:Të gjitha të dhënat e Sugar do të fshihen<br />Nëse kjo kuti është e kontrolluar.',
	'LBL_DBCONF_DB_DROP_CREATE'			=> 'Heqja dhe Rikrijimi i tabelave ekzistuese Sugar?',
    'LBL_DBCONF_DB_DROP'                => 'Lësho tabelat',
    'LBL_DBCONF_DB_NAME'				=> 'Emri i bazës së të dhënave',
	'LBL_DBCONF_DB_PASSWORD'			=> 'Fjalëkalimi i Përdoruesit të Bazës së të dhënave Sugar',
	'LBL_DBCONF_DB_PASSWORD2'			=> 'Ri-shkruani Fjalëkalimin e Përdoruesit të Bazën e të dhënave Sugar',
	'LBL_DBCONF_DB_USER'				=> 'Identifikimi i Bazës së të dhënave Sugar',
    'LBL_DBCONF_SUGAR_DB_USER'          => 'Identifikimi i Bazës së të dhënave Sugar',
    'LBL_DBCONF_DB_ADMIN_USER'          => 'Baza e të dhënave të emrit përdorues të administratorit',
    'LBL_DBCONF_DB_ADMIN_PASSWORD'      => 'Fjalëkalimi i Bazës së të dhënave Admin',
	'LBL_DBCONF_DEMO_DATA'				=> 'Riteni Bazën e të Dhënave me të dhënat Demo?',
    'LBL_DBCONF_DEMO_DATA_TITLE'        => 'Zgjidhni të Dhënat Demo',
	'LBL_DBCONF_HOST_NAME'				=> 'Emri i hostit',
	'LBL_DBCONF_HOST_INSTANCE'			=> 'Host Raste',
	'LBL_DBCONF_HOST_PORT'				=> 'Porta',
    'LBL_DBCONF_SSL_ENABLED'            => 'Enable SSL connection',
	'LBL_DBCONF_INSTRUCTIONS'			=> 'Ju lutem shkruani më poshtë informacionin e konfigurimit tuaj të bazës së të dhënave. Nëse jeni të pasigurt për atë se cka të plotësoni, ne ju sugjerojmë që të përdorni vlera të parazgjedhur.',
	'LBL_DBCONF_MB_DEMO_DATA'			=> 'Përdor multi-byte tekstin në të dhënat demo?',
    'LBL_DBCONFIG_MSG2'                 => 'Emri i web serverit ose makinës (host) në të cilën baza e të dhënave gjenden (të tilla si hosti lokal apo www.mydomain.com):',
    'LBL_DBCONFIG_MSG3'                 => 'Emri i bazës së të dhënave që do të përmbajë të dhënat për rastin e Sugar që ju jeni gati për ta instaluar:',
    'LBL_DBCONFIG_B_MSG1'               => 'Emri i përdoruesit dhe fjalëkalimi i administratorit të bazës së të dhënave që mund të krijojë tabelat e bazës së të dhënave dhe të përdoruesve dhe të cilët mund të shkruajnë në bazën e të dhënave është e nevojshme në mënyrë që të krijojnë bazën e të dhënave Sugar.',
    'LBL_DBCONFIG_SECURITY'             => 'Për qëllime të sigurisë, ju mund të specifikoni një përdorues të veçantë të bazës së të dhënave për të lidhur bazën e të dhënave Sugar. Përdoruesi duhet të jetë në gjendje të shkruaje, të rinovoje dhe të marrë të dhëna mbi bazën e të dhënave Sugar që do të krijohet për këtë rast. Ky përdorues mund të jetë administratori i bazës së të dhënave të specifikuar më sipër, ose ju mund të ofroni informacione të reja ose ekzistuese për përdoruesit e bazës së të dhënave.',
    'LBL_DBCONFIG_AUTO_DD'              => 'Bëje për mua',
    'LBL_DBCONFIG_PROVIDE_DD'           => 'Ofrimi i përdoruesit ekzistues',
    'LBL_DBCONFIG_CREATE_DD'            => 'Definimi i përdoruesit për të krijuar',
    'LBL_DBCONFIG_SAME_DD'              => 'Njësoj si Përdoruesi Admin',
	//'LBL_DBCONF_I18NFIX'              => 'Apply database column expansion for varchar and char types (up to 255) for multi-byte data?',
    'LBL_FTS'                           => 'Kërkim i tekstit të plotë',
    'LBL_FTS_INSTALLED'                 => 'Instaluar',
    'LBL_FTS_INSTALLED_ERR1'            => 'Kërkimi i aftësive të tekstit të plotë nuk është i instaluar.',
    'LBL_FTS_INSTALLED_ERR2'            => 'Ju prapë mund të instaloni, por nuk do të jeni në gjendje të përdorni kërkimin e funksionalitetin në tekstit të plotë. Ju lutem referojuni në serverit tuaj të bazës së të dhënave udhëzuesit të instalimit se si ta bëni këtë, ose kontaktoni administratorin tuaj.',
	'LBL_DBCONF_PRIV_PASS'				=> 'Privilegjimi i Bazës së të dhënave të Përdoruesit së Fjalëkalimit',
	'LBL_DBCONF_PRIV_USER_2'			=> 'Llogaria e Bazës së të dhënave më sipër është një përdorues i privilegjuar?',
	'LBL_DBCONF_PRIV_USER_DIRECTIONS'	=> 'Ky përdorues i privilegjuar të bazës së të dhënave duhet të kenë lejet e duhura për të krijuar një bazë të dhënash, rënie / krijim të tabelave, dhe për të krijuar përdoruesin. Ky përdorues i privilegjuar të bazës së të dhënave do të përdoret vetëm për të kryer këto detyra të nevojshme gjatë procesit të instalimit. Ju gjithashtu mund të përdorni bazës e njejtë të dhënave të përdoruesit si më sipër në qoftë se përdoruesi ka privilegje të mjaftueshme.',
	'LBL_DBCONF_PRIV_USER'				=> 'Privilegjimi i Bazës së të dhënave të Emrit të Përdoruesit',
	'LBL_DBCONF_TITLE'					=> 'Konfigurimi i Bazës së të Dhënave',
    'LBL_DBCONF_TITLE_NAME'             => 'Sigurimi i Emrit të Bazës së të Dhënave',
    'LBL_DBCONF_TITLE_USER_INFO'        => 'Sigurimi i Informacionit të Përdoruesit së bazës së të Dhënave',
	'LBL_DISABLED_DESCRIPTION_2'		=> 'Pas këtij ndryshimi që është bërë, ju mund të klikoni në butonin "Fillo" më poshtë për të filluar instalimin tuaj. Pas instalimit të kompletuar, ju do të dëshironi të ndryshoni vlerën për &#39;instaluesin e _mbyllur&#39; në të &#39;vërtetë&#39;.',
	'LBL_DISABLED_DESCRIPTION'			=> 'Instaluesi tashmë është drejtuar një herë. Si masë sigurie, ajo ka qenë e paaftë të drejtohet për herë të dytë. Nëse ju jeni absolutisht të sigurtë që doni ta drejtoni atë përsëri, ju lutem shkoni në dokumentin config.php dhe gjeni (ose shtoni) një ndryshore të quajtur &#39;instaluesi i_mbyllur&#39; dhe e vendosni atë në &#39;false&#39;.Linja duhet të duket si ky:',
	'LBL_DISABLED_HELP_1'				=> 'Për ndihmë të instalimit, ju lutemi vizitoni SugarCRM',
    'LBL_DISABLED_HELP_LNK'               => 'http://www.sugarcrm.com/forums/',
	'LBL_DISABLED_HELP_2'				=> 'mbështet forumet',
	'LBL_DISABLED_TITLE_2'				=> 'Instalimi i SugarCRM është çaktivizuar',
	'LBL_DISABLED_TITLE'				=> 'Instalimi i SugarCRM i çaktivzuar',
	'LBL_EMAIL_CHARSET_DESC'			=> 'Cakto karakterin më të zakonshëm që përdoret në vendndodhjen tuaj',
	'LBL_EMAIL_CHARSET_TITLE'			=> 'Parametrat e emailit të drejtuar për jashta',
    'LBL_EMAIL_CHARSET_CONF'            => 'Përcaktimi i karakterit të emailt të dërguar për jashta',
	'LBL_HELP'							=> 'Ndihmë',
    'LBL_INSTALL'                       => 'Instalo',
    'LBL_INSTALL_TYPE_TITLE'            => 'Opcionet e instalimit',
    'LBL_INSTALL_TYPE_SUBTITLE'         => 'Zgjidh llojin e instalimit',
    'LBL_INSTALL_TYPE_TYPICAL'          => 'Instalim tipik',
    'LBL_INSTALL_TYPE_CUSTOM'           => 'Instalim i zakonshëm',
    'LBL_INSTALL_TYPE_MSG1'             => 'Çelësi është i nevojshëm për aplikimin e funksionimit të përgjithshëm, por kjo nuk është e nevojshme për instalim. Ju nuk keni nevojë për të hyrë në butonin në këtë moment, por ju duhet të siguroni çelësin pasi që e keni instaluar aplikacionin.',
    'LBL_INSTALL_TYPE_MSG2'             => 'Kërkon informata minimale për instalim. E rekomanduar për përdorues të ri',
    'LBL_INSTALL_TYPE_MSG3'             => 'Siguroni opsionet shtesë për t&#39;i vendosur gjatë instalimit. Shumica nga këto opsionet gjithashtu janë në dispozicion pas instalimit në ekranet e adminit. Rekomanduar për përdoruesit e përparuar.',
	'LBL_LANG_1'						=> 'Për të përdorur një gjuhë në Sugar përveç gjuhës tjetër të parazgjedhur (SHBA-Anglisht), ju mund të ngarkoni dhe instaloni gjuhën që në këtë moment. Ju do të jeni në gjendje të ngarkoni dhe instaloni paketa gjuhësore në kuadër të aplikacionit Sugar. Nëse dëshironi të kaloni këtë hap, klikoni Vazhdo.',
	'LBL_LANG_BUTTON_COMMIT'			=> 'Instalo',
	'LBL_LANG_BUTTON_REMOVE'			=> 'Hiqe',
	'LBL_LANG_BUTTON_UNINSTALL'			=> 'çinstalo',
	'LBL_LANG_BUTTON_UPLOAD'			=> 'Ngarko',
	'LBL_LANG_NO_PACKS'					=> 'asnjë',
	'LBL_LANG_PACK_INSTALLED'			=> 'Paketat vijuese të gjuhës janë instaluar:',
	'LBL_LANG_PACK_READY'				=> 'Paketat e e mëposhtme gjuhësore janë të gatshme për t&#39;u instaluar:',
	'LBL_LANG_SUCCESS'					=> 'Gjuha e pakos u ngarkua me sukses.',
	'LBL_LANG_TITLE'			   		=> 'paketa e gjuhës',
    'LBL_LAUNCHING_SILENT_INSTALL'     => 'Instaloni Sugar tani. Kjo ndoshta mund të marrë disa minuta.',
	'LBL_LANG_UPLOAD'					=> 'Ngarkoni Pakon e Gjuhës',
	'LBL_LICENSE_ACCEPTANCE'			=> 'Licenca e Pranimit',
    'LBL_LICENSE_CHECKING'              => 'Kontrollimi i sistemit për përputhshmërinë.',
    'LBL_LICENSE_CHKENV_HEADER'         => 'Kontrollimi i Ambientit',
    'LBL_LICENSE_CHKDB_HEADER'          => 'Po verifikohen kredencialet DB, FTS.',
    'LBL_LICENSE_CHECK_PASSED'          => 'Sistemin e kaluar kontrolloni për përputhshmërinë.',
    'LBL_LICENSE_REDIRECT'              => 'Pëcjellni në',
	'LBL_LICENSE_DIRECTIONS'			=> 'Nëse keni informacionin e licencës tuaj, ju lutem shkruani atë në fushat më poshtë.',
	'LBL_LICENSE_DOWNLOAD_KEY'			=> 'Shkruani shkarko çelësin',
	'LBL_LICENSE_EXPIRY'				=> 'data e skadimit',
	'LBL_LICENSE_I_ACCEPT'				=> 'Pranoj',
	'LBL_LICENSE_NUM_USERS'				=> 'Numri i përdoruesve',
	'LBL_LICENSE_PRINTABLE'				=> 'Grafikë e printueshme',
    'LBL_PRINT_SUMM'                    => 'Përmbledhje të shtypura',
	'LBL_LICENSE_TITLE_2'				=> 'SugarCRM Licenca',
	'LBL_LICENSE_TITLE'					=> 'Informacioni i licencës',
	'LBL_LICENSE_USERS'					=> 'Përdoruesit e licencuar',

	'LBL_LOCALE_CURRENCY'				=> 'Parametrat aktuale',
	'LBL_LOCALE_CURR_DEFAULT'			=> 'Monedhë e gabuar',
	'LBL_LOCALE_CURR_SYMBOL'			=> 'Simboli i monedhës',
	'LBL_LOCALE_CURR_ISO'				=> 'Kodi i monedhës (ISO 4217)',
	'LBL_LOCALE_CURR_1000S'				=> 'Ndarësi 1000s',
	'LBL_LOCALE_CURR_DECIMAL'			=> 'Separator Decimal',
	'LBL_LOCALE_CURR_EXAMPLE'			=> 'Shembull',
	'LBL_LOCALE_CURR_SIG_DIGITS'		=> 'Shifra të konsiderueshme',
	'LBL_LOCALE_DATEF'					=> 'Data e parazgjedhur të formatit',
	'LBL_LOCALE_DESC'					=> 'Konfigurimet e specifikuara lokale do të reflektohen në nivel global brenda shkallës Sugar.',
	'LBL_LOCALE_EXPORT'					=> 'Vendosja e karakterit për Import/Ekspot',
	'LBL_LOCALE_EXPORT_DELIMITER'		=> 'Eksport (.csv) Delimiter',
	'LBL_LOCALE_EXPORT_TITLE'			=> 'Import/Eksport Cilësimet',
	'LBL_LOCALE_LANG'					=> 'Gjuha e parazgjedhur',
	'LBL_LOCALE_NAMEF'					=> 'Emri i parazgjedhur të formatit',
	'LBL_LOCALE_NAMEF_DESC'				=> 's = përshëndetje<br />f = emri <br />l = mbiemri',
	'LBL_LOCALE_NAME_FIRST'				=> 'David',
	'LBL_LOCALE_NAME_LAST'				=> 'Livingstone',
	'LBL_LOCALE_NAME_SALUTATION'		=> 'Dr.',
	'LBL_LOCALE_TIMEF'					=> 'Emri i parazgjedhur të formatit',
	'LBL_LOCALE_TITLE'					=> 'Cilësimet Lokale',
    'LBL_CUSTOMIZE_LOCALE'              => 'Rregullimi i cilësimeve lokale',
	'LBL_LOCALE_UI'						=> 'Ndërfaqja e përdoruesit',

	'LBL_ML_ACTION'						=> 'Veprim',
	'LBL_ML_DESCRIPTION'				=> 'Përshkrim',
	'LBL_ML_INSTALLED'					=> 'të dhënat e instaluara',
	'LBL_ML_NAME'						=> 'Emri',
	'LBL_ML_PUBLISHED'					=> 'Të dhënat e publikuara',
	'LBL_ML_TYPE'						=> 'Lloji',
	'LBL_ML_UNINSTALLABLE'				=> 'E painstalueshme',
	'LBL_ML_VERSION'					=> 'Versioni',
	'LBL_MSSQL'							=> 'SQL Serveri',
	'LBL_MSSQL_SQLSRV'				    => 'SQL Server (Microsoft SQL Server Driver për PHP)',
	'LBL_MYSQL'							=> 'MySQL',
    'LBL_MYSQLI'						=> 'MySQL (mysqli zgjatje)',
	'LBL_IBM_DB2'						=> 'IBM DB2',
	'LBL_NEXT'							=> 'Vijues',
	'LBL_NO'							=> 'Jo',
    'LBL_ORACLE'						=> 'Oracle',
	'LBL_PERFORM_ADMIN_PASSWORD'		=> 'Vendosja e faqës admin të fjalëkalimit',
	'LBL_PERFORM_AUDIT_TABLE'			=> 'Tabela e auditimit',
	'LBL_PERFORM_CONFIG_PHP'			=> 'Krijimi i konfigurimit në dosjen Sugar',
	'LBL_PERFORM_CREATE_DB_1'			=> 'Krijimi i bazës së të dhënave',
	'LBL_PERFORM_CREATE_DB_2'			=> 'në',
	'LBL_PERFORM_CREATE_DB_USER'		=> 'Krijimi i identifikimit dhe fjalëkalimit të Bazës së të dhënave...',
	'LBL_PERFORM_CREATE_DEFAULT'		=> 'Krijimi i parazgjedhur të dhënave Sugar',
	'LBL_PERFORM_CREATE_LOCALHOST'		=> 'Krijimi i identifikimt dhe fjalëkalimit të Bazës së të dhënave për hostin lokal...',
	'LBL_PERFORM_CREATE_RELATIONSHIPS'	=> 'Krijimi i tabelave në marrëdhënie me Sugar',
	'LBL_PERFORM_CREATING'				=> 'krijimi/',
	'LBL_PERFORM_DEFAULT_REPORTS'		=> 'Krijimi i raporteve të parazgjedhura',
	'LBL_PERFORM_DEFAULT_SCHEDULER'		=> 'Krijimi i parazgjedhur pë orarin e punës',
	'LBL_PERFORM_DEFAULT_SETTINGS'		=> 'Futja e cilësimeve të parazgjedhura',
	'LBL_PERFORM_DEFAULT_USERS'			=> 'Krijimi i përdoruesve të parazgjedhur',
	'LBL_PERFORM_DEMO_DATA'				=> 'Popullimi i tabelave të Bazës së të dhënave me të dhënat demo (kjo mund të zgjasë pak)',
	'LBL_PERFORM_DONE'					=> 'e bërë',
	'LBL_PERFORM_DROPPING'				=> 'Rënie',
	'LBL_PERFORM_FINISH'				=> 'Mbaro',
	'LBL_PERFORM_LICENSE_SETTINGS'		=> 'Përditësimi i informacionit të licencës',
	'LBL_PERFORM_OUTRO_1'				=> 'Skema e Sugar',
	'LBL_PERFORM_OUTRO_2'				=> 'Tani është kompletuar!',
	'LBL_PERFORM_OUTRO_3'				=> 'Koha totale:',
	'LBL_PERFORM_OUTRO_4'				=> 'sekonda.',
	'LBL_PERFORM_OUTRO_5'				=> 'Memorie të përafërta përdorën:',
	'LBL_PERFORM_OUTRO_6'				=> 'bitë.',
	'LBL_PERFORM_OUTRO_7'				=> 'Sistemi juaj tani është instaluar dhe konfiguruar për përdorim.',
	'LBL_PERFORM_REL_META'				=> 'Lidhje meta...',
	'LBL_PERFORM_SUCCESS'				=> 'Sukses!',
	'LBL_PERFORM_TABLES'				=> 'Krijimi i tabelave të aplikimit Sugar, tabelat auditative dhe lidhja metadata',
	'LBL_PERFORM_TITLE'					=> 'Kryerja e instalimit',
	'LBL_PRINT'							=> 'Shtyp',
	'LBL_REG_CONF_1'					=> 'Ju lutemi të plotësoni formularin e shkurtër më poshtë për të marrë njoftimet e produktit, lajmeve trajnimit, ofertat speciale dhe ftesat të veçanta të ngjarjeve nga SugarCRM. Ne nuk e shesim, me qira, aksionet ose përndryshe shpërndani informacionin e mbledhur këtu për palët e treta.',
	'LBL_REG_CONF_2'					=> 'Emri juaj dhe adresa e emailit janë fushat e kërkuara vetëm për regjistrim. Gjitha fushat tjera janë opsionale, por shumë të dobishme. Ne nuk e shesim, nuk japim me qira, aksione, ose përndryshe shpërndarjmë informacionin e mbledhur këtu për palët të treta.',
	'LBL_REG_CONF_3'					=> 'Faleminderit për regjistrimin. Kliko në butonin Mbaro për të hy brënda në SugarCRM. Ju do të duhet të hyni për herë të parë duke përdorur emrin e përdoruesit "admin" dhe fjalëkalimin që dhatë në hapin 2.',
	'LBL_REG_TITLE'						=> 'Regjistrimi',
    'LBL_REG_NO_THANKS'                 => 'Jo falemnderit',
    'LBL_REG_SKIP_THIS_STEP'            => 'Anashkalo këtë hap',
	'LBL_REQUIRED'						=> '* fushat e nevojshme',

    'LBL_SITECFG_ADMIN_Name'            => 'Emri i Adminit të Aplikacionit Sugar',
	'LBL_SITECFG_ADMIN_PASS_2'			=> 'Ri-shkrimi i Adminit Sugar i Përdoruesit të Fjalëkalimit',
	'LBL_SITECFG_ADMIN_PASS_WARN'		=> 'Kujdes: Kjo do të tejkaloj fjalëkalimin e adminit për çdo instalimit të mëparshëm.',
	'LBL_SITECFG_ADMIN_PASS'			=> 'Fjalëkalimi i Përdoruesit të Adminit Sugar',
	'LBL_SITECFG_APP_ID'				=> 'ID e aplikimit',
	'LBL_SITECFG_CUSTOM_ID_DIRECTIONS'	=> 'Nëse selektohen, ju duhet të siguroni një ID të aplikimit për t&#39;i anashkaluar automatikisht ID të gjeneruara. ID siguron që seancat në rastin Sugar nuk janë përdorur nga raste të tjera. Nëse ju keni një grup të instalimeve Sugar, ata të gjithë duhet të ndajnë të njëjtin aplikim të ID.',
	'LBL_SITECFG_CUSTOM_ID'				=> 'Siguroni ID tuaj të Aplikacionin',
	'LBL_SITECFG_CUSTOM_LOG_DIRECTIONS'	=> 'Nëse selektohen, ju duhet të specifikoni dosjen e kyçur  për të anashkaluar dosjen e parazgjedhur për t&#39;u kyçur në Sugar. Pavarësisht se ku ndodhet dokumenti i kyçur, qaseni atë nëpërmjet një shfletuesi i cili do të jetë i kufizuar nëpërmjet një. htaccess përcjellës.',
	'LBL_SITECFG_CUSTOM_LOG'			=> 'Përdorni Dosjen e përshatur të kyçjes',
	'LBL_SITECFG_CUSTOM_SESSION_DIRECTIONS'	=> 'Nëse selektohen, ju duhet të siguroni një dosje të sigurtë për ruajtjen e informacionit në sesionin Sugar. Kjo mund të arrihet për të parandaluar të dhënat e sesionit nga të qenit të pambrojtur në serverat e përbashkët.',
	'LBL_SITECFG_CUSTOM_SESSION'		=> 'Përdorni një Dosje të Sesionit të përshtatur për Sugar',
	'LBL_SITECFG_DIRECTIONS'			=> 'Ju lutem shkruani informacionin e konfigurimit të faqës tuaj më poshtë. Nëse jeni të pasigurt nga fusha, ne ju sugjerojmë që të përdorni vlerat e paracaktuara.',
	'LBL_SITECFG_FIX_ERRORS'			=> 'Ju lutemi të rregulloni gabimet në vijim përpara procedurës:',
	'LBL_SITECFG_LOG_DIR'				=> 'Kyçja e Dosjes',
	'LBL_SITECFG_SESSION_PATH'			=> 'Rruga për Sesionin e Dosjes<br />(duhet të regjistrohet)',
	'LBL_SITECFG_SITE_SECURITY'			=> 'Selektoni Opsionin e Sigurimit',
	'LBL_SITECFG_SUGAR_UP_DIRECTIONS'	=> 'Nësë selektohen, sistemi periodikisht do të kontrollojë versionet e azhurimit të aplikimit.',
	'LBL_SITECFG_SUGAR_UP'				=> 'Automatikisht Kontrollo për Azhurimin?',
	'LBL_SITECFG_SUGAR_UPDATES'			=> 'Sugar Konfigurimi i Azhurimit',
	'LBL_SITECFG_TITLE'					=> 'Faqja e Konfigurimit',
    'LBL_SITECFG_TITLE2'                => 'Identifikimi i Përdoruesit të Administratës',
    'LBL_SITECFG_SECURITY_TITLE'        => 'Sigurimi i Faqës',
	'LBL_SITECFG_URL'					=> 'URL i Shkallës Sugar',
	'LBL_SITECFG_USE_DEFAULTS'			=> 'Përdor Standarte?',
	'LBL_SITECFG_ANONSTATS'             => 'Dërgo Statistikat Anonime të përdorimit?',
	'LBL_SITECFG_ANONSTATS_DIRECTIONS'  => 'Nëse selektohen, Sugar do të dërgojë statistikat anonime për instalimin tuaj në SugarCRM Inc Cdo kohë sistemi juaj kontrollon versionet e reja. Ky informacion do të na ndihmojë të kuptojmë më mirë se si aplikacioni është përdorur dhe udhëzoje në përmirësime të produktit.',
    'LBL_SITECFG_URL_MSG'               => 'Shkruani URL që do të përdoret për të hyrë në rastin Sugar pas instalimit.URL gjithashtu do të përdoret si një bazë për URLs në faqet e aplikimit Sugar.URL duhet të përfshijë web serverin ose emrin makinës ose adresën IP.',
    'LBL_SITECFG_SYS_NAME_MSG'          => 'Shkruani emrin për sistemin tuaj. Ky emër do të shfaqet në shiritin e titullit të shfletuesit kur përdoruesit do të vizitojnë aplikimin Sugar.',
    'LBL_SITECFG_PASSWORD_MSG'          => 'Pas instalimit, ju do të duhet të përdorni përdoruesin Sugar të adminit (parazgjedhja e emrit të përdoruesit = admin) që të kyçeni në shkallën Sugar. Fusni një fjalëkalim për këtë përdorues të administratorti. Ky fjalëkalim mund të ndryshohet pas hyrjes fillestare. Ju gjithashtu mund të hyni me emër tjetër në admin të përdorur, përveç vlerës së dhënë të parazgjedhur.',
    'LBL_SITECFG_COLLATION_MSG'         => 'Selektoni krahasimin (klasifikimin) e cilësimeve për sistemin tuaj. Këto cilësime do të krijojnë tabelat me gjuhë të veçantë që ju e përdorni. Në rast se gjuha juaj nuk kërkon cilësime të posaçme ju lutemi përdorni vlera të paracaktuar.',
    'LBL_SPRITE_SUPPORT'                => 'Mbështetja Sprite',
	'LBL_SYSTEM_CREDS'                  => 'Sistemi i Kredencialëve',
    'LBL_SYSTEM_ENV'                    => 'Sistemi i Ambientit',
	'LBL_START'							=> 'Fillo',
    'LBL_SHOW_PASS'                     => 'Trego fjalëkalimet',
    'LBL_HIDE_PASS'                     => 'Fsheh fjalëkalimet',
    'LBL_HIDDEN'                        => 'E fshehur',
//	'LBL_NO_THANKS'						=> 'Continue to installer',
	'LBL_CHOOSE_LANG'					=> 'Zgjidhni gjuhën tuaj',
	'LBL_STEP'							=> 'Hap',
	'LBL_TITLE_WELCOME'					=> 'Mirësevini në SugarCrm',
	'LBL_WELCOME_1'						=> 'Ky instalues krijon tabelat e bazës së të dhënave SugarCRM dhe vendosjen e variablave të konfigurimit që ju duhet të filloni. I tërë procesi duhet të marrë rreth dhjetë minuta.',
    //welcome page variables
    'LBL_TITLE_ARE_YOU_READY'            => 'A jeni të gatshëm për instalim?',
    'REQUIRED_SYS_COMP' => 'Përbërësit e sistemit të nevojshëm',
    'REQUIRED_SYS_COMP_MSG' =>
                    'Para se të filloni, ju lutemi të jeni i sigurt se ju keni versionet e mbështetura të komponentëve të sistemit të mëposhtëm:<br />Baza e të dhënave/Baza e të dhënave të Menaxhimit të Sistemit (Shembuj: MySQL, SQL Server, Oracle, DB2)<br />Web Server (Apache, IIS)<br />Konsultoni Përputhueshmërinë Matrix në Versionin e Shënimeve për komponentët e sistemit për versionin Sugar që ju jeni duke instaluar.',
    'REQUIRED_SYS_CHK' => 'Instalo kontroll të sistemit',
    'REQUIRED_SYS_CHK_MSG' =>
                    'Kur ju filloni procesin e instalimit, kontrolli i sistemit do të kryhet në web server në të cilën janë të vendosura dosjet Sugar në mënyrë që të sigurohet sistemi a është i konfiguruar sic duhet dhe a ka të gjithë komponentët e nevojshme për të përfunduar me sukses instalimin.<br /><br />Sistemi i kontrollon të gjitha në vijim:<br />Versioni PHP - duhet të jetë në përputhje me aplikimin<br />Variablat e Sesionit - duhet të punojnë sic duhet<br />Vargjet MB - duhet të jenë të instaluar dhe aktivizuar në php.ini<br />Mbështetja e Bazës së të Dhënave - duhet të ekzistojë për MySQL, SQL Server, Oracle, ose DB2<br />Config.php - duhet të ekzistojë dhe duhet të ketë lejet e duhura për ta bërë atë të regjistruar<br />Dosjet e mëposhtme Sugar duhet të jenë të regjistruara:<br />/ porosi<br />/ sasi<br />/ modulet<br />/ ngarkim<br />Nëse dështon kontrolli, ju nuk do të jeni në gjendje për të vazhduar me instalimin. Një mesazh gabimi do të shfaqet, duke shpjeguar pse sistemi juaj nuk ka kaluar në kontroll. Pasi bëni ndryshimet e nevojshme, ju mund t&#39;i nënshtroheni sistemit të kontrollonit sërish për të vazhduar instalimin.',
    'REQUIRED_INSTALLTYPE' => 'Instalim tipik apo i përshtatur',
    'REQUIRED_INSTALLTYPE_MSG' =>
                    "Pas kontrollit të sistemit i cili është kryer, ju mund të zgjidhni instalimin tipik ose të përshtatur. <br /><br />Për dy instalimet Tipike dhe të Përshtatur, do të duhet të dini në vijim:<br />Lloji i bazës së të dhënave që do të vendosen në të dhënat e Sugar<br />Llojet në përputhje me Bazën e të Dhënave: MySQL, MS SQL Server, Oracle, DB2.<br /><br />Emri i faqës së serverit ose makinës (host) në të cilën gjendet baza e të dhënave <br />Kjo mund të jetë hosti lokal nëse baza e të dhënave është në kompjuterin tuaj lokal ose është në faqën e njejtë  të serverit ose makinës si në dosjet tuaja të Sugar.<br /><br />Emri i bazës së të dhënave që ju dëshironi të përdorni për të vendosur të dhënat e Sugar<br />Ju mund tashmë të keni një bazë të dhënash ekzistuese që ju dëshironi të përdorni. Nëse ju jepni emrin e një bazë të dhënash ekzistuese, tabelat në bazën e të dhënave do të të hiqen gjatë instalimit kur skema për bazën e të dhënave Sugar është përcaktuar.<br />Nëse ju nuk e keni bazën e të dhënave, emri që ju ofroni do të përdoret për bazën e re të dhënave që është krijuar për rastin gjatë instalimit.<br /><br />Administratori i Bazës së të Dhënave emri i përdoruesit dhe fjalëkalimi<br />Administratori i bazës së të dhënave duhet të jetë në gjendje për të krijuar tabela dhe përdoruesin dhe të shkruaj bazën e të dhënave.<br />Ju mund të kenë nevojë të kontaktoni me administratorin e bazës së të dhënave për këtë informacion, nëse baza e të dhënave nuk është vendosur në kompjuterin tuaj lokal dhe / ose në qoftë se ju nuk jeni administratori bazës së të dhënave.<br />Baza e të dhënave Sugar emri i përdoruesit dhe fjalëkalimi<br />Ky përdorues mund të jetë administratori i bazës së të dhënave, ose ju mund të siguroni emrin e një përdoruesi tjetër ekzistues të bazës së të dhënave.<br />Nëse dëshironi të krijoni një përdorues të ri të bazës së të dhënave për këtë qëllim, ju do të jeni në gjendje të siguroni emrin e ri të përdoruesit dhe fjalëkalimin gjatë procesit të instalimit, dhe përdoruesi do të krijohet gjatë instalimit.<br />Për instalimin e përdoruesit, ju gjithashtu mund të kenë nevojë të dini në vijim:<br />URL që do të përdoret për të hyrë në rastin Sugar pasi ai është instaluar. Kjo URL duhet të përfshijë faqën e serverit ose emrin e makinës ose IP adresën.<br /><br />[Opsional] Rruga për në dosjen e sesionit në qoftë se ju dëshironi të përdorni dosjen  në sesionin e përdoruesit për informacione të Sugar me qëllim për të parandaluar të dhënat e sesionit nga të qenit të pambrojtur në serverat e përbashkët.<br /><br />[Opsional] Rruga në dosjen e përdoruesit të identifikimit në qoftë se ju dëshironi të refuzoni dosjen e parazgjedhur për identifikimin Sugar.<br /><br />[Opsionale] Aplikacioni ID në qoftë se ju dëshironi të refuzoni automatikisht gjenerimin e ID që siguron seancat e një rasti Sugar nuk janë përdorur nga raste të tjera.<br /><br />Vendosja e Karakterit më të zakonshëm që përdoret në lokalin tuaj.<br /><br />Për informata më të hollësishme, ju lutemi konsultoni Udhëzuesin e instalimit.",
    'LBL_WELCOME_PLEASE_READ_BELOW' => 'Ju lutemi lexoni në vijim informacionin e rëndësishëm përpara procedurës së instalimit. Informacion do t&#39;ju ndihmojë të përcaktoni nëse jeni ose nuk jeni gati për të instaluar aplikacionin në këtë moment.',


	'LBL_WELCOME_2'						=> 'Për dokumentacionin e instalimit, vizito <a href="http://www.sugarcrm.com/crm/installation" target="_blank">Sugar Wiki</a>.  <BR><BR> Për të kontaktuar një teknik të mbështetjes së SugarCRM për ndihmë me instalimin, identifikohu në <a target="_blank" href="http://support.sugarcrm.com">Portali i mbështetjes së SugarCRM</a> dhe paraqit rastin për mbështetje.',
	'LBL_WELCOME_CHOOSE_LANGUAGE'		=> 'Zgjidhni gjuhën tuaj',
	'LBL_WELCOME_SETUP_WIZARD'			=> 'Instalim i Wizardit',
	'LBL_WELCOME_TITLE_WELCOME'			=> 'Mirësevini në SugarCrm',
	'LBL_WELCOME_TITLE'					=> 'Wizardi i SugarCRM',
	'LBL_WIZARD_TITLE'					=> 'Wizardi i përdoruesit',
	'LBL_YES'							=> 'Po',
    'LBL_YES_MULTI'                     => 'Po - Multibit',
	// OOTB Scheduler Job Names:
	'LBL_OOTB_WORKFLOW'		=> 'Detyrat e procesit të rrjedhës së punës',
	'LBL_OOTB_REPORTS'		=> 'Detyrat e planifikuara të gjenerimit të drejtimit të raporteve',
	'LBL_OOTB_IE'			=> 'Kontrollo kutitë e maileve të drejtuara përbrenda',
	'LBL_OOTB_BOUNCE'		=> 'Drejtimi i procesit të natës refuzon Emailat e Kampanjës',
    'LBL_OOTB_CAMPAIGN'		=> 'Drejtimi i natës së Emailave masive të Kampanjës',
	'LBL_OOTB_PRUNE'		=> 'Baza e të dhënave të trapave në muajin e 1',
    'LBL_OOTB_TRACKER'		=> 'Tabela të trapave të gjurmuesve',
    'LBL_OOTB_SEND_EMAIL_REMINDERS' => 'Aktivizo njoftimet e rikujtesës me email',
    'LBL_UPDATE_TRACKER_SESSIONS' => 'Rinovo tabelën e sesionit të gjurmimit',
    'LBL_OOTB_CLEANUP_QUEUE' => 'Pastrimi i punëve të reshtit',


    'LBL_FTS_TABLE_TITLE'     => 'Sigurimi i Tekstit të Plotë Tek Kërkimet e Cilësimeve',
    'LBL_FTS_HOST'     => 'Pritësi',
    'LBL_FTS_PORT'     => 'Porta',
    'LBL_FTS_TYPE'     => 'Kërkimi i LLojit të Makinës',
    'LBL_FTS_HELP'      => 'Për të mundësuar kërkimin e tekstit plotë , zgjidhni kërkimin e llojit të makinës dhe hyjni në Host dhe  Port ku kërkimi i makinës është organizuar. Sugar përfshin ndërtimin-në mbështetjen në kërkimelastik të maknës.',
    'LBL_FTS_REQUIRED'    => 'Kërkimi elastik kërkohet.',
    'LBL_FTS_CONN_ERROR'    => 'Nuk mund të lidhet me serverin e kërkimit me tekst të plotë; verifiko cilësimet e tua.',
    'LBL_FTS_NO_VERSION_AVAILABLE'    => 'Nuk disponohet version i serverit të kërkimit me tekst të plotë; verifiko cilësimet e tua.',
    'LBL_FTS_UNSUPPORTED_VERSION'    => 'U diktua version i pambështetur i kërkimit elastik. Përdor versionet: %s',

    'LBL_PATCHES_TITLE'     => 'Instalo Pjesët e Fundit',
    'LBL_MODULE_TITLE'      => 'Instalo paketat e gjuhëve',
    'LBL_PATCH_1'           => 'Në qoftë se dëshironi të',
    'LBL_PATCH_TITLE'       => 'Sistemi i Pjesëve',
    'LBL_PATCH_READY'       => 'Pjesa(ët) në vijim janë të gatshme për t&#39;u instaluar:',
	'LBL_SESSION_ERR_DESCRIPTION'		=> "SugarCRM mbështetet mbi seancat e PHP për të ruajtur informacione të rëndësishme duke u lidhur me këtë faqe të serverit. Instalimi juaj PHP nuk ka informacione në Sesione të konfiguruara saktë.<br /><br />Një keqkonfigurim i zakonshëm është se &#39;sesioni.ruajtjes_pjesë \"direktiva nuk është vënë në një dosje të vlefshme.<br /><br />Ju lutemi të korrigjoni konfigurimin tuaj PHP në dosjen php.ini i cili gjendet këtu më poshtë.",
	'LBL_SESSION_ERR_TITLE'				=> 'PHP Sesionet e Konfigurimit të Gabuara',
	'LBL_SYSTEM_NAME'=>'Emri i sistemit',
    'LBL_COLLATION' => 'Cilësimet e Krahasimit',
	'LBL_REQUIRED_SYSTEM_NAME'=>'Sigurimi i Emrit të Sistemit për rastin Sugar.',
	'LBL_PATCH_UPLOAD' => 'Zgjidh pjesën e dosjes nga kompjuteri yt lokal',
	'LBL_BACKWARD_COMPATIBILITY_ON' => 'Php prapa mënyrës së përputhueshmërise është kthyer në aktive. Vendosni ze1_përputheshmëria_mënyra në Joaktive për vazhdimin më tej.',

    'meeting_notification_email' => array(
        'name' => 'Emailet e njoftimeve të takimit',
        'subject' => 'Takim në SugarCRM Meeting - $event_name ',
        'description' => 'Ky shabllon përdoret kur sistemi u dërgon përdoruesve njoftime takimi.',
        'body' => '<div>
	<p>Për: $assigned_user</p>

	<p>$assigned_by_user të ka ftuar në një takim</p>

	<p>Lënda: $event_name<br/>
	Data e fillimit: $start_date<br/>
	Data e përfundimit: $end_date</p>

	<p>Përshkrimi: $description</p>

	<p>Prano këtë takim:<br/>
	<<a href="$accept_link">$accept_link</a>></p>
	<p>Prano provizorisht këtë takim:<br/>
	<<a href="$tentative_link">$tentative_link</a>></p>
	<p>Refuzo këtë takim:<br/>
	<<a href="$decline_link">$decline_link</a>></p>
</div>',
        'txt_body' =>
            'Për: $assigned_user

$assigned_by_user të ka ftuar në një takim

Lënda: $event_name
Data e fillimit: $start_date
Data e përfundimit: $end_date

Përshkrimi: $description

Prano këtë takim:
<$accept_link>

Prano provizorisht këtë takim
<$tentative_link>

Refuzo këtë takim
<$decline_link>',
    ),

    'call_notification_email' => array(
        'name' => 'Emailet e njoftimeve të thirrjes',
        'subject' => 'Thirrje në SugarCRM - $event_name ',
        'description' => 'Ky shabllon përdoret kur sistemi u dërgon përdoruesve njoftime thirrjesh.',
        'body' => '<div>
	<p>Për: $assigned_user</p>

	<p>$assigned_by_user të ka ftuar në një thirrje</p>

	<p>Lënda: $event_name<br/>
	Data e fillimit: $start_date<br/>
	Kohëzgjatja: $hoursh, $minutesm</p>

	<p>Përshkrimi: $description</p>

	<p>Prano këtë thirrje:<br/>
	<<a href="$accept_link">$accept_link</a>></p>
	<p>Prano provizorisht këtë thirrje:<br/>
	<<a href="$tentative_link">$tentative_link</a>></p>
	<p>Refuzo këtë thirrje:<br/>
	<<a href="$decline_link">$decline_link</a>></p>
</div>',
        'txt_body' =>
            'Për: $assigned_user

$assigned_by_user të ka ftuar në një thirrje

Lënda: $event_name
Data e fillimit: $start_date
Kohëzgjatja: $hoursh, $minutesm

Përshkrimi: $description

Prano këtë thirrje:
<$accept_link>

Prano provizorisht këtë thirrje
<$tentative_link>

Refuzo këtë thirrje
<$decline_link>',
    ),

    'assigned_notification_email' => array(
        'name' => 'Emaile njoftimi për detyrën',
        'subject' => 'SugarCRM - Caktuar $module_name ',
        'description' => 'Ky shabllon përdoret kur sistemi u dërgon përdoruesve një detyrë.',
        'body' => '<div>
<p>$assigned_by_user ka caktuar një&nbsp;$module_name për&nbsp;$assigned_user.</p>

<p>Mund ta shqyrtosh këtë&nbsp;$module_name në:<br/>
	<<a href="$module_link">$module_link</a>></p>
</div>',
        'txt_body' =>
            '$assigned_by_user ka caktuar një $module_name për $assigned_user.

Mund ta shqyrtosh këtë $module_name në:
<$module_link>',
    ),

    'scheduled_report_email' => array(
        'name' => 'Emailet e raportit të planifikuar',
        'subject' => 'Raporti i planifikuar: $report_name duke filluar nga $report_time',
        'description' => 'Ky shabllon përdoret kur sistemi u dërgon përdoruesve një raport të planifikuar.',
        'body' => '<div>
<p>Përshëndetje $assigned_user,</p>
<p>Bashkëngjitur gjendet një raport i planifikuar për ty i gjeneruar automatikisht.</p>
<p>Emri i raportit: $report_name</p>
<p>Data dhe ora e ekzekutimit të raportit: $report_time</p>
</div>',
        'txt_body' =>
            'Përshëndetje $assigned_user,

Bashkëngjitur gjendet një raport i planifikuar për ty i gjeneruar automatikisht.

Emri i raportit: $report_name

Data dhe ora e ekzekutimit të raportit: $report_time',
    ),

    'comment_log_mention_email' => [
        'name' => 'Njoftim me email për evidencën e komenteve të sistemit',
        'subject' => 'SugarCRM - $initiator_full_name të përmendi në një $singular_module_name',
        'description' => 'Ky shabllon përdoret për t\'u dërguar njoftime me email për përdoruesit që janë etiketuar në seksionin e evidencës së komenteve.',
        'body' =>
            '<div>
                <p>Je përmendur në këtë evidencë komentesh të regjistrit:  <a href="$record_url">$record_name</a></p>
                <p>Identifikohu në Sugar për të parë komentin..</p>
            </div>',
        'txt_body' =>
'Je përmendur në këtë evidencë komentesh të regjistrit: $record_name
            Identifikohu në Sugar për të parë komentin.',
    ],

    'advanced_password_new_account_email' => array(
        'subject' => 'Informacioni i llogarisë së re',
        'description' => 'përshkrim<br />Ky model është përdorur kur Sistemi i Administratorit dërgon një fjalëkalim të ri për përdoruesin.',
        'body' => 'Trupi<br />Këtu është Emri i llogarisë tuaj dhe fjalëkalimi i përkohshëm:<br />Emri i përdoruesit: $ kontakt_përdoruesi_përdoruesi_emri<br />Fjalëkalimi: $ kontaktt_përdoruesi_përdoruesi_hash<br /><br /> $config_site_url<br /><br />Pasi të identifikoheni në përdorimin e fjalëkalimit të mësipërm, mund  t&#39;ju kërkohet të rivendosni fjalëkalimin sipas zgjedhjes tuaj.<br /><br /><br /><br /><br /><br /><br /><br />$ config_site_url<br /><br />Pasi ju të hyni në përdorimin fjalëkalimin e mësipërme, ju mund të kërkohet për të rivendosur fjalëkalimin në një e zgjedhjes tuaj.',
        'txt_body' =>
'tekst_trupi<br />Këtu është llogaria juaj e emrit të përdoruesit dhe fjalëkalimi i përkohshëm: Emri i përdoruesit:  kontakt_përdorues_përdorues_emri: $ $ kontakt__përdorues_përdorues_hash $config_site_url  Pasi të identifikoheni në përdorimin e fjalëkalimit të mësipërm, mund  t&#39;ju kërkohet të rivendosni fjalëkalimin sipas zgjedhjes tuaj.',
        'name' => 'emri<br />Sistemi- i gjeneruar të fjalëkalimi i emailit',
        ),
    'advanced_password_forgot_password_email' => array(
        'subject' => 'Rivendos fjalëkalimin e llogarisë tëndë',
        'description' => "përshkrim<br />Ky model është përdorur kur Sistemi i Administratorit dërgon një fjalëkalim të ri për përdoruesin.",
        'body' => 'trupi<br />Ju së fundmi kërkuat në $ contact_user_pwd_last_changed të jeni në gjendje për të rivendosur fjalëkalimin e llogarisë suaj.<br />Klikoni mbi linkun e mëposhtëm për të rivendosur fjalëkalimin tuaj:<br />$ contact_user_link_guid',
        'txt_body' =>
'tekst_trupi<br />Ju së fundmi kërkuat në $ contact_user_pwd_last_changed të jeni në gjendje për të rivendosur fjalëkalimin e llogarisë suaj.<br />Klikoni mbi linkun e mëposhtëm për të rivendosur fjalëkalimin tuaj:<br />$ contact_user_link_guid',
        'name' => 'Harove fjalëkalimin e emailit',
        ),

'portal_forgot_password_email_link' => [
    'name' => 'Portal Harrove fjalëkalimin e emailit',
    'subject' => 'Rivendos fjalëkalimin e llogarisë tënde',
    'description' => 'Ky model është përdorur për t\'i dërguar një përdoruesi një lidhje për të rivendosur fjalëkalimin e llogarisë në Portal të përdoruesit.',
    'body' => '<div><table border=\"0\" cellspacing=\"0\" cellpadding=\"0\" width="550" align=\"\&quot;\&quot;center\&quot;\&quot;\"><tbody><tr><td colspan=\"2\"><p>Ju së fundmi kërkuat të rivendosni fjalëkalimin e llogarisë suaj.. </p><p>Klikoni mbi linkun e mëposhtëm për të rivendosur fjalëkalimin tuaj:</p><p> <a href="$portal_user_link_guid">$portal_user_link_guid</a> </p> </td> </tr><tr><td colspan=\"2\"></td> </tr> </tbody></table> </div>',
    'txt_body' =>
'
    Së fundmi kërkuat të rivendosni fjalëkalimin e llogarisë suaj.

    Klikoni lidhjen e mëposhtme për të rivendosur fjalëkalimin tuaj:

    $portal_user_link_guid',
],

    'portal_password_reset_confirmation_email' => [
        'name' => 'Portali Emaili i konfirmimit të rivendosjes së fjalëkalimit',
        'subject' => 'Fjalëkalimi i llogarisë suaj u rivendos',
        'description' => 'Ky model është përdorur për të dërguar një konfirmim te një përdorues i Portalit që fjalëkalimi i llogarisë së tyre është rivendosur.',
        'body' => '<div><table border=\"0\" cellspacing=\"0\" cellpadding=\"0\" width="550" align=\"\&quot;\&quot;center\&quot;\&quot;\"><tbody><tr><td colspan=\"2\"><p>Ky email është për të konfirmuar që fjalëkalimi i llogarisë suaj në Portal është rivendosur. </p><p>Përdorni lidhjen më poshtë për t\'u identifikuar në Portal:</p><p> <a href="$portal_login_url">$portal_login_url</a> </p> </td> </tr><tr><td colspan=\"2\"></td> </tr> </tbody></table> </div>',
        'txt_body' =>
            '
    Ky email është për të konfirmuar që fjalëkalimi i llogarisë suaj në Portal është rivendosur.

    Përdorni lidhjen më poshtë për t\'u regjistruar në Portal:

    $portal_login_url',
    ],
);
