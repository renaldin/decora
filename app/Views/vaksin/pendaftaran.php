<div class="row">
    <div class="col-sm-12">
        <div class="text-center">
            <h2><b><?= $title ?></b></h2>
            <?php if (session()->get('level') == 'Admin') { ?>
                <a href="<?= base_url('vaksin/kelola') ?>" class="btn btn-success" style="margin-bottom: 5px;">Kelola Daftar Vaksin</a>
            <?php } ?>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-3">

    </div>
    <div class="col-sm-6">
        <div class="box box-success box-solid">
            <div class="box-header with-border">
                <h3 class="box-title"><?= $title; ?></h3>

                <div class="box-tools pull-right">
                    <a href="<?= base_url('vaksin'); ?>" class="btn btn-box-tool"><i class="fa fa-mail-reply"> Back</i></a>
                </div>
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

                <?php
                echo form_open_multipart('vaksin/daftar');
                ?>
                <div class="col-12">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="">NIK</label>
                            <input type="number" class="form-control" name="nik" placeholder="Masukkan NNIK">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="">Nama Lengkap</label>
                            <input type="text" class="form-control" name="nama_lengkap" placeholder="Masukkan Nama Lengkap">
                        </div>
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="form-group">
                        <label for="">Alamat</label>
                        <textarea name="alamat" id="" cols="30" rows="10" class="form-control">Masukkan Alamat</textarea>
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="form-group">
                        <label for="">Nomor Telepon</label>
                        <input type="number" class="form-control" name="telepon" placeholder="Masukkan Nomor Telepon">
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="form-group">
                        <label for="">Jenis Vaksin</label>
                        <input type="text" class="form-control" name="jenis_vaksin" placeholder="Masukkan Jenis Vaksin">
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="form-group">
                        <label for="">Dosis</label>
                        <input type="text" class="form-control" name="dosis" placeholder="Masukkan Dosis">
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="form-group">
                        <label for="">Tanggal Vaksin</label>
                        <input type="date" class="form-control" name="tanggal" placeholder="Masukkan Tanggal">
                    </div>
                </div>

            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-success btn-flat">Daftar</button>
            </div>
            <?php
            echo form_close();
            ?>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </div>
    <div class="col-md-3">

    </div>
</div>