<table class="table table-hover">
  <thead class="table-primary">
    <tr>
      <th>No.</th>
      <th>No_transaksi</th>
      <th>Nama Pasien</th>
      <th>Alamat</th>
      <th>Aksi</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $no = 1;
    foreach ($data['resi'] as $resi) { ?>
      <tr>
        <td><?= $no++; ?></td>
        <td><?= $resi['no_transaksi']; ?></td>
        <td><?= $resi['nama_pasien']; ?></td>
        <td><?= $resi['alamat']; ?></td>
        <td>
          <span class="badge bg-success"><a style="text-decoration: none;color:white" target="_blank" href="<?= BASE_URL; ?>/laporan/CetakResi/<?= $resi['trans_id']; ?>">Cetak</a></span>
        </td>
      </tr>
    <?php } ?>
  </tbody>
</table>