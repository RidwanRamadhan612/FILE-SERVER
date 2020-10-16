<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_model extends CI_Model
{
    public function addPendidikan()
    {
        $this->db->select('*');
        $this->db->from('tb_pendidikan');
        $this->db->join('tb_user', 'tb_user.id_user = tb_pendidikan.id_user');
        $query = $this->db->get();
        return $query->result_array();
    }
}