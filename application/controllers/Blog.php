<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {	
	public function index()
	{	$data['list']=array("test","Fau");
		$this->load->view('blogview',$data);
		$this->load->view('welcome_message');
	}
	public function coba1(){
		$data['list'] = array('Hobi','Agama','Jenis');
		$data['field'] = "siswa";
		$data['database']="akademik";
		$this->load->view('blogview',$data);
	}
}
