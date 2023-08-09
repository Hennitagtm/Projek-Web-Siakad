<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Prodi extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_user');
        if ($this->session->userdata('login') != TRUE) {
            redirect(base_url());
        }
        $this->load->model('M_prodi');
    }

    public function index()
    {
        $data['data'] = $this->M_prodi->Get()->result();
        $data['pages'] = 'pages/prodi/prodi';
        $this->load->view('template', $data);
    }

    function add()
    {
        $data['pages'] = 'pages/prodi/add_prodi';
        $this->load->view('template', $data);
    }
    public function create()
    {
        $post = $this->input->post();
        $data = [
            'kode_prodi' => $post['kode_prodi'],
            'kode_dikti' => $post['kode_dikti'],
            'nama_prodi' => $post['nama_prodi'],
            'singkatan' => $post['singkatan'],
            'jenjang' => $post['jenjang'],
            'akreditasi' => $post['akreditasi']
        ];
        $this->M_prodi->Save($data);
        $this->session->set_flashdata('success', 'Data berhasil Di tambahkan');
        redirect(base_url('admin/prodi'));
    }

    public function edit($kode_prodi)
    {
        $data['data'] = $this->M_prodi->Get($kode_prodi)->row();
        $data['pages'] = 'pages/prodi/edit_prodi';
        $this->load->view('template', $data);
    }

    public function Update()
    {
        $post = $this->input->post();
        $data = [
            'kode_prodi' => $post['kode_prodi'],
            'kode_dikti' => $post['kode_dikti'],
            'nama_prodi' => $post['nama_prodi'],
            'jenjang' => $post['jenjang'],
            'singkatan' => $post['singkatan'],
            'akreditasi' => $post['akreditasi']
        ];
        $this->M_prodi->Updated($data, $post['where']);
        $this->session->set_flashdata('success', 'Data berhasil Di Update');
        redirect(base_url('admin/prodi'));

    }

    function delete($kode_prodi)
    {
        $this->session->set_flashdata('success', 'Data berhasil Di Hapus');
        $this->M_prodi->Deleted($kode_prodi);
        redirect(base_url('admin/prodi'));
    }

}