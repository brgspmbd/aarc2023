<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class submission_paper extends CI_Controller {

	public function __construct()
	{
	  parent::__construct();
	  $this->load->model('m_submission_paper');
	  $this->load->database();
	}
	public function index()
	{
		$session = $this->session->userdata('isLogin', TRUE);
		$haveaccount = $this->session->userdata('haveaccount', TRUE);
		$email = $this->session->userdata('email');
		if ($session == FALSE ) {
			redirect('login/login_form');
		} else  if ($session == TRUE && $haveaccount == FALSE) {
			redirect('splitmenu');
		} else {
			$data['data_user'] = $this->m_submission_paper->get_data($email);
			$this->load->view('submission_paper_view', $data);
		}
	}
	
	function get_data_paper() 
	{
		$user_id	= $this->input->post('user_id');
		$data1			= $this->m_submission_paper->get_data_paper($user_id);
		$data				= array();
			if ($data1->num_rows() > 0) {
				foreach ($data1->result_array() as $row) {
					$data[] = $row;
				}
			}
		echo json_encode($data);
	}
	function insert() {
		$paper_id					= $this->input->post('paper_id')? $this->input->post('paper_id'):'';
		$id_user					= $this->input->post('id_user')? $this->input->post('id_user'):'';
		$corresponding_author		= $this->input->post('corresponding_author')? $this->input->post('corresponding_author'):'';
		$date_of_birth				= $this->input->post('date_of_birth')? $this->input->post('date_of_birth'):'';
		$origin_country				= $this->input->post('origin_country')? $this->input->post('origin_country'):'';
		$institution				= $this->input->post('institution')? $this->input->post('institution'):'';
		$email						= $this->input->post('email')? $this->input->post('email'):'';
		$alternative_email			= $this->input->post('alternative_email')? $this->input->post('alternative_email'):'';
		$phone_number				= $this->input->post('phone_number')? $this->input->post('phone_number'):'';
		$present_at_the_venue		= $this->input->post('present_at_the_venue')? $this->input->post('present_at_the_venue'):'';
		$paper_tittle				= $this->input->post('paper_tittle')? $this->input->post('paper_tittle'):'';
		$first_author_name			= $this->input->post('first_author_name')? $this->input->post('first_author_name'):'';
		$first_author_institution	= $this->input->post('first_author_institution')? $this->input->post('first_author_institution'):'';
		$additional_author_name		= $this->input->post('additional_author_name')? $this->input->post('additional_author_name'):'';
		$additional_author_institution					= $this->input->post('additional_author_institution')? $this->input->post('additional_author_institution'):'';
		
		$pdfpath = realpath(APPPATH . '../upload/paper');
		$config['upload_path']          = $pdfpath; //path folder file upload
		$config['allowed_types']        = 'pdf|jpg|jpeg'; //type file yang boleh di upload
		$config['max_size']             = 0;
// 		$config['encrypt_name']         = TRUE; //enkripsi file name upload
		// $config['file_name']         = $number_drawing;
		$config['overwrite'] = TRUE;
		$this->load->library('upload', $config); 

		if ($this->upload->do_upload("full_paper_upload")) {
			$data1=array('upload_data' => $this->upload->data()); //ambil file name yang diupload
			$image = $data1['upload_data']['file_name']; //set file name ke variable image
		} else {
			$image = '';
		};

		$data_form1 = array(
			'id_user'							=> $id_user,
			'paper_id'							=> $paper_id,
			'email'								=> $email,
			'corresponding_author'				=> $corresponding_author,
			'date_of_birth'						=> $date_of_birth,
			'origin_country'					=> $origin_country,
			'institution'						=> $institution,
			'email'								=> $email,
			'alternative_email'					=> $alternative_email,
			'phone_number'						=> $phone_number,
			'present_at_the_venue'				=> $present_at_the_venue,
			'paper_tittle'						=> $paper_tittle,
			'first_author_name'					=> $first_author_name,
			'first_author_institution'			=> $first_author_institution,
			'additional_author_name'			=> $additional_author_name,
			'additional_author_institution'		=> $additional_author_institution,
			'full_paper'						=> $image,
		);
		$this->m_submission_paper->insert_form($data_form1, $id_user);
	}
}
