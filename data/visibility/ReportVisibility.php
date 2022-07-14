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
use Sugarcrm\Sugarcrm\DependencyInjection\Container;
use Psr\SimpleCache\CacheInterface;

/**
 * Visibility limitations for Reports
 * @api
 */
class ReportVisibility extends SugarVisibility
{
    protected $disallowed_modules;

    public const DISALLOWED_MODULES_CACHE_SUFFIX = 'reportsDisallowedModules';

    /**
     * (non-PHPdoc)
     * @see SugarVisibility::addVisibilityWhere()
     */
    public function addVisibilityWhere(&$query)
    {
        global $current_user;
        if (!empty($current_user) && $current_user->isAdminForModule("Reports")) {
            return $query;
        }

        $table_alias = $this->getOption('table_alias');
        if(empty( $table_alias)) {
            $table_alias = $this->bean->table_name;
        }

        $disallowed_modules = $this->getDisallowedModules();

        if($disallowed_modules) {
            $db = DBManagerFactory::getInstance();
            $literals = array();
            foreach ($disallowed_modules as $module) {
                $literals[] = $db->quoted($module);
            }
            $where_clause = $table_alias . '.module NOT IN (' . implode(', ', $literals) .')';
            if(!empty($query)) {
                $query .= " AND $where_clause";
            } else {
                $query = $where_clause;
            }
        }
        return $query;
    }

    /**
     * Get list of modules not allowed for reporting
     * @return array
     */
    public function getDisallowedModules()
    {
        global $current_user, $report_modules;
        if(!is_null($this->disallowed_modules)) {
            return $this->disallowed_modules;
        }
        if(empty($GLOBALS['report_modules'])) {
            require_once 'modules/Reports/config.php';
            if(empty($GLOBALS['report_modules'])) {
                // this shouldn't happen but if it does, no modules for you
                return array_keys($GLOBALS['beanList']);
            }
        }
        $cache = Container::getInstance()->get(CacheInterface::class);
        $userCacheKey = $current_user->id . self::DISALLOWED_MODULES_CACHE_SUFFIX;
        $this->disallowed_modules = $cache->get($userCacheKey, null);
        if ($this->disallowed_modules === null) {
            $this->disallowed_modules = array();
            foreach ($report_modules as $module => $name) {
                $seed = BeanFactory::newBean($module);
                if (empty($seed) || !$seed->ACLAccess("view")) {
                    $this->disallowed_modules[] = $module;
                }
            }
            $cache->set($userCacheKey, $this->disallowed_modules);
        }
        return $this->disallowed_modules;
    }

    public function addVisibilityWhereQuery(SugarQuery $sugarQuery, $options = array()) {
        $where = null;
        $this->addVisibilityWhere($where);
        if(!empty($where)) {
            $sugarQuery->where()->addRaw($where);
        }

        return $sugarQuery;
    }
}
