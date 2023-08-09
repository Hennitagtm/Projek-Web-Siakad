<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_user');
        if ($this->session->userdata('login') != TRUE) {
            redirect(base_url());
        }
    }

    public function index()
    {
        $data['data'] = $this->M_user->Get()->result();
        $data['pages'] = 'pages/pengguna/user';
        $this->load->view('template', $data);
    }

    public function edit($username)
    {
        $data['data'] = $this->M_user->Get($username)->row();
        $data['pages'] = 'pages/pengguna/user_edit';
        $this->load->view('template', $data);
    }

    function add()
    {
        $data['pages'] = 'pages/pengguna/user_add';
        $this->load->view('template', $data);
    }

    public function Update()
    {
        $post = $this->input->post();
        $data = [
            'nama' => $post['nama'],
            'username' => $post['username'],
            'password' => md5($post['password'])
        ];
        $this->M_user->Updated($data, $post['where']);
        $this->session->set_flashdata('success', 'Data berhasil Di Update');
        redirect(base_url('admin/user'));

    }

    public function create()
    {
        $post = $this->input->post();
        $data = [
            'nama' => $post['nama'],
            'jabatan' => $post['jabatan'],
            'username' => $post['username'],
            'password' => md5($post['password'])
        ];
        $this->M_user->Save($data);
        $this->session->set_flashdata('success', 'Data berhasil Di tambahkan');
        redirect(base_url('admin/user'));
    }

   function delete($username)
    {
        $this->session->set_flashdata('success', 'Data berhasil Di Hapus');
        $this->M_user->Deleted($username);
        redirect(base_url('admin/user'));
    }
}