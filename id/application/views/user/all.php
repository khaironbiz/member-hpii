<div class="content-wrap">
    <div class="main">
        <div class="container-fluid">
            <h3 class="h5 mb-3 text-gray-800"><?= $title; ?></h3>
            <!-- /# row -->
            <section id="main-content">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="bootstrap-data-table-panel">
                                <div class="table-responsive">
                                    <table id="bootstrap-data-table-export" class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama</th>
                                                <th>NIRA</th>
                                                <th>DPW</th>
                                                <th>Email</th>
                                                <th>HP</th>
                                                <th>Pendidikan</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $i = 1; ?>
                                            <?php foreach ($anggota as $sm) : ?>
                                                <tr>
                                                    <th scope="row"><?= $i; ?></th>
                                                    <td><?= $sm['name']; ?></td>
                                                    <td><?= $sm['nira']; ?></td>
                                                    <td><?= $sm['nama_prov']; ?></td>
                                                    <td><?= $sm['email']; ?></td>
                                                    <td><?= $sm['hp']; ?></td>
                                                    <td><?= $sm['pendidikan']; ?></td>

                                                </tr>
                                                <?php $i++; ?>
                                            <?php endforeach; ?>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- /# card -->
                    </div>
                    <!-- /# column -->
                </div>
                <!-- /# row -->


            </section>
        </div>
    </div>
</div>
<script src="<?= base_url(); ?>template/focus/js/scripts.js"></script>
<script src="<?= base_url(); ?>template/focus/js/lib/data-table/datatables.min.js"></script>
<script src="<?= base_url(); ?>template/focus/js/lib/data-table/buttons.dataTables.min.js"></script>
<script src="<?= base_url(); ?>template/focus/js/lib/data-table/dataTables.buttons.min.js"></script>
<script src="<?= base_url(); ?>template/focus/js/lib/data-table/buttons.flash.min.js"></script>
<script src="<?= base_url(); ?>template/focus/js/lib/data-table/jszip.min.js"></script>
<script src="<?= base_url(); ?>template/focus/js/lib/data-table/pdfmake.min.js"></script>
<script src="<?= base_url(); ?>template/focus/js/lib/data-table/vfs_fonts.js"></script>
<script src="<?= base_url(); ?>template/focus/js/lib/data-table/buttons.html5.min.js"></script>
<script src="<?= base_url(); ?>template/focus/js/lib/data-table/buttons.print.min.js"></script>
<script src="<?= base_url(); ?>template/focus/js/lib/data-table/datatables-init.js"></script>