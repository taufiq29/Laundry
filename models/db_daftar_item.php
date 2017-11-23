<?php
class db_daftar_item extends CI_Model {

  public function get_daftarItem()
  {
    # code...
    $hasil = $this->db->query("SELECT * from harga");
    return $hasil->result();
  }

  public function get_hargaItem($nama_item,$metode_pengerjaan)
  {
    # code...
    $hasil = $this->db->query("SELECT '$metode_pengerjaan' from harga where nama_item='$data'");
    return $hasil->result();
  }

  public function get_namaItem()
  {
    # code...
    $hasil =$this->db->query("SELECT nama_item from harga");
    return $hasil->result();
  }

  public function delete($nama_item)
  {
    # code...
    $hasil = $this->db->query("DELETE from harga where nama_item='$nama_item'");
    return $hasil;
  }

  public function get_item_by_name($nama_item)
  {
    # code...
    $hasil = $this->db->query("SELECT * from harga where nama_item='$nama_item'");
    return $hasil->result();
  }

  public function update_item($id_item,$table,$data_item)
  {
    # code...
    $this->db->where('id_item', $id_item);
    return $this->db->update($table,$data_item);
  }
}
 ?>
