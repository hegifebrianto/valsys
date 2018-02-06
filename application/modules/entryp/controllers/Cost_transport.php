<?php
defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set('Asia/Jakarta');

class Cost_transport extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model("m_cost_transport");
		/*$this->load->helper(array('url'));*/
		$this->load->helper(array('form', 'url'));
	}

	public function index(){	
		$data['module_title']  = 'Cost Transport';
		$data['head'] = $this->load->view('templatemodule/head_panel',$data);
		$data['side_menu'] = $this->load->view('templatemodule/side_menu',$data,TRUE);		

		$this->load->view('v_cost_transport',$data);
	}
}
