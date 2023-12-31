<div class="container-fluid">
    <h1 class="h3 md-4 text-gray-800">
        <?php echo $judul; ?>
    </h1>
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header justify-content-center">
                    Form Ubah Data Mahasiswa
                </div>
                <div class="card-body">
                    <form action="" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="id" value="<?= $prodi['id']; ?>">
                        <div class="form-group">
                            <label for="nama">Nama Prodi</label>
                            <input type="text" name="nama" value="<?= $prodi['nama']; ?>" class="form-control"
                                id="nama_prodi" placeholder="Nama Prodi">
                            <?= form_error('nama', '<small class="text-danger p1-3">', '</small>'); ?>
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="ruangan">Ruangan</label>
                            <input type="text" name="ruangan" value="<?= $prodi['ruangan']; ?>" class="form-control"
                                id="ruangan" placeholder="Ruangan">
                            <?= form_error('ruangan', '<small class="text-danger p1-3">', '</small>'); ?>
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="jurusan">Jurusan</label>
                            <input value="<?= $prodi['jurusan']; ?>" name="jurusan" type="text" class="form-control" id="jurusan" placeholder="jurusan">
                            <?= form_error('jurusan', '<small class="text-danger p1-3">', '</small>'); ?>
                        </div>
                        <br>
                        <div class="form-group">
                                <label for="ruangan">Akreditasi</label>
                                <input type="text" name="akreditasi" value="<?= $prodi['akreditasi']; ?>" class="form-control" id="ruangan" placeholder="Akreditasi">
                                <?= form_error('akreditasi', '<small class="text-danger p1-3">', '</small>'); ?>
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="ruangan">Nama Kaprodi</label>
                                <input type="text" name="nama_kaprodi" value="<?= $prodi['nama_kaprodi']; ?>" class="form-control" id="ruangan" placeholder="Nama Kaprodi">
                                <?= form_error('nama_kaprodi', '<small class="text-danger p1-3">', '</small>'); ?>
                            </div>
                            <br>
                        <div class="form-group">
                            <label for="tahun_berdiri">Tahun Berdiri</label>
                            <input type="text" name="tahun_berdiri" value="<?= $prodi['tahun_berdiri']; ?>"
                                class="form-control" id="tahun_berdiri" placeholder="Tahun Berdiri">
                            <?= form_error('tahun_berdiri', '<small class="text-danger p1-3">', '</small>'); ?>
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="output_lulusan">Output Lulusan</label>
                            <input type="text" name="output_lulusan" value="<?= $prodi['output_lulusan']; ?>"
                                class="form-control" id="output_lulusan" placeholder="Output Lulusan">
                            <?= form_error('output_lulusan', '<small class="text-danger p1-3">', '</small>'); ?>
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="gambar">Gambar</label>
                            <img src="<?= base_url('assets/assetbaru/images/prodi/') . $prodi['gambar']; ?>" style="width: 100px;" class="img-thumbnail">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" name="gambar" id="gambar">
                                <label for="gambar" class="custom-file-label">Choose File</label>
                                <?= form_error('gambar', '<small class="text-danger p1-3">', '</small>'); ?>
                            </div>
                        </div>
                        <br>
                        <a href="<?= base_url('Prodi') ?>" class="btn btn-danger">Tutup</a>
                        <button type="submit" name="tambah" class="btn btn-primary float-right">
                            Ubah Prodi
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>