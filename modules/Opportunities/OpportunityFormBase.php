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


class OpportunityFormBase{


function checkForDuplicates($prefix){
	require_once('include/formbase.php');
	
	$focus = BeanFactory::newBean('Opportunities');
	$query = '';
	$baseQuery = 'select id, name, sales_stage,amount, date_closed  from opportunities where deleted!=1 and (';

        if (!empty($_POST[$prefix.'name'])) {
            $name = $_POST[$prefix.'name'];
            $query = $baseQuery . " name LIKE " . $focus->db->quoted('%' . $name . '%');
            $query .= getLikeForEachWord('name', $name);
        }

	if(!empty($query)){
		$rows = array();
		global $db;
		$result = $db->query($query.')');
		$i=-1;
		while(($row=$db->fetchByAssoc($result)) != null) {
			$i++;
			$rows[$i] = $row;
		}
		if ($i==-1) return null;
		
		return $rows;		
	}
	return null;
}


function buildTableForm($rows, $mod='Opportunities'){
	if(!empty($mod)){
	global $current_language;
	$mod_strings = return_module_language($current_language, $mod);
	}else global $mod_strings;
	global $app_strings;
	$cols = sizeof($rows[0]) * 2 + 1;
	$form = '<table width="100%"><tr><td>'.$mod_strings['MSG_DUPLICATE']. '</td></tr><tr><td height="20"></td></tr></table>';

	$form .= "<form action='index.php' method='post' name='dupOpps'><input type='hidden' name='selectedOpportunity' value=''>";
	$form .= "<table width='100%' cellpadding='0' cellspacing='0' class='list view'>";
	$form .= "<tr class='pagination'><td colspan='$cols'><table width='100%' cellspacing='0' cellpadding='0' border='0'><tr><td><input type='submit' class='button' name='ContinueOpportunity' value='${mod_strings['LNK_NEW_OPPORTUNITY']}'></td></tr></table></td></tr><tr>";
	$form .= "<tr><td scope='col'>&nbsp;</td>";
    require_once('include/formbase.php');
	$form .= getPostToForm();
	if(isset($rows[0])){
		foreach ($rows[0] as $key=>$value){
			if($key != 'id'){
					$form .= "<td scope='col'>". $mod_strings[$mod_strings['db_'.$key]]. "</td>";
		}}
		$form .= "</tr>";
	}

	$rowColor = 'oddListRowS1';
	foreach($rows as $row){

		$form .= "<tr class='$rowColor'>";

		$form .= "<td width='1%' nowrap='nowrap'><a href='#' onclick='document.dupOpps.selectedOpportunity.value=\"${row['id']}\";document.dupOpps.submit();'>[${app_strings['LBL_SELECT_BUTTON_LABEL']}]</a>&nbsp;&nbsp;</td>";
		$wasSet = false;
		foreach ($row as $key=>$value){
				if($key != 'id'){
					if(!$wasSet){
					$form .= "<td scope='row'><a target='_blank' href='index.php?module=Opportunities&action=DetailView&record=${row['id']}'>$value</a></td>";
					$wasSet = true;
					}else{
					$form .= "<td><a target='_blank' href='index.php?module=Opportunities&action=DetailView&record=${row['id']}'>$value</a></td>";
					}
				}}

		if($rowColor == 'evenListRowS1'){
			$rowColor = 'oddListRowS1';
		}else{
			 $rowColor = 'evenListRowS1';
		}
		$form .= "</tr>";
	}
    $form .= "<tr class='pagination'><td colspan='$cols'><table width='100%' cellspacing='0' cellpadding='0' border='0'><tr><td><input type='submit' class='button' name='ContinueOpportunity' value='${mod_strings['LNK_NEW_OPPORTUNITY']}'></td></tr></table></td></tr><tr>";
	$form .= "</table><BR></form>";

	return $form;



}

function getForm($prefix, $mod='Opportunities'){
	if(!ACLController::checkAccess('Opportunities', 'edit', true)){
		return '';
	}
if(!empty($mod)){
	global $current_language;
	$mod_strings = return_module_language($current_language, $mod);
}else global $mod_strings;
global $app_strings;
global $sugar_version, $sugar_config;


$lbl_save_button_title = $app_strings['LBL_SAVE_BUTTON_TITLE'];
$lbl_save_button_key = $app_strings['LBL_SAVE_BUTTON_KEY'];
$lbl_save_button_label = $app_strings['LBL_SAVE_BUTTON_LABEL'];


$the_form = get_left_form_header($mod_strings['LBL_NEW_FORM_TITLE']);
$the_form .= <<<EOQ
		<form name="{$prefix}OppSave" onSubmit="return check_form('{$prefix}OppSave')" method="POST" action="index.php">
			<input type="hidden" name="{$prefix}module" value="Opportunities">
			<input type="hidden" name="${prefix}action" value="Save">
EOQ;
$the_form .= $this->getFormBody($prefix, $mod, "{$prefix}OppSave");
$the_form .= <<<EOQ
		<input title="$lbl_save_button_title" accessKey="$lbl_save_button_key" class="button" type="submit" name="button" value="  $lbl_save_button_label  " >
		</form>

EOQ;
$the_form .= get_left_form_footer();
$the_form .= get_validate_record_js();

return $the_form;
}

function getFormBody($prefix, $mod='Opportunities', $formname=''){
	if(!ACLController::checkAccess('Opportunities', 'edit', true)){
		return '';
	}
if(!empty($mod)){
	global $current_language;
	$mod_strings = return_module_language($current_language, $mod);
}else global $mod_strings;
global $app_strings;
global $app_list_strings;
global $theme;
global $current_user;
global $sugar_config;
global $timedate;
// Unimplemented until jscalendar language files are fixed
// global $current_language;
// global $default_language;
// global $cal_codes;

$lbl_required_symbol = $app_strings['LBL_REQUIRED_SYMBOL'];
$lbl_opportunity_name = $mod_strings['LBL_OPPORTUNITY_NAME'];
$lbl_sales_stage = $mod_strings['LBL_SALES_STAGE'];
$lbl_date_closed = $mod_strings['LBL_DATE_CLOSED'];
$lbl_amount = $mod_strings['LBL_AMOUNT'];

$ntc_date_format = $timedate->get_user_date_format();
$cal_dateformat = $timedate->get_cal_date_format();

$user_id = $current_user->id;

$team_id = $current_user->default_team;
// Unimplemented until jscalendar language files are fixed
// $cal_lang = (empty($cal_codes[$current_language])) ? $cal_codes[$default_language] : $cal_codes[$current_language];
$cal_lang = "en";

$the_form = <<<EOQ
<p>
			<input type="hidden" name="{$prefix}record" value="">
			<input type="hidden" name="{$prefix}assigned_user_id" value='${user_id}'>

			<input type="hidden" name="{$prefix}team_id" value='${team_id}'>
		$lbl_opportunity_name&nbsp;<span class="required">$lbl_required_symbol</span><br>
		<input name='{$prefix}name' type="text" value="">
EOQ;
if($sugar_config['require_accounts']){

///////////////////////////////////////
///
/// SETUP ACCOUNT POPUP

$popup_request_data = array(
	'call_back_function' => 'set_return',
	'form_name' => "{$prefix}OppSave",
	'field_to_name_array' => array(
		'id' => 'account_id',
		'name' => 'account_name',
		),
	);

$json = getJSONobj();
$encoded_popup_request_data = $json->encode($popup_request_data);

//
///////////////////////////////////////

$the_form .= <<<EOQ
		${mod_strings['LBL_ACCOUNT_NAME']}&nbsp;<span class="required">${lbl_required_symbol}</span><br>
		<input class='sqsEnabled' autocomplete='off' id='qc_account_name' name='account_name' type='text' value="" size="16"><input id='qc_account_id' name='account_id' type="hidden" value=''>&nbsp;<input title="{$app_strings['LBL_SELECT_BUTTON_TITLE']}" type="button" class="button" value='{$app_strings['LBL_SELECT_BUTTON_LABEL']}' name=btn1
			onclick='open_popup("Accounts", 600, 400, "", true, false, {$encoded_popup_request_data});' /><br>
EOQ;
}
$jsCalendarImage = SugarThemeRegistry::current()->getImageURL('jscalendar.gif');
$the_form .= <<<EOQ
		$lbl_date_closed&nbsp;<span class="required">$lbl_required_symbol</span> <br><span class="dateFormat">$ntc_date_format</span><br>
		<input name='{$prefix}date_closed' size='12' maxlength='10' id='{$prefix}jscal_field' type="text" value=""> <!--not_in_theme!--><img src="{$jsCalendarImage}" alt="{$app_strings['LBL_ENTER_DATE']}"  id="jscal_trigger" align="absmiddle"><br>
		$lbl_sales_stage&nbsp;<span class="required">$lbl_required_symbol</span><br>
		<select name='{$prefix}sales_stage'>
EOQ;
$the_form .= get_select_options_with_id($app_list_strings['sales_stage_dom'], "");
$the_form .= <<<EOQ
		</select><br>
		$lbl_amount&nbsp;<span class="required">$lbl_required_symbol</span><br>
		<input name='{$prefix}amount' type="text"></p>
		<input type='hidden' name='lead_source' value=''>
		<script type="text/javascript">
		Calendar.setup ({
			inputField : "{$prefix}jscal_field", daFormat : "$cal_dateformat", ifFormat : "$cal_dateformat", showsTime : false, button : "jscal_trigger", singleClick : true, step : 1, weekNumbers:false
		});
		</script>
EOQ;


$qsd = QuickSearchDefaults::getQuickSearchDefaults();
$sqs_objects = array('qc_account_name' => $qsd->getQSParent());
$sqs_objects['qc_account_name']['populate_list'] = array('qc_account_name', 'qc_account_id');
$quicksearch_js = '<script type="text/javascript" language="javascript">sqs_objects = ' . $json->encode($sqs_objects) . '</script>';
$the_form .= $quicksearch_js;



$javascript = new javascript();
$javascript->setFormName($formname);
$javascript->setSugarBean(BeanFactory::newBean('Opportunities'));
$javascript->addRequiredFields($prefix);
$the_form .=$javascript->getScript();


return $the_form;

}


function handleSave($prefix,$redirect=true, $useRequired=false){
    global $current_user;
	
	
	require_once('include/formbase.php');
	
	$focus = BeanFactory::newBean('Opportunities');
	if($useRequired &&  !checkRequired($prefix, array_keys($focus->required_fields))){
		return null;
	}

    if(empty($_POST['currency_id'])){
        $currency_id = $current_user->getPreference('currency');
        if(isset($currency_id)){
            $focus->currency_id =   $currency_id;
        }
    }
	$focus = populateFromPost($prefix, $focus);
	if( !ACLController::checkAccess($focus->module_dir, 'edit', $focus->isOwner($current_user->id))){
		ACLController::displayNoAccess(true);
	}
	$check_notify = FALSE;
	if (isset($GLOBALS['check_notify'])) {
		$check_notify = $GLOBALS['check_notify'];
	}

	$focus->save($check_notify);

	if(!empty($_POST['duplicate_parent_id'])){
		clone_relationship($focus->db, array('opportunities_contacts'),'opportunity_id',  $_POST['duplicate_parent_id'], $focus->id);
	}
	$return_id = $focus->id;
	
	$GLOBALS['log']->debug("Saved record with id of ".$return_id);
	if($redirect){
		handleRedirect($return_id,"Opportunities" );
	}else{
		return $focus;
	}
}

}
?>
