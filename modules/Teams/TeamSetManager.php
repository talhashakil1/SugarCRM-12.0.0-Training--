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
use Sugarcrm\Sugarcrm\Denormalization\TeamSecurity\Listener;
use Sugarcrm\Sugarcrm\DependencyInjection\Container;
use Sugarcrm\Sugarcrm\Security\Teams\TeamSet;

class TeamSetManager {

	private static $instance;
	private static $_setHash = array();

	/**
	 * Constructor for TrackerManager.  Declared private for singleton pattern.
	 *
	 */
	private function __construct() {}

	/**
	 * getInstance
	 * Singleton method to return static instance of TrackerManager
	 * @returns static TrackerManager instance
	 */
	static function getInstance(){
	    if (!isset(self::$instance)) {
	        self::$instance = new TeamSetManager();
			//Set global variable for tracker monitor instances that are disabled
	        self::$instance->setup();
	    } // if
	    return self::$instance;
	}

	/**
	 * Add a team_set_id and module combination to the hash for later flushing to the db.
	 *
	 * @param $team_set_id - GUID of the team_set_id
	 * @param $module      - string
	 */
	public static function add($team_set_id, $table_name){
		if(empty(self::$_setHash[$team_set_id]) || empty(self::$_setHash[$team_set_id][$table_name])){
			self::$_setHash[$team_set_id][] = $table_name;
		}
	}

	/**
	 * Go through each of the team_sets_modules and find sets that are no longer in use
	 *
	 */
	public static function cleanUp(){
		//maintain a list of the team set ids we would like to remove
		$setsToRemove = array();
		$setsToKeep = array();

        $conn = DBManagerFactory::getConnection();

        $query = 'SELECT team_set_id, module_table_name FROM team_sets_modules WHERE team_sets_modules.deleted = 0';
        $stmt = $conn->executeQuery($query);

        while (($tsmRow = $stmt->fetchAssociative())) {
			//pull off the team_set_id and module and run a query to see if we find if the module is still using this team_set
			//of course we have to be careful not to remove a set before we have gone through all of the modules containing that
			//set otherwise.
			$module_table_name = $tsmRow['module_table_name'];
			$team_set_id = $tsmRow['team_set_id'];
			//if we have a user_preferences table then we do not need to check the db.
			$pos = strpos($module_table_name, 'user_preferences');
			if ($pos !== false) {
				$tokens = explode('-', $module_table_name);
				if(count($tokens) >= 3){
					//we did find that this team_set was going to be removed from user_preferences
                    $query = 'SELECT contents FROM user_preferences WHERE category = ? AND deleted = 0';
                    $prefStmt = $conn->executeQuery($query, array($tokens[1]));

                    while (($userPrefRow = $prefStmt->fetchAssociative())) {
                        $prefs = unserialize(
                            base64_decode($userPrefRow['contents']),
                            ['allowed_classes' => false]
                        );
						$team_set_id = SugarArray::staticGet($prefs, implode('.', array_slice($tokens, 2)));
						if(!empty($team_set_id)){
							//this is the team set id that is being used in user preferences we have to be sure to not remove it.
							$setsToKeep[$team_set_id] = true;
						}
					}//end while
				}//fi
			}else{
                $moduleRecordsExist = self::doesRecordWithTeamSetExist($module_table_name, $team_set_id);
                
                if ($moduleRecordsExist) {
                    $setsToKeep[$team_set_id] = true;
                } else {
                    $setsToRemove[$team_set_id] = true;
                }
			}
		}

		//compute the difference between the sets that have been designated to remain and those set to remove
		$arrayDiff = array_diff_key($setsToRemove, $setsToKeep);

		//now we have our list of team_set_ids we would like to remove, let's go ahead and do it and remember
		//to update the TeamSetModule table.
		foreach($arrayDiff as $team_set_id => $key){
            self::deleteTeamSet($team_set_id);
		}
	}

	/**
	 * Save the data in the hash to the database using TeamSetModule object
	 *
	 */
	public static function save(){
		//if this entry is set in the config file, then store the set
		//and modules in the team_set_modules table
        if (!isset($GLOBALS['sugar_config']['enable_team_module_save'])
            || !empty($GLOBALS['sugar_config']['enable_team_module_save'])) {
			foreach(self::$_setHash as $team_set_id => $table_names){
				$teamSetModule = BeanFactory::newBean('TeamSetModules');
				$teamSetModule->team_set_id = $team_set_id;

				foreach($table_names as $table_name){
					$teamSetModule->module_table_name = $table_name;
					//remove the id so we do not think this is an update
					$teamSetModule->id = '';
					$teamSetModule->save();
				}
			}
		}
	}

    /**
     * Check if one or more records attached to a team still exist in the database
     *
     * @param string $table Table name
     * @param string $teamSetId TeamSet ID
     * @param string $excludeId Record to exclude from search
     * @return boolean
     *
     * @throws DBALException
     */
    public static function doesRecordWithTeamSetExist($table, $teamSetId, $excludeId = null)
    {
        $columns = array_intersect_key([
            'team_set_id' => $teamSetId,
            'acl_team_set_id' => $teamSetId,
        ], DBManagerFactory::getInstance()->get_columns($table));

        if (count($columns) < 1) {
            return false;
        }

        $connection = DBManagerFactory::getConnection();
        $platform = $connection->getDatabasePlatform();
        foreach ($columns as $column => $value) {
            $query = $platform->modifyLimitQuery(
                sprintf(
                    'SELECT id FROM %s WHERE %s = ? and deleted = ?',
                    $table,
                    $column
                ),
                $excludeId === null ? 1 : 2
            );
            $ids = $connection->executeQuery($query, [$teamSetId, 0])
                ->fetchFirstColumn();

            foreach ($ids as $id) {
                if ($excludeId === null || $id != $excludeId) {
                    return true;
                }
            }
        }

        return false;
    }

    /**
     * Removes TeamSet module if no records exist
     *
     * @param SugarBean $focus
     * @param string    $teamSetId Team set to remove
     *
     * @throws DBALException
     */
    public static function removeTeamSetModule(SugarBean $focus, $teamSetId)
    {
        if (empty($teamSetId)) {
            return;
        }

        if (self::doesRecordWithTeamSetExist($focus->table_name, $teamSetId, $focus->id)) {
            return;
        }

        $conn = DBManagerFactory::getConnection();

        $conn->delete('team_sets_modules', [
            'team_set_id' => $teamSetId,
            'module_table_name' => $focus->table_name,
        ]);

        $platform = $conn->getDatabasePlatform();
        $query = $platform->modifyLimitQuery('SELECT NULL FROM team_sets_modules WHERE team_set_id = ?', 1);
        $stmt = $conn->executeQuery($query, [$teamSetId]);

        if ($stmt->fetchOne() !== false) {
            return;
        }

        self::deleteTeamSet($teamSetId);
    }

    /**
     * @param $teamSetId
     * @throws DBALException
     */
    private static function deleteTeamSet($teamSetId) : void
    {
        $conn = DBManagerFactory::getConnection();

        $conn->delete('team_sets_modules', array(
            'team_set_id' => $teamSetId,
        ));

        $conn->delete('team_sets_teams', array(
            'team_set_id' => $teamSetId,
        ));

        $conn->delete('team_sets', array(
            'id' => $teamSetId,
        ));

        Container::getInstance()
            ->get(Listener::class)
            ->teamSetDeleted($teamSetId);
    }

   /**
    * Saves the association between a team set and a bean table
    *
    * @param string $teamSetId The ID of the team set
    * @param string $tableName The table name
    */
	public static function saveTeamSetModule($teamSetId, $tableName){
		//if this entry is set in the config file, then store the set
		//and modules in the team_set_modules table
        if (!isset($GLOBALS['sugar_config']['enable_team_module_save'])
            || !empty($GLOBALS['sugar_config']['enable_team_module_save'])) {
			$teamSetModule = BeanFactory::newBean('TeamSetModules');
			$teamSetModule->team_set_id = $teamSetId;
			$teamSetModule->module_table_name = $tableName;
			$teamSetModule->save();
		}
	}

	public static function getFormattedTeamNames($teams_arr=array()) {
		//Add a safety check (in the event that team_set_id is not set (maybe perhaps from manual SQL or failed unit tests)
		if(!is_array($teams_arr)) {
		   return array();
		}

		//now format the returned values relative to how the user has their locale
    	$teams = array();
	    foreach($teams_arr as $team){
	    	$display_name = Team::getDisplayName($team['name'], $team['name_2']);
            $teams[] = array(
                'id' => (string)$team['id'],
                'display_name' => $display_name,
                'name' => $team['name'],
                'name_2' => $team['name_2'],
            );
		}
		return $teams;
	}

	/**
     * Retrieve a list of team associated with a set ordered by name
	 *
	 * @param $team_set_id string
	 * @return array of teams array('id', 'name');
	 */
	public static function getUnformattedTeamsFromSet($team_set_id){
		if(empty($team_set_id)) return array();

        /** @var TeamSet $teamSet */
        $teamSet = BeanFactory::newBean('TeamSets');

        $teams = [];
        foreach ($teamSet->getTeams($team_set_id) as $team) {
            $teams[] = [
                'id' => $team->id,
                'name' => $team->name,
                'name_2' => $team->name_2,
            ];
        }

        return $teams;
	}

	/**
	 * Retrieve a list of team associated with a set for display purposes
	 *
	 * @param $team_set_id string
	 * @return array of teams array('id', 'name');
	 */
	public static function getTeamsFromSet($team_set_id){
		if(empty($team_set_id)) return array();
		return self::getFormattedTeamNames(self::getUnformattedTeamsFromSet($team_set_id));
	}

    /**
     * Return a formatted list of teams with badges.
     *
     * @param $focus
     * @param bool|false $forDisplay
     * @return mixed|string|void
     */
    public static function getFormattedTeamsFromSet($focus, $forDisplay = false)
    {
        $result = array();
        $isTBAEnabled = TeamBasedACLConfigurator::isEnabledForModule($focus->module_dir);

        $team_set_id = $focus->team_set_id ? $focus->team_set_id : $focus->team_id;
        $teams = self::getTeamsFromSet($team_set_id);

        $selectedTeamIds = array();
        if ($isTBAEnabled && !empty($focus->acl_team_set_id)) {
            $selectedTeamIds = array_map(function ($el) {
                return $el['id'];
            }, TeamSetManager::getTeamsFromSet($focus->acl_team_set_id));
        }

        foreach ($teams as $key => $row) {
            $isPrimaryTeam = false;
            $row['title'] = $forDisplay ?
                htmlspecialchars($row['display_name'], ENT_QUOTES, 'UTF-8') :
                (!empty($row['name']) ? $row['name'] : $row['name_2']);

            if (!empty($focus->team_id) && $row['id'] == $focus->team_id) {
                $row['badges']['primary'] = $isPrimaryTeam = true;
            }

            if ($isTBAEnabled && in_array($row['id'], $selectedTeamIds)) {
                $row['badges']['selected'] = $hasBadge = true;
            }

            if ($isPrimaryTeam) {
                array_unshift($result, $row);
            } else {
                array_push($result, $row);
            }
        }

        $detailView = new Sugar_Smarty();
        $detailView->assign('teams', $result);
        return $detailView->fetch('modules/Teams/tpls/DetailView.tpl');
    }

	/**
	 * Return a comma delimited list of teams for display purposes
	 *
     * @param string $team_set_id
     * @param string $primary_team_id
	 * @param boolean $for_display
	 * @return string
	 */
	public static function getCommaDelimitedTeams($team_set_id, $primary_team_id = '', $for_display = false){
        $team_set_id = $team_set_id?$team_set_id:$primary_team_id;
		$teams = self::getTeamsFromSet($team_set_id);
		$value = '';
	    $primary = '';
	   	foreach($teams as $row){
	        if(!empty($primary_team_id) && $row['id'] == $primary_team_id){
	        	  if($for_display){
	        	  	 $primary = ", {$row['display_name']}";
	        	  }else{
	        	  	$primary = ", ".(!empty($row['name']) ? $row['name'] : $row['name_2']);
	        	  }
	        }else{
	        	if($for_display){
	        		$value .= ", {$row['display_name']}";
	        	}else{
	   				$value .= ", ".(!empty($row['name']) ? $row['name'] : $row['name_2']);
	        	}
	        }
	   	}
	   	$value = $primary.$value;
	   	return substr($value, 2);
	}

	/**
	 * clear out the cache
	 *
	 */
	public static function flushBackendCache( ) {
    }

    /**
     * Given a particular team id, remove the team from all team sets that it belongs to
     *
     * @param string $team_id The team's id to remove from the team sets
     * @throws DBALException
     */
    public static function removeTeamFromSets($team_id)
    {
        $conn = DBManagerFactory::getConnection();

        $teamSet = BeanFactory::newBean('TeamSets');

        $query = 'SELECT team_set_id
FROM team_sets_teams
WHERE team_id = ?';
        $stmt1 = $conn->executeQuery($query, array($team_id));

        while (($teamSetId = $stmt1->fetchOne())) {
            $teamSet->id = $teamSetId;
            $teamSet->removeTeamFromSet($team_id);

            // Now check if the new team_md5 value already exists.  If it does, we have to go and
            // update all the records that to use an existing team_set_id and get rid of this team set since
            // it is essentially a duplicate
            $query = 'SELECT id FROM team_sets WHERE team_md5 = ? AND id != ?';
            $stmt = $conn->executeQuery($query, array($teamSet->team_md5, $teamSet->id));

            if (!($existing_team_set_id = $stmt->fetchOne())) {
                continue;
            }

            $query = <<<SQL
SELECT module_table_name
 FROM team_sets_modules
 WHERE team_set_id = ?
SQL;
            $stmt2 = $conn->executeQuery($query, [$teamSetId]);

            //Update the records
            while (($table = $stmt2->fetchOne())) {
                $conn->update($table, array(
                    'team_set_id' => $existing_team_set_id,
                ), array(
                    'team_set_id' => $teamSet->id,
                ));
            }

            self::deleteTeamSet($teamSetId);
        }
    }

    public static function reassignRecords(array $oldTeams, Team $newTeam)
    {
        if (!count($oldTeams)) {
            return;
        }

        $conn = DBManagerFactory::getConnection();

        $query = <<<SQL
SELECT DISTINCT
       tst1.team_set_id,
       tst1.team_id
  FROM team_sets_teams tst1
 INNER JOIN team_sets_teams tst2
    ON tst2.team_set_id = tst1.team_set_id
 WHERE tst2.team_id IN(?)
SQL;

        $oldTeamIds = array_map(function (Team $team) {
            return $team->id;
        }, $oldTeams);

        $stmt = $conn->executeQuery($query, [$oldTeamIds], [Connection::PARAM_STR_ARRAY]);
        $data = [];

        $db = DBManagerFactory::getInstance();

        while (($row = $stmt->fetchAssociative())) {
            $data[
                $db->fromConvert($row['team_set_id'], 'id')
            ][] = $db->fromConvert($row['team_id'], 'id');
        }

        if (!count($data)) {
            return;
        }

        $query = <<<SQL
SELECT DISTINCT tsm.module_table_name
  FROM team_sets_modules tsm
 INNER JOIN team_sets_teams tst
    ON tst.team_set_id = tsm.team_set_id
 WHERE tst.team_id IN(?)
   AND tsm.module_table_name != 'users'
SQL;

        $stmt = $conn->executeQuery($query, [$oldTeamIds], [Connection::PARAM_STR_ARRAY]);
        $modules = $stmt->fetchFirstColumn();

        foreach ($data as $oldTeamSetId => $teamIds) {
            $teamSetTeams = array_map(function ($id) {
                $team = BeanFactory::newBean('Teams');
                $team->id = $id;

                return $team;
            }, $teamIds);

            $teamSet = new TeamSet(...$teamSetTeams);

            foreach ($oldTeams as $oldTeam) {
                $teamSet = $teamSet->withoutTeam($oldTeam);
            }

            $teamSet = $teamSet->withTeam($newTeam);
            $newTeamSetId = $teamSet->persist();

            self::replaceTeamSet($oldTeamSetId, $newTeamSetId, $modules);
        }

        foreach ($oldTeams as $oldTeam) {
            self::replaceRecordTeam($oldTeam, $newTeam, $modules);
            self::replaceUserTeam($oldTeam, $newTeam);
        }
    }

    /**
     * Replaces old team set with the new one in the records of the given modules
     *
     * @param string $oldTeamSetId
     * @param string$newTeamSetId
     * @param array $modules
     */
    private static function replaceTeamSet($oldTeamSetId, $newTeamSetId, array $modules)
    {
        $conn = DBManagerFactory::getConnection();

        // udpate module tables
        foreach ($modules as $module) {
            // update team sets in module records
            $conn->update($module, array(
                'team_set_id' => $newTeamSetId,
            ), array(
                'team_set_id' => $oldTeamSetId,
            ));
        }

        // select the records with the old team set for which the one with the new team set already exists
        // with the same module so that when we don't create duplicates
        $stmt = $conn->executeQuery(<<<SQL
SELECT module_table_name
  FROM team_sets_modules t1
 WHERE team_set_id = ?
   AND EXISTS (
       SELECT NULL
         FROM team_sets_modules t2
        WHERE t2.module_table_name = t1.module_table_name
          AND t2.team_set_id = ?
)
SQL
            , [
                $oldTeamSetId,
                $newTeamSetId,
            ]);

        // delete the records which would produce duplicates after update
        while (($module = $stmt->fetchOne())) {
            $conn->executeUpdate(<<<SQL
DELETE FROM team_sets_modules
 WHERE team_set_id = ?
   AND module_table_name = ?
SQL
                , [$oldTeamSetId, $module]);
        }

        $conn->update('team_sets_modules', array(
            'team_set_id' => $newTeamSetId,
        ), array(
            'team_set_id' => $oldTeamSetId,
        ));

        Container::getInstance()->get(Listener::class)
            ->teamSetDeleted($oldTeamSetId);
    }

    /**
     * Replaces old team with the new one in the records of the given modules
     *
     * @param Team $oldTeam
     * @param Team $newTeam
     * @param array $modules
     *
     * @throws DBALException
     */
    private static function replaceRecordTeam(Team $oldTeam, Team $newTeam, array $modules)
    {
        $conn = DBManagerFactory::getConnection();
        $logger = LoggerManager::getLogger();

        foreach ($modules as $module) {
            $logger->debug(sprintf(
                "Updating team_id column values in %s table from '%s' to '%s'",
                $module,
                $oldTeam->id,
                $newTeam->id
            ));

            $conn->update($module, array(
                'team_id' => $newTeam->id,
            ), array(
                'team_id' => $oldTeam->id,
            ));
        }
    }

    /**
     * Reassigns users from the old team to the new one
     *
     * @param Team $oldTeam
     * @param Team $newTeam
     *
     * @throws DBALException
     */
    private static function replaceUserTeam(Team $oldTeam, Team $newTeam)
    {
        $conn = DBManagerFactory::getConnection();
        $logger = LoggerManager::getLogger();

        // find affected users
        $query = 'SELECT id FROM users WHERE default_team = ?';
        $userIds = $conn->executeQuery($query, array($oldTeam->id))
            ->fetchFirstColumn();

        // for User bean team_id is default_team
        $logger->debug(sprintf(
            "Updating default_team column values in users table from '%s' to '%s'",
            $oldTeam->id,
            $newTeam->id
        ));

        $conn->update('users', array(
            'default_team' => $newTeam->id,
        ), array(
            'default_team' => $oldTeam->id,
        ));

        /** @var Team $newTeam */
        $newTeam = BeanFactory::retrieveBean('Teams', $newTeam->id);

        // make sure users are members of the assigned team
        foreach ($userIds as $userId) {
            $newTeam->add_user_to_team($userId);
        }
    }
}
