 <?=$head?>
 <?=$side_menu?>
<script>
    function alertWithoutNotice(message){
    setTimeout(function(){
        alert(message);
    }, 1000);
}
    </script>
    
   <script>
   (function (global) { 

    if(typeof (global) === "undefined") {
        throw new Error("window is undefined");
    }

    var _hash = "!";
    var noBackPlease = function () {
        global.location.href += "#";

        // making sure we have the fruit available for juice (^__^)
        global.setTimeout(function () {
            global.location.href += "!";
        }, 50);
    };

    global.onhashchange = function () {
        if (global.location.hash !== _hash) {
            global.location.hash = _hash;
        }
    };

    global.onload = function () {            
        noBackPlease();

        // disables backspace on page except on input fields and textarea..
        document.body.onkeydown = function (e) {
            var elm = e.target.nodeName.toLowerCase();
            if (e.which === 8 && (elm !== 'input' && elm  !== 'textarea')) {
                e.preventDefault();
            }
            // stopping event bubbling up the DOM tree..
            e.stopPropagation();
        };          
    }

})(window);
   </script>
   <?php
$page = $_SERVER['PHP_SELF'];
$sec = "20";
?>
<html>
<head>
    <meta http-equiv="refresh" content="<?php echo $sec?>;URL='<?php echo $page?>'">
</head>
<body>
    <?php
    echo "refresh";
    ?>
</body>
</html>
 <div id="page-content-wrapper">
    

            <div id="page-content">
                
                    <div class="container">
                    

<!-- Data tables -->

<link rel="stylesheet" type="text/css" href="../../assets/widgets/datatable/datatable.css">
<script src="<?=base_url();?>assets/widgets/ang/angular.min.js"></script>
<script type="text/javascript" src="../../assets/widgets/datatable/datatable.js"></script>
<script type="text/javascript" src="../../assets/widgets/datatable/datatable-bootstrap.js"></script>
<script type="text/javascript" src="../../assets/widgets/datatable/datatable-tabletools.js"></script>
<script type="text/javascript" src="../../assets/widgets/datatable/datatable-reorder.js"></script>

<script type="text/javascript" src="<?=base_url();?>assets/widgets/parsley/parsley.js"></script>
            <!-- JS DROPDOWN -->
            
            <script src="<?=base_url();?>assets/widgets/ang/angular.min.js"></script>
            <!-- ICONS -->
            <link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/bootstrap/css/jquery-ui.css">

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
            <!-- Image hover file upload -->
          
            <link rel="stylesheet" href="<?=base_url();?>assets/select2-master/dist/css/select2.min.css"/>
            <script src="<?=base_url();?>assets/bootstrap/js/jquery-ui.min.js"></script>
            <script src="<?=base_url();?>assets/bootstrap/js/jquery-ui.js"></script>
            

            <!-- combo-check -->
            <script src="<?=base_url();?>assets/widgets/modernizr/modernizr.min.js"></script>
            <script src="<?=base_url();?>assets/widgets/infragistics/infragistics.core.js"></script>
            <script src="<?=base_url();?>assets/widgets/infragistics/infragistics.lob.js"></script>



<script type="text/javascript">

    /* Datatables export */

   /* $(document).ready(function() {
        var table = $('#datatable-tabletools').DataTable();
        var tt1 = new $.fn.dataTable.TableTools( table );

        $( tt1.fnContainer() ).insertBefore('#datatable-tabletools_wrapper div.dataTables_filter');

        $('.DTTT_container').addClass('btn-group');
        $('.DTTT_container a').addClass('btn btn-default btn-md');

        $('.dataTables_filter input').attr("placeholder", "Search...");

    } );
    $(document).ready(function() {
        var table = $('#datatable-tabletools2').DataTable();
        var tt2 = new $.fn.dataTable.TableTools( table );

        $( tt2.fnContainer() ).insertBefore('#datatable-tabletools_wrapper div.dataTables_filter');

        $('.DTTT_container').addClass('btn-group');
        $('.DTTT_container a').addClass('btn btn-default btn-md');

        $('.dataTables_filter input').attr("placeholder", "Search...");

    } );
    $(document).ready(function() {
        var table = $('#datatable-tabletools3').DataTable();
        var tt3 = new $.fn.dataTable.TableTools( table );

        $( tt3.fnContainer() ).insertBefore('#datatable-tabletools_wrapper div.dataTables_filter');

        $('.DTTT_container').addClass('btn-group');
        $('.DTTT_container a').addClass('btn btn-default btn-md');

        $('.dataTables_filter input').attr("placeholder", "Search...");

    } );
    $(document).ready(function() {
        var table = $('#datatable-tabletools4').DataTable();
        var tt3 = new $.fn.dataTable.TableTools( table );

        $( tt3.fnContainer() ).insertBefore('#datatable-tabletools_wrapper div.dataTables_filter');

        $('.DTTT_container').addClass('btn-group');
        $('.DTTT_container a').addClass('btn btn-default btn-md');

        $('.dataTables_filter input').attr("placeholder", "Search...");

    } );

 

    $(document).ready(function() {
        $('#datatable-reorder').DataTable( {
            dom: 'Rlfrtip'
        });

        $('#datatable-reorder_length').hide();
        $('#datatable-reorder_filter').hide();

    });

    $(document).ready(function() {
        $('.dataTables_filter input').attr("placeholder", "Search...");
    });
*/
$(document).ready(function() {
        $('#datatable-example').dataTable();
    });

    /* Datatables hide columns */

    $(document).ready(function() {
        var table = $('#datatable-hide-columns').DataTable( {
            "scrollY": "300px",
            "paging": false
        } );

        $('#datatable-hide-columns_filter').hide();

        $('a.toggle-vis').on( 'click', function (e) {
            e.preventDefault();

            // Get the column API object
            var column = table.column( $(this).attr('data-column') );

            // Toggle the visibility
            column.visible( ! column.visible() );
        } );
    } );

    /* Datatable row highlight */

    $(document).ready(function() {
        var table = $('#datatable-row-highlight').DataTable();

        $('#datatable-row-highlight tbody').on( 'click', 'tr', function () {
            $(this).toggleClass('tr-selected');
        } );
    });
     $(document).ready(function() {
        var table = $('#datatable-row-highlight2').DataTable();

        $('#datatable-row-highlight2 tbody').on( 'click', 'tr', function () {
            $(this).toggleClass('tr-selected');
        } );
    });
      $(document).ready(function() {
        var table = $('#datatable-row-highlight3').DataTable();

        $('#datatable-row-highlight3 tbody').on( 'click', 'tr', function () {
            $(this).toggleClass('tr-selected');
        } );
    });
       $(document).ready(function() {
        var table = $('#datatable-row-highlight4').DataTable();

        $('#datatable-row-highlight4 tbody').on( 'click', 'tr', function () {
            $(this).toggleClass('tr-selected');
        } );
    });


    $(document).ready(function() {
        $('.dataTables_filter input').attr("placeholder", "Search...");
    });

</script>

<div id="page-title">
   <!--  <h2>Regular</h2> -->
  <!--   <p>Reg Admin</p> -->
    
</div>

<!-- <div class="panel">
<div class="panel-body">
<h3 class="title-hero">

<div class="tl-label bs-label label-success" style="margin-bottom:40px;font-size: 100%">
                            Admin Approval
                        </div>
     
</h3>


<div class="example-box-wrapper">

<table id="datatable-tabletools" class="table table-striped table-bordered" cellspacing="0" width="100%">
<thead>
<tr>
    <th>No.</th>
    <th>Prospect Number</th>
    <th>Category</th>
    <th>Name</th>
    <th>Flag</th>
    <th>Note</th>
    <th>Different Address</th>
    <th>Action</th>
</tr>
</thead>


<tbody>
<?php
$jumlahData = $allData->num_rows();
?>
<?php
    
        if($jumlahData > 0){
        ?>
<?php
                $i = 0;
                foreach ($allData->result() as $row) {
                    $i++;
                    ?>
<tr>
    <td><?= $i ?></td>
    <td><?= $row->PROSPECT_NBR?></td>
    <td><?= $row->CATEGORY ?></td>
    <td><?= $row->FIRST_NAME ?></td>
    <td><?= $row->statusep ?></td>
    <td><?= $row->LIGHT_VER ?></td>
    <td><?= $row->FBEDA ?></td>
    <?php
    $aksi =$row->statusep;
    if($aksi=="Pending"){
        ?>
    
    <td><a class="tl-label bs-label label-info" href="<?=base_url();?>entryp/Entryp/admin_approval/<?= $row->PROSPECT_ID?>">Approval</a></td>
    <?php
    }else if($aksi=="BTP"){
    ?>
    <td><a class="tl-label bs-label label-info"  href="<?=base_url();?>entryp/Entryp/bfp/<?= $row->PROSPECT_ID?>">Form BFP</a></td>
    <?php
    }else if($aksi=="NEW"){
        ?>
    <td><a class="tl-label bs-label label-info" href="<?=base_url();?>entryp/Entryp/admin_approval/<?= $row->PROSPECT_ID?>">Approval</a></td>
    <?php
    }
    ?>

</tr>
<?php
                }
                ?>


</tbody>
</table>
<?php
    }
        ?>
</div>
</div>
</div> -->



 <!-- <div class="panel">
<div class="panel-body">
<h3 class="title-hero">

<div class="tl-label bs-label label-success" style="margin-bottom:40px;font-size: 100%">
                            Admin Approval
                        </div>
     
</h3>


<div class="example-box-wrapper">

<table id="datatable-row-highlight" class="table table-striped table-bordered" cellspacing="0" width="100%">
<thead>
<tr>
    <th>No.</th>
    <th>Prospect Number</th>
    <th>Category</th>
    <th>Name</th>
    <th>Status</th>
    <th>Note</th>
    <th>Different Address</th>
    <th>Action</th>
     
</tr>
</thead>



<tbody>
<?php
$jumlahData = $allData->num_rows();
?>
<?php
    
        if($jumlahData > 0){
        ?>
<?php
                $i = 0;
                foreach ($allData->result() as $row) {
                    $i++;
                    ?>
<tr>
    <td><?= $i ?></td>
    <td><?= $row->PROSPECT_NBR ?></td>
    <td><?= $row->SALESC ?></td>
    <td><?= $row->FIRST_NAME ?> <?= $row->MIDDLE_NAME ?> <?= $row->LAST_NAME ?></td>
    <td><?= $row->statusep ?></td>
    <td><?= $row->ADM_NOTE ?></td>
    <td><?= $row->FBEDA ?></td>
    <input type="hidden" ng-model="da" name="PROSPECT_ID" placeholder=""  class="form-control" value="asfasf">
   
   <td><button type="button" class="btn btn-success btn-sm" ng-model="klik" ng-click="detil_coba(da)">Approval</button></td>
</tr>
<?php
                }
                ?>


</tbody>
</table>
<?php
    }
        ?>
</div>
</div>
</div>  -->


<div class="panel">
<div class="panel-body">
<h3 class="title-hero">

<div class="tl-label bs-label label-success" style="margin-bottom:40px;font-size: 100%">
                            Admin Approval
                        </div>

     
</h3>


<div class="example-box-wrapper">
<div class="form-group">
<div class="col-sm-3">
    <input type="text" id="sa" name="sa"  ng-model="SGS_PARENT_NUMBER" placeholder="Prospect Number" ng-keypress="enterSGSParentNumber($event,SGS_PARENT_NUMBER)"  class="form-control">
</div>
<!-- <button type="button" class="glyph-icon demo-icon tooltip-button icon-elusive-search" style="margin-top:0px;padding-left:-20px;" id="bt_search_prospect" ng-click="sgs_number(SGS_PARENT_NUMBER)"></button> -->
</div>
<table id="datatable-row-highlight12" class="table table-striped table-bordered" cellspacing="0" width="100%">
<thead>
<tr>
    <th>No.</th>
    <th>Prospect Number</th>
    <th>Category</th>
    <th>Name</th>
    <th>Status</th>
    <th>Light Ver</th>
    <th>Different Address</th>
    <th>Action</th>
</tr>
</thead>


<tbody>


<tr ng-repeat="val in data_prospect ">
    <td>{{$index+1}}</td>
    <td>{{val.PROSPECT_NBR}}</td>
    <td>{{val.SALES_CHANNEL_DESCR}}</td>
    <td>{{val.FIRST_NAME}} {{val.MIDDLE_NAME}} {{val.LAST_NAME}}</td>
    <td>{{val.statusep}}</td>
    <td>{{val.LIGHT_VER}}</td>
    <td>{{val.FBEDA}}</td>
    
    <td><button type="button" class="btn btn-success btn-sm" ng-model="klik" ng-click="detil(val)">Detail</button></td>

   
</tr>



</tbody>
</table>

</div>
</div>
</div>


<div class="panel">
<div class="panel-body">
<h3 class="title-hero">

<div class="tl-label bs-label label-success" style="margin-bottom:40px;font-size: 100%">
                           BTP-BFP
                        </div>
     
</h3>


<div class="example-box-wrapper">
<div class="form-group">
<div class="col-sm-3">
    <input type="text" id="sa" name="sa"  ng-model="SGS_PARENT_NUMBER2" placeholder="Prospect Number" ng-keypress="enterSGSParentNumber2($event,SGS_PARENT_NUMBER)"  class="form-control">
</div>
<!-- <button type="button" class="glyph-icon demo-icon tooltip-button icon-elusive-search" style="margin-top:0px;padding-left:-20px;" id="bt_search_prospect" ng-click="sgs_number2(SGS_PARENT_NUMBER2)"></button> -->
</div>

<table id="datatable-tabletools4" class="table table-striped table-bordered" cellspacing="0" width="100%">
<thead>
<tr>
    <th>No.</th>
    <th>Prospect Number</th>
    <th>Category</th>
    <th>Name</th>
    <th>Status</th>
    <th>Note</th>
    <th>Different Address</th>
    <th>Action</th>
</tr>
</thead>


<tbody>



<tr ng-repeat="val in data_prospect_btp ">
    <td>{{$index+1}}</td>
    <td>{{val.PROSPECT_NBR}}</td>
    <td>{{val.SALES_CHANNEL_DESCR}}</td>
    <td>{{val.FIRST_NAME}} {{val.MIDDLE_NAME}} {{val.LAST_NAME}}</td>
    <td>{{val.statusep}}</td>
    <td>{{val.DTH_NOTE}}</td>
    <td>{{val.FBEDA}}</td>
    
    <td><button type="button" class="btn btn-success btn-sm" ng-model="klik" ng-click="detil_btp(val)">From BFP</button></td>

   
</tr>



</tbody>
</table>

</div>
</div>
</div>







<!-- 

<div class="panel">
<div class="panel-body">
<h3 class="title-hero">

<div class="tl-label bs-label label-success" style="margin-bottom:40px;font-size: 100%">
                            Detail Historical Process
                        </div>
     
</h3>


<div class="example-box-wrapper">

<table id="datatable-tabletools3" class="table table-striped table-bordered" cellspacing="0" width="100%">
<thead>
<tr>
    <th>No.</th>
    <th>Prospect Number</th>
    <th>Category</th>
    <th>Name</th>
    <th>Flag</th>
    <th>Note</th>
  
</tr>
</thead>



<tbody>
<?php
$jumlahData = $allData->num_rows();
?>
<?php
    
        if($jumlahData > 0){
        ?>
<?php
                $i = 0;
                foreach ($allData->result() as $row) {
                    $i++;
                    ?>
<tr>
    <td><?= $i ?></td>
    <td><?= $row->PROSPECT_NBR?></td>
    <td><?= $row->CATEGORY ?></td>
    <td><?= $row->FIRST_NAME ?></td>
    <td><?= $row->statusep ?></td>
    <td><?= $row->LIGHT_VER ?></td>
    <?php
    $aksi =$row->statusep;
    if($aksi=="Pending"){
        ?>
    
   
    <?php
    }else if($aksi=="BTP"){
    ?>
   
    <?php
    }else{
        ?>
       
    <?php
    }
    ?>

</tr>
<?php
                }
                ?>


</tbody>
</table>
<?php
    }
        ?>
</div>
</div>
</div> -->


<!-- <div class="panel">
<div class="panel-body">
<h3 class="title-hero">

<div class="tl-label bs-label label-warning" style="margin-bottom:40px;font-size: 100%">
                          Monitoring
                        </div>
     
</h3>


<div class="example-box-wrapper">

<table id="datatable-tabletools2" class="table table-striped table-bordered table-responsive" cellspacing="0" width="100%">
<thead>
<tr>
    <th>No.</th>
    <th>Prospect Number</th>
    <th>Category</th>
    <th>Name</th>
    <th>Flag</th>
    <th>Created Date</th>
    
</tr>
</thead>



<tbody>
<?php
$jumlahData = $allDataW->num_rows();
?>
<?php
    
        if($jumlahData > 0){
        ?>
<?php
                $i = 0;
                foreach ($allDataW->result() as $row) {
                    $i++;
                    ?>
<tr>
   <td><?= $i ?></td>
    <td><?= $row->PROSPECT_NBR?></td>
    <td><?= $row->CATEGORY ?></td>
    <td><?= $row->FIRST_NAME ?></td>
    <td><?= $row->statusep ?></td>
    <td><?= $row->CREATED_DATE ?></td>
  
</tr>
<?php
                }
                ?>


</tbody>
</table>
<?php
    }
        ?>
</div>
</div>
</div> -->



                    </div>

                

            </div>
        </div>
    </div>


    <!-- WIDGETS -->
    <script type="text/javascript">

var app = angular.module('valsys', []);

app.controller('myCtrl', function($scope,$http) {

 //   var idp = '<?php echo $row->PROSPECT_ID;?>';
    var cek_status_retreival = 'NEW';
    //console.log(idp);

    $http.get("<?php echo site_url('entryp/App_Admin/data_prospect_all');?>").success(function (result_DataA) { 
            //console.log(result_DataPromo); 
            $scope.data_prospect=[];           
            $scope.data_prospect =  result_DataA;
          //console.log($scope.data_prospect);
      });
    $http.get("<?php echo site_url('entryp/App_Admin/data_prospect_btp');?>").success(function (result_DataA) { 
            //console.log(result_DataPromo); 
            $scope.data_prospect_btp=[];           
            $scope.data_prospect_btp =  result_DataA;
          //console.log($scope.data_prospect);
      });

     $scope.enterSGSParentNumber = function(event,element)
    {
        if(event.keyCode == 13)
        {
            //console.log(element);
            $scope.sgs_number(element);       
        }   
    }
     $scope.enterSGSParentNumber2 = function(event,element)
    {
        if(event.keyCode == 13)
        {
            //console.log(element);
            $scope.sgs_number2(element);       
        }   
    }

    $scope.sgs_number = function(sgsnumber){
        if(sgsnumber==''){
            $http.get("<?php echo site_url('entryp/App_Admin/data_prospect_all');?>").success(function (result_DataA) { 
            //console.log(result_DataPromo);
            $scope.data_prospect=[];           
            $scope.data_prospect =  result_DataA;
        });
        }else{        
            $http.get("<?php echo site_url('entryp/App_Admin/search_prospect');?>", {params:{"param1": sgsnumber}}).success(function (data_sgs) { 
                if(data_sgs.length > 0){
                    //alert('data found');
                    $scope.data_prospect=[];  
                    $scope.data_prospect =  data_sgs;  
                }else{
                    $http.get("<?php echo site_url('entryp/App_Admin/data_prospect_all');?>").success(function (result_DataA) { 
                        alert('pls check, data not found'); 
                        $scope.data_prospect=[];           
                        $scope.data_prospect =  result_DataA;
                    });
                }
            });
        }
    }

    $scope.sgs_number2 = function(sgsnumber){
        if(sgsnumber==''){
            $http.get("<?php echo site_url('entryp/App_Admin/data_prospect_btp');?>", {params:{"param1": idp }}).success(function (result_DataA) { 
            //console.log(result_DataPromo);
            $scope.data_prospect_btp=[];           
            $scope.data_prospect_btp =  result_DataA;
        });
        }else{        
            $http.get("<?php echo site_url('entryp/App_Admin/search_prospect_btp');?>", {params:{"param1": sgsnumber}}).success(function (data_sgs) { 
                if(data_sgs.length > 0){
                    alert('data found');
                    $scope.data_prospect_btp=[];  
                    $scope.data_prospect_btp =  data_sgs;  
                }else{
                    $http.get("<?php echo site_url('entryp/App_Admin/data_prospect_btp');?>", {params:{"param1": idp }}).success(function (result_DataA) { 
                        alert('pls check, data not found'); 
                        $scope.data_prospect_btp=[];           
                        $scope.data_prospect_btp =  result_DataA;
                    });
                }
            });
        }
    }
    



    $scope.detil = function(val){
        $http.get("<?php echo site_url('entryp/App_Admin/cek_status_retreival');?>", {
            params:{
                "param1": val.PROSPECT_ID}}).success(function (data_status) { 
                $scope.status_ep =[];
                $scope.status_ep = data_status;
                console.log(val.PROSPECT_ID);
                 console.log($scope.status_ep);
                if($scope.status_ep.length > 0){
                    
                    //alert('Approval Admin');
                    $http.get("<?php echo site_url('entryp/App_Admin/log_admin');?>", {params:{
                      "param1": val.PROSPECT_ID }}).success(function (result_DataA) { 
                        $scope.data_app=[];           
                        $scope.data_app =  result_DataA;
                    });
                     window.location.href = "<?=base_url();?>entryp/App_Admin/admin_approval/"+ val.PROSPECT_ID;
                    /*$http.get("<?php echo site_url('entryp/App_Admin/data_approval');?>", {params:{"param1": idp }}).success(function (result_DataA) { 
                        $scope.data_app=[];           
                        $scope.data_app =  result_DataA;
                    });*/
                }else{
                   // alert('On Process');
                    if(confirm("On Process,  refresh the page ?")){
                    window.location.href = "<?=base_url();?>entryp/App_Admin";
                }
                }
            })
        };

       $scope.detil_coba = function(da){
       // $a = '<?php echo $row->PROSPECT_NBR;?>' ;
        $a = da ;
        console.log($a);
      /*  $http.get("<?php echo site_url('entryp/App_Admin/cek_status_retreival');?>", {
            params:{
                "param1": val.PROSPECT_ID}}).success(function (data_status) { 
                $scope.status_ep =[];
                $scope.status_ep = data_status;
                console.log(val.PROSPECT_ID);
                 console.log($scope.status_ep);
                if($scope.status_ep.length > 0){
                    
                    alert('Approval Admin');
                    $http.get("<?php echo site_url('entryp/App_Admin/log_admin');?>", {params:{
                      "param1": val.PROSPECT_ID }}).success(function (result_DataA) { 
                        $scope.data_app=[];           
                        $scope.data_app =  result_DataA;
                    });
                     window.location.href = "http://192.168.168.219/valsys/entryp/Entryp/admin_approval/"+ val.PROSPECT_ID;
                    
                }else{
                   // alert('On Process');
                    if(confirm("On Process,  refresh the page ?")){
                    window.location.href = "http://192.168.168.219/valsys/entryp/entryp/reg_admin";
                }
                }
            })*/
        };

     $scope.detil_btp = function(val){
        $http.get("<?php echo site_url('entryp/App_Admin/cek_status_retreival_btp');?>", {
            params:{
                "param1": val.PROSPECT_ID}}).success(function (data_status) { 
                $scope.status_ep =[];
                $scope.status_ep = data_status;
                 console.log($scope.status_ep);
                if($scope.status_ep.length > 0){
                    
                    alert('Form BFP');
                    $http.get("<?php echo site_url('entryp/App_Admin/log_admin_btp');?>", {params:{
                      "param1": val.PROSPECT_ID }}).success(function (result_DataA) { 
                        $scope.data_app=[];           
                        $scope.data_app =  result_DataA;
                    });
                     window.location.href = "<?=base_url();?>entryp/Entryp/bfp/"+ val.PROSPECT_ID;
                    /*$http.get("<?php echo site_url('entryp/App_Admin/data_approval');?>", {params:{"param1": idp }}).success(function (result_DataA) { 
                        $scope.data_app=[];           
                        $scope.data_app =  result_DataA;
                    });*/
                }else{
                    if(confirm("On Process,  refresh the page ?")){
                    //alert('On Process');
                    window.location.href = "<?=base_url();?>entryp/App_Admin";
                }
                }
            })
        };
    


    });
</script>

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