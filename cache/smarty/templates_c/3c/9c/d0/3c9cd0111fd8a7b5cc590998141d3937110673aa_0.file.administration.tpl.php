<?php
/* Smarty version 3.1.39, created on 2022-08-19 12:07:17
  from '/var/www/html/SugarEnt-Full-12.0.0/modules/Connectors/tpls/administration.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_62ff36a516bc43_65668111',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3c9cd0111fd8a7b5cc590998141d3937110673aa' => 
    array (
      0 => '/var/www/html/SugarEnt-Full-12.0.0/modules/Connectors/tpls/administration.tpl',
      1 => 1649221076,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62ff36a516bc43_65668111 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/SugarEnt-Full-12.0.0/include/SugarSmarty/plugins/function.sugar_getjspath.php','function'=>'smarty_function_sugar_getjspath',),));
?>
<link rel="stylesheet" type="text/css" href="<?php echo smarty_function_sugar_getjspath(array('file'=>'modules/Connectors/tpls/administration.css'),$_smarty_tpl);?>
"/>

<table class='edit view small' width="100%" border="0" cellspacing="1" cellpadding="0" >
	<tr valign="top">
		<td width="35%">
			<table  border="0" cellspacing="2" cellpadding="0" >
				<tr valign='top'>
					<td><img src="<?php echo $_smarty_tpl->tpl_vars['IMG']->value;?>
icon_ConnectorConfig.gif" class="connector-img" name="connectorConfig" onclick="document.location.href='index.php?module=Connectors&action=ModifyProperties';"></td>
					<td>&nbsp;&nbsp;</td>
					<td><b><?php echo $_smarty_tpl->tpl_vars['mod']->value['LBL_MODIFY_PROPERTIES_TITLE'];?>
</b><br/>
						<?php echo $_smarty_tpl->tpl_vars['mod']->value['LBL_MODIFY_PROPERTIES_DESC'];?>

					</td>
				</tr>
				<tr>
					<td colspan=2>&nbsp;</td>
				</tr>
				<tr valign='top'>
					<td><img src="<?php echo $_smarty_tpl->tpl_vars['IMG']->value;?>
icon_ConnectorEnable.gif" class="connector-img" name="enableImage" onclick="document.location.href='index.php?module=Connectors&action=ModifyDisplay';"></td>
					<td>&nbsp;&nbsp;</td>
					<td><b><?php echo $_smarty_tpl->tpl_vars['mod']->value['LBL_MODIFY_DISPLAY_TITLE'];?>
</b><br/>
						<?php echo $_smarty_tpl->tpl_vars['mod']->value['LBL_MODIFY_DISPLAY_DESC'];?>

					</td>
				</tr>
			</table>
		</td>
		<td width="10%">&nbsp;</td>
		<td width="35%">
			<table  border="0" cellspacing="2" cellpadding="0">
				<tr valign='top'>
					<td><img src="<?php echo $_smarty_tpl->tpl_vars['IMG']->value;?>
icon_ConnectorMap.gif" class="connector-img" name="connectorMapImg" onclick="document.location.href='index.php?module=Connectors&action=ModifyMapping';"></td>
					<td>&nbsp;&nbsp;</td>
					<td><b><?php echo $_smarty_tpl->tpl_vars['mod']->value['LBL_MODIFY_MAPPING_TITLE'];?>
</b><br/>
						<?php echo $_smarty_tpl->tpl_vars['mod']->value['LBL_MODIFY_MAPPING_DESC'];?>

					</td>
				</tr>

				<tr>
					<td colspan=2>&nbsp;</td>
				</tr>


				<tr valign='top'>
					<td>
					    <img src="<?php echo $_smarty_tpl->tpl_vars['IMG']->value;?>
icon_ConnectorSearchFields.gif" class="connector-img" name="connectorSearchImg" onclick="document.location.href='index.php?module=Connectors&action=ModifySearch';">
				    </td>
					<td>&nbsp;&nbsp;</td>
					<td>
					    <b><?php echo $_smarty_tpl->tpl_vars['mod']->value['LBL_MODIFY_SEARCH_TITLE'];?>
</b><br/>
						<?php echo $_smarty_tpl->tpl_vars['mod']->value['LBL_MODIFY_SEARCH_DESC'];?>

					</td>
				</tr>

			</table>
		</td>
		<td width="20%">&nbsp;</td>
	</tr>
</table>
<?php }
}
