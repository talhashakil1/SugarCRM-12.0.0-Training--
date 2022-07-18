<?php

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