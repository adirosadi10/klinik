<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="<?= BASE_URL; ?>/style.css">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <!-- jquery -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

  <title>Klinik Sehat | <?= $data['title']; ?></title>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
      <a class="navbar-brand" href="<?= BASE_URL; ?>/home">
        <img src="<?= BASE_URL . "/img/logo.ico" ?>" style="width:50px" alt="">
      </a>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="<?= BASE_URL; ?>/home">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= BASE_URL; ?>/pendaftaran">Pendaftaran</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Pemeriksaan
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="<?= BASE_URL; ?>/periksa">Tindakan</a></li>
              <li><a class="dropdown-item" href="<?= BASE_URL; ?>/periksaDetail">Pemberian Obat</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= BASE_URL; ?>/transaksi">Pembayaran</a>
          </li>
          <?php if (isset($_SESSION['level']) == 0) { ?>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Master
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="<?= BASE_URL; ?>/user">User</a></li>
                <li><a class="dropdown-item" href="<?= BASE_URL; ?>/pegawai">Pegawai</a></li>
                <li><a class="dropdown-item" href="<?= BASE_URL; ?>/obat">Obat</a></li>
                <li><a class="dropdown-item" href="<?= BASE_URL; ?>/wilayah">Wilayah</a></li>
                <li><a class="dropdown-item" href="<?= BASE_URL; ?>/tindakan">Tindakan</a></li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Laporan
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="<?= BASE_URL; ?>/laporan/formResi">Cetak Transaksi</a></li>
                <li><a class="dropdown-item" href="<?= BASE_URL; ?>/laporan/formHarian">Harian</a></li>
                <li><a class="dropdown-item" href="<?= BASE_URL; ?>/laporan/formPeriodik">Periodik</a></li>
                <li><a class="dropdown-item" href="<?= BASE_URL; ?>/laporan/formBulanan">Bulanan</a></li>
              </ul>
            </li>
          <?php } ?>
        </ul>
        <?php if (isset($_SESSION['level']) == 0) : ?>
          <label class="me-5">Admin</label>
        <?php else : ?>
          <label class="me-5">User</label>
        <?php endif; ?>
        <form class="d-flex">
          <a class="nav-link" href="<?= BASE_URL; ?>/login/logout">Log Out</a>
        </form>
      </div>
    </div>
  </nav>
  <div class="container">
    <div class="mt-3">
      <h3><?= $data['subTitle']; ?></h3>
    </div>