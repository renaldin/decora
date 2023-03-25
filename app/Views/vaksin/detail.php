<div class="row">
    <div class="col-md-2">

    </div>
    <div class="col-sm-8">
        <div class="box box-solid">
            <table class="table">
                <tr>
                    <th width="200px">NIK</th>
                    <td width="10px">:</td>
                    <td><?= $vaksin['nik'] ?></td>
                </tr>
                <tr>
                    <th>Nama Lengkap</th>
                    <td>:</td>
                    <td><?= $vaksin['nama_lengkap'] ?></td>
                </tr>
                <tr>
                    <th>Alamat</th>
                    <td>:</td>
                    <td><?= $vaksin['alamat'] ?></td>
                </tr>
                <tr>
                    <th>Nomor Telepon</th>
                    <td>:</td>
                    <td><?= $vaksin['telepon'] ?></td>
                </tr>
                <tr>
                    <th>Jenis Vaksin</th>
                    <td>:</td>
                    <td><?= $vaksin['jenis_vaksin'] ?></td>
                </tr>
                <tr>
                    <th>Dosis Vaksin</th>
                    <td>:</td>
                    <td><?= $vaksin['dosis'] ?></td>
                </tr>
                <tr>
                    <th>Tanggal Vaksin</th>
                    <td>:</td>
                    <td><?= $vaksin['tanggal'] ?></td>
                </tr>
            </table>
            <div class="modal-footer">
                <a href="<?= base_url('vaksin/kelola') ?>" type="submit" class="btn btn-success btn-flat">Kembali</a>
            </div>
        </div>
        <!-- /.box -->
    </div>
    <div class="col-md-2">

    </div>
</div>