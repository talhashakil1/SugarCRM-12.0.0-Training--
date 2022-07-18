<?php
$viewdefs['Cases'] = 
array (
  'base' => 
  array (
    'view' => 
    array (
      'preview' => 
      array (
        'panels' => 
        array (
          0 => 
          array (
            'name' => 'panel_header',
            'header' => true,
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'picture',
                'type' => 'avatar',
                'size' => 'large',
                'dismiss_label' => true,
                'readonly' => true,
              ),
              1 => 'name',
              4 => 
              array (
                'name' => 'is_escalated',
                'type' => 'badge',
                'badge_label' => 'LBL_ESCALATED',
                'warning_level' => 'important',
                'dismiss_label' => true,
              ),
            ),
          ),
          1 => 
          array (
            'name' => 'panel_body',
            'label' => 'LBL_RECORD_BODY',
            'columns' => 2,
            'placeholders' => true,
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'case_number',
                'readonly' => true,
              ),
              1 => 'priority',
              2 => 'account_name',
              3 => 'business_center_name',
              4 => 'portal_viewable',
              5 => 'type',
              6 => 'source',
              7 => 'status',
              8 => 'follow_up_datetime',
              9 => 'resolved_datetime',
              10 => 'assigned_user_name',
              11 => 'primary_contact_name',
              12 => 
              array (
                'name' => 'description',
                'nl2br' => true,
                'span' => 12,
              ),
              13 => 
              array (
                'name' => 'commentlog',
                'label' => 'LBL_COMMENTLOG',
                'span' => 12,
              ),
              14 => 
              array (
                'name' => 'attachment_list',
                'label' => 'LBL_ATTACHMENTS',
                'type' => 'multi-attachments',
                'link' => 'attachments',
                'module' => 'Notes',
                'modulefield' => 'filename',
                'bLabel' => 'LBL_ADD_ATTACHMENT',
                'span' => 12,
                'max_num' => -1,
                'related_fields' => 
                array (
                  0 => 'filename',
                  1 => 'file_mime_type',
                ),
                'fields' => 
                array (
                  0 => 'name',
                  1 => 'filename',
                  2 => 'file_size',
                  3 => 'file_source',
                  4 => 'file_mime_type',
                  5 => 'file_ext',
                  6 => 'upload_id',
                ),
              ),
              15 => 
              array (
                'name' => 'tag',
                'span' => 12,
              ),
              16 => 'gender_c',
              17 => 'branch_name',
            ),
          ),
          2 => 
          array (
            'name' => 'panel_hidden',
            'label' => 'LBL_RECORD_SHOWMORE',
            'hide' => true,
            'columns' => 2,
            'placeholders' => true,
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'resolution',
                'nl2br' => true,
                'span' => 12,
              ),
              1 => 
              array (
              ),
              2 => 
              array (
                'name' => 'date_entered_by',
                'readonly' => true,
                'inline' => true,
                'type' => 'fieldset',
                'label' => 'LBL_DATE_ENTERED',
                'fields' => 
                array (
                  0 => 
                  array (
                    'name' => 'date_entered',
                  ),
                  1 => 
                  array (
                    'type' => 'label',
                    'default_value' => 'LBL_BY',
                  ),
                  2 => 
                  array (
                    'name' => 'created_by_name',
                  ),
                ),
              ),
              3 => 'team_name',
              4 => 
              array (
                'name' => 'date_modified_by',
                'readonly' => true,
                'inline' => true,
                'type' => 'fieldset',
                'label' => 'LBL_DATE_MODIFIED',
                'fields' => 
                array (
                  0 => 
                  array (
                    'name' => 'date_modified',
                  ),
                  1 => 
                  array (
                    'type' => 'label',
                    'default_value' => 'LBL_BY',
                  ),
                  2 => 
                  array (
                    'name' => 'modified_by_name',
                  ),
                ),
              ),
              5 => 
              array (
                'name' => 'request_close',
                'readonly' => true,
                'label' => 'LBL_REQUEST_CLOSE',
              ),
              6 => 
              array (
                'name' => 'request_close_date',
                'readonly' => true,
                'label' => 'LBL_REQUEST_CLOSE_DATE',
              ),
            ),
          ),
        ),
        'templateMeta' => 
        array (
          'maxColumns' => 1,
        ),
      ),
    ),
  ),
);
