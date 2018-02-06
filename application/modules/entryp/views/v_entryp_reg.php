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


<!-- combo-check -->
<script src="http://igniteui.com/js/modernizr.min.js"></script>
<!-- <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.min.js"></script> -->
<script src="http://cdn-na.infragistics.com/igniteui/latest/js/infragistics.core.js"></script>
<script src="http://cdn-na.infragistics.com/igniteui/latest/js/infragistics.lob.js"></script>
<link href="http://cdn-na.infragistics.com/igniteui/latest/css/themes/infragistics/infragistics.theme.css" rel="stylesheet"></link>
<link href="http://cdn-na.infragistics.com/igniteui/latest/css/structure/infragistics.css" rel="stylesheet"></link>
<style>
.combo-label {margin-bottom:.5em;}
</style>
<!-- -->
<!-- Data tables -->

<!--<link rel="stylesheet" type="text/css" href="../../assets/widgets/datatable/datatable.css">-->
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
    <h2>REGULAR</h2>
    
  
</div>
<!-- Conten form --> 

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
                        <li class="col-md-3">
                            <a href="#tab-example-4" data-toggle="tab" class="list-group-item">
                                <i class="glyph-icon font-green icon-send"></i>
                                Check List
                            </a>
                        </li>
                        
                        
                    </ul>
                    <div class="tab-content">
                    <form class="form-horizontal bordered-row" method="POST" id="profile_data" data-parsley-validate="" action="<?=base_url();?>entryp/Entryp/DTDaddData" enctype="multipart/form-data">
    <div class="tab-pane fade active in" id="tab-example-1">
        <div class="panel">
        <div class="panel-body">
        
        <div class="example-box-wrapper">
            
                <div class="row">
                    <div class="col-md-6">
                    <h3 class="title-hero">
                    Profile Customer Data
                    </h3>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Prospect Type</label>
                            <div class="col-sm-6">
                                <select name="PROSPECT_TYPE" class="custom-select">
                                    <option value="-1"> Select </option>
                                    <option value="Regular silver">Regular Silver</option>
                                    
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
                            <label class="col-sm-3 control-label">Prospect Number</label>
                            <div class="col-sm-6">
                                <h4 name="PROSPECT_NBR" value="A123451701301112">A123451701301112</h4>
                            </div>
                        </div>

                         <div class="form-group">
                            <label  class=" col-sm-3 control-label"> <label class="font-red">*</label>Identity Type</label>
                            <div class="col-sm-6">
                                <select id="inputid" name="input" class="required" onChange="checkk();">
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
                            <label class="col-sm-3 control-label"><label class="font-red">*</label>Name</label>
                            <div class="col-sm-6">
                                <input type="text" name="FIRST_NAME" placeholder="Required Field" required class="form-control">
                            </div>
                        </div>
                        </div>
                        <div class="col-md-6">
                    <h3 class="title-hero">
                      
                    </h3>
                        <div class="form-group">
                    <label class="col-sm-3 control-label"><label class="font-red">*</label>Gender</label>
                    <div class="col-sm-6 ">
                        
                        <label class="radio-inline ">
                            <input type="radio" id="" name="GENDER" value="male" >
                            Male
                        </label>
                        <label class="radio-inline">
                            <input type="radio" id="" name="GENDER" value="female"  required>
                            Female
                        </label>
                        
                    </div>
                </div>
                <div class="form-group">
                            <label class="col-sm-3 control-label"><label class="font-red">*</label>Religion</label>
                            <div class="col-sm-6">
                                <select name="RELIGION" class="required" >
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
                                <input type="text" placeholder="Required Field" required class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="" class="col-sm-3 control-label"><label class="font-red">*</label>Date of Birth</label>
                            <div class="col-sm-6">
                                <div class="input-prepend input-group">
                                    <span class="add-on input-group-addon">
                                        <i class="glyph-icon icon-calendar"></i>
                                    </span>
                                    <input type="text" required name="DATE_OF_BIRTH" id="DATE_OF_BIRTH" class="bootstrap-datepicker form-control" placeholder="Required Field"  data-date-format="">
                                </div>
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
                    <div class="form-group">
                            <label class="col-sm-3 control-label"></label>
                            <div class="col-sm-6">
                               
                            </div>
                        </div>
                        <!-- <div class="form-group">
                           <button name="subject" type="submit" value="">coba</button>
                        </div> -->

                        
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
                      Address of Identity Card
                    </h3>
                        <div class="form-group">
                            <label class="col-sm-3 control-label"><label class="font-red">*</label>Address</label>
                            <div class="col-sm-6">
                                <textarea id="street_id" name="STREET" placeholder="Required Field" required class="form-control"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Province</label>
                            <div class="col-sm-6">
                                <select id="provinsi" name="provinsi" class="required">
                                    <option value=''>--pilih--</option>
                                    <?php 
                                    foreach ($provinsi as $prov) {
                                    echo "<option value='$prov[province_id]'>$prov[province_name]</option>";
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                       <div class="form-group">
                            <label class="col-sm-3 control-label">City</label>
                            <div class="col-sm-6">
                                <select id="kota" name="kota" class="required">
                                    <option value=''>--pilih--</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">District</label>
                            <div class="col-sm-6">
                               <select id="kecamatan" name="kecamatan" class="required">
                                    <option value=''>--pilih--</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Sub District</label>
                            <div class="col-sm-6">
                                <select id="kelurahan" name="kelurahan" class="required">
                                 <option value=''>--pilih--</option>
                        </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label"><label class="font-red">*</label>Zipcode</label>
                            <div class="col-sm-6">
                                <h4 name="ZIPCODE" value="A123451701301112">A123451701301112</h4>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="" class="col-sm-3 control-label"><label class="font-red">*</label>Expired Date</label>
                            <div class="col-sm-6">
                                <div class="input-prepend input-group">
                                    <span class="add-on input-group-addon">
                                        <i class="glyph-icon icon-calendar"></i>
                                    </span>
                                    <input type="text" class="bootstrap-datepicker form-control" placeholder="Required Field" required data-date-format="mm/dd/yy">
                                </div>
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
                                <div class="input-prepend input-group">
                                    <span class="add-on input-group-addon">
                                        <i class="glyph-icon icon-calendar"></i>
                                    </span>
                                    <input type="text" name="ORDER_DATE" id="ORDER_DATE" class="bootstrap-datepicker form-control" placeholder="Required Field" required data-date-format="mm/dd/yy">
                                </div>
                            </div>
                        </div>
                         <div class="form-group">
                            <label for="" class="col-sm-3 control-label"><label class="font-red">*</label>Installation Time</label>
                            <div class="col-sm-6">
                                <div class="bootstrap-timepicker dropdown">
                                    <input class="timepicker-example  form-control" placeholder="Required Field" required type="text">
                                </div>
                            </div>
                        </div>
                         <div class="form-group">
                            <label for="" class="col-sm-3 control-label"><label class="font-red">*</label>Confirmation Date Start</label>
                            <div class="col-sm-6">
                                <div class="input-prepend input-group">
                                    <span class="add-on input-group-addon">
                                        <i class="glyph-icon icon-calendar"></i>
                                    </span>
                                    <input type="text" class="bootstrap-datepicker form-control" placeholder="Required Field" required data-date-format="mm/dd/yy">
                                </div>
                            </div>
                        </div>
                         <div class="form-group">
                            <label for="" class="col-sm-3 control-label"><label class="font-red">*</label>Confirmation  Time Start</label>
                            <div class="col-sm-6">
                                <div class="bootstrap-timepicker dropdown">
                                    <input class="timepicker-example form-control"  placeholder="Required Field" required type="text">
                                </div>
                            </div>
                        </div>
                         <div class="form-group">
                            <label for="" class="col-sm-3 control-label"><label class="font-red">*</label>Confirmation Date End</label>
                            <div class="col-sm-6">
                                <div class="input-prepend input-group">
                                    <span class="add-on input-group-addon">
                                        <i class="glyph-icon icon-calendar"></i>
                                    </span>
                                    <input type="text" class="bootstrap-datepicker form-control" placeholder="Required Field" required data-date-format="mm/dd/yy">
                                </div>
                            </div>
                        </div>
                         <div class="form-group">
                            <label for="" class="col-sm-3 control-label"><label class="font-red">*</label>Confirmation Time End</label>
                            <div class="col-sm-6">
                                <div class="bootstrap-timepicker dropdown">
                                    <input class="timepicker-example form-control" placeholder="Required Field" required   type="text">
                                </div>
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
                                <textarea type="text" id="installaddress" placeholder="Required Field" required class="form-control"></textarea>
                                <script>
                                document.getElementById('inlineCheckbox110').onchange = function() {
                                document.getElementById('installaddress').readOnly = this.checked;
                                $('#installaddress').val($('#street_id').val());
                                /*document.getElementById('landmark').disabled = this.checked;*/
                                document.getElementById('province').readOnly = this.checked;
                                $('#province_install').val($('#provinsi').find('option:selected').text());
                                document.getElementById('city').readOnly = this.checked;
                                 $('#city_install').val($('#kota').val());
                                document.getElementById('district').readOnly = this.checked;
                                 $('#district_install').val($('#kecamatan').val());
                                document.getElementById('subd').readOnly = this.checked;
                                $('#subd_install').val($('#kelurahan').val());
                                document.getElementById('zipc').readOnly = this.checked;
                                $('#zipc_install').val($('#zipc_id').val());
                                };
                                </script>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="col-sm-3 control-label"><label class="font-red">*</label>Direction/Landmark</label>
                            <div class="col-sm-6">
                                <textarea type="text" id="landmark" placeholder="Required Field" required class="form-control"></textarea>
                            </div>
                        </div>
                        </div>
                         <div class="col-md-6">
                         <h3 class="title-hero">
                   
                    </h3><br>


                        <div class="form-group">
                            <label class="col-sm-3 control-label">Province</label>
                            <div class="col-sm-6">
                                <select id="province_install" name="province_install" class="custom-select" >

                        </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">City</label>
                            <div class="col-sm-6">
                                <select id="city_install" name="" class="custom-select" id="city">
                                 <option id="city_install" >Select</option>
                                 <option>Option 1</option>
                                 <option>Option 2</option>
                                  <option>Option 3</option>
                                 <option>Option 4</option>
                        </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">District</label>
                            <div class="col-sm-6">
                                <select id="district_install" name="" class="custom-select" id="district">
                                 <option>Select</option>
                                 <option>Option 1</option>
                                 <option>Option 2</option>
                                  <option>Option 3</option>
                                 <option>Option 4</option>
                        </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Sub District</label>
                            <div class="col-sm-6">
                                <select  id="subd_install" name="" class="custom-select" id="subd">
                                 <option>Select</option>
                                 <option>Option 1</option>
                                 <option>Option 2</option>
                                  <option>Option 3</option>
                                 <option>Option 4</option>
                        </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label"><label class="font-red">*</label>Zipcode</label>
                            <div class="col-sm-6" id="zipc">
                                <h4>A123451701301112</h4>
                            </div>
                        </div>
                        <br>

                        <div class="form-group">
                           <button name="subject" type="submit" value="">cetak dokumen</button>
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
                                /*document.getElementById('landmark').disabled = this.checked;*/
                                document.getElementById('province').readOnly = this.checked;
                                $('#province_install').val($('#province_id').val());
                                document.getElementById('city').readOnly = this.checked;
                                 $('#city_install').val($('#city_id').val());
                                document.getElementById('district').readOnly = this.checked;
                                 $('#district_install').val($('#district_id').val());
                                document.getElementById('subd').readOnly = this.checked;
                                $('#subd_install').val($('#subd_id').val());
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
                                /*document.getElementById('landmark').disabled = this.checked;*/
                                document.getElementById('province').readOnly = this.checked;
                                $('#province_install').val($('#province_id').val());
                                document.getElementById('city').readOnly = this.checked;
                                 $('#city_install').val($('#city_id').val());
                                document.getElementById('district').readOnly = this.checked;
                                 $('#district_install').val($('#district_id').val());
                                document.getElementById('subd').readOnly = this.checked;
                                $('#subd_install').val($('#subd_id').val());
                                document.getElementById('zipc').readOnly = this.checked;
                                $('#zipc_install').val($('#zipc_id').val());
                                };
                                </script>

                        <div class="form-group">
                            <label class="col-sm-3 control-label">Billing Address</label>
                            <div class="col-sm-6">
                                <textarea id="address_billing" type="text" placeholder="" required class="form-control"></textarea>
                            </div>
                        </div>
                       
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Province</label>
                            <div class="col-sm-6">
                                <select name="" class="required">
                                 <option value="">Select</option>
                                 <option>Option 1</option>
                                 <option>Option 2</option>
                                  <option>Option 3</option>
                                 <option>Option 4</option>
                        </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">City</label>
                            <div class="col-sm-6">
                                <select name="" class="required">
                                 <option value="">Select</option>
                                 <option>Option 1</option>
                                 <option>Option 2</option>
                                  <option>Option 3</option>
                                 <option>Option 4</option>
                        </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">District</label>
                            <div class="col-sm-6">
                                <select name="" class="required">
                                 <option value="">Select</option>
                                 <option>Option 1</option>
                                 <option>Option 2</option>
                                  <option>Option 3</option>
                                 <option>Option 4</option>
                        </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Sub District</label>
                            <div class="col-sm-6">
                                <select name="" class="required">
                                 <option value="">Select</option>
                                 <option>Option 1</option>
                                 <option>Option 2</option>
                                  <option>Option 3</option>
                                 <option>Option 4</option>
                        </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Billing Zipcode</label>
                            <div class="col-sm-6">
                                <h4>A123451701301112</h4>
                            </div>
                        </div>
                        </div>
                        <div class="col-md-6">
                    <h3 class="title-hero">
                         
                    </h3><br>

                        
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
                            <label class="col-sm-3 control-label">Email</label>
                            <div class="col-sm-6">
                                <input type="text" name="EMAIL" data-parsley-type="email" placeholder="Email address"  class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">House Type</label>
                            <div class="col-sm-6">
                                <select name="" class="">
                                 <option value="">Select</option>
                                 <option>Option 1</option>
                                 <option>Option 2</option>
                                  <option>Option 3</option>
                                 <option>Option 4</option>
                        </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">House Status</label>
                            <div class="col-sm-6">
                                <select name="" class="">
                                 <option value="">Select</option>
                                 <option>Option 1</option>
                                 <option>Option 2</option>
                                  <option>Option 3</option>
                                 <option>Option 4</option>
                        </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Occupation</label>
                            <div class="col-sm-6">
                                <select name="" class="">
                                 <option value="">Select</option>
                                 <option>Option 1</option>
                                 <option>Option 2</option>
                                  <option>Option 3</option>
                                 <option>Option 4</option>
                        </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Income</label>
                            <div class="col-sm-6">
                                <select name="" class="">
                                 <option value="">Select</option>
                                 <option>Option 1</option>
                                 <option>Option 2</option>
                                  <option>Option 3</option>
                                 <option>Option 4</option>
                        </select>
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
                        <input type="file" size="20" name="filename" class="form-control" required id="userfile">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label"><label class="font-red">*</label>Payment Receipt</label>
                    <div class="col-sm-6">
                        <input type="file" class="form-control" required id="">
                    </div>
                </div>
                       <div class="form-group">
                    <label class="col-sm-3 control-label">Other Document</label>
                    <div class="col-sm-6">
                        <input type="file" class="form-control" required id="">
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
                                <input type="text"  placeholder="Required Field" required class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label"><label class="font-red">*</label>Sibling Relationship</label>
                            <div class="col-sm-6">
                                <select name="sibling" class="custom-select required">
                                    <option value=""> Select </option>
                                    <option value="orang tua">Parents</option>
                                    <option value="kadik">Brother/Sister</option>
                                    <option value="saudara">Comrade</option>
                                    <option value="anak">Son/Daughter</option>
                                    <option value="lainnya">Other Comrade</option>
                                    
                                </select>
                            </div>
                        </div>
                       <div class="form-group">
                            <label class="col-sm-3 control-label"><label class="font-red">*</label>Phone (House)</label>
                            <div class="col-sm-6">
                                <input type="text" data-parsley-type="digits" placeholder="Digits only" required class="form-control">
                            </div>
                        </div>
                       <div class="form-group">
                            <label class="col-sm-3 control-label"><label class="font-red">*</label>Phone (HP)</label>
                            <div class="col-sm-6">
                                <input type="text" data-parsley-type="digits" placeholder="Digits only" required class="form-control">
                            </div>
                        </div>
                       <div class="form-group">
                            <label class="col-sm-3 control-label"><label class="font-red">*</label>Address</label>
                            <div class="col-sm-6">
                                <input type="text" placeholder="Required Field" required class="form-control">
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
                                    <input type="text"  placeholder="Required Field" required class="form-control">
                                </div>
                            </div>
                           <div class="form-group">
                                <label class="col-sm-3 control-label"><label class="font-red">*</label>NIK</label>
                                <div class="col-sm-6">
                                    <input type="text" placeholder="Required Field" required class="form-control">
                                </div>
                            </div>
                             <div class="form-group">
                                <label class="col-sm-3 control-label"><label class="font-red">*</label>Penyebab Data</label>
                                <div class="col-sm-6">
                                    <input type="text" placeholder="Required Field" required class="form-control">
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
                                    <input type="text" placeholder="Required Field" required class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label"><label class="font-red">*</label>Pos/Kantor Cabang</label>
                                <div class="col-sm-6">
                                    <input type="text" placeholder="Required Field" required class="form-control">
                                </div>
                            </div>
                              <div class="form-group">
                                <label class="col-sm-3 control-label"><label class="font-red">*</label>Nama Waka Cabang</label>
                                <div class="col-sm-6">
                                    <input type="text" placeholder="Required Field" required class="form-control">
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
                    Package
                    </h3>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Brand</label>
                            <div class="col-sm-6">
                                <select id="brand" name="brand" class="">
                                 <option value="" selected>Select</option>
                                 <option value="indo">Indovision</option>
                                 <option value="top">Top TV</option>
                                  <option value="ok">Oke Vision</option>
                                 
                        </select>
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
                                <select name="" class="">
                                 <option value="">Select</option>
                                 <option>Option 1</option>
                                 <option>Option 2</option>
                                  <option>Option 3</option>
                                 <option>Option 4</option>
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
                                  <select name="" class="">
                                   <option value="">Select</option>
                                   <option>Option 1</option>
                                   <option>Option 2</option>
                                    <option>Option 3</option>
                                   <option>Option 4</option>
                                  </select>
                              </div>
                          </div>
                          <script>
                          $(function () {
var colors = [
            { Name: "satu" },
            { Name: "dua" },
            { Name: "tiga" },
            { Name: "empa" }
        ];

        $(function () {

            $("#checkboxSelectCombo").igCombo({
                width: "200px",
                dataSource: colors,
                textKey: "Name",
                valueKey: "Name",
                multiSelection: {
                    enabled: true,
                    showCheckboxes: true
                }
            });

        });
});
                          </script>
                          <div class="form-group">
                              <label class="col-sm-3 control-label">Alacarte</label>
                              <div class="col-sm-6">
                                  <h4 class="combo-label"</h4>
                                    <div id="checkboxSelectCombo"></div>
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
                            <div class="col-sm-6" >
                                <select name="PAYMENT METHOD" class="required" id="payment">
                                 <option value="">Select</option>
                                 <option value="kredit">Credit Card</option>
                                 <option value="autodebet">Autodebet R</option>
                                 <option value="atm">ATM</option>
                                 <option value="cash">Cash</option>
                                  
                        </select>
                            </div>
                            
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label"><label class="font-red">*</label>Card Type</label>
                            <div class="col-sm-6">
                                <select name="cardt" class="required" id="cardt">
                                 <option value="">Select</option>
                                 <option value="saving">Saving</option>
                                 <option value="express">American Express</option>
                                  <option value="visa">VISA</option>
                                 <option value="master">Master Card</option>
                                 <option value="bca">BCA Card</option>
                                 <option value="jcb">JCB</option>
                        </select>
                            </div>
                        </div>
                          <div class="form-group">
                            <label class="col-sm-3 control-label"><label class="font-red">*</label>Card Number</label>
                            <div class="col-sm-6">
                                <input type="text" placeholder="Required Field" id="cardnumber" required class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label"><label class="font-red">*</label>Bank Account Number</label>
                            <div class="col-sm-6">
                                <input type="text" placeholder="Required Field" required class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label"><label class="font-red">*</label>Name</label>
                            <div class="col-sm-6">
                                <input type="text" placeholder="Required Field" required class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label"><label class="font-red">*</label>Bank Name</label>
                            <div class="col-sm-6">
                                <input type="text" placeholder="Required Field" required class="form-control">
                            </div>
                        </div>
                        </div>
                        <div class="col-md-6">
                    <h3 class="title-hero">
                    
                    </h3><br>
                         <div class="form-group">
                            <label for="" class="col-sm-3 control-label"><label class="font-red">*</label>Expired Date</label>
                            <div class="col-sm-6">
                                <div class="input-prepend input-group">
                                    <span class="add-on input-group-addon">
                                        <i class="glyph-icon icon-calendar"></i>
                                    </span>
                                    <input type="text" class="bootstrap-datepicker form-control" placeholder="Required Field" required  value="02/16/12" data-date-format="mm/dd/yy">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label"><label class="font-red">*</label>Payment Period</label>
                            <div class="col-sm-6">
                                <select name="period_p" class="required">
                                 <option value="">Select</option>
                                 <option value="bf1">BF1</option>
                                 <option value="bf3">BF3</option>
                                  <option value="bf6">BF6</option>
                                 <option value="bf12">BF12</option>
                        </select>
                            </div>
                        </div>
                         <div class="form-group">
                            <label for="" class="col-sm-3 control-label"><label class="font-red">*</label>Payment Date</label>
                            <div class="col-sm-6">
                                <div class="input-prepend input-group">
                                    <span class="add-on input-group-addon">
                                        <i class="glyph-icon icon-calendar"></i>
                                    </span>
                                    <input type="text" class="bootstrap-datepicker form-control" value="02/16/12" data-date-format="mm/dd/yy">
                                </div>
                            </div>
                        </div>
                          <div class="form-group">
                            <label class="col-sm-3 control-label">Remark</label>
                            <div class="col-sm-6">
                                <input type="text"  placeholder="" required class="form-control">
                            </div>
                        </div>
                          <div class="form-group">
                            <label class="col-sm-3 control-label"><label class="font-red">*</label>Rp.</label>
                            <div class="col-sm-6">
                                <input type="text" placeholder="Required Field" required class="form-control">
                            </div>
                        </div>
                       
                        
                       
                    </div>
                    
                       
                    </div>
                    
                    </div>
                    </div>
                    </div>
    </div>
    <div class="tab-pane fade" id="tab-example-4">
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
            
        </div>
        <div class="bg-default content-box text-center pad20A mrg25T">
                    <button name="sub" class="btn btn-lg btn-primary">Save</button>
                </div>
                <script>
                 $("#sub").submit(function(){
        alert("Form submitted");
    // return false;
    });
                 </script>
</form>
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

</script>


<!-- GENERAL CODE -->
<script>
   
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

<!-- Colorpicker -->

<!-- JAVASCRIPT FOR SELECT OPTION BOX -->
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
            }
            })
            }
            else
            {
                $('#kelurahan').empty();
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