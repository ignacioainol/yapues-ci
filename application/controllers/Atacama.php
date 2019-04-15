<?php

class Atacama extends CI_Controller{
	
	function __construct(){
		parent::__construct();
		$this->load->model('Region_model');
		$this->load->model('Items_model');
		$this->load->model('Category_model');

		setlocale(LC_ALL, 'es_ES');
	}

	public function index(){
		$data['regionId'] = 5;
		$data['name'] = $this->session->userdata('name');
		$data['regionName'] = "atacama";
		$data['regions'] = $this->Region_model->getRegions();
		$data['posts'] = $this->Items_model->getPosts(5);
		//$data['categories'] = $this->Category_model->getCategories();
		$data['catParents']    = $this->Category_model->getCatParents();
		$data['subCategories'] = $this->Category_model->getSubCategories();

		$this->load->view('partials/main_header',$data);
		$this->load->view('partials/content');
		$this->load->view('partials/footer');
	}

	public function Avisos(){
		$busqueda   = $this->input->get('q');
		$categoryId = $this->input->get('cat');
		$regionId 	= $this->input->get('reg');
		echo "buscando texto: " . $busqueda ."<br>";
		echo "category id: " .$categoryId ."<br>";
		echo "region id: " . $regionId;
	}

}