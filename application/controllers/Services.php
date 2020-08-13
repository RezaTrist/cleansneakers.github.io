<?php

class Services extends CI_Controller {
    public function index() {

        $data['judul'] = 'Clean Sneakers';

        $this->load->view('templates/header', $data);
        $this->load->view('services/index');
        $this->load->view('templates/footer');
    }
}