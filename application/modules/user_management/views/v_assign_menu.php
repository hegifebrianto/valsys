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
            Assign Menu
        </h3>
        <div class="example-box-wrapper">

	<table border=0  width='75%'>
	<tr>
	<td width='30%'>
	<h3>List Modules</h3>
	</td>
	<td  width='10%' >&nbsp;</td>
	<td  width='35%'><h3>List Menu</h3></td></tr>
	<tr>
	<td valign='top'  rowspan=2>
	<table id="table2"  class="table  table-bordered"    >
		<thead>
				<th>Modules</th>
		</thead>
		<tbody  >
			<tr>
				<td>No Data</th>
			</tr>	
		</tbody>
	</table>
	</td>
	<td>&nbsp;</td>
	<td valign='top'>
	 <div class="content-box"   style='width:300px' id='dragme'> 
	<div id="menu-list"  class="jstree-draggable" ></div>
	</div>

	</td>
	</tr>
	<tr>
	<td>&nbsp;</td>
	<td>
	NEW FOLDER <input id="folder" type="text"  placeholder="FOLDER" required class="form-control" width='50%'>
	<button class="btn btn-success" id="bt_add">Add Folder</button>
	<button class="btn btn-danger" id="bt_del"  data-style="light"  data-theme="bg-black" data-opacity="60">Remove Folder</button>
	</td>	
	</tr>
	</table>
 
 
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
  
 
 	
	function LoadModules() {
		var jparams = "";	
 		  $.ajax({
			 type     : 'POST',
			 url        : base_url+"user_management/assign_menu/list_modules",
			 data     : jparams,
			 dataType : 'json',
			 success  : function(result){
			
			if (result.status==1){
				  var xhtm="";
				  var tot = 0;
				  $.each(result.data, function(i,item){
					tot = tot+1;
                    xhtm += "<tr>";
                        xhtm += "<td>"+item.MODULE_NAME ;
						xhtm += '<input  type="hidden" id="moduleid'+i+'" value="'+item.MODULE_ID+'"/>';
					xhtm += "</tr>";
                  });
                  //alert(tot);
					$('#table2 tbody').html(xhtm);
					$("#table2 tbody tr").draggable({
						revert: true,
						cursor: "move",
						cursorAt: { top: -5, left: -5 },
						//connectToFancytree: true
					});		
				  return false; 
               }else if(result.status==0){
				  $('#table2 tbody').html("<center><strong>Data not found</strong></center>");
				  return false; 
               }
			   
			}
		  });	  
	}
	
		$('#table2').dataTable({
			"bPaginate" : false,
			"bProcessing": false,
			"bSort" : false,
			"bInfo" : false,
			"bFilter" : false,
			"bDestroy": true
		});	
					
			// ajax demo
			$('#menu-list')
			.jstree({
				'core' : {
					'data' : {
						"url" : base_url+"user_management/assign_menu/create_tree",
						"dataType" : "json" // needed only if you do not supply JSON headers
					},
					"animation" : 0,
		/* 			"check_callback" :  function (op, node, par, pos, more) {
							if ((op === "move_node" || op === "copy_node") && node.type && node.type == "root") {
								return false;
							}
							if((op === "move_node" || op === "copy_node") && more && more.core && !confirm('Are you sure ...')) {
							return false;
						  }
						  return true;
						},		 */	
				},
				"plugins" : ["themes", "html_data", "dnd"],
				"themes" : {
					"theme" : "default",
					"dots" : true,
					"icons" : true
				},		
		 
			})
			.droppable(
			{
				accept: function() { 
				return true; 
				},
				drop:  function(event, ui) {
				var dropelement = ui.draggable.find('input');	
				//console.log($(event.target).find('jstree-hovered').html()) ;
					 var hovered = $('#menu-list .jstree-hovered');
					 //console.log( hovered.attr('id'));
					  if (hovered.length) {
						  var idrole = hovered.attr('id');
						if (idrole.indexOf("-root") >= 0 || idrole.indexOf("-child") >=0  )   {
							idrole = idrole.replace("-root_anchor", "");
							idrole = idrole.replace("-child_anchor", "");
							//alert ('Role Id:'+idrole+' ; Module Id:'+ dropelement.val());
							if(move_grid_to_tree(idrole, dropelement.val() ) ){
								$('#menu-list').jstree(true).load_node('#');
								LoadModules() ;
							} 
							
							//console.log('Role Id:'+idrole);
						}	
					  } 
					  //else {
					//	alert('No element was hovered over when return was pressed');
					  //}	
				}
			});
	 
	LoadModules() ;

	
					
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
            if (!t.closest('#menu-list').length) {
                if (t.closest('#table2').length) {
					//console.log($(data.element).attr('id'));
					//console.log($(data.element).text());
					var idrole = $(data.element).attr('id');

					if (idrole.indexOf("-root") <0 && idrole.indexOf("-child") <0)   {
						idrole = idrole.replace("_anchor", "");
						//console.log(idrole);
						var rowdrop =  '<tr><td>'+$(data.element).text()+'</td></tr>';
						$(rowdrop).appendTo(t.closest('#table2'));
						if(move_tree_to_grid(idrole)){
							$('#menu-list').jstree(true).load_node('#');
							LoadModules() ;
						} 							
						
					}
                    // node data:
                    // if(data.data.jstree && data.data.origin) { console.log(data.data.origin.get_node(data.element); }
                }
            }
        });
	  
		
 		function move_tree_to_grid(m){
			var status =  $.ajax({
				async:false,
				url:base_url + 'user_management/assign_menu/remove_module',
				type:'POST',				
				data:'m=' + m,
				failure:function(response){}			
			});
			return status.success;
		}
	
 		function move_grid_to_tree(r,m){
			var status =  $.ajax({
				async:false,
				url:base_url + 'user_management/assign_menu/map_module',
				type:'POST',				
				data:'r='+r+'&m=' + m,
				failure:function(response){}			
			});
			return status.success;
		}	

 
		  

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
									$('#menu-list').jstree(true).load_node('#');								
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
							$('#menu-list').jstree(true).load_node('#');								
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
							$('#menu-list').jstree(true).load_node('#');									
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