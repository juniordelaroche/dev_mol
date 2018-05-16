<?php
	/**
	* 
	*/
	class Mciudad extends CI_Model	
	{
		
		function __construct()
		{
			parent::__construct();
		}

		function registrarCiudad($param){
			$campos = array(
				'ciudad' => $param['ciudad'],
				'sitreg' => $param['sitreg']
			);

			$this->db->insert('ciudades',$campos);
		}

		function getCiudades($s){
			$s = $this->db->order_by('id_ciudad')->get_where('ciudades',array('sitreg' => $s));
			return $s->result();
		}

	}
 ?>
	
