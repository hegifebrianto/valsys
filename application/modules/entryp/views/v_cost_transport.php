<?=$head?>
<?=$side_menu?>

    <div id="page-content-wrapper">
        <div id="page-content">
                    
        <div class="container">
                        
    <script type="text/javascript" src="<?=base_url();?>assets/widgets/parsley/parsley.js"></script>
    <script type="text/javascript" src="<?=base_url();?>assets/bootstrap/jquery.min.js"></script>
    <script type="text/javascript" src="<?=base_url();?>assets/widgets/colorpicker/colorpicker.js"></script>
    <script type="text/javascript" src="<?=base_url();?>assets/widgets/colorpicker/colorpicker-demo.js"></script>
    <script src="<?=base_url();?>assets/widgets/ang/angular.min.js"></script>
    <script type="text/javascript" src="<?=base_url();?>assets/bootstrap/js/bootstrap.js"></script>
    <script type="text/javascript" src="<?=base_url();?>assets/widgets/progressbar/progressbar.js"></script>
    <script type="text/javascript" src="<?=base_url();?>assets/widgets/superclick/superclick.js"></script>
    <script type="text/javascript" src="<?=base_url();?>assets/widgets/input-switch/inputswitch-alt.js"></script>
    <script type="text/javascript" src="<?=base_url();?>assets/widgets/slimscroll/slimscroll.js"></script>
    <script type="text/javascript" src="<?=base_url();?>assets/widgets/slidebars/slidebars.js"></script>
    <script type="text/javascript" src="<?=base_url();?>assets/widgets/slidebars/slidebars-demo.js"></script>
    <script type="text/javascript" src="<?=base_url();?>assets/widgets/charts/piegage/piegage.js"></script>
    <script type="text/javascript" src="<?=base_url();?>assets/widgets/charts/piegage/piegage-demo.js"></script>
    <script type="text/javascript" src="<?=base_url();?>assets/widgets/screenfull/screenfull.js"></script>
    <script type="text/javascript" src="<?=base_url();?>assets/widgets/content-box/contentbox.js"></script>
    <script type="text/javascript" src="<?=base_url();?>assets/widgets/overlay/overlay.js"></script>
    <script type="text/javascript" src="<?=base_url();?>assets/js-init/widgets-init.js"></script>
    <script type="text/javascript" src="<?=base_url();?>assets/themes/admin/layout.js"></script>
    <script type="text/javascript" src="<?=base_url();?>assets/widgets/theme-switcher/themeswitcher.js"></script>

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/themes/black-tie/jquery-ui.css">

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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.js"></script>
    <script src="<?=base_url();?>assets/widgets/modernizr/modernizr.min.js"></script>
    <script src="<?=base_url();?>assets/widgets/infragistics/infragistics.core.js"></script>
    <script src="<?=base_url();?>assets/widgets/infragistics/infragistics.lob.js"></script>
    <style>
        .combo-label {margin-bottom:.5em;}
    </style>

    <div id="page-title">
        <h2><?php echo $module_title;?></h2>
    </div>
    <div class="panel">
        <div class="panel-body">
            <div class="tab-content">
                <form class="form-horizontal bordered-row" id="formm" name="formm" data-parsley-validate="" method="POST" action="<?=base_url();?>entryp/Entryp/DTDaddData" enctype="multipart/form-data">
                    <div class="tab-pane fade active in" id="tab-example-1">
                        <div class="panel">
                            <div class="panel-body">
                                <div class="example-box-wrapper">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <h3 class="title-hero">Profile Customer Data</h3>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">Prospect Number</label>
                                                <div class="col-sm-6">
                                                    <input type="text" id="pn" name="pn" ng-model="PROSPECT_NUMBER" placeholder="" required class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">Prospect Type</label>
                                                <div class="col-sm-6">
                                                    <select name="pt" class="required" style="width: 200px;">
                                                        <option value="-1">Select</option>
                                                        <?php 
                                                        foreach ($prospect_type as $pt) {
                                                            echo "<option value='$pt[LOOKUP_CODE]'>$pt[LOOKUP_VALUE]</option>";
                                                        }
                                                        ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">Hardware Status</label>
                                                <div class="col-sm-6">
                                                    <select name="HARDWARE_STATUS" class="custom-select">
                                                        <option value="-1">Select</option>
                                                        <option value="pinjam pakai">Pinjam Pakai</option>
                                                        <option value="beli putus">Beli Putus</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label  class=" col-sm-3 control-label"> <label class="font-red">*</label>Identity Type</label>
                                                <div class="col-sm-6">
                                                    <select id="inputid" name="ID_TYPE" ng-model="INPUTID" class="required" onChange="checkk();">
                                                        <option value="" selected="selected">Select</option>
                                                        <option value="ktp">KTP</option>
                                                        <option value="passport">Passport</option>
                                                        <option value="sim">SIM</option>
                                                        <script>
                                                            function checkk() {
                                                                var el = document.getElementById("inputid");
                                                                var str = el.options[el.selectedIndex].text;
                                                                if(str == "Select") {
                                                                    hidee();
                                                                }else {
                                                                    showw();
                                                                }
                                                            }
                                                            function hidee(){
                                                                document.getElementById('id_type').style.visibility='hidden';
                                                            }
                                                            function showw(){
                                                                 document.getElementById('id_type').style.visibility='visible';
                                                            }
                                                        </script>
                                                    </select>
                                                    <input type="text" id="id_type" name="ID_NUMBER" placeholder=""  class="form-control" visible="false" style="visibility:hidden">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label"><label class="font-red">*</label>Firstname</label>
                                                <div class="col-sm-6">
                                                    <input type="text" id="f" name="FIRST_NAME" ng-model="PROFILE_NAME" placeholder="Required Field" required class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label"><label class="font-red">*</label>Middlename</label>
                                                <div class="col-sm-6">
                                                    <input type="text" id="m" name="MIDDLE_NAME"  placeholder="Required Field" required class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label"><label class="font-red">*</label>Lastname</label>
                                                <div class="col-sm-6">
                                                    <input type="text" id="l" name="LAST_NAME" ng-model="EMERGENCY_ADDRESS" placeholder="Required Field" required class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label"><label class="font-red">*</label>Gender</label>
                                                <div class="col-sm-6 ">
                                                    <label class="radio-inline"><input type="radio" id="" name="GENDER" ng-model="GENDER" value="male" required>Male</label>
                                                    <label class="radio-inline"><input type="radio" id="" name="GENDER" ng-model="GENDER" value="female">Female</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <h3 class="title-hero"></h3>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label"><label class="font-red">*</label>Religion</label>
                                                <div class="col-sm-6">
                                                    <select name="RELIGION" ng-model="RELIGION" class="required" >
                                                         <option value="" selected="selected">Select</option>
                                                         <option value="islam">Islam</option>
                                                         <option value="kristen">Kristen</option>
                                                         <option value="protestan">Protestan</option>
                                                         <option value="hindu">Hindu</option>
                                                         <option value="budha">Budha</option>
                                                         <option value="konghucu">Konghucu</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label"><label class="font-red">*</label>Place of Birth</label>
                                                <div class="col-sm-6">
                                                    <input type="text" placeholder="Place Of Birth" ng-model="PLACEOFBIRTH" required class="required">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="" class="col-sm-3 control-label"><label class="font-red">*</label>Date of Birth</label>
                                                <div class="col-sm-6">
                                                    <div class="input-prepend input-group">
                                                        <span class="add-on input-group-addon">
                                                            <i class="glyph-icon icon-calendar"></i>
                                                        </span>
                                                        <input type="text" required name="DATE_OF_BIRTH" id="DATE_OF_BIRTH" class="bootstrap-datepicker form-control" ng-model="DATEOFBIRTH" placeholder="DATE OF BIRTH"  data-date-format="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label"><label class="font-red">*</label>PLN ID</label>
                                                <div class="col-sm-6">
                                                    <input type="text" name="PLN_ID" data-parsley-type="digits" placeholder="Digits only" required class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label"><label class="font-red">*</label>Phone (House)</label>
                                                <div class="col-sm-6">
                                                    <input type="text" name="HOME_PHONE" data-parsley-type="digits" placeholder="Digits only" required class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label"><label class="font-red">*</label>Phone (HP)</label>
                                                <div class="col-sm-6">
                                                    <input type="text" name="MOBILE_PHONE" data-parsley-type="digits" placeholder="Digits only" required class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label"><label class="font-red">*</label>Operational Entity</label>
                                                    <button type="button" class="btn btn-info btn-xs" data-toggle="modal" data-target="#myModal">Search</button>
                                                <div class="col-sm-4">
                                                    <input type="text" name=""  placeholder="Entity Code" required class="form-control" ng-model="ENTITY_CODE"  >
                                                </div>
                                                 <label class="col-sm-3 control-label"></label>
                                                <div class="col-sm-5">
                                                    <input type="text" name=""  placeholder="Point Of Sales" required class="form-control" ng-model="POINT_OF_SALES" >
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>