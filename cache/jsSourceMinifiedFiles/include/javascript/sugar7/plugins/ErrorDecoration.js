(function(app){app.events.on("app:init",function(){app.plugins.register('ErrorDecoration',['view'],{onAttach:function(component,plugin){this.on('init',function(){this.model.on('validation:start validation:success',this.clearValidationErrors,this);},this);},clearValidationErrors:function(fields){fields=fields||_.toArray(this.fields);if(fields.length>0){_.defer(function(){_.each(fields,function(field){if(_.isFunction(field.clearErrorDecoration)&&field.disposed!==true){field.isErrorState=false;field.clearErrorDecoration();}});},fields);}
_.defer(()=>{if(this.disposed){return;}
this.$('.error').removeClass('error');this.$('.error-tooltip').remove();this.$('[data-toggle="tab"] .sicon-warning-circle').remove();});}});});})(SUGAR.App);