<?php if (!defined('BASEPATH')) exit('Hacking Attempt : Keluar dari sistem..!!');

class M_business_forum extends CI_Model
{
  public function __construct()
  {
    parent::__construct();
  }

  function get_data($email)
  {
	  $query = $this->db->query("SELECT * from user  WHERE email='$email' AND flagdeleted='0' ");
	  return $query->row();
  }
  function get_data_business($id_user)
  {
	  $query = $this->db->query("SELECT * from business_forum  WHERE id_user='$id_user' AND flagdeleted='0' ");
	  return $query;
  }
  
	function insert_form($data_form1, $email)
	{
		$a = $this->db->query("SELECT COUNT(*) AS num_rows FROM business_forum
		 WHERE email ='$email' ");
		$b = $a->row();
		$c = $b->num_rows;
		if ($c > 0) {
			$this->db->where('email', $email);
			$this->db->update('business_forum', $data_form1);
			echo json_encode("success");
		} else {
			$this->db->insert('business_forum', $data_form1);
			echo json_encode("success");
		}
	}
}