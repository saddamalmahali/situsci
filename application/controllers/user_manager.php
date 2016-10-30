<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User_manager extends CI_Controller
{
	public function index($page='')
	{
		if($this->session->userdata('logged_in') ==1 ){
			$this->load->model('user');
			//config pagination
			$config['base_url'] = base_url()."index.php/user_manager/index";
			$config['total_rows'] = $this->user->getTotalRows();
			$config['per_page'] = 10;

			//config style pagination
			$config['next_link'] = '<span class="font-icon font-icon-arrow-right"></span>';
			$config['next_tag_open'] = '<li class="page-next">';
			$config['next_tag_close'] = '</li>';
			$config['prev_link'] = '<span class="font-icon font-icon-arrow-left"></span>';
			$config['prev_tag_open'] = '<li class="page-prev">';
			$config['prev_tag_close'] = '</li>';
			$config['num_tag_open'] = '<li class="page-number">';
			$config['num_tag_close'] = '</li>';
			$config['full_tag_open'] = '<ul class="pagination">';
			$config['full_tag_close'] = '</ul>';
			$config['cur_tag_open'] = '<li class="page-number active"> <a href="javascript:void(0)">';
			$config['cur_tag_close'] = '</a></li>';

			$this->pagination->initialize($config);
			$user = $this->user->getUserList($config['per_page'], $this->uri->segment(3));
			
			$data = array(
					'content'=>$this->load->view('admin/user-manager/index', array('users'=>$user,'browser'=>$this->agent->browser().$this->agent->version()), true)
				);

			$this->load->view('template/main', $data);
		}else{
			redirect('login');
		}
	}

	public function tambah()
	{
		$data = array(
				"content"=> $this->load->view('admin/user-manager/tambah', array(), true)
			);
		$this->load->view('template/main', $data);

	}

	public function update($id)
	{
		$this->load->model('user');
		$data = $this->user->getUser(" where id='$id'");
		$user = array(
				'id'=>$data[0]['id'],
				'nama_lengkap'=>$data[0]['nama_lengkap'],
				'username'=>$data[0]['username'],
				'email'=>$data[0]['email']
			);

		$edit = array(
				'content'=>$this->load->view('admin/user-manager/update', $user, true)
			);

		$this->load->view('template/main', $edit);
	}

	public function delete_data($id = ''){

		$data = array(
				'id'=>$id
			);

		$this->hapus_data($data);

	}

	private function hapus_data($data){
		$this->load->model('user');
		
		$result = $this->user->delete_user('user',$data);

		if($result >= 1 ){
			redirect("user_manager");
		}else{
			echo "Penambahan Gagal";
		}
		

	}

	public function update_data(){
		$this->load->model('user');

		$nama_lengkap = $_POST['nama_lengkap'];
		$email = $_POST['email'];
		$id = $_POST['id'];

		$data = array(
			'nama_lengkap'=>$nama_lengkap,
			'email'=>$email,
			'id'=>$id
		);

		$result = $this->user->update_user('user', $data);

		if($result >= 1 ){
			redirect("user_manager");
		}else{
			echo "Penambahan Gagal";
		}

	}

	public function tambah_data(){
		$this->load->helper('security');
		$this->load->model('user');

		$pass = $_POST['password'];
		$pass = do_hash($pass, 'md5');
		$nama_lengkap = $_POST['nama_lengkap'];
		$username = $_POST['username'];
		$email = $_POST['email'];

		$data = array(
				'nama_lengkap'=>$nama_lengkap,
				'username'=>$username,
				'password'=>$pass,
				'email'=>$email,
			);

		$hasil = $this->user->tambah_user('user', $data);

		if($hasil >= 1 ){
			redirect("user_manager");
		}else{
			echo "Penambahan Gagal";
		}



		// $this->load->model('user');

		// $data = array(
		// 		'nama_lengkap'=>'Jafar Al Khowarizmin',
		// 		'username'=>'jafar',
		// 		'password'=>'jafar',
		// 		'email'=>'jafar@test.com',
		// 	);

		// $hasil = $this->user->tambah_user('user', $data);

		// if($hasil >= 1){
		// 	echo "<h2>Penambahan User Berhasil</h2>";
		// }else{
		// 	echo "<h2>Penambahan User Gagal</h2>";
		// }
	}

}