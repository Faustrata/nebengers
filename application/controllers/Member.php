<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Member extends CI_Controller
{

	public function __construct(){
		parent:: __construct();
		$this->load->library('access');
		$this->load->model('member_model');
	}
	public function index(){
		$vals = array(
                'img_path'	 => './captcha/',
                'img_url'	 => base_url().'captcha/',
                'img_width'	 => '300',
                'img_height' => 40,
                'border' => 0, 
                'expiration' => 7200
            );
            // create captcha image
        $cap = create_captcha($vals);
 
            // store image html code in a variable
        $data['image'] = $cap['image'];
 
            // store the captcha word in a session
        $this->session->set_userdata('mycaptcha', $cap['word']); 
		$this->load->view('layout/head');
		$this->load->view('signin',$data);
		$this->load->view('layout/foot');
	}
	public function signup(){

		if ($this->input->post('captcha') == $this->session->userdata('mycaptcha')) {
			$this->load->library('upload');
	        $nmfile = "file_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
	        $config['upload_path'] = './assets/uploads/'; //path folder
	        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
	        $config['max_size'] = '1512'; //maksimum besar file 3M
	        $config['max_width']  = '1400'; //lebar maksimum 5000 px
	        $config['max_height']  = '1300'; //tinggi maksimu 5000 px
	        $config['file_name'] = $nmfile; //nama yang terupload nantinya
	        $this->upload->initialize($config);

		        if ($this->upload->do_upload('photo')){

					$fname=$this->input->post('fullname');
					$email=$this->input->post('email');
					$photo=$_FILES['photo']['name'];
					$phone=$this->input->post('phone');
					$gender=$this->input->post('gender');
					$pass=$this->input->post('password');
					$pass=md5($pass);
					$date=date('Y-m-d');
					$data=array(
						'name'=> $fname ,
						'email'=> $email ,
						'password'=> $pass,
						'gender'=> $gender ,
						'phone'=> $phone ,
						'photo'=> $nmfile ,
						'register'=> $date 
						);
					$query=$this->member_model->add('passenger',$data);
					if($query){
						$this->session->set_flashdata('register_success','Congratulation');
						redirect('member');
					}
				}
				else{	//gagal upload
					$this->session->set_flashdata('upload_error','Image doesnt support');
					redirect('member');
				}
        }// if captcha
        else{
        	$this->session->set_flashdata('captcha_error','Capctcha doesnt match');
        	redirect('member');
        }
	}
	public function signup_success(){
		$this->load->view('layout/head');
		$this->load->view('register_success');
		$this->load->view('layout/foot');
	}
	public function signup_fail(){
		$this->load->view('layout/head');
		$this->load->view('register_fail');
		$this->load->view('layout/foot');
	}
	public function signin(){

		$email=$this->input->post('email',TRUE);
		$pass=$this->input->post('password',TRUE);

		$login=$this->access->login($email,$pass);
		if($login){
			echo "berhasil sig in";
			return TRUE;
		}else{
			$this->form_validation->set_message('check_login','Username atau Password salah');
			return FALSE;
		}

	}
	public function create_captcha(){
 
            $this->load->view('registrasi_view.php', $data);
	}
	public function check_captcha(){

	}
}