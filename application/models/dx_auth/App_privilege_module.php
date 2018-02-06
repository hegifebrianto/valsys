<?php

class App_privilege_module extends CI_Model 
{
		
	function __construct()
    {
        // Call the Model constructor
        parent::__construct();
		// Other stuff
		$this->_prefix = $this->config->item('DX_table_prefix');
		$this->_table = $this->_prefix.$this->config->item('DX_app_module');
    }
	

	function get_module_id($controller)
	{
		$controller = strtolower($controller);
		$q = $this->db->query("SELECT MODULE_ID FROM $this->_table WHERE lower(controller) ='$controller' ");
	
		if($q->num_rows() > 0 )
			{
				$result = $q->result_array() ;
				$moduleid = $result[0]['MODULE_ID'];
				
			}	else {
				$moduleid = null;
			}		
		return $moduleid;
	}

	function get_access_allowed($controller,$userid)
	{
		$controller = strtolower($controller);
		$q = $this->db->query("SELECT count(0)  RESULT FROM APP_V_USER_MENU  WHERE lower(controller) ='$controller'  and user_id = $userid ");
		
		$count=0;
		if($q->num_rows() > 0 )
			{
				$result = $q->result_array() ;
				$count = $result[0]['RESULT'];
			}	
		if ($count > 0) {
			return true;
		}	else {
			return false;
		}	
	}
	
	
	function server_list()
	{
	    $sql = "select host_ip from app_ws_list" ;
        $q = $this->db->query($sql);
        return $q;
          		
	}
	
}

?>