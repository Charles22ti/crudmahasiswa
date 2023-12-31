<div class="main">
    <section class="sign-in">
        <div class="container">
            <div class="signin-content">
                <div class="signin-image">
                    <figure><img src="<?= base_url('assets/assetbaru/') ?>images/signin-image.jpg" alt="sing up image">
                    </figure>
                    <a href="<?= base_url(); ?>Auth/registrasi" class="signup-image-link">Buat akun</a>
                </div>

                <div class="signin-form">
                    <h2 class="form-title">Login</h2>
                    <?= $this->session->flashdata('message'); ?>
                    <form class="user" method="POST" class="register-form" id="login-form" action="<?= base_url('Auth'); ?>">
                        <div class="form-group">
                            <label for="email"><i class="zmdi zmdi-account material-icons-name"></i></label>
                            <input type="text" name="email" value="<?=set_value('email'); ?>" id="email" placeholder="Email" />
                            <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="password"><i class="zmdi zmdi-lock"></i></label>
                            <input type="password" name="password" value="<?= set_value('password'); ?>" id="password" placeholder="Password" />
                            <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <input type="checkbox" name="remember-me" id="remember-me" class="agree-term" />
                            <label for="remember-me" class="label-agree-term"><span><span></span></span>Ingat
                                saya</label>
                        </div>
                        <div class="form-group form-button">
                            <input type="submit" name="signin" id="signin" class="form-submit" value="Masuk" />
                        </div>
                    </form>
                    <div class="social-login">
                        <span class="social-label">Atau login dengan</span>
                        <ul class="socials">
                            <li><a href="#"><i class="display-flex-center zmdi zmdi-facebook"></i></a></li>
                            <li><a href="#"><i class="display-flex-center zmdi zmdi-twitter"></i></a></li>
                            <li><a href="#"><i class="display-flex-center zmdi zmdi-google"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>