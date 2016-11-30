<?php defined('BASEPATH') OR exit('No direct script access allowed');

class member_model extends CI_Model
{	
	public $table='passenger';
	public $primari_key='idpassenger';

	public function __construct(){
		$this->load->database();
	}
	public function add($table,$data){
		$save=$this->db->insert($table,$data);
		return $save;
	}
	public function get_login_info($username){
		$this->db->where('email',$username);
		$this->db->limit(1);
		$query=$this->db->get($this->table);

		return ($query->num_rows()>0) ? $query->row():FALSE;
	}
}