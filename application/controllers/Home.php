<?php

class Home extends CI_Controller
{

    public function __construct()
	{
		parent::__construct();
		$this->load->helper("url");
		$this->load->model('TambahEkskul_Model');
		$this->load->model('TambahProgram_Model');

		
	}
    function index()
    {
        $this->load->view('template/Home/header');   
        $this->load->view('home/v_index');
		$this->load->view('template/Home/footer');


    }
    function ekskul()
    {
        $data["ekskul"] = $this->TambahEkskul_Model->getAll();
        $this->load->view('template/Home/header');   
        $this->load->view('home/v_data_ekskul', $data);
		$this->load->view('template/Home/footer');
        
    }
    function program()
    {
        $data["ekskul"] = $this->TambahProgram_Model->getAll();
        $this->load->view('template/Home/header');   
        $this->load->view('home/v_data_program', $data);
		$this->load->view('template/Home/footer');
        
    }

    function login()
    {
        $this->load->view('template/Home/header');
        $this->load->view('home/v_login');
        $this->load->view('template/Home/header');

    }
}