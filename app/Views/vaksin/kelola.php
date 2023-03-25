<!-- judul -->
<section class="content-header">
    <h1>
        <a href="<?= base_url('vaksin/pendaftaran') ?>" class="btn btn-success"><strong><?= $title; ?></strong></a>
    </h1>
    <br>
</section>

<div class="row">
    <div class="col-sm-12">
        <div class="box box-success box-solid">
            <div class="box-header with-border">
                <h3 class="box-title">Data <?= $title; ?></h3>
                <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <?php
                $errors = session()->getFlashdata('errors');
                if (!empty($errors)) { ?>
                    <div class="alert alert-danger" role="alert">
                        <ul>
                            <?php foreach ($errors as $key => $value) { ?>
                                <li><?= esc($value); ?></li>
                            <?php } ?>
                        </ul>
                    </div>
                <?php  } ?>

                <?php
                if (session()->getFlashdata('pesan')) {
                    echo '<div class="alert alert-success" role="alert">';
                    echo session()->getFlashdata('pesan');
                    echo '</div>';
                }
                ?>

                <table class="table table-bordered table-striped" id="example1">
                    <thead>
                        <tr>
                            <th width="50px" class="text-center">No</th>
                            <th>NIK</th>
                            <th>Nama Lengkap</th>
                            <th>Jenis Vaksin</th>
                            <th width="150px" class="text-center">Opsi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1;
                        foreach ($vaksin as $row) { ?>
                            <tr>
                                <td class="text-center"><?= $no++; ?></td>
                                <td><?= $row['nik']; ?></td>
                                <td><?= $row['nama_lengkap']; ?></td>
                                <td><?= $row['jenis_vaksin']; ?></td>
                                <td class="text-center">
                                    <a href="<?= base_url('vaksin/detail/' . $row['id_daftar']) ?>" class="btn btn-info btn-sm btn-flat"><i class="fa fa-list"></i></a>
                                    <button class="btn btn-danger btn-sm btn-flat" data-toggle="modal" data-target="#delete<?= $row['id_daftar']; ?>"><i class="fa fa-trash"></i></button>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </div>
</div>


<?php foreach ($vaksin as $row) { ?>
    <!-- Modal Delete -->
    <div class="modal fade" id="delete<?= $row['id_daftar']; ?>">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Delete Data Vaksin</h4>
                </div>
                <div class="modal-body">
                    Apakah Anda Yakin Ingin Menghapus Data ?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left btn-flat" data-dismiss="modal">Close</button>
                    <a href="<?= base_url('vaksin/delete/' . $row['id_daftar']); ?>" class="btn btn-danger btn-flat">Delete</a>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->
<?php } ?>