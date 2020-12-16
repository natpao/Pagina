<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class menu extends CI_Controller 
{
	private $permisos;
	function __construct()
	{
		parent:: __construct();
		
		$this->load->model('ventasModel');
		
	}
	public function index(){
		$this->load->view('NavegacionPrincipal');
		$this->load->view('slider');
		$this->load->view('contenidoMenu');
		$this->load->view('footer');
	}
	public function viewInsert()
	{
		$data = array(
			'comboClientes' => $this->ventasModel->mcomboTabla('cliente'),
			'comboPlatillos' => $this->ventasModel->mcomboTabla('platillo')
		);
		
		$this->load->view('NavegacioUsuario');
		$this->load->view('addVentas',$data);
		$this->load->view('footer');
	}
		public function insertVenta()
	{
		$cliente		= $this->input->post('txtcliente');
		$platillo  		= $this->input->post('txtplatillo');
		$fecha   		= $this->input->post('txtfecha');
		$cantidad   	= $this->input->post('txtcantidad');
		$total       	= $this->input->post('txtpagar');
		
		$data = array(
			'idCliente'		=> $cliente,
			'idPlatillo' 	=> $platillo,
			'fecha'  		=> $fecha,
			'cantidad' 		=> $cantidad,
			'total' 		=> $total,
			'estado'		=>'1'
		);

		$res = $this->ventasModel->insertarVenta($data);
			if($res){
				$this->session->set_flashdata('correcto','Se guardo exitosamente');
				redirect(base_url().'menu');
			}else{
				$this->session->set_flashdata('error','No se guardo correctamente');
				redirect(base_url().'ventas/viewInsert');
			}
	}

}
