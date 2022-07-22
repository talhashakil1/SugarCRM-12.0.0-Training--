<?php

$hook_array['before_retrieve'][] = Array(
    99, 
    'Example Logic Hook - Updates account name', 
    'custom/modules/Accounts/vehicle_retrieve.php', 
    'Vehicle_Retrieve', 
    'updateVehicleNumber'
);