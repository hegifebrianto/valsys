 <script>
        $(function () {
            $('#sidebar-menu').slimScroll({
                height:'600px'
            });
            // body...
        });
        $(function () {
            $('#page-content').slimScroll({
                height:'600px'
            });
            // body...
        });
        </script>
        <div id="page-sidebar" class="bg-gradient-71 font-inverse" style="width: 250px;">
    <div class="scroll-sidebar">
    <!-- <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 100%;">
    <div class="scroll-sidebar" style="height: 100%; overflow: hidden; width: auto;"> -->

        

    <ul id="sidebar-menu">
 
    <li class="header"><span>Overview</span></li>
    <li>
        <a href="<?=base_url()?>" title="Admin Dashboard">
            <i class="glyph-icon icon-linecons-tv"></i>
            <span>Dashboard</span>
        </a>
    </li>
    <li class="divider"></li>
	
    <li class="header"><span>Components</span></li>
    <li>
        <a href="<?=base_url()?>entryp/entryp" title="Elements">
            <i class="glyph-icon icon-linecons-diamond"></i>
            <span>MASTER DATA</span>
        </a>
        <div class="sidebar-submenu">

            <ul>
                <li><a href="<?=base_url()?>entryp/entryp" title="Chart boxes"><span>Province</span></a></li>
                <li><a href="tile-boxes.html" title="Tile boxes"><span>City</span></a></li>
                <li><a href="social-boxes.html" title="Social boxes"><span>District</span></a></li>
                <li><a href="panel-boxes.html" title="Panel boxes"><span>Sub-District</span></a></li>
            </ul>
        </div>
    </li>
	
    <li>
        <a href="<?=base_url()?>entryp/entryp" title="Elements">
            <i class="glyph-icon icon-linecons-diamond"></i>
            <span>ENTRY PROSPECT</span>
        </a>
        <div class="sidebar-submenu">

            <ul>
                <li><a href="<?=base_url()?>entryp/entryp" title="Chart boxes"><span>Entry Prospect</span></a></li>

                <!-- <li><a href="<?=base_url()?>entryp/entryp/modern_storee" title="Tile boxes"><span>Modern Store</span></a></li>
                <li><a href="<?=base_url()?>entryp/entryp/cc" title="Panel boxes"><span>Credit Card</span></a></li>
               <li><a href="<?=base_url()?>entryp/entryp/dtd_bb" title="Panel boxes"><span>Door to Door-Bawa Barang</span></a></li>
                <li><a href="<?=base_url()?>entryp/entryp/dealer" title="Panel boxes"><span>Dealer</span></a></li>
                <li><a href="<?=base_url()?>entryp/entryp/dealer_franchise" title="Panel boxes"><span>Dealer Franchise</span></a></li> -->
                <li><a href="<?=base_url()?>entryp/entryp/reg_admin" title="Tile boxes"><span>ADMIN</span></a></li>
                 <!--  <li><a href="<?=base_url()?>entryp/entryp/getData" title="Tile boxes"><span>MS ADMIN</span></a></li>
                <li><a href="" title="Panel boxes"><span>CC ADMIN</span></a></li>
                <li><a href="" title="Panel boxes"><span>Dealer ADMIN</span></a></li>
                <li><a href="" title="Panel boxes"><span>DF ADMIN</span></a></li>
                <li><a href="" title="Panel boxes"><span>DTD ADMIN</span></a></li> -->
                <li><a href="<?=base_url()?>entryp/entryp/reg_kacab" title="Tile boxes"><span>KACAB</span></a></li>
                 <!--  <li><a href="<?=base_url()?>entryp/entryp/getData" title="Tile boxes"><span>MS ADMIN</span></a></li>
                <li><a href="" title="Panel boxes"><span>CC ADMIN</span></a></li>
                <li><a href="" title="Panel boxes"><span>Dealer ADMIN</span></a></li>
                <li><a href="" title="Panel boxes"><span>DF ADMIN</span></a></li>
                <li><a href="" title="Panel boxes"><span>DTD ADMIN</span></a></li> -->
                <li><a href="<?=base_url()?>entryp/entryp/reg_dth" title="Tile boxes"><span>DTH</span></a></li>
                <li><a href="<?=base_url()?>entryp/entryp/app_tl" title="Tile boxes"><span>Approval TL</span></a></li>
                 <!-- <li><a href="<?=base_url()?>entryp/entryp/history" title="Tile boxes"><span>Historical Process</span></a></li> -->
                  <!-- <li><a href="" title="Tile boxes"><span>MS DTH</span></a></li>
                <li><a href="" title="Panel boxes"><span>CC DTH</span></a></li>
                <li><a href="" title="Panel boxes"><span>Dealer DTH</span></a></li>
                <li><a href="" title="Panel boxes"><span>DF DTH</span></a></li>
                <li><a href="" title="Panel boxes"><span>DTD DTH</span></a></li> -->
                 
                <!-- <li><a href="<?=base_url()?>entryp/entryp/dtd_ru" title="Tile boxes"><span>--</span></a></li>
                <li><a href="<?=base_url()?>entryp/entryp/getData" title="Social boxes"><span>REG</span></a></li> -->
            </ul>

        </div>
        
    </li>
    
    
    
    
    <li class="header"><span>User Management</span></li>
    <li>
       <a href="<?=base_url()?>user_management/create_user" title="Create User">
            <i class="glyph-icon icon-linecons-fire"></i>
            <span>CREATE USER</span>
            <span class="bs-label badge-yellow">NEW</span>
        </a>
 
    </li>
      <li>
       <a href="<?=base_url()?>user_management/app_module" title="App Module">
            <i class="glyph-icon icon-linecons-fire"></i>
            <span>APP MODULE </span>
            <span class="bs-label badge-yellow">NEW</span>
        </a>
 
    </li>
	  <li>
       <a href="<?=base_url()?>user_management/Assign_menu" title="Assign Menu">
            <i class="glyph-icon icon-linecons-fire"></i>
            <span>ASSIGN MENU </span> 
        </a>
    </li>
	  <li>
       <a href="<?=base_url()?>user_management/groupconfig" title="Group Configuration">
            <i class="glyph-icon icon-linecons-fire"></i>
            <span>GROUP CONFIGURATION</span>
            
        </a>
 
    </li>
	  <li>
       <a href="<?=base_url()?>user_management/userconfig_group" title="Group Configuration">
            <i class="glyph-icon icon-linecons-fire"></i>
            <span>USER CONFIG GROUP</span>
            
        </a>
 
    </li>
 
 
 <div id='sidebar_menu' ></div>
 

    </ul><!-- #sidebar-menu -->


    </div>
</div>

<script>
   var base_url = '<?=base_url()?>';
	function LoadMenu() {
		var jparams = "";	
 		  $.ajax({
			 type     : 'POST',
			 url        : base_url+"panel/panel/list_menu",
			 data     : jparams,
			 dataType : 'json',
			 success  : function(result){
				  var xhtm="";
				  var tot = 0;
				  $.each(result, function(i,item){
					tot = tot+1;
					if (item.LEVEL_MENU == 1) {
						xhtm += "<li class='header'><span>"+item.MENU_NAME +"</span></li>";
						if (item.HAS_CHILDREN==1) {
							$.each(item.CHILDREN, function(x,child){
								//console.log(child.CONTROLLER);
								xhtm += "<li><a href='<?=base_url()?>"+child.CONTROLLER+"' title='"+child.MENU_NAME+"'><i class='glyph-icon icon-linecons-fire'></i><span>"+child.MENU_NAME+"</span> </a></li>";
							}); 	
						}
					} else {
						xhtm += "<li><a href='#' title='Elements'><i class='glyph-icon icon-linecons-diamond'></i><span>"+item.MENU_NAME +"</span></a> ";
						if (item.HAS_CHILDREN==1) {
							xhtm +=" <div class='sidebar-submenu'><ul>"
							$.each(item.CHILDREN, function(x,child){
								//console.log(child.CONTROLLER);
								xhtm += "<li><a href='<?=base_url()?>"+child.CONTROLLER+"' title='"+child.MENU_NAME+"'><span>"+child.MENU_NAME+"</span></a></li>";
							}); 	
							xhtm +=" </div></ul>"
						}						
						xhtm +=" </li>"
					}
					
                  }); 
                  //alert(tot);
				  
				  
				  if (xhtm!="") {
					 $("#sidebar-menu").html(xhtm);
				  } 
				  return false; 
			   
			}
		  });	  
	}
	LoadMenu();
	
</script>	