({
	initialize: function (options) {
        this._super('initialize', [options]);
        this.context.on('button:alertBtn:click', this.alertDrawer, this);
        this.context.on('button:cancelBtn:click', this.cancelDrawer, this);
    },

	alertDrawer: function()
	{
		App.alert.show('button-fine', {
			level: 'success',
			messages: 'Short Preview Success',
			autoClose: false,
		});
	},

	cancelDrawer: function()
	{
		console.log("related collection of tasks: "+this.context.attributes.model.getRelatedCollection("tasks"));
		var subPanelCollection = this.context.attributes.model.getRelatedCollection("tasks");
		console.log('fetched');
		if(subPanelCollection)
		{
		  subPanelCollection.fetch({relate: true});
		  console.log('refreshed');
  
		}
		//App.drawer.close();
	},

})