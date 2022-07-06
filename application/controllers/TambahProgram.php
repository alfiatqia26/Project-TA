<?php
class TambahProgram extends CI_Controller {
 
	public function __construct()
	{
		parent::__construct();
		$this->load->helper("url");
		$this->load->model('TambahProgram_Model');
		
	}
 
	public function index() 
	{
        $data["Program"] = $this->TambahProgram_Model->getAll();
        $this->load->view('admin/data_program', $data);
		$this->load->view('template/admin/header');
		$this->load->view('admin/TambahProgram');
		$this->load->view('template/admin/footer');
		
	}

    function lihatData()
    {
        $this->load->view('template/admin/header');
        $this->load->view('admin/TambahProgram');
		$this->load->view('template/admin/footer');
     
    }

    function DataProgram()
    {
        $data["Program"] = $this->TambahProgram_Model->getAll();

        $this->load->view('template/admin/header');
        $this->load->view('admin/data_program', $data);
		$this->load->view('template/admin/footer');
     
        
    }

    function frontendProgram()
    {
        $data["Program"] = $this->TambahProgram_Model->getAll();
        $this->load->view('template/Home/header');   
        $this->load->view('home/v_data_Program', $data);
		$this->load->view('template/Home/footer');
    }
 
	public function TambahData()
	{
        $data = [
            'nama'=>$this->input->post('nama'),
            'hari'=>$this->input->post('hari'),
            'waktu'=> $this->input->post('waktu'),
            'pengajar'=> $this->input->post('pengajar')
        ];
        $simpan =$this->TambahProgram_Model->simpanProgram("program_pondok",$data);
 
        if ($simpan) {
        redirect('TambahProgram/DataProgram');
         
        } else {
            return 'data gagal di simpan';
        }

       
    }

    public function hapus($id)
	{
        
        $hapus = $this->TambahProgram_Model->hapusProgram($id);
        if ($hapus) {
            redirect('TambahProgram/DataProgram');
             
            } else {
                return 'data gagal di hapus';
            }
 
    }

    public function edit($id)
	{
        $data["program_pondok"] = $this->TambahProgram_Model->getProgram($id);
        
        $this->load->view('template/admin/header');
        $this->load->view('admin/EditProgram', $data);
		$this->load->view('template/admin/footer');
 
    }

    public function editData()
	{
        $id = $this->input->post('id');
		$nama = $this->input->post('nama');
		$hari = $this->input->post('hari');
		$waktu = $this->input->post('waktu');
		$pengajar = $this->input->post('pengajar');

        $where = array(
            'id' => $id,
        );

		$data = array(
			'nama' => $nama,
			'hari' => $hari,
			'waktu' => $waktu,
			'pengajar' => $pengajar,
		);

        $this->TambahProgram_Model->updateProgram($where,$data);

        
        redirect('TambahProgram/DataProgram');
    }
}