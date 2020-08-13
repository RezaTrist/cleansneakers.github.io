<?php

class Order extends CI_Controller {

    public function index() {

        $data['judul'] = 'Clean Sneakers';

        $this->load->view('templates/header', $data);
        $this->load->view('order/index');
        $this->load->view('templates/footer');
    }
}