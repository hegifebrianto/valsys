<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_create_user extends CI_Model {

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
	
		$this->load->library(array('DX_Auth'));	
	}
	/* function getDepartement() {
		$sql = "select  organization_id,organization_desc from app_m_organization ";
		//var_dump($sql);exit;
		$query = $this->db->query($sql);
		return $query;
	}
	 */
	
	public function getDepartement()
    {
        $html = '';
        $sql="SELECT  ORGANIZATION_ID,ORGANIZATION_DESC FROM APP_M_ORGANIZATION ORDER BY ORGANIZATION_DESC";
		$query=  $this->db->query($sql);
         $html = "<option value='0'>Select Departement</option>";
        if ($row = $query->result_array()) {
            //$result["organization_id"] = 1;
            foreach ($row as $r) {
               // var_dump($r);
				$html .= '<option value="' . $r['ORGANIZATION_ID'] . '">' . $r['ORGANIZATION_DESC'] .'</option>';
            }
        }        
        $result["html"] = $html;
		echo json_encode($result,TRUE);
    } 
	
	public function getPosition()
    {
        $html = '';
        $sql="SELECT ID, DESCRIPTION FROM APP_M_USER WHERE MST_GROUP = 'POSITION' ORDER BY DESCRIPTION";
		$query=  $this->db->query($sql);
         $html = "<option value='0'>Select Position</option>";
        if ($row = $query->result_array()) {
            foreach ($row as $r) {
				$html .= '<option value="' . $r['ID'] . '">' . $r['DESCRIPTION'] .'</option>';
            }
        }        
        $result["html"] = $html;
		echo json_encode($result,TRUE);
    }
	
	public function getBranch()
    {
        $html = '';
        $sql="SELECT SEQ_BRANCH,BRANCH FROM APP_BRANCH ORDER BY BRANCH";
		$query=  $this->db->query($sql);
         $html = "<option value='0'>Select Branch</option>";
        if ($row = $query->result_array()) {
            foreach ($row as $r) {
				$html .= '<option value="' . $r['SEQ_BRANCH'] . '">' . $r['BRANCH'] .'</option>';
            }
        }        
        $result["html"] = $html;
		echo json_encode($result,TRUE);
    } 
	
	function _get_id($user){
		$query = $this->db->query("SELECT USER_ID FROM APP_USER WHERE USER_NAME='$user'");
		$result = $query->result_array();
		return $result[0]['USER_ID'];
	}
	
 
/* 	public function save($data)
    {
        $this->db->insert($this->table, $data);
        return $this->db->insert_id();
    } */
	 
	public function save($username,$fullname,$password, $valid_from,$valid_to,$status_user,$email,$lock_status,$nik,$position ,$branch ,$dept ,$userid )
    {
	
		$result['status']  = "OK";
		$result['success'] = TRUE;
		$result['message'] = 'Save Success !';
		$err="";
	//   $user_desc   = $this->dx_auth->get_user_desc();	
		//$userid    	= $this->dx_auth->get_user_id(); 		
		 try{				 
				 $sql = "INSERT INTO APP_USER
											  (USER_ID,
											   USER_NAME,
											   USER_DESCR,
											   PASSWORD,
											   VALID_FROM,
											   VALID_TO,
											   STATUS,
											   USER_TYPE,
											   CREATED_BY,
											   CREATED_DATE,
											   EMAIL_ID,
											   REF_ID,
											   IP_ADDRESS,
											   IS_RESET,
											   IS_LOCKED,
											   PREV_LINK,
											   NIK)
											VALUES
											  ('',
											   '$username',
											   '$fullname',
											   md5('$password'),
											   str_to_date('$valid_from', '%m-%d-%Y'),
											   str_to_date('$valid_to', ' %m-%d-%Y'),
											   '$status_user',											   
											   $userid,
											   '',
											   NOW(),
											   '$email',
											   '',
											   '',
											   '0',
											   '$lock_status',
											   '0',
											   '$nik')";
											//   var_dump( $sql);exit;
															 
		$sql   = str_replace(chr(92),"",$sql);	
		
		$this->db->query($sql);	
		$last_id = $this->db->insert_id();
		
		
		$sql2 = "INSERT INTO APP_USER_DETAIL (ID,POSITION,DEPARTEMENT,CREATE_DATE,BRANCH,CREATE_BY)VALUES($last_id,$position,$dept ,NOW(),$branch,$userid)";
		$sql2   = str_replace(chr(92),"",$sql2);	
		$this->db->query($sql2);	
		
		
		$stat=1;
		$result['status'] = 1;			
	
		$result['err']='Save Success.';
		}catch (Exception $e) {                   
                   $result = array("status" => 0, "error" => $e->getMessage());
                  // Zend_Registry::get('db')->rollBack();
				   $result['err']="Insert Failed";
				   
		}								
					
		echo json_encode($result,TRUE); 
    } 
	
	
	public function update($username,$fullname,$password, $valid_from,$valid_to,$status_user,$email,$lock_status,$nik,$position ,$branch ,$dept )
    {
	
		$result['status']  = "OK";
		$result['success'] = TRUE;
		$result['message'] = 'Update Success !';
		$err="";
		$user_desc   = $this->dx_auth->get_user_desc();	
		$userid    	= $this->dx_auth->get_user_id(); 		
	//	 
	//print_r($password);
		 try{		
	
			if(!empty($password)){
				if($password=='x9999999x'){//x9999999x
					$sql = "UPDATE APP_USER SET USER_DESCR = '$fullname', VALID_FROM =  str_to_date('$valid_from', '%m-%d-%Y'), VALID_TO =  str_to_date('$valid_to', '%m-%d-%Y'), STATUS = '$status_user', LAST_UPD_BY ='$userid', LAST_UPD_DATE = NOW(), EMAIL_ID = '$email', IS_LOCKED = '$lock_status' WHERE USER_NAME='$username'";
			//	var_dump($sql);exit;
						$sql   = str_replace(chr(92),"",$sql);	
					$this->db->query($sql);						
				}else{
						$sql = "UPDATE APP_USER SET	USER_DESCR = '$fullname', PASSWORD =  md5('$password'), VALID_FROM =  str_to_date('$valid_from', '%m-%d-%Y'), VALID_TO =str_to_date('$valid_to', '%m-%d-%Y'), STATUS = '$status_user', LAST_UPD_BY ='$userid', LAST_UPD_DATE = NOW(), EMAIL_ID = '$email', IS_LOCKED = '$lock_status' WHERE USER_NAME='$username'";
					$sql   = str_replace(chr(92),"",$sql);	 
				
				}
			
			
			
			}else{				
					//$pass = $this-> md5('$password');
					$sql = "UPDATE APP_USER SET	USER_DESCR = '$fullname', PASSWORD =  md5('$password'), VALID_FROM =  str_to_date('$valid_from','%m-%d-%Y'), VALID_TO =str_to_date('$valid_to', '%m-%d-%Y'), STATUS = '$status_user', LAST_UPD_BY ='$userid', LAST_UPD_DATE = NOW(), EMAIL_ID = '$email', IS_LOCKED = '$lock_status' WHERE USER_NAME='$username'";
					$sql   = str_replace(chr(92),"",$sql);	 
							$this->db->query($sql);
			}
		
	
			$id = $this->_get_id($username);
			$check = $this->db->query("SELECT * FROM APP_USER_DETAIL WHERE ID='$id'");
			if($check->num_rows()>0){
				$sql2 = "UPDATE APP_USER_DETAIL  SET POSITION = '$position' ,DEPARTEMENT = '$dept' ,BRANCH =$branch , UPDATE_DATE = NOW(), UPDATE_BY ='$userid'  WHERE ID=	$id   ";//ID,POSITION,DEPARTEMENT,CREATE_DATE,BRANCH
			//	var_dump($sql2);exit;
			}else{
				$last_id = $this->db->insert_id();
					$sql2 = "INSERT INTO APP_USER_DETAIL (ID,POSITION,DEPARTEMENT,CREATE_DATE,BRANCH,CREATE_BY)VALUES($last_id,$position,$dept ,NOW(),$branch,$userid)";
			}			
															 
		
			
			$this->db->query($sql2);
			$stat=1;
			$result['status'] = 1;			
		
			$result['err']='Update Success.';
			}catch (Exception $e) {                   
					   $result = array("status" => 0, "error" => $e->getMessage());
					  // Zend_Registry::get('db')->rollBack();
					   $result['err']="Update Failed";
					   
			}			
			echo json_encode($result,TRUE); 
    }
	
	function getSearchUsername($username){
	
			$sql =  "SELECT * FROM APP_V_USER WHERE user_name = '$username'";
			//var_dump($sql );exit;
			$query=  $this->db->query($sql);
			
			//var_dump($query );exit;
			
		 	if($query->num_rows()==1){
				$result['hasil'] = 1;	
				$result =  $query->row_array();
				echo json_encode($result,TRUE);
				
			}else{
				$result = 0;	
				echo json_encode($result,TRUE);
			} 
	
	}
	
	function all()
	{
		$sql = "select * from notes_prospect";
		$query=  $this->db->query($sql);

		var_dump($query->result_array());
		//return $query;
	}
	
	function get_lastinsert_id()
	{
		$sql = "SELECT USER_ID FROM APP_USER WHERE USER_ID!='99999999' AND USER_ID!='7777'   ORDER BY USER_ID DESC  LIMIT  1 ";
		$query	  =  $this->db->query($sql);
		$last_id  = $query->result_array();
		return $last_id[0]['USER_ID'];
		//return $query;
	}
}
