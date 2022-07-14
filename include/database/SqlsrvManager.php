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

/**
* Description: This file handles the Data base functionality for the application.
* It acts as the DB abstraction layer for the application. It depends on helper classes
* which generate the necessary SQL. This sql is then passed to PEAR DB classes.
* The helper class is chosen in DBManagerFactory, which is driven by 'db_type' in 'dbconfig' under config.php.
*
* All the functions in this class will work with any bean which implements the meta interface.
* The passed bean is passed to helper class which uses these functions to generate correct sql.
*
* The meta interface has the following functions:
* getTableName()	        	Returns table name of the object.
* getFieldDefinitions()	    	Returns a collection of field definitions in order.
* getFieldDefintion(name)		Return field definition for the field.
* getFieldValue(name)	    	Returns the value of the field identified by name.
*                           	If the field is not set, the function will return boolean FALSE.
* getPrimaryFieldDefinition()	Returns the field definition for primary key
*
* The field definition is an array with the following keys:
*
* name 		This represents name of the field. This is a required field.
* type 		This represents type of the field. This is a required field and valid values are:
*      		int
*      		long
*      		varchar
*      		text
*      		date
*      		datetime
*      		double
*      		float
*      		uint
*      		ulong
*      		time
*      		short
*      		enum
* length	This is used only when the type is varchar and denotes the length of the string.
*  			The max value is 255.
* enumvals  This is a list of valid values for an enum separated by "|".
*			It is used only if the type is ?enum?;
* required	This field dictates whether it is a required value.
*			The default value is ?FALSE?.
* isPrimary	This field identifies the primary key of the table.
*			If none of the fields have this flag set to ?TRUE?,
*			the first field definition is assume to be the primary key.
*			Default value for this field is ?FALSE?.
* default	This field sets the default value for the field definition.
*/

/**
 * SQL Server (sqlsrv) manager
 */
class SqlsrvManager extends MssqlManager
{
    public $dbName = 'SQL Server';
    public $variant = 'sqlsrv';
    public $priority = 10;
    public $label = 'LBL_MSSQL_SQLSRV';

    protected $capabilities = array(
        "affected_rows" => true,
        'create_user' => true,
        "create_db" => true,
        "recursive_query" => true,
    );

    /**
     * {@inheritDoc}
     */
    protected $type_map = array(
        'blob'          => 'nvarchar(max)',
        'bool'          => 'bit',
        'char'          => 'char',
        'currency'      => 'decimal(26,6)',
        'date'          => 'date',
        'datetimecombo' => 'datetime2(0)',
        'datetime'      => 'datetime2(0)',
        'decimal'       => 'decimal',
        'decimal2'      => 'decimal',
        'decimal_tpl'   => 'decimal(%d, %d)',
        'double'        => 'float',
        'encrypt'       => 'nvarchar',
        'enum'          => 'nvarchar',
        'file'          => 'nvarchar',
        'float'         => 'float',
        'html'          => 'nvarchar(max)',
        'id'            => 'nvarchar(36)',
        'int'           => 'int',
        'long'          => 'bigint',
        'longblob'      => 'nvarchar(max)',
        'longhtml'      => 'nvarchar(max)',
        'longtext'      => 'nvarchar(max)',
        'multienum'     => 'nvarchar(max)',
        'relate'        => 'nvarchar',
        'short'         => 'smallint',
        'text'          => 'nvarchar(max)',
        'time'          => 'datetime2(0)',
        'tinyint'       => 'tinyint',
        'uint'          => 'int',
        'ulong'         => 'int',
        'url'           => 'nvarchar',
        'varchar'       => 'nvarchar',
    );

    /**
     * Integer fields' min and max values
     * @var array
     */
    protected $type_range = array(
        'int'      => array('min_value'=>-2147483648, 'max_value'=>2147483647),
        'uint'     => array('min_value'=>-2147483648, 'max_value'=>2147483647), // int
        'ulong'    => array('min_value'=>-2147483648, 'max_value'=>2147483647), // int
        'long'     => array('min_value'=>-9223372036854775808, 'max_value'=>9223372036854775807),//bigint
        'short'    => array('min_value'=>-32768, 'max_value'=>32767),
        'tinyint'  => array('min_value'=>0, 'max_value'=>255),
    );

	/**
     * @see DBManager::connect()
     */
    public function connect(array $configOptions = null, $dieOnError = false)
    {
        global $sugar_config;

        if (is_null($configOptions)) {
            $configOptions = $sugar_config['dbconfig'];
        }

        //set the connections parameters
        $connect_param = '';
        $configOptions['db_host_instance'] = trim($configOptions['db_host_instance']);
        if (empty($configOptions['db_host_instance']))
            $connect_param = $configOptions['db_host_name'];
        else
            $connect_param = $configOptions['db_host_name']."\\".$configOptions['db_host_instance'];

        /*
         * Don't try to specifically use a persistent connection
         * since the driver will handle that for us
         */
        $options = array(
                    "UID" => $configOptions['db_user_name'],
                    "PWD" => $configOptions['db_password'],
                    "CharacterSet" => "UTF-8",
                    "ReturnDatesAsStrings" => true,
                    "MultipleActiveResultSets" => true,
                    );
        if(!empty($configOptions['db_name'])) {
            $options["Database"] = $configOptions['db_name'];
        }
        $this->database = sqlsrv_connect($connect_param, $options);
        if(empty($this->database)) {
            $this->logger->alert(
                'Could not connect to server ' . $configOptions['db_host_name']
                . ' as ' . $configOptions['db_user_name'] . '.'
            );
            if($dieOnError) {
                    if(isset($GLOBALS['app_strings']['ERR_NO_DB'])) {
                        sugar_die($GLOBALS['app_strings']['ERR_NO_DB']);
                    } else {
                        sugar_die("Could not connect to the database. Please refer to sugarcrm.log for details.");
                    }
            } else {
                return false;
            }
        }

        if ($this->checkError('Could Not Connect:', $dieOnError)) {
            $this->logger->info('connected to db');
        }

        sqlsrv_query($this->database, 'SET DATEFORMAT mdy');

        $this->connectOptions = $configOptions;

        $this->logger->info('Connect:' . $this->database);

        return true;
    }

	/**
     * @see DBManager::query()
	 */
	public function query($sql, $dieOnError = false, $msg = '', $suppress = false, $keepResult = false)
    {
        if(is_array($sql)) {
            return $this->queryArray($sql, $dieOnError, $msg, $suppress);
        }
        $sql = $this->_appendN($sql);

        $this->countQuery($sql);
        $this->logger->info('Query:' . $sql);
        $this->checkConnection();
        $this->query_time = microtime(true);

        $result = $suppress?@sqlsrv_query($this->database, $sql):sqlsrv_query($this->database, $sql);

        $this->query_time = microtime(true) - $this->query_time;
        $this->logger->info('Query Execution Time:' . $this->query_time);

        $this->dump_slow_queries($sql);

        $this->checkError($msg.' Query Failed:' . $sql . '::', $dieOnError);

        //suppress non error messages
        sqlsrv_configure('WarningsReturnAsErrors',false);

        return $result;
    }

	/**
     * @see DBManager::getFieldsArray()
     */
	public function getFieldsArray($result, $make_lower_case = false)
	{
        $field_array = array();

        if ( !$result ) {
        	return false;
        }

        foreach ( sqlsrv_field_metadata($result) as $fieldMetadata ) {
            $key = $fieldMetadata['Name'];
            if($make_lower_case==true)
                $key = strtolower($key);

            $field_array[] = $key;
        }

        return $field_array;
	}

	/**
	 * @see DBManager::fetchRow()
	 */
	public function fetchRow($result)
	{
		if (empty($result))	return false;

	    $row = sqlsrv_fetch_array($result,SQLSRV_FETCH_ASSOC);
        if (empty($row)) {
            return false;
        }

        return $row;
	}

    /**
     * @see DBManager::convert()
     */
    public function convert($string, $type, array $additional_parameters = array())
    {
        if ( $type == 'datetime')
        // see http://msdn.microsoft.com/en-us/library/ms187928.aspx for details
            return "CONVERT(datetime,$string,120)";
        else
            return parent::convert($string, $type, $additional_parameters);
    }

    /**
     * Disconnects from the database
     *
     * Also handles any cleanup needed
     */
    public function disconnect()
    {
        $this->logger->debug('Calling Mssql::disconnect()');
        if(!empty($this->database)){
            $this->freeResult();
            sqlsrv_close($this->database);
            $this->database = null;
        }

        parent::disconnect();
    }

    /**
     * @see DBManager::freeDbResult()
     */
    protected function freeDbResult($dbResult)
    {
        if(is_resource($dbResult))
            sqlsrv_free_stmt($dbResult);
    }


	/**
	 * Detect if no clustered index has been created for a table; if none created then just pick the first index and make it that
	 *
	 * @see MssqlHelper::indexSQL()
     */
    public function getConstraintSql($indices, $table)
    {
        if (!$this->isFieldArray($indices)) {
            $indices = array($indices);
        }
        if ( $this->doesTableHaveAClusteredIndexDefined($table) ) {
            return parent::getConstraintSql($indices, $table);
        }

        // check to see if one of the passed in indices is a primary one; if so we can bail as well
        foreach ( $indices as $index ) {
            if ( $index['type'] == 'primary' ) {
                return parent::getConstraintSql($indices, $table);
            }
        }

        // Change the first index listed to be a clustered one instead ( so we have at least one for the table )
        if ( isset($indices[0]) ) {
            $indices[0]['type'] = 'clustered';
        }

        return parent::getConstraintSql($indices, $table);
    }

    /**
     * @see DBManager::get_columns()
     */
    public function get_columns($tablename)
    {
        // Sanity check for getting columns
        if (empty($tablename)) {
            $this->logger->error(__METHOD__ . ' called with an empty tablename argument');
            return array();
        }

        $query = '{call sp_columns_90(?)}';

        $stmt = $this->getConnection()
            ->executeQuery($query, array($tablename));

        $columns = array();
        while (($row = $stmt->fetchAssociative())) {
            $column_name = strtolower($row['COLUMN_NAME']);
            $columns[$column_name]['name']=$column_name;
            $columns[$column_name]['type']=strtolower($row['TYPE_NAME']);
            if ( $row['TYPE_NAME'] == 'decimal' ) {
                $columns[$column_name]['len']=strtolower($row['PRECISION']);
                $columns[$column_name]['len'].=','.strtolower($row['SCALE']);
            }
			elseif ( in_array($row['TYPE_NAME'],array('nchar','nvarchar')) ) {
				$columns[$column_name]['len']=strtolower($row['PRECISION']);
				if ( $row['TYPE_NAME'] == 'nvarchar' && $row['PRECISION'] == '0' ) {
				    $columns[$column_name]['len']='max';
				}
			}
            elseif ( !in_array($row['TYPE_NAME'],array('datetime','text')) ) {
                $columns[$column_name]['len']=strtolower($row['LENGTH']);
            }
            if ( stristr($row['TYPE_NAME'],'identity') ) {
                $columns[$column_name]['auto_increment'] = '1';
                $columns[$column_name]['type']=str_replace(' identity','',strtolower($row['TYPE_NAME']));
            }

            if (!empty($row['IS_NULLABLE']) && $row['IS_NULLABLE'] == 'NO' && (empty($row['KEY']) || !stristr($row['KEY'],'PRI')))
                $columns[strtolower($row['COLUMN_NAME'])]['required'] = 'true';

            $column_def = 1;
            if ( strtolower($tablename) == 'relationships' ) {
                $column_def = $this->getOne("select cdefault from syscolumns where id = object_id('relationships') and name = '$column_name'");
            }
            if ( $column_def != 0 && ($row['COLUMN_DEF'] != null)) {	// NOTE Not using !empty as an empty string may be a viable default value.
                $matches = array();
                if ( preg_match('/\([\(|\'](.*)[\)|\']\)/i',$row['COLUMN_DEF'],$matches) )
                    $columns[$column_name]['default'] = $matches[1];
                elseif ( preg_match('/\(N\'(.*)\'\)/i',$row['COLUMN_DEF'],$matches) )
                    $columns[$column_name]['default'] = $matches[1];
                else
                    $columns[$column_name]['default'] = $row['COLUMN_DEF'];
            }
        }
        return $columns;
    }

    /**
     * protected function to return true if the given tablename has any clustered indexes defined.
     *
     * @param  string $tableName
     * @return bool
     */
    protected function doesTableHaveAClusteredIndexDefined($tableName)
    {
        $query = <<<EOSQL
SELECT IST.TABLE_NAME
    FROM INFORMATION_SCHEMA.TABLES IST
    WHERE objectProperty(object_id(IST.TABLE_NAME), 'IsUserTable') = 1
        AND objectProperty(object_id(IST.TABLE_NAME), 'TableHasClustIndex') = 1
        AND IST.TABLE_NAME = '{$tableName}'
EOSQL;

        $result = $this->getOne($query);
        if ( !$result ) {
            return false;
        }

        return true;
    }

	/**
	 * (non-PHPdoc)
	 * @see DBManager::lastDbError()
	 */
    public function lastDbError()
    {
        $errors = sqlsrv_errors(SQLSRV_ERR_ERRORS);
        if(empty($errors)) return false;
        global $app_strings;
        if (empty($app_strings)
		    or !isset($app_strings['ERR_MSSQL_DB_CONTEXT'])
			or !isset($app_strings['ERR_MSSQL_WARNING']) ) {
        //ignore the message from sql-server if $app_strings array is empty. This will happen
        //only if connection if made before languge is set.
		    return false;
        }
        $messages = array();
        foreach($errors as $error) {
            $sqlmsg = $error['message'];
            $sqlpos = strpos($sqlmsg, 'Changed database context to');
            $sqlpos2 = strpos($sqlmsg, 'Warning:');
            $sqlpos3 = strpos($sqlmsg, 'Checking identity information:');
            if ( $sqlpos !== false || $sqlpos2 !== false || $sqlpos3 !== false ) {
                continue;
            }
            $sqlpos = strpos($sqlmsg, $app_strings['ERR_MSSQL_DB_CONTEXT']);
            $sqlpos2 = strpos($sqlmsg, $app_strings['ERR_MSSQL_WARNING']);
    		if ( $sqlpos !== false || $sqlpos2 !== false) {
                    continue;
            }
            $messages[] = $sqlmsg;
        }

        if(!empty($messages)) {
            return join("\n", $messages);
        }
        return false;
    }

    /**
     * (non-PHPdoc)
     * @see DBManager::getDbInfo()
     * @return array
     */
    public function getDbInfo()
    {
        $info = array_merge(sqlsrv_client_info($this->database), sqlsrv_server_info($this->database));
        return $info;
    }

    /**
     * Execute data manipulation statement, then roll it back
     * @param  $type
     * @param  $table
     * @param  $query
     * @return string
     */
    protected function verifyGenericQueryRollback($type, $table, $query)
    {
        $this->logger->debug("verifying $type statement");
        if(!sqlsrv_begin_transaction($this->database)) {
            return "Failed to create transaction";
        }
        $this->query($query, false);
        $error = $this->lastError();
        sqlsrv_rollback($this->database);
        return $error;
    }

    /**
     * Tests an INSERT INTO query
     * @param string table The table name to get DDL
     * @param string query The query to test.
     * @return string Non-empty if error found
     */
    public function verifyInsertInto($table, $query)
    {
        return $this->verifyGenericQueryRollback("INSERT", $table, $query);
    }

    /**
     * Tests an UPDATE query
     * @param string table The table name to get DDL
     * @param string query The query to test.
     * @return string Non-empty if error found
     */
    public function verifyUpdate($table, $query)
    {
        return $this->verifyGenericQueryRollback("UPDATE", $table, $query);
    }

    /**
     * Tests an DELETE FROM query
     * @param string table The table name to get DDL
     * @param string query The query to test.
     * @return string Non-empty if error found
     */
    public function verifyDeleteFrom($table, $query)
    {
        return $this->verifyGenericQueryRollback("DELETE", $table, $query);
    }

    /**
     * Select database
     * @param string $dbname
     */
    protected function selectDb($dbname)
    {
        return $this->query("USE ".$this->quoted($dbname));
    }

    /**
     * Check if this driver can be used
     * @return bool
     */
    public function valid()
    {
        return function_exists("sqlsrv_connect");
    }
}
