<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Shop extends CI_Controller
{
	public function index()
	{
		$namePages['title'] = "Gencode | Shop";
		$this->load->view('pages/shop', $namePages);
	}
}
