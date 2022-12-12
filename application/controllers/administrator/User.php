<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('name')) {
            redirect('administrator/auth/login');
        }
        $this->load->model('user_model', 'User');
    }

    public function index()
    {
        $data['title'] = 'Accounts List';
        $data['user'] = $this->User->select();
        $this->load->view('administrator/accounts/list', $data);
    }

    public function add()
    {
        $data['title'] = 'Tambah Data Accounts';
        $this->load->view('administrator/accounts/add', $data);
    }

    public function edit($id)
    {
		$data['title'] = 'Edit Data Accounts';
		$data['user'] = $this->User->select_by_id($id);
		$this->load->view('administrator/accounts/edit', $data);

    }

    public function create()
    {
        $password = password_hash($this->input->post('password', true), PASSWORD_DEFAULT);
        $data = [
            "name" => $this->input->post('name', true),
            "username" => $this->input->post('username', true),
            "password" => $password,
			"id_role" => $this->input->post('role', true)
        ];
        $create = $this->User->insert($data);

        // Cek Apakah berhasil atau tidak
        if ($create) {
            $this->session->set_flashdata('berhasil', 'Data berhasil ditambahkan!');
            redirect('administrator/user');
        }

        $this->session->set_flashdata('gagal', 'Data gagal ditambahkan!');
        redirect('administrator/user/add');
    }

    public function update()
    {
        $data = [
            "name" => $this->input->post('name', true),
            "username" => $this->input->post('username', true),
			"password" => $this->input->post('password', true),
			"id_role" => $this->input->post('role', true)
        ];
        $update = $this->User->update($data, $this->input->post('id', true));

        // Cek Apakah berhasil atau tidak
        if ($update) {
            $this->session->set_flashdata('berhasil', 'Data berhasil diubah!');
            redirect('administrator/user');
        }

        $this->session->set_flashdata('gagal', 'Data gagal diubah!');
        redirect('administrator/user/edit');
    }

    public function delete($id)
    {
        $this->User->delete($id);
        $this->session->set_flashdata('berhasil', 'Data berhasil dihapus!');
        redirect('administrator/user');
    }
}

/* End of file User.php and path \application\controllers\User.php */
