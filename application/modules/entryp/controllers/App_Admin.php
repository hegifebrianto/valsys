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


public function updateEP_DTD($id){
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
		//$data['produk'] = $this->m_entryp->product();
		$data['admin_reject'] = $this->m_entryp->admin_reject();
		$data['admin_approve'] = $this->m_entryp->admin_approve();
		$data['admin_pending'] = $this->m_entryp->admin_pending();
		$data['light_verification'] = $this->m_entryp->get_light_verification();
		$data['master_field'] = $this->m_entryp->master_field();

		//$data['allData'] = $this->m_entryp->getAllData();
		$data['ep_dtd'] = $this->m_entryp->getDataep($id);
		$this->load->view('v_entryp_u',$data);

	}


function getDataHW(){  
		$result  = $this->m_entryp->getDataHW();		 
		return  json_encode($result);
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
	public function admin_app_rem(){
		$_POST 					= json_decode(file_get_contents('php://input'), true);
		$idp					= $_POST['idprospect'];
		$infod					= $_POST['informasid'];
		$status					= $_POST['status'];
		$reason					= $_POST['reason'];
		$this->m_entryp->rem_admin_app($idp, $infod,$status,$reason);
		
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
		$this->m_entryp->upd_admin_app($idp,$status_final,$light,$duplicate_value_name,$duplicate_value_phone,$duplicate_stat);
	
		
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
    	$this->m_entryp->SaveDataUploaded($prospect_nbr.'_'.$file_category.'_'.$name,$file_category,$type,$final_path,$prospect_nbr,$uploadedby);
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