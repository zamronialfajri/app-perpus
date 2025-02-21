<?php

class Anggota Extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('panel/Anggota_model');
    }

    public function index()
    {
        $data['anggota'] = $this->Anggota_model->getData();
        $this->load->view('panel/templates/menu');
        $this->load->view('panel/anggota/view', $data);
        $this->load->view('panel/templates/footer');
    }

    public function tambah()
    {
        $data['id_anggota'] = $this->Anggota_model->generateId();
        $this->load->view('panel/templates/menu');
        $this->load->view('panel/anggota/tambah', $data);
        $this->load->view('panel/templates/footer');
    }

    public function simpan()
    {
        $config['upload_path']   = './assets/img/anggota';
        $config['allowed_types'] = 'jpg|png';
        $config['max-size']      = '2048';

        $this->load->library('upload', $config);
        if(!$this->upload->do_upload('foto_anggota')){
            $this->session->set_flashdata('gagal', 'file yang diupload harus berupa JPG atau PNG dengan maksimal kapsitasas 2mb');
            redirect('panel/Anggota/tambah');
        }else{
            $upload_data = $this->upload->data();
            $data = array(
                'id_anggota'      => $this->input->post('id_anggota'),
                'nama_anggota'    => $this->input->post('nama_anggota'),
                'alamat_anggota'  => $this->input->post('alamat_anggota'),
                'email_anggota'   => $this->input->post('email_anggota'),
                'telepon_anggota' => $this->input->post('telepon_anggota'),
                'tanggal_daftar'  => $this->input->post('tanggal_daftar'),
                'username'        => $this->input->post('username'),
                'password'        => $this->input->post('password'),
                'foto_anggota'    => $upload_data['file_name']
            );
            $simpan = $this->db->insert('anggota', $data);
            if($simpan = true){
                $this->session->set_flashdata('sukses', 'Data berhasil disimpan');
                redirect('panel/Anggota/tambah');
            }
        }
    }

    public function edit($id_anggota)
    {
        $data['anggota'] = $this->Anggota_model->edit($id_anggota);
        $this->load->view('panel/templates/menu');
        $this->load->view('panel/anggota/edit', $data);
        $this->load->view('panel/templates/footer');
    }

    public function update()
    {
        $id_anggota = $this->input->post('id_anggota');
        $config['upload_path']   = './assets/img/anggota';
        $config['allowed_types'] = 'jpg|png';
        $config['max-size']      = '2048';
        $this->load->library('upload', $config);

        $data = array(
            'id_anggota'      => $this->input->post('id_anggota'),
            'nama_anggota'    => $this->input->post('nama_anggota'),
            'alamat_anggota'  => $this->input->post('alamat_anggota'),
            'email_anggota'   => $this->input->post('email_anggota'),
            'telepon_anggota' => $this->input->post('telepon_anggota'),
            'tanggal_daftar'  => $this->input->post('tanggal_daftar'),
            'username'        => $this->input->post('username'),
            'password'        => $this->input->post('password')
        );

        if(!empty($_FILES['foto_anggota']['name'])){
            if(!$this->upload->do_upload('foto_anggota')){
                $this->session->set_flashdata('gagal', 'file yang diupload harus berupa JPG atau PNG dengan maksimal kapsitasas 2mb');
                redirect('panel/Anggota/edit', $id_anggota);
            }else{
                $upload_data = $this->upload->data();
                $data['foto_anggota'] = $upload_data['file_name'];

                $foto_lama = $this->db->get_where('anggota', array('id_anggota' => $id_anggota))->row_array();
                if(!empty($foto_lama['foto_anggota'])){
                    unlink('assets/img/anggota/'.$foto_lama['foto_anggota']);
                }
            }
        }

        $update = $this->Anggota_model->update($id_anggota, $data);
        if($update = true){
            $this->session->set_flashdata('sukses', 'Data berhasil diupdate');
            redirect('panel/Anggota');
        }
    }


    public function delete($id_anggota)
    {
        $foto_lama = $this->db->get_where('anggota', array('id_anggota' => $id_anggota))->row_array();
        $delete = $this->Anggota_model->delete($id_anggota);
        if($delete = true){
            $this->session->set_flashdata('sukses', 'Data berhasil didelete');
            unlink('assets/img/anggota/'.$foto_lama['foto_anggota']);
            redirect('panel/Anggota');
        }
    }

}