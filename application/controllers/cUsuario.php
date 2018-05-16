<?php 
	/**
	* 
	*/
	class CUsuario extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			$this->load->model('mUsuario');
		}

		function index()
		{
			$this->load->view('usuario/vRegistrarUsuario');
		}

		function datosUsuario()
		{
			//datos para tabla tbl_users
			$param['usuario'] = $this->input->post('txtusuario');
			$param['correo'] = $this->input->post('txtcorreo');
			$param['password'] = $this->input->post('txtpass');
			$param['p1'] = $this->input->post('p1');
			$param['p2'] = $this->input->post('p2');
			$param['p3'] = $this->input->post('p3');
			//datos para tabla tbl_answers
			$paramanswers['a1'] = $this->input->post('txtresp1');
			$paramanswers['a2'] = $this->input->post('txtresp2');
			$paramanswers['a3'] = $this->input->post('txtresp3');

			$last_id = $this->mUsuario->registrarUsuario($param);

				if($last_id > 0)
				{
					$paramanswers['id_user'] = $last_id;
					$this->mUsuario->registrarPreguntas($paramanswers);
					redirect('cLogin');
				}
		}
	}

?>