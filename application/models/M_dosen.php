<!-- Model Dosen -->

<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_dosen extends CI_Model
{
    public function Get()
    {
        $this->db->select('*');
        $this->db->from('tb_dosen');
        $this->db->join('tb_prodi', 'tb_prodi.kode_prodi=tb_dosen.kode_prodi');
        $query = $this->db->get();
        return $query->result();
    }

    function Save($data)
    {
        return $this->db->insert('tb_dosen', $data);
    }

    function Updated($data, $where)
    {
        $this->db->where('id_dosen', $where);
        return $this->db->update('tb_dosen', $data);
    }
    function Deleted($id_dosen)
    {
        return $this->db->delete('tb_dosen', ['id_dosen' => $id_dosen]);
    }

    function GetKodeProdi()
    {
        $this->db->select('kode_prodi, nama_prodi');
        return $this->db->get('tb_prodi')->result_array();
    }


    function GetIdDosen($id_dosen)
    {
        $this->db->where('id_dosen', $id_dosen);
        $query = $this->db->get('tb_dosen');
        return $query->row_array();
    }
}