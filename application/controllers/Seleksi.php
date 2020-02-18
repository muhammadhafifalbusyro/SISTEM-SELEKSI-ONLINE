<?php  

class Seleksi extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->model("model_frontdev");
		$this->load->model("model_backdev");
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
		$this->load->view("templates/header",$data);
		$this->load->view("seleksi_frontdev");

	}
	public function backdev()
	{
		$data["page"] = "seleksi";
		$data["value_data_peserta"] = $this->model_frontdev->get_data_peserta();

		$this->load->view("templates/header",$data);
		$this->load->view("seleksi_backdev");
	}
	public function mobdev()
	{
		$data["page"] = "seleksi";
		$this->load->view("templates/header",$data);
		$this->load->view("seleksi_mobdev");
	}
}