<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class assign_menu extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	 
	public function __construct(){
	parent::__construct();
		$this->load->model('m_assign_menu','',TRUE);	
		$this->load->library(array('DX_Auth'));	
		}	
	
	
	public function index()
	{	
		if(!$this->dx_auth->is_logged_in())
		{
		  // Redirect to login page
		  $this->dx_auth->deny_access('login');
		} else {
			$userid    	= $this->dx_auth->get_user_id(); 
			$user_desc   = $this->dx_auth->get_user_desc();			
		} 

		$fhegi= $this->dx_auth->is_allow_ext('fhegi');
		//var_dump($fhegi);exit;
		$data['module_title']  = 'Validation System';
		$data['user_desc']  = $user_desc ;
		$data['head'] = $this->load->view('templatemodule/head_panel',$data);
		$data['side_menu'] = $this->load->view('templatemodule/side_menu',$data,TRUE); 
		$this->load->view('v_assign_menu',$data);
	}
	
	function create_tree(){
		$result = $this->m_assign_menu->create_role_tree();
		echo json_encode($result);
	}

	function list_modules(){
		$result = $this->m_assign_menu->list_modules();
		echo json_encode($result);
	}

	function remove_module(){
		$modid = (int)$this->input->post('m', true);
		if($this->m_assign_menu->remove_module($modid)){
			echo '{"success":"true"}';
		}else{
			echo '{"success":"false"}';
		}
	}
	
	function map_module(){
		$modid = (int)$this->input->post('m', true);
		$role = $this->input->post('r', true);
		$role	= explode('-',$role);
		$roleid	= $role[0];
		if($roleid==false){
			echo '{"success":"false"}';
		}else{
			if($this->m_assign_menu->map_module($modid, $roleid)){
				echo '{"success":"true"}';
			}else{
				echo '{"success":"false"}';
			}
		}
	}

	function orphant_folder(){
		$folder = $this->input->post('f', true);
		if($this->m_assign_menu->check_folder($folder)){
			$result = array("success" => false, "message" => "Folder already exists");
		}else{
			if($this->m_assign_menu->orphant_folder($folder)){
				$result = array("success" => true, "message" => "Folder has been added");
			}else{
				$result = array("success" => false, "message" => "Add folder failed");
			}
		}
		echo json_encode($result);
	}
	
	function create_folder(){
		$folder = $this->input->post('f', true);
		$parent = $this->input->post('p', true);
		
		if($this->m_assign_menu->check_folder($folder)){
			$result = array("success" => false, "message" => "Folder already exists");
		}else{
			if($this->m_assign_menu->create_folder($folder, $parent)){
				$result = array("success" => true, "message" => "Folder has been added");
			}else{
				$result = array("success" => false, "message" => "Add folder failed");
			}
		}
		echo json_encode($result);
	}
	
	function remove_folder(){
		$folder = $this->input->post('f', true);
 
		if($this->m_assign_menu->remove_folder($folder)){
			$result = array("success" => true, "message" => "Folder has been remove");
		}else{
			$result = array("success" => false, "message" => "Remove folder failed");
		}
		
		echo json_encode($result);
	}	
	
	function  get_ad() {
		$result  = $this->m_assign_menu->get_ad();
		
		echo json_encode($result);
	}
}
