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
	'LBL_BASIC_SEARCH'					=> 'Základní',
	'LBL_ADVANCED_SEARCH'				=> 'Rozšiřené',
	'LBL_BASIC_TYPE'					=> 'Základní typ',
	'LBL_ADVANCED_TYPE'					=> 'Pokročilý typ',
	'LBL_SYSOPTS_1'						=> 'Vyberte z následujících možností konfigurace systému níže.',
    'LBL_SYSOPTS_2'                     => 'Jaký typ databáze bude použit pro instancii SugarCRM, kterou se chystáte instalovat?',
	'LBL_SYSOPTS_CONFIG'				=> 'Konfigurace systému',
	'LBL_SYSOPTS_DB_TYPE'				=> '',
	'LBL_SYSOPTS_DB'					=> 'Určete typ databáze',
    'LBL_SYSOPTS_DB_TITLE'              => 'Typ databáze',
	'LBL_SYSOPTS_ERRS_TITLE'			=> 'Prosím opravte následující chyby před pokračováním:',
	'LBL_MAKE_DIRECTORY_WRITABLE'      => 'Prosím, nastavte následující adresáře zapisovatelné:',


    'ERR_DB_LOGIN_FAILURE_IBM_DB2'		=> 'Vámi zadaný hostitel, uživatelské jméno a / nebo heslo k databázi je neplatné, a připojení nelze vytvořit. Zadejte prosím platné hostitele, uživatelské jméno a heslo.',
    'ERR_DB_IBM_DB2_CONNECT'			=> 'Vámi zadaný hostitel, uživatelské jméno a / nebo heslo k databázi je neplatné, a připojení nelze vytvořit. Zadejte prosím platné hostitele, uživatelské jméno a heslo.',
    'ERR_DB_IBM_DB2_VERSION'			=> 'Vaše verze DB2 (%s) není SugarCRM podporována. Je třeba nainstalovat verzi, která ja kompatibilní s aplikací SugarCRM. Prosíme, použijte "matici kompatibility" v Poznámkách k vydání ke zjištění podporovaných DB2 verzí.',

	'LBL_SYSOPTS_DB_DIRECTIONS'			=> 'Musíte mít klient Oracle instalovány a nastaveny, pokud zvolíte Oracle.',
	'ERR_DB_LOGIN_FAILURE_OCI8'			=> 'Vámi zadaný hostitel, uživatelské jméno a / nebo heslo k databázi je neplatné, a připojení nelze vytvořit. Zadejte prosím platné hostitele, uživatelské jméno a heslo.',
	'ERR_DB_OCI8_CONNECT'				=> 'Vámi zadaný hostitel, uživatelské jméno a / nebo heslo k databázi je neplatné, a připojení nelze vytvořit. Zadejte prosím platné hostitele, uživatelské jméno a heslo.',
	'ERR_DB_OCI8_VERSION'				=> 'Sugar nepodoruje Vaši verzi Oracle. Budete si muset nainstalovat verzi, která je kompatibilní s aplikací Sugar. Naleznete podporované verze Oracle v Tabulke Kompatibility v poznámkách k vydání Sugar.',
    'LBL_DBCONFIG_ORACLE'               => 'Prosíme zadejte jméno Vaší databáze.Toto bude výchozí prostor přidělený Vašemu uživateli (SID od tnsnames.ora)',
	// seed Ent Reports
	'LBL_Q'								=> 'Dotaz na obchody.',
	'LBL_Q1_DESC'						=> 'Obchody podle typu',
	'LBL_Q2_DESC'						=> 'Obchody podle Společností',
	'LBL_R1'							=> '6 měsíční report zdrojů obchodu',
	'LBL_R1_DESC'						=> 'Obchody v průběhu následujících 6 měsíců v členění podle měsíců a typu',
	'LBL_OPP'							=> 'Obchodní Set Dat',
	'LBL_OPP1_DESC'						=> 'Zde si můžete změnit vzhled a dojem vlasního dotazu.',
	'LBL_OPP2_DESC'						=> 'Tento dotaz se bude stohovat pod první dotaz v Reporte',
    'ERR_DB_VERSION_FAILURE'			=> 'Nelze zjistit verzi databáze.',

	'DEFAULT_CHARSET'					=> 'UTF-8',
    'ERR_ADMIN_USER_NAME_BLANK'         => 'Zadejte uživatelské jméno pro administrátorského uživatele Sugaru.',
	'ERR_ADMIN_PASS_BLANK'				=> 'Zadejte heslo pro administrátorského uživatele Sugaru.',

    'ERR_CHECKSYS'                      => 'Chyby byly zjištěny při kontrole kompatibility. Aby se vaše SugarCRM instalace mohla správně fungovat, prosim, vykonejte správné kroky k řešení problémů uvedených níže, a pak pokračujte stisknutím tlačítka překontrolovat, nebo zkuste nainstalovat znovu.',
    'ERR_CHECKSYS_CALL_TIME'            => 'Položka Povolit času volání předat referenci je zapnuta (mělo by být vypnuto v souboru php.ini)',

	'ERR_CHECKSYS_CURL'					=> 'Nenalezeno: Plánovač Sugar bude fungovat s omezenou funkčností. Nebude fungovat služba Archivování e-mailů.',
    'ERR_CHECKSYS_IMAP'					=> 'Nenaleyeno: Prichodzí Email a kampaně (e-mail) vyžadují IMAP knihovny. Ani jedno nebude funkční.',
	'ERR_CHECKSYS_MSSQL_MQGPC'			=> 'Magic Quotes GPC nemůže být "On" při použití MS SQL Serveru.',
	'ERR_CHECKSYS_MEM_LIMIT_0'			=> 'Varování:',
	'ERR_CHECKSYS_MEM_LIMIT_1'			=> '(Nastavte',
	'ERR_CHECKSYS_MEM_LIMIT_2'			=> 'M nebo větší v souboru php.ini)',
	'ERR_CHECKSYS_MYSQL_VERSION'		=> 'Minimální verze 4.1.2 - Nalezeno:',
	'ERR_CHECKSYS_NO_SESSIONS'			=> 'Minimální verze 4.1.2 - Nalezeno:',
	'ERR_CHECKSYS_NOT_VALID_DIR'		=> 'Není platný adresář',
	'ERR_CHECKSYS_NOT_WRITABLE'			=> 'Upozornění: nelze zapisovat',
	'ERR_CHECKSYS_PHP_INVALID_VER'		=> 'Tvoje verze PHP není kompatibilní s SugarCRM. Postupuj prosím dle požadovaných parametrů pro systém. Vaše verze je',
	'ERR_CHECKSYS_IIS_INVALID_VER'      => 'Sugar nepodoruje Vaši verzi IIS. Budete si muset nainstalovat verzi, která je kompatibilní s aplikací Sugar. Naleznete podporované verze IIS v Tabulke Kompatibility v poznámkách k vydání Sugar.',
    'ERR_CHECKSYS_FASTCGI'              => 'Zjistili jsme, že nepoužíváte mapování obslužné rutiny FastCGI pro PHP. Budete muset nainstalovat/nakonfigurovat verzi, která je kompatibilní s aplikací Sugar.  Podporované verze najdete v matici kompatibility v poznámkách k verzi. Podrobné informace naleznete v <a href="http://www.iis.net/php/" target="_blank" rel="nofollow noopener noreferrer">http://www.iis.net/php/</a> ',
	'ERR_CHECKSYS_FASTCGI_LOGGING'      => 'Pro optimální vzužití pomocí IIS / FastCGI SAPI, nastavte fastcgi.logging na 0 v souboru php.ini.',
    'ERR_CHECKSYS_PHP_UNSUPPORTED'		=> 'Nepodporovaná PHP verze nainstalovaná: (ver',
    'LBL_DB_UNAVAILABLE'                => 'Databáze není k dispozici',
    'LBL_CHECKSYS_DB_SUPPORT_NOT_AVAILABLE' => 'Podpora databáze nenalezena. Zkontrolujte, zda máte potřebné ovladače pro jeden z následujících podporovaných typů databáze: MySQL, MS SQLServer, Oracle nebo DB2. Možná budete muset v závislosti na verzi PHP odkomentovat rozšíření v souboru php.ini, nebo překompilovat správný binární soubor. Více informací o tom, jak povolit podporu databáze, naleznete v příručce PHP.',
    'LBL_CHECKSYS_XML_NOT_AVAILABLE'        => 'Funkce spojené s XML Parser Knihovami, které jsou potřebné pro aplikaci Sugar nebyly nalezeny. Možná bude nutné odkomentovat rozšíření v souboru php.ini, nebo překompilovat s právami binární soubor, v závislosti na verzi PHP. Podívejte se do vašeho PHP Manuálu pro více informací.',
    'LBL_CHECKSYS_CSPRNG' => 'Generátor náhodných čísel',
    'ERR_CHECKSYS_MBSTRING'             => 'Funkce spojené s Multibyte Strings PHP rozšířením (mbstring), které jsou potřebné pro aplikaci Sugar nebyly nalezeny.<br /><br />Obecně platí, že je modul mbstring není povolen ve výchozím nastavení v PHP a musí být aktivován pomocí - enable-mbstring, když je compilovaný binární PHP. Podívejte se do vašeho PHP Manuálu pro více informací o tom, jak povolit mbstring podporu.',
    'ERR_CHECKSYS_SESSION_SAVE_PATH_NOT_SET'       => 'Nastavení Session.save_path v konfiguračním souboru PHP (php.ini) není nastaveno nebo je nastaveno na složku, která neexistuje. Možná budete muset nastavit save_path nastavení v php.ini, nebo ověřit, zda složky v save_path existují.',
    'ERR_CHECKSYS_SESSION_SAVE_PATH_NOT_WRITABLE'  => 'Nastavení Session.save_path v konfiguračním souboru PHP (php.ini) je nastaveno na složku, která není zapisovatelná. Prosím, podniknete nezbytné kroky, aby se do složky zapisovat.<br />V závislosti na používaném operačním systému, mohlo by to vyžadovat změnu oprávnění spuštěním chmod 766, nebo klikněte pravým tlačítkem myši na název souboru pro přístup k vlastnostem a odškrtněte volbu jen pro čtení.',
    'ERR_CHECKSYS_CONFIG_NOT_WRITABLE'  => 'Konfigurační soubor existuje, ale není zapisovatelný. Prosím, podniknete nezbytné kroky, aby se do souboru dalo zapisovat. V závislosti na používaném operačním systému, mohlo by to vyžadovat změnu oprávnění spuštěním chmod 766, nebo klikněte pravým tlačítkem myši na název souboru pro přístup k vlastnostem a odškrtněte volbu jen pro čtení.',
    'ERR_CHECKSYS_CONFIG_OVERRIDE_NOT_WRITABLE'  => 'Soubor config override existuje, ale není zapisovatelný. Proveďte prosím nezbytné kroky k tomu, aby byl soubor zapisovatelný. V závislosti na Vašem OS bude třeba změnit práva buď spuštěním chmod 766 nebo pravoklikem na soubor přejít na Vlastnosti a vypnout možnost Pouze pro čtení.',
    'ERR_CHECKSYS_CUSTOM_NOT_WRITABLE'  => 'Vlastní adresář existuje, ale není zapisovatelný. Možná budete muset změnit oprávnění na něm (chmod 766), nebo klikněte pravým tlačítkem myši na něj a zrušte zaškrtnutí možnosti pouze pro čtení, v závislosti na používaném operačním systému. Podniknete prosím potřebné kroky, aby se do souboru dalo zapisovat.',
    'ERR_CHECKSYS_FILES_NOT_WRITABLE'   => "Soubory nebo adresáře uvedené níže nejsou zapisovatelné nebo chybí, a nemůžou být vytvořeny. V závislosti na používaném operačním systému, oprava může vyžadovat změnu oprávnění na soubory, nebo nadřazeného adresáře (chmod 766), nebo klikněte pravým tlačítkem na nadřazený adresář a zrušte zatržení &#39;pouze pro čtení&#39; možnost a aplikovat ji na všechny podsložky.",
	'ERR_CHECKSYS_SAFE_MODE'			=> 'Safe Mode je zapnutý (možná budete chtít zakázat v php.ini)',
    'ERR_CHECKSYS_ZLIB'					=> 'Nenalezeno: SugarCRM běží s výrazne vyšším výkonem s zlib kompresi.',
    'ERR_CHECKSYS_ZIP'					=> 'Podpora ZIP komprese nebyla nalezena: SugarCRM potřebuje podporu ZIP na zpracování komprimovaných souborů.',
    'ERR_CHECKSYS_BCMATH'				=> 'Nebyla nalezena podpora pro BCMATH: SugarCRM potřebuje BCMATH pro výpočty v libovolné přesnosti.',
    'ERR_CHECKSYS_HTACCESS'             => 'Test .htaccess zápisů selhal. Toto obvykle znamená, že nemáte nastavená práva AllowOverride ke složce Sugaru.',
    'ERR_CHECKSYS_CSPRNG' => 'Výjimka CSPRNG',
	'ERR_DB_ADMIN'						=> 'Poskytnuté uživatelské jméno a / nebo heslo k databázi je neplatné, a připojení k databázi nelze vytvořit. Zadejte prosím platné uživatelské jméno a heslo. (Chyba:',
    'ERR_DB_ADMIN_MSSQL'                => 'Poskytnuté uživatelské jméno a / nebo heslo k databázi je neplatné, a připojení k databázi nelze vytvořit. Zadejte prosím platné uživatelské jméno a heslo.',
	'ERR_DB_EXISTS_NOT'					=> 'Zadaná databáze neexistuje.',
	'ERR_DB_EXISTS_WITH_CONFIG'			=> 'Databáze již existuje s configuračními datami. Chcete-li spustit instalaci s zvolené databáze, spuste znova instalaci a vyberte si: "Smazat a znovu vytvořit stávající SugarCRM tabulky" Chcete-li upgradovat, použijte Průvodce pru upgrade v Konzoli pro správu. Přečtěte si prosím dokumentaci ktorá se nachází <a href="http://www.sugarforge.org/content/downloads/" target="_new">tady</a>.',
	'ERR_DB_EXISTS'						=> 'Zadaný název databáze již existuje - nelze vytvořit další se stejným názvem.',
    'ERR_DB_EXISTS_PROCEED'             => 'Zadaný název databáze již existuje. Můžete<br />1. kliknúť na tlačítko Zpět a vybrat nové jméno databáze<br />2. klepněte na tlačítko Další a pokračujte, ale všechny existující tabulky a data v této databáze budou zrušeny. To znamená, tabulky a data budou smazané.',
	'ERR_DB_HOSTNAME'					=> 'Název hostitele nemůže být prázdný.',
	'ERR_DB_INVALID'					=> 'Vybraný neplatný typ databáze.',
	'ERR_DB_LOGIN_FAILURE'				=> 'Vámi zadaný hostitel, uživatelské jméno a / nebo heslo k databázi je neplatné, a připojení nelze vytvořit. Zadejte prosím platné hostitele, uživatelské jméno a heslo.',
	'ERR_DB_LOGIN_FAILURE_MYSQL'		=> 'Vámi zadaný hostitel, uživatelské jméno a / nebo heslo k databázi je neplatné, a připojení nelze vytvořit. Zadejte prosím platné hostitele, uživatelské jméno a heslo.',
	'ERR_DB_LOGIN_FAILURE_MSSQL'		=> 'Vámi zadaný hostitel, uživatelské jméno a / nebo heslo k databázi je neplatné, a připojení nelze vytvořit. Zadejte prosím platné hostitele, uživatelské jméno a heslo.',
	'ERR_DB_MYSQL_VERSION'				=> 'Vaše verze MySQL (%s) není SugarCRM podporována. Je třeba nainstalovat verzi, která ja kompatibilní s aplikací SugarCRM. Prosíme, použijte "matici kompatibility" v Poznámkách k vydání ke zjištění podporovaných MySQL verzí.',
	'ERR_DB_NAME'						=> 'Název databáze nemůže být prázdny.',
	'ERR_DB_NAME2'						=> "Jméno databáze nemúže obsahovat &#39;\\&#39;, &#39;/&#39;, nebo &#39;.&#39;",
    'ERR_DB_MYSQL_DB_NAME_INVALID'      => "Jméno databáze nemúže obsahovat &#39;\\&#39;, &#39;/&#39;, nebo &#39;.&#39;",
    'ERR_DB_MSSQL_DB_NAME_INVALID'      => "Jméno databáze nemúže obsahovat &#39;\"&#39;, \"&#39;\", &#39;*&#39;, &#39;/&#39;, &#39;\\&#39;, &#39;?&#39;, &#39;:&#39;, &#39;<&#39;, &#39;>&#39;, nebo &#39;-&#39;",
    'ERR_DB_OCI8_DB_NAME_INVALID'       => "Název databáze může obsahovat pouze alfanumerické znaky a symboly „#“, „_“, „-“, „:“, „.“, „/“ nebo „$“",
	'ERR_DB_PASSWORD'					=> 'Hesla pro správce databáze Sugar se neshodují. Prosím zadejte stejné heslo do obou polí s heslem.',
	'ERR_DB_PRIV_USER'					=> 'Poskytnete uživatelské jméno správce databáze . Uživatel je potřebný pro počáteční připojení k databázi.',
	'ERR_DB_USER_EXISTS'				=> 'Uživatelské jméno pro Sugar databázi již existuje - nelze vytvořit další se stejným názvem. Prosím, zadejte nové uživatelské jméno.',
	'ERR_DB_USER'						=> 'Zadejte uživatelské jméno pro správce databáze Sugaru.',
	'ERR_DBCONF_VALIDATION'				=> 'Prosím opravte následující chyby před pokračováním:',
    'ERR_DBCONF_PASSWORD_MISMATCH'      => 'Hesla pro uživatele databáze Sugar se neshodují. Prosím znovu zadejte stejné heslo do polí s heslem.',
	'ERR_ERROR_GENERAL'					=> 'Došlo k následujícím chybám:',
	'ERR_LANG_CANNOT_DELETE_FILE'		=> 'Nelze smazat soubor:',
	'ERR_LANG_MISSING_FILE'				=> 'Nelze najít soubor:',
	'ERR_LANG_NO_LANG_FILE'			 	=> 'Žádný soubor s jazykovou mutací nebyl nalezen v include/language:',
	'ERR_LANG_UPLOAD_1'					=> 'Byl problém s nahráváním. Zkuste to prosím znovu.',
	'ERR_LANG_UPLOAD_2'					=> 'Jazykové balíčky musí být ZIP archivy.',
	'ERR_LANG_UPLOAD_3'					=> 'PHP nemohlo presunout dočasný soubor do adresáře upgrade.',
	'ERR_LICENSE_MISSING'				=> 'Chybějící potřebné pole',
	'ERR_LICENSE_NOT_FOUND'				=> 'Licenční soubor nenalezen!',
	'ERR_LOG_DIRECTORY_NOT_EXISTS'		=> 'Adresář pro logy není platným adresářem.',
	'ERR_LOG_DIRECTORY_NOT_WRITABLE'	=> 'Adresář pro logy není adresářem, do kterého se dá zapisovat.',
	'ERR_LOG_DIRECTORY_REQUIRED'		=> 'Adresář pro logy je nutný pro vlastní umístnění.',
	'ERR_NO_DIRECT_SCRIPT'				=> 'Není možno vykonat skripty přímo.',
	'ERR_NO_SINGLE_QUOTE'				=> 'Nelze použít jednoduché uvozovky pro',
	'ERR_PASSWORD_MISMATCH'				=> 'Hesla se neschodují.',
	'ERR_PERFORM_CONFIG_PHP_1'			=> 'Není možno zapsat do konfiguračního souboru config.php.',
	'ERR_PERFORM_CONFIG_PHP_2'			=> 'Můžete pokračovat v instalaci manualním vytvořením config.php souboru obsahujícím konfiguraci níže. Nicméne, před dalšími kroky musíte vytvořit soubor config.php.',
	'ERR_PERFORM_CONFIG_PHP_3'			=> 'Nezapomněl jste vytvořit config.php soubor?',
	'ERR_PERFORM_CONFIG_PHP_4'			=> 'Varování: Není možné zapsat do config.php souboru. Prosím ujistěte se, že existuje.',
	'ERR_PERFORM_HTACCESS_1'			=> 'Není možné zapsat do',
	'ERR_PERFORM_HTACCESS_2'			=> 'souboru.',
	'ERR_PERFORM_HTACCESS_3'			=> 'Jestliže chcete zabezpečit Váš log soubor, aby nebyl dostupný z internetu, vytvořte soubor .htaccess ve stejném adresáři s následujícími řádky"',
	'ERR_PERFORM_NO_TCPIP'				=> 'Nepodařilo se zjistit připojení k Internetu. Jestliže máte připojení, navštivte prosím http://www.sugarcrm.com/home/index.php?option=com_extended_registration&task=register pro registraci SugarCRM. Tím, že nám vědět něco o tom, jak vaše společnost plánuje využít SugarCRM, můžeme zajistit, abychom vždy dodávali správné aplikace pro vaše obchodní potřeby.',
	'ERR_SESSION_DIRECTORY_NOT_EXISTS'	=> 'Adresář pro informace o připojených není platným adresářem.',
	'ERR_SESSION_DIRECTORY'				=> 'Adresář pro informace o připojených není zapisovatelným adresářem.',
	'ERR_SESSION_PATH'					=> 'Cesta k informacím o připojených je nutná, jestliže ji specifikujete.',
	'ERR_SI_NO_CONFIG'					=> 'Nevložil jste config_si.php do kořenového adresáře, nebo není deklarován $sugar_config_si v config.php',
	'ERR_SITE_GUID'						=> 'ID aplikace je vyžadováno, pokud chcete zadat vaše vlastní.',
    'ERROR_SPRITE_SUPPORT'              => "V současné době nejsme schopni najít knihovnu GD, tím pádem nebudete moci používat CSS Sprite funkčnost.",
	'ERR_UPLOAD_MAX_FILESIZE'			=> 'Upozornění: Vaše PHP konfigurace by měla být změněna, aby bylo možné nahrávat soubory větší než 6 MB.',
    'LBL_UPLOAD_MAX_FILESIZE_TITLE'     => 'Velikost nahraného souboru',
	'ERR_URL_BLANK'						=> 'Vložte základní adresu instance SugarCRM.',
	'ERR_UW_NO_UPDATE_RECORD'			=> 'Nebyl nalezen instalační záznam k',
    'ERROR_FLAVOR_INCOMPATIBLE'         => 'Nahraný soubor není kompatibilní s touto verzí systému Sugar (edice Professional, Enterprise nebo Ultimate): ',
	'ERROR_LICENSE_EXPIRED'				=> "Chyba: Vaše licence vyexpirovala",
	'ERROR_LICENSE_EXPIRED2'			=> "dny.Prosím jděte na stránky <a href=\\\"index.php?action=LicenseSettings&module=Administration\\\"> Správa licencí</a> v sekci ADMINISTRACE a vložte nový licenční klíč. Jesliže tak neučiníte během 30 dnů, nebudete schopni se na systém přihlásit.",
	'ERROR_MANIFEST_TYPE'				=> 'Soubor manifestu musí specifikovat typ balíčku.',
	'ERROR_PACKAGE_TYPE'				=> 'Manifest soubor specifikuje neznámý typ balíčku',
	'ERROR_VALIDATION_EXPIRED'			=> "Chyba: Váš ověřovací klíč vyexpiroval.",
	'ERROR_VALIDATION_EXPIRED2'			=> "dny.Prosím jděte na stránky <a href=\\\"index.php?action=LicenseSettings&module=Administration\\\"> Správa licencí</a> v sekci ADMINISTRACE a vložte nový licenční klíč. Jesliže tak neučiníte během 30 dnů, nebudete schopni se na systém přihlásit.",
	'ERROR_VERSION_INCOMPATIBLE'		=> 'Nahraný soubor není s vaší verzí Sugar kompatibilní:',

	'LBL_BACK'							=> 'Zpět',
    'LBL_CANCEL'                        => 'Zrušit',
    'LBL_ACCEPT'                        => 'Přijmout',
	'LBL_CHECKSYS_1'					=> 'Aby Vaše SugarCRM instalace správně fungovala, prosím zkontrolujte všechny položky systému, zda-li jsou zelené. Pokud některé z nich jsou červené, prosím, proveďte kroky nezbytné k nápravě.<BR><BR> Pro nápovědu k těmto vlastnostem můžete využít <a href="http://www.sugarcrm.com/crm/installation" target="_blank">Sugar Wiki</a>.',
	'LBL_CHECKSYS_CACHE'				=> 'Zapisovatelná Cache podadresářů',
    'LBL_DROP_DB_CONFIRM'               => 'Zvolené jméno databáze již existuje.<br>Nyní můžete:<br>1. Kliknout na tlačítko Storno a zvolit nové jméno, nebo <br>2. Kliknout na Potvrdit a pokračovat. Všechny existující tabulky v databázi budou smazány. <strong>To znamená, že všechny tabulky a data budou odstraněny</strong>',
	'LBL_CHECKSYS_CALL_TIME'			=> 'Položka PHP Povolit času volání předat referenci je zapnuta',
    'LBL_CHECKSYS_COMPONENT'			=> 'Komponenta',
	'LBL_CHECKSYS_COMPONENT_OPTIONAL'	=> 'Volitelné komponenty',
	'LBL_CHECKSYS_CONFIG'				=> 'Přepisovatelný SugarCRM konfigurační soubor (config.php)',
	'LBL_CHECKSYS_CONFIG_OVERRIDE'		=> 'Zapisovatelný SugarCRM konfigurační soubor (config_override.php)',
	'LBL_CHECKSYS_CURL'					=> 'cURL modul',
    'LBL_CHECKSYS_SESSION_SAVE_PATH'    => 'Nastavení ukládání cesty relace',
	'LBL_CHECKSYS_CUSTOM'				=> 'Zapisovatelná složka Custom',
	'LBL_CHECKSYS_DATA'					=> 'Zapisovatelné podsložky',
	'LBL_CHECKSYS_IMAP'					=> 'IMAP modul',
	'LBL_CHECKSYS_MQGPC'				=> 'Magic Quotes GPC',
	'LBL_CHECKSYS_MBSTRING'				=> 'MB Strings Module',
	'LBL_CHECKSYS_MEM_OK'				=> 'OK (bez limitu)',
	'LBL_CHECKSYS_MEM_UNLIMITED'		=> 'OK (neomezeně)',
	'LBL_CHECKSYS_MEM'					=> 'PHP Memory Limit',
	'LBL_CHECKSYS_MODULE'				=> 'Zapisovatelné moduly adresářů a souborů',
	'LBL_CHECKSYS_MYSQL_VERSION'		=> 'Verze MySQL',
	'LBL_CHECKSYS_NOT_AVAILABLE'		=> 'Není dostupné',
	'LBL_CHECKSYS_OK'					=> 'OK',
	'LBL_CHECKSYS_PHP_INI'				=> 'Lokalizace PHP konfiguračního souboru (php.ini):',
	'LBL_CHECKSYS_PHP_OK'				=> 'OK (ver',
	'LBL_CHECKSYS_PHPVER'				=> 'Verze PHP',
    'LBL_CHECKSYS_IISVER'               => 'Verze IIS',
    'LBL_CHECKSYS_FASTCGI'              => 'FastCGI',
	'LBL_CHECKSYS_RECHECK'				=> 'Znova zkontrolovat',
	'LBL_CHECKSYS_SAFE_MODE'			=> 'PHP Safe Mode vypnut',
	'LBL_CHECKSYS_SESSION'				=> 'Cesta pro uložení zapisovatelné relace (',
	'LBL_CHECKSYS_STATUS'				=> 'Stav',
	'LBL_CHECKSYS_TITLE'				=> 'Systémová kontorla',
	'LBL_CHECKSYS_VER'					=> 'Nalezena: (verze',
	'LBL_CHECKSYS_XML'					=> 'Parsování XML',
	'LBL_CHECKSYS_ZLIB'					=> 'Modul ZLIB komprese',
	'LBL_CHECKSYS_ZIP'					=> 'Modul ZIP komprese',
    'LBL_CHECKSYS_BCMATH'				=> 'Modul Výpočty v libovolné přesnosti',
    'LBL_CHECKSYS_HTACCESS'				=> 'Nastavení AllowOverride pro .htaccess',
    'LBL_CHECKSYS_FIX_FILES'            => 'Prosím, před pokračováním, opravte následující soubory a adresáře:',
    'LBL_CHECKSYS_FIX_MODULE_FILES'     => 'Prosím, před pokračováním, opravte následující adresáře a soubory modulů:',
    'LBL_CHECKSYS_UPLOAD'               => 'Zapisovatelná složka Upload',
    'LBL_CLOSE'							=> 'Zavřít',
    'LBL_THREE'                         => '3',
	'LBL_CONFIRM_BE_CREATED'			=> 'vytvořit',
	'LBL_CONFIRM_DB_TYPE'				=> 'Typ databáze',
	'LBL_CONFIRM_DIRECTIONS'			=> 'Prosím, nastavení potvrďte níže. Pokud byste chtěli změnit některou z hodnot, klepněte na tlačítko "Zpět" pro editaci. Jinak klepněte na tlačítko "Další" pro spuštění instalace.',
	'LBL_CONFIRM_LICENSE_TITLE'			=> 'Licenční informace:',
	'LBL_CONFIRM_NOT'					=> 'ne',
	'LBL_CONFIRM_TITLE'					=> 'Potvrdit nastavení',
	'LBL_CONFIRM_WILL'					=> 'bude',
	'LBL_DBCONF_CREATE_DB'				=> 'Vytvořit databázi',
	'LBL_DBCONF_CREATE_USER'			=> 'Přidat uživatele [Alt+N]',
	'LBL_DBCONF_DB_DROP_CREATE_WARN'	=> 'Varování: Všechny Sugar data budou smazána, pokud zatrhnete toto políčko.',
	'LBL_DBCONF_DB_DROP_CREATE'			=> 'Smaž a znovu vytvoř existující Sugar tabulky',
    'LBL_DBCONF_DB_DROP'                => 'Smaž tabulky',
    'LBL_DBCONF_DB_NAME'				=> 'Jméno databáze',
	'LBL_DBCONF_DB_PASSWORD'			=> 'Heslo Sugar uživatele do databáze',
	'LBL_DBCONF_DB_PASSWORD2'			=> 'Potvrďte heslo Sugar uživatele do databáze',
	'LBL_DBCONF_DB_USER'				=> 'Sugar uživatel do databáze',
    'LBL_DBCONF_SUGAR_DB_USER'          => 'Sugar uživatel do databáze',
    'LBL_DBCONF_DB_ADMIN_USER'          => 'Administrátor databáze',
    'LBL_DBCONF_DB_ADMIN_PASSWORD'      => 'Administrátor databáze',
	'LBL_DBCONF_DEMO_DATA'				=> 'Nahrát Demo data do databáze',
    'LBL_DBCONF_DEMO_DATA_TITLE'        => 'Vyberte Demo data',
	'LBL_DBCONF_HOST_NAME'				=> 'Server',
	'LBL_DBCONF_HOST_INSTANCE'			=> 'Hostitel',
	'LBL_DBCONF_HOST_PORT'				=> 'Port',
    'LBL_DBCONF_SSL_ENABLED'            => 'Povolit připojení SSL',
	'LBL_DBCONF_INSTRUCTIONS'			=> 'Prosím, zadejte své informace o konfiguraci databáze níže. Pokud si nejste jisti, co vyplnit, doporučujeme použít výchozí hodnoty.',
	'LBL_DBCONF_MB_DEMO_DATA'			=> 'Použít multibajtový text v demo datech?',
    'LBL_DBCONFIG_MSG2'                 => 'Název webového serveru nebo stanice (host), na které je databáze umístěna (např. localhost nebo www.mydomain.com):',
    'LBL_DBCONFIG_MSG3'                 => 'Název databáze, který obsahuje data pro instanci Sugaru je připraven k instalaci:',
    'LBL_DBCONFIG_B_MSG1'               => 'Uživatelské jméno a heslo administrátora databáze, který může vytvářet databázové tabulky, uživatele a který může zapisovat do databáze je nezbytné vytvořit databázi Sugar.',
    'LBL_DBCONFIG_SECURITY'             => 'Z bezpečnostních důvodů, zadejte unikátního uživatele pro připojení k Sugar databázi. Tento uživatel musí mít právo zapisovat číst a aktualizovat data v Sugar databázi, která bude vytvořena. Tento uživatel může být definován jako databázový správce výše, nebo můžete vytvořit nového uživatele.',
    'LBL_DBCONFIG_AUTO_DD'              => 'Udělej to za mne',
    'LBL_DBCONFIG_PROVIDE_DD'           => 'Vložte existujícího uživatele',
    'LBL_DBCONFIG_CREATE_DD'            => 'Definujte uživatele, který se má vytvořit',
    'LBL_DBCONFIG_SAME_DD'              => 'Stejný jako Admin',
	//'LBL_DBCONF_I18NFIX'              => 'Apply database column expansion for varchar and char types (up to 255) for multi-byte data?',
    'LBL_FTS'                           => 'Full-textové vyhledávání',
    'LBL_FTS_INSTALLED'                 => 'Nainstalováno',
    'LBL_FTS_INSTALLED_ERR1'            => 'Full-textové vyhledávání není nainstalováno.',
    'LBL_FTS_INSTALLED_ERR2'            => 'Můžete pokračovat v instalaci, ale nemůžete používat full-textové vyhledávání. Nahlédněte do databázové příručky, nebo kontaktujte Vašeho administrátora.',
	'LBL_DBCONF_PRIV_PASS'				=> 'Heslo privilegovaného uživatele databáze',
	'LBL_DBCONF_PRIV_USER_2'			=> 'Databázový účet uvedený výše je privilegovaný uživatel?',
	'LBL_DBCONF_PRIV_USER_DIRECTIONS'	=> 'Tento privilegovaný db uživatel musí mát právo vytvořit databázi, vymazat / vytvořit tabulky a vytvořit uživatele. Bude sloužit pouze k vykonání těchto úkolů na dobu nezbytně nutnou během instalačního procesu. Můžete též použít stejného uživatele jako výše, pokud má patřičná oprávnění.',
	'LBL_DBCONF_PRIV_USER'				=> 'Privilegovaný uživatel databáze',
	'LBL_DBCONF_TITLE'					=> 'Konfigurace databáze',
    'LBL_DBCONF_TITLE_NAME'             => 'Poskytnout Název databáze',
    'LBL_DBCONF_TITLE_USER_INFO'        => 'Informace o databázovém uživateli',
	'LBL_DISABLED_DESCRIPTION_2'		=> 'Poté, co byla tato změna provedena, můžete kliknout na tlačítko "Start" níže pro zahájení instalace. Po dokončení instalace bude změněna konfigurační hodnota "installer_locked" na "true".',
	'LBL_DISABLED_DESCRIPTION'			=> 'Instalační program již jednou běží. Z důvodu bezpečnostního opatření bylo zakázáno instalaci spustit podruhé. Pokud jste si naprosto jisti, že chcete instalaci spustit znovu, jděte do config.php souboru a najděte proměnnou nazvanou "installer_locked" a nastavte ji na "false". Řádek by měl vypadat takto:',
	'LBL_DISABLED_HELP_1'				=> 'Pro pomoc při instalaci, navštivte SugarCRM',
    'LBL_DISABLED_HELP_LNK'               => 'http://www.sugarcrm.com/forums/',
	'LBL_DISABLED_HELP_2'				=> 'diskuzní fóra',
	'LBL_DISABLED_TITLE_2'				=> 'Instalace SugarCRM byla zakázána',
	'LBL_DISABLED_TITLE'				=> 'Instalace SugarCRM zakázána',
	'LBL_EMAIL_CHARSET_DESC'			=> 'Nejpoužívanější sada používaná ve vašem prostředí',
	'LBL_EMAIL_CHARSET_TITLE'			=> 'Nastavení odchozího emailu',
    'LBL_EMAIL_CHARSET_CONF'            => 'Znaková sada pro odchozí zprávy',
	'LBL_HELP'							=> 'Nápověda',
    'LBL_INSTALL'                       => 'Instal',
    'LBL_INSTALL_TYPE_TITLE'            => 'Možnosti instalace',
    'LBL_INSTALL_TYPE_SUBTITLE'         => 'Vyber typ instalace',
    'LBL_INSTALL_TYPE_TYPICAL'          => 'Typická instalace',
    'LBL_INSTALL_TYPE_CUSTOM'           => 'Vlastní instalace',
    'LBL_INSTALL_TYPE_MSG1'             => 'Klíč je nutný pro možnost využití základních funkcí, ale to není nutný při instalaci. Klíč můžete zadat až po instalaci.',
    'LBL_INSTALL_TYPE_MSG2'             => 'Jsou vyžadovány minimální informace o instalaci. Platí především pro nové uživatele.',
    'LBL_INSTALL_TYPE_MSG3'             => 'Poskytuje další možnosti nastavení během instalace. Většina z těchto možností je také k dispozici po instalaci v administrátorském rozhraní. Doporučeno pro pokročilé uživatele.',
	'LBL_LANG_1'						=> 'Chcete-li používat jiný jazyk než je výchozí  (US-angličtina), můžete si nyní nahrát a nainstalovat jazykový balíček. Budete mít možnost nahrát a nainstalovat jazykové balíčky později přímo v aplikaci Sugar. Pokud chcete tento krok přeskočit, klepněte na tlačítko Další.',
	'LBL_LANG_BUTTON_COMMIT'			=> 'Instal',
	'LBL_LANG_BUTTON_REMOVE'			=> 'Odstranit',
	'LBL_LANG_BUTTON_UNINSTALL'			=> 'Odinstalovat',
	'LBL_LANG_BUTTON_UPLOAD'			=> 'Nahrát',
	'LBL_LANG_NO_PACKS'					=> 'Žádný',
	'LBL_LANG_PACK_INSTALLED'			=> 'Byly nainstalovány tyto jazykové balíčky:',
	'LBL_LANG_PACK_READY'				=> 'Následující jazykové balíčky jsou připraveny k instalaci:',
	'LBL_LANG_SUCCESS'					=> 'Jazykový balíček byl úspěšně nahrán.',
	'LBL_LANG_TITLE'			   		=> 'Jazykový balíček',
    'LBL_LAUNCHING_SILENT_INSTALL'     => 'Instalace Sugar nyní. To může trvat až několik minut.',
	'LBL_LANG_UPLOAD'					=> 'Nahrát jazykový balíček',
	'LBL_LICENSE_ACCEPTANCE'			=> 'Akceptace licence',
    'LBL_LICENSE_CHECKING'              => 'Kontrola kompatibility systému.',
    'LBL_LICENSE_CHKENV_HEADER'         => 'Kontrola prostředí',
    'LBL_LICENSE_CHKDB_HEADER'          => 'Ověřování DB, pověření FTS.',
    'LBL_LICENSE_CHECK_PASSED'          => 'Kompatibilita systému byla úspěšně ověřena.',
    'LBL_LICENSE_REDIRECT'              => 'Přesměrování v',
	'LBL_LICENSE_DIRECTIONS'			=> 'Pokud máte licenční informace, zadejte je do políčka níže.',
	'LBL_LICENSE_DOWNLOAD_KEY'			=> 'Zadejte klíč pro stažení',
	'LBL_LICENSE_EXPIRY'				=> 'Expirace',
	'LBL_LICENSE_I_ACCEPT'				=> 'Přijmout',
	'LBL_LICENSE_NUM_USERS'				=> 'Počet uživatelů',
	'LBL_LICENSE_PRINTABLE'				=> 'Tisknutelný náhled',
    'LBL_PRINT_SUMM'                    => 'Vytisknout souhrn',
	'LBL_LICENSE_TITLE_2'				=> 'License SugarCRM',
	'LBL_LICENSE_TITLE'					=> 'Licenční informace:',
	'LBL_LICENSE_USERS'					=> 'Licencovaných uživatelů',

	'LBL_LOCALE_CURRENCY'				=> 'Nastavení měny',
	'LBL_LOCALE_CURR_DEFAULT'			=> 'Výchozí měna',
	'LBL_LOCALE_CURR_SYMBOL'			=> 'Symbol měny',
	'LBL_LOCALE_CURR_ISO'				=> 'Symbol měny(ISO 4217):',
	'LBL_LOCALE_CURR_1000S'				=> 'Oddělovač tisíců (000)',
	'LBL_LOCALE_CURR_DECIMAL'			=> 'Desetinný oddělovač',
	'LBL_LOCALE_CURR_EXAMPLE'			=> 'Příklad',
	'LBL_LOCALE_CURR_SIG_DIGITS'		=> 'Významné číslice',
	'LBL_LOCALE_DATEF'					=> 'Výchozí format datumu',
	'LBL_LOCALE_DESC'					=> 'Uvedené lokální nastavení se projeví v rámci célého SugarCRM.',
	'LBL_LOCALE_EXPORT'					=> 'Znaková sada pro Import a Export<br />(Email, .csv, vCard, PDF, import dat)',
	'LBL_LOCALE_EXPORT_DELIMITER'		=> 'Oddělovač Export (. csv)',
	'LBL_LOCALE_EXPORT_TITLE'			=> 'Nastavení Import/Export',
	'LBL_LOCALE_LANG'					=> 'Výchozí jazyk',
	'LBL_LOCALE_NAMEF'					=> 'Výchozí formát jména',
	'LBL_LOCALE_NAMEF_DESC'				=> 's = oslovení<br />f = jméno<br />l = příjmení',
	'LBL_LOCALE_NAME_FIRST'				=> 'Jan',
	'LBL_LOCALE_NAME_LAST'				=> 'Novák',
	'LBL_LOCALE_NAME_SALUTATION'		=> 'Dr.',
	'LBL_LOCALE_TIMEF'					=> 'Výchozí formát času',
	'LBL_LOCALE_TITLE'					=> 'Regionální nastavení',
    'LBL_CUSTOMIZE_LOCALE'              => 'Upravit regionální nastavení',
	'LBL_LOCALE_UI'						=> 'Uživatelské rozhraní',

	'LBL_ML_ACTION'						=> 'Akce',
	'LBL_ML_DESCRIPTION'				=> 'Popis',
	'LBL_ML_INSTALLED'					=> 'Datum Instalace',
	'LBL_ML_NAME'						=> 'Název',
	'LBL_ML_PUBLISHED'					=> 'Datum uvolnění',
	'LBL_ML_TYPE'						=> 'Typ',
	'LBL_ML_UNINSTALLABLE'				=> 'Lze odinstalovat',
	'LBL_ML_VERSION'					=> 'Verze',
	'LBL_MSSQL'							=> 'SQL Server',
	'LBL_MSSQL_SQLSRV'				    => 'SQL Server (Microsoft SQL Server Driver for PHP)',
	'LBL_MYSQL'							=> 'MySQL',
    'LBL_MYSQLI'						=> 'MySQL (mysqli rozšíření)',
	'LBL_IBM_DB2'						=> 'IBM DB2',
	'LBL_NEXT'							=> 'Další',
	'LBL_NO'							=> 'Ne',
    'LBL_ORACLE'						=> 'Oracle',
	'LBL_PERFORM_ADMIN_PASSWORD'		=> 'Nastavuji heslo administratora (site admin)',
	'LBL_PERFORM_AUDIT_TABLE'			=> 'tabulka auditu',
	'LBL_PERFORM_CONFIG_PHP'			=> 'Vytvářím konfigurační soubor pro SugarCRM.',
	'LBL_PERFORM_CREATE_DB_1'			=> 'Vytvářím databázi.',
	'LBL_PERFORM_CREATE_DB_2'			=> 'v',
	'LBL_PERFORM_CREATE_DB_USER'		=> 'Vytvářím databázového uživatele a heslo.',
	'LBL_PERFORM_CREATE_DEFAULT'		=> 'Vytvoření výchozích dat Sugar',
	'LBL_PERFORM_CREATE_LOCALHOST'		=> 'Vytvoření uživatelského jména a hesla databáze pro localhost ...',
	'LBL_PERFORM_CREATE_RELATIONSHIPS'	=> 'Vytváření vazebních tabulek Sugaru',
	'LBL_PERFORM_CREATING'				=> 'vytvářím /',
	'LBL_PERFORM_DEFAULT_REPORTS'		=> 'Vytvořit výchozí reporty',
	'LBL_PERFORM_DEFAULT_SCHEDULER'		=> 'Vytváření výchozích úloh plánovače',
	'LBL_PERFORM_DEFAULT_SETTINGS'		=> 'Vložení výchozích nastavení',
	'LBL_PERFORM_DEFAULT_USERS'			=> 'Vytvoření výchozích uživatelů',
	'LBL_PERFORM_DEMO_DATA'				=> 'Naplnění databázové tabulky s demo daty (toto může chvíli trvat)',
	'LBL_PERFORM_DONE'					=> 'Hotovo.',
	'LBL_PERFORM_DROPPING'				=> 'mažu /',
	'LBL_PERFORM_FINISH'				=> 'Dokončit',
	'LBL_PERFORM_LICENSE_SETTINGS'		=> 'Aktualizace informací o licenci',
	'LBL_PERFORM_OUTRO_1'				=> 'Nastavení Sugar',
	'LBL_PERFORM_OUTRO_2'				=> 'nyní je kompletní!',
	'LBL_PERFORM_OUTRO_3'				=> 'Celkový čas"',
	'LBL_PERFORM_OUTRO_4'				=> 'vteřin.',
	'LBL_PERFORM_OUTRO_5'				=> 'Přibližná použitá pamět:',
	'LBL_PERFORM_OUTRO_6'				=> 'bytů.',
	'LBL_PERFORM_OUTRO_7'				=> 'Váš systém je nyní nainstalována a nakonfigurována k použití.',
	'LBL_PERFORM_REL_META'				=> 'vazební metadata',
	'LBL_PERFORM_SUCCESS'				=> 'Úspěch!',
	'LBL_PERFORM_TABLES'				=> 'Vytváření tabulek, audit tabulek a relačních metadat',
	'LBL_PERFORM_TITLE'					=> 'Provést instalaci',
	'LBL_PRINT'							=> 'Tisk',
	'LBL_REG_CONF_1'					=> 'Prosím, vyplňte krátký formulář níže pro příjem produktu oznámení, školení novinky, speciální nabídky a speciální události pozvánky od SugarCRM. Nechceme prodávat, pronajímat, sdílet nebo jinak distribuovat informace shromážděné zde třetím stranám.',
	'LBL_REG_CONF_2'					=> 'Vaše jméno a e-mailová adresa jsou požadované pole pouze pro registraci. Všechny ostatní položky jsou nepovinné, ale velmi užitečné. Nechceme prodávat, pronajímat, sdílet nebo jinak distribuovat informace zde shromážděné třetím stranám.',
	'LBL_REG_CONF_3'					=> 'Děkujeme za registraci. Klikněte na tlačítko Dokončit k přihlášení do SugarCRM. Budete se muset přihlásit poprvé pomocí uživatelského jména "admin" a hesla, které jste zadali v kroku 2.',
	'LBL_REG_TITLE'						=> 'Registrace',
    'LBL_REG_NO_THANKS'                 => 'Ne děkuji',
    'LBL_REG_SKIP_THIS_STEP'            => 'Přeskočit tento krok',
	'LBL_REQUIRED'						=> 'Požadovaná položka',

    'LBL_SITECFG_ADMIN_Name'            => 'Administrator aplikace Sugar',
	'LBL_SITECFG_ADMIN_PASS_2'			=> 'Zadat znovu heslo Administratora Sugar',
	'LBL_SITECFG_ADMIN_PASS_WARN'		=> 'Upozornění: Toto přepíše admin heslo z předchozí instalace.',
	'LBL_SITECFG_ADMIN_PASS'			=> 'Heslo Sugar Admin',
	'LBL_SITECFG_APP_ID'				=> 'ID aplikace',
	'LBL_SITECFG_CUSTOM_ID_DIRECTIONS'	=> 'Je-li vybrána, je nutné zadat ID aplikace k přepsání automaticky generovaného ID. ID zajišťuje, aktuální přihlášení v jedné z Sugar instancí nebudou použity v jiných Sugar instancích. Používáte-li cluster Sugar instalací, všichni musí sdílet stejné ID aplikace.',
	'LBL_SITECFG_CUSTOM_ID'				=> 'Poskytněte vlastní Application ID',
	'LBL_SITECFG_CUSTOM_LOG_DIRECTIONS'	=> 'Je-li vybráno, je třeba zadat log adresář, který přepíše výchozí složku pro Sugar log. Bez ohledu na to, kde se nachází log soubor, bude přístup k ní přes webový prohlížeč omezen přes .htaccess přesměrování.',
	'LBL_SITECFG_CUSTOM_LOG'			=> 'Použití vlastního adresáře protokolů',
	'LBL_SITECFG_CUSTOM_SESSION_DIRECTIONS'	=> 'Je-li vybráno, je nutné zajistit zabezpečenou složku pro ukládání Sugar informací. Toto je z důvodu, aby se přihlášení neblokovaly na sdílených servererch.',
	'LBL_SITECFG_CUSTOM_SESSION'		=> 'Použít vlastní Session složku pro Sugar',
	'LBL_SITECFG_DIRECTIONS'			=> 'Prosím, zadejte svojí konfiguraci níže. Pokud si nejste jisti, doporučujeme použít výchozí hodnoty.',
	'LBL_SITECFG_FIX_ERRORS'			=> 'Prosím opravte následující chyby dřív, než budete pokračovat:',
	'LBL_SITECFG_LOG_DIR'				=> 'Složka s log soubory',
	'LBL_SITECFG_SESSION_PATH'			=> 'Složka s session soubory (musí být zapisovatelná)',
	'LBL_SITECFG_SITE_SECURITY'			=> 'Zvolte možnosti zabezpečení',
	'LBL_SITECFG_SUGAR_UP_DIRECTIONS'	=> 'Pokud je zvoleno, bude systém pravidelně kontrolovat aktualizované verze aplikace.',
	'LBL_SITECFG_SUGAR_UP'				=> 'Automaticky kontrolovat aktualizace?',
	'LBL_SITECFG_SUGAR_UPDATES'			=> 'Sugar aktualizace config',
	'LBL_SITECFG_TITLE'					=> 'Konfigurace stránky',
    'LBL_SITECFG_TITLE2'                => 'Identifikace administrátora',
    'LBL_SITECFG_SECURITY_TITLE'        => 'Bezpečnost stránky',
	'LBL_SITECFG_URL'					=> 'URL Sugar instalace',
	'LBL_SITECFG_USE_DEFAULTS'			=> 'Použít výchozí nastavení?',
	'LBL_SITECFG_ANONSTATS'             => 'Odesílat anonymní statistiky?',
	'LBL_SITECFG_ANONSTATS_DIRECTIONS'  => 'Je-li zvoleno, bude Sugar zasílat <b> anonymní </ b> statistiky o vaší instalaci do SugarCRM Inc pokaždé, když váš systém kontroluje nové verze. Tato informace nám pomůže lépe pochopit, jak se používá aplikace a tím pádem vylepšit produkt.',
    'LBL_SITECFG_URL_MSG'               => 'Zadejte adresu URL, která bude použita pro přístup k Sugaru po instalaci. URL bude také použiat jako výchozí URL pro aplikaci. URL by měla zahrnovat webový server nebo jméno stroje nebo IP adresu.',
    'LBL_SITECFG_SYS_NAME_MSG'          => 'Zadejte název pro váš systém. Tento název se zobrazí v liště prohlížeče, když uživatel navštíví aplikaci Sugar.',
    'LBL_SITECFG_PASSWORD_MSG'          => 'Po instalaci, budete muset použít Sugar admin uživatele (výchozí uživatelské jméno = admin) pro přihlášení se do Sugaru. Zadejte heslo pro tohoto administrátora. Toto heslo můžete změnit po prvním přihlášení. Můžete také zadat jiné uživatelské jméno jako výchozího uživatele.',
    'LBL_SITECFG_COLLATION_MSG'         => 'Vyberte řazení (třídění) nastavení pro váš systém. Toto nastavení vytvoří tabulky se zvláštním jazykem, který používáte. V případě, že váš jazyk nevyžaduje speciální nastavení, použijte výchozí hodnotu.',
    'LBL_SPRITE_SUPPORT'                => 'Podpora obrázků',
	'LBL_SYSTEM_CREDS'                  => 'Pověření systému',
    'LBL_SYSTEM_ENV'                    => 'Systémové prostředí',
	'LBL_START'							=> 'Začátek',
    'LBL_SHOW_PASS'                     => 'Ukaž hesla',
    'LBL_HIDE_PASS'                     => 'Skryj hesla',
    'LBL_HIDDEN'                        => 'Skryté',
//	'LBL_NO_THANKS'						=> 'Continue to installer',
	'LBL_CHOOSE_LANG'					=> 'Vyber jazyk',
	'LBL_STEP'							=> 'Krok',
	'LBL_TITLE_WELCOME'					=> 'Vítejte v SugarCRM',
	'LBL_WELCOME_1'						=> 'Tento instalační program vytvoří SugarCRM databázové tabulky a nastaví proměnné, které potřebujete ke spuštění. Celý proces by měl trvat asi deset minut.',
    //welcome page variables
    'LBL_TITLE_ARE_YOU_READY'            => 'Připraven na instalaci',
    'REQUIRED_SYS_COMP' => 'Požadované systémové komponenty',
    'REQUIRED_SYS_COMP_MSG' =>
                    'Než začnete, ujistěte se, že máte podporované verze následujícího systémových komponent<br /><br />                       <ul><br />                       <li> Databáze (Příklady: MySQL, SQL Server, Oracle, DB2) </ li><br />                       <li> Web Server (Apache, IIS) </ li><br />                       </ ul><br />                       Podívejte se do tabulky kompatibility v poznámkách k vydání pro<br />                       kompatibilní součásti systému pro verzi Sugaru, kterou instalujete. <br>',
    'REQUIRED_SYS_CHK' => 'Výchozí kontrola systému',
    'REQUIRED_SYS_CHK_MSG' =>
                    'Když začne proces instalace, bude provedena kontrola souborů na webovém serveru, aby se zjistilo, zda-li je systém v pořádku nakonfigurován a obsahuje všechny svoje součástí ke správnému nainstalování.<br><br />                      Systém kontroluje následující: <br><br />                       <ul><br />                       <li><b>PHP verze</b> - musí být v souladu<br />                       s aplikací</ li><br />                                         <li><b>Proměnné Sessions</b> - zda-li pracují správně </li><br />                                             <li><b>MB Strings</b> - musí být nainstalované a povolené v php.ini </li><br /><br />                       <li><b>Podpora databáze</b> - musí existovat pro MySQL, SQL<br />                       Server, Oracle nebo DB2 </ li><br /><br />                       <li><b>config.php</b> - musí existovat a musí být zapisovatelný</ li><br /><li> následující Sugar soubory musí být zapisovatelné: <ul><li><b>/custom</li><br /><li>/cache </li><br /><li>/modules </li><br /><li>/upload </b> </li> </ul> </li> </ul><br />                                   Pokud kontrola selže, instalace nebude pokračovat. Zobrazí se chybová zpráva, proč kontrola nebyla úspěšná.<br />                                   Po provedení nezbytných změn, můžete provést kontrolu znovu a pokračovat v instalaci.<br>',
    'REQUIRED_INSTALLTYPE' => 'Typická nebo vlastní instalace',
    'REQUIRED_INSTALLTYPE_MSG' =>
                    "Po dokončení systémové kontroly, můžete zvolit typickou nebo vlastní instalaci<br><br><br />                      Pro oba typy instalace by jste měli vědět následující:<br><br />                      <ul><br />                      <li><b>Typ databáze</b>, která bude uchovávat Sugar data<ul><li>Typy kompatibilních databází: MySQL, MS SQL Server, Oracle, DB2.<br><br></li></ul></li><br />                      <li><b>Jméno webového serveru</b> nebo hostitele, kde se nachází databáze<br />                      <ul><li>Může to být <i>localhost</i>, pokud je databáze na místním počítači nebo na stejném serveru, kde se nachází souborový systém SugarCRM.<br><br></li></ul></li><br />                      <li><b>Název databáze</b>, kterou chcete využít k uložení Sugar dat.</li><br />                        <ul><br />                          <li>Můžete také využít již existující databázi. Pokud zvolíte tuto variantu, existujicí tabulky v databázi budou vymazány.</li><br />                          <li>Pokud databáze ještě neexistuje, bude vytvořena nová se jménem, které jste zvolil.<br><br></li><br />                        </ul><br />                      <li><b>Jméno a heslo databázového uživatele</b><ul><li>Databázový uživatel musí umět vytvořit tabulky a uživatele a zapsat je do databáze.</li><li>Možná budete muset kontaktovat Vašeho databázového správce, pokud se databáze nenachází na místním stroji, nebo nejste vy databázový správce.<br><br></ul></li></li><br />                      <li><b>Jméno a heslo uživatele k Sugar databázi</b><br />                      </li><br />                        <ul><br />                          <li>Uživatel může být buď databázový správce, nebo lze zvolit jiného, již existujícího uživatele.</li><br />                          <li>Pokud chcete vytvořit nového uživatele pro tyto účely, musíte definovat uživ. jméno a heslo během instalace a uživatel bude vytvořen.</li><br />                        </ul></ul><p><br /><br />                      Pro <b>vlastní</b> instalaci by jste měl vědět následující:<br><br />                      <ul><br />                      <li><b>URL SugarCRM</b>, na kterou bude Sugar instalován.<br />                      Tato URL je buď název webového serveru, název stroje nebo IP adresa.<br><br></li><br />                                  <li>[Volitelné] <b>Cesta k Session složce</b> Pokud si přejete používat vlastní Session složku.<br><br></li><br />                                  <li>[Volitelné] <b>Cesta k vlastní log složce</b> Pokud si přejete přepsat výchozí složku pro logy SugarCRM.<br><br></li><br />                                  <li>[Volitelné] <b>ID aplikace</b> Pokud si přejete přepsat auto-generované ID pro generování sessions.<br><br></li><br />                                  <li><b>Znaková sada</b> obecně známá jako lokální nastavení.<br><br></li></ul><br />                                  Pro více informací použijte instalační příručku.",
    'LBL_WELCOME_PLEASE_READ_BELOW' => 'Přečtěte si prosím následující důležité informace před tím než budete pokračovat v instalaci. Informace vám pomohou určit, zda jste či nejste připraveni nyní aplikaci nainstalovat.',


	'LBL_WELCOME_2'						=> 'Dokumentaci k instalaci naleznete na <a href="http://www.sugarcrm.com/crm/installation" target="_blank">Sugar Wiki</a>.  <BR><BR> Chcete-li kontaktovat technika podpory SugarCRM z důvodu pomoci s instalací, přihlaste se na <a target="_blank" href="http://support.sugarcrm.com">SugarCRM Support Portal</a> a odešlete případ podpory.',
	'LBL_WELCOME_CHOOSE_LANGUAGE'		=> 'Vyber jazyk',
	'LBL_WELCOME_SETUP_WIZARD'			=> 'Průvodce nastavením',
	'LBL_WELCOME_TITLE_WELCOME'			=> 'Vítejte v SugarCRM',
	'LBL_WELCOME_TITLE'					=> 'SugarCRM průvodce instalací',
	'LBL_WIZARD_TITLE'					=> 'Uživatelský průvodce',
	'LBL_YES'							=> 'Ano',
    'LBL_YES_MULTI'                     => 'Ano (Multibyte)',
	// OOTB Scheduler Job Names:
	'LBL_OOTB_WORKFLOW'		=> 'Zpracování úkolů workflow',
	'LBL_OOTB_REPORTS'		=> 'Spustit Report Generation Scheduled Tasks --geneorvání reportů dle naplánovancýh úkolů--',
	'LBL_OOTB_IE'			=> 'Kontrola poštovních schránek pro příchozí poštu',
	'LBL_OOTB_BOUNCE'		=> 'Spouštět noční zpracování vrácených e-mailů z kampaní',
    'LBL_OOTB_CAMPAIGN'		=> 'Spouštět noční hromadné rozesílání e-mailových kampaní',
	'LBL_OOTB_PRUNE'		=> 'Provést údržbu databáze každého prvního v měsíci',
    'LBL_OOTB_TRACKER'		=> 'omezení uživatelské historie k 1. v měsíci',
    'LBL_OOTB_SEND_EMAIL_REMINDERS' => 'Spustit oznamování připomenutí e-mailem',
    'LBL_UPDATE_TRACKER_SESSIONS' => 'Aktualizovat tabulku tracker_sessions',
    'LBL_OOTB_CLEANUP_QUEUE' => 'Vyčistit frontu úloh',


    'LBL_FTS_TABLE_TITLE'     => 'Poskytuje nastavení full-textového vyhledávání',
    'LBL_FTS_HOST'     => 'Hostitel',
    'LBL_FTS_PORT'     => 'Port',
    'LBL_FTS_TYPE'     => 'Typ vyhledávače',
    'LBL_FTS_HELP'      => 'Chcete-li povolit fulltextové vyhledávání, vyberte vyhledávač a zadejte hostitele a port, kde je umístěn. Sugar obsahuje vestavěnou podporu pro elasticsearch vyhledávač.',
    'LBL_FTS_REQUIRED'    => 'Elastic Search je požadován.',
    'LBL_FTS_CONN_ERROR'    => 'Nelze se připojit k serveru s fulltextové vyhledáváním, zkontrolujte své nastavení.',
    'LBL_FTS_NO_VERSION_AVAILABLE'    => 'Není k dispozici žádná verze serveru s fulltextovým vyhledáváním, zkontrolujte své nastavení.',
    'LBL_FTS_UNSUPPORTED_VERSION'    => 'Zjištěna nepodporovaná verze Elasticsearch. Použijte verzi: %s',

    'LBL_PATCHES_TITLE'     => 'Instalovat poslední patche',
    'LBL_MODULE_TITLE'      => 'Instalovat jazykovou mutaci',
    'LBL_PATCH_1'           => 'Pokud byste chtěli, tento krok přeskočit, klepněte na tlačítko Další.',
    'LBL_PATCH_TITLE'       => 'Systémová záplata',
    'LBL_PATCH_READY'       => 'Následující aktualizace jsou připraveny k instalaci:',
	'LBL_SESSION_ERR_DESCRIPTION'		=> "SugarCRM využívá PHP Sessions k ukládání informací v momentě, kdy jste připojen k webovému serveru. Vaše PHP instalace nemá Sessions správně nakonfigurovány.<br /><br>V bežné konfiguraci se stává, že <b>\"session.save_path\"</ b> ukazují na špatný adresář.<br><br /><br>Prosíme opravte Vaší <a target=_new href=\"http://us2.php.net/manual/en/ref.session.php\">PHP konfiguraci</ a> v souboru php.ini.",
	'LBL_SESSION_ERR_TITLE'				=> 'Chyba konfigurace PHP Sessions.',
	'LBL_SYSTEM_NAME'=>'Název systému',
    'LBL_COLLATION' => 'Nastavení kódování',
	'LBL_REQUIRED_SYSTEM_NAME'=>'Poskytuje název SugarCRM systému',
	'LBL_PATCH_UPLOAD' => 'Vyberete soubor z vašeho počítače',
	'LBL_BACKWARD_COMPATIBILITY_ON' => 'Mód zpětné kompatibility PHP je zapnut. Nastavte zend.ze1_compatibility_mode na Off pro pokračování.',

    'meeting_notification_email' => array(
        'name' => 'Zasílání e-mailů s oznámením o schůzce',
        'subject' => 'Schůzka SugarCRM – $event_name ',
        'description' => 'Tato šablona se používá, když systém zasílá uživateli oznámení o schůzce.',
        'body' => '<div>
	<p>Komu: $assigned_user</p>

	<p>$assigned_by_user vás pozval(a) na schůzku</p>

	<p>Předmět: $event_name<br/>
	Datum zahájení: $start_date<br/>
	Datum ukončení: $end_date</p>

	<p>Popis: $description</p>

	<p>Přijmout tuto schůzku:<br/>
	<<a href="$accept_link">$accept_link</a>></p>
	<p>Nezávazně přijmout tuto schůzku:<br/>
	<<a href="$tentative_link">$tentative_link</a>></p>
	<p>Odmítnout tuto schůzku:<br/>
	<<a href="$decline_link">$decline_link</a>></p>
</div>',
        'txt_body' =>
            'Komu: $assigned_user

$assigned_by_user vás pozval(a) na schůzku

Předmět: $event_name
Datum zahájení: $start_date
Datum ukončení: $end_date

Popis: $description

Přijmout tuto schůzku:
<$accept_link>

Nezávazně přijmout tuto schůzku
<$tentative_link>

Odmítnout tuto schůzku
<$decline_link>',
    ),

    'call_notification_email' => array(
        'name' => 'Zasílání e-mailů s oznámením o hovoru',
        'subject' => 'Hovor SugarCRM – $event_name ',
        'description' => 'Tato šablona se používá, když systém zasílá uživateli oznámení o hovoru.',
        'body' => '<div>
	<p>Komu: $assigned_user</p>

	<p>$assigned_by_user vás pozval(a) na hovor</p>

	<p>Předmět: $event_name<br/>
	Datum zahájení: $start_date<br/>
	Doba trvání: $hoursh, $minutesm</p>

	<p>Popis: $description</p>

	<p>Přijmout tento hovor:<br/>
	<<a href="$accept_link">$accept_link</a>></p>
	<p>Nezávazně přijmout tento hovor:<br/>
	<<a href="$tentative_link">$tentative_link</a>></p>
	<p>Odmítnout tento hovor:<br/>
	<<a href="$decline_link">$decline_link</a>></p>
</div>',
        'txt_body' =>
            'Komu: $assigned_user

$assigned_by_user vás pozval(a) na hovor

Předmět: $event_name
Datum zahájení: $start_date
Doba trvání: $hoursh, $minutesm

Popis: $description

Přijmout tento hovor:
<$accept_link>

Nezávazně přijmout tento hovor
<$tentative_link>

Odmítnout tento hovor
<$decline_link>',
    ),

    'assigned_notification_email' => array(
        'name' => 'Zasílání e-mailů s oznámením o přiřazení',
        'subject' => 'SugarCRM – přiřazen $module_name ',
        'description' => 'Tato šablona se používá, když systém zasílá uživateli přiřazení úkolu.',
        'body' => '<div>
<p>$assigned_by_user přiřadil(a) &nbsp;$module_name k &nbsp;$assigned_user.</p>

<p>Tento &nbsp;$module_name si můžete prohlédnout zde:<br/>
	<<a href="$module_link">$module_link</a>></p>
</div>',
        'txt_body' =>
            '$assigned_by_user přiřadil(a) $module_name k $assigned_user.

Tento $module_name si můžete prohlédnout zde:
<$module_link>',
    ),

    'scheduled_report_email' => array(
        'name' => 'Zasílání e-mailů s naplánovanou sestavou',
        'subject' => 'Naplánovaná sestava: $report_name s platností k $report_time',
        'description' => 'Tato šablona se používá, když systém zasílá uživateli naplánovanou sestavu.',
        'body' => '<div>
<p>Dobrý den $assigned_user,</p>
<p>zasíláme připojenou automaticky generovanou sestavu, která pro vás byla naplánována.</p>
<p>Název sestavy: $report_name</p>
<p>Datum a čas spuštění sestavy: $report_time</p>
</div>',
        'txt_body' =>
            'Dobrý den $assigned_user,

zasíláme připojenou automaticky generovanou sestavu, která pro vás byla naplánována.

Název sestavy: $report_name

Datum a čas spuštění sestavy: $report_time',
    ),

    'comment_log_mention_email' => [
        'name' => 'E-mailové oznámení protokolu komentářů systému',
        'subject' => 'SugarCRM – $initiator_full_name se o vás zmínil(a) v $singular_module_name',
        'description' => 'Tato šablona se používá k zasílání e-mailových oznámení uživatelům, kteří byli označeni v sekci protokolu komentářů.',
        'body' =>
            '<div>
                <p>Byl(a) jste zmíněn(a) v protokolu komentářů následujícího záznamu:  <a href="$record_url">$record_name</a></p>
                <p>Chcete-li si komentář přečíst, přihlaste se prosím do systému Sugar.</p>
            </div>',
        'txt_body' =>
'Byl(a) jste zmíněn(a) v protokolu komentářů následujícího záznamu: $record_name
            Chcete-li si komentář přečíst, přihlaste se prosím do systému Sugar.',
    ],

    'advanced_password_new_account_email' => array(
        'subject' => 'Informace o novém účtu',
        'description' => 'Tato šablona se používá, když správce systému pošle nové heslo uživateli.',
        'body' => '<div><table border=\"0\" cellspacing=\"0\" cellpadding=\"0\" width="550" align=\"\&quot;\&quot;center\&quot;\&quot;\"><tbody><tr><td colspan=\"2\"><p>Zde je Vaše uživatelské jméno a dočasné heslo:</p><p>Uživatelské jméno: $contact_user_user_name </p><p>Heslo: $contact_user_user_hash </p><br><p>$config_site_url</p><br><p>Poté co se přihlásíte s heslem uvedeným výše, budete požádán o změnu hesla dle Vašeho uvážení</p>   </td>         </tr><tr><td colspan=\"2\"></td>         </tr> </tbody></table> </div>',
        'txt_body' =>
'Zde je Vaše uživatelské jméno a dočasné heslo:<br />Uživatelské jméno: $contact_user_user_name<br />Heslo: $contact_user_user_hash<br /><br />$config_site_url<br /><br />Poté co se přihlásíte s heslem uvedeným výše, budete požádán o změnu hesla dle Vašeho uvážení.',
        'name' => 'Systémem vytvořené heslo mailu',
        ),
    'advanced_password_forgot_password_email' => array(
        'subject' => 'Resetujte si vlastní heslo',
        'description' => "Tato šablona se využívá v momentě, kdy je uživateli obnoveno heslo.",
        'body' => '<div><table border=\"0\" cellspacing=\"0\" cellpadding=\"0\" width="550" align=\"center\"><tbody><tr><td colspan=\"2\"><p>Dne $contact_user_pwd_last_changed jste si vyžádal možnosti obnovení hesla.</p><p>Klikněte na odkaz níže pro obnovení Vašeho hesla:</p><p> $contact_user_link_guid </p>  </td>         </tr><tr><td colspan=\"2\"></td>         </tr> </tbody></table> </div>',
        'txt_body' =>
'Dne $contact_user_pwd_last_changed jste si vyžádal možnosti obnovení hesla.<br /><br />Klikněte na odkaz níže pro obnovení Vašeho hesla:<br /><br />$contact_user_link_guid',
        'name' => 'Poslat zapomenuté heslo',
        ),

'portal_forgot_password_email_link' => [
    'name' => 'E-mail o zapomenutí hesla na portál',
    'subject' => 'Resetujte heslo svého účtu',
    'description' => 'Tato šablona se používá k odeslání odkazu uživateli, na který má kliknout, aby resetoval heslo účtu uživatele portálu.',
    'body' => '<div><table border=\"0\" cellspacing=\"0\" cellpadding=\"0\" width="550" align=\"\&quot;\&quot;center\&quot;\&quot;\"><tbody><tr><td colspan=\"2\"><p>Nedávno jste požádal(a) o resetování hesla ke svému účtu. </p><p> Své heslo resetujete kliknutím na níže uvedený odkaz:</p><p> <a href="$portal_user_link_guid">$portal_user_link_guid</a> </p> </td> </tr><tr><td colspan=\"2\"></td> </tr> </tbody></table> </div>',
    'txt_body' =>
'
    Nedávno jste požádal(a) o resetování hesla ke svému účtu.

    Své heslo resetujete kliknutím na níže uvedený odkaz:

    $portal_user_link_guid',
],

    'portal_password_reset_confirmation_email' => [
        'name' => 'E-mail s potvrzením resetování hesla na portál',
        'subject' => 'Heslo vašeho účtu bylo resetováno',
        'description' => 'Tato šablona se používá k odeslání potvrzení uživateli portálu, že heslo k jeho účtu bylo resetováno.',
        'body' => '<div><table border=\"0\" cellspacing=\"0\" cellpadding=\"0\" width="550" align=\"\&quot;\&quot;center\&quot;\&quot;\"><tbody><tr><td colspan=\"2\"><p>Tento e-mail představuje potvrzení, že heslo vašeho účtu portálu bylo resetováno. </p><p>Na portál se přihlásíte pomocí níže uvedeného odkazu:</p><p> <a href="$portal_login_url">$portal_login_url</a> </p> </td> </tr><tr><td colspan=\"2\"></td> </tr> </tbody></table> </div>',
        'txt_body' =>
            '
    Tento e-mail představuje potvrzení, že heslo vašeho účtu portálu bylo resetováno.

    Na portál se přihlásíte pomocí níže uvedeného odkazu:

    $portal_login_url',
    ],
);
