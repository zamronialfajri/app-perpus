<?php

class Buku_model Extends CI_Model{

    public function generateId()
    {
        $this->db->select_max('id_buku');
        $query = $this->db->get('buku');
        $last_id = $query->row()->id_buku;
        $last_number = (int)substr($last_id, 3);
        $new_number = $last_number + 1;
        $kodeJadi = "BK" . str_pad($new_number, 3, "0", STR_PAD_LEFT);
        return $kodeJadi;
    }

    public function getPengarang()
    {
        return $this->db->get('pengarang')->result();
    }

    public function getPenerbit()
    {
        return $this->db->get('penerbit')->result();
    }

    public function getRak()
    {
        return $this->db->get('rak')->result();
    }

    public function getKategori()
    {
        return $this->db->get('kategori')->result();
    }

    public function getData()
    {
        $this->db->select('*');
        $this->db->from('buku');
        $this->db->join('pengarang', 'buku.id_pengarang = pengarang.id_pengarang', 'left');
        $this->db->join('penerbit', 'buku.id_penerbit = penerbit.id_penerbit', 'left');
        $this->db->join('rak', 'buku.id_rak = rak.id_rak', 'left');
        $this->db->join('kategori', 'buku.id_kategori = kategori.id_kategori', 'left');
        return $this->db->get()->result();
    }   

    public function edit($id_buku)
    {
        $this->db->select('*');
        $this->db->from('buku');
        $this->db->join('pengarang', 'buku.id_pengarang = pengarang.id_pengarang', 'left');
        $this->db->join('penerbit', 'buku.id_penerbit = penerbit.id_penerbit', 'left');
        $this->db->join('rak', 'buku.id_rak = rak.id_rak', 'left');
        $this->db->join('kategori', 'buku.id_kategori = kategori.id_kategori', 'left');
        $this->db->where('id_buku', $id_buku);
        return $this->db->get()->row_array();
    }

    public function update($id_buku, $data)
    {
        $this->db->where('id_buku', $id_buku);
        $this->db->update('buku', $data);
    }

    public function delete($id_buku)
    {
        $this->db->where('id_buku', $id_buku);
        $this->db->delete('buku');
    }

}