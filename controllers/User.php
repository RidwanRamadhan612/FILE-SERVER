<?php
defined('BASEPATH') or exit('No direct script access allowed');

class USer extends CI_Controller
{
    public function index()
    {
        $this->load->view('templates/header');
        $this->load->view('templates/topbar');
        $this->load->view('templates/sidebar');
        $this->load->view('user/dashboard');
        $this->load->view('templates/footer');
    }
}