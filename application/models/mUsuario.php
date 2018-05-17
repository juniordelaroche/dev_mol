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
		function getRespuestas($param)
		{
			//obtiene las respuestas segun el correo de la persona
			$this->db->select('a.answer_1, a.answer_2, a.answer_3');
			$this->db->from('tbl_answers a');
			$this->db->join('tbl_users u', 'a.id_user = u.userid');
			$this->db->where('u.useremail',$param);

			$r = $this->db->get();
			return $r->result();

		}
		function getPreguntas($param)
		{
			/*busca los id de las preguntas de la tabla tbl_user relacionados con el 
			correo del usuario correspondiente*/

			$this->db->select('id_question_1, id_question_2, id_question_3');
			$this->db->from('tbl_users');
			$this->db->where('useremail',$param);
			$preguntas = $this->db->get();
			foreach ($preguntas->result() as $row) {
				$id1 = $row->id_question_1;
				$id2 = $row->id_question_2;
				$id3 = $row->id_question_3;
			}
			/*busca las preguntas en la tabla tbl_questions con los id previamente seleccionados
			*/
			$this->db->select('question');
			$this->db->from('tbl_questions');
			$this->db->where('id',$id1);
			$this->db->or_where('id',$id2);
			$this->db->or_where('id',$id3);
			$resultado = $this->db->get();
			return $resultado;//->result();

		}
	}
?>