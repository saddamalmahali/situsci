<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {
	
	public function index()
	{
		if($this->session->userdata('logged_in') == 1){
			redirect('user_manager');
		}else{
			$this->load->view('login');
		}
	}

	public function log(){
		$this->load->library('form_validation');
		$this->form_validation->set_error_delimiters('<div class="alert alert-danger alert-no-border alert-close alert-dismissible fade in" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
							<i class="font-icon font-icon-inline font-icon-warning"></i>
							<strong>Error Dalam Login</strong><br/>', '</div>');
		$this->form_validation->set_rules('username', 'Username', 'trim|required|callback_check_user_login');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|callback_check_user_login');
		$this->form_validation->set_message('required', '%s Tidak Boleh Kosong');

		if($this->form_validation->run() ==  false){
			return $this->index();
		}else{
			redirect('home');
		}
	}

	public function logout(){
		$this->session->sess_destroy();

		redirect(base_url());
	}

	public function check_user_login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$this->load->model('user_manager');
		$data = array(
				'username'=>$username,
				'password'=>$password
			);

		$result = $this->user_manager->is_login($username, $password);

		if($result){
			foreach ($result as $user) {
				$s = array();
				$s['username'] = $user->username;
				$s['password'] = $user->password;
				$s['nama_lengkap'] = $user->nama_lengkap;
				$s['logged_in'] = TRUE;
				$this->session->set_userdata($s);


			}
		}else{
			$this->form_validation->set_message('check_user_login', 'username atau password salah');
			return false;
		}
	}

}
