<?php
class  TambahEkskul_Model extends CI_Model {
	private $table = "ekskul"; //nama tabel
	public function __construct()
	{
		$this->load->database();
	}
 
	public function simpanEkskul($table,$data)
	{
		return $this->db->insert($table, $data);
	}

	public function hapusEkskul($id)
	{
		return $this->db->delete('ekskul', ['id' => $id]);
	}

	public function getEkskul($id)
	{
		return $this->db->get_where('ekskul', ['id' => $id])->row_array();
	}

	public function editEkskul($id)
	{
		return $this->db->get_where('ekskul', ['id' => $id])->row_array();
	}

	public function updateEkskul($where, $data)
	{
		$this->db->where($where);
		$this->db->update('ekskul', $data);
	}

	public function getAll()
	{
		return $this->db->get($this->table)->result();
	}
 
}