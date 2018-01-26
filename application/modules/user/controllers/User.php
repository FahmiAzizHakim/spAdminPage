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
		
	}

}

/* End of file user.php */
/* Location: ./application/controllers/user.php */