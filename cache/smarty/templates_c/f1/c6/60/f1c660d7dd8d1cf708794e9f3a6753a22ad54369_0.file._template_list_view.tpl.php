<?php
/* Smarty version 3.1.39, created on 2022-08-18 18:32:37
  from '/var/www/html/SugarEnt-Full-12.0.0/modules/Reports/templates/_template_list_view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_62fe3f75a96127_37222394',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f1c660d7dd8d1cf708794e9f3a6753a22ad54369' => 
    array (
      0 => '/var/www/html/SugarEnt-Full-12.0.0/modules/Reports/templates/_template_list_view.tpl',
      1 => 1649221076,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62fe3f75a96127_37222394 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/SugarEnt-Full-12.0.0/include/SugarSmarty/plugins/modifier.in_array.php','function'=>'smarty_modifier_in_array',),));
?>
<div class="listViewBody nosearch">
<table width="100%" border="0" cellpadding="0" cellspacing="0" class="list view">
<?php if (($_smarty_tpl->tpl_vars['show_pagination']->value != '')) {
echo $_smarty_tpl->tpl_vars['pagination_data']->value;?>

<?php }?>
<tr height="20">
<?php if (($_smarty_tpl->tpl_vars['isSummaryCombo']->value)) {?>
<th scope="col" align='center'  valign=middle nowrap>&nbsp;</th>
<?php }
if (($_smarty_tpl->tpl_vars['isSummaryComboHeader']->value)) {?>
<td><span id="img_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['divId']->value, ENT_QUOTES, 'UTF-8', true);?>
"><a href="javascript:expandCollapseComboSummaryDiv('<?php echo strtr($_smarty_tpl->tpl_vars['divId']->value, array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
')"><img width="8" height="8" border="0" absmiddle="" alt="<?php echo $_smarty_tpl->tpl_vars['mod_strings']->value['LBL_SHOW'];?>
" src="<?php echo $_smarty_tpl->tpl_vars['image_path']->value;?>
advanced_search.gif"/></a></span></td>
<?php }
$count = 0;
	$_smarty_tpl->assign('count', $count);
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['header_row']->value, 'cell', false, 'module');
$_smarty_tpl->tpl_vars['cell']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['module']->value => $_smarty_tpl->tpl_vars['cell']->value) {
$_smarty_tpl->tpl_vars['cell']->do_else = false;
?>
	<?php if ((($_smarty_tpl->tpl_vars['args']->value['group_column_is_invisible'] != '') && ($_smarty_tpl->tpl_vars['args']->value['group_pos'] == $_smarty_tpl->tpl_vars['count']->value))) {
$count = $count + 1;
	$_smarty_tpl->assign('count', $count);
?>
	<?php } else { ?>
		<?php if (strtolower($_smarty_tpl->tpl_vars['field_types']->value[$_smarty_tpl->tpl_vars['module']->value]) == 'currency' || strtolower($_smarty_tpl->tpl_vars['field_types']->value[$_smarty_tpl->tpl_vars['module']->value]) == 'int' || strtolower($_smarty_tpl->tpl_vars['field_types']->value[$_smarty_tpl->tpl_vars['module']->value]) == 'float' || strtolower($_smarty_tpl->tpl_vars['field_types']->value[$_smarty_tpl->tpl_vars['module']->value]) == 'double' || strtolower($_smarty_tpl->tpl_vars['field_types']->value[$_smarty_tpl->tpl_vars['module']->value]) == 'decimal') {?>
			<th scope="num" align='center'  valign=middle nowrap>
		<?php } else { ?>
	<th scope="col" align='center'  valign=middle nowrap>	
		<?php }?>
	<?php echo $_smarty_tpl->tpl_vars['cell']->value;?>

	<?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</tr>

<?php 
require_once('modules/Reports/templates/templates_reports.php');
$reporter = $_smarty_tpl->getTemplateVars('reporter');
$args = $_smarty_tpl->getTemplateVars('args');
$got_row = 0;
while (( $row = $reporter->get_next_row() ) != 0 ) {
	$got_row = 1;
	template_list_row($row, true, false, '', $_smarty_tpl);
?>
<tr height=20 class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['row_class']->value[$_smarty_tpl->tpl_vars['module']->value], ENT_QUOTES, 'UTF-8', true);?>
" onmouseover="setPointer(this, '<?php echo strtr($_smarty_tpl->tpl_vars['rownum']->value, array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
', 'over', '<?php echo strtr($_smarty_tpl->tpl_vars['bg_color']->value, array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
', '<?php echo strtr($_smarty_tpl->tpl_vars['hilite_bg']->value, array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
', '<?php echo strtr($_smarty_tpl->tpl_vars['click_bg']->value, array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
');" onmouseout="setPointer(this, '<?php echo strtr($_smarty_tpl->tpl_vars['rownum']->value, array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
', 'out', '<?php echo strtr($_smarty_tpl->tpl_vars['bg_color']->value, array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
', '<?php echo strtr($_smarty_tpl->tpl_vars['hilite_bg']->value, array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
', '<?php echo strtr($_smarty_tpl->tpl_vars['click_bg']->value, array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
');" onmousedown="setPointer(this, '<?php echo strtr($_smarty_tpl->tpl_vars['rownum']->value, array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
', 'click', '<?php echo strtr($_smarty_tpl->tpl_vars['bg_color']->value, array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
', '<?php echo strtr($_smarty_tpl->tpl_vars['hilite_bg']->value, array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
', '<?php echo strtr($_smarty_tpl->tpl_vars['click_bg']->value, array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
');">
<?php if (($_smarty_tpl->tpl_vars['isSummaryComboHeader']->value)) {?>
<td><span id="img_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['divId']->value, ENT_QUOTES, 'UTF-8', true);?>
"><a href="javascript:expandCollapseComboSummaryDiv('<?php echo strtr($_smarty_tpl->tpl_vars['divId']->value, array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
')"><img width="8" height="8" border="0" absmiddle="" alt="<?php echo $_smarty_tpl->tpl_vars['mod_strings']->value['LBL_SHOW'];?>
" src="<?php echo $_smarty_tpl->tpl_vars['image_path']->value;?>
advanced_search.gif"/></a></span></td>
<?php }
$count = 0;
	$_smarty_tpl->assign('count', $count);
$_smarty_tpl->_assignInScope('scope_row', true);
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['column_row']->value['cells'], 'cell', false, 'module');
$_smarty_tpl->tpl_vars['cell']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['module']->value => $_smarty_tpl->tpl_vars['cell']->value) {
$_smarty_tpl->tpl_vars['cell']->do_else = false;
?>
	<?php if ((($_smarty_tpl->tpl_vars['column_row']->value['group_column_is_invisible'] != '') && (smarty_modifier_in_array($_smarty_tpl->tpl_vars['count']->value,$_smarty_tpl->tpl_vars['column_row']->value['group_pos'])))) {
$count = $count + 1;
	$_smarty_tpl->assign('count', $count);
?>
	<?php } else { ?>
	<td width="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['width']->value, ENT_QUOTES, 'UTF-8', true);?>
%" valign=TOP class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['row_class']->value[$_smarty_tpl->tpl_vars['module']->value], ENT_QUOTES, 'UTF-8', true);?>
" bgcolor="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['bg_color']->value, ENT_QUOTES, 'UTF-8', true);?>
" <?php if ($_smarty_tpl->tpl_vars['scope_row']->value) {?> scope='row' <?php }?>>
	
	<?php if ($_smarty_tpl->tpl_vars['cell']->value == '') {?>
   		&nbsp;
   	<?php } else { ?>
		<?php echo $_smarty_tpl->tpl_vars['cell']->value;?>

	<?php }?>
		
	<?php }?>
	<?php $_smarty_tpl->_assignInScope('scope_row', false);
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</tr>

<?php 
}
if (!$got_row) {
	echo template_list_view_no_results($args);
} // if
echo template_pagination_row($args);
echo template_end_table($args);
echo "</div>";
template_query_table($reporter);
}
}
