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

use Sugarcrm\Sugarcrm\Util\Files\FileLoader;

/**
 * A mechanism to dynamically define new Relationships between modules
 * This differs from the classes in modules/Relationships and data/Link in that they contain the implementation for pre-defined Relationships
 * Those classes use the metadata in the dictionary and layout definitions to implement the relationships; this class allows you to manage and manipulate that metadata
 * @property bool $relationship_only
 * @property string $rhs_module
 * @property string $lhs_module
 * @property string $relationship_name
 * @property string $is_custom
 * @property bool $from_studio
 * @property string $relationship_type
 */
class AbstractRelationship
{

    protected $definition ; // enough information to rebuild this relationship


    /*
     * These are the elements that fully define any Relationship
     * Any subclass of AbstractRelationship uses an array with a subset of the following keys as metadata to describe the Relationship it will implement
     * The base set of keys are those used in the Relationships table
     * Defined as Public as MBRelationship uses these to read the _POST data
     */
    public static $definitionKeys = array (
        // atttributes of this relationship - here in the definition so they are preserved across saves and loads
        'for_activities',
    	'is_custom',
        'from_studio',
        'readonly' , // a readonly relationship cannot be Built by subclasses of AbstractRelationships
        'deleted' , // a deleted relationship will not be built, and if it had been built previously the built relationship will be removed
        'relationship_only' , // means that we won't build any UI components for this relationship - required while the Subpanel code is restricted to one subpanel only from any module, and probably useful afterwards also for developers to build relationships for new code - it's a feature!
        // keys not found in Relationships table
        'label' , // optional
        'rhs_label', // optional
        'lhs_label', // optional
        'lhs_subpanel' , // subpanel FROM the lhs_module to display on the rhs_module detail view
        'rhs_subpanel' , // subpanel FROM the rhs_module to display on the lhs_module detail view
        // keys from Relationships table
        'relationship_name' ,
        'lhs_module' ,
        'lhs_table' ,
        'lhs_key' ,
        'lhs_vname' ,
        'rhs_module' ,
        'rhs_table' ,
        'rhs_key' ,
        'rhs_vname' ,
        'join_table' ,
        'join_key_lhs' ,
        'join_key_rhs' ,
        'relationship_type' ,
        'relationship_role_column' ,
        'relationship_role_column_value' ,
        'relationship_role_columns' ,
        'reverse' ) ;

    /*
     * Relationship_role_column and relationship_role_column_value:
     * These two values define an additional condition on the relationship. If present, the value in relationship_role_column in the relationship table must equal relationship_role_column_value
     * Any update to the relationship made using a link field tied to the relationship (as is proper) will automatically (in Link.php) add in the relationship_role_column_value
     * The relationship table must of course contain a column with the name given in relationship_role_column
     *
     * relationship_role_column and relationship_role_column_value are here implemented in a slightly less optimized form than in the standard OOB application
     * In the OOB application, multiple relationships can, and do, share the same relationship table. Therefore, each variant of the relationship does not require its own table
     * Here for simplicity in implementation each relationship has its own unique table. Therefore, the relationship_role_column in these tables will only contain the value relationship_role_column_value
     * In the OOB relationships, the relationship_role_column will contain any of the relationship_role_column_values from the relationships that share the table
     * TODO: implement this optimization
     *
     */

    /*
     * Constructor
     * @param string $definition    Definition array for this relationship. Parameters are given in self::keys
     */
    function __construct ($definition)
    {
        // set any undefined attributes to the default value
        foreach ( array ( 'readonly' , 'deleted' , 'relationship_only', 'for_activities', 'is_custom', 'from_studio' ) as $key )
            if (! isset ( $definition [ $key ] ))
                $definition [ $key ] = false ;

        foreach ( self::$definitionKeys as $key )
        {
            $this->$key = isset ( $definition [ $key ] ) ? $definition [ $key ] : '' ;
        }
        $this->definition = $definition ;
    }

    /*
     * Get the unique name of this relationship
     * @return string   The unique name (actually just that given to the constructor)
     */
    public function getName ()
    {
        return isset ( $this->definition [ 'relationship_name' ] ) ? $this->definition [ 'relationship_name' ] : null ;
    }

    public function setName ($relationshipName)
    {
        $this->relationship_name = $this->definition [ 'relationship_name' ] = $relationshipName ;
    }

    /*
     * Is this relationship readonly or not?
     * @return boolean True if cannot be changed; false otherwise
     */
    public function readonly ()
    {
        return $this->definition [ 'readonly' ] ;
    }

    public function setReadonly ($set = true)
    {
        $this->readonly = $this->definition [ 'readonly' ] = $set ;
    }

    public function setFromStudio ()
    {
        $this->from_studio = $this->definition [ 'from_studio' ] = true ;
    }

    /*
     * Has this relationship been deleted? A deleted relationship does not get built, and is no longer visible in the list of relationships
     * @return boolean True if it has been deleted; false otherwise
     */
    public function deleted ()
    {
        return $this->definition [ 'deleted' ] ;
    }

    public function delete ()
    {
        $this->deleted = $this->definition [ 'deleted' ] = true ;
    }

    public function getFromStudio()
    {
        return $this->from_studio;
    }

    public function getLhsModule()
    {
        return $this->lhs_module;
    }

    public function getRhsModule()
    {
        return $this->rhs_module;
    }

    public function getType ()
    {
        return $this->relationship_type ;
    }

    public function relationship_only ()
    {
        return $this->definition [ 'relationship_only' ] ;
    }

    public function setRelationship_only ()
    {
        $this->relationship_only = $this->definition [ 'relationship_only' ] = true ;
    }

    /*
     * Get a complete description of this relationship, sufficient to pass back to a constructor to reestablish the relationship
     * Each subclass must provide enough information in $this->definition for its constructor
     * Used by UndeployedRelationships to save out a set of AbstractRelationship descriptions
     * The format is the same as the schema for the Relationships table for convenience, and is defined in self::keys. That is,
     * `relationship_name`, `lhs_module`, `lhs_table`, `lhs_key`, `rhs_module`, `rhs_table`,`rhs_key`, `join_table`, `join_key_lhs`, `join_key_rhs`, `relationship_type`, `relationship_role_column`, `relationship_role_column_value`, `reverse`,
     * @return array    Set of parameters to pass to an AbstractRelationship constructor - must contain at least ['relationship_type']='OneToOne' or 'OneToMany' or 'ManyToMany'
     */
    function getDefinition ()
    {
        return $this->definition ;
    }

    /*
     * BUILD methods called during the build
     */

    /*
     * Define the labels to be added to the module for the new relationships
     * @return array    An array of system value => display value
     */
    function buildLabels ($update=false)
    {
        $labelDefinitions = array ( ) ;
        if (!$this->relationship_only)
        {
        	if(!$this->is_custom && $update && file_exists("modules/{$this->rhs_module}/metadata/subpaneldefs.php")){
        		include FileLoader::validateFilePath("modules/{$this->rhs_module}/metadata/subpaneldefs.php");
        		if(isset($layout_defs[$this->rhs_module]['subpanel_setup'][strtolower($this->lhs_module)]['title_key'])){
        			$rightSysLabel = $layout_defs[$this->rhs_module]['subpanel_setup'][strtolower($this->lhs_module)]['title_key'];
        		}
        		$layout_defs = array();
        	}
        	if(!$this->is_custom && $update && file_exists("modules/{$this->lhs_module}/metadata/subpaneldefs.php")){
        		include FileLoader::validateFilePath("modules/{$this->lhs_module}/metadata/subpaneldefs.php");
        		if(isset($layout_defs[$this->lhs_module]['subpanel_setup'][strtolower($this->rhs_module)]['title_key'])){
        			$leftSysLabel = $layout_defs[$this->lhs_module]['subpanel_setup'][strtolower($this->rhs_module)]['title_key'];
        		}
        	}

            $lhs_label = $this->getLHSLabel($update);
            $lhs_label_id = $this->getLHSLabelId($update);
            $rhs_label = $this->getRHSLabel($update);

            if (isset($rightSysLabel)) {
                $from_left_title_system_label = $rightSysLabel;
            } else {
                $from_left_title_system_label = 'LBL_' .
                    strtoupper($this->relationship_name . '_FROM_' . $this->getLeftModuleSystemLabel()) . '_TITLE';
            }

            if (isset($leftSysLabel)) {
                $from_left_title_id_system_label = $leftSysLabel;
                $from_right_title_system_label = $leftSysLabel;
            } else {
                $from_left_title_id_system_label = 'LBL_' .
                    strtoupper($this->relationship_name . '_FROM_' . $this->getRightModuleSystemLabel()) . '_TITLE_ID';
                $from_right_title_system_label = 'LBL_' .
                    strtoupper($this->relationship_name . '_FROM_' . $this->getRightModuleSystemLabel()) . '_TITLE';
            }

            $labelDefinitions [] = array(
                'module' => $this->lhs_module,
                'system_label' => $from_right_title_system_label,
                'display_label' => $rhs_label,
            );

            // if all labels are equal we should get the right module name
            // (it's one-to-many scenario for the same module)
            if ($from_right_title_system_label != $from_left_title_system_label) {
                $labelDefinitions [] = array(
                    'module' => $this->rhs_module,
                    'system_label' => $from_left_title_system_label,
                    'display_label' => $lhs_label,
                );
            } elseif ($from_right_title_system_label != $from_left_title_id_system_label) {
                $labelDefinitions[] = array(
                    'module' => $this->rhs_module ,
                    'system_label' => $from_left_title_id_system_label,
                    'display_label' => $lhs_label_id,
                );
            }

            // ltr and rtl directions are the same for equal modules
            if ($this->rhs_module != $this->lhs_module) {
                $labelDefinitions [] = array(
                    'module' => $this->lhs_module,
                    'system_label' => $from_left_title_system_label,
                    'display_label' => $rhs_label,
                );

                $labelDefinitions[] = array(
                    'module' => $this->rhs_module,
                    'system_label' => $from_right_title_system_label,
                    'display_label' => $lhs_label,
                );
            }

        }
        return $labelDefinitions ;
    }

    protected function getRHSLabel($update)
    {
        if ($update && !empty($_REQUEST['rhs_label'])) {
            $rhs_label = $_REQUEST['rhs_label'];
        } elseif (empty($this->rhs_label)) {
            $rhs_label = translate($this->rhs_module);
        } else {
            $rhs_label = $this->rhs_label;
        }
        return $rhs_label;
    }

    protected function getLHSLabel($update)
    {
        if ($update && !empty($_REQUEST['lhs_label'])) {
            $lhs_label = $_REQUEST['lhs_label'];
        } elseif (empty($this->lhs_label)) {
            $lhs_label = translate($this->lhs_module);
        } else {
            $lhs_label = $this->lhs_label;
        }
        return $lhs_label;
    }

    protected function getLHSLabelId($update)
    {
        if ($update && !empty($_REQUEST['lhs_label'])) {
            $lhs_label_id = $_REQUEST['lhs_label'] . ' ID';
        } elseif (empty($this->lhs_label)) {
            $lhs_label_id = translate($this->lhs_module . ' ID');
        } else {
            $lhs_label_id = $this->lhs_label . ' ID';
        }
        return $lhs_label_id;
    }

	function getLeftModuleSystemLabel()
    {
		if($this->lhs_module == $this->rhs_module){
			return $this->lhs_module.'_L';
		}
		return $this->lhs_module;
    }

    function getRightModuleSystemLabel()
    {
		if($this->lhs_module == $this->rhs_module){
			return $this->rhs_module.'_R';
		}
		return $this->rhs_module;
    }

    /**
     * Returns a key=>value set of labels used in this relationship for use when desplaying the relationship in MB
     * @return array labels used in this relationship
     */
    public function getLabels() {
        $labels = array();
        $labelDefinitions = $this->buildLabels();
        foreach($labelDefinitions as $def){
            $labels[$def['module']][$def['system_label']] = $def['display_label'];
        }

        return $labels;
    }

    /*
     * GET methods called by the BUILD methods of the subclasses to construct the relationship metadata
     */

    /*
     * Build a description of a Subpanel that can be turned into an actual Subpanel by saveSubpanelDefinition in the implementation
     * Note that we assume that the subpanel name we are given is valid - that is, a subpanel definition by that name exists, and that a module won't have attempt to define multiple subpanels with the same name
     * Among the elements we construct is get_subpanel_data which is used as follows in SugarBean:
     *          $related_field_name = $this_subpanel->get_data_source_name();
     *          $parentbean->load_relationship($related_field_name);
     * ...where $related_field_name must be the name of a link field that references the Relationship used to obtain the subpanel data
     * @param string $sourceModule      Name of the source module for this field
     * @param string $relationshipName  Name of the relationship
     * @param string $subpanelName      Name of the subpanel provided by the sourceModule
     * @param string $titleKeyName      Name of the subpanel title , if none, we will use the module name as the subpanel title.
     */
    protected function getSubpanelDefinition ($relationshipName , $sourceModule , $subpanelName, $titleKeyName = '', $source = "")
    {
        if (empty($source))
        	$source = $this->getValidDBName($relationshipName);
    	$subpanelDefinition = array ( ) ;
        $subpanelDefinition [ 'order' ] = 100 ;
        $subpanelDefinition [ 'module' ] = $sourceModule ;
        $subpanelDefinition [ 'subpanel_name' ] = $subpanelName ;
        // following two lines are required for the subpanel pagination code in ListView.php->processUnionBeans() to correctly determine the relevant field for sorting
        $subpanelDefinition [ 'sort_order' ] = 'asc' ;
        $subpanelDefinition [ 'sort_by' ] = 'id' ;
		if(!empty($titleKeyName)){
			$subpanelDefinition [ 'title_key' ] = 'LBL_' . strtoupper ( $relationshipName . '_FROM_' . $titleKeyName ) . '_TITLE' ;
		}else{
			$subpanelDefinition [ 'title_key' ] = 'LBL_' . strtoupper ( $relationshipName . '_FROM_' . $sourceModule ) . '_TITLE' ;
		}
        $subpanelDefinition [ 'get_subpanel_data' ] = $source ;

        // dont create a quick create link to users. this usually doesn't work
        if ($sourceModule !== 'Users') {
            $subpanelDefinition [ 'top_buttons' ][]=array('widget_class' => "SubPanelTopButtonQuickCreate");
        }
        $subpanelDefinition [ 'top_buttons' ][] = array(
            'widget_class' => 'SubPanelTopSelectButton',
            'mode'=>'MultiSelect'
        );

        return array ( $subpanelDefinition );
    }

    protected function getWirelessSubpanelDefinition ($relationshipName , $sourceModule , $subpanelName, $titleKeyName = '', $source = "")
    {
        if (empty($source))
        	$source = $this->getValidDBName($relationshipName);
    	$subpanelDefinition = array ( ) ;
        $subpanelDefinition [ 'order' ] = 100 ;
        $subpanelDefinition [ 'module' ] = $sourceModule ;
        $subpanelDefinition [ 'subpanel_name' ] = $subpanelName ;
        if(!empty($titleKeyName)){
			$subpanelDefinition [ 'title_key' ] = 'LBL_' . strtoupper ( $relationshipName . '_FROM_' . $titleKeyName ) . '_TITLE' ;
		}else{
			$subpanelDefinition [ 'title_key' ] = 'LBL_' . strtoupper ( $relationshipName . '_FROM_' . $sourceModule ) . '_TITLE' ;
		}
        $subpanelDefinition [ 'get_subpanel_data' ] = $source ;

        return array ( $subpanelDefinition );
    }


    /*
     * Construct a first link id field for the relationship for use in Views
     * It is used during the save from an edit view in SugarBean->save_relationship_changes(): for each relate field, $this->$linkfieldname->add( $this->$def['id_name'] )
     * @param string $sourceModule      Name of the source module for this field
     * @param string $relationshipName  Name of the relationship
     */
    protected function getLinkFieldDefinition ($sourceModule , $relationshipName, $right_side = false, $vname = "", $id_name = false)
    {
        $vardef = array ( ) ;

        $vardef [ 'name' ] = $this->getValidDBName($relationshipName) ;
        $vardef [ 'type' ] = 'link' ;
        $vardef [ 'relationship' ] = $relationshipName ;
        $vardef [ 'source' ] = 'non-db' ;
        $vardef [ 'module' ] = $sourceModule ;
        $vardef [ 'bean_name' ] = BeanFactory::getObjectName($sourceModule) ;
        if ($right_side)
        	$vardef [ 'side' ] = 'right' ;
        if (!empty($vname))
            $vardef [ 'vname' ] = $vname;
        if (!empty($id_name)) {
            $vardef['id_name'] = $id_name;
        } else {
            $vardef['id_name'] = $this->getIDName($sourceModule);
        }

        return $vardef ;
    }

    /*
     * Construct a second link id field for the relationship for use in Views
     * It is used in two places:
     *    - the editview.tpl for Relate fields requires that a field with the same name as the relate field's id_name exists
     *    - it is loaded in SugarBean->fill_in_link_field while SugarBean processes the relate fields in fill_in_relationship_fields
     * @param string $sourceModule      Name of the source module for this field
     * @param string $relationshipName  Name of the relationship
     */
    protected function getLink2FieldDefinition ($sourceModule , $relationshipName, $right_side = false,  $vname = "")
    {
        $vardef = $this->getRelateFieldDefinition($sourceModule, $relationshipName, $vname);
        unset($vardef['db_concat_fields']);

        if (!empty($vname)) {
             $vardef ['vname'] = $vname . '_ID';
        }

        $vardef [ 'name' ] = $this->getIDName( $sourceModule ) ; // must match the id_name field value in the relate field definition
		$vardef ['reportable'] = false;
        if ($right_side)
        	$vardef [ 'side' ] = 'right' ;
        else
        	$vardef [ 'side' ] = 'left' ;

        $vardef['rname'] = 'id';
        $vardef['type'] = 'id';
        $vardef['reportable'] = false;
        unset($vardef['save']);
        $vardef['massupdate'] = false;
        $vardef['duplicate_merge'] = 'disabled';
        $vardef['hideacl'] = true;

        return $vardef ;
    }

    /*
     * Construct a relate field for the vardefs
     * The relate field is the element that is shown in the UI
     * @param string $sourceModule      Name of the source module for this field
     * @param string $relationshipName  Name of the relationship
     * @param string $moduleType        Optional - "Types" of the module - array of SugarObject types such as "file" or "basic"
     */
    protected function getRelateFieldDefinition ($sourceModule , $relationshipName , $vnameLabel='')
    {
        $vardef = array ( ) ;
        $vardef [ 'name' ] = $this->getValidDBName($relationshipName . "_name") ; // must end in _name for the QuickSearch code in TemplateHandler->createQuickSearchCode
        $vardef [ 'type' ] = 'relate' ;

        $vardef [ 'source' ] = 'non-db' ;
		if(!empty($vnameLabel)){
			$vardef [ 'vname' ] = 'LBL_' . strtoupper ( $relationshipName . '_FROM_' . $vnameLabel ) . '_TITLE' ;
		}else{
			$vardef [ 'vname' ] = 'LBL_' . strtoupper ( $relationshipName . '_FROM_' . $sourceModule ) . '_TITLE' ;
		}

        $vardef [ 'save' ] = true; // the magic value to tell SugarBean to save this relate field even though it is not listed in the $relationship_fields array

        // id_name matches the join_key_ column in the relationship table for the sourceModule - that is, the column in the relationship table containing the id of the corresponding field in the source module's table (vardef['table'])
        $vardef [ 'id_name' ] = $this->getIDName( $sourceModule ) ;

        // link cannot match id_name otherwise the $bean->$id_name value set from the POST is overwritten by the Link object created by this 'link' entry
        $vardef [ 'link' ] = $this->getValidDBName($relationshipName) ; // the name of the link field that points to the relationship - required for the save to function
        $vardef [ 'table' ] = $this->getTablename( $sourceModule ) ;
        $vardef [ 'module' ] = $sourceModule ;

        $module = null;

        switch (strtolower($sourceModule)) {
            case 'prospects':
                $bean = BeanFactory::newBean($this->definition['rhs_module']);
                $fields = array_keys($bean->field_defs);
                if (in_array('name', $fields)) {
                    $vardef['rname'] = 'name';
                } else {
                    $vardef['rname'] = 'account_name';
                }
                break;
            case 'documents':
                $vardef['rname'] = 'document_name';
                break;
            case 'kbdocuments':
                $vardef['rname'] = 'kbdocument_name';
                break;
            default:
                $module = $sourceModule;
                $vardef['rname'] = 'name';
                break;
        }

        if ($module) {
            $class = BeanFactory::newBean($module);
            $tplconfig = array();

            if (!$class) {
                $parsedModuleName = AbstractRelationships::parseDeployedModuleName($sourceModule);
                if (isset($parsedModuleName['packageName'])) { // added relationship to yet non-deployed module
                    require_once 'modules/ModuleBuilder/MB/ModuleBuilder.php';
                    $mb = new ModuleBuilder();
                    $module = $mb->getPackageModule($parsedModuleName['packageName'], $parsedModuleName['moduleName']);
                    $tplconfig = array_keys($module->config['templates']);
                } else {
                    throw new \RuntimeException('Module does not exist as a bean and no template found in its config');
                }
            }

            if (is_subclass_of($class, 'File') || in_array('file', $tplconfig)) {
                $vardef['rname'] = 'document_name';
            } elseif (is_subclass_of($class, 'Person') || in_array('person', $tplconfig)) {
                $vardef['rname'] = 'full_name';
                $vardef['db_concat_fields'] = array(0 => 'first_name', 1 => 'last_name');
            } elseif ($class && $class->getFieldDefinition('name')) {
                $vardef['rname'] = 'name';
            }
        }

        return $vardef ;
    }

    /*
     * Construct the contents of the Relationships MetaData entry in the dictionary for a generic relationship
     * The entry we build will have three sections:
     * 1. relationships: the relationship definition
     * 2. table: name of the join table for this many-to-many relationship
     * 3. fields: fields within the join table
     * 4. indicies: indicies on the join table
     * @param string $relationshipType  Cardinality of the relationship, for example, MB_ONETOONE or MB_ONETOMANY or MB_MANYTOMANY
     * @param bool $checkExisting check if a realtionship with the given name is already depolyed in this instance. If so, we will clones its table and column names to preserve existing data.
     */
    function getRelationshipMetaData ($relationshipType, $checkExisting = true)
    {
        global $dictionary;
        $relationshipName = $this->definition [ 'relationship_name' ] ;
        $lhs_module = $this->lhs_module ;
        $rhs_module = $this->rhs_module ;

        $lhs_table = $this->getTablename ( $lhs_module ) ;
        $rhs_table = $this->getTablename ( $rhs_module ) ;

        $properties = array ( ) ;

        //bug 47903
        if ($checkExisting && !empty($dictionary[$relationshipName])
            && !empty($dictionary[$relationshipName][ 'true_relationship_type' ])
            && $dictionary[$relationshipName][ 'true_relationship_type' ]  == $relationshipType
            && !empty($dictionary[$relationshipName]['relationships'][$relationshipName]))
        {
            //bug 51336
            $properties [ 'true_relationship_type' ] = $relationshipType ;
            $rel_properties = $dictionary[$relationshipName]['relationships'][$relationshipName];
        } else
        {
            // first define section 1, the relationship element of the metadata entry

            $rel_properties = array ( ) ;
            $rel_properties [ 'lhs_module' ] = $lhs_module ;
            $rel_properties [ 'lhs_table' ] = $lhs_table ;
            $rel_properties [ 'lhs_key' ] = 'id' ;
            $rel_properties [ 'rhs_module' ] = $rhs_module ;
            $rel_properties [ 'rhs_table' ] = $rhs_table ;
            $rel_properties [ 'rhs_key' ] = 'id' ;

            // because the implementation of one-to-many relationships within SugarBean does not use a join table and so requires schema changes to add a foreign key for each new relationship,
            // we currently implement all new relationships as many-to-many regardless of the real type and enforce cardinality through the relate fields and subpanels
            $rel_properties [ 'relationship_type' ] = MB_MANYTOMANY ;
            // but as we need to display the true cardinality in Studio and ModuleBuilder we also record the actual relationship type
            // this property is only used by Studio/MB
            $properties [ 'true_relationship_type' ] = $relationshipType ;
            if ($this->from_studio)
                $properties [ 'from_studio' ] = true;

            $rel_properties [ 'join_table' ] = $this->getValidDBName ( $relationshipName."_c" ) ;
            // a and b are in case the module relates to itself
            $rel_properties [ 'join_key_lhs' ] = $this->getJoinKeyLHS() ;
            $rel_properties [ 'join_key_rhs' ] = $this->getJoinKeyRHS() ;
        }

        // set the extended properties if they exist = for now, many-to-many definitions do not have to contain a role_column even if role_column_value is set; we'll just create a likely name if missing
        if (isset ( $this->definition [ 'relationship_role_column_value' ] ))
        {
            if (! isset ( $this->definition [ 'relationship_role_column' ] ))
                $this->definition [ 'relationship_role_column' ] = 'relationship_role_column' ;
            $rel_properties [ 'relationship_role_column' ] = $this->definition [ 'relationship_role_column' ] ;
            $rel_properties [ 'relationship_role_column_value' ] = $this->definition [ 'relationship_role_column_value' ] ;
        }

        $properties [ 'relationships' ] [ $relationshipName ] = $rel_properties ;

        // construct section 2, the name of the join table

        $properties [ 'table' ] = $rel_properties [ 'join_table' ] ;

        // now construct section 3, the fields in the join table

        $properties['fields']['id'] = array(
            'name' => 'id',
            'type' => 'id',
        );
        $properties['fields']['date_modified'] = array(
            'name' => 'date_modified',
            'type' => 'datetime',
        );
        $properties['fields']['deleted'] = array(
            'name' => 'deleted',
            'type' => 'bool',
            'default' => 0,
        );
        $properties['fields'][$rel_properties['join_key_lhs']] = array(
            'name' => $rel_properties['join_key_lhs'],
            'type' => 'id',
        );
        $properties['fields'][$rel_properties['join_key_rhs']] = array(
            'name' => $rel_properties['join_key_rhs'],
            'type' => 'id',
        );

        if (strtolower ( $lhs_module ) == 'documents' || strtolower ( $rhs_module ) == 'documents' )
        {
            $properties['fields']['document_revision_id'] = array(
                'name' => 'document_revision_id',
                'type' => 'id',
            );
        }
        // if we have an extended relationship condition, then add in the corresponding relationship_role_column to the relationship (join) table
        // for now this is restricted to extended relationships that can be specified by a varchar
        if (isset ( $this->definition [ 'relationship_role_column_value' ] ))
        {
            $properties['fields'][$this->definition['relationship_role_column_value']] = array(
                'name' => $this->definition['relationship_role_column_value'],
                'type' => 'varchar',
            );
        }

        // finally, wrap up with section 4, the indices on the join table

        $indexBase = $this->getValidDBName ( $relationshipName ) ;
        $properties['indices'] = array(
            array(
                'name' => 'idx_' . $indexBase . '_pk',
                'type' => 'primary',
                'fields' => array('id'),
            ),
            array(
                'name' => 'idx_' . $indexBase . '_ida1_deleted',
                'type' => 'index',
                'fields' => array($rel_properties['join_key_lhs'], 'deleted'),
            ),
            array(
                'name' => 'idx_' . $indexBase . '_idb2_deleted',
                'type' => 'index',
                'fields' => array($rel_properties['join_key_rhs'], 'deleted'),
            ),
        );

        switch ($relationshipType) {
            case MB_ONETOONE:
                $alternateKeys = array();
                break;
            case MB_ONETOMANY:
                $alternateKeys = array($rel_properties['join_key_rhs']);
                break;
            default:
                $alternateKeys = array($rel_properties['join_key_lhs'], $rel_properties['join_key_rhs']);
                break;
        }

        if ($alternateKeys) {
            $properties['indices'][] = array(
                'name' => $indexBase . '_alt',
                'type' => 'alternate_key',
                'fields' => $alternateKeys,
            );
        }

        return $properties;
    }


    /*
     * UTILITY methods
     */

    /*
     * Method to build a name for a relationship between a module and an Activities submodule
     * Used primarily in UndeployedRelationships to ensure that the subpanels we construct for Activities get their data from the correct relationships
     * @param string $activitiesSubModuleName Name of the activities submodule, such as Tasks
     */
    function getActivitiesSubModuleRelationshipName ( $activitiesSubModuleName )
    {
        return $this->lhs_module . "_" . strtolower ( $activitiesSubModuleName ) ;
    }

    /*
     * Return a version of $proposed that can be used as a column name in any of our supported databases
     * Practically this means no longer than 25 characters as the smallest identifier length for our supported DBs is 30 chars for Oracle plus we add on at least four characters in some places (for indicies for example)
     * TODO: Ideally this should reside in DBHelper as it is such a common db function...
     * @param string $name Proposed name for the column
     * @param string $ensureUnique
     * @return string Valid column name trimmed to right length and with invalid characters removed
     */
    static function getValidDBName ($name, $ensureUnique = true)
    {

        require_once 'modules/ModuleBuilder/parsers/constants.php' ;
        return getValidDBName($name, $ensureUnique, MB_MAXDBIDENTIFIERLENGTH);
    }

    /*
     * Tidy up any provided relationship type - convert all the variants of a name to the canonical type - for example, One To Many = MB_ONETOMANY
     * @param string $type Relationship type
     * @return string Canonical type
     */
    static function parseRelationshipType ($type)
    {
        $type = strtolower ( $type ) ;
        $type = preg_replace ( '/[^\w]+/i', '', strtolower ( $type ) ) ;
        $canonicalTypes = array ( ) ;
        foreach ( array ( MB_ONETOONE , MB_ONETOMANY , MB_MANYTOMANY , MB_MANYTOONE) as $canonicalType )
        {
            if ($type == preg_replace ( '/[^\w]+/i', '', strtolower ( $canonicalType ) ))
                return $canonicalType ;
        }
        // ok, we give up...
        return MB_MANYTOMANY ;
    }


    function getJoinKeyLHS()
    {
        if (!isset($this->joinKeyLHS))
        	$this->joinKeyLHS = $this->getValidDBName ( $this->relationship_name . $this->lhs_module . "_ida"  , true) ;

        return $this->joinKeyLHS;
    }

    function getJoinKeyRHS()
    {
        if (!isset($this->joinKeyRHS))
        	$this->joinKeyRHS = $this->getValidDBName ( $this->relationship_name . $this->rhs_module . "_idb"  , true) ;

        return $this->joinKeyRHS;
    }

    /*
     * Return the name of the ID field that will be used to link the subpanel, the link field and the relationship metadata
     * @param string $sourceModule  The name of the primary module in the relationship
     * @return string Name of the id field
     */
    function getIDName( $sourceModule )
    {
        return ($sourceModule == $this->lhs_module ) ? $this->getJoinKeyLHS() : $this->getJoinKeyRHS() ;
    }

    /*
     * Return the name of a module's standard (non-cstm) table in the database
     * @param string $moduleName    Name of the module for which we are to find the table
     * @return string Tablename
     */
    protected function getTablename ($moduleName)
    {
        $module = BeanFactory::newBean($moduleName);
        if(!empty($module)) {
            return $module->table_name ;
        }
        return strtolower ( $moduleName ) ;
    }

    public function getTitleKey($left=false){
		if(!$this->is_custom && !$left && file_exists("modules/{$this->rhs_module}/metadata/subpaneldefs.php")){
    		include FileLoader::validateFilePath("modules/{$this->rhs_module}/metadata/subpaneldefs.php");
    		if(isset($layout_defs[$this->rhs_module]['subpanel_setup'][strtolower($this->lhs_module)]['title_key'])){
    			return $layout_defs[$this->rhs_module]['subpanel_setup'][strtolower($this->lhs_module)]['title_key'];
    		}
    	}else if(!$this->is_custom &&  file_exists("modules/{$this->lhs_module}/metadata/subpaneldefs.php")){
    		include FileLoader::validateFilePath("modules/{$this->lhs_module}/metadata/subpaneldefs.php");
    		if(isset($layout_defs[$this->lhs_module]['subpanel_setup'][strtolower($this->rhs_module)]['title_key'])){
    			return $layout_defs[$this->lhs_module]['subpanel_setup'][strtolower($this->rhs_module)]['title_key'];
    		}
    	}

    	if($left){
    		$titleKeyName = $this->getRightModuleSystemLabel();
    		$sourceModule = $this->rhs_module;
    	}else{
    		$titleKeyName = $this->getLeftModuleSystemLabel();
    		$sourceModule = $this->lhs_module;
    	}

		if(!empty($titleKeyName)){
			$title_key = 'LBL_' . strtoupper ( $this->relationship_name . '_FROM_' . $titleKeyName ) . '_TITLE' ;
		}else{
			$title_key = 'LBL_' . strtoupper ( $this->relationship_name . '_FROM_' . $sourceModule ) . '_TITLE' ;
		}

		return $title_key;
	}

    public function buildClientFiles()
    {
        return array();
    }
}
