<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Auth_manager extends CI_Controller
{
	
	public function index()
	{
		$this->load->library('encrypt');
		// if($this->check_login()){
		// 	$this->load->library('rule_interfaces');
		// 	$this->load->model('auth_item');

		// 	$auth = $this->auth_item->getListRole();



		// 	$data = array(
		// 		"content"=>$this->load->view($this->rule_interfaces->RULE_AUTH_MANAGER_INDEX, array('auth'=>$auth), true)
		// 	);

		// 	$this->show_in_front($data);
		// }else{
		// 	redirect('login');
		// }
		$msg = 'My secret message';

		$encrypted_string = $this->encrypt->encode($msg);

		echo $encrypted_string." <br />";

		$plaintext_string = $this->encrypt->decode($encrypted_string);
		echo $plaintext_string;
	}

	public function list_auth(){
		$this->load->model('auth_item');

		$data = $this->auth_item->getListRole();

		print_r($data);
	}

	public function tambah()
	{
		$this->load->library('rule_interfaces');
		$data = array(
				'content' => $this->load->view($this->rule_interfaces->RULE_AUTH_MANAGER_CREATE_VIEW, array(), true)
			);
		$this->show_in_front($data);
	}

	public function update_auth($id){
		$this->load->model('auth_item');
		$this->load->library('rule_interfaces');
		$hasil = $this->auth_item->getRole($id);
		$data = array(
				'content' => $this->load->view($this->rule_interfaces->RULE_AUTH_MANAGER_UPDATE_VIEW, array('auth'=>$hasil), true)
			);
		$this->show_in_front($data);

	}

	

	public function update_data()
	{
		$this->load->model('auth_item');

		$name = $this->input->post('name');
		$tipe = $this->input->post('tipe');
		$id = $this->input->post('id');
		$deskripsi = $this->input->post('deskripsi');

		$data = array(
				'name'=> $name,
				'type'=> $tipe,
				'description'=> $deskripsi,
				'updated_at'=> date("Y-m-d h:i:sa")
			);
		$id = array(
				'id'=>$id
			);

		$hasil = $this->auth_item->update_data('auth_item', $data, $id );

		if($hasil >= 1){
			redirect('auth_manager');
		}else{
			echo "Update Data Gagal";
		}

		// $hasil = $this->auth_item->tambah_role('auth_item', $data);

		// if($hasil >= 1){
		// 	redirect('auth_manager');
		// }else{
		// 	echo "Tambah Data Gagal";
		// }
		
	}

	public function check_validation(){

	}

	public function tambah_auth()
	{
		$this->load->library('form_validation');

		// $nama = "admin";
		// $tipe = 1;
		// $deskripsi = "Coba";
		// $data = array(
		// 	'name'=>$nama,
		// 	'type'=>$tipe,
		// 	'description'=>$deskripsi,
		// 	'created_at'=>now(),
		// 	);
		// $this->db->insert('auth_item',$data);


		$this->form_validation->set_rules('name', 'Nama Auth', 'trim|required');
		$this->form_validation->set_rules('deskripsi', 'Deskripsi', 'trim|required');
		$this->form_validation->set_message('required', '%s Tidak Boleh Kosong');

		if($this->form_validation->run() ==  false){
			return $this->tambah();
		}else{
			$this->load->model('auth_item');
			$name = $this->input->post('name');
			$tipe = $this->input->post('tipe');
			
			$deskripsi = $this->input->post('deskripsi');
			$data = array(
					'name'=> $name,
					'type'=> $tipe,
					'description'=> $deskripsi,
					'created_at'=> date("Y-m-d h:i:sa")
				);

			$hasil = $this->auth_item->tambah_role('auth_item', $data);

			if($hasil >= 1){
				redirect('auth_manager');
			}else{
				echo "Tambah Data Gagal";
			}
		}
	}


	
	private function show_in_front($content){
		$this->load->view('template/main', $content);	
	}

	private function check_login(){
		if($this->session->userdata('logged_in')==1){
			return true;
		}else{
			return false;
		}
	}
}
