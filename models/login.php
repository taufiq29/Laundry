<?php
class login extends CI_Model {

    public function login1() {
        if (isset($_POST['login'])) {
            $name = $_POST['name'];
            $pass = $_POST['pass'];
            $query = $this->db->query("select * from auth where NAME='$name' AND PASSWORD='$pass'");
            if ($query->num_rows() > 0) {
                foreach ($query->result() as $row) {
                    $_SESSION['ID']
                    = $row->ID;
                    return TRUE;
                  }
            } else {
                //$this->load->views('PP2');
                return FALSE;
            }
        }
        if (isset($_SESSION['name'])) {
            //$this->load->views('Dashboard1');
            return TRUE;
        }
    }

    public function logout() {
        session_start();
        if (isset($_SESSION['ID'])) {
            unset($_SESSION['ID']);
            session_destroy();
        }
    }

    public function tambah_pengguna() {
      # code...
      
    }

}

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
