<?php 
	class empleadosModel extends CI_Model
	{
		//Mostrar empleados
		public function selectEmpleado()
		{
			$this->db->where('estado <=','2');
			$resultado = $this->db->get('empleado');
			return $resultado->result();
		}
		//INSERTAR empleados
		public function insertarEmpleado($data)
		{
			return $this->db->insert('empleado',$data);
		}

		//OBTENER empleados
		public function actualizaridEmpleado($idEmpleado)
		{
			$this->db->where('idEmpleado',$idEmpleado);
			$resultado = $this->db->get('empleado');
			return $resultado->row();
		}
		//MODIFICAR empleados
		public function actualizarEmpleado($idEmpleado,$data)
		{
			$this->db->where('idEmpleado',$idEmpleado);
			return $this->db->update('empleado',$data);
		}
	}
 ?>
