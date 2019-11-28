<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Catalogo extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model("Catalogo_model");
		$this->load->model("Productos_model");
		$this->load->model("Categorias_model");
	}
	public function index()
	{
		
		$data  = array(
			'productos' => $this->Productos_model->getProductos(), 
		);
		// $this->load->view("layouts/header");
		// $this->load->view("layouts/aside");
		// $this->load->view("layouts/navbar");
		$this->load->view("admin/catalogo",$data);
		// $this->load->view("layouts/footer");	

	}
}
