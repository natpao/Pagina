<?php 

	class loginAdministradorModel extends CI_Model
	{
		public function loginCliente($user,$pass)
		{
		  $this->db->where('usuario',$user);
		  $this->db->where('password',$pass);
		  $resultado = $this->db->get('empleado');
		  if($resultado->num_rows()>0){
		  	return $resultado->row();
		  }else{
		  	return false;
		  }
		}
	}
 ?>