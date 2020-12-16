<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class homeUsuario extends CI_Controller 
{

	public function index(){
		$this->load->view('NavegacioUsuario');
		$this->load->view('contenidoUsuario');
		$this->load->view('footer');
	}



}
