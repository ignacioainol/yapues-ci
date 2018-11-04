<?php

class Dashboard extends CI_Controller{
	
	function __construct(){
		parent::__construct();
	}

	public function index(){
		// if($this->session->userdata('logged_in'))
		// 	echo "logeado"
		// else
		// 	echo "logeatee";
		
		$data['email'] = $this->session->userdata('email');
		$data['name'] = $this->session->userdata('name');

		$this->load->view('partials/main_header',$data);
		$this->load->view('dashboard');
		$this->load->view('partials/footer');
	}

	public function logout(){
		// $this->load->library('session');
		// $this->session->sess_destroy();

		//echo $this->input->post('current_uri');
		//redirect(base_url());

	}
}