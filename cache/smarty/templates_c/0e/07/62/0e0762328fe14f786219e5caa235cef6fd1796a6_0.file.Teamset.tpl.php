<?php
/* Smarty version 3.1.39, created on 2022-08-18 18:48:12
  from '/var/www/html/SugarEnt-Full-12.0.0/include/SugarFields/Fields/Teamset/Teamset.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_62fe431c29b156_48794279',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0e0762328fe14f786219e5caa235cef6fd1796a6' => 
    array (
      0 => '/var/www/html/SugarEnt-Full-12.0.0/include/SugarFields/Fields/Teamset/Teamset.tpl',
      1 => 1649221080,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62fe431c29b156_48794279 (Smarty_Internal_Template $_smarty_tpl) {
?>{*
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
{sugarvar_teamset parentFieldArray=<?php echo $_smarty_tpl->tpl_vars['parentFieldArray']->value;?>
 vardef=$fields.team_name tabindex='<?php echo $_smarty_tpl->tpl_vars['tabindex']->value;?>
' display='<?php echo $_smarty_tpl->tpl_vars['displayParams']->value['display'];?>
' labelSpan='<?php echo $_smarty_tpl->tpl_vars['displayParams']->value['labelSpan'];?>
' fieldSpan='<?php echo $_smarty_tpl->tpl_vars['displayParams']->value['fieldSpan'];?>
' formName='<?php echo $_smarty_tpl->tpl_vars['displayParams']->value['formName'];?>
' tabindex=1 displayType='<?php echo $_smarty_tpl->tpl_vars['renderView']->value;?>
' <?php if (!empty($_smarty_tpl->tpl_vars['displayParams']->value['idName'])) {?> idName='<?php echo $_smarty_tpl->tpl_vars['displayParams']->value['idName'];?>
'<?php }?> 	<?php if (!empty($_smarty_tpl->tpl_vars['displayParams']->value['accesskey'])) {?> accesskey='<?php echo $_smarty_tpl->tpl_vars['displayParams']->value['accesskey'];?>
' <?php }?> }
<?php }
}
