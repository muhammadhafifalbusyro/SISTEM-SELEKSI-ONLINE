<?php 

class Ujian extends CI_Controller{
	public function login()
	{
		$data["page"] = "ujian";
		$this->load->view("templates/header",$data);
		$this->load->view("ujian");
		$this->load->view("templates/footer");
	}
}