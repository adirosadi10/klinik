<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <figure class="highcharts-figure">
    <div id="container1"></div>
    <p class="highcharts-description">
      Laporan pendapatan di Klinik Sehat ditampilkan dalam bentuk chart selama periode waktu terpilih.
    </p>
  </figure>
  <figure class="highcharts-figure">
    <div id="container2"></div>
    <p class="highcharts-description">
      Laporan prekuensi kunjungan pasien di Klinik Sehat ditampilkan dalam bentuk grafik selama periode waktu terpilih.</p>
  </figure>
  <?php
  include_once('script/script.php');
  include_once('script/bulan.php')
  ?>
</body>

</html>