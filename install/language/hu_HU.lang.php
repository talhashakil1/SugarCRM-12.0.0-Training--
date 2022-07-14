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
	'LBL_BASIC_SEARCH'					=> 'Egyszerű keresés',
	'LBL_ADVANCED_SEARCH'				=> 'Részletes keresés',
	'LBL_BASIC_TYPE'					=> 'Egyszerű',
	'LBL_ADVANCED_TYPE'					=> 'Összetett',
	'LBL_SYSOPTS_1'						=> 'Válasszon az alábbi rendszerbeállításokból!',
    'LBL_SYSOPTS_2'                     => 'Milyen típusú adatbázist szeretne használni a most telepített SugarCRM-hez?',
	'LBL_SYSOPTS_CONFIG'				=> 'Rendszer konfiguráció',
	'LBL_SYSOPTS_DB_TYPE'				=> '',
	'LBL_SYSOPTS_DB'					=> 'Adja meg az adatbázis típusát!',
    'LBL_SYSOPTS_DB_TITLE'              => 'Adatbázis típusa',
	'LBL_SYSOPTS_ERRS_TITLE'			=> 'Kérem, javítsa ki a következő hibákat a továbblépéshez:',
	'LBL_MAKE_DIRECTORY_WRITABLE'      => 'Kérem, tegye a következő könyvtárakat írhatóvá:',


    'ERR_DB_LOGIN_FAILURE_IBM_DB2'		=> 'A megadott adatbázis kiszolgáló, felhasználónév és / vagy jelszó érvénytelen, így adatbázis kapcsolat nem létesíthető. Kérem, adjon meg egy érvényes kiszolgálót, felhasználónevet és jelszót!',
    'ERR_DB_IBM_DB2_CONNECT'			=> 'A megadott adatbázis kiszolgáló, felhasználónév és / vagy jelszó érvénytelen, így adatbázis kapcsolat nem létesíthető. Kérem, adjon meg egy érvényes kiszolgálót, felhasználónevet és jelszót!',
    'ERR_DB_IBM_DB2_VERSION'			=> 'Az Ön DB2 verzióját (%s) nem támogatja a Sugar. Installálnia kell egy olyan verziót, amely megfelel a rendszer számára. Kérem, olvassa el a kompatibilitási mátrixot a kiadásokra vonatkozó jegyzetekben!',

	'LBL_SYSOPTS_DB_DIRECTIONS'			=> 'Rendelkeznie kell egy telepített és beállított Oracle kliens programmal az Oracle opció kiválasztásához.',
	'ERR_DB_LOGIN_FAILURE_OCI8'			=> 'A megadott adatbázis kiszolgáló, felhasználónév és / vagy jelszó érvénytelen, így adatbázis kapcsolat nem létesíthető. Kérem, adjon meg egy érvényes kiszolgálót, felhasználónevet és jelszót!',
	'ERR_DB_OCI8_CONNECT'				=> 'A megadott adatbázis kiszolgáló, felhasználónév és / vagy jelszó érvénytelen, így adatbázis kapcsolat nem létesíthető. Kérem, adjon meg egy érvényes kiszolgálót, felhasználónevet és jelszót!',
	'ERR_DB_OCI8_VERSION'				=> 'Az Ön Oracle verzióját (%s) nem támogatja a Sugar. Installálnia kell egy olyan verziót, amely megfelel a rendszer számára. Kérem, olvassa el a kompatibilitási mátrixot a kiadásokra vonatkozó jegyzetekben!',
    'LBL_DBCONFIG_ORACLE'               => 'Kérem, adja meg az adatbázis nevét! Ez lesz az alapértelmezett táblázat a hozzárendelt felhasználók számára.',
	// seed Ent Reports
	'LBL_Q'								=> 'Lehetőség lekérdezése',
	'LBL_Q1_DESC'						=> 'Lehetőségek típus szerint',
	'LBL_Q2_DESC'						=> 'Lehetőségek kliensek szerint',
	'LBL_R1'							=> '6 hónapos értékesítési folyamat jelentés',
	'LBL_R1_DESC'						=> 'Lehetőségek az elkövetkező 6 hónapban, típus szerint havi bontásban',
	'LBL_OPP'							=> 'Lehetőségek adatbeállítása',
	'LBL_OPP1_DESC'						=> 'Itt tudja megváltoztatni az egyéni lekérdezés beállításait',
	'LBL_OPP2_DESC'						=> 'Ez a lekérdezés a jelentés első lekérdezése alatt fog szerepelni',
    'ERR_DB_VERSION_FAILURE'			=> 'A rendszer nem tudja ellenőrizni az adatbázis verzióját.',

	'DEFAULT_CHARSET'					=> 'UTF-8',
    'ERR_ADMIN_USER_NAME_BLANK'         => 'Adja meg a felhasználónevet a Sugar admin felhasználóhoz!',
	'ERR_ADMIN_PASS_BLANK'				=> 'Adja meg a jelszót a SugarCRM admin felhasználóhoz!',

    'ERR_CHECKSYS'                      => 'A kompatibilitás ellenőrzése során a rendszer hibákat talált. A hibátlan telepítés érdekében kérem, tekintse át az alább felsorolt problémákat és orvosolja őket, majd ellenőrizze az elemeket újra, esetleg ismételje meg a telepítést!',
    'ERR_CHECKSYS_CALL_TIME'            => 'Hívásidő referencia engedélyezése bekapcsolva (kikapcsolása a php.ini fájlban történik)',

	'ERR_CHECKSYS_CURL'					=> 'Nem található: a Sugar Scheduler működése korlátozott. Az e-mail archiválás nem működik.',
    'ERR_CHECKSYS_IMAP'					=> 'Nincs találat: a bejövő emailek és az email kampányok megkövetelik az IMAP könyvtárak használatát. Egyik sem fog működni.',
	'ERR_CHECKSYS_MSSQL_MQGPC'			=> 'A Magic Quotes GPC nem kapcsolható be az MS SQL szerver használatakor.',
	'ERR_CHECKSYS_MEM_LIMIT_0'			=> 'Figyelmeztetés:',
	'ERR_CHECKSYS_MEM_LIMIT_1'			=> '(Állítsa be ezt',
	'ERR_CHECKSYS_MEM_LIMIT_2'			=> 'M vagy nagyobb értékre a php.ini fájlban)',
	'ERR_CHECKSYS_MYSQL_VERSION'		=> 'Minimális Verzió 4.1.2 - megtalált:',
	'ERR_CHECKSYS_NO_SESSIONS'			=> 'A munkafolyamat változók olvasása és írása során hiba lépett fel. Kezdje újra a telepítést!',
	'ERR_CHECKSYS_NOT_VALID_DIR'		=> 'Érvénytelen könyvtár',
	'ERR_CHECKSYS_NOT_WRITABLE'			=> 'Figyelem: nem írható',
	'ERR_CHECKSYS_PHP_INVALID_VER'		=> 'Ön által használt PHP verziót nem támogatja a SugarCRM. Szüksége lesz egy frissebb verzióra, amely kompatibilis a Sugar alkalmazással. Tekintse át a kiadásokra vonatkozó PHP kompatibilitási listát! Az Ön által használt verzió',
	'ERR_CHECKSYS_IIS_INVALID_VER'      => 'Az Ön IIS verzióját nem támogatja a Sugar. Installálnia kell egy olyan verziót, amely megfelel a rendszer számára. Kérem, olvassa el a kompatibilitási mátrixot a kiadásokra vonatkozó jegyzetekben! Az Ön verziója',
    'ERR_CHECKSYS_FASTCGI'              => 'A program észlelése szerint Ön nem használja a FastCGI kezelőt a PHP-hez. Installálnia kell egy olyan verziót, amely megfelel a rendszer számára. Kérem, olvassa el a kompatibilitási mátrixot a kiadásokra vonatkozó jegyzetekben! Az Ön verziója A részletekről itt olvashat: <a href="http://www.iis.net/php/" target="_blank" rel="nofollow noopener noreferrer">http://www.iis.net/php/</a> ',
	'ERR_CHECKSYS_FASTCGI_LOGGING'      => 'Az optimális élmény érdekében használjon IIS/FastCGI sapi-t; állítsa 0-ra a fastcgi.logging paramétert a php.ini fájl-ban!',
    'ERR_CHECKSYS_PHP_UNSUPPORTED'		=> 'Nem támogatott PHP verzió van telepítve: (ver',
    'LBL_DB_UNAVAILABLE'                => 'Adatbázis nem elérhető',
    'LBL_CHECKSYS_DB_SUPPORT_NOT_AVAILABLE' => 'Adatbázistámogatás nem található. Kérjük, győzödjön meg róla, hogy rendelkezik a szükséges illesztőprogramokkal az egyik támogatott adatbázistípushoz: MySQL, MS SQLServer, Oracle vagy DB2. Elképzelhető, hogy ki kell vennie a megjegyzést a php.ini fájlból vagy újra össze kell állítania azt a helyes bináris fájllal a PHP-verziójától függően. Kérjek, tekintse meg a PHP útmutatót, ha több információra van szüksége az Adatbázistámogatás engedélyezésével kapcsolatban.',
    'LBL_CHECKSYS_XML_NOT_AVAILABLE'        => 'Egyes XML-feldolgozó könyvtárakhoz kapcsolódó funkciók, amelyek szükségesek a SugarCRM-hez, nem találhatók. Az Ön PHP verziójától függően vagy a php-ini fájlban kell módosításokat végezni, vagy a vonatkozó bináris fájlt kell ismételten összeállítani. Kérem, olvasson utána a PHP felhasználói kézikönyvében!',
    'LBL_CHECKSYS_CSPRNG' => 'Véletlenszerű számgenerátor',
    'ERR_CHECKSYS_MBSTRING'             => 'Egyes Multibyte Strings (mbstring) PHP kiterjesztéshez kapcsolódó funkciók, amelyek szükségesek a SugarCRM-hez, nem találhatók. <br /><br />Az alapértelmezett beállítások szerint az mbstring modul le van tiltva a PHP-ben, amit aktiválni kell az --enable-mbstring kifejezéssel. Kérem, olvasson utána a PHP felhasználói kézikönyvében, hogy lehet bekapcsolni az mbstring támogatást!',
    'ERR_CHECKSYS_SESSION_SAVE_PATH_NOT_SET'       => 'A session.save_path beállítások hiányoznak vagy helytelenek a PHP konfigurációs fájlban (php.ini). Be kell állítania a save_path definíciót a php.ini fájlban vagy igazolnia kell, hogy a save_path-ban megjelölt könyvtárak léteznek.',
    'ERR_CHECKSYS_SESSION_SAVE_PATH_NOT_WRITABLE'  => 'A PHP konfigurációs fájl (php.ini) session.save_path kifejezésében definiált mappák nem írhatók. Kérem, tegye meg a szükséges lépéseket annak érdekében, hogy a mappák írhatóak legyenek! Az operációs rendszerének függvényében ez igényelheti a chmod 766 futtatása során a jogosultságok megváltoztatását, vagy a jobboldali egérgomb lekattintásával a fájl tulajdonságai menüben a "csak olvasható" tiltás kikapcsolását.',
    'ERR_CHECKSYS_CONFIG_NOT_WRITABLE'  => 'A konfigurációs fájl létezik, de nem írható. Kérem, tegye meg a szükséges lépéseket annak érdekében, hogy írható legyen! Az operációs rendszerének függvényében ez igényelheti a chmod 766 futtatása során a jogosultságok megváltoztatását, vagy a jobboldali egérgomb lekattintásával a fájl tulajdonságai menüben a "csak olvasható" tiltás kikapcsolását.',
    'ERR_CHECKSYS_CONFIG_OVERRIDE_NOT_WRITABLE'  => 'A config felülíró fájl létezik, de nem írható. Kérem, tegye meg a szükséges lépéseket annak érdekében, hogy írható legyen! Az operációs rendszerének függvényében ez igényelheti a chmod 766 futtatása során a jogosultságok megváltoztatását, vagy a jobboldali egérgomb lekattintásával a fájl tulajdonságai menüben a "csak olvasható" tiltás kikapcsolását.',
    'ERR_CHECKSYS_CUSTOM_NOT_WRITABLE'  => 'Az Egyéni Könyvtár létezik, de nem írható. Kérem, tegye meg a szükséges lépéseket annak érdekében, hogy írható legyen! Az operációs rendszerének függvényében ez igényelheti a chmod 766 futtatása során a jogosultságok megváltoztatását, vagy a jobboldali egérgomb lekattintásával a fájl tulajdonságai menüben a "csak olvasható" tiltás kikapcsolását.',
    'ERR_CHECKSYS_FILES_NOT_WRITABLE'   => "Az alább felsorolt fájlok vagy mappák nem léteznek és nem is lehet létrehozni őket, illetőleg ha léteznek, nem írhatók. Operációs rendszerének függvényében a javításhoz futtassa a chmod 755 parancsot és módosítsa a fájlok vagy szülő könyvtárak engedélyeit, vagy a jobboldali egérgomb lekattintásával a szülő könyvtár tulajdonságai menüben kapcsolja ki a \"csak olvasható\" tiltást.",
	'ERR_CHECKSYS_SAFE_MODE'			=> 'Biztonsági mód bekapcsolva (kikapcsolható a php.ini fájlban)',
    'ERR_CHECKSYS_ZLIB'					=> 'ZLib támogatás nem található: a SugarCRM óriási teljesítmény növekedéstől esik el.',
    'ERR_CHECKSYS_ZIP'					=> 'ZIP támogatás nem található: a SugarCRM igényli a ZIP támogatást a tömörített fájlok feldolgozásához.',
    'ERR_CHECKSYS_BCMATH'				=> 'Nem található BCMATH támogatás: BCMATH támogatás szükséges a tetszőleges pontosságú matematika alkalmazásához.',
    'ERR_CHECKSYS_HTACCESS'             => 'A .htaccess teszt sikertelen. Ez általában azt jelenti, hogy a Sugar könyvtárra vonatkozó AllowOverride beállítások hiányosak.',
    'ERR_CHECKSYS_CSPRNG' => 'CSPRNG kivétel',
	'ERR_DB_ADMIN'						=> 'A megadott adatbázis adminisztrátor felhasználónév és / vagy jelszó érvénytelen, illetve a kapcsolódás az adatbázishoz sikertelen. Kérem, adjon meg egy érvényes felhasználónevet és jelszót! (Hiba:',
    'ERR_DB_ADMIN_MSSQL'                => 'A megadott adatbázis adminisztrátor felhasználónév és / vagy jelszó érvénytelen, illetve a kapcsolódás az adatbázishoz sikertelen. Kérem, adjon meg egy érvényes felhasználónevet és jelszót!',
	'ERR_DB_EXISTS_NOT'					=> 'A megadott adatbázis nem létezik.',
	'ERR_DB_EXISTS_WITH_CONFIG'			=> 'Már létezik adatbázis a konfigurációs adatokkal. A kiválasztott adatbázis telepítőjének futtatásához kérem, indítsa újra a telepítést és válassza az alábbit: "Elveti és újra létrehozza a meglévő SugarCRM táblát?" A frissítéshez használja a Frissítés Varázslót az admin felületen. Kérem, olvassa el a frissítésre vonatkozó dokumentációkat <a href="http://www.sugarforge.org/content/downloads/" target="_new">itt</a>.',
	'ERR_DB_EXISTS'						=> 'A megadott adatbázis név már létezik - nem lehet létrehozni egy másikat ugyanazzal a névvel.',
    'ERR_DB_EXISTS_PROCEED'             => 'A megadott adatbázis név már létezik.<br />1. nyomja meg a Vissza gombot, és válasszon egy új adatbázis nevet, vagy <br />2. kattintson a Tovább gombra a folytatáshoz. Ebben az esetben az összes létező tábla törlésre kerül az adatbázisban.',
	'ERR_DB_HOSTNAME'					=> 'Kiszolgáló neve nem maradhat üresen.',
	'ERR_DB_INVALID'					=> 'Érvénytelen adatbázist választott.',
	'ERR_DB_LOGIN_FAILURE'				=> 'A megadott adatbázis kiszolgáló, felhasználónév és / vagy jelszó érvénytelen, így adatbázis kapcsolat nem létesíthető. Kérem, adjon meg egy érvényes kiszolgálót, felhasználónevet és jelszót!',
	'ERR_DB_LOGIN_FAILURE_MYSQL'		=> 'A megadott adatbázis kiszolgáló, felhasználónév és / vagy jelszó érvénytelen, így adatbázis kapcsolat nem létesíthető. Kérem, adjon meg egy érvényes kiszolgálót, felhasználónevet és jelszót!',
	'ERR_DB_LOGIN_FAILURE_MSSQL'		=> 'A megadott adatbázis kiszolgáló, felhasználónév és / vagy jelszó érvénytelen, így adatbázis kapcsolat nem létesíthető. Kérem, adjon meg egy érvényes kiszolgálót, felhasználónevet és jelszót!',
	'ERR_DB_MYSQL_VERSION'				=> 'Az Ön MySQL verzióját (%s) nem támogatja a Sugar. Installálnia kell egy olyan verziót, amely megfelel a rendszer számára. Kérem, olvassa el a kompatibilitási mátrixot a kiadásokra vonatkozó jegyzetekben!',
	'ERR_DB_NAME'						=> 'Adatbázis neve nem maradhat üresen.',
	'ERR_DB_NAME2'						=> "Adatbázis neve nem tartalmazhat &#39;\\&#39;, &#39;/&#39;, vagy &#39;. \" karaktereket.",
    'ERR_DB_MYSQL_DB_NAME_INVALID'      => "Adatbázis neve nem tartalmazhat &#39;\\&#39;, &#39;/&#39;, vagy &#39;. \" karaktereket.",
    'ERR_DB_MSSQL_DB_NAME_INVALID'      => "Adatbázis neve nem kezdődhet számmal vagy &#39;#&#39; és &#39;@&#39; karakterrel, nem tartalmazhat szünetet, illetve az alábbi karaktereket: &#39;\"&#39;, \"&#39;\", &#39;*&#39;, &#39;/&#39;, &#39;\\&#39;, &#39;?&#39;, &#39;:&#39;, &#39;<&#39;, &#39;>&#39;, &#39;&&#39;, &#39;!&#39;, or &#39;-&#39;",
    'ERR_DB_OCI8_DB_NAME_INVALID'       => "Az adatbázis neve csak alfanumerikus karakterekből állhat, illetve csak az alábbi szimbólumokat tartalmazhatja: '#', '_', '-', ':', '.', '/' vagy '$'",
	'ERR_DB_PASSWORD'					=> 'A két Sugar adatbázis adminisztrátori jelszó nem egyezik. Kérem, adja meg őket újra!',
	'ERR_DB_PRIV_USER'					=> 'Adjon meg egy adatbázis-adminisztrátor felhasználónevet. A felhasználó a legelső adatbázishoz való csatlakozáshoz szükséges.',
	'ERR_DB_USER_EXISTS'				=> 'Ilyen felhasználónévvel Sugar adatbázis-felhasználó már létezik - nem lehet létrehozni egy másikat ugyanazzal a névvel. Kérem, adjon meg egy új felhasználónevet!',
	'ERR_DB_USER'						=> 'Adjon meg egy felhasználónevet Sugar adatbázis-adminisztrátornak!',
	'ERR_DBCONF_VALIDATION'				=> 'Kérem, javítsa ki a következő hibákat a továbblépéshez:',
    'ERR_DBCONF_PASSWORD_MISMATCH'      => 'A két Sugar adatbázis felhasználói jelszó nem egyezik. Kérem, adja meg őket újra!',
	'ERR_ERROR_GENERAL'					=> 'A következő hibák merültek fel:',
	'ERR_LANG_CANNOT_DELETE_FILE'		=> 'Nem lehet törölni a fájlt:',
	'ERR_LANG_MISSING_FILE'				=> 'A fájl nem található:',
	'ERR_LANG_NO_LANG_FILE'			 	=> 'Nyelvi csomag fájl nem található az alábbi nyelvekben:',
	'ERR_LANG_UPLOAD_1'					=> 'Probléma merült fel a feltöltés közben. Kérem, próbálja újra!',
	'ERR_LANG_UPLOAD_2'					=> 'A nyelvi csomagoknak .zip formátumúnak kell lennie.',
	'ERR_LANG_UPLOAD_3'					=> 'A PHP nem tudta átmozgatni az ideiglenes fájlt a frissítés könyvtárba.',
	'ERR_LICENSE_MISSING'				=> 'Hiányzó szükséges mezők',
	'ERR_LICENSE_NOT_FOUND'				=> 'Licenc fájl nem található!',
	'ERR_LOG_DIRECTORY_NOT_EXISTS'		=> 'A megadott Log könyvtár nem érvényes könyvtár.',
	'ERR_LOG_DIRECTORY_NOT_WRITABLE'	=> 'A megadott Log könyvtár nem írható könyvtár.',
	'ERR_LOG_DIRECTORY_REQUIRED'		=> 'Ha sajátot szeretne kiválasztani, Log könyvtár szükséges.',
	'ERR_NO_DIRECT_SCRIPT'				=> 'Nem lehet közvetlenül feldolgozni a szkriptet.',
	'ERR_NO_SINGLE_QUOTE'				=> 'Aposztróf használata nem lehetséges az alábbihoz:',
	'ERR_PASSWORD_MISMATCH'				=> 'A két Sugar adatbázis adminisztrátori jelszó nem egyezik. Kérem, adja meg őket újra!',
	'ERR_PERFORM_CONFIG_PHP_1'			=> 'Nem lehet írni a config.php fájlt.',
	'ERR_PERFORM_CONFIG_PHP_2'			=> 'Folytathatja a telepítést és létrehozhatja manuálisan a config.php fájlt, bemásolva ide a konfigurációs adatokat. A továbblépéshez azonban mindenképp szükséges a config.php létrehozása.',
	'ERR_PERFORM_CONFIG_PHP_3'			=> 'Nem felejtette el létrehozni a config.php fájlt?',
	'ERR_PERFORM_CONFIG_PHP_4'			=> 'Figyelem: nem lehet írni a config.php fájlt. Győződjön meg arról, hogy létezik!',
	'ERR_PERFORM_HTACCESS_1'			=> 'Nem lehet írni a',
	'ERR_PERFORM_HTACCESS_2'			=> 'fájlt.',
	'ERR_PERFORM_HTACCESS_3'			=> 'Ha védetté szeretné tenni a napló fájlt, hogy ne lehessen böngészőn keresztül hozzáférni, hozzon létre egy .htaccess fájlt a naplózási mappában az alábbi sorral:',
	'ERR_PERFORM_NO_TCPIP'				=> 'Nem érhető el internet kapcsolat. Amennyiben mégis van, látogasson el a http://www.sugarcrm.com/home/index.php?option=com_extended_registration&task=register oldalra, regisztrálni a SugarCRM szolgáltatásra. A SugarCRM minden tőle telhetőt megtesz, hogy mindig biztosítani tudja a megfelelő alkalmazást az Ön üzleti igényeinek.',
	'ERR_SESSION_DIRECTORY_NOT_EXISTS'	=> 'A megadott munkamenet könyvtár érvénytelen.',
	'ERR_SESSION_DIRECTORY'				=> 'A megadott munkamenet könyvtár nem írható.',
	'ERR_SESSION_PATH'					=> 'Saját meghatározásához munkamenet útvonal megadása szükséges.',
	'ERR_SI_NO_CONFIG'					=> 'Nem adta meg a config_si.php fájlt a gyökér dokumentumban vagy nem határozta meg a config.php fájlban szereplő $sugar_config_si részt.',
	'ERR_SITE_GUID'						=> 'Saját meghatározásához alkalmazás azonosító megadása szükséges.',
    'ERROR_SPRITE_SUPPORT'              => "A GD könyvtár jelenleg nem elérhető, így a rendszer nem lesz képes a CSS Sprite funkció használatára.",
	'ERR_UPLOAD_MAX_FILESIZE'			=> 'Figyelmeztetés: az Ön PHP beállításait módosítani kell, hogy a rendszer a 6MB-nál nagyobb fájlok feltöltését engedélyezze.',
    'LBL_UPLOAD_MAX_FILESIZE_TITLE'     => 'Feltöltési fájlméret',
	'ERR_URL_BLANK'						=> 'Adja meg az alap URL címet a SugarCRM-hez.',
	'ERR_UW_NO_UPDATE_RECORD'			=> 'A rendszer nem találja a telepítő rekordot:',
    'ERROR_FLAVOR_INCOMPATIBLE'         => 'A feltöltött fájl nem kompatibilis a Sugar használt verziójával (Professional, Enterprise vagy Ultimate): ',
	'ERROR_LICENSE_EXPIRED'				=> "Hiba: a licenc lejárt",
	'ERROR_LICENSE_EXPIRED2'			=> "napja. Kérem, menjen az admin felület Licenc Menedzsment oldalára és gépelje be az új licenc kulcsot. Amennyiben 30 napon belül nem ad meg új kulcsot, többé nem fog tudni belépni az alkalmazásba.",
	'ERROR_MANIFEST_TYPE'				=> 'A manifest fájlnak meg kell határoznia a csomag típusát.',
	'ERROR_PACKAGE_TYPE'				=> 'A jegyzék fájl ismeretlen csomagra mutat.',
	'ERROR_VALIDATION_EXPIRED'			=> "Hiba: a hitelesítési kulcs lejárt",
	'ERROR_VALIDATION_EXPIRED2'			=> "napja. Kérem, menjen az admin felület Licenc Menedzsment oldalára és gépelje be az új licenc kulcsot. Amennyiben 30 napon belül nem ad meg új kulcsot, többé nem fog tudni belépni az alkalmazásba.",
	'ERROR_VERSION_INCOMPATIBLE'		=> 'A feltöltött fájl nem kompatibilis ezzel a Sugar verzióval:',

	'LBL_BACK'							=> 'Vissza',
    'LBL_CANCEL'                        => 'Mégsem',
    'LBL_ACCEPT'                        => 'Elfogadom',
	'LBL_CHECKSYS_1'					=> 'Annak érdekében, hogy a SugarCRM telepítés megfelelően működjön, kérem, győződjön meg arról, hogy az alábbiakban felsorolt tételek zöldek. Piros előfordulása esetén tegye meg a szükséges lépéseket javítás céljából.<BR><BR> Ha segítségre van szüksége, látogasson el a <a href="http://www.sugarcrm.com/crm/installation" target="_blank">Sugar Wiki</a> oldalra!',
	'LBL_CHECKSYS_CACHE'				=> 'Írható ideiglenes alkönyvtárak',
    'LBL_DROP_DB_CONFIRM'               => 'A megadott adatbázis név már létezik.<br /><br />1. Kattintson a Mégse gombra, és válasszon ki egy új adatbázis nevet, illetve <br />2. Kattintson az Elfogadás gombra a folytatáshoz. Minden adatbázisban szereplő táblázat törlésre kerül. Ez azt jelenti, hogy a táblázatok és a már meglévő adatok teljesen megsemmisülnek.',
	'LBL_CHECKSYS_CALL_TIME'			=> 'PHP Hívásidő pass referencia ellenőrző ki van kapcsolva',
    'LBL_CHECKSYS_COMPONENT'			=> 'Összetevők',
	'LBL_CHECKSYS_COMPONENT_OPTIONAL'	=> 'Választható összetevők',
	'LBL_CHECKSYS_CONFIG'				=> 'Írható SugarCRM konfigurációs fájl (config.php)',
	'LBL_CHECKSYS_CONFIG_OVERRIDE'		=> 'Írható SugarCRM konfigurációs fájl (config_override.php)',
	'LBL_CHECKSYS_CURL'					=> 'cURL Modul',
    'LBL_CHECKSYS_SESSION_SAVE_PATH'    => 'Mentési útvonal beállítása',
	'LBL_CHECKSYS_CUSTOM'				=> 'Írható egyéni könyvtár',
	'LBL_CHECKSYS_DATA'					=> 'Írható adat alkönyvtárak',
	'LBL_CHECKSYS_IMAP'					=> 'IMAP Modul',
	'LBL_CHECKSYS_MQGPC'				=> 'Magic Quotes GPC',
	'LBL_CHECKSYS_MBSTRING'				=> 'MB Strings modul',
	'LBL_CHECKSYS_MEM_OK'				=> 'OK (nincs korlát)',
	'LBL_CHECKSYS_MEM_UNLIMITED'		=> 'OK (korlátlan)',
	'LBL_CHECKSYS_MEM'					=> 'PHP memória korlát',
	'LBL_CHECKSYS_MODULE'				=> 'Írható modulok, alkönyvtárak és fájlok',
	'LBL_CHECKSYS_MYSQL_VERSION'		=> 'MySQL verzió',
	'LBL_CHECKSYS_NOT_AVAILABLE'		=> 'Nem érhető el',
	'LBL_CHECKSYS_OK'					=> 'OK',
	'LBL_CHECKSYS_PHP_INI'				=> 'Az Ön PHP konfigurációs fájljának helye (php.ini):',
	'LBL_CHECKSYS_PHP_OK'				=> 'OK (ver',
	'LBL_CHECKSYS_PHPVER'				=> 'PHP verzió',
    'LBL_CHECKSYS_IISVER'               => 'IIS verzió',
    'LBL_CHECKSYS_FASTCGI'              => 'FastCGI',
	'LBL_CHECKSYS_RECHECK'				=> 'Újra ellenőrzés',
	'LBL_CHECKSYS_SAFE_MODE'			=> 'PHP biztonsági mód kikapcsolva',
	'LBL_CHECKSYS_SESSION'				=> 'Írható munkamenet mentési útvonala (',
	'LBL_CHECKSYS_STATUS'				=> 'Állapot',
	'LBL_CHECKSYS_TITLE'				=> 'Rendszer ellenőrző',
	'LBL_CHECKSYS_VER'					=> 'Talált: (ver',
	'LBL_CHECKSYS_XML'					=> 'XML feldolgozás',
	'LBL_CHECKSYS_ZLIB'					=> 'Zlib tömörítési modul',
	'LBL_CHECKSYS_ZIP'					=> 'ZIP kezelési modul',
    'LBL_CHECKSYS_BCMATH'				=> 'Tetszőleges pontosságú matematikai modul',
    'LBL_CHECKSYS_HTACCESS'				=> 'AllowOverride beállítás .htaccesshez',
    'LBL_CHECKSYS_FIX_FILES'            => 'Kérem, javítsa ki a következő fájlokat vagy könyvtárakat a továbblépéshez:',
    'LBL_CHECKSYS_FIX_MODULE_FILES'     => 'Kérem, javítsa ki az alábbi modul könyvtárakat és fájlokat a továbblépés előtt:',
    'LBL_CHECKSYS_UPLOAD'               => 'Írható feltöltési könyvtár',
    'LBL_CLOSE'							=> 'Zárás',
    'LBL_THREE'                         => '3',
	'LBL_CONFIRM_BE_CREATED'			=> 'létre lesz hozva',
	'LBL_CONFIRM_DB_TYPE'				=> 'Adatbázis típusa',
	'LBL_CONFIRM_DIRECTIONS'			=> 'Kérem, erősítse meg az alábbi beállításokat! Ha bármely értéket meg kíván változtatni, kattintson a Vissza gombra, egyéb esetben a Következő gomb lekattintásával megkezdheti a telepítést.',
	'LBL_CONFIRM_LICENSE_TITLE'			=> 'Licenc információ',
	'LBL_CONFIRM_NOT'					=> 'nem',
	'LBL_CONFIRM_TITLE'					=> 'Beállítások jóváhagyása',
	'LBL_CONFIRM_WILL'					=> 'majd',
	'LBL_DBCONF_CREATE_DB'				=> 'Adatbázis létrehozása',
	'LBL_DBCONF_CREATE_USER'			=> 'Felhasználó létrehozása [ALT + N]',
	'LBL_DBCONF_DB_DROP_CREATE_WARN'	=> 'Figyelem: minden Sugar adat törlődik<br />ha ez be van jelölve.',
	'LBL_DBCONF_DB_DROP_CREATE'			=> 'Elveti és újra létrehozza a már meglévő Sugar táblákat?',
    'LBL_DBCONF_DB_DROP'                => 'Táblák törlése',
    'LBL_DBCONF_DB_NAME'				=> 'Adatbázis neve',
	'LBL_DBCONF_DB_PASSWORD'			=> 'Sugar adatbázis-felhasználó jelszó',
	'LBL_DBCONF_DB_PASSWORD2'			=> 'Írja be újra  a Sugar adatbázis-felhasználó jelszót',
	'LBL_DBCONF_DB_USER'				=> 'Sugar adatbázis felhasználónév',
    'LBL_DBCONF_SUGAR_DB_USER'          => 'Sugar adatbázis felhasználónév',
    'LBL_DBCONF_DB_ADMIN_USER'          => 'Adatbázis-adminisztrátor felhasználónév',
    'LBL_DBCONF_DB_ADMIN_PASSWORD'      => 'Adatbázis admin jelszó',
	'LBL_DBCONF_DEMO_DATA'				=> 'Adatbázis feltöltése Demó adatokkal?',
    'LBL_DBCONF_DEMO_DATA_TITLE'        => 'Válassza ki a Demo adatokat',
	'LBL_DBCONF_HOST_NAME'				=> 'Kiszolgáló neve',
	'LBL_DBCONF_HOST_INSTANCE'			=> 'Szolgáltató tulajdona',
	'LBL_DBCONF_HOST_PORT'				=> 'Port',
    'LBL_DBCONF_SSL_ENABLED'            => 'SSL kapcsolat engedélyezése',
	'LBL_DBCONF_INSTRUCTIONS'			=> 'Kérem, adja meg az adatbázis konfigurációs adatait. Amennyiben nem tudja, mit kéne megadni, használja az alapértelmezett értékeket!',
	'LBL_DBCONF_MB_DEMO_DATA'			=> 'Használjon több byte-os szöveget a demo adatokban?',
    'LBL_DBCONFIG_MSG2'                 => 'A web szerver vagy a szolgáltató gépének neve, amelyen az adatbázis található (mint például a localhost vagy www.mydomain.com):',
    'LBL_DBCONFIG_MSG3'                 => 'Az adatbázis neve, amely a most telepítésre kerülő Sugar alkalmazás adatait fogja tartalmazni:',
    'LBL_DBCONFIG_B_MSG1'               => 'Az adatbázis-adminisztrátor nevének és jelszavának megadása szükséges a SugarCRM beállításához. A kijelölt felhasználó táblázatokat és új felhasználókat hozhat létre, továbbá módosíthatja az adatbázist.',
    'LBL_DBCONFIG_SECURITY'             => 'Biztonsági céllal megadhat egy exkluzív jogokkal rendelkező felhasználót. Ez a felhasználó hozzáférhet az adatbázishoz; módosításokat végezhet benne, frissítheti és adatokat nyerhet ki belőle. Ez a felhasználó lehet a már kiválasztott adminisztrátor, de kijelölhet új felhasználót is.',
    'LBL_DBCONFIG_AUTO_DD'              => 'Tegye meg nekem',
    'LBL_DBCONFIG_PROVIDE_DD'           => 'Adjon meg létező felhasználót',
    'LBL_DBCONFIG_CREATE_DD'            => 'Felhasználó létrehozása',
    'LBL_DBCONFIG_SAME_DD'              => 'Ugyanaz, mint az adminisztrátor',
	//'LBL_DBCONF_I18NFIX'              => 'Apply database column expansion for varchar and char types (up to 255) for multi-byte data?',
    'LBL_FTS'                           => 'Keresés a teljes szövegben',
    'LBL_FTS_INSTALLED'                 => 'Telepített',
    'LBL_FTS_INSTALLED_ERR1'            => 'A teljes szövegre mutató keresési funkció nincs telepítve.',
    'LBL_FTS_INSTALLED_ERR2'            => 'Telepíthet, de nem lesz képes a teljes szövegre mutató keresés használatára. Kérem, ennek nézzen utána az adatbázis szerver telepítésére vonatkozó útmutatóban vagy lépjen kapcsolatba adminisztrátorával!',
	'LBL_DBCONF_PRIV_PASS'				=> 'Kiemelt adatbázis-felhasználó jelszó',
	'LBL_DBCONF_PRIV_USER_2'			=> 'Adatbázis-fiók felett egy kiemelt felhasználó?',
	'LBL_DBCONF_PRIV_USER_DIRECTIONS'	=> 'Ennek a kiemelt adatbázis felhasználónak rendelkeznie kell a megfelelő engedélyekkel az adatbázis, a táblák és a felhasználók létrehozásához. A felhasználónak jogosultságait csak a telepítés során kell használnia. Amennyiben elegendő jogosultsággal van felruházva, a fenti felhasználó ismételten kijelölhető.',
	'LBL_DBCONF_PRIV_USER'				=> 'Kiemelt adatbázis felhasználó név',
	'LBL_DBCONF_TITLE'					=> 'Adatbázis beállítás',
    'LBL_DBCONF_TITLE_NAME'             => 'Adja meg az adatbázis nevét',
    'LBL_DBCONF_TITLE_USER_INFO'        => 'Adja meg az adatbázis-felhasználói információkat',
	'LBL_DISABLED_DESCRIPTION_2'		=> 'A módosítás után kattintson a Start gombra a telepítéshez. A telepítés befejeztével állítsa az "installer_locked" értéket "true"-ra!',
	'LBL_DISABLED_DESCRIPTION'			=> 'A telepítő már fut a háttérben. A kétszeri futtatás biztonsági okokból ki van kapcsolva. Ha biztos benne, hogy mégis újra szeretné futtatni, menjen a config.php fájlba, keresse meg az úgynevezett "installer_locked" változót és állítsa be "false" állapotba. A sornak így kell kinéznie:',
	'LBL_DISABLED_HELP_1'				=> 'A telepítési útmutatóhoz kérem, keresse fel a SugarCRM-et!',
    'LBL_DISABLED_HELP_LNK'               => 'http://www.sugarcrm.com/forums/',
	'LBL_DISABLED_HELP_2'				=> 'támogatási fórumok',
	'LBL_DISABLED_TITLE_2'				=> 'A SugarCRM telepítés letiltva',
	'LBL_DISABLED_TITLE'				=> 'A SugarCRM telepítés letiltva',
	'LBL_EMAIL_CHARSET_DESC'			=> 'Leggyakrabban használt karakterkészlet',
	'LBL_EMAIL_CHARSET_TITLE'			=> 'Elküldött levelek beállításai',
    'LBL_EMAIL_CHARSET_CONF'            => 'Karakterkészlet kimenő emailekhez',
	'LBL_HELP'							=> 'Segítség',
    'LBL_INSTALL'                       => 'Telepít',
    'LBL_INSTALL_TYPE_TITLE'            => 'Telepítési beállítások',
    'LBL_INSTALL_TYPE_SUBTITLE'         => 'Válassza ki a telepítés módját',
    'LBL_INSTALL_TYPE_TYPICAL'          => 'Szokásos telepítés',
    'LBL_INSTALL_TYPE_CUSTOM'           => 'Egyéni telepítés',
    'LBL_INSTALL_TYPE_MSG1'             => 'A kulcs kötelező az alkalmazás funkcióinak használatához, de magához a telepítéshez nem. Most nem kell beírnia semmit, de a telepítés befejezése után igen.',
    'LBL_INSTALL_TYPE_MSG2'             => 'Minimális információk a telepítéshez. Új felhasználóknak ajánlott.',
    'LBL_INSTALL_TYPE_MSG3'             => 'Több választási lehetőség felkínálása a telepítés során. A legtöbb opció később az admin felületen lesz elérhető a telepítés után. Haladóknak ajánlott.',
	'LBL_LANG_1'						=> 'Ha az alapértelmezettel (US-angol) nem egyező nyelvi csomagot kíván használni, most feltöltheti a kívánt csomagot. Később az alkalmazásból közvetlen is telepíthet nyelvi csomagot. Amennyiben átugraná ezt a lépést, kattintson a Tovább gombra!',
	'LBL_LANG_BUTTON_COMMIT'			=> 'Telepít',
	'LBL_LANG_BUTTON_REMOVE'			=> 'Eltávolítás',
	'LBL_LANG_BUTTON_UNINSTALL'			=> 'Uninstallálás',
	'LBL_LANG_BUTTON_UPLOAD'			=> 'Feltöltés',
	'LBL_LANG_NO_PACKS'					=> 'nincs',
	'LBL_LANG_PACK_INSTALLED'			=> 'A következő nyelvi csomagok már telepítve vannak:',
	'LBL_LANG_PACK_READY'				=> 'A következő nyelvi csomagok készen állnak a telepítésre:',
	'LBL_LANG_SUCCESS'					=> 'A nyelvi csomag sikeresen feltöltve.',
	'LBL_LANG_TITLE'			   		=> 'Nyelvi csomag',
    'LBL_LAUNCHING_SILENT_INSTALL'     => 'Most a Sugar telepítése folyik. Ez eltarthat néhány percig.',
	'LBL_LANG_UPLOAD'					=> 'Nyelvi csomag feltöltése',
	'LBL_LICENSE_ACCEPTANCE'			=> 'Licenc elfogadása',
    'LBL_LICENSE_CHECKING'              => 'Rendszer kompatibilitásának ellenőrzése.',
    'LBL_LICENSE_CHKENV_HEADER'         => 'Környezet ellenőrzése',
    'LBL_LICENSE_CHKDB_HEADER'          => 'DB, FTS hitelesítő adatok ellenőrzése.',
    'LBL_LICENSE_CHECK_PASSED'          => 'A rendszer kompatibilisnek tűnik.',
    'LBL_LICENSE_REDIRECT'              => 'Átirányítás ennyi idő múlva:',
	'LBL_LICENSE_DIRECTIONS'			=> 'Ha kéznél vannak a licencadatai, adja meg őket alább!',
	'LBL_LICENSE_DOWNLOAD_KEY'			=> 'Írja be a letöltési kulcsot!',
	'LBL_LICENSE_EXPIRY'				=> 'Lejárat dátuma',
	'LBL_LICENSE_I_ACCEPT'				=> 'Elfogadom',
	'LBL_LICENSE_NUM_USERS'				=> 'Felhasználók száma',
	'LBL_LICENSE_PRINTABLE'				=> 'Nyomtatási nézet',
    'LBL_PRINT_SUMM'                    => 'Összesítő nyomtatása',
	'LBL_LICENSE_TITLE_2'				=> 'SugarCRM licenc',
	'LBL_LICENSE_TITLE'					=> 'Licenc információ',
	'LBL_LICENSE_USERS'					=> 'Felhasználók',

	'LBL_LOCALE_CURRENCY'				=> 'Pénznem beállítások',
	'LBL_LOCALE_CURR_DEFAULT'			=> 'Alapértelmezett pénznem',
	'LBL_LOCALE_CURR_SYMBOL'			=> 'Pénznem szimbóluma',
	'LBL_LOCALE_CURR_ISO'				=> 'Pénznem kód (ISO 4217)',
	'LBL_LOCALE_CURR_1000S'				=> 'Ezres elválasztó',
	'LBL_LOCALE_CURR_DECIMAL'			=> 'Tizedes elválasztó',
	'LBL_LOCALE_CURR_EXAMPLE'			=> 'Példa',
	'LBL_LOCALE_CURR_SIG_DIGITS'		=> 'Értékes számjegyek',
	'LBL_LOCALE_DATEF'					=> 'Alapértelmezett dátumformátum',
	'LBL_LOCALE_DESC'					=> 'A megadott területi beállítások világszerte megjelennek a SugarCRM példányán belül.',
	'LBL_LOCALE_EXPORT'					=> 'Karakterkészlet import/export célokra <br />(Email, .csv, vCard, PDF, adat importálás)',
	'LBL_LOCALE_EXPORT_DELIMITER'		=> 'Export (.csv) elválasztó',
	'LBL_LOCALE_EXPORT_TITLE'			=> 'Import/export beállítások',
	'LBL_LOCALE_LANG'					=> 'Alapértelmezett nyelv',
	'LBL_LOCALE_NAMEF'					=> 'Alapértelmezett névformátum',
	'LBL_LOCALE_NAMEF_DESC'				=> 's = megszólítás<br />f = keresztnév<br />l = vezetéknév',
	'LBL_LOCALE_NAME_FIRST'				=> 'David',
	'LBL_LOCALE_NAME_LAST'				=> 'Livingstone',
	'LBL_LOCALE_NAME_SALUTATION'		=> 'Dr.',
	'LBL_LOCALE_TIMEF'					=> 'Alapértelmezett időformátum',
	'LBL_LOCALE_TITLE'					=> 'Helyi beállítások',
    'LBL_CUSTOMIZE_LOCALE'              => 'Helyi beállítások testreszabása',
	'LBL_LOCALE_UI'						=> 'Felhasználói felület',

	'LBL_ML_ACTION'						=> 'Művelet',
	'LBL_ML_DESCRIPTION'				=> 'Leírás',
	'LBL_ML_INSTALLED'					=> 'Telepítés időpontja',
	'LBL_ML_NAME'						=> 'Név',
	'LBL_ML_PUBLISHED'					=> 'Közzétéve',
	'LBL_ML_TYPE'						=> 'Típus',
	'LBL_ML_UNINSTALLABLE'				=> 'Nem törölhető',
	'LBL_ML_VERSION'					=> 'Verzió',
	'LBL_MSSQL'							=> 'SQL szerver',
	'LBL_MSSQL_SQLSRV'				    => 'SQL szerver (Microsoft SQL szerver driver PHP-hez)',
	'LBL_MYSQL'							=> 'MySQL',
    'LBL_MYSQLI'						=> 'MySQL (mysqli kiterjesztés)',
	'LBL_IBM_DB2'						=> 'IBM DB2',
	'LBL_NEXT'							=> 'Következő',
	'LBL_NO'							=> 'Nem',
    'LBL_ORACLE'						=> 'Oracle',
	'LBL_PERFORM_ADMIN_PASSWORD'		=> 'Admin jelszó beállítása',
	'LBL_PERFORM_AUDIT_TABLE'			=> 'audit táblázat /',
	'LBL_PERFORM_CONFIG_PHP'			=> 'Sugar konfigurációs fájl létrehozása',
	'LBL_PERFORM_CREATE_DB_1'			=> 'Az adatbázis létrehozása',
	'LBL_PERFORM_CREATE_DB_2'			=> 'a',
	'LBL_PERFORM_CREATE_DB_USER'		=> 'Adatbázis-felhasználónév és jelszó létrehozása...',
	'LBL_PERFORM_CREATE_DEFAULT'		=> 'Alapértelmezett SugarCRM adatok létrehozása',
	'LBL_PERFORM_CREATE_LOCALHOST'		=> 'Adatbázis-felhasználónév és jelszó létrehozása a localhost-on...',
	'LBL_PERFORM_CREATE_RELATIONSHIPS'	=> 'SugarCRM kapcsolati táblák létrehozása',
	'LBL_PERFORM_CREATING'				=> 'létrehozás /',
	'LBL_PERFORM_DEFAULT_REPORTS'		=> 'Alapértelmezett jelentések létrehozása',
	'LBL_PERFORM_DEFAULT_SCHEDULER'		=> 'Alapértelmezett feladat ütemezők létrehozása',
	'LBL_PERFORM_DEFAULT_SETTINGS'		=> 'Alapértelmezett beállítások beszúrása',
	'LBL_PERFORM_DEFAULT_USERS'			=> 'Alapértelmezett felhasználók létrehozása',
	'LBL_PERFORM_DEMO_DATA'				=> 'Adatbázis táblák feltöltése demo adatokkal (ez eltarthat egy darabig)',
	'LBL_PERFORM_DONE'					=> 'kész',
	'LBL_PERFORM_DROPPING'				=> 'eldobás /',
	'LBL_PERFORM_FINISH'				=> 'Befejezés',
	'LBL_PERFORM_LICENSE_SETTINGS'		=> 'Licenc információk frissítése',
	'LBL_PERFORM_OUTRO_1'				=> 'SugarCRM beállítása',
	'LBL_PERFORM_OUTRO_2'				=> 'most már teljes!',
	'LBL_PERFORM_OUTRO_3'				=> 'Teljes idő:',
	'LBL_PERFORM_OUTRO_4'				=> 'másodperc.',
	'LBL_PERFORM_OUTRO_5'				=> 'Használt memória hozzávetőlegesen:',
	'LBL_PERFORM_OUTRO_6'				=> 'bájt.',
	'LBL_PERFORM_OUTRO_7'				=> 'A rendszer telepítése és konfigurálása befejeződött, használatra kész.',
	'LBL_PERFORM_REL_META'				=> 'kapcsolat meta ...',
	'LBL_PERFORM_SUCCESS'				=> 'Siker!',
	'LBL_PERFORM_TABLES'				=> 'SugarCRM alkalmazás táblák, audit táblák, kapcsolódó metaadatok létrehozása',
	'LBL_PERFORM_TITLE'					=> 'Beállítások elvégzése',
	'LBL_PRINT'							=> 'Nyomtatás',
	'LBL_REG_CONF_1'					=> 'Kérem, töltse ki az alábbi rövid űrlapot, amennyiben bővebb információkat szeretne kapni a SugarCRM termék bejelentéseivel, képzéseivel, speciális ajánlataival és rendezvényeivel kapcsolatban! Az adatokat harmadik félnek semmilyen formában nem adjuk tovább.',
	'LBL_REG_CONF_2'					=> 'Mindössze az Ön neve és email címe szükséges a regisztrációhoz. Minden egyéb mező kitöltése opcionális, de a közeljövőben a megadott adatok hasznosak lehetnek. Az adatokat harmadik félnek semmilyen formában nem adjuk tovább.',
	'LBL_REG_CONF_3'					=> 'Regisztrációját köszönjük. Kattintson a Befejezés gombra a SugarCRM-be való bejelentkezéshez! Első alkalommal "admin" felhasználónévvel tud majd bejelentkezni, a 2. lépésben megadott jelszó használata mellett.',
	'LBL_REG_TITLE'						=> 'Regisztráció',
    'LBL_REG_NO_THANKS'                 => 'Köszönöm, nem',
    'LBL_REG_SKIP_THIS_STEP'            => 'A lépés kihagyása',
	'LBL_REQUIRED'						=> '* Kötelező mező',

    'LBL_SITECFG_ADMIN_Name'            => 'A Sugar alkalmazás admin neve',
	'LBL_SITECFG_ADMIN_PASS_2'			=> 'Írja be újra a Sugar admin jelszót',
	'LBL_SITECFG_ADMIN_PASS_WARN'		=> 'Figyelem: ez felülírja a korábbi telepítés jelszavát.',
	'LBL_SITECFG_ADMIN_PASS'			=> 'Sugar admin jelszó',
	'LBL_SITECFG_APP_ID'				=> 'Alkalmazás azonosító',
	'LBL_SITECFG_CUSTOM_ID_DIRECTIONS'	=> 'Kiválasztás esetén meg kell adnia egy új alkalmazás azonosítót, amely felül fogja írni a rendszer által generált azonosítót. Az azonosító garantálja, hogy a munkafolyamat elemeit nem fogják egyszerre többen használni. Amennyiben több telepítéssel dolgozik, mindegyiknek ugyanazzal az azonosítóval kell futniuk!',
	'LBL_SITECFG_CUSTOM_ID'				=> 'Adja meg a saját alkalmazás azonosítóját',
	'LBL_SITECFG_CUSTOM_LOG_DIRECTIONS'	=> 'Ha ezt az opciót választja, meg kell adnia egy naplózó könyvtárat az alapértelmezett könyvtár felülírásához. Függetlenül a log fájl helyétől, a böngészőn keresztül történő hozzáférés .htaccess átirányítással korlátozva lesz.',
	'LBL_SITECFG_CUSTOM_LOG'			=> 'Használjon egyéni napló könyvtárat',
	'LBL_SITECFG_CUSTOM_SESSION_DIRECTIONS'	=> 'Ha ezt az opciót választja, meg kell adnia egy biztonságos mappát, ahol a rendszer a Sugar munkameneteket tárolhatja. Ezzel megakadályozhatja, hogy illetéktelenek hozzáférhessenek a munkamenet adataihoz a megosztott szervereken.',
	'LBL_SITECFG_CUSTOM_SESSION'		=> 'Használjon egyéni munkakönytárat a SugarCRM-hez',
	'LBL_SITECFG_DIRECTIONS'			=> 'Kérjük, adja meg a webhely konfigurációs információkat az alábbiakban. Ha nem biztos a mezők kitöltésében, használja az alapértelmezett értékeket.',
	'LBL_SITECFG_FIX_ERRORS'			=> 'Kérem, javítsa ki a következő hibákat a továbblépés előtt:',
	'LBL_SITECFG_LOG_DIR'				=> 'Napló könyvtár',
	'LBL_SITECFG_SESSION_PATH'			=> 'Munkamenet könyvtár útvonala<br />(írhatónak kell lennie)',
	'LBL_SITECFG_SITE_SECURITY'			=> 'Válassza a biztonsági beállításokat',
	'LBL_SITECFG_SUGAR_UP_DIRECTIONS'	=> 'Kiválasztás esetén a rendszer bizonyos időközönként ellenőrzi az alkalmazás frissített verzióit.',
	'LBL_SITECFG_SUGAR_UP'				=> 'Automatikusan ellenőrzze a frissítéseket?',
	'LBL_SITECFG_SUGAR_UPDATES'			=> 'Sugar frissítések konfigurálása',
	'LBL_SITECFG_TITLE'					=> 'Oldalbeállítás',
    'LBL_SITECFG_TITLE2'                => 'Azonosítsa az admin felhasználót',
    'LBL_SITECFG_SECURITY_TITLE'        => 'Oldalbiztonság',
	'LBL_SITECFG_URL'					=> 'SugarCRM URL-je',
	'LBL_SITECFG_USE_DEFAULTS'			=> 'Használja az alapbeállítást?',
	'LBL_SITECFG_ANONSTATS'             => 'Küldjön anonim statisztikákat a használatról?',
	'LBL_SITECFG_ANONSTATS_DIRECTIONS'  => 'Kiválasztás esetén a Sugar anonim statisztikákat fog küldeni telepítésével kapcsolatban a SugarCRM Inc. felé, minden egyes alkalommal, amikor alkalmazása elérhető frissítéseket keres. A kinyert információk segítenek jobban megérteni, Ön hogy használja a SugarCRM-et, így további ötleteket ad a jövőbeli fejlesztésekhez is.',
    'LBL_SITECFG_URL_MSG'               => 'Írja be azt az URL-t, amelyen keresztül később el lehet érni a Sugar alkalmazást! A megadott URL lesz a töve az alkalmazás oldalainak is. Az URL-nek tartalmaznia kell a kiszolgáló vagy a gép nevét, esetleg IP címét.',
    'LBL_SITECFG_SYS_NAME_MSG'          => 'Nevezze el a rendszert! Ez a név fog megjelenni a böngésző címsorában minden egyes alkalommal, amikor a felhasználók bejelentkeznek az alkalmazásba.',
    'LBL_SITECFG_PASSWORD_MSG'          => 'Telepítés után csak admin felhasználóként jelentkezhet be a Sugar alkalmazásba (alapértelmezett felhasználónév = admin). Adjon meg egy jelszót az adminisztrátor számára! A jelszó az első bejelentkezést követően bármikor megváltoztatható. A kiválasztott adminisztrátor mellé a későbbiekben másikat is kinevezhet.',
    'LBL_SITECFG_COLLATION_MSG'         => 'Állítsa be az egybevetés (válogatás) parancs tulajdonságait rendszere számára. A beállítás az Ön által használt nyelven adattáblákat hoz létre. Amennyiben a nyelvi beállítások nem relevánsak, használja az alapértelmezett értékeket!',
    'LBL_SPRITE_SUPPORT'                => 'Sprite támogatás',
	'LBL_SYSTEM_CREDS'                  => 'Rendszer tanúsítványok',
    'LBL_SYSTEM_ENV'                    => 'Rendszer környezet',
	'LBL_START'							=> 'Kezdés',
    'LBL_SHOW_PASS'                     => 'Jelszavak megjelenítése',
    'LBL_HIDE_PASS'                     => 'Jelszavak elrejtése',
    'LBL_HIDDEN'                        => '(rejtett)',
//	'LBL_NO_THANKS'						=> 'Continue to installer',
	'LBL_CHOOSE_LANG'					=> 'Válasszon nyelvet',
	'LBL_STEP'							=> 'Lépés',
	'LBL_TITLE_WELCOME'					=> 'Üdvözöljük a SugarCRM-ben',
	'LBL_WELCOME_1'						=> 'Ez a telepítő létrehozza az indításhoz szükséges SugarCRM adatbázis táblákat és beállítja a konfigurációs változókat. Az egész folyamat körülbelül tíz percet vesz igénybe.',
    //welcome page variables
    'LBL_TITLE_ARE_YOU_READY'            => 'Készen áll a telepítésre?',
    'REQUIRED_SYS_COMP' => 'Kötelező rendszer komponensek',
    'REQUIRED_SYS_COMP_MSG' =>
                    'Kezdés előtt kérem, győződjön meg róla, hogy a támogatott verziója fel van telepítve az alábbi rendszerösszetevőknek:<br />Adatbázis / Database Management System (például: MySQL, SQL Server, Oracle, DB2)<br />Web szerver (Apache, IIS)<br /><br /> Kérem, olvassa el a kompatibilitási mátrixot a kiadásokra vonatkozó jegyzetekben!',
    'REQUIRED_SYS_CHK' => 'Alapvető rendszerellenőrzés',
    'REQUIRED_SYS_CHK_MSG' =>
                    'Telepítéskor a rendszer ellenőrzést végez a web szerveren, amelyen a SugarCRM is található, annak érdekében, hogy ellenőrizze, a rendszer megfelelően van-e beállítva, illetve az összes szükséges összetevő sikeresen befejezte-e a telepítést. <br /><br />A rendszer a következőket ellenőrzi:<br />          - PHP - kompatibilisnek kell lennie az alkalmazással<br />          - Folyamatváltozók - megfelelően kell működniük<br />          - MB Strings - telepítve és engedélyezve kell lennie a php.ini fájlban<br />          - Adatbázis támogatás - léteznie kell MySQL, SQL Server, Oracle vagy DB2 mellé<br />          - Config.php - léteznie kell, és rendelkeznie kell a megfelelő engedélyekkel, hogy írható legyen<br />          - A következő SugarCRM fájloknak írhatónak kell lenniük:<br />                    - /custom<br />                    - /cache<br />                    - /modules<br />                    - /upload<br /><br />Ha az ellenőrzés sikertelen, akkor nem tudja folytatni a telepítést. Ekkor egy hibaüzenet fogja tájékoztatni arról, hogy a rendszer milyen problémát talált. A szükséges módosítások kivitelezése után, megismételheti az ellenőrzést és folytathatja a telepítést.',
    'REQUIRED_INSTALLTYPE' => 'Szokásos vagy egyéni telepítés',
    'REQUIRED_INSTALLTYPE_MSG' =>
                    "A rendszer ellenőrzése után választhat, hogy szokásos vagy egyéni beállítások mellett fejezi be a telepítést.<br /><br />Mindkét esetben az alábbi adatokra lesz szüksége:<br /><br />	- adatbázisának típusa. A Sugar-rel kompatibilis típusok: MySQL, MS SQL Server, Oracle, DB2.<br /><br />	- az adatbázisnak otthont adó web kiszolgáló neve. Amennyiben az adatbázis az Ön számítógépén található, vagy a Sugar fájlokkal egyező helyszínen, a \"localhost\" kifejezés használandó. <br /><br />	- a Sugar adatok tárolásához használt adatbázis neve. Elképzelhető, hogy már létező adatbázist kíván használni. Ha megadja ennek nevét, a rendszer a továbbiakban ezzel fog dolgozni. Amennyiben nincs ilyen adatbázis, a megadott névvel új adatbázist fog létrehozni a rendszer.<br /><br />	- az adatbázis adminisztrátor felhasználóneve és jelszava. Az adatbázis adminisztrátornak megfelelő jogosultságokkal kell rendelkeznie ahhoz, hogy táblákat és felhasználókat hozzon létre, illetve módosítsa az adatbázis tartalmát. Amennyiben nem Ön az adminisztrátor, a megfelelő embertől be kell szereznie az adatokat.<br /><br />	- Sugar adatbázis felhasználónév és jelszó. A felhasználó lehet maga az adminisztrátor, de kijelölhet másik létező adatbázis felhasználót is. Ha új felhasználót szeretne létrehozni, a telepítés során megteheti azt. <br /><br />Az egyéni telepítéshez mindezeken felül az alábbi információkra lesz szüksége:<br /><br />	- a Sugar elérésu URL-je. Az URL-nek tartalmaznia kell a kiszolgáló nevét vagy IP címét.<br /><br />	- [opcionális] a munkamenet könyvtár elérési útvonala, amennyiben saját könyvtárral kíván dolgozni<br /><br />	- [opcionális] a napló könyvtár elérési útvonala, amennyiben saját napló könyvtárat kíván használni<br /><br />	- [opcionális] alkalmazás azonosító, amennyiben nem a rendszer generálta azonosítót kívánja használni<br /><br />	- karakterkészlet<br /><br />Bővebb leírásért, kérem, olvassa el a telepítési útmutatót!",
    'LBL_WELCOME_PLEASE_READ_BELOW' => 'A telepítés előtt, kérem, olvassa el az alábbi fontos információkat! Az információk segítenek meghatározni, hogy készen áll-e az alkalmazás telepítésére.',


	'LBL_WELCOME_2'						=> 'A dokumentáció telepítéséhez, kérjük látpgasson el az alábbi oldalra<a href="http://www.sugarcrm.com/crm/installation" target="_blank">Sugar Wiki</a>.<BR><BR>Ha Sugar CRM támogató mérnöki segítségre van szüksége a telepítéshez, jelentkezzen be a <a target="_blank" href="http://support.sugarcrm.com">Sugar CRM Támogatás Portáljára</a> és nyújtson be egy támogatást igénylő esetet.',
	'LBL_WELCOME_CHOOSE_LANGUAGE'		=> 'Válasszon nyelvet',
	'LBL_WELCOME_SETUP_WIZARD'			=> 'Telepítő Varázsló',
	'LBL_WELCOME_TITLE_WELCOME'			=> 'Üdvözöljük a SugarCRM-ben',
	'LBL_WELCOME_TITLE'					=> 'SugarCRM Telepítő Varázsló',
	'LBL_WIZARD_TITLE'					=> 'Sugar Telepítő Varázsló',
	'LBL_YES'							=> 'Igen',
    'LBL_YES_MULTI'                     => 'Igen - multibájt',
	// OOTB Scheduler Job Names:
	'LBL_OOTB_WORKFLOW'		=> 'Munkafolyamat feladatainak végrehajtása',
	'LBL_OOTB_REPORTS'		=> 'Jelentéskészítő ütemezett feladatok futtatása',
	'LBL_OOTB_IE'			=> 'Ellenőrizze a bejövő postaládákat',
	'LBL_OOTB_BOUNCE'		=> 'Email-kampány visszapattanóinak éjszakai feldolgozása',
    'LBL_OOTB_CAMPAIGN'		=> 'Éjszakai email-kampány indítása',
	'LBL_OOTB_PRUNE'		=> 'Adatbázis vágása a hónap első napján',
    'LBL_OOTB_TRACKER'		=> 'Követő táblázatok vágása',
    'LBL_OOTB_SEND_EMAIL_REMINDERS' => 'Futtassa az Email Emlékeztető Értesítéseket',
    'LBL_UPDATE_TRACKER_SESSIONS' => 'tracker_sessions tábla frissítése',
    'LBL_OOTB_CLEANUP_QUEUE' => 'Munkalista törlése',


    'LBL_FTS_TABLE_TITLE'     => 'Teljes szövegre vonatkozó keresési beállítások megadása',
    'LBL_FTS_HOST'     => 'Kiszolgáló',
    'LBL_FTS_PORT'     => 'Port',
    'LBL_FTS_TYPE'     => 'Keresőmotor típusa',
    'LBL_FTS_HELP'      => 'A teljes szövegre vonatkozó keresés engedélyezéséhez válassza ki a keresőmotor típusát és adja meg  annak portját és kiszolgálóját! A Sugar beépített támogatást tartalmaz az elasticsearch motorhoz.',
    'LBL_FTS_REQUIRED'    => 'Elastic Search szükséges.',
    'LBL_FTS_CONN_ERROR'    => 'Nem sikerült csatlakozni a teljes szövegű keresés szerverre, kérjük ellenőrízze beállításait.',
    'LBL_FTS_NO_VERSION_AVAILABLE'    => 'Nem elérhető a teljes szövegű keresés szerver verziója, kérjük ellenőrízze beállításait.',
    'LBL_FTS_UNSUPPORTED_VERSION'    => 'A rugalmas keresés nem támogatott verzióját észleltük. Kérjük használja az alábbi változatokat: %s',

    'LBL_PATCHES_TITLE'     => 'Legutolsó javító csomagok telepítése',
    'LBL_MODULE_TITLE'      => 'Nyelvi csomagok telepítése',
    'LBL_PATCH_1'           => 'Ha ki akarja hagyni ezt a lépést, kattintson a Tovább gombra.',
    'LBL_PATCH_TITLE'       => 'Javító csomag',
    'LBL_PATCH_READY'       => 'A következő javító csomagok állnak készen a telepítésre:',
	'LBL_SESSION_ERR_DESCRIPTION'		=> "A SugarCRM-ben lévő PHP munkamenetek fontos információkat tárolnak a web szerverre való kapcsolódás során. Az Ön PHP telepítése nincs megfelelően beállítva ehhez.<br /><br />Gyakori probléma, hogy a &#39;session.save_path&#39; útvonal nem valós könyvtárra mutat.<br /><br />Kérem, javítsa a PHP beállításait a php.ini fájlban!",
	'LBL_SESSION_ERR_TITLE'				=> 'PHP munkamenet konfigurációs hiba',
	'LBL_SYSTEM_NAME'=>'Rendszernév',
    'LBL_COLLATION' => 'Egybevetési beállítások',
	'LBL_REQUIRED_SYSTEM_NAME'=>'Adja meg a SugarCRM példányának rendszer nevét.',
	'LBL_PATCH_UPLOAD' => 'Válasszon ki egy javító csomagot a számítógépéről!',
	'LBL_BACKWARD_COMPATIBILITY_ON' => 'Php visszamenőleges kompatibilitási mód be van kapcsolva. A folytatáshoz állítsa a zend.ze1_compatibility_mode -ot  "off"-ra',

    'meeting_notification_email' => array(
        'name' => 'Találkozóértesítések emailekben',
        'subject' => 'SugarCRM találkozó - $event_name ',
        'description' => 'A rendszer ezt a sablont alkalmazza, amikor találkozóértesítést küld egy felhasználónak.',
        'body' => '<div>
	<p>Címzett: $assigned_user</p>

	<p>$assigned_by_user meghívót küldött egy találkozóra</p>

	<p>Tárgy: $event_name<br/>
	Kezdés dátuma: $start_date<br/>
	Befejezés dátuma: $end_date</p>

	<p>Leírás: $description</p>

	<p>Találkozóra vonatkozó meghívó elfogadása:<br/>
	<<a href="$accept_link">$accept_link</a>></p>
	<p>Találkozóra vonatkozó meghívó feltételes elfogadása:<br/>
	<<a href="$tentative_link">$tentative_link</a>></p>
	<p>Találkozóra vonatkozó meghívó elutasítása:<br/>
	<<a href="$decline_link">$decline_link</a>></p>
</div>',
        'txt_body' =>
            'Címzett: $assigned_user

$assigned_by_user meghívót küldött egy találkozóra

Tárgy: $event_name
Kezdés dátuma: $start_date
Befejezés dátuma: $end_date

Leírás: $description

Találkozóra vonatkozó meghívó elfogadása
<$accept_link>

Találkozóra vonatkozó meghívó feltételes elfogadása
<$tentative_link>

Találkozóra vonatkozó meghívó elutasítása
<$decline_link>',
    ),

    'call_notification_email' => array(
        'name' => 'Hívásértesítések emailekben',
        'subject' => 'SugarCRM hívás - $event_name ',
        'description' => 'A rendszer ezt a sablont alkalmazza, amikor hívásértesítést küld egy felhasználónak.',
        'body' => '<div>
	<p>Címzett: $assigned_user</p>

	<p>$assigned_by_user meghívót küldött egy találkozóra</p>

	<p>Tárgy: $event_name<br/>
	Kezdés dátuma: $start_date<br/>
	Időtartam: $hoursh, $minutesm</p>

	<p>Leírás: $description</p>

	<p>Hívás elfogadása:<br/>
	<<a href="$accept_link">$accept_link</a>></p>
	<p>Hívás feltételes elfogadása:<br/>
	<<a href="$tentative_link">$tentative_link</a>></p>
	<p>Hívás elutasítása:<br/>
	<<a href="$decline_link">$decline_link</a>></p>
</div>',
        'txt_body' =>
            'Címzett: $assigned_user

$assigned_by_user meghívót küldött egy hívásra

Tárgy: $event_name
Kezdés dátuma: $start_date
Időtartam: $hoursh, $minutesm

Leírás: $description

Hívás elfogadása
<$accept_link>

Hívás feltételes elfogadása
<$tentative_link>

Hívás elutasítása
<$decline_link>',
    ),

    'assigned_notification_email' => array(
        'name' => 'Hozzárendelési értesítés emailek',
        'subject' => 'SugarCRM - $module_name hozzárendelve ',
        'description' => 'A rendszer ezt a sablont alkalmazza, amikor feladathozzárendelést küld egy felhasználónak.',
        'body' => '<div>
<p>$assigned_by_user hozzárendelt egy&nbsp;$module_name modult a következő felhasználóhoz:&nbsp;$assigned_user.</p>

<p>Ezt a(z)&nbsp;$module_name modult áttekintheti itt:<br/>
	<<a href="$module_link">$module_link</a>></p>
</div>',
        'txt_body' =>
            '$assigned_by_user hozzárendelt egy $module_name modult a következő felhasználóhoz: $assigned_user.

Ezt a(z) $module_name modult áttekintheti itt:
<$module_link>',
    ),

    'scheduled_report_email' => array(
        'name' => 'Beütemezett jelentés emailek',
        'subject' => 'Beütemezett jelentés: $report_name, dátum: $report_time',
        'description' => 'A rendszer ezt a sablont alkalmazza, amikor beütemezett jelentést küld egy felhasználónak.',
        'body' => '<div>
<p>Tisztelt $assigned_user,</p>
<p>Csatolmányként küldünk egy automatikusan generált jelentést, amelyet beütemeztek az Ön számára.</p>
<p>Jelentés neve: $report_name</p>
<p>Jelentés futtatásának dátuma és ideje: $report_time</p>
</div>',
        'txt_body' =>
            'Tisztelt $assigned_user,

Csatolmányként küldünk egy automatikusan generált jelentést, amelyet beütemeztek az Ön számára.

Jelentés neve: $report_name

Jelentés futtatásának dátuma és ideje: $report_time',
    ),

    'comment_log_mention_email' => [
        'name' => 'Rendszer megjegyzésnapló email értesítés',
        'subject' => 'SugarCRM - $initiator_full_name megemlítette Önt ebben: $singular_module_name',
        'description' => 'A sablont a rendszer felhasználóknak küldött email értesítéseknél alkalmazza, amelyekkel a felhasználót tájékoztatja a megjegyzésnaplóban való megemlítésről.',
        'body' =>
            '<div>
                <p>Az Ön neve felmerült a következő rekord megjegyzésnaplójában:  <a href="$record_url">$record_name</a></p>
                <p>A megjegyzés megtekintéséhez lépjen be a Sugar rendszerbe.</p>
            </div>',
        'txt_body' =>
'Az Ön neve felmerült a következő rekord megjegyzésnaplójában: $record_name
            A megjegyzés megtekintéséhez lépjen be a Sugar rendszerbe.',
    ],

    'advanced_password_new_account_email' => array(
        'subject' => 'Új kliens információ',
        'description' => 'A sablont akkor használják, amikor a rendszergazda új jelszót küld egy felhasználónak.',
        'body' => 'Ez az Ön felhasználóneve és ideiglenes jelszava:<br />Felhasználónév: $contact_user_user_name<br />Jelszó: $contact_user_user_hash<br /><br />$config_site_url<br /><br />Miután belépett a fenti jelszót használva, szükséges lehet a jelszót megváltoztatni saját választása szerint.',
        'txt_body' =>
'Ez az Ön felhasználóneve és ideiglenes jelszava: Felhasználónév: contact_user_user_name Jelszó: contact_user_user_hash config_site_url Miután belépett a fenti jelszót használva, szükséges lehet a jelszót megváltoztatni saját választása szerint.',
        'name' => 'Rendszer által generált jelszó email',
        ),
    'advanced_password_forgot_password_email' => array(
        'subject' => 'Kliens jelszavának visszaállítása',
        'description' => "A sablont akkor használják, amikor egy felhasználónak emailt küldenek, jelszavának visszaállítására mutató linkkel.",
        'body' => 'Ön nemrég kezdeményezte a $contact_user_pwd_last_changed oldalon fiókja jelszavának visszaállítását.<br />Kattintson az alábbi linkre a jelszó visszaállításához:<br />$contact_user_link_guid',
        'txt_body' =>
'Ön nemrég kezdeményezte a $contact_user_pwd_last_changed oldalon fiókja jelszavának visszaállítását. Kattintson az alábbi linkre a jelszó visszaállításához: $contact_user_link_guid',
        'name' => 'Elfelejtett jelszó email',
        ),

'portal_forgot_password_email_link' => [
    'name' => 'Portál elfelejtett jelszó e-mail',
    'subject' => 'Kliens jelszavának visszaállítása',
    'description' => 'A sablont akkor használják, amikor egy felhasználónak e-mailt küldenek a portál jelszavának visszaállítására mutató linkkel.',
    'body' => '<div><table border=\"0\" cellspacing=\"0\" cellpadding=\"0\" width="550" align=\"\&quot;\&quot;center\&quot;\&quot;\"><tbody><tr><td colspan=\"2\"><p>Ön nemrég kezdeményezte a kliens jelszavának visszaállítását. </p><p>Kattintson az alábbi linkre a jelszó visszaállításához:</p><p> <a href="$portal_user_link_guid">$portal_user_link_guid</a> </p> </td> </tr><tr><td colspan=\"2\"></td> </tr> </tbody></table> </div>',
    'txt_body' =>
'
    Ön nemrég kezdeményezte a kliens jelszavának visszaállítását.
    Kattintson az alábbi linkre a jelszó visszaállításához:
    $portal_user_link_guid',
],

    'portal_password_reset_confirmation_email' => [
        'name' => 'Portál jelszavának visszaállítását megerősítő e-mail',
        'subject' => 'Visszaállítottuk a kliens jelszavát',
        'description' => 'Ezt a sablont megerősítés küldésére használjuk a portál felhasználójának a kliens jelszó visszaállításáról.',
        'body' => '<div><table border=\"0\" cellspacing=\"0\" cellpadding=\"0\" width="550" align=\"\&quot;\&quot;center\&quot;\&quot;\"><tbody><tr><td colspan=\"2\"><p>Ez az e-mail igazolja, hogy a portál kliens jelszavát visszaállítottuk. </p><p>Jelentkezzen be a portálba az alábbi link használatával:</p><p> <a href="$portal_login_url">$portal_login_url</a> </p> </td> </tr><tr><td colspan=\"2\"></td> </tr> </tbody></table> </div>',
        'txt_body' =>
            '
    Ez az e-mail igazolja, hogy a portál kliens jelszavát visszaállítottuk.
    Jelentkezzen be a portálba az alábbi link használatával:
    $portal_login_url',
    ],
);
