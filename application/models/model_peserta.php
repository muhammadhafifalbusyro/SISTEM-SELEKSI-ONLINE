<?php 

class Model_peserta extends CI_Model{
	public function tambah_data()
	{
		$data = array(
			"id" => null,
			"nama_lengkap" => "Adi Hidayat",
			"jurusan1" => "Back End Division",
			"jurusan2" => "Mobile Division",
			"nilai_ujian" => 100
		);

		$this->db->insert("peserta", $data); 
	}
}

?>