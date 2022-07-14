<?php
/* Smarty version 3.1.39, created on 2022-07-13 18:52:27
  from '/var/www/html/SugarEnt-Full-12.0.0/include/DetailView/DetailView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_62cece1b3dbf23_71053356',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f3e7219077d24fbdaf763cf32102c06588b5198d' => 
    array (
      0 => '/var/www/html/SugarEnt-Full-12.0.0/include/DetailView/DetailView.tpl',
      1 => 1649221080,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62cece1b3dbf23_71053356 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/SugarEnt-Full-12.0.0/vendor/smarty/smarty/libs/plugins/function.counter.php','function'=>'smarty_function_counter',),1=>array('file'=>'/var/www/html/SugarEnt-Full-12.0.0/include/SugarSmarty/plugins/function.sugar_evalcolumn.php','function'=>'smarty_function_sugar_evalcolumn',),2=>array('file'=>'/var/www/html/SugarEnt-Full-12.0.0/include/SugarSmarty/plugins/function.sugar_field.php','function'=>'smarty_function_sugar_field',),));
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
<div id="<?php echo $_smarty_tpl->tpl_vars['module']->value;?>
_detailview_tabs"
<?php if ($_smarty_tpl->tpl_vars['useTabs']->value) {?>
class="yui-navset detailview_tabs"
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
        <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'label_upper', 'label_upper', null);
echo mb_strtoupper($_smarty_tpl->tpl_vars['label']->value, 'UTF-8');
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
        {* override from tab definitions *}
        <?php if (((isset($_smarty_tpl->tpl_vars['tabDefs']->value[$_smarty_tpl->tpl_vars['label_upper']->value]['newTab'])) && $_smarty_tpl->tpl_vars['tabDefs']->value[$_smarty_tpl->tpl_vars['label_upper']->value]['newTab'] == true)) {?>
            <?php echo smarty_function_counter(array('name'=>"tabCount",'print'=>false),$_smarty_tpl);?>

            <li><a id="tab<?php echo $_smarty_tpl->tpl_vars['tabCount']->value;?>
" href="javascript:void(0)"><em>{sugar_translate label='<?php echo $_smarty_tpl->tpl_vars['label']->value;?>
' module='<?php echo $_smarty_tpl->tpl_vars['module']->value;?>
'}</em></a></li>
        <?php }?>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ul>
    <?php }?>
    <div <?php if ($_smarty_tpl->tpl_vars['useTabs']->value) {?>class="yui-content"<?php }?>>
<?php echo smarty_function_counter(array('name'=>"panelCount",'print'=>false,'start'=>0,'assign'=>"panelCount"),$_smarty_tpl);?>

<?php echo smarty_function_counter(array('name'=>"tabCount",'start'=>-1,'print'=>false,'assign'=>"tabCount"),$_smarty_tpl);?>

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sectionPanels']->value, 'panel', false, 'label', 'section', array (
  'iteration' => true,
));
$_smarty_tpl->tpl_vars['panel']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['label']->value => $_smarty_tpl->tpl_vars['panel']->value) {
$_smarty_tpl->tpl_vars['panel']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_section']->value['iteration']++;
$_smarty_tpl->_assignInScope('panel_id', $_smarty_tpl->tpl_vars['panelCount']->value);
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'label_upper', 'label_upper', null);
echo mb_strtoupper($_smarty_tpl->tpl_vars['label']->value, 'UTF-8');
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
  <?php if (((isset($_smarty_tpl->tpl_vars['tabDefs']->value[$_smarty_tpl->tpl_vars['label_upper']->value]['newTab'])) && $_smarty_tpl->tpl_vars['tabDefs']->value[$_smarty_tpl->tpl_vars['label_upper']->value]['newTab'] == true)) {?>
    <?php echo smarty_function_counter(array('name'=>"tabCount",'print'=>false),$_smarty_tpl);?>

    <?php if ($_smarty_tpl->tpl_vars['tabCount']->value != 0) {?></div><?php }?>
    <div id='tabcontent<?php echo $_smarty_tpl->tpl_vars['tabCount']->value;?>
'>
  <?php }?>

    <?php if (((isset($_smarty_tpl->tpl_vars['tabDefs']->value[$_smarty_tpl->tpl_vars['label_upper']->value]['panelDefault'])) && $_smarty_tpl->tpl_vars['tabDefs']->value[$_smarty_tpl->tpl_vars['label_upper']->value]['panelDefault'] == "collapsed" && (isset($_smarty_tpl->tpl_vars['tabDefs']->value[$_smarty_tpl->tpl_vars['label_upper']->value]['newTab'])) && $_smarty_tpl->tpl_vars['tabDefs']->value[$_smarty_tpl->tpl_vars['label_upper']->value]['newTab'] == false)) {?>
        <?php $_smarty_tpl->_assignInScope('panelState', $_smarty_tpl->tpl_vars['tabDefs']->value[$_smarty_tpl->tpl_vars['label_upper']->value]['panelDefault']);?>
    <?php } else { ?>
        <?php $_smarty_tpl->_assignInScope('panelState', "expanded");?>
    <?php }?>
<div id='detailpanel_<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_foreach_section']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_section']->value['iteration'] : null);?>
' class='detail view  detail508 <?php echo $_smarty_tpl->tpl_vars['panelState']->value;?>
'>
{counter name="panelFieldCount" start=0 print=false assign="panelFieldCount"}

<?php if (!is_array($_smarty_tpl->tpl_vars['panel']->value)) {?>
    {sugar_include type='php' file='<?php echo $_smarty_tpl->tpl_vars['panel']->value;?>
'}
<?php } else { ?>

    <?php if (!empty($_smarty_tpl->tpl_vars['label']->value) && !is_int($_smarty_tpl->tpl_vars['label']->value) && $_smarty_tpl->tpl_vars['label']->value != 'DEFAULT' && (!(isset($_smarty_tpl->tpl_vars['tabDefs']->value[$_smarty_tpl->tpl_vars['label_upper']->value]['newTab'])) || ((isset($_smarty_tpl->tpl_vars['tabDefs']->value[$_smarty_tpl->tpl_vars['label_upper']->value]['newTab'])) && $_smarty_tpl->tpl_vars['tabDefs']->value[$_smarty_tpl->tpl_vars['label_upper']->value]['newTab'] == false))) {?>
    <h4>
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
	  <table id='<?php echo $_smarty_tpl->tpl_vars['label']->value;?>
' class="panelContainer" cellspacing='{$gridline}'>



	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['panel']->value, 'rowData', false, 'row', 'rowIteration', array (
));
$_smarty_tpl->tpl_vars['rowData']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['row']->value => $_smarty_tpl->tpl_vars['rowData']->value) {
$_smarty_tpl->tpl_vars['rowData']->do_else = false;
?>
	{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
	{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
	{capture name="tr" assign="tableRow"}
	<tr>
		<?php $_smarty_tpl->_assignInScope('columnsInRow', count($_smarty_tpl->tpl_vars['rowData']->value));?>
		<?php $_smarty_tpl->_assignInScope('columnsUsed', 0);?>
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rowData']->value, 'colData', false, 'col', 'colIteration', array (
  'index' => true,
));
$_smarty_tpl->tpl_vars['colData']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['col']->value => $_smarty_tpl->tpl_vars['colData']->value) {
$_smarty_tpl->tpl_vars['colData']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_colIteration']->value['index']++;
?>
	    <?php if (!empty($_smarty_tpl->tpl_vars['colData']->value['field']['hideIf'])) {?>
	    	{if !(<?php echo $_smarty_tpl->tpl_vars['colData']->value['field']['hideIf'];?>
) }
	    <?php }?>
	    <?php if (!empty($_smarty_tpl->tpl_vars['colData']->value['field']['name'])) {?>
			{if $fields.<?php echo $_smarty_tpl->tpl_vars['colData']->value['field']['name'];?>
.acl > 0}
		<?php }?>
			{counter name="fieldsUsed"}
			<?php if (empty($_smarty_tpl->tpl_vars['colData']->value['field']['hideLabel'])) {?>
			<td width='<?php echo $_smarty_tpl->tpl_vars['def']->value['templateMeta']['widths'][(isset($_smarty_tpl->tpl_vars['__smarty_foreach_colIteration']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_colIteration']->value['index'] : null)]['label'];?>
%' scope="col">
				<?php if (!empty($_smarty_tpl->tpl_vars['colData']->value['field']['name'])) {?>
				    {if !$fields.<?php echo $_smarty_tpl->tpl_vars['colData']->value['field']['name'];?>
.hidden}
                <?php }?>
				<?php if ((isset($_smarty_tpl->tpl_vars['colData']->value['field']['customLabel']))) {?>
			       <?php echo $_smarty_tpl->tpl_vars['colData']->value['field']['customLabel'];?>

				<?php } elseif ((isset($_smarty_tpl->tpl_vars['colData']->value['field']['label'])) && strpos($_smarty_tpl->tpl_vars['colData']->value['field']['label'],'$')) {?>
				   {capture name="label" assign="label"}<?php echo $_smarty_tpl->tpl_vars['colData']->value['field']['label'];?>
{/capture}
			       {$label|strip_semicolon}:
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
                   {sugar_help text=$popupText WIDTH=400}
                <?php }?>
                <?php if (!empty($_smarty_tpl->tpl_vars['colData']->value['field']['name'])) {?>
                {else}
                    {counter name="fieldsHidden"}
                {/if}
                <?php }?>
                <?php }?>
			</td>
			<td width='<?php echo $_smarty_tpl->tpl_vars['def']->value['templateMeta']['widths'][(isset($_smarty_tpl->tpl_vars['__smarty_foreach_colIteration']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_colIteration']->value['index'] : null)]['field'];?>
%' <?php if ($_smarty_tpl->tpl_vars['colData']->value['colspan']) {?>colspan='<?php echo $_smarty_tpl->tpl_vars['colData']->value['colspan'];?>
'<?php }?> <?php if ((isset($_smarty_tpl->tpl_vars['fields']->value[$_smarty_tpl->tpl_vars['colData']->value['field']['name']]['type'])) && $_smarty_tpl->tpl_vars['fields']->value[$_smarty_tpl->tpl_vars['colData']->value['field']['name']]['type'] == 'phone') {?>class="phone"<?php }?>>
			    <?php if (!empty($_smarty_tpl->tpl_vars['colData']->value['field']['name'])) {?>
			    {if !$fields.<?php echo $_smarty_tpl->tpl_vars['colData']->value['field']['name'];?>
.hidden}
			    <?php }?>
				<?php echo $_smarty_tpl->tpl_vars['colData']->value['field']['prefix'];?>

				<?php if (($_smarty_tpl->tpl_vars['colData']->value['field']['customCode'] && !$_smarty_tpl->tpl_vars['colData']->value['field']['customCodeRenderField']) || $_smarty_tpl->tpl_vars['colData']->value['field']['assign']) {?>
					{counter name="panelFieldCount"}
					<span id="<?php echo $_smarty_tpl->tpl_vars['colData']->value['field']['name'];?>
" class="sugar_field"><?php echo smarty_function_sugar_evalcolumn(array('var'=>$_smarty_tpl->tpl_vars['colData']->value['field'],'colData'=>$_smarty_tpl->tpl_vars['colData']->value),$_smarty_tpl);?>
</span>
				<?php } elseif ($_smarty_tpl->tpl_vars['fields']->value[$_smarty_tpl->tpl_vars['colData']->value['field']['name']] && !empty($_smarty_tpl->tpl_vars['colData']->value['field']['fields'])) {?>
				    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['colData']->value['field']['fields'], 'subField');
$_smarty_tpl->tpl_vars['subField']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['subField']->value) {
$_smarty_tpl->tpl_vars['subField']->do_else = false;
?>
				        <?php if ($_smarty_tpl->tpl_vars['fields']->value[$_smarty_tpl->tpl_vars['subField']->value]) {?>
				        	{counter name="panelFieldCount"}
				            <?php echo smarty_function_sugar_field(array('parentFieldArray'=>'fields','tabindex'=>$_smarty_tpl->tpl_vars['tabIndex']->value,'vardef'=>$_smarty_tpl->tpl_vars['fields']->value[$_smarty_tpl->tpl_vars['subField']->value],'displayType'=>'DetailView'),$_smarty_tpl);?>
&nbsp;
				        <?php } else { ?>
				        	{counter name="panelFieldCount"}
				            <?php echo $_smarty_tpl->tpl_vars['subField']->value;?>

				        <?php }?>
				    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				<?php } elseif ($_smarty_tpl->tpl_vars['fields']->value[$_smarty_tpl->tpl_vars['colData']->value['field']['name']]) {?>
					{counter name="panelFieldCount"}
					<?php echo smarty_function_sugar_field(array('parentFieldArray'=>'fields','vardef'=>$_smarty_tpl->tpl_vars['fields']->value[$_smarty_tpl->tpl_vars['colData']->value['field']['name']],'displayType'=>'DetailView','displayParams'=>$_smarty_tpl->tpl_vars['colData']->value['field']['displayParams'],'typeOverride'=>$_smarty_tpl->tpl_vars['colData']->value['field']['type']),$_smarty_tpl);?>

				<?php }?>
				<?php if (!empty($_smarty_tpl->tpl_vars['colData']->value['field']['customCode']) && $_smarty_tpl->tpl_vars['colData']->value['field']['customCodeRenderField']) {?>
				    {counter name="panelFieldCount"}
				    <span id="<?php echo $_smarty_tpl->tpl_vars['colData']->value['field']['name'];?>
" class="sugar_field"><?php echo smarty_function_sugar_evalcolumn(array('var'=>$_smarty_tpl->tpl_vars['colData']->value['field'],'colData'=>$_smarty_tpl->tpl_vars['colData']->value),$_smarty_tpl);?>
</span>
                <?php }?>
				<?php echo $_smarty_tpl->tpl_vars['colData']->value['field']['suffix'];?>

				<?php if (!empty($_smarty_tpl->tpl_vars['colData']->value['field']['name'])) {?>
				{/if}
				<?php }?>
			</td>
		<?php if (!empty($_smarty_tpl->tpl_vars['colData']->value['field']['name'])) {?>
			{else}

			<td>&nbsp;</td><td>&nbsp;</td>
			{/if}
		<?php }?>
		<?php if (!empty($_smarty_tpl->tpl_vars['colData']->value['field']['hideIf'])) {?>
			{else}

			<td>&nbsp;</td><td>&nbsp;</td>
			{/if}
	    <?php }?>
		<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	</tr>
	{/capture}
	{if $fieldsUsed > 0 && $fieldsUsed != $fieldsHidden}
	{$tableRow}
	{/if}
	<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	</table>
    <?php if (!empty($_smarty_tpl->tpl_vars['label']->value) && !is_int($_smarty_tpl->tpl_vars['label']->value) && $_smarty_tpl->tpl_vars['label']->value != 'DEFAULT' && (!(isset($_smarty_tpl->tpl_vars['tabDefs']->value[$_smarty_tpl->tpl_vars['label_upper']->value]['newTab'])) || ((isset($_smarty_tpl->tpl_vars['tabDefs']->value[$_smarty_tpl->tpl_vars['label_upper']->value]['newTab'])) && $_smarty_tpl->tpl_vars['tabDefs']->value[$_smarty_tpl->tpl_vars['label_upper']->value]['newTab'] == false))) {?>
    <?php echo '<script'; ?>
 type="text/javascript">SUGAR.util.doWhen("typeof initPanel == 'function'", function() {ldelim} initPanel(<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_foreach_section']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_section']->value['iteration'] : null);?>
, '<?php echo $_smarty_tpl->tpl_vars['panelState']->value;?>
'); {rdelim}); <?php echo '</script'; ?>
>
    <?php }
}?>
</div>
{if $panelFieldCount == 0}

<?php echo '<script'; ?>
>document.getElementById("<?php echo $_smarty_tpl->tpl_vars['label']->value;?>
").style.display='none';<?php echo '</script'; ?>
>
{/if}
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
if ($_smarty_tpl->tpl_vars['useTabs']->value) {?>
  </div>
<?php }?>

</div>
</div>
<?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['footerTpl']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
if ($_smarty_tpl->tpl_vars['useTabs']->value) {
echo '<script'; ?>
 type='text/javascript' src='{sugar_getjspath file='include/javascript/popup_helper.js'}'><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="{sugar_getjspath file='cache/include/javascript/sugar_grp_yui_widgets.js'}"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript">
var <?php echo $_smarty_tpl->tpl_vars['module']->value;?>
_detailview_tabs = new YAHOO.widget.TabView("<?php echo $_smarty_tpl->tpl_vars['module']->value;?>
_detailview_tabs");
<?php echo $_smarty_tpl->tpl_vars['module']->value;?>
_detailview_tabs.selectTab(0);
<?php echo '</script'; ?>
>
<?php }
echo '<script'; ?>
 type="text/javascript">
SUGAR.util.doWhen("typeof collapsePanel == 'function'",
        function(){ldelim}
            var sugar_panel_collase = Get_Cookie("sugar_panel_collase");
            if(sugar_panel_collase != null) {ldelim}
                sugar_panel_collase = YAHOO.lang.JSON.parse(sugar_panel_collase);
                for(panel in sugar_panel_collase['<?php echo $_smarty_tpl->tpl_vars['module']->value;?>
_d'])
                    if(sugar_panel_collase['<?php echo $_smarty_tpl->tpl_vars['module']->value;?>
_d'][panel])
                        collapsePanel(panel);
                    else
                        expandPanel(panel);
            {rdelim}
        {rdelim});
<?php echo '</script'; ?>
>
<?php }
}
