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

class ForecastManagerWorksheetsFilterApi extends FilterApi
{

    /**
     * We need the limit higher for this filter call since we don't support pagination
     *
     * @var int
     */
    protected $defaultLimit = 1000;

    public function registerApiRest()
    {
        return array(
            'forecastWorksheetGet' => array(
                'reqType' => 'GET',
                'path' => array('ForecastManagerWorksheets'),
                'pathVars' => array('module'),
                'method' => 'ForecastManagerWorksheetsGet',
                'jsonParams' => array(),
                'shortHelp' => 'Filter records from a single module',
                'longHelp' => 'modules/Forecasts/clients/base/api/help/ForecastManagerWorksheetGet.html',
                'exceptions' => array(
                    'SugarApiExceptionError',
                    'SugarApiExceptionInvalidParameter',
                    'SugarApiExceptionNotAuthorized',
                    'SugarApiExceptionNotFound',
                ),
            ),
            'forecastWorksheetTimePeriodGet' => array(
                'reqType' => 'GET',
                'path' => array('ForecastManagerWorksheets', '?'),
                'pathVars' => array('module', 'timeperiod_id'),
                'method' => 'ForecastManagerWorksheetsGet',
                'jsonParams' => array(),
                'shortHelp' => 'Filter records from a single module',
                'longHelp' => 'modules/Forecasts/clients/base/api/help/ForecastManagerWorksheetGet.html',
                'exceptions' => array(
                    'SugarApiExceptionError',
                    'SugarApiExceptionInvalidParameter',
                    'SugarApiExceptionNotAuthorized',
                    'SugarApiExceptionNotFound',
                ),
            ),
            'forecastWorksheetTimePeriodUserIdGet' => array(
                'reqType' => 'GET',
                'path' => array('ForecastManagerWorksheets', '?', '?'),
                'pathVars' => array('module', 'timeperiod_id', 'user_id'),
                'method' => 'ForecastManagerWorksheetsGet',
                'jsonParams' => array(),
                'shortHelp' => 'Filter records from a single module',
                'longHelp' => 'modules/Forecasts/clients/base/api/help/ForecastManagerWorksheetGet.html',
                'exceptions' => array(
                    'SugarApiExceptionError',
                    'SugarApiExceptionInvalidParameter',
                    'SugarApiExceptionNotAuthorized',
                    'SugarApiExceptionNotFound',
                ),
            ),
            'forecastWorksheetChartGet' => array(
                'reqType' => 'GET',
                'path' => array('ForecastManagerWorksheets', 'chart'),
                'pathVars' => array('module', ''),
                'method' => 'forecastManagerWorksheetsChartGet',
                'jsonParams' => array(),
                'shortHelp' => 'Filter records and reformat data for chart presentation',
                'longHelp' => 'modules/Forecasts/clients/base/api/help/forecastManagerWorksheetsChartGet.html',
                'exceptions' => array(
                    'SugarApiExceptionError',
                    'SugarApiExceptionInvalidParameter',
                    'SugarApiExceptionNotAuthorized',
                    'SugarApiExceptionNotFound',
                ),
            ),
            'forecastWorksheetChartTimePeriodGet' => array(
                'reqType' => 'GET',
                'path' => array('ForecastManagerWorksheets', 'chart', '?'),
                'pathVars' => array('module', '', 'timeperiod_id'),
                'method' => 'forecastManagerWorksheetsChartGet',
                'jsonParams' => array(),
                'shortHelp' => 'Filter records and reformat data for chart presentation',
                'longHelp' => 'modules/Forecasts/clients/base/api/help/forecastManagerWorksheetsChartGet.html',
                'exceptions' => array(
                    'SugarApiExceptionError',
                    'SugarApiExceptionInvalidParameter',
                    'SugarApiExceptionNotAuthorized',
                    'SugarApiExceptionNotFound',
                ),
            ),
            'forecastWorksheetChartTimePeriodUserIdGet' => array(
                'reqType' => 'GET',
                'path' => array('ForecastManagerWorksheets', 'chart', '?', '?'),
                'pathVars' => array('module', '', 'timeperiod_id', 'user_id'),
                'method' => 'forecastManagerWorksheetsChartGet',
                'jsonParams' => array(),
                'shortHelp' => 'Filter records and reformat data for chart presentation',
                'longHelp' => 'modules/Forecasts/clients/base/api/help/forecastManagerWorksheetsChartGet.html',
                'exceptions' => array(
                    'SugarApiExceptionError',
                    'SugarApiExceptionInvalidParameter',
                    'SugarApiExceptionNotAuthorized',
                    'SugarApiExceptionNotFound',
                ),
            ),
            'filterModuleGet' => array(
                'reqType' => 'GET',
                'path' => array('ForecastManagerWorksheets', 'filter'),
                'pathVars' => array('module', ''),
                'method' => 'filterList',
                'jsonParams' => array('filter'),
                'shortHelp' => 'Filter records from a single module',
                'longHelp' => 'modules/Forecasts/clients/base/api/help/ForecastManagerWorksheetFilter.html',
                'exceptions' => array(
                    'SugarApiExceptionError',
                    'SugarApiExceptionInvalidParameter',
                    'SugarApiExceptionNotAuthorized',
                    'SugarApiExceptionNotFound',
                ),
            ),
            'filterModulePost' => array(
                'reqType' => 'POST',
                'path' => array('ForecastManagerWorksheets', 'filter'),
                'pathVars' => array('module', ''),
                'method' => 'filterList',
                'jsonParams' => array('filter'),
                'shortHelp' => 'Filter records from a single module',
                'longHelp' => 'modules/Forecasts/clients/base/api/help/ForecastManagerWorksheetFilter.html',
                'exceptions' => array(
                    'SugarApiExceptionError',
                    'SugarApiExceptionInvalidParameter',
                    'SugarApiExceptionNotAuthorized',
                    'SugarApiExceptionNotFound',
                ),
            ),
        );
    }

    /**
     * Forecast Worksheet API Handler
     *
     * @param ServiceBase $api
     * @param array $args
     * @return array
     */
    public function ForecastManagerWorksheetsGet(ServiceBase $api, array $args)
    {
        // if no timeperiod is set, just set it to false, and the current time period will be set
        if (!isset($args['timeperiod_id'])) {
            $args['timeperiod_id'] = false;
        }
        // if no user id is set, just set it to false so it will use the default user
        if (!isset($args['user_id'])) {
            $args['user_id'] = false;
        }

        $args['filter'] = $this->createFilter($api, $args['user_id'], $args['timeperiod_id']);

        return parent::filterList($api, $args);
    }

    /**
     * Forecast Manager Worksheet API handler to return data formatted for the chart
     *
     * @param ServiceBase $api
     * @param array $args
     * @return array|string
     */
    public function forecastManagerWorksheetsChartGet(ServiceBase $api, array $args)
    {

        if (isset($args['no_data']) && $args['no_data'] == 1) {
            $worksheetData = array('records' => array());
        } else {
            //get data via forecastWorksheetsGet, no need to bother with filter setup, get will do that
            $worksheetData = $this->ForecastManagerWorksheetsGet($api, $args);

            //get all users in direct hierarchy
            $usersList = $this->getDirectHierarchyUsers($api, $args);
            $assignedUser = BeanFactory::getBean("Users", $args['user_id']);

            // get the list of users we have
            $worksheet_users = array_map(
                function ($i) {
                    return $i['user_id'];
                },
                $worksheetData['records']
            );

            //compare users and worksheet data to fill in gaps
            foreach ($usersList['records'] as $user) {
                if (!in_array($user['id'], $worksheet_users)) {
                    $blankWorksheet = BeanFactory::newBean('ForecastManagerWorksheets');
                    $blankWorksheet->assigned_user_id = $args['user_id'];
                    $blankWorksheet->user_id = $user['id'];
                    $blankWorksheet->timeperiod_id = $args['timeperiod_id'];
                    $blankWorksheet->assigned_user_name = $assignedUser->user_name;
                    $blankWorksheet->quota = 0;
                    $blankWorksheet->likely_case = 0;
                    $blankWorksheet->likely_case_adjusted = 0;
                    $blankWorksheet->best_case = 0;
                    $blankWorksheet->best_case_adjusted = 0;
                    $blankWorksheet->worst_case = 0;
                    $blankWorksheet->worst_case_adjusted = 0;
                    $blankWorksheet->currency_id = '-99';
                    $blankWorksheet->base_rate = 1.0;
                    $blankWorksheet->id = '';
                    $blankWorksheet->name = $user['full_name'];
                    array_push($worksheetData['records'], $this->formatBean($api, $args, $blankWorksheet));
                }
            }
        }

        // default to the Individual Code
        $file = 'include/SugarForecasting/Chart/Manager.php';
        $klass = 'SugarForecasting_Chart_Manager';

        // check for a custom file exists
        SugarAutoLoader::requireWithCustom($file);
        $klass = SugarAutoLoader::customClass($klass);
        // create the class

        /* @var $obj SugarForecasting_Chart_AbstractChart */
        $args['data_array'] = $worksheetData['records'];
        $obj = new $klass($args);

        $chartData = $obj->process();

        // check to see if we need to return the target quota with the chartData
        if (isset($args['target_quota']) && $args['target_quota'] == 1) {
            /* @var $quota Quota */
            $quota = BeanFactory::newBean('Quotas');
            $targetQuota = $quota->getRollupQuota($args['timeperiod_id'], $args['user_id'], true);
            $chartData['target_quota'] = $targetQuota['amount'];
        }

        return $chartData;
    }

    protected function getDirectHierarchyUsers(ServiceBase $api, array $args)
    {
        // we need to check if the $api->user is a manager
        // if they are not a manager, throw back a 403 (Not Authorized) error
        if (!User::isManager($api->user->id)) {
            throw new SugarApiExceptionNotAuthorized();
        }

        $args['filter'] = array();

        // if we did not find a user in the args array, set it to the current user's id
        if (!isset($args['user_id'])) {
            $args['user_id'] = $api->user->id;
        } else {
            // make sure that the passed in user is a valid user
            /* @var $user User */
            // we use retrieveBean so it will return NULL and not an empty bean if the $args['user_id'] is invalid
            $user = BeanFactory::retrieveBean('Users', $args['user_id']);
            if (is_null($user)) {
                throw new SugarApiExceptionInvalidParameter('Provided User is not valid');
            }
        }

        // set the reports to id
        array_push(
            $args['filter'],
            array('$or' => array(array('reports_to_id' => $args['user_id']), array('id' => $args['user_id'])))
        );

        $args['module'] = 'Users';
        return parent::filterList($api, $args);
    }

    /**
     * Forecast Worksheet Filter API Handler
     *
     * @param ServiceBase $api
     * @param array $args
     * @return array
     */
    public function filterList(ServiceBase $api, array $args, $acl = 'list')
    {
        // some local variables
        $found_assigned_user = false;
        $found_timeperiod = false;

        // if filter is not defined, define it
        if (!isset($args['filter']) || !is_array($args['filter'])) {
            $args['filter'] = array();
        }

        // if there are filters set, process through them
        if (!empty($args['filter'])) {
            // todo-sfa: clean this up as it currently doesn't handle much in the way of nested arrays
            foreach ($args['filter'] as $key => $filter) {
                $filterKeys = array_keys($filter);
                $filter_key = array_shift($filterKeys);
                // if the key is assigned_user_id, take the value and save it for later
                if ($found_assigned_user == false && $filter_key == 'assigned_user_id') {
                    $found_assigned_user = array_pop($filter);
                }
                // if the key is timeperiod_id, take the value, save it for later, and remove the filter
                if ($found_timeperiod == false && $filter_key == 'timeperiod_id') {
                    $found_timeperiod = array_pop($filter);
                    // remove the timeperiod_id
                    unset($args['filter'][$key]);
                }
                // if the key is 'draft', remote it from the filter
                if ($filter_key == 'draft') {
                    unset($args['filter'][$key]);
                }
            }
        }

        $args['filter'] = $this->createFilter($api, $found_assigned_user, $found_timeperiod);

        return parent::filterList($api, $args, $acl);
    }

    /**
     * Utility Method to create the filter for the filer API to use
     *
     * @param ServiceBase $api                  Service Api Class
     * @param mixed $user_id                    Passed in User ID, if false, it will use the current use from $api->user
     * @param mixed $timeperiod_id              TimePeriod Id, if false, the current time period will be found an used
     * @return array                            The Filer array to be passed back into the filerList Api
     * @throws SugarApiExceptionNotAuthorized
     * @throws SugarApiExceptionInvalidParameter
     */
    protected function createFilter(ServiceBase $api, $user_id, $timeperiod_id)
    {
        // we need to check if the $api->user is a manager
        // if they are not a manager, throw back a 403 (Not Authorized) error
        if (!User::isManager($api->user->id)) {
            throw new SugarApiExceptionNotAuthorized();
        }

        $filter = array();

        // default draft to be 1
        $draft = 1;
        // if we did not find a user in the filters array, set it to the current user's id
        if ($user_id == false) {
            // use the current user, since on one was passed in
            $user_id = $api->user->id;
        } else {
            // make sure that the passed in user is a valid user
            /* @var $user User */
            // we use retrieveBean so it will return NULL and not an empty bean if the $args['user_id'] is invalid
            $user = BeanFactory::retrieveBean('Users', $user_id);
            if (is_null($user)) {
                throw new SugarApiExceptionInvalidParameter('Provided User is not valid');
            }
            // we found a user, so check to make sure that if it's not the current user, they only see committed data
            $draft = ($user_id == $api->user->id) ? 1 : 0;
        }

        // todo-sfa: Make sure that the passed in user can be viewed by the $api->user, need to check reportee tree
        // set the assigned_user_id
        array_push($filter, array('assigned_user_id' => $user_id));
        // set the draft flag depending on the assigned_user_id that is set from above
        array_push($filter, array('draft' => $draft));

        // if we didn't find a time period, set the time period to be the current time period
        if (!is_guid($timeperiod_id) && is_numeric($timeperiod_id) && $timeperiod_id != 0) {
            // we have a timestamp, find timeperiod it belongs in
            $timeperiod_id = TimePeriod::getIdFromTimestamp($timeperiod_id);
        }

        if (!is_guid($timeperiod_id)) {
            $timeperiod_id = TimePeriod::getCurrentId();
        }

        // fix up the timeperiod filter
        /* @var $tp TimePeriod */
        // we use retrieveBean so it will return NULL and not an empty bean if the $args['timeperiod_id'] is invalid
        $tp = BeanFactory::retrieveBean('TimePeriods', $timeperiod_id);
        if (is_null($tp)) {
            throw new SugarApiExceptionInvalidParameter('Provided TimePeriod is not valid');
        }
        array_push($filter, array('timeperiod_id' => $tp->id));

        return $filter;
    }
}
