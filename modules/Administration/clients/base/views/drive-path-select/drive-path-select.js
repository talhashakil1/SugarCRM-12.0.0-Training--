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
 * @class View.Views.Base.AdministrationDrivePathSelectView
 * @alias SUGAR.App.view.views.BaseAdminstrationDrivePathSelectView
 * @extends View.Views.Base.View
 */
({
    /**
     * @inheritdoc
     */
    events: {
        'click .folder': 'intoFolder',
        'click .setFolder': 'setFolder',
    },

    /**
     * @inheritdoc
     */
    initialize: function(options) {
        this._super('initialize', arguments);

        this.context.on('change:sharedWithMe', this.updateCurrentFolderPaths, this);

        const sharedWithMe = this.layout.getComponent('drive-path-buttons').sharedWithMe;

        this.currentPathFolders = sharedWithMe ? [
            {name: 'Shared', folderId: 'root', sharedWithMe: true},
        ] : [
            {name: 'My files', folderId: 'root'},
        ];

        this.pathIds = ['root'];
        this.driveType = this.context.get('driveType');
        this.loadFolders();
    },

    /**
     * reset the paths folders
     *
     * @param {Context} context
     */
    updateCurrentFolderPaths: function(context) {
        if (context.get('sharedWithMe')) {
            this.currentPathFolders = [{name: 'Shared', folderId: 'root', sharedWithMe: true},];
        } else {
            this.currentPathFolders = [{name: 'My files', folderId: 'root'},];
        }
    },

    /**
     * Load folders from the drive
     *
     * @param {string} currentFolderId
     * @param {boolean} sharedWithMe
     * @param {string} driveId Used for onedrive navigation
     */
    loadFolders: function(currentFolderId, sharedWithMe, driveId) {
        this.currentFolderId = currentFolderId || this.context.get('parentId');

        const url = app.api.buildURL('CloudDrive', 'list/folders');

        app.alert.show('folders-loading', {
            level: 'process'
        });

        app.api.call('create', url, {
            parentId: this.currentFolderId,
            sharedWithMe: sharedWithMe || false,
            driveId: driveId,
            type: this.driveType,
        }, {
            success: _.bind(function(result) {
                app.alert.dismiss('folders-loading');
                this.folders = result.files;
                this.render();
            }, this),
            error: function(error) {
                app.alert.show('drive-error', {
                    level: 'error',
                    messages: error.message,
                });
            },
        });
    },

    /**
     * Steps into a folder
     *
     * @param {Event} evt
     */
    intoFolder: function(evt) {
        const currentFolderId = evt.target.dataset.id;
        const currentFolderName = evt.target.dataset.name;
        const driveId = evt.target.dataset.driveid || null;

        const sharedWithMe = this.layout.getComponent('drive-path-buttons').sharedWithMe;

        if (evt.target.classList.contains('back')) {
            this.currentPathFolders.pop();
            this.pathIds.pop();
        } else {
            this.currentPathFolders.push({name: currentFolderName, folderId: currentFolderId, driveId: driveId});
            this.pathIds.push(currentFolderId);
        }

        this.driveId = driveId;
        this.currentFolderName = currentFolderName;

        this.parentId = this.pathIds[this.pathIds.length - 2];

        this.loadFolders(currentFolderId, sharedWithMe, driveId);
    },

    /**
     * Sets a folder as the current folder
     *
     * @param {Event} evt
     */
    setFolder: function(evt) {
        let folders = this.currentPathFolders;
        const folderId = evt.target.dataset.id;
        const folderName = evt.target.dataset.name;
        const driveId = evt.target.dataset.driveid;

        if (_.isArray(folders)) {
            folders.push({folderId: folderId, name: folderName, driveId: driveId,});
        }

        const url = app.api.buildURL('CloudDrive', 'path');

        app.alert.show('path-processing', {
            level: 'process'
        });

        app.api.call('create', url, {
            pathModule: this.context.get('pathModule'),
            isRoot: this.context.get('isRoot'),
            type: this.driveType,
            drivePath: JSON.stringify(folders),
            folderId: folderId,
            driveId: driveId,
            isShared: this.context.get('sharedWithMe'),
        } , {
            success: _.bind(function() {
                app.alert.dismiss('path-processing');
                app.drawer.close();
            }),
            error: function(error) {
                app.alert.show('drive-error', {
                    level: 'error',
                    messages: error.message,
                });
            }
        });
    }
});
