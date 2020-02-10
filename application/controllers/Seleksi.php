<?php  

class Seleksi extends CI_Controller{
	public function index()
	{	$data["page"] = "seleksi";
		$this->load->view("templates/header",$data);
		$this->load->view("seleksi");
		$this->load->view("templates/footer");
	}
}