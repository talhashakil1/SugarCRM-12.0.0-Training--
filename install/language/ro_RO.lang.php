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
	'LBL_BASIC_SEARCH'					=> 'Cautare Elementara',
	'LBL_ADVANCED_SEARCH'				=> 'Cautare Avansata',
	'LBL_BASIC_TYPE'					=> 'Tip de bază',
	'LBL_ADVANCED_TYPE'					=> 'Tip avansat',
	'LBL_SYSOPTS_1'						=> 'Selectaţi din următoarele opţiuni de configurare a sistemului de mai jos',
    'LBL_SYSOPTS_2'                     => 'Ce baza de date vreti sa instalati pt a fi folosit de Sugar?',
	'LBL_SYSOPTS_CONFIG'				=> 'Configurare sistem',
	'LBL_SYSOPTS_DB_TYPE'				=> '',
	'LBL_SYSOPTS_DB'					=> 'Tipul bazei de date specifice',
    'LBL_SYSOPTS_DB_TITLE'              => 'tip baza de date',
	'LBL_SYSOPTS_ERRS_TITLE'			=> 'Vă rugăm să corectaţi următoarele erori înainte de a continua:',
	'LBL_MAKE_DIRECTORY_WRITABLE'      => 'Va rugam sa faceti urmatorul director sa poata fi scris',


    'ERR_DB_LOGIN_FAILURE_IBM_DB2'		=> 'Numele de utilizator si/sau parola furnizate de baza de date sunt invalide si conexiunea la baza de date nu a putit fi stabilita.Va rugam sa introduceti nume de utilizator si parola valide.',
    'ERR_DB_IBM_DB2_CONNECT'			=> 'Numele de utilizator si/sau parola furnizate de baza de date sunt invalide si conexiunea la baza de date nu a putit fi stabilita.Va rugam sa introduceti nume de utilizator si parola valide.',
    'ERR_DB_IBM_DB2_VERSION'			=> 'Versiunea dvs. de DB2 (% s) nu este suportat de Sugar. Veţi avea nevoie pentru a instala o versiune care este compatibilă cu Sugar. Va rugam sa consultati Matrix de compatibilitate în notele de lansare pentru versiunile acceptate DB2.',

	'LBL_SYSOPTS_DB_DIRECTIONS'			=> 'Trebuie să aveţi un client Oracle instalat şi configurat dacă selectaţi Oracle.',
	'ERR_DB_LOGIN_FAILURE_OCI8'			=> 'Numele de utilizator si/sau parola furnizate de baza de date sunt invalide si conexiunea la baza de date nu a putit fi stabilita.Va rugam sa introduceti nume de utilizator si parola valide.',
	'ERR_DB_OCI8_CONNECT'				=> 'Numele de utilizator si/sau parola furnizate de baza de date sunt invalide si conexiunea la baza de date nu a putit fi stabilita.Va rugam sa introduceti nume de utilizator si parola valide.',
	'ERR_DB_OCI8_VERSION'				=> 'Versiunea dvs. de Oracle nu este susţinută de Sugar. Veţi avea nevoie pentru a instala o versiune care este compatibilă cu cererea Sugar. Va rugam sa consultati Matrix compatibilitate în notele de lansare pentru Versiunile Oracle.',
    'LBL_DBCONFIG_ORACLE'               => 'Vă rugăm să furnizaţi numele bazei de date. Acest lucru va fi tabelul de spaţiu implicit, care este atribuit dvs. de utilizator ((SID din tnsnames.ora).',
	// seed Ent Reports
	'LBL_Q'								=> 'Oportunitate Query',
	'LBL_Q1_DESC'						=> 'Tip de oportunitati',
	'LBL_Q2_DESC'						=> 'Oportunităţi de Cont',
	'LBL_R1'							=> '6 luni de vânzări Pipeline Raport',
	'LBL_R1_DESC'						=> 'Oportunităţi în următoarele 6 luni în funcţie de lună şi de tip',
	'LBL_OPP'							=> 'Setarea Datei Oportunitatii',
	'LBL_OPP1_DESC'						=> 'Acesta este locul unde puteţi schimba aspectul de interogare personalizate',
	'LBL_OPP2_DESC'						=> 'Aceasta interogare va fi aşezata sub prima interogare în raport',
    'ERR_DB_VERSION_FAILURE'			=> 'Imposibil pentru a verifica versiunea bazei de date.',

	'DEFAULT_CHARSET'					=> 'UTF-8',
    'ERR_ADMIN_USER_NAME_BLANK'         => 'Furnizaţi numele de utilizator pentru utilizatorul admin Sugar.',
	'ERR_ADMIN_PASS_BLANK'				=> 'Furnizaţi parola pentru utilizatorul admin Sugar.',

    'ERR_CHECKSYS'                      => 'Au fost detectate erori in timpul verificarii compatibilitatii. Pentru ca aplicatia dumneavoastra SugarCRM sa functioneze corect, va rugam urmati urmatorii pasi pentru a rezolva problemele aparute si fie apasati butonul de reverificare, fie reinstalati aplicatia.',
    'ERR_CHECKSYS_CALL_TIME'            => 'Setarea "Allow Call Time Pass Reference" este activa. (Ar trebui sa fie setat ca oprit in php.ini)',

	'ERR_CHECKSYS_CURL'					=> 'Nu a fost găsit: Programatorul Sugar va rula cu funcționalitate limitată. Serviciul Arhivare e-mail nu va funcționa.',
    'ERR_CHECKSYS_IMAP'					=> 'Nu s-a gasit: EmailPrimire si Campanii (Email) au nevoie de librariile IMAP. Niciuna nu vor fi functionale.',
	'ERR_CHECKSYS_MSSQL_MQGPC'			=> 'Magic Quotes GPC nu poate fi "Pornit" cand se folsoeste MS SQL Server.',
	'ERR_CHECKSYS_MEM_LIMIT_0'			=> 'Atentie',
	'ERR_CHECKSYS_MEM_LIMIT_1'			=> 'Setati aceasta la',
	'ERR_CHECKSYS_MEM_LIMIT_2'			=> 'M sau mai mare în fişierul dvs. php.ini)',
	'ERR_CHECKSYS_MYSQL_VERSION'		=> 'Minim Versiunea 4.1.2 - Au fost gasite:',
	'ERR_CHECKSYS_NO_SESSIONS'			=> 'Nu pot fi citite sau scrise variabilele sesiunii. Nu se poate continua instalarea.',
	'ERR_CHECKSYS_NOT_VALID_DIR'		=> 'Director nevalid',
	'ERR_CHECKSYS_NOT_WRITABLE'			=> 'Atentie: Nu inscripţionare',
	'ERR_CHECKSYS_PHP_INVALID_VER'		=> 'Versiunea dumneavoastra de PHP nu este suportata de Sugar. Este necesar sa instalati o versiune compatibila cu aplicatia Sugar. Pentru Versiuni PHP suportate va rugam sa consultati Matricea de Compatibilitate din cadrul Notelor. Versiunea dumneavoastra este',
	'ERR_CHECKSYS_IIS_INVALID_VER'      => 'Versiunea dvs. din IIS nu este susţinută de Sugar. Veţi avea nevoie pentru a instala o versiune care este compatibilă cu aplicatia Sugar. Va rugam sa consultati Compatibility Matrix în Notele de lansare pentru versiunile acceptate IIS. Versiunea ta este',
    'ERR_CHECKSYS_FASTCGI'              => 'Am detectat că nu folosești o mapare de gestionare FastCGI pentru PHP. Va trebui să instalezi/configurezi o versiune care este compatibilă cu aplicația Sugar. Consultă Matricea de compatibilitate din Notele de lansare pentru versiunile compatibilitate. Consultă <a href="http://www.iis.net/php/" target="_blank" rel="nofollow noopener noreferrer">http://www.iis.net/php/</a> pentru detalii ',
	'ERR_CHECKSYS_FASTCGI_LOGGING'      => 'Pentru o experienta optima in utilizarea IIS/FastCGI sapi, setati fastcgi.logging la valoarea 0 in fisierul dumneavoastrà php.ini',
    'ERR_CHECKSYS_PHP_UNSUPPORTED'		=> 'Instalarea versiunii PHP nu este acceptata:(ver',
    'LBL_DB_UNAVAILABLE'                => 'Baza de date indisponibila',
    'LBL_CHECKSYS_DB_SUPPORT_NOT_AVAILABLE' => 'Asistență baze de date nu s-a găsit.  Asiguraţi-vă că aveți driverele necesare pentru unul dintre următoarele tipuri de baze de date acceptate: MySQL, MS SQLServer, Oracle sau DB2. S-ar putea fie nevoie să eliminați extensia din fişierul php.ini sau să recompilaţi cu fişierul binar corect, în funcţie de versiunea dumneavoastră PHP. Consultaţi Manualul PHP pentru mai multe informaţii despre cum să activaţi Asistență baze de date.',
    'LBL_CHECKSYS_XML_NOT_AVAILABLE'        => 'Functiile asociate cu Librariile de parsare XML care sunt necesare aplicatiei Sugar nu au fost gasite. S-ar putea sa fie nevoie sa scoateti extensia in fisierul php.ini, sau sa recompilati cu fisierul binar corect, in functie de versiunea dumneavoastra de PHP. Va rugam sa reveniti la manualul PHP pentru mai multe informatii.',
    'LBL_CHECKSYS_CSPRNG' => 'Generator de numere aleatorii',
    'ERR_CHECKSYS_MBSTRING'             => 'Functii asociate cu extensia "Multibyte Strings" (mbstring) care sunt necesare pentru Sugar nu au fost gasite pe server. <br />In general modulul mbstring nu este activat in mod implicit si trebuie activat cu directiva --enable-mbstring cand binarul Php este construit. Va rugam consultati manualul Php pentru mai multe informatii asupra modului in care poate fi activat suportul pentru mbstring',
    'ERR_CHECKSYS_SESSION_SAVE_PATH_NOT_SET'       => 'Setarea session.save_path din fisierul dumneavoastra de configurare php (php.ini) nu este setata sau e setata catre un director care nu exista. S-ar putea sa fie nevoie sa setati session.save_path in php.ini sau sa verificati daca directorul din save_path exista.',
    'ERR_CHECKSYS_SESSION_SAVE_PATH_NOT_WRITABLE'  => 'Setarea session.save_path din fisierul dumneavoastra de configurare php (php.ini) este setata catre un director care nu poate fi scris. Va rugam luati masurile necesare pentru ca directorul sa poata fi scris.<br />In functie de sistemul dumneavoastra de operare, s-ar pute asa fie nevoie sa modificati accesul ruland chmod 766, sau sa faceti click dreapta pe numele fisierului, pentru a accesa proprietatile si sa debifati optiunea de read only.',
    'ERR_CHECKSYS_CONFIG_NOT_WRITABLE'  => 'Fisierul de configurare exista, dar nu poate fi scris. Va rugam luati masurile necesare pentru ca directorul sa poata fi scris.In functie de sistemul dumneavoastra de operare, s-ar pute asa fie nevoie sa modificati accesul ruland chmod 766, sau sa faceti click dreapta pe numele fisierului, pentru a accesa proprietatile si sa debifati optiunea de read only.',
    'ERR_CHECKSYS_CONFIG_OVERRIDE_NOT_WRITABLE'  => 'Fişier  de configurare există, dar nu este inscriptibil. Vă rugăm să luati măsurile necesare pentru a face fişierul inscriptibil. În funcţie de sistemul dvs. de operare, acest lucru ar putea să vă solicite să modificaţi permisiunile de funcţionare chmod 766, sau să faceţi clic dreapta pe numele fişierului pentru a accesa proprietăţile şi debifaţi citi singura opţiune.',
    'ERR_CHECKSYS_CUSTOM_NOT_WRITABLE'  => 'Directorul Personalizat exista, dar nu poate fi scris. S-ar putea sa fie nevoie sa modificati accesul ruland chmod 766, sau sa faceti click dreapta pe numele fisierului, pentru a accesa proprietatile si sa debifati optiunea de read only. Va rugam luati masurile necesare pentru ca directorul sa poata fi scris.',
    'ERR_CHECKSYS_FILES_NOT_WRITABLE'   => "Fisierele sau directoarele listate mai jos nu pot fi scrise sau lipsesc si nu pot fi create. In functie de sistemul dumneavoastra de operare, s-ar putea sa fie nevoie sa modificati accesul la fisiere sau directorul parinte ruland chmod 766, sau sa faceti click dreapta pe directorul parinte si sa debifati optiunea de read only.",
	'ERR_CHECKSYS_SAFE_MODE'			=> 'Safe Mode este On (aţi putea dori să dezactivaţi în php.ini)',
    'ERR_CHECKSYS_ZLIB'					=> 'Nu a fost găsit: SugarCRM culege beneficii enorme de performanţă cu compresie zlib.',
    'ERR_CHECKSYS_ZIP'					=> 'Suportul Zip nu a fost gasit: SugarCRM are nevoie de suport ZIP pt a procesa fisierele comprimate',
    'ERR_CHECKSYS_BCMATH'				=> 'Nu s-a găsit suportul BCMATH: SugarCRM are nevoie de suportul BCMATH pentru calculul matematic în precizie arbitrară',
    'ERR_CHECKSYS_HTACCESS'             => 'Testul pentru rescrierea .htaccess a eşuat. De obicei acest lucru înseamnă că AllowOverride nu este configurat pentru directorul Sugar.',
    'ERR_CHECKSYS_CSPRNG' => 'Excepţie CSPRNG',
	'ERR_DB_ADMIN'						=> 'Numele de utilizator si/sau parola pentru administratorul bazei de date sunt incorecte, si o conexiune catre baza de date nu a putut fi facuta. Va rugam introduceti un nume de utilizator si o parola valide. (Error:',
    'ERR_DB_ADMIN_MSSQL'                => 'Numele de utilizator si/sau parola pentru administratorul bazei de date sunt incorecte, si o conexiune catre baza de date nu a putut fi facuta. Va rugam introduceti un nume de utilizator si o parola valide',
	'ERR_DB_EXISTS_NOT'					=> 'Baza de date specificata nu exista.',
	'ERR_DB_EXISTS_WITH_CONFIG'			=> 'Baza de date exista cu datele configurate. Pentru a instala cu baza de date aleasa va rugam rulati din nou instalul si bifati casuta "Stergeti si recreati tabelele SugarCRM?" Pentru a upgrada folositi vrajitorul din consola Admin. Va rugam cititi documentatia care se afla aici.',
	'ERR_DB_EXISTS'						=> 'Numele bazei de date prevăzute deja există - nu poate crea un altul cu acelaşi nume.',
    'ERR_DB_EXISTS_PROCEED'             => 'numele bazei de date există deja. Puteţi<br />1. apăsaţi pe butonul înapoi şi alegeţi un nume bază de date nou<br />2. faceţi clic pe Următorul şi continuaţi, dar toate tabelele existente pe această bază de date vor fi scăzute. Acest lucru înseamnă şi tabelele de date vor fi blown away.',
	'ERR_DB_HOSTNAME'					=> 'numele de gazdă nu poate fi gol.',
	'ERR_DB_INVALID'					=> 'Baza de date selectata invalida',
	'ERR_DB_LOGIN_FAILURE'				=> 'Numele de utilizator si/sau parola furnizate de baza de date sunt invalide si conexiunea la baza de date nu a putit fi stabilita.Va rugam sa introduceti nume de utilizator si parola valide.',
	'ERR_DB_LOGIN_FAILURE_MYSQL'		=> 'Numele de utilizator si/sau parola furnizate de baza de date sunt invalide si conexiunea la baza de date nu a putit fi stabilita.Va rugam sa introduceti nume de utilizator si parola valide.',
	'ERR_DB_LOGIN_FAILURE_MSSQL'		=> 'Numele de utilizator si/sau parola furnizate de baza de date sunt invalide si conexiunea la baza de date nu a putit fi stabilita.Va rugam sa introduceti nume de utilizator si parola valide.',
	'ERR_DB_MYSQL_VERSION'				=> 'MySQL versiune (% s) nu este suportat de Sugar. Veţi avea nevoie pentru a instala o versiune care este compatibilă cu cererea de zahăr. Va rugam sa consultati Matrix de compatibilitate în notele de lansare pentru versiunile sprijinite de MySQL.',
	'ERR_DB_NAME'						=> 'Nume bază de date nu poate fi gol.',
	'ERR_DB_NAME2'						=> "Numele bazeide date nu poate conţine o &#39;\\&#39;, &#39;/&#39;, sau &#39;.&#39;",
    'ERR_DB_MYSQL_DB_NAME_INVALID'      => "Numele bazeide date nu poate conţine o &#39;\\&#39;, &#39;/&#39;, sau &#39;.&#39;",
    'ERR_DB_MSSQL_DB_NAME_INVALID'      => "Numele bazei de date nu poate conţine o \"\" \",\" &#39;\",&#39; * &#39;,&#39; / &#39;,&#39; \\ &#39;,&#39; &#39;,&#39;: &#39;,&#39; <&#39;,&#39;> &#39;, sau&#39; - &#39;?",
    'ERR_DB_OCI8_DB_NAME_INVALID'       => "Numele bazei de date poate consta numai din caractere alfanumerice și simbolurile „#”, „_”, „-”, „:”, „.”, „/” sau „$”",
	'ERR_DB_PASSWORD'					=> 'Parolele furnizatde administratorul bazei de date pentru Sugar nu se potrivesc. Vă rugăm să reintroduceţi aceleasi  parole în domeniile parola.',
	'ERR_DB_PRIV_USER'					=> 'Furnizati un nume de utilizator  pentrministratorului bazei de date.Utilizatorul este necesar pentru conectarea initiala la baza de date.',
	'ERR_DB_USER_EXISTS'				=> 'Numele de utilizator pt baza de date Sugar exista deja -- nu poate crea altul cu acelasi nume.Va rugam introduceti un nume de utilizator nou',
	'ERR_DB_USER'						=> 'Introduceti numele utilizatorului pentru administratorul bazei de date Sugar.',
	'ERR_DBCONF_VALIDATION'				=> 'Vă rugăm să corectaţi următoarele erori înainte de a continua:',
    'ERR_DBCONF_PASSWORD_MISMATCH'      => 'Parolele furnizate pentru baza de date Sugar nu corespund. Va rugam sa introduceti aceleasi parole in campurile de parola.',
	'ERR_ERROR_GENERAL'					=> 'Au aparut urmatoarele erori:',
	'ERR_LANG_CANNOT_DELETE_FILE'		=> 'Nu se poate sterge fisierul:',
	'ERR_LANG_MISSING_FILE'				=> 'Nu se poate gasi fisierul:',
	'ERR_LANG_NO_LANG_FILE'			 	=> 'Nu s-a gasit un fisier pachet de limbaj la include/limbaj',
	'ERR_LANG_UPLOAD_1'					=> 'Au aparut probleme cu incarcarea ta. Te rog sa incerci din nou.',
	'ERR_LANG_UPLOAD_2'					=> 'Pachetele de Limbaj trebuie sa fie arhive ZIP.',
	'ERR_LANG_UPLOAD_3'					=> 'PHP nu poate muta fisierul temporar in directorul de imbunatatire',
	'ERR_LICENSE_MISSING'				=> 'Lipsesc Campuri Necesare',
	'ERR_LICENSE_NOT_FOUND'				=> 'Fisierul cu licenta nu este gasit!',
	'ERR_LOG_DIRECTORY_NOT_EXISTS'		=> 'Directorul log furnizat nu este un director valid.',
	'ERR_LOG_DIRECTORY_NOT_WRITABLE'	=> 'Directorul log furnizat nu este un director in care se poate scrie.',
	'ERR_LOG_DIRECTORY_REQUIRED'		=> 'Directorul log este necesar daca tu specifici propietarul tau.',
	'ERR_NO_DIRECT_SCRIPT'				=> 'Nu se poate procesa scriptul direct.',
	'ERR_NO_SINGLE_QUOTE'				=> 'Nu se poate folosi apostroful pentru',
	'ERR_PASSWORD_MISMATCH'				=> 'Parolele furnizate pentru utilizatorul administrator Sugar nu se potrivesc. Te rog sa reintroduci aceleasi parole in campurile pentru parole.',
	'ERR_PERFORM_CONFIG_PHP_1'			=> 'Nu se poate scrie in fisierul config.php.',
	'ERR_PERFORM_CONFIG_PHP_2'			=> 'Puteti continua aceasta instalare creand manual fisierul config.php si lipind infromatiile de configurare de mai jos in fisierul config.php. Dar, trebuie sa creati fisierul config.php inainte de a trece la urmatorul pas.',
	'ERR_PERFORM_CONFIG_PHP_3'			=> 'V-ati amintit sa creati fisierul config.php?',
	'ERR_PERFORM_CONFIG_PHP_4'			=> 'Atentie: Nu se poate scrie in fisierul config.php. Te rog sa te asiguri ca exista.',
	'ERR_PERFORM_HTACCESS_1'			=> 'Nu se poate scrie fisierul',
	'ERR_PERFORM_HTACCESS_2'			=> 'fisier.',
	'ERR_PERFORM_HTACCESS_3'			=> 'Daca doriti sa securizati fisierul de loguri pentru a nu fi accesibil din browser creati un fisier',
	'ERR_PERFORM_NO_TCPIP'				=> 'Nu am putut detecta o conexiune de internet. Cand nu aveti o conexiune va rugam vizitati http://www.sugarcrm.com/home/index.php?option=com_extended_registration&task=register  pentru a inregistra SugarCRM. Lasandu-ne sa stim cate putin din cum planuieste compania dumneavoastra sa foloseasca Sugar putem fi siguri ca mereu livram aplicatia corespunzatoare nevoilor dumneavoastra.',
	'ERR_SESSION_DIRECTORY_NOT_EXISTS'	=> 'Directorul sesiunii furnizat nu este un director valid',
	'ERR_SESSION_DIRECTORY'				=> 'Directorul sesiunii furnizat nu este un director in care se poate scrie.',
	'ERR_SESSION_PATH'					=> 'Calea pentru sesiune este necesara daca doriti sa specificati o cale a dumneavoastra.',
	'ERR_SI_NO_CONFIG'					=> 'Daca nu ati inclus config_si.php in radacina documentului sau nu ati definit $sugar_config_si in config.php',
	'ERR_SITE_GUID'						=> 'ID-ul aplicatiei este necesar daca doriti sa specificati unul al dumneavoastra.',
    'ERROR_SPRITE_SUPPORT'              => "În prezent, nu suntem în măsură să localizam biblioteca HG, ca urmare nu sunteti capabil să utilizati funcţionalitatea Sprite CSS.",
	'ERR_UPLOAD_MAX_FILESIZE'			=> 'Atentie: Configuratia dumneavoastra Php ar trebui schimbata pentru a permite fisierelor de cel putin 6 MB sa fie uploadate',
    'LBL_UPLOAD_MAX_FILESIZE_TITLE'     => 'Marimea Fisierului de Incarcare',
	'ERR_URL_BLANK'						=> 'Furnizeaza URL pentru instanta Sugar.',
	'ERR_UW_NO_UPDATE_RECORD'			=> 'Nu a putut fi localizata inregistrarea de instalare a',
    'ERROR_FLAVOR_INCOMPATIBLE'         => 'Fișierul încărcat nu este compatibil cu această versiune (ediția Professional, Enterprise sau Ultimate) de Sugar: ',
	'ERROR_LICENSE_EXPIRED'				=> "Eroare: Liceenta dumneavoastra a expirat",
	'ERROR_LICENSE_EXPIRED2'			=> "zile in urma. Va rugam mergeti la \"Management Licenta\" in cadrul ecranului Admin pentru a introduce noua cheie de licenta. Daca nu introduceti o noua cheie de licenta in maxim 30 de zile de la expirarea cheii dumneavoastra de licenta, nu va veti mai putea conecta la aceasta aplicatie.",
	'ERROR_MANIFEST_TYPE'				=> 'Fişierul manifest trebuie să specifice tipul de pachet.',
	'ERROR_PACKAGE_TYPE'				=> 'Fisierul manifest specifica un tip de pachet nerecunoscut',
	'ERROR_VALIDATION_EXPIRED'			=> "Eroare: Cheia dumneavoastra de validare a expirat",
	'ERROR_VALIDATION_EXPIRED2'			=> "zile in urma. Va rugam mergeti la \"Management Licenta\" in cadrul ecranului Admin pentru a introduce noua cheie de licenta. Daca nu introduceti o noua cheie de licenta in maxim 30 de zile de la expirarea cheii dumneavoastra de licenta, nu va veti mai putea conecta la aceasta aplicatie.",
	'ERROR_VERSION_INCOMPATIBLE'		=> 'Fisierul incarcat nu este compatibil cu aceasta versiune Sugar:',

	'LBL_BACK'							=> 'Inapoi',
    'LBL_CANCEL'                        => 'Anulare',
    'LBL_ACCEPT'                        => 'Acceptat',
	'LBL_CHECKSYS_1'					=> 'Pentru ca instanta dumneavoastra SugarCRM sa functioneze corect va rugam sa va asigurati ca toate itemele de mai jos sunt verzi. Daca exista iteme rosii va rugam sa faceti pasii necesari pentru a-i indrepta<br />Pentru ajutor in aceste verificari de sistem va rugam vizitati Sugar Wiki.',
	'LBL_CHECKSYS_CACHE'				=> 'Directoare de cache in care se poate scrie',
    'LBL_DROP_DB_CONFIRM'               => 'Baza de date pe care ati introdus-o exista deja. <br />Aveti optiunile:<br />1. Apasati butonul "Anuleaza" si alegeti o noua baza de date sau<br />2. Apasati butonul "Accepta" si continuati. Toate tabelele din baza de date vor fi sterse. <br />Asta inseamna ca toate tabelele sau datele existente vor disparea.',
	'LBL_CHECKSYS_CALL_TIME'			=> 'Setarea Php "Allow Call Time Pass Reference" oprita',
    'LBL_CHECKSYS_COMPONENT'			=> 'Componenta',
	'LBL_CHECKSYS_COMPONENT_OPTIONAL'	=> 'Componente Optionale',
	'LBL_CHECKSYS_CONFIG'				=> 'Fisierul de configurare Rescriptibil SugarCRM (config.php)',
	'LBL_CHECKSYS_CONFIG_OVERRIDE'		=> 'Scriere fişier de configurare SugarCRM (config_override.php)',
	'LBL_CHECKSYS_CURL'					=> 'Modul cURL',
    'LBL_CHECKSYS_SESSION_SAVE_PATH'    => 'Calea de salvare a sesiunilor',
	'LBL_CHECKSYS_CUSTOM'				=> 'Directoare personalizate in care se poate scrie',
	'LBL_CHECKSYS_DATA'					=> 'Directoare in care se pot scrie date',
	'LBL_CHECKSYS_IMAP'					=> 'Modul IMAP',
	'LBL_CHECKSYS_MQGPC'				=> 'Magic Quotes GPC',
	'LBL_CHECKSYS_MBSTRING'				=> 'MB strings Module',
	'LBL_CHECKSYS_MEM_OK'				=> 'OK (Fara Limita)',
	'LBL_CHECKSYS_MEM_UNLIMITED'		=> 'OK (Nelimitat)',
	'LBL_CHECKSYS_MEM'					=> 'PHP Limita memorie',
	'LBL_CHECKSYS_MODULE'				=> 'Module in care se poate scrie, subdirectoare si fisiere',
	'LBL_CHECKSYS_MYSQL_VERSION'		=> 'Versiune MySQL',
	'LBL_CHECKSYS_NOT_AVAILABLE'		=> 'Nu este disponibil',
	'LBL_CHECKSYS_OK'					=> 'OK',
	'LBL_CHECKSYS_PHP_INI'				=> 'Locatia fisierului de configurare PHP (php.ini):',
	'LBL_CHECKSYS_PHP_OK'				=> 'OK(ver',
	'LBL_CHECKSYS_PHPVER'				=> 'Versiunea PHP',
    'LBL_CHECKSYS_IISVER'               => 'Versiunea IIS',
    'LBL_CHECKSYS_FASTCGI'              => 'FastCGI',
	'LBL_CHECKSYS_RECHECK'				=> 'Reverificati',
	'LBL_CHECKSYS_SAFE_MODE'			=> 'Modul "Safe Mode" al Php oprit',
	'LBL_CHECKSYS_SESSION'				=> 'Calea de scriere a sesiunilor (',
	'LBL_CHECKSYS_STATUS'				=> 'Status',
	'LBL_CHECKSYS_TITLE'				=> 'Accceptare verificare sistem',
	'LBL_CHECKSYS_VER'					=> 'Gasit(ver',
	'LBL_CHECKSYS_XML'					=> 'Analiză XML',
	'LBL_CHECKSYS_ZLIB'					=> 'Modul de compresie ZLIB',
	'LBL_CHECKSYS_ZIP'					=> 'Modul de manipulare ZIP',
    'LBL_CHECKSYS_BCMATH'				=> 'Modul calcul matematic cu precizie arbitrară',
    'LBL_CHECKSYS_HTACCESS'				=> 'Configurare AllowOverride pentru .htaccess',
    'LBL_CHECKSYS_FIX_FILES'            => 'Va rugam rezolvati fisierele si directoarele urmatoare inainte a continua:',
    'LBL_CHECKSYS_FIX_MODULE_FILES'     => 'Va rugam reparati directoarele pentru urmatoarele module si fisierele din ele inainte a incepe:',
    'LBL_CHECKSYS_UPLOAD'               => 'Incarcati scriere Director',
    'LBL_CLOSE'							=> 'inchis',
    'LBL_THREE'                         => '3',
	'LBL_CONFIRM_BE_CREATED'			=> 'a fi creat',
	'LBL_CONFIRM_DB_TYPE'				=> 'tip baza de date',
	'LBL_CONFIRM_DIRECTIONS'			=> 'Va rugam confirmati setarile mai jos. Daca doriti sa schimbati oricare dintre valori apasati "Inapoi". Altfel apasati "Inainte" pentru a porni aplicatia.',
	'LBL_CONFIRM_LICENSE_TITLE'			=> 'Informatii Licenta',
	'LBL_CONFIRM_NOT'					=> 'nu',
	'LBL_CONFIRM_TITLE'					=> 'Confirma setarile',
	'LBL_CONFIRM_WILL'					=> 'va fi',
	'LBL_DBCONF_CREATE_DB'				=> 'Creaza baza de date',
	'LBL_DBCONF_CREATE_USER'			=> 'Creeaza Utilizator [Alt+N]',
	'LBL_DBCONF_DB_DROP_CREATE_WARN'	=> 'Atentie: Toate datele vor fi sterse<br />daca aceasta casuta va fi selectata.',
	'LBL_DBCONF_DB_DROP_CREATE'			=> 'Stergeti si recreati tabelele existente pentru Sugar?',
    'LBL_DBCONF_DB_DROP'                => 'Sterge Tabele',
    'LBL_DBCONF_DB_NAME'				=> 'Nume baza de date',
	'LBL_DBCONF_DB_PASSWORD'			=> 'Parola Utilizator Baza de Date Sugar',
	'LBL_DBCONF_DB_PASSWORD2'			=> 'Reintroduceti parola pentru userul bazei de date Sugar',
	'LBL_DBCONF_DB_USER'				=> 'Utilizator Baza de Date Sugar',
    'LBL_DBCONF_SUGAR_DB_USER'          => 'Utilizator Baza de Date Sugar',
    'LBL_DBCONF_DB_ADMIN_USER'          => 'Utilizator Administrator Baza de Date',
    'LBL_DBCONF_DB_ADMIN_PASSWORD'      => 'Parola Administrator Baza de Date',
	'LBL_DBCONF_DEMO_DATA'				=> 'Populati Baza de Date cu Date Demo?',
    'LBL_DBCONF_DEMO_DATA_TITLE'        => 'Alege Date Demo',
	'LBL_DBCONF_HOST_NAME'				=> 'Nume gazda',
	'LBL_DBCONF_HOST_INSTANCE'			=> 'Instanta Gazda',
	'LBL_DBCONF_HOST_PORT'				=> 'Port',
    'LBL_DBCONF_SSL_ENABLED'            => 'Activare conexiune SSL',
	'LBL_DBCONF_INSTRUCTIONS'			=> 'Va rugam introduceti informatiile pentru configurarea bazei de date mai jos. Daca nu sunteti sigur ce sa introduceti va sugeram sa lasati valorile implicit.',
	'LBL_DBCONF_MB_DEMO_DATA'			=> 'Foloseste text multi-byte in datele demo?',
    'LBL_DBCONFIG_MSG2'                 => 'Numele serverului web sau masinii (host) pe care este localizata baza de date (exemplu : localhost sau www.domeniulmeu.com)',
    'LBL_DBCONFIG_MSG3'                 => 'Numele bazei de date care va contine informatiile pentru instanta Sugar pe care o veti instala.',
    'LBL_DBCONFIG_B_MSG1'               => 'Userul si parola unui administrator al bazei de date care poate crea tabele si useri si care poate scrie in baza de date sunt necesare pentru a crea baza de date Sugar',
    'LBL_DBCONFIG_SECURITY'             => 'Din motive de securitate trebuie sa specificati un user pentru baza de date exclusiv pentru conectarea la Sugar. Acest user trebuie sa aibe drept de scriere, de modificare si de extragere a datelor din Sugar. Acest user poate fi administratorul specificat mai sus sau puteti introduce informatii noi.',
    'LBL_DBCONFIG_AUTO_DD'              => 'Fa pentru mine',
    'LBL_DBCONFIG_PROVIDE_DD'           => 'Definiti user existent',
    'LBL_DBCONFIG_CREATE_DD'            => 'Definiti userul care trebuie creat',
    'LBL_DBCONFIG_SAME_DD'              => 'La fel ca userul de admin',
	//'LBL_DBCONF_I18NFIX'              => 'Apply database column expansion for varchar and char types (up to 255) for multi-byte data?',
    'LBL_FTS'                           => 'Cautare text complet',
    'LBL_FTS_INSTALLED'                 => 'Instalat',
    'LBL_FTS_INSTALLED_ERR1'            => 'Capacitatea Full Text Search nu este instalata',
    'LBL_FTS_INSTALLED_ERR2'            => 'uteţi instala în continuare, dar nu va fi capabil de a utiliza funcţia de căutare text complet. Vă rugăm să consultaţi serverul de baze de date de instala ghid despre cum să facă acest lucru, sau contactaţi administratorul.',
	'LBL_DBCONF_PRIV_PASS'				=> 'Parola pentru userul privilegiat al bazei de date',
	'LBL_DBCONF_PRIV_USER_2'			=> 'Contul pentru baza de date de mai sus este unul privilegiat?',
	'LBL_DBCONF_PRIV_USER_DIRECTIONS'	=> 'Userul privilegiat din baza de date trebuie sa aibe drepturile corecte pentru a crea o baza de date, sterge/ crea tabele si crea un user. Userul privilegiat va fi folosit doar pentru procesul de instalare. Puteti folosi acelasi user ca mai sus daca el are suficiente drepturi.',
	'LBL_DBCONF_PRIV_USER'				=> 'Username pentru baza de date',
	'LBL_DBCONF_TITLE'					=> 'Configurare baza de date',
    'LBL_DBCONF_TITLE_NAME'             => 'Furnizeaza Nume Baza de Date',
    'LBL_DBCONF_TITLE_USER_INFO'        => 'Furnizeaza Informatii Utilizator Baza de Date',
	'LBL_DISABLED_DESCRIPTION_2'		=> 'Dupa ce aceasta schimbare se va face este posibil sa fiti nevoit sa apasati butonul "Start" pentru a incepe instalarea. Dupa ce instalarea este completa ar trebui sa schimbati valoarea pentru "installer_locked" la "true"',
	'LBL_DISABLED_DESCRIPTION'			=> 'Instalerul a fost rulat deja. Ca o masura de precautie nu se va voie sa rulati instalerul de mai multe ori. Daca sunteti siguri ca vreti sa il rulati din nou va rugam modificati in fisierul dumneavoastra config.php o variabila care se numeste "installer_locked" si setati valoarea la "false". Linia ar trebui sa arate asa:',
	'LBL_DISABLED_HELP_1'				=> 'Pentru ajutor la instalare va rugam vizitati SugarCRM',
    'LBL_DISABLED_HELP_LNK'               => 'http://www.sugarcrm.com/forumuri/',
	'LBL_DISABLED_HELP_2'				=> 'forum de suport',
	'LBL_DISABLED_TITLE_2'				=> 'Instalarea SugarCRM a fost oprita',
	'LBL_DISABLED_TITLE'				=> 'Instalarea SugarCRM oprita',
	'LBL_EMAIL_CHARSET_DESC'			=> 'Setul de caractere cel mai des folosit in setarile dumneavoastra locale',
	'LBL_EMAIL_CHARSET_TITLE'			=> 'Setări E mail Outbound',
    'LBL_EMAIL_CHARSET_CONF'            => 'Setul de caractere pentru trimitere emailuri',
	'LBL_HELP'							=> 'Ajutor',
    'LBL_INSTALL'                       => 'Instaleaza',
    'LBL_INSTALL_TYPE_TITLE'            => 'Optiuni pentru instalare',
    'LBL_INSTALL_TYPE_SUBTITLE'         => 'Alegeti tipul de instal',
    'LBL_INSTALL_TYPE_TYPICAL'          => 'Instalare Tipica',
    'LBL_INSTALL_TYPE_CUSTOM'           => 'Instalare Personalizata',
    'LBL_INSTALL_TYPE_MSG1'             => 'Licenta este necesara pentru functionarea generala a aplicatiei dar nu este necesara pentru instalare. Nu este nevoie neaparat sa introduceti licenta in acest moment, dar va trebui sa introduceti licenta dupa ce ati instalat aplicatia.',
    'LBL_INSTALL_TYPE_MSG2'             => 'Necesita informatii minime pentru instalare. Recomandat pentru utilizatori noi.',
    'LBL_INSTALL_TYPE_MSG3'             => 'Va da optiuni aditionale in timpul instalarii. Majoritatea optiunilor sunt de asemenea acesibile si dupa instalare din ecranul de administrare. Recomandat pentru userii avansati',
	'LBL_LANG_1'						=> 'Pentru a folosi o limba in Sugar alta decat cea implicita (US-English) puteti uploada si instala pachetul limbii in acest moment. Veti putea instala pachete de limbi si din Sugar. Daca doriti sa sariti peste acest pas va rugam apasati "Inainte"',
	'LBL_LANG_BUTTON_COMMIT'			=> 'Instaleaza',
	'LBL_LANG_BUTTON_REMOVE'			=> 'Eliminare',
	'LBL_LANG_BUTTON_UNINSTALL'			=> 'Dezinstaleaza',
	'LBL_LANG_BUTTON_UPLOAD'			=> 'incarca',
	'LBL_LANG_NO_PACKS'					=> 'niciunul',
	'LBL_LANG_PACK_INSTALLED'			=> 'Urmatoarele pachete de limba au fost instalate:',
	'LBL_LANG_PACK_READY'				=> 'Urmatoarele pachete de limba sunt gata pentru a fi instalate:',
	'LBL_LANG_SUCCESS'					=> 'Pachetele de limba au fost fost uploadata cu succes.',
	'LBL_LANG_TITLE'			   		=> 'Pachet de limbă',
    'LBL_LAUNCHING_SILENT_INSTALL'     => 'Se instaleaza Sugar acum. Aceasta poate dura cateva minute.',
	'LBL_LANG_UPLOAD'					=> 'Incarca Pachetul de Localizare',
	'LBL_LICENSE_ACCEPTANCE'			=> 'Licenta Acceptata',
    'LBL_LICENSE_CHECKING'              => 'Verifica sistemul pentru compatibilitate',
    'LBL_LICENSE_CHKENV_HEADER'         => 'Verifica Mediu',
    'LBL_LICENSE_CHKDB_HEADER'          => 'Se verifică acreditările DB, FTS.',
    'LBL_LICENSE_CHECK_PASSED'          => 'Sistemul a trecut de verificarea compatibilitatii',
    'LBL_LICENSE_REDIRECT'              => 'Redirectare in',
	'LBL_LICENSE_DIRECTIONS'			=> 'Daca ai licenta, te rog sa o introduci in campurile de mai jos.',
	'LBL_LICENSE_DOWNLOAD_KEY'			=> 'Introdu Cheia pentru Descarcare',
	'LBL_LICENSE_EXPIRY'				=> 'Data expirarii',
	'LBL_LICENSE_I_ACCEPT'				=> 'Acceptat',
	'LBL_LICENSE_NUM_USERS'				=> 'Numarul de utilizatori',
	'LBL_LICENSE_PRINTABLE'				=> 'Vizualizare pentru tiparire',
    'LBL_PRINT_SUMM'                    => 'Tipareste Suparul',
	'LBL_LICENSE_TITLE_2'				=> 'Licenta SugarCRM',
	'LBL_LICENSE_TITLE'					=> 'Informatii Licenta',
	'LBL_LICENSE_USERS'					=> 'Utilizatori licentiati',

	'LBL_LOCALE_CURRENCY'				=> 'Setari de moneda',
	'LBL_LOCALE_CURR_DEFAULT'			=> 'Moneda implicita',
	'LBL_LOCALE_CURR_SYMBOL'			=> 'Simbol valuta',
	'LBL_LOCALE_CURR_ISO'				=> 'Cod valuta ISO4217',
	'LBL_LOCALE_CURR_1000S'				=> '1000 Separator',
	'LBL_LOCALE_CURR_DECIMAL'			=> 'Separator Decimal',
	'LBL_LOCALE_CURR_EXAMPLE'			=> 'Exemplu',
	'LBL_LOCALE_CURR_SIG_DIGITS'		=> 'Zecimale semnificative',
	'LBL_LOCALE_DATEF'					=> 'Formatul Datei Implicite',
	'LBL_LOCALE_DESC'					=> 'Setarile locale specificate se vor reflecta global in instanta Sugar.',
	'LBL_LOCALE_EXPORT'					=> 'Setul de caractere pentru Import/Export<br />(Email, .csv, vCard, PDf, data import)',
	'LBL_LOCALE_EXPORT_DELIMITER'		=> 'Delimitatorul pentru exporturi (.csv)',
	'LBL_LOCALE_EXPORT_TITLE'			=> 'Setari de Import / Export',
	'LBL_LOCALE_LANG'					=> 'Limba implicita',
	'LBL_LOCALE_NAMEF'					=> 'Formatul implicit al numelui',
	'LBL_LOCALE_NAMEF_DESC'				=> 's=salut<br />f=prenume<br />l=nume',
	'LBL_LOCALE_NAME_FIRST'				=> 'David',
	'LBL_LOCALE_NAME_LAST'				=> 'Livingstone',
	'LBL_LOCALE_NAME_SALUTATION'		=> 'Doctor',
	'LBL_LOCALE_TIMEF'					=> 'Formatul implicit al orei',
	'LBL_LOCALE_TITLE'					=> 'Setări Locale',
    'LBL_CUSTOMIZE_LOCALE'              => 'Personalizeaza setarile locale',
	'LBL_LOCALE_UI'						=> 'Interfata utilizator',

	'LBL_ML_ACTION'						=> 'Actiune',
	'LBL_ML_DESCRIPTION'				=> 'Descriere',
	'LBL_ML_INSTALLED'					=> 'Data instalarii',
	'LBL_ML_NAME'						=> 'Nume',
	'LBL_ML_PUBLISHED'					=> 'Data publicarii',
	'LBL_ML_TYPE'						=> 'Tip',
	'LBL_ML_UNINSTALLABLE'				=> 'De ne dezinstalat',
	'LBL_ML_VERSION'					=> 'Versiune',
	'LBL_MSSQL'							=> 'Server SQL',
	'LBL_MSSQL_SQLSRV'				    => 'SQL Server (Microsoft SQL Server Driver pentru PHP)',
	'LBL_MYSQL'							=> 'MySQL',
    'LBL_MYSQLI'						=> 'MySQL (extensie mysqli)',
	'LBL_IBM_DB2'						=> 'IBM DB2',
	'LBL_NEXT'							=> 'Urmatorul>',
	'LBL_NO'							=> 'Nu',
    'LBL_ORACLE'						=> 'Oracle',
	'LBL_PERFORM_ADMIN_PASSWORD'		=> 'Setarea parolei de administrator',
	'LBL_PERFORM_AUDIT_TABLE'			=> 'tabela de audit /',
	'LBL_PERFORM_CONFIG_PHP'			=> 'Creaza fisierul de configurare Sugar',
	'LBL_PERFORM_CREATE_DB_1'			=> 'Creaza baza de date',
	'LBL_PERFORM_CREATE_DB_2'			=> 'in',
	'LBL_PERFORM_CREATE_DB_USER'		=> 'Creaza utilizatorul si parola Bazei de Date...',
	'LBL_PERFORM_CREATE_DEFAULT'		=> 'Creaza date Sugar implicite',
	'LBL_PERFORM_CREATE_LOCALHOST'		=> 'Creaza usernameul si parola bazei de date pentru localhost...',
	'LBL_PERFORM_CREATE_RELATIONSHIPS'	=> 'Creaza legaturile tabelelor Sugar',
	'LBL_PERFORM_CREATING'				=> 'creaza /',
	'LBL_PERFORM_DEFAULT_REPORTS'		=> 'Creaza rapoarte implicite',
	'LBL_PERFORM_DEFAULT_SCHEDULER'		=> 'Creaza planificarea serviciilor implicite',
	'LBL_PERFORM_DEFAULT_SETTINGS'		=> 'Introduce setarile implicite',
	'LBL_PERFORM_DEFAULT_USERS'			=> 'Creaza utilizatori implicit',
	'LBL_PERFORM_DEMO_DATA'				=> 'Populeaza tabelele bazei de date cu date demo',
	'LBL_PERFORM_DONE'					=> 'gata',
	'LBL_PERFORM_DROPPING'				=> 'cadere',
	'LBL_PERFORM_FINISH'				=> 'Sfarsit',
	'LBL_PERFORM_LICENSE_SETTINGS'		=> 'Actualizarea informaţiilor de licenţă',
	'LBL_PERFORM_OUTRO_1'				=> 'Pasul Dugar',
	'LBL_PERFORM_OUTRO_2'				=> 'acum este complet',
	'LBL_PERFORM_OUTRO_3'				=> 'timpul total',
	'LBL_PERFORM_OUTRO_4'				=> 'secunde',
	'LBL_PERFORM_OUTRO_5'				=> 'memoria utilizata',
	'LBL_PERFORM_OUTRO_6'				=> 'biti',
	'LBL_PERFORM_OUTRO_7'				=> 'Sistemul tau este acum instalat şi configurat pentru utilizare.',
	'LBL_PERFORM_REL_META'				=> 'campurile meta...',
	'LBL_PERFORM_SUCCESS'				=> 'Succes',
	'LBL_PERFORM_TABLES'				=> 'Creaza tabelele aplicatiei Sugar, tabelele de audit si metadatele realtionale',
	'LBL_PERFORM_TITLE'					=> 'Efectueaza Setup',
	'LBL_PRINT'							=> 'Imprimare',
	'LBL_REG_CONF_1'					=> 'Va rugam completati formularul de mai jos pentru a primi anunturi, stiri despre training, oferte speciale si invitatii de la SugarCRM. Nu vindem, inchiriem sau distribuim in alt fel catre terti informatia colectata aici.',
	'LBL_REG_CONF_2'					=> 'Numele si adresa dumneavoastra de mail sunt singurele campuri necesare pentru inregistrare. Toate celelalte campuri sunt optionale dar foarte folositoare. Nu vindem, inchiriem sau distribuim in alt fel catre terti informatia colectata aici.',
	'LBL_REG_CONF_3'					=> 'Va multumim pentru inregistrare. Apasati butonul pentru a va loga in SugarCRM. Va trebui sa va logati pentru prima data folosind usernamul "admin" si parola pe care ati introdus-o la pasul 2.',
	'LBL_REG_TITLE'						=> 'Inregistrare',
    'LBL_REG_NO_THANKS'                 => 'Nu multumesc',
    'LBL_REG_SKIP_THIS_STEP'            => 'Săriţi peste acest pas',
	'LBL_REQUIRED'						=> 'Necesar',

    'LBL_SITECFG_ADMIN_Name'            => 'Userul pentru administratorul Sugar.',
	'LBL_SITECFG_ADMIN_PASS_2'			=> 'Reintroduceti parola de admin pentru Sugar',
	'LBL_SITECFG_ADMIN_PASS_WARN'		=> 'Atenţie: Aceasta va suprascrie parola de admin a oricarei instalari anterioare.',
	'LBL_SITECFG_ADMIN_PASS'			=> 'Parola de administrator pentru Sugar',
	'LBL_SITECFG_APP_ID'				=> 'ID-ul aplicatiei',
	'LBL_SITECFG_CUSTOM_ID_DIRECTIONS'	=> 'Daca va fi selectat, trebuie sa furnizati un ID pt a trece peste id-ul generat.Id-ul asigura ca instanta Sugar nu este utilizat ade alta instanta',
	'LBL_SITECFG_CUSTOM_ID'				=> 'Furnizaţi propriul ID pentru aplicatie',
	'LBL_SITECFG_CUSTOM_LOG_DIRECTIONS'	=> 'Daca este selectat trebuie sa specificati un director pentru a suprascrie directorul implicit pentru loguri al lui Sugar. Oriunde ar fi localizat fisierul de loguri accesul printr-un browser web va fi restrictionat printr-un redirect de tip .htaccess',
	'LBL_SITECFG_CUSTOM_LOG'			=> 'Folositi un director pentru loguri personalizat.',
	'LBL_SITECFG_CUSTOM_SESSION_DIRECTIONS'	=> 'Daca este selectat trebuie sa indicati un director securizat pentru a stoca informatiile de sesiune ale Sugar. Acest lucru poate fi facut pentru a preveni vulnerabilitatile dintr-un mediu comun.',
	'LBL_SITECFG_CUSTOM_SESSION'		=> 'Folositi un director personalizat pentru sesiuni',
	'LBL_SITECFG_DIRECTIONS'			=> 'Va rugam introduceti informatiile pentru configurare mai jos. Daca sunteti nesiguri de aceste valori, va sugeram sa folositi valorile default.',
	'LBL_SITECFG_FIX_ERRORS'			=> 'Va rugam reparati urmatoarele erori inainte de a merge mai departe:',
	'LBL_SITECFG_LOG_DIR'				=> 'Directorul de loguri',
	'LBL_SITECFG_SESSION_PATH'			=> 'Calea catre directorul de Sesiuni<br />(trebuie sa se poate scrie in director)',
	'LBL_SITECFG_SITE_SECURITY'			=> 'Selectati optiunile de securitate',
	'LBL_SITECFG_SUGAR_UP_DIRECTIONS'	=> 'Daca este selectat sistemul va verifica periodic pentru versiuni noi ale aplicatiei.',
	'LBL_SITECFG_SUGAR_UP'				=> 'Verifica automat pentru updateuri?',
	'LBL_SITECFG_SUGAR_UPDATES'			=> 'Actualizări Sugar Config',
	'LBL_SITECFG_TITLE'					=> 'Configurarea Site-ului',
    'LBL_SITECFG_TITLE2'                => 'Identificarea Utilizatorului Administrator',
    'LBL_SITECFG_SECURITY_TITLE'        => 'Securitatea Site-ului',
	'LBL_SITECFG_URL'					=> 'URL-ul Instantei Sugar',
	'LBL_SITECFG_USE_DEFAULTS'			=> 'Utilizare Implicita?',
	'LBL_SITECFG_ANONSTATS'             => 'Trimiteti statistici anonime?',
	'LBL_SITECFG_ANONSTATS_DIRECTIONS'  => 'Daca este selectat Sugar va trimite statisitici anonime despre instanta dumneavoastra catre SugarCRM Inc. de fiecare data cand sistemul verifica existanta a unei noi versiuni. Informatia ne va ajuta sa intelegem mai bine cum se foloseste aplicatia si va ajuta la imbunatatirea produsului.',
    'LBL_SITECFG_URL_MSG'               => 'Introduceţi URL-ul care vor fi folosite pentru a accesa instanţă Sugar după instalare. URL-ul va fi de asemenea utilizat ca bază pentru adresele URL în paginile aplicatiei SugarCRM. URL-ul ar trebui să includă pe serverul web nume de masina sau adresa IP.',
    'LBL_SITECFG_SYS_NAME_MSG'          => 'Introduceţi un nume pentru sistemul dvs.. Acest nume va fi afişat în bara de titlu browser-ului atunci când utilizatorii vizitează aplicatia Sugar',
    'LBL_SITECFG_PASSWORD_MSG'          => 'După instalare, va trebui să utilizaţi utilizator Sugar admin (nume de utilizator implicit = admin) pentru a intra în instanţă la Sugar. Introduceţi o parolă pentru acest utilizator administrator. Aceasta parola poate fi modificata dupa autentificare iniţială. Puteţi introduce, de asemenea, un alt nume de utilizator admin să folosească în afară de valoarea implicită furnizata.',
    'LBL_SITECFG_COLLATION_MSG'         => 'Selectaţi colaţionare (sortare), setările pentru sistemul dumneavoastră. Aceste setări vor crea tabele cu limbajul specific utilizat. În cazul în care limba dvs. nu are nevoie de setări speciale va rugam sa folositi valoarea implicită.',
    'LBL_SPRITE_SUPPORT'                => 'Asistenţă Sprite',
	'LBL_SYSTEM_CREDS'                  => 'Sistemul de Mediu',
    'LBL_SYSTEM_ENV'                    => 'Mediu Sistem',
	'LBL_START'							=> 'Start',
    'LBL_SHOW_PASS'                     => 'Arata parole',
    'LBL_HIDE_PASS'                     => 'Parole ascunse',
    'LBL_HIDDEN'                        => 'Ascuns',
//	'LBL_NO_THANKS'						=> 'Continue to installer',
	'LBL_CHOOSE_LANG'					=> 'Alege limba',
	'LBL_STEP'							=> 'Pas',
	'LBL_TITLE_WELCOME'					=> 'Bun venit la  SugarCRM',
	'LBL_WELCOME_1'						=> 'Aceasta instalare creeaza tabelele SugarCRM baza de date şi seturi de variabile de configurare de care aveţi nevoie pentru a incepe. Întregul proces ar trebui să ia aproximativ zece minute.',
    //welcome page variables
    'LBL_TITLE_ARE_YOU_READY'            => 'Sunteti gata pt instalare',
    'REQUIRED_SYS_COMP' => 'Componente de sistem necesare',
    'REQUIRED_SYS_COMP_MSG' =>
                    'Inainte sa incepeti va rugam verificati ca aveti versiunile suportate din urmatoarele compeonente:<br />- Sistem de management al bazelor de date (Exemple: MySql, SQL Server, Oracle)<br />- Server web (Apache, IIS)<br />Consultati matricea de compatibilitati pentru sistemele compatibile cu versiunea de Sugar pe care o instalati',
    'REQUIRED_SYS_CHK' => 'Sistem de control initial',
    'REQUIRED_SYS_CHK_MSG' =>
                    'Cand incepeti procesul de instalare webserverul pe care instalati Sugar va fi verificat pentru a fi siguri ca sistemul pe care instalati aplicatia este configurat corect si are toate componentele necesare pentru a termina cu succes instalarea.<br /><br />Sistemul va verifica urmatoarele componente:<br />- Versiunea Php - trebuie sa fie una compatibila cu aplicatia<br />- Variabilele de sesiune - trebuie sa functionze corespunzator<br />-MB Strings - trebuie sa fie instalat si functional in php.ini<br />-Suport pentru baza de date - trebuie sa existe MySql, Sql Server sau Oracle<br />- Config.php - trebuie sa existe si trebuie sa aibe permisiunile necesare pentru a se putea scrie<br />-Urmatoarele fisiere din Sugar trebuie sa aibe drepturi de scriere:<br />- /custom<br />- /cache<br />- /modules<br /><br />Daca verificarile nu se termina cu succes nu puteti incepe instalarea. Un mesaj de eroare va fi afisat explicand de ce sistemul dumneavoastra nu a trecut verificarea. Dupa ce faceti schimbarile necesare puteti verifica sistemul din nou si continua instalarea.',
    'REQUIRED_INSTALLTYPE' => 'Instalare tipica sau particularizata',
    'REQUIRED_INSTALLTYPE_MSG' =>
                    "Dupa ce verificarea sistemului este completa, puteti alege intre instalare Standard sau Personalizata<br /><br />Atat pentru instalare Standard cat si pentru Personalizata, va trebui sa stiti urmatoarele:<br /><br />    * Tipul de baza de date care va gazdui datele Sugar<br />          o Bazele de date comnpatibile: MySQL, MS SQL Server, Oracle.<br /><br />    * Numele serverului web, sau a gazdei unde va fi situata baza de date<br />          o Acesta poate fi localhost daca baza de date este pe calculatorul dumneavoastra sau este pe acelasi server sau gazda ca si fisierele Sugar<br /><br />    * Numele bazei de date pe care doriti sa o folositi pentru a gazdui datele Sugar<br />          o S-ar putea sa aveti deja o baza de date pe care doriti sa o folositi. Daca furnizati numele unei baze de date deja existente tabelele vor fi scoase in timpul instalarii cand schema pentru baza de date Sugar e definita.<br />          o Daca nu aveti deja o baza de date, numele pe care il furnizati va fi folosit pentru baza de date noua, creata in timpul instalarii.<br /><br />    * Nume de utilizator si parola pentru administratorul bazei de date<br />          o Administratorul bazei de date ar trebui sa poata crea tabele, utilizatori si sa modifice baza de date.<br />          o S-ar putea sa fie nevoie sa contactati administratorul bazei de date pentru aceasta informatie, daca baza de date nu e situata pe calculatorul dumneavoastra si/sau nu sunteti administratorul bazei de date.<br /><br />    * Nume de utilizator si parola Sugar<br />          o Utilizatorul poate fi administratorul bazei de date sau puteti furniza numele altui utilizator existent.<br />          o Daca doriti sa creati un nou utilizator al bazei de date in acest scop, veti putea furniza un nou nume de utilizator si parola in timpul procesului de instalare, si utilizatorul va fi creat in timpul instalarii.<br /><br />Pentru setarea Personalizata, s-ar putea sa fie nevoie sa stiti si urmatoarele:<br /><br />    * URL-ul care va fi folosit pentru a accesa instanta Sugar dupa ce este instalata. Acest URL ar trebui sa includa serverul web sau numele gazdei sau IP-ul.<br /><br />    * [Optional] Adresa catre directorul sesiune daca doriti sa utilizati un director sesiune personalizat pentru informatiile SUgar, pentru a impiedica datele sesiunii de a fi vulnerabile pe servere impartite.<br /><br />    * [Optional] Adresa catre un director jurnal Personalizat daca doriti sa inlocuiti directorul standard pentru Jurnalul Sugar<br /><br />    * [Optional] ID-ul aplicatiei, daca doriti sa suprascrieti ID-ul generat automat care asigura ca sesiunile unei instante Sugar nu sunt folosite de alte instante.<br /><br />    * Setul de caractere folosit cel mai des pe plan local.<br /><br />Pentru informatii mai detaliate, va rugam consultati Ghidul de Instalare.",
    'LBL_WELCOME_PLEASE_READ_BELOW' => 'Vă rugăm să citiţi următoarele informaţii importante înainte de a continua cu instalarea. Informaţiile vă vor ajuta daca sunteti sau nu gata să instalaţi aplicaţia în acest moment.',


	'LBL_WELCOME_2'						=> 'Pentru documentaţia de instalare, vizitaţi <a href="http://www.sugarcrm.com/crm/installation" target="_blank">Sugar Wiki</a>.  <BR><BR> Pentru a contacta un inginer de asistenţă SugarCRM pentru ajutor la instalare, conectaţi-vă la <a target="_blank" href="http://support.sugarcrm.com">Portalul de asistenţă SugarCRM</a> şi trimiteţi un tichet de asistenţă.',
	'LBL_WELCOME_CHOOSE_LANGUAGE'		=> 'Alege limba',
	'LBL_WELCOME_SETUP_WIZARD'			=> 'Setari Wizard',
	'LBL_WELCOME_TITLE_WELCOME'			=> 'Bun venit la  SugarCRM',
	'LBL_WELCOME_TITLE'					=> 'Asistent configurare SugarCRM',
	'LBL_WIZARD_TITLE'					=> 'Setari Sugar',
	'LBL_YES'							=> 'Da',
    'LBL_YES_MULTI'                     => 'Da - Multibyte',
	// OOTB Scheduler Job Names:
	'LBL_OOTB_WORKFLOW'		=> 'Prelucrati activitatile Workflow',
	'LBL_OOTB_REPORTS'		=> 'Activati Raportul de Sarcini programat',
	'LBL_OOTB_IE'			=> 'Verificati casutele postale Inbound',
	'LBL_OOTB_BOUNCE'		=> 'Activati procesul Nightly pt email-urile returnate companiei',
    'LBL_OOTB_CAMPAIGN'		=> 'Derulati campania Nightly Mass email',
	'LBL_OOTB_PRUNE'		=> 'Baza de date Prune la data de 1 a lunii',
    'LBL_OOTB_TRACKER'		=> 'tabele Prune Tracker',
    'LBL_OOTB_SEND_EMAIL_REMINDERS' => 'Rulare notificări memento e-mail',
    'LBL_UPDATE_TRACKER_SESSIONS' => 'Update tabel sesiuni tracker',
    'LBL_OOTB_CLEANUP_QUEUE' => 'Curăţaţi coada de operaţii',


    'LBL_FTS_TABLE_TITLE'     => 'Furnizarea de full-text Setări căutare',
    'LBL_FTS_HOST'     => 'Gazdă',
    'LBL_FTS_PORT'     => 'Port',
    'LBL_FTS_TYPE'     => 'Tip Sistem',
    'LBL_FTS_HELP'      => 'Pentru a activa full-text căutarea, selectaţi tipul de motor de căutare şi introduceţi Host şi Port în cazul în care motorul de căutare este găzduită. Sugar include construit-in-suport pentru motorul elasticsearch.',
    'LBL_FTS_REQUIRED'    => 'Se solicită Elastic Search (Căutare flexibilă).',
    'LBL_FTS_CONN_ERROR'    => 'Imposibil de conectat la serverul Full Text Search, verificaţi setările.',
    'LBL_FTS_NO_VERSION_AVAILABLE'    => 'Nu este disponibilă nicio versiune de server Full Text Search, verificaţi setările.',
    'LBL_FTS_UNSUPPORTED_VERSION'    => 'S-a detectat o versiune neacceptată de căutare elastică. Utilizaţi versiunile: %s',

    'LBL_PATCHES_TITLE'     => 'Instalaţi Ultimele  Patch-uri',
    'LBL_MODULE_TITLE'      => 'Instaleaza Pachet Localizat',
    'LBL_PATCH_1'           => 'Dacă doriţi să săriţi peste acest pas, faceţi clic pe Următoru',
    'LBL_PATCH_TITLE'       => 'Sistem Patch',
    'LBL_PATCH_READY'       => 'Patch-ul(urile) următor(e) (ES) sunt gata pentru a fi instalate:',
	'LBL_SESSION_ERR_DESCRIPTION'		=> "SugarCRM se foloseste de sesiunile Php pentru a salva informatie importanta cat timp sunteti conectat la acest server web. Instalarea dumneavoastra Php nu are setarile despre Sesiuni configurate corect. <br /><br />O configuratie gresita des intalnita este directiva \"session.save_path\" care nu pointeaza catre un director valid.<br /><br />Va rugam corectati configuratia dumneavoastra Php in fisierul php.ini care se afla mai jos.",
	'LBL_SESSION_ERR_TITLE'				=> 'Sesiuni de configurare PHP Eroare',
	'LBL_SYSTEM_NAME'=>'Nume sistem',
    'LBL_COLLATION' => 'Setări asamblare',
	'LBL_REQUIRED_SYSTEM_NAME'=>'Furnizati un nume de sistem pt instanta Sugar',
	'LBL_PATCH_UPLOAD' => 'Selectaţi un fişier patch de pe computerul local',
	'LBL_BACKWARD_COMPATIBILITY_ON' => 'Modulul de compatibilitate PHP Backward este activat.Seteaza zend.ze1_compatibility_modela Off pt a trece mai departe',

    'meeting_notification_email' => array(
        'name' => 'Mesaje e-mail de notificare a întâlnirii',
        'subject' => 'Întâlnire SugarCRM - $event_name ',
        'description' => 'Acest model este utilizat atunci când sistemul trimite o notificare de întâlnire unui utilizator.',
        'body' => '<div>
	<p>Către: $assigned_user</p>

	<p>$assigned_by_user te-a invitat la o întâlnire</p>

	<p>Subiect: $event_name<br/>
	Data de începere: $start_date<br/>
	Data de închidere: $end_date</p>

	<p>Descriere: $description</p>

	<p>Acceptă această întâlnire:<br/>
	<<a href="$accept_link">$accept_link</a>></p>
	<p>Încercare de acceptare a acestei întâlniri:<br/>
	<<a href="$tentative_link">$tentative_link</a>></p>
	<p>Refuză această întâlnire:<br/>
	<<a href="$decline_link">$decline_link</a>></p>
</div>',
        'txt_body' =>
            'Către: $assigned_user

$assigned_by_user te-a invitat la o întâlnire
Subiect: $event_name
Data de începere: $start_date
Data de închidere: $end_date

Descriere: $description
Acceptă această întâlnire:
<$accept_link>

Încercare de acceptare a acestei întâlniri:
<$tentative_link>

Refuză această întâlnire:
<$decline_link>',
    ),

    'call_notification_email' => array(
        'name' => 'Mesaje e-mail de notificare a apelului',
        'subject' => 'Apel SugarCRM - $event_name ',
        'description' => 'Acest model este utilizat atunci când sistemul trimite o notificare de apel unui utilizator.',
        'body' => '<div>
	<p>Către: $assigned_user</p>

	<p>$assigned_by_user te-a invitat la un apel</p>

	<p>Subiect: $event_name<br/>
	Data de începere: $start_date<br/>
	Durata: $hoursh, $minutesm</p>

	<p>Descriere: $description</p>

	<p>Acceptă acest apel:<br/>
	<<a href="$accept_link">$accept_link</a>></p>
	<p>Încercare de acceptare a acestui apel:<br/>
	<<a href="$tentative_link">$tentative_link</a>></p>
	<p>Refuză acest apel:<br/>
	<<a href="$decline_link">$decline_link</a>></p>
</div>',
        'txt_body' =>
            'Către: $assigned_user

$assigned_by_user te-a invitat la un apel

Subiect: $event_name
Data de începere: $start_date
Durata: $hoursh, $minutesm

Descriere: $description

Acceptă acest apel:
<$accept_link>

Încercare de acceptare a acestui apel:
<$tentative_link>

Refuză acest apel:
<$decline_link>',
    ),

    'assigned_notification_email' => array(
        'name' => 'Mesaje e-mail de notificare de alocare',
        'subject' => 'SugarCRM - $module_name alocat ',
        'description' => 'Acest model este utilizat atunci când sistemul trimite o notificare de alocare unui utilizator.',
        'body' => '<div>
<p>$assigned_by_user i-a alocat un modul&nbsp;$module_name lui&nbsp;$assigned_user.</p>

<p>Poți să verifici acest modul&nbsp;$module_name la:<br/>
	<<a href="$module_link">$module_link</a>></p>
</div>',
        'txt_body' =>
            '$assigned_by_user i-a alocat un modul$module_name lui$assigned_user.

Poți să verifici acest modul$module_name la:
<$module_link>',
    ),

    'scheduled_report_email' => array(
        'name' => 'Mesaje e-mail de raportare programate',
        'subject' => 'Raport programat: $report_name la $report_time',
        'description' => 'Acest model este utilizat atunci când sistemul trimite un raport programat unui utilizator.',
        'body' => '<div>
<p>Bună $assigned_user,</p>
<p>Ai primit în atașament un raport generat automat care a fost programat pentru a-ți fi trimis.</p>
<p>Denumire raport: $report_name</p>
<p>Data și ora raportului: $report_time</p>
</div>',
        'txt_body' =>
            'Bună $assigned_user,

Ai primit în atașament un raport generat automat care a fost programat pentru a-ți fi trimis.

Denumire raport: $report_name

Data și ora raportului: $report_time',
    ),

    'comment_log_mention_email' => [
        'name' => 'Notificare prin mesaj e-mail de la jurnalul de comentarii al sistemului',
        'subject' => 'SugarCRM - $initiator_full_name te-a menționat la un modul $singular_module_name',
        'description' => 'Acest model se utilizează pentru a trimite o notificare printr-un mesaj e-mail utilizatorilor care au fost menționați într-o secțiune a jurnalului de comentarii.',
        'body' =>
            '<div>
                <p>Ai fost menționat în următoarea înregistrare din jurnalul de comentarii:  <a href="$record_url">$record_name</a></p>
                <p>Autentifică-te în Sugar pentru a vizualiza comentariul.</p>
            </div>',
        'txt_body' =>
'Ai fost menționat în următoarea înregistrare din jurnalul de comentarii: $record_name
            Autentifică-te în Sugar pentru a vizualiza comentariul.',
    ],

    'advanced_password_new_account_email' => array(
        'subject' => 'Informatii de cont noi',
        'description' => 'Acest şablon este folosit când administratorul de sistem trimite o nouă parolă pentru un utilizator',
        'body' => 'ici este numele dvs. de cont şi parola temporară:<br /><br />Nume de utilizator: $ contact_user_user_name<br /><br />Parola: $ contact_user_user_hash<br /><br />$ config_site_url<br /><br />După ce vă conectaţi utilizand parola de mai sus, vi se poate cere pentru a reseta parola, o parola aleasa de dvs',
        'txt_body' =>
'Aici este numele de utilizator şi parola contului temporar: Nume de utilizator: $ contact_user_user_name Parola: $ $ contact_user_user_hash config_site_url După ce vă conectaţi utilizând parola de mai sus, vi se poate cere pentru a reseta parola o parola aleasa de dvs',
        'name' => 'Specifica Nume',
        ),
    'advanced_password_forgot_password_email' => array(
        'subject' => 'Resetaţi parola contului dvs.',
        'description' => "Acest şablon este folosit pentru a trimite utilizatorului un link să faceţi clic pentru a reseta parola pentru contul de utilizator.",
        'body' => 'Solicitarea dvs privind $contact_user_pwd_last_changed resetarea parolei contului<br />Faceţi clic pe link-ul de mai jos pentru a reseta parola:<br /><br />$ contact_user_link_guid',
        'txt_body' =>
'Solicitarea dvs privind $contact_user_pwd_last_changed resetarea parolei contului<br />Faceţi clic pe link-ul de mai jos pentru a reseta parola:<br /><br />$ contact_user_link_guid',
        'name' => 'Specifica Nume',
        ),

'portal_forgot_password_email_link' => [
    'name' => 'E-mail cu parola uitată pentru portal',
    'subject' => 'Resetați parola contului dumneavoastră',
    'description' => 'Acest șablon este folosit pentru a trimite utilizatorului un link pe care să facă clic pentru a reseta parola pentru contul de utilizator al portalului.',
    'body' => '<div><table border=\"0\" cellspacing=\"0\" cellpadding=\"0\" width="550" align=\"\&quot;\&quot;center\&quot;\&quot;\"><tbody><tr><td colspan=\"2\"><p>Ați solicitat recent să resetați parola contului dumneavoastră. </p><p>Faceți clic pe link-ul de mai jos pentru a reseta parola:</p><p> <a href="$portal_user_link_guid">$portal_user_link_guid</a> </p> </td> </tr><tr><td colspan=\"2\"></td> </tr> </tbody></table> </div>',
    'txt_body' =>
'
    Ați solicitat recent să resetați parola contului dumneavoastră.

    Faceți clic pe link-ul de mai jos pentru a reseta parola:

    $portal_user_link_guid',
],

    'portal_password_reset_confirmation_email' => [
        'name' => 'E-mail de confirmare a resetării parolei portalului',
        'subject' => 'Parola contului dumneavoastră a fost resetată',
        'description' => 'Acest șablon este folosit pentru a trimite o confirmare la un utilizator al portalului privind resetarea parolei contului său.',
        'body' => '<div><table border=\"0\" cellspacing=\"0\" cellpadding=\"0\" width="550" align=\"\&quot;\&quot;center\&quot;\&quot;\"><tbody><tr><td colspan=\"2\"><p>Acest e-mail vă confirmă că parola contului dumneavoastră de portal a fost resetată. </p><p>Folosiți link-ul de mai jos pentru a vă conecta la portal:</p><p> <a href="$portal_login_url">$portal_login_url</a> </p> </td> </tr><tr><td colspan=\"2\"></td> </tr> </tbody></table> </div>',
        'txt_body' =>
            '
    Acest e-mail vă confirmă că parola contului dumneavoastră de portal a fost resetată.

    Folosiți link-ul de mai jos pentru vă conecta la portal:

    $portal_login_url',
    ],
);
