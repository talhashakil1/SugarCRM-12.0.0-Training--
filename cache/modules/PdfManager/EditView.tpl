


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
<input type="hidden" name="base_module_history" id="base_module_history" value="{$fields.base_module.value}">   



<div class="action_buttons">{if $bean->aclAccess("save") || $isDuplicate}<input title="{$APP.LBL_SAVE_BUTTON_TITLE}" accessKey="{$APP.LBL_SAVE_BUTTON_KEY}" class="button primary" onclick="var _form = document.getElementById('EditView'); {if $isDuplicate}_form.return_id.value=''; {/if}_form.action.value='Save'; if(check_form('EditView'))SUGAR.ajaxUI.submitForm(_form);return false;" type="submit" name="button" value="{$APP.LBL_SAVE_BUTTON_LABEL}" id="SAVE_HEADER">{/if}  {capture name="cancelReturnUrl" assign="cancelReturnUrl"}{if !empty($smarty.request.return_action) && $smarty.request.return_action == "DetailView" && !empty($fields.id.value) && empty($smarty.request.return_id)}parent.SUGAR.App.router.buildRoute('{$smarty.request.return_module|escape:"url"}', '{$fields.id.value|escape:"url"}', '{$smarty.request.return_action|escape:"url"}'){elseif !empty($smarty.request.return_module) || !empty($smarty.request.return_action) || !empty($smarty.request.return_id)}parent.SUGAR.App.router.buildRoute('{$smarty.request.return_module|escape:"url"}', '{$smarty.request.return_id|escape:"url"}', '{$smarty.request.return_action|escape:"url"}'){else}parent.SUGAR.App.router.buildRoute('PdfManager'){/if}{/capture}<input title="{$APP.LBL_CANCEL_BUTTON_TITLE}" accessKey="{$APP.LBL_CANCEL_BUTTON_KEY}" class="button" onclick="parent.SUGAR.App.bwc.revertAttributes();parent.SUGAR.App.router.navigate({$cancelReturnUrl}, {literal}{trigger: true}{/literal}); return false;" type="button" name="button" value="{$APP.LBL_CANCEL_BUTTON_LABEL}" id="CANCEL_HEADER">  {if $bean->aclAccess("detail")}{if !empty($fields.id.value) && $isAuditEnabled}<input id="btn_view_change_log" title="{$APP.LNK_VIEW_CHANGE_LOG}" class="button" onclick='open_popup("Audit", "600", "400", "&record={$fields.id.value}&module_name=PdfManager", true, false,  {ldelim} "call_back_function":"set_return","form_name":"EditView","field_to_name_array":[] {rdelim} ); return false;' type="button" value="{$APP.LNK_VIEW_CHANGE_LOG}">{/if}{/if}<div class="clear"></div></div>
</td>
<td align='right'>
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
						   {capture name="label" assign="label"}{sugar_translate label='LBL_NAME' module='PdfManager'}{/capture}
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

		    
	
	

				
    			{if $fields.team_name.acl > 1 || ($showDetailData && $fields.team_name.acl > 0)}
	
				<td valign="top" id='team_name_label' width='12.5%' scope="col">
						   {capture name="label" assign="label"}{sugar_translate label='LBL_TEAMS' module='PdfManager'}{/capture}
			   {$label|strip_semicolon}:
													    <span class="required">*</span>
			
                                                            {if $fields.team_name.locked == true}
                {$lockedIcon}
            {/if}
                        
		</td>
				{counter name="fieldsUsed"}
		
						    
		    				<td valign="top" width='37.5%' >
			
		
		            {if $fields.team_name.acl > 1 && $fields.team_name.locked == false && $fields.team_name.disabled == false}
		
							{counter name="panelFieldCount"}
			    
				
{sugarvar_teamset parentFieldArray=fields vardef=$fields.team_name tabindex='0' display='1' labelSpan='' fieldSpan='' formName='EditView' tabindex=1 displayType='renderEditView'  	 }

									{else}
						    
			    {counter name="panelFieldCount"}
				
{sugarvar_teamset parentFieldArray=fields vardef=$fields.team_name tabindex='0' display='1' labelSpan='' fieldSpan='' formName='EditView' tabindex=1 displayType='renderDetailView'  	 }

				    
				
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

	

		
        

	
	

				
    			{if $fields.description.acl > 1 || ($showDetailData && $fields.description.acl > 0)}
	
				<td valign="top" id='description_label' width='12.5%' scope="col">
						   {capture name="label" assign="label"}{sugar_translate label='LBL_DESCRIPTION' module='PdfManager'}{/capture}
			   {$label|strip_semicolon}:
										
                                                            {if $fields.description.locked == true}
                {$lockedIcon}
            {/if}
                        
		</td>
				{counter name="fieldsUsed"}
		
						    
		    				<td valign="top" width='37.5%' colspan='3'>
			
		
		            {if $fields.description.acl > 1 && $fields.description.locked == false && $fields.description.disabled == false}
		
							{counter name="panelFieldCount"}
			    
				
{if empty($fields.description.value)}
{assign var="value" value=$fields.description.default_value }
{else}
{assign var="value" value=$fields.description.value }
{/if}  


<textarea  id='{$fields.description.name}' name='{$fields.description.name}'
rows="1" 
cols="80" 
title='' tabindex="0" 
 >{$value}</textarea>

									{else}
						    
			    {counter name="panelFieldCount"}
				
<span class="sugar_field" id="{$fields.description.name|escape:'html'|url2html|nl2br}">{$fields.description.value|escape:'htmlentitydecode'|escape:'html'|url2html|nl2br}</span>

				    
				
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

	

		
        

	
	

	
    			{if $fields.base_module.acl > 1 || ($showDetailData && $fields.base_module.acl > 0)}
	
				<td valign="top" id='base_module_label' width='12.5%' scope="col">
						   {capture name="label" assign="label"}{sugar_translate label='LBL_BASE_MODULE' module='PdfManager'}{/capture}
			   {$label|strip_semicolon}:
													    <span class="required">*</span>
			
                                                            {if $fields.base_module.locked == true}
                {$lockedIcon}
            {/if}
                                                      {capture name="popupText" assign="popupText"}{sugar_translate label="LBL_BASE_MODULE_POPUP_HELP" module='PdfManager'}{/capture}
                            {sugar_help text=$popupText WIDTH=-1}
            
		</td>
				{counter name="fieldsUsed"}
		
						    
		    				<td valign="top" width='37.5%' >
			
		
		            {if $fields.base_module.acl > 1 && $fields.base_module.locked == false && $fields.base_module.disabled == false}
		
							{counter name="panelFieldCount"}
			    
				

{if !isset($config.enable_autocomplete) || $config.enable_autocomplete==false}
	<select name="{$fields.base_module.name}" 
	id="{$fields.base_module.name}" 
	title=''        onChange="SUGAR.PdfManager.loadFields(this.value, '');"
	>

	{html_options options=$fields.base_module.options selected=$fields.base_module.value}
	</select>
{else}
	{assign var="field_options" value=$fields.base_module.options }
	{capture name="field_val"}{$fields.base_module.value}{/capture}
	{assign var="field_val" value=$smarty.capture.field_val}
	{capture name="ac_key"}{$fields.base_module.name}{/capture}
	{assign var="ac_key" value=$smarty.capture.ac_key}

			<select style='display:none' name="{$fields.base_module.name}" 
		id="{$fields.base_module.name}" 
		title=''           onChange="SUGAR.PdfManager.loadFields(this.value, '');"
		>

		{html_options options=$fields.base_module.options selected=$fields.base_module.value}
		</select>
	
	<input
		id="{$fields.base_module.name}-input"
		name="{$fields.base_module.name}-input"
		size="30"
		value="{$field_val|lookup:$field_options}"
		type="text" style="vertical-align: top;">

		
	<span class="id-ff multiple">
	    <button type="button"><img src="{sugar_getimagepath file="id-ff-down.png"}" id="{$fields.base_module.name}-image"></button><button type="button"
	        id="btn-clear-{$fields.base_module.name}-input"
	        title="Clear"
	        onclick="SUGAR.clearRelateField(this.form, '{$fields.base_module.name}-input', '{$fields.base_module.name}');sync_{$fields.base_module.name}()"><img src="{sugar_getimagepath file="id-ff-clear.png"}"></button>
	</span>

	<script>
	SUGAR.AutoComplete.{$ac_key} = [];

			(function (){
			var selectElem = document.getElementById("{$fields.base_module.name}");
			
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

	SUGAR.AutoComplete.{$ac_key}.inputNode = Y.one('#{$fields.base_module.name}-input');
	SUGAR.AutoComplete.{$ac_key}.inputImage = Y.one('#{$fields.base_module.name}-image');
	SUGAR.AutoComplete.{$ac_key}.inputHidden = Y.one('#{$fields.base_module.name}');
	
				function SyncToHidden(selectme){
				var selectElem = document.getElementById("{$fields.base_module.name}");
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
			sync_{$fields.base_module.name} = function(){
				SyncToHidden();
			}
			function syncFromHiddenToWidget(){

				var selectElem = document.getElementById("{$fields.base_module.name}");

				//if select no longer on page, kill timer
				if (selectElem==null || selectElem.options == null)
					return;

				var currentvalue = SUGAR.AutoComplete.{$ac_key}.inputNode.get('value');

				SUGAR.AutoComplete.{$ac_key}.inputNode.simulate('keyup');

				for (i=0;i<selectElem.options.length;i++){

					if (selectElem.options[i].value==selectElem.value && document.activeElement != document.getElementById('{$fields.base_module.name}-input'))
						SUGAR.AutoComplete.{$ac_key}.inputNode.set('value',selectElem.options[i].innerHTML);
				}
			}

            YAHOO.util.Event.onAvailable("{$fields.base_module.name}", syncFromHiddenToWidget);

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
			var selectElem = document.getElementById("{$fields.base_module.name}");
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
				

{if is_string($fields.base_module.options)}
<input type="hidden" class="sugar_field" id="{$fields.base_module.name}" value="{$fields.base_module.options}">
{$fields.base_module.options}
{else}
<input type="hidden" class="sugar_field" id="{$fields.base_module.name}" value="{$fields.base_module.value}">
    {assign var="field_options" value=$fields.base_module.options }
    {assign var="field_val" value=$fields.base_module.value }
    {$field_options[$field_val]}
{/if}

				    
				
		{/if}

		{else}

		  <td></td><td></td>

	{/if}

		    
	
	

				
    			{if $fields.published.acl > 1 || ($showDetailData && $fields.published.acl > 0)}
	
				<td valign="top" id='published_label' width='12.5%' scope="col">
						   {capture name="label" assign="label"}{sugar_translate label='LBL_PUBLISHED' module='PdfManager'}{/capture}
			   {$label|strip_semicolon}:
										
                                                            {if $fields.published.locked == true}
                {$lockedIcon}
            {/if}
                                                      {capture name="popupText" assign="popupText"}{sugar_translate label="LBL_PUBLISHED_POPUP_HELP" module='PdfManager'}{/capture}
                            {sugar_help text=$popupText WIDTH=-1}
            
		</td>
				{counter name="fieldsUsed"}
		
						    
		    				<td valign="top" width='37.5%' >
			
		
		            {if $fields.published.acl > 1 && $fields.published.locked == false && $fields.published.disabled == false}
		
							{counter name="panelFieldCount"}
			    
				

{if !isset($config.enable_autocomplete) || $config.enable_autocomplete==false}
	<select name="{$fields.published.name}" 
	id="{$fields.published.name}" 
	title=''       
	>

	{html_options options=$fields.published.options selected=$fields.published.value}
	</select>
{else}
	{assign var="field_options" value=$fields.published.options }
	{capture name="field_val"}{$fields.published.value}{/capture}
	{assign var="field_val" value=$smarty.capture.field_val}
	{capture name="ac_key"}{$fields.published.name}{/capture}
	{assign var="ac_key" value=$smarty.capture.ac_key}

			<select style='display:none' name="{$fields.published.name}" 
		id="{$fields.published.name}" 
		title=''          
		>

		{html_options options=$fields.published.options selected=$fields.published.value}
		</select>
	
	<input
		id="{$fields.published.name}-input"
		name="{$fields.published.name}-input"
		size="30"
		value="{$field_val|lookup:$field_options}"
		type="text" style="vertical-align: top;">

		
	<span class="id-ff multiple">
	    <button type="button"><img src="{sugar_getimagepath file="id-ff-down.png"}" id="{$fields.published.name}-image"></button><button type="button"
	        id="btn-clear-{$fields.published.name}-input"
	        title="Clear"
	        onclick="SUGAR.clearRelateField(this.form, '{$fields.published.name}-input', '{$fields.published.name}');sync_{$fields.published.name}()"><img src="{sugar_getimagepath file="id-ff-clear.png"}"></button>
	</span>

	<script>
	SUGAR.AutoComplete.{$ac_key} = [];

			(function (){
			var selectElem = document.getElementById("{$fields.published.name}");
			
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

	SUGAR.AutoComplete.{$ac_key}.inputNode = Y.one('#{$fields.published.name}-input');
	SUGAR.AutoComplete.{$ac_key}.inputImage = Y.one('#{$fields.published.name}-image');
	SUGAR.AutoComplete.{$ac_key}.inputHidden = Y.one('#{$fields.published.name}');
	
				function SyncToHidden(selectme){
				var selectElem = document.getElementById("{$fields.published.name}");
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
			sync_{$fields.published.name} = function(){
				SyncToHidden();
			}
			function syncFromHiddenToWidget(){

				var selectElem = document.getElementById("{$fields.published.name}");

				//if select no longer on page, kill timer
				if (selectElem==null || selectElem.options == null)
					return;

				var currentvalue = SUGAR.AutoComplete.{$ac_key}.inputNode.get('value');

				SUGAR.AutoComplete.{$ac_key}.inputNode.simulate('keyup');

				for (i=0;i<selectElem.options.length;i++){

					if (selectElem.options[i].value==selectElem.value && document.activeElement != document.getElementById('{$fields.published.name}-input'))
						SUGAR.AutoComplete.{$ac_key}.inputNode.set('value',selectElem.options[i].innerHTML);
				}
			}

            YAHOO.util.Event.onAvailable("{$fields.published.name}", syncFromHiddenToWidget);

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
			var selectElem = document.getElementById("{$fields.published.name}");
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
				

{if is_string($fields.published.options)}
<input type="hidden" class="sugar_field" id="{$fields.published.name}" value="{$fields.published.options}">
{$fields.published.options}
{else}
<input type="hidden" class="sugar_field" id="{$fields.published.name}" value="{$fields.published.value}">
    {assign var="field_options" value=$fields.published.options }
    {assign var="field_val" value=$fields.published.value }
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

	

		
        

	
	

				
    			{if $fields.field.acl > 1 || ($showDetailData && $fields.field.acl > 0)}
	
				<td valign="top" id='field_label' width='12.5%' scope="col">
						   {capture name="label" assign="label"}{sugar_translate label='LBL_FIELD' module='PdfManager'}{/capture}
			   {$label|strip_semicolon}:
										
                                                            {if $fields.field.locked == true}
                {$lockedIcon}
            {/if}
                                                      {capture name="popupText" assign="popupText"}{sugar_translate label="LBL_FIELD_POPUP_HELP" module='PdfManager'}{/capture}
                            {sugar_help text=$popupText WIDTH=-1}
            
		</td>
				{counter name="fieldsUsed"}
		
						    
		    				<td valign="top" width='37.5%' colspan='3'>
			
		
		            {if $fields.field.acl > 1 && $fields.field.locked == false && $fields.field.disabled == false}
		
							{counter name="panelFieldCount"}
				{include file="modules/PdfManager/tpls/getFields.tpl"}
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

	

		
        

	
	

				
    			{if $fields.body_html.acl > 1 || ($showDetailData && $fields.body_html.acl > 0)}
	
				<td valign="top" id='body_html_label' width='12.5%' scope="col">
						   {capture name="label" assign="label"}{sugar_translate label='LBL_BODY_HTML' module='PdfManager'}{/capture}
			   {$label|strip_semicolon}:
										
                                                            {if $fields.body_html.locked == true}
                {$lockedIcon}
            {/if}
                                                      {capture name="popupText" assign="popupText"}{sugar_translate label="LBL_BODY_HTML_POPUP_HELP" module='PdfManager'}{/capture}
                            {sugar_help text=$popupText WIDTH=-1}
            
		</td>
				{counter name="fieldsUsed"}
		
						    
		    				<td valign="top" width='37.5%' colspan='3'>
			
		
		            {if $fields.body_html.acl > 1 && $fields.body_html.locked == false && $fields.body_html.disabled == false}
		
							{counter name="panelFieldCount"}
			    
				
{if empty($fields.body_html.value)}
{assign var="value" value=$fields.body_html.default_value }
{else}
{assign var="value" value=$fields.body_html.value }
{/if}  


<textarea  id='{$fields.body_html.name}' name='{$fields.body_html.name}'
rows="4" 
cols="20" 
title='' tabindex="0" 
 >{$value}</textarea>

									{else}
						    
			    {counter name="panelFieldCount"}
				
<span class="sugar_field" id="{$fields.body_html.name|escape:'html'|url2html|nl2br}">{$fields.body_html.value|escape:'htmlentitydecode'|escape:'html'|url2html|nl2br}</span>

				    
				
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

	

		
        

	
	

	
    			{if $fields.header_title.acl > 1 || ($showDetailData && $fields.header_title.acl > 0)}
	
				<td valign="top" id='header_title_label' width='12.5%' scope="col">
						   {capture name="label" assign="label"}{sugar_translate label='LBL_HEADER_TITLE' module='PdfManager'}{/capture}
			   {$label|strip_semicolon}:
										
                                                            {if $fields.header_title.locked == true}
                {$lockedIcon}
            {/if}
                        
		</td>
				{counter name="fieldsUsed"}
		
						    
		    				<td valign="top" width='37.5%' >
			
		
		            {if $fields.header_title.acl > 1 && $fields.header_title.locked == false && $fields.header_title.disabled == false}
		
							{counter name="panelFieldCount"}
			    
				
{if strlen($fields.header_title.value) <= 0}
{assign var="value" value=$fields.header_title.default_value }
{else}
{assign var="value" value=$fields.header_title.value }
{/if}  
<input type='text' name='{$fields.header_title.name}' 
    id='{$fields.header_title.name}' size='30' 
    maxlength='255' 
    value='{$value}' title='&#x48;&#x65;&#x61;&#x64;&#x65;&#x72;&#x20;&#x74;&#x69;&#x74;&#x6C;&#x65;'      >
									{else}
						    
			    {counter name="panelFieldCount"}
				
{if strlen($fields.header_title.value) <= 0}
{assign var="value" value=$fields.header_title.default_value }
{else}
{assign var="value" value=$fields.header_title.value }
{/if} 
<span class="sugar_field" id="{$fields.header_title.name}">{$fields.header_title.value}</span>

				    
				
		{/if}

		{else}

		  <td></td><td></td>

	{/if}

		    
	
	

				
    			{if $fields.header_text.acl > 1 || ($showDetailData && $fields.header_text.acl > 0)}
	
				<td valign="top" id='header_text_label' width='12.5%' scope="col">
						   {capture name="label" assign="label"}{sugar_translate label='LBL_HEADER_TEXT' module='PdfManager'}{/capture}
			   {$label|strip_semicolon}:
										
                                                            {if $fields.header_text.locked == true}
                {$lockedIcon}
            {/if}
                        
		</td>
				{counter name="fieldsUsed"}
		
						    
		    				<td valign="top" width='37.5%' >
			
		
		            {if $fields.header_text.acl > 1 && $fields.header_text.locked == false && $fields.header_text.disabled == false}
		
							{counter name="panelFieldCount"}
			    
				
{if strlen($fields.header_text.value) <= 0}
{assign var="value" value=$fields.header_text.default_value }
{else}
{assign var="value" value=$fields.header_text.value }
{/if}  
<input type='text' name='{$fields.header_text.name}' 
    id='{$fields.header_text.name}' size='30' 
    maxlength='255' 
    value='{$value}' title='&#x48;&#x65;&#x61;&#x64;&#x65;&#x72;&#x20;&#x74;&#x65;&#x78;&#x74;'      >
									{else}
						    
			    {counter name="panelFieldCount"}
				
{if strlen($fields.header_text.value) <= 0}
{assign var="value" value=$fields.header_text.default_value }
{else}
{assign var="value" value=$fields.header_text.value }
{/if} 
<span class="sugar_field" id="{$fields.header_text.name}">{$fields.header_text.value}</span>

				    
				
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

	

		
        

	
	

	
    			{if $fields.header_logo.acl > 1 || ($showDetailData && $fields.header_logo.acl > 0)}
	
				<td valign="top" id='header_logo_label' width='12.5%' scope="col">
						   {capture name="label" assign="label"}{sugar_translate label='LBL_HEADER_LOGO_FILE' module='PdfManager'}{/capture}
			   {$label|strip_semicolon}:
										
                                                            {if $fields.header_logo.locked == true}
                {$lockedIcon}
            {/if}
                                                      {capture name="popupText" assign="popupText"}{sugar_translate label="LBL_HEADER_LOGO_POPUP_HELP" module='PdfManager'}{/capture}
                            {sugar_help text=$popupText WIDTH=-1}
            
		</td>
				{counter name="fieldsUsed"}
		
						    
		    				<td valign="top" width='37.5%' >
			
		
		            {if $fields.header_logo.acl > 1 && $fields.header_logo.locked == false && $fields.header_logo.disabled == false}
		
							{counter name="panelFieldCount"}
			    
				
<script type="text/javascript" src='include/SugarFields/Fields/File/SugarFieldFile.js?v=nCHLtjCudXW7t33TaQjTyw'></script>

{if !empty($fields.header_logo.value) }
    {assign var=showRemove value=true}
{else}
    {assign var=showRemove value=false}
{/if}

    {assign var=noChange value=false}

<input type="hidden" name="deleteAttachment" value="0">
<input type="hidden" name="{$fields.header_logo.name}" id="{$fields.header_logo.name}" value="{$fields.header_logo.value}">
<span id="{$fields.header_logo.name}_old" style="display:{if !$showRemove}none;{/if}">
  <a href="index.php?entryPoint=download&id={$fields.id.value}&type={$module}" class="tabDetailViewDFLink" target="_blank">{$fields.header_logo.value}</a>

{if !$noChange}
<input type='button' class='button' id='remove_button' value='{$APP.LBL_REMOVE}' onclick='SUGAR.field.file.deleteAttachment("{$fields.header_logo.name}","",this);'>
{/if}
</span>
{if !$noChange}
<span id="{$fields.header_logo.name}_new" style="display:{if $showRemove}none;{/if}">
<input type="hidden" name="{$fields.header_logo.name}_escaped">
<input id="{$fields.header_logo.name}_file" name="{$fields.header_logo.name}_file" 
type="file" title='&#x50;&#x44;&#x46;&#x20;&#x68;&#x65;&#x61;&#x64;&#x65;&#x72;&#x20;&#x6C;&#x6F;&#x67;&#x6F;' size="30"
 
    maxlength='255'
>

{else}



{/if}


</span>
									{else}
						    
			    {counter name="panelFieldCount"}
				
<span class="sugar_field" id="{$fields.header_logo.name}">
<a href="index.php?entryPoint=download&id={$fields.id.value}&type={$module}" class="tabDetailViewDFLink" target='_blank'>{$fields.header_logo.value}</a>
</span>

				    
				
		{/if}

		{else}

		  <td></td><td></td>

	{/if}

		    
	
	

				
    			{if $fields.footer_text.acl > 1 || ($showDetailData && $fields.footer_text.acl > 0)}
	
				<td valign="top" id='footer_text_label' width='12.5%' scope="col">
						   {capture name="label" assign="label"}{sugar_translate label='LBL_FOOTER_TEXT' module='PdfManager'}{/capture}
			   {$label|strip_semicolon}:
										
                                                            {if $fields.footer_text.locked == true}
                {$lockedIcon}
            {/if}
                        
		</td>
				{counter name="fieldsUsed"}
		
						    
		    				<td valign="top" width='37.5%' >
			
		
		            {if $fields.footer_text.acl > 1 && $fields.footer_text.locked == false && $fields.footer_text.disabled == false}
		
							{counter name="panelFieldCount"}
			    
				
{if strlen($fields.footer_text.value) <= 0}
{assign var="value" value=$fields.footer_text.default_value }
{else}
{assign var="value" value=$fields.footer_text.value }
{/if}  
<input type='text' name='{$fields.footer_text.name}' 
    id='{$fields.footer_text.name}' size='30' 
    maxlength='255' 
    value='{$value}' title='&#x46;&#x6F;&#x6F;&#x74;&#x65;&#x72;&#x20;&#x74;&#x65;&#x78;&#x74;'      >
									{else}
						    
			    {counter name="panelFieldCount"}
				
{if strlen($fields.footer_text.value) <= 0}
{assign var="value" value=$fields.footer_text.default_value }
{else}
{assign var="value" value=$fields.footer_text.value }
{/if} 
<span class="sugar_field" id="{$fields.footer_text.name}">{$fields.footer_text.value}</span>

				    
				
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
  {sugar_translate label='LBL_EDITVIEW_PANEL1' module='PdfManager'}
              <script>
      document.getElementById('detailpanel_2').className += ' expanded';
    </script>
  </h4>
 <table width="100%" border="0" cellspacing="1" cellpadding="0"  id='LBL_EDITVIEW_PANEL1'  class="yui3-skin-sam edit view panelContainer">


{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{capture name="tr" assign="tableRow"}
<tr>

	

		
        

	
	

	
    			{if $fields.author.acl > 1 || ($showDetailData && $fields.author.acl > 0)}
	
				<td valign="top" id='author_label' width='12.5%' scope="col">
						   {capture name="label" assign="label"}{sugar_translate label='LBL_AUTHOR' module='PdfManager'}{/capture}
			   {$label|strip_semicolon}:
													    <span class="required">*</span>
			
                                                            {if $fields.author.locked == true}
                {$lockedIcon}
            {/if}
                        
		</td>
				{counter name="fieldsUsed"}
		
						    
		    				<td valign="top" width='37.5%' >
			
		
		            {if $fields.author.acl > 1 && $fields.author.locked == false && $fields.author.disabled == false}
		
							{counter name="panelFieldCount"}
			    
				
{if strlen($fields.author.value) <= 0}
{assign var="value" value=$fields.author.default_value }
{else}
{assign var="value" value=$fields.author.value }
{/if}  
<input type='text' name='{$fields.author.name}' 
    id='{$fields.author.name}' size='30' 
    maxlength='255' 
    value='{$value}' title=''      >
									{else}
						    
			    {counter name="panelFieldCount"}
				
{if strlen($fields.author.value) <= 0}
{assign var="value" value=$fields.author.default_value }
{else}
{assign var="value" value=$fields.author.value }
{/if} 
<span class="sugar_field" id="{$fields.author.name}">{$fields.author.value}</span>

				    
				
		{/if}

		{else}

		  <td></td><td></td>

	{/if}

		    
	
	

				
    			{if $fields.title.acl > 1 || ($showDetailData && $fields.title.acl > 0)}
	
				<td valign="top" id='title_label' width='12.5%' scope="col">
						   {capture name="label" assign="label"}{sugar_translate label='LBL_TITLE' module='PdfManager'}{/capture}
			   {$label|strip_semicolon}:
										
                                                            {if $fields.title.locked == true}
                {$lockedIcon}
            {/if}
                        
		</td>
				{counter name="fieldsUsed"}
		
						    
		    				<td valign="top" width='37.5%' >
			
		
		            {if $fields.title.acl > 1 && $fields.title.locked == false && $fields.title.disabled == false}
		
							{counter name="panelFieldCount"}
			    
				
{if strlen($fields.title.value) <= 0}
{assign var="value" value=$fields.title.default_value }
{else}
{assign var="value" value=$fields.title.value }
{/if}  
<input type='text' name='{$fields.title.name}' 
    id='{$fields.title.name}' size='30' 
    maxlength='255' 
    value='{$value}' title=''      >
									{else}
						    
			    {counter name="panelFieldCount"}
				
{if strlen($fields.title.value) <= 0}
{assign var="value" value=$fields.title.default_value }
{else}
{assign var="value" value=$fields.title.value }
{/if} 
<span class="sugar_field" id="{$fields.title.name}">{$fields.title.value}</span>

				    
				
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

	

		
        

	
	

	
    			{if $fields.subject.acl > 1 || ($showDetailData && $fields.subject.acl > 0)}
	
				<td valign="top" id='subject_label' width='12.5%' scope="col">
						   {capture name="label" assign="label"}{sugar_translate label='LBL_SUBJECT' module='PdfManager'}{/capture}
			   {$label|strip_semicolon}:
										
                                                            {if $fields.subject.locked == true}
                {$lockedIcon}
            {/if}
                        
		</td>
				{counter name="fieldsUsed"}
		
						    
		    				<td valign="top" width='37.5%' >
			
		
		            {if $fields.subject.acl > 1 && $fields.subject.locked == false && $fields.subject.disabled == false}
		
							{counter name="panelFieldCount"}
			    
				
{if strlen($fields.subject.value) <= 0}
{assign var="value" value=$fields.subject.default_value }
{else}
{assign var="value" value=$fields.subject.value }
{/if}  
<input type='text' name='{$fields.subject.name}' 
    id='{$fields.subject.name}' size='30' 
    maxlength='255' 
    value='{$value}' title=''      >
									{else}
						    
			    {counter name="panelFieldCount"}
				
{if strlen($fields.subject.value) <= 0}
{assign var="value" value=$fields.subject.default_value }
{else}
{assign var="value" value=$fields.subject.value }
{/if} 
<span class="sugar_field" id="{$fields.subject.name}">{$fields.subject.value}</span>

				    
				
		{/if}

		{else}

		  <td></td><td></td>

	{/if}

		    
	
	

				
    			{if $fields.keywords.acl > 1 || ($showDetailData && $fields.keywords.acl > 0)}
	
				<td valign="top" id='keywords_label' width='12.5%' scope="col">
						   {capture name="label" assign="label"}{sugar_translate label='LBL_KEYWORDS' module='PdfManager'}{/capture}
			   {$label|strip_semicolon}:
										
                                                            {if $fields.keywords.locked == true}
                {$lockedIcon}
            {/if}
                                                      {capture name="popupText" assign="popupText"}{sugar_translate label="LBL_KEYWORDS_POPUP_HELP" module='PdfManager'}{/capture}
                            {sugar_help text=$popupText WIDTH=-1}
            
		</td>
				{counter name="fieldsUsed"}
		
						    
		    				<td valign="top" width='37.5%' >
			
		
		            {if $fields.keywords.acl > 1 && $fields.keywords.locked == false && $fields.keywords.disabled == false}
		
							{counter name="panelFieldCount"}
			    
				
{if strlen($fields.keywords.value) <= 0}
{assign var="value" value=$fields.keywords.default_value }
{else}
{assign var="value" value=$fields.keywords.value }
{/if}  
<input type='text' name='{$fields.keywords.name}' 
    id='{$fields.keywords.name}' size='30' 
    maxlength='255' 
    value='{$value}' title=''      >
									{else}
						    
			    {counter name="panelFieldCount"}
				
{if strlen($fields.keywords.value) <= 0}
{assign var="value" value=$fields.keywords.default_value }
{else}
{assign var="value" value=$fields.keywords.value }
{/if} 
<span class="sugar_field" id="{$fields.keywords.name}">{$fields.keywords.value}</span>

				    
				
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

<script>document.getElementById("LBL_EDITVIEW_PANEL1").style.display='none';</script>
{/if}
</div></div>

{$tiny_script}{*
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
addForm('EditView');addToValidate('EditView', 'name', 'name', true,'{/literal}{sugar_translate label='LBL_NAME' module='PdfManager' for_js=true}{literal}' );
addToValidate('EditView', 'date_entered_date', 'date', false,'Date Created' );
addToValidate('EditView', 'date_modified_date', 'date', false,'Date Modified' );
addToValidate('EditView', 'modified_user_id', 'assigned_user_name', false,'{/literal}{sugar_translate label='LBL_MODIFIED' module='PdfManager' for_js=true}{literal}' );
addToValidate('EditView', 'modified_by_name', 'relate', false,'{/literal}{sugar_translate label='LBL_MODIFIED' module='PdfManager' for_js=true}{literal}' );
addToValidate('EditView', 'created_by', 'assigned_user_name', false,'{/literal}{sugar_translate label='LBL_CREATED' module='PdfManager' for_js=true}{literal}' );
addToValidate('EditView', 'created_by_name', 'relate', false,'{/literal}{sugar_translate label='LBL_CREATED' module='PdfManager' for_js=true}{literal}' );
addToValidate('EditView', 'description', 'text', false,'{/literal}{sugar_translate label='LBL_DESCRIPTION' module='PdfManager' for_js=true}{literal}' );
addToValidate('EditView', 'deleted', 'bool', false,'{/literal}{sugar_translate label='LBL_DELETED' module='PdfManager' for_js=true}{literal}' );
addToValidate('EditView', 'base_module', 'enum', true,'{/literal}{sugar_translate label='LBL_BASE_MODULE' module='PdfManager' for_js=true}{literal}' );
addToValidate('EditView', 'published', 'enum', false,'{/literal}{sugar_translate label='LBL_PUBLISHED' module='PdfManager' for_js=true}{literal}' );
addToValidate('EditView', 'field', 'enum', false,'{/literal}{sugar_translate label='LBL_FIELD' module='PdfManager' for_js=true}{literal}' );
addToValidate('EditView', 'body_html', 'text', false,'{/literal}{sugar_translate label='LBL_BODY_HTML' module='PdfManager' for_js=true}{literal}' );
addToValidate('EditView', 'template_name', 'varchar', false,'{/literal}{sugar_translate label='LBL_TEMPLATE_NAME' module='PdfManager' for_js=true}{literal}' );
addToValidate('EditView', 'author', 'varchar', true,'{/literal}{sugar_translate label='LBL_AUTHOR' module='PdfManager' for_js=true}{literal}' );
addToValidate('EditView', 'title', 'varchar', false,'{/literal}{sugar_translate label='LBL_TITLE' module='PdfManager' for_js=true}{literal}' );
addToValidate('EditView', 'subject', 'varchar', false,'{/literal}{sugar_translate label='LBL_SUBJECT' module='PdfManager' for_js=true}{literal}' );
addToValidate('EditView', 'keywords', 'varchar', false,'{/literal}{sugar_translate label='LBL_KEYWORDS' module='PdfManager' for_js=true}{literal}' );
addToValidate('EditView', 'header_title', 'varchar', false,'{/literal}{sugar_translate label='LBL_HEADER_TITLE' module='PdfManager' for_js=true}{literal}' );
addToValidate('EditView', 'header_text', 'varchar', false,'{/literal}{sugar_translate label='LBL_HEADER_TEXT' module='PdfManager' for_js=true}{literal}' );
addToValidate('EditView', 'header_logo', 'file', false,'{/literal}{sugar_translate label='LBL_HEADER_LOGO_FILE' module='PdfManager' for_js=true}{literal}' );
addToValidate('EditView', 'footer_text', 'varchar', false,'{/literal}{sugar_translate label='LBL_FOOTER_TEXT' module='PdfManager' for_js=true}{literal}' );
addToValidate('EditView', 'following', 'bool', false,'{/literal}{sugar_translate label='LBL_FOLLOWING' module='PdfManager' for_js=true}{literal}' );
addToValidate('EditView', 'my_favorite', 'bool', false,'{/literal}{sugar_translate label='LBL_FAVORITE' module='PdfManager' for_js=true}{literal}' );
addToValidate('EditView', 'commentlog', 'collection', false,'{/literal}{sugar_translate label='LBL_COMMENTLOG' module='PdfManager' for_js=true}{literal}' );
addToValidate('EditView', 'locked_fields', 'locked_fields', false,'{/literal}{sugar_translate label='LBL_LOCKED_FIELDS' module='PdfManager' for_js=true}{literal}' );
addToValidate('EditView', 'sync_key', 'varchar', false,'{/literal}{sugar_translate label='LBL_SYNC_KEY' module='PdfManager' for_js=true}{literal}' );
addToValidate('EditView', 'team_id', 'team_list', false,'{/literal}{sugar_translate label='LBL_TEAM_ID' module='PdfManager' for_js=true}{literal}' );
addToValidate('EditView', 'team_set_id', 'id', false,'{/literal}{sugar_translate label='LBL_TEAM_SET_ID' module='PdfManager' for_js=true}{literal}' );
addToValidate('EditView', 'acl_team_set_id', 'id', false,'{/literal}{sugar_translate label='LBL_TEAM_SET_SELECTED_ID' module='PdfManager' for_js=true}{literal}' );
addToValidate('EditView', 'team_count', 'relate', true,'{/literal}{sugar_translate label='LBL_TEAMS' module='PdfManager' for_js=true}{literal}' );
addToValidate('EditView', 'team_name', 'teamset', true,'{/literal}{sugar_translate label='LBL_TEAMS' module='PdfManager' for_js=true}{literal}' );
addToValidate('EditView', 'acl_team_names', 'teamset', false,'{/literal}{sugar_translate label='LBL_TEAM_SET_SELECTED_TEAMS' module='PdfManager' for_js=true}{literal}' );
addToValidate('EditView', 'assigned_user_id', 'id', false,'{/literal}{sugar_translate label='LBL_ASSIGNED_TO_ID' module='PdfManager' for_js=true}{literal}' );
addToValidate('EditView', 'assigned_user_name', 'relate', false,'{/literal}{sugar_translate label='LBL_ASSIGNED_TO' module='PdfManager' for_js=true}{literal}' );
addToValidateBinaryDependency('EditView', 'assigned_user_name', 'alpha', false,'{/literal}{sugar_translate label='ERR_SQS_NO_MATCH_FIELD' module='PdfManager' for_js=true}{literal}: {/literal}{sugar_translate label='LBL_ASSIGNED_TO' module='PdfManager' for_js=true}{literal}', 'assigned_user_id' );
</script><script language="javascript">if(typeof sqs_objects == 'undefined'){var sqs_objects = new Array;}sqs_objects['EditView_team_name']={"form":"EditView","method":"query","modules":["Teams"],"group":"or","field_list":["name","id"],"populate_list":["team_name","team_id"],"required_list":["team_id"],"conditions":[{"name":"name","op":"like_custom","end":"%","value":""},{"name":"name","op":"like_custom","begin":"(","end":"%","value":""}],"order":"name","limit":"30","no_match_text":"No Match"};</script><script type=text/javascript>
SUGAR.util.doWhen('!SUGAR.util.ajaxCallInProgress()', function(){
SUGAR.forms.AssignmentHandler.registerView('EditView');
SUGAR.forms.AssignmentHandler.LINKS['EditView'] = {"created_by_link":{"relationship":"pdfmanager_created_by","module":"Users","id_name":"created_by"},"modified_user_link":{"relationship":"pdfmanager_modified_user","module":"Users","id_name":"modified_user_id"},"activities":{"relationship":"pdfmanager_activities","module":"Activities"},"following_link":{"relationship":"pdfmanager_following"},"favorite_link":{"relationship":"pdfmanager_favorite"},"commentlog_link":{"relationship":"pdfmanager_commentlog"},"locked_fields_link":{"relationship":"pdfmanager_locked_fields"},"assigned_user_link":{"relationship":"pdfmanager_assigned_user","module":"Users","id_name":"assigned_user_id"}}
var PdfManagerEditView_read_only_base_module_editiondep = new SUGAR.forms.Dependency(new SUGAR.forms.Trigger(['id'], 'true'), [new SUGAR.forms.ReadOnlyAction('base_module','not(equal($record, ""))')],[],true,'EditView');

YAHOO.util.Event.onContentReady('EditView', SUGAR.forms.AssignmentHandler.loadComplete);});</script>{/literal}
