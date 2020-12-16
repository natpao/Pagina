<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class iniciarSesionAdministrador extends CI_Controller 
{
	function __construct()
	{
		parent:: __construct();
		$this->load->model('loginAdministradorModel');
		
	}
	
	public function index(){
		
			$this->load->view('NavegacionPrincipal');
			$this->load->view('loginAdministrador');
			$this->load->view('footer');
		}
	public function loginSesionAdministrador()
	{
		$txtusuario = $this->input->post('txtusuario');
		$txtcontra   = $this->input->post('txtcontra');
		$res 	   = $this->loginAdministradorModel->loginCliente($txtusuario,$txtcontra);
		//var_dump($res);
		if (!$res) {
		    $this->session->set_flashdata('error','El usuario y/0 contraseña son incorrectos');
		    redirect(base_url().'iniciarSesionAdministrador');
		 } else{
		 	$data = array(
		 		'idCliente' => $res->idCliente,
		 		'nombre'	=>$res->nombre,
		 		'apellidoPaterno' =>$res->apellidoPaterno,
		 		'nombres'	=> $res->nombre.' '.$res->apellidoPaterno
		 	);
		 	echo $this->session->set_userdata($data);
		 	redirect(base_url().'administrador');
		 }
	}
	public function cerrarSesionCliente()
	{
		$this->session->sess_destroy();
		redirect(base_url().'inciarSesionAdministrador');
	}


}
