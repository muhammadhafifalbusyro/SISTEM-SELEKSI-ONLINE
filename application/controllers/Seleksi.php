<?php  
class Seleksi extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->model("model_frontdev");
		$this->load->model("model_backdev");
		$this->load->model("model_mobdev");
	}
	public function index()
	{	
		$data["page"] = "seleksi";
		$this->load->view("templates/header",$data);
		$this->load->view("seleksi");
		$this->load->view("templates/footer");
	}
	public function frontdev()
	{
		$data["page"] = "seleksi";
		$data_frontend = $this->model_frontdev->get_data_frontend();
		$data["data_frontend"]= $data_frontend;
		$this->load->view("templates/header",$data);
		$this->load->view("seleksi_frontdev",$data);

	}
	public function backdev()
	{
		$data["page"] = "seleksi";
		$data_backend = $this->model_backdev->get_data_backend();
		$data["data_backend"] = $data_backend;
		$this->load->view("templates/header",$data);
		$this->load->view("seleksi_backdev",$data);
	}
	public function mobdev()
	{
		$data["page"] = "seleksi";
		$data_mobile = $this->model_mobdev->get_data_mobile();
		$data["data_mobile"]=$data_mobile;
		$this->load->view("templates/header",$data);
		$this->load->view("seleksi_mobdev",$data);
	}
}
?>