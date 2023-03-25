<!-- judul -->
<section class="content-header">
    <h1>
        <?= $title; ?>
    </h1>
    <br>
</section>

<div class="row">
    <div class="col-md-12">
        <?php
        if (session()->getFlashdata('pesan')) {
            echo '<div class="alert alert-success" role="alert">';
            echo session()->getFlashdata('pesan');
            echo '</div>';
        }
        ?>
        <!-- Profile Image -->
        <div class="box box-success">
            <div class="box-body box-profile">
                <?php if (session()->get('foto') == '') { ?>
                    <img src="<?= base_url('foto/default.jpg') ?>" class="profile-user-img img-responsive img-circle" alt="User Image">
                <?php } else { ?>
                    <img src="<?= base_url('foto/' . $profil['foto']) ?>" class="profile-user-img img-responsive img-circle" alt="User Image">
                <?php } ?>

                <h3 class="profile-username text-center"><?= $profil['nama_user'] ?></h3>

                <p class="text-muted text-center">
                    <?php if ($profil['role'] == 'User') {
                        echo 'Member Dacora';
                    } else {
                        echo 'Admin Dacora';
                    } ?>
                </p>
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-8">
                        <ul class="list-group list-group-unbordered">
                            <li class="list-group-item">
                                <b>Username</b> <a class="pull-right"><?= $profil['username'] ?></a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-2"></div>
                </div>
                <div class="row">
                    <div class="col-md-6" style="margin-bottom: 5px;">
                        <a href="<?= base_url('beranda') ?>" class="btn btn-primary btn-block"><b>Kembali Ke Halaman Beranda</b></a>
                    </div>
                    <div class="col-md-6" style="margin-bottom: 5px;">
                        <a href="<?= base_url('profil/edit/' . $profil['id_user']) ?>" class="btn btn-success btn-block"><b>Edit Profil</b></a>
                    </div>
                </div>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </div>
    <!-- /.col -->
</div>
<!-- /.row -->