<?php

class Logo Extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('panel/Logo_model');
    }

    public function index()
    {
        $data['logo'] = $this->Logo_model->getData();
        $this->load->view('panel/templates/menu');
        $this->load->view('panel/logo/tambah', $data);
        $this->load->view('panel/templates/footer');
    }

    public function simpan()
    {
        $config['upload_path']   = './assets/img/logo';
        $config['allowed_types'] = 'jpg|png';
        $config['max-size']      = '2048';

        $this->load->library('upload', $config);
        if(!$this->upload->do_upload('gambar_logo')){
            $this->session->set_flashdata('gagal', 'file yang diupload harus berupa JPG atau PNG dengan maksimal kapsitasas 2mb');
            redirect('panel/Logo');
        }else{
            $upload_data = $this->upload->data();
            $data = array(
                'gambar_logo' => $upload_data['file_name'],
                'status_logo' => $this->input->post('status_logo')
            );
            $simpan = $this->db->insert('logo', $data);
            if($simpan = true){
                $this->session->set_flashdata('sukses', 'Data berhasil disimpan');
                redirect('panel/Logo');
            }
        }
    }

    public function edit($id_logo)
    {
        $data['logo'] = $this->Logo_model->edit($id_logo);
        $this->load->view('panel/templates/menu');
        $this->load->view('panel/logo/edit', $data);
        $this->load->view('panel/templates/footer');
    }

    public function update()
    {
        $id_logo = $this->input->post('id_logo');
        $config['upload_path']   = './assets/img/logo';
        $config['allowed_types'] = 'jpg|png';
        $config['max-size']      = '2048';
        $this->load->library('upload', $config);

        $data = array(
            'status_logo' => $this->input->post('status_logo')
        );

        if(!empty($_FILES['gambar_logo']['name'])){
            if(!$this->upload->do_upload('gambar_logo')){
                $this->session->set_flashdata('gagal', 'file yang diupload harus berupa JPG atau PNG dengan maksimal kapsitasas 2mb');
                redirect('panel/Logo/edit', $id_logo);
            }else{
                $upload_data = $this->upload->data();
                $data['gambar_logo'] = $upload_data['file_name'];

                $foto_lama = $this->db->get_where('logo', array('id_logo' => $id_logo))->row_array();
                if(!empty($foto_lama['gambar_logo'])){
                    unlink('assets/img/logo/'.$foto_lama['gambar_logo']);
                }
            }
        }

        $update = $this->Logo_model->update($id_logo, $data);
        if($update = true){
            $this->session->set_flashdata('sukses', 'Data berhasil diupdate');
            redirect('panel/Logo');
        }
    }


    public function delete($id_logo)
    {
        $foto_lama = $this->db->get_where('logo', array('id_logo' => $id_logo))->row_array();
        $delete = $this->Logo_model->delete($id_logo);
        if($delete = true){
            $this->session->set_flashdata('sukses', 'Data berhasil didelete');
            unlink('assets/img/logo/'.$foto_lama['gambar_logo']);
            redirect('panel/Logo');
        }
    }

}