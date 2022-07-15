<?php
/* Smarty version 3.1.39, created on 2022-07-15 14:44:50
  from '/var/www/html/SugarEnt-Full-12.0.0/modules/ModuleBuilder/tpls/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_62d137122f3495_88207265',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '522c04493330f8cbaae56444822be6d73553a611' => 
    array (
      0 => '/var/www/html/SugarEnt-Full-12.0.0/modules/ModuleBuilder/tpls/index.tpl',
      1 => 1649221076,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:modules/ModuleBuilder/tpls/assistantJavascript.tpl' => 1,
  ),
),false)) {
function content_62d137122f3495_88207265 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/SugarEnt-Full-12.0.0/include/SugarSmarty/plugins/function.sugar_getjspath.php','function'=>'smarty_function_sugar_getjspath',),));
?>
<iframe id="yui-history-iframe" src="index.php?entryPoint=getImage&imageName=sugar-yui-sprites-grey.png" title="index.php?entryPoint=getImage&imageName=sugar-yui-sprites-grey.png"></iframe>
<input id="yui-history-field" type="hidden">
<div class='ytheme-gray' id='mblayout' style="position:relative; height:0px; overflow:visible;">
</div>
<div id='mbcenter'>
<div id='mbtabs'></div>
<?php echo $_smarty_tpl->tpl_vars['CENTER']->value;?>

</div>

<div id='mbeast' class="x-layout-inactive-content">
<?php echo $_smarty_tpl->tpl_vars['PROPERTIES']->value;?>

</div>
<div id='mbeast2' class="x-layout-inactive-content">
</div>
<div id='mbhelp' class="x-hidden"></div>
<div id='mbwest' class="x-hidden">
<div id='package_tree' class="x-hidden"></div>
<?php echo $_smarty_tpl->tpl_vars['TREE']->value;?>

</div>
<div id='mbsouth' class="x-hidden">
</div>
<?php echo $_smarty_tpl->tpl_vars['tiny']->value;?>

<?php echo '<script'; ?>
>
ModuleBuilder.setMode(<?php echo $_smarty_tpl->tpl_vars['TYPE']->value;?>
);
closeMenus();
//document.getElementById('HideHandle').parentNode.style.display = 'none';
var MBLoader = new YAHOO.util.YUILoader({
    require : ["layout", "element", "tabview", "treeview", "history", "cookie", "sugarwidgets"],
    loadOptional: true,
    skin: { base: 'blank', defaultSkin: '' },
	onSuccess: ModuleBuilder.init,
    allowRollup: true,
    base: "include/javascript/yui/build/"
});
MBLoader.addModule({
    name :"sugarwidgets",
    type : "js",
    fullpath: "<?php echo smarty_function_sugar_getjspath(array('file'=>'include/javascript/sugarwidgets/SugarYUIWidgets.js'),$_smarty_tpl);?>
",
    varName: "YAHOO.SUGAR",
    requires: ["datatable", "dragdrop", "treeview", "tabview"]
});
MBLoader.insert();
<?php echo '</script'; ?>
>
<div id="footerHTML" class="y-hidden">
    <table width="100%" cellpadding="0" cellspacing="0"><tr><td nowrap="nowrap">
    <input type="button" class="button" value="<?php echo $_smarty_tpl->tpl_vars['mod']->value['LBL_HOME'];?>
" onclick="ModuleBuilder.main('home');">
    <?php if ($_smarty_tpl->tpl_vars['TEST_STUDIO']->value == true) {?>
    <input type="button" class="button" value="<?php echo $_smarty_tpl->tpl_vars['mod']->value['LBL_STUDIO'];?>
" onclick="ModuleBuilder.main('studio');">
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['ADMIN']->value == true) {?>
    <input type="button" class="button" value="<?php echo $_smarty_tpl->tpl_vars['mod']->value['LBL_MODULEBUILDER'];?>
" onclick="ModuleBuilder.main('mb');">

    <input type="button" class="button" value="<?php echo $_smarty_tpl->tpl_vars['mod']->value['LBL_SUGARPORTAL'];?>
" onclick="ModuleBuilder.main('sugarportal');">
    <?php }?>
    <input type="button" class="button" value="<?php echo $_smarty_tpl->tpl_vars['mod']->value['LBL_DROPDOWNEDITOR'];?>
" onclick="ModuleBuilder.main('dropdowns');">
    </td><td align="left">
    &nbsp;
    </td></tr></table>
</div>
<?php $_smarty_tpl->_subTemplateRender('file:modules/ModuleBuilder/tpls/assistantJavascript.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
