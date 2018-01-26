<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends MY_Controller {
  function __construct() {
    parent::__construct();
  }

  public function index()
  {
    if($this->session->userdata('id_user') != '' && $this->session->userdata('id_user') != null){
      redirect('Homepage','refresh');
    }
    // print_r($this->session->userdata('id_user'));die();
    $this->layout_login('login');
  }

  function reset_password()
  {
    $d['page'] = 'reset_password';
    $this->load->view('layout', $d);
  }

  function register()
  {
    $d['page'] = 'register';
    $this->load->view('layout', $d);
  }
  /*
  function reg_user()
  {
    $username = $this->input->post('username');
    $passwords = $this->input->post('password');
    $password = md5($passwords);
    $date = date('Y-m-d H:i:s');

    $data = array(
      'user_name' => $username,
      'user_pass' => $password,
      'created_date' => $date
      );

    $simpan = $this->m_auth->reg_user($data);
    if(!$simpan){
      $this->session->set_flashdata('msgerrorlogin', 'User teregistrasi.');
      redirect('login');
    }else{
      $this->session->set_flashdata('msgerrorlogin', 'Ada kesalahan.');
      redirect('login');
    }
  }
  */
  function cek_user()
  {
    $username = $this->input->post('username');
    $passwords = $this->input->post('password');
    $password = md5($passwords .'-secure');
    // print_r($password);die();

    $cek = $this->m_auth->cek_user($username, $password)->num_rows();
    $get = $this->m_auth->cek_user($username, $password)->result();
    // print_r($get);die();

    if($cek == 1){
      foreach($get as $sess){
        $sess_data['user_id'] = $sess->user_id;
        $sess_data['user_name'] = $sess->user_name;
        $sess_data['user_group'] = $sess->user_group;
        $this->session->set_userdata($sess_data);
      }

      echo json_encode(array(
        'cek' => '1'
        ));
    }else{
      echo json_encode(array(
        'cek' => '0'
        ));
    }
  }

  function logout()
  {
    $this->session->sess_destroy();
    redirect('/');
  }
}
