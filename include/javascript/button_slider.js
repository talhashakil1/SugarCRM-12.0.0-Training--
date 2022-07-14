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

function enableButtonSlider(divId){
	YUI({combine: true, timeout: 10000, base:"include/javascript/yui3/build/", comboBase:"index.php?entryPoint=getYUIComboFile&"}).use("node", "anim", function(Y) {
	    var module = Y.one('#'+divId);
	    if(module){
		     // add fx plugin to module body
		    var content = module.one('.yui-bd').plug(Y.Plugin.NodeFX, {
		        from: { 
		            width: function(node) { // dynamic in case of change
		                return node.get('scrollWidth'); // get expanded height (offsetHeight may be zero)
		            },
				opacity: 1			},
		        to: {
					width: 0,
					opacity: 0
		        },
		
		        easing: Y.Easing.backIn,
		        duration: 0.5
		    });
		
		    var onClick = function(e) {
		        module.toggleClass('yui-closed');
		        content.fx.set('reverse', !content.fx.get('reverse')); // toggle reverse 
		        content.fx.run();
		    };
		
		   	control = module.query('.yui-hd').query('.toggle');
		   	
		    // append dynamic control to header section
		  	if(control){
		  		control.on('click', onClick);
		  	}
		}//fi
	});
}
