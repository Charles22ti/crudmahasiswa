<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kuis extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        $data['judul'] = "Halaman Pemilihan";
        $this->load->view("kuislayout/header", $data);
        $this->load->view("kuis/kuis", $data);
        $this->load->view("kuislayout/footer", $data);
    }
    public function Pendaftaran()
    {
        $data['judul'] = "Halaman Pendaftaran";
        $this->load->view("kuislayout/header", $data);
        $this->load->view("kuis/pendaftaran", $data);
        $this->load->view("kuislayout/footer", $data);

    }
    public function insert()
    {
        $data = [
            'nama' => $this->input->post('nama'),
            'nisn' => $this->input->post('nisn'),
            'nik' => $this->input->post('nik'),
            'email' => $this->input->post('email'),
            'no_hp' => $this->input->post('no_hp'),
            'no_wa' => $this->input->post('no_wa'),
            'tempat_lahir' => $this->input->post('tempat_lahir'),
            'tanggal_lahir' => $this->input->post('tanggal_lahir'),
            'jenis_kelamin' => $this->input->post('jenis_kelamin'),
            'kabupaten' => $this->input->post('kabupaten'),
            'kecamatan' => $this->input->post('kecamatan'),
            'kabupaten_sekolah' => $this->input->post('kabupaten_sekolah'),
            'asal_sekolah' => $this->input->post('asal_sekolah'),
            'jurusan' => $this->input->post('jurusan'),
            'tahun_lulus' => $this->input->post('tahun_lulus'),
        ];
        $this->session->set_userdata($data);
        redirect('Kuis/Hasil');
    }
    public function Hasil()
    {
        $data['judul'] = "Halaman Hasil Pendaftaran";
        $this->load->view("kuislayout/header", $data);
        $this->load->view("kuis/hasil", $data);
        $this->load->view("kuislayout/footer", $data);

    }
}