<!-- Model Untuk Login -->

<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_user extends CI_Model
{
    public function getuserlogin($data)
    {
        return $this->db->get_where('tb_user', $data, 1)->row();
    }

    public function Get($username = null)
    {
        if ($username != null) {
            $this->db->where('username', $username);
        }

        return $this->db->get('tb_user');
    }

    function Save($data)
    {
        return $this->db->insert('tb_user', $data);
    }

    function Updated($data, $where)
    {
        $this->db->where('username', $where);
        return $this->db->update('tb_user', $data);
    }
    function Deleted($username)
    {
        return $this->db->delete('tb_user', ['username' => $username]);
    }


}