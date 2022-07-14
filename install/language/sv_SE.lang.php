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
	'LBL_BASIC_SEARCH'					=> 'Vanlig sökning',
	'LBL_ADVANCED_SEARCH'				=> 'Avancerad sökning',
	'LBL_BASIC_TYPE'					=> 'Enkel Typ',
	'LBL_ADVANCED_TYPE'					=> 'Advancerad Typ',
	'LBL_SYSOPTS_1'						=> 'Välj från följande konfigurationsalternativ nedan.',
    'LBL_SYSOPTS_2'                     => 'Vilken typ av databas kommer att användas för Sugar-instansen du installerar?',
	'LBL_SYSOPTS_CONFIG'				=> 'Systemkonfiguration',
	'LBL_SYSOPTS_DB_TYPE'				=> '',
	'LBL_SYSOPTS_DB'					=> 'Ange databastyp',
    'LBL_SYSOPTS_DB_TITLE'              => 'Databastyp',
	'LBL_SYSOPTS_ERRS_TITLE'			=> 'Åtgärda följande fel innan du fortsätter:',
	'LBL_MAKE_DIRECTORY_WRITABLE'      => 'Var god gör följande katalog skrivbar:',


    'ERR_DB_LOGIN_FAILURE_IBM_DB2'		=> 'Angiven databasvärd, användarnamn, och/eller lösenord är ogiltigt och en en koppling till databasen kunde inte göras. Var god och ange giltig information.',
    'ERR_DB_IBM_DB2_CONNECT'			=> 'Angiven databasvärd, användarnamn, och/eller lösenord är ogiltigt och en en koppling till databasen kunde inte göras. Var god och ange giltig information.',
    'ERR_DB_IBM_DB2_VERSION'			=> 'Din version av DB2 (%s) är stöds ej av Sugar. Du måste installera en version som är kompatibel med Sugar applikationen. Vänligen se the Compatibility Matrix i Publicerade Antecknignar för DB2 Versioner som stödjs.',

	'LBL_SYSOPTS_DB_DIRECTIONS'			=> 'Du måste ha en Oracle klient installerad och konfigurerad om du väljer Oracle.',
	'ERR_DB_LOGIN_FAILURE_OCI8'			=> 'Angiven databasvärd, användarnamn, och/eller lösenord är ogiltigt och en en koppling till databasen kunde inte göras. Var god och ange giltig information.',
	'ERR_DB_OCI8_CONNECT'				=> 'Angiven databasvärd, användarnamn, och/eller lösenord är ogiltigt och en en koppling till databasen kunde inte göras. Var god och ange giltig information.',
	'ERR_DB_OCI8_VERSION'				=> 'Din version av Oracle stöds inte av Sugar. Läs "Release notes" för att se vilka Oracle versioner som är kompatibla.',
    'LBL_DBCONFIG_ORACLE'               => 'Vänligen fyll i namnet på din databas. Det här kommer vara standard tabellutrymme som tilldelas till din användare ((SID from tnsnames.ora).',
	// seed Ent Reports
	'LBL_Q'								=> 'Affärsmöjligheter fråga',
	'LBL_Q1_DESC'						=> 'Affärsmöjligheter per typ',
	'LBL_Q2_DESC'						=> 'Affärsmöjligheter per konto',
	'LBL_R1'							=> '6 månaders "pipeline" sälj rapport',
	'LBL_R1_DESC'						=> 'Affärsmöjligheter över de nästkommande 6 månaderna grupperat på månad och typ.',
	'LBL_OPP'							=> 'Affärsmöjligheter datalista',
	'LBL_OPP1_DESC'						=> 'Här kan du ändra utseended på din skräddarsydda fråga.',
	'LBL_OPP2_DESC'						=> 'Denna fråga kommer att hamna under den första frågan i rapporten.',
    'ERR_DB_VERSION_FAILURE'			=> 'Kunde inte kolla databasversion.',

	'DEFAULT_CHARSET'					=> 'UTF-8',
    'ERR_ADMIN_USER_NAME_BLANK'         => 'Ange användarnman för Sugar administratörs användaren.',
	'ERR_ADMIN_PASS_BLANK'				=> 'Provide the password for the Sugar admin user.',

    'ERR_CHECKSYS'                      => 'Fel har upptäckts under kompatibilitetskontrollen. Rätta till problemen som listas nedan och klicka sedan på Försök igen eller starta om installationen för att se till att din SugarCRM-installation fungerar felfritt.',
    'ERR_CHECKSYS_CALL_TIME'            => 'Referenser får just nu skickas vid anrop (detta bör inaktiveras i php.ini)',

	'ERR_CHECKSYS_CURL'					=> 'Inte hittat: Sugar Scheduler körs med begränsad funktionalitet. Tjänsten för e-postarkivering kommer inte att köras.',
    'ERR_CHECKSYS_IMAP'					=> 'Hittades inte: InboundEmail och Campaigns (Email) kräver de nya IMAP-biblioteken. De kommer inte att fungera.',
	'ERR_CHECKSYS_MSSQL_MQGPC'			=> 'Magic Quotes GPC kan inte aktiveras när du använder MS SQL Server.',
	'ERR_CHECKSYS_MEM_LIMIT_0'			=> 'Warning:',
	'ERR_CHECKSYS_MEM_LIMIT_1'			=> '(Set this to',
	'ERR_CHECKSYS_MEM_LIMIT_2'			=> 'M eller mer i din php.ini-fil)',
	'ERR_CHECKSYS_MYSQL_VERSION'		=> 'Minimum Version 4.1.2 - Found:',
	'ERR_CHECKSYS_NO_SESSIONS'			=> 'Kunde inte läsa och skriva sessionsvariabler. Det går inte att fortsätta med installationen.',
	'ERR_CHECKSYS_NOT_VALID_DIR'		=> 'Ogiltig katalog',
	'ERR_CHECKSYS_NOT_WRITABLE'			=> 'Varning: Kan inte skrivas',
	'ERR_CHECKSYS_PHP_INVALID_VER'		=> 'Din version av PHP stöds inte av Sugar. Du måste installera en version som är kompatibel med Sugar applikationen. Var god se kompatibilitets matrisen i "Release Notes" för att hitta de PHP versioner som stöds. Din version är',
	'ERR_CHECKSYS_IIS_INVALID_VER'      => 'Din version av IIS stöds inte av Sugar. Kontrollera kompatibilitets matrisen i "Release notes" för vilka versioner som stöds.',
    'ERR_CHECKSYS_FASTCGI'              => 'Vi ser att du inte använder FastCGI-hanteraren i PHP. Du behöver installera/konfigurera en version som är kompatibel med Sugar-programmet. Var god se kompatibilitetsmatrisen i "Release notes" för de versioner som stöds. Var god se <a href="http://www.iis.net/php/" target="_blank" rel="nofollow noopener noreferrer">http://www.iis.net/php/</a> för detaljer ',
	'ERR_CHECKSYS_FASTCGI_LOGGING'      => 'För en optimal upplevelse använd IIS/FastCGI sapi, sätt fastcgi.loggin till 0 i din php.ini fil.',
    'ERR_CHECKSYS_PHP_UNSUPPORTED'		=> 'Den installerade PHP-versionen stöds inte: ( ver',
    'LBL_DB_UNAVAILABLE'                => 'Databasen otillgänglig',
    'LBL_CHECKSYS_DB_SUPPORT_NOT_AVAILABLE' => 'Databasstöd hittades inte.  Se till att du har de drivrutiner som krävs för en av följande databastyper som stöds: MySQL, MS SQLServer, Oracle, or DB2.  Du kan behöva avkommentera tillägget i php.ini-filen, eller omkompilera det med rätt binär fil, beroende på din version av PHP.  Se PHP-manualen för mer information om hur du aktiverar databasstöd.',
    'LBL_CHECKSYS_XML_NOT_AVAILABLE'        => 'Funktioner som hör till XML Parser Libraries som Sugar behöver hittades inte. Du kanske behöver avkommentera ändelsen i php.ini eller kompilera om med rätt binärfil beroende på din PHP-version. Se PHP-manualen för mer information.',
    'LBL_CHECKSYS_CSPRNG' => 'Slumptalsgenerator',
    'ERR_CHECKSYS_MBSTRING'             => 'Funktioner som hör till Multibyte Strings PHP-tillägget (mbstring) som Sugar behöver hittades inte. <br/><br/>I allmänhet är modulen mbstring inte aktiverat som standard i PHP, utan den måste aktiveras med --enable-mbstring när du bygger PHP. Se PHP-manualen för mer information om hur mbstring-stöd aktiveras.',
    'ERR_CHECKSYS_SESSION_SAVE_PATH_NOT_SET'       => 'Inställningen session.save_path i din PHP-konfiguration (php.ini) är antingen tom eller satt till en mapp som inte finns. Du behöver antingen ange en sökväg eller dubbelkolla att mappen finns.',
    'ERR_CHECKSYS_SESSION_SAVE_PATH_NOT_WRITABLE'  => 'Inställningen session.save_path i din PHP-konfiguration (php.ini) är satt till en mapp utan skrivrättigheter. Vidta åtgärder för att få tag i skrivrättigheter. <br>Beroende på ditt operativsystem kan du behöva köra chmod 766 eller högerklicka på filnamnet och kryssa ur "Skrivskyddad".',
    'ERR_CHECKSYS_CONFIG_NOT_WRITABLE'  => 'Inställningsfilen finns, men är inte skrivbar. Vidta åtgärder för att få tag i skrivrättigheter. Beroende på ditt operativsystem kan du behöva köra chmod 766 eller högerklicka på filnamnet och kryssa ur "Skrivskyddad".',
    'ERR_CHECKSYS_CONFIG_OVERRIDE_NOT_WRITABLE'  => 'Överskridningskonfigurationsfilen existerar men är inte skrivbar. Vänligen se nödvändiga steg för att göra den skrivbar. Beroende på ditt Operativsystem, kan det här kräva att du ändrar behörigheter som kör chmod 766, eller klicka på filnamnet för åtkomst att ändra inställningar och avmarkera &#39;endast läsning&#39; funktionen.',
    'ERR_CHECKSYS_CUSTOM_NOT_WRITABLE'  => 'Den anpassade sökvägen finns, men är inte skrivbar. Vidta åtgärder för att få tag i skrivrättigheter. Beroende på ditt operativsystem kan du behöva köra chmod 766 eller högerklicka på filnamnet och kryssa ur "Skrivskyddad".',
    'ERR_CHECKSYS_FILES_NOT_WRITABLE'   => "The files or directories listed below are not writeable or are missing and cannot be created.  Depending on your Operating System, correcting this may require you to change permissions on the files or parent directory (chmod 766), or to right click on the parent directory and uncheck the &#39;read only&#39; option and apply it to all subfolders.",
	'ERR_CHECKSYS_SAFE_MODE'			=> 'Felsäkert läge är på (du kan vilja inaktivera det i php.ini)',
    'ERR_CHECKSYS_ZLIB'					=> 'Not Found: SugarCRM reaps enormous performance benefits with zlib compression.',
    'ERR_CHECKSYS_ZIP'					=> 'ZIP support hittades inte: SugarCRM behöver ZIP support för att kunna behandla komprimerade filer.',
    'ERR_CHECKSYS_BCMATH'				=> 'BCMATH stöd som inte hittas: SugarCRM behöver BCMATH stöd för godtycklig precision matte.',
    'ERR_CHECKSYS_HTACCESS'             => 'Test för .htaccess skrivning misslyckades. Det betyder oftast att du inte har Allowoverride inställd för Sugar directory.',
    'ERR_CHECKSYS_CSPRNG' => 'CSPRNG-fel',
	'ERR_DB_ADMIN'						=> 'The provided database administrator username and/or password is invalid, and a connection to the database could not be established.  Please enter a valid user name and password.  (Error:',
    'ERR_DB_ADMIN_MSSQL'                => 'Administratörslösenordet och/eller användarnamnet du angivit för databasen är ogilitgt. En anslutning kunde därför inte upprättas. Var god ange giltigt användarnamn och lösenord.',
	'ERR_DB_EXISTS_NOT'					=> 'Den angivna databasen finns inte.',
	'ERR_DB_EXISTS_WITH_CONFIG'			=> 'En databas finns redan med konfigurationsdata. För att installera med den valda databasen, var god starta om installationen och välj "Släpp och återskapa befintliga SugarCRM-tabeller?". För att uppgradera, använd Upggraderingsguiden i Administrationskonsolen. Var god läs uppgraderingsdokumentationen <a href="http://www.sugarforge.org/content/downloads/" target="_new">här</a>.',
	'ERR_DB_EXISTS'						=> 'Det angivna databasnamnet finns redan; kan inte skapa en till med samma namn.',
    'ERR_DB_EXISTS_PROCEED'             => 'Det angivna databasnamnet finns redan. Du kan<br>1. tryck Bakåt och välj ett nytt namn <br>2. tryck nästa och fortsätt genom att radera befintliga tabeller.<strong>Detta innebär att alla tabeller och data kommer att raderas.</strong>',
	'ERR_DB_HOSTNAME'					=> 'Värdnamnet kan inte vara tomt.',
	'ERR_DB_INVALID'					=> 'Ogiltig databastyp.',
	'ERR_DB_LOGIN_FAILURE'				=> 'Angiven databasvärd, användarnamn, och/eller lösenord är ogiltigt och en en koppling till databasen kunde inte göras. Var god och ange giltig information.',
	'ERR_DB_LOGIN_FAILURE_MYSQL'		=> 'Angiven databasvärd, användarnamn, och/eller lösenord är ogiltigt och en en koppling till databasen kunde inte göras. Var god och ange giltig information.',
	'ERR_DB_LOGIN_FAILURE_MSSQL'		=> 'Angiven databasvärd, användarnamn, och/eller lösenord är ogiltigt och en en koppling till databasen kunde inte göras. Var god och ange giltig information.',
	'ERR_DB_MYSQL_VERSION'				=> 'Din version av MySQL (%s) är stöds ej av Sugar. Du måste installera en version som är kompatibel med Sugar applikationen. Vänligen se the Compatibility Matrix i Publicerade Antecknignar för MySQL Versioner som stödjs.',
	'ERR_DB_NAME'						=> 'Databasnamnet kan inte vara tomt.',
	'ERR_DB_NAME2'						=> "Database name cannot contain a &#39;\\&#39;, &#39;/&#39;, or &#39;.&#39;",
    'ERR_DB_MYSQL_DB_NAME_INVALID'      => "Database name cannot contain a &#39;\\&#39;, &#39;/&#39;, or &#39;.&#39;",
    'ERR_DB_MSSQL_DB_NAME_INVALID'      => "Databasnamnet kan inte innehålla  &#39;\"&#39;, \"&#39;\", &#39;*&#39;, &#39;/&#39;, &#39;\\&#39;, &#39;?&#39;, &#39;:&#39;, &#39;<&#39;, &#39;>&#39;, eller &#39;-&#39;",
    'ERR_DB_OCI8_DB_NAME_INVALID'       => "Databasnamn kan bara innehålla alfanumeriska tecken och symbolerna '#', '_', '-', ':', '.', '/' eller '$'",
	'ERR_DB_PASSWORD'					=> 'Lösenorden angivna för administratörskontot matchar inte. Var god ange samma lösenord i fälten.',
	'ERR_DB_PRIV_USER'					=> 'Ange ett användarnamn för databasadministratören. Namnet krävs för första anslutning till databasen.',
	'ERR_DB_USER_EXISTS'				=> 'Användarnamnet för databasanvändare finns redan; Kan inte ha två med samma. Ange ett annat.',
	'ERR_DB_USER'						=> 'Ange ett användarnamn för Sugar-databasadministratören.',
	'ERR_DBCONF_VALIDATION'				=> 'Åtgärda följande fel innan du fortsätter:',
    'ERR_DBCONF_PASSWORD_MISMATCH'      => 'Lösenorden angivna för Sugar-databasanvändaren matchar inte. Var god ange samma lösenord i fälten.',
	'ERR_ERROR_GENERAL'					=> 'Följande fel påträffades:',
	'ERR_LANG_CANNOT_DELETE_FILE'		=> 'Cannot delete file:',
	'ERR_LANG_MISSING_FILE'				=> 'Cannot find file:',
	'ERR_LANG_NO_LANG_FILE'			 	=> 'No language pack file found at include/language inside:',
	'ERR_LANG_UPLOAD_1'					=> 'Det blev ett problem med din uppladdning. Försök igen.',
	'ERR_LANG_UPLOAD_2'					=> 'Språkpaket måste vara zip-filer.',
	'ERR_LANG_UPLOAD_3'					=> 'PHP kunde inte flytta den temporära filen till uppgraderingsmappen.',
	'ERR_LICENSE_MISSING'				=> 'Obligatoriska fält saknas',
	'ERR_LICENSE_NOT_FOUND'				=> 'Hittade inte licensfil!',
	'ERR_LOG_DIRECTORY_NOT_EXISTS'		=> 'Sökvägen för loggfiler är inte giltig.',
	'ERR_LOG_DIRECTORY_NOT_WRITABLE'	=> 'Sökvägen för loggfiler har inte skrivrättigheter.',
	'ERR_LOG_DIRECTORY_REQUIRED'		=> 'Sökväg för loggar krävs om en egen vill specifieras.',
	'ERR_NO_DIRECT_SCRIPT'				=> 'Kan inte behandla skript direkt.',
	'ERR_NO_SINGLE_QUOTE'				=> 'Cannot use the single quotation mark for',
	'ERR_PASSWORD_MISMATCH'				=> 'Lösenorden angivna för Sugaradministratören matchar inte. Var god ange samma lösenord i fälten.',
	'ERR_PERFORM_CONFIG_PHP_1'			=> 'Kan inte skriva till <span class=stop>config.php</span>.',
	'ERR_PERFORM_CONFIG_PHP_2'			=> 'Du kan fortsätta installationen genom att manuellt skapa filen config.php och klistra in informationen nedan. Du <strong>måste</strong> dock skapa config.php innan du fortsätter till nästa steg.',
	'ERR_PERFORM_CONFIG_PHP_3'			=> 'Kom du ihåg att skapa config.php?',
	'ERR_PERFORM_CONFIG_PHP_4'			=> 'Varning: kunde inte skriva till config.php. Kontrollera att filen finns.',
	'ERR_PERFORM_HTACCESS_1'			=> 'Cannot write to the',
	'ERR_PERFORM_HTACCESS_2'			=> 'file.',
	'ERR_PERFORM_HTACCESS_3'			=> 'Vill du skydda din loggfil från åtkomst via webbläsare, kan du skapa en .htaccess-fil i din loggmapp med raden:',
	'ERR_PERFORM_NO_TCPIP'				=> '<b>Vi kunde inte hitta en internetanslutning</b> När du lyckas upprätta en anslutning, gå till <a href="http://www.sugarcrm.com/home/index.php?option=com_extended_registration&task=register">http://www.sugarcrm.com/home/index.php?option=com_extended_registration&task=register</a> för att registrera dig hos SugarCRM. Genom att berätta lite om hur ditt företag vill använda SugarCRM hjälper ni oss att alltid leverera rätt applikation för ditt företags behov.',
	'ERR_SESSION_DIRECTORY_NOT_EXISTS'	=> 'Angiven sessionssökväg är inte giltig.',
	'ERR_SESSION_DIRECTORY'				=> 'Angiven sessionssökväg saknar skrivrättigheter.',
	'ERR_SESSION_PATH'					=> 'Sessionssökväg måste anges om egen ska användas.',
	'ERR_SI_NO_CONFIG'					=> 'Antingen inkluderades inte config_si.php i dokumentroten, eller så definierades inte $sugar_config_si i config.php',
	'ERR_SITE_GUID'						=> 'Applikations-ID krävs om eget ska användas.',
    'ERROR_SPRITE_SUPPORT'              => "Just nu kan vi inte lokalisera GD biblioteket, därför kommer du inte ha möjlighet att använda CSS Sprites funktionalitet.",
	'ERR_UPLOAD_MAX_FILESIZE'			=> 'Varning: din PHP-konfiguration bör ändras för att låta filer på minst 6MB laddas upp.',
    'LBL_UPLOAD_MAX_FILESIZE_TITLE'     => 'Storlek på uppladdad fil',
	'ERR_URL_BLANK'						=> 'Ange bas-URL för Sugarinstansen.',
	'ERR_UW_NO_UPDATE_RECORD'			=> 'Kunde inte lokalisera installations objekt av',
    'ERROR_FLAVOR_INCOMPATIBLE'         => 'Den uppladdade filen är inte kompatibel med den här sorten (professionell, företag eller senaste utgåvan) sugar: ',
	'ERROR_LICENSE_EXPIRED'				=> "Fel: Er licens har upphört",
	'ERROR_LICENSE_EXPIRED2'			=> "day(s) ago.   Please go to the <a href=&#39;index.php?action=LicenseSettings&module=Administration&#39;>&#39;\"License Management\"</a>  in the Admin screen to enter your new license key.  If you do not enter a new license key within 30 days of your license key expiration, you will no longer be able to log in to this application.",
	'ERROR_MANIFEST_TYPE'				=> 'Manifestfilen måste specificera pakettypen.',
	'ERROR_PACKAGE_TYPE'				=> 'Manifestfilen specificerar en okänd pakettyp',
	'ERROR_VALIDATION_EXPIRED'			=> "Fel: Valideringsnyckeln har upphört",
	'ERROR_VALIDATION_EXPIRED2'			=> "day(s) ago.   Please go to the <a href=&#39;index.php?action=LicenseSettings&module=Administration&#39;>&#39;\"License Management\"</a> in the Admin screen to enter your new validation key.  If you do not enter a new validation key within 30 days of your validation key expiration, you will no longer be able to log in to this application.",
	'ERROR_VERSION_INCOMPATIBLE'		=> 'Den uppladdade filen är inte kompatibel med denna version av Sugar:',

	'LBL_BACK'							=> 'Tillbaka',
    'LBL_CANCEL'                        => 'Avbryt',
    'LBL_ACCEPT'                        => 'Jag godkänner',
	'LBL_CHECKSYS_1'					=> 'För att din SugarCRM-installation ska fungera måste du se till att alla systemkontroller nedan är gröna. Vidta nödvändiga åtgärder för att lösa eventuella röda kontroller.<BR><BR>För hjälp om systemkontroller se <a href="http://www.sugarcrm.com/crm/installation" target="_blank">Sugarwikin</a>.',
	'LBL_CHECKSYS_CACHE'				=> 'Undermappar för skrivbar cache',
    'LBL_DROP_DB_CONFIRM'               => 'Det angivna Databasnamnet finns redan.<br>Du kan antingen:<br>1. Klicka på avbryt och välja ett nytt namn, eller <br>2. Klicka på Godkänn och fortsätta. <strong>Alla tabeller och all data i databasen kommer att raderas.</strong>',
	'LBL_CHECKSYS_CALL_TIME'			=> 'PHP låter nu inte referenser skickas vid anrop',
    'LBL_CHECKSYS_COMPONENT'			=> 'Komponent',
	'LBL_CHECKSYS_COMPONENT_OPTIONAL'	=> 'Valfria komponenter',
	'LBL_CHECKSYS_CONFIG'				=> 'Skrivbar konfigurationsfil för SugarCRM (config.php)',
	'LBL_CHECKSYS_CONFIG_OVERRIDE'		=> 'Skrivbar SugarCRM Konfigurations Fil (config_override.php)',
	'LBL_CHECKSYS_CURL'					=> 'cURL modul',
    'LBL_CHECKSYS_SESSION_SAVE_PATH'    => 'Sökväg för sparade sessioner',
	'LBL_CHECKSYS_CUSTOM'				=> 'Skrivbar anpassad mapp',
	'LBL_CHECKSYS_DATA'					=> 'Skrivbara data-undermappar',
	'LBL_CHECKSYS_IMAP'					=> 'IMAP modul',
	'LBL_CHECKSYS_MQGPC'				=> 'Magic Quotes GPC',
	'LBL_CHECKSYS_MBSTRING'				=> 'MB Strings Module',
	'LBL_CHECKSYS_MEM_OK'				=> 'OK (ingen gräns)',
	'LBL_CHECKSYS_MEM_UNLIMITED'		=> 'OK (obegränsad)',
	'LBL_CHECKSYS_MEM'					=> 'PHP Memory Limit >=',
	'LBL_CHECKSYS_MODULE'				=> 'Skrivbara moduler, undermappar och filer',
	'LBL_CHECKSYS_MYSQL_VERSION'		=> 'MySQL-version',
	'LBL_CHECKSYS_NOT_AVAILABLE'		=> 'Inte tillgänlig',
	'LBL_CHECKSYS_OK'					=> 'OK',
	'LBL_CHECKSYS_PHP_INI'				=> '<b>Note:</b> Your php configuration file (php.ini) is located at:',
	'LBL_CHECKSYS_PHP_OK'				=> 'OK (ver',
	'LBL_CHECKSYS_PHPVER'				=> 'PHP-version',
    'LBL_CHECKSYS_IISVER'               => 'IIS-version',
    'LBL_CHECKSYS_FASTCGI'              => 'FastCGI',
	'LBL_CHECKSYS_RECHECK'				=> 'Kontrollera igen',
	'LBL_CHECKSYS_SAFE_MODE'			=> 'PHP Safe Mode är inaktiverat',
	'LBL_CHECKSYS_SESSION'				=> 'Skrivbar sökväg för sparade sessioner (',
	'LBL_CHECKSYS_STATUS'				=> 'Status',
	'LBL_CHECKSYS_TITLE'				=> 'Godkänd systemkontroll',
	'LBL_CHECKSYS_VER'					=> 'Found: ( ver',
	'LBL_CHECKSYS_XML'					=> 'XML parsing',
	'LBL_CHECKSYS_ZLIB'					=> 'ZLIB-kompressionsmodul',
	'LBL_CHECKSYS_ZIP'					=> 'ZIP Hanterings Modul',
    'LBL_CHECKSYS_BCMATH'				=> 'Godtyckliga Precision Matte Modul',
    'LBL_CHECKSYS_HTACCESS'				=> 'Allowoverride inrättats för .htaccess',
    'LBL_CHECKSYS_FIX_FILES'            => 'Korrigera följande filer eller mappar innan du fortsätter:',
    'LBL_CHECKSYS_FIX_MODULE_FILES'     => 'Korrigera följande modulsökvägar och filerna i dem innan du fortsätter:',
    'LBL_CHECKSYS_UPLOAD'               => 'Skrivbar Uppladdnings Katalog',
    'LBL_CLOSE'							=> 'Stäng',
    'LBL_THREE'                         => '3',
	'LBL_CONFIRM_BE_CREATED'			=> 'bli skapad',
	'LBL_CONFIRM_DB_TYPE'				=> 'Databastyp',
	'LBL_CONFIRM_DIRECTIONS'			=> 'Bekräfta inställningarna nedan. Klicka på "Bakåt" om du vill ändra på något. Klicka annars på "Nästa" för att starta installationen.',
	'LBL_CONFIRM_LICENSE_TITLE'			=> 'Licensinformation',
	'LBL_CONFIRM_NOT'					=> 'inte',
	'LBL_CONFIRM_TITLE'					=> 'Bekräfta inställningar',
	'LBL_CONFIRM_WILL'					=> 'kommer',
	'LBL_DBCONF_CREATE_DB'				=> 'Skapa databas',
	'LBL_DBCONF_CREATE_USER'			=> 'Skapa användare [Alt+N]',
	'LBL_DBCONF_DB_DROP_CREATE_WARN'	=> 'Varning: Om rutan markeras kommer all Sugardata raderas<br>.',
	'LBL_DBCONF_DB_DROP_CREATE'			=> 'Droppa och återskapa befintliga Sugartabeller?',
    'LBL_DBCONF_DB_DROP'                => 'Droppa tabeller',
    'LBL_DBCONF_DB_NAME'				=> 'Databasnamn',
	'LBL_DBCONF_DB_PASSWORD'			=> 'Användarlösenord till Sugardatabasen',
	'LBL_DBCONF_DB_PASSWORD2'			=> 'Ange användarlösenord till Sugardatabasen igen',
	'LBL_DBCONF_DB_USER'				=> 'Användarnamn till Sugardatabasen',
    'LBL_DBCONF_SUGAR_DB_USER'          => 'Användarnamn till Sugardatabasen',
    'LBL_DBCONF_DB_ADMIN_USER'          => 'Användarnamn för databasadministratör',
    'LBL_DBCONF_DB_ADMIN_PASSWORD'      => 'Administratörslösenord för databasen',
	'LBL_DBCONF_DEMO_DATA'				=> 'Fyll ut databas med demo-data?',
    'LBL_DBCONF_DEMO_DATA_TITLE'        => 'Välj demo-data',
	'LBL_DBCONF_HOST_NAME'				=> 'Värdnamn',
	'LBL_DBCONF_HOST_INSTANCE'			=> 'Host Instans',
	'LBL_DBCONF_HOST_PORT'				=> 'Port',
    'LBL_DBCONF_SSL_ENABLED'            => 'Aktivera SSL-anslutning',
	'LBL_DBCONF_INSTRUCTIONS'			=> 'Ange databaskonfiguration nedan. Är du inte säker på vad du ska skriva rekommenderar vi att du låter värdena vara.',
	'LBL_DBCONF_MB_DEMO_DATA'			=> 'Använd multi-byte text i demo-data?',
    'LBL_DBCONFIG_MSG2'                 => 'Name of web server or machine (host) on which the database is located:',
    'LBL_DBCONFIG_MSG3'                 => 'Namn på databasen som kommer att innehålla data för Sugarinstansen som installeras:',
    'LBL_DBCONFIG_B_MSG1'               => 'För att sätta upp Sugardatabasen krävs användarnamnet och lösenordet till en databasadministratör som kan skapa tabeller och användare och skriva till databasen.',
    'LBL_DBCONFIG_SECURITY'             => 'Av säkerhetsskäl kan du ange en exklusiv databasanvändare för att ansluta till Sugardatabasen. Användaren måste kunna skriva, uppdatera och hämta data från Sugardatabasen som skapas för den här instansen. Användaren kan vara databasadministratören ovan, en ny eller en befintlig användare.',
    'LBL_DBCONFIG_AUTO_DD'              => 'Gör det åt mig',
    'LBL_DBCONFIG_PROVIDE_DD'           => 'Ange befintlig användare',
    'LBL_DBCONFIG_CREATE_DD'            => 'Ange användare som ska skapas',
    'LBL_DBCONFIG_SAME_DD'              => 'Samma som administratör',
	//'LBL_DBCONF_I18NFIX'              => 'Apply database column expansion for varchar and char types (up to 255) for multi-byte data?',
    'LBL_FTS'                           => 'Fulltext sök',
    'LBL_FTS_INSTALLED'                 => 'Installerad',
    'LBL_FTS_INSTALLED_ERR1'            => 'Fulltextsök möjlighet är inte installerad',
    'LBL_FTS_INSTALLED_ERR2'            => 'Du kan fortfarande installera men kommer inte kunna använda Fulltextsök möjligheten. Vänligen se din databas server installationsguide hur man gör detta, eller kontakta din Administratör.',
	'LBL_DBCONF_PRIV_PASS'				=> 'Lösenord till privilegierad databasanvändare',
	'LBL_DBCONF_PRIV_USER_2'			=> 'Är kontot ovan privilegierat?',
	'LBL_DBCONF_PRIV_USER_DIRECTIONS'	=> 'Den privilegierade databasanvändaren måste ha rättigheter nog att skapa en databas, droppa/skapa tabeller, och att skapa en användare. Den privilegierade användaren kommer bara att användas för att göra detta när det behövs under installationen. Har kontot ovan rättigheter nog, kan det användas.',
	'LBL_DBCONF_PRIV_USER'				=> 'Användarnamn för privilegierad databasanvändare',
	'LBL_DBCONF_TITLE'					=> 'Databaskonfiguration',
    'LBL_DBCONF_TITLE_NAME'             => 'Ange databsnamn',
    'LBL_DBCONF_TITLE_USER_INFO'        => 'Ange databasanvändarinformation',
	'LBL_DISABLED_DESCRIPTION_2'		=> 'After this change has been made, you may click the "Start" button below to begin your installation.  <i>After the installation is complete, you will want to change the value for &#39;installer_locked&#39; to &#39;true&#39;.</i>',
	'LBL_DISABLED_DESCRIPTION'			=> 'The installer has already been run once.  As a safety measure, it has been disabled from running a second time.  If you are absolutely sure you want to run it again, please go to your config.php file and locate (or add) a variable called &#39;installer_locked&#39; and set it to &#39;false&#39;.  The line should look like this:',
	'LBL_DISABLED_HELP_1'				=> 'För installationshjälp se SugarCRM',
    'LBL_DISABLED_HELP_LNK'               => 'http://www.sugarcrm.com/forums/',
	'LBL_DISABLED_HELP_2'				=> 'supportforum',
	'LBL_DISABLED_TITLE_2'				=> 'SugarCRM-installationen har inaktiverats',
	'LBL_DISABLED_TITLE'				=> 'SugarCRM-installation inaktiverad',
	'LBL_EMAIL_CHARSET_DESC'			=> 'Vanligaste teckenuppsättning i din region',
	'LBL_EMAIL_CHARSET_TITLE'			=> 'Utgående emailinställningar',
    'LBL_EMAIL_CHARSET_CONF'            => 'Character Set for Outbound Email',
	'LBL_HELP'							=> 'Hjälp',
    'LBL_INSTALL'                       => 'Installera',
    'LBL_INSTALL_TYPE_TITLE'            => 'Installationsalternativ',
    'LBL_INSTALL_TYPE_SUBTITLE'         => 'Välj installationstyp',
    'LBL_INSTALL_TYPE_TYPICAL'          => '<b>Typical Install</b>',
    'LBL_INSTALL_TYPE_CUSTOM'           => '<b>Custom Install</b>',
    'LBL_INSTALL_TYPE_MSG1'             => 'Nyckeln krävs för allmän funktionalitet, men inte för installation. Du behöver inte skriva in den nu, men du kommer att behöva skriva in den när programmet är installerat.',
    'LBL_INSTALL_TYPE_MSG2'             => 'Efterfrågar minimal information för installationen. Rekommenderas för nya användare.',
    'LBL_INSTALL_TYPE_MSG3'             => 'Erbjuder fler alternativ under installation. De flesta av dessa kan ändras efter installation i adminpanelerna. Rekommenderas för avancerade användare.',
	'LBL_LANG_1'						=> 'Vill du använda ett språkpaket i Sugar som inte är standard (dvs. US-Engelska), kan du ladda upp och installera språkpaketet nu. Du kommer också att kunna ladda upp och installera språkpaket inifrån Sugarapplikationen. Vill du hoppa över det nu, klicka på Nästa.',
	'LBL_LANG_BUTTON_COMMIT'			=> 'Installera',
	'LBL_LANG_BUTTON_REMOVE'			=> 'Radera',
	'LBL_LANG_BUTTON_UNINSTALL'			=> 'Avinstallera',
	'LBL_LANG_BUTTON_UPLOAD'			=> 'Ladda upp',
	'LBL_LANG_NO_PACKS'					=> 'inga',
	'LBL_LANG_PACK_INSTALLED'			=> 'The following language packs have been installed:',
	'LBL_LANG_PACK_READY'				=> 'The following language packs are ready to be installed:',
	'LBL_LANG_SUCCESS'					=> 'Språkpaketet laddades upp.',
	'LBL_LANG_TITLE'			   		=> 'Språkpaket',
    'LBL_LAUNCHING_SILENT_INSTALL'     => 'Installerar Sugar nu, det här kan ta upp tilll ett par minuter.',
	'LBL_LANG_UPLOAD'					=> 'Ladda upp ett språkpaket',
	'LBL_LICENSE_ACCEPTANCE'			=> 'Godkännande av licens',
    'LBL_LICENSE_CHECKING'              => 'Kontrollerar systemkompatibilitet.',
    'LBL_LICENSE_CHKENV_HEADER'         => 'Kontrollerar miljö',
    'LBL_LICENSE_CHKDB_HEADER'          => 'Kontrollerar DB, autentiseringsuppgifter FTS.',
    'LBL_LICENSE_CHECK_PASSED'          => 'Systemet passerade kompatibilitetskontrollen.',
    'LBL_LICENSE_REDIRECT'              => 'Redirecting in',
	'LBL_LICENSE_DIRECTIONS'			=> 'Ange din licensinformation nedan om du har den.',
	'LBL_LICENSE_DOWNLOAD_KEY'			=> 'Ange nerladdningsnyckel',
	'LBL_LICENSE_EXPIRY'				=> 'Utgångsdatum',
	'LBL_LICENSE_I_ACCEPT'				=> 'Jag godkänner',
	'LBL_LICENSE_NUM_USERS'				=> 'Antal användare',
	'LBL_LICENSE_PRINTABLE'				=> 'Printable View',
    'LBL_PRINT_SUMM'                    => 'Skriv ut sammanfattning',
	'LBL_LICENSE_TITLE_2'				=> 'SugarCRM-licens',
	'LBL_LICENSE_TITLE'					=> 'Licensinformation',
	'LBL_LICENSE_USERS'					=> 'Licensierade användare',

	'LBL_LOCALE_CURRENCY'				=> 'Valutainställningar',
	'LBL_LOCALE_CURR_DEFAULT'			=> 'Standardvaluta',
	'LBL_LOCALE_CURR_SYMBOL'			=> 'Valuta symbol',
	'LBL_LOCALE_CURR_ISO'				=> 'Valutakod (ISO 4217)',
	'LBL_LOCALE_CURR_1000S'				=> '1000 separator',
	'LBL_LOCALE_CURR_DECIMAL'			=> 'Decimalkomma',
	'LBL_LOCALE_CURR_EXAMPLE'			=> 'Exempel',
	'LBL_LOCALE_CURR_SIG_DIGITS'		=> 'Värdesiffror',
	'LBL_LOCALE_DATEF'					=> 'Standard-datumformat',
	'LBL_LOCALE_DESC'					=> 'De valda regionsinställningarna kommer att synas i hela Sugarinstansen.',
	'LBL_LOCALE_EXPORT'					=> 'Teckenuppsättning för import/export<br> <i>(email, .csv, vCard, PDF, dataimport)</i>',
	'LBL_LOCALE_EXPORT_DELIMITER'		=> 'Export (.csv)-avgränsning',
	'LBL_LOCALE_EXPORT_TITLE'			=> 'Import- och exportinställningar',
	'LBL_LOCALE_LANG'					=> 'Standardspråk',
	'LBL_LOCALE_NAMEF'					=> 'Standardformat för namn',
	'LBL_LOCALE_NAMEF_DESC'				=> 's =titel<br />f = förnamn<br />l = efternamn',
	'LBL_LOCALE_NAME_FIRST'				=> 'David',
	'LBL_LOCALE_NAME_LAST'				=> 'Livingstone',
	'LBL_LOCALE_NAME_SALUTATION'		=> 'Dr.',
	'LBL_LOCALE_TIMEF'					=> 'Standardformat för tid',
	'LBL_LOCALE_TITLE'					=> 'Lokala inställningar',
    'LBL_CUSTOMIZE_LOCALE'              => 'Anpassa regionala inställningar',
	'LBL_LOCALE_UI'						=> 'Användargränssnitt',

	'LBL_ML_ACTION'						=> 'Åtgärd',
	'LBL_ML_DESCRIPTION'				=> 'Beskrivning',
	'LBL_ML_INSTALLED'					=> 'Installationsdatum',
	'LBL_ML_NAME'						=> 'Namn',
	'LBL_ML_PUBLISHED'					=> 'Publiceringsdatum',
	'LBL_ML_TYPE'						=> 'Typ',
	'LBL_ML_UNINSTALLABLE'				=> 'Ej möjlig att avinstallera',
	'LBL_ML_VERSION'					=> 'Version',
	'LBL_MSSQL'							=> 'SQL Server',
	'LBL_MSSQL_SQLSRV'				    => 'SQL Server (Microsoft SQL Server Driver for PHP)',
	'LBL_MYSQL'							=> 'MySQL',
    'LBL_MYSQLI'						=> 'MySQL (mysqli-tillägg)',
	'LBL_IBM_DB2'						=> 'IBM DB2',
	'LBL_NEXT'							=> 'Nästa',
	'LBL_NO'							=> 'Nej',
    'LBL_ORACLE'						=> 'Oracle',
	'LBL_PERFORM_ADMIN_PASSWORD'		=> 'Sätter administratörslösenord för sida',
	'LBL_PERFORM_AUDIT_TABLE'			=> 'audit table /',
	'LBL_PERFORM_CONFIG_PHP'			=> 'Skapar konfigurationsfil för Sugar',
	'LBL_PERFORM_CREATE_DB_1'			=> '<b>Creating the database</b>',
	'LBL_PERFORM_CREATE_DB_2'			=> '<b>on</b>',
	'LBL_PERFORM_CREATE_DB_USER'		=> 'Skapar användarnamn och lösenord för databasen...',
	'LBL_PERFORM_CREATE_DEFAULT'		=> 'Skapar standarddata för Sugar',
	'LBL_PERFORM_CREATE_LOCALHOST'		=> 'Skapar localhost-användarnamn och lösenord för databasen...',
	'LBL_PERFORM_CREATE_RELATIONSHIPS'	=> 'Skapar relationstabeller för Sugar',
	'LBL_PERFORM_CREATING'				=> 'creating /',
	'LBL_PERFORM_DEFAULT_REPORTS'		=> 'Skapar standardrapporter',
	'LBL_PERFORM_DEFAULT_SCHEDULER'		=> 'Skapar standardjobb för schemaläggaren',
	'LBL_PERFORM_DEFAULT_SETTINGS'		=> 'Sätter in standardinställningar',
	'LBL_PERFORM_DEFAULT_USERS'			=> 'Skapar standardanvändare',
	'LBL_PERFORM_DEMO_DATA'				=> 'Befolkar databasen med demodata (detta kan ta ett tag)',
	'LBL_PERFORM_DONE'					=> 'klar<br>',
	'LBL_PERFORM_DROPPING'				=> 'dropping /',
	'LBL_PERFORM_FINISH'				=> 'Avsluta',
	'LBL_PERFORM_LICENSE_SETTINGS'		=> 'Uppdaterar licensinformation',
	'LBL_PERFORM_OUTRO_1'				=> 'The setup of Sugar',
	'LBL_PERFORM_OUTRO_2'				=> 'is now complete!',
	'LBL_PERFORM_OUTRO_3'				=> 'Total time:',
	'LBL_PERFORM_OUTRO_4'				=> 'seconds.',
	'LBL_PERFORM_OUTRO_5'				=> 'Approximate memory used:',
	'LBL_PERFORM_OUTRO_6'				=> 'bytes.',
	'LBL_PERFORM_OUTRO_7'				=> 'Ditt system är nu installerat och konfigurerat.',
	'LBL_PERFORM_REL_META'				=> 'relationship meta ...',
	'LBL_PERFORM_SUCCESS'				=> 'Genomfört!',
	'LBL_PERFORM_TABLES'				=> 'Skapar applikationstabeller, inspektionstabeller och relationsmetadata för Sugar',
	'LBL_PERFORM_TITLE'					=> 'Utför konfiguration',
	'LBL_PRINT'							=> 'Skriv ut',
	'LBL_REG_CONF_1'					=> 'Fyll ut det korta formuläret nedan om du vill få nyheter om nya produkter, utbildning och specialerbjudanden, och exklusiva inbjudningar från SugarCRM. Vi varken säljer, hyr ut, delar eller på något annat sätt distribuerar denna information till tredje part.',
	'LBL_REG_CONF_2'					=> 'Det enda som krävs för registrering är ditt namn och din emailadress. Resten av fälten är upp till dig, men det hjälper mycket. Vi varken säljer, hyr ut, delar eller på något annat sätt distribuerar denna information till tredje part.',
	'LBL_REG_CONF_3'					=> 'Tack för att du registrerade dig! Klicka på Slutför för att logga in i SugarCRM. Första gången du loggar in använder du kontot "admin" med lösenordet du skrev in i steg 2.',
	'LBL_REG_TITLE'						=> 'Registrering',
    'LBL_REG_NO_THANKS'                 => 'Nej tack',
    'LBL_REG_SKIP_THIS_STEP'            => 'Hoppa över detta steg',
	'LBL_REQUIRED'						=> '* Obligatoriskt',

    'LBL_SITECFG_ADMIN_Name'            => 'Admin-namn för Sugarapplikationen',
	'LBL_SITECFG_ADMIN_PASS_2'			=> 'Ange Administratörslösenordet till Sugar igen',
	'LBL_SITECFG_ADMIN_PASS_WARN'		=> 'Varning: Detta skriver över administratörslösenordet för alla tidigare installationer.',
	'LBL_SITECFG_ADMIN_PASS'			=> 'Administratörslösenord till Sugar',
	'LBL_SITECFG_APP_ID'				=> 'Applikations-ID',
	'LBL_SITECFG_CUSTOM_ID_DIRECTIONS'	=> 'Om du väljer detta måste du ange ett applikations-ID för att skriva över det automatiskt genererade. ID:t ser till att olika sessioner i en Sugarinstans inte används av andra instanser. Har du ett kluster av Sugarinstallationer måste de alla ha samma ID.',
	'LBL_SITECFG_CUSTOM_ID'				=> 'Ange ett eget applikations-ID',
	'LBL_SITECFG_CUSTOM_LOG_DIRECTIONS'	=> 'Om du väljer detta måste du ange en loggmapp att använda istället för Sugarloggens standardmapp. Var du än lägger den begränsas webbläsartillgång med en .htaccess-omdirigering.',
	'LBL_SITECFG_CUSTOM_LOG'			=> 'Använd en egen loggmapp',
	'LBL_SITECFG_CUSTOM_SESSION_DIRECTIONS'	=> 'Om du väljer detta måste du ange en säker mapp att lagra Sugars sessionsinformation. Detta kan göras för att skydda sårbar sessionsdata på delade servrar.',
	'LBL_SITECFG_CUSTOM_SESSION'		=> 'Använd en egen sessionsmapp för Sugar',
	'LBL_SITECFG_DIRECTIONS'			=> 'Ange din sidkonfiguration nedan. Vet du inte vad du ska skriva rekommenderar vi att du låter det vara.',
	'LBL_SITECFG_FIX_ERRORS'			=> '<b>Åtgärda följande fel innan du fortsätter:</b>',
	'LBL_SITECFG_LOG_DIR'				=> 'Loggmapp',
	'LBL_SITECFG_SESSION_PATH'			=> 'Sökväg till sessionsmapp<br>(måste ha skrivrättigheter)',
	'LBL_SITECFG_SITE_SECURITY'			=> 'Välj säkerhetsalternativ',
	'LBL_SITECFG_SUGAR_UP_DIRECTIONS'	=> 'Om valt kommer systemet med jämna mellanrum söka efter uppdateringar för applikationen.',
	'LBL_SITECFG_SUGAR_UP'				=> 'Sök efter uppdateringar automatiskt?',
	'LBL_SITECFG_SUGAR_UPDATES'			=> 'Inställningar för Sugaruppdateringar',
	'LBL_SITECFG_TITLE'					=> 'Sidkonfiguration',
    'LBL_SITECFG_TITLE2'                => 'Identify Your Sugar Instance',
    'LBL_SITECFG_SECURITY_TITLE'        => 'Sidsäkerhet',
	'LBL_SITECFG_URL'					=> 'Sugarinstansens URL',
	'LBL_SITECFG_USE_DEFAULTS'			=> 'Använd standard?',
	'LBL_SITECFG_ANONSTATS'             => 'Skicka anonym statistik?',
	'LBL_SITECFG_ANONSTATS_DIRECTIONS'  => 'Om valt kommer Sugar att skicka <b>anonym</b> statistik om din installation till SugarCRM Inc. när systemet kollar efter nya versioner. Informationen används för att hjälpa oss förstå hur våra kunder använder vår produkt och styra utvecklingen av nya funktioner.',
    'LBL_SITECFG_URL_MSG'               => 'Ange URL:en som används för att komma åt Sugarinstansen efter installation. URL:en kommer även att användas som bas för adresserna i Sugars applikationssidor. URL:en ska inkludera webbserver, datornamn eller IP-adress.',
    'LBL_SITECFG_SYS_NAME_MSG'          => 'Ange ett systemnamn. Namnet kommer att synas i webbläsarens titelrad när användare besöker applikationen.',
    'LBL_SITECFG_PASSWORD_MSG'          => 'After installation, you will need to use the Sugar admin user (username = admin) to log in to the Sugar instance.  Enter a password for this administrator user. This password can be changed after the initial login.',
    'LBL_SITECFG_COLLATION_MSG'         => 'Välj sorteringsinställningar för ditt system. De här inställningarna kommer skapa tabeller på det språket du använder. Om ditt språk inte kräver specialinställningar vänligen använd standardvärde.',
    'LBL_SPRITE_SUPPORT'                => 'Sprite-stöd',
	'LBL_SYSTEM_CREDS'                  => 'System-inloggningsuppgifter',
    'LBL_SYSTEM_ENV'                    => 'Systemmiljö',
	'LBL_START'							=> 'Start',
    'LBL_SHOW_PASS'                     => 'Visa lösenord',
    'LBL_HIDE_PASS'                     => 'Dölj lösenord',
    'LBL_HIDDEN'                        => '<i>(dold)</i>',
//	'LBL_NO_THANKS'						=> 'Continue to installer',
	'LBL_CHOOSE_LANG'					=> '<b>Välj ditt språk</b>',
	'LBL_STEP'							=> 'Steg',
	'LBL_TITLE_WELCOME'					=> 'Welcome to the SugarCRM',
	'LBL_WELCOME_1'						=> 'Guiden skapar databastabeller för SugarCRM och initialiserar variabler du behöver för att komma igång. Alltihop borde ta ungefär tio minuter.',
    //welcome page variables
    'LBL_TITLE_ARE_YOU_READY'            => 'Är du redo att installera?',
    'REQUIRED_SYS_COMP' => 'Systemkrav',
    'REQUIRED_SYS_COMP_MSG' =>
                    'Before you begin, please be sure that you have the supported versions of the following system<br />                      components:<br><br />                      <ul><br />                      <li> Database/Database Management System (Examples: MySQL, SQL Server, Oracle)</li><br />                      <li> Web Server (Apache, IIS)</li><br />                      </ul><br />                      Consult the Compatibility Matrix in the Release Notes for<br />                      compatible system components for the Sugar version that you are installing.<br>',
    'REQUIRED_SYS_CHK' => 'Inledande systemkontroll',
    'REQUIRED_SYS_CHK_MSG' =>
                    'When you begin the installation process, a system check will be performed on the web server on which the Sugar files are located in order to<br />                      make sure the system is configured properly and has all of the necessary components<br />                      to successfully complete the installation. <br><br><br />                      The system checks all of the following:<br><br />                      <ul><br />                      <li><b>PHP version</b> &#8211; must be compatible<br />                      with the application</li><br />                                        <li><b>Session Variables</b> &#8211; must be working properly</li><br />                                            <li> <b>MB Strings</b> &#8211; must be installed and enabled in php.ini</li><br /><br />                      <li> <b>Database Support</b> &#8211; must exist for MySQL, SQL<br />                      Server or Oracle</li><br /><br />                      <li> <b>Config.php</b> &#8211; must exist and must have the appropriate<br />                                  permissions to make it writeable</li><br />					  <li>The following Sugar files must be writeable:<ul><li><b>/custom</li><br /><li>/cache</li><br /><li>/modules</b></li></ul></li></ul><br />                                  If the check fails, you will not be able to proceed with the installation. An error message will be displayed, explaining why your system<br />                                  did not pass the check.<br />                                  After making any necessary changes, you can undergo the system<br />                                  check again to continue the installation.<br>',
    'REQUIRED_INSTALLTYPE' => 'Typisk eller Anpassad installation',
    'REQUIRED_INSTALLTYPE_MSG' =>
                    "After the system check is performed, you can choose either<br />                      the Typical or the Custom installation.<br><br><br />                      For both <b>Typical</b> and <b>Custom</b> installations, you will need to know the following:<br><br />                      <ul><br />                      <li> <b>Type of database</b> that will house the Sugar data <ul><li>Compatible database<br />                      types: MySQL, MS SQL Server, Oracle.<br><br></li></ul></li><br />                      <li> <b>Name of the web server</b> or machine (host) on which the database is located<br />                      <ul><li>This may be <i>localhost</i> if the database is on your local computer or is on the same web server or machine as your Sugar files.<br><br></li></ul></li><br />                      <li><b>Name of the database</b> that you would like to use to house the Sugar data</li><br />                        <ul><br />                          <li> You might already have an existing database that you would like to use. If<br />                          you provide the name of an existing database, the tables in the database will<br />                          be dropped during installation when the schema for the Sugar database is defined.</li><br />                          <li> If you do not already have a database, the name you provide will be used for<br />                          the new database that is created for the instance during installation.<br><br></li><br />                        </ul><br />                      <li><b>Database administrator user name and password</b> <ul><li>The database administrator should be able to create tables and users and write to the database.</li><li>You might need to<br />                      contact your database administrator for this information if the database is<br />                      not located on your local computer and/or if you are not the database administrator.<br><br></ul></li></li><br />                      <li> <b>Sugar database user name and password</b><br />                      </li><br />                        <ul><br />                          <li> The user may be the database administrator, or you may provide the name of<br />                          another existing database user. </li><br />                          <li> If you would like to create a new database user for this purpose, you will<br />                          be able to provide a new username and password during the installation process,<br />                          and the user will be created during installation. </li><br />                        </ul></ul><p><br /><br />                      For the <b>Custom</b> setup, you might also need to know the following:<br><br />                      <ul><br />                      <li> <b>URL that will be used to access the Sugar instance</b> after it is installed.<br />                      This URL should include the web server or machine name or IP address.<br><br></li><br />                                  <li> [Optional] <b>Path to the session directory</b> if you wish to use a custom<br />                                  session directory for Sugar information in order to prevent session data from<br />                                  being vulnerable on shared servers.<br><br></li><br />                                  <li> [Optional] <b>Path to a custom log directory</b> if you wish to override the default directory for the Sugar log.<br><br></li><br />                                  <li> [Optional] <b>Application ID</b> if you wish to override the auto-generated<br />                                  ID that ensures that sessions of one Sugar instance are not used by other instances.<br><br></li><br />                                  <li><b>Character Set</b> most commonly used in your locale.<br><br></li></ul><br />                                  For more detailed information, please consult the Installation Guide.",
    'LBL_WELCOME_PLEASE_READ_BELOW' => 'Läs denna viktiga information innan du fortsätter med installationen. Det kommer att hjälpa dig ta reda på om du är redo att installera programmet.',


	'LBL_WELCOME_2'						=> 'För installationsdokumentation, besök <a href="http://www.sugarcrm.com/crm/installation" target="_blank"> Sugar Wiki</a>.  <BR><BR>Kontakta en SugarCRM supportingenjör för installationshjälp, vänligen logga in till <a target="_blank" href="http://support.sugarcrm.com"> SugarCRM stöder Portal</a> och skickar ett supportärende.',
	'LBL_WELCOME_CHOOSE_LANGUAGE'		=> '<b>Välj ditt språk</b>',
	'LBL_WELCOME_SETUP_WIZARD'			=> 'Installationsguiden',
	'LBL_WELCOME_TITLE_WELCOME'			=> 'Welcome to the SugarCRM',
	'LBL_WELCOME_TITLE'					=> 'Installationsguiden för SugarCRM',
	'LBL_WIZARD_TITLE'					=> 'Sugar Setup Wizard:',
	'LBL_YES'							=> 'Ja',
    'LBL_YES_MULTI'                     => 'Ja - Multibyte',
	// OOTB Scheduler Job Names:
	'LBL_OOTB_WORKFLOW'		=> 'Genomför workflow uppgifter',
	'LBL_OOTB_REPORTS'		=> 'Kör schemalagd process för att generera rapporter',
	'LBL_OOTB_IE'			=> 'Kontrollera inkommande mailboxar',
	'LBL_OOTB_BOUNCE'		=> 'Kör nattlig process för studsad kampanj email',
    'LBL_OOTB_CAMPAIGN'		=> 'Kör nattliga mass-emailkampanjer',
	'LBL_OOTB_PRUNE'		=> 'Rensa databasen den 1:a varje månad',
    'LBL_OOTB_TRACKER'		=> 'Ansa trackertabeller',
    'LBL_OOTB_SEND_EMAIL_REMINDERS' => 'Aktivera meddelanden med email-påminnelser',
    'LBL_UPDATE_TRACKER_SESSIONS' => 'Uppdatera tabellen tracker_sessions',
    'LBL_OOTB_CLEANUP_QUEUE' => 'Rensa Jobbköer',


    'LBL_FTS_TABLE_TITLE'     => 'Tillhandahåll FullTextSök Inställningar',
    'LBL_FTS_HOST'     => 'Värd',
    'LBL_FTS_PORT'     => 'Port',
    'LBL_FTS_TYPE'     => 'Sökmotor typ',
    'LBL_FTS_HELP'      => 'För att aktivera fulltextsökning, välj sökmotortyp och fyll i Host och Port där din sökmotor är hostad. Sugar har inbyggd sypport för elasticsearch engine.',
    'LBL_FTS_REQUIRED'    => 'Elasticsearch krävs.',
    'LBL_FTS_CONN_ERROR'    => 'Det går inte att ansluta till Full Text Search-servern, vänligen verifiera inställningarna.',
    'LBL_FTS_NO_VERSION_AVAILABLE'    => 'Ingen fulltextsökning är tillgänglig för denna serverversion, kontrollera dina inställningar.',
    'LBL_FTS_UNSUPPORTED_VERSION'    => 'Versioner som inte stöds av Elastic Search upptäcks. Vänligen använd versioner: %s',

    'LBL_PATCHES_TITLE'     => 'Installera senaste uppdateringar',
    'LBL_MODULE_TITLE'      => 'Download & Install Language Packs',
    'LBL_PATCH_1'           => 'Klicka Nästa om du vill hoppa över detta steg.',
    'LBL_PATCH_TITLE'       => 'Systemuppdatering',
    'LBL_PATCH_READY'       => 'Följande uppdateringar är redo att installeras:',
	'LBL_SESSION_ERR_DESCRIPTION'		=> "SugarCRM relies upon PHP sessions to store important information while connected to this web server.  Your PHP installation does not have the Session information correctly configured.<br />											<br><br>A common misconfiguration is that the <b>&#39;session.save_path&#39;</b> directive is not pointing to a valid directory.  <br><br />											<br> Please correct your <a target=_new href=&#39;http://us2.php.net/manual/en/ref.session.php&#39;>PHP configuration</a> in the php.ini file located here below.",
	'LBL_SESSION_ERR_TITLE'				=> 'Konfigurationsfel i PHP-session',
	'LBL_SYSTEM_NAME'=>'Systemnamn',
    'LBL_COLLATION' => 'Sorteringsinställningar',
	'LBL_REQUIRED_SYSTEM_NAME'=>'Ange ett Systemnamn för Sugarinstansen.',
	'LBL_PATCH_UPLOAD' => 'Välj en uppdateringsfil från din lokala dator',
	'LBL_BACKWARD_COMPATIBILITY_ON' => 'Php Backward Compatibility mode is turned on. Set zend.ze1_compatibility_mode to Off for proceeding further',

    'meeting_notification_email' => array(
        'name' => 'E-post med mötesaviseringar',
        'subject' => 'SugarCRM-möte - $event_name ',
        'description' => 'Denna mall används när systemet skickar en mötesavisering till en användare.',
        'body' => '<div>
	<p>Till: $assigned_user</p>

	<p>$assigned_by_user har bjudit in dig till ett möte</p>

	<p>Ämne: $event_name<br/>
	Startdatum: $start_date<br/>
	Slutdatum: $end_date</p>

	<p>Beskrivning: $description</p>

	<p>Acceptera detta möte:<br/>
	<<a href="$accept_link">$accept_link</a>></p>
	<p>Acceptera detta möte preliminärt:<br/>
	<<a href="$tentative_link">$tentative_link</a>></p>
	<p>Avböj detta möte:<br/>
	<<a href="$decline_link">$decline_link</a>></p>
</div>',
        'txt_body' =>
            'Till: $assigned_user

$assigned_by_user har bjudit in dig till ett möte

Ämne: $event_name 
Startdatum: $start_date 
Slutdatum: $end_date 

Beskrivning: $description

Acceptera detta möte: 
<$accept_link>

Acceptera detta möte preliminärt:
<$tentative_link>

Avböj detta möte:

<$decline_link>',
    ),

    'call_notification_email' => array(
        'name' => 'E-post med samtalsaviseringar',
        'subject' => 'SugarCRM-samtal - $event_name ',
        'description' => 'Denna mall används när systemet skickar en samtalsavisering till en användare.',
        'body' => '<div>
	<p>Till: $assigned_user</p>

	<p>$assigned_by_user har bjudit in dig till ett samtal</p>

	<p>Ämne: $event_name<br/>
	Startdatum: $start_date<br/>
	Varaktighet: $hoursh, $minutesm</p>

	<p>Beskrivning: $description</p>

	<p>Acceptera detta samtal:<br/>
	<<a href="$accept_link">$accept_link</a>></p>
	<p>Acceptera detta samtal preliminärt:<br/>
	<<a href="$tentative_link">$tentative_link</a>></p>
	<p>Avböj detta samtal:<br/>
	<<a href="$decline_link">$decline_link</a>></p>
</div>',
        'txt_body' =>
            'Till: $assigned_user

$assigned_by_user har bjudit in dig till ett samtal

Ämne: $event_name
Startdatum: $start_date
Varaktighet: $hoursh, $minutesm

Beskrivning: $description

Acceptera detta samtal:
<$accept_link>

Acceptera detta samtal preliminärt:
<$tentative_link>

Avböj detta samtal:
<$decline_link>',
    ),

    'assigned_notification_email' => array(
        'name' => 'E-post med uppgiftsavisering',
        'subject' => 'SugarCRM - Tilldelade $module_name ',
        'description' => 'Denna mall används när systemet skickar en uppgiftstilldelning till en användare.',
        'body' => '<div>
<p>$assigned_by_user har tilldelat en&nbsp;$module_name till&nbsp;$assigned_user.</p>

<p>Du kan granska denna&nbsp;$module_name på:<br/>
	<<a href="$module_link">$module_link</a>></p>
</div>',
        'txt_body' =>
            '$assigned_by_user har tilldelat en $module_name till $assigned_user.

Du kan granska $module_name på:
<$module_link>',
    ),

    'scheduled_report_email' => array(
        'name' => 'E-post med schemalagd rapport',
        'subject' => 'Schemalagd rapport: $report_name från den $report_time',
        'description' => 'Denna mall används när systemet skickar en schemalagd rapport till en användare.',
        'body' => '<div>
<p>Hej $assigned_user,</p>
<p>En automatiskt genererad rapport som har schemalagts för dig finns bifogad.</p>
<p>Rapportens namn: $report_name</p>
<p>Rapportens löpdatum och -tid: $report_time</p>
</div>',
        'txt_body' =>
            'Hej $assigned_user,

En automatiskt genererad rapport som har schemalagts för dig finns bifogad.

Rapportens namn: $report_name

Rapportens löpdatum och -tid: $report_time',
    ),

    'comment_log_mention_email' => [
        'name' => 'E-postavisering för kommentarslogg från systemet',
        'subject' => 'SugarCRM - $initiator_full_name nämnde dig på en $singular_module_name',
        'description' => 'Denna mall används för att skicka e-postaviseringar till användare som har taggats i avdelningen för kommentarer i loggen.',
        'body' =>
            '<div>
                <p>Du har omnämnts i följande inläggs kommentarslogg:  <a href="$record_url">$record_name</a></p>
                <p>Logga in på Sugar för att visa kommentaren.</p>
            </div>',
        'txt_body' =>
'Du har omnämnts i följande inläggs kommentarslogg: $record_name
            Logga in på Sugar för att visa kommentaren.',
    ],

    'advanced_password_new_account_email' => array(
        'subject' => 'Ny kontoinformation',
        'description' => 'Den här mallen används när System Administratören skickar ett nytt lösenord till en användare.',
        'body' => '<div><table border=\"0\" cellspacing=\"0\" cellpadding=\"0\" width="550" align=\"\&quot;\&quot;center\&quot;\&quot;\"><tbody><tr><td colspan=\"2\"><p>Här är ditt användarnamn och ditt tillfälliga lösenord:</p><p>Användarnamn : $contact_user_user_name </p><p>Lösenord : $contact_user_user_hash </p><br><p>$config_site_url</p><br><p>Efter att du loggat in med ovanstående lösenord, kommer du behöva ändra lösenordet till ett eget.</p>   </td>         </tr><tr><td colspan=\"2\"></td>         </tr> </tbody></table> </div>',
        'txt_body' =>
'är är ditt användarnamn och ditt tillfälliga lösenord: <br />Användarnamn : $contact_user_user_name<br />Lösenord : $contact_user_user_hash<br /><br />$config_site_url<br /><br />After you log in using the above password, you may be required to reset the password to one of your own choice.',
        'name' => 'Systemgenererat lösenordsemail',
        ),
    'advanced_password_forgot_password_email' => array(
        'subject' => 'Återställ ditt kontos lösenord',
        'description' => "Den här mallen används för att skicka en användare en länk att klicka på för att återställa användarens kontos lösenord.",
        'body' => 'Du begärde nyss för $contact_user_pwd_last_changed att kunna återställa ditt kontolösenord.<br />Klicka på länken nedanför för att återställa ditt lösenord:<br />$contact_user_link_guid',
        'txt_body' =>
'Du begärde nyss för $contact_user_pwd_last_changed att kunna återställa ditt kontolösenord. Klicka på länken nedanför för att återställa ditt lösenord: $contact_user_link_guid',
        'name' => 'Glömt lösenord email',
        ),

'portal_forgot_password_email_link' => [
    'name' => 'Portalens e-post för glömt lösenord',
    'subject' => 'Återställ lösenordet för ditt konto',
    'description' => 'Den här mallen används för att skicka en användare en länk att klicka på för att återställa portalanvändarens kontos lösenord.',
    'body' => '<div><table border=\"0\" cellspacing=\"0\" cellpadding=\"0\" width="550" align=\"\&quot;\&quot;center\&quot;\&quot;\"><tbody><tr><td colspan=\"2\"><p>Du begärde nyligen återställning av ditt kontos lösenord. </p><p>Klicka på länken nedan för att återställa ditt lösenord:</p><p> <a href="$portal_user_link_guid">$portal_user_link_guid</a> </p> </td> </tr><tr><td colspan=\"2\"></td> </tr> </tbody></table> </div>',
    'txt_body' =>
'Du begärde nyligen återställning av ditt kontos lösenord.

     Klicka på länken nedan för att återställa ditt lösenord:

     $portal_user_link_guid',
],

    'portal_password_reset_confirmation_email' => [
        'name' => 'E-post för bekräftelse av återställning av portalens lösenord',
        'subject' => 'Ditt kontos lösenord har återställts',
        'description' => 'Denna mall används för att skicka en bekräftelse till en portalanvändare om att deras kontos lösenord har återställts.',
        'body' => '<div><table border=\"0\" cellspacing=\"0\" cellpadding=\"0\" width="550" align=\"\&quot;\&quot;center\&quot;\&quot;\"><tbody><tr><td colspan=\"2\"><p>Detta e-postmeddelande bekräftar att kontolösenordet för din Portal har återställts. </p><p>Använd länken nedan för att logga in på portalen:</p><p> <a href="$portal_login_url">$portal_login_url</a> </p> </td> </tr><tr><td colspan=\"2\"></td> </tr> </tbody></table> </div>',
        'txt_body' =>
            'Detta e-postmeddelande bekräftar att kontolösenordet för din Portal har återställts.

    Använd länken nedan för att logga in på portalen:

    $portal_login_url',
    ],
);
