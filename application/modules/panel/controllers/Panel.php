<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Panel extends CI_Controller {

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
	function __construct()
	{
		parent::__construct();	
		$this->load->library(array('DX_Auth'));	
		$this->load->model("m_panel");
		//$this->load->library(array('DX_Auth','Log_Event','Extjs'));				
		//$this->load->model(array('m_menu','m_menu2','m_menu_test','m_get','m_help','m_privilege'));	
		//$this->load->model('panel/m_val_user');			
   }
   
	public function index()
	{	
		$data['user_desc']="";
		if(!$this->dx_auth->is_logged_in())
		{
		  // Redirect to login page
		  $this->dx_auth->deny_access('login');
		} else {
			$userid    	= $this->dx_auth->get_user_id(); 
			$user_desc   = $this->dx_auth->get_user_desc();	
			$data['user_desc']  = $user_desc;	
 		} 
		
		$data['module_title']  = 'Validation System';
		$data['head'] = $this->load->view('templatemodule/head_panel',$data);
		$data['side_menu'] = $this->load->view('templatemodule/side_menu',$data,TRUE);
		
		
		$this->load->view('v_panel',$data);
	}

	function list_menu(){
		$userid = $this->dx_auth->get_user_id(); 
		$result = $this->m_panel->list_menu($userid);
		
		$z=0;
		if ($result['status']==1) {
			$data = 	$result['data'];
			for($x=0;$x<count($data );$x++){
				$menu[$x]['MENU_ID'] = $data[$x]['ROLE_ID'];
				$menu[$x]['MENU_TYPE'] = 1;
				$menu[$x]['MENU_NAME'] = $data[$x]['MENU_NAME'];
				$menu[$x]['LEVEL_MENU'] = $data[$x]['LEVEL_MENU'];
				$menu[$x]['CONTROLLER'] = '';
				
				
				$z=$z+1;
				$result2 = $this->m_panel->list_module($menu[$x]['MENU_ID'],$userid);
				if ($result2['status']==1) {
					$menu[$x]['HAS_CHILDREN'] = $result2['status'];
					$data2 = 	$result2['data'];
					for($y=0;$y< count($result2['data']) ;$y++){
						$menu[$x]['CHILDREN'][$y]['MENU_ID'] = $data2[$y]['ROLE_ID'];
						$menu[$x]['CHILDREN'][$y]['MENU_TYPE'] = 2;
						$menu[$x]['CHILDREN'][$y]['MENU_NAME'] = $data2[$y]['MODULE_NAME'];
						$menu[$x]['CHILDREN'][$y]['LEVEL_MENU'] = $data2[$y]['LEVEL_MENU'];
						$menu[$x]['CHILDREN'][$y]['CONTROLLER'] =  $data2[$y]['CONTROLLER'];;					
						$z=$z+1;
					}
				} else {
					$menu[$x]['HAS_CHILDREN'] = $result2['status'];
				}
			}
		}
		echo json_encode($menu);
	}

	function list_module(){
		$role_id = (int)$this->input->post('roleid', true);
		$result = $this->m_panel->list_module($role_id);
		echo json_encode($result);
	}
	
}
