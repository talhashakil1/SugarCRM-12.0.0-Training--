({
    extendsFrom: 'RecordView',

    initialize: function(options)
    {
        this._super('initialize', [options]);
    },

    _render : function()
    {
        this._super('_render');
    },

    loadData: function()
    {
        this.changeDropDownOptions();
        this.populateContactName();
        this.render();
    },

    changeDropDownOptions: function()
    {
        var myOptions = {
            '' : '',
            'abc' : 'Dell',
            'Lenovo' : 'Lenovo',
            'Acer' : 'Acer',
        };
        this.meta.fields[0].options = myOptions;
    },

    populateContactName: function()
    {
        var bean = app.data.createBean('Contacts');
        var contacts = bean.fetch({
            success: _.bind(function(model){
                var contactsList = {};
                for (var i = 0; i < model.changed.records.length; ++i)
                {
                    contactsList[i] = model.changed.records[i].name;
                }
                this.meta.fields[1].options = contactsList;
                this.render();
            }, this),
            error: _.bind(function(error){
                console.log("Error while fetching bean model Contacts");
            }, this),
        })
    }
})