<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Auth_item extends CI_Model {
	
	public function __construct(){
		parent::__construct();
	}

	public function create_data($tableName, $data)
	{
		$result = $this->db->create($tableName, $data);

		return $result;
	}

	public function update_data($tableName, $data, $where)
	{
		$result = $this->db->update($tableName, $data, $where);

		return $result;
	}

	public function delete_data($tableName, $id)
	{
		$result = $this->db->delete($tableName, $id);

		return $result;
		
	}

	public function tambah_role($tableName, $data)
	{
		$result = $this->db->insert($tableName, $data);

		return $result;
	}

	public function tambah_auth($tableName, $data)
	{
		$result = $this->db->insert($tableName, $data);
		return $result;
	}

	public function getListRole(){
		
		$result = $this->db->query('select id, name, type, description from auth_item where type=1')->result_array();

		return $result;
	}

	public function getRole($id){
		$this->db->where('id', $id);
		$this->db->from('auth_item');
		$result = $this->db->get()->result_array();

		return $result;
	}
}