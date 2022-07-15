<?php

$dictionary['Case']['fields']['title_line'] = array (
      'name' => 'title line',
      'vname' => 'LBL_TEXT_LINE',
      'type' => 'text',
      'comment' => 'Full text of the note',
      'full_text_search' => 
      array (
        'enabled' => true,
        'searchable' => true,
        'boost' => 0.66,
      ),
      'rows' => 6,
      'cols' => 80,
      'duplicate_on_record_copy' => 'always',
      'dbtype' => 'longtext',
    )


?>