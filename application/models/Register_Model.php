<?php
class Register_model extends CI_Model
{
	private $table = "registrasi"; //nama tabel
	public function __construct()
	{
		$this->load->database();
	}

	public function simpanDaftar($table, $data)
	{
		return $this->db->insert($table, $data);
	}

	public function simpanData($table, $data)
	{
		return $this->db->insert($table, $data);
	}

	public function getAll()
	{
		return $this->db->get($this->table)->result();
	}

	public function getCount()
	{
		return  $this->db->count_all($this->table);
	}
	public function getCountVerifikasi()
	{
		$this->db->where('status', 's');
		$this->db->from($this->table);
		return $this->db->count_all_results();
	}
	public function getCountBelumVerifikasi()
	{
		$this->db->where('status', 'b');
		$this->db->from($this->table);
		return $this->db->count_all_results();
	}

	public function cari($no_reg)
	{
		return $this->db->select('*')
			->where('no_reg', $no_reg)
			->get($this->table)->row_object();
	}

	public function getVerifikasi()
	{
		return $this->db->select('*')
			->where('status', 'b')
			->get($this->table)->result();
	}

	public function putStatus($id, $data)
	{
		return $this->db->where('id', $id)->update($this->table, $data);
	}

	public function updateStatus($id, $data)
	{
		$data = [
			'status' =>  's'
		];
		return $this->db->where('id', $id)->update($this->table, $data);
	}

	public function updateBukaPendaftaran($id, $data)
	{
		
		$data = [
			'status' =>  'Y'
		];
		return $this->db->where('id', $id)->update('pendaftaran', $data);
	}

	public function getPendaftaran()
	{
		return $this->db->select('*')
			->where('status', 'N')
			->get('pendaftaran')->row_object();
	}


	public function hapusSiswa($id)
	{
		return $this->db->delete('registrasi', ['id' => $id]);
	}
}
