<?php 
	
	/**
	* 
	*/
	class CEnviarCorreos extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
		}

		function index(){
			$this->load->view('layouts/header');
			$this->load->view('layouts/menu');
			$this->load->view('vEnviarCorreos');
			$this->load->view('layouts/footer');
		}
	}

?>