<?php 
	class clientesModel extends CI_Model
	{
		//Mostrar CLIENTES
		public function selectCliente()
		{
			$this->db->where('estado <=','2');
			$resultado = $this->db->get('cliente');
			return $resultado->result();
		}
		//INSERTAR CLIENTES
		public function insertarCliente($data)
		{
			return $this->db->insert('cliente',$data);
		}

		//OBTENER CLIENTES
		public function actualizaridCliente($idCliente)
		{
			$this->db->where('idCliente',$idCliente);
			$resultado = $this->db->get('cliente');
			return $resultado->row();
		}
		//MODIFICAR CLIENTES
		public function actualizarCliente($idCliente,$data)
		{
			$this->db->where('idCliente',$idCliente);
			return $this->db->update('cliente',$data);
		}
	}
 ?>
