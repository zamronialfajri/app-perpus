<?php 

class Dashboard extends CI_Controller{

    public function index()
    {
        $this->load->view('panel/templates/menu');
        $this->load->view('panel/dashboard_view');
        $this->load->view('panel/templates/footer');
    }

}