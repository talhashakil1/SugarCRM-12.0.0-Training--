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
use Doctrine\DBAL;

class RecentApi extends SugarApi
{
    public function registerApiRest()
    {
        return array(
            'getRecentlyViewed' => array(
                'reqType' => 'GET',
                'path' => array('recent'),
                'pathVars' => array('',''),
                'method' => 'getRecentlyViewed',
                'shortHelp' => 'This method retrieves recently viewed records for the user.',
                'longHelp' => 'include/api/help/me_recently_viewed_help.html',
            ),
        );
    }

    /**
     * Gets the user bean for the user of the api
     *
     * @return User
     */
    protected function getUserBean()
    {
        global $current_user;
        return $current_user;
    }

    /**
     * Set up options from args and default values.
     *
     * @param arrat $args Arguments from request.
     * @return array options after setup.
     */
    protected function parseArguments(array $args)
    {
        $options = array();
        $options['limit'] = !empty($args['limit']) ? (int) $args['limit'] : 20;
        if (!empty($args['max_num'])) {
            $options['limit'] = (int) $args['max_num'];
        }

        $options['limit'] = $this->checkMaxListLimit($options['limit']);
        $options['offset'] = 0;

        if (!empty($args['offset'])) {
            if ($args['offset'] == 'end') {
                $options['offset'] = 'end';
            } else {
                $options['offset'] = (int) $args['offset'];
            }
        }

        $options['select'] = !empty($args['fields']) ? explode(",", $args['fields']) : null;
        $options['module'] = !empty($args['module']) ? $args['module'] : null;
        $options['date'] = !empty($args['date']) ? $args['date'] : null;
        $options['erased_fields'] = !empty($args['erased_fields']);

        $options['moduleList'] = array();
        if (!empty($args['module_list'])) {
            $options['moduleList'] = array_filter(explode(',', $args['module_list']));
        }

        return $options;
    }

    /**
     * Filters the list of modules to the ones that the user has access to and
     * that exist on the moduleList.
     *
     * @param array $modules Modules list.
     * @param string $acl (optional) ACL action to check, default is `list`.
     * @return array Filtered modules list.
     */
    private function filterModules(array $modules, $acl = 'list')
    {
        return array_filter($modules, function ($module) use ($acl) {
            if (in_array($module, $GLOBALS['moduleList']) || $module === 'Employees') {
                $seed = BeanFactory::newBean($module);
                return $seed && $seed->ACLAccess($acl);
            }
            return false;
        });
    }

    /**
     * Gets recently viewed records.
     *
     * @param ServiceBase $api Current api.
     * @param array $args Arguments from request.
     * @param string $acl (optional) ACL action to check, default is `list`.
     * @return array List of recently viewed records.
     */
    public function getRecentlyViewed(ServiceBase $api, array $args, $acl = 'list')
    {
        $this->requireArgs($args, array('module_list'));

        $options = $this->parseArguments($args);

        $moduleList = $this->filterModules($options['moduleList'], $acl);

        if (empty($moduleList)) {
            return array('next_offset' => -1 , 'records' => array());
        }

        $results = $this->getRecentIdsFromTracker($moduleList, $options);
        if (empty($results)) {
            return array('next_offset' => -1 , 'records' => array());
        }

        $data = $beans = $orderedBeans = [];
        $data['records'] = [];
        $data['next_offset'] = -1;
        $subGroups = [];

        foreach ($results as $key => $row) {
            $subGroups[$row['module_name']][] = $row['item_id'];
        }

        global $timedate;
        $db = DBManagerFactory::getInstance();
        // 'Cause last_viewed_date is an alias (not a real field), we need to
        // temporarily store its values and append it later to each recently
        // viewed record
        $lastViewedDates = array();
        foreach ($subGroups as $module => $ids) {
            $seed = BeanFactory::newBean($module);
            $beans = $this->getRecentlyViewedBeans($seed, $ids, $options);
            foreach ($results as $key => $row) {
                if (!empty($beans[$row['item_id']])) {
                    if ($key == $options['limit']) {
                        $data['next_offset'] = ($options['limit'] + $options['offset']);
                        break;
                    }
                    $orderedBeans[$key] = $beans[$row['item_id']];
                    $lastViewedDates[$row['item_id']] = $db->fromConvert($row['last_viewed_date'], 'datetime');
                }
            }
        }

        $data['records'] = $this->formatBeans($api, $args, $orderedBeans);

        foreach($data['records'] as &$record) {
            $record['_last_viewed_date'] = $timedate->asIso($timedate->fromDb($lastViewedDates[$record['id']]));
        }

        return $data;
    }

    /**
     * Returns query object to retrieve list of recently viewed records by
     * module.
     *
     * @param SugarBean $seed Instance of current bean.
     * @param array $ids List of Bean IDs.
     * @param array $options API options
     * @return array of SugarBeans.
     */
    private function getRecentlyViewedBeans(SugarBean $seed, array $ids, array $options) : array
    {
        $query = new SugarQuery();
        $query->from($seed, $options);
        $query->where()->in('id', $ids);
        return $seed->fetchFromQuery($query, [
            'id',
            'name',
            'date_modified',
        ], $options);
    }

    /**
     * @param array $moduleList List of modules to fetch
     * @param array $options API Request options
     * @return array of recently viewed SugarBeans
     */
    private function getRecentIdsFromTracker(array $moduleList, array $options): array
    {
        $query = <<<SQL
SELECT
	tracker.module_name,
	tracker.item_id,
	MAX(date_modified) last_viewed_date
FROM
	tracker
WHERE
	tracker.visible = ?
	AND tracker.user_id = ?
	AND tracker.module_name IN (?)
	AND tracker.deleted = ?
SQL;
        $params = [1, $this->getUserBean()->id, $moduleList, 0];
        $paramTypes = [null, null, DBAL\Connection::PARAM_STR_ARRAY, null];
        if (!empty($options['date'])) {
            $td = new SugarDateTime();
            $td->modify($options['date']);
            $query .= ' AND tracker.date_modified >= ?';
            $params[] = $td->asDb();
            $paramTypes[] = null;
        }
        $query .= ' GROUP BY tracker.module_name, tracker.item_id ORDER BY last_viewed_date DESC';
        $conn = DBManagerFactory::getInstance()->getConnection();
        $platform = $conn->getDatabasePlatform();
        $query = $platform->modifyLimitQuery($query, $options['limit'] + 1);
        $stmt = $conn->executeQuery(
            $query,
            $params,
            $paramTypes
        );

        $results = $stmt->fetchAllAssociative();
        return $results;
    }
}
