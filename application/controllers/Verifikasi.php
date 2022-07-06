<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Verifikasi extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper("url");
        $this->load->model('Register_Model');
    }

    public function index()
    {
        $data["ppdb"] = $this->Register_Model->getVerifikasi();
        // var_dump($data);
        $this->load->view('template/admin/header');
        $this->load->view('admin/v_verifikasi', $data);
        $this->load->view('template/admin/footer');
    }

    public function statusV($id)
    {
        $data = [
            'status' => 'b'
        ];
        $statusV = $this->Register_Model->updateStatus($id, $data);
        if ($statusV) {
            return redirect('verifikasi');
        } else {
            echo 'data gagal di verifikasi';
        }
    }

    public function hapus($id)
	{
        
        $hapus = $this->Register_Model->hapusSiswa($id);
        if ($hapus) {
            redirect('verifikasi');
             
            } else {
                return 'data gagal di hapus';
            }
 
    }
}

/* End of file Verifikasi.php */
