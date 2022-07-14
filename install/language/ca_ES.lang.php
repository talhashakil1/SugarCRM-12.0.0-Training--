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
	'LBL_BASIC_SEARCH'					=> 'Cerca bàsica',
	'LBL_ADVANCED_SEARCH'				=> 'Cerca avançada',
	'LBL_BASIC_TYPE'					=> 'Tipus bàsic',
	'LBL_ADVANCED_TYPE'					=> 'Tipus avançat',
	'LBL_SYSOPTS_1'						=> 'Seleccioni les següents opcions de configuració del sistema.',
    'LBL_SYSOPTS_2'                     => 'Quin tipus de base de dades es farà servir per a la instància de Sugar que instal·larà?',
	'LBL_SYSOPTS_CONFIG'				=> 'Configuració del Sistema',
	'LBL_SYSOPTS_DB_TYPE'				=> '',
	'LBL_SYSOPTS_DB'					=> 'Selecció de Base de Dades',
    'LBL_SYSOPTS_DB_TITLE'              => 'Tipus de Base de Dades',
	'LBL_SYSOPTS_ERRS_TITLE'			=> 'Si us plau, corregeixi els següents errors abans de procedir:',
	'LBL_MAKE_DIRECTORY_WRITABLE'      => 'Si us plau, feu el següent directori d\'escriptura:',


    'ERR_DB_LOGIN_FAILURE_IBM_DB2'		=> 'L\'amfitrió de la base de dades proporcionat, nom d\'usuari i/o contrasenya no és vàlida, i la connexió a la base de dades no va poder ser establerta. Si us plau, introduïu un host vàlid nom d\'usuari i contrasenya',
    'ERR_DB_IBM_DB2_CONNECT'			=> 'L\'amfitrió de la base de dades proporcionat, nom d\'usuari i/o contrasenya no és vàlida, i la connexió a la base de dades no va poder ser establerta. Si us plau, introduïu un host vàlid nom d\'usuari i contrasenya',
    'ERR_DB_IBM_DB2_VERSION'			=> 'La versió de DB2 (%s) no és compatible amb Sugar. Vostè haurà d\'instal·lar una versió que sigui compatible amb l\'aplicació de Sugar. Si us plau consulteu la taula de compatibilitat en les notes de llançament de les versions de DB2.',

	'LBL_SYSOPTS_DB_DIRECTIONS'			=> 'Ha de tenir un client d\'Oracle instal·lat i configurat si selecciona Oracle.',
	'ERR_DB_LOGIN_FAILURE_OCI8'			=> 'L\'amfitrió de la base de dades proporcionat, nom d\'usuari i/o contrasenya no és vàlida, i la connexió a la base de dades no va poder ser establerta. Si us plau, introduïu un host vàlid nom d\'usuari i contrasenya',
	'ERR_DB_OCI8_CONNECT'				=> 'L\'amfitrió de la base de dades proporcionat, nom d\'usuari i/o contrasenya no és vàlida, i la connexió a la base de dades no va poder ser establerta. Si us plau, introduïu un host vàlid nom d\'usuari i contrasenya',
	'ERR_DB_OCI8_VERSION'				=> 'La seva versió d\'Oracle  (%s) no està suportada per Sugar. Ha d\'instal·lar una versió que sigui compatible amb l\'aplicació Sugar. Si us plau, consulti la Matriu de Compatibilitat en les Notes de Llançament per a més informació sobre les versions d´Oracle suportades.',
    'LBL_DBCONFIG_ORACLE'               => 'Si us plau, indiqueu el nom de la base de dades. Aquest serà l\'espai de taula per defecte que s\'assigna al seu usuari (SID de tnsnames.ora).',
	// seed Ent Reports
	'LBL_Q'								=> 'Consulta d\'Oportunitat ',
	'LBL_Q1_DESC'						=> 'Oportunitats per Tipus',
	'LBL_Q2_DESC'						=> 'Oportunitats per Compte',
	'LBL_R1'							=> 'Informe d\'Objectius de vendes a 6 mesos',
	'LBL_R1_DESC'						=> 'Oportunitats per als pròxims 6 mesos catalogades per mes i tipus',
	'LBL_OPP'							=> 'Conjunt de Dades d\'Oportunitats ',
	'LBL_OPP1_DESC'						=> 'Aquí pot canviar l\'aparença de la seva consulta personalitzada',
	'LBL_OPP2_DESC'						=> 'Aquesta consulta es posicionarà, dins de l´informe, a continuació de la primera consulta',
    'ERR_DB_VERSION_FAILURE'			=> 'No es pot verificar la versió de base de dades.',

	'DEFAULT_CHARSET'					=> 'UTF-8',
    'ERR_ADMIN_USER_NAME_BLANK'         => 'El nom d&#39;usuari per l&#39;administrador de Sugar.',
	'ERR_ADMIN_PASS_BLANK'				=> 'Introdueixi la contrasenya d´admin de Sugar.',

    'ERR_CHECKSYS'                      => 'S´han detectat errors durant les comprovacions de compatibilitat. Perquè la seva Instal·lació de SugarCRM funcioni correctament, du a terme els següents passos per corregir els problemes llistats a continuació i faci clic al botó comprovar de nou, o iniciï de nou la instal·lació, si us plau.',
    'ERR_CHECKSYS_CALL_TIME'            => '"Allow Call Time Pass Reference" està Habilitat (si us plau, ho estableixi a Off en php.ini)',

	'ERR_CHECKSYS_CURL'					=> 'No s\'ha trobat. Planificador de Sugar s\'executarà amb funcionalitat limitada. El servei d\'Arxiu de correus electrònics no funcionarà.',
    'ERR_CHECKSYS_IMAP'					=> 'No trobat: Correu Entrant i Campanyes (Correu Electrònic) requereixen les biblioteques d´IMAP. Cap no serà funcional .',
	'ERR_CHECKSYS_MSSQL_MQGPC'			=> 'Magic Quotes GPC no pot ser activat quan s´usa  MS SQL Server.',
	'ERR_CHECKSYS_MEM_LIMIT_0'			=> 'Avís:',
	'ERR_CHECKSYS_MEM_LIMIT_1'			=> '(Estableixi-ho a',
	'ERR_CHECKSYS_MEM_LIMIT_2'			=> 'M o més al seu arxiu your php.ini)',
	'ERR_CHECKSYS_MYSQL_VERSION'		=> 'Versió Mínima 4.1.2 - Trobada:',
	'ERR_CHECKSYS_NO_SESSIONS'			=> 'Ha ocorregut un error en escriure i llegir les variables de sessió. No s´ha pogut procedir amb la instal·lació.',
	'ERR_CHECKSYS_NOT_VALID_DIR'		=> 'No és un Directori Vàlid',
	'ERR_CHECKSYS_NOT_WRITABLE'			=> 'Avís: No és pot Escriure',
	'ERR_CHECKSYS_PHP_INVALID_VER'		=> 'La seva versió de PHP no està soportada per Sugar. Necessitarà instalar una versió que sigui compatible amb l&#39;aplicació Sugar. Si us plau,consulti la Matriu de Compatibilitat de les Notes de Llançament per a informació sobre les Versions de PHP soportades. La seva versió és la',
	'ERR_CHECKSYS_IIS_INVALID_VER'      => 'La seva versió de IIS no és compatible amb Sugar. Vostè haurà de instal·lar una versió que sigui compatible amb l&#39;aplicació de Sugar. Si us plau consulteu la taula de compatibilitat en les notes de llançament de les versions de l&#39;IIS. La seva versió és',
    'ERR_CHECKSYS_FASTCGI'              => 'Es detecta que no esteu utilitzant una assignació de controlador FastCGI per PHP. Haureu d\'instal·lar/configurar una versió que sigui compatible amb l\'aplicació de Sugar. Si us plau, consulteu la taula de compatibilitat en les notes de llançament de les versions compatibles. Consulteu els detalls a <a href="http://www.iis.net/php/" target="_blank" rel="nofollow noopener noreferrer">http://www.iis.net/php/</a> ',
	'ERR_CHECKSYS_FASTCGI_LOGGING'      => 'Per a una òptima experiència d&#39;ús de IIS/FastCGI sapi, estableixi fastcgi.logging a 0 en el seu arxiu php.ini.',
    'ERR_CHECKSYS_PHP_UNSUPPORTED'		=> 'Versió de PHP Instalada No Suportada: ( veure',
    'LBL_DB_UNAVAILABLE'                => 'Base de dades no disponible',
    'LBL_CHECKSYS_DB_SUPPORT_NOT_AVAILABLE' => 'No s\'ha trobat el Suport de la base de dades. Assegureu-vos de tenir els controladors necessaris per a un dels següents tipus de bases de dades compatibles: MySQL, MS SQLServer, Oracle o DB2. Potser heu d\'eliminar el comentari de l\'extensió del fitxer php.ini, o tornar a compilar amb el fitxer binari correcte, en funció de la vostra versió de PHP. Consulteu el vostre Manual de PHP per obtenir-ne més informació de com habilitar el Suport de la base de dades.',
    'LBL_CHECKSYS_XML_NOT_AVAILABLE'        => 'Les funcions associades amb les Biblioteques d´Anàlisi de l´XML que són requerides per l´aplicació Sugar no han estat trobades. És possible que hagi de descomentar l´extensió a l´arxiu php.ini, o recompilar-lo amb l´arxiu binari apropiat, depenent de la versió de PHP. Si us plau, consulti el manual de PHP per a més informació.',
    'LBL_CHECKSYS_CSPRNG' => 'Generador de nombres aleatoris',
    'ERR_CHECKSYS_MBSTRING'             => 'Les funcions associades amb l´extensió de PHP per a Cadenes Multibyte (mbstring) que són requerides per l´aplicació Sugar no han estat trobades. <br/><br/> Normalment, el mòdul mbstring no està habilitat per defecte en PHP i ha de ser activat amb --enable-mbstring en la compilació de PHP. Si us plau, consulti el manual de PHP per a més informació sobre com habilitar el suport de mbstring.',
    'ERR_CHECKSYS_SESSION_SAVE_PATH_NOT_SET'       => 'L´opció session.save_path del seu arxiu de configuració php (php.ini) no ha estat establerta o ha estat establerta a una carpeta que no existeix. És possible que hagi d´establir l´opció save_path setting en php.ini o verificar que existeix la carpeta establerta en save_path.',
    'ERR_CHECKSYS_SESSION_SAVE_PATH_NOT_WRITABLE'  => 'L´opció session.save_path del seu arxiu|arxivament de configuració php (php.ini) ha estat establerta a una carpeta que no és escribible. Si us plau, dugui a terme els passos necessaris per fer la carpeta escribible. <br>Dependiendo del seu Sistema Operatiu, és possible que hagi de canviar els permisos usant chmod 766, o fer clic amb el botó dret del ratolí sobre l´arxiu per accedir a les propietats i desmarcar l´opció de només lectura.',
    'ERR_CHECKSYS_CONFIG_NOT_WRITABLE'  => 'L´arxiu|arxivament de configuració (config.php) existeix però no és escribible. Si us plau, dugui a terme els passos necessaris per fer-ho escribible. Depenent del seu Sistema Operatiu, és possible que hagi de canviar els permisos usant chmod 766, o fer clic amb el botó dret del ratolí sobre l´arxiu per accedir a les propietats i desmarcar l´opció de només lectura.',
    'ERR_CHECKSYS_CONFIG_OVERRIDE_NOT_WRITABLE'  => 'L&#39;arxiu de substitució de configuració existeix, però no es pot escriure. Si us plau, prengui les mesures necessàries per fer que l&#39;arxiu es pot escriure. Depenent del seu sistema operatiu, això podria ser necessari canviar els permisos executant chmod 766, o fer clic dret sobre el nom del fitxer per accedir a les propietats i desactiveu l&#39;opció de només lectura.',
    'ERR_CHECKSYS_CUSTOM_NOT_WRITABLE'  => 'El Directori Custom existeix però no és escribible. És possible que hagi de canviar els seus permisos (chmod 766) o fer clic amb el botó dret del ratolí sobre ell i desmarcar l´opció de només lectura, depenent del seu Sistema Operatiu. Si us plau, dugui a terme els passos necessaris perquè l´arxiu sigui escribible.',
    'ERR_CHECKSYS_FILES_NOT_WRITABLE'   => "Els següents arxius o directoris no són escribibles o no existeixen i no poden ser creats. Depenent del seu Sistema Operatiu, corregir això requerirà canviar els permisos als arxius o en el seu directori pare (chmod 766), o fer clic amb el botó dret en el directori pare i desmarcar l´opció &#39;només lectura&#39; i aplicar-la a totes les subcarpetes.",
	'ERR_CHECKSYS_SAFE_MODE'			=> 'La Manera Segura està activada (és possible que desitgi deshabilitar-lo en php.ini)',
    'ERR_CHECKSYS_ZLIB'					=> 'No trobat: SugarCRM obté grans beneficis de rendiment amb compressió zlib.',
    'ERR_CHECKSYS_ZIP'					=> 'Suport ZIP que no es troben: el suport SugarCRM ZIP necessita per a processar arxius comprimits.',
    'ERR_CHECKSYS_BCMATH'				=> 'No s&#39;ha troba l&#39;assistència de BCMATH: SugarCRM necessita l&#39;assistència de BCMATH per les matemàtiques de precisió arbitrària.',
    'ERR_CHECKSYS_HTACCESS'             => 'Prova de reescriptures .htaccess va fallar. Això en general vol dir que vostè no te AllowOverride configurat per al directori de Sugar.',
    'ERR_CHECKSYS_CSPRNG' => 'Excepció de CSPRNG',
	'ERR_DB_ADMIN'						=> 'El nom d´usuari o contrasenya de l´administrador de base de dades no són vàlids, i la connexió a base de dades no ha pogut ser establerta. Si us plau, introdueixi un nom d´usuari i contrasenya vàlids. (Error:',
    'ERR_DB_ADMIN_MSSQL'                => 'El nom d´usuari o contrasenya de l´administrador de base de dades no són vàlids, i la connexió a base de dades no ha pogut ser establerta. Si us plau, introdueixi un nom d´usuari i contrasenya vàlids.',
	'ERR_DB_EXISTS_NOT'					=> 'La base de dades especificada no existeix.',
	'ERR_DB_EXISTS_WITH_CONFIG'			=> 'La base de dades ja existeix i conté dades de configuració. Per executar una instal·lació amb la base de dades elegida, si us plau, executi de nou la instal·lació i seleccioni: " Esborrar i crear de nou les taules|posts de SugarCRM? " Per actualitzar, utilitzi l´Assistent d´Actualitzacions a la Consola d´Administració. Si us plau, llegeixi la documentació referent a actualitzacions <a href="http://www.sugarforge.org/content/downloads/" target="_new">aquí</a >.',
	'ERR_DB_EXISTS'						=> 'El nom de base de dades subministrat ja existeix -- no pot crear-se´n cap altra amb el mateix nom.',
    'ERR_DB_EXISTS_PROCEED'             => 'El nom de base de dades subministrat ja existeix. Pot<br>1. prémer el botó Enrera i triar un nou nom <br>2. fer clic a Següent i continuar, però totes les taules|posts existents en aquesta base de dades seran eliminades. <strong>Això implica que les seves taules|posts i dades seran eliminades permanentemente.</strong >',
	'ERR_DB_HOSTNAME'					=> 'El nom d´equip no pot ser buit.',
	'ERR_DB_INVALID'					=> 'El tipus de base de dades seleccionada no és vàlida.',
	'ERR_DB_LOGIN_FAILURE'				=> 'L\'amfitrió de la base de dades proporcionat, nom d\'usuari i/o contrasenya no és vàlida, i la connexió a la base de dades no va poder ser establerta. Si us plau, introduïu un host vàlid nom d\'usuari i contrasenya',
	'ERR_DB_LOGIN_FAILURE_MYSQL'		=> 'L\'amfitrió de la base de dades proporcionat, nom d\'usuari i/o contrasenya no és vàlida, i la connexió a la base de dades no va poder ser establerta. Si us plau, introduïu un host vàlid nom d\'usuari i contrasenya',
	'ERR_DB_LOGIN_FAILURE_MSSQL'		=> 'L\'amfitrió de la base de dades proporcionat, nom d\'usuari i/o contrasenya no és vàlida, i la connexió a la base de dades no va poder ser establerta. Si us plau, introduïu un host vàlid nom d\'usuari i contrasenya',
	'ERR_DB_MYSQL_VERSION'				=> 'La seva versió de MySQL (%s) no és compatible amb Sugar. Vostè haurà de instal·lar una versió que sigui compatible amb l&#39;aplicació de Sugar. Si us plau consulteu la taula de compatibilitat en les notes de llançament de les versions de MySQL.',
	'ERR_DB_NAME'						=> 'El nom de base de dades no pot ser buit.',
	'ERR_DB_NAME2'						=> "El nom de base de dades no pot contenir els caràcters &#39;\\&#39;, / &#39;, o &#39;. &#39;",
    'ERR_DB_MYSQL_DB_NAME_INVALID'      => "El nom de base de dades no pot contenir els caràcters &#39;\\&#39;, / &#39;, o &#39;. &#39;",
    'ERR_DB_MSSQL_DB_NAME_INVALID'      => "Nom de la base no pot començar amb un número, &#39;#&#39;, o &#39;@&#39; i no pot contenir un espai, &#39;\"&#39;, \"&#39;\", &#39;*&#39;, &#39;/&#39;, &#39;\\&#39;, &#39;?&#39;, &#39;:&#39;, &#39;<&#39;, &#39;>&#39;, &#39;&&#39;, &#39;!&#39;, or &#39;-&#39;",
    'ERR_DB_OCI8_DB_NAME_INVALID'       => "El nom de la base de dades només pot incloure caràcters alfanumèrics i els símbols \"#\", \"_\", \"-\", \":\", \".\", \"/\" o \"$\".",
	'ERR_DB_PASSWORD'					=> 'Les contrasenyes introduïdes per a l´administrador de base de dades de Sugar no coincideixen. Si us plau, introdueixi de nou la mateixa contrasenya en els camps de contrasenya.',
	'ERR_DB_PRIV_USER'					=> 'Introdueixi un nom d´usuari de base de dades. L´usuari és necessari per a la connexió inicial a la base de dades.',
	'ERR_DB_USER_EXISTS'				=> 'El nom d´usuari per a la base de dades de Sugar ja existeix -- no és possible crear-ne un altre amb el mateix nom. Si us plau, introdueixi un nou nom d´usuari.',
	'ERR_DB_USER'						=> 'Introdueixi un nom d´usuari per a l´administrador de la base de dades de Sugar.',
	'ERR_DBCONF_VALIDATION'				=> 'Si us plau, corregeixi els següents errors abans de procedir:',
    'ERR_DBCONF_PASSWORD_MISMATCH'      => 'Les contrasenyes introduïdes per a l´usuari de base de dades de Sugar no coincideixen. Si us plau, introdueixi de nou la mateixa contrasenya en els camps de contrasenya.',
	'ERR_ERROR_GENERAL'					=> 'S´han trobat els següents errors:',
	'ERR_LANG_CANNOT_DELETE_FILE'		=> 'L´arxiu no pot ser eliminat:',
	'ERR_LANG_MISSING_FILE'				=> 'L´arxiu no pot ser eliminat:',
	'ERR_LANG_NO_LANG_FILE'			 	=> 'No s´ha trobat un paquet de llenguatge en include/language dins de:',
	'ERR_LANG_UPLOAD_1'					=> 'Ha ocorregut un problema amb la seva pujada d´arxiu. Si us plau, intenti-ho de nou.',
	'ERR_LANG_UPLOAD_2'					=> 'Els paquets de llenguatge han de ser arxius ZIP.',
	'ERR_LANG_UPLOAD_3'					=> 'PHP no ha pogut moure l´arxiu temporal al directori d´actualitzacions.',
	'ERR_LICENSE_MISSING'				=> 'Falten Camps Requerits',
	'ERR_LICENSE_NOT_FOUND'				=> 'No s´ha trobat l´arxiu de llicència!',
	'ERR_LOG_DIRECTORY_NOT_EXISTS'		=> 'El directori de traces indicat no és un directori vàlid.',
	'ERR_LOG_DIRECTORY_NOT_WRITABLE'	=> 'El directori de traces indicat no és un directori escribible.',
	'ERR_LOG_DIRECTORY_REQUIRED'		=> 'Es requereix un directori de traces si desitja indicar-ne un de personalitzat.',
	'ERR_NO_DIRECT_SCRIPT'				=> 'No s´ha pogut processar el script directament.',
	'ERR_NO_SINGLE_QUOTE'				=> 'No podeu fer servir les cometes simples per a ',
	'ERR_PASSWORD_MISMATCH'				=> 'Les claus de pas introduïdes per a l´usuari administrador de Sugar no coincideixen. Si us plau, introdueixi de nou la mateixa contrasenya en els camps de contrasenya.',
	'ERR_PERFORM_CONFIG_PHP_1'			=> 'No ha pogut escriure´s a l´arxiu <span class=stop>config.php</span >.',
	'ERR_PERFORM_CONFIG_PHP_2'			=> 'Pot continuar aquesta instal·lació creant manualment l´arxiu config.php i pegant la informació de configuració indicada a continuació a l´arxiu config.php. Sense embargament, <strong>te que </strong>crear l´arxiu config.php abans d´avançar al següent pas.',
	'ERR_PERFORM_CONFIG_PHP_3'			=> 'Va recordar crear l´arxiu config.php?',
	'ERR_PERFORM_CONFIG_PHP_4'			=> 'Avís: No ha pogut escriure´s a l´arxiu config.php. Si us plau, asseguri´s que existeix.',
	'ERR_PERFORM_HTACCESS_1'			=> 'No ha pogut escriure´s a l´arxiu',
	'ERR_PERFORM_HTACCESS_2'			=> '.',
	'ERR_PERFORM_HTACCESS_3'			=> 'Si vol securitzar el seu arxiu de traces, per evitar que sigui accessible mitjançant el navegador web, crei un arxiu .htaccess en el seu directori de traces amb la línia:',
	'ERR_PERFORM_NO_TCPIP'				=> '<b>No s´ha pogut detectar una connexió a internet.</b>Si us plau, quan en disposi d´una, visiti <a href="http://www.sugarcrm.com/home/index.php?option=com_extended_registration&task=register">http://www.sugarcrm.com/home/index.php?option=com_extended_registration&task=register</a> per registrarse amb SugarCRM. Permetent-nos saber una mica sobre els plans de la seva companyia per utilitzar SugarCRM, podem assegurar-nos que sempre estem subministrant el producte adequat per a les necessitats del seu negoci.',
	'ERR_SESSION_DIRECTORY_NOT_EXISTS'	=> 'El directori de sessió indicat no és un directori vàlid.',
	'ERR_SESSION_DIRECTORY'				=> 'El directori de sessió indicat no és un directori escribible.',
	'ERR_SESSION_PATH'					=> 'Es requereix un directori de sessió si desitja indicar-ne un de personalitzat.',
	'ERR_SI_NO_CONFIG'					=> 'No ha inclòs config_si.php a la carpeta arrel de documents, o no ha definit $sugar_config_si en config.php',
	'ERR_SITE_GUID'						=> 'Es requereix un ID d´Aplicació si desitja indicar-ne un personalitzat.',
    'ERROR_SPRITE_SUPPORT'              => "Actualment no són capaços de localitzar la llibreria GD, com a resultat no serà capaç d&#39;utilitzar la funcionalitat de Sprite CSS.",
	'ERR_UPLOAD_MAX_FILESIZE'			=> 'Avís: La seva configuració de PHP hauria de ser canviada per permetre pujades d´arxius d´almenys 6 MB .',
    'LBL_UPLOAD_MAX_FILESIZE_TITLE'     => 'Mida per a Pujada d´Arxius',
	'ERR_URL_BLANK'						=> 'Introdueix l´URL base per a la instància de Sugar.',
	'ERR_UW_NO_UPDATE_RECORD'			=> 'No s´ha pogut localitzar el registre d´instal·lació de',
    'ERROR_FLAVOR_INCOMPATIBLE'         => 'L\'arxiu pujat no és compatible amb aquesta edició (Professional, Enterprise o Ultimate) de Sugar: ',
	'ERROR_LICENSE_EXPIRED'				=> "Error: La seva Llicència va caducar fa",
	'ERROR_LICENSE_EXPIRED2'			=> "dia(s). Si us plau, vagi a la <a href=\"index.php?action=LicenseSettings&module=Administration\">\"Administració de Llicències\"</a >, a la pantalla d´Administració, per introduir la seva nova clau de llicència. Si no introdueix una nova clau de llicència en 30 dies a partir de la caducitat de la seva clau de llicència, no podrà iniciar la sessió en aquesta aplicació.",
	'ERROR_MANIFEST_TYPE'				=> 'El fitxer del manifest ha d\'especificar el tipus de paquet.',
	'ERROR_PACKAGE_TYPE'				=> 'El arxiu de Manifiesto especifica un tipo de paquete no reconocido',
	'ERROR_VALIDATION_EXPIRED'			=> "Error: La seva clau de validació va caducar fa",
	'ERROR_VALIDATION_EXPIRED2'			=> "dia(s). Si us plau, vagi a la <a href=\"index.php?action=LicenseSettings&module=Administration\">\"Administració de Llicències\"</a >, a la pantalla d&#39;Administració, per introduir la seva nova clau de validació. Si no introdueix una nova clau de validació en 30 dies a partir de la caducitat de la seva clau de validació, no podrà iniciar la sessió en aquesta aplicació.",
	'ERROR_VERSION_INCOMPATIBLE'		=> 'El arxiu subido no es compatible con esta versión de Sugar Suite:',

	'LBL_BACK'							=> 'Enrere',
    'LBL_CANCEL'                        => 'Cancel·la',
    'LBL_ACCEPT'                        => 'Accepto',
	'LBL_CHECKSYS_1'					=> 'Perquè la seva instal·lació de SugarCRM funcioni correctament, s´asseguri que tots els elements de comprovació llistats a continuació estan en verd. Si algun està en vermell|roig, si us plau, realitzi els passos necessaris per corregir-los. <BR><BR > Per trobar ajut sobre aquestes comprovacions del sistema, si us plau visiti el <a href="http://www.sugarcrm.com/crm/installation" target="_blank">Sugar Wiki</a >.',
	'LBL_CHECKSYS_CACHE'				=> 'Subdirectoris de Caché Escribibles',
    'LBL_DROP_DB_CONFIRM'               => 'El Nom de Base de dades subministrat ja existeix.<br>Te les següents opcions:<br>1. Fer clic al botó Cancelar i seleccionar un nou nom de base de dades, o <br>2. Fer clic al botó Acceptar i continuar. Totes les taules|posts existents en la base de dades seran eliminades. <strong>Això implica que totes les seves taules|posts i dades actuals desapareixeran.</strong>',
	'LBL_CHECKSYS_CALL_TIME'			=> 'PHP "Allow Call Time Pass Reference" Deshabilitat',
    'LBL_CHECKSYS_COMPONENT'			=> 'Component',
	'LBL_CHECKSYS_COMPONENT_OPTIONAL'	=> 'Components Opcionals',
	'LBL_CHECKSYS_CONFIG'				=> 'Arxiu de Configuració de SugarCRM (config.php) Escribible',
	'LBL_CHECKSYS_CONFIG_OVERRIDE'		=> 'Escriptura permesa a l&#39;arxiu de configuració de SugarCRM (config_override.php)',
	'LBL_CHECKSYS_CURL'					=> 'Mòdul cURL',
    'LBL_CHECKSYS_SESSION_SAVE_PATH'    => 'Configuració de la Ruta d´Emmagatzemament de Sessions',
	'LBL_CHECKSYS_CUSTOM'				=> 'Directori Personalizat (custom) Escribible',
	'LBL_CHECKSYS_DATA'					=> 'Subdirectoris de Dades Escribibles',
	'LBL_CHECKSYS_IMAP'					=> 'Mòdul IMAP',
	'LBL_CHECKSYS_MQGPC'				=> 'Citacions de màgics GPC',
	'LBL_CHECKSYS_MBSTRING'				=> 'Mòdulo de Cadenes MB',
	'LBL_CHECKSYS_MEM_OK'				=> 'Correcte (Sense Límit)',
	'LBL_CHECKSYS_MEM_UNLIMITED'		=> 'Correcte (Sense Límit)',
	'LBL_CHECKSYS_MEM'					=> 'Límit de Memòria PHP >=',
	'LBL_CHECKSYS_MODULE'				=> 'Subdirectoris i Arxius de Mòduls Escribibles',
	'LBL_CHECKSYS_MYSQL_VERSION'		=> 'Versió de MySQL',
	'LBL_CHECKSYS_NOT_AVAILABLE'		=> 'No Disponible',
	'LBL_CHECKSYS_OK'					=> 'Acceptar',
	'LBL_CHECKSYS_PHP_INI'				=> '<b>Nota:</b> ﻿El seu arxiu de configuració de PHP (php.ini) està',
	'LBL_CHECKSYS_PHP_OK'				=> 'Correcte (veure',
	'LBL_CHECKSYS_PHPVER'				=> 'Versió de PHP',
    'LBL_CHECKSYS_IISVER'               => 'Versió de l\'IIS',
    'LBL_CHECKSYS_FASTCGI'              => 'FastCGI',
	'LBL_CHECKSYS_RECHECK'				=> 'Comprovar de nou',
	'LBL_CHECKSYS_SAFE_MODE'			=> 'Manera Segura de PHP Deshabilitat',
	'LBL_CHECKSYS_SESSION'				=> 'Ruta d´Emmagatzemament de Sessió Escribible (',
	'LBL_CHECKSYS_STATUS'				=> 'Estat',
	'LBL_CHECKSYS_TITLE'				=> 'Acceptació de Comprovacions del Sistema',
	'LBL_CHECKSYS_VER'					=> 'Trobat: ( veure',
	'LBL_CHECKSYS_XML'					=> 'Anàlisis XML',
	'LBL_CHECKSYS_ZLIB'					=> 'Mòdul de Compressió ZLIB',
	'LBL_CHECKSYS_ZIP'					=> 'Mòdul de manipulació postal',
    'LBL_CHECKSYS_BCMATH'				=> 'Mòdul de Matemàtiques de Precició Arbitrària',
    'LBL_CHECKSYS_HTACCESS'				=> 'Setup de AllowOverride per .htaccess',
    'LBL_CHECKSYS_FIX_FILES'            => 'Si us plau, corregeixi els següents arxius o directoris abans de continuar:',
    'LBL_CHECKSYS_FIX_MODULE_FILES'     => 'Si us plau, corregeixi els següents directoris de mòduls i els arxius en ells continguts abans de continuar:',
    'LBL_CHECKSYS_UPLOAD'               => 'Modificable directori de càrrega',
    'LBL_CLOSE'							=> 'Tancar',
    'LBL_THREE'                         => '3',
	'LBL_CONFIRM_BE_CREATED'			=> 'serà creat',
	'LBL_CONFIRM_DB_TYPE'				=> 'Tipus de Base de Dades',
	'LBL_CONFIRM_DIRECTIONS'			=> 'Si us plau, confirmi la següent configuració. Si desitja canviar qualsevol dels valors, faci clic en "Enrere" per editar-los. En un altre cas, faci clic en "Següent" per iniciar la instal·lació.',
	'LBL_CONFIRM_LICENSE_TITLE'			=> 'Informació de Llicència',
	'LBL_CONFIRM_NOT'					=> 'no',
	'LBL_CONFIRM_TITLE'					=> 'Confirmació de configuració',
	'LBL_CONFIRM_WILL'					=> 'voluntat',
	'LBL_DBCONF_CREATE_DB'				=> 'Crear Base de dades',
	'LBL_DBCONF_CREATE_USER'			=> 'Crear Usuari [Alt+N]',
	'LBL_DBCONF_DB_DROP_CREATE_WARN'	=> 'Advertència: Tots les dades de Sugar seran eliminados<br>si es marca aquesta opció.',
	'LBL_DBCONF_DB_DROP_CREATE'			=> 'Esborrar les taules de Sugar actuals i crear-les de nou?',
    'LBL_DBCONF_DB_DROP'                => 'Esborrar Taules',
    'LBL_DBCONF_DB_NAME'				=> 'Nom de Base de dades',
	'LBL_DBCONF_DB_PASSWORD'			=> 'Contrasenya de l´Usuari de Base de dades de Sugar',
	'LBL_DBCONF_DB_PASSWORD2'			=> 'Introdueixi de nou la Clau de Pas de l´Usuari de Base de dades de Sugar',
	'LBL_DBCONF_DB_USER'				=> 'Usuari de Base de dades de Sugar',
    'LBL_DBCONF_SUGAR_DB_USER'          => 'Usuari de Base de dades de Sugar',
    'LBL_DBCONF_DB_ADMIN_USER'          => 'Nom d´usuari de l´Administrador de Base de Dades',
    'LBL_DBCONF_DB_ADMIN_PASSWORD'      => 'Contrasenya del Administrador de Base de dades',
	'LBL_DBCONF_DEMO_DATA'				=> 'Introduir Dades de Demostració en la Base de Dades?',
    'LBL_DBCONF_DEMO_DATA_TITLE'        => 'Seleccioni les Dades de Demo',
	'LBL_DBCONF_HOST_NAME'				=> 'Nom de Equip',
	'LBL_DBCONF_HOST_INSTANCE'			=> 'Instància Host',
	'LBL_DBCONF_HOST_PORT'				=> 'Port',
    'LBL_DBCONF_SSL_ENABLED'            => 'Habilita la connexió SSL',
	'LBL_DBCONF_INSTRUCTIONS'			=> 'Si us plau, introdueixi la informació de configuració de la seva base de dades a continuació. Si no està segur de quines dades utilitzar, li suggerim que utilitzi els valors per defecte.',
	'LBL_DBCONF_MB_DEMO_DATA'			=> 'Utilitzar text multibyte en dades de demostració?',
    'LBL_DBCONFIG_MSG2'                 => 'Nom del servidor web o màquina (equip) en el qual la base de dades està ubicada:',
    'LBL_DBCONFIG_MSG3'                 => 'Nom de la base de dades que acollirà les dades de la instància de Sugar que instal·larà:',
    'LBL_DBCONFIG_B_MSG1'               => 'Per configurar la base de dades de Sugar, és necessari el nom d´usuari i contrasenya de l´administrador de base de dades que pot crear taules|posts de base de dades i usarios i que pot escriure a la base de dades.',
    'LBL_DBCONFIG_SECURITY'             => 'Per motius de seguretat, pot especificar un usuari de base de dades exclusiu per connectar-se a la base de dades de Sugar. Aquest usuari ha de ser capaç d´escriure, actualitzar i recuparar dades en la base de dades de Sugar que serà creada per a aquesta instància. Aquest usuari pot ser l´administrador de base de dades anteriorment especificat, o pot introduir la informació d´un usuari de base de dades nou o existent.',
    'LBL_DBCONFIG_AUTO_DD'              => 'Ho faci per mi',
    'LBL_DBCONFIG_PROVIDE_DD'           => 'Introdueixi un usuari existent',
    'LBL_DBCONFIG_CREATE_DD'            => 'Defineixi l´usuari a crear',
    'LBL_DBCONFIG_SAME_DD'              => 'El mateix que l´usuari Administrador',
	//'LBL_DBCONF_I18NFIX'              => 'Apply database column expansion for varchar and char types (up to 255) for multi-byte data?',
    'LBL_FTS'                           => 'Recerca de text complert',
    'LBL_FTS_INSTALLED'                 => 'Instal·lat',
    'LBL_FTS_INSTALLED_ERR1'            => 'Capacitat de recerca de text complet no està instal·lat.',
    'LBL_FTS_INSTALLED_ERR2'            => 'Encara pot instal·lar, però no serà capaç d&#39;utilitzar la funcionalitat de cerca de text. Si us plau, consulti el seu servidor de base de dades de la guia d&#39;instal·lació sobre la manera de fer això, o poseu-vos en contacte amb l&#39;administrador.',
	'LBL_DBCONF_PRIV_PASS'				=> 'Contrasenya de l´Usuari Privilegiat de Base de dades',
	'LBL_DBCONF_PRIV_USER_2'			=> 'Correspon al Compte de Base de dades Anterior a un Usuari Privilegiat?',
	'LBL_DBCONF_PRIV_USER_DIRECTIONS'	=> 'Aquest usuari privilegiat de base de dades ha de tenir els permisos adequats per crear una base de dades, eliminar/crear taules|posts, i crear un usuari. Aquest usuari privilegiat de base de dades només s´utilitzarà per realitzar aquestes tasques segons siguin necessàries durant el procés d´instal·lació. També pot utilitzar el mateix usuari de base de dades anterior si té els privilegis suficients.',
	'LBL_DBCONF_PRIV_USER'				=> 'Nom de l´Usuari Privilegiat de Base de dades',
	'LBL_DBCONF_TITLE'					=> 'Configuració de Base de dades',
    'LBL_DBCONF_TITLE_NAME'             => 'Introdueixi el Nom de Base de Dades',
    'LBL_DBCONF_TITLE_USER_INFO'        => 'Introdueixi la Informació d´Usuari de Base de Dades',
	'LBL_DISABLED_DESCRIPTION_2'		=> 'Després que s´hagi realitzat aquest canvi, pot fer clic al botó "Iniciar" situat a baix, per iniciar la seva instal·lació. <i>Una vegada s´hagi completat la instal·lació, és probable que desitgi canviar el valor per a la variable &#39;installer_locked&#39; a &#39;true&#39;.</i>',
	'LBL_DISABLED_DESCRIPTION'			=> 'L´instal·lador ja ha estat executat. Com a mesura de seguretat, s´ha deshabilitat perquè no sigui executat per segona vegada. Si està totalment segur que desitja executar-lo de nou, si us plau vagi al seu arxiu config.php i localitzi (o afegeixi) una variable cridada &#39;installer_locked&#39; i l´estableixi a &#39;false&#39;. La línia hauria de quedar com el següent:',
	'LBL_DISABLED_HELP_1'				=> 'Per a ajut sobre la instal·lació, si us plau visiti els fòrums de suport de SugarCRM',
    'LBL_DISABLED_HELP_LNK'               => 'http://www.sugarcrm.com/forums/',
	'LBL_DISABLED_HELP_2'				=> 'fòrums de suport',
	'LBL_DISABLED_TITLE_2'				=> 'La Instal·lació de SugarCRM ha estat Deshabilitada',
	'LBL_DISABLED_TITLE'				=> 'Instal·lació de SugarCRM Deshabilitada',
	'LBL_EMAIL_CHARSET_DESC'			=> 'Joc de caràcters més utilitzat en la seva configuració regional',
	'LBL_EMAIL_CHARSET_TITLE'			=> 'Opcions del Correu Sortint',
    'LBL_EMAIL_CHARSET_CONF'            => 'Joc de caràcters per Correu Sortint',
	'LBL_HELP'							=> 'Ajuda',
    'LBL_INSTALL'                       => 'Instal·lar',
    'LBL_INSTALL_TYPE_TITLE'            => 'Opcions d´instal·lació',
    'LBL_INSTALL_TYPE_SUBTITLE'         => '﻿Seleccioni un Tipus d´Instal·lació',
    'LBL_INSTALL_TYPE_TYPICAL'          => '<b>Instal·lació Típica</b>',
    'LBL_INSTALL_TYPE_CUSTOM'           => '<b>Instal·lació Personalitzada</b>',
    'LBL_INSTALL_TYPE_MSG1'             => 'La clau es requereix per a la funcionalitat general de l´aplicació, però no és necessària per a la instal·lació. No necessita introduir una clau vàlida en aquests moments, però haurà d´introduir-la després de la instal·lació de l´aplicació.',
    'LBL_INSTALL_TYPE_MSG2'             => 'Requereix la mínima informació possible per a la instal·lació. Recomanada per a usuaris faci una novació de ells.',
    'LBL_INSTALL_TYPE_MSG3'             => 'Proveeix opcions addicionals a establir durant la instal·lació. La majoria d´aquestes estan també disponibles després de la instal·lació a les pantalles d´adminitración. Recomanat per a usuaris avançats.',
	'LBL_LANG_1'						=> 'Per utilitzar un llenguatge a Sugar diferent al del llenguatge per defecte (Anglès EUA), pot pujar i instal·lar ara el paquet de llenguatge. També podrà pujar i instal·lar paquets de llenguatge des de l´aplicació Sugar. Si vol saltar-se aquest pas, faci clic a Següent.',
	'LBL_LANG_BUTTON_COMMIT'			=> 'Instal·lar',
	'LBL_LANG_BUTTON_REMOVE'			=> 'Suprimir',
	'LBL_LANG_BUTTON_UNINSTALL'			=> 'Desinstal·lar',
	'LBL_LANG_BUTTON_UPLOAD'			=> 'Pujar',
	'LBL_LANG_NO_PACKS'					=> 'cap',
	'LBL_LANG_PACK_INSTALLED'			=> 'Els següents paquets de llenguatge han estat instal·lats:',
	'LBL_LANG_PACK_READY'				=> 'Els següents paquets de llenguatge són llestos per ser instal·lats:',
	'LBL_LANG_SUCCESS'					=> 'El paquet de llenguatge ha estat pujat amb èxit.',
	'LBL_LANG_TITLE'			   		=> 'Paquet de llenguatge',
    'LBL_LAUNCHING_SILENT_INSTALL'     => 'Instal·lació de Sugar ara. Això pot prendre fins a uns pocs minuts.',
	'LBL_LANG_UPLOAD'					=> 'Pujar un Paquet de Llenguatge',
	'LBL_LICENSE_ACCEPTANCE'			=> 'Aceptació de Llicència',
    'LBL_LICENSE_CHECKING'              => 'Fent comprobacions de compatibilitat del sistema.',
    'LBL_LICENSE_CHKENV_HEADER'         => 'Comprovant Entorn',
    'LBL_LICENSE_CHKDB_HEADER'          => 'Verificació de la DB, credencials FTS.',
    'LBL_LICENSE_CHECK_PASSED'          => 'El sistema ha pasat les proves de compatibilitat.',
    'LBL_LICENSE_REDIRECT'              => 'Redirigint a',
	'LBL_LICENSE_DIRECTIONS'			=> 'Si té informació sobre el seu llicència, si us plau introdueixi-la en els següents camps.',
	'LBL_LICENSE_DOWNLOAD_KEY'			=> 'Introdueixi Clau de Descàrrega',
	'LBL_LICENSE_EXPIRY'				=> 'Data de Caducitat',
	'LBL_LICENSE_I_ACCEPT'				=> 'Accepto',
	'LBL_LICENSE_NUM_USERS'				=> 'Número d´Usuaris',
	'LBL_LICENSE_PRINTABLE'				=> 'Vista Imprimible',
    'LBL_PRINT_SUMM'                    => 'Imprimir Resum',
	'LBL_LICENSE_TITLE_2'				=> 'Llicència de SugarCRM',
	'LBL_LICENSE_TITLE'					=> 'Informació de Llicència',
	'LBL_LICENSE_USERS'					=> 'Usuaris amb Llicència',

	'LBL_LOCALE_CURRENCY'				=> 'Configuració de Moneda',
	'LBL_LOCALE_CURR_DEFAULT'			=> 'Moneda predeterminada',
	'LBL_LOCALE_CURR_SYMBOL'			=> 'Símbol de la moneda',
	'LBL_LOCALE_CURR_ISO'				=> 'Còdig de Moneda (ISO 4217)',
	'LBL_LOCALE_CURR_1000S'				=> 'Separador de milers',
	'LBL_LOCALE_CURR_DECIMAL'			=> 'Separador Decimal',
	'LBL_LOCALE_CURR_EXAMPLE'			=> 'Exemple',
	'LBL_LOCALE_CURR_SIG_DIGITS'		=> 'Dígits Significaus',
	'LBL_LOCALE_DATEF'					=> 'Format de Data per Defecte',
	'LBL_LOCALE_DESC'					=> 'Les opcions de configuració regional especificades es reflectirà a nivell global en la instància de Sugar.',
	'LBL_LOCALE_EXPORT'					=> 'Joc de caràcters d´Importació/Exportació<br> <i>(Correu, .csv, vCard, PDF, importació de dades)</i >',
	'LBL_LOCALE_EXPORT_DELIMITER'		=> 'Delimitador per a Exportació (.csv)',
	'LBL_LOCALE_EXPORT_TITLE'			=> 'Configuració d´Importació/Exportació',
	'LBL_LOCALE_LANG'					=> 'Llenguatge per Defecte',
	'LBL_LOCALE_NAMEF'					=> 'Format de Nom per Defecte',
	'LBL_LOCALE_NAMEF_DESC'				=> 's Títol<br />f Nom<br />l Cognom',
	'LBL_LOCALE_NAME_FIRST'				=> 'David',
	'LBL_LOCALE_NAME_LAST'				=> 'Livingstone',
	'LBL_LOCALE_NAME_SALUTATION'		=> 'Dr.',
	'LBL_LOCALE_TIMEF'					=> 'Format d´Hora per Defecte',
	'LBL_LOCALE_TITLE'					=> 'Configuració Regional',
    'LBL_CUSTOMIZE_LOCALE'              => 'Personalizar Configuració Regional',
	'LBL_LOCALE_UI'						=> 'Interfície d´Usuari',

	'LBL_ML_ACTION'						=> 'Acció',
	'LBL_ML_DESCRIPTION'				=> 'Descripció',
	'LBL_ML_INSTALLED'					=> 'Data d\'instalació',
	'LBL_ML_NAME'						=> 'Nom',
	'LBL_ML_PUBLISHED'					=> 'Data de Publicació',
	'LBL_ML_TYPE'						=> 'Tipus',
	'LBL_ML_UNINSTALLABLE'				=> 'Desinstalable',
	'LBL_ML_VERSION'					=> 'Versió',
	'LBL_MSSQL'							=> 'SQL Server',
	'LBL_MSSQL_SQLSRV'				    => 'SQL Server (driver de servidor SQL de Microsoft per a PHP)',
	'LBL_MYSQL'							=> 'MySQL',
    'LBL_MYSQLI'						=> 'MySQL (extensió mysqli)',
	'LBL_IBM_DB2'						=> 'IBM DB2',
	'LBL_NEXT'							=> 'Següent',
	'LBL_NO'							=> 'No',
    'LBL_ORACLE'						=> 'Oracle',
	'LBL_PERFORM_ADMIN_PASSWORD'		=> 'Establint la clau de pas de l´admin del lloc',
	'LBL_PERFORM_AUDIT_TABLE'			=> 'taula d´auditoria /',
	'LBL_PERFORM_CONFIG_PHP'			=> 'Creant l´arxiu de configuració de Sugar',
	'LBL_PERFORM_CREATE_DB_1'			=> '<b>Creant la base de dades</b>',
	'LBL_PERFORM_CREATE_DB_2'			=> '<b>a</b>',
	'LBL_PERFORM_CREATE_DB_USER'		=> 'Creant l´usuari i la clau de pas de Base de Dades...',
	'LBL_PERFORM_CREATE_DEFAULT'		=> 'Creant dades de Sugar predeterminats',
	'LBL_PERFORM_CREATE_LOCALHOST'		=> 'Creant l´usuari i la contrasenya de Base de Dades per a localhost...',
	'LBL_PERFORM_CREATE_RELATIONSHIPS'	=> 'Creant taules de relacions de Sugar',
	'LBL_PERFORM_CREATING'				=> 'creant /',
	'LBL_PERFORM_DEFAULT_REPORTS'		=> 'Creant informes predefinits',
	'LBL_PERFORM_DEFAULT_SCHEDULER'		=> 'Creant treballs del planificador per defecte',
	'LBL_PERFORM_DEFAULT_SETTINGS'		=> 'Inserint configuració per defecte',
	'LBL_PERFORM_DEFAULT_USERS'			=> 'Creant usuaris per defecte',
	'LBL_PERFORM_DEMO_DATA'				=> 'Inserint a les taules de base de dades dades de demostració (això pot portar una estona)',
	'LBL_PERFORM_DONE'					=> 'fet<br>',
	'LBL_PERFORM_DROPPING'				=> 'esborrant /',
	'LBL_PERFORM_FINISH'				=> 'Finalitzar',
	'LBL_PERFORM_LICENSE_SETTINGS'		=> 'Actualizant informació de llicència',
	'LBL_PERFORM_OUTRO_1'				=> 'La instal·lació de Sugar',
	'LBL_PERFORM_OUTRO_2'				=> 'ha estat completada.',
	'LBL_PERFORM_OUTRO_3'				=> 'Temps total:',
	'LBL_PERFORM_OUTRO_4'				=> 'segons.',
	'LBL_PERFORM_OUTRO_5'				=> 'Memòria utilitza aproximadament:',
	'LBL_PERFORM_OUTRO_6'				=> 'bytes.',
	'LBL_PERFORM_OUTRO_7'				=> 'El seu sistema ha estat instal·lat i configurat per al seu ús.',
	'LBL_PERFORM_REL_META'				=> 'metadades de relacions ...',
	'LBL_PERFORM_SUCCESS'				=> '¡Èxit!',
	'LBL_PERFORM_TABLES'				=> 'Creant les tables d´aplicació de Sugar, taules|posts d´auditoria, i metadades de relacions',
	'LBL_PERFORM_TITLE'					=> 'Realitzar Instal·lació',
	'LBL_PRINT'							=> 'Imprimir',
	'LBL_REG_CONF_1'					=> 'Si us plau, completi el següent breu formulari per rebre anuncis sobre el producte, notícies sobre formació, ofertes especials i invitacions especials a esdeveniments de SugarCRM. No venem, lloguem, compartim, o distribuïm de cap altra manera a terceres parts la informació aquí recollida.',
	'LBL_REG_CONF_2'					=> 'El seu nom i direcció de correu electrònic són els únics camps requerits per al registre. La resta de camps són opcionals, però de molt valor. No venem, lloguem, compartim, o en distribuïm en manera algun la informació aquí recollida a tercers.',
	'LBL_REG_CONF_3'					=> 'Gràcies per registrar-se. Faci clic al botó Finalitzar per iniciar una sessió en SugarCRM. Necessitarà iniciar la sessió per primera vegada utilitzant el nom d´usuari "admin" i la contrasenya que va introduir al pas 2.',
	'LBL_REG_TITLE'						=> 'Registre',
    'LBL_REG_NO_THANKS'                 => 'No Gràcies',
    'LBL_REG_SKIP_THIS_STEP'            => 'Saltar aquest Pas',
	'LBL_REQUIRED'						=> '* Camp requerit',

    'LBL_SITECFG_ADMIN_Name'            => 'Nom del Administrador de la Aplicació Sugar',
	'LBL_SITECFG_ADMIN_PASS_2'			=> 'Introdueixi de nou la Contrasenya de l´Usuari Admin de Sugar',
	'LBL_SITECFG_ADMIN_PASS_WARN'		=> 'Precaució: Això substituirà la contrasenya d´admin de qualsevol instal·lació prèvia.',
	'LBL_SITECFG_ADMIN_PASS'			=> 'Clau de pas del Usuari Admin de Sugar',
	'LBL_SITECFG_APP_ID'				=> 'ID d´Aplicació',
	'LBL_SITECFG_CUSTOM_ID_DIRECTIONS'	=> 'Si està seleccionat, ha d´introduir un ID d´aplicació per substituir a l´ID autogenerat. L´ID assegura que les sessions d´una instància de Sugar no són utilitzades per altres instàncies. Si té un clúster|grup de sectors d´instal·lacions Sugar, totes han de compartir el mateix ID d´aplicació.',
	'LBL_SITECFG_CUSTOM_ID'				=> 'Proveir el Seu Propi ID d´Aplicació',
	'LBL_SITECFG_CUSTOM_LOG_DIRECTIONS'	=> 'Si està seleccionat, ha d´especificar un directori de traces per substituir al directori per defecte de traces de Sugar. Independentment d´on resideixi l´arxiu de traces, l´accés al mateix a través del navegador serà restringit mitjançant una redirecció definida en un arxiu .htaccess.',
	'LBL_SITECFG_CUSTOM_LOG'			=> 'Usar un Directori Personalitzat de Traces',
	'LBL_SITECFG_CUSTOM_SESSION_DIRECTIONS'	=> 'Si està seleccionat, ha d´especificar una carpeta segura per emmagatzemar la informació de les sessions de Sugar. Això es fa per evitar que les dades de la sessió siguin vulnerables en servidors compartits.',
	'LBL_SITECFG_CUSTOM_SESSION'		=> 'Utilitzar un Directori Personalitzat de Sessions per a Sugar',
	'LBL_SITECFG_DIRECTIONS'			=> 'Si us plau, introdueixi la informació de configuració del seu lloc a continuació. Si no està segur del significat dels camps, li suggerim que utilitzi els valors per defecte.',
	'LBL_SITECFG_FIX_ERRORS'			=> '<b>Si us plau, corregeixi els següents errors abans de continuar:</b>',
	'LBL_SITECFG_LOG_DIR'				=> 'Directori de Traces',
	'LBL_SITECFG_SESSION_PATH'			=> 'Ruta al Directori de Sessions<br>(te que ser escribible)',
	'LBL_SITECFG_SITE_SECURITY'			=> 'Seleccioni Opcions de Seguretat',
	'LBL_SITECFG_SUGAR_UP_DIRECTIONS'	=> 'Si està seleccionat, el sistema comprovarà periòdicament si hi ha disponibles versions actualitzades de l´aplicació.',
	'LBL_SITECFG_SUGAR_UP'				=> 'Comprovar Automáticament Actualizacions?',
	'LBL_SITECFG_SUGAR_UPDATES'			=> 'Configuració d´Actualizacions de Sugar',
	'LBL_SITECFG_TITLE'					=> 'Configuració del Lloc',
    'LBL_SITECFG_TITLE2'                => 'Identifiqui la seva Instància de Sugar',
    'LBL_SITECFG_SECURITY_TITLE'        => 'Seguretat del Lloc',
	'LBL_SITECFG_URL'					=> 'URL de la Instància de Sugar',
	'LBL_SITECFG_USE_DEFAULTS'			=> 'Usar valors per defecte?',
	'LBL_SITECFG_ANONSTATS'             => 'Enviar Estadístiques d´Ús Anònimes?',
	'LBL_SITECFG_ANONSTATS_DIRECTIONS'  => 'Si està seleccionat, Sugar enviarà estadístiques <b>anònimes</b> sobre la seva instal·lació a SugarCRM Inc. cada vegada que el seu sistema comprovi l´existència de noves versions. Aquesta informació ens ajudarà a entendre millor com l´aplicació és usada i guiar així les millores al producte.',
    'LBL_SITECFG_URL_MSG'               => 'Introdueixi l´URL que serà utilitzat per accedir a la instància de Sugar després de la instal·lació. Aquest URL també s´usarà com a base per als URLs de les pàgines de l´aplicació Sugar. L´URL hauria d´incloure el nom de servidor web o màquina, o el seu direcció IP.',
    'LBL_SITECFG_SYS_NAME_MSG'          => 'Introdueixi un nom per al seu sistema. Aquest nom es mostrarà a la barra de títol del navegador quan els usuaris visitin l´aplicació Sugar.',
    'LBL_SITECFG_PASSWORD_MSG'          => 'Després de la instal·lació, necessitarà usar l´usuari administrador de Sugar (nom d´usuari = admin) per iniciar la sessió en la instància de Sugar. Introdueixi una contrasenya per a aquest usuari administrador. Aquesta contrasenya pot ser canviada després de l´inici de sessió inicial.',
    'LBL_SITECFG_COLLATION_MSG'         => 'Seleccioneu confrontació (classificació) pel vostre sistema. Aquesta configuració crea les taules amb el llenguatge específic que utilitzi. En cas que el seu llenguatge no requereix configuració especial, feu servir el valor per defecte.',
    'LBL_SPRITE_SUPPORT'                => 'Suport de Sprite',
	'LBL_SYSTEM_CREDS'                  => 'Credencials del Sistema',
    'LBL_SYSTEM_ENV'                    => 'Entorn del Sistema',
	'LBL_START'							=> 'Començar',
    'LBL_SHOW_PASS'                     => 'Mostrar Contrasenyes',
    'LBL_HIDE_PASS'                     => 'Amagar Contrasenyes',
    'LBL_HIDDEN'                        => '<i>(ocult)</i>',
//	'LBL_NO_THANKS'						=> 'Continue to installer',
	'LBL_CHOOSE_LANG'					=> '<b>Triï el seu idioma</b>',
	'LBL_STEP'							=> 'Pas',
	'LBL_TITLE_WELCOME'					=> 'Benvingut a SugarCRM',
	'LBL_WELCOME_1'						=> 'Aquest instal·lador crea les taules de base de dades de SugarCRM i estableix les variables de configuració necessàries per iniciar. El procés complet hauria de tardar uns deu minuts.',
    //welcome page variables
    'LBL_TITLE_ARE_YOU_READY'            => 'Està llest per procedir amb la instal·lació?',
    'REQUIRED_SYS_COMP' => 'Components del Sistema Requerits',
    'REQUIRED_SYS_COMP_MSG' =>
                    'Abans de començar, si us plau asseguri´s que té les versions suportades dels següents components<br />                     del sistema:<br><br />                      <ul><br />                      <li> Base de dades/Sistema de Gestió de Base de Dades (Exemples: MySQL, SQL Server, Oracle)</li><br />                      <li> Servidor Web (Apache, IIS)</li><br />                      </ul><br />                      Consulti la Matriu de Compatibilitat en les Notes de Llançament per a<br />                      els components del sistema compatibles per a la versió de Sugar que està instal·lant.<br>',
    'REQUIRED_SYS_CHK' => 'Comprobació Inicial del Sistema',
    'REQUIRED_SYS_CHK_MSG' =>
                    'Quan iniciï el procés d´instal·lació, es realitzarà una comprovació del sistema al servidor web en el qual els arxius de Sugar estan localitzats per a<br />                      assegurar que el sistema està degudament configurat i té tots els components necessaris<br />                      per completar la instal·lació amb èxit. <br><br><br />                      El sistema comprova el següent:<br><br />                      <ul><br />                      <li>Que la <b>versió de PHP</b> &#8211; sigui compatible <br />                      amb la aplicació</li><br />                                        <li><b>Les Variables de Sessió</b> &#8211; tenen que funcionar adecuadament</li><br />                                            <li> <b>Las Cadenes MB</b> &#8211; tenen que estar instal·lades i habilitades en php.ini</li><br /><br />                      <li> <b>El Suport de Base de Dades</b> &#8211; te que existir per MySQL, SQL<br />                      Server u Oracle</li><br /><br />                      <li> <b>Config.php</b> &#8211; te que existir i te que tenir els permisos<br />                                  adequats perquè sigui escribible</li><br />					  <li>Els següents arxius de Sugar tenen que ser escribibles:<ul><li><b>/custom</li><br /><li>/cache</li><br /><li>/modules</b></li></ul></li></ul><br />                                  Si la comprobació falla, no podrá continuar amb la instal·lació. Un missatge d´error es mostrarà, explicant-lo per què el seu sistema<br />                                   no ha passat les comprovacions.<br />                                   Després de realitzar els canvis necessaris, pot realitzar les comprovacions<br />                                   del sistema de nou per continuar amb la instal·lació. <br>',
    'REQUIRED_INSTALLTYPE' => 'Instalació Típica o Personalitzada',
    'REQUIRED_INSTALLTYPE_MSG' =>
                    "Després de la comprovació del sistema, pot triar entre la<br />                      instal·lació Típica o la Personalizada.<br><br><br />                      Tant per a la instal·lació < b>Típica</b > com per a la < b>Personalizada</b >, necessitarà saber el següent:<br><br />                      <ul><br />                      <li> <b>Tipus de base de dades</b > que emmagatzemarà les dades de Sugar < ul><li>Tipus de base de dades compatibles: <br />                      MySQL, MS SQL Server, Oracle.<br><br></li></ul></li><br />                      <li> <b>Nom del servidor web</b> o màquina (equipo) en el que la base de dades serà ubicada<br />                      <ul><li>Això pot ser < i>localhost</i > si la base de dades està en el seu equip local o en al mateix servidor web o màquina que els seus arxius Sugar.<br><br></li></ul></li><br />                      <li><b>Nom de la base de dades</b > que desitja utilitzar per emmagatzemar les dades de Sugar</li><br />                        <ul><br />                          <li> Pot ser que ja disposi d´una base de dades que vulgui utilitzar. Si proporciona<br />                               el nom d´una base de dades existent, les taules de la base de dades seran eliminades<br />                               durant la instal·lació, quan es defineixi l´esquema per a la base de dades de Sugar.</li><br />                          <li> Si no té una base de dades, el nom que proporcioni s´utilitzarà per a la nova<br />                               base de dades que serà creada per a l´instacia durant la instal·lació.<br><br></li><br />                        </ul><br />                      <li><b>Nom i contrasenya de l´usuari administrador de Base de dades</b > < ul><li>El administrador de base de dades hauria de ser capaç de crear taules i usuaris i d´escriure en base de dades.</li><li>Pot ser que necessiti<br />                      contactar amb el seu administrador de base de dades perquè li proporcioni aquesta informació si la base de dades no està<br />                      ubicada en el seu equip local i/o si vostè no és l´administrador de base de dades.<br><br></ul></li></li><br />                      <li> <b>Nom y contrasenya del usuari de base de dades de Sugar</b><br />                      </li><br />                        <ul><br />                          <li> L´usuari pot ser l´administrador de base de dades, o pot proporcionar el nom de<br />                          un altre usuari de base de dades existent. </li><br />                          <li> Si vol crear un nou usuari de base de dades per a aquest propòsit, podrà<br />                          proporcionar un nou nom d´usuari i contrasenya durant el procés d´instal·lació,<br />                          i l´usuari serà creat durant la instal·lació. </li><br />                        </ul></ul><p><br /><br />                      Per la instal·lació <b>Personalitzada</b>, també necessitarà coneixer el següent:<br><br />                      <ul><br />                      <li> <b>L´URL que s´utilitzarà per accedir a la instància de Sugar</b > després de la seva instal·lació.<br />                      Aquest URL hauria d´incloure el nom del servidor web o de màquina, o la seva direcció IP.<br><br></li><br />                                  <li> [Opcional] <b>Ruta al directori de sesions</b > si desitja utilitzar un directori<br />                                  de sessions personalitzat per a la informació de Sugar per tal d´evitar que les dades de les sessions<br />                                  siguin vulnerables en servidors compartits.<br><br></li><br />                                  <li> [Opcional] <b>Ruta a un directori personalitzat de traces</b > si desitja substituir el directori per defecte per les traces de Sugar.<br><br></li><br />                                  <li> [Opcional] <b>ID d´Aplicació</b> si desitja substituir l´ID autogenerat<br />                                  que assegura que les sessions d´una instància de Sugar no siguin utilitzades per altres instàncies.<br><br></li><br />                                  <li><b>Joc de Caracteres</b > més comunament usat en la seva configuració regional.<br><br></li></ul ><br />                                  Per a informació més detallada, si us plau consulti la Guia d´Instal·lació.",
    'LBL_WELCOME_PLEASE_READ_BELOW' => 'Si us plau, llegeixi la següent informació important abans de procedir amb la instal·lació. La informació li ajudarà a determinar si està o no preparat en aquests moments per instal·lar l´aplicació.',


	'LBL_WELCOME_2'						=> 'Per consultar la documentació de la instal·lació, visiteu el <a href="http://www.sugarcrm.com/crm/installation" target="_blank">wiki de Sugar</a>.  <BR><BR>Per posar-vos en contacte amb un enginyer de suport de SugarCRM per a la instal·lació, accediu al <a target="_blank" href="http://support.sugarcrm.com">Portal de suport de SugarCRM</a> i presenteu un cas de suport.',
	'LBL_WELCOME_CHOOSE_LANGUAGE'		=> '<b>Triï el seu idioma</b>',
	'LBL_WELCOME_SETUP_WIZARD'			=> 'Assistent de Instal·lació',
	'LBL_WELCOME_TITLE_WELCOME'			=> 'Benvingut a SugarCRM',
	'LBL_WELCOME_TITLE'					=> 'Assistent de Instal·lació de SugarCRM',
	'LBL_WIZARD_TITLE'					=> 'Assistent d\'instal·lació de Sugar: ',
	'LBL_YES'							=> 'Si',
    'LBL_YES_MULTI'                     => 'Sí - Multibyte',
	// OOTB Scheduler Job Names:
	'LBL_OOTB_WORKFLOW'		=> 'Processar Tasques de Workflow',
	'LBL_OOTB_REPORTS'		=> 'Executar Tasques Programades de Generació d´Informes',
	'LBL_OOTB_IE'			=> 'Comprovar Safates d´Entrada',
	'LBL_OOTB_BOUNCE'		=> 'Executar Procés Nocturn de Correus de Campanya Rebotats',
    'LBL_OOTB_CAMPAIGN'		=> 'Executar Procés Nocturn de Campanyes de Correu Massiu',
	'LBL_OOTB_PRUNE'		=> 'Truncar Base de dades al Inici del Mes',
    'LBL_OOTB_TRACKER'		=> 'Netejar la Taula de Històrial d´Usuari a primer de Mes',
    'LBL_OOTB_SEND_EMAIL_REMINDERS' => 'Executa les notificacions dels recordatoris per correu electrònic',
    'LBL_UPDATE_TRACKER_SESSIONS' => 'Actualitzar taula tracker_sessions',
    'LBL_OOTB_CLEANUP_QUEUE' => 'Netejar cua de treball',


    'LBL_FTS_TABLE_TITLE'     => 'Proporcionar text complet de la configuració de cerca',
    'LBL_FTS_HOST'     => 'Amfitrió',
    'LBL_FTS_PORT'     => 'Port',
    'LBL_FTS_TYPE'     => 'FTS Tipus',
    'LBL_FTS_HELP'      => 'Per activar la cerca de text complet, seleccioneu el tipus de motor de cerca i escriviu el host i el port on s&#39;allotja el motor de cerca. Sugar inclou una funció de suport per al motor elasticsearch.',
    'LBL_FTS_REQUIRED'    => 'Elastic Search es requerit.',
    'LBL_FTS_CONN_ERROR'    => 'No es pot connectar al servidor de recerca de text, si us plau, comproveu la configuració.',
    'LBL_FTS_NO_VERSION_AVAILABLE'    => 'No hi ha cap servidor de cerca de text complet disponible, comproveu la configuració.',
    'LBL_FTS_UNSUPPORTED_VERSION'    => 'S\'ha detectat una versió incompatible de cerca Elastic. Utilitzeu les següents versions: %s',

    'LBL_PATCHES_TITLE'     => 'Instal·lar Últims Pegats',
    'LBL_MODULE_TITLE'      => 'Instal·lar els paquets d\'idioma',
    'LBL_PATCH_1'           => 'Si desitja saltar aquest pas, faci clic a Següent.',
    'LBL_PATCH_TITLE'       => 'Pegat del Sistema',
    'LBL_PATCH_READY'       => 'Els següents pegats són llestos per ser instal·lats:',
	'LBL_SESSION_ERR_DESCRIPTION'		=> "SugarCRM depèn de les sessions de PHP per emmagatzemar informació important mentre que està connectat al seu servidor web. La seva instal·lació de PHP no té la informació de Sessió correctament configurada.  						<br><br>Un error de configuració bastant comun és que la directiva <b>&#39;session.save_path&#39;</b > no apunti a un directori vàlid.  <br>																<br> Si us plau, corregeixi seu <a target=_new href=\"http://us2.php.net/manual/en/ref.session.php\">configuración PHP</a> a l&#39;arxiu php.ini localitzat on s&#39;indica a continuació.",
	'LBL_SESSION_ERR_TITLE'				=> 'Error de Configuració de Sesions PHP',
	'LBL_SYSTEM_NAME'=>'Nom del Sistema',
    'LBL_COLLATION' => 'Configuració d&#39;intercalació',
	'LBL_REQUIRED_SYSTEM_NAME'=>'Introdueixi un Nom de Sistema per a la instància de Sugar.',
	'LBL_PATCH_UPLOAD' => 'Seleccioni un arxiu amb un pegat del seu equip local',
	'LBL_BACKWARD_COMPATIBILITY_ON' => 'La manera de compatibilitat cap a enrere de PHP està habilitada. Estableixi zend.ze1_compatibility_mode a Off abans de continuar',

    'meeting_notification_email' => array(
        'name' => 'Correus electrònics de notificació de reunions',
        'subject' => 'Reunió de SugarCRM - $event_name ',
        'description' => 'Aquesta plantilla s\'utilitza quan el sistema envia notificacions de reunió a un usuari.',
        'body' => '<div>
	<p>A: $assigned_user</p>

	<p>$assigned_by_user us ha convidat a una Reunió</p>

	<p>Assumpte: $event_name<br/>
	Data d\'inici: $start_date<br/>
	Data de finalització: $end_date</p>

	<p>Descripció: $description</p>

	<p>Accepta aquesta reunió:<br/>
	<<a href="$accept_link">$accept_link</a>></p>
	<p>Accepta provisionalment aquesta reunió:<br/>
	<<a href="$tentative_link">$tentative_link</a>></p>
	<p>Rebutja aquesta reunió:<br/>
	<<a href="$decline_link">$decline_link</a>></p>
</div>',
        'txt_body' =>
            'A: $assigned_user

$assigned_by_user us ha convidat a una Reunió

Assumpte: $event_name
Data d\'inici: $start_date
Data de finalització: $end_date

Descripció: $description

Accepta aquesta reunió
<$accept_link>

Accepta provisionalment aquesta reunió
<$tentative_link>

Rebutja aquesta reunió
<$decline_link>',
    ),

    'call_notification_email' => array(
        'name' => 'Correus electrònics de notificació de trucades',
        'subject' => 'Trucada de SugarCRM - $event_name ',
        'description' => 'Aquesta plantilla s\'utilitza quan el sistema envia notificacions de trucades a un usuari.',
        'body' => '<div>
	<p>A: $assigned_user</p>

	<p>$assigned_by_user us ha convidat a una Trucada</p>

	<p>Assumpte: $event_name<br/>
	Data d\'inici: $start_date<br/>
	Duració: $hoursh, $minutesm</p>

	<p>Descripció: $description</p>

	<p>Accepta aquesta trucada:<br/>
	<<a href="$accept_link">$accept_link</a>></p>
	<p>Accepta provisionalment aquesta trucada:<br/>
	<<a href="$tentative_link">$tentative_link</a>></p>
	<p>Rebutja aquesta trucada:<br/>
	<<a href="$decline_link">$decline_link</a>></p>
</div>',
        'txt_body' =>
            'A: $assigned_user

$assigned_by_user us ha convidat a una Reunió

Assumpte: $event_name
Data d\'inici: $start_date
Duració: $hoursh, $minutesm

Descripció: $description

Accepta aquesta trucada
<$accept_link>

Accepta provisionalment aquesta trucada
<$tentative_link>

Rebutja aquesta trucada
<$decline_link>',
    ),

    'assigned_notification_email' => array(
        'name' => 'Correus electrònics de notificació d\'assignacions',
        'subject' => 'SugarCRM - $module_name assignat ',
        'description' => 'Aquesta plantilla s\'utilitza quan el sistema envia notificacions d\'assignació de tasques a un usuari.',
        'body' => '<div>
<p>$assigned_by_user ha assignat un&nbsp;$module_name a&nbsp;$assigned_user.</p>

<p>Podeu revisar aquest&nbsp;$module_name en:<br/>
	<<a href="$module_link">$module_link</a>></p>
</div>',
        'txt_body' =>
            '$assigned_by_user ha assignat un $module_name a $assigned_user.

Podeu revisar aquest $module_name en:
<$module_link>',
    ),

    'scheduled_report_email' => array(
        'name' => 'Correus electrònics d\'informes programats',
        'subject' => 'Informe programat: $report_name a les $report_time',
        'description' => 'Aquesta plantilla s\'utilitza quan el sistema envia notificacions d\'un informe programat a un usuari.',
        'body' => '<div>
<p>Hola $assigned_user:</p>
<p>S\'adjunta un informe generat automàticament que s\'ha programat per a vós.</p>
<p>Nom de l\'informe: $report_name</p>
<p>Data i hora d\'execució de l\'informe: $report_time</p>
</div>',
        'txt_body' =>
            'Hola $assigned_user:

S\'adjunta un informe generat automàticament que s\'ha programat per a vós.

Nom de l\'informe: $report_name

Data i hora d\'execució de l\'informe: $report_time',
    ),

    'comment_log_mention_email' => [
        'name' => 'Correu electrònic de notificació del registre de comentaris del sistema',
        'subject' => 'SugarCRM - $initiator_full_name us ha mencionat en un $singular_module_name',
        'description' => 'Aquesta plantilla s\'utilitza per enviar notificacions per correu electrònic als usuaris que s\'han etiquetat a la secció del registre de comentaris.',
        'body' =>
            '<div>
                <p>Us han mencionat al registre de comentaris del registre següent:  <a href="$record_url">$record_name</a></p>
                <p>Inicieu la vostra sessió a Sugar per visualitzar el comentari.</p>
            </div>',
        'txt_body' =>
'Us han mencionat al registre de comentaris del registre següent: $record_name
            Inicieu la vostra sessió a Sugar per visualitzar el comentari.',
    ],

    'advanced_password_new_account_email' => array(
        'subject' => 'Informació nova del compte',
        'description' => 'Aquesta plantilla s&#39;utilitza quan l&#39;administrador del sistema envia una nova contrasenya a un usuari.',
        'body' => '<div><table border=\"0\" cellspacing=\"0\" cellpadding=\"0\" width="550" align=\"\&quot;\&quot;center\&quot;\&quot;\"><tbody><tr><td colspan=\"2\"><p>Aquí tens el teu nom d&#39;usuari i contrasenya temporal:</p><p>Usuari : $contact_user_user_name </p><p>Contrasenya : $contact_user_user_hash </p><br><p><a href="$config_site_url">$config_site_url</a></p><br><p>Després d&#39;iniciar sessió amb la contrasenya anterior, vostè pot ser requerit per restablir la contrasenya a un de la seva pròpia elecció.</p>   </td>         </tr><tr><td colspan=\"2\"></td>         </tr> </tbody></table> </div>',
        'txt_body' =>
'Aquí tens el teu nom d&#39;usuari i contrasenya temporal:
Usuari : $contact_user_user_name
Contrasenya : $contact_user_user_hash

$config_site_url

Després d&#39;iniciar sessió amb la contrasenya anterior, vostè pot ser requerit per restablir la contrasenya a un de la seva pròpia elecció.',
        'name' => 'Correu electrònic de generació de contrasenya pel sistema',
        ),
    'advanced_password_forgot_password_email' => array(
        'subject' => 'Restablir contrasenya del seu compte',
        'description' => "Aquesta plantilla s&#39;utilitza per enviar un usuari faci clic a un enllaç per restablir la contrasenya del compte de l&#39;usuari.",
        'body' => '<div><table border=\"0\" cellspacing=\"0\" cellpadding=\"0\" width="550" align=\"\&quot;\&quot;center\&quot;\&quot;\"><tbody><tr><td colspan=\"2\"><p>Que recentment ha sol·licitat a $contact_user_pwd_last_changed per poder restablir la contrasenya del compte. </p><p>Feu clic a l&#39;enllaç de sota per restablir la contrasenya:</p><p> <a href="$contact_user_link_guid">$contact_user_link_guid</a> </p> </td> </tr><tr><td colspan=\"2\"></td> </tr> </tbody></table> </div>',
        'txt_body' =>
'Que recentment ha sol·licitat a $contact_user_pwd_last_changed per poder restablir la contrasenya del compte.

Feu clic a l&#39;enllaç de sota per restablir la contrasenya:

$contact_user_link_guid',
        'name' => 'Email recuperació de contrasenya',
        ),

'portal_forgot_password_email_link' => [
    'name' => 'Correu electrònic de recuperació de contrasenya del Portal',
    'subject' => 'Restabliu la contrasenya del vostre compte',
    'description' => 'Aquesta plantilla s\'utilitza per enviar un enllaç a un usuari perquè faci clic i restableixi la contrasenya del compte d\'usuari del Portal.',
    'body' => '<div><table border=\"0\" cellspacing=\"0\" cellpadding=\"0\" width="550" align=\"\&quot;\&quot;center\&quot;\&quot;\"><tbody><tr><td colspan=\"2\"><p>Recentment heu sol·licitat restablir la contrasenya del vostre compte. </p><p>Feu clic al següent enllaç per restablir la contrasenya:</p><p> <a href="$portal_user_link_guid">$portal_user_link_guid</a> </p> </td> </tr><tr><td colspan=\"2\"></td> </tr> </tbody></table> </div>',
    'txt_body' =>
'
    Recentment heu sol·licitat restablir la contrasenya del vostre compte.

    Feu clic al següent enllaç per restablir la contrasenya:

    $portal_user_link_guid',
],

    'portal_password_reset_confirmation_email' => [
        'name' => 'Correu electrònic de confirmació de restabliment de la contrasenya del Portal',
        'subject' => 'S\'ha restablit la contrasenya del vostre compte',
        'description' => 'Aquesta plantilla s\'utilitzarà per enviar una confirmació a un usuari del Portal per notificar-li que s\'ha restablit la contrasenya del seu compte.',
        'body' => '<div><table border=\"0\" cellspacing=\"0\" cellpadding=\"0\" width="550" align=\"\&quot;\&quot;center\&quot;\&quot;\"><tbody><tr><td colspan=\"2\"><p>Aquest correu electrònic és per confirmar que s\'ha restablit la contrasenya del vostre compte del Portal. </p><p>Utilitzeu el següent enllaç per iniciar sessió al Portal:</p><p> <a href="$portal_login_url">$portal_login_url</a> </p> </td> </tr><tr><td colspan=\"2\"></td> </tr> </tbody></table> </div>',
        'txt_body' =>
            '
    Aquest correu electrònic és per confirmar que s\'ha restablit la contrasenya del vostre compte del Portal.

    Utilitzeu el següent enllaç per iniciar sessió al Portal:

    $portal_login_url',
    ],
);
