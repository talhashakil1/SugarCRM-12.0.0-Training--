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

$dictionary['DocumentRevision'] = array(
    'table' => 'document_revisions',
    'archive' => false,
    'favorites' => true,
    'fields' => array(
        'id' => array(
            'name' => 'id',
            'vname' => 'LBL_REVISION_NAME',
            'type' => 'id',
            'required' => true,
            'reportable' => false,
        ),
        'change_log' => array(
            'name' => 'change_log',
            'vname' => 'LBL_CHANGE_LOG',
            'type' => 'varchar',
            'len' => '255',
        ),
        'document_id' => array(
            'name' => 'document_id',
            'vname' => 'LBL_DOCUMENT',
            'type' => 'id',
            'required' => false,
            'reportable' => false,
        ),
        'related_document_name' => [
            'name' => 'related_document_name',
            'rname' => 'name',
            'id_name' => 'document_id',
            'vname' => 'LBL_DOC_NAME',
            'join_name' => 'documents',
            'type' => 'relate',
            'link' => 'document_link',
            'table' => 'documents',
            'module' => 'Documents',
            'source' => 'non-db',
            'massupdate' => false,
        ],
        'document_link' => [
            'name' => 'document_link',
            'type' => 'link',
            'relationship' => 'documentrevisions_document',
            'vname' => 'LBL_DOCUMENT',
            'link_type' => 'one',
            'module' => 'Documents',
            'bean_name' => 'Document',
            'source' => 'non-db',
        ],
        'doc_id' => array(
            'name' => 'doc_id',
            'vname' => 'LBL_DOC_ID',
            'type' => 'varchar',
            'len' => '100',
            'comment' => 'Document ID from documents web server provider',
            'importable' => false,
            'studio' => 'false',
        ),
        'doc_type' => array(
            'name' => 'doc_type',
            'vname' => 'LBL_DOC_TYPE',
            'type' => 'enum',
            'function' => 'getDocumentsExternalApiDropDown',
            'len' => '100',
            'comment' => 'Document type (ex: Google, box.net, IBM SmartCloud)',
        ),
        'doc_url' => array(
            'name' => 'doc_url',
            'vname' => 'LBL_DOC_URL',
            'type' => 'varchar',
            'len' => '255',
            'comment' => 'Document URL from documents web server provider',
            'importable' => false,
            'studio' => 'false',
        ),
        'date_entered' => array(
            'name' => 'date_entered',
            'vname' => 'LBL_DATE_ENTERED',
            'type' => 'datetime',
        ),
        'created_by' => array(
            'name' => 'created_by',
            'rname' => 'user_name',
            'id_name' => 'modified_user_id',
            'vname' => 'LBL_CREATED',
            'type' => 'assigned_user_name',
            'table' => 'users',
            'isnull' => 'false',
            'dbType' => 'id',
            'source' => 'db',
        ),
        'filename' => array(
            'name' => 'filename',
            'vname' => 'LBL_FILENAME',
            'type' => 'file',
            'dbType' => 'varchar',
            'required' => true,
            'len' => '255',
            'allowEapm' => true,
            'docType' => 'doc_type',
            'docUrl' => 'doc_url',
            'docId' => 'doc_id',
            'linkModuleOverride' => 'Documents',
        ),
        'file_ext' => array(
            'name' => 'file_ext',
            'vname' => 'LBL_FILE_EXTENSION',
            'type' => 'varchar',
            'len' => 100,
        ),
        'file_mime_type' => array(
            'name' => 'file_mime_type',
            'vname' => 'LBL_MIME',
            'type' => 'varchar',
            'len' => '100',
        ),
        'file_size' => array(
            'name' => 'file_size',
            'vname' => 'LBL_FILE_SIZE',
            'type' => 'int',
            'comment' => 'The size of the file',
            'importable' => false,
            'massupdate' => false,
        ),
        'revision' => array(
            'name' => 'revision',
            'vname' => 'LBL_REVISION',
            'type' => 'varchar',
            'len' => 100,
            'importable' => 'required',
        ),

        'deleted' => array(
            'name' => 'deleted',
            'vname' => 'LBL_DELETED',
            'type' => 'bool',
            'default' => 0,
            'reportable' => false,
        ),
        'date_modified' => array(
            'name' => 'date_modified',
            'vname' => 'LBL_DATE_MODIFIED',
            'type' => 'datetime',
        ),
        'documents' => array(
            'name' => 'documents',
            'type' => 'link',
            'relationship' => 'document_revisions',
            'source' => 'non-db',
            'vname' => 'LBL_REVISIONS',
        ),
        'latest_document_revision_link' =>
        array(
            'name' => 'latest_document_revision_link',
            'type' => 'link',
            'relationship' => 'latest_document_revision',
            'source' => 'non-db',
            'vname' => 'LBL_LATEST_REVISION',
        ),

        'created_by_link' => array(
            'name' => 'created_by_link',
            'type' => 'link',
            'relationship' => 'revisions_created_by',
            'vname' => 'LBL_CREATED_BY_USER',
            'link_type' => 'one',
            'module' => 'Users',
            'bean_name' => 'User',
            'source' => 'non-db',
        ),

        'created_by_name' => array(
            'name' => 'created_by_name',
            'rname' => 'full_name',
            'id_name' => 'created_by',
            'vname' => 'LBL_CREATED_BY_NAME',
            'type' => 'relate',
            'table' => 'users',
            'isnull' => 'true',
            'module' => 'Users',
            'dbType' => 'varchar',
            'link' => 'created_by_link',
            'len' => '255',
            'source' => 'non-db',
        ),
        'latest_revision_id' => array(
            'name' => 'latest_revision_id',
            'vname' => 'LBL_REVISION',
            'type' => 'id',
            'source' => 'non-db',
        ),
        'document_name' => array(
            'name' => 'document_name',
            'vname' => 'LBL_DOC_NAME',
            'type' => 'varchar',
            'len' => '255',
            'source' => 'non-db',
        ),
        'latest_revision' => array(
            'name' => 'latest_revision',
            'vname' => 'LBL_CURRENT_DOC_VERSION',
            'type' => 'varchar',
            'len' => '255',
            'source' => 'non-db',
        ),
    ),
    'relationships' => array(
        'revisions_created_by' => array(
            'lhs_module' => 'Users', 'lhs_table' => 'users', 'lhs_key' => 'id',
            'rhs_module' => 'DocumentRevisions', 'rhs_table' => 'document_revisions', 'rhs_key' => 'created_by',
            'relationship_type' => 'one-to-many'
        ),
        'documentrevisions_document' => [
            'lhs_module' => 'Documents',
            'lhs_table' => 'documents',
            'lhs_key' => 'id',
            'rhs_module' => 'DocumentRevisions',
            'rhs_table' => 'document_revisions',
            'rhs_key' => 'document_id',
            'relationship_type' => 'one-to-many',
        ],
    ),
    'indices' => array(
        array('name' => 'documentrevisionspk', 'type' => 'primary', 'fields' => array('id')),
        array('name' => 'documentrevision_mimetype', 'type' => 'index', 'fields' => array('file_mime_type')),
        array('name' => 'idx_document_revisions_document_id_deleted', 'type' => 'index', 'fields' => array(
            'document_id',
            'deleted',
        )),
    ),
    'acls' => array('SugarACLParentModule' => array('parentModule' => 'Documents', 'parentLink' => 'documents')),
    'visibility' => array('ParentModuleVisibility' => array('parentLink' => 'documents')),
);
?>
