
 <?=$head?>
 <?=$side_menu?>

<div id="page-content-wrapper">

    <div id="page-content">
                
        <div class="container">
                    
<script type="text/javascript" src="<?=base_url();?>assets/widgets/parsley/parsley.js"></script>
<!-- JS DROPDOWN -->
    <script type="text/javascript" src="<?=base_url();?>assets/bootstrap/jquery.min.js"></script>

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

<link rel="stylesheet" href="<?=base_url();?>assets/select2-master/dist/css/select2.min.css"/>

<!-- combo-check -->
<script src="http://igniteui.com/js/modernizr.min.js"></script>
<!-- <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.min.js"></script> -->
<script src="http://cdn-na.infragistics.com/igniteui/latest/js/infragistics.core.js"></script>
<script src="http://cdn-na.infragistics.com/igniteui/latest/js/infragistics.lob.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/angularjs/1.2.17/angular.min.js"></script>

<!-- <link href="http://cdn-na.infragistics.com/igniteui/latest/css/themes/infragistics/infragistics.theme.css" rel="stylesheet"></link> -->
<link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/widgets/ignite/infragistics.theme.css">
<link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/widgets/ignite/infragistics.css">
<!-- <link href="http://cdn-na.infragistics.com/igniteui/latest/css/structure/infragistics.css" rel="stylesheet"></link> -->
<style>
.combo-label {margin-bottom:.5em;}
</style>
<!-- -->
<?php
foreach ($ep_dtd->result() as $detail) {
?>

<div id="page-title">
    <h2><?php echo $detail->PROSPECT_ID;?></h2>
<!-- <h3>Update EP <?php echo $detail->PROSPECT_ID;?></h3>
 
</div>
<!-- Conten form --> 
<div class="panel">
            <div class="panel-body">
                
                <div class="example-box-wrapper">
                <div class="row">
                    <div class="col-md-6">
<form class="form-horizontal bordered-row" id="formm" data-parsley-validate="" method="POST" action="<?=base_url();?>entryp/Entryp/Update_EP_BFP_DB" enctype="multipart/form-data">
     <div class="form-group">
                            <label class="col-sm-3 control-label">BFP</label>
                          

                          <!-- <?php
  $a = $detail->statusep;
  if ($a=='Bfp'){
  ?>
   <div class="col-sm-6">
                                <select name="STATUSEP" class="required" >
                                 <option value="" selected="selected">Select</option>
                                 <option value="Approve1">BTP BFP</option>
                                 <option value="Reject">Reject</option>
                                 
                                
                               
                                 
                        </select>
                        
                        </div>
                        
  <?php
  }else{
    ?>
     <div class="col-sm-6">
                                <select name="STATUSEP" class="required" >
                                 <option value="" selected="selected">Select</option>
                                 <option value="Approve1">Approve</option>
                                 <option value="Pending">Pending</option>
                                 <option value="Rejected">Reject</option>
                                
                               
                                 
                        </select>
                        
                            </div>

    <?php
  }
  ?>
                        
                        <input type="hidden" name="PROSPECT_ID" placeholder=""  class="form-control" value="<?php echo $detail->PROSPECT_ID;?>">
                         <input type="hidden" name="PROCESSID" placeholder=""  class="form-control" value="<?php echo $detail->processId;?>">
          <div class="bg-default text-center pad20A mrg25T">
                    <button name="sub" id="saveBtn" class="btn btn-lg btn-primary">Save</button>
                   
                </div>
                </div>
                
 -->
</div>
</div>
</div>


 <input type="hidden" name="PROSPECT_ID" placeholder=""  class="form-control" value="<?php echo $detail->PROSPECT_ID;?>">
<input type="hidden" name="PROCESSID" placeholder=""  class="form-control" value="<?php echo $detail->processId;?>">
<input type="hidden" name="STATUSEP" placeholder=""  class="form-control" value="DTH">
<input type="hidden" name="username" placeholder=""  class="form-control" value="0504211215">


<!-- start of content -->
 <div class="panel">
            <div class="panel-body">
                
                <div class="example-box-wrapper">
                   <!--  <ul class="list-group list-group-separator row list-group-icons">
                        <li class="col-md-3 active">
                            <a href="#tab-example-1" data-toggle="tab" class="list-group-item">
                                <i class="glyph-icon font-primary icon-user"></i>
                                Profile
                            </a>
                        </li>
                        <li class="col-md-3">
                            <a href="#tab-example-2" data-toggle="tab" class="list-group-item">
                                <i class="glyph-icon font-red icon-briefcase"></i>
                                Package
                            </a>
                        </li>
                        <li class="col-md-3">
                            <a href="#tab-example-3" data-toggle="tab" class="list-group-item">
                                <i class="glyph-icon font-yellow icon-usd"></i>
                                1st Payment
                            </a>
                        </li>
                        <li class="col-md-3">
                            <a href="#tab-example-4" data-toggle="tab" class="list-group-item">
                                <i class="glyph-icon font-green icon-send"></i>
                                Check List
                            </a>
                        </li>
                        
                        
                    </ul> -->
                    <div class="tab-content">
                    
                    <div class="form-horizontal bordered-row" id="formm" name="formm" data-parsley-validate="" method="" action="" enctype="multipart/form-data">
                   <!--  <form class="form-horizontal bordered-row" id="formm" name="formm" data-parsley-validate="" > -->
    
<script>
                                
                                  function checkk() {
                                    var el = document.getElementById("cek");
                                    var str = el.options[el.selectedIndex].text;
                                    if(str == "Select") {
                                      // hidee();
                                       $("#optionapp1").hide();
                                        $("#optionrej1").hide();
                                    }else if(str == "Approve"){
                                         //showw();
                                        $("#optionrej1").hide();
                                        $("#optionapp1").show();
                                    }else if(str == "Reject"){
                                         //showw();
                                        $("#optionapp1").hide();
                                        $("#optionrej1").show();
                                    }

                                }
                                                
</script>
<script>
                                
                                  function checkk2() {
                                    var el = document.getElementById("cek2");
                                    var str = el.options[el.selectedIndex].text;
                                    if(str == "Select") {
                                      // hidee();
                                       $("#optionapp2").hide();
                                        $("#optionrej2").hide();
                                    }else if(str == "Approve"){
                                         //showw();
                                        $("#optionrej2").hide();
                                        $("#optionapp2").show();
                                    }else if(str == "Reject"){
                                         //showw();
                                        $("#optionapp2").hide();
                                        $("#optionrej2").show();
                                    }

                                }
                                                
</script>
<script>
                                
                                  function checkk3() {
                                    var el = document.getElementById("cek3");
                                    var str = el.options[el.selectedIndex].text;
                                    if(str == "Select") {
                                      // hidee();
                                       $("#optionapp3").hide();
                                        $("#optionrej3").hide();
                                    }else if(str == "Approve"){
                                         //showw();
                                        $("#optionrej3").hide();
                                        $("#optionapp3").show();
                                    }else if(str == "Reject"){
                                         //showw();
                                        $("#optionapp3").hide();
                                        $("#optionrej3").show();
                                    }

                                }
                                                
</script>
<script>
                                
                                  function checkk4() {
                                    var el = document.getElementById("cek4");
                                    var str = el.options[el.selectedIndex].text;
                                    if(str == "Select") {
                                      // hidee();
                                       $("#optionapp4").hide();
                                        $("#optionrej4").hide();
                                    }else if(str == "Approve"){
                                         //showw();
                                        $("#optionrej4").hide();
                                        $("#optionapp4").show();
                                    }else if(str == "Reject"){
                                         //showw();
                                        $("#optionapp4").hide();
                                        $("#optionrej4").show();
                                    }

                                }
                                                
</script>
<script>
$(function(){
    /*$("#optionapp1").hide();
      $("#optionrej1").hide();
       $("#optionapp2").hide();
      $("#optionrej2").hide();
       $("#optionapp3").hide();
      $("#optionrej3").hide();
       $("#optionapp4").hide();
      $("#optionrej4").hide();*/
      /* $("#optionapp5").hide();
      $("#optionrej5").hide();
       $("#optionapp6").hide();
      $("#optionrej6").hide();
       $("#optionapp7").hide();
      $("#optionrej7").hide();
       $("#optionapp8").hide();
      $("#optionrej8").hide();
       $("#optionapp9").hide();
      $("#optionrej9").hide();
       $("#optionapp10").hide();
      $("#optionrej10").hide();
       $("#optionapp11").hide();
      $("#optionrej11").hide();*/
       /*$("#optionapp2").hide();
      $("#optionrej2").hide();
       $("#optionapp2").hide();
      $("#optionrej2").hide();
       $("#optionapp2").hide();
      $("#optionrej2").hide();
       $("#optionapp2").hide();
      $("#optionrej2").hide();
       $("#optionapp2").hide();
      $("#optionrej2").hide();
       $("#optionapp2").hide();
      $("#optionrej2").hide();
       $("#optionapp2").hide();
      $("#optionrej2").hide();
       $("#optionapp2").hide();
      $("#optionrej2").hide();
       $("#optionapp2").hide();
      $("#optionrej2").hide();
       $("#optionapp2").hide();
      $("#optionrej2").hide();
       $("#optionapp2").hide();
      $("#optionrej2").hide();
       $("#optionapp2").hide();
      $("#optionrej2").hide();
       $("#optionapp2").hide();
      $("#optionrej2").hide();*/
   
    
});
</script>
<script>
$(function(){
    $("#light").hide();
    
    
});
</script>
<script>
function valueChanged()
{
    if($('.colorCheckbox').is(":checked"))   
        $('#light').show();
    else
        $('#light').hide();
}
</script>
    <div class="tab-pane fade active in" id="tab-example-1">
        <div class="panel">
        <div class="panel-body">
        
        <div class="example-box-wrapper">
            
                <div class="row">
                    <div class="col-md-12">
                    <h3 class="title-hero">
                    
                    </h3>
                       
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Prospect Number</label>
                            <div class="col-sm-6">
                                    <input type="text" id="" name="PN"  value="<?php echo $detail->PROSPECT_NBR;?>"  class="form-control" disabled="">
                                    
                            </div>
                        </div>
                          <div class="form-group">
                            <label class="col-sm-3 control-label">Name</label>
                            <div class="col-sm-6">
                                    <input type="text" id="" name="PN"  value="<?php echo $detail->FIRST_NAME;?> <?php echo $detail->MIDDLE_NAME;?>"  class="form-control" disabled="">
                                    
                            </div>
                        </div>
                        

                        <!--  <div class="form-group">
                            <label  class=" col-sm-3 control-label"> <label class="font-red">*</label>Identity Type</label>
                            <div class="col-sm-6">
                                    <input type="text" id="" name="IT" ng-model="" value="<?php echo $detail->PROSPECT_TYPE;?>" required class="form-control" disabled="">
                                    <select class="col-sm-3" id="cek4" name="T4" ng-model="RELIGION" class="required" onChange="checkk4();">
                                     <option value="" selected="selected">Select</option>
                                     <option value="A">Approve</option>
                                     <option value="R">Reject</option>
                                     
                                </select>
                                
                                
                            <select class="col-sm-7 "  id="optionapp4" name="A4" ng-model="RELIGION" class="required" >
                                     <option value="" selected="selected">Select</option>
                                     <?php 
                                    foreach ($admin_approve as $pt) {
                                    echo "<option value='$pt[NOTE]'>$pt[NOTE]</option>";
                                    }
                                    ?>
                                     
                                </select>                                                        
                            
                          
                           <select class="col-sm-7" id="optionrej4" name="R4" ng-model="RELIGION" class="required" >
                                     <option value="" selected="selected">Select</option>
                                    
                                     <?php 
                                    foreach ($admin_reject as $pt) {
                                    echo "<option value='$pt[NOTE]'>$pt[NOTE]</option>";
                                    }
                                    ?>
                                      </select>
                            </div>
                        </div>
                         -->
                        </div>
                     <!--    <div class="col-md-6">
                    <h3 class="title-hero">
                      
                    </h3>
                     <div class="form-group">
                            <label class="col-sm-3 control-label"></label>
                            <div class="col-sm-6">
                               
                            </div>
                        </div>


                             <div class="form-group">
                            
                            <select class="col-sm-3" id="cek" name="RELIGION" ng-model="RELIGION" class="required" onChange="checkk();">
                                     <option value="" selected="selected">Select</option>
                                     <option value="A">Approve</option>
                                     <option value="R">Reject</option>
                                     
                                </select>



                                
                                
                            <select class="col-sm-3 "  id="optionapp1" name="RELIGION" ng-model="RELIGION" class="required" >
                                     <option value="-1" selected="selected">Select</option>
                                     <?php 
                                    foreach ($admin_approve as $pt) {
                                    echo "<option value='$pt[NOTE_CODE]'>$pt[NOTE]</option>";
                                    }
                                    ?>
                                     
                                </select>                                                        
                            
                          
                           <select class="col-sm-3" id="optionrej1" name="RELIGION" ng-model="RELIGION" class="required" >
                                     <option value="-1" selected="selected">Select</option>
                                    
                                     <?php 
                                    foreach ($admin_reject as $pt) {
                                    echo "<option value='$pt[NOTE_CODE]'>$pt[NOTE]</option>";
                                    }
                                    ?>
                                     
                                </select>
                        </div>     
<script>
                                
                                  function check2() {
                                    var el = document.getElementById("cek2");
                                    var str = el.options[el.selectedIndex].text;
                                    if(str == "Select") {
                                      // hidee();
                                       $("#optionapp2").hide();
                                        $("#optionrej2").hide();
                                    }else if(str == "Approve"){
                                         //showw();
                                        $("#optionrej2").hide();
                                        $("#optionapp2").show();
                                    }else if(str == "Reject"){
                                         //showw();
                                        $("#optionapp2").hide();
                                        $("#optionrej2").show();
                                    }

                                }
                                                
                                 </script>
                            <div class="form-group">
                            
                            <select class="col-sm-3" id="cek2" name="RELIGION" ng-model="RELIGION" class="required" onChange="check2();">
                                     <option value="" selected="selected">Select</option>
                                     <option value="A">Approve</option>
                                     <option value="R">Reject</option>
                                     
                                </select>



                                
                                
                            <select class="col-sm-3"  id="optionapp2" name="RELIGION" ng-model="RELIGION" class="required" >
                                     <option value="-1" selected="selected">Select</option>
                                     <?php 
                                    foreach ($admin_approve as $pt) {
                                    echo "<option value='$pt[NOTE_CODE]'>$pt[NOTE]</option>";
                                    }
                                    ?>
                                     
                                </select>                                                        
                            
                          
                           <select class="col-sm-3" id="optionrej2" name="RELIGION" ng-model="RELIGION" class="required" >
                                      <option value="-1" selected="selected">Select</option>
                                    
                                     <?php 
                                    foreach ($admin_reject as $pt) {
                                    echo "<option value='$pt[NOTE_CODE]'>$pt[NOTE]</option>";
                                    }
                                    ?>
                                     
                                </select>
                        </div>  
                        <script>
                                
                                  function check3() {
                                    var el = document.getElementById("cek3");
                                    var str = el.options[el.selectedIndex].text;
                                    if(str == "Select") {
                                      // hidee();
                                       $("#optionapp3").hide();
                                        $("#optionrej3").hide();
                                    }else if(str == "Approve"){
                                         //showw();
                                        $("#optionrej3").hide();
                                        $("#optionapp3").show();
                                    }else if(str == "Reject"){
                                         //showw();
                                        $("#optionapp3").hide();
                                        $("#optionrej3").show();
                                    }

                                }
                                                
                                 </script>
                        <div class="form-group">
                            
                            <select class="col-sm-3" id="cek3" name="RELIGION" ng-model="RELIGION" class="required" onChange="check3();">
                                     <option value="" selected="selected">Select</option>
                                     <option value="A">Approve</option>
                                     <option value="R">Reject</option>
                                     
                                </select>



                                
                                
                            <select class="col-sm-3"  id="optionapp3" name="RELIGION" ng-model="RELIGION" class="required" >
                                     <option value="-1" selected="selected">Select</option>
                                     <?php 
                                    foreach ($admin_approve as $pt) {
                                    echo "<option value='$pt[NOTE_CODE]'>$pt[NOTE]</option>";
                                    }
                                    ?>
                                     
                                     
                                </select>                                                        
                            
                          
                           <select class="col-sm-3" id="optionrej3" name="RELIGION" ng-model="RELIGION" class="required" >
                                     <option value="-1" selected="selected">Select</option>
                                    
                                     <?php 
                                    foreach ($admin_reject as $pt) {
                                    echo "<option value='$pt[NOTE_CODE]'>$pt[NOTE]</option>";
                                    }
                                    ?>
                                     
                                </select>
                        </div>  
                        <div class="form-group">
                            
                            <select class="col-sm-3" id="cek" name="RELIGION" ng-model="RELIGION" class="required" onChange="checkk();">
                                     <option value="" selected="selected">Select</option>
                                     <option value="A">Approve</option>
                                     <option value="R">Reject</option>
                                     
                                </select>



                                
                                
                            <select class="col-sm-3"  id="optionapp" name="RELIGION" ng-model="RELIGION" class="required" >
                                     <option value="" selected="selected">Select</option>
                                     <option value="A">Approve</option>
                                     <option value="R">Reject</option>
                                     
                                </select>                                                        
                            
                          
                           <select class="col-sm-3" id="optionrej" name="RELIGION" ng-model="RELIGION" class="required" >
                                     <option value="" selected="selected">Select</option>
                                    
                                     <option value="R">Reject</option>
                                     
                                </select>
                        </div>  
                        <div class="form-group">
                            
                            <select class="col-sm-3" id="cek" name="RELIGION" ng-model="RELIGION" class="required" onChange="checkk();">
                                     <option value="" selected="selected">Select</option>
                                     <option value="A">Approve</option>
                                     <option value="R">Reject</option>
                                     
                                </select>



                                
                                
                            <select class="col-sm-3"  id="optionapp" name="RELIGION" ng-model="RELIGION" class="required" >
                                     <option value="" selected="selected">Select</option>
                                     <option value="A">Approve</option>
                                     <option value="R">Reject</option>
                                     
                                </select>                                                        
                            
                          
                           <select class="col-sm-3" id="optionrej" name="RELIGION" ng-model="RELIGION" class="required" >
                                     <option value="" selected="selected">Select</option>
                                    
                                     <option value="R">Reject</option>
                                     
                                </select>
                        </div>  
                  
                       

                        
                        <div class="form-group">
                            <label class="col-sm-3 control-label"></label>
                            <div class="col-sm-6">
                               
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label"></label>
                            <div class="col-sm-6">
                               
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label"></label>
                            <div class="col-sm-6">
                               
                            </div>
                        </div>
                       
                    </div> -->
                    <div class="form-group">
                            <label class="col-sm-3 control-label"></label>
                            <div class="col-sm-6">
                               
                            </div>
                        </div>
                        <!-- <div class="form-group">
                           <button name="subject" type="submit" value="">coba</button>
                        </div> -->
                        
                        <!-- <div class="bg-default text-center pad20A mrg25T">
                    <button name="sub" id="saveBtn" class="btn btn-lg btn-primary">Save</button>
                        </div> -->
                       
                       
                        </div>
                        </div>
                       
<?php
}
?>

                        <div class="panel">
    <div class="panel-body">
        
        <div class="example-box-wrapper">
           
                <div class="row">
                    <div class="col-md-12">
                    <h3 class="title-hero">
                     Detail BTP
                    </h3>
                        <!-- <div class="form-group">
                            <label class="col-sm-3 control-label">Category</label>
                           <div class="col-sm-6">
                                    <input type="text" id="" name="" ng-model="" value="<?php echo $detail->PROSPECT_TYPE;?>" required class="form-control" disabled="">
                            </div>
                        </div>
                       <div class="form-group">
                            <label class="col-sm-3 control-label">Sub Category BTP</label>
                            <div class="col-sm-6">
                                    <input type="text" id="" name="" ng-model="" value="<?php echo $detail->PROSPECT_TYPE;?>" required class="form-control" disabled="">
                            </div>
                        </div> -->
                        <table id="datatable-tabletools" class="table table-striped table-bordered" cellspacing="0" width="100%">
<thead>
<tr>
    <!-- <th>No.</th> -->
    <th>Category</th>
    <th>Sub Category</th>
    
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
foreach ($ep_dtd_btp->result() as $detail2) {
?>
<tr>
    <!-- <td></td> -->
    <td><?php echo $detail2->DESC;?></td>
    <td><?php echo $detail2->SUBC;?></td>
    <!-- <td><?= $row->processId ?></td>
    <td><?= $row->duplicatestatus ?></td>
    <td><?= $row->statusep ?></td>
    <td><a href="<?=base_url();?>entryp/Entryp/updateEP_Reg_Dth/<?= $row->PROSPECT_ID?>">New Verification</a></td> -->
</tr>

<?php
}
?>
</tbody>
</table>
                        <div class="form-group">
                            <label class="col-sm-3 control-label"><label class="font-red">*</label>Note</label>
                            <div class="col-sm-6">
                               <!--  <textarea id="dthnott" name="dthnott" value="aaaaaaa" class="form-control" disabled></textarea> -->
                                 <textarea id="" name="nt"  class="form-control" disabled=""><?php echo $detail->DTH_NOTE;?></textarea>
                            </div>
                        </div>
                        
                        </div>
                        
                        </div>
                        
                        </div>
                        </div>
                        </div>

                        <div class="panel">
                <div class="panel-body">
                    
                    <div class="example-box-wrapper">                        
                            <div class="row">
                                <div class="col-md-6">
                                <h3 class="title-hero">
                                  Detail BFP
                                </h3>
                                
                        <div class="form-group">
                            <label  class=" col-sm-3 control-label"> <label class="font-red"></label>Category</label>
                            <div class="col-sm-6">
                                                                 
                                
                            <select class="col-sm-12 "  id="optionapp4" name="A4" ng-model="name" class="required" >
                                   <!--   <option value="" selected="selected">Select</option> -->
                                     <?php 
                                    foreach ($ep_dtd_btpe as $pt) {
                                    echo "<option value='$pt[DESC]'>$pt[DESC]</option>";
                                    }
                                    ?>
                                     
                                </select>                                                        
                            
                          
                           
                            </div>
                        </div>
                        <div class="form-group" ng-hide="subcategory" ng-show="name">
                            <label  class=" col-sm-3 control-label"> <label class="font-red"></label>Sub Category</label>
                            <div class="col-sm-6">
                                                                 
                                
                            <select class="col-sm-12 "  id="optionapp4" name="A4" ng-model="age" class="required" >
                                    <!--  <option value="" selected="selected">Select</option> -->
                                   <!--   <?php 
                                    foreach ($admin_approve as $pt) {
                                    echo "<option value='$pt[NOTE]'>$pt[NOTE]</option>";
                                    }
                                    ?> -->
                                     
                                <!--  <option value="" selected="selected">Select</option> -->
                                 <option value="data lengkap">Data Lengkap</option>
                                 <!-- <option value="Reject">Reject</option> -->
                                              
                                </select>                                                        
                            
                          
                           
                            </div>
                        </div>
                       
    
    
    <!-- <input type="text" ng-model="name" placeholder="Name" ><br />
    <input type="number" ng-model="age" placeholder="Age" ><br />
    <input type="text" ng-model="title" placeholder="Title" ><br /> -->
    <button ng-show="age" ng-hide="addb" type="button" ng-click="addPerson()">Add</button>
    
    <table class="table" ng-hide="tablec" ng-show="age">
  <tr>
    <th>Category
    </th>
    <th>Sub Category
    </th>
    <!-- <th>Action
    </th> -->
  </tr>
  <tr ng-repeat="person in people">
    <td>
            {{ person.name }}
          </td>
          <td>
            {{ person.age }}
          </td>
          <!-- <td>
             <button type="button" ng-click="removePerson($index)">Remove</button>
          </td> -->
  </tr>
</table>
    
    
                        <div class="form-group" ng-show="age" ng-hide="notex">
                            <label class="col-sm-3 control-label"><label class="font-red"></label>Note</label>
                            <div class="col-sm-6">
                                <textarea type="text"  id="noteadmin" name="noteadmin" placeholder="Note"  class="form-control"></textarea>
                            </div>
                        </div>
                        <div class="bg-default text-center pad20A mrg25T" >
                    <button ng-hide="saveb" ng-show="age" name="sub" id="saveBtn" class="btn btn-lg btn-primary">Save</button>
                   <input type="button" onclick="location.href='http://192.168.168.219/valsys/entryp/entryp/reg_admin';" value="Cancel" />
                        </div>

                         
                    </div>
                    
                    </div>
                    </div>
                    </div>

                    
                    
                    
                    </div>
                    </div>
                    </div>
    </div>
   <!--  <div class="tab-pane fade" id="tab-example-4">
        <div class="panel">
        <div class="panel-body">
        
        <div class="example-box-wrapper">
            
                <div class="row">
                    <div class="col-md-6">
                      <h3 class="title-hero">Checklist</h3>  
                    </div>
                    <br/><br/>
                    <ul class="reset-ul">
                      <li>
                          <input id="cek_ktp" type="checkbox" value="">
                          <script>
                                document.getElementById('cek_ktp').onchange = function() {
                                document.getElementById('ktp').disabled =!this.checked;                                
                                };                       
                               
                                </script>
                          <label for="boxed-layout">KTP</label>
                          <input type="text" class="form-control" id="ktp" placeholder="" disabled>
                      </li>
                      <li>
                          <input id="cek_card" input type="checkbox" value="">
                          <script>
                           document.getElementById('cek_card').onchange = function() {
                                document.getElementById('card').disabled =!this.checked;                                
                                };
                          </script>
                          <label for="boxed-layout">CREDIT CARD</label>
                          <input type="text" class="form-control" id="card" placeholder="" disabled>
                      </li>
                      <li>
                         <input input id="cek_dana" type="checkbox" value="">
                         <script>
                            document.getElementById('cek_dana').onchange = function() {
                                document.getElementById('dana').disabled =!this.checked;                                
                                };
                          </script>
                          <label for="boxed-layout">PICKUP DANA</label>
                          <input type="text" class="form-control" id="dana" placeholder="" disabled>
                      </li>
                       <li>
                          <input input id="cek_kuasa" type="checkbox" value="">
                          <script>
                           document.getElementById('cek_kuasa').onchange = function() {
                                document.getElementById('kuasa').disabled =!this.checked;                                
                                };
                          </script>
                          <label for="boxed-layout">SURAT KUASA</label>
                          <input type="text" class="form-control" id="kuasa" placeholder="" disabled>
                      </li>
                       <li>
                          <input input id="cek_ttd" type="checkbox" value="">
                          <script>
                           document.getElementById('cek_ttd').onchange = function() {
                                document.getElementById('ttd').disabled =!this.checked;                                
                                };
                          </script>
                          <label for="boxed-layout">TTD</label>
                          <input type="text" class="form-control" id="ttd" placeholder="" disabled>
                      </li>
                       <li>
                          <input input id="cek_sewa" type="checkbox" value="">
                           <script>
                           document.getElementById('cek_sewa').onchange = function() {
                                document.getElementById('sewa').disabled =!this.checked;                                
                                };
                          </script>
                          <label for="boxed-layout">SURAT PERNYATAAN TINGGAL DI RUMAH SEWA</label>
                          <input type="text" class="form-control" id="sewa" placeholder="" disabled>
                      </li>
                    </ul>   
                </div>
            
        </div> -->
        </form>
                
</div>
      </div>
      </div> 
     
                        
    </div>

<!-- end of content -->







      </div>
      </div> 
     
                        
    </div>
    <div class="tab-pane fade" id="tab-example-5">
        <p>Commodo enim craft beer mlkshk aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthetic magna delectus mollit. Keytar helvetica VHS salvia yr, vero magna velit sapiente labore stumptown.</p>
        <p>Commodo enim craft beer mlkshk aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthetic magna delectus mollit. Keytar helvetica VHS salvia yr, vero magna velit sapiente labore stumptown.</p>
        <p>Commodo enim craft beer mlkshk aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthetic magna delectus mollit. Keytar helvetica VHS salvia yr, vero magna velit sapiente labore stumptown.</p>
        <p>Commodo enim craft beer mlkshk aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthetic magna delectus mollit. Keytar helvetica VHS salvia yr, vero magna velit sapiente labore stumptown.</p>
        <p>Commodo enim craft beer mlkshk aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthetic magna delectus mollit. Keytar helvetica VHS salvia yr, vero magna velit sapiente labore stumptown.</p>
        <p>Commodo enim craft beer mlkshk aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthetic magna delectus mollit. Keytar helvetica VHS salvia yr, vero magna velit sapiente labore stumptown.</p>
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
        $('.bootstrap-datepicker').datepicker({
            format: 'dd-M-yy'
        });
    });
/*url:'<?=base_url();?>entryp/Entryp/'+url,*/
</script>
<script>
/*function coba(){
 $.ajax({
  type: "post",
  url: "<?=base_url();?>entryp/Entryp/DTDaddData",
  cache: false,    
  data: $('#formm').serialize(),
  success: function(json){      
  try{  
   var obj = jQuery.parseJSON(json);
   alert( obj['STATUS']);
     
   
  }catch(e) {  
   alert('Exception while request..');
  }  
  },
  error: function(){      
   alert('Error while request..');
  }
 });
}*/
</script>

<!-- GENERAL CODE -->
<script >
/*$(document).ready(function(){
   $('form').submit(function(e) {
            e.preventDefault(); 
            
             $("#saveBtn").button().click(function() {

           // alert('Save Success');
                var url = 'DTDaddData';       
            
            
            
                         var first_name       = $("#first_namee").val();                                                                     

                       //  var jparams = "first_name="+first_name;
                          //console.log(first_name);
                            
                                $.ajax({

                                          type      : "POST",
                                          url:"<?=base_url();?>entryp/entryp/DTDaddData",
                                            dataType  : 'json',
                                          data      : {first_name : first_name},
                                         
                                          success   :function(result){
                                          console.log(result.status);
                                          if (result.status==0){
                                          alert('Error');
                                          }else{
                                             alert('Save Success');
                                             // reset();
                                                    
                                         }
                                        }   
                                   });   
                     }); 
          });
         
});
   */
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

<script src="<?=base_url();?>assets/select2-master/dist/js/select2.min.js"></script>
        <script>
            $(document).ready(function () {
                $("#product").select2({
                    placeholder: "Please Select"
                });
            });
</script>
<!-- Colorpicker -->

<!-- JAVASCRIPT FOR IDENTITY ADDRESS -->
<script type="text/javascript">

    $(function(){

        $.ajaxSetup({
        type:"POST",
        url: "<?php echo base_url('entryp/ambil_data')?>",
        cache: false,
        });

        $("#provinsi").change(function(){

            var value=$(this).val();
            if(value>0){
            $.ajax({
            data:{modul:'kota',id:value},
            success: function(respond){
            $("#kota").html(respond);
            $("#province_install_text").val($("#provinsi").find(":selected").text());
            }
            })
            }
            else
            {
                
                $('#kota').empty();
                $('#kecamatan').empty();
                $('#kelurahan').empty();
            }

        });

        $("#kota").change(function(){
            var value=$(this).val();
            if(value>0){
            $.ajax({
            data:{modul:'kecamatan',id:value},
            success: function(respond){
            $("#kecamatan").html(respond);
            $("#city_install_text").val($("#kota").find(":selected").text());
            }
            })
            }
            else
            {
                $('#kecamatan').empty();
                $('#kelurahan').empty();
            }
        })

        $("#kecamatan").change(function(){
            var value=$(this).val();
            if(value>0){
            $.ajax({
            data:{modul:'kelurahan',id:value},
            success: function(respond){
            $("#kelurahan").html(respond);
            $("#district_install_text").val($("#kecamatan").find(":selected").text());
            }
            })
            }
            else
            {
                $('#kelurahan').empty();
            } 
        })
        $("#kelurahan").change(function(){
            $("#subdistrict_install_text").val($("#kelurahan").find(":selected").text());
        })

    })

</script>

<!-- JAVASCRIPT FOR SELECT OPTION BOX INSTALLATION ADDRESS  -->
<script type="text/javascript">
    $(function(){

        $.ajaxSetup({
        type:"POST",
        url: "<?php echo base_url('entryp/ambil_data')?>",
        cache: false,
        });

        $("#province_install").change(function(){

            var value=$(this).val();
            if(value>0){
            $.ajax({
            data:{modul:'kota',id:value},
            success: function(respond){
            $("#city_install").html(respond);
            }
            })
            }
            else
            {
                
                $('#city_install').empty();
                $('#district_install').empty();
                $('#subdistrict_install').empty();
            }

        });

        $("#city_install").change(function(){
            var value=$(this).val();
            if(value>0){
            $.ajax({
            data:{modul:'kecamatan',id:value},
            success: function(respond){
            $("#district_install").html(respond);
            }
            })
            }
            else
            {
                $('#district_install').empty();
                $('#subdistrict_install').empty();
            }
        })

        $("#district_install").change(function(){
            var value=$(this).val();
            if(value>0){
            $.ajax({
            data:{modul:'kelurahan',id:value},
            success: function(respond){
            $("#subdistrict_install").html(respond);
            }
            })
            }
            else
            {
                $('#subdistrict_install').empty();
            } 
        })

    })
    
</script>

<!-- JAVASCRIPT FOR SELECT OPTION BOX BILLING ADDRESS -->
<script type="text/javascript">
     $(function(){

        $.ajaxSetup({
        type:"POST",
        url: "<?php echo base_url('entryp/ambil_data')?>",
        cache: false,
        });

        $("#province_billing").change(function(){

            var value=$(this).val();
            if(value>0){
            $.ajax({
            data:{modul:'kota',id:value},
            success: function(respond){
            $("#city_billing").html(respond);
            }
            })
            }
            else
            {
                
                $('#city_billing').empty();
                $('#district_billing').empty();
                $('#subdistrict_billing').empty();
            }

        });

        $("#city_billing").change(function(){
            var value=$(this).val();
            if(value>0){
            $.ajax({
            data:{modul:'kecamatan',id:value},
            success: function(respond){
            $("#district_billing").html(respond);
            }
            })
            }
            else
            {
                $('#district_billing').empty();
                $('#subdistrict_billing').empty();
            }
        })

        $("#district_billing").change(function(){
            var value=$(this).val();
            if(value>0){
            $.ajax({
            data:{modul:'kelurahan',id:value},
            success: function(respond){
            $("#subdistrict_billing").html(respond);
            }
            })
            }
            else
            {
                $('#subdistrict_billing').empty();
            } 
        })

    })
</script>

<script type="text/javascript">
var app = angular.module('valsys', []);
/*function myCtrl($scope) {

}*/
app.controller('myCtrl', function($scope,$http) {
    $scope.subcategory = true;
    $scope.addb = true;
    $scope.tablec = true;
    $scope.notex = true;
    $scope.saveb = true;
    $scope.idprospect='<?php echo $detail->PROSPECT_ID;?>';

     $scope.people = [
        ];
       
    
  $scope.addPerson = function(){
if(confirm("Are you sure to add data?")){
    var person = {
        idprospect:$scope.idprospect,
        name: $scope.name,
        age: $scope.age,
      
    };
    
    $scope.people.push(person);
    /*$http({
    url: "<?=base_url();?>entryp/Entryp/add_datadth",
    method: "POST",
    params: person
    });*/

    $http({
        method: 'POST',
        url: '<?=base_url();?>entryp/Entryp/admin_bfp_rem',
        data: person,
      });
   // console.log($http); 
    //todo here call controller
  }
  };
   
   $scope.removePerson = function(index){
    $scope.people.splice(index, 1);
   };    
   // console.log('asf');


    });
</script>

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