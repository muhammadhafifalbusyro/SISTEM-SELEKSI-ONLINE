<?php 

class Ujian extends CI_Controller{
	public function login()
	{
		$data["kodedefault"]= "seleksijurusan";
		if (isset($_POST["masuk"])){
			if($data["kodedefault"] == $_POST["kode"]){
				$data["kodedefault"] ="asdfnkasdfksdafkasdfjkas";
			}
		}
		$data["page"] = "ujian";
		$this->load->view("templates/header",$data);
		$this->load->view("ujian");
		$this->load->view("templates/footer");
	}
}
