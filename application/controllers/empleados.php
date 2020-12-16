<?php 

defined('BASEPATH') OR exit('No direct script access allowed');


class empleados  extends CI_Controller 
{
	private $permisos;
	function __construct()
	{
		parent:: __construct();
		
		$this->load->model('empleadosModel');
		
	}
	//Mostrar
	public function index()
	{
		$data = array(
			'empleadosindex' => $this->empleadosModel->selectEmpleado()
		);
		$this->load->view('NavegacionAdministrador');
		$this->load->view('empleados/empleadosCabecera');
		$this->load->view('empleados/tablaEmpleados',$data);
		$this->load->view('footer');
	}


	//INSERTAR TRABAJADOR
	public function viewInsert()
	{
		$this->load->view('NavegacionAdministrador');
		$this->load->view('empleados/registrarempleados');
		$this->load->view('footer');
	}
	public function insertarEmpleado()
	{
		$nombre				= $this->input->post('txtnombre');
		$apellidoPaterno  	= $this->input->post('txtapellidoPaterno');
		$apellidoMaterno  	= $this->input->post('txtapellidoMaterno');
		$telefono   		= $this->input->post('txtcelular');
		$direccion  		= $this->input->post('txtDireccion');
		$horarioEntrada    	= $this->input->post('txthoraEntrada');
		$horarioSalida 		= $this->input->post('txthoraSalida');
		$usuario    		= $this->input->post('txtusuario');
		$contraseña    		= $this->input->post('txtcontra');
		$data = array(
			'nombre'			=> $nombre,
			'apellidoPaterno' 	=> $apellidoPaterno,
			'apellidoMaterno' 	=> $apellidoMaterno,
			'telefono' 	 		=> $telefono,
			'direccion' 		=> $direccion,
			'horaEntrada'   	=> $horarioEntrada,
			'horaSalida'		=> $horarioSalida,
			'usuario'     		=> $usuario,
			'password'			=>$contraseña,
			'estado'			=>'1'
		);
		$res = $this->empleadosModel->insertarEmpleado($data);
			if($res){
				$this->session->set_flashdata('correcto','Se guardo exitosamente');
				redirect(base_url().'empleados');
			}else{
				$this->session->set_flashdata('error','No se guardo correctamente');
				redirect(base_url().'empleados/viewInsert');
			}
	}


	
	//ACTUALIZAR TRABAJADOR
	public function editarEmpleado($idEmpleado)
	{		
		$data = array(
			'empleadoEdit' => $this->empleadosModel->actualizaridEmpleado($idEmpleado)
		);
		$this->load->view('NavegacionAdministrador');
		$this->load->view('empleados/editarEmpleados',$data);
		$this->load->view('footer');
	}
	
	public function updateEmpleado()
	{
		$idEmpleado			=$this->input->post('txtidEmpleado');
		$nombre				= $this->input->post('txtnombre');
		$apellidoPaterno  	= $this->input->post('txtapellidoPaterno');
		$apellidoMaterno  	= $this->input->post('txtapellidoMaterno');
		$telefono   		= $this->input->post('txtcelular');
		$direccion  		= $this->input->post('txtDireccion');
		$horarioEntrada    	= $this->input->post('txthoraEntrada');
		$horarioSalida 		= $this->input->post('txthoraSalida');
		$usuario    		= $this->input->post('txtusuario');
		$contraseña    		= $this->input->post('txtcontra');
		$empleadoActual		= $this->empleadosModel->actualizaridEmpleado($idEmpleado);				
		$data = array(
			'idEmpleado'		=> $idEmpleado,
			'nombre'			=> $nombre,
			'apellidoPaterno' 	=> $apellidoPaterno,
			'apellidoMaterno' 	=> $apellidoMaterno,
			'telefono' 	 		=> $telefono,
			'direccion' 		=> $direccion,
			'horaEntrada'   	=> $horarioEntrada,
			'horaSalida'		=> $horarioSalida,
			'usuario'     		=> $usuario,
			'password'			=>$contraseña
		);
				$res = $this->empleadosModel->actualizarEmpleado($idEmpleado,$data);
				if ($res) {
					$this->session->set_flashdata('correcto','Se guardo correctamente');
					redirect(base_url().'empleados');
				}else{
					$this->session->set_flashdata('error','No se pudo actualizar el usuario');
					redirect(base_url().'empleados/editarEmpleados'.$idEmpleado);
				}
	}

	#ELIMINAR TRABAJADOR
	public function deleteEmpleado($idEmpleado)
	{
		$data = array(
			'estado' => "10",
		);
		$this->empleadosModel->actualizarEmpleado($idEmpleado,$data);
		redirect(base_url().'empleados/index');
	}
}
