<?php 
class Model_backdev extends CI_Model{
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
				"nilai_ujian"=> $value["nilai_ujian"]

			];
		}

		return $data_peserta;
	}

}

 ?>