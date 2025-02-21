<?php

class Petugas_model Extends CI_Model{

    public function getData()
    {
        return $this->db->get('petugas')->result();
    }

}