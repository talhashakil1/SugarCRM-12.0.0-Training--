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
	'LBL_BASIC_SEARCH'					=> 'Grunnleggende søk',
	'LBL_ADVANCED_SEARCH'				=> 'Avansert søk',
	'LBL_BASIC_TYPE'					=> 'Grunnleggende type',
	'LBL_ADVANCED_TYPE'					=> 'Avansert type',
	'LBL_SYSOPTS_1'						=> 'Velg blant følgende alternativer for systemkonfigurasjon nedenfor.',
    'LBL_SYSOPTS_2'                     => 'Hva slags databasetype skal brukes for Sugar-instansen du skal installere?',
	'LBL_SYSOPTS_CONFIG'				=> 'Systemkonfigurasjon',
	'LBL_SYSOPTS_DB_TYPE'				=> '',
	'LBL_SYSOPTS_DB'					=> 'Angi databasetype',
    'LBL_SYSOPTS_DB_TITLE'              => 'Databasetype',
	'LBL_SYSOPTS_ERRS_TITLE'			=> 'Rett følgende feil før du fortsetter:',
	'LBL_MAKE_DIRECTORY_WRITABLE'      => 'Vennligst gjør følgende katalog skrivbar:',


    'ERR_DB_LOGIN_FAILURE_IBM_DB2'		=> 'Den angitte verten, brukernavnet eller passordet for databasen er ugyldig og tilkobling til databasen kunne ikke opprettes.  Angi en gyldig vert, brukernavn og passord',
    'ERR_DB_IBM_DB2_CONNECT'			=> 'Den angitte verten, brukernavnet eller passordet for databasen er ugyldig og tilkobling til databasen kunne ikke opprettes.  Angi en gyldig vert, brukernavn og passord',
    'ERR_DB_IBM_DB2_VERSION'			=> 'DB2-versjonen (%s) støttes ikke av Sugar.  Du må installere en versjon som er kompatibel med Sugar-programmet.  Se kompatibilitetsmatrisen i lanseringsmerknadene for støttede DB2 versjoner.',

	'LBL_SYSOPTS_DB_DIRECTIONS'			=> 'Du må ha en Oracle-klient installert og konfigurert hvis du velger Oracle.',
	'ERR_DB_LOGIN_FAILURE_OCI8'			=> 'Den angitte verten, brukernavnet eller passordet for databasen er ugyldig og tilkobling til databasen kunne ikke opprettes.  Angi en gyldig vert, brukernavn og passord',
	'ERR_DB_OCI8_CONNECT'				=> 'Den angitte verten, brukernavnet eller passordet for databasen er ugyldig og tilkobling til databasen kunne ikke opprettes.  Angi en gyldig vert, brukernavn og passord',
	'ERR_DB_OCI8_VERSION'				=> 'Versjonen av Oracle (%s) støttes ikke av Sugar.  Du må installere en versjon som er kompatibel med Sugar-programmet.  Se kompatibilitetsmatrisen i lanseringsmerknadene for støttede Oracle-versjoner.',
    'LBL_DBCONFIG_ORACLE'               => 'Angi navnet på databasen. Dette blir standard tabellområde som er tildelt brukeren din ((SID fra tnsnames.ora).',
	// seed Ent Reports
	'LBL_Q'								=> 'Mulighetskø',
	'LBL_Q1_DESC'						=> 'Muligheter etter type',
	'LBL_Q2_DESC'						=> 'Muligheter etter konto',
	'LBL_R1'							=> '6 måneders salgspipeline-rapport',
	'LBL_R1_DESC'						=> 'Muligheter de neste 6 månedene delt inn etter måned og type',
	'LBL_OPP'							=> 'Datasett for mulighet ',
	'LBL_OPP1_DESC'						=> 'Her kan du endre utseendet for den tilpassede spørringen',
	'LBL_OPP2_DESC'						=> 'Denne spørringen vil stables under den første spørringen i rapporten',
    'ERR_DB_VERSION_FAILURE'			=> 'Kan ikke sjekke databaseversjonen.',

	'DEFAULT_CHARSET'					=> 'UTF-8',
    'ERR_ADMIN_USER_NAME_BLANK'         => 'Oppgi brukernavn for Sugar-administratoren. ',
	'ERR_ADMIN_PASS_BLANK'				=> 'Oppgi passordet for Sugar-administratoren. ',

    'ERR_CHECKSYS'                      => 'Feil ble funnet under kompatibilitetskontrollen.  For at SugarCRM-installasjonenen skal fungere riktig, utfører du de passende tiltakene for å løse problemene nedenfor, og trykker enten på knappe «sjekk på nytt» eller prøv å installere på nytt.',
    'ERR_CHECKSYS_CALL_TIME'            => 'Tillat Call Time Pass Reference er på (dette bør settes til av i php.ini)',

	'ERR_CHECKSYS_CURL'					=> 'Ikke funnet: Sugar Scheduler vil kjøre med begrenset funksjonalitet. E-postarkiveringstjenesten vil ikke kjøre.',
    'ERR_CHECKSYS_IMAP'					=> 'Finner ikke: InnkommendeE-post og kampanjer (e-post) krever IMAP-bibliotek. Ingen av dem kommer til å være funksjonell.',
	'ERR_CHECKSYS_MSSQL_MQGPC'			=> 'Magic Quotes GPC kan ikke slås «På» når du bruker MS SQL Server.',
	'ERR_CHECKSYS_MEM_LIMIT_0'			=> 'Advarsel: ',
	'ERR_CHECKSYS_MEM_LIMIT_1'			=> ' (Angi til ',
	'ERR_CHECKSYS_MEM_LIMIT_2'			=> 'M eller større i php.ini-filen)',
	'ERR_CHECKSYS_MYSQL_VERSION'		=> 'Minste versjon 4.1.2 – funnet: ',
	'ERR_CHECKSYS_NO_SESSIONS'			=> 'Kan ikke skrive og lese øktvariablene.  Kan ikke fortsette med installasjonen.',
	'ERR_CHECKSYS_NOT_VALID_DIR'		=> 'Ikke en gyldig katalog',
	'ERR_CHECKSYS_NOT_WRITABLE'			=> 'Advarsel: Ikke skrivbar',
	'ERR_CHECKSYS_PHP_INVALID_VER'		=> 'Din versjon av PHP er ikke supportert av Sugar. Du må installere en versjon som er kompatibel med Sugar. Vennligst sjekk Compatibility Matrix i Release Notes for støttede PHP versjoner. Din versjon er',
	'ERR_CHECKSYS_IIS_INVALID_VER'      => 'IIS-versjonen støttes ikke av Sugar.  Du må installere en versjon som er kompatibel med Sugar-programmet.  Se kompatibilitetsmatrisen i lanseringsmerknadene for støttede IIS-versjoner. Versjonen din er ',
    'ERR_CHECKSYS_FASTCGI'              => 'Vi oppdaget at du ikke bruker en FastCGI Handler Mapping for PHP. Du må installere/konfigurere en versjon som er kompatibel med Sugar-programmet.  Se kompatibilitetsmatrisen i lanseringsmerknadene for støttede versjoner. Se <a href="http://www.iis.net/php/" target="_blank" rel="nofollow noopener noreferrer"> http://www.iis.net/php/</a> for mer informasjon ',
	'ERR_CHECKSYS_FASTCGI_LOGGING'      => 'For den optimale bruken av IIS/FastCGI sapi, angi fastcgi.logging til 0 i php.ini-filen.',
    'ERR_CHECKSYS_PHP_UNSUPPORTED'		=> 'Ikke-støttet PHP-versjon installert: (ver',
    'LBL_DB_UNAVAILABLE'                => 'Databasen er utilgjengelig',
    'LBL_CHECKSYS_DB_SUPPORT_NOT_AVAILABLE' => 'Databasestøtte ble ikke funnet. Sørg for at du har påkrevde drivere for en av følgende støttede databasetyper: MySQL, MS SQLServer, Oracle, eller DB2. Du må kanskje avkommentere utvdelsen i php.ini-filen, eller kompilere på nytt med rett binær fil, avhengig av din versjon av PHP. Se PHP-håndboken for mer informasjon om hvordan du aktiverer databasestøtte.',
    'LBL_CHECKSYS_XML_NOT_AVAILABLE'        => 'Finner ikke funksjonene tilknyttet XML-analysebibliotekene som Sugar-programmet trenger. Du må kanskje avkommentere utvidelsen i php.ini-filen, eller omkompilere med rett binærfil, avhengig av din  PHP-versjon. Se PHP-veiledningen for mer informasjon.',
    'LBL_CHECKSYS_CSPRNG' => 'Slumptallsgeneratoren',
    'ERR_CHECKSYS_MBSTRING'             => 'Funksjoner knyttet til Multibyte Strings PHP-forlengelsen (mbstring) som Sugar-programmet trenger ble ikke funnet. <br/> <br/> Vanligvis er ikke mbstring-modulen aktivert som standard i PHP, og må aktiveres med --enable-mbstring når PHP binære bygges. Se PHP-veiledningen for mer informasjon om hvordan du aktiverer mbstring-støtte.',
    'ERR_CHECKSYS_SESSION_SAVE_PATH_NOT_SET'       => 'Innstillingen session.save_path i php-konfigurasjonsfilen (php.ini) er ikke angitt eller er satt til en mappe som ikke finnes. Du må kanskje angi innstillingen save_path i php.ini eller bekrefte at mappesettene i save_path finnes.',
    'ERR_CHECKSYS_SESSION_SAVE_PATH_NOT_WRITABLE'  => 'Innstillingen session.save_path i php konfigurasjonsfilen (php.ini) er satt til en mappe som ikke kan redigeres. Utfør de nødvendige tiltakene for å gjøre mappen redigerbar.<br>Avhengig av operativsystemet, krever dette at du endre tillatelsene ved å kjøre chmod 766 eller høyreklikker på filnavnet for å få tilgang til egenskapene og fjerner merkingen av skrivebeskyttet-alternativet.',
    'ERR_CHECKSYS_CONFIG_NOT_WRITABLE'  => 'Konfigurasjonsfilen finnes, men kan ikke redigeres.  Utfør nødvendige tiltak for å gjøre filen redigerbar.  Avhengig av operativsystemet, kan dette krever at du endre tillatelsene ved å kjøre chmod 766 eller høyreklikk på filnavnet for å få tilgang til egenskapene og fjerne merkingen av skrivebeskyttet-alternativet.',
    'ERR_CHECKSYS_CONFIG_OVERRIDE_NOT_WRITABLE'  => 'Overstyringsfilen for konfigurasjonen finnes, men kan ikke redigeres.  Utfør de nødvendige tiltakene for å gjøre filen redigerbar. Avhengig av operativsystemet kan dette kreve at du endrer tillatelsene ved å kjøre chmod 766 eller høyreklikker på filnavnet for å få tilgang til egenskapene og fjerner merkingen av skrivebeskyttet-alternativet.',
    'ERR_CHECKSYS_CUSTOM_NOT_WRITABLE'  => 'Den tilpassede katalogen finnes, men kan ikke redigeres. Utfør de nødvendige tiltakene for å gjøre filen redigerbar. Avhengig av operativsystemet kan dette kreve at du endrer tillatelsene ved å kjøre chmod 766 eller høyreklikker på filnavnet for å få tilgang til egenskapene og fjerner merkingen av skrivebeskyttet-alternativet.',
    'ERR_CHECKSYS_FILES_NOT_WRITABLE'   => "Filene eller katalogene nedenfor kan ikke redigeres eller de mangler og kan ikke opprettes. Avhengig av operativsystemet kan dette kreve at du endrer tillatelsene for filene eller den overordnede katalaogen (chmod 755) eller høyreklikker på den overordnede katalogen for å fjerne merkingen av skrivebeskyttet-alternativet og gjøre det gjeldende for alle undermappene.",
	'ERR_CHECKSYS_SAFE_MODE'			=> 'Sikkerhetsmodusen er på (du vil kanskje deaktivere den i php.ini)',
    'ERR_CHECKSYS_ZLIB'					=> 'ZLib-støtte ikke funnet: SugarCRM høster enorme ytelsesfordeler med zlib-komprimering.',
    'ERR_CHECKSYS_ZIP'					=> 'ZIP-støtten ble ikke funnet: SugarCRM trenger ZIP-støtte for å behandle komprimerte filer.',
    'ERR_CHECKSYS_BCMATH'				=> 'BCMATH støtte ikke funnet: SugarCRM trenger BCMATH-støtte for arbitætrær nøyaktighetsmatematikk.',
    'ERR_CHECKSYS_HTACCESS'             => 'Testen for .htaccess-omskriving mislyktes. Dette betyr vanligvis at du ikke har AllowOverride definert for Sugar-katalogen.',
    'ERR_CHECKSYS_CSPRNG' => 'CSPRNG unntak',
	'ERR_DB_ADMIN'						=> 'Det angitte brukernavnet og/eller passordet for databaseadministratoren er ugyldig, og tilkobling til databasen kan ikke opprettes. Angi et gyldig brukernavn og passord.  (Feil: ',
    'ERR_DB_ADMIN_MSSQL'                => 'Det angitte brukernavnet og/eller passordet for databaseadministratoren er ugyldig, og tilkobling til databasen kan ikke opprettes. Angi et gyldig brukernavn og passord.',
	'ERR_DB_EXISTS_NOT'					=> 'Den angitte databasen finnes ikke.',
	'ERR_DB_EXISTS_WITH_CONFIG'			=> 'Det finnes allerede database med config-data. For å kjøre en installasjon med den valgte databasen, kjør installasjonen på nytt og velg: «Slipp og gjenopprett eksisterende SugarCRM-tabeller?» For å oppgradere, bruker du veiviseren i administrasjonskonsollen. Les oppgraderingsdokumentasjonen som ligger <a href="http://www.sugarforge.org/content/downloads/" target="_new"> her</a>.',
	'ERR_DB_EXISTS'						=> 'Det angitte navnet finnes allerede – kan ikke opprette en med samme navn.',
    'ERR_DB_EXISTS_PROCEED'             => 'Det angitte navnet finnes allerede. Du kan:<br>1. Klikke på tilbake-knappen og velge et nytt databasenavn <br>2.  Klikke på Neste og fortsette, men alle eksisterende tabeller i databasen vil bli fjernet. <strong>Dette betyr at tabellene og dataene dine slettes.</strong>',
	'ERR_DB_HOSTNAME'					=> 'Vertsnavnet kan ikke være tomt.',
	'ERR_DB_INVALID'					=> 'Ugyldig databasetype valgt.',
	'ERR_DB_LOGIN_FAILURE'				=> 'Den angitte verten, brukernavnet eller passordet for databasen er ugyldig og tilkobling til databasen kunne ikke opprettes.  Angi en gyldig vert, brukernavn og passord',
	'ERR_DB_LOGIN_FAILURE_MYSQL'		=> 'Den angitte verten, brukernavnet eller passordet for databasen er ugyldig og tilkobling til databasen kunne ikke opprettes.  Angi en gyldig vert, brukernavn og passord',
	'ERR_DB_LOGIN_FAILURE_MSSQL'		=> 'Den angitte verten, brukernavnet eller passordet for databasen er ugyldig og tilkobling til databasen kunne ikke opprettes.  Angi en gyldig vert, brukernavn og passord',
	'ERR_DB_MYSQL_VERSION'				=> 'Din MySQL-versjon (%s) støttes ikke av Sugar. Du må installere en versjon som er kompatibel med Sugar-programmet. Se kompatibilitetsmatrisen i lanseringsmerknadene for støttede MySQL-versjoner.',
	'ERR_DB_NAME'						=> 'Databasenavnet kan ikke være tomt.',
	'ERR_DB_NAME2'						=> "Databasenavn kan ikke inneholde '\\', '/' eller '.'",
    'ERR_DB_MYSQL_DB_NAME_INVALID'      => "Databasenavn kan ikke inneholde '\\', '/' eller '.'",
    'ERR_DB_MSSQL_DB_NAME_INVALID'      => "Databasenavn kan ikke begynne med et tall, # eller @ og kan ikke inneholde mellomrom, '\"', \"'\", '*', '/', '\\', '?', ':', '<', '>', '&', '!' eller '-'",
    'ERR_DB_OCI8_DB_NAME_INVALID'       => "Databasenavn kan bare bestå av alfanumeriske tegn og symbolene '#', '_', '-', ':', '.', '/' eller '$'",
	'ERR_DB_PASSWORD'					=> 'Passordene angitt for Sugar-databaseadministratoren samsvarer ikke. Skriv det samme passordet i passordfeltene på nytt.',
	'ERR_DB_PRIV_USER'					=> 'Angi et brukernavn for databaseadministrator. Brukeren er nødvendig for den første tilkoblingen til databasen.',
	'ERR_DB_USER_EXISTS'				=> 'Brukernavnet finnes allerede for Sugar-databasebrukeren – kan ikke opprett en ny med samme navn. Skriv inn et nytt brukernavn.',
	'ERR_DB_USER'						=> 'Skriv inn et brukernavn for Sugar-databaseadministratoren.',
	'ERR_DBCONF_VALIDATION'				=> 'Rett følgende feil før du fortsetter:',
    'ERR_DBCONF_PASSWORD_MISMATCH'      => 'Passordene angitt for Sugar-databasebrukeren samsvarer ikke. Skriv de samme passordene i passordfeltene på nytt.',
	'ERR_ERROR_GENERAL'					=> 'Følgende feil oppsto:',
	'ERR_LANG_CANNOT_DELETE_FILE'		=> 'Kan ikke slette filen: ',
	'ERR_LANG_MISSING_FILE'				=> 'Finner ikke filen: ',
	'ERR_LANG_NO_LANG_FILE'			 	=> 'Ingen språkpakkefil funnet i inkluder/språk i: ',
	'ERR_LANG_UPLOAD_1'					=> 'Det oppsto et problem med opplastingen. Prøv på nytt.',
	'ERR_LANG_UPLOAD_2'					=> 'Språkpakker må ZIP-pakkes.',
	'ERR_LANG_UPLOAD_3'					=> 'PHP kan ikke flytte den midlertidige filen til oppgraderingskatalogen.',
	'ERR_LICENSE_MISSING'				=> 'Manglende obligatoriske felt',
	'ERR_LICENSE_NOT_FOUND'				=> 'Lisensfilen ble ikke funnet!',
	'ERR_LOG_DIRECTORY_NOT_EXISTS'		=> 'Den angitte loggkatalogen er ikke en gyldig katalog.',
	'ERR_LOG_DIRECTORY_NOT_WRITABLE'	=> 'Den angitte loggkatalogen er ikke en redigerbar katalog.',
	'ERR_LOG_DIRECTORY_REQUIRED'		=> 'Loggkatalogen er nødvendig hvis du vil angi dine egne.',
	'ERR_NO_DIRECT_SCRIPT'				=> 'Kan ikke behandle skriptet direkte.',
	'ERR_NO_SINGLE_QUOTE'				=> 'Kan ikke bruke enkle anførselstegn for ',
	'ERR_PASSWORD_MISMATCH'				=> 'Passordene angitt for Sugar-administratoren samsvarer ikke. Skriv de samme passordene i passordfeltene på nytt.',
	'ERR_PERFORM_CONFIG_PHP_1'			=> 'Kan ikke redigere <span class=stop>config.php</span>-filen.',
	'ERR_PERFORM_CONFIG_PHP_2'			=> 'Du kan fortsette denne installasjonen ved å manuelt opprette config.php-filen og lime inn konfigurasjonsinformasjon nedenfor i config.php-filen. Men du <strong>må</strong> lage config.php-filen før du går videre til neste trinn.',
	'ERR_PERFORM_CONFIG_PHP_3'			=> 'Husket du å opprette config.php-filen?',
	'ERR_PERFORM_CONFIG_PHP_4'			=> 'Advarsel: Kan ikke skrive til config.php-filen.  Kontroller at den finnes.',
	'ERR_PERFORM_HTACCESS_1'			=> 'Kan ikke skrive til ',
	'ERR_PERFORM_HTACCESS_2'			=> ' filen.',
	'ERR_PERFORM_HTACCESS_3'			=> 'Hvis du vil sikre loggfilen fra å gjøres tilgjengelig via nettleseren, opprett en .htaccess-fil i loggkatalogen med linjen:',
	'ERR_PERFORM_NO_TCPIP'				=> '<b>Vi finner ikke en Internett-tilkobling.</b> Når du har en tilkobling, vennligst gå til <a href="http://www.sugarcrm.com/home/index.php?option=com_extended_registration&task=register"> http://www.sugarcrm.com/home/index.php?option=com_extended_registration&task=register</a> for å registrere deg på SugarCRM. Ved å fortelle oss litt om hvordan firmaet planlegger å bruke SugarCRM kan vi sørge for at vi alltid leverer det riktige programmet for dine forretningsbehov.',
	'ERR_SESSION_DIRECTORY_NOT_EXISTS'	=> 'Den angitte øktkatalogen er ikke en gyldig katalog.',
	'ERR_SESSION_DIRECTORY'				=> 'Den angitte øktkatalogen er ikke en redigerbar katalog.',
	'ERR_SESSION_PATH'					=> 'Øktbanen er nødvendig hvis du vil angi din egen.',
	'ERR_SI_NO_CONFIG'					=> 'Du inkluderte ikke config_si.php i dokumentroten, eller du definerte ikke $sugar_config_si i config.php',
	'ERR_SITE_GUID'						=> 'Program-ID kreves hvis du vil angi dine egne.',
    'ERROR_SPRITE_SUPPORT'              => "For tiden kan vi ikke finne GD-biblioteket, som følge av dette vil du ikke kunne bruke funksjonen CSS Sprite.",
	'ERR_UPLOAD_MAX_FILESIZE'			=> 'Advarsel: PHP-konfigurasjonen bør endres for å tillate at filer på minst 6 MB lastes opp.',
    'LBL_UPLOAD_MAX_FILESIZE_TITLE'     => 'Filstørrelse for opplasting',
	'ERR_URL_BLANK'						=> 'Angi den grunnleggende URL-en for Sugar-instansen.',
	'ERR_UW_NO_UPDATE_RECORD'			=> 'Kunne ikke finne installasjonsregistreringen for',
    'ERROR_FLAVOR_INCOMPATIBLE'         => 'Den opplastede filen med denne smaken (Professional, Enterprise eller Ultimate-utgave) av sukker: ',
	'ERROR_LICENSE_EXPIRED'				=> "Feil: Din lisens har utgått",
	'ERROR_LICENSE_EXPIRED2'			=> " dag(er) siden.  Gå til <a href='index.php?action=LicenseSettings&module=Administration'>'«Lisensbehandling»</a> på Admin-skjermen for å angi den nye lisensnøkkelen. Hvis du ikke angir en ny lisensnøkkel innen 30 dager etter lisensnøkkelens utløpsdato, vil du ikke lenger kunne logge på dette programmet.",
	'ERROR_MANIFEST_TYPE'				=> 'Manifest-filen må angi pakketypen.',
	'ERROR_PACKAGE_TYPE'				=> 'Åpenbar fil må spesifisere en ukjent pakketype.',
	'ERROR_VALIDATION_EXPIRED'			=> "Feil: Din valideringsnøkkel har utgått",
	'ERROR_VALIDATION_EXPIRED2'			=> " dag(er) siden.  Gå til <a href='index.php?action=LicenseSettings&module=Administration'>'«Lisensbehandling»</a> på Admin-skjermen for å angi den nye valideringsnøkkel. Hvis du ikke angir en ny validerinsnøkkel innen 30 dager etter valideringsnøkkelens utløpsdato, vil du ikke lenger kunne logge på dette programmet.",
	'ERROR_VERSION_INCOMPATIBLE'		=> 'Den oppladede filen er ikke kompatibel med denne versjonen av Sugar:',

	'LBL_BACK'							=> 'Tilbake',
    'LBL_CANCEL'                        => 'Avbryt',
    'LBL_ACCEPT'                        => 'Jeg godtar',
	'LBL_CHECKSYS_1'					=> 'For at SugarCRM-installasjonen skal fungere, må du kontrollere at alle sjekklistene nedenfor for systemet er grønne. Hvis noen er røde, kan du utføre de nødvendige tiltakene for å fikse dem. <BR><BR>For hjelp med systemkontrollene, gå til <a href="http://www.sugarcrm.com/crm/installation" target="_blank"> Sugar Wiki</a>.',
	'LBL_CHECKSYS_CACHE'				=> 'Redigerbar cache-underkataloger',
    'LBL_DROP_DB_CONFIRM'               => 'Det angitte databasenavnet finnes allerede. <br>Du kan enten: <br>1. Klikke på Avbryt-knappen og velge et nytt databasenavn, eller <br>2. Klikke på Godta og fortsette. Alle tabellene i databasen vil bli fjernet. <strong>Dette betyr at alle tabellene og eksisterende data slettes.</strong>',
	'LBL_CHECKSYS_CALL_TIME'			=> 'PHP Allow Call Time Pass Reference er deaktivert',
    'LBL_CHECKSYS_COMPONENT'			=> 'Komponent',
	'LBL_CHECKSYS_COMPONENT_OPTIONAL'	=> 'Valgfrie komponenter',
	'LBL_CHECKSYS_CONFIG'				=> 'Redigerbar SugarCRM-konfigurasjonsfil (config.php)',
	'LBL_CHECKSYS_CONFIG_OVERRIDE'		=> 'Redigerbar SugarCRM-konfigurasjonsfil (config_override.php)',
	'LBL_CHECKSYS_CURL'					=> 'cURL-modul',
    'LBL_CHECKSYS_SESSION_SAVE_PATH'    => 'Baneinnstiling for øktlagring',
	'LBL_CHECKSYS_CUSTOM'				=> 'Redigerbar tilpasset katalog',
	'LBL_CHECKSYS_DATA'					=> 'Redigerbar underkataloger for data',
	'LBL_CHECKSYS_IMAP'					=> 'IMAP-modul',
	'LBL_CHECKSYS_MQGPC'				=> 'Magic Quotes GPC',
	'LBL_CHECKSYS_MBSTRING'				=> 'MB-strengmodul',
	'LBL_CHECKSYS_MEM_OK'				=> 'OK (ingen grense)',
	'LBL_CHECKSYS_MEM_UNLIMITED'		=> 'OK (ubegrenset)',
	'LBL_CHECKSYS_MEM'					=> 'PHP-minnegrense',
	'LBL_CHECKSYS_MODULE'				=> 'Redigerbare moduler, underkataloger og filer',
	'LBL_CHECKSYS_MYSQL_VERSION'		=> 'MySQL-versjon',
	'LBL_CHECKSYS_NOT_AVAILABLE'		=> 'Ikke tilgjengelig',
	'LBL_CHECKSYS_OK'					=> 'OK',
	'LBL_CHECKSYS_PHP_INI'				=> 'Plassering for PHP-konfigurasjonsfilen (php.ini):',
	'LBL_CHECKSYS_PHP_OK'				=> 'OK (ver.',
	'LBL_CHECKSYS_PHPVER'				=> 'PHP-versjon',
    'LBL_CHECKSYS_IISVER'               => 'IIS-versjon',
    'LBL_CHECKSYS_FASTCGI'              => 'FastCGI',
	'LBL_CHECKSYS_RECHECK'				=> 'Sjekk på nytt',
	'LBL_CHECKSYS_SAFE_MODE'			=> 'PHP-sikkerhetsmodus slått av',
	'LBL_CHECKSYS_SESSION'				=> 'Redigerbar lagringsbane for økt (',
	'LBL_CHECKSYS_STATUS'				=> 'Status',
	'LBL_CHECKSYS_TITLE'				=> 'Godta systemkontroll',
	'LBL_CHECKSYS_VER'					=> 'Funnet: (ver. ',
	'LBL_CHECKSYS_XML'					=> 'XML-parsing',
	'LBL_CHECKSYS_ZLIB'					=> 'ZLIB-komprimeringsmodul',
	'LBL_CHECKSYS_ZIP'					=> 'ZIP Handling-modul',
    'LBL_CHECKSYS_BCMATH'				=> 'Arbitrær nøyaktighetsmattemodul',
    'LBL_CHECKSYS_HTACCESS'				=> 'AllowOverride-oppsett for .htaccess',
    'LBL_CHECKSYS_FIX_FILES'            => 'Reparer følgende filer eller kataloger før du fortsetter:',
    'LBL_CHECKSYS_FIX_MODULE_FILES'     => 'Reparer følgende modulkataloger og filene under dem før du fortsetter:',
    'LBL_CHECKSYS_UPLOAD'               => 'Redigerbar opplastingskatalog',
    'LBL_CLOSE'							=> 'Lukk',
    'LBL_THREE'                         => '3',
	'LBL_CONFIRM_BE_CREATED'			=> 'opprettet',
	'LBL_CONFIRM_DB_TYPE'				=> 'Databasetype',
	'LBL_CONFIRM_DIRECTIONS'			=> 'Bekreft innstillingene nedenfor. Hvis du ønsker å endre noen av verdiene, klikker du på «Tilbake» for å redigere, eller på «Neste» for å starte installasjonen.',
	'LBL_CONFIRM_LICENSE_TITLE'			=> 'Lisensinformasjon',
	'LBL_CONFIRM_NOT'					=> 'ikke',
	'LBL_CONFIRM_TITLE'					=> 'Bekreft innstillinger',
	'LBL_CONFIRM_WILL'					=> 'vil',
	'LBL_DBCONF_CREATE_DB'				=> 'Opprett database',
	'LBL_DBCONF_CREATE_USER'			=> 'Opprett bruker [Alt+N]',
	'LBL_DBCONF_DB_DROP_CREATE_WARN'	=> 'Advarsel: Alle Sugar-data blir slettet <br>hvis denne boksen er merket.',
	'LBL_DBCONF_DB_DROP_CREATE'			=> 'Slett og gjenskap eksisterende Sugar-tabeller?',
    'LBL_DBCONF_DB_DROP'                => 'Slett tabeller',
    'LBL_DBCONF_DB_NAME'				=> 'Databasenavn',
	'LBL_DBCONF_DB_PASSWORD'			=> 'Passord for Sugar-databasebruker',
	'LBL_DBCONF_DB_PASSWORD2'			=> 'Skriv inn passordet for Sugar-databasebrukeren på nytt',
	'LBL_DBCONF_DB_USER'				=> 'Sugar-databasebrukernavn',
    'LBL_DBCONF_SUGAR_DB_USER'          => 'Sugar-databasebrukernavn',
    'LBL_DBCONF_DB_ADMIN_USER'          => 'Brukernavn for databaseadministrator',
    'LBL_DBCONF_DB_ADMIN_PASSWORD'      => 'Passord for databaseadministrator',
	'LBL_DBCONF_DEMO_DATA'				=> 'Vil du fylle databasen med demodata?',
    'LBL_DBCONF_DEMO_DATA_TITLE'        => 'Velg demodata',
	'LBL_DBCONF_HOST_NAME'				=> 'Vertsnavn',
	'LBL_DBCONF_HOST_INSTANCE'			=> 'Vertsinstans',
	'LBL_DBCONF_HOST_PORT'				=> 'Port',
    'LBL_DBCONF_SSL_ENABLED'            => 'Aktiver SSL-tilkobling',
	'LBL_DBCONF_INSTRUCTIONS'			=> 'Angi informasjonen om databasekonfigurasjonen nedenfor. Hvis du er usikker på hva du skal fylle ut, anbefaler vi at du bruker standardverdiene.',
	'LBL_DBCONF_MB_DEMO_DATA'			=> 'Vil du bruke multibytetekst i demodataene?',
    'LBL_DBCONFIG_MSG2'                 => 'Navn på webserveren eller maskinen (vert) der databasen befinner seg (som localhost eller www.mittdomene.com):',
    'LBL_DBCONFIG_MSG3'                 => 'Navnet på databasen som inneholder dataene for Sugar-instansen du skal installere:',
    'LBL_DBCONFIG_B_MSG1'               => 'Brukernavn og passord for en databaseadministrator som kan lage databasetabeller og brukere, og som kan skrive til databasen, er nødvendig for å konfigurerer Sugar-databasen.',
    'LBL_DBCONFIG_SECURITY'             => 'Av sikkerhetsmessige grunner kan du angi en eksklusiv databasebruker for å koble til Sugar-databasen.  Denne brukeren må kunne skrive, oppdatere og hente data fra Sugar-databasen som opprettes for denne instansen. Denne brukeren kan være databaseadministratoren ovenfor, eller du kan angi ny eller eksisterende databasebrukerinformasjon.',
    'LBL_DBCONFIG_AUTO_DD'              => 'Gjør det for meg',
    'LBL_DBCONFIG_PROVIDE_DD'           => 'Angi eksisterende bruker',
    'LBL_DBCONFIG_CREATE_DD'            => 'Definer bruker som skal opprettes',
    'LBL_DBCONFIG_SAME_DD'              => 'Samme som administratorbrukeren',
	//'LBL_DBCONF_I18NFIX'              => 'Apply database column expansion for varchar and char types (up to 255) for multi-byte data?',
    'LBL_FTS'                           => 'Fullt tekstsøk',
    'LBL_FTS_INSTALLED'                 => 'Installert',
    'LBL_FTS_INSTALLED_ERR1'            => 'Kompatibilitet for fullt tekstsøk er ikke installert.',
    'LBL_FTS_INSTALLED_ERR2'            => 'Du kan fortsatt installere det, men vil ikke kunne bruke fullt tekstsøk-funksjonaliteten. Se i installasjonsveiledningen for databaseserveren om hvordan du gjør dette, eller ta kontakt med administrator.',
	'LBL_DBCONF_PRIV_PASS'				=> 'Passord for privilegert databasebruker',
	'LBL_DBCONF_PRIV_USER_2'			=> 'Er databasekontoen ovenfor en privilegert bruker?',
	'LBL_DBCONF_PRIV_USER_DIRECTIONS'	=> 'Denne privilegerte databasebrukeren må ha tillatelse til å opprette en database, slette/opprette tabeller og å opprette brukere. Denne privilegerte databasebrukeren vil bare brukes til å utføre disse oppgavene som nødvendig under installasjonen. Du kan også bruke den samme databasebrukeren som ovenfor hvis brukeren har tilstrekkelige rettigheter.',
	'LBL_DBCONF_PRIV_USER'				=> 'Privilegert databasebrukernavn',
	'LBL_DBCONF_TITLE'					=> 'Databasekonfigurasjon',
    'LBL_DBCONF_TITLE_NAME'             => 'Angi databasenavn',
    'LBL_DBCONF_TITLE_USER_INFO'        => 'Angi informasjon om databasebruker',
	'LBL_DISABLED_DESCRIPTION_2'		=> 'Etter denne endringen, kan du klikke på «Start»-knappen nedenfor for å begynne installasjonen. <i>Etter at installasjonen er fullført, vil du endre verdien for «installer_locked» til «true».</i>',
	'LBL_DISABLED_DESCRIPTION'			=> 'Installasjonsprogrammet har allerede kjørt en gang. Som et sikkerhetstiltak er den deaktivert fra å kjøres en andre gang. Hvis du er helt sikker på at du vil kjøre den på nytt, kan du gå til config.php-filen og finne (eller legge til) en variabel kalt «installer_locked» og sette den til «false». Linjen skal se slik ut:',
	'LBL_DISABLED_HELP_1'				=> 'For installasonshjelp, gå til SugarCRM',
    'LBL_DISABLED_HELP_LNK'               => 'http://www.sugarcrm.com/forums/',
	'LBL_DISABLED_HELP_2'				=> 'støtteforum',
	'LBL_DISABLED_TITLE_2'				=> 'SugarCRM-installasjonen er deaktivert',
	'LBL_DISABLED_TITLE'				=> 'SugarCRM-installasjon deaktivert',
	'LBL_EMAIL_CHARSET_DESC'			=> 'Tegnsettet som er mest brukt i din region',
	'LBL_EMAIL_CHARSET_TITLE'			=> 'Innstillinger for utgående e-post',
    'LBL_EMAIL_CHARSET_CONF'            => 'Tegnsett for utgående e-post ',
	'LBL_HELP'							=> 'Hjelp',
    'LBL_INSTALL'                       => 'Installer',
    'LBL_INSTALL_TYPE_TITLE'            => 'Installasjonsvalg',
    'LBL_INSTALL_TYPE_SUBTITLE'         => 'Velg installasjonstype',
    'LBL_INSTALL_TYPE_TYPICAL'          => ' <b>Standardinstallasjon</b>',
    'LBL_INSTALL_TYPE_CUSTOM'           => ' <b>Tilpasset installasjon</b>',
    'LBL_INSTALL_TYPE_MSG1'             => 'Nøkkelen er nødvendig for generell programfunksjonalitet, men er ikke nødvendig for installasjonen. Du trenger ikke å angi nøkkelen nå, men du må gjøre det etter du har installert programmet.',
    'LBL_INSTALL_TYPE_MSG2'             => 'Krever minsteinformasjon for installasjonen. Anbefalt for nye brukere.',
    'LBL_INSTALL_TYPE_MSG3'             => 'Gir flere alternativer å konfigurere under installasjonen. De fleste av disse alternativene er også tilgjengelige etter installasjonen på administratorskjermbildene. Anbefalt for avanserte brukere.',
	'LBL_LANG_1'						=> 'For å bruke et språk i Sugar enn standardspråket (US-engelsk), kan du laste opp og installere språkpakken nå. Du vil også kunne laste opp og installere språkpakker i Sugar-programmet. Hvis du vil hoppe over dette trinnet, klikker du på neste.',
	'LBL_LANG_BUTTON_COMMIT'			=> 'Installer',
	'LBL_LANG_BUTTON_REMOVE'			=> 'Fjern',
	'LBL_LANG_BUTTON_UNINSTALL'			=> 'Avinstaller',
	'LBL_LANG_BUTTON_UPLOAD'			=> 'Lad opp',
	'LBL_LANG_NO_PACKS'					=> 'ingen',
	'LBL_LANG_PACK_INSTALLED'			=> 'Følgende språkpakker er installert: ',
	'LBL_LANG_PACK_READY'				=> 'Følgende språkpakker er klare til å installeres: ',
	'LBL_LANG_SUCCESS'					=> 'Språkpakken er lastet opp.',
	'LBL_LANG_TITLE'			   		=> 'Språkpakke',
    'LBL_LAUNCHING_SILENT_INSTALL'     => 'Installerer Sugar nå. Dette kan ta noen minutter.',
	'LBL_LANG_UPLOAD'					=> 'Last opp en språkpakke',
	'LBL_LICENSE_ACCEPTANCE'			=> 'Godta lisens',
    'LBL_LICENSE_CHECKING'              => 'Sjekker systemet for kompatibilitet.',
    'LBL_LICENSE_CHKENV_HEADER'         => 'Sjekker miljøet',
    'LBL_LICENSE_CHKDB_HEADER'          => 'Verifiserer DB, FTS-brukerinformasjon.',
    'LBL_LICENSE_CHECK_PASSED'          => 'Systemet besto kompatibilitetskontrollen.',
    'LBL_LICENSE_REDIRECT'              => 'Viderekobles om ',
	'LBL_LICENSE_DIRECTIONS'			=> 'Hvis du har lisensinformasjonen din, angir du dette i feltene nedenfor.',
	'LBL_LICENSE_DOWNLOAD_KEY'			=> 'Angi nedlastingsnøkkel',
	'LBL_LICENSE_EXPIRY'				=> 'Utløpsdato',
	'LBL_LICENSE_I_ACCEPT'				=> 'Jeg godtar',
	'LBL_LICENSE_NUM_USERS'				=> 'Antall brukere',
	'LBL_LICENSE_PRINTABLE'				=> ' Utskriftsvennlig visning ',
    'LBL_PRINT_SUMM'                    => 'Skriv ut sammendraget',
	'LBL_LICENSE_TITLE_2'				=> 'SugarCRM-lisens',
	'LBL_LICENSE_TITLE'					=> 'Lisensinformasjon',
	'LBL_LICENSE_USERS'					=> 'Lisensierte brukere',

	'LBL_LOCALE_CURRENCY'				=> 'Valutainnstillinger',
	'LBL_LOCALE_CURR_DEFAULT'			=> 'Standard valuta',
	'LBL_LOCALE_CURR_SYMBOL'			=> 'Valutategn',
	'LBL_LOCALE_CURR_ISO'				=> 'Valutakode (ISO 4217)',
	'LBL_LOCALE_CURR_1000S'				=> 'Tusenskille',
	'LBL_LOCALE_CURR_DECIMAL'			=> 'Desimalskilletegn',
	'LBL_LOCALE_CURR_EXAMPLE'			=> 'Eksempel',
	'LBL_LOCALE_CURR_SIG_DIGITS'		=> 'Betydelige siffer',
	'LBL_LOCALE_DATEF'					=> 'Standard datoformat',
	'LBL_LOCALE_DESC'					=> 'De angitte regionalinnstillingene gjenspeiles globalt i Sugar-instansen.',
	'LBL_LOCALE_EXPORT'					=> 'Tegnsett for import/eksport<br> <i>(e-post, .csv, vCard, PDF, dataimport)</i>',
	'LBL_LOCALE_EXPORT_DELIMITER'		=> 'Eksporter (.csv) skilletegn',
	'LBL_LOCALE_EXPORT_TITLE'			=> 'Innstillinger for import/eksport',
	'LBL_LOCALE_LANG'					=> 'Standardspråk',
	'LBL_LOCALE_NAMEF'					=> 'Standard navneformat',
	'LBL_LOCALE_NAMEF_DESC'				=> 's = hilsen<br />f = fornavn<br />l = etternavn',
	'LBL_LOCALE_NAME_FIRST'				=> 'David',
	'LBL_LOCALE_NAME_LAST'				=> 'Livingstone',
	'LBL_LOCALE_NAME_SALUTATION'		=> 'Dr.',
	'LBL_LOCALE_TIMEF'					=> 'Standard tidformat',
	'LBL_LOCALE_TITLE'					=> 'Lokale innstillinger',
    'LBL_CUSTOMIZE_LOCALE'              => 'Tilpass regionalinnstillinger',
	'LBL_LOCALE_UI'						=> 'Brukergrensesnitt',

	'LBL_ML_ACTION'						=> 'Handling',
	'LBL_ML_DESCRIPTION'				=> 'Beskrivelse',
	'LBL_ML_INSTALLED'					=> 'Dato for innstallering',
	'LBL_ML_NAME'						=> 'Navn',
	'LBL_ML_PUBLISHED'					=> 'Publiseringsdato',
	'LBL_ML_TYPE'						=> 'Type',
	'LBL_ML_UNINSTALLABLE'				=> 'Kan ikke innstallere',
	'LBL_ML_VERSION'					=> 'Versjon',
	'LBL_MSSQL'							=> 'SQL Server',
	'LBL_MSSQL_SQLSRV'				    => 'SQL Server (Microsoft SQL Server-driver for PHP)',
	'LBL_MYSQL'							=> 'MySQL',
    'LBL_MYSQLI'						=> 'MySQL (mysqli-utvidelse)',
	'LBL_IBM_DB2'						=> 'IBM DB2',
	'LBL_NEXT'							=> 'Neste',
	'LBL_NO'							=> 'Nei',
    'LBL_ORACLE'						=> 'Oracle',
	'LBL_PERFORM_ADMIN_PASSWORD'		=> 'Angi passord for sideadministrator',
	'LBL_PERFORM_AUDIT_TABLE'			=> 'revisjonstabell / ',
	'LBL_PERFORM_CONFIG_PHP'			=> 'Opprette Sugar-konfigurasjonsfil',
	'LBL_PERFORM_CREATE_DB_1'			=> '<b>Opprette databasen</b> ',
	'LBL_PERFORM_CREATE_DB_2'			=> ' <b>på</b> ',
	'LBL_PERFORM_CREATE_DB_USER'		=> 'Opprette databasebrukernavn og passord …',
	'LBL_PERFORM_CREATE_DEFAULT'		=> 'Opprette standard Sugar-data',
	'LBL_PERFORM_CREATE_LOCALHOST'		=> 'Opprette databasebrukernavn og passord for localhost …',
	'LBL_PERFORM_CREATE_RELATIONSHIPS'	=> 'Opprette Sugar-relasjonstabeller',
	'LBL_PERFORM_CREATING'				=> 'opprette / ',
	'LBL_PERFORM_DEFAULT_REPORTS'		=> 'Opprette standardrapporter',
	'LBL_PERFORM_DEFAULT_SCHEDULER'		=> 'Opprette standard planlegger-jobber',
	'LBL_PERFORM_DEFAULT_SETTINGS'		=> 'Sette inn standardinnstillinger',
	'LBL_PERFORM_DEFAULT_USERS'			=> 'Opprette standardbrukere',
	'LBL_PERFORM_DEMO_DATA'				=> 'Fyller databasetabeller med demodata (dette kan ta en stund)',
	'LBL_PERFORM_DONE'					=> 'ferdig<br>',
	'LBL_PERFORM_DROPPING'				=> 'sletter / ',
	'LBL_PERFORM_FINISH'				=> 'Avslutt',
	'LBL_PERFORM_LICENSE_SETTINGS'		=> 'Oppdatere lisensinformasjon',
	'LBL_PERFORM_OUTRO_1'				=> 'Oppsettet av Sugar ',
	'LBL_PERFORM_OUTRO_2'				=> ' er nå ferdig!',
	'LBL_PERFORM_OUTRO_3'				=> 'Total tid: ',
	'LBL_PERFORM_OUTRO_4'				=> ' sekunder.',
	'LBL_PERFORM_OUTRO_5'				=> 'Omtrentlig minne brukt: ',
	'LBL_PERFORM_OUTRO_6'				=> ' bytes.',
	'LBL_PERFORM_OUTRO_7'				=> 'Systemet er nå installert og konfigurert for bruk.',
	'LBL_PERFORM_REL_META'				=> 'relasjonsmeta …',
	'LBL_PERFORM_SUCCESS'				=> 'Vellykket!',
	'LBL_PERFORM_TABLES'				=> 'Opprette Sugar-programtabeller, revisjontabeller og relasjonsmetadata',
	'LBL_PERFORM_TITLE'					=> 'Utfør oppsett',
	'LBL_PRINT'							=> 'Skriv ut',
	'LBL_REG_CONF_1'					=> 'Fyll ut det korte skjemaet nedenfor for å motta produktkunngjøringer, opplæringsnyheter, spesialtilbud og spesielle arrangementinvitasjoner fra SugarCRM. Vi verken selger, leier ut, deler eller distribuerer på andre måter den innsamlede informasjonen til tredjeparter.',
	'LBL_REG_CONF_2'					=> 'Navn og e-postadresse er de eneste obligatoriske feltene for registrering. Alle de andre feltene er valgfrie, men svært nyttige. Vi verken selger, leier ut, deler eller distribuerer på andre måter den innsamlede informasjonen til tredjeparter.',
	'LBL_REG_CONF_3'					=> 'Takk for registreringen. Klikk på Fullfør for å logge på SugarCRM. Du må logge på for første gang ved hjelp av brukernavnet «admin» og passordet du anga på trinn 2.',
	'LBL_REG_TITLE'						=> 'Registrering',
    'LBL_REG_NO_THANKS'                 => 'Nei takk',
    'LBL_REG_SKIP_THIS_STEP'            => 'Hopp over dette trinnet',
	'LBL_REQUIRED'						=> '* Obligatorisk felt',

    'LBL_SITECFG_ADMIN_Name'            => 'Administratornavn for Sugar-programmet',
	'LBL_SITECFG_ADMIN_PASS_2'			=> 'Skriv inn passordet for Sugar-administratoren på nytt',
	'LBL_SITECFG_ADMIN_PASS_WARN'		=> 'Advarsel: Dette overskriver administratorpassordet for alle tidligere installasjoner.',
	'LBL_SITECFG_ADMIN_PASS'			=> 'Passord for Sugar-administratorbruker',
	'LBL_SITECFG_APP_ID'				=> 'Program-ID',
	'LBL_SITECFG_CUSTOM_ID_DIRECTIONS'	=> 'Hvis valgt, må du angi en program-ID for å overstyre den automatisk genererte ID-en. ID-en sikrer at øktene til en Sugar-instans ikke brukes av andre instanser. Hvis du har en gruppe med Sugar-installasjoner, må de dele samme program-ID.',
	'LBL_SITECFG_CUSTOM_ID'				=> 'Angi program-ID-en din',
	'LBL_SITECFG_CUSTOM_LOG_DIRECTIONS'	=> 'Hvis valgt, må du angi en loggkatalog for å overstyre standardkatalogen til Sugar-loggen. Uavhengig av hvor loggfilen ligger, er tilgangen gjennom en nettleser begrenset via en .htaccess-omdirigering.',
	'LBL_SITECFG_CUSTOM_LOG'			=> 'Bruk en tilpasset loggkatalog',
	'LBL_SITECFG_CUSTOM_SESSION_DIRECTIONS'	=> 'Hvis valgt, må du angi en sikker mappe for lagring av Sugar-øktinformasjonen. Dette kan gjøres for å hindre at øktdata er sårbar på delte servere.',
	'LBL_SITECFG_CUSTOM_SESSION'		=> 'Bruk en tilpasset øktkatalog for Sugar',
	'LBL_SITECFG_DIRECTIONS'			=> 'Angi informasjon for nettstedekonfigurasjonen nedenfor. Hvis du er usikker på feltene, anbefaler vi at du bruker standardverdiene.',
	'LBL_SITECFG_FIX_ERRORS'			=> '<b>Rett følgende feil før du fortsetter:</b>',
	'LBL_SITECFG_LOG_DIR'				=> 'Loggkatalog',
	'LBL_SITECFG_SESSION_PATH'			=> 'Banen til øktkatalogen <br>(må være redigerbar)',
	'LBL_SITECFG_SITE_SECURITY'			=> 'Velg sikkerhetsalternativer',
	'LBL_SITECFG_SUGAR_UP_DIRECTIONS'	=> 'Hvis valgt, vil systemet med jevne mellomrom se etter oppdaterte versjoner av programmet.',
	'LBL_SITECFG_SUGAR_UP'				=> 'Automatisk se etter oppdateringer?',
	'LBL_SITECFG_SUGAR_UPDATES'			=> 'Konfigurasjon av Sugar-oppdateringer',
	'LBL_SITECFG_TITLE'					=> 'Sidekonfigurasjon',
    'LBL_SITECFG_TITLE2'                => 'Identifiser administrasjonsbrukeren',
    'LBL_SITECFG_SECURITY_TITLE'        => 'Sidesikkerhet',
	'LBL_SITECFG_URL'					=> 'URL-en til Sugar-instansen',
	'LBL_SITECFG_USE_DEFAULTS'			=> 'Bruke standarder?',
	'LBL_SITECFG_ANONSTATS'             => 'Sende anonym bruksstatistikk?',
	'LBL_SITECFG_ANONSTATS_DIRECTIONS'  => 'Hvis valgt, sender Sugar <b>anonym</b> statistikk om installasjonen til SugarCRM Inc. hver gang systemet ser etter nye versjoner. Denne informasjonen hjelper oss å bedre forstå hvordan programmet brukes og er en rettesnor for forbedringer av produktet.',
    'LBL_SITECFG_URL_MSG'               => 'Angi URL-en som skal brukes for tilgang til Sugar-instansen etter installasjonen. URL-en vil også bli brukt som base for URL-er på Sugar-programsidene. URL-en bør inkludere webserveren, maskinnavn eller IP-adressen.',
    'LBL_SITECFG_SYS_NAME_MSG'          => 'Angi et navn for systemet. Dette navnet vises i nettlesers tittellinje når brukere besøker Sugar-programmet.',
    'LBL_SITECFG_PASSWORD_MSG'          => 'Etter installasjon må du bruke Sugar-administratorbrukeren (standard brukernavn = admin) for å logge på Sugar-instansen. Angi et passord for denne administratorbruker. Dette passordet kan endres etter første pålogging. Du kan også angi et annen administratorbrukernavn for å bruke i tillegg til den angitte standardverdien.',
    'LBL_SITECFG_COLLATION_MSG'         => 'Velg sammenligningsinnstillingene (sortering) for systemet. Denne innstillingen oppretter tabeller med det bestemte språket du bruker. Hvis språket ikke krever spesielle innstillinger, anbefales standardverdiene.',
    'LBL_SPRITE_SUPPORT'                => 'Sprite-støtte',
	'LBL_SYSTEM_CREDS'                  => 'Innloggingsinformasjon for system',
    'LBL_SYSTEM_ENV'                    => 'Systemmiljø',
	'LBL_START'							=> 'Start',
    'LBL_SHOW_PASS'                     => 'Vis passord',
    'LBL_HIDE_PASS'                     => 'Skjul passord',
    'LBL_HIDDEN'                        => '<i>(skjult)</i>',
//	'LBL_NO_THANKS'						=> 'Continue to installer',
	'LBL_CHOOSE_LANG'					=> '<b>Velg språk</b>',
	'LBL_STEP'							=> 'Trinn',
	'LBL_TITLE_WELCOME'					=> 'Velkommen til SugarCRM ',
	'LBL_WELCOME_1'						=> 'Installasjonsprogrammet oppretter SugarCRM-databasetabellene og angir konfigurasjonsvariablene som du trenger for å starte. Hele prosessen tar rundt ti minutter.',
    //welcome page variables
    'LBL_TITLE_ARE_YOU_READY'            => 'Er du klar for å installere?',
    'REQUIRED_SYS_COMP' => 'Nødvendige systemkomponenter',
    'REQUIRED_SYS_COMP_MSG' =>
                    'Før du begynner, må du huske at du har de støttede versjonene av følgende systemkomponenter: <br><ul><li>Database/databasebehandlingssystem (eksempler: MySQL, SQL Server, Oracle, DB2)</li> <li>Web-server (Apache, IIS)</li> <li>Elasticsearch</li></ul> Se kompatibilitetsmatrisen i lanseringsmerknadene for kompatible komponenter for Sugar-versjonen du installerer. <br>',
    'REQUIRED_SYS_CHK' => 'Første systemsjekk',
    'REQUIRED_SYS_CHK_MSG' =>
                    'Når du begynner installasjonsprosessen, utføres en systemkontroll på webserveren hvor Sugar-filene ligger for å sikre at systemet er riktig konfigurert og har alle de nødvendige komponentene for å fullføre installasjonen. <br><br>Systemet kontrollerer følgende: <br><ul><li><b>PHP-versjon</b> &#8211; må være kompatibel med programmet</li> <li><b>Øktvariablene</b> &#8211; må fungere riktig</li> <li><b>MB-strenger</b> &#8211; må være installert og aktivert i php.ini</li> <li><b>Database-støtte</b> &#8211; må finnes for MySQL, SQL Server, Oracle eller DB2</li> <li><b>Config.php</b> &#8211; må finnes og må ha riktige tillatelser for å gjøre den redigerbar</li> <li>følgende Sugar-filer må være redigerbare: <ul><li><b>/tilpasset</li> <li>/cache</li> <li>/moduler</li> <li>/last opp</b></li></ul></li></ul> Hvis sjekken mislykkes, vil du ikke kunne fortsette med installasjonen. En feilmelding vises da som forklarer hvorfor datamaskinen ikke bestod kontrollen.                                   Etter eventuelle endringer, kan du gå gjennom systemkontrollen igjen for å fortsette installasjonen. <br>',
    'REQUIRED_INSTALLTYPE' => 'Standard eller tilpasset installasjon',
    'REQUIRED_INSTALLTYPE_MSG' =>
                    "Når systemkontrollen er utført, kan du velge standard eller tilpasset installasjon. <br><br>For både <b>standard</b> og <b>tilpasset</b> installasjon må du vite følgende: <br><ul><li><b>Databasetype</b> som vil huse Sugar-dataene <ul><li>Kompatible databasetyper: MySQL, MS SQL Server, Oracle, DB2. <br> <br></li></ul></li> <li><b>Navnet på webserveren</b> eller maskinen (vert) der databasen ligger <ul><li>Dette kan være <i>localhost</i> hvis databasen ligger på den lokale datamaskinen eller på samme webserver eller maskinen hvor Sugar-filene ligger. <br> <br></li></ul></li> <li><b>Navnet på databasen</b> du vil bruke til å huse Sugar-dataene</li> <ul><li>Du har kanskje allerede en eksisterende database du vil bruke. Hvis du angir navnet på en eksisterende database, slettes tabellene i databasen under installasjonen når skjemaet for Sugar-databasen defineres.</li>                           <li>Hvis du ikke allerede har en database, kommer navnet du angir til å brukes for den nye databasen som opprettes for instansen under installasjonen. <br><br></li></ul> <li><b>Administratorbrukernavn og passord for databasen</b> <ul><li>Databaseadministratoren skal kunne opprette tabeller og brukere og å redigere databasen.</li> <li>Du må kanskje kontakte administratoren av databasen for å få denne informasjonen hvis databasen ikke er plassert på den lokale datamaskinen og/eller hvis du ikke er databaseadministratoren. <br><br></ul></li></li> <li><b>Databasebrukernavn og passord for Sugar</b></li> <ul><li>Brukeren kan være databaseadministratoren, eller du kan angi navnet på en annen eksisterende databasebruker.</li>                           <li>Hvis du ønsker å opprette en ny databasebruker til dette formålet, vil du kunne angi et nytt brukernavn og passord under installasjonen, og brukeren opprettes da under installasjonen.</li>                         </ul> <li><b>Elasticsearch vert og port</b></li> <ul><li>Elasticsearch-verten er verten som søkemotoren kjører på. Dette betyr at localhost antar at du kjører søkemotoren på samme server som Sugar.</li>                           <li>Elasticsearch-porten er portnummeret Sugar bruker for å koble til søkemotoren. Standarden er 9200, som er standard for Elasticsearch. </li></ul></ul> <p>For <b>tilpasset</b> installasjon, kan du også trenge følgende: <br><ul><li><b>URL-en som skal brukes for Sugar-instansen</b> etter den er installert.                       Denne URL-en bør inkludere webserveren, maskinnavnet eller IP-adressen. <br><br></li> <li>[Optional] <b>Banen til øktkatalogen</b> hvis du ønsker å bruke en tilpasset øktkatalog for Sugar-informasjon for å hindre at øktdata blir sårbare på delte servere. <br> <br></li> <li>[Optional] <b>Banen til en tilpasset loggkatalog</b> hvis du vil overstyre standardkatalogen for Sugarloggen<br> <br></li> <li>[Optional] <b>Program-ID</b> hvis du vil overstyre den automatiske genererte ID-en som sikrer en Sugar-instans ikke brukes av andre instanser. <br> <br></li> <li><b>Tegnsettet</b> som er mest brukt i regionen din. <br> <br></li></ul> For mer informasjon, kan du se i installasjonsveiledningen.                                ",
    'LBL_WELCOME_PLEASE_READ_BELOW' => 'Les følgende viktige informasjon før du fortsetter med installasjonen. Informasjonen hjelper deg å avgjøre om du er klar til å installere programmet.',


	'LBL_WELCOME_2'						=> 'For installasjonsdokumentasjon, kan du gå til <a href="http://www.sugarcrm.com/crm/installation" target="_blank"> Sugar Wiki</a>.  <BR><BR>For å kontakte en SugarCRM-støtterepresentant for å få installasjonshjelp, kan du logge på <a target="_blank" href="http://support.sugarcrm.com"> SugarCRMs støtteportal Portal</a> og sende inn en støtteforespørsel.',
	'LBL_WELCOME_CHOOSE_LANGUAGE'		=> '<b>Velg språk</b>',
	'LBL_WELCOME_SETUP_WIZARD'			=> 'Installasjonsveiviser',
	'LBL_WELCOME_TITLE_WELCOME'			=> 'Velkommen til SugarCRM ',
	'LBL_WELCOME_TITLE'					=> 'SugarCRMs installasjonsveiviser',
	'LBL_WIZARD_TITLE'					=> 'Sugar-installasjonsveiviser: ',
	'LBL_YES'							=> 'Ja',
    'LBL_YES_MULTI'                     => 'Ja – multibyte',
	// OOTB Scheduler Job Names:
	'LBL_OOTB_WORKFLOW'		=> 'Kjør workflow-oppgaver',
	'LBL_OOTB_REPORTS'		=> 'Kjør rapportgenerering på planlagte oppgaver',
	'LBL_OOTB_IE'			=> 'Sjekk innkommende e-post',
	'LBL_OOTB_BOUNCE'		=> 'Kjør nattlige prosesser på returnert kampanje-e-post',
    'LBL_OOTB_CAMPAIGN'		=> 'Kjør nattlige masse-e-post kampanjer',
	'LBL_OOTB_PRUNE'		=> 'Redusér databasen den første i hver måned',
    'LBL_OOTB_TRACKER'		=> 'Beskjær sporingstabeller',
    'LBL_OOTB_SEND_EMAIL_REMINDERS' => 'Kjør påminnelsesvarsler via e-post',
    'LBL_UPDATE_TRACKER_SESSIONS' => 'Oppdater tracker_sessions-tabellen',
    'LBL_OOTB_CLEANUP_QUEUE' => 'Rens jobbkø',


    'LBL_FTS_TABLE_TITLE'     => 'Angi innstillinger for fullt tekstsøk',
    'LBL_FTS_HOST'     => 'Vert',
    'LBL_FTS_PORT'     => 'Port',
    'LBL_FTS_TYPE'     => 'Søkemotortype',
    'LBL_FTS_HELP'      => 'For å aktivere fullt tekstsøk angir du verten og porten hvor søkemotoren hostes. Sugar har innebygd støtte for elasticsearch-motoren.',
    'LBL_FTS_REQUIRED'    => 'Elastic Search kreves.',
    'LBL_FTS_CONN_ERROR'    => 'Kan ikke koble til fullt tekstsøk-serveren. Kontroller innstillingene dine.',
    'LBL_FTS_NO_VERSION_AVAILABLE'    => 'Ingen fullt tekstsøk-serverversjon tilgjengelig, Kontroller innstillingene.',
    'LBL_FTS_UNSUPPORTED_VERSION'    => 'Ustøttet versjon av Elastic search oppdaget. Bruk versjoner: %s',

    'LBL_PATCHES_TITLE'     => 'Installer nyeste oppdateringer',
    'LBL_MODULE_TITLE'      => 'Installer språkpakker',
    'LBL_PATCH_1'           => 'Hvis du vil hoppe over dette trinnet, klikker du på neste.',
    'LBL_PATCH_TITLE'       => 'Systemoppdatering',
    'LBL_PATCH_READY'       => 'Følgende oppdateringer er klare til å installeres:',
	'LBL_SESSION_ERR_DESCRIPTION'		=> "SugarCRM er avhengig av PHP-økter for å lagre viktig informasjon mens du er koblet til denne webserveren. PHP-installasjonen har ikke øktinformasjonen riktig konfigurert.            <br><br>En vanlig feilkonfigurasjon er at <b>'session.save_path»</b>-direktivet ikke peker til en gyldig katalog.  <br><br>Vennligst korriger <a target=_new href='http://us2.php.net/manual/en/ref.session.php'> PHP-konfigurasjonen</a> i php.ini-filen nedenfor.",
	'LBL_SESSION_ERR_TITLE'				=> 'Konfigurasjonsfeil av PHP-økt',
	'LBL_SYSTEM_NAME'=>'Systemnavn',
    'LBL_COLLATION' => 'Sammenligningsinnstillinger',
	'LBL_REQUIRED_SYSTEM_NAME'=>'Angi et systemnavn for Sugar-instansen.',
	'LBL_PATCH_UPLOAD' => 'Velg en oppdateringsfil fra den lokale datamaskinen',
	'LBL_BACKWARD_COMPATIBILITY_ON' => 'PHP-bakoverkompatibilitetsmodus er aktivert. Angi zend.ze1_compatibility_mode til Av for å fortsette',

    'meeting_notification_email' => array(
        'name' => 'Møtevarsels-e-poster',
        'subject' => 'SugarCRM-møte - $event_name ',
        'description' => 'Denne malen brukes når systemet sender et møtevarsel til en bruker.',
        'body' => '<div>
	<p>Til: $assigned_user</p>

	<p>$assigned_by_user har invitert deg til et møte</p>

	<p>Emne: $event_name<br/>
	Startdato: $start_date<br/>
	Sluttdato: $end_date</p>

	<p>Beskrivelse: $description</p>

	<p>Godta dette møtet:<br/>
	<<a href="$accept_link">$accept_link</a>></p>
	<p>Godta dette møtet foreløpig:<br/>
	<<a href="$tentative_link">$tentative_link</a>></p>
	<p>Avslå dette møtet:<br/>
	<<a href="$decline_link">$decline_link</a>></p>
</div>',
        'txt_body' =>
            'Til: $assigned_user

$assigned_by_user har invitert deg til et møte

Emne: $event_name
Startdato: $start_date
Sluttdato: $end_date

Beskrivelse: $description

Godta dette møtet:
<$accept_link>

Godta dette møtet foreløpig
<$tentative_link>

Avslå dette møtet
<$decline_link>',
    ),

    'call_notification_email' => array(
        'name' => 'Anropsvarsels-e-poster',
        'subject' => 'SugarCRM-anrop - $event_name ',
        'description' => 'Denne malen brukes når systemet sender et samtalevarsel til en bruker.',
        'body' => '<div>
	<p>Til: $assigned_user</p>

	<p>$assigned_by_user har invitert deg til et anrop</p>

	<p>Emne: $event_name<br/>
	Startdato: $start_date<br/>
	Varighet: $hoursh, $minutesm</p>

	<p>Beskrivelse: $description</p>

	<p>Godta dette anropet:<br/>
	<<a href="$accept_link">$accept_link</a>></p>
	<p>Godta dette anropet foreløpig:<br/>
	<<a href="$tentative_link">$tentative_link</a>></p>
	<p>Avvis dette anropet:<br/>
	<<a href="$decline_link">$decline_link</a>></p>
</div>',
        'txt_body' =>
            'Til: $assigned_user

$assigned_by_user har invitert deg til et anrop

Emne: $event_name
Startdato: $start_date
Varighet: $hoursh, $minutesm

Beskrivelse: $description

Godta dette anropet:
<$accept_link>

Godta dette anropet foreløpig
<$tentative_link>

Avvis dette anropet
<$decline_link>',
    ),

    'assigned_notification_email' => array(
        'name' => 'E-poster med tildelingsvarsel',
        'subject' => 'SugarCRM - tilordnet $module_name ',
        'description' => 'Denne malen bruks når systemet sender en oppgavetilordning til en bruker.',
        'body' => '<div>
<p>$assigned_by_user har tilordnet et&nbsp;$module_name til&nbsp;$assigned_user.</p>

<p>Du kan gjennomgå dette&nbsp;$module_name på:<br/>
	<<a href="$module_link">$module_link</a>></p>
</div>',
        'txt_body' =>
            '$assigned_by_user har tilordnet et $module_name til $assigned_user.

Du kan gå gjennom dette $module_name på:
<$module_link>',
    ),

    'scheduled_report_email' => array(
        'name' => 'E-poster om planlagt rapport',
        'subject' => 'Planlagt rapport: $report_name fra $report_time',
        'description' => 'Denne malen bruks når systemet sender en planlagt rapport til en bruker.',
        'body' => '<div>
<p>Hallo $assigned_user,</p>
<p>Vedlagt er en automatisk generert rapport som har blitt planlagt for deg.</p>
<p>Rapportnavn: $report_name</p>
<p>Dato og klokkeslett for rapportkjøring: $report_time</p>
</div>',
        'txt_body' =>
            'Hallo $assigned_user,

Vedlagt er en automatisk generert rapport som har blitt planlagt for deg.

Rapportnavn: $report_name

Dato og klokkeslett for rapportkjøring: $report_time',
    ),

    'comment_log_mention_email' => [
        'name' => 'Systemkommentarlogg e-postvarsel',
        'subject' => 'SugarCRM - $initiator_full_name nevnte deg i et $singular_module_name',
        'description' => 'Denne malen brukes for å sende e-postvarsler for brukere som har blitt tagget i kommentarloggdelen.',
        'body' =>
            '<div>
                <p>Du har blitt nevnt i følgende posts kommentarlogg:  <a href="$record_url">$record_name</a></p>
                <p>Logg på Sugar for å vise kommentaren.</p>
            </div>',
        'txt_body' =>
'Du har blitt nevnt i følgende posts kommentarlogg: $record_name
            Logg på Sugar for å vise kommentaren.',
    ],

    'advanced_password_new_account_email' => array(
        'subject' => 'Ny kontoinformasjon',
        'description' => 'Denne malen brukes når systemadministratoren sender et nytt passord til en bruker.',
        'body' => '<div><table border=\"0\" cellspacing=\"0\" cellpadding=\"0\" width="550" align=\"\&quot;\&quot;center\&quot;\&quot;\"><tbody><tr><td colspan=\"2\"><p>Her er ditt kontobrukernavn og midlertidige passord:</p><p>Brukernavn : $contact_user_user_name </p><p>Passord : $contact_user_user_hash </p><br><p><a href="$config_site_url">$config_site_url</a></p><br><p>Etter du logger inn med passordet ovenfor, blir du kanskje bedt om å endre passordet.</p> </td> </tr><tr><td colspan=\"2\"></td> </tr> </tbody></table> </div>',
        'txt_body' =>
'
Her er ditt kontobrukernavn og midlertidige passord:
Brukernavn: $contact_user_user_name
Passord: $contact_user_user_hash

$config_site_url

Etter du har logget på med passordet ovenfor, bes du kanskje om å endre passordet.',
        'name' => 'Systemgenerert passord-e-post',
        ),
    'advanced_password_forgot_password_email' => array(
        'subject' => 'Tilbakestill kontopassordet',
        'description' => "Denne malen brukes til å sende en bruker en lenk for å tilbakestille brukerens passord.",
        'body' => '<div><table border=\"0\" cellspacing=\"0\" cellpadding=\"0\" width="550" align=\"\&quot;\&quot;center\&quot;\&quot;\"><tbody><tr><td colspan=\"2\"><p>Nylig ba du på $contact_user_pwd_last_changed om å få endre kontopassordet ditt. </p><p>Klikk på lenken nedenfor for å tilbakestille passordet:</p><p> <a href="$contact_user_link_guid">$contact_user_link_guid</a> </p> </td> </tr><tr><td colspan=\"2\"></td> </tr> </tbody></table> </div>',
        'txt_body' =>
'
Nylig ba du på $contact_user_pwd_last_changed om å få endre kontopassordet ditt. 

Klikk på lenken nedenfor for å tilbakestille passordet,

$contact_user_link_guid',
        'name' => 'E-post om glemt passord',
        ),

'portal_forgot_password_email_link' => [
    'name' => 'E-post om glemt passord i portal',
    'subject' => 'Tilbakestill kontopassordet',
    'description' => 'Denne malen brukes til å sende en bruker en lenk for å tilbakestille Portal-brukerens passord.',
    'body' => '<div><table border=\"0\" cellspacing=\"0\" cellpadding=\"0\" width="550" align=\"\&quot;\&quot;center\&quot;\&quot;\"><tbody><tr><td colspan=\"2\"><p>Du ba nylig om å tilbakestille kontopassordet ditt. </p><p>Klikk på lenken nedenfor for å tilbakestille passordet ditt:</p><p> <a href="$portal_user_link_guid">$portal_user_link_guid</a> </p> </td> </tr><tr><td colspan=\"2\"></td> </tr> </tbody></table> </div>',
    'txt_body' =>
'
    Du ba nylig om å tilbakestille kontopassordet ditt.

    Klikk på lenken nedenfor for å tilbakestille passordet ditt:

    $portal_user_link_guid',
],

    'portal_password_reset_confirmation_email' => [
        'name' => 'E-post med bekreftelse av tilbakestilling av Portal-passord',
        'subject' => 'Kontopassordet ditt er tilbakestilt',
        'description' => 'Denne malen brukes for å sende en bekreftelse til en Portal-bruker om at kontopassordet deres har blitt tilbakestilt.',
        'body' => '<div><table border=\"0\" cellspacing=\"0\" cellpadding=\"0\" width="550" align=\"\&quot;\&quot;center\&quot;\&quot;\"><tbody><tr><td colspan=\"2\"><p>Denne e-posten er for å bekrefte at ditt Portal-kontopassord har blitt tilbakestilt. </p><p>Bruk lenken nedenfor for å logge på portalen:</p><p> <a href="$portal_login_url">$portal_login_url</a> </p> </td> </tr><tr><td colspan=\"2\"></td> </tr> </tbody></table> </div>',
        'txt_body' =>
            '
    Denne e-posten er for å bekrefte at ditt Portal-kontopassord har blitt tilbakestilt.

    Bruk lenken nedenfor for å logge på portalen:

    $portal_login_url',
    ],
);
