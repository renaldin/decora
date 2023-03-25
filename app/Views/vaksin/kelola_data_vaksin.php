<!-- judul -->
<section class="content-header">
    <h1>
        <a href="<?= base_url('vaksin') ?>" class="btn btn-success"><strong><?= $title; ?></strong></a>
    </h1>
    <br>
</section>

<div class="row">
    <div class="col-sm-12">
        <button class="btn btn-success btn-sm btn-flat" data-toggle="modal" data-target="#edit<?= $jumlah['id_vaksin']; ?>" style="margin-bottom: 8px;">Update Data</button>
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
                            <th width="50px" class="text-center"></th>
                            <tH>SASARAN</tH>
                            <td class="text-center"></td>
                        </tr>
                        <tr>
                            <th width="50px" class="text-center">1</th>
                            <td>Sasaran Remaja</td>
                            <td class="text-center"><?= $jumlah['sasaran_remaja'] ?></td>
                        </tr>
                        <tr>
                            <th width="50px" class="text-center">2</th>
                            <td>Sasaran Umum</td>
                            <td class="text-center"><?= $jumlah['sasaran_umum'] ?></td>
                        </tr>
                        <tr>
                            <th width="50px" class="text-center">3</th>
                            <td>Sasaran Nakes</td>
                            <td class="text-center"><?= $jumlah['sasaran_nakes'] ?></td>
                        </tr>
                        <tr>
                            <th width="50px" class="text-center">4</th>
                            <td>Sasaran Publik</td>
                            <td class="text-center"><?= $jumlah['sasaran_publik'] ?></td>
                        </tr>
                        <tr>
                            <th width="50px" class="text-center">5</th>
                            <td>Sasaran Lansia</td>
                            <td class="text-center"><?= $jumlah['sasaran_lansia'] ?></td>
                        </tr>
                        <tr>
                            <th width="50px" class="text-center">6</th>
                            <td>Sasaran Bumil</td>
                            <td class="text-center"><?= $jumlah['sasaran_bumil'] ?></td>
                        </tr>

                        <tr>
                            <th width="50px" class="text-center"></th>
                            <tH>VAKSINASI</tH>
                            <td class="text-center"></td>
                        </tr>
                        <tr>
                            <th width="50px" class="text-center">1</th>
                            <td>Vaksin Nakes Dosis 1</td>
                            <td class="text-center"><?= $jumlah['vaksin_nakes_dosis1'] ?></td>
                        </tr>
                        <tr>
                            <th width="50px" class="text-center">2</th>
                            <td>Vaksin Nakes Dosis 2</td>
                            <td class="text-center"><?= $jumlah['vaksin_nakes_dosis2'] ?></td>
                        </tr>
                        <tr>
                            <th width="50px" class="text-center">3</th>
                            <td>Vaksin Nakes Dosis 3</td>
                            <td class="text-center"><?= $jumlah['vaksin_nakes_dosis3'] ?></td>
                        </tr>
                        <tr>
                            <th width="50px" class="text-center">4</th>
                            <td>Vaksin Pelayan Publik Dosis 1</td>
                            <td class="text-center"><?= $jumlah['vaksin_pelayan_publik_dosis1'] ?></td>
                        </tr>
                        <tr>
                            <th width="50px" class="text-center">5</th>
                            <td>Vaksin Pelayan Publik Dosis 2</td>
                            <td class="text-center"><?= $jumlah['vaksin_pelayan_publik_dosis2'] ?></td>
                        </tr>
                        <tr>
                            <th width="50px" class="text-center">6</th>
                            <td>Vaksin Lansia Dosis 1</td>
                            <td class="text-center"><?= $jumlah['vaksin_lansia_dosis1'] ?></td>
                        </tr>
                        <tr>
                            <th width="50px" class="text-center">7</th>
                            <td>Vaksin Lansia Dosis 2</td>
                            <td class="text-center"><?= $jumlah['vaksin_lansia_dosis2'] ?></td>
                        </tr>
                        <tr>
                            <th width="50px" class="text-center">8</th>
                            <td>Vaksin Masyarakat Umum Dosis 1</td>
                            <td class="text-center"><?= $jumlah['vaksin_masyarakat_umum_dosis1'] ?></td>
                        </tr>
                        <tr>
                            <th width="50px" class="text-center">9</th>
                            <td>Vaksin Masyarakat Umum Dosis 2</td>
                            <td class="text-center"><?= $jumlah['vaksin_masyarakat_umum_dosis2'] ?></td>
                        </tr>
                        <tr>
                            <th width="50px" class="text-center">10</th>
                            <td>Vaksin Remaja Dosis 1</td>
                            <td class="text-center"><?= $jumlah['vaksin_remaja_dosis1'] ?></td>
                        </tr>
                        <tr>
                            <th width="50px" class="text-center">11</th>
                            <td>Vaksin Remaja Dosis 2</td>
                            <td class="text-center"><?= $jumlah['vaksin_remaja_dosis2'] ?></td>
                        </tr>
                        <tr>
                            <th width="50px" class="text-center">12</th>
                            <td>Vaksin Bumil Dosis 1</td>
                            <td class="text-center"><?= $jumlah['vaksin_bumil_dosis1'] ?></td>
                        </tr>
                        <tr>
                            <th width="50px" class="text-center">13</th>
                            <td>Vaksin Bumil Dosis 2</td>
                            <td class="text-center"><?= $jumlah['vaksin_bumil_dosis2'] ?></td>
                        </tr>
                        <tr>
                            <th width="50px" class="text-center">14</th>
                            <td>Vaksin Disabilitas Dosis 1</td>
                            <td class="text-center"><?= $jumlah['vaksin_disabilitas_dosis1'] ?></td>
                        </tr>
                        <tr>
                            <th width="50px" class="text-center">15</th>
                            <td>Vaksin Disabilitas Dosis 2</td>
                            <td class="text-center"><?= $jumlah['vaksin_disabilitas_dosis2'] ?></td>
                        </tr>
                        <tr>
                            <th width="50px" class="text-center">16</th>
                            <td>Vaksin Anak Dosis 1</td>
                            <td class="text-center"><?= $jumlah['vaksin_anak_dosis1'] ?></td>
                        </tr>
                        <tr>
                            <th width="50px" class="text-center">17</th>
                            <td>Vaksin Anak Dosis 2</td>
                            <td class="text-center"><?= $jumlah['vaksin_anak_dosis2'] ?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </div>
</div>

<div class="modal fade" id="edit<?= $jumlah['id_vaksin']; ?>">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Update Data Vaksin</h4>
            </div>
            <div class="modal-body">
                <?php
                echo form_open('vaksin/update');
                ?>

                <div class="form-group">
                    <label for="">SASARAN</label>
                </div>

                <div class="form-group">
                    <label for="">Sasaran Remaja</label>
                    <input type="number" class="form-control" name="sasaran_remaja" required value="<?= $jumlah['sasaran_remaja'] ?>">
                </div>
                <div class="form-group">
                    <label for="">Sasaran Umum</label>
                    <input type="number" class="form-control" name="sasaran_umum" required value="<?= $jumlah['sasaran_umum'] ?>">
                </div>
                <div class="form-group">
                    <label for="">Sasaran Nakes</label>
                    <input type="number" class="form-control" name="sasaran_nakes" required value="<?= $jumlah['sasaran_nakes'] ?>">
                </div>
                <div class="form-group">
                    <label for="">Sasaran Publik</label>
                    <input type="number" class="form-control" name="sasaran_publik" required value="<?= $jumlah['sasaran_publik'] ?>">
                </div>
                <div class="form-group">
                    <label for="">Sasaran Lansia</label>
                    <input type="number" class="form-control" name="sasaran_lansia" required value="<?= $jumlah['sasaran_lansia'] ?>">
                </div>
                <div class="form-group">
                    <label for="">Sasaran Bumil</label>
                    <input type="number" class="form-control" name="sasaran_bumil" required value="<?= $jumlah['sasaran_bumil'] ?>">
                </div>

                <div class="form-group">
                    <label for="">VAKSINASI</label>
                </div>

                <div class="form-group">
                    <label for="">Vaksin Nakes Dosis 1</label>
                    <input type="number" class="form-control" name="vaksin_nakes_dosis1" required value="<?= $jumlah['vaksin_nakes_dosis1'] ?>">
                </div>
                <div class="form-group">
                    <label for="">Vaksin Nakes Dosis 2</label>
                    <input type="number" class="form-control" name="vaksin_nakes_dosis2" required value="<?= $jumlah['vaksin_nakes_dosis2'] ?>">
                </div>
                <div class="form-group">
                    <label for="">Vaksin Nakes Dosis 3</label>
                    <input type="number" class="form-control" name="vaksin_nakes_dosis3" required value="<?= $jumlah['vaksin_nakes_dosis3'] ?>">
                </div>

                <div class="form-group">
                    <label for="">Vaksin Pelayan Publik Dosis 1</label>
                    <input type="number" class="form-control" name="vaksin_pelayan_publik_dosis1" required value="<?= $jumlah['vaksin_pelayan_publik_dosis1'] ?>">
                </div>
                <div class="form-group">
                    <label for="">Vaksin Pelayan Publik Dosis 2</label>
                    <input type="number" class="form-control" name="vaksin_pelayan_publik_dosis2" required value="<?= $jumlah['vaksin_pelayan_publik_dosis2'] ?>">
                </div>

                <div class="form-group">
                    <label for="">Vaksin Lansia Dosis 1</label>
                    <input type="number" class="form-control" name="vaksin_lansia_dosis1" required value="<?= $jumlah['vaksin_lansia_dosis1'] ?>">
                </div>
                <div class="form-group">
                    <label for="">Vaksin Lansia Dosis 2</label>
                    <input type="number" class="form-control" name="vaksin_lansia_dosis2" required value="<?= $jumlah['vaksin_lansia_dosis2'] ?>">
                </div>

                <div class="form-group">
                    <label for="">Vaksin Masyarakat Umum Dosis 1</label>
                    <input type="number" class="form-control" name="vaksin_masyarakat_umum_dosis1" required value="<?= $jumlah['vaksin_masyarakat_umum_dosis1'] ?>">
                </div>
                <div class="form-group">
                    <label for="">Vaksin Masyarakat Umum Dosis 2</label>
                    <input type="number" class="form-control" name="vaksin_masyarakat_umum_dosis2" required value="<?= $jumlah['vaksin_masyarakat_umum_dosis2'] ?>">
                </div>

                <div class="form-group">
                    <label for="">Vaksin Remaja Dosis 1</label>
                    <input type="number" class="form-control" name="vaksin_remaja_dosis1" required value="<?= $jumlah['vaksin_remaja_dosis1'] ?>">
                </div>
                <div class="form-group">
                    <label for="">Vaksin Remaja Dosis 2</label>
                    <input type="number" class="form-control" name="vaksin_remaja_dosis2" required value="<?= $jumlah['vaksin_remaja_dosis2'] ?>">
                </div>

                <div class="form-group">
                    <label for="">Vaksin Bumil Dosis 1</label>
                    <input type="number" class="form-control" name="vaksin_bumil_dosis1" required value="<?= $jumlah['vaksin_bumil_dosis1'] ?>">
                </div>
                <div class="form-group">
                    <label for="">Vaksin Bumil Dosis 2</label>
                    <input type="number" class="form-control" name="vaksin_bumil_dosis2" required value="<?= $jumlah['vaksin_bumil_dosis2'] ?>">
                </div>

                <div class="form-group">
                    <label for="">Vaksin Disabilitas Dosis 1</label>
                    <input type="number" class="form-control" name="vaksin_disabilitas_dosis1" required value="<?= $jumlah['vaksin_disabilitas_dosis1'] ?>">
                </div>
                <div class="form-group">
                    <label for="">Vaksin Disabilitas Dosis 2</label>
                    <input type="number" class="form-control" name="vaksin_disabilitas_dosis2" required value="<?= $jumlah['vaksin_disabilitas_dosis2'] ?>">
                </div>

                <div class="form-group">
                    <label for="">Vaksin Anak Dosis 1</label>
                    <input type="number" class="form-control" name="vaksin_anak_dosis1" required value="<?= $jumlah['vaksin_anak_dosis1'] ?>">
                </div>
                <div class="form-group">
                    <label for="">Vaksin Anak Dosis 2</label>
                    <input type="number" class="form-control" name="vaksin_anak_dosis2" required value="<?= $jumlah['vaksin_anak_dosis2'] ?>">
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