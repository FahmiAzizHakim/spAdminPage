<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends MY_Controller {

	function __construct()
	{
		parent::__construct();
		if($this->session->userdata('user_id') == ''){
			redirect('login');
		}
		$this->load->model('m_master');
        $this->set_menugroup('user');
	}

	public function index()
	{
		
		$data = $this->m_master->getListData('m_user_tbl')->result_array();
    	$this->templates->assign( 'user', $data);
    	$this->layout('entri_user', 'List User');
	}

	public function edit_password()
	{
		$data = $this->m_master->getListData('m_user_tbl')->result_array();
    	$this->templates->assign( 'user', $data);
    	$this->layout('edit_password', 'Edit User');
	}

}

/* End of file user.php */
/* Location: ./application/controllers/user.php */