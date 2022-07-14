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

global $app_list_strings;
global $beanList;
global $theme;

require_once('include/workflow/workflow_utils.php');

    $target_module = InputValidation::getService()->getValidInputRequest('target_module_or_link', null, '');

    if (!$target_module) {
        sugar_die("Target_module required");
    }

    $iframe_type = InputValidation::getService()->getValidInputRequest('iframe_type', null, '');
    $base_module = InputValidation::getService()->getValidInputRequest('base_module', 'Assert\Mvc\ModuleName', '');
//iframe_type/////////////////////////////////////
//rel_mod
//rel_mod_fields
//base_fields	

	if($iframe_type=="rel_mod"){
		$temp_module = BeanFactory::newBean($target_module);
		$temp_module->call_vardef_handler("template_rel_filter");
		$temp_module->vardef_handler->start_none=true;
		$temp_module->vardef_handler->start_none_lbl = $GLOBALS['mod_strings']['LBL_PLEASE_SELECT'];
		$target_dropdown = get_select_options_with_id($temp_module->vardef_handler->get_vardef_array(true, true, true, true, false, false),"");
		$ext_value = "";
        $copyTextOnStart = false;
	//end if iframe_type is rel_mod
	}
	if($iframe_type=="rel_mod_fields"){
		
		$temp_module = BeanFactory::newBean($base_module);
		$rel_attribute_name = "";
		//First, see if there is a link field with the name of the related module
		if (!empty($temp_module->field_defs[$target_module]) 
			&& !empty($temp_module->field_defs[$target_module]['relationship']))
		{
			$rel_attribute_name = $temp_module->field_defs[$target_module]['relationship'];		
		}
		elseif (!empty($temp_module->field_defs[strtolower($target_module)]) 
			&& !empty($temp_module->field_defs[strtolower($target_module)]['relationship']))
		{
			$rel_attribute_name = $temp_module->field_defs[strtolower($target_module)]['relationship'];		
		}
		else 
		{
			//Next, Find the first link field associated with the requested module
			foreach($temp_module->get_linked_fields() as $name => $def)
			{
				if (isset($def['module']) && $def['module'] == $target_module && !empty($def['relationship']))
				{
					$rel_attribute_name = $def['relationship'];
					break;
				}
			}
		}
		$rel_module = get_rel_module_name($base_module, $rel_attribute_name, $temp_module->db);
		$temp_module = BeanFactory::newBean($rel_module);
		$temp_module->call_vardef_handler("template_filter");
		$temp_module->vardef_handler->extra_array['href_link'] = $GLOBALS['mod_strings']['LBL_LINK_RECORD'];
		$target_dropdown = get_select_options_with_id($temp_module->vardef_handler->get_vardef_array(true),"");
		$ext_value = $base_module."::".$target_module;
        $copyTextOnStart = true;
	}
	if($iframe_type=="base_fields"){
		$temp_module = BeanFactory::newBean($target_module);
		$temp_module->call_vardef_handler("template_filter");
		$temp_module->vardef_handler->extra_array['href_link'] = $GLOBALS['mod_strings']['LBL_LINK_RECORD'];
		if($target_module=="Meetings" || $target_module=="Calls" || $target_module=="meetings" || $target_module=="calls"){
			$temp_module->vardef_handler->extra_array['invite_link'] = $GLOBALS['mod_strings']['LBL_INVITE_LINK'];
		}
		$target_dropdown = get_select_options_with_id($temp_module->vardef_handler->get_vardef_array(true),"");		
		$ext_value = $target_module;
        $copyTextOnStart = true;
	}		
	

    $langHeader = get_language_header();
////////////HTML DISPLAY AREA////////////////////	
?>
<html <?=$langHeader;?> >
<head>
    <?= SugarThemeRegistry::current()->getCSS();?>
    <style type='text/css'> body {background-color: transparent}</style>
</head>
<body>
<form name="EditView">

    <select id="target_dropdown" name="target_dropdown" tabindex="2"
        <?php if (!empty($copyTextOnStart)) : ?>
            onchange="window.parent.copy_text('fields_iframe', 'variable_text');">
        <?php else : ?>
            onchange="window.parent.togglefields('rel_iframe', 'fields_iframe', 'base_module');">
        <?php endif; ?>
        <?= $target_dropdown; ?>
    </select>
    <input type="hidden" id="ext1" name="ext1" value="<?=htmlspecialchars($ext_value, ENT_QUOTES, 'UTF-8');?>">
    <input type="hidden" id="ext2" name="ext2" value="<?=htmlspecialchars($iframe_type, ENT_QUOTES, 'UTF-8');?>">
</form>
<?php if (!empty($copyTextOnStart)) :?>
<script>
    window.parent.copy_text('fields_iframe', 'variable_text');
</script>
<?php endif;?>
</body>
</html>
