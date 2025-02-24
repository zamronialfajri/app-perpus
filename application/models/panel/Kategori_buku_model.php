<?php

class Kategori_buku_model Extends CI_Model{

    public function getData()
    {
        return $this->db->get('kategori')->result();
    }

    public function edit($id_kategori)
    {
        $this->db->where('id_kategori', $id_kategori);
        return $this->db->get('kategori')->row_array();
    }

    public function update($id_kategori, $data)
    {
        $this->db->where('id_kategori', $id_kategori);
        $this->db->update('kategori', $data);
    }

    public function delete($id_kategori)
    {
        $this->db->where('id_kategori', $id_kategori);
        $this->db->delete('kategori');
    }

}