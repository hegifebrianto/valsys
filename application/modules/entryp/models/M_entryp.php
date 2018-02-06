	<?php 

class M_entryp extends CI_Model{
	 //var $tabel = 'PROSPECT';
	function __construct(){
		parent::__construct();
	}
	function getAllData(){
		$this->db->from("PROSPECT");
		return $this->db->get();
	}

	


	function cust_dupcek($idp,$pn, $DUPL_ID, $FIELD_NAME, $FIELD_VALUE, $DUPL_VALUE){
		$sql1	= "INSERT INTO PROSPECT_DUPLCEK 
					(
						PROSPECT_ID,
						PROSPECT_NBR,
						DUPL_ID,
						FIELD_NAME,
						FIELD_VALUE,
						TYPE_DUPLICATION,
						DUPL_VALUE						
						)
					VALUES(
						'$idp',
						'$pn',
						'$DUPL_ID',
						'$FIELD_NAME',
						'$FIELD_VALUE',
						'CUSTOMER',
						'$DUPL_VALUE'												
						)";
		$this->db->query($sql1);
		
	}



	function status_cust_dupcek($idp, $duplicate_stat){
		$sql25 = "UPDATE PROSPECT  SET duplicatestatus = '$duplicate_stat' WHERE PROSPECT_ID ='$idp'";
		$this->db->query($sql25);	
		
	}

	function add_remarks($idp, $status,$reason,$user_desc){
		$sql1	= "INSERT INTO REMARKS 
					(
						ID_REMARKS,
						PROSPECT_ID,
						STATUS,
						REASON,
						CREATE_DATE
						)
					VALUES(
						'',
						'$idp',
						'$status',
						'$reason',
						 now()					
						)";
		$this->db->query($sql1);
		if($status == 'Approve'){
		$sql25 = "UPDATE PROSPECT  SET statusep = 'Approve1' WHERE PROSPECT_ID ='$idp'";
		$this->db->query($sql25);
		$sql26 = "UPDATE PROSPECT_ADDITIONAL SET HEAD_BRANCH = '$user_desc' WHERE PROSPECT_ID ='$idp'";
		$this->db->query($sql26);
		}else{
		$sql25 = "UPDATE PROSPECT  SET statusep = 'Rejected' WHERE PROSPECT_ID ='$idp'";
		$this->db->query($sql25);
		$sql26 = "UPDATE PROSPECT_ADDITIONAL SET HEAD_BRANCH = '$user_desc' WHERE PROSPECT_ID ='$idp'";
		$this->db->query($sql26);
		}
	}

	function masterProductHardware()
	{
		$sql = "SELECT * FROM VAL_PRODUCT_PRICE2 WHERE CATEGORY='Hardware' AND PRODUCT_ID!=197 AND PRODUCT_ID!=215 AND PRODUCT_ID!=216";
		$result = $this->db->query($sql)->result_array();
		echo json_encode($result, TRUE);
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
/* 	function getSearchHW($id){
	
			 
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
	}  */
	//
	//dth verificaiton
	function DTH_EDIT($prospectid,$identype,$identypen,$FNAME,$MNAME,$LNAME,$RELIGION,$WORK_PHONE,$mobilep,$HOME_PHONE,$ADDRESS,$SUBDISTRICT,$DISTRICT,$CITY,$PROVINCE,$ZIPCODE,$INSTALLATION_ADDRESS,$INSTALLATION_DIRECTION,$INSTALLATION_LANDMARK,$SUBDISTRICT_INSTALL,$DISTRICT_INSTALL,$CITY_INSTALL,$PROVINCE_INSTALL,$ZIPCODE_INSTALL,$INSTALL_ADDRESSbilling,$BILLING_DIRECTION,$INSTALL_LANDMARKbilling,$SUBDISTRICT_BILLING,$DISTRICT_BILLING,$CITY_BILLING,$PROVINCE_BILLING,$ZIPCODE_BILLING,$EMERGENCY_NAME,$E_SIBLING,$E_PHONE,$E_ADDRESS){


		$sql1	= "INSERT INTO DTH_EDIT 
					(

						ID_DTH_EDIT,
						PROSPECT_ID,
						
						IDTYPE_V,
						IDTYPE_NUMBER_V,

						FIRSTNAME_V,
						MIDDLENAME_V,
						LASTNAME_V,

						RELIGION_V,

						WORK_PHONE_V,
						MOBILE_PHONE_V,
						HOME_PHONE_V,
						
						ADDRESS_V,
						DIRECTION_V,
						LANDMARK_V,
						KELURAHAN_V,
						KECAMATAN_V,
						CITY_V,
						PROVINCE_V,
						ZIPCODE_V,

						INSTALL_ADDRESS_V,
						INSTALL_DIRECTION_V,
						INSTALL_LANDMARK_V,
						INSTALL_KELURAHAN_V,
						INSTALL_KECAMATAN_V,
						INSTALL_CITY_V,
						INSTALL_PROVINCE_V,
						INSTALL_ZIPCODE_V,

						BILLING_ADDRESS_V,
						BILLING_DIRECTION_V,
						BILLING_LANDMARK_V,
						BILLING_KELURAHAN_V,
						BILLING_KECAMATAN_V,
						BILLING_CITY_V,
						BILLING_PROVINCE_V,
						BILLING_ZIPCODE_V,

						E_NAME_V,
						E_SIBLING_V,
						E_PHONE_V,
						E_ADDRESS_V				
						
						
						)
					VALUES(
						
						'',
						'$prospectid',

						'$identype',
						'$identypen',

						'$FNAME',
						'$MNAME',
						'$LNAME',

						'$RELIGION',

						'$WORK_PHONE',
						'$mobilep',
						'$HOME_PHONE',

						'$ADDRESS',
						'DIRECTION',
						'LANDMARK',
						'$SUBDISTRICT',
						'$DISTRICT',
						'$CITY',
						'$PROVINCE',					
						'$ZIPCODE',

						'$INSTALLATION_ADDRESS',
						'$INSTALLATION_DIRECTION',
						'$INSTALLATION_LANDMARK',
						'$SUBDISTRICT_INSTALL',
						'$DISTRICT_INSTALL',
						'$CITY_INSTALL',
						'$PROVINCE_INSTALL',
						'$ZIPCODE_INSTALL',

						'$INSTALL_ADDRESSbilling',
						'$BILLING_DIRECTION',
						'$INSTALL_LANDMARKbilling',
						'$SUBDISTRICT_BILLING',
						'$DISTRICT_BILLING',
						'$CITY_BILLING',
						'$PROVINCE_BILLING',
						'$ZIPCODE_BILLING',

						'$EMERGENCY_NAME',
						'$E_SIBLING',
						'$E_PHONE',
						'$E_ADDRESS'
												
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
		INNER JOIN PROSPECT_ADDRESS 
		ON PROSPECT.PROSPECT_ID=PROSPECT_ADDRESS.PROSPECT_ID 
		INNER JOIN PROSPECT_ADDITIONAL 
		ON PROSPECT.PROSPECT_ID=PROSPECT_ADDITIONAL.PROSPECT_ID
		INNER JOIN PROSPECT_PACKAGE_ORDER 
		ON PROSPECT.PROSPECT_ID=PROSPECT_PACKAGE_ORDER.PROSPECT_ID 	 		
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

	function add_kacab_app($idp, $infod,$status,$reason){
		$sql1	= "INSERT INTO KACAB_APPROVAL 
					(
						ID_KACAB_APPROVAL,
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

	function upd_kacab_cancel($idp){
	$sql20 = "UPDATE PROSPECT  SET statusep = 'Approve2'  WHERE PROSPECT_ID ='$idp' ";
		$this->db->query($sql20);
		
	}
	function upd_tl_cancel($idp){
	$sql20 = "UPDATE PROSPECT  SET statusep = 'Approvetl'  WHERE PROSPECT_ID ='$idp' ";
		$this->db->query($sql20);
		
	}
	function upd_dth_cancel($idp){
	$sql20 = "UPDATE PROSPECT  SET statusep = 'Approve1'  WHERE PROSPECT_ID ='$idp' ";
		$this->db->query($sql20);
		
	}
	function rem_admin_app($idp, $infod,$status,$reason){
		$sql1	= "DELETE FROM ADMIN_APPROVAL  WHERE PROSPECT_ID ='$idp' and INFORMASI_DATA='$infod'";
		$this->db->query($sql1);
		
	}
	function rem_kacab_app($idp, $infod,$status,$reason){
		$sql1	= "DELETE FROM KACAB_APPROVAL  WHERE PROSPECT_ID ='$idp' and INFORMASI_DATA='$infod' and STATUS='$status' and REASON ='$reason'";
		$this->db->query($sql1);
		
	}
	function upd_admin_cancel($idp){
	$sql20 = "UPDATE PROSPECT  SET statusep = 'Pending'  WHERE PROSPECT_ID ='$idp' ";
		$this->db->query($sql20);
	$sql1	= "DELETE FROM ADMIN_APPROVAL  WHERE PROSPECT_ID ='$idp'";
		$this->db->query($sql1);	
		
	}
	function upd_btp_cancel($idp){
	$sql20 = "UPDATE PROSPECT  SET statusep = 'BTP'  WHERE PROSPECT_ID ='$idp' ";
		$this->db->query($sql20);
	/*$sql1	= "DELETE FROM ADMIN_APPROVAL  WHERE PROSPECT_ID ='$idp'";
		$this->db->query($sql1);	*/
		
	}
	function rem_dth_app($idp, $category,$subcategory){
		$sql1	= "DELETE FROM BTP_DTH  WHERE IDP ='$idp' and SUBC='$subcategory' and CATEGORY ='$category'";
		$this->db->query($sql1);
		
	}
	function upd_admin_app($idp,$pn, $status_final, $light, $duplicate_stat,$userid){
	
		$sql20 = "UPDATE PROSPECT  SET statusep = '$status_final', LIGHT_VER='$light', duplicatestatus='$duplicate_stat'  WHERE PROSPECT_ID ='$idp' ";
		$this->db->query($sql20);

		$sql_prospect_notes_status = "INSERT INTO LOG_NOTES_STATUS
							(
								LOG_NOTES_STATUS_PROSPECT_NBR,
								LOG_NOTES_STATUS_DESCRIPTION,
								LOG_NOTES_STATUS_INSERT_DATE,
								LOG_NOTES_STATUS_INSERT_BY

							)
							VALUES
							(
								'$pn',
								'LIGHT VERIFICATION',
								NOW(),
								'$userid'

							)";
		$this->db->query($sql_prospect_notes_status);
		
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

	function duplikasi_valsys($idp){
		
		  return $this->db->query("CALL PRC_PROSPECT_DUPLCEK('$idp')");
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
		  $sql="SELECT  * FROM PROSPECT where statusep='NEW' or statusep='Pending' ";
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

	function data_duplikasi(){
		//$this->db->from("PROSPECT");
		//return $this->db->get();
		  $sql="SELECT * FROM PROSPECT_DUPLCEK WHERE DUPL_VALUE <> ''";
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
		/*INNER JOIN PROSPECT_PACKAGE_ALACARTE 
		ON PROSPECT.PROSPECT_ID=PROSPECT_PACKAGE_ALACARTE.PROSPECT_ID	*/
		
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
	

	function updateDataEP_Reg_dth($statusep,$prospectid,$dthnote,$suc_mes,$ref_id,$PNUMB,$userid){	
		$sql_prospect_notes_status = "INSERT INTO LOG_NOTES_STATUS
							(
								LOG_NOTES_STATUS_PROSPECT_NBR,
								LOG_NOTES_STATUS_DESCRIPTION,
								LOG_NOTES_STATUS_INSERT_DATE,
								LOG_NOTES_STATUS_INSERT_BY

							)
							VALUES
							(
								'$PNUMB',
								'$dthnote',
								NOW(),
								'$userid'

							)";
		$this->db->query($sql_prospect_notes_status);


		//$sql21 = "UPDATE PROSPECT  SET DTH_NOTE='$dthnote', statusep = 'GenerateID', REF_CUST_ID = '$ref_id'  WHERE PROSPECT_ID ='$prospectid'   ";
		$sql21 = "UPDATE PROSPECT  SET DTH_NOTE='$dthnote', statusep = '$statusep', REF_CUST_ID = '$ref_id'  WHERE PROSPECT_ID ='$prospectid'   ";
		$this->db->query($sql21);
		$sql22 = "INSERT INTO LOG_API 
					(
						ID_LOG,
						PROSPECT_ID,
						MESSAGE,
						CREATED_AT
						
						
						)
					VALUES(
						'',
						'$prospectid',
						'$suc_mes',
						NOW()
						
						
						)";
		$this->db->query($sql22);
	}

	function updateDataEP_Reg_dth_tl($statusep,$prospectid,$dthnote,$suc_mes){	
		$sql21 = "UPDATE PROSPECT  SET DTH_NOTE='$dthnote', statusep = 'Approvetl'  WHERE PROSPECT_ID ='$prospectid'   ";
		$this->db->query($sql21);
		$sql22 = "INSERT INTO LOG_API 
					(
						ID_LOG,
						PROSPECT_ID,
						MESSAGE,
						CREATED_AT
						
						
						)
					VALUES(
						'',
						'$prospectid',
						'$suc_mes',
						NOW()
						
						
						)";
		$this->db->query($sql22);
	}

/*function getData($prosNbr){
		$sql    = "	SELECT *
					  FROM $this->tblBtpBfp
					 WHERE prospect_nbr = '$prosNbr'";
	
		$result = $this->db->query($sql)->result_array();
		
		return $result;
	}
*/	 
	
	
	function searchMasterProductBasic($product_id,$brandId)
	{
		$sql = "SELECT * FROM VAL_PRODUCT_PRICE2 WHERE PRODUCT_ID = '$product_id' AND CATEGORY = 'TV Base Package'  AND PROXY_CODE='$brandId'";
		//var_dump($sql);exit;
		$result = $this->db->query($sql)->result_array();
		return json_encode($result, TRUE);
	}

	function searchMasterProductAddOn($product_id,$brandId)
	{
		if($brandId == 1) 
		{
			$sql = "SELECT * FROM VAL_PRODUCT_PRICE2 WHERE PRODUCT_ID = '$product_id' AND CATEGORY = 'Indovision Add-on' ";
			$result = $this->db->query($sql)->result_array();
			return json_encode($result, TRUE);
		}
		elseif ($brandId == 2) {
			$sql = "SELECT * FROM VAL_PRODUCT_PRICE2 WHERE PRODUCT_ID = '$product_id' AND CATEGORY = 'OkeVision Add-on' ";
			$result = $this->db->query($sql)->result_array();
			return json_encode($result, TRUE);
		}
		elseif($brandId == 3)
		{
			$sql = "SELECT * FROM VAL_PRODUCT_PRICE2 WHERE PRODUCT_ID = '$product_id' AND CATEGORY = 'Top TV Add-on' ";
			$result = $this->db->query($sql)->result_array();
			return json_encode($result, TRUE);
		}
		else
		{
			var_dump($brandId);
		}

		
	}
	
	/*function DTDProsedurData()
	{
		
	}*/

	function DTDaddDataProspect($prospect_id, $opentity_id,$install_time,$Install_Date,$sales_channel,$form_number,$prospect_nbr,$prospect_type,$hardware_status,$sgs_number,$sgs_name,$id_type,$id_number,$salutation,$first_name,$middle_name,$last_name,$gender,$religion,$place_birth,$Date_Of_Birth,$pln_id,
		$home_phone,
		$work_phone,
		$mobile_phone,
		$expired_date,
		$email,
		$house_type,
		$house_status,
		$occupation,
		$income,
		$longitude,
		$latitude,
				$address_idcard,
				$country_id,
				$province_idcard,
				$city_idcard,
				$district_idcard,
				$subdistrict_idcard,
				$zipcode_idcard,
				$direction_idcard,
				$landmark_idcard,
						$address_installation,
						$landmark_installation,
						$direction_installation,
						$province_installation,
						$city_installation,
						$district_installation,
						$subdistrict_installation,
						$zipcode_installation,
												$address_billing,
												$province_billing,
												$landmark_billing,
												$direction_billing,
												$city_billing,
												$district_billing,
												$subdistrict_billing,
												$zipcode_billing,
																	$emergency_name,
																	$emergency_sibling,
																	$emergency_phone,
																	$emergency_address,
																					$sales_nik,
																					$sales_code,
																					$sales_name,
																					$sales_differentcauses,
																					$sales_officebranch,
																					$ENTITYCODE,
																					$POS,
																					$STOREAREA,
																								$order_date,
																								$full_file_path,
																								$processid,
																								$activityid,
																								$flag_beda_alamat,
																								$flag_beda_billing_identity,
																								$flag_beda_billing_install,
																								$address_id,
																								$sales_namebranchhead,
																									$confirmation_start_date_time,
																									$confirmation_end_date_time,
																									$Install_Time,
																													$package_status,
																													$package_brand,
																													$package_promo,
																													$package_basic,
																													$package_alacarte,
																													$payment_period,
																																		$cost_installation,
																																		$cost_package,
																																		$alacarte_cost,
																																		$promo_cost,
																																		$total_cost,
																																							$payment_method,
																																							$card_type,
																																							$card_number,
																																							$payment_card_name,
																																							$payment_bank_account_number,
																																							$payment_bank_name,
																																							$payment_card_expired,
																																							$Payment_Date,
																																							$payment_remark,
																																							$payment_direct_debit,
																																							
																																												$ket_ktp,
																																												$ket_cc,	
																																												$ket_dana,
																																												$ket_kuasa,
																																												$ket_ttd,
																																												$ket_pernyataan,
																																													$userid,
																																													$bt_flag,
																																													$bt_dk_lk,
																																													$bt_branch_office, 
																																													$bt_region_office, 
																																													$bt_fee

																																													) 
	{
		


		if($flag_beda_alamat==1)
			$flag_beda = "NO";
		else
			$flag_beda = "YES";


		if($flag_beda_billing_identity != null)
		{
			if($flag_beda_billing_identity==1)
			$flag_beda_billing_identity = "NO";
			else
			$flag_beda_billing_identity = "YES";			
		}

		if($flag_beda_billing_install != null)
		{
			if($flag_beda_billing_install==1)
			$flag_beda_billing_install = "NO";
			else
			$flag_beda_billing_install = "YES";			
		}

		if($bt_flag != null)
		{
			if($bt_flag==1)
			$bt_flag = "YES";
			else
			$bt_flag = "NO";			
		}
		else
		{
			$bt_flag="NO";
		}		

		//SEMENTARA
		if($payment_method == "AUTODEBET")
		{
			$payment_method = 3;	
		}


		
			
		$sql_prospect	= "INSERT INTO PROSPECT 
					(
						PROSPECT_NBR,
						SALESC,
						FORMN,
						PROSPECT_TYPE,
						SALUTATION,
						FIRST_NAME,
						MIDDLE_NAME,
						LAST_NAME,
						HOME_PHONE,
						WORK_PHONE,
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
						statusep,
						LONGITUDE,
						LATITUDE,
						FBEDA,
						FBEDABILLING_IDENTITY,
						FBEDABILLING_INSTALL
						)
					VALUES(
						'$prospect_nbr',
						'$sales_channel',
						'$form_number',
						'$prospect_type',
						'$salutation',
						'$first_name',
						'$middle_name',
						'$last_name',
						'$home_phone',
						'$work_phone',
						'$mobile_phone',
						'$email',
						'$ENTITYCODE',
						'$pln_id',
						'$id_type',
						'$id_number',
						STR_TO_DATE('$expired_date', '%m/%d/%Y'),
						'$occupation',
						'$income',
						NOW(),
						'$processid',
						'$activityid',
						'NEW',
						'$longitude',
						'$latitude',
						'$flag_beda',
						'$flag_beda_billing_identity',
						'$flag_beda_billing_install'

						)";
		

		$this->db->query($sql_prospect);

		$fk_id	= $this->db->insert_id();
		var_dump($fk_id);

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
						ID_NUMBER,
						INSTALLATION_DATE,
						INSTALLATION_TIME,
						CONFIRMATION_TIME_START,
						CONFIRMATION_TIME_END,
						KET_KTP,
						KET_CC,
						KET_DANA,
						KET_KUASA,
						KET_TTD,
						KET_PERNYATAAN,
						TRANSPORTATION_FEE_FLAG,
						BT_DK_LK,
						BT_BRANCH_OFFICE,
						BT_REGION_OFFICE,
						BT_TRANSPORTATION_FEE
						)
					VALUES(
						'$fk_id',
						'$hardware_status',
						'$sgs_number',
						'$sgs_name',
						'$gender',
						'$religion',
						'$place_birth',
						STR_TO_DATE('$Date_Of_Birth', '%m/%d/%Y'),
						'$home_phone',
						'$mobile_phone',
						'$emergency_name',
						'$emergency_sibling',
						'$emergency_phone',
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
						'$id_number',
						STR_TO_DATE('$Install_Date', '%m/%d/%Y'),
						STR_TO_DATE('$Install_Time', '%H:%i'),
						STR_TO_DATE('$confirmation_start_date_time', '%m/%d/%Y %H:%i'),
						STR_TO_DATE('$confirmation_end_date_time', '%m/%d/%Y %H:%i'),
						'$ket_ktp',
						'$ket_cc',
						'$ket_dana',
						'$ket_kuasa',
						'$ket_ttd',
						'$ket_pernyataan',
						'$bt_flag',
						'$bt_dk_lk',
						'$bt_branch_office', 
						'$bt_region_office', 
						'$bt_fee'
						)";
		var_dump($sql_prospect_additional);
						


		$this->db->query($sql_prospect_additional);
		$sql_prospect_address	= "INSERT INTO PROSPECT_ADDRESS
					(
						
						PROSPECT_ID,
						PROSPECT_ID_ICC,
						BUILDING_TYPE,
						BUILDING_STATUS,
						STREET,
						PROVINCE,
						CITY,
						DISTRICT,
						SUBDISTRICT,
						POSTALCODE,
						COUNTRY,
						DIRECTION,
						LANDMARK,
						INSTALLATION_ADDRESS,
						INSTALLATION_DIRECTION,
						INSTALLATION_LANDMARK,
						INSTALLATION_PROVINCE,
						INSTALLATION_CITY,
						INSTALLATION_DISTRICT,
						INSTALLATION_SUBDISTRICT,
						INSTALLATION_ZIPCODE,
						BILLING_ADDRESS,
						BILLING_DIRECTION,
						BILLING_LANDMARK,
						BILLING_PROVINCE,
						BILLING_CITY,
						BILLING_DISTRICT,
						BILLING_SUBDISTRICT,
						BILLING_ZIPCODE
										
						)
					VALUES(
						'$fk_id',
						'$address_id',
						'$house_type',
						'$house_status',
						'$address_idcard',
						'$province_idcard',
						'$city_idcard',
						'$district_idcard',
						'$subdistrict_idcard',
						'$zipcode_idcard',
						'$country_id',
						'$direction_idcard',
						'$landmark_idcard',
						'$address_installation',
						'$direction_installation',
						'$landmark_installation',
						'$province_installation',
						'$city_installation',
						'$district_installation',
						'$subdistrict_installation',
						'$zipcode_installation',
						'$address_billing',
						'$direction_billing',
						'$landmark_billing',
						'$province_billing',
						'$city_billing',
						'$district_billing',
						'$subdistrict_billing',
						'$zipcode_billing'
										
						)";
		$this->db->query($sql_prospect_address);
		//var_dump($sql_prospect_address);

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
								BILLING_FREQUENCY							
							)
							VALUES
							(
								'$fk_id',
								'$package_brand',
								'$package_status',
								'$package_promo',
								'$package_basic',
								'$payment_period'
									
							)";
		
		$this->db->query($sql_package_order);

		$package_alacarte_values = array_values($package_alacarte);
		//var_dump($package_alacarte_values);
		
		//$package_alacarte_length = count($package_alacarte);


		for($i=0;$i<count($package_alacarte);$i++)
		{
			//var_dump($package_alacarte_values[$i]);
			$alacarte_temp_id = $package_alacarte_values[$i]['PRODUCT_ID'];

			$sql_package_alacarte = "INSERT INTO PROSPECT_PACKAGE_ALACARTE
							(
								PROSPECT_ID,
								ALACARTE						
							)
							VALUES
							(
								'$fk_id',
								'$alacarte_temp_id'

							)";
			$this->db->query($sql_package_alacarte);	
		}
		
		$sql_prospect_cost = "INSERT INTO PROSPECT_COST
							(
								
								PROSPECT_ID,
								INSTALLATION_COST,
								COST_PACKAGE,
								ALACARTE_COST,
								PROMO_COST,
								TOTAL_COST

							)
							VALUES
							(
								'$fk_id',
								'$cost_installation',
								'$cost_package',
								'$alacarte_cost',
								'$promo_cost',
								'$total_cost'
									
							)";

		$this->db->query($sql_prospect_cost);

		$sql_prospect_payment = "INSERT INTO PROSPECT_PAYMENT
							(
								PAYMENT_DATE,
								PROSPECT_ID,
								PAYMENT_MODE,
								CURRENCY_CODE,
								AMOUNT,
								NOTES,
								BANK_ACCOUNT_NO,
								BANK_NAME,
								ACCOUNT_NAME,
								CARD_TYPE,
								CARD_NUMBER,
								EXP_DATE,
								PAYMENT_DIRECT_DEBIT

							)
							VALUES
							(
								STR_TO_DATE('$Payment_Date', '%m/%d/%Y'),
								'$fk_id',
								'$payment_method',
								'IDR',
								'20000',
								'$payment_remark',
								'$payment_bank_account_number',
								'$payment_bank_name',
								'$payment_card_name',
								'$card_type',
								'$card_number',
								'$payment_card_expired',
								'$payment_direct_debit'	
							)";
		$this->db->query($sql_prospect_payment);

		$sql_prospect_notes_status = "INSERT INTO LOG_NOTES_STATUS
							(
								LOG_NOTES_STATUS_PROSPECT_NBR,
								LOG_NOTES_STATUS_DESCRIPTION,
								LOG_NOTES_STATUS_INSERT_DATE,
								LOG_NOTES_STATUS_INSERT_BY

							)
							VALUES
							(
								'$prospect_nbr',
								'EP SAVED',
								NOW(),
								'$userid'

							)";
		$this->db->query($sql_prospect_notes_status);



 		/*str_to_date('$date_of_birth', '%m/%d/%Y'),*/
	}

	function searchPOS($branch_search,$sales_category,$brand_search)
	{
		/*var_dump($branch_search);
		var_dump($brand_search);
		exit;*/
		$sql_salescategory 	= "SELECT * FROM SMS_M_SALES_CHANNEL WHERE SALES_CHANNEL_ID='$sales_category'";
		$saleschannel_array = $this->db->query($sql_salescategory)->result_array();
		$sc 				= $saleschannel_array[0]['SALES_CHANNEL_CODE'];

		if($branch_search != NULL && $brand_search == NULL)
		{
			//jalankan branch
			$sql_branch = "SELECT BRANCH FROM SMS_BRANCH WHERE SEQ_BRANCH = '$branch_search'";
			$branch_array = $this->db->query($sql_branch)->result_array();
			$branch = $branch_array[0]['BRANCH'];

			$sql = "SELECT * FROM OPERATIONAL_ENTITY_VIEW WHERE branch='$branch' && sales_channel='$sc' ";
			$result = $this->db->query($sql)->result_array();
			echo json_encode($result, TRUE);
		}
		if($brand_search != NULL && $branch_search == NULL)
		{
			//jalankan brand
			$sql_brandsearch 	= "SELECT * FROM SMS_M_BRAND WHERE BRAND_ID='$brand_search' ";
			$brandcode_array 	= $this->db->query($sql_brandsearch)->result_array();
			$brandcode 			= $brandcode_array[0]['BRAND_CODE'];
		
			$sql = "SELECT * FROM OPERATIONAL_ENTITY_VIEW WHERE sales_channel='$sc' && brand='$brandcode'";
			$result = $this->db->query($sql)->result_array();
			echo json_encode($result, TRUE);
		}

		if(($branch_search != NULL) && ($brand_search != NULL))
		{
			//jalankan branch dan brand
			$sql_branch = "SELECT BRANCH FROM SMS_BRANCH WHERE SEQ_BRANCH = '$branch_search'";
			$branch_array = $this->db->query($sql_branch)->result_array();
			$branch = $branch_array[0]['BRANCH'];

			$sql_brandsearch 	= "SELECT * FROM SMS_M_BRAND WHERE BRAND_ID='$brand_search' ";
			$brandcode_array 	= $this->db->query($sql_brandsearch)->result_array();
			$brandcode 			= $brandcode_array[0]['BRAND_CODE'];

			$sql = "SELECT * FROM OPERATIONAL_ENTITY_VIEW WHERE branch='$branch' && sales_channel='$sc' && brand='$brandcode'";
			$result = $this->db->query($sql)->result_array();
			echo json_encode($result, TRUE);
		}

			

		/*$sql = "SELECT * FROM OPERATIONAL_ENTITY_VIEW WHERE branch='$branch' && sales_channel='$sc' && brand='$brandcode'";
		$result = $this->db->query($sql)->result_array();
		echo json_encode($result, TRUE);*/



	}

	function DTDLogDataProspect($prospect_number,$tabel_prospect,$field,$value_before,$value_after)
	{
		$sql_log_prospect_update = "INSERT INTO LOG_PROSPECT_UPDATE
							(
								
								PROSPECT_NBR,
								TABLE_VALSYS,
								FIELD,
								VALUE_BEFORE,
								VALUE_AFTER,
								UPDATE_BY,
								UPDATE_DATE
								

							)
							VALUES
							(
								'$prospect_number',
								'$tabel_prospect',
								'$field',
								'$value_before',
								'$value_after',
								'SUHARTOYO',
								NOW()		
							)";
		$this->db->query($sql_log_prospect_update);
	}

	function DTDUpdateData($prospect_id, $opentity_id,$install_time,$Install_Date,$sales_channel,$form_number,$prospect_nbr,$prospect_type,$hardware_status,$sgs_number,$sgs_name,$id_type,$id_number,$salutation,$first_name,$middle_name,$last_name,$gender,$religion,$place_birth,$Date_Of_Birth,$pln_id,
			$home_phone,
			$work_phone,
			$mobile_phone,
			$expired_date,
			$email,
			$house_type,
			$house_status,
			$occupation,
			$income,
					$address_idcard,
					$country_id,
					$province_idcard,
					$city_idcard,
					$district_idcard,
					$subdistrict_idcard,
					$zipcode_idcard,
						$address_installation,
						$landmark_installation,
						$direction_installation,
						$province_installation,
						$city_installation,
						$district_installation,
						$subdistrict_installation,
						$zipcode_installation,
												$address_billing,
												$province_billing,
												$landmark_billing,
												$direction_billing,
												$city_billing,
												$district_billing,
												$subdistrict_billing,
												$zipcode_billing,
																	$emergency_name,
																	$emergency_sibling,
																	$emergency_phone,
																	$emergency_address,
																					$sales_nik,
																					$sales_code,
																					$sales_name,
																					$sales_differentcauses,
																					$sales_officebranch,
																					$ENTITYCODE,
																					$POS,
																					$STOREAREA,
																								$order_date,
																								$full_file_path,
																								$processid,
																								$activityid,
																								$flag_beda_alamat,
																								$flag_beda_billing_identity,
																								$flag_beda_billing_install,
																								$address_id,
																								$sales_namebranchhead,
																									$confirmation_start_date_time,
																									$confirmation_end_date_time,
																									$Install_Time,
																													$package_status,
																													$package_brand,
																													$package_promo,
																													$package_basic,
																													$package_alacarte,
																													$payment_period,
																																		$cost_installation,
																																		$cost_package,
																																		$alacarte_cost,
																																		$promo_cost,
																																		$total_cost,
																																							$payment_method,
																																							$card_type,
																																							$card_number,
																																							$name_akun,
																																							$payment_card_expired,
																																							$Payment_Date,
																																							$payment_remark)
	{
		
		if($flag_beda_alamat==1)
			$flag_beda = "NO";
		else
			$flag_beda = "YES";

		$sql_update_prospect = "UPDATE PROSPECT  SET 	SALESC 			= '$sales_channel',
														FORMN 			= '$form_number',
														PROSPECT_TYPE 	= '$prospect_type',
														FIRST_NAME 		= '$first_name',
														MIDDLE_NAME 	= '$middle_name',
														LAST_NAME 		= '$last_name',
														HOME_PHONE 		= '$home_phone',
														WORK_PHONE 		= '$work_phone',
														MOBILE_PHONE 	= '$mobile_phone',
														EMAIL 			= '$email' ,
														OPENTITY_ID 	= '$opentity_id',
														PLN_ID 			= '$pln_id',
														ID_TYPE 		= '$id_type',
														IDTYPE_NUMBER 	= '$id_number',
														EXP_DATE 		=  STR_TO_DATE('$expired_date', '%m/%d/%Y'),
														OCCUPATION 		= '$occupation',
														INCOME 			= '$income',
														CREATED_DATE 	= 	NOW(),
														processId 		= '$processid',
														actid 			= '$activityid',
														statusep 		= 'Pending',
														FBEDA 			= '$flag_beda'


												WHERE PROSPECT_ID ='$prospect_id' ";
		$this->db->query($sql_update_prospect);


		$sql_update_prospect_additional = " UPDATE PROSPECT_ADDITIONAL  SET 	STATUS_HW			=	'$hardware_status',
																				SGS_NUMBER			=	'$sgs_number',
																				SGS_NAME			=	'$sgs_name',
																				GENDER				=	'$gender',
																				RELIGION			=	'$religion',
																				PLACE_BIRTH			=	'$place_birth',
																				DATE_OF_BIRTH		=	STR_TO_DATE('$Date_Of_Birth', '%m/%d/%Y'),
																				PHONE_NBR			=	'$home_phone',
																				HANDPHONE_NBR		=	'$mobile_phone',
																				EC_NAME				=	'$emergency_name',
																				EC_RELATION			=	'$emergency_sibling',
																				EC_PHONE			=	'$emergency_phone',
																				EC_ADDR				=	'$emergency_address',
																				NIK_SALES			=	'$sales_nik',
																				NAME_SALES			=	'$sales_name',
																				DIFFERENT_CAUSE		=	'$sales_differentcauses',
																				SALES_CODE			=	'$sales_code',
																				OFFICE_BRANCH		=	'$sales_officebranch',
																				HEAD_BRANCH			=	'$sales_namebranchhead',
																				ENTITY_CODE			=	'$ENTITYCODE',
																				POS					=	'$POS',
																				STORE_AREA			=	'$STOREAREA',
																				ID_NUMBER			=	'$id_number',
																				INSTALLATION_DATE	=	STR_TO_DATE('$Install_Date', '%m/%d/%Y'),
																				INSTALLATION_TIME	=	STR_TO_DATE('$Install_Time', '%H:%i'),
																				CONFIRMATION_TIME_START = STR_TO_DATE('$confirmation_start_date_time', '%m/%d/%Y %H:%i'),
																				CONFIRMATION_TIME_END	= STR_TO_DATE('$confirmation_end_date_time', '%m/%d/%Y %H:%i')


																WHERE PROSPECT_ID ='$prospect_id' ";
		$this->db->query($sql_update_prospect_additional);

		
		$sql_update_prospect_address = " UPDATE PROSPECT_ADDRESS  			SET 	BUILDING_TYPE				=	'$house_type',
																					BUILDING_STATUS				=	'$house_status',
																					STREET						=	'$address_idcard',
																					PROVINCE					=	'$province_idcard',
																					CITY						=	'$city_idcard',
																					DISTRICT					=	'$district_idcard',
																					SUBDISTRICT					=	'$subdistrict_idcard',
																					POSTALCODE					=	'$zipcode_idcard',
																					INSTALLATION_ADDRESS		=	'$address_installation',
																					DIRECTIONS					=	'$direction_installation',
																					INSTALLATION_PROVINCE		=	'$province_installation',
																					INSTALLATION_CITY			=	'$city_installation',
																					INSTALLATION_DISTRICT		=	'$district_installation',
																					INSTALLATION_SUBDISTRICT	=	'$subdistrict_installation',
																					INSTALLATION_ZIPCODE		=	'$zipcode_installation',
																					BILLING_ADDRESS				=	'$address_billing',
																					BILLING_PROVINCE			=	'$province_billing',
																					BILLING_CITY				=	'$city_billing',
																					BILLING_DISTRICT			=	'$district_billing',
																					BILLING_SUBDISTRICT			=	'$subdistrict_billing',
																					BILLING_ZIPCODE				=	'$zipcode_billing'


																					WHERE PROSPECT_ID 	='$prospect_id' ";
		//var_dump($sql_update_prospect_address);//exit;																			
		$this->db->query($sql_update_prospect_address);


		
		$sql_update_prospect_package_order = " UPDATE PROSPECT_PACKAGE_ORDER  SET 	BRAND				=	'$package_brand',
																					STATUS				=	'$package_status',
																					AVAILABLE_PROMO		=	'$package_promo',
																					BASIC				=	'$package_basic',
																					BILLING_FREQUENCY	=	'$payment_period'


																					WHERE PROSPECT_ID 	='$prospect_id' ";

		$this->db->query($sql_update_prospect_package_order);																	


		$sql_delete_prospect_alacarte = "DELETE FROM PROSPECT_PACKAGE_ALACARTE WHERE PROSPECT_ID = '$prospect_id' ";
		$this->db->query($sql_delete_prospect_alacarte);

																					
		$package_alacarte_values = array_values($package_alacarte);
		

		for($i=0;$i<count($package_alacarte);$i++)
		{
			//var_dump($package_alacarte_values[$i]['service_id']);
			$alacarte_temp_id = $package_alacarte_values[$i]['service_id'];

			$sql_package_alacarte = "INSERT INTO PROSPECT_PACKAGE_ALACARTE
							(
								PROSPECT_ID,
								ALACARTE						
							)
							VALUES
							(
								'$prospect_id',
								'$alacarte_temp_id'

							)";
			$this->db->query($sql_package_alacarte);	
		}



		$sql_update_prospect_payment= " UPDATE PROSPECT_PAYMENT  	SET 			PAYMENT_DATE	=	STR_TO_DATE('$Payment_Date', '%m/%d/%Y'),
																					PAYMENT_MODE	=	'$payment_method',
																					CURRENCY_CODE	=	'IDR',
																					AMOUNT			=	'20000',
																					NOTES			=	'$payment_remark',
																					ACCOUNT_NAME	=	'$name_akun',
																					CARD_TYPE		=	'$card_type',
																					CARD_NUMBER		=	'$card_number',
																					EXP_DATE		=	STR_TO_DATE('$payment_card_expired', '%m/%d/%Y')
																					
																					WHERE PROSPECT_ID 	='$prospect_id' ";
		//var_dump($sql_update_prospect_payment);																			
		$this->db->query($sql_update_prospect_payment);
	



	}


	function UpdateStatusEP($prospect_nbr)
	{
		$sql_update_statusep = "UPDATE PROSPECT  SET statusep='Pending' WHERE PROSPECT_NBR ='$prospect_nbr' ";
		$this->db->query($sql_update_statusep);
		//var_dump($prospect_nbr);exit;
	}
	
	function getValue($sales_code_search,$sales_name_search)
	{
		//$this->db->from('MASTER_SALES_LOGIN');
	    //$this->db->like('EMPLOYEE_ID','$sales_code_search');
		$sql = "select * from MASTER_SALES_LOGIN where EMPLOYEE_ID LIKE '$sales_code_search' or UPPER(EMPLOYEE_NAME) LIKE '$sales_name_search'";
		$result = $this->db->query($sql)->result_array();
			
		echo json_encode($result, TRUE);
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
	/*function product()
	{
		$this->db->group_by('bundle_code');

		$products = $this->db->get_where('VAL_PRODUCT_PRICE',array('type'=>"Basic"));

		return $products->result_array();
	}*/

	

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
		//$fdtd = $this->dx_auth->is_allow_ext('fdtd');
		/*$fms = $this->dx_auth->is_allow_ext('fms');
		$fdealer = $this->dx_auth->is_allow_ext('fdealer');
		$fdealer_franchise = $this->dx_auth->is_allow_ext('fdealer_franchise');*/

		/*if ($fdtd) 
		{
			$sql = "SELECT * FROM SMS_M_SALES_CHANNEL WHERE SALES_CHANNEL_DESCR = 'Door To Door (DTD) Bawa Barang' ";
			$result = $this->db->query($sql)->result_array();*/
			/*if($fdtd && $fdealer)
			{
				$sql = "SELECT * FROM SMS_M_SALES_CHANNEL WHERE SALES_CHANNEL_DESCR = 'Door To Door (DTD) Bawa Barang' OR SALES_CHANNEL_DESCR = 'Dealer' ";
				$result = $this->db->query($sql)->result_array();
				
			}*/
				
/*
		}
		echo json_encode($result, TRUE);
*/
		//


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

		/*$subc="<option value='0'>select</pilih>";*/
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


	function SaveDataUploaded($prospect_id,$name,$file_category,$type,$final_path,$prospect_nbr,$uploadedby)
	{
		//var_dump("'$prospect_nbr', '$uploadedby',"); exit;

		$sql1	= "INSERT INTO PROSPECT_FILE_UPLOAD 
					(
						PROSPECT_ID,
						PROSPECT_NBR,
						FILE_NAME,
						FILE_TYPE,
						FILE_PATH,
						CATEGORY,
						CREATED_BY,
						CREATED_DATE,
						NOTES

					
						)
					VALUES(
						'$prospect_id',
						'$prospect_nbr',
						'$name',
						'$type',
						'$final_path',
						'$file_category',
						'yhidayat',
						 NOW(),
						null
						
						)";
		$this->db->query($sql1);
						
	}
	
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
														//	var_dump( $sql);exit;
															
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