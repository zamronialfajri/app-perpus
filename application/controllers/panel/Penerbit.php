<?php

class Penerbit Extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('panel/Penerbit_model');
    }

    public function index()
    {
        $data['penerbit'] = $this->Penerbit_model->getData();
        $this->load->view('panel/templates/menu');
        $this->load->view('panel/penerbit/view', $data);
        $this->load->view('panel/templates/footer');
    }

    public function tambah()
    {
        $this->load->view('panel/templates/menu');
        $this->load->view('panel/penerbit/tambah');
        $this->load->view('panel/templates/footer');
    }

    public function simpan()
    {
        $data = array(
            'nama_penerbit'    => $this->input->post('nama_penerbit'),
            'alamat_penerbit'  => $this->input->post('alamat_penerbit'),
            'email_penerbit'   => $this->input->post('email_penerbit'),
            'telepon_penerbit' => $this->input->post('telepon_penerbit')
        );
        $simpan = $this->db->insert('penerbit', $data);
        if($simpan = true){
            $this->session->set_flashdata('sukses', 'Data berhasil disimpan');
            redirect('panel/Penerbit/tambah');
        }
    }

    public function edit($id_penerbit)
    {
        $data['penerbit'] = $this->Penerbit_model->edit($id_penerbit);
        $this->load->view('panel/templates/menu');
        $this->load->view('panel/penerbit/edit', $data);
        $this->load->view('panel/templates/footer');
    }

    public function update()
    {
        $id_penerbit = $this->input->post('id_penerbit');
        $data = array(
            'nama_penerbit'    => $this->input->post('nama_penerbit'),
            'alamat_penerbit'  => $this->input->post('alamat_penerbit'),
            'email_penerbit'   => $this->input->post('email_penerbit'),
            'telepon_penerbit' => $this->input->post('telepon_penerbit')
        );
        $update = $this->Penerbit_model->update($id_penerbit, $data);
        if($update = true){
            $this->session->set_flashdata('sukses', 'Data berhasil diupdate');
            redirect('panel/Penerbit');
        }
    }


    public function delete($id_penerbit)
    {
        $delete = $this->Penerbit_model->delete($id_penerbit);
        if($delete = true){
            $this->session->set_flashdata('sukses', 'Data berhasil didelete');
            redirect('panel/Penerbit');
        }   
    }

}