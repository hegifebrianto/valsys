<?php

class App_privilege_module_ext extends CI_Model 
{
		
	function __construct()
    {
        // Call the Model constructor
        parent::__construct();
		// Other stuff
		$this->_prefix = $this->config->item('DX_table_prefix');
		$this->_table = $this->_prefix.$this->config->item('DX_app_privilege_module_ext2');
		$this->_table_grup = $this->_prefix.$this->config->item('app_group_to_user');
    }
	
	
	
	function get_privilege_by_user_id($user_id,$module_id)
	{
		$q = $this->db->query("SELECT * FROM $this->_table WHERE user_id = '$user_id' AND module_id ='$module_id'");
		return $q;
	}
	
	function get_pri_by_user($user,$ext,$module)
	{
	    $sql="select * from APP_PRIVILEGE_MODULE_EXT2
		      where module_id='$module' 
			  AND app_user_id ='$user'
			  AND upper(prv_dyn_params1) LIKE '$ext' ";
		
        $q = $this->db->query($sql);
        return $q;
	}
	function get_pri_grup($ext,$module,$grup)
	{
		$sql="select * from APP_PRIVILEGE_MODULE_EXT2
		      where module_id='$module' and 
              app_group_id ='$grup'
			  AND upper(prv_dyn_params1) LIKE '$ext'
			  and app_user_id is null	
		";  
		
		$q = $this->db->query($sql);
		return $q;
	
	}
	
	function get_pri_default($ext,$module)
	{
	    $sql="select a.*,b.* 
			from  app_group_to_menu2 a ,APP_PRIVILEGE_MODULE_EXT2 b
			where a.module_id=b.module_id
			AND b.app_group_id IS NULL
			AND b.app_user_id IS NULL
			AND b.module_id='$module'
			AND upper(b.prv_dyn_params1) LIKE '$ext'
			
			
			";  
		
		$q = $this->db->query($sql);
		return $q;	
	}
	
	function get_app_pri_module($grup,$module,$user)
	{
	    $sql="select * from APP_PRIVILEGE_MODULE where group_id='$grup' and module_id='$module' 
and user_id='$user'
		   "; 
	    $q = $this->db->query($sql);
		return $q;	
		
	}
	
	
}

?>