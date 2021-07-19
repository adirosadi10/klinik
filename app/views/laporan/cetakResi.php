<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Bootstrap CSS -->
  <style type="text/css">
    @media print {

      a#print,
      title#print {
        display: none;
      }
    }
  </style>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <!-- jquery -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <title id="print">Klinik Sehat | <?= $data['title']; ?></title>
</head>

<body>
  <section class="content m-3">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <!-- Main content -->
          <div class="invoice p-3 mb-3">
            <!-- title row -->
            <div class="row">
              <div class="col-12">
                <div class="navbar-brand">
                  <img src="<?= BASE_URL . "/img/logo.ico" ?>" style="width:50px" alt="">
                  Klinik Sehat.
                  <small class="float-end">Date: <?= date('d-m-Y')  ?></small>
                </div>
              </div><!-- /.col -->
            </div><!-- info row -->
            <div class="row mt-3 invoice-info">
              <div class="col-7">
                <div class="row">
                  <div class="col-5 invoice-col">
                    No. Transaksi<br>
                    Nama Pasien<br>
                    Tempat, tanggal lahir<br>
                    Alamat
                  </div><!-- /.col -->
                  <div class="col-7 invoice-col">
                    <?php foreach ($data['cetak'] as $cetak) { ?>
                      : <?= $cetak['no_transaksi']; ?><br>
                      : <?= $cetak['nama_pasien']; ?><br>
                      : <?= $cetak['tmp_lahir'] . ', ' . date('d-m-Y', strtotime($cetak['tgl_lahir'])) ?><br>
                      : <?= $cetak['alamat']; ?>
                      <?php $tindakan =  $cetak['tindakan'];
                      $keterangan = $cetak['keterangan'];
                      $b_jasa = $cetak['tarif'];
                      $total = $cetak['total'];
                      $bayar = $cetak['bayar'];
                      $kembali = $cetak['kembali'];
                      ?>
                    <?php } ?>
                  </div>
                </div>
              </div>
              <div class="col-5">
                <div class="row">
                  <div class="col-5 invoice-col">
                    Tindakan<br>
                    Keterangan
                  </div><!-- /.col -->
                  <div class="col-7 invoice-col">
                    : <?= $tindakan; ?><br>
                    : <?= $keterangan; ?>
                  </div>
                </div>
              </div>
            </div>
            <div class="row mt-3">
              <div class="col-12 table-responsive">
                <table class="table table-striped">
                  <thead class="table-primary">
                    <tr>
                      <th>No.</th>
                      <th>No. Obat</th>
                      <th>Nama Obat</th>
                      <th>Jenis</th>
                      <th>Harga</th>
                      <th>Jumlah</th>
                      <th>Subtotal</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $no = 1;
                    foreach ($data['data'] as $data) { ?>
                      <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $data['no_obat']; ?></td>
                        <td><?= $data['nama_obat']; ?></td>
                        <td><?= $data['jenis']; ?></td>
                        <td><?= number_format($data['harga'], 0, ',', '.'); ?></td>
                        <td><?= $data['jumlah']; ?></td>
                        <td><?= number_format($data['harga'] * $data['jumlah'], 0, ',', '.'); ?></td>
                      </tr>
                    <?php } ?>
                  </tbody>
                </table>
              </div><!-- /.col -->
            </div><!-- /.row -->
            <div class="row">
              <!-- accepted payments column -->
              <div class="col-7">
              </div><!-- /.col -->
              <div class="col-5">
                <div class="table-responsive">
                  <table class="table">
                    <tr>
                      <th>Biaya Obat</th>
                      <td>: <?= "Rp " . number_format($total - $b_jasa, 0, ',', '.'); ?></td>
                    </tr>
                    <tr>
                      <th style="width:50%">B. Tindakan</th>
                      <td>: <?= "Rp " . number_format($b_jasa, 0, ',', '.'); ?></td>
                    </tr>
                    <tr>
                      <th>Total:</th>
                      <td>: <?= "Rp " . number_format($total, 0, ',', '.'); ?></td>
                    </tr>
                    <tr>
                      <th>Pembayaran</th>
                      <td>: <?= "Rp " . number_format($bayar, 0, ',', '.'); ?></td>
                    </tr>
                    <tr>
                      <th>Kembalian</th>
                      <td>: <?= "Rp " . number_format($kembali, 0, ',', '.'); ?></td>
                    </tr>
                  </table>
                  <a href="" onclick="window.print();" id="print" target="_blank" class="btn  btn-outline-primary"><i class="fas fa-print"></i> Print</a>
                </div>
              </div>
            </div>
          </div>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>
  </div>
  <script>
    window.print();
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>