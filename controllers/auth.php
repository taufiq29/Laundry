<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class auth extends CI_Controller {

    public function index() {
        if (isset($_SESSION['ID'])) {
          $query = $this->db_pengguna->get_pengguna_by_id($_SESSION['ID']);
          foreach ($query as $row) {
              $data_pengguna['id'] = $row->ID;
              $data_pengguna['name'] = $row->NAME;
              $data_pengguna['privilege'] = $row->PRIVILEGE;
            }
          $this->load->view('dashboard1', $data_pengguna);
        } else {
            $this->load->view('login_view');
        }


    }

    public function login() {
        $this->load->model('login');
        $result = $this->login->login1();
        //if (!isset($_SESSION['user'])) {
        if ($result) {
//                $this->redirect("index.php?action=dashboard");
            redirect('auth');
        } else {
            echo "<script> alert('Password atau Username Salah');history.go(-1)</script>";
        }
    }

    public function logout() {
      $this->load->model('login');
      $this->login->logout();
      redirect('auth');
    }

    public function register() {
      # code...
      $this->load->view('register');
    }

    public function tambah_pengguna() {
      # code...
      $pass = $this->input->post('pass');
      $repass = $this->input->post('repass');
      $data = array(
      'NAME' => $this->input->post('nama'),
      'PASSWORD' => $pass,
      'PRIVILEGE' => 'Operasional'
    );
      if ($pass != $repass) {
        # code...
        echo "<script> alert('Password tidak sama')</script>";
       $this->load->view('register');
      } else {
        # code...
      $result = $this->db_pengguna->tambah_pengguna('auth',$data);
      redirect('auth');
      }
    }

}
