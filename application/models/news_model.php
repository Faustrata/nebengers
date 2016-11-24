<?php defined('BASEPATH') OR exit('No direct script access allowed');

class News_model extends CI_Model
{
	
	function __construct()
	{
		$this->load->database();
	}

	public function get_newsB(){
		$query=$this->db->get("news");
		return $query->result_array();
	}

	public function get_newsA($slug=False){
			if($slug===False){
				$query = $this->db->get('news');
				return $query->result_array();
			}
			$query=$this->db->get_where('news',array('slug'=>$slug));
			return $query->row_array();
	}


	public function do_edit($id){
		$query=$this->db->get_where('news',array('id'=>$id));
		return $query->row_array();
	}

	public function tambah_data($data){
		$query=$this->db->insert('news',$data);
		return $query;
	}
	public function update_data($table,$data,$where){
		$query=$this->db->update($table,$data,$where);
		return $query;
	}
}