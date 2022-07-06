<?php
class Pengaturan extends CI_Controller {
 
	public function __construct()
	{
		parent::__construct();
		$this->load->helper("url");
		$this->load->model('Pengaturan_Model');
	     
    }

    function atur_profil()
    {
        $id=1;
        $data['profil']=$this->Pengaturan_Model->editProfil($id);
        // var_dump($data);
        $this->load->view('template/admin/header');
        $this->load->view('admin/v_pengaturan',$data);
		$this->load->view('template/admin/footer');
     
        
    }


    function frontendbiodata()
    {
        $data["profil"] = $this->Pengaturan_Model->getAll();
        $this->load->view('template/Home/header');   
        $this->load->view('home/v_biodata', $data);
		$this->load->view('template/Home/footer');
    }

    function frontendvisi()
    {
        $data["profil"] = $this->Pengaturan_Model->getAll();
        $this->load->view('template/Home/header');   
        $this->load->view('home/v_visi', $data);
		$this->load->view('template/Home/footer');
    }
    

    public function TambahData()
	{
        $data = [
            'nama_sekolah'=>$this->input->post('nama_sekolah'),
            'tahun_berdiri'=>$this->input->post('tahun_berdiri'),
            'alamat'=> $this->input->post('alamat'),
            'akreditasi'=> $this->input->post('akreditasi'),
            'pimpinan'=> $this->input->post('pimpinan'),
            'visi_misi'=> $this->input->post('visi_misi')
        ];
        $simpan =$this->Pengaturan_Model->simpanProfil("profil",$data);
 
        if ($simpan) {
        redirect('Pengaturan/atur_profil');
         
        } else {
            return 'data gagal di simpan';
        }
      }
      public function ubahData()
	{
        $data = [
            'nama_sekolah'=>$this->input->post('nama_sekolah'),
            'tahun_berdiri'=>$this->input->post('tahun_berdiri'),
            'alamat'=> $this->input->post('alamat'),
            'akreditasi'=> $this->input->post('akreditasi'),
            'pimpinan'=> $this->input->post('pimpinan'),
            'visi_misi'=> $this->input->post('visi_misi')
        ];
        $simpan =$this->Pengaturan_Model->updateProfil($data);
 
        if ($simpan) {
            redirect('Pengaturan/atur_profil');
         
        } else {
            return 'data gagal di simpan';
        }
      }
}