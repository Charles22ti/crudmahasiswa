<?php
defined('BASEPATH') or exit('No direct script access allowed');
class KuisLogin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    function index()
    {
        $this->load->view("kuis/login");
    }
    public function cek_login()
    {
        $data = [
            'username' => $this->input->post('username'),
            'password' => $this->input->post('password')
        ];
        $this->session->set_userdata($data);
        if ($data['username'] == "charles" && $data['password'] == "tes123") {
            $this->session->set_userdata($data);
            redirect('Kuis');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Email Salah! </div>');
            redirect('KuisLogin');
        }
    }
}