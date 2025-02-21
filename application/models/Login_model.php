<?php

class Login_model Extends CI_Model{

    public function prosesLoginPetugas($username, $password)
    {
        $this->db->where('username', $username);
        $this->db->where('password', $password);
        $query = $this->db->get('petugas');
        if ($query->num_rows()>0) {
            foreach ($query->result() as $row) {
                $sess = array(
                    'id_petugas'    => $row->id_petugas,
                    'nama_petugas'  => $row->nama_petugas,
                    'username'      => $row->username,
                    'password'      => $row->password,
                    'foto_petugas'  => $row->foto_petugas
                );
                $this->session->set_userdata($sess);
            }
            redirect('panel/Dashboard');
        }else{
            $this->session->set_flashdata('gagal', 'Silahkan periksa kembali username dan password anda');
            redirect('Login');
        }
    }

}