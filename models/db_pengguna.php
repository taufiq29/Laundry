<?php
class db_pengguna extends CI_Model {

  public function tambah_pengguna($table,$data)
  {
    $result = $this->db->insert($table, $data);
    return $result;
  }

  public function get_semuapengguna()
  {
    # code...
    $hasil = $this->db->query("SELECT * from auth");
    return $hasil->result();
  }

  public function delete($NAME) {
     $hasil = $this->db->query("DELETE from auth where NAME='$NAME'");
     return $hasil;
 }

 public function get_pengguna_by_name($NAME) {
     $hasil = $this->db->query("SELECT * from auth where NAME='$NAME'");
     return $hasil->result();
 }

 public function get_pengguna_by_id($id) {
     $hasil = $this->db->query("SELECT * from auth where ID='$id'");
     return $hasil->result();
 }

 public function update_pengguna($id,$table,$data_pengguna)
 {
   # code...
   $this->db->where('ID', $id);
   return $this->db->update($table,$data_pengguna);
 }
}
 ?>
