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

      console.log("this: " +this);
      console.log("this.child: " +this.child);
      console.log("this.model: " +this.model);
      console.log("this.context: " +this.context);

      var objEntries = Object.entries(this.context);
      console.log(Object.fromEntries(objEntries));
      // var obj = this.context;
      // var keys = Object.keys(obj);
      // keys.forEach(element => {
      //   console.log("key: "+element);
      // });


      

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
