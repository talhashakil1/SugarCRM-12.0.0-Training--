<?php
// WARNING: The contents of this file are auto-generated.



$viewdefs['Cases']['base']['filter']['basic']['filters'][] = array (
	'id' => 'FilterByBranchName',
	'name' => 'Filter By Branch Name',
	'filter_definition' => array(
		array(
			'branch_name' => array(
				'$empty' => 'Lahore',
			),
		),
	),
	'editable' => true,
);




$viewdefs['Cases']['base']['filter']['basic']['filters'][] = array(
	'id' => 'FilterByDateModified',
	'name' => 'Filter By Date Modified',
	'filter_definition' => array(
		array(
			'date_modified' => array(
				'$dateRange' => 'today'
			)
		)
	),
	'editable' => true,
);


$viewdefs['Cases']['base']['filter']['basic']['filters'][] = array (
	'id' => "FilterByGender",
	'name' => 'Filter By Gender',
	'filter_definition' => array(
		array(
			'gender_c' => array(
				'$in' => array (
					'Partner',
					'Competitor',
				)
			)
		)
	),
	'editable' => true,

);