<?php

class Buku Extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('panel/Buku_model');
    }

    public function index()
    {
        $data['buku'] = $this->Buku_model->getData();
        $this->load->view('panel/templates/menu');
        $this->load->view('panel/buku/view', $data);
        $this->load->view('panel/templates/footer');
    }

    public function tambah()
    {
        $data['id_buku']   = $this->Buku_model->generateId();
        $data['pengarang'] = $this->Buku_model->getPengarang();
        $data['penerbit']  = $this->Buku_model->getPenerbit();
        $data['rak']       = $this->Buku_model->getRak();
        $data['kategori']  = $this->Buku_model->getKategori();
        $this->load->view('panel/templates/menu');
        $this->load->view('panel/buku/tambah', $data);
        $this->load->view('panel/templates/footer');
    }

    public function simpan()
    {
        $config['upload_path']   = './assets/img/buku';
        $config['allowed_types'] = 'jpg|png';
        $config['max-size']      = '2048';

        $this->load->library('upload', $config);
        if(!$this->upload->do_upload('gambar_buku')){
            $this->session->set_flashdata('gagal', 'file yang diupload harus berupa JPG atau PNG dengan maksimal kapsitasas 2mb');
            redirect('panel/Buku/tambah');
        }else{
            $upload_data = $this->upload->data();
            $data = array(
                'id_buku'      => $this->input->post('id_buku'),
                'judul_buku'   => $this->input->post('judul_buku'),
                'stok_buku'    => $this->input->post('stok_buku'),
                'tahun_buku'   => $this->input->post('tahun_buku'),
                'id_pengarang' => $this->input->post('id_pengarang'),
                'id_penerbit'  => $this->input->post('id_penerbit'),
                'id_rak'       => $this->input->post('id_rak'),
                'id_kategori'  => $this->input->post('id_kategori'),
                'gambar_buku'  => $upload_data['file_name']
            );
            $simpan = $this->db->insert('buku', $data);
            if($simpan = true){
                $this->session->set_flashdata('sukses', 'Data berhasil disimpan');
                redirect('panel/Buku/tambah');
            }
        }
    }

    public function edit($id_buku)
    {
        $data['pengarang'] = $this->Buku_model->getPengarang();
        $data['penerbit']  = $this->Buku_model->getPenerbit();
        $data['rak']       = $this->Buku_model->getRak();
        $data['kategori']  = $this->Buku_model->getKategori();
        $data['buku']      = $this->Buku_model->edit($id_buku);
        $this->load->view('panel/templates/menu');
        $this->load->view('panel/buku/edit', $data);
        $this->load->view('panel/templates/footer');
    }

    public function update()
    {
        $id_buku = $this->input->post('id_buku');
        $config['upload_path']   = './assets/img/buku';
        $config['allowed_types'] = 'jpg|png';
        $config['max-size']      = '2048';
        $this->load->library('upload', $config);

        $data = array(
            'id_buku'      => $this->input->post('id_buku'),
            'judul_buku'   => $this->input->post('judul_buku'),
            'stok_buku'    => $this->input->post('stok_buku'),
            'tahun_buku'   => $this->input->post('tahun_buku'),
            'id_pengarang' => $this->input->post('id_pengarang'),
            'id_penerbit'  => $this->input->post('id_penerbit'),
            'id_rak'       => $this->input->post('id_rak'),
            'id_kategori'  => $this->input->post('id_kategori')
        );

        if(!empty($_FILES['gambar_buku']['name'])){
            if(!$this->upload->do_upload('gambar_buku')){
                $this->session->set_flashdata('gagal', 'file yang diupload harus berupa JPG atau PNG dengan maksimal kapsitasas 2mb');
                redirect('panel/Buku/edit', $id_buku);
            }else{
                $upload_data = $this->upload->data();
                $data['gambar_buku'] = $upload_data['file_name'];

                $foto_lama = $this->db->get_where('buku', array('id_buku' => $id_buku))->row_array();
                if(!empty($foto_lama['gambar_buku'])){
                    unlink('assets/img/buku/'.$foto_lama['gambar_buku']);
                }
            }
        }

        $update = $this->Buku_model->update($id_buku, $data);
        if($update = true){
            $this->session->set_flashdata('sukses', 'Data berhasil diupdate');
            redirect('panel/Buku');
        }
    }


    // public function delete($id_anggota)
    // {
    //     $foto_lama = $this->db->get_where('anggota', array('id_anggota' => $id_anggota))->row_array();
    //     $delete = $this->Anggota_model->delete($id_anggota);
    //     if($delete = true){
    //         $this->session->set_flashdata('sukses', 'Data berhasil didelete');
    //         unlink('assets/img/anggota/'.$foto_lama['foto_anggota']);
    //         redirect('panel/Anggota');
    //     }
    // }

}