
    <div class="container-fluid">
        <h1 class="h3 md-4 text-gray-800">
            <?php echo $judul; ?>
        </h1>
        <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header justify-content-center">
                    Form Tambah Data Peminjaman Buku
                </div>
                <div class="card-body">
                    <form action="<?= base_url('index.php/Buku/upload'); ?>" method="POST">
                        <div class="form-group">
                            <label for="nama_buku">Nama Buku</label>
                            <input type="text" name="nama_buku" class="form-control" id="nama_buku" placeholder="Nama Buku">
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="genre_buku">Genre Buku</label>
                            <input type="text" name="genre_buku" class="form-control" id="genre_buku" placeholder="Genre Buku">
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="tanggal_peminjaman">Tanggal Peminjaman</label>
                            <input type="date" name="tanggal_peminjaman" class="form-control" id="tanggal_peminjaman" placeholder="Tanggal Peminjaman">
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="tanggal_pengembalian">Tanggal Pengembalian</label>
                            <input type="date" name="tanggal_pengembalian" class="form-control" id="tanggal_pengembalian" placeholder="Tanggal Pengembalian">
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="nomor_anggota">Nomor Anggota</label>
                            <input type="text" name="nomor_anggota" class="form-control" id="nomor_anggota" placeholder="Nomor Anggota">
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="nama_peminjam">Nama Peminjam</label>
                            <input type="text" name="nama_peminjam" class="form-control" id="nama_peminjam" placeholder="Nama Peminjam">
                        </div>
                        <br>
                        <a href="<?= base_url('index.php/Buku') ?>" class="btn btn-danger">Tutup</a>
                        <button type="submit" name="tambah" class="btn btn-primary float-right">
                            Tambah Buku
                        </button>
                        
                    </form>
                </div>
            </div>
        </div>
</div>
    </div>
</div>
</div>
<script src="<?= base_url('assets/') ?>libs/jquery/dist/jquery.min.js"></script>
<script src="<?= base_url('assets/') ?>libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="<?= base_url('assets/') ?>js/sidebarmenu.js"></script>
<script src="<?= base_url('assets/') ?>js/app.min.js"></script>
<script src="<?= base_url('assets/') ?>libs/simplebar/dist/simplebar.js"></script>
</body>

</html>