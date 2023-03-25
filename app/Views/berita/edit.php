<!-- judul -->
<section class="content-header">
    <h1>
        <?= $title; ?>
    </h1>
    <br>
</section>

<div class="row">
    <div class="col-md-2">

    </div>
    <div class="col-sm-8">
        <div class="box box-success box-solid">
            <div class="box-header with-border">
                <h3 class="box-title"><?= $title; ?></h3>

                <div class="box-tools pull-right">
                    <a href="<?= base_url('berita/kelola'); ?>" class="btn btn-box-tool"><i class="fa fa-mail-reply"> Back</i></a>
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
                echo form_open_multipart('berita/update/' . $berita['id_berita']);
                ?>
                <div class="col-sm-12">
                    <div class="form-group">
                        <label for="">Judul Berita</label>
                        <input type="text" class="form-control" name="judul_berita" value="<?= $berita['judul_berita'] ?>">
                    </div>

                    <div class="form-group">
                        <label for="">Tanggal Berita</label>
                        <input type="date" class="form-control" name="tanggal" value="<?= $berita['tanggal'] ?>">
                    </div>

                    <div class="form-group">
                        <label for="">Isi Berita</label>
                        <textarea id="editor1" name="isi" rows="10" cols="80"><?= $berita['isi'] ?></textarea>
                    </div>
                </div>

                <div class="col-sm-12">
                    <div class="form-group">
                        <label for="">Gambar</label>
                        <input type="file" class="form-control" id="preview_gambar" name="gambar">
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="form-group">
                        <img src="<?= base_url('gambar_berita/' . $berita['gambar']) ?>" id="gambar_load" width="150" height="" alt="">
                    </div>
                </div>




            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-success btn-flat">Simpan</button>
            </div>
            <?php
            echo form_close();
            ?>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </div>
    <div class="col-md-2">

    </div>
</div>