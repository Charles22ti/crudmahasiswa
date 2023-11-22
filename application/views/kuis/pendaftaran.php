
    
    <div class="container-fluid">
        <h1 class="h3 md-4 text-gray-800">
            <?php echo $judul; ?>
        </h1>
        <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header justify-content-center">
                    Form Pendaftaran
                </div>
                <div class="card-body">
                    <form action="<?= base_url('Kuis/insert') ?>" method="POST">
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" name="nama"class="form-control" id="nama" placeholder="Nama">
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="nisn">NISN</label>
                            <input type="text" name="nisn"class="form-control" id="nisn" placeholder="NISN">        
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="nik">NIK</label>
                            <input type="text" name="nik"class="form-control" id="nik" placeholder="NIK">        
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="nim">Email</label>
                            <input type="email" name="email"class="form-control" id="email" placeholder="Email">        
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="no_hp">No Handphone</label>
                            <input type="text" name="no_hp" class="form-control" id="no_hp" placeholder="No Handphone">        
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="no_wa">No Whatsapp</label>
                            <input type="text" name="no_wa" class="form-control" id="no_wa" placeholder="No Whatsapp">        
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="tempat_lahir">Tempat Lahir</label>
                            <input type="text" name="tempat_lahir" class="form-control" id="tempat_lahir" placeholder="Tempat Lahir">        
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="tanggal_lahir">Tanggal Lahir</label>
                            <input type="text" name="tanggal_lahir" class="form-control" id="tanggal_lahir" placeholder="Tanggal Lahir">        
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="jenis_kelamin">Jenis Kelamin</label>
                            <select name="jenis_kelamin" id="jenis_kelamin" class="form-control">
                                <option value="">Jenis Kelamin</option>
                                <option value="Laki-Laki">Laki-Laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="kabupaten">Kabupaten Tinggal</label>
                            <input type="text" name="kabupaten" class="form-control" id="kabupaten" placeholder="Kabupaten Tinggal">        
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="kecamatan">Kecamatan Tinggal</label>
                            <input type="text" name="kecamatan" class="form-control" id="kecamatan" placeholder="Kecamatan Tinggal">        
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="kabupaten_sekolah">Kabupaten Sekolah</label>
                            <input type="text" name="kabupaten_sekolah" class="form-control" id="kabupaten_sekolah" placeholder="Kabupaten Sekolah">        
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="asal_sekolah">Asal Sekolah</label>
                            <input type="text" name="asal_sekolah" class="form-control" id="asal_sekolah" placeholder="Asal Sekolah">        
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="jurusan">Jurusan</label>
                            <input type="text" name="jurusan" class="form-control" id="jurusan" placeholder="Jurusan">        
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="tahun_lulus">Tahun Lulus</label>
                            <select name="tahun_lulus" id="tahun_lulus" class="form-control">
                                <option value="2015">2015</option>
                                <option value="2016">2016</option>
                                <option value="2017">2017</option>
                                <option value="2018">2018</option>
                                <option value="2019">2019</option>
                                <option value="2020">2020</option>
                                <option value="2021">2021</option>
                                <option value="2022">2022</option>
                                <option value="2023">2023</option>
                            </select>
                        </div>
                        <br>
                        <button type="submit" name="tambah" class="btn btn-primary float-right">
                            Simpan
                        </button>
                    </form>
                </div>
            </div>
        </div>
</div>
    </div>
</div>
</div>