<?php
/* Smarty version 3.1.39, created on 2022-08-18 19:02:25
  from '/var/www/html/SugarEnt-Full-12.0.0/cache/modules/PdfManager/tpls/5700c5a6-1e16-11ed-b85b-6018954cf469.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_62fe4671018a56_37369801',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4799e4f4b7bfcf4c6df5c351427fa0854f25bc73' => 
    array (
      0 => '/var/www/html/SugarEnt-Full-12.0.0/cache/modules/PdfManager/tpls/5700c5a6-1e16-11ed-b85b-6018954cf469.tpl',
      1 => 1660831344,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62fe4671018a56_37369801 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/SugarEnt-Full-12.0.0/include/SugarSmarty/plugins/function.sugar_number_format.php','function'=>'smarty_function_sugar_number_format',),1=>array('file'=>'/var/www/html/SugarEnt-Full-12.0.0/include/SugarSmarty/plugins/function.sugar_currency_format.php','function'=>'smarty_function_sugar_currency_format',),));
?>
<p><span style="font-size: large;"><strong>BUSINESS CARD</strong></span></p>
<table align="left">
<tbody>
<tr>
<td><span style="font-size: medium;"><span style="background-color: #515151; color: #ffffff;">Quote Number:</span>&nbsp;<?php echo $_smarty_tpl->tpl_vars['fields']->value['quote_num'];?>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span></td>
<td><span style="font-size: medium;"><span style="background-color: #515151; color: #ffffff;">Opportunity Name:</span>&nbsp;<?php echo $_smarty_tpl->tpl_vars['fields']->value['opportunities']['name'];?>
</span></td>
</tr>
<tr>
<td><span style="font-size: medium;"><span style="background-color: #515151; color: #ffffff;">Purchase Order Num:</span>&nbsp;<?php echo $_smarty_tpl->tpl_vars['fields']->value['purchase_order_num'];?>
&nbsp; &nbsp;</span></td>
<td><span style="font-size: medium;"><span style="background-color: #515151; color: #ffffff;">Quote Stage:</span>&nbsp;<?php echo $_smarty_tpl->tpl_vars['fields']->value['quote_stage'];?>
</span></td>
</tr>
<tr>
<td><span style="font-size: medium;"><span style="background-color: #515151; color: #ffffff;">Payment Terms:</span>&nbsp;<?php echo $_smarty_tpl->tpl_vars['fields']->value['payment_terms'];?>
</span></td>
<td><span style="font-size: medium;"><span style="background-color: #515151; color: #ffffff;">Valid Until:</span>&nbsp;<?php echo $_smarty_tpl->tpl_vars['fields']->value['date_quote_expected_closed'];?>
</span></td>
</tr>
<tr>
<td><span style="font-size: medium; background-color: #515151; color: #ffffff;">Tags:&nbsp;&nbsp;<span><?php echo $_smarty_tpl->tpl_vars['fields']->value['tag'];?>
</span></span></td>
<td><span style="font-size: medium;">&nbsp;</span></td>
</tr>
</tbody>
</table>
<p>&nbsp;</p>
<hr />
<p><span style="font-size: large;"><strong>BILLING AND SHIPPING</strong></span></p>
<table>
<tbody>
<tr>
<td><span style="font-size: medium;"><span style="background-color: #515151; color: #ffffff;">Billing Account Name:</span>&nbsp;<?php echo $_smarty_tpl->tpl_vars['fields']->value['billing_accounts']['name'];?>
&nbsp; &nbsp; &nbsp;</span></td>
<td><span style="font-size: medium;"><span style="background-color: #515151; color: #ffffff;">Shipping Account Name:</span>&nbsp;<?php echo $_smarty_tpl->tpl_vars['fields']->value['shipping_accounts']['name'];?>
</span></td>
</tr>
<tr>
<td><span style="font-size: medium;"><span style="background-color: #515151; color: #ffffff;">Billing Contact Name:</span>&nbsp;<?php echo $_smarty_tpl->tpl_vars['fields']->value['billing_contacts']['first_name'];?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['fields']->value['billing_contacts']['last_name'];?>
</span></td>
<td><span style="font-size: medium;"><span style="background-color: #515151; color: #ffffff;">Shipping Contact Name:</span>&nbsp;<?php echo $_smarty_tpl->tpl_vars['fields']->value['shipping_contacts']['first_name'];?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['fields']->value['shipping_contacts']['last_name'];?>
</span></td>
</tr>
<tr>
<td>
<p><span style="font-size: medium;"><span class="text-overflow"><span style="background-color: #515151; color: #ffffff;">Billing Address:</span><br /></span><?php ob_start();
echo $_smarty_tpl->tpl_vars['fields']->value['billing_address_street'];
$_prefixVariable1 = ob_get_clean();
if ($_prefixVariable1 != '') {
echo $_smarty_tpl->tpl_vars['fields']->value['billing_address_street'];?>
 <?php }?></span><br /><span style="font-size: medium;"><?php ob_start();
echo $_smarty_tpl->tpl_vars['fields']->value['billing_address_city'];
$_prefixVariable2 = ob_get_clean();
if ($_prefixVariable2 != '') {?> <?php echo $_smarty_tpl->tpl_vars['fields']->value['billing_address_city'];?>
, <?php }?>&nbsp;<?php ob_start();
echo $_smarty_tpl->tpl_vars['fields']->value['billing_address_state'];
$_prefixVariable3 = ob_get_clean();
if ($_prefixVariable3 != '') {?> <?php echo $_smarty_tpl->tpl_vars['fields']->value['billing_address_state'];?>
 <?php }?>&nbsp;<?php ob_start();
echo $_smarty_tpl->tpl_vars['fields']->value['billing_address_postalcode'];
$_prefixVariable4 = ob_get_clean();
if ($_prefixVariable4 != '') {?> <?php echo $_smarty_tpl->tpl_vars['fields']->value['billing_address_postalcode'];?>
 <?php }?></span><br /><span style="font-size: medium;"><?php ob_start();
echo $_smarty_tpl->tpl_vars['fields']->value['billing_address_country'];
$_prefixVariable5 = ob_get_clean();
if ($_prefixVariable5 != '') {?> <?php echo $_smarty_tpl->tpl_vars['fields']->value['billing_address_country'];?>
 <?php }?></span></p>
</td>
<td><span style="font-size: medium; background-color: #515151; color: #ffffff;">Shipping Address:</span><br /><span style="font-size: medium;"><?php ob_start();
echo $_smarty_tpl->tpl_vars['fields']->value['shipping_address_street'];
$_prefixVariable6 = ob_get_clean();
if ($_prefixVariable6 != '') {?> <?php echo $_smarty_tpl->tpl_vars['fields']->value['shipping_address_street'];?>
, <?php }?></span><br /><span style="font-size: medium;"><?php ob_start();
echo $_smarty_tpl->tpl_vars['fields']->value['shipping_address_city'];
$_prefixVariable7 = ob_get_clean();
if ($_prefixVariable7 != '') {?> <?php echo $_smarty_tpl->tpl_vars['fields']->value['shipping_address_city'];?>
, <?php }?>&nbsp;<?php ob_start();
echo $_smarty_tpl->tpl_vars['fields']->value['shipping_address_state'];
$_prefixVariable8 = ob_get_clean();
if ($_prefixVariable8 != '') {?> <?php echo $_smarty_tpl->tpl_vars['fields']->value['shipping_address_state'];?>
 <?php }?> <?php ob_start();
echo $_smarty_tpl->tpl_vars['fields']->value['shipping_address_postalcode'];
$_prefixVariable9 = ob_get_clean();
if ($_prefixVariable9 != '') {?> <?php echo $_smarty_tpl->tpl_vars['fields']->value['shipping_address_postalcode'];?>
 <?php }?></span><br /><span style="font-size: medium;"><?php ob_start();
echo $_smarty_tpl->tpl_vars['fields']->value['shipping_address_country'];
$_prefixVariable10 = ob_get_clean();
if ($_prefixVariable10 != '') {
echo $_smarty_tpl->tpl_vars['fields']->value['shipping_address_country'];?>
 <?php }?></span></td>
</tr>
</tbody>
</table>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product_bundles']->value, 'bundle');
$_smarty_tpl->tpl_vars['bundle']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['bundle']->value) {
$_smarty_tpl->tpl_vars['bundle']->do_else = false;
?></p>
<p><?php if (count($_smarty_tpl->tpl_vars['bundle']->value['products'])) {?></p>
<h3><?php echo $_smarty_tpl->tpl_vars['bundle']->value['name'];?>
</h3>
<table style="height: 135px; width: 100%;" border="0">
<tbody>
<tr bgcolor="#4B4B4B">
<td width="70%"><span style="color: #ffffff;">Quantity</span></td>
<td width="175%"><span style="color: #ffffff;">Product</span></td>
<td width="140%"><span style="color: #ffffff;">Part Number</span></td>
<td width="70%"><span style="color: #ffffff;">Unit Price</span></td>
<td width="70%"><span style="color: #ffffff;">Discount Amount</span></td>
<td width="70%"><span style="color: #ffffff;">Line Item Total</span></td>
</tr>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['bundle']->value['products'], 'product');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
<tr>
<td width="70%"><?php if ((isset($_smarty_tpl->tpl_vars['product']->value['quantity']))) {
echo $_smarty_tpl->tpl_vars['product']->value['quantity'];
}?></td>
<td width="175%"><?php if ((isset($_smarty_tpl->tpl_vars['product']->value['name']))) {
echo $_smarty_tpl->tpl_vars['product']->value['name'];
}
if ((isset($_smarty_tpl->tpl_vars['product']->value['list_price']))) {?><br /><?php echo $_smarty_tpl->tpl_vars['product']->value['description'];
}?></td>
<td width="140%"><?php if ((isset($_smarty_tpl->tpl_vars['product']->value['manufacturer_name']))) {
echo $_smarty_tpl->tpl_vars['product']->value['manufacturer_name'];
}?> <?php if ((isset($_smarty_tpl->tpl_vars['product']->value['mft_part_num']))) {?><br /><?php echo $_smarty_tpl->tpl_vars['product']->value['mft_part_num'];
}?></td>
<td align="right" width="70%"><?php if ((isset($_smarty_tpl->tpl_vars['product']->value['discount_price']))) {
echo $_smarty_tpl->tpl_vars['product']->value['discount_price'];
}?></td>
<td align="right" width="70%"><?php if ((isset($_smarty_tpl->tpl_vars['product']->value['discount_amount']))) {?> <?php if (!empty($_smarty_tpl->tpl_vars['product']->value['discount_select'])) {?> <?php echo smarty_function_sugar_number_format(array('var'=>$_smarty_tpl->tpl_vars['product']->value['discount_amount']),$_smarty_tpl);?>
% <?php } else { ?> <?php echo smarty_function_sugar_currency_format(array('var'=>$_smarty_tpl->tpl_vars['product']->value['discount_amount'],'currency_id'=>$_smarty_tpl->tpl_vars['product']->value['currency_id']),$_smarty_tpl);?>
 <?php }?> <?php }?></td>
<td align="right" width="70%"><?php echo $_smarty_tpl->tpl_vars['product']->value['total_amount'];?>
</td>
</tr>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></tbody>
</table>
<table align="right">
<tbody>
<tr>
<td><?php ob_start();
echo $_smarty_tpl->tpl_vars['bundle']->value['name'];
$_prefixVariable11 = ob_get_clean();
if ($_prefixVariable11 != '') {?> <strong>Group Total</strong> <?php }?></td>
<td>
<p><?php ob_start();
echo $_smarty_tpl->tpl_vars['bundle']->value['name'];
$_prefixVariable12 = ob_get_clean();
if ($_prefixVariable12 != '') {?><strong><?php echo $_smarty_tpl->tpl_vars['bundle']->value['total'];?>
</strong> <?php }?></p>
</td>
</tr>
</tbody>
</table>
<p>&nbsp;</p>
<p><?php }?></p>
<p><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></p>
<table>
<tbody>
<tr>
<td><hr /></td>
</tr>
</tbody>
</table>
<table border="0">
<tbody>
<tr>
<td width="190%">&nbsp;</td>
<td width="55%">Discounted Subtotal</td>
<td align="right" width="45%">
<p><strong><?php echo $_smarty_tpl->tpl_vars['fields']->value['new_sub'];?>
</strong></p>
</td>
</tr>
<tr>
<td width="190%">&nbsp;</td>
<td width="55%">Tax</td>
<td align="right" width="45%"><strong><?php echo $_smarty_tpl->tpl_vars['fields']->value['tax_usdollar'];?>
</strong></td>
</tr>
<tr>
<td width="190%">&nbsp;</td>
<td width="55%">Shipping</td>
<td align="right" width="45%"><strong><?php echo $_smarty_tpl->tpl_vars['fields']->value['shipping_usdollar'];?>
</strong></td>
</tr>
<tr>
<td width="190%">&nbsp;</td>
<td width="55%">Grand Total</td>
<td align="right" width="45%"><strong><?php echo $_smarty_tpl->tpl_vars['fields']->value['total'];?>
</strong></td>
</tr>
</tbody>
</table>
<p>&nbsp;</p>
<p><span>&nbsp;</span></p><?php }
}
