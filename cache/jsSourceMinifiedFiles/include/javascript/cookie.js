function Get_Cookie(name){var start=document.cookie.indexOf(name+'=');var len=start+name.length+1;if((!start)&&(name!=document.cookie.substring(0,name.length)))
return null;if(start==-1)
return null;var end=document.cookie.indexOf(';',len);if(end==-1)end=document.cookie.length;if(end==start){return'';}
return unescape(document.cookie.substring(len,end));}
function Set_Cookie(name,value,expires,path,domain,secure){var today=new Date();today.setTime(today.getTime());if(expires){expires=expires*1000*60*60*24;}
var expires_date=new Date(today.getTime()+(expires));document.cookie=name+"="+escape(value)+
((expires)?";expires="+expires_date.toGMTString():"")+
((path)?";path="+path:"")+
((domain)?";domain="+domain:"")+
((secure)?";secure":"");}
function Delete_Cookie(name,path,domain){if(Get_Cookie(name))
document.cookie=name+'='+
((path)?';path='+path:'')+
((domain)?';domain='+domain:'')+';expires=Thu, 01-Jan-1970 00:00:01 GMT';}
function get_sub_cookies(cookie){var cookies=new Array();var end='';if(cookie&&cookie!=''){end=cookie.indexOf('#')
while(end>-1){var cur=cookie.substring(0,end);cookie=cookie.substring(end+1,cookie.length);var name=cur.substring(0,cur.indexOf('='));var value=cur.substring(cur.indexOf('=')+1,cur.length);cookies[name]=value;end=cookie.indexOf('#')}}
return cookies;}
function subs_to_cookie(cookies){var cookie='';for(var i in cookies){if(typeof(cookies[i])!="function"){cookie+=i+'='+cookies[i]+'#';}}
return cookie;}