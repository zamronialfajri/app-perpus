<?php

class Logo_model Extends CI_Model{

    public function getData()
    {
        return $this->db->get('logo')->result();
    }

    public function edit($id_logo)
    {
        $this->db->where('id_logo', $id_logo);
        return $this->db->get('logo')->row_array();
    }

    public function update($id_logo, $data)
    {
        $this->db->where('id_logo', $id_logo);
        $this->db->update('logo', $data);
    }

    public function delete($id_logo)
    {
        $this->db->where('id_logo', $id_logo);
        $this->db->delete('logo');
    }

}