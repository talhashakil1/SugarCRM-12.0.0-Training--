(function(app){app.events.on('app:init',function(){app.plugins.register('ConfigDrivenList',['layout','view'],{onAttach(component,plugin){this.before('render',this._beforeRenderActions,this);},_beforeRenderActions(){this._toggleFrozenHeaders();this._toggleFrozenFirstColumn();},_toggleFrozenHeaders(){const state=app.config.freezeListHeaders;this.$el.toggleClass('frozen-list-headers',state);},_toggleFrozenFirstColumn(){const hasFrozenColumn=this._getFrozenColumnConfig();const state=app.config.allowFreezeFirstColumn&&hasFrozenColumn;this.$el.toggleClass('sticky-first-column',state);const hasScrollContainer=!_.isNull(this.scrollContainer)||!_.isUndefined(this.scrollContainer);if(state&&hasScrollContainer&&this.action==='list'){this.listenToOnce(this,'render',()=>{this.scrollContainer.on('scroll',_.throttle(_.bind(this._toggleFrozenColumnBorder,this),200));});}},_getFrozenColumnConfig(){let settings;const listName=this.name;switch(listName){case'dashablelist':case'dashlet-console-list':settings=this.settings;break;case'dashablerecord':if(this._getActiveTab().type==='list'){settings=this.model;}else{settings=false;}
break;default:settings=false;}
if(!settings){return false;}
if(app.config.allowFreezeFirstColumn){return settings.get('freeze_first_column');}else{return false;}},_toggleFrozenColumnBorder(){const firstCol=this.$('table tbody tr td:first-child, table thead tr th:first-child');firstCol.toggleClass('column-border',this.scrollContainer[0].scrollLeft>0);},filterConfigFieldsForDashlet(){this.meta.panels.forEach(panel=>{panel.fields=panel.fields.filter(field=>{return field.showOnConfig?app.config[field.showOnConfig]:true;});});},onDetach:function(component,plugin){this.off('render',this._toggleFrozenHeaders,this);this.off('render',this._toggleFrozenFirstColumn,this);this.stopListening();}});});})(SUGAR.App);