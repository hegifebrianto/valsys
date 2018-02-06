 <?=$head?>
 <?=$side_menu?>

 <div id="page-content-wrapper">
    

            <div id="page-content">
                
                    <div class="container">
                    

<!-- Data tables -->

<link rel="stylesheet" type="text/css" href="../../assets/widgets/datatable/datatable.css">
<script type="text/javascript" src="../../assets/widgets/datatable/datatable.js"></script>
<script type="text/javascript" src="../../assets/widgets/datatable/datatable-bootstrap.js"></script>
<script type="text/javascript" src="../../assets/widgets/datatable/datatable-tabletools.js"></script>
<script type="text/javascript" src="../../assets/widgets/datatable/datatable-reorder.js"></script>

<script type="text/javascript">

    /* Datatables export */

    $(document).ready(function() {
        var table = $('#datatable-tabletools').DataTable();
        var tt = new $.fn.dataTable.TableTools( table );

        $( tt.fnContainer() ).insertBefore('#datatable-tabletools_wrapper div.dataTables_filter');

        $('.DTTT_container').addClass('btn-group');
        $('.DTTT_container a').addClass('btn btn-default btn-md');

        $('.dataTables_filter input').attr("placeholder", "Search...");

    } );
    $(document).ready(function() {
        var table = $('#datatable-tabletools2').DataTable();
        var tt = new $.fn.dataTable.TableTools( table );

        $( tt.fnContainer() ).insertBefore('#datatable-tabletools_wrapper div.dataTables_filter');

        $('.DTTT_container').addClass('btn-group');
        $('.DTTT_container a').addClass('btn btn-default btn-md');

        $('.dataTables_filter input').attr("placeholder", "Search...");

    } );

    /* Datatables reorder */

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

</script>

<div id="page-title">
   <!--  <h2>Regular</h2> -->
  <!--   <p>Reg Admin</p> -->
    
</div>

<div class="panel">
<div class="panel-body">
<h3 class="title-hero">

<div class="tl-label bs-label label-success" style="margin-bottom:40px;font-size: 100%">
                            Kacab Approval
                        </div>
     
</h3>
<?php
$jumlahData = $allData->num_rows();
?>

<div class="example-box-wrapper">
<?php
    
        if($jumlahData > 0){
        ?>
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

<!-- <tfoot>
<tr>
    <th>a</th>
    <th>b</th>
    <th>c</th>
    <th>d</th>
    <th>e</th>
    <th>f</th>
    <th>i</th>
</tr>
</tfoot> -->

<tbody>
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
    
    <td><a class="tl-label bs-label label-info" href="<?=base_url();?>entryp/Entryp/updateEP_DTD_kacab/<?= $row->PROSPECT_ID?>">Detail</a></td>
    <?php
    }else if($aksi=="BTP"){
    ?>
    <td><a class="tl-label bs-label label-info"  href="<?=base_url();?>entryp/Entryp/bfp/<?= $row->PROSPECT_ID?>">Form BFP</a></td>
    <?php
    }else{
        ?>
        <td><a class="tl-label bs-label label-info" href="<?=base_url();?>entryp/Entryp/updateEP_kacab/<?= $row->PROSPECT_ID?>">Detail</a></td>
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
</div>


<div class="panel">
<div class="panel-body">
<h3 class="title-hero">

<div class="tl-label bs-label label-warning" style="margin-bottom:40px;font-size: 100%">
                          Kacab Approval Monitoring
                        </div>
     
</h3>
<?php
$jumlahData = $allDataW->num_rows();
?>

<div class="example-box-wrapper">
<?php
    
        if($jumlahData > 0){
        ?>
<table id="datatable-tabletools2" class="table table-striped table-bordered" cellspacing="0" width="100%">
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

<!-- <tfoot>
<tr>
    <th>a</th>
    <th>b</th>
    <th>c</th>
    <th>d</th>
    <th>e</th>
    <th>f</th>
    
</tr>
</tfoot> -->

<tbody>
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
   <!--  <td><a href="<?=base_url();?>entryp/Entryp/updateEP_DTD/<?= $row->PROSPECT_ID?>">Detail</a></td> -->
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
</div>


<div class="panel">
<div class="panel-body">
<h3 class="title-hero">

<div class="tl-label bs-label label-success" style="margin-bottom:40px;font-size: 100%">
                            Detail Historical Process
                        </div>
     
</h3>
<?php
$jumlahData = $allData->num_rows();
?>

<div class="example-box-wrapper">
<?php
    
        if($jumlahData > 0){
        ?>
<table id="datatable-tabletools" class="table table-striped table-bordered" cellspacing="0" width="100%">
<thead>
<tr>
    <th>No.</th>
    <th>Prospect Number</th>
    <th>Category</th>
    <th>Name</th>
    <th>Flag</th>
    <th>Note</th>
    <th>Action</th>
</tr>
</thead>

<!-- <tfoot>
<tr>
    <th>a</th>
    <th>b</th>
    <th>c</th>
    <th>d</th>
    <th>e</th>
    <th>f</th>
    <th>i</th>
</tr>
</tfoot> -->

<tbody>
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
    
    <td><a href="<?=base_url();?>entryp/Entryp/h_detail/<?= $row->PROSPECT_ID?>">Detail</a></td>
    <?php
    }else if($aksi=="BTP"){
    ?>
    <td><a href="<?=base_url();?>entryp/Entryp/h_detail/<?= $row->PROSPECT_ID?>">Detail</a></td>
    <?php
    }else{
        ?>
        <td><a href="<?=base_url();?>entryp/Entryp/h_detail/<?= $row->PROSPECT_ID?>">Detail</a></td>
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
</div>


<!-- <div class="panel">
<div class="panel-body">
<h3 class="title-hero">

<div class="tl-label bs-label label-warning" style="margin-bottom:40px;font-size: 100%">
                          Conclusion
                        </div>
     
</h3>
<?php
$jumlahData = $allDataW->num_rows();
?>

<div class="example-box-wrapper">
<?php
    
        if($jumlahData > 0){
        ?>
<table id="datatable-tabletools2" class="table table-striped table-bordered" cellspacing="0" width="100%">
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
    <td><?= $row->LIGHT_VER ?></td>
  
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
/*function myCtrl($scope) {

}*/
app.controller('myCtrl', function($scope,$http) {
    
    $scope.idprospect='<?php echo $detail->PROSPECT_ID;?>';
    
    
  $scope.addPerson = function(){
    var person = {
        idprospect:$scope.idprospect,
        /*name: $scope.name,
        age: $scope.age,*/
      
    };
    console.log('qqq');
   

    $http({
        method: 'POST',
        url: '<?=base_url();?>entryp/Entryp/log_admin',
        data: person,
      });
   // console.log($http); 
    //todo here call controller
  };
   
   $scope.removePerson = function(index){
    $scope.people.splice(index, 1);
   };    
   // console.log('asf');


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