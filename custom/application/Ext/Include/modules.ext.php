<?php
// WARNING: The contents of this file are auto-generated.
?>
<?php
// Merged from custom/Extension/application/Ext/Include/rli_unhide.ext.php

$moduleList[] = 'RevenueLineItems';
if (isset($modInvisList) && is_array($modInvisList)) {
    foreach ($modInvisList as $key => $mod) {
        if ($mod === 'RevenueLineItems') {
            unset($modInvisList[$key]);
        }
    }
}
?>
<?php
// Merged from custom/Extension/application/Ext/Include/MediaTracking.php
 
 //WARNING: The contents of this file are auto-generated
$beanList['Talha_MediaTracking'] = 'Talha_MediaTracking';
$beanFiles['Talha_MediaTracking'] = 'modules/Talha_MediaTracking/Talha_MediaTracking.php';
$moduleList[] = 'Talha_MediaTracking';


?>
<?php
// Merged from custom/Extension/application/Ext/Include/PackageTwo.php
 
 //WARNING: The contents of this file are auto-generated
$beanList['abcde_MyCustomModule'] = 'abcde_MyCustomModule';
$beanFiles['abcde_MyCustomModule'] = 'modules/abcde_MyCustomModule/abcde_MyCustomModule.php';
$moduleList[] = 'abcde_MyCustomModule';


?>
