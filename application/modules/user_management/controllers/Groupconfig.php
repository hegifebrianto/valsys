<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class groupconfig extends CI_Controller {

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
		$this->load->model('m_groupconfig','',TRUE);	
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
		$this->load->view('v_groupconfig',$data);
	}
	
	function create_tree(){
		$result = $this->m_groupconfig->create_role_tree();
		echo json_encode($result);
	}
	
	function create_tree_group(){
		$result = $this->m_groupconfig->create_group_tree();
		echo json_encode($result);
	}

	function list_modules(){
		$result = $this->m_groupconfig->list_modules();
		echo json_encode($result);
	}

	function remove_module(){
		$node = $this->input->post('n', true);
		if($this->m_groupconfig->rem_module($node)){
			$result = array("success" => true);
		}else{ 
			$result = array("success" => false, "message" => "Remove module failed");
		}
		echo json_encode($result);
	}
	
	function move_module(){
		$parent = $this->input->post('p', true);
		$node = $this->input->post('n', true);
		
		if($this->m_groupconfig->move_module($parent, $node, $this->dx_auth->get_user_id())){
			$result = array("success" => true);
		}else{
			$result = array("success" => false, "message" => "Module already exists");
		}
		echo json_encode($result);
	}

	function orphant_folder(){
		$folder = $this->input->post('f', true);
		if($this->m_groupconfig->check_folder($folder)){
			$result = array("success" => false, "message" => "Folder already exists");
		}else{
			if($this->m_groupconfig->orphant_folder($folder)){
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
		
		if($this->m_groupconfig->check_folder($folder)){
			$result = array("success" => false, "message" => "Folder already exists");
		}else{
			if($this->m_groupconfig->create_folder($folder, $parent)){
				$result = array("success" => true, "message" => "Folder has been added");
			}else{
				$result = array("success" => false, "message" => "Add folder failed");
			}
		}
		echo json_encode($result);
	}
	
	function remove_folder(){
		$folder = $this->input->post('f', true);
 
		if($this->m_groupconfig->remove_folder($folder)){
			$result = array("success" => true, "message" => "Folder has been remove");
		}else{
			$result = array("success" => false, "message" => "Remove folder failed");
		}
		
		echo json_encode($result);
	}	
	
	function  get_ad() {
		$result  = $this->m_groupconfig->get_ad();
		
		echo json_encode($result);
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
			$result	= $this->m_groupconfig->addGroup($data,$userId,$brandId);
		}else{
			//update group
			$result = $this->m_groupconfig->updateGroup($data,$groupId);
		}
		
		echo json_encode($result);
	}
	
	
	function delGroup(){
		$groupId 	= $this->input->post('groupid', true);
		$result		= $this->m_groupconfig->delGroup($groupId);
		echo json_encode($result);
	}
	
	 
	 function role_data(){
	    $module       = $this->input->post('module_id');
		$mid          = explode('-',$module);
		$parent_id    = $this->input->post('parent_id');
		$data[] = array ();
		if  ($parent_id){ 
			// cek berdasarkan app_group_id dan module id
			$q_md = $this->m_groupconfig->get_ext_all_by_parent($parent_id,$mid[1]);
			
            if($q_md->num_rows() > 0){
			    /* jika sdh ada group id dan module id
                   tampilkan data yang sdh ada dan defaulnya
				*/ 	
                $q_bymodule2   =$this->m_groupconfig->get_ext_all_by_parent_module2($mid[1],$parent_id);
				if ($q_bymodule2->num_rows() > 0){
											//$result['status'] = 1;
					foreach ($q_bymodule2->result_array() as $value){					
						$data[] = array ( 	'text'       => $value['LABEL'],
											'param1' 	 => $value['PRV_DYN_PARAMS1'],
											'id'         => $value['ID'],
											'grup_id'    => $value['APP_GROUP_ID'],
											'user'    	 => $value['APP_USER_ID'],
											'expanded'   => true,
											'leaf'	     => true,	
											'check'      => $value['PRV_DYN_PARAMS2']								
										);
					};
				}else{
				    $q_bymodule   =$this->m_groupconfig->get_ext_all_by_parent_module($mid[1],$parent_id);
					foreach ($q_bymodule->result_array() as $value){					
						$data[] = array ( 'text'       => $value['LABEL'],
											'param1' => $value['PRV_DYN_PARAMS1'],
											  'id'         => $value['ID'],
											  'grup_id'    => $value['APP_GROUP_ID'],
											  'user'    => $value['APP_USER_ID'],
											  'expanded'   => true,
											  'leaf'	   => true,	
											  'check'      => $value['PRV_DYN_PARAMS2']								
										);
									
					};
				
				}
				echo json_encode( array ('children' => $data));  
 				
			}else{
			    $q_bymodule = $this->m_groupconfig->get_ext_all_by_module($mid[1]);	
				
				if ($q_bymodule->num_rows() > 0){
					
				    // jika sdh di set ambil default ext module berdasarkan module id masing-masing

					foreach ($q_bymodule->result_array() as $value){					
						$data[] = array ( 'text'       => $value['LABEL'],
											'param1' => $value['PRV_DYN_PARAMS1'],
										 'id'         => $value['ID'],
										  'grup_id'    => $value['APP_GROUP_ID'],
										  'user'       => $value['APP_USER_ID'],
										 'expanded'   => true,
										'leaf'	   => true,	
										 'check'      => $value['PRV_DYN_PARAMS2']								
									);
								
					};
					//$result = array('children' => $data);
					echo json_encode(array('children' => $data));
					//echo json_encode( array ('children' => $data));
				}else{
				    // jika blm diset maka tidak akan di tampilkan apa2
					echo json_encode(array('children' => null));
				}
			}
			
		}else{
		    // belum di set
			echo json_encode(array('children' => null));
		}
	
	}
	
	function save(){
	    $module       = $this->input->post('module_id');
		$parent_id    = $this->input->post('parent_id');
		$param_id     = $this->input->post('param_id');
		$chk          = $this->input->post('chk');
		$mid          = explode('-',$module);
		$text         = $this->input->post('text');
		$param1         = $this->input->post('param1');
		$grup_id      = $this->input->post('grup_id');
		$datains = array( 'module_id'       => $mid[1],
		               'app_group_id'    => $parent_id,
					   'prv_dyn_params1' => $param1,
					   'label' => $text,
                       'prv_dyn_params2' => $chk, 					   
		        );
		$datadel = array( 'module_id'       => $mid[1],
		               'app_group_id'    => $parent_id,
					   'prv_dyn_params1' => $param1,
					   'label' => $text
                );
				
			//	var_dump($datains);exit;
		// cek berdasar module dan grup and prv dyn1
		$q = $this->m_groupconfig->check_bymodule_parent($mid[1],$parent_id,$param1);	
	//	var_dump($q->num_rows() );exit;
		//var_dump($datains);exit;
		if ($q->num_rows() > 0){
			if (!empty($grup_id))
				$result = $this->m_groupconfig->update($datains,$param_id,$mid[1],$parent_id,$param1,$chk,$text);
			    //$this->m_modulegroup->delete($datadel,$param_id );  
				$result['status']=true;
				$result['msg']="Update Succesfully";

		}else{
			// tambah kan data baru berdasar module dan grup
			$result =  $this->m_groupconfig->add_default($datains,$mid[1],$parent_id,$param1,$text);   
			$result['status']=true;
			$result['msg']="Add Succesfully";
		} 
		echo json_encode($result);
		
	}
}
