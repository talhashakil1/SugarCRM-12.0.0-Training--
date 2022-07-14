<?php
/* Smarty version 3.1.39, created on 2022-07-14 12:41:14
  from '/var/www/html/SugarEnt-Full-12.0.0/modules/ModuleBuilder/tpls/layoutView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_62cfc89a3e95f8_85414312',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '525d9b74ec16f1ad374bd981d623a8d8370bed93' => 
    array (
      0 => '/var/www/html/SugarEnt-Full-12.0.0/modules/ModuleBuilder/tpls/layoutView.tpl',
      1 => 1649221076,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62cfc89a3e95f8_85414312 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/SugarEnt-Full-12.0.0/include/SugarSmarty/plugins/function.sugar_translate.php','function'=>'smarty_function_sugar_translate',),1=>array('file'=>'/var/www/html/SugarEnt-Full-12.0.0/include/SugarSmarty/plugins/function.sugar_help.php','function'=>'smarty_function_sugar_help',),2=>array('file'=>'/var/www/html/SugarEnt-Full-12.0.0/include/SugarSmarty/plugins/function.sugar_image.php','function'=>'smarty_function_sugar_image',),3=>array('file'=>'/var/www/html/SugarEnt-Full-12.0.0/vendor/smarty/smarty/libs/plugins/function.counter.php','function'=>'smarty_function_counter',),4=>array('file'=>'/var/www/html/SugarEnt-Full-12.0.0/include/SugarSmarty/plugins/function.sugar_getimage.php','function'=>'smarty_function_sugar_getimage',),5=>array('file'=>'/var/www/html/SugarEnt-Full-12.0.0/include/SugarSmarty/plugins/function.sugar_csrf_form_token.php','function'=>'smarty_function_sugar_csrf_form_token',),6=>array('file'=>'/var/www/html/SugarEnt-Full-12.0.0/vendor/smarty/smarty/libs/plugins/function.html_options.php','function'=>'smarty_function_html_options',),));
?>


<?php if ($_smarty_tpl->tpl_vars['disable_layout']->value) {?>
<span class='required'>
<?php echo smarty_function_sugar_translate(array('label'=>"LBL_SYNC_TO_DETAILVIEW_NOTICE",'module'=>"ModuleBuilder"),$_smarty_tpl);?>

</span>
<?php }?>
<table id='layoutEditorButtons' cellspacing='2'>
    <tr>
    <?php echo $_smarty_tpl->tpl_vars['buttons']->value;?>

	<?php if ($_smarty_tpl->tpl_vars['view']->value == 'editview') {?>
	<td><input type="checkbox" <?php if ($_smarty_tpl->tpl_vars['syncDetailEditViews']->value) {?>checked="true"<?php }?> id="syncCheckbox" onclick="document.forms.prepareForSave.sync_detail_and_edit.value=this.checked">
	   <?php echo smarty_function_sugar_translate(array('label'=>"LBL_SYNC_TO_DETAILVIEW",'module'=>"ModuleBuilder"),$_smarty_tpl);?>
&nbsp;<?php echo smarty_function_sugar_help(array('text'=>$_smarty_tpl->tpl_vars['mod']->value['LBL_SYNC_TO_DETAILVIEW_HELP']),$_smarty_tpl);?>

	</input></td>
	<?php }?>
    </tr>
</table>
<table id='layoutEditorRoleButtons' cellspacing='2'>
    <?php echo $_smarty_tpl->tpl_vars['layoutButtons']->value;?>

    <?php if ($_smarty_tpl->tpl_vars['view']->value == 'editview') {?>
        <td><input type="checkbox" <?php if ($_smarty_tpl->tpl_vars['syncDetailEditViews']->value) {?>checked="true"<?php }?> id="syncCheckbox" onclick="document.forms.prepareForSave.sync_detail_and_edit.value=this.checked">
            <?php echo smarty_function_sugar_translate(array('label'=>"LBL_SYNC_TO_DETAILVIEW",'module'=>"ModuleBuilder"),$_smarty_tpl);?>
&nbsp;<?php echo smarty_function_sugar_help(array('text'=>$_smarty_tpl->tpl_vars['mod']->value['LBL_SYNC_TO_DETAILVIEW_HELP']),$_smarty_tpl);?>

            </input></td>
    <?php }?>
</table>
<div id='layoutEditor' style="width:675px;">
<input type='hidden' id='fieldwidth' value='<?php echo $_smarty_tpl->tpl_vars['fieldwidth']->value;?>
'>
<input type='hidden' id='maxColumns' value='<?php echo $_smarty_tpl->tpl_vars['maxColumns']->value;?>
'>
<input type='hidden' id='nextPanelId' value='<?php echo $_smarty_tpl->tpl_vars['nextPanelId']->value;?>
'>
<div id='toolbox' style='float:left; overflow-y:auto; overflow-x:hidden';>
    <h2 style='margin-bottom:20px;'><?php echo $_smarty_tpl->tpl_vars['mod']->value['LBL_TOOLBOX'];?>
</h2>
    
    <div id='delete'>
    <?php echo smarty_function_sugar_image(array('name'=>'Delete','width'=>48,'height'=>48),$_smarty_tpl);?>

    </div>

	<?php if (!(isset($_smarty_tpl->tpl_vars['fromPortal']->value)) && !(isset($_smarty_tpl->tpl_vars['wireless']->value)) && empty($_smarty_tpl->tpl_vars['single_panel']->value)) {?>
    <div id='panelproxy'></div>
    <?php }?>
    <div id='rowproxy'></div>
    <div id='availablefields'>
    <p id='fillerproxy'></p>

    <?php echo smarty_function_counter(array('name'=>'idCount','assign'=>'idCount','start'=>'1'),$_smarty_tpl);?>

    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['available_fields']->value, 'col', false, 'id');
$_smarty_tpl->tpl_vars['col']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['id']->value => $_smarty_tpl->tpl_vars['col']->value) {
$_smarty_tpl->tpl_vars['col']->do_else = false;
?>
        <?php $_smarty_tpl->_assignInScope('field', $_smarty_tpl->tpl_vars['col']->value['name']);?>
        <div class='le_field' data-name="<?php echo $_smarty_tpl->tpl_vars['field']->value;?>
" id='<?php echo $_smarty_tpl->tpl_vars['idCount']->value;?>
'>
            <?php if (!$_smarty_tpl->tpl_vars['fromModuleBuilder']->value && ($_smarty_tpl->tpl_vars['col']->value['name'] != '(filler)')) {?>
                <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "otherAttributes", null);?>class="le_edit" style="float:right; cursor:pointer;" onclick="editFieldProperties('<?php echo $_smarty_tpl->tpl_vars['idCount']->value;?>
', '<?php echo $_smarty_tpl->tpl_vars['col']->value['label'];?>
');"<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
                <?php echo smarty_function_sugar_getimage(array('name'=>"edit_inline",'ext'=>".gif",'other_attributes'=>$_smarty_tpl->tpl_vars['otherAttributes']->value),$_smarty_tpl);?>

            <?php }?>
            <?php if ((isset($_smarty_tpl->tpl_vars['col']->value['type'])) && ($_smarty_tpl->tpl_vars['col']->value['type'] == 'address')) {?>
                <?php echo $_smarty_tpl->tpl_vars['icon_address']->value;?>

            <?php }?>
            <?php if ((isset($_smarty_tpl->tpl_vars['col']->value['type'])) && ($_smarty_tpl->tpl_vars['col']->value['type'] == 'phone')) {?>
                <?php echo $_smarty_tpl->tpl_vars['icon_phone']->value;?>

            <?php }?>
            <?php if ((isset($_smarty_tpl->tpl_vars['field_defs']->value[$_smarty_tpl->tpl_vars['field']->value]['calculated'])) && $_smarty_tpl->tpl_vars['field_defs']->value[$_smarty_tpl->tpl_vars['field']->value]['calculated']) {?>
                <?php echo smarty_function_sugar_getimage(array('name'=>"SugarLogic/icon_calculated",'alt'=>$_smarty_tpl->tpl_vars['mod_strings']->value['LBL_CALCULATED'],'ext'=>".png",'other_attributes'=>'class="right_icon" '),$_smarty_tpl);?>

            <?php }?>
            <?php if ((isset($_smarty_tpl->tpl_vars['field_defs']->value[$_smarty_tpl->tpl_vars['field']->value]['dependency'])) && $_smarty_tpl->tpl_vars['field_defs']->value[$_smarty_tpl->tpl_vars['field']->value]['dependency']) {?>
                <?php echo smarty_function_sugar_getimage(array('name'=>"SugarLogic/icon_dependent",'ext'=>".png",'alt'=>$_smarty_tpl->tpl_vars['mod_strings']->value['LBL_DEPENDANT'],'other_attributes'=>'class="right_icon" '),$_smarty_tpl);?>

            <?php }?>
            <span id='le_label_<?php echo $_smarty_tpl->tpl_vars['idCount']->value;?>
'>
            <?php if (!empty($_smarty_tpl->tpl_vars['translate']->value) && !empty($_smarty_tpl->tpl_vars['col']->value['label'])) {?>
                <?php $_template = new Smarty_Internal_Template('eval:'.$_smarty_tpl->tpl_vars['col']->value['label'], $_smarty_tpl->smarty, $_smarty_tpl);$_smarty_tpl->assign('newLabel',$_template->fetch()); ?>
                <?php if ($_smarty_tpl->tpl_vars['from_mb']->value) {?>
                    <?php if (!empty($_smarty_tpl->tpl_vars['current_mod_strings']->value[$_smarty_tpl->tpl_vars['newLabel']->value])) {?>
                        <?php echo $_smarty_tpl->tpl_vars['current_mod_strings']->value[$_smarty_tpl->tpl_vars['newLabel']->value];?>

                    <?php } else { ?>
                        <?php echo $_smarty_tpl->tpl_vars['col']->value['label'];?>

                    <?php }?>
                <?php } else { ?>
                    <?php echo smarty_function_sugar_translate(array('label'=>$_smarty_tpl->tpl_vars['newLabel']->value,'module'=>$_smarty_tpl->tpl_vars['language']->value),$_smarty_tpl);?>

                <?php }?>
 			<?php } else { ?>
                <?php $_smarty_tpl->_assignInScope('label', $_smarty_tpl->tpl_vars['col']->value['label']);?> 
                <?php if (!empty($_smarty_tpl->tpl_vars['current_mod_strings']->value[$_smarty_tpl->tpl_vars['label']->value])) {?>
                    <?php echo $_smarty_tpl->tpl_vars['current_mod_strings']->value[$_smarty_tpl->tpl_vars['label']->value];?>

                <?php } else { ?>
                	<?php echo $_smarty_tpl->tpl_vars['label']->value;?>

                <?php }?>
            <?php }
if (!empty($_smarty_tpl->tpl_vars['col']->value['fieldset'])) {?> **<?php }?></span>
            <span class='field_name'><?php echo $_smarty_tpl->tpl_vars['col']->value['name'];?>
</span>
            <span class='field_label'><?php echo $_smarty_tpl->tpl_vars['col']->value['label'];?>
</span>
            <?php if (!empty($_smarty_tpl->tpl_vars['col']->value['fieldset_fields'])) {?>
            <span class='field_fieldset_fields' id='fieldset_<?php echo $_smarty_tpl->tpl_vars['idCount']->value;?>
'>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['col']->value['fieldset_fields'], 'fsfield');
$_smarty_tpl->tpl_vars['fsfield']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['fsfield']->value) {
$_smarty_tpl->tpl_vars['fsfield']->do_else = false;
?>
                    <?php $_template = new Smarty_Internal_Template('eval:'.$_smarty_tpl->tpl_vars['fsfield']->value['label'], $_smarty_tpl->smarty, $_smarty_tpl);$_smarty_tpl->assign('fslabel',$_template->fetch()); ?>
                    <?php if (!empty($_smarty_tpl->tpl_vars['translate']->value) && !empty($_smarty_tpl->tpl_vars['fsfield']->value['label'])) {?>
                        <?php echo smarty_function_sugar_translate(array('label'=>$_smarty_tpl->tpl_vars['fslabel']->value,'module'=>$_smarty_tpl->tpl_vars['language']->value),$_smarty_tpl);?>

                    <?php } else { ?>
                        <?php if (!empty($_smarty_tpl->tpl_vars['current_mod_strings']->value[$_smarty_tpl->tpl_vars['fslabel']->value])) {?>
                            <?php echo $_smarty_tpl->tpl_vars['current_mod_strings']->value[$_smarty_tpl->tpl_vars['fslabel']->value];?>

                        <?php } elseif (!empty($_smarty_tpl->tpl_vars['mod']->value[$_smarty_tpl->tpl_vars['fslabel']->value])) {?>
                            <?php echo $_smarty_tpl->tpl_vars['mod']->value[$_smarty_tpl->tpl_vars['fslabel']->value];?>

                        <?php } else { ?>
                            <?php echo $_smarty_tpl->tpl_vars['fslabel']->value;?>

                        <?php }?>
                    <?php }?><br>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </span>
            <?php }?>
            <span id='le_tabindex_<?php echo $_smarty_tpl->tpl_vars['idCount']->value;?>
' class='field_tabindex'><?php echo $_smarty_tpl->tpl_vars['col']->value['tabindex'];?>
</span>
        </div>
        <?php echo smarty_function_counter(array('name'=>'idCount','assign'=>'idCount','print'=>false),$_smarty_tpl);?>

    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
</div>

<div id='panels' style='float:left; overflow-y:auto; overflow-x:hidden' class="max-columns-<?php echo $_smarty_tpl->tpl_vars['maxColumns']->value;?>
">

<h3><?php echo $_smarty_tpl->tpl_vars['layouttitle']->value;?>
</h3>
<?php echo smarty_function_counter(array('name'=>'idCounter','assign'=>'idCounter','start'=>'1'),$_smarty_tpl);?>

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value, 'panel', false, 'panelid');
$_smarty_tpl->tpl_vars['panel']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['panelid']->value => $_smarty_tpl->tpl_vars['panel']->value) {
$_smarty_tpl->tpl_vars['panel']->do_else = false;
?>

    <div class='le_panel' id='<?php echo $_smarty_tpl->tpl_vars['idCount']->value;?>
'>

        <div class='panel_label' id='le_panellabel_<?php echo $_smarty_tpl->tpl_vars['idCount']->value;?>
'>
          <span class='panel_name' id='le_panelname_<?php echo $_smarty_tpl->tpl_vars['idCount']->value;?>
'>
          	<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'panel_upper', 'panel_upper', null);
echo mb_strtoupper($_smarty_tpl->tpl_vars['panelid']->value, 'UTF-8');
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
			<?php if ($_smarty_tpl->tpl_vars['panelid']->value == 'default') {?>
          		<?php echo $_smarty_tpl->tpl_vars['mod']->value['LBL_DEFAULT'];?>

			<?php } elseif ($_smarty_tpl->tpl_vars['from_mb']->value && (isset($_smarty_tpl->tpl_vars['current_mod_strings']->value[$_smarty_tpl->tpl_vars['panel_upper']->value]))) {?>
                <?php echo $_smarty_tpl->tpl_vars['current_mod_strings']->value[$_smarty_tpl->tpl_vars['panel_upper']->value];?>

			<?php } elseif (!empty($_smarty_tpl->tpl_vars['translate']->value)) {?>
			    <?php echo smarty_function_sugar_translate(array('label'=>mb_strtoupper($_smarty_tpl->tpl_vars['panelid']->value, 'UTF-8'),'module'=>$_smarty_tpl->tpl_vars['language']->value),$_smarty_tpl);?>

			<?php } else { ?>
			    <?php echo $_smarty_tpl->tpl_vars['panelid']->value;?>

			<?php }?></span>
          <span class='panel_id' id='le_panelid_<?php echo $_smarty_tpl->tpl_vars['idCount']->value;?>
'><?php echo $_smarty_tpl->tpl_vars['panelid']->value;?>
</span>
        </div>
        <?php if ($_smarty_tpl->tpl_vars['panelid']->value != 'default') {?>
            <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "otherAttributes", null);?>class="le_edit" style="float:left; cursor:pointer;" onclick="editPanelProperties('<?php echo $_smarty_tpl->tpl_vars['idCount']->value;?>
');"<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
            <?php echo smarty_function_sugar_getimage(array('name'=>"edit_inline",'ext'=>".gif",'other_attributes'=>$_smarty_tpl->tpl_vars['otherAttributes']->value),$_smarty_tpl);?>

        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['no_tabs']->value != true) {?>
        <span id="le_paneltype_<?php echo $_smarty_tpl->tpl_vars['idCount']->value;?>
" style="float:left;">
        &nbsp;&nbsp;<?php echo smarty_function_sugar_translate(array('label'=>"LBL_TABDEF_TYPE",'module'=>"ModuleBuilder"),$_smarty_tpl);?>
&nbsp;<?php echo smarty_function_sugar_help(array('text'=>$_smarty_tpl->tpl_vars['mod']->value['LBL_TABDEF_TYPE_OPTION_HELP']),$_smarty_tpl);?>
:
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['idCounter']->value == 1) {?>
            <?php $_smarty_tpl->_assignInScope('firstpanelid', $_smarty_tpl->tpl_vars['panelid']->value);?>
            <?php $_smarty_tpl->_assignInScope('firstpanelidcount', $_smarty_tpl->tpl_vars['idCount']->value);?>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['no_tabs']->value != true) {?>
        <select id="le_paneltype_select_<?php echo $_smarty_tpl->tpl_vars['idCount']->value;?>
" onchange="document.forms.prepareForSave.tabDefs_<?php echo $_smarty_tpl->tpl_vars['panelid']->value;?>
_newTab.value=this.value; showHideBox(this.value, <?php echo $_smarty_tpl->tpl_vars['idCount']->value;?>
, '<?php echo $_smarty_tpl->tpl_vars['panelid']->value;?>
', '<?php echo $_smarty_tpl->tpl_vars['firstpanelid']->value;?>
', <?php echo $_smarty_tpl->tpl_vars['firstpanelidcount']->value;?>
);"
                title="<?php echo smarty_function_sugar_translate(array('label'=>"LBL_TABDEF_TYPE_HELP",'module'=>"ModuleBuilder"),$_smarty_tpl);?>
">
          <option value="0" <?php if ($_smarty_tpl->tpl_vars['tabDefs']->value[$_smarty_tpl->tpl_vars['panel_upper']->value]['newTab'] == false) {?>selected="selected"<?php }?>><?php echo smarty_function_sugar_translate(array('label'=>"LBL_TABDEF_TYPE_OPTION_PANEL",'module'=>"ModuleBuilder"),$_smarty_tpl);?>
</option>
          <?php if ($_smarty_tpl->tpl_vars['disable_tabs']->value != true) {?>
          <option value="1" <?php if ($_smarty_tpl->tpl_vars['tabDefs']->value[$_smarty_tpl->tpl_vars['panel_upper']->value]['newTab'] == true) {?>selected="selected"<?php }?>><?php echo smarty_function_sugar_translate(array('label'=>"LBL_TABDEF_TYPE_OPTION_TAB",'module'=>"ModuleBuilder"),$_smarty_tpl);?>
</option>
          <?php }?>
        </select>
        </span>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['no_collapse']->value != true) {?>
        <span id="le_panelcollapse_<?php echo $_smarty_tpl->tpl_vars['idCount']->value;?>
" style="float:right;<?php if ((isset($_smarty_tpl->tpl_vars['tabDefs']->value[$_smarty_tpl->tpl_vars['panel_upper']->value]['newTab'])) && $_smarty_tpl->tpl_vars['tabDefs']->value[$_smarty_tpl->tpl_vars['panel_upper']->value]['newTab'] == true) {?>display:none;<?php }?>">
        &nbsp;<?php echo smarty_function_sugar_translate(array('label'=>"LBL_TABDEF_COLLAPSE",'module'=>"ModuleBuilder"),$_smarty_tpl);
echo smarty_function_sugar_translate(array('label'=>"LBL_QUESTION_MARK"),$_smarty_tpl);?>

        <input type="checkbox" title="<?php echo smarty_function_sugar_translate(array('label'=>"LBL_TABDEF_COLLAPSE_HELP",'module'=>"ModuleBuilder"),$_smarty_tpl);?>
" <?php if ($_smarty_tpl->tpl_vars['tabDefs']->value[$_smarty_tpl->tpl_vars['panel_upper']->value]['panelDefault'] == "collapsed") {?>checked="checked"<?php }?>
          onclick="if(this.checked) { document.forms.prepareForSave.tabDefs_<?php echo $_smarty_tpl->tpl_vars['panelid']->value;?>
_panelDefault.value='collapsed'; } else { document.forms.prepareForSave.tabDefs_<?php echo $_smarty_tpl->tpl_vars['panelid']->value;?>
_panelDefault.value='expanded';}" />
        </span>
        <?php }?>
        <?php echo smarty_function_counter(array('name'=>'idCount','assign'=>'idCount','print'=>false),$_smarty_tpl);?>


        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['panel']->value, 'row', false, 'rid');
$_smarty_tpl->tpl_vars['row']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['rid']->value => $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->do_else = false;
?>
            <div class='le_row' id='<?php echo $_smarty_tpl->tpl_vars['idCount']->value;?>
'>
            <?php echo smarty_function_counter(array('name'=>'idCount','assign'=>'idCount','print'=>false),$_smarty_tpl);?>


            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['row']->value, 'col', false, 'cid');
$_smarty_tpl->tpl_vars['col']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['cid']->value => $_smarty_tpl->tpl_vars['col']->value) {
$_smarty_tpl->tpl_vars['col']->do_else = false;
?>
                <?php $_smarty_tpl->_assignInScope('field', $_smarty_tpl->tpl_vars['col']->value['name']);?>
                <div class='le_field' data-name="<?php echo $_smarty_tpl->tpl_vars['col']->value['name'];?>
" id='<?php echo $_smarty_tpl->tpl_vars['idCount']->value;?>
'>
                    <?php if (!$_smarty_tpl->tpl_vars['fromModuleBuilder']->value && ($_smarty_tpl->tpl_vars['col']->value['name'] != '(filler)')) {?>
                        <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "otherAttributes", null);?>class="le_edit" style="float:right; cursor:pointer;" onclick="editFieldProperties('<?php echo $_smarty_tpl->tpl_vars['idCount']->value;?>
', '<?php echo $_smarty_tpl->tpl_vars['col']->value['label'];?>
');"<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
                        <?php echo smarty_function_sugar_getimage(array('name'=>"edit_inline",'ext'=>".gif",'other_attributes'=>$_smarty_tpl->tpl_vars['otherAttributes']->value),$_smarty_tpl);?>

                    <?php }?>

                    <?php if ((isset($_smarty_tpl->tpl_vars['col']->value['type'])) && ($_smarty_tpl->tpl_vars['col']->value['type'] == 'address')) {?>
                        <?php echo $_smarty_tpl->tpl_vars['icon_address']->value;?>

                    <?php }?>
                    <?php if ((isset($_smarty_tpl->tpl_vars['col']->value['type'])) && ($_smarty_tpl->tpl_vars['col']->value['type'] == 'phone')) {?>
                        <?php echo $_smarty_tpl->tpl_vars['icon_phone']->value;?>

                    <?php }?>
                    <?php if ((isset($_smarty_tpl->tpl_vars['field_defs']->value[$_smarty_tpl->tpl_vars['field']->value]['calculated'])) && $_smarty_tpl->tpl_vars['field_defs']->value[$_smarty_tpl->tpl_vars['field']->value]['calculated']) {?>
                        <?php echo smarty_function_sugar_getimage(array('name'=>"SugarLogic/icon_calculated",'alt'=>$_smarty_tpl->tpl_vars['mod_strings']->value['LBL_CALCULATED'],'ext'=>".png",'other_attributes'=>'class="right_icon"'),$_smarty_tpl);?>

                    <?php }?>
                    <?php if ((isset($_smarty_tpl->tpl_vars['field_defs']->value[$_smarty_tpl->tpl_vars['field']->value]['dependency'])) && $_smarty_tpl->tpl_vars['field_defs']->value[$_smarty_tpl->tpl_vars['field']->value]['dependency']) {?>
                        <?php echo smarty_function_sugar_getimage(array('name'=>"SugarLogic/icon_dependent",'ext'=>".png",'alt'=>$_smarty_tpl->tpl_vars['mod_strings']->value['LBL_DEPENDANT'],'other_attributes'=>'class="right_icon"'),$_smarty_tpl);?>

                    <?php }?>
                    <span id='le_label_<?php echo $_smarty_tpl->tpl_vars['idCount']->value;?>
'>
                    <?php $_template = new Smarty_Internal_Template('eval:'.$_smarty_tpl->tpl_vars['col']->value['label'], $_smarty_tpl->smarty, $_smarty_tpl);$_smarty_tpl->assign('label',$_template->fetch()); ?>
                    <?php if (!empty($_smarty_tpl->tpl_vars['translate']->value) && !empty($_smarty_tpl->tpl_vars['col']->value['label'])) {?>
                        <?php echo smarty_function_sugar_translate(array('label'=>$_smarty_tpl->tpl_vars['label']->value,'module'=>$_smarty_tpl->tpl_vars['language']->value),$_smarty_tpl);?>

                    <?php } else { ?>
		                <?php if (!empty($_smarty_tpl->tpl_vars['current_mod_strings']->value[$_smarty_tpl->tpl_vars['label']->value])) {?>
		                    <?php echo $_smarty_tpl->tpl_vars['current_mod_strings']->value[$_smarty_tpl->tpl_vars['label']->value];?>

		                <?php } elseif (!empty($_smarty_tpl->tpl_vars['mod']->value[$_smarty_tpl->tpl_vars['label']->value])) {?>
		                    <?php echo $_smarty_tpl->tpl_vars['mod']->value[$_smarty_tpl->tpl_vars['label']->value];?>

		                <?php } else { ?>
		                	<?php echo $_smarty_tpl->tpl_vars['label']->value;?>

		                <?php }?>
		            <?php }
if (!empty($_smarty_tpl->tpl_vars['col']->value['fieldset'])) {?> **<?php }?></span>
                    <span class='field_name'><?php echo $_smarty_tpl->tpl_vars['col']->value['name'];?>
</span>
                    <span class='field_label'><?php echo $_smarty_tpl->tpl_vars['col']->value['label'];?>
</span>
                    <?php if (!empty($_smarty_tpl->tpl_vars['col']->value['fieldset_fields'])) {?>
                    <span class='field_fieldset_fields' id='fieldset_<?php echo $_smarty_tpl->tpl_vars['idCount']->value;?>
'>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['col']->value['fieldset_fields'], 'fsfield');
$_smarty_tpl->tpl_vars['fsfield']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['fsfield']->value) {
$_smarty_tpl->tpl_vars['fsfield']->do_else = false;
?>
                            <?php $_template = new Smarty_Internal_Template('eval:'.$_smarty_tpl->tpl_vars['fsfield']->value['label'], $_smarty_tpl->smarty, $_smarty_tpl);$_smarty_tpl->assign('fslabel',$_template->fetch()); ?>
                            <?php if (!empty($_smarty_tpl->tpl_vars['translate']->value) && !empty($_smarty_tpl->tpl_vars['fsfield']->value['label'])) {?>
                                <?php echo smarty_function_sugar_translate(array('label'=>$_smarty_tpl->tpl_vars['fslabel']->value,'module'=>$_smarty_tpl->tpl_vars['language']->value),$_smarty_tpl);?>

                            <?php } else { ?>
                                <?php if (!empty($_smarty_tpl->tpl_vars['current_mod_strings']->value[$_smarty_tpl->tpl_vars['fslabel']->value])) {?>
                                    <?php echo $_smarty_tpl->tpl_vars['current_mod_strings']->value[$_smarty_tpl->tpl_vars['fslabel']->value];?>

                                <?php } elseif (!empty($_smarty_tpl->tpl_vars['mod']->value[$_smarty_tpl->tpl_vars['fslabel']->value])) {?>
                                    <?php echo $_smarty_tpl->tpl_vars['mod']->value[$_smarty_tpl->tpl_vars['fslabel']->value];?>

                                <?php } else { ?>
                                    <?php echo $_smarty_tpl->tpl_vars['fslabel']->value;?>

                                <?php }?>
                            <?php }?><br>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </span>
                    <?php }?>
                    <span id='le_tabindex_<?php echo $_smarty_tpl->tpl_vars['idCount']->value;?>
' class='field_tabindex'><?php echo $_smarty_tpl->tpl_vars['col']->value['tabindex'];?>
</span>
                </div>
                <?php echo smarty_function_counter(array('name'=>'idCount','assign'=>'idCount','print'=>false),$_smarty_tpl);?>

            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

        </div>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

    </div>
    <?php echo smarty_function_counter(array('name'=>'idCounter','assign'=>'idCounter','print'=>false),$_smarty_tpl);?>

<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

</div>
<input type='hidden' id='idCount' value='<?php echo $_smarty_tpl->tpl_vars['idCount']->value;?>
'>
</div>

<form name='prepareForSave' id='prepareForSave' action='index.php'>
<?php echo smarty_function_sugar_csrf_form_token(array(),$_smarty_tpl);?>

<input type='hidden' name='module' value='ModuleBuilder'>
<input type='hidden' name='view_module' value='<?php echo $_smarty_tpl->tpl_vars['view_module']->value;?>
'>
<input type='hidden' name='view' value='<?php echo $_smarty_tpl->tpl_vars['view']->value;?>
'>
<input type='hidden' name="panels_as_tabs" value='<?php echo $_smarty_tpl->tpl_vars['displayAsTabs']->value;?>
'>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value, 'panel', false, 'panelid');
$_smarty_tpl->tpl_vars['panel']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['panelid']->value => $_smarty_tpl->tpl_vars['panel']->value) {
$_smarty_tpl->tpl_vars['panel']->do_else = false;
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'panel_upper', 'panel_upper', null);
echo mb_strtoupper($_smarty_tpl->tpl_vars['panelid']->value, 'UTF-8');
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
<input type="hidden" name="tabDefs_<?php echo $_smarty_tpl->tpl_vars['panelid']->value;?>
_newTab" value="<?php if ($_smarty_tpl->tpl_vars['tabDefs']->value[$_smarty_tpl->tpl_vars['panel_upper']->value]['newTab'] == true) {?>1<?php } else { ?>0<?php }?>" />
<input type="hidden" name="tabDefs_<?php echo $_smarty_tpl->tpl_vars['panelid']->value;?>
_panelDefault" value="<?php echo $_smarty_tpl->tpl_vars['tabDefs']->value[$_smarty_tpl->tpl_vars['panel_upper']->value]['panelDefault'];?>
" />
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
<input type='hidden' name="sync_detail_and_edit" value='<?php echo $_smarty_tpl->tpl_vars['syncDetailEditViews']->value;?>
'>
<!-- BEGIN SUGARCRM flav=ent ONLY -->
<?php if ($_smarty_tpl->tpl_vars['fromPortal']->value) {?>
    <input type='hidden' name='PORTAL' value='1'>
<?php }?>
<!-- END SUGARCRM flav=ent ONLY -->
<?php if ($_smarty_tpl->tpl_vars['fromModuleBuilder']->value) {?>
    <input type='hidden' name='MB' value='1'>
    <input type='hidden' name='view_package' value='<?php echo $_smarty_tpl->tpl_vars['view_package']->value;?>
'>
<?php }?>
<input type='hidden' name='role' value='<?php echo $_smarty_tpl->tpl_vars['selected_role']->value;?>
'>
    <input type='hidden' name='layoutOption' value='<?php echo $_smarty_tpl->tpl_vars['selected_layoutOption']->value;?>
'>
    <input type='hidden' name='dropdownField' value='<?php echo $_smarty_tpl->tpl_vars['selected_dropdownField']->value;?>
'>
    <input type='hidden' name='dropdownValue' value='<?php echo $_smarty_tpl->tpl_vars['selected_dropdownValue']->value;?>
'>
<input type='hidden' name='to_pdf' value='1'>
</form>
<?php echo '<script'; ?>
>


Studio2.calcFieldList = <?php echo $_smarty_tpl->tpl_vars['calc_field_list']->value;?>
;


var editPanelProperties = function (panelId, view) {
    panelId = "" + panelId;
	var key_label = document.getElementById('le_panelid_' + panelId).innerHTML.replace(/^\s+|\s+$/g,'');
	var value_label = document.getElementById('le_panelname_' + panelId).innerHTML.replace(/^\s+|\s+$/g,'');
	var params = "module=ModuleBuilder&action=editProperty&view_module=" + encodeURIComponent(ModuleBuilder.module)
	            + (ModuleBuilder.package ?  "&view_package=" + encodeURIComponent(ModuleBuilder.package) : "")
                + "&view=" + encodeURIComponent(view) + "&id_label=le_panelname_" + encodeURIComponent(panelId) + "&name_label=label_" + encodeURIComponent(key_label.toUpperCase())
                + "&title_label=" + encodeURIComponent(SUGAR.language.get("ModuleBuilder", "LBL_LABEL_TITLE")) + "&value_label=" + encodeURIComponent(value_label);
    ModuleBuilder.getContent(params);
};

var showHideBox = function (newTab, idCount, panelId, firstPanelId, firstPanelIdCount) {
    var collapseBox = document.getElementById('le_panelcollapse_' + idCount);
    if (newTab == "1") {
        collapseBox.style.display = 'none';
        if (idCount != firstPanelIdCount) {
            document.getElementById('le_paneltype_select_' + firstPanelIdCount).options[1].selected = true;
            document.getElementById('le_panelcollapse_' + firstPanelIdCount).style.display = 'none';
            document.forms.prepareForSave['tabDefs_' + firstPanelId + '_newTab'].value = '1';
            document.getElementById('le_paneltype_select_' + firstPanelIdCount).disabled = true;
        }
    }
    else {
        var elem = document.getElementById('prepareForSave').elements;
        var has_tab = false;
        collapseBox.style.display = 'block';
        for (var i = 0; i < elem.length; i++) {
            if (elem[i].name.match(/^tabDefs_.*_newTab$/)) {
                if (elem[i].value == '1' && elem[i].name != panelId && elem[i].name != 'tabDefs_'+firstPanelId+'_newTab')
                    has_tab = true;
            }
        }
        if (has_tab == false) {
            document.getElementById('le_paneltype_select_' + firstPanelIdCount).disabled = false;
        }
    }
};


var editFieldProperties = function (idCount, label) {
	var value_label = document.getElementById('le_label_' + idCount).innerHTML.replace(/^\s+|\s+$/g,''); 
	var value_tabindex = document.getElementById('le_tabindex_' + idCount).innerHTML.replace(/^\s+|\s+$/g,'');
	var title_label = '<?php echo smarty_function_sugar_translate(array('label'=>"LBL_LABEL_TITLE",'module'=>"ModuleBuilder"),$_smarty_tpl);?>
';
	var title_tabindex = '<?php echo smarty_function_sugar_translate(array('label'=>"LBL_TAB_ORDER",'module'=>"ModuleBuilder"),$_smarty_tpl);?>
';
	
	ModuleBuilder.getContent(
	  	'module=ModuleBuilder&action=editProperty'
	  + '&view_module=<?php echo rawurlencode($_smarty_tpl->tpl_vars['view_module']->value);?>
' + '<?php if ($_smarty_tpl->tpl_vars['fromModuleBuilder']->value) {?>&view_package=<?php echo $_smarty_tpl->tpl_vars['view_package']->value;
}?>'
	  +	'&view=<?php echo rawurlencode($_smarty_tpl->tpl_vars['view']->value);?>
&id_label=le_label_' + encodeURIComponent(idCount) 
	  + '&name_label=label_' + encodeURIComponent(label) + '&title_label=' + encodeURIComponent(title_label)
	  + '&value_label=' + encodeURIComponent(value_label) + '&id_tabindex=le_tabindex_' + encodeURIComponent(idCount) 
	  + '&title_tabindex=' + encodeURIComponent(title_tabindex)
	  + '&name_tabindex=tabindex&value_tabindex=' + encodeURIComponent(value_tabindex) );
	
}

Studio2.firstPanelId = "<?php echo $_smarty_tpl->tpl_vars['firstpanelid']->value;?>
";
Studio2.firstPanelIdCount = <?php echo $_smarty_tpl->tpl_vars['firstpanelidcount']->value;?>
;
Studio2.init();
if('<?php echo $_smarty_tpl->tpl_vars['view']->value;?>
'.toLowerCase() != 'editview')
    ModuleBuilder.helpSetup('layoutEditor','default'+'<?php echo $_smarty_tpl->tpl_vars['view']->value;?>
'.toLowerCase());
if('<?php echo $_smarty_tpl->tpl_vars['from_mb']->value;?>
')
    ModuleBuilder.helpUnregisterByID('saveBtn');

ModuleBuilder.MBpackage = "<?php echo $_smarty_tpl->tpl_vars['view_package']->value;?>
";

Studio2.requiredFields = [<?php echo $_smarty_tpl->tpl_vars['required_fields']->value;?>
];

//rrs: this is for IE 7 which only supports javascript 1.6 and does not have indexOf support.
if (typeof new Array().indexOf == "undefined") {
  Array.prototype.indexOf = function (obj, start) {
    for (var i = (start || 0); i < this.length; i++) {
      if (this[i] == obj) {
        return i;
      }
    }
    return -1;
  }
}

ModuleBuilder.module = "<?php echo $_smarty_tpl->tpl_vars['view_module']->value;?>
";
ModuleBuilder.package=<?php if ($_smarty_tpl->tpl_vars['fromModuleBuilder']->value) {?>"<?php echo $_smarty_tpl->tpl_vars['view_package']->value;?>
"<?php } else { ?>false<?php }?>;


ModuleBuilder.disablePopupPrompt = <?php if ($_smarty_tpl->tpl_vars['syncDetailEditViews']->value) {
echo $_smarty_tpl->tpl_vars['syncDetailEditViews']->value;
} else { ?>false<?php }?>;
<?php echo '</script'; ?>
>

<div id="copy-from-contents" style="display: none">
    <label for="copy-from-options"><?php echo smarty_function_sugar_translate(array('label'=>"LBL_COPY_FROM",'module'=>"ModuleBuilder"),$_smarty_tpl);?>
:&nbsp;</label>
    <?php echo smarty_function_html_options(array('name'=>"copy-from-options",'id'=>"copy-from-options",'options'=>$_smarty_tpl->tpl_vars['copy_from_options']->value),$_smarty_tpl);?>

</div>
<?php }
}
