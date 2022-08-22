<?php
/* Smarty version 3.1.39, created on 2022-08-18 18:32:37
  from '/var/www/html/SugarEnt-Full-12.0.0/modules/Reports/templates/_template_pagination.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_62fe3f75a61ea9_71014682',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b20e8a93a9eb0b49ca523836a4634cdd4bb45b29' => 
    array (
      0 => '/var/www/html/SugarEnt-Full-12.0.0/modules/Reports/templates/_template_pagination.tpl',
      1 => 1649221076,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62fe3f75a61ea9_71014682 (Smarty_Internal_Template $_smarty_tpl) {
?>
<table border="0" cellpadding="0" cellspacing="0" width="100%" class="paginationTable">
	<tr>
		<td align="right">&nbsp;&nbsp;<span class='pageNumbers'><button type='button' title='<?php echo $_smarty_tpl->tpl_vars['app_strings']->value['LNK_LIST_START'];?>
' <?php if ((isset($_smarty_tpl->tpl_vars['start_link_onclick']->value))) {?> <?php echo $_smarty_tpl->tpl_vars['start_link_onclick']->value;?>
 <?php }?> class='button' <?php if (($_smarty_tpl->tpl_vars['start_link_disabled']->value)) {?> disabled <?php }?>><?php echo $_smarty_tpl->tpl_vars['start_link_ImagePath']->value;?>
</button>&nbsp;<button type='button' title='<?php echo $_smarty_tpl->tpl_vars['app_strings']->value['LNK_LIST_PREVIOUS'];?>
' <?php if ((isset($_smarty_tpl->tpl_vars['prev_link_onclick']->value))) {?> <?php echo $_smarty_tpl->tpl_vars['prev_link_onclick']->value;?>
 <?php }?> class='button' <?php if (($_smarty_tpl->tpl_vars['prev_link_disabled']->value)) {?> disabled <?php }?>><?php echo $_smarty_tpl->tpl_vars['prev_link_ImagePath']->value;?>
</button>&nbsp;(<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['start_range']->value, ENT_QUOTES, 'UTF-8', true);?>
 - <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['end_range']->value, ENT_QUOTES, 'UTF-8', true);?>
 <?php echo $_smarty_tpl->tpl_vars['mod_strings']->value['LBL_OF'];?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['total_count']->value, ENT_QUOTES, 'UTF-8', true);?>
)&nbsp;<button type='button' title='<?php echo $_smarty_tpl->tpl_vars['app_strings']->value['LNK_LIST_NEXT'];?>
' <?php if ((isset($_smarty_tpl->tpl_vars['next_link_onclick']->value))) {?> <?php echo $_smarty_tpl->tpl_vars['next_link_onclick']->value;?>
 <?php }?> class='button' <?php if (($_smarty_tpl->tpl_vars['next_link_disabled']->value)) {?> disabled <?php }?>><?php echo $_smarty_tpl->tpl_vars['next_link_ImagePath']->value;?>
</button>&nbsp; <button type='button' title='<?php echo $_smarty_tpl->tpl_vars['app_strings']->value['LNK_LIST_END'];?>
' <?php if ((isset($_smarty_tpl->tpl_vars['end_link_onclick']->value))) {?> <?php echo $_smarty_tpl->tpl_vars['end_link_onclick']->value;?>
 <?php }?> class='button' <?php if (($_smarty_tpl->tpl_vars['end_link_disabled']->value)) {?> disabled <?php }?>><?php echo $_smarty_tpl->tpl_vars['end_link_ImagePath']->value;?>
</button></span>&nbsp;&nbsp;&nbsp;
		</td>
	</tr>
</table>		
<?php }
}
