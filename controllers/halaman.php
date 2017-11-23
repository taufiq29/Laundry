<?php

defined('BASEPATH')OR EXIT('No direct script acsess allowed');

class halaman extends CI_Controller {

    //index
    public function index()
    {
      $this->load->view('dashboard1');
    }

    //invoke
    public function invoke($function) {
      if (isset($_SESSION['ID'])) {
        $query = $this->db_pengguna->get_pengguna_by_id($_SESSION['ID']);
        foreach ($query as $row) {
            $data['id'] = $row->ID;
            $data['name'] = $row->NAME;
            $data['privilege'] = $row->PRIVILEGE;
          }
      }
      if ($function == "dashboard") {
        $this->load->view('dashboard1', $data);
      }
      elseif ($function == "halaman_daftarharga"){
        $this->halaman_daftarharga($data);
      }
      elseif ($function == "halaman_orderbaru") {
        $this->halaman_orderbaru($data);
      }
      elseif ($function == "tambah_order") {
        $this->tambah_order($data);
      }
      elseif ($function == "halaman_daftarpengguna") {
        $this->halaman_daftarpengguna($data);
      }
      elseif ($function == "delete_pengguna") {
        $this->delete_pengguna();
      }
      elseif ($function == "halaman_tambahpengguna") {
        $this->halaman_tambahpengguna($data);
      }
      elseif ($function == "tambah_pengguna") {
        $this->tambah_pengguna($data);
      }
      elseif ($function == "halaman_editpengguna") {
        $this->halaman_editpengguna($data);
      }
      elseif ($function == "halaman_edititem") {
        $this->halaman_edititem($data);
      } else {
        $this->load->view('dashboard1', $data);
      }
    }

    //melihat halaman view_daftarharga
    public function halaman_daftarharga($data){
      $data['data_item'] = $this->db_daftar_item->get_daftarItem();
      $this->load->view('view_daftarharga', $data);
    }

    //melihat halaman view_orderbaru
    public function halaman_orderbaru($data){
      $data['nama_item'] = $this->db_daftar_item->get_namaItem();
      $this->load->view('view_orderbaru', $data);
    }

    //menambahkan order laundryan baru
    public function tambah_order($data) {
      $Date_order =  date("d-m-Y H:i:s");
      $Date_selesai = date('d-m-Y', strtotime($this->input->post('tanggal_selesai'), strtotime($Date_order)));
      $jenis_cucian = $this->input->post('jenis_cucian');
      $metode_pengerjaan = $this->input->post('metode_pengerjaan');
      $harga = $this->db_daftar_item->get_hargaItem($jenis_cucian,$metode_pengerjaan);
      $biaya = $this->input->post('berat') * $result;
        $data= array(
        'nama_pelanggan' => $this->input->post('nama_pelanggan'),
        'no_handphone' => $this->input->post('nohp'),
        'jenis_cucian' => $jenis_cucian,
        'metode_pengerjaan' => $metode_pengerjaan,
        'berat/ukuran' => $this->input->post('berat'),
        'total_biaya' => $biaya,
        'tanggal_order' => $Date_order,
        'tanggal_selesai' => $Date_selesai,
        'keterangan' => $this->input->post('keterangan')
      );
        $result = $this->db_cucian->tambah_cucian('daftar_cucian',$data);
        redirect('index');
    }

    public function delete_item()
    {
      # code...
      $nama_item = $this->input->post('nama_item');
      $result = $this->db_daftar_item->delete($nama_item);
      $this->invoke('halaman_daftarharga');
    }

    public function halaman_edititem($data)
    {
      # code...
      $nama_item = $this->input->post('nama_item');
      $query = $this->db_daftar_item->get_item_by_name($nama_item);
      foreach ($query as $row) {
          $data['id_item'] = $row->id_item;
          $data['nama_item'] = $row->nama_item;
          $data['satuan_ukur'] = $row->satuan_ukur;
          $data['harga_satuan'] = $row->harga_satuan;
          $data['harga_setrika_saja'] = $row->harga_setrika_saja;
          $data['harga_cuci_saja'] = $row->harga_cuci_saja;
          $data['harga_cuci_setrika'] = $row->harga_cuci_setrika;
          $data['waktu_pengerjaan'] = $row->waktu_pengerjaan;
          $data['keterangan'] = $row->keterangan;
      }
      $this->load->view('view_edititem',$data);
    }

    public function edit_item()
    {
      # code...
      $id_item = $this->input->post('id_item');
      $nama_item = $this->input->post('nama_item');
      $satuan_ukur = $this->input->post('satuan_ukur');
      $harga_satuan = $this->input->post('harga_satuan');
      $harga_setrika_saja = $this->input->post('harga_setrika_saja');
      $harga_cuci_saja = $this->input->post('harga_cuci_saja');
      $harga_cuci_setrika = $this->input->post('$harga_cuci_setrika');
      $waktu_pengerjaan = $this->input->post('waktu_pengerjaan');
      $keterangan = $this->input->post('keterangan');

      $data_item = array(
      'id_item' => $id_item,
      'nama_item' => $nama_item,
      'satuan_ukur' => $satuan_ukur,
      'harga_satuan' => $harga_satuan ,
      'harga_setrika_saja' => $harga_setrika_saja ,
      'harga_cuci_saja' => $harga_cuci_saja ,
      'harga_cuci_setrika' => $harga_cuci_setrika ,
      'waktu_pengerjaan' => $waktu_pengerjaan ,
      'keterangan' => $keterangan
      );

      $result = $this->db_daftar_item->update_item($id_item,'harga', $data_item);
      $this->invoke('halaman_daftarharga');
    }

    public function halaman_daftarpengguna($data)
    {
      # code...
      $data['data_pengguna'] = $this->db_pengguna->get_semuapengguna();
      $this->load->view('view_daftarpengguna', $data);
    }

    public function delete_pengguna()
    {
      # code...
      $NAME = $this->input->post('NAME');
      $result = $this->db_pengguna->delete($NAME);
      $this->invoke('halaman_daftarpengguna');
    }

    public function halaman_tambahpengguna($data)
    {
      # code...
      $this->load->view('view_tambahpengguna', $data);
    }

    public function tambah_pengguna() {
      # code...
      $pass = $this->input->post('password');
      $repass = $this->input->post('repassword');
      $data_pengguna = array(
      'NAME' => $this->input->post('nama_pengguna'),
      'PASSWORD' => $pass,
      'PRIVILEGE' => 'Operasional'
    );
      if ($pass != $repass) {
        # code...
        echo "<script> alert('Password tidak sesuai')</script>";
       $this->invoke('halaman_tambahpengguna');
      } else {
        # code...
      $result = $this->db_pengguna->tambah_pengguna('auth', $data_pengguna);
      $this->invoke('halaman_daftarpengguna');
      }
    }

    public function jenis_penyelesaian_otomatis()
    {
      # code...
      $nama_item = $_GET['nama_item'];
      $jenis_penyelesaian= $this->db->get_where('harga', array('nama_item' => $nama_item));
      //$data = array(
      //    'jenis_penyelesaian' => $harga['keterangan'],
      //);
      foreach ($jenis_penyelesaian->result() as $row) {
      echo "<div class = 'form-group'>
              <label>Jenis Penyelesaian:</label>
                <div class= 'input-group'>
                  <div class= 'input-group-addon'>
                    <i class = 'fa fa-reorder'></i>
                  </div>
                  <input type='text' id='jenis_penyelesaian' class='form-control select2' name='jenis_penyelesaian' id='metode_pengerjaan' value='$row->keterangan'>";
            echo "</div></div>";
    }
    foreach ($jenis_penyelesaian->result() as $row) {
    echo "<div class = 'form-group'>";
      if ($row->satuan_ukur == "Kilogram") {
        # code...
        echo "<label>Berat(Kg):</label>";
      } else {
        # code...
        echo "<label>Ukuran/Luas(m2):";
        }
        echo "<div class= 'input-group'>
                <div class= 'input-group-addon'>
                  <i class = 'fa fa-compass'></i>
                </div>
                  <input type='number' id='berat' class='form-control select2' name='berat' id='metode_pengerjaan' value=''>";
          echo "</div></div>";

      }
    }

    public function halaman_editpengguna($data)
    {
      # code...
      $NAME = $this->input->post('NAME');
      $query = $this->db_pengguna->get_pengguna_by_name($NAME);
      foreach ($query as $row) {
          $data['ID'] = $row->ID;
          $data['NAME'] = $row->NAME;
          $data['PASSWORD'] = $row->PASSWORD;
          $data['PRIVILEGE'] = $row->PRIVILEGE;
      }
      $this->load->view('view_editpengguna', $data);
    }

    public function edit_pengguna()
    {
      # code...
      $id = $this->input->post('id');
      $nama_pengguna = $this->input->post('nama_pengguna');
      $pass = $this->input->post('password');
      $repass = $this->input->post('repassword');
      $privilege = $this->input->post('privilege');

      $data_pengguna = array(
      'NAME' => $nama_pengguna,
      'PASSWORD' => $pass,
      'PRIVILEGE' => $privilege
      );
      if ($pass != $repass) {
        # code...
        echo "<script> alert('Password tidak sesuai')</script>";
       $this->invoke('halaman_daftarpengguna');
      } else {
        # code...
      $result = $this->db_pengguna->update_pengguna($id,'auth', $data_pengguna);
      $this->invoke('halaman_daftarpengguna');
      }
    }


    /*
     * To change this license header, choose License Headers in Project Properties.
     * To change this template file, choose Tools | Templates
     * and open the template in the editor.
     */
}
