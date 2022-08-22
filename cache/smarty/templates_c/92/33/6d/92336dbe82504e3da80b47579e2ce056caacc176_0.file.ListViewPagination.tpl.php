<?php
/* Smarty version 3.1.39, created on 2022-08-18 18:48:09
  from '/var/www/html/SugarEnt-Full-12.0.0/include/ListView/ListViewPagination.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_62fe43192fa756_09745528',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '92336dbe82504e3da80b47579e2ce056caacc176' => 
    array (
      0 => '/var/www/html/SugarEnt-Full-12.0.0/include/ListView/ListViewPagination.tpl',
      1 => 1649221080,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62fe43192fa756_09745528 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/SugarEnt-Full-12.0.0/include/SugarSmarty/plugins/function.sugar_action_menu.php','function'=>'smarty_function_sugar_action_menu',),1=>array('file'=>'/var/www/html/SugarEnt-Full-12.0.0/include/SugarSmarty/plugins/function.sugar_getimage.php','function'=>'smarty_function_sugar_getimage',),));
?>


<?php $_smarty_tpl->_assignInScope('alt_start', $_smarty_tpl->tpl_vars['navStrings']->value['start']);
$_smarty_tpl->_assignInScope('alt_next', $_smarty_tpl->tpl_vars['navStrings']->value['next']);
$_smarty_tpl->_assignInScope('alt_prev', $_smarty_tpl->tpl_vars['navStrings']->value['previous']);
$_smarty_tpl->_assignInScope('alt_end', $_smarty_tpl->tpl_vars['navStrings']->value['end']);?>

	<tr class='pagination'  role='presentation'>
		<td colspan='<?php if ($_smarty_tpl->tpl_vars['prerow']->value) {
echo $_smarty_tpl->tpl_vars['colCount']->value+1;
} else {
echo $_smarty_tpl->tpl_vars['colCount']->value;
}?>'>
			<table border='0' cellpadding='0' cellspacing='0' width='100%' class='paginationTable'>
				<tr>
					<td nowrap="nowrap" width='2%' class='paginationActionButtons'>
						<?php if ($_smarty_tpl->tpl_vars['prerow']->value) {?>

                        <?php echo smarty_function_sugar_action_menu(array('id'=>$_smarty_tpl->tpl_vars['link_select_id']->value,'params'=>$_smarty_tpl->tpl_vars['selectLink']->value),$_smarty_tpl);?>

					
						<?php }?>

						<?php echo smarty_function_sugar_action_menu(array('id'=>$_smarty_tpl->tpl_vars['link_action_id']->value,'params'=>$_smarty_tpl->tpl_vars['actionsLink']->value),$_smarty_tpl);?>


                        <?php if ($_smarty_tpl->tpl_vars['actionDisabledLink']->value != '') {?><div class='selectActionsDisabled' id='select_actions_disabled_<?php echo $_smarty_tpl->tpl_vars['action_menu_location']->value;?>
'>
                            <?php echo $_smarty_tpl->tpl_vars['actionDisabledLink']->value;?>

                            <?php if ((isset($_smarty_tpl->tpl_vars['actionsLink']->value)) && count($_smarty_tpl->tpl_vars['actionsLink']->value['buttons']) > 1) {?><span class='ab'></span><?php } else { ?>&nbsp;<?php }?>
                        <?php }?>
                        <?php echo $_smarty_tpl->tpl_vars['selectedObjectsSpan']->value;?>

					</td>
					<td  nowrap='nowrap' width='1%' align="right" class='paginationChangeButtons'>
						<?php if ($_smarty_tpl->tpl_vars['pageData']->value['urls']['startPage']) {?>
							<button type='button' id='listViewStartButton_<?php echo $_smarty_tpl->tpl_vars['action_menu_location']->value;?>
' name='listViewStartButton' title='<?php echo $_smarty_tpl->tpl_vars['navStrings']->value['start'];?>
' class='button' <?php if ($_smarty_tpl->tpl_vars['prerow']->value) {?>onclick='return sListView.save_checks(0, "<?php echo $_smarty_tpl->tpl_vars['moduleString']->value;?>
");'<?php } else { ?> onClick='location.href="<?php echo $_smarty_tpl->tpl_vars['pageData']->value['urls']['startPage'];?>
"' <?php }?>>
								<?php echo smarty_function_sugar_getimage(array('name'=>"start",'ext'=>".png",'alt'=>((string)$_smarty_tpl->tpl_vars['alt_start']->value),'other_attributes'=>'align="absmiddle" border="0" '),$_smarty_tpl);?>

							</button>
						<?php } else { ?>
							<button type='button' id='listViewStartButton_<?php echo $_smarty_tpl->tpl_vars['action_menu_location']->value;?>
' name='listViewStartButton' title='<?php echo $_smarty_tpl->tpl_vars['navStrings']->value['start'];?>
' class='button' disabled='disabled'>
								<?php echo smarty_function_sugar_getimage(array('name'=>"start_off",'ext'=>".png",'alt'=>$_smarty_tpl->tpl_vars['navStrings']->value['start'],'other_attributes'=>'align="absmiddle" border="0" '),$_smarty_tpl);?>

							</button>
						<?php }?>
						<?php if ($_smarty_tpl->tpl_vars['pageData']->value['urls']['prevPage']) {?>
							<button type='button' id='listViewPrevButton_<?php echo $_smarty_tpl->tpl_vars['action_menu_location']->value;?>
' name='listViewPrevButton' title='<?php echo $_smarty_tpl->tpl_vars['navStrings']->value['previous'];?>
' class='button' <?php if ($_smarty_tpl->tpl_vars['prerow']->value) {?>onclick='return sListView.save_checks(<?php echo $_smarty_tpl->tpl_vars['pageData']->value['offsets']['prev'];?>
, "<?php echo $_smarty_tpl->tpl_vars['moduleString']->value;?>
")' <?php } else { ?> onClick='location.href="<?php echo $_smarty_tpl->tpl_vars['pageData']->value['urls']['prevPage'];?>
"'<?php }?>>
								<?php echo smarty_function_sugar_getimage(array('name'=>"previous",'ext'=>".png",'alt'=>((string)$_smarty_tpl->tpl_vars['alt_prev']->value),'other_attributes'=>'align="absmiddle" border="0" '),$_smarty_tpl);?>

							</button>
						<?php } else { ?>
							<button type='button' id='listViewPrevButton_<?php echo $_smarty_tpl->tpl_vars['action_menu_location']->value;?>
' name='listViewPrevButton' class='button' title='<?php echo $_smarty_tpl->tpl_vars['navStrings']->value['previous'];?>
' disabled='disabled'>
								<?php echo smarty_function_sugar_getimage(array('name'=>"previous_off",'ext'=>".png",'alt'=>$_smarty_tpl->tpl_vars['navStrings']->value['previous'],'other_attributes'=>'align="absmiddle" border="0" '),$_smarty_tpl);?>

							</button>
						<?php }?>
							<span class='pageNumbers'>(<?php if ($_smarty_tpl->tpl_vars['pageData']->value['offsets']['lastOffsetOnPage'] == 0) {?>0<?php } else {
echo $_smarty_tpl->tpl_vars['pageData']->value['offsets']['current']+1;
}?> - <?php echo $_smarty_tpl->tpl_vars['pageData']->value['offsets']['lastOffsetOnPage'];?>
 <?php echo $_smarty_tpl->tpl_vars['navStrings']->value['of'];?>
 <?php if ($_smarty_tpl->tpl_vars['pageData']->value['offsets']['totalCounted']) {
echo $_smarty_tpl->tpl_vars['pageData']->value['offsets']['total'];
} else {
echo $_smarty_tpl->tpl_vars['pageData']->value['offsets']['total'];
if ($_smarty_tpl->tpl_vars['pageData']->value['offsets']['lastOffsetOnPage'] != $_smarty_tpl->tpl_vars['pageData']->value['offsets']['total']) {?>+<?php }
}?>)</span>
						<?php if ($_smarty_tpl->tpl_vars['pageData']->value['urls']['nextPage']) {?>
							<button type='button' id='listViewNextButton_<?php echo $_smarty_tpl->tpl_vars['action_menu_location']->value;?>
' name='listViewNextButton' title='<?php echo $_smarty_tpl->tpl_vars['navStrings']->value['next'];?>
' class='button' <?php if ($_smarty_tpl->tpl_vars['prerow']->value) {?>onclick='return sListView.save_checks(<?php echo $_smarty_tpl->tpl_vars['pageData']->value['offsets']['next'];?>
, "<?php echo $_smarty_tpl->tpl_vars['moduleString']->value;?>
")' <?php } else { ?> onClick='location.href="<?php echo $_smarty_tpl->tpl_vars['pageData']->value['urls']['nextPage'];?>
"'<?php }?>>
								<?php echo smarty_function_sugar_getimage(array('name'=>"next",'ext'=>".png",'alt'=>((string)$_smarty_tpl->tpl_vars['alt_next']->value),'other_attributes'=>'align="absmiddle" border="0" '),$_smarty_tpl);?>

							</button>
						<?php } else { ?>
							<button type='button' id='listViewNextButton_<?php echo $_smarty_tpl->tpl_vars['action_menu_location']->value;?>
' name='listViewNextButton' class='button' title='<?php echo $_smarty_tpl->tpl_vars['navStrings']->value['next'];?>
' disabled='disabled'>
								<?php echo smarty_function_sugar_getimage(array('name'=>"next_off",'ext'=>".png",'alt'=>$_smarty_tpl->tpl_vars['navStrings']->value['next'],'other_attributes'=>'align="absmiddle" border="0" '),$_smarty_tpl);?>

							</button>
						<?php }?>
						<?php if ($_smarty_tpl->tpl_vars['pageData']->value['urls']['endPage'] && $_smarty_tpl->tpl_vars['pageData']->value['offsets']['total'] != $_smarty_tpl->tpl_vars['pageData']->value['offsets']['lastOffsetOnPage']) {?>
							<button type='button' id='listViewEndButton_<?php echo $_smarty_tpl->tpl_vars['action_menu_location']->value;?>
' name='listViewEndButton' title='<?php echo $_smarty_tpl->tpl_vars['navStrings']->value['end'];?>
' class='button' <?php if ($_smarty_tpl->tpl_vars['prerow']->value) {?>onclick='return sListView.save_checks("end", "<?php echo $_smarty_tpl->tpl_vars['moduleString']->value;?>
")' <?php } else { ?> onClick='location.href="<?php echo $_smarty_tpl->tpl_vars['pageData']->value['urls']['endPage'];?>
"'<?php }?>>
								<?php echo smarty_function_sugar_getimage(array('name'=>"end",'ext'=>".png",'alt'=>((string)$_smarty_tpl->tpl_vars['alt_end']->value),'other_attributes'=>'align="absmiddle" border="0" '),$_smarty_tpl);?>

							</button>
						<?php } elseif (!$_smarty_tpl->tpl_vars['pageData']->value['offsets']['totalCounted'] || $_smarty_tpl->tpl_vars['pageData']->value['offsets']['total'] == $_smarty_tpl->tpl_vars['pageData']->value['offsets']['lastOffsetOnPage']) {?>
							<button type='button' id='listViewEndButton_<?php echo $_smarty_tpl->tpl_vars['action_menu_location']->value;?>
' name='listViewEndButton' title='<?php echo $_smarty_tpl->tpl_vars['navStrings']->value['end'];?>
' class='button' disabled='disabled'>
							 	<?php echo smarty_function_sugar_getimage(array('name'=>"end_off",'ext'=>".png",'alt'=>$_smarty_tpl->tpl_vars['navStrings']->value['end'],'other_attributes'=>'align="absmiddle" '),$_smarty_tpl);?>

							</button>
						<?php }?>
					</td>
				</tr>
			</table>
		</td>
	</tr>
<?php }
}
