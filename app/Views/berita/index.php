<!-- judul -->
<section class="content-header">
    <h1>
        <?= $title; ?>

        <?php if (session()->get('level') == 'Admin') { ?>
            <a href="<?= base_url('berita/kelola') ?>" class="btn btn-success"><strong>Kelola <?= $title; ?></strong></a>
        <?php } ?>
    </h1>
    <br>
</section>

<div class="row">
    <?php foreach ($berita as $row) { ?>
        <a href="<?= base_url('berita/baca/' . $row['id_berita']) ?>">
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="info-box">
                    <span class="info-box-icon bg-green"><img src="<?= base_url('gambar_berita/' . $row['gambar']) ?>" style="height: 80%; width: 90%;" alt=""></span>

                    <div class="info-box-content">
                        <span class="info-box-text text-black"><?= $row['tanggal'] ?></span>
                        <span class="info-box-number text-black"><?= $row['judul_berita'] ?></span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->
        </a>
    <?php } ?>

    <!-- fix for small devices only -->
    <div class="clearfix visible-sm-block"></div>
</div>
<!-- /.row -->