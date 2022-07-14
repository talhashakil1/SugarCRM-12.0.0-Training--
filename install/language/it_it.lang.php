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
	'LBL_BASIC_SEARCH'					=> 'Ricerca di Base',
	'LBL_ADVANCED_SEARCH'				=> 'Ricerca Avanzata',
	'LBL_BASIC_TYPE'					=> 'Tipo Semplice',
	'LBL_ADVANCED_TYPE'					=> 'Tipo Avanzato',
	'LBL_SYSOPTS_1'						=> 'Seleziona dalle seguenti opzioni di configurazione del sistema.',
    'LBL_SYSOPTS_2'                     => 'Che tipo di database verrà utilizzato per l´istanza di Sugar che si sta per installare?',
	'LBL_SYSOPTS_CONFIG'				=> 'Configurazione Sistema',
	'LBL_SYSOPTS_DB_TYPE'				=> '',
	'LBL_SYSOPTS_DB'					=> 'Specificare Tipo Database',
    'LBL_SYSOPTS_DB_TITLE'              => 'Tipo Database',
	'LBL_SYSOPTS_ERRS_TITLE'			=> 'Si prega di correggere i seguenti errori prima di procedere:',
	'LBL_MAKE_DIRECTORY_WRITABLE'      => 'Si prega di rendere la seguente directory scrivibile:',


    'ERR_DB_LOGIN_FAILURE_IBM_DB2'		=> 'L´host, il nome utente e/o la password del database forniti non sono validi e non si può stabilire la connessione al database. Si prega di inserire un host, un nome utente e una password validi.',
    'ERR_DB_IBM_DB2_CONNECT'			=> 'L´host, il nome utente e/o la password del database forniti non sono validi e non si può stabilire la connessione al database. Si prega di inserire un host, un nome utente e una password validi.',
    'ERR_DB_IBM_DB2_VERSION'			=> 'La versione del DB2 (%s) non è supportata da Sugar. E´ necessario installare una versione che sia compatibile con l´applicazione Sugar. Si prega di consultare la matrice di compatibilità nelle note di rilascio per prendere visione delle versioni DB2 supportate.',

	'LBL_SYSOPTS_DB_DIRECTIONS'			=> 'Se selezioni Oracle, devi avere un client Oracle installato e configurato.',
	'ERR_DB_LOGIN_FAILURE_OCI8'			=> 'L´host, il nome utente e/o la password del database forniti non sono validi e non si può stabilire la connessione al database. Si prega di inserire un host, un nome utente e una password validi.',
	'ERR_DB_OCI8_CONNECT'				=> 'L´host, il nome utente e/o la password del database forniti non sono validi e non si può stabilire la connessione al database. Si prega di inserire un host, un nome utente e una password validi.',
	'ERR_DB_OCI8_VERSION'				=> 'La versione di Oracle utilizzata non è supportata da Sugar. E´ necessario installare una versione che sia compatibile con l´applicazione di Sugar. Per conoscere le versioni di Oracle supportate, si prega di consultare la Matrice di Compatibilità nelle Release Notes.',
    'LBL_DBCONFIG_ORACLE'               => 'Si prega di fornire un nome al database. Questo sarà la tabella di default che sarà assegnato al tuo utente ((SID from tnsnames.ora).',
	// seed Ent Reports
	'LBL_Q'								=> 'Query Opportunità',
	'LBL_Q1_DESC'						=> 'Opportunità per Tipo',
	'LBL_Q2_DESC'						=> 'Opportunità per Azienda',
	'LBL_R1'							=> 'Report della Pipeline di Vendita di 6 mesi',
	'LBL_R1_DESC'						=> 'Opportunità per i prossimi sei mesi suddivisi per mese e per tipo',
	'LBL_OPP'							=> 'Data Set Opportunità',
	'LBL_OPP1_DESC'						=> 'Qui è possibile modifcare il layout della query personalizzata',
	'LBL_OPP2_DESC'						=> 'Questa query verrà salvata sotto la prima query nel report',
    'ERR_DB_VERSION_FAILURE'			=> 'Impossibile controllare la versione del database.',

	'DEFAULT_CHARSET'					=> 'UTF-8',
    'ERR_ADMIN_USER_NAME_BLANK'         => 'Si prega di fornire un nome utente all´utente amministratore di Sugar.',
	'ERR_ADMIN_PASS_BLANK'				=> 'Si prega di fornire una password all´utente amministratore di Sugar.',

    'ERR_CHECKSYS'                      => 'Sono stati rilevati degli errori durante il controllo di compatibilità. Per fare in modo che l´installazione di SugarCRM funzioni correttamente, si prega di prendere le misure adeguate per risolvere i problemi elencati sotto e premere il tasto "ricontrolla" o riprovare nuovamente l´installazione.',
    'ERR_CHECKSYS_CALL_TIME'            => 'Allow Call Time Pass Reference è attiva "(questa dovrebbe essere impostata su Off in php.ini)',

	'ERR_CHECKSYS_CURL'					=> 'Non trovato: Schedulatore Sugar verrà eseguito con funzionalità limitate. il servizio di archiviazione email non verrà eseguito.',
    'ERR_CHECKSYS_IMAP'					=> 'Non trovato: le email in arrivo e le campagne (Email) richiedono librerie IMAP. Nessuna delle due funzionerà.',
	'ERR_CHECKSYS_MSSQL_MQGPC'			=> 'Magic Quotes GPC non può essere impostato su "On" quando si usa MS SQL Server.',
	'ERR_CHECKSYS_MEM_LIMIT_0'			=> 'Attenzione:',
	'ERR_CHECKSYS_MEM_LIMIT_1'			=> '(Imposta questo a',
	'ERR_CHECKSYS_MEM_LIMIT_2'			=> 'M o più nel file php.ini)',
	'ERR_CHECKSYS_MYSQL_VERSION'		=> 'Versione Minima 4.1.2 - Trovata:',
	'ERR_CHECKSYS_NO_SESSIONS'			=> 'Impossibile scrivere e leggere variabili di sessione. Impossibile procedere con l´installazione.',
	'ERR_CHECKSYS_NOT_VALID_DIR'		=> 'Directory non valida',
	'ERR_CHECKSYS_NOT_WRITABLE'			=> 'Attenzione: Non scrivibile',
	'ERR_CHECKSYS_PHP_INVALID_VER'		=> 'La vostra versione di php non è supportata da Sugar.  Si deve installare una versione compatibile con l´applicazione Sugar.  Si prega di consultare la Compatibility Matrix nella Release Notes per le versioni di PHP supportate. La tua versione è',
	'ERR_CHECKSYS_IIS_INVALID_VER'      => 'La versione di IIS utilizzata non è supportata da Sugar.  E´ necessaria installare una versione compatibile con l´applicazione Sugar. Per conoscere le versioni IIS supportate si prega di consultare la matrice di compatibilità nelle Release Notes. La versione usata è',
    'ERR_CHECKSYS_FASTCGI'              => 'Si rileva che non è utilizzato un mapping per il gestore FastCGI per PHP. Sarà necessario installare/configurare  una versione compatibile con questa applicazione di Sugar. Si prega di consultare la Matrice di Compatibilità nelle note di rilascio per le versioni supportate. Per maggiori dettagli visitare  <a href="http://www.iis.net/php/" target="_blank" rel="nofollow noopener noreferrer">http://www.iis.net/php/</a> ',
	'ERR_CHECKSYS_FASTCGI_LOGGING'      => 'Per una prestazione ottimale dell´utilizzo di IIS/FastCGI sapi, imposta fastcgi.logging a 0 nel file php.ini.',
    'ERR_CHECKSYS_PHP_UNSUPPORTED'		=> 'Versione PHP Installata Non Supportata: ( ver',
    'LBL_DB_UNAVAILABLE'                => 'Database non disponibile',
    'LBL_CHECKSYS_DB_SUPPORT_NOT_AVAILABLE' => 'Il supporto del database non è stato trovato. Assicurati di disporre dei driver necessari per uno dei seguenti tipi di database supportati: MySQL, MS SQLServer, Oracle o DB2. Potrebbe essere necessario rimuovere il commento dall\'estensione nel file php.ini o ricompilare con il file binario corretto, a seconda della versione di PHP. Fare riferimento al manuale PHP per ulteriori informazioni su come abilitare il supporto del database.',
    'LBL_CHECKSYS_XML_NOT_AVAILABLE'        => 'Le funzioni associate a librerie XML Parser richieste dall´applicazione di Sugar non sono state trovate. Potrebbe essere necessario decommentare l´estensione nel file php.ini, o ricompilare con il file binario giusto, a seconda della versione di PHP. Per ulteriori informazioni si prega di consultare il Manuale PHP.',
    'LBL_CHECKSYS_CSPRNG' => 'Generatore di numeri casuali',
    'ERR_CHECKSYS_MBSTRING'             => 'Le funzioni associate all´estensione di PHP Multibyte Strings (mbstring), richieste dall´applicazione di Sugar, non sono state trovate. <br /><br />Generalmente, il modulo mbstring non è abilitato di default in PHP e deve essere attivato con -- attiva-mbstring quando il PHP binario è costruito. Si prega di consultare il Manuale PHP per ulteriori informazioni su come abilitare il supporto mbstring.',
    'ERR_CHECKSYS_SESSION_SAVE_PATH_NOT_SET'       => 'L´impostazione session.save_path nel file di configurazione php (php.ini) non è impostata o è impostata in una cartella che non esisteva. Potrebbe essere necessario configurare l´impostazione save_path in php.ini o verificare che le impostazioni di cartella in save_path esistono.',
    'ERR_CHECKSYS_SESSION_SAVE_PATH_NOT_WRITABLE'  => 'L´impostazione session.save_path nel file di configurazione php (php.ini) è configurata in una cartella non scrivibile. Si prega di procedere con le fase necessarie per rendere la cartella scrivibile. <br />A seconda del sistema operativo, questo potrebbe richiedere di modificare i permessi eseguendo chmod 766, o di cliccare il tasto destro sul nome del file per accedere alle proprietà e togliere l´opzione di sola lettura.',
    'ERR_CHECKSYS_CONFIG_NOT_WRITABLE'  => 'Il file di configurazione esiste ma non è scrivibile. Si prega di procedere con le fase necessarie per rendere il file scrivibile. A seconda del sistema operativo, questo potrebbe richiedere di modificare i permessi eseguendo chmod 766, o di cliccare il tasto destro sul nome del file per accedere alle proprietà e togliere l´opzione di sola lettura.',
    'ERR_CHECKSYS_CONFIG_OVERRIDE_NOT_WRITABLE'  => 'Il file di configurazione override esiste ma non è scrivibile. Si prega di seguire gli step necessari per rendere il file scrivibile. A seconda del sistema operativo, questo potrebbe richiedere un cambiamento dei permessi eseguendo chmod 766 oppure fare clic destro sul nome per accedere alle proprietà e deselezionare l´opzione di sola lettura.',
    'ERR_CHECKSYS_CUSTOM_NOT_WRITABLE'  => 'La Directory personalizzata esiste ma non è scrivibile. Potrebbe essere necessario modifcare i permessi su di essa (chmod 766) o cliccare il tasto destro su questa e togliere l´opzione di sola lettura, a seconda del sistema operativo in uso. Si prega di procedere con le fase necessarie per rendere il file scrivibile.',
    'ERR_CHECKSYS_FILES_NOT_WRITABLE'   => "I file o le directory elencati di seguito non sono scrivibili o sono mancanti e non possono essere creati. A seconda del sistema operativo in uso, per correggere questo potrebbe essere richiesto di modifcare le autorizzazioni sui file o le directory padre (chmod 766), o cliccare  il tasto destro sulla directory padre per togliere l´opzione \"sola lettura\" e applicarla alle sottocartelle.",
	'ERR_CHECKSYS_SAFE_MODE'			=> 'Modalità Safe è attiva (si può disattivare in php.ini)',
    'ERR_CHECKSYS_ZLIB'					=> 'Non trovato: con la compressione zlib la performance di SugarCRM migliora enormemente.',
    'ERR_CHECKSYS_ZIP'					=> 'Supporto ZIP non trovato: SugarCRM hnecessita di supporto ZIP per elaborare file compressi.',
    'ERR_CHECKSYS_BCMATH'				=> 'Supporto BCMATH non trovato: SugarCRM necessità di un supporto BCMATH per la matematica di precisione arbitraria.',
    'ERR_CHECKSYS_HTACCESS'             => 'Test per la riscrittura .htaccess fallito.Questo generalmente significa che non hai impostato AllowOverride per la Sugar directory.',
    'ERR_CHECKSYS_CSPRNG' => 'Eccezione CSPRNG',
	'ERR_DB_ADMIN'						=> 'Il nome utente e/o la password dell´amministratore del database non sono validi, e questo potrebbe causare una mancanza di connessione col database. Si prega di inserire un nome utente e una password validi (Errore:',
    'ERR_DB_ADMIN_MSSQL'                => 'Il nome utente e/o la password dell´amministratore del database non sono validi, e questo potrebbe causare una mancanza di connessione col database. Si prega di inserire un nome utente e una password validi (Errore:',
	'ERR_DB_EXISTS_NOT'					=> 'Il database specificato non esiste.',
	'ERR_DB_EXISTS_WITH_CONFIG'			=> 'Database già esistente con dati di configurazione. Per eseguire un´installazione con il database scelto, si prega di eseguire nuovamente l´installazione e scegliere: "Trascinare e ricreare le tabelle esistenti di SugarCRM"? Per eseguire l´aggiornamento utilizza l´Aggiornamento Guidato nel pannello di amministrazione. Si prega di leggere la documentazione per l´aggiornamento che si trova <a href="http://www.sugarforge.org/content/downloads/" target="_new">qui</a>.',
	'ERR_DB_EXISTS'						=> 'Il nome del Database fornito esiste già -- non è possibile creare un altro database con lo stesso nome.',
    'ERR_DB_EXISTS_PROCEED'             => 'Il nome del Database fornito esiste già. E´ possibile<br />1. cliccare il pulsante Indietro e scegliere un nuovo nome<br />2. cliccare Avanti e continuare ma tutte le tabelle e i dati del database verranno eliminati.',
	'ERR_DB_HOSTNAME'					=> 'Il nome dell´Host non può essere vuoto.',
	'ERR_DB_INVALID'					=> 'Tipo Database selezionato Non Valido.',
	'ERR_DB_LOGIN_FAILURE'				=> 'L´host, il nome utente e/o la password del database forniti non sono validi e non si può stabilire la connessione al database. Si prega di inserire un host, un nome utente e una password validi.',
	'ERR_DB_LOGIN_FAILURE_MYSQL'		=> 'L´host, il nome utente e/o la password del database forniti non sono validi e non si può stabilire la connessione al database. Si prega di inserire un host, un nome utente e una password validi.',
	'ERR_DB_LOGIN_FAILURE_MSSQL'		=> 'L´host, il nome utente e/o la password del database forniti non sono validi e non si può stabilire la connessione al database. Si prega di inserire un host, un nome utente e una password validi.',
	'ERR_DB_MYSQL_VERSION'				=> 'La versione di MySQL (%s) non è supportata da Sugar. E´ necessario installare una versione che sia compatibile con l´applicazione Sugar. Si prega di consultare la matrice di compatibilità nelle note di rilascio per prendere visione delle versioni MySQL supportate.',
	'ERR_DB_NAME'						=> 'Il nome del Database non può essere vuoto.',
	'ERR_DB_NAME2'						=> "Il nome del database non può contenere ´\\´, ´/´, or ´.´",
    'ERR_DB_MYSQL_DB_NAME_INVALID'      => "Il nome del database non può contenere ´\\´, ´/´, or ´.´",
    'ERR_DB_MSSQL_DB_NAME_INVALID'      => "Il nome del database non può contenere ´\\´, ´/´, o ´.´",
    'ERR_DB_OCI8_DB_NAME_INVALID'       => "Il nome del database può contenere solo caratteri alfanumerici e i simboli \"#\", \"_\", \"-\", \":\", \".\", \"/\" o \"$\"",
	'ERR_DB_PASSWORD'					=> 'Le passwords fornite per l´amministratore del database di Sugar non corrispondono. Si prega di inserire nuovamente le stesse password nei campi passwords.',
	'ERR_DB_PRIV_USER'					=> 'Fornire il nome utente dell´amministratore del database. L´utente è richiesto per la connessione inziale al database.',
	'ERR_DB_USER_EXISTS'				=> 'Il nome utente dell´utente del database di Sugar esiste già -- non è possibile crearne un altro con lo stesso nome. Si prega si inserire un nuovo nome utente.',
	'ERR_DB_USER'						=> 'Inserire il nome utente per l´amministratore del database di Sugar.',
	'ERR_DBCONF_VALIDATION'				=> 'Si prega di correggere i seguenti errori prima di procedere:',
    'ERR_DBCONF_PASSWORD_MISMATCH'      => 'Le passwords fornite per l´utente del database di Sugar non corrispondono. Si prega di inserire nuovamente le stesse password nei campi passwords.',
	'ERR_ERROR_GENERAL'					=> 'Sono stati riscontrati i seguenti errori:',
	'ERR_LANG_CANNOT_DELETE_FILE'		=> 'Impossibile cancellare il file:',
	'ERR_LANG_MISSING_FILE'				=> 'Impossibile trovare il file:',
	'ERR_LANG_NO_LANG_FILE'			 	=> 'Nessun file del pacchetto lingua disponibile in include/language:',
	'ERR_LANG_UPLOAD_1'					=> 'Si è verificato un problema durante il caricamento. Si prega di riprovare.',
	'ERR_LANG_UPLOAD_2'					=> 'I pacchetti lingua devono essere file ZIP.',
	'ERR_LANG_UPLOAD_3'					=> 'PHP potrebbe non spostare il file temporaneo nella directory di aggiornamento.',
	'ERR_LICENSE_MISSING'				=> 'Campi obbligatori non compilati',
	'ERR_LICENSE_NOT_FOUND'				=> 'Il file della licenza non trovato!',
	'ERR_LOG_DIRECTORY_NOT_EXISTS'		=> 'La log directory fornita non è una directory valida.',
	'ERR_LOG_DIRECTORY_NOT_WRITABLE'	=> 'La log directory fornita non è una directory scrivibile.',
	'ERR_LOG_DIRECTORY_REQUIRED'		=> 'La log directory è necessaria se si desidera specificare la propria.',
	'ERR_NO_DIRECT_SCRIPT'				=> 'Impossibile elaborare lo script direttamente.',
	'ERR_NO_SINGLE_QUOTE'				=> 'Non puoi usare le virgolette semplici per',
	'ERR_PASSWORD_MISMATCH'				=> 'Le password dell´utente amministratore di Sugar non combaciano. Si prega di inserire nuovamente le stesse password nei campi password.',
	'ERR_PERFORM_CONFIG_PHP_1'			=> 'Impossibile scrivere sul file config.php',
	'ERR_PERFORM_CONFIG_PHP_2'			=> 'Puoi continuare l´installazione creando manualmente il file config.php e incollando le informazioni di configurazione di seguito nel file config.php. Tuttavia, è necessario creare il file config.php prima di passare allo step successivo.',
	'ERR_PERFORM_CONFIG_PHP_3'			=> 'Ti sei ricordato di creare il file config.php?',
	'ERR_PERFORM_CONFIG_PHP_4'			=> 'Attenzione: impossibile scrivere nel file config.php. Assicurarsi che esista.',
	'ERR_PERFORM_HTACCESS_1'			=> 'Impossibile scrivere su',
	'ERR_PERFORM_HTACCESS_2'			=> 'file.',
	'ERR_PERFORM_HTACCESS_3'			=> 'Se vuoi proteggere il tuo log file dall´essere accessibile via browser, crea un file .htaccess nelle tua log directory con la riga:',
	'ERR_PERFORM_NO_TCPIP'				=> 'Non è stato possibile rilevare una connessione Internet. Quando disponi di una connessione, visita il sito http://www.sugarcrm.com/home/index.php?option=com_extended_registration&task=register per registarti in SugarCRM. Facendoci conoscere un po´ come la tua azienda utilizza SugarCRM, possiamo garantire di fornire sempre la giusta applicazione per le tue esigenze aziendali.',
	'ERR_SESSION_DIRECTORY_NOT_EXISTS'	=> 'Directory di sessione non valida.',
	'ERR_SESSION_DIRECTORY'				=> 'Directory di sessione non scrivibile.',
	'ERR_SESSION_PATH'					=> 'E´ richiesto il percorso di sessione se si desidere specificare il proprio.',
	'ERR_SI_NO_CONFIG'					=> 'Non hai incluso config_si.php nella root del documento, o non hai definito $sugar_config_si in config.php',
	'ERR_SITE_GUID'						=> 'E´ richiesta l´ID di applicazione se si desidera specificare la propria.',
    'ERROR_SPRITE_SUPPORT'              => "Al momento non siamo in grado di individuare la libreria GD, di conseguenza non sarà possibile utilizzare la funzionalità di Sprite CSS.",
	'ERR_UPLOAD_MAX_FILESIZE'			=> 'Attenzione: La tua configurazione PHP dovrebbe essere cambiata per poter caricare file di almeno 6MB.',
    'LBL_UPLOAD_MAX_FILESIZE_TITLE'     => 'Dimensioni File da caricare',
	'ERR_URL_BLANK'						=> 'Fornire l´URL per l´instanza di Sugar.',
	'ERR_UW_NO_UPDATE_RECORD'			=> 'Impossibile individuare l´installazione del record di',
    'ERROR_FLAVOR_INCOMPATIBLE'         => 'Il file caricato non è compatibile con questa versione di Sugar (edizione Professional, Enterprise o Ultimate): ',
	'ERROR_LICENSE_EXPIRED'				=> "Errore: licenza scaduta",
	'ERROR_LICENSE_EXPIRED2'			=> "giorno(i) passati. Si prega di andare su <a href=\"index.php?action=LicenseSettings&module=Administration\">\"License Management\"</a> nella parte di Amministrazione per inserire la nuova chiave di licenza.  Se non inserisci una nuova chiave di licenza entro 30 giorni dalla scadenza della licenza, non sarai più in grado di accedere all´applicazione.",
	'ERROR_MANIFEST_TYPE'				=> 'Il file Manifest deve specificare il tipo di pacchetto.',
	'ERROR_PACKAGE_TYPE'				=> 'Il file Manifest specifica un tipo di pacchetto non riconosciuto',
	'ERROR_VALIDATION_EXPIRED'			=> "Errore: licenza scaduta",
	'ERROR_VALIDATION_EXPIRED2'			=> " giorno(i) fa. Si prega di andare su <a href=\"index.php?action=LicenseSettings&module=Administration\">\"Gestione licenze\"</a>  nella parte di Amministrazione per inserire il nuovo codice di validazione.  Se non inserisci un nuovo codice entro 30 giorni dalla scadenza del codice, non sarai più in grado di accedere all´applicazione.",
	'ERROR_VERSION_INCOMPATIBLE'		=> 'Il file di aggiornamento non è compatibile con queste versioni(Open Source, Professional, o Enterprise) di Sugar Suite:',

	'LBL_BACK'							=> 'Indietro',
    'LBL_CANCEL'                        => 'Annulla',
    'LBL_ACCEPT'                        => 'Accetta',
	'LBL_CHECKSYS_1'					=> 'Per il corretto funzionamento della tua installazione di SugarCRM, accertati che tutti gli elementi di controllo del sistema elencati di seguito siano verdi. Se alcuni sono rossi, si prega di procedere con le fasi necessarie per risolvere.',
	'LBL_CHECKSYS_CACHE'				=> 'Directory Cache Sub scrivibili',
    'LBL_DROP_DB_CONFIRM'               => 'Nome del Database esistente.<br /><br />E´ possibile:<br />1. Cliccare su Annulla e scegliere un nuovo nome del database, o<br />2. Cliccare su Accetta e continuare. Tutte le cartelle esistenti nel database saranno eliminate. Questo significa che tutte le tabelle e i dati pre-esistenti saranno spazzati via.',
	'LBL_CHECKSYS_CALL_TIME'			=> 'PHP Allow Call Time Pass Reference disattivato',
    'LBL_CHECKSYS_COMPONENT'			=> 'Componente',
	'LBL_CHECKSYS_COMPONENT_OPTIONAL'	=> 'Componenti Opzionali',
	'LBL_CHECKSYS_CONFIG'				=> 'File di configurazione SugarCRM scrivibile (config.php)',
	'LBL_CHECKSYS_CONFIG_OVERRIDE'		=> 'File di configurazione SugarCRM scrivibile (config_override.php)',
	'LBL_CHECKSYS_CURL'					=> 'Modulo cURL',
    'LBL_CHECKSYS_SESSION_SAVE_PATH'    => 'Impostazione per salvataggio di percorso della sesione',
	'LBL_CHECKSYS_CUSTOM'				=> 'Directory personalizzata scrivibile',
	'LBL_CHECKSYS_DATA'					=> 'Sottocartelle Dati scrivibili',
	'LBL_CHECKSYS_IMAP'					=> 'Modulo IMAP',
	'LBL_CHECKSYS_MQGPC'				=> 'Magic Quotes GPC',
	'LBL_CHECKSYS_MBSTRING'				=> 'Modulo Stringhe MB',
	'LBL_CHECKSYS_MEM_OK'				=> 'OK (Nessun Limite)',
	'LBL_CHECKSYS_MEM_UNLIMITED'		=> 'OK (Illimitato)',
	'LBL_CHECKSYS_MEM'					=> 'Limite Memoria PHP',
	'LBL_CHECKSYS_MODULE'				=> 'File e sottodirectory scrivibili dei moduli',
	'LBL_CHECKSYS_MYSQL_VERSION'		=> 'Versione MySQL',
	'LBL_CHECKSYS_NOT_AVAILABLE'		=> 'Non disponibile',
	'LBL_CHECKSYS_OK'					=> 'OK',
	'LBL_CHECKSYS_PHP_INI'				=> 'Posizione del file di configurazione PHP (php.ini):',
	'LBL_CHECKSYS_PHP_OK'				=> 'OK (ver',
	'LBL_CHECKSYS_PHPVER'				=> 'Versione PHP',
    'LBL_CHECKSYS_IISVER'               => 'Versione IIS',
    'LBL_CHECKSYS_FASTCGI'              => 'FastCGI',
	'LBL_CHECKSYS_RECHECK'				=> 'Ri-controllare',
	'LBL_CHECKSYS_SAFE_MODE'			=> 'Modalità provvisoria PHP disattivata',
	'LBL_CHECKSYS_SESSION'				=> 'Percorso di salvataggio sessione scrivibile (',
	'LBL_CHECKSYS_STATUS'				=> 'Stato',
	'LBL_CHECKSYS_TITLE'				=> 'Accettazione Sistema di Controllo',
	'LBL_CHECKSYS_VER'					=> 'Trovato: ( ver',
	'LBL_CHECKSYS_XML'					=> 'Parsing XML',
	'LBL_CHECKSYS_ZLIB'					=> 'Modulo di compressione ZLIB',
	'LBL_CHECKSYS_ZIP'					=> 'Modulo Handling ZIP',
    'LBL_CHECKSYS_BCMATH'				=> 'Modulo di matematica precisione arbitratia',
    'LBL_CHECKSYS_HTACCESS'				=> 'Impostazioni AllowOverride per .htaccess',
    'LBL_CHECKSYS_FIX_FILES'            => 'Si prega di correggere i seguenti files o directory prima di procedere:',
    'LBL_CHECKSYS_FIX_MODULE_FILES'     => 'Si prega di correggere le seguenti directory dei moduli e i file all´interno di queste prima di procedere:',
    'LBL_CHECKSYS_UPLOAD'               => 'Directory di upload scrivibile',
    'LBL_CLOSE'							=> 'Chiudi',
    'LBL_THREE'                         => '3',
	'LBL_CONFIRM_BE_CREATED'			=> 'essere creato',
	'LBL_CONFIRM_DB_TYPE'				=> 'Tipo Database',
	'LBL_CONFIRM_DIRECTIONS'			=> 'Si prega di confermare le impostazioni sotto. Se si desidera modificare un qualsiasi valore, cliccare "Indietro" per modificare. Altrimenti cliccare "Avanti" per iniziare l´installazione.',
	'LBL_CONFIRM_LICENSE_TITLE'			=> 'Informazione Licenza',
	'LBL_CONFIRM_NOT'					=> 'non',
	'LBL_CONFIRM_TITLE'					=> 'Conferma Impostazioni',
	'LBL_CONFIRM_WILL'					=> 'sarà',
	'LBL_DBCONF_CREATE_DB'				=> 'Nuovo Database',
	'LBL_DBCONF_CREATE_USER'			=> 'Nuovo Utente [Alt+N]',
	'LBL_DBCONF_DB_DROP_CREATE_WARN'	=> 'Attenzione: selezionando questa casella tutti i dati di Sugar verranno cancellati',
	'LBL_DBCONF_DB_DROP_CREATE'			=> 'Eliminare e ricreare le tabelli esistenti di Sugar?',
    'LBL_DBCONF_DB_DROP'                => 'Elimina Tabelle',
    'LBL_DBCONF_DB_NAME'				=> 'Nome Database',
	'LBL_DBCONF_DB_PASSWORD'			=> 'Password Utente Database Sugar',
	'LBL_DBCONF_DB_PASSWORD2'			=> 'Inserisci nuovamente la password dell´utente del database di Sugar',
	'LBL_DBCONF_DB_USER'				=> 'Nome Utente Database Sugar',
    'LBL_DBCONF_SUGAR_DB_USER'          => 'Nome Utente Database Sugar',
    'LBL_DBCONF_DB_ADMIN_USER'          => 'Nome Utente Amministratore del Database',
    'LBL_DBCONF_DB_ADMIN_PASSWORD'      => 'Password Amministratore del Database',
	'LBL_DBCONF_DEMO_DATA'				=> 'Popolare il Database con dati di demo?',
    'LBL_DBCONF_DEMO_DATA_TITLE'        => 'Scegli Dati Demo',
	'LBL_DBCONF_HOST_NAME'				=> 'Nome Host',
	'LBL_DBCONF_HOST_INSTANCE'			=> 'Istanza Host',
	'LBL_DBCONF_HOST_PORT'				=> 'Porta',
    'LBL_DBCONF_SSL_ENABLED'            => 'Abilita connessione SSL',
	'LBL_DBCONF_INSTRUCTIONS'			=> 'Si prega di inserire le informazioni di configurazione del database di seguito. Se non sei sicuro di cosa compilare, suggeriamo di utilizzare i valori predefiniti.',
	'LBL_DBCONF_MB_DEMO_DATA'			=> 'Utilizzare test multi-byte nei dati di demo?',
    'LBL_DBCONFIG_MSG2'                 => 'Nome del web server o della macchina (host) in cui si trova il database (ad esempio localhost o www.mydomain.com ):',
    'LBL_DBCONFIG_MSG3'                 => 'Nome del database che conterrà i dati per l´istanza di Sugar che si sta per installare:',
    'LBL_DBCONFIG_B_MSG1'               => 'Per impostare il database di Sugar sono necessari il nome utente e la password di un amministratore del database che può creare tabelle del database e utenti e che può scrivere nel database.',
    'LBL_DBCONFIG_SECURITY'             => 'Per motivi di sicurezza, è possibile specificare un utente esclusivo del database per connettersi al database di Sugar. Questo utente deve essere in grado di scrivere, aggiornare, e recuperare dati nel database di Sugar che verrà creato per questa istanza. Questo utente può essere l´amministratore del database specificato sopra, oppure è possibile fornire le informazioni dell´utente nuovo o esistente del database.',
    'LBL_DBCONFIG_AUTO_DD'              => 'Fallo per me',
    'LBL_DBCONFIG_PROVIDE_DD'           => 'Fornire utente esistente',
    'LBL_DBCONFIG_CREATE_DD'            => 'Definire l´utente da creare',
    'LBL_DBCONFIG_SAME_DD'              => 'Uguale all´utente amministratore',
	//'LBL_DBCONF_I18NFIX'              => 'Apply database column expansion for varchar and char types (up to 255) for multi-byte data?',
    'LBL_FTS'                           => 'Ricerca Full Text',
    'LBL_FTS_INSTALLED'                 => 'Installato',
    'LBL_FTS_INSTALLED_ERR1'            => 'La funzionalità di ricerca full text non è stata installata.',
    'LBL_FTS_INSTALLED_ERR2'            => 'E´ comunque possibile installare ma non sarà possibile usare la funzionalità della Ricerca Full Text. Per sapere come fare si prega di far riferimento alla guida di installazione del server del database oppure contattare l´amministratore del sistema.',
	'LBL_DBCONF_PRIV_PASS'				=> 'Password dell´utente favorito del database.',
	'LBL_DBCONF_PRIV_USER_2'			=> 'L´account del database sopra è un utente favorito?',
	'LBL_DBCONF_PRIV_USER_DIRECTIONS'	=> 'Questo utente favorito del database deve avere le autorizzazioni necessarie per creare il database, eliminare/creare tabelle, e creare un utente. Questo utente favorito del database verrò utilizzato solamente per svolgere questi compiti, se necessario durante il processo di installazione. Si può anche usare lo stesso utente del database specificato sopra se l´utente dispone dei permessi necessari.',
	'LBL_DBCONF_PRIV_USER'				=> 'Nome Utente favorito del database',
	'LBL_DBCONF_TITLE'					=> 'Configurazione Database',
    'LBL_DBCONF_TITLE_NAME'             => 'Fornire Nome Database',
    'LBL_DBCONF_TITLE_USER_INFO'        => 'Fornire le Informazioni Utente del Database',
	'LBL_DISABLED_DESCRIPTION_2'		=> 'Dopo questa modifca, cliccare il pulsante "Inizia" di seguito per iniziare l´installazione. <i>Una volta completata l´installazione, modificare il valore da ´installer_locked´ a ´true´.</i>',
	'LBL_DISABLED_DESCRIPTION'			=> 'Il programma di installazione è già stato eseguito una volta. Per misura di sicurezza, è stata disabilitata l´esecuzione di una seconda volta. Se sei sicuro di voler eseguirlo ancora, vai nel file config.php e individua (o aggiungi) una variabile chiamata ´installer_locked´ per impostarla in ´false´. La riga dovrebbe essere simile a questa:',
	'LBL_DISABLED_HELP_1'				=> 'Per supporto nella fase di installazione, si prega di visitare SugarCRM',
    'LBL_DISABLED_HELP_LNK'               => 'http://www.sugarcrm.com/forums/',
	'LBL_DISABLED_HELP_2'				=> 'Forums di supporto',
	'LBL_DISABLED_TITLE_2'				=> 'Installazione SugarCRM è stata Disabilitata',
	'LBL_DISABLED_TITLE'				=> 'Installazione SugarCRM Disabilitata',
	'LBL_EMAIL_CHARSET_DESC'			=> 'Character Set più comunemente utilizzati in locale',
	'LBL_EMAIL_CHARSET_TITLE'			=> 'Impostazioni Posta in Uscita',
    'LBL_EMAIL_CHARSET_CONF'            => 'Character Set per Email in uscita',
	'LBL_HELP'							=> 'Aiuto',
    'LBL_INSTALL'                       => 'Installa',
    'LBL_INSTALL_TYPE_TITLE'            => 'Opzioni Installazioni',
    'LBL_INSTALL_TYPE_SUBTITLE'         => 'Scegli Tipo Installazione',
    'LBL_INSTALL_TYPE_TYPICAL'          => 'Installazione Tipica',
    'LBL_INSTALL_TYPE_CUSTOM'           => 'Installazione Personalizzata',
    'LBL_INSTALL_TYPE_MSG1'             => 'La chiave è richiesta per la funzionalità generale di applicazione, ma non è richiesta per l´installazione. Non è necessario inserire adesso la chiave, ma si dovrà fornire dopo aver installato l´applicazione.',
    'LBL_INSTALL_TYPE_MSG2'             => 'Richiede informazioni minime per l´installazione. Consigliato per nuovi utenti.',
    'LBL_INSTALL_TYPE_MSG3'             => 'Fornisce opzioni aggiuntive da impostare durante l´installazione. Molte di queste opzioni sono anche disponibili dopo l´installazione nel pannello di amministrazione. Consigliato per utenti avanzati.',
	'LBL_LANG_1'						=> 'Per utilizzare una lingua diversa dalla lingua predefinita di Sugar (US-English), è possibile in questo momento caricare e installare il pacchetto lingua. Sarà possibile caricare e installare pacchetti lingua anche dall´interno dell´applicazione. Se vuoi saltare questo passaggio, clicca Avanti.',
	'LBL_LANG_BUTTON_COMMIT'			=> 'Installa',
	'LBL_LANG_BUTTON_REMOVE'			=> 'Rimuovi',
	'LBL_LANG_BUTTON_UNINSTALL'			=> 'Disinstalla',
	'LBL_LANG_BUTTON_UPLOAD'			=> 'Carica',
	'LBL_LANG_NO_PACKS'					=> 'Nessuno',
	'LBL_LANG_PACK_INSTALLED'			=> 'I seguenti pacchetti lingua sono stati installati:',
	'LBL_LANG_PACK_READY'				=> 'I seguenti pacchetti lingua sono pronti per essere installati:',
	'LBL_LANG_SUCCESS'					=> 'Il pacchetto lingua è stato caricato con successo.',
	'LBL_LANG_TITLE'			   		=> 'Pacchetto Lingua',
    'LBL_LAUNCHING_SILENT_INSTALL'     => 'Installazione di Sugar in corso. L´operazione potrà richiedere alcuni minuti.',
	'LBL_LANG_UPLOAD'					=> 'Carica il Pacchetto Lingua',
	'LBL_LICENSE_ACCEPTANCE'			=> 'Accetazione di Licenza',
    'LBL_LICENSE_CHECKING'              => 'Controllo del sistema per la compatibilità.',
    'LBL_LICENSE_CHKENV_HEADER'         => 'Controllo Ambiente',
    'LBL_LICENSE_CHKDB_HEADER'          => 'Verifica DB, credenziali FTS in corso.',
    'LBL_LICENSE_CHECK_PASSED'          => 'Il sistema ha superato il controllo di compatibillità.',
    'LBL_LICENSE_REDIRECT'              => 'Reindirizzamento in',
	'LBL_LICENSE_DIRECTIONS'			=> 'Se si hanno a disposizione le informazioni sulla licenza si prega di inserirle nei seguenti campi.',
	'LBL_LICENSE_DOWNLOAD_KEY'			=> 'Inserisci la chiave di Download',
	'LBL_LICENSE_EXPIRY'				=> 'Data Scadenza',
	'LBL_LICENSE_I_ACCEPT'				=> 'Accetta',
	'LBL_LICENSE_NUM_USERS'				=> 'Numero di utenti',
	'LBL_LICENSE_PRINTABLE'				=> 'Vista stampabile',
    'LBL_PRINT_SUMM'                    => 'Stampa Sommario',
	'LBL_LICENSE_TITLE_2'				=> 'Licenza SugarCRM',
	'LBL_LICENSE_TITLE'					=> 'Informazione Licenza',
	'LBL_LICENSE_USERS'					=> 'Utenti con licenza',

	'LBL_LOCALE_CURRENCY'				=> 'Impostazioni Valuta',
	'LBL_LOCALE_CURR_DEFAULT'			=> 'Valuta Predefinita',
	'LBL_LOCALE_CURR_SYMBOL'			=> 'Simbolo Valuta:',
	'LBL_LOCALE_CURR_ISO'				=> 'Codice Valuta (ISO 4217)',
	'LBL_LOCALE_CURR_1000S'				=> 'Separatore Migliaia',
	'LBL_LOCALE_CURR_DECIMAL'			=> 'Separatore Decimale',
	'LBL_LOCALE_CURR_EXAMPLE'			=> 'Esempio',
	'LBL_LOCALE_CURR_SIG_DIGITS'		=> 'Cifre significative',
	'LBL_LOCALE_DATEF'					=> 'Formato Data Predefinito',
	'LBL_LOCALE_DESC'					=> 'Le impostazioni locali specificate saranno riportate globalmente nell´istanza di Sugar.',
	'LBL_LOCALE_EXPORT'					=> 'Character Set per Importazione/Esportazione<br />(Email, .csv, vCard, PDF, data import)',
	'LBL_LOCALE_EXPORT_DELIMITER'		=> 'Delimitatore Esportazione (.csv)',
	'LBL_LOCALE_EXPORT_TITLE'			=> 'Impostazioni Importa/Esporta',
	'LBL_LOCALE_LANG'					=> 'Lingua Predefinita',
	'LBL_LOCALE_NAMEF'					=> 'Nome Formato Predefinito',
	'LBL_LOCALE_NAMEF_DESC'				=> 's =titolo<br />f = nome<br />l= cognome',
	'LBL_LOCALE_NAME_FIRST'				=> 'David',
	'LBL_LOCALE_NAME_LAST'				=> 'Livingstone',
	'LBL_LOCALE_NAME_SALUTATION'		=> 'Dr.',
	'LBL_LOCALE_TIMEF'					=> 'Formato Ora Predefinito',
	'LBL_LOCALE_TITLE'					=> 'Impostazioni Internazionali',
    'LBL_CUSTOMIZE_LOCALE'              => 'Personalizza Impostazioni Locali',
	'LBL_LOCALE_UI'						=> 'Interfaccia Utente',

	'LBL_ML_ACTION'						=> 'Azione',
	'LBL_ML_DESCRIPTION'				=> 'Descrizione',
	'LBL_ML_INSTALLED'					=> 'Data Intallazione',
	'LBL_ML_NAME'						=> 'Nome',
	'LBL_ML_PUBLISHED'					=> 'Data Pubblicazione',
	'LBL_ML_TYPE'						=> 'Tipo',
	'LBL_ML_UNINSTALLABLE'				=> 'Disinstallabile',
	'LBL_ML_VERSION'					=> 'Versione',
	'LBL_MSSQL'							=> 'Server SQL',
	'LBL_MSSQL_SQLSRV'				    => 'SQL Server (Microsoft SQL Server Driver for PHP)',
	'LBL_MYSQL'							=> 'MySQL',
    'LBL_MYSQLI'						=> 'MySQL (estensione mysqli)',
	'LBL_IBM_DB2'						=> 'IBM DB2',
	'LBL_NEXT'							=> 'Avanti',
	'LBL_NO'							=> 'No',
    'LBL_ORACLE'						=> 'Oracle',
	'LBL_PERFORM_ADMIN_PASSWORD'		=> 'Impostazioni Password dell´amministratore',
	'LBL_PERFORM_AUDIT_TABLE'			=> 'Verica tabella /',
	'LBL_PERFORM_CONFIG_PHP'			=> 'Creazione file di configurazione di Sugar',
	'LBL_PERFORM_CREATE_DB_1'			=> 'Creazione database',
	'LBL_PERFORM_CREATE_DB_2'			=> 'attivo',
	'LBL_PERFORM_CREATE_DB_USER'		=> 'Creazione nome utente e password del database...',
	'LBL_PERFORM_CREATE_DEFAULT'		=> 'Creazione Dati predefiniti di Sugar',
	'LBL_PERFORM_CREATE_LOCALHOST'		=> 'Creazione nome utente e password del database per il localhost...',
	'LBL_PERFORM_CREATE_RELATIONSHIPS'	=> 'Creazione Tabelle di relazione di Sugar',
	'LBL_PERFORM_CREATING'				=> 'creazione /',
	'LBL_PERFORM_DEFAULT_REPORTS'		=> 'Creazione report predefiniti',
	'LBL_PERFORM_DEFAULT_SCHEDULER'		=> 'Creazione Operazioni pianificate predefinite',
	'LBL_PERFORM_DEFAULT_SETTINGS'		=> 'Inserimento impostazioni predefinite',
	'LBL_PERFORM_DEFAULT_USERS'			=> 'Creazione utenti predefiniti',
	'LBL_PERFORM_DEMO_DATA'				=> 'Popolamento delle tabelle del database con dati demo (questo potrebbe richiedere un po´ di tempo)',
	'LBL_PERFORM_DONE'					=> 'fatto',
	'LBL_PERFORM_DROPPING'				=> 'eliminazione /',
	'LBL_PERFORM_FINISH'				=> 'Termina',
	'LBL_PERFORM_LICENSE_SETTINGS'		=> 'Aggiornamento informazioni licenza',
	'LBL_PERFORM_OUTRO_1'				=> 'Il setup di Sugar',
	'LBL_PERFORM_OUTRO_2'				=> 'è ora completo!',
	'LBL_PERFORM_OUTRO_3'				=> 'Tempo totale:',
	'LBL_PERFORM_OUTRO_4'				=> 'secondi.',
	'LBL_PERFORM_OUTRO_5'				=> 'Memoria indicativa usata:',
	'LBL_PERFORM_OUTRO_6'				=> 'bytes.',
	'LBL_PERFORM_OUTRO_7'				=> 'Il tuo sistema è ora installato e configurato per l´uso.',
	'LBL_PERFORM_REL_META'				=> 'Meta relazioni...',
	'LBL_PERFORM_SUCCESS'				=> 'Operazione eseguita con successo!',
	'LBL_PERFORM_TABLES'				=> 'Creazione Tabelle dell´appplicazione Sugar, verifica tabelle e metadati di relazione',
	'LBL_PERFORM_TITLE'					=> 'Esegui Setup',
	'LBL_PRINT'							=> 'Stampa',
	'LBL_REG_CONF_1'					=> 'Si prega di compilare il breve form di seguito per ricevere annunci di prodotto, notizie sui corsi di formazione, offerte speciali e inviti ad eventi speciali dalla SugarCRM. Noi non vendiamo, condividiamo o distribuiamo le informazioni raccolte qui a terze parti.',
	'LBL_REG_CONF_2'					=> 'Il tuo nome e indirizzo email sono gli unici campi obbligatori per la registrazione. Tutti gli altri campi sono facoltativi, ma molto utili. Noi non vendiamo, condividiamo o distribuiamo le informazioni raccolte qui a terze parti.',
	'LBL_REG_CONF_3'					=> 'Grazie per esserti registrato. Cliccare sul pulsante "Fine" per accedere a SugarCRM. La prima volta è necessario accedere al sistema utilizzando il nome utente "admin" e la password inserita nello step 2.',
	'LBL_REG_TITLE'						=> 'Registrazione',
    'LBL_REG_NO_THANKS'                 => 'No Grazie',
    'LBL_REG_SKIP_THIS_STEP'            => 'Salta questo passaggio',
	'LBL_REQUIRED'						=> '* Campo obbligatorio',

    'LBL_SITECFG_ADMIN_Name'            => 'Nome Amministratore di Sugar',
	'LBL_SITECFG_ADMIN_PASS_2'			=> 'Inserire nuovamente la password dell´utente amministratore di Sugar',
	'LBL_SITECFG_ADMIN_PASS_WARN'		=> 'Attenzione: questo annullerà la password di amministratore di ogni precedente installazione.',
	'LBL_SITECFG_ADMIN_PASS'			=> 'Password Utente Admin di Sugar',
	'LBL_SITECFG_APP_ID'				=> 'ID Applicazione',
	'LBL_SITECFG_CUSTOM_ID_DIRECTIONS'	=> 'Se selezionato, dovrai fornire un ID di applicazione per annullare l´ID generato automaticamente. L´ID assicura che le sessioni di un istanza Sugar non vengano utilizzate da altre istanze. Se disponi di un cluster di installazioni di Sugar, devono tutte condividere lo stesso ID di applicazione.',
	'LBL_SITECFG_CUSTOM_ID'				=> 'Fornire ID della propria Applicazione',
	'LBL_SITECFG_CUSTOM_LOG_DIRECTIONS'	=> 'Se selezionato, devi specificare una directory log per sovrascrivere la directory predefinita per il log di Sugar. Indipendentemente da dove si trova il file di log, l´accesso a questo tramite un web browser sarà limitato tramite un .htaccess redirect.',
	'LBL_SITECFG_CUSTOM_LOG'			=> 'Utilizzare una Directory di Log personalizzata',
	'LBL_SITECFG_CUSTOM_SESSION_DIRECTIONS'	=> 'Se selezionato, devi fornire una cartella sicura per memorizzare le informazioni della sessione di Sugar. Questo può essere fatto per evitare che i dati di sessione siano vulnerabili su servers condivisi.',
	'LBL_SITECFG_CUSTOM_SESSION'		=> 'Utilizzare una directory di sessione personalizzata per Sugar',
	'LBL_SITECFG_DIRECTIONS'			=> 'Si prega di inserire i dati di configurazione qui di seguito. Se non sei sicuro sui campi da compilare, ti suggeriamo di utilizzare i valori predefiniti.',
	'LBL_SITECFG_FIX_ERRORS'			=> 'Prima di procedere si prega di correggere i seguenti errori:',
	'LBL_SITECFG_LOG_DIR'				=> 'Directory Log',
	'LBL_SITECFG_SESSION_PATH'			=> 'Percorso alla directory di sessione <br />(deve essere scrivibile)',
	'LBL_SITECFG_SITE_SECURITY'			=> 'Selezionare le opzioni di sicurezza',
	'LBL_SITECFG_SUGAR_UP_DIRECTIONS'	=> 'Se selezionato, il sistema periodicamente controllerà se sono disponibili versioni aggiornate dell´applicazione.',
	'LBL_SITECFG_SUGAR_UP'				=> 'Controllo automatico degli aggiornamenti?',
	'LBL_SITECFG_SUGAR_UPDATES'			=> 'Configurazione aggiornamenti di Sugar',
	'LBL_SITECFG_TITLE'					=> 'Configurazione Sito',
    'LBL_SITECFG_TITLE2'                => 'Identificare Utente Amministratore',
    'LBL_SITECFG_SECURITY_TITLE'        => 'Sicurezza del sito',
	'LBL_SITECFG_URL'					=> 'URL Instanza di Sugar',
	'LBL_SITECFG_USE_DEFAULTS'			=> 'Utilizza Prefefiniti?',
	'LBL_SITECFG_ANONSTATS'             => 'Inviare statistiche anonime di utilizzo?',
	'LBL_SITECFG_ANONSTATS_DIRECTIONS'  => 'Se selezionato, Sugar invierà statistiche anonime sulla tua installazione alla SugarCRM Inc. ogni volta che il tuo sistema verifica l´esistenza di nuove versioni. Questa informazione ci aiuterà a capire meglio come l´applicazione viene utilizzata migliorando il prodotto.',
    'LBL_SITECFG_URL_MSG'               => 'Inserisci l´URL che verrà utilizzato per accedere all´istanza Sugar dopo l´installazione. L´URL sarà anche utilizzato come base per gli URLs nelle pagine di applicazione di Sugar. L´URL dovrebbe includere il web server o il nome delle macchina o l´indirizzo IP.',
    'LBL_SITECFG_SYS_NAME_MSG'          => 'Inserire un nome da dare al sistema. Questo nome sarà visualizzato nella barra del titolo del browser quando gli utenti entreranno nell´applicazione di Sugar.',
    'LBL_SITECFG_PASSWORD_MSG'          => 'Dopo l´installazione, sarà necessario utilizzare l´utente amministratore di Sugar (nome utente predefinito = admin) per accedere all´istanza Sugar. Inserisci una password per l´utente amministratore. Questa password può essere modificata dopo il login iniziale. Si prega inoltre di inserire un altro nome utente amministratore da utiizzare in aggiunta al valore predefinito fornito.',
    'LBL_SITECFG_COLLATION_MSG'         => 'Seleziona le regole di confronto (smistamento) per il tuo sistema. Queste regole creeranno le tabelle con la lingua che stai usando. Nel caso in cui la lingua non richieda particolari impostazioni si prega di usare il valore di default.',
    'LBL_SPRITE_SUPPORT'                => 'Supporto Sprite',
	'LBL_SYSTEM_CREDS'                  => 'Credenziali Sistema',
    'LBL_SYSTEM_ENV'                    => 'Ambiente Sistema',
	'LBL_START'							=> 'Inizio',
    'LBL_SHOW_PASS'                     => 'Mostra Password',
    'LBL_HIDE_PASS'                     => 'Nascondi Password',
    'LBL_HIDDEN'                        => '(nascosto)',
//	'LBL_NO_THANKS'						=> 'Continue to installer',
	'LBL_CHOOSE_LANG'					=> 'Scegli la lingua',
	'LBL_STEP'							=> 'Passaggio',
	'LBL_TITLE_WELCOME'					=> 'Benvenuto in SugarCRM',
	'LBL_WELCOME_1'						=> 'Questo programma di installazione crea le tabelle del database SugarCRM e imposta le variabili di configurazione che avete bisogno per iniziare. L´intero processo dovrebbe durare circa dieci minuti.',
    //welcome page variables
    'LBL_TITLE_ARE_YOU_READY'            => 'Sei pronto per installare?',
    'REQUIRED_SYS_COMP' => 'Componenti del sistema necessari',
    'REQUIRED_SYS_COMP_MSG' =>
                    'Prima di iniziare, assicurati di avere le versioni supportate delle seguenti componenti di sistema: <br /> <br />                  <ul><br />                  <li>Database/Sistema di gestione Database (Esempi: MySQL, SQL Server, Oracle)</li><br />                  <li> Web Server (Apache, IIS)<li><br />                  </ul><br />                  Consulta la Matrice di Compatibilità nelle Note di rilascio per le componenti di sistema compatibili per la versione di Sugar che stai installando.<br>',
    'REQUIRED_SYS_CHK' => 'Sistema di Controllo Iniziale',
    'REQUIRED_SYS_CHK_MSG' =>
                    'Quando si inizia il processo di installazione, verrà eseguito un sistema di controllo sul web server sul quale si trovano i files di Sugar al fine di verificare che il sistema sia configurato correttamente e sia dotato di tutte le componenti necessarie per completare l´installazione.<br /><br />Il sistema controlla tutte le seguenti caratteristiche:<br />Versione PHP  - deve essere compatibile con l´applicazione<br />Variabili di Sessione - devono funzionare correttamente<br />Stringhe MB - devono essere installate e attivate in php.ini<br />Supporto Database - deve esistere per MySQL, SQL Server o Oracle<br />Config.php - deve esistere e deve disporre delle autorizzazioni appropriate per essere scrivibile<br />I seguenti files di Suga devono essere scrivibili: <br />     /custom<br />     /cache<br />     /modules<br />Se il controllo fallisce, non sarà possibile procedere con l´installazione. Verrà visualizzato un messaggio di errore spiegando il motivo per cui il sistema non ha superato il controllo. Dopo aver apportato le modifiche necessarie, sarà possibile sottoporsi nuovamente al controllo di sistema per continuare l´installazione.',
    'REQUIRED_INSTALLTYPE' => 'Installazione tipica o personalizzata',
    'REQUIRED_INSTALLTYPE_MSG' =>
                    "Dopo il completamento del controllo del sistema, è possibile scegliere se procedere con l´installazione Tipica o Personalizzata. <br />In entrambi i casi, è necessario conoscere le seguenti informazioni: <br />Tipo Database che ospiterà i dati di Sugar<br />Tipologie Database compatibili: MySQL, MS SQL Server, Oracle.<br /><br />Nome del web server o della macchina (host) su cui il database si trova<br />Potrebbe essere localhost se il database si trova in locale oppure sullo stesso web server o la macchina come i file di Sugar<br /><br />Nome del database che si desidera utilizzare per ospitare i dati Sugar<br />Si potrebbe voler utilizzare un database esistente. Se si fornisce il nome di un database esistente, le tabelle del database verranno eliminate durante l´installazione, quando lo schema per il database di Sugar è definito.<br />Se non esiste alcun database già esistente, il nome fornito verrà utilizzato per il nuovo database che sarà creato per l´instanza durante l´installazione. <br /><br />Nome utente e password dell´amministratore del database<br />L´amministratore del database dovrebbe essere in grado di creare tabelle, utenti e scrivere nel database.<br />Se il database non si trova in locale e/o non si è amministratore del database, per ottenere queste informazioni, potrebbe essere necessario contattare l´amministratore del database.<br /><br />Nome utente e password del database di Sugar<br />L´utente potrebbe essere l´amministratore del sistema oppure si potrebbe fornire il nome di un altro utente del database esistente. <br />Se si desidera creare un nuovo utente del database per questo scopo, sarete in grado di fornire un nuovo nome utente e la password durante il processo di installazione, e l´utente verrà creato durante l´installazione.<br /><br />Per l´installazione Personalizzata, si potrebbe anche avere bisogno delle seguenti informazioni:<br />URL che verrà utilizzato per accedere all´istanza Sugar dopo l´installazione. Questo URL deve includere il server Web o il nome o l´indirizzo IP della macchina.<br /><br />[Opzionale] Percorso ad una directory di sessione se si desidera utilizzare una directory di sessione personalizzata per le informazioni di Sugar al fine di impedire che i dati di sessione siano vulnerabili su server condivisi<br /><br />[Opzionale] Percorso ad una directory di log personalizzata se si desidera annullare la directory predefinita per il log di Sugar. <br /><br />[Opzionale] ID Applicazione se si desidera annullare l´ID autogenerato che garantisce che le sessioni di un´istanza di Sugar non siano usate da altre instanze. <br /><br />Set di caratteri più comunemente utilizzati in locale.<br /><br />Per ulteriori informazioni si prega di consultare la Guida per l´Installazione",
    'LBL_WELCOME_PLEASE_READ_BELOW' => 'Prima di procedere con l´installazione si prega di leggere le seguenti informazioni. Le informazioni vi aiuteranno a determinare se o non si è pronti per installare l´applicazione in questo momento.',


	'LBL_WELCOME_2'						=> 'Per la documentazione di installazione, visitare <a href="http://www.sugarcrm.com/crm/installation" target="_blank">Sugar Wiki</a>.  <BR><BR> Per contattare un tecnico dell&apos;assistenza SugarCRM e ottenere aiuto per l&apos;installazione, effettuare l&apos;accesso al <a target="_blank" href="http://support.sugarcrm.com">portale di assistenza SugarCRM</a> e inviare una richiesta.',
	'LBL_WELCOME_CHOOSE_LANGUAGE'		=> 'Scegli la lingua',
	'LBL_WELCOME_SETUP_WIZARD'			=> 'Installazione guidata',
	'LBL_WELCOME_TITLE_WELCOME'			=> 'Benvenuto in SugarCRM',
	'LBL_WELCOME_TITLE'					=> 'Installazione guidata di SugarCRM:',
	'LBL_WIZARD_TITLE'					=> 'Installazione guidata di Sugar:',
	'LBL_YES'							=> 'Sì',
    'LBL_YES_MULTI'                     => 'Si - Multibyte',
	// OOTB Scheduler Job Names:
	'LBL_OOTB_WORKFLOW'		=> 'Esegui le operazioni del workflow',
	'LBL_OOTB_REPORTS'		=> 'Esegui i report dei compiti schedulati',
	'LBL_OOTB_IE'			=> 'Controlla la posta in arrivo',
	'LBL_OOTB_BOUNCE'		=> 'Invia di notte le email rimbalzate delle campagne',
    'LBL_OOTB_CAMPAIGN'		=> 'Invia di notte le campagne email',
	'LBL_OOTB_PRUNE'		=> 'Riduci le dimensioni del database il primo giorno del mese',
    'LBL_OOTB_TRACKER'		=> 'Comprimi le tabelle tracker',
    'LBL_OOTB_SEND_EMAIL_REMINDERS' => 'Esegui notifiche di promemoria tramite posta elettronica',
    'LBL_UPDATE_TRACKER_SESSIONS' => 'Aggiornare tabella tracker_sessions',
    'LBL_OOTB_CLEANUP_QUEUE' => 'Svuota Coda Jobs',


    'LBL_FTS_TABLE_TITLE'     => 'Fornire le impostazioni Ricerca Full Text',
    'LBL_FTS_HOST'     => 'Host',
    'LBL_FTS_PORT'     => 'Porta',
    'LBL_FTS_TYPE'     => 'Tipo Motore di Ricerca',
    'LBL_FTS_HELP'      => 'Per abilitare la ricerca full text seleziona il tipo di motore di ricerca e inserisci la Porta e l´Host dove il motore di ricerca è hostato. Sugar include il supporto al motore elasticsearch.',
    'LBL_FTS_REQUIRED'    => 'Elastic Search è obbligatoria.',
    'LBL_FTS_CONN_ERROR'    => 'Impossibile connettersi al server della ricerca full text. Verificare le impostazioni.',
    'LBL_FTS_NO_VERSION_AVAILABLE'    => 'Nessuna versione disponibile per il server della ricerca full text. Verificare le impostazioni.',
    'LBL_FTS_UNSUPPORTED_VERSION'    => 'È stata rilevata una versione non supportata della ricerca Elastic. Utilizzare le versioni: %s',

    'LBL_PATCHES_TITLE'     => 'Installazione Ultima Patch',
    'LBL_MODULE_TITLE'      => 'Installa Pacchetti Lingua',
    'LBL_PATCH_1'           => 'Se vuoi saltare questo passaggio, cliccare Avanti.',
    'LBL_PATCH_TITLE'       => 'Sistema Patch',
    'LBL_PATCH_READY'       => 'La seguente patch è pronta per essere installata:',
	'LBL_SESSION_ERR_DESCRIPTION'		=> "SugarCRM si basa su sessioni PHP per memorizzare dati importanti mentre si è connessi a questo web server. La tua installazione PHP non ha i dati di sessione configurati correttamente.<br />                                                                <br><br>Un errore di configurazione comune è che la direttiva <b>´session.save_path´</b> non punta ad una directory valida.  <br><br />                                                                <br>Si prega di correggere la <a target=_new href=\"http://us2.php.net/manual/en/ref.session.php\">configurazione PHP</a> nel file php.ini che si trova qui sotto.",
	'LBL_SESSION_ERR_TITLE'				=> 'Errore di configurazione delle sessioni PHP',
	'LBL_SYSTEM_NAME'=>'Nome sistema',
    'LBL_COLLATION' => 'Impostazioni Raccolta',
	'LBL_REQUIRED_SYSTEM_NAME'=>'Fornire un nome al sistema per l´instanza di Sugar.',
	'LBL_PATCH_UPLOAD' => 'Selezionare un file di patch dal computer locale',
	'LBL_BACKWARD_COMPATIBILITY_ON' => 'Php Backward Compatibility mode is turned on. Set zend.ze1_compatibility_mode to Off for proceeding further',

    'meeting_notification_email' => array(
        'name' => 'Email di notifica riunione',
        'subject' => 'Riunione SugarCRM - $event_name ',
        'description' => 'Questo modello viene utilizzato quando il Sistema invia notifiche di una riunione a un utente.',
        'body' => '<div>
	<p>A: $assigned_user</p>

	<p>$assigned_by_user ti ha invitato a una riunione</p>

	<p>Oggetto: $event_name<br/>
	Data di inizio: $start_date<br/>
	Data di fine: $end_date</p>

	<p>Descrizione: $description</p>

	<p>Accetta questa riunione:<br/>
	<<a href="$accept_link">$accept_link</a>></p>
	<p>Accetta provvisoriamente questa riunione:<br/>
	<<a href="$tentative_link">$tentative_link</a>></p>
	<p>Rifiuta questa riunione:<br/>
	<<a href="$decline_link">$decline_link</a>></p>
</div>',
        'txt_body' =>
            'A: $assigned_user

$assigned_by_user ti ha invitato a una riunione

Oggetto: $event_name
Data di inizio: $start_date
Data di fine: $end_date

Descrizione: $description

Accetta questa riunione:
<$accept_link>

Accetta provvisoriamente questa riunione
<$tentative_link>

Rifiuta questa riunione
<$decline_link>',
    ),

    'call_notification_email' => array(
        'name' => 'Email di notifica chiamata',
        'subject' => 'Chiamata SugarCRM - $event_name ',
        'description' => 'Questo modello viene utilizzato quando il Sistema invia notifiche di una chiamata a un utente.',
        'body' => '<div>
	<p>A: $assigned_user</p>

	<p>$assigned_by_user ti ha invitato a una chiamata</p>

	<p>Oggetto: $event_name<br/>
	Data di inizio: $start_date<br/>
	Durata: $hoursh, $minutesm</p>

	<p>Descrizione: $description</p>

	<p>Accetta questa chiamata:<br/>
	<<a href="$accept_link">$accept_link</a>></p>
	<p>Accetta provvisoriamente questa chiamata:<br/>
	<<a href="$tentative_link">$tentative_link</a>></p>
	<p>Rifiuta questa chiamata:<br/>
	<<a href="$decline_link">$decline_link</a>></p>
</div>',
        'txt_body' =>
            'A: $assigned_user

$assigned_by_user ti ha invitato a una chiamata

Oggetto: $event_name
Data di inizio: $start_date
Durata: $hoursh, $minutesm

Descrizione: $description

Accetta questa chiamata:
<$accept_link>

Accetta provvisoriamente questa chiamata
<$tentative_link>

Rifiuta questa chiamata
<$decline_link>',
    ),

    'assigned_notification_email' => array(
        'name' => 'Email di notifica assegnazione',
        'subject' => 'SugarCRM - $module_name assegnato ',
        'description' => 'Questo modello viene utilizzato quando il Sistema invia un\'assegnazione di attività a un utente.',
        'body' => '<div>
<p>$assigned_by_user ha assegnato un&nbsp;$module_name a&nbsp;$assigned_user.</p>

<p>Puoi visualizzare questo&nbsp;$module_name su:<br/>
	<<a href="$module_link">$module_link</a>></p>
</div>',
        'txt_body' =>
            '$assigned_by_user ha assegnato un $module_name a $assigned_user.

Puoi visualizzare questo $module_name su:
<$module_link>',
    ),

    'scheduled_report_email' => array(
        'name' => 'Email report pianificato',
        'subject' => 'Report pianificato: $report_name alle $report_time',
        'description' => 'Questo modello viene utilizzato quando il Sistema invia un report pianificato a un utente.',
        'body' => '<div>
<p>Salve $assigned_user,</p>
<p>In allegato un report generato automaticamente pianificato per te.</p>
<p>Nome report: $report_name</p>
<p>Data e ora di esecuzione del report: $report_time</p>
</div>',
        'txt_body' =>
            'Salve $assigned_user,

In allegato un report generato automaticamente pianificato per te.

Nome report: $report_name

Data e ora di esecuzione del report: $report_time',
    ),

    'comment_log_mention_email' => [
        'name' => 'Notifica email del registro commenti del sistema',
        'subject' => 'SugarCRM - $initiator_full_name ti ha menzionato su un $singular_module_name',
        'description' => 'Questo modello viene utilizzato per inviare una notifica email agli utenti che sono stati taggati in una sezione di registro commenti.',
        'body' =>
            '<div>
                <p>Sei stato menzionati nel registro commenti del seguente record:  <a href="$record_url">$record_name</a></p>
                <p>Accedi a Sugar per visualizzare il commento.</p>
            </div>',
        'txt_body' =>
'Sei stato menzionato nel registro commenti del seguente record: $record_name
            Accedi a Sugar per visualizzare il commento.',
    ],

    'advanced_password_new_account_email' => array(
        'subject' => 'Informazioni Nuovo account',
        'description' => 'Questo template viene utilizzato quando l´Amministratore di sistema  invia una nuova password all´utente.',
        'body' => 'Queste sono la username e la password temporanea del tuo account:<br />Username : $contact_user_user_name<br /><br />Password : $contact_user_user_hash<br /><br /><a href="$config_site_url">$config_site_url</a><br /><br />Dopo esserti connesso con questa password, il sistema potrebbe richiederti di reimpostare la password con una di tua scelta.',
        'txt_body' =>
'Queste sono la username e la password temporanea del tuo account:$contact_user_user_name Password : $contact_user_user_hash $config_site_url Dopo esserti connesso con questa password, il sistema potrebbe richiederti di reimpostare la password con una di tua scelta.',
        'name' => 'Email password generata dal sistema',
        ),
    'advanced_password_forgot_password_email' => array(
        'subject' => 'Reimposta la password del tuo account',
        'description' => "Questo template viene utilizzato per inviare all´utente il link da cliccare per reimpostare la password dell´account.",
        'body' => 'Recentemente hai richiesto in $contact_user_pwd_last_changed di poter reimpostare la passsword del tuo account<br /><br />Clicca il link seguente per poter reimpostare la password:<br /><br /><a href="$contact_user_link_guid">$contact_user_link_guid</a>',
        'txt_body' =>
'Recentemente hai richiesto in $contact_user_pwd_last_changed di poter reimpostare la passsword del tuo account.Clicca il link seguente per poter reimpostare la password: $contact_user_link_guid',
        'name' => 'Email Password dimenticata',
        ),

'portal_forgot_password_email_link' => [
    'name' => 'Email Password dimenticata del portale',
    'subject' => 'Reimposta la password del tuo account',
    'description' => 'Questo modello viene utilizzato per inviare all´utente il link da cliccare per reimpostare la password dell´account del portale.',
    'body' => '<div><table border=\"0\" cellspacing=\"0\" cellpadding=\"0\" width="550" align=\"\&quot;\&quot;center\&quot;\&quot;\"><tbody><tr><td colspan=\"2\"><p>Recentemente hai richiesto di reimpostare la password del tuo account. </p><p>Clicca il link seguente per poter reimpostare la password:</p><p> <a href="$portal_user_link_guid">$portal_user_link_guid</a> </p> </td> </tr><tr><td colspan=\"2\"></td> </tr> </tbody></table> </div>',
    'txt_body' =>
'
    Recentemente hai richiesto di reimpostare la password del tuo account.

    Clicca il link seguente per poter reimpostare la password:

    $portal_user_link_guid',
],

    'portal_password_reset_confirmation_email' => [
        'name' => 'Email di conferma di reimpostazione password del portale',
        'subject' => 'La password del tuo account è stata reimpostata',
        'description' => 'Questo modello viene utilizzato per inviare la conferma di reimpostazione della password dell\'account a un utente del portale.',
        'body' => '<div><table border=\"0\" cellspacing=\"0\" cellpadding=\"0\" width="550" align=\"\&quot;\&quot;center\&quot;\&quot;\"><tbody><tr><td colspan=\"2\"><p>Questa email è stata inviata per confermare che la password dell\'account del portale è stata reimpostata. </p><p>Usa il link sotto riportato per accedere al portale:</p><p> <a href="$portal_login_url">$portal_login_url</a> </p> </td> </tr><tr><td colspan=\"2\"></td> </tr> </tbody></table> </div>',
        'txt_body' =>
            '
    Questa email è stata inviata per confermare che la password dell\'account del portale è stata reimpostata.

    Usa il link sotto riportato per accedere al portale:

    $portal_login_url',
    ],
);
