<?php

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

