<?php

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