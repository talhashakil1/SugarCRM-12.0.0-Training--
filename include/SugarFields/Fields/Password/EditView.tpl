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
<input type='password' id='{{if empty($displayParams.idName)}}{{sugarvar key='name'}}{{else}}{{$displayParams.idName}}{{/if}}' 
name='{{if empty($displayParams.idName)}}{{sugarvar key='name'}}{{else}}{{$displayParams.idName}}{{/if}}' 
size='{{$displayParams.size|default:30}}' value='{{sugarvar key='value'}}' title='{{$vardef.help|escape:"hexentity"}}' tabindex='{{$tabindex}}'	{{if !empty($displayParams.accesskey)}} accesskey='{{$displayParams.accesskey}}' {{/if}} >
