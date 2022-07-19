


<script type="text/javascript" src="{sugar_getjspath file='include/EditView/Panels.js'}"></script>
<script>
    $(document).ready(function(){
	    $("ul.clickMenu").each(function(index, node){
	        $(node).sugarActionMenu();
	    });
    });
</script>
<div class="clear"></div>
<form action="index.php" method="POST" name="{$form_name}" id="{$form_id}" {$enctype}>
{sugar_csrf_form_token}
<table width="100%" cellpadding="0" cellspacing="0" border="0" class="dcQuickEdit">
<tr>
<td class="buttons">
<input type="hidden" name="module" value="{$module}">
{if isset($smarty.request.isDuplicate) && $smarty.request.isDuplicate eq "true"}
<input type="hidden" name="record" value="">
<input type="hidden" name="duplicateSave" value="true">
<input type="hidden" name="duplicateId" value="{$fields.id.value}">
{else}
<input type="hidden" name="record" value="{$fields.id.value}">
{/if}
<input type="hidden" name="isDuplicate" value="false">
<input type="hidden" name="action">
<input type="hidden" name="return_module" value="{$smarty.request.return_module}">
<input type="hidden" name="return_action" value="{$smarty.request.return_action}">
<input type="hidden" name="return_id" value="{$smarty.request.return_id}">
<input type="hidden" name="module_tab"> 
<input type="hidden" name="contact_role">
{if (!empty($smarty.request.return_module) || !empty($smarty.request.relate_to)) && !(isset($smarty.request.isDuplicate) && $smarty.request.isDuplicate eq "true")}
<input type="hidden" name="relate_to" value="{if $smarty.request.return_relationship}{$smarty.request.return_relationship}{elseif $smarty.request.relate_to && empty($smarty.request.from_dcmenu)}{$smarty.request.relate_to}{elseif empty($isDCForm) && empty($smarty.request.from_dcmenu)}{$smarty.request.return_module}{/if}">
<input type="hidden" name="relate_id" value="{$smarty.request.return_id}">
{/if}
<input type="hidden" name="offset" value="{$offset}">
{assign var='place' value="_HEADER"} <!-- to be used for id for buttons with custom code in def files-->



<div class="action_buttons">{if $bean->aclAccess("save") || $isDuplicate}<input title="{$APP.LBL_SAVE_BUTTON_TITLE}" accessKey="{$APP.LBL_SAVE_BUTTON_KEY}" class="button primary" onclick="var _form = document.getElementById('EditView'); {if $isDuplicate}_form.return_id.value=''; {/if}_form.action.value='Save'; if(check_form('EditView'))SUGAR.ajaxUI.submitForm(_form);return false;" type="submit" name="button" value="{$APP.LBL_SAVE_BUTTON_LABEL}" id="SAVE_HEADER">{/if}  {capture name="cancelReturnUrl" assign="cancelReturnUrl"}{if !empty($smarty.request.return_action) && $smarty.request.return_action == "DetailView" && !empty($fields.id.value) && empty($smarty.request.return_id)}parent.SUGAR.App.router.buildRoute('{$smarty.request.return_module|escape:"url"}', '{$fields.id.value|escape:"url"}', '{$smarty.request.return_action|escape:"url"}'){elseif !empty($smarty.request.return_module) || !empty($smarty.request.return_action) || !empty($smarty.request.return_id)}parent.SUGAR.App.router.buildRoute('{$smarty.request.return_module|escape:"url"}', '{$smarty.request.return_id|escape:"url"}', '{$smarty.request.return_action|escape:"url"}'){else}parent.SUGAR.App.router.buildRoute('Schedulers'){/if}{/capture}<input title="{$APP.LBL_CANCEL_BUTTON_TITLE}" accessKey="{$APP.LBL_CANCEL_BUTTON_KEY}" class="button" onclick="parent.SUGAR.App.bwc.revertAttributes();parent.SUGAR.App.router.navigate({$cancelReturnUrl}, {literal}{trigger: true}{/literal}); return false;" type="button" name="button" value="{$APP.LBL_CANCEL_BUTTON_LABEL}" id="CANCEL_HEADER">  {if $bean->aclAccess("detail")}{if !empty($fields.id.value) && $isAuditEnabled}<input id="btn_view_change_log" title="{$APP.LNK_VIEW_CHANGE_LOG}" class="button" onclick='open_popup("Audit", "600", "400", "&record={$fields.id.value}&module_name=Schedulers", true, false,  {ldelim} "call_back_function":"set_return","form_name":"EditView","field_to_name_array":[] {rdelim} ); return false;' type="button" value="{$APP.LNK_VIEW_CHANGE_LOG}">{/if}{/if}<div class="clear"></div></div>
</td>
<td align='right'>
    			{$PAGINATION}
	<span class="required">{$APP.LBL_REQUIRED_SYMBOL}</span> {$APP.NTC_REQUIRED}
</td>
</tr>
</table>
{sugar_include include=$includes}

<span id='tabcounterJS'><script>SUGAR.TabFields=new Array();//this will be used to track tabindexes for references</script></span>

<div id="EditView_tabs"
>
        <div >




  
  <div id="detailpanel_1" >

{counter name="panelFieldCount" start=0 print=false assign="panelFieldCount"}

<table width="100%" border="0" cellspacing="1" cellpadding="0"  id='Default_{$module}_Subpanel'  class="yui3-skin-sam edit view panelContainer">


{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{capture name="tr" assign="tableRow"}
<tr>

	

		
        

	
	

	
    			{if $fields.name.acl > 1 || ($showDetailData && $fields.name.acl > 0)}
	
				<td valign="top" id='name_label' width='12.5%' scope="col">
						   {capture name="label" assign="label"}{sugar_translate label='LBL_NAME' module='Schedulers'}{/capture}
			   {$label|strip_semicolon}:
													    <span class="required">*</span>
			
                                                            {if $fields.name.locked == true}
                {$lockedIcon}
            {/if}
                        
		</td>
				{counter name="fieldsUsed"}
		
		 				    
		    				<td valign="top" width='37.5%' >
			
		
		            {if $fields.name.acl > 1 && $fields.name.locked == false && $fields.name.disabled == false}
		
							{counter name="panelFieldCount"}
			    
				
{if strlen($fields.name.value) <= 0}
{assign var="value" value=$fields.name.default_value }
{else}
{assign var="value" value=$fields.name.value }
{/if}  
<input type='text' name='{$fields.name.name}' 
    id='{$fields.name.name}' size='30' 
    maxlength='255' 
    value='{$value}' title=''      accesskey='7'  >
									{else}
						    
			    {counter name="panelFieldCount"}
				
{if strlen($fields.name.value) <= 0}
{assign var="value" value=$fields.name.default_value }
{else}
{assign var="value" value=$fields.name.value }
{/if} 
<span class="sugar_field" id="{$fields.name.name}">{$fields.name.value}</span>

				    
				
		{/if}

		{else}

		  <td></td><td></td>

	{/if}

		    
	
	

				
    			{if $fields.status.acl > 1 || ($showDetailData && $fields.status.acl > 0)}
	
				<td valign="top" id='status_label' width='12.5%' scope="col">
						   {capture name="label" assign="label"}{sugar_translate label='LBL_STATUS' module='Schedulers'}{/capture}
			   {$label|strip_semicolon}:
										
                                                            {if $fields.status.locked == true}
                {$lockedIcon}
            {/if}
                        
		</td>
				{counter name="fieldsUsed"}
		
						    
		    				<td valign="top" width='37.5%' >
			
		
		            {if $fields.status.acl > 1 && $fields.status.locked == false && $fields.status.disabled == false}
		
							{counter name="panelFieldCount"}
			    
				

{if !isset($config.enable_autocomplete) || $config.enable_autocomplete==false}
	<select name="{$fields.status.name}" 
	id="{$fields.status.name}" 
	title=''       
	>

	{html_options options=$fields.status.options selected=$fields.status.value}
	</select>
{else}
	{assign var="field_options" value=$fields.status.options }
	{capture name="field_val"}{$fields.status.value}{/capture}
	{assign var="field_val" value=$smarty.capture.field_val}
	{capture name="ac_key"}{$fields.status.name}{/capture}
	{assign var="ac_key" value=$smarty.capture.ac_key}

			<select style='display:none' name="{$fields.status.name}" 
		id="{$fields.status.name}" 
		title=''          
		>

		{html_options options=$fields.status.options selected=$fields.status.value}
		</select>
	
	<input
		id="{$fields.status.name}-input"
		name="{$fields.status.name}-input"
		size="30"
		value="{$field_val|lookup:$field_options}"
		type="text" style="vertical-align: top;">

		
	<span class="id-ff multiple">
	    <button type="button"><img src="{sugar_getimagepath file="id-ff-down.png"}" id="{$fields.status.name}-image"></button><button type="button"
	        id="btn-clear-{$fields.status.name}-input"
	        title="Clear"
	        onclick="SUGAR.clearRelateField(this.form, '{$fields.status.name}-input', '{$fields.status.name}');sync_{$fields.status.name}()"><img src="{sugar_getimagepath file="id-ff-clear.png"}"></button>
	</span>

	<script>
	SUGAR.AutoComplete.{$ac_key} = [];

			(function (){
			var selectElem = document.getElementById("{$fields.status.name}");
			
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
			var options = SUGAR.AutoComplete.getOptionsArray("");

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
			YUI().use("autocomplete", "autocomplete-filters", "autocomplete-highlighters", "node","node-event-simulate", function (Y) {

	SUGAR.AutoComplete.{$ac_key}.inputNode = Y.one('#{$fields.status.name}-input');
	SUGAR.AutoComplete.{$ac_key}.inputImage = Y.one('#{$fields.status.name}-image');
	SUGAR.AutoComplete.{$ac_key}.inputHidden = Y.one('#{$fields.status.name}');
	
				function SyncToHidden(selectme){
				var selectElem = document.getElementById("{$fields.status.name}");
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
			sync_{$fields.status.name} = function(){
				SyncToHidden();
			}
			function syncFromHiddenToWidget(){

				var selectElem = document.getElementById("{$fields.status.name}");

				//if select no longer on page, kill timer
				if (selectElem==null || selectElem.options == null)
					return;

				var currentvalue = SUGAR.AutoComplete.{$ac_key}.inputNode.get('value');

				SUGAR.AutoComplete.{$ac_key}.inputNode.simulate('keyup');

				for (i=0;i<selectElem.options.length;i++){

					if (selectElem.options[i].value==selectElem.value && document.activeElement != document.getElementById('{$fields.status.name}-input'))
						SUGAR.AutoComplete.{$ac_key}.inputNode.set('value',selectElem.options[i].innerHTML);
				}
			}

            YAHOO.util.Event.onAvailable("{$fields.status.name}", syncFromHiddenToWidget);

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
		
	SUGAR.AutoComplete.{$ac_key}.optionsVisible = false;
	
	SUGAR.AutoComplete.{$ac_key}.inputNode.plug(Y.Plugin.AutoComplete, {
		activateFirstItem: true,
		minQueryLength: SUGAR.AutoComplete.{$ac_key}.minQLen,
		queryDelay: SUGAR.AutoComplete.{$ac_key}.queryDelay,
		zIndex: 99999,

				
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
			var selectElem = document.getElementById("{$fields.status.name}");
			//if typed value is a valid option, do nothing
			for (i=0;i<selectElem.options.length;i++)
				if (selectElem.options[i].innerHTML==SUGAR.AutoComplete.{$ac_key}.inputNode.get('value'))
					return;
			
			//typed value is invalid, so set the text and the hidden to blank
			SUGAR.AutoComplete.{$ac_key}.inputNode.set('value', select_defaults[selectElem.id].text);
			SyncToHidden(select_defaults[selectElem.id].key);
		});
	
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
</script> 



{/if}

									{else}
						    
			    {counter name="panelFieldCount"}
				

{if is_string($fields.status.options)}
<input type="hidden" class="sugar_field" id="{$fields.status.name}" value="{$fields.status.options}">
{$fields.status.options}
{else}
<input type="hidden" class="sugar_field" id="{$fields.status.name}" value="{$fields.status.value}">
    {assign var="field_options" value=$fields.status.options }
    {assign var="field_val" value=$fields.status.value }
    {$field_options[$field_val]}
{/if}

				    
				
		{/if}

		{else}

		  <td></td><td></td>

	{/if}

		    
	</tr>
{/capture}
{if $fieldsUsed > 0 }
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{capture name="tr" assign="tableRow"}
<tr>

	

		
        

	
	

	
    			{if $fields.job_function.acl > 1 || ($showDetailData && $fields.job_function.acl > 0)}
	
				<td valign="top" id='job_function_label' width='12.5%' scope="col">
						   {capture name="label" assign="label"}{sugar_translate label='LBL_JOB' module='Schedulers'}{/capture}
			   {$label|strip_semicolon}:
										
                                                            {if $fields.job_function.locked == true}
                {$lockedIcon}
            {/if}
                        
		</td>
				{counter name="fieldsUsed"}
		
						    
		    				<td valign="top" width='37.5%' >
			
		
		            {if $fields.job_function.acl > 1 && $fields.job_function.locked == false && $fields.job_function.disabled == false}
		
							{counter name="panelFieldCount"}
			    
				

{if !isset($config.enable_autocomplete) || $config.enable_autocomplete==false}
	<select name="{$fields.job_function.name}" 
	id="{$fields.job_function.name}" 
	title=''       
	>

	{html_options options=$fields.job_function.options selected=$fields.job_function.value}
	</select>
{else}
	{assign var="field_options" value=$fields.job_function.options }
	{capture name="field_val"}{$fields.job_function.value}{/capture}
	{assign var="field_val" value=$smarty.capture.field_val}
	{capture name="ac_key"}{$fields.job_function.name}{/capture}
	{assign var="ac_key" value=$smarty.capture.ac_key}

			<select style='display:none' name="{$fields.job_function.name}" 
		id="{$fields.job_function.name}" 
		title=''          
		>

		{html_options options=$fields.job_function.options selected=$fields.job_function.value}
		</select>
	
	<input
		id="{$fields.job_function.name}-input"
		name="{$fields.job_function.name}-input"
		size="30"
		value="{$field_val|lookup:$field_options}"
		type="text" style="vertical-align: top;">

		
	<span class="id-ff multiple">
	    <button type="button"><img src="{sugar_getimagepath file="id-ff-down.png"}" id="{$fields.job_function.name}-image"></button><button type="button"
	        id="btn-clear-{$fields.job_function.name}-input"
	        title="Clear"
	        onclick="SUGAR.clearRelateField(this.form, '{$fields.job_function.name}-input', '{$fields.job_function.name}');sync_{$fields.job_function.name}()"><img src="{sugar_getimagepath file="id-ff-clear.png"}"></button>
	</span>

	<script>
	SUGAR.AutoComplete.{$ac_key} = [];

			(function (){
			var selectElem = document.getElementById("{$fields.job_function.name}");
			
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
			var options = SUGAR.AutoComplete.getOptionsArray("");

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
			YUI().use("autocomplete", "autocomplete-filters", "autocomplete-highlighters", "node","node-event-simulate", function (Y) {

	SUGAR.AutoComplete.{$ac_key}.inputNode = Y.one('#{$fields.job_function.name}-input');
	SUGAR.AutoComplete.{$ac_key}.inputImage = Y.one('#{$fields.job_function.name}-image');
	SUGAR.AutoComplete.{$ac_key}.inputHidden = Y.one('#{$fields.job_function.name}');
	
				function SyncToHidden(selectme){
				var selectElem = document.getElementById("{$fields.job_function.name}");
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
			sync_{$fields.job_function.name} = function(){
				SyncToHidden();
			}
			function syncFromHiddenToWidget(){

				var selectElem = document.getElementById("{$fields.job_function.name}");

				//if select no longer on page, kill timer
				if (selectElem==null || selectElem.options == null)
					return;

				var currentvalue = SUGAR.AutoComplete.{$ac_key}.inputNode.get('value');

				SUGAR.AutoComplete.{$ac_key}.inputNode.simulate('keyup');

				for (i=0;i<selectElem.options.length;i++){

					if (selectElem.options[i].value==selectElem.value && document.activeElement != document.getElementById('{$fields.job_function.name}-input'))
						SUGAR.AutoComplete.{$ac_key}.inputNode.set('value',selectElem.options[i].innerHTML);
				}
			}

            YAHOO.util.Event.onAvailable("{$fields.job_function.name}", syncFromHiddenToWidget);

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
		
	SUGAR.AutoComplete.{$ac_key}.optionsVisible = false;
	
	SUGAR.AutoComplete.{$ac_key}.inputNode.plug(Y.Plugin.AutoComplete, {
		activateFirstItem: true,
		minQueryLength: SUGAR.AutoComplete.{$ac_key}.minQLen,
		queryDelay: SUGAR.AutoComplete.{$ac_key}.queryDelay,
		zIndex: 99999,

				
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
			var selectElem = document.getElementById("{$fields.job_function.name}");
			//if typed value is a valid option, do nothing
			for (i=0;i<selectElem.options.length;i++)
				if (selectElem.options[i].innerHTML==SUGAR.AutoComplete.{$ac_key}.inputNode.get('value'))
					return;
			
			//typed value is invalid, so set the text and the hidden to blank
			SUGAR.AutoComplete.{$ac_key}.inputNode.set('value', select_defaults[selectElem.id].text);
			SyncToHidden(select_defaults[selectElem.id].key);
		});
	
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
</script> 



{/if}

									{else}
						    
			    {counter name="panelFieldCount"}
				

{if is_string($fields.job_function.options)}
<input type="hidden" class="sugar_field" id="{$fields.job_function.name}" value="{$fields.job_function.options}">
{$fields.job_function.options}
{else}
<input type="hidden" class="sugar_field" id="{$fields.job_function.name}" value="{$fields.job_function.value}">
    {assign var="field_options" value=$fields.job_function.options }
    {assign var="field_val" value=$fields.job_function.value }
    {$field_options[$field_val]}
{/if}

				    
				
		{/if}

		{else}

		  <td></td><td></td>

	{/if}

		    
	
	

				
    			{if $fields.job_url.acl > 1 || ($showDetailData && $fields.job_url.acl > 0)}
	
				<td valign="top" id='job_url_label' width='12.5%' scope="col">
						   {capture name="label" assign="label"}{sugar_translate label='LBL_JOB_URL' module='Schedulers'}{/capture}
			   {$label|strip_semicolon}:
													    <span class="required">*</span>
			
                                                            {if $fields.job_url.locked == true}
                {$lockedIcon}
            {/if}
                        
		</td>
				{counter name="fieldsUsed"}
		
						    
		    				<td valign="top" width='37.5%' >
			
		
		            {if $fields.job_url.acl > 1 && $fields.job_url.locked == false && $fields.job_url.disabled == false}
		
							{counter name="panelFieldCount"}
			    
				
{if strlen($fields.job_url.value) <= 0}
{assign var="value" value=$fields.job_url.default_value }
{else}
{assign var="value" value=$fields.job_url.value }
{/if}  
<input type='text' name='{$fields.job_url.name}' 
    id='{$fields.job_url.name}' size='30' 
    maxlength='255' 
    value='{$value}' title=''      >
									{else}
						    
			    {counter name="panelFieldCount"}
				
{if strlen($fields.job_url.value) <= 0}
{assign var="value" value=$fields.job_url.default_value }
{else}
{assign var="value" value=$fields.job_url.value }
{/if} 
<span class="sugar_field" id="{$fields.job_url.name}">{$fields.job_url.value}</span>

				    
				
		{/if}

		{else}

		  <td></td><td></td>

	{/if}

		    
	</tr>
{/capture}
{if $fieldsUsed > 0 }
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{capture name="tr" assign="tableRow"}
<tr>

	

		
        

	
	

				
    			{if $fields.adv_interval.acl > 1 || ($showDetailData && $fields.adv_interval.acl > 0)}
	
				<td valign="top" id='adv_interval_label' width='12.5%' scope="col">
						   {capture name="label" assign="label"}{sugar_translate label='LBL_ADV_OPTIONS' module='Schedulers'}{/capture}
			   {$label|strip_semicolon}:
										
                                                            {if $fields.adv_interval.locked == true}
                {$lockedIcon}
            {/if}
                        
		</td>
				{counter name="fieldsUsed"}
		
						    
		    				<td valign="top" width='37.5%' colspan='3'>
			
		
		            {if $fields.adv_interval.acl > 1 && $fields.adv_interval.locked == false && $fields.adv_interval.disabled == false}
		
							{counter name="panelFieldCount"}
			    
				
{if strval($fields.adv_interval.value) == "1" || strval($fields.adv_interval.value) == "yes" || strval($fields.adv_interval.value) == "on"} 
{assign var="checked" value="CHECKED"}
{else}
{assign var="checked" value=""}
{/if}
<input type="hidden" name="{$fields.adv_interval.name}" value="0"> 
<input type="checkbox" id="{$fields.adv_interval.name}" 
name="{$fields.adv_interval.name}" 
value="1" title='' tabindex="0" {$checked} >

									{else}
						    
			    {counter name="panelFieldCount"}
				
{if strval($fields.adv_interval.value) == "1" || strval($fields.adv_interval.value) == "yes" || strval($fields.adv_interval.value) == "on"} 
{assign var="checked" value="CHECKED"}
{else}
{assign var="checked" value=""}
{/if}
<input type="checkbox" class="checkbox" name="{$fields.adv_interval.name}" id="{$fields.adv_interval.name}" value="$fields.adv_interval.value" disabled="true" {$checked}>

				    
				
		{/if}

		{else}

		  <td></td><td></td>

	{/if}

		    
	</tr>
{/capture}
{if $fieldsUsed > 0 }
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{capture name="tr" assign="tableRow"}
<tr>

	

		
        

	
	

				
    			{if $fields.job_interval.acl > 1 || ($showDetailData && $fields.job_interval.acl > 0)}
	
				<td valign="top" id='job_interval_label' width='12.5%' scope="col">
						   {capture name="label" assign="label"}{sugar_translate label='LBL_INTERVAL' module='Schedulers'}{/capture}
			   {$label|strip_semicolon}:
													    <span class="required">*</span>
			
                                                            {if $fields.job_interval.locked == true}
                {$lockedIcon}
            {/if}
                        
		</td>
				{counter name="fieldsUsed"}
		
						    
		    				<td valign="top" width='37.5%' colspan='3'>
			
		
		            {if $fields.job_interval.acl > 1 && $fields.job_interval.locked == false && $fields.job_interval.disabled == false}
		
							{counter name="panelFieldCount"}
				
				<div id="job_interval_advanced">
				<script>
					var adv_interval = {$adv_interval};
				</script>
				<table cellpadding="0" cellspacing="0">
					<tr>
						<td>{$MOD.LBL_MINS}</td>
						<td>{$MOD.LBL_HOURS}</td>
						<td>{$MOD.LBL_DAY_OF_MONTH}</td>
						<td>{$MOD.LBL_MONTHS}</td>
						<td>{$MOD.LBL_DAY_OF_WEEK}</td>
					</tr><tr>
						<td><input accesskey=""  tabindex="0"  name="mins" maxlength="25" type="text" size="3" value="{$mins}"></td>
						<td><input accesskey=""  tabindex="0"  name="hours" maxlength="25" type="text" size="3" value="{$hours}"></td>
						<td><input accesskey=""  tabindex="0"  name="day_of_month" maxlength="25" type="text" size="3" value="{$day_of_month}"></td>
						<td><input accesskey=""  tabindex="0"  name="months" maxlength="25" type="text" size="3" value="{$months}"></td>
						<td><input accesskey=""  tabindex="0"  name="day_of_week" maxlength="25" type="text" size="3" value="{$day_of_week}"></td>
					</tr><tr>
						<td colspan="5">
							<em>{$MOD.LBL_CRONTAB_EXAMPLES}</em>
						</td>
					</tr>
				</table>
				</div>
				
									{else}
			                                </td>
				<td></td><td></td>
				    
		</td>		
		{/if}

		{else}

		  <td></td><td></td>

	{/if}

		    
	</tr>
{/capture}
{if $fieldsUsed > 0 }
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{capture name="tr" assign="tableRow"}
<tr>

	

		
        

	
	

				
    			{if $fields.job_interval.acl > 1 || ($showDetailData && $fields.job_interval.acl > 0)}
	
				<td valign="top" id='job_interval_label' width='12.5%' scope="col">
						   {capture name="label" assign="label"}{sugar_translate label='LBL_INTERVAL' module='Schedulers'}{/capture}
			   {$label|strip_semicolon}:
													    <span class="required">*</span>
			
                                                            {if $fields.job_interval.locked == true}
                {$lockedIcon}
            {/if}
                        
		</td>
				{counter name="fieldsUsed"}
		
						    
		    				<td valign="top" width='37.5%' colspan='3'>
			
		
		            {if $fields.job_interval.acl > 1 && $fields.job_interval.locked == false && $fields.job_interval.disabled == false}
		
							{counter name="panelFieldCount"}
				
				<div id="job_interval_basic">
				<table cellpadding="0" cellspacing="0" border="0">
					<tr>
						<td valign="top" width="25%">
							&nbsp;{$MOD.LBL_EVERY}&nbsp;
							<select accesskey=""  tabindex="0"  name="basic_interval">{html_options options=$basic_intervals selected=$basic_interval}</select>&nbsp;
							<select accesskey=""  tabindex="0"  name="basic_period">{html_options options=$basic_periods selected=$basic_period}</select>
						</td>
						<td valign="top" width="25%">
						<table cellpadding="0" cellspacing="0" border="0">
							<tr>
								<td><slot><input accesskey=""  tabindex="0"  type="checkbox" name="all" value="true" id="all" {$ALL} onClick="allDays();">&nbsp;<i>{$MOD.LBL_ALL}</i></slot></td>
							</tr>
							<tr>
								<td><slot><input accesskey=""  tabindex="0"  type="checkbox" name="mon" value="true" id="mon" {$MON}>&nbsp;{$MOD.LBL_MON}</slot></td>
							</tr>
							<tr>
								<td><slot><input accesskey=""  tabindex="0"  type="checkbox" name="tue" value="true" id="tue"  {$TUE}>&nbsp;{$MOD.LBL_TUE}</slot></td>
							</tr>
							<tr>
								<td><slot><input accesskey=""  tabindex="0"  type="checkbox" name="wed" value="true" id="wed"  {$WED}>&nbsp;{$MOD.LBL_WED}</slot></td>
							</tr>
						</table>
						</td>

						<td valign="top" width="25%">
						<table cellpadding="0" cellspacing="0" border="0">
							<tr>
								<td><slot><input accesskey=""  tabindex="0"  type="checkbox" name="thu" value="true" id="thu"  {$THU}>&nbsp;{$MOD.LBL_THU}</slot></td>
							</tr>
							<tr>
								<td><slot><input accesskey=""  tabindex="0"  type="checkbox" name="fri" value="true" id="fri"  {$FRI}>&nbsp;{$MOD.LBL_FRI}</slot></td>
							</tr>
							<tr>
								<td><slot><input accesskey=""  tabindex="0"  type="checkbox" name="sat" value="true" id="sat"  {$SAT}>&nbsp;{$MOD.LBL_SAT}</slot></td>
							</tr>
							<tr>
								<td><slot><input accesskey=""  tabindex="0"  type="checkbox" name="sun" value="true" id="sun"  {$SUN}>&nbsp;{$MOD.LBL_SUN}</slot></td>
							</tr>
						</table>
						</td>
					</tr>
				</table>
				</div>
				
									{else}
			                                </td>
				<td></td><td></td>
				    
		</td>		
		{/if}

		{else}

		  <td></td><td></td>

	{/if}

		    
	</tr>
{/capture}
{if $fieldsUsed > 0 }
{$tableRow}
{/if}
</table>


</div>
{if $panelFieldCount == 0}

<script>document.getElementById("DEFAULT").style.display='none';</script>
{/if}

  
  <div id="detailpanel_2" class="{$def.templateMeta.panelClass|default:'edit view edit508'}">

{counter name="panelFieldCount" start=0 print=false assign="panelFieldCount"}

<h4>&nbsp;&nbsp;
  <a href="javascript:void(0)" class="collapseLink" onclick="collapsePanel(2);">
  <img border="0" id="detailpanel_2_img_hide" src="{sugar_getimagepath file="basic_search.gif"}"></a>
  <a href="javascript:void(0)" class="expandLink" onclick="expandPanel(2);">
  <img border="0" id="detailpanel_2_img_show" src="{sugar_getimagepath file="advanced_search.gif"}"></a>
  {sugar_translate label='LBL_ADV_OPTIONS' module='Schedulers'}
              <script>
      document.getElementById('detailpanel_2').className += ' expanded';
    </script>
  </h4>
 <table width="100%" border="0" cellspacing="1" cellpadding="0"  id='LBL_ADV_OPTIONS'  class="yui3-skin-sam edit view panelContainer">


{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{capture name="tr" assign="tableRow"}
<tr>

	

		
        

	
	

				
    			{if $fields.catch_up.acl > 1 || ($showDetailData && $fields.catch_up.acl > 0)}
	
				<td valign="top" id='catch_up_label' width='12.5%' scope="col">
						   {capture name="label" assign="label"}{sugar_translate label='LBL_CATCH_UP' module='Schedulers'}{/capture}
			   {$label|strip_semicolon}:
										
                                                            {if $fields.catch_up.locked == true}
                {$lockedIcon}
            {/if}
                        
		</td>
				{counter name="fieldsUsed"}
		
						    
		    				<td valign="top" width='37.5%' colspan='3'>
			
		{sugar_help text=$MOD.LBL_CATCH_UP_WARNING}
		            {if $fields.catch_up.acl > 1 && $fields.catch_up.locked == false && $fields.catch_up.disabled == false}
		
							{counter name="panelFieldCount"}
			    
				
{if strval($fields.catch_up.value) == "1" || strval($fields.catch_up.value) == "yes" || strval($fields.catch_up.value) == "on"} 
{assign var="checked" value="CHECKED"}
{else}
{assign var="checked" value=""}
{/if}
<input type="hidden" name="{$fields.catch_up.name}" value="0"> 
<input type="checkbox" id="{$fields.catch_up.name}" 
name="{$fields.catch_up.name}" 
value="1" title='' tabindex="0" {$checked} >

									{else}
						    
			    {counter name="panelFieldCount"}
				
{if strval($fields.catch_up.value) == "1" || strval($fields.catch_up.value) == "yes" || strval($fields.catch_up.value) == "on"} 
{assign var="checked" value="CHECKED"}
{else}
{assign var="checked" value=""}
{/if}
<input type="checkbox" class="checkbox" name="{$fields.catch_up.name}" id="{$fields.catch_up.name}" value="$fields.catch_up.value" disabled="true" {$checked}>

				    
				
		{/if}

		{else}

		  <td></td><td></td>

	{/if}

		    
	</tr>
{/capture}
{if $fieldsUsed > 0 }
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{capture name="tr" assign="tableRow"}
<tr>

	

		
        

	
	

	
    			{if $fields.date_time_start.acl > 1 || ($showDetailData && $fields.date_time_start.acl > 0)}
	
				<td valign="top" id='date_time_start_label' width='12.5%' scope="col">
						   {capture name="label" assign="label"}{sugar_translate label='LBL_DATE_TIME_START' module='Schedulers'}{/capture}
			   {$label|strip_semicolon}:
													    <span class="required">*</span>
			
                                                            {if $fields.date_time_start.locked == true}
                {$lockedIcon}
            {/if}
                        
		</td>
				{counter name="fieldsUsed"}
		
						    
		    				<td valign="top" width='37.5%' >
			
		
		            {if $fields.date_time_start.acl > 1 && $fields.date_time_start.locked == false && $fields.date_time_start.disabled == false}
		
							{counter name="panelFieldCount"}
			    
				

<table border="0" cellpadding="0" cellspacing="0" class="dateTime">
<tr valign="middle">
<td nowrap>
<input autocomplete="off" type="text" id="{$fields.date_time_start.name}_date" value="{$fields[$fields.date_time_start.name].value}" size="11" maxlength="10" title='' tabindex="0" onblur="combo_{$fields.date_time_start.name}.update();" onchange="combo_{$fields.date_time_start.name}.update(); "    >
{capture assign="other_attributes"}alt="{$APP.LBL_ENTER_DATE}" style="position:relative; top:6px" border="0" id="{$fields.date_time_start.name}_trigger"{/capture}
{sugar_getimage name="jscalendar" ext=".gif" other_attributes="$other_attributes"}&nbsp;
</td>
<td nowrap>
<div id="{$fields.date_time_start.name}_time_section"></div>
</td>
</tr>
</table>
<input type="hidden" class="DateTimeCombo" id="{$fields.date_time_start.name}" name="{$fields.date_time_start.name}" value="{$fields[$fields.date_time_start.name].value}">
<script type="text/javascript" src="{sugar_getjspath file="include/SugarFields/Fields/Datetimecombo/Datetimecombo.js"}"></script>
<script type="text/javascript">
var combo_{$fields.date_time_start.name} = new Datetimecombo("{$fields[$fields.date_time_start.name].value}", "{$fields.date_time_start.name}", "{$TIME_FORMAT}", "0", '', false, true);
//Render the remaining widget fields
text = combo_{$fields.date_time_start.name}.html('');
document.getElementById('{$fields.date_time_start.name}_time_section').innerHTML = text;

//Call eval on the update function to handle updates to calendar picker object
eval(combo_{$fields.date_time_start.name}.jsscript(''));

//bug 47718: this causes too many addToValidates to be called, resulting in the error messages being displayed multiple times
//    removing it here to mirror the Datetime SugarField, where the validation is not added at this level
//addToValidate('{$form_name}',"{$fields.date_time_start.name}_date",'date',false,"{$fields.date_time_start.name}");
addToValidateBinaryDependency('{$form_name}', "{$fields.date_time_start.name}_hours", 'alpha', false, "{$APP.ERR_MISSING_REQUIRED_FIELDS|strip} {$APP.LBL_HOURS|strip}", "{$fields.date_time_start.name}_date");
addToValidateBinaryDependency('{$form_name}', "{$fields.date_time_start.name}_minutes", 'alpha', false, "{$APP.ERR_MISSING_REQUIRED_FIELDS|strip} {$APP.LBL_MINUTES|strip}", "{$fields.date_time_start.name}_date");
addToValidateBinaryDependency('{$form_name}', "{$fields.date_time_start.name}_meridiem", 'alpha', false, "{$APP.ERR_MISSING_REQUIRED_FIELDS|strip} {$APP.LBL_MERIDIEM|strip}", "{$fields.date_time_start.name}_date");

YAHOO.util.Event.onDOMReady(function()
{ldelim}

	Calendar.setup ({ldelim}
	onClose : update_{$fields.date_time_start.name},
	inputField : "{$fields.date_time_start.name}_date",
	ifFormat : "{$CALENDAR_FORMAT}",
	daFormat : "{$CALENDAR_FORMAT}",
	button : "{$fields.date_time_start.name}_trigger",
	singleClick : true,
	step : 1,
	weekNumbers: false,
        startWeekday: {$CALENDAR_FDOW|default:'0'},
	comboObject: combo_{$fields.date_time_start.name}
	{rdelim});

	//Call update for first time to round hours and minute values
	combo_{$fields.date_time_start.name}.update(false);

{rdelim}); 
</script>

									{else}
						    
			    {counter name="panelFieldCount"}
				
{if strlen($fields.date_time_start.value) <= 0}
{assign var="value" value=$fields.date_time_start.default_value }
{else}
{assign var="value" value=$fields.date_time_start.value }
{/if} 
<span class="sugar_field" id="{$fields.date_time_start.name}">{$fields.date_time_start.value}</span>

				    
				
		{/if}

		{else}

		  <td></td><td></td>

	{/if}

		    
	
	

				
    			{if $fields.time_from.acl > 1 || ($showDetailData && $fields.time_from.acl > 0)}
	
				<td valign="top" id='time_from_label' width='12.5%' scope="col">
						   {capture name="label" assign="label"}{sugar_translate label='LBL_TIME_FROM' module='Schedulers'}{/capture}
			   {$label|strip_semicolon}:
										
                                                            {if $fields.time_from.locked == true}
                {$lockedIcon}
            {/if}
                        
		</td>
				{counter name="fieldsUsed"}
		
						    
		    				<td valign="top" width='37.5%' >
			
		
		            {if $fields.time_from.acl > 1 && $fields.time_from.locked == false && $fields.time_from.disabled == false}
		
							{counter name="panelFieldCount"}
			    
				


<table border="0" cellpadding="0" cellspacing="0">
<tr valign="middle">
<td nowrap>
<div id="{$fields.time_from.name}_time"></div>
</td>
</tr>
</table>
<input type="hidden" id="{$fields.time_from.name}" name="{$fields.time_from.name}" value="{$fields[$fields.time_from.name].value}">
<script type="text/javascript" src="{sugar_getjspath file='include/SugarFields/Fields/Time/Time.js'}"></script>
<script type="text/javascript">

//cleanup because this happens in a screwy order in a quickcreate, and the standard $(document).ready and YUI functions don't work quite right
var timeclosure_{$fields.time_from.name} = function(){ldelim}
	var idname = "{$fields.time_from.name}";
	var timeField = "{$fields[$fields.time_from.name].value}";
	var timeFormat = "{$fields[$fields.time_from.name].value}";
	var tabIndex = "0";
	var callback = "";
	

	SUGAR.util.doWhen(typeof(Time) != "undefined", function(){
		var combo = new Time(timeField, idname, timeFormat, tabIndex);
		//Render the remaining widget fields
		var text = combo.html(callback);
		document.getElementById(idname + "_time").innerHTML = text;	
	});
{rdelim}
timeclosure_{$fields.time_from.name}();
</script>

<script type="text/javascript">
function update_{$fields.time_from.name}_available() {ldelim}
      YAHOO.util.Event.onAvailable("{$fields.time_from.name}_time_hours", this.handleOnAvailable, this);
{rdelim}

update_{$fields.time_from.name}_available.prototype.handleOnAvailable = function(me) {ldelim}
	//Call update for first time to round hours and minute values
	combo_{$fields.time_from.name}.update();
{rdelim}

var obj_{$fields.time_from.name} = new update_{$fields.time_from.name}_available();
</script>
									{else}
						    
			    {counter name="panelFieldCount"}
				
{if strlen($fields.time_from.value) <= 0}
{assign var="value" value=$fields.time_from.default_value }
{else}
{assign var="value" value=$fields.time_from.value }
{/if} 
<span class="sugar_field" id="{$fields.time_from.name}">{$fields.time_from.value}</span>

				    
				
		{/if}

		{else}

		  <td></td><td></td>

	{/if}

		    
	</tr>
{/capture}
{if $fieldsUsed > 0 }
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{capture name="tr" assign="tableRow"}
<tr>

	

		
        

	
	

	
    			{if $fields.date_time_end.acl > 1 || ($showDetailData && $fields.date_time_end.acl > 0)}
	
				<td valign="top" id='date_time_end_label' width='12.5%' scope="col">
						   {capture name="label" assign="label"}{sugar_translate label='LBL_DATE_TIME_END' module='Schedulers'}{/capture}
			   {$label|strip_semicolon}:
										
                                                            {if $fields.date_time_end.locked == true}
                {$lockedIcon}
            {/if}
                        
		</td>
				{counter name="fieldsUsed"}
		
						    
		    				<td valign="top" width='37.5%' >
			
		
		            {if $fields.date_time_end.acl > 1 && $fields.date_time_end.locked == false && $fields.date_time_end.disabled == false}
		
							{counter name="panelFieldCount"}
			    
				

<table border="0" cellpadding="0" cellspacing="0" class="dateTime">
<tr valign="middle">
<td nowrap>
<input autocomplete="off" type="text" id="{$fields.date_time_end.name}_date" value="{$fields[$fields.date_time_end.name].value}" size="11" maxlength="10" title='' tabindex="0" onblur="combo_{$fields.date_time_end.name}.update();" onchange="combo_{$fields.date_time_end.name}.update(); "    >
{capture assign="other_attributes"}alt="{$APP.LBL_ENTER_DATE}" style="position:relative; top:6px" border="0" id="{$fields.date_time_end.name}_trigger"{/capture}
{sugar_getimage name="jscalendar" ext=".gif" other_attributes="$other_attributes"}&nbsp;
</td>
<td nowrap>
<div id="{$fields.date_time_end.name}_time_section"></div>
</td>
</tr>
</table>
<input type="hidden" class="DateTimeCombo" id="{$fields.date_time_end.name}" name="{$fields.date_time_end.name}" value="{$fields[$fields.date_time_end.name].value}">
<script type="text/javascript" src="{sugar_getjspath file="include/SugarFields/Fields/Datetimecombo/Datetimecombo.js"}"></script>
<script type="text/javascript">
var combo_{$fields.date_time_end.name} = new Datetimecombo("{$fields[$fields.date_time_end.name].value}", "{$fields.date_time_end.name}", "{$TIME_FORMAT}", "0", '', false, true);
//Render the remaining widget fields
text = combo_{$fields.date_time_end.name}.html('');
document.getElementById('{$fields.date_time_end.name}_time_section').innerHTML = text;

//Call eval on the update function to handle updates to calendar picker object
eval(combo_{$fields.date_time_end.name}.jsscript(''));

//bug 47718: this causes too many addToValidates to be called, resulting in the error messages being displayed multiple times
//    removing it here to mirror the Datetime SugarField, where the validation is not added at this level
//addToValidate('{$form_name}',"{$fields.date_time_end.name}_date",'date',false,"{$fields.date_time_end.name}");
addToValidateBinaryDependency('{$form_name}', "{$fields.date_time_end.name}_hours", 'alpha', false, "{$APP.ERR_MISSING_REQUIRED_FIELDS|strip} {$APP.LBL_HOURS|strip}", "{$fields.date_time_end.name}_date");
addToValidateBinaryDependency('{$form_name}', "{$fields.date_time_end.name}_minutes", 'alpha', false, "{$APP.ERR_MISSING_REQUIRED_FIELDS|strip} {$APP.LBL_MINUTES|strip}", "{$fields.date_time_end.name}_date");
addToValidateBinaryDependency('{$form_name}', "{$fields.date_time_end.name}_meridiem", 'alpha', false, "{$APP.ERR_MISSING_REQUIRED_FIELDS|strip} {$APP.LBL_MERIDIEM|strip}", "{$fields.date_time_end.name}_date");

YAHOO.util.Event.onDOMReady(function()
{ldelim}

	Calendar.setup ({ldelim}
	onClose : update_{$fields.date_time_end.name},
	inputField : "{$fields.date_time_end.name}_date",
	ifFormat : "{$CALENDAR_FORMAT}",
	daFormat : "{$CALENDAR_FORMAT}",
	button : "{$fields.date_time_end.name}_trigger",
	singleClick : true,
	step : 1,
	weekNumbers: false,
        startWeekday: {$CALENDAR_FDOW|default:'0'},
	comboObject: combo_{$fields.date_time_end.name}
	{rdelim});

	//Call update for first time to round hours and minute values
	combo_{$fields.date_time_end.name}.update(false);

{rdelim}); 
</script>

									{else}
						    
			    {counter name="panelFieldCount"}
				
{if strlen($fields.time_from.value) <= 0}
{assign var="value" value=$fields.time_from.default_value }
{else}
{assign var="value" value=$fields.time_from.value }
{/if} 
<span class="sugar_field" id="{$fields.time_from.name}">{$fields.time_from.value}</span>

				    
				
		{/if}

		{else}

		  <td></td><td></td>

	{/if}

		    
	
	

				
    			{if $fields.time_to.acl > 1 || ($showDetailData && $fields.time_to.acl > 0)}
	
				<td valign="top" id='time_to_label' width='12.5%' scope="col">
						   {capture name="label" assign="label"}{sugar_translate label='LBL_TIME_TO' module='Schedulers'}{/capture}
			   {$label|strip_semicolon}:
										
                                                            {if $fields.time_to.locked == true}
                {$lockedIcon}
            {/if}
                        
		</td>
				{counter name="fieldsUsed"}
		
						    
		    				<td valign="top" width='37.5%' >
			
		
		            {if $fields.time_to.acl > 1 && $fields.time_to.locked == false && $fields.time_to.disabled == false}
		
							{counter name="panelFieldCount"}
			    
				


<table border="0" cellpadding="0" cellspacing="0">
<tr valign="middle">
<td nowrap>
<div id="{$fields.time_to.name}_time"></div>
</td>
</tr>
</table>
<input type="hidden" id="{$fields.time_to.name}" name="{$fields.time_to.name}" value="{$fields[$fields.time_to.name].value}">
<script type="text/javascript" src="{sugar_getjspath file='include/SugarFields/Fields/Time/Time.js'}"></script>
<script type="text/javascript">

//cleanup because this happens in a screwy order in a quickcreate, and the standard $(document).ready and YUI functions don't work quite right
var timeclosure_{$fields.time_to.name} = function(){ldelim}
	var idname = "{$fields.time_to.name}";
	var timeField = "{$fields[$fields.time_to.name].value}";
	var timeFormat = "{$fields[$fields.time_to.name].value}";
	var tabIndex = "0";
	var callback = "";
	

	SUGAR.util.doWhen(typeof(Time) != "undefined", function(){
		var combo = new Time(timeField, idname, timeFormat, tabIndex);
		//Render the remaining widget fields
		var text = combo.html(callback);
		document.getElementById(idname + "_time").innerHTML = text;	
	});
{rdelim}
timeclosure_{$fields.time_to.name}();
</script>

<script type="text/javascript">
function update_{$fields.time_to.name}_available() {ldelim}
      YAHOO.util.Event.onAvailable("{$fields.time_to.name}_time_hours", this.handleOnAvailable, this);
{rdelim}

update_{$fields.time_to.name}_available.prototype.handleOnAvailable = function(me) {ldelim}
	//Call update for first time to round hours and minute values
	combo_{$fields.time_to.name}.update();
{rdelim}

var obj_{$fields.time_to.name} = new update_{$fields.time_to.name}_available();
</script>
									{else}
						    
			    {counter name="panelFieldCount"}
				
{if strlen($fields.time_to.value) <= 0}
{assign var="value" value=$fields.time_to.default_value }
{else}
{assign var="value" value=$fields.time_to.value }
{/if} 
<span class="sugar_field" id="{$fields.time_to.name}">{$fields.time_to.value}</span>

				    
				
		{/if}

		{else}

		  <td></td><td></td>

	{/if}

		    
	</tr>
{/capture}
{if $fieldsUsed > 0 }
{$tableRow}
{/if}
</table>
<script type="text/javascript">SUGAR.util.doWhen("typeof initPanel == 'function'", function() {ldelim} initPanel(2, 'expanded'); {rdelim}); </script>


</div>
{if $panelFieldCount == 0}

<script>document.getElementById("LBL_ADV_OPTIONS").style.display='none';</script>
{/if}
</div></div>

<script language="javascript">
    var _form_id = '{$form_id}';
    SUGAR.util.doWhen(function(){
        _form_id = (_form_id == '') ? 'EditView' : _form_id;
        return document.getElementById(_form_id) != null;
    }, SUGAR.themes.actionMenu);
</script>
{assign var='place' value="_FOOTER"} <!-- to be used for id for buttons with custom code in def files-->
<div class="buttons">



<div class="action_buttons">{if $bean->aclAccess("save") || $isDuplicate}<input title="{$APP.LBL_SAVE_BUTTON_TITLE}" accessKey="{$APP.LBL_SAVE_BUTTON_KEY}" class="button primary" onclick="var _form = document.getElementById('EditView'); {if $isDuplicate}_form.return_id.value=''; {/if}_form.action.value='Save'; if(check_form('EditView'))SUGAR.ajaxUI.submitForm(_form);return false;" type="submit" name="button" value="{$APP.LBL_SAVE_BUTTON_LABEL}" id="SAVE_FOOTER">{/if}  {capture name="cancelReturnUrl" assign="cancelReturnUrl"}{if !empty($smarty.request.return_action) && $smarty.request.return_action == "DetailView" && !empty($fields.id.value) && empty($smarty.request.return_id)}parent.SUGAR.App.router.buildRoute('{$smarty.request.return_module|escape:"url"}', '{$fields.id.value|escape:"url"}', '{$smarty.request.return_action|escape:"url"}'){elseif !empty($smarty.request.return_module) || !empty($smarty.request.return_action) || !empty($smarty.request.return_id)}parent.SUGAR.App.router.buildRoute('{$smarty.request.return_module|escape:"url"}', '{$smarty.request.return_id|escape:"url"}', '{$smarty.request.return_action|escape:"url"}'){else}parent.SUGAR.App.router.buildRoute('Schedulers'){/if}{/capture}<input title="{$APP.LBL_CANCEL_BUTTON_TITLE}" accessKey="{$APP.LBL_CANCEL_BUTTON_KEY}" class="button" onclick="parent.SUGAR.App.bwc.revertAttributes();parent.SUGAR.App.router.navigate({$cancelReturnUrl}, {literal}{trigger: true}{/literal}); return false;" type="button" name="button" value="{$APP.LBL_CANCEL_BUTTON_LABEL}" id="CANCEL_FOOTER">  {if $bean->aclAccess("detail")}{if !empty($fields.id.value) && $isAuditEnabled}<input id="btn_view_change_log" title="{$APP.LNK_VIEW_CHANGE_LOG}" class="button" onclick='open_popup("Audit", "600", "400", "&record={$fields.id.value}&module_name=Schedulers", true, false,  {ldelim} "call_back_function":"set_return","form_name":"EditView","field_to_name_array":[] {rdelim} ); return false;' type="button" value="{$APP.LNK_VIEW_CHANGE_LOG}">{/if}{/if}<div class="clear"></div></div>
</div>
</form>

{$set_focus_block}

<script>SUGAR.util.doWhen("document.getElementById('EditView') != null",
        function(){ldelim}SUGAR.util.buildAccessKeyLabels();{rdelim});
</script>
{*
TODO REMOVE THIS CODE
<script type="text/javascript">
YAHOO.util.Event.onContentReady("EditView",
    function () {ldelim} initEditView(document.forms.EditView) {rdelim});
//window.setTimeout(, 100);
window.onbeforeunload = function () {ldelim} return onUnloadEditView(); {rdelim};

// bug 55468 -- IE is too aggressive with onUnload event
if (SUGAR.browser.msie) {ldelim}
$(document).ready(function() {ldelim}
    $(".collapseLink,.expandLink").click(function (e) {ldelim} e.preventDefault(); {rdelim});
  {rdelim});
{rdelim}

</script>
*}
{literal}
<script type="text/javascript">
addForm('EditView');addToValidate('EditView', 'name', 'name', true,'{/literal}{sugar_translate label='LBL_NAME' module='Schedulers' for_js=true}{literal}' );
addToValidate('EditView', 'date_entered_date', 'date', false,'Date Created' );
addToValidate('EditView', 'date_modified_date', 'date', false,'Date Modified' );
addToValidate('EditView', 'modified_user_id', 'assigned_user_name', false,'{/literal}{sugar_translate label='LBL_MODIFIED' module='Schedulers' for_js=true}{literal}' );
addToValidate('EditView', 'modified_by_name', 'relate', false,'{/literal}{sugar_translate label='LBL_MODIFIED' module='Schedulers' for_js=true}{literal}' );
addToValidate('EditView', 'created_by', 'assigned_user_name', false,'{/literal}{sugar_translate label='LBL_CREATED' module='Schedulers' for_js=true}{literal}' );
addToValidate('EditView', 'created_by_name', 'relate', false,'{/literal}{sugar_translate label='LBL_CREATED' module='Schedulers' for_js=true}{literal}' );
addToValidate('EditView', 'description', 'text', false,'{/literal}{sugar_translate label='LBL_DESCRIPTION' module='Schedulers' for_js=true}{literal}' );
addToValidate('EditView', 'deleted', 'bool', false,'{/literal}{sugar_translate label='LBL_DELETED' module='Schedulers' for_js=true}{literal}' );
addToValidate('EditView', 'job', 'varchar', true,'{/literal}{sugar_translate label='LBL_JOB' module='Schedulers' for_js=true}{literal}' );
addToValidate('EditView', 'job_url', 'varchar', true,'{/literal}{sugar_translate label='LBL_JOB_URL' module='Schedulers' for_js=true}{literal}' );
addToValidate('EditView', 'job_function', 'enum', false,'{/literal}{sugar_translate label='LBL_JOB' module='Schedulers' for_js=true}{literal}' );
addToValidate('EditView', 'date_time_start_date', 'date', true,'Date & Time Start' );
addToValidate('EditView', 'date_time_end_date', 'date', false,'Date & Time End' );
addToValidate('EditView', 'job_interval', 'varchar', true,'{/literal}{sugar_translate label='LBL_INTERVAL' module='Schedulers' for_js=true}{literal}' );
addToValidate('EditView', 'adv_interval', 'bool', false,'{/literal}{sugar_translate label='LBL_ADV_OPTIONS' module='Schedulers' for_js=true}{literal}' );
addToValidate('EditView', 'time_from', 'time', false,'{/literal}{sugar_translate label='LBL_TIME_FROM' module='Schedulers' for_js=true}{literal}' );
addToValidate('EditView', 'time_to', 'time', false,'{/literal}{sugar_translate label='LBL_TIME_TO' module='Schedulers' for_js=true}{literal}' );
addToValidate('EditView', 'last_run_date', 'date', false,'Last Successful Run' );
addToValidate('EditView', 'status', 'enum', false,'{/literal}{sugar_translate label='LBL_STATUS' module='Schedulers' for_js=true}{literal}' );
addToValidate('EditView', 'catch_up', 'bool', false,'{/literal}{sugar_translate label='LBL_CATCH_UP' module='Schedulers' for_js=true}{literal}' );
addToValidate('EditView', 'system_job', 'bool', false,'{/literal}{sugar_translate label='LBL_SYSTEM_JOB' module='Schedulers' for_js=true}{literal}' );
addToValidate('EditView', 'following', 'bool', false,'{/literal}{sugar_translate label='LBL_FOLLOWING' module='Schedulers' for_js=true}{literal}' );
addToValidate('EditView', 'my_favorite', 'bool', false,'{/literal}{sugar_translate label='LBL_FAVORITE' module='Schedulers' for_js=true}{literal}' );
addToValidate('EditView', 'commentlog', 'collection', false,'{/literal}{sugar_translate label='LBL_COMMENTLOG' module='Schedulers' for_js=true}{literal}' );
addToValidate('EditView', 'locked_fields', 'locked_fields', false,'{/literal}{sugar_translate label='LBL_LOCKED_FIELDS' module='Schedulers' for_js=true}{literal}' );
addToValidate('EditView', 'sync_key', 'varchar', false,'{/literal}{sugar_translate label='LBL_SYNC_KEY' module='Schedulers' for_js=true}{literal}' );
addToValidateBinaryDependency('EditView', 'assigned_user_name', 'alpha', false,'{/literal}{sugar_translate label='ERR_SQS_NO_MATCH_FIELD' module='Schedulers' for_js=true}{literal}: {/literal}{sugar_translate label='LBL_ASSIGNED_TO' module='Schedulers' for_js=true}{literal}', 'assigned_user_id' );
</script><script type=text/javascript>
SUGAR.util.doWhen('!SUGAR.util.ajaxCallInProgress()', function(){
SUGAR.forms.AssignmentHandler.registerView('EditView');
SUGAR.forms.AssignmentHandler.LINKS['EditView'] = {"created_by_link":{"relationship":"schedulers_created_by","module":"Users","id_name":"created_by"},"modified_user_link":{"relationship":"schedulers_modified_user","module":"Users","id_name":"modified_user_id"},"activities":{"relationship":"scheduler_activities","module":"Activities"},"schedulers_times":{"relationship":"schedulers_jobs_rel","module":"SchedulersJobs"},"following_link":{"relationship":"schedulers_following"},"favorite_link":{"relationship":"schedulers_favorite"},"commentlog_link":{"relationship":"schedulers_commentlog"},"locked_fields_link":{"relationship":"schedulers_locked_fields"}}
var job_url_visdep = new SUGAR.forms.Dependency(new SUGAR.forms.Trigger(['job_function'], 'true'), [new SUGAR.forms.SetVisibilityAction('job_url','equal($job_function, "url::")', '')],[],true,'EditView');

YAHOO.util.Event.onContentReady('EditView', SUGAR.forms.AssignmentHandler.loadComplete);});</script>{/literal}
