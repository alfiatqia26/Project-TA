<?php
class Pengumuman extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('register_model');
    }

    public function index()
    {
        $this->load->view('template/Home/header');
        $this->load->view('pengumuman/index');
        $this->load->view('template/Home/footer');
    }

    public function keterangan()
    {
        $this->load->view('template/Home/header');
        $this->load->view('pengumuman/keterangan');
        $this->load->view('template/Home/footer');
    }

    public function cari()
    {
        $no_reg = $this->input->post('no_reg');
        $data = $this->register_model->cari($no_reg);
        // echo '<pre>';
        // var_dump($data);
        // die();
        if ($data == NULL) {
            $this->session->set_flashdata('pesan', 'Mohon maaf, Nomor registrasi tidak ditemukan');
        } else {
            if ($data->status == 's') {
                $this->session->set_flashdata('status_ket',
                    'Selamat, Pendaftaran dengan nomor registrasi <b>' .
                        $no_reg .
                        '</b> Telah di Verifikasi dan diterima di Pondok Pesantren'
                );
                $this->session->set_flashdata('status', 's');
                $this->session->set_flashdata('no_reg', $no_reg);
            } else {
                $this->session->set_flashdata('status_ket', 'Mohon maaf, Data pendaftaran  dengan nomor registrasi ' .
                $no_reg .
                ' belum diverifikasi');
                $this->session->set_flashdata('status', 'b');
                
            }
        }

        redirect('pengumuman/index');
    }

    public function cetak($no_reg)
    {
        // proses cetak disini
        echo $no_reg;
    }
}
