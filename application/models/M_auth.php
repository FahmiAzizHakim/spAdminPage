<?php
defined('BASEPATH') OR exit('No direct script allowed');

class M_auth extends CI_Model {
	function cek_user($username, $password)
	{
		return $this->db->get_where('m_user_tbl', array('user_id' => $username, 'password' => $password));
	}
}