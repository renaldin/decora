<div class="row">
    <div class="col-md-3">

    </div>
    <div class="col-sm-6">
        <div class="box box-success box-solid">
            <div class="box-header with-border">
                <h3 class="box-title"><?= $title; ?></h3>

                <div class="box-tools pull-right">
                    <a href="<?= base_url('profil'); ?>" class="btn btn-box-tool"><i class="fa fa-mail-reply"> Back</i></a>
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
                echo form_open_multipart('profil/update/' . $profil['id_user']);
                ?>
                <div class="col-sm-12">
                    <div class="form-group">
                        <label for="">Nama Lengkap</label>
                        <input type="text" class="form-control" name="nama_user" value="<?= $profil['nama_user'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="">Username</label>
                        <input type="text" class="form-control" name="username" value="<?= $profil['username'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="">Password</label>
                        <input type="password" class="form-control" name="password" value="<?= $profil['password'] ?>">
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="">Foto</label>
                        <input type="file" class="form-control" id="preview_gambar" name="foto">
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="form-group">
                        <?php if (session()->get('foto') == '') { ?>
                            <img src="<?= base_url('foto/default.jpg') ?>" id="gambar_load" class="profile-user-img" alt="">
                        <?php } else { ?>
                            <img src="<?= base_url('foto/' . $profil['foto']) ?>" id="gambar_load" class="profile-user-img" alt="">
                        <?php } ?>
                    </div>
                </div>




            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-success btn-flat">Edit</button>
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