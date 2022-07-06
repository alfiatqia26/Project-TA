<?php
class Login extends CI_Controller {
 
	public function __construct()
	{
		parent::__construct();
		$this->load->helper("url");
		$this->load->model('login_model');
		
	}
 
	public function index() 
	{
		$this->load->view('template/Home/header');
		$this->load->view("login");
		$this->load->view('template/Home/footer');
		
	}
 
	public function user()
	{
		$username = $this->input->POST('username');
		// <!-- $password =$this->input->POST('password'); -->
		$password =md5($this->input->POST('password'));
	
		if($this->login_model->login($username,$password)){
			// echo 'berhasil';
			redirect('admin');
		}else{
			echo 'login gagal';
		}
	}
}