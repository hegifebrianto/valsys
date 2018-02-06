<?php

class Roles_group extends CI_Model 
{
		
	function __construct()
    {
        // Call the Model constructor
        parent::__construct();
		// Other stuff
		$this->_prefix = $this->config->item('DX_table_prefix');
		$this->_table = $this->_prefix.$this->config->item('DX_roles_group_table');
		//$this->_table_app_grup_to_user = $this->_prefix.('app_grup_to_user');
    }
	
		
	function get_role_by_id($role_id)
	{
		$q = $this->db->query("SELECT * FROM $this->_table WHERE id = '$role_id'");
		return $q;
	}
	
	
	function get_grup_by_user($user)
	
	{
	   
		$q = $this->db->query("select * from APP_GROUP_TO_USER WHERE user_id='$user' AND status =1 "); 
		return $q;
	
	}
	
	
}

?>