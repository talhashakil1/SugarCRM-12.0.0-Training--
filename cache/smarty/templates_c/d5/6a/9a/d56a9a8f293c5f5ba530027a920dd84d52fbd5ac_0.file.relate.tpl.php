<?php
/* Smarty version 3.1.39, created on 2022-07-14 11:51:11
  from '/var/www/html/SugarEnt-Full-12.0.0/modules/DynamicFields/templates/Fields/Forms/relate.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_62cfbcdf9e59b3_68528648',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd56a9a8f293c5f5ba530027a920dd84d52fbd5ac' => 
    array (
      0 => '/var/www/html/SugarEnt-Full-12.0.0/modules/DynamicFields/templates/Fields/Forms/relate.tpl',
      1 => 1649221076,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:modules/DynamicFields/templates/Fields/Forms/coreTop.tpl' => 1,
    'file:modules/DynamicFields/templates/Fields/Forms/coreBottom.tpl' => 1,
  ),
),false)) {
function content_62cfbcdf9e59b3_68528648 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/SugarEnt-Full-12.0.0/include/SugarSmarty/plugins/function.sugar_translate.php','function'=>'smarty_function_sugar_translate',),1=>array('file'=>'/var/www/html/SugarEnt-Full-12.0.0/vendor/smarty/smarty/libs/plugins/function.html_options.php','function'=>'smarty_function_html_options',),));
$_smarty_tpl->_subTemplateRender("file:modules/DynamicFields/templates/Fields/Forms/coreTop.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<tr>
	<td class='mbLBL'><?php echo smarty_function_sugar_translate(array('module'=>"DynamicFields",'label'=>"LBL_MODULE"),$_smarty_tpl);?>
:</td>
	<td>
	<?php if ($_smarty_tpl->tpl_vars['hideLevel']->value == 0) {?>
		<?php echo smarty_function_html_options(array('name'=>"ext2",'id'=>"ext2",'selected'=>$_smarty_tpl->tpl_vars['vardef']->value['module'],'options'=>$_smarty_tpl->tpl_vars['modules']->value),$_smarty_tpl);?>

	<?php } else { ?>
		<input type='hidden' name='ext2' value='<?php echo $_smarty_tpl->tpl_vars['vardef']->value['module'];?>
'>
		<?php echo smarty_function_sugar_translate(array('module'=>$_smarty_tpl->tpl_vars['vardef']->value['module'],'label'=>"LBL_MODULE_NAME"),$_smarty_tpl);?>

	<?php }?>
	<input type='hidden' name='ext3' value='<?php echo $_smarty_tpl->tpl_vars['vardef']->value['id_name'];?>
'>
    <input type='hidden' name='is_relationship_field' value='<?php echo $_smarty_tpl->tpl_vars['is_relationship_field']->value;?>
' />
    <input type='hidden' name='is_custom_relationship' value='<?php echo $_smarty_tpl->tpl_vars['is_custom_relationship']->value;?>
' />
	</td>
</tr>
<?php $_smarty_tpl->_subTemplateRender("file:modules/DynamicFields/templates/Fields/Forms/coreBottom.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
