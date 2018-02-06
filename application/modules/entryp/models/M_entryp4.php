	<?php 

class M_entryp4 extends CI_Model{
	 //var $tabel = 'PROSPECT';
	function __construct(){
		parent::__construct();
		$this->load->library(array('DX_Auth'));
	}
	function getAllData(){
		$this->db->from("PROSPECT");
		return $this->db->get();
	}

	//retrieval approval TK
	function data_apptl(){
		//$this->db->from("PROSPECT");
		//return $this->db->get();
		  $sql="SELECT  * FROM PROSPECT where statusep='Approvetl' ";
		//$query=  $this->db->query($sql);
		  return $this->db->query($sql);
	}
	//
	//function entry hw
	function getSearchHW($id){
	
			/*$sql =  "SELECT B.ITEM_DESCR, A.ITEM_ID,A.SERIAL_NUMBER,A.PROSPECT_NBR  FROM INV_SFL_HW A , ITEM_MASTER B
							WHERE A.ITEM_ID = B.ITEM_ID
							AND A.PROSPECT_NBR = '$prospect_nbr'  ORDER BY B.ITEM_DESCR";*/
				$sql =		"SELECT C.PROSPECT_ID, B.ITEM_DESCR, A.ITEM_ID,A.SERIAL_NUMBER,A.PROSPECT_NBR  FROM INV_SFL_HW A , ITEM_MASTER B, PROSPECT C
							WHERE A.ITEM_ID = B.ITEM_ID
							AND A.PROSPECT_NBR = C.PROSPECT_NBR
							AND C.PROSPECT_ID = '$id'  ORDER BY B.ITEM_DESCR";
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
	//
	//dth verificaiton
	function DTH_EDIT($prospectid,$dthnote,$AGREEMENT,$FNAME,$MNAME,$LNAME,$mobilep,$extrap,$mainp,$ADDRESS,$PROVINCE,$CITY,$DISTRICT,$SUBDISTRICT,$ZIPCODE,$INSTALL_ADDRESS,$INSTALL_LANDMARK,$PROVINCE_INSTALL,$CITY_INSTALL,$DISTRICT_INSTALL,$SUBDISTRICT_INSTALL,$ZIPCODE_INSTALL,$INSTALL_ADDRESSbilling,$INSTALL_LANDMARKbilling,$PROVINCE_BILLING,$CITY_BILLING,$DISTRICT_BILLING,$SUBDISTRICT_BILLING,$ZIPCODE_BILLING,$EMERGENCY_NAME,$E_SIBLING,$E_PHONE,$E_ADDRESS,$PAYMENT_PERIOD,$PACKAGE_BRAND,$PACKAGE_STATUS,$PROMO,$PACKAGE_BASIC,$PACKAGE_ALACARTE){
		$sql1	= "INSERT INTO DTH_EDIT 
					(

						ID_DTH_EDIT,
						PROSPECT_ID,
						AGREEMENT,
						FIRSTNAME_V,
						MIDDLENAME_V,
						LASTNAME_V,
						MOBILE_PHONE_V,
						EXTRA_PHONE,
						MAIN_PHONE_V,
						ADDRESS_V,
						PROVINCE_V,
						CITY_V,
						KECAMATAN_V,
						KELURAHAN_V,
						ZIPCODE_V,
						INSTALL_ADDRESS_V,
						INSTALL_PROVINCE_V,
						INSTALL_DIRECTION_V,
						INSTALL_CITY_V,
						INSTALL_KECAMATAN_V,
						INSTALL_KELURAHAN_V,
						INSTALL_ZIPCODE_V,
						BILLING_ADDRESS_V,
						BILLING_DIRECTION_V,
						BILLING_PROVINCE_V,
						BILLING_CITY_V,
						BILLING_KECAMATAN_V,
						BILLING_KELURAHAN_V,
						BILLING_ZIPCODE_V,
						E_NAME_V,
						E_SIBLING_V,
						E_PHONE_V,
						E_ADDRESS_V,
						BRAND_V,
						STATUS_V,
						PROMO_V,
						BASIC_V,
						ALACARTE_V
						
						
						
						)
					VALUES(
						
						'',
						'$prospectid',
						'$AGREEMENT',
						'$FNAME',
						'$MNAME',
						'$LNAME',
						'$mobilep',
						'$extrap',
						'$mainp',
						'$ADDRESS',
						'$PROVINCE',
						'$CITY',
						'$DISTRICT',
						'$SUBDISTRICT',
						'$ZIPCODE',
						'$INSTALL_ADDRESS',
						'$INSTALL_LANDMARK',
						'$PROVINCE_INSTALL',
						'$CITY_INSTALL',
						'$DISTRICT_INSTALL',
						'$SUBDISTRICT_INSTALL',
						'$ZIPCODE_INSTALL',
						'$INSTALL_ADDRESSbilling',
						'$INSTALL_LANDMARKbilling',
						'$PROVINCE_BILLING',
						'$CITY_BILLING',
						'$DISTRICT_BILLING',
						'$SUBDISTRICT_BILLING',
						'$ZIPCODE_BILLING',

						'$EMERGENCY_NAME',
						'$E_SIBLING',
						'$E_PHONE',
						'$E_ADDRESS',
						
						'$PACKAGE_BRAND',
						'$PACKAGE_STATUS',
						'$PROMO',
						'$PACKAGE_BASIC',
						'$PACKAGE_ALACARTE'
												
						)";
		$this->db->query($sql1);
			$sql25 = "UPDATE PROSPECT  SET statusep = 'Approvetl' , DTH_NOTE ='$dthnote'  WHERE PROSPECT_ID ='$prospectid'";
		$this->db->query($sql25);	
		
	}
	//log TL
	function log_tl($prospectid){
		
		$sql25 = "UPDATE PROSPECT  SET statusep = 'OnprocessTL'  WHERE PROSPECT_ID ='$prospectid'";
		$this->db->query($sql25);		
			
	}
	//data TL
	function data_tl($id)
	{
		/*$this->db->where('PROSPECT_ID',$id);
		$this->db->select('*');
		$this->db->from('PROSPECT');
		return $this->db->get();*/
	//	$sql="SELECT  * FROM PROSPECT where PROSPECT_ID='$id'";
		$sql="SELECT *	FROM PROSPECT 
		INNER JOIN DTH_EDIT 
		ON PROSPECT.PROSPECT_ID=DTH_EDIT.PROSPECT_ID 
		
		WHERE PROSPECT.PROSPECT_ID = '$id'";
		return $this->db->query($sql);
		
	}
	//
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
	function rem_dth_app($idp, $category,$subcategory){
		$sql1	= "DELETE FROM BTP_DTH  WHERE IDP ='$idp' and SUBC='$subcategory' and CATEGORY ='$category'";
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
	function log_dth($prospectid){
		
		$sql25 = "UPDATE PROSPECT  SET statusep = 'OnprocessDTH'  WHERE PROSPECT_ID ='$prospectid'";
		$this->db->query($sql25);		
			
	}

	function log_kacab($prospectid){
		
		$sql25 = "UPDATE PROSPECT  SET statusep = 'OnprocessKacab'  WHERE PROSPECT_ID ='$prospectid'";
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

	function dataep_k(){
		//$this->db->from("PROSPECT");
		//return $this->db->get();
		  $sql="SELECT  * FROM PROSPECT where statusep='Approve2' or statusep='Reject'";
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
		INNER JOIN PROSPECT_PACKAGE_ORDER 
		ON PROSPECT.PROSPECT_ID=PROSPECT_PACKAGE_ORDER.PROSPECT_ID 
		INNER JOIN PROSPECT_COST 
		ON PROSPECT.PROSPECT_ID=PROSPECT_COST.PROSPECT_ID
		INNER JOIN PROSPECT_PAYMENT 
		ON PROSPECT.PROSPECT_ID=PROSPECT_PAYMENT.PROSPECT_ID
		INNER JOIN PROSPECT_ENTRY_HARDWARE 
		ON PROSPECT.PROSPECT_ID=PROSPECT_ENTRY_HARDWARE.PROSPECT_ID
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

	

		
	function DTDaddDataProspect($sales_channel,$form_number,$prospect_nbr,$prospect_type,$hardware_status,$sgs_number,$sgs_name,$id_type,$id_number,$first_name,$middle_name,$last_name,$gender,$religion,$place_birth,$fulldate,$pln_id,$home_phone,$mobile_phone,$fullexpireddate,$email,$house_type,$house_status,$occupation,$income,$address_idcard,$province_idcard,$city_idcard,$district_idcard,$subdistrict_idcard,$zipcode_idcard,$address_installation,$direction_installation,$province_installation,$city_installation,$district_installation,$subdistrict_installation,$zipcode_installation,$address_billing,$province_billing,$city_billing,$district_billing,$subdistrict_billing,$zipcode_billing,$emergency_name,$emergency_sibling,$emergency_phone,$emergency_address,$sales_nik,$sales_code,$sales_name,$sales_differentcauses,$sales_officebranch,$ENTITYCODE,$POS,$STOREAREA,$order_date,$full_file_path,$processid,$activityid,
																																				$package_status,
																																				$package_brand,
																																				$package_promo,
																																				$package_basic,
																																				$package_alacarte,
																																				$payment_period,

																																								$payment_method,
																																								$card_type,
																																								$card_number,
																																								$name_akun,
																																								$expired_date_month,
																																								$expired_date_year,
																																								$payment_date,
																																								$payment_remark
 		) 
	{
		/*$this->db->insert('PROSPECT',$prospect);
		$this->db->insert('PROSPECT_ADDRESS',$address);
		$this->db->insert('PROSPECT_CONTRACT',$contract);
		$this->db->insert('PROSPECT_ADDITIONAL',$additional);*/
		//var_dump($package_alacarte);exit;
			
		$sql_prospect	= "INSERT INTO PROSPECT 
					(
						PROSPECT_NBR,
						SALESC,
						FORMN,
						PROSPECT_TYPE,
						FIRST_NAME,
						MIDDLE_NAME,
						LAST_NAME,
						HOME_PHONE,
						MOBILE_PHONE,
						EMAIL,
						OPENTITY_ID,
						PLN_ID,
						ID_TYPE,
						IDTYPE_NUMBER,
						EXP_DATE,
						OCCUPATION,
						INCOME,
						CREATED_DATE,
						processId,
						actid,
						statusep
						

						)
					VALUES(
						
						'$prospect_nbr',
						'$sales_channel',
						'$form_number',
						'$prospect_type',
						'$first_name',
						'$middle_name',
						'$last_name',
						'$home_phone',
						'$mobile_phone',
						'$email',
						'$ENTITYCODE',
						'$pln_id',
						'$id_type',
						'$id_number',
						STR_TO_DATE('$fullexpireddate', '%d/%m/%Y'),
						'$occupation',
						'$income',
						NOW(),
						'$processid',
						'$activityid',
						'NEW'

						)";
		

		$this->db->query($sql_prospect);
		$fk_id	= $this->db->insert_id();
		$sql_prospect_additional	= "INSERT INTO PROSPECT_ADDITIONAL 
					(	
						PROSPECT_ID,
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
						'$sales_code',
						'$sales_officebranch',
						'$sales_namebranchhead',
						'$ENTITYCODE',
						'$POS',
						'$STOREAREA',
						'$id_number'
						
						)";


		$this->db->query($sql_prospect_additional);
		$sql_prospect_address	= "INSERT INTO PROSPECT_ADDRESS
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
		$this->db->query($sql_prospect_address);
		$sql_prospect_address_old	= "INSERT INTO PROSPECT_ADDRESS_OLD
					(ADDRESS_ID,
						PROSPECT_ID,
						ZIP_CODE						
						)
					VALUES(
						'$fk_id',
						'$fk_id',
						'$zip_code'
											
						)";
		$this->db->query($sql_prospect_address_old);
		$sql5	= "INSERT INTO PROSPECT_SERVICE_ORDER
					(ORDER_ID,
						ORDER_DATE						
						)
					VALUES(
						'$fk_id',
						'$order_date'
											
						)";
		$this->db->query($sql5);
		/*$sql6	= "INSERT INTO PROSPECT_PAYMENT
					(PAYMENT_ID,
						PAYMENT_MODE						
						)
					VALUES(
						'$fk_id',
						'$payment_method'
											
						)";
		$this->db->query($sql6);*/

		$sql_package_order = "INSERT INTO PROSPECT_PACKAGE_ORDER
							(
								PROSPECT_ID,
								BRAND,
								STATUS,
								AVAILABLE_PROMO,
								BASIC,
								ALACARTE,
								BILLING_FREQUENCY							
							)
							VALUES
							(
								'$fk_id',
								'$package_brand',
								'$package_status',
								'$package_promo',
								'$package_basic',
								'$package_alacarte',
								'$payment_period'
									
							)";
		
		$this->db->query($sql_package_order);

		$sql_prospect_payment = "INSERT INTO PROSPECT_PAYMENT
							(
								PAYMENT_DATE,
								PROSPECT_ID,
								PAYMENT_MODE,
								CURRENCY_CODE,
								AMOUNT,
								NOTES,
								ACCOUNT_NAME,
								CARD_TYPE,
								CARD_NUMBER,
								EXP_DATE

							)
							VALUES
							(
								'$payment_date',
								'$fk_id',
								'$payment_method',
								'IDR',
								'20000',
								'$payment_remark',
								'$name_akun',
								'$card_type',
								'$card_number',
								'$expired_date_month'	
							)";
		$this->db->query($sql_prospect_payment);

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
		$fdtd = $this->dx_auth->is_allow_ext('fdtd');
		//var_dump($fdtd);exit;
		//$this->db->where('is_active', '1');
		if ($fdtd) {
			 //$this->db->where("SALES_CHANNEL_DESCR",'DTD');
			//var_dump($test);exit;
			$sales_channel= $this->db->get_where('SMS_M_SALES_CHANNEL',array('SALES_CHANNEL_DESCR'=>'DTD'));
		}
		//$sales_channel  =  $this->db->get("SMS_M_SALES_CHANNEL");		
		
		$sales_channel_result  = $sales_channel->result_array();
		return $sales_channel_result;
		//var_dump($sales_channel_result);exit;
/*	
		$kota="<option value='0'>--pilih--</pilih>";

		$this->db->order_by('city_name','ASC');
		$kab= $this->db->get_where('MASTER_CITY',array('province_id'=>$provId));

		foreach ($kab->result_array() as $data ){
		$kota.= "<option value='$data[city_id]'>$data[city_name]</option>";
		}

		return $kota;*/	
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

	function basic($bundleId)
	{
		$basic="<option value=''>--pilih--</pilih>";

		$prod_basic = $this->db->get_where('VAL_PRODUCT_PRICE',array('brand'=>$bundleId));

		foreach ($prod_basic->result_array() as $data ){
		$basic.= "<option value='$data[bundle_id]'>$data[bundle_name]</option>";
		}

		return $basic;
	}

	function alacarte($bundleId)
	{
		$alacarte="<option value=''>--pilih--</pilih>";

		$prod_alacarte = $this->db->get_where('VAL_PRODUCT_PRICE',array('bundle_id'=>$bundleId));

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
						
	}
	
	function getDataHW(){
	
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
	}


	


}
?>