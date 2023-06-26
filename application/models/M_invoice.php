<?php if (!defined('BASEPATH')) exit('Hacking Attempt : Keluar dari sistem..!!');

class M_invoice extends CI_Model
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
  
	function insert_form($data_form1, $id_user)
	{
		$a = $this->db->query("SELECT COUNT(*) AS num_rows FROM full_paper
		 WHERE id_user ='$id_user' ");
		$b = $a->row();
		$c = $b->num_rows;
		if ($c > 0) {
			$this->db->where('id_user', $id_user);
			$this->db->update('full_paper', $data_form1);
			echo json_encode("success");
		} else {
			$this->db->insert('full_paper', $data_form1);
			echo json_encode("success");
		}
	}
}