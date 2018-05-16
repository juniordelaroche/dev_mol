<?php 
	/**
	* 
	*/
	class Mlogin extends CI_Model
	{
		
		function ingresar($user,$pass){
			$this->db->select('u.id_usuario, u.clave, p.id_persona, p.nombre, p.apellido');
			$this->db->from('usuarios as u');
			$this->db->join('personas as p','u.id_usuario = p.id_persona');
			$this->db->where('nombre_usuario',$user);

			$resultado = $this->db->get();

			return $resultado;
				
			

			

			/*$this->db->select('u.id_usuario, p.nombre, p.apellido');
			$this->db->from('usuarios as u');
			$this->db->join('personas as p','u.id_usuario = p.id_persona');
			$this->db->where('u.nombre_usuario',$user);
			$this->db->where('u.clave',$pass);

			$resultado_datos = $this->db->get();*/
		}
		
	}
?>