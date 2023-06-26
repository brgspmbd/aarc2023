<?php if (!defined('BASEPATH')) exit('Hacking Attempt : Keluar dari sistem..!!');

class M_registration extends CI_Model
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
	function find_charge_no_detail($charge_no)
	{
		$result = $this->db->query("SELECT 
		prd_melting_actual_h.furnace_type
			FROM prd_workordermelting_d 
			INNER JOIN prd_melting_actual_h ON prd_workordermelting_d.charge_no = prd_melting_actual_h.charge_no
			WHERE (prd_workordermelting_d.charge_no = '$charge_no') AND prd_workordermelting_d.flagdeleted = '0'    ");
		return $result;
	}
  
	function insert_form($data_form1, $email)
	{
		$a = $this->db->query("SELECT COUNT(*) AS num_rows FROM user
		 WHERE email ='$email' ");
		$b = $a->row();
		$c = $b->num_rows;
		if ($c > 0) {
			$this->db->where('email', $email);
			$this->db->update('user', $data_form1);
			echo json_encode("success");
		} else {
			$this->db->insert('user', $data_form1);
			echo json_encode("success");
		}
	}
}