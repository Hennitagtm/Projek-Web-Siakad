<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kelas extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_user');
        if ($this->session->userdata('login') != TRUE) {
            redirect(base_url());
        }
        $this->load->model('M_kelas', '', TRUE);
    }

    public function index()
    {
        $data['data'] = $this->M_kelas->Get();
        $data['pages'] = 'pages/kelas/kelas';
        $this->load->view('template', $data);
    }

    function add()
    {
        $data['prodi_list'] = $this->M_kelas->GetKodeProdi();
        $data['dosen_list'] = $this->M_kelas->GetKodeDosen();
        $data['pages'] = 'pages/kelas/add_kelas';
        $this->load->view('template', $data);
    }

    public function create()
    {
        $post = $this->input->post();
        $data = [
            'id_kelas' => $post['id_kelas'],
            'nama_kelas' => $post['nama_kelas'],
            'kode_prodi' => $post['nama_prodi'],
            'id_dosen' => $post['id_dosen']
        ];
        $this->M_kelas->Save($data);
        $this->session->set_flashdata('success', 'Data berhasil Ditambahkan');
        redirect(base_url('admin/kelas'));
    }

    public function edit($id_kelas)
    {
        $data['kelas_data'] = $this->M_kelas->GetIdKelas($id_kelas);
        $data['prodi_list'] = $this->M_kelas->GetKodeProdi();
        $data['dosen_list'] = $this->M_kelas->GetKodeDosen();
        $data['pages'] = 'pages/kelas/edit_kelas';
        $this->load->view('template', $data);
    }

    public function Update()
    {
        $post = $this->input->post();
        $data = [
            'id_kelas' => $post['id_kelas'],
            'nama_kelas' => $post['nama_kelas'],
            'kode_prodi' => $post['kode_prodi'],
            'id_dosen' => $post['id_dosen']
        ];
        $this->M_kelas->Updated($data, $post['where']);
        $this->session->set_flashdata('success', 'Data berhasil Diupdate');
        redirect(base_url('admin/kelas'));

    }

    function delete($id_kelas)
    {
        $this->session->set_flashdata('success', 'Data berhasil Dihapus');
        $this->M_kelas->Deleted($id_kelas);
        redirect(base_url('admin/kelas'));
    }
}