<?php
/* Smarty version 3.1.39, created on 2022-07-29 18:41:48
  from '/var/www/html/SugarEnt-Full-12.0.0/include/Popups/tpls/header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_62e3e39c24d820_34818373',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0367cc4e6df082efa966310f14899eb5dca3a542' => 
    array (
      0 => '/var/www/html/SugarEnt-Full-12.0.0/include/Popups/tpls/header.tpl',
      1 => 1649221080,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62e3e39c24d820_34818373 (Smarty_Internal_Template $_smarty_tpl) {
?>{*
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
*}
<?php echo '<script'; ?>
 type="text/javascript" src="{sugar_getjspath file='include/javascript/sugar_3.js'}"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="{sugar_getjspath file='include/javascript/popup_helper.js'}"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript">
	{$ASSOCIATED_JAVASCRIPT_DATA}

function clearAll() {
   for(i=0; i < document.popup_query_form.length; i++) {
       if(/select/i.test(document.popup_query_form.elements[i].type)) {
          for(x=0; x < document.popup_query_form.elements[i].options.length; x++) {
             document.popup_query_form.elements[i].options[x].removeAttribute('selected');
          }
       }
   }
}
<?php echo '</script'; ?>
>
<?php if ((isset($_smarty_tpl->tpl_vars['formData']->value))) {?>
{$SEARCH_FORM_HEADER}
<table cellpadding="0" cellspacing="0" border="0" width="100%" class="edit view">
<tr>
<td>
<form action="index.php" method="post" name="popup_query_form" id="popup_query_form">
{sugar_csrf_form_token}
<table width="100%" cellpadding="0" cellspacing="0" border="0">
<tr><td>
{$searchForm}
</td></tr>
<tr>
<td>
<input type="hidden" name="module" value="{$module}" />
<input type="hidden" name="action" value="Popup" />
<input type="hidden" name="query" value="true" />
<input type="hidden" name="func_name" value="" />
<input type="hidden" name="request_data" value="{$request_data}" />
<input type="hidden" name="populate_parent" value="false" />
<input type="hidden" name="hide_clear_button" value="true" />
<input type="hidden" name="record_id" value="" />
{$MODE}
<input type="submit" name="button" class="button" id="search_form_submit"
	title="{$APP.LBL_SEARCH_BUTTON_TITLE}"
	value="{$APP.LBL_SEARCH_BUTTON_LABEL}" />
<input type="reset" onclick="SUGAR.searchForm.clear_form(this.form); return false;" class="button" id="search_form_clear"
	title="{$APP.LBL_CLEAR_BUTTON_TITLE}"
	value="{$APP.LBL_CLEAR_BUTTON_LABEL}"/>
</td>
<td align='right'></td>
</tr>
</table>
</form>
</td>
</tr>
</table>
<?php }
if ((isset($_smarty_tpl->tpl_vars['ADDFORM']->value))) {?>
<p>
<?php if ((isset($_smarty_tpl->tpl_vars['popupMeta']->value))) {?>
<div id='addformlink'>
<input type="button" name="showAdd" class="button" value="{$popupMeta.create.createButton}" onclick="toggleDisplay('addform');" />
</div>
<?php }?>
<div id='addform' style='display:none;position:relative;z-index:2;left:0px;top:0px;'>
<form name="form_QuickCreate_{$module}" id="form_QuickCreate_{$module}" {*onsubmit="return check_form('form_popupQuickCreate{$module}');"*} method="post" action="index.php">
{sugar_csrf_form_token}
{$ADDFORMHEADER}
<table cellpadding="0" cellspacing="0" border="0" width="100%" class="edit view">
<tr>
<td>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
<tr><td>
<input type="hidden" name="doAction" value="save" />
<input type="hidden" name="query" value="true" />
{$ADDFORM}
</td></tr>
</table></td></tr></table>
</form>
</div>
</p>
<?php }
if ($_smarty_tpl->tpl_vars['prerow']->value) {?>
	<form action="index.php" method="post" name="MassUpdate" id="MassUpdate">
{sugar_csrf_form_token}
	{$MODE}
<input type="hidden" name="mu" value="false" />
<input type='hidden' name='massupdate' value='true' />
{$massUpdateData}
<input type='hidden' name='Leads_LEAD_offset' value=''><input type='hidden' name='saved_associated_data' value=''><input type='hidden' name='module' value='{$module}'><input type='hidden' name='action' value='Popup'><input type='hidden' name='return_module' value='{$module}'><input type='hidden' name='return_action' value='Popup'><input type='hidden' name='hide_clear_button' value='true'><input type='hidden' name='current_query_by_page' value='{$current_query}'>

	{$multiSelectData}
	<input class="button" type="button" id="MassUpdate_select_button" value='{$APP.LBL_SELECT_BUTTON_LABEL}' onclick="send_back_selected('{$module}',document.MassUpdate,'mass[]','{$APP.ERR_NOTHING_SELECTED}');">
<?php }
}
}
