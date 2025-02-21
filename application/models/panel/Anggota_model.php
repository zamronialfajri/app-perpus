<?php

class Anggota_model Extends CI_Model{

    public function generateId()
    {
        $this->db->select_max('id_anggota');
        $query = $this->db->get('anggota');
        $last_id = $query->row()->id_anggota;
        $last_number = (int)substr($last_id, 3);
        $new_number = $last_number + 1;
        $kodeJadi = "AGT" . str_pad($new_number, 3, "0", STR_PAD_LEFT);
        return $kodeJadi;
    }

        public function getData()
        {
        return $this->db->get('anggota')->result();
    }   

    public function edit($id_anggota)
    {
        $this->db->where('id_anggota', $id_anggota);
        return $this->db->get('anggota')->row_array();
    }

    public function update($id_anggota, $data)
    {
        $this->db->where('id_anggota', $id_anggota);
        $this->db->update('anggota', $data);
    }

    public function delete($id_anggota)
    {
        $this->db->where('id_anggota', $id_anggota);
        $this->db->delete('anggota');
    }

}