<?php
/* Smarty version 3.1.39, created on 2022-07-22 19:17:40
  from '/var/www/html/SugarEnt-Full-12.0.0/include/EditView/EditView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_62dab1845045d2_24629041',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b8f3d95b642718a29322cca88182eef13309ad08' => 
    array (
      0 => '/var/www/html/SugarEnt-Full-12.0.0/include/EditView/EditView.tpl',
      1 => 1649221080,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62dab1845045d2_24629041 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/SugarEnt-Full-12.0.0/vendor/smarty/smarty/libs/plugins/function.counter.php','function'=>'smarty_function_counter',),1=>array('file'=>'/var/www/html/SugarEnt-Full-12.0.0/vendor/smarty/smarty/libs/plugins/function.math.php','function'=>'smarty_function_math',),2=>array('file'=>'/var/www/html/SugarEnt-Full-12.0.0/include/SugarSmarty/plugins/function.sugar_field.php','function'=>'smarty_function_sugar_field',),3=>array('file'=>'/var/www/html/SugarEnt-Full-12.0.0/include/SugarSmarty/plugins/function.sugar_evalcolumn.php','function'=>'smarty_function_sugar_evalcolumn',),));
?>
{*
/*
 * Your installation or use of this SugarCRM file is subject to the applicable
 * terms available at
 * http://support.sugarcrm.com/Resources/Master_Subscription_Agreements/.
 * If you do not agree to all of the applicable terms or do not have the
 * authority to bind the entity as an authorized representative, then do not
 * install or use this SugarCRM file.
 *
 * Copyright (C) SugarCRM Inc. All rights reserved.
 */
*}

<?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['headerTpl']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
{sugar_include include=$includes}

<span id='tabcounterJS'><?php echo '<script'; ?>
>SUGAR.TabFields=new Array();//this will be used to track tabindexes for references<?php echo '</script'; ?>
></span>

<div id="<?php echo $_smarty_tpl->tpl_vars['form_name']->value;?>
_tabs"
<?php if ($_smarty_tpl->tpl_vars['useTabs']->value) {?>
class="yui-navset"
<?php }?>
>
    <?php if ($_smarty_tpl->tpl_vars['useTabs']->value) {?>
    {* Generate the Tab headers *}
    <?php echo smarty_function_counter(array('name'=>"tabCount",'start'=>-1,'print'=>false,'assign'=>"tabCount"),$_smarty_tpl);?>

    <ul class="yui-nav">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sectionPanels']->value, 'panel', false, 'label', 'section', array (
  'iteration' => true,
));
$_smarty_tpl->tpl_vars['panel']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['label']->value => $_smarty_tpl->tpl_vars['panel']->value) {
$_smarty_tpl->tpl_vars['panel']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_section']->value['iteration']++;
?>
        <?php echo smarty_function_counter(array('name'=>"tabCount",'print'=>false),$_smarty_tpl);?>

        <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'label_upper', 'label_upper', null);
echo mb_strtoupper($_smarty_tpl->tpl_vars['label']->value, 'UTF-8');
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
        <?php if (((isset($_smarty_tpl->tpl_vars['tabDefs']->value[$_smarty_tpl->tpl_vars['label_upper']->value]['newTab'])) && $_smarty_tpl->tpl_vars['tabDefs']->value[$_smarty_tpl->tpl_vars['label_upper']->value]['newTab'] == true)) {?>
        <li class="selected"><a id="tab<?php echo $_smarty_tpl->tpl_vars['tabCount']->value;?>
" href="javascript:void(<?php echo $_smarty_tpl->tpl_vars['tabCount']->value;?>
)"><em>{sugar_translate label='<?php echo $_smarty_tpl->tpl_vars['label']->value;?>
' module='<?php echo $_smarty_tpl->tpl_vars['module']->value;?>
'}</em></a></li>
        <?php }?>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ul>
    <?php }?>
    <div <?php if ($_smarty_tpl->tpl_vars['useTabs']->value) {?>class="yui-content"<?php }?>>

<?php $_smarty_tpl->_assignInScope('tabIndexVal', 0);
echo smarty_function_counter(array('name'=>"panelCount",'start'=>-1,'print'=>false,'assign'=>"panelCount"),$_smarty_tpl);?>

<?php echo smarty_function_counter(array('name'=>"tabCount",'start'=>-1,'print'=>false,'assign'=>"tabCount"),$_smarty_tpl);?>

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sectionPanels']->value, 'panel', false, 'label', 'section', array (
  'iteration' => true,
));
$_smarty_tpl->tpl_vars['panel']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['label']->value => $_smarty_tpl->tpl_vars['panel']->value) {
$_smarty_tpl->tpl_vars['panel']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_section']->value['iteration']++;
echo smarty_function_counter(array('name'=>"panelCount",'print'=>false),$_smarty_tpl);?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'label_upper', 'label_upper', null);
echo mb_strtoupper($_smarty_tpl->tpl_vars['label']->value, 'UTF-8');
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
  <?php if (((isset($_smarty_tpl->tpl_vars['tabDefs']->value[$_smarty_tpl->tpl_vars['label_upper']->value]['newTab'])) && $_smarty_tpl->tpl_vars['tabDefs']->value[$_smarty_tpl->tpl_vars['label_upper']->value]['newTab'] == true)) {?>
    <?php echo smarty_function_counter(array('name'=>"tabCount",'print'=>false),$_smarty_tpl);?>

    <?php if ($_smarty_tpl->tpl_vars['tabCount']->value != 0) {?></div><?php }?>
    <div id='tabcontent<?php echo $_smarty_tpl->tpl_vars['tabCount']->value;?>
'>
  <?php }?>

<?php if ($_smarty_tpl->tpl_vars['label']->value == 'DEFAULT') {?>
  <div id="detailpanel_<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_foreach_section']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_section']->value['iteration'] : null);?>
" >
<?php } else { ?>
  <div id="detailpanel_<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_foreach_section']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_section']->value['iteration'] : null);?>
" class="{$def.templateMeta.panelClass|default:'edit view edit508'}">
<?php }?>

{counter name="panelFieldCount" start=0 print=false assign="panelFieldCount"}
<?php if (!is_array($_smarty_tpl->tpl_vars['panel']->value)) {?>
    {sugar_include type='php' file='<?php echo $_smarty_tpl->tpl_vars['panel']->value;?>
'}
<?php } else { ?>

<?php if (!empty($_smarty_tpl->tpl_vars['label']->value) && !is_int($_smarty_tpl->tpl_vars['label']->value) && $_smarty_tpl->tpl_vars['label']->value != 'DEFAULT' && $_smarty_tpl->tpl_vars['showSectionPanelsTitles']->value && (!(isset($_smarty_tpl->tpl_vars['tabDefs']->value[$_smarty_tpl->tpl_vars['label_upper']->value]['newTab'])) || ((isset($_smarty_tpl->tpl_vars['tabDefs']->value[$_smarty_tpl->tpl_vars['label_upper']->value]['newTab'])) && $_smarty_tpl->tpl_vars['tabDefs']->value[$_smarty_tpl->tpl_vars['label_upper']->value]['newTab'] == false)) && $_smarty_tpl->tpl_vars['view']->value != "QuickCreate") {?>
<h4>&nbsp;&nbsp;
  <a href="javascript:void(0)" class="collapseLink" onclick="collapsePanel(<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_foreach_section']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_section']->value['iteration'] : null);?>
);">
  <img border="0" id="detailpanel_<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_foreach_section']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_section']->value['iteration'] : null);?>
_img_hide" src="{sugar_getimagepath file="basic_search.gif"}"></a>
  <a href="javascript:void(0)" class="expandLink" onclick="expandPanel(<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_foreach_section']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_section']->value['iteration'] : null);?>
);">
  <img border="0" id="detailpanel_<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_foreach_section']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_section']->value['iteration'] : null);?>
_img_show" src="{sugar_getimagepath file="advanced_search.gif"}"></a>
  {sugar_translate label='<?php echo $_smarty_tpl->tpl_vars['label']->value;?>
' module='<?php echo $_smarty_tpl->tpl_vars['module']->value;?>
'}
  <?php if (((isset($_smarty_tpl->tpl_vars['tabDefs']->value[$_smarty_tpl->tpl_vars['label_upper']->value]['panelDefault'])) && $_smarty_tpl->tpl_vars['tabDefs']->value[$_smarty_tpl->tpl_vars['label_upper']->value]['panelDefault'] == "collapsed" && (isset($_smarty_tpl->tpl_vars['tabDefs']->value[$_smarty_tpl->tpl_vars['label_upper']->value]['newTab'])) && $_smarty_tpl->tpl_vars['tabDefs']->value[$_smarty_tpl->tpl_vars['label_upper']->value]['newTab'] == false)) {?>
    <?php $_smarty_tpl->_assignInScope('panelState', $_smarty_tpl->tpl_vars['tabDefs']->value[$_smarty_tpl->tpl_vars['label_upper']->value]['panelDefault']);?>
  <?php } else { ?>
    <?php $_smarty_tpl->_assignInScope('panelState', "expanded");?>
  <?php }?>
  <?php if ((isset($_smarty_tpl->tpl_vars['panelState']->value)) && $_smarty_tpl->tpl_vars['panelState']->value == 'collapsed') {?>
    <?php echo '<script'; ?>
>
      document.getElementById('detailpanel_<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_foreach_section']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_section']->value['iteration'] : null);?>
').className += ' collapsed';
    <?php echo '</script'; ?>
>
    <?php } else { ?>
    <?php echo '<script'; ?>
>
      document.getElementById('detailpanel_<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_foreach_section']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_section']->value['iteration'] : null);?>
').className += ' expanded';
    <?php echo '</script'; ?>
>
  <?php }?>
</h4>
 <?php }?>
<table width="100%" border="0" cellspacing="1" cellpadding="0" <?php if ($_smarty_tpl->tpl_vars['label']->value == 'DEFAULT') {?> id='Default_{$module}_Subpanel' <?php } else { ?> id='<?php echo $_smarty_tpl->tpl_vars['label']->value;?>
' <?php }?> class="yui3-skin-sam edit view panelContainer">


<?php $_smarty_tpl->_assignInScope('rowCount', 0);
$_smarty_tpl->_assignInScope('ACCKEY', '');
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['panel']->value, 'rowData', false, 'row', 'rowIteration', array (
));
$_smarty_tpl->tpl_vars['rowData']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['row']->value => $_smarty_tpl->tpl_vars['rowData']->value) {
$_smarty_tpl->tpl_vars['rowData']->do_else = false;
?>
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{capture name="tr" assign="tableRow"}
<tr>

	<?php echo smarty_function_math(array('assign'=>"rowCount",'equation'=>((string)$_smarty_tpl->tpl_vars['rowCount']->value)." + 1"),$_smarty_tpl);?>


	<?php $_smarty_tpl->_assignInScope('columnsInRow', count($_smarty_tpl->tpl_vars['rowData']->value));?>
	<?php $_smarty_tpl->_assignInScope('columnsUsed', 0);?>

        <?php echo smarty_function_counter(array('name'=>"colCount",'start'=>0,'print'=>false,'assign'=>"colCount"),$_smarty_tpl);?>


	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rowData']->value, 'colData', false, 'col', 'colIteration', array (
  'index' => true,
));
$_smarty_tpl->tpl_vars['colData']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['col']->value => $_smarty_tpl->tpl_vars['colData']->value) {
$_smarty_tpl->tpl_vars['colData']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_colIteration']->value['index']++;
?>

	<?php echo smarty_function_counter(array('name'=>"colCount",'print'=>false),$_smarty_tpl);?>


	<?php if (count($_smarty_tpl->tpl_vars['rowData']->value) == $_smarty_tpl->tpl_vars['colCount']->value) {?>
		<?php $_smarty_tpl->_assignInScope('colCount', 0);?>
	<?php }?>

    <?php if (!empty($_smarty_tpl->tpl_vars['colData']->value['field']['hideIf'])) {?>
    	{if !(<?php echo $_smarty_tpl->tpl_vars['colData']->value['field']['hideIf'];?>
) }
    <?php }?>
	<?php if (!empty($_smarty_tpl->tpl_vars['colData']->value['field']['name'])) {?>
		{if $fields.<?php echo $_smarty_tpl->tpl_vars['colData']->value['field']['name'];?>
.acl > 1 || ($showDetailData && $fields.<?php echo $_smarty_tpl->tpl_vars['colData']->value['field']['name'];?>
.acl > 0)}
	<?php }?>

		<?php if (empty($_smarty_tpl->tpl_vars['def']->value['templateMeta']['labelsOnTop']) && empty($_smarty_tpl->tpl_vars['colData']->value['field']['hideLabel'])) {?>
		<td valign="top" id='<?php echo $_smarty_tpl->tpl_vars['colData']->value['field']['name'];?>
_label' width='<?php echo $_smarty_tpl->tpl_vars['def']->value['templateMeta']['widths'][(isset($_smarty_tpl->tpl_vars['__smarty_foreach_colIteration']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_colIteration']->value['index'] : null)]['label'];?>
%' scope="col">
			<?php if ((isset($_smarty_tpl->tpl_vars['colData']->value['field']['customLabel']))) {?>
			   <label for="<?php echo $_smarty_tpl->tpl_vars['fields']->value[$_smarty_tpl->tpl_vars['colData']->value['field']['name']]['name'];?>
"><?php echo $_smarty_tpl->tpl_vars['colData']->value['field']['customLabel'];?>
</label>
			<?php } elseif ((isset($_smarty_tpl->tpl_vars['colData']->value['field']['label']))) {?>
			   {capture name="label" assign="label"}{sugar_translate label='<?php echo $_smarty_tpl->tpl_vars['colData']->value['field']['label'];?>
' module='<?php echo $_smarty_tpl->tpl_vars['module']->value;?>
'}{/capture}
			   {$label|strip_semicolon}:
			<?php } elseif ((isset($_smarty_tpl->tpl_vars['fields']->value[$_smarty_tpl->tpl_vars['colData']->value['field']['name']]))) {?>
			   {capture name="label" assign="label"}{sugar_translate label='<?php echo $_smarty_tpl->tpl_vars['fields']->value[$_smarty_tpl->tpl_vars['colData']->value['field']['name']]['vname'];?>
' module='<?php echo $_smarty_tpl->tpl_vars['module']->value;?>
'}{/capture}
			   {$label|strip_semicolon}:
			<?php } else { ?>
			    &nbsp;
			<?php }?>
							<?php if (($_smarty_tpl->tpl_vars['fields']->value[$_smarty_tpl->tpl_vars['colData']->value['field']['name']]['required'] && (!(isset($_smarty_tpl->tpl_vars['colData']->value['field']['displayParams']['required'])) || $_smarty_tpl->tpl_vars['colData']->value['field']['displayParams']['required'])) || ((isset($_smarty_tpl->tpl_vars['colData']->value['field']['displayParams']['required'])) && $_smarty_tpl->tpl_vars['colData']->value['field']['displayParams']['required'])) {?>
			    <span class="required"><?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_REQUIRED_SYMBOL'];?>
</span>
			<?php }?>

                                                <?php if ($_smarty_tpl->tpl_vars['colData']->value['field']['name']) {?>
            {if $fields.<?php echo $_smarty_tpl->tpl_vars['colData']->value['field']['name'];?>
.locked == true}
                {$lockedIcon}
            {/if}
            <?php }?>
            <?php if ((isset($_smarty_tpl->tpl_vars['colData']->value['field']['popupHelp'])) || (isset($_smarty_tpl->tpl_vars['fields']->value[$_smarty_tpl->tpl_vars['colData']->value['field']['name']])) && (isset($_smarty_tpl->tpl_vars['fields']->value[$_smarty_tpl->tpl_vars['colData']->value['field']['name']]['popupHelp']))) {?>
              <?php if ((isset($_smarty_tpl->tpl_vars['colData']->value['field']['popupHelp']))) {?>
                {capture name="popupText" assign="popupText"}{sugar_translate label="<?php echo $_smarty_tpl->tpl_vars['colData']->value['field']['popupHelp'];?>
" module='<?php echo $_smarty_tpl->tpl_vars['module']->value;?>
'}{/capture}
              <?php } elseif ((isset($_smarty_tpl->tpl_vars['fields']->value[$_smarty_tpl->tpl_vars['colData']->value['field']['name']]['popupHelp']))) {?>
                {capture name="popupText" assign="popupText"}{sugar_translate label="<?php echo $_smarty_tpl->tpl_vars['fields']->value[$_smarty_tpl->tpl_vars['colData']->value['field']['name']]['popupHelp'];?>
" module='<?php echo $_smarty_tpl->tpl_vars['module']->value;?>
'}{/capture}
              <?php }?>
              {sugar_help text=$popupText WIDTH=-1}
            <?php }?>

		</td>
		<?php }?>
		{counter name="fieldsUsed"}
		<?php echo smarty_function_math(array('assign'=>"tabIndexVal",'equation'=>((string)$_smarty_tpl->tpl_vars['tabIndexVal']->value)." + 1"),$_smarty_tpl);?>

		<?php if ($_smarty_tpl->tpl_vars['tabIndexVal']->value == 1) {?> <?php $_smarty_tpl->_assignInScope('ACCKEY', $_smarty_tpl->tpl_vars['APP']->value['LBL_FIRST_INPUT_EDIT_VIEW_KEY']);
} else {
$_smarty_tpl->_assignInScope('ACCKEY', '');
}?>
		<?php if (!empty($_smarty_tpl->tpl_vars['colData']->value['field']['tabindex']) && $_smarty_tpl->tpl_vars['colData']->value['field']['tabindex'] != 0) {?>
		    <?php $_smarty_tpl->_assignInScope('tabindex', $_smarty_tpl->tpl_vars['colData']->value['field']['tabindex']);?>
                        <?php if ($_smarty_tpl->tpl_vars['colData']->value['field']['name'] == 'email1') {
echo '<script'; ?>
>SUGAR.TabFields['<?php echo $_smarty_tpl->tpl_vars['colData']->value['field']['name'];?>
'] = '<?php echo $_smarty_tpl->tpl_vars['tabindex']->value;?>
';<?php echo '</script'; ?>
><?php }?>
		<?php } else { ?>
		    {** if not explicitly assigned, we will default to 0 for 508 compliance reasons, instead of the calculated tabIndexVal value **}
		    <?php $_smarty_tpl->_assignInScope('tabindex', 0);?>
		<?php }?>
		<td valign="top" width='<?php echo $_smarty_tpl->tpl_vars['def']->value['templateMeta']['widths'][(isset($_smarty_tpl->tpl_vars['__smarty_foreach_colIteration']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_colIteration']->value['index'] : null)]['field'];?>
%' <?php if ($_smarty_tpl->tpl_vars['colData']->value['colspan']) {?>colspan='<?php echo $_smarty_tpl->tpl_vars['colData']->value['colspan'];?>
'<?php }?>>
			<?php if (!empty($_smarty_tpl->tpl_vars['def']->value['templateMeta']['labelsOnTop'])) {?>
				<?php if ((isset($_smarty_tpl->tpl_vars['colData']->value['field']['label']))) {?>
				    <?php if (!empty($_smarty_tpl->tpl_vars['colData']->value['field']['label'])) {?>
			   		    <label for="<?php echo $_smarty_tpl->tpl_vars['fields']->value[$_smarty_tpl->tpl_vars['colData']->value['field']['name']]['name'];?>
">{sugar_translate label='<?php echo $_smarty_tpl->tpl_vars['colData']->value['field']['label'];?>
' module='<?php echo $_smarty_tpl->tpl_vars['module']->value;?>
'}:</label>
				    <?php }?>
				<?php } elseif ((isset($_smarty_tpl->tpl_vars['fields']->value[$_smarty_tpl->tpl_vars['colData']->value['field']['name']]))) {?>
			  		<label for="<?php echo $_smarty_tpl->tpl_vars['fields']->value[$_smarty_tpl->tpl_vars['colData']->value['field']['name']]['name'];?>
">{sugar_translate label='<?php echo $_smarty_tpl->tpl_vars['fields']->value[$_smarty_tpl->tpl_vars['colData']->value['field']['name']]['vname'];?>
' module='<?php echo $_smarty_tpl->tpl_vars['module']->value;?>
'}:</label>
				<?php }?>

								<?php if (($_smarty_tpl->tpl_vars['fields']->value[$_smarty_tpl->tpl_vars['colData']->value['field']['name']]['required'] && (!(isset($_smarty_tpl->tpl_vars['colData']->value['field']['displayParams']['required'])) || $_smarty_tpl->tpl_vars['colData']->value['field']['displayParams']['required'])) || ((isset($_smarty_tpl->tpl_vars['colData']->value['field']['displayParams']['required'])) && $_smarty_tpl->tpl_vars['colData']->value['field']['displayParams']['required'])) {?>
				    <span class="required" title="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_REQUIRED_TITLE'];?>
"><?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_REQUIRED_SYMBOL'];?>
</span>
				<?php }?>
				<?php if (!(isset($_smarty_tpl->tpl_vars['colData']->value['field']['label'])) || !empty($_smarty_tpl->tpl_vars['colData']->value['field']['label'])) {?>
				<br>
				<?php }?>
			<?php }?>

		<?php echo $_smarty_tpl->tpl_vars['colData']->value['field']['prefix'];?>

		<?php if (!empty($_smarty_tpl->tpl_vars['colData']->value['field']['name'])) {?>
            {if $fields.<?php echo $_smarty_tpl->tpl_vars['colData']->value['field']['name'];?>
.acl > 1 && $fields.<?php echo $_smarty_tpl->tpl_vars['colData']->value['field']['name'];?>
.locked == false && $fields.<?php echo $_smarty_tpl->tpl_vars['colData']->value['field']['name'];?>
.disabled == false}
		<?php }?>

			<?php if ($_smarty_tpl->tpl_vars['fields']->value[$_smarty_tpl->tpl_vars['colData']->value['field']['name']] && !empty($_smarty_tpl->tpl_vars['colData']->value['field']['fields'])) {?>
			    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['colData']->value['field']['fields'], 'subField');
$_smarty_tpl->tpl_vars['subField']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['subField']->value) {
$_smarty_tpl->tpl_vars['subField']->do_else = false;
?>
			        <?php if ($_smarty_tpl->tpl_vars['fields']->value[$_smarty_tpl->tpl_vars['subField']->value['name']]) {?>
			        	{counter name="panelFieldCount"}
			            <?php echo smarty_function_sugar_field(array('parentFieldArray'=>'fields','accesskey'=>$_smarty_tpl->tpl_vars['ACCKEY']->value,'tabindex'=>$_smarty_tpl->tpl_vars['tabindex']->value,'vardef'=>$_smarty_tpl->tpl_vars['fields']->value[$_smarty_tpl->tpl_vars['subField']->value['name']],'displayType'=>'EditView','displayParams'=>$_smarty_tpl->tpl_vars['subField']->value['displayParams'],'formName'=>$_smarty_tpl->tpl_vars['form_name']->value),$_smarty_tpl);?>
&nbsp;
			        <?php }?>
			    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			<?php } elseif (!empty($_smarty_tpl->tpl_vars['colData']->value['field']['customCode']) && empty($_smarty_tpl->tpl_vars['colData']->value['field']['customCodeRenderField'])) {?>
				{counter name="panelFieldCount"}
				<?php echo smarty_function_sugar_evalcolumn(array('var'=>$_smarty_tpl->tpl_vars['colData']->value['field']['customCode'],'colData'=>$_smarty_tpl->tpl_vars['colData']->value,'accesskey'=>$_smarty_tpl->tpl_vars['ACCKEY']->value,'tabindex'=>$_smarty_tpl->tpl_vars['tabindex']->value),$_smarty_tpl);?>

			<?php } elseif ($_smarty_tpl->tpl_vars['fields']->value[$_smarty_tpl->tpl_vars['colData']->value['field']['name']]) {?>
				{counter name="panelFieldCount"}
			    <?php echo $_smarty_tpl->tpl_vars['colData']->value['displayParams'];?>

				<?php echo smarty_function_sugar_field(array('parentFieldArray'=>'fields','accesskey'=>$_smarty_tpl->tpl_vars['ACCKEY']->value,'tabindex'=>$_smarty_tpl->tpl_vars['tabindex']->value,'vardef'=>$_smarty_tpl->tpl_vars['fields']->value[$_smarty_tpl->tpl_vars['colData']->value['field']['name']],'displayType'=>'EditView','displayParams'=>$_smarty_tpl->tpl_vars['colData']->value['field']['displayParams'],'typeOverride'=>$_smarty_tpl->tpl_vars['colData']->value['field']['type'],'formName'=>$_smarty_tpl->tpl_vars['form_name']->value),$_smarty_tpl);?>

			<?php }?>
		<?php if (!empty($_smarty_tpl->tpl_vars['colData']->value['field']['name'])) {?>
		<?php if ($_smarty_tpl->tpl_vars['showDetailData']->value) {?>
		{else}
			<?php if ($_smarty_tpl->tpl_vars['fields']->value[$_smarty_tpl->tpl_vars['colData']->value['field']['name']] && !empty($_smarty_tpl->tpl_vars['colData']->value['field']['fields'])) {?>
			    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['colData']->value['field']['fields'], 'subField');
$_smarty_tpl->tpl_vars['subField']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['subField']->value) {
$_smarty_tpl->tpl_vars['subField']->do_else = false;
?>
			        <?php if ($_smarty_tpl->tpl_vars['fields']->value[$_smarty_tpl->tpl_vars['subField']->value['name']]) {?>

			            <?php echo smarty_function_sugar_field(array('parentFieldArray'=>'fields','tabindex'=>$_smarty_tpl->tpl_vars['tabindex']->value,'vardef'=>$_smarty_tpl->tpl_vars['fields']->value[$_smarty_tpl->tpl_vars['subField']->value['name']],'displayType'=>'DetailView','displayParams'=>$_smarty_tpl->tpl_vars['subField']->value['displayParams'],'formName'=>$_smarty_tpl->tpl_vars['form_name']->value),$_smarty_tpl);?>
&nbsp;
			        <?php }?>
			    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			<?php } elseif (!empty($_smarty_tpl->tpl_vars['colData']->value['field']['customCode'])) {?>
                <?php if (!empty($_smarty_tpl->tpl_vars['colData']->value['field']['customCodeReadOnly'])) {?>
                   <?php echo $_smarty_tpl->tpl_vars['colData']->value['field']['customCodeReadOnly'];?>

                <?php }?>
                </td>
				<td></td><td></td>
			<?php } elseif ($_smarty_tpl->tpl_vars['fields']->value[$_smarty_tpl->tpl_vars['colData']->value['field']['name']]) {?>
			    <?php echo $_smarty_tpl->tpl_vars['colData']->value['displayParams'];?>

			    {counter name="panelFieldCount"}
				<?php echo smarty_function_sugar_field(array('parentFieldArray'=>'fields','tabindex'=>$_smarty_tpl->tpl_vars['tabindex']->value,'vardef'=>$_smarty_tpl->tpl_vars['fields']->value[$_smarty_tpl->tpl_vars['colData']->value['field']['name']],'displayType'=>'DetailView','displayParams'=>$_smarty_tpl->tpl_vars['colData']->value['field']['displayParams'],'typeOverride'=>$_smarty_tpl->tpl_vars['colData']->value['field']['type'],'formName'=>$_smarty_tpl->tpl_vars['form_name']->value),$_smarty_tpl);?>

			<?php }?>
	    <?php echo $_smarty_tpl->tpl_vars['colData']->value['field']['suffix'];?>

		<?php if (!empty($_smarty_tpl->tpl_vars['colData']->value['field']['customCode'])) {?></td><?php }?>
		<?php }?>

		{/if}

		{else}

		  <td></td><td></td>

	{/if}

	<?php } else { ?>

		</td>
	<?php }?>
	<?php if (!empty($_smarty_tpl->tpl_vars['colData']->value['field']['customCode']) && !empty($_smarty_tpl->tpl_vars['colData']->value['field']['customCodeRenderField'])) {?>
	    {counter name="panelFieldCount"}
	    <?php echo smarty_function_sugar_evalcolumn(array('var'=>$_smarty_tpl->tpl_vars['colData']->value['field']['customCode'],'colData'=>$_smarty_tpl->tpl_vars['colData']->value,'tabindex'=>$_smarty_tpl->tpl_vars['tabindex']->value),$_smarty_tpl);?>

    <?php }?>
    <?php if (!empty($_smarty_tpl->tpl_vars['colData']->value['field']['hideIf'])) {?>
		{else}
		<td></td><td></td>
		{/if}
    <?php }?>

	<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</tr>
{/capture}
{if $fieldsUsed > 0 }
{$tableRow}
{/if}
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</table>
<?php if (!empty($_smarty_tpl->tpl_vars['label']->value) && !is_int($_smarty_tpl->tpl_vars['label']->value) && $_smarty_tpl->tpl_vars['label']->value != 'DEFAULT' && $_smarty_tpl->tpl_vars['showSectionPanelsTitles']->value && (!(isset($_smarty_tpl->tpl_vars['tabDefs']->value[$_smarty_tpl->tpl_vars['label_upper']->value]['newTab'])) || ((isset($_smarty_tpl->tpl_vars['tabDefs']->value[$_smarty_tpl->tpl_vars['label_upper']->value]['newTab'])) && $_smarty_tpl->tpl_vars['tabDefs']->value[$_smarty_tpl->tpl_vars['label_upper']->value]['newTab'] == false)) && $_smarty_tpl->tpl_vars['view']->value != "QuickCreate") {
echo '<script'; ?>
 type="text/javascript">SUGAR.util.doWhen("typeof initPanel == 'function'", function() {ldelim} initPanel(<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_foreach_section']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_section']->value['iteration'] : null);?>
, '<?php echo $_smarty_tpl->tpl_vars['panelState']->value;?>
'); {rdelim}); <?php echo '</script'; ?>
>
<?php }?>

<?php }?>

</div>
{if $panelFieldCount == 0}

<?php echo '<script'; ?>
>document.getElementById("<?php echo $_smarty_tpl->tpl_vars['label']->value;?>
").style.display='none';<?php echo '</script'; ?>
>
{/if}
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div></div>
<?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['footerTpl']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
if ($_smarty_tpl->tpl_vars['useTabs']->value) {?>
{sugar_getscript file="cache/include/javascript/sugar_grp_yui_widgets.js"}
<?php echo '<script'; ?>
 type="text/javascript">
var <?php echo $_smarty_tpl->tpl_vars['form_name']->value;?>
_tabs = new YAHOO.widget.TabView("<?php echo $_smarty_tpl->tpl_vars['form_name']->value;?>
_tabs");
<?php echo $_smarty_tpl->tpl_vars['form_name']->value;?>
_tabs.selectTab(0);
<?php echo '</script'; ?>
>
<?php }?>
{*
TODO REMOVE THIS CODE
<?php echo '<script'; ?>
 type="text/javascript">
YAHOO.util.Event.onContentReady("<?php echo $_smarty_tpl->tpl_vars['form_name']->value;?>
",
    function () {ldelim} initEditView(document.forms.<?php echo $_smarty_tpl->tpl_vars['form_name']->value;?>
) {rdelim});
//window.setTimeout(, 100);
<?php if ($_smarty_tpl->tpl_vars['module']->value == "Users") {?>
window.onbeforeunload = function () {ldelim} return disableOnUnloadEditView(); {rdelim};
<?php } else { ?>
window.onbeforeunload = function () {ldelim} return onUnloadEditView(); {rdelim};
<?php }?>

// bug 55468 -- IE is too aggressive with onUnload event
if (SUGAR.browser.msie) {ldelim}
$(document).ready(function() {ldelim}
    $(".collapseLink,.expandLink").click(function (e) {ldelim} e.preventDefault(); {rdelim});
  {rdelim});
{rdelim}

<?php echo '</script'; ?>
>
*}
<?php }
}
