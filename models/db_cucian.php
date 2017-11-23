<?php
/**
 *
 */
class db_cucian extends CI_Model
{

  public function tambah_cucian($table,$data)
  {
    # code...
    $result = $this->db->insert($table,$data);
    return $result;
  }
}
 ?>
