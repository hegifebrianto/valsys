<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_panel extends CI_Model {

 
	
	function __construct(){
		parent::__construct();
	}
	

	function list_menu($userid) {
		$sql = "select  DISTINCT USER_ID,ROLE_ID,MENU_NAME,LEVEL_MENU,PARENT_ROLE  from APP_V_USER_MENU aa
					WHERE aa.USER_ID =$userid  
					ORDER BY PARENT_ROLE, LEVEL_MENU, MODULE_NAME";
		$q = $this->db->query($sql);
		$row = $q->result_array();

		$result['status'] = 1;
        
        if(!$row){
			$result['status'] = 0;
			$result['message']='Data tidak ditemukan.';
		}else{
            $result['data'] = $row;
        }
		return $result;
	}

	function list_module($role_id,$userid) {
		$sql = "SELECT DISTINCT  ROLE_ID,LEVEL_MENU,MODULE_NAME,CONTROLLER FROM APP_V_USER_MENU aa
					WHERE aa.ROLE_ID = $role_id and aa.USER_ID =$userid  
					ORDER BY MODULE_NAME ;";
		$q = $this->db->query($sql);
		$row = $q->result_array();

		$result['status'] = 1;
        
        if(!$row){
			$result['status'] = 0;
			$result['message']='Data tidak ditemukan.';
		}else{
            $result['data'] = $row;
        }
		return $result;
	}
	
 
}
