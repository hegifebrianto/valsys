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
            .yellow
            {
                background-color: yellow;
            }
            
            .btnAdd{background-color:#1E90FF     ;border:2px solid #90EE90  ;border-radius:4px;color:white;cursor:pointer;}
            .btnAdd:hover{background-color:#90EE90  ;border:2px solid #5F9EAD;}
            </style>
           
            <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>

           <script src="<?=base_url();?>assets/jq/jquery-1.11.3.min.js"></script>
          <link rel="stylesheet" href="<?=base_url();?>assets/jq/jquery-ui.css">
          <script src="<?=base_url();?>assets/jq/jquery-ui.js"></script>
          <link href="<?=base_url();?>assets/jq/bootstrap-editable.css" rel="stylesheet"/>
          <script src="<?=base_url();?>assets/jq/jqueryui-editable.min.js"></script>
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

            <div class="panel">
            <div class="panel-body">
                <style>
                        .col-md-3{
                            width: 9em;
                            float: left;

                        }
           
                        </style>








                <div class="example-box-wrapper">
                    <!-- <ul class="list-group row" ng-hide="tab" ng-hide="profile" ng-show="salesc=='dtd' || salesc=='dtdbb' || salesc=='ms' || salesc=='scc' || salesc=='sgs' || salesc=='dealer' || salesc=='df' "> -->
                    <ul class="list-group row" ng-hide="tab" ng-hide="profile" ng-show="sales_category=='1' || sales_category=='2' || sales_category=='3' || sales_category=='4' || sales_category=='5' || sales_category=='8' || sales_category=='9'" style="
    margin-top: 10px;
">
                        <li class="col-md-3" active >
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
                        <li class="col-md-3" ng-show="sales_category=='3' || sales_category=='8' || sales_category=='9'">
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
                             <a href="#tab-example-7" data-toggle="tab" class="list-group-item">
                                 <i class="glyph-icon font-green icon-book"></i>
                                Status
                                <i class="glyph-icon icon-chevron-right"></i>
                            </a>
                        </li>
                        <li class="col-md-3">
                             <a href="#tab-example-9" data-toggle="tab" class="list-group-item">
                                 <i class="glyph-icon font-green icon-book"></i>
                                History
                                <i class="glyph-icon icon-chevron-right"></i>
                            </a>
                        </li>
                     <li class="col-md-3">
                        
                  <a href="#tab-example-8" data-toggle="tab" class="list-group-item" style="padding: 0.55em; ">
                    <button type="button" name="sub" id="saveBtn" ng-show="BUTTON_SAVE_SHOW"  ng-click="validation_check_form()"  lass="btn loadingc-button btn-info"  style="width: 100%; height: 80%; " >Save</button>
                    <button type="button" id="button_update" ng-model="BUTTON_UPDATE" ng-show="BUTTON_UPDATE_SHOW" ng-click="update_form_submit(pnumb)" data-loading-text="Loading..." class="btn loading-button btn-info">Update</button>
                   <!--  <button name="sub" id="saveBtn"  class="btn btn-lg btn-primary">Save</button> -->
                   <!-- <input type="button" onclick="coba();" value="Submit"/> -->
                   </a>
    

                        </li>
                            </ul>


            <!-- Conten form --> 
                         <div class="tab-content">
                        <form class="form-horizontal bordered-row" id="formm" name="formm" data-parsley-validate="" method="POST" action="<?=base_url();?>entryp/Entryp/DTDaddData" enctype="multipart/form-data" >
                            <div class="panel-body">
                                <div class="example-box-wrapper">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">Sales Channel</label>
                                                <div class="col-sm-6">
                                                    <!-- <select ng-model="salesc" name="CATEGORY" class="custom-select">
                                                        <option value="-1">Select</option>
                                                        <option value="dtd">Door To Door (DTD)</option>
                                                        <option value="dtdbb">Door To Door (DTD) Bawa Barang</option>
                                                        <option value="ms">Modern Store (MS)</option>
                                                        <option value="scc">Sales Call Center (SCC)</option>
                                                        <option value="sgs">Subscriber Get Subscriber (SGS)</option>
                                                        <option value="dealer">Dealer</option>
                                                        <option value="df">Dealer Franchise</option>
                                                    </select> -->
                                                    <select id="sales_dissabled" ng-options="x.SALES_CHANNEL_ID as x.SALES_CHANNEL_DESCR for x in master_sales_channel" ng-model="sales_category"  class="required">
                                                    </select>
                                                </div>
                                            </div>
                                            </div>
                                             <div class="col-md-6">
                                              <div class="form-group" >
                                                        <label class="col-sm-3 control-label ">Prospect Number</label>

                                                        <div class="col-sm-3">
                                                            <input type="text" id="pnumber" ng-change="validExpDate()"  ng-model="pnumb" ng-keypress="enter($event,pnumb)" name="PN" placeholder="prospect number"  class="form-control"> 
                                                            <!-- <input  id="cek_ktp" ng-model="checked" type="checkbox" value="{{$scope.pnumb}}">
                                                              <label for="boxed-layout">Manual</label> -->
                                                        </div>

                                                        <button type="button" class="glyph-icon demo-icon tooltip-button icon-elusive-search" style="margin-top:0px;padding-left:-20px;" id="bt_search_prospect" ng-click="searchProspectNumber(pnumb )" ></button>

                                                    </div>
                                                <div class="form-group" ng-hide="numberp" ng-show="sales_category">
                                                        <label class="col-sm-3 control-label ">Customer Number</label>

                                                        <div class="col-sm-3">
                                                            <input type="text" id="custid" ng-change=""  ng-model="custid" name="custid" placeholder="customer ID"  class="form-control" disabled=""> 
                                                            <!-- <input  id="cek_ktp" ng-model="checked" type="checkbox" value="{{$scope.pnumb}}">
                                                              <label for="boxed-layout">Manual</label> -->
                                                        </div>

                                                        

                                                    </div>
                                                    </div>
                                                    <div class="col-md-6">
                                            <div class="form-group"  ng-show="error">
                                                <label class="col-sm-6 control-label"><b style="color: red">Please check mandatory field</b></label>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="tab-pane fade active in" id="tab-example-1" ng-hide="profile" ng-show="salesc=='dtd' || salesc=='dtdbb' || salesc=='ms' || salesc=='scc' || salesc=='sgs' || salesc=='dealer' || salesc=='df' "> -->
                            <div class="tab-pane fade active in" id="tab-example-1" ng-hide="profile" ng-show="sales_category=='1' || sales_category=='2' || sales_category=='3' || sales_category=='4' || sales_category=='5' || sales_category=='8' || sales_category=='9'">
                                <div class="panel" >



                                <button type="button" class="tl-label bs-label label-success angled" style="width: 100%; margin-left:-20px;font-size: 100%" data-toggle="collapse" data-target="#demo">
                                Profile Customer Data
                                </button>

                                    <div class="panel-body collapse in" id="demo">
                                        <div class="example-box-wrapper">
                                            <div class="row">
                                                <div class="col-md-6">
                                                <h3 class="title-hero">
                                                </h3>


                                                 <div class="form-group" >
                                                        <label class="col-sm-3 control-label"><label class="font-red"></label>Form Number</label>
                                                        <div class="col-sm-6">
                                                            <!-- <input type="text" id="f" name="formn" ng-model="formn" placeholder="Form Number"  class="form-control"> -->
                                                            <input type="text" name="formn" ng-model="formn" placeholder="Form Number" ng-pattern="/^[a-zA-Z0-9]*$/" class="form-control">
                                                        </div>
                                                        <span ng-show="formm.formn.$error.pattern">Please use Alphanumeric only</span>
                                                    </div>
                                                  
                                                    <div class="form-group">
                                                        <label class="col-sm-3 control-label">Prospect Type</label>
                                                        <div class="col-sm-6">
                                                            <!-- <select name="pt" ng-model="ptype" ng-options="opt as opt.label for opt in unitss" class="">
                                                            </select> -->
                                                            <select ng-options="x.PROSPECT_TYPE_ID as x.PROSPECT_TYPE_CODE for x in prospectypes" ng-model="ptype" ng-init="ptype='3'" class="required">
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="col-sm-3 control-label">Hardware Status</label>
                                                        <div class="col-sm-6">
                                                            <select name="HARDWARE_STATUS" ng-options="opt as opt.label for opt in units " ng-model="hstatus" class="custom-select">
                                                                <!-- <option value="-1">Select</option> -->
                                                               
                                                            </select>
                                                        </div>
                                                    </div>
                                                    
                                                     <div class="form-group" ng-model="first" ng-hide="sales_category=='1' || sales_category=='3' || sales_category=='4' || sales_category=='5' ||  sales_category=='8' || sales_category=='9'">
                                                        <label class="col-sm-3 control-label">SGS Parent Number</label>
                                                       <div class="col-sm-6">
                                                            <input type="text" id="sa" name="sa"  ng-model="SGS_PARENT_NUMBER" placeholder="SGS Parent Number" ng-keypress="enterSGSParentNumber($event,SGS_PARENT_NUMBER)"  class="form-control">
                                                        </div>
                                                        <button type="button" class="glyph-icon demo-icon tooltip-button icon-elusive-search" style="margin-top:0px;padding-left:-20px;" id="bt_search_prospect" ng-click="sgs_number(SGS_PARENT_NUMBER)"></button>
                                                    </div>
                                                     <div class="form-group" ng-model="first" ng-hide="sales_category=='1' || sales_category=='3' || sales_category=='4' || sales_category=='5' || sales_category=='8' || sales_category=='9'">
                                                        <label class="col-sm-3 control-label">SGS Parent Name</label>
                                                       <div class="col-sm-6">
                                                            <input type="text" id="snm" name="snm" ng-model="sgsname" placeholder="SGS Parent Name"  class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label  class=" col-sm-3 control-label"> <label class="font-red">*</label>Identity Type</label>
                                                        <div class="col-sm-6">
                                                            <select ng-options="x.IDENTITY_TYPE_ID as x.IDENTITY_TYPE_NAME for x in identitytypes" ng-model="INPUTID" ng-change="validation_identity_types(INPUTID)" ng-init="INPUTID='1'" class="required">
                                                            </select>
                                                            <input id="id_number" ng-show="INPUTID=='1' || INPUTID=='3'" type="text" validate-number placeholder="Field" name="identity_number" ng-model="identity_number" ng-change="validExpDate()" class="form-control" ng-pattern="/^[0-9]*$/">
                                                            
                                                            <input id="id_varchar" class="form-control" ng-show="INPUTID=='2'" type="text" ng-model="identity_varchar">
                                                            <!-- <select id="inputid" name="ID_TYPE" ng-options="opt as opt.label for opt in idtype" required ng-model="INPUTID" class="" >
                                                            </select> -->

                                                            <!-- <input type="text"  ng-hide="ktphide" ng-show="INPUTID=='ktp' || INPUTID=='passport' || INPUTID=='sim' "  id="id_type" name="ID_NUMBER" placeholder=" Field"  ng-model="IDN" class="form-control" > -->
                                                             <!-- <input type="text"  placeholder=" Input Identity Number" required ng-pattern="" ng-model="IDN" class="form-control"> --> 
                                                             <input id="" ng-model="seumur_hidup" ng-change="seumurhidupchange()" type="checkbox" value="">
                                                             centang identitas type seumur hidup
                                                        </div>
                                                        <span ng-show="formm.identity_number.$error.pattern">Use numbers letters only & max 16 digits</span>

                                                    </div>
                                                     <div class="form-group">
                                                        <label for="" class="col-sm-3 control-label"><label class="font-red">*</label>Expired Date</label>
                                                        <div class="col-sm-6">
                                                            <div class="input-prepend input-group">
                                                                <span class="add-on input-group-addon">
                                                                    <i class="glyph-icon icon-calendar"></i>
                                                                </span>
                                                                <input type="text" id="expired_date" placeholder="Expired Date" class="bootstrap-datepicker form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-sm-3 control-label"><label class="font-red">*</label>Firstname</label>
                                                        <div class="col-sm-2">
                                                            <select ng-options="salutation.label for salutation in salutations track by salutation.id" ng-model="SALUTATION" ></select>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <input type="text" id="f" ng-model="FIRST_NAME" name="FIRST_NAME" ng-pattern="/^[a-zA-Z0-9.']*$/" placeholder=" Field"  class="form-control">
                                                            <span ng-show="formm.FIRST_NAME.$error.pattern">Use alphanumeric and characters allowed ' & .</span>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-sm-3 control-label">Middlename</label>
                                                        <div class="col-sm-6">
                                                            <input type="text" id="m" ng-model="MIDDLE_NAME" name="MIDDLE_NAME" ng-pattern="/^[a-zA-Z0-9.']*$/" placeholder=" Field"  class="form-control">
                                                            <span ng-show="formm.MIDDLE_NAME.$error.pattern">Use alphanumeric and characters allowed ' & .</span>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-sm-3 control-label"><label class="font-red">*</label>Lastname</label>
                                                        <div class="col-sm-6">
                                                            <input type="text" id="l" ng-model="LAST_NAME" name="LAST_NAME" ng-pattern="/^[a-zA-Z0-9.']*$/" placeholder=" Field"  class="form-control">
                                                            <span ng-show="formm.LAST_NAME.$error.pattern">Use alphanumeric and characters allowed ' & .</span>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-sm-3 control-label"><label class="font-red">*</label>Gender</label>
                                                        <div class="col-sm-6 ">
                                                            <!-- <label class="radio-inline"><input type="radio" id="" name="GENDER" ng-model="GENDER" value="male" >Male</label>
                                                            <label class="radio-inline"><input type="radio" id="" name="GENDER" ng-model="GENDER" value="female">Female</label> -->
                                                            <input type="radio" id="" name="GENDER" ng-model="GENDER" value="MALE" >Male
                                                            <input type="radio" id="" name="GENDER" ng-model="GENDER" value="FEMALE">Female
                                                            
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="form-group">
                                                        <label class="col-sm-3 control-label"><label class="font-red">*</label>Religion</label>
                                                        <div class="col-sm-6">
                                                            <select name="RELIGION" ng-model="RELIGION" class="" >
                                                                <option value="" selected="selected">Select</option>
                                                                <option value="ISLAM">Islam</option>
                                                                <option value="KRISTEN">Kristen</option>
                                                                <option value="PROTESTAN">Protestan</option>
                                                                <option value="HINDU">Hindu</option>
                                                                <option value="BUDHA">Budha</option>
                                                                <option value="KONGHUCU">Konghucu</option>
                                                                <option value="KEPERCAYAAN">Kepercayaan</option>
                                                            </select>
                                                        </div>
                                                    </div> 
                                                    <div class="form-group">
                                                        <label class="col-sm-3 control-label">Place of Birth</label>
                                                        <div class="col-sm-6">
                                                            <input type="text" name="PLACE_BIRTH" placeholder="Place Of Birth" ng-pattern="/^[a-zA-Z0-9.'-]*$/" ng-model="PLACEOFBIRTH"  class="form-control">
                                                            <span ng-show="formm.PLACE_BIRTH.$error.pattern">Use alphanumeric and characters allowed ' - .</span>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="" class="col-sm-3 control-label"><label class="font-red">*</label>Date of Birth</label>
                                                        <div class="col-sm-6">
                                                            <div class="input-prepend input-group">
                                                                <span class="add-on input-group-addon">
                                                                    <i class="glyph-icon icon-calendar"></i>
                                                                </span>
                                                                <input type="text" name="DATE_OF_BIRTH" id="DATE_OF_BIRTH" class="bootstrap-datepicker form-control" ng-model="DATEOFBIRTH" placeholder="DATE OF BIRTH"  data-date-format="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="" class="col-sm-3 control-label"><label class="font-red">*</label>Customer Class</label>
                                                        <div class="col-sm-6">
                                                                <select id="sales_dissabled" ng-init="CUSTOMER_CLASS='1'" ng-options="x.CUSTOMER_CLASSIDS_ID as x.CUSTOMER_CLASSIDS_NAME for x in customer_class" ng-model="CUSTOMER_CLASS"  class="required">
                                                                </select>
                                                        </div>
                                                    </div>
                                                    
                                                </div>
                                                <div class="col-md-6">
                                                    <h3 class="title-hero"></h3>
                                                   
                                                    <div class="form-group">
                                                        <label class="col-sm-3 control-label"><label class="font-red"></label>PLN ID</label>
                                                        <div class="col-sm-6">
                                                            <input type="text" name="PLN_ID" ng-model="IDPLN" data-parsley-type="digits" placeholder="Digits only" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-sm-3 control-label">Phone (House)</label>
                                                        <div class="col-sm-6">
                                                            <input type="text" name="HOME_PHONE" ng-model="HOME_PHONE" data-parsley-type="digits" ng-pattern="/^[0-9]*$/" placeholder="Digits only" class="form-control">
                                                        </div>
                                                        <span ng-show="formm.HOME_PHONE.$error.pattern">Use numeric only</span>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-sm-3 control-label">Phone (HP)</label>
                                                        <div class="col-sm-6">
                                                            <input type="text" name="MOBILE_PHONE" ng-model="MOBILE_PHONE" data-parsley-type="digits" ng-pattern="/^[0-9]*$/" placeholder="Digits only"  class="form-control">
                                                        </div>
                                                        <span ng-show="formm.MOBILE_PHONE.$error.pattern">Use numeric only</span>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-sm-3 control-label">Work Phone </label>
                                                        <div class="col-sm-6">
                                                            <input type="text" name="WORK_PHONE" ng-model="WORK_PHONE" data-parsley-type="digits" ng-pattern="/^[0-9]*$/" placeholder="Digits only"  class="form-control">
                                                        </div>
                                                        <span ng-show="formm.WORK_PHONE.$error.pattern">Use numeric only</span>
                                                    </div>
                                                   
                                                    <div class="form-group">
                                                        <label for="" class="col-sm-3 control-label">Installation Date</label>
                                                        <div class="col-sm-6">
                                                            <div class="input-prepend input-group">
                                                                <span class="add-on input-group-addon">
                                                                    <i class="glyph-icon icon-calendar"></i>
                                                                </span>
                                                                <input type="text" placeholder=" Field" id="INSTALLATION_DATE" ng-model="INSTALLATION_DATE" class="bootstrap-datepicker form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="" class="col-sm-3 control-label">Installation Time</label>
                                                        <div class="col-sm-6">
                                                            <div class="bootstrap-timepicker dropdown">
                                                                <input ng-model="INSTALLATION_TIME" id="INSTALLATION_TIME" class="timepicker-example form-control" placeholder="Installation Time"  type="text">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="" class="col-sm-3 control-label"><label class="font-red">*</label>Verification Date</label>
                                                        <div class="col-sm-6">
                                                            <div class="input-prepend input-group">
                                                                <span class="add-on input-group-addon">
                                                                    <i class="glyph-icon icon-calendar"></i>
                                                                </span>
                                                                <!-- <input type="text" name="daterangepicker-example" id="daterangepicker-example" ng-model="CONFIRMATIONPERIOD" class="form-control"> -->
                                                                <input type="text" placeholder=" Field" id="verification_date" ng-model="VERIFICATION_DATE" class="bootstrap-datepicker form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="" class="col-sm-3 control-label"><label class="font-red">*</label>Verification Time</label>
                                                        <div class="col-sm-6">
                                                            <select ng-options="x.VERIFICATION_TIME_ID as x.VERIFICATION_TIME_DESCR for x in verification_times" ng-model="VERIFICATION_TIME"  class="required" style="width:200px;"></select>
                                                        </div>
                                                    </div>

                                                     <div class="form-group">
                                                        <label class="col-sm-3 control-label">Email</label>
                                                        <div class="col-sm-6">
                                                            <input type="text" name="EMAIL" ng-model="EMAIL" data-parsley-type="email" placeholder="Email address"  class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-sm-3 control-label">House Type</label>
                                                        <div class="col-sm-6">
                                                            <select ng-options="x.PROPERTY_ID as x.PROPERTY_DESCRIPTION for x in PropertyTypes" ng-init="HTYPE='1'"  ng-model="HTYPE" class="required" style="width:200px;"></select>
                                                            
                                                            <!-- <select ng-model="HTYPE" ng-init="HTYPE = '1'"  style="width:200px;">
                                                                <option  ng-repeat="PropertyType in PropertyTypes" value="{{PropertyType.PROPERTY_ID}}">{{PropertyType.PROPERTY_DESCRIPTION}}</option>
                                                            </select> -->
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-sm-3 control-label">House Status</label>
                                                        <div class="col-sm-6">
                                                            <select name="BUILDING_STATUS" ng-model="HSTATUS" class="">
                                                             <option value="">Select</option>
                                                             <option value="SENDIRI">Milik Sendiri</option>
                                                             <option value="KELUARGA">Milik Keluarga</option>
                                                              <option value="PERUSAHAAN">Milik Perusahaan</option>
                                                             <option value="SEWA">Sewa</option>
                                                            <option value="KPR">KPR</option>
                                                    </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-sm-3 control-label">Occupation</label>
                                                        <div class="col-sm-6">
                                                            <select name="OCCUPATION" ng-model="OCCU" class="">
                                                             <option value="">Select</option>
                                                             <option value="PEGAWAI NEGERI">Pegawai Negeri</option>
                                                             <option value="PEGAWAI BUMN">Pegawai BUMN</option>
                                                              <option value="PEGAWAI SWASTA">Pegawai Swasta</option>
                                                             <option value="PROFESSIONAL">Profesional</option>
                                                    </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-sm-3 control-label">Income</label>
                                                        <div class="col-sm-6">
                                                            <select name="INCOME" ng-model="INCOM" class="">
                                                             <option value="">Select</option>
                                                             <option value="2.000.000"><2.000.000</option>
                                                             <option value="2.000.000 - 4.000.000">2.000.000 - 4.000.000</option>
                                                              <option value="4.000.000 - 6.000.000">4.000.000 - 6.000.000</option>
                                                             <option value="6.000.000 - 8.000.000">6.000.000 - 8.000.000</option>
                                                             <option value="8.000.000 - 10.000.000">8.000.000 - 10.000.000</option>
                                                             <option value=">10.000.000">>10.000.000</option>
                                                    </select>
                                                        </div>
                                                    </div>
                                                  
                                                    
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

                                                <button type="button" class="tl-label bs-label label-success angled" style="width: 100%; margin-left:-20px;font-size: 100%" data-toggle="collapse" data-target="#demo1">
                                                        Address of Identity Card
                                                </button>




                                    <div class="panel-body collapse" id="demo1">
                                        <div class="example-box-wrapper">
                                            <div class="row">
                                                <div class="col-md-6">
                                                <h3 class="title-hero">
                                                    
                                                </h3>
                                                    <div class="form-group">
                                                        <label class="col-sm-3 control-label"><label class="font-red">*</label>Country</label>
                                                        <div class="col-sm-6">
                                                        <!-- <select ng-model="COUNTRY_ID" ng-init="COUNTRY = '1'"  style="width:200px;">
                                                                <option ng-repeat="Countries in country" value="{{Countries.id}}">{{Countries.label}}</option>
                                                            </select> -->
                                                            <select ng-options="x.id as x.label for x in country" ng-model="COUNTRY_ID" ng-init="COUNTRY_ID = '1'" class="required">
                                                            </select>    
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="col-sm-6">
                                                            <input type="hidden" id="ADDRESS_ID" name="ADDRESS_ID" ng-model="ADDRESS_ID" placeholder="Identity Address"  class="form-control"></input>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-sm-3 control-label"><label class="font-red">*</label>Address</label>
                                                        <div class="col-sm-6">
                                                            <textarea id="street_id" name="STREET" ng-model="STREET" placeholder="Identity Address"  class="form-control"></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-sm-3 control-label">Direction</label>
                                                        <div class="col-sm-6">
                                                            <textarea  ng-model="DIRECTION" placeholder="Direction" class="form-control"></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-sm-3 control-label">Landmark</label>
                                                        <div class="col-sm-6">
                                                            <textarea ng-model="LANDMARK" placeholder="Landmark" class="form-control"></textarea>
                                                        </div>
                                                    </div>


                                                    <div class="form-group">
                                                        <label class="col-sm-3 control-label"><label class="font-red">*</label>Province</label>
                                                        <div class="col-sm-6">
                                                        <input type="text" name="PROVINCE" ng-model="PROVINCE" placeholder="Province"  class="form-control"></input>    
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-sm-3 control-label"><label class="font-red">*</label>City</label>
                                                        <div class="col-sm-6">
                                                            <input type="text" name="CITY" ng-model="CITY" placeholder="City"  class="form-control"></input>
                                                        </div>
                                                    </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                    <div class="form-group"></div>
                                                    <div class="form-group"></div>

                                                    <div class="form-group">
                                                        <label class="col-sm-3 control-label"><label class="font-red">*</label>Kecamatan</label>
                                                        <div class="col-sm-6">
                                                        <input type="text" name="DISTRICT" ng-model="DISTRICT" placeholder="District"  class="form-control"></input>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-sm-3 control-label"><label class="font-red">*</label>Kelurahan</label>
                                                        <div class="col-sm-6">
                                                        <input type="text" name="SUBDISTRICT" ng-model="SUBDISTRICT" placeholder="Sub District"  class="form-control"></input>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-sm-3 control-label"><label class="font-red">*</label>Zipcode</label>
                                                        <button type="button"  type="button" class="btn btn-info btn-xs" ng-click="getZipcodeforCostTransport()" data-toggle="modal" data-target="#CostTransport">Fee Transport</button>
                                                        <div class="col-sm-4">
                                                            <input type="text" ng-model="ZIPCODE" ng-keypress="enterZipcode($event,ZIPCODE)" name="ZIPCODE" placeholder="Zipcode"  class="form-control" >
                                                        </div>
                                                        
                                                        <label class="col-sm-3 control-label"></label>
                                                        <div class="col-sm-5">
                                                            <button type="button" ng-click="getDataZipcode(zip_code)" class="glyph-icon demo-icon tooltip-button icon-elusive-search" ng-click="zipcodemodalsearch(ZIPCODE)" style="margin-top:0px;padding-left:-20px;"></button>
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
                                                                                <td>{{value.subdistrict_name}}</td>
                                                                                <td>{{value.district_name}}</td>
                                                                                <td>{{value.city_name}}</td>
                                                                                <td>{{value.province_name}}</td>
                                                                                <td>{{value.zipcode_id}}</td>
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
                                                                        <label class="col-sm-5 control-label"><label class="font-red">*</label>Distance (KM)</label>
                                                                        <div class="col-sm-3">
                                                                            <input type="text" ng-model="CST_JARAK"  value="" class="">    
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label class="col-sm-5 control-label"><label class="font-red">*</label> Inner / Outer city</label>
                                                                        <div class="col-sm-2">
                                                                            <input type="text" ng-model="CST_DKLK" placeholder="inner / outer" class="">    
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label class="col-sm-5 control-label"><label class="font-red">*</label> Transportation Cost</label>
                                                                        <div class="col-sm-2">
                                                                            <input type="text" ng-model="CST_COST" placeholder="Transportation Cost" class="">    
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label class="col-sm-5 control-label"><label class="font-red">*</label> Installation branch</label>
                                                                        <div class="col-sm-2">
                                                                            <input type="text" ng-model="CST_BRANCH" placeholder="Cabang Pemasangan" class="">    
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

                                        <button type="button" class="tl-label bs-label label-success angled" style="width: 100%; margin-left:-20px;font-size: 100%" data-toggle="collapse" data-target="#demo2">
                                                        Installation Address
                                                    </button>
                                    <div class="panel-body collapse" id="demo2">
                                        <div class="example-box-wrapper">
                                            <div class="row">
                                                <div class="col-md-6">
                                                <h3 class="title-hero">
                                                   
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
                                                        <label class="col-sm-3 control-label"><label class="font-red">*</label>Installation Address</label>
                                                        <div class="col-sm-6">
                                                            <textarea type="text" name="INSTALLATION_ADDRESS" ng-model="INSTALL_ADDRESS" id="installaddress" placeholder="Installation Address"  class="form-control"></textarea>
                                                            
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-sm-3 control-label">Direction</label>
                                                        <div class="col-sm-6">
                                                            <textarea type="text" name="" ng-model="INSTALL_DIRECTION" id="landmark" placeholder="DIRECTION"  class="form-control"></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-sm-3 control-label">Landmark</label>
                                                        <div class="col-sm-6">
                                                            <textarea type="text" name="" ng-model="INSTALL_LANDMARK" id="INSTALL_LANDMARK" placeholder="LANDMARK"  class="form-control"></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="form-group" ng-hide="cek_install">
                                                        <label class="col-sm-3 control-label"><label class="font-red">*</label>Different Installation Causes</label>
                                                        <div class="col-sm-6">
                                                            <!-- <input id="sales_differentcauses" name="sales_differentcauses" ng-model="SALES_DIFFERENTCAUSES" type="text" placeholder="Different Installation Causes"  class="form-control"> -->
                                                             <select ng-options="x.DIFFERENT_CAUSES_ID as x.DIFFERENT_CAUSES_DESCR for x in different_causes" ng-model="SALES_DIFFERENTCAUSES"  class="required">
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <button type="button" type="button" class="btn btn-info btn-xs" ng-click="generatePDFBedaAlamat(HSTATUS,SALES_NIK,SALES_CODE,SALES_OFFICEBRANCH,FIRST_NAME,STREET,INSTALL_ADDRESS,SALES_DIFFERENTCAUSES)" >Beda alamat
                                                    </button>
                                                </div>
                                                <br><br>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="col-sm-3 control-label"><label class="font-red">*</label>Province</label>
                                                        <div class="col-sm-6">
                                                        <input type="text"  ng-model="PROVINCE_INSTALL" placeholder="Province"   class="form-control" ng-disabled="cek_install" ></input>
                                                           
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-sm-3 control-label"><label class="font-red">*</label>City</label>
                                                        <div class="col-sm-6">
                                                            <input type="text"  ng-model="CITY_INSTALL" placeholder="City" class="form-control" ng-disabled="cek_install"></input>
                                                              
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-sm-3 control-label"><label class="font-red">*</label>Kecamatan</label>
                                                        <div class="col-sm-6">
                                                        <input type="text"  ng-model="DISTRICT_INSTALL" placeholder="District"   class="form-control" ng-disabled="cek_install"></input>
                                                        
                                                        </div>         
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-sm-3 control-label"><label class="font-red">*</label>Kelurahan</label>
                                                        <div class="col-sm-6">
                                                        <input type="text" ng-model="SUBDISTRICT_INSTALL" placeholder="Sub District"   class="form-control" ng-disabled="cek_install"></input>
                                                        
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-sm-3 control-label"><label class="font-red">*</label>Zipcode</label>
                                                        <div class="col-sm-4">
                                                            <input type="text" ng-model="ZIPCODE_INSTALL" ng-keypress="enterZipcode_Install($event,ZIPCODE_INSTALL)"  placeholder="Zipcode"  class="form-control" ng-disabled="cek_install">
                                                        </div>
                                                        <button type="button" ng-click="getInstallationAddrZipcode(zip_code)" class="glyph-icon demo-icon tooltip-button icon-elusive-search" style="margin-top:0px;padding-left:-20px;" ng-hide="cek_install" ></button>
                                                        <label class="col-sm-3 control-label"></label>
                                                        <div class="col-sm-5">
                                                            
                                                        </div>
                                                    </div>

                                                        <h3 class="title-hero">
                                                        <div class="tl-label bs-label label-danger" style="margin-left:-20px;font-size: 100%">
                                                        Transportation Fee
                                                        </div>
                                                        </h3>
                                                        <div class="form-group">
                                                            <label class="col-sm-3 control-label">Area : LK / DK</label>
                                                            <div class="col-sm-6">
                                                                <input type="text" placeholder="LK / DK" ng-model="BT_DK_LK" class="form-control" disabled></input>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-sm-3 control-label">Branch Office</label>
                                                            <div class="col-sm-6">
                                                            <input type="text" placeholder="Branch Office" ng-model="BT_BRANCH_OFFICE" class="form-control" disabled></input>
                                                            
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-sm-3 control-label">Region Office</label>
                                                            <div class="col-sm-6">
                                                            <input type="text" placeholder="Region Office" ng-model="BT_REGION_OFFICE" class="form-control" disabled></input>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-sm-3 control-label">Cost Transport</label>
                                                            <div class="col-sm-6">
                                                            <input type="text" placeholder="Cost Transport" ng-model="BT_FEE" class="form-control" disabled></input>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                         <label class="col-sm-3 control-label"></label>
                                                            <div class="col-sm-6">
                                                                <input input type="checkbox" value=""  ng-model="check_IncludeTransportationFee">
                                                                Include Transport Fee
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
                                                                                <td>{{value.subdistrict_name}}</td>
                                                                                <td>{{value.district_name}}</td>
                                                                                <td>{{value.city_name}}</td>
                                                                                <td>{{value.province_name}}</td>
                                                                                <td>{{value.zipcode_id}}</td>
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
                                         <button type="button" class="tl-label bs-label label-success angled" style="width: 100%; margin-left:-20px;font-size: 100%" data-toggle="collapse" data-target="#demo3">
                                                        Billing Address
                                                    </button>
                                    <div class="panel-body collapse" id="demo3">
                                        <div class="example-box-wrapper">
                                            <div class="row">
                                                <div class="col-md-6">
                                                <h3 class="title-hero">
                                                   
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
                                                        <label class="col-sm-3 control-label"><label class="font-red">*</label>Installation Address</label>
                                                        <div class="col-sm-6">
                                                            <textarea type="text" name="INSTALLATION_ADDRESSbilling" ng-model="ADDRESS_BILLING" id="installaddressbilling" placeholder="Installation Address"  class="form-control"></textarea>
                                                            
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-sm-3 control-label">Direction</label>
                                                        <div class="col-sm-6">
                                                            <textarea type="text" name="DIRECTIONSbilling" ng-model="DIRECTION_BILLING" id="landmarkbilling" placeholder="DIRECTION"  class="form-control"></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-sm-3 control-label">Landmark</label>
                                                        <div class="col-sm-6">
                                                            <textarea type="text" name="LANDMARKbilling" ng-model="LANDMARK_BILLING" id="landmark2billing" placeholder="LANDMARK"  class="form-control"></textarea>
                                                        </div>
                                                    </div>
                                                
                                                    </div>
                                                    <div class="col-md-6">
                                                    <div class="form-group"></div>
                                                    <div class="form-group"></div>
                                                        <div class="form-group">
                                                        <label class="col-sm-3 control-label"><label class="font-red">*</label>Province</label>
                                                        <div class="col-sm-6">
                                                        <input type="text" name="PROVINCE_BILLING" ng-model="PROVINCE_BILLING" placeholder="Province"   class="form-control" ng-disabled="cek_billing_identity||cek_billing_install"></input>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-sm-3 control-label"><label class="font-red">*</label>City</label>
                                                        <div class="col-sm-6">
                                                            <input type="text" name="CITY_BILLING" ng-model="CITY_BILLING" placeholder="City"   class="form-control" ng-disabled="cek_billing_identity||cek_billing_install"></input>
                                                              
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-sm-3 control-label"><label class="font-red">*</label>Kecamatan</label>
                                                        <div class="col-sm-6">
                                                        <input type="text" name="DISTRICT_BILLING" ng-model="DISTRICT_BILLING" placeholder="District"   class="form-control" ng-disabled="cek_billing_identity||cek_billing_install"></input>
                                                        
                                                        </div>         
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-sm-3 control-label"><label class="font-red">*</label>Kelurahan</label>
                                                        <div class="col-sm-6">
                                                        <input type="text" name="SUBDISTRICT_BILLING" ng-model="SUBDISTRICT_BILLING" placeholder="Sub District"   class="form-control" ng-disabled="cek_billing_identity||cek_billing_install"></input>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-sm-3 control-label"><label class="font-red">*</label>Zipcode</label>
                                                        <div class="col-sm-4">
                                                            <input type="text" ng-model="ZIPCODE_BILLING" ng-keypress="enterZipcode_Billing($event,ZIPCODE_BILLING)" name="ZIPCODE_BILLING" placeholder="Zipcode"  class="form-control" ng-disabled="cek_billing_identity||cek_billing_install">
                                                            
                                                        </div>
                                                        <button type="button" class="glyph-icon demo-icon tooltip-button icon-elusive-search" data-toggle="modal" data-target="#ZipCodeBillingModal" ng-hide="cek_billing_identity||cek_billing_install"style="margin-top:0px;padding-left:-20px;" ></button>
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
                                                                                <td>{{value.subdistrict_name}}</td>
                                                                                <td>{{value.district_name}}</td>
                                                                                <td>{{value.city_name}}</td>
                                                                                <td>{{value.province_name}}</td>
                                                                                <td>{{value.zipcode_id}}</td>
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


                   <button type="button" class="tl-label bs-label label-success angled" style="width: 100%; margin-left:-20px;font-size: 100%"data-toggle="collapse" data-target="#demo4" >
                Emergency (different house)
                </button>


            <div class="panel-body collapse" id="demo4">
            <div class="example-box-wrapper">
            <div class="col-md-6">
            <h3 class="title-hero">
             
            </h3>                 
                    <div class="form-group">
                            <label class="col-sm-3 control-label"><label class="font-red">*</label>Name</label>
                            <div class="col-sm-6">
                                <input type="text" id="emergency_name" name="emergency_name" ng-model="EMERGENCY_NAME" placeholder="Full Name"  class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label"><label class="font-red">*</label>Sibling Relationship</label>
                            <div class="col-sm-6">
                                <select ng-model="EMERGENCY_SIBLING" ng-init="EMERGENCY_SIBLING = '1'" >
                                    <option ng-repeat="EC_Sibling in EC_Siblings" value="{{EC_Sibling.EC_SIBLING_ID}}">{{EC_Sibling.EC_SIBLING_NAME}}</option>
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
                                <input type="text" id="emergency_phone" name="emergency_phone" ng-model="EMERGENCY_PHONE" ng-pattern="/^[0-9]*$/" placeholder="Digits only"  class="form-control">
                                <span ng-show="formm.emergency_phone.$error.pattern">Use numeric only</span>
                            </div>
                        </div>
                        
                       <div class="form-group">
                            <label class="col-sm-3 control-label"><label class="font-red">*</label>Address</label>
                            <div class="col-sm-6">
                                <input type="text" id="emergency_address" name="emergency_address" ng-model="EMERGENCY_ADDRESS" placeholder=" Field"  class="form-control">
                            </div>
                        </div>
                        </div>
        </div>
            </div>
        </div>
<div class="panel" ng=hide="sales">
        

                           <button type="button" class="tl-label bs-label label-success angled" style="width: 100%; margin-left:-20px;font-size: 100%" data-toggle="collapse" data-target="#demo5" >
                            SALES PROFILE DATA
                            </button>
                            <div class="panel-body collapse" id="demo5">
            
            <div class="example-box-wrapper">
                
                    <div class="row">

                         <div class="col-md-6">
                         <h3 class="title-hero">
                         
                         </h3>
                            <div class="form-group">
                                <label class="col-sm-3 control-label"><label class="font-red">*</label>Sales Code</label>
                                <div class="col-sm-5">
                                    <input id="sales_code" name="sales_code" ng-model="SALES_CODE" ng-keypress="enterSalesCode($event,SALES_CODE)"  type="text" placeholder=" Field"  class="form-control">
                                </div>
                               <!--<button type="button" class="glyph-icon demo-icon tooltip-button icon-elusive-search"  ng-click="salesCodeSearch(SALES_CODE)" style="margin-top:0px;padding-left:-20px;" ></button>-->
                                <button type="button" class="glyph-icon demo-icon tooltip-button icon-elusive-search" ng-click="getSalesProfileData(SALES_CODE)" style="margin-top:0px;padding-left:-20px;" ></button>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label"><label class="font-red">*</label>NIK</label>
                                <div class="col-sm-6">
                                    <input type="text" id="sales_nik" name="sales_nik" ng-model="SALES_NIK" placeholder="NIK"  class="form-control">
                                    <!-- Trigger the modal with a button -->
                                </div>
                            </div>
                            <!-- BEGINING MODAL -->
                            <!-- Modal -->
                              <div class="modal fade" id="SalesProfileModal" role="dialog">
                                <div class="modal-dialog modal-sm">
                                  <div class="modal-content" style="width: 400px;"  >
                                    <div class="modal-header">
                                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                                      <h4 class="modal-title">Sales Profile</h4>
                                    </div>
                                    <div class="modal-body"  >
                                       <!--  <form action="popup.php"> -->
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">Sales Code</label>
                                                <div class="col-sm-3">
                                                    <input type="text" placeholder="" ng-model="SALES_CODE_SEARCH" ng-keypress="getParamsSales()">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">Nama Sales</label>
                                                <div class="col-sm-3">
                                                    <input type="text" placeholder="" ng-model="SALES_NAME_SEARCH" ng-keypress="getParamsSales()">
                                                </div>
                                            </div>
                                            
                                                 
                                       
                                        <button type="button" class="btn btn-info btn-sm" ng-click="getParamsSales()" >Search</button>
                                    </div>
                                    <div class="modal-footer">
                                        <table id="datatable-tabletools" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                        <thead>
                                         <tr>
                                          <th>Sales Code</th>
                                          <th>Sales Name</th>
                                          <th>NIK</th>
                                         </tr>
                                        </thead>
                                        <tbody>
                                         <tr style="cursor: pointer;"onmouseover="this.style.background='gray';" onmouseout="this.style.background='white';" ng-repeat="value in master_employee_data" ng-dblclick="getValueSalesProfileData(value)">
                                          <td>{{value.EMPLOYEE_ID}}</td>
                                          <td>{{value.EMPLOYEE_NAME}}</td>
                                          <td>{{value.NIK}}</td>
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
                                    <input type="text" id="sales_name" name="sales_name" ng-model="SALES_NAME" placeholder="Sales Profile "  class="form-control">
                                </div>
                            </div>

                            
                            
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="col-sm-3 control-label"></label>
                                    <div class="col-sm-6">
                                       
                                    </div>
                            </div>
                            
                            
                            <!-- <div class="form-group">
                                <label class="col-sm-3 control-label"><label class="font-red">*</label>Name of Head Branch</label>
                                <div class="col-sm-6">
                                    <input type="text" id="sales_namebranchhead" name="sales_namebranchhead" ng-model="SALES_NAMEBRACHHEAD" placeholder=" Field"  class="form-control">
                                </div>
                            </div> -->
                            
                            <div class="form-group">
                                <label class="col-sm-3 control-label"><label class="font-red">*</label>Point Of Sales</label>
                                <!-- Trigger the with a button -->
                                
                                <div class="col-sm-4">
                                    <input type="text" name="ENTITYCODE"  placeholder="Entity Code"  class="form-control" ng-model="ENTITY_CODE"  >
                                </div>
                                <button type="button" class="glyph-icon demo-icon tooltip-button icon-elusive-search" data-toggle="modal" data-target="#PointOfSales" style="margin-top:0px;padding-left:-20px;" ></button>
                                <label class="col-sm-3 control-label"></label>
                                <div class="col-sm-5">
                                    <input type="text" name="POS"  placeholder="Point Of Sales"  class="form-control" ng-model="POINT_OF_SALES" >
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label"><label class="font-red">*</label>Office Branch</label>
                                <div class="col-sm-6">
                                    <input id="sales_officebranch" name="sales_officebranch" ng-model="SALES_OFFICEBRANCH" type="text" placeholder=" Field"  class="form-control">
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
                                                                            <select ng-options="x.SEQ_BRANCH as x.BRANCH for x in branch" ng-model="BRANCH_SEARCH" style="width:200px;">
                                                                            </select>
                                                                            <!-- <select id="branch" name="branch" ng-model="BRANCH" >
                                                                            <?php 
                                                                            foreach ($branch as $branch) {
                                                                                echo "<option value='$branch[SEQ_BRANCH]'>$branch[BRANCH]</option>";
                                                                            }
                                                                            ?>
                                                                            </select> -->
                                                                        </div>
                                                                        <label class="col-sm-1 control-label"><label class="font-red">*</label>Sales Channel</label>
                                                                        <div class="col-sm-3">
                                                                            <select ng-options="x.SALES_CHANNEL_ID as x.SALES_CHANNEL_DESCR for x in master_sales_channel" ng-model="sales_category" disabled class="required">
                                                                            </select>
                                                                        </div>

                                                                    </div>

                                                                    <div class="form-group">
                                                                        <label class="col-sm-1 control-label"><label class="font-red">*</label>Brand</label>
                                                                        <div class="col-sm-3">
                                                                            <select ng-options="x.BRAND_ID as x.BRAND_CODE for x in brand" ng-model="BRAND_SEARCH" class="required" style="width:200px;">
                                                                                
                                                                            </select>
                                                                            <!-- <select id="brand" name="brand" ng-model="BRAND" >
                                                                            <?php 
                                                                            foreach ($brand as $brand) {
                                                                                echo "<option value='$brand[BRAND_ID]'>$brand[BRAND_NAME]</option>";
                                                                            }
                                                                            ?>
                                                                            </select> -->
                                                                        </div>
                                                                    </div>
                                                                   
                                                                    <button type="button" class="btn btn-info btn-sm" ng-click="getOperationalEntityView(BRANCH_SEARCH,sales_category,BRAND_SEARCH)">Search</button>
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
                                                                            <tr style="cursor: pointer;"onmouseover="this.style.background='gray';" onmouseout="this.style.background='white';" ng-repeat="val in ini_datanya | filter:filter_data" ng-dblclick="getValueEntityCode(val)">
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
                            <div class="form-group" ng-model="first" ng-hide="sales_category=='1' || sales_category=='2' || sales_category=='3' || sales_category=='4' ">
                                                        <label class="col-sm-3 control-label">Store Area</label>
                                                       <div class="col-sm-6">
                                                            
                                                                <!-- <select id="promotion" name="promotion[]" ng-model="promotion" class=""  style="width:200px;" > -->
                                                                <select id="promotion" name="STOREAREA" ng-model="promotion" class=""   >
                                                                <?php 
                                                                foreach ($salesMS as $salesMS) {
                                                                echo "<option value='$salesMS[ms_id]'>$salesMS[ms_store]</option>";
                                                                }
                                                                ?>
                                        
                                                                </select>
                                                        
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

   
    <div class="tab-pane fade" id="tab-example-2" ng-hide="package" ng-show="sales_category=='1' || sales_category=='2' || sales_category=='3' || sales_category=='4' || sales_category=='5' || sales_category=='8' || sales_category=='9' ">
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
                                                        <select ng-model="PAYMENT_PERIOD" ng-options="bil.label for bil in billing_frequency_array track by bil.id" class="required" style="width: 200px;">
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-3 control-label">Hardware</label>
                                                    <div class="col-sm-6">
                                                        <select ng-options="x.PRODUCT_ID as x.PRODUCT_NAME for x in ProductHardware" ng-model="PACKAGE_HARDWARE" ng-change="getHardwareHD(PACKAGE_HARDWARE)" class="required" style="width:200px;"></select>
                                                        <select ng-options="x.PRODUCT_ID as x.PRODUCT_NAME for x in HardwareHD" ng-model="PACKAGE_HARDWARE_HD" ng-init="PACKAGE_HARDWARE_HD=1" class="required" style="width:200px;"></select> 
                                                    </div>
                                                    
                                                </div>                                                

                                                <div class="form-group">
                                                    <label class="col-sm-3 control-label">Brand</label>
                                                    <div class="col-sm-6">
                                                        <!-- <select ng-model="PACKAGE_BRAND" ng-options="brand.label for brand in package_brand_array track by brand.id" ng-init="getMasterBasic(PACKAGE_BRAND.id)" ng-change="getMasterBasic(PACKAGE_BRAND.id)" class="required" style="width: 200px;">
                                                        </select> -->
                                                        <select ng-options="x.BRAND_ID as x.BRAND_CODE for x in brand" ng-model="PACKAGE_BRAND" ng-init="init_package()" ng-change="getMasterBasic(PACKAGE_BRAND)"class="required" style="width:200px;"></select>

                                                    </div>
                                                </div>
                                                
                                                <div class="form-group">
                                                    <label class="col-sm-3 control-label">Status</label>
                                                    <div class="col-sm-6">
                                                        <select ng-model="PACKAGE_STATUS" ng-options="package_status.label for package_status in package_status_array track by package_status.id" class="required" style="width: 200px;">
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-3 control-label">Available Promo</label>
                                                    <div class="col-sm-6">
                                                       <!-- <select ng-init="PROMO='3226'" ng-model="PROMO" ng-change="getValuePromo()" style="width:200px;">
                                                        <option  ng-repeat="promo in promotions" value="{{promo.promotion_id}}">{{promo.promotion_desc}}</option>
                                                       </select> -->
                                                       <select  ng-options="promo.Id as promo.Description for promo in promotions" ng-model="PACKAGE_PROMO" class="required" style="width:200px;"></select>                                                       
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
                                            <input type="button" ng-show="PACKAGE_STATUS.id == 'MULTI'" ng-click="addNewPackage(count = count + 1)" ng-init="count=2"  value="Add Package" style="margin-left: 0px;"/>
                                            <br /><br />
                                                <div id="add_package" > <!-- add package field -->
                                                  <div class="form-group">
                                                      <label class="col-sm-3 control-label">Basic</label>
                                                      <div class="col-sm-6">
                                                      <!-- package_status.label for package_status in package_status_array track by package_status.id -->
                                                          <!-- <select  ng-options="basic.bundle_id as basic.bundle_name for basic in basics" 
                                                          ng-change="getValuePackageBasic(PACKAGE_BASIC)" ng-model="PACKAGE_BASIC" class="required" style="width:200px;"></select> -->
                                                        <select ng-options="x.PRODUCT_ID as x.PRODUCT_NAME for x in basics" ng-model="PACKAGE_BASIC" class="required" style="width:200px;">
                                                        </select>
                                                      </div>
                                                  </div>
                                                  <div class="form-group">
                                                      <label class="col-sm-3 control-label">Add On</label>
                                                      <div class="col-sm-6">
                                                            <div style="width:300px;height:100px;border:1px solid #FFF;    ">
                                                            <button type="button" class="btn btn-info btn-xs"  data-toggle="modal" data-target="#AddAlacarte" style="margin-top: 3px;"> + </button>
                                                            <a ng-repeat="item in AlacarteSelectedList"   style=" background-color: black; margin: 3px; float: left; overflow: hidden; width: auto; " class="bs-label label-black" >{{item.PRODUCT_NAME}} 
                                                                <div ng-click="selectIdx(item)"  style="cursor: pointer; background-color: red; color: red ; float:right; margin-left: 5px; height: 10px ">X
                                                                </div>
                                                            </a> &nbsp;

                                                        </div>
                                                        <div class="col-md-6">
                                             <button type="button" type="button" class="btn btn-info btn-xs" ng-click="CalculateEstimatedPrice()">CALCULATE</button>
  
                                    </div>
                                                      </div>
                                                      
                                                  </div>
                                                 

                                                  <!-- BEGINING MODAL -->
                                                    <!-- Modal -->
                                                      <div class="modal fade" id="AddAlacarte" role="dialog"  >
                                                        <div class="modal-dialog modal-sm" style="width: 500px ">
                                                          <div class="modal-content">
                                                            <div class="modal-header">
                                                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                              <h4 class="modal-title">Add Alacarte</h4>
                                                            </div>
                                                            <div class="modal-body">
                                                                    <!-- <ul class="nguix-list" style="height:350px;overflow: auto;" >
                                                                            <input type="text" ng-model="scrOccupancy.channel_name" placeholder="search..."/>
                                                                        
                                                                        <li ng-repeat="itm in alacartes | filter:scrOccupancy" ng-click="alacarteSelectedIdx">
                                                                            <span class="list-icon {{itm.channel_name| limitTo: 1}}">{{itm.channel_name | limitTo: 1}}</span>
                                                                            <h1>{{itm.service_name}}</h1>
                                                                        </li>
                                                                    </ul> -->
                                                                <div class="panel panel-default">
                                                                  <div class="panel-heading">Alacarte List</a></div>
                                                                  <div class="panel-body">
                                                                    <div class="list-group">
                                                                    <input type="text" ng-model="scrOccupancy.channel_name" placeholder="search..." style="width: 200px;" />

                                                                    <a ng-class="{yellow : item.selected}" ng-repeat="item in alacartes" ng-click="selectIdx(item)" class="list-group-item" style="cursor: pointer; width: 220px; float: left;" >
                                                                        <div  >{{item.PRODUCT_NAME}}</div>
                                                                    </a>
                                                                    </div>
                                                                  </div>
                                                                </div>
                                                                
                                                            </div>
                                                            <div class="modal-footer">
                                                              <!-- <button type="button" class="btn btn-default" ng-click="saveAlacarte()">Save</button> -->
                                                              <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                                                            </div>
                                                          </div>
                                                        </div>
                                                      </div>
                                                    <!-- END OF MODAL -->

                                                </div> 
                                                <!-- end of add package field -->
                                                 <!-- package1 -->
                                                <div id="add_package" ng-show="PACKAGE_STATUS.id == 'MULTI'"> <!-- add package field -->
                                                  <div class="form-group">
                                                      <label class="col-sm-3 control-label">Basic 1</label>
                                                      <div class="col-sm-6">
                                                          <select  ng-options="basic.bundle_id as basic.bundle_name for basic in basics" 
                                                          ng-change="getValuePackageBasic1(PACKAGE_BASIC1)" ng-model="PACKAGE_BASIC1" class="required" style="width:200px;">
                                                          </select>
                                                      </div>
                                                  </div>
                                                 
                                                  <div class="form-group">
                                                      <label class="col-sm-3 control-label">Add On 1</label>
                                                      <div class="col-sm-6" style="width: 200px;">
                                                        <div style="width:300px;height:100px;border:1px solid #FFF;">
                                                            <button type="button" class="btn btn-info btn-xs"  data-toggle="modal" data-target="#AddAlacarte1" style="margin-top: 3px;"> + </button>
                                                            <a ng-repeat="item1 in AlacarteSelectedList1"   style=" background-color: black; margin: 3px; float: left; overflow: hidden; width: auto; " class="bs-label label-black" >{{item1.service_name}} 
                                                                <div ng-click="selectIdx1(item1)"  style="cursor: pointer; background-color: red; color: red ; float:right; margin-left: 5px; height: 10px ">X
                                                                </div>
                                                            </a> &nbsp;
                                                        </div>
                                                      </div>
                                                  </div>
                                                  <!-- BEGINING MODAL -->
                                                    <!-- Modal -->
                                                      <div class="modal fade" id="AddAlacarte1" role="dialog" >
                                                        <div class="modal-dialog modal-sm">
                                                          <div class="modal-content">
                                                            <div class="modal-header">
                                                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                              <h4 class="modal-title">Add Alacarte 1</h4>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="panel panel-default">
                                                                  <div class="panel-heading">Alacarte 1 List</a></div>
                                                                  <div class="panel-body">
                                                                    <div class="list-group">
                                                                    <input type="text" ng-model="scrOccupancy.channel_name" placeholder="search..." style="width: 200px;" />

                                                                    <a ng-class="{yellow : item1.selected}" ng-repeat="item1 in alacartes1" ng-click="selectIdx1(item1)" class="list-group-item" style="cursor: pointer;" >
                                                                        <div  >{{item1.service_name}}</div>
                                                                    </a>
                                                                    </div>
                                                                  </div>
                                                                </div>
                                                                
                                                            </div>
                                                            <div class="modal-footer">
                                                              <!-- <button type="button" class="btn btn-default" ng-click="saveAlacarte()">Save</button> -->
                                                              <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                                                            </div>
                                                          </div>
                                                        </div>
                                                      </div>
                                                    <!-- END OF MODAL -->
                                                </div> <!-- end of add package field -->
                                                
                                                <!-- package2 -->
                                                <!-- add package field -->
                                                <div id="add_package" ng-show="ADD_PACKAGE2 &&PACKAGE_STATUS.id == 'MULTI'">
                                                  <div class="form-group">
                                                      <label class="col-sm-3 control-label">Basic 2</label>
                                                      <div class="col-sm-6" >
                                                          <select ng-options="basic.bundle_id as basic.bundle_name for basic in basics" 
                                                          ng-change="getValuePackageBasic2(PACKAGE_BASIC2)" ng-model="PACKAGE_BASIC2" class="required" style="width:200px;">
                                                          </select>
                                                      </div>
                                                  </div>
                                                 
                                                  <div class="form-group">
                                                      <label class="col-sm-3 control-label">Add On 2</label>
                                                      <div class="col-sm-6" >
                                                            <div style="width:300px;height:100px;border:1px solid #FFF;">
                                                                <button type="button" class="btn btn-info btn-xs"  data-toggle="modal" data-target="#AddAlacarte2" style="margin-top: 3px;"> + </button>
                                                                <a ng-repeat="item2 in AlacarteSelectedList2"   style=" background-color: black; margin: 3px; float: left; overflow: hidden; width: auto; " class="bs-label label-black" >{{item2.service_name}} 
                                                                <div ng-click="selectIdx2(item2)"  style="cursor: pointer; background-color: red; color: red ; float:right; margin-left: 5px; height: 10px ">X
                                                                </div>
                                                            </a> &nbsp;
                                                            </div>
                                                      </div>   
                                                  </div>

                                                  <!-- BEGINING MODAL -->
                                                    <!-- Modal -->
                                                      <div class="modal fade" id="AddAlacarte2" role="dialog" >
                                                        <div class="modal-dialog modal-sm">
                                                          <div class="modal-content">
                                                            <div class="modal-header">
                                                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                              <h4 class="modal-title">Add Alacarte 2</h4>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="panel panel-default">
                                                                  <div class="panel-heading">Alacarte 2 List</a></div>
                                                                  <div class="panel-body">
                                                                    <div class="list-group">
                                                                    <input type="text" ng-model="scrOccupancy.channel_name" placeholder="search..." style="width: 200px;" />
                                                                    <a ng-class="{yellow : item2.selected}" ng-repeat="item2 in alacartes2" ng-click="selectIdx2(item2)" class="list-group-item" style="cursor: pointer;" >
                                                                        <div>{{item2.service_name}}</div>
                                                                    </a>
                                                                    </div>
                                                                  </div>
                                                                </div>
                                                                
                                                            </div>
                                                            <div class="modal-footer">
                                                              <!-- <button type="button" class="btn btn-default" ng-click="saveAlacarte()">Save</button> -->
                                                              <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                                                            </div>
                                                          </div>
                                                        </div>
                                                      </div>
                                                    <!-- END OF MODAL -->
                                                </div> <!-- end of add package field -->    
  
                                    </div> <!-- END OF DIV COL MD 6 -->
                                </div> <!-- end div row -->     
                        </div> <!-- end div wrapper -->
                    </div> <!-- end div panel body -->
                </div> <!-- end div panel -->

                <div class="panel">
                    <div class="panel-body">
                        <div class="example-box-wrapper">
                                <div class="row">
                                    <h3 class="title-hero">
                                    <div class="tl-label bs-label label-danger" style="margin-left:-20px;font-size: 100%">
                                    Package Price detail  
                                    </div>
                                    </h3>
                                    <div class="col-md-4">
                                        Package 
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">Cost Basic</label>
                                                <div class="col-sm-6">
                                                    <input type="text" ng-model="COST_PACKAGE" >
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">Cost Add ON</label>
                                                <div class="col-sm-6">
                                                    <input type="text" ng-model="COST_ALACARTE">
                                                </div>
                                            </div> 
                                       
                                    </div>
                                    
                                    <div class="col-md-4" ng-show="PriceDetailPackage1">
                                        Package 1
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">Cost Basic 1</label>
                                                <div class="col-sm-6">
                                                    <input type="text" ng-model="COST_PACKAGE1" >
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">Cost Add On 1</label>
                                                <div class="col-sm-6">
                                                    <input type="text" ng-model="COST_ALACARTE1">
                                                </div>
                                            </div>
  
                                    </div>
                                    
                                    <div class="col-md-4" ng-show="PriceDetailPackage2">
                                        Package 2
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">Cost Basic 2</label>
                                                <div class="col-sm-6">
                                                    <input type="text" ng-model="COST_PACKAGE2">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">Cost Add On 2</label>
                                                <div class="col-sm-6">
                                                    <input type="text" ng-model="COST_ALACARTE2">
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
                                    <h3 class="title-hero">
                                    <div class="tl-label bs-label label-danger" style="margin-left:-20px;font-size: 100%">
                                    Estimated Price   
                                    </div>
                                    </h3>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                        <label class="col-sm-3 control-label">Installation</label>
                                        <div class="col-sm-6">
                                            <input type="text" ng-model="ESTIMATED_INSTALLATION" readonly="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Cost Basic Package / Basic</label>
                                        <div class="col-sm-6">
                                            <input type="text" ng-model="ESTIMATED_COST_PACKAGE" >
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Cost Add On / Alacarte</label>
                                        <div class="col-sm-6">
                                            <input type="text" ng-model="ESTIMATED_ALACARTE">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Offer / Promo</label>
                                        <div class="col-sm-6">
                                            <input type="text" ng-model="ESTIMATED_PROMO">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Total Estimated Costs</label>
                                        <div class="col-sm-6">
                                            <input type="text" value="" ng-model="TOTAL_ESTIMATED_COSTS"  value="{{TOTAL_ESTIMATED_COSTS | number}}">
                                        </div> 
                                    </div>          
                                       
                                    </div>
                                    
                                  
                                    
                                    

                                </div>      
                        </div>
                    </div>
                </div>

                

               

                <br>
                <br>
                <br>
                <br>
    </div>                        

    



    <div class="tab-pane fade" id="tab-example-3" ng-hide="payment" ng-show="sales_category=='1' || sales_category=='2' || sales_category=='3' || sales_category=='4' || sales_category=='5' || sales_category=='8' || sales_category=='9' ">
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
                        <div class="form-group">
                            <label class="col-sm-3 control-label"><label class="font-red">*</label>Payment Method</label>
                            <div class="col-sm-6" >
                                <select ng-model="paymentm" name="PAYMENTMETHOD" class=" custom-select" id="payment">
                                 <!-- <select  name="CATEGORY" class="custom-select"> -->
                                 <!-- <option value="">Select</option> -->
                                 <option value="KREDIT">Credit Card</option>
                                 <option value="AUTODEBET">Autodebet Rekening</option>
                                 <option value="ATM">ATM</option>
                                 <option value="CASH">Cash</option>
                                  
                        </select>
                            </div>
                            
                        </div>
                        <div class="form-group" ng-hide="cardtype" ng-show="paymentm=='KREDIT'">
                            <label class="col-sm-3 control-label"><label class="font-red">*</label>Card Type</label>
                            <div class="col-sm-6">
                                <select ng-model="cardty" name="cardt" class="" id="cardt">
                                <!--  <option value="">Select</option> -->
                                <!--  <option value="saving">Saving</option> -->
                                 <option value="AmEx">American Express</option>
                                 <option value="VISA">VISA</option>
                                 <option value="MASTERCARD">Master Card</option>
                                 <option value="84">BCA Card</option>
                                 <option value="JCB">JCB</option>
                        </select>
                            </div>
                        </div>
                          <div class="form-group" ng-hide="cardn || paymentm=='AUTODEBET' || paymentm=='ATM' || paymentm=='CASH' " ng-show="cardty">
                            <label class="col-sm-3 control-label"><label class="font-red">*</label>Card Number</label>
                            <div class="col-sm-6">
                                <input id="payment_cardnumber" name="payment_cardnumber" ng-change="validExpDate()" ng-model="PAYMENT_CARDNUMBER" type="text" placeholder="Card Number"   class="form-control">
                                <img ng-hide="ok" ng-show="PAYMENT_CARDNUMBER" id="img_true2" src="<?=base_url();?>assets/images/ok.png"> 
                                <img ng-hide="falsee" ng-show="PAYMENT_CARDNUMBER" id="img_false2" src="<?=base_url();?>assets/images/false.png">
                            </div>
                        </div>
                        <div class="form-group" ng-hide="bankname" ng-show="paymentm=='AUTODEBET'">
                            <label class="col-sm-3 control-label"><label class="font-red">*</label>Bank Direct Debit</label>
                            <div class="col-sm-6">
                            
                            <select ng-options="x.DIRECT_DEBIT_ID as x.DIRECT_DEBIT_DESCRIPTION for x in direct_debit" ng-model="PAYMENT_DIRECT_DEBIT" class="required" ></select>
                                
                            </div>
                        </div>
                        <div class="form-group" ng-hide="bankname" ng-show="paymentm=='AUTODEBET' || paymentm=='ATM'">
                            <label class="col-sm-3 control-label"><label class="font-red">*</label>Bank Name</label>
                            <div class="col-sm-6">
                                <input id="payment_bankname" name="payment_bankname" ng-model="PAYMENT_BANKNAME" type="text" placeholder=" Field"  class="form-control">
                            </div>
                        </div>
                        <div class="form-group" ng-hide="bankakun" ng-show="paymentm=='AUTODEBET' || paymentm=='ATM' ">
                            <label class="col-sm-3 control-label"><label class="font-red">*</label>Bank Account Number</label>
                            <div class="col-sm-6">
                                <input id="payment_bankaccountnumber" name="payment_bankaccountnumber" ng-model="PAYMENT_BANKACCOUNTNUMBER" type="text" placeholder="Bank Account Number"  class="form-control">
                            </div>
                        </div>
                        <div class="form-group" ng-hide="nameuser" ng-show="paymentm=='KREDIT'" >
                            <label class="col-sm-3 control-label"><label class="font-red">*</label>Card Holder Name</label>
                            <div class="col-sm-6">
                                <input id="PAYMENT_CARDHOLDERNAME" name="PAYMENT_CARDHOLDERNAME" ng-model="PAYMENT_CARDHOLDERNAME" type="text" placeholder="Name of User Bank"  class="form-control">
                            </div>
                        </div>
                        </div>
                        <div class="col-md-6">
                    <h3 class="title-hero">
                    
                    </h3><br>
                         <div class="form-group" ng-show="paymentm=='KREDIT'" ng-hide="expired">
                            <label for="" class="col-sm-3 control-label"><label class="font-red">*</label>Card Expired Date</label>
                            <div class="col-sm-6">
                                <div class="col-sm-3">
                                    <input id="bln_exp_date" name="bln_exp_date" ng-change="validExpDate()" ng-model="BLN_EXP_DATE" type="text" placeholder="MM"   class="form-control">
                                </div>
                                <label for="" class="col-sm-2 control-label">/</label>
                                <div class="col-sm-4">
                                    <input id="thn_exp_date" name="thn_exp_date" ng-change="validExpDate()" ng-model="THN_EXP_DATE" type="text" placeholder="YYYY"   class="form-control">
                                </div>
                            
                                <!-- <div class="input-prepend input-group">
                                    <span class="add-on input-group-addon">
                                        <i class="glyph-icon icon-calendar"></i>
                                    </span>
                                    <input type="text" class="bootstrap-datepicker form-control" placeholder="Card Expired Date" id="PAYMENT_CARD_EXPIRED" ng-model="PAYMENT_CARD_EXPIRED" data-date-format="mm/dd/yyyy">
                                </div> -->
                                <!-- <select>
                                    <option value="01">01</option>
                                    <option value="02">02</option>
                                    <option value="03">03</option>
                                    <option value="04">04</option>
                                    <option value="05">05</option>
                                    <option value="06">06</option>
                                    <option value="07">07</option>
                                    <option value="08">08</option>
                                    <option value="09">09</option>
                                    <option value="10">10</option>
                                    <option value="11">11</option>
                                    <option value="12">12</option>   
                                </select>
                                <select>
                                    <option value="2017">2017</option>
                                    <option value="2018">2018</option>
                                    <option value="2019">2019</option>
                                    <option value="2020">2020</option>
                                </select> -->
                            </div>
                        </div>
                        
                         <div class="form-group">
                            <label for="" class="col-sm-3 control-label"><label class="font-red">*</label>Payment Date</label>
                            <div class="col-sm-6">
                                <div class="input-prepend input-group">
                                    <span class="add-on input-group-addon">
                                        <i class="glyph-icon icon-calendar"></i>
                                    </span>
                                    <input type="text" class="bootstrap-datepicker form-control" placeholder="Payment Date" id="PAYMENT_DATE" ng-model="PAYMENT_DATE" data-date-format="mm/dd/yyyy">
                                </div>
                            </div>
                        </div>
                          <div class="form-group">
                            <label class="col-sm-3 control-label">Remark</label>
                            <div class="col-sm-6">
                                <textarea  placeholder="" ng-model="PAYMENT_REMARK"  class="form-control"> </textarea>
                            </div>
                        </div>
                          <div class="form-group">
                            <label class="col-sm-3 control-label"><label class="font-red">*</label>Total Payment</label>
                            <div class="col-sm-6">
                                <input type="text" placeholder=" Field"  class="form-control" value="{{TOTAL_ESTIMATED_COSTS}}">
                            </div>
                        </div>
                       
                        
                       
                    </div>
                    
                       
                    </div>
                    

                    </div>
                    </div>
                    </div>
                    </div>
                
                  
    
    <div class="tab-pane fade" id="tab-example-4" ng-hide="pickup" ng-show="sales_category=='1' || sales_category=='2' || sales_category=='3' || sales_category=='4' || sales_category=='5' || sales_category=='8' || sales_category=='9' ">
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
                          <input ng-model="cekktp" id="cek_ktp" type="checkbox" value="">
                          
                          <label for="boxed-layout">KTP</label>
                          <!-- <input type="text" ng-model="KET_KTP" visibility="hidden" ng-show="cekktp" class="form-control" id="ktp" placeholder="" > -->
                      </li>
                      <li>
                          <input id="cek_card" ng-model="cc" input type="checkbox" value="">
                         
                          <!-- <label for="boxed-layout">CREDIT CARD</label> -->
                          <!-- <input type="text" ng-model="KET_CC" class="form-control" id="card" placeholder="" visibility="hidden" ng-show="cc"> -->
                      </li>
                      <li>
                         <input input id="cek_dana" ng-model="dana" type="checkbox" value="">
                         
                          <label for="boxed-layout">PICKUP DANA</label>
                          <!-- <input type="text" ng-model="KET_DANA" class="form-control" id="dana" placeholder="" visibility="hidden" ng-show="dana"> -->
                      </li>
                       <li>
                          <input input id="cek_kuasa" type="checkbox" ng-model="sk" value="">
                          
                          <label for="boxed-layout">SURAT KUASA</label>
                          <!-- <input type="text" ng-model="KET_KUASA" class="form-control" id="kuasa" placeholder="" visibility="hidden" ng-show="sk"> -->
                      </li>
                       <li>
                          <input input id="cek_ttd" type="checkbox" ng-model="ttd" value="">
                          
                          <label for="boxed-layout">TTD</label>
                          <!-- <input type="text" ng-model="KET_TTD" class="form-control" id="ttd" placeholder="" visibility="hidden" ng-show="ttd"> -->
                      </li>
                       <li>
                          <input input id="cek_sewa" type="checkbox" value="" ng-model="sw">
                          <label for="boxed-layout">SURAT PERNYATAAN TINGGAL DI RUMAH SEWA</label>
                          <!-- <input type="text" ng-model="KET_PERNYATAAN" class="form-control" id="sewa" placeholder="" visibility="hidden" ng-show="sw"> -->
                      </li>
                    </ul>
                     <br>
                    <br>
                    <br>
                    
                </div>
                
                <br>
                <br>
                <!-- FILE UPLOAD CLASS -->                
                    <div class="panel" ng-show="fileuploadshow">
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
                                                <th>File</th>                                                
                                                <th>Preview</th>                                                
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <tr ng-repeat="value_upload in upload_data_view">
                                            <td>{{value_upload.FILE_NAME}}</td>
                                            <td><a href="">{{value_upload.CATEGORY}}</a></td>
                                            <!-- <td ng-click="alert(value_upload)"><a href=""><?=base_url();?>{{value_upload.p_file_path}}</a></td> -->
                                            <!-- <td ng-click="alert(value_upload)"><a href="">str_replace("opt/lampp/htdocs/valsys",<?=base_url();?>,value_upload.p_file_path)</a></td> -->
                                            <!-- <td><img src="/opt/lampp/htdocs/valsys/user_uploads/2017/03/11440.jpg"> </td> -->
                                            <td><img id="myImg" src="<?=base_url();?>{{value_upload.FILE_PATH}}" width=100px height=50px data-toggle="modal" data-target="#ImageModal" ng-click="alert(value_upload)"></td> 
                                            <td><iframe id="viewer" frameborder="0" scrolling="no" width="100px" height="50px" ng-click="preview_pdf(value_upload)" src="{{'<?=base_url();?>'+value_upload.FILE_PATH}}"><a href="" data-target="#PDFModal"></a></iframe></td>  
                                            <!-- <td>{{'<?=base_url();?>'}}{{value_upload.FILE_PATH}}</td> -->
                                            <td><button type="button" ng-click="preview_pdf(value_upload)" data-toggle="modal" class="btn btn-round btn-black-opacity" data-target="#PDFModal"><i class="glyph-icon icon-eye"></i></button></td> 
                                            <td><button type="button" ng-click="delRow(value_upload)" class="btn all-btn btn-round btn-danger" title="Delete"><i class="glyph-icon icon-elusive-cancel"></i></button></td>
                                        </tr>
                                    </tbody>
                                    </table>
                                    <!-- <iframe id="viewer" frameborder="0" scrolling="no" width="400" height="600" src="{{abc}}"></iframe> -->
                                        <!-- Trigger the modal with a button -->
                                        <button type="button" class="btn btn-info btn-primary" data-toggle="modal" data-target="#FileUploadModal">Upload</button>
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
                                            margin: auto;" width="800px" height="600px">
                                          <div id="caption"></div>
                                        </div>
                                        <!-- END OF MODAL -->
                                        <!-- BEGINING MODAL -->
                                        <!-- The Modal -->
                                        <div id="PDFModal" class="modal">
                                          <span class="close">&times;</span>
                                          <iframe id="viewer" frameborder="0" scrolling="no" style=" position: absolute;
                                            top: 0; bottom:0; left: 0; right:0;
                                            margin: auto;" width="800px" height="600px" src="{{abc}}"></iframe>
                                          <!-- <img src="{{abc}}" class="modal-content" style=" position: absolute;
                                            top: 0; bottom:0; left: 0; right:0;
                                            margin: auto;" width="800px" height="600px"> -->
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

    <div class="tab-pane fade" id="tab-example-7" ng-hide="pickup" ng-show="sales_category=='1' || sales_category=='2' || sales_category=='3' || sales_category=='4' || sales_category=='5' || sales_category=='8' || sales_category=='9' ">
        <div class="panel">
        <div class="panel-body">
        
        <div class="example-box-wrapper">
                <div class="row">
                    <div class="col-md-6">
                    <h3 class="title-hero">
                    <div class="tl-label bs-label label-info" style="margin-left:-20px;font-size: 100%">
                    Koordinat
                    </div>
                    </h3>
                        <div class="form-group">
                            <label class="col-sm-3 control-label"><label class="font-red"></label>Latitude</label>
                            <div class="col-sm-6">
                                <input type="text" placeholder="Latitude" class="form-control" ng-model="LATITUDE">
                            </div>
                        </div>
              
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Longitude</label>
                        <div class="col-sm-6">
                            <input type="text" placeholder="Longitude" class="form-control" ng-model="LONGITUDE">
                        </div>
                    </div>
                    </div>
                    <br/><br/>
                    
                    
                </div>
                
                  
        </div>
        <div class="bg-default content-box text-center pad20A mrg25T">
                    <!-- <button type="button" name="sub" id="saveBtn" ng-show="BUTTON_SAVE_SHOW"  ng-click="validation_check_form()"  class="btn btn-lg btn-primary">Save</button>
                    <button type="button" id="button_update" ng-model="BUTTON_UPDATE" ng-show="BUTTON_UPDATE_SHOW" ng-click="update_form_submit(pnumb)" data-loading-text="Loading..." class="btn loading-button btn-info">Update</button> -->
                   <!--  <button name="sub" id="saveBtn"  class="btn btn-lg btn-primary">Save</button> -->
                   <!-- <input type="button" onclick="coba();" value="Submit"/> -->
        </div>
      
      </div>
      </div> 
     
                        
    </div>

    <div class="tab-pane fade" id="tab-example-9" >
        <div class="panel">
        <div class="panel-body">
        
            <div class="example-box-wrapper">
                    <div class="row">
                        <div class="col-md-6">
                            <h3 class="title-hero">
                            <div class="tl-label bs-label label-info" style="margin-left:-20px;font-size: 100%">
                            Log Notes
                            </div>
                            </h3>
                            <table id="datatable-row-highlight12" class="table table-striped table-bordered" cellspacing="0" width="100%">
                            <thead>
                            <tr>
                                <th>Prospect Number</th>
                                <th>LOG NOTES STATUS DESCRIPTION</th>
                                <th>Insert Date</th>
                                <th>Insert By</th>
                            </tr>
                            </thead>


                            <tbody>
                                <tr style="cursor: pointer;"onmouseover="this.style.background='gray';" onmouseout="this.style.background='white';" ng-repeat="x in log_notes" >
                                                                                <td>{{x.LOG_NOTES_STATUS_PROSPECT_NBR}}</td>
                                                                                <td>{{x.LOG_NOTES_STATUS_DESCRIPTION}}</td>
                                                                                <td>{{x.LOG_NOTES_STATUS_INSERT_DATE}}</td>
                                                                                <td>{{x.LOG_NOTES_STATUS_INSERT_BY}}</td>
                                </tr>

                           



                            </tbody>
                            </table>
                        
                        
                        </div>
                      
            </div>

            
        </div>
        </div> 
     
                        
    </div>
    </div>
   
    <!-- <div class="tab-pane fade" id="tab-example-5" ng-hide="pickup" ng-show="salesc=='dtd' || salesc=='dtdbb' || salesc=='ms' || salesc=='scc' || salesc=='sgs' || salesc=='dealer' || salesc=='df'"> -->
    <div class="tab-pane fade" id="tab-example-5" ng-show="sales_category=='3' || sales_category=='8' || sales_category=='9'">
    
    <div class="panel">
      <div class="panel-body">
        
        <div class="example-box-wrapper">    <!-------------------------------------ENTRY HARDWARE ------------------------------------------------->
                    <h3 class="title-hero">
                    <div class="tl-label bs-label label-black" style="margin-left:-20px;font-size: 100%">
                            Entry Hardware
                    </div>
                    </h3>  
                      <div class="panel">
                             <div class="panel-body">
                                <h3 class="title-hero">
                                    <div class="tl-label bs-label label-warning" style="margin-bottom:40px;font-size: 100%"> List Hardware Prospect</div>
                                </h3><br> 
                                
                                    <div class="form-group">
                                         
                                            <div class="col-sm-6"><b>Package Type</b> 
                                                <select name="combo_template" id="combo_template" class="custom-select">Package Type
                                                <!--  <option  value="0">Single HW</option>
                                                  <option  value="1">Multi 1</option> -->
                                                </select> 

                                            <br>
                                                 <input type="text" class="hide" id="serial_number_descr" placeholder="" >
                                                                                                              <input type="text" class="hide" id="msg_result" placeholder="" >
                                                                                                              <input type="text" class="hide" id="msg_result_hide" placeholder="" > 
                                                                                                
                                            </div>
                                            <br> 
                                
                             
                                <button class="btn  btn-info btn-xs" id="bt_save_hw">
                                        <i class="glyph-icon icon-elusive-plus-circled"  > </i>&nbsp; Save                                   
                                </button> <br>                          
                              
                                            <table id="datatable_entryhw" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                                    <thead>
                                                    <tr>
                                                        <th>No.</th> 
                                                        <th>ITEM_DESCR</th>
                                                        <th>SERIAL_NUMBER</th> 
                                                        <th class='hide'>ITEM_ID</th>
                                                        <th >RESULT</th>
                                                    </tr>
                                                    </thead> 
                                            <tbody>   
                                            </tbody>
                                            </table>  
                         
                        </div>
                    </div>
                    </div>
                    
                        <!--
                          <div class="form-group">
                            <label class="col-sm-3 control-label"><label class="font-red"></label>VC</label>
                            <div class="col-sm-6">
                                <input name="vc" ng-model="VC" type="text" placeholder="vc" id="vc"  class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label"><label class="font-red"></label>DSD</label>
                            <div class="col-sm-6">
                                <input  name="dsd" ng-model="DSD" type="text" placeholder="dsd" id="dsd"  class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label"><label class="font-red"></label>LNB</label>
                            <div class="col-sm-6">
                                <input name="lnb" ng-model="LNB" type="text" placeholder="lnb" id="lnb"  class="form-control">
                            </div>
                        </div>
                        
                       
                        
                     <div class="col-md-6">
                    <h3 class="title-hero">
                    
                    </h3><br>
                         <div class="form-group">
                            <label class="col-sm-3 control-label"><label class="font-red"></label>Antenna</label>
                            <div class="col-sm-6">
                                <input name="antenna" ng-model="ANTENNA" type="text" placeholder="antenna" id="antenna"  class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label"><label class="font-red"></label>Router</label>
                            <div class="col-sm-6">
                                <input name="router" ng-model="ROUTER" type="text" placeholder="router" id="router"  class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label"><label class="font-red"></label>Simcard</label>
                            <div class="col-sm-6">
                                <input name="simcard" ng-model="SIMCARD" type="text" placeholder="simcard" id="simcard"  class="form-control">
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
                                <input type="text"    id="appid1" placeholder="Application ID"  class="form-control">
                            </div>
                        </div>
                          <div class="form-group">
                            <label class="col-sm-3 control-label"> Propsect Number</label>
                            <div class="col-sm-6" size="40">
                                <input type="text"    id="pros_num" placeholder="PROSPECT"  class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label"> VC</label>
                            <div class="col-sm-6" size="40">
                                <input type="text"    id="vc" placeholder="VC"  class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Decoder</label>
                            <div class="col-sm-6">
                                <input id="decoder" type="text"  placeholder="Decoder"  class="form-control">
                            </div>
                        </div> 
                         <div class="form-group">
                            <label class="col-sm-3 control-label">LNB</label>
                            <div class="col-sm-6">
                                <input id="lnb" type="text"  placeholder="LNB"  class="form-control">
                            </div>
                        </div>
                         <div class="form-group">
                            <label class="col-sm-3 control-label">Antenna</label>
                            <div class="col-sm-6">
                                <input id="antenna" type="text"  placeholder="Antenna"  class="form-control">
                            </div>
                        </div>
                         <div class="form-group">
                            <label class="col-sm-3 control-label">Router</label>
                            <div class="col-sm-6">
                                <input id="router" type="text"  placeholder="Router"  class="form-control">
                            </div>
                        </div>
                         <div class="form-group">
                            <label class="col-sm-3 control-label">SIM Card</label>
                            <div class="col-sm-6">
                                <input id="simcard" type="text"  placeholder="SIM Card"  class="form-control">
                            </div>
                        </div>
                      <div class="hide">
                                            <label class="col-sm-3 control-label">Action</label>
                                            <div class="col-sm-6" size="40">
                                                <input type="text"    id="oper" placeholder="Oper"  class="form-control">
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
<!--END DIALOG ADD MODULES


<!-- Bootstrap Datepicker -->
<!--<link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/widgets/datepicker/datepicker.css">-->
<script type="text/javascript" src="<?=base_url();?>assets/widgets/datepicker/datepicker.js"></script>
<script type="text/javascript">
    /* Datepicker bootstrap */
    
    /*$(function() { "use strict";
        $('.bootstrap-datepicker').datepicker({
            format: 'dd-M-yy'
        });
        
 
    });*/
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

    /*$(function() { "use strict";
        $('.timepicker-example').timepicker(); 
        
    });*/
</script>



<script src="<?=base_url();?>assets/select2-master/dist/js/select2.min.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
    
    init(); 
    
    function init(){
        
            $.fn.editable.defaults.mode = 'inline';
        
        $('#combo_template').on('change', function() { 
                       var id_combo = this.value ;
                      // alert(id_combo);
                       getDataHW(id_combo);
                        $("#hidden_id").val(id_combo);                    
        });
                
        
            getTemplate();
    
    } 
        
        //trigger button grid entry hw
    
      
    });
</script>
<script>   
    $('#formm').on('keyup keypress', function(e) {
        var keyCode = e.keyCode || e.which;
            if (keyCode === 13) { 
            e.preventDefault();
            return false;
    }
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
            
            
    /*       $("#bt_add_hw").button().click(function() { 
        PopUpDialog(); 
        $("#oper").val('add');
  });//   */
  
    $("#bt_search_prospect").button().click(function() { 
        var prospect_nbr = $("#pnumber").val();
        getSearchHW(prospect_nbr);
  });//  
  
  //alert('ok');
  
  
   $("#bt_save_hw").button().click(function() {
             
                    var myRows = [];
                    var headersText = [];
                    var $headers = $("#datatable_entryhw th");
                    var arrItemID = "";
                    var arrSerial = "";
                    var iscorrect = true;
                    // Loop through grabbing everything
                    var $rows = $("#datatable_entryhw tr").each(function(index) {
                      $cells = $(this).find("td");
                      myRows[index] = {};

                      $cells.each(function(cellIndex) {
                        // Set the header text
                        if(headersText[cellIndex] === undefined) {
                          headersText[cellIndex] = $($headers[cellIndex]).text();
                        }
                        // Update the row object with the header/cell combo
                        myRows[index][headersText[cellIndex]] = $(this).text();
                        if ( headersText[cellIndex] =='ITEM_ID') {
                            arrItemID = arrItemID+ $(this).text() +";";
                        }
                        if ( headersText[cellIndex] =='SERIAL_NUMBER') {
                            arrSerial = arrSerial+ $(this).text() +";";
                        }
                        if ( headersText[cellIndex] =='RESULT') {
                            if ( $(this).text() != 'OK' ) {
                                    iscorrect = false;  
                            }
                        }                   
                      });    
                    });
                    
                    arrItemID = arrItemID.substring(0, (arrItemID.length) - 1);
                    arrSerial = arrSerial.substring(0, (arrSerial.length) - 1);
                    var pnumber         =  $("#pnumber").val();
                    var sales_code  = $("#sales_code").val();
                    
                    //console.log(arrItemID);
//console.log(arrSerial);
                            //  function getDataHW(id_combo){ //GET DATA 
                    if (pnumber == '' ) {
                        alert ('Prospect Number must be filled');
                    } else if (!iscorrect) {
                        alert ('Cannot save, Hw is NOT STOCK ');
                    } else {
                        var jparams = "pnumber="+pnumber+"&item_id="+arrItemID+"&serial_number="+arrSerial+"&sales_code="+sales_code; 
                            $.ajax({
                                      type      : 'POST',
                                      url       :'<?=base_url();?>entryp/Entryp/SaveEntryHW',
                                      data      : jparams,
                                      dataType: 'json',
                                      success   :function(result){ 
                                    //  console.log(result);
                                           if (result.status==0){
                                          alert('Error');
                                          }else{ 
                                             alert('Save Success'); 
                                         } 
                                    }   
                               });
                    }               
            });
            
          
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
      
      // The credit card is in the  format.
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
    
    function checkDuplicate(rownumber, objname,strvalue) {
        
                var arrSerial = [];
                var headersText = [];
                var $headers = $(objname +" th");
                var isduplicate = false;
                    $(objname +" tr").each(function(index) {
                        
                      $cells = $(this).find("td");
                      $cells.each(function(cellIndex) {
                        // Set the header text
                        if(headersText[cellIndex] === undefined) {
                          headersText[cellIndex] = $($headers[cellIndex]).text();
                        }
                        // Update the row object with the header/cell combo
                        if ( headersText[cellIndex] =='SERIAL_NUMBER') {
                                
                            if ( strvalue == $(this).text() ) {
                                //console.log(index, rownumber);
                                isduplicate = true;
                            }
                        }
                        
                      });    
                    });         
                    return isduplicate;
                
            }
    
    
     function getDataHW(id_combo){ //GET DATA HW
        var jparams = "id_combo="+id_combo;
        $.ajax({
             type     : 'POST',
            url      :'<?=base_url();?>entryp/Entryp/getDataHW2',
             data     : jparams,
             dataType : 'json',
            success  : function(result){
            //console.log(result);
                    //if (result != 0){
                          var xhtm="";
                          var tot = 0;
                          $.each(result.data, function(i,item){
                            //console.log(item.ITEM_DESCR);
                            tot = tot+1;
                                xhtm += "<tr>";
                                xhtm += "<td>"+tot +"</td>";                                
                                xhtm += "<td>"+item.ITEM_DESCR +"</td>";
                                xhtm += "<td><span class='edit_serial'>"+item.ITEM_DESCR +"</span></td>";
                                xhtm += "<td class ='hide'>"+item.ITEM_ID+"</td>";  
                                xhtm += "<td id='result_hw' >result</td>";  
                                xhtm += "</tr>";    
                          });
                          //alert(tot);
                            $('#datatable_entryhw tbody').html(xhtm);    
                            $('.edit_serial').editable({ 
                                  display: function(value) {
                                    $(this).text(value + '');                    
                                } ,   
                                validate: function(value) {
                            //console.log($(this).closest('td').next('td').text());
                                        //                      console.log($(this).text());

                                //  var table = $('#datatable_entryhw').DataTable();
                                //  var row = table.row(3);
                                    if($.trim(value) == '') {
                                        return 'Serial Number must be Filled';
                                    }else{
                                            //var pnumber       =  $("#pnumber").val();
                                            var sales_code  = $("#sales_code").val();
                                            var objresult           =   $(this).closest('td').next('td').next('td');
                                            var item_id         =       $(this).closest('td').next('td').text();
                                            var rownumber   =       $(this).closest('td').prev('td').prev('td').text();
                                            
                                            var serial_number = $.trim(value);
                                            
                                            var isduplicate = checkDuplicate(rownumber, '#datatable_entryhw', serial_number);
                                            
                                            
                                              
                                             var jparams = "item_id="+item_id+"&serial_number="+serial_number+"&sales_code="+sales_code; 
                                                        //  console.log(jparams);
                                                if  (isduplicate==true) {
                                                //  console.log(isduplicate);
                                                    objresult.html("<strong><font color=red>DUPLICATE</font></strong>");
                                                } else {
                                                    
                                                        $.ajax({
                                                          type      : 'POST',
                                                          url:'<?=base_url();?>entryp/Entryp/checkHW',
                                                          data      : jparams,
                                                          dataType  : 'json',
                                                          success   :function(result){ 
                                                                if(result.msg !='OK' ){
                                                                    // return 'Serial Number not in Stock';
                                                                    // alert('a');
                                                                    //var aa = result.msg;//msg_result
                                                                    var res  = $("#msg_result").val(result.msg);
                                                                       $("#msg_result_hide").val(result.msg);
                                                                     
                                                                //   var msg_res =  $("#msg_result").val();
                                                                    // var oo = $(this).closest('td').next('td').text(msg_res);
                                                                    // console.log(oo);
                                                                }else if(result.msg =='OK' ){
                                                                     $("#msg_result").val('OK'); 
                                                                     $("#msg_result_hide").val(''); 
                                                                     
                                                                }   
                                                                objresult.html("<strong><font color=red>"+result.msg+"</font></strong>");
                                                          } ,
                                                        failure:function(){
                                                                AlertDialog('Error',"Please try again in a moment");
                                                            }                                 
                                                          
                                                    });     

                                                }    
                                    
                                    }                                   
                                }
                            }); 
                          return false;  
                    }
                }); 
        }
        
        function getSearchHW(prospect_nbr){ //datatable_group
        
        var jparams = "prospect_nbr="+prospect_nbr;
        
        $.ajax({
             type     : 'POST',
             url      :'<?=base_url();?>entryp/Entryp/getSearchHW',
             data     : jparams,
             dataType : 'json',
            success  : function(result){
                    if (result){//result.status==1
                          var xhtm="";
                          var tot = 0;
                          $.each(result.data, function(i,item){
                            tot = tot+1;
                            xhtm += "<tr>";
                            xhtm += "<td>"+tot+"</td>";         
                            xhtm += "<td>"+item.ITEM_DESCR+"</td>";         
                            xhtm += "<td>"+item.SERIAL_NUMBER+"</td>";      
                            xhtm += "<td class ='hide'>"+item.ITEM_ID+"</td>";  
                            xhtm += "<td id='result_hw' >OK</td>";                  
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
                       }else {//else if(result.status==0)
                          $('#datatable_entryhw tbody').html("<center><strong>Data tidak ditemukan</strong></center>");
                          $body.removeClass("loading"); 
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
       
        function getTemplate()
       {            
          $.ajax({ 
             type: 'POST', 
            url:'<?=base_url();?>entryp/Entryp/getTemplate',
            data: '',
            dataType: 'json', 
            async: false,
             success: function(result) {
                      $("#combo_template").html(result.html);   
                      return false;                                           
             },
                  error: function(x) { 
                  }
          });
       }
    
    
</script>



<!-- JAVASCRIPT FOR ANGULARJS ALERT NOTIFICATION -->
<script type="text/javascript">
var app = angular.module('valsys', ['angular-loading-bar', 'ngAnimate']);

var app = angular.module('valsys', []);





function ValidateHW(){

                    var myRows = [];
                    var headersText = [];
                    var $headers = $("#datatable_entryhw th");
                    var arrItemID = "";
                    var arrSerial = "";
                    var iscorrect = true;
                    // Loop through grabbing everything
                    var $rows = $("#datatable_entryhw tr").each(function(index) {
                      $cells = $(this).find("td");
                      myRows[index] = {};

                      $cells.each(function(cellIndex) {
                        // Set the header text
                        if(headersText[cellIndex] === undefined) {
                          headersText[cellIndex] = $($headers[cellIndex]).text();
                        }
                        // Update the row object with the header/cell combo
                        myRows[index][headersText[cellIndex]] = $(this).text();
                        if ( headersText[cellIndex] =='ITEM_ID') {
                            arrItemID = arrItemID+ $(this).text() +";";
                        }
                        if ( headersText[cellIndex] =='SERIAL_NUMBER') {
                            arrSerial = arrSerial+ $(this).text() +";";
                        }
                        if ( headersText[cellIndex] =='RESULT') {
                            if ( $(this).text() != 'OK' ) {
                                    iscorrect = false;  
                            }
                        }                   
                      });    
                    });
                    
                    arrItemID = arrItemID.substring(0, (arrItemID.length) - 1);
                    arrSerial = arrSerial.substring(0, (arrSerial.length) - 1);
                    var pnumber         =  $("#pnumber").val();
                    var sales_code  = $("#sales_code").val();
                     
                    if (pnumber == '' ) {
                        alert ('Prospect Number must be filled');
                    } else if (!iscorrect) {
                        alert ('Cannot save, Hw is NOT STOCK ');
                    } else {
                        var jparams = "pnumber="+pnumber+"&item_id="+arrItemID+"&serial_number="+arrSerial+"&sales_code="+sales_code; 
                            $.ajax({
                                      type      : 'POST',
                                      url       :'<?=base_url();?>entryp/Entryp3/SaveEntryHW',
                                      data      : jparams,
                                      dataType: 'json',
                                      success   :function(result){ 
                                    //  console.log(result);
                                           if (result.status==0){
                                          alert('Error');
                                          }else{ 
                                             alert('Save Success'); 
                                         } 
                                    }   
                               });
                    }
}


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
        var fd  = new FormData();
        fd.append('file', file);
        fd.append('data', data);
        $http.post(uploadUrl, fd, {
            transformRequest: angular.identity,
            headers: {'Content-Type': undefined}
        })
        .success(function(data){
            alert('File Successfully Uploaded');
            console.log("text :"+data);
            def.resolve(data);
        })
        .error(function(){
           // console.log('BELUM');
            def.reject("Failed to upload");
        });
        return def.promise;
    }
}]);
app.controller('myCtrl', function($scope,$http,fileUpload) {

    $('#expired_date').bsdatepicker();
    
    /*$('#INSTALLATION_DATE').bsdatepicker();*/
    
    var date = new Date();
    var today = new Date(date.getFullYear(), date.getMonth(), date.getDate()); 
    var yesterday = new Date(date.getFullYear(), date.getMonth(), date.getDate()-1);
    var tomorrow = new Date(date.getFullYear(), date.getMonth(), date.getDate()+1);

    $('#DATE_OF_BIRTH').bsdatepicker({ 
                    onRender: function(date) {
                            return date.valueOf() > yesterday.valueOf() ? 'disabled' : '';       
    }});

    $('#INSTALLATION_DATE').bsdatepicker({ 
                    onRender: function(date) {
                            return date.valueOf() < today.valueOf() ? 'disabled' : '';       
        }});


    if(parseInt(date.getHours()) >= parseInt(17))
    {
                $('#verification_date').bsdatepicker({ 
                    onRender: function(date) {
                            return date.valueOf() < tomorrow.valueOf() ? 'disabled' : '';       
                }});
    }
    else
    {
        $('#verification_date').bsdatepicker({ 
                    onRender: function(date) {
                            return date.valueOf() < today.valueOf() ? 'disabled' : '';       
        }});   
    }
    

    $('#PAYMENT_CARD_EXPIRED').bsdatepicker();
    $('#PAYMENT_DATE').bsdatepicker();


    $('#INSTALLATION_TIME').timepicker({
        defaultTime: 'value',
        minuteStep: 1,
        disableFocus: true,
        template: 'dropdown',
        showMeridian:false
    });

    $('#CONFIRMATION_START_TIME').timepicker({
        defaultTime: 'value',
        minuteStep: 1,
        disableFocus: true,
        template: 'dropdown',
        showMeridian:false
    });
    $('#CONFIRMATION_END_TIME').timepicker({
        defaultTime: 'value',
        minuteStep: 1,
        disableFocus: true,
        template: 'dropdown',
        showMeridian:false
    });

    $scope.salutations = [
        {'id': '1', 'label': 'Mr'},
        {'id': '2', 'label': 'Mrs'},
        {'id': '3', 'label': 'Miss'},
        {'id': '4', 'label': 'Other'},
    ]
    $scope.SALUTATION = $scope.salutations[0];
    //hstatus
    $scope.units = [
        {'id': 'Pinjam Pakai', 'label': 'Pinjam Pakai'},
        {'id': 'Beli Putus', 'label': 'Beli Putus'},
       
    ]
    $scope.hstatus= $scope.units[0];
    //end of hardware status
    //prospectype
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
    //end of prospectype
    //
    $scope.idtype = [
        {'id': 'KTP', 'label': 'KTP'},
        {'id': 'Passport', 'label': 'Passport'},
        {'id': 'SIM', 'label': 'SIM'},
        
    ]
    $scope.country = [
        {'id': '1', 'label': 'Indonesia'},
        {'id': '2', 'label': 'Timor Leste'},
    ]
    $scope.billing_frequency_array = [
        {'id': '1', 'label': 'Monthly'},
        {'id': '4', 'label': 'Quarterly'},
        {'id': '6', 'label': 'Halfyearly'},
        {'id': '12', 'label': 'Yearly'}
    ]
    $scope.PAYMENT_PERIOD = $scope.billing_frequency_array[0];

    $scope.package_brand_array = [
        {'id': 'IVDGT', 'label': 'Indovision'},
        {'id': 'TOPTV', 'label': 'Top TV'},
        {'id': 'OKEVN', 'label': 'Oke Vision'}
        
    ]
    $scope.PACKAGE_BRAND = $scope.package_brand_array[0];

    $scope.package_status_array = [
        {'id': 'SINGLE', 'label': 'Single'},
        {'id': 'MULTI', 'label': 'Multi'}, 
    ]
    $scope.PACKAGE_STATUS = $scope.package_status_array[0];


    $scope.INPUTID= $scope.idtype[0];
    ////end of hardware status
    $scope.tabhw =true;
    $scope.expiredd =true;
    $scope.numberp =true;
    $scope.ktphide = true;
    $scope.tab = true;
    $scope.profile = true;
    $scope.package = true;
    $scope.payment = true;
    $scope.pickup = true;
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
   $scope.PriceDetailPackage1 = false;
   $scope.PriceDetailPackage2 = false;

   $scope.BUTTON_SAVE_SHOW = true;
   $scope.BUTTON_UPDATE_SHOW = false;

   $scope.fileuploadshow = false;
   $scope.ESTIMATED_INSTALLATION = 200000;
   $scope.ENTITY_ID = 0;

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

    //data profile
    $scope.ProspectDataProfile = [];
    $scope.AlacarteSelectedList = [];
    $scope.AlacarteSelectedList1 = [];
    $scope.AlacarteSelectedList2 = [];

    $scope.ESTIMATED_COST_PACKAGE = 0;


   $scope.alacartes_price = 0;
   $scope.alacartes_price1 = 0;
   $scope.alacartes_price2 = 0;

   

    /*$scope.TOTAL_ESTIMATED_COSTS = $scope.ESTIMATED_INSTALLATION + $scope.ESTIMATED_COST_PACKAGE + $scope.ESTIMATED_ALACARTE - $scope.ESTIMATED_PROMO;*/

    $scope.init_package = function()
    {
        $scope.PACKAGE_BRAND = '1';
        $scope.getMasterBasic($scope.PACKAGE_BRAND);
    }

    /*$scope.verificationtime_function = function()
    {
        
       
        //console.log($scope.verification_times);
    }*/

    $scope.validation_identity_types = function(identitytypes)
    {
        console.log(identitytypes);
        //ng-patt

    }

    $scope.seumurhidupchange = function()
    {
        //console.log($scope.seumur_hidup);
        var today = new Date();
        var dd = today.getDate();
        var mm = today.getMonth()+1;
        var yyyy = today.getFullYear();
        if(dd<10){
            dd='0'+dd;
        } 
        if(mm<10){
            mm='0'+mm;
        }
        var today = mm+'/'+dd+'/'+yyyy;
        
        if($scope.seumur_hidup == true)
        {
            $('#expired_date').bsdatepicker("update", '01/01/9999');
            $('#expired_date').val('01/01/9999');

        }
        else
        {
            $("#expired_date").bsdatepicker("update",today);
            $('#expired_date').val('');   
        }


    }

    
    $scope.delRow = function(el){
        if(confirm("Are you sure delete data?")){
             $body.addClass("loading");
         $http({
            method: 'POST',
            url: '<?=base_url();?>entryp/Entryp/deleteData',
            data: el,
          }).then(function(response){
            // $scope.locations.splice($scope.locations.indexOf(el), 1);
             alert("Delete Location Success");
             $scope.getUploadData();
              $body.removeClass("loading");
          });
        }
    }
    $scope.sgs_number = function(sgsnumber){
        
        $body.addClass("loading");
        $http.get("<?php echo site_url('entryp/Duplikasi_check/cek_sgs');?>", {params:{"param1": sgsnumber}}).success(function (data_sgs) { 
          
          var obj = JSON.parse(data_sgs);   
          console.log(obj);
          if(obj =="no"){
              $scope.sgsname =  ""; 
              alert('please check, data not found');
              $body.removeClass("loading");
            
          }else{
          // var obj = JSON.parse(data_sgs);           
            $scope.sgsname =  obj; 
            //console.log($scope.sgsname);
            $body.removeClass("loading");
          }
        });
    }

    //master different causes
    $scope.getMasterDifferentCauses = function()
    {
        $http({
            method: 'GET',
            url: '<?=base_url();?>entryp/Entryp/getMasterDifferentCauses',
        }).success(function (result) {
            $scope.different_causes = result;
        });
    }
    $scope.getMasterDifferentCauses();
    


    //master class id
    $scope.getMasterCustomerClass = function()
    {
        $http({
            method: 'GET',
            url: '<?=base_url();?>entryp/Entryp/getMasterCustomerClass',
        }).success(function (result) {
            $scope.customer_class = result;
        });
    }
    $scope.getMasterCustomerClass();

    $scope.getMasterVerificationTime = function()
    {
        $http({
            method: 'GET',
            url: '<?=base_url();?>entryp/Entryp/getMasterVerificationTime',
        }).success(function (result) {
            $scope.verification_times = result; 
            /*if(parseInt(date.getHours()) >= parseInt(17))
            {
                
            }
            else
            {
                //start for
                $scope.verification_times = [];
                $scope.verification_times.push(result[0]);
                for(i=1;i<result.length;i++)
                {
                    var verification = result[i].VERIFICATION_TIME_DESCR.split("-");
                    var ver = verification[0].split(":");
                    if(ver[0]<10){
                        ver[0]=  ver[0].replace("0", "");
                    }
                    else{
                        ver[0]=ver[0];
                    }
                    console.log(ver[0]);
                    
                    if(parseInt(date.getHours()) <= parseInt(ver[0]) )
                    {
                        console.log(result[i]);
                        $scope.verification_times.push(result[i]);            
                    }
                        
                }   
            }*/   
            
            //end for
            //console.log($scope.verification_times);


        });   
    }
    $scope.getMasterVerificationTime();

    

    //master direct debit
    $scope.getMasterDirectDebit = function()
    {
        $http({
            method: 'GET',
            url: '<?=base_url();?>entryp/Entryp/getMasterDirectDebit',
        }).success(function (result) {
            $scope.direct_debit = result;
            //$scope.promotions  = result;
            // console.log($scope.promotions);
        });
    }
    $scope.getMasterDirectDebit();

    //master promo
    $scope.getMasterPromo = function()
    {
        $http({
            method: 'GET',
            // url: 'entryp/Entryp5/getMasterPromo',
            url: '<?=base_url();?>entryp/Entryp/getMasterPromo',
            // url: "<?php echo site_url('entryp/Entryp5/getMasterPromo');?>",
        }).success(function (result) {
            $scope.promotions  = result;
            // console.log($scope.promotions);
        });
    }
    $scope.getMasterPromo();

    $scope.getMasterBranch = function()
    {
        $http({
            method: 'GET',
            url: '<?=base_url();?>entryp/Entryp/getMasterBranch',
        }).success(function (result) {
            $scope.branch  = result;
            
        });
    }
    $scope.getMasterBranch();

    //master brand
    $scope.getMasterBrand = function()
    {
        $http({
            method: 'GET',
            url: '<?=base_url();?>entryp/Entryp/getMasterBrand',
        }).success(function (result) {
            $scope.brand  = result;
            
        });
    }
    $scope.getMasterBrand();

    $scope.getMasterLogNotes = function(prospect_number)
    {
        $http({
            method: 'GET',
            url: '<?=base_url();?>entryp/Entryp/getMasterLogNotes?prospectNumber='+prospect_number}).success(function (result) {
                $scope.log_notes  = result;
                
        });
    }


    /*$scope.Initialitation = function()
    {
        $scope.PACKAGE_BRAND = $scope.brand[0];
    }*/


    //identity type
    $scope.getMasterIdentityType = function()
    {
        $http({
            method: 'GET',
            url: '<?=base_url();?>entryp/Entryp/getMasterIdentityType',
        }).success(function (result) {
            $scope.identitytypes  = result;
        });
    }

    $scope.getMasterIdentityType();





    //prospect type
    $scope.getMasterProspectType = function()
    {
        $http({
            method: 'GET',
            url: '<?=base_url();?>entryp/Entryp/getMasterProspectType',
        }).success(function (result) {
            $scope.prospectypes  = result;
        });
    }
    $scope.getMasterProspectType();


    $scope.getMasterSalesChannel = function()
    {
        $http({
            method: 'GET',
            url: '<?=base_url();?>entryp/Entryp/getMasterSalesChannel',
        }).success(function (result) {
            $scope.master_sales_channel = result;
            
        });
    }

    $scope.getMasterSalesChannel();


    

    $scope.getMasterEC_Sibling = function()
    {
        $http({
            method: 'GET',
            url: '<?=base_url();?>entryp/Entryp/getMasterEC_Sibling',
        }).success(function (result) {
            $scope.EC_Siblings  = result;
            // console.log($scope.promotions);
        });      
    }
    $scope.getMasterEC_Sibling();

    $scope.getMasterPropertyType = function()
    {
        $http({
            method: 'GET',
            // url: 'entryp/Entryp5/getMasterPromo',
            url: '<?=base_url();?>entryp/Entryp/getMasterPropertyType',
            // url: "<?php echo site_url('entryp/Entryp5/getMasterPromo');?>",
        }).success(function (result) {
            $scope.PropertyTypes  = result;
            // console.log($scope.promotions);
        });      
    }
    $scope.getMasterPropertyType();
    
    $scope.getMasterProductHardware = function()
    {
        $http({
            method: 'GET',
            url: '<?=base_url();?>entryp/Entryp/getMasterProductHardware',
        }).success(function (result) {
            $scope.HardwareDecoder = result;
            $scope.ProductHardware = [];
            for(var i=0;i<result.length-1;i++)
            {
                $scope.ProductHardware.push(result[i]);
            }
            
        });
    }
    $scope.getHardwareHD = function(product_id)
    {
        
        if(product_id == '2')
        {
            //console.log($scope.HardwareDecoder[3]);
            
            $scope.HardwareHD.push($scope.HardwareDecoder[3]);
            console.log($scope.HardwareHD);

            //$scope.PACKAGE_HARDWARE_HD = '1';      
        }
        else
        {
            $scope.HardwareHD = [];
            console.log($scope.HardwareHD);
        }
        

    }

    $scope.getMasterProductHardware();



    $scope.getMasterBasic = function(brand)
    {
        $scope.AlacarteSelectedList = [];
        //console.log(brand);
        $http({
            method: 'GET',
            url: '<?=base_url();?>entryp/Entryp/getMasterBasic?brandId='+brand}).success(function (result) {
                $scope.basics  = result;
                //console.log(result);
               /*$scope.products = [];
               for(var i=0;i<$scope.basics.length;i++)
               {
                    //console.log($scope.basics[i].ROLE_TYPE_ID);
                    $http({
                    method: 'GET',
                    url: '<?=base_url();?>entryp/Entryp/getMasterProductBasic?product_id='+$scope.basics[i].ROLE_TYPE_ID}).success(function (result) {
                    if(result.length>0)
                    {
                        $scope.products.push(result[0]);    
                    }
                    

                    });
                    //console.log($scope.products);
               }*/
               //console.log($scope.products);

        });

        $http({
            method: 'GET',
            url: '<?=base_url();?>entryp/Entryp/getMasterAddOn?brandId='+brand}).success(function (result) {

                $scope.alacartes  = result;

               /* $scope.products_addon = [];
                for(var i=0;i<$scope.addon.length;i++)
                {
                    
                    $http({
                    method: 'GET',
                    url: '<?=base_url();?>entryp/Entryp/getMasterProductAddOn?product_id='+$scope.addon[i].ROLE_TYPE_ID}).success(function (result) {
                    if(result.length>0)
                    {
                        $scope.products_addon.push(result[0]);    
                    }
                    

                    });
                   
                }


                $scope.alacartes = $scope.products_addon; */


        });


    }

    /*$scope.getMasterAddOn = function(brand)
    {
        $http({
            method: 'GET',
            url: '<?=base_url();?>entryp/Entryp/getMasterAddOn?brandId='+brand}).success(function (result) {
            $scope.addon  = result;
            console.log($scope.addon);  
        });


    }*/



    $scope.selectIdx = function(idx)
    {

        $scope.selColor = {};
        for(i=0; i<$scope.alacartes.length; i++)
        {
            if($scope.alacartes[i].PRODUCT_ID == idx.PRODUCT_ID)
            {
                var valSelected = $scope.alacartes[i];

                //console.log(valSelected.selected);
                //alert(idx.service_id);
                if(valSelected.selected==true)
                {
                    $scope.alacartes[i].selected = false;  
                    //console.log($scope.alacartes[i].selected);
                    $scope.selColor = {};
                    removeArrayAlacarte(valSelected);
                    //$scope.alacartes_price -= parseInt(valSelected.price);
                    //console.log($scope.AlacarteSelectedList);
                    //remOccupancy(valSelected);
                }
                else
                {
                    $scope.alacartes[i].selected = true;
                    //console.log($scope.alacartes[i].selected);
                    $scope.selColor = {color: '#009688'};
                    addArrayAlacarte(valSelected);
                    //$scope.alacartes_price += parseInt(valSelected.price);
                    //console.log($scope.AlacarteSelectedList);
                    //addOccupancy(valSelected);
                }
            }
        }
    }

    function addArrayAlacarte(valSelected){

        var currentList = $scope.AlacarteSelectedList;
        var newList     = currentList.concat(valSelected);
        $scope.AlacarteSelectedList = newList;

    }

    function removeArrayAlacarte(valSelected){
        //console.log(valSelected);
        $scope.AlacarteSelectedList = removeA($scope.AlacarteSelectedList, valSelected);
    }

    $scope.selectIdx1 = function(idx)
    {
        $scope.selColor = {};
        for(i=0; i<$scope.alacartes1.length; i++)
        {
            if($scope.alacartes1[i].service_id == idx.service_id)
            {
                var valSelected = $scope.alacartes1[i];

                //console.log(valSelected.selected);
                //alert(idx.service_id);
                if(valSelected.selected==true)
                {
                    $scope.alacartes1[i].selected = false;  
                    $scope.selColor = {};
                    removeArrayAlacarte1(valSelected);
                    $scope.alacartes_price1 -= parseInt(valSelected.price);
                     
                }
                else
                {
                    $scope.alacartes1[i].selected = true;
                    $scope.selColor = {color: '#009688'};
                    addArrayAlacarte1(valSelected);
                    $scope.alacartes_price1 += parseInt(valSelected.price);
                    


                }
            }
        }
    }
    function addArrayAlacarte1(valSelected){
        var currentList1 = $scope.AlacarteSelectedList1;
        var newList1     = currentList1.concat(valSelected);
        $scope.AlacarteSelectedList1 = newList1;

    }

    function removeArrayAlacarte1(valSelected){
        $scope.AlacarteSelectedList1 = removeA($scope.AlacarteSelectedList1, valSelected);
    }

    $scope.selectIdx2 = function(idx)
    {

        for(i=0; i<$scope.alacartes2.length; i++)
        {
            if($scope.alacartes2[i].service_id == idx.service_id)
            {
                var valSelected = $scope.alacartes2[i];

                //console.log(valSelected.selected);
                //alert(idx.service_id);
                if(valSelected.selected==true)
                {
                    $scope.alacartes2[i].selected = false;  
                    //console.log($scope.alacartes2[i].selected);
                    $scope.selColor = {};
                    removeArrayAlacarte2(valSelected);
                    $scope.alacartes_price2 -= parseInt(valSelected.price);
                     
                }
                else
                {
                    $scope.alacartes2[i].selected = true;
                    //console.log($scope.alacartes2[i].selected);
                    $scope.selColor = {color: '#009688'};
                    addArrayAlacarte2(valSelected);
                    $scope.alacartes_price2 += parseInt(valSelected.price);
                }
            }
        }
    }
    function addArrayAlacarte2(valSelected){
        var currentList2 = $scope.AlacarteSelectedList2;
        var newList2     = currentList2.concat(valSelected);
        $scope.AlacarteSelectedList2 = newList2;

    }

    function removeArrayAlacarte2(valSelected){
        $scope.AlacarteSelectedList2 = removeA($scope.AlacarteSelectedList2, valSelected);
    }

    $scope.bindingAlacarte = function(exist, available){
        var exist = exist;
        var available = available;

        // console.log(exist);
        // console.log(available);
        $scope.xxx = [];
        $scope.xxx = available;
        if(exist!=undefined){
            for(i=0;i<available.length;i++){
                for(j=0;j<exist.length;j++){
                    // $scope.alacartes.push(available[i]);
                    if(available[i].service_id==exist[j].service_id){

                        $scope.xxx[i].selected = true;
                        //console.log($scope.xxx[i]);
                        // $scope.alacartes.push(available[i]);
                        // $scope.alacarte.service_id.push(available[i]);
                    }
                }
            }
        }
        return $scope.xxx;
        // console.log($scope.alacartes);
    }
    
    function removeA(arr) {
        var what, a = arguments, L = a.length, ax;
        while (L > 1 && arr.length) {
            what = a[--L];
            while ((ax= arr.indexOf(what)) !== -1) {
                arr.splice(ax, 1);
            }
        }
        return arr;
    }

    $scope.CalculateEstimatedPrice = function()
    {

        //console.log($scope.PACKAGE_BASIC);

        //console.log($scope.AlacarteSelectedList);
        
        /*$http.get("<?php echo site_url('entryp/Entryp/angular_getProductPrice');?>", {params:{"param1": $scope.PACKAGE_BASIC }}).success(function (result) { 

        });*/
        /*if($scope.ESTIMATED_PROMO==undefined || $scope.ESTIMATED_PROMO=='')
        {
            alert('Please check Estimated Price Again');
        }
        else
        {*/
            $body.addClass("loading");

            var product = {
                classids: $scope.CUSTOMER_CLASS,
                basic: $scope.PACKAGE_BASIC,
                add_on: $scope.AlacarteSelectedList,

            };

            $http({
                    method: 'POST',
                    url: '<?=base_url();?>entryp/Entryp/angular_getProductPrice',
                    data: product,
                }).success(function (result)
                {
                    $scope.COST_PACKAGE = result[0];
                     
                    $scope.ESTIMATED_COST_PACKAGE = result[0];                
                    var total =0;
                    for(var i=1;i<result.length;i++)
                    {
                        total += result[i];
                        $scope.COST_ALACARTE = total;
                        $scope.ESTIMATED_ALACARTE = total; 
                        
                    }
                    $body.removeClass("loading");
                    //$scope.TOTAL_ESTIMATED_COSTS = parseInt(200000)+ result[0]+
                    //console.log(total);
                });
                /*console.log(parseInt(200000));
                console.log(parseInt($scope.ESTIMATED_COST_PACKAGE));
                console.log(parseInt(total));
                console.log(parseInt($scope.ESTIMATED_PROMO));*/
                //console.log(++-);
                
                //console.log(parseInt((parseInt(200000) + parseInt() + parseInt($scope.ESTIMATED_ALACARTE)) - parseInt($scope.ESTIMATED_PROMO)));
                //$scope.TOTAL_ESTIMATED_COSTS = ;
        //}
        
        //var array = $scope.AlacarteSelectedList;
        
        




        /*var totalPackage = parseInt($scope.packageBasic[0].price) + parseInt($scope.alacartes_price);
        //console.log(totalPackage);
        if($scope.packageBasic == undefined)
        {

            //alert('anda belum memasukkan package');
        }

        if(parseInt($scope.packageBasic[0].price) != undefined)
        {
            $scope.COST_PACKAGE = parseInt($scope.packageBasic[0].price);
            $scope.COST_ALACARTE = parseInt($scope.alacartes_price);
            var total = parseInt($scope.COST_PACKAGE) + parseInt($scope.COST_ALACARTE);
            
            $scope.ESTIMATED_COST_PACKAGE = parseInt($scope.packageBasic[0].price);
            $scope.ESTIMATED_ALACARTE = parseInt($scope.alacartes_price);
            $scope.TOTAL_ESTIMATED_COSTS = total;

        }
        
        if($scope.packageBasic1[0].price != undefined)
        {
            var totalPackage1 = parseInt($scope.packageBasic1[0].price) + parseInt($scope.alacartes_price1);

            if((totalPackage >= totalPackage1))
            {
                $scope.COST_PACKAGE1 = parseInt($scope.packageBasic1[0].price) * 0.5;
                $scope.COST_ALACARTE1 = parseInt($scope.alacartes_price1) * 0.5; 
                
                $scope.ESTIMATED_COST_PACKAGE = parseInt($scope.packageBasic[0].price)  + parseInt($scope.packageBasic1[0].price) * 0.5;
                $scope.ESTIMATED_ALACARTE = parseInt($scope.alacartes_price)  + parseInt($scope.alacartes_price1) * 0.5  ;

                var total = parseInt(totalPackage) + ((parseInt(totalPackage1) * 0.5 ));
                
                $scope.TOTAL_ESTIMATED_COSTS = total;
            }
            else
            {
                $scope.COST_PACKAGE = parseInt($scope.packageBasic1[0].price) * 0.5;
                $scope.COST_ALACARTE = parseInt($scope.alacartes_price) * 0.5;

                $scope.COST_PACKAGE1 = parseInt($scope.packageBasic1[0].price);
                $scope.COST_ALACARTE1 = parseInt($scope.alacartes_price1);

                $scope.ESTIMATED_COST_PACKAGE = parseInt($scope.packageBasic[0].price) * 0.5  + parseInt($scope.packageBasic1[0].price) ;
                $scope.ESTIMATED_ALACARTE = parseInt($scope.alacartes_price) * 0.5 + parseInt($scope.alacartes_price1);

                var total = parseInt(totalPackage1) + ((parseInt(totalPackage) * 0.5 ));
                //console.log('1 -'+total);
                $scope.TOTAL_ESTIMATED_COSTS = total;
            }

        }        

        if($scope.packageBasic2[0].price != undefined)
        {
            var totalPackage2 = parseInt($scope.packageBasic2[0].price) + parseInt($scope.alacartes_price2);
            //console.log(totalPackage2);
            
            
            if((totalPackage >= totalPackage1) && (totalPackage >= totalPackage2))
            {
                $scope.COST_PACKAGE = parseInt($scope.packageBasic[0].price);
                $scope.COST_ALACARTE = parseInt($scope.alacartes_price);

                $scope.COST_PACKAGE1    = parseInt($scope.packageBasic1[0].price) * 0.5;
                $scope.COST_ALACARTE1   = parseInt($scope.alacartes_price1) * 0.5;

                $scope.COST_PACKAGE2    = parseInt($scope.packageBasic2[0].price) * 0.5;
                $scope.COST_ALACARTE2   = parseInt($scope.alacartes_price2) * 0.5;
                $scope.ESTIMATED_COST_PACKAGE = parseInt($scope.packageBasic[0].price) + parseInt($scope.packageBasic1[0].price) * 0.5 + parseInt($scope.packageBasic2[0].price) * 0.5;
                //$scope.ESTIMATED_ALACARTE2 = parseInt($scope.alacartes_price) + parseInt($scope.alacartes_price1) + parseInt($scope.alacartes_price2);
                $scope.ESTIMATED_ALACARTE = parseInt($scope.alacartes_price) + parseInt($scope.alacartes_price1)* 0.5 + parseInt($scope.alacartes_price2) * 0.5;
                 
                var total = parseInt(totalPackage) + (((parseInt(totalPackage1) + parseInt(totalPackage2)) * 0.5 ));
                $scope.TOTAL_ESTIMATED_COSTS = total;
            }
            if((totalPackage1 >= totalPackage) && (totalPackage1 >= totalPackage2))
            { 

                $scope.COST_PACKAGE = parseInt($scope.packageBasic[0].price) * 0.5;
                $scope.COST_ALACARTE = parseInt($scope.alacartes_price) * 0.5;

                $scope.COST_PACKAGE1    = parseInt($scope.packageBasic1[0].price);
                $scope.COST_ALACARTE1   = parseInt($scope.alacartes_price1);

                $scope.COST_PACKAGE2    = parseInt($scope.packageBasic2[0].price) * 0.5;
                $scope.COST_ALACARTE2   = parseInt($scope.alacartes_price2) * 0.5;

                $scope.ESTIMATED_COST_PACKAGE = parseInt($scope.packageBasic[0].price) * 0.5 + parseInt($scope.packageBasic1[0].price) + parseInt($scope.packageBasic2[0].price) * 0.5;
                $scope.ESTIMATED_ALACARTE = parseInt($scope.alacartes_price) * 0.5 + parseInt($scope.alacartes_price1) + parseInt($scope.alacartes_price2) * 0.5;
                
                var total = parseInt(totalPackage1) + (((parseInt(totalPackage) + parseInt(totalPackage2)) * 0.5 ));
                $scope.TOTAL_ESTIMATED_COSTS = total;
            }
            if((totalPackage2 >= totalPackage) && (totalPackage2 >= totalPackage1))
            {

                $scope.COST_PACKAGE = parseInt($scope.packageBasic[0].price) * 0.5;
                $scope.COST_ALACARTE = parseInt($scope.alacartes_price) * 0.5;

                $scope.COST_PACKAGE1    = parseInt($scope.packageBasic1[0].price) * 0.5;
                $scope.COST_ALACARTE1   = parseInt($scope.alacartes_price1) * 0.5;

                $scope.COST_PACKAGE2    = parseInt($scope.packageBasic2[0].price);
                $scope.COST_ALACARTE2   = parseInt($scope.alacartes_price2);
                
                $scope.ESTIMATED_COST_PACKAGE = parseInt($scope.packageBasic[0].price) * 0.5 + parseInt($scope.packageBasic1[0].price) * 0.5 + parseInt($scope.packageBasic2[0].price);
                $scope.ESTIMATED_ALACARTE = parseInt($scope.alacartes_price) * 0.5 + parseInt($scope.alacartes_price1) * 0.5 + parseInt($scope.alacartes_price2);
                

                var total = parseInt(totalPackage2) + (((parseInt(totalPackage) + parseInt(totalPackage1)) * 0.5 ));
                
                //$scope.TOTAL_ESTIMATED_COSTS = total;   
            }

        }*/


        

        /*else 
        {
            console.log(totalPackage1);
        }*/

        /*if((totalPackage1 >= totalPackage) && (totalPackage >= totalPackage2))
        {

        }*/


    }

    
 
    $scope.uploadFileToUrl = function(data,file, uploadUrl){
            
        
         $body.addClass("loading");
        var fd  = new FormData();
        fd.append('file', file);
        fd.append('data', data);
        $http.post(uploadUrl, fd, {
            transformRequest: angular.identity,
            headers: {'Content-Type': undefined}
        })
        .success(function(data){
            alert('File Successfully Uploaded');
            $scope.getUploadData();
            // console.log("text :"+data);
            // def.resolve(data);
            $body.removeClass("loading");
        })
        .error(function(){
           // console.log('BELUM');
            // def.reject("Failed to upload");
            $body.removeClass("loading");
        });
        // return def.promise;
       
    }

    $scope.generatePDFBedaAlamat = function(HSTATUS,SALES_NIK,SALES_CODE,SALES_OFFICEBRANCH,FIRST_NAME,STREET,INSTALL_ADDRESS,SALES_DIFFERENTCAUSES)
    {   
        //console.log(HSTATUS);
        //console.log(SALES_NIK);
        //console.log(SALES_CODE);
        //console.log(SALES_OFFICEBRANCH);
        //console.log(FIRST_NAME);
        //console.log(STREET);
        //console.log(INSTALL_ADDRESS);
        //console.log(SALES_DIFFERENTCAUSES);
        //var link = base_url + 'entryp/form_bedaalamat/?h_status=' + HSTATUS + '&sales_nik =' +SALES_NIK  + '&sales_code =' +SALES_CODE + '&sales_officebranch =' +SALES_OFFICEBRANCH + '&first_name =' +FIRST_NAME + '&street =' +STREET + '&install_address =' +INSTALL_ADDRESS + '&sales_differentcauses =' +SALES_DIFFERENTCAUSES;
        


        window.open('entryp/form_bedaalamat/?h_status=' + HSTATUS + '&sales_nik=' +SALES_NIK  + '&sales_code=' +SALES_CODE + '&sales_officebranch=' +SALES_OFFICEBRANCH + '&first_name=' +FIRST_NAME + '&street=' +STREET + '&install_address=' +INSTALL_ADDRESS + '&sales_differentcauses=' +SALES_DIFFERENTCAUSES);
        //console.log('asd');
    }

    $scope.enter = function(event,element)
    {
        if(event.keyCode == 13)
        {
            //console.log(element);
            $scope.searchProspectNumber(element);
        }
    }

    $scope.enterZipcode = function(event,element)
    {
        if(event.keyCode == 13)
        {

            //alert(element.length);
            if(element.length != 8)
            {
                alert('zipcode must be 8 digit');
            }
            else
            {
                $scope.getZipCodeData(element);
            }       
            
        }
    }

    $scope.enterZipcode_Install = function(event,element)
    {
        if(event.keyCode == 13)
        {
            //alert(element);
            if(element.length != 8)
            {
                alert('zipcode must be 8 digit');
            }
            else
            {       
                $scope.getZipCodeData_Install(element);
            }
        }
    }
    $scope.enterZipcode_Billing = function(event,element)
    {
        if(event.keyCode == 13)
        {
            //alert(element); 
            if(element.length != 8)
            {
                alert('zipcode must be 8 digit');
            }
            else
            {           
                $scope.getZipCodeData_Billing(element);
            }
        }
    }
    
    


    $scope.enterSGSParentNumber = function(event,element)
    {
        if(event.keyCode == 13)
        {

            //console.log(element);
            $scope.sgs_number(element);       
        }   
    }
    $scope.enterSalesCode = function(event,element)
    {
        if(event.keyCode == 13)
        {
            //alert(element);       
            $scope.getSalesCodeData(element);
        }
    }

    $scope.salesCodeSearch = function(sales_code)
    {
        if(sales_code==undefined || sales_code == '')
        $('#SalesProfileModal').modal('show');
        else
        {
            $scope.getSalesCodeData(sales_code);
        }
        //console.log(sales_code);
    }

    $scope.zipcodemodalsearch = function(zipcode)
    {

        if((zipcode==undefined) || (zipcode==''))
        {
            $('#ZipCodeModal').modal('show');
        }
        else
        {
            $scope.getZipCodeData(zipcode);
        }
        //console.log(zipcode);
    }



    $scope.searchProspectNumber = function(prospectnumber)
    {
        var pnumber = {
            pn : prospectnumber,
        };
        $scope.BUTTON_SAVE_SHOW = false;
        $scope.BUTTON_UPDATE_SHOW = true;
        //alert(prospectnumber);
        $body.addClass("loading");
        $http.get("<?php echo site_url('entryp/Entryp/angular_getStatusEp');?>", {params:{"param1": prospectnumber }}).success(function (result) { 
            //alert(result);
           
            if(result.trim()=="NEW"||result.trim()=="Pending")
            {
                /*$http({
                method: 'POST',
                url: '<?=base_url();?>entryp/Entryp/angular_UpdateStatusEP',
                data: pnumber,
                });*/   

                $http.get("<?php echo site_url('entryp/Entryp/angular_getProspectDatabyProspectNumber');?>", {params:{"param1": prospectnumber }}).success(function (result_DataProspectData) {
                        //$("#button_update").prop("disabled", true);
                        $('#sales_dissabled').attr('disabled', 'disabled'); 
                        
                        $scope.ProspectDataProfile =  result_DataProspectData;

                        $scope.PROSPECT_ID = $scope.ProspectDataProfile[0].PROSPECT_ID;
                        $scope.custid = $scope.ProspectDataProfile[0].REF_CUST_ID;
                        //console.log($scope.PROSPECT_ID);
                        $scope.SALUTATION.id = $scope.ProspectDataProfile[0].SALUTATION;
                        $scope.FIRST_NAME = $scope.ProspectDataProfile[0].FIRST_NAME;
                        $scope.MIDDLE_NAME = $scope.ProspectDataProfile[0].MIDDLE_NAME;
                        $scope.LAST_NAME = $scope.ProspectDataProfile[0].LAST_NAME;
                        $scope.EMAIL = $scope.ProspectDataProfile[0].EMAIL;
                        $scope.sales_category = $scope.ProspectDataProfile[0].SALESC;

                        $scope.formn = $scope.ProspectDataProfile[0].FORMN;
                        $scope.PROSPECT_TYPE = $scope.ProspectDataProfile[0].PROSPECT_TYPE;
                        $scope.HOME_PHONE = $scope.ProspectDataProfile[0].HOME_PHONE;
                        $scope.MOBILE_PHONE = $scope.ProspectDataProfile[0].MOBILE_PHONE;
                        $scope.WORK_PHONE = $scope.ProspectDataProfile[0].WORK_PHONE;
                        $scope.OPENTITY_ID = $scope.ProspectDataProfile[0].OPENTITY_ID;
                        //$scope.ENTITY_CODE = $scope.ProspectDataProfile[0].OPENTITY_ID;
                        $scope.IDPLN = $scope.ProspectDataProfile[0].PLN_ID;
                        //$scope.INPUTID.id = $scope.ProspectDataProfile[0].ID_TYPE;
                        $scope.IDN = $scope.ProspectDataProfile[0].IDTYPE_NUMBER;
                        
                        var Expired_Date = $scope.ProspectDataProfile[0].EXP_DATE.split("-");
                        $scope.EXPIRED_DATE = Expired_Date[1]+'/'+Expired_Date[2]+'/'+Expired_Date[0];
                        
                        $scope.GENDER = $scope.ProspectDataProfile[0].GENDER;

                        //PROSPECT ADDITIONAL
                        $scope.RELIGION   = $scope.ProspectDataProfile[0].RELIGION;
                        $scope.PLACEOFBIRTH   = $scope.ProspectDataProfile[0].PLACE_BIRTH;
                        var Date_Of_Birth = $scope.ProspectDataProfile[0].DATE_OF_BIRTH.split("-");
                        $scope.DATEOFBIRTH   = Date_Of_Birth[1]+'/'+Date_Of_Birth[2]+'/'+Date_Of_Birth[0];
                        var Installation_Date = $scope.ProspectDataProfile[0].INSTALLATION_DATE.split("-");
                        $scope.INSTALLATION_DATE  =  Installation_Date[1]+'/'+Installation_Date[2]+'/'+Installation_Date[0];
                        $scope.INSTALLATION_TIME = $scope.ProspectDataProfile[0].INSTALLATION_TIME;

                        var Time_Start = $scope.ProspectDataProfile[0].CONFIRMATION_TIME_START.split(" ");
                        var Time_End   = $scope.ProspectDataProfile[0].CONFIRMATION_TIME_END.split(" ");

                        $scope.CONFIRMATION_START_TIME = Time_Start[1];
                        $scope.CONFIRMATION_END_TIME = Time_End[1];
                        
                        var Date_Start = Time_Start[0].split("-");
                        var Date_End   = Time_End[0].split("-");


                        $scope.CONFIRMATIONPERIOD =  Date_Start[1]+'/'+Date_Start[2]+'/'+Date_Start[0]+' - '+Date_End[1]+'/'+Date_End[2]+'/'+Date_End[0];
                        $scope.HTYPE  = $scope.ProspectDataProfile[0].BUILDING_TYPE;
                        $scope.HSTATUS = $scope.ProspectDataProfile[0].BUILDING_STATUS;

                        $scope.INCOM = $scope.ProspectDataProfile[0].INCOME;
                        $scope.OCCU = $scope.ProspectDataProfile[0].OCCUPATION;

                        
                        $scope.ADDRESS_ID = $scope.ProspectDataProfile[0].PROSPECT_ID_ICC;         
                        $scope.STREET = $scope.ProspectDataProfile[0].STREET;
                        $scope.PROVINCE = $scope.ProspectDataProfile[0].PROVINCE;
                        $scope.CITY = $scope.ProspectDataProfile[0].CITY;
                        $scope.DISTRICT = $scope.ProspectDataProfile[0].DISTRICT;
                        $scope.SUBDISTRICT = $scope.ProspectDataProfile[0].SUBDISTRICT;
                        $scope.ZIPCODE  = $scope.ProspectDataProfile[0].POSTALCODE;
                        $scope.COUNTRY_ID  = $scope.ProspectDataProfile[0].COUNTRY;

                        $scope.cek_install = $scope.ProspectDataProfile[0].FBEDA;
                        $scope.cek_billing_identity = $scope.ProspectDataProfile[0].FBEDABILLING_IDENTITY;
                        
                        //$scope.ZIPCODE = $scope.ProspectDataProfile[0].ZIPCODE; 
                        $scope.INSTALL_ADDRESS  = $scope.ProspectDataProfile[0].INSTALLATION_ADDRESS;
                        $scope.INSTALL_DIRECTION        = $scope.ProspectDataProfile[0].INSTALLATION_DIRECTION;
                        $scope.INSTALL_LANDMARK         = $scope.ProspectDataProfile[0].INSTALLATION_LANDMARK;
                        
                        $scope.PROVINCE_INSTALL  = $scope.ProspectDataProfile[0].INSTALLATION_PROVINCE;
                        $scope.CITY_INSTALL  = $scope.ProspectDataProfile[0].INSTALLATION_CITY;
                        $scope.DISTRICT_INSTALL  = $scope.ProspectDataProfile[0].INSTALLATION_DISTRICT;
                        $scope.SUBDISTRICT_INSTALL  = $scope.ProspectDataProfile[0].INSTALLATION_SUBDISTRICT;
                        $scope.ZIPCODE_INSTALL  = $scope.ProspectDataProfile[0].INSTALLATION_ZIPCODE;

                        $scope.ADDRESS_BILLING = $scope.ProspectDataProfile[0].BILLING_ADDRESS;
                        $scope.DIRECTION_BILLING = $scope.ProspectDataProfile[0].BILLING_DIRECTION;
                        $scope.LANDMARK_BILLING  = $scope.ProspectDataProfile[0].BILLING_LANDMARK;
                        $scope.PROVINCE_BILLING  = $scope.ProspectDataProfile[0].BILLING_PROVINCE;
                        $scope.CITY_BILLING  = $scope.ProspectDataProfile[0].BILLING_CITY;
                        $scope.DISTRICT_BILLING  = $scope.ProspectDataProfile[0].BILLING_DISTRICT;
                        $scope.SUBDISTRICT_BILLING  = $scope.ProspectDataProfile[0].BILLING_SUBDISTRICT;
                        $scope.ZIPCODE_BILLING  = $scope.ProspectDataProfile[0].BILLING_ZIPCODE;
                        
                        $scope.EMERGENCY_NAME  = $scope.ProspectDataProfile[0].EC_NAME;
                        $scope.EMERGENCY_SIBLING  = $scope.ProspectDataProfile[0].EC_RELATION;
                        $scope.EMERGENCY_PHONE  = $scope.ProspectDataProfile[0].EC_PHONE;
                        $scope.EMERGENCY_ADDRESS  = $scope.ProspectDataProfile[0].EC_ADDR;
                        
                        $scope.SALES_NIK  = $scope.ProspectDataProfile[0].NIK_SALES;

                        $scope.POINT_OF_SALES = $scope.ProspectDataProfile[0].entity_name;
                        $scope.ENTITY_CODE = $scope.ProspectDataProfile[0].entity_code;
                        
                        $scope.SALES_CODE  = $scope.ProspectDataProfile[0].SALES_CODE;
                        $scope.SALES_NAME  = $scope.ProspectDataProfile[0].NAME_SALES;
                        $scope.SALES_OFFICEBRANCH  = $scope.ProspectDataProfile[0].branch;
                        $scope.SALES_NAMEBRACHHEAD  = $scope.ProspectDataProfile[0].HEAD_BRANCH;
                        $scope.SALES_DIFFERENTCAUSES  = $scope.ProspectDataProfile[0].DIFFERENT_CAUSE;
                        
                        
                        
                        //$scope.ENTITY_ID  = $scope.ProspectDataProfile[0].OPENTITY_ID;
                        //$scope.POINT_OF_SALES  = $scope.ProspectDataProfile[0].;

                        //PACKAGE ORDER
                        $scope.PACKAGE_ALACARTE = $scope.ProspectDataProfile[0].ALACARTE;
                        //$scope.PACKAGE_BRAND = $scope.ProspectDataProfile[0].BRAND;
                        $scope.PACKAGE_BRAND.id = $scope.ProspectDataProfile[0].BRAND;
                        $scope.getMasterBasic($scope.PACKAGE_BRAND);
                        console.log($scope.ProspectDataProfile[0].BASIC);
                        $scope.PACKAGE_BASIC = $scope.ProspectDataProfile[0].BASIC;
                        //$scope.PAYMENT_PERIOD = $scope.ProspectDataProfile[0].BILLING_FREQUENCY;
                        $scope.PAYMENT_PERIOD.id = $scope.ProspectDataProfile[0].BILLING_FREQUENCY;
                        $scope.PACKAGE_STATUS.id = $scope.ProspectDataProfile[0].STATUS;
                        //$scope.PACKAGE_STATUS = $scope.ProspectDataProfile[0].STATUS;
                        $scope.PROMO = $scope.ProspectDataProfile[0].AVAILABLE_PROMO;
                        
                        //alacarte List
                        //$scope.AlacarteSelectedList = $scope.ProspectDataProfile[0].ALACARTE;
                        //$scope.getValuePackageBasic($scope.ProspectDataProfile[0].BASIC);
                        
                        $http.get("<?php echo site_url('entryp/Entryp/angular_getPackageAlacarteData');?>", {params:{"param1": $scope.ProspectDataProfile[0].BASIC}}).success(function (result_DataPackageAlacarte) {
                            // console.log(result_DataPackageAlacarte);
                            $scope.xxx = result_DataPackageAlacarte;
                            // console.log($scope.alacartes);
                            $scope.AlacarteSelectedList = $scope.ProspectDataProfile[0].ALACARTE;
                            $scope.bindingAlacarte($scope.AlacarteSelectedList, $scope.xxx);
                            //console.log($scope.AlacarteSelectedList);
                            //console.log($scope.xxx);
                            $scope.alacartes = $scope.xxx;
                            
                            
                            //console.log($scope.alacartes);
                            //console.log($scope.alacartes);
                            //mereplace array object AlacarteSelectedList dengan alacartes result 
                            for(i=0;i<$scope.AlacarteSelectedList.length;i++)
                            {
                                for(j=0;j<$scope.alacartes.length;j++)
                                {
                                    if($scope.AlacarteSelectedList[i].service_id == $scope.alacartes[j].service_id)
                                    {
                                        $scope.AlacarteSelectedList[i]=[];
                                        $scope.AlacarteSelectedList[i] = $scope.alacartes[j];
                                        //console.log($scope.alacartes[j]);
                                    }    
                                }
                            }
                            //console.log($scope.AlacarteSelectedList);

                         });
                                   

                        //PACKAGE COST
                        $scope.ESTIMATED_INSTALLATION = $scope.ProspectDataProfile[0].INSTALLATION_COST;
                        $scope.ESTIMATED_COST_PACKAGE = $scope.ProspectDataProfile[0].COST_PACKAGE;
                        $scope.ESTIMATED_PROMO = $scope.ProspectDataProfile[0].COST_PACKAGE;
                        $scope.ESTIMATED_ALACARTE = $scope.ProspectDataProfile[0].ALACARTE_COST;
                        $scope.TOTAL_ESTIMATED_COSTS = $scope.ProspectDataProfile[0].TOTAL_COST;


                        //PAYMENT
                        $scope.paymentm                 = $scope.ProspectDataProfile[0].PAYMENT_MODE;
                        $scope.cardty                   = $scope.ProspectDataProfile[0].PAYMENT_CARD_TYPE;
                        $scope.PAYMENT_REMARK           = $scope.ProspectDataProfile[0].PAYMENT_NOTES;
                        $scope.PAYMENT_BANKNAME         = $scope.ProspectDataProfile[0].PAYMENT_BANK_NAME;
                        $scope.PAYMENT_BANKACCOUNTNAME  = $scope.ProspectDataProfile[0].PAYMENT_ACCOUNT_NAME;
                        $scope.PAYMENT_CARDNUMBER       = $scope.ProspectDataProfile[0].PAYMENT_CARD_NUMBER; 
                        var Payment_Card_Expired        = $scope.ProspectDataProfile[0].PAYMENT_EXP_DATE.split("-");
                        $scope.PAYMENT_CARD_EXPIRED     = Payment_Card_Expired[1]+'/'+Payment_Card_Expired[2]+'/'+Payment_Card_Expired[0];
                        var Payment_Date                = $scope.ProspectDataProfile[0].PAYMENT_DATE.split("-");
                        $scope.PAYMENT_DATE             = Payment_Date[1]+'/'+Payment_Date[2]+'/'+Payment_Date[0];


                        $scope.fileuploadshow = true;
                        $scope.getUploadData();
                        $scope.getMasterLogNotes(prospectnumber);
                        $body.removeClass("loading"); 
                    });



            }
            else
            {
                $('#sales_dissabled').attr('disabled', 'disabled');
                $("#sales_dissabled").prop("disabled", true);  
                $("#button_update").prop("disabled", true);                
                //$scope.BUTTON_UPDATE = true;
                

                $http.get("<?php echo site_url('entryp/Entryp/angular_getProspectDatabyProspectNumber');?>", {params:{"param1": prospectnumber }}).success(function (result_DataProspectData) { 
                        
                        $scope.ProspectDataProfile =  result_DataProspectData;

                        $scope.PROSPECT_ID = $scope.ProspectDataProfile[0].PROSPECT_ID;
                        $scope.custid = $scope.ProspectDataProfile[0].REF_CUST_ID;
                        //console.log($scope.PROSPECT_ID);
                        $scope.SALUTATION.id = $scope.ProspectDataProfile[0].SALUTATION;
                        $scope.FIRST_NAME = $scope.ProspectDataProfile[0].FIRST_NAME;
                        $scope.MIDDLE_NAME = $scope.ProspectDataProfile[0].MIDDLE_NAME;
                        $scope.LAST_NAME = $scope.ProspectDataProfile[0].LAST_NAME;
                        $scope.EMAIL = $scope.ProspectDataProfile[0].EMAIL;
                        $scope.sales_category = $scope.ProspectDataProfile[0].SALESC;
                        //$scope.SALESC = $scope.ProspectDataProfile[0].SALESC;

                        $scope.formn = $scope.ProspectDataProfile[0].FORMN;
                        $scope.PROSPECT_TYPE = $scope.ProspectDataProfile[0].PROSPECT_TYPE;
                        $scope.HOME_PHONE = $scope.ProspectDataProfile[0].HOME_PHONE;
                        $scope.MOBILE_PHONE = $scope.ProspectDataProfile[0].MOBILE_PHONE;
                        $scope.WORK_PHONE = $scope.ProspectDataProfile[0].WORK_PHONE;
                        $scope.OPENTITY_ID = $scope.ProspectDataProfile[0].OPENTITY_ID;
                        //$scope.ENTITY_CODE = $scope.ProspectDataProfile[0].OPENTITY_ID;
                        $scope.IDPLN = $scope.ProspectDataProfile[0].PLN_ID;
                        //$scope.INPUTID.id = $scope.ProspectDataProfile[0].ID_TYPE;
                        $scope.IDN = $scope.ProspectDataProfile[0].IDTYPE_NUMBER;
                        
                        var Expired_Date = $scope.ProspectDataProfile[0].EXP_DATE.split("-");
                        $scope.EXPIRED_DATE = Expired_Date[1]+'/'+Expired_Date[2]+'/'+Expired_Date[0];
                        
                        $scope.GENDER = $scope.ProspectDataProfile[0].GENDER;

                        //PROSPECT ADDITIONAL
                        $scope.RELIGION   = $scope.ProspectDataProfile[0].RELIGION;
                        $scope.PLACEOFBIRTH   = $scope.ProspectDataProfile[0].PLACE_BIRTH;
                        var Date_Of_Birth = $scope.ProspectDataProfile[0].DATE_OF_BIRTH.split("-");
                        $scope.DATEOFBIRTH   = Date_Of_Birth[1]+'/'+Date_Of_Birth[2]+'/'+Date_Of_Birth[0];
                        var Installation_Date = $scope.ProspectDataProfile[0].INSTALLATION_DATE.split("-");
                        $scope.INSTALLATION_DATE  =  Installation_Date[1]+'/'+Installation_Date[2]+'/'+Installation_Date[0];
                        $scope.INSTALLATION_TIME = $scope.ProspectDataProfile[0].INSTALLATION_TIME;

                        var Time_Start = $scope.ProspectDataProfile[0].CONFIRMATION_TIME_START.split(" ");
                        var Time_End   = $scope.ProspectDataProfile[0].CONFIRMATION_TIME_END.split(" ");

                        $scope.CONFIRMATION_START_TIME = Time_Start[1];
                        $scope.CONFIRMATION_END_TIME = Time_End[1];
                        
                        var Date_Start = Time_Start[0].split("-");
                        var Date_End   = Time_End[0].split("-");


                        $scope.CONFIRMATIONPERIOD =  Date_Start[1]+'/'+Date_Start[2]+'/'+Date_Start[0]+' - '+Date_End[1]+'/'+Date_End[2]+'/'+Date_End[0];
                        $scope.HTYPE  = $scope.ProspectDataProfile[0].BUILDING_TYPE;
                        $scope.HSTATUS = $scope.ProspectDataProfile[0].BUILDING_STATUS;

                        $scope.INCOM = $scope.ProspectDataProfile[0].INCOME;
                        $scope.OCCU = $scope.ProspectDataProfile[0].OCCUPATION;

                        
                        $scope.ADDRESS_ID = $scope.ProspectDataProfile[0].PROSPECT_ID_ICC;         
                        $scope.STREET = $scope.ProspectDataProfile[0].STREET;
                        $scope.PROVINCE = $scope.ProspectDataProfile[0].PROVINCE;
                        $scope.CITY = $scope.ProspectDataProfile[0].CITY;
                        $scope.DISTRICT = $scope.ProspectDataProfile[0].DISTRICT;
                        $scope.SUBDISTRICT = $scope.ProspectDataProfile[0].SUBDISTRICT;
                        $scope.ZIPCODE  = $scope.ProspectDataProfile[0].POSTALCODE;
                        $scope.COUNTRY_ID  = $scope.ProspectDataProfile[0].COUNTRY;

                        $scope.cek_install = $scope.ProspectDataProfile[0].FBEDA;
                        $scope.cek_billing_identity = $scope.ProspectDataProfile[0].FBEDABILLING_IDENTITY;
                        
                        //$scope.ZIPCODE = $scope.ProspectDataProfile[0].ZIPCODE; 
                        $scope.INSTALL_ADDRESS  = $scope.ProspectDataProfile[0].INSTALLATION_ADDRESS;
                        $scope.INSTALL_DIRECTION        = $scope.ProspectDataProfile[0].INSTALLATION_DIRECTION;
                        $scope.INSTALL_LANDMARK         = $scope.ProspectDataProfile[0].INSTALLATION_LANDMARK;
                        
                        $scope.PROVINCE_INSTALL  = $scope.ProspectDataProfile[0].INSTALLATION_PROVINCE;
                        $scope.CITY_INSTALL  = $scope.ProspectDataProfile[0].INSTALLATION_CITY;
                        $scope.DISTRICT_INSTALL  = $scope.ProspectDataProfile[0].INSTALLATION_DISTRICT;
                        $scope.SUBDISTRICT_INSTALL  = $scope.ProspectDataProfile[0].INSTALLATION_SUBDISTRICT;
                        $scope.ZIPCODE_INSTALL  = $scope.ProspectDataProfile[0].INSTALLATION_ZIPCODE;

                        $scope.ADDRESS_BILLING = $scope.ProspectDataProfile[0].BILLING_ADDRESS;
                        $scope.DIRECTION_BILLING = $scope.ProspectDataProfile[0].BILLING_DIRECTION;
                        $scope.LANDMARK_BILLING  = $scope.ProspectDataProfile[0].BILLING_LANDMARK;
                        $scope.PROVINCE_BILLING  = $scope.ProspectDataProfile[0].BILLING_PROVINCE;
                        $scope.CITY_BILLING  = $scope.ProspectDataProfile[0].BILLING_CITY;
                        $scope.DISTRICT_BILLING  = $scope.ProspectDataProfile[0].BILLING_DISTRICT;
                        $scope.SUBDISTRICT_BILLING  = $scope.ProspectDataProfile[0].BILLING_SUBDISTRICT;
                        $scope.ZIPCODE_BILLING  = $scope.ProspectDataProfile[0].BILLING_ZIPCODE;
                        
                        $scope.EMERGENCY_NAME  = $scope.ProspectDataProfile[0].EC_NAME;
                        $scope.EMERGENCY_SIBLING  = $scope.ProspectDataProfile[0].EC_RELATION;
                        $scope.EMERGENCY_PHONE  = $scope.ProspectDataProfile[0].EC_PHONE;
                        $scope.EMERGENCY_ADDRESS  = $scope.ProspectDataProfile[0].EC_ADDR;
                        
                        $scope.SALES_NIK  = $scope.ProspectDataProfile[0].NIK_SALES;

                        $scope.POINT_OF_SALES = $scope.ProspectDataProfile[0].entity_name;
                        $scope.ENTITY_CODE = $scope.ProspectDataProfile[0].entity_code;
                        
                        $scope.SALES_CODE  = $scope.ProspectDataProfile[0].SALES_CODE;
                        $scope.SALES_NAME  = $scope.ProspectDataProfile[0].NAME_SALES;
                        $scope.SALES_OFFICEBRANCH  = $scope.ProspectDataProfile[0].branch;
                        $scope.SALES_NAMEBRACHHEAD  = $scope.ProspectDataProfile[0].HEAD_BRANCH;
                        $scope.SALES_DIFFERENTCAUSES  = $scope.ProspectDataProfile[0].DIFFERENT_CAUSE;
                        
                        
                        
                        //$scope.ENTITY_ID  = $scope.ProspectDataProfile[0].OPENTITY_ID;
                        //$scope.POINT_OF_SALES  = $scope.ProspectDataProfile[0].;

                        //PACKAGE ORDER
                        $scope.PACKAGE_ALACARTE = $scope.ProspectDataProfile[0].ALACARTE;
                        //$scope.PACKAGE_BRAND = $scope.ProspectDataProfile[0].BRAND;
                        $scope.PACKAGE_BRAND.id = $scope.ProspectDataProfile[0].BRAND;
                        $scope.getMasterBasic($scope.PACKAGE_BRAND);
                        $scope.PACKAGE_BASIC = $scope.ProspectDataProfile[0].BASIC;
                        //$scope.PAYMENT_PERIOD = $scope.ProspectDataProfile[0].BILLING_FREQUENCY;
                        $scope.PAYMENT_PERIOD.id = $scope.ProspectDataProfile[0].BILLING_FREQUENCY;
                        $scope.PACKAGE_STATUS.id = $scope.ProspectDataProfile[0].STATUS;
                        //$scope.PACKAGE_STATUS = $scope.ProspectDataProfile[0].STATUS;
                        $scope.PROMO = $scope.ProspectDataProfile[0].AVAILABLE_PROMO;
                        
                        //alacarte List
                        //$scope.AlacarteSelectedList = $scope.ProspectDataProfile[0].ALACARTE;
                        //$scope.getValuePackageBasic($scope.ProspectDataProfile[0].BASIC);
                        
                        $http.get("<?php echo site_url('entryp/Entryp/angular_getPackageAlacarteData');?>", {params:{"param1": $scope.ProspectDataProfile[0].BASIC}}).success(function (result_DataPackageAlacarte) {
                            // console.log(result_DataPackageAlacarte);
                            $scope.xxx = result_DataPackageAlacarte;
                            // console.log($scope.alacartes);
                            $scope.AlacarteSelectedList = $scope.ProspectDataProfile[0].ALACARTE;
                            $scope.bindingAlacarte($scope.AlacarteSelectedList, $scope.xxx);
                            //console.log($scope.AlacarteSelectedList);
                            //console.log($scope.xxx);
                            $scope.alacartes = $scope.xxx;
                            
                            
                            //console.log($scope.alacartes);
                            //console.log($scope.alacartes);
                            //mereplace array object AlacarteSelectedList dengan alacartes result 
                            for(i=0;i<$scope.AlacarteSelectedList.length;i++)
                            {
                                for(j=0;j<$scope.alacartes.length;j++)
                                {
                                    if($scope.AlacarteSelectedList[i].service_id == $scope.alacartes[j].service_id)
                                    {
                                        $scope.AlacarteSelectedList[i]=[];
                                        $scope.AlacarteSelectedList[i] = $scope.alacartes[j];
                                        //console.log($scope.alacartes[j]);
                                    }    
                                }
                            }
                            //console.log($scope.AlacarteSelectedList);

                         });
                                   

                        //PACKAGE COST
                        $scope.ESTIMATED_INSTALLATION = $scope.ProspectDataProfile[0].INSTALLATION_COST;
                        $scope.ESTIMATED_COST_PACKAGE = $scope.ProspectDataProfile[0].COST_PACKAGE;
                        $scope.ESTIMATED_PROMO = $scope.ProspectDataProfile[0].COST_PACKAGE;
                        $scope.ESTIMATED_ALACARTE = $scope.ProspectDataProfile[0].ALACARTE_COST;
                        $scope.TOTAL_ESTIMATED_COSTS = $scope.ProspectDataProfile[0].TOTAL_COST;


                        //PAYMENT
                        $scope.paymentm                 = $scope.ProspectDataProfile[0].PAYMENT_MODE;
                        $scope.cardty                   = $scope.ProspectDataProfile[0].PAYMENT_CARD_TYPE;
                        $scope.PAYMENT_REMARK           = $scope.ProspectDataProfile[0].PAYMENT_NOTES;
                        $scope.PAYMENT_BANKNAME         = $scope.ProspectDataProfile[0].PAYMENT_BANK_NAME;
                        $scope.PAYMENT_BANKACCOUNTNAME  = $scope.ProspectDataProfile[0].PAYMENT_ACCOUNT_NAME;
                        $scope.PAYMENT_CARDNUMBER       = $scope.ProspectDataProfile[0].PAYMENT_CARD_NUMBER;
                        var Payment_Card_Expired        = $scope.ProspectDataProfile[0].PAYMENT_EXP_DATE.split("-");
                        $scope.PAYMENT_CARD_EXPIRED     = Payment_Card_Expired[1]+'/'+Payment_Card_Expired[2]+'/'+Payment_Card_Expired[0];
                        var Payment_Date                = $scope.ProspectDataProfile[0].PAYMENT_DATE.split("-");
                        $scope.PAYMENT_DATE             = Payment_Date[1]+'/'+Payment_Date[2]+'/'+Payment_Date[0];


                        $scope.fileuploadshow = true;
                        $scope.getUploadData();
                        $scope.getMasterLogNotes(prospectnumber);
                       $body.removeClass("loading"); 
                     /*    alert('masukan data nomor prospek dengan benar '); */
                    });

                
            }
            

        });
        
        //console.log(data);
        
    }



    $scope.getProsedurProspectNbr = function()
    {
        var sales_code_temp = $scope.SALES_CODE;
        //var deferred = $q.defer(); 
        $scope.fileuploadshow = true; 
        
        $http.get("<?php echo site_url('entryp/Entryp/angular_getGenerateProspectNumber');?>", {params:{"param1": sales_code_temp}}).success(function (result_ProspectNbrGenerator) { 
            //console.log(result_ProspectNbrGenerator.trim());
            $scope.prospectNumber = result_ProspectNbrGenerator.trim();
            $scope.pnumb = $scope.prospectNumber;
            
            if($scope.cardty == "AmEx")
            {
                $scope.cardty=87;
            }
            var person = {
                //PROFILE
                CATEGORY:$scope.sales_category,
                form_number:$scope.formn,
                PN:$scope.prospectNumber,
                pt:$scope.ptype,
                HARDWARE_STATUS:$scope.hstatus.id,
                sa:$scope.sgs,
                snm:$scope.sgsname,
                ID_TYPE:$scope.INPUTID,
                ID_NUMBER:$scope.IDN,
                CONFIRMATIONPERIOD: $('#daterangepicker-example').val(),
                CONFIRMATION_START_TIME : $('#CONFIRMATION_START_TIME').val(),
                CONFIRMATION_END_TIME : $('#CONFIRMATION_END_TIME').val(),
                INSTALLATION_DATE : $('#INSTALLATION_DATE').val(),
                INSTALLATION_TIME: $('#INSTALLATION_TIME').val(),
                SALUTATION:$scope.SALUTATION.id,
                FIRST_NAME:$scope.FIRST_NAME,
                MIDDLE_NAME:$scope.MIDDLE_NAME,
                LAST_NAME:$scope.LAST_NAME,
                GENDER:$scope.GENDER,
                RELIGION:$scope.RELIGION,
                PLACE_BIRTH:$scope.PLACEOFBIRTH,
                DATE_OF_BIRTH:$('#DATE_OF_BIRTH').val(),
                PLN_ID:$scope.IDPLN,
                WORK_PHONE:$scope.WORK_PHONE,
                HOME_PHONE:$scope.HOME_PHONE,
                MOBILE_PHONE:$scope.MOBILE_PHONE,
                expireddate:$('#expired_date').val(),
                EMAIL:$scope.EMAIL,
                BUILDING_TYPE:$scope.HTYPE,
                BUILDING_STATUS:$scope.HSTATUS,
                OCCUPATION:$scope.OCCU,
                INCOME:$scope.INCOM,
                LONGITUDE :$scope.LONGITUDE,
                LATITUDE :$scope.LATITUDE,


                //PROSPECT ADDRESS
                FLAGBEDAALAMAT : $scope.cek_install,
                STREET:$scope.STREET,
                DIRECTION : $scope.DIRECTION,
                LANDMARK : $scope.LANDMARK,
                ADDRESS_ID: $scope.ADDRESS_ID,
                COUNTRY_ID: $scope.COUNTRY_ID,
                PROVINCE:$scope.PROVINCE,
                CITY:$scope.CITY,
                DISTRICT:$scope.DISTRICT,
                SUBDISTRICT:$scope.SUBDISTRICT,
                ZIPCODE:$scope.ZIPCODE,

                //PROSPECT ADDRESS
                INSTALLATION_ADDRESS:$scope.INSTALL_ADDRESS,
                INSTALLATION_LANDMARK:$scope.INSTALL_LANDMARK,
                INSTALLATION_DIRECTIONS:$scope.INSTALL_DIRECTION,
                PROVINCE_INSTALL:$scope.PROVINCE_INSTALL,
                CITY_INSTALLATION:$scope.CITY_INSTALL,
                DISTRICT_INSTALLATION:$scope.DISTRICT_INSTALL,
                SUBDISTRICT_INSTALLATION:$scope.SUBDISTRICT_INSTALL,
                ZIPCODE_INSTALLATION:$scope.ZIPCODE_INSTALL,

                FLAGBEDABILLING_IDENTITY:$scope.cek_billing_identity,
                FLAGBEDABILLING_INSTALL:$scope.cek_billing_install,
                
                
                //PROSPECT ADDRESS
                BILLING_ADDRESS:$scope.ADDRESS_BILLING,
                BILLING_DIRECTION:$scope.DIRECTION_BILLING,
                BILLING_LANDMARK:$scope.LANDMARK_BILLING,
                PROVINCE_BILLING:$scope.PROVINCE_BILLING,
                CITY_BILLING:$scope.CITY_BILLING,
                DISTRICT_BILLING:$scope.DISTRICT_BILLING,
                SUBDISTRICT_BILLING:$scope.SUBDISTRICT_BILLING,
                ZIPCODE_BILLING: $scope.ZIPCODE_BILLING,

                //BIAYA TRANSPORT
                BT_FLAG:$scope.check_IncludeTransportationFee,
                BT_DK_LK:$scope.BT_DK_LK,
                BT_BRANCH_OFFICE:$scope.BT_BRANCH_OFFICE,
                BT_REGION_OFFICE:$scope.BT_REGION_OFFICE,
                BT_FEE:$scope.BT_FEE,
                


                //PROFILE
                emergency_name: $scope.EMERGENCY_NAME,
                emergency_sibling: $scope.EMERGENCY_SIBLING,
                emergency_phone: $scope.EMERGENCY_PHONE,
                emergency_address: $scope.EMERGENCY_ADDRESS,
                sales_nik: $scope.SALES_NIK,
                sales_code: $scope.SALES_CODE,
                sales_name: $scope.SALES_NAME,
                sales_differentcauses: $scope.SALES_DIFFERENTCAUSES,
                sales_officebranch: $scope.SALES_OFFICEBRANCH,
                sales_namebranchhead: $scope.SALES_NAMEBRACHHEAD,
                ENTITYCODE: $scope.ENTITY_ID,
                POS: $scope.POINT_OF_SALES,
                STOREAREA: $scope.promotion,


                ////PACKAGE
                PAYMENT_PERIOD      : $scope.PAYMENT_PERIOD,
                PACKAGE_BRAND       : $scope.PACKAGE_BRAND,
                PACKAGE_STATUS      : $scope.PACKAGE_STATUS,
                PACKAGE_PROMO       : $scope.PROMO,
                PACKAGE_BASIC       : $scope.PACKAGE_BASIC,
                //package alacarte selected list
                PACKAGE_ALACARTE    : $scope.AlacarteSelectedList, 


                //PACKAGE COST
                ESTIMATED_INSTALLATION : $scope.ESTIMATED_INSTALLATION,
                ESTIMATED_COST_PACKAGE : $scope.ESTIMATED_COST_PACKAGE,
                ESTIMATED_ALACARTE     : $scope.ESTIMATED_ALACARTE,
                ESTIMATED_PROMO        : $scope.ESTIMATED_PROMO,
                TOTAL_ESTIMATED_COSTS  : $scope.TOTAL_ESTIMATED_COSTS,
                /*console.log("payment"+$scope.paymentm);
                console.log("payment date :"+ $scope.PAYMENT_DATE);
                console.log("cardty : " +$scope.cardty);
                console.log("card number : "+$scope.PAYMENT_CARDNUMBER);
                console.log("bank account name : "+$scope.PAYMENT_BANKACCOUNTNAME);
            
                console.log($scope.PAYMENT_REMARK);
                console.log($scope.BLN_EXP_DATE);*/

                //FIRSTPAYMENT
                PAYMENT_METHOD              : $scope.paymentm,
                PAYMENT_CARD_TYPE           : $scope.cardty,
                PAYMENT_CARD_NUMBER         : $scope.PAYMENT_CARDNUMBER,
                PAYMENT_CARD_NAME           : $scope.PAYMENT_CARDHOLDERNAME,
                PAYMENT_BANKNAME            : $scope.PAYMENT_BANKNAME,
                PAYMENT_BANKACCOUNTNUMBER   : $scope.PAYMENT_BANKACCOUNTNUMBER,
                PAYMENT_CARD_EXPIRED        : $scope.BLN_EXP_DATE +'/'+$scope.THN_EXP_DATE,//$('#PAYMENT_CARD_EXPIRED').val()
                PAYMENT_DATE                : $('#PAYMENT_DATE').val(),
                PAYMENT_DIRECT_DEBIT        : $scope.PAYMENT_DIRECT_DEBIT,
                PAYMENT_REMARK              : $scope.PAYMENT_REMARK,


                KET_KTP                     : $scope.KET_KTP,
                KET_CC                      : $scope.KET_CC,
                KET_DANA                    : $scope.KET_DANA,
                KET_KUASA                   : $scope.KET_KUASA,
                KET_TTD                     : $scope.KET_TTD,
                KET_PERNYATAAN              : $scope.KET_PERNYATAAN,


              
            };

            //console.log(person);

            //console.log($scope.temp);
            //deferred.resolve(result_ProspectNbrGenerator.trim());
            $http({
                method: 'POST',
                url: '<?=base_url();?>entryp/Entryp/DTDaddData',
                data: person,

            }); 
            
        });
        
        //console.log(person);
        
        
    }
    
    $scope.update_form_submit = function(prospectnumber)
    {
        //alert(prospectnumber);
        $http.get("<?php echo site_url('entryp/Entryp/angular_getProspectDatabyProspectNumber');?>", {params:{"param1": prospectnumber}}).success(function (result_DataProspectData) { 
           
            var person_before = result_DataProspectData[0];

            var person_after = {
                CATEGORY:$scope.sales_category,
                form_number:$scope.formn,
                PROSPECT_NUMBER:prospectnumber,
                pt:$scope.ptype.id,
                HARDWARE_STATUS:$scope.hstatus.id,
                sa:$scope.sgs,
                snm:$scope.sgsname,
                ID_TYPE:$scope.INPUTID.id,
                ID_NUMBER:$scope.IDN,
                CONFIRMATIONPERIOD: $('#daterangepicker-example').val(),
                CONFIRMATION_START_TIME : $('#CONFIRMATION_START_TIME').val(),
                CONFIRMATION_END_TIME : $('#CONFIRMATION_END_TIME').val(),
                INSTALLATION_DATE : $('#INSTALLATION_DATE').val(),
                INSTALLATION_TIME: $('#INSTALLATION_TIME').val(),
                SALUTATION:$scope.SALUTATION.id,
                FIRST_NAME:$scope.FIRST_NAME,
                MIDDLE_NAME:$scope.MIDDLE_NAME,
                LAST_NAME:$scope.LAST_NAME,
                GENDER:$scope.GENDER,
                RELIGION:$scope.RELIGION,
                PLACE_BIRTH:$scope.PLACEOFBIRTH,
                DATE_OF_BIRTH:$('#DATE_OF_BIRTH').val(),
                PLN_ID:$scope.IDPLN,
                WORK_PHONE:$scope.WORK_PHONE,
                HOME_PHONE:$scope.HOME_PHONE,
                MOBILE_PHONE:$scope.MOBILE_PHONE,
                expireddate:$('#expired_date').val(),
                EMAIL:$scope.EMAIL,
                BUILDING_TYPE:$scope.HTYPE,
                BUILDING_STATUS:$scope.HSTATUS,
                OCCUPATION:$scope.OCCU,
                INCOME:$scope.INCOM,


                FLAGBEDAALAMAT : $scope.cek_install,
                STREET:$scope.STREET,
                ADDRESS_ID: $scope.ADDRESS_ID,
                COUNTRY_ID: $scope.COUNTRY_ID,
                PROVINCE:$scope.PROVINCE,
                CITY:$scope.CITY,
                DISTRICT:$scope.DISTRICT,
                SUBDISTRICT:$scope.SUBDISTRICT,
                ZIPCODE:$scope.ZIPCODE,

                INSTALLATION_ADDRESS:$scope.INSTALL_ADDRESS,
                INSTALLATION_LANDMARK:$scope.INSTALL_LANDMARK,
                INSTALLATION_DIRECTIONS:$scope.INSTALL_DIRECTION,
                PROVINCE_INSTALL:$scope.PROVINCE_INSTALL,
                CITY_INSTALLATION:$scope.CITY_INSTALL,
                DISTRICT_INSTALLATION:$scope.DISTRICT_INSTALL,
                SUBDISTRICT_INSTALLATION:$scope.SUBDISTRICT_INSTALL,
                ZIPCODE_INSTALLATION:$scope.ZIPCODE_INSTALL,

                FLAGBEDABILLING_IDENTITY:$scope.cek_billing_identity,
                FLAGBEDABILLING_INSTALL:$scope.cek_billing_install,
                
                

                BILLING_ADDRESS:$scope.ADDRESS_BILLING,
                BILLING_DIRECTION:$scope.DIRECTION_BILLING,
                BILLING_LANDMARK:$scope.LANDMARK_BILLING,
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
                sales_code: $scope.SALES_CODE,
                sales_name: $scope.SALES_NAME,
                sales_differentcauses: $scope.SALES_DIFFERENTCAUSES,
                sales_officebranch: $scope.SALES_OFFICEBRANCH,
                sales_namebranchhead: $scope.SALES_NAMEBRACHHEAD,
                ENTITYCODE: $scope.ENTITY_ID,
                POS: $scope.POINT_OF_SALES,
                STOREAREA: $scope.promotion,


                ////PACKAGE
                PAYMENT_PERIOD      : $scope.PAYMENT_PERIOD.id,
                PACKAGE_BRAND       : $scope.PACKAGE_BRAND.id,
                PACKAGE_STATUS      : $scope.PACKAGE_STATUS.id,
                PACKAGE_PROMO       : $scope.PROMO,
                PACKAGE_BASIC       : $scope.PACKAGE_BASIC,
                //package alacarte selected list
                PACKAGE_ALACARTE    : $scope.AlacarteSelectedList, 


                //PACKAGE COST
                ESTIMATED_INSTALLATION : $scope.ESTIMATED_INSTALLATION,
                ESTIMATED_COST_PACKAGE : $scope.ESTIMATED_COST_PACKAGE,
                ESTIMATED_ALACARTE     : $scope.ESTIMATED_ALACARTE,
                ESTIMATED_PROMO        : $scope.ESTIMATED_PROMO,
                TOTAL_ESTIMATED_COSTS  : $scope.TOTAL_ESTIMATED_COSTS,
                /*console.log("payment"+$scope.paymentm);
                console.log("payment date :"+ $scope.PAYMENT_DATE);
                console.log("cardty : " +$scope.cardty);
                console.log("card number : "+$scope.PAYMENT_CARDNUMBER);
                console.log("bank account name : "+$scope.PAYMENT_BANKACCOUNTNAME);
            
                console.log($scope.PAYMENT_REMARK);
                console.log($scope.BLN_EXP_DATE);*/

                //FIRSTPAYMENT
                PAYMENT_METHOD              : $scope.paymentm,
                PAYMENT_CARD_TYPE           : $scope.cardty,
                PAYMENT_CARD_NUMBER         : $scope.PAYMENT_CARDNUMBER,
                PAYMENT_BANK_ACCOUNTNAME    : $scope.PAYMENT_BANKACCOUNTNAME,
                PAYMENT_CARD_EXPIRED        : $('#PAYMENT_CARD_EXPIRED').val(),
                PAYMENT_DATE                : $('#PAYMENT_DATE').val(),
                PAYMENT_REMARK              : $scope.PAYMENT_REMARK,

            };
            var jparams = {
                    person_before : result_DataProspectData[0],     
                    
                    person_after : person_after,
                }; 

            $http({
                method: 'POST',
                url: '<?=base_url();?>entryp/Entryp/DTDLogData',
                data: jparams,    
                });    

            

            
            


        });

        var person = 
        {
                PROSPECT_ID:$scope.PROSPECT_ID,
                OPENTITY_ID:$scope.OPENTITY_ID,
                CATEGORY:$scope.sales_category,
                form_number:$scope.formn,
                PN:$scope.prospectNumber,
                pt:$scope.ptype.id,
                HARDWARE_STATUS:$scope.hstatus.id,
                sa:$scope.sgs,
                snm:$scope.sgsname,
                //ID_TYPE:$scope.INPUTID.id,
                CONFIRMATIONPERIOD: $('#daterangepicker-example').val(),
                CONFIRMATION_START_TIME : $scope.CONFIRMATION_START_TIME,
                CONFIRMATION_END_TIME : $scope.CONFIRMATION_END_TIME,
                ID_NUMBER:$scope.IDN,
                INSTALLATION_DATE : $('#INSTALLATION_DATE').val(),
                INSTALLATION_TIME: $scope.INSTALLATION_TIME,
                FIRST_NAME:$scope.FIRST_NAME,
                MIDDLE_NAME:$scope.MIDDLE_NAME,
                LAST_NAME:$scope.LAST_NAME,
                GENDER:$scope.GENDER,
                RELIGION:$scope.RELIGION,
                PLACE_BIRTH:$scope.PLACEOFBIRTH,
                DATE_OF_BIRTH:$('#DATE_OF_BIRTH').val(),
                PLN_ID:$scope.IDPLN,
                WORK_PHONE:$scope.WORK_PHONE,
                HOME_PHONE:$scope.HOME_PHONE,
                MOBILE_PHONE:$scope.MOBILE_PHONE,
                expireddate:$('#expired_date').val(),
                EMAIL:$scope.EMAIL,
                BUILDING_TYPE:$scope.HTYPE,
                BUILDING_STATUS:$scope.HSTATUS,
                OCCUPATION:$scope.OCCU,
                INCOME:$scope.INCOM,

                FLAGBEDAALAMAT : $scope.cek_install,
                STREET:$scope.STREET,
                ADDRESS_ID: $scope.ADDRESS_ID,
                COUNTRY_ID: $scope.COUNTRY_ID,
                PROVINCE:$scope.PROVINCE,
                CITY:$scope.CITY,
                DISTRICT:$scope.DISTRICT,
                SUBDISTRICT:$scope.SUBDISTRICT,
                ZIPCODE:$scope.ZIPCODE,

                INSTALLATION_ADDRESS:$scope.INSTALL_ADDRESS,
                INSTALLATION_LANDMARK:$scope.INSTALL_LANDMARK,
                INSTALLATION_DIRECTIONS:$scope.INSTALL_DIRECTION,
                PROVINCE_INSTALL:$scope.PROVINCE_INSTALL,
                CITY_INSTALLATION:$scope.CITY_INSTALL,
                DISTRICT_INSTALLATION:$scope.DISTRICT_INSTALL,
                SUBDISTRICT_INSTALLATION:$scope.SUBDISTRICT_INSTALL,
                ZIPCODE_INSTALLATION:$scope.ZIPCODE_INSTALL,

                BILLING_ADDRESS:$scope.ADDRESS_BILLING,
                BILLING_DIRECTION:$scope.DIRECTION_BILLING,
                BILLING_LANDMARK:$scope.LANDMARK_BILLING,
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
                sales_code: $scope.SALES_CODE,
                sales_name: $scope.SALES_NAME,
                sales_differentcauses: $scope.SALES_DIFFERENTCAUSES,
                sales_officebranch: $scope.SALES_OFFICEBRANCH,
                sales_namebranchhead: $scope.SALES_NAMEBRACHHEAD,
                ENTITYCODE: $scope.ENTITY_ID,
                POS: $scope.POINT_OF_SALES,
                STOREAREA: $scope.promotion,


                ////PACKAGE
                PAYMENT_PERIOD      : $scope.PAYMENT_PERIOD.id,
                PACKAGE_BRAND       : $scope.PACKAGE_BRAND.id,
                PACKAGE_STATUS      : $scope.PACKAGE_STATUS.id,
                PACKAGE_PROMO       : $scope.PROMO,
                PACKAGE_BASIC       : $scope.PACKAGE_BASIC,
                //package alacarte selected list
                PACKAGE_ALACARTE    : $scope.AlacarteSelectedList, 


                //PACKAGE COST
                ESTIMATED_INSTALLATION : $scope.ESTIMATED_INSTALLATION,
                ESTIMATED_COST_PACKAGE : $scope.ESTIMATED_COST_PACKAGE,
                ESTIMATED_ALACARTE     : $scope.ESTIMATED_ALACARTE,
                ESTIMATED_PROMO        : $scope.ESTIMATED_PROMO,
                TOTAL_ESTIMATED_COSTS  : $scope.TOTAL_ESTIMATED_COSTS,
       

                //FIRSTPAYMENT
                PAYMENT_METHOD              : $scope.paymentm,
                PAYMENT_CARD_TYPE           : $scope.cardty,
                PAYMENT_CARD_NUMBER         : $scope.PAYMENT_CARDNUMBER,
                PAYMENT_BANK_ACCOUNTNAME    : $scope.PAYMENT_BANKACCOUNTNAME,
                PAYMENT_CARD_EXPIRED        : $('#PAYMENT_CARD_EXPIRED').val(),
                PAYMENT_DATE                : $('#PAYMENT_DATE').val(),
                PAYMENT_REMARK              : $scope.PAYMENT_REMARK
        }

        $http({
                method: 'POST',
                url: '<?=base_url();?>entryp/Entryp/angular_DTDUpdateData',
                data: person,
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

    $scope.test = function()
    {
        console.log('asd');
    }
    
    $scope.getValuePackageBasic = function(package_basicId)
    {
        //console.log(package_basicId);
        
        
        $http.get("<?php echo site_url('entryp/Entryp/angular_getPackageBasicData');?>", {params:{"param1": package_basicId}}).success(function (result_DataPackageBasic) { 
            $scope.packageBasic = result_DataPackageBasic;
            
            //$scope.ESTIMATED_COST_PACKAGE    =   parseInt($scope.packageBasic[0].price);
        });

        $http.get("<?php echo site_url('entryp/Entryp/angular_getAlacarteData');?>", {params:{"param1": package_basicId}}).success(function (result_DataAlacarte) { 
            $scope.alacartes    =   result_DataAlacarte;    
            
        });

        $scope.AlacarteSelectedList = [];




    }

    $scope.getValuePackageBasic1 = function(package_basicId)
    {
        $http.get("<?php echo site_url('entryp/Entryp/angular_getPackageBasicData');?>", {params:{"param1": package_basicId}}).success(function (result_DataPackageBasic1) { 
            $scope.packageBasic1 = result_DataPackageBasic1;
            //$scope.ESTIMATED_COST_PACKAGE    =  parseInt($scope.packageBasic[0].price) + parseInt($scope.packageBasic1[0].price);
        });
        
        $http.get("<?php echo site_url('entryp/Entryp/angular_getAlacarteData');?>", {params:{"param1": package_basicId}}).success(function (result_DataAlacarte1) { 
            $scope.alacartes1    =   result_DataAlacarte1;    
            
        });

        $scope.AlacarteSelectedList1 = [];        

    }

    $scope.getValuePackageBasic2 = function(package_basicId)
    {
        $http.get("<?php echo site_url('entryp/Entryp/angular_getPackageBasicData');?>", {params:{"param1": package_basicId}}).success(function (result_DataPackageBasic2) { 
            $scope.packageBasic2 = result_DataPackageBasic2;
            //$scope.ESTIMATED_COST_PACKAGE    =  parseInt($scope.packageBasic[0].price) + parseInt($scope.packageBasic1[0].price) + parseInt($scope.packageBasic2[0].price);
        });

        $http.get("<?php echo site_url('entryp/Entryp/angular_getAlacarteData');?>", {params:{"param1": package_basicId}}).success(function (result_DataAlacarte2) { 
            $scope.alacartes2   =   result_DataAlacarte2;    
        });

        $scope.AlacarteSelectedList2 = [];        

    }

    /*$scope.getValuePackageAlacarte = function(bundele_id)
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

    }*/

    $scope.StatusPackageChange = function(statusvalueschanged)
    {
        //console.log(statusvalueschanged);
        if( (statusvalueschanged == "SINGLE") || (statusvalueschanged == "single") )
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
        $scope.IMAGEVIEW = value_upload.FILE_PATH;
       // console.log(value_upload.p_file_path);
        
    };
    $scope.preview_pdf = function(value_upload)
    {
        //console.log(value_upload.FILE_PATH);
        $scope.abc = "<?=base_url();?>"+value_upload.FILE_PATH;
        //console.log($scope.abc);
        //$scope.abc = value_upload.FILE_PATH;
        //pdffile=document.getElementById("uploadPDF").files[0];
        //pdffile_url=URL.createObjectURL(value_upload.FILE_PATH);
        //$('#viewer').attr('src',pdffile_url);
        //$scope.IMAGEVIEW = value_upload.FILE_PATH;
    }

    

    $scope.installsameidentity = function()
    {
        //console.log($scope.cek_install);
        if($scope.cek_install == true){
            $scope.INSTALL_ADDRESS = $scope.STREET;
            $scope.PROVINCE_INSTALL = $scope.PROVINCE;
            $scope.CITY_INSTALL = $scope.CITY;
            $scope.DISTRICT_INSTALL = $scope.DISTRICT;
            $scope.SUBDISTRICT_INSTALL = $scope.SUBDISTRICT;
            $scope.ZIPCODE_INSTALL = $scope.ZIPCODE;



            $scope.INSTALL_DIRECTION = $scope.DIRECTION;
            $scope.INSTALL_LANDMARK = $scope.LANDMARK;
            
            
        }else{
            $scope.INSTALL_ADDRESS = "";
            $scope.PROVINCE_INSTALL = "";
            $scope.CITY_INSTALL = "";
            $scope.DISTRICT_INSTALL = "";
            $scope.SUBDISTRICT_INSTALL = "";
            $scope.ZIPCODE_INSTALL = "";

            $scope.INSTALL_DIRECTION = "";
            $scope.INSTALL_LANDMARK = "";
           
        }
        
    }
    $scope.billing_same_identity = function()
    {
        //console.log($scope.cek_billing_identity);
        if($scope.cek_billing_identity == true)
        {
            $scope.ADDRESS_BILLING = $scope.STREET;
            $scope.PROVINCE_BILLING = $scope.PROVINCE;
            $scope.CITY_BILLING = $scope.CITY;
            $scope.DISTRICT_BILLING = $scope.DISTRICT;
            $scope.SUBDISTRICT_BILLING = $scope.SUBDISTRICT;
            $scope.ZIPCODE_BILLING = $scope.ZIPCODE;

            $scope.DIRECTION_BILLING = $scope.DIRECTION;
            $scope.LANDMARK_BILLING = $scope.LANDMARK;
        }
        else
        {
            $scope.ADDRESS_BILLING      = "";
            $scope.DIRECTION_BILLING    = "";
            $scope.LANDMARK_BILLING     = "";
            $scope.PROVINCE_BILLING     = "";
            $scope.CITY_BILLING         = "";
            $scope.DISTRICT_BILLING     = "";
            $scope.SUBDISTRICT_BILLING  = "";
            $scope.ZIPCODE_BILLING      = "";
        }
    }
    $scope.billing_same_install = function()
    {
        //console.log($scope.cek_billing_install);
        if($scope.cek_billing_install == true)
        {
            $scope.ADDRESS_BILLING = $scope.INSTALL_ADDRESS;
            $scope.DIRECTION_BILLING = $scope.INSTALL_DIRECTION;
            $scope.LANDMARK_BILLING = $scope.INSTALL_LANDMARK;
            $scope.PROVINCE_BILLING = $scope.PROVINCE_INSTALL;
            $scope.CITY_BILLING = $scope.CITY_INSTALL;
            $scope.DISTRICT_BILLING = $scope.DISTRICT_INSTALL;
            $scope.SUBDISTRICT_BILLING = $scope.SUBDISTRICT_INSTALL;
            $scope.ZIPCODE_BILLING = $scope.ZIPCODE_INSTALL;
        }
        else
        {
            $scope.ADDRESS_BILLING = "";
            $scope.DIRECTION_BILLING = "";
            $scope.LANDMARK_BILLING = "";
            $scope.PROVINCE_BILLING = "";
            $scope.CITY_BILLING = "";
            $scope.DISTRICT_BILLING = "";
            $scope.SUBDISTRICT_BILLING = "";
            $scope.ZIPCODE_BILLING = "";
        }

    }

    $scope.addNewPackage = function(count)
    {
        
        /*if(count==1)
        {
            $scope.ADD_PACKAGE = true;
                
        }
        else if(count==2)
        {
            $scope.ADD_PACKAGE1 = true;
            $scope.PriceDetailPackage1 = true;
        }*/
        if(count==3)
        {
            $scope.ADD_PACKAGE2 = true;
            $scope.PriceDetailPackage2 = true;
        }
        else
        {
            alert('Data multi must not more than 3 Add On');
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
   

    $scope.getZipcodeforCostTransport = function()
    {
        $body.addClass("loading");
        var ZipcodeforCostTransport = $scope.ZIPCODE;
        //console.log(ZipcodeforCostTransport);
        getCostTransport(ZipcodeforCostTransport);
        $body.removeClass("loading");

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

    $scope.getOperationalEntityView = function(BRANCH_SEARCH,sales_category,BRAND_SEARCH)
    {
        console.log(BRANCH_SEARCH +sales_category +BRAND_SEARCH);

        /*if( (BRANCH_SEARCH=='' || BRANCH_SEARCH == undefined) || (BRAND_SEARCH=='' || BRAND_SEARCH == undefined) )
        {
            console.log('branch and brand doesnt exist');
        }*/
        if((BRANCH_SEARCH !='' || BRANCH_SEARCH != undefined) && (BRAND_SEARCH=='' || BRAND_SEARCH == undefined))
        {
            $http.get("<?php echo site_url('entryp/Entryp/angular_OperationalEntityView');?>", {params:{"param1":BRANCH_SEARCH, "param2": sales_category }}).success(function(result){
            //console.log('flag berhasil');
            //console.log(result);
            $scope.ini_datanya=result;
            });           
        }
        else if((BRAND_SEARCH !='' || BRAND_SEARCH != undefined) && (BRANCH_SEARCH=='' || BRANCH_SEARCH == undefined)  )
        {
            $http.get("<?php echo site_url('entryp/Entryp/angular_OperationalEntityView');?>", {params:{"param2": sales_category,  "param3": BRAND_SEARCH}}).success(function(result){
            //console.log('flag berhasil');
            //console.log(result);
            $scope.ini_datanya=result;
            });           
        }

        else if( (BRANCH_SEARCH !='' || BRANCH_SEARCH != undefined) && (BRAND_SEARCH !='' || BRAND_SEARCH != undefined) )
        {
            $http.get("<?php echo site_url('entryp/Entryp/angular_OperationalEntityView');?>", {params:{"param1":BRANCH_SEARCH, "param2": sales_category, "param3": BRAND_SEARCH }}).success(function(result){
            $scope.ini_datanya=result;
            });   
        }
        if(BRAND_SEARCH=='' || BRAND_SEARCH == undefined)
        {
            console.log('tidak ada');
        }

        /*$http.get("<?php echo site_url('entryp/Entryp/angular_OperationalEntityView');?>").success(function(result){
            //console.log('flag berhasil');
            console.log(result);
            $scope.ini_datanya=result;
        });*/


    }
        
   
    

    $scope.getValueEntityCode = function(val) {
        $scope.ENTITY_ID = val.entity_id;
        $scope.ENTITY_CODE = val.entity_code;
        $scope.POINT_OF_SALES = val.entity_name;
        $scope.SALES_OFFICEBRANCH = val.branch;
        $('#PointOfSales').modal('hide');
        //alert(val.entity_id +" "+val.entity_code);
    }



    $scope.getData = function() 
    {   
        //var id = 144;
        //alert('test');
        $http.get("<?php echo site_url('entryp/Entryp/angular_SalesView');?>").success(function (result_DataSalesProfile) { 
            
            $scope.master_employee_data=result_DataSalesProfile;
            console.log($scope.master_employee_data);
            
        });
       
    }
    
    $scope.getDataRowsZipcode = function() 
    {   
        //var id = 144;
        //alert('test');
        $http.get("<?php echo site_url('entryp/Entryp/angular_ZipCode');?>").success(function (result_zipcode) { 
            
            $scope.zipcodeData=result_zipcode;
            //console.log($scope.zipcodeData);
            
        });
       
    }
    
    $scope.getDataRowsZipcodeInstallationAddr = function() 
    {   
        //var id = 144;
        //alert('test');
        $http.get("<?php echo site_url('entryp/Entryp/angular_ZipCode');?>").success(function (result_zipcode) { 
            
            $scope.zipcodeData=result_zipcode;
            //console.log($scope.zipcodeData);
            
        });
       
    }
    
//    $scope.getData();



    $scope.getSalesProfileData = function(sale_code)
    {
        //var sale_code = $scope.SALES_CODE_SEARCH;
        //var sales_name = $scope.SALES_NAME_SEARCH;
     
              $('#SalesProfileModal').modal('show');
              $scope.getData();
      
    }
    
    $scope.getDataZipcode = function(zip_code)
    {
    $('#ZipCodeModal').modal('show');
    $scope.getDataRowsZipcode();
    }
    
    $scope.getInstallationAddrZipcode = function(zip_code)
    {
    $('#ZipCodeInstallationModal').modal('show');
    $scope.getDataRowsZipcode();
    }
    
    

    $scope.getSalesCodeData = function(sale_code)
    {
        $http.get("<?php echo site_url('entryp/Entryp/angular_EmployeeView');?>", {params:{"param1": sale_code}}).success(function (result) { 
            //console.log(result);
            $scope.SALES_CODE = result[0].EMPLOYEE_ID;
            $scope.SALES_NIK = result[0].NIK;
            $scope.SALES_NAME = result[0].EMPLOYEE_NAME;
           
        });   
    }
    
    $scope.getParamsSales = function(){
        var sale_code = $scope.SALES_CODE_SEARCH;
        var sales_name = $scope.SALES_NAME_SEARCH;
        
        $http.get("<?php echo site_url('entryp/Entryp/angular_EmployeeView');?>", {params:{"param1": sale_code, "param2": sales_name}}).success(function (result_DataSalesProfile) { 
        $scope.master_employee_data=result_DataSalesProfile;
        
        });   
    }

    $scope.getValueSalesProfileData = function(value) {
        $scope.SALES_CODE = value.EMPLOYEE_ID;
        $scope.SALES_NAME = value.EMPLOYEE_NAME;
        $scope.SALES_NIK = value.NIK;
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

    $scope.getZipCodeData = function(zipcode)
    {
        $http.get("<?php echo site_url('entryp/Entryp/angular_getZipCodeViewData');?>", {params:{"param2": zipcode}}).success(function (result_Zipcode) { 
            //console.log(result_Zipcode);
            $scope.ADDRESS_ID = result_Zipcode[0].address_id;
            $scope.PROVINCE = result_Zipcode[0].province_name;
            $scope.CITY = result_Zipcode[0].city_name;
            $scope.DISTRICT = result_Zipcode[0].district_name;
            $scope.SUBDISTRICT = result_Zipcode[0].subdistrict_name;
            //$scope.zipcodeDataBind=result_DataZipcode;
        });
    }
    $scope.getZipCodeData_Install = function(zipcode)
    {
        $http.get("<?php echo site_url('entryp/Entryp/angular_getZipCodeViewData');?>", {params:{"param2": zipcode}}).success(function (result_Zipcode) { 
          
                $scope.PROVINCE_INSTALL = result_Zipcode[0].province_name;
                $scope.CITY_INSTALL = result_Zipcode[0].city_name;
                $scope.DISTRICT_INSTALL = result_Zipcode[0].district_name;
                $scope.SUBDISTRICT_INSTALL = result_Zipcode[0].subdistrict_name;
                //$scope.zipcodeDataBind=result_DataZipcode;
            
        });
        $http.get("<?php echo site_url('entryp/Entryp/angular_getZipCodeTransport');?>", {params:{"param2": zipcode}}).success(function (result) { 
            //console.log(result);
            if(result.length > 0)
            {
                $scope.BT_DK_LK = result[0].DK_LK;
                $scope.BT_BRANCH_OFFICE = result[0].BRANCH_OFFICE;
                $scope.BT_REGION_OFFICE = result[0].REGION_OFFICE;
                $scope.BT_FEE = result[0].TRANSPORTATION_FEE;
                
            }
            else
            {
                alert('Data zipcode transportation doesnt match');    
            }
            
        });

    }
    $scope.getZipCodeData_Billing = function(zipcode)
    {
        $http.get("<?php echo site_url('entryp/Entryp/angular_getZipCodeViewData');?>", {params:{"param2": zipcode}}).success(function (result_Zipcode) { 
            //console.log(result_Zipcode);
            //$scope.ADDRESS_ID = result_Zipcode[0].address_id;
            $scope.PROVINCE_BILLING = result_Zipcode[0].province_name;
            $scope.CITY_BILLING = result_Zipcode[0].city_name;
            $scope.DISTRICT_BILLING = result_Zipcode[0].district_name;
            $scope.SUBDISTRICT_BILLING = result_Zipcode[0].subdistrict_name;
            //$scope.zipcodeDataBind=result_DataZipcode;
        });
    }
    
    


    $scope.getZipCodeValues = function(value_zipcode) 
    {
        $scope.ADDRESS_ID = value_zipcode.address_id;
        $scope.ZIPCODE = value_zipcode.zipcode_id;
        $scope.DISTRICT = value_zipcode.district_name;
        $scope.SUBDISTRICT = value_zipcode.subdistrict_name;
        $scope.CITY = value_zipcode.city_name;
        $scope.PROVINCE = value_zipcode.province_name;
        $('#ZipCodeModal').modal('hide');
    }
    $scope.getZipCodeInstallValues = function(value_zipcode) 
    {
        $scope.ZIPCODE_INSTALL = value_zipcode.zipcode_id;
        $scope.DISTRICT_INSTALL = value_zipcode.district_name;
        $scope.SUBDISTRICT_INSTALL = value_zipcode.subdistrict_name;
        $scope.CITY_INSTALL = value_zipcode.city_name;
        $scope.PROVINCE_INSTALL = value_zipcode.province_name;
        $('#ZipCodeInstallationModal').modal('hide');
    }
    $scope.getZipCodeBillingValues = function(value_zipcode) 
    {
        $scope.ZIPCODE_BILLING = value_zipcode.zipcode_id;
        $scope.DISTRICT_BILLING = value_zipcode.district_name;
        $scope.SUBDISTRICT_BILLING = value_zipcode.subdistrict_name;
        $scope.CITY_BILLING = value_zipcode.city_name;
        $scope.PROVINCE_BILLING = value_zipcode.province_name;
        $('#ZipCodeBillingModal').modal('hide');
    }

    
    $scope.saveFile  = function(filename)
    {
        //console.log($scope.myFile);
        // var prosNbr  = $scope.PROSPECT_NUMBER;
        var prosNbr  = $scope.pnumb;
        var userName   = 'Hegi';
        //var userName   = $scope.PROFILE_NAME;
        var category = $scope.CATEGORY_FILE;
        var fileUrl = '<?php echo site_url('entryp/Entryp/angular_UploadData');?>';
        var file   =  $scope.myFile;
        
        /*console.log(prosNbr);
        console.log(userName);
        console.log(category);*/

        var dataObj = {
            P_PROSPECT_NBR  : prosNbr,
            P_UPLOAD_BY : userName,
            P_CATEGORY_FILE: category
        };
        // fileUpload.uploadFileToUrl(JSON.stringify(dataObj),file, fileUrl);
        $scope.uploadFileToUrl(JSON.stringify(dataObj),file, fileUrl);
        
        
    }

   
    $scope.getUploadData = function() 
    {   
        
        $http.get("<?php echo site_url('entryp/Entryp/angular_ViewUploadData');?>", {params:{"param1": $scope.pnumb}}).success(function (resultDataUpload) { 
            //console.log(result_DataZipcode);
            $scope.upload_data_view=resultDataUpload;
        });
       
    }
    //not a function to call resultDataUpload (bukan sebuah fungsi) tapi langsung memanggil data upload secara langsung
        /*$http.get("<?php echo site_url('entryp/Entryp/angular_ViewUploadData');?>").success(function(resultDataUpload){
            //console.log(resultDataUpload);
            $scope.upload_data_view=resultDataUpload;
            //console.log($scope.upload_data_view);
        });*/
         

    

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
        if($scope.identity_number != undefined)
        {
            if($scope.identity_number.length > 16){
                alert("max 16 digit!");
                $scope.identity_number = $scope.identity_number.substr(0, 16);
            }
        }
       
        //console.log($scope.BLN_EXP_DATE+"/"+$scope.THN_EXP_DATE);
    }

    
    $scope.validation_check_form = function()
    {
 
        if($scope.formm.$valid == false)
        { 

            console.log($scope.check_IncludeTransportationFee); 
            //$scope.getProsedurProspectNbr();
            $scope.error = true; 
        }
        else
        {
            alert('Form was Successfully Insert');
            $scope.error = false;
            $scope.getProsedurProspectNbr();
            /*window.setTimeout(function() {
                window.location.href='entryp';
            }, 3000);*/
            /*if($scope.salesc=='dtdbb'||$scope.salesc=='dealer'||$scope.salesc=='df'){
                ValidateHW();
            }else{
                $scope.getProsedurProspectNbr();
            }*/ 
        }   
        
    }
    
    

  /*   $scope.validation_check_form = function()
    {
        //console.log($scope.formm.$valid);
        if($scope.formm.$valid == false)
        {
            //console.log($scope.ENTITY_ID); 
            $scope.error = true; 
        }
        else
        {
            $scope.error = false;
            $scope.getProsedurProspectNbr();
            //console.log($scope.pnumb); 
        } 
    } */


    
});
  
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
<style type="text/css">
  .modal1 {
    display:    none;
    position:   fixed;
    z-index:    1000;
    top:        0;
    left:       0;
    height:     100%;
    width:      100%;
    background: rgba( 255, 255, 255, .8 ) 
                url("<?=base_url();?>assets/image-resources/ajax-loader.gif") 
                50% 50% 
                no-repeat;
}

body.loading {
    overflow: hidden;   
}
body.loading .modal1 {
    display: block;
}
</style>
   <script type="text/javascript">
    var spinnerVisible = false;
    function showProgress() {
        if (!spinnerVisible) {
            $("div#spinner").fadeIn("fast");
            spinnerVisible = true;
        }
    };
    function hideProgress() {
        if (spinnerVisible) {
            var spinner = $("div#spinner");
            spinner.stop();
            spinner.fadeOut("fast");
            spinnerVisible = false;
        }
    };
</script>
   <div class="modal1"></div>
</html>