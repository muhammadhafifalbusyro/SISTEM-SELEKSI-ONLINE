<?php 

class Model_frontdev extends CI_Model{
	public function get_data()
	{
		$query=$this->db->get("peserta");
		$rows = [];
		foreach ($query->result() as $row) {
			$rows[] =[ 
			"id"=>$row->id,
			"nama_lengkap"=>$row->nama_lengkap,
			"jurusan1"=>$row->jurusan1,
			"jurusan2"=>$row->jurusan2,
			"nilai_ujian"=>$row->nilai_ujian
		];
	}
	return $rows;
}
}


?>
<!-- "id"=$row->id;
				"nama_lengkap"=>$row->nama_lengkap,
				"jurusan1"=>$row->jurusan1,
				"jurusan2"=>$row->jurusan2,
				"nilai_ujian"=>$row->nilai_ujian; -->