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

<div id="page-title">
    <h2>ENTRY USER</h2>
    <p>Entry or Update User Valsys</p>
    <div id="theme-options" class="admin-options">
    <a href="javascript:void(0);" class="btn btn-primary theme-switcher tooltip-button" data-placement="left" title="Color schemes and layout options">
        <i class="glyph-icon icon-linecons-cog icon-spin"></i>
    </a>
    <div id="theme-switcher-wrapper">
        <div class="scroll-switcher">
            <h5 class="header">Layout options</h5>
            <ul class="reset-ul">
                <li>
                    <label for="boxed-layout">Boxed layout</label>
                    <input type="checkbox" data-toggletarget="boxed-layout" id="boxed-layout" class="input-switch-alt">
                </li>
                <li>
                    <label for="fixed-header">Fixed header</label>
                    <input type="checkbox" data-toggletarget="fixed-header" id="fixed-header" class="input-switch-alt">
                </li>
                <li>
                    <label for="fixed-sidebar">Fixed sidebar</label>
                    <input type="checkbox" data-toggletarget="fixed-sidebar" id="fixed-sidebar" class="input-switch-alt">
                </li>
                <li>
                    <label for="closed-sidebar">Closed sidebar</label>
                    <input type="checkbox" data-toggletarget="closed-sidebar" id="closed-sidebar" class="input-switch-alt">
                </li>
            </ul>
            <div class="boxed-bg-wrapper hide">
                <h5 class="header">
                    Boxed Page Background
                    <a class="set-background-style" data-header-bg="" title="Remove all styles" href="javascript:void(0);">Clear</a>
                </h5>
                <div class="theme-color-wrapper clearfix">
                    <h5>Patterns</h5>
                    <a class="tooltip-button set-background-style pattern-bg-3" data-header-bg="pattern-bg-3" title="Pattern 3" href="javascript:void(0);">Pattern 3</a>
                    <a class="tooltip-button set-background-style pattern-bg-4" data-header-bg="pattern-bg-4" title="Pattern 4" href="javascript:void(0);">Pattern 4</a>
                    <a class="tooltip-button set-background-style pattern-bg-5" data-header-bg="pattern-bg-5" title="Pattern 5" href="javascript:void(0);">Pattern 5</a>
                    <a class="tooltip-button set-background-style pattern-bg-6" data-header-bg="pattern-bg-6" title="Pattern 6" href="javascript:void(0);">Pattern 6</a>
                    <a class="tooltip-button set-background-style pattern-bg-7" data-header-bg="pattern-bg-7" title="Pattern 7" href="javascript:void(0);">Pattern 7</a>
                    <a class="tooltip-button set-background-style pattern-bg-8" data-header-bg="pattern-bg-8" title="Pattern 8" href="javascript:void(0);">Pattern 8</a>
                    <a class="tooltip-button set-background-style pattern-bg-9" data-header-bg="pattern-bg-9" title="Pattern 9" href="javascript:void(0);">Pattern 9</a>
                    <a class="tooltip-button set-background-style pattern-bg-10" data-header-bg="pattern-bg-10" title="Pattern 10" href="javascript:void(0);">Pattern 10</a>

                    <div class="clear"></div>

                    <h5 class="mrg15T">Solids &amp;Images</h5>
                    <a class="tooltip-button set-background-style bg-black" data-header-bg="bg-black" title="Black" href="javascript:void(0);">Black</a>
                    <a class="tooltip-button set-background-style bg-gray mrg10R" data-header-bg="bg-gray" title="Gray" href="javascript:void(0);">Gray</a>

                    <a class="tooltip-button set-background-style full-bg-1" data-header-bg="full-bg-1 fixed-bg" title="Image 1" href="javascript:void(0);">Image 1</a>
                    <a class="tooltip-button set-background-style full-bg-2" data-header-bg="full-bg-2 fixed-bg" title="Image 2" href="javascript:void(0);">Image 2</a>
                    <a class="tooltip-button set-background-style full-bg-3" data-header-bg="full-bg-3 fixed-bg" title="Image 3" href="javascript:void(0);">Image 3</a>
                    <a class="tooltip-button set-background-style full-bg-4" data-header-bg="full-bg-4 fixed-bg" title="Image 4" href="javascript:void(0);">Image 4</a>
                    <a class="tooltip-button set-background-style full-bg-5" data-header-bg="full-bg-5 fixed-bg" title="Image 5" href="javascript:void(0);">Image 5</a>
                    <a class="tooltip-button set-background-style full-bg-6" data-header-bg="full-bg-6 fixed-bg" title="Image 6" href="javascript:void(0);">Image 6</a>

                </div>
            </div>
            <h5 class="header">
                Header Style
                <a class="set-adminheader-style" data-header-bg="bg-gradient-9" title="Remove all styles" href="javascript:void(0);">Clear</a>
            </h5>
            <div class="theme-color-wrapper clearfix">
                <h5>Solids</h5>
                <a class="tooltip-button set-adminheader-style bg-primary" data-header-bg="bg-primary font-inverse" title="Primary" href="javascript:void(0);">Primary</a>
                <a class="tooltip-button set-adminheader-style bg-green" data-header-bg="bg-green font-inverse" title="Green" href="javascript:void(0);">Green</a>
                <a class="tooltip-button set-adminheader-style bg-red" data-header-bg="bg-red font-inverse" title="Red" href="javascript:void(0);">Red</a>
                <a class="tooltip-button set-adminheader-style bg-blue" data-header-bg="bg-blue font-inverse" title="Blue" href="javascript:void(0);">Blue</a>
                <a class="tooltip-button set-adminheader-style bg-warning" data-header-bg="bg-warning font-inverse" title="Warning" href="javascript:void(0);">Warning</a>
                <a class="tooltip-button set-adminheader-style bg-purple" data-header-bg="bg-purple font-inverse" title="Purple" href="javascript:void(0);">Purple</a>
                <a class="tooltip-button set-adminheader-style bg-black" data-header-bg="bg-black font-inverse" title="Black" href="javascript:void(0);">Black</a>

                <div class="clear"></div>

                <h5 class="mrg15T">Gradients</h5>
                <a class="tooltip-button set-adminheader-style bg-gradient-1" data-header-bg="bg-gradient-1 font-inverse" title="Gradient 1" href="javascript:void(0);">Gradient 1</a>
                <a class="tooltip-button set-adminheader-style bg-gradient-2" data-header-bg="bg-gradient-2 font-inverse" title="Gradient 2" href="javascript:void(0);">Gradient 2</a>
                <a class="tooltip-button set-adminheader-style bg-gradient-3" data-header-bg="bg-gradient-3 font-inverse" title="Gradient 3" href="javascript:void(0);">Gradient 3</a>
                <a class="tooltip-button set-adminheader-style bg-gradient-4" data-header-bg="bg-gradient-4 font-inverse" title="Gradient 4" href="javascript:void(0);">Gradient 4</a>
                <a class="tooltip-button set-adminheader-style bg-gradient-5" data-header-bg="bg-gradient-5 font-inverse" title="Gradient 5" href="javascript:void(0);">Gradient 5</a>
                <a class="tooltip-button set-adminheader-style bg-gradient-6" data-header-bg="bg-gradient-6 font-inverse" title="Gradient 6" href="javascript:void(0);">Gradient 6</a>
                <a class="tooltip-button set-adminheader-style bg-gradient-7" data-header-bg="bg-gradient-7 font-inverse" title="Gradient 7" href="javascript:void(0);">Gradient 7</a>
                <a class="tooltip-button set-adminheader-style bg-gradient-8" data-header-bg="bg-gradient-8 font-inverse" title="Gradient 8" href="javascript:void(0);">Gradient 8</a>
            </div>
            <h5 class="header">
                Sidebar Style
                <a class="set-sidebar-style" data-header-bg="" title="Remove all styles" href="javascript:void(0);">Clear</a>
            </h5>
            <div class="theme-color-wrapper clearfix">
                <h5>Solids</h5>
                <a class="tooltip-button set-sidebar-style bg-primary" data-header-bg="bg-primary font-inverse" title="Primary" href="javascript:void(0);">Primary</a>
                <a class="tooltip-button set-sidebar-style bg-green" data-header-bg="bg-green font-inverse" title="Green" href="javascript:void(0);">Green</a>
                <a class="tooltip-button set-sidebar-style bg-red" data-header-bg="bg-red font-inverse" title="Red" href="javascript:void(0);">Red</a>
                <a class="tooltip-button set-sidebar-style bg-blue" data-header-bg="bg-blue font-inverse" title="Blue" href="javascript:void(0);">Blue</a>
                <a class="tooltip-button set-sidebar-style bg-warning" data-header-bg="bg-warning font-inverse" title="Warning" href="javascript:void(0);">Warning</a>
                <a class="tooltip-button set-sidebar-style bg-purple" data-header-bg="bg-purple font-inverse" title="Purple" href="javascript:void(0);">Purple</a>
                <a class="tooltip-button set-sidebar-style bg-black" data-header-bg="bg-black font-inverse" title="Black" href="javascript:void(0);">Black</a>

                <div class="clear"></div>

                <h5 class="mrg15T">Gradients</h5>
                <a class="tooltip-button set-sidebar-style bg-gradient-1" data-header-bg="bg-gradient-1 font-inverse" title="Gradient 1" href="javascript:void(0);">Gradient 1</a>
                <a class="tooltip-button set-sidebar-style bg-gradient-2" data-header-bg="bg-gradient-2 font-inverse" title="Gradient 2" href="javascript:void(0);">Gradient 2</a>
                <a class="tooltip-button set-sidebar-style bg-gradient-3" data-header-bg="bg-gradient-3 font-inverse" title="Gradient 3" href="javascript:void(0);">Gradient 3</a>
                <a class="tooltip-button set-sidebar-style bg-gradient-4" data-header-bg="bg-gradient-4 font-inverse" title="Gradient 4" href="javascript:void(0);">Gradient 4</a>
                <a class="tooltip-button set-sidebar-style bg-gradient-5" data-header-bg="bg-gradient-5 font-inverse" title="Gradient 5" href="javascript:void(0);">Gradient 5</a>
                <a class="tooltip-button set-sidebar-style bg-gradient-6" data-header-bg="bg-gradient-6 font-inverse" title="Gradient 6" href="javascript:void(0);">Gradient 6</a>
                <a class="tooltip-button set-sidebar-style bg-gradient-7" data-header-bg="bg-gradient-7 font-inverse" title="Gradient 7" href="javascript:void(0);">Gradient 7</a>
                <a class="tooltip-button set-sidebar-style bg-gradient-8" data-header-bg="bg-gradient-8 font-inverse" title="Gradient 8" href="javascript:void(0);">Gradient 8</a>
            </div>
        </div>
    </div>
</div>
</div>

<div class="panel">
    <div class="panel-body">
        <h3 class="title-hero">
            Form validation
        </h3>
        <div class="example-box-wrapper">
            <form class="form-horizontal bordered-row" id="demo-form" data-parsley-validate="">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="col-sm-3 control-label"><label class="font-red">*</label> User Name</label>
                            <div class="col-sm-6">
                               <input  id ="name" type="text" data-parsley-minlength="2" placeholder="Username" required class="form-control">
                            </div>
							 
							 
							 <button class="glyph-icon demo-icon tooltip-button icon-elusive-search" id="btn_search_username"  style="margin-top:0px;padding-left:0px;" title="search username"  ></button>
							
                        </div>
						
						<!--<div class="example-box-wrapper">

								
							</div>-->
                        <div class="form-group">
                            <label class="col-sm-3 control-label"><label class="font-red">*</label> Full Name</label>
                            <div class="col-sm-6">
                                <input type="text"    id="fullname" placeholder="Full Name" required class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label"><label class="font-red">*</label> NIK</label>
                            <div class="col-sm-6">
                                <input id="nik" type="text"  placeholder="NIK" required class="form-control">
                            </div>
                        </div>
						    <div class="form-group">
                            <label class="col-sm-3 control-label"><label class="font-red">*</label> Password</label>
                            <div class="col-sm-6">
                                <input type="text" id="password" required class="form-control">
                            </div>
                        </div>
						
                        <div class="form-group">
                            <label class="col-sm-3 control-label"><label class="font-red">*</label> Confirm Password</label>
                            <div class="col-sm-6">
                                <input  id= "password2" type="text" data-parsley-equalto="#password" required class="form-control">
                            </div>
                        </div>
						
					<div class="form-group">
							<label class="col-sm-3 control-label"><label class="font-red">*</label> Status</label>
							<div class="col-sm-6">
								<select name="status" id="status" class="custom-select">
									  <option  value="1">Active</option>
									  <option  value="0">Inactive</option>
								</select>
							</div>
					</div>
					
					<div class="form-group">
							<label class="col-sm-3 control-label"><label class="font-red">*</label> Lock Status</label>
							<div class="col-sm-6">
								<select name="lock_status" id="lock_status" class="custom-select">
								  <option  value="0">Unlock</option>
								  <option  value="1">Lock</option>
								</select>
							</div>
					</div>
					    <div class="form-group">
                            <label class="col-sm-3 control-label">Email</label>
                            <div class="col-sm-6">
                                <input type="text" data-parsley-type="email" placeholder="Email address" required class="form-control" id="email">
                            </div>
                        </div>
					
						 
                    
                    </div>
                    <div class="col-md-6">
					
						
						  <div class="form-group">
                            <label for="" class="col-sm-4 control-label"><label class="font-red">*</label> Valid From</label>
                            <div class="col-sm-8">
                                <div class="input-prepend input-group">
                                    <span class="add-on input-group-addon">
                                        <i class="glyph-icon icon-calendar"></i>
                                    </span>
                                    <input type="text" class="bootstrap-datepicker form-control" value="02/16/12" data-date-format="mm/dd/yy" id="valid_from">
                                </div>
                            </div>
                        </div>
						
						<div class="form-group">
                            <label for="" class="col-sm-4 control-label"><label class="font-red">*</label> Valid To</label>
                            <div class="col-sm-8">
                                <div class="input-prepend input-group">
                                    <span class="add-on input-group-addon">
                                        <i class="glyph-icon icon-calendar"></i>
                                    </span>
                                    <input type="text" class="bootstrap-datepicker form-control" value="02/16/12" data-date-format="mm/dd/yy" id="valid_to">
                                </div>
                            </div>
                        </div>
					
						<div class="form-group">
							<label class="col-sm-3 control-label">Branch <label class="font-red">*</label></label>
							<div class="col-sm-6">                                
								<select class="custom-select"  id="branch" name="branch"></select>
							</div>
					</div>
					
						<div class="form-group">
							<label class="col-sm-3 control-label">Position</label>
							<div class="col-sm-6">
								<select name="position" class="custom-select" id="position"></select>
							</div>
					</div>
					
						<div class="form-group">
							<label class="col-sm-3 control-label"><label class="font-red">*</label> Departement</label>
							<div class="col-sm-6">
								<select name="dept" id="dept" class="custom-select"></select>
							</div>
					</div>
					 
						 
                    </div>
                </div>
				     <div class="example-box-wrapper" align="left">
							<button class="btn btn-danger" id="bt_cancel"  data-style="light"  data-theme="bg-black" data-opacity="60">Cancel</button>
							
						<!--	  <a href="#" class="btn btn-md btn-black overlay-button" data-style="light" data-theme="bg-black" data-opacity="60">
                        Black background overlay
                    </a>-->
							<button class="btn btn-success" id="bt_save">Save</button>
                </div>
				
			 
                <!--<div class="bg-default content-box text-center pad20A mrg25T">
                    <button class="btn btn-lg btn-primary">Validate form</button>
                </div> -->
            </form>
        </div>
    </div>
</div>
                    </div>

                

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
			getDepartement();
			getPosition();
			 getBranch();
			 reset(); 
		} 
		
		function getBranch()
		{            
			  $.ajax({ 
				 type: 'POST', 
				url:'<?=base_url();?>user_management/create_user/getBranch',
				data: '',
				dataType: 'json', 
				async: false,
				 success: function(result) {
						  $("#branch").html(result.html); 								
						  return false;                                           
				 },
					  error: function(x) { 
					  }
			  });
		}
		
		function getDepartement()
	   {            
		  $.ajax({ 
			 type: 'POST', 
			url:'<?=base_url();?>user_management/create_user/getDepartement',
			data: '',
			dataType: 'json', 
			async: false,
			 success: function(result) {
					  $("#dept").html(result.html); 	
					  return false;                                           
			 },
				  error: function(x) { 
				  }
		  });
	   }

		function getPosition()
		{            
			  $.ajax({ 
				 type: 'POST', 
				url:'<?=base_url();?>user_management/create_user/getPosition',
				data: '',
				dataType: 'json', 
				async: false,
				 success: function(result) {
						  $("#position").html(result.html); 	
						  return false;                                           
				 },
					  error: function(x) { 
					  }
			  });
		}
		
		
		$('form').submit(function(e) {
			e.preventDefault(); 
			
			 $("#bt_save").button().click(function() {
			 
			if( $("#bt_save").text()=='Update'){
				var url = 'update';			
			}else{
				var url = 'save';		
			} 
						 var fullname 		= $("#fullname").val();
						 var nik 				= $("#nik").val();
						 var password 	= $("#password").val();
						 var password2 = $("#password2").val();
						 
//var encrypt_pass  = md5(password);
						
					//	var md5_pass = $.md5(password);
						 var email 		  = $("#email").val();
						 var valid_from  = $("#valid_from").val();
						 var valid_to 	  = $("#valid_to").val();
						 var branch        = $("#branch").val();
						 var position      = $("#position").val();
						 var dept 		  = $("#dept").val();
						 var lock_status   = $("#lock_status").val();
						 var status			= $("#status").val();
						  var name			= $("#name").val();
						  
						   var position2      = $("#position option:selected").text();
						  
						  if(branch==0){
								alert('Please check Branch');
								 return false;      
						  }
						  
						  if(dept==0){
								alert('Please check Departement');
								 return false;      
						  }						  
						  				  

						 var jparams = "name="+name+"&fullname="+fullname+"&nik="+nik+"&password="+password +"&password2="+password2+"&email="+email+"&valid_from="+valid_from+"&valid_to="+valid_to+"&branch="+branch+"&position="+position+"&dept="+dept+"&lock_status="+lock_status+"&status="+status;
							//console.log(jparams);

							
							if(url=='save'){
								$.ajax({
										  type		: 'POST',
										  url:'<?=base_url();?>user_management/create_user/'+url,
										  data		: jparams,
										  dataType	: 'json',
										  success	:function(result){
										  console.log(result.status);
										  if (result.status==0){
										  alert('Error');
										  }else{
											 alert('Save Success');
											  reset();
											  
											     $.ajax({								
															type: "POST",
															url:'http://192.168.177.221/api-joget/v1/NewUserValsys',
															headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
															transformRequest: function(obj) {
																var str = [];
																for (var p in obj)
																	str.push(encodeURIComponent(p) + "=" + encodeURIComponent(obj[p]));
																return str.join("&");
															},
															data: {
																username : name,
																password : password,
																firstName : fullname,
																email : email,
																active :status,
																role : position2,
																employeeCode : nik
															},
																error: function(res) {
																	console.log(res);
																if(res.status == '0'){
																				alert(res.operation);
																}
															},
																success: function(res) {
																console.log(res)
															},
																dataType: "json"
														});
										   }
										}	
								   });  

								   }else{
								   
									$.ajax({
										  type		: 'POST',
										  url:'<?=base_url();?>user_management/create_user/'+url,
										  data		: jparams,
										  dataType	: 'json',
										  success	:function(result){
										  console.log(result.status);
										  if (result.status==0){
										  alert('Error');
										  }else{
											 alert('Update Success');
											  reset();
											  
														 $.ajax({								
																	type: "POST",
																	url:'http://192.168.177.221/api-joget/v1/UpdateUsersValsys',
																	headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
																	transformRequest: function(obj) {
																		var str = [];
																		for (var p in obj)
																			str.push(encodeURIComponent(p) + "=" + encodeURIComponent(obj[p]));
																		return str.join("&");
																	},
																	data: {
																		username : name,
																		password : password,
																		firstName : fullname,
																		email : email,
																		active :status,
																		role : position2,
																		employeeCode : nik
																	},
																		error: function(res) {
																			console.log(res);
																		if(res.status == '0'){
																						alert(res.operation);
																		}
																	},
																		success: function(res) {
																		console.log(res)
																	},
																		dataType: "json"
																});
												   }
												}	
										   });
	
								   
									}
								 
					 }); 
		  }); 
		
		$("#bt_cancel").button().click(function() {
				reset();
		
		  });
		  
		     $("#btn_search_username").button().click(function() {
				search();
			    return false;
		   });
		   
		   function search(){
				 var username			= $("#name").val();				 
				 var jparams 			= "username=" + username;
				
					$.ajax({
						  type		: 'POST',
						  url:'<?=base_url();?>user_management/create_user/getSearch',
						  data		: jparams,
						  dataType	: 'json',
						  success	:function(result){ 
								if(result != 0){
									 $("#fullname").val( result.USER_DESCR);	
									 $("#nik").val( result.NIK);
									 $("#email").val( result.EMAIL_ID);
									 $("#lock_status").val( result.IS_LOCKED);
									 $("#password").val( 'x9999999x');
									 $("#password2").val( 'x9999999x');		
									 $("#status").val( result.STATUS);
									 $("#dept").val( result.DEPARTEMENT);
									 $("#position").val( result.POSITION);
									 $("#branch").val( result.BRANCH);
									 $("#valid_from").val( result.VALID_FROM);
									 $("#valid_to").val( result.VALID_TO);
									 
									  $("#bt_save").text('Update');
								}else{
									 alert('Data Not Found');
									  reset();
									
								} 
						  }	
					});    
		  } 
				  
		
		  function reset(){
					$("#fullname").val('');
					$("#nik").val('');
					$("#password").val('');
					$("#password2").val('');
					$("#email").val('');
					$("#valid_from").val('');
					$("#valid_to").val('');
					$("#branch").val('');
					$("#position").val('');
					$("#dept").val('');
					$("#lock_status").val('');
					$("#status").val('');
					$("#name").val('');
					$("#bt_save").text('Save');
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