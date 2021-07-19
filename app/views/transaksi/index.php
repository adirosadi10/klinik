<div class="row mt-3">
  <?php Flasher::flash(); ?>
</div>
<table class="table table-hover">
  <thead class="table-primary">
    <tr>
      <th>No.</th>
      <th>No_transaksi</th>
      <th>Total</th>
      <th>Aksi</th>
    </tr>
  </thead>
  <tbody>
    <?php $no = 1;
    foreach ($data['transaksi'] as $transaksi) { ?>
      <tr>
        <td><?= $no++; ?></td>
        <td><?= $transaksi['no_transaksi']; ?></td>
        <td><?= $transaksi['total']; ?></td>
        <td>
          <span class="badge bg-success"><a style="text-decoration: none;color:white" class="tampilModalUbah" data-id="<?= $transaksi['id']; ?>" data-bs-toggle="modal" data-bs-target="#tambah">Bayar</a></span> |
          <span class="badge bg-danger"><a style="text-decoration: none;color:white" href="<?= BASE_URL; ?>/transaksi/delete/<?= $transaksi['id']; ?>" onclick="return confirm('Apakah anda yakin akan menghapus data?');">Dibatalkan</a></span>
        </td>
      </tr>
    <?php } ?>
  </tbody>
</table>

<?php include_once('form.php'); ?>
</div>
<script src="<?= BASE_URL ?>/js/trans.js"></script>
<?php include_once('script.php'); ?>