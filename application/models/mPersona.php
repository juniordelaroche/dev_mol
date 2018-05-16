<?php 
	/**
	* 
	*/
	class Mpersona extends CI_Model
	{
		
		function __construct()
		{
			parent::__construct();
		}

		function registrarPersona($param){
			$campos = array(
				'nombre' => $param['nombre'],
				'apellido' => $param['apellido'],
				'cedula' => $param['cedula'],
				'fecha_nac' => $param['fecha_nac'],
				'correo' => $param['correo'],
				'id_ciudad' => $param['ciudad']
			);

			$this->db->insert('personas',$campos);
			
			return $this->db->insert_id();	
		}

		function actualizarPersona($param){
			$campos = array(
				'nombre' => $param['nombre'],
				'apellido' => $param['apellido'],
				'correo' => $param['correo']
			);
			$this->db->where('id_persona',$this->session->userdata('sess_idpersona'));
			$this->db->update('personas',$campos);
			
		}

		function eliminarPersona($idP){
			//ELIMINAR PERSONA
			$campos = array(
				'id_persona' => $idP
			);

			$this->db->delete('personas',$campos);

			//OTRA FORMA DE ELIMINAR
			/*$this->db->where('id_persona',$idP);
			$this->db->delete('personas');*/

		}

		function getPersonas(){
			$this->db->select('p.id_persona, p.nombre, p.apellido, p.cedula, p.fecha_nac, p.correo, c.ciudad');
			$this->db->from('personas as p');
			$this->db->join('ciudades as c', 'c.id_ciudad = p.id_ciudad');
			$this->db->order_by('p.id_persona');

			$r = $this->db->get();

			return $r->result();
		}
	}
?>