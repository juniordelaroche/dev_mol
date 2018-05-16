<?php
	/**
	* 
	*/
	class Cpreguntas extends CI_Controller	
	{
		
		function __construct()
		{
			parent::__construct();
			$this->load->model('mPreguntas');
		}

		function getPreguntas(){
		$s = $this->input->post('sitreg');
		$resultado = $this->mPreguntas->getPreguntas($s);

		//convertir resultado a jquery 
		echo json_encode($resultado);
		}

	}
 ?>