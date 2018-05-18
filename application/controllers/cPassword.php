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
			$i=1;
			foreach ($resultado->result() as $row) 
			{
				if ($i == 1) {
					$data['p1'] = $row->question;
				}elseif ($i ==2 ) {
					$data['p2'] = $row->question;
				}else{
					$data['p3'] = $row->question;
				}
				$i++;
			}
			$this->load->view('vResponderPreguntas',$data);
		}
	}
?>