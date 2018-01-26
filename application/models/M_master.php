<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_master extends CI_Model {

	function getListData($table)
	{
		$data = $this->db->get($table);
		return $data;
	}

	function save($table, $data)
	{
		$this->db->insert($table, $data);
	}

	function getSequence()
	{
		return $this->db->query('select id_seq from m_agen_tbl order by id_seq DESC limit 1')->row_array();;
	}

	function get($id, $kolom, $table)
	{
		$this->db->where($kolom, $id);
		return $this->db->get($table);
	}

	function update($where, $id, $data, $table)
	{
		$this->db->where($where, $id);
		$this->db->update($table, $data);
	}
}