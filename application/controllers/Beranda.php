<?php
class Beranda extends CI_Controller {

	 function index()
	{
		$data["page"] = "beranda";
		$this->load->view("templates/header",$data);
		$this->load->view("beranda");
		$this->load->view("templates/footer");
	}
}

