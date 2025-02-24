<?php

class Rak Extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('panel/Rak_model');
    }

    public function index()
    {
        $data['rak'] = $this->Rak_model->getData();
        $this->load->view('panel/templates/menu');
        $this->load->view('panel/rak/tambah', $data);
        $this->load->view('panel/templates/footer');
    }

    public function simpan()
    {
        $data = array(
            'nama_rak'    => $this->input->post('nama_rak'),
            'lokasi_rak'  => $this->input->post('lokasi_rak')
        );
        $simpan = $this->db->insert('rak', $data);
        if($simpan = true){
            $this->session->set_flashdata('sukses', 'Data berhasil disimpan');
            redirect('panel/Rak');
        }
    }

    public function edit($id_rak)
    {
        $data['rak'] = $this->Rak_model->edit($id_rak);
        $this->load->view('panel/templates/menu');
        $this->load->view('panel/rak/edit', $data);
        $this->load->view('panel/templates/footer');
    }

    public function update()
    {
        $id_rak = $this->input->post('id_rak');
        $data = array(
            'nama_rak'    => $this->input->post('nama_rak'),
            'lokasi_rak'  => $this->input->post('lokasi_rak')
        );
        $update = $this->Rak_model->update($id_rak, $data);
        if($update = true){
            $this->session->set_flashdata('sukses', 'Data berhasil diupdate');
            redirect('panel/Rak');
        }
    }


    public function delete($id_rak)
    {
        $delete = $this->Rak_model->delete($id_rak);
        if($delete = true){
            $this->session->set_flashdata('sukses', 'Data berhasil didelete');
            redirect('panel/Rak');
        }   
    }

}