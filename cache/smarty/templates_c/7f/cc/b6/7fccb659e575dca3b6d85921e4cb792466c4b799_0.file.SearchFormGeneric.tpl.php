<?php
/* Smarty version 3.1.39, created on 2022-07-22 19:17:37
  from '/var/www/html/SugarEnt-Full-12.0.0/include/SearchForm/tpls/SearchFormGeneric.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_62dab181605985_10012249',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7fccb659e575dca3b6d85921e4cb792466c4b799' => 
    array (
      0 => '/var/www/html/SugarEnt-Full-12.0.0/include/SearchForm/tpls/SearchFormGeneric.tpl',
      1 => 1649221080,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62dab181605985_10012249 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/SugarEnt-Full-12.0.0/vendor/smarty/smarty/libs/plugins/function.math.php','function'=>'smarty_function_math',),1=>array('file'=>'/var/www/html/SugarEnt-Full-12.0.0/include/SugarSmarty/plugins/function.sugar_field.php','function'=>'smarty_function_sugar_field',),2=>array('file'=>'/var/www/html/SugarEnt-Full-12.0.0/include/SugarSmarty/plugins/function.sugar_button.php','function'=>'smarty_function_sugar_button',),));
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
{if !isset($templateMeta.maxColumnsBasic)}
	{assign var="basicMaxColumns" value=$templateMeta.maxColumns}
{else}
    {assign var="basicMaxColumns" value=$templateMeta.maxColumnsBasic}
{/if}
<?php echo '<script'; ?>
>
	$(function() {
	var $dialog = $('<div></div>')
		.html(SUGAR.language.get('app_strings', 'LBL_SEARCH_HELP_TEXT'))
		.dialog({
			autoOpen: false,
			title: SUGAR.language.get('app_strings', 'LBL_HELP'),
			width: 700
		});
		
		$('#filterHelp').click(function() {
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
          right=$basicMaxColumns
          assign=modVal
    }
	{if ($index % $basicMaxColumns == 1 && $index != 1)}
		</tr><tr>
	{/if}
	
	<td scope="row" nowrap="nowrap" width='1%' >
	<?php if ((isset($_smarty_tpl->tpl_vars['colData']->value['field']['label']))) {?>	
		<label for='<?php echo $_smarty_tpl->tpl_vars['colData']->value['field']['name'];?>
' >{sugar_translate label='<?php echo $_smarty_tpl->tpl_vars['colData']->value['field']['label'];?>
' module='<?php echo $_smarty_tpl->tpl_vars['module']->value;?>
'}</label>
    <?php } elseif ((isset($_smarty_tpl->tpl_vars['fields']->value[$_smarty_tpl->tpl_vars['colData']->value['field']['name']]))) {?>
		<label for='<?php echo $_smarty_tpl->tpl_vars['fields']->value[$_smarty_tpl->tpl_vars['colData']->value['field']['name']]['name'];?>
'> {sugar_translate label='<?php echo $_smarty_tpl->tpl_vars['fields']->value[$_smarty_tpl->tpl_vars['colData']->value['field']['name']]['vname'];?>
' module='<?php echo $_smarty_tpl->tpl_vars['module']->value;?>
'}
	<?php }?>
	</td>

	
	<td  nowrap="nowrap" width='1%'>
	<?php if ($_smarty_tpl->tpl_vars['fields']->value[$_smarty_tpl->tpl_vars['colData']->value['field']['name']]) {?>
		<?php echo smarty_function_sugar_field(array('parentFieldArray'=>'fields','vardef'=>$_smarty_tpl->tpl_vars['fields']->value[$_smarty_tpl->tpl_vars['colData']->value['field']['name']],'accesskey'=>$_smarty_tpl->tpl_vars['ACCKEY']->value,'displayType'=>'searchView','displayParams'=>$_smarty_tpl->tpl_vars['colData']->value['field']['displayParams'],'typeOverride'=>$_smarty_tpl->tpl_vars['colData']->value['field']['type'],'formName'=>$_smarty_tpl->tpl_vars['form_name']->value),$_smarty_tpl);?>

   	<?php }?>
		<?php if (!empty($_smarty_tpl->tpl_vars['colData']->value['field']['name'])) {?>
			{/if}
		<?php }?>
   	</td>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    {if $formData|@count >= $basicMaxColumns+1}
    </tr>
    <tr>
	<td colspan="{$searchTableColumnCount}">
    {else}
	<td class="sumbitButtons">
    {/if}
        <?php echo smarty_function_sugar_button(array('module'=>((string)$_smarty_tpl->tpl_vars['module']->value),'id'=>"search",'view'=>"searchView"),$_smarty_tpl);?>

	    <input tabindex='2' title='{$APP.LBL_CLEAR_BUTTON_TITLE}' onclick='SUGAR.searchForm.clear_form(this.form); return false;' class='button' type='button' name='clear' id='search_form_clear' value='{$APP.LBL_CLEAR_BUTTON_LABEL}'/>
        {if $HAS_ADVANCED_SEARCH}
	    &nbsp;&nbsp;<a id="advanced_search_link" onclick="SUGAR.searchForm.searchFormSelect('{$module}|advanced_search','{$module}|basic_search')" href="javascript:void(0);" accesskey="{$APP.LBL_ADV_SEARCH_LNK_KEY}" >{$APP.LNK_ADVANCED_SEARCH}</a>
	    {/if}
    </td>
	<td class="helpIcon" width="*"><img alt="Help" border='0' id="filterHelp" src='{sugar_getimagepath file="help-dashlet.gif"}'></td>
	</tr>
</table>
<?php }
}
