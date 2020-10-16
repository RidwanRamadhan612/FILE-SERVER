<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
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
        $data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'Dashboard';
        $this->load->view('template_user/header');
        $this->load->view('template_user/topbar', $data);
        $this->load->view('template_user/sidebar');
        $this->load->view('user/dashboard', $data);
        $this->load->view('template_user/footer');
    }

    public function profile()
    {
        $data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'Data Profile';
        $this->load->view('template_user/header');
        $this->load->view('template_user/topbar', $data);
        $this->load->view('template_user/sidebar');
        $this->load->view('user/profile', $data);
        $this->load->view('template_user/footer');
    }

    public function editprofile()
    {
        $data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'Edit Profile';
        $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
        $this->form_validation->set_rules('nip', 'NIP', 'trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('template_user/header');
            $this->load->view('template_user/topbar', $data);
            $this->load->view('template_user/sidebar');
            $this->load->view('user/editprofile', $data);
            $this->load->view('template_user/footer');
        } else {
            $email = $this->input->post('email');
            $nama = $this->input->post('nama');
            $nip = $this->input->post('nip');
            $tempatlahir = $this->input->post('tempatlahir');
            $tgllahir = $this->input->post('tgllahir');
            $alamat = $this->input->post('alamat');
            $jk = $this->input->post('jk');
            $agama = $this->input->post('agama');
            $warganegara = $this->input->post('warganegara');
            $status = $this->input->post('status');
            $tlp = $this->input->post('tlp');
            $pend_terakhir = $this->input->post('pend_terakhir');
            $upload_image = $_FILES['image']['name'];
            if ($upload_image) {
                $config['upload_path'] = './assets/profile/';
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size']     = '3072';

                $this->load->library('upload', $config);
                if ($this->upload->do_upload('image')) {
                    $new_image = $this->upload->data('file_name');
                    $this->db->set('image', $new_image);
                } else {
                    echo $this->upload->dispay_errors();
                }
            }

            $this->db->set('nama', $nama);
            $this->db->set('nip', $nip);
            $this->db->set('tempatlahir', $tempatlahir);
            $this->db->set('tgllahir', $tgllahir);
            $this->db->set('alamat', $alamat);
            $this->db->set('jk', $jk);
            $this->db->set('agama', $agama);
            $this->db->set('warganegara', $warganegara);
            $this->db->set('status', $status);
            $this->db->set('tlp', $tlp);
            $this->db->set('pend_terakhir', $pend_terakhir);
            $this->db->where('email', $email);
            $this->db->update('tb_user');

            $this->session->set_flashdata('pesan', '<div class="alert alert-success text-center" role="alert">Profile berhasil di ubah!</div>');
            redirect('user/profile');
        }
    }

    public function pendidikan()
    {
        $data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'Riwayat Pendidikan';
        $data['riwayat'] = $this->M_pendidikan->get_pendidikan()->result();
        $this->load->view('template_user/header');
        $this->load->view('template_user/topbar', $data);
        $this->load->view('template_user/sidebar');
        $this->load->view('user/pendidikan', $data);
        $this->load->view('template_user/footer');
    }

    public function addpendidikan()
    {
        $pendidikan = $this->input->post('pendidikan');
        $lembaga = $this->input->post('lembaga');
        $lulusan = $this->input->post('lulusan');
        $jurusan = $this->input->post('jurusan');
        $id_user = $this->input->post('id_user');
        $data = array();
        foreach ($pendidikan as $key => $value) {
            $data[] = array(
                'pendidikan' => $value,
                'id_user' => $id_user[$key],
                'lembaga' => $lembaga[$key],
                'lulusan' => $lulusan[$key],
                'jurusan' => $jurusan[$key]
            );
        }
        $this->db->insert_batch('tb_pendidikan', $data);
        redirect('user/pendidikan');
    }
}