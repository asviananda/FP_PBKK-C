<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_artis extends CI_Model
{
    public function get_all_data()
    {
        $this->db->select('*');
        $this->db->from('tbl_artis');
        $this->db->order_by('id_artis', 'asc');
        return $this->db->get()->result();
    }

    public function add($data)
    {
        $this->db->insert('tbl_artis', $data);
    }

    public function edit($data)
    {
        $this->db->where('id_artis', $data['id_artis']);
        $this->db->update('tbl_artis', $data);
    }

    public function delete($data)
    {
        $this->db->where('id_artis', $data['id_artis']);
        $this->db->delete('tbl_artis', $data);
    }
}