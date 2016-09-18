<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Latihan extends CI_Controller{
	
	public function index(){
		echo " Latihan";
	}
	public function ujicoba(){
		$this->load->view('latihan_view');
	}
	public function perkalian($nilai1,$nilai2){
		$hasil=$nilai1*$nilai2;
		echo $hasil;
	}
	
}