
 <?=$head?>
 <?=$side_menu?>

<div id="page-content-wrapper">

    <div id="page-content">
                
        <div class="container">
                    
<script type="text/javascript" src="<?=base_url();?>assets/widgets/parsley/parsley.js"></script>
<!-- JS DROPDOWN -->
    <script type="text/javascript" src="<?=base_url();?>assets/bootstrap/jquery.min.js"></script>
<script src="<?=base_url();?>assets/widgets/ang/angular.min.js"></script>
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
        <h3 class="title-hero">
            
        </h3>
        <div class="example-box-wrapper">
            <div class="timeline-box">
                <div class="tl-row">
                    <div class="tl-item">
                        <div class="tl-icon bg-green">
                            <i class="glyph-icon icon-cog"></i>
                        </div>
                        <div class="tl-panel">
                            3:21 PM
                        </div>
                        <div class="popover left">
                            <div class="arrow"></div>
                            <div class="popover-content">
                                <div class="tl-label bs-label label-success">New EP</div>
                                <p class="tl-content">PN. Notes.</p>
                                <div class="tl-time">
                                    <i class="glyph-icon icon-clock-o"></i>
                                    a few seconds ago
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tl-row">
                    <div class="tl-item float-right">
                        <div class="tl-icon bg-black">
                            <i class="glyph-icon icon-cog"></i>
                        </div>
                        <div class="tl-panel">
                            3:21 PM
                        </div>
                        <div class="popover right">
                            <div class="arrow"></div>
                            <div class="popover-content">
                                <div class="tl-label bs-label label-info">Pending Admin</div>
                                <p class="tl-content">PN. Notes.</p>
                                <div class="tl-time">
                                    <i class="glyph-icon icon-clock-o"></i>
                                    a few seconds ago
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tl-row">
                    <div class="tl-item">
                        <div class="tl-icon bg-green">
                            <i class="glyph-icon icon-cog"></i>
                        </div>
                        <div class="tl-panel">
                            3:21 PM
                        </div>
                        <div class="popover left">
                            <div class="arrow"></div>
                            <div class="popover-content">
                                <div class="tl-label bs-label label-success">Pending DTH</div>
                                <p class="tl-content">PN. Notes.</p>
                                <div class="tl-time">
                                    <i class="glyph-icon icon-clock-o"></i>
                                    a few seconds ago
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tl-row demo-margin">
                    <div class="tl-item float-right">
                        <div class="tl-icon bg-black">
                            <i class="glyph-icon icon-cog"></i>
                        </div>
                        <div class="tl-panel">
                            3:21 PM
                        </div>
                        <div class="popover right">
                            <div class="arrow"></div>
                            <div class="popover-content">
                                <div class="tl-label bs-label label-info">Final</div>
                                <p class="tl-content">PN. Notes.</p>
                                <div class="tl-time">
                                    <i class="glyph-icon icon-clock-o"></i>
                                    a few seconds ago
                                </div>
                            </div>
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
<form class="form-horizontal bordered-row" id="formm" data-parsley-validate="" method="POST" action="<?=base_url();?>entryp/Entryp/Update_EP_DTD_DB" enctype="multipart/form-data">
     <div class="form-group">
                            <label class="col-sm-3 control-label">Approval</label>
                          

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
                
</form> -->
</div>
</div>
</div>


 <input type="hidden" name="PROSPECT_ID" placeholder=""  class="form-control" value="<?php echo $detail->PROSPECT_ID;?>">
<input type="hidden" name="PROCESSID" placeholder=""  class="form-control" value="<?php echo $detail->processId;?>">
<input type="hidden" name="username" placeholder=""  class="form-control" value="0504211215">

<!-- start of content -->
 <div class="panel">
            <div class="panel-body">
                
                <div class="example-box-wrapper">
                    <ul class="list-group list-group-separator row list-group-icons">
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
                      <!--   <li class="col-md-3">
                            <a href="#tab-example-4" data-toggle="tab" class="list-group-item">
                                <i class="glyph-icon font-green icon-send"></i>
                                Check List
                            </a>
                        </li> -->
                        
                        
                    </ul>
                    <div class="tab-content">
                    
                    <div class="form-horizontal bordered-row" id="formm" name="formm" data-parsley-validate="" method="" action="" enctype="multipart/form-data">
                   <!--  <form class="form-horizontal bordered-row" id="formm" name="formm" data-parsley-validate="" > -->
    

<script>
                                
                                 /* function checkk4() {
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
                                    }else if(str == "Pending"){
                                         //showw();
                                        $("#optionapp4").hide();
                                        $("#optionrej4").hide();
                                    }

                                }*/
                                                
</script>
<script>
/*$(function(){
    $("#optionapp1").hide();
      $("#optionrej1").hide();
       $("#optionapp2").hide();
      $("#optionrej2").hide();
       $("#optionapp3").hide();
      $("#optionrej3").hide();
       $("#optionapp4").hide();
      $("#optionrej4").hide();
      
   
    
});*/
</script>
<script>
/*$(function(){
    $("#light").hide();
    
    
});*/
</script>
<script>
/*function valueChanged()
{
    if($('.colorCheckbox').is(":checked"))   
        $('#light').show();
    else
        $('#light').hide();
}*/
</script>
    <div class="tab-pane fade active in" id="tab-example-1">
        <div class="panel">
        <div class="panel-body">
        
        <div class="example-box-wrapper">
            
                <div class="row">
                    <div class="col-md-12">
                    <h3 class="title-hero">
                    Profile Customer Data
                    </h3>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Prospect Type</label>
                            <div class="col-sm-6">
                                    <input type="text" id="" name="PT1" value="<?php echo $detail->statusep;?>" required class="form-control" disabled="">
                            <select class="col-sm-3" id="cek" name="T1" ng-model="PT" class="required" >
                                     <!-- <option value="" selected="selected">Select</option> -->
                                     <option value="A">Approve</option>
                                      <option value="P">Pending</option>
                                     <option value="R">Reject</option>
                                     
                                </select>
                                
                                
                            <select class="col-sm-7 "  id="optionapp1" name="A1"  class="required" ng-hide="aa" ng-show="PT=='A'">
                                     <!-- <option value="" selected="selected">Select</option> -->
                                     <?php 
                                    foreach ($admin_approve as $pt) {
                                    echo "<option value='$pt[NOTE]'>$pt[NOTE]</option>";
                                    }
                                    ?>
                                     
                                </select>                                                        
                            
                          
                           <select class="col-sm-7" id="optionrej1" name="R1" class="required" ng-hide="rr" ng-show="PT=='R'">
                                     <!-- <option value="" selected="selected">Select</option> -->
                                    
                                     <?php 
                                    foreach ($admin_reject as $pt) {
                                    echo "<option value='$pt[NOTE]'>$pt[NOTE]</option>";
                                    }
                                    ?>
                                     
                                </select>
                            </div>

                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Hardware Status</label>
                            <div class="col-sm-6">
                                    <input type="text" id="" name="" value="<?php echo $detail->PROSPECT_ID;?>" required class="form-control" disabled="">
                                    <select class="col-sm-3" id="cek2" name="T2" ng-model="hs" class="required" >
                                    <!--  <option value="" selected="selected">Select</option> -->
                                    <option value="A">Approve</option>
                                      <option value="P">Pending</option>
                                     <option value="R">Reject</option>
                                     
                                </select>
                                
                                
                            <select class="col-sm-7 "  id="optionapp2" name="A2"  class="required" ng-hide="aa" ng-show="hs=='A'">
                                    <!--  <option value="" selected="selected">Select</option> -->
                                     <?php 
                                    foreach ($admin_approve as $pt) {
                                    echo "<option value='$pt[NOTE]'>$pt[NOTE]</option>";
                                    }
                                    ?>
                                     
                                </select>                                                        
                            
                          
                           <select class="col-sm-7" id="optionrej2" name="R2"  class="required" ng-hide="rr" ng-show="hs=='R'">
                                     <!-- <option value="" selected="selected">Select</option> -->
                                    
                                     <?php 
                                    foreach ($admin_reject as $pt) {
                                    echo "<option value='$pt[NOTE]'>$pt[NOTE]</option>";
                                    }
                                    ?>
                                     
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Prospect Number</label>
                            <div class="col-sm-6">
                                    <input type="text" id="" name="PN"  value="<?php echo $detail->PROSPECT_NBR;?>" required class="form-control" disabled="">
                                    <select class="col-sm-3" id="cek3" name="T3" ng-model="pn" class="required" >
                                    <!--  <option value="" selected="selected">Select</option> -->
                                     <option value="A">Approve</option>
                                      <option value="P">Pending</option>
                                     <option value="R">Reject</option>
                                     
                                </select>
                                
                                
                            <select class="col-sm-7 "  id="optionapp3" name="A3"  class="required" ng-hide="aa" ng-show="pn=='A'">
                                    <!--  <option value="" selected="selected">Select</option> -->
                                     <?php 
                                    foreach ($admin_approve as $pt) {
                                    echo "<option value='$pt[NOTE]'>$pt[NOTE]</option>";
                                    }
                                    ?>
                                     
                                </select>                                                        
                            
                          
                           <select class="col-sm-7" id="optionrej3" name="R3"  class="required" ng-hide="rr" ng-show="pn=='R'">
                                    <!--  <option value="" selected="selected">Select</option> -->
                                    
                                     <?php 
                                    foreach ($admin_reject as $pt) {
                                    echo "<option value='$pt[NOTE]'>$pt[NOTE]</option>";
                                    }
                                    ?>
                                      </select>
                            </div>
                        </div>

                         <div class="form-group">
                            <label  class=" col-sm-3 control-label"> <label class="font-red">*</label>Identity Type</label>
                            <div class="col-sm-6">
                                    <input type="text" id="" name="IT"  value="<?php echo $detail->PROSPECT_TYPE;?>" required class="form-control" disabled="">
                                    <select class="col-sm-3" id="cek4" name="T4" ng-model="it" class="required" >
                                    <!--  <option value="" selected="selected">Select</option> -->
                                    <option value="A">Approve</option>
                                      <option value="P">Pending</option>
                                     <option value="R">Reject</option>
                                     
                                </select>
                                
                                
                            <select class="col-sm-7 "  id="optionapp4" name="A4"  class="required" ng-hide="aa" ng-show="it=='A'">
                                    <!--  <option value="" selected="selected">Select</option> -->
                                     <?php 
                                    foreach ($admin_approve as $pt) {
                                    echo "<option value='$pt[NOTE]'>$pt[NOTE]</option>";
                                    }
                                    ?>
                                     
                                </select>                                                        
                            
                          
                           <select class="col-sm-7" id="optionrej4" name="R4" class="required" ng-hide="rr" ng-show="it=='R'">
                                    <!--  <option value="" selected="selected">Select</option> -->
                                    
                                     <?php 
                                    foreach ($admin_reject as $pt) {
                                    echo "<option value='$pt[NOTE]'>$pt[NOTE]</option>";
                                    }
                                    ?>
                                      </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label"><label class="font-red">*</label>Name</label>
                            <div class="col-sm-6">
                                    <input type="text" id="" name="" ng-model="" value="<?php echo $detail->PROSPECT_TYPE;?>" required class="form-control" disabled="">
                                   
                            </div>
                        </div>
                        <div class="form-group">
                    <label class="col-sm-3 control-label"><label class="font-red">*</label>Gender</label>
                   <div class="col-sm-6">
                                    <input type="text" id="" name="" ng-model="" value="<?php echo $detail->PROSPECT_TYPE;?>" required class="form-control" disabled="">
                                    
                            </div>
                </div>
                <div class="form-group">
                            <label class="col-sm-3 control-label"><label class="font-red">*</label>Religion</label>
                            <div class="col-sm-6">
                                    <input type="text" id="" name="" ng-model="" value="<?php echo $detail->PROSPECT_TYPE;?>" required class="form-control" disabled="">
                            </div>
                        </div>
                         <div class="form-group">
                            <label class="col-sm-3 control-label"><label class="font-red">*</label>Place of Birth</label>
                            <div class="col-sm-6">
                                    <input type="text" id="" name="" ng-model="" value="<?php echo $detail->PROSPECT_TYPE;?>" required class="form-control" disabled="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="" class="col-sm-3 control-label"><label class="font-red">*</label>Date of Birth</label>
                           <div class="col-sm-6">
                                    <input type="text" id="" name="" ng-model="" value="<?php echo $detail->PROSPECT_TYPE;?>" required class="form-control" disabled="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="" class="col-sm-3 control-label"><label class="font-red"></label><input ng-model="lightv" class="colorCheckbox" type="checkbox" name="colorCheckbox" value="Active"  >Light Verification</label>
                           <div class="col-sm-6">
                                    <input type="text" id="light" name="light" value="" ng-hide="light" ng-show="lightv" required class="form-control" >
                            </div>
                        </div>
                        </div>
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
                        
                        <div class="bg-default text-center pad20A mrg25T">
                    <button name="sub" id="saveBtn" class="btn btn-lg btn-primary">Save</button>
                        </div>
                       
                        </div>
                        </div>
                        </div>
                        </form>
<?php
}
?>

                        <div class="panel">
    <div class="panel-body">
        
        <div class="example-box-wrapper">
           
                <div class="row">
                    <div class="col-md-6">
                    <h3 class="title-hero">
                      Address of Identity Card
                    </h3>
                        <div class="form-group">
                            <label class="col-sm-3 control-label"><label class="font-red">*</label>Address</label>
                            <div class="col-sm-6">
                                <textarea id="" name="" ng-model="" placeholder="Identity Address" required class="form-control" disabled=""></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Province</label>
                           <div class="col-sm-6">
                                    <input type="text" id="" name="" ng-model="" value="<?php echo $detail->PROSPECT_TYPE;?>" required class="form-control" disabled="">
                            </div>
                        </div>
                       <div class="form-group">
                            <label class="col-sm-3 control-label">City</label>
                            <div class="col-sm-6">
                                    <input type="text" id="" name="" ng-model="" value="<?php echo $detail->PROSPECT_TYPE;?>" required class="form-control" disabled="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">District</label>
                           <div class="col-sm-6">
                                    <input type="text" id="" name="" ng-model="" value="<?php echo $detail->PROSPECT_TYPE;?>" required class="form-control" disabled="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Sub District</label>
                           <div class="col-sm-6">
                                    <input type="text" id="" name="" ng-model="" value="<?php echo $detail->PROSPECT_TYPE;?>" required class="form-control" disabled="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label"><label class="font-red">*</label>Zipcode</label>
                           <div class="col-sm-6">
                                    <input type="text" id="" name="" ng-model="" value="<?php echo $detail->PROSPECT_TYPE;?>" required class="form-control" disabled="">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="" class="col-sm-3 control-label"><label class="font-red">*</label>Expired Date</label>
                           <div class="col-sm-6">
                                    <input type="text" id="" name="" ng-model="" value="<?php echo $detail->PROSPECT_TYPE;?>" required class="form-control" disabled="">
                            </div>
                        </div>
                        </div>
                        <div class="col-md-6">
                    <div class="form-group">
                            <label class="col-sm-3 control-label"></label>
                            <div class="col-sm-6">
                               
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="" class="col-sm-3 control-label"><label class="font-red">*</label>Installation Date</label>
                           <div class="col-sm-6">
                                    <input type="text" id="" name="" ng-model="" value="<?php echo $detail->PROSPECT_TYPE;?>" required class="form-control" disabled="">
                            </div>
                        </div>
                         <div class="form-group">
                            <label for="" class="col-sm-3 control-label"><label class="font-red">*</label>Installation Time</label>
                            <div class="col-sm-6">
                                    <input type="text" id="" name="" ng-model="" value="<?php echo $detail->PROSPECT_TYPE;?>" required class="form-control" disabled="">
                            </div>
                        </div>
                         <div class="form-group">
                            <label for="" class="col-sm-3 control-label"><label class="font-red">*</label>Confirmation Date Start</label>
                           <div class="col-sm-6">
                                    <input type="text" id="" name="" ng-model="" value="<?php echo $detail->PROSPECT_TYPE;?>" required class="form-control" disabled="">
                            </div>
                        </div>
                         <div class="form-group">
                            <label for="" class="col-sm-3 control-label"><label class="font-red">*</label>Confirmation  Time Start</label>
                           <div class="col-sm-6">
                                    <input type="text" id="" name="" ng-model="" value="<?php echo $detail->PROSPECT_TYPE;?>" required class="form-control" disabled="">
                            </div>
                        </div>
                         <div class="form-group">
                            <label for="" class="col-sm-3 control-label"><label class="font-red">*</label>Confirmation Date End</label>
                          <div class="col-sm-6">
                                    <input type="text" id="" name="" ng-model="" value="<?php echo $detail->PROSPECT_TYPE;?>" required class="form-control" disabled="">
                            </div>
                        </div>
                         <div class="form-group">
                            <label for="" class="col-sm-3 control-label"><label class="font-red">*</label>Confirmation Time End</label>
                           <div class="col-sm-6">
                                    <input type="text" id="" name="" ng-model="" value="<?php echo $detail->PROSPECT_TYPE;?>" required class="form-control" disabled="">
                            </div>
                        </div>
                       
                        
                        <div class="form-group">
                            <label class="col-sm-3 control-label"></label>
                            <div class="col-sm-6">
                               
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
                                  Installation Address
                                </h3>
                                <div class="form-group">
                                <label class="col-sm-3 control-label">Installation Address Same with Identity Address</label>
                                <div class="col-sm-6">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="checkbox checkbox-primary">
                                                <label>
                                                    <input type="checkbox" id="inlineCheckbox110" class="custom-checkbox">
                                                   
                                                </label>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label"><label class="font-red">*</label>Installation Address</label>
                            <div class="col-sm-6">
                                <textarea type="text" ng-model="INSTALL_ADDRESS" id="installaddress" placeholder="Installation Address" required class="form-control" disabled=""></textarea>
                                <script type="text/javascript">
                                document.getElementById('inlineCheckbox110').onchange = function() {
                                document.getElementById('installaddress').readOnly = this.checked;
                                $('#installaddress').val($('#street_id').val());
                                
                                if(this.checked)
                                {
                                    //remove input type text dan menambah select option dengan id province install
                                    //province
                                    $('#province_install').remove();
                                    var id = "province_install_text" ;
                                    var val = $("#provinsi").find(":selected").text();
                                    document.getElementById('div_province_install').innerHTML +=  
                                    "<div><input type='text' id='"+id+"' name='"+id+"' value='"+val+"' readOnly /></div>";

                                    //remove input type text dan menambah select option dengan id province install
                                    //city
                                    $('#city_install').remove();
                                    var id = "city_install_text" ;
                                    var val = $("#kota").find(":selected").text();
                                    document.getElementById('div_city_install').innerHTML +=  
                                    "<div><input type='text' id='"+id+"' name='"+id+"' value='"+val+"' readOnly /></div>";

                                    //district
                                    $('#district_install').remove();
                                    var id = "district_install_text" ;
                                    var val = $("#kecamatan").find(":selected").text();
                                    document.getElementById('div_district_install').innerHTML +=  
                                    "<div><input type='text' id='"+id+"' name='"+id+"' value='"+val+"' readOnly /></div>";

                                    //sub district
                                    $('#subdistrict_install').remove();
                                    var id = "subdistrict_install_text" ;
                                    var val = $("#kelurahan").find(":selected").text();
                                    document.getElementById('div_subdistrict_install').innerHTML +=  
                                    "<div><input type='text' id='"+id+"' name='"+id+"' value='"+val+"' readOnly /></div>";
                                    

                                }
                                else
                                {
                                    //remove input type text dan menambah select option dengan id province install
                                    //province
                                    $('#province_install_text').remove();
                                    var id = "province_install" ;
                                    document.getElementById('div_province_install').innerHTML +=  
                                    "<div><select id='"+id+"' name='"+id+"'><option value=''>--pilih--</option>'<?php 
                                    foreach ($provinsi as $prov) {
                                    echo "<option value='$prov[province_id]'>$prov[province_name]</option>";
                                    }
                                    ?>'</select></div>";

                                    //city
                                    $('#city_install_text').remove();
                                    var id = "city_install" ;
                                    document.getElementById('div_city_install').innerHTML +=  
                                    "<div><select id='"+id+"' name='"+id+"'></select></div>";

                                    //district
                                    $('#district_install_text').remove();
                                    var id = "district_install" ;
                                    document.getElementById('div_district_install').innerHTML +=  
                                    "<div><select id='"+id+"' name='"+id+"'></select></div>";

                                    //subdistrict
                                    $('#subdistrict_install_text').remove();
                                    var id = "subdistrict_install" ;
                                    document.getElementById('div_subdistrict_install').innerHTML +=  
                                    "<div><select id='"+id+"' name='"+id+"'></select></div>";


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
                                            //$("#province_install_text").val($("#provinsi").find(":selected").text());
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

                                        $('#city_install').change(function(){
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

                                        $('#district_install').change(function(){
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



                                                                                                            
                                }                                                                             
                                                                                                       
                                
                                
                                };

                                </script>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="col-sm-3 control-label"><label class="font-red">*</label>Direction/Landmark</label>
                            <div class="col-sm-6">
                                <textarea type="text" ng-model="INSTALL_LANDMARK" id="landmark" placeholder="LANDMARK" required class="form-control" disabled=""></textarea>
                            </div>
                        </div>
                        </div>
                         <div class="col-md-6">
                         <h3 class="title-hero">
                   
                    </h3><br>


                        <div class="form-group">
                            <label class="col-sm-3 control-label">Province</label>
                            <div class="col-sm-6">
                                    <input type="text" id="" name="" ng-model="" value="<?php echo $detail->PROSPECT_TYPE;?>" required class="form-control" disabled="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">City</label>
                            <div class="col-sm-6">
                                    <input type="text" id="" name="" ng-model="" value="<?php echo $detail->PROSPECT_TYPE;?>" required class="form-control" disabled="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">District</label>
                            <div class="col-sm-6">
                                    <input type="text" id="" name="" ng-model="" value="<?php echo $detail->PROSPECT_TYPE;?>" required class="form-control" disabled="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Sub District</label>
                           <div class="col-sm-6">
                                    <input type="text" id="" name="" ng-model="" value="<?php echo $detail->PROSPECT_TYPE;?>" required class="form-control" disabled="">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label"><label class="font-red">*</label>Zipcode</label>
                            <div class="col-sm-6">
                                    <input type="text" id="" name="" ng-model="" value="<?php echo $detail->PROSPECT_TYPE;?>" required class="form-control" disabled="">
                            </div>
                        </div>
                        <br>

                        <div class="form-group">
                           
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
                      Billing Address
                    </h3>
                    <div class="form-group">
                    <label class="col-sm-3 control-label">Billing Address Same with Identity Address</label>
                    <div class="col-sm-6">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="checkbox checkbox-primary">
                                    <label>
                                        <input type="checkbox" id="inlineCheckbox1101" class="custom-checkbox">
                                    </label>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
                <script>
                    document.getElementById('inlineCheckbox1101').onchange = function() {
                    document.getElementById('address_billing').readOnly = this.checked;
                    $('#address_billing').val($('#street_id').val());
                    
                    if(this.checked)
                    {
                        document.getElementById("inlineCheckbox1102").disabled= true;
                        //remove input type text dan menambah select option dengan id province install
                        //province
                        $('#province_billing').remove();
                        var id = "province_billing_text" ;
                        var val = $("#provinsi").find(":selected").text();
                        document.getElementById('div_province_billing').innerHTML +=  
                        "<div><input type='text' id='"+id+"' name='"+id+"' value='"+val+"' disabled /></div>";

                        //remove input type text dan menambah select option dengan id province install
                        //city
                        $('#city_billing').remove();
                        var id = "city_billing_text" ;
                        var val = $("#kota").find(":selected").text();
                        document.getElementById('div_city_billing').innerHTML +=  
                        "<div><input type='text' id='"+id+"' name='"+id+"' value='"+val+"' disabled /></div>";

                        //district
                        $('#district_billing').remove();
                        var id = "district_billing_text" ;
                        var val = $("#kecamatan").find(":selected").text();
                        document.getElementById('div_district_billing').innerHTML +=  
                        "<div><input type='text' id='"+id+"' name='"+id+"' value='"+val+"' disabled /></div>";

                        //sub district
                        $('#subdistrict_billing').remove();
                        var id = "subdistrict_billing_text" ;
                        var val = $("#kelurahan").find(":selected").text();
                        document.getElementById('div_subdistrict_billing').innerHTML +=  
                        "<div><input type='text' id='"+id+"' name='"+id+"' value='"+val+"' disabled /></div>";
                        

                    }
                    else
                    {
                        document.getElementById("inlineCheckbox1102").disabled= false;
                        //remove input type text dan menambah select option dengan id province install
                        //province
                        $('#province_billing_text').remove();
                        var id = "province_billing" ;
                        document.getElementById('div_province_billing').innerHTML +=  
                        "<div><select id='"+id+"' name='"+id+"'><option value=''>--pilih--</option>'<?php 
                        foreach ($provinsi as $prov) {
                        echo "<option value='$prov[province_id]'>$prov[province_name]</option>";
                        }
                        ?>'</select></div>";

                        //city
                        $('#city_billing_text').remove();
                        var id = "city_billing" ;
                        document.getElementById('div_city_billing').innerHTML +=  
                        "<div><select id='"+id+"' name='"+id+"'></select></div>";

                        //district
                        $('#district_billing_text').remove();
                        var id = "district_billing" ;
                        document.getElementById('div_district_billing').innerHTML +=  
                        "<div><select id='"+id+"' name='"+id+"'></select></div>";

                        //subdistrict
                        $('#subdistrict_billing_text').remove();
                        var id = "subdistrict_billing" ;
                        document.getElementById('div_subdistrict_billing').innerHTML +=  
                        "<div><select id='"+id+"' name='"+id+"'></select></div>";


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
                                //$("#province_install_text").val($("#provinsi").find(":selected").text());
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

                            $('#city_billing').change(function(){
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

                            $('#district_billing').change(function(){
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
                                                                                                
                    }                                      
                    document.getElementById('zipc').readOnly = this.checked;
                    $('#zipc_install').val($('#zipc_id').val());
                    };
                </script>
                 <div class="form-group">
                    <label class="col-sm-3 control-label">Billing Address Same with Installation Address</label>
                    <div class="col-sm-6">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="checkbox checkbox-primary">
                                    <label>
                                        <input type="checkbox" id="inlineCheckbox1102" class="custom-checkbox">
                                       
                                    </label>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
                <script>
                    document.getElementById('inlineCheckbox1102').onchange = function() {
                    document.getElementById('address_billing').readOnly = this.checked;
                    $('#address_billing').val($('#installaddress').val());
                    
                    if(this.checked)
                    {
                        document.getElementById("inlineCheckbox1101").disabled= true;
                        //remove input type text dan menambah select option dengan id province install
                        //province
                        $('#province_billing').remove();
                        var id = "province_billing_text" ;
                        var val = $("#province_install").find(":selected").text();
                        document.getElementById('div_province_billing').innerHTML +=  
                        "<div><input type='text' id='"+id+"' name='"+id+"' value='"+val+"' disabled /></div>";

                        //remove input type text dan menambah select option dengan id province install
                        //city
                        $('#city_billing').remove();
                        var id = "city_billing_text" ;
                        var val = $("#city_install").find(":selected").text();
                        document.getElementById('div_city_billing').innerHTML +=  
                        "<div><input type='text' id='"+id+"' name='"+id+"' value='"+val+"' disabled /></div>";

                        //district
                        $('#district_billing').remove();
                        var id = "district_billing_text" ;
                        var val = $("#district_install").find(":selected").text();
                        document.getElementById('div_district_billing').innerHTML +=  
                        "<div><input type='text' id='"+id+"' name='"+id+"' value='"+val+"' disabled /></div>";

                        //sub district
                        $('#subdistrict_billing').remove();
                        var id = "subdistrict_billing_text" ;
                        var val = $("#subdistrict_install").find(":selected").text();
                        document.getElementById('div_subdistrict_billing').innerHTML +=  
                        "<div><input type='text' id='"+id+"' name='"+id+"' value='"+val+"' disabled /></div>";
                        

                    }
                    else
                    {
                        document.getElementById("inlineCheckbox1101").disabled= false;
                        //remove input type text dan menambah select option dengan id province install
                        //province
                        $('#province_billing_text').remove();
                        var id = "province_billing" ;
                        document.getElementById('div_province_billing').innerHTML +=  
                        "<div><select id='"+id+"' name='"+id+"'><option value=''>--pilih--</option>'<?php 
                        foreach ($provinsi as $prov) {
                        echo "<option value='$prov[province_id]'>$prov[province_name]</option>";
                        }
                        ?>'</select></div>";

                        //city
                        $('#city_billing_text').remove();
                        var id = "city_billing" ;
                        document.getElementById('div_city_billing').innerHTML +=  
                        "<div><select id='"+id+"' name='"+id+"'></select></div>";

                        //district
                        $('#district_billing_text').remove();
                        var id = "district_billing" ;
                        document.getElementById('div_district_billing').innerHTML +=  
                        "<div><select id='"+id+"' name='"+id+"'></select></div>";

                        //subdistrict
                        $('#subdistrict_billing_text').remove();
                        var id = "subdistrict_billing" ;
                        document.getElementById('div_subdistrict_billing').innerHTML +=  
                        "<div><select id='"+id+"' name='"+id+"'></select></div>";


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
                                //$("#province_install_text").val($("#provinsi").find(":selected").text());
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

                            $('#city_billing').change(function(){
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

                            $('#district_billing').change(function(){
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
                                                                                                
                    } 


                    document.getElementById('zipc').readOnly = this.checked;
                    $('#zipc_install').val($('#zipc_id').val());
                    };
                </script>

                        <div class="form-group">
                            <label class="col-sm-3 control-label">Billing Address</label>
                            <div class="col-sm-6">
                                <textarea ng-model="ADDRESS_BILLING" id="address_billing" type="text" placeholder="" class="form-control" disabled=""></textarea>
                            </div>
                        </div>
                       
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Province</label>
                            <div class="col-sm-6">
                                    <input type="text" id="" name="" ng-model="" value="<?php echo $detail->PROSPECT_TYPE;?>" required class="form-control" disabled="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">City</label>
                            <div class="col-sm-6">
                                    <input type="text" id="" name="" ng-model="" value="<?php echo $detail->PROSPECT_TYPE;?>" required class="form-control" disabled="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">District</label>
                            <div class="col-sm-6">
                                    <input type="text" id="" name="" ng-model="" value="<?php echo $detail->PROSPECT_TYPE;?>" required class="form-control" disabled="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Sub District</label>
                            <div class="col-sm-6">
                                    <input type="text" id="" name="" ng-model="" value="<?php echo $detail->PROSPECT_TYPE;?>" required class="form-control" disabled="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Billing Zipcode</label>
                            <div class="col-sm-6">
                                    <input type="text" id="" name="" ng-model="" value="<?php echo $detail->PROSPECT_TYPE;?>" required class="form-control" disabled="">
                            </div>
                        </div>
                        </div>
                        <div class="col-md-6">
                    <h3 class="title-hero">
                         
                    </h3><br>

                        
                        <div class="form-group">
                            <label class="col-sm-3 control-label"><label class="font-red">*</label>Phone (House)</label>
                            <div class="col-sm-6">
                                    <input type="text" id="" name="" ng-model="" value="<?php echo $detail->PROSPECT_TYPE;?>" required class="form-control" disabled="">
                            </div>
                        </div>
                         <div class="form-group">
                            <label class="col-sm-3 control-label"><label class="font-red">*</label>Phone (HP)</label>
                            <div class="col-sm-6">
                                    <input type="text" id="" name="" ng-model="" value="<?php echo $detail->PROSPECT_TYPE;?>" required class="form-control" disabled="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Email</label>
                            <div class="col-sm-6">
                                    <input type="text" id="" name="" ng-model="" value="<?php echo $detail->PROSPECT_TYPE;?>" required class="form-control" disabled="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">House Type</label>
                            <div class="col-sm-6">
                                    <input type="text" id="" name="" ng-model="" value="<?php echo $detail->PROSPECT_TYPE;?>" required class="form-control" disabled="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">House Status</label>
                            <div class="col-sm-6">
                                    <input type="text" id="" name="" ng-model="" value="<?php echo $detail->PROSPECT_TYPE;?>" required class="form-control" disabled="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Occupation</label>
                            <div class="col-sm-6">
                                    <input type="text" id="" name="" ng-model="" value="<?php echo $detail->PROSPECT_TYPE;?>" required class="form-control" disabled="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Income</label>
                            <div class="col-sm-6">
                                    <input type="text" id="" name="" ng-model="" value="<?php echo $detail->PROSPECT_TYPE;?>" required class="form-control" disabled="">
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
                      File Upload
                    </h3>
                   
                    <div class="form-group">
                    <label class="col-sm-3 control-label"><label class="font-red">*</label>Identity Card</label>
                    <div class="col-sm-6">
                        <input ng-model="IDENTITY_FILEUPLOAD" type="file" size="20" name="filename" class="form-control" required id="userfile">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label"><label class="font-red">*</label>Payment Receipt</label>
                    <div class="col-sm-6">
                        <input ng-model="PAYMENT_FILEUPLOAD" type="file" class="form-control" required id="">
                    </div>
                </div>
                       <div class="form-group">
                    <label class="col-sm-3 control-label">Other Document</label>
                    <div class="col-sm-6">
                        <input ng-model="OTHERDOCUMENT_FILEUPLOAD" type="file" class="form-control" required id="">
                    </div>
                </div>
                    </div>
                     <div class="col-md-6">
                    <h3 class="title-hero">
                      Emergency (different house)
                    </h3>
                   
                    <div class="form-group">
                            <label class="col-sm-3 control-label"><label class="font-red">*</label>Name</label>
                            <div class="col-sm-6">
                                    <input type="text" id="" name="" ng-model="" value="<?php echo $detail->PROSPECT_TYPE;?>" required class="form-control" disabled="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label"><label class="font-red">*</label>Sibling Relationship</label>
                            <div class="col-sm-6">
                                    <input type="text" id="" name="" ng-model="" value="<?php echo $detail->PROSPECT_TYPE;?>" required class="form-control" disabled="">
                            </div>
                        </div>
                       <div class="form-group">
                            <label class="col-sm-3 control-label"><label class="font-red">*</label>Phone (House)</label>
                            <div class="col-sm-6">
                                    <input type="text" id="" name="" ng-model="" value="<?php echo $detail->PROSPECT_TYPE;?>" required class="form-control" disabled="">
                            </div>
                        </div>
                       <div class="form-group">
                            <label class="col-sm-3 control-label"><label class="font-red">*</label>Phone (HP)</label>
                            <div class="col-sm-6">
                                    <input type="text" id="" name="" ng-model="" value="<?php echo $detail->PROSPECT_TYPE;?>" required class="form-control" disabled="">
                            </div>
                        </div>
                       <div class="form-group">
                            <label class="col-sm-3 control-label"><label class="font-red">*</label>Address</label>
                            <div class="col-sm-6">
                               <textarea id="" name="" ng-model="" placeholder="Identity Address" required class="form-control" disabled=""></textarea>
                            </div>
                        </div>
                        </div>
                       
               




                </div>

                <!-- <div class="bg-default content-box text-center pad20A mrg25T">
                    <button class="btn btn-lg btn-primary">Validate form</button>
                </div> -->
            
        </div>      

        </div>
    
        </div>
<div class="panel">
        
                            <div class="panel-body">
            
            <div class="example-box-wrapper">
                
                    <div class="row">

                         <div class="col-md-6">
                        <h3 class="title-hero">
                          SALES PROFILE DATA
                        </h3>
                        
                        
                        <div class="form-group">
                                <label class="col-sm-3 control-label"><label class="font-red">*</label>Name</label>
                            <div class="col-sm-6">
                                    <input type="text" id="" name="" ng-model="" value="<?php echo $detail->PROSPECT_TYPE;?>" required class="form-control" disabled="">
                            </div>
                            </div>
                           <div class="form-group">
                                <label class="col-sm-3 control-label"><label class="font-red">*</label>NIK</label>
                                <div class="col-sm-6">
                                    <input type="text" id="" name="" ng-model="" value="<?php echo $detail->PROSPECT_TYPE;?>" required class="form-control" disabled="">
                            </div>
                            </div>
                             <div class="form-group">
                                <label class="col-sm-3 control-label"><label class="font-red">*</label>Different Installation Causes</label>
                                <div class="col-sm-6">
                                    <input type="text" id="" name="" ng-model="" value="<?php echo $detail->PROSPECT_TYPE;?>" required class="form-control" disabled="">
                            </div>
                            </div>
                            </div>
                                <div class="col-md-6">
                                  <div class="form-group">
                                <label class="col-sm-3 control-label"></label>
                                <div class="col-sm-6">
                                   
                                </div>
                            </div>
                           <div class="form-group">
                                <label class="col-sm-3 control-label"><label class="font-red">*</label>Sales Code</label>
                                <div class="col-sm-6">
                                    <input type="text" id="" name="" ng-model="" value="<?php echo $detail->PROSPECT_TYPE;?>" required class="form-control" disabled="">
                            </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label"><label class="font-red">*</label>Office Branch</label>
                                <div class="col-sm-6">
                                    <input type="text" id="" name="" ng-model="" value="<?php echo $detail->PROSPECT_TYPE;?>" required class="form-control" disabled="">
                            </div>
                            </div>
                              <div class="form-group">
                                <label class="col-sm-3 control-label"><label class="font-red">*</label>Name of Head Branch</label>
                                <div class="col-sm-6">
                                    <input type="text" id="" name="" ng-model="" value="<?php echo $detail->PROSPECT_TYPE;?>" required class="form-control" disabled="">
                            </div>
                            </div>
                           
                            </div>

                            </div>
                            
                            <button value="Cetak Dokumen Beda Alamat" onclick="javascript:void window.open('<?=base_url();?>entryp/Entryp/form_bedaalamat','1419062987076','width=600,height=350,toolbar=0,menubar=0,location=0,status=1,scrollbars=1,resizable=1,left=0,top=0');return false;" >Cetak Dokumen Beda Alamat</button>
     
                            </div>

                            </div>
                            </div>
</div>

 <!-- <div class="form-group">
                           <button name="subject" type="submit" value="">coba</button>
                        </div> -->

   


    <div class="tab-pane fade" id="tab-example-2">
      <div class="panel">
      <div class="panel-body">
        
        <div class="example-box-wrapper">
     
                <div class="row">
                    <div class="col-md-6">
                    <h3 class="title-hero">
                    Package
                    </h3>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Brand</label>
                            <div class="col-sm-6">
                                    <input type="text" id="" name="" ng-model="" value="<?php echo $detail->PROSPECT_TYPE;?>" required class="form-control" disabled="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Status</label>
                            <div class="col-sm-6">
                                <select id="status_package"name="status_package" class="" onChange="check();"> 
                                 <option value="" >Select</option>
                                 <option value="single">Single</option>
                                 <option value="multi">Multi</option>                                 
                                </select>
                        <script>      
                          function check() {
                            var el = document.getElementById("status_package");
                            var str = el.options[el.selectedIndex].text;
                            if(str == "Select" || str == "Single" ) {
                               hide();
                            }else {
                                 show();
                            }

                        }
                        function hide(){
                            document.getElementById('more_fields').style.visibility='hidden';
                        }
                        function show(){
                             document.getElementById('more_fields').style.visibility='visible';
                        }                       
                        </script>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Available Promo</label>
                            <div class="col-sm-6">
                                <select name="promotion" class="required" style="width: 200px;">
                                 <?php 
                                    foreach ($promotion as $promotion) {
                                    echo "<option value='$promotion[PROMOTION_ID]'>$promotion[PROMOTION_DESC]</option>";
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                        
                       
                    </div>
                    <div class="col-md-6">
                    <h3 class="title-hero">
                    Available Package
                    </h3>
                    
                    <input type="button" id="more_fields" onclick="add_fields();" value="Add Package" style="margin-left: 0px;visibility:hidden;"  />
                    <br /><br />
                        <div id="add_package"> <!-- add package field -->
                          <div class="form-group">
                              <label class="col-sm-3 control-label">Basic</label>
                              <div class="col-sm-6">
                                  <select id="package_single" name="package_single" ng-model="PACKAGE_SINGLE" class="required">
                                   <option value="">Select</option>
                                   <option value="GL2014">GALAXY 2014</option>
                                   <option value="GLISAT">GALAXY ISAT</option>
                                   <option value="GLISAT">GALAXY ISAT</option>
                                   <option value="GLXL">GALAXY XL</option>
                                  </select>
                              </div>
                          </div>
                         
                          <div class="form-group">
                              <label class="col-sm-3 control-label">Alacarte</label>
                              <div class="col-sm-6">
                                <select id="product" name="product[]" ng-model="PACKAGE_PRODUK" class="required" multiple="multiple" style="width:200px;" >
                                    <option value=""></option>
                                    <?php 
                                    foreach ($produk as $prod) {
                                    echo "<option value='$prod[PRODUCT_ID]'>$prod[PRODUCT_NAME]</option>";
                                    }
                                    ?>
                                </select>

                              </div>
                              
                          </div>  
                        </div> <!-- end of add package field -->
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
                    Estimated Costs
                    </h3>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Installation</label>
                            <div class="col-sm-6">
                                <h3>Rp. 111111</h3>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Cost Package</label>
                            <div class="col-sm-6">
                                <h3>Rp. 111111</h3>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Alacarte</label>
                            <div class="col-sm-6">
                                <h3>Rp. 111111</h3>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Promo</label>
                            <div class="col-sm-6">
                                <h3>Rp. 111111</h3>
                            </div>
                        </div>
                       
                       
                        
                       
                    </div>
                    </div>
                    
                    </div>
                    </div>
                    </div>
    </div>
    <div class="tab-pane fade" id="tab-example-3">
      <div class="panel">
      <div class="panel-body">
        
        <div class="example-box-wrapper">
           
                <div class="row">
                    <div class="col-md-6">
                    <h3 class="title-hero">
                   Payment Data
                    </h3>
                        <div class="form-group">
                            <label class="col-sm-3 control-label"><label class="font-red">*</label>Payment Method</label>
                            <div class="col-sm-6">
                                    <input type="text" id="" name="" ng-model="" value="<?php echo $detail->PROSPECT_TYPE;?>" required class="form-control" disabled="">
                            </div>
                            
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label"><label class="font-red">*</label>Card Type</label>
                            <div class="col-sm-6">
                                    <input type="text" id="" name="" ng-model="" value="<?php echo $detail->PROSPECT_TYPE;?>" required class="form-control" disabled="">
                            </div>
                        </div>
                          <div class="form-group">
                            <label class="col-sm-3 control-label"><label class="font-red">*</label>Card Number</label>
                            <div class="col-sm-6">
                                    <input type="text" id="" name="" ng-model="" value="<?php echo $detail->PROSPECT_TYPE;?>" required class="form-control" disabled="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label"><label class="font-red">*</label>Bank Account Number</label>
                            <div class="col-sm-6">
                                    <input type="text" id="" name="" ng-model="" value="<?php echo $detail->PROSPECT_TYPE;?>" required class="form-control" disabled="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label"><label class="font-red">*</label>Name</label>
                            <div class="col-sm-6">
                                    <input type="text" id="" name="" ng-model="" value="<?php echo $detail->PROSPECT_TYPE;?>" required class="form-control" disabled="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label"><label class="font-red">*</label>Bank Name</label>
                            <div class="col-sm-6">
                                    <input type="text" id="" name="" ng-model="" value="<?php echo $detail->PROSPECT_TYPE;?>" required class="form-control" disabled="">
                            </div>
                        </div>
                        </div>
                        <div class="col-md-6">
                    <h3 class="title-hero">
                    
                    </h3><br>
                         <div class="form-group">
                            <label for="" class="col-sm-3 control-label"><label class="font-red">*</label>Expired Date</label>
                            <div class="col-sm-6">
                                    <input type="text" id="" name="" ng-model="" value="<?php echo $detail->PROSPECT_TYPE;?>" required class="form-control" disabled="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label"><label class="font-red">*</label>Payment Period</label>
                            <div class="col-sm-6">
                                    <input type="text" id="" name="" ng-model="" value="<?php echo $detail->PROSPECT_TYPE;?>" required class="form-control" disabled="">
                            </div>
                        </div>
                         <div class="form-group">
                            <label for="" class="col-sm-3 control-label"><label class="font-red">*</label>Payment Date</label>
                            <div class="col-sm-6">
                                    <input type="text" id="" name="" ng-model="" value="<?php echo $detail->PROSPECT_TYPE;?>" required class="form-control" disabled="">
                            </div>
                        </div>
                          <div class="form-group">
                            <label class="col-sm-3 control-label">Remark</label>
                            <div class="col-sm-6">
                                    <input type="text" id="" name="" ng-model="" value="<?php echo $detail->PROSPECT_TYPE;?>" required class="form-control" disabled="">
                            </div>
                        </div>
                          <div class="form-group">
                            <label class="col-sm-3 control-label"><label class="font-red">*</label>Rp.</label>
                            <div class="col-sm-6">
                                    <input type="text" id="" name="" ng-model="" value="<?php echo $detail->PROSPECT_TYPE;?>" required class="form-control" disabled="">
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


<script type="text/javascript">
var app = angular.module('valsys', []);
/*function myCtrl($scope) {

}*/
app.controller('myCtrl', function($scope) {
    $scope.aa = true;
    $scope.rr = true;
    $scope.light = true;
    });
</script>

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