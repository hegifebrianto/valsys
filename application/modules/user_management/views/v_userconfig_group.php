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
 a.jstree-anchor > i.jstree-checkbox-disabled {
    display: none;
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
                            <b>User  Configuration  Group</b>
                        </h3>
                        <div class="content-box-wrapper">
                          <div class="row">

												
											<div class="col-md-4">  <!-------------------------------KOLOM LIST MODULE ------->
												<div >
												 <div class="button-pane">	  
													<div class="size-md float-left">
														<a>
															<b>LIST USER</b>
														</a>
													</div>
												</div> 
											 
														<input type="text"    id="fullname" placeholder="Search Username ..." required class="form-control">
														<input type="hidden"    id="username"  >
														<br> 
														<table id="datatable" class="table table-striped table-bordered" cellspacing="0" > 
																			<thead>
																			<tr>
																				<th  width="20px">ID</th> 
																				<th>Name</th> 
																			</tr>
																			</thead> 
																			  
																			<tbody>
																			
																			</tbody>
														</table>
 
											 
												</div>
											</div><!-------------------------------END KOLOM LIST MODULE ------->
											
											
											<div class="col-md-4">  <!-------------------------------KOLOM LIST MODULE ------->
												<div  >
												   <div class="button-pane">
														<div class="size-md float-left">
															<a>
																<b>GROUP PRIVILEGES</b>
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
													
								<!--	  <div class="button-pane">
														<div class="size-md float-left" >
															    <button class="btn btn-primary"  title="Add" id='btn_add_group'>
																		<i class="glyph-icon icon-elusive-plus-circled"  ></i>
																</button>																
																  <button class="btn btn-danger" id='btn_remove'>
																		<i class="glyph-icon  icon-elusive-minus-circled"></i>
																</button>
														</div>
													</div> -->
												 
												</div>
											</div><!-------------------------------END KOLOM LIST MODULE ------->
											
											<div class="col-md-4">  <!-------------------------------KOLOM EXT PRIV ------->
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
												 
												</div>
											</div><!-------------------------------END KOLOM EXT PRIV ------->  
								</div> 
                        </div>
				</div> 
        </div>
		
<!--<div class = "panel">
		<div class = "panel-body">
		   <div class="row">
				<div class="col-md-4"> 
								<div >
									 <div class="example-box-wrapper"> 
										 <div class="form-group">
													<label class="col-sm-4 control-label"   style="width:30%" > User ID</label>
														<div class="col-sm-6"  >
															<input type="text"    id="group_name" placeholder="User ID" required class="form-control" >  
														</div> 
											</div> 
											<br><br>
											<div class="form-group">
													<label class="col-sm-4 control-label"   style="width:30%" > User Name</label>
														<div class="col-sm-6"  >
															<input type="text"    id="user_name22" placeholder="User Name" required class="form-control" >  
														</div> 
											</div> 
											<br><br>
											 <div class="form-group">
													<label class="col-sm-4 control-label" >Group List</label>  
															<div class="col-md-7">
																<select multiple class="form-control">
																	<option>1</option>
																	<option>2</option>
																	<option>3</option>
																	<option>4</option>
																	<option>5</option>
																</select>
															</div> 
												</div> 
									</div>
								</div>
				</div>
				
				<div class="col-md-4">   
								<div >
									 <div class="example-box-wrapper">  
											 <div class="form-group">
													<label class="col-sm-4 control-label"   style="width:40%">Modul List</label>  
															<div class="col-md-9">
																<select multiple class="form-control">
																	<option>1</option>
																	<option>2</option>
																	<option>3</option>
																	<option>4</option>
																	<option>5</option>
																</select>
															</div> 
												</div> 
									</div>
								</div>
				</div>
				 
								<div >
									 <div class="example-box-wrapper">  
											 <div class="form-group">
													<label class="col-sm-4 control-label"   style="width:40%">Modul Privileges</label>  
															<div class="col-md-9">
																<select multiple class="form-control">
																	<option>1</option>
																	<option>2</option>
																	<option>3</option>
																	<option>4</option>
																	<option>5</option>
																</select>
															</div> 
												</div> 
									</div>
								</div>
				</div>
	<div class="example-box-wrapper">
					<form class="form-horizontal bordered-row" id="demo-form" data-parsley-validate="">
						<div class="row"> 
								<div class="hide">
									<label class="col-sm-3 control-label"> Module ID</label>
									<div class="col-sm-6" size="40">
										<input type="text"    id="mod_id" placeholder="Module ID" required class="form-control">
									</div>
								</div>
								  <div class="form-group">
									<label class="col-sm-1 control-label"    style="width:10%"> User ID</label>
									<div class="col-sm-2"  >
										<input type="text"    id="group_name" placeholder="User ID" required class="form-control" >  
									</div>
										 
										<label class="col-sm-1 control-label"   style="margin-right:20px"> Module List</label>
								 
								</div>
								<div class="form-group">
									<label class="col-sm-1 control-label"    style="width:10%">User Name</label>
									<div class="col-sm-2">
										<input id="description" type="text"  placeholder="User Name" required class="form-control">
									</div>
								</div>

								<div class="form-group">
									<label class="col-sm-1 control-label" style="width:10%">Group List</label>
									<div class="col-sm-6">
										<div class="row">
											<div class="col-md-5">
												<textarea name="" placeholder=".textarea-sm" rows="3" class="form-control textarea-sm"></textarea> 
											</div> 
										</div>
									</div>
								</div>								
						</div> 
					</form>    
			  </div>
			  
	  <div class="example-box-wrapper">
					<form class="form-horizontal bordered-row" id="demo-form1" data-parsley-validate="">
						<div class="row"> 
								<div class="hide">
									<label class="col-sm-3 control-label"> Module ID</label>
									<div class="col-sm-6" size="40">
										<input type="text"    id="mod_id1" placeholder="Module ID" required class="form-control">
									</div>
								</div>
								  <div class="form-group">
									<label class="col-sm-1 control-label"    style="width:10%"> User ID</label>
									<div class="col-sm-2" >
										<input type="text"    id="group_name1" placeholder="User ID" required class="form-control" >
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-1 control-label"    style="width:10%">User Name</label>
									<div class="col-sm-2">
										<input id="description" type="text"  placeholder="User Name" required class="form-control">
									</div>
								</div>

								<div class="form-group">
									<label class="col-sm-1 control-label" style="width:10%">Group List</label>
									<div class="col-sm-6">
										<div class="row">
											<div class="col-md-4">
												<textarea name="" placeholder=".textarea-sm" rows="3" class="form-control textarea-sm"  id="group_name1" ></textarea> 
											</div> 
										</div>
									</div>
								</div>								
						</div> 
					</form>    
			  </div>  
			  
			  
		  </div>
	</div> -->
		
		<div   class='hide' id='myDialogAdd' title="Add Group">  
			<form class="form-horizontal bordered-row" id="demo-form" data-parsley-validate="">
                <div class="row"> 
                        <div class="hide">
                            <label class="col-sm-3 control-label"> Module ID</label>
                            <div class="col-sm-6" size="40">
                                <input type="text"    id="mod_id" placeholder="Module ID" required class="form-control">
                            </div>
                        </div>
						  <div class="form-group">
                            <label class="col-sm-3 control-label"    style="margin-left: 30px"> User ID</label>
                            <div class="col-sm-6" >
                                <input type="text"    id="user_id" placeholder="User ID" required class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label" style="margin-left: 30px">User Name</label>
                            <div class="col-sm-6">
                                <input id="description" type="text"  placeholder="Parameter" required class="form-control">
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

<script>
	  $(document).ready(function() {
		init(); 
		function init()
		{
			getData(); 
		}  
		});
</script>

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
		
//*ACTION BUTTON
		$("#btn_add_group").button().click(function() { 
				PopUpDialog() 
			//$("#oper").val('add');
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
 
				// ajax demo
			$('#menu-list2')
			.jstree({
				'core' : {
					'data' : {
						"url" : base_url+"user_management/userconfig_group/create_tree_group?user=",
						"dataType" : "json" // needed only if you do not supply JSON headers
					},
					"animation" : 0,
					"check_callback" :  false,
				},
				"plugins" : ["themes", "html_data", "checkbox"],
				checkbox: {       
				  three_state : false, // to avoid that fact that checking a node also check others
				  whole_node : false,  // to avoid checking the box just clicking the node 
				  tie_selection : false // for checking without selecting and selecting without checking
				},	
				"themes" : {
					"theme" : "default",
					"dots" : true,
					"icons" : true
				},		
		 
			})
			.on("check_node.jstree uncheck_node.jstree", function(e, data) {
				
				var group_id = data.node.id;
				var has_view =0;
				var username = $('#username').val();
				var gid = data.node.original.gid;
				group_id = group_id.replace("-root", "");
				group_id = group_id.replace("-child", ""); 
				group_id = group_id.replace("-_anchor", ""); 		
				if ( data.node.state.checked) {
					has_view = 1;
				} else {
					has_view = 0;
				}
				//console.log(data.node.id,data.node.state.checked,data.node.original.gid,username);
				
				if (username) {
					var jparams = 'has_view='+has_view+'&group_id='+group_id+'&usernm='+username+'&gid='+gid;
					$.ajax({
						  type		: 'POST',
						  url:'<?=base_url();?>user_management/userconfig_group/has_view_all',
						  data		: jparams,
						  dataType	: 'json',
						  success	:function(result){ 
								//console.log(result);
								var arrayCollection  = 
								{ 		"url" : base_url+"user_management/userconfig_group/create_tree_group?user="+b.item.value,
										"dataType" : "json" // needed only if you do not supply JSON headers
								}
								 $('#menu-list2').jstree(true).settings.core.data = arrayCollection;
								$('#menu-list2').jstree(true).load_node('#');								

						  }	,
						failure:function(){
								AlertDialog('Error',"Please try again in a moment");
							}	 
					});     				
				} else {
					AlertDialog('Error',"Please choose username");
				}
				
			})
	 

	
 
	  
		
 

		$("#bt_getchek").button().click(function() {
			var statuscheck =$("#uniform-check_active_role span").attr('class');
			//console.log(statuscheck);
			if (statuscheck==undefined) {
			$("#uniform-check_active_role span").attr('class','checked');				
			} else {
			$("#uniform-check_active_role span").removeAttr('class');
			}
		});	
		
		
		$("#bt_getad").button().click(function() {
			var jparams="";
				$.ajax({
					  type		: 'POST',
					  url:'<?=base_url();?>user_management/assign_menu/get_ad',
					  data		: jparams,
					  dataType	: 'json',
					  success	:function(result){ 
							if(result.success ){
								var xhtm = "<table>";
								var tot=0;
								  $.each(result.message, function(i,item){
									tot = tot+1;
									xhtm += "<tr>";
										xhtm += "<td>"+tot +"</td>";
										xhtm += "<td>"+item.name +"</td>";
										xhtm += "<td>"+item.username +"</td>";
										xhtm += "<td>"+item.department +"</td>";
										xhtm += "<td>"+item.desc +"</td>";
										xhtm += "<td>"+item.mail +"</td>";
										xhtm += "<td>"+item.guid +"</td>";

										xhtm += "</tr>";
								  });	
								 xhtm += "</table>";
								 $("#list_ad").html(xhtm);
							}  else {
								AlertDialog('Error', result.message );
								$("#list_ad").html("");
							}
							
					  }	,
					failure:function(){
							AlertDialog('Error',"Please try again in a moment");
							$("#list_ad").html("");
						}								  
					  
				});    	
		  });
		  

		$("#bt_add").button().click(function() {
			var folder_nm = 	 $("#folder").val();
			var idrole = $("#menu-list  .jstree-clicked"). attr('id');
			//console.log(idrole);
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
			var jparams = 'f=' + f  ;
			
			$.ajax({
				  type		: 'POST',
				  url:'<?=base_url();?>user_management/assign_menu/remove_folder',
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
			 var jparams = "descForm="+descForm+"&groupIdForm="+groupIdForm+"&group_name="+group_name;
					$.ajax({
							  type		: 'POST',
							  url:'<?=base_url();?>user_management/groupconfig/saveGroup', 
							  data		: jparams,
							  dataType	: 'json',
							  success	:function(result){
							  //console.log(result.status);
							  if (result.status==0){
							  alert('Error');
							  }else{
								 alert('Save Success'); 
							 }
							}	
					   });  
		}	
		
		function getData(){ //datatable_group
				var jparams = "";	
				$.ajax({
					 type     : 'POST',
					 url      :'<?=base_url();?>user_management/userconfig_group/getData',
					 data     : jparams,
					 dataType : 'json',
					success  : function(result){
						//console.log(result);
					//	alert('oke');
							if (result.status==1){
								  var xhtm="";
								  var tot = 0;
								  $.each(result.data, function(i,item){
										xhtm += "<tr>";
										xhtm += "<td>"+item.USER_ID +"</td>";
										xhtm += "<td>"+item.USER_NAME +"</td>" ; 
									xhtm += "</tr>";
								  });
									$('#datatable tbody').html(xhtm);	
									$('#datatable').dataTable({
										"bPaginate" : false,
										"bSort" : true,
										"bInfo" : false,
										"bFilter" : false,
										"bDestroy": true
									});	

								  return false; 
							   }else if(result.status==0){
								  $('#datatable tbody').html("<center><strong>Data tidak ditemukan</strong></center>");
								  return false; 
							   }			
							}
						});
		}
		
		
		function getDataParam(a){ //datatable_group
		var jparams =  "username="+a; 
		//console.log(a);
		$.ajax({
			 type     : 'POST',
			 url      :'<?=base_url();?>user_management/userconfig_group/getDataParam',
			 data     : jparams,
			 dataType : 'json',
			success  : function(result){
				console.log(result);
			//	alert('oke');
					if (result.status==1){
						  var xhtm="";
						  var tot = 0;
						  $.each(result.data, function(i,item){
						//  	console.log(item);
						//	tot = tot+1;
					//	console.log(item.USER_ID);//
								xhtm += "<tr>";
								xhtm += "<td>"+item.USER_ID +"</td>";
								xhtm += "<td>"+item.USER_NAME +"</td>" ; 
							xhtm += "</tr>";
						  });
						  //alert(tot);
							$('#datatable tbody').html(xhtm);				
							
					/* 		$('#datatable').dataTable({
								"bPaginate" : false,
								"bSort" : true,
								"bInfo" : false,
								"bFilter" : false,
								"bDestroy" : true,
							});	 */

						  return false; 
					   }else if(result.status==0){
						  $('#datatable tbody').html("<center><strong>Data tidak ditemukan</strong></center>");
						  return false; 
					   }			
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
	
	$(function(){
	  $("#fullname").autocomplete({
		source: '<?=base_url();?>user_management/userconfig_group/getUsername' ,
		
		select: function (a, b) {
				$(this).val(b.item.value);
				console.log(b.item.value);
				var a = b.item.value;
				$('#username').val(b.item.value);
				//getDataParam(b.item.value);
				getDataParam(a);
				var arrayCollection  = 
				{ 		"url" : base_url+"user_management/userconfig_group/create_tree_group?user="+b.item.value,
						"dataType" : "json" // needed only if you do not supply JSON headers
				}
				 $('#menu-list2').jstree(true).settings.core.data = arrayCollection;
				$('#menu-list2').jstree(true).load_node('#');
			//	alert(b.item.value);
				//$(".searchform1").submit()
			}// path to the get_birds method 
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