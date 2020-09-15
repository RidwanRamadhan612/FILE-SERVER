<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index()
    {
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'required|trim');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Log In';
            $this->load->view('template/header');
            $this->load->view('auth/login', $data);
            $this->load->view('template/footer');
        } else {
            //validasi
            $this->_login();
        }
    }

    private function _login()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $admin = $this->db->get_where('tb_admin', ['email' => $email])->row_array();
        $user = $this->db->get_where('tb_user', ['email' => $email])->row_array();

        if ($user) {
            if ($user['active'] == 1) {
                if (password_verify($password, $tb_user['password'])) {
                    $data['email'] = $tb_user['email'];
                    $this->session->set_userdata($data);
                    redirect('user');
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Password anda salah!</div>');
                    redirect('auth');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Email anda belum di aktivasi!</div>');
                redirect('auth');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Email anda tidak terdaftar!</div>');
            redirect('auth');
        }

        if ($admin) {
            if (password_verify($password, $tb_admin['password'])) {
                $data['email'] = $tb_admin['email'];
                $this->session->set_userdata($data);
                redirect('admin');
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Password anda salah!</div>');
                redirect('auth');
            }
        }
    }

    public function daftar()
    {
        $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[tb_admin.email]', [
            'is_unique' => 'Email telah diguanakan!'
        ]);
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[8]|matches[password2]', [
            'matches' => 'Password tidak cocok!', 'min_length' => 'Password minimal 8 karakter!'
        ]);
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');
        if ($this->form_validation->run() == false) {
            $data['title'] = 'Daftar Akun';
            $this->load->view('template/header');
            $this->load->view('auth/daftar', $data);
            $this->load->view('template/footer');
        } else {
            $data = [
                'nama' => htmlspecialchars($this->input->post('nama', true)),
                'email' => htmlspecialchars($this->input->post('email', true)),
                'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                'image' => 'default.png',
                'active' => 1,
                'create' => NOW()
            ];

            $this->db->insert('tb_user', $data);
            $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Akun berhasil di buat!</div>');
            redirect('auth');
        }
    }
}