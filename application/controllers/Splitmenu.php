<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class splitmenu extends CI_Controller {

	public function __construct()
	{
	  parent::__construct();
	  $this->load->model('m_splitmenu');
	  $this->load->database();
	}
	public function index()
	{
		$session = $this->session->userdata('isLogin', TRUE);
		$email = $this->session->userdata('email');
		if ($session == FALSE) {
			redirect('login/login_form');
		} else {
			$this->load->view('splitmenu_view' );
		}
	}
	
	public function cekuser()
	{	
		$email = $this->session->userdata('email');
		$cek       = $this->m_splitmenu->ambilPengguna($email);
		if ($cek <> 0) {
			$data1			= $this->m_splitmenu->get_data($email);
			$data				= array();
				if ($data1->num_rows() > 0) {
					foreach ($data1->result_array() as $row) {
						$data[] = $row;
					}
				}
			echo json_encode($data);
		} else {
			$data				= array('kosong');
			echo json_encode($data);
		}	
	}
}