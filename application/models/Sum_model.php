<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Sum_model extends CI_Model

{
	public function hitungJumlahStaff()
	{
		$staff = $this->db->get_where('user', ['id_role' => 1])->num_rows();
		return $staff;
	}
	public function hitungJumlahAdmin()
	{
		$admin = $this->db->get_where('user', ['id_role' => 2])->num_rows();
		return $admin;
	}
}
