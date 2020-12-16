<?php 

defined('BASEPATH') OR exit('No direct script access allowed');


class ventas extends CI_Controller 
{
	private $permisos;
	function __construct()
	{
		parent:: __construct();
		
		$this->load->model('ventasModel');
		
	}
	
	public function index()
	{
		$data = array(
			'ventasindex' => $this->ventasModel->selectVenta()
		);
		$this->load->view('NavegacionAdministrador');
		$this->load->view('ventas/VentaCabecera');
		$this->load->view('ventas/tablaVenta',$data);
		$this->load->view('footer');
	}


	//INSERTAR VENTA
	public function viewInsert()
	{
		$data = array(
			'comboClientes' => $this->ventasModel->mcomboTabla('cliente'),
			'comboPlatillos' => $this->ventasModel->mcomboTabla('platillo')
		);
		
		$this->load->view('NavegacionAdministrador');
		$this->load->view('ventas/registrarVenta',$data);
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
				redirect(base_url().'ventas');
			}else{
				$this->session->set_flashdata('error','No se guardo correctamente');
				redirect(base_url().'ventas/viewInsert');
			}
	}
	//ACTUALIZAR VENTA
	public function editarVenta($idVenta)
	{		
		$data = array(
			'ventaEdit' => $this->ventasModel->actualizaridVenta($idVenta),
			'comboClientes' => $this->ventasModel->mcomboTabla('cliente'),
			'comboPlatillos' => $this->ventasModel->mcomboTabla('platillo')
		);
		$this->load->view('NavegacionAdministrador');
		$this->load->view('ventas/editarVenta',$data);
		$this->load->view('footer');
	}
	public function updateVenta()
	{
		$venta 			= $this->input->post('txtidPlatillo');
		$cliente		= $this->input->post('txtcliente');
		$platillo  		= $this->input->post('txtplatillo');
		$fecha   		= $this->input->post('txtfecha');
		$cantidad   	= $this->input->post('txtcantidad');
		$total       	= $this->input->post('txtpagar');
		$VentasActual = 	$this->ventasModel->actualizaridVenta($idVenta);
		$data = array(
			'idVenta'		=> $venta,
			'idCliente'		=> $cliente,
			'idPlatillo' 	=> $platillo,
			'fecha'  		=> $fecha,
			'cantidad' 		=> $cantidad,
			'total' 		=> $total,
			'estado'		=>'1'
		);
				$res = $this->ventasModel->actualizarVenta($idVenta,$data);
				if ($res) {
					$this->session->set_flashdata('correcto','Se guardo correctamente');
					redirect(base_url().'ventas');
				}else{
					$this->session->set_flashdata('error','No se pudo actualizar el usuario');
					redirect(base_url().'ventas/editarVentas'.$idVenta);
				}
	}

	#ELIMINAR VENTA(DESACTIVAR)
	public function deleteVenta($idVenta)
	{
		$data = array(
			'estado' => "10",
		);
		$this->ventasModel->actualizarVenta($idVenta,$data);
		redirect(base_url().'ventas');
	}
}
