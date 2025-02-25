<?php

class Background Extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('panel/Background_model');
    }

    public function index()
    {
        $data['background'] = $this->Background_model->getData();
        $this->load->view('panel/templates/menu');
        $this->load->view('panel/background/tambah', $data);
        $this->load->view('panel/templates/footer');
    }

    public function simpan()
    {
        $config['upload_path']   = './assets/img/background';
        $config['allowed_types'] = 'jpg|png';
        $config['max-size']      = '2048';

        $this->load->library('upload', $config);
        if(!$this->upload->do_upload('gambar_background')){
            $this->session->set_flashdata('gagal', 'file yang diupload harus berupa JPG atau PNG dengan maksimal kapsitasas 2mb');
            redirect('panel/Background');
        }else{
            $upload_data = $this->upload->data();
            $data = array(
                'gambar_background' => $upload_data['file_name'],
                'status_background' => $this->input->post('status_background')
            );
            $simpan = $this->db->insert('background', $data);
            if($simpan = true){
                $this->session->set_flashdata('sukses', 'Data berhasil disimpan');
                redirect('panel/Background');
            }
        }
    }

    public function edit($id_background)
    {
        $data['background'] = $this->Background_model->edit($id_background);
        $this->load->view('panel/templates/menu');
        $this->load->view('panel/background/edit', $data);
        $this->load->view('panel/templates/footer');
    }

    public function update()
    {
        $id_background = $this->input->post('id_background');
        $config['upload_path']   = './assets/img/background';
        $config['allowed_types'] = 'jpg|png';
        $config['max-size']      = '2048';
        $this->load->library('upload', $config);

        $data = array(
            'status_background' => $this->input->post('status_background')
        );

        if(!empty($_FILES['gambar_background']['name'])){
            if(!$this->upload->do_upload('gambar_background')){
                $this->session->set_flashdata('gagal', 'file yang diupload harus berupa JPG atau PNG dengan maksimal kapsitasas 2mb');
                redirect('panel/Background/edit', $id_background);
            }else{
                $upload_data = $this->upload->data();
                $data['gambar_background'] = $upload_data['file_name'];

                $foto_lama = $this->db->get_where('background', array('id_background' => $id_background))->row_array();
                if(!empty($foto_lama['gambar_background'])){
                    unlink('assets/img/Background/'.$foto_lama['gambar_background']);
                }
            }
        }

        $update = $this->Background_model->update($id_background, $data);
        if($update = true){
            $this->session->set_flashdata('sukses', 'Data berhasil diupdate');
            redirect('panel/Background');
        }
    }


    public function delete($id_background)
    {
        $foto_lama = $this->db->get_where('background', array('id_background' => $id_background))->row_array();
        $delete = $this->Background_model->delete($id_background);
        if($delete = true){
            $this->session->set_flashdata('sukses', 'Data berhasil didelete');
            unlink('assets/img/background/'.$foto_lama['gambar_background']);
            redirect('panel/Background');
        }
    }

}