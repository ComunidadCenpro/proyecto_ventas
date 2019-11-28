<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Productos extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model("Productos_model");
	}

	public function index(){
		//$fechainicio = $this->input->post("fechainicio");
		//$fechafin = $this->input->post("fechafin");
		/*if ($this->input->post("buscar")) {
			$ventas = $this->Ventas_model->getVentasbyDate($fechainicio,$fechafin);
		}
		else{
			$ventas = $this->Ventas_model->getVentas();
		}*/
		$data = array(
			"productos" => $productos
			//"fechainicio" => $fechainicio,
			//"fechafin" => $fechafin
		);
		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("layouts/navbar");
		$this->load->view("admin/reportes/productos",$data);
		$this->load->view("layouts/footer");
	}
}