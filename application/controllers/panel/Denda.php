<?php

class Denda Extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('panel/Denda_model');
    }

    public function index()
    {
        $data['denda'] = $this->Denda_model->getData();
        $this->load->view('panel/templates/menu');
        $this->load->view('panel/denda/view', $data);
        $this->load->view('panel/templates/footer');
    }

    public function tambah()
    {
        $this->load->view('panel/templates/menu');
        $this->load->view('panel/denda/tambah');
        $this->load->view('panel/templates/footer');
    }

    public function simpan()
    {
        $data = array(
            'nominal_denda'    => $this->input->post('nominal_denda')
        );
        $simpan = $this->db->insert('denda', $data);
        if($simpan = true){
            $this->session->set_flashdata('sukses', 'Data berhasil disimpan');
            redirect('panel/Denda');
        }
    }

    public function edit($id_denda)
    {
        $data['denda'] = $this->Denda_model->edit($id_denda);
        $this->load->view('panel/templates/menu');
        $this->load->view('panel/denda/edit', $data);
        $this->load->view('panel/templates/footer');
    }

    public function update()
    {
        $id_denda = $this->input->post('id_denda');
        $data = array(
            'nominal_denda'    => $this->input->post('nominal_denda')
        );
        $update = $this->Denda_model->update($id_denda, $data);
        if($update = true){
            $this->session->set_flashdata('sukses', 'Data berhasil diupdate');
            redirect('panel/Denda');
        }
    }


    // public function delete($id_rak)
    // {
    //     $delete = $this->Rak_model->delete($id_rak);
    //     if($delete = true){
    //         $this->session->set_flashdata('sukses', 'Data berhasil didelete');
    //         redirect('panel/Rak');
    //     }   
    // }

}