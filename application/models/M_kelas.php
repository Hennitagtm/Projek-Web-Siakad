<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_kelas extends CI_Model
{
    public function Get()
    {
        $this->db->select('*');
        $this->db->from('tb_kelas');
        $this->db->join('tb_dosen', 'tb_dosen.id_dosen=tb_kelas.id_dosen');
        $this->db->join('tb_prodi', 'tb_prodi.kode_prodi=tb_kelas.kode_prodi');
        $query = $this->db->get();
        return $query->result();
    }

    function Save($data)
    {
        return $this->db->insert('tb_kelas', $data);
    }

    function Updated($data, $where)
    {
        $this->db->where('id_kelas', $where);
        return $this->db->update('tb_kelas', $data);
    }

    function Deleted($id_kelas)
    {
        return $this->db->delete('tb_kelas', ['id_kelas' => $id_kelas]);
    }

    function GetKodeProdi()
    {
        $query = $this->db->get('tb_prodi');
        return $query->result_array();
    }

    function GetKodeDosen()
    {
        $query = $this->db->get('tb_dosen');
        return $query->result_array();
    }

    function GetIdKelas($id_kelas)
    {
        $this->db->where('id_kelas', $id_kelas);
        $query = $this->db->get('tb_kelas');
        return $query->row_array();
    }

}