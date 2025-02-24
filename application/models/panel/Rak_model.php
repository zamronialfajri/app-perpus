<?php

class Rak_model Extends CI_Model{

    public function getData()
    {
        return $this->db->get('rak')->result();
    }

    public function edit($id_rak)
    {
        $this->db->where('id_rak', $id_rak);
        return $this->db->get('rak')->row_array();
    }

    public function update($id_rak, $data)
    {
        $this->db->where('id_rak', $id_rak);
        $this->db->update('rak', $data);
    }

    public function delete($id_rak)
    {
        $this->db->where('id_rak', $id_rak);
        $this->db->delete('rak');
    }

}