<?php 
	class platillosModel extends CI_Model
	{
		//Mostrar platillos
		public function selectPlatillo()
		{
			$this->db->where('estado <=','2');
			$resultado = $this->db->get('platillo');
			return $resultado->result();
		}
		//INSERTAR platillos
		public function insertarPlatillo($data)
		{
			return $this->db->insert('platillo',$data);
		}

		//OBTENER platillos
		public function actualizaridPlatillo($idPlatillo)
		{
			$this->db->where('idPlatillo',$idPlatillo);
			$resultado = $this->db->get('platillo');
			return $resultado->row();
		}
		//MODIFICAR platillos
		public function actualizarPlatillo($idPlatillo,$data)
		{
			$this->db->where('idPlatillo',$idPlatillo);
			return $this->db->update('platillo',$data);
		}
	}
 ?>
