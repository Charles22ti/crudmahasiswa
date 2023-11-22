<div class="main">

    <!-- Sign up form -->
    <section class="signup">
        <div class="container">
            <div class="signup-content">
                <div class="signup-form">
                    <h2 class="form-title">Daftar</h2>
                    <form method="POST" class="register-form" id="register-form" action="<?= base_url('Auth/registrasi'); ?> ">
                        <div class="form-group">
                            <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                            <input type="text" name="nama" id="nama" value="<?= set_value('nama'); ?>" placeholder="Nama Kamu" />
                            <?= form_error('nama', '<small class="text-danger p1-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="email"><i class="zmdi zmdi-email"></i></label>
                            <input type="email" name="email" id="email" value="<?= set_value('email'); ?>" placeholder="Email Kamu" />
                            <?= form_error('email', '<small class="text-danger p1-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                            <input type="password" name="password" id="password" value="<?= set_value('password'); ?>" placeholder="Password" />
                            <?= form_error('password', '<small class="text-danger p1-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                            <label for="agree-term" class="label-agree-term"><span><span></span></span>Saya setuju dengan semua pernyataan
                             <a href="#" class="term-service">Persyaratan layanan</a></label>
                        </div>
                        <div class="form-group form-button">
                            <input type="submit" name="signup" id="signup" class="form-submit" value="Register" />
                        </div>
                    </form>
                </div>
                <div class="signup-image">
                    <figure><img src="<?= base_url('assets/assetbaru/') ?>images/signup-image.jpg" alt="sing up image">
                    </figure>
                    <a href="<?= base_url('Auth'); ?>" class="signup-image-link">Sudah mendaftar?</a>
                </div>
            </div>
        </div>
    </section>

</div>