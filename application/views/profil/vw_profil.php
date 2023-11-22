<div class="container-fluid">
    <h1 class="h3 md-4 text-gray-800">
        <?php echo $judul; ?>
    </h1>
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header justify-content-center">
                    Detail Profil
                </div>
                <div class="col_md-4">
                    <img src="<?= base_url('assets/assetbaru/images/profile/') . $user['gambar']; ?>" class="card-img">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h2 class="card-title"><?= $user['nama']; ?></h2>
                        <h6 class="card-subtitle mb-2 text-muted"><?= $user['email']; ?></h6>
                        <p class="card-text text-muted">Anggota Sejak <?= date('d F Y', $user['date_created']); ?></p>
                    </div>
                </div>
                <div class="card-footer justify-content-center">
                    <a href="<?= base_url('Auth/') ?>" class="btn btn-danger">Tutup</a>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>