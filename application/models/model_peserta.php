<?php 

class Model_peserta extends CI_Model{
	public function tambah_data($value)
	{
		$data = array(
			"id" => null,
			"nama_lengkap" => $value["nama_lengkap"],
			"jurusan1" => $value["jurusan1"],
			"jurusan2" => $value["jurusan2"],
			"nilai_ujian" => $value["hasil"]
		);

		$this->db->insert("peserta", $data); 
		return $this->db->affected_rows();
	}
}

?>