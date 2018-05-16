<?php 
	/**
	* 
	*/
	class MUsuario extends CI_Model
	{
		
		function __construct()
		{
			parent::__construct();
		}

		function registrarUsuario($param){
			$campos = array(
				'nombre_usuario' => $param['nombre_usuario'],
				'clave' => $param['clave'],
				'id_persona' => $param['id_persona']
			);
			$this->db->insert('usuarios',$campos);
		}

		function eliminarUsuario($idU){
			$campos = array(
				'id_persona' => $idU
			);

			$this->db->delete('usuarios',$campos);
		}
	}
?>