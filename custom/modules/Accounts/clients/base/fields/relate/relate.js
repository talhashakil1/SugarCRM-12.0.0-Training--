({
    extendsFrom: 'RelateField',
    initialize: function (options) {
        this._super('initialize', [options]);
    },

    getFilterOptions: function(force)
    {
        if (this._filterOptions && !force) {
            return this._filterOptions;
        }
        
        var custom_FilterOptions = new app.utils.FilterOptions().config({
            'initial_filter': 'filterMemberOf',
            'initial_filter_label': 'Member of for Account',
            'filter_populate': {
                'account_type': [this.model.get('account_type')],
            },
            'filter_relate': {
                'account_type': [this.model.get('account_type')],
            }
        }).populateRelate(this.model).format();

        //console.log("filterd options: ",custom_FilterOptions);
        console.log("this.model: ",this.model);

        this._filterOptions = custom_FilterOptions;
        console.log("this._filterOptions: ", this._filterOptions);
        return this._filterOptions;
     },

     
    //  buildFilterDefinition: function(searchTerm) {
    //     if (!app.metadata.getModule('Filters') || !this.filters) {
    //         return [];
    //     }
    //     var filterOptions = new app.utils.FilterOptions().config({
    //         'initial_filter': 'filterMemberOf',
    //         'initial_filter_label': 'Member of for Account',
    //         'filter_populate': {
    //             'account_type': [this.model.get('account_type')],
    //         },
    //         'filter_relate': {
    //             'account_type': [this.model.get('account_type')],
    //         }
    //     }).populateRelate(this.model).format();
    //     var filterBeanClass = app.data.getBeanClass('Filters').prototype,
    //         filter = this.filters.collection.get(filterOptions.initial_filter),
    //         filterDef,
    //         populate,
    //         searchTermFilter,
    //         searchModule;

    //     if (filter) {
    //         populate = filter.get('is_template') && filterOptions.filter_populate;
    //         filterDef = filterBeanClass.populateFilterDefinition(filter.get('filter_definition') || {}, populate);
    //         searchModule = filter.moduleName;
    //     }

    //     searchTermFilter = filterBeanClass.buildSearchTermFilter(searchModule || this.getSearchModule(), searchTerm);

    //     // If the related module has a default filter, apply that as well
    //     let moduleDefaultFilter = this._getModuleDefaultFilter();
    //     if (!_.isEmpty(moduleDefaultFilter)) {
    //         searchTermFilter = filterBeanClass.combineFilterDefinitions(moduleDefaultFilter, searchTermFilter);
    //     }

    //     return filterBeanClass.combineFilterDefinitions(filterDef, searchTermFilter);
    // },


//     /**
//      * Gets the default relate filter for the module, if one exists
//      * @return {null|Object}
//      * @private
//      */
//      _getModuleDefaultFilter: function() {
//         if (!app.metadata.getModule('Filters') || !this.filters || !this.filters.collection) {
//             return null;
//         }

//         let filterMetadata = this._getModuleDefaultFilterMetadata();
//         if (_.isEmpty(filterMetadata)) {
//             return null;
//         }

//         let filterBeanClass = app.data.getBeanClass('Filters').prototype;
//         let filterOptions = new app.utils.FilterOptions().config(filterMetadata).format();
//         let filter = this.filters.collection.get(filterOptions.initial_filter);
//         let filterDef = null;

//         if (filter) {
//             let populate = filter.get('is_template') && filterOptions.filter_populate;
//             filterDef = filterBeanClass.populateFilterDefinition(filter.get('filter_definition') || {}, populate);
//         }

//         return filterDef;
//     },



//     /**
//      * Builds the filter definition to pass to the request when doing a quick
//      * search.
//      *
//      * It will combine the filter definition for the search term with the
//      * initial filter definition. Both are optional, so this method may return
//      * an empty filter definition (empty `array`).
//      *
//      * @param {String} searchTerm The term typed in the quick search field.
//      * @return {Array} The filter definition.
//      */
//     buildFilterDefinition: function(searchTerm) {
//         if (!app.metadata.getModule('Filters') || !this.filters) {
//             return [];
//         }
//         var filterBeanClass = app.data.getBeanClass('Filters').prototype,
//             filterOptions = this.getFilterOptions() || {},
//             filter = this.filters.collection.get(filterOptions.initial_filter),
//             filterDef,
//             populate,
//             searchTermFilter,
//             searchModule;

//         if (filter) {
//             populate = filter.get('is_template') && filterOptions.filter_populate;
//             filterDef = filterBeanClass.populateFilterDefinition(filter.get('filter_definition') || {}, populate);
//             searchModule = filter.moduleName;
//         }

//         searchTermFilter = filterBeanClass.buildSearchTermFilter(searchModule || this.getSearchModule(), searchTerm);

//         // If the related module has a default filter, apply that as well
//         let moduleDefaultFilter = this._getModuleDefaultFilter();
//         if (!_.isEmpty(moduleDefaultFilter)) {
//             searchTermFilter = filterBeanClass.combineFilterDefinitions(moduleDefaultFilter, searchTermFilter);
//         }

//         return filterBeanClass.combineFilterDefinitions(filterDef, searchTermFilter);
//     },
    
    

//    /**
//     * Renders the editable dropdown using the `select2` plugin.
//     *
//     * Since a filter may have to be applied on the field, we need to fetch
//     * the list of filters for the current module before rendering the dropdown
//     * (and enabling the searchahead feature that requires the filter
//     * definition).
//     *
//     * @private
//     */
//    _renderEditableDropdown: function() {
//        var self = this;
//        var $dropdown = this.$(this.fieldTag);

//        if ($dropdown.data('select2')) {
//            return;
//        }
//        $dropdown.select2(this._getSelect2Options())
//            .on('select2-open', _.bind(this._onSelect2Open, this))
//            .off('searchmore')
//            .on('searchmore', function() {
//                $(this).select2('close');
//                self.openSelectDrawer();
//            })
//            .on('change', _.bind(this._onSelect2Change, this));

//        var plugin = $dropdown.data('select2');
//        if (plugin && plugin.focusser) {
//            plugin.focusser.on('select2-focus', _.bind(_.debounce(this.handleFocus, 0), this));
//        }
//    },
})