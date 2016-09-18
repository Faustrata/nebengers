<?php defined('BASEPATH') OR exit('No direct script access allowed');

class News_model extends CI_Model
{
	
	function __construct()
	{
		$this->load->database();
	}
	public function get_newsA($slug=False){
		if($slug===False){
			$query = $this->db->get('news');
			return $query->result_array();
		}
		$query=$this->db->get_where('news',array('slug'=>$slug));
		return $query->row_array();
	}

	public function get_newsB(){
		//$query=$this->db->query("SELECT * FROM news");
		$query=$this->db->get("news");
		
		return $query->result_array();

	}


	public function tampil($slug){
		$query=$this->db->get_where('news',array('slug'=>$slug));
		return $query->row_array();
	}

	public function do_add($data){
		$query=$this->db->insert('news',$data);
		return $query;
	}
}