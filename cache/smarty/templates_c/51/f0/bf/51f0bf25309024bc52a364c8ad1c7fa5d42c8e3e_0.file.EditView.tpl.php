<?php
/* Smarty version 3.1.39, created on 2022-08-18 18:48:14
  from '/var/www/html/SugarEnt-Full-12.0.0/include/SugarFields/Fields/Enum/EditView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_62fe431e2c6f73_92367183',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '51f0bf25309024bc52a364c8ad1c7fa5d42c8e3e' => 
    array (
      0 => '/var/www/html/SugarEnt-Full-12.0.0/include/SugarFields/Fields/Enum/EditView.tpl',
      1 => 1649221080,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62fe431e2c6f73_92367183 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/SugarEnt-Full-12.0.0/include/SugarSmarty/plugins/function.sugarvar.php','function'=>'smarty_function_sugarvar',),1=>array('file'=>'/var/www/html/SugarEnt-Full-12.0.0/vendor/smarty/smarty/libs/plugins/modifier.escape.php','function'=>'smarty_modifier_escape',),));
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

{if !isset($config.enable_autocomplete) || $config.enable_autocomplete==false}
	<select name="<?php if (empty($_smarty_tpl->tpl_vars['displayParams']->value['idName'])) {
echo smarty_function_sugarvar(array('key'=>'name'),$_smarty_tpl);
} else {
echo $_smarty_tpl->tpl_vars['displayParams']->value['idName'];
}?>" 
	id="<?php if (empty($_smarty_tpl->tpl_vars['displayParams']->value['idName'])) {
echo smarty_function_sugarvar(array('key'=>'name'),$_smarty_tpl);
} else {
echo $_smarty_tpl->tpl_vars['displayParams']->value['idName'];
}?>" 
	title='<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['vardef']->value['help'], "hexentity");?>
' <?php if (!empty($_smarty_tpl->tpl_vars['tabindex']->value)) {?> tabindex="<?php echo $_smarty_tpl->tpl_vars['tabindex']->value;?>
" <?php }?>
    <?php if (!empty($_smarty_tpl->tpl_vars['displayParams']->value['accesskey'])) {?> accesskey='<?php echo $_smarty_tpl->tpl_vars['displayParams']->value['accesskey'];?>
' <?php }?>  <?php echo $_smarty_tpl->tpl_vars['displayParams']->value['field'];?>

	<?php if ((isset($_smarty_tpl->tpl_vars['displayParams']->value['javascript']))) {
echo $_smarty_tpl->tpl_vars['displayParams']->value['javascript'];
}?>>

	{html_options options=<?php echo smarty_function_sugarvar(array('key'=>'options','string'=>true),$_smarty_tpl);?>
 selected=<?php echo smarty_function_sugarvar(array('key'=>'value','string'=>true),$_smarty_tpl);?>
}
	</select>
{else}
	{assign var="field_options" value=<?php echo smarty_function_sugarvar(array('key'=>'options','string'=>"true"),$_smarty_tpl);?>
 }
	{capture name="field_val"}<?php echo smarty_function_sugarvar(array('key'=>'value'),$_smarty_tpl);?>
{/capture}
	{assign var="field_val" value=$smarty.capture.field_val}
	{capture name="ac_key"}<?php echo smarty_function_sugarvar(array('key'=>'name'),$_smarty_tpl);?>
{/capture}
	{assign var="ac_key" value=$smarty.capture.ac_key}

	<?php if (empty($_smarty_tpl->tpl_vars['vardef']->value['autocomplete_ajax'])) {?>
		<select style='display:none' name="<?php if (empty($_smarty_tpl->tpl_vars['displayParams']->value['idName'])) {
echo smarty_function_sugarvar(array('key'=>'name'),$_smarty_tpl);
} else {
echo $_smarty_tpl->tpl_vars['displayParams']->value['idName'];
}?>" 
		id="<?php if (empty($_smarty_tpl->tpl_vars['displayParams']->value['idName'])) {
echo smarty_function_sugarvar(array('key'=>'name'),$_smarty_tpl);
} else {
echo $_smarty_tpl->tpl_vars['displayParams']->value['idName'];
}?>" 
		title='<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['vardef']->value['help'], "hexentity");?>
' <?php if (!empty($_smarty_tpl->tpl_vars['tabindex']->value)) {?> tabindex="<?php echo $_smarty_tpl->tpl_vars['tabindex']->value;?>
" <?php }?>
        <?php if (!empty($_smarty_tpl->tpl_vars['displayParams']->value['accesskey'])) {?> accesskey='<?php echo $_smarty_tpl->tpl_vars['displayParams']->value['accesskey'];?>
' <?php }?> <?php echo $_smarty_tpl->tpl_vars['displayParams']->value['field'];?>

		<?php if ((isset($_smarty_tpl->tpl_vars['displayParams']->value['javascript']))) {
echo $_smarty_tpl->tpl_vars['displayParams']->value['javascript'];
}?>>

		{html_options options=<?php echo smarty_function_sugarvar(array('key'=>'options','string'=>true),$_smarty_tpl);?>
 selected=<?php echo smarty_function_sugarvar(array('key'=>'value','string'=>true),$_smarty_tpl);?>
}
		</select>
	<?php } else { ?>
		<input type="hidden"
		    id="<?php if (empty($_smarty_tpl->tpl_vars['displayParams']->value['idName'])) {
echo smarty_function_sugarvar(array('key'=>'name'),$_smarty_tpl);
} else {
echo $_smarty_tpl->tpl_vars['displayParams']->value['idName'];
}?>"
		    name="<?php if (empty($_smarty_tpl->tpl_vars['displayParams']->value['idName'])) {
echo smarty_function_sugarvar(array('key'=>'name'),$_smarty_tpl);
} else {
echo $_smarty_tpl->tpl_vars['displayParams']->value['idName'];
}?>"
		    value="<?php echo smarty_function_sugarvar(array('key'=>'value'),$_smarty_tpl);?>
">
	<?php }?>

	<input
		id="<?php if (empty($_smarty_tpl->tpl_vars['displayParams']->value['idName'])) {
echo smarty_function_sugarvar(array('key'=>'name'),$_smarty_tpl);
} else {
echo $_smarty_tpl->tpl_vars['displayParams']->value['idName'];
}?>-input"
		name="<?php if (empty($_smarty_tpl->tpl_vars['displayParams']->value['idName'])) {
echo smarty_function_sugarvar(array('key'=>'name'),$_smarty_tpl);
} else {
echo $_smarty_tpl->tpl_vars['displayParams']->value['idName'];
}?>-input"
		size="30"
		value="{$field_val|lookup:$field_options}"
		type="text" style="vertical-align: top;">

		
	<span class="id-ff multiple">
	    <button type="button"><img src="{sugar_getimagepath file="id-ff-down.png"}" id="<?php if (empty($_smarty_tpl->tpl_vars['displayParams']->value['idName'])) {
echo smarty_function_sugarvar(array('key'=>'name'),$_smarty_tpl);
} else {
echo $_smarty_tpl->tpl_vars['displayParams']->value['idName'];
}?>-image"></button><button type="button"
	        id="btn-clear-<?php if (empty($_smarty_tpl->tpl_vars['displayParams']->value['idName'])) {
echo smarty_function_sugarvar(array('key'=>'name'),$_smarty_tpl);
} else {
echo $_smarty_tpl->tpl_vars['displayParams']->value['idName'];
}?>-input"
	        title="Clear"
	        onclick="SUGAR.clearRelateField(this.form, '<?php if (empty($_smarty_tpl->tpl_vars['displayParams']->value['idName'])) {
echo smarty_function_sugarvar(array('key'=>'name'),$_smarty_tpl);
} else {
echo $_smarty_tpl->tpl_vars['displayParams']->value['idName'];
}?>-input', '<?php if (empty($_smarty_tpl->tpl_vars['displayParams']->value['idName'])) {
echo smarty_function_sugarvar(array('key'=>'name'),$_smarty_tpl);
} else {
echo $_smarty_tpl->tpl_vars['displayParams']->value['idName'];
}?>');sync_<?php if (empty($_smarty_tpl->tpl_vars['displayParams']->value['idName'])) {
echo smarty_function_sugarvar(array('key'=>'name'),$_smarty_tpl);
} else {
echo $_smarty_tpl->tpl_vars['displayParams']->value['idName'];
}?>()"><img src="{sugar_getimagepath file="id-ff-clear.png"}"></button>
	</span>

	<?php echo '<script'; ?>
>
	SUGAR.AutoComplete.{$ac_key} = [];

	<?php if (empty($_smarty_tpl->tpl_vars['vardef']->value['autocomplete_ajax'])) {?>
		(function (){
			var selectElem = document.getElementById("<?php if (empty($_smarty_tpl->tpl_vars['displayParams']->value['idName'])) {
echo smarty_function_sugarvar(array('key'=>'name'),$_smarty_tpl);
} else {
echo $_smarty_tpl->tpl_vars['displayParams']->value['idName'];
}?>");
			
			if (typeof select_defaults =="undefined")
				select_defaults = [];
			
			select_defaults[selectElem.id] = { key:selectElem.value, text:''};

			//get default
			for (i=0;i<selectElem.options.length;i++){
				if (selectElem.options[i].value==selectElem.value)
					select_defaults[selectElem.id].text = selectElem.options[i].innerHTML;
			}

			//SUGAR.AutoComplete.{$ac_key}.ds = 
			//get options array from vardefs
			var options = SUGAR.AutoComplete.getOptionsArray("<?php echo $_smarty_tpl->tpl_vars['vardef']->value['autocomplete_options'];?>
");

			YUI().use('datasource', 'datasource-jsonschema',function (Y) {
				SUGAR.AutoComplete.{$ac_key}.ds = new Y.DataSource.Function({
				    source: function (request) {
				    	var ret = [];
				    	for (i=0;i<selectElem.options.length;i++)
				    		if (!(selectElem.options[i].value=='' && selectElem.options[i].innerHTML==''))
				    			{literal}ret.push({ 'key': selectElem.options[i].value, 'text': selectElem.options[i].innerHTML });{/literal}
				    	return ret;
				    }
				});
			});
		})();
	<?php } else { ?>
		// Create a new YUI instance and populate it with the required modules.
		YUI().use('datasource', 'datasource-jsonschema',function (Y) {
			// DataSource is available and ready for use.
			SUGAR.AutoComplete.{$ac_key}.ds = new Y.DataSource.Get({
				source: 'index.php?module=Accounts&action=ajaxautocomplete&to_pdf=1'
			});
			SUGAR.AutoComplete.{$ac_key}.ds.plug(Y.Plugin.DataSourceJSONSchema, {
				schema: {
					resultListLocator: "option_items",
					resultFields: ["text", "key"],
					matchKey: "text",
				}
			});
		});
	<?php }?>
		YUI().use("autocomplete", "autocomplete-filters", "autocomplete-highlighters", "node","node-event-simulate", function (Y) {

	SUGAR.AutoComplete.{$ac_key}.inputNode = Y.one('#<?php if (empty($_smarty_tpl->tpl_vars['displayParams']->value['idName'])) {
echo smarty_function_sugarvar(array('key'=>'name'),$_smarty_tpl);
} else {
echo $_smarty_tpl->tpl_vars['displayParams']->value['idName'];
}?>-input');
	SUGAR.AutoComplete.{$ac_key}.inputImage = Y.one('#<?php if (empty($_smarty_tpl->tpl_vars['displayParams']->value['idName'])) {
echo smarty_function_sugarvar(array('key'=>'name'),$_smarty_tpl);
} else {
echo $_smarty_tpl->tpl_vars['displayParams']->value['idName'];
}?>-image');
	SUGAR.AutoComplete.{$ac_key}.inputHidden = Y.one('#<?php if (empty($_smarty_tpl->tpl_vars['displayParams']->value['idName'])) {
echo smarty_function_sugarvar(array('key'=>'name'),$_smarty_tpl);
} else {
echo $_smarty_tpl->tpl_vars['displayParams']->value['idName'];
}?>');
	
	<?php if (empty($_smarty_tpl->tpl_vars['vardef']->value['autocomplete_ajax'])) {?>
			function SyncToHidden(selectme){
				var selectElem = document.getElementById("<?php if (empty($_smarty_tpl->tpl_vars['displayParams']->value['idName'])) {
echo smarty_function_sugarvar(array('key'=>'name'),$_smarty_tpl);
} else {
echo $_smarty_tpl->tpl_vars['displayParams']->value['idName'];
}?>");
				var doSimulateChange = false;
				
				if (selectElem.value!=selectme)
					doSimulateChange=true;
				
				selectElem.value=selectme;

				for (i=0;i<selectElem.options.length;i++){
					selectElem.options[i].selected=false;
					if (selectElem.options[i].value==selectme)
						selectElem.options[i].selected=true;
				}

				if (doSimulateChange)
					SUGAR.AutoComplete.{$ac_key}.inputHidden.simulate('change');
			}

			//global variable 
			sync_<?php if (empty($_smarty_tpl->tpl_vars['displayParams']->value['idName'])) {
echo smarty_function_sugarvar(array('key'=>'name'),$_smarty_tpl);
} else {
echo $_smarty_tpl->tpl_vars['displayParams']->value['idName'];
}?> = function(){
				SyncToHidden();
			}
			function syncFromHiddenToWidget(){

				var selectElem = document.getElementById("<?php if (empty($_smarty_tpl->tpl_vars['displayParams']->value['idName'])) {
echo smarty_function_sugarvar(array('key'=>'name'),$_smarty_tpl);
} else {
echo $_smarty_tpl->tpl_vars['displayParams']->value['idName'];
}?>");

				//if select no longer on page, kill timer
				if (selectElem==null || selectElem.options == null)
					return;

				var currentvalue = SUGAR.AutoComplete.{$ac_key}.inputNode.get('value');

				SUGAR.AutoComplete.{$ac_key}.inputNode.simulate('keyup');

				for (i=0;i<selectElem.options.length;i++){

					if (selectElem.options[i].value==selectElem.value && document.activeElement != document.getElementById('<?php if (empty($_smarty_tpl->tpl_vars['displayParams']->value['idName'])) {
echo smarty_function_sugarvar(array('key'=>'name'),$_smarty_tpl);
} else {
echo $_smarty_tpl->tpl_vars['displayParams']->value['idName'];
}?>-input'))
						SUGAR.AutoComplete.{$ac_key}.inputNode.set('value',selectElem.options[i].innerHTML);
				}
			}

            YAHOO.util.Event.onAvailable("<?php if (empty($_smarty_tpl->tpl_vars['displayParams']->value['idName'])) {
echo smarty_function_sugarvar(array('key'=>'name'),$_smarty_tpl);
} else {
echo $_smarty_tpl->tpl_vars['displayParams']->value['idName'];
}?>", syncFromHiddenToWidget);

		SUGAR.AutoComplete.{$ac_key}.minQLen = 0;
		SUGAR.AutoComplete.{$ac_key}.queryDelay = 0;
		SUGAR.AutoComplete.{$ac_key}.numOptions = {$field_options|@count};
		if(SUGAR.AutoComplete.{$ac_key}.numOptions >= 300) {
			SUGAR.AutoComplete.{$ac_key}.minQLen = 1;
			SUGAR.AutoComplete.{$ac_key}.queryDelay = 200;
		}
		if(SUGAR.AutoComplete.{$ac_key}.numOptions >= 3000) {
			SUGAR.AutoComplete.{$ac_key}.minQLen = 1;
			SUGAR.AutoComplete.{$ac_key}.queryDelay = 500;
		}
	<?php } else { ?>
		function SyncToHidden(e){
			SUGAR.AutoComplete.{$ac_key}.inputHidden.set('value', e);
		}

		SUGAR.AutoComplete.{$ac_key}.minQLen = 1;
		SUGAR.AutoComplete.{$ac_key}.queryDelay = 500;
	<?php }?>
	
	SUGAR.AutoComplete.{$ac_key}.optionsVisible = false;
	
	SUGAR.AutoComplete.{$ac_key}.inputNode.plug(Y.Plugin.AutoComplete, {
		activateFirstItem: true,
		minQueryLength: SUGAR.AutoComplete.{$ac_key}.minQLen,
		queryDelay: SUGAR.AutoComplete.{$ac_key}.queryDelay,
		zIndex: 99999,

		<?php if (!empty($_smarty_tpl->tpl_vars['vardef']->value['autocomplete_ajax'])) {?>
				requestTemplate: '&options=<?php echo $_smarty_tpl->tpl_vars['vardef']->value['autocomplete_options'];?>
&q={literal}{query}{/literal}',
		<?php }?>
		
		source: SUGAR.AutoComplete.{$ac_key}.ds,
		
		resultTextLocator: 'text',
		resultHighlighter: 'phraseMatch',
		resultFilters: 'phraseMatch',
	});

	SUGAR.AutoComplete.{$ac_key}.expandHover = function(ex){
		var hover = YAHOO.util.Dom.getElementsByClassName('dccontent');
		if(hover[0] != null){
			if (ex) {
				var h = '1000px';
				hover[0].style.height = h;
			}
			else{
				hover[0].style.height = '';
			}
		}
	}
		
	if(SUGAR.AutoComplete.{$ac_key}.minQLen == 0){
		// expand the dropdown options upon focus
		SUGAR.AutoComplete.{$ac_key}.inputNode.on('focus', function () {
			SUGAR.AutoComplete.{$ac_key}.inputNode.ac.sendRequest('');
			SUGAR.AutoComplete.{$ac_key}.optionsVisible = true;
		});
	}

	<?php if (empty($_smarty_tpl->tpl_vars['vardef']->value['autocomplete_ajax'])) {?>
		SUGAR.AutoComplete.{$ac_key}.inputNode.on('click', function(e) {
			SUGAR.AutoComplete.{$ac_key}.inputHidden.simulate('click');
		});
		
		SUGAR.AutoComplete.{$ac_key}.inputNode.on('dblclick', function(e) {
			SUGAR.AutoComplete.{$ac_key}.inputHidden.simulate('dblclick');
		});

		SUGAR.AutoComplete.{$ac_key}.inputNode.on('focus', function(e) {
			SUGAR.AutoComplete.{$ac_key}.inputHidden.simulate('focus');
		});

		SUGAR.AutoComplete.{$ac_key}.inputNode.on('mouseup', function(e) {
			SUGAR.AutoComplete.{$ac_key}.inputHidden.simulate('mouseup');
		});

		SUGAR.AutoComplete.{$ac_key}.inputNode.on('mousedown', function(e) {
			SUGAR.AutoComplete.{$ac_key}.inputHidden.simulate('mousedown');
		});

		SUGAR.AutoComplete.{$ac_key}.inputNode.on('blur', function(e) {
			SUGAR.AutoComplete.{$ac_key}.inputHidden.simulate('blur');
			SUGAR.AutoComplete.{$ac_key}.optionsVisible = false;
			var selectElem = document.getElementById("<?php if (empty($_smarty_tpl->tpl_vars['displayParams']->value['idName'])) {
echo smarty_function_sugarvar(array('key'=>'name'),$_smarty_tpl);
} else {
echo $_smarty_tpl->tpl_vars['displayParams']->value['idName'];
}?>");
			//if typed value is a valid option, do nothing
			for (i=0;i<selectElem.options.length;i++)
				if (selectElem.options[i].innerHTML==SUGAR.AutoComplete.{$ac_key}.inputNode.get('value'))
					return;
			
			//typed value is invalid, so set the text and the hidden to blank
			SUGAR.AutoComplete.{$ac_key}.inputNode.set('value', select_defaults[selectElem.id].text);
			SyncToHidden(select_defaults[selectElem.id].key);
		});
	<?php } else { ?>		
		// when they focus away from the field...
		SUGAR.AutoComplete.{$ac_key}.inputNode.on('blur', function(e) {
			if (SUGAR.AutoComplete.{$ac_key}.inputNode.get('value') != '') { // value entered
				if (SUGAR.AutoComplete.{$ac_key}.inputHidden.get('value') == '') { // none selected, we clear their text and hide
					SUGAR.AutoComplete.{$ac_key}.inputNode.set('value', '');
				}
				else{ // they have something selected, we accept their selection and contract
				}
			}
			SUGAR.AutoComplete.{$ac_key}.optionsVisible = false;
		});
	<?php }?>

	// when they click on the arrow image, toggle the visibility of the options
	SUGAR.AutoComplete.{$ac_key}.inputImage.ancestor().on('click', function () {
		if (SUGAR.AutoComplete.{$ac_key}.optionsVisible) {
			SUGAR.AutoComplete.{$ac_key}.inputNode.blur();
		} else {
			SUGAR.AutoComplete.{$ac_key}.inputNode.focus();
		}
	});

	SUGAR.AutoComplete.{$ac_key}.inputNode.ac.on('query', function () {
		SUGAR.AutoComplete.{$ac_key}.inputHidden.set('value', '');
	});

	SUGAR.AutoComplete.{$ac_key}.inputNode.ac.on('visibleChange', function (e) {
		SUGAR.AutoComplete.{$ac_key}.expandHover(e.newVal); // expand
	});

	// when they select an option, set the hidden input with the KEY, to be saved
	SUGAR.AutoComplete.{$ac_key}.inputNode.ac.on('select', function(e) {
		SyncToHidden(e.result.raw.key);
	});
 
});
<?php echo '</script'; ?>
> 



{/if}
<?php }
}
