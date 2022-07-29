<?php
/* Smarty version 3.1.39, created on 2022-07-29 18:20:41
  from '/var/www/html/SugarEnt-Full-12.0.0/modules/ACLFields/EditView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_62e3dea9b4f069_52774997',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a14189d9ffc8fb8d3d9648ecaccc0122c84482c7' => 
    array (
      0 => '/var/www/html/SugarEnt-Full-12.0.0/modules/ACLFields/EditView.tpl',
      1 => 1649221076,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62e3dea9b4f069_52774997 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/SugarEnt-Full-12.0.0/include/SugarSmarty/plugins/function.sugar_getjspath.php','function'=>'smarty_function_sugar_getjspath',),1=>array('file'=>'/var/www/html/SugarEnt-Full-12.0.0/include/SugarSmarty/plugins/function.sugar_translate.php','function'=>'smarty_function_sugar_translate',),2=>array('file'=>'/var/www/html/SugarEnt-Full-12.0.0/vendor/smarty/smarty/libs/plugins/function.counter.php','function'=>'smarty_function_counter',),3=>array('file'=>'/var/www/html/SugarEnt-Full-12.0.0/vendor/smarty/smarty/libs/plugins/function.html_options.php','function'=>'smarty_function_html_options',),));
if (!empty($_smarty_tpl->tpl_vars['FIELDS']->value)) {?>
<link rel="stylesheet" type="text/css" href="<?php echo smarty_function_sugar_getjspath(array('file'=>'modules/ModuleBuilder/tpls/ListEditor.css'),$_smarty_tpl);?>
" />
<h3><?php echo smarty_function_sugar_translate(array('label'=>'LBL_FIELDS','module'=>'ACLFields'),$_smarty_tpl);?>
</h3>
<input type='hidden' name='flc_module' value='<?php echo $_smarty_tpl->tpl_vars['FLC_MODULE']->value;?>
'> 
<table  class='detail view' border='0' cellpadding=0 cellspacing = 1  width='100%'>
		<?php echo smarty_function_counter(array('start'=>0,'name'=>'colCount','assign'=>'colCount'),$_smarty_tpl);?>

		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['FIELDS']->value, 'DEF', false, 'NAME');
$_smarty_tpl->tpl_vars['DEF']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['NAME']->value => $_smarty_tpl->tpl_vars['DEF']->value) {
$_smarty_tpl->tpl_vars['DEF']->do_else = false;
?>
		
		<?php if (($_smarty_tpl->tpl_vars['colCount']->value%4 == 0 || $_smarty_tpl->tpl_vars['colCount']->value == 0)) {?>
			<?php if ($_smarty_tpl->tpl_vars['colCount']->value != 0) {?>
				</tr>
			<?php }?>
			<tr>
		<?php }?>
			<td scope='row'><?php echo smarty_function_sugar_translate(array('label'=>$_smarty_tpl->tpl_vars['DEF']->value['label'],'module'=>$_smarty_tpl->tpl_vars['LBL_MODULE']->value),$_smarty_tpl);
if ($_smarty_tpl->tpl_vars['DEF']->value['required']) {?>*<?php }?>
			<?php if (count($_smarty_tpl->tpl_vars['DEF']->value['fields']) > 0) {?>
			<a id="d_<?php echo $_smarty_tpl->tpl_vars['NAME']->value;?>
_anchor" class='link' onclick='toggleDisplay("d_<?php echo $_smarty_tpl->tpl_vars['NAME']->value;?>
")' href='javascript:void(0)'>[+]</a><div id='d_<?php echo $_smarty_tpl->tpl_vars['NAME']->value;?>
' style='display:none'>
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['DEF']->value['fields'], 'subLabel', false, 'subField');
$_smarty_tpl->tpl_vars['subLabel']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['subField']->value => $_smarty_tpl->tpl_vars['subLabel']->value) {
$_smarty_tpl->tpl_vars['subLabel']->do_else = false;
?>
				<?php echo smarty_function_sugar_translate(array('label'=>$_smarty_tpl->tpl_vars['subLabel']->value,'module'=>$_smarty_tpl->tpl_vars['FLC_MODULE']->value),$_smarty_tpl);?>
<br><span class='fieldValue'>[<?php echo $_smarty_tpl->tpl_vars['subField']->value;?>
]</span><br>
				<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				</div>
			<?php }?>
			</td>
			
			<td>
					<div  style="display: none" id="<?php echo $_smarty_tpl->tpl_vars['DEF']->value['key'];?>
">
						<select  name='flc_guid<?php echo $_smarty_tpl->tpl_vars['DEF']->value['key'];?>
' id = 'flc_guid<?php echo $_smarty_tpl->tpl_vars['DEF']->value['key'];?>
'onblur="document.getElementById('<?php echo $_smarty_tpl->tpl_vars['DEF']->value['key'];?>
link').innerHTML=this.options[this.selectedIndex].text; aclviewer.toggleDisplay('<?php echo $_smarty_tpl->tpl_vars['DEF']->value['key'];?>
');" >
							<?php if (!empty($_smarty_tpl->tpl_vars['DEF']->value['required'])) {?>
							<?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['OPTIONS_REQUIRED']->value,'selected'=>$_smarty_tpl->tpl_vars['DEF']->value['aclaccess']),$_smarty_tpl);?>

							<?php } else { ?>
							<?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['OPTIONS']->value,'selected'=>$_smarty_tpl->tpl_vars['DEF']->value['aclaccess']),$_smarty_tpl);?>

							<?php }?>
							
						</select>
					</div>
					<div  id="<?php echo $_smarty_tpl->tpl_vars['DEF']->value['key'];?>
link" onclick="aclviewer.toggleDisplay('<?php echo $_smarty_tpl->tpl_vars['DEF']->value['key'];?>
')">
						<?php if (!empty($_smarty_tpl->tpl_vars['OPTIONS']->value[$_smarty_tpl->tpl_vars['DEF']->value['aclaccess']])) {?>
							<?php echo $_smarty_tpl->tpl_vars['OPTIONS']->value[$_smarty_tpl->tpl_vars['DEF']->value['aclaccess']];?>

						<?php } else { ?>
							<?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_NOT_DEFINED'];?>

						<?php }?>
					</div>
		</td>
		<?php echo smarty_function_counter(array('name'=>'colCount'),$_smarty_tpl);?>

		<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</tr>	
</table>
<?php }?>
	<?php }
}
