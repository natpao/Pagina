<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Inicio extends CI_Controller 
{

	public function index(){
		$this->load->view('NavegacionPrincipal');
		$this->load->view('slider');
		$this->load->view('contenido');
		$this->load->view('footer');
	}



}
