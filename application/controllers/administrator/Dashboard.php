<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		if (!$this->session->userdata('name')) {
			redirect('administrator/auth/login');
		}
		$this->load->model('sum_model', 'Sum_model');
	}

	public function index()
	{
		$data['title'] = 'Dashboard';
		$data['staff'] = $this->Sum_model->hitungJumlahStaff();
		$data['admin'] = $this->Sum_model->hitungJumlahAdmin();
		$this->load->view('administrator/dashboard', $data);
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('administrator/auth/login');
	}
}
