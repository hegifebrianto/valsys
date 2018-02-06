<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_assign_menu extends CI_Model {

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
	 
	
	var $tbl_module = 'APP_MODULES';
	var $tbl_role = 'APP_ROLE';
	var $tbl_rmodule = 'APP_ROLE_TO_MODULE';
	
	function __construct(){
		parent::__construct();
	}
	

	function change_key_recursive(&$array, $case=CASE_LOWER){
		$array = array_change_key_case($array, $case);
			foreach ($array as $key => $value) {
				if (is_array($value)) {
					$this->change_key_recursive($array[$key], CASE_LOWER);
				}
			}         
		return $array;
	}
	
	function create_role_tree(){
		$sql = "SELECT ID, NAME FROM $this->tbl_role WHERE STATUS=1 AND PARENT_ROLE=0 ORDER BY NAME ASC";
		$q = $this->db->query($sql);
		$role = $q->result_array();
		for($i=0;$i<count($role);$i++) {
			$role[$i]['TEXT'] = $role[$i]['NAME'];
			$role[$i]['EXPANDED'] = false;
			$role[$i]['LEAF'] = false;
			$role[$i]['CHILDREN'] = $this->create_role_child($role[$i]['ID']);
			$role[$i]['ID'] = $role[$i]['ID'].'-root';
		}
			$i=$i+1;
			$role[$i]['TEXT'] = 'End';
			$role[$i]['EXPANDED'] = false;
			$role[$i]['LEAF'] = false;
			$role[$i]['CHILDREN'] = null;
			$role[$i]['ID'] = '00-root';					
		if(is_array($role)){
			for($j=0;$j<count($role);$j++){
				unset($role[$j]['NAME']);
			}
			$role = array_values($role);
			return $this->change_key_recursive($role, CASE_LOWER);         
		}else{
			$role = array(
				"text"=>"NO_MENU_DEFINED",
				"leaf"=>true
			);

			return $role;
		}
	}
	
	function create_role_child($role_id){
		$sql = "SELECT ID, NAME, PARENT_ROLE FROM $this->tbl_role WHERE STATUS=1 AND PARENT_ROLE=".$role_id." ORDER BY NAME";
		$q = $this->db->query($sql);
		$ch = $q->result_array();
		if(!empty($ch)){
			for($i=0;$i<count($ch);$i++){
				if($ch[$i]['PARENT_ROLE'] == 0){
					$ch[$i]['TEXT'] = $ch[$i]['NAME'];
					$ch[$i]['EXPANDED'] = true;
					$ch[$i]['LEAF'] = false;
					$ch[$i]['ID'] = $ch[$i]['ID'].'-child';								
				}else{
					$ch[$i]['TEXT'] = $ch[$i]['NAME'];
					$ch[$i]['EXPANDED'] = false;
					$ch[$i]['LEAF'] = false;
					$ch[$i]['CHILDREN'] = $this->create_module_child($ch[$i]['ID']);
					$ch[$i]['ID'] = $ch[$i]['ID'].'-child';
				}
				unset($ch[$i]['NAME']);
				unset($ch[$i]['PARENT_ROLE']);			
			}
			$ar = $this->create_module_child($role_id);
			$ch	= array_merge($ch,$ar);
		}else{
			$ch = $this->create_module_child($role_id);
		}
		return $ch;
	}
	
	function create_module_child($role_id){
		$sql_mod = "SELECT m.MODULE_NAME, m.MODULE_ID,m.CONTROLLER FROM $this->tbl_module m, $this->tbl_rmodule r WHERE m.MODULE_ID=r.MODULE_ID AND r.ROLE_ID=$role_id and IS_ACTIVE=1 order by m.MODULE_NAME";
		$q_mod = $this->db->query($sql_mod);
		$mod = $q_mod->result_array();
		for($x=0;$x<count($mod);$x++){
			$mod[$x]['TEXT'] = $mod[$x]['MODULE_NAME'];
			$mod[$x]['ID'] = $mod[$x]['MODULE_ID'];
			$mod[$x]['EXPANDED'] = true;
			$mod[$x]['ICON'] =  "jstree-file"; 
			$mod[$x]['CONTROLLER'] = $mod[$x]['CONTROLLER'];;
			$mod[$x]['LEAF'] = true;
		}
		unset($mod[$x]['MODULE_ID']);
		unset($mod[$x]['MODULE_NAME']);			
		unset($mod[$x]['CONTROLLER']);			
		return $mod;
	}
	
	function list_modules() {
		$sql = "SELECT m.MODULE_NAME, m.MODULE_ID,m.CONTROLLER FROM $this->tbl_module m  where not exists
					(select 1 from $this->tbl_rmodule a where a.MODULE_ID = m.MODULE_ID    )
					order by m.MODULE_NAME";
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

	function remove_module($mod){
		$vars = array("MODULE_ID"=>$mod);
		if($this->db->delete($this->tbl_rmodule, $vars)){
			return true;
		}else{
			return false;
		}
	}
	
	function map_module($mod, $role){
		$vars = array("ROLE_ID"=>$role, "MODULE_ID"=>$mod, "STATUS"=>1, "DESCRIPTION"=>"");
		if($this->db->insert($this->tbl_rmodule, $vars)){
			return true;
		}else{
			return false;
		}
	}

	function check_folder($folder){
		$query = $this->db->query("SELECT * FROM $this->tbl_role WHERE LOWER(NAME)='".strtolower($folder)."'");
		$fold = 0;
		foreach($query->result_array() as $list){
			$fold++;
		}
		if($fold>0){
			return true;
		}else{
			return false;
		}
	}
	
	function orphant_folder($folder){
		$vars = array("NAME"=>$folder, "DESCRIPTION"=>$folder, "STATUS"=>1, "HAS_PARENT_ROLE"=>0, "PARENT_ROLE"=>0);
		if($this->db->insert($this->tbl_role, $vars)){
			return true;
		}else{
			return false;
		}
	}
	
	function create_folder($folder, $parent){
		$length = strlen($parent);
		$parent	= explode('-',$parent);
		$pid	= $parent[0];
		/* if(substr($parent, 0, 4)=='root'){
			$pid = substr($parent, 4, $length - 4);
		}elseif(substr($parent, 0, 5)=='child'){
			$pid = substr($parent, 5, $length - 5);
		} */
		$vars = array("NAME"=>$folder, "DESCRIPTION"=>$folder, "STATUS"=>1, "HAS_PARENT_ROLE"=>1, "PARENT_ROLE"=>$pid);
		if($this->db->insert($this->tbl_role, $vars)){
			return true;
		}else{
			return false;
		}
	}
	
	function remove_folder($folder){
		$vars = array("ID"=>$folder);
		if($this->db->delete($this->tbl_role, $vars)){
			return true;
		}else{
			return false;
		}
	}	
	
	function GUIDtoStr($binary_guid) {
	  $unpacked = unpack('Va/v2b/n2c/Nd', $binary_guid);
	  return sprintf('%08X-%04X-%04X-%04X-%04X%08X', $unpacked['a'], $unpacked['b1'], $unpacked['b2'], $unpacked['c1'], $unpacked['c2'], $unpacked['d']);
	}
	
	function get_ad() {
		$html_result=null;
		$result = null;
		$ldap_columns = NULL;
		$ldap_connection = NULL;
		$ldap_host = "192.168.177.73";
		$ldap_password = 'ICCMsky2016';
		$ldap_username = 'hwbroto@mskydev1.local';

		//------------------------------------------------------------------------------
		// Connect to the LDAP server.
		//------------------------------------------------------------------------------
		$ldap_connection = ldap_connect($ldap_host);
		if (FALSE === $ldap_connection){
			$result['success']=false;
			$result['message']= "<p>Failed to connect to the LDAP server: ". $ldap_host ."</p>";
		}

		//ldap_set_option($ldap_connection, LDAP_OPT_PROTOCOL_VERSION, 3) or die('Unable to set LDAP protocol version');
		//ldap_set_option($ldap_connection, LDAP_OPT_REFERRALS, 0); // We need this for doing an LDAP search.
		
		ldap_set_option($ldap_connection, LDAP_OPT_PROTOCOL_VERSION,3);
		ldap_set_option($ldap_connection, LDAP_OPT_REFERRALS,0);

		if (TRUE !== ldap_bind($ldap_connection, $ldap_username, $ldap_password)){
			$result['success']=false;
			$result['message']= "<p>Failed to bind to LDAP server.</p>";
		}

		//------------------------------------------------------------------------------
		// Get a list of all Active Directory users.
		//------------------------------------------------------------------------------
		
		$ldap_base_dn = 'DC=mskydev1,DC=local';
		$search_filter = "(&(objectCategory=person))";
		$res_ldap = ldap_search($ldap_connection, $ldap_base_dn, $search_filter);
		if (FALSE !== $res_ldap){
			$result['success']=true;
			$entries = ldap_get_entries($ldap_connection, $res_ldap);
			if ($entries['count'] > 0){
				//var_dump(count($entries));exit;
				 for ($i=0; $i<count($entries)-1; $i++) 
				  {
					//var_dump($entries[$i]['description']);exit;
					  $myarray[$i]["name"]      =$entries[$i]["name"][0];
					  $myarray[$i]["username"]             = $entries[$i]["samaccountname"][0];
					  if (isset($entries[$i]["description"]))  {
						 $myarray[$i]["desc"]           = $entries[$i]["description"][0];
					  } else {
						   $myarray[$i]["desc"]          = null;
					  }

					  if (isset($entries[$i]["memberof"]))  {
						 $myarray[$i]["memberOf"]           = $entries[$i]["memberof"][0];
					  } else {
						   $myarray[$i]["memberOf"]          = null;
					  }
					  
					  if (isset($entries[$i]["userprincipalname"]))  {
						 $myarray[$i]["userPrincipalName"]           = $entries[$i]["userprincipalname"][0];
					  } else {
						   $myarray[$i]["userPrincipalName"]          = null;
					  }


					  if (isset($entries[$i]["title"]))  {
						 $myarray[$i]["title"]           = $entries[$i]["title"][0];
					  } else {
						   $myarray[$i]["title"]          = null;
					  }

					  if (isset($entries[$i]["department"]))  {
						 $myarray[$i]["department"]           = $entries[$i]["department"][0];
					  } else {
						   $myarray[$i]["department"]          = null;
					  }

					 if (isset($entries[$i]["mail"]))  {
						 $myarray[$i]["mail"]           = $entries[$i]["mail"][0];
					  } else {
						   $myarray[$i]["mail"]          = null;
					  }
					  
					  $myarray[$i]["guid"]           = $this->GUIDtoStr($entries[$i]["objectguid"][0]);
				   }
   
/* 				$odd = 0;
				foreach ($entries[0] AS $key => $value){
					if (0 === $odd%2){
						$ldap_columns[] = $key;
					}
					$odd++;
				}
			 $html_result = 	 '<table class="data">';
				$html_result = $html_result .'<tr>';
				$header_count = 0;
				
				foreach ($ldap_columns AS $col_name){
					if (0 === $header_count++){
						$html_result = $html_result . '<th class="ul">';
					}else if (count($ldap_columns) === $header_count){
						$html_result = $html_result .'<th class="ur">';
					}else{
						$html_result = $html_result . '<th class="u">';
					}
						$html_result = $html_result . $col_name .'</th>';
				}
				$html_result = $html_result . '</tr>';
				for ($i = 0; $i < $entries['count']; $i++){
					$html_result = $html_result . '<tr>';
					$td_count = 0;
					foreach ($ldap_columns AS $col_name){
						if (0 === $td_count++){
							$html_result = $html_result . '<td class="l">';
						}else{
							$html_result = $html_result . '<td>';
						}
						if (isset($entries[$i][$col_name])){
							$output = NULL;
							if ('lastlogon' === $col_name || 'lastlogontimestamp' === $col_name){
								$output = date('D M d, Y @ H:i:s', ($entries[$i][$col_name][0] / 10000000) - 11676009600);
							}else{
								$output = $entries[$i][$col_name][0];
							}
							$html_result = $html_result . $output .'</td>';
						}
					}
					$html_result = $html_result . '</tr>';
				}
				$html_result = $html_result . '</table>'; */
				$html_result = $myarray ;
			}
			
			$result['message'] = $html_result;
		};
		ldap_unbind($ldap_connection); // Clean up after ourselves.		
		return $result;
	}
}
