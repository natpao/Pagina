<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class administrador extends CI_Controller 
{
	
	public function index(){
		$this->load->view('NavegacionAdministrador');
		$this->load->view('contenidoAdministrador');
		$this->load->view('footer');
	}
	

}
