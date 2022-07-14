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

class SugarFieldCollection extends SugarFieldBase {
	var $tpl_path;

    /**
     * @var CollectionApi
     */
    protected $collectionApi;

	function getDetailViewSmarty($parentFieldArray, $vardef, $displayParams, $tabindex) {
		$nolink = array('Users');
		if(in_array($vardef['module'], $nolink)){
			$displayParams['nolink']=true;
		}else{
			$displayParams['nolink']=false;
		}
		$json = getJSONobj();
        $displayParamsJSON = $json->encode($displayParams);
        $vardefJSON = $json->encode($vardef);
        $this->ss->assign('displayParamsJSON', '{literal}'.$displayParamsJSON.'{/literal}');
        $this->ss->assign('vardefJSON', '{literal}'.$vardefJSON.'{/literal}');
        $this->setup($parentFieldArray, $vardef, $displayParams, $tabindex);
        if(empty($this->tpl_path)){
        	$this->tpl_path = $this->findTemplate('DetailView');
        }
        return $this->fetch($this->tpl_path);
    }

    function getEditViewSmarty($parentFieldArray, $vardef, $displayParams, $tabindex, $searchView = false) {
        if($searchView){
        	$form_name = 'search_form';
        }else{
    		$form_name = 'EditView';
        }
        $json = getJSONobj();
        $displayParamsJSON = $json->encode($displayParams);
        $vardefJSON = $json->encode($vardef);
        $this->ss->assign('required', !empty($vardef['required']));
        $this->ss->assign('displayParamsJSON', '{literal}'.$displayParamsJSON.'{/literal}');
        $this->ss->assign('vardefJSON', '{literal}'.$vardefJSON.'{/literal}');

        $keys = $this->getAccessKey($vardef,'COLLECTION',$vardef['module']);
        $displayParams['accessKeySelect'] = $keys['accessKeySelect'];
        $displayParams['accessKeySelectLabel'] = $keys['accessKeySelectLabel'];
        $displayParams['accessKeySelectTitle'] = $keys['accessKeySelectTitle'];
        $displayParams['accessKeyClear'] = $keys['accessKeyClear'];
        $displayParams['accessKeyClearLabel'] = $keys['accessKeyClearLabel'];
        $displayParams['accessKeyClearTitle'] = $keys['accessKeyClearTitle'];

        $this->setup($parentFieldArray, $vardef, $displayParams, $tabindex);
	    if(!$searchView) {
	    	if(empty($this->tpl_path)){
        		$this->tpl_path = $this->findTemplate('EditView');
        	}
	    	return $this->fetch($this->tpl_path);
	    }
    }

	function getSearchViewSmarty($parentFieldArray, $vardef, $displayParams, $tabindex) {
		$this->getEditViewSmarty($parentFieldArray, $vardef, $displayParams, $tabindex, true);
    }
     /**
     * This should be called when the bean is saved. The bean itself will be passed by reference
     * @param SugarBean bean - the bean performing the save
     * @param array params - an array of paramester relevant to the save, most likely will be $_REQUEST
     */
    public function save($bean, $params, $field, $properties, $prefix = '')
    {
        if(isset($_POST["primary_" . $field . "_collection"])){
            $save = false;
            $value_name = $field . "_values";
            $link_field = array();
            // populate $link_field from POST
            foreach($_POST as $name=>$value){
                if(strpos($name, $field . "_collection_") !== false){
                    $num = substr($name, -1);
                    if(is_numeric($num)){
                        settype($num, 'int');
                        if(strpos($name, $field . "_collection_extra_") !== false){
                            $extra_field = null;
                            $link_field[$num]['extra_field'][$extra_field]=$value;
                        }else if ($name == $field . "_collection_" . $num){
                            $link_field[$num]['name']=$value;
                        }else if ($name == "id_" . $field . "_collection_" . $num){
                            $link_field[$num]['id']=$value;
                        }
                    }
                }
            }
            // Set Primary
            if(isset($_POST["primary_" . $field . "_collection"])){
                $primary = $_POST["primary_" . $field . "_collection"];
                settype($primary, 'int');
                $link_field[$primary]['primary']=true;
            }
            // Create or update record and take care of the extra_field
       	 	$class = load_link_class($bean->field_defs[$field]);

            $link_obj = new $class($bean->field_defs[$field]['relationship'], $bean, $bean->field_defs[$field]);
            $module = $link_obj->getRelatedModuleName();
            foreach($link_field as $k=>$v){
                $save = false;
                $update_fields = array();
                $obj = BeanFactory::newBean($module);
                if(!isset($link_field[$k]['name']) || empty($link_field[$k]['name'])){
                    // There is no name so it is an empty record -> ignore it!
                    unset($link_field[$k]);
                    break;
                }
                if(!isset($link_field[$k]['id']) || empty($link_field[$k]['id']) || (isset($_POST[$field . "_new_on_update"]) && $_POST[$field . "_new_on_update"] === 'true')){
                    // Create a new record
                    if(isset($_POST[$field . "_allow_new"]) && ($_POST[$field . "_allow_new"] === 'false' || $_POST[$field . "_allow_new"] === false)){
                        // Not allow to create a new record so remove from $link_field
                        unset($link_field[$k]);
                        break;
                    }
                    if(!isset($link_field[$k]['id']) || empty($link_field[$k]['id'])){
                        // There is no ID so it is a new record
                        $save = true;
                        $obj->name=$link_field[$k]['name'];
                    }else{
                        // We duplicate an existing record because new_on_update is set
                        $obj->retrieve($link_field[$k]['id']);
                        $obj->id='';
                        $obj->name = $obj->name . '_DUP';
                    }
                }else{
                    // id exist so retrieve the data
                    $obj->retrieve($link_field[$k]['id']);
                }
                // Update the extra field for the new or the existing record
                if(isset($v['extra_field']) && is_array($v['extra_field'])){
                    // Retrieve the changed fields
                    if(isset($_POST["update_fields_{$field}_collection"]) && !empty($_POST["update_fields_{$field}_collection"])){
                        $JSON = getJSONobj();
                        $update_fields = $JSON->decode(html_entity_decode($_POST["update_fields_{$field}_collection"]));
                    }
                    // Update the changed fields
                    foreach($update_fields as $kk=>$vv){
                        if(!isset($_POST[$field . "_allow_update"]) || ($_POST[$field . "_allow_update"] !== 'false' && $_POST[$field . "_allow_update"] !== false)){
                            //allow to update the extra_field in the record
                            if(isset($v['extra_field'][$kk]) && $vv == true){
                                $extra_field_name = str_replace("_".$field."_collection_extra_".$k,"",$kk);
                                if($obj->$extra_field_name != $v['extra_field'][$kk]){
                                    $save = true;
                                    $obj->$extra_field_name=$v['extra_field'][$kk];
                                }
                            }
                        }
                    }
                }
                // Save the new or updated record
                if($save){
                    if(!$obj->ACLAccess('save')){
                        ACLController::displayNoAccess(true);
                        sugar_cleanup(true);
                    }
                    $obj->save();
                    $link_field[$k]['id']=$obj->id;
                }
            }
            // Save new relationship or delete deleted relationship
            if(!empty($link_field)){
                if($bean->load_relationship($field)){
                    $oldvalues = $bean->$field->get(true);
                    $role_field = $bean->$field->_get_link_table_role_field($bean->$field->_relationship_name);
                    foreach($link_field as $new_v){
                        if(!empty($new_v['id'])){
                            if(!empty($role_field)){
                                if(isset($new_v['primary']) && $new_v['primary']){
                                    $bean->$field->add($new_v['id'], array($role_field=>'primary'));
                                }else{
                                    $bean->$field->add($new_v['id'], array($role_field=>'NULL'));
                                }
                            }else{
                                $bean->$field->add($new_v['id'], array());
                            }
                        }
                    }
                    foreach($oldvalues as $old_v){
                        $match = false;
                        foreach($link_field as $new_v){
                            if($new_v['id'] == $old_v['id']){
                                $match = true;
                            }
                        }
                        if(!$match){
                            $bean->$field->delete($bean->id, $old_v['id']);
                        }
                    }
                }
            }
        }
    }

    /**
     * {@inheritDoc}
     *
     * Does nothing since collection field data is fetched by internal API call
     */
    public function addFieldToQuery($field, array &$fields)
    {
    }

    /**
     * {@inheritDoc}
     */
    public function apiFormatField(
        array &$data,
        SugarBean $bean,
        array $args,
        $fieldName,
        $properties,
        array $fieldList = null,
        ServiceBase $service = null
    ) {
        if (!is_array($fieldList)) {
            throw new SugarApiExceptionError('$fieldList argument of apiFormatField() is missing');
        }

        // don't render link fields unless it's explicitly requested
        if (!in_array($fieldName, $fieldList)) {
            return;
        }

        if (!$service) {
            throw new SugarApiExceptionError('$service argument of apiFormatField() is missing');
        }

        if (isset($args['display_params'][$fieldName])) {
            $displayParams = $args['display_params'][$fieldName];
        } else {
            $displayParams = array();
        }

        if (!empty($args['args']['erased_fields'])) {
            $displayParams['erased_fields'] = true;
        }

        $data[$fieldName] = $this->getBeanCollection($bean, $properties, $displayParams, $service);
    }

    /**
     * Prune any records that are forbidden by a field-level ACL on a link.
     * (Collections which share a link with another collection, where only one is
     * subject to a field-level ACL, would otherwise leak data).
     * Also prune the next_offset.
     *
     * @param array $data (Reference to) array of result data.
     * @param SugarBean $bean The bean.
     * @param string $fieldName Name of the collection field from which the
     *   restrictions are derived.
     * @param string $action Action we are attempting (view, list).
     * @param array $fieldDef Field definition for this collection field.
     * @param ServiceBase $service REST API service.
     */
    public function processAdditionalAcls(
        array &$data,
        SugarBean $bean,
        string $fieldName,
        string $action,
        array $fieldDef,
        ServiceBase $service = null
    ) {
        $forbiddenLinks = $this->getForbiddenLinks($bean, $action, $fieldDef['links'] ?? []);
        if (empty($forbiddenLinks)) {
            return;
        }

        // strip out the record data from the collection
        if (!empty($data[$fieldName]['records'])) {
            $data[$fieldName]['records'] = array_values(array_filter(
                $data[$fieldName]['records'],
                function ($record) use ($forbiddenLinks) {
                    return !in_array($record['_link'], $forbiddenLinks);
                }
            ));
        }

        // strip out any offending next_offset's
        foreach ($forbiddenLinks as $link) {
            unset($data[$fieldName]['next_offset'][$link]);
        }
    }

    /**
     * Returns a list of link fields which are forbidden by ACLs.
     *
     * @param SugarBean $bean The bean to check.
     * @param string $action The action to check.
     * @param array $links The list of all link fields for this collection.
     * @return array The subset of $links which are ACL-restricted.
     */
    public function getForbiddenLinks(SugarBean $bean, string $action, array $links): array
    {
        $isOwner = $bean->isOwner($GLOBALS['current_user']->id);
        return array_filter($links, function ($link) use ($action, $bean, $isOwner) {
            return !SugarACL::checkField($bean->module_name, $link, $action, ['owner_override' => $isOwner]);
        });
    }

    /**
     * {@inheritDoc}
     *
     * Applies the callback only to the given field and does not iterate over "fields" since they mean collection fields
     * to be retrieved, not nested fields as in base field. Does iterate over "related_fields" since those will not
     * interfere with collection fields and it allows for related data to be retrieved when necessary.
     */
    public function iterateViewField(ViewIterator $iterator, array $field, /* callable */ $callback)
    {
        $fieldSet = null;
        if (isset($field['related_fields']) && is_array($field['related_fields'])) {
            $fieldSet = $field['related_fields'];
            unset($field['related_fields']);
        }
        $callback($field);
        if ($fieldSet) {
            $iterator->apply($fieldSet, $callback);
        }
    }

    /**
     * Return the data that should be returned for link or collection field
     *
     * @param SugarBean $bean Source bean
     * @param array $field Link or collection field definition
     * @param array $displayParams Field display parameters
     * @param ServiceBase $service
     *
     * @return array
     * @throws SugarApiExceptionError
     */
    protected function getBeanCollection(SugarBean $bean, array $field, array $displayParams, ServiceBase $service)
    {
        $args = array_merge(
            array(
                // make sure "fields" argument is always passed to the API
                // since otherwise it will return all fields by default
                'fields' => array('id', 'date_modified'),
            ),
            $field['displayParams'] ?? [],
            $displayParams,
            array(
                'module' => $bean->module_name,
                'record' => $bean->id,
                'collection_name' => $field['name'],
                'filter' => $field['filter'] ?? [],
            )
        );

        $response = $this->getCollectionApi()->getCollection($service, $args);

        return $response;
    }

    /**
     * Lazily loads Collection API
     *
     * @return CollectionApi
     */
    protected function getCollectionApi()
    {
        if (!$this->collectionApi) {
            $this->collectionApi = new RelateCollectionApi();
        }

        return $this->collectionApi;
    }
}
