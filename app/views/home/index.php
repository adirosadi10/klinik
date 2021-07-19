<div class="container">
  <div class="row">
    <div class="col-3">
      <div style="height: 130px;" class="card">
        <div class="card-body">
          <h5 class="card-title">Daftar Tunggu</h5>
          <p class="card-text"><?= $data['tunggu']['tunggu']; ?></p>
          <a style="text-decoration: none;" href="<?= BASE_URL; ?>/pendaftaran" class="card-link">Proses</a>
        </div>
      </div>
    </div>
    <div class="col-3">
      <div style="height: 130px;" class="card">
        <div class="card-body">
          <h5 class="card-title">Pembayaran</h5>
          <p class="card-text"><?= $data['bayar']['bayar']; ?></p>
          <a style="text-decoration: none;" href="<?= BASE_URL; ?>/transaksi" class="card-link">Bayar</a>
        </div>
      </div>
    </div>
    <div class="col-3">
      <div style="height: 130px;" class="card">
        <div class="card-body">
          <h5 class="card-title">Total Kunjungan Hari ini</h5>
          <p class="card-text">
            <?= $data['kunjungan']['kunjungan'] ?>
          </p>
        </div>
      </div>
    </div>
    <div class="col-3">
      <div style="height: 130px;" class="card">
        <div class="card-body">
          <h5 class="card-title">Pendapatan Hari ini</h5>
          <p class="card-text"><?= "Rp " . number_format($data['total']['total'], 0, ',', '.'); ?></p>
        </div>
      </div>
    </div>
  </div>
  <div class="card" style="margin: 5px 0; ">
    <figure class="highcharts-figure">
      <div id="container2"></div>
      <p class="highcharts-description" style="margin-left: 80px;">
        Laporan prekuensi kunjungan pasien di Klinik Sehat ditampilkan dalam bentuk grafik selama seminggu terakhir.
      </p>
    </figure>
  </div>
  <div class="card" style="margin: 5px 0; ">
    <figure class="highcharts-figure">
      <div id="container1"></div>
      <p class="highcharts-description" style="margin-left: 80px;">
        Laporan pendapatan di Klinik Sehat ditampilkan dalam bentuk chart selama seminggu terakhir.
      </p>
    </figure>
  </div>
</div>
<?php
include_once('script/script.php');
include_once('script/periodik.php')
?>