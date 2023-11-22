<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Buku extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Buku_model');
        $this->load->model('User_model','userrole');
    }

    public function index()
    {
        $data['judul'] = "Halaman Peminjaman";
        
        $data['buku'] = $this->Buku_model->get();
        $data['user'] = $this->userrole->getBy();
        $this->load->view("layout/header");
        $this->load->view("buku/vw_buku", $data);
    }
    public function tambah()
    {
        $data['judul'] = "Halaman Tambah Peminjaman";
        $this->load->view("layout/header");
        $this->load->view("buku/vw_tambah_buku", $data);   
    }
    public function detail()
    {
        $data['judul'] = "Halaman Detail Peminjaman";
        $this->load->view("layout/header");
        $this->load->view("buku/vw_detail_buku", $data);
    }
    public function hapus($id)
    {
        $this->Buku_model->delete($id);
        redirect('Buku');
    }
    function upload()
    {
        $data = [
            'nama_buku' => $this->input->post('nama_buku'),
            'genre_buku' => $this->input->post('genre_buku'),
            'tanggal_peminjaman' => $this->input->post('tanggal_peminjaman'),
            'tanggal_pengembalian' => $this->input->post('tanggal_pengembalian'),
            'nomor_anggota' => $this->input->post('nomor_anggota'),
            'nama_peminjam' => $this->input->post('nama_peminjam'),
        ];
        $this->Buku_model->insert($data);
        redirect('Buku');
    }
    public function edit($id)
    {
        $data['judul'] = "Halaman Edit Peminjaman";
        $data['buku'] = $this->Buku_model->getById($id);
        $this->load->view("layout/header");
        $this->load->view("buku/vw_ubah_buku", $data);
        $this->load->view("layout/footer");
    }
    public function update(){
        $data = [
            'nama_buku' => $this->input->post('nama_buku'),
            'genre_buku' => $this->input->post('genre_buku'),
            'tanggal_peminjaman' => $this->input->post('tanggal_peminjaman'),
            'tanggal_pengembalian' => $this->input->post('tanggal_pengembalian'),
            'nomor_anggota' => $this->input->post('nomor_anggota'),
            'nama_peminjam' => $this->input->post('nama_peminjam'),
        ];
        $id = $this->input->post('id');
        $this->Buku_model->update(['id' => $id], $data);
        redirect('Buku');
    }
}