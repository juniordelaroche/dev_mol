<?php 
/**
* 
*/
class Mnotas extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}

	function getNotas(){
		$query = $this->db->query("select p.id_persona, p.nombre || ' ' || p.apellido as alumno,
		n.primer_bimestre, n.segundo_bimestre, n.tercer_bimestre, n.nota_final
		from notas n right join personas p on p.id_persona = n.id_personas order by p.id_persona");



		/*$this->db->select("p.id_persona, p.nombre || ' ' || p.apellido as alumno,
		n.primer_bimestre, n.segundo_bimestre, n.tercer_bimestre, n.nota_final");
		$this->db->from('notas n');
		$this->db->join('personas p','p.id_persona = n.id_persona','right');

		$r = $this->db->get();*/

		return $query->result();
	}

	function guardarNotas($param){
		$campos = array(
			'id_personas' => $param['idPer'],
			'primer_bimestre' => $param['n1'],
			'segundo_bimestre' => $param['n2'],
			'tercer_bimestre' => $param['n3'],
			'nota_final' => $param['nf']
		);

		$this->db->insert('notas',$campos);
	}
}
?>