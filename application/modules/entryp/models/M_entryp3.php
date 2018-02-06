	<?php 

class M_entryp3 extends CI_Model{
	 //var $tabel = 'PROSPECT';
	function __construct(){
		parent::__construct();
	}
	function getAllData(){
		$this->db->from("PROSPECT");
		return $this->db->get();
	}
	function add_admin_app($idp, $infod,$status,$reason){
		$sql1	= "INSERT INTO ADMIN_APPROVAL 
					(
						ID_ADMIN_APPROVAL,
						PROSPECT_ID,
						INFORMASI_DATA,
						STATUS,
						REASON
						
						)
					VALUES(
						'',
						'$idp',
						'$infod',
						'$status',
						'$reason'
												
						)";
		$this->db->query($sql1);
		
	}
	function rem_admin_app($idp, $infod,$status,$reason){
		$sql1	= "DELETE FROM ADMIN_APPROVAL  WHERE PROSPECT_ID ='$idp' and STATUS='$status' and REASON ='$reason'";
		$this->db->query($sql1);
		
	}
	function upd_admin_app($idp,$status_final,$light,$duplicate_value_name,$duplicate_value_phone,$duplicate_stat){
	$sql20 = "UPDATE PROSPECT  SET statusep = '$status_final', duplicatevalue_name='$duplicate_value_name', duplicatevalue_phone='$duplicate_value_phone', duplicatestatus='$duplicate_stat', LIGHT_VER='$light'  WHERE PROSPECT_ID ='$idp' ";
		$this->db->query($sql20);
		
	}
	function master_field(){
		
		//$this->db->select('ID_DISP, DISP_DESC');
		
		$admin_reject = $this->db->get('MASTER_FIELD');
		return $admin_reject->result_array();
	}

	/*function show_prospectn(){
		$this->db->from("")//
	}*/
	function get_categorydth(){		
		$this->db->order_by('DESC','ASC');
		$btp_category= $this->db->get('MASTER_BTP_CATEGORY');
		return $btp_category->result_array();
	
	}

	
	function log_admin($prospectid){
		
		$sql25 = "UPDATE PROSPECT  SET statusep = 'OnprocessAdmin'  WHERE PROSPECT_ID ='$prospectid'";
		$this->db->query($sql25);		
			
	}

	function add_data_dth($idp, $category,$sub_category){
		$sql1	= "INSERT INTO BTP_DTH 
					(
						
						IDP,
						ID_BTP_CATEGORY,
						CATEGORY,
						SUBC
						
						)
					VALUES(
						
						'$idp',
						'$category',
						'$category',
						'$sub_category'
												
						)";
		$this->db->query($sql1);
		
	}

	function get_light_verification(){
		$sql    = "SELECT * FROM MASTER_LIGHT_VERIFICATION";
		$result = $this->db->query($sql)->result_array();
		return $result;
	}

	function show_prospectn($q){
		$this->db->select('prospect_nbr');
		$this->db->like('prospect_nbr', $q);
		$query = $this->db->get('PROSPECT');
		if($query->num_rows() > 0){
		  foreach ($query->result_array() as $row){
			$row_set[] = htmlentities(stripslashes($row['prospect_nbr'])); //build an array
		  }
		  print_r($row_set);exit;
		  echo json_encode($row_set); //format the array into json data
		}
		 
	}

	function get_allpn() {
        $this->db->from("PROSPECT");
        $query = $this->db->get();
         //cek apakah ada data
        if ($query->num_rows() > 0) { //jika ada maka jalankan
            return $query->result();
        }
    }

    function updateDataEP_BFP($statusep,$prospectid,$noteadmin){
		/*$this->db->where($kondisi);
		$this->db->update('PROSPECT',$statusep);


*/	
		$sql25 = "UPDATE PROSPECT  SET statusep = 'Approve1', ADM_NOTE ='$noteadmin'   WHERE PROSPECT_ID ='$prospectid'   ";
		$this->db->query($sql25);
		//DELETE CATEGORY-SUBCATEGORY
		$sql2 = "DELETE FROM BTP_DTH  WHERE IDP ='$prospectid'   ";
		$this->db->query($sql2);
			
	}

	//reg dth
	function dataep_reg_dth(){
		$sql="SELECT  * FROM PROSPECT where (statusep='Approve1' and duplicatestatus='yes') or (statusep='Approve1' and duplicatestatus='no') or statusep='Pendingdth'   ";
		//$query=  $this->db->query($sql);
		  return $this->db->query($sql);
	}

	function dataep_r(){
		//$this->db->from("PROSPECT");
		//return $this->db->get();
		  $sql="SELECT  * FROM PROSPECT where statusep='NEW' or statusep='PENDING' or statusep='BTP' ";
		//$query=  $this->db->query($sql);
		  return $this->db->query($sql);
	}

	/*function prospect_type(){
		//$this->db->from("PROSPECT");
		//return $this->db->get();
		  $sql="SELECT  * FROM MASTER_PROSPECT_TYPE ";
		//$query=  $this->db->query($sql);
		  return $this->db->query($sql);
	}*/
	function prospect_type()
	{
		$this->db->order_by('attribute4','ASC');
		$this->db->select('LOOKUP_CODE, LOOKUP_VALUE');
		$prospect_type = $this->db->get('MASTER_APP_LOOKUP_CODE');

		return $prospect_type->result_array();
		
		/*$sql11 = "SELECT LOOKUP_CODE, LOOKUP_VALUE FROM MASTER_APP_LOOKUP_CODE WHERE lookup_type = 'CUSTTYPE' ORDER BY attribute4 ASC";
		$this->db->query($sql11);*/
	}
	function disposisi()
	{
		//$this->db->order_by('attribute4','ASC');
		$this->db->select('ID_DISP, DISP_DESC');
		$disposisi = $this->db->get('MASTER_VER_DISPOSISI_MST');

		return $disposisi->result_array();
		
		/*$sql11 = "SELECT LOOKUP_CODE, LOOKUP_VALUE FROM MASTER_APP_LOOKUP_CODE WHERE lookup_type = 'CUSTTYPE' ORDER BY attribute4 ASC";
		$this->db->query($sql11);*/
	}
	function admin_reject()
	{
		$this->db->order_by('NOTE','ASC');
		//$this->db->select('ID_DISP, DISP_DESC');
		$this->db->where('TYPE', 'R');
		$admin_reject = $this->db->get('VER_REASON_MST');
		return $admin_reject->result_array();
		/*$sql11 = "SELECT LOOKUP_CODE, LOOKUP_VALUE FROM MASTER_APP_LOOKUP_CODE WHERE lookup_type = 'CUSTTYPE' ORDER BY attribute4 ASC";
		$this->db->query($sql11);*/
	}
	function admin_approve()
	{
		$this->db->order_by('NOTE','ASC');
		$this->db->where('TYPE', 'A');
		//$this->db->select('ID_DISP, DISP_DESC');
		$admin_approve = $this->db->get('VER_REASON_MST');
		return $admin_approve->result_array();
		/*$sql11 = "SELECT LOOKUP_CODE, LOOKUP_VALUE FROM MASTER_APP_LOOKUP_CODE WHERE lookup_type = 'CUSTTYPE' ORDER BY attribute4 ASC";
		$this->db->query($sql11);*/
	}
	function admin_pending()
	{
		$this->db->order_by('NOTE','ASC');
		$this->db->where('TYPE', 'P');
		//$this->db->select('ID_DISP, DISP_DESC');
		$admin_approve = $this->db->get('VER_REASON_MST');
		return $admin_approve->result_array();
		/*$sql11 = "SELECT LOOKUP_CODE, LOOKUP_VALUE FROM MASTER_APP_LOOKUP_CODE WHERE lookup_type = 'CUSTTYPE' ORDER BY attribute4 ASC";
		$this->db->query($sql11);*/
	}
	function dataep_rw(){
		//$this->db->from("PROSPECT");
		//return $this->db->get();
		  $sql="SELECT  * FROM PROSPECT where NOT statusep='NEW' OR statusep='Pending'";
		//$query=  $this->db->query($sql);
		  return $this->db->query($sql);
	}
	function dataep_r_rev(){
		//$this->db->from("PROSPECT");
		//return $this->db->get();
		  $sql="SELECT  * FROM PROSPECT where statusep='REVISI' ";
		//$query=  $this->db->query($sql);
		  return $this->db->query($sql);
	}
	function getDataep($id)
	{
		/*$this->db->where('PROSPECT_ID',$id);
		$this->db->select('*');
		$this->db->from('PROSPECT');
		return $this->db->get();*/
	//	$sql="SELECT  * FROM PROSPECT where PROSPECT_ID='$id'";
		$sql="SELECT *	FROM PROSPECT 
INNER JOIN PROSPECT_ADDITIONAL 
ON PROSPECT.PROSPECT_ID=PROSPECT_ADDITIONAL.PROSPECT_ID 
INNER JOIN PROSPECT_ADDRESS 
ON PROSPECT.PROSPECT_ID=PROSPECT_ADDRESS.PROSPECT_ID 
WHERE PROSPECT.PROSPECT_ID = '$id'";
		return $this->db->query($sql);
		//select buku berdasarkan id yang dimiliki
	}
	function getDatabtp($id)
	{
		/*$this->db->where('PROSPECT_ID',$id);
		$this->db->select('*');
		$this->db->from('PROSPECT');
		return $this->db->get();*/
		//$sql="SELECT  * FROM BTP_DTH where IDP='$id'";
		$sql="SELECT BTP_DTH.IDBTP, MASTER_BTP_CATEGORY.DESC, BTP_DTH.SUBC
				FROM BTP_DTH
				INNER JOIN MASTER_BTP_CATEGORY
				ON BTP_DTH.ID_BTP_CATEGORY=MASTER_BTP_CATEGORY.ID_BTP_CATEGORY
				WHERE IDP ='$id'";
       
		/*$sql= "SELECT BTP_DTH.IDBTP, MASTER_BTP_CATEGORY.DESC 
				FROM BTP_DTH 
				INNER JOIN MASTER_BTP_CATEGORY 
				ON BTP_DTH.ID_BTP_CATEGORY=MASTER_BTP_CATEGORY.ID_BTP_CATEGORY"; */       
		return $this->db->query($sql);
		//select buku berdasarkan id yang dimiliki
	}
	function getDatabtpe($id)
	{
		/*$this->db->where('PROSPECT_ID',$id);
		$this->db->select('*');
		$this->db->from('PROSPECT');
		return $this->db->get();*/
		//$sql="SELECT  * FROM BTP_DTH where IDP='$id'";
		/*$sql="SELECT BTP_DTH.IDBTP, MASTER_BTP_CATEGORY.DESC, BTP_DTH.SUBC
				FROM BTP_DTH
				INNER JOIN MASTER_BTP_CATEGORY
				ON BTP_DTH.ID_BTP_CATEGORY=MASTER_BTP_CATEGORY.ID_BTP_CATEGORY
				WHERE IDP ='$id'";*/
       $sql    = "	SELECT BTP_DTH.IDBTP, MASTER_BTP_CATEGORY.DESC, BTP_DTH.SUBC
				FROM BTP_DTH
				INNER JOIN MASTER_BTP_CATEGORY
				ON BTP_DTH.ID_BTP_CATEGORY=MASTER_BTP_CATEGORY.ID_BTP_CATEGORY
				WHERE IDP ='$id'";
	
		$result = $this->db->query($sql)->result_array();
		
		return $result;
		/*$sql= "SELECT BTP_DTH.IDBTP, MASTER_BTP_CATEGORY.DESC 
				FROM BTP_DTH 
				INNER JOIN MASTER_BTP_CATEGORY 
				ON BTP_DTH.ID_BTP_CATEGORY=MASTER_BTP_CATEGORY.ID_BTP_CATEGORY"; */       
		//return $this->db->query($sql);
		//select buku berdasarkan id yang dimiliki
	}


	function updateDataEP_DTD($statusep,$prospectid,$actid,$duplicate_value_name,$duplicate_value_phone,$duplicate_stat,$light,$Type1,$Type2,$Type3,$Type4,$Approve1,$Approve2,$Approve3,$Approve4,$Reject1,$Reject2,$Reject3,$Reject4){
		/*$this->db->where($kondisi);
		$this->db->update('PROSPECT',$statusep);


*/	
		$sql20 = "UPDATE PROSPECT  SET statusep = '$statusep', actid='$actid', duplicatevalue_name='$duplicate_value_name', duplicatevalue_phone='$duplicate_value_phone', duplicatestatus='$duplicate_stat', LIGHT_VER='$light'  WHERE PROSPECT_ID ='$prospectid'   ";
		$this->db->query($sql20);
		$sql1	= "INSERT INTO VER_VAL_SALES 
					(
						PROSPECT_ID,
						STATUSEP,
						CREATED_DATE,
						CREATED_BY,
						LIGHT_VER,
						TYPE1,
						TYPE2,
						TYPE3,
						TYPE4,
						NOTE1,
						NOTE2,
						NOTE3,
						NOTE4
						
						)
					VALUES(
						'$prospectid',
						'$statusep',
						NOW(),
						'CODOTS',
						'$light',
						'$Type1',
						'$Type2',
						'$Type3',
						'$Type4',
						'$Approve1$Reject1',
						'$Approve2$Reject2',
						'$Approve3$Reject3',
						'$Approve4$Reject4'
						
						)";
		$this->db->query($sql1);
		
	}
	

	function updateDataEP_Reg_dth($statusep,$prospectid,$dthnote){
		/*$this->db->where($kondisi);
		$this->db->update('PROSPECT',$statusep);


*/	
		$sql21 = "UPDATE PROSPECT  SET DTH_NOTE='$dthnote', statusep = '$statusep'  WHERE PROSPECT_ID ='$prospectid'   ";
		$this->db->query($sql21);
	}

/*function getData($prosNbr){
		$sql    = "	SELECT *
					  FROM $this->tblBtpBfp
					 WHERE prospect_nbr = '$prosNbr'";
	
		$result = $this->db->query($sql)->result_array();
		
		return $result;
	}
*/	 

	

		
	function DTDaddDataProspect($sales_channel,$prospect_nbr,$prospect_type,$hardware_status,$sgs_number,$sgs_name,$id_type,$id_number,$first_name,$middle_name,$last_name,$gender,$religion,$place_birth,$fulldate,$pln_id,$home_phone,$mobile_phone,$fullexpireddate,$email,$house_type,$house_status,$occupation,$income,$address_idcard,$province_idcard,$city_idcard,$district_idcard,$subdistrict_idcard,$zipcode_idcard,$address_installation,$direction_installation,$province_installation,$city_installation,$district_installation,$subdistrict_installation,$zipcode_installation,$address_billing,$province_billing,$city_billing,$district_billing,$subdistrict_billing,$zipcode_billing,$emergency_name,$emergency_sibling,$emergency_phone,$emergency_address,$sales_nik,$sales_name,$sales_differentcauses,$sales_officebranch,$ENTITYCODE,$POS,$STOREAREA,$order_date,$payment_method,$full_file_path,$processid,$activityid ){
		/*$this->db->insert('PROSPECT',$prospect);
		$this->db->insert('PROSPECT_ADDRESS',$address);
		$this->db->insert('PROSPECT_CONTRACT',$contract);
		$this->db->insert('PROSPECT_ADDITIONAL',$additional);*/
		$sql1	= "INSERT INTO PROSPECT 
					(
						PROSPECT_ID,
						CATEGORY,
						PROSPECT_NBR,
						PROSPECT_TYPE,
						ID_TYPE,
						ID_NUMBER,
						FIRST_NAME,
						MIDDLE_NAME,
						LAST_NAME,
						PLN_ID,
						EXPIRED_DATE,
						EMAIL,
						OCCUPATION,
						INCOME,



						
						CREATED_DATE,
						TITLE,
						processId,
						actid,
						
						statusep
						
						)
					VALUES(
						'',
						'$sales_channel',
						'$prospect_nbr',
						'$prospect_type',
						'$id_type',
						'$id_number',
						'$first_name',
						'$middle_name',
						'$last_name',
						'$pln_id',
						STR_TO_DATE('$fullexpireddate', '%d/%m/%Y'),
						'$email',
						'$occupation',
						'$income',



						NOW(),
						'$full_file_path',
						'$processid',
						'$activityid',
						
						'NEW'
						
						)";
		$this->db->query($sql1);
		$fk_id	= $this->db->insert_id();
		$sql2	= "INSERT INTO PROSPECT_ADDITIONAL 
					(PROSPECT_ID,
						STATUS_HW,
						SGS_NUMBER,
						SGS_NAME,
						GENDER,
						RELIGION,
						PLACE_BIRTH,
						DATE_OF_BIRTH,
						PHONE_NBR,
						HANDPHONE_NBR,
						EC_NAME,
						EC_RELATION,
						EC_PHONE,
						EC_ADDR,
						NIK_SALES,
						NAME_SALES,
						DIFFERENT_CAUSE,
						SALES_CODE,
						OFFICE_BRANCH,
						HEAD_BRANCH,
						ENTITY_CODE,
						POS,
						STORE_AREA,




						ID_NUMBER
						
						)
					VALUES(
						'$fk_id',
						'hardware_status',
						'$sgs_number',
						'$sgs_name',
						'$gender',
						'$religion',
						'$place_birth',
						STR_TO_DATE('$fulldate', '%d/%m/%Y'),
						'$home_phone',
						'$mobile_phone',
						'$emergency_name',
						'$emergency_sibling',
						'emergency_phone',
						'$emergency_address',
						'$sales_nik',
						'$sales_name',
						'$sales_differentcauses',
						'$sales_officebranch',
						'$sales_namebranchhead',
						'$ENTITYCODE',
						'$POS',
						'$STOREAREA',



						'$id_number'
						
						)";


		$this->db->query($sql2);
		$sql3	= "INSERT INTO PROSPECT_ADDRESS
					(
						ADDRESS_ID,
						PROSPECT_ID,
						BUILDING_TYPE,
						BUILDING_STATUS,
						STREET,
						PROVINCE,
						CITY,
						DISTRICT,
						RT,
						POSTALCODE,
						INSTALLATION_ADDRESS,
						DIRECTIONS,
						INSTALLATION_PROVINCE,
						INSTALLATION_CITY,
						INSTALLATION_DISTRICT,
						INSTALLATION_SUBDISTRICT,
						INSTALLATION_ZIPCODE,
						BILLING_ADDRESS,
						BILLING_PROVINCE,
						BILLING_CITY,
						BILLING_DISTRICT,
						BILLING_SUBDISTRICT,
						BILLING_ZIPCODE
										
						)
					VALUES(
						'',
						'$fk_id',
						'$house_type',
						'$house_status',
						'$address_idcard',
						'$province_idcard',
						'$city_idcard',
						'$district_idcard',
						'$subdistrict_idcard',
						'$zipcode_idcard',
						'$address_installation',
						'$direction_installation',
						'$province_installation',
						'$city_installation',
						'$district_installation',
						'$subdistrict_installation',
						'$zipcode_installation',
						'$address_billing',
						'$province_billing',
						'$city_billing',
						'$district_billing',
						'$subdistrict_billing',
						'$zipcode_billing'
										
						)";
		$this->db->query($sql3);
		$sql4	= "INSERT INTO PROSPECT_ADDRESS_OLD
					(ADDRESS_ID,
						PROSPECT_ID,
						ZIP_CODE						
						)
					VALUES(
						'$fk_id',
						'$fk_id',
						'$zip_code'
											
						)";
		$this->db->query($sql4);
		$sql5	= "INSERT INTO PROSPECT_SERVICE_ORDER
					(ORDER_ID,
						ORDER_DATE						
						)
					VALUES(
						'$fk_id',
						'$order_date'
											
						)";
		$this->db->query($sql5);
		$sql6	= "INSERT INTO PROSPECT_PAYMENT
					(PAYMENT_ID,
						PAYMENT_MODE						
						)
					VALUES(
						'$fk_id',
						'$payment_method'
											
						)";
		$this->db->query($sql6);


 /*str_to_date('$date_of_birth', '%m/%d/%Y'),*/
	}
	/*function DTDaddDataNotesP($data1){
		$this->db->insert('NOTES_PROSPECT',$data1);
	}
	function DTDaddDataAddress($data2){
		$this->db->insert('PROSPECT_ADDRESS',$data2);
	}
	*/
	
	//GET DATA PROMOTION
	function promotion()
	{
		
		$this->db->order_by('promotion_desc','ASC');
		$promotions = $this->db->get_where('VAL_MST_PROMO',array('is_active'=>"1"));

		return $promotions->result_array();
	}
	
	//GET DATA PROMOTION
	function salesMS()
	{
		$this->db->order_by('ms_store','ASC');
		$promotions = $this->db->get('VAL_MST_SALES_MS');

		return $promotions->result_array();
	}

	//GET DATA PRODUCT
	function product()
	{
		$this->db->group_by('bundle_code');

		$products = $this->db->get_where('VAL_PRODUCT_PRICE',array('type'=>"Basic"));

		return $products->result_array();
	}

	

	//GET DATA DROPDOWN LIST
	//DROPDOWN CALL MODEL
	function provinsi() {	
		$this->db->order_by('province_name','ASC');
		$provinces= $this->db->get('MASTER_PROVINCES');

		return $provinces->result_array();
	}
	//GET DATA DROPDOWN LIST
	//DROPDOWN BRANCH
	function branch()
	{
		$this->db->order_by('BRANCH','ASC');
		$branch = $this->db->get('SMS_BRANCH');

		return $branch->result_array();
	}

	//GET DATA SALES CHANNEL
	function sales_channel()
	{
		$sales_channel = $this->db->get('SMS_M_SALES_CHANNEL');

		return $sales_channel->result_array();	
	}

	//GET DATA DROPDOWN BRAND
	function brand()
	{
		$this->db->order_by('BRAND_NAME','ASC');
		$brand = $this->db->get('SMS_M_BRAND');

		return $brand->result_array();	
	}

	//
	function get_subcategorydth($idcategory){

		$subc="<option value='0'>select</pilih>";
		$this->db->order_by('ID','ASC');
		$sub= $this->db->get_where('MASTER_BTP_SUBC',array('ID_BTP_CATEGORY'=>$idcategory));
		foreach ($sub->result_array() as $data ){
		$subc.= "<option value='$data[DESC]'>$data[DESC]</option>";
		}
		return $subc;

	}
	//

	function kota($provId){

		$kota="<option value='0'>--pilih--</pilih>";

		$this->db->order_by('city_name','ASC');
		$kab= $this->db->get_where('MASTER_CITY',array('province_id'=>$provId));

		foreach ($kab->result_array() as $data ){
		$kota.= "<option value='$data[city_id]'>$data[city_name]</option>";
		}

		return $kota;

	}

	function kecamatan($kabId){
		$kecamatan="<option value='0'>--pilih--</pilih>";

		$this->db->order_by('district_name','ASC');
		$kec= $this->db->get_where('MASTER_DISTRICTS',array('city_id'=>$kabId));

		foreach ($kec->result_array() as $data ){
		$kecamatan.= "<option value='$data[district_id]'>$data[district_name]</option>";
		}

		return $kecamatan;
	}

	function kelurahan($kecId){
		$kelurahan="<option value='0'>--pilih--</pilih>";

		$this->db->order_by('subdistrict_name','ASC');
		$kel= $this->db->get_where('MASTER_SUBDISTRICTS',array('district_id'=>$kecId));

		foreach ($kel->result_array() as $data ){
		$kelurahan.= "<option value='$data[subdistrict_id]'>$data[subdistrict_name]</option>";
		}

		return $kelurahan;
	}

	function alacarte($bundleId)
	{
		$alacarte="<option value=''>--pilih--</pilih>";

		$prod_alacarte = $this->db->get_where('M_PACKAGE_PRODUCTS',array('bundle_id'=>$bundleId));

		foreach ($prod_alacarte->result_array() as $data ){
		$alacarte.= "<option value='$data[service_id]'>$data[service_name]</option>";
		}

		return $alacarte;
	}


	function SaveDataUploaded($name,$file_category,$type,$final_path,$prospect_nbr,$uploadedby)
	{
		//var_dump("'$prospect_nbr', '$uploadedby',"); exit;

		$sql1	= "INSERT INTO MASTER_PROSPECT_UPLOAD 
					(
						P_FILE_NAME,
						P_FILE_CATEGORY,
						P_FILE_TYPE,
						P_FILE_PATH,
						P_FILE_PROSPECT_NUMBER,
						P_FILE_DESCRIPTION,
						P_FILE_UPLOADBY						
						)
					VALUES(

						'$name',
						'$file_category',
						'$type',
						'$final_path',
						'$prospect_nbr',
						null,
						'yhidayat')";
		$this->db->query($sql1);
						var_dump($sql1);exit;
	}
	
/* 	function getDataHW(){
	
			$sql =  "SELECT * FROM PROSPECT_ENTRY_HARDWARE";
			$query=  $this->db->query($sql);
			$rows  = $query->result_array();		
			$result['status'] = 1;
        
        if(!$query){
			$result['status'] = 0;
			$result['message']='Data tidak ditemukan.';
		}else{
            $result['data'] = $rows;
        }
			echo json_encode($result,TRUE);	
	} */
	
	
		function getDataHW(){
		$this->db->from("INV_V_PACKAGE_TEMPLATE");
		return $this->db->get();
	} 
	
	
	function getDataHW3(){
	
			$sql =  "SELECT * FROM INV_V_PACKAGE_TEMPLATE  WHERE PACKAGE_TYPE_ID =  2";
			$query=  $this->db->query($sql);
			$rows  = $query->result_array();		
			$result['status'] = 1;
        
        if(!$query){
			$result['status'] = 0;
			$result['message']='Data tidak ditemukan.';
		}else{
            $result['data'] = $rows;
        }
			echo json_encode($result,TRUE);	
	}
	
	function getDataHW2($id_combo){ 
		 	$sql =  "SELECT * FROM INV_V_PACKAGE_TEMPLATE  WHERE PACKAGE_TYPE_ID = $id_combo ORDER BY ITEM_DESCR ";
			$query=  $this->db->query($sql);
			$rows  = $query->result_array();		
			$result['status'] = 1;
        
        if(!$query){
			$result['status'] = 0;
			$result['message']='Data tidak ditemukan.';
		}else{
            $result['data'] = $rows;
        }
			echo json_encode($result,TRUE);	 
	} 
	 
	function getTemplate()
    {
        $html = '';
		$sql 	= "SELECT  PACKAGE_TYPE_ID,PACKAGE_TYPE_DESC FROM  INV_PACKAGE_M_TYPE WHERE PACKAGE_TYPE_ID IN (1,2,6,26,34,36,38,46,47) ORDER BY PACKAGE_TYPE_DESC DESC";
     //   $sql="SELECT  PACKAGE_TYPE_ID,PACKAGE_TYPE_DESC FROM  INV_PACKAGE_M_TYPE ORDER BY PACKAGE_TYPE_DESC";
		$query=  $this->db->query($sql);
         $html = "<option value='0'>Select Package Type</option>";
        if ($row = $query->result_array()) {
            //$result["organization_id"] = 1;
            foreach ($row as $r) {
               // var_dump($r);
				$html .= '<option value="' . $r['PACKAGE_TYPE_ID'] . '">' . $r['PACKAGE_TYPE_DESC'] .'</option>';
            }
        }        
        $result["html"] = $html;
		echo json_encode($result,TRUE);
    }

	function getSearchHW($prospect_nbr){
	
			$sql =  "SELECT B.ITEM_DESCR, A.ITEM_ID,A.SERIAL_NUMBER,A.PROSPECT_NBR  FROM INV_SFL_HW A , ITEM_MASTER B
							WHERE A.ITEM_ID = B.ITEM_ID
							AND A.PROSPECT_NBR = '$prospect_nbr'  ORDER BY B.ITEM_DESCR";
			//var_dump($sql);exit;
			$query=  $this->db->query($sql);
			$rows  = $query->result_array();		
			$result['status'] = 1;
        
        if(!$query){
			$result['status'] = 0;
			$result['message']='Data tidak ditemukan.';
		}else{
            $result['data'] = $rows;
        }
			echo json_encode($result,TRUE);	
	}

	function SaveEntryHW($prospect_number,$item_id,$serial_number,$sales_code){	
	 
		$result['status']  = "OK";
		$result['success'] = TRUE;
		$result['message'] = 'Save Success !';
		$err=""; 
		
	 
		$arritem_id 						= explode(';',$item_id);
		$arrSerialNumber 			= explode(';',$serial_number);
		
		try{
			if (count($arritem_id) > 1 ) {
				for ($i = 0; $i < count($arritem_id); $i++) {
					$arr_item_id 		=  explode('-',$arritem_id[$i]);
					$maxarr	 	 		= count($arr_item_id);
					$item_id 		 	   = $arr_item_id[$maxarr-1];
					$serial_number   = $arrSerialNumber[$i];
						
				//	$sql_statment = "CALL PRC_INV_UPD_SFL_HW_NEW('$sales_code','$serial_number','$prospect_number','F');";
					//var_dump($sql);exit;
										
						//	 try{				 
									 $sql = "CALL PRC_INV_UPD_SFL_HW_NEW('$sales_code','$serial_number','$prospect_number','F');";
															var_dump( $sql);exit;
															
															/*(IN pSfl_Code VARCHAR(6),
											   IN pSerial_Nbr VARCHAR(32),
											   IN pProspect_Nbr VARCHAR(16),
											   IN pStatus VARCHAR(1)) */
																				 
							$sql   = str_replace(chr(92),"",$sql);	
							$this->db->query($sql);	 
							$stat=1;
							$result['status'] = 1;			
						
							$result['err']='Save Success.';
							//}catch (Exception $e) {                   
							//		   $result = array("status" => 0, "error" => $e->getMessage());
									  // Zend_Registry::get('db')->rollBack();
									  // $result['err']="Insert Failed"; 
						//	}		 	
				//	echo json_encode($result,TRUE); 

				}
			} 
		}catch (Exception $e) {                   
		   $result = array("status" => 0, "error" => $e->getMessage());
		  // Zend_Registry::get('db')->rollBack();
		   $result['err']="Insert Failed"; 
		} 
		echo json_encode($result,TRUE);
	
	}


	function checkHW($item_id,$serial_number,$sales_code)
    {
        $html = '';
        $sql="SELECT F_INV_CHECK_HW('$serial_number','$sales_code',$item_id) RESULT  FROM DUAL";
		//var_dump(  $sql);exit;
		$query=  $this->db->query($sql);
        if ($row = $query->result_array()) {
            //$result["organization_id"] = 1;
			$result["msg"] = $row[0]['RESULT'];
        }        
		echo json_encode($result,TRUE);
    }	
	
	

	


}
?>