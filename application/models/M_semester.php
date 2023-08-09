<!-- Model Dosen -->

<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_semester extends CI_Model
{
    public function Get($id_semester = null)
    {
        if ($id_semester != null) {
            $this->db->where('id_semester', $id_semester);
        }

        return $this->db->get('tb_semester');
    }

    function Save($data)
    {
        return $this->db->insert('tb_semester', $data);
    }

    function Updated($data, $where)
    {
        $this->db->where('id_semester', $where);
        return $this->db->update('tb_semester', $data);
    }
    function Deleted($id_semester)
    {
        return $this->db->delete('tb_semester', ['id_semester' => $id_semester]);
    }


}