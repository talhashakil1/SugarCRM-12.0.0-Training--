<?php
// WARNING: The contents of this file are auto-generated.
?>
<?php
// Merged from custom/Extension/modules/Cases/Ext/Vardefs/sugarfield_age_c.php

 // created: 2022-07-14 11:42:24
$dictionary['Case']['fields']['age_c']['labelValue']='Age';
$dictionary['Case']['fields']['age_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Case']['fields']['age_c']['enforced']='';
$dictionary['Case']['fields']['age_c']['dependency']='';
$dictionary['Case']['fields']['age_c']['required_formula']='';
$dictionary['Case']['fields']['age_c']['readonly_formula']='';

 
?>
<?php
// Merged from custom/Extension/modules/Cases/Ext/Vardefs/sugarfield_hiring_date_c.php

 // created: 2022-07-14 11:49:05
$dictionary['Case']['fields']['hiring_date_c']['labelValue']='hiring date';
$dictionary['Case']['fields']['hiring_date_c']['enforced']='';
$dictionary['Case']['fields']['hiring_date_c']['dependency']='';
$dictionary['Case']['fields']['hiring_date_c']['required_formula']='';
$dictionary['Case']['fields']['hiring_date_c']['readonly_formula']='';

 
?>
<?php
// Merged from custom/Extension/modules/Cases/Ext/Vardefs/sugarfield_company_c.php

 // created: 2022-07-14 11:50:21
$dictionary['Case']['fields']['company_c']['labelValue']='company';
$dictionary['Case']['fields']['company_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Case']['fields']['company_c']['enforced']='';
$dictionary['Case']['fields']['company_c']['dependency']='';
$dictionary['Case']['fields']['company_c']['required_formula']='';
$dictionary['Case']['fields']['company_c']['readonly_formula']='';

 
?>
<?php
// Merged from custom/Extension/modules/Cases/Ext/Vardefs/sugarfield_relate_contact_c.php

 // created: 2022-07-14 12:07:39
$dictionary['Case']['fields']['relate_contact_c']['labelValue']='relate contact';
$dictionary['Case']['fields']['relate_contact_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Case']['fields']['relate_contact_c']['enforced']='';
$dictionary['Case']['fields']['relate_contact_c']['dependency']='';
$dictionary['Case']['fields']['relate_contact_c']['required_formula']='';
$dictionary['Case']['fields']['relate_contact_c']['readonly_formula']='';

 
?>
<?php
// Merged from custom/Extension/modules/Cases/Ext/Vardefs/sugarfield_province_c.php

 // created: 2022-07-14 12:13:27
$dictionary['Case']['fields']['province_c']['labelValue']='province';
$dictionary['Case']['fields']['province_c']['dependency']='';
$dictionary['Case']['fields']['province_c']['required_formula']='';
$dictionary['Case']['fields']['province_c']['readonly_formula']='';
$dictionary['Case']['fields']['province_c']['visibility_grid']='';

 
?>
<?php
// Merged from custom/Extension/modules/Cases/Ext/Vardefs/sugarfield_city_c.php

 // created: 2022-07-14 16:01:47
$dictionary['Case']['fields']['city_c']['labelValue']='city';
$dictionary['Case']['fields']['city_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Case']['fields']['city_c']['enforced']='';
$dictionary['Case']['fields']['city_c']['dependency']='';
$dictionary['Case']['fields']['city_c']['required_formula']='';
$dictionary['Case']['fields']['city_c']['readonly_formula']='';

 
?>
<?php
// Merged from custom/Extension/modules/Cases/Ext/Vardefs/sugarfield_zip_code.php



$dictionary['Case']['fields']['zip_code'] = array(
	'name' => 'zip code',
	'label' => 'LBL_ZIP_CODE',
    'type' => 'int',
	'help' => '',
	'comment' => '',
	'default_value' => 13,
	'max_size' => 255,
	'required' => false, // true or false
	'reportable' => true, // true or false
	'audited' => false, // true or false
	'importable' => 'true', // 'true', 'false', 'required'
	'duplicate_merge' => false, // true or false
);


?>
<?php
// Merged from custom/Extension/modules/Cases/Ext/Vardefs/sugarfield_birth_date.php



$dictionary['Case']['fields']['birth_date'] = array (
      'name' => 'birth date',
      'vname' => 'LBL_BIRTH_DATE',
      'type' => 'datetime',
      'group' => 'created_by_name',
      'comment' => 'Date record created',
      'enable_range_search' => true,
      'options' => 'date_range_search_dom',
      'studio' => 
      array (
        'portaleditview' => false,
      ),
      'duplicate_on_record_copy' => 'no',
      'readonly' => true,
      'massupdate' => false,
      'full_text_search' => 
      array (
        'enabled' => true,
        'searchable' => false,
      ),
    );


?>
<?php
// Merged from custom/Extension/modules/Cases/Ext/Vardefs/sugarfield_title_line_c.php


$dictionary['Case']['fields']['title_line'] = array (
      'name' => 'title line',
      'vname' => 'LBL_TEXT_LINE',
      'type' => 'text',
      'comment' => 'Full text of the note',
      'full_text_search' => 
      array (
        'enabled' => true,
        'searchable' => true,
        'boost' => 0.66,
      ),
      'rows' => 6,
      'cols' => 80,
      'duplicate_on_record_copy' => 'always',
      'dbtype' => 'longtext',
    )



?>
<?php
// Merged from custom/Extension/modules/Cases/Ext/Vardefs/sugarfield_customer_id_c.php


$dictionary['Case']['fields']['customer_id'] = array (
      'name' => 'customer id',
      'type' => 'relate',
      'dbType' => 'id',
      'rname' => 'id',
      'id_name' => 'customer_id',
      'reportable' => false,
      'vname' => 'LBL_CUSTOMER_ID',
      'audited' => true,
      'massupdate' => false,
      'comment' => 'The customer id to which the order is associated',
    )



?>
<?php
// Merged from custom/Extension/modules/Cases/Ext/Vardefs/sugarfield_gender_c.php

 // created: 2022-07-15 12:23:46
$dictionary['Case']['fields']['gender_c']['labelValue']='Gender';
$dictionary['Case']['fields']['gender_c']['dependency']='';
$dictionary['Case']['fields']['gender_c']['required_formula']='';
$dictionary['Case']['fields']['gender_c']['readonly_formula']='';
$dictionary['Case']['fields']['gender_c']['visibility_grid']='';

 
?>
<?php
// Merged from custom/Extension/modules/Cases/Ext/Vardefs/sugarfield_branch_name_c.php



$dictionary['Case']['fields']['branch_name'] = array (
      'labelValue' => 'branch name',
      'dependency' => '',
      'required_formula' => '',
      'readonly_formula' => '',
      'visibility_grid' => '',
      'required' => false,
      'readonly' => false,
      'name' => 'branch_name',
      'vname' => 'LBL_BRANCH_NAME',
      'type' => 'enum',
      'massupdate' => true,
      'hidemassupdate' => false,
      'no_default' => false,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'enabled',
      'duplicate_merge_dom_value' => 1,
      'audited' => false,
      'reportable' => true,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'pii' => false,
      'calculated' => false,
      'len' => 100,
      'size' => '20',
      'options' => 'branch_name_options',
      'default' => NULL,
    );


?>
