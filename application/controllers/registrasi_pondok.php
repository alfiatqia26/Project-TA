<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Registrasi_pondok extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('register_model');
        
    }
    
    public function index($no_reg = '')
    {
        if($no_reg == ''){
            redirect('pengumuman/index');
        }
        $data['data'] = $this->register_model->cari($no_reg);

        $this->load->view('template/Home/header');
        $this->load->view('home/v_daftar_pondok', $data);
        $this->load->view('template/Home/footer');
    }

    function lihatDaftar()
    {
        $this->load->view('home/v_datar_pondok');
    }

    function daftarPondok()
    {
        // $data=[
        //     'jenjang_pendaftaran'=>$this->input->post('jenjang_pendaftaran'),
        //     'nama_lengkap'=>$this->input->post('nama_lengkap')
        // ];
        // var_dump($data);

        $data = [
          
            'no_reg'=>$this->input->post('no_reg'),
            'nama_lengkap'=>$this->input->post('nama_lengkap'),
            'jenjang'=>$this->input->post('jenjang'),
            'tempat_tinggal'=> $this->input->post('tempat_tinggal'),
            'program_pilihan'=> $this->input->post('program_pilihan'),
            'no_reg'=> $this->input->post('no_reg'),
            
        ];
       $simpan =$this->register_model->simpanData("registrasi_pondok",$data);

       if ($simpan) {
       redirect('home');
        
       }
       
    }

}

/* End of file Coba.php */
