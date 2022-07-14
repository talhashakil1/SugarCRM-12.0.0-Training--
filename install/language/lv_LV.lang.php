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
	'LBL_BASIC_SEARCH'					=> 'Pamatmeklēšana',
	'LBL_ADVANCED_SEARCH'				=> 'Paplašinātā meklēšana',
	'LBL_BASIC_TYPE'					=> 'Pamata tips',
	'LBL_ADVANCED_TYPE'					=> 'Paplašināts tips',
	'LBL_SYSOPTS_1'						=> 'Izvēlieties no zemāk redzamajām sistēmas konfigurācijas iespējām.',
    'LBL_SYSOPTS_2'                     => 'Kādu datu bāzes tipu jūs izmantosiet Sugar instalācijai?',
	'LBL_SYSOPTS_CONFIG'				=> 'Sistēmas konfigurēšana',
	'LBL_SYSOPTS_DB_TYPE'				=> '',
	'LBL_SYSOPTS_DB'					=> 'Norādiet datubāzes tipu',
    'LBL_SYSOPTS_DB_TITLE'              => 'Datubāzes tips',
	'LBL_SYSOPTS_ERRS_TITLE'			=> 'Pirms turpināt, novērsiet sekojošas kļūdas:',
	'LBL_MAKE_DIRECTORY_WRITABLE'      => 'Lūdzu padariet šo katalogu pieejamu rakstīšanai:',


    'ERR_DB_LOGIN_FAILURE_IBM_DB2'		=> 'Norādītais datu bāzes serveris, lietotājvārds un/vai parole nav derīga un nevar izveidot savienojumu ar datu bāzi. Lūdzu norādiet derīgu serveri, lietotājvārdu un paroli.',
    'ERR_DB_IBM_DB2_CONNECT'			=> 'Norādītais datu bāzes serveris, lietotājvārds un/vai parole nav derīga un nevar izveidot savienojumu ar datu bāzi. Lūdzu norādiet derīgu serveri, lietotājvārdu un paroli.',
    'ERR_DB_IBM_DB2_VERSION'			=> 'Sugar neatbalsta Jūsu DB2 (%s) versiju. Jums ir jāuzstāda ar Sugar lietojumprogrammu savietojama versija. Lūdzu skatieties atbilstības matricu laidiena piezīmēs, lai uzzinātu kādas DB2 versijas ir atbalstītas.',

	'LBL_SYSOPTS_DB_DIRECTIONS'			=> 'Ir jābūt uzstādītam un nokonfigurētam Oracle klientam, ja izvēlieties Oracle.',
	'ERR_DB_LOGIN_FAILURE_OCI8'			=> 'Norādītais datu bāzes serveris, lietotājvārds un/vai parole nav derīga un nevar izveidot savienojumu ar datu bāzi. Lūdzu norādiet derīgu serveri, lietotājvārdu un paroli.',
	'ERR_DB_OCI8_CONNECT'				=> 'Norādītais datu bāzes serveris, lietotājvārds un/vai parole nav derīga un nevar izveidot savienojumu ar datu bāzi. Lūdzu norādiet derīgu serveri, lietotājvārdu un paroli.',
	'ERR_DB_OCI8_VERSION'				=> 'Sugar neatbalsta Jūsu Oracle (%s) versiju. Jums ir jāuzstāda ar Sugar programmu savietojama versija. Lūdzu skatīties atbilstības matricu laidiena piezīmēs, lai uzzinātu kādas Oracle versijas tiek atbalstītas.',
    'LBL_DBCONFIG_ORACLE'               => 'Lūdzu norādiet savu datu bāzes nosaukumu. Tā būs noklusētā tabulu telpa, kura tiks piešķirta jūsu lietotājam ((SID from tnsnames.ora).',
	// seed Ent Reports
	'LBL_Q'								=> 'Iespējas vaicājums',
	'LBL_Q1_DESC'						=> 'Iespējas pēc veida',
	'LBL_Q2_DESC'						=> 'Iespējas pēc uzņēmuma',
	'LBL_R1'							=> '6 mēnešu pārdošanas konveijera atskaite',
	'LBL_R1_DESC'						=> 'Nākošo 6 mēnešu iespējas grupētas pa mēnešiem un veidiem',
	'LBL_OPP'							=> 'Iespēju datu kopa',
	'LBL_OPP1_DESC'						=> 'Šeit variet mainīt pielāgotā vaicājuma izskatu',
	'LBL_OPP2_DESC'						=> 'Šis vaicājums tiks pievienots zem atskaites pirmā vaicājuma',
    'ERR_DB_VERSION_FAILURE'			=> 'Nevar noteikt datu bāzes versiju.',

	'DEFAULT_CHARSET'					=> 'UTF-8',
    'ERR_ADMIN_USER_NAME_BLANK'         => 'Norādiet Sugar administratora lietotājvārdu.',
	'ERR_ADMIN_PASS_BLANK'				=> 'Norādiet Sugar administratora paroli.',

    'ERR_CHECKSYS'                      => 'Savietojamības pārbaudes laikā atklātas kļūdas.  Lai SugarCRM instalācija funkcionētu korekti, veic atbilstošus pasākumus, lai atrisinātu zemāk esošās problēmas vai spied pogu Atkārtoti pārbaudīt, vai mēģini instalēt no jauna.',
    'ERR_CHECKSYS_CALL_TIME'            => 'Allow Call Time Pass Reference ir stāvoklī On (šo vajadzētu uzstādīt stāvoklī Off failā php.ini)',

	'ERR_CHECKSYS_CURL'					=> 'Nav atrasts: Sugar plānotājs darbosies ar ierobežotu funkcionalitāti. E-pasta arhivēšana pakalpojums nedarbosies.',
    'ERR_CHECKSYS_IMAP'					=> 'Netika atrasts: Ienākošajiem e-pastiem un Kampaņām (E-pasta) nepieciešamas IMAP bibliotēkas. Pretējā gadījumā funkcionalitāte nedarbosies.',
	'ERR_CHECKSYS_MSSQL_MQGPC'			=> 'Magic Quotes GPC nevar uzstādīt "On" stāvoklī, ja lieto MS SQL Server.',
	'ERR_CHECKSYS_MEM_LIMIT_0'			=> 'Brīdinājums:',
	'ERR_CHECKSYS_MEM_LIMIT_1'			=> '(Uzstādīt uz',
	'ERR_CHECKSYS_MEM_LIMIT_2'			=> 'M vai lielāku jūsu php.ini failā)',
	'ERR_CHECKSYS_MYSQL_VERSION'		=> 'Vecākā versija 4.1.2 - Atrasta:',
	'ERR_CHECKSYS_NO_SESSIONS'			=> 'Neizdevās ierakstīt un nolasīt sesijas mainīgos.  Instalāciju nav iespējams turpināt.',
	'ERR_CHECKSYS_NOT_VALID_DIR'		=> 'Nederīga direktorija',
	'ERR_CHECKSYS_NOT_WRITABLE'			=> 'Brīdinājums: Nevar ierakstīt',
	'ERR_CHECKSYS_PHP_INVALID_VER'		=> 'Sugar neatbalsta jūsu PHP versiju. Jums ir jāuzstāda Sugar programmai atbilstoša versija. Lūdzu skatīties PHP atbilstības matricu laidiena piezīmēs. Jūsu pašreizējā versija ir',
	'ERR_CHECKSYS_IIS_INVALID_VER'      => 'Suagr neatbalsta Jūsu IIS versiju - uzstādiet ar Sugar lietojumu saderīgu versiju. Informācija par atbalstītajām IIS versijām sniegta Laidiena piezīmēs Atbilstību matricā.  Jūsu versija ir',
    'ERR_CHECKSYS_FASTCGI'              => 'Konstatēts, ka netiek izmantota FastCGI  funkciju kartēšana PHP valodai. Jums būs jāuzstāda/jākonfigurē Sugar lietojumam atbilstoša versija.  Informācija par atbalstītajām versijām sniegta  laidiena piezīmēs Atbilstību matricā. Papildus informācijai skatīt <a href="http://www.iis.net/php/" target="_blank" rel="nofollow noopener noreferrer">http://www.iis.net/php/</a> ',
	'ERR_CHECKSYS_FASTCGI_LOGGING'      => 'Optimālai IIS/FastCGI sapi lietošanai php.ini datnē parametram fastcgi.logging uzstādiet vērtību 0.',
    'ERR_CHECKSYS_PHP_UNSUPPORTED'		=> 'Instalēta neatbalstīta PHP versija: ( ver',
    'LBL_DB_UNAVAILABLE'                => 'Datubāze nav pieejama',
    'LBL_CHECKSYS_DB_SUPPORT_NOT_AVAILABLE' => 'Datu bāzes atbalsts netika atrasts. Pārliecinieties, ka jums ir nepieciešamie draiveri kādai no šādām atbalstītajām datu bāzēm: MySQL, MS SQLServer, Oracle vai DB2. Iespējams, ka atkarībā no PHP versijas ir jānoņem komentārs paplašinājumam php.ini failā vai jāpārkompilē, izmantojot pareizu bināro failu. Sīkāka informācija par to, kā nodrošināt datu bāzes atbalstu, pieejama PHP rokasgrāmatā.',
    'LBL_CHECKSYS_XML_NOT_AVAILABLE'        => 'Nav atrastas Sugar nepieciešamās XML Parser Libraries funkcijas.  Iespējams, ka atkarībā no izmantotās PHP versijas, jānoņem komentārs paplašinājumam php.ini datnē, vai jāpārkompilē ar pareizu bināro failu.  Detalizētaka informācija pieejama PHP rokasgrāmatā.',
    'LBL_CHECKSYS_CSPRNG' => 'Nejaušu skaitļu ģenerators',
    'ERR_CHECKSYS_MBSTRING'             => 'Nav atrastas funkcijas, kas nepieciešamas, lai Sugar  varētu izmantot PHP  Multibyte Strings paplašinājumu (mbstring). <br/><br/>Parasti pēc noklusējuma PHP mbstring modulis nav spējīgots un tā aktivizēšanai jāveic PHP būvējums, izmantojot  --enable-mbstring. Detalizētāka informācija par mbstring atbalstu pieejama PHP rokasgrāmatā.',
    'ERR_CHECKSYS_SESSION_SAVE_PATH_NOT_SET'       => 'Parametrs session.save_path Jūsu php konfigurācijas failā (php.ini) nav uzstādīts, vai ir uzstādīts uz neeksistējošu katalogut. Uzstādiet save_path parametru php.inifailā, vai pārbaudiet save_path norādītā kataloga eksistenci.',
    'ERR_CHECKSYS_SESSION_SAVE_PATH_NOT_WRITABLE'  => 'Parametrs session.save_path Jūsu php konfigurācijas failā (php.ini) norāda uz katalogu, kas nav pieejams rakstīšanai.  Lūdzu izpildiet soļus, kas nepieciešami, lai katalogu padarītu pieejamu rakstīšanai.  <br>Atkarībā no operētājsistēmas šim nolūkam ar chmod 766 palīdzību jāmaina pieejas tiesības,vai arī ar labās pogas klikšķi uz kataloga vārda jāatver tā īpašības (properties) un jānoņem "tikai lasī" (read only) pazīme.',
    'ERR_CHECKSYS_CONFIG_NOT_WRITABLE'  => 'Config fails eksistē, bet tajā nevar ierakstīt. Lūdzu veic nepieciešamās darbības, lai šajā failā varētu ierakstīt. Atkarībā no Jūsu operētājsistēmas, nepieciešams izmainīt tiesības, izpildot chmod 766 vai ar labo peles taustiņu noklikšķinot uz faila nosaukuma, lai piekļūtu faila īpašībām un atceltu iespēju - tikai lasīt.',
    'ERR_CHECKSYS_CONFIG_OVERRIDE_NOT_WRITABLE'  => 'Konfigurācijas fails eksistē, bet tajā nevar ierakstīt. Lūdzu veiciet nepieciešamos soļus, lai failā varētu ierakstīt. Atkarībā no jūsu operētājsistēmas, ir nepieciešams izmainīt atļaujas, palaižot chmod 766 vai nospiediet uz faila nosaukuma, lai piekļūtu īpašībām un atceltu opciju - tikai lasīt.',
    'ERR_CHECKSYS_CUSTOM_NOT_WRITABLE'  => 'Custom katalogs eksistē, bet tajā nevar ierakstīt. Katalogam jānomaina pieejas tiesības (chmod 766) vai ar kreiso peles klikšķi atceliet iespēju - tikai lasīt, atkarībā no jūsu operētājsistēmas. Lūdzu veiciet nepieciešamās darbības, lai šajā failā varētu ierakstīt.',
    'ERR_CHECKSYS_FILES_NOT_WRITABLE'   => "Zemāk uzskaitītie faili vai katalogi iztrūkst, vai nav pieejami rakstīšanai un tos nevar izveidot. Atkarībā no izmantotās operētājsistēmas problēmas novēršanai var būt nepieciešama pieejas tiesību maiņa failiem vai vecākdirektorijam (chmod 766), vai arī ar labās pogas klikšķi uz vecākdirektorija jāatceļ $#39;read only$#39; opcija, ka arī tas jāattiecina uz apakšdirektorijiem.",
	'ERR_CHECKSYS_SAFE_MODE'			=> 'Safe Mode ir ieslēgts (Jūs variet to izslēgt php.ini)',
    'ERR_CHECKSYS_ZLIB'					=> 'ZLib atbalsts netika atrasts: SugarCRM palielina veiktspēju ar zlib kompresiju.',
    'ERR_CHECKSYS_ZIP'					=> 'ZIP atbalsts netika atrasts: SugarCRM nepieciešams ZIP atbalsts, lai apstrādātu saspiestus failus.',
    'ERR_CHECKSYS_BCMATH'				=> 'BCMATH atbalsts nav atrasts: SugarCRM nepieciešams BCMATH atbalsts aprēķinu veikšanai ar pieņemto precizitāti.',
    'ERR_CHECKSYS_HTACCESS'             => 'Tets par .htaccess faila pārrakstīšanu neizdevās. Tas parasti nozīmē, ka jums nav ieststīts AllowOverride Sugar direktorijai.',
    'ERR_CHECKSYS_CSPRNG' => 'CSPRNG izņēmums',
	'ERR_DB_ADMIN'						=> 'Datubāzes administratora lietotāja vārds un/vai parole nav nederīga, un nevar izveidot savienojumu ar datubāzi. Lūdzu ievadiet derīgu lietotāja vārdu un paroli. (Kļūda:',
    'ERR_DB_ADMIN_MSSQL'                => 'Datubāzes administratora lietotāja vārds un/vai parole nav nederīga. Nevar izveidot savienojumu ar datubāzi. Lūdzu ievadiet derīgu lietotāja vārdu un paroli.',
	'ERR_DB_EXISTS_NOT'					=> 'Norādītā Datubāze neeksistē.',
	'ERR_DB_EXISTS_WITH_CONFIG'			=> 'Datubāze ar konfigurācijas datiem jau eksistē. Lai veiktu datubāzes instalāciju, lūdzu veiciet atkārtotu instalāciju un izvēlaties: "Izmest un izveidot no jauna SugarCRM tabulas?"  Lai uzlabotu, lietojiet Uzlabošanas vedni,  administrācijas konsolē.  Lūdzu izlasiet uzlabošanas dokumentāciju, <a href="http://www.sugarforge.org/content/downloads/" target="_new">šeit</a>.',
	'ERR_DB_EXISTS'						=> 'Ievadītais datubāzes nosaukums jau eksistē --- nevar izveidot vēl vienu datubāzi ar tādu pašu nosaukumu.',
    'ERR_DB_EXISTS_PROCEED'             => 'Ievadītais datubāzes nosaukums jau eksistē.  Jūs varat<br>1. doties atpakaļ un izvēlēties jaunu datubāzes nosaukumu <br>2.  klikšķināt tālāk, lai turpinātu, bet visas datubāzes tabulas tiks izdzēstas.  <strong>Tas nozīmē to, ka tiks dzēstas tabulas un to dati.</strong>',
	'ERR_DB_HOSTNAME'					=> 'Resursdatora nosaukums nevar būt tukšs',
	'ERR_DB_INVALID'					=> 'Norādīts nederīgs datubāzes tips.',
	'ERR_DB_LOGIN_FAILURE'				=> 'Norādītais datu bāzes serveris, lietotājvārds un/vai parole nav derīga un nevar izveidot savienojumu ar datu bāzi. Lūdzu norādiet derīgu serveri, lietotājvārdu un paroli.',
	'ERR_DB_LOGIN_FAILURE_MYSQL'		=> 'Norādītais datu bāzes serveris, lietotājvārds un/vai parole nav derīga un nevar izveidot savienojumu ar datu bāzi. Lūdzu norādiet derīgu serveri, lietotājvārdu un paroli.',
	'ERR_DB_LOGIN_FAILURE_MSSQL'		=> 'Norādītais datu bāzes serveris, lietotājvārds un/vai parole nav derīga un nevar izveidot savienojumu ar datu bāzi. Lūdzu norādiet derīgu serveri, lietotājvārdu un paroli.',
	'ERR_DB_MYSQL_VERSION'				=> 'Sugar neatbalsta Jūsu MySQL versiju (%s).  Nepieciešams instalēt versiju, kura ir saderīga ar Sugar lietojumprogrammu. Lūdzu skatieties atbilstības matricu laidiena piezīmēs, lai uzzinātu kādas MySQL versijas ir atbalstītas.',
	'ERR_DB_NAME'						=> 'Datubāzes nosaukums nevar būt tukšs',
	'ERR_DB_NAME2'						=> "Datubāzes nosaukumā nedrīkst būs simboli &#39;\\&#39;, &#39;/&#39;, vai  &#39;.&#39;",
    'ERR_DB_MYSQL_DB_NAME_INVALID'      => "Datubāzes nosaukumā nedrīkst būs simboli &#39;\\&#39;, &#39;/&#39;, vai  &#39;.&#39;",
    'ERR_DB_MSSQL_DB_NAME_INVALID'      => "Datubāzes nosaukums nedrīkst sākties ar  &#39;#&#39; vai &#39;@&#39; un tajā nedrīkst būt tukšumi, &#39;\"&#39;, \"&#39;\", &#39;*&#39;, &#39;/&#39;, &#39;\\&#39;, &#39;?&#39;, &#39;:&#39;, &#39;<&#39;, &#39;>&#39;, &#39;&&#39;, &#39;!&#39;, vai  &#39;-&#39;",
    'ERR_DB_OCI8_DB_NAME_INVALID'       => "Datubāzes nosaukumā var būt tikai burtciparu simboli un simboli '#', '_', '-', ':', '.', '/' vai '$'",
	'ERR_DB_PASSWORD'					=> 'Norādītās Sugar datubāzes administratora paroles nesakrīt. Ievadiet abos paroļu laukos vienādas paroles.',
	'ERR_DB_PRIV_USER'					=> 'Norādiet datubāzes administratora lietotājvārdu. Šis lietotājs ir nepieciešams, lai izveidotu sākotnējo savienojumu ar datubāzi',
	'ERR_DB_USER_EXISTS'				=> 'Sugar datubāzes lietotāja vārds jau eksistē -- nevar izveidot citu lietotāju ar tādu pašu vārdu. Lūdzu ievadiet jaunu lietotāja vārdu.',
	'ERR_DB_USER'						=> 'Norādiet datubāzes administratora lietotājvārdu.',
	'ERR_DBCONF_VALIDATION'				=> 'Pirms turpināt, novērsiet sekojošas kļūdas:',
    'ERR_DBCONF_PASSWORD_MISMATCH'      => 'Ievadītās Sugar datubāzes lietotāja paroles nesakrīt. Lūdzu ievadiet vienādas paroles.',
	'ERR_ERROR_GENERAL'					=> 'Radušās sekojošas kļūdas::',
	'ERR_LANG_CANNOT_DELETE_FILE'		=> 'Nevar izdzēst failu:',
	'ERR_LANG_MISSING_FILE'				=> 'Nevar atrast failu:',
	'ERR_LANG_NO_LANG_FILE'			 	=> 'Sadaļā include/language valodas paka netika atrasta:',
	'ERR_LANG_UPLOAD_1'					=> 'Problēmas ar augšuplādi. Lūdzu mēģiniet vēlreiz.',
	'ERR_LANG_UPLOAD_2'					=> 'Valodu pakām jābūt saarhivētām ZIP arhīvos.',
	'ERR_LANG_UPLOAD_3'					=> 'PHP nevar pārvietot temp failu uz upgrade direktoriju.',
	'ERR_LICENSE_MISSING'				=> 'Iztrūkst obligātie lauki',
	'ERR_LICENSE_NOT_FOUND'				=> 'Nav atrasta licence!',
	'ERR_LOG_DIRECTORY_NOT_EXISTS'		=> 'Piedāvātā direktorija nav derīga.',
	'ERR_LOG_DIRECTORY_NOT_WRITABLE'	=> 'Piedāvātajā direktorijā nevar ierakstīt.',
	'ERR_LOG_DIRECTORY_REQUIRED'		=> 'Žurnāla direktorija ir nepieciešama, ja vēlaties norādīt savu žurnāla direktoriju.',
	'ERR_NO_DIRECT_SCRIPT'				=> 'Nav iespējama skripta tieša izpilde.',
	'ERR_NO_SINGLE_QUOTE'				=> 'Nevar izmantot vienu pēdiņu priekš',
	'ERR_PASSWORD_MISMATCH'				=> 'Ievadītās Sugar administratora paroles nesakrīt. Lūdzu ievadi vienādas paroles, paroļu laukos.',
	'ERR_PERFORM_CONFIG_PHP_1'			=> 'Nevar ierakstīt failā config.php.',
	'ERR_PERFORM_CONFIG_PHP_2'			=> 'Jūs variet turpināt instalāciju manuāli, izveidojot failu config.php. Pirms turpiniet nākamo soli, <strong>obligāti</strong> izveidojiet failu config.php.',
	'ERR_PERFORM_CONFIG_PHP_3'			=> 'Vai atcerējāties izveidot failu config.php?',
	'ERR_PERFORM_CONFIG_PHP_4'			=> 'Brīdinājums: Nevar ierakstīt failā config.php. Lūdzu pārliecinieties, ka tas eksistē.',
	'ERR_PERFORM_HTACCESS_1'			=> 'Nevar ierakstīt',
	'ERR_PERFORM_HTACCESS_2'			=> 'fails.',
	'ERR_PERFORM_HTACCESS_3'			=> 'Ja Tu nevēlies lai žurnāla fails būtu pieejams caur pārlūkprogrammu, izveido .htaccess failu žurnāla faila direktorijā. .htaccess failam jāsatur šādu koda rindu:',
	'ERR_PERFORM_NO_TCPIP'				=> '<b>Mēs nevaram atrast interneta savienojumu.</b> Kad veiciet savienojumu, lūdzu dodaties uz <a href="http://www.sugarcrm.com/home/index.php?option=com_extended_registration&task=register">http://www.sugarcrm.com/home/index.php?option=com_extended_registration&task=register</a>, lai reģistrētu SugarCRM. Dariet mums zināmu, kādām vajadzībām jūsu uzņēmums izmanto SugarCRM, lai mēs vienmēr varētu jums piedāvāt pareizo lietojumprogrammu jūsu biznesa vajadzībām.',
	'ERR_SESSION_DIRECTORY_NOT_EXISTS'	=> 'Ievadītā sesijas direktorija nav derīga.',
	'ERR_SESSION_DIRECTORY'				=> 'Sesijas direktorijā nevar ierakstīt.',
	'ERR_SESSION_PATH'					=> 'Sesijas ceļš ir nepieciešams, ja vēlaties norādīt savu sesijas ceļu.',
	'ERR_SI_NO_CONFIG'					=> 'Dokumenta saknē nav iekļauta datne config_si.php vai arī datnē config.php nav definēts $sugar_config_si',
	'ERR_SITE_GUID'						=> 'Lietojumprogrammas ID ir nepieciešams, ja vēlaties norādīt savu Lietojumprogrammas ID.',
    'ERROR_SPRITE_SUPPORT'              => "Šobrīd nav iespējams atrast GD bibliotēku, kā rezultātā nebūs iespējams izmantot CSS Sprite funkcionalitāti.",
	'ERR_UPLOAD_MAX_FILESIZE'			=> 'Brīdinājums: Jums jāizmaina PHP konfigurācija, lai būtu iespējams augšuplādēt failus, kuru apjoms ir vismaz 6MB',
    'LBL_UPLOAD_MAX_FILESIZE_TITLE'     => 'Augšupielādes faila izmērs',
	'ERR_URL_BLANK'						=> 'Piedāvāt pamata URL Sugar eksemplāram.',
	'ERR_UW_NO_UPDATE_RECORD'			=> 'Nevar izvietot instalācijas failu no',
    'ERROR_FLAVOR_INCOMPATIBLE'         => 'Augšupielādētais fails nav saderīgs ar šo Sugar paveidu (Professional, Enterprise vai Ultimate versiju): ',
	'ERROR_LICENSE_EXPIRED'				=> "Kļūda: Jūsu licence ir beigusies",
	'ERROR_LICENSE_EXPIRED2'			=> "pirms dienas(ām). Lūdzu dodies uz <a href=\"index.php?action=LicenseSettings&module=Administration\">\"Licences vadība\"</a>  Administrēšanas sadaļu, lai ievadītu jauno licences atslēgu. Ja licences atslēga netiks ievadīta 30 dienu laikā pēc tās beigšanās, šajā programmā vairs ielogoties nebūs iespējams.",
	'ERROR_MANIFEST_TYPE'				=> 'Manifesta failā jābūt norādītam pakotnes veidam.',
	'ERROR_PACKAGE_TYPE'				=> 'Manifesta fails norāda uz neatpazītu pakotnes tipu',
	'ERROR_VALIDATION_EXPIRED'			=> "Kļūda: Validācijas atslēgai beidzies termiņš",
	'ERROR_VALIDATION_EXPIRED2'			=> "pirms dienas(ām). Lūdzu dodies uz <a href=\"index.php?action=LicenseSettings&module=Administration\">\"Licences Vadība\"</a> Administrēšanas sadaļu, lai ievadītu jaunu validācijas atslēgu. Ja jauna validācijas atslēga netiks ievadīta 30 dienu laikā pēc tās derīguma termiņa beigām, šajā lietojumprogrammā vairs autentificēties nebūs iespējams.",
	'ERROR_VERSION_INCOMPATIBLE'		=> 'Augšupielādētais fails nav saderīgs ar šo Sugar versiju:',

	'LBL_BACK'							=> 'Atpakaļ',
    'LBL_CANCEL'                        => 'Atcelt',
    'LBL_ACCEPT'                        => 'Apstiprinu',
	'LBL_CHECKSYS_1'					=> 'Lai Jūsu SugarCRM instalācija funkcionētu korekti, visiem sistēmas pārbaudes punktiem ir jābūt zaļā krāsā. Ja kāds punkts ir sarkans, lūdzu veiciet nepieciešamās darbības, lai to salabotu.<BR><BR> Pēc sistēmas pārbaudes palīdzības, dodaties uz <a href="http://www.sugarcrm.com/crm/installation" target="_blank">Sugar Wiki</a>.',
	'LBL_CHECKSYS_CACHE'				=> 'Rakstīšanai pieejamie keša apakšdirektoriji',
    'LBL_DROP_DB_CONFIRM'               => 'Datubāzes nosaukums jau eksistē.<br>Jūs varat:<br>1.  Klikšķināt pogu Atcelt un izvēlētie jaunu datubāzes nosaukumu vai <br>2.  Klikšķināt pogu Apstiprināt un turpināt.  Visas tabulas no datubāzes tiks izdzēstas. <strong>Tas nozīmē to, ka tiks izdzēstas tabulas un dati</strong>',
	'LBL_CHECKSYS_CALL_TIME'			=> 'PHP izsaukšanas laika atsauce izslēgta',
    'LBL_CHECKSYS_COMPONENT'			=> 'Komponente',
	'LBL_CHECKSYS_COMPONENT_OPTIONAL'	=> 'Papildus komponentes',
	'LBL_CHECKSYS_CONFIG'				=> 'Rakstīšanai pieejams SugarCRM konfigurēšanas fails (config.php)',
	'LBL_CHECKSYS_CONFIG_OVERRIDE'		=> 'Rakstīšanai pieejams SugarCRM konfigurēšanas fails (config_override.php)',
	'LBL_CHECKSYS_CURL'					=> 'cURL modulis',
    'LBL_CHECKSYS_SESSION_SAVE_PATH'    => 'Sesijas saglabāšanas ceļa uzstādīšana',
	'LBL_CHECKSYS_CUSTOM'				=> 'Rakstīšanai pieejams pielāgots direktorijs',
	'LBL_CHECKSYS_DATA'					=> 'Rakstīšanai pieejami datu apakšdirektoriji',
	'LBL_CHECKSYS_IMAP'					=> 'IMAP modulis',
	'LBL_CHECKSYS_MQGPC'				=> 'Magic Quotes GPC',
	'LBL_CHECKSYS_MBSTRING'				=> 'MB Strings modulis',
	'LBL_CHECKSYS_MEM_OK'				=> 'Labi (bez ierobežojuma)',
	'LBL_CHECKSYS_MEM_UNLIMITED'		=> 'Labi (neierobežots)',
	'LBL_CHECKSYS_MEM'					=> 'PHP atmiņas ierobežojums',
	'LBL_CHECKSYS_MODULE'				=> 'Rakstīšanai pieejami moduļi, apakšdirektoriji un faili',
	'LBL_CHECKSYS_MYSQL_VERSION'		=> 'MySQL versija',
	'LBL_CHECKSYS_NOT_AVAILABLE'		=> 'Nav pieejams',
	'LBL_CHECKSYS_OK'					=> 'Labi',
	'LBL_CHECKSYS_PHP_INI'				=> 'PHP konfigurācijas faila (php.ini) atrašanās vieta:',
	'LBL_CHECKSYS_PHP_OK'				=> 'Labi (ver',
	'LBL_CHECKSYS_PHPVER'				=> 'PHP versija',
    'LBL_CHECKSYS_IISVER'               => 'IIS versija',
    'LBL_CHECKSYS_FASTCGI'              => 'FastCGI',
	'LBL_CHECKSYS_RECHECK'				=> 'Atkārtota pārbaude',
	'LBL_CHECKSYS_SAFE_MODE'			=> 'PHP Safe Mode izslēgta',
	'LBL_CHECKSYS_SESSION'				=> 'Pārrakstāmas sesijas saglabāšanas ceļš (',
	'LBL_CHECKSYS_STATUS'				=> 'Statuss',
	'LBL_CHECKSYS_TITLE'				=> 'Sistēmas pārbaudes apstiprināšana',
	'LBL_CHECKSYS_VER'					=> 'Atrasts: (ver',
	'LBL_CHECKSYS_XML'					=> 'XML parsēšana',
	'LBL_CHECKSYS_ZLIB'					=> 'ZLIB kompresēšanas modulis',
	'LBL_CHECKSYS_ZIP'					=> 'ZIP apstrādes modulis',
    'LBL_CHECKSYS_BCMATH'				=> 'Aprēķinu ar pieņemto precizitāti modulis',
    'LBL_CHECKSYS_HTACCESS'				=> 'AllowOverride uzstādīšana .htaccess failam',
    'LBL_CHECKSYS_FIX_FILES'            => 'Pirms turpināt, Lūdzu salabojiet sekojošos failus vai direktorijas:',
    'LBL_CHECKSYS_FIX_MODULE_FILES'     => 'Pirms turpināt, lūdzu salabojiet moduļa direktorijas un tajās esošos failus:',
    'LBL_CHECKSYS_UPLOAD'               => 'Rakstīšanai pieejams augšupielādes direktorijs',
    'LBL_CLOSE'							=> 'Aizvērt',
    'LBL_THREE'                         => '3',
	'LBL_CONFIRM_BE_CREATED'			=> 'izveidots',
	'LBL_CONFIRM_DB_TYPE'				=> 'Datubāzes tips',
	'LBL_CONFIRM_DIRECTIONS'			=> 'Lūdzu apstipriniet zemāk esošos uzstādījumus. Ja vēlaties izmainīt vērtības, klikšķiniet "Atpakaļ", lai rediģētu, vai klikšķiniet "Tālāk", lai sāktu instalāciju.',
	'LBL_CONFIRM_LICENSE_TITLE'			=> 'Licences informācija',
	'LBL_CONFIRM_NOT'					=> 'nav',
	'LBL_CONFIRM_TITLE'					=> 'Apstiprināt iestatījumus',
	'LBL_CONFIRM_WILL'					=> 'būs',
	'LBL_DBCONF_CREATE_DB'				=> 'Izveidot datubāzi',
	'LBL_DBCONF_CREATE_USER'			=> 'Izveidot lietotāju [Alt+N]',
	'LBL_DBCONF_DB_DROP_CREATE_WARN'	=> 'Uzmanību: Visi Sugar dati tiks dzēsti<br />, ja šī rūtiņa ir atzīmēta.',
	'LBL_DBCONF_DB_DROP_CREATE'			=> 'Dzēst un izveidot no jauna Sugar tabulas?',
    'LBL_DBCONF_DB_DROP'                => 'Dzēst tabulas',
    'LBL_DBCONF_DB_NAME'				=> 'Datubāzes nosaukums',
	'LBL_DBCONF_DB_PASSWORD'			=> 'Sugar datubāzes lietotāja parole',
	'LBL_DBCONF_DB_PASSWORD2'			=> 'Atkārtoti ievadīt Sugar datubāzes lietotāja paroli',
	'LBL_DBCONF_DB_USER'				=> 'Sugar datubāzes lietotājvārds',
    'LBL_DBCONF_SUGAR_DB_USER'          => 'Sugar datubāzes lietotājvārds',
    'LBL_DBCONF_DB_ADMIN_USER'          => 'Sugar administratora lietotājvārds',
    'LBL_DBCONF_DB_ADMIN_PASSWORD'      => 'Datubāzes administratora parole',
	'LBL_DBCONF_DEMO_DATA'				=> 'Aizpildīt datubāzi ar demo datiem?',
    'LBL_DBCONF_DEMO_DATA_TITLE'        => 'Izvēlēties demo datus',
	'LBL_DBCONF_HOST_NAME'				=> 'Resursdatora vārds',
	'LBL_DBCONF_HOST_INSTANCE'			=> 'Saimniekinstance',
	'LBL_DBCONF_HOST_PORT'				=> 'Ports',
    'LBL_DBCONF_SSL_ENABLED'            => 'Aktivizēt SSL savienojumu',
	'LBL_DBCONF_INSTRUCTIONS'			=> 'Lūdzu ievadīt datubāzes konfigurācijas informāciju. Ja neesiet pārliecināts, kā aizpildīt, iesakām lietot noklusētās vērtības.',
	'LBL_DBCONF_MB_DEMO_DATA'			=> 'Vai lietot multi-byte tekstu demo datos?',
    'LBL_DBCONFIG_MSG2'                 => 'Tīmekļa servera nosaukums vai mašīnas (host), uz kura atrodas datubāze (piemēram, localhost vai www.mydomain.com) nosaukums:',
    'LBL_DBCONFIG_MSG3'                 => 'Nosaukums datubāzei, kura saturēs instalējamās Sugar instances datus:',
    'LBL_DBCONFIG_B_MSG1'               => 'Lai uzstādītu Sugar datu bāzi, nepieciešams lietotājvārds un parole administratoram ar tabulu radīšanas un datu bāzē rakstīšanas tiesībām.',
    'LBL_DBCONFIG_SECURITY'             => 'Drošības nolūkiem, tu vari norādīt atsevišķu datubāzes lietotāju, lai pieslēgtos Sugar datubāzei. Lietotājam jābūt iespējai rakstīt, atjaunināt un izgūt datus no Sugar datubāzes, kura tiks izveidota šai instancei. Šis lietotājs var būt datubāzes administrators, vai jūs varat ievadīt jauna vai esoša datubāzes lietotāja informāciju.',
    'LBL_DBCONFIG_AUTO_DD'              => 'Izdari manā vietā',
    'LBL_DBCONFIG_PROVIDE_DD'           => 'Norādiet esošu lietotāju',
    'LBL_DBCONFIG_CREATE_DD'            => 'Definēt lietotāju, lai izveidotu',
    'LBL_DBCONFIG_SAME_DD'              => 'Tāds pats, kā administratora lietotājs',
	//'LBL_DBCONF_I18NFIX'              => 'Apply database column expansion for varchar and char types (up to 255) for multi-byte data?',
    'LBL_FTS'                           => 'Pilna teksta meklēšana',
    'LBL_FTS_INSTALLED'                 => 'Instalēts',
    'LBL_FTS_INSTALLED_ERR1'            => 'Pilna teksta meklēšanas iespējas nav instalētas.',
    'LBL_FTS_INSTALLED_ERR2'            => 'Jūs joprojām varat instalēt, bet nebūs iespējams lietot pilna teksta meklēšanas funkcionalitāti. Lūdzu skatieties datubāzes servera instalācijas pamācībā, kā to darīt vai kontaktējieties ar savu administratoru.',
	'LBL_DBCONF_PRIV_PASS'				=> 'Priviliģēta datu bāzes lietotāja parole',
	'LBL_DBCONF_PRIV_USER_2'			=> 'Vai augstāk norādītais ir priviliģēta lietotāja konts?',
	'LBL_DBCONF_PRIV_USER_DIRECTIONS'	=> 'Šim priviliģētajam lietotājam nepieciešamas atbilstošas tiesības datu bāzes radīšanai, tabulu radīšanai/dzēšanai un lietotāju radīšanai. Šis priviliģētais datu bāzes lietotājs tiks izmantots šo uzdevumu izpildei pēc vajadzības vienīgi instalācijas gaitā. Variet izmantot arī to pašu lietotāju, ko iepriekš, ja tam ir pietiekošas tiesības.',
	'LBL_DBCONF_PRIV_USER'				=> 'Priviliģēta datu bāzes lietotāja lietotājvārds',
	'LBL_DBCONF_TITLE'					=> 'Datubāzes konfigurācija',
    'LBL_DBCONF_TITLE_NAME'             => 'Ievadiet datubāzes nosaukumu',
    'LBL_DBCONF_TITLE_USER_INFO'        => 'Ievadiet Datubāzes lietotāja informāciju',
	'LBL_DISABLED_DESCRIPTION_2'		=> 'Pēc šīm izmaiņām klikšķiniet pogu "Sākt, lai sāktu instalāciju. <i>Kad instalācija ir pabeigta, jāizmaina vērtība &#39;installer_locked&#39; uz &#39;true&#39;</i>',
	'LBL_DISABLED_DESCRIPTION'			=> 'Šī instalācijas pakotne jau ir vienreiz darbināta un tādēļ drošības apsvērumu dēļ aizsargāta no palaišanas otrreiz. Ja esat pilnīgi pārliecināts, ka gribiet to palaist atkal, konfigurācijas datnē config.php atrodiet (vai pievienojiet) mainīgo $#39;installer_locked$#39; un iestatiet vērtību $#39;false$#39;.  Komandrindai būtu jāizskatās šādi:',
	'LBL_DISABLED_HELP_1'				=> 'Instalēšanas palīdzībai, apmeklējiet SugarCRM',
    'LBL_DISABLED_HELP_LNK'               => 'http://www.sugarcrm.com/forums/',
	'LBL_DISABLED_HELP_2'				=> 'Atbalsta forums',
	'LBL_DISABLED_TITLE_2'				=> 'SugarCRM instalācija tika deaktivizēta',
	'LBL_DISABLED_TITLE'				=> 'SugarCRM instalācija deaktivizēta',
	'LBL_EMAIL_CHARSET_DESC'			=> 'Jūsu lokalizācijā biežāk izmantotā rakstzīmju kopa',
	'LBL_EMAIL_CHARSET_TITLE'			=> 'Izejošo e-pastu iestatījumi',
    'LBL_EMAIL_CHARSET_CONF'            => 'Simbolu kopa izejošajam e-pastam',
	'LBL_HELP'							=> 'Palīdzība',
    'LBL_INSTALL'                       => 'Instalēt',
    'LBL_INSTALL_TYPE_TITLE'            => 'Instalācijas iespējas',
    'LBL_INSTALL_TYPE_SUBTITLE'         => 'Izvēlieties instalēšanas tipu',
    'LBL_INSTALL_TYPE_TYPICAL'          => '<b>Tipiska instalācija</b>',
    'LBL_INSTALL_TYPE_CUSTOM'           => '<b>Pielāgota instalācija</b>',
    'LBL_INSTALL_TYPE_MSG1'             => 'Atslēga ir nepieciešama galvenā lietojuma funkcionalitātei, bet nav nepieciešama instalācijai. Atslēga šoreiz nav obligāti jāievada, bet tā būs nepieciešama pēc lietojuma instalācijas.',
    'LBL_INSTALL_TYPE_MSG2'             => 'Instalācijai ir nepieciešama minimāla informācija. Iesakāms jauniem lietotājiem.',
    'LBL_INSTALL_TYPE_MSG3'             => 'Nodrošina papildu iespējas instalācijas laikā. Vairums šo iespēju ir pieejamas pēc instalācijas administrācijas ekrānos. Ieteicams tikai pieredzējušiem lietotājiem.',
	'LBL_LANG_1'						=> 'Lai lietotu kādu citu nevis noklusēto Sugar valodu (US_angļu), tagad variet augšuplādēt un instalēt valodu paku. Valodu pakas ielāde un instalēšana ir iespējama arī no paša Sugar lietojuma. Ja vēlaties šo soli izlaist, spiediet Nākošais.',
	'LBL_LANG_BUTTON_COMMIT'			=> 'Instalēt',
	'LBL_LANG_BUTTON_REMOVE'			=> 'Noņemt',
	'LBL_LANG_BUTTON_UNINSTALL'			=> 'Atinstalēt',
	'LBL_LANG_BUTTON_UPLOAD'			=> 'Augšuplādēt',
	'LBL_LANG_NO_PACKS'					=> 'neviens',
	'LBL_LANG_PACK_INSTALLED'			=> 'Ir uzinstalētas sekojošas valodu pakas:',
	'LBL_LANG_PACK_READY'				=> 'Sekojošas valodu pakas ir gatavas instalēšanai:',
	'LBL_LANG_SUCCESS'					=> 'Valodu pakas tika veiksmīgi augšuplādētas.',
	'LBL_LANG_TITLE'			   		=> 'Valodas paka',
    'LBL_LAUNCHING_SILENT_INSTALL'     => 'Instalē Sugar. Tas var aizņemt vairākas minūtes.',
	'LBL_LANG_UPLOAD'					=> 'Augšuplādēt valodas paku',
	'LBL_LICENSE_ACCEPTANCE'			=> 'Licences apstiprināšana',
    'LBL_LICENSE_CHECKING'              => 'Pārbauda sistēmas savietojamību.',
    'LBL_LICENSE_CHKENV_HEADER'         => 'Pārbauda vidi',
    'LBL_LICENSE_CHKDB_HEADER'          => 'Pārbauda DB, FTS pilnvaras.',
    'LBL_LICENSE_CHECK_PASSED'          => 'Sistēmas savietojamības pārbaude pabeigta.',
    'LBL_LICENSE_REDIRECT'              => 'Pāradresē',
	'LBL_LICENSE_DIRECTIONS'			=> 'Ja jums ir licences informācija, lūdzu ievadiet to zemāk esošajos laukos.',
	'LBL_LICENSE_DOWNLOAD_KEY'			=> 'Ievadīt lejupielādes atslēgu',
	'LBL_LICENSE_EXPIRY'				=> 'Derīgs līdz',
	'LBL_LICENSE_I_ACCEPT'				=> 'Apstiprinu',
	'LBL_LICENSE_NUM_USERS'				=> 'Lietotāju skaits',
	'LBL_LICENSE_PRINTABLE'				=> 'Drukāšanas skatījums',
    'LBL_PRINT_SUMM'                    => 'Drukāt kopsavilkumu',
	'LBL_LICENSE_TITLE_2'				=> 'SugarCRM licence',
	'LBL_LICENSE_TITLE'					=> 'Licences informācija',
	'LBL_LICENSE_USERS'					=> 'Licencētie lietotāji',

	'LBL_LOCALE_CURRENCY'				=> 'Valūtas uzstādījumi',
	'LBL_LOCALE_CURR_DEFAULT'			=> 'Noklusējuma valūta',
	'LBL_LOCALE_CURR_SYMBOL'			=> 'Valūtas simbols',
	'LBL_LOCALE_CURR_ISO'				=> 'Valūtas kods (ISO 4217)',
	'LBL_LOCALE_CURR_1000S'				=> '1000 atdalītājs',
	'LBL_LOCALE_CURR_DECIMAL'			=> 'Decimālais atdalītājs',
	'LBL_LOCALE_CURR_EXAMPLE'			=> 'Piemērs',
	'LBL_LOCALE_CURR_SIG_DIGITS'		=> 'Zīmīgie cipari',
	'LBL_LOCALE_DATEF'					=> 'Noklusētais datuma formāts',
	'LBL_LOCALE_DESC'					=> 'Norādītie uzstādijumi būs spēkā globāli visā Sugar instancē.',
	'LBL_LOCALE_EXPORT'					=> 'Simbolu kopa Importēšanai/Eksportēšanai<br> <i>(E-pasts, .csv, vizītkarte, PDF, datu imports)</i>',
	'LBL_LOCALE_EXPORT_DELIMITER'		=> 'Eksporta (.csv) atdalītājs',
	'LBL_LOCALE_EXPORT_TITLE'			=> 'Importēšana/eksportēšana uzstādījumi',
	'LBL_LOCALE_LANG'					=> 'Noklusētā valoda',
	'LBL_LOCALE_NAMEF'					=> 'Noklusētais nosaukuma formāts',
	'LBL_LOCALE_NAMEF_DESC'				=> 's = uzruna<br />f = vārds<br />l = uzvārds',
	'LBL_LOCALE_NAME_FIRST'				=> 'Jānis',
	'LBL_LOCALE_NAME_LAST'				=> 'Bērziņš',
	'LBL_LOCALE_NAME_SALUTATION'		=> 'Dr.',
	'LBL_LOCALE_TIMEF'					=> 'Noklusētais laika formāts',
	'LBL_LOCALE_TITLE'					=> 'Lokālie iestatījumi',
    'LBL_CUSTOMIZE_LOCALE'              => 'Pielāgot lokalizācijas iestatījumus',
	'LBL_LOCALE_UI'						=> 'Lietotāja saskarne',

	'LBL_ML_ACTION'						=> 'Darbība',
	'LBL_ML_DESCRIPTION'				=> 'Apraksts',
	'LBL_ML_INSTALLED'					=> 'Instalēšanas datums',
	'LBL_ML_NAME'						=> 'Nosaukums',
	'LBL_ML_PUBLISHED'					=> 'Publicēšanas datums',
	'LBL_ML_TYPE'						=> 'Tips',
	'LBL_ML_UNINSTALLABLE'				=> 'Atinstalējams',
	'LBL_ML_VERSION'					=> 'Versija',
	'LBL_MSSQL'							=> 'SQL Serveris',
	'LBL_MSSQL_SQLSRV'				    => 'SQL Serveris (Microsoft SQL Server Driver priekš PHP)',
	'LBL_MYSQL'							=> 'MySQL',
    'LBL_MYSQLI'						=> 'MySQL (mysqli paplašinājums)',
	'LBL_IBM_DB2'						=> 'IBM DB2',
	'LBL_NEXT'							=> 'Nākamais',
	'LBL_NO'							=> 'Nē',
    'LBL_ORACLE'						=> 'Oracle',
	'LBL_PERFORM_ADMIN_PASSWORD'		=> 'Uzstāda vietnes administratora paroli',
	'LBL_PERFORM_AUDIT_TABLE'			=> 'audita tabula /',
	'LBL_PERFORM_CONFIG_PHP'			=> 'Sugar konfigurācijas faila izveidošana',
	'LBL_PERFORM_CREATE_DB_1'			=> '<b>Datubāzes izveidošana</b>',
	'LBL_PERFORM_CREATE_DB_2'			=> '<b>ieslēgts</b>',
	'LBL_PERFORM_CREATE_DB_USER'		=> 'Datubāzes lietotājvārda un paroles izveidošana...',
	'LBL_PERFORM_CREATE_DEFAULT'		=> 'Izveidot noklusētos Sugar datus',
	'LBL_PERFORM_CREATE_LOCALHOST'		=> 'Datubāzes lietotājvārda un paroles izveide priekš localhost...',
	'LBL_PERFORM_CREATE_RELATIONSHIPS'	=> 'Sugar tabulu saišu veidošana',
	'LBL_PERFORM_CREATING'				=> 'veido /',
	'LBL_PERFORM_DEFAULT_REPORTS'		=> 'Noklusēto ziņojumu izveide',
	'LBL_PERFORM_DEFAULT_SCHEDULER'		=> 'Noklusēto plānotāja uzdevumu izveide',
	'LBL_PERFORM_DEFAULT_SETTINGS'		=> 'Noklusēto parametru ievadīšana',
	'LBL_PERFORM_DEFAULT_USERS'			=> 'Noklusēto lietotāju izveide',
	'LBL_PERFORM_DEMO_DATA'				=> 'Datubāzes tabulu aizpildīšana ar demo datiem (tas var aizņemt nedaudz laika)',
	'LBL_PERFORM_DONE'					=> 'izdarīts',
	'LBL_PERFORM_DROPPING'				=> 'dzēšana /',
	'LBL_PERFORM_FINISH'				=> 'Pabeigt',
	'LBL_PERFORM_LICENSE_SETTINGS'		=> 'Licences informācijas atjaunošana',
	'LBL_PERFORM_OUTRO_1'				=> 'Sugar uzstādīšana',
	'LBL_PERFORM_OUTRO_2'				=> 'pabeigta!',
	'LBL_PERFORM_OUTRO_3'				=> 'Kopējais laiks:',
	'LBL_PERFORM_OUTRO_4'				=> 'sekundes.',
	'LBL_PERFORM_OUTRO_5'				=> 'Izmantotā atmiņa:',
	'LBL_PERFORM_OUTRO_6'				=> 'baiti.',
	'LBL_PERFORM_OUTRO_7'				=> 'Sistēma ir instalēta un nokonfigurēta lietošanai.',
	'LBL_PERFORM_REL_META'				=> 'relationship meta ...',
	'LBL_PERFORM_SUCCESS'				=> 'Izdarīts!',
	'LBL_PERFORM_TABLES'				=> 'Sugar lietojumprogrammas tabulu, audita tabulu  un saišu metadatu izveide',
	'LBL_PERFORM_TITLE'					=> 'Veikt uzstādīšanu',
	'LBL_PRINT'							=> 'Drukāt',
	'LBL_REG_CONF_1'					=> 'Lūdzu, aizpildiet formu zemāk, lai saņemtu produktu paziņojumus, mācību jaunumus, īpašos piedāvājumus un īpašu notikumu ielūgumus no SugarCRM. Mēs nepārdodam, neizīrējam, nepiedavājam koplietošanai vai citādi neizplatām šeit apkopoto informāciju.',
	'LBL_REG_CONF_2'					=> 'Obligātie reģistrācijas lauki ir vārds un e-pasta adrese. Pārējie lauki nav obligāti, bet ir noderīgi. Mēs nepārdodam, neizīrējam, nepiedavājam koplietošanai vai citādi neizplatām šeit apkopoto informāciju.',
	'LBL_REG_CONF_3'					=> 'Paldies, ka reģistrējāties. Klikšķiniet uz pogas Beigt, lai ierakstītos SugarCRM. Pirmajā ierakstīšanās reizē būs jāizmanto lietotājvārds "admin" un parole, kura tika ievadīta instalācijas otrajā solī.',
	'LBL_REG_TITLE'						=> 'Reģistrācija',
    'LBL_REG_NO_THANKS'                 => 'Nē, paldies',
    'LBL_REG_SKIP_THIS_STEP'            => 'Izlaist šo soli',
	'LBL_REQUIRED'						=> '* Obligāts lauks',

    'LBL_SITECFG_ADMIN_Name'            => 'Sugar lietojumprogrammas administratora vārds',
	'LBL_SITECFG_ADMIN_PASS_2'			=> 'Atkārtoti ievadi Sugar administratora paroli',
	'LBL_SITECFG_ADMIN_PASS_WARN'		=> 'Uzmanību: Tiks pārrakstīta administratora parole no iepriekšējas instalācijas.',
	'LBL_SITECFG_ADMIN_PASS'			=> 'Sugar administratora lietotāja parole',
	'LBL_SITECFG_APP_ID'				=> 'Lietojumprogrammas ID',
	'LBL_SITECFG_CUSTOM_ID_DIRECTIONS'	=> 'Ja izvēlēts, tad jāpiedāvā lietojumprogrammas ID, lai pārrakstītu automātiski ģenerēto ID. ID nodrošina to, ka Sugar eksemplāra sesijas netiek lietotas citos eksemplāros. Ja jums ir Sugar instalāciju klasteris, tiem visiem ir jāizmanto kopīgs lietojumprogrammas ID.',
	'LBL_SITECFG_CUSTOM_ID'				=> 'Ievadiet savu lietojumprogrammas ID',
	'LBL_SITECFG_CUSTOM_LOG_DIRECTIONS'	=> 'Ja izvēlēts, nepieciešams norādīt žurnāla direktoriju, lai pārrakstītu Sugar noklusēto log direktoriju. Neatkarīgi no tā, kur log fails ir novietots, piekļuve caur tīmekļa pārlūku būs ierobežota, izmantojot .htaccess.',
	'LBL_SITECFG_CUSTOM_LOG'			=> 'Izmantot pielāgotu Žurnāla direktoriju',
	'LBL_SITECFG_CUSTOM_SESSION_DIRECTIONS'	=> 'Ja izvēlēts, vajag izveidot drošu katalogu, kur glabāt sesijas informāciju. To var darīt, lai novērstu sesijas datu ievainojamību uz koplietojamajiem serveriem.',
	'LBL_SITECFG_CUSTOM_SESSION'		=> 'Lietot pielāgotu Sugar sesijas direktoriju',
	'LBL_SITECFG_DIRECTIONS'			=> 'Lūdzu, zemāk ievadiet savas vietnes konfigurācijas informāciju. Ja neesiet pārliecināts par laukiem, iesakām izmantot noklusētās vērtības.',
	'LBL_SITECFG_FIX_ERRORS'			=> '<b>Lūdzu, pirms turpināt izlabojiet sekojošas kļūdas:</b>',
	'LBL_SITECFG_LOG_DIR'				=> 'Žurnāla direktorija',
	'LBL_SITECFG_SESSION_PATH'			=> 'Ceļš uz sesijas direktoriju<br />(jābūt ierakstāmam)',
	'LBL_SITECFG_SITE_SECURITY'			=> 'Izvēlieties drošības iespējas',
	'LBL_SITECFG_SUGAR_UP_DIRECTIONS'	=> 'Ja izvēlēts, sistēma periodiski pārbaudīs lietojuma jaunāko versiju pieejamību.',
	'LBL_SITECFG_SUGAR_UP'				=> 'Automātiski pārbaudīt atjauninājumus?',
	'LBL_SITECFG_SUGAR_UPDATES'			=> 'Sugar atjauninājumu konfigurācija',
	'LBL_SITECFG_TITLE'					=> 'Vietnes konfigurācija',
    'LBL_SITECFG_TITLE2'                => 'Administratora identificēšana',
    'LBL_SITECFG_SECURITY_TITLE'        => '$#39;Vietnes drošība',
	'LBL_SITECFG_URL'					=> 'Sugar instances URL',
	'LBL_SITECFG_USE_DEFAULTS'			=> 'Lietot noklusējumus?',
	'LBL_SITECFG_ANONSTATS'             => 'Vai sūtīt anonīmu izmantošanas statistiku?',
	'LBL_SITECFG_ANONSTATS_DIRECTIONS'  => 'Ja atzīmēts, Sugar sūtīs <b>anonīmu</b> statistiku par instalēšanas procesu uz SugarCRM Inc. katru reizi, kad sistēma pārbaudīs vai ir pieejama jauna versija. Šī informācija palīdzēs mums labāk saprast, kā lietojumprogramma tiek lietota un palīdzēs veikt uzlabojumus produktā.',
    'LBL_SITECFG_URL_MSG'               => 'Ievadiet URL, kurš tiks izmantots, lai piekļutu Sugar instancei pēc tās instalēšanas. URL tiks izmantotas arī kā pamata URL Sugar lietojumprogrammas lapās. URL ir jāiekļauj tīmekļa serveris, datora nosaukums vai IP adrese.',
    'LBL_SITECFG_SYS_NAME_MSG'          => 'Ievadiet sistēmas nosaukumu. Nosaukums tiks attēlots pārlūkprogrammas virsraksta joslā, kad lietotāji apmeklēs Sugar lietojumprogrammu.',
    'LBL_SITECFG_PASSWORD_MSG'          => 'Pēc instalācijas izmantojiet Sugar administratora lietotāju (noklusētais lietotājvārds = admin), lai ielogotos Sugar instancē.  Ievadiet administratora paroli. Paroli pēc pirmās ielogošanās var izmainīt. Noklusētā vietā var izmantot arī citu administratora lietotājvārdu.',
    'LBL_SITECFG_COLLATION_MSG'         => 'Izvēlieties savas sistēmas salīdzināšanas (kārtošanas) uzstādījumus. Šie uzstādījumu radīs tabulas ar Jūsu izvēlēto valodu. Ja Jūsu izvēlētai valodai nav nepieciešami īpaši uzstādījumi, izmantojiet noklusētās vērtības.',
    'LBL_SPRITE_SUPPORT'                => 'Sprite atbalsts',
	'LBL_SYSTEM_CREDS'                  => 'Sistēmas pilnvaras',
    'LBL_SYSTEM_ENV'                    => 'Sistēmas vide',
	'LBL_START'							=> 'Uzsākts',
    'LBL_SHOW_PASS'                     => 'Rādīt paroles',
    'LBL_HIDE_PASS'                     => 'Paslēpt paroles',
    'LBL_HIDDEN'                        => '<i>(paslēpts)</i>',
//	'LBL_NO_THANKS'						=> 'Continue to installer',
	'LBL_CHOOSE_LANG'					=> '<b>Izvēlieties valodu</b>',
	'LBL_STEP'							=> 'Solis',
	'LBL_TITLE_WELCOME'					=> 'Sveicināti SugarCRM vidē',
	'LBL_WELCOME_1'						=> 'Instalācija izveido SugarCRM datubāzes tabulas un uzstāda konfigurācijas mainīgos, kuri nepieciešami, lai sāktu. Viss process var aizņemt aptuveni 10 minūtes.',
    //welcome page variables
    'LBL_TITLE_ARE_YOU_READY'            => 'Vai esat gatavs instalēšanai?',
    'REQUIRED_SYS_COMP' => 'Nepieciešamās sistēmas komponentes',
    'REQUIRED_SYS_COMP_MSG' =>
                    'Pirms uzsākat, lūdzu pārliecinieties, ka Jūsu rīcībā ir sekojošu sistēmas komponenšu atbalstītas versijas:<br><br />                      <ul><br />                      <li> Datubāze/Datu bāzes vadības sistēma (Piemēram: MySQL, SQL Server, Oracle, DB2)</li><br />                      <li> Web serveris (Apache, IIS)</li><br />                      </ul><br />                     Iepazīstieties ar Laidiena piezīmēs iekļauto Saderības matricu sistēmas komponentēm tai Sugar versijai, kuru instalējiet.<br>',
    'REQUIRED_SYS_CHK' => 'Sākotnējā sistēmas pārbaude',
    'REQUIRED_SYS_CHK_MSG' =>
                    'Sākoties instalācijas procesam, uz web servera, kurā izvieto Sugar failus, notiek sistēmas pābaude ar mērķi pārliecināties, ka sistēma ir pareizi konfigurēta un satur visas sekmīgai instalāciaji nepieciešamās komponentes. <br><br><br />                      Tiek pārbaudīts sekojošais:<br><br />                      <ul><br />                      <li><b>PHP versija</b> &#8211; jābūt saskaņotai ar Sugar lietojumu</li><br />                                        <li><b>Sesijas manīgie</b> &#8211; jādarbojas pienācīgi</li><br />                                            <li> <b>MB Strings</b> &#8211; jābūt instalētiem un uzstādītiem php.ini datnē</li><br /><br />                      <li> <b>Datu bāzes atbalsts</b> &#8211; jānodrošina šādām bāzēm: MySQL, SQL<br />                      Server, Oracle, or DB2</li><br /><br />                      <li> <b>Config.php</b> &#8211; datnei jāeksistē un jābūt iespējai nodrošināt tiesības tajā rakstīt</li><br />					  <li>Sekojošiem Sugar failiem jābūt pieejamiem rakstīšanai:<ul><li><b>/custom</li><br /><li>/cache</li><br /><li>/modules</li><br /><li>/upload</b></li></ul></li></ul><br />                                 Ja pārbaude ir nesekmīga, instalācijas process apstāsies ar kļūdas paziņojumu, kas paskaidro iemeslu. Pēc nepieciešamo izmaiņu ieviešanas, variet atkārtot sistēmas pārbaudi un turpināt instalāciju.<br>',
    'REQUIRED_INSTALLTYPE' => 'Tipiska vai pielāgota instalācija',
    'REQUIRED_INSTALLTYPE_MSG' =>
                    "Kad sistēmas pābaude ir pabeigta, variet izvēlēties Tipveida vai Pielāgotu instalāciju.<br><br> Gan <b>Tipveida </b> gan<b>Pielāgotai </b> instalācijai jums nepieciešams zināt sekojošo:<br><br />                      <ul><br />                      <li> <b>Datu bāzes tipu</b>, kas saturēs Sugar datus<ul><li>Piemēroti datu bāzu tipi ir: MySQL, MS SQL Server, Oracle, DB2.<br><br></li></ul></li><br />                      <li> <b>Web servera nosaukumu</b> vai datoru (saimnieku), uz kura datu bāze izvietota<br />                      <ul><li>Tas var būt <i>localhost</i>, ja datu bāze atrodas Jūsu datorā, vai arī uz tā paša web servera vai datora, kur atrodas Sugar faili.<br><br></li></ul></li><br />                      <li><b>Datu bāzes nosaukums</b> kādu vēlaties izmantot Sugar datu glabāšanai</li><br />                        <ul><br />                          <li> Iespējams, Jūsu rīcībā jau or kāda datu bāze, kuru vēlaties izmantot. Ja norādīsiet tās vārdu, esošās datu bāzes tabulas instalācijas gaitā tiks dzēstas un aizstātas ar Sugar datu bāzes shēmu.</li><br />                          <li>Ja Jums šādas esošas datu bāzes nav, ar norādīto vārdu instalācijas gaitā tiks radīta jauna datu bāze.<br><br></li><br />                        </ul><br />                      <li><b>Datu bāzes administratora lietotājvārds un parole</b> <ul><li>Datu bāzes administratoram jābūt iepējai radīt tabulas un lietotājus, kā arī rakstīt datu bāzē.</li><li>Ja datu bāze nav uz Jūsu datora vai pats neesat datu bāzes administrators, šīs informācijas ieguvei var būt nepieciešams sazināties ar datu bāzes administratoru.<br><br></ul></li></li><br />                      <li> <b>Sugar datu bāzes lietotājvārds un parole</b><br />                      </li><br />                        <ul><br />                          <li> Lietotājs var būt datu bāzes administrators, vai cits eksistējošs lietotājs, kura vārdu norādiet. </li><br />                          <li>Ja velāties šim nolūkam radīt jaunu datu bāzes lietotāju, instalācijas gaitā Jums būs iespēja norādīt jaunu lietotājvārdu un paroli. Instalācijas procesā šis lietotājs tiks radīts. </li><br />                        </ul></ul><p><br /><br />                       <b>Pielāgotajai</b> instalācijai Jums var būt nepieciešams zināt vēl sekojošo:<br><br />                      <ul><br />                      <li> <b>Sugar instances URL </b>, lai piekļūtu sistēmai pēc tās uzinstalēšanas.<br />                      Šim URL vajadzētu iekļaut web servera vai datora vārdu, vai arī IP adresi.<br><br></li><br />                                  <li> [Neobligāti] <b>Ceļu uz sesijas direktoriju</b>, ja vēlaties uzstādīt savu sesijas direktoriju Sugar informācijai nolūkā novērst sesijas datu ievainojamību koplietošanas serveru dēļ.<br><br></li><br />                                  <li> [Neobligāti] <b>Ceļu uz žurnālu direktoriju</b>, ja vēlaties noklusētā direktorija vietā izmantot citu.<br><br></li><br />                                  <li> [Neobligāti] <b>Lietojuma ID</b>, ja vēlaties aizstāt automātiski ģenerēto<br />                                  ID, kas nodrošina, lai vienas Sugar instances sesijas neizmanto cita Sugar instance.<br><br></li><br />                                  <li><b>Rakstzīmju kopa</b>,kuru parasti izmanto Jūsu konsolē.<br><br></li></ul><br />                                 Detalizētāka informācija pieejama Instalācijas rokas grāmatā (Installation Guide).",
    'LBL_WELCOME_PLEASE_READ_BELOW' => 'Pirms turpināt instalāciju, Lūdzu izlasiet sekojošu svarīgu informāciju. Informācija palīdzēs noteikt vai jūs šobrīd esat gatavs lietojuma instalācijai.',


	'LBL_WELCOME_2'						=> 'Instalēšanas dokumentācija pieejama <a href="http://www.sugarcrm.com/crm/installation" target="_blank">Sugar Wiki</a>. <BR><BR> Lai instalēšanas jautājumos saņemtu palīdzību no SugarCRM atbalsta inženiera, lūdzu ielogojieties <a target="_blank" href="http://support.sugarcrm.com">SugarCRM atbalsta portālā</a> un iesniedziet atbalsta pieprasījumu.',
	'LBL_WELCOME_CHOOSE_LANGUAGE'		=> '<b>Izvēlieties valodu</b>',
	'LBL_WELCOME_SETUP_WIZARD'			=> 'Uzstādīšanas vednis',
	'LBL_WELCOME_TITLE_WELCOME'			=> 'Sveicināti SugarCRM vidē',
	'LBL_WELCOME_TITLE'					=> 'SugarCRM uzstādīšanas vednis',
	'LBL_WIZARD_TITLE'					=> 'Sugar uzstādīšanas vednis:',
	'LBL_YES'							=> 'Jā',
    'LBL_YES_MULTI'                     => 'Jā - Multibyte',
	// OOTB Scheduler Job Names:
	'LBL_OOTB_WORKFLOW'		=> 'Izpildīt darbplūsmas uzdevumus',
	'LBL_OOTB_REPORTS'		=> 'Izpildīt atskaišu ģenerēšanas ieplānotos uzdevumus',
	'LBL_OOTB_IE'			=> 'Pārbaudīt ienākošā e-pasta kastītes',
	'LBL_OOTB_BOUNCE'		=> 'Procesa noraidītos kompaņas e-pastus apstrādāt pa nakti',
    'LBL_OOTB_CAMPAIGN'		=> 'Masu e-pasta kampaņas izpildīt pa nakti',
	'LBL_OOTB_PRUNE'		=> 'Attīrīt datubāzi 1. mēneša dienā',
    'LBL_OOTB_TRACKER'		=> 'Arhivēt sekotāja tabulas',
    'LBL_OOTB_SEND_EMAIL_REMINDERS' => 'Ieslēgt e-pasta atgādinājumu paziņojumus',
    'LBL_UPDATE_TRACKER_SESSIONS' => 'Atjaunināt tracker_sessions tabulu',
    'LBL_OOTB_CLEANUP_QUEUE' => 'Attīrīt uzdevumu rindu',


    'LBL_FTS_TABLE_TITLE'     => 'Ievadīt pilna teksta meklēšanas iestatījumus',
    'LBL_FTS_HOST'     => 'Resursdators',
    'LBL_FTS_PORT'     => 'Ports',
    'LBL_FTS_TYPE'     => 'Meklēšanas dzinēja tips',
    'LBL_FTS_HELP'      => 'Lai aktivizētu pilna teksta meklēšanu, izvēlieties meklēšanas dziņa tipu un ievadiet dziņa hostu un portu . Sugar ietver iebūvētu atbalstu elastīgās meklēšanas dzinējam.',
    'LBL_FTS_REQUIRED'    => 'Nepieciešama elastīgā meklēšana.',
    'LBL_FTS_CONN_ERROR'    => 'Nevar pieslēgties Pilna teksta meklēšanas serverim, lūdzu pārbaudiet iestatījumus.',
    'LBL_FTS_NO_VERSION_AVAILABLE'    => 'Nav pieejama neviena Pilna teksta meklēšanas servera versija, pārbaudiet iestatījumus.',
    'LBL_FTS_UNSUPPORTED_VERSION'    => 'Atklāta Elastīgās meklēšanas neatbalstīta versija. Izmantojiet versijas: %s',

    'LBL_PATCHES_TITLE'     => 'Instalēt jaunākos ielāpus',
    'LBL_MODULE_TITLE'      => 'Instalēt valodu pakas',
    'LBL_PATCH_1'           => 'Ja gribiet izlaist šo soli, spiediet Tālāk',
    'LBL_PATCH_TITLE'       => 'Sistēmas ielāps',
    'LBL_PATCH_READY'       => 'Instalēšanai gatavi, sekojoši ielāpi:',
	'LBL_SESSION_ERR_DESCRIPTION'		=> "Kamēr pieslēgta šim serverim, svarīgas informācijas saglabāšanai SugarCRM izmanto PHP sesijas. Jūsu PHP instalācijā sesiju informācija nav pareizi konfigurēta.<br><br>Ierasta konfigurēšanas kļūda ir tā , ka <b>$#39;session.save_path$#39;</b> direktīva nenorāda uz derīgu direktoriju.  <br><br />											<br> Izlabojiet <a target=_new href=$#39;http://us2.php.net/manual/en/ref.session.php$#39;>PHP konfigurācijā</a>  php.ini datnē te zemāk.",
	'LBL_SESSION_ERR_TITLE'				=> 'PHP sesiju konfigurācijas kļūda',
	'LBL_SYSTEM_NAME'=>'Sistēmas nosaukums',
    'LBL_COLLATION' => 'Salīdzināšanas iestatījumi',
	'LBL_REQUIRED_SYSTEM_NAME'=>'Ievadiet sistēmas vārdu Sugar instancei.',
	'LBL_PATCH_UPLOAD' => 'Izvēlieties ielāpa failu Jūsu datorā',
	'LBL_BACKWARD_COMPATIBILITY_ON' => 'Php saderības režīms ir ieslēgts. Iestatiet zend.ze1_compatibility_mode uz Izslēgts, lai turpinātu',

    'meeting_notification_email' => array(
        'name' => 'E-pasta paziņojumi par tikšanos',
        'subject' => 'SugarCRM tikšanās - $event_name ',
        'description' => 'Šī veidne tiek izmantota, kad Sistēma lietotājam nosūta paziņojumus par tikšanos.',
        'body' => '<div>
	<p>Kam: $assigned_user</p>

	<p>$assigned_by_user uzaicināja Jūs uz tikšanos</p>

	<p>Temats: $event_name<br/>
	Sākuma datums: $start_date<br/>
	Beigu datums: $end_date</p>

	<p>Apraksts: $description</p>

	<p>Pieņemt šo tikšanos:<br/>
	<<a href="$accept_link">$accept_link</a>></p>
	<p>Nekonkrēti pieņemt šo tikšanos:<br/>
	<<a href="$tentative_link">$tentative_link</a>></p>
	<p>Noraidīt šo tikšanos:<br/>
	<<a href="$decline_link">$decline_link</a>></p>
</div>',
        'txt_body' =>
            'Kam: $assigned_user

$assigned_by_user uzaicināja Jūs uz tikšanos

Temats: $event_name
Sākuma datums: $start_date
Beigu datums: $end_date

Apraksts: $description

Pieņemt šo tikšanos:
<$accept_link>

Nekonkrēti pieņemt šo tikšanos
<$tentative_link>

Noraidīt šo tikšanos
<$decline_link>',
    ),

    'call_notification_email' => array(
        'name' => 'E-pasta paziņojumi par zvaniem',
        'subject' => 'SugarCRM zvans- $event_name ',
        'description' => 'Šī veidne tiek izmantota, kad Sistēma lietotājam nosūta paziņojumus par zvanu.',
        'body' => '<div>
	<p>Kam: $assigned_user</p>

	<p>$assigned_by_user uzaicināja Jūs uz zvanu</p>

	<p>Temats: $event_name<br/>
	Sākuma datums: $start_date<br/>
	Ilgums: $hoursh, $minutesm</p>

	<p>Apraksts: $description</p>

	<p>Pieņemt šo zvanu:<br/>
	<<a href="$accept_link">$accept_link</a>></p>
	<p>Nekonkrēti pieņemt šo zvanu:<br/>
	<<a href="$tentative_link">$tentative_link</a>></p>
	<p>Noraidīt šo zvanu:<br/>
	<<a href="$decline_link">$decline_link</a>></p>
</div>',
        'txt_body' =>
            'Kam: $assigned_user

$assigned_by_user uzaicināja Jūs uz zvanu

Temats: $event_name
Sākuma datums: $start_date
Ilgums: $hoursh, $minutesm

Apraksts: $description

Pieņemt šo zvanu:
<$accept_link>

Nekonkrēti pieņemt šo zvanu
<$tentative_link>

Noraidīt šo zvanu
<$decline_link>',
    ),

    'assigned_notification_email' => array(
        'name' => 'E-pasta paziņojumi par piešķiršanu',
        'subject' => 'SugarCRM - piešķirts modulis $module_name ',
        'description' => 'Šī veidne tiek izmantota, kad Sistēma lietotājam nosūta piešķirto uzdevumu.',
        'body' => '<div>
<p>$assigned_by_user piešķīra &nbsp;$module_name lietotājam&nbsp;$assigned_user.</p>

<p>Varat apskatīt šo moduli &nbsp;$module_name saitē:<br/>
	<<a href="$module_link">$module_link</a>></p>
</div>',
        'txt_body' =>
            '$assigned_by_user piešķīra moduli $module_name lietotājam $assigned_user.

Varat apskatīt šo moduli $module_name saitē:
<$module_link>',
    ),

    'scheduled_report_email' => array(
        'name' => 'E-pasta paziņojumi par ieplānotajiem pārskatiem',
        'subject' => 'Ieplānotais pārskats: $report_name no $report_time',
        'description' => 'Šī veidne tiek izmantota, kad Sistēma lietotājam nosūta ieplānoto pārskatu.',
        'body' => '<div>
<p>Godātais/-ā $assigned_user!</p>
<p>Pielikumā ir automātiski ģenerētais pārskats, kas ir ieplānots Jums.</p>
<p>Pārskata nosaukums: $report_name</p>
<p>Pārskata izpildes datums un laiks: $report_time</p>
</div>',
        'txt_body' =>
            'Godātais/-ā $assigned_user!

Pielikumā ir automātiski ģenerētais pārskats, kas ir ieplānots Jums.

Pārskata nosaukums: $report_name

Pārskata izpildes datums un laiks: $report_time',
    ),

    'comment_log_mention_email' => [
        'name' => 'E-pasta paziņojumi par sistēmas komentāru žurnālu',
        'subject' => 'SugarCRM - $initiator_full_name pieminēja jūs modulī $singular_module_name',
        'description' => 'Šī veidne tiek izmantota, lai nosūtītu e-pasta paziņojumus lietotājiem, kas ir atzīmēti komentāru žurnāla sadaļā.',
        'body' =>
            '<div>
                <p>Jūs pieminēja tālāk norādītā ieraksta komentāru žurnālā:  <a href="$record_url">$record_name</a></p>
                <p>Lai apskatītu komentāru, pierakstieties Sugar sistēmā.</p>
            </div>',
        'txt_body' =>
'Jūs pieminēja tālāk norādītā ieraksta komentāru žurnālā: $record_name
            Lai apskatītu komentāru, pierakstieties Sugar sistēmā.',
    ],

    'advanced_password_new_account_email' => array(
        'subject' => 'Jaunā konta informācija',
        'description' => 'Šī veidne tiek lietota, kad sistēmas administrators sūta jaunu paroli lietotājam.',
        'body' => '<div><table border=\"0\" cellspacing=\"0\" cellpadding=\"0\" width="550" align=\"\&quot;\&quot;center\&quot;\&quot;\"><tbody><tr><td colspan=\"2\"><p>Te ir jūsu lietotājvārds un pagaidu parole:</p><p>Lietotājvārds : $contact_user_user_name </p><p>Parole : $contact_user_user_hash </p><br><p><a href="$config_site_url">$config_site_url</a></p><br><p>Pēc pieteikšanās sistēmā ar norādīto paroli, iespējams, jums tiks prasīts nomainīt šo paroli ar tādu, kādu jūs vēlaties lietot.</p> </td> </tr><tr><td colspan=\"2\"></td> </tr> </tbody></table> </div>',
        'txt_body' =>
'
Te ir jūsu lietotājvārds un pagaidu parole:
Lietotājvārds : $contact_user_user_name
Parole : $contact_user_user_hash

$config_site_url

Pēc pieteikšanās sistēmā ar norādīto paroli, iespējams, jums tiks prasīts nomainīt šo paroli ar tādu, kādu jūs vēlaties lietot.',
        'name' => 'Sistēmas ģenerēts paroles e-pasts',
        ),
    'advanced_password_forgot_password_email' => array(
        'subject' => 'Izveidot jaunu paroli jūsu kontam',
        'description' => "Šī veidne tiek lietota, lai nosūtītu lietotājam saiti, kuru noklikšķinot tiks iestatīta jauna konta parole.",
        'body' => '<div><table border=\"0\" cellspacing=\"0\" cellpadding=\"0\" width="550" align=\"\&quot;\&quot;center\&quot;\&quot;\"><tbody><tr><td colspan=\"2\"><p>Jūs nesen pieprasījāt $contact_user_pwd_last_changed iespēju atkārtoti iestatīt jūsu konta paroli. </p><p>Spiediet uz zemāk redzamās saites, lai iestatītu jaunu paroli:</p><p> <a href="$contact_user_link_guid">$contact_user_link_guid</a> </p> </td> </tr><tr><td colspan=\"2\"></td> </tr> </tbody></table> </div>',
        'txt_body' =>
'
Jūs nesen pieprasījāt $contact_user_pwd_last_changed iespēju atkārtoti iestatīt jūsu konta paroli.

Spiediet uz zemāk redzamās saites, lai iestatītu jaunu paroli:

$contact_user_link_guid',
        'name' => 'Aizmirsāt E-pasta paroli?',
        ),

'portal_forgot_password_email_link' => [
    'name' => 'E-pasts aizmirstās Portāla paroles atjaunošanai',
    'subject' => 'Atiestatiet sava uzņēmuma paroli',
    'description' => 'Šī veidne tiek izmantota, lai nosūtītu lietotājam saiti, uz kuras uzklikšķinot, var atiestatīt Portāla lietotāja uzņēmuma paroli.',
    'body' => '<div><table border=\"0\" cellspacing=\"0\" cellpadding=\"0\" width="550" align=\"\&quot;\&quot;center\&quot;\&quot;\"><tbody><tr><td colspan=\"2\"><p>Jūs nesen pieprasījāt sava uzņēmuma paroles nomaiņu. </p><p>Uzklikšķiniet uz zemāk redzamās saites, lai atiestatītu savu paroli:</p><p> <a href="$portal_user_link_guid">$portal_user_link_guid</a> </p> </td> </tr><tr><td colspan=\"2\"></td> </tr> </tbody></table> </div>',
    'txt_body' =>
'
    Jūs nesen pieprasījāt sava uzņēmuma paroles nomaiņu.

    Uzklikšķiniet uz zemāk redzamās saites, lai atiestatītu savu paroli:

    $portal_user_link_guid',
],

    'portal_password_reset_confirmation_email' => [
        'name' => 'E-pasts ar Portāla paroles atiestatīšanas apstiprinājumu',
        'subject' => 'Jūsu uzņēmuma parole ir atiestatīta',
        'description' => 'Šis šablons tiek izmantots, lai nosūtītu Portāla lietotājam apstiprinājumu par to, ka viņa uzņēmuma parole ir atiestatīta.',
        'body' => '<div><table border=\"0\" cellspacing=\"0\" cellpadding=\"0\" width="550" align=\"\&quot;\&quot;center\&quot;\&quot;\"><tbody><tr><td colspan=\"2\"><p>Ar šo e-pastu tiek apstiprināts, ka jūsu Portāla uzņēmuma parole ir atiestatīta. </p><p>Izmantojiet zemāk norādīto saiti, lai pierakstītos Portālā:</p><p> <a href="$portal_login_url">$portal_login_url</a> </p> </td> </tr><tr><td colspan=\"2\"></td> </tr> </tbody></table> </div>',
        'txt_body' =>
            '
    Ar šo e-pastu tiek apstiprināts, ka jūsu Portāla uzņēmuma parole ir atiestatīta.

    Izmantojiet zemāk norādīto saiti, lai pierakstītos Portālā:

    $portal_login_url',
    ],
);
