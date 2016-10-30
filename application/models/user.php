<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Model {
	public function __construct(){
		parent::__construct();
	}

	public function tambah_user($tableName, $data)
	{
		$result = $this->db->insert($tableName, $data);

		return $result;
	}

	public function update_user($tableName, $data)
	{
		$id = array(
				'id'=>$data['id']
			);
		$data = array(
				'nama_lengkap'=>$data['nama_lengkap'],
				'email'=>$data['email']
			);

		$result = $this->db->update($tableName, $data, $id);

		return $result;
	}

	public function delete_user($tableName, $data){
		if(is_array($data)){
			if(! is_null($data)){
				$result =  $this->db->delete($tableName,$data);

				return $result;
			}
		}
	}

	public function getUserList($per_page, $segment)
	{
		$result = $this->db->get('user', $per_page, $segment)->result_array();

		return $result;

	}

	public function getUser($where = "")
	{
		$data = $this->db->query('select * from user '.$where );

		return $data->result_array();
	}

	public function getTotalRows()
	{
		$result = $this->db->get('user')->num_rows();

		return $result;
	}
}