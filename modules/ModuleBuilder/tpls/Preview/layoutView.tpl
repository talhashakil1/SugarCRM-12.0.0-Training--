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

<table id='layoutEditorButtons' cellspacing='2'>
    <tr>
    {$buttons}
    </tr>
</table>
<div id='layoutEditor' style="width:675px;">

<div id='toolbox' style='display:none;'>
</div>

<div id='panels' style='float:left; overflow-y:auto; overflow-x:hidden'>

<h3>{$layouttitle|escape:'html':'UTF-8'}</h3>
{foreach from=$layout item='panel' key='panelid'}

    <div class='le_panel' id='{$idCount|escape:'html':'UTF-8'}'>

        <div class='panel_label' id='le_panellabel_{$idCount|escape:'html':'UTF-8'}'>
          <span class='panel_name' id='le_panelname_{$idCount|escape:'html':'UTF-8'}'>
          	{capture name=panel_upper assign=panel_upper}{$panelid|upper}{/capture}
			{if $panelid eq 'default'}
          		{$mod.LBL_DEFAULT|escape:'html':'UTF-8'}
			{elseif $from_mb && isset($current_mod_strings.$panel_upper)}
                {$current_mod_strings.$panel_upper}
			{elseif !empty($translate)}
			    {sugar_translate label=$panelid|upper module=$language}
			{else}
			    {$panelid|escape:'html':'UTF-8'}
			{/if}</span>
          <span class='panel_id' id='le_panelid_{$idCount|escape:'html':'UTF-8'}'>{$panelid|escape:'html':'UTF-8'}</span>
        </div>
        {if $panelid ne 'default'}
 
        {/if}
        {counter name='idCount' assign='idCount' print=false}

        {foreach from=$panel item='row' key='rid'}
            <div class='le_row' id='{$idCoun|escape:'html':'UTF-8'}'>
            {counter name='idCount' assign='idCount' print=false}

            {foreach from=$row item='col' key='cid'}
            {assign var="field" value=$col.name}
                <div class='le_field' id='{$idCount|escape:'html':'UTF-8'}'>
                    {if ! $fromModuleBuilder && ($col.name != '(filler)')}
                    {/if}
                    {if isset($col.type) && ($col.type == 'address')}
                        {$icon_address|escape:'html':'UTF-8'}
                    {/if}
                    {if isset($col.type) && ($col.type == 'phone')}
                        {$icon_phone|escape:'html':'UTF-8'}
                    {/if}
                    {if isset($field_defs.$field.calculated) && $field_defs.$field.calculated}
                        {sugar_getimage name="SugarLogic/icon_calculated" ext=".png" alt=$mod_strings.LBL_CALCULATED other_attributes='class="right_icon" '}
                    {/if}
                    {if isset($field_defs.$field.dependency) && $field_defs.$field.dependency}
                        {sugar_getimage name="SugarLogic/icon_dependent" alt=$mod_strings.LBL_DEPENDANT ext=".png" other_attributes='class="right_icon" '}
                    {/if}
                    <span id='le_label_{$idCount}'>
                    {eval var=$col.label assign='label'}
                    {if !empty($translate) && !empty($col.label)}
                        {sugar_translate label=$label module=$language}
                    {else}
		                {if !empty($current_mod_strings[$label])}
		                    {$current_mod_strings[$label]|escape:'html':'UTF-8'}
		                {elseif !empty($mod[$label])}
		                    {$mod[$label]|escape:'html':'UTF-8'}
		                {else}
		                	{$label|escape:'html':'UTF-8'}
		                {/if}
		            {/if}</span>
                    <span class='field_name'>{$col.name|escape:'html':'UTF-8'}</span>
                    <span class='field_label'>{$col.label|escape:'html':'UTF-8'}</span>
                    <span id='le_tabindex_{$idCount|escape:'html':'UTF-8'}' class='field_tabindex'>{$col.tabindex|escape:'html':'UTF-8'}</span>
                </div>
                {counter name='idCount' assign='idCount' print=false}
            {/foreach}

        </div>
    {/foreach}

    </div>
{/foreach}

</div>
<input type='hidden' id='idCount' value='{$idCount|escape:'html':'UTF-8'}'>
</div>
