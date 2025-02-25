<?php

class Peminjaman_model Extends CI_Model{

    public function generateId()
    {
        $this->db->select_max('id_peminjaman');
        $query = $this->db->get('peminjaman');
        $last_id = $query->row()->id_peminjaman;
        $last_number = (int)substr($last_id, 4);
        $new_number = $last_number + 1;
        $kodeJadi = "PM" . str_pad($new_number, 4, "0", STR_PAD_LEFT);
        return $kodeJadi;
    }

    public function getPeminjam()
    {
        return $this->db->get('anggota')->result();
    }

    public function getBuku()
    {
        return $this->db->get('buku')->result();
    }

    public function getDenda()
    {
        return $this->db->get('denda')->row_array();
    }

    public function getPeminjaman()
    {
        $this->db->select('*');
        $this->db->from('peminjaman');
        $this->db->join('petugas', 'peminjaman.id_petugas = petugas.id_petugas', 'left');
        $this->db->join('anggota', 'peminjaman.id_anggota = anggota.id_anggota', 'left');
        $this->db->join('buku', 'peminjaman.id_buku = buku.id_buku', 'left');
        return $this->db->get()->result();
    }

    public function cekStokBuku($id_buku)
    {
        $this->db->where('id_buku', $id_buku);
        return $this->db->get('buku')->row_array();
    }

}