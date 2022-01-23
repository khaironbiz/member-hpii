<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h3 class="h5 mb-3 text-gray-800"><?= $title; ?></h3>

    <div class="row">
        <div class="col-lg-8">
            <?= $this->session->flashdata('message'); ?>
        </div>
    </div>

    <div class="card mb-3 col-lg-10">
        <div class="row no-gutters">
            <div class="col-md-4">
                <img src="<?= base_url('template/wpu/img/profile/') . $user['image']; ?>" class="card-img">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <table class="table table-hover">
                        <tr>
                            <td>Nama</td>
                            <td>:
                                <?= $user['gelar_depan'] . " " . $user['name'] . ", " . $user['gelar_belakang'] ?></td>
                        </tr>
                        <tr>
                            <td>NIK</td>
                            <td>: <?= $user['nik']; ?></td>
                        </tr>
                        <tr>
                            <td>Jenis Kelamin</td>
                            <td>: <?= $user['sex']; ?></td>
                        </tr>
                        <tr>
                            <td>TTL</td>
                            <td>: <?= $user['kota_lahir'] . ", " . $user['tgl_lahir']; ?></td>
                        </tr>

                        <tr>
                            <td>Pendidikan</td>
                            <td>: <?= $user['pendidikan']; ?></td>
                        </tr>
                        <tr>
                            <td>Universitas</td>
                            <td>: <?= $user['universitas']; ?></td>
                        </tr>
                        <?php
                        if ($user['kel'] > 1 and $user['kec'] > 1 and $user['kota'] > 1 and $user['prov'] > 1) {


                        ?>
                            <tr>
                                <td>Alamat</td>
                                <td>: <?= $user['alamat'] . ", " . $kel['desaNama']; ?></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>: <?= $kec['nama_kec'] . ", " . $kota['nama_kabkot'] . ", " . $prov['nama_prov'] . ", " . $kel['kodepos']; ?></td>
                            </tr>
                        <?php
                        } else {
                            "";
                        }
                        ?>
                        <tr>
                            <td>HP</td>
                            <td>: <?= $user['hp']; ?></td>
                        </tr>

                        <tr>
                            <td>Email</td>
                            <td>: <?= $user['email']; ?></td>
                        </tr>
                        <tr>
                            <td>Tanggal Daftar</td>
                            <td>: <?= date('d F Y', $user['date_created']); ?></td>
                        </tr>
                    </table>

                </div>
            </div>
            <a class="btn btn-success mt-3" href="<?= base_url('user/edit') ?>" role="button">Edit</a>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->