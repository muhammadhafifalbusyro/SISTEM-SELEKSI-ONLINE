<?php 

class Ujian extends CI_Controller{
	public function __construct()
	{
		parent::__construct();
		$this->load->model("model_peserta");
		$this->load->model("model_admin");
		$this->limit = $this->model_admin->get_data_limit();
		$this->frontend_limit = $this->limit["frontend"];
		$this->backend_limit = $this->limit["backend"];
		$this->mobile_limit = $this->limit["mobile"];
		$this->load->library("session");
	}
	public function login()
	{
		if(isset($_SESSION["login"])){
			redirect(base_url()."/ujian/soalujian");
		}
		$data["kodedefault"]= "seleksijurusan";
		$data["kodeadmin"] = "adminseleksi";

		$data["alert"] = "";
		if (isset($_POST["masuk"])){
			if($data["kodedefault"] == $_POST["kode"]){
				$_SESSION["login"] = true;
				redirect(base_url()."/ujian/soalujian");
			}
			elseif($data["kodeadmin"] == $_POST["kode"]){
				$_SESSION["loginadmin"] = true;
				redirect(base_url()."admin");
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
		elseif (isset($_POST["add"])&&isset($_SESSION["login"])){
			$data["nama_lengkap"] = $_POST["namalengkap"];
			$data["jurusan1"] = $_POST["jurusan1"];
			$data["jurusan2"] = $_POST["jurusan2"];
			$hasil_ujian = intval($_POST["soal1"])+intval($_POST["soal2"])+intval($_POST["soal3"])+intval($_POST["soal4"])+intval($_POST["soal5"])+intval($_POST["soal6"])+intval($_POST["soal7"])+intval($_POST["soal8"])+intval($_POST["soal9"])+intval($_POST["soal10"]);
			$data["hasil"]= $hasil_ujian*10;

			$data["value"] = $this->model_peserta->tambah_data_peserta($data);

			$_SESSION["nama_lengkap"] = $_POST["namalengkap"];
			$_SESSION["jurusan1"] = $_POST["jurusan1"];
			$_SESSION["jurusan2"] = $_POST["jurusan2"];
			$_SESSION["hasil"] = $data["hasil"];



			//meletakan data pada tabel jurusan1 yang ditentukan

			$data_peserta = $this->model_peserta->get_data_peserta();

			foreach ($data_peserta as $value) {
				if ($value["jurusan1"]=== "Front End Division") {

					$data_value["id"] = $value["id"];
					$data_value["nama_lengkap"] =$value["nama_lengkap"];
					$data_value["jurusan1"] =$value["jurusan1"];
					$data_value["jurusan2"] =$value["jurusan2"];
					$data_value["nilai_ujian"] =$value["nilai_ujian"];
					$data_value["role"] =$value["role"];


					$this->model_peserta->tambah_data_frontend($data_value);
					$this->model_peserta->delete_data_peserta($data_value["id"]);
				}
				elseif ($value["jurusan1"]=== "Back End Division") {

					$data_value["id"] = $value["id"];
					$data_value["nama_lengkap"] =$value["nama_lengkap"];
					$data_value["jurusan1"] =$value["jurusan1"];
					$data_value["jurusan2"] =$value["jurusan2"];
					$data_value["nilai_ujian"] =$value["nilai_ujian"];
					$data_value["role"] =$value["role"];


					$this->model_peserta->tambah_data_backend($data_value);
					$this->model_peserta->delete_data_peserta($data_value["id"]);
				}
				elseif ($value["jurusan1"]=== "Mobile Division") {

					$data_value["id"] = $value["id"];
					$data_value["nama_lengkap"] =$value["nama_lengkap"];
					$data_value["jurusan1"] =$value["jurusan1"];
					$data_value["jurusan2"] =$value["jurusan2"];
					$data_value["nilai_ujian"] =$value["nilai_ujian"];
					$data_value["role"] =$value["role"];


					$this->model_peserta->tambah_data_mobile($data_value);
					$this->model_peserta->delete_data_peserta($data_value["id"]);
				}
			}




		// karena pilihan jurusannya ada dua maka harus di ulang dua kali agar data yang masuk bisa di refresh lagi kalau tidak maka ada kemungkinan ada data yang masuk dari tabel lain belum di filter
			for ($x = 1; $x <=2; $x++) {

			// seleksi data front end
				$data_frontend = $this->model_peserta->get_data_frontend();
				$frontend_limit = $this->frontend_limit-1;

				foreach ($data_frontend as $key => $value) {
					if ($key>$frontend_limit && $value["role"]==1) {
						if ($value["jurusan2"]=="Back End Division") {
							$data_value_backend["id"] = $value["id"];
							$data_value_backend["nama_lengkap"] =$value["nama_lengkap"];
							$data_value_backend["jurusan1"] =$value["jurusan1"];
							$data_value_backend["jurusan2"] =$value["jurusan2"];
							$data_value_backend["nilai_ujian"] =$value["nilai_ujian"];
							$data_value_backend["role"] =2;

							$this->model_peserta->tambah_data_backend($data_value_backend);
							$this->model_peserta->delete_data_frontend($value["id"]);
						}
						elseif ($value["jurusan2"]=="Mobile Division") {
							$data_value_mobile["id"] = $value["id"];
							$data_value_mobile["nama_lengkap"] =$value["nama_lengkap"];
							$data_value_mobile["jurusan1"] =$value["jurusan1"];
							$data_value_mobile["jurusan2"] =$value["jurusan2"];
							$data_value_mobile["nilai_ujian"] =$value["nilai_ujian"];
							$data_value_mobile["role"] =2;

							$this->model_peserta->tambah_data_mobile($data_value_mobile);
							$this->model_peserta->delete_data_frontend($value["id"]);
						}
					}
					elseif ($key>$frontend_limit && $value["role"]==2) {
						$this->model_peserta->delete_data_frontend($value["id"]);
					}
				}

			//seleksi data backend
				$data_backend = $this->model_peserta->get_data_backend();
				$backend_limit = $this->backend_limit-1;

				foreach ($data_backend as $key => $value) {
					if ($key>$backend_limit && $value["role"]==1) {
						if ($value["jurusan2"]=="Front End Division") {
							$data_value_frontend["id"] = $value["id"];
							$data_value_frontend["nama_lengkap"] =$value["nama_lengkap"];
							$data_value_frontend["jurusan1"] =$value["jurusan1"];
							$data_value_frontend["jurusan2"] =$value["jurusan2"];
							$data_value_frontend["nilai_ujian"] =$value["nilai_ujian"];
							$data_value_frontend["role"] =2;

							$this->model_peserta->tambah_data_frontend($data_value_frontend);
							$this->model_peserta->delete_data_backend($value["id"]);
						}
						elseif ($value["jurusan2"]=="Mobile Division") {
							$data_value_mobile["id"] = $value["id"];
							$data_value_mobile["nama_lengkap"] =$value["nama_lengkap"];
							$data_value_mobile["jurusan1"] =$value["jurusan1"];
							$data_value_mobile["jurusan2"] =$value["jurusan2"];
							$data_value_mobile["nilai_ujian"] =$value["nilai_ujian"];
							$data_value_mobile["role"] =2;

							$this->model_peserta->tambah_data_mobile($data_value_mobile);
							$this->model_peserta->delete_data_backend($value["id"]);
						}
					}
					elseif ($key>$backend_limit && $value["role"]==2) {
						$this->model_peserta->delete_data_backend($value["id"]);
					}
				}

			//seleksi data mobile
				$data_mobile= $this->model_peserta->get_data_mobile();
				$mobile_limit = $this->mobile_limit-1;

				foreach ($data_mobile as $key => $value) {
					if ($key>$mobile_limit && $value["role"]==1) {
						if ($value["jurusan2"]=="Front End Division") {
							$data_value_frontend["id"] = $value["id"];
							$data_value_frontend["nama_lengkap"] =$value["nama_lengkap"];
							$data_value_frontend["jurusan1"] =$value["jurusan1"];
							$data_value_frontend["jurusan2"] =$value["jurusan2"];
							$data_value_frontend["nilai_ujian"] =$value["nilai_ujian"];
							$data_value_frontend["role"] =2;

							$this->model_peserta->tambah_data_frontend($data_value_frontend);
							$this->model_peserta->delete_data_mobile($value["id"]);
						}
						elseif ($value["jurusan2"]=="Back End Division") {
							$data_value_backend["id"] = $value["id"];
							$data_value_backend["nama_lengkap"] =$value["nama_lengkap"];
							$data_value_backend["jurusan1"] =$value["jurusan1"];
							$data_value_backend["jurusan2"] =$value["jurusan2"];
							$data_value_backend["nilai_ujian"] =$value["nilai_ujian"];
							$data_value_backend["role"] =2;

							$this->model_peserta->tambah_data_backend($data_value_backend);
							$this->model_peserta->delete_data_mobile($value["id"]);
						}
					}
					elseif ($key>$mobile_limit && $value["role"]==2) {
						$this->model_peserta->delete_data_mobile($value["id"]);
					}
				}
			}









		//hapus data ketika sudah melalui pemfilteran agar data data yang sudah melalui dua pemfilteran kemungkinan masih ada data yang belum terseleksi

			$frontend_limit = $this->frontend_limit-1;
			$backend_limit = $this->backend_limit-1;
			$mobile_limit = $this->mobile_limit-1;

			$del_data_frontend = $this->model_peserta->get_data_frontend();

			foreach ($del_data_frontend as $key => $value) {
				if ($key>$frontend_limit && $value["role"]==2) {
					$this->model_peserta->delete_data_frontend($value["id"]);
				}
			}
			$del_data_backend = $this->model_peserta->get_data_backend();
			foreach ($del_data_backend as $key => $value) {
				if ($key>$backend_limit && $value["role"]==2) {
					$this->model_peserta->delete_data_backend($value["id"]);
				}
			}
			$del_data_mobile = $this->model_peserta->get_data_mobile();
			foreach ($del_data_frontend as $key => $value) {
				if ($key>$mobile_limit && $value["role"]==2) {
					$this->model_peserta->delete_data_mobile($value["id"]);
				}
			}



			if ($data["value"]>0) {
				redirect(base_url()."ujian/result");
			}
			elseif($data["value"]<=0){
				echo "alert('Pengiriman data gagal')";
			}

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
