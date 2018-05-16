<?php 
	/**
	* 
	*/
	class Clogin extends CI_Controller
	{
		function __construct()
		{
			parent::__construct();
			$this->load->model('mLogin');
			
		}

		function index(){
			$data['mensaje'] = '';
			$this->load->view('vLogin',$data);
		}

		function ingresar(){
			$user = $this->input->post('txtusuario');
			$pass = $this->input->post('txtclave');

			$result = $this->mLogin->ingresar($user,$pass);

			foreach ($result->result() as $row) {
				$clave = $row->clave;
				$nombre = $row->nombre;
				$apellido = $row->apellido;
			}
			if ($result->num_rows >= 1 && password_verify($pass,$clave)) {

				$r = $result->row();

				$s_usuario = array(
					'sess_idpersona' => $r->id_persona,
					'sess_idusuario' => $r->id_usuario,
					'sess_usuario' => $r->nombre
				);


				$this->session->set_userdata($s_usuario);
				$this->load->view('layouts/header');
				$this->load->view('layouts/menu');
				$this->load->view('persona/vActualizarPersona');
				$this->load->view('layouts/footer');
			}else{
				$data['mensaje'] = 'Datos erroneos';
				$this->load->view('vLogin',$data);
			}

		}
		function cerrarSesion() {

		    $this->session->sess_destroy();
		    redirect('cLogin');
		}
	}
?>