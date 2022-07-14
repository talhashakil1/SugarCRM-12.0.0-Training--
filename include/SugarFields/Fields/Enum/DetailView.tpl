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
{* This is here so currency fields, who don't really have dropdown
lists can work. *}
{if is_string({{sugarvar key='options' string=true}})}
<input type="hidden" class="sugar_field" id="{{sugarvar key='name'}}" value="{{sugarvar key='options'}}">
{{sugarvar key='options'}}
{else}
<input type="hidden" class="sugar_field" id="{{sugarvar key='name'}}" value="{{sugarvar key='value'}}">
    {assign var="field_options" value={{sugarvar key='options' string="true"}} }
    {assign var="field_val" value={{sugarvar key='value' string="true"}} }
    {$field_options[$field_val]}
{/if}
{{if !empty($displayParams.enableConnectors)}}
{{sugarvar_connector view='DetailView'}}
{{/if}}
