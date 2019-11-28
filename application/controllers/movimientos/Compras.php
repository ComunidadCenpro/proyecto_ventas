<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Compras extends CI_Controller {

	public function __construct(){
		parent::__construct();
		if (!$this->session->userdata("login")) {
			redirect(base_url());
		}
		$this->permisos = $this->backend_lib->control();
		$this->load->model("Compras_model");
		$this->load->model("Clientes_model");
		$this->load->model("Productos_model");
	}

	public function index(){
		$data  = array(
			'permisos' => $this->permisos,
			'compras' => $this->Compras_model->getCompras(), 
		);
		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("layouts/navbar");
		$this->load->view("admin/compras/list",$data);
		$this->load->view("layouts/footer");
	}

	public function add(){
		$data = array(
			'productos' => $this->Productos_model->getProductos(), 
		);
		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("layouts/navbar");
		$this->load->view("admin/compras/add",$data);
		$this->load->view("layouts/footer");
	}

	public function getproductos(){
		$valor = $this->input->post("valor");
		$clientes = $this->Compras_model->getproductos($valor);
		echo json_encode($clientes);
	}

	public function store(){
		$fecha = $this->input->post("fecha");
		$subtotal = $this->input->post("subtotal");
		$igv = $this->input->post("igv");
		$total = $this->input->post("total");

		$idusuario = $this->session->userdata("id");

		$idproductos = $this->input->post("idproductos");
		$precios = $this->input->post("precios");
		$cantidades = $this->input->post("cantidades");
		$importes = $this->input->post("importes");

		$data = array(
			'fecha' => $fecha,
			'subtotal' => $subtotal,
			'igv' => $igv,
			'total' => $total,
			'usuario_id' => $idusuario,
			'parametro_id' => 1,
		);

		if ($this->Compras_model->save($data)) {
			$idcompra = $this->Compras_model->lastID();
			$this->save_detalle($idproductos,$idcompra,$precios,$cantidades,$importes);
			redirect(base_url()."movimientos/compras");

		}else{
			redirect(base_url()."movimientos/compras/add");
		}
	}

	protected function updateComprobante($idcomprobante){
		$comprobanteActual = $this->Compras_model->getComprobante($idcomprobante);
		$data  = array(
			'cantidad' => $comprobanteActual->cantidad + 1, 
		);
		$this->Compras_model->updateComprobante($idcomprobante,$data);
	}

	protected function save_detalle($idproductos,$idcompra,$precios,$cantidades,$importes){
		for ($i=0; $i < count($idproductos); $i++) { 
			$data  = array(
				'producto_id' => $idproductos[$i], 
				'precio' => $precios[$i],
				'cantidad' => $cantidades[$i],
				'importe'=> $importes[$i],
				'compras_id' => $idcompra,
			);
			$this->Compras_model->save_detalle($data);

		}
	}

	protected function updateProducto($idproducto,$cantidad){
		$productoActual = $this->Productos_model->getProducto($idproducto);
		$data = array(
			'stock' => $productoActual->stock - $cantidad, 
		);
		$this->Productos_model->update($idproducto,$data);
	}

	public function view(){
		$idcompra = $this->input->post("id");
		$data = array(
			"compra" => $this->Compras_model->getCompra($idcompra),
			"detalles" =>$this->Compras_model->getDetalle($idcompra)
		);
		$this->load->view("admin/compras/view",$data);
	}

	public function view_validar(){
		$idcompra = $this->input->post("id");
		$data = array(
			"compra" => $this->Compras_model->getCompra($idcompra),
			"detalles" =>$this->Compras_model->getDetalle($idcompra)
		);
		$this->load->view("admin/compras/view-validar",$data);
	}

}