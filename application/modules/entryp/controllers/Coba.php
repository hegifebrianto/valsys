<?php
defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set('Asia/Jakarta');

class Coba extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model("m_entryp");
		/*$this->load->helper(array('url'));*/
		$this->load->helper(array('form', 'url'));
	}

public function getData(){
	$a = "af";
	var_dump($a);
	exit;
	}
}