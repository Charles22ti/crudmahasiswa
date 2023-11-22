<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Tugasform extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->helper('form');
    }

    public function index()
    {
    $this->form_validation->set_rules('nama_depan', 'Nama Depan', 'required', ['required' => 'Nama Depan Wajib Diisi']);
    $this->form_validation->set_rules('nama_belakang', 'Nama Belakang', 'required', ['required' => 'Nama Belakang Wajib Diisi']);
    $this->form_validation->set_rules('perguruantinggi', 'Perguruan Tinggi', 'required', ['required' => 'Perguruan Tinggi Diisi']);
    $this->form_validation->set_rules('email', 'Email', 'required|valid_email', ['required' => 'Email Wajib Diisi']);
    $this->form_validation->set_rules('kode_area', 'Kode Area', 'required', ['required' => 'Kode Area Wajib Diisi']);
    $this->form_validation->set_rules('no_telepon', 'Nomor Telepon', 'required|numeric', ['required' => 'No Telepon Wajib Diisi']);
    $this->form_validation->set_rules('subject', 'Jenis Kelamin', 'required', ['required' => 'Jenis Kelamin Wajib Diisi']);

    if ($this->form_validation->run() === FALSE) {
        $this->load->view("tugasform/Tugasform");
    } else {
        $data['success_message'] = 'Pendaftaran berhasil!';
        $this->load->view("tugasform/Tugasform", $data);
    }
    }
}