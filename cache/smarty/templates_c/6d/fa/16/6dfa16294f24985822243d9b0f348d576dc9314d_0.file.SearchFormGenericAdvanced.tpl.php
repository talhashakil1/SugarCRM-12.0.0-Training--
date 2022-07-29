<?php
/* Smarty version 3.1.39, created on 2022-07-29 18:41:48
  from '/var/www/html/SugarEnt-Full-12.0.0/include/SearchForm/tpls/SearchFormGenericAdvanced.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_62e3e39c1d5e19_58230685',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6dfa16294f24985822243d9b0f348d576dc9314d' => 
    array (
      0 => '/var/www/html/SugarEnt-Full-12.0.0/include/SearchForm/tpls/SearchFormGenericAdvanced.tpl',
      1 => 1649221080,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62e3e39c1d5e19_58230685 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/SugarEnt-Full-12.0.0/vendor/smarty/smarty/libs/plugins/function.math.php','function'=>'smarty_function_math',),1=>array('file'=>'/var/www/html/SugarEnt-Full-12.0.0/include/SugarSmarty/plugins/function.sugar_field.php','function'=>'smarty_function_sugar_field',),));
?>
{*
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
>
	$(function() {
	var $dialog = $('<div></div>')
		.html(SUGAR.language.get('app_strings', 'LBL_SEARCH_HELP_TEXT'))
		.dialog({
			autoOpen: false,
			title: SUGAR.language.get('app_strings', 'LBL_SEARCH_HELP_TITLE'),
			width: 700
		});
		
		$('.help-search').click(function() {
		$dialog.dialog('open');
		// prevent the default action, e.g., following a link
	});
	
	});
<?php echo '</script'; ?>
>
<table width="100%" cellspacing="0" cellpadding="0" border="0">
<tr>
<?php $_smarty_tpl->_assignInScope('accesskeycount', 0);?>  <?php $_smarty_tpl->_assignInScope('ACCKEY', '');
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['formData']->value, 'colData', false, 'col', 'colIteration', array (
));
$_smarty_tpl->tpl_vars['colData']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['col']->value => $_smarty_tpl->tpl_vars['colData']->value) {
$_smarty_tpl->tpl_vars['colData']->do_else = false;
?>
    <?php echo smarty_function_math(array('assign'=>"accesskeycount",'equation'=>((string)$_smarty_tpl->tpl_vars['accesskeycount']->value)." + 1"),$_smarty_tpl);?>

    <?php if ($_smarty_tpl->tpl_vars['accesskeycount']->value == 1) {?> <?php $_smarty_tpl->_assignInScope('ACCKEY', $_smarty_tpl->tpl_vars['APP']->value['LBL_FIRST_INPUT_SEARCH_KEY']);?> <?php } else { ?> <?php $_smarty_tpl->_assignInScope('ACCKEY', '');?> <?php }?>

	
	<?php if (!empty($_smarty_tpl->tpl_vars['colData']->value['field']['name'])) {?>
	
		{if $fields.<?php echo $_smarty_tpl->tpl_vars['colData']->value['field']['name'];?>
.acl > 0}
	<?php }?>
	{counter assign=index}
	{math equation="left % right"
   		  left=$index
          right=$templateMeta.maxColumns
          assign=modVal
    }
	{if ($index % $templateMeta.maxColumns == 1 && $index != 1)}
        {if $isHelperShown==0}
            {assign var="isHelperShown" value="1"}
            <td class="helpIcon" width="*">
                <img alt="{$APP.LBL_SEARCH_HELP_TITLE}" id="helper_popup_image" border="0" src='{sugar_getimagepath file="help-dashlet.gif"}' class="help-search">
            </td>
        {else}
            <td>&nbsp;</td>
        {/if}
		</tr><tr>
	{/if}
	
	<td scope="row" nowrap="nowrap" width='<?php echo $_smarty_tpl->tpl_vars['templateMeta']->value['widths']['label'];?>
%' >
	<?php if ((isset($_smarty_tpl->tpl_vars['colData']->value['field']['label']))) {?>	
		<label for='<?php echo $_smarty_tpl->tpl_vars['colData']->value['field']['name'];?>
'>{sugar_translate label='<?php echo $_smarty_tpl->tpl_vars['colData']->value['field']['label'];?>
' module='<?php echo $_smarty_tpl->tpl_vars['module']->value;?>
'}</label>
    <?php } elseif ((isset($_smarty_tpl->tpl_vars['fields']->value[$_smarty_tpl->tpl_vars['colData']->value['field']['name']]))) {?>
		<label for='<?php echo $_smarty_tpl->tpl_vars['fields']->value[$_smarty_tpl->tpl_vars['colData']->value['field']['name']]['name'];?>
'>{sugar_translate label='<?php echo $_smarty_tpl->tpl_vars['fields']->value[$_smarty_tpl->tpl_vars['colData']->value['field']['name']]['vname'];?>
' module='<?php echo $_smarty_tpl->tpl_vars['module']->value;?>
'}</label>
	<?php }?>
	</td>
	<td  nowrap="nowrap" width='<?php echo $_smarty_tpl->tpl_vars['templateMeta']->value['widths']['field'];?>
%'>
	<?php if ($_smarty_tpl->tpl_vars['fields']->value[$_smarty_tpl->tpl_vars['colData']->value['field']['name']]) {?>
		<?php echo smarty_function_sugar_field(array('parentFieldArray'=>'fields','accesskey'=>$_smarty_tpl->tpl_vars['ACCKEY']->value,'vardef'=>$_smarty_tpl->tpl_vars['fields']->value[$_smarty_tpl->tpl_vars['colData']->value['field']['name']],'displayType'=>$_smarty_tpl->tpl_vars['displayType']->value,'displayParams'=>$_smarty_tpl->tpl_vars['colData']->value['field']['displayParams'],'typeOverride'=>$_smarty_tpl->tpl_vars['colData']->value['field']['type'],'formName'=>$_smarty_tpl->tpl_vars['form_name']->value),$_smarty_tpl);?>

   	<?php }?>
   	</td>
		<?php if (!empty($_smarty_tpl->tpl_vars['colData']->value['field']['name'])) {?>
			{/if}
		<?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	</tr>
<tr>
	<td colspan='20'>
		&nbsp;
	</td>
</tr>	
{if $DISPLAY_SAVED_SEARCH}
<tr>
	<td colspan='2'>
    <a class='tabFormAdvLink' id='tabFormAdvLink' href='javascript:toggleInlineSearch()' title="{sugar_translate label='LBL_ALT_SHOW_OPTIONS'}">
        {sugar_getimage alt=$alt_show_hide name="advanced_search" ext=".gif" other_attributes='border="0" class="tabFormAdvLink-icon tabFormAdvLink-advanced" '}{sugar_getimage alt=$alt_show_hide name="basic_search" ext=".gif" other_attributes='border="0" class="tabFormAdvLink-icon tabFormAdvLink-basic" '}&nbsp;{$APP.LNK_SAVED_VIEWS}
		</a><br>
		<input type='hidden' id='showSSDIV' name='showSSDIV' value='{$SHOWSSDIV}'><p>
	</td>
	<td scope='row' width='10%' nowrap="nowrap">
		{sugar_translate label='LBL_SAVE_SEARCH_AS' module='SavedSearch'}:
	</td>
	<td width='30%' nowrap>
		<input type='text' name='saved_search_name'>
		<input type='hidden' name='search_module' value=''>
		<input type='hidden' name='saved_search_action' value=''>
		<input title='{$APP.LBL_SAVE_BUTTON_LABEL}' value='{$APP.LBL_SAVE_BUTTON_LABEL}' class='button' type='button' name='saved_search_submit' onclick='SUGAR.savedViews.setChooser(); return SUGAR.savedViews.saved_search_action("save");'>
	</td>
	<td scope='row' width='10%' nowrap="nowrap">
	    {sugar_translate label='LBL_MODIFY_CURRENT_SEARCH' module='SavedSearch'}:
	</td>
	<td width='30%' nowrap>
        <input class='button' onclick='SUGAR.savedViews.setChooser(); return SUGAR.savedViews.saved_search_action("update")' value='{$APP.LBL_UPDATE}' title='{$APP.LBL_UPDATE}' name='ss_update' id='ss_update' type='button' >
		<input class='button' onclick='return SUGAR.savedViews.saved_search_action("delete", "{sugar_translate label='LBL_DELETE_CONFIRM' module='SavedSearch'}")' value='{$APP.LBL_DELETE}' title='{$APP.LBL_DELETE}' name='ss_delete' id='ss_delete' type='button'>
		<br><span id='curr_search_name'></span>
	</td>
</tr>

<tr>
<td colspan='6'>
<div style='{$DISPLAYSS}' id='inlineSavedSearch' >
	{$SAVED_SEARCH}
</div>
</td>
</tr>

{/if}
{if $displayType != 'popupView'}
<tr>
	<td colspan='5'>
        <input tabindex='2' title='{$APP.LBL_SEARCH_BUTTON_TITLE}' onclick='SUGAR.savedViews.setChooser()' class='button' type='submit' name='button' value='{$APP.LBL_SEARCH_BUTTON_LABEL}' id='search_form_submit_advanced'/>&nbsp;
        <input tabindex='2' title='{$APP.LBL_CLEAR_BUTTON_TITLE}'  onclick='SUGAR.searchForm.clear_form(this.form); document.getElementById("saved_search_select").options[0].selected=true; return false;' class='button' type='button' name='clear' id='search_form_clear_advanced' value='{$APP.LBL_CLEAR_BUTTON_LABEL}'/>
        {if $DOCUMENTS_MODULE}
        &nbsp;<input title="{$APP.LBL_BROWSE_DOCUMENTS_BUTTON_TITLE}" type="button" class="button" value="{$APP.LBL_BROWSE_DOCUMENTS_BUTTON_LABEL}" onclick='open_popup("Documents", 600, 400, "&caller=Documents", true, false, "");' />
        {/if}
        <a id="basic_search_link" onclick="SUGAR.searchForm.searchFormSelect('{$module}|basic_search','{$module}|advanced_search')" href="javascript:void(0)" accesskey="{$APP.LBL_ADV_SEARCH_LNK_KEY}" >{$APP.LNK_BASIC_SEARCH}</a>
        <span class='white-space'>
            &nbsp;&nbsp;&nbsp;{if $SAVED_SEARCHES_OPTIONS}|&nbsp;&nbsp;&nbsp;<b>{$APP.LBL_SAVED_SEARCH_SHORTCUT}</b>&nbsp;
            {$SAVED_SEARCHES_OPTIONS} {/if}
            <span id='go_btn_span' style='display:none'><input tabindex='2' title='go_select' id='go_select'  onclick='SUGAR.searchForm.clear_form(this.form);' class='button' type='button' name='go_select' value=' {$APP.LBL_GO_BUTTON_LABEL} '/></span>	
        </span>
	</td>
	<td class="help">
	    {if $DISPLAY_SEARCH_HELP}
	    <img  border='0' src='{sugar_getimagepath file="help-dashlet.gif"}' class="help-search">
	    {/if}
    </td>
</tr>
{/if}
</table>

<?php echo '<script'; ?>
>
	if(typeof(loadSSL_Scripts)=='function'){
		loadSSL_Scripts();
	}
<?php echo '</script'; ?>
>
<?php }
}
