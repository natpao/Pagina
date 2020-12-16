<?php 

defined('BASEPATH') OR exit('No direct script access allowed');


class platillos  extends CI_Controller 
{
	private $permisos;
	function __construct()
	{
		parent:: __construct();
		
		$this->load->model('platillosModel');
		
	}
	//Mostrar
	public function index()
	{
		$data = array(
			'platillosindex' => $this->platillosModel->selectPlatillo()
		);
		$this->load->view('NavegacionAdministrador');
		$this->load->view('platillos/platillosCabecera');
		$this->load->view('platillos/tablaPlatillos',$data);
		$this->load->view('footer');
	}

	//ACTUALIZAR TRABAJADOR
	public function editarPlatillo($idPlatillo)
	{		
		$data = array(
			'platillosEdit' => $this->platillosModel->actualizaridPlatillo($idPlatillo)
		);
		$this->load->view('NavegacionAdministrador');
		$this->load->view('platillos/editarPlatillos',$data);
		$this->load->view('footer');
	}
	
	public function updatePlatillo()
	{
		$idPlatillo			= $this->input->post('txtidPlatillo');
		$nombre				= $this->input->post('txtnombre');
		$descripcion	  	= $this->input->post('txtdescripcion');
		$precio			  	= $this->input->post('txtprecio');
		$stock			  	= $this->input->post('txtstock');
		$platilloActual		= $this->platillosModel->actualizaridPlatillo($idPlatillo);				
		$data = array(
			'idPlatillo'		=> $idPlatillo,
			'nombre'			=> $nombre,
			'descripcion' 		=> $descripcion,
			'precio' 			=> $precio,
			'stock'				=> $stock
		);
				$res = $this->platillosModel->actualizarPlatillo($idPlatillo,$data);
				if ($res) {
					$this->session->set_flashdata('correcto','Se guardo correctamente');
					redirect(base_url().'platillos');
				}else{
					$this->session->set_flashdata('error','No se pudo actualizar el usuario');
					redirect(base_url().'platillos/editarPlatillo'.$idEmpleado);
				}
	}

	#ELIMINAR TRABAJADOR
	public function deletePlatillo($idPlatillo)
	{
		$data = array(
			'estado' => "10",
		);
		$this->platillosModel->actualizarPlatillo($idPlatillo,$data);
		redirect(base_url().'platillos/index');
	}
}
