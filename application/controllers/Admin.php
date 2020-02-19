<?php 
class Admin extends CI_Controller{
	public function __construct()
	{
		parent::__construct();
		$this->load->library("session");
		$this->load->model("model_admin");
	}
	public function index()
	{
		$data["page"] = "admin";
		$data["limit"] = $this->model_admin->get_data_limit();


		if(!isset($_SESSION["loginadmin"])){
			redirect(base_url()."ujian/login");
		}


		elseif (isset($_POST["logout"])&&isset($_SESSION["loginadmin"])) {
			$_SESSION= [];
			session_unset();
			session_destroy();

			redirect(base_url()."ujian/login");
		}

		elseif (isset($_POST["ubah"])&&isset($_SESSION["loginadmin"])) {
			$data["id"] = $data["limit"]["id"];
			$data["frontend"] = $_POST["frontend"];
			$data["backend"] = $_POST["backend"];
			$data["mobile"] = $_POST["mobile"];

			
			$result = $this->model_admin->update_limit($data);
			if ($result >= 0 ) {
				echo "<script>
				alert('Data berhasil dirubah');
				window.location.href='admin';
				</script>";
			}
			elseif ($result < 0 ) {
				echo "<script>
				alert('Limit gagag dirubah')
				</script>";
			}
		}

		

		$this->load->view("templates/header",$data);
		$this->load->view("dashboard",$data);
		$this->load->view("templates/footer");
	}
}


