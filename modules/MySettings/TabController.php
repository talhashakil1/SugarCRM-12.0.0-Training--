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

class TabController
{

    public $required_modules = array('Home');

    /**
     * @var array The default list of displayed Portal modules
     */
    public static $defaultPortalTabs = ['Home', 'Cases', 'KBContents'];

    /**
     * @var bool flag of validation of the cache
     */
    static protected $isCacheValid = false;

    public function is_system_tabs_in_db()
    {
        $administration = $this->getMySettings();
        if (isset($administration->settings) && isset($administration->settings['MySettings_tab'])) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * Get the hash of the tabs.
     * @return string MD5 hash of the tab settings.
     */
    public function getMySettingsTabHash()
    {
        //Administration MySettings are already sugar-cached, and hence only need to retrieve it directly
        $administration = $this->getMySettings();
        if (isset($administration->settings) && isset($administration->settings['MySettings_tab'])) {
            $tabs = $administration->settings['MySettings_tab'];

            return md5($tabs);
        }

        return "";
    }

	/**
	 * Return the list of enabled tabs
	 * @param bool|true $filter when true, the tabs are filtered by the current user's ACLs
     * @param bool $requireInModuleList flag to indicate if "in modulelist" is required
	 *
	 * @return array
	 */
    public function get_system_tabs(bool $filter = true, bool $requireInModuleList = true) : array
    {
        global $moduleList;

        $system_tabs_result = [];

        $administration = Administration::getSettings('MySettings', true);
        if (isset($administration->settings) && isset($administration->settings['MySettings_tab'])) {
            $tabs = $administration->settings['MySettings_tab'];
            $trimmed_tabs = trim($tabs);
            //make sure serialized string is not empty
            if (!empty($trimmed_tabs)) {
                // TODO: decode JSON rather than base64
                $tabs = base64_decode($tabs);
                $tabs = unserialize($tabs, ['allowed_classes' => false]);
                if ($requireInModuleList && !empty($tabs) && is_array($tabs)) {
                    //Ensure modules saved in the prefences exist.
                    foreach ($tabs as $id => $tab) {
                        if (!in_array($tab, $moduleList)) {
                            unset($tabs[$id]);
                        }
                    }
                }
                if ($filter) {
                    $tabs = SugarACL::filterModuleList($tabs, 'access', true);
                }
                $system_tabs_result = $this->get_key_array($tabs);
            } else {
                $system_tabs_result = $this->get_key_array($moduleList);
            }
        } else {
            $system_tabs_result = $this->get_key_array($moduleList);
        }

        return $system_tabs_result;
    }

    /**
     * Retrieve the list of tabs for `Portal`
     */
    public static function getPortalTabs()
    {
        $modules = array();
        $administration = BeanFactory::newBean('Administration');
        // TODO: Refactor this to use the method provided to select `portal`
        // settings.
        $q = "SELECT value FROM config WHERE category='MySettings' AND name = 'tab' AND platform = 'portal'";
        $row = $administration->db->query($q);
        $MySettings_tab = $administration->db->fetchByAssoc($row, false);
        if (!empty($MySettings_tab['value'])) {
            $modules = json_decode($MySettings_tab['value']);
        } else {
            $modules = array_intersect(self::$defaultPortalTabs, self::getAllPortalTabs());
            self::setPortalTabs($modules);
        }

        return $modules;
    }

    /**
     * Retrieve the list of tabs for `Portal`
     *
     * @param array $modules The list of modules names
     */
    public static function setPortalTabs($modules)
    {
        $administration = BeanFactory::newBean('Administration');
        $administration->saveSetting('MySettings', 'tab', $modules, 'portal');
    }



    public function get_tabs_system()
    {
        global $moduleList;
        $tabs = $this->get_system_tabs();
        $unsetTabs = $this->get_key_array($moduleList);
        foreach ($tabs as $tab) {
            unset($unsetTabs[$tab]);
        }

        $should_hide_iframes = !file_exists('modules/iFrames/iFrame.php');
        if ($should_hide_iframes) {
            if (isset($unsetTabs['iFrames'])) {
                unset($unsetTabs['iFrames']);
            } else {
                if (isset($tabs['iFrames'])) {
                    unset($tabs['iFrames']);
                }
            }
        }

        return array($tabs, $unsetTabs);
    }

    /**
     * Set the system tabs.
     *
     * @param array $tabs Tabs to save.
     */
    public function set_system_tabs($tabs)
    {
        // only allowed accessed modules can be modified from allow to hide
        $sysTabs = array_merge($tabs, $this->getNonAccessibleEnabledTabs());

        $administration = $this->getAdministration();
        // TODO: encode in JSON rather than base64
        $serialized = base64_encode(serialize($sysTabs));
        $administration->saveSetting('MySettings', 'tab', $serialized);
        self::$isCacheValid = false;
    }

    /**
     * get list of non-accessible but enabled tabs
     * @return array
     */
    public function getNonAccessibleEnabledTabs() : array
    {
        $nonAccessibleTabs = [];
        // get all current tabs, ignoring module list check
        $currentSysTabs = $this->get_system_tabs(false, false);
        foreach ($currentSysTabs as $module) {
            if (!SugarACL::checkAccess($module, 'access')) {
                $nonAccessibleTabs[] = $module;
            }
        }
        return $nonAccessibleTabs;
    }

    /**
     * Determine if the users can edit or not.
     *
     * @return bool true if editing is allowed, false otherwise.
     */
    public function get_users_can_edit()
    {
        $administration = $this->getMySettings();
        if (isset($administration->settings) && isset($administration->settings['MySettings_disable_useredit'])) {
            if ($administration->settings['MySettings_disable_useredit'] == 'yes') {
                return false;
            }
        }

        return true;
    }

    public function set_users_can_edit($boolean)
    {
        global $current_user;
        if (is_admin($current_user)) {
            $administration = BeanFactory::newBean('Administration');
            if ($boolean) {
                $administration->saveSetting('MySettings', 'disable_useredit', 'no');
            } else {
                $administration->saveSetting('MySettings', 'disable_useredit', 'yes');
            }
        }
    }

    /**
     * Get an array for which each key maps to itself, where the keys are the
     * values of the given array.
     *
     * @param array $arr The source array.
     * @return array The key array.
     */
    public static function get_key_array($arr)
    {
        $new = array();
        if (!empty($arr)) {
            foreach ($arr as $val) {
                $new[$val] = $val;
            }
        }

        return $new;
    }

    public function set_user_tabs($tabs, &$user, $type = 'display')
    {
        if (empty($user)) {
            global $current_user;
            $current_user->setPreference($type . '_tabs', $tabs);
        } else {
            $user->setPreference($type . '_tabs', $tabs);
        }

    }

    public function get_user_tabs(&$user, $type = 'display')
    {
        $system_tabs = $this->get_system_tabs();
        $tabs = $user->getPreference($type . '_tabs');
        if (!empty($tabs)) {
            $tabs = $this->get_key_array($tabs);
            if ($type == 'display') {
                $tabs['Home'] = 'Home';
            }

            return $tabs;
        } else {
            if ($type == 'display') {
                return $system_tabs;
            } else {
                return array();
            }
        }


    }

    public function get_unset_tabs($user)
    {
        global $moduleList;
        $tabs = $this->get_user_tabs($user);
        $unsetTabs = $this->get_key_array($moduleList);
        foreach ($tabs as $tab) {
            unset($unsetTabs[$tab]);
        }

        return $unsetTabs;


    }

    public function get_tabs($user)
    {
        $display_tabs = $this->get_user_tabs($user, 'display');
        $hide_tabs = $this->get_user_tabs($user, 'hide');
        $remove_tabs = $this->get_user_tabs($user, 'remove');
        $system_tabs = $this->get_system_tabs();

        // remove access to tabs that roles do not give them permission to
        foreach ($system_tabs as $key => $value) {
            if (!isset($display_tabs[$key])) {
                $display_tabs[$key] = $value;
            }
        }

        // removes tabs from display_tabs if not existant in roles
        // or exist in the hidden tabs
        foreach ($display_tabs as $key => $value) {
            if (!isset($system_tabs[$key])) {
                unset($display_tabs[$key]);
            }
            if (isset($hide_tabs[$key])) {
                unset($display_tabs[$key]);
            }
        }

        // removes tabs from hide_tabs if not existant in roles
        foreach ($hide_tabs as $key => $value) {
            if (!isset($system_tabs[$key])) {
                unset($hide_tabs[$key]);
            }
        }

        // remove tabs from user if admin has removed specific tabs
        foreach ($remove_tabs as $key => $value) {
            if (isset($display_tabs[$key])) {
                unset($display_tabs[$key]);
            }
            if (isset($hide_tabs[$key])) {
                unset($hide_tabs[$key]);
            }
        }
        $display_tabs = array_intersect($display_tabs, $GLOBALS['moduleList']);

        return [$display_tabs, $hide_tabs, $remove_tabs];
    }

    public function restore_tabs($user)
    {
        global $moduleList;
        $this->set_user_tabs($moduleList, $user);

    }

    public function restore_system_tabs()
    {
        global $moduleList;
        $this->set_system_tabs($moduleList);

    }


    /**
     * Gets the default list of `Portal` tabs.
     *
     * Retrieves all the `portal` modules that have list metadata, thus that can
     * be displayed in Portal `navbar`. This method is only called to initialize
     * the `MySettings_tab` setting. You can override this list by modifying
     * this setting directly.
     *
     * @return array The list of modules that can be tabs in Portal.
     */
    public static function getAllPortalTabs()
    {

        $tabs = array('Home');

        $browser = new SugarPortalBrowser();
        $browser->loadModules();
        foreach ($browser->modules as $moduleName => $sugarPortalModule) {
            if (!empty($sugarPortalModule->views['list.php'])) {
                $tabs[] = $moduleName;
            }
        }

        return $tabs;
    }

    /**
     * Get the Admin bean.
     *
     * @return SugarBean The Admin bean.
     */
    public function getAdministration()
    {
        return BeanFactory::newBean('Administration');
    }

    /**
     * Get MySettings.
     *
     * @return Administration MySettings.
     */
    public function getMySettings()
    {
        return Administration::getSettings('MySettings');
    }
}
