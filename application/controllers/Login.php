<?php

class Login Extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Login_model');
    }

    public function index()
    {
        $this->load->view('form_login');
    }

    public function prosesLogin()
    {
        $level = $this->input->post('level');
        if ($level == "Petugas") {
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            $this->Login_model->prosesLoginPetugas($username, $password);
        }
    }

}