 <?=$head?>
 <?=$side_menu?>
 
     <style>
        /* Loading Spinner */
        .spinner{margin:0;width:70px;height:18px;margin:-35px 0 0 -9px;position:absolute;top:50%;left:50%;text-align:center}.spinner > div{width:18px;height:18px;background-color:#333;border-radius:100%;display:inline-block;-webkit-animation:bouncedelay 1.4s infinite ease-in-out;animation:bouncedelay 1.4s infinite ease-in-out;-webkit-animation-fill-mode:both;animation-fill-mode:both}.spinner .bounce1{-webkit-animation-delay:-.32s;animation-delay:-.32s}.spinner .bounce2{-webkit-animation-delay:-.16s;animation-delay:-.16s}@-webkit-keyframes bouncedelay{0%,80%,100%{-webkit-transform:scale(0.0)}40%{-webkit-transform:scale(1.0)}}@keyframes bouncedelay{0%,80%,100%{transform:scale(0.0);-webkit-transform:scale(0.0)}40%{transform:scale(1.0);-webkit-transform:scale(1.0)}}
	
    </style>
	
	<style>
		.foo
	{
		padding-right: 20px;
	}
	</style>
	
	<style>#datatable td{padding:8px;}
	.btnSelect{background-color:#5F9EAD;border:2px solid #5F9EAD;border-radius:4px;color:white;cursor:pointer;}
	.btnSelect:hover{background-color:#c93326;border:2px solid #c93326;}
	
	.btnDel{background-color:#c93326;border:2px solid #c93326;border-radius:4px;color:white;cursor:pointer;}
	.btnDel:hover{background-color:#5F9EAD;border:2px solid #5F9EAD;}
	
	.btnSelectG{background-color:#5F9EAD;border:2px solid #5F9EAD;border-radius:4px;color:white;cursor:pointer;}
	.btnSelectG:hover{background-color:#c93326;border:2px solid #c93326;}
	
	.btnDelG{background-color:#c93326;border:2px solid #c93326;border-radius:4px;color:white;cursor:pointer;}
	.btnDelG:hover{background-color:#5F9EAD;border:2px solid #5F9EAD;}	
	
	.btnAddPri{background-color:#8FBC8B;border:2px solid #8FBC8B;border-radius:4px;color:white;cursor:pointer;}
	
	.btnSelectR{background-color:#5F9EAD;border:2px solid #5F9EAD;border-radius:4px;color:white;cursor:pointer;}
	.btnSelectR:hover{background-color:#c93326;border:2px solid #c93326;}
	
	.btnDelR{background-color:#c93326;border:2px solid #c93326;border-radius:4px;color:white;cursor:pointer;}
	.btnDelR:hover{background-color:#5F9EAD;border:2px solid #5F9EAD;} 
}
		
	
	</style>
	
	<style type='text/css'>
/* form elements */
form {
  margin:10px; 
  padding: 0 5px;
 
}
label {
  display:block;
  font-weight:bold;
  margin:5px 0;
}
input {
  padding:2px;
  border:1px solid #eee;
  font: normal 1em Verdana, sans-serif;
  color:#777;
  width:400px;
}
textarea {
  width:400px;
  padding:2px;
  font: normal 1em Verdana, sans-serif;
  border:1px solid #eee;
  height:100px;
  display:block;
  color:#777;
}
input.button { 
  font: bold 12px Arial, Sans-serif; 
  height: 24px;
  margin: 0;
  padding: 2px 3px; 
  color: #333;
  background: #e7e6e6 url(MarketPlace-images/button.jpg) repeat-x;
  border: 1px solid #dadada;
}


 

</style>
   <div id="page-content-wrapper">
            <div id="page-content">
                
      <div class="container">


<!-- Parsley -->

<script type="text/javascript" src="<?=base_url();?>assets/widgets/parsley/parsley.js"></script>
<script type="text/javascript" src="<?=base_url();?>assets/widgets/tabs-ui/tabs.js"></script>
<script type="text/javascript" src="<?=base_url();?>assets/widgets/tabs/tabs.js"></script>
<script type="text/javascript" src="<?=base_url();?>assets/widgets/tabs/tabs-responsive.js"></script

    <!-- element Checkbox -->
<script type="text/javascript" src="<?=base_url();?>assets/widgets/uniform/uniform.js"></script>
<script type="text/javascript" src="<?=base_url();?>assets/widgets/uniform/uniform-demo.js"></script>    


<!-- ICONS -->

<link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/icons/fontawesome/fontawesome.css">
<link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/icons/linecons/linecons.css">
<link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/icons/spinnericon/spinnericon.css">
<link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/icons/iconic/iconic.css">
<link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/icons/elusive/elusive.css">
<link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/icons/meteocons/meteocons.css">
<link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/icons/typicons/typicons.css">
<link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/elements/images.css">
<link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/snippets/progress-box.css">
<link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/widgets/multi-upload/fileupload.css">
 
        <div class="content-box tabs">
            <h3 class="content-box-header bg-primary">
                <span>Module, Group & Role</span> 
                <ul>
                    <li>
                        <a href="#tabs-moduleProperties" title="Module Properties">
                            Module Properties
                        </a>
                    </li>
                    <li >
                        <a href="#tabs-roleProperties" title="Role Properties">
                            Role Properties
                        </a>
                    </li>
                    <li>
                        <a href="#tabs-groupProperties" title="Group Properties">
                            Group Properties
                        </a>
                    </li> 
                </ul>
            </h3>

<!--DIALOG ADD MODULES-->
			<div   class='hide' id='myDialogAdd' title="Add Record">  
			<form class="form-horizontal bordered-row" id="form_add_modules" data-parsley-validate="">
                <div class="row"> 
				 <div class="hide">
                            <label class="col-sm-3 control-label"> Application ID</label>
                            <div class="col-sm-6" size="40">
                                <input type="text"    id="appid1" placeholder="Application ID" required class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label"> Application Name</label>
                            <div class="col-sm-6" size="40">
                                <input type="text"    id="appname" placeholder="Application Name" required class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Controller</label>
                            <div class="col-sm-6">
                                <input id="controller" type="text"  placeholder="Controller" required class="form-control">
                            </div>
                        </div> 
					  <div class="hide">
											<label class="col-sm-3 control-label">Action</label>
											<div class="col-sm-6" size="40">
												<input type="text"    id="oper" placeholder="Oper" required class="form-control">
											</div>
										</div>						
                        <div class="form-group">
                             <div class="checkbox checkbox-primary" style="margin-left:200px">
                                    <label>
                                        <input type="checkbox" id="check_active"  name = "check_active" class="custom-checkbox" >
                                        <b>Active</b>
                                    </label>
                                </div>
                        </div> 
                </div> 
            </form> 
			</div>
<!--END DIALOG ADD MODULES


<!--DIALOG ADD MODULES------->
			<div   class='hide' id='myDialogAddGroup' title="Add Record Group">  
			<form class="form-horizontal bordered-row" id="form_add_modules" data-parsley-validate="">
                <div class="row"> 
				 <div class="form-group">
                            <label class="hide"> Application ID</label>
                            <div class="hide" size="40">
                                <input type="text"    id="id_group" placeholder="Application ID" required class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Name</label>
                            <div class="col-sm-6" size="40">
                                <input type="text"    id="group_name" placeholder="Group Name" required class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Description</label>
                            <div class="col-sm-6">
                                <input id="desc_group" type="text"  placeholder="Description Group" required class="form-control">
                            </div>
                        </div> 
					  <div class="hide">
											<label class="col-sm-3 control-label">Action</label>
											<div class="col-sm-6" size="40">
												<input type="text"    id="oper_group" placeholder="Oper" required class="form-control">
											</div>
					 </div>						
                        <div class="form-group">
                             <div class="checkbox checkbox-primary" style="margin-left:200px">
                                    <label>
                                        <input type="checkbox" id="check_active_gp"  name = "check_active_gp" class="custom-checkbox" >
                                        <b>Active</b>
                                    </label>
                                </div>
                        </div> 
						<div class="form-group">
							<label class="col-sm-3 control-label">Type</label>
							<div class="col-sm-6"  size="40">
								<select name="group_type" class="" id="group_type"></select>
							</div>
					</div>
					<div class="form-group"  size="40">
							<label class="col-sm-3 control-label">Parent Group</label>
							<div class="col-sm-6">
								<select name="parent_group" class="" id="parent_group"></select>
							</div>
					</div>
                </div> 
            </form> 
			</div>
<!--END DIALOG ADD MODULES-->


<!--DIALOG ADD ROLE MODULES------->
			<div   class='hide' id='myDialogAddRole' title="Add Record Role">  
			<form class="form-horizontal bordered-row" id="form_add_modules" data-parsley-validate="">
                <div class="row"> 
				 <div class="form-group">
                            <label class="hide"> Application ID</label>
                            <div class="hide" size="40">
                                <input type="text"    id="id_role" placeholder="Application ID" required class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Name</label>
                            <div class="col-sm-6" size="40">
                                <input type="text"    id="role_name" placeholder="Group Role" required class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Description</label>
                            <div class="col-sm-6">
                                <input id="desc_role" type="text"  placeholder="Description Role" required class="form-control">
                            </div>
                        </div> 
					  <div class="hide">
											<label class="col-sm-3 control-label">Action</label>
											<div class="col-sm-6" size="40">
												<input type="text"    id="oper_role" placeholder="Oper" required class="form-control">
											</div>
					 </div>						
                        <div class="form-group">
                             <div class="checkbox checkbox-primary" style="margin-left:200px">
                                    <label>
                                        <input  type="checkbox" id="check_active_role"  name = "check_active_role" class="custom-checkbox check_active_role" >
                                        <b>Active</b>
                                    </label>
                                </div>
                        </div> 
						  <div class="form-group">
                             <div class="checkbox checkbox-primary" style="margin-left:200px">
                                    <label>
                                        <input type="checkbox" id="check_parent_role"  name = "check_parent_role" class="custom-checkbox" >
                                        <b>Has Parent</b>
                                    </label>
                                </div>
                        </div>  
					<div class="form-group"  size="40">
							<label class="col-sm-3 control-label">Parent Role</label>
							<div class="col-sm-6">
								<select name="parent_role" class="" id="parent_role"></select>
							</div>
					</div>
                </div> 
            </form> 
			</div>
<!--END  DIALOG ADD ROLE MODULES-->


<!--DIALOG CONF.DELETE MODULES------->
			<div   class='hide' id='DialogDel' title="Delete Confirmation">  
			<form class="form-horizontal bordered-row" id="form_del_module" data-parsley-validate="">
                <div class="row"> 
                        <div class="form-group"  style="margin-left:20px">
						 <h3>Are You Sure You Want To Delete This  ?</h3>
						  <div class="hide size="20">
                                <input type="text"    id="appid" placeholder="Application Name" required class="form-control">
                            </div>
							 
                     </div>
					     </div>
						     </form>
				</div>
          
		 
<!--END DIALOG CONF.DELETE MODULES-->


<!--DIALOG CONF.DELETE MODULES GROUP------->
			<div   class='hide' id='DialogDelG' title="Delete Confirmation">  
			<form class="form-horizontal bordered-row" id="form_del_module_group" data-parsley-validate="">
                <div class="row"> 
                        <div class="form-group"  style="margin-left:20px">
						 <h3>Are You Sure You Want To Delete This  ?</h3>
						  <div class="hide size="20">
                                <input type="text"    id="appid_group" placeholder="Application Name" required class="form-control">
                            </div>
							 
                     </div>
					     </div>
						     </form>
				</div> 
<!--END DIALOG CONF.DELETE MODULES GROUP-->


<!--DIALOG CONF.DELETE ROLE GROUP------->
			<div   class='hide' id='DialogDelRole' title="Delete Confirmation">  
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
          
		 
<!--END DIALOG  .DELETE ROLE GROUP-->

<!--DIALOG ADD PRIVILEDGES------->
			<div   class='hide' id='myDialogAddPri' title="Add Privileges">  
			<form class="form-horizontal bordered-row" id="demo-form" data-parsley-validate="">
                <div class="row"> 
                        <div class="hide">
                            <label class="col-sm-3 control-label"> Module ID</label>
                            <div class="col-sm-6" size="40">
                                <input type="text"    id="mod_id" placeholder="Module ID" required class="form-control">
                            </div>
                        </div>
						  <div class="form-group">
                            <label class="col-sm-3 control-label"> Module Name</label>
                            <div class="col-sm-6" size="40">
                                <input type="text"    id="mod_name" placeholder="Module Name" required class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Parameter</label>
                            <div class="col-sm-6">
                                <input id="parameter" type="text"  placeholder="Parameter" required class="form-control">
                            </div>
                        </div>  
						  <div class="form-group">
                            <label class="col-sm-3 control-label">Label</label>
                            <div class="col-sm-6">
                                <input id="label_param" type="text"  placeholder="Label" required class="form-control">
                            </div>
                        </div>
					
						
							<div class="example-box-wrapper" align="center">
							  <!--  <a href="#" class="btn btn-xs btn-primary" title="">Extra small</a> -->
								<!--	<button class="btn btn-xs btn-danger" id="bt_delpop_priv"  data-style="light"  data-theme="bg-black" data-opacity="60">DEL Privileges</button> 
									&nbsp;&nbsp; -->
									<button class="btn btn-xs btn-success" id="bt_addpop_priv">ADD Privileges</button>
							</div>
						
						<div class="example-box-wrapper"> 
								<table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="table_modpri">
											<thead>
											<tr>
														<th>No</th>
														<th>LABEL</th>
														<th>VALUE</th> 
														<th>ACTIONS</th> 
											</tr>
											</thead>
											<tbody> 
										 
											</tbody>
								</table>
						</div>
                      
                </div> 
            </form> 
			</div>
<!--END DIALOG ADD PRIVILEDGES-->
			
			
<!--TABS MODULE PROPERTIES -->
       <div id="tabs-moduleProperties">
           <div class="panel">
				<div class="panel-body">
				<h3 class="title-hero">
				
					  <button class="btn btn-alt btn-hover btn-info" id="bt_add">
									<span>ADD MODULE</span>
									<i class="glyph-icon icon-arrow-right"></i>
						</button>  
				</h3>
				<div class="example-box-wrapper"> 
					<table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="datatable">
								<thead>
								<tr>
											<th>No</th>
											<th>ID</th>
											<th>NAME</th>
											<th>ACTIVE</th>
											<th>CONTROLLER</th>
											<th>ACTION</th>
								</tr>
								</thead>
								<tbody> 
							 
								</tbody>
					</table>
				</div>
				</div>
			</div>
           </div> 
<!--END TABS MODULE PROPERTIES -->

<!-- TABS ROLE PROPERTIES -->	
           <div id="tabs-roleProperties">
                <div class="panel">
				<div class="panel-body">
				<h3 class="title-hero"> 
					  <button class="btn btn-alt btn-hover btn-info" id="bt_add_role">
									<span>ADD ROLE</span>
									<i class="glyph-icon icon-arrow-right"></i>
						</button>  
				</h3>
				<div class="example-box-wrapper"> 
					<table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="datatable_role">
								<thead>
								<tr>
											<th>No</th>
											<th>ID</th>
											<th>NAME</th>
											<th>ACTIVE</th>
											<th>HAS PARENT</th>
											<th>PARENT ROLE</th>
											<th>ACTION</th>
								</tr>
								</thead>
								<tbody>  
								</tbody>
					</table>
				</div>
				</div>
			</div>
            </div> 
<!--END TABS ROLE PROPERTIES -->
			
<!-- TABS GROUP PROPERTIES -->	
           <div id="tabs-groupProperties"> 
			    <div class="panel">
				<div class="panel-body">
				<h3 class="title-hero">
				
					  <button class="btn btn-alt btn-hover btn-info" id="bt_add_group">
									<span>ADD GROUP</span>
									<i class="glyph-icon icon-arrow-right"></i>
						</button>  
				</h3>
				<div class="example-box-wrapper"> 
					<table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="datatable_group">
								<thead>
								<tr>
											<th>No</th>
											<th>ID</th>
											<th>NAME</th>
											<th>ACTIVE</th>
											<th>TYPE</th>
											<th>PARENT GROUP</th>
											<th>ACTION</th>
								</tr>
								</thead>
								<tbody> 
							 
								</tbody>
					</table>
				</div>
				</div>
			</div> 
            </div>  
			 <!--END TABS GROUP PROPERTIES -->
        </div>


 
   </div>
 

<!-- End of Content form -->

<!-- ADD PACKAGE JAVA SCRIPT -->
<script type="text/javascript">
  function add_fields() {
   var d = document.getElementById("add_package");
  
   d.innerHTML += "<h4>Package ...<br/><br/></h4><label>Basic</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <select >option>Option 1</option><option>Option 2</option><option>Option 3</option><option>Option 4</option></select><br/><br/> </h4><label>Alacarte</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <select >option>Option 1</option><option>Option 2</option><option>Option 3</option><option>Option 4</option></select>";
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

<!--GENERAL CODE  -->
	<script>
	  $(document).ready(function() {
			init();
					
		function init()
		{
			getData();
			getGroupType();
			getParentType();
			getDataGroup();
			getParentRole();
			getDataRole();
		//	getDepartement();
			//getPosition();
			// getBranch();
			//reset(); 
		} 

$("#bt_add").button().click(function() { 
		PopUpDialog(); 
		$("#oper").val('add');
  });
  
  
$("#bt_add").button().click(function() { 
		PopUpDialog(); 
		$("#oper").val('add');
		$("#appid1").val('');
		$("#appname").val('');
		$("#controller").val('');
		$("#uniform-check_active span").removeAttr('class'); 
  });
  
  $("#bt_add_group").button().click(function() { 
		PopUpDialogGroup(); 
		$("#uniform-check_active_gp span").removeAttr('class'); 
		$("#id_group").val('');//uniform-check_active_gp
		$("#group_name").val('');//uniform-check_active_gp
		$("#desc_group").val('');//uniform-check_active_gp
		$("#oper_group").val('add');//uniform-check_active_gp
  }); 
  
   $("#bt_add_role").button().click(function() { 
		PopUpDialogRole(); 
		$("#oper_role").val('add');
		$("#role_name").val('');
		$("#desc_role").val('');
		$("#check_active_role").val('');
		$("#parent_role").val(0);
		$("#uniform-check_active_role span").removeAttr('class'); 
		$("#uniform-check_parent_role span").removeAttr('class'); 

		 //check_active_role
  }); 
  
  $("#btn_search_username").button().click(function() {
		search();
		return false	
  });
  
   $('bt_grid_edit').button().click(function() {
   		PopUpDialog(); 
  });
   
   $('#bt_addpop_priv').button().click(function() {
	SaveAddPriv();
	return false	
  }); 
   
  
  <!--POP UP GROUP -->
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
								SaveAddModule(); 
				  }
				},
			  ],		
			modal: true,
			
		});		
       }
	   
	   
	    function PopUpDialogPriv() {
		 $("#myDialogAddPri").removeClass( "hide" );
		 $("#myDialogAddPri").dialog({
			height: 600,
			width:550, 
			modal: true,
		});		
       }
	   
	  function PopUpDelModule() {
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
							DelModule();
				  }
				},
			  ],		
			modal: true,
			
		});		
       }
	   
	   function PopUpDelPrivileges(col3) {
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
							del_privileges(col3);
				  }
				},
			  ],		
			modal: true,
			
		});		
       }
	   
	   function PopUpDelRole() {
		 $("#DialogDelRole").removeClass( "hide" );
		 $("#DialogDelRole") .css('overflow', 'hidden');//disable horizontal scroll bar
		 $("#DialogDelRole").dialog({
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
							DelRole();
				  }
				},
			  ],		
			modal: true,
			
		});		
       }
	   
	   function PopUpDelModuleGroup() {
		 $("#DialogDelG").removeClass( "hide" );
		 $("#DialogDelG") .css('overflow', 'hidden');//disable horizontal scroll bar
		 $("#DialogDelG").dialog({
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
	   
	   <!-- POP UP GROUP -->
	   function PopUpDialogGroup() {
		 $("#myDialogAddGroup").removeClass( "hide" );
		 $("#myDialogAddGroup") .css('overflow', 'hidden');//disable horizontal scroll bar
		 $("#myDialogAddGroup").dialog({
		 height:"auto",
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
								SaveAddGroup(); 
				  }
				},
			  ],		
			modal: true, 
		});		
       }
  <!--END POP UP GROUP -->
  
  
     <!-- POP UP ROLE -->
	   function PopUpDialogRole() {
		 $("#myDialogAddRole").removeClass( "hide" );
		 $("#myDialogAddRole") .css('overflow', 'hidden');//disable horizontal scroll bar
		 $("#myDialogAddRole").dialog({
		 height:"auto",
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
								SaveAddRole(); 
				  }
				},
			  ],		
			modal: true, 
		});		
       }
  <!--END POP UP GROUP -->
  
  
  <!--Edit Action -->
  $("#datatable").on('click', '.btnSelect', function() {
      // get the current row
      var currentRow = $(this).closest("tr");

      var col1 = currentRow.find("td:eq(0)").html(); // get current row 1st table cell TD value
      var col2 = currentRow.find("td:eq(1)").html(); // get current row 2nd table cell TD value
      var col3 = currentRow.find("td:eq(2)").html(); // get current row 3rd table cell  TD 
	  var col4 = currentRow.find("td:eq(3)").html(); // get current row 3rd table cell  TD value	
      var col5 = currentRow.find("td:eq(4)").html(); // get current row 3rd table cell  TD value
      var data = col1 + "\n" + col2 + "\n" + col3;
	    PopUpDialog(); 
		//console.log(col3);
		//	console.log(col2);
	  $("#appname").val(col3);
	  $("#controller").val(col5);
	   $("#appid1").val(col2);
	   $("#oper").val('edit');
	   
	   
	   if(col4 == 1){
		 $("#uniform-check_active span").attr('class','checked');     
		}else{
			   $("#uniform-check_active span").removeAttr('class'); 
		}
	  
    }); 
	  <!--End Edit Action---->
	  
 
	  
	  
	    <!--Add Priv Action -->
  $("#datatable").on('click', '.btnAddPri', function() {
      // get the current row
      var currentRow = $(this).closest("tr");

      var col1 = currentRow.find("td:eq(0)").html(); // get current row 1st table cell TD value
      var col2 = currentRow.find("td:eq(1)").html(); // get current row 2nd table cell TD value
      var col3 = currentRow.find("td:eq(2)").html(); // get current row 3rd table cell  TD 
	  var col4 = currentRow.find("td:eq(3)").html(); // get current row 3rd table cell  TD value	
      var col5 = currentRow.find("td:eq(4)").html(); // get current row 3rd table cell  TD value
      var data = col1 + "\n" + col2 + "\n" + col3
	    PopUpDialogPriv(); 
		
	  $("#mod_name").val(col3);
	  $('#mod_name').prop('readonly', true);
	  $("#mod_id").val(col2);
	  
	  $("#parameter").val('');
	  $("#label_param").val('');
	  //$("#controller").val(col5);
		getDataPriv(col2);
    }); 
	   <!--End AddPriv Action---->
	  
<!--Delete Action Action ----->
  $("#datatable").on('click', '.btnDel', function() {
			//alert('Delete');
			PopUpDelModule();
			var currentRow = $(this).closest("tr"); 
			var col1 = currentRow.find("td:eq(1)").html(); // get current row 1st table cell TD value 
			 $("#appid").val(col1); 
    }); 
	
	  $("#datatable_group").on('click', '.btnDelG', function() { 
			PopUpDelModuleGroup();
			var currentRow = $(this).closest("tr"); 
			var col1 = currentRow.find("td:eq(1)").html(); // get current row 1st table cell TD value 
			 $("#appid_group").val(col1); 
    });
	
	
	$("#table_modpri").on('click', '.btnDelModPri', function() { 
			//PopUpDelPrivileges();
			
			
			var currentRow = $(this).closest("tr"); 
			var col3 = currentRow.find("td:eq(3)").html(); // get current row 1st table cell TD value 
			//alert(col3);
			PopUpDelPrivileges(col3);
			// $("#appid_group").val(col1); 
    }); 
 <!--End Edit Action--->
 
 
   <!--Edit GROUP Action -->
  $("#datatable_group").on('click', '.btnSelectG', function() {
      // get the current row
      var currentRow = $(this).closest("tr"); 
      var col1 = currentRow.find("td:eq(0)").html(); // get current row 1st table cell TD value
      var col2 = currentRow.find("td:eq(1)").html(); // get current row 2nd table cell TD value
      var col3 = currentRow.find("td:eq(2)").html(); // get current row 3rd table cell  TD 
	  var col4 = currentRow.find("td:eq(3)").html(); // get current row 3rd table cell  TD value	
      var col5 = currentRow.find("td:eq(4)").html(); // get current row 3rd table cell  TD value
	  var col6 = currentRow.find("td:eq(5)").html(); // get current row 3rd table cell  TD value
	  var col7 = currentRow.find("td:eq(6)").html(); // get current row 3rd table cell  TD value
      var data = col1 + "\n" + col2 + "\n" + col3; 
//	console.log(col4);
	  $("#id_group").val(col2);
	  $("#group_name").val(col3);
	   $("#desc_group").val(col5);
	   $("#oper_group").val('edit');
	//   $("#check_active_gp").prop('checked', true);
	   $("#group_type").val(col7);
	   $("#parent_group").val(col6);
	   
	    if(col4 == 1){
		 $("#uniform-check_active_gp span").attr('class','checked');     
		}else{
			   $("#uniform-check_active_gp span").removeAttr('class'); 
		}
	   PopUpDialogGroup(); 	  
    }); 
	  <!--End GROUP Action---->
	  
	  
	     <!--Edit GROUP Action -->
  $("#datatable_role").on('click', '.btnSelectR', function() {
      // get the current row
      var currentRow = $(this).closest("tr"); 
      var col1 = currentRow.find("td:eq(0)").html(); // get current row 1st table cell TD value
      var col2 = currentRow.find("td:eq(1)").html(); // get current row 2nd table cell TD value
      var col3 = currentRow.find("td:eq(2)").html(); // get current row 3rd table cell  TD 
	  var col4 = currentRow.find("td:eq(3)").html(); // get current row 3rd table cell  TD value	
      var col5 = currentRow.find("td:eq(4)").html(); // get current row 3rd table cell  TD value
	  var col6 = currentRow.find("td:eq(5)").html(); // get current row 3rd table cell  TD value
	  var col7 = currentRow.find("td:eq(6)").html(); // get current row 3rd table cell  TD value
      var data = col1 + "\n" + col2 + "\n" + col3; 
		//console.log(col4);
	  $("#id_role").val(col2);
	  $("#role_name").val(col3);
	  $("#check_parent_role").val(col3);
	  $("#desc_role").val(col7);
	  $("#oper_role").val('update');
	
	if(col4 == 1){
		 $("#uniform-check_active_role span").attr('class','checked');     
	}else{
		   $("#uniform-check_active_role span").removeAttr('class'); 
	}
	
	if(col5 == 1){
		 $("#uniform-check_parent_role span").attr('class','checked');     
	}else{
		 $("#uniform-check_parent_role span").removeAttr('class'); 
	}
	 
	 
	    //$('#check_active_role').is(':checked');
		//$('.check_active_role').is(":checked");
		//	$('.check_active_role').is(":checked");
		//$(":checkbox").check();
		
		/*     $("#bt_getchek").button().click(function() {
            var statuscheck =$("#uniform-check_active_role span").attr('class');
            console.log(statuscheck);
            if (statuscheck==undefined) {
            $("#uniform-check_active_role span").attr('class','checked');               
            } else {
            $("#uniform-check_active_role span").removeAttr('class');
            }
        }); */    
	   PopUpDialogRole(); 	  
    }); 
	  <!--End GROUP Action---->
	  
	    $("#datatable_role").on('click', '.btnDelR', function() {
			//alert('Delete');
			PopUpDelRole();
			var currentRow = $(this).closest("tr"); 
			var col1 = currentRow.find("td:eq(1)").html(); // get current row 1st table cell TD value 
			 $("#appid_role").val(col1); 
    }); 
	  
	  
 
 
		function getParentType()
		{            
			  $.ajax({ 
				 type: 'POST', 
				url:'<?=base_url();?>user_management/App_module/combo_group',
				data: '',
				dataType: 'json', 
				async: false,
				 success: function(result) {
						  $("#parent_group").html(result.html); 	
						  return false;                                           
				 },
					  error: function(x) { 
					  }
			  });
		}
		
		function getGroupType()
		{            
			  $.ajax({ 
				 type: 'POST', 
				url:'<?=base_url();?>user_management/App_module/combo_type',
				data: '',
				dataType: 'json', 
				async: false,
				 success: function(result) {
						  $("#group_type").html(result.html); 	
						  return false;                                           
				 },
					  error: function(x) { 
					  }
			  });
		}
		
		function getParentRole()
		{            
			  $.ajax({ 
				 type: 'POST', 
				url:'<?=base_url();?>user_management/App_module/combo_parent',
				data: '',
				dataType: 'json', 
				async: false,
				 success: function(result) {
						  $("#parent_role").html(result.html); 	
						  return false;                                           
				 },
					  error: function(x) { 
					  }
			  });
		}
 
	function getData(){ //datatable_group
		var jparams = "";	
		$.ajax({
			 type     : 'POST',
			 url      :'<?=base_url();?>user_management/App_module/getData',
			 data     : jparams,
			 dataType : 'json',
			success  : function(result){
					if (result.status==1){
						  var xhtm="";
						  var tot = 0;
						  $.each(result.data, function(i,item){
							tot = tot+1;
							xhtm += "<tr>";
								xhtm += "<td>"+tot; 
								xhtm += "<td>"+item.MODULE_ID ;
								xhtm += "<td>"+item.MODULE_NAME ;
								xhtm += "<td>"+item.IS_ACTIVE ;
								xhtm += "<td>"+item.CONTROLLER ;
								xhtm += "<td class ='hide'>"+item.MODULE_ID;	
								xhtm += "<td>" ;
								xhtm += '<button class="btnSelect" id="btnSelect">EDIT</button>&nbsp;&nbsp;';
								xhtm += '<button class="btnDel" id="btnDel">DELETE</button>&nbsp;&nbsp;&nbsp;&nbsp;';
								xhtm += '<button class="btnAddPri" id="btnAddPri">ADD PRIV</button>';
							xhtm += "</tr>";
						  });
						  //alert(tot);
							$('#datatable tbody').html(xhtm);						
							$('#datatable').dataTable({
								"bPaginate" : true,
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
		
		
		function getDataGroup(){ //datatable_group
			var jparams = "";	
			$.ajax({
				 type     : 'POST',
				 url      :'<?=base_url();?>user_management/App_module/getDataGroup',
				 data     : jparams,
				 dataType : 'json',
				success  : function(result){
						if (result.status==1){
							  var xhtm="";
							  var tot = 0;
							  $.each(result.data, function(i,item){
								tot = tot+1;
								xhtm += "<tr>";
									xhtm += "<td>"+tot; 
									xhtm += "<td>"+item.id ;
									xhtm += "<td>"+item.group_name ;
									xhtm += "<td>"+item.status ;
									xhtm += "<td class ='hide'>"+item.description ;
									xhtm += "<td>"+item.type ;
									xhtm += "<td>"+item.type ;
									xhtm += "<td>" ;
									xhtm += '<button class="btnSelectG" id="btnSelectG">EDIT</button>&nbsp;&nbsp;';
									xhtm += '<button class="btnDelG" id="btnDelG">DELETE</button>&nbsp;&nbsp;&nbsp;&nbsp;'; 
									xhtm += '<input  type="hidden" id="moduleid'+i+'" value="'+item.id+'"/>';
								xhtm += "</tr>";
							  });
							  //alert(tot);
								$('#datatable_group tbody').html(xhtm);						
								$('#datatable_group').dataTable({
									"bPaginate" : true,
									"bSort" : true,
									"bInfo" : false,
									"bFilter" : false,
									"bDestroy": true
								});	

							  return false; 
						   }else if(result.status==0){
							  $('#datatable_group tbody').html("<center><strong>Data tidak ditemukan</strong></center>");
							  return false; 
						   }			
						}
					});
		}
		
		function getDataRole(){ //datatable_group
			var jparams = "";	
			$.ajax({
				 type     : 'POST',
				 url      :'<?=base_url();?>user_management/App_module/getDataRole',
				 data     : jparams,
				 dataType : 'json',
				success  : function(result){
						if (result.status==1){
							  var xhtm="";
							  var tot = 0;
							  $.each(result.data, function(i,item){
								tot = tot+1;
								xhtm += "<tr>";
									xhtm += "<td>"+tot; 
									xhtm += "<td>"+item.ID ;
									xhtm += "<td>"+item.NAME ;
									xhtm += "<td>"+item.STATUS ;
								    xhtm += "<td>"+item.HAS_PARENT_ROLE ;
									xhtm += "<td>"+item.PARENT_ROLE ;			
									xhtm += "<td class ='hide'>"+item.DESCRIPTION;											
									xhtm += "<td>" ;
									xhtm += '<button class="btnSelectR" id="btnSelectR">EDIT</button>&nbsp;&nbsp;';
									xhtm += '<button class="btnDelR" id="btnDelR">DELETE</button>&nbsp;&nbsp;&nbsp;&nbsp;';  
								xhtm += "</tr>";
							  });
							  //alert(tot);
								$('#datatable_role tbody').html(xhtm);						
								$('#datatable_role').dataTable({
									"bPaginate" : true,
									"bSort" : true,
									"bInfo" : false,
									"bFilter" : false,
									"bDestroy": true
								});	

							  return false; 
						   }else if(result.status==0){
							  $('#datatable_role tbody').html("<center><strong>Data tidak ditemukan</strong></center>");
							  return false; 
						   }			
						}
					});
		}
		
	function getDataPriv(col2){ 
//		var jparams = '';	
		var jparams = "col2="+col2; 
		$.ajax({
			 type     : 'POST',
			 url      :'<?=base_url();?>user_management/App_module/privileges',
			 data     : jparams,
			 dataType : 'json',
			success  : function(result){ 	

		
					if (result.status==1){
						  var xhtm="";
						  var tot = 0;
						  $.each(result.data, function(i,item){
							tot = tot+1;
							xhtm += "<tr>";
							xhtm += "<td>"+tot; 
							xhtm += "<td>"+item.LABEL ;
							xhtm += "<td>"+item.PRV_DYN_PARAMS2 ; 
							xhtm += "<td class = 'hide'>"+item.ID ; 
							xhtm += "<td class = 'hide'>"+item.MODULE_ID ; 
							xhtm += "<td>" ; 
							xhtm += '<button class="btnDelModPri" id="btnDelModPri">DELETE</button>&nbsp;&nbsp;&nbsp;&nbsp;';  
							xhtm += "</tr>";
						  });
						  //alert(tot);
							$('#table_modpri tbody').html(xhtm);						
							$('#table_modpri').dataTable({
								"bPaginate" : true,
								"bSort" : true,
								"bInfo" : false,
								"bFilter" : false,
								"bDestroy": true
							});	

						  return false; 
					   }else if(result.rows.length == ''){
						  $('#table_modpri tbody').html("<center><strong>Data tidak ditemukan</strong></center>");
						  return false; 
					   } 			
					}
				});
		}
		
		 
		
		
		function SaveAddPriv(){
			 
			 var mod_name 			= $("#mod_name").val(); 
			 var mod_id 				= $("#mod_id").val();
			 var parameter 			= $("#parameter").val(); 
			 var label 					= $("#label_param").val(); 
			//  var module_id 	= $("#appid1").val(); 
			  if(mod_name==''){
					alert('Please check ModuleName');
					 return false;      
			  }
			  
			  if(parameter==''){
					alert('Please check parameter');
					 return false;      
			  }	

			if(label==''){
					alert('Please check Label');
					 return false;      
			  }	 			  
			
				 var jparams = "mod_id="+mod_id+"&parameter="+parameter+"&label="+label; 
						$.ajax({
								  type		: 'POST',
								  url:'<?=base_url();?>user_management/app_module/add_privileges',
								//  url:'<?=base_url();?>user_management/create_user/'+url,
								  data		: jparams,
								  dataType	: 'json',
								  success	:function(result){
								 /*  console.log(result);
									console.log(result.success);
									console.log(result.errors.reason); */
								  if (result.success==true){
									alert(result.errors.reason);
										//getData(); 
										 getDataPriv(mod_id);
								  }else{
									 alert('ERROR : ' + result.errors.reason);
										
								 }
								}	
						   });  
		}
		
		
		function SaveAddModule(){
			 
			 var appname 		= $("#appname").val();
			 var controller 		= $("#controller").val(); 
			 var oper 			= $("#oper").val(); 
			  var module_id 	= $("#appid1").val(); 
				  if(appname==''){
						alert('Please check AppName');
						 return false;      
				  }
				  
				  if(controller==''){
						alert('Please check ControllerName');
						 return false;      
				  }	

					if($("#check_active").is(':checked') ){
						var check_active = 1;	
					 }else{
						var check_active = 0;
					 }  

					 var jparams = "appname="+appname+"&controller="+controller+"&check_active="+check_active+"&oper="+oper+"&module_id="+module_id;
						//console.log(jparams);
			
							$.ajax({
									  type		: 'POST',
									  url:'<?=base_url();?>user_management/app_module/save',
									//  url:'<?=base_url();?>user_management/create_user/'+url,
									  data		: jparams,
									  dataType	: 'json',
									  success	:function(result){
									 // console.log(result.status);
									  if (result.status==0){
									  alert('Error');
									  }else{
										$("#myDialogAdd").dialog( "close" );
									 	getData(); 
									// init();
										 alert('Save Success');
										
									 }
									}	
							   });  
		}
		
		function SaveAddRole(){
			 
			 var idrole				= $("#id_role").val();
			 var role_name 		= $("#role_name").val(); 
			 var desc_role 		= $("#desc_role").val(); 
			 var oper_role 		= $("#oper_role").val(); 
			 var check_active_role 	= $("#check_active_role").val(); 
			 var check_parent_role 	= $("#check_parent_role").val(); 
			 var parent_role 			= $("#parent_role").val(); 
			 
				  if(role_name==''){
						alert('Please check RoleName');
						 return false;      
				  }
				  
				  if(desc_role==''){
						alert('Please check DescriptionRole');
						 return false;      
				  }	

				if($("#check_active_role").is(':checked') ){
					var check_active_role = 1;	
				 }else{
					var check_active_role = 0;
				 }  
				 
				 if($("#check_parent_role").is(':checked') ){
					var check_parent_role = 1;	
				 }else{
					var check_parent_role = 0;
				 }  
 
				var jparams = "idrole="+idrole+"&role_name="+role_name+"&desc_role="+desc_role+"&oper_role="+oper_role+"&check_active_role="+check_active_role+"&check_parent_role="+check_parent_role+"&parent_role="+parent_role; 
					$.ajax({
							  type		: 'POST',
							  url:'<?=base_url();?>user_management/app_module/add_role', 
							  data		: jparams,
							  dataType	: 'json',
							  success	:function(result){
								  //console.log(result.status);
								  if (result.success==true){
									alert(result.errors.reason);
									 	$( "#myDialogAddRole").dialog( "close" );//getDataRole
										getDataRole(); 
										
								  }else{
									 alert('ERROR : ' + result.errors.reason);
										
								 }
								  /* if (result.status==0){
								  alert('Error');
								  }else{
									 alert('Save Success');
											getData(); 
								 } */
							}	
					   });  
		}
		
		
	function SaveAddGroup(){ 
	
			 var group_id 				= $("#id_group").val();
			 var group_name 		= $("#group_name").val(); 
			 var desc_group 			= $("#desc_group").val(); 
			 var oper_group			= $("#oper_group").val(); 
			 var active_group 	= $("#check_active_gp").val(); 
			 var type_group 			= $("#group_type").val(); 
			 var parent_group 		= $("#parent_group").val(); 
									  
			  if(group_name==''){
					alert('Please check GroupName');
					 return false;      
			  }
			  
			  if(desc_group==''){
					alert('Please check Description');
					 return false;      
			  }	

				if($("#check_active_gp").is(':checked') ){
					var active_group = 1;	
				 }else{
					var active_group = 0;
				 }  

				 var jparams = "group_id="+group_id+"&group_name="+group_name+"&desc_group="+desc_group+"&oper_group="+oper_group+"&active_group="+active_group+"&type_group="+type_group+"&parent_group="+parent_group; 
				 
						$.ajax({
								  type		: 'POST',
								  url:'<?=base_url();?>user_management/App_module/add_group', 
								  data		: jparams,
								  dataType	: 'json',
								  success	:function(result){
								 // console.log(result.status);
								  
									  if (result.success==true){
										alert(result.errors.reason);
											$( "#myDialogAddGroup").dialog( "close" );
											getDataGroup(); 
									  }else{
										 alert('ERROR : ' + result.errors.reason);
											
									 }
						 
								}	
						   });  
		}

	function DelModule(){ 
			 var appid 		= $("#appid").val(); 
			//console.log(appid); 
			var jparams = "appid="+appid; 
					$.ajax({
							  type		: 'POST',
							  url:'<?=base_url();?>user_management/App_module/delete_mod', 
							  data		: jparams,
							  dataType	: 'json',
							  success	:function(result){
							 // console.log(result.status);
							  if (result.status==0){
							  alert('Error');
							  }else{
								 alert('Delete');
								 	$( "#DialogDel").dialog( "close" );
									init();
							 }
							}	
					   });  
		}
		
      function del_privileges(col3){ 
			// var appid 		= $("#appid").val(); 
			//console.log(appid); 
			var jparams = "id="+col3; 
					$.ajax({
							  type		: 'POST',
							  url:'<?=base_url();?>user_management/App_module/del_privileges', 
							  data		: jparams,
							  dataType	: 'json',
							  success	:function(result){
							  //console.log(result.status);
							  if (result.status==0){
							  alert('Error');
							  }else{
								
								  $( "#myDialogAddPri").dialog( "close" );
								  $( "#DialogDel").dialog( "close" ); 
								   alert('Delete Success'); 
							 }
							}	
					   });  
		}

	function DelGroup(){ 
			 var appid 		= $("#appid_group").val(); 
			//console.log(appid); 
			var jparams = "appid="+appid; 
					$.ajax({
							  type		: 'POST',
							  url:'<?=base_url();?>user_management/App_module/del_group', 
							  data		: jparams,
							  dataType	: 'json',
							  success	:function(result){ 
 							  if (result.status==0){
							  alert('Error');
							  }else{
								 alert('Delete Success');
								 	$( "#DialogDelG").dialog( "close" );
								 getDataGroup(); 
							 } 
							}	
					   });  
		}
		
		function DelRole(){ 
			 var appid 		= $("#appid_role").val(); 
			//console.log(appid); 
			var jparams = "appid="+appid; 
					$.ajax({
							  type		: 'POST',
							  url:'<?=base_url();?>user_management/App_module/del_role', 
							  data		: jparams,
							  dataType	: 'json',
							  success	:function(result){ 
 							  if (result.status==0){
							  alert('Error');
							  }else{
								 alert('Delete Success');
								$( "#DialogDelRole").dialog( "close" ); 
								 getDataRole(); 
							 } 
							}	
					   });  
		}
	});
	
</script>
<!--GENERAL CODE  -->

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
	
	
	  $(function() { "use strict";
        $('.tabs').tabs();
    });
	
	  /* Datatable row highlight */

    $(document).ready(function() {
      //  var table = $('#datatable').DataTable();

        $('#datatable tbody').on( 'click', 'tr', function () {
            $(this).toggleClass('tr-selected');
        } );
    });
	
	
	    $(document).ready(function() {
        $('.dataTables_filter input').attr("placeholder", "Search...");
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