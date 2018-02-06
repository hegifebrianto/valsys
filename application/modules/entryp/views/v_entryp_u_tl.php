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
            foreach ($tl_data->result() as $detail) {
            ?>
            <div class="panel">
            <div class="panel-body">
                <style>
                        .col-md-3{
                            width: 15%;
                        }
                        </style>
                        <input type="hidden" id="PROCESSID" name="PROCESSID" value='<?php echo $detail->processId;?>' class="form-control" > 
                <div class="example-box-wrapper">
                   <!--  <ul class="list-group row">
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
                        <li class="col-md-3"  >
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
                         <li class="col-md-3">
                               <a href="#tab-example-7" data-toggle="tab" class="list-group-item">
                                   <i class="glyph-icon font-brown icon-book"></i>
                                   FileUpload
                                   <i class="glyph-icon icon-chevron-right"></i>
                               </a>
                           </li>
                       
                    </ul> -->




            <!-- Conten form --> 
            
                        <div class="tab-content">
                        <div class="form-horizontal bordered-row" id="formm" name="formm" data-parsley-validate="" method="POST" action="" enctype="multipart/form-data" >
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

                
<form class="form-horizontal bordered-row" id="formm" name="formm" data-parsley-validate="" method="POST" action="<?=base_url();?>entryp/Entryp/app_tl_u" enctype="multipart/form-data" >

                            <div class="tab-pane fade active in" id="tab-example-1"  >
                                <input type="checkbox" ng-model="checked"><label ng-hide="checked">Profile Customer Data</label><br>
      <div class="panel" ng-hide="profilecustomer" ng-show="checked">
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
                            <label class="col-sm-3 control-label"><label class="font-red"></label>Firstname</label>
                            <input type="radio" id="" name="FNAME"  value='<?php echo $detail->FIRST_NAME;?>' required>
                            <div class="col-sm-6">
                             <input type="text" id="pt" name="pt" value='<?php echo $detail->FIRST_NAME;?>' class="form-control" disabled=""> 
                         </div>
                     </div>
                     
                      <div class="form-group">
                            <label class="col-sm-3 control-label"><label class="font-red"></label>Firstname</label>
                            <input type="radio" id="" name="FNAME"  value='<?php echo $detail->FIRSTNAME_V;?>' required>
                            <div class="col-sm-6">
                             <input type="text" id="pt" name="pt" value='<?php echo $detail->FIRSTNAME_V;?>' class="form-control" disabled="">
                         </div>
                     </div>
                   
                     <div class="form-group">
                        <label class="col-sm-3 control-label"><label class="font-red"></label>Middlename</label>
                         <input type="radio" id="" name="MNAME"  value='<?php echo $detail->MIDDLE_NAME;?>' required>
                        <div class="col-sm-6">
                            <input type="text" id="pt" name="pt"  value='<?php echo $detail->MIDDLE_NAME;?>' class="form-control" disabled="">
                        </div>
                    </div>
                     <div class="form-group">
                        <label class="col-sm-3 control-label"><label class="font-red"></label>Middlename</label>
                         <input type="radio" id="" name="MNAME"  value='<?php echo $detail->MIDDLENAME_V;?>' required>
                        <div class="col-sm-6">
                            <input type="text" id="pt" name="pt"  value='<?php echo $detail->MIDDLENAME_V;?>' class="form-control" disabled="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label"><label class="font-red"></label>Lastname</label>
                          <input type="radio" id="" name="LNAME"  value='<?php echo $detail->LAST_NAME;?>' required>
                        <div class="col-sm-6">
                            <input type="text" id="pt" name="pt" value='<?php echo $detail->LAST_NAME;?>' class="form-control" disabled="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label"><label class="font-red"></label>Lastname</label>
                          <input type="radio" id="" name="LNAME"  value='<?php echo $detail->LASTNAME_V;?>' required>
                        <div class="col-sm-6">
                            <input type="text" id="pt" name="pt" value='<?php echo $detail->LASTNAME_V;?>' class="form-control" disabled="">
                        </div>
                    </div>
                 
    </div>
    <div class="col-md-6">
    <h3 class="title-hero">
                            <div class="bs-label">
                               
                            </div>
                        </h3>

         <div class="form-group">
            <label class="col-sm-3 control-label"><label class="font-red"></label>Main Phone</label>
            <input type="radio" id="" name="mainp"  value='<?php echo $detail->WORK_PHONE;?>' required>
            <div class="col-sm-6">
                <input type="text" id="pt" name="pt" value='<?php echo $detail->WORK_PHONE;?>'  class="form-control" disabled="">
            </div>
        </div>
          <div class="form-group">
            <label class="col-sm-3 control-label"><label class="font-red"></label>Main Phone</label>
            <input type="radio" id="" name="mainp"  value='<?php echo $detail->MAIN_PHONE_V;?>' required>
            <div class="col-sm-6">
                <input type="text" id="pt" name="pt" value='<?php echo $detail->MAIN_PHONE_V;?>'  class="form-control" disabled="">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label"><label class="font-red"></label>Mobile Phone</label>
                  <input type="radio" id="" name="mobilep"  value='<?php echo $detail->MOBILE_PHONE;?>' required>
            <div class="col-sm-6">
              <input type="text" id="pt" name="pt" ng-model="prtype" class="form-control" disabled="">
          </div>
      </div>
       <div class="form-group">
            <label class="col-sm-3 control-label"><label class="font-red"></label>Mobile Phone</label>
                 <input type="radio" id="" name="mobilep"  value='<?php echo $detail->MOBILE_PHONE_V;?>' required>
            <div class="col-sm-6">
              <input type="text" id="pt" name="pt" value='<?php echo $detail->MOBILE_PHONE_V;?>' class="form-control" disabled="">
          </div>
      </div>
        <div class="form-group">
            <label class="col-sm-3 control-label"><label class="font-red"></label>Extra Phone</label>
            <input type="radio" id="" name="extrap"  value='<?php echo $detail->HOME_PHONE;?>' required>
            <div class="col-sm-6">
              <input type="text" id="pt" name="pt"  value='<?php echo $detail->HOME_PHONE;?>' class="form-control" disabled="">
          </div>
      </div>
      <div class="form-group">
            <label class="col-sm-3 control-label"><label class="font-red"></label>Extra Phone</label>
            <input type="radio" id="" name="extrap"  value='<?php echo $detail->EXTRA_PHONE;?>' required>
            <div class="col-sm-6">
              <input type="text" id="pt" name="pt"  value='<?php echo $detail->EXTRA_PHONE;?>' class="form-control" disabled="">
          </div>
      </div>

    </div>
    </div>
    </div>
    </div>
    </div>


    
    <input type="checkbox" ng-model="checkedaddress"><label ng-hide="checkedaddress">Address of Identity Card</label><br>
    <div class="panel"  ng-hide="addressofidentity" ng-show="checkedaddress">                          
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
                                                        <input type="radio" id="" name="ADDRESS"  value='<?php echo $detail->STREET;?>' required>
                                                        <div class="col-sm-6">
                                                            <textarea id="street_id" name="STREET" value='<?php echo $detail->STREET;?>' placeholder="Identity Address"  class="form-control"></textarea>
                                                        </div>
                                                    </div>
                                                     <div class="form-group">
                                                        <label class="col-sm-3 control-label"><label class="font-red">*</label>Address</label>
                                                        <input type="radio" id="" name="ADDRESS"  value='<?php echo $detail->ADDRESS_V;?>' required>
                                                        <div class="col-sm-6">
                                                            <textarea id="street_id" name="STREET" value='<?php echo $detail->ADDRESS_V;?>' placeholder="Identity Address"  class="form-control"></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-sm-3 control-label">Province</label>
                                                        <input type="radio" id="" name="PROVINCE"  value='<?php echo $detail->PROVINCE;?>' required>
                                                        <div class="col-sm-6">
                                                        <input type="text" name="PROVINCEe"  value='<?php echo $detail->PROVINCE;?>' placeholder="Province"  class="form-control"></input>    
                                                        </div>
                                                    </div>
                                                       <div class="form-group">
                                                        <label class="col-sm-3 control-label">Province</label>
                                                        <input type="radio" id="" name="PROVINCE"  value='<?php echo $detail->PROVINCE_V;?>' required>
                                                        <div class="col-sm-6">
                                                        <input type="text" name="PROVINCEe"  value='<?php echo $detail->PROVINCE_V;?>' placeholder="Province"  class="form-control"></input>    
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-sm-3 control-label">City</label>
                                                         <input type="radio" id="" name="CITY"  value='<?php echo $detail->CITY;?>' required>
                                                        <div class="col-sm-6">
                                                            <input type="text" name="CITYe" value='<?php echo $detail->CITY;?>' placeholder="City"  class="form-control"></input>
                                                           
                                                        </div>
                                                    </div>
                                                     <div class="form-group">
                                                        <label class="col-sm-3 control-label">City</label>
                                                         <input type="radio" id="" name="CITY"  value='<?php echo $detail->CITY_V;?>' required>
                                                        <div class="col-sm-6">
                                                            <input type="text" name="CITYe" value='<?php echo $detail->CITY_V;?>' placeholder="City"  class="form-control"></input>
                                                           
                                                        </div>
                                                    </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                    <div class="form-group"></div>
                                                    <div class="form-group"></div>

                                                    <div class="form-group">
                                                        <label class="col-sm-3 control-label">Kecamatan</label>
                                                        <input type="radio" id="" name="DISTRICT"  value='<?php echo $detail->DISTRICT;?>' required>
                                                        <div class="col-sm-6">
                                                         <input type="text" name="CITYe" value='<?php echo $detail->DISTRICT;?>' placeholder="City"  class="form-control"></input>
                                                        </div>
                                                        
                                                            
                                                    </div>
                                                      <div class="form-group">
                                                        <label class="col-sm-3 control-label">Kecamatan</label>
                                                        <input type="radio" id="" name="DISTRICT"  value='<?php echo $detail->KECAMATAN_V;?>' required>
                                                        <div class="col-sm-6">
                                                         <input type="text" name="CITYe" value='<?php echo $detail->KECAMATAN_V;?>' placeholder="City"  class="form-control"></input>
                                                        </div>
                                                        
                                                            
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-sm-3 control-label">Kelurahan</label>
                                                         <input type="radio" id="" name="SUBDISTRICT"  value='<?php echo $detail->RT;?>' required>
                                                        <div class="col-sm-6">
                                                        <input type="text" name="SUBDISTRICTe" value='<?php echo $detail->RT;?>' placeholder="Sub District"  class="form-control"></input>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-sm-3 control-label">Kelurahan</label>
                                                         <input type="radio" id="" name="SUBDISTRICT"  value='<?php echo $detail->KELURAHAN_V;?>' required>
                                                        <div class="col-sm-6">
                                                        <input type="text" name="SUBDISTRICTe" value='<?php echo $detail->KELURAHAN_V;?>' placeholder="Sub District"  class="form-control"></input>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-sm-3 control-label"><label class="font-red">*</label>Zipcode</label>
                                                         <input type="radio" id="" name="ZIPCODE"  value='<?php echo $detail->POSTALCODE;?>' required>
                                                        
                                                        <div class="col-sm-4">
                                                            <input type="text"  value='<?php echo $detail->POSTALCODE;?>' name="ZIPCODEe" placeholder="Zipcode"  class="form-control" >
                                                        </div>
                                                        
                                                        <label class="col-sm-3 control-label"></label>
                                                        <div class="col-sm-5">
                                                            
                                                            
                                                        </div>

                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-sm-3 control-label"><label class="font-red">*</label>Zipcode</label>
                                                         <input type="radio" id="" name="ZIPCODE"  value='<?php echo $detail->ZIPCODE_V;?>' required>
                                                        
                                                        <div class="col-sm-4">
                                                            <input type="text"  value='<?php echo $detail->ZIPCODE_V;?>' name="ZIPCODEe" placeholder="Zipcode"  class="form-control" >
                                                        </div>
                                                        
                                                        <label class="col-sm-3 control-label"></label>
                                                        <div class="col-sm-5">
                                                            
                                                            
                                                        </div>

                                                    </div>
                                                  

                                                    
                                                    <!-- BEGINING MODAL ZIPCODE -->
                                                    <!-- Modal -->
                                                    
                                                    <!-- END OF MODAL -->

                                                    <!-- BEGINING MODAL Cost Transport -->
                                                    <!-- Modal -->
                                                    
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

    <input type="checkbox" ng-model="checkedInstallation"><label ng-hide="checkedInstallation">Installation Address</label><br>
    <div class="panel"  ng-hide="Installation" ng-show="checkedInstallation">

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
                                                        <label class="col-sm-3 control-label"><label class="font-red">*</label>Installation Address</label>
                                                        <input type="radio" id="" name="INSTALL_ADDRESS"  value='<?php echo $detail->INSTALLATION_ADDRESS;?>' required>
                                                        <div class="col-sm-6">
                                                            <textarea id="street_id" name="STREET" value='<?php echo $detail->INSTALLATION_ADDRESS;?>' placeholder="Identity Address"  class="form-control"></textarea>
                                                        </div>
                                                    </div>
                                                     <div class="form-group">
                                                        <label class="col-sm-3 control-label"><label class="font-red">*</label>Installation Address</label>
                                                        <input type="radio" id="" name="INSTALL_ADDRESS"  value='<?php echo $detail->INSTALL_ADDRESS_V;?>' required>
                                                        <div class="col-sm-6">
                                                            <textarea id="street_id" name="STREET" value='<?php echo $detail->INSTALL_ADDRESS_V;?>' placeholder="Identity Address"  class="form-control"></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-sm-3 control-label">Province</label>
                                                        <input type="radio" id="" name="PROVINCE_INSTALL"  value='<?php echo $detail->INSTALLATION_PROVINCE;?>' required>
                                                        <div class="col-sm-6">
                                                        <input type="text" name="PROVINCEe"  value='<?php echo $detail->INSTALLATION_PROVINCE;?>' placeholder="Province"  class="form-control"></input>    
                                                        </div>
                                                    </div>
                                                       <div class="form-group">
                                                        <label class="col-sm-3 control-label">Province</label>
                                                        <input type="radio" id="" name="PROVINCE_INSTALL"  value='<?php echo $detail->INSTALL_PROVINCE_V;?>' required>
                                                        <div class="col-sm-6">
                                                        <input type="text" name="PROVINCEe"  value='<?php echo $detail->INSTALL_PROVINCE_V;?>' placeholder="Province"  class="form-control"></input>    
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-sm-3 control-label">City</label>
                                                         <input type="radio" id="" name="CITY_INSTALL"  value='<?php echo $detail->INSTALLATION_CITY;?>' required>
                                                        <div class="col-sm-6">
                                                            <input type="text" name="CITYe" value='<?php echo $detail->INSTALLATION_CITY;?>' placeholder="City"  class="form-control"></input>
                                                           
                                                        </div>
                                                    </div>
                                                     <div class="form-group">
                                                        <label class="col-sm-3 control-label">City</label>
                                                         <input type="radio" id="" name="CITY_INSTALL"  value='<?php echo $detail->INSTALL_CITY_V;?>' required>
                                                        <div class="col-sm-6">
                                                            <input type="text" name="CITYe" value='<?php echo $detail->INSTALL_CITY_V;?>' placeholder="City"  class="form-control"></input>
                                                           
                                                        </div>
                                                    </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                    <div class="form-group"></div>
                                                    <div class="form-group"></div>

                                                    <div class="form-group">
                                                        <label class="col-sm-3 control-label">Kecamatan</label>
                                                        <input type="radio" id="" name="DISTRICT_INSTALL"  value='<?php echo $detail->INSTALLATION_DISTRICT;?>' required>
                                                        <div class="col-sm-6">
                                                         <input type="text" name="CITYe" value='<?php echo $detail->INSTALLATION_DISTRICT;?>' placeholder="City"  class="form-control"></input>
                                                        </div>
                                                        
                                                            
                                                    </div>
                                                      <div class="form-group">
                                                        <label class="col-sm-3 control-label">Kecamatan</label>
                                                        <input type="radio" id="" name="DISTRICT_INSTALL"  value='<?php echo $detail->INSTALL_KECAMATAN_V;?>' required>
                                                        <div class="col-sm-6">
                                                         <input type="text" name="CITYe" value='<?php echo $detail->INSTALL_KECAMATAN_V;?>' placeholder="City"  class="form-control"></input>
                                                        </div>
                                                        
                                                            
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-sm-3 control-label">Kelurahan</label>
                                                         <input type="radio" id="" name="SUBDISTRICT_INSTALL"  value='<?php echo $detail->INSTALLATION_SUBDISTRICT;?>' required>
                                                        <div class="col-sm-6">
                                                        <input type="text" name="SUBDISTRICTe" value='<?php echo $detail->INSTALLATION_SUBDISTRICT;?>' placeholder="Sub District"  class="form-control"></input>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-sm-3 control-label">Kelurahan</label>
                                                         <input type="radio" id="" name="SUBDISTRICT_INSTALL"  value='<?php echo $detail->INSTALL_KELURAHAN_V;?>' required>
                                                        <div class="col-sm-6">
                                                        <input type="text" name="SUBDISTRICTe" value='<?php echo $detail->INSTALL_KELURAHAN_V;?>' placeholder="Sub District"  class="form-control"></input>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-sm-3 control-label"><label class="font-red">*</label>Zipcode</label>
                                                         <input type="radio" id="" name="ZIPCODE_INSTALL"  value='<?php echo $detail->INSTALLATION_ZIPCODE;?>' required>
                                                        
                                                        <div class="col-sm-4">
                                                            <input type="text"  value='<?php echo $detail->INSTALLATION_ZIPCODE;?>' name="ZIPCODEe" placeholder="Zipcode"  class="form-control" >
                                                        </div>
                                                        
                                                        <label class="col-sm-3 control-label"></label>
                                                        <div class="col-sm-5">
                                                            
                                                            
                                                        </div>

                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-sm-3 control-label"><label class="font-red">*</label>Zipcode</label>
                                                         <input type="radio" id="" name="ZIPCODE_INSTALL"  value='<?php echo $detail->INSTALL_ZIPCODE_V;?>' required>
                                                        
                                                        <div class="col-sm-4">
                                                            <input type="text"  value='<?php echo $detail->INSTALL_ZIPCODE_V;?>' name="ZIPCODEe" placeholder="Zipcode"  class="form-control" >
                                                        </div>
                                                        
                                                        <label class="col-sm-3 control-label"></label>
                                                        <div class="col-sm-5">
                                                            
                                                            
                                                        </div>

                                                    </div>
                                                    
                                                    
                                                </div>
                                                <!-- BEGINING MODAL ZIPCODE -->
                                                    <!-- Modal -->
                                         
                                                    <!-- END OF MODAL -->

                                            </div>
                                        </div>
                                    </div>
    </div>

    <input type="checkbox" ng-model="checkedBilling"><label ng-hide="checkedBilling">Billing Address</label><br>
    <div class="panel"  ng-hide="Billing" ng-show="checkedBilling">
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
                                                        <label class="col-sm-3 control-label"><label class="font-red">*</label>Billing Address</label>
                                                        <input type="radio" id="" name="INSTALL_ADDRESS"  value='<?php echo $detail->INSTALLATION_ADDRESS;?>' required>
                                                        <div class="col-sm-6">
                                                            <textarea id="street_id" name="STREET" value='<?php echo $detail->INSTALLATION_ADDRESS;?>' placeholder="Identity Address"  class="form-control"></textarea>
                                                        </div>
                                                    </div>
                                                     <div class="form-group">
                                                        <label class="col-sm-3 control-label"><label class="font-red">*</label>Billing Address</label>
                                                        <input type="radio" id="" name="INSTALL_ADDRESS"  value='<?php echo $detail->INSTALL_ADDRESS_V;?>' required>
                                                        <div class="col-sm-6">
                                                            <textarea id="street_id" name="STREET" value='<?php echo $detail->INSTALL_ADDRESS_V;?>' placeholder="Identity Address"  class="form-control"></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-sm-3 control-label">Province</label>
                                                        <input type="radio" id="" name="PROVINCE_INSTALL"  value='<?php echo $detail->INSTALLATION_PROVINCE;?>' required>
                                                        <div class="col-sm-6">
                                                        <input type="text" name="PROVINCEe"  value='<?php echo $detail->INSTALLATION_PROVINCE;?>' placeholder="Province"  class="form-control"></input>    
                                                        </div>
                                                    </div>
                                                       <div class="form-group">
                                                        <label class="col-sm-3 control-label">Province</label>
                                                        <input type="radio" id="" name="PROVINCE_INSTALL"  value='<?php echo $detail->INSTALL_PROVINCE_V;?>' required>
                                                        <div class="col-sm-6">
                                                        <input type="text" name="PROVINCEe"  value='<?php echo $detail->INSTALL_PROVINCE_V;?>' placeholder="Province"  class="form-control"></input>    
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-sm-3 control-label">City</label>
                                                         <input type="radio" id="" name="CITY_INSTALL"  value='<?php echo $detail->INSTALLATION_CITY;?>' required>
                                                        <div class="col-sm-6">
                                                            <input type="text" name="CITYe" value='<?php echo $detail->INSTALLATION_CITY;?>' placeholder="City"  class="form-control"></input>
                                                           
                                                        </div>
                                                    </div>
                                                     <div class="form-group">
                                                        <label class="col-sm-3 control-label">City</label>
                                                         <input type="radio" id="" name="CITY_INSTALL"  value='<?php echo $detail->INSTALL_CITY_V;?>' required>
                                                        <div class="col-sm-6">
                                                            <input type="text" name="CITYe" value='<?php echo $detail->INSTALL_CITY_V;?>' placeholder="City"  class="form-control"></input>
                                                           
                                                        </div>
                                                    </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                    <div class="form-group"></div>
                                                    <div class="form-group"></div>

                                                    <div class="form-group">
                                                        <label class="col-sm-3 control-label">Kecamatan</label>
                                                        <input type="radio" id="" name="DISTRICT_INSTALL"  value='<?php echo $detail->INSTALLATION_DISTRICT;?>' required>
                                                        <div class="col-sm-6">
                                                         <input type="text" name="CITYe" value='<?php echo $detail->INSTALLATION_DISTRICT;?>' placeholder="City"  class="form-control"></input>
                                                        </div>
                                                        
                                                            
                                                    </div>
                                                      <div class="form-group">
                                                        <label class="col-sm-3 control-label">Kecamatan</label>
                                                        <input type="radio" id="" name="DISTRICT_INSTALL"  value='<?php echo $detail->INSTALL_KECAMATAN_V;?>' required>
                                                        <div class="col-sm-6">
                                                         <input type="text" name="CITYe" value='<?php echo $detail->INSTALL_KECAMATAN_V;?>' placeholder="City"  class="form-control"></input>
                                                        </div>
                                                        
                                                            
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-sm-3 control-label">Kelurahan</label>
                                                         <input type="radio" id="" name="SUBDISTRICT_INSTALL"  value='<?php echo $detail->INSTALLATION_SUBDISTRICT;?>' required>
                                                        <div class="col-sm-6">
                                                        <input type="text" name="SUBDISTRICTe" value='<?php echo $detail->INSTALLATION_SUBDISTRICT;?>' placeholder="Sub District"  class="form-control"></input>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-sm-3 control-label">Kelurahan</label>
                                                         <input type="radio" id="" name="SUBDISTRICT_INSTALL"  value='<?php echo $detail->INSTALL_KELURAHAN_V;?>' required>
                                                        <div class="col-sm-6">
                                                        <input type="text" name="SUBDISTRICTe" value='<?php echo $detail->INSTALL_KELURAHAN_V;?>' placeholder="Sub District"  class="form-control"></input>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-sm-3 control-label"><label class="font-red">*</label>Zipcode</label>
                                                         <input type="radio" id="" name="ZIPCODE_INSTALL"  value='<?php echo $detail->INSTALLATION_ZIPCODE;?>' required>
                                                        
                                                        <div class="col-sm-4">
                                                            <input type="text"  value='<?php echo $detail->INSTALLATION_ZIPCODE;?>' name="ZIPCODEe" placeholder="Zipcode"  class="form-control" >
                                                        </div>
                                                        
                                                        <label class="col-sm-3 control-label"></label>
                                                        <div class="col-sm-5">
                                                            
                                                            
                                                        </div>

                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-sm-3 control-label"><label class="font-red">*</label>Zipcode</label>
                                                         <input type="radio" id="" name="ZIPCODE_INSTALL"  value='<?php echo $detail->INSTALL_ZIPCODE_V;?>' required>
                                                        
                                                        <div class="col-sm-4">
                                                            <input type="text"  value='<?php echo $detail->INSTALL_ZIPCODE_V;?>' name="ZIPCODEe" placeholder="Zipcode"  class="form-control" >
                                                        </div>
                                                        
                                                        <label class="col-sm-3 control-label"></label>
                                                        <div class="col-sm-5">
                                                            
                                                            
                                                        </div>

                                                    </div>
                       
                    </div>
                    </div>
                    
                    </div>
                    </div>
    </div>


    <input type="checkbox" ng-model="checkedEmergency"><label ng-hide="checkedEmergency">Emergency</label><br>
    <div class="panel" ng-hide="Emergency" ng-show="checkedEmergency">

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
                            <input type="radio" id="" name="ZIPCODE_INSTALL"  value='<?php echo $detail->EC_NAME;?>' required>
                            <div class="col-sm-6">
                                <input type="text" id="emergency_name" name="emergency_name" value='<?php echo $detail->EC_NAME;?>' placeholder="Full Name"   class="form-control">
                            </div>
                        </div>
                         <div class="form-group">
                            <label class="col-sm-3 control-label"><label class="font-red">*</label>Name</label>
                            <input type="radio" id="" name="ZIPCODE_INSTALL"  value='<?php echo $detail->E_NAME_V;?>' required>
                            <div class="col-sm-6">
                                <input type="text" id="emergency_name" name="emergency_name" value='<?php echo $detail->E_NAME_V;?>' placeholder="Full Name"   class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label"><label class="font-red">*</label>Sibling Relationship</label>
                               <input type="radio" id="" name="ZIPCODE_INSTALL"  value='<?php echo $detail->EC_RELATION;?>' required>
                            <div class="col-sm-6">
                                <input name="sibling" id="sibling" name="emergency_sibling" value='<?php echo $detail->EC_RELATION;?>' class="custom-select  ">
                                   
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label"><label class="font-red">*</label>Sibling Relationship</label>
                               <input type="radio" id="" name="ZIPCODE_INSTALL"  value='<?php echo $detail->E_SIBLING_V;?>' required>
                            <div class="col-sm-6">
                                <input name="sibling" id="sibling" name="emergency_sibling" value='<?php echo $detail->E_SIBLING_V;?>' class="custom-select  ">
                                   
                            </div>
                        </div>
            </div>
             <div class="col-md-6">    
                         <div class="form-group"></div>      
                         <div class="form-group"></div>      
                       <div class="form-group">
                            <label class="col-sm-3 control-label"><label class="font-red">*</label>Phone </label>
                               <input type="radio" id="" name="ZIPCODE_INSTALL"  value='<?php echo $detail->EC_PHONE;?>' required>
                            <div class="col-sm-6">
                                <input type="text" id="emergency_phone" name="emergency_phone"  value='<?php echo $detail->EC_PHONE;?>' data-parsley-type="digits" placeholder="Digits only"   class="form-control">
                            </div>
                        </div>
                           <div class="form-group">
                            <label class="col-sm-3 control-label"><label class="font-red">*</label>Phone </label>
                               <input type="radio" id="" name="ZIPCODE_INSTALL"  value='<?php echo $detail->E_PHONE_V;?>' required>
                            <div class="col-sm-6">
                                <input type="text" id="emergency_phone" name="emergency_phone"  value='<?php echo $detail->E_PHONE_V;?>' data-parsley-type="digits" placeholder="Digits only"   class="form-control">
                            </div>
                        </div>
                        
                       <div class="form-group">
                            <label class="col-sm-3 control-label"><label class="font-red">*</label>Address</label>
                             <input type="radio" id="" name="ZIPCODE_INSTALL"  value='<?php echo $detail->EC_ADDR;?>' required>
                            <div class="col-sm-6">
                                <input type="text" id="emergency_address" name="emergency_address" value='<?php echo $detail->EC_ADDR;?>'  placeholder="  Field"   class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label"><label class="font-red">*</label>Address</label>
                             <input type="radio" id="" name="ZIPCODE_INSTALL"  value='<?php echo $detail->E_ADDRESS_V;?>' required>
                            <div class="col-sm-6">
                                <input type="text" id="emergency_address" name="emergency_address" value='<?php echo $detail->E_ADDRESS_V;?>'  placeholder="  Field"   class="form-control">
                            </div>
                        </div>
                        </div>
        </div>
            </div>
    </div>
    <input type="checkbox" ng-model="checkedSales"><label ng-hide="checkedSales">Package</label><br>
    <div class="panel" ng-hide="Sales" ng-show="checkedSales">
        <div class="panel-body">

            <div class="example-box-wrapper">

                <div class="row">

                   <div class="col-md-6">
                       <h3 class="title-hero">
                        <div class="tl-label bs-label label-success" style="margin-left:-20px;font-size: 100%">
                            PACKAGE
                        </div>
                    </h3>

                    <div class="form-group">
                        <label class="col-sm-3 control-label"><label class="font-red">*</label>AVAILABLE PROMO</label>
                        <input type="radio" id="" name="ZIPCODE_INSTALL"  value='<?php echo $detail->EC_ADDR;?>' required>
                        <div class="col-sm-4">
                            <input type="text" id="sales_nik" name="sales_nik" value='<?php echo $detail->EC_ADDR;?>' placeholder="NIK"   class="form-control" disabled="">
                            <!-- Trigger the modal with a button -->
                        </div>

                    </div>
                     <div class="form-group">
                        <label class="col-sm-3 control-label"><label class="font-red">*</label>AVAILABLE PROMO</label>
                        <input type="radio" id="" name="ZIPCODE_INSTALL"  value='<?php echo $detail->EC_ADDR;?>' required>
                        <div class="col-sm-4">
                            <input type="text" id="sales_nik" name="sales_nik" value='<?php echo $detail->EC_ADDR;?>' placeholder="NIK"   class="form-control" disabled="">
                            <!-- Trigger the modal with a button -->
                        </div>

                    </div>
                    <!-- BEGINING MODAL -->
                    <!-- Modal -->
                    
      <!-- END OF MODAL -->

      <div class="form-group">
        <label class="col-sm-3 control-label"><label class="font-red">*</label>Basic</label>
         <input type="radio" id="" name="ZIPCODE_INSTALL"  value='<?php echo $detail->EC_ADDR;?>' required>
        <div class="col-sm-6">
            <input type="text" id="sales_name" name="sales_name" value='<?php echo $detail->EC_ADDR;?>' placeholder="Sales Profile "   class="form-control">
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-3 control-label"><label class="font-red">*</label>Basic</label>
         <input type="radio" id="" name="ZIPCODE_INSTALL"  value='<?php echo $detail->EC_ADDR;?>' required>
        <div class="col-sm-6">
            <input type="text" id="sales_name" name="sales_name" value='<?php echo $detail->EC_ADDR;?>' placeholder="Sales Profile "   class="form-control">
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-3 control-label"><label class="font-red">*</label>Alacarte</label>
         <input type="radio" id="" name="ZIPCODE_INSTALL"  value='<?php echo $detail->EC_ADDR;?>' required>
        <div class="col-sm-6">
            <input type="text" id="sales_name" name="sales_name" value='<?php echo $detail->EC_ADDR;?>' placeholder="Sales Profile "   class="form-control">
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-3 control-label"><label class="font-red">*</label>Alacarte</label>
         <input type="radio" id="" name="ZIPCODE_INSTALL"  value='<?php echo $detail->EC_ADDR;?>' required>
        <div class="col-sm-6">
            <input type="text" id="sales_name" name="sales_name" value='<?php echo $detail->EC_ADDR;?>' placeholder="Sales Profile "   class="form-control">
        </div>
    </div>

    
    </div>
    <div class="col-md-6">
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
</div>

 <!-- <div class="form-group">
                           <button name="subject" type="submit" value="">coba</button>
                        </div> -->

   
  <div class="bg-default content-box text-center pad20A mrg25T">
                    <button type="submit" name="sub" id="saveBtn"  class="btn btn-lg btn-primary">Save</button>
                   
                </div> 
                     </form> 
                  
    
  
  

    
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
           
      // Now check the modulus 10 check digit - if  
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
    //hstatus
    $scope.salesc='<?php echo $detail->SALESC;?>';
    $scope.pnumb='<?php echo $detail->PROSPECT_NBR;?>';
   /* $scope.flagbeda='<?php echo $detail->FBEDA;?>';
    $scope.process='<?php echo $detail->processId;?>';
    $scope.formn='<?php echo $detail->FORMN;?>';
    $scope.prtype='<?php echo $detail->PROSPECT_TYPE;?>';
    $scope.hwstatus='<?php echo $detail->STATUS_HW;?>';
    $scope.identype='<?php echo $detail->ID_TYPE;?>';
    $scope.identypen='<?php echo $detail->IDTYPE_NUMBER;?>';
    $scope.expdate='<?php echo $detail->EXP_DATE;?>';










    $scope.idprospect='<?php echo $detail->PROSPECT_ID;?>';
*/
    $scope.people = [
        ];
    $scope.statusep = [
        ];
    
  $scope.addPerson = function(){
     if(confirm("Are you sure to add data?")){
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

    if(($scope.flagbeda)=='NO'){


    for(var i=0;i<$scope.statusep.length;i++){
        if(($scope.statusep[i])=='Reject'){
            if(($scope.statusep[i])=='Reject'){
                 $scope.finals = 'Rejected';
            }else if(($scope.statusep[i])=='Approve'){
                 $scope.finals = 'Reject';
            }else {
                 $scope.finals = 'Reject';
            } 
        }else if(($scope.statusep[i])=='Pending') {
            if(($scope.statusep[i])=='Reject'){
                 $scope.finals = 'Rejected';
            }else if(($scope.statusep[i])=='Approve'){
                 $scope.finals = 'Pending';
            }else {
                 $scope.finals = 'Pending';
            } 
        }else if(($scope.statusep[i])=='Approve') {
            if(($scope.statusep[i])=='Reject'){
                 $scope.finals = 'Rejected';
            }else if(($scope.statusep[i])=='Approve'){
                 $scope.finals = 'Approve1';
            }else {
                 $scope.finals = 'Approve1';
            }
        }
    }
}else{
    for(var i=0;i<$scope.statusep.length;i++){
        if(($scope.statusep[i])=='Reject'){
            if(($scope.statusep[i])=='Reject'){
                 $scope.finals = 'Rejected';
            }else if(($scope.statusep[i])=='Approve'){
                 $scope.finals = 'Reject';
            }else {
                 $scope.finals = 'Reject';
            } 
        }else if(($scope.statusep[i])=='Pending') {
            if(($scope.statusep[i])=='Reject'){
                 $scope.finals = 'Rejected';
            }else if(($scope.statusep[i])=='Approve'){
                 $scope.finals = 'Pending';
            }else {
                 $scope.finals = 'Pending';
            } 
        }else if(($scope.statusep[i])=='Approve') {
            if(($scope.statusep[i])=='Reject'){
                 $scope.finals = 'Rejected';
            }else if(($scope.statusep[i])=='Approve'){
                 $scope.finals = 'Approve2';
            }else {
                 $scope.finals = 'Approve2';
            }
        }
    }


}
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
        url: '<?=base_url();?>entryp/Entryp/update_admin_app',
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
    $scope.profilecustomer = true;
    $scope.Sales = true;
    $scope.Emergency = true;
    $scope.Billing = true;
    $scope.Installation = true;
    $scope.addressofidentity = true;
    $scope.prefered = true;
    $scope.entryhw =true;
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
    $scope.ESTIMATED_COST_PACKAGE = 0;
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
      var promoId = $scope.PROMO;
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
        $http.get("<?php echo site_url('entryp/Entryp/angular_ViewUploadData');?>").success(function(resultDataUpload){
            console.log('upload data view berhasil');
            $scope.upload_data_view=resultDataUpload;
            // console.log($scope.upload_data_view);
        });
    }
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