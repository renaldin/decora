<!-- judul -->
<section class="content-header">
    <h1>
        <a href="<?= base_url('infografis') ?>" class="btn btn-success"><strong><?= $title; ?></strong></a>
        <?php if (session()->get('level') == 'Admin') { ?>
            <a href="<?= base_url('infografis/kelola') ?>" class="btn btn-success"><strong>Kelola <?= $title; ?></strong></a>
        <?php } ?>
    </h1>
    <br>
</section>

<div class="row margin-bottom">
    <div class="col-sm-8" style="height: 460px; margin-bottom: 5px;">
        <img class="img-responsive" src="<?= base_url('foto_galeri/fase-1-7.jpeg') ?>" style="height: 100%; width: 100%;" alt="Galeri Big">
    </div>
    <!-- /.col -->
    <div class="col-sm-4" style="height: 450px;">
        <div class="row">
            <div class="col-sm-12" style="height: 225px;">
                <img class="img-responsive" src="<?= base_url('foto_galeri/fase-1-8.jpeg') ?>" style="height: 100%; width: 100%;" alt="Galeri Small">
                <br>
                <img class="img-responsive" src="<?= base_url('foto_galeri/fase-1-9.jpeg') ?>" style="height: 100%; width: 100%;" alt="Galeri Small">
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.col -->
</div>
<!-- /.row -->
<br>
<div class="row">
    <?php foreach ($galeri as $row) { ?>
        <div class="col-lg-4 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-green">
                <div class="inner">
                    <img src="<?= base_url('foto_galeri/' . $row['galeri']) ?>" style="width: 100%; height: 100%;" alt="">
                </div>
            </div>
        </div>
        <!-- ./col -->
    <?php } ?>
</div>
<!-- /.row -->