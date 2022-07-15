<?php
/* Smarty version 3.1.39, created on 2022-07-15 14:44:15
  from '/var/www/html/SugarEnt-Full-12.0.0/modules/Administration/templates/RepairDatabase.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_62d136ef747a88_75054377',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9e067577b272f5a5b82c289c369a20676b3f0fad' => 
    array (
      0 => '/var/www/html/SugarEnt-Full-12.0.0/modules/Administration/templates/RepairDatabase.tpl',
      1 => 1649221076,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62d136ef747a88_75054377 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/SugarEnt-Full-12.0.0/include/SugarSmarty/plugins/function.sugar_csrf_form_token.php','function'=>'smarty_function_sugar_csrf_form_token',),));
?>

<h3><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_REPAIR_DATABASE_DIFFERENCES'];?>
</h3>
<p><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_REPAIR_DATABASE_TEXT'];?>
</p>
<form name="RepairDatabaseForm" method="post">
    <?php echo smarty_function_sugar_csrf_form_token(array(),$_smarty_tpl);?>

    <input type="hidden" name="module" value="Administration"/>
    <input type="hidden" name="action" value="repairDatabase"/>
    <input type="hidden" name="raction" value="execute"/>
    <textarea name="sql" rows="24" cols="150" id="repairsql" disabled><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['qry_str']->value, ENT_QUOTES, 'UTF-8', true);?>
</textarea>
    <br/>
    <input type="submit" class="button" value="<?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_REPAIR_DATABASE_EXECUTE'];?>
"/>
</form>
<?php }
}
