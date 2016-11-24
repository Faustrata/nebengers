<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
* 
*/
class Pasien_model extends CI_Model
{	
	function __construct()
	{
		$this->load->database();
	}
	public function get_pasien(){
		
		$query=$this->db->query("SELECT * FROM tb_pasien ORDER BY kodepasien ASC");

		return $query->result_array();
	}
	public function detail_pasien($ket){
		
		$query=$this->db->get_where('tb_pasien',array('kodepasien'=>$ket));

		return $query->row_array();
	}
	public function do_update($table,$data,$where){
		$query=$this->db->update($table,$data,$where);
		return $query;
	}
	public function do_delete($table,$where){
		$query=$this->db->delete($table,$where);
		return $query;
	}

}