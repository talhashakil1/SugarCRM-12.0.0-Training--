{*
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
*}
{sugar_getscript file="cache/include/javascript/sugar_grp_yui_widgets.js"}
<script>
 /*
        *  a reference to an instance of PackageManagerGrid
        */
        var _pmg;

if(typeof PackageManager == 'undefined') {
	PackageManager = function() {
		var MAX_HEIGHT = 300;
        var MIN_HEIGHT = 0;
        var _treeHeight;
        var _listHeight;
        var _attributes = {
            height: {
                to: MAX_HEIGHT
            }
        };
        var _anim;
        var keys = [ "local_upload","server_upload"];
        var tabPreviousKey = '';
        /*
        *  Maintain an array to hold which packages we would like to download
        */
        var _packages;
        /*
        *	Keep track of the current number of packages that have successfully
        *	downloaded
        */
		var _numDownloadsComplete = 0;
		/*
		*	The number of downloads we have to retrieve
		*/
		var _numPackagesToDownload = 0;
        var _loginPanel;
        var _tabs;
        var _loadingBar;

	    return {
	        search: function() {
	        	PackageManager.showWaiting();
	        	var searchTerm = document.getElementById('search_term').value;
	        	postData = 'entryPoint=HandleAjaxCall&to_pdf=1&module=Administration&action=HandleAjaxCall&method=performBasicSearch&search_term=' + searchTerm + '&csrf_token=' + SUGAR.csrf.form_token;
                var cObj = YAHOO.util.Connect.asyncRequest(
                    'POST',
                    'index.php',
                    {
                        success: PackageManager.completeSearch,
                        failure: PackageManager.completeSearch
                    },
                    postData
                );
	        },
	        initWorkingDiv : function(){
	        	statusDiv = document.getElementById('workingStatusDiv');
				statusDiv.className = 'dataLabel';
				statusDiv.style.position = 'absolute';
				var fileview = document.getElementById('treeview');
				var top = fileview.offsetTop;
				var height = fileview.offsetHeight;
				var left = fileview.offsetLeft;
				var width = fileview.offsetWidth;
				statusDiv.style.top = (top+(height/2));
				statusDiv.style.left = (left+(width/2));
	        },
	        initDocumentationDiv : function(){
	        	documentationDiv = document.createElement('div');
				documentationDiv.style.position = 'absolute';
				var fileview = document.getElementById('catview');
				var top = fileview.offsetTop;
				var height = fileview.offsetHeight;
				var left = fileview.offsetLeft;
				var width = fileview.offsetWidth;
				documentationDiv.style.top = (top+(height/2));
				documentationDiv.style.left = (left+(width/2));
				documentationDiv.id = 'documentation-div';
				documentationDiv.style.display = 'block';
				formDiv = document.createElement('form');
				documentationDiv.appendChild(formDiv);
				document.body.appendChild(documentationDiv);
	        },
	        initPMG: function(){
	        	//PackageManager.showLoginDialog();
	        	 {if $module_load == 'true'}
	        	 PackageManager.initTabs();
	        	 _pmg = new PackageManagerGrid();
	        	 _pmg.renderAll();
	        	{elseif $IS_ALIVE == 'true'}
                _loadingBar =
                    new YAHOO.widget.Panel("wait",
                        {
                            width: "240px",
                            fixedcenter: true,
                            close: false,
                            draggable: false,
                            modal: true,
                            visible: false,
                            effect: {
                                effect: YAHOO.widget.ContainerEffect.FADE,
                                duration:0.5
                            }
                        }
                    );
					_loadingBar.setHeader("{$MOD.SEARCHING_UPDATES}");
					_loadingBar.setBody("<img src=\"include/javascript/yui/assets/rel_interstitial_loading.gif?v={literal}{VERSION_MARK}{/literal}\"/>");
					_loadingBar.render(document.body);
					_loadingBar.show();
	        		_pmg = new PackageManagerGrid();
	        	 	_pmg.renderAll();
	        	 {/if}
    			var tabView = new YAHOO.widget.TabView('demo');
	        },
	        download : function(){
	        	if(confirm('{$MOD.DOWNLOAD_QUESTION}')){
	        		_numDownloadsComplete = 0;
	        		_numPackagesToDownload = 0;
	        		var tree = YAHOO.widget.TreeView.getTree('treeview');
	        		var nodes = tree.getNodesByProperty('isSelected', true);
	        		if(nodes){
	        			PackageManager.showWaiting();
                        _loadingBar =
                            new YAHOO.widget.Panel("wait",
                                {
                                    width: "240px",
                                    fixedcenter: true,
                                    close: false,
                                    draggable: false,
                                    modal: true,
                                    visible: false,
                                    effect: {
                                        effect: YAHOO.widget.ContainerEffect.FADE,
                                        duration: 0.5
                                    }
                                }
                            );

					_loadingBar.setHeader("{$MOD.DOWNLOADING}");
					_loadingBar.setBody("<img src=\"include/javascript/yui/assets/rel_interstitial_loading.gif?v={literal}{VERSION_MARK}{/literal}\"/>");
					_loadingBar.render(document.body);
					_loadingBar.show();
	        			var count = nodes.length;
	        			for(j = 0; j < count; j++){
	   						if(nodes[j].type == 'release'){
	   							_numPackagesToDownload++;
	   						}
	   					}
	        			_loadingBar.setHeader("{$MOD.DL_PACKAGES_DOWNLOADING} "+_numPackagesToDownload+" {$MOD.DL_PACKAGES_PACKAGES}");
	        			for (i = 0; i < count; i++){
							var release_id = -1;
	        				var package_id = -1;
							var category_id = -1;

							if(nodes[i].type == 'package'){
								var package_id = nodes[i].data.id;
								var category_id = nodes[i].category_id;
							}else if(nodes[i].type == 'release'){
								var release_id = nodes[i].data.id;
								var package_id = nodes[i].package_id;
								var category_id = nodes[i].category_id;
								postData = 'entryPoint=HandleAjaxCall&to_pdf=1&module=Administration&action=HandleAjaxCall&method=download&release_id=' + release_id + '&package_id=' + package_id + '&category_id=' + category_id + '&csrf_token=' + SUGAR.csrf.form_token;
                                var cObj = YAHOO.util.Connect.asyncRequest(
                                    'POST',
                                    'index.php',
                                    {
                                        success: PackageManager.downloadComplete,
                                        failure: PackageManager.downloadComplete
                                    },
                                    postData
                                );
							}
						}
					}//fi
	        	}
	        },
	        downloadComplete : function(data){

	        PackageManager.hideWaiting();
                var result = JSON.parse(data.responseText);
	        	if(typeof result != 'undefined') {
	        		_numDownloadsComplete++;
					_loadingBar.setHeader("{$MOD.DL_PACKAGES_DOWNLOADING} "+_numDownloadsComplete+" {$MOD.DL_PACKAGES_OF} "+_numPackagesToDownload+ " {$MOD.DL_PACKAGES_PACKAGES}");
	        		if(_numPackagesToDownload == _numDownloadsComplete){
						_loadingBar.hide();
	        			if(!{$INSTALLATION}){
	        				PackageManager.getPackagesInStaging();
	        			}else{
	        				document.installForm.run.value = '';
	        				document.installForm.mode.value = 'noop';
	        				document.installForm.submit();
	        			}
	        		}
				}

	        },
	        getPackagesInStaging : function(){
                postData = 'entryPoint=HandleAjaxCall&to_pdf=1&module=Administration&action=HandleAjaxCall&method=getPackagesInStaging&csrf_token=' + SUGAR.csrf.form_token;
                var cObj = YAHOO.util.Connect.asyncRequest(
                    'POST',
                    'index.php',
                    {
                        success: PackageManager.populateGrid,
                        failure: PackageManager.populateGrid
                    },
                    postData
                );
	        },
	        buildListView : function(result, showDownloadButton){
	        	var result_div = document.getElementById('search_results_div');
				display = "<table class='list view' width='100%'  cellpadding='0' cellspacing='0' width='100%' border='0'>";
		        display += "<tr><th align=left class='listViewThLinkS1'>{$MOD.LBL_ML_NAME}</th><th align=left class='listViewThLinkS1'>{$MOD.LBL_ML_TYPE}</th><th align=left class='listViewThLinkS1'>{$MOD.LBL_ML_VERSION}</th><th align=left class='listViewThLinkS1'>{$MOD.LBL_ML_PUBLISHED}</th><th class='listViewThLinkS1'>{$MOD.LBL_ML_DESCRIPTION}</th><th class='listViewThLinkS1'>{$MOD.LBL_ML_ACTION}</th></tr>";
		        for (var x = 0; x < result['packages'].length; x++)
	   			{
	   				var class_css = "oddListRowS1";
                	if((x % 2) == 0){
                    	class_css = "evenListRowS1";
                	}
	   				install_link = '';
	   				if(showDownloadButton){
                		install_link += "<input type=submit class='button' name=\"btn_mode\" onclick=\"this.form.mode.value='Install';this.form.package_id.value="+result['packages'][x]['id']+";this.form.submit();\" value=\"{$MOD.LBL_UW_BTN_DOWNLOAD}\" />";
                	}
                	display += "<tr class=\""+class_css+"\"><td nowrap=\"nowrap\">"+result['packages'][x]['name']+"</td><td nowrap=\"nowrap\">"+result['packages'][x]['type']+"</td><td nowrap=\"nowrap\">"+result['packages'][x]['version']+"</td><td nowrap=\"nowrap\">"+result['packages'][x]['date_published']+"</td><td nowrap=\"nowrap\">"+result['packages'][x]['description']+"</td><td nowrap=\"nowrap\">"+install_link+"</td></tr>";
	   			}//rof
	   			display += "</table>";
	   			return display;
	        },
	        showStatusMessages: function(message){
	        	if(message != '')
	        		ajaxStatus.flashStatus(message, 5000);
	        },
	        populateGrid : function(data){
                var result = JSON.parse(data.responseText);
	            if(typeof result != 'undefined') {
	        		//uncheck all treenodes
	        		var tree = YAHOO.widget.TreeView.getTree('treeview');
	        		var root = tree.getRoot();

	        		PackageManager.uncheckAll(root);
		        	_pmg.clearGrid();
		   			for (var x = 0; x < result['packages'].length; x++){
						_pmg.addData(result['packages'][x]);
					}
		   		}
	        },
	        uncheckAll : function(node){
	        	var topNodes = node.children;
       		 	for(var i=0; i< topNodes.length; ++i) {
       		 		if(topNodes[i].checked){
            			topNodes[i].uncheck();
            		}
            		PackageManager.uncheckAll(topNodes[i]);
        		}
	        },
	        completeSearch: function(data){
                var result = JSON.parse(data.responseText);

	        	if(typeof result != 'undefined') {
	        		PackageManager.populateGrid(result);
				}
				PackageManager.hideWaiting();
	        },
	        toggleLowerDiv: function(outer_div, animate_div){
                var show_img = '{$SHOW_IMG}';
                var hide_img = '{$HIDE_IMG}';
                var spn = document.getElementById(outer_div);
                var anim_div = document.getElementById(animate_div);

                if(anim_div.style.display == 'block'){
                	anim_div.style.display = 'none';
                }else{
                	anim_div.style.display = 'block';
                }
                spn.innerHTML =(anim_div.style.display == 'none') ? show_img+"&nbsp;Expand" : hide_img+"&nbsp;Collapse";
            },
            toggleDiv: function(outer_div, animate_div){
                var show_img = '{$SHOW_IMG}';
                var hide_img = '{$HIDE_IMG}';
                var spn = document.getElementById(outer_div);
                var anim_div = document.getElementById(animate_div);
                _attributes.height.to = (_attributes.height.to == MAX_HEIGHT) ? MIN_HEIGHT : MAX_HEIGHT;
                if(!_anim){
                	MAX_HEIGHT = anim_div.offsetHeight;
                    _attributes.height.to = MIN_HEIGHT;
                }
                _anim = new YAHOO.util.Anim(animate_div, _attributes, 0.5, YAHOO.util.Easing.bounceOut);
                if(_attributes.height.to == MIN_HEIGHT){
                	anim_div.style.display = 'none';
                }else{
                	anim_div.style.display = 'block';
                }
                  spn.innerHTML =(_attributes.height.to == MIN_HEIGHT) ? show_img+"&nbsp;Expand" : hide_img+"&nbsp;Collapse";
                _anim.attributes = _attributes;

                 _anim.animate();

            },
            toggleView: function(type){
            	var treeview = document.getElementById('treeview');
            	var searchview = document.getElementById('searchview');
               if(type == 'browse'){
               	treeview.style.display = 'block';
               	searchview.style.display = 'none';
               }else{
               	treeview.style.display = 'none';
               	searchview.style.display = 'block';
               }
            },
            selectTabCSS: function(key){
            	for( var i=0; i<keys.length;i++)
              	{
                	var liclass = '';
                	var linkclass = '';

                	if ( key == keys[i])
                	{
                    	var liclass = 'active';
                    	var linkclass = 'current';
                    	document.getElementById(keys[i]+'_div').style.display = 'block';
                	}else{
                    	document.getElementById(keys[i]+'_div').style.display = 'none';
                	}
                	document.getElementById(keys[i]+'_li').className = liclass;
                	document.getElementById(keys[i]+'_link').className = linkclass;
            	}
                tabPreviousKey = key;
            },
            loadDataForNodeForPackage : function(node, onCompleteCallback){
				PackageManager.showWaiting();
            	var id= node.data.id;
 				var callback =	{
		  			success: function(data) {
                        var result = JSON.parse(data.responseText);
			    		if(typeof result != 'undefined') {
							var tmpNode = node;
							for ( key in result['nodes'] ) {
								if(result['nodes'][key]['type']){

									var myobj = {
									    label: result['nodes'][key]['label'],
                                        id: result['nodes'][key]['id']
									};
		   							tmpNode= new YAHOO.widget.TextNode(myobj, node, false);
									tmpNode.href = "javascript:PackageManager.catClick('treeview',"+tmpNode.index+");";
		   							tmpNode.setDynamicLoad(PackageManager.loadDataForNodeForPackage);
									tmpNode.data['description'] = result['nodes'][key]['description'];
								}else{
									tmpNode = node;
								}
								if(result['nodes'][key]['packages']){
									for(pKey in result['nodes'][key]['packages']){

										if(result['nodes'][key]['packages'][pKey]['releases'] && !result['nodes'][key]['packages'][pKey]['releases'].length && result['nodes'][key]['packages'][pKey]['releases'].length != 0){
											var myobj = {
                                                label: result['nodes'][key]['packages'][pKey]['label'],
                                                id: result['nodes'][key]['packages'][pKey]['id']
                                            };
			   								var tmpNodePackage = new YAHOO.widget.TaskNode(myobj, tmpNode, true);
			   								tmpNodePackage.href = "javascript:PackageManager.packageClick('treeview',"+tmpNodePackage.index+");"
											tmpNodePackage.description = result['nodes'][key]['packages'][pKey]['description']
											tmpNodePackage.type = 'package';
											tmpNodePackage.category_id = result['nodes'][key]['id'];
											tmpNodePackage.onCheckClick = function(){
																			this.data['isSelected'] = this.checked;
																			for (var i=0; i<this.children.length; ++i) {
	            																this.children[i].data['isSelected'] = this.checked;
	        																}
																		  };
											if(result['nodes'][key]['packages'][pKey]['releases']){
												for(releaseKey in result['nodes'][key]['packages'][pKey]['releases']){
                                                    var myobj = {
                                                        label: result['nodes'][key]['packages'][pKey]['releases'][releaseKey]['label'],
                                                        id: result['nodes'][key]['packages'][pKey]['releases'][releaseKey]['id']
                                                    };

			   										if(result['nodes'][key]['packages'][pKey]['releases'][releaseKey]['enable'] == true){
			   											var tmpNodeRelease = new YAHOO.widget.TaskNode(myobj, tmpNodePackage, false);
														tmpNodeRelease.setDynamicLoad(PackageManager.loadDataForNodeForRelease);
                                                        tmpNodeRelease.onCheckClick = function () {
                                                            this.data['isSelected'] = this.checked;
                                                        };
													}else{
														var tmpNodeRelease = new YAHOO.widget.TextNode(myobj, tmpNodePackage, true);
													}
													tmpNodeRelease.version = result['nodes'][key]['packages'][pKey]['releases'][releaseKey]['version']
			   										tmpNodeRelease.href = "javascript:PackageManager.releaseClick('treeview',"+tmpNodeRelease.index+");"
													tmpNodeRelease.type = 'release';
													tmpNodeRelease.category_id = tmpNode.data.id;
													tmpNodeRelease.package_id = result['nodes'][key]['packages'][pKey]['id'];
												}//rof
											}//fi
											//tmpNodePackage.setDynamicLoad(PackageManager.loadDataForNodeForPackage);
										}//fi
									}//rof
								}//fi
							}//rof
	   					}//fi
	   				PackageManager.hideWaiting();
	   				if (typeof onCompleteCallback == 'function') onCompleteCallback();
		  			},
		  			failure: function(data) {
		  			    if (typeof onCompleteCallback == 'function') onCompleteCallback();
		  			}
				}

				postData = 'entryPoint=HandleAjaxCall&to_pdf=1&module=Administration&action=HandleAjaxCall&method=getNodes&category_id=' + id + '&csrf_token=' + SUGAR.csrf.form_token;
				var cObj = YAHOO.util.Connect.asyncRequest('POST','index.php',
								  callback, postData);

            },
            showWaiting : function(text){
				ajaxStatus.showStatus(text);
            },
            hideWaiting : function(text){
				ajaxStatus.hideStatus();
            },
            node_click : function(treeid){
				node=YAHOO.namespace(treeid).selectednode;
				//request url.
				document.installForm.mode.value='Install';
				document.installForm.package_id.value=node.data.id;
				document.installForm.submit();
            },
            installPackage : function(file){
				PackageManager.showWaiting();
				//get the list of packages that belong to this node
				var callback =	{
		  			success: function(data) {
                    var result = JSON.parse(data.responseText);
			    		if(typeof result != 'undefined') {
							var licenseDiv = document.getElementById('licenseDiv');
							licenseDiv.style.display = 'block';
							licenseDiv.innerHTML = result['license_display'];
	   					}//fi
	   				PackageManager.hideWaiting();
	   				if (typeof onCompleteCallback == 'function') onCompleteCallback();
		  			},
		  			failure: function(data) {
		  			    if (typeof onCompleteCallback == 'function') onCompleteCallback();
		  			}
				}

				postData = 'entryPoint=HandleAjaxCall&to_pdf=1&module=Administration&action=HandleAjaxCall&method=getLicenseText&file='+ file + '&csrf_token=' + SUGAR.csrf.form_token;
				var cObj = YAHOO.util.Connect.asyncRequest('POST','index.php',
								  callback, postData);
            },
            deletePackagae : function(package_id){
				alert(package_id);
            },
			toggle_div : function toggle_div(id)
			{

				var dv = document.getElementById("release_table_"+id);
				var spn = document.getElementById("span_toggle_package_"+id);
				dv.style.display =(dv.style.display == 'none') ? 'block' : 'none';

				spn.innerHTML =(dv.style.display == 'none') ? show_img + "&nbsp;" : hide_img + "&nbsp;";
			},
            processLicense : function(file){
            	var licenseDiv = document.getElementById('licenseDiv');
								licenseDiv.style.display = 'none';
				PackageManager.showWaiting();
				//get the list of packages that belong to this node
				var callback =	{
		  			success: function(data) {
	   				PackageManager.hideWaiting();
	   				if (typeof onCompleteCallback == 'function') onCompleteCallback();
		  			},
		  			failure: function(data) {
		  			    if (typeof onCompleteCallback == 'function') onCompleteCallback();
		  			}
				}

				postData = 'entryPoint=HandleAjaxCall&to_pdf=1&module=Administration&action=HandleAjaxCall&method=performInstall&file=' + file + '&csrf_token=' + SUGAR.csrf.form_token;
				var cObj = YAHOO.util.Connect.asyncRequest('POST','index.php',
								  callback, postData);
            },
            getDocumentation : function(package_id, release_id){
            	PackageManager.showWaiting();
            	//var documentationWorkingDiv = document.getElementById('documentationWorkingDiv');
            	//documentationWorkingDiv.style.display = 'block';
	        	//var documentationDiv = document.getElementById('Documentation');
				//get the list of packages that belong to this node
				var callback =	{
		  			success: function(data) {

                        var result = JSON.parse(data.responseText);
			    		if(typeof result != 'undefined') {
			    		var screenshot_count = 0;
			    			var screenshot_html = "<table><tr>";
			    			var html = "<table><tr><th>Name</th><th>Description</th></tr>";
			    			for (var x = 0; x < result['documents'].length; x++){

			    				if(result['documents'][x]['type'] == 'image'){

			    					if((screenshot_count % 3) == 0){
			    						screenshot_html += "<tr>";
			    					}
			    					var url = result['documents'][x]['url'];
			    					if(result['documents'][x]['preview_url']){
			    						url = result['documents'][x]['preview_url'];
			    					}
			    					screenshot_html += "<td><a href='"+result['documents'][x]['url']+"' border='0' target='blank'><img src='"+url+"'></a></td>";
			    					if((screenshot_count % 3) == 0 && screenshot_count > 0){
			    						screenshot_html += "</tr>";
			    					}
			    					screenshot_count++;
			    				}else{
			    					html += "<tr>";
			    					html += "<td><a href='"+result['documents'][x]['url']+"' onClick='PackageManager.downloadedDocumentation("+result['documents'][x]['id']+");' target='blank'>"+result['documents'][x]['name']+"</a></td>";
			    					html += "<td>"+result['documents'][x]['description']+"</td>";
			    					html += "</tr>";
			    				}
			    			}//rof
			    			html += "</table>";
			    			screenshot_html += "</table>";
			    			var detailsTab = _tabs.getTab(1);
        					detailsTab.setContent(html, false);
        					var screenShotTab = _tabs.getTab(2);
        					screenShotTab.setContent(screenshot_html, false);
							PackageManager.hideWaiting();
	   					}//fi
	   				if (typeof onCompleteCallback == 'function') onCompleteCallback();
		  			},
		  			failure: function(data) {
		  			    documentationWorkingDiv.style.display = 'none';
		  			    PackageManager.hideWaiting();
		  			    if (typeof onCompleteCallback == 'function') onCompleteCallback();
		  			}
				}

				postData = 'entryPoint=HandleAjaxCall&to_pdf=1&module=Administration&action=HandleAjaxCall&method=getDocumentation&package_id='+package_id+'&release_id='+release_id+ '&csrf_token=' + SUGAR.csrf.form_token;
				var cObj = YAHOO.util.Connect.asyncRequest('POST','index.php',
								  callback, postData);
	        },
	        downloadedDocumentation : function(document_id){
				var callback =	{
		  			success: function(data) {
	   					if (typeof onCompleteCallback == 'function') onCompleteCallback();
		  			},
		  			failure: function(data) {
		  			    if (typeof onCompleteCallback == 'function') onCompleteCallback();
		  			}
				}

				postData = 'entryPoint=HandleAjaxCall&to_pdf=1&module=Administration&action=HandleAjaxCall&method=downloadedDocumentation&document_id=' + document_id + '&csrf_token=' + SUGAR.csrf.form_token;
				var cObj = YAHOO.util.Connect.asyncRequest('POST','index.php',
								  callback, postData);
            },
            packageClick : function(treeid, index){

				node=YAHOO.widget.TreeView.getNode(treeid, index);
				//var dt = document.getElementById('Details');
				var html ="<table>";
				html += "<tr><td>Name:</td><td>"+node.label+"</td></tr>";
				html += "<tr><td>Description:</td><td>"+node.description+"</td></tr>";
				html += "</table>";
				PackageManager.getDocumentation(node.data.id, '');
				var detailsTab = _tabs.getTab(0);
        		detailsTab.setContent(html, false);
        		detailsTab.activate();
            },
            releaseClick : function(treeid, index){
				node=YAHOO.widget.TreeView.getNode(treeid, index);
				var html ="<table>";
				html += "<tr><td>Description:</td><td>"+node.label+"</td></tr>";
				html += "<tr><td>Version:</td><td>"+node.version+"</td></tr>";
				html += "</table>";
				var detailsTab = _tabs.getTab(0);
        		detailsTab.setContent(html, false);
        		detailsTab.activate();
				PackageManager.getDocumentation('', node.data.id);
            },
            catClick : function(treeid, index){
           		var node = YAHOO.namespace(treeid).selectednode;
				var html ="<table>";
				html += "<tr><td>Name:</td><td>"+node.label+"</td></tr>";
				html += "<tr><td>Description:</td><td>"+node.data['description']+"</td></tr>";
				html += "</table>";
				var detailsTab = _tabs.getTab(0);
        		detailsTab.setContent(html, false);
        		detailsTab.activate();
            },
            select_package : function(package_id){
            	var dv = document.getElementById("package_tr_"+package_id);
            	dv.style.display='none';
            	var downloadTable = document.getElementById('filedownloadtable');
            	var tr = document.createElement('tr');
            	tr.innerHTML = dv.innerHTML
            	downloadTable.appendChild(tr);
            	var table = document.getElementById('fileviewtable');
            	table.deleteRow(0);

            },
            showErrors : function(errors){
            	 dialog = new YAHOO.ext.BasicDialog("loginView", {
                        autoTabs:true,
                        width:500,
                        height:300,
                        shadow:true,
                        minWidth:300,
                        minHeight:250,
                        proxyDrag: true
                });
                dialog.addKeyListener(27, dialog.hide, dialog);
                dialog.addButton('Close', dialog.hide, dialog);
                dialog.addButton('Submit', dialog.hide, dialog).disable();
                dialog.show();
            },
            select_release : function(release_id){
            	var dv = document.getElementById("release_tr_"+release_id);
            },
			checkForUpdates : function(){
				PackageManager.showWaiting();
				var callback =	{
		  			success: function(data) {
                        var result = JSON.parse(data.responseText);
	        				if(typeof result != 'undefined') {
	        					var tree = YAHOO.widget.TreeView.getTree('treeview');
								var root = tree.getRoot();
                                var myobj = {
                                    label: 'Updates',
                                    id: 'updates'
                                };
								tmpNode = tree.getNodeByProperty('id', 'updates');
								if(!tmpNode){
		   							tmpNode= new YAHOO.widget.TextNode(myobj, root, false);
									tmpNode.data['description'] = 'Updates Found';
								}else{
									tree.removeChildren(tmpNode);
								}
								tmpNode.expanded = true;

								for (var x = 0; x < result['updates'].length; x++){
									var myobj = {
									    label: result['updates'][x]['label'],
                                        id:result['updates'][x]['id']
									};
		   							var tmpNodeRelease = new YAHOO.widget.TaskNode(myobj, tmpNode, false);
									tmpNodeRelease.version = result['updates'][x]['version'];
		   							tmpNodeRelease.href = "javascript:PackageManager.releaseClick('treeview',"+tmpNodeRelease.index+");"
		   							tmpNodeRelease.setDynamicLoad(PackageManager.loadDataForNodeForRelease);
									if(result['updates'][x]['type'] == 'patch'){
										tmpNodeRelease.onCheckClick = function(){
                                            this.uncheck();
                                            if(confirm('{$MOD.MI_REDIRECT_TO_UPGRADE_WIZARD}')){
                                                location.href = '{$UPGARDE_WIZARD_URL}'
                                            }
										};
									}else{
										tmpNodeRelease.onCheckClick = function(){
                                            this.data['isSelected'] = this.checked;
										};
									}
									tmpNodeRelease.type = 'release';
									tmpNodeRelease.category_id = '';
									tmpNodeRelease.package_id = '';
								}//rof
								tree.draw();
							}//fi
				    if (typeof onCompleteCallback == 'function') onCompleteCallback();
		  			},
		  			failure: function(data) {
		  			    if (typeof onCompleteCallback == 'function') onCompleteCallback();
		  			}
				}
				PackageManager.hideWaiting();
				postData = 'entryPoint=HandleAjaxCall&to_pdf=1&module=Administration&action=HandleAjaxCall&method=checkForUpdates&type=modules&csrf_token=' + SUGAR.csrf.form_token;
				var cObj = YAHOO.util.Connect.asyncRequest('POST','index.php',
								  callback, postData);
			},
			showLoginDialog : function(show){
				var loginView =  document.getElementById('loginView');
				var selectView =  document.getElementById('selectView');
				var collapseLink =  document.getElementById('span_animate_server_div');
				var credentialBtn =  document.getElementById('modifCredentialsBtn');
				var loginStyle = (show ? 'block' : 'none');
				var selectStyle = (show ? 'none' : 'block');
				var collapseStyle = (show ? 'none' : '');
				if(_attributes.height.to == MIN_HEIGHT){
				    MAX_HEIGHT=300;
				    PackageManager.toggleDiv('span_animate_server_div', 'catview');
				}
				loginView.style.display = loginStyle;
				selectView.style.display = selectStyle;
				collapseLink.style.display = collapseStyle;
				credentialBtn.style.display = collapseStyle;
			},
			refreshTreeRoot : function(){
				PackageManager.showWaiting();
				_loadingBar.setHeader("{$MOD.LOADING_CATEGORIES}");
 				var callback =	{
		  			success: function(data) {
						_loadingBar.hide();
                        var result = JSON.parse(data.responseText);
			    		if(typeof result != 'undefined') {
			    			var tree = new YAHOO.widget.TreeView('treeview');

							var node = tree.getRoot();
							for (var x = 0; x < result['nodes'].length; x++){

								var myobj = {
								    label: result['nodes'][x]['label'],
                                    id: result['nodes'][x]['id']
								};
		   						tmpNode= new YAHOO.widget.TextNode(myobj, node, false);
								tmpNode.href = "javascript:PackageManager.catClick('treeview',"+tmpNode.index+");";
		   						tmpNode.setDynamicLoad(PackageManager.loadDataForNodeForPackage);
								tmpNode.data['description'] = result['nodes'][x]['description'];

							}
							tree.draw();
	   					}//fi
	   				PackageManager.hideWaiting();
	   				if (typeof onCompleteCallback == 'function') onCompleteCallback();
		  			},
		  			failure: function(data) {
                        _loadingBar.hide();
                        if (typeof onCompleteCallback == 'function') onCompleteCallback();
		  			}
				}

				postData = 'entryPoint=HandleAjaxCall&to_pdf=1&module=Administration&action=HandleAjaxCall&method=getCategories&csrf_token=' + SUGAR.csrf.form_token;
				var cObj = YAHOO.util.Connect.asyncRequest('POST','index.php',
								  callback, postData);
			},
			refreshGrid : function(){
				PackageManager.showWaiting();
				_loadingBar.setHeader("{$MOD.SEARCHING_PACKAGES}");
 				var callback =	{
		  			success: function(data) {
		  			_loadingBar.hide();
                        var result = JSON.parse(data.responseText);
			    		if(typeof result != 'undefined') {
			    			_pmg.clearGrid();
	   						for (var x = 0; x < result['releases'].length; x++){
								var row = new Array();
								row[0] = result['releases'][x]['description'];
								row[1] = result['releases'][x]['version'];
								row[2] = result['releases'][x]['build_number'];
								row[3] = result['releases'][x]['id'];
								_pmg.addData(row);
							}//rof

	   					}//fi
	   				PackageManager.hideWaiting();
	   				if (typeof onCompleteCallback == 'function') onCompleteCallback();
		  			},
		  			failure: function(data) {
                        _loadingBar.hide();
                        if (typeof onCompleteCallback == 'function') onCompleteCallback();
		  			}
				}
				var types = "{$GRID_TYPE}";
				postData = 'entryPoint=HandleAjaxCall&to_pdf=1&module=Administration&action=HandleAjaxCall&method=checkForUpdates&type=modules&csrf_token=' + SUGAR.csrf.form_token;
				var cObj = YAHOO.util.Connect.asyncRequest('POST','index.php',
								  callback, postData);
			},
			refreshHeader : function(){
				PackageManager.showWaiting();
 				var callback =	{
		  			success: function(data) {
                        var result = JSON.parse(data.responseText);
			    		if(typeof result != 'undefined') {
			    			var header_div = document.getElementById('span_display_html');
			    			header_div.innerHTML = result['promotion'];
	   					}//fi
	   				PackageManager.hideWaiting();
	   				if (typeof onCompleteCallback == 'function') onCompleteCallback();
		  			},
		  			failure: function(data) {
		  			    if (typeof onCompleteCallback == 'function') onCompleteCallback();
		  			}
				}

				postData = 'entryPoint=HandleAjaxCall&to_pdf=1&module=Administration&action=HandleAjaxCall&method=getPromotion&csrf_token=' + SUGAR.csrf.form_token;
				var cObj = YAHOO.util.Connect.asyncRequest('POST','index.php',
								  callback, postData);
			},
            initTabs: function () {

            },
			remove : function(file){
				if(confirm('{$MOD.REMOVE_QUESTION}')){
				//PackageManager.showWaiting();
				var callback =	{
		  			success: function(data) {
                        var result = JSON.parse(data.responseText);
	        				if(typeof result != 'undefined') {
								PackageManager.getPackagesInStaging();
							}
	   				PackageManager.hideWaiting();
	   				if (typeof onCompleteCallback == 'function') onCompleteCallback();
		  			},
		  			failure: function(data) {
		  			    if (typeof onCompleteCallback == 'function') onCompleteCallback();
		  			}
				}

				postData = 'entryPoint=HandleAjaxCall&to_pdf=1&module=Administration&action=HandleAjaxCall&method=remove&file=' + file + '&csrf_token=' + SUGAR.csrf.form_token
				var cObj = YAHOO.util.Connect.asyncRequest('POST','index.php',
								  callback, postData);
				}//fi
			},
			authenticate : function(username, password, servername){
			//rrs
                _loadingBar =
                    new YAHOO.widget.Panel("wait",
                        {
                            width: "240px",
                            fixedcenter: true,
                            close: false,
                            draggable: false,
                            modal: true,
                            visible: false,
                            effect: {
                                effect: YAHOO.widget.ContainerEffect.FADE,
                                duration: 0.5
                            }
                        }
                    );

					_loadingBar.setHeader("{$MOD.AUTHENTICATING}");
					_loadingBar.setBody("<img src=\"include/javascript/yui/assets/rel_interstitial_loading.gif?v={literal}{VERSION_MARK}{/literal}\"/>");
					_loadingBar.render(document.body);
					_loadingBar.show();
				//PackageManager.showWaiting();
				var btn = document.getElementById('panel_login_button');
				var cbTerms = document.getElementById('cb_terms');
				btn.value = 'Checking...';
				btn.disabled = true;
				var callback =	{
		  			success: function(data) {
						btn.value = 'Login';
						btn.disabled = false;
                        var result = JSON.parse(data.responseText);
	        				if(typeof result != 'undefined') {
								if(result['status'] == 'success'){
									PackageManager.showLoginDialog(false);
									var header_div = document.getElementById('span_display_html');
			    					if(header_div)
			    						header_div.innerHTML = '';
									 {if $module_load == 'true'}
										PackageManager.refreshTreeRoot();
									 {else}
									_pmg = new PackageManagerGrid();
									 	_pmg.renderAll();
									  {/if}
								}else{
									_loadingBar.hide();
									alert(result['status']);
								}
							}
	   				if (typeof onCompleteCallback == 'function') onCompleteCallback();
		  			},
		  			failure: function(data) {
		  			    _loadingBar.hide();
		  			    btn.value = 'Login';
		  			    btn.disabled = false;
		  			    if (typeof onCompleteCallback == 'function') onCompleteCallback();
		  			}
				}

				postData = 'entryPoint=HandleAjaxCall&to_pdf=1&module=Administration&action=HandleAjaxCall&method=authenticate&username='+username+'&password='+password + '&servername=' + servername + '&terms_checked=' + cbTerms.value + '&csrf_token=' + SUGAR.csrf.form_token;
				var cObj = YAHOO.util.Connect.asyncRequest('POST','index.php',
								  callback, postData);
			}
	    };
	}();
}

var _fileGrid;
var _fileDownloadGrid;
var _fileGridInstalled;
{$PATCHES}
{$INSTALLED_MODULES}
PackageManagerGrid = function(){
{if $module_load == 'true'}
        YAHOO.widget.DataTable.MSG_EMPTY = "Empty1";
        YAHOO.widget.DataTable.CLASS_EMPTY = "CLASS EMPT";
        YAHOO.widget.ScrollingDataTable.MSG_EMPTY = "Empty2";
        YAHOO.widget.ScrollingDataTable.CLASS_EMPTY = "EMPTYMORE";
        YAHOO.util.DataSource.MSG_EMPTY = "empty_3";
        var moduleTitleEl = YAHOO.util.Dom.getElementsByClassName("moduleTitle")[0];
        var patch_downloads_tableWidth = moduleTitleEl.clientWidth - 2+ "px";
		var patch_downloads_minWidth = moduleTitleEl.clientWidth / 8.5;
		_fileGrid = new YAHOO.widget.ScrollingDataTable(
            'patch_downloads',
            [
                {
                    key: 'name',
                    label: '{$ML_FILEGRID_COLUMN.Name}',
                    minWidth: Math.round(patch_downloads_minWidth * 1.5),
                    sortable: true,
                    resizeable: true
                },
                {
                    key: 'file',
                    label: '{$ML_FILEGRID_COLUMN.Install}',
                    minWidth: Math.round(patch_downloads_minWidth / 1.5),
                    formatter: this.renderInstallButton,
                    resizeable: true
                },
                {
                    key: 'unFile',
                    label: '{$ML_FILEGRID_COLUMN.Delete}',
                    minWidth: Math.round(patch_downloads_minWidth),
                    formatter: this.renderDeleteButton,
                    resizeable: true
                },
                {
                    key: 'type',
                    label: '{$ML_FILEGRID_COLUMN.Type}',
                    minWidth: Math.round(patch_downloads_minWidth / 1.5)
                },
                {
                    key: 'version',
                    label: '{$ML_FILEGRID_COLUMN.Version}',
                    minWidth: Math.round(patch_downloads_minWidth)
                },
                {
                    key: 'date',
                    label: '{$ML_FILEGRID_COLUMN.Published}',
                    minWidth: Math.round(patch_downloads_minWidth)
                },
                {
                    key: 'uninstallable',
                    label: '{$ML_FILEGRID_COLUMN.Uninstallable}',
                    minWidth: Math.round(patch_downloads_minWidth / 1.5)
                },
                {
                    key: 'description',
                    label: '{$ML_FILEGRID_COLUMN.Description}',
                    minWidth: Math.round(patch_downloads_minWidth * 1.5),
                    sortable: true
                }
            ],
            new YAHOO.util.LocalDataSource(mti_data, {
                responseSchema: {
                    fields: ['name', 'file', 'unFile', 'type', 'version', 'date', 'uninstallable', 'description', 'upload_file']
                },
                height: "190px"
            }),
            {
                MSG_EMPTY: "",
                width: (YAHOO.util.Selector.query('table', 'content', true).clientWidth - 15) + "px",
                height: (document.getElementById("patch_downloads").clientHeight - 25) + "px"
            }
        );
        _fileGrid.autoSizeColumns = true;
        _fileGrid.MSG_EMPTY = "empty4";
        _fileGrid.subscribe("beforeWidthChange", function() {
        		if (mti_data.length <= 0) {
        			return false;
        		}
        	}
        );
        _fileGrid.getColumn = YAHOO.SUGAR.SelectionGrid.prototype.getColumn;
        //Hack to fix  rendering bug in IE7:
        _fileGrid.on("renderEvent", function(){
            if (mti_data.length > 0)
                setTimeout("if (_fileGrid.getFirstTrEl()) _fileGrid.getFirstTrEl().style.width='100%';", 1000);
            else {
            	_fileGrid.getBdTableEl().style.display = "none";
            	_fileGrid.getHdTableEl().style.width = "100%";
            }
        });

        var moduleTitleEl2 = YAHOO.util.Dom.getElementsByClassName("moduleTitle")[0];
        var installed_grid_tableWidth = moduleTitleEl2.clientWidth - 2+ "px";
		var minWidth = moduleTitleEl2.clientWidth / 7.45;
    _fileGridInstalled = new YAHOO.widget.ScrollingDataTable('installed_grid',
        [
            {
                key: 'name',
                label: '{$ML_FILEGRIDINSTALLED_COLUMN.Name}',
                sortable: true,
                'minWidth': Math.round(minWidth * 1.5)
            },
            {
                key: 'unFile',
                label: '{$ML_FILEGRIDINSTALLED_COLUMN.Action}',
                formatter: this.renderUninstallButton,
                'minWidth': Math.round(minWidth / 1.5)
            },
            {
                key: 'state_file',
                label: '{$ML_FILEGRIDINSTALLED_COLUMN.Enable_Or_Disable}',
                formatter: this.renderEnableDisableButton,
                'minWidth': Math.round(minWidth / 1.5)
            },
            {
                key: 'type',
                label: '{$ML_FILEGRIDINSTALLED_COLUMN.Type}',
                'minWidth': Math.round(minWidth / 1.5)
            },
            {
                key: 'version',
                label: '{$ML_FILEGRIDINSTALLED_COLUMN.Version}',
                'minWidth': Math.round(minWidth)
            },
            {
                key: 'date',
                label: '{$ML_FILEGRIDINSTALLED_COLUMN.Date_Installed}',
                'minWidth': Math.round(minWidth)
            },
            {
                key: 'description',
                label: '{$ML_FILEGRIDINSTALLED_COLUMN.Description}',
                sortable: true,
                'minWidth': Math.round(minWidth * 1.5)
            }
        ],
        new YAHOO.util.LocalDataSource(mti_installed_data, {
            responseSchema: {
                fields: ['name', 'file', 'unFile', 'state_file', 'type', 'version', 'date', 'uninstallable', 'description']
            },
            height: "200px"
        }),
        {
            MSG_EMPTY: "",
            width: (YAHOO.util.Selector.query('table', 'content', true).clientWidth - 15) + "px",
            height: (document.getElementById("installed_grid").clientHeight - 20) + "px"
        }
    );

	    _fileGridInstalled.autoSizeColumns = true;
        _fileGridInstalled.MSG_EMPTY = "empty5";
       	_fileGridInstalled.getColumn = YAHOO.SUGAR.SelectionGrid.prototype.getColumn;

       	_fileGridInstalled.on("renderEvent", function(){
       		if (mti_installed_data.length > 0)
                setTimeout("if(_fileGridInstalled.getFirstTrEl()) _fileGridInstalled.getFirstTrEl().style.width='100%';", 1000);
            else {
            	_fileGridInstalled.getBdTableEl().style.display = "none";
            	_fileGridInstalled.getHdTableEl().style.width = "100%";
            }
        });

{else}
  		_fileGrid = new YAHOO.ext.grid.DDGrid(
                'patch_downloads',
                new YAHOO.ext.grid.DefaultDataModel([]),
                new YAHOO.ext.grid.DefaultColumnModel([
					{
                        label: '{$ML_FILEGRID_COLUMN.Description}', width: 215
                    },
        		    {
                        label: '{$ML_FILEGRID_COLUMN.Version}', width: 72
                    },
        		    {
                        label: '{$ML_FILEGRID_COLUMN.Build}', width: 80, sortable: true, sortType: sort.asUCString
                    },
        		    {
                        label: '{$ML_FILEGRID_COLUMN.Action}', width: 90, renderer: this.renderButtons
        		    }
        		])
            );
  	    _fileGrid.autoSizeColumns = true;
    	_fileGrid.autoSizeHeaders = true;
	{/if}
	PackageManager.showStatusMessages('{$ML_STATUS_MESSAGE}');
}

PackageManagerGrid.prototype.renderModuleButtons = function(file){
	var output =  '<table border=0 cellpadding=0 cellspacing=0><tr><td><form action="index.php?module=Administration&view=module&action=UpgradeWizard_prepare" method="post">';
    	output += '<input type=submit class=\'button\' name="btn_mode" onclick="this.form.mode.value=\'Install\';this.form.submit();" value="{$MOD.LBL_UW_BTN_INSTALL}" />';
        output += '<input type=hidden name="install_file" value="'+file+'" />';
		output += '<input type=hidden name="mode"/>';
        output += '{sugar_csrf_form_token}';
        output += '</form></td><td>&nbsp;</td>';

        output += '<td><form action="index.php?module=Administration&view=module&action=UpgradeWizard" method="post">';
        output += '<input type=submit class=\'button\' name="run" value="{$MOD.LBL_UW_BTN_DELETE_PACKAGE}" />';
        output += '<input type=hidden name="install_file" value="'+file+'" />';
        output += '{sugar_csrf_form_token}';
        output += '</form></td></tr></table>';
        elCell.innerHTML = output;
}

PackageManagerGrid.prototype.renderInstallButton = function(elCell, oRecord, col, data) {
	var file = oRecord.getData().file;
	if(file.indexOf('errors_') == 0){
		var output = "<input type='button' class='button' value='Errors' onClick='javascript:alert(\""+file.substring(7)+"\");'>";
	}else{
		var output =  '<span style="text-align:center;"><form action="index.php?module=Administration&view=module&action=UpgradeWizard_prepare" method="post">';
    	output += '<input type=submit class=\'button\' name="btn_mode" onclick="this.form.mode.value=\'Install\';this.form.submit();" value="{$MOD.LBL_UW_BTN_INSTALL}" />';
        output += '<input type=hidden name="install_file" value="'+file+'" />';
		output += '<input type=hidden name="mode"/>';
        output += '{sugar_csrf_form_token}';
        output += '</form></span>';
    }
	elCell.innerHTML = output;
}
PackageManagerGrid.prototype.renderUninstallButton = function(elCell, oRecord, col, data) {
    var file = oRecord.getData().file;
	if(file.indexOf('errors_') == 0){
		var output = "<input type='button' class='button' value='Errors' onClick='javascript:alert(\""+file.substring(7)+"\");'>";
	}else if(file.indexOf('UNINSTALLABLE') == 0){
		var output = '';
	}else{
		var output =  '<span style="text-align:center;"><form action="index.php?module=Administration&view=module&action=UpgradeWizard_prepare" method="post">';
    	output += '<input type=submit class=\'button\' name="btn_mode" onclick="this.form.mode.value=\'Uninstall\';this.form.submit();" value="{$MOD.LBL_UW_UNINSTALL}" />';
        output += '<input type=hidden name="install_file" value="'+file+'" />';
		output += '<input type=hidden name="mode"/>';
        output += '{sugar_csrf_form_token}';
        output += '</form></span>';
    }

	elCell.innerHTML = output;
}

PackageManagerGrid.prototype.renderEnableDisableButton = function(elCell, oRecord, col, data) {
	var state_file = oRecord.getData().state_file;
	if(state_file.indexOf('ENABLED_') == 0){
		//enabled
		var output = '<span style="text-align:center;"><form action="index.php?module=Administration&view=module&action=UpgradeWizard_prepare" method="post">';
		file = state_file.substring(8);
		output += '<input type=submit class=\'button\' name="btn_mode" onclick="this.form.mode.value=\'Disable\';this.form.submit();" value="{$MOD.LBL_UW_DISABLE}" />';
		 output += '<input type=hidden name="install_file" value="'+file+'" />';
		output += '<input type=hidden name="mode"/>';
        output += '{sugar_csrf_form_token}';
    	output += '</form></span>';
	}else if(state_file.indexOf('UNINSTALLABLE') == 0){
		var output = '';
	}else{
		var output = '<span style="text-align:center;"><form action="index.php?module=Administration&view=module&action=UpgradeWizard_prepare" method="post">';
		file = state_file.substring(9);
    	output += '<input type=submit class=\'button\' name="btn_mode" onclick="this.form.mode.value=\'Enable\';this.form.submit();" value="{$MOD.LBL_UW_ENABLE}" />';
    	output += '<input type=hidden name="install_file" value="'+file+'" />';
		output += '<input type=hidden name="mode"/>';
        output += '{sugar_csrf_form_token}';
    	output += '</form></span>';
    }

	elCell.innerHTML = output;
}

PackageManagerGrid.prototype.renderDeleteButton = function(elCell, oRecord, col, file) {

	var upload_file = oRecord.getData().file;
var output = "<span style='text-align:center;'><input type='button' class='button' value='{$MOD.LBL_UW_BTN_DELETE_PACKAGE}' onClick='PackageManager.remove(\""+file+"\");'></span>";
    elCell.innerHTML = output;
}

PackageManagerGrid.prototype.renderButtons = function(packageID){
	var output = "<input type='button' value='Download' class='button' onClick=\"{if $INSTALLATION != 0}this.form.run.value='upload';{/if}this.form.release_id.value='"+packageID+"';this.form.submit();\">";
    return output;
}
PackageManagerGrid.prototype.renderErrorLink = function(show){
	var output = "<a href='#'>Errors</a>";
    return output;
}
PackageManagerGrid.prototype.clearGrid = function(){
    _fileGrid.deleteRows(0, _fileGrid.getRecordSet().getLength())
}
PackageManagerGrid.prototype.renderAll = function(){
}

PackageManagerGrid.prototype.addData = function(data){
    _fileGrid.addRow(data);
}

YAHOO.util.Event.on(window, 'load', PackageManager.initPMG, PackageManager, true);
</script>
