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

		function registrarUsuario($param)
		{
			$campos = array(
				'username' => $param['usuario'],
				'useremail' => $param['correo'],
				'userpass' => $param['password'],
				'userstatus' => 'Y',
				'tokencode' => '123',
				'id_question_1' => $param['p1'],
				'id_question_2' => $param['p2'],
				'id_question_3' => $param['p3']
			);
			$this->db->insert('tbl_users',$campos);
			return $this->db->insert_id();
		}

		function registrarPreguntas($param)
		{
			$campos = array(
				'id_user' => $param['id_user'],
				'answer_1' => $param['a1'],
				'answer_2' => $param['a2'],
				'answer_3' => $param['a3']
			);
			$this->db->insert('tbl_answers',$campos);
		}

		function eliminarUsuario($idU)
		{
			$campos = array(
				'id_persona' => $idU
			);

			$this->db->delete('usuarios',$campos);
		}
	}
?>