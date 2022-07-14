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
require_once('include/utils/zip_utils.php');

use Sugarcrm\Sugarcrm\PackageManager\Entity\PackageManifest;
use Sugarcrm\Sugarcrm\Util\Arrays\ArrayFunctions\ArrayFunctions;
use Sugarcrm\Sugarcrm\Security\InputValidation\InputValidation;
use Sugarcrm\Sugarcrm\Util\Files\FileLoader;
use Sugarcrm\Sugarcrm\PackageManager\PackageManager;
use Sugarcrm\Sugarcrm\PackageManager\File\PackageZipFile;

SugarAutoLoader::requireWithCustom('ModuleInstall/ModuleInstaller.php');

////////////////
////  GLOBAL utility
/**
 * Calls a custom function (if it exists) based on the first parameter,
 *   and returns result of function call, or 'undefined' if the function doesn't exist
 * @param string function name to call in custom install hooks
 * @return mixed function call result, or 'undefined'
 */
function installerHook($function_name, $options = array()){
    if(!isset($GLOBALS['customInstallHooksExist'])){
        if(file_exists('custom/install/install_hooks.php')){
            installLog("installerHook: Found custom/install/install_hooks.php");
            require_once('custom/install/install_hooks.php');
            $GLOBALS['customInstallHooksExist'] = true;
        }
        else{
            installLog("installerHook: Could not find custom/install/install_hooks.php");
            $GLOBALS['customInstallHooksExist'] = false;
        }
    }

    if($GLOBALS['customInstallHooksExist'] === false){
        return 'undefined';
    }
    else{
        if(function_exists($function_name)){
            installLog("installerHook: function {$function_name} found, calling and returning the return value");
            return $function_name($options);
        }
        else{
            installLog("installerHook: function {$function_name} not found in custom install hooks file");
            return 'undefined';
        }
    }
}

///////////////////////////////////////////////////////////////////////////////
////    FROM welcome.php
/**
 * returns lowercase lang encoding
 * @return string   encoding or blank on false
 */
function parseAcceptLanguage() {
    $lang = $_SERVER['HTTP_ACCEPT_LANGUAGE'];
    if(strpos($lang, ';')) {
        $exLang = explode(';', $lang);
        return strtolower(str_replace('-','_',$exLang[0]));
    } else {
        $match = array();
        if(preg_match("#\w{2}\-?\_?\w{2}#", $lang, $match)) {
            return strtolower(str_replace('-','_',$match[0]));
        }
    }
    return '';
}

/**
 * creates UpgradeHistory entries
 * @param mode string Install or Uninstall
 */
function updateUpgradeHistory() {
    if(isset($_SESSION['INSTALLED_LANG_PACKS']) && count($_SESSION['INSTALLED_LANG_PACKS']) > 0) {
        foreach($_SESSION['INSTALLED_LANG_PACKS'] as $k => $zipFile) {
            // What was installed without source zip file?
            if (!file_exists($zipFile)) {
                continue;
            }
            $zipDir = pathinfo($zipFile, PATHINFO_DIRNAME);
            $fileName = pathinfo($zipFile, PATHINFO_FILENAME);
            $manifestFile = $zipDir . DIRECTORY_SEPARATOR . $fileName . '-manifest.php';
            // How was it installed without manifest?
            if (!file_exists($manifestFile)) {
                continue;
            }
            $manifest = $installdefs = $upgrade_manifest = [];
            require $manifestFile;
            if (empty($manifest['id_name'])) {
                $idName = !empty($manifest['name']) ? $manifest['name'] : $fileName;
            } else {
                $idName = $manifest['id_name'];
            }
            $new_upgrade = new UpgradeHistory();

            $new_upgrade->id_name = $idName;
            $new_upgrade->name = !empty($manifest['name']) ? $manifest['name'] : $idName;
            $new_upgrade->description = $manifest['description'] ?? '';
            $new_upgrade->filename = $zipFile;
            $new_upgrade->md5sum = md5_file($zipFile);
            $new_upgrade->type = 'langpack';
            $new_upgrade->version = $manifest['version'] ?? '';
            $new_upgrade->status = UpgradeHistory::STATUS_INSTALLED;
            $new_upgrade->manifest = base64_encode(serialize([
                'manifest' => $manifest, 'installdefs' => $installdefs, 'upgrade_manifest' => $upgrade_manifest,
            ]));
            $new_upgrade->published_date = $manifest['published_date'] ?? '';
            $new_upgrade->uninstallable = false;
            $new_upgrade->save();
        }
    }
}


/**
 * removes the installed language pack, but the zip is still in the cache dir
 */
function removeLanguagePack() {
    global $mod_strings;
    global $sugar_config;

    $errors = array();
    installLog("remove language pack being called......");
    // Safe $_REQUEST['manifest'] and $_REQUEST['zipFile']
    $inputValidation = InputValidation::getService();
    $manifestURL = $inputValidation->getValidInputRequest('manifest');
    $zipFileURL = $inputValidation->getValidInputRequest('zipFile');

    $manifest = urldecode($manifestURL);
    $zipFile = urldecode($zipFileURL);

    if(isset($manifest) && !empty($manifest)) {
        if(is_file($manifest)) {
            if(!unlink($manifest)) {
                $errors[] = $mod_strings['ERR_LANG_CANNOT_DELETE_FILE'].$manifest;
            }
        } else {
            $errors[] = $mod_strings['ERR_LANG_MISSING_FILE'].$manifest;
        }
        unset($_SESSION['packages_to_install'][$manifest]);
    }
    if(isset($zipFile) && !empty($zipFile)) {
        if(is_file($zipFile)) {
            if(!unlink($zipFile)) {
                $errors[] = $mod_strings['ERR_LANG_CANNOT_DELETE_FILE'].$zipFile;
            }
        } else {
            $errors[] = $mod_strings['ERR_LANG_MISSING_FILE'].$zipFile;
        }
    }
    if (count($errors) > 0) {
        echo "<p class='error'>";
        foreach($errors as $error) {
            echo "{$error}<br>";
        }
        echo "</p>";
    }

    unlinkTempFiles($manifest, $zipFile);
}



/**
 * takes the current value of $sugar_config and writes it out to config.php (sorta the same as the final step)
 * @param array sugar_config
 */
function writeSugarConfig($sugar_config) {
    ksort($sugar_config);
    $sugar_config_string = "<?php\n" .
        '// created: ' . date('Y-m-d H:i:s') . "\n" .
        '$sugar_config = ' .
        var_export($sugar_config, true) .
        ";\n?>\n";
    if(is_writable('config.php')) {
        write_array_to_file( "sugar_config", $sugar_config, "config.php");
    }
}

/**
 * retrieves the name of the language
 */
if ( !function_exists('getLanguagePackName') ) {
function getLanguagePackName($the_file) {
    $app_list_strings = FileLoader::varFromInclude($the_file, 'app_list_strings');
    if( isset( $app_list_strings["language_pack_name"] ) ){
        return( $app_list_strings["language_pack_name"] );
    }
    return( "" );
}
}

function getInstalledLangPacks($showButtons=true) {
    global $mod_strings;
    global $next_step;

    $ret  = "<tr><td colspan=7 align=left>{$mod_strings['LBL_LANG_PACK_INSTALLED']}</td></tr>";
    $ret .= "<tr>
                <td width='15%' ><b>{$mod_strings['LBL_ML_NAME']}</b></td>
                <td width='15%' ><b>{$mod_strings['LBL_ML_VERSION']}</b></td>
                <td width='15%' ><b>{$mod_strings['LBL_ML_PUBLISHED']}</b></td>
                <td width='15%' ><b>{$mod_strings['LBL_ML_UNINSTALLABLE']}</b></td>
                <td width='15%' ><b>{$mod_strings['LBL_ML_DESCRIPTION']}</b></td>
                <td width='15%' ></td>
                <td width='15%' ></td>
            </tr>\n";
    $files = array();
    $files = findAllFiles(sugar_cached("upload/upgrades"), $files);

    if(isset($_SESSION['INSTALLED_LANG_PACKS']) && !empty($_SESSION['INSTALLED_LANG_PACKS'])){
        if (count($_SESSION['INSTALLED_LANG_PACKS']) > 0) {
            foreach($_SESSION['INSTALLED_LANG_PACKS'] as $file) {
                // handle manifest.php
                $target_manifest = remove_file_extension( $file ) . '-manifest.php';
                include($target_manifest);

                $name = empty($manifest['name']) ? $file : $manifest['name'];
                $version = empty($manifest['version']) ? '' : $manifest['version'];
                $published_date = empty($manifest['published_date']) ? '' : $manifest['published_date'];
                $icon = '';
                $description = empty($manifest['description']) ? 'None' : $manifest['description'];
                $uninstallable = empty($manifest['is_uninstallable']) ? 'No' : 'Yes';
                $manifest_type = $manifest['type'];

                $deletePackage = getPackButton('uninstall', $target_manifest, $file, $next_step, $uninstallable, $showButtons);
                $ret .= "<tr>";
                $ret .= "<td width='15%' >".$name."</td>";
                $ret .= "<td width='15%' >".$version."</td>";
                $ret .= "<td width='15%' >".$published_date."</td>";
                $ret .= "<td width='15%' >".$uninstallable."</td>";
                $ret .= "<td width='15%' >".$description."</td>";
                $ret .= "<td width='15%' ></td>";
                $ret .= "<td width='15%' >{$deletePackage}</td>";
                $ret .= "</tr>";
            }
        } else {
            $ret .= "</tr><td colspan=7><i>{$mod_strings['LBL_LANG_NO_PACKS']}</i></td></tr>";
        }
    } else {
        $ret .= "</tr><td colspan=7><i>{$mod_strings['LBL_LANG_NO_PACKS']}</i></td></tr>";
    }
    return $ret;
}

function getSugarConfigLanguageArray($langZip) {
    global $sugar_config;

    include(remove_file_extension($langZip)."-manifest.php");
    $ret = '';
    if(isset($installdefs['id']) && isset($manifest['name'])) {
        $ret = $installdefs['id']."::".$manifest['name']."::".$manifest['version'];
    }

    return $ret;
}



///////////////////////////////////////////////////////////////////////////////
////    FROM performSetup.php

function getInstallDbInstance()
{
    return DBManagerFactory::getTypeInstance($_SESSION['setup_db_type'], array("db_manager" => $_SESSION['setup_db_manager']));
}

function getDbConnection()
{
    $dbconfig = array(
                "db_host_name" => $_SESSION['setup_db_host_name'],
                "db_user_name" => $_SESSION['setup_db_admin_user_name'],
                "db_password" => $_SESSION['setup_db_admin_password'],
                "db_host_instance" => $_SESSION['setup_db_host_instance'],
                "db_port" => $_SESSION['setup_db_port_num'],
    );
    if(empty($_SESSION['setup_db_create_database'])) {
            $dbconfig["db_name"] = $_SESSION['setup_db_database_name'];
    }

    $db = getInstallDbInstance();
    if(!empty($_SESSION['setup_db_options'])) {
        $db->setOptions($_SESSION['setup_db_options']);
    }
    $db->connect($dbconfig, true);
    return $db;
}

/**
 * creates the Sugar DB user (if not admin)
 */
function handleDbCreateSugarUser() {
    global $mod_strings;
    global $setup_db_database_name;
    global $setup_db_host_name;
    global $setup_db_host_instance;
    global $setup_db_port_num;
    global $setup_db_admin_user_name;
    global $setup_db_admin_password;
    global $sugar_config;
    global $setup_db_sugarsales_user;
    global $setup_site_host_name;
    global $setup_db_sugarsales_password;

    echo $mod_strings['LBL_PERFORM_CREATE_DB_USER'];

    $db = getDbConnection();
    $db->createDbUser($setup_db_database_name, $setup_site_host_name, $setup_db_sugarsales_user, $setup_db_sugarsales_password);
    $err = $db->lastError();
    if($err == '')  {
        echo $mod_strings['LBL_PERFORM_DONE'];
    } else {
          echo "<div style='color:red;'>";
          echo "An error occurred when creating user:<br>";
          echo "$err<br>";
          echo "</div>";
          installLog("An error occurred when creating user: $err");
    }
}

/**
 * ensures that the charset and collation for a given database is set
 * MYSQL ONLY
 */
function handleDbCharsetCollation() {
    global $mod_strings;
    global $setup_db_database_name;
    global $setup_db_host_name;
    global $setup_db_admin_user_name;
    global $setup_db_admin_password;
    global $sugar_config;

    if($_SESSION['setup_db_type'] == 'mysql') {
        $db = getDbConnection();
        $platform = $db->getConnection()
            ->getDatabasePlatform();

        $db->query(
            sprintf(
                "ALTER DATABASE %s DEFAULT CHARACTER SET utf8mb4",
                $platform->quoteIdentifier($setup_db_database_name)
            ),
            true
        );

        $db->query(
            sprintf(
                "ALTER DATABASE %s DEFAULT COLLATE utf8mb4_general_ci",
                $platform->quoteIdentifier($setup_db_database_name)
            ),
            true
        );
    }
}


/**
 * creates the new database
 */
function handleDbCreateDatabase() {
    global $mod_strings;
    global $setup_db_database_name;
    global $setup_db_host_name;
    global $setup_db_host_instance;
    global $setup_db_port_num;
    global $setup_db_admin_user_name;
    global $setup_db_admin_password;
    global $sugar_config;

    echo "{$mod_strings['LBL_PERFORM_CREATE_DB_1']} {$setup_db_database_name} {$mod_strings['LBL_PERFORM_CREATE_DB_2']} {$setup_db_host_name}...";
    $db = getDbConnection();
    if($db->dbExists($setup_db_database_name)) {
        $db->dropDatabase($setup_db_database_name);
    }
    $db->createDatabase($setup_db_database_name);

    echo $mod_strings['LBL_PERFORM_DONE'];
}

function installLog($entry) {
    global $mod_strings;
    $nl = '
'.gmdate("Y-m-d H:i:s").'...';
    $log = clean_path(getcwd().'/install.log');

    // create if not exists
    if(!file_exists($log)) {
        $fp = @sugar_fopen($log, 'w+'); // attempts to create file
        if(!is_resource($fp)) {
            $GLOBALS['log']->fatal('could not create the install.log file');
        }
    } else {
        $fp = @sugar_fopen($log, 'a+'); // write pointer at end of file
        if(!is_resource($fp)) {
            $GLOBALS['log']->fatal('could not open/lock install.log file');
        }
    }



    if(@fwrite($fp, $nl.$entry) === false) {
        $GLOBALS['log']->fatal('could not write to install.log: '.$entry);
    }

    if(is_resource($fp)) {
        fclose($fp);
    }
}



/**
 * takes session vars and creates config.php
 * @return array bottle collection of error messages
 */
function handleSugarConfig() {
    global $bottle;
    global $cache_dir;
    global $mod_strings;
    global $setup_db_host_name;
    global $setup_db_host_instance;
    global $setup_db_port_num;
    global $setup_db_sugarsales_user;
    global $setup_db_sugarsales_password;
    global $setup_db_database_name;
    global $setup_site_host_name;
    global $setup_site_log_dir;
    global $setup_site_log_file;
    global $setup_site_session_path;
    global $setup_site_guid;
    global $setup_site_url;
    global $setup_sugar_version;
    global $sugar_config;
    global $setup_site_log_level;

    echo "<b>{$mod_strings['LBL_PERFORM_CONFIG_PHP']} (config.php)</b><br>";
    ///////////////////////////////////////////////////////////////////////////////
    ////    $sugar_config SETTINGS
    if( is_file('config.php') ){
        $is_writable = is_writable('config.php');
        // require is needed here (config.php is sometimes require'd from install.php)
        require('config.php');
    } else {
        $is_writable = is_writable('.');
    }

    // build default sugar_config and merge with new values
    $sugar_config = sugarArrayMerge(get_sugar_config_defaults(), $sugar_config);
    // always lock the installer
    $sugar_config['installer_locked'] = true;
    // we're setting these since the user was given a fair chance to change them
    $sugar_config['dbconfig']['db_host_name']       = $setup_db_host_name;
    if(!empty($setup_db_host_instance)) {
        $sugar_config['dbconfig']['db_host_instance']   = $setup_db_host_instance;
    } else {
        $sugar_config['dbconfig']['db_host_instance'] = '';
    }
    if(!isset($_SESSION['setup_db_manager'])) {
        $_SESSION['setup_db_manager'] = DBManagerFactory::getManagerByType($_SESSION['setup_db_type']);
    }
    $sugar_config['dbconfig']['db_user_name']       = $setup_db_sugarsales_user;
    $sugar_config['dbconfig']['db_password']        = $setup_db_sugarsales_password;
    $sugar_config['dbconfig']['db_name']            = $setup_db_database_name;
    $sugar_config['dbconfig']['db_type']            = $_SESSION['setup_db_type'];
    $sugar_config['dbconfig']['db_port']            = $setup_db_port_num;
    $sugar_config['dbconfig']['db_manager']         = $_SESSION['setup_db_manager'];
    if(!empty($_SESSION['setup_db_options'])) {
        $sugar_config['dbconfigoption']                 = array_merge($sugar_config['dbconfigoption'], $_SESSION['setup_db_options']);
    }

    $sugar_config['cache_dir']                      = $cache_dir;
    $sugar_config['default_charset']                = $mod_strings['DEFAULT_CHARSET'];
    $sugar_config['default_email_client']           = 'sugar';
    $sugar_config['default_email_editor']           = 'html';
    $sugar_config['host_name']                      = $setup_site_host_name;
    $sugar_config['js_custom_version']              = '';
    $sugar_config['use_real_names']                 = true;
    $sugar_config['disable_convert_lead']           = false;
    $sugar_config['log_dir']                        = $setup_site_log_dir;
    $sugar_config['log_file']                       = $setup_site_log_file;

    // It is possible to hide the Full Text Search Engine config form
    if (isset($_SESSION['setup_fts_hide_config'])) {
        $sugar_config['hide_full_text_engine_config'] = $_SESSION['setup_fts_hide_config'];
    }

    // Setup FTS settings
    if (!empty($_SESSION['setup_fts_type'])) {
        $sugar_config['full_text_engine'] = array(
            $_SESSION['setup_fts_type'] => getFtsSettings()
        );
    }

    // Consolidate logger settings under $config['logger'] as liked by the new logger
    $sugar_config['logger']	= array(
        'level' => $setup_site_log_level,
        'file' => array(
            'name' => 'sugarcrm',
            'dateFormat' => '%c',
            'maxSize' => '10MB',
            'maxLogs' => 10,
            'suffix' => '',
        ), // bug51583, change default suffix to blank for backwards comptability
    );

    $sugar_config['session_dir']                    = $setup_site_session_path;
    $sugar_config['site_url']                       = $setup_site_url;
    $sugar_config['sugar_version']                  = $setup_sugar_version;
    $sugar_config['tmp_dir']                        = $cache_dir.'xml/';
    $sugar_config['upload_dir']                 = 'upload/';
    $sugar_config['demoData'] = $_SESSION['demoData'];
    if( isset( $setup_site_guid ) ){
        $sugar_config['unique_key'] = $setup_site_guid;
    }
    if(empty($sugar_config['unique_key'])){
        $sugar_config['unique_key'] = get_unique_key();
    }

    // add installed langs to config
    // entry in upgrade_history comes AFTER table creation
    if(isset($_SESSION['INSTALLED_LANG_PACKS']) && ArrayFunctions::is_array_access($_SESSION['INSTALLED_LANG_PACKS']) && !empty($_SESSION['INSTALLED_LANG_PACKS'])) {
        foreach($_SESSION['INSTALLED_LANG_PACKS'] as $langZip) {
            $lang = getSugarConfigLanguageArray($langZip);
            if(!empty($lang)) {
                $exLang = explode('::', $lang);
                if(is_array($exLang) && count($exLang) == 3) {
                    $sugar_config['languages'][$exLang[0]] = $exLang[1];
                }
            }
        }
    }
    if(file_exists('install/lang.config.php')){
        include('install/lang.config.php');
        if(!empty($config['languages'])){
            foreach($config['languages'] as $lang=>$label){
                $sugar_config['languages'][$lang] = $label;
            }
        }
    }

    ksort($sugar_config);
    $sugar_config_string = "<?php\n" .
        '// created: ' . date('Y-m-d H:i:s') . "\n" .
        '$sugar_config = ' .
        var_export($sugar_config, true) .
        ";\n?>\n";
    if($is_writable && write_array_to_file( "sugar_config", $sugar_config, "config.php")) {
        // was 'Done'
    } else {
        echo 'failed<br>';
        echo "<p>{$mod_strings['ERR_PERFORM_CONFIG_PHP_1']}</p>\n";
        echo "<p>{$mod_strings['ERR_PERFORM_CONFIG_PHP_2']}</p>\n";
        echo "<TEXTAREA  rows=\"15\" cols=\"80\">".$sugar_config_string."</TEXTAREA>";
        echo "<p>{$mod_strings['ERR_PERFORM_CONFIG_PHP_3']}</p>";

        $bottle[] = $mod_strings['ERR_PERFORM_CONFIG_PHP_4'];
    }


    //Now merge the config_si.php settings into config.php
    if(file_exists('config.php') && file_exists('config_si.php'))
    {
       require_once('modules/UpgradeWizard/uw_utils.php');
       merge_config_si_settings(false, 'config.php', 'config_si.php');
    }
    $moduleInstallerClass = SugarAutoLoader::customClass('ModuleInstaller');
    $moduleInstallerClass::handlePortalConfig();
    $moduleInstallerClass::handleBaseConfig();
    ////    END $sugar_config
    ///////////////////////////////////////////////////////////////////////////////
    return $bottle;
}

/**
 * Get FTS settings
 * @return array
 */
function getFtsSettings()
{
    // Base settings
    $ftsSettings = array(
        'host' => $_SESSION['setup_fts_host'],
        'port' => $_SESSION['setup_fts_port'],
    );

    // Add optional settings
    $ftsOptional = array(
        'curl',
        'transport',
        'index_settings',
        'index_strategy',
    );

    foreach ($ftsOptional as $ftsOpt) {
        $ftsConfigKey = "setup_fts_{$ftsOpt}";
        if (!empty($_SESSION[$ftsConfigKey])) {
            $ftsSettings[$ftsOpt] = $_SESSION[$ftsConfigKey];
        }
    }

    return $ftsSettings;
}

/**
 * handles portal config creation
 */
function handlePortalConfig()
{
    $moduleInstallerClass = SugarAutoLoader::customClass('ModuleInstaller');
    return $moduleInstallerClass::handlePortalConfig();
}

function handleSidecarConfig()
{
    $moduleInstallerClass = SugarAutoLoader::customClass('ModuleInstaller');
    return $moduleInstallerClass::handleBaseConfig();
}

/**
 * Returns regular expressin patterns of the paths which should be forbidden to access form the web
 *
 * @return string[]
 */
function getForbiddenPaths()
{
    return [
        'package\.json',
        'yarn\.lock',
        'gulpfile\.js',
        'webpack\.config\.js',
        '\.git',
        '\.log$',
        '^bin/',
        '^cache/diagnostic/',
        '^composer\.(json|lock)$',
        '^cron\.php$',
        '^custom/blowfish/',
        '^dist/',
        '^emailmandelivery\.php$',
        '^files\.md5$',
        '^src/',
        '^upload/',
        '^upgrades/',
        '^vendor/(?!ytree.*\.(css|gif|js|png)$)',
// @codingStandardsIgnoreStart
        '^(cache|clients|data|examples|include|install|jssource|metadata|ModuleInstall|modules|soap|xtemplate)/.*\.(php|tpl)$',
// @codingStandardsIgnoreEnd
    ];
}

/**
 * Set up proper .htaccess content
 */
function getHtaccessData($htaccess_file)
{
    global $sugar_config;

    $contents = '';

    // Adding RewriteBase path for vhost and alias configurations
    $basePath = parse_url($sugar_config['site_url'], PHP_URL_PATH);
    if(empty($basePath)) $basePath = '/';

    $restrict_str = <<<EOQ
# BEGIN SUGARCRM RESTRICTIONS

EOQ;
    if (ini_get('suhosin.perdir') !== false && strpos(ini_get('suhosin.perdir'), 'e') !== false)
    {
        $restrict_str .= "php_value suhosin.executor.include.whitelist upload\n";
    }

    $restrict_str .= <<<EOQ
# Fix mimetype for logo.svg (SP-1395)
AddType     image/svg+xml     .svg
AddType     application/json  .json
AddType     application/javascript  .js

<IfModule mod_rewrite.c>
    Options +FollowSymLinks
    RewriteEngine On
    RewriteBase {$basePath}

EOQ;

    foreach (getForbiddenPaths() as $path) {
        $restrict_str .= sprintf('    RewriteRule (?i)%s - [F]', $path) . PHP_EOL;
    }

// @codingStandardsIgnoreStart
    $restrict_str .= <<<EOQ

    RewriteCond %{REQUEST_FILENAME} !-d
    RewriteCond %{REQUEST_FILENAME} !-f
    RewriteRule ^rest/(.*)$ api/rest.php?__sugar_url=$1 [L,QSA]
    RewriteCond %{REQUEST_FILENAME} !-d
    RewriteCond %{REQUEST_FILENAME} !-f
    RewriteRule ^cache/api/metadata/lang_(.._..)_(.*)_public(_ordered)?\.json$ rest/v10/lang/public/$1?platform=$2&ordered=$3 [N,QSA,DPI]

    RewriteRule ^cache/api/metadata/lang_(.._..)_([^_]*)(_ordered)?\.json$ rest/v10/lang/$1?platform=$2&ordered=$3 [N,QSA,DPI]
    RewriteCond %{REQUEST_FILENAME} !-d
    RewriteCond %{REQUEST_FILENAME} !-f
    RewriteRule ^cache/Expressions/functions_cache(_debug)?.js$ rest/v10/ExpressionEngine/functions?debug=$1 [N,QSA,DPI]
    RewriteRule ^cache/jsLanguage/(.._..).js$ index.php?entryPoint=jslang&module=app_strings&lang=$1 [L,QSA,DPI]
    RewriteRule ^cache/jsLanguage/(\w*)/(.._..).js$ index.php?entryPoint=jslang&module=$1&lang=$2 [L,QSA,DPI]
    RewriteRule ^oauth-handler/(.*)$ index.php?module=EAPM&action=$1 [L,QSA]
    RewriteRule ^portal/(.*)$ portal2/$1 [L,QSA]
    RewriteRule ^portal$ portal/? [R=301,L]
</IfModule>

<IfModule mod_mime.c>
    AddType application/x-font-woff .woff
</IfModule>
<FilesMatch "\.(jpg|png|gif|js|css|ico|woff|svg)$">
        <IfModule mod_headers.c>
                Header set ETag ""
                Header set Cache-Control "max-age=2592000"
                Header set Expires "01 Jan 2112 00:00:00 GMT"
        </IfModule>
</FilesMatch>
<IfModule mod_expires.c>
        ExpiresByType text/css "access plus 1 month"
        ExpiresByType text/javascript "access plus 1 month"
        ExpiresByType application/x-javascript "access plus 1 month"
        ExpiresByType image/gif "access plus 1 month"
        ExpiresByType image/jpg "access plus 1 month"
        ExpiresByType image/png "access plus 1 month"
        ExpiresByType application/x-font-woff "access plus 1 month"
        ExpiresByType image/svg "access plus 1 month"
</IfModule>
<IfModule mod_headers.c>
        Header always set X-Frame-Options "SAMEORIGIN"
</IfModule>
# END SUGARCRM RESTRICTIONS

EOQ;
    // @codingStandardsIgnoreEnd

        if(file_exists($htaccess_file)){
            $fp = fopen($htaccess_file, 'r');
            $skip = false;
            while($line = fgets($fp)){

                if(preg_match("/\s*#\s*BEGIN\s*SUGARCRM\s*RESTRICTIONS/i", $line))$skip = true;
                if(!$skip)$contents .= $line;
                if(preg_match("/\s*#\s*END\s*SUGARCRM\s*RESTRICTIONS/i", $line))$skip = false;
            }
        }

        return $contents . $restrict_str;
}

/**
 * (re)write the .htaccess file to set up proper protections and redirections
 */
function handleHtaccess()
{
    global $mod_strings;
    $htaccess_file   = ".htaccess";
    $status =  file_put_contents(".htaccess", getHtaccessData($htaccess_file));
        if( !$status ) {
            echo "<p>{$mod_strings['ERR_PERFORM_HTACCESS_1']}<span class=stop>{$htaccess_file}</span> {$mod_strings['ERR_PERFORM_HTACCESS_2']}</p>\n";
            echo "<p>{$mod_strings['ERR_PERFORM_HTACCESS_3']}</p>\n";
            echo $restrict_str;
        }

    return $status;
}

/**
 * (re)write the web.config file to prevent browser access to the log file
 *
 * @param bool $iisCheck If upgrade running from CLI IIS_UrlRewriteModule not set. So for CliUpgrader can skip it
 * @link https://docs.microsoft.com/en-us/iis/extensions/url-rewrite-module/url-rewrite-module-configuration-reference
 */
function handleWebConfig($iisCheck = true)
{
    if (!isset($_SERVER['IIS_UrlRewriteModule']) && $iisCheck) {
        return;
    }

    $redirect_config_array = array(
    array('1' => '^portal$', '2' => 'portal/'),
    );

    $rewrite_config_array = array(
        array(
            '1' => '^cache/api/metadata/lang_(.._..)_(.*)_public(_ordered)?\.json',
            '2' => 'rest/v10/lang/public/{R:1}?platform={R:2}&ordered={R:3}',
            'rule_params' => array(
                'stopProcessing' => 'false',
            ),
            'action_params' => array(
                'appendQueryString' => 'false',
            ),
            'skip_file' => true
        ),
        array(
            '1' => '^cache/api/metadata/lang_(.._..)_([^_]*)(_ordered)?\.json',
            '2' => 'rest/v10/lang/{R:1}?platform={R:2}&ordered={R:3}',
            'rule_params' => array(
                'stopProcessing' => 'false',
            ),
            'action_params' => array(
                'appendQueryString' => 'false',
            ),
            'skip_file' => true
        ),
        array(
            '1' => '^cache/Expressions/functions_cache(_debug)?.js$',
            '2' => 'rest/v10/ExpressionEngine/functions?debug={R:1}',
            'rule_params' => array(
                'stopProcessing' => 'false',
            ),
            'action_params' => array(
                'appendQueryString' => 'false',
            ),
        ),
        array(
            '1' => '^portal/(.*)$',
            '2' => 'portal2/{R:1}',
        ),
        array(
            '1' => 'rest/(.*)$',
            '2' => 'api/rest.php?__sugar_url={R:1}',
        ),
        [
            '1' => '^oauth-handler/(.*)$',
            '2' => 'index.php?module=EAPM&action={R:1}',
        ],
    );

    $xmldoc = new XMLWriter();
    $xmldoc->openURI('web.config');
    echo "<p>Begin rebuilding web.config</p>\n";
    $xmldoc->setIndent(true);
    $xmldoc->setIndentString(' ');
    $xmldoc->startDocument('1.0','UTF-8');
    echo "<p>Rebuilding UTF-8 document</p>\n";
    $xmldoc->startElement('configuration');
    echo "<p>Rebuilding configuration element</p>\n";
        $xmldoc->startElement('system.webServer');
        echo "<p>Rebuilding system.webServer element</p>\n";
            $xmldoc->startElement('httpProtocol');
                $xmldoc->startElement('customHeaders');
                    $xmldoc->startElement('add');
                        $xmldoc->writeAttribute('name', 'X-Frame-Options');
                        $xmldoc->writeAttribute('value', 'SAMEORIGIN');
                    $xmldoc->endElement();
                $xmldoc->endElement();
            $xmldoc->endElement();
            $xmldoc->startElement('security');
                $xmldoc->startElement('requestFiltering');
                    $xmldoc->startElement('requestLimits');
                        $xmldoc->writeAttribute('maxAllowedContentLength', '104857600');
                    $xmldoc->endElement();
                $xmldoc->endElement();
            $xmldoc->endElement();
            $xmldoc->startElement('rewrite');
            echo "<p>Rebuilding rewrite element</p>\n";
                $xmldoc->startElement('rules');

    $i = 0;

    foreach (getForbiddenPaths() as $path) {
        $xmldoc->startElement('rule');
        $xmldoc->writeAttribute('name', sprintf('forbid-%02d', ++$i));
        $xmldoc->writeAttribute('stopProcessing', 'true');
        $xmldoc->startElement('match');
        $xmldoc->writeAttribute('url', $path);
        $xmldoc->endElement();
        $xmldoc->startElement('action');
        $xmldoc->writeAttribute('type', 'CustomResponse');
        $xmldoc->writeAttribute('statusCode', '403');
        $xmldoc->writeAttribute('statusReason', 'Forbidden by SugarCRM');
        $xmldoc->endElement();
        $xmldoc->endElement();
    }

                for ($i = 0; $i < count($redirect_config_array); $i++) {
                    $xmldoc->startElement('rule');
                        $xmldoc->writeAttribute('name', "redirect$i");
                        $xmldoc->writeAttribute('stopProcessing', 'true');
                        $xmldoc->startElement('match');
                            $xmldoc->writeAttribute('url', $redirect_config_array[$i]['1']);
                        $xmldoc->endElement();
                        $xmldoc->startElement('action');
                            $xmldoc->writeAttribute('type', 'Redirect');
                            $xmldoc->writeAttribute('url', $redirect_config_array[$i]['2']);
                            $xmldoc->writeAttribute('redirectType', 'Found');
                        $xmldoc->endElement();
                    $xmldoc->endElement();
                }
                for ($i = 0; $i < count($rewrite_config_array); $i++) {
                    $xmldoc->startElement('rule');
                        $xmldoc->writeAttribute('name', "rewrite$i");
                        $xmldoc->writeAttribute('patternSyntax', 'ECMAScript');
                        if(!empty($rewrite_config_array[$i]['rule_params'])) {
                            foreach($rewrite_config_array[$i]['rule_params'] as $ruleAttrName => $ruleAttrValue) {
                                $xmldoc->writeAttribute($ruleAttrName, $ruleAttrValue);
                            }
                        }
                        $xmldoc->startElement('match');
                            $xmldoc->writeAttribute('url', $rewrite_config_array[$i]['1']);
                            $xmldoc->writeAttribute('ignoreCase', 'true');
                        $xmldoc->endElement();
                        if (empty($rewrite_config_array[$i]['skip_file'])) {
                            $xmldoc->startElement('conditions');
                               $xmldoc->startElement('add');
                                   $xmldoc->writeAttribute('input', '{REQUEST_FILENAME}');
                                   $xmldoc->writeAttribute('matchType', 'IsFile');
                                   $xmldoc->writeAttribute('negate', 'true');
                               $xmldoc->endElement();
                               $xmldoc->startElement('add');
                                   $xmldoc->writeAttribute('input', '{REQUEST_FILENAME}');
                                   $xmldoc->writeAttribute('matchType', 'IsDirectory');
                                   $xmldoc->writeAttribute('negate', 'true');
                               $xmldoc->endElement();
                            $xmldoc->endElement();
                        }

                        $xmldoc->startElement('action');
                            $xmldoc->writeAttribute('type', 'Rewrite');
                            $xmldoc->writeAttribute('url', $rewrite_config_array[$i]['2']);
                            if(!empty($rewrite_config_array[$i]['action_params'])) {
                                foreach($rewrite_config_array[$i]['action_params'] as $actionAttrName => $actionAttrValue) {
                                    $xmldoc->writeAttribute($actionAttrName, $actionAttrValue);
                                }
                            }
                        $xmldoc->endElement();
                    $xmldoc->endElement();
                }
                $xmldoc->endElement();
            $xmldoc->endElement();
            $xmldoc->startElement('caching');
            echo "<p>Rebuilding caching element</p>\n";
                $xmldoc->startElement('profiles');
                    $xmldoc->startElement('remove');
                        $xmldoc->writeAttribute('extension', ".php");
                    $xmldoc->endElement();
                $xmldoc->endElement();
            $xmldoc->endElement();
            $xmldoc->startElement('staticContent');
            echo "<p>Rebuilding staticContent element</p>\n";
                $xmldoc->startElement("clientCache");
                    $xmldoc->writeAttribute('cacheControlMode', 'UseMaxAge');
                    $xmldoc->writeAttribute('cacheControlMaxAge', '30.00:00:00');
                $xmldoc->endElement();
            $xmldoc->endElement();
        $xmldoc->endElement();
    $xmldoc->endElement();
    $xmldoc->endDocument();
    $xmldoc->flush();
    echo "<p>web.config is rebuilt</p>\n";
}

/**
 * Drop old tables if table exists and told to drop it
 */
function drop_table_install( &$focus ){
    global $db;
    global $dictionary;

    $result = $db->tableExists($focus->table_name);

    if( $result ){
        $focus->drop_tables();
        $GLOBALS['log']->info("Dropped old ".$focus->table_name." table.");
        return 1;
    }
    else {
        $GLOBALS['log']->info("Did not need to drop old ".$focus->table_name." table.  It doesn't exist.");
        return 0;
    }
}

// Creating new tables if they don't exist.
function create_table_if_not_exist( &$focus ){
    global  $db;
    $table_created = false;

    // normal code follows
    $result = $db->tableExists($focus->table_name);
    if($result){
        $GLOBALS['log']->info("Table ".$focus->table_name." already exists.");
    } else {
        $focus->create_tables();
        $GLOBALS['log']->info("Created ".$focus->table_name." table.");
        $table_created = true;
    }
    return $table_created;
}



function create_default_users(){
    global $db;
    global $setup_site_admin_password;
    global $setup_site_admin_user_name;
    global $create_default_user;
    global $sugar_config;
    global $setup_site_admin_email;

    require_once('install/UserDemoData.php');

    //Create default admin user
    $user = new User();
    $user->id = 1;
    $user->new_with_id = true;
    $user->last_name = 'Administrator';
    $user->user_name = $setup_site_admin_user_name;
    $user->title = "Administrator";
    $user->status = 'Active';
    $user->is_admin = true;
    $user->employee_status = 'Active';
    $user->user_hash = User::getPasswordHash($setup_site_admin_password);
    $user->email = '';
    $user->picture = UserDemoData::_copy_user_image($user->id);
    $user->save();

    if (!empty($setup_site_admin_email)) {
        $user->emailAddress->addAddress($setup_site_admin_email, true);
        $user->emailAddress->save($user->id, $user->module_dir);
    }

    //Bug#53793: Keep default current user in the global variable in order to store 'created_by' info as default user
    //           while installation is proceed.
    $GLOBALS['current_user'] = $user;


    if( $create_default_user ){
        $default_user = new User();
        $default_user->last_name = $sugar_config['default_user_name'];
        $default_user->user_name = $sugar_config['default_user_name'];
        $default_user->status = 'Active';
        if( isset($sugar_config['default_user_is_admin']) && $sugar_config['default_user_is_admin'] ){
            $default_user->is_admin = true;
        }
        $default_user->user_hash = User::getPasswordHash($sugar_config['default_password']);
        $default_user->save();
    }
}

function set_admin_password( $password ) {
    global $db;

    $user_hash = User::getPasswordHash($password);

    $query = "update users set user_hash='$user_hash' where id='1'";

    $db->query($query);
}

function insert_default_settings(){
    global $db;
    global $setup_sugar_version;
    global $sugar_db_version;


    $db->query("INSERT INTO config (category, name, value) VALUES ('notify', 'fromaddress', 'do_not_reply@example.com')");
    $db->query("INSERT INTO config (category, name, value) VALUES ('notify', 'fromname', 'SugarCRM')");
    $db->query("INSERT INTO config (category, name, value) VALUES ('notify', 'send_by_default', '1')");
    $db->query("INSERT INTO config (category, name, value) VALUES ('notify', 'on', '1')");
    $db->query("INSERT INTO config (category, name, value) VALUES ('notify', 'send_from_assigning_user', '0')");
    $db->query("INSERT INTO config (category, name, value) VALUES ('info', 'sugar_version', '" . $sugar_db_version . "')");
    $db->query("INSERT INTO config (category, name, value) VALUES ('MySettings', 'tab', '')");
    $db->query("INSERT INTO config (category, name, value, platform) VALUES ('portal', 'on', '0', 'support')");

    // license info
    $db->query( "INSERT INTO config (category, name, value) VALUES ( 'license', 'users',        '0' )" );
    $db->query( "INSERT INTO config (category, name, value) VALUES ( 'license', 'expire_date',  '' )" );
    $db->query( "INSERT INTO config (category, name, value) VALUES ( 'license', 'key',          '' )" );

    //insert default tracker settings
    $db->query("INSERT INTO config (category, name, value) VALUES ('tracker', 'Tracker', '1')");

    $db->query("INSERT INTO config (category, name, value) VALUES ('tracker', 'tracker_perf', '1')");
    $db->query("INSERT INTO config (category, name, value) VALUES ('tracker', 'tracker_sessions', '1')");
    $db->query("INSERT INTO config (category, name, value) VALUES ('tracker', 'tracker_queries', '1')");

    $db->query( "INSERT INTO config (category, name, value) VALUES ( 'system', 'skypeout_on', '1')" );
    $db->query( "INSERT INTO config (category, name, value) VALUES ( 'system', 'tweettocase_on', '0' )");

}

function update_license_settings($users, $expire_date, $key)
{
    global $db;

    $query = "DELETE FROM config WHERE category='license' AND name='users'";
    $db->query($query);

    $connection = $db->getConnection();
    $connection
        ->insert(
            'config',
            ['value' => $users, 'category' => 'license', 'name' => 'users']
        );

    $query = "DELETE FROM config WHERE category='license' AND name='expire_date'";
    $db->query($query);

    $connection
        ->insert(
            'config',
            ['value' => $expire_date, 'category' => 'license', 'name' => 'expire_date']
        );

    $query = "DELETE FROM config WHERE category='license' AND name='key'";
    $db->query($query);

    $connection
        ->insert(
            'config',
            ['value' => $key, 'category' => 'license', 'name' => 'key']
        );

    $connection->insert(
        'config',
        ['value' => getSiteHash($key), 'category' => 'site', 'name' => 'id']
    );
}

// Returns true if the given file/dir has been made writable (or is already
// writable).
function make_writable($file)
{
    $ret_val = false;
    if(is_file($file) || is_dir($file))
    {
        if(is_writable($file))
        {
            $ret_val = true;
        }
        else
        {
            $original_fileperms = fileperms($file);

            // add user writable permission
            $new_fileperms = $original_fileperms | 0x0080;
            @sugar_chmod($file, $new_fileperms);
            clearstatcache();
            if(is_writable($file))
            {
                $ret_val = true;
            }
            else
            {
                // add group writable permission
                $new_fileperms = $original_fileperms | 0x0010;
                @chmod($file, $new_fileperms);
                clearstatcache();
                if(is_writable($file))
                {
                    $ret_val = true;
                }
                else
                {
                    // add world writable permission
                    $new_fileperms = $original_fileperms | 0x0002;
                    @chmod($file, $new_fileperms);
                    clearstatcache();
                    if(is_writable($file))
                    {
                        $ret_val = true;
                    }
                }
            }
        }
    }

    return $ret_val;
}

function recursive_make_writable($start_file)
    {
    $ret_val = make_writable($start_file);

    if($ret_val && is_dir($start_file))
    {
        // PHP 4 alternative to scandir()
        $files = array();
        $dh = opendir($start_file);
        $filename = readdir($dh);
        while(!empty($filename))
        {
            if($filename != '.' && $filename != '..' && $filename != '.svn')
            {
                $files[] = $filename;
            }

            $filename = readdir($dh);
        }

        foreach($files as $file)
        {
            $ret_val = recursive_make_writable($start_file . '/' . $file);

            if(!$ret_val)
            {
                $_SESSION['unwriteable_module_files'][dirname($file)] = dirname($file);
                $fnl_ret_val = false;
            }
        }
    }
            if(!$ret_val)
            {
                $unwriteable_directory = is_dir($start_file) ? $start_file : dirname($start_file);
                if($unwriteable_directory[0] == '.'){$unwriteable_directory = substr($unwriteable_directory,1);}
                $_SESSION['unwriteable_module_files'][$unwriteable_directory] = $unwriteable_directory;
                $_SESSION['unwriteable_module_files']['failed'] = true;
            }

    return $ret_val;
}

function recursive_is_writable($start_file)
{
    $ret_val = is_writable($start_file);

    if($ret_val && is_dir($start_file))
    {
        // PHP 4 alternative to scandir()
        $files = array();
        $dh = opendir($start_file);
        $filename = readdir($dh);
        while(!empty($filename))
        {
            if($filename != '.' && $filename != '..' && $filename != '.svn')
            {
                $files[] = $filename;
            }

            $filename = readdir($dh);
        }

        foreach($files as $file)
        {
            $ret_val = recursive_is_writable($start_file . '/' . $file);

            if(!$ret_val)
            {
                break;
            }
        }
    }

    return $ret_val;
}

// one place for form validation/conversion to boolean
function get_boolean_from_request( $field ){
    if( !isset($_REQUEST[$field]) ){
        return( false );
    }

    if( ($_REQUEST[$field] == 'on') || ($_REQUEST[$field] == 'yes') ){
        return(true);
    }
    else {
        return(false);
    }
}

function stripslashes_checkstrings($value){
   if(is_string($value)){
      return stripslashes($value);
   }
   return $value;
}


function print_debug_array( $name, $debug_array ){
    ksort( $debug_array );

    print( "$name vars:\n" );
    print( "(\n" );

    foreach( $debug_array as $key => $value ){
        if( stristr( $key, "password" ) ){
            $value = "WAS SET";
        }
        print( "    [$key] => $value\n" );
    }

    print( ")\n" );
}

function print_debug_comment(){
    if( !empty($_REQUEST['debug']) ){
        $_SESSION['debug'] = $_REQUEST['debug'];
    }

    if( !empty($_SESSION['debug']) && ($_SESSION['debug'] == 'true') ){
        print( "<!-- debug is on (to turn off, hit any page with 'debug=false' as a URL parameter.\n" );

        print_debug_array( "Session",   $_SESSION );
        print_debug_array( "Request",   $_REQUEST );
        print_debug_array( "Post",      $_POST );
        print_debug_array( "Get",       $_GET );

        print_r( "-->\n" );
    }
}

function validate_systemOptions() {
    global $mod_strings;
    $errors = array();
    if(!empty($_SESSION['setup_db_type']) && trim($_SESSION['setup_db_type']) != '') {
        $db = DBManagerFactory::getTypeInstance($_SESSION['setup_db_type']);
        if(!empty($db)) {
            $_SESSION['setup_db_manager'] = get_class($db);
            return $errors;
        }
    }
    $errors[] = "<span class='error'>".$mod_strings['ERR_DB_INVALID']."</span>";
    return $errors;
}


function validate_dbConfig() {
    global $mod_strings;
    require_once('install/checkDBSettings.php');
    return checkDBSettings(true);
}

function validate_siteConfig($type){
    global $mod_strings;
   $errors = array();

   if($type=='a'){
       if(empty($_SESSION['setup_system_name'])){
            $errors[] = "<span class='error'>".$mod_strings['LBL_REQUIRED_SYSTEM_NAME']."</span>";
       }
       if($_SESSION['setup_site_url'] == ''){
          $errors[] = "<span class='error'>".$mod_strings['ERR_URL_BLANK']."</span>";
       }

       if($_SESSION['setup_site_admin_user_name'] == '') {
          $errors[] = "<span class='error'>".$mod_strings['ERR_ADMIN_USER_NAME_BLANK']."</span>";
       }

       if($_SESSION['setup_site_admin_password'] == ''){
          $errors[] = "<span class='error'>".$mod_strings['ERR_ADMIN_PASS_BLANK']."</span>";
       }

       if($_SESSION['setup_site_admin_password'] != $_SESSION['setup_site_admin_password_retype']){
          $errors[] = "<span class='error'>".$mod_strings['ERR_PASSWORD_MISMATCH']."</span>";
       }
   }else{
       if(!empty($_SESSION['setup_site_custom_session_path']) && $_SESSION['setup_site_session_path'] == ''){
          $errors[] = "<span class='error'>".$mod_strings['ERR_SESSION_PATH']."</span>";
       }

       if(!empty($_SESSION['setup_site_custom_session_path']) && $_SESSION['setup_site_session_path'] != ''){
          if(is_dir($_SESSION['setup_site_session_path'])){
             if(!is_writable($_SESSION['setup_site_session_path'])){
                $errors[] = "<span class='error'>".$mod_strings['ERR_SESSION_DIRECTORY']."</span>";
             }
          }
          else {
             $errors[] = "<span class='error'>".$mod_strings['ERR_SESSION_DIRECTORY_NOT_EXISTS']."</span>";
          }
       }

       if(!empty($_SESSION['setup_site_custom_log_dir']) && $_SESSION['setup_site_log_dir'] == ''){
          $errors[] = "<span class='error'>".$mod_strings['ERR_LOG_DIRECTORY_NOT_EXISTS']."</span>";
       }

       if(!empty($_SESSION['setup_site_custom_log_dir']) && $_SESSION['setup_site_log_dir'] != ''){
          if(is_dir($_SESSION['setup_site_log_dir'])){
             if(!is_writable($_SESSION['setup_site_log_dir'])) {
                $errors[] = "<span class='error'>".$mod_strings['ERR_LOG_DIRECTORY_NOT_WRITABLE']."</span>";
             }
          }
          else {
             $errors[] = "<span class='error'>".$mod_strings['ERR_LOG_DIRECTORY_NOT_EXISTS']."</span>";
          }
       }

       if(!empty($_SESSION['setup_site_specify_guid']) && $_SESSION['setup_site_guid'] == ''){
          $errors[] = "<span class='error'>".$mod_strings['ERR_SITE_GUID']."</span>";
       }
   }

   return $errors;
}


function pullSilentInstallVarsIntoSession() {
    global $mod_strings;
    global $sugar_config;


    if( file_exists('config_si.php') ){
        require_once('config_si.php');
    }
    else if( empty($sugar_config_si) ){
        die( $mod_strings['ERR_SI_NO_CONFIG'] );
    }

    $config_subset = array (
        'setup_site_url'                => isset($sugar_config['site_url']) ? $sugar_config['site_url'] : '',
        'setup_db_host_name'            => isset($sugar_config['dbconfig']['db_host_name']) ? $sugar_config['dbconfig']['db_host_name'] : '',
        'setup_db_host_instance'        => isset($sugar_config['dbconfig']['db_host_instance']) ? $sugar_config['dbconfig']['db_host_instance'] : '',
        'setup_db_sugarsales_user'      => isset($sugar_config['dbconfig']['db_user_name']) ? $sugar_config['dbconfig']['db_user_name'] : '',
        'setup_db_sugarsales_password'  => isset($sugar_config['dbconfig']['db_password']) ? $sugar_config['dbconfig']['db_password'] : '',
        'setup_db_database_name'        => isset($sugar_config['dbconfig']['db_name']) ? $sugar_config['dbconfig']['db_name'] : '',
        'setup_db_type'                 => isset($sugar_config['dbconfig']['db_type']) ? $sugar_config['dbconfig']['db_type'] : '',
        'setup_db_port_num'             => isset($sugar_config['dbconfig']['db_port']) ? $sugar_config['dbconfig']['db_port'] : '',
        'setup_db_options'              => !empty($sugar_config['dbconfigoptions']) ? $sugar_config['dbconfigoptions'] : array(),
    );
    // third array of values derived from above values
    $derived = array (
        'setup_site_admin_password_retype'      => $sugar_config_si['setup_site_admin_password'],
        'setup_db_sugarsales_password_retype'   => $config_subset['setup_db_sugarsales_password'],
    );

    if(isset($sugar_config_si['install_method']))
        $derived['install_method'] = $sugar_config_si['install_method'];

    $needles = array(
        'setup_db_create_database',
        'setup_db_create_sugarsales_user',
        'setup_license_key_users',
        'setup_license_key_expire_date',
        'setup_license_key',
        'default_currency_iso4217',
        'default_currency_name',
        'default_currency_significant_digits',
        'default_currency_symbol',
        'default_date_format',
        'default_time_format',
        'default_decimal_seperator',
        'default_export_charset',
        'default_language',
        'default_locale_name_format',
        'default_number_grouping_seperator',
        'export_delimiter',
        'cache_dir',
        'setup_db_options',

        // Base Elastic settings
        'setup_fts_type',
        'setup_fts_host',
        'setup_fts_port',

        // Optional Elastic settings only supported through silent installer
        'setup_fts_curl',
        'setup_fts_transport',
        'setup_fts_index_settings',
        'setup_fts_index_strategy',

    );
    copyFromArray($sugar_config_si, $needles, $derived);
    $all_config_vars = array_merge( $config_subset, $sugar_config_si, $derived );

    // bug 16860 tyoung -  trim leading and trailing whitespace from license_key
    if (isset($all_config_vars['setup_license_key'])) {
        $all_config_vars['setup_license_key'] = trim($all_config_vars['setup_license_key']);
    }

    foreach( $all_config_vars as $key => $value ){
        $_SESSION[$key] = $value;
    }

    // for silent install
    if (empty($_SESSION['setup_fts_type'])) {
        installLog("ERROR::  {$mod_strings['LBL_FTS_REQUIRED']}");
    }
}

/**
 * given an array it will check to determine if the key exists in the array, if so
 * it will addd to the return array
 *
 * @param intput_array haystack to check
 * @param needles list of needles to search for
 * @param output_array the array to add the keys to
 */
function copyFromArray($input_array, $needles, $output_array){
    foreach($needles as $needle){
         if(isset($input_array[$needle])){
            $output_array[$needle]  = $input_array[$needle];
         }
    }
}

function getLicenseDisplay($type, $manifest, $zipFile, $next_step, $license_file, $clean_file) {
    return PackageManagerDisplay::getLicenseDisplay($license_file, 'install.php', $next_step, $zipFile, $type, $manifest, $clean_file);
}


/**
 * creates the remove/delete form for langpack page
 * @param string type commit/remove
 * @param string manifest path to manifest file
 * @param string zipFile path to uploaded zip file
 * @param int nextstep current step
 * @return string ret <form> for this package
 */
function getPackButton($type, $manifest, $zipFile, $next_step, $uninstallable='Yes', $showButtons=true) {
    global $mod_strings;

    $button = $mod_strings['LBL_LANG_BUTTON_COMMIT'];
    if($type == 'remove') {
        $button = $mod_strings['LBL_LANG_BUTTON_REMOVE'];
    } elseif($type == 'uninstall') {
        $button = $mod_strings['LBL_LANG_BUTTON_UNINSTALL'];
    }

    $disabled = ($uninstallable == 'Yes') ? false : true;

    $ret = "<form name='delete{$zipFile}' action='install.php' method='POST'>
                <input type='hidden' name='current_step' value='{$next_step}'>
                <input type='hidden' name='goto' value='{$mod_strings['LBL_CHECKSYS_RECHECK']}'>
                <input type='hidden' name='languagePackAction' value='{$type}'>
                <input type='hidden' name='manifest' value='".urlencode($manifest)."'>
                <input type='hidden' name='zipFile' value='".urlencode($zipFile)."'>
                <input type='hidden' name='install_type' value='custom'>";
    if(!$disabled && $showButtons) {
        $ret .= "<input type='submit' value='{$button}' class='button'>";
    }
    $ret .= "</form>";
    return $ret;
}

/**
 * finds all installed languages and returns an array with the names
 * @return array langs array of installed languages
 */
function getInstalledLanguages() {
    $langDir = 'include/language/';
    $dh = opendir($langDir);

    $langs = array();
    while($file = readdir($dh)) {
        if(substr($file, -3) == 'php') {

        }
    }
}



/**
 * searches upgrade dir for lang pack files.
 *
 * @return string HTML of available lang packs
 */
function getLangPacks($display_commit = true, $types = array('langpack'), $notice_text = '') {
    global $mod_strings;
    global $next_step;
    global $base_upgrade_dir;

    if(empty($notice_text)){
        $notice_text =  $mod_strings['LBL_LANG_PACK_READY'];
    }
    $ret = "<tr><td colspan=7 align=left>{$notice_text}</td></tr>";
    $ret .= "<tr>
                <td width='20%' ><b>{$mod_strings['LBL_ML_NAME']}</b></td>
                <td width='15%' ><b>{$mod_strings['LBL_ML_VERSION']}</b></td>
                <td width='15%' ><b>{$mod_strings['LBL_ML_PUBLISHED']}</b></td>
                <td width='15%' ><b>{$mod_strings['LBL_ML_UNINSTALLABLE']}</b></td>
                <td width='20%' ><b>{$mod_strings['LBL_ML_DESCRIPTION']}</b></td>
                <td width='7%' ></td>
                <td width='1%' ></td>
                <td width='7%' ></td>
            </tr>\n";
    $files = array();

    // duh, new installs won't have the upgrade folders
   if(!is_dir($base_upgrade_dir)) {
        mkdir_recursive( $base_upgrade_dir);
    }
    $subdirs = array('full', 'langpack', 'module', 'patch', 'theme', 'temp');
    foreach( $subdirs as $subdir ){
        mkdir_recursive( "$base_upgrade_dir/$subdir" );
    }

    $files = findAllFiles($base_upgrade_dir, $files);
    $hidden_input = '';
    unset($_SESSION['hidden_input']);

    foreach($files as $file) {
        if(!preg_match("#.*\.zip\$#", $file)) {
            continue;
        }

        // skip installed lang packs
        if(isset($_SESSION['INSTALLED_LANG_PACKS']) && in_array($file, $_SESSION['INSTALLED_LANG_PACKS'])) {
            continue;
        }

        // handle manifest.php
        $target_manifest = remove_file_extension( $file ) . '-manifest.php';
        $license_file = remove_file_extension( $file ) . '-license.txt';
        include($target_manifest);

        if(!empty($types)){
            if(!in_array(strtolower($manifest['type']), $types))
                continue;
        }

        $md5_matches = array();
        if($manifest['type'] == 'module'){
            $uh = new UpgradeHistory();
            $upgrade_content = clean_path($file);
            $the_base = basename($upgrade_content);
            $the_md5 = md5_file($upgrade_content);
            $md5_matches = $uh->findByMd5($the_md5);
        }

        if($manifest['type']!= 'module' || 0 == sizeof($md5_matches)){
            $name = empty($manifest['name']) ? $file : $manifest['name'];
            $version = empty($manifest['version']) ? '' : $manifest['version'];
            $published_date = empty($manifest['published_date']) ? '' : $manifest['published_date'];
            $icon = '';
            $description = empty($manifest['description']) ? 'None' : $manifest['description'];
            $uninstallable = empty($manifest['is_uninstallable']) ? 'No' : 'Yes';
            $manifest_type = $manifest['type'];
            $commitPackage = getPackButton('commit', $target_manifest, $file, $next_step);
            $deletePackage = getPackButton('remove', $target_manifest, $file, $next_step);
            $ret .= "<tr>";
            $ret .= "<td width='20%' >".$name."</td>";
            $ret .= "<td width='15%' >".$version."</td>";
            $ret .= "<td width='15%' >".$published_date."</td>";
            $ret .= "<td width='15%' >".$uninstallable."</td>";
            $ret .= "<td width='20%' >".$description."</td>";

            if($display_commit)
                $ret .= "<td width='7%'>{$commitPackage}</td>";
            $ret .= "<td width='1%'></td>";
            $ret .= "<td width='7%'>{$deletePackage}</td>";
            $ret .= "</td></tr>";

            $clean_field_name = "accept_lic_".str_replace('.', '_', urlencode(basename($file)));

            if(is_file($license_file)){
                //rrs
                $ret .= "<tr><td colspan=6>";
                $ret .= getLicenseDisplay('commit', $target_manifest, $file, $next_step, $license_file, $clean_field_name);
                $ret .= "</td></tr>";
                $hidden_input .= "<input type='hidden' name='$clean_field_name' id='$clean_field_name' value='no'>";
            }else{
                $hidden_input .= "<input type='hidden' name='$clean_field_name' id='$clean_field_name' value='yes'>";
            }
        }//fi
    }//rof
    $_SESSION['hidden_input'] = $hidden_input;

    if(count($files) > 0 ) {
        $ret .= "</tr><td colspan=7>";
        $ret .= "<form name='commit' action='install.php' method='POST'>
                    <input type='hidden' name='current_step' value='{$next_step}'>
                    <input type='hidden' name='goto' value='Re-check'>
                    <input type='hidden' name='languagePackAction' value='commit'>
                    <input type='hidden' name='install_type' value='custom'>
                 </form>
                ";
        $ret .= "</td></tr>";
    } else {
        $ret .= "</tr><td colspan=7><i>{$mod_strings['LBL_LANG_NO_PACKS']}</i></td></tr>";
    }
    return $ret;
}

if ( !function_exists('extractFile') ) {
function extractFile( $zip_file, $file_in_zip, $base_tmp_upgrade_dir){
    $my_zip_dir = mk_temp_dir( $base_tmp_upgrade_dir );
    unzip_file( $zip_file, $file_in_zip, $my_zip_dir );
    return( "$my_zip_dir/$file_in_zip" );
}
}

if ( !function_exists('extractManifest') ) {
function extractManifest( $zip_file,$base_tmp_upgrade_dir ) {
    return( extractFile( $zip_file, "manifest.php",$base_tmp_upgrade_dir ) );
}
}

if ( !function_exists('validate_manifest') ) {
function validate_manifest( $manifest ){
    // takes a manifest.php manifest array and validates contents
    global $subdirs;
    global $sugar_version;
    global $sugar_flavor;
    global $mod_strings;

    if( !isset($manifest['type']) ){
        die($mod_strings['ERROR_MANIFEST_TYPE']);
    }
    $type = $manifest['type'];
    if( getInstallType( "/$type/" ) == "" ){
        die($mod_strings['ERROR_PACKAGE_TYPE']. ": '" . $type . "'." );
    }

    return true; // making this a bit more relaxed since we updated the language extraction and merge capabilities

}
}

if ( !function_exists('getInstallType') ) {
function getInstallType( $type_string ){
    // detect file type
    $subdirs = array('full', 'langpack', 'module', 'patch', 'theme', 'temp');
    foreach( $subdirs as $subdir ){
        if( preg_match( "#/$subdir/#", $type_string ) ){
            return( $subdir );
        }
    }
    // return empty if no match
    return( "" );
}
}

//mysqli connector has a separate parameter for port.. We need to separate it out from the host name
function getHostPortFromString($hostname=''){

    $pos=strpos($hostname,':');
    if($pos === false){
        //no need to process as string is empty or does not contain ':' delimiter
        return '';
    }

    $hostArr = explode(':', $hostname);

    return $hostArr;

}

function getLicenseContents($filename)
{
    $license_file = '';
    if(file_exists($filename) && filesize($filename) >0){
        $license_file = trim(file_get_contents($filename));
    }
    return $license_file;
}








///////////////////////////////////////////////////////////////////////////////
////    FROM POPULATE SEED DATA
$seed = array(
    'qa',       'dev',          'beans',
    'info',     'sales',        'support',
    'kid',      'the',          'section',
    'sugar',    'hr',           'im',
    'kid',      'vegan',        'phone',
);
$tlds = array(
    ".com", ".org", ".net", ".tv", ".cn", ".co.jp", ".us",
    ".edu", ".tw", ".de", ".it", ".co.uk", ".info", ".biz",
    ".name",
);

/**
 * creates a random, DNS-clean webaddress
 */
function createWebAddress() {
    global $seed;
    global $tlds;

    $one = $seed[rand(0, count($seed)-1)];
    $two = $seed[rand(0, count($seed)-1)];
    $tld = $tlds[rand(0, count($tlds)-1)];

    return "www.{$one}{$two}{$tld}";
}

/**
 * creates a random email address
 * @return string
 */
function createEmailAddress() {
    global $seed;
    global $tlds;

    $part[0] = $seed[rand(0, count($seed)-1)];
    $part[1] = $seed[rand(0, count($seed)-1)];
    $part[2] = $seed[rand(0, count($seed)-1)];

    $tld = $tlds[rand(0, count($tlds)-1)];

    $len = rand(1,3);

    $ret = '';
    for($i=0; $i<$len; $i++) {
        $ret .= (empty($ret)) ? '' : '.';
        $ret .= $part[$i];
    }

    if($len == 1) {
        $ret .= rand(10, 99);
    }

    return "{$ret}@example{$tld}";
}


function add_digits($quantity, &$string, $min = 0, $max = 9) {
    for($i=0; $i < $quantity; $i++) {
        $string .= mt_rand($min,$max);
    }
}

function create_phone_number() {
    $phone = "(";
    add_digits(3, $phone);
    $phone .= ") ";
    add_digits(3, $phone);
    $phone .= "-";
    add_digits(4, $phone);

    return $phone;
}

function create_date($year=null,$mnth=null,$day=null)
{
    global $timedate;
    $now = $timedate->getNow();
    if ($day==null) $day=$now->day+mt_rand(0,365);
    return $timedate->asDbDate($now->get_day_begin($day, $mnth, $year));
}

function create_current_date_time()
{
    global $timedate;
    return $timedate->nowDb();
}

function create_time($hr=null,$min=null,$sec=null)
{
    global $timedate;
    $date = TimeDate::fromTimestamp(0);
    if ($hr==null) $hr=mt_rand(6,19);
    if ($min==null) $min=(mt_rand(0,3)*15);
    if ($sec==null) $sec=0;
    return $timedate->asDbTime($date->setDate(2007, 10, 7)->setTime($hr, $min, $sec));
}

function create_past_date()
{
    global $timedate;
    $now = $timedate->getNow(true);
    $day_of_year = date('z') + 1;
    $day=$now->day-mt_rand(1, $day_of_year);
    return $timedate->asDbDate($now->get_day_begin($day));
}

/**
*   This method will look for a file modules_post_install.php in the root directory and based on the
*   contents of this file, it will silently install any modules as specified in this array.
*/
function post_install_modules(){
    if(is_file('modules_post_install.php')){
        global $current_user, $mod_strings;
        $current_user = new User();
        $current_user->is_admin = '1';

        $packageManager = new PackageManager();
        $modules_to_install = [];
        require_once('modules_post_install.php');
        $old_mod_strings = $mod_strings;
        foreach ($modules_to_install as $installModule) {
            try {
                $packageZipFile = new PackageZipFile($installModule, $packageManager->getBaseTempDir());
                $history = $packageManager->uploadPackageFromFile(
                    $packageZipFile,
                    PackageManifest::PACKAGE_TYPE_MODULE
                );
                $packageManager->installPackage($history);
            } catch (Exception $e) {
            }
        }
        $mod_strings = $old_mod_strings;
    }
}

function get_help_button_url(){
    $help_url = 'http://support.sugarcrm.com/02_Documentation/01_Sugar_Editions/04_Sugar_Professional';
    $help_url = 'http://support.sugarcrm.com/02_Documentation/01_Sugar_Editions/02_Sugar_Enterprise';

    return $help_url;
}

function create_db_user_creds($numChars=10){
$numChars = 7; // number of chars in the password
//chars to select from
$charBKT = "abcdefghijklmnpqrstuvwxyz123456789ABCDEFGHIJKLMNPQRSTUVWXYZ";
// seed the random number generator
srand((double)microtime()*1000000);
$password="";
for ($i=0;$i<$numChars;$i++)  // loop and create password
            $password = $password . substr ($charBKT, rand() % strlen($charBKT), 1);

return $password;

}

function addDefaultRoles($defaultRoles = array()) {
    global $db;


    foreach($defaultRoles as $roleName=>$role){
        $role1= new ACLRole();
        $role1->name = $roleName;
        $role1->description = $roleName." Role";
        $role1_id=$role1->save();
        foreach($role as $category=>$actions){
            foreach($actions as $name=>$access_override){
                if($name=='fields'){
                    foreach($access_override as $field_id=>$access){
                        ACLField::setAccessControl($category, $role1_id, $field_id, $access);
                    }
                }else{
                    $queryACL="SELECT id FROM acl_actions where category=? and name=?";
                    $conn = $db->getConnection();
                    $stmt = $conn->executeQuery($queryACL, array($category, $name));
                    $actionId=$stmt->fetchOne();
                    if (!empty($actionId)) {
                        $role1->setAction($role1_id, $actionId, $access_override);
                    }
                }
            }
        }
    }
}

function create_writable_dir($dirname)
{
    if ((is_dir($dirname)) || @sugar_mkdir($dirname,0755, true)) {
        $ok = make_writable($dirname);
    }
    if(empty($ok)) {
        installLog("ERROR: Cannot create writable dir $dirname");
    }
}

/**
 * Enable the InsideView connector for the four default modules.
 */
function enableInsideViewConnector()
{
    // Load up the existing mapping and hand it to the InsideView connector to have it setup the correct logic hooks
    $mapFile = 'modules/Connectors/connectors/sources/ext/rest/insideview/mapping.php';
    if ( file_exists('custom/'.$mapFile) ) {
        require('custom/'.$mapFile);
    } else {
        require($mapFile);
    }

    $source = new ext_rest_insideview();

    // $mapping is brought in from the mapping.php file above
    $source->saveMappingHook($mapping);
}

/**
 * If `mail_smtpserver` setting is missing on system mailer settings, a
 * notification is created and assigned to system user.
 */
function handleMissingSmtpServerSettingsNotifications()
{

    $oe = new OutboundEmail();
    $settings = $oe->getSystemMailerSettings();

    if (!empty($settings->mail_smtpserver)) {
        return;
    }

    $user = \BeanFactory::newBean('Users');
    $user->getSystemUser();

    if (empty($user)) {
        return;
    }

    $app_strings = return_application_language($GLOBALS['current_language']);

    $emailSettingsUrl = sprintf(
        '<a href="#bwc/index.php?module=EmailMan&action=config">%s</a>',
        $app_strings['LBL_MISSING_SMPT_SERVER_SETTINGS_NOTIFICATION_LINK_TEXT']
    );

    $description = str_replace(
        '{{emailSettingsUrl}}',
        $emailSettingsUrl,
        $app_strings['TPL_MISSING_SMPT_SERVER_SETTINGS_NOTIFICATION_DESCRIPTION']
    );

    $notification = \BeanFactory::newBean('Notifications');
    $notification->name = $app_strings['LBL_MISSING_SMPT_SERVER_SETTINGS_NOTIFICATION_SUBJECT'];
    $notification->description = $description;
    $notification->severity = 'warning';
    $notification->assigned_user_id = $user->id;
    $notification->save();
}

/**
 * Formats license text as HTML
 *
 * @param string $text Text
 * @return string HTML
 */
function formatLicense($text)
{
    return preg_replace('/https?:\/\/\S*(?<!\.)/', '<a href="${0}" target="_blank">${0}</a>', $text);
}
