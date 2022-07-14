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
/**
 * @class View.Views.Base.Documents.RecordView
 * @alias SUGAR.App.view.views.BaseDocumentsRecordView
 * @extends View.Views.Base.RecordView
 */
({
    extendsFrom: 'RecordView',

    /**
     * @inheritdoc
     */
    initialize: function(options) {
        this._super('initialize', [options]);
        this.context.on('documentrevisions:save', this.onDocumentRevisionSave, this);
    },

    /**
     * Handles the Document Revision subpanel save event. Updates the main document record with new model attributes
     */
    onDocumentRevisionSave: function() {
        this.model.fetch();
    },
})
