/*
 * Your installation or use of this SugarCRM file is subject to the applicable
 * terms available at
 * http://support.sugarcrm.com/Resources/Master_Subscription_Agreements/.
 * If you do not agree to all of the applicable terms or do not have the
 * authority to bind the entity as an authorized representative, then do not
 * install or use this SugarCRM file.
 *
 * Copyright (C) SugarCRM Inc. All rights reserved.
 */

function password_confirmation() {
    var new_pwd=document.getElementById('new_password').value;
    var old_pwd=document.getElementById('old_password').value;
    var confirm_pwd=document.getElementById('confirm_pwd');
    if (confirm_pwd.value != new_pwd)
        confirm_pwd.style.borderColor= 'red';
    else
        confirm_pwd.style.borderColor='';
    
    if (confirm_pwd.value != (new_pwd.substring(0,confirm_pwd.value.length)))
        document.getElementById('comfirm_pwd_match').style.display = 'inline';
    else
        document.getElementById('comfirm_pwd_match').style.display = 'none';
        
    if (new_pwd != "" || confirm_pwd.value != "" || old_pwd !="" || (document.getElementById('page') && document.getElementById('page').value=="Change"))	
        document.getElementById('password_change').value = 'true';
    else
        document.getElementById('password_change').value = 'false';
}

function set_password(form,rules) {
	if(form.password_change.value == 'true'){
    	if( rules=='1'){
        	alert(ERR_RULES_NOT_MET);
        	return false;
    	}
    	
		if (form.is_admin.value != 1 && (form.is_current_admin && form.is_current_admin.value != '1')&& form.old_password.value == "" ){
			alert(ERR_ENTER_OLD_PASSWORD);
			return false;
		}
		
		if (form.new_password.value == "" ) {
			alert(ERR_ENTER_NEW_PASSWORD);
			return false;
		}
		
		if (form.confirm_pwd.value == ""){
			alert(ERR_ENTER_CONFIRMATION_PASSWORD);
			return false;
		}
		
		if (form.new_password.value == form.confirm_pwd.value)
			return true;
		else{
			alert(ERR_REENTER_PASSWORDS);
			return false;
		}
	}
	else
		return true;
}
  
    function newrules(minpwdlength,maxpwdlength,customregex){
    var good_rules=0;	            
    var passwd = document.getElementById('new_password').value;
        // length
        if(document.getElementById('lengths')){
        	var length =document.getElementById('new_password').value.length;
	        if((length < parseInt(minpwdlength) && parseInt(minpwdlength)>0)  || (length > parseInt(maxpwdlength) && parseInt(maxpwdlength)>0 )){
	            document.getElementById('lengths').className='bad';
	            good_rules=1;
	        }
	        else{document.getElementById('lengths').className='good';}
       	}
       
        // One lower case
        if(document.getElementById('1lowcase')){
	        if(!passwd.match('[abcdefghijklmnopqrstuvwxyz]')){
	            document.getElementById('1lowcase').className='bad';
	            good_rules=1;
	        }
	        else{document.getElementById('1lowcase').className='good';}
        }
        
        // One upper case
        if(document.getElementById('1upcase')){
	        if(!passwd.match('[ABCDEFGHIJKLMNOPQRSTUVWXYZ]')){
	            document.getElementById('1upcase').className='bad';
	            good_rules=1;
	        }
	        else{document.getElementById('1upcase').className='good';}
        }
        
        // One number
        if(document.getElementById('1number')){
	        if(!passwd.match('[0123456789]')){
	            document.getElementById('1number').className='bad';
	            good_rules=1;
	        }
	        else{document.getElementById('1number').className='good';}
        }
        
        // One special character
        if(document.getElementById('1special')){
            var custom_regex= new RegExp('[|}{~!@#$%^&*()_+=-]');
	        if(!custom_regex.test(passwd)){
	            document.getElementById('1special').className='bad';
	            good_rules=1;
	        }
	        else{document.getElementById('1special').className='good';}
        }
        
        
        // Custom regex
        if(document.getElementById('regex')){
            var regex = new RegExp(customregex);
	        if(regex.test(passwd)){
	            document.getElementById('regex').className='bad';
	            good_rules=1;
	        }
	        else{document.getElementById('regex').className='good';}
        }
    return good_rules;
    } 
    
	
function set_focus() {
    if (document.getElementById('error_pwd')){
        if (document.forms.length > 0) {
            for (i = 0; i < document.forms.length; i++) {
                for (j = 0; j < document.forms[i].elements.length; j++) {
                    var field = document.forms[i].elements[j];
                    if ((field.type == "password") && (field.name == "old_password" )) {
                        field.focus();
                        if (field.type == "text") {
                            field.select();
                        }
                        break;
                    }
                }
            }
        } 
    }
    else{
        if (document.forms.length > 0) {
            for (i = 0; i < document.forms.length; i++) {
                for (j = 0; j < document.forms[i].elements.length; j++) {
                    var field = document.forms[i].elements[j];
                    if ((field.type == "text" || field.type == "textarea" || field.type == "password") &&
                            !field.disabled && (field.name == "first_name" || field.name == "name" || field.name == "user_name" || field.name=="document_name")) {
                        field.focus();
                        if (field.type == "text") {
                            field.select();
                        }
                        break;
                    }
                }
            }
        }
    }
}
