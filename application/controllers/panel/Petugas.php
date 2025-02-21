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
            redirect('panel/Petugas/tambah');
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

    public function edit($id_petugas)
    {
        $data['petugas'] = $this->Petugas_model->edit($id_petugas);
        $this->load->view('panel/templates/menu');
        $this->load->view('panel/petugas/edit', $data);
        $this->load->view('panel/templates/footer');
    }

    public function update()
    {
        $id_petugas = $this->input->post('id_petugas');
        $config['upload_path']   = './assets/img/petugas';
        $config['allowed_types'] = 'jpg|png';
        $config['max-size']      = '2048';
        $this->load->library('upload', $config);

        $data = array(
            'nama_petugas' => $this->input->post('nama_petugas'),
            'username'     => $this->input->post('username'),
            'password'     => $this->input->post('password')
        );

        if(!empty($_FILES['foto_petugas']['name'])){
            if(!$this->upload->do_upload('foto_petugas')){
                $this->session->set_flashdata('gagal', 'file yang diupload harus berupa JPG atau PNG dengan maksimal kapsitasas 2mb');
                redirect('panel/Panel/edit', $id_petugas);
            }else{
                $upload_data = $this->upload->data();
                $data['foto_petugas'] = $upload_data['file_name'];

                $foto_lama = $this->db->get_where('petugas', array('id_petugas' => $id_petugas))->row_array();
                if(!empty($foto_lama['foto_petugas'])){
                    unlink('assets/img/petugas/'.$foto_lama['foto_petugas']);
                }
            }
        }

        $update = $this->Petugas_model->update($id_petugas, $data);
        if($update = true){
            $this->session->set_flashdata('sukses', 'Data berhasil diupdate');
            redirect('panel/Petugas');
        }
    }


    public function delete($id_petugas)
    {
        $foto_lama = $this->db->get_where('petugas', array('id_petugas' => $id_petugas))->row_array();
        $delete = $this->Petugas_model->delete($id_petugas);
        if($delete = true){
            $this->session->set_flashdata('sukses', 'Data berhasil didelete');
            unlink('assets/img/petugas/'.$foto_lama['foto_petugas']);
            redirect('panel/Petugas');
        }
    }

}