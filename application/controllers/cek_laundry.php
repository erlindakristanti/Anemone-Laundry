<?php

class Cek_Laundry Extends CI_Controller{

    public function index()
    {
        $this->load->view('frontend/header');
        $this->load->view('frontend/cek_laundry');
    }
}