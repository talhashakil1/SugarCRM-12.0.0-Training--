<?php

$dictionary['Case']['fields']['vehicle_details'] = array(
	'name' => 'vehicle_details',
	'label' => 'LBL_VEHICLE_DETAILS',
	'type' => 'enum',
	'options' => 'vehicle_details_option_list',
	'visibility_grid' => array(
		'trigger' => 'vehicle',
		'values' => array(
			'Car' => array(
				0 => '',
				1 => 'BMW',
				2 => 'Honda',
				3 => 'Jaguar',
			),
			'Bus' => array(
				0 => '',
				1 => 'Volvo',
				2 => 'Volkswagen',
				3 => 'Ford',
			),
			'Motorcycle' => array(
				0 => '',
				1 => 'Honda',
				2 => 'United',
				3 => 'Metro',
			),
		),
	),
	'required' => false,
	'readonly' => false,
);