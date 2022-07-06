<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Ppdb extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
        $this->load->library('upload');
        $this->load->model('register_model');
    }

    public function index()
    {
        $this->load->view('template/Home/header');
        $this->load->view('home/v_daftar');
        $this->load->view('template/Home/footer');
    }

    function lihatDaftar()
    {
        $this->load->view('home/v_datar');
    }

    function daftar()
    {


        $data = [
            'no_reg' => $this->input->post('no_reg'),
            'jenjang_pendaftaran' => $this->input->post('jenjang_pendaftaran'),
            'nama_lengkap' => $this->input->post('nama_lengkap'),
            'jk' => $this->input->post('jk'),
            'nisn' => $this->input->post('nisn'),
            'nik' => $this->input->post('nik'),
            'ttl' => $this->input->post('ttl'),
            'agama' => $this->input->post('agama'),
            'alamat' => $this->input->post('alamat'),
            'tempat_tinggal' => $this->input->post('tempat_tinggal'),
            'anak_keberapa' => $this->input->post('anak_keberapa'),
            'nama_ayah_kandung' => $this->input->post('nama_ayah_kandung'),
            'nik_ayah' => $this->input->post('nik_ayah'),
            'thn_lahir_ayah' => $this->input->post('thn_lahir_ayah'),
            'pekerjaan_ayah' => $this->input->post('pekerjaan_ayah'),
            'pendidikan_ayah' => $this->input->post('pendidikan_ayah'),
            'nama_ibu_kandung' => $this->input->post('nama_ibu_kandung'),
            'nik_ibu' => $this->input->post('nik_ibu'),
            'thn_lahir_ibu' => $this->input->post('thn_lahir_ibu'),
            'pekerjaan_ibu' => $this->input->post('pekerjaan_ibu'),
            'pendidikan_ibu' => $this->input->post('pendidikan_ibu'),
            'nama_wali' => $this->input->post('nama_wali'),
            'nik_wali' => $this->input->post('nik_wali'),
            'thn_lahir_wali' => $this->input->post('thn_lahir_wali'),
            'pekerjaan_wali' => $this->input->post('pekerjaan_wali'),
            'pendidikan_wali' => $this->input->post('pendidikan_wali'),
            'nomor_hp' => $this->input->post('nomor_hp'),
            'media_sosial' => $this->input->post('media_sosial'),
            'jurusan_MA' => $this->input->post('jurusan_MA'),
            'jurusan_SMK' => $this->input->post('jurusan_SMK'),
            'jenis_pendaftaran' => $this->input->post('jenis_pendaftaran'),
            'asal_sekolah' => $this->input->post('asal_sekolah'),
            'kartu_keluarga' => $this->input->post('kartu_keluarga'),
            'ijazah' => $this->input->post('ijazah'),
            'skhu' => $this->input->post('skhu'),
            'akte_kelahiran' => $this->input->post('akte_kelahiran'),
            'kartu_indonesia_pintar' => $this->input->post('kartu_indonesia_pintar'),
            'status' => 'b'

        ];

        // Upload
        // $file_name = str_replace('.','',$data['current_user']->id);
        $config['upload_path'] = FCPATH . '/assets/uploads/';
        $config['allowed_types'] = 'gif|jpg|jpeg|png';
        $config['file_name'] = $this->input->post('foto');
        $config['overwrite'] = true;
        $config['max_size'] = 2024; // 1MB
        $config['max_filename_increment'] = 10000;
        $config['encrypt_name'] = true;

        // $config['max_width'] = 1080;
        // $config['max_height'] = 1080;

        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        if (!$this->upload->do_upload('foto')) {
            // saat gagal, tampilkan pesan error
            //   $data['error'] = $this->upload->display_errors();
            $error = array('error' => $this->upload->display_errors());
            var_dump($error);
        } else {
            // saat berhasil ambil datanya
            $uploaded_data = $this->upload->data();

            $date = new DateTime();
            $result = $date->format('ymdHis');

            $data['no_reg'] = $this->input->post('jenjang_pendaftaran') . '-'.$result;
            // buat data baru untuk update foto
            $data["foto"] = $uploaded_data["file_name"];
            // var_dump($data);

            // simpan data baru ke database dan redirect
            //   if ($this->profile_model->update($new_data)) {
            //       $this->session->set_flashdata('message', 'Avatar updated!');
            //       redirect(site_url('admin/setting'));
            //   }


            $simpan = $this->register_model->simpanDaftar("registrasi", $data);

            if ($simpan) {
                $this->session->set_flashdata('pesan', 'Data pendaftaran telah tersimpan.');
                $this->session->set_flashdata('no_reg', $data['no_reg']);

                redirect('pengumuman/keterangan/');
            }
        }
    }

    public function hapus($id)
    {

        $hapus = $this->Register_Model->hapusSiswa($id);
        if ($hapus) {
            redirect('Verifikasi/index');
        } else {
            return 'data gagal di hapus';
        }
    }
}

    

/* End of file Coba.php */
