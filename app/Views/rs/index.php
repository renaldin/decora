<div class="row">
    <div class="col-sm-12">
        <div class="text-center">
            <h2><b><?= $title ?> Covid-19</b></h2>
            <?php if (session()->get('level') == 'Admin') { ?>
                <a href="<?= base_url('rumah_sakit/kelola') ?>" class="btn btn-success" style="margin-bottom: 5px;">Kelola Rumah Sakit</a>
            <?php } ?>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="container-fluid">
        <div class="row">
            <!-- col -->
            <?php foreach ($rs as $row) { ?>
                <div class="col-lg-6 col-md-6">
                    <!-- small box -->
                    <div class="small-box bg-green">
                        <div class="inner">
                            <h2 class="text-black text-bold"><?= $row['nama_rs'] ?></h2>

                            <p>Alamat : <?= $row['alamat'] ?></p>
                            <p>Telepon : <?= $row['telepon'] ?></p>
                            <p>Website : <?= $row['website'] ?></p>
                        </div>
                        <div class="icon" style="margin-top: 90px;">
                            <i class="fa fa-hospital-o"></i>
                        </div>
                    </div>
                </div>
            <?php } ?>
            <!-- ./col -->
        </div>
    </div>
</div>