<?php

class Petugas_model Extends CI_Model{

    public function getData()
    {
        return $this->db->get('petugas')->result();
    }

    public function edit($id_petugas)
    {
        $this->db->where('id_petugas', $id_petugas);
        return $this->db->get('petugas')->row_array();
    }

    public function update($id_petugas, $data)
    {
        $this->db->where('id_petugas', $id_petugas);
        $this->db->update('petugas', $data);
    }

    public function delete($id_petugas)
    {
        $this->db->where('id_petugas', $id_petugas);
        $this->db->delete('petugas');
    }

}