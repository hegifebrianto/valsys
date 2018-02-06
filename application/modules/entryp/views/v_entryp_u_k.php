<?=$head?>
<?=$side_menu?>
    <div id="page-content-wrapper">
        <div id="page-content">                
            <div class="container">
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
            <style>
            #myImg {
                border-radius: 5px;
                cursor: pointer;
                transition: 0.3s;
            }
            #myImg:hover {opacity: 0.7;}
      
      .btnAdd{background-color:#1E90FF     ;border:2px solid #90EE90  ;border-radius:4px;color:white;cursor:pointer;}
      .btnAdd:hover{background-color:#90EE90  ;border:2px solid #5F9EAD;}
            </style>
            <link rel="stylesheet" href="<?=base_url();?>assets/select2-master/dist/css/select2.min.css"/>
            <script src="<?=base_url();?>assets/bootstrap/js/jquery-ui.min.js"></script>
            <script src="<?=base_url();?>assets/bootstrap/js/jquery-ui.js"></script>
            

            <!-- combo-check -->
            <script src="<?=base_url();?>assets/widgets/modernizr/modernizr.min.js"></script>
            <script src="<?=base_url();?>assets/widgets/infragistics/infragistics.core.js"></script>
            <script src="<?=base_url();?>assets/widgets/infragistics/infragistics.lob.js"></script>
            <style>
                .combo-label {margin-bottom:.5em;}

            </style>
      <style>
            .demo-icon {
                font-size: 20px;
                line-height: 0px;
                float: left;
                width: 35px;
                height: 30px;
                margin: 0px;
                text-align: center;
                color: #92A0B3;
                border: 0px solid 
            </style>
     
           <!--  <div id="page-title">
                <h2><?php echo $module_title;?></h2>
            </div> -->
            <?php
            foreach ($ep_dtd->result() as $detail) {
            ?>
            <div class="panel">
            <div class="panel-body">
                <style>
                        .col-md-3{
                            width: 15%;
                        }
                        </style>
                <div class="example-box-wrapper">
                    <ul class="list-group row">
                        <li class="col-md-3" active>
                            <a href="#tab-example-1" data-toggle="tab"  class="list-group-item hover">
                              <i class="glyph-icon font-blue icon-user"></i>
                                Profile
                                <i class="glyph-icon icon-chevron-right"></i>
                            </a>
                        </li>
                        <li class="col-md-3">
                            <a href="#tab-example-2" data-toggle="tab" class="list-group-item">
                               <i class="glyph-icon font-red icon-briefcase"></i>
                                Package
                                <i class="glyph-icon font-green icon-chevron-right"></i>
                            </a>
                        </li>
                        <li class="col-md-3">
                            <a href="#tab-example-3" data-toggle="tab" class="list-group-item">
                                  <i class="glyph-icon font-yellow icon-usd"></i>
                                Payment
                                <i class="glyph-icon icon-chevron-right"></i>
                            </a>
                        </li>
                        <li class="col-md-3" >
                             <a href="#tab-example-5" data-toggle="tab" class="list-group-item">
                              <i class="glyph-icon font-black icon-dashboard"></i>
                                Entry HW
                                <i class="glyph-icon icon-chevron-right"></i>
                            </a>
                        </li>
                        <li class="col-md-3">
                             <a href="#tab-example-4" data-toggle="tab" class="list-group-item">
                                 <i class="glyph-icon font-green icon-book"></i>
                                Pickup
                                <i class="glyph-icon icon-chevron-right"></i>
                            </a>
                        </li>
                        <li class="col-md-3">
                             <a href="#tab-example-6" data-toggle="tab" class="list-group-item">
                                 <i class="glyph-icon font-green icon-send"></i>
                                Result
                                <i class="glyph-icon icon-chevron-right"></i>
                            </a>
                        </li>
                       
                    </ul>




            <!-- Conten form --> 
            
                        <div class="tab-content">
                        <form class="form-horizontal bordered-row" id="formm" name="formm" data-parsley-validate="" method="POST" action="" enctype="multipart/form-data" >
                            <div class="panel-body">
                                <div class="example-box-wrapper">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">Sales Channel</label>
                                                <div class="col-sm-6">
                                                    <input type="text" id="CATEGORY" ng-model="salesc" name="CATEGORY"  class="form-control" disabled> 
                                                </div>
                                            </div>
                                            </div>
                                             <div class="col-md-6">
                                              <div class="form-group" >
                                                        <label class="col-sm-3 control-label ">Prospect Number</label>

                                                        <div class="col-sm-3">
                                                            <input type="text" id="pnumber"  ng-model="pnumb" name="PN" placeholder="prospect number"  class="form-control" disabled> 
                                                            <!-- <input  id="cek_ktp" ng-model="checked" type="checkbox" value="{{$scope.pnumb}}">
                                                              <label for="boxed-layout">Manual</label> -->
                                                        </div>
                                                        

                                                    </div>
                                                    </div>
                                                    <div class="col-md-6">
                                            <div class="form-group"  ng-show="error">
                                                <label class="col-sm-6 control-label"><b style="color: red">Cek lagi nyinggg</b></label>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="tab-pane fade" id="tab-example-6" >
      <div class="panel">
      <div class="panel-body">
        
        <div class="example-box-wrapper">
           
                <div class="row">
                    <div class="col-md-6">
                    <h3 class="title-hero">
                    <div class="tl-label bs-label label-warning" style="margin-left:-20px;font-size: 100%">
                   Result
                    </div>
                    </h3> 
                     <div class="form-group">
                            <label for="" class="col-sm-3 control-label"><label class="font-red"></label><input ng-model="lightv" class="colorCheckbox" type="checkbox" name="colorCheckbox" value="Active"  >Light Verification</label>
                           <div class="col-sm-6">
                                   <!--  <input type="text" id="light" name="light" value="" ng-hide="light" ng-show="lightv" required class="form-control" > -->
                                   <select class="col-sm-7 " ng-model="LIGHT" id="light" name="light"  class="required" ng-hide="light" ng-show="lightv" >
                                    <!--  <option value="" selected="selected">Select</option> -->
                                     <?php 
                                    foreach ($light_verification as $lv) {
                                    echo "<option value='$lv[DESC]'>$lv[DESC]</option>";
                                    }
                                    ?>
                                     
                                </select>    
                            </div>
                        </div>                   
                    <div class="form-group" >
                            <label  class=" col-sm-3 control-label"> <label class="font-red"></label>Informasi Data</label>
                            <div class="col-sm-6">
                                                                 
                                
                             <select class="col-sm-12 "  ng-model="infodata" id="category" name="A4"  class="" >
                                     
                                       <?php 
                                    foreach ($master_field as $pt) {
                                    echo "<option value='$pt[DESCRIPTION]'>$pt[DESCRIPTION]</option>";
                                    }
                                    ?>
                                     
                            </select>                                                        
                            
                          
                           
                            </div>
                    </div>  
                    <div class="form-group" ng-hide="status" ng-show="infodata" >
                            <label  class=" col-sm-3 control-label"> <label class="font-red"></label>Status</label>
                            <div class="col-sm-6">
                                                                 
                                
                             <select class="col-sm-12 "  ng-model="statuss" id="category" name="A4"  class="" >
                                    <!--  <option value="" selected="selected">Select</option>
                                      <option value="asfasf" >asasg</option> -->
                                    <option value="Approve">Approve</option>
                                    <option value="Rejected">Reject</option>

                            </select>                                                        
                            
                          
                           
                            </div>
                    </div>
                     <div class="form-group" ng-hide="reason" ng-show="statuss" >
                            <label  class=" col-sm-3 control-label"> <label class="font-red"></label>Reason</label>
                            <div class="col-sm-6">
                                                                 
                                
                             <select class="col-sm-12 "  ng-model="REASONn" id="category" name="Aa4"  class="" ng-hide="aa" ng-show="statuss=='Approve'">
                                     <?php 
                                    foreach ($kacab_approve as $pt) {
                                    echo "<option value='$pt[NOTE]'>$pt[NOTE]</option>";
                                    }
                                    ?>
                                     
                            </select>  
                            <select class="col-sm-12 "  ng-model="REASONn" id="category" name="A4"  class="" ng-hide="aa" ng-show="statuss=='Reject'">
                                     <?php 
                                    foreach ($kacab_reject as $pt) {
                                    echo "<option value='$pt[NOTE]'>$pt[NOTE]</option>";
                                    }
                                    ?>
                                     
                            </select>                                                          
                            
                         
                           
                            </div>
                    </div>  
                    <div class="form-group col-sm-3">
                    <button ng-hide="addbutton" ng-model="add" ng-show="REASONn || rej || pend" type="button" ng-click="addPerson()">Add</button>
                    </div>
  <div class="form-group col-sm-12">
                    <table class="table" >
  <tr>
    <th>Informasi
    </th>
    <th>Status
    </th>
    <th>Reason
    </th>
    <th>Action
    </th>
  </tr>
  <tr ng-repeat="person in people">
  <td>
            {{ person.informasid }}
          </td>
    <td>
            {{ person.status }}
          </td>
          <td>
            {{ person.reason }}
          </td>
          <td>
             <button type="button" ng-click="removePerson($index)">Remove</button>
          </td>
  </tr>
</table>     
</div> 
                     
                        
                       
                    </div>
                    
                       
                    </div>
                     
              
                     

                    </div>
                    <div class="bg-default content-box text-center pad20A mrg25T">
                    <button type="submit" name="sub" id="saveBtn" ng-show="REASONn || rej || pend" ng-hide="savebut"  ng-click="save()" ng-model="sv" class="btn btn-lg btn-primary">Save</button>
                   <!--  <button name="sub" id="saveBtn"  class="btn btn-lg btn-primary">Save</button> -->
                   <!-- <input type="button" onclick="coba();" value="Submit"/> -->
                </div>    
                    </div>
                    </div>
                    </div>
                


                            <div class="tab-pane fade active in" id="tab-example-1"  >
                                <div class="panel" >
                                    <div class="panel-body">
                                        <div class="example-box-wrapper">
                                            <div class="row">
                                                <div class="col-md-6">
                                                <h3 class="title-hero">
                                                    <div class="tl-label bs-label label-success" style="margin-left:-20px;font-size: 100%">
                                                        Profile Customer Data
                                                    </div>
                                                </h3>
                                                 <div class="form-group">
                                                        <label class="col-sm-3 control-label"><label class="font-red"></label>Form Number</label>
                                                        <div class="col-sm-6">
                                                            <input type="text" id="f" name="formn" ng-model="formn" placeholder="Form Number" class="form-control" disabled="">
                                                        </div>
                                                    </div>
                                                  
                                                    <div class="form-group">
                                                        <label class="col-sm-3 control-label">Prospect Type</label>
                                                        <div class="col-sm-6">
                                                        <input type="text" id="pt" name="pt" ng-model="prtype" class="form-control" disabled="">                                                           
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="col-sm-3 control-label">Hardware Status</label>
                                                        <div class="col-sm-6">
                                                        <input type="text"  ng-model="hwstatus" class="form-control" disabled="">
                                                           
                                                        </div>
                                                    </div>
                                                    
                                                     <div class="form-group" ng-model="first" ng-hide="salesc=='dtd' || salesc=='dtdbb' || salesc=='scc' || salesc=='ms'" ng-show="salesc=='sgs'">
                                                        <label class="col-sm-3 control-label">SGS Parent Number</label>
                                                       <div class="col-sm-6">
                                                            <input type="text" id="sa" name="sa"  ng-model="sgs" placeholder="SGS Parent Number"  class="form-control">
                                                        </div>
                                                    </div>
                                                     <div class="form-group" ng-model="first" ng-hide="salesc=='dtd' || salesc=='dtdbb' || salesc=='scc' || salesc=='ms'" ng-show="salesc=='sgs'">
                                                        <label class="col-sm-3 control-label">SGS Parent Name</label>
                                                       <div class="col-sm-6">
                                                            <input type="text" id="snm" name="snm" ng-model="sgsname" placeholder="SGS Parent Name"  class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label  class=" col-sm-3 control-label"> <label class="font-red">*</label>Identity Type</label>
                                                        <div class="col-sm-6">
                                                            <input type="text" ng-model="identype" class="form-control" disabled="">
                                                             <input type="text" ng-model="identypen" class="form-control" disabled="">
                                                        </div>
                                                    </div>
                                                     <div class="form-group" >
                                                        <label for="" class="col-sm-3 control-label"><label class="font-red">*</label>Expired Date</label>
                                                        <div class="col-sm-6">
                                                            <input type="text"  ng-model="expdate" class="form-control" disabled="">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-sm-3 control-label"><label class="font-red">*</label>Firstname</label>
                                                        <div class="col-sm-6">
                                                           <input type="text" id="pt" name="pt" ng-model="first_name" class="form-control" disabled="">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-sm-3 control-label"><label class="font-red">*</label>Middlename</label>
                                                        <div class="col-sm-6">
                                                            <input type="text" id="pt" name="pt" ng-model="middle_name" class="form-control" disabled="">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-sm-3 control-label"><label class="font-red">*</label>Lastname</label>
                                                        <div class="col-sm-6">
                                                            <input type="text" id="pt" name="pt" ng-model="last_name" class="form-control" disabled="">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-sm-3 control-label"><label class="font-red">*</label>Gender</label>
                                                        <div class="col-sm-6 ">
                                                            <!-- <label class="radio-inline"><input type="radio" id="" name="GENDER" ng-model="GENDER" value="male" required>Male</label>
                                                            <label class="radio-inline"><input type="radio" id="" name="GENDER" ng-model="GENDER" value="female">Female</label> -->
                                                            <input type="text" id="pt" name="pt" ng-model="gender" class="form-control" disabled="">
                                                            
                                                        </div>
                                                    </div>
                                                     <!-- <div class="form-group">
                    <label class="col-sm-3 control-label">Inline radio</label>
                    <div class="col-sm-6">
                       
                        <label class="radio-inline">
                            <input type="radio" id="" name="example-radio1" value="option2">
                            Radio 2
                        </label>
                        <label class="radio-inline">
                            <input type="radio" id="" name="example-radio1" value="option3">
                            Radio 3
                        </label>
                        <label class="radio-inline">
                            <input type="radio" disabled id="" name="example-radio1" value="option4">
                            Disabled radio
                        </label>
                    </div>
                </div> -->
                                                     <div class="form-group">
                                                        <label class="col-sm-3 control-label"><label class="font-red">*</label>Religion</label>
                                                        <div class="col-sm-6">
                                                           <input type="text" id="pt" name="pt" ng-model="religion" class="form-control" disabled="">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-sm-3 control-label"><label class="font-red">*</label>Place of Birth</label>
                                                        <div class="col-sm-6">
                                                           <input type="text" id="pt" name="pt" ng-model="place_of_birth" class="form-control" disabled="">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="" class="col-sm-3 control-label"><label class="font-red">*</label>Date of Birth</label>
                                                        <div class="col-sm-6">
                                                            <input type="text" id="pt" name="pt" ng-model="date_of_birth" class="form-control" disabled="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <h3 class="title-hero"></h3>
                                                   
                                                    <div class="form-group">
                                                        <label class="col-sm-3 control-label"><label class="font-red"></label>PLN ID</label>
                                                        <div class="col-sm-6">
                                                           <input type="text" id="pt" name="pt" ng-model="prtype" class="form-control" disabled="">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-sm-3 control-label"><label class="font-red">*</label>Phone (House)</label>
                                                        <div class="col-sm-6">
                                                            <input type="text" id="pt" name="pt" ng-model="home_phone" class="form-control" disabled="">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-sm-3 control-label"><label class="font-red">*</label>Phone (HP)</label>
                                                        <div class="col-sm-6">
                                                          <input type="text" id="pt" name="pt" ng-model="nohp" class="form-control" disabled="">
                                                        </div>
                                                    </div>
                                                   
                                                    <div class="form-group">
                                                        <label for="" class="col-sm-3 control-label"><label class="font-red">*</label>Installation Date</label>
                                                        <div class="col-sm-6">
                                                            <input type="text" id="pt" name="pt" ng-model="inst_date" class="form-control" disabled="">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="" class="col-sm-3 control-label"><label class="font-red">*</label>Installation Time</label>
                                                        <div class="col-sm-6">
                                                            <input type="text" id="pt" name="pt" ng-model="inst_time" class="form-control" disabled="">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="" class="col-sm-3 control-label"><label class="font-red">*</label>Confirmation Period</label>
                                                        <div class="col-sm-6">
                                                           <input type="text" id="pt" name="pt" ng-model="confirm_date" class="form-control" disabled="">
                                                        </div>
                                                    </div>
                                                     <div class="form-group">
                            <label class="col-sm-3 control-label">Email</label>
                            <div class="col-sm-6">
                                <input type="text" id="pt" name="pt" ng-model="email" class="form-control" disabled="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">House Type</label>
                            <div class="col-sm-6">
                                <input type="text" id="pt" name="pt" ng-model="house_type" class="form-control" disabled="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">House Status</label>
                            <div class="col-sm-6">
                               <input type="text" id="pt" name="pt" ng-model="house_status" class="form-control" disabled="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Occupation</label>
                            <div class="col-sm-6">
                                <input type="text" id="pt" name="pt" ng-model="OCCUPATION" class="form-control" disabled="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Income</label>
                            <div class="col-sm-6">
                                <input type="text" id="pt" name="pt" ng-model="INCOME" class="form-control" disabled="">
                            </div>
                        </div>
                                                  
                                                    <!-- BEGINING MODAL -->
                                                    <!-- Modal -->
                                                    <div class="modal fade" id="PointOfSales" role="dialog">
                                                        <div class="modal-dialog modal-lg">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                                    <h4 class="modal-title">Operational Entity</h4>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <!--  <form action="popup.php"> -->
                                                                    <div class="form-group">
                                                                        <label class="col-sm-1 control-label"><label class="font-red">*</label>Branch</label>
                                                                        <div class="col-sm-3">
                                                                            <select id="branch" name="branch" ng-model="BRANCH" style="width: 200px;">
                                                                            <?php 
                                                                            foreach ($branch as $branch) {
                                                                                echo "<option value='$branch[SEQ_BRANCH]'>$branch[BRANCH]</option>";
                                                                            }
                                                                            ?>
                                                                            </select>
                                                                        </div>
                                                                        <label class="col-sm-1 control-label"><label class="font-red">*</label>Sales Channel</label>
                                                                        <div class="col-sm-3">
                                                                            <select id="sales_channel" name="sales_channel" ng-model="SALES_CHANNEL" style="width: 200px;">
                                                                            <?php 
                                                                            foreach ($sales_channel as $sales_channel) {
                                                                                echo "<option value='$sales_channel[SALES_CHANNEL_ID]'>$sales_channel[SALES_CHANNEL_DESCR]</option>";
                                                                            }
                                                                            ?>
                                                                            </select>
                                                                        </div>

                                                                    </div>

                                                                    <div class="form-group">
                                                                        <label class="col-sm-1 control-label"><label class="font-red">*</label>Brand</label>
                                                                        <div class="col-sm-3">
                                                                            <select id="brand" name="brand" ng-model="BRAND" style="width: 200px;">
                                                                            <?php 
                                                                            foreach ($brand as $brand) {
                                                                                echo "<option value='$brand[BRAND_ID]'>$brand[BRAND_NAME]</option>";
                                                                            }
                                                                            ?>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                   
                                                                    <button type="button" class="btn btn-info btn-sm" ng-click="getOperationalEntityView()" >Search</button>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <table id="datatable-tabletools" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                                                        <thead>
                                                                            <tr>
                                                                                <th>ENTITY CODE</th>
                                                                                <th>ENTITY TYPE</th>
                                                                                <th>ENTITY NAME</th>
                                                                                <th>BRAND</th>
                                                                                <th>BRANCH</th>
                                                                                <th>SALES_CHANNEL_DESC</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <tr style="cursor: pointer;"onmouseover="this.style.background='gray';" onmouseout="this.style.background='white';" ng-repeat="val in ini_datanya | filter:filter_data" ng-dblclick="getVal(val)">
                                                                                <td>{{val.entity_code}}</td>
                                                                                <td>{{val.entity_type}}</td>
                                                                                <td>{{val.entity_name}}</td>
                                                                                <td>{{val.brand}}</td>
                                                                                <td>{{val.branch}}</td>
                                                                                <td>{{val.sales_channel}}</td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- END OF MODAL -->
                                                    <div class="form-group">
                                                        <label class="col-sm-3 control-label"></label>
                                                        <div class="col-sm-6"></div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-sm-3 control-label"></label>
                                                        <div class="col-sm-6"></div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-sm-3 control-label"></label>
                                                        <div class="col-sm-6"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel" >
                                    <div class="panel-body">
                                        <div class="example-box-wrapper">
                                            <div class="row">
                                                <div class="col-md-6">
                                                <h3 class="title-hero">
                                                    <div class="tl-label bs-label label-success" style="margin-left:-20px;font-size: 100%">
                                                        Address of Identity Card
                                                    </div>
                                                </h3>
                                                    
                                                    <div class="form-group">
                                                        <label class="col-sm-3 control-label"><label class="font-red">*</label>Address</label>
                                                        <div class="col-sm-6">
                                                            <textarea id="street_id" name="STREET" ng-model="STREET" placeholder="Identity Address" required class="form-control" disabled=""></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-sm-3 control-label">Province</label>
                                                        <div class="col-sm-6">
                                                        <input type="text" name="PROVINCE" ng-model="PROVINCE" placeholder="Province" required class="form-control" disabled=""></input>    
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-sm-3 control-label">City</label>
                                                        <div class="col-sm-6">
                                                            <input type="text" name="CITY" ng-model="CITY" placeholder="City" required class="form-control" disabled=""></input>
                                                           
                                                        </div>
                                                    </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                    <div class="form-group"></div>
                                                    <div class="form-group"></div>

                                                    <div class="form-group">
                                                        <label class="col-sm-3 control-label">Kecamatan</label>
                                                        <div class="col-sm-6">
                                                        <input type="text" name="DISTRICT" ng-model="DISTRICT" placeholder="District" required class="form-control" disabled=""></input>
                                                        </div>
                                                        
                                                            
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-sm-3 control-label">Kelurahan</label>
                                                        <div class="col-sm-6">
                                                        <input type="text" name="SUBDISTRICT" ng-model="SUBDISTRICT" placeholder="Sub District" required class="form-control" disabled=""></input>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-sm-3 control-label"><label class="font-red">*</label>Zipcode</label>
                                                        <button type="button" style="background-color: yellow;" type="button" class="btn btn-info btn-xs" ng-click="getZipcodeforCostTransport()" data-toggle="modal" data-target="#CostTransport">Cost Transport</button>
                                                        <div class="col-sm-4">
                                                            <input type="text" ng-model="ZIPCODE" name="ZIPCODE" placeholder="Zipcode" required class="form-control" disabled="">
                                                        </div>
                                                        
                                                        <label class="col-sm-3 control-label"></label>
                                                        <div class="col-sm-5">
                                                            
                                                            
                                                        </div>

                                                    </div>

                                                    
                                                    <!-- BEGINING MODAL ZIPCODE -->
                                                    <!-- Modal -->
                                                    <div class="modal fade" id="ZipCodeModal"  role="dialog">
                                                        <div class="modal-dialog modal-lg">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                                    <h4 class="modal-title">Zipcode Search</h4>
                                                                </div>
                                                                <div class="modal-body">

                                                                    <div class="form-group">
                                                                        
                                                                        <label class="col-sm-2 control-label"><label class="font-red">*</label>Subdistrict</label>
                                                                        <div class="col-sm-3">
                                                                            <input type="text" placeholder="Enter Subsdistrict" ng-model="SUBDISTRICT_SEARCH" ng-keypress="getZipCodeViewData()">
                                                                            
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label class="col-sm-2 control-label"><label class="font-red">*</label>Zipcode</label>
                                                                        <div class="col-sm-3">
                                                                            <input type="text" placeholder="Enter Zipcode Number" ng-model="ZIPCODE_SEARCH" ng-keypress="getZipCodeViewData()">
                                                                        </div>
                                                                    </div>
                                                                    
                                                                    <button type="button" class="btn btn-info btn-sm" ng-click="getZipCodeViewData()" >Search</button>
                                                                <div class="modal-footer">
                                                                    <table id="datatable-tabletools" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                                                        <thead>
                                                                            <tr>
                                                                                <th width="20%">SUBDISTRICT</th>
                                                                                <th>DISTRICT</th>
                                                                                <th>CITY</th>
                                                                                <th>PROVINCE</th>
                                                                                <th>ZIPCODE</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <tr style="cursor: pointer;"onmouseover="this.style.background='gray';" onmouseout="this.style.background='white';" ng-repeat="value in zipcodeData | filter:filter_data" ng-dblclick="getZipCodeValues(value)" >
                                                                                <td>{{value.SUB_DISTRICT}}</td>
                                                                                <td>{{value.DISTRICT}}</td>
                                                                                <td>{{value.CITY}}</td>
                                                                                <td>{{value.PROVINCE}}</td>
                                                                                <td>{{value.ZIPCODE}}</td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    </div>
                                                    <!-- END OF MODAL -->

                                                    <!-- BEGINING MODAL Cost Transport -->
                                                    <!-- Modal -->
                                                    <div class="modal fade" id="CostTransport"  role="dialog">
                                                        <div class="modal-dialog modal-sm">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                                    <h4 class="modal-title">Form Cost Transport</h4>
                                                                </div>
                                                                <div class="modal-body">
                                                                       
                                                                    <div class="form-group">
                                                                        <label class="col-sm-5 control-label"><label class="font-red">*</label>Jarak (KM)</label>
                                                                        <div class="col-sm-3">
                                                                            <input type="text" ng-model="CST_JARAK"  value="" class="required">    
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label class="col-sm-5 control-label"><label class="font-red">*</label> DK / LK / UA</label>
                                                                        <div class="col-sm-2">
                                                                            <input type="text" ng-model="CST_DKLK" placeholder="Dalam / Luar Kota" class="required">    
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label class="col-sm-5 control-label"><label class="font-red">*</label> Transportation Cost</label>
                                                                        <div class="col-sm-2">
                                                                            <input type="text" ng-model="CST_COST" placeholder="Transportation Cost" class="required">    
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label class="col-sm-5 control-label"><label class="font-red">*</label> Cabang Pemasangan</label>
                                                                        <div class="col-sm-2">
                                                                            <input type="text" ng-model="CST_BRANCH" placeholder="Cabang Pemasangan" class="required">    
                                                                        </div>
                                                                    </div>
                                                                    
                                                                    <div class="form-group">
                                                                        <label class="col-sm-5 control-label"><label class="font-red">*</label> Please Check </label>
                                                                        <div class="col-sm-2">
                                                                             <input type="checkbox" name="check_CostTransport" value=""><br>    
                                                                        </div>
                                                                    </div>
                                                                </div>    
                                                                
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- END OF MODAL -->
                                                </div>
                                                <div class="col-md-6">
                                                  
                                                    <div class="form-group">
                                                        <label class="col-sm-3 control-label"></label>
                                                        <div class="col-sm-6"></div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-sm-3 control-label"></label>
                                                        <div class="col-sm-6"></div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-sm-3 control-label"></label>
                                                        <div class="col-sm-6"></div>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="panel" >
                                    <div class="panel-body">
                                        <div class="example-box-wrapper">
                                            <div class="row">
                                                <div class="col-md-6">
                                                <h3 class="title-hero">
                                                    <div class="tl-label bs-label label-success" style="margin-left:-20px;font-size: 100%">
                                                        Installation Address
                                                    </div>
                                                </h3>
                                                    
                                                    <div class="form-group">
                                                        <label class="col-sm-3 control-label">Installation Address Same with Identity Address</label>
                                                        <div class="col-sm-6">
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="checkbox checkbox-primary">
                                                                        <label>
                                                                            <input id="cek_install_same_with_identity" ng-model="cek_install" ng-change="installsameidentity()" type="checkbox" value="" disabled="">
                                                  
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-sm-3 control-label"><label class="font-red">*</label>Installation Address</label>
                                                        <div class="col-sm-6">
                                                            <textarea type="text" name="INSTALLATION_ADDRESS" ng-model="INSTALL_ADDRESS" id="installaddress" placeholder="Installation Address" required class="form-control" disabled=""></textarea>
                                                            
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-sm-3 control-label"><label class="font-red">*</label>Direction/Landmark</label>
                                                        <div class="col-sm-6">
                                                            <textarea type="text" name="DIRECTIONS" ng-model="INSTALL_LANDMARK" id="landmark" placeholder="LANDMARK" required class="form-control" disabled=""></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                                <br><br>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="col-sm-3 control-label">Province</label>
                                                        <div class="col-sm-6">
                                                        <input type="text" name="PROVINCE_INSTALLATION" ng-model="PROVINCE_INSTALL" placeholder="Province"  required class="form-control" disabled=""></input>
                                                           
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-sm-3 control-label">City</label>
                                                        <div class="col-sm-6">
                                                            <input type="text" name="CITY_INSTALLATION" ng-model="CITY_INSTALL" placeholder="City"  required class="form-control" disabled=""></input>
                                                              
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-sm-3 control-label">Kecamatan</label>
                                                        <div class="col-sm-6">
                                                        <input type="text" name="DISTRICT_INSTALLATION" ng-model="DISTRICT_INSTALL" placeholder="District"  required class="form-control" disabled=""></input>
                                                        
                                                        </div>         
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-sm-3 control-label">Kelurahan</label>
                                                        <div class="col-sm-6">
                                                        <input type="text" name="SUBDISTRICT_INSTALLATION" ng-model="SUBDISTRICT_INSTALL" placeholder="Sub District"  required class="form-control" disabled=""></input>
                                                        
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-sm-3 control-label"><label class="font-red">*</label>Zipcode</label>
                                                        <div class="col-sm-4">
                                                            <input type="text" ng-model="ZIPCODE_INSTALL" name="ZIPCODE_INSTALLATION" placeholder="Zipcode" required class="form-control" disabled="">
                                                            
                                                        </div>
                                                        
                                                        <label class="col-sm-3 control-label"></label>
                                                        <div class="col-sm-5">
                                                            
                                                        </div>

                                                    </div>     
                                                    
                                                </div>
                                                <!-- BEGINING MODAL ZIPCODE -->
                                                    <!-- Modal -->
                                                    <div class="modal fade" id="ZipCodeInstallationModal"  role="dialog">
                                                        <div class="modal-dialog modal-lg">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                                    <h4 class="modal-title">Zipcode Search</h4>
                                                                </div>
                                                                <div class="modal-body">

                                                                    <div class="form-group">
                                                                        
                                                                        <label class="col-sm-2 control-label"><label class="font-red">*</label>Subdistrict</label>
                                                                        <div class="col-sm-3">
                                                                            <input type="text" placeholder="Enter Subsdistrict" ng-model="SUBDISTRICT_SEARCH" ng-keypress="getZipCodeViewData()">
                                                                            
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label class="col-sm-2 control-label"><label class="font-red">*</label>Zipcode</label>
                                                                        <div class="col-sm-3">
                                                                            <input type="text" placeholder="Enter Zipcode Number" ng-model="ZIPCODE_SEARCH" ng-keypress="getZipCodeViewData()">
                                                                        </div>
                                                                    </div>
                                                                   
                                                                    <button type="button" class="btn btn-info btn-sm" ng-click="getZipCodeViewData()">Search</button>
                                                                <div class="modal-footer">
                                                                    <table id="datatable-tabletools" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                                                        <thead>
                                                                            <tr>
                                                                                <th width="20%">SUBDISTRICT</th>
                                                                                <th>DISTRICT</th>
                                                                                <th>CITY</th>
                                                                                <th>PROVINCE</th>
                                                                                <th>ZIPCODE</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <tr style="cursor: pointer;"onmouseover="this.style.background='gray';" onmouseout="this.style.background='white';" ng-repeat="value in zipcodeData | filter:filter_data" ng-dblclick="getZipCodeInstallValues(value)">
                                                                                <td>{{value.SUB_DISTRICT}}</td>
                                                                                <td>{{value.DISTRICT}}</td>
                                                                                <td>{{value.CITY}}</td>
                                                                                <td>{{value.PROVINCE}}</td>
                                                                                <td>{{value.ZIPCODE}}</td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    </div>
                                                    <!-- END OF MODAL -->

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
                                                    <div class="tl-label bs-label label-success" style="margin-left:-20px;font-size: 100%">
                                                        Billing Address
                                                    </div>
                                                </h3>
                                                    <div class="form-group">
                                                        <label class="col-sm-3 control-label">Billing Address Same with Identity Address</label>
                                                        <div class="col-sm-6">
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="checkbox checkbox-primary">
                                                                        <label>
                                                                            <input id="cek_billing_same_with_identity" ng-model="cek_billing_identity" ng-change="billing_same_identity()" input type="checkbox" value="" disabled="">
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                      <label class="col-sm-3 control-label">Billing Address Same with Installation Address</label>
                                      <div class="col-sm-6">
                                          <div class="row">
                                              <div class="col-md-6">
                                                  <div class="checkbox checkbox-primary">
                                                      <label>
                                                          <input id="cek_billing_same_with_install" ng-model="cek_billing_install" ng-change="billing_same_install()" input type="checkbox" disabled="" value="">
                                                      </label>
                                                  </div>
                                                  
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                                                    <div class="form-group">
                                                        <label class="col-sm-3 control-label"><label class="font-red">*</label>Installation Address</label>
                                                        <div class="col-sm-6">
                                                            <textarea type="text" name="INSTALLATION_ADDRESSbilling" ng-model="INSTALL_ADDRESSbilling" id="installaddressbilling" placeholder="Installation Address" required class="form-control" disabled=""></textarea>
                                                            
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-sm-3 control-label"><label class="font-red">*</label>Direction/Landmark</label>
                                                        <div class="col-sm-6">
                                                            <textarea type="text" name="DIRECTIONSbilling" ng-model="INSTALL_LANDMARKbilling" id="landmarkbilling" placeholder="LANDMARK" required class="form-control" disabled=""></textarea>
                                                        </div>
                                                    </div>
                                
                                                    </div>
                                                    <div class="col-md-6">
                                                    <div class="form-group"></div>
                                                    <div class="form-group"></div>
                                                        <div class="form-group">
                                                        <label class="col-sm-3 control-label">Province</label>
                                                        <div class="col-sm-6">
                                                        <input type="text" name="PROVINCE_BILLING" ng-model="PROVINCE_BILLING" placeholder="Province"  required class="form-control" disabled=""></input>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-sm-3 control-label">City</label>
                                                        <div class="col-sm-6">
                                                            <input type="text" name="CITY_BILLING" ng-model="CITY_BILLING" placeholder="City"  required class="form-control" disabled=""></input>
                                                              
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-sm-3 control-label">Kecamatan</label>
                                                        <div class="col-sm-6">
                                                        <input type="text" name="DISTRICT_BILLING" ng-model="DISTRICT_BILLING" placeholder="District"  required class="form-control" disabled=""></input>
                                                        
                                                        </div>         
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-sm-3 control-label">Kelurahan</label>
                                                        <div class="col-sm-6">
                                                        <input type="text" name="SUBDISTRICT_BILLING" ng-model="SUBDISTRICT_BILLING" placeholder="Sub District"  required class="form-control" disabled=""></input>
                                                        
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-sm-3 control-label"><label class="font-red">*</label>Zipcode</label>
                                                        <div class="col-sm-4">
                                                            <input type="text" ng-model="ZIPCODE_BILLING" name="ZIPCODE_BILLING" placeholder="Zipcode" required class="form-control" disabled="">
                                                            
                                                        </div>
                                                       
                                                        <label class="col-sm-3 control-label"></label>
                                                        <div class="col-sm-5">
                                                            
                                                        </div>
                                                    </div> 
                                            <!-- BEGINING MODAL ZIPCODE -->
                                                    <!-- Modal -->
                                                    <div class="modal fade" id="ZipCodeBillingModal"  role="dialog">
                                                        <div class="modal-dialog modal-lg">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                                    <h4 class="modal-title">Zipcode Search</h4>
                                                                </div>
                                                                <div class="modal-body">

                                                                    <div class="form-group">
                                                                        
                                                                        <label class="col-sm-2 control-label"><label class="font-red">*</label>Subdistrict</label>
                                                                        <div class="col-sm-3">
                                                                            <input type="text" placeholder="Enter Subsdistrict" ng-model="SUBDISTRICT_SEARCH" ng-keypress="getZipCodeViewData()">
                                                                            
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label class="col-sm-2 control-label"><label class="font-red">*</label>Zipcode</label>
                                                                        <div class="col-sm-3">
                                                                            <input type="text" placeholder="Enter Zipcode Number" ng-model="ZIPCODE_SEARCH" ng-keypress="getZipCodeViewData()">
                                                                        </div>
                                                                    </div>
                                                                   
                                                                    <button type="button" class="btn btn-info btn-sm" ng-click="getZipCodeViewData()">Search</button>
                                                                <div class="modal-footer">
                                                                    <table id="datatable-tabletools" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                                                        <thead>
                                                                            <tr>
                                                                                <th width="20%">SUBDISTRICT</th>
                                                                                <th>DISTRICT</th>
                                                                                <th>CITY</th>
                                                                                <th>PROVINCE</th>
                                                                                <th>ZIPCODE</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <tr style="cursor: pointer;"onmouseover="this.style.background='gray';" onmouseout="this.style.background='white';" ng-repeat="value in zipcodeData | filter:filter_data" ng-dblclick="getZipCodeBillingValues(value)">
                                                                                <td>{{value.SUB_DISTRICT}}</td>
                                                                                <td>{{value.DISTRICT}}</td>
                                                                                <td>{{value.CITY}}</td>
                                                                                <td>{{value.PROVINCE}}</td>
                                                                                <td>{{value.ZIPCODE}}</td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    </div>
                                                    <!-- END OF MODAL -->


                                </div>
                                <div class="col-md-6">
                            <h3 class="title-hero">
                                 
                            </h3><br>

                        
                        
                       
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


       
        <div class="panel" ng=hide="emergency">
            <div class="panel-body">
            <div class="example-box-wrapper">
            <div class="col-md-6">
            <h3 class="title-hero">
                <div class="tl-label bs-label label-success" style="margin-left:-20px;font-size: 100%">
                Emergency (different house)
                </div>
            </h3>                 
                    <div class="form-group">
                            <label class="col-sm-3 control-label"><label class="font-red">*</label>Name</label>
                            <div class="col-sm-6">
                                <input type="text" id="emergency_name" name="emergency_name" ng-model="EMERGENCY_NAME" placeholder="Full Name" required class="form-control" disabled="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label"><label class="font-red">*</label>Sibling Relationship</label>
                            <div class="col-sm-6">
                                <input type="text" id="pt" name="pt" ng-model="EC_RELATION" class="form-control" disabled="">
                            </div>
                        </div>
            </div>
             <div class="col-md-6">    
                         <div class="form-group"></div>      
                         <div class="form-group"></div>      
                       <div class="form-group">
                            <label class="col-sm-3 control-label"><label class="font-red">*</label>Phone </label>
                            <div class="col-sm-6">
                                <input type="text" id="emergency_phone" name="emergency_phone" ng-model="EMERGENCY_PHONE" data-parsley-type="digits" placeholder="Digits only" required class="form-control" disabled="">
                            </div>
                        </div>
                        
                       <div class="form-group">
                            <label class="col-sm-3 control-label"><label class="font-red">*</label>Address</label>
                            <div class="col-sm-6">
                                <input type="text" id="emergency_address" name="emergency_address" ng-model="EMERGENCY_ADDRESS" placeholder="Required Field" required class="form-control" disabled="">
                            </div>
                        </div>
                        </div>
        </div>
            </div>
        </div>
<div class="panel" ng=hide="sales">
        
                            <div class="panel-body">
            
            <div class="example-box-wrapper">
                
                    <div class="row">

                         <div class="col-md-6">
                         <h3 class="title-hero">
                            <div class="tl-label bs-label label-success" style="margin-left:-20px;font-size: 100%">
                            SALES PROFILE DATA
                            </div>
                         </h3>
                        
                            <div class="form-group">
                                <label class="col-sm-3 control-label"><label class="font-red">*</label>NIK</label>
                                <div class="col-sm-4">
                                    <input type="text" id="sales_nik" name="sales_nik" ng-model="SALES_NIK" placeholder="NIK" required class="form-control" disabled="">
                                    <!-- Trigger the modal with a button -->
                                </div>
                                
                            </div>
                            <!-- BEGINING MODAL -->
                            <!-- Modal -->
                              <div class="modal fade" id="SalesProfileModal" role="dialog">
                                <div class="modal-dialog modal-sm">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                                      <h4 class="modal-title">Sales Profile</h4>
                                    </div>
                                    <div class="modal-body">
                                       <!--  <form action="popup.php"> -->
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">Sales Code</label>
                                                <div class="col-sm-3">
                                                    <input type="text" placeholder="" ng-model="SALES_CODE_SEARCH" disabled="">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">Nama Sales</label>
                                                <div class="col-sm-3">
                                                    <input type="text" placeholder="" ng-model="SALES_NAME_SEARCH" disabled="">
                                                </div>
                                            </div>
                                            
                                                 
                                       
                                        <button type="button" class="btn btn-info btn-sm" ng-click="getSalesProfileData()" >Search</button>
                                    </div>
                                    <div class="modal-footer">
                                        <table id="datatable-tabletools" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                        <thead>
                                         <tr>
                                          <th>Sales Code</th>
                                          <th>Sales Name</th>
                                         </tr>
                                        </thead>
                                        <tbody>
                                         <tr style="cursor: pointer;"onmouseover="this.style.background='gray';" onmouseout="this.style.background='white';" ng-repeat="value in master_employee_data" ng-dblclick="getValueSalesProfileData(value)">
                                          <td>{{value.employee_code}}</td>
                                          <td>{{value.first_name}}</td>
                                         </tr>
                                        </tbody>
                                       </table>
                                    </div>
                                    <div class="modal-footer">
                                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            <!-- END OF MODAL -->
                            
                            <div class="form-group">
                                <label class="col-sm-3 control-label"><label class="font-red">*</label>Name</label>
                                <div class="col-sm-6">
                                    <input type="text" id="sales_name" name="sales_name" ng-model="SALES_NAME" placeholder="Sales Profile " required class="form-control" disabled="">
                                </div>
                            </div>

                            
                             <div class="form-group">
                                <label class="col-sm-3 control-label"><label class="font-red">*</label>Different Installation Causes</label>
                                <div class="col-sm-6">
                                    <input id="sales_differentcauses" name="sales_differentcauses" ng-model="SALES_DIFFERENTCAUSES" type="text" placeholder="Different Installation Causes" required class="form-control" disabled="">
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
                                    <input id="sales_code" name="sales_code" ng-model="SALES_CODE"  type="text" placeholder="Required Field" required class="form-control" disabled="">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label"><label class="font-red">*</label>Office Branch</label>
                                <div class="col-sm-6">
                                    <input id="sales_officebranch" name="sales_officebranch" ng-model="SALES_OFFICEBRANCH" type="text" placeholder="Required Field" required class="form-control" disabled="">
                                </div>
                            </div>
                              <div class="form-group">
                                <label class="col-sm-3 control-label"><label class="font-red">*</label>Name of Head Branch</label>
                                <div class="col-sm-6">
                                    <input type="text" id="sales_namebranchhead" name="sales_namebranchhead" ng-model="SALES_NAMEBRACHHEAD" placeholder="Required Field" required class="form-control" disabled="">
                                </div>
                            </div>
              
                            <div class="form-group">
                                <label class="col-sm-3 control-label"><label class="font-red">*</label>Point Of Sales</label>
                                <!-- Trigger the with a button -->
                                
                                <div class="col-sm-4">
                                    <input type="text" name="ENTITYCODE"  placeholder="Entity Code"  class="form-control" ng-model="ENTITY_CODE"  disabled="">
                                </div>
                                
                                <label class="col-sm-3 control-label"></label>
                                <div class="col-sm-5">
                                    <input type="text" name="POS"  placeholder="Point Of Sales"  class="form-control" ng-model="POINT_OF_SALES" disabled="">
                                </div>
                            </div>
                            <div class="form-group" ng-model="first" ng-hide="salesc=='dtd' || salesc=='dtdbb' || salesc=='scc' || salesc=='sgs'" ng-show="salesc=='ms'">
                                                        <label class="col-sm-3 control-label">Store Area</label>
                                                       <div class="col-sm-6">
                                                            
                                                                <!-- <select id="promotion" name="promotion[]" ng-model="promotion" class="required"  style="width:200px;" > -->
                                                               <input type="text" id="pt" name="pt" ng-model="prtype" class="form-control" disabled="">
                                                        
                                                        </div>
                            </div>
                            </div>

                            </div>
                            
                            
     
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
                    <div class="tl-label bs-label label-danger" style="margin-left:-20px;font-size: 100%">
                    Package
                    </div>
                    </h3>
                    <div class="form-group">
                            <label class="col-sm-3 control-label"><label class="font-red"></label>Billing Frequency</label>
                            <div class="col-sm-6">
                               <input type="text" id="pt" name="pt" ng-model="BILLING_FREQUENCY" class="form-control" disabled="">
                            </div>
                        </div>
                    
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Brand</label>
                            <div class="col-sm-6">
                                <input type="text" id="pt" name="pt" ng-model="BRAND" class="form-control" disabled="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Status</label>
                            <div class="col-sm-6">
                                <input type="text" id="pt" name="pt" ng-model="STATUS" class="form-control" disabled="">
                        <script>   
            $('#formm').on('keyup keypress', function(e) {
              var keyCode = e.keyCode || e.which;
                if (keyCode === 13) { 
                e.preventDefault();
                return false;
            }
            });
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
                                <input type="text" id="pt" name="pt" ng-model="AVAILABLE_PROMO" class="form-control" disabled="">
                            </div>
                        </div>
                       
                        
                       
                    </div>
                    <div class="col-md-6">
                    <h3 class="title-hero">
                    <div class="tl-label bs-label label-danger" style="margin-left:-20px;font-size: 100%">
                    Available Package
                    </div>
                    </h3>
                    
                    <!-- package -->
                    <input type="button" id="more_fields" ng-click="addNewPackage(count = count + 1)" ng-init="count=0"  value="Add Package" style="margin-left: 0px;visibility:hidden;"/>
                    <br /><br />
                        <div id="add_package" ng-show="ADD_PACKAGE"> <!-- add package field -->
                          <div class="form-group">
                              <label class="col-sm-3 control-label">Basic</label>
                              <div class="col-sm-6">
                                  <input type="text" id="pt" name="pt" ng-model="prtype" class="form-control" disabled="">
                              </div>
                          </div>
                         
                          <div class="form-group">
                              <label class="col-sm-3 control-label">Alacarte</label>
                              <div class="col-sm-6">
                                <select id="package_alacarte" name="package_alacarte[]" ng-model="PACKAGE_ALACARTE" ng-change="getValuePackageAlacarte(PACKAGE_BASIC)" class="required" multiple="multiple" style="width:200px;" >
                                    <option value=""></option>
                                    
                                </select>

                              </div>
                              
                          </div>  
                        </div> 
                        <!-- end of add package field -->
                         <!-- package1 -->
                        <div id="add_package" ng-show="ADD_PACKAGE1"> <!-- add package field -->
                          <div class="form-group">
                              <label class="col-sm-3 control-label">Basic</label>
                              <div class="col-sm-6">
                                 <input type="text" id="pt" name="pt" ng-model="prtype" class="form-control" disabled="">
                              </div>
                          </div>
                         
                          <div class="form-group">
                              <label class="col-sm-3 control-label">Alacarte </label>
                              <div class="col-sm-6">
                               <input type="text" id="pt" name="pt" ng-model="prtype" class="form-control" disabled="">

                              </div>
                              
                          </div>  
                        </div> <!-- end of add package field -->
                         <!-- package2 -->
                        <div id="add_package" ng-show="ADD_PACKAGE2" > <!-- add package field -->
                          <div class="form-group">
                              <label class="col-sm-3 control-label">Basic</label>
                              <div class="col-sm-6" >
                                  <select id="package_basic2"  name="package_basic" ng-model="PACKAGE_BASIC2" class="required"  >
                                   <option value=""></option>
                                    <?php 
                                    foreach ($produk as $prod) {
                                    echo "<option value='$prod[bundle_id]'>$prod[bundle_name]</option>";
                                    }
                                    ?>
                                  </select>
                              </div>
                          </div>
                         
                          <div class="form-group">
                              <label class="col-sm-3 control-label">Alacarte </label>
                              <div class="col-sm-6" >
                                <select id="package_alacarte2" name="package_alacarte[]" ng-model="PACKAGE_ALACARTE2" class="required" multiple="multiple" style="width:200px;"  >
                                    <option value=""></option>
                                    
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
                    <div class="tl-label bs-label label-danger" style="margin-left:-20px;font-size: 100%">
                    Estimated Costs
                    </div>
                    </h3>
                    
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Installation</label>
                            <div class="col-sm-6">
                                <input type="text" ng-model="INSTALLATION_COSTT" disabled="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Cost Package</label>
                            <div class="col-sm-6">
                                <input type="text" ng-model="ESTIMATED_COST_PACKAGE" disabled="" >
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Alacarte</label>
                            <div class="col-sm-6">
                                <input type="text" ng-model="ESTIMATED_ALACARTE" disabled="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Promo</label>
                            <div class="col-sm-6">
                                <input type="text" ng-model="ESTIMATED_PROMO" disabled="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Total Estimated Costs</label>
                            <div class="col-sm-6">
                              
                                <input type="text" ng-model="TOTAL_ESTIMATED_COSTS" disabled="">
                            </div>
                        </div>  
                    </div>
                    </div>
                    
                    </div>
                    </div>
                    </div>
    </div>
    <div class="tab-pane fade" id="tab-example-3" >
      <div class="panel">
      <div class="panel-body">

            <div class="example-box-wrapper">

                <div class="row">
                    <div class="col-md-6">
                        <h3 class="title-hero">
                            <div class="tl-label bs-label label-warning" style="margin-left:-20px;font-size: 100%">
                                Payment Data
                            </div>
                        </h3>       
                        <div class="form-group" >
                            <label class="col-sm-3 control-label"><label class="font-red">*</label>Payment Method</label>
                            <div class="col-sm-6" >
                                <input type="text" id="pt" name="pt" ng-model="payment_method" class="form-control" disabled="">
                            </div>

                        </div>    
                        <div ng-hide="payment_method =='cc' || payment_method =='autodebet' || payment_method =='cash'" ng-show="payment_method =='atm'">
                            
                             
                          <div class="form-group" >
                            <label class="col-sm-3 control-label"><label class="font-red">*</label>Bank Name</label>
                            <div class="col-sm-6">
                                <input type="text" id="pt" name="pt" ng-model="atm_bank_name" class="form-control" disabled="">
                            </div>
                          </div>
                           <div class="form-group" > 
                            <label class="col-sm-3 control-label"><label class="font-red">*</label>Bank Account Number</label>
                            <div class="col-sm-6">
                                <input type="text" id="pt" name="pt" ng-model="atm_account_bank_number" class="form-control" disabled="">
                            </div>
                           </div>
                        
                           <div class="form-group" > 
                            <label class="col-sm-3 control-label"><label class="font-red">*</label>Name</label>
                            <div class="col-sm-6">
                                <input type="text" id="pt" name="pt" ng-model="atm_name" class="form-control" disabled="">
                            </div>
                           </div> 
                        </div>

            <div  ng-hide="payment_method =='autodebet' || payment_method =='atm' || payment_method =='cash'" ng-show="payment_method =='cc'">
                            
                             
                         <div class="form-group" >
                            <label class="col-sm-3 control-label"><label class="font-red">*</label>Card Type</label>
                            <div class="col-sm-6">
                                <input type="text" id="pt" name="pt" ng-model="card_type" class="form-control" disabled="">
                            </div>
                         </div>
                         <div class="form-group" > 
                            <label class="col-sm-3 control-label"><label class="font-red">*</label>Name</label>
                            <div class="col-sm-6">
                                <input type="text" id="pt" name="pt" ng-model="nama" class="form-control" disabled="">
                            </div>
                         </div>
                        
                          <div class="form-group" >   
                            <label class="col-sm-3 control-label"><label class="font-red">*</label>Expired Date</label>
                            <div class="col-sm-6">
                                <input type="text" id="pt" name="pt" ng-model="expired_date" class="form-control" disabled="">
                            </div>
                          </div>
                        </div>

                        <div ng-hide="payment_method =='cc' || payment_method =='atm' || payment_method =='cash'" ng-show="payment_method =='autodebet'">
                            
                             
                        <div class="form-group" >   
                            <label class="col-sm-3 control-label"><label class="font-red">*</label>Bank Name</label>
                            <div class="col-sm-6">
                                <input type="text" id="pt" name="pt" ng-model="d_bank_name" class="form-control" disabled="">
                            </div>
                        </div>
                       
                        <div class="form-group" >     
                            <label class="col-sm-3 control-label"><label class="font-red">*</label>Bank Account Number</label>
                            <div class="col-sm-6">
                                <input type="text" id="pt" name="pt" ng-model="account_bank_number" class="form-control" disabled="">
                            </div>
                        </div>
                        
                        <div class="form-group" >   
                            <label class="col-sm-3 control-label"><label class="font-red">*</label>Name</label>
                            <div class="col-sm-6">
                                <input type="text" id="pt" name="pt" ng-model="d_name" class="form-control" disabled="">
                            </div>
                        </div>
                        </div>



                        
                       

                       <!--  <div class="form-group" ng-hide="cardn || paymentm=='autodebet' || paymentm=='atm' || paymentm=='cash' " ng-show="cardty">
                            <label class="col-sm-3 control-label"><label class="font-red">*</label>Card Number</label>
                            <div class="col-sm-6">
                             <input type="text" id="pt" name="pt" ng-model="prtype" class="form-control" disabled="">
                         </div>
                     </div>
                     <div class="form-group" ng-hide="bankname" ng-show="paymentm=='autodebet'">
                        <label class="col-sm-3 control-label"><label class="font-red">*</label>Bank Name</label>
                        <div class="col-sm-6">
                            <input id="payment_bankname" name="payment_bankname" ng-model="PAYMENT_BANKNAME" type="text" placeholder="Required Field"  class="form-control" disabled="">
                        </div>
                    </div>
                    <div class="form-group" ng-hide="bankakun" ng-show="paymentm=='autodebet' || paymentm=='atm' ">
                        <label class="col-sm-3 control-label"><label class="font-red">*</label>Bank Account Number</label>
                        <div class="col-sm-6">
                            <input id="payment_bankaccountnumber" name="payment_bankaccountnumber" ng-model="PAYMENT_BANKACCOUNTNUMBER" type="text" placeholder="Bank Account Number"  class="form-control" disabled="">
                        </div>
                    </div>
                    <div class="form-group" ng-hide="nameuser" ng-show="paymentm=='kredit' || paymentm=='autodebet' ||  paymentm=='atm' " >
                        <label class="col-sm-3 control-label"><label class="font-red">*</label>Name</label>
                        <div class="col-sm-6">
                            <input id="payment_bankaccountname" name="payment_bankaccountname" ng-model="PAYMENT_BANKACCOUNTNAME" type="text" placeholder="Name of User Bank" required class="form-control" disabled="">
                        </div>
                    </div> -->
                </div>
                <div class="col-md-6">
                    <h3 class="title-hero">

                    </h3><br>
                  <!--   <div class="form-group" ng-show="paymentm=='kredit'" ng-hide="expired">
                        <label for="" class="col-sm-3 control-label"><label class="font-red">*</label>Expired Date</label>
                        <div class="col-sm-6">
                          <div class="col-sm-3">
                            <input id="bln_exp_date" name="bln_exp_date" ng-change="validExpDate()" ng-model="BLN_EXP_DATE" type="text" placeholder="MM"  required class="form-control" disabled="">
                        </div>
                        <label for="" class="col-sm-2 control-label">/</label>
                        <div class="col-sm-4">
                            <input id="thn_exp_date" name="thn_exp_date" ng-change="validExpDate()" ng-model="THN_EXP_DATE" type="text" placeholder="YYYY"  required class="form-control" disabled="">
                        </div>
                                   
                                </div>
                            </div> -->
                            
                            <div class="form-group">
                                <label for="" class="col-sm-3 control-label"><label class="font-red">*</label>Payment Date</label>
                                <div class="col-sm-6">
                                    <div class="input-prepend input-group">
                                        <span class="add-on input-group-addon">
                                            <i class="glyph-icon icon-calendar"></i>
                                        </span>
                                        <input type="text" class="bootstrap-datepicker form-control" ng-model="ex_date" placeholder="Payment Date" data-date-format="mm/dd/yy" disabled="">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Remark</label>
                                <div class="col-sm-6">
                                    <textarea  placeholder="" ng-model = "NOTES" required class="form-control" disabled=""> </textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label"><label class="font-red">*</label>Total Payment</label>
                                <div class="col-sm-6">
                                    <input type="text" placeholder="Required Field" ng-model= "TOTAL_AMOUNT_GABUNGAN" required class="form-control" disabled="">
                                </div>
                            </div>

                            

                        </div>
                        

                    </div>


                </div>
            </div>
                    </div>
                    </div>
                
                  
    
    <div class="tab-pane fade" id="tab-example-4" >
        <div class="panel">
        <div class="panel-body">
        
        <div class="example-box-wrapper">
                <div class="row">
                    <div class="col-md-6">
                    <h3 class="title-hero">
                    <div class="tl-label bs-label label-info" style="margin-left:-20px;font-size: 100%">
                    Checklist
                    </div>
                    </h3>
                      
                    </div>
                    <br/><br/>
                    <ul class="reset-ul">
                      <li>
                          
                          <label for="boxed-layout">KTP</label>
                          <input type="text" ng-model="ckktp" class="form-control" id="ktp" placeholder="" disabled="">
                      </li>
                      <li>
                         
                          <label for="boxed-layout">CREDIT CARD</label>
                          <input type="text" class="form-control" id="card" placeholder="" ng-model="cc" disabled="">
                      </li>
                      <li>
                         
                         
                          <label for="boxed-layout">PICKUP DANA</label>
                          <input type="text" class="form-control" id="dana" placeholder="" ng-model="dana" disabled="">
                      </li>
                       <li>
                          
                          
                          <label for="boxed-layout">SURAT KUASA</label>
                          <input type="text" class="form-control" id="kuasa" placeholder="" ng-model="sk" disabled="">
                      </li>
                       <li>
                          
                          
                          <label for="boxed-layout">TTD</label>
                          <input type="text" class="form-control" id="ttd" placeholder="" ng-model="ttd" disabled="">
                      </li>
                       <li>
                          
                           <script>
                           /*document.getElementById('cek_sewa').onchange = function() {
                                document.getElementById('sewa').disabled =!this.checked;                                
                                };*/
                          </script>
                          <label for="boxed-layout">SURAT PERNYATAAN TINGGAL DI RUMAH SEWA</label>
                          <input type="text" class="form-control" id="sewa" placeholder="" ng-model="sw" disabled="">
                      </li>
                    </ul>
                     <br>
                    <br>
                    <br>
                    <!-- FILE UPLOAD CLASS -->                
                    <div class="panel" ng-hide="fileupload">
                        <div class="panel-body">
                            <div class="example-box-wrapper">
                            
                                <div class="row">
                                    <div class="col-md-6">
                                    <h3 class="title-hero">
                                    <div class="tl-label bs-label label-success" style="margin-left:-20px;font-size: 100%">
                                    User Document
                                    </div>
                                    </h3>
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th width="25%">Name</th>
                                                <th>Category</th>
                                                <!-- <th>Image</th> -->
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <tr ng-repeat="value_upload in upload_data_view">
                                            <td>{{value_upload.FILENAME}}</td>
                                            <td><a href="">{{value_upload.CATEGORY}}</a></td>
                                            <!-- <td ng-click="alert(value_upload)"><a href=""><?=base_url();?>{{value_upload.p_file_path}}</a></td> -->
                                            <!-- <td ng-click="alert(value_upload)"><a href="">str_replace("opt/lampp/htdocs/valsys",<?=base_url();?>,value_upload.p_file_path)</a></td> -->
                                            <!-- <td><img src="/opt/lampp/htdocs/valsys/user_uploads/2017/03/11440.jpg"> </td> -->
                                            <!-- <td><img id="myImg" src="<?=base_url();?>{{value_upload.p_file_path}}" width=100px height=50px data-toggle="modal" data-target="#ImageModal" ng-click="alert(value_upload)"></td> -->
                                        </tr>
                                    </tbody>
                                    </table>


                    
                                        <!-- Trigger the modal with a button -->
                                        <!--<button type="button" class="btn btn-info btn-primary" data-toggle="modal" data-target="#FileUploadModal">Upload</button>-->
                                        
                                    
                                        <!-- BEGINING MODAL -->
                                            <!-- Modal -->
                                              <div class="modal fade" id="FileUploadModal" role="dialog">
                                                <div class="modal-dialog modal-sm">
                                                  <div class="modal-content">
                                                    <div class="modal-header">
                                                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                      <h4 class="modal-title">Uploading File</h4>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="form-group">
                                                            <label class="col-sm-3 control-label"><label class="font-red">*</label>Category</label>
                                                            <div class="col-sm-3">
                                                                <select style="width: 150px;" ng-model="CATEGORY_FILE">
                                                                    <option value="id_card">Identity Card</option>
                                                                    <option value="payment_receipt">Payment Receipt</option>
                                                                    <option value="different_address">Different Address Document</option>
                                                                    <option value="other_document">Other Document</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <input file-model = "myFile" type="file" size="20" style="padding-left: 15px;">
                                                        </div>            
                                                        <button type="button" class="btn btn-info btn-sm"  ng-click="saveFile()" >Upload</button>
                                                    </div>
                                                    <div class="modal-footer">
                                                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>
                                        <!-- END OF MODAL -->
                                        <!-- BEGINING MODAL -->
                                        <!-- The Modal -->
                                        <div id="ImageModal" class="modal">
                                          <span class="close">&times;</span>
                                          <img src="<?=base_url();?>{{IMAGEVIEW}}" class="modal-content" style=" position: absolute;
                                            top: 0; bottom:0; left: 0; right:0;
                                            margin: auto;" width="600px" height="400px">
                                          <div id="caption"></div>
                                        </div>
                                        <!-- END OF MODAL -->
                                    </div>
                                </div>
                            </div> 
                        </div>
                    </div>
                    <!-- END FILE UPLOAD CLASS --> 
                </div>
              
                
        </div>
      
      </div>
      </div> 
     
                        
    </div>
   
    <div class="tab-pane fade" id="tab-example-5" >
       <div class="panel">
      <div class="panel-body">
        
        <div class="example-box-wrapper">   
                          <table id="datatable-tabletools" class="table table-striped table-bordered" cellspacing="0" width="100%">
          <thead>
            <tr>
              <th>NO.</th>
              <th>ITEM DESCRIPTION</th>
              <th>SERIAL NUMBER</th>

            </tr>
          </thead>
          <tbody>
            <tr  ng-repeat="val in array_promo | filter:filter_data" >
              <td>{{$index+1}}</td>
              <td>{{val.ITEM_DESCR}}</td>
              <td>{{val.SERIAL_NUMBER}}</td>
             
            </tr>
          </tbody>
        </table>       
                </div>
            </div>
          </div>
                    
                        <!--
                          <div class="form-group">
                            <label class="col-sm-3 control-label"><label class="font-red"></label>VC</label>
                            <div class="col-sm-6">
                                <input name="vc" ng-model="VC" type="text" placeholder="vc" id="vc" required class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label"><label class="font-red"></label>DSD</label>
                            <div class="col-sm-6">
                                <input  name="dsd" ng-model="DSD" type="text" placeholder="dsd" id="dsd" required class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label"><label class="font-red"></label>LNB</label>
                            <div class="col-sm-6">
                                <input name="lnb" ng-model="LNB" type="text" placeholder="lnb" id="lnb" required class="form-control">
                            </div>
                        </div>
                        
                       
                        
                     <div class="col-md-6">
                    <h3 class="title-hero">
                    
                    </h3><br>
                         <div class="form-group">
                            <label class="col-sm-3 control-label"><label class="font-red"></label>Antenna</label>
                            <div class="col-sm-6">
                                <input name="antenna" ng-model="ANTENNA" type="text" placeholder="antenna" id="antenna" required class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label"><label class="font-red"></label>Router</label>
                            <div class="col-sm-6">
                                <input name="router" ng-model="ROUTER" type="text" placeholder="router" id="router" required class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label"><label class="font-red"></label>Simcard</label>
                            <div class="col-sm-6">
                                <input name="simcard" ng-model="SIMCARD" type="text" placeholder="simcard" id="simcard" required class="form-control">
                            </div>
                        </div>
                        
                    </div>
                    -->
                       
                     
                    

         </div>
         </div>
       </div>
      </div> 
     
                        
    </div>
  <!--   <div class="tab-pane fade" id="tab-example-5">
        <p>Commodo enim craft beer mlkshk aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthetic magna delectus mollit. Keytar helvetica VHS salvia yr, vero magna velit sapiente labore stumptown.</p>
        <p>Commodo enim craft beer mlkshk aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthetic magna delectus mollit. Keytar helvetica VHS salvia yr, vero magna velit sapiente labore stumptown.</p>
        <p>Commodo enim craft beer mlkshk aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthetic magna delectus mollit. Keytar helvetica VHS salvia yr, vero magna velit sapiente labore stumptown.</p>
        <p>Commodo enim craft beer mlkshk aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthetic magna delectus mollit. Keytar helvetica VHS salvia yr, vero magna velit sapiente labore stumptown.</p>
        <p>Commodo enim craft beer mlkshk aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthetic magna delectus mollit. Keytar helvetica VHS salvia yr, vero magna velit sapiente labore stumptown.</p>
        <p>Commodo enim craft beer mlkshk aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthetic magna delectus mollit. Keytar helvetica VHS salvia yr, vero magna velit sapiente labore stumptown.</p>
    </div> -->

                

    </div>
</div>
</form>
<!-- End of Content form -->


<!--DIALOG ADD HW-->
      <div   class='hide' id='myDialogAdd' title="Add / Edit HW">  
      <form class="form-horizontal bordered-row" id="form_add_modules" data-parsley-validate="">
                <div class="row"> 
         <div class="hide">
                            <label class="col-sm-3 control-label"> Application ID</label>
                            <div class="col-sm-6" size="40">
                                <input type="text"    id="appid1" placeholder="Application ID" required class="form-control">
                            </div>
                        </div>
              <div class="form-group">
                            <label class="col-sm-3 control-label"> Propsect Number</label>
                            <div class="col-sm-6" size="40">
                                <input type="text"    id="pros_num" placeholder="PROSPECT" required class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label"> VC</label>
                            <div class="col-sm-6" size="40">
                                <input type="text"    id="vc" placeholder="VC" required class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Decoder</label>
                            <div class="col-sm-6">
                                <input id="decoder" type="text"  placeholder="Decoder" required class="form-control">
                            </div>
                        </div> 
             <div class="form-group">
                            <label class="col-sm-3 control-label">LNB</label>
                            <div class="col-sm-6">
                                <input id="lnb" type="text"  placeholder="LNB" required class="form-control">
                            </div>
                        </div>
             <div class="form-group">
                            <label class="col-sm-3 control-label">Antenna</label>
                            <div class="col-sm-6">
                                <input id="antenna" type="text"  placeholder="Antenna" required class="form-control">
                            </div>
                        </div>
             <div class="form-group">
                            <label class="col-sm-3 control-label">Router</label>
                            <div class="col-sm-6">
                                <input id="router" type="text"  placeholder="Router" required class="form-control">
                            </div>
                        </div>
             <div class="form-group">
                            <label class="col-sm-3 control-label">SIM Card</label>
                            <div class="col-sm-6">
                                <input id="simcard" type="text"  placeholder="SIM Card" required class="form-control">
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
      <?php
}
?>
<!--END DIALOG ADD MODULES


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
<script type="text/javascript">
    $(document).ready(function () {
  
  init(); 
  
  function init(){
  
      $("#promotion").select2({
            placeholder: "Please Select"
        });
        $("#promotionPROMO").select2({
            placeholder: "Please Select"
        });
        $("#package_alacarte").select2({
                placeholder: "Please Select"
        });
        $("#package_alacarte1").select2({
                placeholder: "Please Select"
        });
        $("#package_alacarte2").select2({
                placeholder: "Please Select"
        });
        $("#package_alacarte3").select2({
                placeholder: "Please Select"
        });
    
    getDataHW();
  
  } 
    
    //trigger button grid entry hw
  
      
    });
</script>
<!-- Colorpicker -->



<script>

      $(document).ready(function() { 
        
        $("#payment_cardnumber").keyup(function() {
                getCheck();
                      //  $('#img_true2').show();
              var dInput = $(this).val();
               //   $('#img_true2').hide();
            //   alert(dInput);

                //$(".dDimension:contains('" + dInput + "')").css("display","block");
            });
      
      
       $("#bt_add_hw").button().click(function() { 
    PopUpDialog(); 
    $("#oper").val('add');
  });//  
      
          
      });

    
    
    function getCheck(){ /** Checking Valid CardNumber **/
    
        var ccErrorNo = 0;
        var ccErrors = new Array ()

        ccErrors [0] = "Unknown card type";
        ccErrors [1] = "No card number provided";
        ccErrors [2] = "Credit card number is in invalid format";
        ccErrors [3] = "Credit card number is invalid";
        ccErrors [4] = "Credit card number has an inappropriate number of digits";
        ccErrors [5] = "Warning! This credit card number is associated with a scam attempt";
        
    
            
    //      var cardname = Ext.getCmp('card_type').getValue();
    //var cardnumber        = Ext.getCmp('no_cc').getValue();
                        
    var cardname        = $('#cardt').val();
    var cardnumber      = $('#payment_cardnumber').val();
        /*console.log(cardname);
    console.log(cardnumber);*/
    
    var cards = new Array();

      // Define the cards we support. You may add addtional card types as follows.
      
      //  Name:         As in the selection box of the form - must be same as user's
      //  Length:       List of possible valid lengths of the card number for the card
      //  prefixes:     List of possible prefixes for the card
      //  checkdigit:   Boolean to say whether there is a check digit
      
      cards [0] = {name: "Visa", 
                   length: "13,16", 
                   prefixes: "4",
                   checkdigit: true};
      cards [1] = {name: "MasterCard", 
                   length: "16", 
                   prefixes: "51,52,53,54,55",
                   checkdigit: true};
      cards [2] = {name: "DinersClub", 
                   length: "14,16", 
                   prefixes: "36,38,54,55",
                   checkdigit: true};
      cards [3] = {name: "CarteBlanche", 
                   length: "14", 
                   prefixes: "300,301,302,303,304,305",
                   checkdigit: true};
      cards [4] = {name: "AmEx", 
                   length: "15", 
                   prefixes: "34,37",
                   checkdigit: true};
      cards [5] = {name: "Discover", 
                   length: "16", 
                   prefixes: "6011,622,64,65",
                   checkdigit: true};
      cards [6] = {name: "JCB", 
                   length: "16", 
                   prefixes: "35",
                   checkdigit: true};
      cards [7] = {name: "enRoute", 
                   length: "15", 
                   prefixes: "2014,2149",
                   checkdigit: true};
      cards [8] = {name: "Solo", 
                   length: "16,18,19", 
                   prefixes: "6334,6767",
                   checkdigit: true};
      cards [9] = {name: "Switch", 
                   length: "16,18,19", 
                   prefixes: "4903,4905,4911,4936,564182,633110,6333,6759",
                   checkdigit: true};
      cards [10] = {name: "Maestro", 
                   length: "12,13,14,15,16,18,19", 
                   prefixes: "5018,5020,5038,6304,6759,6761,6762,6763",
                   checkdigit: true};
      cards [11] = {name: "VisaElectron", 
                   length: "16", 
                   prefixes: "4026,417500,4508,4844,4913,4917",
                   checkdigit: true};
      cards [12] = {name: "LaserCard", 
                   length: "16,17,18,19", 
                   prefixes: "6304,6706,6771,6709",
                   checkdigit: true};
                   
      // Establish card type
      var cardType = -1;
      for (var i=0; i<cards.length; i++) {

        // See if it is this card (ignoring the case of the string)
        if (cardname.toLowerCase () == cards[i].name.toLowerCase()) {
          cardType = i;
          break;
        }
      }
      
      // If card type not found, report an error
      if (cardType == -1) {
         ccErrorNo = 0;
         
         return false; 
      }
       
      // Ensure that the user has provided a credit card number
      if (cardnumber.length == 0)  {
         ccErrorNo = 1;
         return false; 
      }
        
      // Now remove any spaces from the credit card number
      cardnumber = cardnumber.replace (/\s/g, "");
      
      // Check that the number is numeric
      var cardNo = cardnumber
      var cardexp = /^[0-9]{13,19}$/;
      if (!cardexp.exec(cardNo))  {
         ccErrorNo = 2;
        //Ext.getCmp('img_true2').hide();
      //  Ext.getCmp('img_false2').show();
      
        //Ext.getCmp('btn_save').disable();
         //alert('Card Number is Not Numeric');
    //   $('#img_true2').hide();
        $('#img_true2').hide();
        $('#img_false2').show(); 
       // console.log('1');
         return false; 
      }
           
      // Now check the modulus 10 check digit - if required
      if (cards[cardType].checkdigit) {
        var checksum = 0;                                  // running checksum total
        var mychar = "";                                   // next char to process
        var j = 1;                                         // takes value of 1 or 2
      
        // Process each digit one by one starting at the right
        var calc;
        for (i = cardNo.length - 1; i >= 0; i--) {
        
          // Extract the next digit and multiply by 1 or 2 on alternative digits.
          calc = Number(cardNo.charAt(i)) * j;
        
          // If the result is in two digits add 1 to the checksum total
          if (calc > 9) {
            checksum = checksum + 1;
            calc = calc - 10;
          }
        
          // Add the units element to the checksum total
          checksum = checksum + calc;
        
          // Switch the value of j
          if (j ==1) {j = 2} else {j = 1};
        } 
      
        // All done - if checksum is divisible by 10, it is a valid modulus 10.
        // If not, report an error.
        if (checksum % 10 != 0)  {//if ((rec.get('ALLOW_INTERRUPT') == 1) && (rec.get('REPEATABLE') == 'Parent Job'))
         ccErrorNo = 3;
        //Ext.getCmp('img_true2').hide();
      //  Ext.getCmp('img_false2').show();
        
        $('#img_true2').hide();
        $('#img_false2').show(); 
           // console.log('2');
        
 
        //console.log();
        //Ext.getCmp('btn_register').disable();
         return false; 
          
        }
      }  
      
      // Check it's not a spam number
      if (cardNo == '5490997771092064') { 
        ccErrorNo = 5;
         //alert("Spam Number");
        return false; 
      }

      // The following are the card-specific checks we undertake.
      var LengthValid = false;
      var PrefixValid = false; 
      var undefined; 

      // We use these for holding the valid lengths and prefixes of a card type
      var prefix = new Array ();
      var lengths = new Array ();
        
      // Load an array with the valid prefixes for this card
      prefix = cards[cardType].prefixes.split(",");
          
      // Now see if any of them match what we have in the card number
      for (i=0; i<prefix.length; i++) {
        var exp = new RegExp ("^" + prefix[i]);
        if (exp.test (cardNo)) PrefixValid = true;
      }
          
      // If it isn't a valid prefix there's no point at looking at the length
      if (!PrefixValid) {
         ccErrorNo = 3;
          //Ext.getCmp('btn_register').disable();
         return false; 
      }
        
      // See if the length is valid for this card
      lengths = cards[cardType].length.split(",");
      for (j=0; j<lengths.length; j++) {
        if (cardNo.length == lengths[j]) LengthValid = true;
      }
      
      // See if all is OK by seeing if the length was valid. We only check the length if all else was 
      // hunky dory.
      if (!LengthValid) {
         ccErrorNo = 4;
        // Ext.getCmp('img_false2').show();
                console.log('3');
           // $('#img_true2').hide();
        $('#img_false2').show();
        
         return false; 
      };   
      
      // The credit card is in the required format.
       //alert("Kartu kredit vALID.");
     //  Ext.getCmp('img_true2').show();
     //  Ext.getCmp('img_false2').hide();
       
           /* console.log('4');*/
        $('#img_true2').show();
        $('#img_false2').hide();
     //  Ext.getCmp('btn_save').enable();
       //Ext.getCmp('btn_unregister').disable();
      return true;

    }
  
  
  function getDataHW(){ //GET DATA HW
    var jparams = ""; 
    $.ajax({
       type     : 'POST',
      url      :'<?=base_url();?>entryp/Entryp/getDataHW',
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
                xhtm += "<td>" ; // <i class="glyph-icon icon-elusive-plus-circled"  > </i>&nbsp; ADD 
                xhtm += '<button class="btnAdd" id="btnAdd"><i class="glyph-icon icon-elusive-plus-circled" > </i> </button>&nbsp;&nbsp;';
                xhtm += '<button class="btnEdit" id="btnEdit">EDIT</button>&nbsp;&nbsp;&nbsp;&nbsp;'; 
                xhtm += "<td>"+item.PROSPECT_NBR ;
                xhtm += "<td>"+item.VC ;
                xhtm += "<td>"+item.DECODER ;
                xhtm += "<td>"+item.VC ;
                xhtm += "<td>"+item.DECODER ;
                xhtm += "<td>"+item.DECODER ;
                xhtm += "<td>"+item.DECODER ;
                xhtm += "<td class ='hide'>"+item.MODULE_ID;  
                xhtm += "<td>" ; 
              xhtm += "</tr>";
              });
              //alert(tot);
              $('#datatable_entryhw tbody').html(xhtm);           
              $('#datatable_entryhw').dataTable({
                "bPaginate" : true,
                "bSort" : true,
                "bInfo" : false,
                "bFilter" : false,
                                "bDestroy": true
              }); 

              return false; 
             }else if(result.status==0){
              $('#datatable_entryhw tbody').html("<center><strong>Data tidak ditemukan</strong></center>");
              return false; 
             }      
          }
        });
    }
    
<!--BUTTON GROUP Action -->



  
  
  $("#datatable_entryhw").on('click', '.btnAdd', function() {
         PopUpDialog();
       $("#appid1").val('');
       $("#vc").val('');
       $("#decoder").val('');
       $("#lnb").val('');
       $("#antenna").val('');
       $("#router").val('');
       $("#simcard").val(''); 
       $("#pros_num").val('');
       $("#oper").val('add'); 
      $('#pros_num').prop('readonly', false);      
       
    });

  $("#datatable_entryhw").on('click', '.btnEdit', function() {
      // get the current row 
      var currentRow = $(this).closest("tr"); 
      var col1 = currentRow.find("td:eq(0)").html(); // get current row 1st table cell TD value
      var col2 = currentRow.find("td:eq(1)").html(); // get current row 2nd table cell TD value
      var col3 = currentRow.find("td:eq(2)").html(); // get current row 3rd table cell  TD 
    var col4 = currentRow.find("td:eq(3)").html(); // get current row 3rd table cell  TD value  
      var col5 = currentRow.find("td:eq(4)").html(); // get current row 3rd table cell  TD value
    var col6 = currentRow.find("td:eq(5)").html(); // get current row 3rd table cell  TD value
    var col7 = currentRow.find("td:eq(6)").html(); // get current row 3rd table cell  TD value
    var col8 = currentRow.find("td:eq(7)").html(); // get current row 3rd table cell  TD value
    var col9 = currentRow.find("td:eq(8)").html(); // get current row 3rd table cell  TD value

      var data = col1 + "\n" + col2 + "\n" + col3; 
 
     PopUpDialog();
       $("#appid1").val('');
       $("#pros_num").val(col3);
       $('#pros_num').prop('readonly', true);
       $("#vc").val(col4);
       $("#decoder").val(col5);
       $("#lnb").val(col6);
       $("#antenna").val(col7);
       $("#router").val(col8);
       $("#simcard").val(col9);
       $("#oper").val('edit');         
    }); 
<!--End  BUTTON GROUP Action---->


    
    <!--POP UP GROUP -->
    function PopUpDialog() {
     $("#myDialogAdd").removeClass( "hide" );
     $("#myDialogAdd") .css('overflow', 'hidden');//disable horizontal scroll bar
     $("#myDialogAdd").dialog({
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
              //  SaveAddModule(); 
          }
        },
        ],    
      modal: true, 
    });   
       }
    
    
</script>



<!-- JAVASCRIPT FOR ANGULARJS ALERT NOTIFICATION -->
<script type="text/javascript">

var app = angular.module('valsys', []);

/*function myCtrl($scope) {

}*/
app.directive('fileModel', ['$parse', function ($parse) {
            return {
               restrict: 'A',
               link: function(scope, element, attrs) {
                  var model = $parse(attrs.fileModel);
                  var modelSetter = model.assign;
                  
                  element.bind('change', function(){
                     scope.$apply(function(){
                        modelSetter(scope, element[0].files[0]);
                     });
                  });
               }
            };
         }]);

app.service('fileUpload', ['$http','$q', function ($http,$q) {
    this.uploadFileToUrl = function(data,file, uploadUrl){
        var def = $q.defer();
        var fd            = new FormData();
        fd.append('file', file);
        fd.append('data', data);
        $http.post(uploadUrl, fd, {
            transformRequest: angular.identity,
            headers: {'Content-Type': undefined}
        })
        .success(function(data){
                alert('File Successfully Uploaded');
                //console.log(data);
                //def.resolve(data);
        })
        .error(function(){
           // console.log('BELUM');
                def.reject("Failed to upload");
        });
        return def.promise;
    }
}])
app.controller('myCtrl', function($scope,$http,fileUpload) {
     var promoId = $scope.PROSPECT_NBR;

     /* $http.get("<?php echo site_url('entryp/Entryp/angular_getPromoData');?>", {params:{"param1": promoId }}).success(function (result_DataPromo) { */
      $http.get("<?php echo site_url('entryp/Entryp/dataa_hw');?>", {params:{"param1": promoId }}).success(function (result_DataPromo) { 
            //console.log(result_DataPromo);            
            $scope.array_promo =  result_DataPromo;
            //console.log($scope.array_promo);
            
            $scope.ESTIMATED_PROMO = parseInt($scope.array_promo[0].disc_inst_fee);

        });

       $scope.ini_datanya = [];
    //hstatus
    $scope.flagbeda='<?php echo $detail->FBEDA;?>';
    $scope.process='<?php echo $detail->processId;?>';
    $scope.salesc='<?php echo $detail->SALESC;?>';
    $scope.pnumb='<?php echo $detail->PROSPECT_NBR;?>';
    $scope.formn='<?php echo $detail->FORMN;?>';
    $scope.prtype='<?php echo $detail->PROSPECT_TYPE;?>';
    $scope.hwstatus='<?php echo $detail->STATUS_HW;?>';
    $scope.identype='<?php echo $detail->ID_TYPE;?>';
    $scope.identypen='<?php echo $detail->IDTYPE_NUMBER;?>';
    $scope.expdate='<?php echo $detail->EXPIRED_DATE;?>';
    $scope.first_name='<?php echo $detail->FIRST_NAME;?>';
    $scope.middle_name='<?php echo $detail->MIDDLE_NAME;?>';
    $scope.last_name='<?php echo $detail->LAST_NAME;?>';
    $scope.date_of_birth='<?php echo $detail->DATE_OF_BIRTH;?>';
    $scope.religion='<?php echo $detail->RELIGION;?>';
    $scope.place_of_birth='<?php echo $detail->PLACE_BIRTH;?>';
    $scope.gender='<?php echo $detail->GENDER;?>';
    $scope.inst_date='<?php echo $detail->INSTALLATION_DATE;?>';
    $scope.inst_time='<?php echo $detail->INSTALLATION_TIME;?>';
    $scope.confirm_date='<?php echo $detail->CONFIRMATION_TIME_START;?>';
    $scope.home_phone='<?php echo $detail->PHONE_NBR;?>';
    $scope.nohp='<?php echo $detail->HANDPHONE_NBR;?>';
    $scope.STREET='<?php echo $detail->STREET;?>';
    $scope.PROVINCE='<?php echo $detail->PROVINCE;?>';
    $scope.CITY='<?php echo $detail->CITY;?>';
    $scope.DISTRICT='<?php echo $detail->DISTRICT;?>';
    $scope.SUBDISTRICT='<?php echo $detail->RT;?>';
    $scope.ZIPCODE='<?php echo $detail->POSTALCODE;?>';
    $scope.INSTALL_ADDRESS='<?php echo $detail->INSTALLATION_ADDRESS;?>';
    $scope.PROVINCE_INSTALL='<?php echo $detail->INSTALLATION_PROVINCE;?>';
    $scope.CITY_INSTALL='<?php echo $detail->INSTALLATION_CITY;?>';
    $scope.DISTRICT='<?php echo $detail->DISTRICT;?>';
    $scope.DISTRICT_INSTALL='<?php echo $detail->INSTALLATION_DISTRICT;?>';
    $scope.SUBDISTRICT_INSTALL='<?php echo $detail->INSTALLATION_SUBDISTRICT;?>'
    $scope.ZIPCODE_INSTALL='<?php echo $detail->INSTALLATION_ZIPCODE;?>';
    $scope.INSTALL_LANDMARK='<?php echo $detail->DIRECTIONS;?>';
    $scope.INSTALL_ADDRESSbilling='<?php echo $detail->BILLING_ADDRESS;?>';
    $scope.PROVINCE_BILLING='<?php echo $detail->BILLING_PROVINCE;?>';
    $scope.CITY_BILLING='<?php echo $detail->BILLING_CITY;?>';
    $scope.DISTRICT_BILLING='<?php echo $detail->BILLING_DISTRICT;?>';
    $scope.SUBDISTRICT_BILLING='<?php echo $detail->BILLING_SUBDISTRICT;?>';
    $scope.ZIPCODE_BILLING='<?php echo $detail->BILLING_ZIPCODE;?>';
    $scope.SALES_NIK='<?php echo $detail->NIK_SALES;?>';
    $scope.SALES_CODE='<?php echo $detail->SALES_CODE;?>';
    $scope.SALES_NAME='<?php echo $detail->NAME_SALES;?>';
    $scope.SALES_DIFFERENTCAUSES='<?php echo $detail->DIFFERENT_CAUSE;?>';
    $scope.SALES_OFFICEBRANCH='<?php echo $detail->OFFICE_BRANCH;?>';
    $scope.SALES_NAMEBRACHHEAD='<?php echo $detail->HEAD_BRANCH;?>';
    $scope.ENTITY_CODE='<?php echo $detail->ENTITY_CODE;?>';
    $scope.POINT_OF_SALES='<?php echo $detail->POS;?>';
    $scope.EMERGENCY_NAME='<?php echo $detail->EC_NAME;?>';
    $scope.EC_RELATION='<?php echo $detail->EC_RELATION;?>';
    $scope.EMERGENCY_PHONE='<?php echo $detail->EC_PHONE;?>';
    $scope.EMERGENCY_ADDRESS='<?php echo $detail->EC_ADDR;?>';
    $scope.email='<?php echo $detail->EMAIL;?>';
    $scope.house_type='<?php echo $detail->BUILDING_TYPE;?>';
    $scope.house_status='<?php echo $detail->BUILDING_STATUS;?>';
    $scope.INCOME='<?php echo $detail->INCOME;?>';
    $scope.OCCUPATION='<?php echo $detail->OCCUPATION;?>';
    $scope.BILLING_FREQUENCY='<?php echo $detail->BILLING_FREQUENCY;?>';
    $scope.BRAND='<?php echo $detail->BRAND;?>';
    $scope.STATUS='<?php echo $detail->STATUS;?>';
    $scope.AVAILABLE_PROMO='<?php echo $detail->AVAILABLE_PROMO;?>';
    $scope.INSTALLATION_COSTT='<?php echo $detail->INSTALLATION_COST;?>';
    $scope.ESTIMATED_COST_PACKAGE='<?php echo $detail->COST_PACKAGE;?>';
    $scope.ESTIMATED_ALACARTE='<?php echo $detail->ALACARTE_COST;?>';
    $scope.ESTIMATED_PROMO='<?php echo $detail->PROMO_COST;?>';
    $scope.TOTAL_ESTIMATED_COSTS='<?php echo $detail->TOTAL_COST;?>';
    $scope.payment_date='<?php echo $detail->PAYMENT_DATE;?>';
    $scope.payment_method='<?php echo $detail->PAYMENT_MODE;?>';
    $scope.atm_bank_name='<?php echo $detail->BANK_NAME;?>';
    $scope.ex_date='<?php echo $detail->EXP_DATE;?>';
    $scope.TOTAL_AMOUNT_GABUNGAN='<?php echo $detail->TOTAL_AMOUNT_GABUNGAN;?>';
    $scope.NOTES='<?php echo $detail->NOTES;?>';
    $scope.ckktp='<?php echo $detail->KET_KTP;?>';
    $scope.cc='<?php echo $detail->KET_CC;?>';
    $scope.dana='<?php echo $detail->KET_DANA;?>';
    $scope.sk='<?php echo $detail->KET_KUASA;?>';
    $scope.ttd='<?php echo $detail->KET_TTD;?>';
    $scope.sw='<?php echo $detail->KET_PERNYATAAN;?>';


   












    $scope.idprospect='<?php echo $detail->PROSPECT_ID;?>';

    $scope.people = [
        ];
    $scope.statusep = [
        ];
    
  $scope.addPerson = function(){
     if(confirm("Are you sure to add data?")){
        
    var person = {

        idprospect:$scope.idprospect,
        informasid:$scope.infodata,
        status: $scope.statuss,
        reason: $scope.REASONn,
      
    };

    $scope.people.push(person);
    $scope.statusep.push($scope.statuss);
    //console.log($scope.statusep); 


    $http({
        method: 'POST',
        url: '<?=base_url();?>entryp/Entryp/admin_app',
        data: person,
      });
}
   // console.log($http); 
    //todo here call controller
  };
   /*$scope.removePerson = function(index){
    if(confirm("Are you sure to remove Customer")){
        angular.forEach($scope.People, function(value, key) {
            if (value.id === index){
                $scope.People.splice(key, 1);
            }
        });
    }
};  */
   $scope.removePerson = function(index){
    if(confirm("Are you sure to remove Customer?")){
    $scope.people.splice(index, 1);
    $scope.statusep.splice(index, 1);
    
       if($scope.statuss =='Approve'){
    var person = {

        idprospect:$scope.idprospect,
        informasid:$scope.infodata,
        status: $scope.statuss,
        reason: $scope.REASONn,
      
    };
}else if ($scope.statuss =='Reject'){
    var person = {

        idprospect:$scope.idprospect,
        informasid:$scope.infodata,
        status: $scope.statuss,
        reason: $scope.rej,
      
    };
    }else if($scope.statuss =='Pending'){
    var person = {

        idprospect:$scope.idprospect,
        informasid:$scope.infodata,
        status: $scope.statuss,
        reason: $scope.pend,
      
    };
}
    //console.log(person);
    $http({
        method: 'POST',
        url: '<?=base_url();?>entryp/Entryp/admin_app_rem',
        data: person,
      });
    }

   };    

   $scope.save = function(){
    console.log($scope.statusep); 
             $scope.finals = 'Approve1';

       // console.log(finals);
        console.log($scope.finals);
        var cuk =  {
                finall:$scope.finals,
                idprospect:$scope.idprospect,
                lightv:$scope.LIGHT,
                process:$scope.process,
        }
    $http({
        method: 'POST',
        url: '<?=base_url();?>entryp/Entryp/update_kacab_app',
        data: cuk,
      }).success(function(data){
            alert($scope.finals);
           window.location.href = "http://192.168.168.219/valsys/entryp/entryp/reg_admin";
            // console.log("text :"+data);
            // def.resolve(data);
        }).error(function(){
           // console.log('BELUM');
            // def.reject("Failed to upload");
        });

    
     /*if(confirm("Are you sure to add data?")){
         if($scope.statuss =='Approve'){
    }
    var person = {

        idprospect:$scope.idprospect,
        informasid:$scope.infodata,
        status: $scope.statuss,
        reason: $scope.REASONn,
      
    };
}else if ($scope.statuss =='Reject'){
    var person = {

        idprospect:$scope.idprospect,
        informasid:$scope.infodata,
        status: $scope.statuss,
        reason: $scope.rej,
      
    };
    }else if($scope.statuss =='Pending'){
    var person = {

        idprospect:$scope.idprospect,
        informasid:$scope.infodata,
        status: $scope.statuss,
        reason: $scope.pend,
      
    };
}
    $scope.people.push(person);
    $scope.statusep.push($scope.statuss);
    //console.log($scope.statusep); 


    $http({
        method: 'POST',
        url: '<?=base_url();?>entryp/Entryp/admin_app',
        data: person,
      });
}*/
   // console.log($http); 
    //todo here call controller
  };
   
   // console.log('asf');





    $scope.units = [
        {'id': 'Pinjam Pakai', 'label': 'Pinjam Pakai'},
        {'id': 'Beli Putus', 'label': 'Beli Putus'},
       
    ]
    $scope.hstatus= $scope.units[0];
    $scope.unitss = [
        {'id': 'REGSIL', 'label': 'Regular Silver'},
        {'id': 'REGGOLD', 'label': 'Regular Gold'},
        {'id': 'REGPLAT', 'label': 'Regular Platinum'},
        {'id': 'REGSTAFF', 'label': 'Regular Staff'},
        {'id': 'CORPGOLD', 'label': 'Corporate Gold'},
        {'id': 'CORPPLAT', 'label': 'Corporate Platinum'},
        {'id': 'CORPSIL', 'label': 'Corporate Silver'},
        {'id': 'DISPLAY', 'label': 'DISPLAY'},
        {'id': 'OTT', 'label': 'OTT'},
        
    ]
    $scope.ptype= $scope.unitss[0];
     $scope.idtype = [
        {'id': 'KTP', 'label': 'KTP'},
        {'id': 'Passport', 'label': 'Passport'},
        {'id': 'SIM', 'label': 'SIM'},
        
        
    ]
    $scope.INPUTID= $scope.idtype[0];
    //
     $scope.atm_bank_name = '<?php echo $detail->BANK_NAME;?>';
     $scope.atm_account_bank_number = '<?php echo $detail->BANK_ACCOUNT_NO;?>';
     $scope.atm_name = '<?php echo $detail->ACCOUNT_NAME;?>';

    $scope.d_bank_name = '<?php echo $detail->BANK_NAME;?>';
     $scope.account_bank_number = '<?php echo $detail->BANK_ACCOUNT_NO;?>';
     $scope.d_name = '<?php echo $detail->ACCOUNT_NAME;?>';
    $scope.credit_card = true;

     $scope.card_type = '<?php echo $detail->CARD_TYPE;?>';
     $scope.nama = '<?php echo $detail->CC_NAME;?>';
     $scope.expired_date = '<?php echo $detail->EXP_DATE;?>';
    $scope.reason =true;
    $scope.light =true;
    $scope.savebut =true;
    $scope.aa =true;
    $scope.rr =true;
    $scope.tabledata =true;
    $scope.status =true;
    $scope.addbutton =true;
    $scope.tabhw =true;
    $scope.expiredd =true;
    $scope.numberp =true;
    $scope.ktphide = true;
    /*$scope.tab = true;
    $scope.profile = true;
    $scope.package = true;
    $scope.payment = true;
    $scope.pickup = true;*/
    //payment data
    $scope.cardtype = true;
    $scope.cardn = true;
    $scope.bankakun = true;
    $scope.nameuser = true;
    $scope.bankname = true;
    $scope.expired = true;
    $scope.ok = true;
    $scope.falsee = true;

 
   $scope.ADD_PACKAGE = false; 
   $scope.ADD_PACKAGE1 = false;
   $scope.ADD_PACKAGE2 = false;

    //!
    /*$scope.addbutton = true;*/
    $scope.master_employee_data = [];
    $scope.upload = [];
    $scope.ini_datanya=[];
    $scope.upload_data_view=[];
    $scope.zipcodeData = [];
    $scope.cost_transport = [];

    $scope.array_package = [];
    $scope.array_promo = [];
    $scope.packageBasic = [];
    $scope.packageAlacarte = [];
   // $scope.ESTIMATED_COST_PACKAGE = 0;
    //getProsedurProspectNbr();
    
    
    function getProsedurProspectNbr()
    {
        var sales_code_temp = "17170";
            

        $http.get("<?php echo site_url('entryp/Entryp/angular_getGenerateProspectNumber');?>", {params:{"param1": sales_code_temp}}).success(function (result_ProspectNbrGenerator) { 
            console.log(result_ProspectNbrGenerator.trim());
            $scope.pnumb =   result_ProspectNbrGenerator.trim();
        });

       

    }

    $scope.getValuePromo = function()
    {
      var promoId = $scope.pnumb;
      $http.get("<?php echo site_url('entryp/Entryp/angular_getPromoData');?>", {params:{"param1": promoId }}).success(function (result_DataPromo) { 
            //console.log(result_DataPromo);            
            $scope.array_promo =  result_DataPromo;
            //console.log($scope.array_promo);
            
            $scope.ESTIMATED_PROMO = parseInt($scope.array_promo[0].disc_inst_fee);

        });
    }

    
    $scope.getValuePackageBasic = function()
    {
        //console.log(payment_period);
        var bundele_id = $scope.PACKAGE_BASIC;
        
        $http.get("<?php echo site_url('entryp/Entryp/angular_getPackageBasicData');?>", {params:{"param1": bundele_id}}).success(function (result_DataPackageBasic) { 
            $scope.packageBasic = result_DataPackageBasic;
            console.log($scope.ESTIMATED_COST_PACKAGE);
            $scope.ESTIMATED_COST_PACKAGE    =   parseInt($scope.packageBasic[0].price);

        });

    }

    $scope.getValuePackageBasic1 = function()
    {
        console.log($scope.PACKAGE_BASIC1);
        var bundele_id = $scope.PACKAGE_BASIC1;
        
        $http.get("<?php echo site_url('entryp/Entryp/angular_getPackageBasicData');?>", {params:{"param1": bundele_id}}).success(function (result_DataPackageBasic) { 
            $scope.packageBasic = result_DataPackageBasic;
            console.log($scope.ESTIMATED_COST_PACKAGE);
            $scope.ESTIMATED_COST_PACKAGE    =  parseInt($scope.ESTIMATED_COST_PACKAGE) + parseInt($scope.packageBasic[0].price);

        });

    }

    $scope.getValuePackageAlacarte = function(bundele_id)
    {   
      
        //console.log(bundele_id);
        //console.log($scope.PACKAGE_ALACARTE);
        $http.get("<?php echo site_url('entryp/Entryp/angular_getPackageAlacarteData');?>", {params:{"param1": bundele_id,"param2[]":$scope.PACKAGE_ALACARTE}}).success(function (result_DataPackageAlacarte) { 
            //console.log(result_DataPackageAlacarte);
            
            $scope.packageAlacarte = result_DataPackageAlacarte;
            
            //console.log(totalCostAlacarte);
            var totalCostAlacarte = 0;
            for(var i=0;i<$scope.packageAlacarte.length;i++)
            {
              //console.log($scope.packageAlacarte[i]);
              totalCostAlacarte += parseInt($scope.packageAlacarte[i]);
            }
            //console.log(totalCostAlacarte);

            $scope.ESTIMATED_ALACARTE = parseInt(totalCostAlacarte);

        });

    }
    $scope.StatusPackageChange = function(statusvalueschanged)
    {
        //console.log(statusvalueschanged);
        if(statusvalueschanged == "single")
            $scope.ADD_PACKAGE = true;
        else
        {
            $scope.ADD_PACKAGE2 = false;
            $scope.ADD_PACKAGE1=false; 
            $scope.ADD_PACKAGE = false;
        }
    }

    $scope.PaymentPeriodChange = function()
    {
        /*console.log($scope.PAYMENT_PERIOD);
        console.log($scope.ESTIMATED_COST_PACKAGE);
        $scope.ESTIMATED_COST_PACKAGE = parseInt($scope.PAYMENT_PERIOD * $scope.ESTIMATED_COST_PACKAGE);*/

        var bundele_id = $scope.PACKAGE_BASIC;
        
        $http.get("<?php echo site_url('entryp/Entryp/angular_getPackageBasicData');?>", {params:{"param1": bundele_id}}).success(function (result_DataPackageBasic) { 
            $scope.packageBasic = result_DataPackageBasic;
            $scope.ESTIMATED_COST_PACKAGE    = parseInt($scope.PAYMENT_PERIOD * $scope.packageBasic[0].price);
        });

        $http.get("<?php echo site_url('entryp/Entryp/angular_getPackageAlacarteData');?>", {params:{"param1": bundele_id,"param2[]":$scope.PACKAGE_ALACARTE}}).success(function (result_DataPackageAlacarte) { 
            //console.log(result_DataPackageAlacarte);
            
            $scope.packageAlacarte = result_DataPackageAlacarte;
            
            //console.log(totalCostAlacarte);
            var totalCostAlacarte = 0;
            for(var i=0;i<$scope.packageAlacarte.length;i++)
            {
                //console.log($scope.packageAlacarte[i]);
                totalCostAlacarte += parseInt($scope.packageAlacarte[i]);
            }
            //console.log(totalCostAlacarte);

            $scope.ESTIMATED_ALACARTE = parseInt($scope.PAYMENT_PERIOD * totalCostAlacarte);

        });


    } 


    $scope.alert = function(value_upload) {
        $scope.IMAGEVIEW = value_upload.p_file_path;
       // console.log(value_upload.p_file_path);
        
    };

    

    $scope.installsameidentity = function()
    {
        //console.log($scope.cek_install);
        if($scope.cek_install == true){
            $scope.PROVINCE_INSTALL = $scope.PROVINCE;
            $scope.CITY_INSTALL = $scope.CITY;
            $scope.DISTRICT_INSTALL = $scope.DISTRICT;
            $scope.SUBDISTRICT_INSTALL = $scope.SUBDISTRICT;
            $scope.ZIPCODE_INSTALL = $scope.ZIPCODE;
            
            
        }else{
            $scope.PROVINCE_INSTALL = "";
            $scope.CITY_INSTALL = "";
            $scope.DISTRICT_INSTALL = "";
            $scope.SUBDISTRICT_INSTALL = "";
            $scope.ZIPCODE_INSTALL = "";
           
        }
        
    }
    $scope.billing_same_identity = function()
    {
        //console.log($scope.cek_billing_identity);
        if($scope.cek_billing_identity == true)
        {
            $scope.PROVINCE_BILLING = $scope.PROVINCE;
            $scope.CITY_BILLING = $scope.CITY;
            $scope.DISTRICT_BILLING = $scope.DISTRICT;
            $scope.SUBDISTRICT_BILLING = $scope.SUBDISTRICT;
            $scope.ZIPCODE_BILLING = $scope.ZIPCODE;
        }
        else
        {
            $scope.PROVINCE_BILLING = "";
            $scope.CITY_BILLING = "";
            $scope.DISTRICT_BILLING = "";
            $scope.SUBDISTRICT_BILLING = "";
            $scope.ZIPCODE_BILLING = "";
        }
    }
    $scope.billing_same_install = function()
    {
        //console.log($scope.cek_billing_install);
        if($scope.cek_billing_install == true)
        {
            $scope.PROVINCE_BILLING = $scope.PROVINCE_INSTALL;
            $scope.CITY_BILLING = $scope.CITY_INSTALL;
            $scope.DISTRICT_BILLING = $scope.DISTRICT_INSTALL;
            $scope.SUBDISTRICT_BILLING = $scope.SUBDISTRICT_INSTALL;
            $scope.ZIPCODE_BILLING = $scope.ZIPCODE_INSTALL;
        }
        else
        {
            $scope.PROVINCE_BILLING = "";
            $scope.CITY_BILLING = "";
            $scope.DISTRICT_BILLING = "";
            $scope.SUBDISTRICT_BILLING = "";
            $scope.ZIPCODE_BILLING = "";
        }

    }

    $scope.addNewPackage = function(count)
    {
        
        if(count==1)
        {
            $scope.ADD_PACKAGE = true;
                
        }
        else if(count==2)
        {
            $scope.ADD_PACKAGE1 = true;
            
        }
        else
        {
            $scope.ADD_PACKAGE2 = true;
        }
        
    }
    $scope.removeChoice = function() {
        var lastItem = $scope.array_package.length-1;
        $scope.array_package.splice(lastItem);
    };

    /*$scope.openModalImage = function (imageSrc, imageDescription) {
    $modal.open({
        templateUrl: "/opt/lampp/htdocs/valsys/aplication/modules/entryp/views/modalImage.html",
        resolve: {
            imageSrcToUse: function () {
                return imageSrc;
            },
            imageDescriptionToUse: function () {
                return imageDescription;
            }
        },
            controller: [
              "$scope", "imageSrcToUse", "imageDescriptionToUse",
                function ($scope, imageSrcToUse, imageDescriptionToUse) {
                    $scope.ImageSrc = imageSrcToUse;
                    return $scope.ImageDescription = imageDescriptionToUse;
              }
            ]
        });
    };*/
    $scope.stateChanged = function (qId) {
       if($scope.answers[qId]){ //If it is checked
           alert('test');
       }
    }

    $scope.getZipcodeforCostTransport = function()
    {
        var ZipcodeforCostTransport = $scope.ZIPCODE;
        //console.log(ZipcodeforCostTransport);
        getCostTransport(ZipcodeforCostTransport);
        

    }
    
    function getCostTransport(zipcodevalues)
    {
        //console.log(zipcodevalues);
        var values = zipcodevalues;
        $http.get("<?php echo site_url('entryp/Entryp/angular_getCostTransportData');?>", {params:{"param1": values}}).success(function (result_DataCostTransport) { 
            //console.log(result_DataCostTransport);
            $scope.cost_transport=result_DataCostTransport;
            //console.log($scope.cost_transport);
            //console.log($scope.cost_transport[0].JARAK);

            $scope.CST_JARAK    = $scope.cost_transport[0].JARAK;
            $scope.CST_DKLK  =  $scope.cost_transport[0].DKLK;
            $scope.CST_COST  =  $scope.cost_transport[0].BIAYA;
            $scope.CST_BRANCH  =  $scope.cost_transport[0].BRANCH;

        });

        

    }

    //console.log($scope.cost_transport);

    $scope.getOperationalEntityView = function()
    {
        //console.log($scope.BRANCH);
        $http.get("<?php echo site_url('entryp/Entryp/angular_OperationalEntityView');?>").success(function(result){
            console.log('flag berhasil');
            console.log(result);
            $scope.ini_datanya=result;
        });


    }
        
    function getUploadData()
    {
        //not a function to call resultDataUpload (bukan sebuah fungsi) tapi langsung memanggil data upload secara langsung
        $http.get("<?php echo site_url('entryp/Entryp/angular_ViewUploadDataKacab');?>", {params:{"param1": $scope.idprospect}}).success(function(resultDataUpload){
            $scope.upload_data_view=resultDataUpload;
        });
    }

    getUploadData();
    //not a function to call resultDataUpload (bukan sebuah fungsi) tapi langsung memanggil data upload secara langsung
        /*$http.get("<?php echo site_url('entryp/Entryp/angular_ViewUploadData');?>").success(function(resultDataUpload){
            console.log('upload data view berhasil');
            $scope.upload_data_view=resultDataUpload;
            // console.log($scope.upload_data_view);
        });*/
         
    

    $scope.getVal = function(val) {
        $scope.ENTITY_CODE = val.entity_code;
        $scope.POINT_OF_SALES = val.entity_name;
        $('#PointOfSales').modal('hide');
        //alert(val.entity_id +" "+val.entity_code);
    }



    $scope.getSalesProfileData = function()
    {
        var sale_code = $scope.SALES_CODE_SEARCH;
        var sales_name = $scope.SALES_NAME_SEARCH;
        $http.get("<?php echo site_url('entryp/Entryp/angular_EmployeeView');?>", {params:{"param1": sale_code, "param2": sales_name}}).success(function (result_DataSalesProfile) { 
            $scope.master_employee_data=result_DataSalesProfile;
        });

        
    }
    $scope.getValueSalesProfileData = function(value) {
        $scope.SALES_CODE = value.employee_code;
        $scope.SALES_NAME = value.first_name;
        //alert(val.entity_id +" "+val.entity_code);
        $('#SalesProfileModal').modal('hide');
    }

    $scope.getZipCodeViewData = function()
    {
      var val1 = $scope.SUBDISTRICT_SEARCH;
      var val2 = $scope.ZIPCODE_SEARCH;
      $http.get("<?php echo site_url('entryp/Entryp/angular_getZipCodeViewData');?>", {params:{"param1": val1, "param2": val2}}).success(function (result_DataZipcode) { 
        //console.log(result_DataZipcode);
        $scope.zipcodeData=result_DataZipcode;
      });

    }

    $scope.getZipCodeValues = function(value_zipcode) 
    {
      $scope.ZIPCODE = value_zipcode.ZIPCODE;
        $scope.DISTRICT = value_zipcode.DISTRICT;
        $scope.SUBDISTRICT = value_zipcode.SUB_DISTRICT;
        $scope.CITY = value_zipcode.CITY;
        $scope.PROVINCE = value_zipcode.PROVINCE;
        $('#ZipCodeModal').modal('hide');
    }
    $scope.getZipCodeInstallValues = function(value_zipcode) 
    {
        $scope.ZIPCODE_INSTALL = value_zipcode.ZIPCODE;
        $scope.DISTRICT_INSTALL = value_zipcode.DISTRICT;
        $scope.SUBDISTRICT_INSTALL = value_zipcode.SUB_DISTRICT;
        $scope.CITY_INSTALL = value_zipcode.CITY;
        $scope.PROVINCE_INSTALL = value_zipcode.PROVINCE;
        $('#ZipCodeInstallationModal').modal('hide');
    }
    $scope.getZipCodeBillingValues = function(value_zipcode) 
    {
        $scope.ZIPCODE_BILLING = value_zipcode.ZIPCODE;
        $scope.DISTRICT_BILLING = value_zipcode.DISTRICT;
        $scope.SUBDISTRICT_BILLING = value_zipcode.SUB_DISTRICT;
        $scope.CITY_BILLING = value_zipcode.CITY;
        $scope.PROVINCE_BILLING = value_zipcode.PROVINCE;
        $('#ZipCodeBillingModal').modal('hide');
    }

    $scope.saveFile  = function(filename)
    {
        //console.log($scope.myFile);
        var prosNbr  = $scope.PROSPECT_NUMBER;
        var userName   = $scope.PROFILE_NAME;
        var category = $scope.CATEGORY_FILE;
        var fileUrl = '<?php echo site_url('entryp/Entryp/angular_UploadData');?>';
        var file   =  $scope.myFile;

        console.log(prosNbr);
        console.log(userName);
        console.log(category);

        var dataObj = {
            P_PROSPECT_NBR  : prosNbr,
            P_UPLOAD_BY : userName,
            P_CATEGORY_FILE: category
        };
        fileUpload.uploadFileToUrl(JSON.stringify(dataObj),file, fileUrl).then(function(data) {

            //alert(data.message);
        },
        function(data) {
            //$scope.dataLoading = true;
            //reloadUpload();
            //$scope.app.behavior.closeDialog();
            //alert('upload retrieval failed.');            
        });
        getUploadData();

    }

   

    $scope.validExpDate = function(){
      if($scope.BLN_EXP_DATE != undefined){
        if($scope.BLN_EXP_DATE.length > 2){
          alert("Month max 2 digit!");
          $scope.BLN_EXP_DATE = $scope.BLN_EXP_DATE.substr(0, 2);
        }
      }

      if($scope.THN_EXP_DATE != undefined){
        if($scope.THN_EXP_DATE.length > 4){
          alert("Year max 4 digit!");
          $scope.THN_EXP_DATE = $scope.THN_EXP_DATE.substr(0, 4);
        }
      }
        if($scope.PAYMENT_CARDNUMBER != undefined){
            if($scope.PAYMENT_CARDNUMBER.length > 16){
                alert("max 16 digit!");
                $scope.PAYMENT_CARDNUMBER = $scope.PAYMENT_CARDNUMBER.substr(0, 16);
            }
        }
        if($scope.pnumb != undefined){
            if($scope.pnumb.length > 12){
                alert("max 12 digit!");
                $scope.pnumb = $scope.pnumb.substr(0, 12);
            }
        }
       
      console.log($scope.BLN_EXP_DATE+"/"+$scope.THN_EXP_DATE);
    }


    /*$scope.validation_check_form = function()
    {
        if($scope.formm.$valid == false)
        {
            $scope.error = true;
        }
        else
        {
            $scope.error = false;
            getProsedurProspectNbr();
            var person = {

        CATEGORY:$scope.salesc,
        PN:$scope.pnumb,
        pt:$scope.prtype,
        HARDWARE_STATUS:$scope.hwstatus,
        sa:$scope.sgs,
        snm:$scope.sgsname,
        ID_TYPE:$scope.INPUTID,
        ID_NUMBERr:$scope.IDN,
        FIRST_NAME:$scope.PROFILE_NAME,
        MIDDLE_NAME:$scope.MIDDLE_NAME,
        LAST_NAME:$scope.LASTNAME,
        GENDER:$scope.GENDER,
        RELIGION:$scope.RELIGION,
        PLACE_BIRTH:$scope.PLACEOFBIRTH,
        DATE_OF_BIRTH:$scope.DATEOFBIRTH,
        PLN_ID:$scope.IDPLN,
        HOME_PHONE:$scope.PHOUSE,
        MOBILE_PHONE:$scope.PHP,
        expireddate:$scope.EXPIRED_DATE,
        EMAIL:$scope.EMAIL,
        BUILDING_TYPE:$scope.HTYPE,
        BUILDING_STATUS:$scope.HSTATUS,
        OCCUPATION:$scope.OCCU,
        INCOME:$scope.INCOM,
        STREET:$scope.STREET,
        PROVINCE:$scope.PROVINCE,
        CITY:$scope.CITY,
        DISTRICT:$scope.DISTRICT,
        SUBDISTRICT:$scope.SUBDISTRICT,
        ZIPCODE:$scope.ZIPCODE,
        INSTALLATION_ADDRESS:$scope.INSTALL_ADDRESS,
        DIRECTIONS:$scope.INSTALL_LANDMARK,
        PROVINCE_INSTALL:$scope.PROVINCE_INSTALL,
        CITY_INSTALLATION:$scope.CITY_INSTALL,
        DISTRICT_INSTALLATION:$scope.DISTRICT_INSTALL,
        SUBDISTRICT_INSTALLATION:$scope.SUBDISTRICT_INSTALL,
        ZIPCODE_INSTALLATION:$scope.ZIPCODE_INSTALL,
        BILLING_ADDRESS:$scope.PROVINCE_BILLING,
        PROVINCE_BILLING:$scope.PROVINCE_BILLING,
        CITY_BILLING:$scope.CITY_BILLING,
        DISTRICT_BILLING:$scope.DISTRICT_BILLING,
        SUBDISTRICT_BILLING:$scope.SUBDISTRICT_BILLING,
        ZIPCODE_BILLING: $scope.ZIPCODE_BILLING,
        emergency_name: $scope.EMERGENCY_NAME,
        emergency_sibling: $scope.EMERGENCY_SIBLING,
        emergency_phone: $scope.EMERGENCY_PHONE,
        emergency_address: $scope.EMERGENCY_ADDRESS,
        sales_nik: $scope.SALES_NIK,
        sales_name: $scope.SALES_NAME,
        sales_differentcauses: $scope.SALES_DIFFERENTCAUSES,
        sales_officebranch: $scope.SALES_OFFICEBRANCH,
        sales_namebranchhead: $scope.SALES_NAMEBRACHHEAD,
        ENTITYCODE: $scope.ENTITY_CODE,
        POS: $scope.POINT_OF_SALES,
        STOREAREA: $scope.promotion,
      
    };
    
       
    $http({
        method: 'POST',
        url: '<?=base_url();?>entryp/Entryp/DTDaddData',
        data: person,
      });   
        }

        console.log($scope.formm.$valid);
    }*/


    $scope.testangular = function(){
    
    /*if( ($scope.IDENTITY_NAME=="" ||  $scope.IDENTITY_NAME==undefined) || ($scope.INPUTID=="" ||  $scope.INPUTID==undefined) || ($scope.GENDER=="" ||  $scope.GENDER==undefined) || ($scope.RELIGION=="" ||  $scope.RELIGION==undefined) ||($scope.PLACEOFBIRTH=="" ||  $scope.PLACEOFBIRTH==undefined) || ($scope.DATEOFBIRTH=="" ||  $scope.DATEOFBIRTH==undefined))
    {
        alert("\n Please check Profile Tab (Customer Data) \n --------------------------------------- \n =>Identity Card \n =>Name \n =>Religion \n =>Gender \n =>Date Of Birth" );

    }

    if(($scope.STREET=="" ||  $scope.STREET==undefined) || ($scope.PROVINSI_IDENTITY=="" ||  $scope.PROVINSI_IDENTITY==undefined) || ($scope.KOTA_IDENTITY=="" ||  $scope.KOTA_IDENTITY==undefined) || ($scope.KECAMATAN_IDENTITY=="" ||  $scope.KECAMATAN_IDENTITY==undefined) || ($scope.KELURAHAN_IDENTITY=="" ||  $scope.KELURAHAN_IDENTITY==undefined) ||  ($scope.ZIPCODE=="" ||  $scope.ZIPCODE==undefined) ||  ($scope.EXPIRED_DATE=="" ||  $scope.EXPIRED_DATE==undefined) || ($scope.INSTALLATION_DATE=="" ||  $scope.INSTALLATION_DATE==undefined) || ($scope.INSTALLATION_TIME=="" ||  $scope.INSTALLATION_TIME==undefined) || ($scope.CONFIRMATION_DATE_START=="" ||  $scope.CONFIRMATION_DATE_START==undefined) || ($scope.CONFIRMATION_TIME_START=="" ||  $scope.CONFIRMATION_TIME_START==undefined) || ($scope.CONFIRMATION_DATE_END=="" ||  $scope.CONFIRMATION_DATE_END==undefined) || ($scope.CONFIRMATION_TIME_END=="" ||  $scope.CONFIRMATION_TIME_END==undefined)  )     
    {
        alert("Please check Profile Tab (Installation Address Data) \n ------------------------------------------------------\n =>Address identity \n =>Provinsi \n =>Kota \n => Kecamatan \n =>Kelurahan \n =>Zipcode \n =>Installation Date \n =>Installation Time \n =>Confirmation Date Start \n =>Confirmation Date End \n =>Confirmation Time Start \n =>Confirmation Time End \n ");
    }
    if(($scope.INSTALL_ADDRESS=="" ||  $scope.INSTALL_ADDRESS==undefined) || ($scope.PROVINCE_INSTALL=="" ||  $scope.PROVINCE_INSTALL==undefined) || ($scope.CITY_INSTALL=="" ||  $scope.CITY_INSTALL==undefined) || ($scope.DISTRICT_INSTALL=="" ||  $scope.DISTRICT_INSTALL==undefined) || ($scope.SUBDISTRICT_INSTALL=="" ||  $scope.SUBDISTRICT_INSTALL==undefined) ) 
    {
        alert("Please check Profile Tab (Installation Address) \n ------------------------------------------------\n=>Installation Address \n =>Province Install \n =>City Install \n =>District Install \n =>Subdistrict Install");
    }
    if(($scope.ADDRESS_BILLING=="" || $scope.ADDRESS_BILLING==undefined) || ($scope.PROVINCE_BILLING=="" || $scope.PROVINCE_BILLING==undefined) || ($scope.CITY_BILLING=="" || $scope.CITY_BILLING==undefined) || ($scope.DISTRICT_BILLING=="" || $scope.DISTRICT_BILLING==undefined) || ($scope.SUBDISTRICT_BILLING=="" || $scope.SUBDISTRICT_BILLING==undefined))
    {
        alert("Please check Profile Tab (Billing Address) \n ------------------------------------\n => Address Billing \n => Province Billing \n => CITY BILLING \n => DISTRICT BILLING \n  ");
    }
    if(($scope.EMERGENCY_NAME==""||$scope.EMERGENCY_NAME==undefined) || ($scope.EMERGENCY_SIBLING==""||$scope.EMERGENCY_SIBLING==undefined) || ($scope.EMERGENCY_PHONEHOUSE==""||$scope.EMERGENCY_PHONEHOUSE==undefined) || ($scope.EMERGENCY_PHONE==""||$scope.EMERGENCY_PHONE==undefined) || ($scope.EMERGENCY_ADDRESS==""||$scope.EMERGENCY_ADDRESS==undefined))
    {
        alert("Please check Profile Tab (Emergency Profile) \n --------------------------------------------------\n => Emergency Name \n => Phone House \n => Phone (HP) \n => Address");
    }
    if(($scope.SALES_NAME==""||$scope.SALES_NAME==undefined) || ($scope.SALES_NIK==""||$scope.SALES_NIK==undefined) || ($scope.SALES_DIFFERENTCAUSES==""||$scope.SALES_DIFFERENTCAUSES==undefined) || ($scope.SALES_CODE==""||$scope.SALES_CODE==undefined) || ($scope.SALES_OFFICEBRANCH==""||$scope.SALES_OFFICEBRANCH==undefined) ||  ($scope.SALES_NAMEBRACHHEAD==""||$scope.SALES_NAMEBRACHHEAD==undefined) )
    {
        alert("Please check Profile Tab (Sales Profile Data) \n ------------------------------------------------\n => Sales Name \n => Sales Nik \n => Sales Different Installation Causes \n => Sales Code \n => Sales Office Branch \n => Sales Name of Head Branch");
    }
    if(($scope.PACKAGE_BRAND==""||$scope.PACKAGE_BRAND==undefined) || ($scope.PACKAGE_SINGLE==""||$scope.PACKAGE_SINGLE==undefined) || ($scope.PACKAGE_PRODUK==""||$scope.PACKAGE_PRODUK==undefined))
    {
        alert("Please check Package tab \n ----------------------------------------------------\n => Package Brand \n => Package Single \n => Package Alacarte");
    }
    if(($scope.PAYMENT_CARDNUMBER=""||$scope.PAYMENT_CARDNUMBER==undefined) || ($scope.PAYMENT_BANKACCOUNTNUMBER=""||$scope.PAYMENT_BANKACCOUNTNUMBER==undefined) || ($scope.PAYMENT_BANKACCOUNTNAME=""||$scope.PAYMENT_BANKACCOUNTNAME==undefined) || ($scope.PAYMENT_BANKNAME=""||$scope.PAYMENT_BANKNAME==undefined))
    {
        alert("Please check the Payment Tab \n ----------------------------------------------------------- \n => Payment Card Number \n => Payment Bank Account Number \n => Payment Bank Account Name \n => Payment Bank Name");
    }
    else
    {
        alert("Terisi");
    }*/




 }   
});
  
</script>

<!-- JAVASCRIPT FOR SELECT OPTION BOX -->
<script type="text/javascript">
     $(function(){
        $.ajaxSetup({
        type:"POST",
        url: "<?php echo base_url('entryp/ambil_data')?>",
        cache: false,
        });

        $("#package_basic").change(function(){

            var value=$(this).val();
            if(value>0){
            $.ajax({
            data:{modul:'alacarte',id:value},
            success: function(respond){
            $("#package_alacarte").html(respond);
            }
            })
            }

        });

        $("#package_basic1").change(function(){

            var value=$(this).val();
            if(value>0){
            $.ajax({
            data:{modul:'alacarte',id:value},
            success: function(respond){
            $("#package_alacarte1").html(respond);
            }
            })
            }

        });

        $("#package_basic2").change(function(){

            var value=$(this).val();
            if(value>0){
            $.ajax({
            data:{modul:'alacarte',id:value},
            success: function(respond){
            $("#package_alacarte2").html(respond);
            }
            })
            }

        });   
    
    
  

    })
</script>

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