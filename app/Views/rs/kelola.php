<div class="row">
    <div class="col-sm-12">
        <div class="text-center">
            <h2><b><?= $title ?> Covid-19</b></h2>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-12">
        <div class="box box-success box-solid">
            <div class="box-header with-border">
                <h3 class="box-title">Data <?= $title; ?></h3>

                <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-toggle="modal" data-target="#add"><i class="fa fa-plus"> Add</i></button>
                </div>
                <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body">
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
                            <th>Nama RS</th>
                            <th>Alamat</th>
                            <th width="150px" class="text-center">Opsi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1;
                        foreach ($rs as $row) { ?>
                            <tr>
                                <td><?= $no++; ?></td>
                                <td><?= $row['nama_rs']; ?></td>
                                <td><?= $row['alamat']; ?></td>
                                <td class="text-center">
                                    <button class="btn btn-success btn-sm btn-flat" data-toggle="modal" data-target="#edit<?= $row['id_rs']; ?>"><i class="fa fa-pencil"></i></button>
                                    <button class="btn btn-danger btn-sm btn-flat" data-toggle="modal" data-target="#delete<?= $row['id_rs']; ?>"><i class="fa fa-trash"></i></button>
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

<!-- Modal Add -->
<div class="modal fade" id="add">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Add Rumah Sakit</h4>
            </div>
            <div class="modal-body">
                <?php
                echo form_open('rumah_sakit/add');
                ?>

                <div class="form-group">
                    <label for="">Nama Rumah Sakit</label>
                    <input type="text" class="form-control" name="nama_rs" placeholder="Masukkan Nama Rumah Sakit" required>
                </div>
                <div class="form-group">
                    <label for="">Alamat Rumah Sakit</label>
                    <textarea name="alamat" id="" cols="30" rows="10" class="form-control" required></textarea>
                </div>
                <div class="form-group">
                    <label for="">Nomor Telepon Rumah Sakit</label>
                    <input type="number" class="form-control" name="telepon" placeholder="Masukkan Nomor Telepon Rumah Sakit" required>
                </div>
                <div class="form-group">
                    <label for="">Website Rumah Sakit</label>
                    <input type="text" class="form-control" name="website" placeholder="Masukkan Website Rumah Sakit" required>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left btn-flat" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-success btn-flat">Simpan</button>
            </div>
            <?php
            echo form_close();
            ?>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->

<?php foreach ($rs as $row) { ?>
    <!-- Modal Edit -->
    <div class="modal fade" id="edit<?= $row['id_rs']; ?>">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Edit Rumah Sakit</h4>
                </div>
                <div class="modal-body">
                    <?php
                    echo form_open('rumah_sakit/edit/' . $row['id_rs']);
                    ?>

                    <div class="form-group">
                        <label for="">Nama Rumah Sakit</label>
                        <input type="text" class="form-control" name="nama_rs" value="<?= $row['nama_rs'] ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="">Alamat Rumah Sakit</label>
                        <textarea name="alamat" id="" cols="30" rows="10" class="form-control" required><?= $row['alamat'] ?></textarea>
                    </div>
                    <div class="form-group">
                        <label for="">Nomor Telepon Rumah Sakit</label>
                        <input type="number" class="form-control" name="telepon" value="<?= $row['telepon'] ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="">Website Rumah Sakit</label>
                        <input type="text" class="form-control" name="website" value="<?= $row['website'] ?>" required>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left btn-flat" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-success btn-flat">Simpan</button>
                </div>
                <?php
                echo form_close();
                ?>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->
<?php } ?>

<?php foreach ($rs as $row) { ?>
    <!-- Modal Delete -->
    <div class="modal fade" id="delete<?= $row['id_rs']; ?>">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Delete Rumah Sakit</h4>
                </div>
                <div class="modal-body">
                    Apakah Anda Yakin Ingin Menghapus Rumah Sakit <b><?= $row['nama_rs']; ?> ?</b>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left btn-flat" data-dismiss="modal">Close</button>
                    <a href="<?= base_url('rumah_sakit/delete/' . $row['id_rs']); ?>" class="btn btn-danger btn-flat">Delete</a>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->
<?php } ?>