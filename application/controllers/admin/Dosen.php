<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dosen extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_user');
        if ($this->session->userdata('login') != TRUE) {
            redirect(base_url());
        }
        $this->load->model('M_dosen', '', TRUE);
    }

    public function index()
    {
        $data['data'] = $this->M_dosen->Get();
        $data['pages'] = 'pages/dosen/dosen';
        $this->load->view('template', $data);
    }

    function add()
    {
        $data['prodi_list'] = $this->M_dosen->GetKodeProdi();
        $data['pages'] = 'pages/dosen/add_dosen';
        $this->load->view('template', $data);
    }

    public function create()
    {
        $post = $this->input->post();
        $data = [
            'id_dosen' => $post['id_dosen'],
            'foto' => $post['foto'],
            'nama_lengkap' => $post['nama_lengkap'],
            'gelar' => $post['gelar'],
            'nrp' => $post['nrp'],
            'nidn' => $post['nidn'],
            'email' => $post['email'],
            'gender' => $post['gender'],
            'pendidikan_terakhir' => $post['pendidikan_terakhir'],
            'kode_prodi' => $post['kode_prodi']
        ];
        $this->M_dosen->Save($data);
        $this->session->set_flashdata('success', 'Data berhasil Di tambahkan');
        redirect(base_url('admin/dosen'));
    }

        public function edit($id_dosen)
    {
        $data['data'] = $this->M_dosen->GetIdDosen($id_dosen);
        $data['prodi_list'] = $this->M_dosen->GetKodeProdi();
        $data['pages'] = 'pages/dosen/edit_dosen';
        $this->load->view('template', $data);
    }

    public function Update()
    {
        $post = $this->input->post();
        $data = [
            'id_dosen' => $post['id_dosen'],
            'foto' => $post['foto'],
            'nama_lengkap' => $post['nama_lengkap'],
            'gelar' => $post['gelar'],
            'nrp' => $post['nrp'],
            'nidn' => $post['nidn'],
            'email' => $post['email'],
            'gender' => $post['gender'],
            'pendidikan_terakhir' => $post['pendidikan_terakhir'],
            'kode_prodi' => $post['kode_prodi']
        ];
        $this->M_dosen->Updated($data, $post['where']);
        $this->session->set_flashdata('success', 'Data berhasil Di Update');
        redirect(base_url('admin/dosen'));

    }

    function delete($id_dosen)
    {
        $this->session->set_flashdata('success', 'Data berhasil Di Hapus');
        $this->M_dosen->Deleted($id_dosen);
        redirect(base_url('admin/dosen'));
    }


}