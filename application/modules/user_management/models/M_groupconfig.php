<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_groupconfig extends CI_Model {

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
	 
	
	var $tbl_module 		= 'APP_MODULES';
	var $tbl_role 			= 'APP_ROLE';
	var $tbl_rmodule		= 'APP_ROLE_TO_MODULE';
	var $tbl_bgroup 		= 'APP_BRAND_TO_GROUP';
	var $tbl_group 		= 'APP_GROUP';
	var $tbl_brand 		= 'APP_BRAND';
	var $tbl_primodule 	= 'APP_PRIVILEGE_MODULE';
	var $tbl_gmenu2 	= 'APP_GROUP_TO_MENU';
	var $tbl_guser 		= 'APP_GROUP_TO_USER';
	var $tbl_detail2 		= 'APP_PRIVILEGE_MODULE_EXT2';
	
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
	
	function get_ext_all_by_parent($parent,$module){
/* 	    $where = "app_user_id IS NULL";
        $this->db->where($where);
		$this->db->where('module_id', $module);
		$this->db->where('app_group_id', $parent);		
		return $this->db->get($this->tbl_detail2);   */
		$sql= "select * from APP_PRIVILEGE_MODULE_EXT2 where app_user_id is null and module_id = $module  and app_group_id =  $parent";
		//var_dump($sql);exit;
		return $this->db->query($sql);  
	}
	
	function get_ext_all_by_parent_module2($module,$parent){
	    $f="ID,MODULE_ID,APP_GROUP_ID,APP_USER_ID,PRV_DYN_PARAMS1,PRV_DYN_PARAMS2,LABEL "; 
		$sql = "
			select $f from APP_PRIVILEGE_MODULE_EXT2
				where module_id='$module' 
					AND app_group_id='$parent' AND app_user_id IS NULL     
				UNION
				select $f from APP_PRIVILEGE_MODULE_EXT2
				where prv_DYN_PARAMS1 NOT IN(select prv_DYN_PARAMS1 from APP_PRIVILEGE_MODULE_EXT2
				where module_id='$module' AND app_group_id='$parent'AND app_user_id IS NULL ) 
				AND module_id='$module' AND app_group_id IS NULL AND app_user_id IS NULL
                ORDER BY PRV_DYN_PARAMS1 ASC";
				//var_dump($sql);exit;
		
		return $this->db->query($sql);  
	}
	
	function get_ext_all_by_parent_module($module,$parent,$user){
	    $f="ID,MODULE_ID,APP_GROUP_ID,APP_USER_ID,PRV_DYN_PARAMS1,PRV_DYN_PARAMS2,LABEL "; 
		$sql = "select $f from APP_PRIVILEGE_MODULE_EXT2
		where module_id='$module' 
        AND app_group_id='$parent'       
		AND app_user_id ='$user'
		UNION
		select $f from APP_PRIVILEGE_MODULE_EXT2
		where prv_DYN_PARAMS1 NOT IN(select prv_DYN_PARAMS1 from APP_PRIVILEGE_MODULE_EXT2
		where module_id='$module' AND app_group_id='$parent' AND app_user_id ='$user') 
		AND module_id='$module' AND app_group_id IS NULL AND app_user_id IS NULL
      	ORDER BY PRV_DYN_PARAMS1 ASC";
		
		return $this->db->query($sql);  
	}
	
	function get_ext_all_by_module($module){
/* 	   $where = "APP_USER_ID IS NULL";
		$wh = "APP_GROUP_ID IS NULL";
        $this->db->where($where);
		$this->db->where('MODULE_ID', $module);
		$this->db->where($wh);
		$this->db->order_by('PRV_DYN_PARAMS1','ASC');
		return $this->db->get($this->tbl_detail2);      */
		
		 	$sql= "select * from APP_PRIVILEGE_MODULE_EXT2 where app_user_id is null and app_group_id IS NULL and module_id =  $module order by PRV_DYN_PARAMS1 asc";
		//var_dump($sql);exit;
		
		/*  $q= $this->db->query($sql); 
		return $q; */
		return $this->db->query($sql);  
		 
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
		$this->db->set('UPDATE_DATE','NOW()',false);
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
	
	
	function create_group_tree(){
		$sql = "SELECT ID, BRAND FROM $this->tbl_brand WHERE STATUS='1' and id<>4 ORDER BY ID ASC";
		$q = $this->db->query($sql);
		$role = $q->result_array();      
		for($i=0;$i<count($role);$i++) {
			$role[$i]['TEXT'] = $role[$i]['BRAND'];
			$role[$i]['EXPANDED'] = true;
			$role[$i]['LEAF'] = false;
			$role[$i]['CHILDREN'] = $this->create_role_parent($role[$i]['ID']);
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

	function create_role_parent($brand_id){
		$sql = "SELECT g.ID, g.GROUP_NAME, g.PARENT_GROUP,g.DESCRIPTION FROM $this->tbl_group g, $this->tbl_bgroup b WHERE g.ID = b.GROUP_ID AND b.BRAND_ID=".$brand_id." AND g.STATUS=1 AND g.GROUP_NAME<>'SUPERADMIN' AND g.PARENT_GROUP IS NULL and g.id<>9994 ORDER BY GROUP_NAME";
		$q = $this->db->query($sql);
		$pr = $q->result_array();
		for($i=0;$i<count($pr);$i++){
			$pr[$i]['CHILDREN'] = $this->create_role_child($pr[$i]['ID'], $brand_id);
			$pr[$i]['TEXT'] = $pr[$i]['GROUP_NAME'];
			$pr[$i]['EXPANDED'] = false;
			$pr[$i]['LEAF'] = false;
			$pr[$i]['ID'] = $pr[$i]['ID'].'-root';
			unset($pr[$i]['GROUP_NAME']);
			unset($pr[$i]['PARENT_GROUP']);
		}
		$pr = array_values($pr);
		return $pr;
	}
	
	function create_role_tree(){
		$sql = "SELECT ID, NAME FROM $this->tbl_role WHERE STATUS=1 AND PARENT_ROLE=0 ORDER BY NAME ASC";
		$q = $this->db->query($sql);
		$role = $q->result_array();
		for($i=0;$i<count($role);$i++) {
			$role[$i]['TEXT'] = $role[$i]['NAME'];
			$role[$i]['EXPANDED'] = false;
			$role[$i]['LEAF'] = false;
		    $role[$i]['CHILDREN'] = $this->create_role_child_x($role[$i]['ID']);
		//	$pr[$i]['CHILDREN'] = $this->create_role_child($pr[$i]['ID'], $brand_id);
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
	
 
	 function create_role_child($parent_id, $brand_id){
		$sql = "SELECT ID, GROUP_NAME, PARENT_GROUP,DESCRIPTION FROM $this->tbl_group WHERE STATUS=1 AND PARENT_GROUP=".$parent_id." order by GROUP_NAME";
		$q = $this->db->query($sql);
		$ch = $q->result_array();
		for($i=0;$i<count($ch);$i++){
			if($ch[$i]['PARENT_GROUP'] === NULL){
				$ch[$i]['TEXT'] = $ch[$i]['GROUP_NAME'];
				$ch[$i]['EXPANDED'] = false;
				$ch[$i]['ICON'] =  "jstree-file";
				$ch[$i]['LEAF'] = false;
				$ch[$i]['ID'] = 'child'.$brand_id.$ch[$i]['ID'];								
			}else{
				$ch[$i]['TEXT'] = $ch[$i]['GROUP_NAME'];
				$ch[$i]['EXPANDED'] = false;
				$ch[$i]['ICON'] =  "jstree-file";
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
	
	
	function create_role_child_x($role_id){
		$sql = "SELECT ID, NAME, PARENT_ROLE FROM $this->tbl_role WHERE STATUS=1 AND PARENT_ROLE=".$role_id;
		$q = $this->db->query($sql);
		$ch = $q->result_array();
		if(!empty($ch)){
			for($i=0;$i<count($ch);$i++){
				if($ch[$i]['PARENT_ROLE'] == 0){
					$ch[$i]['TEXT'] = $ch[$i]['NAME'];
					$ch[$i]['EXPANDED'] = true;
					$ch[$i]['LEAF'] = false;
					$ch[$i]['ID'] = 'child'.$ch[$i]['ID'];								
				}else{
					$ch[$i]['TEXT'] = $ch[$i]['NAME'];
					$ch[$i]['EXPANDED'] = false;
					$ch[$i]['LEAF'] = false;
					$ch[$i]['CHILDREN'] = $this->create_module_child($ch[$i]['ID']);
					$ch[$i]['ID'] = 'child'.$ch[$i]['ID'];
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

	function rem_module($module){
		$mod = explode("-", $module);
		$group_id = $mod[0];
		$module_id = $mod[1];	
		$sql = "DELETE FROM $this->tbl_gmenu2 WHERE GROUP_ID=".$group_id." AND MODULE_ID=".$module_id;
		if($this->db->query($sql)){
			$sql_del	= "delete from $this->tbl_primodule
						   where group_id = $group_id and module_id = $module_id";
			$sql_del_exist	= "delete from $this->tbl_primodule
						   where group_id = 9994 and module_id = $module_id and user_id not in 
						   (select user_id from APP_GROUP_TO_USER a, APP_GROUP_TO_MENU b
						   where a.group_id = b.group_id and b.module_id = $module_id and b.group_id not in ($group_id, 9994))";
			$this->db->query($sql_del);
			$this->db->query($sql_del_exist);
			return true; 
		}else{
			return false;
		}
	}
	
	function move_module($parent, $node, $user_id){
		$length = strlen($parent);
		$theday = date("m/d/Y");
		$group_id = $parent;
		if(strstr($node, "-")){
			$mod = explode("-", $node);
			$module_id = $mod[1];			
		}else{
			$module_id = $node;
		}
		$q = $this->db->query("SELECT * FROM $this->tbl_gmenu2 WHERE GROUP_ID='$group_id' AND MODULE_ID='$module_id'");
		if($q->num_rows() > 0){
			return false;
		}else{
			$sql = "INSERT INTO $this->tbl_gmenu2(GROUP_ID, MODULE_ID, STATUS, DESCRIPTION, CREATED_DATE, CREATED_BY) VALUES($group_id, $module_id, 1, '', now(), $user_id)";
			
			if($this->db->query($sql)){
				/* insert for exist user group */
				$get_user	= $this->get_user_group($group_id);
				if(!empty($get_user)){
					foreach($get_user as $r){
						$user_group	= $r['USER_ID'];
						$sql_ins	= "insert into $this->tbl_primodule
										(user_id, module_id, has_view, date_create, create_by, group_id)
										values
										($user_group,$module_id,1,sysdate,$user_id,$group_id)";
						$this->db->query($sql_ins);
						$check		= $this->check_user_primodule_9994($user_group,$module_id);
						if($check->num_rows()==0){
							$sql_mod = "insert into $this->tbl_primodule
									(user_id, module_id, has_view, date_create, create_by, group_id)
									values
									($user_group,$module_id,1,sysdate,$user_id,9994)";
							$this->db->query($sql_mod);
						}
					}
				}
				return true;
			}else{
				return false;
			}
		}
	}
 
	function get_user_group($group_id){
		$sql	= "select user_id from $this->tbl_guser where group_id=$group_id";
		//var_dump($sql);exit;
		return $this->db->query($sql)->result_array();
	}
	
	function check_user_primodule_9994($user_id,$module_id){
		$this->db->where('user_id', $user_id);
		$this->db->where('module_id', $module_id);
		$this->db->where('group_id', 9994);
		return $this->db->get($this->tbl_primodule);
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
	
	
	function delGroup($groupId){
		/* delete app_group */
		$this->db->where('ID',$groupId);
		$delGroup = $this->db->delete($this->tbl_group);
		
		/* delete app_brand_to_group */
		$this->db->where('GROUP_ID',$groupId);
		$delBGroup = $this->db->delete($this->tbl_bgroup);
		
		/* delete app_group_to_user */
		$this->db->where('GROUP_ID',$groupId);
		$delGroupUsr = $this->db->delete($this->tbl_guser);
		
		/* delete app_privilege_module_ext2 */
	$sqlModExt = "delete from $this->tbl_detail2 where module_id in(
					select module_id from $this->tbl_gmenu2 where group_id=$groupId) and app_user_id not in(
					select distinct user_id
					  from $this->tbl_primodule
					 where group_id not in ($groupId, 9994)
					   and module_id in
						   (select module_id from $this->tbl_gmenu2 where group_id = $groupId))
					and app_group_id in(9994,$groupId)"; 
 
						 
		$delModExt = $this->db->query($sqlModExt);			
		
 
	$sqlMod ="DELETE APP_PRIVILEGE_MODULE FROM APP_PRIVILEGE_MODULE  
						 INNER JOIN APP_GROUP_TO_MENU B
							ON B.MODULE_ID = APP_PRIVILEGE_MODULE.MODULE_ID AND B.GROUP_ID = $groupId
						 INNER JOIN APP_PRIVILEGE_MODULE C 	
							ON APP_PRIVILEGE_MODULE.USER_ID <> C.USER_ID
							AND C.GROUP_ID NOT IN ($groupId, 9994)
							AND C.MODULE_ID = B.MODULE_ID
						 WHERE APP_PRIVILEGE_MODULE.GROUP_ID IN (9994, $groupId)";
		$delMod = $this->db->query($sqlMod);
		
		/* delete app_group_to_menu2 */
		$this->db->where('GROUP_ID',$groupId);
		$delGroupMenu = $this->db->delete($this->tbl_gmenu2);
		
		if($delGroup && $delBGroup && $delGroupUsr && $delModExt && $delMod && $delGroupMenu){
			$result['success'] = true;
			$result['message'] = 'Group has been delete';
		}else{
			$result['success'] = false;
			$result['message'] = 'Delete group failed';
		}
		return $result;
	}
 
 
	
	function check_bymodule_parent($module,$grup,$text){
		$this->db->where('PRV_DYN_PARAMS1', $text);
		$this->db->where('module_id', $module);
		$this->db->where('app_user_id', NULL);
        $this->db->where('app_group_id', $grup);
		return $this->db->get($this->tbl_detail2);
	}
	
	function update($data,$id,$mid,$parent_id,$param1,$chk,$text){
		$this->db->where('id', $id);
		$this->db->update($this->tbl_detail2, $data);
		
		//var_dump($chk);exit;
		if ($chk=='false'){
			$this->del_privileges_user($mid,$parent_id,$param1);
		}elseif($chk=='true'){
			$this->add_privileges_user($mid,$parent_id,$param1,$text);
		}
		
		
	}	
	
	function add_privileges_user($mid,$group_id,$param1,$label){
			$userid    	= $this->dx_auth->get_user_id(); 		
		$user_id	= $this->get_user_group($group_id);
		//var_dump($user_id);exit;
		/* untuk delete user privileges karena digantinya pri default group */
		$sql_del_userpri = "delete from $this->tbl_detail2 where module_id=$mid and app_group_id=$group_id and app_user_id is not null and prv_dyn_params1='$param1'";
		//var_dump($sql_del_userpri);exit;
		$this->db->query($sql_del_userpri);
		
		if(!empty($user_id)){
			foreach($user_id as $user){
				//$uid		= $user['USER_ID'];
						$uid	=			$userid;
				$check		= $this->check_exist_pri_default($mid,$group_id,$uid,$param1);
				if($check->num_rows()==0){
					$sql_pri	= "insert into $this->tbl_detail2 
								(MODULE_ID,APP_GROUP_ID,APP_USER_ID,PRV_DYN_PARAMS1,PRV_DYN_PARAMS2,DATE_CREATE,LABEL)
							   values
								($mid,9994,$uid,'$param1','true',now(),'$label')";
					//var_dump($sql_pri);exit;
					$this->db->query($sql_pri);	
				}
			}
		}
		
	}
	
	function check_exist_pri_default($mid,$group_id,$uid,$param1){
		$this->db->where('module_id', $mid);
		$this->db->where('app_group_id',9994);
		$this->db->where('app_user_id', $uid);
		$this->db->where('prv_dyn_params1', $param1);
		return $this->db->get($this->tbl_detail2);
	}
	
	function del_privileges_user($mid,$group_id,$param1){
		$app_group_notnull	= "app_group_id is not null";
		$app_group_notin	= "app_group_id not in(2, 9994, $group_id)";
		
		$this->db->where('module_id', $mid);
		$this->db->where($app_group_notnull);
		$this->db->where('app_user_id', NULL);
		$this->db->where($app_group_notin);
		$this->db->where('prv_dyn_params2', 'true');
		$this->db->where('prv_dyn_params1', $param1);
		$result	= $this->db->get($this->tbl_detail2);
		
		$gdefault	= 9994;
		if($result->num_rows()>0){
			$gdefault	= 0;
		}
		
		$app_user	= "app_user_id is not null";
		$app_group	= array($group_id,$gdefault);
		
		$this->db->where('module_id', $mid);
		$this->db->where_in('app_group_id', $app_group);
		$this->db->where('prv_dyn_params1', $param1);
		$this->db->where($app_user);
		$this->db->delete($this->tbl_detail2); 
	}
	
	function delete($data,$id){
		$this->db->where('id', $id);
		$this->db->delete($this->tbl_detail2, $data); 
	}
	
	function add_default($data,$mid,$parent_id,$param1,$text){	
		$this->db->insert($this->tbl_detail2, $data);
		$this->add_privileges_user($mid,$parent_id,$param1,$text);
	}	
	
}
