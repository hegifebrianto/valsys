<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_app_module extends CI_Model {

 var $table = 'APP_USER';
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
		$this->_tbl_modules = 'valsys_dev.APP_MODULES';
		$this->_tbl_role 		= 'APP_ROLE';
		$this->_tbl_group 	 = 'APP_GROUP';
		$this->_tbl_privleges = 'APP_PRIVILEGE_MODULE_EXT2';
	//	$this->load->library(array('DX_Auth'));	
	}
	 
	function _get_id($user){
		$query = $this->db->query("SELECT USER_ID FROM APP_USER WHERE USER_NAME='$user'");
		$result = $query->result_array();
		return $result[0]['USER_ID'];
	}
	
	function add_group($data) 
	{
		$this->db->insert($this->_tbl_group, $data);   
		return true;
	} 
	
	function update_group($data,$id)
	
	{
		$this->db->where('ID', $id);
        $this->db->update($this->_tbl_group, $data);   		
		return true;
	}
	 
	
	function add_module($data){
		$this->db->insert($this->_tbl_modules, $data);
		
		$this->db->select('MODULE_ID');
		$query 	= $this->db->get_where($this->_tbl_modules, $data);
		$result	= $query->row_array();
		
		/* insert for default(superuser & all module) group */
		$sql_allmodule	= "insert into APP_GROUP_TO_MENU(MODULE_ID,GROUP_ID,STATUS,CREATED_DATE) values(".$result['MODULE_ID'].",9994,1,now())";
		$sql_superuser	= "insert into APP_GROUP_TO_MENU(MODULE_ID,GROUP_ID,STATUS,CREATED_DATE) values(".$result['MODULE_ID'].",2,1,now())";
		$this->db->query($sql_allmodule);
		$this->db->query($sql_superuser);
		
		/* insert for exist user group superuser */
		$sql_user_super = "insert into APP_PRIVILEGE_MODULE(user_id,module_id,has_view,date_create,group_id) select distinct user_id,".$result['MODULE_ID'].",1,now(),2 from APP_PRIVILEGE_MODULE where group_id=2 and has_view=1";
		$sql_user_allmodule = "insert into APP_PRIVILEGE_MODULE(user_id,module_id,has_view,date_create,group_id) select distinct user_id,".$result['MODULE_ID'].",1,now(),9994 from APP_PRIVILEGE_MODULE where group_id=2 and has_view=1";
		$this->db->query($sql_user_super);
		$this->db->query($sql_user_allmodule);
		
		return true;
	}
	
		
	function update_module($data,$id)
	
	{
		$this->db->where('MODULE_ID', $id);
        $this->db->update($this->_tbl_modules, $data);   		
		return true;
	}
	
	function check_privileges($module_id,$prv_dyn_params1,$label){
		$this->db->where('MODULE_ID', $module_id);
		$this->db->where('PRV_DYN_PARAMS1', $prv_dyn_params1);
		$this->db->where('LABEL', $label);
		$this->db->where('APP_GROUP_ID', NULL);
		$this->db->where('APP_USER_ID', NULL);
		return $this->db->get('APP_PRIVILEGE_MODULE_EXT2');
	}
	
	function add_privileges($module_id,$prv_dyn_params1,$label){
		$sql ="insert into APP_PRIVILEGE_MODULE_EXT2
				  (module_id, prv_dyn_params1, prv_dyn_params2, label, date_create)
				values
				  ($module_id, '$prv_dyn_params1', 'false', '$label', NOW())";
		$sql_super ="insert into APP_PRIVILEGE_MODULE_EXT2
				  (module_id, prv_dyn_params1, prv_dyn_params2, label, date_create,app_group_id)
				values
				  ($module_id, '$prv_dyn_params1', 'true', '$label', NOW(),2)";
		$sql_allmodule ="insert into APP_PRIVILEGE_MODULE_EXT2
				  (module_id, prv_dyn_params1, prv_dyn_params2, label, date_create,app_group_id)
				values
				  ($module_id, '$prv_dyn_params1', 'false', '$label', NOW(),9994)";
		$this->db->query($sql);
		$this->db->query($sql_super);
		$this->db->query($sql_allmodule);
		
		/* insert for exist user group super */
		/* $sql_user_super = "insert into app_privilege_module_ext2(app_user_id,module_id,app_group_id,prv_dyn_params1,prv_dyn_params2,date_create,label) select distinct app_user_id,$module_id,2,'$prv_dyn_params1','true',sysdate,'$label' from app_privilege_module_ext2 where app_group_id=2 and app_user_id is not null"; */
		$sql_user_allmodule = "insert into APP_PRIVILEGE_MODULE_EXT2(app_user_id,module_id,app_group_id,prv_dyn_params1,prv_dyn_params2,date_create,label) select distinct user_id,$module_id,9994,'$prv_dyn_params1','true',now(),'$label' from APP_GROUP_TO_USER where group_id = 2";
		
		//$this->db->query($sql_user_super);
		$this->db->query($sql_user_allmodule);
		return true;
	}
	
	function delete_privileges($module_id,$prv_dyn_params1,$label){
		$this->db->where('MODULE_ID', $module_id);
		$this->db->where('PRV_DYN_PARAMS1', $prv_dyn_params1);
		$this->db->where('LABEL', $label);
        $this->db->delete('APP_PRIVILEGE_MODULE_EXT2');
		
		return true;
	}
	
	 
	
	public function combo_group()
    {
        $html = '';
        $sql="SELECT ID, GROUP_NAME FROM APP_GROUP WHERE STATUS = 1 ORDER BY GROUP_NAME";
		$query=  $this->db->query($sql);
         $html = "<option value='0'>Select Parent Group</option>";
        if ($row = $query->result_array()) {
            foreach ($row as $r) {
				$html .= '<option value="' . $r['ID'] . '">' . $r['GROUP_NAME'] .'</option>';
            }
        }        
        $result["html"] = $html;
		echo json_encode($result,TRUE);
    }
	
	public function combo_type()
    {
        $html = '';
        $sql="SELECT TYPE, NAME FROM APP_TYPE_GROUP";
		$query=  $this->db->query($sql);
         $html = "<option value='0'>Select Type Group</option>";
        if ($row = $query->result_array()) {
            foreach ($row as $r) {
				$html .= '<option value="' . $r['TYPE'] . '">' . $r['NAME'] .'</option>';
            }
        }        
        $result["html"] = $html;
		echo json_encode($result,TRUE);
    }
	
	public function combo_parent()
    {
        $html = '';
        $sql="SELECT ID, NAME FROM APP_ROLE WHERE STATUS = 1";
		$query=  $this->db->query($sql);
         $html = "<option value='0'>No Parent</option>";
        if ($row = $query->result_array()) {
            foreach ($row as $r) {
				$html .= '<option value="' . $r['ID'] . '">' . $r['NAME'] .'</option>';
            }
        }        
        $result["html"] = $html;
		echo json_encode($result,TRUE);
    }
	
 
	 
	function get_privileges_all($module_id){
	
		$sql	= "select * from APP_PRIVILEGE_MODULE_EXT2 where MODULE_ID=$module_id and APP_GROUP_ID is null and APP_USER_ID is null";
		
		//	$sql	= "select  LABEL ,PRV_DYN_PARAMS2 ,PRV_DYN_PARAMS1, APP_USER_ID FROM app_privilege_module_ext2 where module_id=$module_id and app_group_id is null and app_user_id is null";
			//var_dump($sql );exit;
			$query=  $this->db->query($sql);
			$rows  = $query->result_array();				
			
			 //  $row = $this->_db->fetchAll($sql);
		$result['status'] = 1;
        
        if(!$query){
			$result['status'] = 0;
			$result['message']='Data tidak ditemukan.';
		}else{
            $result['data'] = $rows;
        }
			echo json_encode($result,TRUE);	
	}
	
	
	
	public function del_module($appid)
    {	
		$result['status']  = "OK";
		$result['success'] = TRUE;
		$result['message'] = 'Save Success !';
		$err=""; 
		 try{				 
				 $sql = "CALL PRC_DEL_APPMODULE($appid);";
										//	var_dump( $sql);exit;
															 
		$sql   = str_replace(chr(92),"",$sql);	
		$this->db->query($sql);	 
		$stat=1;
		$result['status'] = 1;			
	
		$result['err']='Delete Success.';
		}catch (Exception $e) {                   
                   $result = array("status" => 0, "error" => $e->getMessage());
                  // Zend_Registry::get('db')->rollBack();
				   $result['err']="Insert Failed"; 
		}		 	
		echo json_encode($result,TRUE); 
    } 
	 
	
	function getData(){
	
			$sql =  "SELECT * FROM APP_MODULES";
			$query=  $this->db->query($sql);
			$rows  = $query->result_array();		
			$result['status'] = 1;
        
        if(!$query){
			$result['status'] = 0;
			$result['message']='Data tidak ditemukan.';
		}else{
            $result['data'] = $rows;
        }
			echo json_encode($result,TRUE);	
	}
	
	function getDataGroup(){
	
			$sql =  "SELECT * FROM APP_GROUP";
			$query=  $this->db->query($sql);
			$rows  = $query->result_array();		
			$result['status'] = 1;
        
        if(!$query){
			$result['status'] = 0;
			$result['message']='Data tidak ditemukan.';
		}else{
            $result['data'] = $rows;
        }
			echo json_encode($result,TRUE);	
	}
	
	function getDataRole(){
	
			$sql =  "SELECT * FROM APP_ROLE";
			$query=  $this->db->query($sql);
			$rows  = $query->result_array();		
			$result['status'] = 1;
        
        if(!$query){
			$result['status'] = 0;
			$result['message']='Data tidak ditemukan.';
		}else{
            $result['data'] = $rows;
        }
			echo json_encode($result,TRUE);	
	}
	
	function all()
	{
		$sql = "select * from notes_prospect";
		$query=  $this->db->query($sql); 
		var_dump($query->result_array()); 
	}
	
	function get_lastinsert_id()
	{
		$sql = "SELECT USER_ID FROM APP_USER WHERE USER_ID!='99999999' AND USER_ID!='7777'   ORDER BY USER_ID DESC  LIMIT  1 ";
		$query	  =  $this->db->query($sql);
		$last_id  = $query->result_array();
		return $last_id[0]['USER_ID']; 
	}
	
	function delete_group($id)
	{
		$this->db->where('ID', $id);
        $this->db->delete($this->_tbl_group);   		
			$result['status'] = 1;
		echo json_encode($result,TRUE);	
	}
	
	function del_privileges($id)
	{
		$this->db->where('ID', $id);
        $this->db->delete($this->_tbl_privleges);   		
			$result['status'] = 1;
		echo json_encode($result,TRUE);	
	}
	
	function add_role($data) 
	{
		$this->db->insert($this->_tbl_role, $data);   
		return true;
	} 
	 
	function del_role($id)
	
	{
		$this->db->where('ID', $id);
        $this->db->delete($this->_tbl_role);   		
		$result['status'] = 1;
		echo json_encode($result,TRUE);	
	}
	
	
	function update_role($data,$id)
	
	{
		$this->db->where('ID', $id);
        $this->db->update($this->_tbl_role, $data);   		
		return true;
	}
	
}
