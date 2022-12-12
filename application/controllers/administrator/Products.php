<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Products extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('name')) {
            redirect('administrator/dashboard');
        }
        $this->load->model('auth_model', 'Products');
    }

	public function index()
	{
		$pageName['title'] = 'Products';
		$this->load->view('administrator/products', $pageName);
	}
}
