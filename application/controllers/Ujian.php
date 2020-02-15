<?php 

class Ujian extends CI_Controller{
	public function login()
	{
		$data["kodedefault"]= "seleksijurusan";
		$data["alert"] = "";
		if (isset($_POST["masuk"])){
			if($data["kodedefault"] == $_POST["kode"]){
				redirect(base_url()."/ujian/soalujian");
			}
			else{
				$data["alert"] = "Kode yang anda masukan salah";
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
		$data["hasil"] = 0;

		if (isset($_POST["add"])){
			$id = null;
			$data["nama_lengkap"] = $_POST["namalengkap"];
			$data["jurusan1"] = $_POST["jurusan1"];
			$data["jurusan2"] = $_POST["jurusan2"];
			$hasil_ujian = intval($_POST["soal1"])+intval($_POST["soal2"])+intval($_POST["soal3"])+intval($_POST["soal4"])+intval($_POST["soal5"])+intval($_POST["soal6"])+intval($_POST["soal7"])+intval($_POST["soal8"])+intval($_POST["soal9"])+intval($_POST["soal10"]);
			$data["hasil"]= $hasil_ujian*10;


			$this->load->model("model_peserta");
			$this->model_peserta->tambah_data($id, $data);

		}
		
		$this->load->view("templates/header",$data);
		$this->load->view("result");
		$this->load->view("templates/footer");
	}
}
