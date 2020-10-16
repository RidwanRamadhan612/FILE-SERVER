<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_pendidikan extends CI_Model
{
    public function get_pendidikan()
    {
        $id_user = $this->session->userdata('id_user');
        $this->db->select('*');
        $this->db->from('tb_pendidikan');
        $this->db->join('tb_user', 'tb_pendidikan.id_user = tb_user.id_user');
        $this->db->where('id_user', $id_user);
        $query = $this->db->get();
        var_dump($query);
        die;
    }
}