<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_userconfig_group extends CI_Model {

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
	var $tbl_bgroup 	= 'APP_BRAND_TO_GROUP';
	var $tbl_group 		= 'APP_GROUP';
	var $tbl_brand 		= 'APP_BRAND';
	var $tbl_guser 		= 'APP_GROUP_TO_USER';	
	var $tbl_user 			= 'APP_USER';	
	var $tbl_gmenu2 	= 'APP_GROUP_TO_MENU';
	
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
	
	function getUsername($q){
		$this->db->select('user_name');
		$this->db->like('user_name', $q);
		$query = $this->db->get('APP_USER');
		if($query->num_rows() > 0){
		  foreach ($query->result_array() as $row){
			$row_set[] = htmlentities(stripslashes($row['user_name'])); //build an array
		  }
		  echo json_encode($row_set); //format the array into json data
		}
	}
	
	function getDataa(){
	
			$sql =  "SELECT * FROM APP_USER  ORDER BY USER_NAME  LIMIT 2";
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
	
	function getDataParam($param){
	
			$sql =  "SELECT * FROM APP_USER where user_name = '$param'";
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
	
	
	function addGroup($data,$userId,$brandId){
		$this->db->set('CREATED_BY',$userId);
		$this->db->set('CREATED_DATE','now()',false);
		$this->db->set('UPDATE_DATE','now()',false);
		$this->db->set('STATUS',1);
		$this->db->set('TYPE','root');
		$insertGroup = $this->db->insert($this->tbl_group,$data);
		
		$this->db->select_max('ID');
		$this->db->where('ID <>',9994);
		$idMax = $this->db->get($this->tbl_group)->row_array();
		$idMax = $idMax['ID'];
		$brandId  =1;
		$this->db->set('BRAND_ID',$brandId);
		$this->db->set('GROUP_ID',$idMax);
		$this->db->set('STATUS',1);
		$insertBGroup = $this->db->insert($this->tbl_bgroup);
		
		if($insertGroup && $insertBGroup){
			$result['success'] = true;
			$result['message'] = 'Group has been insert';
		}else{
			$result['success'] = false;
			$result['message'] = 'Adding group failed';
		}
		return $result;
	}
	
	function updateGroup($data,$groupId){
		$this->db->set('UPDATE_DATE','now()',false);
		$this->db->where('ID',$groupId);
		$updateGroup = $this->db->update($this->tbl_group,$data);
		
		if($updateGroup){
			$result['success'] = true;
			$result['message'] = 'Group has been update';
		}else{
			$result['success'] = false;
			$result['message'] = 'Update group failed';
		}
		return $result;
	}
	
	
	function create_group_tree($uid){
		$sql = "SELECT ID, BRAND FROM $this->tbl_brand WHERE STATUS='1' and id<>4 ORDER BY ID ASC";
		$q = $this->db->query($sql);
		$role = $q->result_array();      
		for($i=0;$i<count($role);$i++) {
			$role[$i]['TEXT'] = $role[$i]['BRAND'];
			$role[$i]['EXPANDED'] = true;
			$role[$i]['LEAF'] = false;
			$role[$i]['STATE']['CHECKBOX_DISABLED'] =   true;
			$role[$i]['CHILDREN'] = $this->create_role_parent($role[$i]['ID'],$uid);
			$role[$i]['ID'] = 'brand'.$role[$i]['ID'];
		}
		if(is_array($role)){
			for($j=0;$j<count($role);$j++){
				unset($role[$j]['BRAND']);
			}		
			return $this->change_key_recursive($role, CASE_LOWER);         
		}else{
			$role = array(
				"text"=>"NO_ROLE_DEFINED",
				"leaf"=>true
			);
			return $role;
		}
	}
	
    function create_role_child($parent_id, $brand_id){
		$sql = "SELECT ID, GROUP_NAME, PARENT_GROUP,DESCRIPTION FROM $this->tbl_group WHERE STATUS=1 AND PARENT_GROUP=".$parent_id." order by GROUP_NAME";
		$q = $this->db->query($sql);
		$ch = $q->result_array();
		for($i=0;$i<count($ch);$i++){
			if($ch[$i]['PARENT_GROUP'] === NULL){
				$ch[$i]['TEXT'] = $ch[$i]['GROUP_NAME'];
				$ch[$i]['EXPANDED'] = false;
				$ch[$i]['LEAF'] = false;
				$ch[$i]['ID'] = 'child'.$brand_id.$ch[$i]['ID'];								
			}else{
				$ch[$i]['TEXT'] = $ch[$i]['GROUP_NAME'];
				$ch[$i]['EXPANDED'] = false;
				$ch[$i]['LEAF'] = false;
				$ch[$i]['CHILDREN'] = $this->create_role_child($ch[$i]['ID'], $brand_id);				
				$ch[$i]['ID'] = 'child'.$brand_id.$ch[$i]['ID'];
			}
			unset($ch[$i]['GROUP_NAME']);
			unset($ch[$i]['PARENT_GROUP']);			
		}
		$sql = "SELECT ID, GROUP_NAME, PARENT_GROUP,DESCRIPTION FROM $this->tbl_group WHERE ID=".$parent_id." order by GROUP_NAME";
		$q = $this->db->query($sql);
		$ch2 = $q->result_array();
		for($j=0;$j<count($ch2);$j++){
			$sql_mod = "SELECT m.MODULE_NAME, m.MODULE_ID FROM $this->tbl_module m, $this->tbl_gmenu2 r WHERE m.MODULE_ID=r.MODULE_ID AND r.GROUP_ID=".$ch2[$j]['ID']." order by m.MODULE_NAME";
			$q_mod = $this->db->query($sql_mod);
			$mod = $q_mod->result_array();
			for($x=0;$x<count($mod);$x++){
				$ch[$x+count($ch2)]['TEXT'] = $mod[$x]['MODULE_NAME'];
				$ch[$x+count($ch2)]['ICON'] =  "jstree-file";
				$ch[$x+count($ch2)]['STATE']['CHECKBOX_DISABLED'] =   true;
				$ch[$x+count($ch2)]['ID'] = $ch2[$j]['ID'].'-'.$mod[$x]['MODULE_ID'];
				$ch[$x+count($ch2)]['EXPANDED'] = false;
				$ch[$x+count($ch2)]['LEAF'] = true;
			}
			unset($mod[$x]['MODULE_ID']);
			unset($mod[$x]['MODULE_NAME']);			
		}
		$ch = array_values($ch);
		return $ch;
	}
	
	
	function create_role_parent($brand_id,$uid){
		if ($uid == null || $uid == ''   || $uid == 'null') {
			$uid='0';
		}
		
		$sql = "SELECT g.ID, g.GROUP_NAME, g.PARENT_GROUP,g.DESCRIPTION ,h.STATUS HAS_VIEW FROM $this->tbl_bgroup b, $this->tbl_group g
					LEFT JOIN  $this->tbl_user  i ON i.USER_NAME = '$uid'
					LEFT JOIN  $this->tbl_guser  h ON h.GROUP_ID = g.ID AND h.USER_ID = i.USER_ID
					WHERE g.ID = b.GROUP_ID AND b.BRAND_ID=".$brand_id." AND g.STATUS=1 AND g.GROUP_NAME<>'SUPERADMIN' AND 
					g.PARENT_GROUP IS NULL and g.id<>9994 ORDER BY GROUP_NAME";
		//var_dump($sql);exit;			
		$q = $this->db->query($sql);
		$pr = $q->result_array();
		for($i=0;$i<count($pr);$i++){ 
			$pr[$i]['CHILDREN'] = $this->create_role_child($pr[$i]['ID'], $brand_id);
			$pr[$i]['TEXT'] = $pr[$i]['GROUP_NAME'] ;
			$pr[$i]['GID'] = '999'.$brand_id;
			$pr[$i]['EXPANDED'] = false;
			if ( $pr[$i]['HAS_VIEW'] == 1) { 
				$pr[$i]['STATE']['CHECKED'] =   true;
			} else {
				$pr[$i]['STATE']['CHECKED'] =   false;				
			}
			$pr[$i]['LEAF'] = false;
			$pr[$i]['ID'] = $pr[$i]['ID'].'-root';//'parent'.$brand_id.$pr[$i]['ID'];
			unset($pr[$i]['GROUP_NAME']);
			unset($pr[$i]['PARENT_GROUP']);
		}
		$pr = array_values($pr);
		return $pr;
	}

	function check_privilage_module($user_id,$module_id,$group_id){
	    $this->db->where('user_id', $user_id);
	    $this->db->where('module_id', $module_id);
		$this->db->where('group_id', $group_id);
	    return $this->db->get('APP_PRIVILEGE_MODULE');    
	}
	
	function add_module($data,$user_id,$module_id,$group_id){	
		$this->db->insert('APP_PRIVILEGE_MODULE', $data);
		$group_user = 0;
		$this->ins_pri_default($user_id,$module_id,$group_id,$group_user); /* insert privileges for default group 9994 */
		
		$check_group_user = $this->check_group_to_user($user_id,$group_id);
		if($check_group_user->num_rows() == 0){
			//insert new to group user
			$sql = "insert into APP_GROUP_TO_USER(GROUP_ID,USER_ID,STATUS,CREATED_DATE) values ($group_id,$user_id,1,now())";
			$this->db->query($sql);
		}
		
	}
	
	function update_module($has_view,$user_id,$module_id,$group_id){
	    $check_group_user = $this->check_group_to_user($user_id,$group_id);
		if($has_view==0){
			$this->del_pri_default($user_id,$module_id,$group_id); /* delete privileges for default group 9994 */
			$check_active_modulegroup = $this->get_module_othergroup_user($user_id,$module_id,$group_id);
			//var_dump($check_active_modulegroup);exit;
			if($group_id==9994){
				if($check_active_modulegroup==0){
					$sql = "delete from APP_PRIVILEGE_MODULE where USER_ID=$user_id and MODULE_ID=$module_id and GROUP_ID=9994";
					$this->db->query($sql);
					/* update privileges to set false */
					$pri_ext	= 'false';
					$sql_ext	= "update APP_PRIVILEGE_MODULE_EXT2
								   set prv_dyn_params2 = '".$pri_ext."'
								 where module_id = $module_id
								   and app_user_id = $user_id
								   and app_group_id = $group_id";
					$this->db->query($sql_ext);
				}else{
					$sql_update = "update APP_PRIVILEGE_MODULE set has_view=1,assign_type=1 where user_id=$user_id and module_id=$module_id and group_id=$group_id ";
					$this->db->query($sql_update);
				}
			}else{
				$sql_update1 = "update APP_PRIVILEGE_MODULE set has_view=$has_view,assign_type='' where user_id=$user_id and module_id=$module_id and group_id=$group_id ";
				//var_dump($sql_update1);
				$this->db->query($sql_update1);
				$sql_update_assign = "update APP_PRIVILEGE_MODULE set assign_type='' where user_id=$user_id and module_id=$module_id and group_id=9994 ";
				$this->db->query($sql_update_assign);
				if($check_active_modulegroup==0){
					$sql = "delete from APP_PRIVILEGE_MODULE where user_id=$user_id and module_id=$module_id and group_id=9994";
					$this->db->query($sql);
				}
			}
			
			if($check_group_user->num_rows() > 0){
				//delete from group user
				$sql = "delete from APP_GROUP_TO_USER where user_id=$user_id and group_id=$group_id";
				$this->db->query($sql);
			}
		}else if($has_view==1){
			if($group_id==9994) $assign_type=1; else $assign_type='';
			$sql_update = "update APP_PRIVILEGE_MODULE set has_view=$has_view,assign_type='$assign_type' where user_id=$user_id and module_id=$module_id and group_id=$group_id ";
			//var_dump($sql_update);exit;
			$this->db->query($sql_update);
			$group_user = $this->get_group_user($user_id);
			$this->ins_pri_default($user_id,$module_id,$group_id,$group_user); /* update privileges for default group 9994 */
			
			if($check_group_user->num_rows() == 0){
				$sql = "insert into APP_GROUP_TO_USER(group_id,user_id,status,created_date) values ($group_id,$user_id,1,now())";
				$this->db->query($sql);
			}
		}
	}

	function get_group_user($user_id){
		$sql	= "select group_id from APP_GROUP_TO_USER where user_id=$user_id and group_id<>9994";
		$result = $this->db->query($sql);
		return $result->result_array();
	}
	
	function check_group_module($group_id){
		$sql 	= "select MODULE_ID from APP_GROUP_TO_MENU where group_id=$group_id";
		$result	= $this->db->query($sql);
		return $result->result_array();
	}
	
	function check_role_module($role_id){
		$sql 	= "select MODULE_ID from APP_ROLE_TO_MODULE where role_id=$role_id";
		//var_dump($sql);exit;
		$result	= $this->db->query($sql);
		return $result->result_array();
	}

	function check_group_to_user($user_id,$group_id){
		$this->db->where('user_id', $user_id);
	    $this->db->where('group_id', $group_id);
	    return $this->db->get('APP_GROUP_TO_USER');   
	}

	function get_module_othergroup_user($user_id,$module_id,$group_id){
		$gid	= $this->check_other_group_user($user_id,$group_id)	;
		if($gid==''){
			return 0;
		}else{
			$sql	= "select count(0) BRS from APP_PRIVILEGE_MODULE where module_id=$module_id and user_id=$user_id and has_view=1 and group_id in($gid)";
			$result = $this->db->query($sql)->row_array();
			return $result['BRS'];
		}
	}

	function check_other_group_user($user_id,$group_id){
		$sql	= "select GROUP_ID from APP_GROUP_TO_USER where user_id=$user_id and group_id not in(9994,$group_id)";
		$result	= $this->db->query($sql);
		$result	= $result->result_array();
		
		$gid = '';$comma = '';
		foreach($result as $r){
			$group	= $r['GROUP_ID'];
			if($gid!='') $comma = ',';
			$gid	= $group.$comma.$gid;
		}
		return $gid;
	}

	function check_group_pri_user($user_id,$module_id,$group_id,$prv_dyn_params1){
		$gid	= $this->check_other_group_user($user_id,$group_id);
		if($gid==''){
			return 0;
		}else{
			$sql	= "select count(distinct prv_dyn_params1) brs from APP_PRIVILEGE_MODULE_EXT2 where module_id=$module_id and app_group_id in($gid) and app_user_id is null and prv_dyn_params2='true' and prv_dyn_params1='$prv_dyn_params1'";
			$result = $this->db->query($sql)->row_array();
			return $result['BRS'];
		}
	}
	
	function ins_pri_default($user_id,$module_id,$group_id,$group_user){
		if($group_id==9994){
			$result			= $this->check_group_user_true($module_id,$group_user);
			$prv_dyn_name 	= 'user';
		}else{
			$result			= $this->check_gdefault_true($module_id,$group_id);
			$prv_dyn_name 	= '';
		}
		
		$check_pri_module_user = $this->check_pri_module($module_id,$user_id);
		if($check_pri_module_user->num_rows()==0){
			$sql = "insert into APP_PRIVILEGE_MODULE(user_id,module_id,has_view,date_create,create_by,group_id) values($user_id,$module_id,1,now(),1,9994)";
			$this->db->query($sql);
		}else{
			$sql = "update APP_PRIVILEGE_MODULE set has_view=1 where user_id=$user_id and module_id=$module_id and group_id=9994";
			$this->db->query($sql);
		}
		//var_dump($result);exit;
		foreach($result as $r){
			$prv_dyn_params1	= $r['PRV_DYN_PARAMS1'];
			$label				= $r['LABEL'];
			$param_name			= $r['PRV_DYN_NAME'];
			if($param_name=='') $prv_dyn_name='';
			$check				= $this->check_pri_user($module_id,$user_id,$prv_dyn_params1);
			if($check->num_rows()>0){
				$sql_upd	= "update APP_PRIVILEGE_MODULE_EXT2 set prv_dyn_params2='true',prv_dyn_name='$prv_dyn_name' where module_id=$module_id and app_group_id=9994 and app_user_id=$user_id and prv_dyn_params1='$prv_dyn_params1'";
				//var_dump($sql_upd);exit;
				$this->db->query($sql_upd);
				
			}else{
				$sql_ins	= "insert into APP_PRIVILEGE_MODULE_EXT2 
								(module_id,app_group_id,app_user_id,prv_dyn_params1,prv_dyn_params2,date_create,label,prv_dyn_name)
							   values($module_id,9994,$user_id,'$prv_dyn_params1','true',now(),'$label','$prv_dyn_name')";
				//var_dump($sql_ins);exit;
				$this->db->query($sql_ins);
			}
		}
	}

	function check_pri_module($module_id,$user_id){
		$this->db->where('module_id', $module_id);
		$this->db->where('user_id', $user_id);
		$this->db->where('group_id', 9994);
		return $this->db->get('APP_PRIVILEGE_MODULE');
	}
	
	function check_group_user_true($module_id,$group_user){
		$gid='';$comma = '';
		if(empty($group_user)){
			$gid	= 0;
		}else{
			foreach($group_user as $r){
				$group	= $r['GROUP_ID'];
				if($gid!='') $comma = ',';
				$gid	= $group.$comma.$gid;
			}
		}
		$sql = "select distinct prv_dyn_params1,label from APP_PRIVILEGE_MODULE_EXT2
				where module_id=$module_id and app_group_id in($gid) and app_user_id is null and prv_dyn_params2='true'";
		$result	= $this->db->query($sql);
		return $result->result_array();
	}
	
	function check_gdefault_true($module_id,$group_id){
		$sql_getpri	= "select prv_dyn_params1,label,prv_dyn_name from APP_PRIVILEGE_MODULE_EXT2
						where module_id=$module_id and app_group_id=$group_id and app_user_id is null and prv_dyn_params2='true'";
		//var_dump($sql_getpri);exit;
		$result	= $this->db->query($sql_getpri);
		return $result->result_array();
	}
	
	function check_pri_user($module_id,$user_id,$prv_dyn_params1){
		$this->db->where('module_id', $module_id);
		$this->db->where('app_group_id', 9994);
		$this->db->where('app_user_id', $user_id);
		$this->db->where('prv_dyn_params1', $prv_dyn_params1);
		return $this->db->get('APP_PRIVILEGE_MODULE_EXT2');
	}
	
	function del_pri_default($user_id,$module_id,$group_id){
		$result	= $this->check_gdefault_true($module_id,$group_id);//02,03
		foreach($result as $r){
			$prv_dyn_params1	= $r['PRV_DYN_PARAMS1']; // all pri yg true by user
			$label				= $r['LABEL'];
			$check				= $this->check_pri_user($module_id,$user_id,$prv_dyn_params1);
			
			if($check->num_rows()>0){
				$check_user	= $this->check_group_pri_user($user_id,$module_id,$group_id,$prv_dyn_params1);
				
				if($check_user==0){
					$sql_del	= "delete from APP_PRIVILEGE_MODULE_EXT2 where module_id=$module_id and app_group_id=9994 and app_user_id=$user_id and prv_dyn_params1='$prv_dyn_params1'";
					$this->db->query($sql_del);
				}
			}
		}
	}
	
	function get_userid($user_name){
			$sql	= "select USER_ID from  $this->tbl_user where user_name = '$user_name'   ";
			$row = $this->db->query($sql)->result_array();
			if ($row) {
				return $row[0]['USER_ID'];
			} else {
				return 0;
			}
			
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
