<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
* test
*/
class News extends CI_Controller
{
	function __construct()
	{
		parent:: __construct();
		$this->load->model('news_model');
		$this->load->library('form_validation');
	}

	public function index(){
		$data['title'] =  'New Archieve';

		$data['news'] = $this->news_model->get_newsB();

		$this->load->view('news/index',$data);

	}

	public function tabel(){
		$data['title'] =  'New Archieve';

		$data['news'] = $this->news_model->get_newsB();

		$this->load->view('news/tabel',$data);
	}
	public function tabel2(){
		$data['title'] =  'New Archieve';

		$data['news'] = $this->news_model->get_newsB();

		$this->load->view('news/tabel',$data);
	}
	public function tabel3(){
		$data['title'] =  'New Archieve';

		$data['news'] = $this->news_model->get_newsB();

		$this->load->view('news/tabel',$data);
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
	public function tambah(){
		if($this->form_validation->run()== FALSE){
			$this->load->view('news/create');
		}
		else{
			$this->load->view('news/sukses');
		}
		
	}
	public function add(){

		$this->form_validation->set_rules('nama','Nama','required');
		$this->form_validation->set_rules('samaran','Samaran','required');
		$this->form_validation->set_rules('password','PAssword','required');
		$this->form_validation->set_rules('ulangpassword','Ulang PAssword','required');
		$this->form_validation->set_rules('email','Email','required|valid_email');
		$this->form_validation->set_rules('umur','Umur','integer');

		if($this->form_validation->run()==FALSE){
			$this->load->view('news/create');
		}else{
			$this->load->view('news/sukses');
		}
	}

}