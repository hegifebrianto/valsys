 <?=$head?>
 <?=$side_menu?>//
 
     <style>
        /* Loading Spinner */
        .spinner{margin:0;width:70px;height:18px;margin:-35px 0 0 -9px;position:absolute;top:50%;left:50%;text-align:center}.spinner > div{width:18px;height:18px;background-color:#333;border-radius:100%;display:inline-block;-webkit-animation:bouncedelay 1.4s infinite ease-in-out;animation:bouncedelay 1.4s infinite ease-in-out;-webkit-animation-fill-mode:both;animation-fill-mode:both}.spinner .bounce1{-webkit-animation-delay:-.32s;animation-delay:-.32s}.spinner .bounce2{-webkit-animation-delay:-.16s;animation-delay:-.16s}@-webkit-keyframes bouncedelay{0%,80%,100%{-webkit-transform:scale(0.0)}40%{-webkit-transform:scale(1.0)}}@keyframes bouncedelay{0%,80%,100%{transform:scale(0.0);-webkit-transform:scale(0.0)}40%{transform:scale(1.0);-webkit-transform:scale(1.0)}}
    </style>
   <div id="page-content-wrapper">
            <div id="page-content">
                
                    <div class="container">


<!-- Parsley -->

<script type="text/javascript" src="<?=base_url();?>assets/widgets/parsley/parsley.js"></script>
<script type="text/javascript" src="<?=base_url();?>assets/js/js-tree/jstree.min.js"></script>

<!-- ICONS -->
<style>
.mask{
  display: none; /*This hides the mask*/
}

.mask .ajax{
  display: block;
  width: 100%;
  height: 100%;
  position: relative; /*required for z-index*/
  z-index: 1000; /*puts on top of everything*/
  background-image: url (loading-icon.png);
}
</style>
<link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/icons/fontawesome/fontawesome.css">
<link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/icons/linecons/linecons.css">
<link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/icons/spinnericon/spinnericon.css">
<link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/icons/iconic/iconic.css">
<link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/icons/elusive/elusive.css">
<link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/icons/meteocons/meteocons.css">
<link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/icons/typicons/typicons.css">
<link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/elements/images.css">
<link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/widgets/multi-upload/fileupload.css">
<link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/js/js-tree/themes/default/style.min.css" />

    <!-- element Checkbox -->
<script type="text/javascript" src="<?=base_url();?>assets/widgets/uniform/uniform.js"></script>
<script type="text/javascript" src="<?=base_url();?>assets/widgets/uniform/uniform-demo.js"></script>  

<div class="mask"></div>
<div class="panel">
    <div class="panel-body">
        <h3 class="title-hero">
            
        </h3>
        <div class="example-box-wrapper">
		      <div class="content-box">
                        <h3 class="content-box-header bg-primary">
                            <i class="glyph-icon icon-cog"></i>
                            <b>Group Configuration</b>
                        </h3>
                        <div class="content-box-wrapper">
                          <div class="row">

												
											<div class="col-md-4">  <!-------------------------------KOLOM LIST MODULE ------->
												<div >
												 <div class="button-pane">	  
												<div class="size-md float-left">
													<a>
														<b>LIST MODULE</b>
													</a>
												</div>
													</div>
												<div class="content-box"   style="width:300px;height:100%;"  id='dragme'> 
														<div id="menu-list"  class="jstree-draggable" ></div>
												</div> 		  

								 
												 
												</div>
											</div><!-------------------------------END KOLOM LIST MODULE ------->
											<div class="col-md-4">  <!-------------------------------KOLOM LIST MODULE ------->
												<div  >
												   <div class="button-pane">
														<div class="size-md float-left">
															<a>
																<b>GROUP USER</b>
															</a>
														</div>
													</div>
												
													<div class="content-wrapper">
													  	<td valign='top'>
															<div class="content-box"   style="width:300px;height:100%;"  id='dragme2'> 
																	<div id="menu-list2"  class="jstree-draggable" ></div>
															</div> 
														</td>
													</div>
													
													  <div class="button-pane">
														<div class="size-md float-left" >
															    <button class="btn btn-primary"  title="Add Group" id='btn_add_group'>
																		<i class="glyph-icon icon-elusive-plus-circled"  > </i>&nbsp; ADD
																</button>																
																  <button class="btn btn-danger" id='btn_remove' title="Delete Group">
																		<i class="glyph-icon  icon-elusive-minus-circled"></i>&nbsp; DELETE
																</button>&nbsp;&nbsp;&nbsp;
																<button class="btn btn-primary" id='btn_update' title="Edit Group">
																		<i class="glyph-icon  icon-elusive-pencil"></i>&nbsp; EDIT
																</button>
														</div>
													</div>
												 
												</div>
											</div><!-------------------------------END KOLOM LIST MODULE ------->
											
										<div class="col-md-4">   
												<div class="dashboard-box dashboard-box-chart bg-white content-box">
												   <div class="button-pane">
														<div class="size-md float-left">
															<a>
																<b>EXT PRIV</b>
															</a>
														</div>
													</div>
												 
													<div class="content-wrapper">
													  	<td valign='top'>
																<table id="datatable33" class="table table-striped table-bordered" cellspacing="0" width="30%"> 
																			<thead>
																			<tr>
																				<th >Ext PRI</th> 
																				<th>Allow</th> 																				
																			</tr>
																			</thead> 
																			  
																			<tbody>
																			
																			</tbody>
																	</table>
														 
														</td>
													</div> 
													 <input id="module_id_hide" type="text"  placeholder="module_id" required class="form-control">
													 <input id="parent_id_hide" type="text"  placeholder="module_id" required class="form-control">

												 
												</div>
											</div> 
											<!-------------------------------END KOLOM EXT PRIV ------->  
								</div> 
                        </div>
				</div> 
        </div>
		
		<div   class='hide' id='myDialogAdd' title="Add / Edit Group">  
			<form class="form-horizontal bordered-row" id="demo-form" data-parsley-validate="">
                <div class="row"> 
                        <div class="hide">
                            <label class="col-sm-3 control-label"> Module ID</label>
                            <div class="col-sm-6" size="40">
                                <input type="text"    id="mod_id" placeholder="Module ID" required class="form-control">
                            </div>
                        </div>
						  <div class="form-group">
                            <label class="col-sm-3 control-label"    style="margin-left: 30px"> Group Name</label>
                            <div class="col-sm-6" >
                                <input type="text"    id="group_name" placeholder="Group Name" required class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label" style="margin-left: 30px">Description</label>
                            <div class="col-sm-6">
                                <input id="description" type="text"  placeholder="Description" required class="form-control">
                            </div>
                        </div>    
                </div> 
            </form> 
		</div>
		
		<!--DIALOG CONF.DELETE ROLE GROUP------->
		<div   class='hide' id='DialogDel' title="Delete Confirmation">  
			<form class="form-horizontal bordered-row" id="form_del_module_group" data-parsley-validate="">
                <div class="row"> 
                        <div class="form-group"  style="margin-left:20px">
						 <h3>Are You Sure You Want To Delete This  ?</h3>
						  <div class="hide size="20">
                                <input type="text"    id="appid_role" placeholder="Application Name" required class="form-control">
                            </div>
							 
                         </div>
				</div>
			</form>
		</div>
		
		<!--DIALOG CONF.DELETE ROLE GROUP------->
		<div   class='hide' id='DialogUpdate' title="Update Group">  
			 <form class="form-horizontal bordered-row" id="form_upd_module_group" data-parsley-validate="">
                <div class="row"> 
                        <div class="hide">
                            <label class="col-sm-3 control-label"> Module ID</label>
                            <div class="col-sm-6" size="40">
                                <input type="text"    id="mod_id_upd" placeholder="Module ID" required class="form-control">
                            </div>
                        </div>
						  <div class="form-group">
                            <label class="col-sm-3 control-label"    style="margin-left: 30px"> Group Name</label>
                            <div class="col-sm-6" >
                                <input type="text"    id="group_name_upd" placeholder="Group Name" required class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label" style="margin-left: 30px">Description</label>
                            <div class="col-sm-6">
                                <input id="description_upd" type="text"  placeholder="Description" required class="form-control">
                            </div>
                        </div>    
                </div> 
            </form> 
		</div>
		
		
    </div>
</div>
                    </div>
            </div>
        </div>
 

<!-- End of Content form -->

<!-- ADD PACKAGE JAVA SCRIPT -->
	<script>
	base_url = '<?= base_url()?>';
	
	$(document)
	  .ajaxStart(function () {
		$('.mask').addClass('ajax');
	  })
	  .ajaxStop(function () {
		$('.mask').removeClass('ajax');
	  });
	  
	  	$("#datatable33").on('click', '.check_priv', function() { 
	//	console.log(this.checked);
		
		if(this.checked){				  
				this.checked = true;
				var chk_p = 'true';
		}else{
				this.checked = false;
				var chk_p = 'false';
		}

        
		 
		  var currentRow = $(this).closest("tr"); 
		  var col1 = currentRow.find("td:eq(0)").html(); // get current row 1st table cell TD value
		  var col2 = currentRow.find("td:eq(1)").html(); // get current row 2nd table cell TD value
		  var col3 = currentRow.find("td:eq(2)").html(); // get current row 3rd table cell  TD 
		  var col4 = currentRow.find("td:eq(3)").html(); // get current row 3rd table cell  TD 
		  var col5 = currentRow.find("td:eq(4)").html(); // get current row 3rd table cell  TD  
	      var col6 = currentRow.find("td:eq(5)").html(); // get current row 3rd table cell  TD 

		
		  /*  $module       = $this->input->post('module_id');
		$parent_id    = $this->input->post('parent_id');
		$param_id     = $this->input->post('param_id');
		$chk          = $this->input->post('chk');
		$mid          = explode('-',$module);
		$text         = $this->input->post('text');
		$param1         = $this->input->post('param1');
		$grup_id      = $this->input->post('grup_id');
		  */
		//	var chk 						= 'true';
		 	var mod_id_hide			=  $('#module_id_hide').val();
			var parent_id_hide 	=  $('#parent_id_hide').val();
		//	var chk_p					= 'true';
			var text_p					= col1;
			var param_1_p			= col5;
			var grup_id_p				=  $('#parent_id_hide').val();			
			//5
			//var statuscheck =$(col3).attr('class');

			
		//	console.log(module_id_hide_1);
		//	console.log(parent_id_hide_1);

			//$('#module_id_hide').val(param);
			//$('#parent_id_hide').val(parent_id);
		//	alert(col3);
			console.log("1" + col1);
			console.log("1" + col1);
			console.log("2" + col2);
			console.log("3" + col3);
			console.log("4" + col4);
			console.log("5" + col5);
			console.log("6" + col6);

			
			SaveExtPriv(mod_id_hide,parent_id_hide,param_1_p,chk_p,text_p,param_1_p,grup_id_p);
			
			 
    }); 
		
//*ACTION BUTTON
		$("#btn_add_group").button().click(function() { 
				PopUpDialog() ;
				$("#mod_id").val('');
				$("#group_name").val('');
				$("#description").val('');
	  });
	  
	  	$("#btn_update").button().click(function() {  
				
				var idrole = $("#menu-list2  .jstree-clicked"). attr('id');
				var foldernm = $("#menu-list2  .jstree-clicked"). text(); 
				if(idrole==undefined){
					AlertDialog( "Warning","You haven't choose any folder");			
				}else{
					if (idrole.indexOf("-root") >= 0  ||  idrole.indexOf("-child") >= 0)   {
							idrole = idrole.replace("-root_anchor", "");
							idrole = idrole.replace("-child_anchor", "");
							PopUpDialog();
							$("#group_name").val(foldernm);
							$("#mod_id").val(idrole); 
						/* if (confirm("Are you sure remove '" +foldernm + "' folder ?")) {
							idrole = idrole.replace("-root_anchor", "");
							idrole = idrole.replace("-child_anchor", "");
							removeFolder(idrole);
						} */
					} else {
						AlertDialog ('ERROR',"You don't choose folder");
					}
				}   
	  });
	  
	  
	  $("#btn_remove").button().click(function() { 
	  
	  	var idrole = $("#menu-list2  .jstree-clicked"). attr('id');
			var foldernm = $("#menu-list2  .jstree-clicked"). text();
		//	console.log(idrole);
		//	console.log(foldernm);
			if(idrole==undefined){
				AlertDialog( "Warning","You haven't choose any folder");			
			}else{
				if (idrole.indexOf("-root") >= 0  ||  idrole.indexOf("-child") >= 0)   {
					if (confirm("Are you sure remove '" +foldernm + "' folder ?")) {
						idrole = idrole.replace("-root_anchor", "");
						idrole = idrole.replace("-child_anchor", "");
						removeFolder(idrole);
					}
				} else {
					AlertDialog ('ERROR',"You don't choose folder");
				}
			}  
	  });
	  
	 function PopUpDialog() {
		 $("#myDialogAdd").removeClass( "hide" );
		 $("#myDialogAdd") .css('overflow', 'hidden');//disable horizontal scroll bar
		 $("#myDialogAdd").dialog({
		 height:"auto",
		 
			//height: 300,
			width:550,
			 buttons: [
				{
				  text: "Cancel", 
				  click: function() {
					$( this ).dialog( "close" );
				  },
				  style:"margin-right:20px;"
				},
				{
					  text: "Save",
					  type: "submit",
					  click: function() {
								AddGroup(); 
				  }
				},
			  ],		
			modal: true,
			
		});		
       }
 //*END BUTTON
 
 
 function PopUpUpdate() {
		 $("#DialogUpdate").removeClass( "hide" );
		 $("#DialogUpdate") .css('overflow', 'hidden');//disable horizontal scroll bar
		 $("#DialogUpdate").dialog({
		 height:"auto",
		 
			//height: 300,
			width:550,
			 buttons: [
				{
				  text: "Cancel", 
				  click: function() {
					$( this ).dialog( "close" );
				  },
				  style:"margin-right:20px;"
				},
				{
					  text: "Save",
					  type: "submit",
					  click: function() {
						AddGroup(); 
				  }
				},
			  ],		
			modal: true,
			
		});		
       }
 
	function PopUpDel() {
		 $("#DialogDel").removeClass( "hide" );
		 $("#DialogDel") .css('overflow', 'hidden');//disable horizontal scroll bar
		 $("#DialogDel").dialog({
		 height:"auto", 
			//height: 300,
			width:550,
			 buttons: [
				{
				  text: "Cancel", 
				  click: function() {
					$( this ).dialog( "close" );
				  },
				  style:"margin-right:20px;"
				},
				{
					  text: "Delete",
					  type: "submit",
					  click: function() {
							DelGroup();
				  }
				},
			  ],		
			modal: true,
			
		});		
       }	
			// ajax demo
			$('#menu-list')
			.jstree({
				'core' : {
					'data' : {
						"url" : base_url+"user_management/groupconfig/create_tree",
						"dataType" : "json" // needed only if you do not supply JSON headers
					},
					"animation" : 0,
				},
				"plugins" : ["themes", "html_data", "dnd"],
				"themes" : {
					"theme" : "default",
					"dots" : true,
					"icons" : true
				},		
		 
			})
						
				// ajax demo
			$('#menu-list2')
			.jstree({
				'core' : {
					'data' : {
						"url" : base_url+"user_management/groupconfig/create_tree_group",
						"dataType" : "json" // needed only if you do not supply JSON headers
					},
					"animation" : 0,
				},
				"plugins" : ["themes", "html_data", "dnd"],
				"themes" : {
					"theme" : "default",
					"dots" : true,
					"icons" : true
				},		
		 
			});
					
	  $('#dragme')
            .on('mousedown', function (e) {
            return $.vakata.dnd.start(e, {
                'jstree': true,
                'obj': $(this),
                'nodes': [{
                    id: true,
                    text: $(this).text()
                }]
            }, '<div id="jstree-dnd" class="jstree-default"><i class="jstree-icon jstree-er"></i>' + $(this).text() + '</div>');
        }); 
         $(document)
            .on('dnd_move.vakata', function (e, data) {
            var t = $(data.event.target);
            if (!t.closest('#menu-list').length) {
                if (t.closest('#table2').length) {
                    data.helper.find('.jstree-icon').removeClass('jstree-er').addClass('jstree-ok');
                } else {
                    data.helper.find('.jstree-icon').removeClass('jstree-ok').addClass('jstree-er');
                }
            }
        })
            .on('dnd_stop.vakata', function (e, data) {

            var t = $(data.event.target);
            if (!t.closest('#menu-list2').length) {
                if (t.closest('#menu-list').length) {
				var idgroup = $(data.element).attr('id');
				idgroup = idgroup.replace("_anchor", "");
				if (idgroup.indexOf("-root") < 0 && idgroup.indexOf("-child") < 0  )   {
					var idparent_group =  uiGetUpParent(idgroup);
					idparent_group = idparent_group.replace("-root", "");
					idparent_group = idparent_group.replace("-child", "");
					idparent_group = idparent_group.replace("_anchor", ""); 
					
				//	console.log('parent :'+idparent_group); 
				//	console.log('child :'+idgroup  );					
					if(remove_module(idgroup) ){
						$('#menu-list').jstree(true).refresh();
						$('#menu-list2').jstree(true).refresh();
						alert("Module "+$(data.element).text()+" removed from group");
					}
				}					
				
                }
            } 
			
            if (!t.closest('#menu-list').length) {
                if (t.closest('#menu-list2').length) {
				var idmodule = $(data.element).attr('id');
				var idgroup = $(data.event.target).attr('id');
				if (idmodule.indexOf("-root") < 0 && idmodule.indexOf("-child") < 0 && (idgroup.indexOf("-root") >= 0 || idgroup.indexOf("-child") >=0 )   )   {
					idgroup = idgroup.replace("-root", "");
					idgroup = idgroup.replace("-child", "");
					idgroup = idgroup.replace("_anchor", ""); 
					idmodule	= idmodule.replace("_anchor", "");
				//	console.log('parent :'+idgroup); 
					//console.log('child :'+idmodule  );										
					//alert ('Role Id:'+idrole+' ; Module Id:'+ dropelement.val());
					if(moveModule(idgroup,idmodule) ){
						$('#menu-list').jstree(true).refresh();
						$('#menu-list2').jstree(true).refresh();
						alert("Module "+$(data.element).text()+" put it inside "+$(data.event.target).text()  );
					} 		 
					
				}	
				
                }
            }			
        });
	  
     $('#menu-list2').on('select_node.jstree', function (e, data) {
        // var loMainSelected = data;
        // uiGetParents(loMainSelected); 
		 //  console.log(data.node.id);
		   var param  =data.node.id;
		   getData(param)
     });

    function uiGetParents(loSelectedNode) {
        try {
            var lnLevel = loSelectedNode.node.parents.length;
            var lsSelectedID = loSelectedNode.node.id;
			//console.log(lnLevel); 
            var loParent = $("#" + lsSelectedID);
            var lsParents =  loSelectedNode.node.text + ' >';
            for (var ln = 0; ln <= lnLevel -1 ; ln++) {
                var loParent = loParent.parent().parent();
                if (loParent.children()[1] != undefined) {
                    lsParents += loParent.children()[1].id + " > ";
                }
            }
            if (lsParents.length > 0) {
                lsParents = lsParents.substring(0, lsParents.length - 1);
            }
            alert(lsParents);
        }
        catch (err) {
            alert('Error in uiGetParents');
        }
    }
	
    function uiGetUpParent(lsSelectedID) {
        try {
            var loParent = $("#" + lsSelectedID);
            var lsParents = "";
			var loParent = loParent.parent().parent();
			if (loParent.children()[1] != undefined) {
				var ParentID = loParent.children()[1].id ;
			}				
            return ParentID;
        }
        catch (err) {
            return 0;
        }
    }	
	
 		function remove_module(n){
			var status =  $.ajax({
				async:false,
				url:base_url + 'user_management/groupconfig/remove_module',
				type:'POST',				
				data: 'n=' + n, 
				failure:function(response){}			
			});
			return status.success;
			
		}
	
 		function moveModule(p,n){
			var status =  $.ajax({
				async:false,
				url:base_url + 'user_management/groupconfig/move_module',
				type:'POST',				
				data:'p='+p+'&n=' + n,
				failure:function(response){}			
			});
			return status.success;
		}	

		  

		$("#bt_add").button().click(function() {
			var folder_nm = 	 $("#folder").val();
			var idrole = $("#menu-list  .jstree-clicked"). attr('id');
		//	console.log(idrole);
			if (folder_nm=="") {
				alert('Folder Name Empty');
			} else {
				if ( idrole==undefined){
					if(confirm("You haven't choose parent folder. Continue ?")){
						orphantFolder(folder_nm);
					}
				}else{				
					if (idrole.indexOf("-root") >= 0 )   {
						idrole = idrole.replace("-root_anchor", "");
						idrole = idrole.replace("-child_anchor", "");
						createFolder(folder_nm, idrole);
					} else if ( idrole.indexOf("-child") >= 0 )	 {
						alert("can't create folder under subfolder");
					} else {
						alert("You don't choose folder");
					}
				}		
			}
				
		  });
		  
		$("#bt_del").button().click(function() {
 
 			var idrole = $("#menu-list  .jstree-clicked"). attr('id');
			var foldernm = $("#menu-list  .jstree-clicked"). text();
			if(idrole==undefined){
				AlertDialog( "Warning","You haven't choose any folder");			
			}else{
				if (idrole.indexOf("-root") >= 0  ||  idrole.indexOf("-child") >= 0)   {
					if (confirm("Are you sure remove '" +foldernm + "' folder ?")) {
						idrole = idrole.replace("-root_anchor", "");
						idrole = idrole.replace("-child_anchor", "");
						removeFolder(idrole);
					}
				} else {
					AlertDialog ('ERROR',"You don't choose folder");
				}
			}   
		});		  
		  
		function orphantFolder(f){
			var jparams = 'f='+f;
					$.ajax({
						  type		: 'POST',
						  url:'<?=base_url();?>user_management/assign_menu/orphant_folder',
						  data		: jparams,
						  dataType	: 'json',
						  success	:function(result){ 
								if(result.success ){
									AlertDialog('Information',result.message );
									$('#menu-list').jstree(true).refresh()									
								}  else {
									AlertDialog('Error', result.message );
								}
								$("#folder").val("");
						  }	,
						failure:function(){
								AlertDialog('Error',"Please try again in a moment");
							}								  
						  
					});    
			return status.success;
		}
		
		function createFolder(f, p){
			var jparams = 'f=' + f + '&p=' + p; 
			$.ajax({
				  type		: 'POST',
				  url:'<?=base_url();?>user_management/assign_menu/create_folder',
				  data		: jparams,
				  dataType	: 'json',
				  success	:function(result){ 
						if(result.success ){
							AlertDialog('Information',result.message );
							$('#menu-list').jstree(true).refresh()									
						}  else {
							AlertDialog('Error', result.message );
						}
						$("#folder").val("");
				  }	,
				failure:function(){
						AlertDialog('Error',"Please try again in a moment");
					}	 
			});     
		}

		function removeFolder(f){
			var jparams = 'groupid=' + f  ;//delGroup
			
			$.ajax({
				  type		: 'POST',
				 // url:'<?=base_url();?>user_management/assign_menu/remove_folder',
				 url:'<?=base_url();?>user_management/groupconfig/delGroup',
				  data		: jparams,
				  dataType	: 'json',
				  success	:function(result){ 
						if(result.success ){
							AlertDialog('Information',result.message );
							$('#menu-list2').jstree(true).refresh()									
						}  else {
							AlertDialog('Error', result.message );
						}
						$("#folder").val("");
				  }	,
				failure:function(){
						AlertDialog('Error',"Please try again in a moment");
					}		 
			});    
		}
		
	function ConfirmDialog(title, message){
		$('<div></div>').appendTo('body')
                    .html('<div><h6>'+message+'?</h6></div>')
                    .dialog({
                        modal: true, title:title, zIndex: 10000, autoOpen: true,
                        width: 'auto', resizable: false,
                        buttons: {
                            Yes: function () {
                                // $(obj).removeAttr('onclick');                                
                                // $(obj).parents('.Parent').remove();
								return true;
                                $(this).dialog("close");
                            },
                            No: function () {
								return false;
                                $(this).dialog("close");
								
                            }
							
                        },
                        close: function (event, ui) {
							return false;
                            $(this).remove();	
                        }
         });
    };		

	function AlertDialog(title, message){
		$('<div></div>').appendTo('body')
                    .html('<div><h6>'+message+'</h6></div>')
                    .dialog({
                        modal: true, title:title, zIndex: 10000, autoOpen: true,
                        width: 'auto', resizable: false,
                        buttons: {
                            Ok: function () {
                                // $(obj).removeAttr('onclick');                                
                                // $(obj).parents('.Parent').remove();
								   $(this).remove();
                            },
                        },
                        close: function (event, ui) {
							return false;
                            $(this).remove();

                        }
         });
    };	


	function AddGroup(){
			 var descForm 			= $("#description").val();
			 var groupIdForm 		= $("#mod_id").val(); 
			 var group_name		= $("#group_name").val();   
			 
			 if(group_name==''){
					alert('Please check GroupName');
					 return false;      
			  } else if(descForm==''){
					alert('Please check Description');
					 return false;      
			  }else{
			  
					 var jparams = "descForm="+descForm+"&groupIdForm="+groupIdForm+"&group_name="+group_name;
					$.ajax({
							  type		: 'POST',
							  url:'<?=base_url();?>user_management/groupconfig/saveGroup', 
							  data		: jparams,
							  dataType	: 'json',
							  success	:function(result){
							//  console.log(result.status);
							  if (result.status==0){
							  alert('Error');
							  }else{
								 alert('Save Success'); 
								 	$( "#myDialogAdd").dialog( "close" );
								 	$('#menu-list').jstree(true).refresh();
									$('#menu-list2').jstree(true).refresh(); 
							 }
							}	
					   });   
			  } 
	}
	
	function SaveExtPriv(mod_id_hide,parent_id_hide,param_1_p,chk_p,text_p,param_1_p,grup_id_p){
			 
			var jparams = "module_id="+mod_id_hide+"&parent_id="+parent_id_hide+"&param_id="+param_1_p+"&chk="+chk_p+"&text="+text_p+"&text="+text_p+"&param1="+param_1_p+"&grup_id="+grup_id_p;
					$.ajax({
							  type		: 'POST',
							  url:'<?=base_url();?>user_management/groupconfig/save', 
							  data		: jparams,
							  dataType	: 'json',
							  success	:function(result){
							  console.log(result);
							  alert('oke');
							/*  console.log(result);
							     if (result.success==true){
									alert(result.errors.reason);
									// 	$( "#myDialogAddRole").dialog( "close" );//getDataRole
									//	getDataRole(); 
										
								  }else{
									 alert('ERROR : ' + result.errors.reason);										
								 } */
							},failure:function(){
									AlertDialog('Error',"Please try again in a moment");
								}	
					   }); 
	}
	
	

	/* function getData(param){ //datatable_group
		var parent_id_split= param.split('-');
		var parent_id = parent_id_split[0];
	     var jparams = "module_id="+param+"&parent_id="+parent_id; 
	
		// console.log(parent_id);
			$.ajax({
				 type     : 'POST',
				 url      :'<?=base_url();?>user_management/groupconfig/role_data',
				 data     : jparams,
				 dataType : 'json',
				success  : function(result){
					//console.log(result);
				//	alert('oke');
						if (result){
					console.log('oke');
							  var xhtm="";
							  var tot = 0;
							  $.each(result.data, function(i,item){
							  					console.log(item.text);
									xhtm += "<tr>";
									xhtm += "<td>"+item.LABEL ;
									xhtm += "<td>"+item.LABEL ; 
									xhtm += "<td>" ; 
								xhtm += "</tr>";
							  });
								$('#datatable33 tbody').html(xhtm);	
								$('#datatable33').dataTable({
									"bPaginate" : true,
									"bSort" : true,
									"bInfo" : false,
									"bFilter" : false,
									"bDestroy": true
								});	

							  return false; 
						  }else {
							  $('#datatable33 tbody').html("<center><strong>Data tidak ditemukan</strong></center>");
							 return false; 
						   }			
						}
					});
		} */	
		
		function getData(param){ //datatable_group
		var parent_id_split= param.split('-');
		var parent_id = parent_id_split[0];
	     var jparams = "module_id="+param+"&parent_id="+parent_id; 
			$('#module_id_hide').val(param);
			$('#parent_id_hide').val(parent_id);

	
		// console.log(parent_id);
			$.ajax({
				 type     : 'POST',
				 url      :'<?=base_url();?>user_management/groupconfig/role_data',
				 data     : jparams,
				 dataType : 'json', 
				success  : function(result){
//console.log(result.rows.length );
//console.log(result);
			//		console.log(result.children[1].text);
				//	alert('oke');

					if (result.children==null){
					 $('#datatable33 tbody').html(""); 
						 return false; 
						  }else  {
						  								 
							   var xhtm="";
							  var tot = 0;
							  $.each(result.children, function(i,item){
							  tot = tot+1;
							  		//console.log(item);
									if (item.text!=undefined) {
										xhtm += "<tr>";
										xhtm += "<td>"+item.text+"</td>" ;
										xhtm += "<td>"+"<input name='check_priv'  id= 'check_priv'  class = 'check_priv' value='false' id='example-select-all' type='checkbox'/>" + "</td>" ; 
										xhtm += "<td class ='hide'>"+item.id + "</td>" ; 
										xhtm += "<td class ='hide'>"+item.grup_id + "</td>" ; //parent id
										xhtm += "<td class ='hide'>"+item.param1 + "</td>" ; 
										xhtm += "<td class ='hide'>"+item.check + "</td>" ; 
										xhtm += "<td class ='hide'>"+item.expanded + "</td>" ; 
										xhtm += "<td class ='hide'>"+item.leaf + "</td>" ; 
										//xhtm += "<td>" ; 
										xhtm += "</tr>";
									}
							  });
								$('#datatable33 tbody').html(xhtm);
								/*
								  $module       = $this->input->post('module_id');
		$parent_id    = $this->input->post('parent_id');
		$param_id     = $this->input->post('param_id');
		$chk          = $this->input->post('chk');
		$mid          = explode('-',$module);
		$text         = $this->input->post('text');
		$param1         = $this->input->post('param1');
		$grup_id      = $this->input->post('grup_id');
								*/
 
						return false; 
						 }			
						},failure:function(response) {
								$('#datatable33 tbody').html(""); 

						}
					});
		}	
	</script>
<!-- Bootstrap Datepicker -->
<!--<link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/widgets/datepicker/datepicker.css">-->
<script type="text/javascript" src="<?=base_url();?>assets/widgets/datepicker/datepicker.js"></script>
<script type="text/javascript">
    /* Datepicker bootstrap */

    $(function() { "use strict";
        $('.bootstrap-datepicker').bsdatepicker({
            format: 'mm-dd-yyyy'
        });
    });

</script>

 
<!-- jQueryUI Datepicker -->

<!--<link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/widgets/datepicker-ui/datepicker.css">-->
<script type="text/javascript" src="<?=base_url();?>assets/widgets/datepicker-ui/datepicker.js"></script>
<script type="text/javascript" src="<?=base_url();?>assets/widgets/datepicker-ui/datepicker-demo.js"></script>

<!-- Bootstrap Daterangepicker -->

<!--<link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/widgets/daterangepicker/daterangepicker.css">-->
<script type="text/javascript" src="<?=base_url();?>assets/widgets/daterangepicker/moment.js"></script>
<script type="text/javascript" src="<?=base_url();?>assets/widgets/daterangepicker/daterangepicker.js"></script>
<script type="text/javascript" src="<?=base_url();?>assets/widgets/daterangepicker/daterangepicker-demo.js"></script>

<!-- Bootstrap Timepicker -->

<!--<link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/widgets/timepicker/timepicker.css">-->
<script type="text/javascript" src="<?=base_url();?>assets/widgets/timepicker/timepicker.js"></script>
<script type="text/javascript">

    /* Timepicker */

    $(function() { "use strict";
        $('.timepicker-example').timepicker();
    });
</script>

<!-- Colorpicker -->

<!--<link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/widgets/colorpicker/colorpicker.css">-->
<script type="text/javascript" src="<?=base_url();?>assets/widgets/colorpicker/colorpicker.js"></script>
<script type="text/javascript" src="<?=base_url();?>assets/widgets/colorpicker/colorpicker-demo.js"></script>

      
    </div>
    </div>
</div>
        </div>

                

        </div>
        </div>
    </div>


    <!-- WIDGETS -->

<script type="text/javascript" src="<?=base_url();?>assets/bootstrap/js/bootstrap.js"></script>

<!-- Bootstrap Dropdown -->

<!-- <script type="text/javascript" src="<?=base_url();?>assets/widgets/dropdown/dropdown.js"></script> -->

<!-- Bootstrap Tooltip -->

<!-- <script type="text/javascript" src="<?=base_url();?>assets/widgets/tooltip/tooltip.js"></script> -->

<!-- Bootstrap Popover -->

<!-- <script type="text/javascript" src="<?=base_url();?>assets/widgets/popover/popover.js"></script> -->

<!-- Bootstrap Progress Bar -->

<script type="text/javascript" src="<?=base_url();?>assets/widgets/progressbar/progressbar.js"></script>

<!-- Bootstrap Buttons -->

<!-- <script type="text/javascript" src="<?=base_url();?>assets/widgets/button/button.js"></script> -->

<!-- Bootstrap Collapse -->

<!-- <script type="text/javascript" src="<?=base_url();?>assets/widgets/collapse/collapse.js"></script> -->

<!-- Superclick -->

<script type="text/javascript" src="<?=base_url();?>assets/widgets/superclick/superclick.js"></script>

<!-- Input switch alternate -->

<script type="text/javascript" src="<?=base_url();?>assets/widgets/input-switch/inputswitch-alt.js"></script>

<!-- Slim scroll -->

<script type="text/javascript" src="<?=base_url();?>assets/widgets/slimscroll/slimscroll.js"></script>

<!-- Slidebars -->

<script type="text/javascript" src="<?=base_url();?>assets/widgets/slidebars/slidebars.js"></script>
<script type="text/javascript" src="<?=base_url();?>assets/widgets/slidebars/slidebars-demo.js"></script>

<!-- PieGage -->

<script type="text/javascript" src="<?=base_url();?>assets/widgets/charts/piegage/piegage.js"></script>
<script type="text/javascript" src="<?=base_url();?>assets/widgets/charts/piegage/piegage-demo.js"></script>

<!-- Screenfull -->

<script type="text/javascript" src="<?=base_url();?>assets/widgets/screenfull/screenfull.js"></script>

<!-- Content box -->

<script type="text/javascript" src="<?=base_url();?>assets/widgets/content-box/contentbox.js"></script>

<!-- Overlay -->

<script type="text/javascript" src="<?=base_url();?>assets/widgets/overlay/overlay.js"></script>

<!-- Widgets init for demo -->

<script type="text/javascript" src="<?=base_url();?>assets/js-init/widgets-init.js"></script>

<!-- Theme layout -->

<script type="text/javascript" src="<?=base_url();?>assets/themes/admin/layout.js"></script>

<!-- Theme switcher -->

<script type="text/javascript" src="<?=base_url();?>assets/widgets/theme-switcher/themeswitcher.js"></script>

</div>
</body>
</html>