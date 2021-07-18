<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style type="text/css">
    @media print {

      a#print,
      title#print {
        display: none;
      }
    }
  </style>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <!-- jquery -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

  <title>Klinik Sehat | <?= $data['title']; ?></title>
</head>

<body>
  <section class="content m-3">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="navbar-brand">
            <img src="<?= BASE_URL . "/img/logo.ico" ?>" style="width:50px" alt="">
            Klinik Sehat.
            <small class="float-end">Date: <?= date('d-m-Y')  ?></small>
          </div>
        </div>
        <!-- /.col -->
      </div>
      <div class="row justify-content-center">
        <div class="col-lg-12 text-center mb-4">
          <strong>LAPORAN HARIAN.</strong><br>
          <h4>Riwayat kunjungan tanggal : <?= date('d-m-Y', strtotime($data['tanggal'])) ?></h4>
        </div>
      </div>
      <div class="row">
        <div class="col-12 table-responsive">
          <table class="table table-striped">
            <thead>
              <tr>
                <th>No. </th>
                <th>No. Transaksi</th>
                <th>Nama Pasien</th>
                <th>Tempat, tanggal Lahir</th>
                <th>Alamat</th>
                <th>Pembayaran</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $no = 1;
              foreach ($data['cetak'] as $cetak) { ?>
                <tr>
                  <td><?= $no++; ?></td>
                  <td><?= $cetak['no_transaksi'] ?></td>
                  <td><?= $cetak['nama_pasien'] ?></td>
                  <td><?= $cetak['tmp_lahir'] . ', ' . date('d-m-Y', strtotime($cetak['tgl_lahir'])) ?></td>
                  <td><?= $cetak['alamat'] ?></td>
                  <td><?= "Rp " . number_format($cetak['total'], 0, ',', '.'); ?></td>
                </tr>
              <?php } ?>
            </tbody>
          </table>

          <a href="" onclick="window.print();" id="print" target="_blank" class="btn  btn-outline-primary"><i class="fas fa-print"></i> Print</a>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>

  <script>
    window.print();
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


</body>

</html>