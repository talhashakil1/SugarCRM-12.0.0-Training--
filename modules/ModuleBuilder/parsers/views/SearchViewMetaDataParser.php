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


require_once 'modules/ModuleBuilder/parsers/constants.php' ;

class SearchViewMetaDataParser extends ListLayoutMetaDataParser
{
    static $variableMap = array (
    						MB_BASICSEARCH => 'basic_search' ,
    						MB_ADVANCEDSEARCH => 'advanced_search' ,
    						MB_WIRELESSBASICSEARCH => 'basic_search' ,
    						MB_WIRELESSADVANCEDSEARCH => 'advanced_search'
    						) ;
    // Columns is used by the view to construct the listview - each column is built by calling the named function
    public $columns = array ( 'LBL_DEFAULT' => 'getDefaultFields' , 'LBL_HIDDEN' => 'getAvailableFields' ) ;
    protected $allowParent = true;

    /*
     * Constructor
     * Must set:
     * $this->columns   Array of 'Column LBL'=>function_to_retrieve_fields_for_this_column() - expected by the view
     * @param string searchLayout	The type of search layout, e.g., MB_BASICSEARCH or MB_ADVANCEDSEARCH
     * @param string moduleName     The name of the module to which this listview belongs
     * @param string packageName    If not empty, the name of the package to which this listview belongs
     * @param string client         The client type
     */
    function __construct ($searchLayout, $moduleName , $packageName = '', $client = '')
    {
        $GLOBALS [ 'log' ]->debug ( get_class ( $this ) . ": __construct( $searchLayout , $moduleName , $packageName )" ) ;

        // BEGIN ASSERTIONS
        if (! isset ( self::$variableMap [ $searchLayout ] ) )
        {
            sugar_die ( get_class ( $this ) . ": View $searchLayout is not supported" ) ;
        }
        // END ASSERTIONS

        $this->_searchLayout = $searchLayout ;

        // unsophisticated error handling for now...
        try
        {
        	if (empty ( $packageName ))
        	{
                $this->implementation = new DeployedSearchMetaDataImplementation($searchLayout, $moduleName, $client);
        	} else
        	{
            	$this->implementation = new UndeployedMetaDataImplementation ( $searchLayout, $moduleName, $packageName, $client ) ;
        	}
        } catch (Exception $e)
        {
        	throw $e ;
        }

        $this->_saved = array_change_key_case ( $this->implementation->getViewdefs () ) ; // force to lower case so don't have problems with case mismatches later
        if(isset($this->_saved['templatemeta'])) {
            $this->_saved['templateMeta'] = $this->_saved['templatemeta'];
            unset($this->_saved['templatemeta']);
        }

        if ( ! isset ( $this->_saved [ 'layout' ] [ self::$variableMap [ $this->_searchLayout ] ] ) )
        {
        	// attempt to fallback on a basic_search layout...

        	if ( ! isset ( $this->_saved [ 'layout' ] [ self::$variableMap [ MB_BASICSEARCH ] ] ) )
        		throw new Exception ( get_class ( $this ) . ": {$this->_searchLayout} does not exist for module $moduleName" ) ;

        	$this->_saved [ 'layout'] [ MB_ADVANCEDSEARCH ] = $this->_saved [ 'layout' ] [ MB_BASICSEARCH ] ;
        }

        $this->view = $searchLayout;
        // convert the search view layout (which has its own unique layout form) to the standard listview layout so that the parser methods and views can be reused
        $this->_viewdefs = $this->convertSearchViewToListView ( $this->_saved [ 'layout' ] [ self::$variableMap [ $this->_searchLayout ] ] ) ;
        $this->_fielddefs = $this->implementation->getFielddefs () ;
        $this->_standardizeFieldLabels( $this->_fielddefs );

    }

    public function isValidField($key, array $def)
    {
		if(isset($def['type']) && $def['type'] == "assigned_user_name")
		{
			$origDefs = $this->getOriginalViewDefs();
			if (isset($def['group']) && isset($origDefs[$def['group']]))
				return false;
			if (!isset($def [ 'studio' ]) || (is_array($def [ 'studio' ]) && !isset($def [ 'studio' ]['searchview'])))
				return true;
		}
		
    if (isset($def [ 'studio' ]) && is_array($def [ 'studio' ]) && isset($def [ 'studio' ]['searchview']))
       {
           return $def [ 'studio' ]['searchview'] !== false &&
                  ($def [ 'studio' ]['searchview'] === true || $def [ 'studio' ]['searchview'] != 'false');
       }
		
    	if (!parent::isValidField($key, $def))
            return false;
    	
        //Special case to prevent multiple copies of assigned, modified, or created by user on the search view
        if (empty ($def[ 'studio' ] ) && $key == "assigned_user_name")
        {
        	$origDefs = $this->getOriginalViewDefs();
        	if ($key == "assigned_user_name" && isset($origDefs['assigned_user_id']))
        		return false;
        }

        //Remove image fields (unless studio was set)
        if (!empty($def [ 'studio' ]) && isset($def['type']) && $def['type'] == "image")
           return false;
        
       return true;
    }

    /**
     * Save the modified searchLayout
     *
     * Have to preserve the original layout format, which is array(
     *    'metadata' => array(),
     *    'layouts' => array(
     *        'basic' => array(),
     *        'advanced' => array(),
     *    );
     *)
     *
     * {@inheritDoc}
     */
    public function handleSave($populate = true, $clearCache = true)
    {
        if ($populate)
            $this->_populateFromRequest() ;
            
        if($this->_searchLayout == 'basic_search' && isset($this->_viewdefs['team_name'])) {
           $this->_viewdefs['team_name']['label'] = 'LBL_TEAM';  //Change to singular form label
        }

        //For the layout modified in the studio, use the metadata passed from the request;
        //For the layout unchanged, only do the conversion from the numeric-indexed to the fieldname-indexed.
        foreach ($this->_saved ['layout'] as $key => $layout) {
            if ($key == self::$variableMap [ $this->_searchLayout ]) {
                $this->_saved ['layout'][$key] = $this->convertSearchViewToListView($this->_viewdefs);
            } else {
                $this->_saved ['layout'][$key] = $this->convertSearchViewToListView($layout);
            }
        }
        $this->implementation->deploy ( $this->_saved ) ;
    }

    private function convertSearchViewToListView ($viewdefs)
    {
        $temp = array ( ) ;
        foreach ( $viewdefs as $key => $value )
        {
            if (! is_array ( $value ))
            {
                $key = $value ;
                $def = array ( ) ;
                $def[ 'name' ] = $key;
                $value = $def ;
            }

            if (!isset ( $value [ 'name' ] ))
            {
                $value [ 'name' ] = $key;
            }
            else
            {
                $key = $value [ 'name' ] ; // override key with name, needed when the entry lacks a key
            }
            // now add in the standard listview default=>true
            $value [ 'default' ] = true ;
            $temp [ strtolower ( $key ) ] = $value ;
        }
        return $temp ;
    }


    function normalizeDefs($defs) {
        $out = array();
        foreach ($defs as $def)
        {
            if (is_array($def) && isset($def['name']))
            {
                $out[strtolower($def['name'])] = $def;
            }
        }
        return $out;
    }

    function getOriginalViewDefs() {
        $defs = $this->implementation->getOriginalViewdefs ();
        $out = array();
        if (!empty($defs) && !empty($defs['layout']) && !empty($defs['layout'][$this->_searchLayout]))
        {
            if($this->_searchLayout == "basic_search" &&  !empty($defs['layout']["advanced_search"]))
            {
                $out = $this->normalizeDefs($defs['layout']["advanced_search"]);
            }
            $out = array_merge($out, $this->normalizeDefs($defs['layout'][$this->_searchLayout]));
        }

        return $out;
    }
}
?>
