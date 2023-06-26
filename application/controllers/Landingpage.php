<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Landingpage extends CI_Controller {

	public function __construct()
	{
	  parent::__construct();
	  $this->load->model('m_login');
	  $this->load->database();
	}
	public function index()
	{
		$session = $this->session->userdata('isLogin', TRUE);
		$this->load->view('landingpage_view');
	}
	public function login_form()
	{
		$session = $this->session->userdata('isLogin', TRUE);
		$haveaccount = $this->session->userdata('haveaccount', TRUE);
		if ($session == FALSE) {
			$this->load->view('login_user_view');
		} else {
			redirect('splitmenu');
		}
	}
	
	public function submit_login()
	{	
		$email  = $this->input->post('email');
		$cek       = $this->m_login->ambilPengguna($email);
		if ($cek <> 0) {
			$this->session->set_userdata('isLogin', TRUE);
			$this->session->set_userdata('haveaccount', TRUE);
			$this->session->set_userdata('email', $email);
			redirect('splitmenu');
		} else {
			$this->session->set_userdata('isLogin', TRUE);
			$this->session->set_userdata('haveaccount', FALSE);
			$this->session->set_userdata('email', $email);
			redirect('splitmenu');
		}	
	}
}
