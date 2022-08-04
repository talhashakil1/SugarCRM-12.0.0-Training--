<?php

$viewdefs['Accounts']['base']['filter']['basic']['filters'][] = array(
    'id' => 'filterMemberOf',
    'name' => 'LBL_FILTER_MEMBER_OF',
    'filter_definition' => array(
        array(
            'account_type' => array(
                '$in' => [],
            )
        ),
    ),
    'editable' => true,
    'is_template' => true,
);