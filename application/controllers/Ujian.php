<?php 

class Ujian extends CI_Controller{
	public function __construct()
	{
		parent::__construct();
		$this->load->model("model_peserta");
		$this->load->library("session");
	}
	public function login()
	{
		if(isset($_SESSION["login"])){
			redirect(base_url()."/ujian/soalujian");
		}
		$data["kodedefault"]= "seleksijurusan";
		$data["alert"] = "";
		if (isset($_POST["masuk"])){
			if($data["kodedefault"] == $_POST["kode"]){
				$_SESSION["login"] = true;
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
		if(!isset($_SESSION["login"])){
			redirect(base_url()."/ujian/login");
		}
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

		if (isset($_POST["add"])&&isset($_SESSION["login"])){
			$id = null;
			$data["nama_lengkap"] = $_POST["namalengkap"];
			$data["jurusan1"] = $_POST["jurusan1"];
			$data["jurusan2"] = $_POST["jurusan2"];
			$hasil_ujian = intval($_POST["soal1"])+intval($_POST["soal2"])+intval($_POST["soal3"])+intval($_POST["soal4"])+intval($_POST["soal5"])+intval($_POST["soal6"])+intval($_POST["soal7"])+intval($_POST["soal8"])+intval($_POST["soal9"])+intval($_POST["soal10"]);
			$data["hasil"]= $hasil_ujian*10;

			$this->model_peserta->tambah_data($id, $data);

			$_SESSION["nama_lengkap"] = $_POST["namalengkap"];
			$_SESSION["jurusan1"] = $_POST["jurusan1"];
			$_SESSION["jurusan2"] = $_POST["jurusan2"];
			$_SESSION["hasil"] = $data["hasil"];

		}
		elseif (isset($_POST["kembali"])&&isset($_SESSION["login"])) {
			$_SESSION= [];
			session_unset();
			session_destroy();

			redirect(base_url()."beranda");
		}
		elseif(!isset($_SESSION["login"])){
			redirect(base_url()."ujian/login");
		}

		$this->load->view("templates/header",$data);
		$this->load->view("result");
		$this->load->view("templates/footer");
		..
	}
}
