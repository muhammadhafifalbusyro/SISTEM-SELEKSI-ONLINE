<?php 
class Model_frontdev extends CI_Model{
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
}
?>