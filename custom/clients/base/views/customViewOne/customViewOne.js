({
	initialize: function (options) {
        this._super('initialize', [options]);
        //add listener for custom button
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
		var linkName = "tasks";
		console.log('before fetching subpanel');
		var subPanelCollection = this.context.parent.getRelatedCollection(linkName);
		console.log('fetched');
		if(subPanelCollection)
		{
			subPanelCollection.fetch({relate: true});
			console.log('refreshed');

		}
		

		App.drawer.close();
	},

})





// temp : Backbone.View.extend({

// 	className: 'view1',
  
// 	events: {
// 	  'click .alertBtn': 'alertDrawer',
// 	  'click .cancelBtn': 'cancelDrawer'
// 	},
  
// 	template: _.template($('#myButtons').html()),
  
// 	initialize: function() {
// 	  this.listenTo(this.model, "change", this.render);
// 	},
  
// 	render: function() {
// 	  this.$el.html(this.template(this.model.attributes));
// 	  return this;
// 	},
  
// 	alertDrawer: function(e) {
// 	  e.preventDefault();
// 	  App.alert.show('button-fine', {
// 			level: 'success',
// 			messages: 'Short Preview Success',
// 			autoClose: false,
// 		});
// 	},
  
// 	cancelDrawer: function(e) {
// 	  e.preventDefault();
// 	  App.drawer.close();
// 	}
  
//   }),








// ({	
// 	className: 'view1',

// 	buttonBinding : function()
// 	{
// 		var BlahView = Backbone.View.extend({
// 			events: {
// 				"click .alertBtn": "alertDrawer",
// 				"click .cancelBtn": "cancelDrawer",
// 			},
		
// 			alertDrawer: function()
// 			{
// 				App.alert.show('button-fine', {
// 				  level: 'success',
// 				  messages: 'Short Preview Success',
// 				  autoClose: false,
// 				});
// 			},
		
// 			cancelDrawer: function()
// 			{
// 				App.drawer.close();
// 			},
// 		});
		
// 		var blahView = new BlahView({ el: $('#myButtons') });
// 	}


// })



	//className: 'view1',


	/*alertDrawer: function()
	{
	    App.alert.show('button-fine', {
	      level: 'success',
	      messages: 'Short Preview Success',
	      autoClose: false,
	    });
	},
	
	cancelDrawer: function()
	{
		App.drawer.close();
	},*/


