<?php 
class Model_admin extends CI_Model{
	public function get_data_frontend_limit()
	{

		$query = $this->db->get("limit_jurusan");

		$data_jurusan = [];
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