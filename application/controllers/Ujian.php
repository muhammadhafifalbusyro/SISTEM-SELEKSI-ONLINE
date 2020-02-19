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
		$data["data_peserta"]= [];
		$data["data_frontend"]= [];

		if(!isset($_SESSION["login"])){
			redirect(base_url()."/ujian/login");
		}
		// elseif (isset($_POST["add"])&&isset($_SESSION["login"])){
		// 	$data["nama_lengkap"] = $_POST["namalengkap"];
		// 	$data["jurusan1"] = $_POST["jurusan1"];
		// 	$data["jurusan2"] = $_POST["jurusan2"];
		// 	$hasil_ujian = intval($_POST["soal1"])+intval($_POST["soal2"])+intval($_POST["soal3"])+intval($_POST["soal4"])+intval($_POST["soal5"])+intval($_POST["soal6"])+intval($_POST["soal7"])+intval($_POST["soal8"])+intval($_POST["soal9"])+intval($_POST["soal10"]);
		// 	$data["hasil"]= $hasil_ujian*10;

		// 	$data["value"] = $this->model_peserta->tambah_data_peserta($data);

		// 	$_SESSION["nama_lengkap"] = $_POST["namalengkap"];
		// 	$_SESSION["jurusan1"] = $_POST["jurusan1"];
		// 	$_SESSION["jurusan2"] = $_POST["jurusan2"];
		// 	$_SESSION["hasil"] = $data["hasil"];


		// 	if ($data["value"]>0) {
		// 		redirect(base_url()."ujian/result");
		// 	}
		// 	elseif($data["value"]<=0){
		// 		echo "alert('Pengiriman data gagal')";
		// 	}

		// }






		// $data_peserta = $this->model_peserta->get_data_peserta();
		// $data["data_peserta"] = $data_peserta;

		// foreach ($data_peserta as $value) {
		// 	if ($value["jurusan1"]=== "Front End Division") {

		// 		$data_value["id"] = $value["id"];
		// 		$data_value["nama_lengkap"] =$value["nama_lengkap"];
		// 		$data_value["jurusan1"] =$value["jurusan1"];
		// 		$data_value["jurusan2"] =$value["jurusan2"];
		// 		$data_value["nilai_ujian"] =$value["nilai_ujian"];
		// 		$data_value["role"] =$value["role"];


		// 		$this->model_peserta->tambah_data_frontend($data_value);
		// 		$this->model_peserta->delete_data_peserta($data_value["id"]);
		// 	}
		// 	elseif ($value["jurusan1"]=== "Back End Division") {

		// 		$data_value["id"] = $value["id"];
		// 		$data_value["nama_lengkap"] =$value["nama_lengkap"];
		// 		$data_value["jurusan1"] =$value["jurusan1"];
		// 		$data_value["jurusan2"] =$value["jurusan2"];
		// 		$data_value["nilai_ujian"] =$value["nilai_ujian"];
		// 		$data_value["role"] =$value["role"];


		// 		$this->model_peserta->tambah_data_backend($data_value);
		// 		$this->model_peserta->delete_data_peserta($data_value["id"]);
		// 	}
		// }






		$data_frontend = $this->model_peserta->get_data_frontend();
		
		$new=[];
		foreach ($data_frontend as $key => $value) {
			if ($key>1) {
				# code...
			}
		}
		var_dump($new);
		$data["data_frontend"] = $data_frontend;

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

		if (isset($_POST["kembali"])&&isset($_SESSION["login"])) {
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
	}
}
