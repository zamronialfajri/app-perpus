<?php

class Kategori_buku Extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('panel/Kategori_buku_model');
    }

    public function index()
    {
        $data['kategori'] = $this->Kategori_buku_model->getData();
        $this->load->view('panel/templates/menu');
        $this->load->view('panel/kategori_buku/tambah', $data);
        $this->load->view('panel/templates/footer');
    }

    public function simpan()
    {
        $data = array(
            'nama_kategori'    => $this->input->post('nama_kategori')
        );
        $simpan = $this->db->insert('kategori', $data);
        if($simpan = true){
            $this->session->set_flashdata('sukses', 'Data berhasil disimpan');
            redirect('panel/Kategori_buku');
        }
    }

    public function edit($id_kategori)
    {
        $data['kategori'] = $this->Kategori_buku_model->edit($id_kategori);
        $this->load->view('panel/templates/menu');
        $this->load->view('panel/kategori_buku/edit', $data);
        $this->load->view('panel/templates/footer');
    }

    public function update()
    {
        $id_kategori = $this->input->post('id_kategori');
        $data = array(
            'nama_kategori'    => $this->input->post('nama_kategori')
        );
        $update = $this->Kategori_buku_model->update($id_kategori, $data);
        if($update = true){
            $this->session->set_flashdata('sukses', 'Data berhasil diupdate');
            redirect('panel/Kategori_buku');
        }
    }


    public function delete($id_kategori)
    {
        $delete = $this->Kategori_buku_model->delete($id_kategori);
        if($delete = true){
            $this->session->set_flashdata('sukses', 'Data berhasil didelete');
            redirect('panel/Kategori_buku');
        }   
    }

}