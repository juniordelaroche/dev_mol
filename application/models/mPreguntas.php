<?php 
	/**
	* 
	*/
	class Mpreguntas extends CI_Model
	{
		
		function __construct()
		{
			parent::__construct();
		}
		function getPreguntas($s){
			$s = $this->db->order_by('id')->get_where('tbl_questions',array('sitreg' => $s));
			return $s->result();
		}
	}
?>