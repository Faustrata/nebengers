<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->view('welcome_message');
	}
	/*
	public function kirimdata(){
		$data['siswa']=array('Ocha','Kelas 12 B','Perempuan');
		$this->load->view('welcome_view',$data);
	}
	*/
	public function ujicoba(){
		echo "<h2>Ini adalah function ujicoba pertama</h2>";
	}
	public function ujicoba2($nilai1,$nilai2){
		$hasil=$nilai1+$nilai2;
		echo $hasil;
	}
	public function tampil_view(){

		$data['nama']='Fauzan';
		$data['kelas']='12 B';
		$data['sekolah']='SMKI UTAMA';

		$this->load->view('tampil',$data);
	}

}
