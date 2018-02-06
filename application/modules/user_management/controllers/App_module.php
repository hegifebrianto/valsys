<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class app_module extends CI_Controller {

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
		$this->load->model('m_app_module','',TRUE);	
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
		$this->load->view('v_app_module',$data);
	}
	
	function getDepartement(){
		$result  = $this->m_app_module->getDepartement();
		return  json_encode($result);
	}
	
	function getPosition(){
		$result  = $this->m_app_module->getPosition();
		return  json_encode($result);
	}
	
	function getBranch(){
		$result  = $this->m_app_module->getBranch();
		return  json_encode($result);
	}
	
	function getData(){ 
	
		$result  = $this->m_app_module->getData();		 
		return  json_encode($result);
	}
	
	function getDataGroup(){ 
	
		$result  = $this->m_app_module->getDataGroup();		 
		return  json_encode($result);
	}
	
	function getDataRole(){ 
	
		$result  = $this->m_app_module->getDataRole();		 
		return  json_encode($result);
	}
	
	
	
/* 	function save(){
		
		$appname 				= trim($this->input->post('appname'));
		$controller 				=  trim($this->input->post('controller'));
		$check_active 			=  trim($this->input->post('check_active'));  
        $result 					= $this->m_app_module->save($appname,$controller,$check_active  ); 
		return  json_encode($result);
      
	}
	 */
	
	function save()
	
	{  
		$appname 				= trim($this->input->post('appname'));
		$controller 				=  trim($this->input->post('controller'));
		$check_active 		=  trim($this->input->post('check_active'));  
		$oper 					= trim($this->input->post('oper')); 
		$id       					= $this->input->post('module_id');
	
        $data =array ('MODULE_NAME'     => $appname,
					  'IS_ACTIVE'       => $check_active,
					  'ICONCLS'      	=> 'task',
					  'CONTROLLER'	    => $controller,					
				); 	

        if ($oper === 'add')
	    {
			if ($this->m_app_module->add_module($data))
			{
				$respone =  array( 'success'    => true, 
								   'errors'     => array( 'reason' => 'Add successfully.') 
						);				
				echo json_encode($respone);  
			}
        }
        else
        {
            if ($this->m_app_module->update_module($data,$id))
			{
				$respone =  array( 'success'    => true, 
								   'errors'     => array( 'reason' => 'Update successfully.') 
						);				
				echo json_encode($respone);  
			} 
        }  		
	   
	}
	
	function del_module(){
		
		$app_id 				= trim($this->input->post('col1')); 
        $result 					= $this->m_app_module->del_module($app_id); 
		return  json_encode($result);
      
	}
	
	function del_group()
	{
		$id 				= trim($this->input->post('appid')); 
        $result 					= $this->m_app_module->delete_group($id); 
		return  json_encode($result);
	}
	
	function del_role()
	{
		$id 						= trim($this->input->post('appid')); 
        $result 					= $this->m_app_module->del_role($id); 
		return  json_encode($result);
	}
	
	function delete_mod(){ 
		$appid 				= trim($this->input->post('appid')); 
        $result 					= $this->m_app_module->del_module($appid); 
		return  json_encode($result); 
	}
	
	function del_privileges()
	{
		$id 				= trim($this->input->post('id')); 
        $result 		= $this->m_app_module->del_privileges($id); 
		return  json_encode($result);
	}
		
	function add_privileges(){  
	   
		$module_id				= $this->input->post('mod_id');
		$prv_dyn_params1	= $this->input->post('parameter');
		$label					= $this->input->post('label');
		 
		$check_privileges	= $this->m_app_module->check_privileges($module_id,$prv_dyn_params1,$label);
		if ($check_privileges->num_rows() > 0){
			$respone =  array( 'success'    => false, 
							   'errors'     => array( 'reason' => 'Privileges already exist.')
						);				
			echo json_encode($respone);  
		}else{
            if ($this->m_app_module->add_privileges($module_id,$prv_dyn_params1,$label)){
				$respone =  array( 'success'    => true, 
								   'errors'     => array( 'reason' => 'Add privileges successfully.')
							);				
				echo json_encode($respone);  
			} 
        }  		
	}
	
	function add_group()	
	{  
	   
		$name         		= $this->input->post('group_name');
		$active       			= $this->input->post('active_group');
		$parent_group 	= $this->input->post('parent_group');
		$type         			= $this->input->post('type_group');
        $description  		= $this->input->post('desc_group'); 		
		$oper         			= $this->input->post('oper_group');
		$id           			= $this->input->post('group_id');
	
         $data =array ('GROUP_NAME'          => strtoupper($name),
					   'STATUS'              => $active,
					   'TYPE'                => $type,
					   'PARENT_GROUP'	     => $parent_group,
                       'DESCRIPTION' 	     => $description,
                       'PARENT_GROUP'	     => $parent_group,					   
				); 		
		
        if ($oper === 'add')
	    {
			if ($this->m_app_module->add_group($data))
			{ 
				$respone =  array( 'success'    => true, 
								   'errors'     => array( 'reason' => 'Add successfully.') 
						);				
				echo json_encode($respone);  
			} 
        }
        else
        {
            if ($this->m_app_module->update_group($data,$id))
			{
				$respone =  array( 'success'    => true, 
								   'errors'     => array( 'reason' => 'Update successfully.') 
						);				
				echo json_encode($respone);  
			}  
        }  		
	   
	}
	
	function add_role()
	{  
	   
		$name        	= $this->input->post('role_name');
		$active      	= $this->input->post('check_active_role');
		$has_parent  	= $this->input->post('check_parent_role');
        $parent_role 	= $this->input->post('parent_role');
        $description 	= $this->input->post('desc_role'); 		
		$oper        		= $this->input->post('oper_role');
		$id          		= $this->input->post('idrole');
	
        $data =array ('NAME'             => $name,
					  'STATUS'           => $active,
					  'HAS_PARENT_ROLE'  => $has_parent,
					  'PARENT_ROLE'	     => $parent_role,
                      'DESCRIPTION' 	 => $description				  
				); 	
		
        if ($oper === 'add')
	    {
			if ($this->m_app_module->add_role($data))
			{
				$respone =  array( 'success'    => true, 
								   'errors'     => array( 'reason' => 'Add successfully.')
						);				
				echo json_encode($respone);  
			}
        }
        else
        {
            if ($this->m_app_module->update_role($data,$id))
			{
				$respone =  array( 'success'    => true, 
								   'errors'     => array( 'reason' => 'Update successfully.')
						);				
				echo json_encode($respone);  
			} 
        }  
	}
	
	function combo_group(){
		$result  = $this->m_app_module->combo_group();
		return  json_encode($result);
	}
	
	function combo_type(){
		$result  = $this->m_app_module->combo_type();
		return  json_encode($result);
	}	
	
	function combo_parent(){
		$result  = $this->m_app_module->combo_parent();
		return  json_encode($result);
	}
	
	function privileges(){
		$module_id			= $this->input->post('col2');
		 	//$username 				= $this->input->post('username'); 
		$result  = $this->m_app_module->get_privileges_all($module_id);		 
		return  json_encode($result);   
	}
	
	 
	
	
	
	
	 
}
