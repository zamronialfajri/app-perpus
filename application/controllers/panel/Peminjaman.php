<?php

class Peminjaman Extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('panel/Peminjaman_model');
    }

    public function index()
    {
        $data['denda']      = $this->Peminjaman_model->getDenda();
        $data['peminjaman'] = $this->Peminjaman_model->getPeminjaman();
        $this->load->view('panel/templates/menu');
        $this->load->view('panel/peminjaman/view', $data);
        $this->load->view('panel/templates/footer');
    }

    public function tambah()
    {
        $data['id_peminjaman']  =  $this->Peminjaman_model->generateId();
        $data['peminjam']       =  $this->Peminjaman_model->getPeminjam();
        $data['buku']           =  $this->Peminjaman_model->getBuku();
        $this->load->view('panel/templates/menu');
        $this->load->view('panel/peminjaman/tambah', $data);
        $this->load->view('panel/templates/footer');
    }

    public function simpan()
    {
        $data = array(
            'id_peminjaman'        =>  $this->input->post('id_peminjaman'),
            'id_petugas'           =>  $this->input->post('id_petugas'),
            'id_anggota'           =>  $this->input->post('id_anggota'),
            'id_buku'              =>  $this->input->post('id_buku'),
            'tanggal_pinjam'       =>  $this->input->post('tanggal_pinjam'),
            'tanggal_kembali'      =>  $this->input->post('tanggal_kembali'),
            'tanggal_dikembalikan' =>  '',
            'denda'                =>  0,
            'status'               =>  'Dipinjam',
        );
        $simpan = $this->db->insert('peminjaman', $data);
        if($simpan = true){
            $this->session->set_flashdata('sukses', 'Data Berhasil Disimpan');
            redirect('panel/Peminjaman');
        }
    }

//    ================= START AJAX ====================

    public function cekStokBuku()
    {
        $id_buku = $this->input->post('id_buku');
        $data = $this->Peminjaman_model->cekStokBuku($id_buku);
        echo json_encode($data);
    }

}