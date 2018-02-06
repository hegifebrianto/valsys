<?php
defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set('Asia/Jakarta');

class Entryp3 extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model("m_entryp3");
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
		//$this->load->model("m_entryp3");
		if(!$this->dx_auth->is_logged_in())
		{
		  // Redirect to login page
		  $this->dx_auth->deny_access('login');
		} else {
			$userid    	= $this->dx_auth->get_user_id(); 
			$user_desc   = $this->dx_auth->get_user_desc();			
		} 
		$data['module_title']  = 'Entry Prospect';
		$data['head'] = $this->load->view('templatemodule/head_panel',$data);
		$data['side_menu'] = $this->load->view('templatemodule/side_menu',$data,TRUE);
		
		//DROPDOWN PROVINCE
		$data['provinsi']=$this->m_entryp3->provinsi();
		$data['branch'] = $this->m_entryp3->branch();
		//DROPDOWN PROMO
		$data['promotion'] = $this->m_entryp3->promotion();
		$data['salesMS'] = $this->m_entryp3->salesMS();

		//DROPDOWN BRAND
		$data['brand'] = $this->m_entryp3->brand();

		//DROPDOWN SALES CHANNEL
		$data['sales_channel'] = $this->m_entryp3->sales_channel();
		
		//DROPDOWN PRODUCT
		$data['produk'] = $this->m_entryp3->product();
		$data['prospect_type'] = $this->m_entryp3->prospect_type();
		
		$data['allData'] = $this->m_entryp3->getAllData();
		$data['allDataHW'] = $this->m_entryp3->getDataHW();
	//	$data['prospect_type'] = $this->entryp->prospect_type();

		$this->load->view('v_entryp3',$data);
		/*$data['module_title']  = 'Door to door';
		$data['head'] = $this->load->view('templatemodule/head_panel',$data);
		$data['side_menu'] = $this->load->view('templatemodule/side_menu',$data,TRUE);
		$data['top_navi'] = $this->load->view('templatemodule/top_navi',$data,TRUE);
		$data['footer'] = $this->load->view('templatemodule/footer',$data,TRUE);
		$this->load->view('v_entryp');*/
	}
	public function log_admin(){
		$_POST 					= json_decode(file_get_contents('php://input'), true);
		$idp					= $_POST['idprospect'];
		
		//$this->m_entryp3->add_data_dth($idp, $category,$sub_category);
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
		$category					= $_POST['name'];
		$sub_category					= $_POST['age'];
		$this->m_entryp3->add_data_dth($idp, $category,$sub_category);
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



	///ADMIN APPROVAL
	public function admin_app(){
		$_POST 					= json_decode(file_get_contents('php://input'), true);
		$idp					= $_POST['idprospect'];
		$infod					= $_POST['informasid'];
		$status					= $_POST['status'];
		$reason					= $_POST['reason'];
		$this->m_entryp3->add_admin_app($idp, $infod,$status,$reason);
		
	}
	public function admin_app_rem(){
		$_POST 					= json_decode(file_get_contents('php://input'), true);
		$idp					= $_POST['idprospect'];
		$infod					= $_POST['informasid'];
		$status					= $_POST['status'];
		$reason					= $_POST['reason'];
		$this->m_entryp3->rem_admin_app($idp, $infod,$status,$reason);
		
	}
	public function update_admin_app(){
		$_POST 					= json_decode(file_get_contents('php://input'), true);
		$status_final			= $_POST['finall'];
		$idp					= $_POST['idprospect'];
		$light					= $_POST['lightv'];
		$processid				= $_POST['process'];
		/*var_dump($_POST);
		exit;*/
		


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

		/*$jsonduplicate 				= file_get_contents("http://192.168.179.11/webapi_icc_valsys/api/customer/DuplicationCheckCustomer/manyparams/".$fname."/".$middlen."/".$sname."/".$homep."/".$workp."/".$reference."/".$reference."/".$reference."");
		$arraidc					= json_decode($jsonduplicate, true);*/
		/*$duplicate_value			= $arraidc[0]['SimilarityOfCustomerName'];*/
		/*$duplicate_value_phone			= $arraidc[0]['SimilarityOfPhone'];
		$duplicate_value_name			= $arraidc[0]['SimilarityOfCustomerName'];*/
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
		$this->m_entryp3->upd_admin_app($idp,$status_final,$light,$duplicate_value_name,$duplicate_value_phone,$duplicate_stat);
	
		
		redirect('entryp/Entryp/reg_admin');
		
	}
	//


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
	
	 function getProspectn(){
	 	var_dump($_GET); exit;
			$this->load->model('m_entryp3');
			if (isset($_GET['term'])){
			$q = strtolower($_GET['term']);
			var_dump($q );exit;
			$this->m_entryp3->show_prospectn($q);
			}	 
	  }

	public function history()
	{	
		$data['module_title']  = 'Historical Process';
		$data['head'] = $this->load->view('templatemodule/head_panel',$data);
		$data['side_menu'] = $this->load->view('templatemodule/side_menu',$data,TRUE);
		//DROPDOWN PROVINCE
		$data['provinsi']=$this->m_entryp3->provinsi();
		
		$data['allData'] = $this->m_entryp3->dataep_r();
		$data['allDataW'] = $this->m_entryp3->dataep_rw();
		$this->load->view('v_entryp_h',$data);
	}


	public function h_detail($id){
		//$data['buku'] = $this->buku_m->getBuku($id);
		$data['module_title']  = 'Regular';
		$data['head'] = $this->load->view('templatemodule/head_panel',$data);
		$data['side_menu'] = $this->load->view('templatemodule/side_menu',$data,TRUE);
		
		//DROPDOWN PROVINCE
		$data['provinsi']=$this->m_entryp3->provinsi();

		//DROPDOWN PROMO
		$data['promotion'] = $this->m_entryp3->promotion();
		
		//DROPDOWN PRODUCT
		$data['produk'] = $this->m_entryp3->product();
		$data['admin_reject'] = $this->m_entryp3->admin_reject();
		$data['admin_approve'] = $this->m_entryp3->admin_approve();

		//$data['allData'] = $this->m_entryp3->getAllData();
		$data['ep_dtd'] = $this->m_entryp3->getDataep($id);
		$this->load->view('v_entryp_hd',$data);

	}
 

	
    public function get_branch() {
        $query = $this->m_entryp3->get_allbranch(); //query model
 
        $branch       =  array();
        foreach ($query as $d) {
            $branch[]     = array(
                'nama' => $d->PROSPECT_NBR, //variabel yg dibawa ke id nama
                
            );
        }
        echo json_encode($kota);      //data array yang telah kota deklarasikan dibawa menggunakan json
    }

    

    public function Update_EP_BFP_DB(){
		$statusep			= $this->input->post('STATUSEP');
		/*$kondisi['PROSPECT_ID']  = $this->input->post('PROSPECT_ID');*/
		$prospectid 		= $this->input->post('PROSPECT_ID');		
		
		$processid 			= $this->input->post('PROCESSID');
		$noteadmin 			= $this->input->post('noteadmin');

		$json 					= file_get_contents("http://192.168.177.221/api-joget/v1/get_ActivityId/".$processid);
		$arrai					= json_decode($json, true);
		$activityid				= $arrai[0]['ActivityId'];

		$ch 					= curl_init("http://192.168.177.235:8080/jw/web/json/workflow/assignment/completeWithVariable/".$activityid."?var_status=DTH&j_username=ryan&j_password=12345");
		curl_setopt($ch, CURLOPT_POST,true);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_HEADER, 0);
		$data 					= curl_exec($ch);
		curl_close($ch);
		$this->m_entryp3->updateDataEP_BFP($statusep, $prospectid,$noteadmin);
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
		//$this->load->model("m_entryp3");
		$data['module_title']  = 'Modern Store';
		$data['head'] = $this->load->view('templatemodule/head_panel',$data);
		$data['side_menu'] = $this->load->view('templatemodule/side_menu',$data,TRUE);
		
		//DROPDOWN PROVINCE
		$data['provinsi']=$this->m_entryp3->provinsi();

		//DROPDOWN PROMO
		$data['promotion'] = $this->m_entryp3->promotion();
		
		//DROPDOWN PRODUCT
		$data['produk'] = $this->m_entryp3->product();

		$data['allData'] = $this->m_entryp3->getAllData();

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
		//$this->load->model("m_entryp3");
		$data['module_title']  = 'Door to Door-Bawa Barang';
		$data['head'] = $this->load->view('templatemodule/head_panel',$data);
		$data['side_menu'] = $this->load->view('templatemodule/side_menu',$data,TRUE);
		
		//DROPDOWN PROVINCE
		$data['provinsi']=$this->m_entryp3->provinsi();

		//DROPDOWN PROMO
		$data['promotion'] = $this->m_entryp3->promotion();
		
		//DROPDOWN PRODUCT
		$data['produk'] = $this->m_entryp3->product();

		$data['allData'] = $this->m_entryp3->getAllData();
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
		//$this->load->model("m_entryp3");
		$data['module_title']  = 'Credit Card';
		$data['head'] = $this->load->view('templatemodule/head_panel',$data);
		$data['side_menu'] = $this->load->view('templatemodule/side_menu',$data,TRUE);
		
		//DROPDOWN PROVINCE
		$data['provinsi']=$this->m_entryp3->provinsi();

		//DROPDOWN PROMO
		$data['promotion'] = $this->m_entryp3->promotion();
		
		//DROPDOWN PRODUCT
		$data['produk'] = $this->m_entryp3->product();

		$data['allData'] = $this->m_entryp3->getAllData();
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
		//$this->load->model("m_entryp3");
		$data['module_title']  = 'Dealer';
		$data['head'] = $this->load->view('templatemodule/head_panel',$data);
		$data['side_menu'] = $this->load->view('templatemodule/side_menu',$data,TRUE);
		
		//DROPDOWN PROVINCE
		$data['provinsi']=$this->m_entryp3->provinsi();

		//DROPDOWN PROMO
		$data['promotion'] = $this->m_entryp3->promotion();
		
		//DROPDOWN PRODUCT
		$data['produk'] = $this->m_entryp3->product();

		$data['allData'] = $this->m_entryp3->getAllData();
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
		//$this->load->model("m_entryp3");
		$data['module_title']  = 'Dealer Franchise';
		$data['head'] = $this->load->view('templatemodule/head_panel',$data);
		$data['side_menu'] = $this->load->view('templatemodule/side_menu',$data,TRUE);
		
		//DROPDOWN PROVINCE
		$data['provinsi']=$this->m_entryp3->provinsi();

		//DROPDOWN PROMO
		$data['promotion'] = $this->m_entryp3->promotion();
		
		//DROPDOWN PRODUCT
		$data['produk'] = $this->m_entryp3->product();

		$data['allData'] = $this->m_entryp3->getAllData();
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
		$data['provinsi']=$this->m_entryp3->provinsi();
		$data['allData'] = $this->m_entryp3->dataep_reg_dth();
		$this->load->view('v_entryp_c_r',$data);
	}
	
	//update dth reg
	public function updateEP_Reg_Dth($id){
		//$data['buku'] = $this->buku_m->getBuku($id);
		$data['module_title']  = 'DTH';
		$data['head'] = $this->load->view('templatemodule/head_panel',$data);
		$data['side_menu'] = $this->load->view('templatemodule/side_menu',$data,TRUE);
		
		$data['category_dth']=$this->m_entryp3->get_categorydth();
		//$data['subcategory_dth']=$this->m_entryp3->get_subcategorydth();
		//DROPDOWN PROVINCE
		$data['provinsi']=$this->m_entryp3->provinsi();

		//DROPDOWN PROMO
		$data['promotion'] = $this->m_entryp3->promotion();
		
		//DROPDOWN PRODUCT
		$data['produk'] = $this->m_entryp3->product();
		$data['disposisi'] = $this->m_entryp3->disposisi();

		//$data['allData'] = $this->m_entryp3->getAllData();
		$data['ep_dtd'] = $this->m_entryp3->getDataep($id);
		$this->load->view('v_entryp_reg_dth_u',$data);

	}
	public function updateEP_Reg_Dth_db(){
		$statusep			= $this->input->post('STATUSEP');
		/*$kondisi['PROSPECT_ID']  = $this->input->post('PROSPECT_ID');*/
		$prospectid 		= $this->input->post('PROSPECT_ID');		
		
		$processid 			= $this->input->post('PROCESSID');
		$dthnote 			= $this->input->post('dthnote');
		

		$json 					= file_get_contents("http://192.168.177.221/api-joget/v1/get_ActivityId/".$processid);
		$arrai					= json_decode($json, true);
		$activityid				= $arrai[0]['ActivityId'];

		$ch 					= curl_init("http://192.168.177.235:8080/jw/web/json/workflow/assignment/completeWithVariable/".$activityid."?var_status=".$statusep."&j_username=atasan&j_password=12345");
		curl_setopt($ch, CURLOPT_POST,true);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_HEADER, 0);
		$data 					= curl_exec($ch);
		curl_close($ch);
		$this->m_entryp3->updateDataEP_Reg_dth($statusep, $prospectid,$dthnote);
		redirect('entryp/Entryp/reg_admin');
		
	}




	//REGULAR
	public function updateEP_DTD($id){
		//$data['buku'] = $this->buku_m->getBuku($id);
		$prospectid 		= $id;	
		$this->m_entryp3->log_admin($prospectid);



		$data['module_title']  = 'Regular';
		$data['head'] = $this->load->view('templatemodule/head_panel',$data);
		$data['side_menu'] = $this->load->view('templatemodule/side_menu',$data,TRUE);
		
		//DROPDOWN PROVINCE
		$data['provinsi']=$this->m_entryp3->provinsi();

		//DROPDOWN PROMO
		$data['promotion'] = $this->m_entryp3->promotion();
		
		//DROPDOWN PRODUCT
		$data['produk'] = $this->m_entryp3->product();
		$data['admin_reject'] = $this->m_entryp3->admin_reject();
		$data['admin_approve'] = $this->m_entryp3->admin_approve();
		$data['admin_pending'] = $this->m_entryp3->admin_pending();
		$data['light_verification'] = $this->m_entryp3->get_light_verification();
		$data['master_field'] = $this->m_entryp3->master_field();

		//$data['allData'] = $this->m_entryp3->getAllData();
		$data['ep_dtd'] = $this->m_entryp3->getDataep($id);
		$this->load->view('v_entryp_u',$data);

	}

	public function bfp($id){
		//$data['buku'] = $this->buku_m->getBuku($id);
		$data['module_title']  = 'Regular';
		$data['head'] = $this->load->view('templatemodule/head_panel',$data);
		$data['side_menu'] = $this->load->view('templatemodule/side_menu',$data,TRUE);
		
		//DROPDOWN PROVINCE
		$data['provinsi']=$this->m_entryp3->provinsi();

		//DROPDOWN PROMO
		$data['promotion'] = $this->m_entryp3->promotion();
		
		//DROPDOWN PRODUCT
		$data['produk'] = $this->m_entryp3->product();
		$data['admin_reject'] = $this->m_entryp3->admin_reject();
		$data['admin_approve'] = $this->m_entryp3->admin_approve();

		//$data['allData'] = $this->m_entryp3->getAllData();
		$data['ep_dtd'] = $this->m_entryp3->getDataep($id);
		$data['ep_dtd_btp'] = $this->m_entryp3->getDatabtp($id);
		$data['ep_dtd_btpe'] = $this->m_entryp3->getDatabtpe($id);

		$this->load->view('v_entryp_bfp',$data);

	}

	public function Update_EP_DTD_DB(){

		
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

		if ($Type1=='R' or $Type2=='R' or $Type3=='R' or $Type4=='R' ){
			$statusep			= 'Rejected';
		}else if($Type1=='A' and $Type2=='A' and $Type3=='A' and $Type4=='A' ){
			$statusep			= 'Approve1';
		}else{
			$statusep			= 'Pending';
		}
		//$statusep			= $this->input->post('STATUSEP');
		/*$kondisi['PROSPECT_ID']  = $this->input->post('PROSPECT_ID');*/
		$prospectid 		= $this->input->post('PROSPECT_ID');		
		$processid 			= $this->input->post('PROCESSID');

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

		$jsonduplicate 				= file_get_contents("http://192.168.179.11/webapi_icc_valsys/api/customer/DuplicationCheckCustomer/manyparams/".$fname."/".$middlen."/".$sname."/".$homep."/".$workp."/".$reference."/".$reference."/".$reference."");
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

		$this->m_entryp3->updateDataEP_DTD($statusep,$prospectid,$actid,$duplicate_value_name,$duplicate_value_phone,$duplicate_stat,$light,$Type1,$Type2,$Type3,$Type4,$Approve1,$Approve2,$Approve3,$Approve4,$Reject1,$Reject2,$Reject3,$Reject4);
		/*$this->m_entryp3->updateDataEP_DTD_INSERT($prospectid,$Type1,$Type2,$Type3,$Type4,$Approve1,$Approve2,$Approve3,$Approve4,$Reject1,$Reject2,$Reject3,$Reject4);*/
		redirect('entryp/Entryp/reg_admin');
		
	}


	//Regular Admin
	public function reg_admin()
	{	
		$data['module_title']  = 'Approval Admin';
		$data['head'] = $this->load->view('templatemodule/head_panel',$data);
		$data['side_menu'] = $this->load->view('templatemodule/side_menu',$data,TRUE);
		//DROPDOWN PROVINCE
		$data['provinsi']=$this->m_entryp3->provinsi();
		
		$data['allData'] = $this->m_entryp3->dataep_r();
		$data['allDataW'] = $this->m_entryp3->dataep_rw();
		$this->load->view('v_entryp_r',$data);
	}
	public function modern_store()
	{	
		$data['module_title']  = 'Regular';
		$data['head'] = $this->load->view('templatemodule/head_panel',$data);
		$data['side_menu'] = $this->load->view('templatemodule/side_menu',$data,TRUE);
		//DROPDOWN PROVINCE
		$data['provinsi']=$this->m_entryp3->provinsi();
		
		$data['allData'] = $this->m_entryp3->dataep_r();
		$data['allDataW'] = $this->m_entryp3->dataep_rw();
		$this->load->view('v_entryp_r',$data);
	}
	public function reg()
	{	
		
		$data['module_title']  = 'REG';
		$data['head'] = $this->load->view('templatemodule/head_panel',$data);
		$data['side_menu'] = $this->load->view('templatemodule/side_menu',$data,TRUE);
		//DROPDOWN PROVINCE
		$data['provinsi']=$this->m_entryp3->provinsi();
		
		$data['allData'] = $this->m_entryp3->getAllData();
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
		$data['provinsi']=$this->m_entryp3->provinsi();
		
		$data['allData'] = $this->m_entryp3->getAllData();
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
		//$identity_name="";
		$_POST 					= json_decode(file_get_contents('php://input'), true);
		//$prospect_nbr  		= $_POST['PN'];
		/*var_dump($prospect_nbr);
		exit;*/
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
//convert date of birth
		$date_of_birt 			= strtoupper(trim($_POST['DATE_OF_BIRTH']));
		$date_of_birth 			= substr($date_of_birt, 3,3);
		if($date_of_birth == 'JAN'){
			$mon = '01';
		}else if($date_of_birth == 'FEB'){
			$mon = '02';
		}else if($date_of_birth == 'MAR'){
			$mon = '03';
		}else if($date_of_birth == 'APR'){
			$mon = '04';
		}else if($date_of_birth == 'MAY'){
			$mon = '05';
		}else if($date_of_birth == 'JUN'){
			$mon = '06';
		}else if($date_of_birth == 'JUL'){
			$mon = '07';
		}else if($date_of_birth == 'AUG'){
			$mon = '08';
		}else if($date_of_birth == 'SEP'){
			$mon = '09';
		}else if($date_of_birth == 'OCT'){
			$mon = '10';
		}else if($date_of_birth == 'NOV'){
			$mon = '11';
		}else if($date_of_birth == 'DEC'){
			$mon = '12';
		}
		$day 		= substr($date_of_birt, 0,2);
		$year 		= substr($date_of_birt, 7,4);
		$fulldate	= $day."/".$mon."/".$year; //date of birth
//!!!!!!!!!!!!!!!!!!!!!!!!!!!
		$pln_id					= strtoupper(trim($_POST['PLN_ID']));
		$home_phone 			= trim($_POST['HOME_PHONE']);
		$mobile_phone 			= trim($_POST['MOBILE_PHONE']);
//convert expired date
		$ex 					= strtoupper(trim($_POST['expireddate']));
		$expired 				= substr($ex, 3,3);
		if($expired == 'JAN'){
			$monex = '01';
		}else if($expired == 'FEB'){
			$monex = '02';
		}else if($expired == 'MAR'){
			$monex = '03';
		}else if($expired == 'APR'){
			$monex = '04';
		}else if($expired == 'MAY'){
			$monex = '05';
		}else if($expired == 'JUN'){
			$monex = '06';
		}else if($expired == 'JUL'){
			$monex = '07';
		}else if($expired == 'AUG'){
			$monex = '08';
		}else if($expired == 'SEP'){
			$monex = '09';
		}else if($expired == 'OCT'){
			$monex = '10';
		}else if($expired == 'NOV'){
			$monex = '11';
		}else if($expired == 'DEC'){
			$monex = '12';
		}
		$dayex 				= substr($ex, 0,2);
		$yearex				= substr($ex, 7,4);
		$fullexpireddate	= $dayex."/".$monex."/".$yearex; //date of birth
//!!!!!!!!!!!!!!!!!!!!!!!!!!!
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
		$sales_nik				= strtoupper(trim($_POST['sales_nik']));
		$sales_name				= strtoupper(trim($_POST['sales_name']));
		$sales_differentcauses	= strtoupper(trim($_POST['sales_differentcauses']));
		$sales_officebranch		= strtoupper(trim($_POST['sales_officebranch']));
		$sales_namebranchhead	= strtoupper(trim($_POST['sales_namebranchhead']));
		//MS
		$ENTITYCODE 			= strtoupper(trim($_POST['ENTITYCODE']));
		$POS 					= strtoupper(trim($_POST['POS']));
		$STOREAREA 				= strtoupper(trim($_POST['STOREAREA']));
		//!!!
		//1st payment
		$payment_method			= strtoupper(trim($_POST['PAYMENT_TYPE']));
		$card_type				= strtoupper(trim($_POST['CARD_TYPE']));
		$card_number			= strtoupper(trim($_POST['NO_CC']));
		$name_akun				= strtoupper(trim($_POST['ACCOUNT_NAME']));
		$bankaccount_number		= strtoupper(trim($_POST['BANK_ACCOUNT_NO']));
		$bank_name				= strtoupper(trim($_POST['BANK_NAME']));
		$expired_date			= strtoupper(trim($_POST['EXP_DATE']));
		$payment_date			= strtoupper(trim($_POST['PAYMENT_DATE']));
		$amount					= strtoupper(trim($_POST['AMOUNT']));
		//package
		$brand					= strtoupper(trim($_POST['BRAND']));
		$status_package			= strtoupper(trim($_POST['STATUS_PACKAGE']));
		$promo					= strtoupper(trim($_POST['AVAILABLE_PROMO']));
		$basic					= strtoupper(trim($_POST['BASIC']));
		$alacarte				= strtoupper(trim($_POST['ALACARTE']));
		//estimated cost
		$cost_installation		= strtoupper(trim($_POST['INSTALLATION_COST']));
		$cost_package			= strtoupper(trim($_POST['COST_PACKAGE']));
		$alacarte_cost			= strtoupper(trim($_POST['ALACARTE_COST']));
		$promo_cost				= strtoupper(trim($_POST['PROMO_COST']));
		$total_cost				= strtoupper(trim($_POST['TOTAL_COST']));
		//!!!!!!!!!!!!!
		//pickup
		$ktp_ket				= strtoupper(trim($_POST['KET_KTP']));
		$cc_ket					= strtoupper(trim($_POST['KET_CC']));
		$dana_ket				= strtoupper(trim($_POST['KET_DANA']));
		$kuasa_ket				= strtoupper(trim($_POST['KET_KUASA']));
		$ttd_ket				= strtoupper(trim($_POST['KET_TTD']));
		$pernyataan_ket			= strtoupper(trim($_POST['KET_PERNYATAAN']));
		//!!!!!!!!!!!!!

		

		




		


		//$identity_name 			= strtoupper(trim($this->input->post('IDENTITY_NAME')));

		//membagi string identity_name menjadi 3 (first_name,middle_name, last_name)
		//==========================================================================
		/*$coba =  explode(" ",$identity_name);
		$val = array_values($coba);
		$length = count($coba);
		
			$first_name = strtoupper($val[0]);
			$temp = $length-2;
			
			if($temp>=1)
			{
				$middle_name = "";
				for($i=1; $i<=$temp; $i++)
				{
					$middle_name = strtoupper($middle_name.$val[$i]." ");
				}
				//echo "middle name : ".trim($middle_name)."<br>";
			}
			$last_name = strtoupper($val[$length-1]);*/

		//============================================================================
		
		/*$first_name 			= strtoupper(trim($this->input->post('first_name')));*/
		/*$confirmationp 			= strtoupper(trim($this->input->post('CONFIRMATIONP')));
		$coba2 = explode(" ",$confirmationp);
		$tgl	= $coba2[0];
		$time	= $coba2[1];
		$tgl2	= $coba2[3];
		
		$datetime_start = $tgl." ".$time;
*/


		//$fulldate	= $day;

		/*$date_of_birt 			= strtotime($date_of_b);
		$date_of_birth 			= getDate($date_of_birt);*/


		/*$street 				= strtoupper(trim($this->input->post('STREET')));
		$province 				= strtoupper(trim($this->input->post('provinsi')));
		$city 					= strtoupper(trim($this->input->post('kota')));
		$district 				= strtoupper(trim($this->input->post('kecamatan')));
		$sub_district			= strtoupper(trim($this->input->post('kelurahan')));
		$zip_code 				= strtoupper(trim($this->input->post('ZIPCODE')));*/
		$order_date 			= strtoupper(trim($this->input->post('ORDER_DATE')));
		$payment_method			= strtoupper(trim($this->input->post('PAYMENT_METHOD')));
		
		//$pnumber					= strtoupper(trim($this->input->post('PN')));
		//$occupation				= strtoupper(trim($this->input->post('OCCUPATION')));
		//$ch 					= curl_init("http://192.168.177.235:8080/jw/web/json/workflow/process/start/valsys:4:processApprovalValsys?j_username=mmarkham@indovision.tv&j_password=12345");
		
		$ch 					= curl_init("http://192.168.177.235:8080/jw/web/json/workflow/process/start/valsys:8:processApprovalValsys?j_username=codot&j_password=12345");
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


// receive server response ...
		curl_setopt($chh, CURLOPT_RETURNTRANSFER, true);
		$server_output = curl_exec ($chh);
		curl_close ($chh);

		/*$pn 					= curl_init("http://192.168.177.221/api-joget/v1/storeEP?id=".$processid."&prospect_nbr=".$pnumber);
		curl_setopt($pn, CURLOPT_POST,true);
		curl_setopt($pn, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($pn, CURLOPT_HEADER, 0);
		$data 					= curl_exec($pn);
		curl_close($pn);*/
		/*$http({
    		method: 'POST',
    		url: 'http://192.168.177.221/api-joget/v1/storeEP',
    headers: {'Content-Type': 'application/x-www-form-urlencoded'},
    transformRequest: function(obj) {
        var str = [];
        for(var p in obj)
        str.push(encodeURIComponent(p) + "=" + encodeURIComponent(obj[p]));
        return str.join("&");
    },
    data: {id: $scope.userName, prospect_nbr: $scope.password}
		}).success(function () {});*/
		/*$param = array(
            'id' => $processid, // works fine here
            'prospect_nbr' => $this->input->post('PN')
            );
		$user = $this->rest->post('http://192.168.177.221/api-joget/v1/storeEP', $param, 'application/x-www-form-urlencoded');*/

		/*$userfile				=  pathinfo($_FILES['filename']['name']);
		$fileName 				= $userfile['basename'];
		$fileName="asfafs";

		$full_file_path 		= base_url()."entryp/uploads/".$fileName;

		
		$image_path = realpath(APPPATH . '../application/modules/entryp/uploads');
	
		$config['upload_path'] = $image_path;
        $config['allowed_types'] = 'txt|pdf|gif|jpg|png|jpeg|bmp';
        $config['max_size']    = '1000';*/

        //load upload class library
       /* $this->load->library('upload', $config);

        if (!$this->upload->do_upload('filename'))
        {
            // case - failure
            $upload_error = array('error' => $this->upload->display_errors());
            //$this->load->view('upload_file_view', $upload_error);
            echo '<script>alert("Please check typefile");</script>';
           // redirect('entryp');
        }
        else
        {
            // case - success
            $upload_data = $this->upload->data();
            //$data['success_msg'] = '<div class="alert alert-success text-center">Your file <strong>' . $upload_data['file_name'] . '</strong> was successfully uploaded!</div>';
            //$this->load->view('upload_file_view', $data);
        }*/

		/*$baseURL = base_url()."entryp/upload/";*/
		/*var_dump(base_url());
		exit;*/

		/*move_uploaded_file($_FILES["file"]["tmp_name"], $baseURL."/".$_FILES["userfile"]["name"]);

		$target_path = $_SERVER['DOCUMENT_ROOT'] . "/uploads/" . basename($_FILES['uploadedFile']['name']);*/

		/*$tmp_name = $_FILES["userfile"]["tmp_name"];
		var_dump($tmp_name);
		exit;*/
		//move_uploaded_file($tmp_name, $baseURL);
		/*var_dump($full_file_path);
		exit;	*/	

		/*var_dump($fulldate);
		exit;*/
		/*$duplicate_value	= 70;
		if ($duplicate_value <=80){
			$duplicate_stat	= 'NO';

		}else if ($duplicate_value >80 ){
			$duplicate_stat	= 'YES';
		}*/
		$full_file_path = "qw";
		$execute		= $this->m_entryp3->DTDaddDataProspect($sales_channel,$prospect_nbr,$prospect_type,$hardware_status,$sgs_number,$sgs_name,$id_type,$id_number,$first_name,$middle_name,$last_name,$gender,$religion,$place_birth,$fulldate,$pln_id,$home_phone,$mobile_phone,$fullexpireddate,$email,$house_type,$house_status,$occupation,$income,$address_idcard,$province_idcard,$city_idcard,$district_idcard,$subdistrict_idcard,$zipcode_idcard,$address_installation,$direction_installation,$province_installation,$city_installation,$district_installation,$subdistrict_installation,$zipcode_installation,$address_billing,$province_billing,$city_billing,$district_billing,$subdistrict_billing,$zipcode_billing,$emergency_name,$emergency_sibling,$emergency_phone,$emergency_address,$sales_nik,$sales_name,$sales_differentcauses,$sales_officebranch,$ENTITYCODE,$POS,$STOREAREA,$order_date,$payment_method,$full_file_path,$processid,$activityid);
		//return  json_encode($execute);
		redirect('entryp/Entryp');




		
//$nmfile = "file_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
        /*$config['upload_path'] = '.entryp/upload/'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
        $config['max_size'] = '2048'; //maksimum besar file 2M
        $config['max_width']  = '1288'; //lebar maksimum 1288 px
        $config['max_height']  = '768'; //tinggi maksimu 768 px
        //$config['file_name'] = $nmfile; //nama yang terupload nantinya
 		$this->load->library('upload');
        $this->upload->initialize($config);
         
        
            if ($this->upload->do_upload('userfile'))
            {
                 $data = array('TITLE' => $this->upload->data());
 
                $this->m_entryp3->DTDaddDataProspect($prospect_type,$prospect_nbr,$first_name,$home_phone,$mobile_phone,$email,$religion,$hardware_status,$id_number,$gender,$date_of_birth,$street,$province,$city,$district,$sub_district,$zip_code,$order_date,$payment_method, $data);
			
			redirect('entryp');
            }else{
                
               $this->m_entryp3->DTDaddDataProspect($prospect_type,$prospect_nbr,$first_name,$home_phone,$mobile_phone,$email,$religion,$hardware_status,$id_number,$gender,$date_of_birth,$street,$province,$city,$district,$sub_district,$zip_code,$order_date,$payment_method, $data);
               redirect('entryp');
            }*/
       
    





		




			
	/*	$prospect = array(
			
			'PROSPECT_TYPE'	=> $this->input->post('PROSPECT_TYPE'),
			'PROSPECT_NBR'	=> $this->input->post('PROSPECT_TYPE'),
			'FIRST_NAME'	=> $this->input->post('FIRST_NAME'),
			'HOME_PHONE'	=> $this->input->post('HOME_PHONE'),
			'MOBILE_PHONE'	=> $this->input->post('MOBILE_PHONE'),
			'EMAIL'			=> $this->input->post('EMAIL')
			);

		$address = array(			
			'STREET' 		=> $this->input->post('STREET'),
			'PROVINCE'		=> $this->input->post('PROVINCE'),
			'CITY'			=> $this->input->post('CITY'),
			'DISRTICT'		=> $this->input->post('DISTRICT')

			);



			

		$contract = array(
			'STATUS_HW'		=> $this->input->post('STATUS_HW')

			);
		$additional = array(
			'ID_NUMBER'		=> $this->input->post('ID_NUMBER'),
			'GENDER'		=> $this->input->post('GENDER'),
			'RELIGION'		=> $this->input->post('RELIGION'),
			'PLACE_OF_BRITH'
			'DATE_OF_BIRTH'	=> $this->input->post('DATE_OF_BIRTH'),
			'TYPE_OF_WORK'	=> $this->input->post('TYPE_OF_WORK')

			);
*/
		/*$data1 = array(
			'NOTES_PROSPECT_ID' 	=> $this->input->post('PROSPECT_NBR'),
			'PROSPECT_ID' 			=> $this->input->post('PROSPECT_NBR'));*/
		
			/*'SUB_DISTRICT'	*/
			/*'ZIPCODE'*/
			/*'EXPIRED_DATE'*/
			/*'INSTALLATION_DATE'*/
			/*'INSTALLATION_TIME'
			'CONFIRMATION_DATE_START'
			'CONFIRMATION_TIME_START'
			'CONFIRMATION_DATE_END'
			'CONFIRMATION_TIME_END'*/
			
		
		/*$this->m_entryp3->DTDaddDataProspect($prospect,$address,$contract,$additional);*/
		/*$this->m_entryp3->DTDaddDataNotesP($data1);*/
/*		$this->m_entryp3->DTDaddDataAddress($data2);*/

		
		/*redirect('entryp');*/
		
		
	}
	/*public function DTDaddData(){
		
		$data2 = array(			
			'STREET' 			=> $this->input->post('STREET'));
		$data = array(
			'PROSPECT_ID' 	=> $this->input->post('PROSPECT_NBR'),
			'TITLE' 		=> $this->input->post('PROSPECT_NBR'),
			'PROSPECT_NBR' 	=> $this->input->post('PROSPECT_NBR'));
		$data1 = array(
			'NOTES_PROSPECT_ID' 	=> $this->input->post('PROSPECT_NBR'),
			'PROSPECT_ID' 			=> $this->input->post('PROSPECT_NBR'));		
		
		$this->m_entryp3->DTDaddDataAddress($data2);
		$this->m_entryp3->DTDaddDataProspect($data);
		$this->m_entryp3->DTDaddDataNotesP($data1);
		redirect('Entryp');
		
	}*/


//EndofDTD
	

	public function angular_OperationalEntityView()
	{   
	   $data = $this->db->get('OPERATIONAL_ENTITY_VW')->result();
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
	   echo json_encode($arr_data);
	}
	
	

	public function angular_EmployeeView()
	{  

	   	$sales_code_search = $this->input->get('param1');
	   	$sales_name_search = $this->input->get('param2');

	   	if($sales_code_search != null) 
		{
			//$this->db->like('employee_code', $sales_code_search);
			//$data = $this->db->like('MASTER_EMPLOYEE_TBL')->result();
			//$data =  $this->db->get_where('MASTER_EMPLOYEE_TBL', array('employee_code' => $sales_code_search),'like %$sales_code_search%')->result();
			
			//$array = array('employee_code' => $sales_code_search);
			//$query =$this->db->select('*')->from('MASTER_EMPLOYEE_TBL')->where("employee_code LIKE '%$sales_code_search%'")->get();	

			$this->db->select('*');
			$this->db->like('employee_code',$sales_code_search);
			$query=$this->db->get("MASTER_EMPLOYEE_TBL");
			$result=$query->result_array();
			/*
			$array_data = array();
		   	$i=0;
			
		   	foreach($query as $r){
			   	$array_data[$i]['employee_id']=$r->employee_id;
			    $array_data[$i]['employee_code']=$r->employee_code;
			    $array_data[$i]['first_name']=$r->first_name;
			    $i++;
		   }*/
		   
		   
		   	

		}/*
		else if($sales_name_search != null) 
		{
			//$data = $this->db->select('*')->from('master_employee_tbl')->where("employee_code LIKE '%$sales_code_search%'")->get();
			$this->db->select('*');
			$this->db->from('MASTER_EMPLOYEE_TBL');
			$this->db->like("employee_code","$sales_code_search");
			$query=$this->db->get();
			
			$array_data = array();
		   	$i=0;
			
		   	foreach($query as $r){
			   	$array_data[$i]['employee_id']=$r->employee_id;
			    $array_data[$i]['employee_code']=$r->employee_code;
			    $array_data[$i]['first_name']=$r->first_name;
			    $i++;
		   }

		}
		else  
		{
			//$data = $this->db->select('*')->from('master_employee_tbl')->where("employee_code LIKE '%$sales_code_search%'")->get();
			
			$this->db->select('*');
			$this->db->from('MASTER_EMPLOYEE_TBL');
			$this->db->like("employee_code","$sales_code_search");
			$query=$this->db->get();
			
			$array_data = array();
		   	$i=0;
		   	foreach($query as $r){
			   	$array_data[$i]['employee_id']=$r->employee_id;
			    $array_data[$i]['employee_code']=$r->employee_code;
			    $array_data[$i]['first_name']=$r->first_name;
			    $i++;
		   }

		}*/
	   //var_dump($result);
	   echo json_encode($result);
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

	public function angular_getPackageAlacarteData()
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
		

	}

	public function angular_getZipCodeViewData()
	{
	
		$subdistrict_search = $this->input->get('param1');
		$zipcode_search = $this->input->get('param2');

		

		if($zipcode_search != null) 
		{
			$data =  $this->db->get_where('MASTER_ZIPCODE', array('ZIPCODE' => $zipcode_search))->result();
			
			$array_data = array();
		   	$i=0;
		   	foreach($data as $r){
		    $array_data[$i]['ID_ZIPCODE']=$r->ID_ZIPCODE;
		    $array_data[$i]['SUB_DISTRICT']=$r->SUB_DISTRICT;
		    $array_data[$i]['DISTRICT']=$r->DISTRICT;
		    $array_data[$i]['CITY']=$r->CITY;
		    $array_data[$i]['PROVINCE']=$r->PROVINCE;
		    $array_data[$i]['ZIPCODE']=$r->ZIPCODE;
		    $i++;
		   }

		}
		else if($subdistrict_search != null) 
		{
			$data =  $this->db->get_where('MASTER_ZIPCODE', array('SUB_DISTRICT' => $subdistrict_search))->result();
			
			$array_data = array();
		   	$i=0;
		   	foreach($data as $r){
		    $array_data[$i]['ID_ZIPCODE']=$r->ID_ZIPCODE;
		    $array_data[$i]['SUB_DISTRICT']=$r->SUB_DISTRICT;
		    $array_data[$i]['DISTRICT']=$r->DISTRICT;
		    $array_data[$i]['CITY']=$r->CITY;
		    $array_data[$i]['PROVINCE']=$r->PROVINCE;
		    $array_data[$i]['ZIPCODE']=$r->ZIPCODE;
		    $i++;
		   }

		}
		else  
		{
			$data =  $this->db->get_where('MASTER_ZIPCODE', array('SUB_DISTRICT' => $subdistrict_search,'ZIPCODE' => $zipcode_search))->result();
			
			$array_data = array();
		   	$i=0;
		   	foreach($data as $r){
		    $array_data[$i]['ID_ZIPCODE']=$r->ID_ZIPCODE;
		    $array_data[$i]['SUB_DISTRICT']=$r->SUB_DISTRICT;
		    $array_data[$i]['DISTRICT']=$r->DISTRICT;
		    $array_data[$i]['CITY']=$r->CITY;
		    $array_data[$i]['PROVINCE']=$r->PROVINCE;
		    $array_data[$i]['ZIPCODE']=$r->ZIPCODE;
		    $i++;
		   }

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
		
		
		$data =  $this->db->get_where('MASTER_PROSPECT_UPLOAD', array('p_file_prospect_number' => $pnumb_values))->result();
		//$prospectNumber = $this->input->get('param1');
		
		

	   	$arr_data = array();
	   	$i=0;
	   foreach($data as $r){
	    $arr_data[$i]['p_file_name']=$r->p_file_name;
	    $arr_data[$i]['p_file_category']=$r->p_file_category;
	    //$arr_data[$i]['p_file_path']=$r->p_file_path;
	    $arr_data[$i]['p_file_path']=str_replace("/opt/lampp/htdocs/valsys/","",$r->p_file_path);
	    $arr_data[$i]['p_file_prospect_number']=$r->p_file_prospect_number;
	    $i++;
	   }
	   echo json_encode($arr_data);
	}

	public function angular_UploadData()
	{
		
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

        

        $mypath      = "/opt/lampp/htdocs/valsys/user_uploads/";
        $target_path = $mypath.$name;

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
    	$this->m_entryp3->SaveDataUploaded($prospect_nbr.'_'.$file_category.'_'.$name,$file_category,$type,$final_path,$prospect_nbr,$uploadedby);
	}

	//GET DROPDOWN SELECTED OPTION
	function ambil_data(){
		$modul=$this->input->post('modul');
		$id=$this->input->post('id');

		if($modul=="kota"){
		echo $this->m_entryp3->kota($id);
		
		}
		else if($modul=="kecamatan"){
		echo $this->m_entryp3->kecamatan($id);

		}
		else if($modul=="kelurahan"){
		echo $this->m_entryp3->kelurahan($id);
		}
		else if($modul=="alacarte")
		{
		echo $this->m_entryp3->alacarte($id);
		}
		else if($modul=="subc")
		{
		echo $this->m_entryp3->get_subcategorydth($id);
		}
	}

	function form_bedaalamat()
	{
			$this->pdf->load_view('v_bedaalamat');
			$this->pdf->render();
			$this->pdf->stream("name-file.pdf");
	}

	function getDataHW(){  
		$result  = $this->m_entryp3->getDataHW();		 
		return  json_encode($result);
	}
	
	 
	
	function getTemplate(){
		//$id 				= strtoupper(trim($this->input->post('id_combo')));
		$result  		= $this->m_entryp3->getTemplate();
		return  json_encode($result);
	}
	
	function getDataHW2(){  
		$id_combo 				= $this->input->post('id_combo'); 
		$result  					= $this->m_entryp3->getDataHW2($id_combo);	
		return  json_encode($result); 
	} 
		
	function getDataHW3(){ 
		$result  = $this->m_entryp3->getDataHW3();		 
		return  json_encode($result);
	}
	
	function getSearchHW(){ 
		$prospect_nbr 				= $this->input->post('prospect_nbr'); 
		$result  = $this->m_entryp3->getSearchHW($prospect_nbr);		 
		return  json_encode($result);
	}
	
	function SaveEntryHW(){
		$prospect_number	= trim($this->input->post('pnumber'));
		$item_id 					=  trim($this->input->post('item_id'));
		$serial_number 		=  trim($this->input->post('serial_number'));  
		$sales_code 			= trim($this->input->post('sales_code'));  
		$result						= $this->m_entryp3->SaveEntryHW($prospect_number,$item_id,$serial_number,$sales_code);

		return json_encode($result);
	}

	function checkHW(){ 
		$item_id 					=  trim($this->input->post('item_id'));
		$serial_number 		=  trim($this->input->post('serial_number'));  
		$sales_code 			= trim($this->input->post('sales_code'));  
		$result						= $this->m_entryp3->checkHW($item_id,$serial_number,$sales_code);
		return  json_encode($result);
	}
		
}
