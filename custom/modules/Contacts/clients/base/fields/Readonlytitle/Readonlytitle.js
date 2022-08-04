({

    extendsFrom: 'TextField',



    initialize: function(options) {
        this._super('initialize', [options]);

        if(app.user.get('type') == 'admin')
        {
            this.def.readonly = false;
            console.log("admin");
        }
        else
        {
            this.def.readonly = true;
            console.log("normal user");
        }
    },

    _render: function() {


        this._super('_render');
    },

    format: function(value) {
        return this._super('format', [value]);
    },

    unformat: function(value) {
        return this._super('unformat', [value]);
    }
})