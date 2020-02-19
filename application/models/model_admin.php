<?php 
class Model_admin extends CI_Model{
	public function get_data_limit()
	{
		$query = $this->db->get("limit_jurusan");
		$query= $query->result_array();
		return $query[0];
	}
}

?>