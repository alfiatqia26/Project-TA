<?php
class TambahEkskul extends CI_Controller {
 
	public function __construct()
	{
		parent::__construct();
		$this->load->helper("url");
		$this->load->model('TambahEkskul_Model');
		
	}
 
	public function index() 
	{
        $data["ekskul"] = $this->TambahEkskul_Model->getAll();

        $this->load->view('admin/data_ekskul', $data);
		$this->load->view('template/admin/header');
		$this->load->view('admin/TambahEkskul');
		$this->load->view('template/admin/footer');
		
	}

    function lihatData()
    {
        $this->load->view('template/admin/header');
        $this->load->view('admin/TambahEkskul');
		$this->load->view('template/admin/footer');
     
        
    }

    function Dataekskul()
    {
        $data["ekskul"] = $this->TambahEkskul_Model->getAll();

        $this->load->view('template/admin/header');
        $this->load->view('admin/data_ekskul', $data);
		$this->load->view('template/admin/footer');
     
        
    }

    function frontendekskul()
    {
        $data["ekskul"] = $this->TambahEkskul_Model->getAll();
        $this->load->view('template/Home/header');   
        $this->load->view('home/v_data_ekskul', $data);
		$this->load->view('template/Home/footer');
    }
 
	public function TambahData()
	{
        $data = [
            'nama'=>$this->input->post('nama'),
            'hari'=>$this->input->post('hari'),
            'waktu'=> $this->input->post('waktu'),
            'pembimbing'=> $this->input->post('pembimbing')
        ];
        $simpan =$this->TambahEkskul_Model->simpanEkskul("ekskul",$data);
 
        if ($simpan) {
        redirect('TambahEkskul/Dataekskul');
         
        } else {
            return 'data gagal di simpan';
        }

    
    }

    public function hapus($id)
	{
        
        $hapus = $this->TambahEkskul_Model->hapusEkskul($id);
        if ($hapus) {
            redirect('TambahEkskul/Dataekskul');
             
            } else {
                return 'data gagal di hapus';
            }
 
    }

    public function edit($id)
	{
        $data["ekskul"] = $this->TambahEkskul_Model->getEkskul($id);
        
        $this->load->view('template/admin/header');
        $this->load->view('admin/EditEkskul', $data);
		$this->load->view('template/admin/footer');
 
    }

    public function editData()
	{
        $id = $this->input->post('id');
		$nama = $this->input->post('nama');
		$hari = $this->input->post('hari');
		$waktu = $this->input->post('waktu');
		$pembimbing = $this->input->post('pembimbing');

        $where = array(
            'id' => $id,
        );

		$data = array(
			'nama' => $nama,
			'hari' => $hari,
			'waktu' => $waktu,
			'pembimbing' => $pembimbing,
		);

        $this->TambahEkskul_Model->updateEkskul($where,$data);

        
        redirect('TambahEkskul/Dataekskul');
    }
}