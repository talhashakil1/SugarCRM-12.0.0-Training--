<?php
/* Smarty version 3.1.39, created on 2022-07-29 18:17:52
  from '/var/www/html/SugarEnt-Full-12.0.0/cache/modules/ACLRoles/SearchFormFooter.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_62e3de0053b0c8_61862511',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3212afac03e3a17b1d2b9a0ab904248d87556cc7' => 
    array (
      0 => '/var/www/html/SugarEnt-Full-12.0.0/cache/modules/ACLRoles/SearchFormFooter.tpl',
      1 => 1659100672,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62e3de0053b0c8_61862511 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/SugarEnt-Full-12.0.0/include/SugarSmarty/plugins/function.sugar_translate.php','function'=>'smarty_function_sugar_translate',),));
?>

</form>
<?php echo '<script'; ?>
>
function toggleInlineSearch()
{
    var $trigger = $("#tabFormAdvLink");
    if (document.getElementById('inlineSavedSearch').style.display == 'none'){
        document.getElementById('showSSDIV').value = 'yes'		
        document.getElementById('inlineSavedSearch').style.display = '';
        $trigger.attr("title", "<?php echo smarty_function_sugar_translate(array('label'=>'LBL_ALT_HIDE_OPTIONS'),$_smarty_tpl);?>
")
            .addClass('expanded');
    }else{
        $trigger.attr("title", "<?php echo smarty_function_sugar_translate(array('label'=>'LBL_ALT_SHOW_OPTIONS'),$_smarty_tpl);?>
")
            .removeClass("expanded");
        document.getElementById('showSSDIV').value = 'no';
        document.getElementById('inlineSavedSearch').style.display = 'none';		
    }
}
<?php echo '</script'; ?>
>
<?php }
}
