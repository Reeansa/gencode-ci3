<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hero extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('hero_model');
	}

	public function index()
	{
		$data['title'] = 'Hero';
		$data['data'] = $this->hero_model->get_records('hero');
		$this->load->view('administrator/hero', $data);
	}

	public function add()
	{
		$this->load->view('administrator/hero/add');
	}

	public function create()
	{
		$config = array(
			'upload_path' => "assets/images/hero/",
			'allowed_types' => "jpg|png|jpeg|gif",
			'max_size' => "1024000", // file size , here it is 1 MB(1024 Kb)
		);
		$this->load->library('upload', $config);

		if ($this->upload->do_upload('image')) {

			$data['image'] = $this->upload->data('image');
			$this->hero_model->insert('hero', $data);
			$this->session->set_flashdata('message', '<div class="alert alert-success">Record has been saved successfully.</div>');			
		}else{
			$error = array('error' => $this->upload->display_errors());
			$this->session->set_flashdata('message', '<div class="alert alert-danger">'.implode("",$error).'</div>');
		}

		redirect(base_url('administrator/hero'));
	}

	public function edit($id)
	{
		$data['data'] = $this->hero_model->get_record('hero', $id);
		$this->load->view('administrator/hero/edit', $data);
	}

	public function update($id)
	{
		$config = array(
			'upload_path' => "assets/images/hero/",
			'allowed_types' => "jpg|png|jpeg|gif",
			'max_size' => "1024000", // file size , here it is 1 MB(1024 Kb)
		);
		$this->load->library('upload', $config);

		if ($this->upload->do_upload('image')) {

			$data['image'] = $this->upload->data('image');
			$this->hero_model->update('hero', $data, $id);
			$this->session->set_flashdata('message', '<div class="alert alert-success">Record has been updated successfully.</div>');			
		}else{
			$error = array('error' => $this->upload->display_errors());
			$this->session->set_flashdata('message', '<div class="alert alert-danger">'.implode("",$error).'</div>');
		}

		redirect(base_url('administrator/hero'));
	}

	public function delete($id)
	{
		$this->hero_model->delete('hero', $id);
		$this->session->set_flashdata('message', '<div class="alert alert-success">Record has been deleted successfully.</div>');
		redirect(base_url('administrator/hero'));
	}
}
