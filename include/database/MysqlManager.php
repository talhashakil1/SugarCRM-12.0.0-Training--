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
*           -   int
*           -   long
*           -   varchar
*           -   text
*           -   date
*           -   datetime
*           -   double
*           -   float
*           -   uint
*           -   ulong
*           -   time
*           -   short
*           -   enum
* length    This is used only when the type is varchar and denotes the length of the string.
*           The max value is 255.
* enumvals  This is a list of valid values for an enum separated by "|".
*           It is used only if the type is -enum-;
* required  This field dictates whether it is a required value.
*           The default value is -FALSE-.
* isPrimary This field identifies the primary key of the table.
*           If none of the fields have this flag set to -TRUE-,
*           the first field definition is assume to be the primary key.
*           Default value for this field is -FALSE-.
* default   This field sets the default value for the field definition.
*
*
* Portions created by SugarCRM are Copyright (C) SugarCRM, Inc.
* All Rights Reserved.
* Contributor(s): ______________________________________..
********************************************************************************/

/**
 * MySQL manager implementation for mysql extension
 */
abstract class MysqlManager extends DBManager
{
	/**
	 * @see DBManager::$dbType
	 */
	public $dbType = 'mysql';
	public $variant = 'mysql';
	public $dbName = 'MySQL';
	public $label = 'LBL_MYSQL';

	protected $maxNameLengths = array(
		'table' => 64,
		'column' => 64,
		'index' => 64,
		'alias' => 256
	);

    /**
     * {@inheritDoc}
     */
    protected $type_map = array(
        'blob'          => 'blob',
        'bool'          => 'bool',
        'char'          => 'char',
        'currency'      => 'decimal(26,6)',
        'date'          => 'date',
        'datetimecombo' => 'datetime',
        'datetime'      => 'datetime',
        'decimal'       => 'decimal',
        'decimal2'      => 'decimal',
        'decimal_tpl'   => 'decimal(%d, %d)',
        'double'        => 'double',
        'encrypt'       => 'varchar',
        'enum'          => 'varchar',
        'file'          => 'varchar',
        'float'         => 'float',
        'html'          => 'text',
        'id'            => 'char(36)',
        'int'           => 'int',
        'long'          => 'bigint',
        'longblob'      => 'longblob',
        'longhtml'      => 'longtext',
        'longtext'      => 'longtext',
        'multienum'     => 'text',
        'relate'        => 'varchar',
        'short'         => 'smallint',
        'text'          => 'text',
        'time'          => 'time',
        'tinyint'       => 'tinyint',
        'uint'          => 'int unsigned',
        'ulong'         => 'bigint unsigned',
        'url'           => 'varchar',
        'varchar'       => 'varchar',
    );

    /**
     * Integer fields' min and max values
     * @var array
     */
    protected $type_range = array(
        'int'      => array('min_value'=>-2147483648, 'max_value'=>2147483647),
        'uint'     => array('min_value'=>0, 'max_value'=>4294967295),
        'ulong'    => array('min_value'=>0, 'max_value'=>18446744073709551615),
        'long'     => array('min_value'=>-9223372036854775808, 'max_value'=>9223372036854775807),
        'short'    => array('min_value'=>-32768, 'max_value'=>32767),
        'tinyint'  => array('min_value'=>-128, 'max_value'=>127),
    );

    /**
     * Field's max size
     * @var array
     */
    protected $max_size = [
        'text' => 65535,
        'html' => 65535,
    ];

	protected $capabilities = array(
		"affected_rows" => true,
		"select_rows" => true,
		"inline_keys" => true,
		"create_user" => true,
	    "collation" => true,
	    "create_db" => true,
	    "disable_keys" => true,
	    "fix:report_as_condition" => true,
        "short_group_by" => true, //set to true if not all the select fields are needed in the group by (currently mysql only)
	);

	/**
	 * @abstract
	 * Check if query has LIMIT clause
	 * Relevant for now only for Mysql
	 * @param string $sql
	 * @return bool
	 */
	protected function hasLimit($sql)
	{
	    return stripos($sql, " limit ") !== false;
	}

	/**
	 * @see DBManager::limitQuery()
	 */
	public function limitQuery($sql, $start, $count, $dieOnError = false, $msg = '', $execute = true)
	{
        $start = (int)$start;
        $count = (int)$count;
	    if ($start < 0)
			$start = 0;
        $this->logger->debug('Limit Query:' . $sql. ' Start: ' .$start . ' count: ' . $count);

	    $sql = "$sql LIMIT $start,$count";
		$this->lastsql = $sql;

		if(!empty($GLOBALS['sugar_config']['check_query'])){
			$this->checkQuery($sql);
		}
		if(!$execute) {
			return $sql;
		}

		return $this->query($sql, $dieOnError, $msg);
	}


	/**
	 * @see DBManager::checkQuery()
     * @param  string $sql         query to be run
     * @param  bool   $object_name optional, object to look up indices in
     * @return bool   true if an index is found false otherwise
	 */
    protected function checkQuery($sql, $object_name = false)
	{
		$result   = $this->query('EXPLAIN ' . $sql);
		$badQuery = array();
		while ($row = $this->fetchByAssoc($result)) {
			if (empty($row['table']))
				continue;
			$badQuery[$row['table']] = '';
			if (strtoupper($row['type']) == 'ALL')
				$badQuery[$row['table']]  .=  ' Full Table Scan;';
			if (empty($row['key']))
				$badQuery[$row['table']] .= ' No Index Key Used;';
			if (!empty($row['Extra']) && substr_count($row['Extra'], 'Using filesort') > 0)
				$badQuery[$row['table']] .= ' Using FileSort;';
			if (!empty($row['Extra']) && substr_count($row['Extra'], 'Using temporary') > 0)
				$badQuery[$row['table']] .= ' Using Temporary Table;';
		}

		if ( empty($badQuery) )
			return true;

		foreach($badQuery as $table=>$data ){
			if(!empty($data)){
				$warning = ' Table:' . $table . ' Data:' . $data;
				if(!empty($GLOBALS['sugar_config']['check_query_log'])){
                    $this->logger->alert($sql);
                    $this->logger->alert('CHECK QUERY:' .$warning);
				}
				else{
                    $this->logger->warning('CHECK QUERY:' .$warning);
				}
			}
		}

		return false;
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

		//find all unique indexes and primary keys.
		$result = $this->query("DESCRIBE $tablename");

		$columns = array();

        while (($row=$this->fetchByAssoc($result, false)) !=null) {
			$name = strtolower($row['Field']);
			$columns[$name]['name']=$name;
			$matches = array();
			preg_match_all('/(\w+)(?:\(([0-9]+,?[0-9]*)\)|)( unsigned)?/i', $row['Type'], $matches);
			$columns[$name]['type']=strtolower($matches[1][0]);
            if (isset($matches[2][0]) && in_array(strtolower($matches[1][0]), array('varchar','char','varchar2','int','decimal','float'))) {
                $columns[$name]['len'] = strtolower($matches[2][0]);
                //MySQL8 ignores the length of int and it's always just 32 bits int
                if (strtolower($matches[1][0]) == 'int'
                    && $matches[2][0] === ''
                    && version_compare($this->version(), '8.0.17', '>=')) {
                    $columns[$name]['len'] = 11;
                }
            }
			if ( stristr($row['Extra'],'auto_increment') )
				$columns[$name]['auto_increment'] = '1';
			if ($row['Null'] == 'NO' && !stristr($row['Key'],'PRI'))
				$columns[$name]['required'] = 'true';
			if (!empty($row['Default']) )
				$columns[$name]['default'] = $row['Default'];
		}
		return $columns;
	}

	/**
	 * @see DBManager::getTablesArray()
	 */
	public function getTablesArray()
	{
        $this->logger->debug('Fetching table list');

		if ($this->getDatabase()) {
			$tables = array();
			$r = $this->query('SHOW TABLES');
			if (!empty($r)) {
				while ($a = $this->fetchByAssoc($r)) {
					$row = array_values($a);
					$tables[]=$row[0];
				}
				return $tables;
			}
		}

		return false; // no database available
	}

	/**
	 * @see DBManager::version()
	 */
	public function version()
	{
		return $this->getOne("SELECT version() version");
	}

	/**
	 * @see DBManager::tableExists()
	 */
	public function tableExists($tableName)
	{
        $this->logger->info("tableExists: $tableName");

        if ($this->getDatabase() && !empty($this->connectOptions['db_name'])) {
            $query = 'SELECT TABLE_NAME
FROM INFORMATION_SCHEMA.TABLES
WHERE TABLE_SCHEMA = ?
    AND TABLE_NAME = ?
    AND TABLE_TYPE = ?';

            $result = $this->getConnection()
                ->executeQuery($query, array(
                    $this->connectOptions['db_name'],
                    $tableName,
                    'BASE TABLE',
                ))->fetchOne();

            return !empty($result);
        }

		return false;
	}

	/**
	 * Get tables like expression
	 * @param $like string
	 * @return array
	 */
	public function tablesLike($like)
	{
		if ($this->getDatabase()) {
			$tables = array();
			$r = $this->query('SHOW TABLES LIKE '.$this->quoted($like));
			if (!empty($r)) {
				while ($a = $this->fetchByAssoc($r)) {
					$row = array_values($a);
					$tables[]=$row[0];
				}
				return $tables;
			}
		}
		return false;
	}

    /**
     * {@inheritdoc}
     */
    public function sqlLikeString($str, $wildcard = "%", $appendWildcard = true)
    {
        $str = parent::sqlLikeString($str, $wildcard, $appendWildcard);

        // We need to double any backslashes that may exist in $str, for a MySQL LIKE clause.
        // See here: http://dev.mysql.com/doc/refman/5.6/en/string-comparison-functions.html
        // Note: This replaces one backslash with two, not two with four ;)
        $str = str_replace("\\", "\\\\", $str);
        return $str;
    }

	/**
	 * @see DBManager::repairTableParams()
	 *
	 * For MySQL, we can write the ALTER TABLE statement all in one line, which speeds things
	 * up quite a bit. So here, we'll parse the returned SQL into a single ALTER TABLE command.
     * @param  string $tablename Table name
     * @param  array  $fielddefs Field definitions, in vardef format
     * @param  array  $indices   Index definitions, in vardef format
     * @param  bool   $execute   optional, true if we want the queries executed instead of returned
     * @param  string $engine    optional, MySQL engine
     * @return string
	 */
    public function repairTableParams($tablename, $fielddefs, array $indices, $execute = true, $engine = null)
	{
        foreach ($indices as $key => $ind) {
            if (strtolower($ind['type']) == 'primary') {
                $indices[$key]['name'] = 'primary';
            }
        }
		$sql = parent::repairTableParams($tablename,$fielddefs,$indices,false,$engine);

		if ( $sql == '' )
			return '';

		if ( stristr($sql,'create table') )
		{
			if ($execute) {
				$msg = "Error creating table: ".$tablename. ":";
				$this->query($sql,true,$msg);
			}
			return $sql;
		}

		// first, parse out all the comments
		$match = array();
		preg_match_all('!/\*.*?\*/!is', $sql, $match);
		$commentBlocks = $match[0];
		$sql = preg_replace('!/\*.*?\*/!is','', $sql);

		// now, we should only have alter table statements
		// let's replace the 'alter table name' part with a comma
		$sql = preg_replace("!alter table $tablename!is",', ', $sql);

		// re-add it at the beginning
		$sql = substr_replace($sql,'',strpos($sql,','),1);
		$sql = str_replace(";","",$sql);
		$sql = str_replace("\n","",$sql);
		$sql = "ALTER TABLE $tablename $sql";

		if ( $execute )
			$this->query($sql,'Error with MySQL repair table');

		// and re-add the comments at the beginning
		$sql = implode("\n",$commentBlocks) . "\n". $sql . "\n";

		return $sql;
	}

	/**
	 * @see DBManager::convert()
	 */
	public function convert($string, $type, array $additional_parameters = array())
	{
		$all_parameters = $additional_parameters;
		if(is_array($string)) {
			$all_parameters = array_merge($string, $all_parameters);
		} elseif (!is_null($string)) {
			array_unshift($all_parameters, $string);
		}
		$all_strings = implode(',', $all_parameters);

		switch (strtolower($type)) {
			case 'today':
				return "CURDATE()";
			case 'left':
				return "LEFT($all_strings)";
			case 'date_format':
				if(empty($additional_parameters)) {
					return "DATE_FORMAT($string,'%Y-%m-%d')";
				} else {
					$format = $additional_parameters[0];
					if($format[0] != "'") {
						$format = $this->quoted($format);
					}
					return "DATE_FORMAT($string,$format)";
				}
			case 'ifnull':
				if(empty($additional_parameters) && !strstr($all_strings, ",")) {
					$all_strings .= ",''";
				}
				return "IFNULL($all_strings)";
			case 'concat':
				return "CONCAT($all_strings)";
			case 'quarter':
					return "QUARTER($string)";
			case "length":
					return "LENGTH($string)";
			case 'month':
					return "MONTH($string)";
			case 'add_date':
					return "DATE_ADD($string, INTERVAL {$additional_parameters[0]} {$additional_parameters[1]})";
			case 'add_time':
					return "DATE_ADD($string, INTERVAL + CONCAT({$additional_parameters[0]}, ':', {$additional_parameters[1]}) HOUR_MINUTE)";
            case 'add_tz_offset' :
                $getUserUTCOffset = $GLOBALS['timedate']->getUserUTCOffset();
                $operation = $getUserUTCOffset < 0 ? '-' : '+';
                return $string . ' ' . $operation . ' INTERVAL ' . abs($getUserUTCOffset) . ' MINUTE';
            case 'avg':
                return "avg($string)";
            case 'substr':
                return "substr($string, " . implode(', ', $additional_parameters) . ')';
            case 'round':
                return "round($string, " . implode(', ', $additional_parameters) . ')';
		}

		return $string;
	}

    /**
     * {@inheritDoc}
     */
    public function fromConvert($string, $type)
    {
        return $string;
    }

	/**
	 * Returns the name of the engine to use or null if we are to use the default
	 *
	 * @param  object $bean SugarBean instance
	 * @return string
	 */
	protected function getEngine($bean)
	{
		global $dictionary;
		$engine = null;
		if (isset($dictionary[$bean->getObjectName()]['engine'])) {
			$engine = $dictionary[$bean->getObjectName()]['engine'];
		}
		return $engine;
	}

	/**
	 * Returns true if the engine given is enabled in the backend
	 *
	 * @param  string $engine
	 * @return bool
	 */
	protected function isEngineEnabled($engine)
	{
		if(!is_string($engine)) return false;

		$engine = strtoupper($engine);

		$r = $this->query("SHOW ENGINES");

		while ( $row = $this->fetchByAssoc($r) )
			if ( strtoupper($row['Engine']) == $engine )
				return ($row['Support']=='YES' || $row['Support']=='DEFAULT');

		return false;
	}

	/**
	 * @see DBManager::createTableSQL()
	 */
	public function createTableSQL(SugarBean $bean)
	{
		$tablename = $bean->getTableName();
		$fieldDefs = $bean->getFieldDefinitions();
		$indices   = $bean->getIndices();
		$engine    = $this->getEngine($bean);
		return $this->createTableSQLParams($tablename, $fieldDefs, $indices, $engine);
	}

	/**
	 * Generates sql for create table statement for a bean.
	 *
	 * @param  string $tablename
	 * @param  array  $fieldDefs
	 * @param  array  $indices
	 * @param  string $engine optional, MySQL engine to use
	 * @return string SQL Create Table statement
	*/
	public function createTableSQLParams($tablename, $fieldDefs, $indices, $engine = null)
	{
		if ( empty($engine) && isset($fieldDefs['engine']))
			$engine = $fieldDefs['engine'];
		if ( !$this->isEngineEnabled($engine) )
			$engine = '';

		$columns = $this->columnSQLRep($fieldDefs, false, $tablename);
		if (empty($columns))
			return false;

        $indices = $this->massageIndexDefs($fieldDefs, $indices);
		$keys = $this->keysSQL($indices);
		if (!empty($keys))
			$keys = ",$keys";

        $collation = $this->getOption('collation') ?? $this->getDefaultCollation();
        $sql = 'CREATE TABLE '.$tablename.' ('.$columns.' '.$keys.') CHARACTER SET utf8mb4 COLLATE '.$this->quoted($collation);
        if (!empty($engine)) {
            $sql .= ' ENGINE=' . $engine;
        }

		return $sql;
	}

    /**
     * Does this type represent text (i.e., non-varchar) value?
     * @param string $type
     */
    public function isTextType($type)
    {
        $type = $this->getColumnType(strtolower($type));
        return in_array($type, array('blob','text','longblob', 'longtext'));
    }

    /**
     * Does this type represent blob value?
     *
     * @param string $type
     * @return bool
     */
    public function isBlobType($type)
    {
        $type = strtolower($type);
        $ctype = $this->getColumnType($type);
        return $ctype === 'blob' || $ctype === 'longblob';
    }

	/**
	 * @see DBManager::oneColumnSQLRep()
	 */
    protected function oneColumnSQLRep($fieldDef, $ignoreRequired = false, $table = '', $return_as_array = false, $action = null)
    {
        // always return as array for post-processing
        $ref = parent::oneColumnSQLRep($fieldDef, $ignoreRequired, $table, true, $action);

        if ($ref['colType'] == 'int' && !empty($fieldDef['len'])) {
            $ref['colType'] .= "(".$fieldDef['len'].")";
        }

        // bug 22338 - don't set a default value on text or blob fields
        if (isset($ref['default']) && in_array($ref['colBaseType'], array('text', 'blob', 'longtext', 'longblob'))) {
            $ref['default'] = '';
        }

        if ($return_as_array) {
            return $ref;
        } else {
            return "{$ref['name']} {$ref['colType']} {$ref['default']} {$ref['required']} {$ref['auto_increment']}";
        }
    }

    /**
     * {@inheritDoc}
     */
    protected function changeColumnSQL($tablename, $fieldDefs, $action, $ignoreRequired = false)
	{
        $columns = array();
        if ($this->isFieldArray($fieldDefs)) {
            foreach ($fieldDefs as $def) {
                if ($action == 'drop') {
                    $columns[] = $def['name'];
                } else {
                    $columns[] = $this->oneColumnSQLRep($def, $ignoreRequired);
                }
            }
        } else {
            if ($action == 'drop') {
                $columns[] = $fieldDefs['name'];
            } else {
                $columns[] = $this->oneColumnSQLRep($fieldDefs, null, $tablename, null, $action);
            }
        }

        return "ALTER TABLE $tablename $action COLUMN ".implode(",$action column ", $columns);
	}

	/**
	 * Generates SQL for key specification inside CREATE TABLE statement
	 *
	 * The passes array is an array of field definitions or a field definition
	 * itself. The keys generated will be either primary, foreign, unique, index
	 * or none at all depending on the setting of the "key" parameter of a field definition
	 *
	 * @param  array  $indices
	 * @param  bool   $alter_table
	 * @param  string $alter_action
	 * @return string SQL Statement
	 */
	protected function keysSQL($indices, $alter_table = false, $alter_action = '')
	{
	// check if the passed value is an array of fields.
	// if not, convert it into an array
	if (!$this->isFieldArray($indices))
		$indices = array($indices);

	$columns = array();
	foreach ($indices as $index) {
		if(!empty($index['db']) && $index['db'] != $this->dbType)
			continue;
		if (isset($index['source']) && $index['source'] != 'db')
			continue;

		$type = $index['type'];
		$name = $index['name'];

		if (is_array($index['fields']))
			$fields = implode(", ", $index['fields']);
		else
			$fields = $index['fields'];

		switch ($type) {
		case 'unique':
			$columns[] = " UNIQUE $name ($fields)";
			break;
		case 'primary':
			$columns[] = " PRIMARY KEY ($fields)";
			break;
		case 'index':
		case 'foreign':
		case 'clustered':
		case 'alternate_key':
			/**
				* @todo here it is assumed that the primary key of the foreign
				* table will always be named 'id'. It must be noted though
				* that this can easily be fixed by referring to db dictionary
				* to find the correct primary field name
				*/
			if ( $alter_table )
				$columns[] = " INDEX $name ($fields)";
			else
				$columns[] = " KEY $name ($fields)";
			break;
		}
	}
	$columns = implode(", $alter_action ", $columns);
	if(!empty($alter_action)){
		$columns = $alter_action . ' '. $columns;
	}
	return $columns;
	}

	/**
	 * @see DBManager::setAutoIncrement()
	 */
    protected function setAutoIncrement($table, $field_name, array $platformOptions = [], $action = null)
    {
        $auto_increment_string = "auto_increment";

        /**
         * Checking to make sure that the UNIQUE constraint is present so we can successfully create the column.
         * Also make sure the action is 'add' because of the double execution of the query on L579 of
         * DynamicField.php. If the query is made twice with the unique constraint, a duplicate and redundant
         * constraint is created.
         */
        if (isset($platformOptions['unique']) && $platformOptions['unique'] == true && $action != 'modify') {
            // The unique constraint is added because it is required when creating an auto_increment field
            $auto_increment_string .= ' unique';
        }

        return $auto_increment_string;
    }

	/**
	 * Sets the next auto-increment value of a column to a specific value.
	 *
	 * @param  string $table tablename
	 * @param  string $field_name
	 */
	public function setAutoIncrementStart($table, $field_name, $start_value)
	{
		$start_value = (int)$start_value;
		return $this->query( "ALTER TABLE $table AUTO_INCREMENT = $start_value;");
	}

	/**
	 * Returns the next value for an auto increment
	 *
	 * @param  string $table tablename
	 * @param  string $field_name
	 * @return string
	 */
	public function getAutoIncrement($table, $field_name)
	{
		$result = $this->query("SHOW TABLE STATUS LIKE '$table'");
		$row = $this->fetchByAssoc($result);
		if (!empty($row['Auto_increment']))
			return $row['Auto_increment'];

		return "";
	}

    /** {@inheritDoc} */
    protected function get_index_data($table_name = null, $index_name = null)
    {
        $filterByTable = $table_name !== null;
        $filterByIndex = $index_name !== null;

        $columns = array();
        if (!$filterByTable) {
            $columns[] = 'table_name as table_name';
        }

        if (!$filterByIndex) {
            $columns[] = 'index_name as index_name';
        }

        $columns[] = 'non_unique as non_unique';
        $columns[] = 'column_name as column_name';

        $query = 'SELECT ' . implode(', ', $columns) . '
FROM information_schema.statistics';

        $conn = $this->getConnection();
        $schema = $conn->getDatabase();

        $where = array('table_schema = ?');
        $params = array($schema);

        if ($filterByTable) {
            $where[] = 'table_name = ?';
            $params[] = $table_name;
        }

        if ($filterByIndex) {
            $where[] = 'index_name = ?';
            $params[] = strtoupper($this->getValidDBName($index_name, true, 'index'));
        }

        $query .= ' WHERE ' . implode(' AND ', $where);

        $order = array();
        if (!$filterByTable) {
            $order[] = 'table_name';
        }

        if (!$filterByIndex) {
            $order[] = 'index_name';
        }

        $order[] = 'seq_in_index';
        $query .= ' ORDER BY ' . implode(', ', $order);

        $stmt = $conn->executeQuery($query, $params);

        $data = array();
        while (($row = $stmt->fetchAssociative())) {
            if (!$filterByTable) {
                $table_name = $row['table_name'];
            }

            if (!$filterByIndex) {
                $index_name = $row['index_name'];
            }

            if ($index_name == 'PRIMARY') {
                $type = 'primary';
            } elseif ($row['non_unique'] == '0') {
                $type = 'unique';
            } else {
                $type = 'index';
            }

            $data[$table_name][$index_name]['name'] = $index_name;
            $data[$table_name][$index_name]['type'] = $type;
            $data[$table_name][$index_name]['fields'][] = $row['column_name'];
        }

        return $data;
    }

	/**
	 * @see DBManager::add_drop_constraint()
     * @inheritDoc
	 */
    public function add_drop_constraint(string $table, array $definition, bool $drop = false): string
    {
		$type         = $definition['type'];
        $fieldsListSQL = implode(',', $definition['fields']);
		$name         = $definition['name'];
		$sql          = '';

		switch ($type){
		// generic indices
		case 'index':
		case 'alternate_key':
		case 'clustered':
			if ($drop)
				$sql = "ALTER TABLE {$table} DROP INDEX {$name} ";
			else
                $sql = "ALTER TABLE {$table} ADD INDEX {$name} ({$fieldsListSQL})";
			break;
		// constraints as indices
		case 'unique':
			if ($drop)
				$sql = "ALTER TABLE {$table} DROP INDEX $name";
			else
                $sql = "ALTER TABLE {$table} ADD CONSTRAINT UNIQUE {$name} ({$fieldsListSQL})";
			break;
		case 'primary':
			if ($drop)
				$sql = "ALTER TABLE {$table} DROP PRIMARY KEY";
			else
                $sql = "ALTER TABLE {$table} ADD CONSTRAINT PRIMARY KEY ({$fieldsListSQL})";
			break;
		case 'foreign':
			if ($drop)
                $sql = "ALTER TABLE {$table} DROP FOREIGN KEY ({$fieldsListSQL})";
			else
                $sql = "ALTER TABLE {$table} ADD CONSTRAINT FOREIGN KEY {$name} ({$fieldsListSQL}) REFERENCES {$definition['foreignTable']}({$definition['foreignField']})";
			break;
		}
		return $sql;
	}

	/**
	 * Runs a query and returns a single row
	 *
	 * @param  string   $sql        SQL Statement to execute
	 * @param  bool     $dieOnError True if we want to call die if the query returns errors
	 * @param  string   $msg        Message to log if error occurs
     * @param  bool     $encode     encode the result
	 * @return array    single row from the query
	 */
    public function fetchOne($sql, $dieOnError = false, $msg = '', $encode = true)
	{
		if(stripos($sql, ' LIMIT ') === false) {
			// little optimization to just fetch one row
			$sql .= " LIMIT 0,1";
		}
        return parent::fetchOne($sql, $dieOnError, $msg, $encode);
	}

	/**
     * {@inheritDoc}
     */
    public function massageFieldDef(array &$fieldDef) : void
    {
        parent::massageFieldDef($fieldDef);

		if ( isset($fieldDef['default']) &&
			($fieldDef['dbType'] == 'text'
				|| $fieldDef['dbType'] == 'blob'
				|| $fieldDef['dbType'] == 'longtext'
				|| $fieldDef['dbType'] == 'longblob' ))
			unset($fieldDef['default']);
		if ($fieldDef['dbType'] == 'uint')
			$fieldDef['len'] = '10';
		if ($fieldDef['dbType'] == 'ulong')
			$fieldDef['len'] = '20';
		if ($fieldDef['dbType'] == 'bool')
			$fieldDef['type'] = 'tinyint';
		if ($fieldDef['dbType'] == 'bool' && empty($fieldDef['default']) )
			$fieldDef['default'] = '0';
		if (($fieldDef['dbType'] == 'varchar' || $fieldDef['dbType'] == 'enum') && empty($fieldDef['len']) )
			$fieldDef['len'] = '255';
		if ($fieldDef['dbType'] == 'uint')
			$fieldDef['len'] = '10';
		if ($fieldDef['dbType'] == 'int' && empty($fieldDef['len']) )
			$fieldDef['len'] = '11';

		if($fieldDef['dbType'] == 'decimal') {
			if(isset($fieldDef['len'])) {
				if(strstr($fieldDef['len'], ",") === false) {
					$fieldDef['len'] .= ",0";
				}
			} else {
				$fieldDef['len']  = '10,0';
			}
		}
	}

	/**
	 * Generates SQL for dropping a table.
	 *
	 * @param  string $name table name
	 * @return string SQL statement
	 */
	public function dropTableNameSQL($name)
	{
		return "DROP TABLE IF EXISTS ".$name;
	}

	public function dropIndexes($tablename, $indexes, $execute = true)
	{
		$sql = array();
		foreach ($indexes as $index) {
			$name =$index['name'];
			if($execute) {
			unset(self::$index_descriptions[$tablename][$name]);
			}
			if ($index['type'] == 'primary') {
				$sql[] = 'DROP PRIMARY KEY';
			} else {
				$sql[] = "DROP INDEX $name";
			}
		}
		if (!empty($sql)) {
			$sql = "ALTER TABLE $tablename ".join(",", $sql);
			if($execute)
				$this->query($sql);
		} else {
			$sql = '';
		}
		return $sql;
	}

	/**
     * {@inheritdoc}
	 */
	public function getDefaultCollation()
	{
        return 'utf8mb4_general_ci';
	}

	/**
	 * List of available collation settings
	 * @return array
	 */
	public function getCollationList()
	{
        $q = "SHOW COLLATION LIKE 'utf8mb4_%'";
		$r = $this->query($q);
		$res = array();
		while($a = $this->fetchByAssoc($r)) {
			$res[] = $a['Collation'];
		}
		return $res;
	}

	/**
	 * (non-PHPdoc)
	 * @see DBManager::renameColumnSQL()
	 */
	public function renameColumnSQL($tablename, $column, $newname)
	{
		$field = $this->describeField($column, $tablename);
		$field['name'] = $newname;
		return "ALTER TABLE $tablename CHANGE COLUMN $column ".$this->oneColumnSQLRep($field);
	}

    /**
     * {@inheritDoc}
     */
    public function emptyValue($type, $forPrepared = false)
   	{
   		$ctype = $this->getColumnType($type);
   		if($ctype == "datetime") {
   			return $forPrepared?"1970-01-01 00:00:00":$this->convert($this->quoted("1970-01-01 00:00:00"), "datetime");
   		}
   		if($ctype == "date") {
   			return $forPrepared?"1970-01-01":$this->convert($this->quoted("1970-01-01"), "date");
   		}
   		if($ctype == "time") {
   			return $forPrepared?"00:00:00":$this->convert($this->quoted("00:00:00"), "time");
   		}
   		return parent::emptyValue($type, $forPrepared);
   	}

	/**
	 * Quote MySQL search term
	 * @param unknown_type $term
	 */
	protected function quoteTerm($term)
	{
		if(strpos($term, ' ') !== false) {
			return '"'.$term.'"';
		}
		return $term;
	}

	/**
	 * Get list of all defined charsets
	 * @return array
	 */
	protected function getCharsetInfo()
	{
		$charsets = array();
		$res = $this->query("show variables like 'character\\_set\\_%'");
		while($row = $this->fetchByAssoc($res)) {
			$charsets[$row['Variable_name']] = $row['Value'];
		}
		return $charsets;
	}

	public function validateQuery($query)
	{
		$res = $this->query("EXPLAIN $query");
		return !empty($res);
	}

	protected function makeTempTableCopy($table)
	{
        $this->logger->debug("creating temp table for [$table]...");
		$result = $this->query("SHOW CREATE TABLE {$table}");
		if(empty($result)) {
			return false;
		}
		$row = $this->fetchByAssoc($result);
		if(empty($row) || empty($row['Create Table'])) {
		    return false;
		}
		$create = $row['Create Table'];
		// rewrite DDL with _temp name
		$tempTableQuery = str_replace("CREATE TABLE `{$table}`", "CREATE TABLE `{$table}__uw_temp`", $create);
		$r2 = $this->query($tempTableQuery);
		if(empty($r2)) {
			return false;
		}

		// get sample data into the temp table to test for data/constraint conflicts
        $this->logger->debug('inserting temp dataset...');
		$q3 = "INSERT INTO `{$table}__uw_temp` SELECT * FROM `{$table}` LIMIT 10";
		$this->query($q3, false, "Preflight Failed for: {$q3}");
		return true;
	}

	/**
	 * Tests an ALTER TABLE query
	 * @param string table The table name to get DDL
	 * @param string query The query to test.
	 * @return string Non-empty if error found
	 */
	protected function verifyAlterTable($table, $query)
	{
        $this->logger->debug("verifying ALTER TABLE");
		// Skipping ALTER TABLE [table] DROP PRIMARY KEY because primary keys are not being copied
		// over to the temp tables
		if(strpos(strtoupper($query), 'DROP PRIMARY KEY') !== false) {
            $this->logger->debug("Skipping DROP PRIMARY KEY");
			return '';
		}
		if(!$this->makeTempTableCopy($table)) {
			return 'Could not create temp table copy';
		}

		// test the query on the test table
        $this->logger->debug('testing query: ['.$query.']');
		$tempTableTestQuery = str_replace("ALTER TABLE `{$table}`", "ALTER TABLE `{$table}__uw_temp`", $query);
		if (strpos($tempTableTestQuery, 'idx') === false) {
			if(strpos($tempTableTestQuery, '__uw_temp') === false) {
				return 'Could not use a temp table to test query!';
			}

            $this->logger->debug('testing query on temp table: ['.$tempTableTestQuery.']');
			$this->query($tempTableTestQuery, false, "Preflight Failed for: {$query}");
		} else {
			// test insertion of an index on a table
			$tempTableTestQuery_idx = str_replace("ADD INDEX `idx_", "ADD INDEX `temp_idx_", $tempTableTestQuery);
            $this->logger->debug('testing query on temp table: ['.$tempTableTestQuery_idx.']');
			$this->query($tempTableTestQuery_idx, false, "Preflight Failed for: {$query}");
		}
		$mysqlError = $this->getL();
		if(!empty($mysqlError)) {
			return $mysqlError;
		}
		$this->dropTableName("{$table}__uw_temp");

		return '';
	}

	protected function verifyGenericReplaceQuery($querytype, $table, $query)
	{
        $this->logger->debug("verifying $querytype statement");

		if(!$this->makeTempTableCopy($table)) {
			return 'Could not create temp table copy';
		}
		// test the query on the test table
        $this->logger->debug('testing query: ['.$query.']');
		$tempTableTestQuery = str_replace("$querytype `{$table}`", "$querytype `{$table}__uw_temp`", $query);
		if(strpos($tempTableTestQuery, '__uw_temp') === false) {
			return 'Could not use a temp table to test query!';
		}

		$this->query($tempTableTestQuery, false, "Preflight Failed for: {$query}");
		$error = $this->lastError(); // empty on no-errors
		$this->dropTableName("{$table}__uw_temp"); // just in case
		return $error;
	}

	/**
	 * Tests a DROP TABLE query
	 * @param string table The table name to get DDL
	 * @param string query The query to test.
	 * @return string Non-empty if error found
	 */
	public function verifyDropTable($table, $query)
	{
		return $this->verifyGenericReplaceQuery("DROP TABLE", $table, $query);
	}

	/**
	 * Tests an INSERT INTO query
	 * @param string table The table name to get DDL
	 * @param string query The query to test.
	 * @return string Non-empty if error found
	 */
	public function verifyInsertInto($table, $query)
	{
		return $this->verifyGenericReplaceQuery("INSERT INTO", $table, $query);
	}

	/**
	 * Tests an UPDATE query
	 * @param string table The table name to get DDL
	 * @param string query The query to test.
	 * @return string Non-empty if error found
	 */
	public function verifyUpdate($table, $query)
	{
		return $this->verifyGenericReplaceQuery("UPDATE", $table, $query);
	}

	/**
	 * Tests an DELETE FROM query
	 * @param string table The table name to get DDL
	 * @param string query The query to test.
	 * @return string Non-empty if error found
	 */
	public function verifyDeleteFrom($table, $query)
	{
		return $this->verifyGenericReplaceQuery("DELETE FROM", $table, $query);
	}

	/**
	 * Check if certain database exists
	 * @param string $dbname
	 */
	public function dbExists($dbname)
	{
		$db = $this->getOne("SELECT SCHEMA_NAME FROM INFORMATION_SCHEMA.SCHEMATA WHERE SCHEMA_NAME = ".$this->quoted($dbname));
		return !empty($db);
	}

	/**
	 * Check if certain DB user exists
	 * @param string $username
	 */
	public function userExists($username)
	{
		$db = $this->getOne("SELECT DATABASE()");
		if(!$this->selectDb("mysql")) {
			return false;
		}
		$user = $this->getOne("select count(*) from user where user = ".$this->quoted($username));
		if(!$this->selectDb($db)) {
			$this->checkError("Cannot select database $db", true);
		}
		return !empty($user);
	}

	/**
	 * Create DB user
	 * @param string $database_name
	 * @param string $host_name
	 * @param string $user
	 * @param string $password
	 */
    public function createDbUser($database_name, $host_name, $user, $password)
    {
        $platform = $this->getConnection()->getDatabasePlatform();

        $user_string_quoted = $platform->quoteSingleIdentifier($user).'@'.$platform->quoteSingleIdentifier($host_name);
        $database_name_quoted =  $platform->quoteSingleIdentifier($database_name);
        $password_quoted = $platform->quoteStringLiteral($password);

        $grant_query = <<<EOQ
            GRANT SELECT, INSERT, UPDATE, DELETE, CREATE, ALTER, DROP, INDEX
            ON $database_name_quoted.*
            TO $user_string_quoted
            IDENTIFIED BY $password_quoted
EOQ;
        $this->query($grant_query, true);

        $set_password_query = <<<EOQ
            SET PASSWORD FOR
            $user_string_quoted = $password_quoted
EOQ;

        $this->query($set_password_query, true);

        if ($host_name !== 'localhost') {
            $this->createDbUser($database_name, "localhost", $user, $password);
        }
    }

	/**
	 * Create a database
	 * @param string $dbname
	 */
	public function createDatabase($dbname)
	{
        $collation = $this->getOption('collation') ?? $this->getDefaultCollation();
        $this->query('CREATE DATABASE `'.$dbname.'` CHARACTER SET utf8mb4 COLLATE '.$this->quoted($collation), true);
	}

	/**
	 * Drop a database
	 * @param string $dbname
	 */
	public function dropDatabase($dbname)
	{
		return $this->query("DROP DATABASE IF EXISTS `$dbname`", true);
	}

    public function optimizeTable(string $table): void
    {
        if (!SugarConfig::getInstance()->get('disable_optimize_table', false)) {
            $sql = "OPTIMIZE LOCAL TABLE {$table}";
            $this->query($sql, false, "OPTIMIZE problem");
        }
    }

	/**
	 * Check DB version
	 * @see DBManager::canInstall()
	 */
	public function canInstall()
	{
		$db_version = $this->version();
		if(empty($db_version)) {
			return array('ERR_DB_VERSION_FAILURE');
		}
		if(version_compare($db_version, '4.1.2') < 0) {
			return array('ERR_DB_MYSQL_VERSION', $db_version);
		}
		return true;
	}

	public function installConfig()
	{
		return array(
			'LBL_DBCONFIG_MSG3' =>  array(
				"setup_db_database_name" => array("label" => 'LBL_DBCONF_DB_NAME', "required" => true),
			),
			'LBL_DBCONFIG_MSG2' =>  array(
				"setup_db_host_name" => array("label" => 'LBL_DBCONF_HOST_NAME', "required" => true),
			),
			'LBL_DBCONF_TITLE_USER_INFO' => array(),
			'LBL_DBCONFIG_B_MSG1' => array(
				"setup_db_admin_user_name" => array("label" => 'LBL_DBCONF_DB_ADMIN_USER', "required" => true),
				"setup_db_admin_password" => array("label" => 'LBL_DBCONF_DB_ADMIN_PASSWORD', "type" => "password"),
			)
		);
	}

	/**
	 * Disable keys on the table
	 * @abstract
	 * @param string $tableName
	 */
	public function disableKeys($tableName)
	{
	    return $this->query('ALTER TABLE '.$tableName.' DISABLE KEYS');
	}

	/**
	 * Re-enable keys on the table
	 * @abstract
	 * @param string $tableName
	 */
	public function enableKeys($tableName)
	{
	    return $this->query('ALTER TABLE '.$tableName.' ENABLE KEYS');
	}

    /**
     * Updates all tables to match the specified collation
     * @abstract
     * @param string $collation Collation to set
     */
    public function setCollation($collation)
    {
        $charset = explode("_", $collation);
        $charset = $charset[0];

        $this->query('ALTER DATABASE ' . $this->connectOptions['db_name']
            . ' DEFAULT COLLATE ' . $this->quoted($collation));
        $res = $this->query("SHOW FULL TABLES WHERE Table_type = 'BASE TABLE'");

        while (($row = $this->fetchRow($res)) !== false) {
            $table = array_values($row)[0];
            $this->query('ALTER TABLE `' . $table . '` COLLATE ' . $this->quoted($collation));
            $this->query('ALTER TABLE `' . $table
                . '` CONVERT TO CHARACTER SET ' . $this->quoted($charset)
                . ' COLLATE ' . $this->quoted($collation));
        }
    }

    /**
     * Returns a DB specific FROM clause which can be used to select against functions.
     * Note that depending on the database that this may also be an empty string.
     * @return string
     */
    public function getFromDummyTable()
    {
        return '';
    }

    /**
     * Returns a DB specific piece of SQL which will generate GUID (UUID)
     * This string can be used in dynamic SQL to do multiple inserts with a single query.
     * I.e. generate a unique Sugar id in a sub select of an insert statement.
     * @return string
     */
    public function getGuidSQL()
    {
      	return 'UUID()';
    }

    /**
     * {@inheritdoc}
     */
    public function getRandInt(int $min, int $max)
    {
        return sprintf('FLOOR(%d + RAND() * %d)', $min, $max - $min + 1);
    }

	/**
	* Check if the value is empty value for this type
	* @param mixed $val Value
	* @param string $type Type (one of vardef types)
	* @return bool true if the value if empty
	*/
	protected function _emptyValue($val, $type)
	{
		if($type == 'date' && ($val == $this->quoted('0000-00-00') || $val == '0000-00-00')) {
			return true;
		} elseif($type == 'datetime' && ($val == $this->quoted('0000-00-00 00:00:00') || $val == '0000-00-00 00:00:00')) {
			return true;
		}

		return parent::_emptyValue($val, $type);
	}
}
