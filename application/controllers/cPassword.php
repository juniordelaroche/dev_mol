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
			$this->load->helper('url');
			$this->load->library('session');
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
			//echo 'las preguntas relacionadas con ' . $this->input->post('txtcorreo') . '<br>';
			$i=1;
			foreach ($resultado->result() as $row) 
			{
				echo $i;
				if ($i == 1) {
					$data['p1'] = $row->question;
				}elseif ($i ==2 ) {
					$data['p2'] = $row->question;
				}else{
					$data['p3'] = $row->question;
				}
				$i++;
			}
			
			//print_r($resultado->result());
			/*print_r($resultado->row(0));
			print_r($resultado->row(1));
			print_r($resultado->row(2));*/

			/*$data['p1'] = "hola";
			$data['p2'] = 'hola soy junior';
			$data['p3'] = 'hola soy yo again';*/
			//echo json_encode($resultado);
			$this->load->view('vResponderPreguntas',$data);
			//echo $resultado;
			//print_r($resultado);
		}
	}
?>