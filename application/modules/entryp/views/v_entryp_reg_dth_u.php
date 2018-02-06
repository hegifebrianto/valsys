
    <?=$head?>
    <?=$side_menu?>

    <div id="page-content-wrapper">

        <div id="page-content">

            <div class="container">

                <script type="text/javascript" src="<?=base_url();?>assets/widgets/parsley/parsley.js"></script>
                <!-- JS DROPDOWN -->
                <script type="text/javascript" src="<?=base_url();?>assets/bootstrap/jquery.min.js"></script>

                <!-- ICONS -->
                <script src="<?=base_url();?>assets/widgets/ang/angular.min.js"></script>
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
            <div class="panel">
                <div class="panel-body">
                    <style>
                        .col-md-3{
                            width: 15%;
                        }
                    </style>
                    <div class="example-box-wrapper" >
                        <ul class="list-group row" ng-hide="menubox" ng-show="typep=='newcustomer'">
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
                           <!--  <li class="col-md-3">
                                 <a href="#tab-example-6" data-toggle="tab" class="list-group-item">
                                     <i class="glyph-icon font-green icon-send"></i>
                                    Result
                                    <i class="glyph-icon icon-chevron-right"></i>
                                </a>
                            </li> -->
                            <li class="col-md-3">
                               <a href="#tab-example-6" data-toggle="tab" class="list-group-item">
                                   <i class="glyph-icon font-brown icon-book"></i>
                                   File
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
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">Duplication Status</label>
                                                <div class="col-sm-6">
                                                    <input type="text" id="CATEGORY" value="<?php echo $detail->duplicatestatus;?>" name="dupli"  class="form-control" disabled> 
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">Light Verification</label>
                                
                                <div class="col-sm-6">
                                    <input type="text" name="aa" placeholder=""  class="form-control" value="<?php echo $detail->LIGHT_VER;?>" disabled>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Type Process</label>
                               
                                <div class="col-sm-6">
                                 <select name="typepe" ng-model="typep" class="custom-select" ng-change="getSearchHW()">
                                    <option value="newcustomer">New Customer</option>
                                    <option value="rejoin">Rejoin</option>

                                </select>
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
                                                         <div class="form-group" ng-hide="note" ng-show="typep">
                                <label class="col-sm-3 control-label"><label class="font-red"></label>Note</label>
                                <div class="col-sm-6">
                                    <textarea id="" name="dthnote"  placeholder="Note" ng-model="dthnote" required class="form-control" ></textarea>
                                </div>
                            </div>
                            
                            <input type="hidden" name="PROSPECT_ID" placeholder=""  class="form-control" value="<?php echo $detail->PROSPECT_ID;?>">
                            <input type="hidden" name="PROCESSID" placeholder=""  class="form-control" value="<?php echo $detail->processId;?>">
                            <div class="bg-default text-center pad20A mrg25T" ng-hide="savebutton" ng-show="typep=='rejoin' || resultxmod">
                                <button ng-click="save()"  ng-model="sv" name="sub" id="saveBtn" class="btn btn-lg btn-primary">Save</button>
                                
                                
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
                                        <div class="panel" ng-hide="box" ng-show="typep=='newcustomer'">
                                            <div class="panel-body">

                                                <div class="example-box-wrapper">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <form class="form-horizontal bordered-row" id="formm" data-parsley-validate="" method="POST" action="<?=base_url();?>entryp/Entryp/updateEP_Reg_Dth_db" enctype="multipart/form-data">

                                                               <div class="form-group">
                                                                <label class="col-sm-3 control-label">Disposisi</label>
                                <!-- <div class="col-sm-6">
                                    <select name="PROSPECT_TYPE" class="custom-select">
                                        <option value="-1"> Select </option>
                                        <option value="Regular silver">Regular Silver</option>
                                        
                                    </select>
                                </div> -->
                                <div class="col-sm-6">
                                    <select name="pt" class="required" ng-model="disposisi" style="width: 200px;">
                                       <?php 
                                       foreach ($disposisi as $pt) {
                                        echo "<option value='$pt[ID_DISP]'>$pt[DISP_DESC]</option>";
                                    }
                                    ?>
                                </select>
                                <select name="pt" ng-hide="subdisposisi" ng-show="disposisi=='6'" class="required" style="width: 200px;">
                                   <?php 
                                   foreach ($disposisi as $pt) {
                                    echo "<option value='$pt[ID_DISP]'>$pt[DISP_DESC]</option>";
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group" >
                        <label class="col-sm-3 control-label">Result Prospect</label>

    <!-- <form class="form-horizontal bordered-row" id="formm" data-parsley-validate="" method="POST" action="<?=base_url();?>entryp/Entryp/updateEP_Reg_Dth_db" enctype="multipart/form-data">
            <div class="panel">
            <div class="form-group">
                <label class="col-sm-3 control-label"><label class="font-red"></label>Approval</label> -->

                <div class="col-sm-6">

                   <select ng-hide="resultx" ng-model="resultxmod" ng-show="result2=='Approve1'" name="STATUSEP" class="required" >
                    <!--  <option value="" selected="selected">Select</option> -->
                    <option value="Approve2">Approve</option>
                    <option value="Pendingdth">Pending</option>
                    <option value="BTP">BTP</option>
                    <option value="Reject">Reject</option>
                                     <!-- <option value="Revisi">REVISI</option>
                                     <option value="Rejected">REJECTED</option> -->
                                     
                                 </select>

                             </div>
                         </div>
                         <div class="panel" ng-hide="result2=='Rejoin' || resultxmod=='Approve1' || resultxmod=='Reject' || resultxmod=='Pendingdth' ">
                            <div class="panel-body">

                                <div class="example-box-wrapper">

                                    <div class="row">
                                        <div class="col-md-6">

                                          <input type="hidden" ng-model="idprospect" id="optionappd4" name="A24"  placeholder=""  class="form-control" >    

                                          <div class="form-group" ng-hide="cat" ng-show="resultxmod=='BTP'" >
                                            <label  class=" col-sm-3 control-label"> <label class="font-red"></label>Category</label>
                                            <div class="col-sm-6">


                                               <select class="col-sm-12 "  ng-model="category" id="category" name="A4"  class="" >
                                                 <!--   <option value="" selected="selected">Select</option> -->
                                                 <?php 
                                                 foreach ($category_dth as $prov) {
                                                  echo "<option value='$prov[ID_BTP_CATEGORY]'>$prov[DESC]</option>";
                                              }
                                              ?>

                                          </select>                                                        



                                      </div>
                                  </div>

                                  <script type="text/javascript">

                                    $(function(){

                                        $.ajaxSetup({
                                            type:"POST",
                                            url: "<?php echo base_url('entryp/ambil_data')?>",
                                            cache: false,
                                        });

                                        $("#category").change(function(){

                                            var value=$(this).val();
                                            if(value>0){
                                                $.ajax({
                                                    data:{modul:'subc',id:value},
                                                    success: function(respond){
                                                        $("#subca").html(respond);
                //$("#province_install_text").val($("#provinsi").find(":selected").text());
            }
        })
                                            }


                                        });



                                    })

                                </script>
                                <div class="form-group"  ng-hide="subc" ng-show="resultxmod=='BTP'" >
                                    <label  class=" col-sm-3 control-label"> <label class="font-red"></label>Sub Category</label>
                                    <div class="col-sm-6">


                                        <select class="col-sm-12 " ng-model="subcategory" id="subca" name="A4"  class="" >

                                     <!--    <?php 
                                        foreach ($subcategory_dth as $prov) {
                      echo "<option value='$prov[ID]'>$prov[DESC]</option>";
                                                                    }
                                                                    ?> -->

                                                                </select>                                                        



                                                            </div>
                                                        </div>



        <!-- <input type="text" ng-model="name" placeholder="Name" ><br />
        <input type="number" ng-model="age" placeholder="Age" ><br />
        <input type="text" ng-model="title" placeholder="Title" ><br /> -->
        <button ng-hide="add" ng-show="subcategory" type="button" ng-click="addPerson()">Add</button>
        
        <table class="table" ng-hide="tabelbtp" ng-show="subcategory">
          <tr>
            <th>Category
            </th>
            <th>Sub Category
            </th>
            <th>Action
            </th>
        </tr>
        <tr ng-repeat="person in people">
     <!--  <td>
                {{ person.idprospect }}
            </td> -->
            <td>
                {{ person.category }}
            </td>
            <td>
                {{ person.subcategory }}
            </td>
            <td>
               <button type="button" ng-click="removePerson($index)">Remove</button>
           </td>
       </tr>
    </table>


                           <!--  <div class="form-group">
                                <label class="col-sm-3 control-label"><label class="font-red"></label>Note</label>
                                <div class="col-sm-6">
                                    <textarea type="text" ng-model="INSTALL_LANDMARK" id="landmark" placeholder="Note"  class="form-control"></textarea>
                                </div>
                            </div> -->
                           <!--  <div class="bg-default text-center pad20A mrg25T">
                        <button name="sub" id="saveBtn" class="btn btn-lg btn-primary">Save</button>
                    </div> -->

                </div>

            </div>
        </div>
    </div>




    </div>
                                <!-- <div class="col-sm-6">
                                   
                            
                            
                            </div> -->




                        </div>

                    </form>
                </div>
            </div>
        </div>
        <?php
    }
    ?>


    <div class="tab-pane fade" id="tab-example-6" >

        <!-- Conten form --> 

<!-- FILE UPLOAD CLASS -->                
            <div class="panel" >
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
                            <th>Image</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr ng-repeat="value_upload in upload_data_view">
                            <td>{{value_upload.p_file_name}}</td>
                            <td><a href="">{{value_upload.p_file_category}}</a></td>
                            <!-- <td ng-click="alert(value_upload)"><a href=""><?=base_url();?>{{value_upload.p_file_path}}</a></td> -->
                            <!-- <td ng-click="alert(value_upload)"><a href="">str_replace("opt/lampp/htdocs/valsys",<?=base_url();?>,value_upload.p_file_path)</a></td> -->
                            <!-- <td><img src="/opt/lampp/htdocs/valsys/user_uploads/2017/03/11440.jpg"> </td> -->
                            <td><img id="myImg" src="<?=base_url();?>{{value_upload.p_file_path}}" width=100px height=50px data-toggle="modal" data-target="#ImageModal" ng-click="alert(value_upload)"></td>
                          </tr>
                        </tbody>
                      </table>



                      <!-- Trigger the modal with a button -->
                     <!--  <button type="button" class="btn btn-info btn-primary" data-toggle="modal" data-target="#FileUploadModal">Upload</button> -->


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

                       <!--  <div class="form-group" ng-model="first" ng-hide="salesc=='dtd' || salesc=='dtdbb' || salesc=='scc' || salesc=='ms'" ng-show="salesc=='sgs'">
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
                        </div> -->
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
                           <input type="checkbox" value="cek" ng-model="cfirstname">  <label class="col-sm-3 control-label"><label class="font-red">*</label>Firstname</label>
                            <div class="col-sm-6">
                             <input type="text" id="pt" name="pt" ng-model="FNAME" class="form-control" ng-disabled="!cfirstname">
                         </div>
                     </div>
                     <div class="form-group">
                        <label class="col-sm-3 control-label"><label class="font-red">*</label>Middlename</label>
                        <div class="col-sm-6">
                            <input type="text" id="pt" name="pt" ng-model="MNAME" class="form-control" ng-disabled="!cfirstname">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label"><label class="font-red">*</label>Lastname</label>
                        <div class="col-sm-6">
                            <input type="text" id="pt" name="pt" ng-model="LNAME" class="form-control" ng-disabled="!cfirstname">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label"><label class="font-red">*</label>Gender</label>
                        <div class="col-sm-6 ">
                                                                <!-- <label class="radio-inline"><input type="radio" id="" name="GENDER" ng-model="GENDER" value="male" required>Male</label>
                                                                <label class="radio-inline"><input type="radio" id="" name="GENDER" ng-model="GENDER" value="female">Female</label> -->
                                                                <input type="text" id="pt" name="pt" ng-model="prtype" class="form-control" disabled="">
                                                                
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
                         <input type="text" id="pt" name="pt" ng-model="prtype" class="form-control" disabled="">
                     </div>
                 </div>
                 <div class="form-group">
                    <label class="col-sm-3 control-label"><label class="font-red">*</label>Place of Birth</label>
                    <div class="col-sm-6">
                     <input type="text" id="pt" name="pt" ng-model="prtype" class="form-control" disabled="">
                 </div>
             </div>
             <div class="form-group">
                <label for="" class="col-sm-3 control-label"><label class="font-red">*</label>Date of Birth</label>
                <div class="col-sm-6">
                    <input type="text" id="pt" name="pt" ng-model="prtype" class="form-control" disabled="">
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
             <input type="checkbox" ng-model="cphone" value="cek"> <label class="col-sm-3 control-label"><label class="font-red">*</label>Main Phone</label>
            <div class="col-sm-6">
                <input type="text" id="pt" name="pt" ng-model="mainp" class="form-control" ng-disabled="!cphone">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label"><label class="font-red">*</label>Mobile Phone</label>
            <div class="col-sm-6">
              <input type="text" id="pt" name="pt" ng-model="mobilep" class="form-control" ng-disabled="!cphone">
          </div>
      </div>
        <div class="form-group">
            <label class="col-sm-3 control-label"><label class="font-red">*</label>Extra Phone</label>
            <div class="col-sm-6">
              <input type="text" id="pt" name="pt" ng-model="extrap" class="form-control" ng-disabled="!cphone">
          </div>
      </div>

      <!-- <div class="form-group">
        <label for="" class="col-sm-3 control-label"><label class="font-red">*</label>Installation Date</label>
        <div class="col-sm-6">
            <input type="text" id="pt" name="pt" ng-model="prtype" class="form-control" disabled="">
        </div>
    </div>
    <div class="form-group">
        <label for="" class="col-sm-3 control-label"><label class="font-red">*</label>Installation Time</label>
        <div class="col-sm-6">
            <input type="text" id="pt" name="pt" ng-model="prtype" class="form-control" disabled="">
        </div>
    </div>
    <div class="form-group">
        <label for="" class="col-sm-3 control-label"><label class="font-red">*</label>Confirmation Period</label>
        <div class="col-sm-6">
         <input type="text" id="pt" name="pt" ng-model="prtype" class="form-control" disabled="">
     </div>
    </div> -->
    <div class="form-group">
        <label class="col-sm-3 control-label">Email</label>
        <div class="col-sm-6">
            <input type="text" id="pt" name="pt" ng-model="EMAIL" class="form-control" disabled="">
        </div>
    </div>
     <div class="form-group">
        <label class="col-sm-3 control-label">Occupation</label>
        <div class="col-sm-6">
            <input type="text" id="pt" name="pt" ng-model="prtype" class="form-control" disabled="">
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-3 control-label">Income</label>
        <div class="col-sm-6">
            <input type="text" id="pt" name="pt" ng-model="prtype" class="form-control" disabled="">
        </div>
    </div>
   
    <div class="form-group">
        <label class="col-sm-3 control-label">SGS Parent Number</label>
        <div class="col-sm-6">
            <input type="text" id="pt" name="pt" ng-model="prtype" class="form-control" disabled="">
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-3 control-label">SGS Parent Name</label>
        <div class="col-sm-6">
            <input type="text" id="pt" name="pt" ng-model="prtype" class="form-control" disabled="">
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-3 control-label">Status Aplikasi</label>
        <div class="col-sm-6">
            <input type="text" id="pt" name="pt" ng-model="prtype" class="form-control" disabled="">
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-3 control-label">House Type</label>
        <div class="col-sm-6">
            <input type="text" id="pt" name="pt" ng-model="prtype" class="form-control" disabled="">
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-3 control-label">House Status</label>
        <div class="col-sm-6">
         <input type="text" id="pt" name="pt" ng-model="prtype" class="form-control" disabled="">
     </div>
    </div>
    <div class="form-group">
        <label class="col-sm-3 control-label">Pernah Berlangganan IDV/OKE/TOP</label>
        <div class="col-sm-6">
         <input type="text" id="pt" name="pt" ng-model="prtype" class="form-control" disabled="">
     </div>
    </div>
    <div class="form-group">
        <label class="col-sm-3 control-label">Cara Berlangganan</label>
        <div class="col-sm-6">
         <input type="text" id="pt" name="pt" ng-model="prtype" class="form-control" disabled="">
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

                    
                </div>
               <!--  <button type="button" class="btn btn-info btn-sm" ng-click="getOperationalEntityView()" >Search</button> -->
              
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


    <input type="checkbox" ng-model="checkedprefered"><label ng-hide="checkedprefered">Prefered Time</label><br>
    <div class="panel"  ng-hide="prefered" ng-show="checkedprefered">
        <div class="panel-body">
            <div class="example-box-wrapper">
                <div class="col-md-6">
                    <h3 class="title-hero">
                        <div class="tl-label bs-label label-success" style="margin-left:-20px;font-size: 100%">
                            Prefered Time
                        </div>
                    </h3>                 
                    <div class="form-group">
                        <label class="col-sm-3 control-label"><label class="font-red"></label>Verification Date</label>
                        <div class="col-sm-6">
                            <input type="text" id="emergency_name" name="emergency_name" ng-model="VerificationDate" placeholder="Full Name" required class="form-control" disabled="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label"><label class="font-red"></label>Verification Time</label>
                        <div class="col-sm-6">
                            <input type="text" id="pt" name="pt" ng-model="VerificationTime" class="form-control" disabled="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label"><label class="font-red"></label>Closing Date</label>
                        <div class="col-sm-6">
                            <input type="text" id="pt" name="pt" ng-model="ClosingDate" class="form-control" disabled="">
                        </div>
                    </div>
                    <div class="form-group">
                    <label class="col-sm-6 control-label"><label class="font-red"></label>Syarat dan Ketentuan Berlaku :</label>
                    <div class="col-sm-12" style="width: 200%">
                        <label>Setuju dengan syarat dan ketentuan berlanggan minimal satu tahun yakni 12 kali pembayaran iuran bulanan dan jika berhenti sebelum satu tahun maka akan dikenakan pinalty </label>
                         <input type="radio" id="" name="GENDER" ng-model="AGREEMENT" value="setuju" required>Setuju
                                                            <input type="radio" id="" name="GENDER" ng-model="AGREEMENT" value="taksetuju">Tidak Setuju
                    </div>

                                                          
                                                           
                                                            
                                                      
                </div>
                </div>
                <div class="col-md-6">    
                   <div class="form-group"></div>      
                   <div class="form-group"></div>      
                   

                <div class="form-group">
                    <label class="col-sm-3 control-label"><label class="font-red"></label>Schedule Installation Date</label>
                    <div class="col-sm-6">
                        <input type="text" id="emergency_address" name="emergency_address" ng-model="EMERGENCY_ADDRESS" placeholder="Required Field" required class="form-control" disabled="">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label"><label class="font-red"></label>Schedule Installation Time</label>
                    <div class="col-sm-6">
                        <input type="text" id="emergency_address" name="emergency_address" ng-model="EMERGENCY_ADDRESS" placeholder="Required Field" required class="form-control" disabled="">
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
                                                       <input type="checkbox" value="cek" ng-model="caddress">   <label class="col-sm-3 control-label"><label class="font-red">*</label>Address</label>
                                                        <div class="col-sm-6">
                                                            <textarea id="street_id" name="STREET" ng-model="ADDRESS" placeholder="Identity Address" required class="form-control" ng-disabled="!caddress"></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-sm-3 control-label">Province</label>
                                                        <div class="col-sm-6">
                                                        <input type="text" name="PROVINCE" ng-model="PROVINCE" placeholder="Province" required class="form-control" ng-disabled="!caddress"></input>    
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-sm-3 control-label">City</label>
                                                        <div class="col-sm-6">
                                                            <input type="text" name="CITY" ng-model="CITY" placeholder="City" required class="form-control" ng-disabled="!caddress"></input>
                                                           
                                                        </div>
                                                    </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                    <div class="form-group"></div>
                                                    <div class="form-group"></div>

                                                    <div class="form-group">
                                                        <label class="col-sm-3 control-label">Kecamatan</label>
                                                        <div class="col-sm-6">
                                                        <input type="text" name="DISTRICT" ng-model="DISTRICT" placeholder="District" required class="form-control" ng-disabled="!caddress"></input>
                                                        </div>
                                                        
                                                            
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-sm-3 control-label">Kelurahan</label>
                                                        <div class="col-sm-6">
                                                        <input type="text" name="SUBDISTRICT" ng-model="SUBDISTRICT" placeholder="Sub District" required class="form-control" ng-disabled="!caddress"></input>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-sm-3 control-label"><label class="font-red">*</label>Zipcode</label>
                                                        <button type="button" style="background-color: yellow;" type="button" class="btn btn-info btn-xs" ng-click="getZipcodeforCostTransport()" data-toggle="modal" data-target="#CostTransport" ng-disabled="!caddress">Cost Transport</button>
                                                        <div class="col-sm-4">
                                                            <input type="text" ng-model="ZIPCODE" name="ZIPCODE" placeholder="Zipcode" required class="form-control"ng-disabled="!caddress" >
                                                        </div>
                                                        
                                                        <label class="col-sm-3 control-label"></label>
                                                        <div class="col-sm-5">
                                                            
                                                            <button ng-disabled="!caddress" type="button" class="glyph-icon demo-icon tooltip-button icon-elusive-search" data-toggle="modal" data-target="#ZipCodeModal" style="margin-top:0px;padding-left:-20px;background-color: yellow;"></button>
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
                                                        <label class="col-sm-3 control-label">Installation Address Same with Identity Address</label>
                                                        <div class="col-sm-6">
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="checkbox checkbox-primary">
                                                                        <label>
                                                                            <input id="cek_install_same_with_identity" ng-model="cek_install" ng-change="installsameidentity()" type="checkbox" value="">
                                                  
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                       <input type="checkbox" ng-model="cinstalladdress"> <label class="col-sm-3 control-label"><label class="font-red">*</label>Installation Address</label>
                                                        <div class="col-sm-6">
                                                            <textarea type="text" name="INSTALLATION_ADDRESS" ng-model="INSTALL_ADDRESS" id="installaddress" placeholder="Installation Address" required class="form-control" ng-disabled="!cinstalladdress"></textarea>
                                                            
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-sm-3 control-label"><label class="font-red">*</label>Direction/Landmark</label>
                                                        <div class="col-sm-6">
                                                            <textarea type="text" name="DIRECTIONS" ng-model="INSTALL_LANDMARK" id="landmark" placeholder="LANDMARK" required class="form-control" ng-disabled="!cinstalladdress"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                                <br><br>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="col-sm-3 control-label">Province</label>
                                                        <div class="col-sm-6">
                                                        <input type="text" name="PROVINCE_INSTALLATION" ng-model="PROVINCE_INSTALL" placeholder="Province"  required class="form-control" ng-disabled="cek_install || !cinstalladdress" ></input>
                                                           
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-sm-3 control-label">City</label>
                                                        <div class="col-sm-6">
                                                            <input type="text" name="CITY_INSTALLATION" ng-model="CITY_INSTALL" placeholder="City"  required class="form-control" ng-disabled="cek_install || !cinstalladdress"></input>
                                                              
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-sm-3 control-label">Kecamatan</label>
                                                        <div class="col-sm-6">
                                                        <input type="text" name="DISTRICT_INSTALLATION" ng-model="DISTRICT_INSTALL" placeholder="District"  required class="form-control" ng-disabled="cek_install || !cinstalladdress"></input>
                                                        
                                                        </div>         
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-sm-3 control-label">Kelurahan</label>
                                                        <div class="col-sm-6">
                                                        <input type="text" name="SUBDISTRICT_INSTALLATION" ng-model="SUBDISTRICT_INSTALL" placeholder="Sub District"  required class="form-control" ng-disabled="cek_install || !cinstalladdress"></input>
                                                        
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-sm-3 control-label"><label class="font-red">*</label>Zipcode</label>
                                                        <div class="col-sm-4">
                                                            <input type="text" ng-model="ZIPCODE_INSTALL" name="ZIPCODE_INSTALLATION" placeholder="Zipcode" required class="form-control" ng-disabled="cek_install || !cinstalladdress">
                                                            
                                                        </div>
                                                        <button ng-disabled="!cinstalladdress" type="button" class="glyph-icon demo-icon tooltip-button icon-elusive-search" data-toggle="modal" data-target="#ZipCodeInstallationModal"style="margin-top:0px;padding-left:-20px;background-color: yellow;" ng-hide="cek_install" ></button>
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
                                                        <label class="col-sm-3 control-label">Billing Address Same with Identity Address</label>
                                                        <div class="col-sm-6">
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="checkbox checkbox-primary">
                                                                        <label>
                                                                            <input id="cek_billing_same_with_identity" ng-model="cek_billing_identity" ng-change="billing_same_identity()" input type="checkbox" value="" ng-disabled="cek_billing_install">
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
                                                          <input id="cek_billing_same_with_install" ng-model="cek_billing_install" ng-change="billing_same_install()" input type="checkbox" ng-disabled="cek_billing_identity" value="">
                                                      </label>
                                                  </div>
                                                  
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                                                    <div class="form-group">
                                                        <input type="checkbox" value="cek" ng-model="cbillingaddress"><label class="col-sm-3 control-label"><label class="font-red">*</label>Billing Address</label>
                                                        <div class="col-sm-6">
                                                            <textarea ng-disabled="!cbillingaddress" type="text" name="INSTALLATION_ADDRESSbilling" ng-model="INSTALL_ADDRESSbilling" id="installaddressbilling" placeholder="Installation Address" required class="form-control"></textarea>
                                                            
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-sm-3 control-label"><label class="font-red">*</label>Direction/Landmark</label>
                                                        <div class="col-sm-6">
                                                            <textarea ng-disabled="!cbillingaddress" type="text" name="DIRECTIONSbilling" ng-model="INSTALL_LANDMARKbilling" id="landmarkbilling" placeholder="LANDMARK" required class="form-control"></textarea>
                                                        </div>
                                                    </div>
                                
                                                    </div>
                                                    <div class="col-md-6">
                                                    <div class="form-group"></div>
                                                    <div class="form-group"></div>
                                                        <div class="form-group">
                                                        <label class="col-sm-3 control-label">Province</label>
                                                        <div class="col-sm-6">
                                                        <input type="text" name="PROVINCE_BILLING" ng-model="PROVINCE_BILLING" placeholder="Province"  required class="form-control" ng-disabled="cek_billing_identity||cek_billing_install || !cbillingaddress"></input>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-sm-3 control-label">City</label>
                                                        <div class="col-sm-6">
                                                            <input type="text" name="CITY_BILLING" ng-model="CITY_BILLING" placeholder="City"  required class="form-control" ng-disabled="cek_billing_identity||cek_billing_install || !cbillingaddress"></input>
                                                              
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-sm-3 control-label">Kecamatan</label>
                                                        <div class="col-sm-6">
                                                        <input type="text" name="DISTRICT_BILLING" ng-model="DISTRICT_BILLING" placeholder="District"  required class="form-control" ng-disabled="cek_billing_identity||cek_billing_install  || !cbillingaddress"></input>
                                                        
                                                        </div>         
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-sm-3 control-label">Kelurahan</label>
                                                        <div class="col-sm-6">
                                                        <input type="text" name="SUBDISTRICT_BILLING" ng-model="SUBDISTRICT_BILLING" placeholder="Sub District"  required class="form-control" ng-disabled="cek_billing_identity||cek_billing_install  || !cbillingaddress"></input>
                                                        
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-sm-3 control-label"><label class="font-red">*</label>Zipcode</label>
                                                        <div class="col-sm-4">
                                                            <input type="text" ng-model="ZIPCODE_BILLING" name="ZIPCODE_BILLING" placeholder="Zipcode" required class="form-control" ng-disabled="cek_billing_identity||cek_billing_install  || !cbillingaddress">
                                                            
                                                        </div>
                                                        <button ng-disabled="!cbillingaddress" type="button" class="glyph-icon demo-icon tooltip-button icon-elusive-search" data-toggle="modal" data-target="#ZipCodeBillingModal" ng-hide="cek_billing_identity||cek_billing_install"style="margin-top:0px;padding-left:-20px;background-color: yellow;" ></button>
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
                            <input type="checkbox" value="cek" ng-model="cemergency"> <label class="col-sm-3 control-label"><label class="font-red">*</label>Name</label>
                            <div class="col-sm-6">
                                <input ng-disabled="!cemergency" type="text" id="E_NAME" name="emergency_name" ng-model="EMERGENCY_NAME" placeholder="Full Name" required class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label"><label class="font-red">*</label>Sibling Relationship</label>
                            <div class="col-sm-6">
                                <select name="sibling" id="sibling" name="emergency_sibling" ng-model="E_SIBLING" class="custom-select required" ng-disabled="!cemergency">
                                    <option value=""> Select </option>
                                    <option value="orang tua">Parents</option>
                                    <option value="kadik">Brother/Sister</option>
                                    <option value="saudara">Comrade</option>
                                    <option value="anak">Son/Daughter</option>
                                    <option value="lainnya">Other Comrade</option>
                                    
                                </select>
                            </div>
                        </div>
            </div>
             <div class="col-md-6">    
                         <div class="form-group"></div>      
                         <div class="form-group"></div>      
                       <div class="form-group">
                            <label class="col-sm-3 control-label"><label class="font-red">*</label>Phone </label>
                            <div class="col-sm-6">
                                <input ng-disabled="!cemergency" type="text" id="emergency_phone" name="emergency_phone" ng-model="E_PHONE" data-parsley-type="digits" placeholder="Digits only" required class="form-control">
                            </div>
                        </div>
                        
                       <div class="form-group">
                            <label class="col-sm-3 control-label"><label class="font-red">*</label>Address</label>
                            <div class="col-sm-6">
                                <input  ng-disabled="!cemergency" type="text" id="emergency_address" name="emergency_address" ng-model="E_ADDRESS" placeholder="Required Field" required class="form-control">
                            </div>
                        </div>
                        </div>
        </div>
            </div>
    </div>
    <input type="checkbox" ng-model="checkedSales"><label ng-hide="checkedSales">Sales Profile Data</label><br>
    <div class="panel" ng-hide="Sales" ng-show="checkedSales">
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
                                    <input type="text" placeholder="" ng-model="SALES_CODE_SEARCH" ng-keypress="getSalesProfileData()" disabled="">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Nama Sales</label>
                                <div class="col-sm-3">
                                    <input type="text" placeholder="" ng-model="SALES_NAME_SEARCH" ng-keypress="getSalesProfileData()" disabled="">
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
            <input type="text" id="sales_name" name="sales_name" ng-model="SALES_NAME" placeholder="Sales Profile " required class="form-control">
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
            <input type="text" name="POS"  placeholder="Point Of Sales"  class="form-control" ng-model="POINT_OF_SALES" disabled="" >
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
                            <input type="checkbox" ng-model="cpackage">  
                              <div class="panel" ng-hide="cpackage">
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
                    
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Available Promo</label>
                            <div class="col-sm-6">
                               <textarea type="text" id="pt" name="pt" ng-model="AVAILABLE_PROMO" class="form-control" disabled=""></textarea>
                               
                            </div>
                        </div>
                        
                       
                    </div>
                    <div class="col-md-6">
                    <h3 class="title-hero">
                    <div class="tl-label bs-label label-danger" style="margin-left:-20px;font-size: 100%">
                    Available Package
                    </div>
                    </h3>
                      <div class="form-group">
                            <label class="col-sm-3 control-label">Basic</label>
                            <div class="col-sm-6">
                                  <input type="text" id="pt" name="pt" ng-model="BASIC" class="form-control" disabled="">
                            </div>
                        </div>
                          <div class="form-group">
                            <label class="col-sm-3 control-label">Alacarte</label>
                            <div class="col-sm-6">
                                  <input type="text" id="pt" name="pt" ng-model="ALACARTE" class="form-control" disabled="">
                            </div>
                        </div>
                    
                    <!-- package -->
                    <input type="button" id="more_fields" ng-click="addNewPackage(count = count + 1)" ng-init="count=0"  value="Add Package" style="margin-left: 0px;visibility:hidden;"/>
                    <br /><br />
                        <div id="add_package" ng-show="ADD_PACKAGE"> <!-- add package field -->
                          <div class="form-group">
                              <label class="col-sm-3 control-label">Basic</label>
                              <div class="col-sm-6">
                                  <select id="package_basic"  name="package_basic" ng-model="PACKAGE_BASIC" ng-change="getValuePackageBasic()" class="required" style="width: 200px;">
                                   <option value=""></option>
                                    
                                  </select>
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
                                  <select id="package_basic1"  name="package_basic" ng-model="PACKAGE_BASIC1" ng-change="getValuePackageBasic1()" class="required" >
                                   <option value=""></option>
                                    
                                  </select>
                              </div>
                          </div>
                         
                          <div class="form-group">
                              <label class="col-sm-3 control-label">Alacarte </label>
                              <div class="col-sm-6">
                                <select id="package_alacarte1" name="package_alacarte[]" ng-model="PACKAGE_ALACARTE1" class="required" multiple="multiple" style="width:200px;">
                                    <option value=""></option>
                                    
                                </select>

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

     <div class="panel" ng-hide="!cpackage" ng-show="cpackage">
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
                                <select name="period_p" class="" ng-model="PAYMENT_PERIOD" ng-change="PaymentPeriodChange()">
                                 <option value="">Select</option>
                                 <option value="1">Monthly</option>
                                 <option value="4">Quarterly</option>
                                  <option value="6">Halfyearly</option>
                                 <option value="12">Yearly</option>
                        </select>
                            </div>
                        </div>
                    
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Brand</label>
                            <div class="col-sm-6">
                                <select id="package_brand" name="package_brand" ng-model="PACKAGE_BRAND" class="required">
                                 <option value="" selected>Select</option>
                                 <option value="IVDGT">Indovision</option>
                                 <option value="TOPTV">Top TV</option>
                                  <option value="OKEVN">Oke Vision</option>
                                 
                        </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Status</label>
                            <div class="col-sm-6">
                                <select id="package_status"name="package_status" class="" onChange="check();" ng-model="PACKAGE_STATUS" ng-change="StatusPackageChange(PACKAGE_STATUS)"> 
                                 <option value="" >Select</option>
                                 <option value="SINGLE">Single</option>
                                 <option value="MULTI">Multi</option>                                 
                                </select>
                        <script>   
            $('#formm').on('keyup keypress', function(e) {
              var keyCode = e.keyCode || e.which;
                if (keyCode === 13) { 
                e.preventDefault();
                return false;
            }
            });
                          function check() {
                            var el = document.getElementById("package_status");
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
                                <select id="promotionPROMO" name="promotion[]" ng-model="PROMO" ng-change="getValuePromo()" class="required"  style="width:200px;" >
                                    <?php 
                                    foreach ($promotion as $promotion) {
                                    echo "<option value='$promotion[promotion_id]'>$promotion[promotion_desc]</option>";
                                    }
                                    ?>
                                    
                                </select>
                               
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
                                  <select id="package_basic"  name="package_basic" ng-model="PACKAGE_BASIC" ng-change="getValuePackageBasic()" class="required" style="width: 200px;">
                                   <option value=""></option>
                                    
                                  </select>
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
                                  <select id="package_basic1"  name="package_basic" ng-model="PACKAGE_BASIC1" ng-change="getValuePackageBasic1()" class="required" >
                                   <option value=""></option>
                                    
                                  </select>
                              </div>
                          </div>
                         
                          <div class="form-group">
                              <label class="col-sm-3 control-label">Alacarte </label>
                              <div class="col-sm-6">
                                <select id="package_alacarte1" name="package_alacarte[]" ng-model="PACKAGE_ALACARTE1" class="required" multiple="multiple" style="width:200px;">
                                    <option value=""></option>
                                    
                                </select>

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

    <div class="panel" ng-hide="cpackage">
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
                                <input type="text" ng-model="INSTALLATION_COST" disabled="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Cost Package</label>
                            <div class="col-sm-6">
                                <input type="text" ng-model="COST_PACKAGE" disabled="" >
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Alacarte</label>
                            <div class="col-sm-6">
                                <input type="text" ng-model="ALACARTE_COST" disabled="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Promo</label>
                            <div class="col-sm-6">
                                <input type="text" ng-model="PROMO_COST" disabled="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Total Estimated Costs</label>
                            <div class="col-sm-6">
                              
                                <input type="text" ng-model="TOTAL_COST" disabled="">
                            </div>
                        </div>  
                   <!--  <div class="form-group">
                        <label class="col-sm-3 control-label">Total Estimated Costs</label>
                        <div class="col-sm-6">
                          {{TOTAL_ESTIMATED_COSTS = ESTIMATED_COST_PACKAGE + ESTIMATED_ALACARTE - ESTIMATED_PROMO;""}}
                          <input type="text" value="" ng-model="TOTAL_ESTIMATED_COSTS" value="{{TOTAL_ESTIMATED_COSTS}}" disabled="">
                      </div>
                  </div>   -->
              </div>
          </div>

      </div>
    </div>
    </div>


    <div class="panel" ng-hide="!cpackage" ng-show="cpackage">
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
                   <!--  <div class="form-group">
                        <label class="col-sm-3 control-label">Total Estimated Costs</label>
                        <div class="col-sm-6">
                          {{TOTAL_ESTIMATED_COSTS = ESTIMATED_COST_PACKAGE + ESTIMATED_ALACARTE - ESTIMATED_PROMO;""}}
                          <input type="text" value="" ng-model="TOTAL_ESTIMATED_COSTS" value="{{TOTAL_ESTIMATED_COSTS}}" disabled="">
                      </div>
                  </div>   -->
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
                        <div class="form-group" >
                            <label class="col-sm-3 control-label"><label class="font-red">*</label>KTP</label>
                            <div class="col-sm-6">
                                <input type="text" id="pt" name="pt" ng-model="ckktp" class="form-control" disabled="">
                            </div>
                        </div>
                         <div class="form-group" >
                            <label class="col-sm-3 control-label"><label class="font-red">*</label>CREDIT CARD</label>
                            <div class="col-sm-6">
                                <input type="text" id="pt" name="pt" ng-model="cc" class="form-control" disabled="">
                            </div>
                        </div>
                         <div class="form-group" >
                            <label class="col-sm-3 control-label"><label class="font-red">*</label>PICKUP DANA</label>
                            <div class="col-sm-6">
                                <input type="text" id="pt" name="pt" ng-model="dana" class="form-control" disabled="">
                            </div>
                        </div>
                            <div class="form-group" >
                            <label class="col-sm-3 control-label"><label class="font-red">*</label>SURAT KUASA</label>
                            <div class="col-sm-6">
                                <input type="text" id="pt" name="pt" ng-model="sk" class="form-control" disabled="">
                            </div>
                        </div>
                        <div class="form-group" >
                            <label class="col-sm-3 control-label"><label class="font-red">*</label>TTD</label>
                            <div class="col-sm-6">
                                <input type="text" id="pt" name="pt" ng-model="ttd" class="form-control" disabled="">
                            </div>
                        </div>
                        <div class="form-group" >
                            <label class="col-sm-3 control-label"><label class="font-red">*</label>SURAT PERNYATAAN TINGGAL DI RUMAH SEWA</label>
                            <div class="col-sm-6">
                                <input type="text" id="pt" name="pt" ng-model="sw" class="form-control" disabled="">
                            </div>
                        </div>
                    <br>
                    <br>
                    <br>
                    <!-- FILE UPLOAD CLASS -->                
                    <div class="panel" ng-hide="fileupload">
                        
          </div>
          <!-- END FILE UPLOAD CLASS --> 
      </div>


    </div>

    </div>
    </div> 


    </div>

    <div class="tab-pane fade" id="tab-example-5" >
     <div class="panel">
    <!--  <button type="button" class="btn btn-info btn-sm" ng-click="getOperationalEntityView()" >Search</button> -->
      <div class="modal-footer">
      <div class="tl-label bs-label label-black" style="margin-left:-20px;font-size: 100%">
                                                        ENTRY HADRWARE
                                                    </div>
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
              <td>{{val.ITEM_DESCR}}</td>
              <td>{{val.ITEM_DESCR}}</td>
              <td>{{val.SERIAL_NUMBER}}</td>
             
            </tr>
          </tbody>
        </table>
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
    
    <script>

      $(document).ready(function() { 
	var prosnbr = '<?php echo trim($detail->PROSPECT_NBR); ?> ';
    function getSearchHW(id){ //datatable_group
    var jparams = "prospect_nbr="+prospect_nbr;
    $.ajax({
       type     : 'POST',
       url      :'<?=base_url();?>entryp/Entryp3/getSearchHW',
       data     : jparams,
       dataType : 'json',
      success  : function(result){
          if (result.status==1){
              var xhtm="";
              var tot = 0;
              $.each(result.data, function(i,item){
              tot = tot+1;
              xhtm += "<tr>";
              xhtm += "<td>"+tot+"</td>";     
              xhtm += "<td>"+item.ITEM_DESCR+"</td>";     
              xhtm += "<td>"+item.SERIAL_NUMBER+"</td>";    
              xhtm += "<td class ='hide'>"+item.ITEM_ID+"</td>";  
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
	
	if (prosnbr !='' ) {
		getSearchHW(prosnbr);
	}
    </script>




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
      //fileupload

      var hardcode = '<?php echo $detail->PROSPECT_NBR;?>';
//var hardcode = '010000820441';

$http.get("<?php echo site_url('entryp/Entryp/angular_ViewUploadData');?>", {params:{"param1": hardcode}}).success(function (resultDataUpload) { 
        //console.log(result_DataZipcode);
        $scope.upload_data_view=resultDataUpload;
      });
//fileupload

        var promoId = '<?php echo $detail->PROSPECT_NBR;?>';

     /* $http.get("<?php echo site_url('entryp/Entryp/angular_getPromoData');?>", {params:{"param1": promoId }}).success(function (result_DataPromo) { */
      $http.get("<?php echo site_url('entryp/Entryp/dataa_hw');?>", {params:{"param1": promoId }}).success(function (result_DataPromo) { 
            //console.log(result_DataPromo);            
            $scope.array_promo =  result_DataPromo;
            //console.log($scope.array_promo);
            
            $scope.ESTIMATED_PROMO = parseInt($scope.array_promo[0].disc_inst_fee);

        });

       $scope.ini_datanya = [];
       
        //console.log($scope.BRANCH);
        $http.get("<?php echo site_url('entryp/Entryp/angular_OperationalEntityView');?>").success(function(result){
            console.log('flag berhasil');
            console.log(result);
            $scope.ini_datanya=result;
        });


       //  $scope.resultx = true;
       $scope.savebutton = true;
       $scope.menubox = true;
       $scope.note = true;
       $scope.tabelbtp = true;

       $scope.box = true;
       $scope.profilecustomer = true;
       $scope.Sales = true;
       $scope.Emergency = true;
       $scope.Billing = true;
       $scope.Installation = true;
       $scope.addressofidentity = true;
       $scope.prefered = true;
       
       $scope.cat = true;
       $scope.subc = true;
       $scope.add = true;
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
        $scope.expdate='<?php echo $detail->EXP_DATE;?>';
        $scope.FNAME='<?php echo $detail->FIRST_NAME;?>';
        $scope.EMAIL='<?php echo $detail->EMAIL;?>';
        $scope.mobilep='<?php echo $detail->MOBILE_PHONE;?>';


       
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
    $scope.BASIC='<?php echo $detail->BASIC;?>';
    $scope.ALACARTE='<?php echo $detail->ALACARTE;?>';
    $scope.INSTALLATION_COST='<?php echo $detail->INSTALLATION_COST;?>';
    $scope.COST_PACKAGE='<?php echo $detail->COST_PACKAGE;?>';
    $scope.ALACARTE_COST='<?php echo $detail->ALACARTE_COST;?>';
    $scope.PROMO_COST='<?php echo $detail->PROMO_COST;?>';
    $scope.TOTAL_COST='<?php echo $detail->TOTAL_COST;?>';
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
               if($scope.resultxmod =='BTP'){
                var person = {

                    idprospect:$scope.idprospect,
                    category:$scope.category,
                    subcategory: $scope.subcategory,


                };
            }else if ($scope.resultxmod =='Reject'){
                var person = {

                    idprospect:$scope.idprospect,
                    informasid:$scope.infodata,
                    status: $scope.statuss,
                    reason: $scope.rej,

                };
            }else if($scope.resultxmod =='Pending'){
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
            url: '<?=base_url();?>entryp/Entryp/add_datadth',
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

            if($scope.resultxmod =='BTP'){
                var person = {

                 idprospect:$scope.idprospect,
                 category:$scope.category,
                 subcategory: $scope.subcategory,
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
            url: '<?=base_url();?>entryp/Entryp/dth_app_rem',
            data: person,
        });
    }

    };    

    $scope.save = function(){
        
           var veri =  {
            PNUMB:$scope.pnumb,
            TYPEP:$scope.typep,
            STATUSEP:$scope.resultxmod,
            PROCESSID:$scope.process,
            dthnote:$scope.dthnote,            
            PROSPECT_ID:$scope.idprospect,
            cfirstname:$scope.cfirstname,
            cphone:$scope.cphone,
            AGREEMENT:$scope.AGREEMENT,
            caddress:$scope.caddress,
            cbillingaddress:$scope.cbillingaddress,
            cemergency:$scope.cemergency,
            cpackage:$scope.cpackage,
            FNAME:$scope.FNAME,
            MNAME:$scope.MNAME,
            LNAME:$scope.LNAME,
            EMAIL:$scope.EMAIL,
            mobilep:$scope.mobilep,
            extrap:$scope.extrap,
            mainp:$scope.mainp,
            ADDRESS:$scope.ADDRESS,
            PROVINCE:$scope.PROVINCE,
            CITY:$scope.CITY,
            DISTRICT:$scope.DISTRICT,
            SUBDISTRICT:$scope.SUBDISTRICT,
            ZIPCODE:$scope.ZIPCODE,
            INSTALL_ADDRESS:$scope.INSTALL_ADDRESS,
            INSTALL_LANDMARK:$scope.INSTALL_LANDMARK,
            PROVINCE_INSTALL:$scope.PROVINCE_INSTALL,
            CITY_INSTALL:$scope.CITY_INSTALL,
            DISTRICT_INSTALL:$scope.DISTRICT_INSTALL,
            SUBDISTRICT_INSTALL:$scope.SUBDISTRICT_INSTALL,
            ZIPCODE_INSTALL:$scope.ZIPCODE_INSTALL,
            INSTALL_ADDRESSbilling:$scope.INSTALL_ADDRESSbilling,
            INSTALL_LANDMARKbilling:$scope.INSTALL_LANDMARKbilling,
            PROVINCE_BILLING:$scope.PROVINCE_BILLING,
            CITY_BILLING:$scope.CITY_BILLING,
            DISTRICT_BILLING:$scope.DISTRICT_BILLING,
            SUBDISTRICT_BILLING:$scope.SUBDISTRICT_BILLING,
            ZIPCODE_BILLING:$scope.ZIPCODE_BILLING,
            EMERGENCY_NAME:$scope.EMERGENCY_NAME,
            E_SIBLING:$scope.E_SIBLING,
            E_PHONE:$scope.E_PHONE,
            E_ADDRESS:$scope.E_ADDRESS,
            PAYMENT_PERIOD:$scope.PAYMENT_PERIOD,
            PACKAGE_BRAND:$scope.PACKAGE_BRAND,
            STATUS_PACKAGE:$scope.STATUS_PACKAGE,
            PROMO:$scope.PROMO,
            PACKAGE_BASIC:$scope.PACKAGE_BASIC,
            PACKAGE_ALACARTE:$scope.PACKAGE_ALACARTE,



           
        }
        console.log(veri);
        $http({
            method: 'POST',
            url: '<?=base_url();?>entryp/Entryp/updateEP_Reg_Dth_db',
            data: veri,
         // });
        }).success(function(data){
            //alert($scope.resultxmod);
            alert('success!');
            window.location.href = "http://192.168.168.219/valsys/entryp/entryp/reg_dth";
                
            }).error(function(){
              
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

        $scope.subdisposisi =true;
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







    <script type="text/javascript">
    /*var app = angular.module('valsys', []);

    app.controller('myCtrl', function($scope,$http) {
        $scope.resultx = true;
        $scope.cat = true;
        $scope.subc = true;
        $scope.add = true;
        $scope.idprospect='<?php echo $detail->PROSPECT_ID;?>';

         $scope.people = [
            ];
           
        
      $scope.addPerson = function(){
        var person = {
            idprospect:$scope.idprospect,
            name: $scope.name,
            age: $scope.age,
          
        };
        
        $scope.people.push(person);
      
        $http({
            method: 'POST',
            url: '<?=base_url();?>entryp/Entryp/add_datadth',
            data: person,
          });
       
      };
       
       $scope.removePerson = function(index){
        $scope.people.splice(index, 1);
       };    
      

    });*/
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
        $("#package_brand").change(function(){

            var value=$(this).val();
            if(value!=""){
            $.ajax({
            data:{modul:'basic',id:value},
            success: function(respond){
            $("#package_basic").html(respond);
            }
            })
            }

        });   
    
    
  

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