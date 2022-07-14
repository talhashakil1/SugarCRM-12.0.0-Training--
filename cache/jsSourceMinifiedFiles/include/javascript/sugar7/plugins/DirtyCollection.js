(function(app){app.events.on("app:init",function(){app.plugins.register('DirtyCollection',['view'],{dirtyModels:new Backbone.Collection(),dirtyTimeperiod:undefined,dirtyUser:undefined,dirtyCanEdit:undefined,onAttach:function(component,plugin){this.on('init',function(){this.attachListeners();},this);},onDetach:function(){this.dirtyModels.off(null,null,this);},attachListeners:function(){this.collection.on('reset',this.cleanUpDirtyModels,this);this.collection.on("change",this._collectionChangeAddToDirtyModels,this);},_collectionChangeAddToDirtyModels:function(model){if(_.isUndefined(this.dirtyTimeperiod)||_.isUndefined(this.dirtyUser)){var ctx=this.context.parent||this.context;this.dirtyTimeperiod=ctx.get('selectedTimePeriod');this.dirtyUser=ctx.get('selectedUser');this.dirtyCanEdit=(this.dirtyUser.id==app.user.get('id'));;}
this.dirtyModels.add(model);},isDirty:function(){return(this.dirtyModels.length>0);},cleanUpDirtyModels:function(){this.dirtyModels.reset();this.dirtyTimeperiod=undefined;this.dirtyUser=undefined;this.dirtyCanEdit=undefined;}});});})(SUGAR.App);