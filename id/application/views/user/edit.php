<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>


    <div class="row">
        <div class="col-lg-8">

            <?= form_open_multipart('user/edit'); ?>
            <div class="form-group row">
                <label for="email" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="email" name="email" value="<?= $user['email']; ?>" readonly>
                </div>
            </div>
            <div class="form-group row">
                <label for="name" class="col-sm-2 col-form-label">Nama</label>
                <div class="col-sm-2">
                    <input type="text" class="form-control" id="gelar_depan" name="gelar_depan" value="<?= $user['gelar_depan']; ?>" placeholder="Gelar depan">
                    <?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="col-sm-5">
                    <input type="text" class="form-control" id="name" name="name" value="<?= $user['name']; ?>" placeholder="Nama asli">
                    <?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="col-sm-3">
                    <input type="text" class="form-control" id="gelar_belakang" name="gelar_belakang" value="<?= $user['gelar_belakang']; ?>" placeholder="Gelar belakang">
                    <?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>

            </div>

            <div class="form-group row">
                <label for="name" class="col-sm-2 col-form-label">Alamat</label>
                <div class="col-sm-3">
                    <?php
                    $style_provinsi = 'class="form-control input-sm" id="provinsi_id"  onChange="tampilKabupaten()"';
                    echo form_dropdown('provinsi_id', $provinsi, '', $style_provinsi);
                    ?>
                    <?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="col-sm-3">
                    <?php
                    $style_kabupaten = 'class="form-control input-sm" id="kabupaten_id" onChange="tampilKecamatan()"';
                    echo form_dropdown("kabupaten_id", array('0' => '- Pilih Kabupaten -'), '', $style_kabupaten);
                    ?>
                </div>

                <div class="col-sm-4">
                    <?php
                    $style_kecamatan = 'class="form-control input-sm" id="kecamatan_id" onChange="tampilKelurahan()"';
                    echo form_dropdown("kecamatan_id", array('0' => '- Pilih Kecamatan -'), '', $style_kecamatan);
                    ?>
                    <?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>

            <div class="form-group row">
                <label for="name" class="col-sm-2 col-form-label"></label>
                <div class="col-sm-3">
                    <?php
                    $style_kelurahan = 'class="form-control input-sm" id="kelurahan_id"';
                    echo form_dropdown("kelurahan_id", array('0' => '- Pilih Kelurahan -'), '', $style_kelurahan);
                    ?>
                    <?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="col-sm-7">
                    <input type="text" class="form-control" id="alamat" name="alamat" value="<?= $user['alamat']; ?>" placeholder="Jalan, No ruamah, RT/RW">
                    <?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>

            </div>

            <div class="form-group row">
                <label for="name" class="col-sm-2 col-form-label">Telp/HP</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" id="telp" name="telp" value="<?= $user['telp']; ?>" placeholder="Telp PSTN">
                    <?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="col-sm-4">
                    <input type="text" class="form-control" id="hp" name="hp" value="<?= $user['hp']; ?>" placeholder="HP">
                    <?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>
            <div class="form-group row">
                <label for="name" class="col-sm-2 col-form-label">TTL</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" id="kota_lahir" name="kota_lahir" value="<?= $user['kota_lahir']; ?>" placeholder="Tempat lahir">
                    <?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="col-sm-4">
                    <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir" value="<?= $user['tgl_lahir']; ?>">
                    <?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-2">Foto</div>
                <div class="col-sm-8">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="image" name="image">
                        <label class="custom-file-label" for="image">Choose file</label>
                    </div>
                </div>

            </div>

            <div class="form-group row justify-content-end">
                <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </div>


            </form>


        </div>
        <div class="col-lg-4">
            <img src="<?= base_url('template/wpu/img/profile/') . $user['image']; ?>" class="img-thumbnail">
        </div>
    </div>



</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<script src="<?php echo base_url(); ?>template/wpu/js/jquery-2.1.1.js"></script>
<script>
    function tampilKabupaten() {
        kdprop = document.getElementById("provinsi_id").value;
        $.ajax({
            url: "<?php echo base_url(); ?>user/pilih_kabupaten/" + kdprop + "",
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
            url: "<?php echo  base_url(); ?>user/pilih_kecamatan/" + kdkab + "",
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
            url: "<?php echo  base_url(); ?>user/pilih_kelurahan/" + kdkec + "",
            success: function(response) {
                $("#kelurahan_id").html(response);
            },
            dataType: "html"
        });
        return false;
    }
</script>