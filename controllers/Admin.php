<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('email')) {
            redirect('auth');
        }
    }
    public function index()
    {
        $data['admin'] = $this->db->get_where('tb_admin', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'Dashboard';
        $this->load->view('templates/header');
        $this->load->view('templates/topbar', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('admin/dashboard', $data);
        $this->load->view('templates/footer');
    }

    public function akun()
    {
        $data['admin'] = $this->db->get_where('tb_admin', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'Setting Akun';
        $this->load->view('templates/header');
        $this->load->view('templates/topbar', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('admin/akun', $data);
        $this->load->view('templates/footer');
    }
}