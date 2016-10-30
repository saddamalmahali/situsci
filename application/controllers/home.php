<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

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
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		if($this->check_login()){
			$data = array(
				"content"=> "<h2>Halo ini adalah page home</h2>"
			);
		$this->load->view('template/main', $data);
		}else{
			redirect('login');
		}
	}

	public function mwc()
	{
		$data = array(
				"content"=> $this->load->view('welcome_message', array(), true).site_url(uri_string())
			);
		$this->load->view('template/main', $data);
	}

	private function check_login(){
		if($this->session->userdata('logged_in')==1){
			return true;
		}else{
			return false;
		}
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */