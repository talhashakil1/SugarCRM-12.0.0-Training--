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
