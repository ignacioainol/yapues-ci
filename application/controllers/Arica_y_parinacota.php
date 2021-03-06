<?php

class Arica_y_parinacota extends CI_Controller{
	
	function __construct(){
		parent::__construct();
		$this->load->model('Region_model');
		$this->load->model('Items_model');
		$this->load->model('Category_model');

		setlocale(LC_ALL, 'es_ES');
	}

	public function index(){
		$data['regionId'] = 2;
		$data['name'] = $this->session->userdata('name');
		$data['regionName'] = "arica_y_parinacota";
		$data['regions'] = $this->Region_model->getRegions();
		$data['posts'] = $this->Items_model->getPosts(5);
		//$data['categories'] = $this->Category_model->getCategories();
		$data['catParents']    = $this->Category_model->getCatParents();
		$data['subCategories'] = $this->Category_model->getSubCategories();

		$this->load->view('partials/main_header',$data);
		$this->load->view('partials/content_default');
		$this->load->view('partials/footer');
	}

	public function Avisos(){

		$this->load->library('session');

		$busqueda   = $this->input->get('q');
		$categoryId = "''";//$this->input->get('cat');
		$checkCategory = $this->input->get('cat');
		if($checkCategory !== "xxx"){
			$categoryId = $this->input->get('cat');
		}
		$regionId 	= $this->input->get('reg');
		$comunaIds  = $this->input->get('cmn'); 

		$newData = array(
			'categoryId'   => $categoryId,
			'regionId'     => $regionId
		);

		$this->session->set_userdata($newData);
		// $nameOfCategory = $this->Items_model->getNameCategory($this->session->userdata('categoryId'));

		$data['name'] = $this->session->userdata('name');
		$data['regionName'] = "arica_y_parinacota";
		$data['catParents']    = $this->Category_model->getCatParents();
		$data['subCategories'] = $this->Category_model->getSubCategories();
		$data['regions'] = $this->Region_model->getRegions();
		$data['posts'] = $this->Items_model->getSearchPosts($busqueda,$regionId,$comunaIds,$categoryId);

		$this->load->view('partials/main_header',$data);
		$this->load->view('partials/content');
		$this->load->view('partials/footer');

	}

}