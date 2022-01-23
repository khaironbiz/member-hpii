<div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5 col-lg-8 mx-auto">
        <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
                <div class="col-lg">
                    <div class="p-3">
                        <div class="text-center">
                            <h4 class="h4 text-gray-900"><?= $title ?></h4>
                            <h5 class="h5 text-gray-900 mb-4">Himpunan Perawat Informatika Indonesia</h5>
                        </div>
                        <form class="user" method="post" action="<?= base_url('auth/registration'); ?>">
                            <div class="form-group">
                                <input type="text" class="form-control" id="name" name="name" placeholder="Nama Asli" value="<?= set_value('name'); ?>">
                                <?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="text" class="form-control" id="gelar_depan" name="gelar_depan" placeholder="Gelar Depan" value="<?= set_value('gelar_depan'); ?>">

                                </div>
                                <div class=" col-sm-6">
                                    <input type="text" class="form-control" id="gelar_belakang" name="gelar_belakang" placeholder="Gelar Belakang" value="<?= set_value('gelar_belakang'); ?>">
                                    <?= form_error('gelar_belakang', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" id="nik" name="nik" placeholder="Nomor KTP" value="<?= set_value('nik'); ?>">
                                    <?= form_error('nik', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                                <div class="col-sm-6 mb-3 mb-sm-0">

                                    <select name='sex' class='form-control' id="sex" name="sex" placeholder="Jenis Kelamin" value="<?= set_value('sex'); ?>">
                                        <option value="" selected >---Jenis Kelamin---</option>
                                        <option value="Laki-laki" <?php echo  set_select('sex', 'Laki-laki'); ?>>Laki-laki</option>
                                        <option value="Perempuan" <?php echo  set_select('sex', 'Perempuan', TRUE); ?>>Perempuan</option>
                                    </select>
                                    <?= form_error('sex', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">

                                    <select name='pendidikan' class='form-control' id="pendidikan" name="pendidikan" placeholder="Pendidikan Terahir">
                                        <option value="" selected>Pendidikan Terahir</option>
                                        <option value="D3" <?php echo  set_select('pendidikan', 'D3', TRUE); ?>>D3 Keperawatan</option>
                                        <option value="S1" <?php echo  set_select('pendidikan', 'S1', TRUE); ?>>S1 Keperawatan</option>
                                        <option value="Ners" <?php echo  set_select('pendidikan', 'Ners', TRUE); ?>>Ners</option>
                                        <option value="S2" <?php echo  set_select('pendidikan', 'S2', TRUE); ?>>S2 Keperawatan</option>
                                        <option value="Ners Spesialis" <?php echo  set_select('pendidikan', 'Ners Spesialis', TRUE); ?>>Ners Spesialis</option>
                                        <option value="S3" <?php echo  set_select('pendidikan', 'S3', TRUE); ?>>S3 Keperawatan</option>
                                    </select>
                                    <?= form_error('sex', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" id="universitas" name="universitas" placeholder="Nama Perguruan Tinggi" value="<?= set_value('universitas'); ?>">
                                    <?= form_error('universitas', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="text" class="form-control" id="nira" name="nira" placeholder="NIRA PPNI" value="<?= set_value('nira'); ?>">
                                    <?= form_error('nira', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                                <div class="col-sm-6">

                                    <select name='dpw' class='form-control' id="dpw" name="dpw" placeholder="DPW PPNI">
                                        <option value="" selected>---Pilih DPW PPNI----</option>
                                        <?php foreach ($desa as $m) : ?>
                                            <option value="<?= $m['lokasi_propinsi']; ?>" <?php echo  set_select('dpw', $m['lokasi_propinsi'], TRUE); ?>><?= $m['lokasi_nama']; ?></option>
                                        <?php endforeach; ?>


                                    </select>
                                    <?= form_error('dpw', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="email" name="email" placeholder="Email Address" value="<?= set_value('email'); ?>">
                                <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="password" class="form-control" id="password1" name="password1" placeholder="Password">
                                    <?= form_error('password1', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                                <div class="col-sm-6">
                                    <input type="password" class="form-control" id="password2" name="password2" placeholder="Repeat Password">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary btn-user btn-block">
                                Register Account
                            </button>
                        </form>
                        <hr>
                        <div class="text-center">
                            <a class="small" href="<?= base_url('auth/forgotpassword'); ?>">Lupa Password?</a>
                        </div>
                        <div class="text-center">
                            <a class="small" href="<?= base_url('auth'); ?>">Sudah punya account? Login!</a>
                        </div>
			<div class="text-center">
                            <a class="small" href="https://hpii.or.id">Kembali ke Website HPII</a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<script src="<?php echo base_url(); ?>template/wpu/js/jquery-2.1.1.js"></script>
<script>
    function tampilKabupaten() {
        kdprop = document.getElementById("provinsi_id").value;
        $.ajax({
            url: "<?php echo base_url(); ?>mahasiswa/pilih_kabupaten/" + kdprop + "",
            success: function(response) {
                $("#kabupaten_id").html(response);
            },
            dataType: "html"
        });
        return false;
    }

    function tampilKecamatan() {
        kdkab = document.getElementById("kabupaten_id").value;
        $.ajax({
            url: "<?php echo  base_url(); ?>mahasiswa/pilih_kecamatan/" + kdkab + "",
            success: function(response) {
                $("#kecamatan_id").html(response);
            },
            dataType: "html"
        });
        return false;
    }

    function tampilKelurahan() {
        kdkec = document.getElementById("kecamatan_id").value;
        $.ajax({
            url: "<?php echo  base_url(); ?>mahasiswa/pilih_kelurahan/" + kdkec + "",
            success: function(response) {
                $("#kelurahan_id").html(response);
            },
            dataType: "html"
        });
        return false;
    }
</script>