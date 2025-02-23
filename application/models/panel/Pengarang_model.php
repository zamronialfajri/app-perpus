<?php

class Pengarang_model Extends CI_Model{

    public function getData()
    {
        return $this->db->get('pengarang')->result();
    }

    public function edit($id_pengarang)
    {
        $this->db->where('id_pengarang', $id_pengarang);
        return $this->db->get('pengarang')->row_array();
    }

    public function update($id_pengarang, $data)
    {
        $this->db->where('id_pengarang', $id_pengarang);
        $this->db->update('pengarang', $data);
    }

    public function delete($id_pengarang)
    {
        $this->db->where('id_pengarang', $id_pengarang);
        $this->db->delete('pengarang');
    }

}