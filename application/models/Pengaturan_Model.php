<?php
class Pengaturan_Model extends CI_Model {
	private $table = "profil"; //nama tabel
	public function __construct()
	{
		$this->load->database();
	}
 
	public function simpanProfil($table,$data)
	{
		return $this->db->insert($table, $data);
	}

	public function getAll()
	{
		return $this->db->get($this->table)->result();
	}

	public function editProfil($id)
	{
		return $this->db->get_where($this->table, ['id' => $id])->row_object();
	}

	public function updateProfil($data)
	{
		$this->db->where(['id'=>1]);
		return $this->db->update($this->table, $data);
	}
 
}