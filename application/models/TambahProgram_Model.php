<?php
class  TambahProgram_Model extends CI_Model {
	private $table = "program_pondok"; //nama tabel
	public function __construct()
	{
		$this->load->database();
	}
 
	public function simpanProgram($table,$data)
	{
		return $this->db->insert($table, $data);
	}

	public function hapusProgram($id)
	{
		return $this->db->delete('program_pondok', ['id' => $id]);
	}

	public function getProgram($id)
	{
		return $this->db->get_where('program_pondok', ['id' => $id])->row_array();
	}

	public function updateProgram($where, $data)
	{
		$this->db->where($where);
		$this->db->update('program_pondok', $data);
	}

	public function getAll()
	{
		return $this->db->get($this->table)->result();
	}
	function update_program(){
		return $this->db->get('program');
	}
 
	
 
}