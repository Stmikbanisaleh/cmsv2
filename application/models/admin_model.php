<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		
	}

	public function getAllData($table)
	{
		return $this->db->get($table);
	}

	public function getDataById($table, $key)
	{
		$this->db->where($key);
		return $this->db->get($table);
	}


	public function updateData($table, $key, $data)
	{
		$this->db->where($key);
		$this->db->update($table, $data);
	}

	public function insertData($table, $data)
	{
		$this->db->insert($table, $data);
	}


	public function login($user, $pass)
	{
		$u = $user; 
	}

}

/* End of file Admin_model.php */
/* Location: ./application/models/Admin_model.php */