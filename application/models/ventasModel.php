<?php 
	class ventasModel extends CI_Model
	{
		//Mostrar VENTAS
		public function selectVenta()
		{
			$this->db->select('venta.idVenta,cliente.nombre AS nombreCliente,cliente.apellidoPaterno,cliente.apellidoMaterno,cliente.direccion,platillo.nombre AS nombrePlatillo,venta.fecha, venta.cantidad,venta.total');
			$this->db->from('cliente');
			$this->db->join('venta','cliente.idCliente=venta.idCliente');
			$this->db->join('platillo','venta.idPlatillo=platillo.idPlatillo');
			
			$resultado = $this->db->get();
			return $resultado->result();
		}
		//INSERTAR VENTAS
		public function insertarVenta($data)
		{
			return $this->db->insert('venta',$data);
		}

		//OBTENER VENTAS
		public function actualizaridVenta($idVenta)
		{
			$this->db->where('idVenta',$idVenta);
			$resultado = $this->db->get('venta');
			return $resultado->row();
		}
		//MODIFICAR VENTAS
		public function actualizarVenta($idVenta,$data)
		{
			$this->db->where('idVenta',$idVenta);
			return $this->db->update('venta',$data);
		}
		//Motrar combos
		public function mcomboTabla($tabla){
			$this->db->where('estado','1');
			$resultado = $this->db->get($tabla);
			return $resultado->result();
		}
	}
 ?>
