<?php
/* Smarty version 3.1.39, created on 2022-07-15 12:14:39
  from '/var/www/html/SugarEnt-Full-12.0.0/modules/Administration/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_62d113df103943_31427723',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '610579b24c8a0a7e3bc4ae92d9fafe475390d319' => 
    array (
      0 => '/var/www/html/SugarEnt-Full-12.0.0/modules/Administration/index.tpl',
      1 => 1649221076,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62d113df103943_31427723 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/SugarEnt-Full-12.0.0/include/SugarSmarty/plugins/function.sugar_getjspath.php','function'=>'smarty_function_sugar_getjspath',),));
?>

<?php echo '<script'; ?>
 src="<?php echo smarty_function_sugar_getjspath(array('file'=>'modules/Administration/javascript/Administration.js'),$_smarty_tpl);?>
"><?php echo '</script'; ?>
>
<div class="dashletPanelMenu wizard">
<div class="bd">

		<div class="screen">

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ADMIN_GROUP_HEADER']->value, 'val1', false, 'j');
$_smarty_tpl->tpl_vars['val1']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['j']->value => $_smarty_tpl->tpl_vars['val1']->value) {
$_smarty_tpl->tpl_vars['val1']->do_else = false;
?>

   <?php if ((isset($_smarty_tpl->tpl_vars['GROUP_HEADER']->value[$_smarty_tpl->tpl_vars['j']->value][1]))) {?>
   <p><?php echo $_smarty_tpl->tpl_vars['GROUP_HEADER']->value[$_smarty_tpl->tpl_vars['j']->value][0];
echo $_smarty_tpl->tpl_vars['GROUP_HEADER']->value[$_smarty_tpl->tpl_vars['j']->value][1];?>

   <table class="other view">

   <?php } else { ?>
   <p><?php echo $_smarty_tpl->tpl_vars['GROUP_HEADER']->value[$_smarty_tpl->tpl_vars['j']->value][0];
echo $_smarty_tpl->tpl_vars['GROUP_HEADER']->value[$_smarty_tpl->tpl_vars['j']->value][2];?>

   <table class="other view">
   <?php }?>

    <?php $_smarty_tpl->_assignInScope('i', 0);?>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['VALUES_3_TAB']->value[$_smarty_tpl->tpl_vars['j']->value], 'admin_option', false, 'link_idx');
$_smarty_tpl->tpl_vars['admin_option']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['link_idx']->value => $_smarty_tpl->tpl_vars['admin_option']->value) {
$_smarty_tpl->tpl_vars['admin_option']->do_else = false;
?>
    <?php if ((isset($_smarty_tpl->tpl_vars['COLNUM']->value[$_smarty_tpl->tpl_vars['j']->value][$_smarty_tpl->tpl_vars['i']->value]))) {?>
    <tr>


            <td width="20%" scope="row"><?php echo $_smarty_tpl->tpl_vars['ITEM_HEADER_IMAGE']->value[$_smarty_tpl->tpl_vars['j']->value][$_smarty_tpl->tpl_vars['i']->value];?>
&nbsp;
                <a id='<?php echo $_smarty_tpl->tpl_vars['ID_TAB']->value[$_smarty_tpl->tpl_vars['j']->value][$_smarty_tpl->tpl_vars['i']->value];?>
' href='<?php echo $_smarty_tpl->tpl_vars['ITEM_URL']->value[$_smarty_tpl->tpl_vars['j']->value][$_smarty_tpl->tpl_vars['i']->value];?>
' target = '<?php echo $_smarty_tpl->tpl_vars['ITEM_TARGET']->value[$_smarty_tpl->tpl_vars['j']->value][$_smarty_tpl->tpl_vars['i']->value];?>
'
                   class="tabDetailViewDL2Link"  <?php echo (($tmp = @$_smarty_tpl->tpl_vars['ITEM_ONCLICK']->value[$_smarty_tpl->tpl_vars['j']->value][$_smarty_tpl->tpl_vars['i']->value])===null||$tmp==='' ? '' : $tmp);?>
><?php echo $_smarty_tpl->tpl_vars['ITEM_HEADER_LABEL']->value[$_smarty_tpl->tpl_vars['j']->value][$_smarty_tpl->tpl_vars['i']->value];?>
</a>
            </td>
            <td width="30%"><?php echo $_smarty_tpl->tpl_vars['ITEM_DESCRIPTION']->value[$_smarty_tpl->tpl_vars['j']->value][$_smarty_tpl->tpl_vars['i']->value];?>
</td>

            <?php $_smarty_tpl->_assignInScope('i', $_smarty_tpl->tpl_vars['i']->value+1);?>
            <?php if ($_smarty_tpl->tpl_vars['COLNUM']->value[$_smarty_tpl->tpl_vars['j']->value][$_smarty_tpl->tpl_vars['i']->value] == '0') {?>
                    <td width="20%" scope="row"><?php echo $_smarty_tpl->tpl_vars['ITEM_HEADER_IMAGE']->value[$_smarty_tpl->tpl_vars['j']->value][$_smarty_tpl->tpl_vars['i']->value];?>
&nbsp;
                        <a id='<?php echo $_smarty_tpl->tpl_vars['ID_TAB']->value[$_smarty_tpl->tpl_vars['j']->value][$_smarty_tpl->tpl_vars['i']->value];?>
' href='<?php echo $_smarty_tpl->tpl_vars['ITEM_URL']->value[$_smarty_tpl->tpl_vars['j']->value][$_smarty_tpl->tpl_vars['i']->value];?>
' target = '<?php echo $_smarty_tpl->tpl_vars['ITEM_TARGET']->value[$_smarty_tpl->tpl_vars['j']->value][$_smarty_tpl->tpl_vars['i']->value];?>
'
                           class="tabDetailViewDL2Link" <?php echo (($tmp = @$_smarty_tpl->tpl_vars['ITEM_ONCLICK']->value[$_smarty_tpl->tpl_vars['j']->value][$_smarty_tpl->tpl_vars['i']->value])===null||$tmp==='' ? '' : $tmp);?>
><?php echo $_smarty_tpl->tpl_vars['ITEM_HEADER_LABEL']->value[$_smarty_tpl->tpl_vars['j']->value][$_smarty_tpl->tpl_vars['i']->value];?>
 </a>
                    </td>
                    <td width="30%"><?php echo $_smarty_tpl->tpl_vars['ITEM_DESCRIPTION']->value[$_smarty_tpl->tpl_vars['j']->value][$_smarty_tpl->tpl_vars['i']->value];?>
</td>
            <?php } else { ?>
            <td width="20%" scope="row">&nbsp;</td>
            <td width="30%">&nbsp;</td>
            <?php }?>
   </tr>
   <?php }?>
   <?php $_smarty_tpl->_assignInScope('i', $_smarty_tpl->tpl_vars['i']->value+1);?>
   <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

</table>
<p/>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

</div>
</div>

</div>


<?php }
}
