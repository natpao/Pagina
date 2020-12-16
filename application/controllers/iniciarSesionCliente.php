<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class iniciarSesionCliente extends CI_Controller 
{
	function __construct()
	{
		parent:: __construct();
		$this->load->model('loginClienteModel');
		$this->load->model('clientesModel');
		
	}
	
	public function index(){
		
			$this->load->view('NavegacionPrincipal');
			$this->load->view('loginUsuario');
			$this->load->view('footer');
	}
	public function loginSesionCliente()
	{
		$txtusuario = $this->input->post('txtusuario');
		$txtcontra   = $this->input->post('txtcontra');
		$res 	   = $this->loginClienteModel->loginCliente($txtusuario,$txtcontra);
		//var_dump($res);
		if (!$res) {
		    $this->session->set_flashdata('error','El usuario y/0 contraseña son incorrectos');
		    redirect(base_url().'iniciarSesionCliente');
		 } else{
		 	$data = array(
		 		'idCliente' => $res->idCliente,
		 		'nombre'	=>$res->nombre,
		 		'apellidoPaterno' =>$res->apellidoPaterno,
		 		'apellidoMaterno' =>$res->apellidoMaterno,
		 		'nombres'	=> $res->nombre.' '.$res->apellidoPaterno,
		 		'telefono'	=>$res->telefono,
		 		'direccion'	=>$res->direccion,
		 		'usuario'	=>$res->usuario,
		 		'login'		=> TRUE,
		 	);
		 	echo $this->session->set_userdata($data);
		 	redirect(base_url().'homeUsuario');
		 }
	}
	public function cerrarSesionCliente()
	{
		$this->session->sess_destroy();
		redirect(base_url().'iniciarSesionCliente');
	}
	public function crearCuenta(){
		
			$this->load->view('NavegacionPrincipal');
			$this->load->view('crearCuenta');
			$this->load->view('footer');
	}
	public function insertarCliente()
	{
		$nombre				= $this->input->post('txtnombre');
		$apellidoPaterno  	= $this->input->post('txtapellidoPaterno');
		$apellidoMaterno  	= $this->input->post('txtapellidoMaterno');
		$telefono   		= $this->input->post('txtcelular');
		$direccion  		= $this->input->post('txtDireccion');
		$usuario    		= $this->input->post('txtusuario');
		$contraseña    		= $this->input->post('txtcontra');
		$data = array(
			'nombre'			=> $nombre,
			'apellidoPaterno' 	=> $apellidoPaterno,
			'apellidoMaterno' 	=> $apellidoMaterno,
			'telefono' 	 		=> $telefono,
			'direccion' 		=> $direccion,
			'usuario'     		=> $usuario,
			'password'			=>$contraseña,
			'estado'			=>'1'
		);
		$res = $this->clientesModel->insertarCliente($data);
			if($res){
				$this->session->set_flashdata('correcto','Se guardo exitosamente');
				redirect(base_url().'iniciarSesionCliente/index');
			}else{
				$this->session->set_flashdata('error','No se guardo correctamente');
				redirect(base_url().'iniciarSesionCliente/viewInsert');
			}
	}

}
