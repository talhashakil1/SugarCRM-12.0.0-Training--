({
    plugins: ['Dashlet'],

    initialize: function(options) {
        this._super('initialize', [options]);
    },

    loadData: function()
    {
        var columnNameArray = this.dashletConfig.dashlets[0].preview.display_columns;
        this.meta.fields = [];
        for(const fieldName of columnNameArray)
        {
            var fieldMetaData = app.metadata.getField({name: fieldName, module: "Tasks"});
            this.meta.fields.push(fieldMetaData);
        }
        var bean = app.data.createBeanCollection("Tasks");
        bean.setOption({
            filter: {
                'contact_id': {
                    '$equals': this.context.get('modelId'),
                },
            }
        });
        var result = bean.fetch({
            success: _.bind(function(model){
                this.collection = model;
                this.render();
            }, this),
            error: _.bind(function(error){
                console.log("Error while fetching module Tasks");
            }, this),
        });
    }
})