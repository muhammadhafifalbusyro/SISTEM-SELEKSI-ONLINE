<?php 
class Model_mobdev extends CI_Model{
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
}

 ?>