<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->user_id = $this->session->userdata('user_id');
	}

	public function index()
	{
		redirect('user/profil');
	}

	function profil() {
		$id = $this->user_id;
		$d['page'] = 'profil';
    	$d['title'] = 'Profil';
    	$d['title0'] = 'User';
    	$d['breadcrumbs'] = array('<li><a href="'.base_url('user').'">'.$d['title0'].'</a></li>', '<li><a href="'.base_url('user/profil').'">'.$d['title'].'</a></li>');
    	$d['data'] = $this->m_master->getUserByID($id)->result_array();
    	$this->load->view('layout_app', $d);
	}

	function saving()
	{
		$id = $this->input->post('user_id');
		$user_name = $this->input->post('user_name');
		$user_nama = $this->input->post('user_nama');
		$user_email = $this->input->post('user_email');

		$data = array(
			'user_name' => $user_name,
			'user_nama' => $user_nama,
			'user_email' => $user_email
		);

		$simpan = $this->m_master->simpanProfil($data, $id);

		if(!$simpan){
			echo json_encode(array('status'=>'ok'));
		}else{
			echo json_encode(array('status'=>'fail'));
		}
	}

	function ganti_foto() {
  		$id = $this->input->post('user_id');

  		$config['upload_path']          = './img/';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['allowed_size']         = 5120;
 
		$this->load->library('upload', $config);
 
		if (!$this->upload->do_upload('foto')){
			echo json_encode(array('status'=>'fail'));
		}else{
			$file_name = $this->upload->data('file_name');
			$data = array('user_pict' => $file_name);
			$update = $this->m_master->ganti_foto($data, $id);

			if(!$update){
				echo json_encode(array('status'=>'ok'));
			}else{
				echo json_encode(array('status'=>'fail'));
			}
		}
  	}

  	function ubah_password() {
		$id = $this->user_id;
		$d['page'] = 'password';
    	$d['title'] = 'Ubah Password';
    	$d['title0'] = 'User';
    	$d['breadcrumbs'] = array('<li><a href="'.base_url('user').'">'.$d['title0'].'</a></li>', '<li><a href="'.base_url('user/profil').'">'.$d['title'].'</a></li>');
    	$d['data'] = $this->m_master->getUserByID($id)->result_array();
    	$this->load->view('layout_app', $d);
	}

	function saving_password() {
		$id = $this->user_id;
		$password_lama = $this->input->post('password_lama');
		$password_baru = $this->input->post('password_baru');
		$password_confirm = $this->input->post('password_confirm');

		$password_lamaEn = md5($password_lama);

		$cekPasswordLama = $this->m_master->cekPasswordLama($id)->result_array();

		if($password_lamaEn != $cekPasswordLama[0]['user_pass']){
			echo json_encode(array('status' => 'password_lama_salah'));
		}else{
			if($password_baru != $password_confirm){
				echo json_encode(array('status' => 'password_tidak_cocok'));
			}else{
				$password_baruEn = md5($password_baru);
				$datas = array('user_pass' => $password_baruEn);
				$gantiPass = $this->m_master->gantiPass($datas, $id);
				if(!$gantiPass){
					echo json_encode(array('status' => 'password_change'));
				}else{
					echo json_encode(array('status' => 'fail'));
				}
			}
		}
	}

}

/* End of file user.php */
/* Location: ./application/controllers/user.php */