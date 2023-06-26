<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Invitation extends CI_Controller {

	public function __construct()
	{
	  parent::__construct();
	  $this->load->model('m_invitation');
	  $this->load->database();
	}
	public function index()
	{
		$session = $this->session->userdata('isLogin', TRUE);
		$email = $this->session->userdata('email');
		if ($session == FALSE) {
			redirect('login/login_form');
		} else {
			$data['data_user'] = $this->m_invitation->get_data($email);
			$this->load->view('invitation_view', $data);
		}
	}
	
	function get_data_business() 
	{
		$user_id	= $this->input->post('user_id');
		$data1			= $this->m_invitation->get_data($user_id);
		$data				= array();
			if ($data1->num_rows() > 0) {
				foreach ($data1->result_array() as $row) {
					$data[] = $row;
				}
			}
		echo json_encode($data);
	}

	
}
