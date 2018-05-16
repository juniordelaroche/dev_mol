<?php 
	/**
	* 
	*/
	class Csendmail extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
		}

		function sendMailGmail(){
			$this->load->library('email');

			$configGmail = array(
				'protocol' => 'smtp',
				'smtp_host' => 'ssl://smtp.googlemail.com',
				'smtp_port' => 465,
				'smtp_user' => 'juniordelaroche@gmail.com',
				'smtp_pass' => '7069765Freddy*',
				'mailtype' => 'html',
				'charset' => 'utf-8',
				'newline' => "\r\n"
			);

			$this->email->initialize($configGmail);

			$this->email->from('jdelaroche@mitickeraonline.com');
			$this->email->to('juniordelaroche@gmail.com');
			$this->email->subject('TEST');
			$this->email->message('<h2> Correo de prueba </h2>
				<br>
				<p> Hola este es un correo de prueba entra al siguiente enlace <a href="'.base_url().'">Link</a></p>

				');

			for ($i=1 ;$i <= 1; $i++){ 
				if($this->email->send()){	
					echo "enviado";
				}else{
					show_error($this->email->print_debugger());
				}
				sleep(1);
			}	
		}
	}
?>