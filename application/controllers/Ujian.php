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
		$data["nama_lengkap"] = " ";
		$data["jurusan1"] = " ";
		$data["jurusan2"] = " ";
		$data["hasil"] = " ";

		if (isset($_POST["add"])){
			$nama_lengkap = $_POST["namalengkap"];
			$jurusan1 = $_POST["jurusan1"];
			$jurusan2 = $_POST["jurusan2"];
			$hasil_ujian = intval($_POST["soal1"])+intval($_POST["soal2"])+intval($_POST["soal3"])+intval($_POST["soal4"])+intval($_POST["soal5"])+intval($_POST["soal6"])+intval($_POST["soal7"])+intval($_POST["soal8"])+intval($_POST["soal9"])+intval($_POST["soal10"]);
			$data["hasil"]=$hasil_ujian*10;

		}
		$this->load->view("templates/header",$data);
		$this->load->view("result");
		$this->load->view("templates/footer");
	}
}
