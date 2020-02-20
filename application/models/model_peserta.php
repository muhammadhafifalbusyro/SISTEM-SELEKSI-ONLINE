<?php 
class Model_peserta extends CI_Model{
	public function tambah_data_peserta($value)
	{
		$data = array(
			"id" => null,
			"nama_lengkap" => $value["nama_lengkap"],
			"jurusan1" => $value["jurusan1"],
			"jurusan2" => $value["jurusan2"],
			"nilai_ujian" => $value["hasil"],
			"role" => 1
		);

		$this->db->insert("peserta", $data); 
		return $this->db->affected_rows();
	}

	public function get_data_peserta()
	{
		$this->db->from("peserta");
		$this->db->order_by("nilai_ujian desc, nama_lengkap asc");
		$query = $this->db->get();

		$data_peserta=[];
		foreach ($query->result_array() as $value) {
			$data_peserta[] =
			[
				"id"=> $value["id"],
				"nama_lengkap"=> $value["nama_lengkap"],
				"jurusan1"=> $value["jurusan1"],
				"jurusan2"=> $value["jurusan2"],
				"nilai_ujian"=> $value["nilai_ujian"],
				"role" => $value["role"]
			];
		}

		return $data_peserta;
	}
	public function delete_data_peserta($id)
	{
		$this->db->delete('peserta', array('id' => $id)); 
	}
	public function tambah_data_frontend($value)
	{
		$data = array(
			"id" => $value["id"],
			"nama_lengkap" => $value["nama_lengkap"],
			"jurusan1" => $value["jurusan1"],
			"jurusan2" => $value["jurusan2"],
			"nilai_ujian" => $value["nilai_ujian"],
			"role" => $value["role"]
		);

		$this->db->insert("frontend", $data); 
		return $this->db->affected_rows();
	}
	public function get_data_frontend()
	{
		$this->db->from("frontend");
		$this->db->order_by("nilai_ujian desc, nama_lengkap asc");
		$query = $this->db->get();

		$data_frontend = [];
		foreach ($query->result_array() as $key=>$value) {
			$data_frontend[] =
			[	
				"id"=> $value["id"],
				"nama_lengkap"=> $value["nama_lengkap"],
				"jurusan1"=> $value["jurusan1"],
				"jurusan2"=> $value["jurusan2"],
				"nilai_ujian"=> $value["nilai_ujian"],
				"role" => $value["role"]
			];
		}

		return $data_frontend;
	}
	public function delete_data_frontend($id)
	{
		$this->db->delete('frontend', array('id' => $id)); 
	}
	public function tambah_data_backend($value)
	{
		$data = array(
			"id" => $value["id"],
			"nama_lengkap" => $value["nama_lengkap"],
			"jurusan1" => $value["jurusan1"],
			"jurusan2" => $value["jurusan2"],
			"nilai_ujian" => $value["nilai_ujian"],
			"role" => $value["role"]
		);

		$this->db->insert("backend", $data); 
		return $this->db->affected_rows();
	}
	public function get_data_backend()
	{
		$this->db->from("backend");
		$this->db->order_by("nilai_ujian desc, nama_lengkap asc");
		$query = $this->db->get();

		$data_backend = [];
		foreach ($query->result_array() as $key=>$value) {
			$data_backend[] =
			[	
				"id"=> $value["id"],
				"nama_lengkap"=> $value["nama_lengkap"],
				"jurusan1"=> $value["jurusan1"],
				"jurusan2"=> $value["jurusan2"],
				"nilai_ujian"=> $value["nilai_ujian"],
				"role" => $value["role"]
			];
		}

		return $data_backend;
	}
	public function delete_data_backend($id)
	{
		$this->db->delete('backend', array('id' => $id)); 
	}
	public function tambah_data_mobile($value)
	{
		$data = array(
			"id" => $value["id"],
			"nama_lengkap" => $value["nama_lengkap"],
			"jurusan1" => $value["jurusan1"],
			"jurusan2" => $value["jurusan2"],
			"nilai_ujian" => $value["nilai_ujian"],
			"role" => $value["role"]
		);

		$this->db->insert("mobile", $data); 
		return $this->db->affected_rows();
	}
	public function get_data_mobile()
	{
		$this->db->from("mobile");
		$this->db->order_by("nilai_ujian desc, nama_lengkap asc");
		$query = $this->db->get();

		$data_mobile = [];
		foreach ($query->result_array() as $key=>$value) {
			$data_mobile[] =
			[	
				"id"=> $value["id"],
				"nama_lengkap"=> $value["nama_lengkap"],
				"jurusan1"=> $value["jurusan1"],
				"jurusan2"=> $value["jurusan2"],
				"nilai_ujian"=> $value["nilai_ujian"],
				"role" => $value["role"]
			];
		}

		return $data_mobile;
	}
	public function delete_data_mobile($id)
	{
		$this->db->delete('mobile', array('id' => $id)); 
	}
}