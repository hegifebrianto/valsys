<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class create_user extends CI_Controller {

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
		$this->load->model('m_create_user','',TRUE);	
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

		$data['module_title']  = 'Validation System';
		$data['user_desc']  = $user_desc ;
		$data['head'] = $this->load->view('templatemodule/head_panel',$data);
		$data['side_menu'] = $this->load->view('templatemodule/side_menu',$data,TRUE); 
		$this->load->view('v_create_user',$data);
	}
	
	function getDepartement(){
		$result  = $this->m_create_user->getDepartement();
		return  json_encode($result);
	}
	
	function getPosition(){
		$result  = $this->m_create_user->getPosition();
		return  json_encode($result);
	}
	
	function getBranch(){
		$result  = $this->m_create_user->getBranch();
		return  json_encode($result);
	}
	
	function getSearch(){ 
	
		$username 				= $this->input->post('username'); 
		$result  = $this->m_create_user->getSearchUsername($username );		 
		return  json_encode($result);
	}
	
	
	function save(){
		
		$username 				= strtoupper(trim($this->input->post('name')));
		$fullname 				= strtoupper(trim($this->input->post('fullname')));
		$password 				= strtoupper(trim($this->input->post('password')));
		$email 						= strtoupper(trim($this->input->post('email')));
		$valid_from				= strtoupper(trim($this->input->post('valid_from')));
		$valid_to 				= strtoupper(trim($this->input->post('valid_to')));
		$branch 					= strtoupper(trim($this->input->post('branch')));
		$position 				= strtoupper(trim($this->input->post('position')));
		$dept 						= strtoupper(trim($this->input->post('dept')));
		$status_user 			= strtoupper(trim($this->input->post('status')));
		$lock_status			= strtoupper(trim($this->input->post('lock_status')));
		$nik 						= strtoupper(trim($this->input->post('nik')));
		$userid    	= $this->dx_auth->get_user_id(); 		
	//	var_dump($userid );exit;
		
        $insert 					= $this->m_create_user->save($username,$fullname,$password, $valid_from,$valid_to,$status_user,$email,$lock_status,$nik,$position ,$branch,$dept,$userid   );
		
		return  json_encode($insert);
      
	}
	
	
	function update(){
		$userid    				= $this->dx_auth->get_user_id(); 
		$username 				= strtoupper(trim($this->input->post('name')));
		$fullname 				= strtoupper(trim($this->input->post('fullname')));
		$password 				= trim($this->input->post('password'));
		$email 						= strtoupper(trim($this->input->post('email')));
		$valid_from				= strtoupper(trim($this->input->post('valid_from')));
		$valid_to 				= strtoupper(trim($this->input->post('valid_to')));
		$branch 					= strtoupper(trim($this->input->post('branch')));
		$position 				= strtoupper(trim($this->input->post('position')));
		$dept 						= strtoupper(trim($this->input->post('dept')));
		$status_user 			= strtoupper(trim($this->input->post('status')));
		$lock_status			= strtoupper(trim($this->input->post('lock_status')));
		$nik 						= strtoupper(trim($this->input->post('nik')));
		
		//$id							=  $this->m_create_user->get_id($username);
		
        $update 					= $this->m_create_user->update($username,$fullname,$password, $valid_from,$valid_to,$status_user,$email,$lock_status,$nik,$position ,$branch,$dept, $userid  );
		
		return  json_encode($update);
      
	}
}
