<?php

$viewdefs['base']['view']['customViewOne'] = array(
    'buttons' => array (
        array(
            'name' => 'alertBtn',
            'type' => 'rowaction',
            'label' => 'Alert 1',
            'event' => 'button:alertBtn:click',
            // 'showOn' => 'edit',
        ),
        array(
            'name' => 'cancelBtn',
            'type' => 'rowaction',
            'label' => 'Cancel 1',
            // 'showOn' => 'edit',
            'event' => 'button:cancelBtn:click',
        ),
    ),
);