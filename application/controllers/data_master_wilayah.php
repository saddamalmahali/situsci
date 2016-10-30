<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Data_master_wilayah extends CI_Controller {

	
	public function index()
	{
		$data = array(
			"content"=>$this->load->view('admin/master-wilayah', array(), true)
		);

		$this->load->view('template/main', $data);
	}

	public function tambah()
	{
		$data = array(
			"content"=>$this->load->view('admin/master/tambah-wilayah', array(), true)
		);

		$this->load->view('template/main', $data);
	}

}
