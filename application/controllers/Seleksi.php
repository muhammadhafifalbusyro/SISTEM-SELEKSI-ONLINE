<?php  

class Seleksi extends CI_Controller{

	public function index()
	{	
		$data["page"] = "seleksi";
		$this->load->view("templates/header",$data);
		$this->load->view("seleksi");
		$this->load->view("templates/footer");
	}
	public function frontdev()
	{
		$data["page"] = "seleksi";
		$this->load->view("templates/header",$data);
		$this->load->view("seleksi_frontdev");

	}
	public function backdev()
	{
		$data["page"] = "seleksi";
		$this->load->view("templates/header",$data);
		$this->load->view("seleksi_backdev");
	}
	public function mobdev()
	{
		$data["page"] = "seleksi";
		$this->load->view("templates/header",$data);
		$this->load->view("seleksi_mobdev");
	}
}