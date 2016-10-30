<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User_manager extends CI_Model {
	public function __construct(){
		parent::__construct();
	}

	public function is_login($username, $pass){
		$this->load->helper('security');
		$this->db->where('username', $username);
		$this->db->where('password', do_hash($pass, 'md5'));
		$this->db->from('user');

		$query = $this->db->get();

		if($query->num_rows() == 1){
			return $query->result();
		}else{
			return false;
		}


	}

	
}