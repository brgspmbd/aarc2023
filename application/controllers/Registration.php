<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registration extends CI_Controller {

	public function __construct()
	{
	  parent::__construct();
	  $this->load->model('m_registration');
	  $this->load->database();
	}
	public function index()
	{
		$session = $this->session->userdata('isLogin', TRUE);
		$email = $this->session->userdata('email');
		if ($session == FALSE) {
			redirect('login/login_form');
		} else {
			$data['data_user'] = $this->m_registration->get_data($email);
			$this->load->view('registration_view', $data);
		}
	}
	
	function find_charge_no_detail() 
	{
		$charge_no	= $this->input->post('charge_no');
		$data1			= $this->m_registration->find_charge_no_detail($charge_no);
		$data				= array();
			if ($data1->num_rows() > 0) {
				foreach ($data1->result_array() as $row) {
					$data[] = $row;
				}
			}
		echo json_encode($data);
	}
	
	function insert_form1() {
		$email					= $this->input->post('email')? $this->input->post('email'):'';
		$title					= $this->input->post('title')? $this->input->post('title'):'';
		$full_name				= $this->input->post('fullname')? $this->input->post('fullname'):'';
		$phone_number			= $this->input->post('phone')? $this->input->post('phone'):'';
		$country				= $this->input->post('country')? $this->input->post('country'):'';
		$organization			= $this->input->post('organization')? $this->input->post('organization'):'';
		if($organization == "option2"){
			$organization = $this->input->post('organizationtext')? $this->input->post('organizationtext'):'';
		}else{
			$organization=$organization;
		}
		$lastupdate		= date('Y-m-d H:i:s');
		$flagdeleted	= '0';
		$data_form1 = array(
			'email'		=> $email,
			'created_at'		=> $lastupdate,
			'title'		=> $title,
			'full_name'		=> $full_name,
			'phone_number'		=> $phone_number,
			'country'		=> $country,
			'status_approved'		=> 'pending',
			'organization'		=> $organization,
			'flagdeleted'		=> $flagdeleted,
		);
		$this->m_registration->insert_form($data_form1, $email);
	}
	function insert_form2() {
		$workunit					= $this->input->post('workunit')? $this->input->post('workunit'):'';
		$email				= $this->session->userdata('email');
		$data_form1 = array(
			'workunit'		=> $workunit,
		);
		$this->m_registration->insert_form($data_form1, $email);
	}
	function insert_form3() {
		$email						= $this->session->userdata('email');
		$attendance					= $this->input->post('attendance')? $this->input->post('attendance'):'';
		$activity1					= $this->input->post('activity1')? $this->input->post('activity1'):'';
		$activity2					= $this->input->post('activity2')? $this->input->post('activity2'):'';
		$activity3					= $this->input->post('activity3')? $this->input->post('activity3'):'';
		$activity4					= $this->input->post('activity4')? $this->input->post('activity4'):'';
		$activity5					= $this->input->post('activity5')? $this->input->post('activity5'):'';
		$activity6					= $this->input->post('activity6')? $this->input->post('activity6'):'';
		$activity7					= $this->input->post('activity7')? $this->input->post('activity7'):'';
		$activity8					= $this->input->post('activity8')? $this->input->post('activity8'):'';
		$activity9					= $this->input->post('activity9')? $this->input->post('activity9'):'';
		$activity10					= $this->input->post('activity10')? $this->input->post('activity10'):'';
		$activity11					= $this->input->post('activity11')? $this->input->post('activity11'):'';
		$activity12					= $this->input->post('activity12')? $this->input->post('activity12'):'';
		$activity13					= $this->input->post('activity13')? $this->input->post('activity13'):'';
		$data_form1 = array(
			'type_of_attendance'		=> $attendance,
			'activity1'		=> $activity1,
			'activity2'		=> $activity2,
			'activity3'		=> $activity3,
			'activity4'		=> $activity4,
			'activity5'		=> $activity5,
			'activity6'		=> $activity6,
			'activity7'		=> $activity7,
			'activity8'		=> $activity8,
			'activity9'		=> $activity9,
			'activity10'		=> $activity10,
			'activity11'		=> $activity11,
			'activity12'		=> $activity12,
			'activity13'		=> $activity13,
		);
		$this->m_registration->insert_form($data_form1, $email);
		
	}
	function insert_form4() {
		$email				= $this->session->userdata('email');
		
		$pdfpath = realpath(APPPATH . '../upload/bukti_tf');
		$config['upload_path']          = $pdfpath; //path folder file upload
		$config['allowed_types']        = 'pdf|jpg|jpeg|png'; //type file yang boleh di upload
		$config['max_size']             = 0;
		$config['encrypt_name']         = TRUE; //enkripsi file name upload
		// $config['file_name']         = $number_drawing;
		$config['overwrite'] = TRUE;
		$this->load->library('upload', $config); 

		if ($this->upload->do_upload("bank_upload")) {
			$data1=array('upload_data' => $this->upload->data()); //ambil file name yang diupload
			$image = $data1['upload_data']['file_name']; //set file name ke variable image
			
		$this->session->set_userdata('haveaccount', TRUE);
		} else {
			$image = '';
		};

		$data_form1 = array(
			'bukti_transfer'		=> $image,
		);
		$this->m_registration->insert_form($data_form1, $email);
	}
	
}
