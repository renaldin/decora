<div class="row">
    <div class="col-sm-12">
        <div class="text-center">
            <h2><b><?= $title ?> Cepat COVID-19</b><br>Kabupaten Blora</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-1"></div>
        <div class="col-sm-10 text-center">
            <h4>Deteksi Mandiri Cepat COVID-19 salah satu cara untuk membantu mempercepat tindakan apakah Anda sehat atau memiliki gejala yang memerlukan pemeriksaan dan pengujian lebih lanjut mengenai COVID-19.</h4>
        </div>
        <div class="col-sm-1"></div>
    </div>
    <br><br>
    <div class="row">
        <div class="col-sm-12 text-center">
            <h4 class="text-bold">Jawab Pertanyaan Berikut Untuk Memulai Deteksi Mandiri</h4>
        </div>
    </div>
    <br><br>
</div>

<div class="row">
    <div class="col-md-1">

    </div>
    <div class="col-sm-10">
        <div class="box box-success box-solid">
            <div class="box-header with-border">
                <h3 class="box-title">Gejala Yang Dirasakan</h3>
                <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body">

                <?php
                if (session()->getFlashdata('pesan')) {
                    echo '<div class="alert alert-danger" role="alert">';
                    echo session()->getFlashdata('pesan');
                    echo '</div>';
                }
                ?>

                <?php
                echo form_open('covid/deteksi_mandiri');
                ?>
                <table class="table">
                    <div class="form-group">
                        <tr>
                            <th width="750px">
                                <label>
                                    Saat ini saya sedang merasakan demam
                                </label>
                            </th>
                            <td>
                                <label>
                                    <input type="radio" name="demam" class="flat-red" value="Tidak">
                                    &nbsp;
                                    <span class="text-red">Tidak</span>
                                </label>
                                &nbsp;&nbsp;
                                <label>
                                    <input type="radio" name="demam" class="flat-red" value="Ya">
                                    &nbsp;
                                    <span class="text-green">Ya</span>
                                </label>
                            </td>
                        </tr>
                    </div>
                    <div class="form-group">
                        <tr>
                            <th width="750px">
                                <label>
                                    Saat ini saya sedang merasakan batuk / pilek
                                </label>
                            </th>
                            <td>
                                <label>
                                    <input type="radio" name="batuk" class="flat-red" value="Tidak">
                                    &nbsp;
                                    <span class="text-red">Tidak</span>
                                </label>
                                &nbsp;&nbsp;
                                <label>
                                    <input type="radio" name="batuk" class="flat-red" value="Ya">
                                    &nbsp;
                                    <span class="text-green">Ya</span>
                                </label>
                            </td>
                        </tr>
                    </div>
                    <div class="form-group">
                        <tr>
                            <th width="750px">
                                <label>
                                    Saat ini saya merasa kesulitan bernafas atau sesal nafas
                                </label>
                            </th>
                            <td>
                                <label>
                                    <input type="radio" name="sesak" class="flat-red" value="Tidak">
                                    &nbsp;
                                    <span class="text-red">Tidak</span>
                                </label>
                                &nbsp;&nbsp;
                                <label>
                                    <input type="radio" name="sesak" class="flat-red" value="Ya">
                                    &nbsp;
                                    <span class="text-green">Ya</span>
                                </label>
                            </td>
                        </tr>
                    </div>
                    <div class="form-group">
                        <tr>
                            <th width="750px">
                                <label>
                                    Saat ini saya sedang mengalami nyeri tenggorokan
                                </label>
                            </th>
                            <td>
                                <label>
                                    <input type="radio" name="nyeri_tenggorokan" class="flat-red" value="Tidak">
                                    &nbsp;
                                    <span class="text-red">Tidak</span>
                                </label>
                                &nbsp;&nbsp;
                                <label>
                                    <input type="radio" name="nyeri_tenggorokan" class="flat-red" value="Ya">
                                    &nbsp;
                                    <span class="text-green">Ya</span>
                                </label>
                            </td>
                        </tr>
                    </div>
                    <div class="form-group">
                        <tr>
                            <th width="750px">
                                <label>
                                    Lama penyakit lebih dari 14 hari
                                </label>
                            </th>
                            <td>
                                <label>
                                    <input type="radio" name="lama_penyakit" class="flat-red" value="Tidak">
                                    &nbsp;
                                    <span class="text-red">Tidak</span>
                                </label>
                                &nbsp;&nbsp;
                                <label>
                                    <input type="radio" name="lama_penyakit" class="flat-red" value="Ya">
                                    &nbsp;
                                    <span class="text-green">Ya</span>
                                </label>
                            </td>
                        </tr>
                    </div>

                    <div class="form-group">
                        <tr>
                            <th></th>
                            <td>
                                <button type="submit" class="btn btn-success btn-flat">Deteksi</button>
                            </td>
                        </tr>
                    </div>
                </table>
                <!-- radio -->
                <?php
                echo form_close();
                ?>
            </div>
        </div>
        <!-- /.box-body -->
    </div>
    <!-- /.box -->
</div>
<div class="col-md-1">

</div>
</div>