<!-- Model Dosen -->

<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_mahasiswa extends CI_Model
{
    public function Get()
    {
        $this->db->select('*');
        $this->db->from('tb_mahasiswa');
        $this->db->join('tb_prodi', 'tb_prodi.kode_prodi=tb_mahasiswa.kode_prodi');
        $this->db->join('tb_kelas', 'tb_kelas.id_kelas=tb_mahasiswa.id_kelas');
        $this->db->join('tb_semester', 'tb_semester.id_semester=tb_mahasiswa.id_semester');
        $query = $this->db->get();
        return $query->result();
    }

    function Save($data)
    {
        return $this->db->insert('tb_mahasiswa', $data);
    }

    function Updated($data, $where)
    {
        $this->db->where('id_mahasiswa', $where);
        return $this->db->update('tb_mahasiswa', $data);
    }
    function Deleted($id_mahasiswa)
    {
        return $this->db->delete('tb_mahasiswa', ['id_mahasiswa' => $id_mahasiswa]);
    }


    function GetKodeProdi()
    {
        $query = $this->db->get('tb_prodi');
        return $query->result_array();
    }
    function GetKodeSemester()
    {
        $query = $this->db->get('tb_semester');
        return $query->result_array();
    }
    function GetKodeKelas()
    {
        $query = $this->db->get('tb_kelas');
        return $query->result_array();
    }


    function GetIdMahasiswa($id_mahasiswa)
    {
        $this->db->where('id_mahasiswa', $id_mahasiswa);
        $query = $this->db->get('tb_mahasiswa');
        return $query->row_array();
    }


}