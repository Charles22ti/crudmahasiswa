<div class="container-fluid">
    <h1 class="h3 md-4 text-gray-800">
        <?php echo $judul; ?>
    </h1>
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header justify-content-center">
                    Hasil Pendaftaran
                </div>
                <div class="card-body">
                    <h1 class="card-title">Formulir Pendaftaran</h1>
                    <div class="row">
                        <div class="col-md-4">Nama</div>
                        <div class="col-md-2">:</div>
                        <div class="col-md-6"><?php echo $this->session->userdata('nama'); ?></div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">NISN</div>
                        <div class="col-md-2">:</div>
                        <div class="col-md-6"><?php echo $this->session->userdata('nisn'); ?></div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">NIK</div>
                        <div class="col-md-2">:</div>
                        <div class="col-md-6"><?php echo $this->session->userdata('nik'); ?></div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">Email</div>
                        <div class="col-md-2">:</div>
                        <div class="col-md-6"><?php echo $this->session->userdata('email'); ?></div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">No Handphone</div>
                        <div class="col-md-2">:</div>
                        <div class="col-md-6"><?php echo $this->session->userdata('no_hp'); ?></div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">No Whatsapp</div>
                        <div class="col-md-2">:</div>
                        <div class="col-md-6"><?php echo $this->session->userdata('no_wa'); ?></div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">Tempat Lahir</div>
                        <div class="col-md-2">:</div>
                        <div class="col-md-6"><?php echo $this->session->userdata('tempat_lahir'); ?></div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">Tanggal Lahir</div>
                        <div class="col-md-2">:</div>
                        <div class="col-md-6"><?php echo $this->session->userdata('tanggal_lahir'); ?></div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">Jenis Kelamin</div>
                        <div class="col-md-2">:</div>
                        <div class="col-md-6"><?php echo $this->session->userdata('jenis_kelamin'); ?></div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">Kabupaten Tinggal</div>
                        <div class="col-md-2">:</div>
                        <div class="col-md-6"><?php echo $this->session->userdata('kabupaten'); ?></div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">Kecamatan Tinggal</div>
                        <div class="col-md-2">:</div>
                        <div class="col-md-6"><?php echo $this->session->userdata('kecamatan'); ?></div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">Kabupaten Sekolah</div>
                        <div class="col-md-2">:</div>
                        <div class="col-md-6"><?php echo $this->session->userdata('kabupaten_sekolah'); ?></div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">Asal Sekolah</div>
                        <div class="col-md-2">:</div>
                        <div class="col-md-6"><?php echo $this->session->userdata('asal_sekolah'); ?></div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">Jurusan</div>
                        <div class="col-md-2">:</div>
                        <div class="col-md-6"><?php echo $this->session->userdata('jurusan'); ?></div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">Tahun Lulus</div>
                        <div class="col-md-2">:</div>
                        <div class="col-md-6"><?php echo $this->session->userdata('tahun_lulus'); ?></div>
                    </div>
                </div>
                <div class="card-footer justify-content-center">
                    <a href="<?= base_url('Kuis/Pendaftaran') ?>" class="btn btn-info">Kembali</a>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>