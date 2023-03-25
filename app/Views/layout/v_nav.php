<!-- Collect the nav links, forms, and other content for toggling -->
<div class="collapse navbar-collapse pull-left" id="navbar-collapse">
  <ul class="nav navbar-nav">
    <!-- Beranda -->
    <li><a href="<?= base_url('beranda'); ?>">Beranda</a></li>
    <!-- Data Covid -->
    <li class="dropdown">
      <a href="#" class="dropdown-toggle" data-toggle="dropdown">Data Covid <span class="caret"></span></a>
      <ul class="dropdown-menu" role="menu">
        <li><a href="<?= base_url('covid'); ?>">Data Covid</a></li>
         <li class="divider"></li>
        <li><a href="<?= base_url('covid/deteksi'); ?>">Deteksi Mandiri</a></li>
      </ul>
    </li>
    <!-- Data Vaksin -->
    <li class="dropdown">
      <a href="#" class="dropdown-toggle" data-toggle="dropdown">Data Vaksin <span class="caret"></span></a>
      <ul class="dropdown-menu" role="menu">
        <li><a href="<?= base_url('vaksin'); ?>">Data Vaksin</a></li>
         <li class="divider"></li>
        <li><a href="<?= base_url('vaksin/pendaftaran'); ?>">Daftar Vaksin</a></li>
      </ul>
    </li>
    <!-- RS Rujukan -->
    <li><a href="<?= base_url('rumah_sakit'); ?>">RS Rujukan</a></li>
    <!-- Peta Sebaran -->
    <li><a href="<?= base_url('peta_sebaran'); ?>">Peta Sebaran</a></li>
    <!-- Infografis -->
    <li><a href="<?= base_url('infografis'); ?>">Infografis</a></li>
    <!-- Berita -->
    <li><a href="<?= base_url('berita'); ?>">Berita</a></li>
    <!-- Hubungi Kami -->
    <li><a href="<?= base_url('hubungi'); ?>">Hubungi Kami</a></li>
  </ul>
</div>
<!-- /.navbar-collapse -->
<!-- Navbar Right Menu -->
<div class="navbar-custom-menu">
  <ul class="nav navbar-nav">

    <?php if (session()->get('username') == "") { ?>

    <?php  } else { ?>

      <!-- User Account Menu -->
      <li class="dropdown user user-menu">
        <!-- Menu Toggle Button -->
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">

          <!-- The user image in the navbar-->
          <?php if (session()->get('foto') == '') { ?>
            <img src="<?= base_url('foto/default.jpg') ?>" class="user-image" alt="User Image">
          <?php } else { ?>
            <img src="<?= base_url('foto/' . session()->get('foto')) ?>" class="user-image" alt="User Image">
          <?php } ?>
          <!-- hidden-xs hides the username on small devices so only the image appears. -->
          <span class="hidden-xs"><?= session()->get('nama') ?></span>
        </a>
        <ul class="dropdown-menu">
          <!-- The user image in the menu -->
          <li class="user-header">
            <!-- The user image in the navbar-->
            <?php if (session()->get('foto') == '') { ?>
              <img src="<?= base_url('foto/default.jpg') ?>" class="img-circle" alt="User Image">
            <?php } else { ?>
              <img src="<?= base_url('foto/' . session()->get('foto')) ?>" class="img-circle" alt="User Image">
            <?php } ?>
            <!-- hidden-xs hides the username on small devices so only the image appears. -->


            <p>
              <?= session()->get('nama'); ?> - <?php if (session()->get('level') == 1) {
                                                  echo 'Admin';
                                                } else if (session()->get('level') == 2) {
                                                  echo session()->get('username');
                                                } else if (session()->get('level') == 3) {
                                                  echo 'Dosen';
                                                } ?>
              <small><?= date('d M Y') ?></small>
            </p>
          </li>
          <!-- Menu Footer-->
          <li class="user-footer">
            <div class="pull-left">
              <a href="<?= base_url('profil') ?>" class="btn btn-default btn-flat">Profile</a>
            </div>
            <div class="pull-right">
              <a href="<?= base_url('auth/logout'); ?>" class="btn btn-default btn-flat">Sign out</a>
            </div>
          </li>
        </ul>
      </li>
    <?php } ?>
  </ul>
</div>
<!-- /.navbar-custom-menu -->
</div>
<!-- /.container-fluid -->
</nav>
</header>
<!-- Full Width Column -->
<div class="content-wrapper">
  <div class="container">
    <!-- Content Header (Page header) -->
    <!-- <section class="content-header">
        <h1>
          Top Navigation
        </h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
          <li><a href="#">Layout</a></li>
          <li class="active">Top Navigation</li>
        </ol>
      </section> -->
    <!-- Main content -->
    <section class="content">