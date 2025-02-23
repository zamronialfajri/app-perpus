<?php

class Pengarang Extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('panel/Pengarang_model');
    }

    public function index()
    {
        $data['pengarang'] = $this->Pengarang_model->getData();
        $this->load->view('panel/templates/menu');
        $this->load->view('panel/pengarang/view', $data);
        $this->load->view('panel/templates/footer');
    }

    public function tambah()
    {
        $this->load->view('panel/templates/menu');
        $this->load->view('panel/pengarang/tambah');
        $this->load->view('panel/templates/footer');
    }

    public function simpan()
    {
        $data = array(
            'nama_pengarang'    => $this->input->post('nama_pengarang'),
            'alamat_pengarang'  => $this->input->post('alamat_pengarang'),
            'email_pengarang'   => $this->input->post('email_pengarang'),
            'telepon_pengarang' => $this->input->post('telepon_pengarang')
        );
        $simpan = $this->db->insert('pengarang', $data);
        if($simpan = true){
            $this->session->set_flashdata('sukses', 'Data berhasil disimpan');
            redirect('panel/Pengarang/tambah');
        }
    }

    public function edit($id_pengarang)
    {
        $data['pengarang'] = $this->Pengarang_model->edit($id_pengarang);
        $this->load->view('panel/templates/menu');
        $this->load->view('panel/pengarang/edit', $data);
        $this->load->view('panel/templates/footer');
    }

    public function update()
    {
        $id_pengarang = $this->input->post('id_pengarang');
        $data = array(
            'nama_pengarang'    => $this->input->post('nama_pengarang'),
            'alamat_pengarang'  => $this->input->post('alamat_pengarang'),
            'email_pengarang'   => $this->input->post('email_pengarang'),
            'telepon_pengarang' => $this->input->post('telepon_pengarang')
        );
        $update = $this->Pengarang_model->update($id_pengarang, $data);
        if($update = true){
            $this->session->set_flashdata('sukses', 'Data berhasil diupdate');
            redirect('panel/Pengarang');
        }
    }


    public function delete($id_pengarang)
    {
        $delete = $this->Pengarang_model->delete($id_pengarang);
        if($delete = true){
            $this->session->set_flashdata('sukses', 'Data berhasil didelete');
            redirect('panel/Pengarang');
        }   
    }

}