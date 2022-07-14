(function utils(app){app.Calendar=app.Calendar||{};let utils={};utils.buildUserKeyForStorage=function buildKeyForStorage(componentName){return'Calendar:'+app.user.id+':'+componentName+':storage';};utils.buildUserKeyForShowFilteredRecords=function buildKeyForStorage(componentName){return'Calendar:'+app.user.id+':'+componentName+':applyFilter';};utils.getConfigurationsByKey=function getConfigurationsByKey(key,calendarCategory){let calendarsSaved=app.cache.get(key);let calendarConfigurations={myCalendars:[],otherCalendars:[]};if(typeof calendarsSaved==='object'){if(!_.isEmpty(calendarCategory)){return calendarsSaved[calendarCategory];}
if(calendarsSaved.myCalendars.length>0){calendarConfigurations.myCalendars=calendarsSaved.myCalendars;}
if(calendarsSaved.otherCalendars.length>0){calendarConfigurations.otherCalendars=calendarsSaved.otherCalendars;}}
if(!_.isEmpty(calendarCategory)){return calendarConfigurations[calendarCategory];}
return calendarConfigurations;};utils.whiteColor=function whiteColor(c){c=c.substring(1);const rgb=parseInt(c,16);const r=(rgb>>16)&0xff;const g=(rgb>>8)&0xff;const b=(rgb>>0)&0xff;const luma=0.2126*r+0.7152*g+0.0722*b;if(luma<100){return false;}
return true;};function hashFnv32a(str,asString,seed){let i;let l;let hval=seed===undefined?0x811c9dc5:seed;for(i=0,l=str.length;i<l;i++){hval^=str.charCodeAt(i);hval+=(hval<<1)+
(hval<<4)+
(hval<<7)+
(hval<<8)+
(hval<<24);}
if(asString){return('0000000'+(hval>>>0).toString(16)).substr(-8);}
return hval>>>0;}
utils.pastelColor=function(str){let hash=hashFnv32a(str);const rHash=Math.abs(hash%200);hash=Math.round(hash / 1000);const gHash=Math.abs(hash%147);hash=Math.round(hash / 1000);const bHash=Math.abs(hash%147);const r=(rHash+50).toString(16);const g=(gHash+70).toString(16);const b=(bHash+70).toString(16);return'#'+r+g+b;};app.Calendar.utils=utils;})(SUGAR.App);