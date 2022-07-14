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

use Sugarcrm\Sugarcrm\Security\InputValidation\InputValidation;

class ViewSugarFieldCollection{
    var $ss; // Sugar Smarty Object
    var $bean;
    var $bean_id;
    var $name;
    var $value_name;
    var $displayParams; // DisplayParams for the collection field (defined in the metadata)
    var $vardef; // vardef of the collection field.
    var $related_module; // module name of the related module
    var $module_dir; // name of the module where the collection field is.
    var $numFields;
    var $json;
    var $tpl_path;
    var $extra_var;
    var $skipModuleQuickSearch = false;
    var $field_to_name_array; //mapping of fields for the return of the select popup
    var $showSelectButton = true;
    var $hideShowHideButton = false;
    var $action_type;
    var $form_name;

    public function __construct($fill_data = true)
    {
    	$this->json = getJSONobj();
    	if($fill_data){
	        $this->displayParams = $this->json->decode(html_entity_decode($_REQUEST['displayParams']));
	        $this->vardef = $this->json->decode(html_entity_decode($_REQUEST['vardef']));
            $this->module_dir = InputValidation::getService()->getValidInputRequest(
                'module_dir',
                'Assert\Mvc\ModuleName'
            );
	        $this->action_type = $_REQUEST['action_type'];
	        $this->name = $this->vardef['name'];
	        $this->value_name = $this->name . '_values';
	        $this->numFields = 1;
	        $this->ss = new Sugar_Smarty();
	        $this->edit_tpl_path = $this->findTemplate('CollectionEditView');
	        $this->detail_tpl_path = $this->findTemplate('CollectionDetailView');
	        $this->extra_var = array();
	        $this->field_to_name_array = array();
    	}
    }
    /*
     * Retrieve the related module and load the bean and the relationship
     * call retrieve values()
     */
    function setup(){
        $rel = BeanFactory::newBean('Relationships');
        if(!empty($this->vardef['relationship'])){
        	$rel->retrieve_by_name($this->vardef['relationship']);
        }
        if($rel->relationship_type == 'many-to-many'){
            if($rel->lhs_module == $this->module_dir){
                $this->related_module = $rel->rhs_module;
                $module_dir = $rel->lhs_module;
            }else if($rel->rhs_module == $this->module_dir){
                $this->related_module = $rel->lhs_module;
                $module_dir = $rel->rhs_module;
            }else{
                die("this field has no relationships mapped with this module");
            }
            if($module_dir != $this->module_dir){
                die('These modules do not match : '. $this->module_dir . ' and ' . $module_dir);
            }
            $this->bean = BeanFactory::retrieveBean($this->module_dir, $_REQUEST['bean_id']);
            if(empty($this->bean)) {
                die('failed to load the bean');
            }
            if($this->bean->load_relationship($this->vardef['name'])){
                $this->retrieve_values();
            }else{
                die('failed to load the relationship');
            }
        }
        else{
            die("the relationship is not a many-to-many");
        }
    }
    /*
     * Retrieve the values from the DB using the get method of the link class
     * Organize and save the value into the bean
     */
    function retrieve_values(){
        if(empty($this->bean->{$this->value_name}) && isset($this->bean->{$this->name})){
            $values = array();
            $values = $this->bean->{$this->name}->get(true);
            $role_field = $this->bean->{$this->name}->_get_link_table_role_field($this->bean->{$this->name}->_relationship_name);
            foreach($values as $v){
                $role = '';
                foreach($v as $kk=>$vv){
                    if($kk == $role_field){
                        $role=$vv;
                    }
                }
                if($role == 'primary'){
                    $primary_id = $v['id'];
                }else{
                    $secondary_ids[] = array('id'=>$v['id'], 'role'=>$role);
                }
            }
            $this->bean->{$this->value_name} = array('role_field'=>$role_field);
            if(isset($primary_id) || isset($secondary_ids)){
                if(!isset($primary_id)){
                    $primary_id = $secondary_ids[0]['id'];
                    unset($secondary_ids[0]);
                }
                $mod = BeanFactory::getBean($this->module_dir, $primary_id);
                if(!empty($mod)) {
                        $mod->relDepth = $this->bean->relDepth + 1;
                        if (isset($mod->name)) {
                            $this->bean->{$this->value_name}=array_merge($this->bean->{$this->value_name}, array('primary'=>array('id'=>$primary_id, 'name'=>$mod->name)));
                        }
                        $secondaries = array();
                        if(isset($secondary_ids)){
                            foreach($secondary_ids as $v){
                                if($mod->retrieve($v['id'])){
                                    if (isset($mod->name)){
                                        $secondaries['secondaries'][]=array('id'=>$v['id'], 'name'=>$mod->name);
                                    }
                                }
                            }
                        }
                        $this->bean->{$this->value_name}=array_merge($this->bean->{$this->value_name}, $secondaries);
                        if(isset($field['additionalFields'])){
                            foreach($field['additionalFields'] as $field=>$to){
                                if(isset($mod->$field)){
                                    $this->bean->$to = $mod->$field;
                                }
                            }
                        }
                }
            }
        }
    }
    /*
     * redirect to the good process method.
     */
    function process(){
        if($this->action_type == 'editview'){
            $this->process_editview();
        }else if($this->action_type == 'detailview'){
            $this->process_detailview();
        }
    }
    function process_detailview(){

    }
    /*
     * Build the DisplayParams array
     */
    function process_editview(){
        if(isset($this->bean->{$this->value_name}['secondaries'])){
            $this->numFields=count($this->bean->{$this->value_name}['secondaries'])+1;
        }
        if(!isset($this->displayParams['readOnly'])) {
           $this->displayParams['readOnly'] = '';
        } else {
           $this->displayParams['readOnly'] = $this->displayParams['readOnly'] == false ? '' : 'READONLY';
        }
        // If there is extra field to show.
        if(isset($this->displayParams['collection_field_list'])){

            $relatedObject = BeanFactory::getObjectName($this->related_module);
            VardefManager::loadVardef($this->related_module, $relatedObject);
            foreach($this->displayParams['collection_field_list'] as $k=>$v){
                $javascript='';
                $collection_field_vardef = $GLOBALS['dictionary'][$relatedObject]['fields'][$v['name']];

                // For each extra field the params which are not displayParams will be consider as params to override the vardefs values.
                foreach($v as $k_override=>$v_override){
                    if($k_override != 'displayParams'){
                        $collection_field_vardef[$k_override] = $v_override;
                    }
                }

                // If relate field : enable quick search by creating the sqs_object array.
                if($collection_field_vardef['type'] == 'relate'){
                    $tph = new TemplateHandler();
                    $javascript = $tph->createQuickSearchCode(array($collection_field_vardef['name']=>$collection_field_vardef), array($v), $this->form_name);
                    $javascript = str_replace('<script language="javascript">'."if(typeof sqs_objects == 'undefined'){var sqs_objects = new Array;}sqs_objects['{$collection_field_vardef['name']}']=","",$javascript);
                    $javascript = substr($javascript, 0, -10);//remove ";</script>"
                    $javascriptPHP = $this->json->decode($javascript);
                    foreach($javascriptPHP['populate_list'] as $kk=>$vv){
                        $javascriptPHP['populate_list'][$kk] .= "_" . $this->vardef['name'] . "_collection_extra_0";
                    }
                    foreach($javascriptPHP['required_list'] as $kk=>$vv){
                        $javascriptPHP['required_list'][$kk] .= "_" . $this->vardef['name'] . "_collection_extra_0";
                    }
                    foreach($javascriptPHP['field_list'] as $kk=>$vv){
                        if($vv == 'id'){
                            $javascriptPHP['populate_list'][$kk];
                        }
                    }
                    $javascript = $this->json->encode($javascriptPHP);
                    $javascript = "<script language='javascript'>if(typeof sqs_objects == 'undefined'){var sqs_objects = new Array;}sqs_objects['{$collection_field_vardef['name']}_" . $this->vardef['name'] . "_collection_extra_0']=".$javascript.';</script>';
                }

                $collection_field_vardef['name'] .= "_" . $this->vardef['name'] . "_collection_extra_0";
                if(isset($collection_field_vardef['id_name'])){
                    $collection_field_vardef['id_name'] .= "_" . $this->vardef['name'] . "_collection_extra_0";
                }
                if(isset($this->displayParams['allow_update']) && ($this->displayParams['allow_update'] === false || $this->displayParams['allow_update'] === 'false')){
                    $this->displayParams['allow_update']='false';
                    $v['displayParams']['field']['disabled']='';
                }else{
                    $this->displayParams['allow_update']='true';
                    if(!isset($v['displayParams'])){
                        $v['displayParams']=array();
                    }
                }
                // Wireless view for Enum type because the wireless view retrieve and translate the list on real time.
                if($collection_field_vardef['type'] == 'enum'){
                    //TODO Change to an other view
                    $viewtype='WirelessEditView';
                }else{
                    $viewtype='EditView';
                }
                $name = $collection_field_vardef['name'];
                // Rearranging the array with name as key instaead of number. This is required for displaySmarty() to assign the good variable.
                $this->displayParams['collection_field_list'][$name]['vardefName'] = $this->displayParams['collection_field_list'][$k]['name'];
                $this->displayParams['collection_field_list'][$name]['name'] = $name;
                if($collection_field_vardef['type'] == 'relate'){
                    $this->displayParams['collection_field_list'][$name]['id_name'] = $collection_field_vardef['id_name'];
                    $this->displayParams['collection_field_list'][$name]['module'] = $collection_field_vardef['module'];
                }
                $this->displayParams['collection_field_list'][$name]['label'] = "{sugar_translate label='{$collection_field_vardef['vname']}' module='{$this->related_module}'}";//translate($collection_field_vardef['vname'], $this->related_module);
                $this->displayParams['collection_field_list'][$name]['field'] = $sfh->displaySmarty('displayParams.collection_field_list', $collection_field_vardef, $viewtype, $v['displayParams'], 1);
                $this->displayParams['collection_field_list'][$name]['field'] .= '{literal}'.$javascript;
            // Handle update_field array ONCHANGE
                $this->displayParams['collection_field_list'][$name]['field'] .= <<<FRA
                <script language='javascript'>
                    var oldonchange = '';
                    if(typeof(document.getElementById('{$collection_field_vardef['name']}').attributes.onchange) != 'undefined')
                    {
                        oldonchange=document.getElementById('{$collection_field_vardef['name']}').attributes.onchange.value;
                    }
FRA;
                $this->displayParams['collection_field_list'][$name]['field'] .= "eval(\"document.getElementById('{$collection_field_vardef['name']}').onchange = function onchange(event){collection['{$this->vardef['name']}'].update_fields.{$collection_field_vardef['name']}=true;";
                if($collection_field_vardef['type'] == 'relate'){
                    // If relate add the ID field to the array
                    $this->displayParams['collection_field_list'][$name]['field'] .= "collection['{$this->vardef['name']}'].update_fields.{$collection_field_vardef['id_name']}=true;";
                }
                $this->displayParams['collection_field_list'][$name]['field'] .= "document.getElementById('update_fields_{$this->vardef['name']}_collection').value = YAHOO.lang.JSON.stringify(collection['{$this->vardef['name']}'].update_fields);\" + oldonchange + \"};\");</script>{/literal}";
                //we need to get rid of the old value;
                unset($this->displayParams['collection_field_list'][$k]);
            }
        }
        if(!isset($this->displayParams['class'])) $this->displayParams['class']='';
        if(isset($this->displayParams['allow_new']) && ($this->displayParams['allow_new'] === false || $this->displayParams['allow_new'] === 'false')){
            $this->displayParams['allow_new']='false';
            $this->displayParams['class']=str_replace('sqsNoAutofill','',$this->displayParams['class']);
        }else{
            $this->displayParams['allow_new']='true';
            $this->displayParams['class'].=' sqsNoAutofill';
        }
        if(isset($this->displayParams['new_on_update']) && ($this->displayParams['new_on_update'] !== false || $this->displayParams['new_on_update'] !== 'false' || $this->displayParams['new_on_update'] !== 'FALSE' || $this->displayParams['new_on_update'] !== '0')){
            $this->displayParams['new_on_update']='true';
        }else{
            $this->displayParams['new_on_update']='false';
        }
    }

    /*
     * Init the template with the variables
     */
    function init_tpl(){
        foreach($this->extra_var as $k=>$v){
            $this->ss->assign($k,$v);
        }
        if($this->action_type == 'editview'){
            $this->ss->assign('quickSearchCode',$this->createQuickSearchCode());
            $this->createPopupCode();// this code populate $this->displayParams with popupdata.
            $this->tpl_path = $this->edit_tpl_path;
        }else if($this->action_type == 'detailview'){
            $this->tpl_path = $this->detail_tpl_path;
        }

        $this->ss->assign('displayParams',$this->displayParams);
        $this->ss->assign('vardef',$this->vardef);
        $this->ss->assign('module',$this->related_module);
        $this->ss->assign('values',$this->bean->{$this->value_name});
        $this->ss->assign('showSelectButton',$this->showSelectButton);
        $this->ss->assign('hideShowHideButton',$this->hideShowHideButton);
        $this->ss->assign('APP',$GLOBALS['app_strings']);
    }
    /*
     * Display the collection field after retrieving the cached row.
     */
    function display(){
        $cacheRowFile = sugar_cached('modules/') . $this->module_dir .  '/collections/'. $this->name . '.tpl';
        if(!$this->checkTemplate($cacheRowFile)){
            $dir = dirname($cacheRowFile);
            if(!file_exists($dir)) {

               mkdir_recursive($dir, null, true);
            }
            $cacheRow = $this->ss->fetch($this->findTemplate('CollectionEditViewRow'));
            file_put_contents($cacheRowFile, $cacheRow);
        }
        $this->ss->assign('cacheRowFile', $cacheRowFile);
        return $this->ss->fetch($this->tpl_path);
    }
    /*
     * Check if the template is cached
     * return a bool
     */
    function checkTemplate($cacheRowFile){
        if(inDeveloperMode() || !empty($_SESSION['developerMode'])){
            return false;
        }
        return file_exists($cacheRowFile);
    }


    /*
     * Create the quickSearch code for the collection field.
     * return the javascript code which define sqs_objects.
     */
    function createQuickSearchCode($returnAsJavascript = true){
        $sqs_objects = array();
        $qsd = QuickSearchDefaults::getQuickSearchDefaults();
        $qsd->setFormName($this->form_name);
        for($i=0; $i<$this->numFields; $i++){
            $name1 = "{$this->form_name}_{$this->name}_collection_{$i}";
            if(!$this->skipModuleQuickSearch && preg_match('/(Campaigns|Teams|Users|Accounts)/si', $this->related_module, $matches)) {
                if($matches[0] == 'Users'){
                    $sqs_objects[$name1] = $qsd->getQSUser();
                } else if($matches[0] == 'Campaigns') {
                    $sqs_objects[$name1] = $qsd->getQSCampaigns();


                } else if($matches[0] == 'Teams') {
                    $sqs_objects[$name1] = $qsd->getQSTeam();
                } else if($matches[0] == 'Users'){
                    $sqs_objects[$name1] = $qsd->getQSUser();

                } else if($matches[0] == 'Accounts') {
                    $nameKey = "{$this->name}_collection_{$i}";
                    $idKey = "id_{$this->name}_collection_{$i}";

                 //There are billingKey, shippingKey and additionalFields entries you can define in editviewdefs.php
                 //entry to allow quick search to autocomplete fields with a suffix value of the
                 //billing/shippingKey value (i.e. 'billingKey' => 'primary' in Contacts will populate
                 //primary_XXX fields with the Account's billing address values).
                 //addtionalFields are key/value pair of fields to fill from Accounts(key) to Contacts(value)
                    $billingKey = isset($this->displayParams['billingKey']) ? $this->displayParams['billingKey'] : null;
                    $shippingKey = isset($this->displayParams['shippingKey']) ? $this->displayParams['shippingKey'] : null;
                    $additionalFields = isset($this->displayParams['additionalFields']) ? $this->displayParams['additionalFields'] : null;
                    $sqs_objects[$name1] = $qsd->getQSAccount($nameKey, $idKey, $billingKey, $shippingKey, $additionalFields);
                } else if($matches[0] == 'Contacts'){
                    $sqs_objects[$name1] = $qsd->getQSContact($name1, "id_".$name1);
                }


				$temp_array = array('field_list'=>array(),'populate_list'=>array());
                foreach($sqs_objects[$name1]['field_list'] as $k=>$v){
                    if(!in_array($v, array('name','id'))){
                        $sqs_objects[$name1]['primary_field_list'][]=$v;
                        $sqs_objects[$name1]['primary_populate_list'][]=$sqs_objects[$name1]['populate_list'][$k];
                    }else{
                        $temp_array['field_list'][]=$v;
                        $temp_array['populate_list'][]=$sqs_objects[$name1]['populate_list'][$k];
                    }
                }
                $sqs_objects[$name1]['field_list'] = $temp_array['field_list'];
                $sqs_objects[$name1]['populate_list'] = $temp_array['populate_list'];
                if(isset($this->displayParams['collection_field_list'])){
                    foreach($this->displayParams['collection_field_list'] as $v){
                        $sqs_objects[$name1]['populate_list'][]=  $v['vardefName']."_".$this->name."_collection_extra_".$i;
                        $sqs_objects[$name1]['field_list'][] = $v['vardefName'];
                    }
                }
            }else {
                $sqs_objects[$name1] = $qsd->getQSParent($this->related_module);
                $sqs_objects[$name1]['populate_list'] = array("{$this->vardef['name']}_collection_{$i}", "id_{$this->vardef['name']}_collection_{$i}");
                $sqs_objects[$name1]['field_list'] = array('name', 'id');
                if(isset($this->displayParams['collection_field_list'])){
                    foreach($this->displayParams['collection_field_list'] as $v){
                        $sqs_objects[$name1]['populate_list'][] = $v['vardefName']."_".$this->name."_collection_extra_".$i;
                        $sqs_objects[$name1]['field_list'][] = $v['vardefName'];
                    }
                }
                if(isset($this->displayParams['field_to_name_array'])){
                    foreach($this->displayParams['field_to_name_array'] as $k=>$v){
                        /*
                         * "primary_populate_list" and "primary_field_list" are used when the field is selected as a primary.
                         * At this time the JS function changePrimary() will copy "primary_populate_list" and "primary_field_list"
                         * into "populate_list" and "field_list" and remove the values from all the others which are secondaries.
                         * "primary_populate_list" and "primary_field_list" contain the fields which has to be populated outside of
                         * the collection field. For example the "Address Information" are populated with the "billing address" of the
                         * selected account in a contact editview.
                         */
                        $sqs_objects[$name1]['primary_populate_list'][] = $v;
                        $sqs_objects[$name1]['primary_field_list'][] = $k;
                    }
                }else if(isset($field['field_list']) && isset($field['populate_list'])){
                    $sqs_objects[$name1]['primary_populate_list'] = array_merge($sqs_objects[$name1]['populate_list'], $field['field_list']);
                    $sqs_objects[$name1]['primary_field_list'] = array_merge($sqs_objects[$name1]['field_list'], $field['populate_list']);
                }else{
                    $sqs_objects[$name1]['primary_populate_list'] = array();
                    $sqs_objects[$name1]['primary_field_list'] = array();
                }
            }
        }

        $id = "{$this->form_name}_{$this->name}_collection_0";

        if(!empty($sqs_objects) && count($sqs_objects) > 0) {
            foreach($sqs_objects[$id]['field_list'] as $k=>$v){
                $this->field_to_name_array[$v] = $sqs_objects[$id]['populate_list'][$k];
            }
            if($returnAsJavascript){
	            $quicksearch_js = '<script language="javascript">';
	            $quicksearch_js.= "if(typeof sqs_objects == 'undefined'){var sqs_objects = new Array;}";

	            foreach($sqs_objects as $sqsfield=>$sqsfieldArray){
	               $quicksearch_js .= "sqs_objects['$sqsfield']={$this->json->encode($sqsfieldArray)};";
	            }

	            return $quicksearch_js .= '</script>';
            }else{
            	return $sqs_objects;
            }
       }
       return '';
    }
    /*
     * Always call createQuickSearchCode() before createPopupCode() to define field_to_name_array
     */
    function createPopupCode(){
        // TODO the 'select' button is not fully working. We should use the sqs_objects in open_popup instead of the parameter.
        if(isset($this->field_to_name_array) && !empty($this->field_to_name_array)){
            $call_back_function = 'set_return';

            if(isset($this->displayParams['formName'])) {
                $form = $this->displayParams['formName'];
            } else if($this->action_type == 'editview'){
                $form = 'EditView';
            } else if($this->action_type == 'quickcreate'){
                $form = "QuickCreate_{$this->module_dir}";
            }

            if(isset($this->displayParams['call_back_function'])) {
                $call_back_function = $this->displayParams['call_back_function'];
            }

            $popup_request_data= array(
                'call_back_function' => $call_back_function,
                'form_name' => $form,
                'field_to_name_array' => $this->field_to_name_array,
            );

            //Make sure to replace {{ and }} with spacing in between because Smarty template parsing will treat {{ or }} specially
            $this->displayParams['popupData'] = '{literal}'. str_replace(array('{{', '}}'), array('{ {', '} }'), $this->json->encode($popup_request_data)) . '{/literal}';
        }
    }


    function findTemplate($view, $classList = null)
    {
        static $tplCache = array();

        if ( isset($tplCache[$this->type][$view]) ) {
            return $tplCache[$this->type][$view];
        }

        if(!is_array($classList)) {
            $lastClass = get_class($this);
            $classList = array($this->type,str_replace('ViewSugarField','',$lastClass));
            while ( $lastClass = get_parent_class($lastClass) ) {
                $classList[] = str_replace('ViewSugarField','',$lastClass);
            }
        }

        $tplName = '';
        foreach ( $classList as $className ) {
            global $current_language;
            if(isset($current_language)) {
                $tplName = SugarAutoLoader::existingCustomOne('include/SugarFields/Fields/'. $className .'/'. $current_language . '.' . $view .'.tpl');
                if ( $tplName ) {
                    break;
                }
            }
            $tplName = SugarAutoLoader::existingCustomOne('include/SugarFields/Fields/'. $className .'/'. $view .'.tpl');
            if ($tplName) {
                break;
            }
        }

        $tplCache[$this->type][$view] = $tplName;

        return $tplName;
    }
}
