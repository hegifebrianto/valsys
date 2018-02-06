<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class userconfig_group extends CI_Controller {

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
		$this->load->model('m_userconfig_group','',TRUE);	
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
/* 			if (!$this->dx_auth->is_access_allowed()) {
				 $this->dx_auth->deny_access('index');
			} */
		} 

		$data['module_title']  = 'Validation System';
		$data['user_desc']  = $user_desc ;
		$data['head'] = $this->load->view('templatemodule/head_panel',$data);
		$data['side_menu'] = $this->load->view('templatemodule/side_menu',$data,TRUE); 
		$this->load->view('v_userconfig_group',$data);
	}
	
	function create_tree(){
		$result = $this->m_userconfig_group->create_role_tree();
		echo json_encode($result);
	}
	
	function create_tree_group(){
		$uid = $this->input->get('user');
		//var_dump($uid);exit;
		$result = $this->m_userconfig_group->create_group_tree($uid);
		echo json_encode($result);
	}

	public function has_view_all(){
	    $group_id	= $this->input->post('group_id');
		$user_id 	= $this->m_userconfig_group->get_userid($this->input->post('usernm'));  
		$has_view 	= $this->input->post('has_view');
		$gid	 	= $this->input->post('gid');
		
		
		
		if($gid==9994){
			$group_module = $this->m_userconfig_group->check_role_module($group_id);
		}else{
			$group_module = $this->m_userconfig_group->check_group_module($group_id);
		}
		//var_dump($group_module);exit;
		//print_r($group_module);exit;
		foreach ($group_module as $module_id){
			if($gid==9994){
				$group_id	= 9994;
			}
			$check 	= $this->m_userconfig_group->check_privilage_module($user_id,$module_id['MODULE_ID'],$group_id);
			if($group_id==9994) $assign_type=1; else $assign_type='';
			$data 	= array('user_id' => $user_id,'module_id' => $module_id['MODULE_ID'],'has_view' => $has_view,'group_id' => $group_id,'assign_type' => $assign_type);
			
			if ($check->num_rows() > 0){	  
				$this->m_userconfig_group->update_module($has_view,$user_id,$module_id['MODULE_ID'],$group_id);
			}else{
				$this->m_userconfig_group->add_module($data,$user_id,$module_id['MODULE_ID'],$group_id);
		    }
		}
	}
	
	function list_modules(){
		$result = $this->m_userconfig_group->list_modules();
		echo json_encode($result);
	}

	function remove_module(){
		$modid = (int)$this->input->post('m', true);
		if($this->m_userconfig_group->remove_module($modid)){
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
			if($this->m_userconfig_group->map_module($modid, $roleid)){
				echo '{"success":"true"}';
			}else{
				echo '{"success":"false"}';
			}
		}
	}

	function orphant_folder(){
		$folder = $this->input->post('f', true);
		if($this->m_userconfig_group->check_folder($folder)){
			$result = array("success" => false, "message" => "Folder already exists");
		}else{
			if($this->m_userconfig_group->orphant_folder($folder)){
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
		
		if($this->m_userconfig_group->check_folder($folder)){
			$result = array("success" => false, "message" => "Folder already exists");
		}else{
			if($this->m_userconfig_group->create_folder($folder, $parent)){
				$result = array("success" => true, "message" => "Folder has been added");
			}else{
				$result = array("success" => false, "message" => "Add folder failed");
			}
		}
		echo json_encode($result);
	}
	
	function remove_folder(){
		$folder = $this->input->post('f', true);
 
		if($this->m_userconfig_group->remove_folder($folder)){
			$result = array("success" => true, "message" => "Folder has been remove");
		}else{
			$result = array("success" => false, "message" => "Remove folder failed");
		}
		
		echo json_encode($result);
	}	
	
	function  get_ad() {
		$result  = $this->m_userconfig_group->get_ad();
		
		echo json_encode($result);
	}
	
	function getData(){ 
		$result  = 	$this->m_userconfig_group->getDataa();  
		//var_dump($result);exit;
		return  json_encode($result);
	}
	
	function getDataParam(){ 
		$param = $this->input->post('username', true);
	//	var_dump($folder );exit;
		$result  = 	$this->m_userconfig_group->getDataParam($param);  
		//var_dump($result);exit;
		return  json_encode($result);
	}
	 
	function saveGroup(){
		$groupName 	= strtoupper(trim($this->input->post('group_name', true)));
		$desc 		= trim($this->input->post('descForm', true));
		$groupId 	= $this->input->post('groupIdForm', true);
		$brandId 	= $this->input->post('brandIdForm', true);
		$brandId	= str_replace('brand','',$brandId); 
		
		$userId    				= $this->dx_auth->get_user_id(); 
		
		$data		= array('GROUP_NAME' 	=> $groupName,
							'DESCRIPTION' 	=> $desc,
							'UPDATE_BY' 	=> $userId);
		
		if($groupId==''){
			//add group
			$result	= $this->m_userconfig_group->addGroup($data,$userId,$brandId);
		}else{
			//update group
			$result = $this->m_userconfig_group->updateGroup($data,$groupId);
		}
		
		echo json_encode($result);
	}
	
	  function getUsername(){
			$this->load->model('m_userconfig_group');
			if (isset($_GET['term'])){
			  $q = strtolower($_GET['term']);
			  $this->m_userconfig_group->getUsername($q);
			}	 
	  }
	 
}
