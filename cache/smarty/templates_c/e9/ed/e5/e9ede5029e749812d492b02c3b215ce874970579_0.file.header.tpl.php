<?php
/* Smarty version 3.1.39, created on 2022-07-21 19:33:42
  from '/var/www/html/SugarEnt-Full-12.0.0/include/DetailView/header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_62d963c661aa43_56423181',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e9ede5029e749812d492b02c3b215ce874970579' => 
    array (
      0 => '/var/www/html/SugarEnt-Full-12.0.0/include/DetailView/header.tpl',
      1 => 1649221080,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62d963c661aa43_56423181 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/SugarEnt-Full-12.0.0/include/SugarSmarty/plugins/function.sugar_button.php','function'=>'smarty_function_sugar_button',),1=>array('file'=>'/var/www/html/SugarEnt-Full-12.0.0/vendor/smarty/smarty/libs/plugins/function.counter.php','function'=>'smarty_function_counter',),2=>array('file'=>'/var/www/html/SugarEnt-Full-12.0.0/include/SugarSmarty/plugins/function.sugar_action_menu.php','function'=>'smarty_function_sugar_action_menu',),));
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
<?php if ($_smarty_tpl->tpl_vars['preForm']->value) {?>
	<?php echo $_smarty_tpl->tpl_vars['preForm']->value;?>

<?php }
echo '<script'; ?>
 type="text/javascript" src="{sugar_getjspath file='include/EditView/Panels.js'}"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 language="javascript">
SUGAR.util.doWhen(function(){
    return $("#contentTable").length == 0 && YAHOO.util.Event.DOMReady;
}, SUGAR.themes.actionMenu);
<?php echo '</script'; ?>
>


<table cellpadding="0" cellspacing="0" border="0" width="100%" id="">
<tr>
<td class="buttons" align="left" NOWRAP width="80%">
<div class="actionsContainer">
<?php if (!(isset($_smarty_tpl->tpl_vars['form']->value['buttons']))) {?>
    <?php echo smarty_function_sugar_button(array('module'=>((string)$_smarty_tpl->tpl_vars['module']->value),'id'=>"EDIT",'view'=>((string)$_smarty_tpl->tpl_vars['view']->value),'form_id'=>"formDetailView",'appendTo'=>"detail_header_buttons"),$_smarty_tpl);?>

    <?php echo smarty_function_sugar_button(array('module'=>((string)$_smarty_tpl->tpl_vars['module']->value),'id'=>"DUPLICATE",'view'=>"EditView",'form_id'=>"formDetailView",'appendTo'=>"detail_header_buttons"),$_smarty_tpl);?>

    <?php echo smarty_function_sugar_button(array('module'=>((string)$_smarty_tpl->tpl_vars['module']->value),'id'=>"DELETE",'view'=>((string)$_smarty_tpl->tpl_vars['view']->value),'form_id'=>"formDetailView",'appendTo'=>"detail_header_buttons"),$_smarty_tpl);?>

<?php } else { ?>
    <?php echo smarty_function_counter(array('assign'=>"num_buttons",'start'=>0,'print'=>false),$_smarty_tpl);?>

    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['form']->value['buttons'], 'button', false, 'val');
$_smarty_tpl->tpl_vars['button']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['val']->value => $_smarty_tpl->tpl_vars['button']->value) {
$_smarty_tpl->tpl_vars['button']->do_else = false;
?>
        <?php if (!is_array($_smarty_tpl->tpl_vars['button']->value) && in_array($_smarty_tpl->tpl_vars['button']->value,$_smarty_tpl->tpl_vars['built_in_buttons']->value)) {?>
        <?php echo smarty_function_counter(array('print'=>false),$_smarty_tpl);?>

        <?php echo smarty_function_sugar_button(array('module'=>((string)$_smarty_tpl->tpl_vars['module']->value),'id'=>$_smarty_tpl->tpl_vars['button']->value,'fields'=>$_smarty_tpl->tpl_vars['fields']->value,'view'=>"EditView",'form_id'=>"formDetailView",'appendTo'=>"detail_header_buttons"),$_smarty_tpl);?>

        <?php }?>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <?php if (count($_smarty_tpl->tpl_vars['form']->value['buttons']) > $_smarty_tpl->tpl_vars['num_buttons']->value) {?>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['form']->value['buttons'], 'button', false, 'val');
$_smarty_tpl->tpl_vars['button']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['val']->value => $_smarty_tpl->tpl_vars['button']->value) {
$_smarty_tpl->tpl_vars['button']->do_else = false;
?>
            <?php if (is_array($_smarty_tpl->tpl_vars['button']->value) && $_smarty_tpl->tpl_vars['button']->value['customCode']) {?>
                <?php echo smarty_function_sugar_button(array('module'=>((string)$_smarty_tpl->tpl_vars['module']->value),'id'=>$_smarty_tpl->tpl_vars['button']->value,'view'=>"EditView",'form_id'=>"formDetailView",'appendTo'=>"detail_header_buttons"),$_smarty_tpl);?>

            <?php }?>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <?php }?>
    <?php echo smarty_function_sugar_button(array('module'=>((string)$_smarty_tpl->tpl_vars['module']->value),'id'=>"PDFVIEW",'view'=>((string)$_smarty_tpl->tpl_vars['view']->value),'form_id'=>"formDetailView",'appendTo'=>"detail_header_buttons"),$_smarty_tpl);?>

    <?php echo smarty_function_sugar_button(array('module'=>((string)$_smarty_tpl->tpl_vars['module']->value),'id'=>"PDFEMAIL",'view'=>((string)$_smarty_tpl->tpl_vars['view']->value),'form_id'=>"formDetailView",'appendTo'=>"detail_header_buttons"),$_smarty_tpl);?>

<?php }?>

<?php if (empty($_smarty_tpl->tpl_vars['form']->value['hideAudit']) || !$_smarty_tpl->tpl_vars['form']->value['hideAudit']) {?>
    <?php echo smarty_function_sugar_button(array('module'=>((string)$_smarty_tpl->tpl_vars['module']->value),'id'=>"Audit",'view'=>"EditView",'form_id'=>"formDetailView",'appendTo'=>"detail_header_buttons"),$_smarty_tpl);?>

<?php }?>

<form action="index.php" method="post" name="DetailView" id="formDetailView">
{sugar_csrf_form_token}
    <input type="hidden" name="module" value="{$module}">
    <input type="hidden" name="record" value="{$fields.id.value}">
    <input type="hidden" name="return_action">
    <input type="hidden" name="return_module">
    <input type="hidden" name="return_id">
    <input type="hidden" name="module_tab">
    <input type="hidden" name="isDuplicate" value="false">
    <input type="hidden" name="offset" value="{$offset}">
    <input type="hidden" name="action" value="EditView">
    <input type="hidden" name="sugar_body_only">
<?php if ((isset($_smarty_tpl->tpl_vars['form']->value['hidden']))) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['form']->value['hidden'], 'field');
$_smarty_tpl->tpl_vars['field']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['field']->value) {
$_smarty_tpl->tpl_vars['field']->do_else = false;
echo $_smarty_tpl->tpl_vars['field']->value;?>

<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}?>
</form>
<?php echo smarty_function_sugar_action_menu(array('id'=>"detail_header_action_menu",'buttons'=>$_smarty_tpl->tpl_vars['detail_header_buttons']->value,'class'=>"fancymenu"),$_smarty_tpl);?>


</div>

</td>


<td align="right" width="20%">{$ADMIN_EDIT}
	<?php if ($_smarty_tpl->tpl_vars['panelCount']->value == 0) {?>
	    		<?php if ($_smarty_tpl->tpl_vars['SHOW_VCR_CONTROL']->value) {?>
			{$PAGINATION}
		<?php }?>
		<?php echo smarty_function_counter(array('name'=>"panelCount",'print'=>false),$_smarty_tpl);?>

	<?php }?>
</td>
<?php if (!empty($_smarty_tpl->tpl_vars['form']->value) && (isset($_smarty_tpl->tpl_vars['form']->value['links']))) {?>
	<td align="right" width="10%">&nbsp;</td>
	<td align="right" width="100%" NOWRAP class="buttons">
        <div class="actionsContainer">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['form']->value['links'], 'link');
$_smarty_tpl->tpl_vars['link']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['link']->value) {
$_smarty_tpl->tpl_vars['link']->do_else = false;
?>
                <?php echo $_smarty_tpl->tpl_vars['link']->value;?>
&nbsp;
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>
	</td>
<?php }?>
</tr>
</table>
<?php }
}
