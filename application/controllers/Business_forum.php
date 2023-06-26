<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Business_forum extends CI_Controller {

	public function __construct()
	{
	  parent::__construct();
	  $this->load->model('m_business_forum');
	  $this->load->database();
	}
	public function index()
	{
		$session = $this->session->userdata('isLogin', TRUE);
		$email = $this->session->userdata('email');
		if ($session == FALSE) {
			redirect('login/login_form');
		} else {
			$data['data_user'] = $this->m_business_forum->get_data($email);
			$this->load->view('business_forum_view', $data);
		}
	}
	
	function get_data_business() 
	{
		$user_id	= $this->input->post('user_id');
		$data1			= $this->m_business_forum->get_data_business($user_id);
		$data				= array();
			if ($data1->num_rows() > 0) {
				foreach ($data1->result_array() as $row) {
					$data[] = $row;
				}
			}
		echo json_encode($data);
	}
	function insert_form() {
		$id_user					= $this->input->post('id_user')? $this->input->post('id_user'):'';
		$email					= $this->input->post('email')? $this->input->post('email'):'';
		$full_name					= $this->input->post('full_name')? $this->input->post('full_name'):'';
		$salutation					= $this->input->post('salutation')? $this->input->post('salutation'):'';
		$salutation2					= $this->input->post('salutation2')? $this->input->post('salutation2'):'';
		$country					= $this->input->post('country')? $this->input->post('country'):'';
		$company					= $this->input->post('company')? $this->input->post('company'):'';
		$position					= $this->input->post('position')? $this->input->post('position'):'';
		$whatsappnumber					= $this->input->post('whatsappnumber')? $this->input->post('whatsappnumber'):'';
		$bukti_transfer					= $this->input->post('bukti_transfer')? $this->input->post('bukti_transfer'):'';
		$pdfpath = realpath(APPPATH . '../upload/bukti_tf_business_forum');
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
		} else {
			$image = '';
		};

		$data_form1 = array(
			'id_user'		=> $id_user,
			'email'			=> $email,
			'full_name'		=> $full_name,
			'salutation'	=> $salutation,
			'salutation2'	=> $salutation2,
			'country'		=> $country,
			'company'		=> $company,
			'position'		=> $position,
			'flagdeleted'		=> 0,
			'whatsappnumber'		=> $whatsappnumber,
			'bukti_transfer'		=> $image,
		);
		$this->m_business_forum->insert_form($data_form1, $email);
	}
	
}
