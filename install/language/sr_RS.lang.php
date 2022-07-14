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
	'LBL_BASIC_SEARCH'					=> 'Osnovna pretraga',
	'LBL_ADVANCED_SEARCH'				=> 'Napredna pretraga',
	'LBL_BASIC_TYPE'					=> 'Osnovni tiš',
	'LBL_ADVANCED_TYPE'					=> 'Napredni tip',
	'LBL_SYSOPTS_1'						=> 'Odaberite jednu od ispod ponuđenih sistemskih konfiguracionih opcija.',
    'LBL_SYSOPTS_2'                     => 'Koji tip baze podataka ćete koristiti za Sugar koji ćete instalirati?',
	'LBL_SYSOPTS_CONFIG'				=> 'Konfiguracija sistema',
	'LBL_SYSOPTS_DB_TYPE'				=> '',
	'LBL_SYSOPTS_DB'					=> 'Izaberite tip baze',
    'LBL_SYSOPTS_DB_TITLE'              => 'Tip baze',
	'LBL_SYSOPTS_ERRS_TITLE'			=> 'Molim, ispravite navedene greške pre nastavka:',
	'LBL_MAKE_DIRECTORY_WRITABLE'      => 'Molim omogućite pisanje u sledeći direktorijum:',


    'ERR_DB_LOGIN_FAILURE_IBM_DB2'		=> 'Unesen host baze, korisničko ime i/ili lozinka su pogrešni, i veza sa bazom podataka ne može biti uspostavljena. Molimo, unesite ispravan host baze, korisničko ime i lozinku.',
    'ERR_DB_IBM_DB2_CONNECT'			=> 'Unesen host baze, korisničko ime i/ili lozinka su pogrešni, i veza sa bazom podataka ne može biti uspostavljena. Molimo, unesite ispravan host baze, korisničko ime i lozinku.',
    'ERR_DB_IBM_DB2_VERSION'			=> 'Sugar ne podržava Vašu verziju DB2 (%s). Moraćete da instalirate verziju koja je kompatiblina sa Sugar aplikacijom. Molimo konsultujte matricu kompatibilnosti u dokumentaciji.',

	'LBL_SYSOPTS_DB_DIRECTIONS'			=> 'Morate imati instaliran i podešen Oracle klijent ako selektujete opciju Oracle.',
	'ERR_DB_LOGIN_FAILURE_OCI8'			=> 'Unesen host baze, korisničko ime i/ili lozinka su pogrešni, i veza sa bazom podataka ne može biti uspostavljena. Molimo, unesite ispravan host baze, korisničko ime i lozinku.',
	'ERR_DB_OCI8_CONNECT'				=> 'Unesen host baze, korisničko ime i/ili lozinka su pogrešni, i veza sa bazom podataka ne može biti uspostavljena. Molimo, unesite ispravan host baze, korisničko ime i lozinku.',
	'ERR_DB_OCI8_VERSION'				=> 'Vaša verzija Oracle-a nije podržana od strane Sugar-a. Morate instalirati verziju koja je kompatibilna sa Sugar aplikacijom. Pogledajte "Relaese Notes" dokumentaciju za podržanu verziju Oracle-a.',
    'LBL_DBCONFIG_ORACLE'               => 'Molimo obezbedite ime Vaše baze podataka. Ovo će biti podrazumevani prostor za tabele koji će biti dodeljen Vašem korisniku ((SID iz tnsnames.ora).',
	// seed Ent Reports
	'LBL_Q'								=> 'Upit za prodajne prilike',
	'LBL_Q1_DESC'						=> 'Prodajne prilike po tipu',
	'LBL_Q2_DESC'						=> 'Prodajne prilike po kompaniji',
	'LBL_R1'							=> 'Izveštaj prodajni levak za 6 meseci prodaje',
	'LBL_R1_DESC'						=> 'Prodajne prilike u narednih 6 meseci prikazane po mesecu i tipu',
	'LBL_OPP'							=> 'Skup podataka prodajnih prilika',
	'LBL_OPP1_DESC'						=> 'Ovde možete da menjate izgled stranice prilagođenog upita',
	'LBL_OPP2_DESC'						=> 'Ovaj upit će biti smešten ispod prvog upita u izveštaju',
    'ERR_DB_VERSION_FAILURE'			=> 'Nemoguće je proveriti verziju baze podataka.',

	'DEFAULT_CHARSET'					=> 'UTF-8',
    'ERR_ADMIN_USER_NAME_BLANK'         => 'Unesite korisničko ime za Sugar admin korisnika.',
	'ERR_ADMIN_PASS_BLANK'				=> 'Unesite lozinku za Sugar admin korisnika.',

    'ERR_CHECKSYS'                      => 'Pronađene su greške u toku provere kompatibilnosti. Kako bi Vaša SugarCRM instalacija pravilno funkcionisala, molim preduzmite odgovarajuće korake vezane za dole navedene stavke i pritisnite dugme Ponovna provera, ili pokrenite ponovo instalaciju.',
    'ERR_CHECKSYS_CALL_TIME'            => 'Opcija Allow Call Time Pass Reference je uključena (trebalo bi da je isključena u php.ini)',

	'ERR_CHECKSYS_CURL'					=> 'Nije pronađeno: Sugar planer će raditi sa ograničenom funkcionalnošću. Usluga arhiviranja e-poruka neće raditi.',
    'ERR_CHECKSYS_IMAP'					=> 'Nije nađeno: Dolazne email poruke i Kampanje (Email) zahtevaju IMAP biblioteke. Ni jedna od navedenih funkcija neće raditi.',
	'ERR_CHECKSYS_MSSQL_MQGPC'			=> 'Magic Quotes GPC opcija ne može da bude uključena kada se koristi MS SQL server.',
	'ERR_CHECKSYS_MEM_LIMIT_0'			=> 'Upozorenje:',
	'ERR_CHECKSYS_MEM_LIMIT_1'			=> '(Postavi ovo na',
	'ERR_CHECKSYS_MEM_LIMIT_2'			=> 'M ili veće u Vašem php.ini fajlu)',
	'ERR_CHECKSYS_MYSQL_VERSION'		=> 'Potrebna najranija verzija 4.1.2 - Nađena:',
	'ERR_CHECKSYS_NO_SESSIONS'			=> 'Neuspešno pisanje i čitanje vrednosti sesije. Ne mogu da nastavim instalaciju.',
	'ERR_CHECKSYS_NOT_VALID_DIR'		=> 'Folder nije validan',
	'ERR_CHECKSYS_NOT_WRITABLE'			=> 'Upozorenje: Nije upisivo',
	'ERR_CHECKSYS_PHP_INVALID_VER'		=> 'Sugar ne podržava Vašu verziju PHP-a. Treba da instalirate verziju koja kompatibilina sa Sugar aplikacijom. Konsultujte Matricu Kompatibilnosti u Beleškama O Izdanju u vezi sa podržnom verzijom PHP-a. Vaša verzija je',
	'ERR_CHECKSYS_IIS_INVALID_VER'      => 'Sugar ne podržava Vašu verziju IIS-a. Treba da instalirate verziju koja kompatibilina sa Sugar aplikacijom. Konsultujte Matricu Kompatibilnosti u Beleškama O Izdanju u vezi sa podržnom verzijom IIS-a. Vaša verzija je',
    'ERR_CHECKSYS_FASTCGI'              => 'Primetili smo da ne koristite FastCGI rukovalac mapiranja za PHP. Potrebno je da instalirate/konfigurišete verziju koja je kompatibilna sa Sugar aplikacijom. Podržane verzije možete da pronađete u Matrici kompatibilnosti u Beleškama o izdanju. Više informacija potražite na <a href="http://www.iis.net/php/" target="_blank" rel="nofollow noopener noreferrer">http://www.iis.net/php/</a> ',
	'ERR_CHECKSYS_FASTCGI_LOGGING'      => 'Za optimalno iskustvo korišćenja IIS/FastCGI sapi, podesite fastcgi.logging na 0 u php.ini fajlu.',
    'ERR_CHECKSYS_PHP_UNSUPPORTED'		=> 'Instalirana PHP verzija nije podržana : ( ver',
    'LBL_DB_UNAVAILABLE'                => 'Baza nije dostupna',
    'LBL_CHECKSYS_DB_SUPPORT_NOT_AVAILABLE' => 'Podrška za bazu podataka nije pronađena. Uverite se da imate potrebne upravljačke programe za jednu od sledećih podržanih vrsta baze podataka: MySQL, MS SQLServer, Oracle ili DB2. Možda ćete morati da uklonite komentar sa ekstenzije u datoteci php.ini ili da je ponovo kompajlirate sa odgovarajućom binarnom datotekom u zavisnosti od verzije PHP-a. Više informacija o tome kako da omogućite Podršku za bazu podataka potražite u priručniku za PHP.',
    'LBL_CHECKSYS_XML_NOT_AVAILABLE'        => 'Nisu nađene funkcije povezane sa bibliotekama XML parsiranja koje su neophodne za Sugar aplikaciju. Možda ćete morati da uklonite ekstenziju u php.ini fajlu , ili da ga ponovo kompajlirate sa tačnim binarnim fajlom, u zavisnosti od Vaše verzije PHP-a. Za više informacija molimo da pogledate PHP priručnik.',
    'LBL_CHECKSYS_CSPRNG' => 'Generator nasumičnog broja',
    'ERR_CHECKSYS_MBSTRING'             => 'Funkcije koje zavise od Multibyte Strings PHP ekstenzije (mbstring), a koje su neophodne za ispravan rad Sugar aplikacije, nisu pronađene. <br/><br/>Generalno, mbstring modul podrazumevano nije omogućen u PHP-u i mora se posebno aktivirati uključivanjem opcije --enable-mbstring za vreme bildovanja PHP binarnog fajla. Za više informacija, molimo konsultujte vašu PHP dokumentaciju.',
    'ERR_CHECKSYS_SESSION_SAVE_PATH_NOT_SET'       => 'Podešavanje session.save_path u Vašem PHP konfiguracionom fajlu (php.ini) nije postavljeno ili je postavljno na folder koji ne postoji. Možda ćete morati da postavite podešavanja save_path u php.ini ili da verifikujete da postavke foldera u save_path postoje.',
    'ERR_CHECKSYS_SESSION_SAVE_PATH_NOT_WRITABLE'  => 'Podešavanje session.save_path u Vašem php konfiguracionom fajlu (php.ini) su postavljena na folder u koji nije dozvoljen upis. Molim da uradite neophdne korake kako bi mogli da upisujete u folder.  <br>U zavisnosti od vašeg operativnog sistema moraćete da promenite dozvole nad fajlom pokretanjem opcije chmod 766, ili desnim klikom na ime fajla pristupiti svojstvima i isključiti opciju "read only".',
    'ERR_CHECKSYS_CONFIG_NOT_WRITABLE'  => 'Konfiguracioni fajl postoji ali u njega nije dozvoljen upis. Molimo, preduzmite neophodne korake da bi u njega bio dozoljen upis. U zavisnosti od vašeg operativnog sistema moraćete da promenite dozvole nad fajlom pokretanjem opcije chmod 766, ili desnim klikom na ime fajla pristupiti svojstvima i isključiti opciju "read only".',
    'ERR_CHECKSYS_CONFIG_OVERRIDE_NOT_WRITABLE'  => 'Datoteka za prepisivanje konfiguracije postoji ali je u nju nemoguće pisati. Molimo preuzmite neophodne korake kako bi se u ovu datoteku moglo pisati. U zavisnosti od Vašeg operativnog sistema, možda će biti potrebno da promenite dozvole pokretanjem komande "chmod 776" ili desnim klikom na ime datoteke pristupite svojstvima i sklonite odabir opcije "read only".',
    'ERR_CHECKSYS_CUSTOM_NOT_WRITABLE'  => 'Prilagođeni direktorijum postoji ali u njega nije dozvoljeno upisivanje. Možete da promenite dozvolu nad fajlom u zavisnosti od Vašeg operativnog sistema pomoću chmod766 ili desnim klikom u svojstvima da isključite opciju "read only". Molimo da preduzmete neophodne korake kako bi u ovaj fajl bilo moguće upisivanje.',
    'ERR_CHECKSYS_FILES_NOT_WRITABLE'   => "Fajlovi i direktorijumi izlistani ispod nisu upisivi ili nedostaju i ne mogu biti kreirani U zavisnosti od vašeg operativnog sistema moraćete da promenite dozvole nad fajlom pokretanjem opcije chmod 766, ili desnim klikom na osnovni folder i isključiti opciju \"read only\" i primeniti to na sve podfoldere.",
	'ERR_CHECKSYS_SAFE_MODE'			=> 'Uključen je siguran način rada (mozda biste želeli da ga onemogućite u php.ini)',
    'ERR_CHECKSYS_ZLIB'					=> 'ZLib podrška nije nađena: SugarCRM ubira ogromne benefite performanci sa zlib kompresijom.',
    'ERR_CHECKSYS_ZIP'					=> 'ZIP podrška nije nađena: Potrebna je ZIP podrška da bi SugarCRM procesirao kompresovane fajlove.',
    'ERR_CHECKSYS_BCMATH'				=> 'BCMATH podrška nije pronađena: SugarCRM zahteva BCMATH podršku za matematiku arbitarne preciznosti.',
    'ERR_CHECKSYS_HTACCESS'             => 'Test za izmenu .htaccess nije uspeo. To najčešće znači da nemate podešenu opciju AllowOverride za Sugar direktorijum.',
    'ERR_CHECKSYS_CSPRNG' => 'Izuzetak za CSPRNG',
	'ERR_DB_ADMIN'						=> 'Uneto ime i/ili lozinka administratora baze nije validno, ne može da se uspostavi veza sa bazom. Molim, unesite važeće korisničko ime i lozinku. (Greška:',
    'ERR_DB_ADMIN_MSSQL'                => 'Uneto ime i/ili lozinka administratora baze nije validno, nije uspostavljena veza na bazu. Molim, unesite važeće korisničko ime i lozinku.',
	'ERR_DB_EXISTS_NOT'					=> 'Naznačena baza ne postoji.',
	'ERR_DB_EXISTS_WITH_CONFIG'			=> 'Baza već postoji sa konfiguracionim podacima. Da bi pokrenuli instalaciju sa izabranom bazom, molim pokrenite ponovo instalaciju i izaberite: "Odustani i ponovo kreiraj SugarCRM tabele?"  Za nadgradnju, koristite čarobnjaka nadgradnje na konzoli administratora.  Molim, pročitajte dokumentaciju nadgradnje koja se nalazi <a href="http://www.sugarforge.org/content/downloads/" target="_new">ovde</a>.',
	'ERR_DB_EXISTS'						=> 'Uneto ime baze već postoji -- ne mogu da kreiram drugu bazu sa istim imenom.',
    'ERR_DB_EXISTS_PROCEED'             => 'Uneto ime baze već postoji. Možete učiniti sledeće<br>1.  Pritisnite dugme Nazad i unesite novo ime baze <br>2. Kliknite na dugme  Sledeći i nastavite dalje ali će sve postojeće tabele u bazi podataka biti izbačene.  <strong>Time će sve tabele i podaci biti trajno izbrisani.</strong>',
	'ERR_DB_HOSTNAME'					=> 'Ime hosta ne može biti neispunjeno.',
	'ERR_DB_INVALID'					=> 'Izabran je neispravan tip baze.',
	'ERR_DB_LOGIN_FAILURE'				=> 'Unesen host baze, korisničko ime i/ili lozinka su pogrešni, i veza sa bazom podataka ne može biti uspostavljena. Molimo, unesite ispravan host baze, korisničko ime i lozinku.',
	'ERR_DB_LOGIN_FAILURE_MYSQL'		=> 'Unesen host baze, korisničko ime i/ili lozinka su pogrešni, i veza sa bazom podataka ne može biti uspostavljena. Molimo, unesite ispravan host baze, korisničko ime i lozinku.',
	'ERR_DB_LOGIN_FAILURE_MSSQL'		=> 'Unesen host baze, korisničko ime i/ili lozinka su pogrešni, i veza sa bazom podataka ne može biti uspostavljena. Molimo, unesite ispravan host baze, korisničko ime i lozinku.',
	'ERR_DB_MYSQL_VERSION'				=> 'Sugar ne podržava Vašu verziju MySQL (%s). Moraćete da instalirate verziju koja je kompatiblina sa Sugar aplikacijom. Molimo konsultujte matricu kompatibilnosti u dokumentaciji.',
	'ERR_DB_NAME'						=> 'Ime baze ne može biti prazno.',
	'ERR_DB_NAME2'						=> "Ime baze ne može da sadrži &#39;\\&#39;, &#39;/&#39;, ili &#39;.&#39;",
    'ERR_DB_MYSQL_DB_NAME_INVALID'      => "Ime baze ne može da sadrži &#39;\\&#39;, &#39;/&#39;, ili &#39;.&#39;",
    'ERR_DB_MSSQL_DB_NAME_INVALID'      => "Ime baze ne može da sadrži &#39;\"&#39;, \"&#39;\", &#39;*&#39;, &#39;/&#39;, &#39;\\&#39;, &#39;?&#39;, &#39;:&#39;, &#39;<&#39;, &#39;>&#39;, ili &#39;-&#39;",
    'ERR_DB_OCI8_DB_NAME_INVALID'       => "Naziv baze podataka može da se sastoji samo iz alfanumeričkih znakova i simbola „#“, „_“, „-“, „:“, „.“, „/“ ili „$“",
	'ERR_DB_PASSWORD'					=> 'Lozinke administratora Sugar baze koje su unete ne odgovaraju. Molimo, unesite ponovo lozinke u polja lozinke.',
	'ERR_DB_PRIV_USER'					=> 'Unesite korisničko ime administratora baze. Ovaj korisnik je neophodan za početno povezivanje na bazu.',
	'ERR_DB_USER_EXISTS'				=> 'Korisničko ime za Sugar bazu podataka već postoji -- ne možete kreirati novo sa istim imenom. Molim unesite novo korisničko ime.',
	'ERR_DB_USER'						=> 'Unesite korisničko ime administratora za Sugar bazu podataka.',
	'ERR_DBCONF_VALIDATION'				=> 'Molim, ispravite navedene greške pre nastavka:',
    'ERR_DBCONF_PASSWORD_MISMATCH'      => 'Lozinke korisnika Sugar baze koje su unete ne odgovaraju. Molimo, unesite ponovo lozinke u polja lozinke.',
	'ERR_ERROR_GENERAL'					=> 'Pojavile su se sledeće greške:',
	'ERR_LANG_CANNOT_DELETE_FILE'		=> 'Ne mogu da obrišem fajl:',
	'ERR_LANG_MISSING_FILE'				=> 'Ne mogu da nađem fajl:',
	'ERR_LANG_NO_LANG_FILE'			 	=> 'Nije nađen nijedan jezički paket unutar include/language:',
	'ERR_LANG_UPLOAD_1'					=> 'Došlo je greške pri preuzimanju. Pokušajte ponovo.',
	'ERR_LANG_UPLOAD_2'					=> 'Jezički paketi moraju biti u ZIP arhivama.',
	'ERR_LANG_UPLOAD_3'					=> 'PHP ne može da pomeri privremeni fajl u novi direktorijum.',
	'ERR_LICENSE_MISSING'				=> 'Nedostaju obavezna polja',
	'ERR_LICENSE_NOT_FOUND'				=> 'Licenca nije pronađena!',
	'ERR_LOG_DIRECTORY_NOT_EXISTS'		=> 'Navedeni log direktorijum nije validan direktorijum.',
	'ERR_LOG_DIRECTORY_NOT_WRITABLE'	=> 'U navedeni log direktorijum se ne može upisivati.',
	'ERR_LOG_DIRECTORY_REQUIRED'		=> 'Log direktorijum je neophodan ako želite da navedete svoj sopstveni.',
	'ERR_NO_DIRECT_SCRIPT'				=> 'Skripta se ne može sada pokrenuti.',
	'ERR_NO_SINGLE_QUOTE'				=> 'Ne možete koristiti jedan znak navodnika za označavanje',
	'ERR_PASSWORD_MISMATCH'				=> 'Lozinke Sugar administratora koje su unete ne odgovaraju. Molimo, unesite ponovo lozinke u polja lozinke.',
	'ERR_PERFORM_CONFIG_PHP_1'			=> 'Ne mogu pisati u config.php fajl .',
	'ERR_PERFORM_CONFIG_PHP_2'			=> 'Možete da nastavite sa instalacijom tako što će te ručno napraviti config.php fajl i nadodati konfiguracione podatke ispod u config.php fajl. Međutim,<strong>morate</strong>napraviti config.php pre nego što pređete na sledeći korak.',
	'ERR_PERFORM_CONFIG_PHP_3'			=> 'Da li ste napravili config.php fajl?',
	'ERR_PERFORM_CONFIG_PHP_4'			=> 'Pažnja: Ne mogu da pišem u  config.php file. Molim, proverite da li postoji.',
	'ERR_PERFORM_HTACCESS_1'			=> 'Ne mogu da pišem u',
	'ERR_PERFORM_HTACCESS_2'			=> 'fajl.',
	'ERR_PERFORM_HTACCESS_3'			=> 'Ako želite da osigurate da se Vašem log fajlu ne može pristupiti preko pretraživača, kreirajte .htaccess fajl u Vašem log direktorijumu sa linijom:',
	'ERR_PERFORM_NO_TCPIP'				=> '<b>Nismo našli internet vezu.</b> Kada se konektujete, molimo posetite <a href="http://www.sugarcrm.com/home/index.php?option=com_extended_registration&task=register">http://www.sugarcrm.com/home/index.php?option=com_extended_registration&task=register</a> da bi se registrovali kod SugarCRM. Ako nas delimično uputite u to kako planirate da koristite SugarCRM, mi ćemo obezbediti da Vam uvek budu isporučene adekvatne aplikacije za Vaše poslovne potrebe.',
	'ERR_SESSION_DIRECTORY_NOT_EXISTS'	=> 'Navedeni direktorijum sesije nije validan direktorijum.',
	'ERR_SESSION_DIRECTORY'				=> 'U navedeni direktorijum se ne može upisivati.',
	'ERR_SESSION_PATH'					=> 'Obavezna je putanja sesije ako želite da navedete svoju sopstvenu.',
	'ERR_SI_NO_CONFIG'					=> 'Niste uneli config_si.php u vrhu dokumenta, ili niste definisali $sugar_config_si u config.php',
	'ERR_SITE_GUID'						=> 'ID broj aplikacije je neophodan ako želite da navedete sopstveni.',
    'ERROR_SPRITE_SUPPORT'              => "Trenutno je nemoguće locirati GD biblioteku, zbog čega nećete biti u mogućnosti da koristite CSS Sprite funkcionalnost.",
	'ERR_UPLOAD_MAX_FILESIZE'			=> 'Pažnja: Trebalo bi promeniti Vašu PHP konfiguraciju kako bi se omogućio unos fajlova od najmanje 6MB.',
    'LBL_UPLOAD_MAX_FILESIZE_TITLE'     => 'Veličina uveženog fajla',
	'ERR_URL_BLANK'						=> 'Unesite osnovni URL za Sugar.',
	'ERR_UW_NO_UPDATE_RECORD'			=> 'Ne mogu da lociram zapis instalacije',
    'ERROR_FLAVOR_INCOMPATIBLE'         => 'Otpremljena datoteka nije kompatibilna sa ovim izdanjem (Professional, Enterprise ili Ultimate izdanje) Sugar-a: ',
	'ERROR_LICENSE_EXPIRED'				=> "Greška: Vaša licenca je istekla",
	'ERROR_LICENSE_EXPIRED2'			=> "dan(a) ranije. Molim idite na <a href=\"index.php?action=LicenseSettings&module=Administration\">\"License Management\"</a>  na ekranu za Administraciju da bi ste uneli vaš nov ključ licence. Ako ne unesete novi ključ licence u roku od 30 dana od dana isteka vaše licence, nećete više biti u mogućnosti da se prijavite na ovu aplikaciju.",
	'ERROR_MANIFEST_TYPE'				=> 'Konfiguracioni fajl (manifest.php) mora da navede tip paketa.',
	'ERROR_PACKAGE_TYPE'				=> 'Konfiguracioni fajl (manifest.php) navodi tip paketa koji nije prepoznatljiv',
	'ERROR_VALIDATION_EXPIRED'			=> "Greška: Vaš validacioni ključ je istekao",
	'ERROR_VALIDATION_EXPIRED2'			=> "dan(a) ranije. Molim idite na <a href=\"index.php?action=LicenseSettings&module=Administration\">\"License Management\"</a>  na ekranu za Administraciju da bi ste uneli vaš nov ključ za validaciju. Ako ne unesete novi ključ za validaciju u roku od 30 dana od dana isteka vašeg validacionog ključa, nećete više biti u mogućnosti da se prijavite na ovu aplikaciju.",
	'ERROR_VERSION_INCOMPATIBLE'		=> 'Uvezeni fajl nije kompatibilan sa ovom verzijom Sugar aplikacije:',

	'LBL_BACK'							=> 'Nazad',
    'LBL_CANCEL'                        => 'Otkaži',
    'LBL_ACCEPT'                        => 'Prihvatam',
	'LBL_CHECKSYS_1'					=> 'Da bi Vaša Sugar CRM instalacija radila, molim proverite da li su sve opcije koje je sistem označio markirane zeleno. Ako je neka markirana crveno preduzmite neophodne korake da to ispravite.<BR><BR> za više informacija o proverenim opcijama posetite <a href="http://www.sugarcrm.com/crm/installation" target="_blank">Sugar Wiki</a>.',
	'LBL_CHECKSYS_CACHE'				=> 'Podfolderi keša sa mogućnošću upisa',
    'LBL_DROP_DB_CONFIRM'               => 'Uneto ime baze već postoji.<br>Možete ili:<br>1.  Kliknite na dugme Poništi i unesite novo ime, ili<br>2.  Kliknite na dugme Prihvati i nastavite dalje.  Sve postojeće tabele u bazi biće izbačene. <strong>Time će svi prethodni podaci biti trajno izbrisani.</strong>',
	'LBL_CHECKSYS_CALL_TIME'			=> 'PHP Allow Call Time Pass Reference opcija je isključena',
    'LBL_CHECKSYS_COMPONENT'			=> 'Komponenta',
	'LBL_CHECKSYS_COMPONENT_OPTIONAL'	=> 'Opcione komponente',
	'LBL_CHECKSYS_CONFIG'				=> 'Pisiv SugarCRM konfiguracioni fajl (config.php)',
	'LBL_CHECKSYS_CONFIG_OVERRIDE'		=> 'SugarCRM konfiguralni fajl (config_override.php)',
	'LBL_CHECKSYS_CURL'					=> 'cURL Modul',
    'LBL_CHECKSYS_SESSION_SAVE_PATH'    => 'Podešavanje putanje za čuvanje sesije',
	'LBL_CHECKSYS_CUSTOM'				=> 'Prilagođeni folder sa mogućnošću upisivanja',
	'LBL_CHECKSYS_DATA'					=> 'Podfolderi podataka sa mogućnošću upisa',
	'LBL_CHECKSYS_IMAP'					=> 'IMAP Modul',
	'LBL_CHECKSYS_MQGPC'				=> 'Magic Quotes GPC',
	'LBL_CHECKSYS_MBSTRING'				=> 'MB Strings Modul',
	'LBL_CHECKSYS_MEM_OK'				=> 'U redu (Bez ograničenja)',
	'LBL_CHECKSYS_MEM_UNLIMITED'		=> 'U redu (Neograničeno)',
	'LBL_CHECKSYS_MEM'					=> 'PHP memorijsko ograničenje',
	'LBL_CHECKSYS_MODULE'				=> 'Podfolderi i fajlovi modula sa mogućnošću upisa',
	'LBL_CHECKSYS_MYSQL_VERSION'		=> 'MySQL verzija',
	'LBL_CHECKSYS_NOT_AVAILABLE'		=> 'Nije raspoloživo',
	'LBL_CHECKSYS_OK'					=> 'OK',
	'LBL_CHECKSYS_PHP_INI'				=> 'Vaš php konfiguracioni fajl (php.ini) lociran je u:',
	'LBL_CHECKSYS_PHP_OK'				=> 'U redu (ver',
	'LBL_CHECKSYS_PHPVER'				=> 'PHP verzija',
    'LBL_CHECKSYS_IISVER'               => 'IIS verzija',
    'LBL_CHECKSYS_FASTCGI'              => 'FastCGI',
	'LBL_CHECKSYS_RECHECK'				=> 'Proveri ponovo',
	'LBL_CHECKSYS_SAFE_MODE'			=> 'PHP siguran način rada je isključen',
	'LBL_CHECKSYS_SESSION'				=> 'Putanja za čuvanje sesije sa mogućnošću upisa (',
	'LBL_CHECKSYS_STATUS'				=> 'Status',
	'LBL_CHECKSYS_TITLE'				=> 'Provera saglasnosti sistema',
	'LBL_CHECKSYS_VER'					=> 'Nađena: ( ver',
	'LBL_CHECKSYS_XML'					=> 'XML parsiranje',
	'LBL_CHECKSYS_ZLIB'					=> 'ZLIB modul kompresovanja',
	'LBL_CHECKSYS_ZIP'					=> 'ZIP modul hendlovanja',
    'LBL_CHECKSYS_BCMATH'				=> 'Modul matematike arbitarne preciznosti',
    'LBL_CHECKSYS_HTACCESS'				=> 'AllowOverride podešavanje za .htaccess',
    'LBL_CHECKSYS_FIX_FILES'            => 'Molim ,popravite sledeće fajlove ili foldere pre nego što nastavite:',
    'LBL_CHECKSYS_FIX_MODULE_FILES'     => 'Molimo da ppravite sledeće foldere modula i fajlove u njima pre nego što nastavite dalje:',
    'LBL_CHECKSYS_UPLOAD'               => 'Direktorijum za postavljanje datoteka',
    'LBL_CLOSE'							=> 'Zatvori',
    'LBL_THREE'                         => '3',
	'LBL_CONFIRM_BE_CREATED'			=> 'biće kreirana',
	'LBL_CONFIRM_DB_TYPE'				=> 'Tip baze',
	'LBL_CONFIRM_DIRECTIONS'			=> 'Molim, potvrdite navedena podešavanja. Ako želite da promenite neku od vrednosti, kliknite na "Nazad" da bi ga izmenili. U suprotnom kliknite na "Sledeći" da bi započeli instalaciju.',
	'LBL_CONFIRM_LICENSE_TITLE'			=> 'Informacije o licenci',
	'LBL_CONFIRM_NOT'					=> 'ne',
	'LBL_CONFIRM_TITLE'					=> 'Potvrdi podešavanja',
	'LBL_CONFIRM_WILL'					=> 'će',
	'LBL_DBCONF_CREATE_DB'				=> 'Kreiraj Bazu podataka',
	'LBL_DBCONF_CREATE_USER'			=> 'Kreiraj korisnika [Alt+N]',
	'LBL_DBCONF_DB_DROP_CREATE_WARN'	=> 'Pažnja: Svi Sugar biće obrisani<br>ako je ovo polje označeno.',
	'LBL_DBCONF_DB_DROP_CREATE'			=> 'Odbaci i ponovo kreiraj postojeće Sugar tabele?',
    'LBL_DBCONF_DB_DROP'                => 'Odbaci tabele',
    'LBL_DBCONF_DB_NAME'				=> 'Ime baze podataka',
	'LBL_DBCONF_DB_PASSWORD'			=> 'Lozinka korisnika Sugar baze',
	'LBL_DBCONF_DB_PASSWORD2'			=> 'Unesite ponovo lozinku korisnika Sugar baze',
	'LBL_DBCONF_DB_USER'				=> 'Korisničko ime Sugar baze',
    'LBL_DBCONF_SUGAR_DB_USER'          => 'Korisničko ime Sugar baze',
    'LBL_DBCONF_DB_ADMIN_USER'          => 'Korisničko ime administratora baze',
    'LBL_DBCONF_DB_ADMIN_PASSWORD'      => 'Lozinka administratora baze',
	'LBL_DBCONF_DEMO_DATA'				=> 'Popunite bazu sa demo podacima?',
    'LBL_DBCONF_DEMO_DATA_TITLE'        => 'Odaberite demo padatke',
	'LBL_DBCONF_HOST_NAME'				=> 'Ime hosta',
	'LBL_DBCONF_HOST_INSTANCE'			=> 'Host instanca',
	'LBL_DBCONF_HOST_PORT'				=> 'Port',
    'LBL_DBCONF_SSL_ENABLED'            => 'Omogući SSL vezu',
	'LBL_DBCONF_INSTRUCTIONS'			=> 'Molim, unesite podatke za konfiguraciju Vaše baze podataka. Ako ste nesigurni koje vrednosti da unesete, savetujemo Vam da koristite podrazumevane.',
	'LBL_DBCONF_MB_DEMO_DATA'			=> 'Koristi višebajtni tekst u demo podacima?',
    'LBL_DBCONFIG_MSG2'                 => 'Ime web servera ili mašine (lokalnog računara) na kojoj će biti locirana baza (kao što je localhost ili www.mojdomen.com):',
    'LBL_DBCONFIG_MSG3'                 => 'Ime baze koja će sadržati podatke za Sugar koji će biti instaliran:',
    'LBL_DBCONFIG_B_MSG1'               => 'Da bi postavili Sugar bazu neophodi su korisničko ime i lozinka administratora baze koji može da kreira tabele baza i upisuje u baze.',
    'LBL_DBCONFIG_SECURITY'             => 'U cilju povećanja sigurnosti, moguće je odrediti korisnika koji jedini ima ekskluzivni pristup bazi podataka SugarCRM sistema. Ovaj korisnik mora imati mogućnost upisivanja, ažuriranja i učitavanja podataka u Sugar bazu koja će biti kreirana za ovu instancu. Ovaj korisnik može biti gore navedeni administrator baze, ili možete da dobavite nove ili postojeće informacije o korisniku baze.',
    'LBL_DBCONFIG_AUTO_DD'              => 'Uradi umesto mene',
    'LBL_DBCONFIG_PROVIDE_DD'           => 'Navedite postojećeg korisnika',
    'LBL_DBCONFIG_CREATE_DD'            => 'Definiši korisnika koji se kreira',
    'LBL_DBCONFIG_SAME_DD'              => 'Isto kao administrator',
	//'LBL_DBCONF_I18NFIX'              => 'Apply database column expansion for varchar and char types (up to 255) for multi-byte data?',
    'LBL_FTS'                           => 'Pretraživanje celog teksta',
    'LBL_FTS_INSTALLED'                 => 'Instaliran',
    'LBL_FTS_INSTALLED_ERR1'            => 'Mogućnosti pune tekstualne pretrage nisu instalirane.',
    'LBL_FTS_INSTALLED_ERR2'            => 'Još uvek je moguće instalirati ali ne i koristiti funkcionalnost pune tekstualne pretrage. Molimo pogledajte u vodič za instalaciju servera baze podataka, kako biste saznali kako da ovo izvedete ili kontaktirajte Vašeg administratora.',
	'LBL_DBCONF_PRIV_PASS'				=> 'Lozinka privilegovanog korisnika baze',
	'LBL_DBCONF_PRIV_USER_2'			=> 'Gornji korisnik naloga za bazu je privilegovan korisnik?',
	'LBL_DBCONF_PRIV_USER_DIRECTIONS'	=> 'Ovaj privilegovani korisnik baze mora imati odgovarajuće dozvole da kreira bazu, briše/kreira tabele, i kreira korisnika. Ovaj privilegovani korisnik će biti upotrebljen samo za obavljanje ovih zadataka kako budu traženi tokom procesa instalacije. Možete koristiti istog korisnika kao gore navedenog ako isti ima dovoljno prava.',
	'LBL_DBCONF_PRIV_USER'				=> 'Ime privilegovanog korisnika baze',
	'LBL_DBCONF_TITLE'					=> 'Konfiguracija baze',
    'LBL_DBCONF_TITLE_NAME'             => 'Unesite ime baze',
    'LBL_DBCONF_TITLE_USER_INFO'        => 'Unesite informacije za korisnike baze',
	'LBL_DISABLED_DESCRIPTION_2'		=> 'Nakon što izvršite ovu promenu, možete pritisnuti dugme "Početak" kako bi započeli Vašu instalaciju.  <i>Nakon što se instalacija završi, biće potrebno da vrednost opcije &#39;installer_locked&#39; postavite na &#39;true&#39;.</i>',
	'LBL_DISABLED_DESCRIPTION'			=> 'Program za instalaciju je već bio pokrenut.  Kao sigurnosna mera, onemogućemo je pokretanje drugi put. Ako ste potpuno sigurni u ponovno pokretanje, molim idite na Vaš config.php fajl i pronađite (ili dodajte) promenljivu sa imenom  &#39;installer_locked&#39;  i postavite je na &#39;false&#39;. Red bi trebalo da izgleda ovako:',
	'LBL_DISABLED_HELP_1'				=> 'Za pomoć pri instalaciji, molim posetite SugarCRM',
    'LBL_DISABLED_HELP_LNK'               => 'http://www.sugarcrm.com/forums/',
	'LBL_DISABLED_HELP_2'				=> 'forumi podrške',
	'LBL_DISABLED_TITLE_2'				=> 'Instalacija SugarCRM je onemogućena',
	'LBL_DISABLED_TITLE'				=> 'SugarCRM instalacija onemogućena',
	'LBL_EMAIL_CHARSET_DESC'			=> 'Skup karaktera koji se najčešće koriste na Vašoj mašini',
	'LBL_EMAIL_CHARSET_TITLE'			=> 'Podešavanja odlaznih Email-ova',
    'LBL_EMAIL_CHARSET_CONF'            => 'Skup karaktera za odlazne Email-ove',
	'LBL_HELP'							=> 'Pomoć',
    'LBL_INSTALL'                       => 'Instaliraj',
    'LBL_INSTALL_TYPE_TITLE'            => 'Opcije instalacije',
    'LBL_INSTALL_TYPE_SUBTITLE'         => 'Izaberi tip instalacije',
    'LBL_INSTALL_TYPE_TYPICAL'          => '<b>Uobičajena instalacija</b>',
    'LBL_INSTALL_TYPE_CUSTOM'           => '<b>Prilagođena instalacija</b>',
    'LBL_INSTALL_TYPE_MSG1'             => 'Ključ je neophodan za opštu funkcionalsnost aplikacije, ali nije neophodan za instalaciju. Ne morate sada da unesete ključ, ali ćete morati da ga unesete nakon instaliranja aplikacije.',
    'LBL_INSTALL_TYPE_MSG2'             => 'Zahteva minimalan broj informacija pri instalaciji. Preporučljivo za nove korisnike.',
    'LBL_INSTALL_TYPE_MSG3'             => 'Omogućava dodatna podešavanja tokom instalacije. Većina ovih opcija je takođe dostupna nakon instalacije na administratorskim stranama. Preporučljivo za naprednije korisnike.',
	'LBL_LANG_1'						=> 'Da bi koristili drugačiji jezik u Sugar-u a ne podrazumevani jezik (US-English), možete sada uvesti i instalirati jezički paket. Takođe, moći ćete da uvezete i instalirate jezičke pakete koji su u okrviru Sugar aplikacije. Ako želite da preskočite ovaj korak pritisnite Sledeći.',
	'LBL_LANG_BUTTON_COMMIT'			=> 'Instaliraj',
	'LBL_LANG_BUTTON_REMOVE'			=> 'Ukloni',
	'LBL_LANG_BUTTON_UNINSTALL'			=> 'Deinstaliraj',
	'LBL_LANG_BUTTON_UPLOAD'			=> 'Uvezi',
	'LBL_LANG_NO_PACKS'					=> 'nijedan',
	'LBL_LANG_PACK_INSTALLED'			=> 'Sledeći jezički paketi su instalirani:',
	'LBL_LANG_PACK_READY'				=> 'Sledeći jezički paketi su već instalirani:',
	'LBL_LANG_SUCCESS'					=> 'Jezički paket je uspešno uvežen.',
	'LBL_LANG_TITLE'			   		=> 'Jezički Paket',
    'LBL_LAUNCHING_SILENT_INSTALL'     => 'Sugar se instalira. Ovo može da potraje.',
	'LBL_LANG_UPLOAD'					=> 'Uvezi jezički paket',
	'LBL_LICENSE_ACCEPTANCE'			=> 'Prihvatanje licence',
    'LBL_LICENSE_CHECKING'              => 'Provera sistema radi kompatibilnosti.',
    'LBL_LICENSE_CHKENV_HEADER'         => 'Proveravam okruženje',
    'LBL_LICENSE_CHKDB_HEADER'          => 'Proveravanje baze podataka i FTS akreditiva.',
    'LBL_LICENSE_CHECK_PASSED'          => 'Sistem je prošao proveru kompatibilnosti.',
    'LBL_LICENSE_REDIRECT'              => 'Preusmeravanje u',
	'LBL_LICENSE_DIRECTIONS'			=> 'Ako imate informaciju o licenci, molim unesite je u polje ispod.',
	'LBL_LICENSE_DOWNLOAD_KEY'			=> 'Unesite ključ preuzimanja',
	'LBL_LICENSE_EXPIRY'				=> 'Datum isteka',
	'LBL_LICENSE_I_ACCEPT'				=> 'Prihvatam',
	'LBL_LICENSE_NUM_USERS'				=> 'Broj korisnika',
	'LBL_LICENSE_PRINTABLE'				=> 'Prikaz materijala spremnog za štampanje',
    'LBL_PRINT_SUMM'                    => 'Štampaj sadržaj',
	'LBL_LICENSE_TITLE_2'				=> 'SugarCRM licenca',
	'LBL_LICENSE_TITLE'					=> 'Informacije o licenci',
	'LBL_LICENSE_USERS'					=> 'Licencirani korisnici',

	'LBL_LOCALE_CURRENCY'				=> 'Podešavanja valute',
	'LBL_LOCALE_CURR_DEFAULT'			=> 'Podrazumevana valuta',
	'LBL_LOCALE_CURR_SYMBOL'			=> 'Simbol valute',
	'LBL_LOCALE_CURR_ISO'				=> 'Kod valute (ISO 4217)',
	'LBL_LOCALE_CURR_1000S'				=> 'Separataor hiljada',
	'LBL_LOCALE_CURR_DECIMAL'			=> 'Decimalni separator',
	'LBL_LOCALE_CURR_EXAMPLE'			=> 'Primer',
	'LBL_LOCALE_CURR_SIG_DIGITS'		=> 'Značajne cifre',
	'LBL_LOCALE_DATEF'					=> 'Podrazumavani format datuma',
	'LBL_LOCALE_DESC'					=> 'Određena podešavanja će se preneti na celokupan Sugar.',
	'LBL_LOCALE_EXPORT'					=> 'Podešavanje karaktera za uvoz/izvoz<br> <i>(Email, .csv, vCard, PDF, data import)</i>',
	'LBL_LOCALE_EXPORT_DELIMITER'		=> 'Izvezi (.csv) separator',
	'LBL_LOCALE_EXPORT_TITLE'			=> 'Podešavanja uvoz/izvoz',
	'LBL_LOCALE_LANG'					=> 'Podrazumevani jezik',
	'LBL_LOCALE_NAMEF'					=> 'Podrazumevan format imena',
	'LBL_LOCALE_NAMEF_DESC'				=> 's = oslovljavanje<br />f =ime<br />l = prezime',
	'LBL_LOCALE_NAME_FIRST'				=> 'Petar',
	'LBL_LOCALE_NAME_LAST'				=> 'Petrović',
	'LBL_LOCALE_NAME_SALUTATION'		=> 'Dr.',
	'LBL_LOCALE_TIMEF'					=> 'Podrazumevan format vremena',
	'LBL_LOCALE_TITLE'					=> 'Lokalno podešavanje',
    'LBL_CUSTOMIZE_LOCALE'              => 'Prilagodi lokalna podešavanja',
	'LBL_LOCALE_UI'						=> 'Korisnički intefejs',

	'LBL_ML_ACTION'						=> 'Akcija',
	'LBL_ML_DESCRIPTION'				=> 'Opis',
	'LBL_ML_INSTALLED'					=> 'Datum instaliranja',
	'LBL_ML_NAME'						=> 'Naziv',
	'LBL_ML_PUBLISHED'					=> 'Datum objavljivanja',
	'LBL_ML_TYPE'						=> 'Tip',
	'LBL_ML_UNINSTALLABLE'				=> 'Nemoguće instalirati',
	'LBL_ML_VERSION'					=> 'Verzija',
	'LBL_MSSQL'							=> 'SQL Server',
	'LBL_MSSQL_SQLSRV'				    => 'SQL Server (Microsoft SQL Server Driver za PHP)',
	'LBL_MYSQL'							=> 'MySQL',
    'LBL_MYSQLI'						=> 'MySQL (mysqli ekstenzija)',
	'LBL_IBM_DB2'						=> 'IBM DB2',
	'LBL_NEXT'							=> 'Sledeći',
	'LBL_NO'							=> 'Ne',
    'LBL_ORACLE'						=> 'Oracle',
	'LBL_PERFORM_ADMIN_PASSWORD'		=> 'Podešavanje administratorske lozinke sajta',
	'LBL_PERFORM_AUDIT_TABLE'			=> 'Tabela praćenja promena /',
	'LBL_PERFORM_CONFIG_PHP'			=> 'Kreiranje Sugar konfiguracionog fajla',
	'LBL_PERFORM_CREATE_DB_1'			=> '<b>Kreiranje baze</b>',
	'LBL_PERFORM_CREATE_DB_2'			=> '<b>Uključeno</b>',
	'LBL_PERFORM_CREATE_DB_USER'		=> 'Kreiranje korisničkog imena i lozinke baze ...',
	'LBL_PERFORM_CREATE_DEFAULT'		=> 'Kreiranje podrazumevanih Sugar podataka',
	'LBL_PERFORM_CREATE_LOCALHOST'		=> 'Kreiranje korisničkog imena i lozinke baze za localhost...',
	'LBL_PERFORM_CREATE_RELATIONSHIPS'	=> 'Kreiranje Sugar tabela odnosa',
	'LBL_PERFORM_CREATING'				=> 'kreiranje /',
	'LBL_PERFORM_DEFAULT_REPORTS'		=> 'Kreiranje podrazumevanih izveštaja',
	'LBL_PERFORM_DEFAULT_SCHEDULER'		=> 'Kreiranje podrazumevanih planiranih poslova',
	'LBL_PERFORM_DEFAULT_SETTINGS'		=> 'Uvoz podrazumevanih podešavanja',
	'LBL_PERFORM_DEFAULT_USERS'			=> 'Kreiranje podrazumevanih korisnika',
	'LBL_PERFORM_DEMO_DATA'				=> 'Popunjavanje tabela baze podataka sa demo podacima (ovo može zahtevati neko vreme)',
	'LBL_PERFORM_DONE'					=> 'obavljno<br>',
	'LBL_PERFORM_DROPPING'				=> 'ispuštanje /',
	'LBL_PERFORM_FINISH'				=> 'Završi',
	'LBL_PERFORM_LICENSE_SETTINGS'		=> 'Ažuriranje informacija licence',
	'LBL_PERFORM_OUTRO_1'				=> 'Podešavanje Sugar-a',
	'LBL_PERFORM_OUTRO_2'				=> 'je sada završeno!',
	'LBL_PERFORM_OUTRO_3'				=> 'Ukupno vreme:',
	'LBL_PERFORM_OUTRO_4'				=> 'sekundi.',
	'LBL_PERFORM_OUTRO_5'				=> 'Okvirno iskorišćena memorija:',
	'LBL_PERFORM_OUTRO_6'				=> 'bajta.',
	'LBL_PERFORM_OUTRO_7'				=> 'Vaš sistem je sada instaliran i konfigurisan za korišćenje.',
	'LBL_PERFORM_REL_META'				=> 'meta veza ...',
	'LBL_PERFORM_SUCCESS'				=> 'Uspešno!',
	'LBL_PERFORM_TABLES'				=> 'Kreiranje Sugar aplikacionih tabela, tabela za praćenje promena i meta veza',
	'LBL_PERFORM_TITLE'					=> 'Izvrši podešavanje',
	'LBL_PRINT'							=> 'Štampanje',
	'LBL_REG_CONF_1'					=> 'Molim, dovršite kratki formular ispod da bi dobili najave proizvoda, vesti o obuci, specijalnim ponudama i specijalnim događajima i pozivnicama od strane SugarCRM. Mi ne prodajemo, ne iznajmljujemo, ne razmenjujemo, ili na bilo koji drugi način dostavljamo trećim licima informacije koje su ovde dobijene.',
	'LBL_REG_CONF_2'					=> 'Vaše ime i email adresa su jedini neophodna polja za registraciju. Sva ostala polja su neopbavezna, ali veoma korisna. Mi ne prodajemo, ne iznajmljujemo, ne razmenjujemo, ili na bilo koji drugi način dostavljamo trećim licima informacije koje su ovde dobijene.',
	'LBL_REG_CONF_3'					=> 'Hvala što ste se registrovali. Kliknite na dugme Kraj da bi ste prijavili u SugarCRM. Prilikom prvog prijavljivanja koristićete korisničko ime "admin"  i lozinku koju ste uneli u koraku 2.',
	'LBL_REG_TITLE'						=> 'Registracija',
    'LBL_REG_NO_THANKS'                 => 'Ne, hvala',
    'LBL_REG_SKIP_THIS_STEP'            => 'Preskoči ovaj korak',
	'LBL_REQUIRED'						=> '* Obavezno polje',

    'LBL_SITECFG_ADMIN_Name'            => 'Administratorsko ime Sugar aplikacije',
	'LBL_SITECFG_ADMIN_PASS_2'			=> 'Ponovi lozinku Sugar Administratora',
	'LBL_SITECFG_ADMIN_PASS_WARN'		=> 'Pažnja: Ovaj postupak će pogaziti admin lozinke prethodnih instalacija.',
	'LBL_SITECFG_ADMIN_PASS'			=> 'Lozinka Sugar Administratora',
	'LBL_SITECFG_APP_ID'				=> 'ID broj aplikacije',
	'LBL_SITECFG_CUSTOM_ID_DIRECTIONS'	=> 'Ako odaberete ovu opciju, moraćete da unesete ID broj aplikacije da bi zamenili ID broj koji je bio automatski generisan. ID broj obezbeđuje da sesije Sugar-a ne koristi neka druga instanca. Ako imate grupu Sugar instalacija, sve one moraju da dele isti ID broj aplikacije.',
	'LBL_SITECFG_CUSTOM_ID'				=> 'Unesite sopstveni identifikator aplikacije',
	'LBL_SITECFG_CUSTOM_LOG_DIRECTIONS'	=> 'Ako izaberete ovo, morate da navedete log direktorijum kojim ćete zameniti podrazumeveni direktorijum za Sugar logove. U zavisnosti od toga gde je log fajl lociran, pristupanje njemu preko web pretraživača biće ograničeno pomoću .htaccess.',
	'LBL_SITECFG_CUSTOM_LOG'			=> 'Ako izaberete ovo, morate da obezbedite siguran folder za čuvanje informacija o Sugar sesiji. Ako uradite ovo možete da sprečite da podaci o sesiji budu ugroženi na zajedničkim serverima.',
	'LBL_SITECFG_CUSTOM_SESSION_DIRECTIONS'	=> 'Ako izaberete ovo, morate da obezbedite siguran folder za čuvanje informacija o Sugar sesiji. Ako uradite ovo možete da sprečite da podaci o sesiji budu ugroženi na zajedničkim serverima.',
	'LBL_SITECFG_CUSTOM_SESSION'		=> 'Koristi proizvoljni direktorijum sesije za Sugar',
	'LBL_SITECFG_DIRECTIONS'			=> 'Molimo, uneiste Vaše konfiguracione informacije ispod. Ako niste sigurni koja polja, predlažemo da koristite podrazumevane vrednosti.',
	'LBL_SITECFG_FIX_ERRORS'			=> '<b>Molim, ispravite sledeće greške pre nego što nastavite:</b>',
	'LBL_SITECFG_LOG_DIR'				=> 'Log direktorijum',
	'LBL_SITECFG_SESSION_PATH'			=> 'Putanja do direktorijuma sesije<br>(mora biti pisiv)',
	'LBL_SITECFG_SITE_SECURITY'			=> 'Izaberite sigurnosne opcije',
	'LBL_SITECFG_SUGAR_UP_DIRECTIONS'	=> 'Ako odaberete ovu opciju, sistem će periodično proveravati da li postoje ažurirane verzije aplikacije.',
	'LBL_SITECFG_SUGAR_UP'				=> 'Poveri automatski da li postoje novije verzije?',
	'LBL_SITECFG_SUGAR_UPDATES'			=> 'Konfigurisanje novijih verzija Sugar-a',
	'LBL_SITECFG_TITLE'					=> 'Konfiguracija sajta',
    'LBL_SITECFG_TITLE2'                => 'Identifikovanje Administratorskog korisnika',
    'LBL_SITECFG_SECURITY_TITLE'        => 'Bezbednost web lokacije',
	'LBL_SITECFG_URL'					=> 'URL Sugar Instance',
	'LBL_SITECFG_USE_DEFAULTS'			=> 'Koristi podrazumevno?',
	'LBL_SITECFG_ANONSTATS'             => 'Pošalji nepoznatu statistiku korišćenja?',
	'LBL_SITECFG_ANONSTATS_DIRECTIONS'  => 'Ako odaberete ovu opciju, Sugar će slati <b>anonimno </b>statistiku o Vašoj instalaciji SugarCRM Inc. svaki put kada Vaš sistem bude tražio nove verzije. Ovom informacijom pomoći ćete nam da sagledamo kako se aplikacija koristi i kako bi radili na poboljšanju proizvoda.',
    'LBL_SITECFG_URL_MSG'               => 'Unesite URL koji ćete nakon instaliranja koristiti za pristupanje Sugar-u. URL će se takođe koristiti kao osnovni za URL-ove na stranama Sugar aplikacije. URL bi trebalo da sadrži web server ili ime mašine ili IP adresu.',
    'LBL_SITECFG_SYS_NAME_MSG'          => 'Unesite ime Vašeg sistema. Ovo ime će biti prikazano u naslovnoj traci pretraživača kada korisnici posete Sugar aplikaciju.',
    'LBL_SITECFG_PASSWORD_MSG'          => 'Nakon instalacije, morate da koristite korisnika koji je administrator na Sugar-u (korisničko ime=admin) da bi se prijavili na Sugar. Unesite lozinku administratora. Ova lozinka može da se promeni nakon početnog prijavljivanja.',
    'LBL_SITECFG_COLLATION_MSG'         => 'Odaberite collation podešavanja na Vašem sistemu. Ova podešavanja će kreirati tabele sa specifičnim jezikom koji koristite. U slučaju da Vaš jezik ne zahteva specijalna podešavanja, molimo koristite podrazumevanu vrednost.',
    'LBL_SPRITE_SUPPORT'                => 'Podrška za sprites',
	'LBL_SYSTEM_CREDS'                  => 'Akreditivi sistema',
    'LBL_SYSTEM_ENV'                    => 'Okruženje sistema',
	'LBL_START'							=> 'Početak',
    'LBL_SHOW_PASS'                     => 'Prikaži lozinke',
    'LBL_HIDE_PASS'                     => 'Sakrij lozinke',
    'LBL_HIDDEN'                        => '<i>(skriveno)</i>',
//	'LBL_NO_THANKS'						=> 'Continue to installer',
	'LBL_CHOOSE_LANG'					=> '<b>Izaberite svoj jezik</b>',
	'LBL_STEP'							=> 'Korak',
	'LBL_TITLE_WELCOME'					=> 'Dobrodošli u SugarCRM',
	'LBL_WELCOME_1'						=> 'Ovaj program za instalaciju kreira SugarCRM tabele baza i postavlja parametre za konfigurisanje koji su neophodni da bi počeli sa radom. Ceo proces traje oko 10 minuta.',
    //welcome page variables
    'LBL_TITLE_ARE_YOU_READY'            => 'Da li ste spremni za instalaciju?',
    'REQUIRED_SYS_COMP' => 'Zahtevane sistemske komponente',
    'REQUIRED_SYS_COMP_MSG' =>
                    'Pre nego što počnete, molim proverite da li imate podržane verzije za sledeće sistemske<br />                      komponente:<br><br />                      <ul><br />                      <li> Bazu/Sistem za upravljanje bazama (Primeri: MySQL, SQL Server, Oracle)</li><br />                      <li> Web server (Apache, IIS)</li><br />                      </ul></br><br />Za spisak kompatibilnih sistemskih komponenti pogledajte "Release Notes" dokumentaciju za verziju Sugar-a koju instalirate.',
    'REQUIRED_SYS_CHK' => 'Početna sistemska provera',
    'REQUIRED_SYS_CHK_MSG' =>
                    'Kada započnete proces instalaciije, biće urađena sistemska provera web servera na kome su locirani Sugar fajlovi sa ciljem da se proveri da li je sistem dobro konfigurisan i da li ima sve potrebne komponente da bi instalacija bila uspešno završena. <br><br><br />Sistem proverava sledeće:<br><br />                      <ul><br />                      <li><b>PHP verziju</b> &#8211; mora biti  kompatibilna<br />                      sa aplikacijom</li><br />                                        <li><b>Parametre sesije</b> &#8211; moraju ispravno da rade</li><br />                                            <li> <b>MB Strings</b> &#8211; moraju da budu instalirani i uključeni u php.ini</li><br /><br />                      <li> <b>Podrška baze</b> &#8211; mora da postoji za MySQL, SQL<br />                      Server ili Oracle</li><br /><br />                      <li> <b>Config.php</b> &#8211; mora da postoji i mora da ima adekvatne<br />                                  dozvole za mogućnost upisivanja</li><br />					  <li>U sledeće Sugar fajlove mora biti dozvoljen upis:<ul><li><b>/custom</li><br /><li>/cache</li><br /><li>/modules</b></li></ul></li></ul></br><br />Ako provera ne uspe,nećete moći da nastavite sa instalacijom. Pojaviće se poruka o grešci u  kojoj će biti objašnjeno zašto Vaš sistem nije prošao proveru. Nakon što uneste neophodne izmene, možete da sistem podvrgnuti ponovnoj proveri da bi mogli da nastavite instalaciju.<br>',
    'REQUIRED_INSTALLTYPE' => 'Uobičajena ili prilagođena instalacija',
    'REQUIRED_INSTALLTYPE_MSG' =>
                    "Nakon završene provere sistema, možete da izaberete ili<br />                      Tipičnu ili Proizvoljnu instalaciju.<br><br><br />                      Za obe<b>Tipičnu</b> i <b>Proizvoljnu</b>instalaciju, morate da znate sledeće:<br><br />                      <ul><br />                      <li> <b>Tip baze</b>u koju će biti smešteni Sugar podaci<ul><li>Kompatibilni tipovi<br />                      baza: MySQL, MS SQL Server, Oracle.<br><br></li></ul></li><br />                      <li> <b>Ime web servera</b> ili računara (hosta) na kome je baza locirana<br />                      <ul><li>Tp može da bude <i>localhost</i>ako je baza na Vašem lokalnom računaru ili ako je na istom web serveru ili računaru kao i Sugar fajlovi.<br><br></li></ul></li><br />                      <li><b>Ime baze</b> koje bi želeli da koristite za čuvanje Sugar podataka</li><br />                        <ul><br />                          <li> Možda već imate postojeću bazu koju bi želeli ka korisite. Ako<br />                          unesete ime postojeće baze podataka,tabele u Vašoj bazi biće obrisane tokom<br />                          instalacije kada bude definisana šema za Sugar bazu podataka.</li><br />                          <li> Ako već nemate bazu podataka, ime koje unesete biće korišćeno za<br />                          novu bezu koja će biti kreirana za vreme instalacije.<br><br></li><br />                        </ul><br />                      <li><b>Korisničko me i lozinka administratora baze</b> <ul><li>Administrator baze trebalo bi da ima mogućnost kreiranja tabela i korisnika i mogugnost upisivanja u bazu.</li><li>Moraćete možda da<br />                      kontaktirate Vašeg administratora baze za informacije ako baza nije <br />                      locirana na Vašem računaru i/ili ako Vi niste administrator baze.<br><br></ul></li></li><br />                      <li> <b>Ime i lozinka korisnika Sugar baze</b><br />                      </li><br />                        <ul><br />                          <li> Korisnik može da bude administrator baze, ili možete da unesete ime<br />                          nakog drugom postojeg korisnika baze. </li><br />                          <li> Ako za tu svrhu želite da kreirate novog korisnika baze, moći ćete <br />                          da unesete novo korisničko ime i lozinku tokom procesa instalacije,<br />                          i korisnik će biti kreiran za vreme instalacije. </li><br />                        </ul></ul><p><br /><br />                      Za <b>Proizvoljno</b> podešavanje, možda će Vam, biti potrebno da znate:<br><br />                      <ul><br />                      <li> <b>URL koji će biti korišćen za pristupanje Sugar-u</b> nakon njegovog instaliranja.<br />                      Ovaj URL podrazumeva ime web servera ili računara ili IP adresu.<br><br></li><br />                                  <li> [Opciona] <b>putanja do direktorijuma sesije</b> ako želite da koristite proizvoljni<br />                                  direktorijum sesije za Sugar informacije sa ciljem da se spreči da podaci o sesiji budu   ugroženi na zajedničkim serverima.<br><br></li><br />                                  <li> [Opciona] <b>putanja za log direktorijum</b> ako želite da upišete preko  podrazumevanog direktorijum Sugar logova.<br><br></li><br />                                  <li> [Opcioni] <b>ID broj aplikacije</b> ako želite da upišete preko automatski generisanog<br />                                  ID broj koji obezbeđuje da sesije Sugar-a ne budu korišćene od drugih instanci.<br><br></li><br />                                  <li><b>Skup karaktera</b>najčešće korišćenih na Vašem računaru.<br><br></li></ul><br />                                  Za više informacija, molim pogledajte u uputstvu za instalaciju.",
    'LBL_WELCOME_PLEASE_READ_BELOW' => 'Molim pročitajte sledeće važno obaveštenje pre nego što nastavite sa instalacijom. Informacije će Vam pomoći da odlučite da li ste spremni da u ovom trenutku instalirate aplikaciju.',


	'LBL_WELCOME_2'						=> 'Dokumentaciju za instalaciju potražite na <a href="http://www.sugarcrm.com/crm/installation" target="_blank">Sugar Wiki</a>. <BR><BR> Da biste se obratili inženjeru SugarCRM podrške za pomoć pri instalaciji, prijavite se na <a target="_blank" href="http://support.sugarcrm.com">Portal podrške za SugarCRM</a> i prijavite slučaj za podršku.',
	'LBL_WELCOME_CHOOSE_LANGUAGE'		=> '<b>Izaberite svoj jezik</b>',
	'LBL_WELCOME_SETUP_WIZARD'			=> 'Čarobnjak podešavanja',
	'LBL_WELCOME_TITLE_WELCOME'			=> 'Dobrodošli u SugarCRM',
	'LBL_WELCOME_TITLE'					=> 'Čarobnjak podešavanja SugarCRM-a',
	'LBL_WIZARD_TITLE'					=> 'Čarobnjak podešavanja Sugar-a:',
	'LBL_YES'							=> 'Da',
    'LBL_YES_MULTI'                     => 'Da - Višebajtno',
	// OOTB Scheduler Job Names:
	'LBL_OOTB_WORKFLOW'		=> 'Pokreni zadatke radnog toka',
	'LBL_OOTB_REPORTS'		=> 'Pokreni generisanje izveštaja o planiranim zadacima',
	'LBL_OOTB_IE'			=> 'Proveri dolazno poštansko sanduče',
	'LBL_OOTB_BOUNCE'		=> 'Pokreni noćno procesiranje vraćenih email poruka iz kampanja',
    'LBL_OOTB_CAMPAIGN'		=> 'Pokreni noćne masovne Email kampanje',
	'LBL_OOTB_PRUNE'		=> 'Smanji bazu prvog dana u mesecu',
    'LBL_OOTB_TRACKER'		=> 'Smanji tabele sistema za praćenje',
    'LBL_OOTB_SEND_EMAIL_REMINDERS' => 'Pokreni obaveštenja podsetnika za e-poštu',
    'LBL_UPDATE_TRACKER_SESSIONS' => 'Ažuriraj tabelu tracker_sessions',
    'LBL_OOTB_CLEANUP_QUEUE' => 'Red poslova čišćenja',


    'LBL_FTS_TABLE_TITLE'     => 'Omogućiti podešavanja pune tekstualne pretrage',
    'LBL_FTS_HOST'     => 'Lokacija',
    'LBL_FTS_PORT'     => 'Port',
    'LBL_FTS_TYPE'     => 'Tip sistema',
    'LBL_FTS_HELP'      => 'Kako biste omogućili punu tekstualnu pretragu, odaberite vrstu aplikacije za pretragu i upišite lokaciju (host) i port gde se nalazi aplikacija za pretragu. Sugar uključuje ugrađenu podršku za elasticsearch aplikaciju.',
    'LBL_FTS_REQUIRED'    => 'Potrebna je elastična pretraga.',
    'LBL_FTS_CONN_ERROR'    => 'Nije moguće povezivanje sa serverom za pretraživanje celog teksta, proverite postavke.',
    'LBL_FTS_NO_VERSION_AVAILABLE'    => 'Nema dostupne verzije servera za pretraživanje celog teksta, proverite svoje postavke.',
    'LBL_FTS_UNSUPPORTED_VERSION'    => 'Otkrivena je nepodržana verzija pretraživača Elastic search. Koristite verzije: %s',

    'LBL_PATCHES_TITLE'     => 'Instaliraj najnovije zakrpe',
    'LBL_MODULE_TITLE'      => 'Instalacija jezičkih paketa',
    'LBL_PATCH_1'           => 'Ako želite da preskočite ovaj korak, kliknite Sledeći.',
    'LBL_PATCH_TITLE'       => 'Sistemska zakrpa',
    'LBL_PATCH_READY'       => 'Sledeće zakrpe su spremne za instaliranje:',
	'LBL_SESSION_ERR_DESCRIPTION'		=> "SugarCRM se oslanja na PHP - sesije za skladištenje važnih informacija, dok se konektuje na ovaj web server. Vaša PHP instalacija nema dobro konfigurisane informacije o sesiji.<br />											<br><br>Najčešća greška u konfiguraciji je da <b>&#39;session.save_path&#39;</b> direktiva ne pokazuje na validan direktorijum.  <br><br />											<br> Molim ispravite vaš <a target=_new href=\"http://us2.php.net/manual/en/ref.session.php\">PHP konfiguracija</a> u php.ini fajlu lociranom ovde ispod.",
	'LBL_SESSION_ERR_TITLE'				=> 'Greška pri konfigurisanju PHP sesija',
	'LBL_SYSTEM_NAME'=>'Naziv sistema',
    'LBL_COLLATION' => 'Collation podešavanja',
	'LBL_REQUIRED_SYSTEM_NAME'=>'Unesite naziv sistema za Sugar.',
	'LBL_PATCH_UPLOAD' => 'Odaberite fajl zakrpe sa Vašeg računara',
	'LBL_BACKWARD_COMPATIBILITY_ON' => 'Opcija PHP Backward Compatibility mode je uključena. Postavite zend.ze1_compatibility_mode na "Off" da bi nastavili dalje',

    'meeting_notification_email' => array(
        'name' => 'E-poruke sa obaveštenjima sa sastanaka',
        'subject' => 'SugarCRM sastanak – $event_name ',
        'description' => 'Ovaj šablon se koristi kada sistem pošalje korisniku obaveštenje o sastanku.',
        'body' => '<div>
	<p>Primalac: $assigned_user</p>

	<p>$assigned_by_user vas je pozvao/la na sastanak</p>

	<p>Naslov: $event_name<br/>
	Datum početka: $start_date<br/>
	Datum završetka: $end_date</p>

	<p>Opis: $description</p>

	<p>Prihvati ovaj sastanak:<br/>
	<<a href="$accept_link">$accept_link</a>></p>
	<p>Uslovno prihvati ovaj sastanak:<br/>
	<<a href="$tentative_link">$tentative_link</a>></p>
	<p>Odbij ovaj sastanak:<br/>
	<<a href="$decline_link">$decline_link</a>></p>
</div>',
        'txt_body' =>
            'Primalac: $assigned_user

$assigned_by_user vas je pozvao/la na sastanak

Naslov: $event_name
Datum početka: $start_date
Datum završetka: $end_date

Opis: $description

Prihvati ovaj sastanak:
<$accept_link>

Uslovno prihvati ovaj sastanak:
<$tentative_link>


Odbij ovaj sastanak:
<$decline_link>',
    ),

    'call_notification_email' => array(
        'name' => 'E-poruke sa obaveštenjima o pozivima',
        'subject' => 'SugarCRM poziv – $event_name ',
        'description' => 'Ovaj šablon se koristi kada sistem pošalje korisniku obaveštenje o pozivu.',
        'body' => '<div>
	<p>Primalac: $assigned_user</p>

	<p>$assigned_by_user vas je pozvao/la na poziv</p>

	<p>Naslov: $event_name<br/>
	Datum početka: $start_date<br/>
	Trajanje: $hoursh, $minutesm</p>

	<p>Opis: $description</p>

	<p>Prihvati ovaj poziv:<br/>
	<<a href="$accept_link">$accept_link</a>></p>
	<p>Uslovno prihvati ovaj poziv:<br/>
	<<a href="$tentative_link">$tentative_link</a>></p>
	<p>Odbij ovaj poziv:<br/>
	<<a href="$decline_link">$decline_link</a>></p>
</div>',
        'txt_body' =>
            'Primalac: $assigned_user

$assigned_by_user vas je pozvao/la na sastanak

Naslov: $event_name
Datum početka: $start_date
Trajanje: $hoursh, $minutesm

Opis: $description

Prihvati ovaj poziv:
<$accept_link>

Uslovno prihvati ovaj poziv:
<$tentative_link>

Odbij ovaj poziv:
<$decline_link>',
    ),

    'assigned_notification_email' => array(
        'name' => 'E-poruke sa obaveštenjima o dodelama',
        'subject' => 'SugarCRM – dodaljeni $module_name ',
        'description' => 'Ovaj šablon se koristi kada sistem pošalje korisniku dodelu zadatka.',
        'body' => '<div>
<p>$assigned_by_user je dodelio/la &nbsp;$module_name korisniku &nbsp;$assigned_user.</p>

<p>Možete da pregledate ovaj&nbsp;$module_name na:<br/>
	<<a href="$module_link">$module_link</a>></p>
</div>',
        'txt_body' =>
            '$assigned_by_user je dodelio/la $module_name korisniku $assigned_user.

Možete da pregledate ovaj $module_name na:
<$module_link>
',
    ),

    'scheduled_report_email' => array(
        'name' => 'E-poruke sa zakazanim izveštajima',
        'subject' => 'Zakazani izveštaj: $report_name od $report_time',
        'description' => 'Ovaj šablon se koristi kada sistem pošalje korisniku zakazani izveštaj.',
        'body' => '<div>
<p>Zdravo $assigned_user,</p>
<p>U prilogu je automatski generisani izveštaj koji je zakazan za vas.</p>
<p>Naziv izveštaja: $report_name</p>
<p>Datum i vreme izrade izveštaja: $report_time</p>
</div>',
        'txt_body' =>
            'Zdravo $assigned_user,

U prilogu je automatski generisani izveštaj koji je zakazan za vas.

Naziv izveštaja: $report_name

Datum i vreme izrade izveštaja: $report_time',
    ),

    'comment_log_mention_email' => [
        'name' => 'Obaveštenja e-porukom o sistemskoj evidenciji komentara',
        'subject' => 'SugarCRM – $initiator_full_name vas je pomenuo/la na $singular_module_name',
        'description' => 'Ovaj šablon se koristi da bi se korisnicima koji su označeni u odeljku evidencije komentara poslalo obaveštenje e-porukom.',
        'body' =>
            '<div>
                <p>Neko vas je spomenuo u evidenciji komentara sledećeg izveštaja:  <a href="$record_url">$record_name</a></p>
                <p>Prijavite se na Sugar kako biste videli komentar.</p>
            </div>',
        'txt_body' =>
'Neko vas je spomenuo u evidenciji komentara sledećeg izveštaja:  $record_name
            Prijavite se na Sugar kako biste videli komentar.',
    ],

    'advanced_password_new_account_email' => array(
        'subject' => 'Informacije o novom nalogu',
        'description' => 'Ovaj šablon se koristi kada Administrator sistema šalje novu lozinku korisniku.',
        'body' => '<div><table border=\"0\" cellspacing=\"0\" cellpadding=\"0\" width="550" align=\"\&quot;\&quot;center\&quot;\&quot;\"><tbody><tr><td colspan=\"2\"><p>Ovo je privremeno korisničko ime i lozinka za Vaš nalog:</p><p>Korisničko ime : $contact_user_user_name </p><p>Lozinka : $contact_user_user_hash </p><br><p>$config_site_url</p><br><p>Nakon prijave na sistem sa ovom lozinkom, potrebno je da promenite lozinku.</p>   </td>         </tr><tr><td colspan=\"2\"></td>         </tr> </tbody></table> </div>',
        'txt_body' =>
'Ovo je privremeno korisničko ime i lozinka za Vaš nalog:<br />Korisničko ime : $contact_user_user_name<br />Lozinka : $contact_user_user_hash<br /><br />$config_site_url<br /><br />Nakon prijave na sistem sa ovom lozinkom, potrebno je da promenite lozinku.',
        'name' => 'Email sa sistemski generisanom lozinkom',
        ),
    'advanced_password_forgot_password_email' => array(
        'subject' => 'Resetovanje lozinke Vašeg naloga',
        'description' => "Ovaj šablon se koristi za slanje linka korisniku za resetovanje lozinke korisničkog naloga.",
        'body' => '<div><table border=\"0\" cellspacing=\"0\" cellpadding=\"0\" width="550" align=\"\&quot;\&quot;center\&quot;\&quot;\"><tbody><tr><td colspan=\"2\"><p>Nedavno ste zatražili $contact_user_pwd_last_changed mogućnost da resetujete lozinku svog naloga. </p><p>Kliknite na link ispod da resetujete svoju lozinku:</p><p> $contact_user_link_guid </p>  </td>         </tr><tr><td colspan=\"2\"></td>         </tr> </tbody></table> </div>',
        'txt_body' =>
'Nedavno ste zatražili $contact_user_pwd_last_changed mogućnost da resetujete lozinku svog naloga. Kliknite na link ispod da resetujete svoju lozinku:</p><p> $contact_user_link_guid',
        'name' => 'Email Zaboravljena lozinka',
        ),

'portal_forgot_password_email_link' => [
    'name' => 'E-poruka za zaboravljenu lozinku za portal',
    'subject' => 'Resetujte lozinku naloga',
    'description' => 'Ovaj šablon se upotrebljava za slanje veze za resetovanje lozinke korisnika portala.',
    'body' => '<div><table border=\"0\" cellspacing=\"0\" cellpadding=\"0\" width="550" align=\"\&quot;\&quot;center\&quot;\&quot;\"><tbody><tr><td colspan=\"2\"><p>Nedavno ste zatražili da resetujete lozinku. </p><p>Kliknite na vezu u nastavku da biste resetovali lozinku:</p><p> <a href="$portal_user_link_guid">$portal_user_link_guid</a> </p> </td> </tr><tr><td colspan=\"2\"></td> </tr> </tbody></table> </div>',
    'txt_body' =>
'
    Nedavno ste zatražili da resetujete lozinku.

    Kliknite na vezu ispod da biste resetovali lozinku:

    $portal_user_link_guid',
],

    'portal_password_reset_confirmation_email' => [
        'name' => 'E-poruka sa potvrdom o resetovanju lozinke portala',
        'subject' => 'Vaša lozinka je resetovana',
        'description' => 'Ovaj šablon se koristi da bi se korisniku portala poslala potvrda da je lozinka resetovana.',
        'body' => '<div><table border=\"0\" cellspacing=\"0\" cellpadding=\"0\" width="550" align=\"\&quot;\&quot;center\&quot;\&quot;\"><tbody><tr><td colspan=\"2\"><p>Ova e-poruka služi kao potvrda da je lozinka vašeg naloga na portalu resetovana. </p><p>Prijavite se na portal pomoću ove veze</p><p> <a href="$portal_login_url">$portal_login_url</a> </p> </td> </tr><tr><td colspan=\"2\"></td> </tr> </tbody></table> </div>',
        'txt_body' =>
            '
    Ova e-poruka služi kao potvrda da je lozinka vašeg naloga na portalu resetovana.

    Prijavite se na portal pomoću ove veze:

    $portal_login_url',
    ],
);
