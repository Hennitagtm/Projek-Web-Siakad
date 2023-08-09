<!-- Model Dosen -->

<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_kepalaprodi extends CI_Model
{
    // public function Get()
    // {
    //     return $this->db->get('tb_prodi_kaprodi');
    // }
    public function Get($id_kaprodi = null)
    {
        if ($id_kaprodi != null) {
            $this->db->where('id_kaprodi', $id_kaprodi);
        }

        return $this->db->get('tb_kaprodi');
    }

    function Save($data)
    {
        return $this->db->insert('tb_kaprodi', $data);
    }

    function Updated($data, $where)
    {
        $this->db->where('id_kaprodi', $where);
        return $this->db->update('tb_kaprodi', $data);
    }

    function Deleted($id_kaprodi)
    {
        return $this->db->delete('tb_kaprodi', ['id_kaprodi' => $id_kaprodi]);
    }


}