<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Email extends CI_Controller
{
	public function __construct(){
		parent:: __construct();
		$this->load->library('email');
	}
	public function sendmail(){
		//echo gethostbyname("host.name.tld");
		$config=array(
			'protocol'=> "smtp",
			'smtp_host'=> "ssl://smtp.gmail.com",
			'mailpath' => "/usr/sbin/sendmail",
			'smtp_port'=> '465',
			'smtp_timeout'=>'7',
			'smtp_user'=> 'dulex29@gmail.com',
			'smtp_pass'=> 'LENOVOI3',
			'charset'=> 'UTF-8',
			'mailtype'=> 'html',
			'newline'=> '\r\n',
			'validation'=> TRUE
			);
		$this->email->initialize($config);
		$this->email->set_newline("\r\n");
		$this->email->to('akhmadfauzan114@gmail.com');
		$this->email->from('dulex29@gmail.com');
		$this->email->subject('Tes Mail dengan Code Igniter');
		$this->email->message('Modifikasi');
		if ($this->email->send()) {
            echo 'Email sent.';
        } else {
            show_error($this->email->print_debugger());
        }
	}
}