<?php
/* Smarty version 3.1.39, created on 2022-07-21 19:33:42
  from '/var/www/html/SugarEnt-Full-12.0.0/include/EditView/SugarVCR.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_62d963c65c0a73_98980044',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b67f97b1b1f6618dd2be0ff0e282de271376caaa' => 
    array (
      0 => '/var/www/html/SugarEnt-Full-12.0.0/include/EditView/SugarVCR.tpl',
      1 => 1649221080,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62d963c65c0a73_98980044 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/SugarEnt-Full-12.0.0/include/SugarSmarty/plugins/function.sugar_getimage.php','function'=>'smarty_function_sugar_getimage',),));
?>
<table border="0" cellpadding="0" cellspacing="0" width="100%">
    <tr>
        <td nowrap class="paginationWrapper">
            <?php if (!empty($_smarty_tpl->tpl_vars['list_link']->value)) {?>
            <button type="button" id="save_and_continue" class="button" title="<?php echo $_smarty_tpl->tpl_vars['app_strings']->value['LBL_SAVE_AND_CONTINUE'];?>
" onClick="this.form.action.value='Save';if(check_form('EditView')){sendAndRedirect('EditView', '<?php echo $_smarty_tpl->tpl_vars['app_strings']->value['LBL_SAVING'];?>
 <?php echo $_smarty_tpl->tpl_vars['module']->value;?>
...', '<?php echo $_smarty_tpl->tpl_vars['list_link']->value;?>
');}">
                <?php echo $_smarty_tpl->tpl_vars['app_strings']->value['LBL_SAVE_AND_CONTINUE'];?>

            </button>
            &nbsp;&nbsp;&nbsp;&nbsp;
            <?php }?>
            <span class="pagination">
                <?php if (!empty($_smarty_tpl->tpl_vars['previous_link']->value)) {?>
                <button type="button" class="button" title="<?php echo $_smarty_tpl->tpl_vars['app_strings']->value['LNK_LIST_PREVIOUS'];?>
" onClick="document.location.href='<?php echo $_smarty_tpl->tpl_vars['previous_link']->value;?>
';">
                    <?php echo smarty_function_sugar_getimage(array('name'=>"previous",'attr'=>"border=\"0\" align=\"absmiddle\"",'ext'=>".gif",'alt'=>$_smarty_tpl->tpl_vars['app_strings']->value['LNK_LIST_PREVIOUS']),$_smarty_tpl);?>

                </button>
                <?php } else { ?>
                <button type="button" class="button" title="<?php echo $_smarty_tpl->tpl_vars['app_strings']->value['LNK_LIST_PREVIOUS'];?>
" disabled='true'>
                    <?php echo smarty_function_sugar_getimage(array('name'=>"previous_off",'attr'=>"border=\"0\" align=\"absmiddle\"",'ext'=>".gif",'alt'=>$_smarty_tpl->tpl_vars['app_strings']->value['LNK_LIST_PREVIOUS']),$_smarty_tpl);?>

                </button>
                <?php }?>
                &nbsp;&nbsp;
                (<?php echo $_smarty_tpl->tpl_vars['offset']->value;
if (!empty($_smarty_tpl->tpl_vars['total']->value)) {?> <?php echo $_smarty_tpl->tpl_vars['app_strings']->value['LBL_LIST_OF'];?>
 <?php echo $_smarty_tpl->tpl_vars['total']->value;
echo $_smarty_tpl->tpl_vars['plus']->value;
}?>)
                &nbsp;&nbsp;
                <?php if (!empty($_smarty_tpl->tpl_vars['next_link']->value)) {?>
                <button type="button" class="button" title="<?php echo $_smarty_tpl->tpl_vars['app_strings']->value['LNK_LIST_NEXT'];?>
" onClick="document.location.href='<?php echo $_smarty_tpl->tpl_vars['next_link']->value;?>
';">
                    <?php echo smarty_function_sugar_getimage(array('name'=>"next",'attr'=>"border=\"0\" align=\"absmiddle\"",'ext'=>".gif",'alt'=>$_smarty_tpl->tpl_vars['app_strings']->value['LNK_LIST_NEXT']),$_smarty_tpl);?>

                </button>
                <?php } else { ?>
                <button type="button" class="button" title="<?php echo $_smarty_tpl->tpl_vars['app_strings']->value['LNK_LIST_NEXT'];?>
" disabled="true">
                    <?php echo smarty_function_sugar_getimage(array('name'=>"next_off",'attr'=>"border=\"0\" align=\"absmiddle\"",'ext'=>".gif",'alt'=>$_smarty_tpl->tpl_vars['app_strings']->value['LNK_LIST_NEXT']),$_smarty_tpl);?>

                </button>
                <?php }?>
            </span>
            &nbsp;&nbsp;
        </td>
    </tr>
</table>
<?php }
}
