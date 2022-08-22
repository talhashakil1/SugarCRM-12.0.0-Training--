<?php 
 $GLOBALS["dictionary"]["Call"]=array (
  'table' => 'calls',
  'audited' => true,
  'comment' => 'A Call is an activity representing a phone call',
  'activity_enabled' => true,
  'unified_search' => true,
  'full_text_search' => true,
  'unified_search_default_enabled' => true,
  'fields' => 
  array (
    'id' => 
    array (
      'name' => 'id',
      'vname' => 'LBL_ID',
      'type' => 'id',
      'required' => true,
      'reportable' => true,
      'duplicate_on_record_copy' => 'no',
      'comment' => 'Unique identifier',
      'mandatory_fetch' => true,
    ),
    'name' => 
    array (
      'name' => 'name',
      'vname' => 'LBL_SUBJECT',
      'dbType' => 'varchar',
      'type' => 'name',
      'len' => '255',
      'comment' => 'Brief description of the call',
      'unified_search' => true,
      'full_text_search' => 
      array (
        'enabled' => true,
        'searchable' => true,
        'boost' => 1.41,
      ),
      'required' => true,
      'importable' => 'required',
    ),
    'date_entered' => 
    array (
      'name' => 'date_entered',
      'vname' => 'LBL_DATE_ENTERED',
      'type' => 'datetime',
      'group' => 'created_by_name',
      'comment' => 'Date record created',
      'enable_range_search' => true,
      'options' => 'date_range_search_dom',
      'studio' => 
      array (
        'portaleditview' => false,
      ),
      'duplicate_on_record_copy' => 'no',
      'readonly' => true,
      'massupdate' => false,
      'full_text_search' => 
      array (
        'enabled' => true,
        'searchable' => false,
      ),
    ),
    'date_modified' => 
    array (
      'name' => 'date_modified',
      'vname' => 'LBL_DATE_MODIFIED',
      'type' => 'datetime',
      'group' => 'modified_by_name',
      'comment' => 'Date record last modified',
      'enable_range_search' => true,
      'full_text_search' => 
      array (
        'enabled' => true,
        'searchable' => false,
        'sortable' => true,
      ),
      'studio' => 
      array (
        'portaleditview' => false,
      ),
      'options' => 'date_range_search_dom',
      'duplicate_on_record_copy' => 'no',
      'readonly' => true,
      'massupdate' => false,
    ),
    'modified_user_id' => 
    array (
      'name' => 'modified_user_id',
      'rname' => 'user_name',
      'id_name' => 'modified_user_id',
      'vname' => 'LBL_MODIFIED',
      'type' => 'assigned_user_name',
      'table' => 'users',
      'isnull' => false,
      'group' => 'modified_by_name',
      'dbType' => 'id',
      'reportable' => true,
      'comment' => 'User who last modified record',
      'massupdate' => false,
      'duplicate_on_record_copy' => 'no',
      'readonly' => true,
      'full_text_search' => 
      array (
        'enabled' => true,
        'searchable' => false,
        'type' => 'id',
        'aggregations' => 
        array (
          'modified_user_id' => 
          array (
            'type' => 'MyItems',
            'label' => 'LBL_AGG_MODIFIED_BY_ME',
          ),
        ),
      ),
      'processes' => 
      array (
        'types' => 
        array (
          'RR' => false,
          'ALL' => true,
        ),
      ),
    ),
    'modified_by_name' => 
    array (
      'name' => 'modified_by_name',
      'vname' => 'LBL_MODIFIED',
      'type' => 'relate',
      'reportable' => false,
      'source' => 'non-db',
      'rname' => 'full_name',
      'table' => 'users',
      'id_name' => 'modified_user_id',
      'module' => 'Users',
      'link' => 'modified_user_link',
      'duplicate_merge' => 'disabled',
      'massupdate' => false,
      'duplicate_on_record_copy' => 'no',
      'readonly' => true,
      'sort_on' => 
      array (
        0 => 'last_name',
      ),
      'exportable' => true,
    ),
    'created_by' => 
    array (
      'name' => 'created_by',
      'rname' => 'user_name',
      'id_name' => 'modified_user_id',
      'vname' => 'LBL_CREATED',
      'type' => 'assigned_user_name',
      'table' => 'users',
      'isnull' => false,
      'dbType' => 'id',
      'group' => 'created_by_name',
      'comment' => 'User who created record',
      'massupdate' => false,
      'duplicate_on_record_copy' => 'no',
      'readonly' => true,
      'full_text_search' => 
      array (
        'enabled' => true,
        'searchable' => false,
        'type' => 'id',
        'aggregations' => 
        array (
          'created_by' => 
          array (
            'type' => 'MyItems',
            'label' => 'LBL_AGG_CREATED_BY_ME',
          ),
        ),
      ),
      'processes' => 
      array (
        'types' => 
        array (
          'RR' => false,
          'ALL' => true,
        ),
      ),
    ),
    'created_by_name' => 
    array (
      'name' => 'created_by_name',
      'vname' => 'LBL_CREATED',
      'type' => 'relate',
      'reportable' => false,
      'link' => 'created_by_link',
      'rname' => 'full_name',
      'source' => 'non-db',
      'table' => 'users',
      'id_name' => 'created_by',
      'module' => 'Users',
      'duplicate_merge' => 'disabled',
      'massupdate' => false,
      'duplicate_on_record_copy' => 'no',
      'readonly' => true,
      'sort_on' => 
      array (
        0 => 'last_name',
      ),
      'exportable' => true,
    ),
    'description' => 
    array (
      'name' => 'description',
      'vname' => 'LBL_DESCRIPTION',
      'type' => 'text',
      'comment' => 'Full text of the note',
      'full_text_search' => 
      array (
        'enabled' => true,
        'searchable' => true,
        'boost' => 0.54,
      ),
      'rows' => 6,
      'cols' => 80,
      'duplicate_on_record_copy' => 'always',
    ),
    'deleted' => 
    array (
      'name' => 'deleted',
      'vname' => 'LBL_DELETED',
      'type' => 'bool',
      'default' => '0',
      'reportable' => false,
      'duplicate_on_record_copy' => 'no',
      'comment' => 'Record deletion indicator',
    ),
    'created_by_link' => 
    array (
      'name' => 'created_by_link',
      'type' => 'link',
      'relationship' => 'calls_created_by',
      'vname' => 'LBL_CREATED_BY_USER',
      'link_type' => 'one',
      'module' => 'Users',
      'bean_name' => 'User',
      'source' => 'non-db',
    ),
    'modified_user_link' => 
    array (
      'name' => 'modified_user_link',
      'type' => 'link',
      'relationship' => 'calls_modified_user',
      'vname' => 'LBL_MODIFIED_BY_USER',
      'link_type' => 'one',
      'module' => 'Users',
      'bean_name' => 'User',
      'source' => 'non-db',
    ),
    'activities' => 
    array (
      'name' => 'activities',
      'type' => 'link',
      'relationship' => 'call_activities',
      'vname' => 'LBL_ACTIVITY_STREAM',
      'link_type' => 'many',
      'module' => 'Activities',
      'bean_name' => 'Activity',
      'source' => 'non-db',
    ),
    'internal_notes' => 
    array (
      'name' => 'internal_notes',
      'vname' => 'LBL_INTERNAL_NOTES',
      'type' => 'text',
      'comment' => 'Internal notes for the call',
    ),
    'duration_hours' => 
    array (
      'name' => 'duration_hours',
      'vname' => 'LBL_DURATION_HOURS',
      'type' => 'int',
      'comment' => 'Call duration, hours portion',
      'required' => true,
      'massupdate' => false,
      'studio' => false,
      'processes' => true,
      'default' => 0,
      'group' => 'end_date',
      'group_label' => 'LBL_DATE_END',
    ),
    'duration_minutes' => 
    array (
      'name' => 'duration_minutes',
      'vname' => 'LBL_DURATION_MINUTES',
      'type' => 'enum',
      'dbType' => 'int',
      'options' => 'duration_intervals',
      'group' => 'end_date',
      'group_label' => 'LBL_DATE_END',
      'importable' => 'required',
      'len' => '2',
      'comment' => 'Call duration, minutes portion',
      'required' => true,
      'massupdate' => false,
      'studio' => false,
      'processes' => true,
    ),
    'date_start' => 
    array (
      'name' => 'date_start',
      'vname' => 'LBL_CALENDAR_START_DATE',
      'type' => 'datetimecombo',
      'dbType' => 'datetime',
      'comment' => 'Date in which call is schedule to (or did) start',
      'importable' => 'required',
      'required' => true,
      'massupdate' => false,
      'enable_range_search' => true,
      'options' => 'date_range_search_dom',
      'validation' => 
      array (
        'type' => 'isbefore',
        'compareto' => 'date_end',
        'blank' => false,
      ),
      'studio' => 
      array (
        'recordview' => false,
        'wirelesseditview' => false,
      ),
      'full_text_search' => 
      array (
        'enabled' => true,
        'searchable' => false,
      ),
    ),
    'date_end' => 
    array (
      'name' => 'date_end',
      'vname' => 'LBL_CALENDAR_END_DATE',
      'type' => 'datetimecombo',
      'dbType' => 'datetime',
      'massupdate' => false,
      'comment' => 'Date is which call is scheduled to (or did) end',
      'enable_range_search' => true,
      'options' => 'date_range_search_dom',
      'studio' => 
      array (
        'recordview' => false,
        'wirelesseditview' => false,
      ),
      'readonly' => true,
      'full_text_search' => 
      array (
        'enabled' => true,
        'searchable' => false,
      ),
      'group' => 'end_date',
      'group_label' => 'LBL_DATE_END',
    ),
    'parent_type' => 
    array (
      'name' => 'parent_type',
      'vname' => 'LBL_PARENT_TYPE',
      'type' => 'parent_type',
      'dbType' => 'varchar',
      'required' => false,
      'group' => 'parent_name',
      'options' => 'parent_type_display',
      'len' => 255,
      'studio' => 
      array (
        'wirelesslistview' => false,
      ),
      'comment' => 'The Sugar object to which the call is related',
    ),
    'parent_name' => 
    array (
      'name' => 'parent_name',
      'parent_type' => 'record_type_display',
      'type_name' => 'parent_type',
      'id_name' => 'parent_id',
      'vname' => 'LBL_LIST_RELATED_TO',
      'type' => 'parent',
      'group' => 'parent_name',
      'source' => 'non-db',
      'options' => 'parent_type_display',
      'studio' => true,
    ),
    'status' => 
    array (
      'name' => 'status',
      'vname' => 'LBL_STATUS',
      'type' => 'enum',
      'len' => 100,
      'options' => 'call_status_dom',
      'comment' => 'The status of the call (Held, Not Held, etc.)',
      'required' => true,
      'importable' => 'required',
      'default' => 'Planned',
      'duplicate_on_record_copy' => 'no',
      'studio' => 
      array (
        'detailview' => false,
      ),
      'full_text_search' => 
      array (
        'enabled' => true,
        'searchable' => false,
      ),
    ),
    'direction' => 
    array (
      'name' => 'direction',
      'vname' => 'LBL_DIRECTION',
      'type' => 'enum',
      'len' => 100,
      'options' => 'call_direction_dom',
      'comment' => 'Indicates whether call is inbound or outbound',
    ),
    'parent_id' => 
    array (
      'name' => 'parent_id',
      'vname' => 'LBL_LIST_RELATED_TO_ID',
      'type' => 'id',
      'group' => 'parent_name',
      'reportable' => false,
      'comment' => 'The ID of the parent Sugar object identified by parent_type',
    ),
    'reminder_checked' => 
    array (
      'name' => 'reminder_checked',
      'vname' => 'LBL_REMINDER',
      'type' => 'bool',
      'source' => 'non-db',
      'comment' => 'checkbox indicating whether or not the reminder value is set (Meta-data only)',
      'massupdate' => false,
      'studio' => false,
    ),
    'reminder_time' => 
    array (
      'name' => 'reminder_time',
      'vname' => 'LBL_POPUP_REMINDER_TIME',
      'type' => 'enum',
      'dbType' => 'int',
      'options' => 'reminder_time_options',
      'reportable' => false,
      'massupdate' => false,
      'default' => -1,
      'comment' => 'Specifies when a reminder alert should be issued; -1 means no alert; otherwise the number of seconds prior to the start',
      'studio' => 
      array (
        'recordview' => false,
        'wirelesseditview' => false,
        'previewview' => false,
      ),
    ),
    'email_reminder_checked' => 
    array (
      'name' => 'email_reminder_checked',
      'vname' => 'LBL_EMAIL_REMINDER',
      'type' => 'bool',
      'source' => 'non-db',
      'comment' => 'checkbox indicating whether or not the email reminder value is set (Meta-data only)',
      'massupdate' => false,
      'studio' => false,
    ),
    'email_reminder_time' => 
    array (
      'name' => 'email_reminder_time',
      'vname' => 'LBL_EMAIL_REMINDER_TIME',
      'type' => 'enum',
      'dbType' => 'int',
      'options' => 'reminder_time_options',
      'reportable' => false,
      'massupdate' => false,
      'default' => -1,
      'comment' => 'Specifies when a email reminder alert should be issued; -1 means no alert; otherwise the number of seconds prior to the start',
      'studio' => 
      array (
        'recordview' => false,
        'wirelesseditview' => false,
        'previewview' => false,
      ),
    ),
    'email_reminder_sent' => 
    array (
      'name' => 'email_reminder_sent',
      'vname' => 'LBL_EMAIL_REMINDER_SENT',
      'default' => 0,
      'type' => 'bool',
      'comment' => 'Whether email reminder is already sent',
      'studio' => false,
      'massupdate' => false,
    ),
    'outlook_id' => 
    array (
      'name' => 'outlook_id',
      'vname' => 'LBL_OUTLOOK_ID',
      'type' => 'varchar',
      'len' => '255',
      'reportable' => false,
      'comment' => 'When the Sugar Plug-in for Microsoft Outlook syncs an Outlook appointment, this is the Outlook appointment item ID',
      'studio' => false,
    ),
    'accept_status' => 
    array (
      'name' => 'accept_status',
      'vname' => 'LBL_ACCEPT_STATUS',
      'dbType' => 'varchar',
      'type' => 'varchar',
      'len' => '20',
      'source' => 'non-db',
    ),
    'set_accept_links' => 
    array (
      'name' => 'set_accept_links',
      'vname' => 'LBL_ACCEPT_LINK',
      'dbType' => 'varchar',
      'type' => 'varchar',
      'len' => '20',
      'source' => 'non-db',
    ),
    'contact_name' => 
    array (
      'name' => 'contact_name',
      'rname' => 'name',
      'db_concat_fields' => 
      array (
        0 => 'first_name',
        1 => 'last_name',
      ),
      'id_name' => 'contact_id',
      'massupdate' => false,
      'vname' => 'LBL_CONTACT_NAME',
      'type' => 'relate',
      'link' => 'contacts',
      'table' => 'contacts',
      'isnull' => 'true',
      'module' => 'Contacts',
      'join_name' => 'contacts',
      'dbType' => 'varchar',
      'source' => 'non-db',
      'len' => 255,
      'importable' => 'false',
      'studio' => false,
    ),
    'opportunities' => 
    array (
      'name' => 'opportunities',
      'type' => 'link',
      'relationship' => 'opportunity_calls',
      'source' => 'non-db',
      'link_type' => 'one',
      'vname' => 'LBL_OPPORTUNITY',
    ),
    'leads' => 
    array (
      'name' => 'leads',
      'type' => 'link',
      'relationship' => 'calls_leads',
      'source' => 'non-db',
      'vname' => 'LBL_LEADS',
    ),
    'lead_id' => 
    array (
      'name' => 'lead_id',
      'type' => 'relate',
      'rname' => 'id',
      'vname' => 'LBL_LEAD_ID',
      'link' => 'leads',
      'source' => 'non-db',
      'studio' => false,
    ),
    'lead_name' => 
    array (
      'name' => 'lead_name',
      'rname' => 'name',
      'db_concat_fields' => 
      array (
        0 => 'first_name',
        1 => 'last_name',
      ),
      'id_name' => 'lead_id',
      'massupdate' => false,
      'vname' => 'LBL_LEAD_NAME',
      'type' => 'relate',
      'link' => 'leads',
      'table' => 'leads',
      'isnull' => 'true',
      'module' => 'Leads',
      'join_name' => 'leads',
      'dbType' => 'varchar',
      'source' => 'non-db',
      'len' => 255,
      'importable' => 'false',
      'studio' => false,
    ),
    'project' => 
    array (
      'name' => 'project',
      'type' => 'link',
      'relationship' => 'projects_calls',
      'source' => 'non-db',
      'vname' => 'LBL_PROJECTS',
    ),
    'cases' => 
    array (
      'name' => 'cases',
      'type' => 'link',
      'relationship' => 'case_calls',
      'source' => 'non-db',
      'link_type' => 'one',
      'vname' => 'LBL_CASE',
    ),
    'accounts' => 
    array (
      'name' => 'accounts',
      'type' => 'link',
      'relationship' => 'account_calls',
      'module' => 'Accounts',
      'bean_name' => 'Account',
      'source' => 'non-db',
      'vname' => 'LBL_ACCOUNT',
    ),
    'revenuelineitems' => 
    array (
      'name' => 'revenuelineitems',
      'type' => 'link',
      'relationship' => 'revenuelineitem_calls',
      'module' => 'RevenueLineItems',
      'bean_name' => 'RevenueLineItem',
      'source' => 'non-db',
      'vname' => 'LBL_REVENUELINEITEMS',
      'workflow' => true,
    ),
    'products' => 
    array (
      'name' => 'products',
      'type' => 'link',
      'relationship' => 'product_calls',
      'module' => 'Products',
      'bean_name' => 'Product',
      'source' => 'non-db',
      'vname' => 'LBL_PRODUCTS',
    ),
    'bugs' => 
    array (
      'name' => 'bugs',
      'type' => 'link',
      'relationship' => 'bug_calls',
      'source' => 'non-db',
      'vname' => 'LBL_BUGS',
      'module' => 'Bugs',
    ),
    'contacts' => 
    array (
      'name' => 'contacts',
      'type' => 'link',
      'module' => 'Contacts',
      'relationship' => 'calls_contacts',
      'source' => 'non-db',
      'vname' => 'LBL_CONTACTS',
    ),
    'prospects' => 
    array (
      'name' => 'prospects',
      'type' => 'link',
      'relationship' => 'prospect_calls',
      'source' => 'non-db',
      'vname' => 'LBL_PROSPECTS',
      'module' => 'Prospects',
    ),
    'quotes' => 
    array (
      'name' => 'quotes',
      'type' => 'link',
      'relationship' => 'quote_calls',
      'source' => 'non-db',
      'vname' => 'LBL_QUOTES',
    ),
    'users' => 
    array (
      'name' => 'users',
      'type' => 'link',
      'relationship' => 'calls_users',
      'source' => 'non-db',
      'vname' => 'LBL_USERS',
    ),
    'accept_status_users' => 
    array (
      'massupdate' => false,
      'name' => 'accept_status_users',
      'type' => 'enum',
      'studio' => 'false',
      'source' => 'non-db',
      'vname' => 'LBL_ACCEPT_STATUS',
      'options' => 'dom_meeting_accept_status',
      'importable' => 'false',
      'link' => 'users',
      'rname_link' => 'accept_status',
    ),
    'notes' => 
    array (
      'name' => 'notes',
      'type' => 'link',
      'relationship' => 'calls_notes',
      'module' => 'Notes',
      'bean_name' => 'Note',
      'source' => 'non-db',
      'vname' => 'LBL_NOTES',
    ),
    'messages' => 
    array (
      'name' => 'messages',
      'type' => 'link',
      'relationship' => 'calls_messages',
      'module' => 'Notes',
      'bean_name' => 'Note',
      'source' => 'non-db',
      'vname' => 'LBL_MESSAGES',
    ),
    'escalations' => 
    array (
      'name' => 'escalations',
      'type' => 'link',
      'relationship' => 'escalation_calls',
      'source' => 'non-db',
      'vname' => 'LBL_ESCALATIONS',
    ),
    'assigned_user_link' => 
    array (
      'name' => 'assigned_user_link',
      'type' => 'link',
      'relationship' => 'calls_assigned_user',
      'vname' => 'LBL_ASSIGNED_TO_USER',
      'link_type' => 'one',
      'module' => 'Users',
      'bean_name' => 'User',
      'source' => 'non-db',
      'duplicate_merge' => 'enabled',
      'id_name' => 'assigned_user_id',
      'table' => 'users',
      'side' => 'right',
    ),
    'contact_id' => 
    array (
      'name' => 'contact_id',
      'type' => 'relate',
      'rname' => 'id',
      'vname' => 'LBL_CONTACT_ID',
      'link' => 'contacts',
      'source' => 'non-db',
      'studio' => false,
    ),
    'repeat_type' => 
    array (
      'name' => 'repeat_type',
      'vname' => 'LBL_CALENDAR_REPEAT_TYPE',
      'type' => 'enum',
      'len' => 36,
      'options' => 'repeat_type_dom',
      'comment' => 'Type of recurrence',
      'importable' => 'false',
      'massupdate' => false,
      'reportable' => false,
      'studio' => 'false',
    ),
    'repeat_interval' => 
    array (
      'name' => 'repeat_interval',
      'vname' => 'LBL_CALENDAR_REPEAT_INTERVAL',
      'type' => 'int',
      'len' => 3,
      'default' => 1,
      'comment' => 'Interval of recurrence',
      'importable' => 'false',
      'massupdate' => false,
      'reportable' => false,
      'studio' => 'false',
    ),
    'repeat_dow' => 
    array (
      'name' => 'repeat_dow',
      'vname' => 'LBL_CALENDAR_REPEAT_DOW',
      'type' => 'varchar',
      'len' => 7,
      'comment' => 'Days of week in recurrence',
      'importable' => 'false',
      'massupdate' => false,
      'reportable' => false,
      'studio' => 'false',
    ),
    'repeat_until' => 
    array (
      'name' => 'repeat_until',
      'vname' => 'LBL_CALENDAR_REPEAT_UNTIL_DATE',
      'type' => 'date',
      'comment' => 'Repeat until specified date',
      'importable' => 'false',
      'massupdate' => false,
      'reportable' => false,
      'studio' => 'false',
    ),
    'repeat_count' => 
    array (
      'name' => 'repeat_count',
      'vname' => 'LBL_CALENDAR_REPEAT_COUNT',
      'type' => 'int',
      'len' => 7,
      'comment' => 'Number of recurrence',
      'importable' => 'false',
      'massupdate' => false,
      'reportable' => false,
      'studio' => 'false',
    ),
    'repeat_selector' => 
    array (
      'name' => 'repeat_selector',
      'vname' => 'LBL_CALENDAR_REPEAT_SELECTOR',
      'type' => 'enum',
      'len' => 36,
      'options' => 'repeat_selector_dom',
      'comment' => 'Repeat selector',
      'importable' => 'false',
      'massupdate' => false,
      'reportable' => false,
      'studio' => 'false',
      'visibility_grid' => 
      array (
        'trigger' => 'repeat_type',
        'values' => 
        array (
          '' => 
          array (
            0 => 'None',
          ),
          'Daily' => 
          array (
            0 => 'None',
          ),
          'Weekly' => 
          array (
            0 => 'None',
          ),
          'Monthly' => 
          array (
            0 => 'None',
            1 => 'Each',
            2 => 'On',
          ),
          'Yearly' => 
          array (
            0 => 'None',
            1 => 'On',
          ),
        ),
      ),
    ),
    'repeat_days' => 
    array (
      'name' => 'repeat_days',
      'vname' => 'LBL_CALENDAR_REPEAT_DAYS',
      'type' => 'varchar',
      'len' => 128,
      'comment' => 'Days of month',
      'importable' => 'false',
      'massupdate' => false,
      'reportable' => false,
      'studio' => 'false',
    ),
    'repeat_ordinal' => 
    array (
      'name' => 'repeat_ordinal',
      'vname' => 'LBL_CALENDAR_REPEAT_ORDINAL',
      'type' => 'enum',
      'len' => 36,
      'options' => 'repeat_ordinal_dom',
      'comment' => 'Repeat ordinal value',
      'importable' => 'false',
      'massupdate' => false,
      'reportable' => false,
      'studio' => 'false',
    ),
    'repeat_unit' => 
    array (
      'name' => 'repeat_unit',
      'vname' => 'LBL_CALENDAR_REPEAT_UNIT',
      'type' => 'enum',
      'len' => 36,
      'options' => 'repeat_unit_dom',
      'comment' => 'Repeat unit value',
      'importable' => 'false',
      'massupdate' => false,
      'reportable' => false,
      'studio' => 'false',
    ),
    'repeat_parent_id' => 
    array (
      'name' => 'repeat_parent_id',
      'vname' => 'LBL_REPEAT_PARENT_ID',
      'type' => 'id',
      'comment' => 'Id of the first element of recurring records',
      'importable' => 'false',
      'massupdate' => false,
      'reportable' => false,
      'studio' => 'false',
    ),
    'recurrence_id' => 
    array (
      'name' => 'recurrence_id',
      'vname' => 'LBL_CALENDAR_RECURRENCE_ID',
      'type' => 'datetime',
      'dbType' => 'datetime',
      'comment' => 'Recurrence ID of call. Original call start date',
      'importable' => false,
      'exportable' => false,
      'massupdate' => false,
      'studio' => false,
      'processes' => false,
      'visible' => false,
      'reportable' => false,
      'hideacl' => true,
    ),
    'recurring_source' => 
    array (
      'name' => 'recurring_source',
      'vname' => 'LBL_RECURRING_SOURCE',
      'type' => 'varchar',
      'len' => 36,
      'comment' => 'Source of recurring call',
      'importable' => false,
      'massupdate' => false,
      'reportable' => false,
      'studio' => false,
    ),
    'send_invites' => 
    array (
      'name' => 'send_invites',
      'vname' => 'LBL_SEND_INVITES',
      'type' => 'bool',
      'source' => 'non-db',
      'comment' => 'checkbox indicating whether or not to send out invites (Meta-data only)',
      'massupdate' => false,
    ),
    'invitees' => 
    array (
      'name' => 'invitees',
      'source' => 'non-db',
      'type' => 'collection',
      'vname' => 'LBL_INVITEES',
      'links' => 
      array (
        0 => 'contacts',
        1 => 'leads',
        2 => 'users',
      ),
      'order_by' => 'name:asc',
      'studio' => false,
      'hideacl' => true,
    ),
    'auto_invite_parent' => 
    array (
      'name' => 'auto_invite_parent',
      'type' => 'bool',
      'source' => 'non-db',
      'comment' => 'Flag to allow for turning off auto invite of parent record -  (Meta-data only)',
      'massupdate' => false,
    ),
    'contact_parent' => 
    array (
      'name' => 'contact_parent',
      'type' => 'link',
      'relationship' => 'contact_calls_parent',
      'source' => 'non-db',
      'reportable' => false,
    ),
    'task_parent' => 
    array (
      'name' => 'task_parent',
      'type' => 'link',
      'relationship' => 'task_calls_parent',
      'source' => 'non-db',
      'reportable' => false,
    ),
    'lead_parent' => 
    array (
      'name' => 'lead_parent',
      'type' => 'link',
      'relationship' => 'lead_calls',
      'source' => 'non-db',
      'reportable' => false,
    ),
    'kbcontents_parent' => 
    array (
      'name' => 'kbcontents_parent',
      'type' => 'link',
      'relationship' => 'kbcontent_calls',
      'source' => 'non-db',
      'vname' => 'LBL_KBDOCUMENTS',
      'reportable' => false,
    ),
    'transcript' => 
    array (
      'name' => 'transcript',
      'vname' => 'LBL_TRANSCRIPT',
      'readonly' => true,
      'css_class' => 'call-transcript',
      'type' => 'text',
      'dbType' => 'longtext',
      'duplicate_on_record_copy' => 'always',
      'reportable' => true,
      'full_text_search' => 
      array (
        'enabled' => true,
        'searchable' => true,
      ),
      'studio' => 
      array (
        'recordview' => true,
        'previewview' => true,
        'recorddashletview' => true,
        'visible' => false,
      ),
    ),
    'aws_contact_id' => 
    array (
      'name' => 'aws_contact_id',
      'vname' => 'LBL_CONNECT_CONTACT_ID',
      'readonly' => true,
      'type' => 'id',
      'importable' => 'false',
      'massupdate' => false,
      'reportable' => false,
      'studio' => false,
      'comment' => 'The AWS Connect Contact ID',
    ),
    'call_recording_url' => 
    array (
      'name' => 'call_recording_url',
      'vname' => 'LBL_CALL_RECORDING_URL',
      'type' => 'varchar',
      'len' => 255,
      'audited' => true,
      'pii' => true,
      'comment' => 'The URL for the call recording',
    ),
    'call_recording' => 
    array (
      'name' => 'call_recording',
      'vname' => 'LBL_CALL_RECORDING',
      'type' => 'call-recording',
      'readonly' => true,
      'source' => 'non-db',
      'comment' => 'The friendly name for the call recording link',
    ),
    'aws_lens_data' => 
    array (
      'name' => 'aws_lens_data',
      'vname' => 'LBL_AWS_LENS_DATA',
      'type' => 'text',
      'reportable' => false,
      'studio' => false,
      'comment' => 'Raw data from the aws lens service',
    ),
    'sentiment_score_agent' => 
    array (
      'name' => 'sentiment_score_agent',
      'vname' => 'LBL_SENTIMENT_SCORE_AGENT',
      'type' => 'decimal',
      'len' => '10',
      'precision' => '2',
      'comment' => 'The sentiment score for the agent ranging from -5 to 5',
      'reportable' => false,
      'displayParams' => 
      array (
        'type' => 'sentiment',
        'readonly' => true,
        'icon' => 
        array (
          'type' => 'sicon-sugar-predict',
          'tooltip' => 'LBL_PREDICT_TOOLTIP',
        ),
      ),
    ),
    'sentiment_score_agent_string' => 
    array (
      'name' => 'sentiment_score_agent_string',
      'vname' => 'LBL_SENTIMENT_SCORE_AGENT',
      'type' => 'enum',
      'options' => 'sentiment_score_dom',
      'readonly' => true,
      'calculated' => true,
      'enforced' => true,
      'formula' => 'sentimentScoreToStr($sentiment_score_agent)',
      'studio' => false,
      'processes' => 
      array (
        'types' => 
        array (
          'BRR' => true,
          'PD' => true,
        ),
      ),
    ),
    'sentiment_score_customer' => 
    array (
      'name' => 'sentiment_score_customer',
      'vname' => 'LBL_SENTIMENT_SCORE_CUSTOMER',
      'type' => 'decimal',
      'len' => '10',
      'precision' => '2',
      'comment' => 'The sentiment score for the customer ranging from -5 to 5',
      'reportable' => false,
      'displayParams' => 
      array (
        'type' => 'sentiment',
        'readonly' => true,
        'icon' => 
        array (
          'type' => 'sicon-sugar-predict',
          'tooltip' => 'LBL_PREDICT_TOOLTIP',
        ),
      ),
    ),
    'sentiment_score_customer_string' => 
    array (
      'name' => 'sentiment_score_customer_string',
      'vname' => 'LBL_SENTIMENT_SCORE_CUSTOMER',
      'type' => 'enum',
      'options' => 'sentiment_score_dom',
      'readonly' => true,
      'calculated' => true,
      'enforced' => true,
      'formula' => 'sentimentScoreToStr($sentiment_score_customer)',
      'studio' => false,
      'processes' => 
      array (
        'types' => 
        array (
          'BRR' => true,
          'PD' => true,
        ),
      ),
    ),
    'sentiment_score_agent_first_quarter' => 
    array (
      'name' => 'sentiment_score_agent_first_quarter',
      'vname' => 'LBL_SENTIMENT_SCORE_AGENT_FIRST_QUARTER',
      'type' => 'decimal',
      'len' => '10',
      'precision' => '2',
      'studio' => false,
      'comment' => 'The sentiment score for the agent during the first quarter ranging from -5 to 5',
    ),
    'sentiment_score_agent_second_quarter' => 
    array (
      'name' => 'sentiment_score_agent_second_quarter',
      'vname' => 'LBL_SENTIMENT_SCORE_AGENT_SECOND_QUARTER',
      'type' => 'decimal',
      'len' => '10',
      'precision' => '2',
      'studio' => false,
      'comment' => 'The sentiment score for the agent during the second quarter ranging from -5 to 5',
    ),
    'sentiment_score_agent_third_quarter' => 
    array (
      'name' => 'sentiment_score_agent_third_quarter',
      'vname' => 'LBL_SENTIMENT_SCORE_AGENT_THIRD_QUARTER',
      'type' => 'decimal',
      'len' => '10',
      'precision' => '2',
      'studio' => false,
      'comment' => 'The sentiment score for the agent during the third quarter ranging from -5 to 5',
    ),
    'sentiment_score_agent_fourth_quarter' => 
    array (
      'name' => 'sentiment_score_agent_fourth_quarter',
      'vname' => 'LBL_SENTIMENT_SCORE_AGENT_FOURTH_QUARTER',
      'type' => 'decimal',
      'len' => '10',
      'precision' => '2',
      'studio' => false,
      'comment' => 'The sentiment score for the agent during the fourth quarter ranging from -5 to 5',
    ),
    'sentiment_score_customer_first_quarter' => 
    array (
      'name' => 'sentiment_score_customer_first_quarter',
      'vname' => 'LBL_SENTIMENT_SCORE_CUSTOMER_FIRST_QUARTER',
      'type' => 'decimal',
      'len' => '10',
      'precision' => '2',
      'studio' => false,
      'comment' => 'The sentiment score for the customer during the first quarter ranging from -5 to 5',
    ),
    'sentiment_score_customer_second_quarter' => 
    array (
      'name' => 'sentiment_score_customer_second_quarter',
      'vname' => 'LBL_SENTIMENT_SCORE_CUSTOMER_SECOND_QUARTER',
      'type' => 'decimal',
      'len' => '10',
      'precision' => '2',
      'studio' => false,
      'comment' => 'The sentiment score for the customer during the second quarter ranging from -5 to 5',
    ),
    'sentiment_score_customer_third_quarter' => 
    array (
      'name' => 'sentiment_score_customer_third_quarter',
      'vname' => 'LBL_SENTIMENT_SCORE_CUSTOMER_THIRD_QUARTER',
      'type' => 'decimal',
      'len' => '10',
      'precision' => '2',
      'studio' => false,
      'comment' => 'The sentiment score for the customer during the third quarter ranging from -5 to 5',
    ),
    'sentiment_score_customer_fourth_quarter' => 
    array (
      'name' => 'sentiment_score_customer_fourth_quarter',
      'vname' => 'LBL_SENTIMENT_SCORE_CUSTOMER_FOURTH_QUARTER',
      'type' => 'decimal',
      'len' => '10',
      'precision' => '2',
      'studio' => false,
      'comment' => 'The sentiment score for the customer during the fourth quarter ranging from -5 to 5',
    ),
    'following' => 
    array (
      'massupdate' => false,
      'name' => 'following',
      'vname' => 'LBL_FOLLOWING',
      'type' => 'bool',
      'source' => 'non-db',
      'comment' => 'Is user following this record',
      'studio' => 'false',
      'link' => 'following_link',
      'rname' => 'id',
      'rname_exists' => true,
    ),
    'following_link' => 
    array (
      'name' => 'following_link',
      'type' => 'link',
      'relationship' => 'calls_following',
      'source' => 'non-db',
      'vname' => 'LBL_FOLLOWING',
      'reportable' => false,
    ),
    'my_favorite' => 
    array (
      'massupdate' => false,
      'name' => 'my_favorite',
      'vname' => 'LBL_FAVORITE',
      'type' => 'bool',
      'source' => 'non-db',
      'comment' => 'Favorite for the user',
      'studio' => 
      array (
        'list' => false,
        'recordview' => false,
        'basic_search' => false,
        'advanced_search' => false,
      ),
      'link' => 'favorite_link',
      'rname' => 'id',
      'rname_exists' => true,
    ),
    'favorite_link' => 
    array (
      'name' => 'favorite_link',
      'type' => 'link',
      'relationship' => 'calls_favorite',
      'source' => 'non-db',
      'vname' => 'LBL_FAVORITE',
      'reportable' => false,
      'workflow' => false,
      'full_text_search' => 
      array (
        'type' => 'favorites',
        'enabled' => true,
        'searchable' => false,
        'aggregations' => 
        array (
          'favorite_link' => 
          array (
            'type' => 'MyItems',
            'options' => 
            array (
              'field' => 'user_favorites',
            ),
          ),
        ),
      ),
    ),
    'tag' => 
    array (
      'name' => 'tag',
      'vname' => 'LBL_TAGS',
      'type' => 'tag',
      'link' => 'tag_link',
      'source' => 'non-db',
      'module' => 'Tags',
      'relate_collection' => true,
      'studio' => 
      array (
        'portal' => false,
        'base' => 
        array (
          'popuplist' => false,
          'popupsearch' => false,
        ),
        'mobile' => 
        array (
          'wirelesseditview' => true,
          'wirelessdetailview' => true,
        ),
      ),
      'massupdate' => true,
      'exportable' => true,
      'sortable' => false,
      'rname' => 'name',
      'full_text_search' => 
      array (
        'enabled' => true,
        'searchable' => false,
      ),
    ),
    'tag_link' => 
    array (
      'name' => 'tag_link',
      'type' => 'link',
      'vname' => 'LBL_TAGS_LINK',
      'relationship' => 'calls_tags',
      'source' => 'non-db',
      'exportable' => false,
      'duplicate_merge' => 'disabled',
    ),
    'commentlog' => 
    array (
      'name' => 'commentlog',
      'vname' => 'LBL_COMMENTLOG',
      'type' => 'collection',
      'displayParams' => 
      array (
        'type' => 'commentlog',
        'fields' => 
        array (
          0 => 'entry',
          1 => 'date_entered',
          2 => 'created_by_name',
        ),
        'max_num' => 100,
      ),
      'links' => 
      array (
        0 => 'commentlog_link',
      ),
      'order_by' => 'date_entered:asc',
      'source' => 'non-db',
      'module' => 'CommentLog',
      'studio' => 
      array (
        'listview' => false,
        'recordview' => true,
        'wirelesseditview' => false,
        'wirelessdetailview' => true,
        'wirelesslistview' => false,
        'wireless_basic_search' => false,
        'wireless_advanced_search' => false,
      ),
      'full_text_search' => 
      array (
        'enabled' => true,
        'searchable' => true,
      ),
    ),
    'commentlog_link' => 
    array (
      'name' => 'commentlog_link',
      'type' => 'link',
      'vname' => 'LBL_COMMENTLOG_LINK',
      'relationship' => 'calls_commentlog',
      'source' => 'non-db',
      'exportable' => false,
      'duplicate_merge' => 'disabled',
    ),
    'locked_fields' => 
    array (
      'name' => 'locked_fields',
      'vname' => 'LBL_LOCKED_FIELDS',
      'type' => 'locked_fields',
      'link' => 'locked_fields_link',
      'source' => 'non-db',
      'module' => 'pmse_BpmProcessDefinition',
      'relate_collection' => true,
      'studio' => false,
      'massupdate' => false,
      'exportable' => false,
      'sortable' => false,
      'rname' => 'pro_locked_variables',
      'collection_fields' => 
      array (
        0 => 'pro_locked_variables',
      ),
      'full_text_search' => 
      array (
        'enabled' => false,
        'searchable' => false,
      ),
      'hideacl' => true,
    ),
    'locked_fields_link' => 
    array (
      'name' => 'locked_fields_link',
      'type' => 'link',
      'vname' => 'LBL_LOCKED_FIELDS_LINK',
      'relationship' => 'calls_locked_fields',
      'source' => 'non-db',
      'exportable' => false,
      'duplicate_merge' => 'disabled',
    ),
    'sync_key' => 
    array (
      'is_sync_key' => true,
      'name' => 'sync_key',
      'vname' => 'LBL_SYNC_KEY',
      'type' => 'varchar',
      'enforced' => '',
      'required' => false,
      'massupdate' => false,
      'readonly' => true,
      'default' => NULL,
      'isnull' => true,
      'no_default' => false,
      'comments' => 'External default id of the remote integration record',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'merge_filter' => 'disabled',
      'duplicate_on_record_copy' => 'no',
      'audited' => true,
      'reportable' => true,
      'unified_search' => false,
      'calculated' => false,
      'len' => '100',
      'size' => '20',
      'studio' => 
      array (
        'recordview' => true,
        'wirelessdetailview' => true,
        'listview' => false,
        'wirelesseditview' => false,
        'wirelesslistview' => false,
        'wireless_basic_search' => false,
        'wireless_advanced_search' => false,
        'portallistview' => false,
        'portalrecordview' => false,
        'portaleditview' => false,
      ),
    ),
    'assigned_user_id' => 
    array (
      'name' => 'assigned_user_id',
      'vname' => 'LBL_ASSIGNED_TO_ID',
      'group' => 'assigned_user_name',
      'type' => 'id',
      'reportable' => false,
      'isnull' => 'false',
      'audited' => true,
      'duplicate_on_record_copy' => 'always',
      'comment' => 'User ID assigned to record',
      'duplicate_merge' => 'disabled',
      'mandatory_fetch' => true,
      'massupdate' => false,
      'full_text_search' => 
      array (
        'enabled' => true,
        'searchable' => false,
        'aggregations' => 
        array (
          'assigned_user_id' => 
          array (
            'type' => 'MyItems',
            'label' => 'LBL_AGG_ASSIGNED_TO_ME',
          ),
        ),
      ),
    ),
    'assigned_user_name' => 
    array (
      'name' => 'assigned_user_name',
      'link' => 'assigned_user_link',
      'vname' => 'LBL_ASSIGNED_TO',
      'rname' => 'full_name',
      'type' => 'relate',
      'reportable' => false,
      'source' => 'non-db',
      'table' => 'users',
      'id_name' => 'assigned_user_id',
      'module' => 'Users',
      'duplicate_merge' => 'disabled',
      'duplicate_on_record_copy' => 'always',
      'sort_on' => 
      array (
        0 => 'last_name',
      ),
      'exportable' => true,
      'related_fields' => 
      array (
        0 => 'assigned_user_id',
      ),
    ),
    'team_id' => 
    array (
      'name' => 'team_id',
      'vname' => 'LBL_TEAM_ID',
      'group' => 'team_name',
      'reportable' => false,
      'dbType' => 'id',
      'type' => 'team_list',
      'audited' => true,
      'duplicate_on_record_copy' => 'always',
      'comment' => 'Team ID for the account',
    ),
    'team_set_id' => 
    array (
      'name' => 'team_set_id',
      'rname' => 'id',
      'id_name' => 'team_set_id',
      'vname' => 'LBL_TEAM_SET_ID',
      'type' => 'id',
      'audited' => true,
      'studio' => 'false',
      'dbType' => 'id',
      'duplicate_on_record_copy' => 'always',
    ),
    'acl_team_set_id' => 
    array (
      'name' => 'acl_team_set_id',
      'vname' => 'LBL_TEAM_SET_SELECTED_ID',
      'type' => 'id',
      'audited' => true,
      'studio' => false,
      'isnull' => true,
      'duplicate_on_record_copy' => 'always',
      'reportable' => false,
    ),
    'team_count' => 
    array (
      'name' => 'team_count',
      'rname' => 'team_count',
      'id_name' => 'team_id',
      'vname' => 'LBL_TEAMS',
      'join_name' => 'ts1',
      'table' => 'teams',
      'type' => 'relate',
      'required' => 'true',
      'isnull' => 'true',
      'module' => 'Teams',
      'link' => 'team_count_link',
      'massupdate' => false,
      'dbType' => 'int',
      'source' => 'non-db',
      'importable' => 'false',
      'reportable' => false,
      'duplicate_merge' => 'disabled',
      'duplicate_on_record_copy' => 'always',
      'studio' => 'false',
      'hideacl' => true,
    ),
    'team_name' => 
    array (
      'name' => 'team_name',
      'db_concat_fields' => 
      array (
        0 => 'name',
        1 => 'name_2',
      ),
      'sort_on' => 'tj.name',
      'join_name' => 'tj',
      'rname' => 'name',
      'id_name' => 'team_id',
      'vname' => 'LBL_TEAMS',
      'type' => 'relate',
      'required' => 'true',
      'table' => 'teams',
      'isnull' => 'true',
      'module' => 'Teams',
      'link' => 'team_link',
      'massupdate' => true,
      'dbType' => 'varchar',
      'source' => 'non-db',
      'custom_type' => 'teamset',
      'studio' => 
      array (
        'portallistview' => false,
        'portalrecordview' => false,
      ),
      'duplicate_on_record_copy' => 'always',
      'exportable' => true,
      'fields' => 
      array (
        0 => 'acl_team_set_id',
      ),
    ),
    'acl_team_names' => 
    array (
      'name' => 'acl_team_names',
      'table' => 'teams',
      'module' => 'Teams',
      'vname' => 'LBL_TEAM_SET_SELECTED_TEAMS',
      'rname' => 'name',
      'id_name' => 'acl_team_set_id',
      'source' => 'non-db',
      'link' => 'team_link',
      'type' => 'relate',
      'custom_type' => 'teamset',
      'exportable' => true,
      'studio' => false,
      'massupdate' => false,
      'hideacl' => true,
    ),
    'team_link' => 
    array (
      'name' => 'team_link',
      'type' => 'link',
      'relationship' => 'calls_team',
      'vname' => 'LBL_TEAMS_LINK',
      'link_type' => 'one',
      'module' => 'Teams',
      'bean_name' => 'Team',
      'source' => 'non-db',
      'duplicate_merge' => 'disabled',
      'studio' => 'false',
      'side' => 'right',
    ),
    'team_count_link' => 
    array (
      'name' => 'team_count_link',
      'type' => 'link',
      'relationship' => 'calls_team_count_relationship',
      'link_type' => 'one',
      'module' => 'Teams',
      'bean_name' => 'TeamSet',
      'source' => 'non-db',
      'duplicate_merge' => 'disabled',
      'reportable' => false,
      'studio' => 'false',
      'side' => 'right',
    ),
    'teams' => 
    array (
      'name' => 'teams',
      'type' => 'link',
      'relationship' => 'calls_teams',
      'bean_filter_field' => 'team_set_id',
      'rhs_key_override' => true,
      'source' => 'non-db',
      'vname' => 'LBL_TEAMS',
      'link_class' => 'TeamSetLink',
      'studio' => 'false',
      'reportable' => false,
      'side' => 'left',
    ),
    'accounts_calls_1' => 
    array (
      'name' => 'accounts_calls_1',
      'type' => 'link',
      'relationship' => 'accounts_calls_1',
      'source' => 'non-db',
      'module' => 'Accounts',
      'bean_name' => 'Account',
      'vname' => 'LBL_ACCOUNTS_CALLS_1_FROM_ACCOUNTS_TITLE',
      'id_name' => 'accounts_calls_1accounts_ida',
    ),
    'accounts_calls_1_name' => 
    array (
      'name' => 'accounts_calls_1_name',
      'type' => 'relate',
      'source' => 'non-db',
      'vname' => 'LBL_ACCOUNTS_CALLS_1_FROM_ACCOUNTS_TITLE',
      'save' => true,
      'id_name' => 'accounts_calls_1accounts_ida',
      'link' => 'accounts_calls_1',
      'table' => 'accounts',
      'module' => 'Accounts',
      'rname' => 'name',
    ),
    'accounts_calls_1accounts_ida' => 
    array (
      'name' => 'accounts_calls_1accounts_ida',
      'type' => 'id',
      'source' => 'non-db',
      'vname' => 'LBL_ACCOUNTS_CALLS_1_FROM_ACCOUNTS_TITLE_ID',
      'id_name' => 'accounts_calls_1accounts_ida',
      'link' => 'accounts_calls_1',
      'table' => 'accounts',
      'module' => 'Accounts',
      'rname' => 'id',
      'reportable' => false,
      'side' => 'left',
      'massupdate' => false,
      'duplicate_merge' => 'disabled',
      'hideacl' => true,
    ),
  ),
  'indices' => 
  array (
    'id' => 
    array (
      'name' => 'idx_calls_pk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    'date_modified' => 
    array (
      'name' => 'idx_calls_del_d_m',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'deleted',
        1 => 'date_modified',
        2 => 'id',
      ),
    ),
    'deleted' => 
    array (
      'name' => 'idx_calls_id_del',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'id',
        1 => 'deleted',
      ),
    ),
    'date_entered' => 
    array (
      'name' => 'idx_calls_del_d_e',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'deleted',
        1 => 'date_entered',
        2 => 'id',
      ),
    ),
    'name_del' => 
    array (
      'name' => 'idx_calls_name_del',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'name',
        1 => 'deleted',
      ),
    ),
    0 => 
    array (
      'name' => 'idx_call_name',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'deleted',
        1 => 'name',
        2 => 'date_modified',
      ),
    ),
    1 => 
    array (
      'name' => 'idx_status',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'status',
      ),
    ),
    2 => 
    array (
      'name' => 'idx_calls_recurrence_id',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'recurrence_id',
      ),
    ),
    3 => 
    array (
      'name' => 'idx_calls_date_start_end_del',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'date_start',
        1 => 'date_end',
        2 => 'deleted',
      ),
    ),
    4 => 
    array (
      'name' => 'idx_calls_repeat_parent_id',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'repeat_parent_id',
        1 => 'deleted',
      ),
    ),
    5 => 
    array (
      'name' => 'idx_calls_date_start_reminder',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'date_start',
        1 => 'reminder_time',
      ),
    ),
    6 => 
    array (
      'name' => 'idx_calls_par_del',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'parent_id',
        1 => 'parent_type',
        2 => 'deleted',
      ),
    ),
    7 => 
    array (
      'name' => 'idx_call_direction',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'direction',
      ),
    ),
    8 => 
    array (
      'name' => 'idx_aws_calls_contact_id',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'aws_contact_id',
        1 => 'deleted',
      ),
    ),
    'sync_key' => 
    array (
      'name' => 'idx_calls_skey',
      'type' => 'unique',
      'fields' => 
      array (
        0 => 'sync_key',
      ),
    ),
    'assigned_user_id' => 
    array (
      'name' => 'idx_calls_assigned_del',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'assigned_user_id',
        1 => 'deleted',
      ),
    ),
    'team_set_calls' => 
    array (
      'name' => 'idx_calls_tmst_id',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'team_set_id',
        1 => 'deleted',
      ),
    ),
    'acl_team_set_calls' => 
    array (
      'name' => 'idx_calls_acl_tmst_id',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'acl_team_set_id',
        1 => 'deleted',
      ),
    ),
  ),
  'relationships' => 
  array (
    'calls_modified_user' => 
    array (
      'lhs_module' => 'Users',
      'lhs_table' => 'users',
      'lhs_key' => 'id',
      'rhs_module' => 'Calls',
      'rhs_table' => 'calls',
      'rhs_key' => 'modified_user_id',
      'relationship_type' => 'one-to-many',
    ),
    'calls_created_by' => 
    array (
      'lhs_module' => 'Users',
      'lhs_table' => 'users',
      'lhs_key' => 'id',
      'rhs_module' => 'Calls',
      'rhs_table' => 'calls',
      'rhs_key' => 'created_by',
      'relationship_type' => 'one-to-many',
    ),
    'call_activities' => 
    array (
      'lhs_module' => 'Calls',
      'lhs_table' => 'calls',
      'lhs_key' => 'id',
      'rhs_module' => 'Activities',
      'rhs_table' => 'activities',
      'rhs_key' => 'id',
      'rhs_vname' => 'LBL_ACTIVITY_STREAM',
      'relationship_type' => 'many-to-many',
      'join_table' => 'activities_users',
      'join_key_lhs' => 'parent_id',
      'join_key_rhs' => 'activity_id',
      'relationship_role_column' => 'parent_type',
      'relationship_role_column_value' => 'Calls',
    ),
    'calls_assigned_user' => 
    array (
      'lhs_module' => 'Users',
      'lhs_table' => 'users',
      'lhs_key' => 'id',
      'rhs_module' => 'Calls',
      'rhs_table' => 'calls',
      'rhs_key' => 'assigned_user_id',
      'relationship_type' => 'one-to-many',
    ),
    'calls_notes' => 
    array (
      'lhs_module' => 'Calls',
      'lhs_table' => 'calls',
      'lhs_key' => 'id',
      'rhs_module' => 'Notes',
      'rhs_table' => 'notes',
      'rhs_key' => 'parent_id',
      'relationship_type' => 'one-to-many',
      'relationship_role_column' => 'parent_type',
      'relationship_role_column_value' => 'Calls',
    ),
    'calls_messages' => 
    array (
      'lhs_module' => 'Calls',
      'lhs_table' => 'calls',
      'lhs_key' => 'id',
      'rhs_module' => 'Messages',
      'rhs_table' => 'messages',
      'rhs_key' => 'parent_id',
      'relationship_type' => 'one-to-many',
      'relationship_role_column' => 'parent_type',
      'relationship_role_column_value' => 'Calls',
    ),
    'calls_following' => 
    array (
      'lhs_module' => 'Users',
      'lhs_table' => 'users',
      'lhs_key' => 'id',
      'rhs_module' => 'Calls',
      'rhs_table' => 'calls',
      'rhs_key' => 'id',
      'relationship_type' => 'user-based',
      'join_table' => 'subscriptions',
      'join_key_lhs' => 'created_by',
      'join_key_rhs' => 'parent_id',
      'relationship_role_column' => 'parent_type',
      'relationship_role_column_value' => 'Calls',
      'user_field' => 'created_by',
    ),
    'calls_favorite' => 
    array (
      'lhs_module' => 'Users',
      'lhs_table' => 'users',
      'lhs_key' => 'id',
      'rhs_module' => 'Calls',
      'rhs_table' => 'calls',
      'rhs_key' => 'id',
      'relationship_type' => 'user-based',
      'join_table' => 'sugarfavorites',
      'join_key_lhs' => 'modified_user_id',
      'join_key_rhs' => 'record_id',
      'relationship_role_column' => 'module',
      'relationship_role_column_value' => 'Calls',
      'user_field' => 'created_by',
    ),
    'calls_tags' => 
    array (
      'lhs_module' => 'Calls',
      'lhs_table' => 'calls',
      'lhs_key' => 'id',
      'rhs_module' => 'Tags',
      'rhs_table' => 'tags',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'tag_bean_rel',
      'join_key_lhs' => 'bean_id',
      'join_key_rhs' => 'tag_id',
      'relationship_role_column' => 'bean_module',
      'relationship_role_column_value' => 'Calls',
      'dynamic_subpanel' => true,
    ),
    'calls_commentlog' => 
    array (
      'lhs_module' => 'Calls',
      'lhs_table' => 'calls',
      'lhs_key' => 'id',
      'rhs_module' => 'CommentLog',
      'rhs_table' => 'commentlog',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'commentlog_rel',
      'join_key_lhs' => 'record_id',
      'join_key_rhs' => 'commentlog_id',
      'relationship_role_column' => 'module',
      'relationship_role_column_value' => 'Calls',
    ),
    'calls_locked_fields' => 
    array (
      'lhs_module' => 'Calls',
      'lhs_table' => 'calls',
      'lhs_key' => 'id',
      'rhs_module' => 'pmse_BpmProcessDefinition',
      'rhs_table' => 'pmse_bpm_process_definition',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'locked_field_bean_rel',
      'join_key_lhs' => 'bean_id',
      'join_key_rhs' => 'pd_id',
      'relationship_role_column' => 'bean_module',
      'relationship_role_column_value' => 'Calls',
    ),
    'calls_team_count_relationship' => 
    array (
      'lhs_module' => 'Teams',
      'lhs_table' => 'team_sets',
      'lhs_key' => 'id',
      'rhs_module' => 'Calls',
      'rhs_table' => 'calls',
      'rhs_key' => 'team_set_id',
      'relationship_type' => 'one-to-many',
    ),
    'calls_teams' => 
    array (
      'lhs_module' => 'Calls',
      'lhs_table' => 'calls',
      'lhs_key' => 'team_set_id',
      'rhs_module' => 'Teams',
      'rhs_table' => 'teams',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'team_sets_teams',
      'join_key_lhs' => 'team_set_id',
      'join_key_rhs' => 'team_id',
    ),
    'calls_team' => 
    array (
      'lhs_module' => 'Teams',
      'lhs_table' => 'teams',
      'lhs_key' => 'id',
      'rhs_module' => 'Calls',
      'rhs_table' => 'calls',
      'rhs_key' => 'team_id',
      'relationship_type' => 'one-to-many',
    ),
  ),
  'acls' => 
  array (
    'SugarACLOpi' => true,
    'SugarACLStatic' => true,
    'SugarACLLockedFields' => true,
  ),
  'optimistic_locking' => true,
  'duplicate_check' => 
  array (
    'enabled' => false,
  ),
  'name_format_map' => 
  array (
  ),
  'visibility' => 
  array (
    'TeamSecurity' => true,
  ),
  'favorites' => true,
  'templates' => 
  array (
    'basic' => 'basic',
    'sentiments_lens' => 'sentiments_lens',
    'following' => 'following',
    'favorite' => 'favorite',
    'taggable' => 'taggable',
    'commentlog' => 'commentlog',
    'lockable_fields' => 'lockable_fields',
    'integrate_fields' => 'integrate_fields',
    'assignable' => 'assignable',
    'team_security' => 'team_security',
  ),
  'custom_fields' => false,
  'has_pii_fields' => true,
  'related_calc_fields' => 
  array (
  ),
);