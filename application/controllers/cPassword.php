<?php 
	/**
	* 
	*/
	class Cpassword extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			//$this->load->model('mPassword');
			$this->load->model('mUsuario');
		}

		function index()
		{
			$this->load->view('vOlvidePass');
		}

		function getRespuestas()
		{
			$correo = $this->input->post('txtcorreo');
			$resultado = $this->mUsuario->getRespuestas($correo);
			//print_r($resultado);
		}

		function getPreguntas()
		{
			$correo = $this->input->post('txtcorreo');
			$resultado = $this->mUsuario->getPreguntas($correo);
			echo 'las preguntas relacionadas con ' . $this->input->post('txtcorreo') . '<br>';
			foreach ($resultado->result() as $row) {
				echo $row->question, '<br>';
			}
			//echo $resultado;
			//print_r($resultado);
		}
	}
?>