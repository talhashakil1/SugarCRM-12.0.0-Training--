({
    extendsFrom: 'RecordView',


    initialize: function (options) {
        this._super('initialize', [options]);

        //add listener for custom button
        this.context.on('button:short_preview_button:click', this.short_preview_button, this);
    },

    short_preview_button: function() {
        /*app.alert.show('button-fine', {
          level: 'success',
          messages: 'Short Preview Success',
          autoClose: false,
        });*/



      app.drawer.open({
        layout: 'customLayoutOne',
        context: {
          title: "Custom Drawer",
          // url: "http://localhost/SugarEnt-Full-12.0.0/#Contacts/layout/customLayoutOne",
        },
      },
      function() {
          alert('Drawer closed.');
          app.drawer.close();
      });



    }
})
