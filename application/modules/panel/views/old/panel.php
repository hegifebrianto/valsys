 <?=$head?>
   <script type="text/javascript">
        base_url = '<?= base_url()?>';
		function spacer(width)
		{
			 var html ='';
			 html = '<img class="spacer" width="'+width+'px" height="1px" src="<?=base_url();?>public/images/spacer.png" />';
			 return html;
		}
      
        Ext.ns('Dialogs','Dialogs.fn', 'Dialogs.data');
		
		Ext.require([ 'Ext.ux.grid.HeaderToolTip']);
  
		Ext.onReady(function()
		{
			var g_module_states = '0';
			var gCustomerNbr = '<?=$g_customer_nbr?>';
			   
			var gUser_id = '<?=$user_id?>';
			var gUsername = '<?=$user_name?>';
			   
			var gServerTime = '';
			
			var store_history = Ext.create('Ext.data.JsonStore', {
				autoload:true, 
				proxy:{
					type:'ajax',
					url:base_url + 'sistem/read_user_history',
					reader:{
						type:'json',
						root:'rows',
						totalProperty:'results'
					}
				},
				fields:['access_from','access_module','access_time','access_action'],
							
			}); 

            var store_system_history = Ext.create('Ext.data.JsonStore', {
				autoload:true, 
				proxy:{
					type:'ajax',
					url:base_url + 'sistem/read_system_history',
					reader:{
						type:'json',
						root:'rows',
						totalProperty:'results'
					}
				},
				fields:['access_module','access_time','access_user_id','access_user_name','access_user_descr','access_user_ipaddress'],
							
			});   			
		   
		    function gModuleState(controller)
			{
				//push last module state to session vars
				Ext.Ajax.request({
					url:'<?=base_url()?>panel/setmodulestate/'+controller+'/<?=$user_id?>',
					method:'GET',
					success:function(result){
					    var xhr = Ext.JSON.decode(result.responseText);	    
                    	if(xhr.result){
						   return true;
						}else{
						   window.location.href ='<?=base_url()?>auth'; //Ext.DomHelper.overwrite('clock-btnInnerEl',{html:'Invalid Response'})
						} 
					 
					}
				});
				g_module_states = controller;
			} 
           			
   
			var updateClock = function()
			{
				Ext.Ajax.request({
					 url:'<?=base_url()?>panel/getservertime/panel',
					 method:'GET',
					 success:function(result){
						var xhr = Ext.JSON.decode(result.responseText);						
						if(xhr.status){
						   Ext.DomHelper.overwrite('clock-btnInnerEl',{html:xhr.datetime})
						   gServerTime= xhr.datetime ;
						}else{
						   window.location.href ='<?=base_url()?>auth'; //Ext.DomHelper.overwrite('clock-btnInnerEl',{html:'Invalid Response'})
						} 
					},
					 failure:function(){
						/* Ext.DomHelper.overwrite('clock-btnInnerEl',{html:'ERROR: Ajax Call Failure'}) */
					}
				});	
			}
   
			var task = 
			{
				run: updateClock,
				interval: 60000
			}
   
			var timer = new Ext.util.TaskRunner();
			timer.start(task);
		 
			Ext.tip.QuickTipManager.init();

			var contentPanel = {
				region:'center'
				,id:'content-panel'
				,autoScroll: true
				,layout: 'fit'
				,border:false
				,margins: '4 4 4 0'
				,items: [{
					id: 'start-panel'
					,layout: 'fit'
					,title:'Welcome'
					,contentEl: 'start-div'
				}]
			};
     
		    /* store data for tree panel menu */
			var storeTree = Ext.create('Ext.data.TreeStore', {
			    root: {
				    expanded: true,
				    children: <?=json_encode($menu);?>
				}
			  
		    });
            
			/* end store data for tree panel menu */
			
			/* tree panel menu */ 
			var treePanel = Ext.create('Ext.tree.Panel',{
				id: 'tree-panel',        
				title:'Navigation',
				height: 433,
				minSize: 255,
				rootVisible: false,
				autoScroll: false,
				store: storeTree
			});
            
            treePanel.getSelectionModel().on('select', function(selModel, record) {
				
				custNbr	= Ext.getCmp('custNumber_singleView').getValue();
				//console.log(custNbr);
				if (record.get('leaf')) {
				    Ext.getBody().mask('Initializing..., please wait...', 'x-mask-loading');
				    var tree = Ext.getCmp('tree-panel');
					var id = tree.getSelectionModel().selected.items[0].data['id'];					
					var txt = record.get('text');   //get text from label
					  
					var controller = tree.getSelectionModel().selected.items[0].raw['controller'];//get id for controller access
					controllers = controller.replace('-', '/'); //replace dash to slash
					
					controller = '<?=base_url()?>'+controller.replace('-', '/'); //replace dash to slash

					Ext.DomHelper.overwrite(
						'start-panel-body'
						,{ 
							tag:'iframe' 
							,id:'ithe'
							,src:controller + '/?id=' + id + '&custnbr=' + custNbr
							,width:'100%'
							,height:'100%'
							,'class' :  'x-docked-noborder-top x-docked-noborder-bottom x-docked-noborder-left x-docked-noborder-right ',
							onload: 'Ext.getBody().unmask(); var t = Ext.get(this); ',
						}
					)
					updateClock();
					gModuleState(record.get('id')); //set module state for HELP menu
					Ext.getCmp('start-panel').setTitle(txt);
					
					Ext.Ajax.request({
								url:'<?=base_url()?>panel/panel/ins_app_log',
								method:'POST',
								params:{id:id}
								});
					
				}
			});
			
			/* end tree panel menu */  
			
			/* top panel */  
			var tbarpaneltop = {
				region: 'center',
				bodyStyle: 'padding-bottom:15px;background:#eee;',
				height:30,
				items:[{
					region: 'north',
					border: false,
					tbar: [
					spacer(4)
					,{
						text    :   '<b style="color:navy;">MNC SUBSCRIBE SYSTEM </b><sup>v1</sup>',
						tooltip :   'MNC Subscribe System v.1<br/>We Are Rock!',
						iconCls :   'icon-customer',
						handler :   function(){ 
									    Ext.MessageBox.alert(
											'ABOUT',"MNC Subscribe System v1"
							            );
						            }
					},{
						xtype	:'textfield',
						name	:'custNumber_singleView',
						id		:'custNumber_singleView',
						width	:100,
						hidden	:true,
						readOnly: true
					}
					,'->','-'
					,{
						iconCls :   'icon-setting',
						text    :   'Properties',
						tooltip :   'Customize module tree',
						menu    : [{
									text     : 'Navigation Arrangement',
							        iconCls  : 'icon-arrange',
									handler  : function(){
								        Dialogs.fn.showArrange()
										
									}
								}, {
									text     : 'Report Builder',
									iconCls  : 'icon-builder',
									tooltip  : 'Customize Report',
									handler  : function(){
										Ext.MessageBox.alert(
											'Application Properties',
											'<table border="0" width="244px">'
											+'<tr>Report Builder Config</tr>'
											+'</table>')
									}
								}]
					}
					,'-'
					,{
						text    : '<b style="color:navy;"><?=strtoupper($user_name); ?></b>',
						iconCls : 'icon-user',
						tooltip : 'My Account',
						menu    : [{
                                    text     : 'SVN Update',
                                    iconCls  : 'icon-clock',
                                    handler  : function(){
                                    Dialogs.fn.svn_update();
                                    }
                                },{
									text     : 'Change Password',
									iconCls  : 'icon-password',
									handler  : function(){
								        Dialogs.fn.changePassword();
									}
								},{
									text     : 'System History',
							        iconCls  : 'icon-history',
									handler  : function(){
									    store_system_history.load();
								        dialog_system_history.show();
									}
								},{
									text     : 'User History',
							        iconCls  : 'icon-history',
									handler  : function(){
								        store_history.load();
										dialog_history.show();
									}
								},
								'-'
								,{
									text     : 'Logoff',
									iconCls  : 'icon-logout2',
									handler  : function(){
									    Ext.MessageBox.confirm(
									        'Logoff'
									        ,'Are you sure to logoff?'
									        ,function(btn){
											    if(btn=='yes')
												{
													//console.log('<?= base_url()?>');
												    location.href= '<?= base_url()?>'+'auth/logout/'
											    }
												else
												{
												    return false;
												}
										    }
									    ); 
									}
						        }
						]
					},
					spacer(24)
					]
				}]
			}
		
		    /* end top panel */ 
			
			/* footer panel */ 
	        var tbarpanelbottom = {
                region   : 'center',
		        id       :'bottom-1',
                bodyStyle: 'background:#eee;',
                items    :[{
			                region   : 'north',
			                border   : false,
			                tbar     : ['<div id="statusbar" style="background:url(<?=base_url();?>public/images/icon_activity.png);background-repeat:no-repeat;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;status: <span id="status-text">running <span id="status-text-detail"></span></span><blink>_</blink> </div>','->'
			                ,'-'
                            ,spacer(6)                        
                            ,{
							    text      : '<b>HELP</b>',
							    iconCls   : 'icon-help1',
							    menu      : [{
							        text    : 'Module Help...',
							        iconCls : 'icon-help',
							        handler : function(){ 									            
							                    Dialogs.fn.showHelp()
							                }
							    },
								{
									text    : 'App Support Ticket',
									iconCls : 'icon-ticket',
									modal   : false,
									handler : function(){ 
											    Dialogs.fn.appSupportTicket()
									        }
								}]
			                }
							,spacer(6)
                            ,'-'
                            ,spacer(6),
			                {
                                id          :'clock'
                                ,text       : '<?=date('D, d-M-Y, h:i:s A');?>'
				                ,iconCls    : 'icon-clock'
                                ,handler    : function(){
                                                Ext.MessageBox.alert(
                                                    'Clock',
                                                    'Clock settings'
                                            );
                                }
			                },spacer(12)
				        ]
		        }]  
	        }  
			
			/* end footer panel */ 
			
        Dialogs.fn.svn_update = function() {
                    var showArrange = new Ext.Window({
                        title: 'SVN Update'
                        ,closable:true
                        ,closeAction: 'destroy'
                        ,width:420
                        ,height:240
                        ,border: false
                        ,plain:true
                        ,modal: true
                        ,collapsible:true
                        ,id:'svn_update'
                        ,layout: 'fit'    
                        ,items : [{
                                    xtype : "component",
                                    autoEl : {
                        tag : "iframe"
                        ,border:'0px'
                        ,'class' :  'x-docked-noborder-top x-docked-noborder-bottom x-docked-noborder-left x-docked-noborder-right '
                        ,src : "<?=base_url()?>subversion/svn/co_svn"
                    }
                }]
                    });        
               
                   showArrange.show();

        };
	    Dialogs.fn.showArrange = function() {
		    var	showArrange = new Ext.Window({
			title: 'Module Arrange'
			,closable:true
			,closeAction: 'destroy'
			,width:420
			,height:240
			,border: false
			,plain:true
			,modal: true
			,collapsible:true
			,id:'module-arrangew'
			,layout: 'fit'    
			,items : [{
				    xtype : "component",
				    autoEl : {
                        tag : "iframe"
                        ,border:'0px'
                        ,'class' :  'x-docked-noborder-top x-docked-noborder-bottom x-docked-noborder-left x-docked-noborder-right ' 
                        ,src : "<?=base_url()?>panel/modulearrange/"+gUser_id
                    }
                }]
		    });		
		
		   showArrange.show();

	    };
   
        Dialogs.fn.appSupportTicket = function() {
		    var	appSupportTicket = new Ext.Window({
			title: 'App Support Ticket'
			,closable:true
			,closeAction:'destroy'
			,width:795
			,height:465
			,border: false
			,plain:true
			,modal: true
			,collapsible:true
			,id:'appticket'
			,layout: 'fit'
			,resizable:true
			,items : [{
				    xtype : "component",
				    autoEl : {
						tag : "iframe"
						,border:'0px'
						,'class' :  'x-docked-noborder-top x-docked-noborder-bottom x-docked-noborder-left x-docked-noborder-right ' 
						,src : "<?=base_url()?>appsupport/ticket/"
					}
                }]
		    });
		
		   appSupportTicket.show();

	    };
    
	    /* dialog user history*/		
		var historyView = Ext.create('Ext.grid.Panel', {
			width:650,
			height:200,
			store: store_history,		
			id:'userview',
			margin:'5 10 10 0',		
			viewConfig: {
				emptyText: 'No Data'
			},
			columns: [{	name:'access_from',
						header:'ACCESS FROM',
						dataIndex:'access_from',
						width:175,
						hideable : false,
					},{	name:'access_module',
						header:'ACCESS MODULE',
						dataIndex:'access_module',	
						width:200,
						hideable : false,
					},{	name:'access_time',
						header:'ACCESS TIME',
						dataIndex:'access_time',
						width:175,
						hideable : false,
					},{	name:'access_action',
						header:'ACCESS ACTION',
						dataIndex:'access_action',
						width:200,
						hideable : false,
					}],
				bbar:{	xtype: 'pagingtoolbar',
			    id : 'toolbargrid',
                store : store_history,				
			    displayInfo: true,
			    displayMsg: 'Displaying {0} - {1} of {2}',
		    }	
		});	
		
        var dialog_history= Ext.create('Ext.Window',{
			id : 'user',
			title:'History',  		
			width:660,
			height:230,
			resizable:true,
			closable: true,
			closeAction: 'hide',
			resizable: false,               
			plain: true,
			layout: 'card',
			/* border: true, */
			overflow: 'hidden',
			modal: false,
			items: [historyView],
				
		});		
		
		 /* end dialog user history*/
		 
		 /* dialog system history*/ 
		 
		var system_historyView = Ext.create('Ext.grid.Panel', {
			width:650,
			height:175,
			store: store_system_history,		
			id:'systemview',
			margin:'5 10 10 0',		
			viewConfig: {
				emptyText: 'No Data'
			},
			columns: [{	name:'access_module',
						header:'ACCESS MODULE',
						dataIndex:'access_module',	
						width:150,
						hideable : false,
					},{	name:'access_time',
						header:'ACCESS TIME',
						dataIndex:'access_time',
						width:175,
						hideable : false,						
					},{	name:'user_id',
						header:'USER ID',
						dataIndex:'access_user_id',
						width:50,
						hideable : false,						
					},{	name:'user_name',
						header:'USER NAME',
						dataIndex:'access_user_name',
						width:75,
						hideable : false,						
					},{	name:'user_descr',
						header:'USER DESCR',
						dataIndex:'access_user_descr',
						width:125,
						hideable : false,
						//renderer  : renderTip,
					},{	name:'user_ipaddress',
						header:'IP ADDRESS',
						dataIndex:'access_user_ipaddress',
						width:125,
						hideable : false,						
					}],
		});	 
   
        var dialog_system_history= Ext.create('widget.window',{
			id : 'system',
			title:'History',  		
			width:660,
			height:210,
			resizable:true,
			closable: true,
			closeAction: 'hide',
			resizable: false,               
			plain: true,
			layout: 'card',
			/* border: true, */
			overflow: 'hidden',
			modal: false,
			items: [system_historyView],
				
		});		
		
		 /* end dialog system history*/
		
		 /* dialog change password*/
		 var changepassword = new Ext.FormPanel({ 				
				url:'auth/change_password', 
				frame:true, 
                //title:'Change Password', 				
				items:[
				        <?=$old_password?>,
						<?=$new_password?>,
						<?=$repeat_password?>,
					],
		 
			    // All the magic happens after the user clicks the button     
				buttons:[{ 
						text:'Change',
						formBind: true,	 
						// Function that fires when user clicks the button 
						handler:function(){ 
							changepassword.getForm().submit({ 
								method:'POST', 
								waitTitle:'Connecting', 
								waitMsg:'Sending data...',		 
					// Functions that fire (success or failure) when the server responds. 					
								success:function(form, action){ 
									obj = Ext.JSON.decode(action.response.responseText); 
									Ext.Msg.alert('Info!', obj.errors.reason + 'autologout after 2 sec'); 
									window.setTimeout(function() {
										location.href='<?=base_url()?>auth/logout'
									}, 2000);
								  
								},		 
					// Failure function, see comment above re: success and failure. 	 
								failure:function(form, action){ 								    
								   	if(action.failureType == 'server'){ 									    
										obj = Ext.JSON.decode(action.response.responseText); 
										Ext.Msg.alert('Info!', obj.errors.reason); 
									}else{ 
										Ext.Msg.alert('Warning!', 'Authentication server is unreachable : ' + action.response.responseText); 
									} 
									changepassword.getForm().reset(); 									
								} 
							}); 
						} 
					}] 
		});
		
		// This just creates a window to wrap the login form. 
			// The login object is passed to the items collection.   
        Dialogs.fn.changePassword = function() {			
			var DialogChangePassword = new Ext.Window({
            title:'Change Password',
				width:300,
                height:148,
				closable: false,
				closeAction: 'hide',
				resizable: false,               
				plain: true,
				layout: 'fit',
				border: false,
				overflow: 'hidden',
				modal: true,
				items: [changepassword],
				listeners: {
				    close : {
                        fn: function(){ changepassword.getForm().reset(); }   
                    }					
				} 
			});
			DialogChangePassword.show();
		};	
			
		/* end dialog change password*/        
 Dialogs.fn.showHelp = function() {			
			var DialogshowHelp  = new Ext.Window({
            title:'Help'
            ,closable:true
            ,closeAction: 'destroy'
            ,width:680
			,height:240
			,border: false
			,plain:true
			,modal: true
			,collapsible:true
			,id:'getHelp'
			,layout: 'fit'
			,resizable:true
            ,items : [{
                    xtype : "component",
                    autoEl : {
                        tag : "iframe"
                        ,border:'0px'
                        ,'class' :  'x-docked-noborder-top x-docked-noborder-bottom x-docked-noborder-left x-docked-noborder-right ' 
                        ,src : "<?=base_url()?>help/get/"+g_module_states+"/"
                    }
                }]
		    });
			DialogshowHelp.show();
		};	
			
		/* end dialog change password*/
 
        /* putting together a full-screen BorderLayout within a Viewport.
		   merger top panel, tree panel , and content panel 
		*/
        Ext.create('Ext.Viewport', {
			layout: 'border',
			title: 'MNC Subcribe System v.1.0',
			items: [
                {
                    layout: 'border'
                    ,id: 'layout-north'
                    ,region:'north'
                    ,border: false
                    ,items: [tbarpaneltop]
                },
				{
                    layout: 'border'
					,xtype: 'tabpanel'
					,id: 'layout-navigation'
					,region:'west'
					,border:false
					,margins: '4 0 4 4'
					,split:true
					,width: 180
					,items: [treePanel]
                },
				{
                    layout: 'border'
                    ,id: 'footer'
                    ,region:'south'
                    ,border: true
                    ,items: [tbarpanelbottom]
                },
				contentPanel
            ],
      
            renderTo: Ext.getBody()
        });
		
		/* end Viewport*/
    
        function hideloader(){
            var loadingMask = Ext.get('loading-mask');
            var loading = Ext.get('loading');
            loading.hide();

            loadingMask.shift({
				xy: loading.getXY(),
				width: loading.getWidth(),
				height: loading.getHeight(),
				remove: true,
				duration: 1,
				opacity: 0.1
            });
        }
        setTimeout(hideloader,1);
		
		<?=$pesan?>
		
		function renderTip(value, metaData, record, rowIdx, colIdx, store)
		{
			metaData.tdAttr = 'data-qtip="' + value + '"';
			return value;
		};
    
});
   </script>
 <div style="display:hidden">
        <div id="start-div" style="">

          <div id="welcome"> 
           <div style="padding:30px;">
               <div style="float:left;" ><img src="<?=base_url();?>public/images/image_home.png" /></div>
               <div style="margin-left:188px;">
                   <h2>Welcome, <b><?=ucwords($user_descr);?></b>!</h2>
                   <p>The IVS is fast web application.</p>
                   <p>Please click module on the tree list.</p>
               </div>
           </div>
          </div> 

       </div>
   </div>
	<div id="loading-mask" style="">
      <div id="loading">
         <span id="loading-message"><b>Loading</b> <br />Please wait...</span>
      </div> 
   </div>
</body>
</html>
