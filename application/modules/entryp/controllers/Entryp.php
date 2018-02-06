<?php
defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set('Asia/Jakarta');

class Entryp extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model("m_entryp");
		/*$this->load->helper(array('url'));*/
		$this->load->helper(array('form', 'url'));
		$this->load->library(array('DX_Auth'));
	}
	
	public function index()
	{	
		/*$activityid				= "aa";
		$ch 					= "http://192.168.177.235:8080/jw/web/json/workflow/assignment/completeWithVariable/".$activityid."?var_status=Revisi&j_username=0504211215&j_password=12345";
		var_dump($ch);
		exit;*/
		//$this->load->model("m_entryp");
		
		if(!$this->dx_auth->is_logged_in())
		{
		  // Redirect to login page
		  $this->dx_auth->deny_access('login');
		} else {
			$userid    	= $this->dx_auth->get_user_id(); 
			$user_desc   = $this->dx_auth->get_user_desc();
			 if (!$this->dx_auth->is_access_allowed()) {
                 $this->dx_auth->deny_access('index');
            } 			
		}
		
		//DROPDOWN SALES CHANNEL
		//$data['sales_channel'] = $this->m_entryp->sales_channel();

		$data['module_title']  = 'Entry Prospect';
		$data['head'] = $this->load->view('templatemodule/head_panel',$data);
		$data['side_menu'] = $this->load->view('templatemodule/side_menu',$data,TRUE);
		
		//DROPDOWN PROVINCE
		$data['provinsi']=$this->m_entryp->provinsi();
		$data['branch'] = $this->m_entryp->branch();
		//DROPDOWN PROMO
		$data['promotion'] = $this->m_entryp->promotion();
		$data['salesMS'] = $this->m_entryp->salesMS();

		//DROPDOWN BRAND
		$data['brand'] = $this->m_entryp->brand();

		//DROPDOWN SALES CHANNEL
		$data['sales_channel'] = $this->m_entryp->sales_channel();
		
		//DROPDOWN PRODUCT
		//$data['produk'] = $this->m_entryp->product();
		$data['prospect_type'] = $this->m_entryp->prospect_type();
		
		$data['allData'] = $this->m_entryp->getAllData();
	//	$data['prospect_type'] = $this->entryp->prospect_type();

		$this->load->view('v_entryp',$data);
		/*$data['module_title']  = 'Door to door';
		$data['head'] = $this->load->view('templatemodule/head_panel',$data);
		$data['side_menu'] = $this->load->view('templatemodule/side_menu',$data,TRUE);
		$data['top_navi'] = $this->load->view('templatemodule/top_navi',$data,TRUE);
		$data['footer'] = $this->load->view('templatemodule/footer',$data,TRUE);
		$this->load->view('v_entryp');*/
	}

	//entryhw dth
	public function dataa_hw()
	{
		

		$promoId = $this->input->get('param1');
		$sql = "SELECT C.PROSPECT_NBR, B.ITEM_DESCR, A.ITEM_ID, A.SERIAL_NUMBER, A.PROSPECT_NBR  FROM INV_SFL_HW A , ITEM_MASTER B, PROSPECT C
				WHERE A.ITEM_ID = B.ITEM_ID
				AND A.PROSPECT_NBR = C.PROSPECT_NBR
				AND C.PROSPECT_NBR = '$promoId'  ORDER BY B.ITEM_DESCR";
			/*	$sql = "SELECT * FROM PROSPECT WHERE PROSPECT_NBR = '$promoId'";
			
			$query =  $this->db->query($sql);
			$rows  = $query->result_array();	*/

		//$data =  $this->db->get_where('PROSPECT', array('PROSPECT_NBR' => $promoId))->result();
		//$sql = "SELECT * FROM PROSPECT WHERE PROSPECT_NBR = '$promoId'";
			
			$query =  $this->db->query($sql);
			$data  = $query->result();	
			
			$array_data = array();
		   	$i=0;
		   	foreach($data as $r){
		    	$array_data[$i]['ITEM_DESCR']=$r->ITEM_DESCR;
		    	$array_data[$i]['SERIAL_NUMBER']=$r->SERIAL_NUMBER;
		    	$i++;
			}
		echo json_encode($array_data);
	}	
	
	public function c_cek_data(){

		$idp = $this->input->get('param1');
		//$status = $this->input->get('param2');
		$sql = "SELECT * FROM PROSPECT  
		INNER JOIN PROSPECT_ADDITIONAL
		ON PROSPECT.PROSPECT_ID = PROSPECT_ADDITIONAL.PROSPECT_ID
		INNER JOIN PROSPECT_ADDRESS
		ON PROSPECT.PROSPECT_ID = PROSPECT_ADDRESS.PROSPECT_ID
		WHERE PROSPECT.PROSPECT_ID='$idp' ";			
		$query =  $this->db->query($sql);
		$data  = $query->result();	

		$array_data = array();
		$i=0;
		foreach($data as $r){
			$array_data[$i]['REF_CUST_ID']=$r->REF_CUST_ID;
			$array_data[$i]['FIRST_NAME']=$r->FIRST_NAME;
			$array_data[$i]['MIDDLE_NAME']=$r->MIDDLE_NAME;
			$array_data[$i]['LAST_NAME']=$r->LAST_NAME;

			$array_data[$i]['WORK_PHONE']=$r->WORK_PHONE;
			$array_data[$i]['HOME_PHONE']=$r->HOME_PHONE;
			$array_data[$i]['MOBILE_PHONE']=$r->MOBILE_PHONE;

			$array_data[$i]['ID_TYPE']=$r->ID_TYPE;
			$array_data[$i]['IDTYPE_NUMBER']=$r->IDTYPE_NUMBER;
			$array_data[$i]['RELIGION']=$r->RELIGION;

			$array_data[$i]['STREET']=$r->STREET;
			$array_data[$i]['POSTALCODE']=$r->POSTALCODE;
			$array_data[$i]['DISTRICT']=$r->DISTRICT;
			$array_data[$i]['SUBDISTRICT']=$r->SUBDISTRICT;
			$array_data[$i]['CITY']=$r->CITY;
			$array_data[$i]['PROVINCE']=$r->PROVINCE;

			$array_data[$i]['INSTALLATION_PROVINCE']=$r->INSTALLATION_PROVINCE;
			$array_data[$i]['INSTALLATION_ADDRESS']=$r->INSTALLATION_ADDRESS;
			$array_data[$i]['INSTALLATION_DIRECTION']=$r->INSTALLATION_DIRECTION;
			$array_data[$i]['INSTALLATION_LANDMARK']=$r->INSTALLATION_LANDMARK;			
			$array_data[$i]['INSTALLATION_CITY']=$r->INSTALLATION_CITY;
			$array_data[$i]['INSTALLATION_DISTRICT']=$r->INSTALLATION_DISTRICT;
			$array_data[$i]['INSTALLATION_SUBDISTRICT']=$r->INSTALLATION_SUBDISTRICT;
			$array_data[$i]['INSTALLATION_ZIPCODE']=$r->INSTALLATION_ZIPCODE;

			$array_data[$i]['BILLING_ADDRESS']=$r->BILLING_ADDRESS;
			$array_data[$i]['BILLING_PROVINCE']=$r->BILLING_PROVINCE;
			$array_data[$i]['BILLING_DIRECTION']=$r->BILLING_DIRECTION;
			$array_data[$i]['BILLING_LANDMARK']=$r->BILLING_LANDMARK;			
			$array_data[$i]['BILLING_CITY']=$r->BILLING_CITY;
			$array_data[$i]['BILLING_DISTRICT']=$r->BILLING_DISTRICT;
			$array_data[$i]['BILLING_SUBDISTRICT']=$r->BILLING_SUBDISTRICT;
			$array_data[$i]['BILLING_ZIPCODE']=$r->BILLING_ZIPCODE;
			
			$array_data[$i]['EC_PHONE']=$r->EC_PHONE;
			$array_data[$i]['EC_NAME']=$r->EC_NAME;
			$array_data[$i]['EC_ADDR']=$r->EC_ADDR;
			$array_data[$i]['EC_RELATION']=$r->EC_RELATION;
			
			

			$i++;
		}
		echo json_encode($array_data);
	}
	public function deleteData(){
		$_POST = json_decode(file_get_contents('php://input'), true);
		$FILE_ID = $_POST['FILE_ID'];
		$path = $_POST['FILE_PATH'];
		unlink('/opt/lampp/htdocs/valsys/'.$path);
		
		$sql_delete = "DELETE FROM PROSPECT_FILE_UPLOAD WHERE FILE_ID = '$FILE_ID' ";			
		$result = $this->db->query($sql_delete);
		
		return json_encode($result);
	}
	//


	/*public function angular_getPromoData()
	{
		$promoId = $this->input->get('param1');

		$data =  $this->db->get_where('VAL_MST_PROMO', array('promotion_id' => $promoId,'is_active' => '1'))->result();
			
			$array_data = array();
		   	$i=0;
		   	foreach($data as $r){
		    	$array_data[$i]['disc_inst_fee']=$r->disc_inst_fee;
		    	$i++;
			}
		echo json_encode($array_data);
	}	*/

	//Regular Admin
	public function app_tl()
	{	
		$data['module_title']  = 'Approval TL';
		$data['head'] = $this->load->view('templatemodule/head_panel',$data);
		$data['side_menu'] = $this->load->view('templatemodule/side_menu',$data,TRUE);
		//DROPDOWN PROVINCE
		$data['provinsi']=$this->m_entryp->provinsi();
		
		$data['allData'] = $this->m_entryp->data_apptl();
		$data['allDataW'] = $this->m_entryp->dataep_rw();
		$this->load->view('v_entryp_tl',$data);
	}

	public function app_tl_u(){
		//$_POST 					= json_decode(file_get_contents('php://input'), true);
		
		//$statusep			= $this->input->post('STATUSEP');
		/*$kondisi['PROSPECT_ID']  = $this->input->post('PROSPECT_ID');*/
		$prospectid 		= $this->input->post('PROSPECT_ID');		
		$processid 			= $this->input->post('PROCESSID');
		$dthnote 			= $this->input->post('dthnote');
		$cfirstname			= $this->input->post('cfirstname');
		$cphone				= $this->input->post('cphone');
		$AGREEMENT			= $this->input->post('AGREEMENT');
		$caddress 			= $this->input->post('caddress');
		$cbillingaddress		= $this->input->post('cbillingaddress');
		$cemergency			= $this->input->post('cemergency');
		$cpackage 			= $this->input->post('cpackage');
		

		//$BDATE_D			= $this->input->post('BDATEE');
		$BDATE_D			= "1994-05-08";
		$DATE 				= "00:00:00";
		$BDATE				= $BDATE_D." ".$DATE;		
		$FNAME 				= $this->input->post('FNAME');
		$MNAME 				= $this->input->post('MNAME');
		$LNAME 				= $this->input->post('LNAME');
		$EMAIL 				= $this->input->post('EMAIL');
				
		$mobilep  			= $this->input->post('mobilep');
		$HOME_PHONE  			= $this->input->post('HOME_PHONE');
		$WORK_PHONE  			= $this->input->post('WORK_PHONE');
		$extrap 				= $this->input->post('extrap');
		$mainp  				= $this->input->post('mainp');
		$ADDRESS 			= $this->input->post('ADDRESS');
		$PROVINCE  			= $this->input->post('PROVINCE');
		$CITY 				= $this->input->post('CITY');
		$DISTRICT  			= $this->input->post('DISTRICT');
		$SUBDISTRICT  		= $this->input->post('SUBDISTRICT');
		$ZIPCODE  			= $this->input->post('ZIPCODE');
		$INSTALL_ADDRESS 	= $this->input->post('INSTALL_ADDRESS');
		$INSTALL_LANDMARK 	= $this->input->post('INSTALL_LANDMARK');
		$PROVINCE_INSTALL 	= $this->input->post('PROVINCE_INSTALL');
		$CITY_INSTALL 		= $this->input->post('CITY_INSTALL');
		$DISTRICT_INSTALL 	= $this->input->post('DISTRICT_INSTALL');
		$SUBDISTRICT_INSTALL = $this->input->post('SUBDISTRICT_INSTALL');
		$ZIPCODE_INSTALL 	= $this->input->post('ZIPCODE_INSTALL');
		$INSTALL_ADDRESSbilling = $this->input->post('INSTALL_ADDRESSbilling');
		$INSTALL_LANDMARKbilling = $this->input->post('INSTALL_LANDMARKbilling');
		$PROVINCE_BILLING 	= $this->input->post('PROVINCE_BILLING');
		$CITY_BILLING 		= $this->input->post('CITY_BILLING');
		$DISTRICT_BILLING 	= $this->input->post('DISTRICT_BILLING');
		$SUBDISTRICT_BILLING = $this->input->post('SUBDISTRICT_BILLING');
		$ZIPCODE_BILLING 	= $this->input->post('ZIPCODE_BILLING');
		$EMERGENCY_NAME 		= $this->input->post('EMERGENCY_NAME');
		$E_SIBLING 			= $this->input->post('E_SIBLING');
		$E_PHONE 			= $this->input->post('E_PHONE');
		$E_ADDRESS 			= $this->input->post('E_ADDRESS');
		$PAYMENT_PERIOD 		= $this->input->post('PAYMENT_PERIOD');
		$PACKAGE_BRAND 		= $this->input->post('PACKAGE_BRAND');
		$STATUS_PACKAGE 		= $this->input->post('STATUS_PACKAGE');
		$PROMO 				= $this->input->post('PROMO');
		$PACKAGE_BASIC 		= $this->input->post('PACKAGE_BASIC');
		$PACKAGE_ALACARTE 	= $this->input->post('PACKAGE_ALACARTE');
	
		
		$statusep = "generatenumber";
		$dthnote = "zz";
			$fields_string ='';
			$url = 'http://192.168.177.185:1111/api/customer/AddNewCustomerBundle';
			/*$fields = array(
			'ClassId' => "1",                       //classID               
            'TypeId' => "1",                        //typeID               
            'PropertyTypeId' => $house_type,                //housetype
            'CustomerCaptureCategoryId' => "1",     //Category :residential..
            'ReferenceTypeKey' => $identype,              //KTP dll
            'ReferenceNumber' => $identypen,               //NO KTP
            'TitleId' => $SALUTATION,               //salutation
            'FirstName' => $FNAME,
            'MiddleName' => $MNAME,
            'Surname' => $LNAME,
            'Email' => $EMAIL,
            'MobilePhone' => $mobilep,
            'WorkPhone' => $WORK_PHONE,
            'HomePhone' => $HOME_PHONE,
            'CountryId' => "1",                     //indonesia
            'BigCity' => $PROVINCE,
            'SmallCity' => $CITY,
            'PostalCode' => $ZIPCODE,
            'ValidAddressId' => "47",
            'Street' => $ADDRESS,
            'BirthDate' => $BDATE
				);  
			foreach($fields as $key=>$value) {
				$fields_string .= $key.'='.$value.'&';
			}
			rtrim($fields_string, '&');


			$ch = curl_init();

			curl_setopt($ch,CURLOPT_URL, $url);
			curl_setopt($ch,CURLOPT_POST, count($fields));
			curl_setopt($ch,CURLOPT_POSTFIELDS, $fields_string);
			curl_setopt($ch,CURLOPT_RETURNTRANSFER,TRUE);


			$result = curl_exec($ch);
			//echo $result;
			$result_json = json_decode($result);
			//echo $result_json->Id;
			$ref_id = $result_json->Id;
			
			
			curl_close($ch);  */
			$jsonData = array(
            'ClassId' => "1",                       //classID               
            'TypeId' => "1",                        //typeID               
            'PropertyTypeId' => "1",                //housetype
            'CustomerCaptureCategoryId' => "1",     //Category :residential..
            'ReferenceTypeKey' => "1",              //KTP dll
            'ReferenceNumber' => "1",               //NO KTP
            'TitleId' => "1",                       //salutation
            'FirstName' => $FNAME,
            'MiddleName' => "asd",
            'Surname' => "asa",
            'Email' => "aasd@gmail.com",
            'MobilePhone' => "12321",
            'WorkPhone' => "23532",
            'HomePhone' => "2134124",
            'CountryId' => "1",                     //indonesia
            'BigCity' => "JAKARTA BARAT",
            'SmallCity' => "TAMAN SARI",
            'PostalCode' => "11140000",
            'ValidAddressId' => "47",
            'Street' => "KRUKUT",
            /*'BirthDate' => "2011-05-20 00:00:00",*/
            'BirthDate' => "2011-05-20 00:00:00",
            'AddressAgreement' => [array(
            	'PostalCode' => "98373008"
            	)],
            'AddressInstall' => [array(
            	'PostalCode' => "98373007"
            	)],
            'AddressBilling' => [array(
            	'PostalCode' => "98373005"
            	)],
            'BankName' => "saya",
            'FaName' => "saya",
            'MOPId' => "82",
            'CreditCardNumber' => "122222222222"

            );



			$fields = json_encode($jsonData);
			$ch = curl_init();
			curl_setopt($ch,CURLOPT_URL, $url);
//Tell cURL that we want to send a POST request.
			curl_setopt($ch, CURLOPT_POST, 1);

//Attach our encoded JSON string to the POST fields.
			curl_setopt($ch, CURLOPT_POSTFIELDS, $fields);
			curl_setopt($ch,CURLOPT_RETURNTRANSFER,TRUE);

//Set the content type to application/json
			curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json')); 

//Execute the request
			$result = curl_exec($ch);
			$result_json = json_decode($result);
			$ref_id= $result_json->Id;
/*var_dump($a);
exit;*/
			curl_close($ch);




			$suc_mes				="true";
			$json 					= file_get_contents("http://192.168.177.221/api-joget/v1/get_ActivityId/".$processid);
			$arrai					= json_decode($json, true);
			$activityid				= $arrai[0]['ActivityId'];

			$ch 					= curl_init("http://192.168.177.235:8080/jw/web/json/workflow/assignment/completeWithVariable/".$activityid."?var_status=".$statusep."&j_username=tl_admin&j_password=12345");
			curl_setopt($ch, CURLOPT_POST,true);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			curl_setopt($ch, CURLOPT_HEADER, 0);
			$data 					= curl_exec($ch);
			curl_close($ch);
			$this->m_entryp->updateDataEP_Reg_dth($statusep, $prospectid,$dthnote,$suc_mes,$ref_id);
			redirect('entryp/Entryp/reg_admin');
	
		 
		

		
		
	}


	// update status TL
	public function app_tl_detail($id){
		//$data['buku'] = $this->buku_m->getBuku($id);
		$prospectid 		= $id;	
		$this->m_entryp->log_tl($prospectid);



		$data['module_title']  = 'Regular';
		$data['head'] = $this->load->view('templatemodule/head_panel',$data);
		$data['side_menu'] = $this->load->view('templatemodule/side_menu',$data,TRUE);
		
		//DROPDOWN PROVINCE
		$data['provinsi']=$this->m_entryp->provinsi();

		//DROPDOWN PROMO
		$data['promotion'] = $this->m_entryp->promotion();
		
		//DROPDOWN PRODUCT
		$data['produk'] = $this->m_entryp->product();
		$data['admin_reject'] = $this->m_entryp->admin_reject();
		$data['admin_approve'] = $this->m_entryp->admin_approve();
		$data['admin_pending'] = $this->m_entryp->admin_pending();
		$data['light_verification'] = $this->m_entryp->get_light_verification();
		$data['master_field'] = $this->m_entryp->master_field();

		//$data['allData'] = $this->m_entryp->getAllData();
		$data['tl_data'] = $this->m_entryp->data_tl($id);
		$this->load->view('v_entryp_u_tl',$data);

	}
	//
	public function log_admin(){
		$_POST 					= json_decode(file_get_contents('php://input'), true);
		$idp					= $_POST['idprospect'];
		
		//$this->m_entryp->add_data_dth($idp, $category,$sub_category);
		/*redirect('entryp/Entryp/reg_dth');*/
		/*

		var_dump($idp);
		exit;*/
		/*$ch 					= curl_init("http://192.168.168.219/valsys/entryp/Entryp/add_datadth");
		curl_setopt($ch, CURLOPT_POST,true);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_HEADER, 0);
		$data 					= curl_exec($ch);
		curl_close($ch);
		$process 				= json_decode($data, true);
		$actid					= $process['age'];
		var_dump($actid);
		exit;*/
		/*$idpn			= $this->input->post('age');
		var_dump($idpn);
		exit;*/
		/*$kondisi['PROSPECT_ID']  = $this->input->post('PROSPECT_ID');*/
		
		
		
	}
	public function add_datadth(){
		$_POST = json_decode(file_get_contents('php://input'), true);
		$idp					= $_POST['idprospect'];
		$category				= $_POST['category'];
		$sub_category			= $_POST['subcategory'];
		$this->m_entryp->add_data_dth($idp, $category,$sub_category);
		/*redirect('entryp/Entryp/reg_dth');*/
		/*

		var_dump($idp);
		exit;*/
		/*$ch 					= curl_init("http://192.168.168.219/valsys/entryp/Entryp/add_datadth");
		curl_setopt($ch, CURLOPT_POST,true);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_HEADER, 0);
		$data 					= curl_exec($ch);
		curl_close($ch);
		$process 				= json_decode($data, true);
		$actid					= $process['age'];
		var_dump($actid);
		exit;*/
		/*$idpn			= $this->input->post('age');
		var_dump($idpn);
		exit;*/
		/*$kondisi['PROSPECT_ID']  = $this->input->post('PROSPECT_ID');*/
		
		
		
	}


	public function kacab_app_cancel(){
		$_POST 					= json_decode(file_get_contents('php://input'), true);
		$idp					= $_POST['idprospect'];
		$this->m_entryp->upd_kacab_cancel($idp);
		
	}

	//app TL
	public function tl_app_cancel(){
		$_POST 					= json_decode(file_get_contents('php://input'), true);
		$idp					= $_POST['idprospect'];
		$this->m_entryp->upd_tl_cancel($idp);
		
	}

	//DTH CANCEL
	public function dth_app_cancel(){
		$_POST 					= json_decode(file_get_contents('php://input'), true);
		$idp					= $_POST['idprospect'];
		$this->m_entryp->upd_dth_cancel($idp);
		
	}


	///ADMIN APPROVAL
	public function admin_app(){
		$_POST 					= json_decode(file_get_contents('php://input'), true);
		$idp					= $_POST['idprospect'];
		$infod					= $_POST['informasid'];
		$status					= $_POST['status'];
		$reason					= $_POST['reason'];
		$this->m_entryp->add_admin_app($idp, $infod,$status,$reason);
		
	}
	///KACAB APPROVAL
	public function kacab_app(){
		$_POST 					= json_decode(file_get_contents('php://input'), true);
		/*var_dump($_POST);
		exit;*/
		$idp					= $_POST['idprospect'];
		$status					= $_POST['status'];
		$reason					= $_POST['reason'];
		$user_desc   = $this->dx_auth->get_user_desc();
		$this->m_entryp->add_remarks($idp,$status,$reason,$user_desc);
		
	}
	public function admin_app_rem(){
		$_POST 					= json_decode(file_get_contents('php://input'), true);
		$idp					= $_POST['idprospect'];
		$infod					= $_POST['informasid'];
		$status					= $_POST['status'];
		$reason					= $_POST['reason'];
		$this->m_entryp->rem_admin_app($idp, $infod,$status,$reason);
		
	}
	public function kacab_app_rem(){
		$_POST 					= json_decode(file_get_contents('php://input'), true);
		$idp					= $_POST['idprospect'];
		$infod					= $_POST['informasid'];
		$status					= $_POST['status'];
		$reason					= $_POST['reason'];
		$this->m_entryp->rem_kacab_app($idp, $infod,$status,$reason);
		
	}
	public function admin_app_cancel(){
		$_POST 					= json_decode(file_get_contents('php://input'), true);
		$idp					= $_POST['idprospect'];
		$this->m_entryp->upd_admin_cancel($idp);
		
	}
	public function btp_app_cancel(){
		$_POST 					= json_decode(file_get_contents('php://input'), true);
		$idp					= $_POST['idprospect'];
		$this->m_entryp->upd_btp_cancel($idp);
		
	}
	public function dth_app_rem(){
		$_POST 					= json_decode(file_get_contents('php://input'), true);
		$idp					= $_POST['idprospect'];
		$category				= $_POST['category'];
		$subcategory			= $_POST['subcategory'];
		
		$this->m_entryp->rem_dth_app($idp, $category,$subcategory);
		
	}
	public function update_admin_app(){
		$_POST 					= json_decode(file_get_contents('php://input'), true);
		$status_final			= $_POST['finall'];
		$idp					= $_POST['idprospect'];
		$light					= $_POST['lightv'];
		$processid				= $_POST['process'];
		/*var_dump($_POST);
		exit;*/
		


		/*$json 					= file_get_contents("http://192.168.177.221/api-joget/v1/get_ActivityId/".$processid);
		$arrai					= json_decode($json, true);
		$activityid				= $arrai[0]['ActivityId'];

		$ch 					= curl_init("http://192.168.177.235:8080/jw/web/json/workflow/assignment/completeWithVariable/".$activityid."?var_status=".$statusep."&j_username=ryan&j_password=12345");
		curl_setopt($ch, CURLOPT_POST,true);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_HEADER, 0);
		$data 					= curl_exec($ch);
		curl_close($ch);
		
		$process 				= json_decode($data, true);
		$actid					= $process['activityId'];*/

		//duplicate check
		//id1 = firstname
        //id2 = middlename
        //id3 = surname
        //id4 = homephone
        //id5 = workphone
        //id6 = mobilephone
        //id7 = emergencyphone
        //id8 = identificationId
        //id9 = pln id
        //id10 = address
        //id11 = zipcode
		$fname 	= 'MUNADI' ;
		//$fname 	= $_POST['first_name']; ;
		//$middlen 	= $_POST['middle_name']; ;
		//$sname 	= $_POST['last_name']; ;
		//$homep 	= $_POST['HOME_PHONE']; ;
		//$workp 	= $_POST['wphone']; ;
		//$workp 	= $_POST['MOBILE_PHONE']; ;
		$middlen = 'ssa';	
		$sname = 'asasg';
		$homep = '02153462703';
		$workp = '0215800900';
		$reference = '1426';

		/*$jsonduplicate 				= file_get_contents("http://192.168.179.11/webapi_icc_valsys/api/customer/DuplicationCheckCustomer/manyparams/".$fname."/".$middlen."/".$sname."/".$homep."/".$workp."/".$reference."/".$reference."/".$reference."/".$reference."");
		$arraidc					= json_decode($jsonduplicate, true);*/
		//$duplicate_value			= $arraidc[0]['SimilarityOfCustomerName'];
		//$duplicate_value_phone			= $arraidc[0]['SimilarityOfPhone'];
		$duplicate_value_phone			= 80;
		//$duplicate_value_name			= $arraidc[0]['SimilarityOfCustomerName'];
		$duplicate_value_name			= 70;
		/*$duplicate_value_phone			= '90';
		$duplicate_value_name			= '70';
		*//*var_dump($xx);
		exit;*/
		//$duplicate_value	= 90;
		/*for($i=0;$i<arraidc.length;$i++){
			if((arraidc[i]['SimilarityOfPhone']) > 80){
				$duplicate_stat	= 'YES';
				break;	
			}else if ((arraidc[i]['SimilarityOfCustomerName']) > 80){
				$duplicate_stat	= 'YES';
				break;	
			}else if(i==arraidc.length){
				$duplicate_stat	= 'NO';
				break;
			}
		}*/

		if ($duplicate_value_phone >80 ){
			$duplicate_stat	= 'YES';
		}else if ($duplicate_value_name >80 ){
			$duplicate_stat	= 'YES';
		}else {
			$duplicate_stat	= 'NO';
		}
		//end of duplicate check
		$this->m_entryp->upd_admin_app($idp,$status_final,$light,$duplicate_value_name,$duplicate_value_phone,$duplicate_stat);
	
		
		redirect('entryp/Entryp/reg_admin');
		
	}
	//



	public function update_kacab_app(){
		$_POST 					= json_decode(file_get_contents('php://input'), true);
		$status_final			= $_POST['finall'];
		$idp					= $_POST['idprospect'];
		$light					= $_POST['lightv'];
		$processid				= $_POST['process'];

		$json 					= file_get_contents("http://192.168.177.221/api-joget/v1/get_ActivityId/".$processid);
		$arrai					= json_decode($json, true);
		$activityid				= $arrai[0]['ActivityId'];

		$ch 					= curl_init("http://192.168.177.235:8080/jw/web/json/workflow/assignment/completeWithVariable/".$activityid."?var_status=".$statusep."&j_username=kacab&j_password=12345");
		curl_setopt($ch, CURLOPT_POST,true);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_HEADER, 0);
		$data 					= curl_exec($ch);
		curl_close($ch);
		
		$process 				= json_decode($data, true);
		$actid					= $process['activityId'];

		//duplicate check
		
		$fname 	= 'MUNADI' ;
		$middlen = 'ssa';	
		$sname = 'asasg';
		$homep = '02153462703';
		$workp = '0215800900';
		$reference = '1426';

		$duplicate_value_phone			= '90';
		$duplicate_value_name			= '70';
		/*var_dump($xx);
		exit;*/
		//$duplicate_value	= 90;
		
		if ($duplicate_value_phone >80 ){
			$duplicate_stat	= 'YES';
		}else if ($duplicate_value_name >80 ){
			$duplicate_stat	= 'YES';
		}else {
			$duplicate_stat	= 'NO';
		}
		//end of duplicate check
		$this->m_entryp->upd_admin_app($idp,$status_final,$light,$duplicate_value_name,$duplicate_value_phone,$duplicate_stat);
	
		
		redirect('entryp/Entryp/reg_admin');
		
	}
	//

	
	public function angular_getProductPrice()
	{
		//$basic_id = $this->input->get('param1');
		$_POST = json_decode(file_get_contents('php://input'), true);
		$coba 			= array();
		$classids 	= $_POST['classids'];
		$basic  	= $_POST['basic'];
		$add_on   	= $_POST['add_on'];

		$json_basic 		= file_get_contents("http://192.168.177.185:1111/api/product/YangProductPriceByProductId/".$basic);
		$json_basic_array 	= json_decode($json_basic, true);
		//$price_basic		= $json_basic_array['the_items'][0]['the_ListPriceConditions'][2]['PriceAmounts'][0]['Amount'];
		for($i=0;$i<count($json_basic_array['the_items'][0]['the_ListPriceConditions']);$i++)
		{
			if($json_basic_array['the_items'][0]['the_ListPriceConditions'][$i]['LedgerAccountId']==418)
			{
				//var_dump($json_basic_array['the_items'][0]['the_ListPriceConditions'][$i]['LedgerAccountId']);
				//var_dump($json_basic_array['the_items'][0]['the_ListPriceConditions'][$i]['PriceAmounts'][0]['Amount']);
				//var_dump($array['the_items'][0]['the_ListPriceConditions'][$i]['']);
				//echo '<pre>',print_r($json_basic_array['the_items'][0]['the_ListPriceConditions'][$i]['CustomerClassIds']);'<pre>';	
				
				for($j=0;$j<count($json_basic_array['the_items'][0]['the_ListPriceConditions'][$i]['CustomerClassIds']);$j++)
				{
					if($json_basic_array['the_items'][0]['the_ListPriceConditions'][$i]['CustomerClassIds'][$j]==$classids)
					{
						$price_basic = $json_basic_array['the_items'][0]['the_ListPriceConditions'][$i]['PriceAmounts'][0]['Amount']; 
					}
				}
			}
			
			//echo "<br>";

		}
		//var_dump($price_basic);
		array_push($coba, $price_basic);
		


		$add_on_values 	= array_values($add_on);
		
		//var_dump($add_on_values);
		for($i=0;$i<count($add_on);$i++)
		{
			$addon_temp_id = $add_on_values[$i]['PRODUCT_ID'];
			
			$json 	= file_get_contents("http://192.168.177.185:1111/api/product/YangProductPriceByProductId/".$addon_temp_id);
			$array_addon	= json_decode($json, true);
			//var_dump($array_addon);
			//$price 	= $array_addon['the_items'][0]['the_ListPriceConditions'][0]['PriceAmounts'][0]['Amount'];
			for($j=0;$j<count($array_addon['the_items'][0]['the_ListPriceConditions']);$j++)
			{
				//var_dump($array_addon['the_items'][0]['the_ListPriceConditions'][$j]['LedgerAccountId']);
				if($array_addon['the_items'][0]['the_ListPriceConditions'][$j]['LedgerAccountId']==420)
				{
					//var_dump($array_addon['the_items'][0]['the_ListPriceConditions'][0]['CustomerClassIds']);
					//echo '<pre>',print_r($array_addon['the_items'][0]['the_ListPriceConditions'][$j]['CustomerClassIds']);'<pre>';
					//var_dump(count($array_addon['the_items'][0]['the_ListPriceConditions'][$j]['CustomerClassIds']));
					for($k=0;$k<count($array_addon['the_items'][0]['the_ListPriceConditions'][$j]['CustomerClassIds']);$k++)
					{
						if($array_addon['the_items'][0]['the_ListPriceConditions'][$j]['CustomerClassIds'][$k]==$classids)
						{
							$price_addon = $array_addon['the_items'][0]['the_ListPriceConditions'][$j]['PriceAmounts'][0]['Amount']; 
							//var_dump($price_addon);
							array_push($coba, $price_addon);	
						}
						
					}
				}
				
				

			}	
			

		}
		echo json_encode($coba);
			
	}

	public function angular_getStatusEp()
	{
		$prospect_number = $this->input->get('param1');
		//var_dump($prospect_number);exit;

		$data =  $this->db->get_where('PROSPECT', array('PROSPECT_NBR' => $prospect_number))->result();			
		   	foreach($data as $r){
		    	$statusep=trim($r->statusep);
		    	
			}

		//var_dump($statusep); exit;
		echo ($statusep);
	}

	public function angular_UpdateStatusEP()
	{
		$_POST = json_decode(file_get_contents('php://input'), true);
		$prospect_nbr  		= $_POST['pn'];
		
		//var_dump($_POST['pn']);exit;
		$execute	= $this->m_entryp->UpdateStatusEP($prospect_nbr);

	}
	
	public function angular_getProspectDatabyProspectNumber()
	{
	
		$prospectNumber = $this->input->get('param1');



		if($prospectNumber != null) 
		{
			$data =  $this->db->get_where('PROSPECT_VW_DTL_2', array('PROSPECT_NBR' => $prospectNumber))->result();
			
			$array_data = array();
		   	$i=0;
		   	foreach($data as $r)
		   	{
		   		$array_data[$i]['PROSPECT_ID']=$r->PROSPECT_ID;
		   		$array_data[$i]['REF_CUST_ID']=$r->REF_CUST_ID;
			    $array_data[$i]['SALESC']=$r->SALESC;
		   		$array_data[$i]['FORMN']=$r->FORMN;
		   		$array_data[$i]['PROSPECT_TYPE']=$r->PROSPECT_TYPE;
		   		$array_data[$i]['HOME_PHONE']=$r->HOME_PHONE;
		   		$array_data[$i]['MOBILE_PHONE']=$r->MOBILE_PHONE;
		   		$array_data[$i]['OPENTITY_ID']=$r->OPENTITY_ID;
		   		$array_data[$i]['PLN_ID']=$r->PLN_ID;
		   		$array_data[$i]['ID_TYPE']=$r->ID_TYPE;

		   		$array_data[$i]['IDTYPE_NUMBER']=$r->IDTYPE_NUMBER;
		   		$array_data[$i]['EXP_DATE']=$r->EXP_DATE;


		   		$array_data[$i]['OCCUPATION']=$r->OCCUPATION;
		   		$array_data[$i]['INCOME']=$r->INCOME;
		   		$array_data[$i]['PLACE_BIRTH']=$r->PLACE_BIRTH;
		   		$array_data[$i]['DATE_OF_BIRTH']=$r->DATE_OF_BIRTH;
		   		$array_data[$i]['SALES_CODE']=$r->SALES_CODE;
		   		$array_data[$i]['INSTALLATION_DATE']=$r->INSTALLATION_DATE;
		   		$array_data[$i]['INSTALLATION_TIME']=$r->INSTALLATION_TIME;

		   		$array_data[$i]['CONFIRMATION_TIME_START']=$r->CONFIRMATION_TIME_START;
		   		$array_data[$i]['CONFIRMATION_TIME_END']=$r->CONFIRMATION_TIME_END;



		   		$array_data[$i]['BUILDING_TYPE']=$r->BUILDING_TYPE;
		   		$array_data[$i]['BUILDING_STATUS']=$r->BUILDING_STATUS;
		   	
		   		$array_data[$i]['SALUTATION']=$r->SALUTATION;
			    $array_data[$i]['FIRST_NAME']=$r->FIRST_NAME;
			    $array_data[$i]['MIDDLE_NAME']=$r->MIDDLE_NAME;
			    $array_data[$i]['LAST_NAME']=$r->LAST_NAME;

			    $array_data[$i]['WORK_PHONE']=$r->WORK_PHONE;
			    $array_data[$i]['HOME_PHONE']=$r->HOME_PHONE;
			    $array_data[$i]['MOBILE_PHONE']=$r->MOBILE_PHONE;
			    $array_data[$i]['EMAIL']=$r->EMAIL;

			    $array_data[$i]['STREET']=$r->STREET;
			    $array_data[$i]['PROSPECT_ID_ICC']=$r->PROSPECT_ID_ICC;
			    $array_data[$i]['SUBDISTRICT']=$r->SUBDISTRICT;
			    $array_data[$i]['DISTRICT']=$r->DISTRICT;
			    $array_data[$i]['CITY']=$r->CITY;
			    $array_data[$i]['PROVINCE']=$r->PROVINCE;
			    $array_data[$i]['POSTALCODE']=$r->POSTALCODE;
			    $array_data[$i]['COUNTRY']=$r->COUNTRY;
			    
			    if($r->FBEDA=="YES")
			    {
			    	$array_data[$i]['FBEDA']=false;	
			    }
			    else
			    {
			    	$array_data[$i]['FBEDA']=true;	
			    }

			    if($r->FBEDABILLING_IDENTITY=="YES")
			    {
			    	$array_data[$i]['FBEDABILLING_IDENTITY']=false;	
			    }
			    else
			    {
			    	$array_data[$i]['FBEDABILLING_IDENTITY']=true;	
			    }
			    
			    

			    $array_data[$i]['INSTALLATION_ADDRESS']=$r->INSTALLATION_ADDRESS;
			    $array_data[$i]['INSTALLATION_DIRECTION']=$r->INSTALLATION_DIRECTION;
			    $array_data[$i]['INSTALLATION_LANDMARK']=$r->INSTALLATION_LANDMARK;
			    $array_data[$i]['INSTALLATION_PROVINCE']=$r->INSTALLATION_PROVINCE;
			    $array_data[$i]['INSTALLATION_CITY']=$r->INSTALLATION_CITY;
			    $array_data[$i]['INSTALLATION_DISTRICT']=$r->INSTALLATION_DISTRICT;
			    $array_data[$i]['INSTALLATION_SUBDISTRICT']=$r->INSTALLATION_SUBDISTRICT;
			    $array_data[$i]['INSTALLATION_ZIPCODE']=$r->INSTALLATION_ZIPCODE;

			    $array_data[$i]['BILLING_ADDRESS']=$r->BILLING_ADDRESS;
			    $array_data[$i]['BILLING_DIRECTION']=$r->BILLING_DIRECTION;
			    $array_data[$i]['BILLING_LANDMARK']=$r->BILLING_LANDMARK;
			    $array_data[$i]['BILLING_PROVINCE']=$r->BILLING_PROVINCE;
			    $array_data[$i]['BILLING_CITY']=$r->BILLING_CITY;
			    $array_data[$i]['BILLING_DISTRICT']=$r->BILLING_DISTRICT;
			    $array_data[$i]['BILLING_SUBDISTRICT']=$r->BILLING_SUBDISTRICT;
			    $array_data[$i]['BILLING_ZIPCODE']=$r->BILLING_ZIPCODE;

			    $array_data[$i]['DATE_OF_BIRTH']=$r->DATE_OF_BIRTH;
			    $array_data[$i]['RELIGION']=$r->RELIGION;
			    $array_data[$i]['EC_PHONE']=$r->EC_PHONE;
			    $array_data[$i]['EC_RELATION']=$r->EC_RELATION;
			    $array_data[$i]['EC_NAME']=$r->EC_NAME;
			    $array_data[$i]['EC_ADDR']=$r->EC_ADDR;
			    $array_data[$i]['GENDER']=$r->GENDER;

			    $array_data[$i]['NIK_SALES']=$r->NIK_SALES;
			    $array_data[$i]['NAME_SALES']=$r->NAME_SALES;
			    
			    $array_data[$i]['INSTALLATION_COST']=$r->INSTALLATION_COST;
			    $array_data[$i]['COST_PACKAGE']=$r->COST_PACKAGE;
			    $array_data[$i]['ALACARTE_COST']=$r->ALACARTE_COST;
			    $array_data[$i]['TOTAL_COST']=$r->TOTAL_COST;
			    
			    $array_data[$i]['PAYMENT_MODE']=$r->PAYMENT_MODE;
			    $array_data[$i]['CURRENCY_CODE']=$r->CURRENCY_CODE;
			    $array_data[$i]['AMOUNT']=$r->AMOUNT;

			    $array_data[$i]['PAYMENT_NOTES']=$r->PAYMENT_NOTES;
			    $array_data[$i]['PAYMENT_BANK_NAME']=$r->PAYMENT_BANK_NAME;
			    $array_data[$i]['PAYMENT_ACCOUNT_NAME']=$r->PAYMENT_ACCOUNT_NAME;
			    $array_data[$i]['PAYMENT_CARD_TYPE']=$r->PAYMENT_CARD_TYPE;
			    $array_data[$i]['PAYMENT_CARD_NUMBER']=$r->PAYMENT_CARD_NUMBER;
			    $array_data[$i]['PAYMENT_EXP_DATE']=$r->PAYMENT_EXP_DATE;
			    $array_data[$i]['PAYMENT_DATE']=$r->PAYMENT_DATE;





			    $array_data[$i]['entity_code']=$r->entity_code;
			    $array_data[$i]['entity_type']=$r->entity_type;
			    $array_data[$i]['entity_name']=$r->entity_name;

			    $array_data[$i]['HEAD_BRANCH']=$r->HEAD_BRANCH;
			    
			    $array_data[$i]['DIFFERENT_CAUSE']=$r->DIFFERENT_CAUSE;
			    


			    $array_data[$i]['branch']=$r->branch;
			    $array_data[$i]['sales_channel']=$r->sales_channel;


			   
			 
		   }

		   
		   $data_package_order = $this->db->get_where('PROSPECT_PACKAGE_ORDER', array('PROSPECT_ID' => $array_data[0]['PROSPECT_ID']))->result();
		   //var_dump($data_package_order);
		   
		   
		   $data_package_alacarte = $this->db->get_where('PROSPECT_PACKAGE_ALACARTE', array('PROSPECT_ID' => $array_data[0]['PROSPECT_ID']))->result();
		   

		   foreach($data_package_order as $r)
		   {
		   		$array_data[$i]['BRAND']=$r->BRAND;
		   		$array_data[$i]['STATUS']=$r->STATUS;
		   		$array_data[$i]['AVAILABLE_PROMO']=$r->AVAILABLE_PROMO;
		   		$array_data[$i]['BASIC']=$r->BASIC;
		   		$array_data[$i]['BILLING_FREQUENCY']=$r->BILLING_FREQUENCY;

		   }
		   
		   
		   //push data dari tabel prospect_package_alacarte
		   $j=0;
		   foreach ($data_package_alacarte as $r) {
		   		//$array_data[$i]['ALACARTE'][$j]['service_id']=$r->ALACARTE;
		   		$array_data[$i]['ALACARTE'][$j]["service_id"]=$r->ALACARTE;
					$detail_alacarte_data = $this->db->get_where('VAL_PRODUCT_PRICE', array('service_id' => $array_data[$i]['ALACARTE'][$j]["service_id"],'bundle_id'=> $array_data[$i]['BASIC']))->result();
					//var_dump($detail_alacarte_data);exit;
					foreach ($detail_alacarte_data as $r) {
						$array_data[$i]['ALACARTE'][$j]["price"]=$r->price;
						$array_data[$i]['ALACARTE'][$j]["service_name"]=$r->service_name;
						//$array_data[$i]['ALACARTE'][$j]["selected"]=true;						
					}

				$j++;   		
		   }
		   //var_dump($array_data);

		}
		
		echo json_encode($array_data);
		

	}


	public function angular_getGenerateProspectNumber()
	{   

	   $sales_code = $this->input->get('param1');
	   	//var_dump($sales_code);
		$q = "CALL valsys_dev.PROS_NBR_GENERATOR( '$sales_code', @OUTVAL)";
		$q1 = "SELECT @OUTVAL";
		
		$data = $this->db->query($q);
		$data1 = $this->db->query($q1)->result();
		
		$outval = trim($data1[0]->{'@OUTVAL'});
		//$outval = str_replace('"', '', $data1[0]->{'@OUTVAL'});
		//$outval_trim = trim($outval);
		echo ($outval);

	}


	/*public function getMasterIdentityType()
	{
		$data = $this->db->get('MASTER_IDENTITY_TYPE')->result();
		$arr_data = array();
		$i=0;
		foreach($data as $r){
			$arr_data[$i]['IDENTITY_TYPE_ID']=$r->IDENTITY_TYPE_ID;
			$arr_data[$i]['IDENTITY_TYPE_NAME']=$r->IDENTITY_TYPE_NAME;
			$i++;
		}
		echo json_encode($arr_data);
	}*/
	
	 function getProspectn(){
	 	var_dump($_GET); exit;
			$this->load->model('m_entryp');
			if (isset($_GET['term'])){
			$q = strtolower($_GET['term']);
			var_dump($q );exit;
			$this->m_entryp->show_prospectn($q);
			}	 
	  }

	  
	
	public function getMasterDifferentCauses()
	{
		$data = $this->db->get('MASTER_DIFFERENT_CAUSES')->result();
		$arr_data = array();
		$i=0;
		foreach($data as $r){
			$arr_data[$i]['DIFFERENT_CAUSES_ID']=$r->DIFFERENT_CAUSES_ID;
			$arr_data[$i]['DIFFERENT_CAUSES_DESCR']=$r->DIFFERENT_CAUSES_DESCR;
			$i++;
		}
		echo json_encode($arr_data);

	}
	public function getMasterProductHardware()
	{
		$result = $this->m_entryp->masterProductHardware();
		return json_encode($result);
	}	

	public function getMasterLogNotes()
	{
		$prospect_number = $this->input->get('prospectNumber');

		$data = $this->db->get_where('LOG_NOTES_STATUS', array('LOG_NOTES_STATUS_PROSPECT_NBR'=>$prospect_number))->result();
		$arr_data = array();
		$i=0;
		foreach($data as $r){
			$arr_data[$i]['LOG_NOTES_STATUS_PROSPECT_NBR']=$r->LOG_NOTES_STATUS_PROSPECT_NBR;
			$arr_data[$i]['LOG_NOTES_STATUS_DESCRIPTION']=$r->LOG_NOTES_STATUS_DESCRIPTION;
			$arr_data[$i]['LOG_NOTES_STATUS_INSERT_DATE']=$r->LOG_NOTES_STATUS_INSERT_DATE;
			$arr_data[$i]['LOG_NOTES_STATUS_INSERT_BY']=$r->LOG_NOTES_STATUS_INSERT_BY;

			$i++;
		}
		
		echo json_encode($arr_data);
	}  
	public function getMasterDirectDebit()
	{
		$data = $this->db->get('MASTER_DIRECT_DEBIT')->result();
		$arr_data = array();
		$i=0;
		foreach($data as $r){
			$arr_data[$i]['DIRECT_DEBIT_ID']=$r->DIRECT_DEBIT_ID;
			$arr_data[$i]['DIRECT_DEBIT_DESCRIPTION']=$r->DIRECT_DEBIT_DESCRIPTION;
			$i++;
		}
		echo json_encode($arr_data);
	}
	public function getMasterVerificationTime()
	{
		$data = $this->db->get('MASTER_VERIFICATION_TIME')->result();
		$arr_data = array();
		$i=0;
		foreach($data as $r){
			$arr_data[$i]['VERIFICATION_TIME_ID']=$r->VERIFICATION_TIME_ID;
			$arr_data[$i]['VERIFICATION_TIME_DESCR']=$r->VERIFICATION_TIME_DESCR;
			$i++;
		}
		echo json_encode($arr_data);
	}


	public function getMasterProspectType()
	{
		$data = $this->db->get('SMS_M_PROSPECT_TYPE')->result();
		$arr_data = array();
		$i=0;
		foreach($data as $r){
			$arr_data[$i]['PROSPECT_TYPE_ID']=$r->PROSPECT_TYPE_ID;
			$arr_data[$i]['PROSPECT_TYPE_CODE']=$r->PROSPECT_TYPE_CODE;
			$i++;
		}
		echo json_encode($arr_data);
	}
	
	public function getMasterPropertyType()
	{
		$data = $this->db->get('MASTER_PROPERTY_TYPE')->result();
		$arr_data = array();
		$i=0;
		foreach($data as $r){
			$arr_data[$i]['PROPERTY_ID']=$r->PROPERTY_ID;
			$arr_data[$i]['PROPERTY_DESCRIPTION']=$r->PROPERTY_DESCRIPTION;
			$i++;
		}
		echo json_encode($arr_data);
	}


	public function getMasterSalesChannel()
	{

		//$ftdtd = $this->dx_auth->is_allow_ext('ftdtd');
		//var_dump($ftdtd);
		$data = $this->db->get_where('SMS_M_SALES_CHANNEL', array('TYPE' => 'POS'))->result();
		$arr_data = array();
		$i=0;
		foreach($data as $r){
			$arr_data[$i]['SALES_CHANNEL_ID']=$r->SALES_CHANNEL_ID;
			$arr_data[$i]['SALES_CHANNEL_DESCR']=$r->SALES_CHANNEL_DESCR;
			$i++;
		}
		echo json_encode($arr_data);

	}
	public function getMasterBranch()
	{
		$data = $this->db->get('SMS_BRANCH')->result();
		$arr_data = array();
		$i=0;
		foreach($data as $r){
			$arr_data[$i]['SEQ_BRANCH']=$r->SEQ_BRANCH;
			$arr_data[$i]['BRANCH']=$r->BRANCH;
			$i++;
		}
		echo json_encode($arr_data);
	}

	public function getMasterBrand()
	{
		$data = $this->db->get('SMS_M_BRAND')->result();
		$arr_data = array();
		$i=0;
		foreach($data as $r){
			$arr_data[$i]['BRAND_ID']=$r->BRAND_ID;
			$arr_data[$i]['BRAND_CODE']=$r->BRAND_CODE;
			$i++;
		}
		echo json_encode($arr_data);
	}
	
	public function getMasterIdentityType()
	{
		//$data = $this->db->get('MASTER_IDENTITY_TYPE')->result();
		$data = $this->db->get_where('MASTER_IDENTITY_TYPE', array('IDENTITY_TYPE_FLAG'=>'Y'))->result();
		$arr_data = array();
		$i=0;
		foreach($data as $r){
			$arr_data[$i]['IDENTITY_TYPE_ID']=$r->IDENTITY_TYPE_ID;
			$arr_data[$i]['IDENTITY_TYPE_NAME']=$r->IDENTITY_TYPE_NAME;
			$i++;
		}
		echo json_encode($arr_data);
	}
	public function getMasterEC_Sibling()
	{
		$data = $this->db->get('MASTER_EC_SIBLING')->result();
		$arr_data = array();
		$i=0;
		foreach($data as $r){
			$arr_data[$i]['EC_SIBLING_ID']=$r->EC_SIBLING_ID;
			$arr_data[$i]['EC_SIBLING_NAME']=$r->EC_SIBLING_NAME;
			$i++;
		}
		echo json_encode($arr_data);
	}  
	public function getMasterCustomerClass(){

		$data = $this->db->get('MASTER_CUSTOMER_CLASSIDS')->result();
		$arr_data = array();
		$i=0;
		foreach($data as $r){
			$arr_data[$i]['CUSTOMER_CLASSIDS_ID']=$r->CUSTOMER_CLASSIDS_ID;
			$arr_data[$i]['CUSTOMER_CLASSIDS_NAME']=$r->CUSTOMER_CLASSIDS_NAME;
			$i++;
		}
		echo json_encode($arr_data);
	}

	public function getMasterPromo(){
		/*$data = $this->db->get_where('VAL_MST_PROMO', array('is_active' => '1'))->result();
		$arr_data = array();
		$i=0;
		foreach($data as $r){
			$arr_data[$i]['promotion_id']=$r->promotion_id;
			$arr_data[$i]['promotion_desc']=$r->promotion_desc;
			$i++;
		}*/
		$json 					= file_get_contents("http://192.168.177.186:1111/api/promo/GetPromoNow"); 
		$array					= json_decode($json, true);
		//echo '<pre>',print_r($array);'<pre>';exit;
		$array_data = array();
		$promo = array_values($array);
		
		echo json_encode($promo);
	}

	public function getMasterBasic(){
		$brandId = $this->input->get('brandId');
		// var_dump($brandId); exit;
		$data = $this->db->get_where('ROLE_PRODUCT_PRICE2', array('LINK_ID'=>$brandId,'ROLE_TYPE'=>'Base Package'))->result();
		$arr_data = array();
		$i=0;
		foreach($data as $r){
			$arr_data[$i]['ROLE_TYPE_ID']=$r->ROLE_TYPE_ID;
			$i++;
		}
		//var_dump($arr_data);
		$product = array();
		//$result = array();
		for($i=0;$i<count($arr_data);$i++)
		{
			//var_dump($arr_data[$i]['ROLE_TYPE_ID']);
			$result = $this->m_entryp->searchMasterProductBasic($arr_data[$i]['ROLE_TYPE_ID'],$brandId);
			$values = json_decode($result);

			//var_dump($values);
			//var_dump($result[$i]);
			if(!empty($values))
			{
				//var_dump($values);
				foreach($values as $r){
					$product[$i]['PRODUCT_ID']=$r->PRODUCT_ID;
					$product[$i]['PRODUCT_NAME'] = $r->PRODUCT_NAME;
			
				}
			}
			
		}
		
		//var_dump($product);
		/*$sql = "SELECT * FROM MASTER_SALES_LOGIN LIMIT 10";
		$result = $this->db->query($sql)->result_array();*/

		echo json_encode($product, TRUE);
	}

	public function getMasterProductBasic(){
		$product_id = $this->input->get('product_id');
		$result = $this->m_entryp->searchMasterProductBasic($product_id);
		return json_encode($result);
	}
	public function getMasterProductAddOn(){
		$product_id = $this->input->get('product_id');
		$result = $this->m_entryp->searchMasterProductAddOn($product_id);
		return json_encode($result);
	}

	/*public function getMasterProductBasic(){
		$product_id = $this->input->get('product_id');
		//var_dump($product_id); exit;
		$data = $this->db->get_where('VAL_PRODUCT_PRICE2', array('PRODUCT_ID'=>$product_id,'CATEGORY'=>'TV Base Package'))->result();
		$arr_data = array();
		$i=0;
		foreach($data as $r){
			$arr_data[$i]['PRODUCT_ID']=$r->PRODUCT_ID;
			$arr_data[$i]['PRODUCT_NAME']=$r->PRODUCT_NAME;
			$i++;
		}
		echo json_encode($arr_data);
	}*/
	/*public function getMasterProductAddOn(){
		$product_id = $this->input->get('product_id');
		//var_dump($product_id); exit;
		$data = $this->db->get_where('VAL_PRODUCT_PRICE2', array('PRODUCT_ID'=>$product_id,'CATEGORY'=>'Indovision Add-on'))->result();
		$arr_data = array();
		$i=0;
		foreach($data as $r){
			$arr_data[$i]['PRODUCT_ID']=$r->PRODUCT_ID;
			$arr_data[$i]['PRODUCT_NAME']=$r->PRODUCT_NAME;
			$i++;
		}
		echo json_encode($arr_data);
	}*/

	public function getMasterAddOn()
	{
		$brandId = $this->input->get('brandId');
		$data = $this->db->get_where('ROLE_PRODUCT_PRICE2', array('LINK_ID'=>$brandId,'ROLE_TYPE'=>'Add on'))->result();
		$arr_data = array();
		$i=0;
		foreach($data as $r){
			$arr_data[$i]['ROLE_TYPE_ID']=$r->ROLE_TYPE_ID;
			$i++;
		}
		//var_dump($arr_data);
		$product = array();
		//$result = array();
		for($i=0;$i<count($arr_data);$i++)
		{
			//var_dump($arr_data[$i]['ROLE_TYPE_ID']);
			$result = $this->m_entryp->searchMasterProductAddOn($arr_data[$i]['ROLE_TYPE_ID'],$brandId);
			$values = json_decode($result);

			//var_dump($values);
			//var_dump($result[$i]);
			if(!empty($values))
			{
				//var_dump($values);
				foreach($values as $r){
					$product[$i]['PRODUCT_ID']=$r->PRODUCT_ID;
					$product[$i]['PRODUCT_NAME'] = $r->PRODUCT_NAME;
			
				}
			}
			
		}
		//echo '<pre>',print_r($product);'<pre>';
		echo json_encode($product);	

	}



	public function angular_getAlacarteData()
	{
		$PackageBasic_id = $this->input->get('param1');

		$data =  $this->db->get_where('VAL_PRODUCT_PRICE', array('bundle_id' => $PackageBasic_id,'type' => 'Alacarte'))->result();
		//echo '<pre>',print_r($data),'</pre>';	
			$array_data = array();
		   	$i=0;
		   	foreach($data as $r){
		    	$array_data[$i]['service_id']=$r->service_id;
				$array_data[$i]['service_name']=$r->service_name;
				$array_data[$i]['price']=$r->price;
				$array_data[$i]['selected']=false;
		    	$i++;
			}
		    echo json_encode($array_data);	
	}
	



	public function angular_getPackageAlacarteData()
	{
		$alacartePriceArray  =array();
		$PackageBasic_id = $this->input->get('param1');
		$data =  $this->db->get_where('VAL_PRODUCT_PRICE', array('bundle_id'=>$PackageBasic_id, 'type'=>'Alacarte'))->result();	
		$arr_data = array();
		$i=0;
		foreach($data as $r){
			$arr_data[$i]['service_id']=$r->service_id;
			$arr_data[$i]['service_name']=$r->service_name;
			$arr_data[$i]['price']=$r->price;

			$i++;
		}
		echo json_encode($arr_data);
	} 

	public function history()
	{	
		$data['module_title']  = 'Historical Process';
		$data['head'] = $this->load->view('templatemodule/head_panel',$data);
		$data['side_menu'] = $this->load->view('templatemodule/side_menu',$data,TRUE);
		//DROPDOWN PROVINCE
		$data['provinsi']=$this->m_entryp->provinsi();
		
		$data['allData'] = $this->m_entryp->dataep_r();
		$data['allDataW'] = $this->m_entryp->dataep_rw();
		$this->load->view('v_entryp_h',$data);
	}


	public function h_detail($id){
		//$data['buku'] = $this->buku_m->getBuku($id);
		$data['module_title']  = 'Regular';
		$data['head'] = $this->load->view('templatemodule/head_panel',$data);
		$data['side_menu'] = $this->load->view('templatemodule/side_menu',$data,TRUE);
		
		//DROPDOWN PROVINCE
		$data['provinsi']=$this->m_entryp->provinsi();

		//DROPDOWN PROMO
		$data['promotion'] = $this->m_entryp->promotion();
		
		//DROPDOWN PRODUCT
		$data['produk'] = $this->m_entryp->product();
		$data['admin_reject'] = $this->m_entryp->admin_reject();
		$data['admin_approve'] = $this->m_entryp->admin_approve();

		//$data['allData'] = $this->m_entryp->getAllData();
		
		$data['ep_dtd'] = $this->m_entryp->getDataep($id);
		$this->load->view('v_entryp_hd',$data);

	}
 

	
    public function get_branch() {
        $query = $this->m_entryp->get_allbranch(); //query model
 
        $branch       =  array();
        foreach ($query as $d) {
            $branch[]     = array(
                'nama' => $d->PROSPECT_NBR, //variabel yg dibawa ke id nama
                
            );
        }
        echo json_encode($kota);      //data array yang telah kota deklarasikan dibawa menggunakan json
    }

    

    public function Update_EP_BFP_DB(){
    	$_POST 					= json_decode(file_get_contents('php://input'), true);
		
		//$house_type 		= $this->input->post('house_type');

		$statusep			= 'DTH';
		/*$kondisi['PROSPECT_ID']  = $this->input->post('PROSPECT_ID');*/
		$prospectid 		= $this->input->post('idprospect');		
		
		$processid 			= $this->input->post('PROCESSID');
		$noteadmin 			= $this->input->post('note_admin');

		$json 					= file_get_contents("http://192.168.177.221/api-joget/v1/get_ActivityId/".$processid);
		$arrai					= json_decode($json, true);
		$activityid				= $arrai[0]['ActivityId'];

		$ch 					= curl_init("http://192.168.177.235:8080/jw/web/json/workflow/assignment/completeWithVariable/".$activityid."?var_status=DTH&j_username=ryan&j_password=12345");
		curl_setopt($ch, CURLOPT_POST,true);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_HEADER, 0);
		$data 					= curl_exec($ch);
		curl_close($ch);
		$this->m_entryp->updateDataEP_BFP($statusep, $prospectid,$noteadmin);
		redirect('entryp/Entryp/reg_admin');
		
	}




	//REG
	
	//modern store
	public function modern_storee()
	{	
		/*$activityid				= "aa";
		$ch 					= "http://192.168.177.235:8080/jw/web/json/workflow/assignment/completeWithVariable/".$activityid."?var_status=Revisi&j_username=0504211215&j_password=12345";
		var_dump($ch);
		exit;*/
		//$this->load->model("m_entryp");
		$data['module_title']  = 'Modern Store';
		$data['head'] = $this->load->view('templatemodule/head_panel',$data);
		$data['side_menu'] = $this->load->view('templatemodule/side_menu',$data,TRUE);
		
		//DROPDOWN PROVINCE
		$data['provinsi']=$this->m_entryp->provinsi();

		//DROPDOWN PROMO
		$data['promotion'] = $this->m_entryp->promotion();
		
		//DROPDOWN PRODUCT
		$data['produk'] = $this->m_entryp->product();

		$data['allData'] = $this->m_entryp->getAllData();

		$this->load->view('v_entryp',$data);
		/*$data['module_title']  = 'Door to door';
		$data['head'] = $this->load->view('templatemodule/head_panel',$data);
		$data['side_menu'] = $this->load->view('templatemodule/side_menu',$data,TRUE);
		$data['top_navi'] = $this->load->view('templatemodule/top_navi',$data,TRUE);
		$data['footer'] = $this->load->view('templatemodule/footer',$data,TRUE);
		$this->load->view('v_entryp');*/
	}

	//dtdbb
	public function dtd_bb()
	{	
		/*$activityid				= "aa";
		$ch 					= "http://192.168.177.235:8080/jw/web/json/workflow/assignment/completeWithVariable/".$activityid."?var_status=Revisi&j_username=0504211215&j_password=12345";
		var_dump($ch);
		exit;*/
		//$this->load->model("m_entryp");
		$data['module_title']  = 'Door to Door-Bawa Barang';
		$data['head'] = $this->load->view('templatemodule/head_panel',$data);
		$data['side_menu'] = $this->load->view('templatemodule/side_menu',$data,TRUE);
		
		//DROPDOWN PROVINCE
		$data['provinsi']=$this->m_entryp->provinsi();

		//DROPDOWN PROMO
		$data['promotion'] = $this->m_entryp->promotion();
		
		//DROPDOWN PRODUCT
		$data['produk'] = $this->m_entryp->product();

		$data['allData'] = $this->m_entryp->getAllData();
		$this->load->view('v_entryp',$data);
		/*$data['module_title']  = 'Door to door';
		$data['head'] = $this->load->view('templatemodule/head_panel',$data);
		$data['side_menu'] = $this->load->view('templatemodule/side_menu',$data,TRUE);
		$data['top_navi'] = $this->load->view('templatemodule/top_navi',$data,TRUE);
		$data['footer'] = $this->load->view('templatemodule/footer',$data,TRUE);
		$this->load->view('v_entryp');*/
	}

	public function cc()
	{	
		/*$activityid				= "aa";
		$ch 					= "http://192.168.177.235:8080/jw/web/json/workflow/assignment/completeWithVariable/".$activityid."?var_status=Revisi&j_username=0504211215&j_password=12345";
		var_dump($ch);
		exit;*/
		//$this->load->model("m_entryp");
		$data['module_title']  = 'Credit Card';
		$data['head'] = $this->load->view('templatemodule/head_panel',$data);
		$data['side_menu'] = $this->load->view('templatemodule/side_menu',$data,TRUE);
		
		//DROPDOWN PROVINCE
		$data['provinsi']=$this->m_entryp->provinsi();

		//DROPDOWN PROMO
		$data['promotion'] = $this->m_entryp->promotion();
		
		//DROPDOWN PRODUCT
		$data['produk'] = $this->m_entryp->product();

		$data['allData'] = $this->m_entryp->getAllData();
		$this->load->view('v_entryp',$data);
		/*$data['module_title']  = 'Door to door';
		$data['head'] = $this->load->view('templatemodule/head_panel',$data);
		$data['side_menu'] = $this->load->view('templatemodule/side_menu',$data,TRUE);
		$data['top_navi'] = $this->load->view('templatemodule/top_navi',$data,TRUE);
		$data['footer'] = $this->load->view('templatemodule/footer',$data,TRUE);
		$this->load->view('v_entryp');*/
	}
	


	//dtdbb
	public function dealer()
	{	
		/*$activityid				= "aa";
		$ch 					= "http://192.168.177.235:8080/jw/web/json/workflow/assignment/completeWithVariable/".$activityid."?var_status=Revisi&j_username=0504211215&j_password=12345";
		var_dump($ch);
		exit;*/
		//$this->load->model("m_entryp");
		$data['module_title']  = 'Dealer';
		$data['head'] = $this->load->view('templatemodule/head_panel',$data);
		$data['side_menu'] = $this->load->view('templatemodule/side_menu',$data,TRUE);
		
		//DROPDOWN PROVINCE
		$data['provinsi']=$this->m_entryp->provinsi();

		//DROPDOWN PROMO
		$data['promotion'] = $this->m_entryp->promotion();
		
		//DROPDOWN PRODUCT
		$data['produk'] = $this->m_entryp->product();

		$data['allData'] = $this->m_entryp->getAllData();
		$this->load->view('v_entryp',$data);
		/*$data['module_title']  = 'Door to door';
		$data['head'] = $this->load->view('templatemodule/head_panel',$data);
		$data['side_menu'] = $this->load->view('templatemodule/side_menu',$data,TRUE);
		$data['top_navi'] = $this->load->view('templatemodule/top_navi',$data,TRUE);
		$data['footer'] = $this->load->view('templatemodule/footer',$data,TRUE);
		$this->load->view('v_entryp');*/
	}
	//dtdbb
	public function dealer_franchise()
	{	
		/*$activityid				= "aa";
		$ch 					= "http://192.168.177.235:8080/jw/web/json/workflow/assignment/completeWithVariable/".$activityid."?var_status=Revisi&j_username=0504211215&j_password=12345";
		var_dump($ch);
		exit;*/
		//$this->load->model("m_entryp");
		$data['module_title']  = 'Dealer Franchise';
		$data['head'] = $this->load->view('templatemodule/head_panel',$data);
		$data['side_menu'] = $this->load->view('templatemodule/side_menu',$data,TRUE);
		
		//DROPDOWN PROVINCE
		$data['provinsi']=$this->m_entryp->provinsi();

		//DROPDOWN PROMO
		$data['promotion'] = $this->m_entryp->promotion();
		
		//DROPDOWN PRODUCT
		$data['produk'] = $this->m_entryp->product();

		$data['allData'] = $this->m_entryp->getAllData();
		$this->load->view('v_entrypaaaa',$data);
		/*$data['module_title']  = 'Door to door';
		$data['head'] = $this->load->view('templatemodule/head_panel',$data);
		$data['side_menu'] = $this->load->view('templatemodule/side_menu',$data,TRUE);
		$data['top_navi'] = $this->load->view('templatemodule/top_navi',$data,TRUE);
		$data['footer'] = $this->load->view('templatemodule/footer',$data,TRUE);
		$this->load->view('v_entryp');*/
	}



	
	//reg dth
	public function reg_dth()
	{	
		$data['module_title']  = 'DTH';
		$data['head'] = $this->load->view('templatemodule/head_panel',$data);
		$data['side_menu'] = $this->load->view('templatemodule/side_menu',$data,TRUE);
		//DROPDOWN PROVINCE
		$data['provinsi']=$this->m_entryp->provinsi();
		$data['allData'] = $this->m_entryp->dataep_reg_dth();
		$this->load->view('v_entryp_c_r',$data);
	}
	
	//update dth reg
	public function updateEP_Reg_Dth($id){
		
		$prospectid 		= $id;	
		$this->m_entryp->log_dth($prospectid);

		$data['module_title']  = 'DTH';
		$data['head'] = $this->load->view('templatemodule/head_panel',$data);
		$data['side_menu'] = $this->load->view('templatemodule/side_menu',$data,TRUE);
		
		$data['category_dth']=$this->m_entryp->get_categorydth();
		//$data['subcategory_dth']=$this->m_entryp->get_subcategorydth();
		//DROPDOWN PROVINCE
		$data['provinsi']=$this->m_entryp->provinsi();

		//DROPDOWN PROMO
		$data['promotion'] = $this->m_entryp->promotion();
		
		//DROPDOWN PRODUCT
		$data['produk'] = $this->m_entryp->product();
		$data['disposisi'] = $this->m_entryp->disposisi();

		//$data['allData'] = $this->m_entryp->getAllData();
		$data['ep_dtd'] = $this->m_entryp->getDataep($id);

		$data['admin_reject'] = $this->m_entryp->admin_reject();
		$data['admin_approve'] = $this->m_entryp->admin_approve();
		$data['admin_pending'] = $this->m_entryp->admin_pending();
		$data['light_verification'] = $this->m_entryp->get_light_verification();
		$data['master_field'] = $this->m_entryp->master_field();

		//$data['data_hw'] = $this->m_entryp->getSearchHW($id);
		//$data['allData'] = $this->m_entryp->getAllData();
		
		$this->load->view('v_entryp_reg_dth_u',$data);

	}

	public function updateEP_Reg_Dth_db2(){
		$_POST 					= json_decode(file_get_contents('php://input'), true);
		$url = 'http://192.168.1.46/webapi_icc_valsys/api/customer/AddNewCustomer';
			$fields = array(
				'Cust_Category' => "1",
            'PropertyTypeId' => "1",
            'TitleId' => "1",
            'FirstName' => "sayasiapa",
            'MiddleName' => "dddddddd",
            'Surname' => "qqqqqqqq",
            'Email' => "asasas@.asas.ss",
            'WorkPhone' => "1111111",
            'BigCity' => "PALEMBANG",
            'SmallCity' => "SEBERANG ULU II",
            'PostalCode' => "30261001",
            'Street' => "SENTOSA"
				);  
			foreach($fields as $key=>$value) {
				$fields_string .= $key.'='.$value.'&';
			}
			rtrim($fields_string, '&');


			$ch = curl_init();

			curl_setopt($ch,CURLOPT_URL, $url);
			curl_setopt($ch,CURLOPT_POST, count($fields));
			curl_setopt($ch,CURLOPT_POSTFIELDS, $fields_string);


			$result = curl_exec($ch);
			//echo $result;


			curl_close($ch);  	  



	}

	public function updateEP_Reg_Dth_db(){
		$_POST 					= json_decode(file_get_contents('php://input'), true);
		
		$house_type 		= $this->input->post('house_type');
		$identype			= $this->input->post('identype');
		$identypen			= $this->input->post('identypen');
		$SALUTATION			= $this->input->post('SALUTATION');
		$FNAME 				= $this->input->post('FNAME');
		$MNAME 				= $this->input->post('MNAME');
		$LNAME 				= $this->input->post('LNAME');
		$EMAIL 				= $this->input->post('EMAIL');
		$mobilep  			= $this->input->post('mobilep');
		$WORK_PHONE  		= $this->input->post('WORK_PHONE');
		$HOME_PHONE  		= $this->input->post('HOME_PHONE');
		$CITY 				= $this->input->post('CITY');
		$DISTRICT  			= $this->input->post('DISTRICT');
		$ZIPCODE  			= $this->input->post('ZIPCODE');
		$SUBDISTRICT  		= $this->input->post('SUBDISTRICT');
		//bdate
		$BDATE_D			= $this->input->post('BDATEE');
		$DATE 				= "00:00:00";
		$BDATE				= $BDATE_D." ".$DATE;
		//endofbdate
		$ZIPCODE_INSTALL 	= $this->input->post('ZIPCODE_INSTALL');
		$ZIPCODE_BILLING 	= $this->input->post('ZIPCODE_BILLING');
		$ICC_ADDRESS_ID 	= $this->input->post('ICC_ADDRESS_ID'); //NOT_IMPLE_YET
		
		//FINANCIAL ACC
		//$ACCOUNT_NAME 		= $this->input->post('ACCOUNT_NAME'); //NOT_IMPLE_YET
		$PAYMENT_NAME 		= $this->input->post('PAYMENT_NAME'); //NOT_IMPLE_YET
		$PAYMENT_METHOD 	= $this->input->post('PAYMENT_METHOD'); //NOT_IMPLE_YET
		$CARD_NUMBER 		= $this->input->post('CARD_NUMBER'); //NOT_IMPLE_YET
		$BANK_ACCOUNT_NO 	= $this->input->post('BANK_ACCOUNT_NO'); //NOT_IMPLE_YET
		$BANK_NAME 			= $this->input->post('BANK_NAME'); //NOT_IMPLE_YET

		//


		$statusep			= $this->input->post('STATUSEP');
		$TYPEP				= $this->input->post('TYPEP');
		$PNUMB				= $this->input->post('PNUMB');
		/*$kondisi['PROSPECT_ID']  = $this->input->post('PROSPECT_ID');*/
		$prospectid 		= $this->input->post('PROSPECT_ID');		
		$processid 			= $this->input->post('PROCESSID');
		$dthnote 			= $this->input->post('dthnote');
		$cfirstname			= $this->input->post('cfirstname');
		$cphone				= $this->input->post('cphone');
		$AGREEMENT			= $this->input->post('AGREEMENT');
		$caddress 			= $this->input->post('caddress');
		$cbillingaddress	= $this->input->post('cbillingaddress');
		$cemergency			= $this->input->post('cemergency');
		$cpackage 			= $this->input->post('cpackage');
		
		$extrap 			= $this->input->post('extrap');
		$mainp  			= $this->input->post('mainp');
		$ADDRESS 			= $this->input->post('ADDRESS');
		$PROVINCE  			= $this->input->post('PROVINCE');
		$INSTALL_ADDRESS 	= $this->input->post('INSTALL_ADDRESS');
		$INSTALL_LANDMARK 	= $this->input->post('INSTALL_LANDMARK');
		$PROVINCE_INSTALL 	= $this->input->post('PROVINCE_INSTALL');
		$CITY_INSTALL 		= $this->input->post('CITY_INSTALL');
		$DISTRICT_INSTALL 	= $this->input->post('DISTRICT_INSTALL');
		$SUBDISTRICT_INSTALL = $this->input->post('SUBDISTRICT_INSTALL');
		$INSTALL_ADDRESSbilling = $this->input->post('INSTALL_ADDRESSbilling');
		$INSTALL_LANDMARKbilling = $this->input->post('INSTALL_LANDMARKbilling');
		$PROVINCE_BILLING 	= $this->input->post('PROVINCE_BILLING');
		$CITY_BILLING 		= $this->input->post('CITY_BILLING');
		$DISTRICT_BILLING 	= $this->input->post('DISTRICT_BILLING');
		$SUBDISTRICT_BILLING = $this->input->post('SUBDISTRICT_BILLING');
		$EMERGENCY_NAME 		= $this->input->post('EMERGENCY_NAME');
		$E_SIBLING 			= $this->input->post('E_SIBLING');
		$E_PHONE 			= $this->input->post('E_PHONE');
		$E_ADDRESS 			= $this->input->post('E_ADDRESS');
		$PAYMENT_PERIOD 		= $this->input->post('PAYMENT_PERIOD');
		$PACKAGE_BRAND 		= $this->input->post('PACKAGE_BRAND');
		$STATUS_PACKAGE 		= $this->input->post('STATUS_PACKAGE');
		$PROMO 				= $this->input->post('PROMO');
		$PACKAGE_BASIC 		= $this->input->post('PACKAGE_BASIC');
		$PACKAGE_ALACARTE 	= $this->input->post('PACKAGE_ALACARTE');
	
		if($cfirstname==true or $cphone==true or $caddress==true or $cbillingaddress==true or $cemergency==true or $cpackage==true ){
			
			  
			
			$this->m_entryp->DTH_EDIT($prospectid,$dthnote,$AGREEMENT,$FNAME,$MNAME,$LNAME,$mobilep,$extrap,$mainp,$ADDRESS,$PROVINCE,$CITY,$DISTRICT,$SUBDISTRICT,$ZIPCODE,$INSTALL_ADDRESS,$INSTALL_LANDMARK,$PROVINCE_INSTALL,$CITY_INSTALL,$DISTRICT_INSTALL,$SUBDISTRICT_INSTALL,$ZIPCODE_INSTALL,$INSTALL_ADDRESSbilling,$INSTALL_LANDMARKbilling,$PROVINCE_BILLING,$CITY_BILLING,$DISTRICT_BILLING,$SUBDISTRICT_BILLING,$ZIPCODE_BILLING,$EMERGENCY_NAME,$E_SIBLING,$E_PHONE,$E_ADDRESS,$PAYMENT_PERIOD,$PACKAGE_BRAND,$STATUS_PACKAGE,$PROMO,$PACKAGE_BASIC,$PACKAGE_ALACARTE);
		}else if($TYPEP=='rejoin'){

			//contact ICC
			$PNUMB = 16305;
			$chh					= curl_init();
			curl_setopt($chh, CURLOPT_URL, "http://192.168.177.185:1111/api/customer/doSendContacts");
			curl_setopt($chh, CURLOPT_POST, 1);
			curl_setopt($chh, CURLOPT_POSTFIELDS,"Id=".$PNUMB);
			curl_setopt($chh, CURLOPT_HTTPHEADER, array('Content-Type: application/x-www-form-urlencoded'));

// receive server response ...
			curl_setopt($chh, CURLOPT_RETURNTRANSFER, true);
			$server_output = curl_exec ($chh);
			curl_close ($chh);
			$aa 						= json_decode($server_output, true);
			$suc_mes					= $aa['IsSuccess'];
			/*$data = array("id" => "16305", "age" => "36");                                                                    
			$data_string = json_encode($data);                                                                                   
			
			$ch = curl_init('http://192.168.179.11:60881/webapi_icc_valsys/api/customer/doSendContacts');                                                                      
			curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");                                                                     
			curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);                                                                  
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);                                                                      
			curl_setopt($ch, CURLOPT_HTTPHEADER, array(                                                                          
				'Content-Type: application/json',                                                                                
				'Content-Length: ' . strlen($data_string))                                                                       
			);                                                                                                                   
			$result = curl_exec($ch);*/
                                                                                                                     
			/*
			$data = array(
  				"authorizedKey" => "abbad35c5c01-xxxx-xxx",
  				"senderEmail" => "myemail@yahoo.com",
  				"recipientEmail" => "jaketalledo86@yahoo.com",
  				"comment" => "Invitation",
  				"forceDebitCard" => "false"
			);*/
			//


			$json 					= file_get_contents("http://192.168.177.221/api-joget/v1/get_ActivityId/".$processid);
			$arrai					= json_decode($json, true);
			$activityid				= $arrai[0]['ActivityId'];

			$ch 					= curl_init("http://192.168.177.235:8080/jw/web/json/workflow/assignment/completeWithVariable/".$activityid."?var_status=".$statusep."&j_username=dth&j_password=12345");
			curl_setopt($ch, CURLOPT_POST,true);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			curl_setopt($ch, CURLOPT_HEADER, 0);
			$data 					= curl_exec($ch);
			curl_close($ch);
			$this->m_entryp->updateDataEP_Reg_dth($statusep, $prospectid,$dthnote,$suc_mes);
			redirect('entryp/Entryp/reg_admin');
		}else{
			/*var_dump($FNAME);
			exit;*/
			//$fields_string ='';
			$url = 'http://192.168.177.185:1111/api/customer/AddNewCustomerBundle';
			/*$fields = array(
			'ClassId' => "1",                       //classID               
            'TypeId' => "1",                        //typeID               
            'PropertyTypeId' => $house_type,                //housetype
            'CustomerCaptureCategoryId' => "1",     //Category :residential..
            'ReferenceTypeKey' => $identype,              //KTP dll
            'ReferenceNumber' => $identypen,               //NO KTP
            'TitleId' => $SALUTATION,               //salutation
            'FirstName' => $FNAME,
            'MiddleName' => $MNAME,
            'Surname' => $LNAME,
            'Email' => $EMAIL,
            'MobilePhone' => $mobilep,
            'WorkPhone' => $WORK_PHONE,
            'HomePhone' => $HOME_PHONE,
            'CountryId' => "1",                     //indonesia
            'BigCity' => $PROVINCE,
            'SmallCity' => $CITY,
            'PostalCode' => $ZIPCODE,
            'ValidAddressId' => "47",
            'Street' => $ADDRESS,
            'BirthDate' => $BDATE
				);  
			foreach($fields as $key=>$value) {
				$fields_string .= $key.'='.$value.'&';
			}
			rtrim($fields_string, '&');


			$ch = curl_init();

			curl_setopt($ch,CURLOPT_URL, $url);
			curl_setopt($ch,CURLOPT_POST, count($fields));
			curl_setopt($ch,CURLOPT_POSTFIELDS, $fields_string);
			curl_setopt($ch,CURLOPT_RETURNTRANSFER,TRUE);


			
			$result = curl_exec($ch);			
			$result_json = json_decode($result);
			$ref_id = $result_json->Id;
			

			curl_close($ch); */
			$jsonData = array(
            'ClassId' => "1",                       //classID               
            'TypeId' => "1",                        //typeID               
            'PropertyTypeId' => $house_type,                //housetype
            'CustomerCaptureCategoryId' => "1",     //Category :residential..
            'ReferenceTypeKey' => $identype,              //KTP dll
            'ReferenceNumber' => $identypen,               //NO KTP
            'TitleId' => $SALUTATION,                       //salutation
            'FirstName' => $FNAME,
            'MiddleName' => $MNAME,
            'Surname' => $LNAME,
            'Email' => $EMAIL,
            'MobilePhone' => $mobilep,
            'WorkPhone' => $WORK_PHONE,
            'HomePhone' => $HOME_PHONE,
            'CountryId' => "1",                     //indonesia
            'BigCity' => $CITY,
            'SmallCity' => $DISTRICT,
            'PostalCode' => $ZIPCODE,
            'ValidAddressId' => "47",
            'Street' => $SUBDISTRICT,
            /*'BirthDate' => "2011-05-20 00:00:00",*/
            'BirthDate' => $BDATE,
            'AddressAgreement' => [array(
            	'PostalCode' => $ZIPCODE
            	)],
            'AddressInstall' => [array(
            	'PostalCode' => $ZIPCODE_INSTALL
            	)],
            'AddressBilling' => [array(
            	'PostalCode' => $ZIPCODE_BILLING
            	)],
            'BankName' => "saya",
            'FaName' => $FNAME,
            'MOPId' => "82",
            'CreditCardNumber' => "122222222222"

            );



			$fields = json_encode($jsonData);
			$ch = curl_init();
			curl_setopt($ch,CURLOPT_URL, $url);
//Tell cURL that we want to send a POST request.
			curl_setopt($ch, CURLOPT_POST, 1);

//Attach our encoded JSON string to the POST fields.
			curl_setopt($ch, CURLOPT_POSTFIELDS, $fields);
			curl_setopt($ch,CURLOPT_RETURNTRANSFER,TRUE);

//Set the content type to application/json
			curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json')); 

//Execute the request
			$result = curl_exec($ch);
			$result_json = json_decode($result);
			$ref_id= $result_json->Id;
/*var_dump($a);
exit;*/
			curl_close($ch);

		

			$suc_mes				="true";
			$json 					= file_get_contents("http://192.168.177.221/api-joget/v1/get_ActivityId/".$processid);
			$arrai					= json_decode($json, true);
			$activityid				= $arrai[0]['ActivityId'];

			$ch 					= curl_init("http://192.168.177.235:8080/jw/web/json/workflow/assignment/completeWithVariable/".$activityid."?var_status=".$statusep."&j_username=dth&j_password=12345");
			curl_setopt($ch, CURLOPT_POST,true);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			curl_setopt($ch, CURLOPT_HEADER, 0);
			$data 					= curl_exec($ch);
			curl_close($ch);
			$this->m_entryp->updateDataEP_Reg_dth($statusep, $prospectid,$dthnote,$suc_mes,$ref_id);
			redirect('entryp/Entryp/reg_admin');
		}
		
		
	}




	//REGULAR
	public function admin_approval($id){
		//$data['buku'] = $this->buku_m->getBuku($id);
		$prospectid 		= $id;	
		$this->m_entryp->log_admin($prospectid);



		$data['module_title']  = 'Regular';
		$data['head'] = $this->load->view('templatemodule/head_panel',$data);
		$data['side_menu'] = $this->load->view('templatemodule/side_menu',$data,TRUE);
		
		//DROPDOWN PROVINCE
		$data['provinsi']=$this->m_entryp->provinsi();

		//DROPDOWN PROMO
		$data['promotion'] = $this->m_entryp->promotion();
		
		//DROPDOWN PRODUCT
		$data['produk'] = $this->m_entryp->product();
		$data['admin_reject'] = $this->m_entryp->admin_reject();
		$data['admin_approve'] = $this->m_entryp->admin_approve();
		$data['admin_pending'] = $this->m_entryp->admin_pending();
		$data['light_verification'] = $this->m_entryp->get_light_verification();
		$data['master_field'] = $this->m_entryp->master_field();

		//$data['allData'] = $this->m_entryp->getAllData();
		$data['ep_dtd'] = $this->m_entryp->getDataep($id);
		$this->load->view('v_entryp_u',$data);

	}
	public function updateEP_kacab($id){
		//$data['buku'] = $this->buku_m->getBuku($id);
		$prospectid 		= $id;	
		$this->m_entryp->log_kacab($prospectid);



		$data['module_title']  = 'Regular';
		$data['head'] = $this->load->view('templatemodule/head_panel',$data);
		$data['side_menu'] = $this->load->view('templatemodule/side_menu',$data,TRUE);
		
		//DROPDOWN PROVINCE
		$data['provinsi']=$this->m_entryp->provinsi();

		//DROPDOWN PROMO
		$data['promotion'] = $this->m_entryp->promotion();
		
		//DROPDOWN PRODUCT
		$data['produk'] = $this->m_entryp->product();
		$data['kacab_reject'] = $this->m_entryp->admin_reject();
		$data['kacab_approve'] = $this->m_entryp->admin_approve();
		//$data['admin_pending'] = $this->m_entryp->admin_pending();
		$data['light_verification'] = $this->m_entryp->get_light_verification();
		$data['master_field'] = $this->m_entryp->master_field();

		//$data['allData'] = $this->m_entryp->getAllData();
		$data['ep_dtd'] = $this->m_entryp->getDataep($id);
		$this->load->view('v_entryp_u_k',$data);

	}

	public function bfp($id){
		//$data['buku'] = $this->buku_m->getBuku($id);
		$data['module_title']  = 'Regular';
		$data['head'] = $this->load->view('templatemodule/head_panel',$data);
		$data['side_menu'] = $this->load->view('templatemodule/side_menu',$data,TRUE);
		
		//DROPDOWN PROVINCE
		$data['provinsi']=$this->m_entryp->provinsi();

		//DROPDOWN PROMO
		$data['promotion'] = $this->m_entryp->promotion();
		
		//DROPDOWN PRODUCT
		$data['produk'] = $this->m_entryp->product();
		$data['admin_reject'] = $this->m_entryp->admin_reject();
		$data['admin_approve'] = $this->m_entryp->admin_approve();

		//$data['allData'] = $this->m_entryp->getAllData();
		$data['ep_dtd'] = $this->m_entryp->getDataep($id);
		$data['ep_dtd_btp'] = $this->m_entryp->getDatabtp($id);
		$data['ep_dtd_btpe'] = $this->m_entryp->getDatabtpe($id);

		$this->load->view('v_entryp_bfp',$data);

	}

	public function Update_EP_DTD_DB(){

		$_POST 					= json_decode(file_get_contents('php://input'), true);
		//$prospect_nbr  		= $_POST['PN'];
		/*var_dump($prospect_nbr);
		exit;*/



		$form_number 			= strtoupper(trim($_POST['form_number']));
		$processid 				= strtoupper(trim($_POST['process']));
		$sales_channel			= strtoupper(trim($_POST['CATEGORY'])); 
		$prospect_nbr 			= strtoupper(trim($_POST['PN']));
		$prospect_type			= strtoupper(trim($_POST['pt']));
		$hardware_status		= strtoupper(trim($_POST['HARDWARE_STATUS']));
		//SGS
		$sgs_number				= strtoupper(trim($_POST['sa']));
		$sgs_name				= strtoupper(trim($_POST['snm']));
		//!
		$id_type				= strtoupper(trim($_POST['identype']));
		$id_number 				= strtoupper(trim($_POST['identypen']));
		$first_name 			= strtoupper(trim($_POST['FIRST_NAME']));
		$middle_name 			= strtoupper(trim($_POST['middle_name']));
		$last_name 				= strtoupper(trim($_POST['last_name']));
		$PLN 					= strtoupper(trim($_POST['PLN']));
		$wphone 				= strtoupper(trim($_POST['wphone']));
		$MOBILE_PHONE 			= strtoupper(trim($_POST['MOBILE_PHONE']));
		$HOME_PHONE 			= strtoupper(trim($_POST['HOME_PHONE']));
		$EMAIL 					= strtoupper(trim($_POST['EMAIL']));

		$Type1				= $this->input->post('T1');
		$Type2				= $this->input->post('T2');
		$Type3				= $this->input->post('T3');
		$Type4				= $this->input->post('T4');
		$Approve1			= $this->input->post('A1');
		$Approve2			= $this->input->post('A2');
		$Approve3			= $this->input->post('A3');
		$Approve4			= $this->input->post('A4');
		$Reject1			= $this->input->post('R1');
		$Reject2			= $this->input->post('R2');
		$Reject3			= $this->input->post('R3');
		$Reject4			= $this->input->post('R4');
		$light				= $this->input->post('light');

		/*if ($Type1=='R' or $Type2=='R' or $Type3=='R' or $Type4=='R' ){
			$statusep			= 'Rejected';
		}else if($Type1=='A' and $Type2=='A' and $Type3=='A' and $Type4=='A' ){
			$statusep			= 'Approve1';
		}else{
			$statusep			= 'Pending';
		}*/
		//$statusep			= $this->input->post('STATUSEP');
		/*$kondisi['PROSPECT_ID']  = $this->input->post('PROSPECT_ID');*/
		$prospectid 		= $this->input->post('PROSPECT_ID');		
		

		$json 					= file_get_contents("http://192.168.177.221/api-joget/v1/get_ActivityId/".$processid);
		$arrai					= json_decode($json, true);
		$activityid				= $arrai[0]['ActivityId'];

		$ch 					= curl_init("http://192.168.177.235:8080/jw/web/json/workflow/assignment/completeWithVariable/".$activityid."?var_status=".$statusep."&j_username=ryan&j_password=12345");
		curl_setopt($ch, CURLOPT_POST,true);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_HEADER, 0);
		$data 					= curl_exec($ch);
		curl_close($ch);
		
		$process 				= json_decode($data, true);
		$actid					= $process['activityId'];

		//duplicate check
		
		$fname 	= 'MUNADI' ;
		$middlen = 'ssa';	
		$sname = 'asasg';
		$homep = '02153462703';
		$workp = '0215800900';
		$reference = '1426';
		//id1 = firstname
        //id2 = middlename
        //id3 = surname
        //id4 = homephone
        //id5 = workphone
        //id6 = mobilephone
        //id7 = emergencyphone
        //id8 = identificationId
        //id9 = pln id
        //id10 = address

		$jsonduplicate 				= file_get_contents("http://192.168.179.11/webapi_icc_valsys/api/customer/DuplicationCheckCustomer/manyparams/".$fname."/".$middlen."/".$sname."/".$homep."/".$workp."/".$reference."/".$reference."/".$reference."/".$reference."/".$reference."");
		$arraidc					= json_decode($jsonduplicate, true);
		/*$duplicate_value			= $arraidc[0]['SimilarityOfCustomerName'];*/
		$duplicate_value_phone			= $arraidc[0]['SimilarityOfPhone'];
		$duplicate_value_name			= $arraidc[0]['SimilarityOfCustomerName'];
		/*var_dump($xx);
		exit;*/
		//$duplicate_value	= 90;
		
		if ($duplicate_value_phone >80 ){
			$duplicate_stat	= 'YES';
		}else if ($duplicate_value_name >80 ){
			$duplicate_stat	= 'YES';
		}else {
			$duplicate_stat	= 'NO';
		}
		//end of duplicate check

		$this->m_entryp->updateDataEP_DTD($statusep,$prospectid,$actid,$duplicate_value_name,$duplicate_value_phone,$duplicate_stat,$light,$Type1,$Type2,$Type3,$Type4,$Approve1,$Approve2,$Approve3,$Approve4,$Reject1,$Reject2,$Reject3,$Reject4);
		/*$this->m_entryp->updateDataEP_DTD_INSERT($prospectid,$Type1,$Type2,$Type3,$Type4,$Approve1,$Approve2,$Approve3,$Approve4,$Reject1,$Reject2,$Reject3,$Reject4);*/
		redirect('entryp/Entryp/reg_admin');
		
	}



	//Regular Admin
	public function reg_admin()
	{	
		$data['module_title']  = 'Approval Admin';
		$data['head'] = $this->load->view('templatemodule/head_panel',$data);
		$data['side_menu'] = $this->load->view('templatemodule/side_menu',$data,TRUE);
		//DROPDOWN PROVINCE
		$data['provinsi']=$this->m_entryp->provinsi();
		
		$data['allData'] = $this->m_entryp->dataep_r();
		$data['allDataW'] = $this->m_entryp->dataep_rw();
		$this->load->view('v_entryp_r',$data);
	}
	
	public function reg_kacab()
	{	
		$data['module_title']  = 'Approval Kacab';
		$data['head'] = $this->load->view('templatemodule/head_panel',$data);
		$data['side_menu'] = $this->load->view('templatemodule/side_menu',$data,TRUE);
		//DROPDOWN PROVINCE
		$data['provinsi']=$this->m_entryp->provinsi();
		
		$data['allData'] = $this->m_entryp->dataep_k();
		$data['allDataW'] = $this->m_entryp->dataep_rw();
		$this->load->view('v_entryp_k',$data);
	}
	public function modern_store()
	{	
		$data['module_title']  = 'Regular';
		$data['head'] = $this->load->view('templatemodule/head_panel',$data);
		$data['side_menu'] = $this->load->view('templatemodule/side_menu',$data,TRUE);
		//DROPDOWN PROVINCE
		$data['provinsi']=$this->m_entryp->provinsi();
		
		$data['allData'] = $this->m_entryp->dataep_r();
		$data['allDataW'] = $this->m_entryp->dataep_rw();
		$this->load->view('v_entryp_r',$data);
	}
	public function duplikasi()
	{	
		$data['module_title']  = 'Regular';
		$data['head'] = $this->load->view('templatemodule/head_panel',$data);
		$data['side_menu'] = $this->load->view('templatemodule/side_menu',$data,TRUE);
		//DROPDOWN PROVINCE
		$data['provinsi']=$this->m_entryp->provinsi();
		
		$data['allData'] = $this->m_entryp->data_duplikasi();
		$data['allDataW'] = $this->m_entryp->dataep_rw();
		$this->load->view('v_entryp_duplication',$data);
	}
	public function reg()
	{	
		
		$data['module_title']  = 'REG';
		$data['head'] = $this->load->view('templatemodule/head_panel',$data);
		$data['side_menu'] = $this->load->view('templatemodule/side_menu',$data,TRUE);
		//DROPDOWN PROVINCE
		$data['provinsi']=$this->m_entryp->provinsi();
		
		$data['allData'] = $this->m_entryp->getAllData();
		$this->load->view('v_entryp_reg',$data);
		
		

    	$ch = curl_init("http://192.168.177.235:8080/jw/web/json/workflow/assignment/list/pending/47165_valsys_processApprovalValsys&j_username=admin-dev&j_password=@dm1n23");
		curl_setopt($ch, CURLOPT_POST,true);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_HEADER, 0);
		$data = curl_exec($ch);
		curl_close($ch);
		$a =	json_decode($data, true);
		//$processId				= $a['processId'];
		var_dump($a);
		exit;
		/*print_r($data);*/
		//echo $data;
		/*print_r($data['processId']);
		exit;*/
	
	}


public function getData(){
	//$ch = curl_init("http://192.168.177.235:8080/jw/web/json/workflow/assignment/list/pending?j_username=admin-dev&j_password=@dm1n23");
/*	$ch = curl_init("http://192.168.177.221/api-joget/v1/get_ActivityId/47165_valsys_processApprovalValsys");
		//curl_setopt($ch, CURLOPT_POST,true);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_HEADER, 0);
		$data = curl_exec($ch);
*/		//curl_close($ch);

		$data['module_title']  = 'REG';
		$data['head'] = $this->load->view('templatemodule/head_panel',$data);
		$data['side_menu'] = $this->load->view('templatemodule/side_menu',$data,TRUE);
		//DROPDOWN PROVINCE
		$data['provinsi']=$this->m_entryp->provinsi();
		
		$data['allData'] = $this->m_entryp->getAllData();
		$this->load->view('v_entryp_reg',$data);
/*
		$ch 					= curl_init("http://192.168.177.235:8080/jw/web/json/workflow/process/start/valsys:4:processApprovalValsys?j_username=0504211215@indovision.tv&j_password=12345");
		curl_setopt($ch, CURLOPT_POST,true);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_HEADER, 0);
		$data 					= curl_exec($ch);
		curl_close($ch);
		$process 				= json_decode($data, true);
		$processid				= $process['processId'];

		
		$json 					= file_get_contents("http://192.168.177.221/api-joget/v1/get_ActivityId/".$processid);
		$arrai					= json_decode($json, true);
		$activityid				= $arrai[0]['ActivityId'];*/
		}
		/*var_dump($activityid);
		exit;*/
/*$username = "mmarkham@indovision.tv";
    $password = "12345";
    //$_url = 'http://'.$username.':'.$password.'@'.'http://192.168.177.235:8080/jw/web/json/workflow/assignment/list/pending';
    $_url = 'http://192.168.177.235:8080/jw/web/json/workflow/assignment/list/pending?j_username=admin-dev&j_password=@dm1n23';
 
    $options = array(
        'http' => array(
            'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
            'method'  => 'POST',
            'content' => http_build_query($data)
        )
    );
    $context  = stream_context_create($options);
    $api_response = file_get_contents($_url, false, $context);
    $r = json_decode($api_response);
    $activity = $r['activityId'];
	var_dump($activity);
	exit;
*/
	



	
	/*public function do_upload()
        {
                $config['upload_path']          = '.entryp/upload/';
                $config['allowed_types']        = 'gif|jpg|png|jpeg|bmp';
                $config['max_size']             = 2048;
                $config['max_width']            = 1288;
                $config['max_height']           = 768;
				

                $this->load->library('upload', $config);
				
				$this->upload->initialize($config);
				
                if ( ! $this->upload->do_upload('userfile'))
                {
                        $error = array('error' => $this->upload->display_errors());

                        $this->load->view('upload_form', $error);
                }
                else
                {
                        $data = array('upload_data' => $this->upload->data());

                        $this->load->view('upload_success', $data);
                }
        }*/


	//REG


	public function DTDaddData(){
		$coba = array();

		$userid    	= $this->dx_auth->get_user_id();
		//$identity_name="";
		$_POST 					= json_decode(file_get_contents('php://input'), true);
		//var_dump($_POST);
		//$prospect_nbr  		= $_POST['PN'];
		//$opentity_id 			= strtoupper(trim($_POST['OPENTITY_ID']));
		$form_number 			= strtoupper(trim($_POST['form_number']));
		$sales_channel			= strtoupper(trim($_POST['CATEGORY'])); 
		$prospect_nbr 			= strtoupper(trim($_POST['PN']));
		$prospect_type			= strtoupper(trim($_POST['pt']));
		$hardware_status		= strtoupper(trim($_POST['HARDWARE_STATUS']));
		//SGS
		$sgs_number				= strtoupper(trim($_POST['sa']));
		$sgs_name				= strtoupper(trim($_POST['snm']));
		//!
		$id_type				= strtoupper(trim($_POST['ID_TYPE']));
		$id_number 				= strtoupper(trim($_POST['ID_NUMBER']));
		$first_name 			= strtoupper(trim($_POST['FIRST_NAME']));
		$middle_name 			= strtoupper(trim($_POST['MIDDLE_NAME']));
		$last_name 				= strtoupper(trim($_POST['LAST_NAME']));
		$gender 				= strtoupper(trim($_POST['GENDER']));
		$religion 				= strtoupper(trim($_POST['RELIGION']));
		$place_birth			= strtoupper(trim($_POST['PLACE_BIRTH']));
		$Date_Of_Birth 			= strtoupper(trim($_POST['DATE_OF_BIRTH']));
		$salutation 			= strtoupper(trim($_POST['SALUTATION']));

		
		$confirmationperiod_date = strtoupper(trim($_POST['CONFIRMATIONPERIOD']));
		$confirmation_start_time = strtoupper(trim($_POST['CONFIRMATION_START_TIME']));
		$confirmation_end_time = strtoupper(trim($_POST['CONFIRMATION_END_TIME']));
			
		$confirmation_start_date = substr($confirmationperiod_date, 0,10);
		$confirmation_end_date 	 = substr($confirmationperiod_date, 13,23);
		

		$confirmation_start_date_time = $confirmation_start_date.' '.$confirmation_start_time;
		$confirmation_end_date_time = $confirmation_end_date.' '.$confirmation_end_time;




		$pln_id					= strtoupper(trim($_POST['PLN_ID']));
		$home_phone 			= trim($_POST['HOME_PHONE']);
		$mobile_phone 			= trim($_POST['MOBILE_PHONE']);
		$work_phone 			= trim($_POST['WORK_PHONE']);
		//convert expired date
		$expired_date 			= strtoupper(trim($_POST['expireddate']));
		
		

		//INSTALLATION DATE
		$Install_Date 			= strtoupper(trim($_POST['INSTALLATION_DATE']));
		$Install_Time 			= strtoupper(trim($_POST['INSTALLATION_TIME']));
	

		$email 					= strtoupper(trim($_POST['EMAIL']));
		$house_type 			= strtoupper(trim($_POST['BUILDING_TYPE']));
		$house_status 			= strtoupper(trim($_POST['BUILDING_STATUS']));
		$occupation 			= strtoupper(trim($_POST['OCCUPATION']));
		$income		 			= strtoupper(trim($_POST['INCOME']));
		$longitude 				= strtoupper(trim($_POST['LONGITUDE']));
		$latitude 				= strtoupper(trim($_POST['LATITUDE']));

		//ADDRESS 
		$address_id				= strtoupper(trim($_POST['ADDRESS_ID']));
		$address_idcard			= strtoupper(trim($_POST['STREET']));
		$province_idcard		= strtoupper(trim($_POST['PROVINCE']));
		$city_idcard			= strtoupper(trim($_POST['CITY']));
		$district_idcard		= strtoupper(trim($_POST['DISTRICT']));
		$subdistrict_idcard		= strtoupper(trim($_POST['SUBDISTRICT']));
		$zipcode_idcard			= strtoupper(trim($_POST['ZIPCODE']));
		$direction_idcard		= strtoupper(trim($_POST['DIRECTION']));
		$landmark_idcard 		= strtoupper(trim($_POST['LANDMARK']));
		
		

		
		
		$country_id				= strtoupper(trim($_POST['COUNTRY_ID']));
		$address_installation	= strtoupper(trim($_POST['INSTALLATION_ADDRESS']));
		$landmark_installation	= strtoupper(trim($_POST['INSTALLATION_LANDMARK']));
		$direction_installation	= strtoupper(trim($_POST['INSTALLATION_DIRECTIONS']));
		$province_installation	= strtoupper(trim($_POST['PROVINCE_INSTALL']));
		$city_installation		= strtoupper(trim($_POST['CITY_INSTALLATION']));
		$district_installation	= strtoupper(trim($_POST['DISTRICT_INSTALLATION']));
		$subdistrict_installation = strtoupper(trim($_POST['SUBDISTRICT_INSTALLATION']));
		$zipcode_installation	= strtoupper(trim($_POST['ZIPCODE_INSTALLATION']));


		$bt_flag 				= strtoupper(trim($_POST['BT_FLAG']));
		$bt_dk_lk 				= strtoupper(trim($_POST['BT_DK_LK']));
		$bt_branch_office 		= strtoupper(trim($_POST['BT_BRANCH_OFFICE']));
		$bt_region_office 		= strtoupper(trim($_POST['BT_REGION_OFFICE']));
		$bt_fee 				= strtoupper(trim($_POST['BT_FEE']));

		
		

		$address_billing		= strtoupper(trim($_POST['BILLING_ADDRESS']));
		$landmark_billing		= strtoupper(trim($_POST['BILLING_LANDMARK']));
		$direction_billing		= strtoupper(trim($_POST['BILLING_DIRECTION']));
		$province_billing		= strtoupper(trim($_POST['PROVINCE_BILLING']));
		$city_billing			= strtoupper(trim($_POST['CITY_BILLING']));
		$district_billing		= strtoupper(trim($_POST['DISTRICT_BILLING']));
		$subdistrict_billing	= strtoupper(trim($_POST['SUBDISTRICT_BILLING']));
		$zipcode_billing		= strtoupper(trim($_POST['ZIPCODE_BILLING']));

		$emergency_name			= strtoupper(trim($_POST['emergency_name']));
		$emergency_sibling		= strtoupper(trim($_POST['emergency_sibling']));
		$emergency_phone		= strtoupper(trim($_POST['emergency_phone']));
		$emergency_address		= strtoupper(trim($_POST['emergency_address']));
		$sales_code 			= strtoupper(trim($_POST['sales_code']));
		$sales_nik				= strtoupper(trim($_POST['sales_nik']));
		$sales_name				= strtoupper(trim($_POST['sales_name']));
		$sales_differentcauses	= strtoupper(trim($_POST['sales_differentcauses']));
		$sales_officebranch		= strtoupper(trim($_POST['sales_officebranch']));
		$sales_namebranchhead	= strtoupper(trim($_POST['sales_namebranchhead']));
		$flag_beda_alamat		= strtoupper(trim($_POST['FLAGBEDAALAMAT']));

		$flag_beda_billing_identity		= strtoupper(trim($_POST['FLAGBEDABILLING_IDENTITY']));
		$flag_beda_billing_install		= strtoupper(trim($_POST['FLAGBEDABILLING_INSTALL']));


		//MS
		$ENTITYCODE 			= strtoupper(trim($_POST['ENTITYCODE']));
		$POS 					= strtoupper(trim($_POST['POS']));
		$STOREAREA 				= strtoupper(trim($_POST['STOREAREA']));
		//!!!
		//1st payment
		$payment_method					= strtoupper(trim($_POST['PAYMENT_METHOD']));
		$card_type						= strtoupper(trim($_POST['PAYMENT_CARD_TYPE']));
		$card_number					= strtoupper(trim($_POST['PAYMENT_CARD_NUMBER']));
		$payment_card_name 				= strtoupper(trim($_POST['PAYMENT_CARD_NAME']));
		$payment_bank_account_number	= strtoupper(trim($_POST['PAYMENT_BANKACCOUNTNUMBER']));
		$payment_bank_name				= strtoupper(trim($_POST['PAYMENT_BANKNAME']));
		$payment_card_expired			= strtoupper(trim($_POST['PAYMENT_CARD_EXPIRED']));
		$Payment_Date 					= strtoupper(trim($_POST['PAYMENT_DATE']));
		$payment_remark					= strtoupper(trim($_POST['PAYMENT_REMARK']));
		$payment_direct_debit 			= strtoupper(trim($_POST['PAYMENT_DIRECT_DEBIT']));
		$amount							= strtoupper(trim($_POST['AMOUNT']));
		//PAYMENT_BANKNAME
		//PAYMENT_BANK_ACCOUNTNAME

		
		//package
		$package_alacarte 		= array();
		$package_brand			= strtoupper(trim($_POST['PACKAGE_BRAND']));
		$package_status			= strtoupper(trim($_POST['PACKAGE_STATUS']));
		$package_promo			= strtoupper(trim($_POST['PACKAGE_PROMO']));
		$package_basic			= strtoupper(trim($_POST['PACKAGE_BASIC']));
		$package_alacarte		= $_POST['PACKAGE_ALACARTE'];//strtoupper(trim($_POST['PACKAGE_ALACARTE']));
		
		$payment_period 		= strtoupper(trim($_POST['PAYMENT_PERIOD']));

		//estimated cost
		$cost_installation		= strtoupper(trim($_POST['ESTIMATED_INSTALLATION']));
		$cost_package			= strtoupper(trim($_POST['ESTIMATED_COST_PACKAGE']));
		$alacarte_cost			= strtoupper(trim($_POST['ESTIMATED_ALACARTE']));
		$promo_cost				= strtoupper(trim($_POST['ESTIMATED_PROMO']));
		$total_cost				= strtoupper(trim($_POST['TOTAL_ESTIMATED_COSTS']));
		
		//!!!!!!!!!!!!!
		//pickup
		$ket_ktp				= strtoupper(trim($_POST['KET_KTP']));
		$ket_cc					= strtoupper(trim($_POST['KET_CC']));
		$ket_dana				= strtoupper(trim($_POST['KET_DANA']));
		$ket_kuasa				= strtoupper(trim($_POST['KET_KUASA']));
		$ket_ttd				= strtoupper(trim($_POST['KET_TTD']));
		$ket_pernyataan			= strtoupper(trim($_POST['KET_PERNYATAAN']));
		$order_date 			= strtoupper(trim($this->input->post('ORDER_DATE')));
		$ch 					= curl_init("http://192.168.177.235:8080/jw/web/json/workflow/process/start/valsys:12:processApprovalValsys?j_username=codot&j_password=12345");
		curl_setopt($ch, CURLOPT_POST,true);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_HEADER, 0);
		$data 					= curl_exec($ch);
		curl_close($ch);


		$process 				= json_decode($data, true);
		$processid				= $process['processId'];

		$json 					= file_get_contents("http://192.168.177.221/api-joget/v1/get_ActivityId/".$processid);
		$arrai					= json_decode($json, true);
		$activityid				= $arrai[0]['ActivityId'];


		$chh					= curl_init();
		curl_setopt($chh, CURLOPT_URL, "http://192.168.177.221/api-joget/v1/storeEP");
		curl_setopt($chh, CURLOPT_POST, 1);
		curl_setopt($chh, CURLOPT_POSTFIELDS,"id=".$processid."&prospect_nbr=".$prospect_nbr);
		curl_setopt($chh, CURLOPT_HTTPHEADER, array('Content-Type: application/x-www-form-urlencoded'));
		curl_setopt($chh, CURLOPT_RETURNTRANSFER, true);
		$server_output = curl_exec ($chh);
		curl_close ($chh);

		
		$execute	= $this->m_entryp->DTDaddDataProspect($prospect_id, $opentity_id,$install_time,$Install_Date,$sales_channel,$form_number,$prospect_nbr,$prospect_type,$hardware_status,$sgs_number,$sgs_name,$id_type,$id_number,$salutation,$first_name,$middle_name,$last_name,$gender,$religion,$place_birth,$Date_Of_Birth,$pln_id,
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
																																												
		);
		
		//return  json_encode($execute);
		//redirect('entryp/Entryp');
	}


	public function DTDLogData()
	{
		$_POST  = json_decode(file_get_contents('php://input'), true);
		
		//echo '<pre>',print_r($_POST['person_after']['FIRST_NAME']),'</pre>';
		//echo '<pre>',print_r($_POST['person_before']['FIRST_NAME']),'</pre>';

		//var_dump($_POST['person_after']['PROSPECT_NUMBER']);
		$prospect_number = $_POST['person_after']['PROSPECT_NUMBER'];
		$tabel_prospect = "prospect";
		$field 			= "FIRST_NAME";

		$person_before_first_name = $_POST['person_before']['FIRST_NAME'];
		$person_after_first_name = $_POST['person_after']['FIRST_NAME']; 


		if($_POST['person_after']['FIRST_NAME'] != strtoupper($_POST['person_before']['FIRST_NAME']))
		{
			$execute	= $this->m_entryp->DTDLogDataProspect($prospect_number,$tabel_prospect,'firstname',(strtoupper($_POST['person_before']['FIRST_NAME'])),(strtoupper($_POST['person_after']['FIRST_NAME'])));
		}
		if($_POST['person_after']['MIDDLE_NAME'] != strtoupper($_POST['person_before']['MIDDLE_NAME']))
		{
			$execute	= $this->m_entryp->DTDLogDataProspect($prospect_number,$tabel_prospect,'middle name',(strtoupper($_POST['person_before']['MIDDLE_NAME'])),(strtoupper($_POST['person_after']['MIDDLE_NAME'])));
		}
		if($_POST['person_after']['LAST_NAME'] != strtoupper($_POST['person_before']['LAST_NAME']))
		{
			$execute	= $this->m_entryp->DTDLogDataProspect($prospect_number,$tabel_prospect,'last name',(strtoupper($_POST['person_before']['LAST_NAME'])),(strtoupper($_POST['person_after']['LAST_NAME'])));
		}

		//





		//echo '<pre>',print_r($_POST),'</pre>';
		//exit;
		//var_dump($_POST);exit;	
	}


//EndofDTD
	
	public function angular_DTDUpdateData()
	{
		$_POST 					= json_decode(file_get_contents('php://input'), true);
		//var_dump($_POST);exit;
		$prospect_id 			= strtoupper(trim($_POST['PROSPECT_ID']));
		$opentity_id 			= strtoupper(trim($_POST['OPENTITY_ID']));
		$form_number 			= strtoupper(trim($_POST['form_number']));
		$sales_channel			= strtoupper(trim($_POST['CATEGORY'])); 
		$prospect_nbr 			= strtoupper(trim($_POST['PN']));
		$prospect_type			= strtoupper(trim($_POST['pt']));
		$hardware_status		= strtoupper(trim($_POST['HARDWARE_STATUS']));
		//SGS
		$sgs_number				= strtoupper(trim($_POST['sa']));
		$sgs_name				= strtoupper(trim($_POST['snm']));
		//!
		$id_type				= strtoupper(trim($_POST['ID_TYPE']));
		$id_number 				= strtoupper(trim($_POST['ID_NUMBER']));
		$first_name 			= strtoupper(trim($_POST['FIRST_NAME']));
		$middle_name 			= strtoupper(trim($_POST['MIDDLE_NAME']));
		$last_name 				= strtoupper(trim($_POST['LAST_NAME']));
		$gender 				= strtoupper(trim($_POST['GENDER']));
		$religion 				= strtoupper(trim($_POST['RELIGION']));
		$place_birth			= strtoupper(trim($_POST['PLACE_BIRTH']));
		$Date_Of_Birth 			= strtoupper(trim($_POST['DATE_OF_BIRTH']));
		
		$confirmationperiod_date = strtoupper(trim($_POST['CONFIRMATIONPERIOD']));
		$confirmation_start_time = strtoupper(trim($_POST['CONFIRMATION_START_TIME']));
		$confirmation_end_time = strtoupper(trim($_POST['CONFIRMATION_END_TIME']));
			
		$confirmation_start_date = substr($confirmationperiod_date, 0,10);
		$confirmation_end_date 	 = substr($confirmationperiod_date, 13,23);
		

		$confirmation_start_date_time = $confirmation_start_date.' '.$confirmation_start_time;
		$confirmation_end_date_time = $confirmation_end_date.' '.$confirmation_end_time;




		$pln_id					= strtoupper(trim($_POST['PLN_ID']));
		$home_phone 			= trim($_POST['HOME_PHONE']);
		$mobile_phone 			= trim($_POST['MOBILE_PHONE']);
		$work_phone 			= trim($_POST['WORK_PHONE']);
		//convert expired date
		$expired_date 			= strtoupper(trim($_POST['expireddate']));
		
		

		//INSTALLATION DATE
		$Install_Date 			= strtoupper(trim($_POST['INSTALLATION_DATE']));
		$Install_Time 			= strtoupper(trim($_POST['INSTALLATION_TIME']));
	

		$email 					= strtoupper(trim($_POST['EMAIL']));
		$house_type 			= strtoupper(trim($_POST['BUILDING_TYPE']));
		$house_status 			= strtoupper(trim($_POST['BUILDING_STATUS']));
		$occupation 			= strtoupper(trim($_POST['OCCUPATION']));
		$income		 			= strtoupper(trim($_POST['INCOME']));

		$address_idcard			= strtoupper(trim($_POST['STREET']));
		$province_idcard		= strtoupper(trim($_POST['PROVINCE']));
		$city_idcard			= strtoupper(trim($_POST['CITY']));
		$district_idcard		= strtoupper(trim($_POST['DISTRICT']));
		$subdistrict_idcard		= strtoupper(trim($_POST['SUBDISTRICT']));
		$zipcode_idcard			= strtoupper(trim($_POST['ZIPCODE']));

		
		$address_id				= strtoupper(trim($_POST['ADDRESS_ID']));
		$address_installation	= strtoupper(trim($_POST['INSTALLATION_ADDRESS']));
		$direction_installation	= strtoupper(trim($_POST['DIRECTIONS']));
		$province_installation	= strtoupper(trim($_POST['PROVINCE_INSTALL']));
		$city_installation		= strtoupper(trim($_POST['CITY_INSTALLATION']));
		$district_installation	= strtoupper(trim($_POST['DISTRICT_INSTALLATION']));
		$subdistrict_installation = strtoupper(trim($_POST['SUBDISTRICT_INSTALLATION']));
		$zipcode_installation	= strtoupper(trim($_POST['ZIPCODE_INSTALLATION']));
		$address_billing		= strtoupper(trim($_POST['BILLING_ADDRESS']));
		$province_billing		= strtoupper(trim($_POST['PROVINCE_BILLING']));
		$city_billing			= strtoupper(trim($_POST['CITY_BILLING']));
		$district_billing		= strtoupper(trim($_POST['DISTRICT_BILLING']));
		$subdistrict_billing	= strtoupper(trim($_POST['SUBDISTRICT_BILLING']));
		$zipcode_billing		= strtoupper(trim($_POST['ZIPCODE_BILLING']));
		$emergency_name			= strtoupper(trim($_POST['emergency_name']));
		$emergency_sibling		= strtoupper(trim($_POST['emergency_sibling']));
		$emergency_phone		= strtoupper(trim($_POST['emergency_phone']));
		$emergency_address		= strtoupper(trim($_POST['emergency_address']));
		$sales_code 			= strtoupper(trim($_POST['sales_code']));
		$sales_nik				= strtoupper(trim($_POST['sales_nik']));
		$sales_name				= strtoupper(trim($_POST['sales_name']));
		$sales_differentcauses	= strtoupper(trim($_POST['sales_differentcauses']));
		$sales_officebranch		= strtoupper(trim($_POST['sales_officebranch']));
		$sales_namebranchhead	= strtoupper(trim($_POST['sales_namebranchhead']));
		$flag_beda_alamat		= strtoupper(trim($_POST['FLAGBEDAALAMAT']));

		//MS
		$ENTITYCODE 			= strtoupper(trim($_POST['ENTITYCODE']));
		$POS 					= strtoupper(trim($_POST['POS']));
		$STOREAREA 				= strtoupper(trim($_POST['STOREAREA']));
		//!!!
		//1st payment
		$payment_method				= strtoupper(trim($_POST['PAYMENT_METHOD']));
		$card_type					= strtoupper(trim($_POST['PAYMENT_CARD_TYPE']));
		$card_number				= strtoupper(trim($_POST['PAYMENT_CARD_NUMBER']));
		$name_akun					= strtoupper(trim($_POST['PAYMENT_BANK_ACCOUNTNAME']));
		$bankaccount_number			= strtoupper(trim($_POST['BANK_ACCOUNT_NO']));
		$bank_name					= strtoupper(trim($_POST['BANK_NAME']));
		$payment_card_expired		= strtoupper(trim($_POST['PAYMENT_CARD_EXPIRED']));	
		$Payment_Date 				= strtoupper(trim($_POST['PAYMENT_DATE']));
		$payment_remark				= strtoupper(trim($_POST['PAYMENT_REMARK']));
		$amount						= strtoupper(trim($_POST['AMOUNT']));
		
		//package
		$package_alacarte 		= array();
		$package_brand			= strtoupper(trim($_POST['PACKAGE_BRAND']));
		$package_status			= strtoupper(trim($_POST['PACKAGE_STATUS']));
		$package_promo			= strtoupper(trim($_POST['PACKAGE_PROMO']));
		$package_basic			= strtoupper(trim($_POST['PACKAGE_BASIC']));
		$package_alacarte		= $_POST['PACKAGE_ALACARTE'];//strtoupper(trim($_POST['PACKAGE_ALACARTE']));
		
		$payment_period 		= strtoupper(trim($_POST['PAYMENT_PERIOD']));

		//estimated cost
		$cost_installation		= strtoupper(trim($_POST['ESTIMATED_INSTALLATION']));
		$cost_package			= strtoupper(trim($_POST['ESTIMATED_COST_PACKAGE']));
		$alacarte_cost			= strtoupper(trim($_POST['ESTIMATED_ALACARTE']));
		$promo_cost				= strtoupper(trim($_POST['ESTIMATED_PROMO']));
		$total_cost				= strtoupper(trim($_POST['TOTAL_ESTIMATED_COSTS']));
		
		//!!!!!!!!!!!!!
		//pickup
		$ktp_ket				= strtoupper(trim($_POST['KET_KTP']));
		$cc_ket					= strtoupper(trim($_POST['KET_CC']));
		$dana_ket				= strtoupper(trim($_POST['KET_DANA']));
		$kuasa_ket				= strtoupper(trim($_POST['KET_KUASA']));
		$ttd_ket				= strtoupper(trim($_POST['KET_TTD']));
		$pernyataan_ket			= strtoupper(trim($_POST['KET_PERNYATAAN']));
		$order_date 			= strtoupper(trim($this->input->post('ORDER_DATE')));
		$ch 					= curl_init("http://192.168.177.235:8080/jw/web/json/workflow/process/start/valsys:12:processApprovalValsys?j_username=codot&j_password=12345");
		curl_setopt($ch, CURLOPT_POST,true);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_HEADER, 0);
		$data 					= curl_exec($ch);
		curl_close($ch);


		$process 				= json_decode($data, true);
		$processid				= $process['processId'];

		$json 					= file_get_contents("http://192.168.177.221/api-joget/v1/get_ActivityId/".$processid);
		$arrai					= json_decode($json, true);
		$activityid				= $arrai[0]['ActivityId'];


		$chh					= curl_init();
		curl_setopt($chh, CURLOPT_URL, "http://192.168.177.221/api-joget/v1/storeEP");
		curl_setopt($chh, CURLOPT_POST, 1);
		curl_setopt($chh, CURLOPT_POSTFIELDS,"id=".$processid."&prospect_nbr=".$prospect_nbr);
		curl_setopt($chh, CURLOPT_HTTPHEADER, array('Content-Type: application/x-www-form-urlencoded'));
		curl_setopt($chh, CURLOPT_RETURNTRANSFER, true);
		$server_output = curl_exec ($chh);
		curl_close ($chh);

		
		$execute	= $this->m_entryp->DTDUpdateData($prospect_id, $opentity_id,$install_time,$Install_Date,$sales_channel,$form_number,$prospect_nbr,$prospect_type,$hardware_status,$sgs_number,$sgs_name,$id_type,$id_number,$salutation,$first_name,$middle_name,$last_name,$gender,$religion,$place_birth,$Date_Of_Birth,$pln_id,
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
																																							$payment_remark
		);



	}

	public function angular_OperationalEntityView()
	{   
		$branch_search 	= $this->input->get('param1');
		$sales_category = $this->input->get('param2');
		$brand_search 	= $this->input->get('param3');
		$result = $this->m_entryp->searchPOS($branch_search,$sales_category,$brand_search);
		return json_encode($result);	
	   /*$data = $this->db->get('OPERATIONAL_ENTITY_VW')->result();
	   $arr_data = array();
	   $i=0;
	   foreach($data as $r){
	    $arr_data[$i]['entity_id']=$r->entity_id;
	    $arr_data[$i]['entity_code']=$r->entity_code;
	    $arr_data[$i]['entity_type']=$r->entity_type;
	    $arr_data[$i]['entity_name']=$r->entity_name;
	    $arr_data[$i]['branch']=$r->branch;
	    $arr_data[$i]['brand']=$r->brand;
	    $arr_data[$i]['sales_channel']=$r->sales_channel;
	    $i++;
	   }
	   echo json_encode($arr_data);*/
	}
	
	public function angular_SalesView()
	{  
	    $sql = "SELECT * FROM MASTER_SALES_LOGIN LIMIT 10";
		$result = $this->db->query($sql)->result_array();
		echo json_encode($result, TRUE);
		
	}
	
	public function angular_ZipCode()
	{  
	    $sql = "SELECT * FROM VIEW_VALID_ADDRESS LIMIT 10";
		$result = $this->db->query($sql)->result_array();
		echo json_encode($result, TRUE);
		
	}
	

	public function angular_EmployeeView()
	{  
		$sales_code_search = $this->input->get('param1');
		$sales_name_search = $this->input->get('param2');
		
		
			//$sql = "select * from MASTER_SALES_LOGIN where EMPLOYEE_ID like '%$sales_code_search%' limit 10";
			
			
	   	if($sales_code_search != null) 
		{
			
			//$query =  $this->db->get_where('MASTER_SALES_LOGIN', array('EMPLOYEE_ID' => $sales_code_search))->result();
			$sql = "select * from MASTER_SALES_LOGIN where EMPLOYEE_ID LIKE '$sales_code_search%' limit 10";
			$query = $this->db->query($sql)->result_array();
			/*
			$array_data = array();
		   	$i=0;
			
		   	foreach($query as $r){
			   	$array_data[$i]['EMPLOYEE_ID']=$r->EMPLOYEE_ID;
			   	$array_data[$i]['NIK']=$r->NIK;
			    $array_data[$i]['EMPLOYEE_NAME']=$r->EMPLOYEE_NAME;
			    $i++;
		   }
		   
			*/
		   
		   
		   	

	    }
		else if($sales_name_search != null) 
		{
			//$data = $this->db->select('*')->from('master_employee_tbl')->where("employee_code LIKE '%$sales_code_search%'")->get();
			$sql = "select * from MASTER_SALES_LOGIN where EMPLOYEE_NAME LIKE '%$sales_name_search%' limit 10";
			$query = $this->db->query($sql)->result_array();
			/*
			$array_data = array();
		   	$i=0;
			
		   	foreach($query as $r){
			   	$array_data[$i]['employee_id']=$r->employee_id;
			    $array_data[$i]['employee_code']=$r->employee_code;
			    $array_data[$i]['first_name']=$r->first_name;
			    $i++;
		   }
		   */

		}
		else  
		{
			//$data = $this->db->select('*')->from('master_employee_tbl')->where("employee_code LIKE '%$sales_code_search%'")->get();
			
			$sql = "select * from MASTER_SALES_LOGIN where EMPLOYEE_ID LIKE '$sales_code_search%' or UPPER(EMPLOYEE_NAME) LIKE '%$sales_name_search%' limit 10";
			$query = $this->db->query($sql)->result_array();
			
			/*
			$array_data = array();
		   	$i=0;
		   	foreach($query as $r){
			   	$array_data[$i]['employee_id']=$r->employee_id;
			    $array_data[$i]['employee_code']=$r->employee_code;
			    $array_data[$i]['first_name']=$r->first_name;
			    $i++;
		   }
		   */

		}
	   //var_dump($result);
	   echo json_encode($query);
	}


	public function angular_getPromoData()
	{
		$promoId = $this->input->get('param1');

		$data =  $this->db->get_where('VAL_MST_PROMO', array('promotion_id' => $promoId,'is_active' => '1'))->result();
			
			$array_data = array();
		   	$i=0;
		   	foreach($data as $r){
		    	$array_data[$i]['disc_inst_fee']=$r->disc_inst_fee;
		    	$i++;
			}
		echo json_encode($array_data);
	}	
	


	public function angular_getPackageBasicData()
	{
		$PackageBasic_id = $this->input->get('param1');

		$data =  $this->db->get_where('VAL_PRODUCT_PRICE', array('bundle_id' => $PackageBasic_id,'type' => 'Basic'))->result();
			
			$array_data = array();
		   	$i=0;
		   	foreach($data as $r){
		    	$array_data[$i]['price']=$r->price;
		    	$i++;
			}
		    echo json_encode($array_data);
	}

	/*public function angular_getPackageAlacarteData()
	{
		$alacartePriceArray  =array();
		$PackageBasic_id = $this->input->get('param1');
		$PackageAlacarte_id = array();
		$PackageAlacarte_idArray = $this->input->get('param2');

		//var_dump($PackageBasic_id);
		//var_dump($PackageAlacarte_idArray);
		$PackageAlacarte_idValues =array_values($PackageAlacarte_idArray);
		$length = count($PackageAlacarte_idValues);

		//var_dump($length);
		for($i=0;$i<$length;$i++)
		{
			$data =  $this->db->get_where('VAL_PRODUCT_PRICE', array('bundle_id' => $PackageBasic_id,'type' => 'Alacarte','service_id' =>$PackageAlacarte_idValues[$i] ))->result();	
			
			$array_data = array();
		   	$j=0;
		   	foreach($data as $r)
		   	{
		    	$array_data[$j]['price']=$r->price;
		    	array_push($alacartePriceArray, $array_data[$j]['price']);
		    	//$total_costAlacarte =  $array_data[$j]['price'];
		    	$j++;
			}
		}
		echo json_encode($alacartePriceArray);
		

	}*/
	public function angular_getZipCodeTransport()
	{
		$zipcode_search = $this->input->get('param2');

		$sql = "select * from MASTER_TRANSPORT where POST_CODE LIKE '$zipcode_search%' limit 10";
		$array_data = $this->db->query($sql)->result_array();

		echo json_encode($array_data);

	}
	public function angular_getZipCodeViewData()
	{
		$subdistrict_search = $this->input->get('param1');
		$zipcode_search = $this->input->get('param2');

		if($zipcode_search != null) 
		{
			//$data =  $this->db->get_where('VIEW_VALID_ADDRESS', array('zipcode_id' => $zipcode_search))->result();
			
			$sql = "select * from VIEW_VALID_ADDRESS where zipcode_id LIKE '$zipcode_search%' limit 10";
			$array_data = $this->db->query($sql)->result_array();
			/*
			$array_data = array();
		   	$i=0;
		   	foreach($data as $r){
		   	$array_data[$i]['address_id']=$r->address_id;	
		    $array_data[$i]['zipcode_id']=$r->zipcode_id;
		    $array_data[$i]['subdistrict_name']=$r->subdistrict_name;
		    $array_data[$i]['district_name']=$r->district_name;
		    $array_data[$i]['city_name']=$r->city_name;
		    $array_data[$i]['province_name']=$r->province_name;
		    
		    $i++;
		   }*/

		}
		else if($subdistrict_search != null) 
		{
			//$data =  $this->db->get_where('VIEW_VALID_ADDRESS', array('subdistrict_name' => $subdistrict_search))->result();
			
			$sql = "select * from VIEW_VALID_ADDRESS where subdistrict_name LIKE '%$subdistrict_search%' limit 10";
			$array_data = $this->db->query($sql)->result_array();
			/*
			$array_data = array();
		   	$i=0;
		   	foreach($data as $r){
		   	$array_data[$i]['address_id']=$r->address_id;	
		    $array_data[$i]['zipcode_id']=$r->zipcode_id;
		    $array_data[$i]['subdistrict_name']=$r->subdistrict_name;
		    $array_data[$i]['district_name']=$r->district_name;
		    $array_data[$i]['city_name']=$r->city_name;
		    $array_data[$i]['province_name']=$r->province_name;
		    
		    $i++;
		   }*/

		}
		else  
		{
			$data =  $this->db->get_where('VIEW_VALID_ADDRESS', array('subdistrict_name' => $subdistrict_search,'zipcode_id' => $zipcode_search))->result();
			
			$sql = "select * from VIEW_VALID_ADDRESS where zipcode_id LIKE '$zipcode_search%' or UPPER(subdistrict_name) LIKE '%$subdistrict_search%' limit 10";
			$array_data = $this->db->query($sql)->result_array();
			
			/*
			$array_data = array();
		   	$i=0;
		   	foreach($data as $r){
		   	$array_data[$i]['address_id']=$r->address_id;	
		    $array_data[$i]['zipcode_id']=$r->zipcode_id;
		    $array_data[$i]['subdistrict_name']=$r->subdistrict_name;
		    $array_data[$i]['district_name']=$r->district_name;
		    $array_data[$i]['city_name']=$r->city_name;
		    $array_data[$i]['province_name']=$r->province_name;
		    
		    $i++;
		   }*/

		}



		echo json_encode($array_data);
	}

	public function angular_getCostTransportData()
	{
		$zipcode_values = $this->input->get('param1');

	

		$data =  $this->db->get_where('BT_TBL_MASTER', array('ZIPCODE' => $zipcode_values."-00"))->result();
			$array_data = array();
		   	$i=0;
		   	foreach($data as $r){
		    $array_data[$i]['JARAK']=$r->JARAK;
		    $array_data[$i]['DKLK']=$r->DKLK;
		    $array_data[$i]['BIAYA']=$r->BIAYA;
		    $array_data[$i]['BRANCH']=$r->BRANCH;
		    $i++;
		   }
		 //var_dump($zipcode_values."-00");
		 //var_dump($data);
		 //var_dump($data);

		 
		 //var_dump($data);
		  
		echo json_encode($array_data);
	}

	public function angular_ViewUploadData()
	{
		$pnumb_values = $this->input->get('param1');
			
		
		$data =  $this->db->get_where('PROSPECT_FILE_UPLOAD', array('PROSPECT_NBR' => $pnumb_values))->result();
		//$prospectNumber = $this->input->get('param1');
		//var_dump($data);exit;
		

	   	$arr_data = array();
	   	$i=0;
	   foreach($data as $r){
		$arr_data[$i]['FILE_ID']=$r->FILE_ID;
	    $arr_data[$i]['FILE_NAME']=$r->FILE_NAME;
	    $arr_data[$i]['CATEGORY']=$r->CATEGORY;
	    //$arr_data[$i]['p_file_path']=$r->p_file_path;
	    $arr_data[$i]['FILE_PATH']=str_replace("/opt/lampp/htdocs/valsys/","",$r->FILE_PATH);
	    $arr_data[$i]['PROSPECT_NBR']=$r->PROSPECT_NBR;
	    $i++;
	   }
	   echo json_encode($arr_data);
	}

	public function angular_ViewUploadDataKacab()
	{
		$pnumb_values = $this->input->get('param1');
		
		
		$data =  $this->db->get_where('PROSPECT_FILE_UPLOAD', array('prospect_id' => $pnumb_values))->result();
		//$prospectNumber = $this->input->get('param1');
		
		

	   	$arr_data = array();
	   	$i=0;
	   	foreach($data as $r){
	    $arr_data[$i]['FILE_NAME']=$r->FILE_NAME;
	    $arr_data[$i]['CATEGORY']=$r->CATEGORY;
	    //$arr_data[$i]['p_file_path']=$r->p_file_path;
	    // $arr_data[$i]['p_file_path']=str_replace("/opt/lampp/htdocs/valsys/","",$r->p_file_path);
	    $arr_data[$i]['PROSPECT_ID']=$r->PROSPECT_ID;
	    $i++;
	   }
	   echo json_encode($arr_data);
	}

	public function angular_UploadData()
	{

		//$data =  $this->db->get_where('PROSPECT', array('PROSPECT_NBR' => '010000820441'))->result();
		//var_dump($data);exit;
		//$i=0;
		//$array_data = array();
	   	//foreach($data as $r){
		//    $array_data[$i]['PROSPECT_ID']=$r->PROSPECT_ID;
		//    $i++;
	   	//}
	   	//var_dump($array_data[0]['PROSPECT_ID']);
		//$prospect_id = $array_data[0]['PROSPECT_ID'];
		
		$fileData = $_FILES['file'];
        $name     = $fileData['name'];
        $type     = $fileData['type'];
        $size     = $fileData['size'];
        $tmpFile  = $fileData['tmp_name'];

        //var_dump(json_decode($_POST['data']));
        $request = json_decode($_POST['data']);

        $prospect_nbr = $request->P_PROSPECT_NBR;
        $file_category = $request->P_CATEGORY_FILE;
        $uploadedby = $request->P_UPLOAD_BY;

		$base_path =    "/opt/lampp/htdocs/valsys/";     

        $mypath      = $base_path."user_uploads/";
        //var_dump(base_url());exit;
        
        $target_path 	= $mypath.$name;

        $date = date('Y-m-d');
        $date_piece  =  explode("-",$date);
    	$date_folder =  array_values($date_piece);
    	$year = $date_folder[0];
    	$month = $date_folder[1];
    	$final_path = $mypath.$year.'/'.$month.'/'.$prospect_nbr.'/'.$prospect_nbr.'_'.$file_category.'_'.$name;

    	

 		if (!file_exists($mypath.$year)) {
    		mkdir($mypath.$year, 0777, true);
    		chdir('/'.$year);

    		if (!file_exists($mypath.$year.'/'.$month)) 
    		{
	    		mkdir($mypath.$year.'/'.$month, 0777, true);
	    		chdir('/'.$month);

	    		if(!file_exists($mypath.$year.'/'.$month.'/'.$prospect_nbr))
	    		{
	    			mkdir($mypath.$year.'/'.$month.'/'.$prospect_nbr, 0777, true);
	    			chdir('/'.$prospect_nbr);
	    			move_uploaded_file($tmpFile, $mypath.$year.'/'.$month.'/'.$prospect_nbr.'/'.$prospect_nbr.'_'.$file_category.'_'.$name);
	    		}
	    		else
	    		{
	    			move_uploaded_file($tmpFile, $mypath.$year.'/'.$month.'/'.$prospect_nbr.'/'.$prospect_nbr.'_'.$file_category.'_'.$name);
	    		}

	    		

	    	}
	    	else
	    	{
	    		//move_uploaded_file($tmpFile, $mypath.$year.'/'.$month.'/'.$prospect_nbr.'/'.$name);
	    		//chown($mypath.$date_folder[0].'/'.$date_folder[1].'/'.$name, "subsdev");
	    		if(!file_exists($mypath.$year.'/'.$month.'/'.$prospect_nbr))
	    		{
	    			mkdir($mypath.$year.'/'.$month.'/'.$prospect_nbr, 0777, true);
	    			chdir('/'.$prospect_nbr);
	    			move_uploaded_file($tmpFile, $mypath.$year.'/'.$month.'/'.$prospect_nbr.'/'.$prospect_nbr.'_'.$file_category.'_'.$name);
	    		}
	    		else
	    		{
	    			move_uploaded_file($tmpFile, $mypath.$year.'/'.$month.'/'.$prospect_nbr.'/'.$prospect_nbr.'_'.$file_category.'_'.$name);
	    		}

	    	}

        }
        else
        {
        	if (!file_exists($mypath.$year.'/'.$month)) 
        	{
	    		mkdir($mypath.$year.'/'.$month, 0777, true);
	    		chdir('/'.$month);
				
				if(!file_exists($mypath.$year.'/'.$month.'/'.$prospect_nbr))
	    		{
	    			mkdir($mypath.$year.'/'.$month.'/'.$prospect_nbr, 0777, true);
	    			chdir('/'.$prospect_nbr);
	    			move_uploaded_file($tmpFile, $mypath.$year.'/'.$month.'/'.$prospect_nbr.'/'.$prospect_nbr.'_'.$file_category.'_'.$name);
	    		}
	    		else
	    		{
	    			move_uploaded_file($tmpFile, $mypath.$year.'/'.$month.'/'.$prospect_nbr.'/'.$prospect_nbr.'_'.$file_category.'_'.$name);
	    		}	    		
	    		
	    		//move_uploaded_file($tmpFile, $mypath.$year.'/'.$month.'/'.$name);
	    		//chown($mypath.$date_folder[0].'/'.$date_folder[1].'/'.$name, "subsdev");
	    	}
	    	else
	    	{
	    		if(!file_exists($mypath.$year.'/'.$month.'/'.$prospect_nbr))
	    		{
	    			mkdir($mypath.$year.'/'.$month.'/'.$prospect_nbr, 0777, true);
	    			chdir('/'.$prospect_nbr);
	    			
	    			move_uploaded_file($tmpFile, $mypath.$year.'/'.$month.'/'.$prospect_nbr.'/'.$prospect_nbr.'_'.$file_category.'_'.$name);
	    		}
	    		else
	    		{
	    			move_uploaded_file($tmpFile, $mypath.$year.'/'.$month.'/'.$prospect_nbr.'/'.$prospect_nbr.'_'.$file_category.'_'.$name);
	    		}
	    			
	    	}
        }

        //upload database
    	$this->m_entryp->SaveDataUploaded($prospect_id,$prospect_nbr.'_'.$file_category.'_'.$name,$file_category,$type,$final_path,$prospect_nbr,$uploadedby);
	}

	//GET DROPDOWN SELECTED OPTION
	function ambil_data(){
		$modul=$this->input->post('modul');
		$id=$this->input->post('id');

		if($modul=="kota"){
		echo $this->m_entryp->kota($id);
		
		}
		else if($modul=="kecamatan"){
		echo $this->m_entryp->kecamatan($id);

		}
		else if($modul=="kelurahan"){
		echo $this->m_entryp->kelurahan($id);
		}
		else if($modul=="basic"){
		//var_dump("asd");
		echo $this->m_entryp->basic($id);
		}
		else if($modul=="alacarte")
		{
		echo $this->m_entryp->alacarte($id);
		}
		else if($modul=="subc")
		{
		echo $this->m_entryp->get_subcategorydth($id);
		}
	}

	function form_bedaalamat()
	{
		$data['house_status'] 	= trim($this->input->get('h_status'));
		$data['sales_nik'] 		= trim($this->input->get('sales_nik'));
		$data['sales_code'] 	= trim($this->input->get('sales_code'));
		$data['sales_officebranch'] 	= trim($this->input->get('sales_officebranch'));
		$data['first_name'] 	= trim($this->input->get('first_name'));
		$data['street'] 	= trim($this->input->get('street'));
		$data['install_address'] 	= trim($this->input->get('install_address'));
		$data['sales_differentcauses'] 	= trim($this->input->get('sales_differentcauses'));
		
		


		



		$this->load->view('v_beda_alamat.php',$data);
			/*$this->pdf->load_view('v_bedaalamat');
			$this->pdf->render();
			$this->pdf->stream("name-file.pdf");*/
	}

	function getDataHW(){  
		$result  = $this->m_entryp->getDataHW();		 
		return  json_encode($result);
	}
	
	 
	
	function getTemplate(){
		//$id 				= strtoupper(trim($this->input->post('id_combo')));
		$result  		= $this->m_entryp->getTemplate();
		return  json_encode($result);
	}
	
	function getDataHW2(){  
		$id_combo 				= $this->input->post('id_combo'); 
		$result  					= $this->m_entryp->getDataHW2($id_combo);	
		return  json_encode($result); 
	} 
		
	function getDataHW3(){ 
		$result  = $this->m_entryp->getDataHW3();		 
		return  json_encode($result);
	}
	
	function getSearchHW(){ 
		$prospect_nbr 				= $this->input->post('prospect_nbr'); 
		$result  = $this->m_entryp->getSearchHW($prospect_nbr);		 
		return  json_encode($result);
	}
	
	function SaveEntryHW(){
		$prospect_number	= trim($this->input->post('pnumber'));
		$item_id 					=  trim($this->input->post('item_id'));
		//$serial_number 		=  trim($this->input->post('serial_number'));  
		$serial_number 		= strtoupper(trim($this->input->post('serial_number')));
		$sales_code 			= trim($this->input->post('sales_code'));  
		$result						= $this->m_entryp->SaveEntryHW($prospect_number,$item_id,$serial_number,$sales_code);

		return json_encode($result);
	}

	function checkHW(){ 
		$item_id 					=  trim($this->input->post('item_id'));
		$serial_number 		=  trim($this->input->post('serial_number'));  
		$sales_code 			= trim($this->input->post('sales_code'));  
		$result						= $this->m_entryp->checkHW($item_id,$serial_number,$sales_code);
		return  json_encode($result);
	}




	public function view_tl_detail()
	{
		$idp = $this->input->get('param1');

		$data =  $this->db->get_where('DTH_EDIT', array('PROSPECT_ID' => $idp))->result();
			$array_data = array();
		   	$i=0;
		   	foreach($data as $r){
		    $array_data[$i]['AGREEMENT']=$r->AGREEMENT;
		    $array_data[$i]['FIRSTNAME_V']=$r->FIRSTNAME_V;
		    $array_data[$i]['MIDDLENAME_V']=$r->MIDDLENAME_V;
		    $array_data[$i]['LASTNAME_V']=$r->LASTNAME_V;
		    $i++;
		   }
		 //var_dump($zipcode_values."-00");
		 //var_dump($data);
		 //var_dump($data);

		 
		 //var_dump($data);
		  
		echo json_encode($array_data);
	}


		
}
