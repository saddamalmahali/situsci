<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

public function show_in_front($content)
{
	$this->load->view('template/main', $content);
}