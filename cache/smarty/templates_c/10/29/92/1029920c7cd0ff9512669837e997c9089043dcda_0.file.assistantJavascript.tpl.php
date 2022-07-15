<?php
/* Smarty version 3.1.39, created on 2022-07-15 11:24:32
  from '/var/www/html/SugarEnt-Full-12.0.0/modules/ModuleBuilder/tpls/assistantJavascript.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_62d10820641fc2_69637736',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1029920c7cd0ff9512669837e997c9089043dcda' => 
    array (
      0 => '/var/www/html/SugarEnt-Full-12.0.0/modules/ModuleBuilder/tpls/assistantJavascript.tpl',
      1 => 1649221076,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62d10820641fc2_69637736 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
>

if(typeof(Assistant)!="undefined" && Assistant.mbAssistant){
	//Assistant.mbAssistant.render(document.body);

<?php if ($_smarty_tpl->tpl_vars['userPref']->value) {?>
	Assistant.processUserPref("<?php echo $_smarty_tpl->tpl_vars['userPref']->value;?>
");
<?php }
if ($_smarty_tpl->tpl_vars['assistant']->value['key'] && $_smarty_tpl->tpl_vars['assistant']->value['group']) {?>
	Assistant.mbAssistant.setBody(SUGAR.language.get('ModuleBuilder','assistantHelp').<?php echo $_smarty_tpl->tpl_vars['assistant']->value['group'];?>
.<?php echo $_smarty_tpl->tpl_vars['assistant']->value['key'];?>
);
<?php }?>

	if(Assistant.mbAssistant.visible){
		Assistant.mbAssistant.show();
		}
}

<?php echo '</script'; ?>
>
<?php }
}
