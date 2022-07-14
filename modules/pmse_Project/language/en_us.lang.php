<?php
/*
 * Your installation or use of this SugarCRM file is subject to the applicable
 * terms available at
 * http://support.sugarcrm.com/Resources/Master_Subscription_Agreements/.
 * If you do not agree to all of the applicable terms or do not have the
 * authority to bind the entity as an authorized representative, then do not
 * install or use this SugarCRM file.
 *
 * Copyright (C) SugarCRM Inc. All rights reserved.
 */


$mod_strings = array (
  'LBL_MODULE_NAME' => 'Process Definitions',
  'LBL_MODULE_TITLE' => 'Process Definitions',
  'LBL_MODULE_NAME_SINGULAR' => 'Process Definition',

  'LBL_PMSE_PROJECT_FOCUS_DRAWER_DASHBOARD' => 'Process Definitions Focus Drawer',

  'LBL_PMSE_PROJECT_RECORD_DASHBOARD' => 'Process Definitions Record Dashboard',
  'LNK_LIST' => 'View Process Definitions',
  'LNK_NEW_PMSE_PROJECT' => 'Create Process Definition',
  'LNK_IMPORT_PMSE_PROJECT' => 'Import Process Definitions',

  'LBL_PRJ_STATUS' => 'Status',
  'LBL_PRJ_MODULE' => 'Target Module',
  'LBL_PRJ_RUN_ORDER' => 'Run Order',
  'LBL_PMSE_BUTTON_SAVE' => 'Save',
  'LBL_PMSE_BUTTON_CANCEL' => 'Cancel',
  'LBL_PMSE_BUTTON_YES' => 'Yes',
  'LBL_PMSE_BUTTON_NO' => 'No',
  'LBL_PMSE_BUTTON_OK' => 'Ok',
    'LBL_PMSE_FORM_ERROR' => 'Please resolve any errors before proceeding.',

    'LBL_PMSE_LABEL_DESIGN' => 'Design',
    'LBL_PMSE_LABEL_EXPORT' => 'Export',
    'LBL_PMSE_LABEL_DELETE' => 'Delete',
    'LBL_PMSE_LABEL_ENABLE' => 'Enable',
    'LBL_PMSE_LABEL_DISABLE' => 'Disable',

    'LBL_PMSE_SAVE_DESIGN_BUTTON_LABEL' => 'Save & Design',
    'LBL_PMSE_IMPORT_BUTTON_LABEL' => 'Import',

    'LBL_PMSE_MY_PROCESS_DEFINITIONS' => 'My Process Definitions',
    'LBL_PMSE_ALL_PROCESS_DEFINITIONS' => 'All Process Definitions',

    'LBL_PMSE_PROCESS_DEFINITIONS_ENABLED' => 'Enabled',
    'LBL_PMSE_PROCESS_DEFINITIONS_DISABLED' => 'Disabled',
    'LBL_PMSE_PROCESS_DEFINITIONS_EDIT' => 'There are active processes running against this Process Definition. Updating it could impact these processes. Do you still want to edit this Process Definition?',
    'LBL_PMSE_DISABLE_CONFIRMATION_PD' => 'There are active processes running against this Process Definition. Updating it could impact these processes. Do you still want to disable this Process Definition?',

    'LBL_PMSE_PROCESS_DEFINITION_IMPORT_TEXT' => 'Upload a .bpm file to import a Process Definition.',
    'LBL_PMSE_PROCESS_DEFINITION_IMPORT_SUCCESS' => 'Process Definitions was successfully imported into the system.',
    'LBL_PMSE_PROCESS_DEFINITION_EMPTY_WARNING' => 'Please select a valid *.bpm file.',
    'LBL_PMSE_PROCESS_DEFINITION_IMPORT_BR' => 'The Process Definition has been imported but contains one or more Business Rule actions for which business rules have not been selected.',
    'LBL_BPM_IMPORT_SELECT' => 'This Process Definition contains the following Business Rules and Email Templates. '
        . 'Please select the ones you want to import.',
    'LBL_PMSE_PROCESS_DEFINITION_IMPORT_ERROR' => 'There was an error importing the Process Definition.',
    'LBL_BUSINESS_RULES' => 'Business Rules',
    'LBL_EMAIL_TEMPLATES' => 'Email Templates',


//    /*PMSE*/

//    'LBL_PMSE_LABEL_TERMINATE_CASES' => 'Terminate Process',

//    'LBL_PMSE_LABEL_CUSTOM_FORM_MODULE' => 'Custom Form Module',
//    'LBL_PMSE_LABEL_CUSTOM_FORM_PROCESS' => 'Custom Form Process',
//    'LBL_PMSE_LABEL_CUSTOM_FORM_NAME' => 'Custom Form name',
//    'LBL_PMSE_LABEL_CUSTOM_FORM_DESC' => 'Custom Form description',
//    'LBL_PMSE_LABEL_LOADING' => 'Loading, please wait...',
//    'LBL_PMSE_LABEL_CASETAKEN' => 'This Process was already taken by another User',
//    'LBL_PMSE_LABEL_CASECOMPLETED' => 'The Process is already closed',
//    'LBL_PMSE_LABEL_UNASSIGNED' => 'Unassigned',
//    'LBL_PMSE_LABEL_SEARCHBYDUEDATE' => 'Search By Due Date',
//    'LBL_PMSE_LABEL_SETTINGSEARCHBYDUEDATE' => 'Setting Search by  Due Date',
//    'LBL_PMSE_LABEL_SEARCH' => 'Search',
//    'LBL_PMSE_LABEL_DELETED_RECORD'=>'The records related to this Process has been removed',


    /**TOOLBAR**/
    'LBL_PMSE_ADAM_DESIGNER_LEADS' => 'Leads',
    'LBL_PMSE_ADAM_DESIGNER_OPPORTUNITY' => 'Opportunity',
    'LBL_PMSE_ADAM_DESIGNER_DOCUMENTS' => 'Documents',
    'LBL_PMSE_ADAM_DESIGNER_OTHER_MODULES' => 'Target Module',
    'LBL_PMSE_ADAM_DESIGNER_WAIT' => 'Wait',
    'LBL_PMSE_ADAM_DESIGNER_RECEIVE_MESSAGE' => 'Receive Message',
    'LBL_PMSE_ADAM_DESIGNER_SEND_MESSAGE' => 'Send Message',
    'LBL_PMSE_ADAM_DESIGNER_USER_TASK' => 'Activity',
    'LBL_PMSE_ADAM_DESIGNER_EXCLUSIVE' => 'Exclusive',
    'LBL_PMSE_ADAM_DESIGNER_PARALLEL' => 'Parallel',
    'LBL_PMSE_ADAM_DESIGNER_COMMENT' => 'Comment',
    'LBL_PMSE_ADAM_DESIGNER_UNDO' => 'Undo',
    'LBL_PMSE_ADAM_DESIGNER_REDO' => 'Redo',
    'LBL_PMSE_ADAM_DESIGNER_SAVE' => 'Save',
    'LBL_PMSE_ADAM_DESIGNER_VALIDATE' => 'Validate',
    'LBL_PMSE_ADAM_DESIGNER_SAVE_AND_VALIDATE' => 'Save and validate',
    'LBL_PMSE_ADAM_DESIGNER_VIEW_ERRORS' => 'Run validation to check for errors',

    /**ELEMENTS NAMES**/
    'LBL_PMSE_ADAM_DESIGNER_TASK' => 'Activity',
    'LBL_PMSE_ADAM_DESIGNER_ACTION' => 'Action',
    'LBL_PMSE_ADAM_DESIGNER_LEAD_START_EVENT' => 'Lead Start Event',
    'LBL_PMSE_ADAM_DESIGNER_OPPORTUNITY_START_EVENT' => 'Opportunity Start Event' ,
    'LBL_PMSE_ADAM_DESIGNER_DOCUMENT_START_EVENT' => 'Document Start Event',
    'LBL_PMSE_ADAM_DESIGNER_OTHER_MODULE_EVENT' => 'Start Event',
    'LBL_PMSE_ADAM_DESIGNER_WAIT_EVENT' => 'Wait Event',
    'LBL_PMSE_ADAM_DESIGNER_MESSAGE_EVENT' => 'Message Event',
//    'LBL_PMSE_ADAM_DESIGNER_BOUNDARY_EVENT' => 'Boundary Event',
    'LBL_PMSE_ADAM_DESIGNER_EXCLUSIVE_GATEWAY' => 'Exclusive Gateway',
    'LBL_PMSE_ADAM_DESIGNER_PARALLEL_GATEWAY' => 'Parallel Gateway',
    'LBL_PMSE_ADAM_DESIGNER_END_EVENT' => 'End Event',
    'LBL_PMSE_ADAM_DESIGNER_TEXT_ANNOTATION' => 'Text Annotation',


    /**GENERAL**/
    'LBL_PMSE_MESSAGE_CANCEL_CONFIRM' => ' Some settings had changed. Do you want to discard the changes?',
    'LBL_PMSE_MESSAGE_REMOVE_ALL_START_CRITERIA' => 'The module is changing so the criteria will be removed as well, since it got no fields relation with the new module.',
    'LBL_PMSE_MESSAGE_INVALID_CONNECTION' => 'Invalid connection',

    'LBL_PMSE_CONTEXT_MENU_SETTINGS' => 'Settings...',
    'LBL_PMSE_CONTEXT_MENU_DELETE' => 'Delete',

    'LBL_PMSE_FORM_LABEL_MODULE' => 'Module',
    'LBL_PMSE_FORM_LABEL_FILTER' => 'Filter',
    'LBL_PMSE_FORM_LABEL_RELATED' => 'Related To',
    'LBL_PMSE_FORM_LABEL_CRITERIA' => 'Criteria',
    'LBL_PMSE_FORM_LABEL_DURATION' => 'Duration',
    'LBL_PMSE_FORM_LABEL_UNIT' => 'Unit',

    'LBL_PMSE_FORM_OPTION_SELECT' => 'Select...',
    'LBL_PMSE_FORM_OPTION_TARGET_MODULE' => 'Target Module',
    'LBL_PMSE_FORM_OPTION_DAYS' => 'Days',
    'LBL_PMSE_FORM_OPTION_HOURS' => 'Hours',
    'LBL_PMSE_FORM_OPTION_MINUTES' => 'Minutes',
    'LBL_PMSE_MESSAGE_CANNOTDROPOUTSIDECANVAS' => 'Cannot drop element outside of canvas',
    'LBL_PMSE_FORM_TOOLTIP_DURATION' => 'Defines the duration of the timer event',

    /**PROCESSDEFINTION**/
    // CONTEXT MENU
    'LBL_PMSE_CONTEXT_MENU_PROCESS_DEFINITION' => 'Process Definition',
    'LBL_PMSE_CONTEXT_MENU_SAVE' => 'Save',
    'LBL_PMSE_CONTEXT_MENU_REFRESH' => 'Refresh',
    'LBL_PMSE_CONTEXT_MENU_ZOOM' => 'Zoom',
    'LBL_PMSE_CONTEXT_MENU_50' => '50%',
    'LBL_PMSE_CONTEXT_MENU_75' => '75%',
    'LBL_PMSE_CONTEXT_MENU_100' => '100%',
    'LBL_PMSE_CONTEXT_MENU_125' => '125%',
    'LBL_PMSE_CONTEXT_MENU_150' => '150%',
    // FORMS
    'LBL_PMSE_LABEL_PROCESS_NAME' => 'Process Name',
    'LBL_PMSE_LABEL_DESCRIPTION' => 'Description',
    'LBL_PMSE_LABEL_TERMINATE_PROCESS' => 'Terminate Process',
    'LBL_PMSE_LABEL_LOCKED_FIELDS' => 'Locked Fields',

    /**TASKS**/
    // CONTEXT MENU
    'LBL_PMSE_CONTEXT_MENU_FORMS' => 'Forms...',
    'LBL_PMSE_CONTEXT_MENU_USERS' => 'Users...',
    'LBL_PMSE_CONTEXT_MENU_ACTION_TYPE' => 'Action Type',
    'LBL_PMSE_CONTEXT_MENU_UNASSIGNED' => '[Unassigned]',
    'LBL_PMSE_CONTEXT_MENU_BUSINESS_RULE' => 'Business Rule',
    'LBL_PMSE_CONTEXT_MENU_ASSIGN_USER' => 'Assign User',
    'LBL_PMSE_CONTEXT_MENU_ASSIGN_TEAM' => 'Round Robin',
    'LBL_PMSE_CONTEXT_MENU_CHANGE_FIELD' => 'Change Field',
    'LBL_PMSE_CONTEXT_MENU_ADD_RELATED_RECORD' => 'Add Related Record',
    // CONFIRMATIONS
    'LBL_PMSE_CHANGE_ACTION_TYPE_CONFIRMATION' => 'By changing the action type all the previous settings for this action will be lost. Do you want to proceed?',
    // FORMS
    'LBL_PMSE_FORM_TITLE_ACTIVITY' => 'Activity',
    'LBL_PMSE_FORM_LABEL_READ_ONLY_FIELDS' => 'Readonly fields',
    'LBL_PMSE_FORM_LABEL_REQUIRED_FIELDS' => 'Required fields',
    'LBL_PMSE_FORM_LABEL_GENERAL_SETTINGS' => 'General',
    'LBL_PMSE_FORM_LABEL_EXPECTED_TIME' => 'Expected Time',
    'LBL_PMSE_FORM_LABEL_FORM_TYPE' => 'Form Type',
    'LBL_PMSE_FORM_LABEL_RESPONSE_BUTTONS' => 'Form Buttons',
    'LBL_PMSE_FORM_OPTION_APPROVE_REJECT' => 'Approve/Reject',
    'LBL_PMSE_FORM_OPTION_ROUTE' => 'Route',
    'LBL_PMSE_FORM_LABEL_OTHER_DERIVATION_OPTIONS' => 'Other Routing Options',
    'LBL_PMSE_FORM_LABEL_RECORD_OWNERSHIP' => 'Change Assigned To User',
    'LBL_PMSE_FORM_LABEL_TEAM' => 'Team',
    'LBL_PMSE_FORM_LABEL_REASSIGN' => 'Select New Process User',
    'LBL_PMSE_FORM_LABEL_EMAIL_PROCESS_USER' => 'Email',
    'LBL_PA_FORM_LABEL_EMAIL_PROCESS_USER' => 'Email process user when process assigned',

    'LBL_PMSE_FORM_TITLE_USER_DEFINITION' => 'User Definition',
    'LBL_PMSE_FORM_LABEL_ASSIGNMENT_METHOD' => 'Assignment Method',
    'LBL_PMSE_FORM_OPTION_ROUND_ROBIN' => 'Round Robin',
    'LBL_PMSE_FORM_OPTION_SELF_SERVICE' => 'Self Service',
    'LBL_PMSE_FORM_OPTION_STATIC_ASSIGNMENT' => 'Static Assignment',
    'LBL_PMSE_FORM_LABEL_ASSIGN_TO_TEAM' => 'Assign to Team',
    'LBL_PMSE_FORM_LABEL_ASSIGN_TO_USER' => 'Assign to User',
    'LBL_PA_FORM_COMBO_ASSIGN_TO_USER_HELP_TEXT' => 'Select...',
    'LBL_PA_FORM_COMBO_NO_MATCHES_FOUND' => 'No matches found',
    'LBL_PA_FORM_LABEL_ASSIGN_TO_TEAM' => 'Select Process User from Team',
    'LBL_PA_FORM_LABEL_ASSIGN_TO_USER' => 'Select Process User',
    'LBL_PMSE_FORM_OPTION_CURRENT_USER' => 'Current User',
    'LBL_PMSE_FORM_OPTION_RECORD_OWNER' => 'Record Owner',
    'LBL_PMSE_FORM_OPTION_SUPERVISOR' => 'Supervisor',
    'LBL_PMSE_FORM_OPTION_CREATED_BY_USER' => 'Created by User',
    'LBL_PMSE_FORM_OPTION_LAST_MODIFIED_USER' => 'Last Modified by User',
    'LBL_PMSE_FORM_OPTION_SYSTEM_EMAIL' => 'System Email',
    // Document Merge
    'LBL_PMSE_FORM_LABEL_DOCUMENT_MERGE' => 'Document Template',
    'LBL_PMSE_FORM_TITLE_DOCUMENT_MERGE' => 'Doc Merge',
    'LBL_PMSE_FORM_LABEL_DOCUMENT_MERGE_HELP_TEXT' => 'Select...',
    'LBL_PMSE_FORM_LABEL_CONVERT_TO_PDF' => 'Doc Merge to PDF',
    // Document Merge BPM Context Menu
    'LBL_PMSE_CONTEXT_MENU_DOCUMENT_MERGE' => 'Doc Merge',

    'LBL_PMSE_FORM_TITLE_BUSINESS_RULE' => 'Business Rule',
    'LBL_PMSE_LABEL_RULE' => 'Rule',

    'LBL_PMSE_FORM_TITLE_ASSIGN_USER' => 'Assign User',
    'LBL_PA_FORM_LABEL_UPDATE_RECORD_OWNER' => 'Update "Assigned To" on record',
    'LBL_PA_FORM_LABEL_SET_BY_AVAILABILITY' => 'Set "Assigned To" by availability',

    'LBL_PMSE_FORM_TITLE_ADD_RELATED_RECORD' => 'Add Related Record',
    'LBL_PMSE_FORM_LABEL_RELATED_MODULE' => 'Related Module',
    'LBL_PMSE_FORM_LABEL_FIELDS' => 'Fields',

    'LBL_PMSE_FORM_TITLE_CHANGE_FIELDS' => 'Change Fields',

    'LBL_PMSE_FORM_TITLE_ASSIGN_TEAM' => 'Round Robin',

    'LBL_PMSE_MESSAGE_ACTIVITY_NAME_EMPTY' => 'The name of activity is empty.',
    'LBL_PMSE_MESSAGE_ACTIVITY_NAME_ALREADY_EXISTS' => 'The name "%s" already exists in shape family.',

    'LBL_PMSE_FORM_REQUIRED_SHIFT_AVAILABILITY' => 'Required shift availability',
    'LBL_PMSE_FORM_LABEL_IF_NO_AVAILABLE' => 'If no users are available',

    'LBL_PMSE_FORM_LABEL_BEFORE' => 'before',

    /**EVENTS**/
    // CONTEXT MENU
    'LBL_PMSE_CONTEXT_MENU_ACTION' => 'Action',
    'LBL_PMSE_CONTEXT_MENU_RECEIVE_MESSAGE' => 'Receive Message',
    'LBL_PMSE_CONTEXT_MENU_SEND_MESSAGE' => 'Send Message',
    'LBL_PMSE_CONTEXT_MENU_TIMER' => 'Timer',
    'LBL_PMSE_CONTEXT_MENU_RESULT' => 'Result',
    'LBL_PMSE_CONTEXT_MENU_DO_NOTHING' => 'Do Nothing',
    'LBL_PMSE_CONTEXT_MENU_TERMINATE_PROCESS' => 'Terminate Process',
    'LBL_PMSE_CONTEXT_MENU_LISTEN' => 'Listen',

    // FORMS
    'LBL_PMSE_FORM_TITLE_LABEL_EVENT' => 'Event',
    'LBL_PMSE_FORM_LABEL_APPLIES_TO' => 'Applies to',
    'LBL_PMSE_FORM_OPTION_NEW_RECORDS_ONLY' => 'New Records Only',
    'LBL_PMSE_FORM_OPTION_UPDATED_RECORDS_ONLY' => 'Updated Records Only (First Update - See Help Text)',
    'LBL_PMSE_FORM_OPTION_UPDATED_RECORDS_ONLY_AU' => 'Updated Records Only (All Updates - See Help Text)',
    'LBL_PMSE_FORM_OPTION_NEW_AND_FIRST_UPDATED_RECORDS' => 'New Records or First Update',
    'LBL_PMSE_FORM_OPTION_NEW_AND_ALL_UPDATED_RECORDS' => 'New Records and All Updates',
    'LBL_PMSE_FORM_OPTION_RELATIONSHIP_CHANGE' => 'Relationship Change',

    'LBL_PMSE_FORM_TOOLTIP_WHEN_START_EVENT' => 'Select when the process will start.<br><br>New: Run process when new record is created.<br><br>First Update: Process runs only the first time criteria is met for an existing record.<br><br>All Updates: Process runs every time criteria is met for an existing record.<br><br>New Records or First Update: Process runs only the first time criteria is met for a record, during either record creation or record update.<br><br>New Records and All Updates: Process runs every time for all new and existing record.<br><br>Relationship Changes: Process runs every time there is a relationship change.',
    'LBL_PMSE_FORM_TOOLTIP_EVENT_MODULE' => 'Select the SugarCRM module to apply the event trigger',

    'LBL_PMSE_FORM_LABEL_FIXED_DATE' => 'Fixed Date',

    'LBL_PMSE_FORM_LABEL_EMAIL_TEMPLATE' => 'Email Template',

    'LBL_PMSE_FORM_LABEL_EMAIL_TO' => 'To',
    'LBL_PMSE_FORM_LABEL_EMAIL_CC' => 'Cc',
    'LBL_PMSE_FORM_LABEL_EMAIL_BCC' => 'Bcc',

    //ROLES IN EXPRESSION BUILDER
    'LBL_PMSE_FORM_OPTION_ADMINISTRATOR' => 'Administrator',

    /**GATEWAYS**/
    // CONTEXT MENU
    'LBL_PMSE_CONTEXT_MENU_DIRECTION' => 'Direction...',
    'LBL_PMSE_CONTEXT_MENU_CONVERGING' => 'Converging',
    'LBL_PMSE_CONTEXT_MENU_DIVERGING' => 'Diverging',
    'LBL_PMSE_CONTEXT_MENU_CONVERT' => 'Convert...',
    'LBL_PMSE_CONTEXT_MENU_EXCLUSIVE_GATEWAY' => 'Exclusive Gateway',
    'LBL_PMSE_CONTEXT_MENU_PARELLEL_GATEWAY' => 'Parallel Gateway',
    'LBL_PMSE_CONTEXT_MENU_INCLUSIVE_GATEWAY' => 'Inclusive Gateway',
    'LBL_PMSE_CONTEXT_MENU_EVENT_BASED_GATEWAY' => 'Event-Based Gateway',
    'LBL_PMSE_CONTEXT_MENU_DEFAULT_FLOW' => 'Default Flow',
    'LBL_PMSE_CONTEXT_MENU_NONE' => 'None',

    // FORMS
    'LBL_PMSE_FORM_TITLE_GATEWAY' => 'Gateway',

    'LBL_PMSE_CONTEXT_MENU_DEFAULT_TASK' => '(Activity)',
    'LBL_PMSE_CONTEXT_MENU_DEFAULT_EVENT' => '(Event)',
    'LBL_PMSE_CONTEXT_MENU_DEFAULT_GATEWAY' => '(Gateway)',

    'LBL_PMSE_BPMN_WARNING_PANEL_TITLE' => 'Element Errors',
    'LBL_PMSE_BPMN_WARNING_LABEL' => ' Errors',
    'LBL_PMSE_BPMN_WARNING_SINGULAR_LABEL' => ' Error',

    /**CRITERIA BUILDER**/
    'LBL_PMSE_EXPCONTROL_RELATIONSHIP_CHANGE_EVALUATION_TITLE' => 'Relationship Change Evaluation',
    'LBL_PMSE_EXPCONTROL_VARIABLES_PANEL_TITLE' => 'Fields',
    'LBL_PMSE_EXPCONTROL_MODULE_FIELD_EVALUATION_TITLE' => 'Module Field Evaluation',
    'LBL_PMSE_EXPCONTROL_MODULE_FIELD_EVALUATION_MODULE' => 'Module',
    'LBL_PMSE_EXPCONTROL_MODULE_FIELD_EVALUATION_RELATED' => 'Related To',
    'LBL_PMSE_EXPCONTROL_MODULE_FIELD_EVALUATION_VARIABLE' => 'Field',
    'LBL_PMSE_EXPCONTROL_MODULE_FIELD_EVALUATION_VALUE' => 'Value',
    'LBL_PMSE_EXPCONTROL_FORM_RESPONSE_EVALUATION_TITLE' => 'Form Response Evaluation',
    'LBL_PMSE_EXPCONTROL_FORM_RESPONSE_EVALUATION_FORM' => 'Form',
    'LBL_PMSE_EXPCONTROL_FORM_RESPONSE_EVALUATION_STATUS' => 'Status',
    'LBL_PMSE_EXPCONTROL_BUSINESS_RULES_EVALUATION_TITLE' => 'Business Rules Evaluation',
    'LBL_PMSE_EXPCONTROL_BUSINESS_RULES_EVALUATION_BR' => 'Business Rule',
    'LBL_PMSE_EXPCONTROL_BUSINESS_RULES_EVALUATION_RESPONSE' => 'Response',
    'LBL_PMSE_EXPCONTROL_USER_EVALUATION_TITLE' => 'User Evaluation',
    'LBL_PMSE_EXPCONTROL_USER_EVALUATION_USER' => 'User',
    'LBL_PMSE_EXPCONTROL_USER_EVALUATION_CURRENT' => 'Current User',
    'LBL_PMSE_EXPCONTROL_USER_EVALUATION_SUPERVISOR' => 'Supervisor',
    'LBL_PMSE_EXPCONTROL_USER_EVALUATION_OWNER' => 'Record Owner',
    'LBL_PMSE_EXPCONTROL_USER_EVALUATION_OPERATOR' => 'Operator',
    'LBL_PMSE_EXPCONTROL_USER_EVALUATION_IS_ADMIN' => 'is admin',
    'LBL_PMSE_EXPCONTROL_USER_EVALUATION_IS_ADMIN_FULL' => '%TARGET% is admin',
    'LBL_PMSE_EXPCONTROL_USER_EVALUATION_IS_ROLE' => 'has role of',
    'LBL_PMSE_EXPCONTROL_USER_EVALUATION_IS_ROLE_FULL' => '%TARGET% has role of %VALUE%',
    'LBL_PMSE_EXPCONTROL_USER_EVALUATION_IS_USER' => 'is user',
    'LBL_PMSE_EXPCONTROL_USER_EVALUATION_IS_USER_FULL' => '%TARGET% is user %VALUE%',
    'LBL_PMSE_EXPCONTROL_USER_EVALUATION_IS_NOT_ADMIN' => 'is not admin',
    'LBL_PMSE_EXPCONTROL_USER_EVALUATION_IS_NOT_ADMIN_FULL' => '%TARGET% is not admin',
    'LBL_PMSE_EXPCONTROL_USER_EVALUATION_IS_NOT_ROLE' => 'does not have role of',
    'LBL_PMSE_EXPCONTROL_USER_EVALUATION_IS_NOT_ROLE_FULL' => '%TARGET% does not have role of %VALUE%',
    'LBL_PMSE_EXPCONTROL_USER_EVALUATION_IS_NOT_USER' => 'is not user',
    'LBL_PMSE_EXPCONTROL_USER_EVALUATION_IS_NOT_USER_FULL' => '%TARGET% is not user %VALUE%',
    'LBL_PMSE_EXPCONTROL_USER_EVALUATION_VALUE' => 'Value',
    'LBL_PMSE_EXPCONTROL_CONSTANTS_FIXED_DATE' => 'Fixed Date',
    'LBL_PMSE_EXPCONTROL_CONSTANTS_FIXED_DATETIME' => 'Fixed Datetime',
    'LBL_PMSE_EXPCONTROL_CONSTANTS_TIMESPAN_TITLE' => 'Time Span',
    'LBL_PMSE_EXPCONTROL_CONSTANTS_TIMESPAN_AMOUNT' => 'Value',
    'LBL_PMSE_EXPCONTROL_CONSTANTS_TIMESPAN_UNIT' => 'Unit',
    'LBL_PMSE_EXPCONTROL_CONSTANTS_TIMESPAN_YEARS' => 'years',
    'LBL_PMSE_EXPCONTROL_CONSTANTS_TIMESPAN_MONTHS' => 'months',
    'LBL_PMSE_EXPCONTROL_CONSTANTS_TIMESPAN_WEEKS' => 'weeks',
    'LBL_PMSE_EXPCONTROL_CONSTANTS_TIMESPAN_DAYS' => 'days',
    'LBL_PMSE_EXPCONTROL_CONSTANTS_TIMESPAN_HOURS' => 'hours',
    'LBL_PMSE_EXPCONTROL_CONSTANTS_TIMESPAN_MINUTES' => 'minutes',
    'LBL_PMSE_EXPCONTROL_CONSTANTS_TIMESPAN_BUSINESS_HOURS' => 'business hours',
    'LBL_PMSE_EXPCONTROL_CONSTANTS_TIMESPAN_BUSINESS_CENTER' => 'Business Center',
    'LBL_PMSE_EXPCONTROL_CONSTANTS_TIMESPAN_BUSINESS_CENTER_FROM_TARGET_MODULE' => 'From Target Module',
    'LBL_PMSE_EXPCONTROL_CONSTANTS_TIMESPAN_BUSINESS_CENTER_FROM' => 'From ',
    'LBL_PMSE_EXPCONTROL_CONSTANTS_TIMESPAN_BUSINESS_CENTER_MODULE' => ' Module',
    'LBL_PMSE_EXPCONTROL_CONSTANTS_BASIC' => 'String, Number and Boolean',
    'LBL_PMSE_EXPCONTROL_CONSTANTS_BASIC_NUMBER' => 'Number',
    'LBL_PMSE_EXPCONTROL_CONSTANTS_BASIC_VALUE' => 'Value',
    'LBL_PMSE_EXPCONTROL_CONSTANTS_BASIC_ADD_STRING' => 'Add String',
    'LBL_PMSE_EXPCONTROL_CONSTANTS_BASIC_ADD_NUMBER' => 'Add Number',
    'LBL_PMSE_EXPCONTROL_CONSTANTS_BASIC_ADD_BOOLEAN' => 'Add Boolean',
    'LBL_PMSE_EXPCONTROL_CONSTANTS_CURRENCY' => 'Currency',
    'LBL_PMSE_EXPCONTROL_CONSTANTS_CURRENCY_CURRENCY' => 'Currency',
    'LBL_PMSE_EXPCONTROL_CONSTANTS_CURRENCY_AMOUNT' => 'Amount',
    'LBL_PMSE_EXPCONTROL_EVALUATIONS_TITLE' => 'Evaluations',
    'LBL_PMSE_EXPCONTROL_CONSTANTS_TITLE' => 'Constants',
    'LBL_PMSE_EXPCONTROL_OPERATOR_MINOR_THAN' => 'is less than',
    'LBL_PMSE_EXPCONTROL_OPERATOR_MINOR_THAN_DATE' => 'before',
    'LBL_PMSE_EXPCONTROL_OPERATOR_MINOR_EQUAL_THAN' => 'is less than or equal to',
    'LBL_PMSE_EXPCONTROL_OPERATOR_EQUAL' => 'is equal to',
    'LBL_PMSE_EXPCONTROL_OPERATOR_EQUAL_TEXT' => 'is',
    'LBL_PMSE_EXPCONTROL_OPERATOR_MAJOR_EQUAL' => 'is greater than or equal to',
    'LBL_PMSE_EXPCONTROL_OPERATOR_MAJOR' => 'is greater than',
    'LBL_PMSE_EXPCONTROL_OPERATOR_MAJOR_DATE' => 'after',
    'LBL_PMSE_EXPCONTROL_OPERATOR_STARTS_TEXT' => 'starts with',
    'LBL_PMSE_EXPCONTROL_OPERATOR_ENDS_TEXT' => 'ends with',
    'LBL_PMSE_EXPCONTROL_OPERATOR_CONTAINS_TEXT' => 'contains',
    'LBL_PMSE_EXPCONTROL_OPERATOR_NOT_CONTAINS_TEXT' => 'does not contain',

    'LBL_PMSE_EXPCONTROL_OPERATOR_CHANGES' => 'changes',
    'LBL_PMSE_EXPCONTROL_OPERATOR_CHANGES_FROM' => 'changes from',
    'LBL_PMSE_EXPCONTROL_OPERATOR_CHANGES_TO' => 'changes to',

    'LBL_PMSE_EXPCONTROL_OPERATOR_MULTISELECT_IS_ON_OF' => 'includes any',
    'LBL_PMSE_EXPCONTROL_OPERATOR_MULTISELECT_DOES_NOT_INCLUDE_ANY' => 'does not include any',

    'LBL_PMSE_EXPCONTROL_OPERATOR_MAJOR_EQUAL_DATE' => 'on or after',
    'LBL_PMSE_EXPCONTROL_OPERATOR_MINOR_EQUAL_DATE' => 'on or before',
    'LBL_PMSE_EXPCONTROL_OPERATOR_NOT_EQUAL' => 'is not equal to',
    'LBL_PMSE_EXPCONTROL_OPERATOR_NOT_EQUAL_TEXT' => 'is not',
    'LBL_PMSE_EXPCONTROL_OPERATOR_NOT_EQUAL_DATE' => 'not equal to',

    'LBL_PMSE_EXPCONTROL_ALL_RELATED_RECORDS' => 'All Related Records',
    'LBL_PMSE_EXPCONTROL_ANY_RELATED_RECORDS' => 'Any Related Records',

    'LBL_PMSE_EXPCONTROL_RELATION_ADDED' => 'Added',
    'LBL_PMSE_EXPCONTROL_RELATION_REMOVED' => 'Removed',
    'LBL_PMSE_EXPCONTROL_RELATION_ADDED_OR_REMOVED' => 'Added or Removed',
    'LBL_PMSE_EXPCONTROL_MODULE_ANY_RELATIONSHIP' => 'Any Relationship',

    'LBL_PMSE_RUNTIME_BUTTON' => 'Run Time',

    'LBL_PMSE_FORMPANEL_SUBMIT' => 'Add',
    'LBL_PMSE_FORMPANEL_CLOSE' => 'Close',

    'LBL_PMSE_EMAILPICKER_ALL_ASSIGNED_TEAMS' => 'All teams assigned to the record',
    'LBL_PMSE_EMAILPICKER_TEAMS' => 'Teams',
    'LBL_PMSE_EMAILPICKER_RELATED_TO' => '%RELATED% related to %MODULE%',
    'LBL_PMSE_EMAILPICKER_USER_CREATED' => 'User who created the %MODULE%',
    'LBL_PMSE_EMAILPICKER_USER_LAST_MODIFIED' => 'User who last modified the %MODULE%',
    'LBL_PMSE_EMAILPICKER_USER_IS_ASSIGNED' => 'User who is assigned to the %MODULE%',
    'LBL_PMSE_EMAILPICKER_USER_WAS_ASSIGNED' => 'User who was assigned to the %MODULE%',
    'LBL_PMSE_EMAILPICKER_MANAGER_CREATED' => 'Manager of who created the %MODULE%',
    'LBL_PMSE_EMAILPICKER_MANAGER_LAST_MODIFIED' => 'Manager of who last modified the %MODULE%',
    'LBL_PMSE_EMAILPICKER_MANAGER_IS_ASSIGNED' => 'Manager of who is assigned to the %MODULE%',
    'LBL_PMSE_EMAILPICKER_MANAGER_WAS_ASSIGNED' => 'Manager of who was assigned to the %MODULE%',
    'LBL_PMSE_EMAILPICKER_ROLE_ITEM' => 'role: %ROLE%',
    'LBL_PMSE_EMAILPICKER_TEAM_ITEM' => 'team: %TEAM%',
    'LBL_PMSE_EMAILPICKER_SUGGESTIONS' => 'Suggestions',
    'LBL_PMSE_EMAILPICKER_RESULTS_TITLE' => '%NUMBER% suggestion(s) for "%TEXT%"',
    'LBL_PMSE_EMAILPICKER_USER_RECORD_CREATOR' => 'created the record',
    'LBL_PMSE_EMAILPICKER_USER_LAST_MODIFIER' => 'last modified the record',
    'LBL_PMSE_EMAILPICKER_USER_IS_ASIGNEE' => 'is assigned to the record',

    'LBL_PMSE_UPDATERFIELD_VARIABLES_LIST_TITLE' => '%MODULE% fields',
    'LBL_PMSE_UPDATERFIELD_ADD_TEAM' => 'Add team...',

    //ERRORS ELEMENTS MESSAGE
    'LBL_PMSE_MESSAGE_ERROR_START_EVENT_OUTGOING' => 'Start Event must have an outgoing sequence flow',
    'LBL_PMSE_MESSAGE_ERROR_END_EVENT_INCOMING' => 'End Event must have an incoming sequence flow',
    'LBL_PMSE_MESSAGE_ERROR_INTERMEDIATE_EVENT_INCOMING' => 'Intermediate Event must have an incoming or more sequence flow',
    'LBL_PMSE_MESSAGE_ERROR_INTERMEDIATE_EVENT_OUTGOING' => 'Intermediate Event must have one outgoing sequence flow',
    'LBL_PMSE_MESSAGE_ERROR_BOUNDARY_EVENT_OUTGOING' => 'Boundary Event must have one outgoing sequence flow',
    'LBL_PMSE_MESSAGE_ERROR_ACTIVITY_INCOMING' => 'Activity must have an incoming sequence flow',
    'LBL_PMSE_MESSAGE_ERROR_ACTIVITY_OUTGOING' => 'Activity must have an outgoing sequence flow',
    'LBL_PMSE_MESSAGE_ERROR_ACTIVITY_SCRIPT_TASK' => 'Script task must have a valid type different of [Unassigned]',
    'LBL_PMSE_MESSAGE_ERROR_GATEWAY_DIVERGING_INCOMING' => 'Gateway might have one or more incoming Sequence flow',
    'LBL_PMSE_MESSAGE_ERROR_GATEWAY_DIVERGING_OUTGOING' => 'Gateway must have two or more outgoing Sequence flow',
    'LBL_PMSE_MESSAGE_ERROR_GATEWAY_CONVERGING_INCOMING' => 'Gateway must have two or more incoming sequence flows',
    'LBL_PMSE_MESSAGE_ERROR_GATEWAY_CONVERGING_OUTGOING' => 'Gateway cannot have an outgoing sequence flow',
    'LBL_PMSE_MESSAGE_ERROR_GATEWAY_MIXED_INCOMING' => 'Gateway must have two or more incoming sequence flows',
    'LBL_PMSE_MESSAGE_ERROR_GATEWAY_MIXED_OUTGOING' => 'Gateway must have two or more outgoing sequence flows',
    'LBL_PMSE_MESSAGE_ERROR_ANNOTATION' => 'Text Annotation must have an association line',

    'LBL_PMSE_IMPORT_PROCESS_DEFINITION_FAILURE' => 'Failed to create Process Definition from file',
    'LBL_PMSE_CANNOT_CONFIGURE_ADD_RELATED_RECORD' => 'There are no related modules available for this target module',
    'LBL_PMSE_PROJECT_NAME_EMPTY' => 'Process Definition Name should not be saved as blank as it is required field.',

    'LBL_PMSE_INVALID_EXPRESSION_SYNTAX' => 'Invalid expression syntax.',
    'LBL_PMSE_MESSAGE_ERROR_CURRENCIES_MIX' => 'Can\'t use two different currencies in the same expression.',

    // PMSE Validation tool strings

    'LBL_PMSE_VALIDATOR_IN_PROGRESS_RETRIEVING' => 'Validating process definition: Retrieving element settings',
    'LBL_PMSE_VALIDATOR_IN_PROGRESS_VALIDATING' => 'Validating process definition: Validating element settings',
    'LBL_PMSE_VALIDATOR_REFRESH_ERROR_LIST' => 'Refreshing error list...',
    'LBL_PMSE_VALIDATOR_COMPLETE' => 'Validation complete! Issues found: ',
    'LBL_PMSE_VALIDATOR_TOOLTIP_ISSUES' => ' issues',
    'LBL_PMSE_VALIDATOR_TOOLTIP_IN_PROGRESS' => 'Validation in progress',
    'LBL_PMSE_VALIDATOR_WARNING_INFO' => 'Warning: The process may halt at this element or have other unintended effects',
    'LBL_PMSE_VALIDATOR_ERROR_INFO' => 'Error: The process will halt at this element',

    'LBL_PMSE_ERROR_UNABLE_TO_VALIDATE' => 'Unable to validate element',

    'LBL_PMSE_ERROR_FLOW_INCOMING_MINIMUM' => 'Element does not meet the minimum number of incoming flows',
    'LBL_PMSE_ERROR_FLOW_INCOMING_MINIMUM_INFO' => 'This element must have a minimum number of incoming paths. Check the number of paths that connect to this element to make sure that minimum number is met.',

    'LBL_PMSE_ERROR_FLOW_INCOMING_MAXIMUM' => 'Element exceeds the maximum number of incoming flows',
    'LBL_PMSE_ERROR_FLOW_INCOMING_MAXIMUM_INFO' => 'This element has a maximum number of incoming paths that must not be exceeded. Check the number of paths that connect to this element to make sure that maximum number is not exceeded.',

    'LBL_PMSE_ERROR_FLOW_OUTGOING_MINIMUM' => 'Element does not meet the minimum number of outgoing flows',
    'LBL_PMSE_ERROR_FLOW_OUTGOING_MINIMUM_INFO' => 'This element must have a minimum number of outgoing paths. Check the number of paths leading out of this element to make sure that minimum number is met.',

    'LBL_PMSE_ERROR_FLOW_OUTGOING_MAXIMUM' => 'Element exceeds the maximum number of outgoing flows',
    'LBL_PMSE_ERROR_FLOW_OUTGOING_MAXIMUM_INFO' => 'This element has a maximum number of outgoing paths that must not be exceeded. Check the number of paths leading out of this element to make sure that maximum number is not exceeded.',

    'LBL_PMSE_ERROR_FIELD_REQUIRED' => 'Required field is not set',
    'LBL_PMSE_ERROR_FIELD_REQUIRED_INFO' => 'This element has a field that is required, but has not been set. Check the element settings to ensure the field has been set correctly, then make sure to click the "Save" button.',

    'LBL_PMSE_ERROR_DATA_NOT_FOUND' => 'Data does not currently exist in the system',
    'LBL_PMSE_ERROR_DATA_NOT_FOUND_INFO' => 'The settings for this element reference a specific piece of data that does not exist in the database. Check the element settings to ensure that all data referenced exist (i.e. specific users, module fields, teams, etc.).',

    'LBL_PMSE_ERROR_LOGIC_IMPOSSIBLE' => 'Criteria box expression will never evaluate to true',
    'LBL_PMSE_ERROR_LOGIC_IMPOSSIBLE_INFO' => 'Criteria boxes contain logical AND/OR/NOT expressions. This error means that a criteria box in the element settings has been configured in such a way that the expression will never be true. Check the criteria box to eliminate any logical contradictions that prevent the expression from being true.',

    'LBL_PMSE_ERROR_ELEMENT_UNREACHABLE' => 'Element is not reachable',
    'LBL_PMSE_ERROR_ELEMENT_UNREACHABLE_INFO' => 'In order for an element to be executed in a process, it must have a path connected to it. The chain of paths leading to this element must begin with a start element. Check the chain of incoming paths to this element to make sure that chain begins with a start element.',

    'LBL_PMSE_ERROR_WAIT_EVENT_ONE_DATETIME' => 'Wait time criteria must contain exactly one datetime constant',
    'LBL_PMSE_ERROR_WAIT_EVENT_ONE_DATETIME_INFO' => 'This wait event element has been configured using the "Fixed Date" criteria box. This box must contain exactly one "Fixed Datetime" constant or Datetime field reference. All other pieces of the expression must be math operators (+/-) or "Time Span" constants.',

    'LBL_PMSE_ERROR_WAIT_EVENT_ZERO_DURATION' => 'Duration value specified must not be zero',
    'LBL_PMSE_ERROR_WAIT_EVENT_ZERO_DURATION_INFO' => 'This wait event element has been configured using the "Duration" setting. This setting must not be equal to zero, or an error will occur. Check the element settings to ensure the "Duration" is not set to zero.',

    'LBL_PMSE_ERROR_WAIT_EVENT_NO_PARAMETERS' => 'Wait time parameters have not been set',
    'LBL_PMSE_ERROR_WAIT_EVENT_NO_PARAMETERS_INFO' => 'This wait event element does not have any settings configured. Check the element settings to make sure "Duration" or "Fixed Date" is selected, enter the values desired, and click the "Save" button.',

    'LBL_PMSE_ERROR_ACTIVITY_EXPECTED_TIME' => 'Expected time is less than zero',
    'LBL_PMSE_ERROR_ACTIVITY_EXPECTED_TIME_INFO' => 'Under the "Forms" settings for this activity element, the expected time is set to a negative value, which will cause the process to freeze when reaching the element. Open the "Forms" settings for this element to change the expected time to a non-negative number.',

    'LBL_PMSE_ERROR_ACTION_UNASSIGNED' => 'Action type is [Unassigned]',
    'LBL_PMSE_ERROR_ACTION_UNASSIGNED_INFO' => 'This action element does not have a designated type. This can be changed by right-clicking on the action element, then selecting a type from the "Action Type" list.',

    'LBL_PMSE_ERROR_GATEWAY_NO_GUARANTEED_PATH' => 'A path is not guaranteed to be taken',
    'LBL_PMSE_ERROR_GATEWAY_NO_GUARANTEED_PATH_INFO' => 'This error message occurs because there is a chance that none of the paths out of this gateway element will be taken, which will cause the process to halt. It is advised to set a default path to take in case none of the criteria box expressions in the element settings are satisfied. This can be done by right-clicking on the gateway element, and selecting an element under the "Default Flow" menu. If a default path is not specified, the criteria box expressions in the element settings should be changed to ensure that at least one of them will be true when the process is run.',

    'LBL_PMSE_ERROR_GATEWAY_CONVERGING_TYPE_MISMATCH' => 'Converging gateway type does not match gateway type of an incoming flow',
    'LBL_PMSE_ERROR_GATEWAY_CONVERGING_TYPE_MISMATCH_INFO' => 'Diverging gateways expand processes into multiple branches. When using a converging gateway to re-converge these branches back into one path, the correct type of converging gateway must be used, depending on the type of diverging gateway that was used to create the branches. For branches created with exclusive or event-based diverging gateways, use an exclusive converging gateway to re-converge them. For branches created with parallel or inclusive diverging gateways, use a parallel converging gateway to re-converge them.',
);
