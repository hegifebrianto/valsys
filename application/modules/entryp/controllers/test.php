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
		}
		//$FTDTD = $this->dx_auth->is_allow_ext('FTDTD');
		//$FTDTD = $this->dx_auth->is_allow_ext('FTDTD');
		//var_dump($FDTD);
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
		$data['produk'] = $this->m_entryp->product();
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