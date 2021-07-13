<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <title>Klinik Sehat | <?= $data['title']; ?></title>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
      <a class="navbar-brand" href="#">
        <img src="<?= BASE_URL . "/img/logo.ico" ?>" style="width:50px" alt="">
      </a>
      <!-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button> -->
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Pendaftaran</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Pemeriksaan</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Pembayaran</a>
          </li>
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
              <li><a class="dropdown-item" href="<?= BASE_URL; ?>/laporan/formHarian">Harian</a></li>
              <li><a class="dropdown-item" href="<?= BASE_URL; ?>/laporan/formPeriodik">Periodik</a></li>
              <li><a class="dropdown-item" href="<?= BASE_URL; ?>/laporan/formBulanan">Bulanan</a></li>
            </ul>
          </li>
        </ul>
        <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>
  <div class="container">
    <div class="mt-3">
      <h3><?= $data['subTitle']; ?></h3>
    </div>