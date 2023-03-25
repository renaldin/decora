<!-- judul -->
<section class="content-header">
    <h1>
        <a href="<?= base_url('covid') ?>" class="btn btn-success"><strong><?= $title; ?></strong></a>
    </h1>
    <br>
</section>

<div class="row">
    <div class="col-sm-12">
        <button class="btn btn-success btn-sm btn-flat" data-toggle="modal" data-target="#edit<?= $jumlah['id_covid']; ?>" style="margin-bottom: 8px;">Update Data</button>
        <div class="box box-success box-solid">
            <div class="box-header with-border">
                <h3 class="box-title"><?= $title; ?></h3>
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

                <table class="table table-bordered table-striped" id="example2">
                    <thead>
                        <tr>
                            <th width="50px" class="text-center">No</th>
                            <th>Nama Data</th>
                            <th class="text-center">Jumlah Data</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th width="50px" class="text-center">1</th>
                            <td>KASUS COVID-19 POSITIF</td>
                            <td class="text-center"><?= $jumlah['KASUS_COVID_19_POSITIF'] ?></td>
                        </tr>
                        <tr>
                            <th width="50px" class="text-center">2</th>
                            <td>KASUS COVID-19 POSITIF ( Luar Kota dirawat di Blora )</td>
                            <td class="text-center"><?= $jumlah['KASUS_COVID_19_POSITIF_Luar_Kota_dirawat_di_Blora'] ?></td>
                        </tr>
                        <tr>
                            <th width="50px" class="text-center">3</th>
                            <td>COVID-19 POSITIF DIRAWAT RS</td>
                            <td class="text-center"><?= $jumlah['COVID_19_POSITIF_DIRAWAT_RS'] ?></td>
                        </tr>
                        <tr>
                            <th width="50px" class="text-center">4</th>
                            <td>COVID-19 POSITIF DIRAWAT RS ( Luar Blora )</td>
                            <td class="text-center"><?= $jumlah['COVID_19_POSITIF_DIRAWAT_RS_Luar_Blora'] ?></td>
                        </tr>
                        <tr>
                            <th width="50px" class="text-center">5</th>
                            <td>COVID-19 POSITIF ISOLASI MANDIRI</td>
                            <td class="text-center"><?= $jumlah['COVID_19_POSITIF_ISOLASI_MANDIRI'] ?></td>
                        </tr>
                        <tr>
                            <th width="50px" class="text-center">6</th>
                            <td>COVID-19 POSITIF ISOLASI MANDIRI ( Luar Blora )</td>
                            <td class="text-center"><?= $jumlah['COVID_19_POSITIF_ISOLASI_MANDIRI_Luar_Blora'] ?></td>
                        </tr>
                        <tr>
                            <th width="50px" class="text-center">7</th>
                            <td>SEMBUH</td>
                            <td class="text-center"><?= $jumlah['SEMBUH'] ?></td>
                        </tr>
                        <tr>
                            <th width="50px" class="text-center">8</th>
                            <td>SEMBUH ( Luar Kota dirawat di Blora )</td>
                            <td class="text-center"><?= $jumlah['SEMBUH_Luar_Kota_dirawat_di_Blora'] ?></td>
                        </tr>
                        <tr>
                            <th width="50px" class="text-center">9</th>
                            <td>MENINGGAL</td>
                            <td class="text-center"><?= $jumlah['MENINGGAL'] ?></td>
                        </tr>
                        <tr>
                            <th width="50px" class="text-center">10</th>
                            <td>MENINGGAL ( Luar Kota dirawat di Blora )</td>
                            <td class="text-center"><?= $jumlah['MENINGGAL_Luar_Kota_dirawat_di_Blora'] ?></td>
                        </tr>
                        <tr>
                            <th width="50px" class="text-center">11</th>
                            <td>PEMERIKSAAN SWAB</td>
                            <td class="text-center"><?= $jumlah['PEMERIKSAAN_SWAB'] ?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </div>
</div>

<div class="modal fade" id="edit<?= $jumlah['id_covid']; ?>">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Update Data Covid</h4>
            </div>
            <div class="modal-body">
                <?php
                echo form_open('covid/update');
                ?>

                <div class="form-group">
                    <label for="">JUMLAH KASUS COVID-19 POSITIF</label>
                    <input type="number" class="form-control" name="KASUS_COVID_19_POSITIF" required value="<?= $jumlah['KASUS_COVID_19_POSITIF'] ?>">
                </div>
                <div class="form-group">
                    <label for="">JUMLAH KASUS COVID-19 POSITIF ( Luar Kota dirawat di Blora )</label>
                    <input type="number" class="form-control" name="KASUS_COVID_19_POSITIF_Luar_Kota_dirawat_di_Blora" required value="<?= $jumlah['KASUS_COVID_19_POSITIF_Luar_Kota_dirawat_di_Blora'] ?>">
                </div>
                <div class="form-group">
                    <label for="">JUMLAH COVID-19 POSITIF DIRAWAT RS</label>
                    <input type="number" class="form-control" name="COVID_19_POSITIF_DIRAWAT_RS" required value="<?= $jumlah['COVID_19_POSITIF_DIRAWAT_RS'] ?>">
                </div>
                <div class="form-group">
                    <label for="">JUMLAH COVID-19 POSITIF DIRAWAT RS ( Luar Blora )</label>
                    <input type="number" class="form-control" name="COVID_19_POSITIF_DIRAWAT_RS_Luar_Blora" required value="<?= $jumlah['COVID_19_POSITIF_DIRAWAT_RS_Luar_Blora'] ?>">
                </div>
                <div class="form-group">
                    <label for="">JUMLAH COVID-19 POSITIF ISOLASI MANDIRI</label>
                    <input type="number" class="form-control" name="COVID_19_POSITIF_ISOLASI_MANDIRI" required value="<?= $jumlah['COVID_19_POSITIF_ISOLASI_MANDIRI'] ?>">
                </div>
                <div class="form-group">
                    <label for="">JUMLAH COVID-19 POSITIF ISOLASI MANDIRI ( Luar Blora )</label>
                    <input type="number" class="form-control" name="COVID_19_POSITIF_ISOLASI_MANDIRI_Luar_Blora" required value="<?= $jumlah['COVID_19_POSITIF_ISOLASI_MANDIRI_Luar_Blora'] ?>">
                </div>
                <div class="form-group">
                    <label for="">JUMLAH SEMBUH</label>
                    <input type="number" class="form-control" name="SEMBUH" required value="<?= $jumlah['SEMBUH'] ?>">
                </div>
                <div class="form-group">
                    <label for="">JUMLAH SEMBUH ( Luar Kota dirawat di Blora )</label>
                    <input type="number" class="form-control" name="SEMBUH_Luar_Kota_dirawat_di_Blora" required value="<?= $jumlah['SEMBUH_Luar_Kota_dirawat_di_Blora'] ?>">
                </div>
                <div class="form-group">
                    <label for="">JUMLAH MENINGGAL</label>
                    <input type="number" class="form-control" name="MENINGGAL" required value="<?= $jumlah['MENINGGAL'] ?>">
                </div>
                <div class="form-group">
                    <label for="">JUMLAH MENINGGAL ( Luar Kota dirawat di Blora )</label>
                    <input type="number" class="form-control" name="MENINGGAL_Luar_Kota_dirawat_di_Blora" required value="<?= $jumlah['MENINGGAL_Luar_Kota_dirawat_di_Blora'] ?>">
                </div>
                <div class="form-group">
                    <label for="">JUMLAH PEMERIKSAAN SWAB</label>
                    <input type="number" class="form-control" name="PEMERIKSAAN_SWAB" required value="<?= $jumlah['PEMERIKSAAN_SWAB'] ?>">
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left btn-flat" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-success btn-flat">Update</button>
            </div>
            <?php
            echo form_close();
            ?>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>