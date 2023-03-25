<div class="register-box">
  <div class="register-logo">
    <a href="../../index2.html"><b>Daftar</b> DACORA</a>
  </div>

  <div class="register-box-body">
    <p class="login-box-msg">Silahkan Daftar</p>

    <?php
    $errors = session()->getFlashdata('errors');
    if (!empty($errors)) { ?>
      <div class="alert alert-danger" role="alert">
        <ul>
          <?php foreach ($errors as $key => $value) { ?>
            <li><?= esc($value); ?></li>
          <?php } ?>
        </ul>
      </div>
    <?php  } ?>


    <?= form_open('Auth/cek_register'); ?>
    <div class="form-group has-feedback">
      <input type="text" class="form-control" placeholder="Nama Lengkap" name="nama_user">
      <span class="fa fa-user form-control-feedback"></span>
    </div>
    <div class="form-group has-feedback">
      <input type="text" class="form-control" placeholder="Username" name="username">
      <span class="fa fa-user-plus form-control-feedback"></span>
    </div>
    <div class="form-group has-feedback">
      <input type="password" class="form-control" placeholder="Password" name="password">
      <span class="glyphicon glyphicon-lock form-control-feedback"></span>
    </div>
    <div class="form-group has-feedback">
      <input type="password" class="form-control" placeholder="Confirm Password" name="repeatpassword">
      <span class="glyphicon glyphicon-lock form-control-feedback"></span>
    </div>
    <div class="row">
      <!-- /.col -->
      <div class="col-xs-12">
        <button type="submit" class="btn btn-primary btn-block btn-flat">Daftar</button>
      </div>
      <!-- /.col -->
    </div>
    <?= form_close(); ?>
    <br>
    <a href="<?= base_url('auth') ?>" class="text-center">Sudah punya akun ? Login!</a>
  </div>
  <!-- /.form-box -->
</div>
<!-- /.register-box -->