(function(){if(typeof window.CustomEvent==="function"){return false;}
function CustomEvent(event,params){params=params||{bubbles:false,cancelable:false,detail:null};var evt=document.createEvent('CustomEvent');evt.initCustomEvent(event,params.bubbles,params.cancelable,params.detail);return evt;}
window.CustomEvent=CustomEvent;})();Number.isNaN=Number.isNaN||function isNaN(input){return typeof input==='number'&&input!==input;}
if(!Array.prototype.find){Object.defineProperty(Array.prototype,'find',{value:function(predicate){if(this==null){throw TypeError('"this" is null or not defined');}
var o=Object(this);var len=o.length>>>0;if(typeof predicate!=='function'){throw TypeError('predicate must be a function');}
var thisArg=arguments[1];var k=0;while(k<len){var kValue=o[k];if(predicate.call(thisArg,kValue,k,o)){return kValue;}
k++;}
return undefined;},configurable:true,writable:true});}
if(!Array.prototype.findIndex){Object.defineProperty(Array.prototype,'findIndex',{value:function(predicate){if(this==null){throw new TypeError('"this" is null or not defined');}
var o=Object(this);var len=o.length>>>0;if(typeof predicate!=='function'){throw new TypeError('predicate must be a function');}
var thisArg=arguments[1];var k=0;while(k<len){var kValue=o[k];if(predicate.call(thisArg,kValue,k,o)){return k;}
k++;}
return-1;},configurable:true,writable:true});}