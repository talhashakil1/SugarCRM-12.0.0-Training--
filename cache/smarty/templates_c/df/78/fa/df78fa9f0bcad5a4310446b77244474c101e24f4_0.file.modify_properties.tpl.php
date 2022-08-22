<?php
/* Smarty version 3.1.39, created on 2022-08-19 12:07:21
  from '/var/www/html/SugarEnt-Full-12.0.0/modules/Connectors/tpls/modify_properties.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_62ff36a92f3397_85281023',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'df78fa9f0bcad5a4310446b77244474c101e24f4' => 
    array (
      0 => '/var/www/html/SugarEnt-Full-12.0.0/modules/Connectors/tpls/modify_properties.tpl',
      1 => 1649221076,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62ff36a92f3397_85281023 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/SugarEnt-Full-12.0.0/include/SugarSmarty/plugins/function.sugar_getjspath.php','function'=>'smarty_function_sugar_getjspath',),1=>array('file'=>'/var/www/html/SugarEnt-Full-12.0.0/vendor/smarty/smarty/libs/plugins/function.counter.php','function'=>'smarty_function_counter',),2=>array('file'=>'/var/www/html/SugarEnt-Full-12.0.0/include/SugarSmarty/plugins/function.sugar_csrf_form_token.php','function'=>'smarty_function_sugar_csrf_form_token',),));
?>

<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo smarty_function_sugar_getjspath(array('file'=>'cache/include/javascript/sugar_grp_yui_widgets.js'),$_smarty_tpl);?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo smarty_function_sugar_getjspath(array('file'=>'modules/Connectors/Connector.js'),$_smarty_tpl);?>
"><?php echo '</script'; ?>
>
<link rel="stylesheet" type="text/css" href="<?php echo smarty_function_sugar_getjspath(array('file'=>'modules/Connectors/tpls/tabs.css'),$_smarty_tpl);?>
"/>


<?php echo '<script'; ?>
 language="javascript">
 	var _tabView;
 	var _timer;
 	var _sourceArray = new Array();
var SourceTabs = {

    init : function() {
         _tabView = new YAHOO.widget.TabView();

    		 <?php echo smarty_function_counter(array('assign'=>'source_count','start'=>0,'print'=>0),$_smarty_tpl);?>

	        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['SOURCES']->value, 'source', false, 'name', 'connectors', array (
));
$_smarty_tpl->tpl_vars['source']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['name']->value => $_smarty_tpl->tpl_vars['source']->value) {
$_smarty_tpl->tpl_vars['source']->do_else = false;
?>
	            <?php echo smarty_function_counter(array('assign'=>'source_count'),$_smarty_tpl);?>

		       	tab = new YAHOO.widget.Tab({
			        label: '<?php echo $_smarty_tpl->tpl_vars['source']->value['name'];?>
 ',
			        dataSrc: 'index.php?module=Connectors&action=SourceProperties&source_id=<?php echo $_smarty_tpl->tpl_vars['source']->value['id'];?>
&to_pdf=true',
			        cacheData: true,

			        <?php if ($_smarty_tpl->tpl_vars['ACTIVE_TAB']->value) {?>
                        <?php if ($_smarty_tpl->tpl_vars['ACTIVE_TAB']->value == $_smarty_tpl->tpl_vars['source']->value['id']) {?>
                    active: true
                        <?php } else { ?>
                    active: false
                        <?php }?>
                    <?php } else { ?>
                        <?php if ($_smarty_tpl->tpl_vars['source_count']->value == 1) {?>
                    active: true
                        <?php } else { ?>
                    active: false
                        <?php }?>
                    <?php }?>

			    });

			    _tabView.addTab(tab);			    
			    tab.id = '<?php echo $_smarty_tpl->tpl_vars['source']->value['id'];?>
';		    
			    //tab.addListener('beforeContentChange', SourceTabs.tabClicked);
			    tab.addListener('click', SourceTabs.afterContentChange);
			    _sourceArray[<?php echo $_smarty_tpl->tpl_vars['source_count']->value;?>
-1] = '<?php echo $_smarty_tpl->tpl_vars['source']->value['id'];?>
';
	       <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

  		_tabView.appendTo('container');
    },

    afterContentChange: function(info) { 

		if(typeof validate != 'undefined') {
		   validate = new Array();
		   validate["ModifyProperties"] = new Array();
		}    
    
    	tab = _tabView.get('activeTab');
    	if(typeof tab.get('content') != 'undefined') {
        	SUGAR.util.evalScript(tab.get('content'));  
        	clearTimeout(_timer);
        } else {
            _timer = setTimeout(SourceTabs.afterContentChange, 1000);
        }
    },

    fitContainer: function() {
		content_div = _tabView.getElementsByClassName('yui-content', 'div')[0];
		content_div.style.overflow='auto';
		content_div.style.height='405px';
    }
}
YAHOO.util.Event.onDOMReady(SourceTabs.init);
<?php echo '</script'; ?>
>
<form name="ModifyProperties" method="POST" action="index.php" onsubmit="disable_submit('ModifyProperties');" autocomplete= "off">
<?php echo smarty_function_sugar_csrf_form_token(array(),$_smarty_tpl);?>

<input type="hidden" name="modify" value="true">
<input type="hidden" name="module" value="Connectors">
<input type="hidden" name="action" value="SaveModifyProperties">
<input type="hidden" name="source_id" value="">
<input type="hidden" name="reset_to_default" value="">

<?php echo smarty_function_counter(array('assign'=>'source_count','start'=>0,'print'=>0),$_smarty_tpl);?>

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['SOURCES']->value, 'source', false, 'name', 'connectors', array (
));
$_smarty_tpl->tpl_vars['source']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['name']->value => $_smarty_tpl->tpl_vars['source']->value) {
$_smarty_tpl->tpl_vars['source']->do_else = false;
echo smarty_function_counter(array('assign'=>'source_count'),$_smarty_tpl);?>

<input type="hidden" name="source<?php echo $_smarty_tpl->tpl_vars['source_count']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['source']->value['id'];?>
">
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

<table border="0" class="actionsContainer">
<tr>
<td>
<input id="connectors_top_save" title="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_SAVE_BUTTON_LABEL'];?>
" accessKey="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_SAVE_BUTTON_KEY'];?>
" class="button" type="submit" value="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_SAVE_BUTTON_LABEL'];?>
" onclick="return check_form('ModifyProperties') || confirm('<?php echo $_smarty_tpl->tpl_vars['mod']->value['LBL_CONFIRM_CONTINUE_SAVE'];?>
');">
<input id="connectors_top_cancel" title="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CANCEL_BUTTON_LABEL'];?>
" accessKey="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CANCEL_BUTTON_KEY'];?>
" class="button" onclick="document.ModifyProperties.action.value='ConnectorSettings'; document.ModifyProperties.module.value='Connectors';" type="submit" value="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CANCEL_BUTTON_LABEL'];?>
">
</td>
<td align='right'>
<span class="required"><?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_REQUIRED_SYMBOL'];?>
</span> <?php echo $_smarty_tpl->tpl_vars['APP']->value['NTC_REQUIRED'];?>

</td>
</tr>
</table>


<table cellspacing="0" cellpadding="0" border="0" width="100%">
<tr><td class="tabDetailViewDF">
<div >
<div id="container" style="height: 465px">

</div>
</div>
</td></tr>
</table>
<table border="0" class="actionsContainer">
<tr><td>
<input id="connectors_bottom_save" title="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_SAVE_BUTTON_LABEL'];?>
"  class="button" type="submit" name="button" value="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_SAVE_BUTTON_LABEL'];?>
" onclick="return check_form('ModifyProperties') || confirm('<?php echo $_smarty_tpl->tpl_vars['mod']->value['LBL_CONFIRM_CONTINUE_SAVE'];?>
');">
<input id="connectors_bottom_cancel" title="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CANCEL_BUTTON_LABEL'];?>
"  class="button" onclick="document.ModifyProperties.action.value='ConnectorSettings'; document.ModifyProperties.module.value='Connectors';" type="submit" name="button" value="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CANCEL_BUTTON_LABEL'];?>
">
</td></tr>
</table>
</form>

<?php echo '<script'; ?>
 type="text/javascript">

YAHOO.util.Event.onDOMReady(SourceTabs.fitContainer);


<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['REQUIRED_FIELDS']->value, 'fields', false, 'id', 'required_fields', array (
));
$_smarty_tpl->tpl_vars['fields']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['id']->value => $_smarty_tpl->tpl_vars['fields']->value) {
$_smarty_tpl->tpl_vars['fields']->do_else = false;
?>
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['fields']->value, 'field_label', false, 'field_key');
$_smarty_tpl->tpl_vars['field_label']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['field_key']->value => $_smarty_tpl->tpl_vars['field_label']->value) {
$_smarty_tpl->tpl_vars['field_label']->do_else = false;
?>
		addToValidate("ModifyProperties", "<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
_<?php echo $_smarty_tpl->tpl_vars['field_key']->value;?>
", "alpha", true, "<?php echo $_smarty_tpl->tpl_vars['field_label']->value;?>
");
	<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
echo '</script'; ?>
>
<?php }
}
