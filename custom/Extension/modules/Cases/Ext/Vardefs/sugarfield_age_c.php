<?php
 // created: 2022-07-19 18:48:38
$dictionary['Case']['fields']['age_c']['duplicate_merge_dom_value']=0;
$dictionary['Case']['fields']['age_c']['labelValue']='Age';
$dictionary['Case']['fields']['age_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Case']['fields']['age_c']['calculated']='1';
$dictionary['Case']['fields']['age_c']['formula']='floor(divide(abs(daysUntil($my_birth_date_c)),365))';
$dictionary['Case']['fields']['age_c']['enforced']='1';
$dictionary['Case']['fields']['age_c']['dependency']='';
$dictionary['Case']['fields']['age_c']['required_formula']='';
$dictionary['Case']['fields']['age_c']['readonly_formula']='';

 ?>