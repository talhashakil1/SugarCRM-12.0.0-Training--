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
	'LBL_BASIC_SEARCH'					=> 'Hae',
	'LBL_ADVANCED_SEARCH'				=> 'Laaja haku',
	'LBL_BASIC_TYPE'					=> 'Perustyyppi',
	'LBL_ADVANCED_TYPE'					=> 'Tarkennettu tyyppi',
	'LBL_SYSOPTS_1'						=> 'Valitse seuraavista alla olevista järjestelmän konfigurointivaihtoehdoista.',
    'LBL_SYSOPTS_2'                     => 'Millaista tietokantaa käytetään asennettavana olevassa Sugar-instanssissa?',
	'LBL_SYSOPTS_CONFIG'				=> 'Järjestelmäkonfiguraatio',
	'LBL_SYSOPTS_DB_TYPE'				=> '',
	'LBL_SYSOPTS_DB'					=> 'Määritä tietokannan tyyppi',
    'LBL_SYSOPTS_DB_TITLE'              => 'Tietokannan tyyppi',
	'LBL_SYSOPTS_ERRS_TITLE'			=> 'Korjaa seuraavat virheet ennen kuin jatkat:',
	'LBL_MAKE_DIRECTORY_WRITABLE'      => 'Tee seuraavat hakemistot kirjoitettaviksi:',


    'ERR_DB_LOGIN_FAILURE_IBM_DB2'		=> 'Annettu tietokantahost, käyttäjätunnus ja/tai salasana ei kelpaa, ja yhteyttä tietokantaan ei voitu muodostaa. Anna kelvollinen host, käyttäjätunnus ja salasana.',
    'ERR_DB_IBM_DB2_CONNECT'			=> 'Annettu tietokantahost, käyttäjätunnus ja/tai salasana ei kelpaa, ja yhteyttä tietokantaan ei voitu muodostaa. Anna kelvollinen host, käyttäjätunnus ja salasana.',
    'ERR_DB_IBM_DB2_VERSION'			=> 'Sugar ei tue DB2-versiotasi (versio %s). Sinun pitää asentaa versio, jota Sugar tukee. Julkaisutiedoissa oleva yhteensopivuusmatriisi sisältää listan tuetuista DB2-versioista.',

	'LBL_SYSOPTS_DB_DIRECTIONS'			=> 'Sinulla pitää olla Oracle client asennettuna ja konfiguroituna jos valitset Oraclen.',
	'ERR_DB_LOGIN_FAILURE_OCI8'			=> 'Annettu tietokantahost, käyttäjätunnus ja/tai salasana ei kelpaa, ja yhteyttä tietokantaan ei voitu muodostaa. Anna kelvollinen host, käyttäjätunnus ja salasana.',
	'ERR_DB_OCI8_CONNECT'				=> 'Annettu tietokantahost, käyttäjätunnus ja/tai salasana ei kelpaa, ja yhteyttä tietokantaan ei voitu muodostaa. Anna kelvollinen host, käyttäjätunnus ja salasana.',
	'ERR_DB_OCI8_VERSION'				=> 'Sugar ei tue Oracle-versiotasi (versio %s). Sinun pitää asentaa versio, jota Sugar tukee. Julkaisutiedoissa oleva yhteensopivuusmatriisi sisältää listan tuetuista Oracle-versioista.',
    'LBL_DBCONFIG_ORACLE'               => 'Syötä tieteokannallesi nimi. Tämä tulee olemaan käyttäjällesi määritetty oletus-tablespace ((SID tnsnames.ora:ssa.)',
	// seed Ent Reports
	'LBL_Q'								=> 'Myyntimahdollisuusquery',
	'LBL_Q1_DESC'						=> 'Myyntimahdollisuudet tyypeittäin',
	'LBL_Q2_DESC'						=> 'Myyntimahdollisuudet asiakkaittain',
	'LBL_R1'							=> '6 kuukauden myyntisuppiloraportti',
	'LBL_R1_DESC'						=> 'Seuraavan 6 kuukauden myyntimahdollisuudet kuukausittain ja tyypeittäin',
	'LBL_OPP'							=> 'Myyntimahdollisuus-Data Set',
	'LBL_OPP1_DESC'						=> 'Tässä voit muuttaa mukautetun kyselyn käyttötuntumaa',
	'LBL_OPP2_DESC'						=> 'Tämä query pinotaan ensimmäisen queryn alle raportissa',
    'ERR_DB_VERSION_FAILURE'			=> 'Ei voida tarkistaa tietokannan versiota.',

	'DEFAULT_CHARSET'					=> 'UTF-8',
    'ERR_ADMIN_USER_NAME_BLANK'         => 'Anna käyttäjätunnus Sugarin järjestelmänvalvojakäyttäjälle.',
	'ERR_ADMIN_PASS_BLANK'				=> 'Anna salasana Sugarin järjestelmänvalvojakäyttäjälle.',

    'ERR_CHECKSYS'                      => 'Havaittiin virheitä yhteensopivuustarkistuksen aikana. Jotta SugarCRM-asennus toimisi kunnolla, suorita tarvittavat toimet korjataksesi alla listatut ongelmat ja paina <i>Tarkista uudelleen</i>-painiketta, tai yritä asennusta uudelleen.',
    'ERR_CHECKSYS_CALL_TIME'            => '<code>Allow Call Time Pass Reference</code> on <code>On</code> (tämä piäisi asettaa <code>Off</code>:iksi <code>php.ini</code>-tiedostossa)',

	'ERR_CHECKSYS_CURL'					=> 'Ei löydy: Sugar Scheduler toimii rajoitetuin toiminnoin. Sähköpostien arkistointipalvelu ei toimi.',
    'ERR_CHECKSYS_IMAP'					=> 'Ei löydetty: InboundEmail ja kampanjat (Sähköposti) vaativat IMAP kirjastot. Kumpikaan ei toimi.',
	'ERR_CHECKSYS_MSSQL_MQGPC'			=> 'Magic Quotes GPC ei voi olla ‘On’ kun käytetään MS SQL Serveriä.',
	'ERR_CHECKSYS_MEM_LIMIT_0'			=> 'Varoitus:',
	'ERR_CHECKSYS_MEM_LIMIT_1'			=> '(Aseta tämä arvoon <code>',
	'ERR_CHECKSYS_MEM_LIMIT_2'			=> 'M</code> tai suuremmaksi <code>php.ini</code>-tiedostossa)',
	'ERR_CHECKSYS_MYSQL_VERSION'		=> 'Minimiversio on 4.1.2 - löydettiin:',
	'ERR_CHECKSYS_NO_SESSIONS'			=> 'Ei voitu kirjoittaa tai lukea sessiomuuttujia. Ei voida jatkaa asennusta.',
	'ERR_CHECKSYS_NOT_VALID_DIR'		=> 'Kelpaamaton hakemisto',
	'ERR_CHECKSYS_NOT_WRITABLE'			=> 'Varoitus: ei voida kirjoittaa',
	'ERR_CHECKSYS_PHP_INVALID_VER'		=> 'Sugar ei tue PHP-versiotasi. Sinun pitää asentaa versio Sugarin kanssa yhteensopiva versio. Katso julkaisutiedoissa olevaa yhteensopivuusmatriisia tuetuille PHP-versioille. Sinun versiosi on',
	'ERR_CHECKSYS_IIS_INVALID_VER'      => 'Sugar ei tue IIS-versiotasi. Sinun pitää asentaa Sugarin kanssa yhteensopiva versio. Katso julkaisutiedoissa olevaa yhteensopivuusmatriisia tuetuille IIS-versioille. Versiosi on',
    'ERR_CHECKSYS_FASTCGI'              => 'Havaittiin että et käytä FastCGI-käsittelykartoitusta PHP:lle. Sinun pitää asentaa/konfiguroida Sugarin kanssa yhteensopiva versio. Katso tuetut versiot julkaisutiedoissa olevasta yhteensopivuusmatriisista. Katso yksityiskohdat osoitteesta <a href=\'http://www.iis.net/php\' target=\'_blank\'>http://www.iis.net/php/</a>. ',
	'ERR_CHECKSYS_FASTCGI_LOGGING'      => 'Jotta saisit optimaalisen kokemuksen käyttäessäsi IIS/FastCGI sapi:a, aseta <code>fastcgi.logging</code> arvoon <code>0</code> <code>php.ini</code>-tiedostossa.',
    'ERR_CHECKSYS_PHP_UNSUPPORTED'		=> 'Tukematon PHP versio asennettuna: (versio&nbsp;',
    'LBL_DB_UNAVAILABLE'                => 'Tietokanta ei ole käytettävissä',
    'LBL_CHECKSYS_DB_SUPPORT_NOT_AVAILABLE' => 'Tietokantatukea ei löytynyt. Varmista, että sinulla on tarvittavat ajurit jollekin seuraavista tuetuista tietokantatyypeistä: MySQL, MS SQLServer, Oracle tai DB2. Joudut mahdollisesti poistamaan kommenttimerkinnän PHP.ini-tiedoston laajennuksesta tai kääntää uudelleen oikealla binääritiedostolla riippuen käyttämästäsi PHP-versiosta. Katso PHP-oppaasta lisätietoja tietokantatuen käyttöönotosta.',
    'LBL_CHECKSYS_XML_NOT_AVAILABLE'        => 'XML-jäsenninkirjastoja käyttäviä Sugarin tarvitsemia funktioita ei löydetty. Sinun pitää ehkä poistaa kommenttimerkintä lisäosan edestä <code>php.ini</code>-tiedostossa, tai kääntää uudelleen oikealla binääritiedostolla, PHP-versiostasi riippuen. Katso lisätietoja PHP-manuaalista.',
    'LBL_CHECKSYS_CSPRNG' => 'Satunnaislukugeneraattori',
    'ERR_CHECKSYS_MBSTRING'             => 'Multibyte Strings PHP -lisäosaan (<code>mbstring</code>) liittyviä Sugarin tarvitsemia funktioita ei löydetty.<br /><br />Usein mbstring-moduuli ei ole käytössä oletuksena ja pitää aktivoida --enable-mbstring -komennolla kun PHPn binääritiedostoa käännetään. Katso PHP-manuaalista lisätietoja miten mbstring-tuki saadaan käyttöön.',
    'ERR_CHECKSYS_SESSION_SAVE_PATH_NOT_SET'       => '<code>session.save_path</code> asetus PHPn asetustiedostossa (<code>php.ini</code>) ei ole asetettu tai asetetaan kansioon, jota ei ole olemassa. Sinun pitää ehkä valita <code>save_path</code> asetus <code>php.ini</code>ssä tai tarkistaa, että kansiot, johon save_path osoittaa, ovat olemassa.',
    'ERR_CHECKSYS_SESSION_SAVE_PATH_NOT_WRITABLE'  => '<code>session.save_path</code>-asetus <code>php.ini</code>-tiedostossasi on asetettu kansioon mihin ei voida kirjoittaa. Ota tarvitut askeleet kansion kirjoitusluvan saamiseksi.<br />Käyttöjärjestelmästäsi riippuen tämä vaatii joko lupien muuttamista suorittamalla komennolla <code>chmod 766</code>, tai oikeaklikkaamalla tiedostonimeä päästäksesi tiedoston ominaisuuksiin ja poistamalla Vain luku-merkintä.',
    'ERR_CHECKSYS_CONFIG_NOT_WRITABLE'  => 'Konfigurointitiedosto on olemassa muttei kirjoitettavissa. Ota tarvitut askeleet tiedoston kirjoitusluvan saamiseksi. Käyttöjärjestelmästäsi riippuen tämä vaatii joko lupien muuttamista suorittamalla komento <code>chmod 766<code/>, tai oikeaklikkaamalla tiedostonimeä päästäksesi tiedoston ominaisuuksiin ja poistamalla Vain luku -merkintä.',
    'ERR_CHECKSYS_CONFIG_OVERRIDE_NOT_WRITABLE'  => 'Konfiguroinnin ohitustiedosto on olemassa muttei kirjoitettavissa. Ota tarvitut askeleet tiedoston kirjoitusluvan saamiseksi. Käyttöjärjestelmästäsi riippuen tämä vaatii joko lupien muuttamista suorittamalla komento <code>chmod 766</code>, tai oikeaklikkaamalla tiedostonimeä päästäksesi tiedoston ominaisuuksiin ja poistamalla Vain luku -merkintä.',
    'ERR_CHECKSYS_CUSTOM_NOT_WRITABLE'  => 'Custom Directory on olemassa muttei kirjoitettavissa. Joudut joko vaihtamaan sen luvat (<code>chmod 766</code>) tai oikeaklikkaamaan sitä ja poistamalla Vain luku -valinta, käyttöjärjestelmästäsi riippuen. Ota tarvitut askeleet tiedoston kirjoitusluvan varmistamiseksi.',
    'ERR_CHECKSYS_FILES_NOT_WRITABLE'   => "vain luku",
	'ERR_CHECKSYS_SAFE_MODE'			=> 'Safe Mode on päällä (haluat varmaan ottaa sen pois päältä <code>php.ini</code>ssä)',
    'ERR_CHECKSYS_ZLIB'					=> 'Zlib-tukea ei löytynyt: SugarCRM:n suorituskyky kasvaa huomattavasti zlib-kompressoinnilla.',
    'ERR_CHECKSYS_ZIP'					=> 'Zip-tukea ei löytynyt: SugarCRM vaatii Zip-tuen voidakseen käsitellä pakattuja tiedostoja.',
    'ERR_CHECKSYS_BCMATH'				=> 'BCMATH-tukea ei löytynyt: SugarCRM vaatii BCMATH-tuen bignum-matematiikkaa varten.',
    'ERR_CHECKSYS_HTACCESS'             => '.htaccess-rewrite-testi epäonnistui. Tämä yleensä tarkoittaa, että Sugar-hakemistoosi ei ole konfiguroitu AllowOverrdiea.',
    'ERR_CHECKSYS_CSPRNG' => 'CSPRNG poikkeus',
	'ERR_DB_ADMIN'						=> 'Annettu tietokannan adminin käyttäjänimi ja/tai salasana on väärin, ja yhteyttä tietokantaan ei saatu. Syötä kelpaava käyttäjänimi ja salasana. (Virhe:&nbsp;',
    'ERR_DB_ADMIN_MSSQL'                => 'Annettu tietokannan adminin käyttäjänimi ja/tai salasana on väärin, ja yhteyttä tietokantaan ei saatu. Syötä kelpaava käyttäjänimi ja salasana.',
	'ERR_DB_EXISTS_NOT'					=> 'Määritetty tietokanta ei ole olemassa.',
	'ERR_DB_EXISTS_WITH_CONFIG'			=> 'Tietokanta on jo olemassa konfigurointidatalla. Suorittaaksesi asennuksen valitulla tietokannalla, suorita asennus uudelleen ja valitse: ‘Pudota ja luo uudestaan olemassa olevat SugarCRM-taulut?’ Päivittääksesi ohjelman käytä päivitystyökalua järjestlemänvalvojan konsolissa. Lue päivitysdokumentaatio <a href=\'http://www.sugarforge.org/content/downloads\' target=\'_new\'>täältä</a>.',
	'ERR_DB_EXISTS'						=> 'Annettu tietokantanimi on jo olemassa — ei voida luoda uutta tietokantaa samalla nimellä.',
    'ERR_DB_EXISTS_PROCEED'             => 'Annettu tietokantanimi on jo olemassa. Voit joko <ol><li>klikata <i>Takaisin</i> ja syöttää uuden tietokantanimen, tai</li><li>klikata <i>Seuraava</i> ja jatkaa, mutta olemassaolevat taulut tässä tietokannassa pudotetaan. <strong>Tämä tarkoittaa että taulut ja data tuhotaan.</strong></li></ol>',
	'ERR_DB_HOSTNAME'					=> 'Palvelimen nimi ei voi olla tyhjä.',
	'ERR_DB_INVALID'					=> 'Virheellinen tietokannan tyyppi valittu.',
	'ERR_DB_LOGIN_FAILURE'				=> 'Annettu tietokantahost, käyttäjätunnus ja/tai salasana ei kelpaa, ja yhteyttä tietokantaan ei voitu muodostaa. Anna kelvollinen host, käyttäjätunnus ja salasana.',
	'ERR_DB_LOGIN_FAILURE_MYSQL'		=> 'Annettu tietokantahost, käyttäjätunnus ja/tai salasana ei kelpaa, ja yhteyttä tietokantaan ei voitu muodostaa. Anna kelvollinen host, käyttäjätunnus ja salasana.',
	'ERR_DB_LOGIN_FAILURE_MSSQL'		=> 'Annettu tietokantahost, käyttäjätunnus ja/tai salasana ei kelpaa, ja yhteyttä tietokantaan ei voitu muodostaa. Anna kelvollinen host, käyttäjätunnus ja salasana.',
	'ERR_DB_MYSQL_VERSION'				=> 'Sugar ei tue MySQL-versiotasi (%s). Sinun pitää asentaa Sugarin kanssa yhteensopiva versio. Katso julkaisutiedoissa oleva yhteensopivuusmatriisi.',
	'ERR_DB_NAME'						=> 'Tietokannan nimi ei voi olla tyhjä.',
	'ERR_DB_NAME2'						=> "Tietokannan nimessä ei voi olla taka- ja etukenoviivoja (“\\” ja “/”) tai pisteitä (“.”)",
    'ERR_DB_MYSQL_DB_NAME_INVALID'      => "Tietokannan nimessä ei voi olla taka- ja etukenoviivoja (“\\” ja “/”) tai pisteitä (“.”)",
    'ERR_DB_MSSQL_DB_NAME_INVALID'      => "Tietokannan nimi ei voi alkaa numerolla, numero- tai at-merkillä (“#” ja “@”), eikä voi sisältää välilyöntiä eikä seuraavia merkkejä: '&quot;' (lainausmerkki), “'” (heittomerkki), “*”, “/”, “\\”, “?”, “:”, “<”, “>”, “&”, “!”, tai “-”",
    'ERR_DB_OCI8_DB_NAME_INVALID'       => "Tietokannan nimi voi sisältää ainoastaan aakkosnumeerisia merkkejä ja symboleja '#', '_', '-', ':', '.', '/' tai '$'",
	'ERR_DB_PASSWORD'					=> 'Sugarin tietokanta-adminille annetut salasanat eivät täsmää. Syötä samat salasanat uudelleen salasanakenttiin.',
	'ERR_DB_PRIV_USER'					=> 'Anna tietokanta-adminille käyttäjänimi. Käyttäjänimeä tarvitaan ensimmäiseen tietokannan yhdistämiseen.',
	'ERR_DB_USER_EXISTS'				=> 'Käyttäjänimi Sugarin tietokantakäyttäjälle on jo olemassa — ei voida luoda toista samalla nimellä. Syötä uusi käyttäjänimi.',
	'ERR_DB_USER'						=> 'Anna käyttäjätunnus Sugar tietokanta-adminille.',
	'ERR_DBCONF_VALIDATION'				=> 'Korjaa seuraavat virheet ennen kuin jatkat:',
    'ERR_DBCONF_PASSWORD_MISMATCH'      => 'Sugarin tietokantakäyttäjälle annetut salasanat eivät täsmää. Syötä uudelleen samat salasanat salasanakenttiin.',
	'ERR_ERROR_GENERAL'					=> 'Havaittiin seuraavat virheet:',
	'ERR_LANG_CANNOT_DELETE_FILE'		=> 'Ei voitu poistaa tiedostoa:',
	'ERR_LANG_MISSING_FILE'				=> 'Tiedostoa ei löydetty:',
	'ERR_LANG_NO_LANG_FILE'			 	=> 'Kielipakettitiedostoa ei löydetty:',
	'ERR_LANG_UPLOAD_1'					=> 'Latauksessa (uploadissa) oli ongelma. Yritä uudelleen.',
	'ERR_LANG_UPLOAD_2'					=> 'Kielipakettien on oltava ZIP-arkistoja.',
	'ERR_LANG_UPLOAD_3'					=> 'PHP ei voinut siirtää temp-tiedostoa päivityshakemistoon.',
	'ERR_LICENSE_MISSING'				=> 'Puuttuvat pakolliset kentät',
	'ERR_LICENSE_NOT_FOUND'				=> 'Lisenssitiedostoa ei löydy!',
	'ERR_LOG_DIRECTORY_NOT_EXISTS'		=> 'Syötetty lokihakemisto ei ole kelvollinen hakemisto.',
	'ERR_LOG_DIRECTORY_NOT_WRITABLE'	=> 'Syötetty lokihakemisto ei ole kirjoitettava hakemisto.',
	'ERR_LOG_DIRECTORY_REQUIRED'		=> 'Lokihakemisto tarvitaan jos haluat määrittää oman.',
	'ERR_NO_DIRECT_SCRIPT'				=> 'Ei voitu käsitellä skriptiä suoraan.',
	'ERR_NO_SINGLE_QUOTE'				=> 'Ei voida käyttää yksittäistä lainausmerkkiä nimikkeelle',
	'ERR_PASSWORD_MISMATCH'				=> 'Sugarin admin-käyttäjälle annetut salasanat eivät täsmää. Syötä samat salasanat salasanakenttiin.',
	'ERR_PERFORM_CONFIG_PHP_1'			=> 'Ei voi kirjoittaa <code><span class=stop>config.php</span></code>-tiedostoon.',
	'ERR_PERFORM_CONFIG_PHP_2'			=> 'Voit jatkaa asennusta manuaalisesti luomalla <code>config.php</code> tiedoston ja liittämällä konfigurointitiedot alla osaksi <code>config.php</code>-tiedostoa. Sinun kuitenkin <strong>täytyy</strong> luoda <code>config.php</code>-tiedosto ennen kuin jatkat seuraavaan vaiheeseen.',
	'ERR_PERFORM_CONFIG_PHP_3'			=> 'Muistitko luoda <code>config.php</code> tiedoston?',
	'ERR_PERFORM_CONFIG_PHP_4'			=> 'Varoitus: ei voitu kirjoittaa <code>config.php</code>-tiedostoon. Varmista se on olemassa.',
	'ERR_PERFORM_HTACCESS_1'			=> 'Ei voi kirjoittaa tiedostoon',
	'ERR_PERFORM_HTACCESS_2'			=> '.',
	'ERR_PERFORM_HTACCESS_3'			=> 'Jos haluat estää lokitiedostoon pääsyn selaimesta, luo lokitiedoston hakemistoon <code>.htaccess</code>-tiedosto rivillä:',
	'ERR_PERFORM_NO_TCPIP'				=> '<strong>Ei havaittu internet-yhteyttä.</strong> Kun sinulla on yhteys, mene sivulle <a href=\'http://www.sugarcrm.com/home/index.php?option=com_extended_registration&task=register\'>http://www.sugarcrm.com/home/index.php?option=com_extended_registration&task=register</a> rekisteröidäksesi SugarCRM:llä. Jos saamme tietää pikkuisen miten yrityksenne aikoo käyttää SugarCRM:ää, voimme varmistaa että annamme aina oikean ohjelman yrityksenne tarpeisiin.',
	'ERR_SESSION_DIRECTORY_NOT_EXISTS'	=> 'Syötetty sessiohakemisto ei ole olemassa.',
	'ERR_SESSION_DIRECTORY'				=> 'Syötettyyn sessiohakemistoon ei voida kirjoittaa.',
	'ERR_SESSION_PATH'					=> 'Sessiohakemisto on tarpeen jos haluat määrittää omasi.',
	'ERR_SI_NO_CONFIG'					=> 'Et sisällyttänyt <code>config_si.php</code> -tiedostoa document rootissa, tai et määritänyt <code>$sugar_config_si</code> -muuttujaa <code>config.php</code>-tiedostossa',
	'ERR_SITE_GUID'						=> 'Sovelluksen ID on pakollinen jos haluat spesifikoida omasi.',
    'ERROR_SPRITE_SUPPORT'              => "GD-kirjastoa ei löydetty, joten ei voida käyttää CSS Sprite-toiminnallisuutta.",
	'ERR_UPLOAD_MAX_FILESIZE'			=> 'Varoitus: PHP kokoonpano vaatii muutosta jotta vähintään 6 Mt:n tiedostoja voidaan ladata.',
    'LBL_UPLOAD_MAX_FILESIZE_TITLE'     => 'Lataa tiedosto koko',
	'ERR_URL_BLANK'						=> 'Tarjota Sugar-instanssin perus-URL.',
	'ERR_UW_NO_UPDATE_RECORD'			=> 'Ei löydetty tämän asennuslokia:',
    'ERROR_FLAVOR_INCOMPATIBLE'         => 'Ladattu tiedosto ei ole yhteensopiva tämän Sugar-version kanssa (Professional-, Enterprise- tai Ultimate-versio): ',
	'ERROR_LICENSE_EXPIRED'				=> "Virhe: lisenssisi umpeutui",
	'ERROR_LICENSE_EXPIRED2'			=> "päivää sitten. Mene <a href='index.php?action=LicenseSettings&module=Administration'>lisenssinhallintasivulle</a> (järjestelmänhallinnan kautta) syöttääksesi uuden lisenssiavaimen. Jos et syötä uutta lisenssiavainta 30 päivän sisällä lisenssiavaimesi umpeutumisesta, et pääse enää kirjautumaan tähän sovellukseen.",
	'ERROR_MANIFEST_TYPE'				=> 'Manifestitiedoston tulee määrittää pakkaustyyppi.',
	'ERROR_PACKAGE_TYPE'				=> 'Manifestitiedosto määrittää tuntemattoman pakkaustyypin',
	'ERROR_VALIDATION_EXPIRED'			=> "Virhe: validaatioavaimesi umpeutui",
	'ERROR_VALIDATION_EXPIRED2'			=> "päivää sitten. Mene <a href='index.php?action=LicenseSettings&module=Administration'>lisenssinhallintasivulle</a> (järjestelmänhallinnan kautta) syöttääksesi uuden validaatioavaimen. Jos et syötä uutta validaatioavainta 30 päivän sisällä validaatioavaimesi umpeutumisesta, et pääse enää kirjautumaan tähän sovellukseen.",
	'ERROR_VERSION_INCOMPATIBLE'		=> 'Ladattu tiedosto ei ole yhteensopiva tämän Sugarin version kanssa:',

	'LBL_BACK'							=> 'Takaisin',
    'LBL_CANCEL'                        => 'Peruuta',
    'LBL_ACCEPT'                        => 'Hyväksyn',
	'LBL_CHECKSYS_1'					=> 'Jotta SugarCRM-installaatiosi toimii kunnolla, varmista että kaikki alla listatut järjestelmätarkistuskohteet ovat vihreitä. Jos yksikään on punainen, suorita tarvittavat toiminnot niiden korjaamiseen.<br /><br />Saadaksesi apua näissä järjestelmätarkistuksissa, katso <a href=\'http://www.sugarcrm.com/crm/installation\' target=\'_blank\'>Sugar Wiki</a>.',
	'LBL_CHECKSYS_CACHE'				=> 'Kirjoitettavat välimuistialihakemistot.',
    'LBL_DROP_DB_CONFIRM'               => 'Annettu tietokantanimi on jo olemassa. Voit joko <br />1. klikata Peruuta-nappulaa ja syöttää uuden tietokantanimen, tai<br />2. klikata Hyväksy-nappulaa ja jatkaa. Olemassaolevat taulut tässä tietokannassa pudotetaan. <strong>Tämä tarkoittaa että taulut ja data tuhotaan.</strong>',
	'LBL_CHECKSYS_CALL_TIME'			=> 'PHP Allow Call Time Pass Reference käännetty pois',
    'LBL_CHECKSYS_COMPONENT'			=> 'Komponentti',
	'LBL_CHECKSYS_COMPONENT_OPTIONAL'	=> 'Vapaaehtoiset komponentit',
	'LBL_CHECKSYS_CONFIG'				=> 'Kirjoitettava SugarCRM konfiguraatiotiedosto (<code>config.php</code>)',
	'LBL_CHECKSYS_CONFIG_OVERRIDE'		=> 'Kirjoitettava SugarCRM konfiguraatiotiedosto (<code>config_override.php</code>)',
	'LBL_CHECKSYS_CURL'					=> 'cURL-moduuli',
    'LBL_CHECKSYS_SESSION_SAVE_PATH'    => 'Session tallennuspolun asetus',
	'LBL_CHECKSYS_CUSTOM'				=> 'Kirjoitettava custom-hakemisto',
	'LBL_CHECKSYS_DATA'					=> 'Kirjoitettavat data-alihakemistot',
	'LBL_CHECKSYS_IMAP'					=> 'IMAP-moduuli',
	'LBL_CHECKSYS_MQGPC'				=> 'Magic Quotes GPC',
	'LBL_CHECKSYS_MBSTRING'				=> 'MB Strings Moduuli',
	'LBL_CHECKSYS_MEM_OK'				=> 'OK (ei rajoitusta)',
	'LBL_CHECKSYS_MEM_UNLIMITED'		=> 'OK (rajoittamaton)',
	'LBL_CHECKSYS_MEM'					=> 'PHP muistin raja',
	'LBL_CHECKSYS_MODULE'				=> 'Kirjoitettavat moduulialihakemistot ja -tiedostot',
	'LBL_CHECKSYS_MYSQL_VERSION'		=> 'MySQL versio',
	'LBL_CHECKSYS_NOT_AVAILABLE'		=> 'Ei saatavilla',
	'LBL_CHECKSYS_OK'					=> 'Ok',
	'LBL_CHECKSYS_PHP_INI'				=> 'PHP konfigurointitiedoston sijainti (<code>php.ini</code>):',
	'LBL_CHECKSYS_PHP_OK'				=> 'OK (ver',
	'LBL_CHECKSYS_PHPVER'				=> 'PHP:n versio',
    'LBL_CHECKSYS_IISVER'               => 'IIS versio',
    'LBL_CHECKSYS_FASTCGI'              => 'FastCGI',
	'LBL_CHECKSYS_RECHECK'				=> 'Tarkista uudelleen',
	'LBL_CHECKSYS_SAFE_MODE'			=> 'PHP Safe Mode sammutettu',
	'LBL_CHECKSYS_SESSION'				=> 'Kirjoitettava Session Save Path (',
	'LBL_CHECKSYS_STATUS'				=> 'Tila',
	'LBL_CHECKSYS_TITLE'				=> 'Järjestelmän tarkistuksen hyväksyminen',
	'LBL_CHECKSYS_VER'					=> 'Löydetty: (ver',
	'LBL_CHECKSYS_XML'					=> 'XML-jäsennys',
	'LBL_CHECKSYS_ZLIB'					=> 'Zlib Compression Moduuli',
	'LBL_CHECKSYS_ZIP'					=> 'ZIP Käsittely moduuli',
    'LBL_CHECKSYS_BCMATH'				=> 'Bignum-matematiikkamoduuli',
    'LBL_CHECKSYS_HTACCESS'				=> 'AllowOverride konfiguroitu .htaccess:lle',
    'LBL_CHECKSYS_FIX_FILES'            => 'Korjaa seuraavat tiedostot tai hakemistot ennen kuin jatkat:',
    'LBL_CHECKSYS_FIX_MODULE_FILES'     => 'Korjaa seuraavat moduuli hakemistot ja niissä olevat tiedostot, ennen kuin jatkat:',
    'LBL_CHECKSYS_UPLOAD'               => 'Kirjoitettava lataushakemisto (upload)',
    'LBL_CLOSE'							=> 'Sulje',
    'LBL_THREE'                         => '3',
	'LBL_CONFIRM_BE_CREATED'			=> 'luodaan',
	'LBL_CONFIRM_DB_TYPE'				=> 'Tietokannan tyyppi',
	'LBL_CONFIRM_DIRECTIONS'			=> 'Vahvista asetukset alla.  Jos haluat muuttaa jotakin arvoista, klikkaa Takaisin muokataksesi niitä.  Muuten, klikkaa Seuraava aloittaaksesi asennuksen.',
	'LBL_CONFIRM_LICENSE_TITLE'			=> 'Lisenssitiedot',
	'LBL_CONFIRM_NOT'					=> 'ei',
	'LBL_CONFIRM_TITLE'					=> 'Vahvista asetukset',
	'LBL_CONFIRM_WILL'					=> 'tulee',
	'LBL_DBCONF_CREATE_DB'				=> 'Luo tietokanta',
	'LBL_DBCONF_CREATE_USER'			=> 'Luo käyttäjä',
	'LBL_DBCONF_DB_DROP_CREATE_WARN'	=> 'Varoitus: Kaikki Sugar tiedot poistetaan <br /> jos tämä valintaruutu on valittuna.',
	'LBL_DBCONF_DB_DROP_CREATE'			=> 'Pudota ja luo uudestaan olemassa olevat Sugar-taulukot?',
    'LBL_DBCONF_DB_DROP'                => 'Pudota taulukot',
    'LBL_DBCONF_DB_NAME'				=> 'Tietokannan nimi',
	'LBL_DBCONF_DB_PASSWORD'			=> 'Sugar-tietokantakäyttäjän salasana',
	'LBL_DBCONF_DB_PASSWORD2'			=> 'Syötä uudestaan Sugar tietokannan käyttäjän salasana',
	'LBL_DBCONF_DB_USER'				=> 'Sugar-tietokantakäyttäjänimi',
    'LBL_DBCONF_SUGAR_DB_USER'          => 'Sugar-tietokantakäyttäjänimi',
    'LBL_DBCONF_DB_ADMIN_USER'          => 'Tietokannan administraattorin käyttäjänimi',
    'LBL_DBCONF_DB_ADMIN_PASSWORD'      => 'Tietokannan adminin salasana',
	'LBL_DBCONF_DEMO_DATA'				=> 'Populoidaanko tietokanta demodatalla?',
    'LBL_DBCONF_DEMO_DATA_TITLE'        => 'Valitse demodata',
	'LBL_DBCONF_HOST_NAME'				=> 'Isännän nimi',
	'LBL_DBCONF_HOST_INSTANCE'			=> 'Isäntäinstanssi',
	'LBL_DBCONF_HOST_PORT'				=> 'Portti',
    'LBL_DBCONF_SSL_ENABLED'            => 'Ota SSL-yhteys käyttöön',
	'LBL_DBCONF_INSTRUCTIONS'			=> 'Syötä tietokannan konfiguraatiotiedot alle. Jos olet epävarma siitä, mitä pitää syöttää, suosittelemme oletusarvoja.',
	'LBL_DBCONF_MB_DEMO_DATA'			=> 'Käytetäänkö monitavuista tekstiä demodatassa?',
    'LBL_DBCONFIG_MSG2'                 => 'Web-palvelimen (hostin) nimi missä tietokanta on (kuten localhost tai www.omadomain.com):',
    'LBL_DBCONFIG_MSG3'                 => 'Tietokannan nimi, joka sisältää datan Sugar-instanssille, jonka aiot asentaa:',
    'LBL_DBCONFIG_B_MSG1'               => 'Sugarin tietokannan asennusta varten tarvitaan tietokanta-adminin käyttäjätunnus (ja tämän salasana), jolla on oikeudet luoda tietokantatauluja ja käyttäjiä, ja joka voi kirjoittaa tietokantaan.',
    'LBL_DBCONFIG_SECURITY'             => 'Turvallisuussyistä voit määrittää erillisen tietokantakäyttäjän, joka yhdistää Sugar-tietokantaan. Tämän käyttäjän pitää voida lukea, kirjoittaa, ja päivittää tietokannassa olevia tietoja. Käyttäjä voi olla yllä määritetty tietokanta-adminkäyttäjä, tai voit syöttää uuden tai olemassa olevan käyttäjän tiedot.',
    'LBL_DBCONFIG_AUTO_DD'              => 'Tee se minulle',
    'LBL_DBCONFIG_PROVIDE_DD'           => 'Syötä olemassa olevan käyttäjän tiedot',
    'LBL_DBCONFIG_CREATE_DD'            => 'Syötä uuden käyttäjän tiedot',
    'LBL_DBCONFIG_SAME_DD'              => 'Sama kuin adminkäyttäjä',
	//'LBL_DBCONF_I18NFIX'              => 'Apply database column expansion for varchar and char types (up to 255) for multi-byte data?',
    'LBL_FTS'                           => 'Kokotekstihaku',
    'LBL_FTS_INSTALLED'                 => 'Asennettu',
    'LBL_FTS_INSTALLED_ERR1'            => 'Kokotekstihakuominaisuutta ei ole asennettu.',
    'LBL_FTS_INSTALLED_ERR2'            => 'Voit jatkaa asennusta muttet voi käyttää kokotekstihakua. Jos haluat kokotekstihakuominaisuuden, katso tietokantasi asennusohjeista miten saat sen, tai ota yhteyttä järjestelmänvalvojaasi.',
	'LBL_DBCONF_PRIV_PASS'				=> 'Etuoikeutetun tietokantakäyttäjän salasana',
	'LBL_DBCONF_PRIV_USER_2'			=> 'Onko yllä oleva tietokantakäyttäjä etuoikeutettu käyttäjä?',
	'LBL_DBCONF_PRIV_USER_DIRECTIONS'	=> 'Etuoikeutetulla tietokantakäyttäjällä pitää olla oikeudet luoda tietokanta, luoda ja pudottaa tauluja, ja luoda käyttäjiä. Etuoikeutettua käyttäjää käytetään ainoastaan näiden toimintojen tekemiseen asennuksen aikana. Voit käyttää yllä määritettyä tietokantakäyttäjää jos sillä käyttäjällä on tarpeelliset oikeudet.',
	'LBL_DBCONF_PRIV_USER'				=> 'Etuoikeutetun tietokantakäyttäjän nimi',
	'LBL_DBCONF_TITLE'					=> 'Tietokantakonfiguraatio',
    'LBL_DBCONF_TITLE_NAME'             => 'Tarjoa tietokannan nimi',
    'LBL_DBCONF_TITLE_USER_INFO'        => 'Tarjoa tietokannan käyttäjätiedot',
	'LBL_DISABLED_DESCRIPTION_2'		=> 'Kun tämä muutos on tehty, klikkaa <i>Aloita</i>-painiketta aloittaaksesi asennuksen. <em>Kun asennus on valmis, aseta <code>installer_locked</code>-muuttuja arvoon <code>true</code>.',
	'LBL_DISABLED_DESCRIPTION'			=> 'Asennusskripti on jo ajettu kerran. Turvallisuussyistä sen ajaminen uudestaan on estetty. Jos olet varma, että haluat ajaa sen uudelleen, muuta <code>config.php</code>-tiedostosta <code>installer_locked</code>-muuttuja arvoon <code>false</code>. Rivin tulisi näyttää tältä:',
	'LBL_DISABLED_HELP_1'				=> 'Asennusapua varten, käy SugarCRM:än',
    'LBL_DISABLED_HELP_LNK'               => 'http://www.sugarcrm.com/forums/',
	'LBL_DISABLED_HELP_2'				=> 'tukifoorumeilla',
	'LBL_DISABLED_TITLE_2'				=> 'SugarCRM:n asennus on estetty',
	'LBL_DISABLED_TITLE'				=> 'SugarCRM:n asennus estetty',
	'LBL_EMAIL_CHARSET_DESC'			=> 'Lokaalissasi useimmiten käytetty merkistö',
	'LBL_EMAIL_CHARSET_TITLE'			=> 'Lähtevän sähköpostin asetukset',
    'LBL_EMAIL_CHARSET_CONF'            => 'Lähtevän sähköpostin merkistö',
	'LBL_HELP'							=> 'Ohje',
    'LBL_INSTALL'                       => 'Asenna',
    'LBL_INSTALL_TYPE_TITLE'            => 'Asennusasetukset',
    'LBL_INSTALL_TYPE_SUBTITLE'         => 'Valitse asennuksen tyyppi',
    'LBL_INSTALL_TYPE_TYPICAL'          => '<b>Tyypillinen asennus</b>',
    'LBL_INSTALL_TYPE_CUSTOM'           => '<b>Mukautettu asennus</b>',
    'LBL_INSTALL_TYPE_MSG1'             => 'Avainta vaaditaan sovelluksen toiminnallisuutta varten, mutta sitä ei tarvita asennuksessa. Avainta ei tarvitse syöttää nyt, mutta avain pitää syöttää asennuksen jälkeen.',
    'LBL_INSTALL_TYPE_MSG2'             => 'Vaatii vähimmän määrän tietoa asennusta varten. Suositellaan uusille käyttäjille.',
    'LBL_INSTALL_TYPE_MSG3'             => 'Tarjoaa lisää vaihtoehtoja asennuksen aikana. Useimmat näistä ovat saatavilla myös asennuksen jälkeen admin näytöissä. Suositellaan edistyneille käyttäjille.',
	'LBL_LANG_1'						=> 'Käyttääksesi Sugarissa jotain muuta kuin oletuskieltä (US-English), voit nyt ladata ja asentaa kielipaketin. Kielipajetteja voi asentaa myöhemmin Sugarin hallintasivuilta. Jos haluat ohittaa tämän vaiheen, klikkaa Seuraava.',
	'LBL_LANG_BUTTON_COMMIT'			=> 'Asenna',
	'LBL_LANG_BUTTON_REMOVE'			=> 'Poista',
	'LBL_LANG_BUTTON_UNINSTALL'			=> 'Poista',
	'LBL_LANG_BUTTON_UPLOAD'			=> 'Uploadaa',
	'LBL_LANG_NO_PACKS'					=> 'Ei yhtään',
	'LBL_LANG_PACK_INSTALLED'			=> 'Seuraavat kielipaketit on asennettu:',
	'LBL_LANG_PACK_READY'				=> 'Seuraavat kielipaketit ovat valmiina asennettavaksi:',
	'LBL_LANG_SUCCESS'					=> 'Kielipaketti ladattiin onnistuneesti.',
	'LBL_LANG_TITLE'			   		=> 'Kielipaketti',
    'LBL_LAUNCHING_SILENT_INSTALL'     => 'Asennetaan Sugaria. Tämä saattaa kestää muutaman minuutin.',
	'LBL_LANG_UPLOAD'					=> 'Lataa kielipaketti',
	'LBL_LICENSE_ACCEPTANCE'			=> 'Lisenssin hyväksyminen',
    'LBL_LICENSE_CHECKING'              => 'Tarkistetaan järjestelmän yhteensopivuutta.',
    'LBL_LICENSE_CHKENV_HEADER'         => 'Tarkistetaan ympäristöä',
    'LBL_LICENSE_CHKDB_HEADER'          => 'Varmentaa DB-, FTS -tunnistetietoja.',
    'LBL_LICENSE_CHECK_PASSED'          => 'Järjestelmä läpäisi yhteensopivuustarkistuksen.',
    'LBL_LICENSE_REDIRECT'              => 'Uudelleenohjataan…',
	'LBL_LICENSE_DIRECTIONS'			=> 'Jos sinulla on lisenssitietoja, syötä se alla oleviin kenttiin.',
	'LBL_LICENSE_DOWNLOAD_KEY'			=> 'Anna latausavain',
	'LBL_LICENSE_EXPIRY'				=> 'Erääntymispäivä',
	'LBL_LICENSE_I_ACCEPT'				=> 'Hyväksyn',
	'LBL_LICENSE_NUM_USERS'				=> 'Käyttäjien määrä',
	'LBL_LICENSE_PRINTABLE'				=> 'Tulostettava näkymä',
    'LBL_PRINT_SUMM'                    => 'Tulosta Yhteenveto',
	'LBL_LICENSE_TITLE_2'				=> 'SugarCRM lisenssi',
	'LBL_LICENSE_TITLE'					=> 'Lisenssitiedot',
	'LBL_LICENSE_USERS'					=> 'Lisenssoituja käyttäjiä',

	'LBL_LOCALE_CURRENCY'				=> 'Valuutta-asetukset',
	'LBL_LOCALE_CURR_DEFAULT'			=> 'Oletusvaluutta',
	'LBL_LOCALE_CURR_SYMBOL'			=> 'Valuuttasymboli',
	'LBL_LOCALE_CURR_ISO'				=> 'Valuuttakoodi (ISO 4217)',
	'LBL_LOCALE_CURR_1000S'				=> 'Tuhansien erotin',
	'LBL_LOCALE_CURR_DECIMAL'			=> 'Desimaalierotin',
	'LBL_LOCALE_CURR_EXAMPLE'			=> 'Esimerkki',
	'LBL_LOCALE_CURR_SIG_DIGITS'		=> 'Merkitseviä numeroita',
	'LBL_LOCALE_DATEF'					=> 'Oletuspäivämäärämuoto',
	'LBL_LOCALE_DESC'					=> 'Määritetyt lokaaliasetukset heijastuvat globaalisti Sugar-instanssiin.',
	'LBL_LOCALE_EXPORT'					=> 'Merkistö tuontia/vientiä varten<br /> <i>(Sähköposti, .csv, vCard, PDF, data-tuonti)</i>',
	'LBL_LOCALE_EXPORT_DELIMITER'		=> 'Viennin (.csv) erotin',
	'LBL_LOCALE_EXPORT_TITLE'			=> 'Tuonti- ja vientiasetukset',
	'LBL_LOCALE_LANG'					=> 'Oletuskieli',
	'LBL_LOCALE_NAMEF'					=> 'Oletusnimimuoto',
	'LBL_LOCALE_NAMEF_DESC'				=> 's = puhuttelumuoto<br />f = etunimi<br />l = sukunimi',
	'LBL_LOCALE_NAME_FIRST'				=> 'David',
	'LBL_LOCALE_NAME_LAST'				=> 'Livingstone',
	'LBL_LOCALE_NAME_SALUTATION'		=> 'Professori',
	'LBL_LOCALE_TIMEF'					=> 'Oletusaikamuoto',
	'LBL_LOCALE_TITLE'					=> 'Lokaaliasetukset',
    'LBL_CUSTOMIZE_LOCALE'              => 'Muokkaa lokaaliasetuksia',
	'LBL_LOCALE_UI'						=> 'Käyttöliittymä',

	'LBL_ML_ACTION'						=> 'Toiminto',
	'LBL_ML_DESCRIPTION'				=> 'Kuvaus',
	'LBL_ML_INSTALLED'					=> 'Asennuspäivämäärä',
	'LBL_ML_NAME'						=> 'Nimi',
	'LBL_ML_PUBLISHED'					=> 'Julkaisupäivämäärä',
	'LBL_ML_TYPE'						=> 'Tyyppi',
	'LBL_ML_UNINSTALLABLE'				=> 'Poistettavissa',
	'LBL_ML_VERSION'					=> 'Versio',
	'LBL_MSSQL'							=> 'SQL-palvelin',
	'LBL_MSSQL_SQLSRV'				    => 'SQL-palvelin (Microsoft SQL-palvelinohjain PHP:lle)',
	'LBL_MYSQL'							=> 'MySQL',
    'LBL_MYSQLI'						=> 'MySQL (<code>mysqli</code>-laajennus)',
	'LBL_IBM_DB2'						=> 'IBM DB2',
	'LBL_NEXT'							=> 'Seuraava',
	'LBL_NO'							=> 'Ei',
    'LBL_ORACLE'						=> 'Oracle',
	'LBL_PERFORM_ADMIN_PASSWORD'		=> 'Asetetaan sivuston adminin salasanaa',
	'LBL_PERFORM_AUDIT_TABLE'			=> 'tarkastustaulukko (audit table) /',
	'LBL_PERFORM_CONFIG_PHP'			=> 'Luodaan Sugarin konfiguraatiotiedosto',
	'LBL_PERFORM_CREATE_DB_1'			=> '<b>Luodaan tietokantaa</b>',
	'LBL_PERFORM_CREATE_DB_2'			=> '<b>on</b>',
	'LBL_PERFORM_CREATE_DB_USER'		=> 'Luodaan tietokantakäyttäjän käyttäjänimi ja salasana...',
	'LBL_PERFORM_CREATE_DEFAULT'		=> 'Luodaan Sugarin oletusdataa',
	'LBL_PERFORM_CREATE_LOCALHOST'		=> 'Luodaan tietokannan käyttäjänimi ja salasana localhostille...',
	'LBL_PERFORM_CREATE_RELATIONSHIPS'	=> 'Luodaan Sugarin suhdetauluja',
	'LBL_PERFORM_CREATING'				=> 'luodaan /',
	'LBL_PERFORM_DEFAULT_REPORTS'		=> 'Luodaan oletusraportteja',
	'LBL_PERFORM_DEFAULT_SCHEDULER'		=> 'Luodaan oletusajastustehtäviä',
	'LBL_PERFORM_DEFAULT_SETTINGS'		=> 'Lisätään oletusasetuksia',
	'LBL_PERFORM_DEFAULT_USERS'			=> 'Luodaan oletuskäyttäjiä',
	'LBL_PERFORM_DEMO_DATA'				=> 'Populoidaan tietokantataulut demotiedoilla (tämä saattaa kestää hetken)',
	'LBL_PERFORM_DONE'					=> 'tehty<br />',
	'LBL_PERFORM_DROPPING'				=> 'pudotetaan /',
	'LBL_PERFORM_FINISH'				=> 'Valmis',
	'LBL_PERFORM_LICENSE_SETTINGS'		=> 'Päivitetään lisenssitiedot',
	'LBL_PERFORM_OUTRO_1'				=> 'Sugarin asennus',
	'LBL_PERFORM_OUTRO_2'				=> 'on nyt valmis!',
	'LBL_PERFORM_OUTRO_3'				=> 'Kokonaisaika:',
	'LBL_PERFORM_OUTRO_4'				=> 'sekuntia.',
	'LBL_PERFORM_OUTRO_5'				=> 'Arvioitu käytetyn muistin määrä:',
	'LBL_PERFORM_OUTRO_6'				=> 'tavua.',
	'LBL_PERFORM_OUTRO_7'				=> 'Järjestelmä on nyt asennettu ja konfiguroitu käyttöä varten.',
	'LBL_PERFORM_REL_META'				=> 'suhde meta ...',
	'LBL_PERFORM_SUCCESS'				=> 'Onnistui!',
	'LBL_PERFORM_TABLES'				=> 'Luodaan Sugar sovellustaulut, tarkastustaulut ja suhdemetadata',
	'LBL_PERFORM_TITLE'					=> 'Suorita Setup',
	'LBL_PRINT'							=> 'Tulosta',
	'LBL_REG_CONF_1'					=> 'Täytä alla oleva lyhyt lomake saadaksesi tuotetiedotuksia, koulutusuutisia, erikoistarjouksia, ja erikoistapahtumakutsuja SugarCRM:ltä. Emme myy, vuokraa, jaa tai muuten levitä tässä saatuja tietoja ulkoisille osapuolille.',
	'LBL_REG_CONF_2'					=> 'Nimesi ja osoitetietosi ovat ainoat rekisteröintiin vaaditut tiedot. Kaikki muut kentät ovat valinnaisia, mutta erittäin hyödyllisiä. Emme myy, vuokraa, jaa tai muuten levitä tässä saatuja tietoja ulkoisille osapuolille.',
	'LBL_REG_CONF_3'					=> 'Kiitos rekisteröitymisestä. Napsauta Valmis-painiketta kirjautuaksesi SugarCRMiin. Ensimmäisellä kirjautumisella sinun pitää kirjautua käyttäjätunnuksella \'admin\' ja vaiheessa 2 syötetyllä salasanalla.',
	'LBL_REG_TITLE'						=> 'Ilmoittautuminen',
    'LBL_REG_NO_THANKS'                 => 'Ei kiitos',
    'LBL_REG_SKIP_THIS_STEP'            => 'Ohita tämä vaihe',
	'LBL_REQUIRED'						=> '* Pakollinen kenttä',

    'LBL_SITECFG_ADMIN_Name'            => 'Sugar-sovelluksen adminin nimi',
	'LBL_SITECFG_ADMIN_PASS_2'			=> 'Syötä uudestaan Sugarin admin-käyttäjän salasana',
	'LBL_SITECFG_ADMIN_PASS_WARN'		=> 'Varoitus: Tämä ohittaa mahdollisten aiempien asennusten admin-salasanat.',
	'LBL_SITECFG_ADMIN_PASS'			=> 'Sugar admin-käyttäjän salasana',
	'LBL_SITECFG_APP_ID'				=> 'Sovelluksen ID',
	'LBL_SITECFG_CUSTOM_ID_DIRECTIONS'	=> 'Jos valittu, sinun pitää tarjota sovelluksen ID korvataksesi automaattisesti generoidun IDn. ID varmistaa että yhden Sugar-instanssin sessioita ei käytetä muissa instansseissa. Jos sinulla on monta Sugar-asennusta, niillä kaikilla pitää olla sama sovellus-ID.',
	'LBL_SITECFG_CUSTOM_ID'				=> 'Anna oma sovellus-ID',
	'LBL_SITECFG_CUSTOM_LOG_DIRECTIONS'	=> 'Jos valittuna, sinun pitää määrittää lokihakemisto korvataksesi oletuslokihakemisto Sugarin lokitiedostolle. Riippumatta missä lokitiedosto on, pääsy siihen rajoitetaan .htaccess-uudelleenohjauksella.',
	'LBL_SITECFG_CUSTOM_LOG'			=> 'Käytä mukautettua lokihakemistoa',
	'LBL_SITECFG_CUSTOM_SESSION_DIRECTIONS'	=> 'Jos valittuna, sinun pitää toimittaa turvattu kansio Sugarin sessiotietojen varastointia varten. Tämä tehdään jotta sessiotiedot olisivat turvassa jaetuilla palvelimilla.',
	'LBL_SITECFG_CUSTOM_SESSION'		=> 'Käytä mukautettua sessiohakemistoa Sugarille',
	'LBL_SITECFG_DIRECTIONS'			=> 'Syötä sivustosi konfiguraatiotiedot alle. Jos olet epävarma, mitä laittaa kenttiin, suosittelemme käyttäväsi oletusarvoja.',
	'LBL_SITECFG_FIX_ERRORS'			=> '<b>Korjaa seuraavat virheet enen kuin jatkat:</b>',
	'LBL_SITECFG_LOG_DIR'				=> 'Lokihakemisto',
	'LBL_SITECFG_SESSION_PATH'			=> 'Polku sessiohakemistoon<br />(pitää olla kirjoitettavissa)',
	'LBL_SITECFG_SITE_SECURITY'			=> 'Valitse suojausasetukset',
	'LBL_SITECFG_SUGAR_UP_DIRECTIONS'	=> 'Jos valittu, järjestelmä tarkistaa ajoittain uusien sovellusversioiden varalta.',
	'LBL_SITECFG_SUGAR_UP'				=> 'Automaattisesti tarkista päivitysten varalta?',
	'LBL_SITECFG_SUGAR_UPDATES'			=> 'Sugarin päivityskonfiguraatio',
	'LBL_SITECFG_TITLE'					=> 'Sivuston konfiguraatio',
    'LBL_SITECFG_TITLE2'                => 'Tunnista administraatiokäyttäjä',
    'LBL_SITECFG_SECURITY_TITLE'        => 'Sivuston turvallisuus',
	'LBL_SITECFG_URL'					=> 'Sugar-instanssin URL',
	'LBL_SITECFG_USE_DEFAULTS'			=> 'Käytä oletuksia?',
	'LBL_SITECFG_ANONSTATS'             => 'Lähetä anonyymejä käyttötilastoja?',
	'LBL_SITECFG_ANONSTATS_DIRECTIONS'  => 'Jos valittu, Sugar lähettää <strong>anonyymejä</strong> tilastoja asennuksestasi SugarCRM Inc.:ille joka kerta kun järjestelmäsi tarkistaa uusien versioiden varalta. Nämä tiedot auttavat meitä ymmärtämään miten sovellusta käytetään ja ohjaa sovellusparannuksia.',
    'LBL_SITECFG_URL_MSG'               => 'Syötä URL jolla päästään Sugar-instanssiin asennuksen jälkeen. URLää käytetään myös pohjana Sugarin sovellussivujen URLiin. URLän pitäisi sisältää web-palvelimen tai koneen nimen tai IP-osoitteen.',
    'LBL_SITECFG_SYS_NAME_MSG'          => 'Anna järjestelmällesi nimi. Tämä nimi näkyy selaimen otsikkopalkissa kun käyttäjät vierailevat Sugar-sovelluksessa.',
    'LBL_SITECFG_PASSWORD_MSG'          => 'Asennuksen jälkeen sinun pitää käyttää Sugarin admin-käyttäjää (oletuskäyttäjätunnus = admin) kirjauduttuaksesi Sugar-instanssiin. Syötä salasana tälle admin-käyttäjälle. Tätä salasanaa voi muutaa ensimmäisen kirjautumisen jälkeen. Voit myös syöttää toisen admin-käyttäjän käyttäjätunnuksen käyttääksesi muuta tunnusta kuin oletusta.',
    'LBL_SITECFG_COLLATION_MSG'         => 'Valitse järjestelmäsi lajitteluasetukset. Nämä asetukset luovat kielellesi sopivat tietokantataulut. Jos kielesi ei vaadi erikoisasetuksia, käytä oletusta.',
    'LBL_SPRITE_SUPPORT'                => 'Sprite-tuki',
	'LBL_SYSTEM_CREDS'                  => 'Järjestelmän käyttäjätunnukset',
    'LBL_SYSTEM_ENV'                    => 'Järjestelmäympäristö',
	'LBL_START'							=> 'Aloitus',
    'LBL_SHOW_PASS'                     => 'Näytä salasanat',
    'LBL_HIDE_PASS'                     => 'Piilota salasanat',
    'LBL_HIDDEN'                        => '<em>(piilotettu)</em>',
//	'LBL_NO_THANKS'						=> 'Continue to installer',
	'LBL_CHOOSE_LANG'					=> '<b>Valitse kieli</b>',
	'LBL_STEP'							=> 'Vaihe',
	'LBL_TITLE_WELCOME'					=> 'Tervetuloa SugarCRMiin',
	'LBL_WELCOME_1'						=> 'Tämä asennusohjelma luo SugarCRM:n tarvitsemat tietokantataulut ja asettaa konfiguraatiomuuttujat. Koko prosessi kestää noin kymmenen minuuttia.',
    //welcome page variables
    'LBL_TITLE_ARE_YOU_READY'            => 'Oletko valmis asennusta varten?',
    'REQUIRED_SYS_COMP' => 'Vaaditut järjestelmäkomponentit',
    'REQUIRED_SYS_COMP_MSG' =>
                    'Ennen kuin aloitat, varmistathan, että sinulla on tuetut versiot seuraavista järjestelmäkomponenteista:<br /><br />                      <ul><br />                      <li> Tietokanta (Esimerkiksi MySQL, SQL Server, Oracle, DB2)</li><br />                      <li> Web-palvelin (Apache, IIS)</li><br />                      </ul><br />                      Katso julkaisumerkinnöissä oleva yhteensopivuusmatriisi tämän Sugar-version kanssa yhteensopivista ohjelmistoversioista.<br />',
    'REQUIRED_SYS_CHK' => 'Alustava järjestelmäntarkistus',
    'REQUIRED_SYS_CHK_MSG' =>
                    'Kun aloitat asennusprosessin, suoritetaan Sugarin tiedostoja säilövä web-palvelimesta järjestelmäntarkistus. Tämä tehdään jotta ollaan varmoja, että järjestelmä on konfiguroitu kunnolla ja sisältää kaikki Sugarin vaatimat komponentit.<br /><br />Järjestelmätarkistus tarkistaa seuraavat asiat:<br /><br />      <ul><br />      <li><b>PHP:n version</b> pitää olla Sugar-yhteensopiva</li><br />      <li><b>Sessiomuuttujien</b> pitää toimia kunnolla</li><br />      <li><b>MB Strings</b> pitää olla asennettuna ja käytössä <code>php.ini</code>:ssä</li><br />      <li><b>Tietokantatuki</b> on oltava joko MySQL:lle, SQL Serverille, Oracle:lle, tai DB2:lle</li><br />      <li><b><code>config.php</code></b> on oltava olemassa ja sillä pitää olla kirjoituksen sallivat luvat</li><br />      <li>Seuraaviin Sugar-tiedostoihin pitää voida kirjoittaa:<ul><code><br />        <li>/custom</li><br />        <li>/cache</li><br />        <li>/modules</li><br />        <li>/upload</li></code></ul><br />      </li></ul><br />    Jos järjestelmä ei läpäise tarkistusta, et pääse jatkamaan asennusta. Tarkistus näyttää virheviestin, minkä takia järjestelmäsi ei läpäissyt tarkistusta. Kun olet tehnyt tarvittavat muutokset, voit suorittaa järjestelmäntarkistuksen uudelleen jatkaaksesi asennusta.',
    'REQUIRED_INSTALLTYPE' => 'Tyypillinen tai mukautettu asennus',
    'REQUIRED_INSTALLTYPE_MSG' =>
                    "Järjestelmäntarkistuksen läpäistyäsi voit valita joko <strong>tyypillisen</strong> tai <strong>mukautetun</strong> asennuksen.<br /><br />Sekä <strong>tyypilliselle</strong> että <strong>mukautetulle</strong> asennukselle sinun pitää tietää seuraavat asiat:<br /><br />    <ul><br />      <li>Sugarin tiedot säilövän <strong>tietokannan tyyppi</strong>.<ul><li>Sugarin kanssa sopii: MySQL, MS SQL Server, Oracle, ja DB2.</li></ul></li><br />      <li>Sen <strong>tietokantapalvelimen nimi,</strong> jossa tietokanta on.<ul><li>Tämä saattaa olla <code>localhost</code>, jos tietokanta on paikallisella työasemallasi tai on samalla palvelimella kuin Sugarin tiedostot.</li></ul><br /></li><br />      <li>Sen <strong>tietokannan nimi,</strong> johon haluat säilöä Sugarin datan<br /><ul><li>Sinulla saattaa olla jo olemassa oleva tietokanta jota haluat käyttää. Jos annat olemassa olevan tietokannan nimen, tietokannassa olevat taulut pudotetaan asennuksen aikana, kun Sugarin tietokannan skeema määritellään.</li><br /><br />      <li>Jos sinulla ei ole jo tietokantaa, antamasi nimi annetaan uudelle tietokannalle, joka luodaan asennuksen aikana.</li></ul></li><br /><br />      <li><strong>Tietokanta-adminin käyttäjänimi ja salasana</strong><ul><li>Tietokanta-adminin pitäisi voida luoda tauluja ja käyttäjiä ja kirjoittaa tietokantaan.</li><li>Saatat joutua ottamaan yhteyttä tietokantasi järjestelmänvalvojaan, jos tietokanta ei ole paikallisella työasemalla ja et ole tietokannan ylläpitäjä.</li></ul></li><br /><br />      <li><strong>Sugar-tietokannan käyttäjänimi ja salasana</strong><ul><li>Käyttäjä voi olla tietokanta-admin, tai voit syöttää olemassa olevan tietokantakäyttäjän nimen.</li><li>Jos haluat luoda uuden tietokantakäyttäjän, voit syöttää sen käyttäjänimen ja salasanan asennusprosessin aikana, ja käyttäjä luodaan.</li></ul></li><br /><br />    </ul><br />  <strong>Mukautettua</strong> asennusta varten sinun pitää tietää myös:<br /><br />    <ul><br />    <li><strong>Sugar-instanssin URL</strong> jota käytetään asennuksen jälkeen. Tämän osoitteen tulisi sisältää palvelimen tai työaseman nimen tai IP-osoitteen.</li><br /><br />    <li>[Valinnainen] <strong>Sessiohakemiston polku,</strong> jos haluat käyttää valinnanvaraista sessiohakemistoa Sugarin tietojen suojausta varten yhteisellä palvelimella.</li><br /><br />    <li>[Valinnainen] <strong>Polku mukautettuun lokihakemistoon,</strong> jos haluat ohittaa Sugarin lokitiedoston oletushakemiston.</li><br /><br />    <li>[Valinnanien] <strong>Sovellus-ID</strong>, jos haluat ohittaa autogeneroidun IDn. Sovellus-ID varmistaa, että yhden Sugar-instanssin sessioita ei käytetä muissa instansseissa.</li><br /><br />    <li><strong>Merkistö,</strong> jota käytetään lokaalissasi.</li><br /><br />    </ul><br />  Tarkempia tietoja varten katso Sugarin asennusohjeet.",
    'LBL_WELCOME_PLEASE_READ_BELOW' => 'Lue seuraavat tärkeät tiedot, ennen kuin jatkat asennusta. Tiedot auttavat sinua selvittämään oletko valmis asentamaan sovelluksen nyt.',


	'LBL_WELCOME_2'						=> 'Asennusdokumentaatio on saatavilla osoitteessa <a href="http://www.sugarcrm.com/crm/installation" target="_blank">Sugar Wiki</a>.  <BR><BR> Voit ottaa yhteyttä SugarCRM:n tukipalveluinsinööriin asennusohjeita varten kirjautumalla osoitteessa <a target="_blank" href="http://support.sugarcrm.com">SugarCRM Support Portal</a> ja lähettämällä tukipyynnön.',
	'LBL_WELCOME_CHOOSE_LANGUAGE'		=> '<b>Valitse kieli</b>',
	'LBL_WELCOME_SETUP_WIZARD'			=> 'Asennustyökalu',
	'LBL_WELCOME_TITLE_WELCOME'			=> 'Tervetuloa SugarCRMiin',
	'LBL_WELCOME_TITLE'					=> 'SugarCRM asennustyökalu',
	'LBL_WIZARD_TITLE'					=> 'Sugarin asennustyökalu:',
	'LBL_YES'							=> 'Kyllä',
    'LBL_YES_MULTI'                     => 'Kyllä - Monitavu',
	// OOTB Scheduler Job Names:
	'LBL_OOTB_WORKFLOW'		=> 'Prosessoi Work Flow -tehtävät',
	'LBL_OOTB_REPORTS'		=> 'Suorita raporttigeneraation ajastetut toiminnot',
	'LBL_OOTB_IE'			=> 'Tarkista saapuvan postin kansiot',
	'LBL_OOTB_BOUNCE'		=> 'Suorita yöllinen prosessi palautuneille kampanjasähköposteille',
    'LBL_OOTB_CAMPAIGN'		=> 'Suorita yölliset massaviestikampanjat',
	'LBL_OOTB_PRUNE'		=> 'Karsi tietokanta kuukauden ensimmäisenä päivänä',
    'LBL_OOTB_TRACKER'		=> 'Karsi seurantataulukot',
    'LBL_OOTB_SEND_EMAIL_REMINDERS' => 'Suorita sähköpostin muistutusilmoitukset',
    'LBL_UPDATE_TRACKER_SESSIONS' => 'Päivitä <code>tracker_sessions</code>-taulu',
    'LBL_OOTB_CLEANUP_QUEUE' => 'Puhdista työjono',


    'LBL_FTS_TABLE_TITLE'     => 'Syötä kokotekstihaun asetukset',
    'LBL_FTS_HOST'     => 'Isäntä',
    'LBL_FTS_PORT'     => 'Portti',
    'LBL_FTS_TYPE'     => 'Hakukoneen tyyppi',
    'LBL_FTS_HELP'      => 'Ottaaksesi käyttöön kokotekstihaun, valitse hakukoneen tyyppi ja syötä sen host ja portti. Sugar sisältää sisäänrakennetun tuen elasticsearch-hakukoneelle.',
    'LBL_FTS_REQUIRED'    => 'Elastic Search vaaditaan.',
    'LBL_FTS_CONN_ERROR'    => 'Ei voida yhdistää kokotekstihakupalvelimelle. Tarkista asetukset.',
    'LBL_FTS_NO_VERSION_AVAILABLE'    => 'Kokotekstihakupalvelimen versiota ei ole saatavissa. Tarkista asetukset.',
    'LBL_FTS_UNSUPPORTED_VERSION'    => 'Havaittu elastisen haun versio, jota ei tueta. Käytä versioita: %s',

    'LBL_PATCHES_TITLE'     => 'Asenna uusimmat korjaustiedostot',
    'LBL_MODULE_TITLE'      => 'Asenna kielipaketit',
    'LBL_PATCH_1'           => 'Jos haluat ohittaa tämän vaiheen, napsauta Seuraava.',
    'LBL_PATCH_TITLE'       => 'Järjestelmäkorjaustiedostot',
    'LBL_PATCH_READY'       => 'Seuraavat korjaustiedostot ovat valmiina asennettaviksi:',
	'LBL_SESSION_ERR_DESCRIPTION'		=> "</p>SugarCRM käyttää PHP-sessioita tallentaakseen tärkeää tietoa kun on yhteys tähän web-palvelimeen. Sessiotietoja ei ole konfiguroitu kunnolla PHP-asennuksessasi.</p><p>Yleinen virhe on että <code>session.save_path</code>-direktiivi ei osoita olemassa olevaan hakemistoon.</p><p>Korjaa <a target='_new' href='http://www.php.net/manual/en/ref.session.php'>PHP:n konfiguraatio</a> <code>php.ini</code>-tiedostossa.",
	'LBL_SESSION_ERR_TITLE'				=> 'PHP sessiokonfiguraatiovirhe',
	'LBL_SYSTEM_NAME'=>'Järjestelmän nimi',
    'LBL_COLLATION' => 'Lajitteluasetukset',
	'LBL_REQUIRED_SYSTEM_NAME'=>'Tarjoa järjestelmänimi Sugar-instanssille.',
	'LBL_PATCH_UPLOAD' => 'Valitse korjaustiedosto paikalliselta koneelta',
	'LBL_BACKWARD_COMPATIBILITY_ON' => 'PHP taaksepäin-yhteensopivuustila on päällä. Aseta <code>zend.ze1_compatibility_mode</code> arvoon <code>Off</code>, jotta voit jatkaa',

    'meeting_notification_email' => array(
        'name' => 'Sähköposti-ilmoitukset kokouksista',
        'subject' => 'SugarCRM-kokous - $event_name ',
        'description' => 'Tätä mallia käytetään, kun järjestelmä lähettää käyttäjälle kokousilmoituksen.',
        'body' => '<div>
	<p>Vastaanottaja: $assigned_user</p>

	<p>$assigned_by_user on kutsunut sinut kokoukseen</p>

	<p>Aihe: $event_name<br/>
	Aloituspäivä: $start_date<br/>
	Päättymispäivä: $end_date</p>

	<p>Kuvaus: $description</p>

	<p>Hyväksy tämä kokous:<br/>
	<<a href="$accept_link">$accept_link</a>></p>
	<p>Hyväksy alustavasti tämä kokous:<br/>
	<<a href="$tentative_link">$tentative_link</a>></p>
	<p>Hylkää tämä kokous:<br/>
	<<a href="$decline_link">$decline_link</a>></p>
</div>',
        'txt_body' =>
            'Vastaanottaja: $assigned_user

$assigned_by_user on kutsunut sinut kokoukseen

Aihe: $event_name
Aloituspäivä: $start_date
Päättymispäivä: $end_date

Kuvaus: $description

Hyväksy tämä kokous:
<$accept_link>

Hyväksy alustavasti tämä kokous:
<$tentative_link>

Hylkää tämä kokous:
<$decline_link>',
    ),

    'call_notification_email' => array(
        'name' => 'Sähköposti-ilmoitukset puheluista',
        'subject' => 'SugarCRM-puhelu - $event_name ',
        'description' => 'Tätä mallia käytetään, kun järjestelmä lähettää käyttäjälle ilmoituksen puhelusta.',
        'body' => '<div>
	<p>Vastaanottaja: $assigned_user</p>

	<p>$assigned_by_user on kutsunut sinut puheluun</p>

	<p>Aihe: $event_name<br/>
	Aloituspäivä: $start_date<br/>
	Kesto: $hoursh, $minutesm</p>

	<p>Kuvaus: $description</p>

	<p>Hyväksy tämä puhelu:<br/>
	<<a href="$accept_link">$accept_link</a>></p>
	<p>Hyväksy alustavasti tämä puhelu:<br/>
	<<a href="$tentative_link">$tentative_link</a>></p>
	<p>Hylkää tämä puhelu:<br/>
	<<a href="$decline_link">$decline_link</a>></p>
</div>',
        'txt_body' =>
            'Vastaanottaja: $assigned_user

$assigned_by_user on kutsunut sinut puheluun

Aihe: $event_name
Aloituspäivä: $start_date
Kesto: $hoursh, $minutesm

Kuvaus: $description

Hyväksy tämä puhelu:
<$accept_link>

Hyväksy alustavasti tämä puhelu:
<$tentative_link>

Hylkää tämä puhelu:
<$decline_link>',
    ),

    'assigned_notification_email' => array(
        'name' => 'Sähköposti-ilmoitukset tehtävistä',
        'subject' => 'SugarCRM - Osoitettu vastuuhenkilöksi moduulille $module_name ',
        'description' => 'Tätä mallia käytetään, kun järjestelmä lähettää käyttäjälle osoitetun tehtävän.',
        'body' => '<div>
<p>$assigned_by_user on osoittanut moduulin &nbsp;$module_name vastuuhenkilöksi käyttäjän&nbsp;$assigned_user.</p>

<p>Voit tarkastella tätä moduulia&nbsp;$module_name osoitteessa:<br/>
	<<a href="$module_link">$module_link</a>></p>
</div>',
        'txt_body' =>
            '$assigned_by_user on osoittanut moduulin $module_name käyttäjälle $assigned_user.

Voit tarkastella tätä moduulia $module_name osoitteessa:
<$module_link>',
    ),

    'scheduled_report_email' => array(
        'name' => 'Sähköpostiviestit aikataulutetuista raporteista',
        'subject' => 'Aikataulutettu raportti: $report_name alkaen ajankohdasta $report_time',
        'description' => 'Tätä mallia käytetään, kun järjestelmä lähettää käyttäjälle raportin määritetyn aikataulun mukaisesti.',
        'body' => '<div>
<p>Hei $assigned_user</p>
<p>Ohessa automaattisesti luotu raportti, joka lähetetään määritetyn aikataulun mukaisesti sinulle.</p>
<p>Raportin nimi: $report_name</p>
<p>Raportin ajopäivä- ja -aika: $report_time</p>
</div>',
        'txt_body' =>
            'Hei $assigned_user

Ohessa automaattisesti luotu raportti, joka lähetetään määritetyn aikataulun mukaisesti sinulle.

Raportin nimi: $report_name

Raportin ajopäivä- ja -aika: $report_time',
    ),

    'comment_log_mention_email' => [
        'name' => 'Sähköposti-ilmoitus järjestelmän kommenttilokista',
        'subject' => 'SugarCRM - $initiator_full_name mainitsi sinut moduulissa $singular_module_name',
        'description' => 'Tätä mallia käytetään sähköposti-ilmoitusten lähettämiseen käyttäjille, jotka on mainittu kommenttiloki-osiossa.',
        'body' =>
            '<div>
                <p>Sinut on mainittu seuraavan tietueen kommenttilokissa:  <a href="$record_url">$record_name</a></p>
                <p>Näet kommentin, kun kirjaudut Sugariin.</p>
            </div>',
        'txt_body' =>
'Sinut on mainittu seuraavan tietueen kommenttilokissa:  $record_name               
            Näet kommentin, kun kirjaudut Sugariin.',
    ],

    'advanced_password_new_account_email' => array(
        'subject' => 'Uudet asiakastiedot',
        'description' => 'Tätä mallia käytetään, kun järjestelmänvalvoja lähettää uuden salasanan käyttäjälle.',
        'body' => '<div><table border=\'0\' cellspacing=\'0\' cellpadding=\'0\' width=\'550\' align=\'center\'><tbody><tr><td colspan=\'2\'><p>Tässä on käyttäjänimesi ja tilapäinen salasanasi:</p><p>Käyttäjänimi : <code>$contact_user_user_name</code> </p><p>Salasana :<code> $contact_user_user_hash </code></p><br /><p>$config_site_url</p><br /><p>Kun kirjaudut sisään yllä olevalla salasanalla, sinua pyydetään muuttamaan salasana.</p> </td> </tr><tr><td colspan=\'2\'></td> </tr> </tbody></table> </div>',
        'txt_body' =>
'Tässä on käyttäjänimesi ja tilapäinen salasanasi:<br />Käyttäjänimi : $contact_user_user_name<br />Salasana     : $contact_user_user_hash<br /><br />$config_site_url<br /><br />Kun kirjaudut sisään yllä olevalla sanasanalla, sinua saatetaan pyytää muutamaan salasana.',
        'name' => 'Määrittele nimi',
        ),
    'advanced_password_forgot_password_email' => array(
        'subject' => 'Palauta tilisi salasana',
        'description' => "Tällä mallilla lähetetään käyttäjälle linkki, jolla käyttäjä voi asettaa salasanansa uudelleen.",
        'body' => '<div><table border=\'0\' cellspacing=\'0\' cellpadding=\'0\' width=\'550\' align=\'center\'><tbody><tr><td colspan=\'2\'><p>Pyysit käyttäjätunnuksesi salasanan vaihtoa $contact_user_pwd_last_changed. </p><p>Klikkaa alla olevaa linkkiä vaihtaaksesi salasanasi:</p><p> $contact_user_link_guid </p></td></tr> <tr><td colspan=\'2\'></td> </tr> </tbody></table> </div>',
        'txt_body' =>
'Pyysit käyttäjätunnuksesi salasanan vaihtoa $contact_user_pwd_last_changed .<br /><br />Klikkaa alla olevaa linkkiä vaihtaaksesi salasanasi:<br /><br />$contact_user_link_guid',
        'name' => 'Määrittele nimi',
        ),

'portal_forgot_password_email_link' => [
    'name' => 'Portaalin salasanan unohtamista koskeva viesti',
    'subject' => 'Palauta tilisi salasana',
    'description' => 'Tällä mallilla lähetetään käyttäjälle linkki, jolla voi palauttaa portaalin salasanan.',
    'body' => '<div><table border=\"0\" cellspacing=\"0\" cellpadding=\"0\" width="550" align=\"\&quot;\&quot;center\&quot;\&quot;\"><tbody><tr><td colspan=\"2\"><p>Pyysit tilisi salasanan vaihtoa.</p><p>Palauta salasana napsauttamalla seuraavaa linkkiä:</p><p> <a href="$portal_user_link_guid">$portal_user_link_guid</a> </p> </td> </tr><tr><td colspan=\"2\"></td> </tr> </tbody></table> </div>',
    'txt_body' =>
'
    Pyysit tilisi salasanan vaihtoa.

    Palauta salasana napsauttamalla seuraavaa linkkiä:

    $portal_user_link_guid',
],

    'portal_password_reset_confirmation_email' => [
        'name' => 'Portaalin salasanan palautuksen vahvistusviesti',
        'subject' => 'Tilisi salasana on palautettu',
        'description' => 'Tätä mallia käytetään lähettämään portaalin käyttäjälle vahvistus, että salasana on palautettu.',
        'body' => '<div><table border=\"0\" cellspacing=\"0\" cellpadding=\"0\" width="550" align=\"\&quot;\&quot;center\&quot;\&quot;\"><tbody><tr><td colspan=\"2\"><p>Tämä on vahvistusviesti siitä, että portaalin salasana on palautettu.</p><p>Kirjaudu portaaliin seuraavasta linkistä:</p><p> <a href="$portal_login_url">$portal_login_url</a> </p> </td> </tr><tr><td colspan=\"2\"></td> </tr> </tbody></table> </div>',
        'txt_body' =>
            '
    Tämä on vahvistusviesti siitä, että portaalin salasana on palautettu.

    Kirjaudu portaaliin seuraavasta linkistä:

    $portal_login_url',
    ],
);
