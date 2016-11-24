<?php defined('BASEPATH') OR exit('No direct script access allowed');

class News extends CI_Controller
{
	function __construct()
	{
		parent:: __construct();
		$this->load->model('news_model');

	}
	public function index(){
		$data['judul'] =  'New Archieve';

		$data['news'] = $this->news_model->get_newsB();

		$this->load->view('news/index',$data);
	}
	//tambahan fungsi di bawah ini
	public function lihattabel(){

		$data['judul'] =  'Master Berita';
		$data['news'] = $this->news_model->get_newsB();
		
		$this->load->view('templates/header',$data);
		$this->load->view('news/tabel',$data);
	}

	public function inputdata(){
		$data['judul']="Inputkan Data Berita";
		$this->load->view('templates/header',$data);
		$this->load->view('news/create');	
	}
	public function mengedit($id){
		$data['judul'] =  'Edit Berita';
		$this->load->view('templates/header',$data);
		$data['detail'] = $this->news_model->do_edit($id);
		if(empty($data['detail'])){
			echo "kosong";
			//show_404();
		}
		$this->load->view('news/edit',$data);
	}
	
	public function menambah(){
		//print_r($_POST);
		$judul=$this->input->post('judul');
		//sesuaikan dengan nama di textfield
		$slug=$this->input->post('slug');
		$isi=$this->input->post('isi');
		$data=array(
			'title' =>$judul,
			'slug'	=>$slug,
			'text'	=>$isi
			);
		$res=$this->news_model->tambah_data($data);
			if($res>=1){
				$this->load->view('news/sukses');
			}
			else{
				echo "gagal";
			}	
	}

	public function mengupdate(){
		
		$id=$this->input->post('id');
		$judul=$this->input->post('judul');
		$slug=$this->input->post('slug');
		$isi=$this->input->post('isi');
		$data=array(
			'title' => $judul,
			'slug' => $slug,
			'text' => $isi
			);
		$where=array('id'=>$id);
		$query=$this->news_model->update_data('news',$data,$where);

		if($query>=1){
			$this->session->set_flashdata('update','Data Berhasil di edit');
			redirect('news/lihattabel');
		}
	}

	



















	public function view($slug = Null){

		$data['news_item'] = $this->news_model->get_newsB($slug);
		if(empty($data['news_item'])){
			show_404();
		}
		$data['title'] = $data['news_item']['title'];
		$this->load->view('templates/header',$data);
		$this->load->view('news/view');
		$this->load->view('templates/footer');

	}
	public function tampil($slug = Null){

		$data['news_item'] = $this->news_model->tampil($slug);
		if(empty($data['news_item'])){
			show_404();
		}
		$data['title'] = $data['news_item']['title'];
		$this->load->view('templates/header',$data);
		$this->load->view('news/view');
		$this->load->view('templates/footer');

	}
}