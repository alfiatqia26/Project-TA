<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('register_model');
        $this->load->model('TambahEkskul_Model');
        
    }
    

    public function index()
    {
        $data["ppdb"] = $this->register_model->getCount();
        $data["ppdbSudah"] = $this->register_model->getCountVerifikasi();
        $data["ppdbBelum"] = $this->register_model->getCountBelumVerifikasi();
        $data["row"]=$this->register_model->getPendaftaran();
        
        var_dump($data["row"]);

        $this->load->view('template/admin/header');
        $this->load->view('admin/index',$data);
        $this->load->view('template/admin/footer');
        
    }

    public function dataSiswa()
    {
        $data["ppdb"] = $this->register_model->getAll();
        $this->load->view('template/admin/header');
        $this->load->view('admin/v_siswa',$data);
        $this->load->view('template/admin/footer');
        
    }

    public function statusPendaftaran($id)
    {
        $data = [
            'status' => 'N'
        ];
        $statusV = $this->register_model->updateBukaPendaftaran($id, $data);
        var_dump($statusV);
        if ($statusV) {
            return redirect('admin');
        } else {
            echo 'data gagal di verifikasi';
        }
    }



}

/* End of file Admin.php */
