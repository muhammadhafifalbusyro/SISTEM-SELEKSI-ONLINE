<?php 

class Ujian extends CI_Controller{
	public function login()
	{
		$data["kodedefault"]= "seleksijurusan";
		if (isset($_POST["masuk"])){
			if($data["kodedefault"] == $_POST["kode"]){
				redirect(base_url()."/ujian/soalujian");
			}
		}
		$data["page"] = "ujian";
		$this->load->view("templates/header",$data);
		$this->load->view("ujian");
		$this->load->view("templates/footer");
	}

	public function soalujian()
	{
		$data["page"] = "ujian";
		$this->load->view("templates/header",$data);
		$this->load->view("soalujian");
		$this->load->view("templates/footer");
	}
	public function result()
	{
		$data["page"] = "ujian";
		$data["all"]=[];
		if (isset($_POST["add"])){
			$data["all"]= $_POST;
		}
		$this->load->view("templates/header",$data);
		$this->load->view("result");
		$this->load->view("templates/footer");
	}
}
