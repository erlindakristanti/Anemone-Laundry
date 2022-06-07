<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_about extends CI_Model {
    
    public function edit($id_about)
    {
        $this->db->where('id_about', $id_about);
        return $this->db->get('about')->row_array();
    }

    public function update($id_about, $data)
    {
        $this->db->where('id_about', $id_about);
        $this->db->update('about', $data);
    }
}