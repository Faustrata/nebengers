<?php if(!defined('BASEPATH')) exit ('No direct script access allowed');

/**
* 
*/
class Access
{
	public $user;

	function __construct()
	{
		$this->CI=& get_instance();
		$auth=$this->CI->config->item('auth');

		$this->CI->load->helper('cookie');
		$this->CI->load->model('member_model');

		$this->member_model=& $this->CI->member_model;

	}
	function login($username,$password){
		$result = $this->member_model->get_login_info($username);

		if($result){
			$password=md5($password);
			
			if($password===$result->password){
				$this->CI->session->set_userdata('id',$result->idpassenger);
				return TRUE;
			}
		}
		return FALSE;
	}

	function is_login(){
		return (($this->CI->session->userdata('id'))? TRUE : FALSE);
	}

	function logout(){
		$this->CI->session->unset_userdata('id');
	}
}