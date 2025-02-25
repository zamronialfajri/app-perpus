<?php

class Background_model Extends CI_Model{

    public function getData()
    {
        return $this->db->get('background')->result();
    }

    public function edit($id_background)
    {
        $this->db->where('id_background', $id_background);
        return $this->db->get('background')->row_array();
    }

    public function update($id_background, $data)
    {
        $this->db->where('id_background', $id_background);
        $this->db->update('background', $data);
    }

    public function delete($id_background)
    {
        $this->db->where('id_background', $id_background);
        $this->db->delete('background');
    }

}