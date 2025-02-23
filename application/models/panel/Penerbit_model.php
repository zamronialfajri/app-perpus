<?php

class Penerbit_model Extends CI_Model{

    public function getData()
    {
        return $this->db->get('penerbit')->result();
    }

    public function edit($id_penerbit)
    {
        $this->db->where('id_penerbit', $id_penerbit);
        return $this->db->get('penerbit')->row_array();
    }

    public function update($id_penerbit, $data)
    {
        $this->db->where('id_penerbit', $id_penerbit);
        $this->db->update('penerbit', $data);
    }

    public function delete($id_penerbit)
    {
        $this->db->where('id_penerbit', $id_penerbit);
        $this->db->delete('penerbit');
    }

}