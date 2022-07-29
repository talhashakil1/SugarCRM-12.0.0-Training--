({
    className : "fourFieldsView",
	initialize: function (options) {
        this._super('initialize', [options]);
       //console.log("this : initialize: ", this);
    },

    _render : function()
    {
        this._super('_render');
    },

    loadData : function()
    {
        var bean = app.data.createBean("Accounts", {id: "118b4bda-0756-11ed-b7dc-6018954cf469"});
        var result = bean.fetch({
            success: _.bind(function(model){

                this.model = model;
                this.render();

            }, this),
            error: _.bind(function(){
                console.log("Error while fetching bean model");
            }, this),
        });
    }
})


 