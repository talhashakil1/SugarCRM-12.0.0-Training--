<?php
/* Smarty version 3.1.39, created on 2022-07-21 19:33:42
  from '/var/www/html/SugarEnt-Full-12.0.0/include/DetailView/footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_62d963c6632204_33251111',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fd3e824b620abc64a4d750f7d2ae2f2d1cf5eb62' => 
    array (
      0 => '/var/www/html/SugarEnt-Full-12.0.0/include/DetailView/footer.tpl',
      1 => 1649221080,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62d963c6632204_33251111 (Smarty_Internal_Template $_smarty_tpl) {
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
</form>
<?php echo '<script'; ?>
>SUGAR.util.doWhen("document.getElementById('form') != null",
        function(){ldelim}SUGAR.util.buildAccessKeyLabels();{rdelim});
<?php echo '</script'; ?>
><?php }
}
