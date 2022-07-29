<?php
/* Smarty version 3.1.39, created on 2022-07-29 18:17:52
  from '/var/www/html/SugarEnt-Full-12.0.0/include/ListView/ListViewGeneric.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_62e3de005b7cd8_89778390',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1650e0fc3125488a50564d1a49f63f6a3923c366' => 
    array (
      0 => '/var/www/html/SugarEnt-Full-12.0.0/include/ListView/ListViewGeneric.tpl',
      1 => 1649221080,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:include/ListView/ListViewPagination.tpl' => 2,
  ),
),false)) {
function content_62e3de005b7cd8_89778390 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/SugarEnt-Full-12.0.0/include/SugarSmarty/plugins/function.sugar_getjspath.php','function'=>'smarty_function_sugar_getjspath',),1=>array('file'=>'/var/www/html/SugarEnt-Full-12.0.0/vendor/smarty/smarty/libs/plugins/modifier.replace.php','function'=>'smarty_modifier_replace',),2=>array('file'=>'/var/www/html/SugarEnt-Full-12.0.0/vendor/smarty/smarty/libs/plugins/function.counter.php','function'=>'smarty_function_counter',),3=>array('file'=>'/var/www/html/SugarEnt-Full-12.0.0/include/SugarSmarty/plugins/function.sugar_translate.php','function'=>'smarty_function_sugar_translate',),4=>array('file'=>'/var/www/html/SugarEnt-Full-12.0.0/include/SugarSmarty/plugins/function.sugar_getimage.php','function'=>'smarty_function_sugar_getimage',),5=>array('file'=>'/var/www/html/SugarEnt-Full-12.0.0/include/SugarSmarty/plugins/function.sugar_ajax_url.php','function'=>'smarty_function_sugar_ajax_url',),6=>array('file'=>'/var/www/html/SugarEnt-Full-12.0.0/include/SugarSmarty/plugins/function.sugar_evalcolumn_old.php','function'=>'smarty_function_sugar_evalcolumn_old',),7=>array('file'=>'/var/www/html/SugarEnt-Full-12.0.0/include/SugarSmarty/plugins/function.sugar_field.php','function'=>'smarty_function_sugar_field',),));
?>

<?php echo '<script'; ?>
 type='text/javascript' src='<?php echo smarty_function_sugar_getjspath(array('file'=>'include/javascript/popup_helper.js'),$_smarty_tpl);?>
'><?php echo '</script'; ?>
>


<?php echo '<script'; ?>
>
	$(document).ready(function(){
	    $("ul.clickMenu").each(function(index, node){
	  		$(node).sugarActionMenu();
	  	});

        $('.selectActionsDisabled').children().each(function(index) {
            $(this).attr('onclick','').unbind('click');
        });
        
        var selectedTopValue = $("#selectCountTop").attr("value");
        if(typeof(selectedTopValue) != "undefined" && selectedTopValue != "0"){
        	sugarListView.prototype.toggleSelected();
        }
	});
<?php echo '</script'; ?>
>
<?php $_smarty_tpl->_assignInScope('currentModule', $_smarty_tpl->tpl_vars['pageData']->value['bean']['moduleDir']);
$_smarty_tpl->_assignInScope('singularModule', $_smarty_tpl->tpl_vars['moduleListSingular']->value[$_smarty_tpl->tpl_vars['currentModule']->value]);
$_smarty_tpl->_assignInScope('moduleName', $_smarty_tpl->tpl_vars['moduleList']->value[$_smarty_tpl->tpl_vars['currentModule']->value]);
$_smarty_tpl->_assignInScope('hideTable', false);?>

<?php if (count($_smarty_tpl->tpl_vars['data']->value) == 0) {?>
	<?php $_smarty_tpl->_assignInScope('hideTable', true);?>
	<div class="list view listViewEmpty">
    <?php if ($_smarty_tpl->tpl_vars['displayEmptyDataMesssages']->value) {?>
        <?php if (strlen($_smarty_tpl->tpl_vars['query']->value) == 0) {?>
                <?php if ($_smarty_tpl->tpl_vars['pageData']->value['bean']['parentModuleDir']) {?>
                    <?php $_smarty_tpl->_assignInScope('currentModule', $_smarty_tpl->tpl_vars['pageData']->value['bean']['parentModuleDir']);?>
                <?php }?>
                <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "createLink", null);?><a href="?module=<?php echo $_smarty_tpl->tpl_vars['currentModule']->value;?>
&action=<?php echo $_smarty_tpl->tpl_vars['pageData']->value['bean']['createAction'];?>
&return_module=<?php echo $_smarty_tpl->tpl_vars['currentModule']->value;?>
&return_action=DetailView"><?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CREATE_BUTTON_LABEL'];?>
</a><?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
                <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "importLink", null);?><a href="?module=Import&action=Step1&import_module=<?php echo $_smarty_tpl->tpl_vars['currentModule']->value;?>
&return_module=<?php echo $_smarty_tpl->tpl_vars['currentModule']->value;?>
&return_action=index"><?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_IMPORT'];?>
</a><?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
                <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "viewLink", null);?><a href="?module=<?php echo $_smarty_tpl->tpl_vars['currentModule']->value;?>
&action=index"><?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_VIEW_BUTTON_LABEL'];?>
</a><?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
                <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "helpLink", null);?><a target="_blank" href='?module=Administration&action=SupportPortal&view=documentation&version=<?php echo $_smarty_tpl->tpl_vars['sugar_info']->value['sugar_version'];?>
&edition=<?php echo $_smarty_tpl->tpl_vars['sugar_info']->value['sugar_flavor'];?>
&lang=&help_module=<?php echo $_smarty_tpl->tpl_vars['currentModule']->value;?>
&help_action=&key='><?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CLICK_HERE'];?>
</a><?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
                <p class="msg">
                    <?php if ($_smarty_tpl->tpl_vars['pageData']->value['bean']['showLink'] == true) {?>
                        <?php echo smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['APP']->value['MSG_EMPTY_LIST_VIEW_GO_TO_PARENT'],"<item1>",$_smarty_tpl->tpl_vars['pageData']->value['bean']['moduleTitle']),"<item2>",$_smarty_tpl->tpl_vars['pageData']->value['bean']['parentTitle']),"<item3>",$_smarty_tpl->tpl_vars['viewLink']->value);?>

                    <?php } elseif ($_smarty_tpl->tpl_vars['pageData']->value['bean']['importable'] == true) {?>
                        <?php echo smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['APP']->value['MSG_EMPTY_LIST_VIEW_NO_RESULTS'],"<item2>",$_smarty_tpl->tpl_vars['createLink']->value),"<item3>",$_smarty_tpl->tpl_vars['importLink']->value);?>

                    <?php } else { ?>
                        <?php echo smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['APP']->value['MSG_EMPTY_LIST_VIEW_NO_RESULTS_NO_IMPORT'],"<item1>",$_smarty_tpl->tpl_vars['pageData']->value['bean']['parentTitle']),"<item2>",$_smarty_tpl->tpl_vars['createLink']->value);?>

                    <?php }?>
                </p>
        <?php } elseif ($_smarty_tpl->tpl_vars['query']->value == "-advanced_search") {?>
            <p class="msg">
                <?php echo $_smarty_tpl->tpl_vars['APP']->value['MSG_LIST_VIEW_NO_RESULTS_BASIC'];?>

            </p>
        <?php } else { ?>
            <p class="msg">
                <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "quotedQuery", null);?>"<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['query']->value, ENT_QUOTES, 'UTF-8', true);?>
"<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
                <?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['APP']->value['MSG_LIST_VIEW_NO_RESULTS'],"<item1>",$_smarty_tpl->tpl_vars['quotedQuery']->value);?>

            </p>
            <?php if ($_smarty_tpl->tpl_vars['displaySubMessage']->value) {?>
                <p class = "submsg">
                    <a href="?module=<?php echo $_smarty_tpl->tpl_vars['currentModule']->value;?>
&action=EditView&return_module=<?php echo $_smarty_tpl->tpl_vars['currentModule']->value;?>
&return_action=DetailView">
                        <?php echo smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['APP']->value['MSG_LIST_VIEW_NO_RESULTS_SUBMSG'],"<item1>",$_smarty_tpl->tpl_vars['quotedQuery']->value),"<item2>",$_smarty_tpl->tpl_vars['singularModule']->value);?>

                    </a>

                </p>
            <?php }?>
        <?php }?>
    <?php } else { ?>
        <p class="msg">
            <?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_NO_DATA'];?>

        </p>
	<?php }?>
	</div>
<?php }
echo $_smarty_tpl->tpl_vars['multiSelectData']->value;?>


<?php if ($_smarty_tpl->tpl_vars['hideTable']->value == false) {?>
	<table cellpadding='0' cellspacing='0' width='100%' border='0' class='list view'>
    <?php $_smarty_tpl->_assignInScope('link_select_id', "selectLinkTop");?>
    <?php $_smarty_tpl->_assignInScope('link_action_id', "actionLinkTop");?>
    <?php $_smarty_tpl->_assignInScope('actionsLink', $_smarty_tpl->tpl_vars['actionsLinkTop']->value);?>
    <?php $_smarty_tpl->_assignInScope('selectLink', $_smarty_tpl->tpl_vars['selectLinkTop']->value);?>
    <?php $_smarty_tpl->_assignInScope('action_menu_location', "top");?>
	<?php $_smarty_tpl->_subTemplateRender('file:include/ListView/ListViewPagination.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
	<tr height='20'>
			<?php if ($_smarty_tpl->tpl_vars['prerow']->value) {?>
				<td width='1%' class="td_alt">
					&nbsp;
				</td>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['favorites']->value) {?>
			<td class='td_alt' >
					&nbsp;
			</td>
			<?php }?>
			<?php if (!empty($_smarty_tpl->tpl_vars['quickViewLinks']->value)) {?>
			<td class='td_alt' width='1%' style="padding: 0px;">&nbsp;</td>
			<?php }?>
			<?php echo smarty_function_counter(array('start'=>0,'name'=>"colCounter",'print'=>false,'assign'=>"colCounter"),$_smarty_tpl);?>

			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['displayColumns']->value, 'params', false, 'colHeader');
$_smarty_tpl->tpl_vars['params']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['colHeader']->value => $_smarty_tpl->tpl_vars['params']->value) {
$_smarty_tpl->tpl_vars['params']->do_else = false;
?>
				<th scope='col' width='<?php echo $_smarty_tpl->tpl_vars['params']->value['width'];?>
%'>
					<div width='100%' align='<?php echo (($tmp = @$_smarty_tpl->tpl_vars['params']->value['align'])===null||$tmp==='' ? 'left' : $tmp);?>
'>
	                <?php if ((($tmp = @$_smarty_tpl->tpl_vars['params']->value['sortable'])===null||$tmp==='' ? true : $tmp)) {?>
	                    <?php if ($_smarty_tpl->tpl_vars['params']->value['url_sort']) {?>
	                        <a href='<?php echo $_smarty_tpl->tpl_vars['pageData']->value['urls']['orderBy'];
echo mb_strtolower((($tmp = @$_smarty_tpl->tpl_vars['params']->value['orderBy'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['colHeader']->value : $tmp), 'UTF-8');?>
' class='listViewThLinkS1'>
	                    <?php } else { ?>
	                        <?php if (mb_strtolower((($tmp = @$_smarty_tpl->tpl_vars['params']->value['orderBy'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['colHeader']->value : $tmp), 'UTF-8') == $_smarty_tpl->tpl_vars['pageData']->value['ordering']['orderBy']) {?>
	                            <a href='#' onClick='sListView.order_checks("<?php echo (($tmp = @$_smarty_tpl->tpl_vars['pageData']->value['ordering']['sortOrder'])===null||$tmp==='' ? 'ASCerror' : $tmp);?>
", "<?php echo mb_strtolower((($tmp = @$_smarty_tpl->tpl_vars['params']->value['orderBy'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['colHeader']->value : $tmp), 'UTF-8');?>
" , "<?php echo $_smarty_tpl->tpl_vars['pageData']->value['bean']['moduleDir'];
echo "2_";
echo mb_strtoupper($_smarty_tpl->tpl_vars['pageData']->value['bean']['objectName'], 'UTF-8');
echo "_ORDER_BY";?>
");return false;' class='listViewThLinkS1'>
	                        <?php } else { ?>
	                            <a href='#' onClick='sListView.order_checks("ASC", "<?php echo mb_strtolower((($tmp = @$_smarty_tpl->tpl_vars['params']->value['orderBy'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['colHeader']->value : $tmp), 'UTF-8');?>
" , "<?php echo $_smarty_tpl->tpl_vars['pageData']->value['bean']['moduleDir'];
echo "2_";
echo mb_strtoupper($_smarty_tpl->tpl_vars['pageData']->value['bean']['objectName'], 'UTF-8');
echo "_ORDER_BY";?>
");return false;' class='listViewThLinkS1'>
	                        <?php }?>
	                    <?php }?>
	                    <?php echo smarty_function_sugar_translate(array('label'=>$_smarty_tpl->tpl_vars['params']->value['label'],'module'=>$_smarty_tpl->tpl_vars['pageData']->value['bean']['moduleDir']),$_smarty_tpl);?>

						&nbsp;&nbsp;
						<?php if (mb_strtolower((($tmp = @$_smarty_tpl->tpl_vars['params']->value['orderBy'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['colHeader']->value : $tmp), 'UTF-8') == $_smarty_tpl->tpl_vars['pageData']->value['ordering']['orderBy']) {?>
							<?php if ($_smarty_tpl->tpl_vars['pageData']->value['ordering']['sortOrder'] == 'ASC') {?>
								<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "imageName", null);?>arrow_down.<?php echo $_smarty_tpl->tpl_vars['arrowExt']->value;
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
	                            <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "alt_sort", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_ALT_SORT_DESC'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
								<?php echo smarty_function_sugar_getimage(array('name'=>$_smarty_tpl->tpl_vars['imageName']->value,'attr'=>'align="absmiddle" border="0" ','alt'=>((string)$_smarty_tpl->tpl_vars['alt_sort']->value)),$_smarty_tpl);?>

							<?php } else { ?>
								<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "imageName", null);?>arrow_up.<?php echo $_smarty_tpl->tpl_vars['arrowExt']->value;
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
	                            <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "alt_sort", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_ALT_SORT_ASC'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
								<?php echo smarty_function_sugar_getimage(array('name'=>$_smarty_tpl->tpl_vars['imageName']->value,'attr'=>'align="absmiddle" border="0" ','alt'=>((string)$_smarty_tpl->tpl_vars['alt_sort']->value)),$_smarty_tpl);?>

							<?php }?>
						<?php } else { ?>
							<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "imageName", null);?>arrow.<?php echo $_smarty_tpl->tpl_vars['arrowExt']->value;
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
	                        <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "alt_sort", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_ALT_SORT'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
							<?php echo smarty_function_sugar_getimage(array('name'=>$_smarty_tpl->tpl_vars['imageName']->value,'attr'=>'align="absmiddle" border="0" ','alt'=>((string)$_smarty_tpl->tpl_vars['alt_sort']->value)),$_smarty_tpl);?>

						<?php }?>
	                    </a>
					<?php } else { ?>
	                    <?php if (!(isset($_smarty_tpl->tpl_vars['params']->value['noHeader'])) || $_smarty_tpl->tpl_vars['params']->value['noHeader'] == false) {?> 
						  <?php echo smarty_function_sugar_translate(array('label'=>$_smarty_tpl->tpl_vars['params']->value['label'],'module'=>$_smarty_tpl->tpl_vars['pageData']->value['bean']['moduleDir']),$_smarty_tpl);?>

	                    <?php }?>
					<?php }?>
					</div>
				</th>
				<?php echo smarty_function_counter(array('name'=>"colCounter"),$_smarty_tpl);?>

			<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			<td class='td_alt' nowrap="nowrap" width='1%'>&nbsp;</td>
		</tr>
			
		<?php echo smarty_function_counter(array('start'=>$_smarty_tpl->tpl_vars['pageData']->value['offsets']['current'],'print'=>false,'assign'=>"offset",'name'=>"offset"),$_smarty_tpl);?>
	
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'rowData', false, 'id', 'rowIteration', array (
  'iteration' => true,
));
$_smarty_tpl->tpl_vars['rowData']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['id']->value => $_smarty_tpl->tpl_vars['rowData']->value) {
$_smarty_tpl->tpl_vars['rowData']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_rowIteration']->value['iteration']++;
?>
		    <?php echo smarty_function_counter(array('name'=>"offset",'print'=>false),$_smarty_tpl);?>

	        <?php $_smarty_tpl->_assignInScope('scope_row', true);?>
	
			<?php if ((1 & (isset($_smarty_tpl->tpl_vars['__smarty_foreach_rowIteration']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_rowIteration']->value['iteration'] : null))) {?>
				<?php $_smarty_tpl->_assignInScope('_rowColor', $_smarty_tpl->tpl_vars['rowColor']->value[0]);?>
			<?php } else { ?>
				<?php $_smarty_tpl->_assignInScope('_rowColor', $_smarty_tpl->tpl_vars['rowColor']->value[1]);?>
			<?php }?>
			<tr height='20' class='<?php echo $_smarty_tpl->tpl_vars['_rowColor']->value;?>
S1'>
				<?php if ($_smarty_tpl->tpl_vars['prerow']->value) {?>
				<td width='1%' class='nowrap'>
				 <?php if (!$_smarty_tpl->tpl_vars['is_admin']->value && 'is_admin_for_user' && $_smarty_tpl->tpl_vars['rowData']->value['IS_ADMIN'] == 1) {?>
						<input type='checkbox' disabled="disabled" class='checkbox' value='<?php echo $_smarty_tpl->tpl_vars['rowData']->value['ID'];?>
'>
				 <?php } else { ?>
	                    <input title="<?php echo smarty_function_sugar_translate(array('label'=>'LBL_SELECT_THIS_ROW_TITLE'),$_smarty_tpl);?>
" onclick='sListView.check_item(this, document.MassUpdate)' type='checkbox' class='checkbox' name='mass[]' value='<?php echo $_smarty_tpl->tpl_vars['rowData']->value['ID'];?>
'>
				 <?php }?>
				</td>
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['favorites']->value) {?>
					<td><?php echo $_smarty_tpl->tpl_vars['rowData']->value['star'];?>
</td>
				<?php }?>
				<?php if (!empty($_smarty_tpl->tpl_vars['quickViewLinks']->value)) {?>
	            <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', 'linkModule', null);
echo $_smarty_tpl->tpl_vars['pageData']->value['bean']['moduleDir'];
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
	            <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', 'action', null);
if ($_smarty_tpl->tpl_vars['act']->value) {
echo $_smarty_tpl->tpl_vars['act']->value;
} else { ?>EditView<?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
				<td width='2%' nowrap>
	                <?php if ($_smarty_tpl->tpl_vars['pageData']->value['rowAccess'][$_smarty_tpl->tpl_vars['id']->value]['edit']) {?>
	                <a title='<?php echo $_smarty_tpl->tpl_vars['editLinkString']->value;?>
' id="edit-<?php echo $_smarty_tpl->tpl_vars['rowData']->value['ID'];?>
"
	href="index.php?module=<?php echo $_smarty_tpl->tpl_vars['linkModule']->value;?>
&offset=<?php echo $_smarty_tpl->tpl_vars['offset']->value;?>
&stamp=<?php echo $_smarty_tpl->tpl_vars['pageData']->value['stamp'];?>
&return_module=<?php echo $_smarty_tpl->tpl_vars['linkModule']->value;?>
&action=<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
&record=<?php echo $_smarty_tpl->tpl_vars['rowData']->value['ID'];?>
"
	data-record='<?php echo $_smarty_tpl->tpl_vars['rowData']->value['ID'];?>
' data-module='<?php echo $_smarty_tpl->tpl_vars['pageData']->value['bean']['moduleDir'];?>
'
	 data-list = 'true' class="quickEdit"
	                >
	                    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'tmp1', 'alt_edit', null);
echo smarty_function_sugar_translate(array('label'=>"LNK_EDIT"),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
	                    <?php echo smarty_function_sugar_getimage(array('name'=>"edit_inline.gif",'attr'=>'border="0" ','alt'=>((string)$_smarty_tpl->tpl_vars['alt_edit']->value)),$_smarty_tpl);?>
</a>
	                <?php }?>
	            </td>
	
				<?php }?>
				<?php echo smarty_function_counter(array('start'=>0,'name'=>"colCounter",'print'=>false,'assign'=>"colCounter"),$_smarty_tpl);?>

				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['displayColumns']->value, 'params', false, 'col');
$_smarty_tpl->tpl_vars['params']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['col']->value => $_smarty_tpl->tpl_vars['params']->value) {
$_smarty_tpl->tpl_vars['params']->do_else = false;
?>
				    <td <?php if ($_smarty_tpl->tpl_vars['scope_row']->value) {?> scope='row' <?php }?> align='<?php echo (($tmp = @$_smarty_tpl->tpl_vars['params']->value['align'])===null||$tmp==='' ? 'left' : $tmp);?>
' valign="top" class="<?php if (($_smarty_tpl->tpl_vars['params']->value['type'] == 'teamset')) {?>nowrap<?php }
if (preg_match('/PHONE/',$_smarty_tpl->tpl_vars['col']->value)) {?> phone<?php }?>"><?php if ($_smarty_tpl->tpl_vars['col']->value == 'NAME' || $_smarty_tpl->tpl_vars['params']->value['bold']) {?><b><?php }
if ($_smarty_tpl->tpl_vars['params']->value['link'] && !$_smarty_tpl->tpl_vars['params']->value['customCode']) {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', 'linkModule', null);
if ($_smarty_tpl->tpl_vars['params']->value['dynamic_module']) {
echo $_smarty_tpl->tpl_vars['rowData']->value[$_smarty_tpl->tpl_vars['params']->value['dynamic_module']];
} else {
echo (($tmp = @$_smarty_tpl->tpl_vars['params']->value['module'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['pageData']->value['bean']['moduleDir'] : $tmp);
}
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', 'action', null);
if ($_smarty_tpl->tpl_vars['act']->value) {
if ($_smarty_tpl->tpl_vars['act']->value == 'ReportsWizard' && $_smarty_tpl->tpl_vars['linkModule']->value == 'Employees') {?>DetailView<?php } else {
echo $_smarty_tpl->tpl_vars['act']->value;
}
} else { ?>DetailView<?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', 'record', null);
echo (($tmp = @$_smarty_tpl->tpl_vars['rowData']->value[$_smarty_tpl->tpl_vars['params']->value['id']])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['rowData']->value['ID'] : $tmp);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', 'url', null);?>index.php?module=<?php echo $_smarty_tpl->tpl_vars['linkModule']->value;?>
&offset=<?php echo $_smarty_tpl->tpl_vars['offset']->value;?>
&stamp=<?php echo $_smarty_tpl->tpl_vars['pageData']->value['stamp'];?>
&return_module=<?php echo $_smarty_tpl->tpl_vars['linkModule']->value;?>
&action=<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
&record=<?php echo $_smarty_tpl->tpl_vars['record']->value;
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?><<?php echo (($tmp = @$_smarty_tpl->tpl_vars['pageData']->value['tag'][$_smarty_tpl->tpl_vars['id']->value][$_smarty_tpl->tpl_vars['params']->value['ACLTag']])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['pageData']->value['tag'][$_smarty_tpl->tpl_vars['id']->value]['MAIN'] : $tmp);?>
 href="<?php echo smarty_function_sugar_ajax_url(array('url'=>$_smarty_tpl->tpl_vars['url']->value),$_smarty_tpl);?>
"><?php }
if ($_smarty_tpl->tpl_vars['params']->value['customCode']) {
echo smarty_function_sugar_evalcolumn_old(array('var'=>$_smarty_tpl->tpl_vars['params']->value['customCode'],'rowData'=>$_smarty_tpl->tpl_vars['rowData']->value),$_smarty_tpl);
} else {
echo smarty_function_sugar_field(array('parentFieldArray'=>$_smarty_tpl->tpl_vars['rowData']->value,'vardef'=>$_smarty_tpl->tpl_vars['params']->value,'displayType'=>'ListView','field'=>$_smarty_tpl->tpl_vars['col']->value),$_smarty_tpl);
}
if (empty($_smarty_tpl->tpl_vars['rowData']->value[$_smarty_tpl->tpl_vars['col']->value]) && empty($_smarty_tpl->tpl_vars['params']->value['customCode'])) {
}
if ($_smarty_tpl->tpl_vars['params']->value['link'] && !$_smarty_tpl->tpl_vars['params']->value['customCode']) {?></<?php echo (($tmp = @$_smarty_tpl->tpl_vars['pageData']->value['tag'][$_smarty_tpl->tpl_vars['id']->value][$_smarty_tpl->tpl_vars['params']->value['ACLTag']])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['pageData']->value['tag'][$_smarty_tpl->tpl_vars['id']->value]['MAIN'] : $tmp);?>
><?php }
if ($_smarty_tpl->tpl_vars['col']->value == 'NAME' || $_smarty_tpl->tpl_vars['params']->value['bold']) {?></b><?php }?></td>
	                <?php $_smarty_tpl->_assignInScope('scope_row', false);?>
					<?php echo smarty_function_counter(array('name'=>"colCounter"),$_smarty_tpl);?>

				<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				<td align='right'><?php echo $_smarty_tpl->tpl_vars['pageData']->value['additionalDetails'][$_smarty_tpl->tpl_vars['id']->value];?>
</td>
		    	</tr>
		<?php
}
if ($_smarty_tpl->tpl_vars['rowData']->do_else) {
?>
		<tr height='20' class='<?php echo $_smarty_tpl->tpl_vars['rowColor']->value[0];?>
S1'>
		    <td colspan="<?php echo $_smarty_tpl->tpl_vars['colCount']->value;?>
">
		        <em><?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_NO_DATA'];?>
</em>
		    </td>
		</tr> 
		<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <?php $_smarty_tpl->_assignInScope('link_select_id', "selectLinkBottom");?>
    <?php $_smarty_tpl->_assignInScope('link_action_id', "actionLinkBottom");?>
    <?php $_smarty_tpl->_assignInScope('selectLink', $_smarty_tpl->tpl_vars['selectLinkBottom']->value);?>
    <?php $_smarty_tpl->_assignInScope('actionsLink', $_smarty_tpl->tpl_vars['actionsLinkBottom']->value);?>
    <?php $_smarty_tpl->_assignInScope('action_menu_location', "bottom");?>
    <?php $_smarty_tpl->_subTemplateRender('file:include/ListView/ListViewPagination.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
	</table>
<?php }
if ($_smarty_tpl->tpl_vars['contextMenus']->value) {?>
    <?php echo '<script'; ?>
 type="text/javascript">
        <?php echo $_smarty_tpl->tpl_vars['contextMenuScript']->value;?>

        function lvg_nav(m, id, act, offset, t) {
            if (t.href.search(/#/) < 0) {
                return;
            } else {
                if (act === 'pte') {
                    act = 'ProjectTemplatesEditView';
                } else if (act === 'd') {
                    act = 'DetailView';
                } else if (act === 'ReportsWizard') {
                    act = 'ReportsWizard';
                } else {
                    act = 'EditView';
                }
                url = 'index.php?module=' + m + '&offset=' + offset + '&stamp=<?php echo $_smarty_tpl->tpl_vars['pageData']->value['stamp'];?>
&return_module=' + m + '&action=' + act + '&record=' + id;
                t.href = url;
            }
        }

        function lvg_dtails(id) {
            return SUGAR.util.getAdditionalDetails('<?php echo (($tmp = @$_smarty_tpl->tpl_vars['pageData']->value['bean']['moduleDir'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['params']->value['module'] : $tmp);?>
', id, 'adspan_' + id);
        }

        if (typeof (qe_init) != 'undefined') {
            qe_init(); //qe_init is defined in footer.tpl
        }
    <?php echo '</script'; ?>
>
<?php }
}
}
