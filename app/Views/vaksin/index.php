<!-- judul -->
<section class="content-header">
    <h1>
        <?= $title; ?>
        <?php if (session()->get('level') == 'Admin') { ?>
            <a href="<?= base_url('vaksin/kelola_data_vaksin') ?>" class="btn btn-success"><strong>Kelola <?= $title; ?></strong></a>
        <?php } ?>
    </h1>
    <br>
</section>

<!-- Small boxes (Stat box) -->
<!-- SASARAN -->
<div class="row">
    <div class="col-xs-12">
        <span class="badge bg-green text-white">Update : Minggu, 9 Januari 2022 | Jam 13:00 WIB</span>
    </div>
    <!-- col -->

    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box text-center" style="background-color: rgba(21, 255, 0, 0.719);">
            <div class="small-box-header" style="background-color: rgba(21, 255, 0, 0.719);">
                <h4 class="text-bold text-black" style="padding: 5px 0 5px 0;">SASARAN</h4>
            </div>
            <div class="inner">
                <h3 class="text-bold text-black">VAKSIN</h3>
            </div>
        </div>
        <!-- ./col -->
    </div>
    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-green-active text-center">
            <div class="small-box-header bg-green">
                <h4 class="text-bold" style="padding: 5px 0 5px 0;">REMAJA</h4>
            </div>
            <div class="inner">
                <h3><?= number_format($jumlah['sasaran_remaja'], 0, ",", ".")  ?></h3>
            </div>
        </div>
        <!-- ./col -->
    </div>
    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-green-active text-center">
            <div class="small-box-header bg-green">
                <h4 class="text-bold" style="padding: 5px 0 5px 0;">UMUM</h4>
            </div>
            <div class="inner">
                <h3><?= number_format($jumlah['sasaran_umum'], 0, ",", ".")  ?></h3>
            </div>
        </div>
        <!-- ./col -->
    </div>
    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-green-active text-center">
            <div class="small-box-header bg-green">
                <h4 class="text-bold" style="padding: 5px 0 5px 0;">NAKES</h4>
            </div>
            <div class="inner">
                <h3><?= number_format($jumlah['sasaran_nakes'], 0, ",", ".")  ?></h3>
            </div>
        </div>
        <!-- ./col -->
    </div>
    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-green-active text-center">
            <div class="small-box-header bg-green">
                <h4 class="text-bold" style="padding: 5px 0 5px 0;">PUBLIK</h4>
            </div>
            <div class="inner">
                <h3><?= number_format($jumlah['sasaran_publik'], 0, ",", ".")  ?></h3>
            </div>
        </div>
        <!-- ./col -->
    </div>
    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-green-active text-center">
            <div class="small-box-header bg-green">
                <h4 class="text-bold" style="padding: 5px 0 5px 0;">LANSIA</h4>
            </div>
            <div class="inner">
                <h3><?= number_format($jumlah['sasaran_lansia'], 0, ",", ".")  ?></h3>
            </div>
        </div>
        <!-- ./col -->
    </div>
    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-green-active text-center">
            <div class="small-box-header bg-green">
                <h4 class="text-bold" style="padding: 5px 0 5px 0;">BUMIL</h4>
            </div>
            <div class="inner">
                <h3><?= number_format($jumlah['sasaran_bumil'], 0, ",", ".")  ?></h3>
            </div>
        </div>
        <!-- ./col -->
    </div>
    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-green-active text-center">
            <div class="small-box-header bg-green">
                <h4 class="text-bold" style="padding: 5px 0 5px 0;">TOTAL</h4>
            </div>
            <div class="inner">
                <h3><?= number_format($jumlah['sasaran_remaja'] + $jumlah['sasaran_umum'] + $jumlah['sasaran_nakes'] + $jumlah['sasaran_publik'] + $jumlah['sasaran_lansia'] + $jumlah['sasaran_bumil'], 0, ",", ".")  ?></h3>
            </div>
        </div>
        <!-- ./col -->
    </div>
    <!-- /.row -->
</div>

<div class="row" style="margin-top: 10px;">
    <div class="col-lg-4 col-xs-12">
        <!-- small box -->
        <div class="small-box bg-green-active text-center">
            <div class="row">
                <div class="col-xs-12">
                    <div class="small-box-header" style="background-color: rgba(21, 255, 0, 0.719);">
                        <h4 class="text-bold" style="padding: 5px 0 5px 0;">TENAGA KESEHATAN</h4>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="col-lg-4 col-xs-4">
                        <div class="inner">
                            <h4 class="text-center text-bold">DOSIS I</h4>
                        </div>
                    </div>
                    <div class="col-lg-4 col-xs-4">
                        <div class="inner">
                            <h4 class="text-center text-bold">DOSIS II</h4>
                        </div>
                    </div>
                    <div class="col-lg-4 col-xs-4">
                        <div class="inner">
                            <h4 class="text-center text-bold">DOSIS III</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="col-lg-4 col-xs-4">
                        <div class="inner">
                            <h4 class="text-center text-bold"><?= number_format($jumlah['vaksin_nakes_dosis1'], 0, ",", ".")  ?></h4>
                        </div>
                    </div>
                    <div class="col-lg-4 col-xs-4">
                        <div class="inner">
                            <h4 class="text-center text-bold"><?= number_format($jumlah['vaksin_nakes_dosis2'], 0, ",", ".")  ?></h4>
                        </div>
                    </div>
                    <div class="col-lg-4 col-xs-4">
                        <div class="inner">
                            <h4 class="text-center text-bold"><?= number_format($jumlah['vaksin_nakes_dosis3'], 0, ",", ".")  ?></h4>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ./col -->
        </div>
        <!-- /.row -->
    </div>
    <div class="col-lg-4 col-xs-12">
        <!-- small box -->
        <div class="small-box bg-green-active text-center">
            <div class="row">
                <div class="col-xs-12">
                    <div class="small-box-header" style="background-color: rgba(21, 255, 0, 0.719);">
                        <h4 class="text-bold" style="padding: 5px 0 5px 0;">PELAYAN PUBLIK</h4>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="col-lg-6 col-xs-6">
                        <div class="inner">
                            <h4 class="text-center text-bold">DOSIS I</h4>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xs-6">
                        <div class="inner">
                            <h4 class="text-center text-bold">DOSIS II</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="col-lg-6 col-xs-6">
                        <div class="inner">
                            <h4 class="text-center text-bold"><?= number_format($jumlah['vaksin_pelayan_publik_dosis1'], 0, ",", ".")  ?></h4>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xs-6">
                        <div class="inner">
                            <h4 class="text-center text-bold"><?= number_format($jumlah['vaksin_pelayan_publik_dosis2'], 0, ",", ".")  ?></h4>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ./col -->
        </div>
        <!-- /.row -->
    </div>
    <div class="col-lg-4 col-xs-12">
        <!-- small box -->
        <div class="small-box bg-green-active text-center">
            <div class="row">
                <div class="col-xs-12">
                    <div class="small-box-header" style="background-color: rgba(21, 255, 0, 0.719);">
                        <h4 class="text-bold" style="padding: 5px 0 5px 0;">LANSIA</h4>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="col-lg-6 col-xs-6">
                        <div class="inner">
                            <h4 class="text-center text-bold">DOSIS I</h4>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xs-6">
                        <div class="inner">
                            <h4 class="text-center text-bold">DOSIS II</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="col-lg-6 col-xs-6">
                        <div class="inner">
                            <h4 class="text-center text-bold"><?= number_format($jumlah['vaksin_lansia_dosis1'], 0, ",", ".")  ?></h4>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xs-6">
                        <div class="inner">
                            <h4 class="text-center text-bold"><?= number_format($jumlah['vaksin_lansia_dosis2'], 0, ",", ".")  ?></h4>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ./col -->
        </div>
        <!-- /.row -->
    </div>
    <div class="col-lg-4 col-xs-12">
        <!-- small box -->
        <div class="small-box bg-green-active text-center">
            <div class="row">
                <div class="col-xs-12">
                    <div class="small-box-header" style="background-color: rgba(21, 255, 0, 0.719);">
                        <h4 class="text-bold" style="padding: 5px 0 5px 0;">MASYARAKAT UMUM</h4>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="col-lg-6 col-xs-6">
                        <div class="inner">
                            <h4 class="text-center text-bold">DOSIS I</h4>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xs-6">
                        <div class="inner">
                            <h4 class="text-center text-bold">DOSIS II</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="col-lg-6 col-xs-6">
                        <div class="inner">
                            <h4 class="text-center text-bold"><?= number_format($jumlah['vaksin_masyarakat_umum_dosis1'], 0, ",", ".")  ?></h4>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xs-6">
                        <div class="inner">
                            <h4 class="text-center text-bold"><?= number_format($jumlah['vaksin_masyarakat_umum_dosis2'], 0, ",", ".")  ?></h4>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ./col -->
        </div>
        <!-- /.row -->
    </div>
    <div class="col-lg-4 col-xs-12">
        <!-- small box -->
        <div class="small-box bg-green-active text-center">
            <div class="row">
                <div class="col-xs-12">
                    <div class="small-box-header" style="background-color: rgba(21, 255, 0, 0.719);">
                        <h4 class="text-bold" style="padding: 5px 0 5px 0;">REMAJA</h4>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="col-lg-6 col-xs-6">
                        <div class="inner">
                            <h4 class="text-center text-bold">DOSIS I</h4>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xs-6">
                        <div class="inner">
                            <h4 class="text-center text-bold">DOSIS II</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="col-lg-6 col-xs-6">
                        <div class="inner">
                            <h4 class="text-center text-bold"><?= number_format($jumlah['vaksin_remaja_dosis1'], 0, ",", ".")  ?></h4>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xs-6">
                        <div class="inner">
                            <h4 class="text-center text-bold"><?= number_format($jumlah['vaksin_remaja_dosis2'], 0, ",", ".")  ?></h4>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ./col -->
        </div>
        <!-- /.row -->
    </div>
    <div class="col-lg-4 col-xs-12">
        <!-- small box -->
        <div class="small-box bg-green-active text-center">
            <div class="row">
                <div class="col-xs-12">
                    <div class="small-box-header" style="background-color: rgba(21, 255, 0, 0.719);">
                        <h4 class="text-bold" style="padding: 5px 0 5px 0;">IBU HAMIL</h4>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="col-lg-6 col-xs-6">
                        <div class="inner">
                            <h4 class="text-center text-bold">DOSIS I</h4>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xs-6">
                        <div class="inner">
                            <h4 class="text-center text-bold">DOSIS II</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="col-lg-6 col-xs-6">
                        <div class="inner">
                            <h4 class="text-center text-bold"><?= number_format($jumlah['vaksin_bumil_dosis1'], 0, ",", ".")  ?></h4>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xs-6">
                        <div class="inner">
                            <h4 class="text-center text-bold"><?= number_format($jumlah['vaksin_bumil_dosis2'], 0, ",", ".")  ?></h4>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ./col -->
        </div>
        <!-- /.row -->
    </div>
    <div class="col-lg-4 col-xs-12">
        <!-- small box -->
        <div class="small-box bg-green-active text-center">
            <div class="row">
                <div class="col-xs-12">
                    <div class="small-box-header" style="background-color: rgba(21, 255, 0, 0.719);">
                        <h4 class="text-bold" style="padding: 5px 0 5px 0;">DISABILITAS</h4>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="col-lg-6 col-xs-6">
                        <div class="inner">
                            <h4 class="text-center text-bold">DOSIS I</h4>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xs-6">
                        <div class="inner">
                            <h4 class="text-center text-bold">DOSIS II</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="col-lg-6 col-xs-6">
                        <div class="inner">
                            <h4 class="text-center text-bold"><?= number_format($jumlah['vaksin_disabilitas_dosis1'], 0, ",", ".")  ?></h4>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xs-6">
                        <div class="inner">
                            <h4 class="text-center text-bold"><?= number_format($jumlah['vaksin_disabilitas_dosis2'], 0, ",", ".")  ?></h4>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ./col -->
        </div>
        <!-- /.row -->
    </div>
    <div class="col-lg-4 col-xs-12">
        <!-- small box -->
        <div class="small-box bg-green-active text-center">
            <div class="row">
                <div class="col-xs-12">
                    <div class="small-box-header" style="background-color: rgba(21, 255, 0, 0.719);">
                        <h4 class="text-bold" style="padding: 5px 0 5px 0;">ANAK-ANAK (6-11 TH)</h4>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="col-lg-6 col-xs-6">
                        <div class="inner">
                            <h4 class="text-center text-bold">DOSIS I</h4>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xs-6">
                        <div class="inner">
                            <h4 class="text-center text-bold">DOSIS II</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="col-lg-6 col-xs-6">
                        <div class="inner">
                            <h4 class="text-center text-bold"><?= number_format($jumlah['vaksin_anak_dosis1'], 0, ",", ".")  ?></h4>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xs-6">
                        <div class="inner">
                            <h4 class="text-center text-bold"><?= number_format($jumlah['vaksin_anak_dosis2'], 0, ",", ".")  ?></h4>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ./col -->
        </div>
        <!-- /.row -->
    </div>
</div>

<div class="row" style="margin-top: 10px;">
    <div class="col-lg-2 col-xs-12"></div>
    <div class="col-lg-8 col-xs-12">
        <!-- small box -->
        <div class="small-box bg-green-active text-center">
            <div class="row">
                <div class="col-xs-12">
                    <div class="small-box-header" style="background-color: rgba(21, 255, 0, 0.719);">
                        <h4 class="text-bold" style="padding: 5px 0 5px 0;">TOTAL VAKSINASI</h4>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="col-lg-4 col-xs-4">
                        <div class="inner">
                            <h4 class="text-center text-bold">DOSIS I</h4>
                        </div>
                    </div>
                    <div class="col-lg-4 col-xs-4">
                        <div class="inner">
                            <h4 class="text-center text-bold">DOSIS II</h4>
                        </div>
                    </div>
                    <div class="col-lg-4 col-xs-4">
                        <div class="inner">
                            <h4 class="text-center text-bold">DOSIS III (NAKES)</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="col-lg-4 col-xs-4">
                        <div class="inner">
                            <h4 class="text-center text-bold"><?= number_format($jumlah['vaksin_nakes_dosis1'] + $jumlah['vaksin_pelayan_publik_dosis1'] + $jumlah['vaksin_lansia_dosis1'] + $jumlah['vaksin_masyarakat_umum_dosis1'] + $jumlah['vaksin_remaja_dosis1'] + $jumlah['vaksin_bumil_dosis1'] + $jumlah['vaksin_disabilitas_dosis1'] + $jumlah['vaksin_anak_dosis1'], 0, ",", ".")  ?></h4>
                        </div>
                    </div>
                    <div class="col-lg-4 col-xs-4">
                        <div class="inner">
                            <h4 class="text-center text-bold"><?= number_format($jumlah['vaksin_nakes_dosis2'] + $jumlah['vaksin_pelayan_publik_dosis2'] + $jumlah['vaksin_lansia_dosis2'] + $jumlah['vaksin_masyarakat_umum_dosis2'] + $jumlah['vaksin_remaja_dosis2'] + $jumlah['vaksin_bumil_dosis2'] + $jumlah['vaksin_disabilitas_dosis2'] + $jumlah['vaksin_anak_dosis2'], 0, ",", ".")  ?></h4>
                        </div>
                    </div>
                    <div class="col-lg-4 col-xs-4">
                        <div class="inner">
                            <h4 class="text-center text-bold"><?= number_format($jumlah['vaksin_nakes_dosis3'], 0, ",", ".")  ?></h4>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ./col -->
        </div>
        <!-- /.row -->
    </div>
    <div class="col-lg-2 col-xs-12"></div>
</div>