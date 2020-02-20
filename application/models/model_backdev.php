<?php 
class Model_backdev extends CI_Model{
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

}
?>