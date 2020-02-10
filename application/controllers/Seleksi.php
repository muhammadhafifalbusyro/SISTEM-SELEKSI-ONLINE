<?php  

class Seleksi extends CI_Controller{
	public function index()
	{
		$this->load->view("templates/header");
		$this->load->view("beranda");
		$this->load->view("templates/footer");
	}
}