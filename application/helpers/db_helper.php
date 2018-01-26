<?php
defined('BASEPATH') OR exit('No direct script access allowed');

if(!function_exists('DB_default')){
	function DB_default()
	{
		$ci = &get_instance();
		$db = $ci->load->database('default', true);
		$konek = array(
			'user' => $db->username,
            'pass' => $db->password,
            'db' => $db->database,
            'host' => $db->hostname
			);

		return $konek;
	}
}