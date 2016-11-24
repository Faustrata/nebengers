<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
* 
*/
class Pasien extends CI_Controller
{
	function __construct(){
		parent:: __construct();
		$this->load->model('pasien_model');
	}
	
	public function index(){
		
		$data['pasien'] = $this->pasien_model->get_pasien();
		$this->load->view('pasien/pasienview',$data);
	}
	public function lihat($ket){
		
		$data['detail'] = $this->pasien_model->detail_pasien($ket);
		if(empty($data['detail'])){
			show_404();
		}
		$this->load->view('pasien/pasiendetail',$data);
	}
	public function update(){
		
		$kode=$this->input->post('kode');
		$nama=$this->input->post('nama');
		$jenis=$this->input->post('jenis');
		$deskripsi=$this->input->post('deskripsi');
		$data=array(
			'namapasien' => $nama,
			'jenispasien' => $jenis,
			'deskripsi' => $deskripsi
				);
		$where=array('kodepasien'=>$kode);
		$query=$this->pasien_model->do_update('tb_pasien',$data,$where);

		if($query>=1){
			$this->session->set_flashdata('update','Data Berhasil di edit');
			redirect('pasien/index');
		}
		
	}
	public function hapus($id){
		
		$query==$this->pasien_model->do_delete('tb_pasien',array('kodepasien'=>$id));
		if($query>=1){
			echo "<h1>Data berhasil terupdate </h1><br>";
			echo "<a href='./'>Lihat Data Pasien</a>";
		}
	}
}