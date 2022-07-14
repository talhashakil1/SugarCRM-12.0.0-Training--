<?php
/* Smarty version 3.1.39, created on 2022-07-13 17:57:49
  from '/var/www/html/SugarEnt-Full-12.0.0/modules/Connectors/tpls/source_properties.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_62cec14d7a1e59_82207787',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6be52fb97451dd1f2b067589363df038466a82ce' => 
    array (
      0 => '/var/www/html/SugarEnt-Full-12.0.0/modules/Connectors/tpls/source_properties.tpl',
      1 => 1649221076,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62cec14d7a1e59_82207787 (Smarty_Internal_Template $_smarty_tpl) {
?>
<br/>
<?php if ($_smarty_tpl->tpl_vars['no_connector']->value) {?>
<span class="error workflow-sunset"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['mod']->value['ERROR_NO_CONNECTOR'], ENT_QUOTES, 'UTF-8', true);?>
</span>
<br />
<?php } else {
if (!empty($_smarty_tpl->tpl_vars['connector_language']->value['LBL_LICENSING_INFO'])) {
echo $_smarty_tpl->tpl_vars['connector_language']->value['LBL_LICENSING_INFO'];?>

<?php }?>
<br/>
<table width="100%" border="0" cellspacing="1" cellpadding="0" >
<?php if (!empty($_smarty_tpl->tpl_vars['properties']->value)) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['properties']->value, 'value', false, 'name');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['name']->value => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
?>
<tr>
<td class="dataLabel" width="35%">
<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['connector_language']->value[$_smarty_tpl->tpl_vars['name']->value], ENT_QUOTES, 'UTF-8', true);?>
:&nbsp;
<?php if ((isset($_smarty_tpl->tpl_vars['required_properties']->value[$_smarty_tpl->tpl_vars['name']->value]))) {?>
<span class="required">*</span>
<?php }?>
</td>
<td class="dataLabel" width="65%">
<input type="text" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['source_id']->value, ENT_QUOTES, 'UTF-8', true);?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8', true);?>
" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['source_id']->value, ENT_QUOTES, 'UTF-8', true);?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8', true);?>
" size="75" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8', true);?>
"></td>
</tr>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
if ($_smarty_tpl->tpl_vars['hasTestingEnabled']->value) {?>
<tr>
<td class="dataLabel" colspan="2">
<input id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['source_id']->value, ENT_QUOTES, 'UTF-8', true);?>
_test_button" type="button" class="button" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['mod']->value['LBL_TEST_SOURCE'], ENT_QUOTES, 'UTF-8', true);?>
" onclick="run_test('<?php echo strtr($_smarty_tpl->tpl_vars['source_id']->value, array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
');">
</td>
</tr>
<tr>
<td class="dataLabel" colspan="2">
<span id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['source_id']->value, ENT_QUOTES, 'UTF-8', true);?>
_result">&nbsp;</span>
</td>
</tr>
<?php }
} else { ?>
<tr>
<td class="dataLabel" colspan="2">&nbsp;</td>
<td class="dataLabel" colspan="2"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['mod']->value['LBL_NO_PROPERTIES'], ENT_QUOTES, 'UTF-8', true);?>
</td>
</tr>
<?php }?>
</table>

<?php echo '<script'; ?>
 type="text/javascript">
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['required_properties']->value, 'label', false, 'id');
$_smarty_tpl->tpl_vars['label']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['id']->value => $_smarty_tpl->tpl_vars['label']->value) {
$_smarty_tpl->tpl_vars['label']->do_else = false;
?>
addToValidate("ModifyProperties", "<?php echo strtr($_smarty_tpl->tpl_vars['source_id']->value, array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
_<?php echo strtr($_smarty_tpl->tpl_vars['id']->value, array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
", "alpha", true, "<?php echo strtr($_smarty_tpl->tpl_vars['label']->value, array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
");
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
echo '</script'; ?>
>
<?php }
}
}
