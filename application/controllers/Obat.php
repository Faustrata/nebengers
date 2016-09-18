<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
* 
*/
class Obat extends CI_Controller
{
	function __construct(){
		parent:: __construct();
		$this->load->model('obat_model');
	}
	
	public function index(){
		
		$data['obat'] = $this->obat_model->get_obat();
		$this->load->view('obat/obatview',$data);
	}
	public function lihat($ket){
		
		$data['detail'] = $this->obat_model->detail_obat($ket);
		if(empty($data['detail'])){
			show_404();
		}
		$this->load->view('obat/obatdetail',$data);
	}
	public function update(){
		
		$kode=$this->input->post('kode');
		$nama=$this->input->post('nama');
		$jenis=$this->input->post('jenis');
		$deskripsi=$this->input->post('deskripsi');
		$data=array(
			'namaobat' => $nama,
			'jenisobat' => $jenis,
			'deskripsi' => $deskripsi
				);
		$where=array('kodeobat'=>$kode);
		$query=$this->obat_model->do_update('tb_obat',$data,$where);

		if($query>=1){
			$this->session->set_flashdata('update','Data Berhasil di edit');
			redirect('obat/index');
		}
		
	}
	public function hapus($id){
		
		$query==$this->obat_model->do_delete('tb_obat',array('kodeobat'=>$id));
		if($query>=1){
			echo "<h1>Data berhasil terupdate </h1><br>";
			echo "<a href='./'>Lihat Data Obat</a>";
		}
	}
}