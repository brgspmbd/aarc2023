<?php if (!defined('BASEPATH')) exit('Hacking Attempt : Keluar dari sistem..!!');

class M_login extends CI_Model
{
  public function __construct()
  {
    parent::__construct();
  }

  public function ambilPengguna($email)
  {
    $query = $this->db->query("SELECT *
     FROM user where email='$email'");
        
      return $query->num_rows();
    
  }
}