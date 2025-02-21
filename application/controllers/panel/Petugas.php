<?php

class Petugas Extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('panel/Petugas_model');
    }

    public function index()
    {
        $data['petugas'] = $this->Petugas_model->getData();
        $this->load->view('panel/templates/menu');
        $this->load->view('panel/petugas/view', $data);
        $this->load->view('panel/templates/footer');
    }

    public function tambah()
    {
        $this->load->view('panel/templates/menu');
        $this->load->view('panel/petugas/tambah');
        $this->load->view('panel/templates/footer');
    }

    public function simpan()
    {
        $config['upload_path']   = './assets/img/petugas';
        $config['allowed_types'] = 'jpg|png';
        $config['max-size']      = '2048';

        $this->load->library('upload', $config);
        if(!$this->upload->do_upload('foto_petugas')){
            $this->session->set_flashdata('gagal', 'file yang diupload harus berupa JPG atau PNG dengan maksimal kapsitasas 2mb');
            redirect('panel/Panel/tambah');
        }else{
            $upload_data = $this->upload->data();
            $data = array(
                'nama_petugas' => $this->input->post('nama_petugas'),
                'username' => $this->input->post('username'),
                'password' => $this->input->post('password'),
                'foto_petugas' => $upload_data['file_name']
            );
            $simpan = $this->db->insert('petugas', $data);
            if($simpan = true){
                $this->session->set_flashdata('sukses', 'Data berhasil disimpan');
                redirect('panel/Petugas/tambah');
            }
        }
    }

}