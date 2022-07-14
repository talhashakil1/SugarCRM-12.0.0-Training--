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

use Doctrine\DBAL\Connection;
use Doctrine\DBAL\Exception as DBALException;
use Sugarcrm\Sugarcrm\Security\InputValidation\InputValidation;
use Sugarcrm\Sugarcrm\Security\InputValidation\Request;
use Sugarcrm\Sugarcrm\Util\Files\FileLoader;
use Sugarcrm\Sugarcrm\Security\Validator\Validator;
use Sugarcrm\Sugarcrm\Security\Validator\Constraints\Guid;
use Sugarcrm\Sugarcrm\Security\InputValidation\Exception\ViolationException;

require_once("vendor/ytree/Tree.php");
require_once("vendor/ytree/ExtNode.php");

/**
 * Email GUI class
 */
class EmailUI {
	var $db;
	var $folder; // place holder for SugarFolder object
	var $folderStates = array(); // array of folderPath names and their states (1/0)
	var $smarty;
	var $addressSeparators = array(";", ",");
	var $rolloverStyle = "<style>div#rollover {position: relative;float: left;margin: none;text-decoration: none;}div#rollover a:hover {padding: 0;}div#rollover a span {display: none;}div#rollover a:hover span {text-decoration: none;display: block;width: 250px;margin-top: 5px;margin-left: 5px;position: absolute;padding: 10px;color: #333;	border: 1px solid #ccc;	background-color: #fff;	font-size: 12px;z-index: 1000;}</style>\n";
	var $groupCss = "<span class='groupInbox'>";
	var $cacheTimeouts = array(
		'messages'		=> 86400,	// 24 hours
		'folders'		=> 300,		// 5 mins
		'attachments'	=> 86400,	// 24 hours
	);
	var $userCacheDir = '';
	var $coreDynamicFolderQuery = "SELECT emails.id polymorphic_id, 'Emails' polymorphic_module FROM emails
								   JOIN emails_text on emails.id = emails_text.email_id
                                   WHERE (type = '::TYPE::' OR status = '::STATUS::') AND assigned_user_id = '::USER_ID::' AND emails.deleted = '0'";

    /**
     * @var Request
     */
    protected $request;


	public function __construct() {
		global $sugar_config;
		global $current_user;

		$folderStateSerial = $current_user->getPreference('folderOpenState', 'Emails');

		if(!empty($folderStateSerial)) {
            $this->folderStates = unserialize($folderStateSerial, ['allowed_classes' => false]);
		}

		$this->smarty = new Sugar_Smarty();
		$this->folder = new SugarFolder();
        $violations = Validator::getService()->validate($current_user->id, new Guid());
        if ($violations->count()) {
            throw new ViolationException('Invalid user ID', $violations);
        }
		$this->userCacheDir = sugar_cached("modules/Emails/{$current_user->id}");
		$this->db = DBManagerFactory::getInstance();
        $this->request = InputValidation::getService();
	}


	///////////////////////////////////////////////////////////////////////////
	////	CORE
	/**
	 * Renders the frame for emails
	 */
	function displayEmailFrame() {


		global $app_strings, $app_list_strings;
		global $mod_strings;
		global $sugar_config;
		global $current_user;
		global $locale;
		global $timedate;
		global $theme;
		global $sugar_version;
		global $sugar_flavor;
		global $current_language;
		global $server_unique_key;

		$this->preflightUserCache();
		$ie = BeanFactory::newBean('InboundEmail');
        $ie->disable_row_level_security = true;

		// focus listView
		$list = array(
			'mbox' => 'Home',
			'ieId' => '',
			'name' => 'Home',
			'unreadChecked' => 0,
			'out' => array(),
		);

		$this->_generateComposeConfigData('email_compose');


        //Check quick create module access
        $QCAvailableModules = $this->_loadQuickCreateModules();

        //Get the quickSearch js needed for assigned user id on Search Tab
        $qsd = QuickSearchDefaults::getQuickSearchDefaults();
        $qsd->setFormName('advancedSearchForm');
        $quicksearchAssignedUser = "if(typeof sqs_objects == 'undefined'){var sqs_objects = new Array;}";
        $quicksearchAssignedUser .= "sqs_objects['advancedSearchForm_assigned_user_name']=" . json_encode($qsd->getQSUser()) . ";";
        $qsd->setFormName('Distribute');
        $quicksearchAssignedUser .= "sqs_objects['Distribute_assigned_user_name']=" . json_encode($qsd->getQSUser()) . ";";
        $this->smarty->assign('quickSearchForAssignedUser', $quicksearchAssignedUser);


		///////////////////////////////////////////////////////////////////////
		////	BASIC ASSIGNS
		$this->smarty->assign("currentUserId",$current_user->id);
		$this->smarty->assign("CURRENT_USER_EMAIL",$current_user->email1);
        $this->smarty->assign("currentUserName",$current_user->name);
		$this->smarty->assign('yuiPath', 'modules/Emails/javascript/yui-ext/');
		$this->smarty->assign('app_strings', $app_strings);
		$this->smarty->assign('mod_strings', $mod_strings);
		$this->smarty->assign('theme', $theme);
		$this->smarty->assign('sugar_config', $sugar_config);
		$this->smarty->assign('is_admin', $current_user->is_admin);
		$this->smarty->assign('sugar_version', $sugar_version);
		$this->smarty->assign('sugar_flavor', $sugar_flavor);
		$this->smarty->assign('current_language', $current_language);
		$this->smarty->assign('server_unique_key', $server_unique_key);
		$this->smarty->assign('qcModules', json_encode($QCAvailableModules));
		$extAllDebugValue = "ext-all.js";
		$extAllDebugValue = "ext-all-debug.js";
		$this->smarty->assign('extFileName', $extAllDebugValue);

		// settings: general
		$e2UserPreferences = $this->getUserPrefsJS();
		$emailSettings = $e2UserPreferences['emailSettings'];

		$this->smarty->assign('disable_account_config',
			SugarConfig::getInstance()->get("disable_user_email_config", false)
			&& !$current_user->isAdminForModule("Emails") ? "true" : "false"
		);


		///////////////////////////////////////////////////////////////////////
		////	USER SETTINGS
		// settings: accounts
		$this->smarty->assign("pro", 1);
		$this->smarty->assign("ie_team", $current_user->getPrivateTeam());

		$teams = array(
			'options' => $current_user->get_my_teams(),
			'selected' => empty($current_user->default_team) ? $current_user->getPrivateTeam() : $current_user->default_team
		);

		$this->retrieveTeamInfoForSettingsUI();

		$cuDatePref = $current_user->getUserDateTimePreferences();
		$this->smarty->assign('dateFormat', $cuDatePref['date']);
		$this->smarty->assign('dateFormatExample', str_replace(array("Y", "m", "d"), array("yyyy", "mm", "dd"), $cuDatePref['date']));
		$this->smarty->assign('calFormat', $timedate->get_cal_date_format());
        $this->smarty->assign('TIME_FORMAT', $timedate->get_user_time_format());

		$ieAccounts = $ie->retrieveByGroupId($current_user->id);
		$ieAccountsOptions = "<option value=''>{$app_strings['LBL_NONE']}</option>\n";

		foreach($ieAccounts as $k => $v) {
			$disabled = (!$v->is_personal) ? "DISABLED" : "";
			$group = (!$v->is_personal) ? $app_strings['LBL_EMAIL_GROUP']."." : "";
			$ieAccountsOptions .= "<option value='{$v->id}' $disabled>{$group}{$v->name}</option>\n";
		}

		$this->smarty->assign('ieAccounts', $ieAccountsOptions);
		$this->smarty->assign('rollover', $this->rolloverStyle);

		$protocol = filterInboundEmailPopSelection($app_list_strings['dom_email_server_type']);
		$this->smarty->assign('PROTOCOL', get_select_options_with_id($protocol, ''));
		$this->smarty->assign('MAIL_SSL_OPTIONS', get_select_options_with_id($app_list_strings['email_settings_for_ssl'], ''));
		$this->smarty->assign('ie_mod_strings', return_module_language($current_language, 'InboundEmail'));

		$charsetSelectedValue = isset($emailSettings['defaultOutboundCharset']) ? $emailSettings['defaultOutboundCharset'] : false;
		if (!$charsetSelectedValue) {
			$charsetSelectedValue = $current_user->getPreference('default_export_charset', 'global');
			if (!$charsetSelectedValue) {
				$charsetSelectedValue = $locale->getPrecedentPreference('default_email_charset');
			}
		}
		$charset = array(
			'options' => $locale->getCharsetSelect(),
			'selected' => $charsetSelectedValue,
		);
		$this->smarty->assign('charset', $charset);

		$emailCheckInterval = array('options' => $app_list_strings['email_check_interval_dom'], 'selected' => $emailSettings['emailCheckInterval']);
		$this->smarty->assign('emailCheckInterval', $emailCheckInterval);
		$this->smarty->assign('attachmentsSearchOptions', $app_list_strings['checkbox_dom']);
		$this->smarty->assign('sendPlainTextChecked', ($emailSettings['sendPlainText'] == 1) ? 'CHECKED' : '');
		$this->smarty->assign('showNumInList', get_select_options_with_id($app_list_strings['email_settings_num_dom'], $emailSettings['showNumInList']));

		////	END USER SETTINGS
		///////////////////////////////////////////////////////////////////////

		///////////////////////////////////////////////////////////////////////
		////	SIGNATURES
		$prependSignature = ($current_user->getPreference('signature_prepend')) ? 'true' : 'false';
		$defsigID = $current_user->getPreference('signature_default');
		$this->smarty->assign('signatures', $current_user->getSignatures(false, $defsigID));
		$this->smarty->assign('signaturesSettings', $current_user->getSignatures(false, $defsigID, false));
		$signatureButtons = $current_user->getSignatureButtons('SUGAR.email2.settings.createSignature', !empty($defsigID));
		if (!empty($defsigID)) {
			$signatureButtons = $signatureButtons . '<span name="delete_sig" id="delete_sig" style="visibility:inherit;"><input class="button" onclick="javascript:SUGAR.email2.settings.deleteSignature();" value="'.$app_strings['LBL_EMAIL_DELETE'].'" type="button" tabindex="392">&nbsp;
					</span>';
		} else {
			$signatureButtons = $signatureButtons . '<span name="delete_sig" id="delete_sig" style="visibility:hidden;"><input class="button" onclick="javascript:SUGAR.email2.settings.deleteSignature();" value="'.$app_strings['LBL_EMAIL_DELETE'].'" type="button" tabindex="392">&nbsp;
					</span>';
		}
		$this->smarty->assign('signatureButtons', $signatureButtons);
		$this->smarty->assign('signaturePrepend', $prependSignature == 'true' ? 'CHECKED' : '');
		////	END SIGNATURES
		///////////////////////////////////////////////////////////////////////

		///////////////////////////////////////////////////////////////////////
		////	EMAIL TEMPLATES
		$email_templates_arr = $this->getEmailTemplatesArray();
		natcasesort($email_templates_arr);
		$this->smarty->assign('EMAIL_TEMPLATE_OPTIONS', get_select_options_with_id($email_templates_arr, ''));
		////	END EMAIL TEMPLATES
		///////////////////////////////////////////////////////////////////////

		///////////////////////////////////////////////////////////////////////
		////	FOLDERS & TreeView
		$this->smarty->assign('groupUserOptions', $ie->getGroupsWithSelectOptions(array('' => $app_strings['LBL_EMAIL_CREATE_NEW'])));

		$tree = $this->getMailboxNodes();

		// preloaded folder
		$preloadFolder = 'lazyLoadFolder = ';
		$focusFolderSerial = $current_user->getPreference('focusFolder', 'Emails');
		if(!empty($focusFolderSerial)) {
            $focusFolder = unserialize($focusFolderSerial, ['allowed_classes' => false]);
			//$focusFolder['ieId'], $focusFolder['folder']
			$preloadFolder .= json_encode($focusFolder).";";
		} else {
			$preloadFolder .= "new Object();";
		}
		////	END FOLDERS
		///////////////////////////////////////////////////////////////////////

        $jsPath = getJSPath("include/javascript/sugarwidgets/SugarYUIWidgets.js");

		$out = "";
		$out .= $this->smarty->fetch("modules/Emails/templates/_baseEmail.tpl");
		$out .= $tree->generate_header();
		$out .= $tree->generateNodesNoInit(true, 'email2treeinit');
		$out .=<<<eoq
			<script type="text/javascript" language="javascript">

				var loader = new YAHOO.util.YUILoader({
				    require : [
				    	"layout", "element", "tabview", "menu",
				    	"cookie", "sugarwidgets"
				    ],
				    loadOptional: true,
				    skin: { base: 'blank', defaultSkin: '' },
				    onSuccess: email2init,
				    allowRollup: true,
				    base: "include/javascript/yui/build/"
				});
				loader.addModule({
				    name :"sugarwidgets",
				    type : "js",
				    fullpath: "{$jsPath}",
				    varName: "YAHOO.SUGAR",
				    requires: ["datatable", "dragdrop", "treeview", "tabview", "calendar"]
				});
				loader.insert();

				{$preloadFolder};

			</script>
eoq;


		return $out;
	}

	/**
	 * Generate the frame needed for the quick compose email UI.  This frame is loaded dynamically
	 * by an ajax call.
	 *
	 * @return JSON An object containing html markup and js script variables.
	 */
	function displayQuickComposeEmailFrame()
	{
        $this->preflightUserCache();

	    $this->_generateComposeConfigData('email_compose_light');
		$javascriptOut = $this->smarty->fetch("modules/Emails/templates/_baseConfigData.tpl");

        $divOut = $this->smarty->fetch("modules/Emails/templates/overlay.tpl");
        $divOut .= $this->smarty->fetch("modules/Emails/templates/addressSearchContent.tpl");

        $outData = array('jsData' => $javascriptOut,'divData'=> $divOut);
        $out = json_encode($outData);
        return $out;
    }

    /**
     * Load the modules from the metadata file and include in a custom one if it exists
     *
     * @return array
     */
    protected function _loadQuickCreateModules()
    {
        $QCAvailableModules = array();
        $QCModules = array();

        foreach(SugarAutoLoader::existingCustom('modules/Emails/metadata/qcmodulesdefs.php') as $file) {
            include $file;
        }

        foreach($QCModules as $module) {
            $seed = BeanFactory::newBean($module);
            if ( ( $seed instanceOf SugarBean ) && $seed->ACLAccess('edit') ) {
                $QCAvailableModules[] = $module;
            }
        }

        return $QCAvailableModules;
    }

    /**
     * Given an email link url (eg. index.php?action=Compose&parent_type=Contacts...) break up the
     * request components and create a compose package that can be used by the quick compose UI. The
     * result is typically passed into the js call SUGAR.quickCompose.init which initalizes the quick compose
     * UI.
     *
     * @param String $emailLinkUrl
     * @return JSON Object containing the composePackage and full link url
     */
    function generateComposePackageForQuickCreateFromComposeUrl($emailLinkUrl, $lazyLoad=false)
    {
        $composeData = explode("&",$emailLinkUrl);
        $a_composeData = array();
    	foreach ($composeData as $singleRequest)
    	{
    		$tmp = explode("=",$singleRequest);
    		$a_composeData[$tmp[0]] = urldecode($tmp[1]);
    	}

    	return $this->generateComposePackageForQuickCreate($a_composeData,$emailLinkUrl, $lazyLoad);
    }
    /**
     * Generate the composePackage for the quick compose email UI.  The package contains
     * key/value pairs generated by the Compose.php file which are then set into the
     * quick compose email UI (eg. to addr, parent id, parent type, etc)
     *
     * @param Array $composeData Associative array read and processed by generateComposeDataPackage.
     * @param String $fullLinkUrl A link that contains all pertinant information so the user can be
     *                              directed to the full compose screen if needed
     * @param SugarBean $bean Optional - the parent object bean with data
     * @return JSON Object containg composePackage and fullLinkUrl
     */
    function generateComposePackageForQuickCreate($composeData,$fullLinkUrl, $lazyLoad=false, $bean = null)
    {
        $_REQUEST['forQuickCreate'] = true;

        if(!$lazyLoad){
    	    require_once('modules/Emails/Compose.php');
    	    $composePackage = generateComposeDataPackage($composeData,FALSE, $bean);
        }else{
            $composePackage = $composeData;
        }

    	// JSON object is passed into the function defined within the a href onclick event
    	// which is delimeted by '.  Need to escape all single quotes and &, <, >
    	// but not double quotes since json would escape them
    	foreach ($composePackage as $key => $singleCompose)
    	{
    	   if (is_string($singleCompose))
    	       $composePackage[$key] = str_replace("&nbsp;", " ", from_html($singleCompose));
    	}

    	$quickComposeOptions = array('fullComposeUrl' => $fullLinkUrl,'composePackage' => $composePackage);

        return JSON::encode($quickComposeOptions);
    }

    /**
     * Generate the config data needed for the Full Compose UI and the Quick Compose UI.  The set of config data
     * returned is the minimum set needed by the quick compose UI.
     *
     * @param String $type Drives which tinyMCE options will be included.
     */
	function _generateComposeConfigData($type = "email_compose_light" )
	{
		global $app_list_strings,$current_user, $app_strings, $mod_strings,$current_language,$locale;

		//Link drop-downs
        $parent_types = $app_list_strings['record_type_display'];
		$disabled_parent_types = ACLController::disabledModuleList($parent_types, false, 'list');

		foreach($disabled_parent_types as $disabled_parent_type) {
		  unset($parent_types[$disabled_parent_type]);
		}
		asort($parent_types);
		$linkBeans = json_encode(get_select_options_with_id($parent_types, ''));

		//TinyMCE Config
        $tiny = new SugarTinyMCE();
        $tinyConf = $tiny->getConfig($type);

        //Generate Language Packs
		$lang = "var app_strings = new Object();\n";
		foreach($app_strings as $k => $v) {
			if(strpos($k, 'LBL_EMAIL_') !== false) {
			    $jv = json_encode($v);
				$lang .= "app_strings.{$k} = {$jv};\n";
			}
		}
		//Get the email mod strings but don't use the global variable as this may be overridden by
		//other modules when the quick create is rendered.
		$email_mod_strings = return_module_language($current_language,'Emails');
		$modStrings = "var mod_strings = new Object();\n";
		foreach($email_mod_strings as $k => $v) {
            $v = str_replace(array("'", "\n"), array("\'", "<br>"), $v);
			$modStrings .= "mod_strings.{$k} = '{$v}';\n";
		}
		$lang .= "\n\n{$modStrings}\n";

		//Grab the Inboundemail language pack
		$ieModStrings = "var ie_mod_strings = new Object();\n";
		$ie_mod_strings = return_module_language($current_language,'InboundEmail');
		foreach($ie_mod_strings as $k => $v) {
            $v = str_replace(array("'", "\n"), array("\'", "<br>"), $v);
			$ieModStrings .= "ie_mod_strings.{$k} = '{$v}';\n";
		}
		$lang .= "\n\n{$ieModStrings}\n";

		$this->smarty->assign('linkBeans', $linkBeans);
        $this->smarty->assign('linkBeansOptions', $parent_types);
        $this->smarty->assign('tinyMCE', $tinyConf);
        $this->smarty->assign('lang', $lang);
        $this->smarty->assign('app_strings', $app_strings);
		$this->smarty->assign('mod_strings', $email_mod_strings);
        $ie1 = BeanFactory::newBean('InboundEmail');
        $ie1->disable_row_level_security = true;
		$ie1->team_id = empty($current_user->default_team) ? $current_user->team_id : $current_user->default_team;
		$ie1->team_set_id = $current_user->team_set_id;
        $ie1->acl_team_set_id = $current_user->acl_team_set_id;
        // need this bean to generate correct teamset field
        $emailsBean = BeanFactory::newBean('Emails');
        $emailsBean->disable_row_level_security = true;
        $emailsBean->team_id = $ie1->team_id;
        $emailsBean->team_set_id = $ie1->team_set_id;
        $emailsBean->acl_team_set_id = $ie1->acl_team_set_id;

        $teamSetField
            = new EmailSugarFieldTeamsetCollection($emailsBean, $emailsBean->field_defs, '', 'composeEmailForm');
		$code1 = $teamSetField->get_code();
		$sqs_objects1 = $teamSetField->createQuickSearchCode(true);
		$this->smarty->assign('teamsdata', json_encode($code1 . $sqs_objects1));

        //Signatures
        $defsigID = $current_user->getPreference('signature_default');
		$defaultSignature = $current_user->getDefaultSignature();
		$sigJson = !empty($defaultSignature) ? json_encode(array($defaultSignature['id'] => from_html($defaultSignature['signature_html']))) : "new Object()";
		$this->smarty->assign('defaultSignature', $sigJson);
		$this->smarty->assign('signatureDefaultId', (isset($defaultSignature['id'])) ? $defaultSignature['id'] : "");
		//User Preferences
		$this->smarty->assign('userPrefs', json_encode($this->getUserPrefsJS()));

		//Get the users default outbound id
		$defaultOutID = $ie1->getUsersDefaultOutboundServerId($current_user);
		$this->smarty->assign('defaultOutID', $defaultOutID);

		//Character Set
		$charsets = json_encode($locale->getCharsetSelect());
		$this->smarty->assign('emailCharsets', $charsets);

		//Relateable List of People for address book search
		//#20776 jchi
		$peopleTables = array("users",
		                      "contacts",
		                      "leads",
		                      "prospects",
		                      "accounts");
		$filterPeopleTables = array();
		global $app_list_strings, $app_strings;
		$filterPeopleTables['LBL_DROPDOWN_LIST_ALL'] = $app_strings['LBL_DROPDOWN_LIST_ALL'];
		foreach($peopleTables as $table) {
			$module = ucfirst($table);
            $person = BeanFactory::newBean($module);

            if (!$person->ACLAccess('list')) continue;
            $filterPeopleTables[$person->table_name] = $app_list_strings['moduleList'][$person->module_dir];
		}
		$this->smarty->assign('listOfPersons' , get_select_options_with_id($filterPeopleTables,''));

	}



	function retrieveTeamInfoForSettingsUI() {
		global $current_user;
		$e2UserPreferences = $this->getUserPrefsJS();
		$emailSettings = $e2UserPreferences['emailSettings'];
		$return = array();

		$ie1 = BeanFactory::newBean('InboundEmail');
        $ie1->disable_row_level_security = true;
		$ie1->team_set_id = '';
		$teamSetField = new EmailSugarFieldTeamsetCollection($ie1, $ie1->field_defs, '', 'Distribute');
		$code2 = $teamSetField->get_code(TRUE);
		$sqs_objects2 = $teamSetField->createQuickSearchCode(true);
		$this->smarty->assign('TEAM_SET_FIELD_FOR_ASSIGNEDTO',$code2 . $sqs_objects2);
		//return $return;

	} // fn

	////	END CORE
	///////////////////////////////////////////////////////////////////////////

	///////////////////////////////////////////////////////////////////////////
	////	ADDRESS BOOK
    /**
     * Retrieves all relationship metadata for a user's address book
     * @return array
     * @throws Doctrine\DBAL\Exception
     */
    public function getContacts()
    {
        global $current_user;
        $stmt = $this->db->getConnection()
            ->executeQuery(
                'SELECT * FROM address_book WHERE assigned_user_id = ? ORDER BY bean DESC',
                [$current_user->id]
            );
        $ret = [];
        foreach ($stmt as $addressBookData) {
            $ret[$addressBookData['bean_id']] = array(
                'id' => $addressBookData['bean_id'],
                'module' => $addressBookData['bean'],
            );
        }

        return $ret;
    }

    /**
     * Saves changes to a user's address book
     * @param array contacts
     * @throws Doctrine\DBAL\Exception
     */
    public function setContacts($contacts)
    {
        global $current_user;

        $oldContacts = $this->getContacts();
        $connection = $this->db->getConnection();
        foreach ($contacts as $cid => $contact) {
            if (!in_array($contact['id'], $oldContacts)) {
                $connection->executeUpdate(
                    'INSERT INTO address_book (assigned_user_id, bean, bean_id) VALUES (?, ?, ?)',
                    [$current_user->id, $contact['module'], $contact['id']]
                );
            }
        }
    }

    /**
     * Removes contacts from the user's address book
     * @param array ids
     * @throws Doctrine\DBAL\Exception
     */
    public function removeContacts($ids)
    {
        global $current_user;

        $connection = $this->db->getConnection();
        $connection->executeUpdate(
            'DELETE FROM address_book WHERE assigned_user_id = ? AND bean_id IN(?)',
            [$current_user->id, $ids],
            [null, Connection::PARAM_STR_ARRAY]
        );

        $connection->executeUpdate(
            'DELETE FROM address_book_list_items WHERE address_book_list_items.bean_id IN 
            (SELECT id FROM email_addr_bean_rel eabr WHERE eabr.deleted=0 AND eabr.bean_id IN (?))',
            [$ids],
            [Connection::PARAM_STR_ARRAY]
        );
    }

	/**
	 * saves editted Contact info
	 * @param string $str JSON serialized object
	 */
	function saveContactEdit($str) {

		$json = getJSONobj();

		$str = from_html($str);
		$obj = $json->decode($str);

		$contact = BeanFactory::getBean('Contacts', $obj['contact_id']);
		$contact->first_name = $obj['contact_first_name'];
		$contact->last_name = $obj['contact_last_name'];
		$contact->save();

		// handle email address changes
		$addresses = array();

		foreach($obj as $k => $req) {
			if(strpos($k, 'emailAddress') !== false) {
				$addresses[$k] = $req;
			}
		}

		// prefill some REQUEST vars for emailAddress save
		$_REQUEST['emailAddressOptOutFlag'] = $obj['optOut'];
		$_REQUEST['emailAddressInvalidFlag'] = $obj['invalid'];
		$contact->emailAddress->save($obj['contact_id'], 'Contacts', $addresses, $obj['primary'], '');
	}

	/**
	 * Prepares the Edit Contact mini-form via template assignment
	 * @param string id ID of contact in question
	 * @param string module Module in focus
	 * @return array
	 */
	function getEditContact($id, $module) {
		global $app_strings;


		if(!class_exists("Contact")) {

		}

		$contact = BeanFactory::getBean('Contacts', $_REQUEST['id']);
		$ret = array();

		if($contact->ACLAccess('edit')) {
			$contactMeta = array();
			$contactMeta['id'] = $contact->id;
			$contactMeta['module'] = $contact->module_dir;
			$contactMeta['first_name'] = $contact->first_name;
			$contactMeta['last_name'] = $contact->last_name;

			$this->smarty->assign("app_strings", $app_strings);
			$this->smarty->assign("contact_strings", return_module_language($_SESSION['authenticated_user_language'], 'Contacts'));
			$this->smarty->assign("contact", $contactMeta);

			$ea = BeanFactory::newBean('EmailAddresses');
			$newEmail = $ea->getEmailAddressWidgetEditView($id, $module, true);
			$this->smarty->assign("emailWidget", $newEmail['html']);

			$ret['form'] = $this->smarty->fetch("modules/Emails/templates/editContact.tpl");
			$ret['prefillData'] = $newEmail['prefillData'];
		} else {
			$id = "";
			$ret['form'] = $app_strings['LBL_EMAIL_ERROR_NO_ACCESS'];
			$ret['prefillData'] = '{}';
		}

		$ret['id'] = $id;
		$ret['contactName'] = $contact->full_name;

		return $ret;
	}

	/* *************** MAILING LISTS ***************** */
    /**
     * Adds contact items to a mailing list
     * @param string $list_id GUID
     * @param array $contacts
     * @param string $newName
     * @param bool $truncate
     * @throws DBALException
     */
    public function addContactsToList($list_id, $contacts, $newName, $truncate = false)
    {
        $connection = $this->db->getConnection();
        // update list name if set
        if (!empty($newName)) {
            $connection->executeUpdate(
                'UPDATE address_book_lists SET list_name = ? WHERE id = ?',
                [$newName, $list_id]
            );
        }

        // clean out if flag passed
        if ($truncate) {
            $connection->executeUpdate(
                'DELETE FROM address_book_list_items WHERE list_id = ?',
                [$list_id]
            );
        }

        $stmt = $connection->executeQuery(
            'SELECT bean_id FROM address_book_list_items WHERE list_id = ?',
            [$list_id]
        );
        $check = $stmt->fetchFirstColumn();

        if (is_array($contacts)) {
            for ($i = 0; $i < count($contacts); $i++) {
                if (!in_array($contacts[$i], $check)) {
                    $connection->executeUpdate(
                        'INSERT INTO address_book_list_items (list_id, bean_id) VALUES (?, ?)',
                        [$list_id, $contacts[$i]]
                    );
                }
            }
        }
    }

    /**
     * Removes selected lists from User's preferences
     * @param array $removeIds IDs of lists to remove
     * @throws Doctrine\DBAL\Exception
     */
    public function removeLists(array $removeIds)
    {
        $connection = $this->db->getConnection();
        $connection->executeUpdate(
            'DELETE FROM address_book_list_items WHERE list_id IN (?)',
            [$removeIds],
            [Connection::PARAM_STR_ARRAY]
        );

        $connection->executeUpdate(
            'DELETE FROM address_book_lists WHERE id IN (?)',
            [$removeIds],
            [Connection::PARAM_STR_ARRAY]
        );
    }

	/**
	 * Returns metadata to construct a user's mailing lists
	 * @return array
	 */
	function getLists() {
		global $current_user;

        $ret = [];
        $addressBookLists = $this->db->getConnection()
            ->executeQuery(
                'SELECT id, list_name FROM address_book_lists WHERE assigned_user_id = ? ORDER BY list_name',
                [$current_user->id]
            );

        foreach ($addressBookLists as $addressBookList) {
            $ret[$addressBookList['id']] = [
                $addressBookList['list_name'] => [],
            ];

            $addressBookListItems = $this->db->getConnection()
                ->executeQuery(
                    'SELECT * FROM address_book_list_items WHERE list_id = ?',
                    [$addressBookList['id']]
                );
            foreach ($addressBookListItems as $addressBookListItem) {
                $ret[$addressBookList['id']][$addressBookList['list_name']][] = $addressBookListItem['bean_id'];
            }
        }

        return $ret;
	}

	/**
	 * Creates a blank mailing list
	 * @param string name
	 */
	function createList($name) {
		global $current_user;

		$guid = create_guid();
		$q = "INSERT INTO address_book_lists (id, assigned_user_id, list_name) VALUES ('{$guid}', '{$current_user->id}', '{$name}')";
		$r = $this->db->query($q);
	}

	/**
	 * Returns metadata including the full HTML form to edit a mailing list
	 * @param string id ID of the Mailing List
	 * @return string HTML, empty on error
	 */
	function getEditMailingList($id) {
		global $app_strings;
		global $current_user;

		$id = substr($id, 11); // removing "mailinglist" from prepend
		$lists = $this->getLists();

		if(!isset($lists[$id])) {
			return array();
		} else {
			$target = $lists[$id];

			foreach($target as $listName => $listEmailsArray) {
			}

			$this->smarty->assign("app_strings", $app_strings);
			$this->smarty->assign("mailing_list_name", $listName);
			$this->smarty->assign("mailing_list_id", $id);

			$ret = array();
			$ret['id'] = $id;
			$ret['mailingListName'] = $listName;
			$ret['form'] = $this->smarty->fetch("modules/Emails/templates/editMailingList.tpl");

			return $ret;
		}
	}

	/**
	 * Retrieves a concatenated list of contacts, those with assigned_user_id = user's id and those in the address_book
	 * table
	 * @param array $contacts Array of contact types -> IDs
	 * @param object $user User in focus
	 * @return array
	 */
	function getUserContacts($contacts, $user=null) {

		global $current_user;
		global $locale;

		if(empty($user)) {
			$user = $current_user;
		}

		$emailAddress = BeanFactory::newBean('EmailAddresses');
		$ret = array();

		$union = '';

		$modules = array();
		foreach($contacts as $contact) {
			if(!isset($modules[$contact['module']])) {
				$modules[$contact['module']] = array();
			}
			$modules[$contact['module']][] = $contact;
		}

		foreach($modules as $module => $contacts) {
			if(!empty($union)) {
				$union .= " UNION ALL ";
			}

			$table = strtolower($module);
			$idsSerial = '';

			foreach($contacts as $contact) {
				if(!empty($idsSerial)) {
					$idsSerial .= ",";
				}
				$idsSerial .= "'{$contact['id']}'";
			}

			$union .= "(SELECT id, first_name, last_name, title, '{$module}' module FROM {$table} WHERE id IN({$idsSerial}) AND deleted = 0 )";
		}
		if(!empty($union)) {
			$union .= " ORDER BY last_name";
		}

		$r = $user->db->query($union);

		while($a = $user->db->fetchByAssoc($r)) {
			$c = array();
            $c['name'] = $locale->formatName(
                $a['module'],
                array_merge(
                    $a,
                    array(
                        'last_name' => "<b>{$a['last_name']}</b>",
                    )
                )
            );
			$c['id'] = $a['id'];
			$c['module'] = $a['module'];
			$c['email'] = $emailAddress->getAddressesByGUID($a['id'], $a['module']);
			$ret[$a['id']] = $c;
		}

		return $ret;
	}
	////	END ADDRESS BOOK
	///////////////////////////////////////////////////////////////////////////


	///////////////////////////////////////////////////////////////////////////
	////	EMAIL 2.0 Preferences
	function getUserPrefsJS() {
		global $current_user;
		global $locale;

		// sort order per mailbox view
		$sortSerial = $current_user->getPreference('folderSortOrder', 'Emails');
		$sortArray = array();
		if(!empty($sortSerial)) {
            $sortArray = unserialize($sortSerial, ['allowed_classes' => false]);
		}

		// treeview collapsed/open states
		$folderStateSerial = $current_user->getPreference('folderOpenState', 'Emails');
		$folderStates = array();
		if(!empty($folderStateSerial)) {
            $folderStates = unserialize($folderStateSerial, ['allowed_classes' => false]);
		}

		// subscribed accounts
        $showFolders = unserialize(base64_decode($current_user->getPreference('showFolders', 'Emails')), ['allowed_classes' => false]);

		// general settings
		$emailSettings = $current_user->getPreference('emailSettings', 'Emails');

		if(empty($emailSettings)) {
			$emailSettings = array();
			$emailSettings['emailCheckInterval'] = -1;
			$emailSettings['autoImport'] = '';
			$emailSettings['alwaysSaveOutbound'] = '1';
			$emailSettings['sendPlainText'] = '';
			$emailSettings['defaultOutboundCharset'] = $GLOBALS['sugar_config']['default_email_charset'];
			$emailSettings['showNumInList'] = 20;
		}

		// focus folder
		$focusFolder = $current_user->getPreference('focusFolder', 'Emails');
        $focusFolder = !empty($focusFolder) ? unserialize($focusFolder, ['allowed_classes' => false]) : array();

		// unread only flag
		$showUnreadOnly = $current_user->getPreference('showUnreadOnly', 'Emails');

		$listViewSort = array(
			"sortBy" => 'date',
			"sortDirection" => 'DESC',
		);

		// signature prefs
		$signaturePrepend = $current_user->getPreference('signature_prepend') ? 'true' : 'false';
		$signatureDefault = $current_user->getPreference('signature_default');
		$signatures = array(
			'signature_prepend' => $signaturePrepend,
			'signature_default' => $signatureDefault
		);

		// email lists (addressBook)
		$lists = $this->getLists();
		$lists = (empty($lists)) ? array() : $lists;

		// current_user
		$user = array(
			'emailAddresses' => $current_user->emailAddress->getAddressesByGUID($current_user->id, 'Users'),
			'full_name' => from_html($current_user->full_name),
		);

		$userPreferences = array();
		$userPreferences['sort'] = $sortArray;
		$userPreferences['folderStates'] = $folderStates;
		$userPreferences['showFolders'] = $showFolders;
		$userPreferences['emailSettings'] = $emailSettings;
		$userPreferences['focusFolder'] = $focusFolder;
		$userPreferences['showUnreadOnly'] = $showUnreadOnly;
		$userPreferences['listViewSort'] = $listViewSort;
		$userPreferences['signatures'] = $signatures;
		$userPreferences['emailLists'] = $lists;
		$userPreferences['current_user'] = $user;
		return $userPreferences;
	}



	///////////////////////////////////////////////////////////////////////////
	////	FOLDER FUNCTIONS

	/**
	 * Creates a new Sugar folder
	 * @param string $nodeLabel New sugar folder name
	 * @param string $parentLabel Parent folder name
	 */
	function saveNewFolder($nodeLabel, $parentId, $isGroup=0) {
		global $current_user;

		$this->folder->name = $nodeLabel;
		$this->folder->is_group = $isGroup;
		$this->folder->parent_folder = ($parentId == 'Home') ? "" : $parentId;
		$this->folder->has_child = 0;
		$this->folder->created_by = $current_user->id;
		$this->folder->modified_by = $current_user->id;
		$this->folder->date_modified = $this->folder->date_created = TimeDate::getInstance()->nowDb();
		$this->folder->team_id = $current_user->getPrivateTeamID();

		$this->folder->save();
		return array(
			'action' => 'newFolderSave',
			'id' => $this->folder->id,
			'name' => $this->folder->name,
			'is_group' => $this->folder->is_group,
			'is_dynamic' => $this->folder->is_dynamic
		);
	}

	/**
	 * Saves user sort prefernces
	 */
	function saveListViewSortOrder($ieId, $focusFolder, $sortBy, $sortDir) {
		global $current_user;

		$sortArray = array();

		$sortSerial = $current_user->getPreference('folderSortOrder', 'Emails');
		if(!empty($sortSerial)) {
            $sortArray = unserialize($sortSerial, ['allowed_classes' => false]);
		}

		$sortArray[$ieId][$focusFolder]['current']['sort'] = $sortBy;
		$sortArray[$ieId][$focusFolder]['current']['direction'] = $sortDir;
		$sortSerial = serialize($sortArray);
		$current_user->setPreference('folderSortOrder', $sortSerial, '', 'Emails');
	}

	/**
	 * Stickies folder collapse/open state
	 */
	function saveFolderOpenState($focusFolder, $focusFolderOpen) {
		global $current_user;

		$folderStateSerial = $current_user->getPreference('folderOpenState', 'Emails');
		$folderStates = array();

		if(!empty($folderStateSerial)) {
            $folderStates = unserialize($folderStateSerial, ['allowed_classes' => false]);
		}

		$folderStates[$focusFolder] = $focusFolderOpen;
		$newFolderStateSerial = serialize($folderStates);
		$current_user->setPreference('folderOpenState', $newFolderStateSerial, '', 'Emails');
	}

	/**
	 * saves a folder's view state
	 */
	function saveListView($ieId, $folder) {
		global $current_user;

		$saveState = array();
		$saveState['ieId'] = $ieId;
		$saveState['folder'] = $folder;
		$saveStateSerial = serialize($saveState);
		$current_user->setPreference('focusFolder', $saveStateSerial, '', 'Emails');
	}

	/**
	 * Generates cache folder structure
	 */
	function preflightEmailCache($cacheRoot) {
		// base
		if(!file_exists($cacheRoot))
			mkdir_recursive(clean_path($cacheRoot));

		// folders
		if(!file_exists($cacheRoot."/folders"))
			mkdir_recursive(clean_path("{$cacheRoot}/folders"));

		// messages
		if(!file_exists($cacheRoot."/messages"))
			mkdir_recursive(clean_path("{$cacheRoot}/messages"));

		// attachments
		if(!file_exists($cacheRoot."/attachments"))
			mkdir_recursive(clean_path("{$cacheRoot}/attachments"));
	}

	function deleteEmailCacheForFolders($cacheRoot) {
		$filePath = $cacheRoot."/folders/folders.php";
		if (file_exists($filePath)) {
			unlink($filePath);
		}
	}
	///////////////////////////////////////////////////////////////////////////
	////	IMAP FUNCTIONS
	/**
	 * Identifies subscribed mailboxes and empties the trash
	 * @param object $ie InboundEmail
	 */
	function emptyTrash(&$ie) {
		global $current_user;

        $showFolders = unserialize(base64_decode($current_user->getPreference('showFolders', 'Emails')), ['allowed_classes' => false]);

		if(is_array($showFolders)) {
			foreach($showFolders as $ieId) {
				if(!empty($ieId)) {
					$ie->retrieve($ieId);
					$ie->emptyTrash();
				}
			}
		}
	}

	/**
	 * returns an array of nodes that correspond to IMAP mailboxes.
	 * @param bool $forceRefresh
	 * @return object TreeView object
	 */
	function getMailboxNodes() {
		global $sugar_config;
		global $current_user;
		global $app_strings;

		$tree = new Tree("frameFolders");
		$tree->tree_style= getVersionedPath('vendor/ytree/TreeView/css/check/tree.css');

		$nodes = array();
		$ie = BeanFactory::newBean('InboundEmail');
        $ie->disable_row_level_security = true;
		$refreshOffset = $this->cacheTimeouts['folders']; // 5 mins.  this will be set via user prefs

		$rootNode = new ExtNode($app_strings['LBL_EMAIL_HOME_FOLDER'], $app_strings['LBL_EMAIL_HOME_FOLDER']);
		$rootNode->dynamicloadfunction = '';
		$rootNode->expanded = true;
		$rootNode->dynamic_load = true;
        $showFolders = unserialize(base64_decode($current_user->getPreference('showFolders', 'Emails')), ['allowed_classes' => false]);

		if(empty($showFolders)) {
			$showFolders = array();
		}

		// INBOX NODES
		if($current_user->hasPersonalEmail()) {
			$personals = $ie->retrieveByGroupId($current_user->id);

			foreach($personals as $k => $personalAccount) {
				if(in_array($personalAccount->id, $showFolders)) {
					// check for cache value
					$cacheRoot = sugar_cached("modules/Emails/{$personalAccount->id}");
					$this->preflightEmailCache($cacheRoot);

					if($this->validCacheFileExists($personalAccount->id, 'folders', "folders.php")) {
						$mailboxes = $this->getMailBoxesFromCacheValue($personalAccount);
					} else {
						$mailboxes = $personalAccount->getMailboxes();
					}

					$acctNode = new ExtNode('Home::' . $personalAccount->name, $personalAccount->name);
					$acctNode->dynamicloadfunction = '';
					$acctNode->expanded = false;
					$acctNode->set_property('cls', 'ieFolder');
					$acctNode->set_property('ieId', $personalAccount->id);
		        	$acctNode->set_property('protocol', $personalAccount->protocol);

					if(array_key_exists('Home::'.$personalAccount->name, $this->folderStates)) {
						if($this->folderStates['Home::'.$personalAccount->name] == 'open') {
							$acctNode->expanded = true;
						}
					}
					$acctNode->dynamic_load = true;

					$nodePath = $acctNode->_properties['id'];

					foreach($mailboxes as $k => $mbox) {
						$acctNode->add_node($this->buildTreeNode($k, $k, $mbox, $personalAccount->id,
						    $nodePath, false, $personalAccount));
					}

					$rootNode->add_node($acctNode);
				}
			}
		}

		// GROUP INBOX NODES
		$beans = $ie->retrieveAllByGroupId($current_user->id, false);
		foreach($beans as $k => $groupAccount) {
			if(in_array($groupAccount->id, $showFolders)) {
				// check for cache value
				$cacheRoot = sugar_cached("modules/Emails/{$groupAccount->id}");
				$this->preflightEmailCache($cacheRoot);
				//$groupAccount->connectMailserver();

				if($this->validCacheFileExists($groupAccount->id, 'folders', "folders.php")) {
					$mailboxes = $this->getMailBoxesFromCacheValue($groupAccount);
				} else {
					$mailboxes = $groupAccount->getMailBoxesForGroupAccount();
				}

				$acctNode = new ExtNode($groupAccount->name, "group.{$groupAccount->name}");
				$acctNode->dynamicloadfunction = '';
				$acctNode->expanded = false;
		        $acctNode->set_property('isGroup', 'true');
		        $acctNode->set_property('ieId', $groupAccount->id);
		        $acctNode->set_property('protocol', $groupAccount->protocol);

				if(array_key_exists('Home::'.$groupAccount->name, $this->folderStates)) {
					if($this->folderStates['Home::'.$groupAccount->name] == 'open') {
						$acctNode->expanded = true;
					}
				}
				$acctNode->dynamic_load = true;
				$nodePath = $rootNode->_properties['id']."::".$acctNode->_properties['id'];

				foreach($mailboxes as $k => $mbox) {
					$acctNode->add_node($this->buildTreeNode($k, $k, $mbox, $groupAccount->id,
					   $nodePath, true, $groupAccount));
				}

				$rootNode->add_node($acctNode);
			}
		}

		// SugarFolder nodes
		/* SugarFolders are built at onload when the UI renders */

		$tree->add_node($rootNode);
		return $tree;
	}

	function getMailBoxesFromCacheValue($mailAccount) {
		$foldersCache = $this->getCacheValue($mailAccount->id, 'folders', "folders.php", 'foldersCache');
		$mailboxes = $foldersCache['mailboxes'];
		$mailboxesArray = $mailAccount->generateFlatArrayFromMultiDimArray($mailboxes, $mailAccount->retrieveDelimiter());
		$mailAccount->saveMailBoxFolders($mailboxesArray);
		$this->deleteEmailCacheForFolders($cacheRoot);
		return $mailboxes;
	} // fn

	/**
	 * Builds up a TreeView Node object
	 * @param mixed
	 * @param mixed
	 * @param string
	 * @param string ID of InboundEmail instance
	 * @param string nodePath Serialized path from root node to current node
	 * @param bool isGroup
	 * @param bool forceRefresh
	 * @return mixed
	 */
	function buildTreeNode($key, $label, $mbox, $ieId, $nodePath, $isGroup, $ie) {
		global $sugar_config;

		// get unread counts
		$exMbox = explode("::", $nodePath);
		$unseen = 0;
		$GLOBALS['log']->debug("$key --- $nodePath::$label");

		if(count($exMbox) >= 2) {
			$mailbox = "";
			for($i=2; $i<count($exMbox); $i++) {
				if($mailbox != "") {
					$mailbox .= ".";
				}
				$mailbox .= "{$exMbox[$i]}";
			}

		    $mailbox = substr($key, strpos($key, '.'));

			$unseen = $this->getUnreadCount($ie, $mailbox);

			if($unseen > 0) {
				//$label = " <span id='span{$ie->id}{$ie->mailbox}' style='font-weight:bold'>{$label} (<span id='span{$ie->id}{$ie->mailbox}nums'>{$unseen}</span>)</span>";
			}
		}

		$nodePath = $nodePath."::".$label;
        $node = new ExtNode($nodePath, $label);
        $node->dynamicloadfunction = '';
        $node->expanded = false;
        $node->set_property('labelStyle', "remoteFolder");


        if(array_key_exists($nodePath, $this->folderStates)) {
        	if($this->folderStates[$nodePath] == 'open') {
        		$node->expanded = true;
        	}
        }

		$group = ($isGroup) ? 'true' : 'false';
        $node->dynamic_load = true;
        //$node->set_property('href', " SUGAR.email2.listView.populateListFrame(YAHOO.namespace('frameFolders').selectednode, '{$ieId}', 'false');");
        $node->set_property('isGroup', $group);
        $node->set_property('isDynamic', 'false');
        $node->set_property('ieId', $ieId);
        $node->set_property('mbox', $key);
        $node->set_property('unseen', $unseen);
        $node->set_property('cls', 'ieFolder');

        if(is_array($mbox)) {
        	foreach($mbox as $k => $v) {
        		$node->add_node($this->buildTreeNode("$key.$k", $k, $v, $ieId, $nodePath, $isGroup, $ie));
        	}
        }

        return $node;
	}

	/**
	 * Totals the unread emails
	 */
	function getUnreadCount(&$ie, $mailbox) {
		global $sugar_config;
		$unseen = 0;

		// use cache
		return $ie->getCacheUnreadCount($mailbox);
	}

	///////////////////////////////////////////////////////////////////////////
	////	DISPLAY CODE
	/**
	 * Used exclusively by draft code.  Returns Notes and Documents as attachments.
	 * @param array $ret
	 * @return array
	 */
    public static function getDraftAttachments($ret)
    {
		global $db;

		// $ret['uid'] is the draft Email object's GUID
		$ret['attachments'] = array();

        //FIXME: notes.email_type should be Emails
        $q = "SELECT id, filename FROM notes WHERE email_id = {$db->quoted($ret['uid'])} AND deleted = 0";
		$r = $db->query($q);

		while($a = $db->fetchByAssoc($r)) {
			$ret['attachments'][$a['id']] = array(
				'id'		=> $a['id'],
				'filename'	=> $a['filename'],
			);
		}

		return $ret;
	}

	function parseAttachmentInfo(&$actualAttachmentInfo, $attachmentHtmlData) {
	 	$downLoadPHP = strpos($attachmentHtmlData, "index.php?entryPoint=download&");
		while ($downLoadPHP) {
		 	$attachmentHtmlData = substr($attachmentHtmlData, $downLoadPHP+30);
		 	$final = strpos($attachmentHtmlData, "\">");
		 	$actualAttachmentInfo[] = substr($attachmentHtmlData, 0, $final);
		 	$attachmentHtmlData = substr($attachmentHtmlData, $final);
		 	$downLoadPHP = strpos($attachmentHtmlData, "index.php?entryPoint=download&");
		} // while
	}
	/**
	 * Renders the QuickCreate form from Smarty and returns HTML
	 * @param array $vars request variable global
	 * @param object $email Fetched email object
	 * @param bool $addToAddressBook
	 * @return array
	 */
	function getQuickCreateForm($vars, $email, $addToAddressBookButton=false)
	{
		require_once("include/EditView/EditView2.php");
		global $app_strings;
		global $mod_strings;
		global $current_user;
		global $current_language;

        $module   = $_REQUEST['qc_module'];
        $beanName = BeanFactory::getBeanClass($module);

		//Setup the current module languge
		$mod_strings = return_module_language($current_language, $module);
        $focus = BeanFactory::newBean($module);

		$people = array(
		'Contact'
		,'Lead'
		);
		$emailAddress = array();

		// people
		if(in_array($beanName, $people)) {
			// lead specific
			$focus->lead_source = 'Email';
			$focus->lead_source_description = trim($email->name);

			$from = (isset($email->from_name) && !empty($email->from_name)) ? $email->from_name : $email->from_addr;

            if(isset($_REQUEST['sugarEmail']) && !empty($_REQUEST['sugarEmail']))
            {
                if($email->status == "sent")
                {
                    $from = (isset($email->to_addrs_names) && !empty($email->to_addrs_names)) ? $email->to_addrs_names : $email->to_addrs;
                }else{
                    $from = (isset($email->from_name) && !empty($email->from_name)) ? $email->from_name : $email->from_addr_name;
                }
            }

			$name = explode(" ", trim($from));

			$address = trim(array_pop($name));
			$address = str_replace(array("<",">","&lt;","&gt;"), "", $address);

			$emailAddress[] = array(
				'email_address'		=> $address,
				'primary_address'	=> 1,
				'invalid_email'		=> 0,
				'opt_out'			=> 0,
				'reply_to_address'	=> 1
			);

			$focus->email1 = $address;

			if(!empty($name)) {
				$focus->last_name = trim(array_pop($name));

				foreach($name as $first) {
					if(!empty($focus->first_name)) {
						$focus->first_name .= " ";
					}
					$focus->first_name .= trim($first);
				}
			}
		} else {
			// case & bug specific
			$focus->source = 'InboundEmail';
			// bugs, cases, tasks
			$focus->name = trim($email->name);
		}

		$focus->description = trim(strip_tags(br2nl($email->description)));
		$focus->assigned_user_id = $current_user->id;

		$focus->team_id = $current_user->default_team;

		$EditView = new EditView();
		$EditView->ss = new Sugar_Smarty();
		//MFH BUG#20283 - checks for custom quickcreate fields
		$EditView->setup($module, $focus, SugarAutoLoader::loadWithMetafiles($module, 'editviewdefs'));
		$EditView->process();
		$EditView->render();

		$EditView->defs['templateMeta']['form']['buttons'] = array(
			'email2save' => array(
				'id' => 'e2AjaxSave',
				'customCode' => '<input type="button" class="button" value="   '.$app_strings['LBL_SAVE_BUTTON_LABEL']
				              . '   " onclick="SUGAR.email2.detailView.saveQuickCreate(false);" />'
			),
			'email2saveandreply' => array(
			    'id' => 'e2SaveAndReply',
			    'customCode' => '<input type="button" class="button" value="   '.$app_strings['LBL_EMAIL_SAVE_AND_REPLY']
			                  . '   " onclick="SUGAR.email2.detailView.saveQuickCreate(\'reply\');" />'
			),
			'email2cancel' => array(
			     'id' => 'e2cancel',
			     'customCode' => '<input type="button" class="button" value="   '.$app_strings['LBL_EMAIL_CANCEL']
                              . '   " onclick="SUGAR.email2.detailView.quickCreateDialog.hide();" />'
			)
		);


		if($addToAddressBookButton) {
			$EditView->defs['templateMeta']['form']['buttons']['email2saveAddToAddressBook'] = array(
				'id' => 'e2addToAddressBook',
				'customCode' => '<input type="button" class="button" value="   '.$app_strings['LBL_EMAIL_ADDRESS_BOOK_SAVE_AND_ADD']
				              . '   " onclick="SUGAR.email2.detailView.saveQuickCreate(true);" />'
			);
		}

		//Get the module language for javascript
	    if(!is_file(sugar_cached('jsLanguage/') . "{$module}/{$GLOBALS['current_language']}.js")) {
            jsLanguage::createModuleStringsCache($module, $GLOBALS['current_language']);
        }
		$jsLanguage = getVersionedScript("cache/jsLanguage/{$module}/{$GLOBALS['current_language']}.js", $GLOBALS['sugar_config']['js_lang_version']);

		if($focus->object_name == 'Contact') {
			$admin = Administration::getSettings();

	    	if(empty($admin->settings['portal_on']) || !$admin->settings['portal_on']) {
			   unset($EditView->sectionPanels[strtoupper('lbl_portal_information')]);
			} else {
			   $jsLanguage .= getVersionedScript("modules/Contacts/Contact.js");
			   $jsLanguage .= getVersionedScript("modules/Contacts/QuickCreateEmailContact.js");
			   $jsLanguage .= <<<EOQ
			    <script language="javascript">
				   addToValidateComparison('form_EmailQCView_Contacts', 'portal_password', 'varchar', false, SUGAR.language.get('app_strings', 'ERR_SQS_NO_MATCH_FIELD') + SUGAR.language.get('Contacts', 'LBL_PORTAL_PASSWORD'), 'portal_password1');
		           addToValidateVerified('form_EmailQCView_Contacts', 'portal_name_verified', 'bool', false, SUGAR.language.get('app_strings', 'ERR_EXISTING_PORTAL_USERNAME'));
		           YAHOO.util.Event.on('portal_name', 'blur', validatePortalName);
				   YAHOO.util.Event.on('portal_name', 'keydown', handleKeyDown);
			    </script>
EOQ;
			}
		}

		$EditView->view = 'EmailQCView';
		$EditView->defs['templateMeta']['form']['headerTpl'] = 'include/EditView/header.tpl';
		$EditView->defs['templateMeta']['form']['footerTpl'] = 'include/EditView/footer.tpl';

        $json = new JSON();
        $prefillData = $json->encode($emailAddress);
        $EditView->assignVar('prefillData', $prefillData);
        $EditView->assignVar('prefillEmailAddresses', 'false');

        if ($module == 'Users') {
            $EditView->assignVar('useReplyTo', true);
        } else {
            $EditView->assignVar('useOptOut', true);
            $EditView->assignVar('useInvalid', true);
        }

		$meta = array();
		$meta['html'] = $jsLanguage . $EditView->display(false, true);
		$meta['html'] = str_replace("src='".getVersionedPath('include/SugarEmailAddress/SugarEmailAddress.js')."'", '', $meta['html']);
		$meta['emailAddress'] = $emailAddress;

		$mod_strings = return_module_language($current_language, 'Emails');

		return $meta;
	}

	/**
     * Renders the Import form from Smarty and returns HTML
     * @param array $vars request variable global
     * @param object $email Fetched email object
     * @param bool $addToAddressBook
     * @return array
     */
    function getImportForm($vars, $email, $formName = 'ImportEditView') {
		require_once("include/EditView/EditView2.php");
        $qsd = QuickSearchDefaults::getQuickSearchDefaults();
		$qsd->setFormName($formName);

        global $app_strings;
        global $current_user;
        global $app_list_strings;
		$sqs_objects = array(
		                     "{$formName}_parent_name" => $qsd->getQSParent(),
		);
        $smarty = new Sugar_Smarty();
        $smarty->assign("APP",$app_strings);
        $smarty->assign('formName',$formName);

        $showTeam = false;
        if (!isset($vars['showTeam']) || $vars['showTeam'] == true) {
        	$showTeam = true;
		} // if
        if ($showTeam) {
        	$smarty->assign("teamId", $current_user->default_team);
        	$email->team_id = $current_user->default_team;
			$email->team_set_id = $current_user->team_set_id;
        }
        $smarty->assign("showTeam",$showTeam);

		$teamSetField = new EmailSugarFieldTeamsetCollection($email, $email->field_defs, '', $formName);
		$code = $teamSetField->get_code();
        $code .= $teamSetField->createQuickSearchCode(true);
        $jsCode = '';

        // extract js code. need to add it to the top of the template. so it can be evaluated.
        preg_match_all('#<script[^>]*>.*?</script>#is', $code, $js);
        if (!empty($js[0])) {
            $jsCode = implode("\n", $js[0]);
            $code = str_replace($js[0], '', $code);
        }

        $smarty->assign("TEAM_SET_FIELD", $code);
        $smarty->assign("JS", $jsCode);
        $showAssignTo = false;
        if (!isset($vars['showAssignTo']) || $vars['showAssignTo'] == true) {
        	$showAssignTo = true;
		} // if
		if ($showAssignTo) {
	        if(empty($email->assigned_user_id) && empty($email->id))
	            $email->assigned_user_id = $current_user->id;
	        if(empty($email->assigned_name) && empty($email->id))
	            $email->assigned_user_name = $current_user->user_name;
	        $sqs_objects["{$formName}_assigned_user_name"] = $qsd->getQSUser();
		}
		$smarty->assign("showAssignedTo",$showAssignTo);

        $showDelete = false;
        if (!isset($vars['showDelete']) || $vars['showDelete'] == true) {
            $showDelete = true;
        }
        $smarty->assign("showDelete",$showDelete);

        $smarty->assign("userId",$email->assigned_user_id);
        $smarty->assign("userName",$email->assigned_user_name);
        $parent_types = $app_list_strings['record_type_display'];
        $smarty->assign('parentOptions', get_select_options_with_id($parent_types, $email->parent_type));

		$quicksearch_js = '<script type="text/javascript" language="javascript">sqs_objects = ' . json_encode($sqs_objects) . '</script>';
        $smarty->assign('SQS', $quicksearch_js);

        $meta = array();
        $meta['html'] = $smarty->fetch("modules/Emails/templates/importRelate.tpl");
        return $meta;
    }

    /**
     * This function returns the detail view for email in new 2.0 interface
     *
     */
    function getDetailViewForEmail2($emailId) {

		global $app_strings, $app_list_strings;
		global $mod_strings;

        $smarty = new Sugar_Smarty();

		// SETTING DEFAULTS
		$focus = BeanFactory::getBean('Emails', $emailId);
		$title = "";
		if($focus->type == 'out') {
			$title = getClassicModuleTitle('Emails', array($mod_strings['LBL_SENT_MODULE_NAME'],$focus->name), true);
		} elseif ($focus->type == 'draft') {
			$title = getClassicModuleTitle('Emails', array($mod_strings['LBL_LIST_FORM_DRAFTS_TITLE'],$focus->name), true);
		} elseif($focus->type == 'inbound') {
			$title = getClassicModuleTitle('Emails', array($mod_strings['LBL_INBOUND_TITLE'],$focus->name), true);
		}
		$smarty->assign("emailTitle", $title);

		// DEFAULT TO TEXT IF NO HTML CONTENT:
		$html = trim(from_html($focus->description_html));
		if(empty($html)) {
			$smarty->assign('SHOW_PLAINTEXT', 'true');
		} else {
			$smarty->assign('SHOW_PLAINTEXT', 'false');
		}

		//if not empty or set to test (from test campaigns)
		if (!empty($focus->parent_type) && $focus->parent_type !='test') {
			$smarty->assign('PARENT_MODULE', $focus->parent_type);
            $smarty->assign('PARENT_TYPE', $app_list_strings['record_type_display'][$focus->parent_type] . ':');
		}

        global $gridline;
		$smarty->assign('MOD', $mod_strings);
		$smarty->assign('APP', $app_strings);
		$smarty->assign('GRIDLINE', $gridline);
		$smarty->assign('ID', $focus->id);
		$smarty->assign('TYPE', $focus->type);
		$smarty->assign('PARENT_NAME', $focus->parent_name);
		$smarty->assign('PARENT_ID', $focus->parent_id);
		$smarty->assign('NAME', $focus->name);
		$smarty->assign('ASSIGNED_TO', $focus->assigned_user_name);
		$smarty->assign('DATE_MODIFIED', $focus->date_modified);
		$smarty->assign('DATE_ENTERED', $focus->date_entered);
		$smarty->assign('DATE_START', $focus->date_start);
		$smarty->assign('TIME_START', $focus->time_start);
		$smarty->assign('FROM', $focus->from_addr);
		$smarty->assign('TO', nl2br($focus->to_addrs));
		$smarty->assign('CC', nl2br($focus->cc_addrs));
		$smarty->assign('BCC', nl2br($focus->bcc_addrs));
		$smarty->assign('CREATED_BY', $focus->created_by_name);
		$smarty->assign('MODIFIED_BY', $focus->modified_by_name);
		$smarty->assign('DATE_SENT', $focus->date_entered);
		$smarty->assign('EMAIL_NAME', 'RE: '.$focus->name);
		$smarty->assign("TAG", $focus->listviewACLHelper());
		$smarty->assign("SUGAR_VERSION", $GLOBALS['sugar_version']);
		$smarty->assign("JS_CUSTOM_VERSION", $GLOBALS['sugar_config']['js_custom_version']);

		require_once('modules/Teams/TeamSetManager.php');
        $smarty->assign("TEAM", TeamSetManager::getFormattedTeamsFromSet($focus, true));
		if(!empty($focus->reply_to_email)) {
			$replyTo = "
				<tr>
		        <td class=\"tabDetailViewDL\"><slot>".$mod_strings['LBL_REPLY_TO_NAME']."</slot></td>
		        <td colspan=3 class=\"tabDetailViewDF\"><slot>".$focus->reply_to_addr."</slot></td>
		        </tr>";
		 	$smarty->assign("REPLY_TO", $replyTo);
		}
		///////////////////////////////////////////////////////////////////////////////
		////	JAVASCRIPT VARS
		$jsVars  = '';
		$jsVars .= "var showRaw = '{$mod_strings['LBL_BUTTON_RAW_LABEL']}';";
		$jsVars .= "var hideRaw = '{$mod_strings['LBL_BUTTON_RAW_LABEL_HIDE']}';";
		$smarty->assign("JS_VARS", $jsVars);
		///////////////////////////////////////////////////////////////////////////////
		////	NOTES (attachements, etc.)
		///////////////////////////////////////////////////////////////////////////////

		$note = BeanFactory::newBean('Notes');
        //FIXME: notes.email_type should be Emails
        $where = 'notes.email_id=' . $this->db->quoted($focus->id);
		//take in account if this is from campaign and the template id is stored in the macros.

		if(isset($macro_values) && isset($macro_values['email_template_id'])){
            //FIXME: notes.email_type should be EmailTemplates
            $where = 'notes.email_id=' . $this->db->quoted($macro_values['email_template_id']);
		}
		$notes_list = $note->get_full_list("notes.name", $where, true);

		if(! isset($notes_list)) {
			$notes_list = array();
		}

		$attachments = '';
		for($i=0; $i<count($notes_list); $i++) {
			$the_note = $notes_list[$i];
			$attachments .= "<a href=\"index.php?entryPoint=download&id={$the_note->id}&type=Notes\">".$the_note->name."</a><br />";
			$focus->cid2Link($the_note->id, $the_note->file_mime_type);
		}
		$smarty->assign('DESCRIPTION', nl2br($focus->description));
		$smarty->assign('DESCRIPTION_HTML', from_html($focus->description_html));
		$smarty->assign("ATTACHMENTS", $attachments);
		///////////////////////////////////////////////////////////////////////////////
		////    SUBPANELS
		///////////////////////////////////////////////////////////////////////////////
		$show_subpanels = true;
		if ($show_subpanels) {
		    $subpanel = new SubPanelTiles($focus, 'Emails');
		    $smarty->assign("SUBPANEL", $subpanel->display());
		}
        $meta['html'] = $smarty->fetch("modules/Emails/templates/emailDetailView.tpl");
        return $meta;

    } // fn

	/**
	 * Sets the "read" flag in the overview cache
	 */
	function setReadFlag($ieId, $mbox, $uid) {
		$this->markEmails('read', $ieId, $mbox, $uid);
	}

	/**
	 * Marks emails with the passed flag type.  This will be applied to local
	 * cache files as well as remote emails.
	 * @param string $type Flag type
	 * @param string $ieId
	 * @param string $folder IMAP folder structure or SugarFolder GUID
	 * @param string $uids Comma sep list of UIDs or GUIDs
	 */
	function markEmails($type, $ieId, $folder, $uids) {

		global $app_strings;
		$uids = $this->_cleanUIDList($uids);
		$exUids = explode($app_strings['LBL_EMAIL_DELIMITER'], $uids);

		if(strpos($folder, 'sugar::') !== false) {
            // Collect message IDs for deleting mails from server
            $messageUIDs = array();
            // dealing with a sugar email object, uids are GUIDs
			foreach($exUids as $id) {
				$email = BeanFactory::getBean('Emails', $id);

                // BUG FIX BEGIN
                // Bug 50973 - marking unread in group inbox removes message
                if (empty($email->assigned_user_id))
                {
                    $email->setFieldNullable('assigned_user_id');
                }
                // BUG FIX END

				switch($type) {
					case "unread":
						$email->status = 'unread';
						$email->save();
					break;

					case "read":
						$email->status = 'read';
						$email->save();
					break;

					case "deleted":
                        if (!empty($email->message_uid)) {
                            $messageUIDs[] = $email->message_uid;
                        }
						$email->delete();
					break;

					case "flagged":
						$email->flagged = 1;
						$email->save();
					break;

					case "unflagged":
						$email->flagged = 0;
						$email->save();
					break;

				}

                // BUG FIX BEGIN
                // Bug 50973 - reset assigned_user_id field defs
                if (empty($email->assigned_user_id))
                {
                    $email->revertFieldNullable('assigned_user_id');
                }
                // BUG FIX END
			}

            // Do only Mail server call, since we have an array of UIDs
            switch ($type) {
                case "deleted":
                    $ieX = new InboundEmail();
                    $ieX->retrieve_by_string_fields(array('groupfolder_id' => $ieId, 'deleted' => 0));
                    if (!empty($ieX->id) && !$ieX->is_personal) {
                        // function retrieve_by_string_fields doesn't decrypt email_password -> call retrieve to do it
                        $ieX->retrieve($ieX->id);
                        $ieX->deleteMessageOnMailServer(implode($app_strings['LBL_EMAIL_DELIMITER'], $messageUIDs));
                    }
                    break;

                default:
                    break;
            }
		} else {
			/* dealing with IMAP email, uids are IMAP uids */
			global $ie; // provided by EmailUIAjax.php
			if(empty($ie)) {

				$ie = BeanFactory::newBean('InboundEmail');
                $ie->disable_row_level_security = true;
			}
			$ie->retrieve($ieId);
			$ie->mailbox = $folder;
			$ie->connectMailserver();
			// mark cache files
			if($type == 'deleted') {
				$ie->deleteMessageOnMailServer($uids);
				$ie->deleteMessageFromCache($uids);
			} else {
				$overviews = $ie->getCacheValueForUIDs($ie->mailbox, $exUids);
				$manipulated = array();

				foreach($overviews['retArr'] as $k => $overview) {
					if(in_array($overview->uid, $exUids)) {
						switch($type) {
							case "unread":
								$overview->seen = 0;
							break;

							case "read":
								$overview->seen = 1;
							break;

							case "flagged":
								$overview->flagged = 1;
							break;

							case "unflagged":
								$overview->flagged = 0;
							break;
						}
						$manipulated[] = $overview;
					}
				}

				if(!empty($manipulated)) {
					$ie->setCacheValue($ie->mailbox, array(), $manipulated);
					/* now mark emails on email server */
					$ie->markEmails(implode(",", explode($app_strings['LBL_EMAIL_DELIMITER'], $uids)), $type);
				}
			} // end not type == deleted
		}
	}

function doAssignment($distributeMethod, $ieid, $folder, $uids, $users) {
	global $app_strings, $mod_strings;
	$users = explode(",", $users);
	$emailIds = explode($app_strings['LBL_EMAIL_DELIMITER'], $uids);
	$out = "";
	if($folder != 'sugar::Emails') {
		$emailIds = array();
		$uids = explode($app_strings['LBL_EMAIL_DELIMITER'], $uids);
		$ie = BeanFactory::getBean('InboundEmail', $ieid);
        $ie->disable_row_level_security = true;
		$messageIndex = 1;
		// dealing with an inbound email data so we need to import an email and then
		foreach($uids as $uid) {
			$ie->mailbox = $folder;
			$ie->connectMailserver();
			$msgNo = $uid;
			if (!$ie->isPop3Protocol()) {
				$msgNo = imap_msgno($ie->conn, $uid);
			} else {
				$msgNo = $ie->getCorrectMessageNoForPop3($uid);
			}

			if(!empty($msgNo)) {
				if ($ie->importOneEmail($msgNo, $uid)) {
					$emailIds[] = $ie->email->id;
					$ie->deleteMessageOnMailServer($uid);
					//$ie->retrieve($ieid);
					//$ie->connectMailserver();
					$ie->mailbox = $folder;
					$ie->deleteMessageFromCache(($uids[] = $uid));
				} else {
					$out = $out . string_format($mod_strings['ERR_MSG_FAILED'], array($messageIndex))." \r\n";
				}
			}
			$messageIndex++;
		} // for
	} // if

	if (count($emailIds) > 0) {
		$this->doDistributionWithMethod($users, $emailIds, $distributeMethod);
	} // if
	return $out;
} // fn

/**
 * get team id and team set id from request
 * @return  array
 */
function getTeams() {
	$teamInfo = array();
	if (!empty($_REQUEST['team_ids'])) {
		$teamInfo['primaryTeamId'] = $_REQUEST['primary_team_id'];
		$teamIds = explode(",", $_REQUEST['team_ids']);
		$teamSet = BeanFactory::newBean('TeamSets');
		$teamInfo['teamSetId'] = $teamSet->addTeams($teamIds);
	} // if
	return $teamInfo;
}

function doDistributionWithMethod($users, $emailIds, $distributionMethod) {
	// we have users and the items to distribute
	if($distributionMethod == 'roundRobin') {
		$this->distRoundRobin($users, $emailIds);
	} elseif($distributionMethod == 'leastBusy') {
		$this->distLeastBusy($users, $emailIds);
	} elseif($distributionMethod == 'direct') {
		if(count($users) > 1) {
			// only 1 user allowed in direct assignment
			$error = 1;
		} else {
			$user = $users[0];
			$this->distDirect($user, $emailIds);
		} // else
	} // elseif

} // fn

/**
 * distributes emails to users on Round Robin basis
 * @param	$userIds	array of users to dist to
 * @param	$mailIds	array of email ids to push on those users
 * @return  boolean		true on success
 */
function distRoundRobin($userIds, $mailIds) {
	// check if we have a 'lastRobin'
	$assignedTeamInfo = $this->getTeams();
	$lastRobin = $userIds[0];
	foreach($mailIds as $k => $mailId) {
		$userIdsKeys = array_flip($userIds); // now keys are values
		$thisRobinKey = $userIdsKeys[$lastRobin] + 1;
		if(!empty($userIds[$thisRobinKey])) {
			$thisRobin = $userIds[$thisRobinKey];
			$lastRobin = $userIds[$thisRobinKey];
		} else {
			$thisRobin = $userIds[0];
			$lastRobin = $userIds[0];
		}

		$email = BeanFactory::getBean('Emails', $mailId);
		$email->assigned_user_id = $thisRobin;
		$email->status = 'unread';
		$email->team_id = $assignedTeamInfo['primaryTeamId'];
		$email->team_set_id = $assignedTeamInfo['teamSetId'];
		$email->save();

        //FIXME: notes.email_type should be Emails
        $where = 'notes.email_id=' . $this->db->quoted($mailId);
        $attachments = BeanFactory::getBean('Notes')->get_full_list('', $where, true);

        foreach ($attachments as $note) {
            $note->team_id = $email->team_id;
            $note->team_set_id = $email->team_set_id;
            $note->save();
        }
	}

	return true;
}

/**
 * distributes emails to users on Least Busy basis
 * @param	$userIds	array of users to dist to
 * @param	$mailIds	array of email ids to push on those users
 * @return  boolean		true on success
 */
function distLeastBusy($userIds, $mailIds) {
	$assignedTeamInfo = $this->getTeams();
	foreach($mailIds as $k => $mailId) {
		$email = BeanFactory::getBean('Emails', $mailId);
            $query = 'SELECT COUNT(*) AS c FROM emails WHERE assigned_user_id = ? AND status = ?';
            foreach ($userIds as $k => $id) {
                $counts[$id] = $this->db->getConnection()->executeQuery($query, [$id, 'unread'])->fetchOne();
            }
		asort($counts); // lowest to highest
		$countsKeys = array_flip($counts); // keys now the 'count of items'
		$leastBusy = array_shift($countsKeys); // user id of lowest item count
		$email->assigned_user_id = $leastBusy;
		$email->status = 'unread';
		$email->team_id = $assignedTeamInfo['primaryTeamId'];
		$email->team_set_id = $assignedTeamInfo['teamSetId'];
		$email->save();

        //FIXME: notes.email_type should be Emails
        $where = 'notes.email_id=' . $this->db->quoted($mailId);
        $attachments = BeanFactory::getBean('Notes')->get_full_list('', $where, true);

        foreach ($attachments as $note) {
            $note->team_id = $email->team_id;
            $note->team_set_id = $email->team_set_id;
            $note->save();
        }
	}
	return true;
}

/**
 * distributes emails to 1 user
 * @param	$user		users to dist to
 * @param	$mailIds	array of email ids to push
 * @return  boolean		true on success
 */
function distDirect($user, $mailIds) {
	$assignedTeamInfo = $this->getTeams();
	foreach($mailIds as $k => $mailId) {
		$email = BeanFactory::getBean('Emails', $mailId);
		$email->assigned_user_id = $user;
		$email->status = 'unread';


		$email->load_relationship('teams');
		if( !empty($email->teams) && $assignedTeamInfo)
		{
		    $updateType = 'replace';
		    if( !empty($_REQUEST['team_update_type']) )
		        $updateType = $_REQUEST['team_update_type'];
		    //Use the TeamSetLink to generate the correct team set id rather than
		    if (!empty ($assignedTeamInfo['primaryTeamId']))
                $email->team_id = $assignedTeamInfo['primaryTeamId'];
		    $teamIds = explode(",", $_REQUEST['team_ids']);
		    $email->teams->$updateType($teamIds,array(), FALSE);
			$email->teams->save(false, false);

		}
		$email->save();

        //FIXME: notes.email_type should be Emails
        $where = 'notes.email_id=' . $this->db->quoted($mailId);
        $attachments = BeanFactory::getBean('Notes')->get_full_list('', $where, true);

        foreach ($attachments as $note) {
            $note->team_id = $email->team_id;
            $note->team_set_id = $email->team_set_id;
            $note->save();
        }
	}
	return true;
}

function getAssignedEmailsCountForUsers($userIds) {
	$counts = array();
	foreach($userIds as $id) {
            $query = sprintf(
                "SELECT count(*) AS c FROM emails WHERE assigned_user_id = %s AND status = 'unread'",
                $this->db->quoted($id)
            );
            $r = $this->db->query($query);
		$a = $this->db->fetchByAssoc($r);
		$counts[$id] = $a['c'];
	} // foreach
	return $counts;
} // fn

function getLastRobin($ie) {
	$lastRobin = "";
	if($this->validCacheFileExists($ie->id, 'folders', "robin.cache.php")) {
		$lastRobin = $this->getCacheValue($ie->id, 'folders', "robin.cache.php", 'robin');
	} // if
	return $lastRobin;
} // fn

function setLastRobin($ie, $lastRobin) {
    global $sugar_config;
    $cacheFolderPath = sugar_cached("modules/Emails/{$ie->id}/folders");
    if (!file_exists($cacheFolderPath)) {
    	mkdir_recursive($cacheFolderPath);
    }
	$this->writeCacheFile('robin', $lastRobin, $ie->id, 'folders', "robin.cache.php");
} // fn

	/**
	 * returns the metadata defining a single email message for display.  Uses cache file if it exists
	 * @return array
	 */
function getSingleMessage($ie) {

		global $timedate;
		global $app_strings,$mod_strings;

        $ieId = $this->request->getValidInputRequest('ieId', 'Assert\Guid');
        $mbox = $this->request->getValidInputRequest('mbox');
        $uid = $this->request->getValidInputRequest('uid', 'Assert\Guid');

		$ie->retrieve($ieId);
		$noCache = true;

		$ie->mailbox = $mbox;


        if ($this->mboxCacheExists($ieId, $mbox, $uid)) {
            $out = $this->getMboxCacheValue($ieId, $mbox, $uid);
			$noCache = false;

			// something fubar'd the cache?
			if(empty($out['meta']['email']['name']) && empty($out['meta']['email']['description'])) {
				$noCache = true;
			} else {
				// When sending data from cache, convert date into users preffered format
				$dateTimeInGMTFormat = $out['meta']['email']['date_start'];
				$out['meta']['email']['date_start'] = $timedate->to_display_date_time($dateTimeInGMTFormat);
			} // else
		}

		if($noCache) {
			$writeToCacheFile = true;
			if ($ie->isPop3Protocol()) {
				$status = $ie->setEmailForDisplay($uid, true, true, true);
			} else {
				$status = $ie->setEmailForDisplay($uid, false, true, true);
			}
			$out = $ie->displayOneEmail($uid, $mbox);
			// modify the out object to store date in GMT format on the local cache file
			$dateTimeInUserFormat = $out['meta']['email']['date_start'];
			$out['meta']['email']['date_start'] = $timedate->to_db($dateTimeInUserFormat);
			if ($status == 'error') {
				$writeToCacheFile = false;
			}
			if ($writeToCacheFile) {
                $this->writeMboxCacheValue($ieId, $mbox, $uid, $out);
			// restore date in the users preferred format to be send on to UI for diaply
			$out['meta']['email']['date_start'] = $dateTimeInUserFormat;
			} // if
		}
		$out['meta']['email']['toaddrs'] = $this->generateExpandableAddrs($out['meta']['email']['toaddrs']);
		if(!empty($out['meta']['email']['cc_addrs'])) {
            $ccs = $this->generateExpandableAddrs($out['meta']['email']['cc_addrs']);
		    $out['meta']['cc'] = <<<eoq
				<tr>
					<td NOWRAP valign="top" class="displayEmailLabel">
						{$app_strings['LBL_EMAIL_CC']}:
					</td>
					<td class="displayEmailValue">
						{$ccs}
					</td>
				</tr>
eoq;
		}

        if (!empty($out['meta']['email']['name'])) {
            $out['meta']['email']['name'] = to_html($out['meta']['email']['name']);
        }

        if (empty($out['meta']['email']['description'])) {
            $out['meta']['email']['description'] = $mod_strings['LBL_EMPTY_EMAIL_BODY'];
        }

		$this->setReadFlag($ieId, $mbox, $uid);
		return $out;
	}


	/**
	 * Returns the HTML for a list of emails in a given folder
	 * @param GUID $ieId GUID to InboundEmail instance
	 * @param string $mbox Mailbox path name in dot notation
	 * @param int $folderListCacheOffset Seconds for valid cache file
	 * @return string HTML render of list.
	 */
	function getListEmails($ieId, $mbox, $folderListCacheOffset, $forceRefresh='false') {
		global $sugar_config;


		$ie = BeanFactory::getBean('InboundEmail', $ieId);
        $ie->disable_row_level_security = true;
		$list = $ie->displayFolderContents($mbox, $forceRefresh);

		return $list;
	}

	/**
	 * Returns the templatized compose screen.  Used by reply, forwards and draft status messages.
	 * @param object email Email bean in focus
	 */
	function displayComposeEmail($email) {
		global $locale;
		global $current_user;


		$ea = BeanFactory::newBean('EmailAddresses');

		if(!empty($email)) {
		    $email->cids2Links();
			$description = (empty($email->description_html)) ? $email->description : $email->description_html;
		}

		//Get the most complete address list availible for this email
		$addresses = array('toAddresses' => 'to', 'ccAddresses' => 'cc', 'bccAddresses' => 'bcc');
		foreach($addresses as $var => $type)
		{
			$$var = "";
			foreach (array("{$type}_addrs_names", "{$type}addrs", "{$type}_addrs") as $emailVar)
			{
				if (!empty($email->$emailVar)) {
					$$var = $email->$emailVar;
					break;
				}
			}
		}

		$ret = array();
		$ret['type'] = $email->type;
		$ret['name'] = $email->name;
		$ret['description'] = $description;
		$ret['from'] = (isset($_REQUEST['composeType']) && $_REQUEST['composeType'] == 'forward') ? "" : $email->from_addr;
		$ret['to'] = from_html($toAddresses);
		$ret['uid'] = $email->id;
		$ret['parent_name'] = $email->parent_name;
		$ret['parent_type'] = $email->parent_type;
		$ret['parent_id'] = $email->parent_id;

       if ($email->type == 'draft') {
            $ret['cc'] = from_html($ccAddresses);
            $ret['bcc'] = $bccAddresses;
        }
		// reply all
		if(isset($_REQUEST['composeType']) && $_REQUEST['composeType'] == 'replyAll') {
		    $ret['cc'] = from_html($ccAddresses);
		    $ret['bcc'] = $bccAddresses;

			$userEmails = array();
			$userEmailsMeta = $ea->getAddressesByGUID($current_user->id, 'Users');
			foreach($userEmailsMeta as $emailMeta) {
				$userEmails[] = from_html(strtolower(trim($emailMeta['email_address'])));
			}
			$userEmails[] = from_html(strtolower(trim($email->from_addr)));

			$ret['cc'] = from_html($email->cc_addrs);
			$toAddresses = from_html($toAddresses);
			$to = str_replace($this->addressSeparators, "::", $toAddresses);
			$exTo = explode("::", $to);

			if(is_array($exTo)) {
				foreach($exTo as $addr) {
					$addr = strtolower(trim($addr));
					if(!in_array($addr, $userEmails)) {
						if(!empty($ret['cc'])) {
							$ret['cc'] = $ret['cc'].", ";
						}
						$ret['cc'] = $ret['cc'].trim($addr);
					}
				}
			} elseif(!empty($exTo)) {
				$exTo = trim($exTo);
				if(!in_array($exTo, $userEmails)) {
					$ret['cc'] = $ret['cc'].", ".$exTo;
				}
			}
		}
		return $ret;
	}
	/**
	 * Formats email body on reply/forward
	 * @param object email Email object in focus
	 * @param string type
	 * @return object email
	 */
	function handleReplyType($email, $type) {
		global $mod_strings;
		 $GLOBALS['log']->debug("****At Handle Reply Type: $type");
		switch($type) {
			case "reply":
			case "replyAll":
				$header = $email->getReplyHeader();
                if(!preg_match('/^(re:)+/i', $email->name)) {
                    $email->name = "{$mod_strings['LBL_RE']} {$email->name}";
                }
				if ($type == "reply") {
					$email->cc_addrs = "";
					if (!empty($email->reply_to_addr)) {
						$email->from_addr = $email->reply_to_addr;
					} // if
				} else {
					if (!empty($email->reply_to_addr)) {
						$email->to_addrs = $email->to_addrs . "," . $email->reply_to_addr;
					} // if
				} // else
			break;

			case "forward":
				$header = $email->getForwardHeader();
				if(!preg_match('/^(fw:)+/i', $email->name)) {
                    $email->name = "{$mod_strings['LBL_FW']} {$email->name}";
                }
				$email->cc_addrs = "";
			break;

			case "replyCase":
				$GLOBALS['log']->debug("EMAILUI: At reply case");
				$header = $email->getReplyHeader();

                $myCase = BeanFactory::getBean('Cases', $email->parent_id);
                $myCaseMacro = $myCase->getEmailSubjectMacro();
                $email->parent_name = $myCase->name;
                $GLOBALS['log']->debug("****Case # : {$myCase->case_number} macro: $myCaseMacro");
				if(!strpos($email->name, str_replace('%1',$myCase->case_number,$myCaseMacro))) {
		        	$GLOBALS['log']->debug("Replacing");
		            $email->name = str_replace('%1',$myCase->case_number,$myCaseMacro) . ' '. $email->name;
		        }
                $email->name = "{$mod_strings['LBL_RE']} {$email->name}";
            break;
		}

		$html = trim($email->description_html);
		$plain = trim($email->description);

		$desc = (!empty($html)) ? $html : $plain;

        $email->description = $header.$email->quoteHtmlEmail($desc);
		return $email;

	}

	///////////////////////////////////////////////////////////////////////////
	////	PRIVATE HELPERS
	/**
	 * Generates a UNION query to get one list of users, contacts, leads, and
	 * prospects; used specifically for the addressBook
	 */
	function _getPeopleUnionQuery($whereArr , $person) {
		global $current_user , $app_strings;
		global $db;
		if(!isset($person) || $person === 'LBL_DROPDOWN_LIST_ALL'){
			$peopleTables = array("users",
			                      "contacts",
			                      "leads",
			                      "prospects",
			                      "accounts"
			                     );
		}else{
			$peopleTables = array($person);
		}
		$q = '';

		$whereAdd = "";

		foreach($whereArr as $column => $clause) {
			if(!empty($whereAdd)) {
				$whereAdd .= " AND ";
			}
			$clause = $current_user->db->quote($clause);
			$whereAdd .= "{$column} LIKE '{$clause}%'";
		}


		foreach($peopleTables as $table) {
			$module = ucfirst($table);
			$person = BeanFactory::newBean($module);
			if (!$person->ACLAccess('list')) {
				continue;
			} // if
			$where = "({$table}.deleted = 0 AND eabr.primary_address = 1 AND {$table}.id <> '{$current_user->id}')";

            if (ACLController::requireOwner($module, 'list')) {
            	$where = $where . " AND ({$table}.assigned_user_id = '{$current_user->id}')";
            } // if
			if(!empty($whereAdd)) {
				$where .= " AND ({$whereAdd})";
			}

			if ($person === 'accounts') {
				$t = "SELECT {$table}.id, '' first_name, {$table}.name, eabr.primary_address, ea.email_address, '{$module}' module ";
			} else {
				$t = "SELECT {$table}.id, {$table}.first_name, {$table}.last_name, eabr.primary_address, ea.email_address, '{$module}' module ";
			}
			$t .= "FROM {$table} ";
			$t .= "JOIN email_addr_bean_rel eabr ON ({$table}.id = eabr.bean_id and eabr.deleted=0) ";
			$t .= "JOIN email_addresses ea ON (eabr.email_address_id = ea.id) ";
			$person->add_team_security_where_clause($t);
			$t .= " WHERE {$where}";

			if(!empty($q)) {
				$q .= "\n UNION ALL \n";
			}

			$q .= "({$t})";
		}
		$countq = "SELECT count(people.id) c from ($q) people";
		$q .= "ORDER BY last_name";

		return array('query' => $q, 'countQuery' => $countq);
    }

    /**
     * get emails of related bean for a given bean id
     * @param $beanType
     * @param $condition array of conditions inclued bean id
     * @return array('query' => $q, 'countQuery' => $countq);
     */
    function getRelatedEmail($beanType, $whereArr, $relatedBeanInfoArr = ''){
    	global $beanList, $current_user, $app_strings, $db;
    	$finalQuery = '';
		$searchBeans = null;
		if($beanType === 'LBL_DROPDOWN_LIST_ALL')
			$searchBeans = array("users",
			                     "contacts",
			                     "leads",
			                     "prospects",
			                     "accounts"
			                    );

    	if ($relatedBeanInfoArr == '' || empty($relatedBeanInfoArr['related_bean_type']) )
    	{
			if ($searchBeans != null)
			{
				$q = array();
				foreach ($searchBeans as $searchBean)
				{
				    $searchq = $this->findEmailFromBeanIds('', $searchBean, $whereArr);
				    if(!empty($searchq)) {
                        $q[] = $searchq;
				    }
				}
				if (!empty($q))
                    $finalQuery .= implode("\n UNION \n", $q);
			}
			else
				$finalQuery = $this->findEmailFromBeanIds('', $beanType, $whereArr);
    	}
    	else
    	{
    	    $focus = BeanFactory::getBean($relatedBeanInfoArr['related_bean_type'], $relatedBeanInfoArr['related_bean_id']);
    	    if ($searchBeans != null)
    	    {
    	        $q = array();
    	        foreach ($searchBeans as $searchBean)
    	        {
    	            if ($focus->load_relationship($searchBean))
    	            {
    	                $data = $focus->$searchBean->get();
    	                if (count($data) != 0)
                            $q[] = $this->findEmailFromBeanIds($data, $searchBean, $whereArr);
    	            }
    	        }
    	        if (!empty($q))
                    $finalQuery .= implode("\n UNION \n", $q);
    	    }
    	    else
    	    {
    	        if ($focus->load_relationship($beanType))
    	        {
    	            $data = $focus->$beanType->get();
    	            if (count($data) != 0)
    	            $finalQuery = $this->findEmailFromBeanIds($data, $beanType, $whereArr);
    	        }
    	    }
    	}
    	$countq = "SELECT count(people.id) c from ($finalQuery) people";
	   	return array('query' => $finalQuery, 'countQuery' => $countq);
    }

    function findEmailFromBeanIds($beanIds, $beanType, $whereArr) {
    	global $current_user;
        $q = array();
        $finalQuery = '';
		$relatedIDs = '';
		if ($beanIds != '') {
			foreach ($beanIds as $key => $value) {
				$beanIds[$key] = '\''.$value.'\'';
			}
			$relatedIDs = implode(',', $beanIds);
		}

        // Accounts are not Person modules, so we can't query by 'first_name',
        // 'last_name', or 'full_name'. Instead, query by 'name'
        if ($beanType == 'accounts') {
            if (isset($whereArr['first_name'])) {
                $whereArr['name'] = $whereArr['first_name'];
            }
            unset($whereArr['last_name']);
            unset($whereArr['first_name']);
            unset($whereArr['full_name']);
        }

        $table = $beanType;
        $module = ucfirst($table);
        $person = BeanFactory::newBean($module);
        $personACLAccessList = $person->ACLAccess('list');
        $requireOwner = ACLController::requireOwner($module, 'list');
        if ($personACLAccessList) { // build query
            if (empty($whereArr)) {
                $whereAdd = '';
                $t = $this->buildQuery(
                    $relatedIDs,
                    $table,
                    $whereAdd,
                    $requireOwner,
                    $current_user,
                    $beanType,
                    $module,
                    $person
                );
                if (!empty($t)) {
                    $q[] = '(' . $t . ')';
                }
            } else {
                foreach ($whereArr as $column => $clause) {
                    $clause = $current_user->db->quote($clause);

                    // Since full_name isn't a DB field, we need to query by the
                    // concatenation of {first_name} + " " + {last_name}
                    if ($column === 'full_name') {
                        $db = DBManagerFactory::getInstance();
                        $column = $db->concat($table, ['first_name', 'last_name']);
                    }

                    $whereAdd = "{$column} LIKE '{$clause}%'";
                    $t = $this->buildQuery(
                        $relatedIDs,
                        $table,
                        $whereAdd,
                        $requireOwner,
                        $current_user,
                        $beanType,
                        $module,
                        $person
                    );
                    if (!empty($t)) {
                        $q[] = '(' . $t . ')';
                    }
                }
            }
        }

        if (!empty($q)) {
            $finalQuery = implode("\n UNION \n", $q);
        }

        return $finalQuery;
    }

    private function buildQuery(
        $relatedIDs,
        $table,
        $whereAdd,
        $requireOwner,
        $current_user,
        $beanType,
        $module,
        $person
    ) {
        if ($relatedIDs != '') {
            $where = "({$table}.deleted = 0 AND eabr.primary_address = 1 AND {$table}.id in ($relatedIDs))";
        } else {
            $where = "({$table}.deleted = 0 AND eabr.primary_address = 1)";
        }

        if ($requireOwner) {
            $where = $where . " AND ({$table}.assigned_user_id = '{$current_user->id}')";
        } // if
        if (!empty($whereAdd)) {
            $where .= " AND ({$whereAdd})";
        }

        $t = $beanType === 'accounts' ?
            "SELECT {$table}.id, '' first_name, {$table}.name last_name, " :
            "SELECT {$table}.id, {$table}.first_name, {$table}.last_name, ";

        $t .= "eabr.primary_address, ea.id AS email_address_id, ea.email_address, ea.opt_out, '{$module}' module ";
        $t .= "FROM {$table} ";
        $t .= "JOIN email_addr_bean_rel eabr ON ({$table}.id = eabr.bean_id and eabr.deleted=0) ";
        $t .= "JOIN email_addresses ea ON (eabr.email_address_id = ea.id) ";
        $person->add_team_security_where_clause($t);
        $t .= " WHERE {$where} AND ea.invalid_email = 0";

        return $t;
    }

	/**
	 * Cleans UID lists
	 * @param mixed $uids
	 * @param bool $returnString False will return an array
	 * @return mixed
	 */
	function _cleanUIDList($uids, $returnString=false) {
		global $app_strings;
		$GLOBALS['log']->debug("_cleanUIDList: before - [ {$uids} ]");

		if(!is_array($uids)) {
			$returnString = true;

			$exUids = explode($app_strings['LBL_EMAIL_DELIMITER'], $uids);
			$uids = $exUids;
		}

		$cleanUids = array();
		foreach($uids as $uid) {
			$cleanUids[$uid] = $uid;
		}

		sort($cleanUids);

		if($returnString) {
			$cleanImplode = implode($app_strings['LBL_EMAIL_DELIMITER'], $cleanUids);
			$GLOBALS['log']->debug("_cleanUIDList: after - [ {$cleanImplode} ]");
			return $cleanImplode;
		}

		return $cleanUids;
	}

	/**
	 * Creates defaults for the User
	 * @param object $user User in focus
	 */
	function preflightUser(&$user) {
		global $mod_strings;

		$goodToGo = $user->getPreference("email2Preflight", "Emails");
			$q = "SELECT count(*) count FROM folders f where f.created_by = '{$user->id}' AND f.folder_type = 'inbound' AND f.deleted = 0";
			$r = $user->db->query($q);
			$a = $user->db->fetchByAssoc($r);

			if($a['count'] < 1) {
				$privateTeam = $user->getPrivateTeamID();
				// My Emails
				$folder = new SugarFolder();
				$folder->new_with_id = true;
				$folder->id = create_guid();
				$folder->name = $mod_strings['LNK_MY_INBOX'];
				$folder->has_child = 1;
				$folder->created_by = $user->id;
				$folder->modified_by = $user->id;
				$folder->is_dynamic = 1;
				$folder->folder_type = "inbound";
				$folder->dynamic_query = $this->generateDynamicFolderQuery('inbound', $user->id);
				$teamSet = BeanFactory::newBean('TeamSets');
				$team_set_id = $teamSet->addTeams($privateTeam);
				$folder->team_id = $privateTeam;
				$folder->team_set_id = $team_set_id;
				$folder->save();

				// My Drafts
				$drafts = new SugarFolder();
				$drafts->name = $mod_strings['LNK_MY_DRAFTS'];
				$drafts->has_child = 0;
				$drafts->parent_folder = $folder->id;
				$drafts->created_by = $user->id;
				$drafts->modified_by = $user->id;
				$drafts->is_dynamic = 1;
				$drafts->folder_type = "draft";
				$drafts->dynamic_query = $this->generateDynamicFolderQuery('draft', $user->id);
				$drafts->team_id = $privateTeam;
				$drafts->team_set_id = $team_set_id;
				$drafts->save();


				// Sent Emails
				$archived = new SugarFolder();
				$archived->name = $mod_strings['LNK_SENT_EMAIL_LIST'];
				$archived->has_child = 0;
				$archived->parent_folder = $folder->id;
				$archived->created_by = $user->id;
				$archived->modified_by = $user->id;
				$archived->is_dynamic = 1;
				$archived->folder_type = "sent";
				$archived->dynamic_query = $this->generateDynamicFolderQuery('sent', $user->id);
				$archived->team_id = $privateTeam;
				$archived->team_set_id = $team_set_id;
				$archived->save();

				// Archived Emails
				$archived = new SugarFolder();
				$archived->name = $mod_strings['LBL_LIST_TITLE_MY_ARCHIVES'];
				$archived->has_child = 0;
				$archived->parent_folder = $folder->id;
				$archived->created_by = $user->id;
				$archived->modified_by = $user->id;
				$archived->is_dynamic = 1;
				$archived->folder_type = "archived";
				$archived->dynamic_query = '';
				$archived->team_id = $privateTeam;
				$archived->team_set_id = $team_set_id;
				$archived->save();

			// set flag to show that this was run
			$user->setPreference("email2Preflight", true, 1, "Emails");
		}
	}

	/**
	 * Parses the core dynamic folder query
	 * @param string $type 'inbound', 'draft', etc.
	 * @param string $userId
	 * @return string
	 */
	function generateDynamicFolderQuery($type, $userId) {
		$q = $this->coreDynamicFolderQuery;

		$status = $type;

		if($type == "sent") {
			$type = "out";
		}

		$replacee = array("::TYPE::", "::STATUS::", "::USER_ID::");
		$replacer = array($type, $status, $userId);

		$ret = str_replace($replacee, $replacer, $q);

		if($type == 'inbound') {
			$ret .= " AND status NOT IN ('sent', 'archived', 'draft') AND type NOT IN ('out', 'archived', 'draft')";
		} else {
			$ret .= " AND status NOT IN ('archived') AND type NOT IN ('archived')";
		}

		return $ret;
	}

	/**
	 * Preps the User's cache dir
	 */
	function preflightUserCache() {
		$path = clean_path($this->userCacheDir);
		if(!file_exists($this->userCacheDir))
			mkdir_recursive($path);

		$files = findAllFiles($path, array());

		foreach($files as $file) {
			unlink($file);
		}
	}

	function clearInboundAccountCache($ieId) {
		global $sugar_config;
		$cacheRoot = sugar_cached("modules/Emails/{$ieId}");
		$files = findAllFiles($cacheRoot."/messages/", array());
		foreach($files as $file) {
			unlink($file);
		} // fn
		$files = findAllFiles($cacheRoot."/attachments/", array());
		foreach($files as $file) {
			unlink($file);
		} // for
	} // fn

	/**
	 * returns an array of EmailTemplates that the user has access to for the compose email screen
	 * @return array
	 */
	function getEmailTemplatesArray() {

		global $app_strings;

		if(ACLController::checkAccess('EmailTemplates', 'list', true) && ACLController::checkAccess('EmailTemplates', 'view', true)) {
			$et = BeanFactory::newBean('EmailTemplates');
            $etResult = $et->db->query($et->create_new_list_query('',"(type IS NULL OR type='' OR type='email')",array(),array(),''));
			$email_templates_arr = array('' => $app_strings['LBL_NONE']);
			while($etA = $et->db->fetchByAssoc($etResult)) {
				$email_templates_arr[$etA['id']] = $etA['name'];
			}
		} else {
			$email_templates_arr = array('' => $app_strings['LBL_NONE']);
		}

		return $email_templates_arr;
	}

	function getFromAccountsArray($ie) {
        global $current_user;
        global $app_strings;

        $ieAccountsFull = $ie->retrieveAllByGroupIdWithGroupAccounts($current_user->id);
        $ieAccountsFrom= array();

        $oe = new OutboundEmail();
        $system = $oe->getSystemMailerSettings();
        $ret = $current_user->getUsersNameAndEmail();
		$ret['name'] = from_html($ret['name']);
		$useMyAccountString = true;

        if(empty($ret['email'])) {
        	$systemReturn = $current_user->getSystemDefaultNameAndEmail();
        	$ret['email'] = $systemReturn['email'];
        	$ret['name'] = from_html($systemReturn['name']);
        	$useMyAccountString = false;
		} // if

		$myAccountString = '';
		if ($useMyAccountString) {
			$myAccountString = " - {$app_strings['LBL_MY_ACCOUNT']}";
		} // if

		//Check to make sure that the user has set the associated inbound email account -> outbound account is active.
        $showFolders = unserialize(base64_decode($current_user->getPreference('showFolders', 'Emails')), ['allowed_classes' => false]);
        $sf = new SugarFolder();
        $groupSubs = $sf->getSubscriptions($current_user);

        foreach($ieAccountsFull as $k => $v)
        {
            $personalSelected = (!empty($showFolders) && in_array($v->id, $showFolders));

            $allowOutboundGroupUsage = $v->get_stored_options('allow_outbound_group_usage',FALSE);
            $groupSelected = ( in_array($v->groupfolder_id, $groupSubs)  && $allowOutboundGroupUsage);
            $selected = ( $personalSelected || $groupSelected );

            if(!$selected)
            {
                $GLOBALS['log']->debug("Inbound Email {$v->name}, not selected and will not be available for selection within compose UI.");
                continue;
            }

        	$name = $v->get_stored_options('from_name');
        	$addr = $v->get_stored_options('from_addr');
        	if ($name != null && $addr != null) {
        		$name = from_html($name);
        		if (!$v->is_personal) {
                	$ieAccountsFrom[] = array("value" => $v->id, "text" => "{$name} ({$addr}) - {$app_strings['LBL_EMAIL_UPPER_CASE_GROUP']}");
        		} else {
                	$ieAccountsFrom[] = array("value" => $v->id, "text" => "{$name} ({$addr})");
        		} // else
        	} // if
        } // foreach


        $userSystemOverride = $oe->getUsersMailerForSystemOverride($current_user->id);
        //Substitute in the users system override if its available.
        if($userSystemOverride != null)
		    $system = $userSystemOverride;

        if( !empty($system->mail_smtpserver) )
        {
            $admin = Administration::getSettings(); //retrieve all admin settings.
            $ieAccountsFrom[] = array("value" => $system->id, "text" =>
                "{$ret['name']} ({$ret['email']}){$myAccountString}");
        }

        return $ieAccountsFrom;
    } // fn

    /**
     * This function will return all the accounts this user has access to based on the
     * match of the emailId passed in as a parameter
     *
     * @param unknown_type $ie
     * @return unknown
     */
	function getFromAllAccountsArray($ie, $ret) {
        global $current_user;
        global $app_strings;

        $ret['fromAccounts'] = array();
        if (!isset($ret['to']) && !empty($ret['from'])) {
	        $ret['fromAccounts']['status'] = false;
	        return $ret;
        }
        $ieAccountsFull = $ie->retrieveAllByGroupIdWithGroupAccounts($current_user->id);
		$foundInPersonalAccounts = false;
		$foundInGroupAccounts = false;
		$foundInSystemAccounts = false;

		//$toArray = array();
		if ($ret['type'] == "draft") {
			$toArray = explode(",", $ret['from']);
		} else {
			$toArray = $ie->email->email2ParseAddressesForAddressesOnly($ret['to']);
		} // else
        foreach($ieAccountsFull as $k => $v) {
            $storedOptions = unserialize(base64_decode($v->stored_options), ['allowed_classes' => false]);
			if (  array_search_insensitive($storedOptions['from_addr'], $toArray)) {
        		if ($v->is_personal) {
					$foundInPersonalAccounts = true;
					break;
				} else  {
					$foundInGroupAccounts = true;
				} // else
			} // if
        } // foreach

        $oe = new OutboundEmail();
        if ($oe ->isAllowUserAccessToSystemDefaultOutbound()) {
            $system = $oe->getSystemMailerSettings();
        }

        $return = $current_user->getUsersNameAndEmail();
		$return['name'] = from_html($return['name']);
		$useMyAccountString = true;

        if(empty($return['email'])) {
        	$systemReturn = $current_user->getSystemDefaultNameAndEmail();
        	$return['email'] = $systemReturn['email'];
        	$return['name'] = from_html($systemReturn['name']);
        	$useMyAccountString = false;
		} // if

		$myAccountString = '';
		if ($useMyAccountString) {
			$myAccountString = " - {$app_strings['LBL_MY_ACCOUNT']}";
		} // if

        if(!empty($system->id)) {

            $admin = Administration::getSettings(); //retrieve all admin settings.
            if (in_array(trim($return['email']), $toArray)) {
            	$foundInSystemAccounts = true;
            } // if
        } // if

        if (!$foundInPersonalAccounts && !$foundInGroupAccounts && !$foundInSystemAccounts) {
	        $ret['fromAccounts']['status'] = false;
	        return $ret;
        } // if

        $ieAccountsFrom= array();
        foreach($ieAccountsFull as $k => $v) {
            $storedOptions = unserialize(base64_decode($v->stored_options), ['allowed_classes' => false]);
        	$storedOptionsName = from_html($storedOptions['from_name']);

        	$selected = false;
			if (array_search_insensitive($storedOptions['from_addr'], $toArray)) {
        	//if ($ret['to'] == $storedOptions['from_addr']) {
        		$selected = true;
			} // if
        	if ($foundInPersonalAccounts) {
        		if ($v->is_personal) {
            		$ieAccountsFrom[] = array("value" => $v->id, "selected" => $selected, "text" => "{$storedOptionsName} ({$storedOptions['from_addr']})");
        		} // if
        	} else {
            	$ieAccountsFrom[] = array("value" => $v->id, "selected" => $selected, "text" => "{$storedOptionsName} ({$storedOptions['from_addr']}) - {$app_strings['LBL_EMAIL_UPPER_CASE_GROUP']}");
        	} // else
        } // foreach

        if(!empty($system->id)) {
            if (!$foundInPersonalAccounts && !$foundInGroupAccounts && $foundInSystemAccounts) {
            $ieAccountsFrom[] = array("value" => $system->id, "selected" => true, "text" =>
                "{$return['name']} ({$return['email']}){$myAccountString}");
            } else {
            $ieAccountsFrom[] = array("value" => $system->id, "text" =>
                "{$return['name']} ({$return['email']}){$myAccountString}");
            } // else
        } // if

        $ret['fromAccounts']['status'] = ($foundInPersonalAccounts || $foundInGroupAccounts || $foundInSystemAccounts) ? true : false;
		$ret['fromAccounts']['data'] = $ieAccountsFrom;
        return $ret;
    } // fn

	/**
	 * Re-used option getter for Show Accounts multiselect pane
	 */
	function getShowAccountsOptions(&$ie) {
		global $current_user;
		global $app_strings;
		global $mod_strings;

		$ieAccountsFull = $ie->retrieveAllByGroupId($current_user->id);
		$ieAccountsShowOptionsMeta = array();
        $showFolders = unserialize(base64_decode($current_user->getPreference('showFolders', 'Emails')), ['allowed_classes' => false]);

		$defaultIEAccount = $ie->getUsersDefaultOutboundServerId($current_user);

		foreach($ieAccountsFull as $k => $v) {
			$selected = (!empty($showFolders) && in_array($v->id, $showFolders)) ? true : false;
			$default = ($defaultIEAccount == $v->id) ? TRUE : FALSE;
			$has_groupfolder = !empty($v->groupfolder_id) ? TRUE : FALSE;
			$type = ($v->is_personal) ? $mod_strings['LBL_MAILBOX_TYPE_PERSONAL'] : $mod_strings['LBL_MAILBOX_TYPE_GROUP'];

			$ieAccountsShowOptionsMeta[] = array("id" => $v->id, "name" => $v->name, 'is_active' => $selected,
													'server_url' => $v->server_url, 'is_group' => !$v->is_personal,'group_id' => $v->group_id,
													'is_default' => $default, 'has_groupfolder' => $has_groupfolder,'type' => $type );
		}

		//Retrieve the grou folders
		$f = new SugarFolder();
		$groupFolders = $f->getGroupFoldersForSettings($current_user);

		foreach ($groupFolders as $singleGroup)
		{
		    //Retrieve the related IE accounts.
            $relatedIEAccounts = $ie->retrieveByGroupFolderId($singleGroup['id']);

            if(count($relatedIEAccounts) == 0)
                $server_url = $app_strings['LBL_EMAIL_MULT_GROUP_FOLDER_ACCOUNTS_EMPTY'];
            else if(count($relatedIEAccounts) == 1)
            {
                if($relatedIEAccounts[0]->status != 'Active' || $relatedIEAccounts[0]->mailbox_type == 'bounce')
                    continue;

                $server_url = $relatedIEAccounts[0]->server_url;
            }
            else
                $server_url = $app_strings['LBL_EMAIL_MULT_GROUP_FOLDER_ACCOUNTS'];

            $type = $mod_strings['LBL_MAILBOX_TYPE_GROUP_FOLDER'];
		    $ieAccountsShowOptionsMeta[] = array("id" => $singleGroup['id'], "name" => $singleGroup['origName'], 'is_active' => $singleGroup['selected'],
													'server_url' => $server_url, 'is_group' => true,'group_id' => $singleGroup['id'],
													'is_default' => FALSE, 'has_groupfolder' => true,'type' => $type);
		}


		return $ieAccountsShowOptionsMeta;
	}

	function getShowAccountsOptionsForSearch(&$ie) {
		global $current_user;
		global $app_strings;

		$ieAccountsFull = $ie->retrieveAllByGroupId($current_user->id);
		//$ieAccountsShowOptions = "<option value=''>{$app_strings['LBL_NONE']}</option>\n";
		$ieAccountsShowOptionsMeta = array();
		$ieAccountsShowOptionsMeta[] = array("value" => "", "text" => $app_strings['LBL_NONE'], 'selected' => '');
        $showFolders = unserialize(base64_decode($current_user->getPreference('showFolders', 'Emails')), ['allowed_classes' => false]);

		foreach($ieAccountsFull as $k => $v) {
			if(!in_array($v->id, $showFolders)) {
				continue;
			}
			$group = (!$v->is_personal) ? $app_strings['LBL_EMAIL_GROUP']."." : "";
			$ieAccountsShowOptionsMeta[] = array("value" => $v->id, "text" => $group.$v->name, 'protocol' => $v->protocol);
		}

		return $ieAccountsShowOptionsMeta;
	}

    /**
     * Returns a filename for a cache file based on a hashed mbox and uid
     *
     * @param string $mbox Mailbox folder label
     * @param string $uid Unique ID of message
     * @return string Filename
     */
    private function getMboxCacheFilename($mbox, $uid)
    {
        return hash('sha256', $mbox . $uid) . '.php';
    }

    /**
     * Generates a filepath for a cache file
     * @param string $ieId InboundEmail id
     * @param string $type Type of cache (messages|folders)
     * @param string $filename Filename
     * @return string Cache filepath
     */
    private function getCacheFilePath($ieId, $type, $filename)
    {
        return sugar_cached("modules/Emails/{$ieId}/{$type}/{$filename}");
    }

	/**
	 * Validates existence and expiration of a cache file
	 * @param string $ieId
	 * @param string $type Type of cache file: folders, messages, etc.
	 * @param string $file The cachefile name
	 * @param int refreshOffset Refresh time in secs.
	 * @return mixed.
	 */
	function validCacheFileExists($ieId, $type, $file, $refreshOffset=-1) {
		global $sugar_config;

		if($refreshOffset == -1) {
			$refreshOffset = $this->cacheTimeouts[$type]; // use defaults
		}

        $cacheFilename = $this->getCacheFilePath($ieId, $type, $file);
        if (file_exists($cacheFilename)) {
			return true;
		}

		return false;
	}

    /**
     * Checks existence of a cache entry for Mbox and Message id
     * @param string $ieId Inbound Email Id
     * @param string $mbox Mailbox folder label
     * @param string $uid Unique ID of message
     * @return boolean
     */
    public function mboxCacheExists($ieId, $mbox, $uid)
    {
        $filename = $this->getMboxCacheFilename($mbox, $uid);
        return $this->validCacheFileExists($ieId, 'messages', $filename);
    }

	/**
	 * retrieves the cached value
	 * @param string $ieId
	 * @param string $type Type of cache file: folders, messages, etc.
	 * @param string $file The cachefile name
	 * @param string $key name of cache value
	 * @return mixed
	 */
	function getCacheValue($ieId, $type, $file, $key) {
		global $sugar_config;

        $cacheFilePath = $this->getCacheFilePath($ieId, $type, $file);
		$cacheFile = array();

		if(file_exists($cacheFilePath)) {
			$cacheFile = FileLoader::varFromInclude($cacheFilePath, 'cacheFile'); // provides $cacheFile

			if(isset($cacheFile[$key])) {
                $ret = unserialize($cacheFile[$key], ['allowed_classes' => false]);
				return $ret;
			}
		} else {
			$GLOBALS['log']->debug("EMAILUI: cache file not found [ {$cacheFilePath} ] - creating blank cache file");
			$this->writeCacheFile('retArr', array(), $ieId, $type, $file);
		}

		return null;
	}

    /**
     * Retrieves the cached value for Mbox and message Id
     * @param string $ieId Inbound Email id
     * @param string $mbox Mailbox folder label
     * @param string $uid Unique ID of message
     * @return mixed
     */
    public function getMboxCacheValue($ieId, $mbox, $uid)
    {
        $filename = $this->getMboxCacheFilename($mbox, $uid);
        return $this->getCacheValue($ieId, 'messages', $filename, 'out');
    }

	/**
	 * retrieves the cache file last touched time
	 * @param string $ieId
	 * @param string $type Type of cache file: folders, messages, etc.
	 * @param string $file The cachefile name
	 * @return string
	 */
	function getCacheTimestamp($ieId, $type, $file) {
		global $sugar_config;

        $cacheFilePath = $this->getCacheFilePath($ieId, $type, $file);
		$cacheFile = array();

		if(file_exists($cacheFilePath)) {
			$cacheFile = FileLoader::varFromInclude($cacheFilePath, 'cacheFile'); // provides $cacheFile['timestamp']

			if(isset($cacheFile['timestamp'])) {
				$GLOBALS['log']->debug("EMAILUI: found timestamp [ {$cacheFile['timestamp']} ]");
				return $cacheFile['timestamp'];
			}
		}

		return '';
	}

	/**
	 * Updates the timestamp for a cache file - usually to mark a "check email"
	 * process
	 * @param string $ieId
	 * @param string $type Type of cache file: folders, messages, etc.
	 * @param string $file The cachefile name
	 */
	function setCacheTimestamp($ieId, $type, $file) {
		global $sugar_config;

        $cacheFilePath = $this->getCacheFilePath($ieId, $type, $file);
		$cacheFile = array();

		if(file_exists($cacheFilePath)) {
			$cacheFile = FileLoader::varFromInclude($cacheFilePath, 'cacheFile'); // provides $cacheFile['timestamp']

			if(isset($cacheFile['timestamp'])) {
				$cacheFile['timestamp'] = strtotime('now');
				$GLOBALS['log']->debug("EMAILUI: setting updated timestamp [ {$cacheFile['timestamp']} ]");
				return $this->_writeCacheFile($cacheFile, $cacheFilePath);
			}
		}
	}


	/**
	 * Writes caches to flat file in cache dir.
	 * @param string $key Key to the main cache entry (not timestamp)
	 * @param mixed $var Variable to be cached
	 * @param string $ieId I-E focus ID
	 * @param string $type Folder in cache
	 * @param string $file Cache file name
	 */
	function writeCacheFile($key, $var, $ieId, $type, $file) {
		global $sugar_config;

        $the_file = $this->getCacheFilePath($ieId, $type, $file);
		$timestamp = strtotime('now');
		$array = array();
		$array['timestamp'] = $timestamp;
		$array[$key] = serialize($var); // serialized since varexport_helper() can't handle PHP objects

		return $this->_writeCacheFile($array, $the_file);
	}

    /**
     * Writes a variable to a mbox cache entry
     * @param string $ieId InboundEmail Id
     * @param string $mbox Mailbox folder label
     * @param string $uid Unique ID of message
     * @param mixed $var Variable to be cached
     *@return boolean
     */
    public function writeMboxCacheValue($ieId, $mbox, $uid, $var)
    {
        $filename = $this->getMboxCacheFilename($mbox, $uid);
        return $this->writeCacheFile('out', $var, $ieId, 'messages', $filename);
    }

	/**
	 * Performs the actual file write.  Abstracted from writeCacheFile() for
	 * flexibility
	 * @param array $array The array to write to the cache
	 * @param string $file Full path (relative) with cache file name
	 * @return bool
	 */
	function _writeCacheFile($array, $file) {
		global $sugar_config;

		$arrayString = var_export_helper($array);

		$date = date("r");
	    $the_string =<<<eoq
<?php // created: {$date}
	\$cacheFile = {$arrayString};
?>
eoq;
	    if($fh = @sugar_fopen($file, "w")) {
	        fputs($fh, $the_string);
	        fclose($fh);
	        return true;
	    } else {
	    	$GLOBALS['log']->debug("EMAILUI: Could not write cache file [ {$file} ]");
	        return false;
	    }
	}

    /**
     * Delete a cache entry
     *
     * @param string $ieId InboundEmail ID
     * @param string $mbox Mailbox folder label
     * @param string $uid Unique ID of message
     */
    public function deleteMboxCache($ieId, $mbox, $uid)
    {
        $filename = $this->getMboxCacheFilename($mbox, $uid);
        $cacheFilename = $this->getCacheFilePath($ieId, 'messages', $filename);
        if (file_exists($cacheFilename)) {
            $msgCacheFile = FileLoader::validateFilePath($cacheFilename);
            unlink($msgCacheFile);
        }
    }

	/**
	 * Generate JSON encoded data to be consumed by yui datatable.
	 *
	 * @param array $data
	 * @param string $resultsParam The resultsList name
	 * @return string
	 */
	function jsonOuput($data, $resultsParam, $count=0, $fromCache=true, $unread=-1) {
	    global $app_strings;

		$count = ($count > 0) ? $count : 0;

		if(isset($a['fromCache']))
			$cached = ($a['fromCache'] == 1) ? 1 : 0;
		else
			$cached = ($fromCache) ? 1 : 0;

        if (empty($data['mbox']) || $data['mbox'] == 'undefined') {
            $data['mbox'] = $app_strings['LBL_NONE'];
        }

		$jsonOut = array('TotalCount' => $count, 'FromCache' => $cached, 'UnreadCount' => $unread, $resultsParam => $data['out']);

		return json_encode($jsonOut);
	}


    /**
     * Generate to/cc addresses string in email detailview.
     *
     * @param string $str
     * @param string $target values: to, cc
     * @param int $defaultNum
     * @return string $str
     */
	function generateExpandableAddrs($str) {
	    global $mod_strings;
	    $tempStr = $str.',';
        $tempStr = html_entity_decode($tempStr);
	    $tempStr = $this->unifyEmailString($tempStr);
        $defaultNum = 2;
        $pattern = '/@.*,/U';
        preg_match_all($pattern, $tempStr, $matchs);
        $totalCount = count($matchs[0]);

        if(!empty($matchs[0]) && $totalCount > $defaultNum) {
            $position = strpos($tempStr, $matchs[0][$defaultNum]);
            $hiddenCount = $totalCount - $defaultNum;
            $frontStr = substr($tempStr, 0, $position);
            $backStr = substr($tempStr, $position, -1);
            $str = htmlentities($frontStr) . '<a class="utilsLink" onclick="javascript: SUGAR.email2.detailView.displayAllAddrs(this);">...['.$mod_strings['LBL_EMAIL_DETAIL_VIEW_SHOW'].$hiddenCount.$mod_strings['LBL_EMAIL_DETAIL_VIEW_MORE'].']</a><span style="display: none;">' .htmlentities($backStr).'</span>';
        }

        return $str;
    }

    /**
     * Unify the seperator as ,
     *
     * @param String $str email address string
     * @return String converted string
     */
    function unifyEmailString($str) {
        preg_match_all('/@.*;/U', $str, $matches);
        if(!empty($matches[0])) {
            foreach($matches[0] as $key => $value) {
                $new[] = str_replace(";",",",$value);
            }
            return str_replace($matches[0], $new, $str);
        }
        return $str;
    }
} // end class def
