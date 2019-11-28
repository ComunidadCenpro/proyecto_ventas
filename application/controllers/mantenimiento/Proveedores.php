<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Proveedores extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model("Proveedores_model");
	}

	public function index()
	{
		$data  = array(
			'proveedores' => $this->Proveedores_model->getProveedores(), 
		);
		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("layouts/navbar");
		$this->load->view("admin/proveedores/list",$data);
		$this->load->view("layouts/footer");

	}
	public function add(){

		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("layouts/navbar");
		$this->load->view("admin/proveedores/add");
		$this->load->view("layouts/footer");
	}
	public function store(){

		$nombre = $this->input->post("nombre");
		$ruc = $this->input->post("ruc");
		$dni = $this->input->post("dni");
		$direccion = $this->input->post("direccion");
		$telefono = $this->input->post("telefono");

		$this->form_validation->set_rules("nombre","Nombre del Proveedor","required");
		$this->form_validation->set_rules("ruc","Numero del Ruc","required");
		$this->form_validation->set_rules("dni","Numero del Dni","required");
		$this->form_validation->set_rules("direccion","Descripcion de la direccion","required");
		$this->form_validation->set_rules("telefono","Numero del telefono","required");
		
		

		if ($this->form_validation->run()==TRUE) {
			$data  = array(
				'nombre' => $nombre, 
				'ruc' => $ruc,
				'dni' => $dni,
				'direccion' => $direccion,
				'telefono' => $telefono,
				'estado' => "1"
			);

			if ($this->Proveedores_model->save($data)) {
				redirect(base_url()."mantenimiento/proveedores");
			}
			else{
				$this->session->set_flashdata("error","No se pudo guardar la informacion");
				redirect(base_url()."mantenimiento/proveedores/add");
			}
		}
		else{
			$this->add();
		}

		
	}
	public function edit($id){
		$data  = array(
			'proveedor' => $this->Proveedores_model->getProveedor($id) 
		);
		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("layouts/navbar");
		$this->load->view("admin/proveedores/edit",$data);
		$this->load->view("layouts/footer");
	}


	public function update(){
		$idproveedor = $this->input->post("idproveedor");
		$nombre = $this->input->post("nombre");
		$ruc = $this->input->post("ruc");
		$dni = $this->input->post("dni");
		$direccion = $this->input->post("direccion");
		$telefono = $this->input->post("telefono");	
		//$tipodocumento = $this->input->post("tipodocumento");
		//$tipoproveedor = $this->input->post("tipoproveedor");

		$proveedorActual = $this->Proveedores_model->getProveedor($idproveedor);

		if ($ruc == $proveedorActual->ruc) {
			$is_unique = "";
		}else{
			$is_unique= '|is_unique[proveedores.ruc]';
		}
		

		$this->form_validation->set_rules("nombre","Nombre del Proveedor","required");
		$this->form_validation->set_rules("ruc","Numero del Ruc","required".$is_unique);
		$this->form_validation->set_rules("dni","Numero del Dni","required".$is_unique);
		$this->form_validation->set_rules("direccion","Descripcion de la direccion","required");
		$this->form_validation->set_rules("telefono","Numero del telefono","required");

		if ($this->form_validation->run()==TRUE) {
			$data = array(
				'nombre' => $nombre, 
				'ruc' => $ruc,
				'dni' => $dni,
				'direccion' => $direccion,
				'telefono' => $telefono,
			);

			if ($this->Proveedores_model->update($idproveedor,$data)) {
				redirect(base_url()."mantenimiento/proveedores");
			}
			else{
				$this->session->set_flashdata("error","No se pudo actualizar la informacion");
				redirect(base_url()."mantenimiento/proveedores/edit/".$idproveedor);
			}
		}else{
			$this->edit($idproveedor);
		}

		


		

	}

	public function view($id){
		$data  = array(
			'proveedor' => $this->Proveedores_model->getCategoria($id), 
		);
		$this->load->view("admin/proveedores/view",$data);
	}

	public function delete($id){
		$data  = array(
			'estado' => "0", 
		);
		$this->Proveedores_model->update($id,$data);
		echo "mantenimiento/proveedores";
	}
}