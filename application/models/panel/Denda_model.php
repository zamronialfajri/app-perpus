<?php

class Denda_model Extends CI_Model{

    public function getData()
    {
        return $this->db->get('denda')->result();
    }

    public function edit($id_denda)
    {
        $this->db->where('id_denda', $id_denda);
        return $this->db->get('denda')->row_array();
    }

    public function update($id_denda, $data)
    {
        $this->db->where('id_denda', $id_denda);
        $this->db->update('denda', $data);
    }

    // public function delete($id_rak)
    // {
    //     $this->db->where('id_rak', $id_rak);
    //     $this->db->delete('rak');
    // }

}