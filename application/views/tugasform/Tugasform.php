<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Au Register Forms by Colorlib</title>

    <!-- Icons font CSS-->
    <link href="<?= base_url('assets/assettugas/') ?>vendor/mdi-font/css/material-design-iconic-font.min.css"
        rel="stylesheet" media="all">
    <link href="<?= base_url('assets/assettugas/') ?>vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet"
        media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i"
        rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="<?= base_url('assets/assettugas/') ?>vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="<?= base_url('assets/assettugas/') ?>vendor/datepicker/daterangepicker.css" rel="stylesheet"
        media="all">

    <!-- Main CSS-->
    <link href="<?= base_url('assets/assettugas/') ?>css/main.css" rel="stylesheet" media="all">
    <style>
        .error-message {
            color: red;
        }
    </style>
</head>

<body>
    <div class="page-wrapper bg-gra-03 p-t-45 p-b-50">
        <div class="wrapper wrapper--w790">
            <div class="card card-5">
                <div class="card-heading">
                    <h2 class="title">Form Melamar Magang</h2>
                </div>
                <div class="card-body">
                    <?php if (isset($success_message)): ?>
                        <p style="color: green; font-weight: bold; padding-left: 250px; padding-bottom: 50px;">
                            <?= $success_message ?>
                        </p>
                    <?php endif; ?>
                    <form method="POST">
                        <div class="form-row m-b-55">
                            <div class="name">Nama</div>
                            <div class="value">
                                <div class="row row-space">
                                    <div class="col-2">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text" name="nama_depan"
                                                placeholder="Nama Depan">
                                            <span class="error-message">
                                                <?php echo form_error('nama_depan'); ?>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text" name="nama_belakang"
                                                placeholder="Nama Belakang">
                                            <span class="error-message">
                                                <?php echo form_error('nama_belakang'); ?>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Perguruan Tinggi</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="perguruantinggi"
                                        placeholder="Perguruan Tinggi">
                                    <span class="error-message">
                                        <?php echo form_error('perguruantinggi'); ?>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Email</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="email" name="email" placeholder="Email">
                                    <span class="error-message">
                                        <?php echo form_error('email'); ?>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="form-row m-b-55">
                            <div class="name">No Telepon</div>
                            <div class="value">
                                <div class="row row-refine">
                                    <div class="col-3">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text" name="kode_area"
                                                placeholder="Kode Area">
                                            <span class="error-message">
                                                <?php echo form_error('kode_area'); ?>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-9">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text" name="no_telepon"
                                                placeholder="No Telepon">
                                            <span class="error-message">
                                                <?php echo form_error('no_telepon'); ?>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Jenis Kelamin</div>
                            <div class="value">
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="subject">
                                            <option disabled="disabled" selected="selected">Pilih Jenis Kelamin</option>
                                            <option>Laki - Laki</option>
                                            <option>Perempuan</option>
                                        </select>
                                        <div class="select-dropdown"></div>
                                        <span class="error-message">
                                            <?php echo form_error('subject'); ?>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row p-t-20">
                            <label class="label label--block">Apakah kamu pernah magang ? </label>
                            <div class="p-t-15">
                                <label class="radio-container m-r-55">Ya
                                    <input type="radio" checked="checked" name="exist">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="radio-container">Tidak
                                    <input type="radio" name="exist">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                        </div>
                        <div>
                            <button class="btn btn--radius-2 btn--red" type="submit">Daftar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Jquery JS-->
    <script src="<?= base_url('assets/assettugas/') ?>vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="<?= base_url('assets/assettugas/') ?>vendor/select2/select2.min.js"></script>
    <script src="<?= base_url('assets/assettugas/') ?>vendor/datepicker/moment.min.js"></script>
    <script src="<?= base_url('assets/assettugas/') ?>vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="<?= base_url('assets/assettugas/') ?>js/global.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->