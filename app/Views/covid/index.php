<!-- judul -->
<section class="content-header">
    <h1>
        <?= $title; ?>
        <?php if (session()->get('level') == 'Admin') { ?>
            <a href="<?= base_url('covid/kelola') ?>" class="btn btn-success"><strong>Kelola <?= $title; ?></strong></a>
        <?php } ?>
    </h1>
    <br>
</section>

<!-- Small boxes (Stat box) -->
<div class="row">
    <div class="col-md-12">
        <span class="badge bg-green text-white">Update : Minggu, 9 Januari 2022 | Jam 13:00 WIB</span>
    </div>
    <!-- col -->
    <div class="col-lg-4 col-md-6">
        <!-- small box -->
        <div class="small-box bg-green text-center">
            <div class="small-box-header bg-red">
                <h4 class="text-bold" style="padding: 5px 0 5px 0;">KASUS CCOVID-19 <br>POSITIF</h4>
            </div>
            <div class="inner">
                <h3><?= number_format($jumlah['KASUS_COVID_19_POSITIF'], 0, ",", ".") ?></h3>

                <p>Luar Kota dirawat di Blora : <?= number_format($jumlah['KASUS_COVID_19_POSITIF_Luar_Kota_dirawat_di_Blora'], 0, ",", ".") ?></p>
            </div>
            <a class="small-box-footer text-bold">Total : <?= number_format($jumlah['KASUS_COVID_19_POSITIF'] + $jumlah['KASUS_COVID_19_POSITIF_Luar_Kota_dirawat_di_Blora'], 0, ",", ".") ?> <i class="fa fa-user-o"></i></a>
        </div>
    </div>
    <!-- ./col -->
    <!-- col -->
    <div class="col-lg-4 col-md-6">
        <!-- small box -->
        <div class="small-box bg-green text-center">
            <div class="small-box-header bg-red">
                <h4 class="text-bold" style="padding: 5px 0 5px 0;">COVID-19 POSITIF<br>DIRAWAT RS</h4>
            </div>
            <div class="inner">
                <h3><?= number_format($jumlah['COVID_19_POSITIF_DIRAWAT_RS'], 0, ",", ".") ?></h3>

                <p>Luar Blora : <?= number_format($jumlah['COVID_19_POSITIF_DIRAWAT_RS_Luar_Blora'], 0, ",", ".") ?></p>
            </div>
            <a class="small-box-footer text-bold">Total : <?= number_format($jumlah['COVID_19_POSITIF_DIRAWAT_RS'] + $jumlah['COVID_19_POSITIF_DIRAWAT_RS_Luar_Blora'], 0, ",", ".") ?> <i class="fa fa-user-o"></i></a>
        </div>
    </div>
    <!-- ./col -->
    <!-- col -->
    <div class="col-lg-4 col-md-6">
        <!-- small box -->
        <div class="small-box bg-green text-center">
            <div class="small-box-header bg-red">
                <h4 class="text-bold" style="padding: 5px 0 5px 0;">COVID-19 POSITIF<br>ISOLASI MANDIRI</h4>
            </div>
            <div class="inner">
                <h3><?= number_format($jumlah['COVID_19_POSITIF_ISOLASI_MANDIRI'], 0, ",", ".") ?></h3>

                <p>Luar Blora : <?= number_format($jumlah['COVID_19_POSITIF_ISOLASI_MANDIRI_Luar_Blora'], 0, ",", ".") ?></p>

            </div>
            <a class="small-box-footer text-bold">Total : <?= number_format($jumlah['COVID_19_POSITIF_ISOLASI_MANDIRI'] + $jumlah['COVID_19_POSITIF_ISOLASI_MANDIRI_Luar_Blora'], 0, ",", ".") ?> <i class="fa fa-user-o"></i></a>
        </div>
    </div>
    <!-- ./col -->
    <!-- col -->
    <div class="col-lg-4 col-md-6">
        <!-- small box -->
        <div class="small-box bg-green text-center">
            <div class="small-box-header" style="background-color: green;">
                <h4 class="text-bold" style="padding: 15px 0 15px 0;">SEMBUH</h4>
            </div>
            <div class="inner">
                <h3><?= number_format($jumlah['SEMBUH'], 0, ",", ".") ?></h3>

                <p>Luar Kota dirawat di Blora : <?= number_format($jumlah['SEMBUH_Luar_Kota_dirawat_di_Blora'], 0, ",", ".") ?></p>
            </div>
            <a class="small-box-footer text-bold">Total : <?= number_format($jumlah['SEMBUH'] + $jumlah['SEMBUH_Luar_Kota_dirawat_di_Blora'], 0, ",", ".") ?> <i class="fa fa-user-o"></i></a>
        </div>
    </div>
    <!-- ./col -->
    <!-- col -->
    <div class="col-lg-4 col-md-6">
        <!-- small box -->
        <div class="small-box bg-green text-center">
            <div class="small-box-header bg-black-gradient">
                <h4 class="text-bold" style="padding: 15px 0 15px 0;">MENINGGAL</h4>
            </div>
            <div class="inner">
                <h3><?= number_format($jumlah['MENINGGAL'], 0, ",", ".") ?></h3>

                <p>Luar Kota dirawat di Blora : <?= number_format($jumlah['MENINGGAL_Luar_Kota_dirawat_di_Blora'], 0, ",", ".") ?></p>
            </div>
            <a class="small-box-footer text-bold">Total : <?= number_format($jumlah['MENINGGAL'] + $jumlah['MENINGGAL_Luar_Kota_dirawat_di_Blora'], 0, ",", ".") ?> <i class="fa fa-user-o"></i></a>
        </div>
    </div>
    <!-- ./col -->
    <!-- col -->
    <div class="col-lg-4 col-md-6">
        <!-- small box -->
        <div class="small-box bg-green text-center">
            <div class="small-box-header bg-orange">
                <h4 class="text-bold" style="padding: 5px 0 5px 0;">PEMERIKSAAN <br>SWAB</h4>
            </div>
            <div class="inner">
                <h3><?= number_format($jumlah['PEMERIKSAAN_SWAB'], 0, ",", ".") ?></h3>

                <p style="opacity: 0;">.</p>
            </div>
            <a class="small-box-footer text-bold">SWAB : <?= number_format($jumlah['PEMERIKSAAN_SWAB'], 0, ",", ".") ?> <i class="fa fa-user-o"></i></a>
        </div>
    </div>
    <!-- ./col -->
</div>
<!-- /.row -->