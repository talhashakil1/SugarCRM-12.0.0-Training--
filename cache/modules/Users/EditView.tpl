




{$ROLLOVER}
<script type="text/javascript" src="{sugar_getjspath file='cache/include/javascript/sugar_grp_emails.js'}"></script>
<link rel="stylesheet" type="text/css" href="{sugar_getjspath file='modules/Users/PasswordRequirementBox.css'}">
<script type="text/javascript" src="{sugar_getjspath file='cache/include/javascript/sugar_grp_yui_widgets.js'}"></script>
<script type='text/javascript' src='{sugar_getjspath file='include/SubPanel/SubPanelTiles.js'}'></script>
<script type='text/javascript'>
var ERR_RULES_NOT_MET = '{$MOD.ERR_RULES_NOT_MET}';
var ERR_ENTER_OLD_PASSWORD = '{$MOD.ERR_ENTER_OLD_PASSWORD}';
var ERR_ENTER_NEW_PASSWORD = '{$MOD.ERR_ENTER_NEW_PASSWORD}';
var ERR_ENTER_CONFIRMATION_PASSWORD = '{$MOD.ERR_ENTER_CONFIRMATION_PASSWORD}';
var ERR_REENTER_PASSWORDS = '{$MOD.ERR_REENTER_PASSWORDS}';
</script>
<script type='text/javascript' src='{sugar_getjspath file='modules/Users/User.js'}'></script>
<script type='text/javascript' src='{sugar_getjspath file='modules/Users/UserEditView.js'}'></script>
<script type='text/javascript' src='{sugar_getjspath file='modules/Users/PasswordRequirementBox.js'}'></script>
{$ERROR_STRING}
<span id="ajax_error_string" class="error"></span>

<form name="EditView" enctype="multipart/form-data" id="EditView" method="POST" action="index.php">
{sugar_csrf_form_token}
	<input type="hidden" name="display_tabs_def">
	<input type="hidden" name="hide_tabs_def">
	<input type="hidden" name="remove_tabs_def">
	<input type="hidden" name="module" value="Users">
	<input type="hidden" name="record" id="record" value="{$ID}">
	<input type="hidden" name="action">
	<input type="hidden" name="page" value="EditView">
	<input type="hidden" name="return_module" value="{$RETURN_MODULE}">
	<input type="hidden" name="return_id" value="{$RETURN_ID}">
	<input type="hidden" name="return_action" value="{$RETURN_ACTION}">
	<input type="hidden" name="password_change" id="password_change" value="false">
    <input type="hidden" name="required_password" id="required_password" value='{$REQUIRED_PASSWORD}' >
	<input type="hidden" name="old_user_name" value="{$USER_NAME}">
	<input type="hidden" name="type" value="{$REDIRECT_EMAILS_TYPE|escape:'html':'UTF-8'}">
	<input type="hidden" id="is_group" name="is_group" value='{$IS_GROUP}' {$IS_GROUP_DISABLED}>
	<input type="hidden" id='portal_only' name='portal_only' value='{$IS_PORTALONLY}' {$IS_PORTAL_ONLY_DISABLED}>
	<input type="hidden" name="is_admin" id="is_admin" value='{$IS_FOCUS_ADMIN}' {$IS_ADMIN_DISABLED} >
	<input type="hidden" name="is_current_admin" id="is_current_admin" value='{$IS_ADMIN}' >
	<input type="hidden" name="edit_self" id="edit_self" value='{$EDIT_SELF}' >
	<input type="hidden" name="required_email_address" id="required_email_address" value='{$REQUIRED_EMAIL_ADDRESS}' >
    <input type="hidden" name="isDuplicate" id="isDuplicate" value="{$isDuplicate}">
	<div id="popup_window"></div>

<script type="text/javascript">
{if $SHOW_NON_EDITABLE_FIELDS_ALERT}
        app.alert.show('non_editable_user_fields', {
            level: 'info',
            messages: '{$NON_EDITABLE_FIELDS_MSG}',
            autoClose: false
        });
{/if}

var EditView_tabs = new YAHOO.widget.TabView("EditView_tabs");

//Override so we do not force submit, just simulate the 'save button' click
SUGAR.EmailAddressWidget.prototype.forceSubmit = function() { document.getElementById('Save').click();}

EditView_tabs.on('contentReady', function(e){
{if $ID}
    var eapmTabIndex = 4;
    {if !$SHOW_THEMES}eapmTabIndex = 3;{/if}
    EditView_tabs.getTab(eapmTabIndex).set('dataSrc','index.php?sugar_body_only=1&module=Users&subpanel=eapm&action=SubPanelViewer&inline=1&record={$ID}&layout_def_key=UserEAPM&inline=1&ajaxSubpanel=true');
    EditView_tabs.getTab(eapmTabIndex).set('cacheData',true);
    EditView_tabs.getTab(eapmTabIndex).on('dataLoadedChange',function(){
        //reinit action menus
        $("ul.clickMenu").each(function(index, node){
            $(node).sugarActionMenu();
        });
    });

    if ( document.location.hash == '#tab5' ) {
        EditView_tabs.selectTab(eapmTabIndex);
    }

{/if}
{if $EDIT_SELF && $SHOW_DOWNLOADS_TAB}

    EditView_tabs.addTab( new YAHOO.widget.Tab({
        label: '{$MOD.LBL_DOWNLOADS}',
        dataSrc: 'index.php?to_pdf=1&module=Home&action=pluginList',
        content: '<div style="text-align:center; width: 100%">{sugar_image name="loading"}</div>',
        cacheData: true
    }));
    EditView_tabs.getTab(5).getElementsByTagName('a')[0].id = 'tab6';

{/if}
{if $scroll_to_cal}
    
        //we are coming from the tour welcome page, so we need to simulate a click on the 4th tab
        // and scroll to the calendar_options div after the tabs have rendered
        document.getElementById('tab4').click();
        document.getElementById('calendar_options').scrollIntoView();
    
{/if}

});
</script>

<table width="100%" cellpadding="0" cellspacing="0" border="0" class="actionsContainer">
    <tr>
        <td>
            {sugar_action_menu id="userEditActions" class="clickMenu fancymenu" buttons=$ACTION_BUTTON_HEADER flat=true}
        </td>
        <td align="right" nowrap>
            <span class="required">{$APP.LBL_REQUIRED_SYMBOL}</span> {$APP.NTC_REQUIRED}
        </td>
    </tr>
</table>

<div id="EditView_tabs" class="yui-navset">
    <ul class="yui-nav">
        <li class="selected"><a id="tab1" href="#tab1"><em>{$MOD.LBL_USER_INFORMATION}</em></a></li>
        <li {if $CHANGE_PWD == 0}style='display:none'{/if}><a id="tab2" href="#tab2"><em>{$MOD.LBL_CHANGE_PASSWORD_TITLE}</em></a></li>
        {if $SHOW_THEMES}
        <li><a id="tab3" href="#tab3" style='display:{$HIDE_FOR_GROUP_AND_PORTAL};'><em>{$MOD.LBL_THEME}</em></a></li>
        {/if}
        <li><a id="tab4" href="#tab4" style='display:{$HIDE_FOR_GROUP_AND_PORTAL};'><em>{$MOD.LBL_ADVANCED}</em></a></li>
        {if $ID}
        <li><a id="tab5" href="#tab5" style='display:{$HIDE_FOR_GROUP_AND_PORTAL};'><em>{$MOD.LBL_EAPM_SUBPANEL_TITLE}</em></a></li>
        {/if}
    </ul>
    <div class="yui-content">
        <div>
<!-- BEGIN METADATA GENERATED CONTENT -->
{sugar_include include=$includes}

<span id='tabcounterJS'><script>SUGAR.TabFields=new Array();//this will be used to track tabindexes for references</script></span>

<div id="EditView_tabs"
>
        <div >




  
  <div id="detailpanel_1" class="{$def.templateMeta.panelClass|default:'edit view edit508'}">

{counter name="panelFieldCount" start=0 print=false assign="panelFieldCount"}

<h4>&nbsp;&nbsp;
  <a href="javascript:void(0)" class="collapseLink" onclick="collapsePanel(1);">
  <img border="0" id="detailpanel_1_img_hide" src="{sugar_getimagepath file="basic_search.gif"}"></a>
  <a href="javascript:void(0)" class="expandLink" onclick="expandPanel(1);">
  <img border="0" id="detailpanel_1_img_show" src="{sugar_getimagepath file="advanced_search.gif"}"></a>
  {sugar_translate label='LBL_USER_INFORMATION' module='Users'}
              <script>
      document.getElementById('detailpanel_1').className += ' expanded';
    </script>
  </h4>
 <table width="100%" border="0" cellspacing="1" cellpadding="0"  id='LBL_USER_INFORMATION'  class="yui3-skin-sam edit view panelContainer">


{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{capture name="tr" assign="tableRow"}
<tr>

	

		
        

	
	

	
    			{if $fields.user_name.acl > 1 || ($showDetailData && $fields.user_name.acl > 0)}
	
				<td valign="top" id='user_name_label' width='12.5%' scope="col">
						   {capture name="label" assign="label"}{sugar_translate label='LBL_USER_NAME' module='Users'}{/capture}
			   {$label|strip_semicolon}:
													    <span class="required">*</span>
			
                                                            {if $fields.user_name.locked == true}
                {$lockedIcon}
            {/if}
                        
		</td>
				{counter name="fieldsUsed"}
		
		 				    
		    				<td valign="top" width='37.5%' >
			
		
		            {if $fields.user_name.acl > 1 && $fields.user_name.locked == false && $fields.user_name.disabled == false}
		
							{counter name="panelFieldCount"}
			    
				
{if strlen($fields.user_name.value) <= 0}
{assign var="value" value=$fields.user_name.default_value }
{else}
{assign var="value" value=$fields.user_name.value }
{/if}  
<input type='text' name='{$fields.user_name.name}' 
    id='{$fields.user_name.name}' size='30' 
    maxlength='60' 
    value='{$value}' title=''      accesskey='7'  >
									{else}
						    
			    {counter name="panelFieldCount"}
				
{if strlen($fields.user_name.value) <= 0}
{assign var="value" value=$fields.user_name.default_value }
{else}
{assign var="value" value=$fields.user_name.value }
{/if} 
<span class="sugar_field" id="{$fields.user_name.name}">{$fields.user_name.value}</span>

				    
				
		{/if}

		{else}

		  <td></td><td></td>

	{/if}

		    
	
	

				
    			{if $fields.first_name.acl > 1 || ($showDetailData && $fields.first_name.acl > 0)}
	
				<td valign="top" id='first_name_label' width='12.5%' scope="col">
						   {capture name="label" assign="label"}{sugar_translate label='LBL_FIRST_NAME' module='Users'}{/capture}
			   {$label|strip_semicolon}:
										
                                                            {if $fields.first_name.locked == true}
                {$lockedIcon}
            {/if}
                        
		</td>
				{counter name="fieldsUsed"}
		
						    
		    				<td valign="top" width='37.5%' >
			
		
		            {if $fields.first_name.acl > 1 && $fields.first_name.locked == false && $fields.first_name.disabled == false}
		
							{counter name="panelFieldCount"}
			    
				
{if strlen($fields.first_name.value) <= 0}
{assign var="value" value=$fields.first_name.default_value }
{else}
{assign var="value" value=$fields.first_name.value }
{/if}  
<input type='text' name='{$fields.first_name.name}' 
    id='{$fields.first_name.name}' size='30' 
    maxlength='30' 
    value='{$value}' title=''      >
									{else}
						    
			    {counter name="panelFieldCount"}
				
{if strlen($fields.first_name.value) <= 0}
{assign var="value" value=$fields.first_name.default_value }
{else}
{assign var="value" value=$fields.first_name.value }
{/if} 
<span class="sugar_field" id="{$fields.first_name.name}">{$fields.first_name.value}</span>

				    
				
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

	

		
        

	
	

	
    			{if $fields.status.acl > 1 || ($showDetailData && $fields.status.acl > 0)}
	
				<td valign="top" id='status_label' width='12.5%' scope="col">
						   {capture name="label" assign="label"}{sugar_translate label='LBL_STATUS' module='Users'}{/capture}
			   {$label|strip_semicolon}:
													    <span class="required">*</span>
			
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

		    
	
	

				
    			{if $fields.last_name.acl > 1 || ($showDetailData && $fields.last_name.acl > 0)}
	
				<td valign="top" id='last_name_label' width='12.5%' scope="col">
						   {capture name="label" assign="label"}{sugar_translate label='LBL_LAST_NAME' module='Users'}{/capture}
			   {$label|strip_semicolon}:
													    <span class="required">*</span>
			
                                                            {if $fields.last_name.locked == true}
                {$lockedIcon}
            {/if}
                        
		</td>
				{counter name="fieldsUsed"}
		
						    
		    				<td valign="top" width='37.5%' >
			
		
		            {if $fields.last_name.acl > 1 && $fields.last_name.locked == false && $fields.last_name.disabled == false}
		
							{counter name="panelFieldCount"}
			    
				
{if strlen($fields.last_name.value) <= 0}
{assign var="value" value=$fields.last_name.default_value }
{else}
{assign var="value" value=$fields.last_name.value }
{/if}  
<input type='text' name='{$fields.last_name.name}' 
    id='{$fields.last_name.name}' size='30' 
    maxlength='30' 
    value='{$value}' title=''      >
									{else}
						    
			    {counter name="panelFieldCount"}
				
{if strlen($fields.last_name.value) <= 0}
{assign var="value" value=$fields.last_name.default_value }
{else}
{assign var="value" value=$fields.last_name.value }
{/if} 
<span class="sugar_field" id="{$fields.last_name.name}">{$fields.last_name.value}</span>

				    
				
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

	

		
        

	
	

	
    			{if $fields.UserType.acl > 1 || ($showDetailData && $fields.UserType.acl > 0)}
	
				<td valign="top" id='UserType_label' width='12.5%' scope="col">
						   {capture name="label" assign="label"}{sugar_translate label='LBL_USER_TYPE' module='Users'}{/capture}
			   {$label|strip_semicolon}:
										
                                                            {if $fields.UserType.locked == true}
                {$lockedIcon}
            {/if}
                        
		</td>
				{counter name="fieldsUsed"}
		
						    
		    				<td valign="top" width='37.5%' >
			
		
		            {if $fields.UserType.acl > 1 && $fields.UserType.locked == false && $fields.UserType.disabled == false}
		
							{counter name="panelFieldCount"}
				{if $IS_ADMIN && !$IDM_MODE_ENABLED}{$USER_TYPE_DROPDOWN}{else}{$USER_TYPE_READONLY}{/if}
									{else}
			                                </td>
				<td></td><td></td>
				    
		</td>		
		{/if}

		{else}

		  <td></td><td></td>

	{/if}

		    
	
	

				
    			{if $fields.license_type.acl > 1 || ($showDetailData && $fields.license_type.acl > 0)}
	
				<td valign="top" id='license_type_label' width='12.5%' scope="col">
						   {capture name="label" assign="label"}{sugar_translate label='LBL_LICENSE_TYPE' module='Users'}{/capture}
			   {$label|strip_semicolon}:
													    <span class="required">*</span>
			
                                                            {if $fields.license_type.locked == true}
                {$lockedIcon}
            {/if}
                        
		</td>
				{counter name="fieldsUsed"}
		
						    
		    				<td valign="top" width='37.5%' >
			
		
		            {if $fields.license_type.acl > 1 && $fields.license_type.locked == false && $fields.license_type.disabled == false}
		
							{counter name="panelFieldCount"}
				{if $IS_ADMIN && !$IDM_MODE_LC_LOCK}{$LICENSE_TYPE_DROPDOWN}{else}{$LICENSE_TYPE_READONLY}{/if}
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

	

		
        

	
	

				
    			{if $fields.picture.acl > 1 || ($showDetailData && $fields.picture.acl > 0)}
	
				<td valign="top" id='picture_label' width='12.5%' scope="col">
						   {capture name="label" assign="label"}{sugar_translate label='LBL_PICTURE_FILE' module='Users'}{/capture}
			   {$label|strip_semicolon}:
										
                                                            {if $fields.picture.locked == true}
                {$lockedIcon}
            {/if}
                        
		</td>
				{counter name="fieldsUsed"}
		
						    
		    				<td valign="top" width='37.5%' colspan='3'>
			
		
		            {if $fields.picture.acl > 1 && $fields.picture.locked == false && $fields.picture.disabled == false}
		
							{counter name="panelFieldCount"}
			    
				
{if empty($fields.picture.value)}
{assign var="value" value=$fields.picture.default_value }
{else}
{assign var="value" value=$fields.picture.value }
{/if}  


{if isset($smarty.request.isDuplicate) && $smarty.request.isDuplicate eq "true"}
<input type="hidden" id="{$fields.picture.name}_duplicate" name="{$fields.picture.name}_duplicate" value="{$value}"/>
{/if}

<input 
	type="file" id="{$fields.picture.name}" name="{$fields.picture.name}" 
	title="" size="30" maxlength="255" value="" tabindex="0"
	onchange="SUGAR.image.confirm_imagefile('{$fields.picture.name}');" 
	class="imageUploader"
	{if !empty($fields.picture.value)  }
	style="display:none"
	{/if}  />

{if empty($fields.picture.value) }
{else}
<a href="javascript:SUGAR.image.lightbox(Dom.get('img_{$fields.picture.name}').src)">
<img
	id="img_{$fields.picture.name}" 
	name="img_{$fields.picture.name}" 	
		   src='index.php?entryPoint=download&id={$fields.picture.value}&type=SugarFieldImage&isTempFile=1'
		style='
		{if "" eq ""}
			border: 0; 
		{else}
			border: 1px solid black; 
		{/if}
		{if "42" eq ""}
			width: auto;
		{else}
			width: 42px;
		{/if}
		{if "42" eq ""}
			height: auto;
		{else}
			height: 42px;
		{/if}
		{if empty($fields.picture.value)} 
		  visibility:hidden;
		{/if}
		'	

></a>
<img
	id="bt_remove_{$fields.picture.name}" 
	name="bt_remvoe_{$fields.picture.name}" 
	alt="{sugar_translate label='LBL_REMOVE'}"
	title="{sugar_translate label='LBL_REMOVE'}"
	src="{sugar_getimagepath file='delete_inline.gif'}"
	onclick="SUGAR.image.remove_upload_imagefile('{$fields.picture.name}');" 	
	/>

<input 
	id="remove_imagefile_{$fields.picture.name}" name="remove_imagefile_{$fields.picture.name}" 
	type="hidden"  value="" />
{/if}
									{else}
						    
			    {counter name="panelFieldCount"}
				
<input type="hidden" class="sugar_field" id="{$fields.picture.name}" value="$fields.picture.value">
{if isset($displayParams.link)}
<a href=''>
{else}
<a href="javascript:SUGAR.image.lightbox(YAHOO.util.Dom.get('img_{$fields.picture.name}').src)">
{/if}
<img
	id="img_{$fields.picture.name}" 
	name="img_{$fields.picture.name}" 
		{if empty($fields.picture.value)}
	   src='' 	
	{else}
	   src='index.php?entryPoint=download&id={$fields.picture.value}&type=SugarFieldImage&isTempFile=1'
	{/if}
		style='
		{if empty($fields.picture.value)}
			display:	none;
		{/if}
		{if "" eq ""}
			border: 0; 
		{else}
			border: 1px solid black; 
		{/if}
		{if "42" eq ""}
			width: auto;
		{else}
			width: 42px;
		{/if}
		{if "42" eq ""}
			height: auto;
		{else}
			height: 42px;
		{/if}
		'		
>
</a>

				    
				
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
<script type="text/javascript">SUGAR.util.doWhen("typeof initPanel == 'function'", function() {ldelim} initPanel(1, 'expanded'); {rdelim}); </script>


</div>
{if $panelFieldCount == 0}

<script>document.getElementById("LBL_USER_INFORMATION").style.display='none';</script>
{/if}

  
  <div id="detailpanel_2" class="{$def.templateMeta.panelClass|default:'edit view edit508'}">

{counter name="panelFieldCount" start=0 print=false assign="panelFieldCount"}

<h4>&nbsp;&nbsp;
  <a href="javascript:void(0)" class="collapseLink" onclick="collapsePanel(2);">
  <img border="0" id="detailpanel_2_img_hide" src="{sugar_getimagepath file="basic_search.gif"}"></a>
  <a href="javascript:void(0)" class="expandLink" onclick="expandPanel(2);">
  <img border="0" id="detailpanel_2_img_show" src="{sugar_getimagepath file="advanced_search.gif"}"></a>
  {sugar_translate label='LBL_EMPLOYEE_INFORMATION' module='Users'}
              <script>
      document.getElementById('detailpanel_2').className += ' expanded';
    </script>
  </h4>
 <table width="100%" border="0" cellspacing="1" cellpadding="0"  id='LBL_EMPLOYEE_INFORMATION'  class="yui3-skin-sam edit view panelContainer">


{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{capture name="tr" assign="tableRow"}
<tr>

	

		
        

	
	

	
    			{if $fields.employee_status.acl > 1 || ($showDetailData && $fields.employee_status.acl > 0)}
	
				<td valign="top" id='employee_status_label' width='12.5%' scope="col">
						   {capture name="label" assign="label"}{sugar_translate label='LBL_EMPLOYEE_STATUS' module='Users'}{/capture}
			   {$label|strip_semicolon}:
										
                                                            {if $fields.employee_status.locked == true}
                {$lockedIcon}
            {/if}
                        
		</td>
				{counter name="fieldsUsed"}
		
						    
		    				<td valign="top" width='37.5%' >
			
		
		            {if $fields.employee_status.acl > 1 && $fields.employee_status.locked == false && $fields.employee_status.disabled == false}
		
							{counter name="panelFieldCount"}
			    
				

{if !isset($config.enable_autocomplete) || $config.enable_autocomplete==false}
	<select name="{$fields.employee_status.name}" 
	id="{$fields.employee_status.name}" 
	title=''       
	>

	{html_options options=$fields.employee_status.options selected=$fields.employee_status.value}
	</select>
{else}
	{assign var="field_options" value=$fields.employee_status.options }
	{capture name="field_val"}{$fields.employee_status.value}{/capture}
	{assign var="field_val" value=$smarty.capture.field_val}
	{capture name="ac_key"}{$fields.employee_status.name}{/capture}
	{assign var="ac_key" value=$smarty.capture.ac_key}

			<select style='display:none' name="{$fields.employee_status.name}" 
		id="{$fields.employee_status.name}" 
		title=''          
		>

		{html_options options=$fields.employee_status.options selected=$fields.employee_status.value}
		</select>
	
	<input
		id="{$fields.employee_status.name}-input"
		name="{$fields.employee_status.name}-input"
		size="30"
		value="{$field_val|lookup:$field_options}"
		type="text" style="vertical-align: top;">

		
	<span class="id-ff multiple">
	    <button type="button"><img src="{sugar_getimagepath file="id-ff-down.png"}" id="{$fields.employee_status.name}-image"></button><button type="button"
	        id="btn-clear-{$fields.employee_status.name}-input"
	        title="Clear"
	        onclick="SUGAR.clearRelateField(this.form, '{$fields.employee_status.name}-input', '{$fields.employee_status.name}');sync_{$fields.employee_status.name}()"><img src="{sugar_getimagepath file="id-ff-clear.png"}"></button>
	</span>

	<script>
	SUGAR.AutoComplete.{$ac_key} = [];

			(function (){
			var selectElem = document.getElementById("{$fields.employee_status.name}");
			
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

	SUGAR.AutoComplete.{$ac_key}.inputNode = Y.one('#{$fields.employee_status.name}-input');
	SUGAR.AutoComplete.{$ac_key}.inputImage = Y.one('#{$fields.employee_status.name}-image');
	SUGAR.AutoComplete.{$ac_key}.inputHidden = Y.one('#{$fields.employee_status.name}');
	
				function SyncToHidden(selectme){
				var selectElem = document.getElementById("{$fields.employee_status.name}");
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
			sync_{$fields.employee_status.name} = function(){
				SyncToHidden();
			}
			function syncFromHiddenToWidget(){

				var selectElem = document.getElementById("{$fields.employee_status.name}");

				//if select no longer on page, kill timer
				if (selectElem==null || selectElem.options == null)
					return;

				var currentvalue = SUGAR.AutoComplete.{$ac_key}.inputNode.get('value');

				SUGAR.AutoComplete.{$ac_key}.inputNode.simulate('keyup');

				for (i=0;i<selectElem.options.length;i++){

					if (selectElem.options[i].value==selectElem.value && document.activeElement != document.getElementById('{$fields.employee_status.name}-input'))
						SUGAR.AutoComplete.{$ac_key}.inputNode.set('value',selectElem.options[i].innerHTML);
				}
			}

            YAHOO.util.Event.onAvailable("{$fields.employee_status.name}", syncFromHiddenToWidget);

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
			var selectElem = document.getElementById("{$fields.employee_status.name}");
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
				

{if is_string($fields.employee_status.options)}
<input type="hidden" class="sugar_field" id="{$fields.employee_status.name}" value="{$fields.employee_status.options}">
{$fields.employee_status.options}
{else}
<input type="hidden" class="sugar_field" id="{$fields.employee_status.name}" value="{$fields.employee_status.value}">
    {assign var="field_options" value=$fields.employee_status.options }
    {assign var="field_val" value=$fields.employee_status.value }
    {$field_options[$field_val]}
{/if}

				    
				
		{/if}

		{else}

		  <td></td><td></td>

	{/if}

		    
	
	

				
    			{if $fields.show_on_employees.acl > 1 || ($showDetailData && $fields.show_on_employees.acl > 0)}
	
				<td valign="top" id='show_on_employees_label' width='12.5%' scope="col">
						   {capture name="label" assign="label"}{sugar_translate label='LBL_SHOW_ON_EMPLOYEES' module='Users'}{/capture}
			   {$label|strip_semicolon}:
										
                                                            {if $fields.show_on_employees.locked == true}
                {$lockedIcon}
            {/if}
                        
		</td>
				{counter name="fieldsUsed"}
		
						    
		    				<td valign="top" width='37.5%' >
			
		
		            {if $fields.show_on_employees.acl > 1 && $fields.show_on_employees.locked == false && $fields.show_on_employees.disabled == false}
		
							{counter name="panelFieldCount"}
			    
				
{if strval($fields.show_on_employees.value) == "1" || strval($fields.show_on_employees.value) == "yes" || strval($fields.show_on_employees.value) == "on"} 
{assign var="checked" value="CHECKED"}
{else}
{assign var="checked" value=""}
{/if}
<input type="hidden" name="{$fields.show_on_employees.name}" value="0"> 
<input type="checkbox" id="{$fields.show_on_employees.name}" 
name="{$fields.show_on_employees.name}" 
value="1" title='' tabindex="0" {$checked} >

									{else}
						    
			    {counter name="panelFieldCount"}
				
{if strval($fields.show_on_employees.value) == "1" || strval($fields.show_on_employees.value) == "yes" || strval($fields.show_on_employees.value) == "on"} 
{assign var="checked" value="CHECKED"}
{else}
{assign var="checked" value=""}
{/if}
<input type="checkbox" class="checkbox" name="{$fields.show_on_employees.name}" id="{$fields.show_on_employees.name}" value="$fields.show_on_employees.value" disabled="true" {$checked}>

				    
				
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

	

		
        

	
	

	
    			{if $fields.title.acl > 1 || ($showDetailData && $fields.title.acl > 0)}
	
				<td valign="top" id='title_label' width='12.5%' scope="col">
						   {capture name="label" assign="label"}{sugar_translate label='LBL_TITLE' module='Users'}{/capture}
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
    maxlength='50' 
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

		    
	
	

				
    			{if $fields.phone_work.acl > 1 || ($showDetailData && $fields.phone_work.acl > 0)}
	
				<td valign="top" id='phone_work_label' width='12.5%' scope="col">
						   {capture name="label" assign="label"}{sugar_translate label='LBL_WORK_PHONE' module='Users'}{/capture}
			   {$label|strip_semicolon}:
										
                                                            {if $fields.phone_work.locked == true}
                {$lockedIcon}
            {/if}
                        
		</td>
				{counter name="fieldsUsed"}
		
						    
		    				<td valign="top" width='37.5%' >
			
		
		            {if $fields.phone_work.acl > 1 && $fields.phone_work.locked == false && $fields.phone_work.disabled == false}
		
							{counter name="panelFieldCount"}
			    
				

{if strlen($fields.phone_work.value) <= 0}
{assign var="value" value=$fields.phone_work.default_value }
{else}
{assign var="value" value=$fields.phone_work.value }
{/if}  

<input type='text' name='{$fields.phone_work.name}' id='{$fields.phone_work.name}' size='30' maxlength='50' value='{$value}' title='' tabindex='0'	  class="phone" >

									{else}
						    
			    {counter name="panelFieldCount"}
				
{if !empty($fields.phone_work.value)}
{assign var="phone_value" value=$fields.phone_work.value }

{sugar_phone value=$phone_value usa_format="0"}

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

	

		
        

	
	

	
    			{if $fields.department.acl > 1 || ($showDetailData && $fields.department.acl > 0)}
	
				<td valign="top" id='department_label' width='12.5%' scope="col">
						   {capture name="label" assign="label"}{sugar_translate label='LBL_DEPARTMENT' module='Users'}{/capture}
			   {$label|strip_semicolon}:
										
                                                            {if $fields.department.locked == true}
                {$lockedIcon}
            {/if}
                        
		</td>
				{counter name="fieldsUsed"}
		
						    
		    				<td valign="top" width='37.5%' >
			
		
		            {if $fields.department.acl > 1 && $fields.department.locked == false && $fields.department.disabled == false}
		
							{counter name="panelFieldCount"}
			    
				
{if strlen($fields.department.value) <= 0}
{assign var="value" value=$fields.department.default_value }
{else}
{assign var="value" value=$fields.department.value }
{/if}  
<input type='text' name='{$fields.department.name}' 
    id='{$fields.department.name}' size='30' 
    maxlength='50' 
    value='{$value}' title=''      >
									{else}
						    
			    {counter name="panelFieldCount"}
				
{if strlen($fields.department.value) <= 0}
{assign var="value" value=$fields.department.default_value }
{else}
{assign var="value" value=$fields.department.value }
{/if} 
<span class="sugar_field" id="{$fields.department.name}">{$fields.department.value}</span>

				    
				
		{/if}

		{else}

		  <td></td><td></td>

	{/if}

		    
	
	

				
    			{if $fields.phone_mobile.acl > 1 || ($showDetailData && $fields.phone_mobile.acl > 0)}
	
				<td valign="top" id='phone_mobile_label' width='12.5%' scope="col">
						   {capture name="label" assign="label"}{sugar_translate label='LBL_MOBILE_PHONE' module='Users'}{/capture}
			   {$label|strip_semicolon}:
										
                                                            {if $fields.phone_mobile.locked == true}
                {$lockedIcon}
            {/if}
                        
		</td>
				{counter name="fieldsUsed"}
		
						    
		    				<td valign="top" width='37.5%' >
			
		
		            {if $fields.phone_mobile.acl > 1 && $fields.phone_mobile.locked == false && $fields.phone_mobile.disabled == false}
		
							{counter name="panelFieldCount"}
			    
				

{if strlen($fields.phone_mobile.value) <= 0}
{assign var="value" value=$fields.phone_mobile.default_value }
{else}
{assign var="value" value=$fields.phone_mobile.value }
{/if}  

<input type='text' name='{$fields.phone_mobile.name}' id='{$fields.phone_mobile.name}' size='30' maxlength='50' value='{$value}' title='' tabindex='0'	  class="phone" >

									{else}
						    
			    {counter name="panelFieldCount"}
				
{if !empty($fields.phone_mobile.value)}
{assign var="phone_value" value=$fields.phone_mobile.value }

{sugar_phone value=$phone_value usa_format="0"}

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

	

		
        

	
	

	
    			{if $fields.reports_to_name.acl > 1 || ($showDetailData && $fields.reports_to_name.acl > 0)}
	
				<td valign="top" id='reports_to_name_label' width='12.5%' scope="col">
						   {capture name="label" assign="label"}{sugar_translate label='LBL_REPORTS_TO_NAME' module='Users'}{/capture}
			   {$label|strip_semicolon}:
										
                                                            {if $fields.reports_to_name.locked == true}
                {$lockedIcon}
            {/if}
                        
		</td>
				{counter name="fieldsUsed"}
		
						    
		    				<td valign="top" width='37.5%' >
			
		
		            {if $fields.reports_to_name.acl > 1 && $fields.reports_to_name.locked == false && $fields.reports_to_name.disabled == false}
		
							{counter name="panelFieldCount"}
			    
				
<input type="text" name="{$fields.reports_to_name.name|escape:'html'}" class="sqsEnabled" tabindex="0" id="{$fields.reports_to_name.name|escape:'html'}" size="" value="{$fields.reports_to_name.value|escape:'html'}" title='' autocomplete="off"  	 >
<input type="hidden" name="{$fields.reports_to_name.id_name|escape:'html'}" 
	id="{$fields.reports_to_name.id_name|escape:'html'}" 
	value="{$fields.reports_to_id.value|escape:'html'}">
<span class="id-ff multiple">
<button type="button" name="btn_{$fields.reports_to_name.name|escape:'html'}" id="btn_{$fields.reports_to_name.name|escape:'html'}" tabindex="0" title="{sugar_translate label="LBL_ACCESSKEY_SELECT_USERS_TITLE"}" class="button firstChild" value="{sugar_translate label="LBL_ACCESSKEY_SELECT_USERS_LABEL"}"
onclick='open_popup(
    "{$fields.reports_to_name.module|escape:'html'}", 
	600, 
	400, 
	"", 
	true, 
	false, 
	{literal}{"call_back_function":"set_return","form_name":"EditView","field_to_name_array":{"id":"reports_to_id","name":"reports_to_name"}}{/literal}, 
	"single", 
	true
);' ><img src="{sugar_getimagepath file="id-ff-select.png"}"></button><button type="button" name="btn_clr_{$fields.reports_to_name.name|escape:'html'}" id="btn_clr_{$fields.reports_to_name.name|escape:'html'}" tabindex="0" title="{sugar_translate label="LBL_ACCESSKEY_CLEAR_USERS_TITLE"}"  class="button lastChild"
onclick="SUGAR.clearRelateField(this.form, '{$fields.reports_to_name.name|escape:'html'}', '{$fields.reports_to_name.id_name|escape:'html'}');"  value="{sugar_translate label="LBL_ACCESSKEY_CLEAR_USERS_LABEL"}" ><img src="{sugar_getimagepath file="id-ff-clear.png"}"></button>
</span>
<script type="text/javascript">
SUGAR.util.doWhen(
		"typeof(sqs_objects) != 'undefined' && typeof(sqs_objects['{$form_name}_{$fields.reports_to_name.name|escape:'html'}']) != 'undefined'",
		enableQS
);
</script>

									{else}
						    
			    {counter name="panelFieldCount"}
				
<span id="reports_to_id" class="sugar_field" data-id-value="{$fields.reports_to_id.value|escape:'html'}">{$fields.reports_to_name.value|escape:'html'}</span>

				    
				
		{/if}

		{else}

		  <td></td><td></td>

	{/if}

		    
	
	

				
    			{if $fields.phone_other.acl > 1 || ($showDetailData && $fields.phone_other.acl > 0)}
	
				<td valign="top" id='phone_other_label' width='12.5%' scope="col">
						   {capture name="label" assign="label"}{sugar_translate label='LBL_OTHER_PHONE' module='Users'}{/capture}
			   {$label|strip_semicolon}:
										
                                                            {if $fields.phone_other.locked == true}
                {$lockedIcon}
            {/if}
                        
		</td>
				{counter name="fieldsUsed"}
		
						    
		    				<td valign="top" width='37.5%' >
			
		
		            {if $fields.phone_other.acl > 1 && $fields.phone_other.locked == false && $fields.phone_other.disabled == false}
		
							{counter name="panelFieldCount"}
			    
				

{if strlen($fields.phone_other.value) <= 0}
{assign var="value" value=$fields.phone_other.default_value }
{else}
{assign var="value" value=$fields.phone_other.value }
{/if}  

<input type='text' name='{$fields.phone_other.name}' id='{$fields.phone_other.name}' size='30' maxlength='50' value='{$value}' title='' tabindex='0'	  class="phone" >

									{else}
						    
			    {counter name="panelFieldCount"}
				
{if !empty($fields.phone_other.value)}
{assign var="phone_value" value=$fields.phone_other.value }

{sugar_phone value=$phone_value usa_format="0"}

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

	

		
        

	
	

	
    	
				<td valign="top" id='_label' width='12.5%' scope="col">
						    &nbsp;
										
                                                            
		</td>
				{counter name="fieldsUsed"}
		
						    
		    				<td valign="top" width='37.5%' >
			
		
		
					
		</td>
		    
	
	

				
    			{if $fields.phone_fax.acl > 1 || ($showDetailData && $fields.phone_fax.acl > 0)}
	
				<td valign="top" id='phone_fax_label' width='12.5%' scope="col">
						   {capture name="label" assign="label"}{sugar_translate label='LBL_FAX_PHONE' module='Users'}{/capture}
			   {$label|strip_semicolon}:
										
                                                            {if $fields.phone_fax.locked == true}
                {$lockedIcon}
            {/if}
                        
		</td>
				{counter name="fieldsUsed"}
		
						    
		    				<td valign="top" width='37.5%' >
			
		
		            {if $fields.phone_fax.acl > 1 && $fields.phone_fax.locked == false && $fields.phone_fax.disabled == false}
		
							{counter name="panelFieldCount"}
			    
				

{if strlen($fields.phone_fax.value) <= 0}
{assign var="value" value=$fields.phone_fax.default_value }
{else}
{assign var="value" value=$fields.phone_fax.value }
{/if}  

<input type='text' name='{$fields.phone_fax.name}' id='{$fields.phone_fax.name}' size='30' maxlength='50' value='{$value}' title='' tabindex='0'	  class="phone" >

									{else}
						    
			    {counter name="panelFieldCount"}
				
{if !empty($fields.phone_fax.value)}
{assign var="phone_value" value=$fields.phone_fax.value }

{sugar_phone value=$phone_value usa_format="0"}

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

	

		
        

	
	

	
    	
				<td valign="top" id='_label' width='12.5%' scope="col">
						    &nbsp;
										
                                                            
		</td>
				{counter name="fieldsUsed"}
		
						    
		    				<td valign="top" width='37.5%' >
			
		
		
					
		</td>
		    
	
	

				
    			{if $fields.phone_home.acl > 1 || ($showDetailData && $fields.phone_home.acl > 0)}
	
				<td valign="top" id='phone_home_label' width='12.5%' scope="col">
						   {capture name="label" assign="label"}{sugar_translate label='LBL_HOME_PHONE' module='Users'}{/capture}
			   {$label|strip_semicolon}:
										
                                                            {if $fields.phone_home.locked == true}
                {$lockedIcon}
            {/if}
                        
		</td>
				{counter name="fieldsUsed"}
		
						    
		    				<td valign="top" width='37.5%' >
			
		
		            {if $fields.phone_home.acl > 1 && $fields.phone_home.locked == false && $fields.phone_home.disabled == false}
		
							{counter name="panelFieldCount"}
			    
				

{if strlen($fields.phone_home.value) <= 0}
{assign var="value" value=$fields.phone_home.default_value }
{else}
{assign var="value" value=$fields.phone_home.value }
{/if}  

<input type='text' name='{$fields.phone_home.name}' id='{$fields.phone_home.name}' size='30' maxlength='50' value='{$value}' title='' tabindex='0'	  class="phone" >

									{else}
						    
			    {counter name="panelFieldCount"}
				
{if !empty($fields.phone_home.value)}
{assign var="phone_value" value=$fields.phone_home.value }

{sugar_phone value=$phone_value usa_format="0"}

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

	

		
        

	
	

	
    			{if $fields.business_center_name.acl > 1 || ($showDetailData && $fields.business_center_name.acl > 0)}
	
				<td valign="top" id='business_center_name_label' width='12.5%' scope="col">
						   {capture name="label" assign="label"}{sugar_translate label='LBL_BUSINESS_CENTER_NAME' module='Users'}{/capture}
			   {$label|strip_semicolon}:
										
                                                            {if $fields.business_center_name.locked == true}
                {$lockedIcon}
            {/if}
                        
		</td>
				{counter name="fieldsUsed"}
		
						    
		    				<td valign="top" width='37.5%' >
			
		
		            {if $fields.business_center_name.acl > 1 && $fields.business_center_name.locked == false && $fields.business_center_name.disabled == false}
		
							{counter name="panelFieldCount"}
			    
				
<input type="text" name="{$fields.business_center_name.name|escape:'html'}" class="sqsEnabled" tabindex="0" id="{$fields.business_center_name.name|escape:'html'}" size="" value="{$fields.business_center_name.value|escape:'html'}" title='' autocomplete="off"  	 >
<input type="hidden" name="{$fields.business_center_name.id_name|escape:'html'}" 
	id="{$fields.business_center_name.id_name|escape:'html'}" 
	value="{$fields.business_center_id.value|escape:'html'}">
<span class="id-ff multiple">
<button type="button" name="btn_{$fields.business_center_name.name|escape:'html'}" id="btn_{$fields.business_center_name.name|escape:'html'}" tabindex="0" title="{sugar_translate label="LBL_SELECT_BUTTON_TITLE"}" class="button firstChild" value="{sugar_translate label="LBL_SELECT_BUTTON_LABEL"}"
onclick='open_popup(
    "{$fields.business_center_name.module|escape:'html'}", 
	600, 
	400, 
	"", 
	true, 
	false, 
	{literal}{"call_back_function":"set_return","form_name":"EditView","field_to_name_array":{"id":"business_center_id","name":"business_center_name"}}{/literal}, 
	"single", 
	true
);' ><img src="{sugar_getimagepath file="id-ff-select.png"}"></button><button type="button" name="btn_clr_{$fields.business_center_name.name|escape:'html'}" id="btn_clr_{$fields.business_center_name.name|escape:'html'}" tabindex="0" title="{sugar_translate label="LBL_ACCESSKEY_CLEAR_RELATE_TITLE"}"  class="button lastChild"
onclick="SUGAR.clearRelateField(this.form, '{$fields.business_center_name.name|escape:'html'}', '{$fields.business_center_name.id_name|escape:'html'}');"  value="{sugar_translate label="LBL_ACCESSKEY_CLEAR_RELATE_LABEL"}" ><img src="{sugar_getimagepath file="id-ff-clear.png"}"></button>
</span>
<script type="text/javascript">
SUGAR.util.doWhen(
		"typeof(sqs_objects) != 'undefined' && typeof(sqs_objects['{$form_name}_{$fields.business_center_name.name|escape:'html'}']) != 'undefined'",
		enableQS
);
</script>

									{else}
						    
			    {counter name="panelFieldCount"}
				
 
{if !empty($fields.business_center_id.value)}
{capture assign="detail_url"}index.php?module=BusinessCenters&action=DetailView&record={$fields.business_center_id.value|escape:'html'}{/capture}
<a href="{sugar_ajax_url url=$detail_url}">{/if}
<span id="business_center_id" class="sugar_field" data-id-value="{$fields.business_center_id.value|escape:'html'}">{$fields.business_center_name.value|escape:'html'}</span>
{if !empty($fields.business_center_id.value)}</a>{/if}

				    
				
		{/if}

		{else}

		  <td></td><td></td>

	{/if}

		    
	
	

				
    	
				<td valign="top" id='_label' width='12.5%' scope="col">
						    &nbsp;
										
                                                            
		</td>
				{counter name="fieldsUsed"}
		
						    
		    				<td valign="top" width='37.5%' >
			
		
		
					
		</td>
		    
	</tr>
{/capture}
{if $fieldsUsed > 0 }
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{capture name="tr" assign="tableRow"}
<tr>

	

		
        

	
	

	
    			{if $fields.messenger_type.acl > 1 || ($showDetailData && $fields.messenger_type.acl > 0)}
	
				<td valign="top" id='messenger_type_label' width='12.5%' scope="col">
						   {capture name="label" assign="label"}{sugar_translate label='LBL_MESSENGER_TYPE' module='Users'}{/capture}
			   {$label|strip_semicolon}:
										
                                                            {if $fields.messenger_type.locked == true}
                {$lockedIcon}
            {/if}
                        
		</td>
				{counter name="fieldsUsed"}
		
						    
		    				<td valign="top" width='37.5%' >
			
		
		            {if $fields.messenger_type.acl > 1 && $fields.messenger_type.locked == false && $fields.messenger_type.disabled == false}
		
							{counter name="panelFieldCount"}
			    
				

{if !isset($config.enable_autocomplete) || $config.enable_autocomplete==false}
	<select name="{$fields.messenger_type.name}" 
	id="{$fields.messenger_type.name}" 
	title=''       
	>

	{html_options options=$fields.messenger_type.options selected=$fields.messenger_type.value}
	</select>
{else}
	{assign var="field_options" value=$fields.messenger_type.options }
	{capture name="field_val"}{$fields.messenger_type.value}{/capture}
	{assign var="field_val" value=$smarty.capture.field_val}
	{capture name="ac_key"}{$fields.messenger_type.name}{/capture}
	{assign var="ac_key" value=$smarty.capture.ac_key}

			<select style='display:none' name="{$fields.messenger_type.name}" 
		id="{$fields.messenger_type.name}" 
		title=''          
		>

		{html_options options=$fields.messenger_type.options selected=$fields.messenger_type.value}
		</select>
	
	<input
		id="{$fields.messenger_type.name}-input"
		name="{$fields.messenger_type.name}-input"
		size="30"
		value="{$field_val|lookup:$field_options}"
		type="text" style="vertical-align: top;">

		
	<span class="id-ff multiple">
	    <button type="button"><img src="{sugar_getimagepath file="id-ff-down.png"}" id="{$fields.messenger_type.name}-image"></button><button type="button"
	        id="btn-clear-{$fields.messenger_type.name}-input"
	        title="Clear"
	        onclick="SUGAR.clearRelateField(this.form, '{$fields.messenger_type.name}-input', '{$fields.messenger_type.name}');sync_{$fields.messenger_type.name}()"><img src="{sugar_getimagepath file="id-ff-clear.png"}"></button>
	</span>

	<script>
	SUGAR.AutoComplete.{$ac_key} = [];

			(function (){
			var selectElem = document.getElementById("{$fields.messenger_type.name}");
			
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

	SUGAR.AutoComplete.{$ac_key}.inputNode = Y.one('#{$fields.messenger_type.name}-input');
	SUGAR.AutoComplete.{$ac_key}.inputImage = Y.one('#{$fields.messenger_type.name}-image');
	SUGAR.AutoComplete.{$ac_key}.inputHidden = Y.one('#{$fields.messenger_type.name}');
	
				function SyncToHidden(selectme){
				var selectElem = document.getElementById("{$fields.messenger_type.name}");
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
			sync_{$fields.messenger_type.name} = function(){
				SyncToHidden();
			}
			function syncFromHiddenToWidget(){

				var selectElem = document.getElementById("{$fields.messenger_type.name}");

				//if select no longer on page, kill timer
				if (selectElem==null || selectElem.options == null)
					return;

				var currentvalue = SUGAR.AutoComplete.{$ac_key}.inputNode.get('value');

				SUGAR.AutoComplete.{$ac_key}.inputNode.simulate('keyup');

				for (i=0;i<selectElem.options.length;i++){

					if (selectElem.options[i].value==selectElem.value && document.activeElement != document.getElementById('{$fields.messenger_type.name}-input'))
						SUGAR.AutoComplete.{$ac_key}.inputNode.set('value',selectElem.options[i].innerHTML);
				}
			}

            YAHOO.util.Event.onAvailable("{$fields.messenger_type.name}", syncFromHiddenToWidget);

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
			var selectElem = document.getElementById("{$fields.messenger_type.name}");
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
				

{if is_string($fields.messenger_type.options)}
<input type="hidden" class="sugar_field" id="{$fields.messenger_type.name}" value="{$fields.messenger_type.options}">
{$fields.messenger_type.options}
{else}
<input type="hidden" class="sugar_field" id="{$fields.messenger_type.name}" value="{$fields.messenger_type.value}">
    {assign var="field_options" value=$fields.messenger_type.options }
    {assign var="field_val" value=$fields.messenger_type.value }
    {$field_options[$field_val]}
{/if}

				    
				
		{/if}

		{else}

		  <td></td><td></td>

	{/if}

		    
	
	

				
    			{if $fields.messenger_id.acl > 1 || ($showDetailData && $fields.messenger_id.acl > 0)}
	
				<td valign="top" id='messenger_id_label' width='12.5%' scope="col">
						   {capture name="label" assign="label"}{sugar_translate label='LBL_MESSENGER_ID' module='Users'}{/capture}
			   {$label|strip_semicolon}:
										
                                                            {if $fields.messenger_id.locked == true}
                {$lockedIcon}
            {/if}
                        
		</td>
				{counter name="fieldsUsed"}
		
						    
		    				<td valign="top" width='37.5%' >
			
		
		            {if $fields.messenger_id.acl > 1 && $fields.messenger_id.locked == false && $fields.messenger_id.disabled == false}
		
							{counter name="panelFieldCount"}
			    
				
{if strlen($fields.messenger_id.value) <= 0}
{assign var="value" value=$fields.messenger_id.default_value }
{else}
{assign var="value" value=$fields.messenger_id.value }
{/if}  
<input type='text' name='{$fields.messenger_id.name}' 
    id='{$fields.messenger_id.name}' size='30' 
    maxlength='100' 
    value='{$value}' title=''      >
									{else}
						    
			    {counter name="panelFieldCount"}
				
{if strlen($fields.messenger_id.value) <= 0}
{assign var="value" value=$fields.messenger_id.default_value }
{else}
{assign var="value" value=$fields.messenger_id.value }
{/if} 
<span class="sugar_field" id="{$fields.messenger_id.name}">{$fields.messenger_id.value}</span>

				    
				
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

	

		
        

	
	

	
    			{if $fields.address_street.acl > 1 || ($showDetailData && $fields.address_street.acl > 0)}
	
				<td valign="top" id='address_street_label' width='12.5%' scope="col">
						   {capture name="label" assign="label"}{sugar_translate label='LBL_ADDRESS_STREET' module='Users'}{/capture}
			   {$label|strip_semicolon}:
										
                                                            {if $fields.address_street.locked == true}
                {$lockedIcon}
            {/if}
                        
		</td>
				{counter name="fieldsUsed"}
		
						    
		    				<td valign="top" width='37.5%' >
			
		
		            {if $fields.address_street.acl > 1 && $fields.address_street.locked == false && $fields.address_street.disabled == false}
		
							{counter name="panelFieldCount"}
			    
				
{if empty($fields.address_street.value)}
{assign var="value" value=$fields.address_street.default_value }
{else}
{assign var="value" value=$fields.address_street.value }
{/if}  


<textarea  id='{$fields.address_street.name}' name='{$fields.address_street.name}'
rows="4" 
cols="60" 
title='' tabindex="0" 
 >{$value}</textarea>

									{else}
						    
			    {counter name="panelFieldCount"}
				
<span class="sugar_field" id="{$fields.address_street.name|escape:'html'|url2html|nl2br}">{$fields.address_street.value|escape:'htmlentitydecode'|escape:'html'|url2html|nl2br}</span>

				    
				
		{/if}

		{else}

		  <td></td><td></td>

	{/if}

		    
	
	

				
    			{if $fields.address_city.acl > 1 || ($showDetailData && $fields.address_city.acl > 0)}
	
				<td valign="top" id='address_city_label' width='12.5%' scope="col">
						   {capture name="label" assign="label"}{sugar_translate label='LBL_ADDRESS_CITY' module='Users'}{/capture}
			   {$label|strip_semicolon}:
										
                                                            {if $fields.address_city.locked == true}
                {$lockedIcon}
            {/if}
                        
		</td>
				{counter name="fieldsUsed"}
		
						    
		    				<td valign="top" width='37.5%' >
			
		
		            {if $fields.address_city.acl > 1 && $fields.address_city.locked == false && $fields.address_city.disabled == false}
		
							{counter name="panelFieldCount"}
			    
				
{if strlen($fields.address_city.value) <= 0}
{assign var="value" value=$fields.address_city.default_value }
{else}
{assign var="value" value=$fields.address_city.value }
{/if}  
<input type='text' name='{$fields.address_city.name}' 
    id='{$fields.address_city.name}' size='30' 
    maxlength='100' 
    value='{$value}' title=''      >
									{else}
						    
			    {counter name="panelFieldCount"}
				
{if strlen($fields.address_city.value) <= 0}
{assign var="value" value=$fields.address_city.default_value }
{else}
{assign var="value" value=$fields.address_city.value }
{/if} 
<span class="sugar_field" id="{$fields.address_city.name}">{$fields.address_city.value}</span>

				    
				
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

	

		
        

	
	

	
    			{if $fields.address_state.acl > 1 || ($showDetailData && $fields.address_state.acl > 0)}
	
				<td valign="top" id='address_state_label' width='12.5%' scope="col">
						   {capture name="label" assign="label"}{sugar_translate label='LBL_ADDRESS_STATE' module='Users'}{/capture}
			   {$label|strip_semicolon}:
										
                                                            {if $fields.address_state.locked == true}
                {$lockedIcon}
            {/if}
                        
		</td>
				{counter name="fieldsUsed"}
		
						    
		    				<td valign="top" width='37.5%' >
			
		
		            {if $fields.address_state.acl > 1 && $fields.address_state.locked == false && $fields.address_state.disabled == false}
		
							{counter name="panelFieldCount"}
			    
				
{if strlen($fields.address_state.value) <= 0}
{assign var="value" value=$fields.address_state.default_value }
{else}
{assign var="value" value=$fields.address_state.value }
{/if}  
<input type='text' name='{$fields.address_state.name}' 
    id='{$fields.address_state.name}' size='30' 
    maxlength='100' 
    value='{$value}' title=''      >
									{else}
						    
			    {counter name="panelFieldCount"}
				
{if strlen($fields.address_state.value) <= 0}
{assign var="value" value=$fields.address_state.default_value }
{else}
{assign var="value" value=$fields.address_state.value }
{/if} 
<span class="sugar_field" id="{$fields.address_state.name}">{$fields.address_state.value}</span>

				    
				
		{/if}

		{else}

		  <td></td><td></td>

	{/if}

		    
	
	

				
    			{if $fields.address_postalcode.acl > 1 || ($showDetailData && $fields.address_postalcode.acl > 0)}
	
				<td valign="top" id='address_postalcode_label' width='12.5%' scope="col">
						   {capture name="label" assign="label"}{sugar_translate label='LBL_ADDRESS_POSTALCODE' module='Users'}{/capture}
			   {$label|strip_semicolon}:
										
                                                            {if $fields.address_postalcode.locked == true}
                {$lockedIcon}
            {/if}
                        
		</td>
				{counter name="fieldsUsed"}
		
						    
		    				<td valign="top" width='37.5%' >
			
		
		            {if $fields.address_postalcode.acl > 1 && $fields.address_postalcode.locked == false && $fields.address_postalcode.disabled == false}
		
							{counter name="panelFieldCount"}
			    
				
{if strlen($fields.address_postalcode.value) <= 0}
{assign var="value" value=$fields.address_postalcode.default_value }
{else}
{assign var="value" value=$fields.address_postalcode.value }
{/if}  
<input type='text' name='{$fields.address_postalcode.name}' 
    id='{$fields.address_postalcode.name}' size='30' 
    maxlength='20' 
    value='{$value}' title=''      >
									{else}
						    
			    {counter name="panelFieldCount"}
				
{if strlen($fields.address_postalcode.value) <= 0}
{assign var="value" value=$fields.address_postalcode.default_value }
{else}
{assign var="value" value=$fields.address_postalcode.value }
{/if} 
<span class="sugar_field" id="{$fields.address_postalcode.name}">{$fields.address_postalcode.value}</span>

				    
				
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

	

		
        

	
	

				
    			{if $fields.address_country.acl > 1 || ($showDetailData && $fields.address_country.acl > 0)}
	
				<td valign="top" id='address_country_label' width='12.5%' scope="col">
						   {capture name="label" assign="label"}{sugar_translate label='LBL_ADDRESS_COUNTRY' module='Users'}{/capture}
			   {$label|strip_semicolon}:
										
                                                            {if $fields.address_country.locked == true}
                {$lockedIcon}
            {/if}
                        
		</td>
				{counter name="fieldsUsed"}
		
						    
		    				<td valign="top" width='37.5%' colspan='3'>
			
		
		            {if $fields.address_country.acl > 1 && $fields.address_country.locked == false && $fields.address_country.disabled == false}
		
							{counter name="panelFieldCount"}
			    
				
{if strlen($fields.address_country.value) <= 0}
{assign var="value" value=$fields.address_country.default_value }
{else}
{assign var="value" value=$fields.address_country.value }
{/if}  
<input type='text' name='{$fields.address_country.name}' 
    id='{$fields.address_country.name}' size='30' 
    maxlength='100' 
    value='{$value}' title=''      >
									{else}
						    
			    {counter name="panelFieldCount"}
				
{if strlen($fields.address_country.value) <= 0}
{assign var="value" value=$fields.address_country.default_value }
{else}
{assign var="value" value=$fields.address_country.value }
{/if} 
<span class="sugar_field" id="{$fields.address_country.name}">{$fields.address_country.value}</span>

				    
				
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
						   {capture name="label" assign="label"}{sugar_translate label='LBL_DESCRIPTION' module='Users'}{/capture}
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
rows="4" 
cols="60" 
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
</table>
<script type="text/javascript">SUGAR.util.doWhen("typeof initPanel == 'function'", function() {ldelim} initPanel(2, 'expanded'); {rdelim}); </script>


</div>
{if $panelFieldCount == 0}

<script>document.getElementById("LBL_EMPLOYEE_INFORMATION").style.display='none';</script>
{/if}
</div></div>

<!-- END METADATA GENERATED CONTENT -->

            <div id="email_options">
            <table width="100%" border="0" cellspacing="1" cellpadding="0" class="edit view">
                            <tr>
                                <th align="left" scope="row" colspan="4">
                                    <h4>{$MOD.LBL_MAIL_OPTIONS_TITLE}</h4>
                                </th>
                            </tr>
                            <tr>
                                <td scope="row" width="17%">
                                {$MOD.LBL_EMAIL}:  {if $REQUIRED_EMAIL_ADDRESS}<span class="required" id="mandatory_email">{$APP.LBL_REQUIRED_SYMBOL}</span> {/if}
                                </td>
                                <td>
                                    {$NEW_EMAIL}
                                </td>
                            </tr>
                            <tr id="email_options_link_type" style='display:{$HIDE_FOR_GROUP_AND_PORTAL}'>
                                <td scope="row" width="17%">
                                    {$MOD.LBL_EMAIL_LINK_TYPE}:&nbsp;{sugar_help text=$MOD.LBL_EMAIL_LINK_TYPE_HELP WIDTH=450}
                                </td>
                                <td>
                                    <select id="email_link_type" name="email_link_type" {if $DISABLE_SUGAR_CLIENT} data-sugarclientdisabled="true"{/if} tabindex='410'>
                                    {$EMAIL_LINK_TYPE}
                                    </select>
                                </td>
                            </tr>
                            {if !$HIDE_IF_CAN_USE_DEFAULT_OUTBOUND}
                            <tr id="mail_smtpserver_tr">
                                <td width="20%" scope="row"><span id="mail_smtpserver_label">{$MOD.LBL_EMAIL_PROVIDER}</span></td>
                                <td width="30%" ><slot>{$mail_smtpdisplay}<input id='mail_smtpserver' name='mail_smtpserver' type="hidden" value='{$mail_smtpserver}' /></slot></td>
                                <td>&nbsp;</td>
                                <td >&nbsp;</td>
                            </tr>
                             {if !empty($mail_smtpauth_req) }

                            <tr id="mail_smtpuser_tr">
                                <td width="20%" scope="row" nowrap="nowrap"><span id="mail_smtpuser_label">{$MOD.LBL_MAIL_SMTPUSER}</span></td>
                                <td width="30%" ><slot><input type="text" id="mail_smtpuser" name="mail_smtpuser" size="25" maxlength="64" value="{$mail_smtpuser}" tabindex='1' ></slot></td>
                                <td>&nbsp;</td>
                                <td >&nbsp;</td>
                            </tr>
                            <tr id="mail_smtppass_tr">
                                <td width="20%" scope="row" nowrap="nowrap"><span id="mail_smtppass_label">{$MOD.LBL_MAIL_SMTPPASS}</span></td>
                                <td width="30%" ><slot>
                                <input type="password" id="mail_smtppass" name="mail_smtppass" size="25" maxlength="64" value="{$mail_smtppass}" tabindex='1'>
                                <a href="javascript:void(0)" id='mail_smtppass_link' onClick="SUGAR.util.setEmailPasswordEdit('mail_smtppass')" style="display: none">{$APP.LBL_CHANGE_PASSWORD}</a>
                                </slot></td>
                                <td>&nbsp;</td>
                                <td >&nbsp;</td>
                            </tr>
                            {/if}

                            <tr id="test_outbound_settings_tr">
                                <td width="17%" scope="row"><input type="button" class="button" value="{$APP.LBL_EMAIL_TEST_OUTBOUND_SETTINGS}" onclick="startOutBoundEmailSettingsTest();"></td>
                                <td width="33%" >&nbsp;</td>
                                <td width="17%">&nbsp;</td>
                                <td width="33%" >&nbsp;</td>
                            </tr>
                            {/if}
                        </table>
            </div>
</div>
<div>
            {if ($CHANGE_PWD) == '1'}
            <div id="generate_password">
            <table width="100%" border="0" cellspacing="0" cellpadding="0" class="edit view">
                <tr>
                    <td width='40%'>
                        <table width='100%' cellspacing='0' cellpadding='0' border='0' >
                            <tr>
                                <th align="left" scope="row" colspan="4">
                                    <h4>{$MOD.LBL_CHANGE_PASSWORD_TITLE}</h4><br>
                                    <span id="error_pwd" class="error" {if empty($ERROR_PASSWORD) } style="display: none" {/if}>{$ERROR_PASSWORD}</span>
                                </th>
                            </tr>
                        </table>
                        <!-- field to stop firefox autofill -->
                        <input style="display:none;" type="password" name="stopautofill" />
                            <!-- hide field if user is admin -->
                            <div id='generate_password_old_password' {if ($IS_ADMIN)} style='display:none' {/if}>
                                 <table width='100%' cellspacing='0' cellpadding='0' border='0' >
                                    <tr>
                                        <td width='35%' scope="row">
                                            {$MOD.LBL_OLD_PASSWORD}
                                        </td>
                                        <td >
                                            <input name='old_password' id='old_password' type='password' tabindex='2' autocomplete="off" {$DISABLED}
                                               onkeyup="password_confirmation();"
                                               onchange="password_confirmation();"
                                            >
                                        </td>
                                        <td width='40%'>
                                        </td>
                                    </tr>
                                 </table>
                            </div>
                        <table width='100%' cellspacing='0' cellpadding='0' border='0' >
                            <tr>
                                <td width='35%' scope="row" snowrap>
                                    {$MOD.LBL_NEW_PASSWORD}
                                    <span class="required" id="mandatory_pwd">{if ($REQUIRED_PASSWORD)}{$APP.LBL_REQUIRED_SYMBOL}{/if}</span>
                                </td>
                                <td class='dataField'>

                                    <input name='new_password' id= "new_password" type='password' tabindex='2' autocomplete="off" {$DISABLED}
                                       onkeyup="password_confirmation();newrules('{$PWDSETTINGS.minpwdlength}','{$PWDSETTINGS.maxpwdlength}','{$REGEX}');"
                                       onchange="password_confirmation();newrules('{$PWDSETTINGS.minpwdlength}','{$PWDSETTINGS.maxpwdlength}','{$REGEX}');"
                                    />
                                </td>
                                <td width='40%'>
                                </td>
                            </tr>
                            <tr>
                                <td scope="row" width='35%'>
                                    {$MOD.LBL_CONFIRM_PASSWORD}
                                </td>
                                <td class='dataField'>
                                    <input name='confirm_new_password' id='confirm_pwd' style ='' type='password' tabindex='2' autocomplete="off" {$DISABLED}
                                        onkeyup="password_confirmation();"  >
                                </td>
                                <td width='40%'>
                                <div id="comfirm_pwd_match" class="error" style="display: none;">{$MOD.ERR_PASSWORD_MISMATCH}</div>
                                     
                                </td>
                            </tr>
                            <tr>
                                <td class='dataLabel'></td>
                                <td class='dataField'></td>
                            </td>
                        </table>

                        <table width='17%' cellspacing='0' cellpadding='1' border='0'>
                            <tr>
                                <td width='50%'>
                                    <input title="{$APP.LBL_SAVE_BUTTON_TITLE}" accessKey='{$APP.LBL_SAVE_BUTTON_KEY}' class='button' id='save_new_pwd_button' LANGUAGE=javascript onclick='if (set_password(this.form)) window.close(); else return false;' type='submit' name='button' style='display:none;' value='{$APP.LBL_SAVE_BUTTON_LABEL}'>
                                </td>
                                <td width='50%'>
                                </td>
                            </tr>
                        </table>
                    </td>
                    <td width='60%' style="vertical-align:middle;">
                        {if !$IS_PORTALONLY}
                            {sugar_password_requirements_box width='300px' class='x-sqs-list' style='padding:5px !important;'}
                        {/if}
                    </td>
                </tr>
            </table>
            </div>
            {else}
            <div id="generate_password">
                <input name='old_password' id='old_password' type='hidden'>
                <input name='new_password' id= "new_password" type='hidden'>
                <input name='confirm_new_password' id='confirm_pwd' type='hidden'>
            </div>
            {/if}
    </div>
    {if $SHOW_THEMES}
    <div>
        <div id="themepicker" style="display:{$HIDE_FOR_GROUP_AND_PORTAL}">
        <table class="edit view" border="0" cellpadding="0" cellspacing="0" width="100%">
            <tbody>
                <tr>
                    <td scope="row" colspan="4"><h4>{$MOD.LBL_THEME}</h4></td>
                </tr>
                <tr>
                    <td width="17%">
                        <select name="user_theme" tabindex='366' size="20" id="user_theme_picker" style="width: 100%">
                            {$THEMES}
                        </select>
                    </td>
                    <td width="33%">
                        <img id="themePreview" src="{sugar_getimagepath file='themePreview.png'}" border="1" />
                    </td>
                    <td width="17%">&nbsp;</td>
                    <td width="33%">&nbsp;</td>
                </tr>
            </tbody>
        </table>
        </div>
    </div>
    {/if}
    <div>
        <div id="settings" style="display:{$HIDE_FOR_GROUP_AND_PORTAL}">
        <table width="100%" border="0" cellspacing="1" cellpadding="0" class="edit view">

                        <tr>
                            <th width="100%" align="left" scope="row" colspan="4"><h4><slot>{$MOD.LBL_USER_SETTINGS}</slot></h4></th>
                        </tr>
                        <tr>
                            <td scope="row"  valign="top"><slot>{$MOD.LBL_EXPORT_DELIMITER}:</slot>&nbsp;{sugar_help text=$MOD.LBL_EXPORT_DELIMITER_DESC }</td>
                            <td ><slot><input type="text" tabindex='12' name="export_delimiter" value="{$EXPORT_DELIMITER}" size="5"></slot></td>
                            <td scope="row" width="17%">
                            <slot>{$MOD.LBL_RECEIVE_NOTIFICATIONS}:</slot>&nbsp;{sugar_help text=$MOD.LBL_RECEIVE_NOTIFICATIONS_TEXT}
                            </td>
                            <td width="33%">
                            <slot><input name='receive_notifications' class="checkbox" tabindex='12' type="checkbox" value="12" {$RECEIVE_NOTIFICATIONS}></slot>
                            </td>
                        </tr>
                        <tr>
                            <td scope="row" valign="top"><slot>{$MOD.LBL_EXPORT_CHARSET}:</slot>&nbsp;{sugar_help text=$MOD.LBL_EXPORT_CHARSET_DESC }</td>
                            <td ><slot><select tabindex='12' name="default_export_charset">{$EXPORT_CHARSET}</select></slot></td>
                            <td scope="row" width="17%">
                                <slot>{$MOD.LBL_SEND_EMAIL_ON_MENTION}:</slot>&nbsp;{sugar_help text=$MOD.LBL_SEND_EMAIL_ON_MENTION_TEXT}
                            </td>
                            <td width="33%">
                                <slot><input name='send_email_on_mention' class="checkbox" tabindex='12' type="checkbox" {$SEND_EMAIL_ON_MENTION}></slot>
                            </td>
                        </tr>
                        <tr>
                            <td scope="row" valign="top"><slot>{$MOD.LBL_USE_REAL_NAMES}:</slot>&nbsp;{sugar_help text=$MOD.LBL_USE_REAL_NAMES_DESC }</td>
                            <td ><slot><input tabindex='12' type="checkbox" name="use_real_names" {$USE_REAL_NAMES}></slot></td>
                            <td scope="row" valign="top">
                            <slot>{$MOD.LBL_REMINDER}:</slot>&nbsp;{sugar_help text=$MOD.LBL_REMINDER_TEXT }
                            </td>
                            <td valign="top"  nowrap>
                                <slot>{include file="modules/Meetings/tpls/reminders.tpl"}</slot>
                            </td>
                        </tr>
                        <tr>
                            {if !empty($SHOW_TEAM_SELECTION)}
                            <td width="20%" scope="row"><slot>{$MOD.LBL_DEFAULT_TEAM}:</slot>&nbsp;{sugar_help text=$MOD.LBL_DEFAULT_TEAM_TEXT }</td>
                            <td ><slot>{$DEFAULT_TEAM_OPTIONS}</slot></td>
                            {/if}
                            <td scope="row">
                                <slot>{$MOD.LBL_APPEARANCE|strip_semicolon}:</slot>
                                {sugar_help text=$MOD.LBL_APPEARANCE_DESC}
                            </td>
                            <td>
                                <slot>
                                    <select tabindex="12" name="appearance">
                                        {$APPEARANCE}
                                    </select>
                                </slot>
                            </td>
                        </tr>
                        <!--{if !empty($EXTERNAL_AUTH_CLASS) && !empty($IS_ADMIN)}-->
                            <tr>
                                {capture name=SMARTY_LBL_EXTERNAL_AUTH_ONLY}&nbsp;{$MOD.LBL_EXTERNAL_AUTH_ONLY} {$EXTERNAL_AUTH_CLASS_1}{/capture}
                                <td scope="row" nowrap><slot>{$EXTERNAL_AUTH_CLASS} {$MOD.LBL_ONLY}:</slot>&nbsp;{sugar_help text=$smarty.capture.SMARTY_LBL_EXTERNAL_AUTH_ONLY}</td>
                                <td ><input type='hidden' value='0' name='external_auth_only'><input type='checkbox' value='1' name='external_auth_only' {$EXTERNAL_AUTH_ONLY_CHECKED}></td>
                                <td ></td>
                                <td ></td>
                            </tr>
                        <!--{/if}-->
                    </table>
        </div>
        <div id="layout">
        <table class="edit view" border="0" cellpadding="0" cellspacing="1" width="100%">
            <tbody>
                <tr>
                    <th align="left" scope="row" colspan="4"><h4>{$MOD.LBL_LAYOUT_OPTIONS}</h4></th>
                </tr>
                            <tr>
                                <td colspan="2" width="50%">
                                    <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                        <tr>
                                            <td scope="row" align="left" style="padding-bottom: 2em;">{$TAB_CHOOSER}</td>
                                            <td width="90%" valign="top"><BR>&nbsp;</td>
                                        </tr>
                                    </table>
                                </td>
                                <td colspan="2" width="50%">
                                    <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                        <tr>
                                            <td scope="row" width="17%">
                                            <slot>{$MOD.LBL_FIELD_NAME_PLACEMENT}:</slot>&nbsp;{sugar_help text=$MOD.LBL_FIELD_NAME_PLACEMENT_TEXT}
                                            </td>
                                            <td width="33%"><slot><select tabindex='12' name="field_name_placement">{$FIELD_NAME_PLACEMENT}</select></slot></td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                        </table>
        </div>
        <div id="locale" style="display:{$HIDE_FOR_GROUP_AND_PORTAL}">
        <table width="100%" border="0" cellspacing="1" cellpadding="0" class="edit view">
                        <tr>
                            <th width="100%" align="left" scope="row" colspan="4">
                                <h4><slot>{$MOD.LBL_USER_LOCALE}</slot></h4></th>
                        </tr>
                        <tr>
                            <td width="17%" scope="row"><slot>{$MOD.LBL_DATE_FORMAT}:</slot>&nbsp;{sugar_help text=$MOD.LBL_DATE_FORMAT_TEXT }</td>
                            <td width="33%"><slot><select tabindex='14' name='dateformat'>{$DATEOPTIONS}</select></slot></td>
                            <!-- END: prompttz -->
                            <!-- BEGIN: currency -->
                            <td width="17%" scope="row"><slot>{$MOD.LBL_CURRENCY}:</slot>&nbsp;{sugar_help text=$MOD.LBL_CURRENCY_TEXT }</td>
                                <td ><slot>
                                    <select tabindex='14' id='currency_select' name='currency' onchange='setSymbolValue(this.options[this.selectedIndex].value);setSigDigits();'>{$CURRENCY}</select>
                                    <input type="hidden" id="symbol" value="">
                                </slot></td>
                            <!-- END: currency -->
                        </tr>
                        <tr>
                            <!-- BEGIN: show preferred currency -->
                            <td width="17%" scope="row"><slot>{$MOD.LBL_CURRENCY_SHOW_PREFERRED}:</slot>&nbsp;{sugar_help text=$MOD.LBL_CURRENCY_SHOW_PREFERRED_TEXT }</td>
                            <td ><slot>
                                    <input id="currency_show_preferred" type="checkbox" name="currency_show_preferred" value="YES" {if $currency_show_preferred}checked="checked"{/if}>
                                </slot></td>
                            <!-- END: show preferred currency -->
                            <!-- BEGIN: create rlis in preferred currency -->
                            <td width="17%" scope="row">
                                <slot>{$MOD.LBL_CURRENCY_CREATE_IN_PREFERRED}:</slot>
                                &nbsp {sugar_help text=$MOD.LBL_CURRENCY_CREATE_IN_PREFERRED_TEXT }
                            </td>
                            <td>
                                <slot>
                                    <input id="currency_create_in_preferred"
                                        type="checkbox" name="currency_create_in_preferred"
                                        value="YES" {if $currency_create_in_preferred}checked="checked"{/if}>
                                </slot>
                            </td>
                            <!-- END: create rlis in preferred currency -->

                        </tr>
                        <tr>
                            <td scope="row"><slot>{$MOD.LBL_TIME_FORMAT}:</slot>&nbsp;{sugar_help text=$MOD.LBL_TIME_FORMAT_TEXT }</td>
                            <td ><slot><select tabindex='14' name='timeformat'>{$TIMEOPTIONS}</select></slot></td>
                            <!-- BEGIN: currency -->
                            <td width="17%" scope="row"><slot>
                                {$MOD.LBL_SYSTEM_SIG_DIGITS}:
                            </slot></td>
                            <td ><slot>
                                <select id='sigDigits' onchange='setSigDigits(this.value);' name='default_currency_significant_digits'>{$sigDigits}</select>
                            </slot></td>
                            <!-- END: currency -->
                        </tr>
                        <tr>
                            <td scope="row"><slot>{$MOD.LBL_TIMEZONE}:</slot>&nbsp;{sugar_help text=$MOD.LBL_TIMEZONE_TEXT }</td>
                            <td ><slot><select tabindex='14' name='timezone'>{html_options options=$TIMEZONEOPTIONS selected=$TIMEZONE_CURRENT}</select></slot></td>
                            <!-- BEGIN: currency -->
                            <td width="17%" scope="row"><slot>
                                <i>{$MOD.LBL_LOCALE_EXAMPLE_NAME_FORMAT}</i>:
                            </slot></td>
                            <td ><slot>
                                <input type="text" disabled id="sigDigitsExample" name="sigDigitsExample">
                            </slot></td>
                            <!-- END: currency -->
                        </tr>
                        <tr>
                        {if ($IS_ADMIN)}
                            <td scope="row"><slot>{$MOD.LBL_PROMPT_TIMEZONE}:</slot>&nbsp;{sugar_help text=$MOD.LBL_PROMPT_TIMEZONE_TEXT }</td>
                            <td ><slot><input type="checkbox" tabindex='14'class="checkbox" name="ut" value="0" {$PROMPTTZ}></slot></td>
                        {else}
                            <td scope="row"><slot></td>
                            <td ><slot></slot></td>
                        {/if}
                            <td width="17%" scope="row"><slot>{$MOD.LBL_NUMBER_GROUPING_SEP}:</slot>&nbsp;{sugar_help text=$MOD.LBL_NUMBER_GROUPING_SEP_TEXT }</td>
                            <td ><slot>
                                <input tabindex='14' name='num_grp_sep' id='default_number_grouping_seperator'
                                    type='text' maxlength='1' size='1' value='{$NUM_GRP_SEP}'
                                    onkeydown='this.value=this.value.replace(/[\w]+/g, "");setSigDigits();'
                                    onkeyup='this.value=this.value.replace(/[\w]+/g, "");setSigDigits();'>
                            </slot></td></tr>
                        {capture name=SMARTY_LOCALE_NAME_FORMAT_DESC}&nbsp;{$MOD.LBL_LOCALE_NAME_FORMAT_DESC}{/capture}
                        <tr>
                            <td  scope="row" valign="top">{$MOD.LBL_LOCALE_DEFAULT_NAME_FORMAT}:&nbsp;{sugar_help text=$smarty.capture.SMARTY_LOCALE_NAME_FORMAT_DESC }</td>
                            <td  valign="top"><slot><select tabindex='14' id="default_locale_name_format" name="default_locale_name_format" selected="{$default_locale_name_format}">{$NAMEOPTIONS}</select></slot></td>
                             <td width="17%" scope="row"><slot>{$MOD.LBL_DECIMAL_SEP}:</slot>&nbsp;{sugar_help text=$MOD.LBL_DECIMAL_SEP_TEXT }</td>
                            <td ><slot>
                                <input tabindex='14' name='dec_sep' id='default_decimal_seperator'
                                    type='text' maxlength='1' size='1' value='{$DEC_SEP}'
                                    onkeydown='this.value=this.value.replace(/[\w]+/g, "");setSigDigits();'
                                    onkeyup='this.value=this.value.replace(/[\w]+/g, "");setSigDigits();'>
                            </slot></td>
                        </tr>
                    </table>
        </div>

        <div id="pdf_settings" style="display:{$HIDE_FOR_GROUP_AND_PORTAL}">
        {if $SHOW_PDF_OPTIONS}
        <table width="100%" border="0" cellspacing="1" cellpadding="0" class="edit view">
                        <tr>
                            <th width="100%" align="left"  colspan="4">
                                <h4 ><slot>{$MOD.LBL_PDF_SETTINGS}</slot></h4></th>
                        </tr>
                        <tr>
                            <td width="17%" scope="row"><slot>{$MOD.LBL_PDF_FONT_NAME_MAIN}:</slot>&nbsp;{sugar_help text=$MOD.LBL_PDF_FONT_NAME_MAIN_TEXT}</td>
                            <td width="33%"><slot><select name='sugarpdf_pdf_font_name_main' tabindex='16'>{$PDF_FONT_NAME_MAIN}</select></slot></td>
                            <td colspan="2"><slot>&nbsp;</slot></td>
                        </tr>
                        <tr>
                            <td width="17%" scope="row"><slot>{$MOD.LBL_PDF_FONT_SIZE_MAIN}:</slot></td>
                            <td width="33%"><slot><input type="text" name="sugarpdf_pdf_font_size_main" value="{$PDF_FONT_SIZE_MAIN}" size="5" maxlength="5" tabindex='16'/></slot></td>
                            <td colspan="2"><slot>{$MOD.LBL_PDF_FONT_SIZE_MAIN_TEXT}&nbsp;</slot></td>
                        </tr>
                        <tr>
                            <td width="17%" scope="row"><slot>{$MOD.LBL_PDF_FONT_NAME_DATA}:</slot>&nbsp;{sugar_help text=$MOD.LBL_PDF_FONT_NAME_DATA_TEXT}</td>
                            <td width="33%"><slot><select name='sugarpdf_pdf_font_name_data' tabindex='16'>{$PDF_FONT_NAME_DATA}</select></slot></td>
                            <td colspan="2"><slot>&nbsp;</slot></td>
                        </tr>
                        <tr>
                            <td width="17%" scope="row"><slot>{$MOD.LBL_PDF_FONT_SIZE_DATA}:</slot></td>
                            <td width="33%"><slot><input type="text" name="sugarpdf_pdf_font_size_data" value="{$PDF_FONT_SIZE_DATA}" size="5" maxlength="5" tabindex='16'/></slot></td>
                            <td colspan="2"><slot>{$MOD.LBL_PDF_FONT_SIZE_DATA_TEXT}&nbsp;</slot></td>
                        </tr>
                    </table>
        {/if}
        </div>
        <div id="calendar_options" style="display:{$HIDE_FOR_GROUP_AND_PORTAL}">
        <table width="100%" border="0" cellspacing="1" cellpadding="0" class="edit view">
            <tr>
                <th align="left" scope="row" colspan="4"><h4>{$MOD.LBL_CALENDAR_OPTIONS}</h4></th>
            </tr>
                        <tr>
                            <td width="17%" scope="row"><slot>{$MOD.LBL_PUBLISH_KEY}:</slot>&nbsp;{sugar_help text=$MOD.LBL_CHOOSE_A_KEY}</td>
                            <td width="20%" ><slot><input id='calendar_publish_key' name='calendar_publish_key' tabindex='17' size='25' maxlength='25' type="text" value="{$CALENDAR_PUBLISH_KEY}"></slot></td>
                            <td width="63%" ><slot>&nbsp;</slot></td>
                        </tr>
                        <tr>
                            <td width="15%" scope="row"><slot><nobr>{$MOD.LBL_YOUR_PUBLISH_URL|strip_semicolon}:</nobr></slot></td>
                            <td colspan=2><span class="calendar_publish_ok">{$CALENDAR_PUBLISH_URL}</span><span class="calendar_publish_none" style="display: none">{$MOD.LBL_NO_KEY}</span></td>
                        </tr>
                        <tr>
                            <td width="17%" scope="row"><slot>{$MOD.LBL_SEARCH_URL|strip_semicolon}:</slot></td>
                            <td colspan=2><span class="calendar_publish_ok">{$CALENDAR_SEARCH_URL}</span><span class="calendar_publish_none" style="display: none">{$MOD.LBL_NO_KEY}</span></td>
                        </tr>
                        <tr>
                            <td width="15%" scope="row"><slot>{$MOD.LBL_ICAL_PUB_URL|strip_semicolon}: {sugar_help text=$MOD.LBL_ICAL_PUB_URL_HELP}</slot></td>
                            <td colspan=2><span class="calendar_publish_ok">{$CALENDAR_ICAL_URL}</span><span class="calendar_publish_none" style="display: none">{$MOD.LBL_NO_KEY}</span></td>
                        </tr>
                        <tr>
                            <td width="17%" scope="row"><slot>{$MOD.LBL_FDOW}:</slot>&nbsp;{sugar_help text=$MOD.LBL_FDOW_TEXT}</td>
                            <td ><slot>
                                <select tabindex='14' name='fdow'>{html_options options=$FDOWOPTIONS selected=$FDOWCURRENT}</select>
                            </slot></td>
                        </tr>
                    </table>
        </div>
    </div>
    {if $ID}
    <div id="eapm_area" style='display:{$HIDE_FOR_GROUP_AND_PORTAL};'>
        <div style="text-align:center; width: 100%">{sugar_image name="loading"}</div>
    </div>
    {/if}
</div>

<script type="text/javascript">

var mail_smtpport = '{$MAIL_SMTPPORT}';
var mail_smtpssl = '{$MAIL_SMTPSSL}';

EmailMan = { };

function Admin_check(){
	if (('{$IS_FOCUS_ADMIN}') && document.getElementById('is_admin').value=='0'){
		r=confirm('{$MOD.LBL_CONFIRM_REGULAR_USER}');
		return r;
		}
	else
		return true;
}


$(document).ready(function() {
	var checkKey = function(key) {
		if(key != '') {
			$(".calendar_publish_ok").css('display', 'inline');
			$(".calendar_publish_none").css('display', 'none');
	        $('#cal_pub_key_span').text( key );
	        $('#ical_pub_key_span').text( key );
	        $('#search_pub_key_span').text( key );
		} else {
			$(".calendar_publish_ok").css('display', 'none');
			$(".calendar_publish_none").css('display', 'inline');
		}
	};
    $('#calendar_publish_key').keyup(function(){
    	checkKey($(this).val());
    });
    $('#calendar_publish_key').change(function(){
    	checkKey($(this).val());
    });
    checkKey($('#calendar_publish_key').val());


    {if $mail_haspass}

    if(window.addEventListener){
        window.addEventListener("load", function() { SUGAR.util.setEmailPasswordDisplay('mail_smtppass', {$mail_haspass}); }, false);
    }else{
        window.attachEvent("onload", function() { SUGAR.util.setEmailPasswordDisplay('mail_smtppass', {$mail_haspass}); });
    }

    {/if}

});

</script>
{$JAVASCRIPT}

<script type="text/javascript" language="Javascript">

{$getNameJs}
{$getNumberJs}
currencies = {$currencySymbolJSON};

onUserEditView();

</script>

</form>

<div id="testOutboundDialog" class="yui-hidden">
    <div id="testOutbound">
        <form>
		<table width="100%" border="0" cellspacing="0" cellpadding="0" class="edit view">
			<tr>
				<td scope="row">
					{$APP.LBL_EMAIL_SETTINGS_FROM_TO_EMAIL_ADDR}
					<span class="required">
						{$APP.LBL_REQUIRED_SYMBOL}
					</span>
				</td>
				<td >
					<input type="text" id="outboundtest_from_address" name="outboundtest_from_address" size="35" maxlength="64" value="{$TEST_EMAIL_ADDRESS}">
				</td>
			</tr>
			<tr>
				<td scope="row" colspan="2">
					<input type="button" class="button" value="   {$APP.LBL_EMAIL_SEND}   " onclick="javascript:sendTestEmail();">&nbsp;
					<input type="button" class="button" value="   {$APP.LBL_CANCEL_BUTTON_LABEL}   " onclick="javascript:EmailMan.testOutboundDialog.hide();">&nbsp;
				</td>
			</tr>
		</table>
		</form>
	</div>
</div>
<style>
    .actionsContainer.footer td {
        height:120px;
        vertical-align: top;
    }
</style>
<table width="100%" cellpadding="0" cellspacing="0" border="0" class="actionsContainer footer">
    <tr>
        <td>
        {sugar_action_menu id="userEditActions" class="clickMenu fancymenu" buttons=$ACTION_BUTTON_FOOTER flat=true}
        </td>
        <td align="right" nowrap>
            <span class="required">{$APP.LBL_REQUIRED_SYMBOL}</span> {$APP.NTC_REQUIRED}
        </td>
    </tr>
</table>
{*
TODO REMOVE THIS CODE
<script type="text/javascript">
YAHOO.util.Event.onContentReady("EditView",
    function () {ldelim} initEditView(document.forms.EditView) {rdelim});
//window.setTimeout(, 100);
window.onbeforeunload = function () {ldelim} return disableOnUnloadEditView(); {rdelim};

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
addForm('EditView');addToValidate('EditView', 'user_name', 'username', true,'{/literal}{sugar_translate label='LBL_USER_NAME' module='Users' for_js=true}{literal}' );
addToValidate('EditView', 'user_hash', 'password', false,'{/literal}{sugar_translate label='LBL_USER_HASH' module='Users' for_js=true}{literal}' );
addToValidate('EditView', 'system_generated_password', 'bool', true,'{/literal}{sugar_translate label='LBL_SYSTEM_GENERATED_PASSWORD' module='Users' for_js=true}{literal}' );
addToValidate('EditView', 'pwd_last_changed_date', 'date', false,'Password Last Changed' );
addToValidate('EditView', 'authenticate_id', 'varchar', false,'{/literal}{sugar_translate label='LBL_AUTHENTICATE_ID' module='Users' for_js=true}{literal}' );
addToValidate('EditView', 'sugar_login', 'bool', false,'{/literal}{sugar_translate label='LBL_SUGAR_LOGIN' module='Users' for_js=true}{literal}' );
addToValidate('EditView', 'picture', 'image', false,'{/literal}{sugar_translate label='LBL_PICTURE_FILE' module='Users' for_js=true}{literal}' );
addToValidate('EditView', 'first_name', 'name', false,'{/literal}{sugar_translate label='LBL_FIRST_NAME' module='Users' for_js=true}{literal}' );
addToValidate('EditView', 'last_name', 'name', true,'{/literal}{sugar_translate label='LBL_LAST_NAME' module='Users' for_js=true}{literal}' );
addToValidate('EditView', 'full_name', 'fullname', false,'{/literal}{sugar_translate label='LBL_NAME' module='Users' for_js=true}{literal}' );
addToValidate('EditView', 'name', 'fullname', false,'{/literal}{sugar_translate label='LBL_NAME' module='Users' for_js=true}{literal}' );
addToValidate('EditView', 'is_admin', 'bool', false,'{/literal}{sugar_translate label='LBL_IS_ADMIN' module='Users' for_js=true}{literal}' );
addToValidate('EditView', 'external_auth_only', 'bool', false,'{/literal}{sugar_translate label='LBL_EXT_AUTHENTICATE' module='Users' for_js=true}{literal}' );
addToValidate('EditView', 'receive_notifications', 'bool', false,'{/literal}{sugar_translate label='LBL_RECEIVE_NOTIFICATIONS' module='Users' for_js=true}{literal}' );
addToValidate('EditView', 'send_email_on_mention', 'bool', false,'{/literal}{sugar_translate label='LBL_SEND_EMAIL_ON_MENTION' module='Users' for_js=true}{literal}' );
addToValidate('EditView', 'description', 'text', false,'{/literal}{sugar_translate label='LBL_DESCRIPTION' module='Users' for_js=true}{literal}' );
addToValidate('EditView', 'date_entered_date', 'date', true,'Date Entered' );
addToValidate('EditView', 'date_modified_date', 'date', true,'Date Modified' );
addToValidate('EditView', 'last_login_date', 'date', false,'last login' );
addToValidate('EditView', 'modified_user_id', 'assigned_user_name', false,'{/literal}{sugar_translate label='LBL_MODIFIED_BY_ID' module='Users' for_js=true}{literal}' );
addToValidate('EditView', 'modified_by_name', 'varchar', false,'{/literal}{sugar_translate label='LBL_MODIFIED_BY' module='Users' for_js=true}{literal}' );
addToValidate('EditView', 'created_by', 'assigned_user_name', false,'{/literal}{sugar_translate label='LBL_ASSIGNED_TO' module='Users' for_js=true}{literal}' );
addToValidate('EditView', 'created_by_name', 'relate', false,'{/literal}{sugar_translate label='LBL_CREATED_BY_NAME' module='Users' for_js=true}{literal}' );
addToValidate('EditView', 'title', 'varchar', false,'{/literal}{sugar_translate label='LBL_TITLE' module='Users' for_js=true}{literal}' );
addToValidate('EditView', 'department', 'varchar', false,'{/literal}{sugar_translate label='LBL_DEPARTMENT' module='Users' for_js=true}{literal}' );
addToValidate('EditView', 'phone_home', 'phone', false,'{/literal}{sugar_translate label='LBL_HOME_PHONE' module='Users' for_js=true}{literal}' );
addToValidate('EditView', 'phone_mobile', 'phone', false,'{/literal}{sugar_translate label='LBL_MOBILE_PHONE' module='Users' for_js=true}{literal}' );
addToValidate('EditView', 'phone_work', 'phone', false,'{/literal}{sugar_translate label='LBL_WORK_PHONE' module='Users' for_js=true}{literal}' );
addToValidate('EditView', 'phone_other', 'phone', false,'{/literal}{sugar_translate label='LBL_OTHER_PHONE' module='Users' for_js=true}{literal}' );
addToValidate('EditView', 'phone_fax', 'phone', false,'{/literal}{sugar_translate label='LBL_FAX_PHONE' module='Users' for_js=true}{literal}' );
addToValidate('EditView', 'status', 'enum', true,'{/literal}{sugar_translate label='LBL_STATUS' module='Users' for_js=true}{literal}' );
addToValidate('EditView', 'address_street', 'text', false,'{/literal}{sugar_translate label='LBL_ADDRESS_STREET' module='Users' for_js=true}{literal}' );
addToValidate('EditView', 'address_city', 'varchar', false,'{/literal}{sugar_translate label='LBL_ADDRESS_CITY' module='Users' for_js=true}{literal}' );
addToValidate('EditView', 'address_state', 'varchar', false,'{/literal}{sugar_translate label='LBL_ADDRESS_STATE' module='Users' for_js=true}{literal}' );
addToValidate('EditView', 'address_country', 'varchar', false,'{/literal}{sugar_translate label='LBL_ADDRESS_COUNTRY' module='Users' for_js=true}{literal}' );
addToValidate('EditView', 'address_postalcode', 'varchar', false,'{/literal}{sugar_translate label='LBL_ADDRESS_POSTALCODE' module='Users' for_js=true}{literal}' );
addToValidate('EditView', 'UserType', 'enum', false,'{/literal}{sugar_translate label='LBL_USER_TYPE' module='Users' for_js=true}{literal}' );
addToValidate('EditView', 'license_type[]', 'json', true,'{/literal}{sugar_translate label='LBL_LICENSE_TYPE' module='Users' for_js=true}{literal}' );
addToValidate('EditView', 'default_team', 'id', false,'{/literal}{sugar_translate label='LBL_DEFAULT_TEAM' module='Users' for_js=true}{literal}' );
addToValidate('EditView', 'team_id', 'id', false,'{/literal}{sugar_translate label='LBL_DEFAULT_TEAM' module='Users' for_js=true}{literal}' );
addToValidate('EditView', 'team_set_id', 'id', false,'{/literal}{sugar_translate label='LBL_TEAM_SET_ID' module='Users' for_js=true}{literal}' );
addToValidate('EditView', 'acl_team_set_id', 'id', false,'{/literal}{sugar_translate label='LBL_TEAM_SET_SELECTED_ID' module='Users' for_js=true}{literal}' );
addToValidate('EditView', 'business_center_name', 'relate', false,'{/literal}{sugar_translate label='LBL_BUSINESS_CENTER_NAME' module='Users' for_js=true}{literal}' );
addToValidate('EditView', 'business_center_id', 'relate', false,'{/literal}{sugar_translate label='LBL_BUSINESS_CENTER_ID' module='Users' for_js=true}{literal}' );
addToValidate('EditView', 'team_count', 'relate', true,'{/literal}{sugar_translate label='LBL_TEAMS' module='Users' for_js=true}{literal}' );
addToValidate('EditView', 'team_name', 'teamset', true,'{/literal}{sugar_translate label='LBL_TEAMS' module='Users' for_js=true}{literal}' );
addToValidate('EditView', 'deleted', 'bool', false,'{/literal}{sugar_translate label='LBL_DELETED' module='Users' for_js=true}{literal}' );
addToValidate('EditView', 'portal_only', 'bool', false,'{/literal}{sugar_translate label='LBL_PORTAL_ONLY_USER' module='Users' for_js=true}{literal}' );
addToValidate('EditView', 'show_on_employees', 'bool', false,'{/literal}{sugar_translate label='LBL_SHOW_ON_EMPLOYEES' module='Users' for_js=true}{literal}' );
addToValidate('EditView', 'employee_status', 'enum', false,'{/literal}{sugar_translate label='LBL_EMPLOYEE_STATUS' module='Users' for_js=true}{literal}' );
addToValidate('EditView', 'messenger_id', 'varchar', false,'{/literal}{sugar_translate label='LBL_MESSENGER_ID' module='Users' for_js=true}{literal}' );
addToValidate('EditView', 'messenger_type', 'enum', false,'{/literal}{sugar_translate label='LBL_MESSENGER_TYPE' module='Users' for_js=true}{literal}' );
addToValidate('EditView', 'reports_to_id', 'id', false,'{/literal}{sugar_translate label='LBL_REPORTS_TO_ID' module='Users' for_js=true}{literal}' );
addToValidate('EditView', 'reports_to_name', 'relate', false,'{/literal}{sugar_translate label='LBL_REPORTS_TO_NAME' module='Users' for_js=true}{literal}' );
addToValidate('EditView', 'email1', 'varchar', true,'{/literal}{sugar_translate label='LBL_EMAIL_ADDRESS' module='Users' for_js=true}{literal}' );
addToValidate('EditView', 'email', 'email', false,'{/literal}{sugar_translate label='LBL_ANY_EMAIL' module='Users' for_js=true}{literal}' );
addToValidate('EditView', 'email_link_type', 'enum', false,'{/literal}{sugar_translate label='LBL_EMAIL_LINK_TYPE' module='Users' for_js=true}{literal}' );
addToValidate('EditView', 'is_group', 'bool', false,'{/literal}{sugar_translate label='LBL_GROUP_USER' module='Users' for_js=true}{literal}' );
addToValidate('EditView', 'c_accept_status_fields', 'relate', false,'{/literal}{sugar_translate label='LBL_LIST_ACCEPT_STATUS' module='Users' for_js=true}{literal}' );
addToValidate('EditView', 'm_accept_status_fields', 'relate', false,'{/literal}{sugar_translate label='LBL_LIST_ACCEPT_STATUS' module='Users' for_js=true}{literal}' );
addToValidate('EditView', 'accept_status_id', 'varchar', false,'{/literal}{sugar_translate label='LBL_LIST_ACCEPT_STATUS' module='Users' for_js=true}{literal}' );
addToValidate('EditView', 'accept_status_name', 'enum', false,'{/literal}{sugar_translate label='LBL_LIST_ACCEPT_STATUS' module='Users' for_js=true}{literal}' );
addToValidate('EditView', 'accept_status_calls', 'enum', false,'{/literal}{sugar_translate label='LBL_LIST_ACCEPT_STATUS' module='Users' for_js=true}{literal}' );
addToValidate('EditView', 'accept_status_meetings', 'enum', false,'{/literal}{sugar_translate label='LBL_LIST_ACCEPT_STATUS' module='Users' for_js=true}{literal}' );
addToValidate('EditView', 'accept_status_messages', 'enum', false,'{/literal}{sugar_translate label='LBL_LIST_ACCEPT_STATUS' module='Users' for_js=true}{literal}' );
addToValidate('EditView', 'preferred_language', 'enum', false,'{/literal}{sugar_translate label='LBL_PREFERRED_LANGUAGE' module='Users' for_js=true}{literal}' );
addToValidate('EditView', 'site_user_id', 'varchar', false,'{/literal}{sugar_translate label='LBL_SITE_USER_ID' module='Users' for_js=true}{literal}' );
addToValidate('EditView', 'cookie_consent', 'bool', false,'{/literal}{sugar_translate label='LBL_COOKIE_CONSENT' module='Users' for_js=true}{literal}' );
addToValidate('EditView', 'cookie_consent_received_on_date', 'date', false,'Cookie Consent Received On' );
addToValidate('EditView', 'sync_key', 'varchar', false,'{/literal}{sugar_translate label='LBL_SYNC_KEY' module='Users' for_js=true}{literal}' );
addToValidateBinaryDependency('EditView', 'assigned_user_name', 'alpha', false,'{/literal}{sugar_translate label='ERR_SQS_NO_MATCH_FIELD' module='Users' for_js=true}{literal}: {/literal}{sugar_translate label='LBL_ASSIGNED_TO' module='Users' for_js=true}{literal}', 'assigned_user_id' );
addToValidateBinaryDependency('EditView', 'business_center_name', 'alpha', false,'{/literal}{sugar_translate label='ERR_SQS_NO_MATCH_FIELD' module='Users' for_js=true}{literal}: {/literal}{sugar_translate label='LBL_BUSINESS_CENTER_NAME' module='Users' for_js=true}{literal}', 'business_center_id' );
addToValidateBinaryDependency('EditView', 'reports_to_name', 'alpha', false,'{/literal}{sugar_translate label='ERR_SQS_NO_MATCH_FIELD' module='Users' for_js=true}{literal}: {/literal}{sugar_translate label='LBL_REPORTS_TO_NAME' module='Users' for_js=true}{literal}', 'reports_to_id' );
</script><script language="javascript">if(typeof sqs_objects == 'undefined'){var sqs_objects = new Array;}sqs_objects['EditView_reports_to_name']={"form":"EditView","method":"get_user_array","field_list":["user_name","id"],"populate_list":["reports_to_name","reports_to_id"],"required_list":["reports_to_id"],"conditions":[{"name":"user_name","op":"like_custom","end":"%","value":""}],"limit":"30","no_match_text":"No Match"};sqs_objects['EditView_business_center_name']={"form":"EditView","method":"query","modules":["BusinessCenters"],"group":"or","field_list":["name","id"],"populate_list":["business_center_name","business_center_id"],"required_list":["parent_id"],"conditions":[{"name":"name","op":"like_custom","end":"%","value":""}],"order":"name","limit":"30","no_match_text":"No Match"};</script><script type=text/javascript>
SUGAR.util.doWhen('!SUGAR.util.ajaxCallInProgress()', function(){
SUGAR.forms.AssignmentHandler.registerView('EditView');
SUGAR.forms.AssignmentHandler.LINKS['EditView'] = {"created_by_link":{"relationship":"users_created_by","module":"Users","id_name":"created_by"},"business_centers":{"relationship":"business_center_users","id_name":"business_center_id","module":"BusinessCenters"},"shifts":{"relationship":"shifts_users","module":"Shifts"},"shift_exceptions":{"relationship":"shift_exceptions_users","module":"ShiftExceptions"},"users_signatures":{"relationship":"users_users_signatures"},"calls":{"relationship":"calls_users"},"message_invites":{"relationship":"messages_users"},"kbusefulness":{"relationship":"kbusefulness"},"meetings":{"relationship":"meetings_users"},"contacts_sync":{"relationship":"contacts_users"},"reports_to_link":{"relationship":"user_direct_reports","id_name":"reports_to_id","module":"Users"},"reportees":{"relationship":"user_direct_reports"},"email_addresses":{"relationship":"users_email_addresses","module":"EmailAddress"},"email_addresses_primary":{"relationship":"users_email_addresses_primary"},"aclroles":{"relationship":"acl_roles_users"},"prospect_lists":{"relationship":"prospect_list_users","module":"ProspectLists"},"holidays":{"relationship":"users_holidays"},"eapm":{"relationship":"eapm_assigned_user"},"oauth_tokens":{"relationship":"oauthtokens_assigned_user","module":"OAuthTokens"},"project_resource":{"relationship":"projects_users_resources"},"quotas":{"relationship":"users_quotas"},"forecasts":{"relationship":"users_forecasts"},"reportschedules":{"relationship":"reportschedules_users"},"activities":{"relationship":"activities_users","module":"Activities"},"acl_role_sets":{"relationship":"users_acl_role_sets"}}

YAHOO.util.Event.onContentReady('EditView', SUGAR.forms.AssignmentHandler.loadComplete);});</script>{/literal}
