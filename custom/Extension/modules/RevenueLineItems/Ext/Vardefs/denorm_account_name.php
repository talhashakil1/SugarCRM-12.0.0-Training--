<?php

// 'account_name'
$dictionary['RevenueLineItem']['fields']['account_name']['is_denormalized'] = true;
$dictionary['RevenueLineItem']['fields']['account_name']['denormalized_field_name'] = 'denorm_account_name';

// 'denorm_account_name'
$dictionary['RevenueLineItem']['fields']['denorm_account_name']['name'] = 'denorm_account_name';
$dictionary['RevenueLineItem']['fields']['denorm_account_name']['type'] = 'varchar';
$dictionary['RevenueLineItem']['fields']['denorm_account_name']['dbType'] = 'varchar';
$dictionary['RevenueLineItem']['fields']['denorm_account_name']['vname'] = 'LBL_ACCOUNT_NAME';
$dictionary['RevenueLineItem']['fields']['denorm_account_name']['len'] = 255;
$dictionary['RevenueLineItem']['fields']['denorm_account_name']['comment'] = 'Name of the Company';
$dictionary['RevenueLineItem']['fields']['denorm_account_name']['unified_search'] = true;
$dictionary['RevenueLineItem']['fields']['denorm_account_name']['full_text_search'] = array (
  'enabled' => true,
  'searchable' => true,
  'boost' => 1.91,
);
$dictionary['RevenueLineItem']['fields']['denorm_account_name']['audited'] = true;
$dictionary['RevenueLineItem']['fields']['denorm_account_name']['required'] = false;
$dictionary['RevenueLineItem']['fields']['denorm_account_name']['importable'] = 'required';
$dictionary['RevenueLineItem']['fields']['denorm_account_name']['duplicate_on_record_copy'] = 'always';
$dictionary['RevenueLineItem']['fields']['denorm_account_name']['merge_filter'] = 'selected';
$dictionary['RevenueLineItem']['fields']['denorm_account_name']['denorm_from_module'] = 'Accounts';
$dictionary['RevenueLineItem']['fields']['denorm_account_name']['studio'] = false;
