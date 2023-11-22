<?php
defined('BASEPATH') or exit('No direct script access allowed');

class HitungLatihan extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->library('latihan');
    }
    function index()
    {
        $this->latihan->hitung_total_harga('Setrika', '6', true, false);
        echo "<br/>";
    }
}