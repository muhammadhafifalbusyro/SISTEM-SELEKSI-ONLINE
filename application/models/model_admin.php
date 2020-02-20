<?php 
class Model_admin extends CI_Model{
	public function get_data_limit()
	{
		$query = $this->db->get("limit_jurusan");
		$query= $query->result_array();
		return $query[0];
	}
	public function get_code()
	{
		$query = $this->db->get("kode_masuk");
		$query= $query->result_array();
		return $query[0];
	}
	public function update_limit($value)
	{
		$data = array(
			'frontend' => $value["frontend"],
			'backend' => $value["backend"],
			'mobile' => $value["mobile"]
		);

		$this->db->where('id', $value["id"]);
		$this->db->update('limit_jurusan', $data);
		return $this->db->affected_rows();
	}
	public function update_code($value)
	{
		$data = array(
			'kode_admin' => $value["admin"],
			'kode_santri' => $value["santri"],
		);

		$this->db->where('id', $value["id"]);
		$this->db->update('kode_masuk', $data);
		return $this->db->affected_rows();
	}
}
?>