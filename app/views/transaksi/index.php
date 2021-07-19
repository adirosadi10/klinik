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
    <?php
    $no = 1;
    foreach ($data['transaksi'] as $transaksi) { ?>
      <tr>
        <td><?= $no++; ?></td>
        <td><?= $transaksi['no_transaksi']; ?></td>
        <td><?= $transaksi['total']; ?></td>
        <td>
          <a class="tampilModalUbah" data-id="<?= $transaksi['id']; ?>" data-bs-toggle="modal" data-bs-target="#tambah">Bayar</a> |
          <a href="<?= BASE_URL; ?>/transaksi/delete/<?= $transaksi['id']; ?>" onclick="return confirm('Apakah anda yakin akan menghapus data?');">Hapus</a>
        </td>
      </tr>
    <?php } ?>
  </tbody>
</table>

<div class="modal fade" id="tambah" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalLabel">Pembayaran </h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="" method="POST">
          <input type="hidden" id="id" name="id" value="">
          <div class="mb-3">
            <label for="total" class="form-label">No. Transaksi</label>
            <input readonly required class="form-control" id="no_transaksi" name="no_transaksi">
          </div>
          <div class="mb-3">
            <label for="total" class="form-label">Total</label>
            <input type="number" readonly required class="form-control" id="total" name="total">
          </div>
          <div class="mb-3">
            <label for="bayar" class="form-label">Bayar</label>
            <input type="number" onkeyup="kurang();" required class="form-control" id="bayar" name="bayar">
          </div>
          <div class="mb-3">
            <label for="kembali" class="form-label">kembali</label>
            <input type="number" readonly required class="form-control" id="kembali" name="kembali">
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button id="submit" type="submit" onclick="valid();" class="btn btn-primary">Bayar</button>
        </form>
      </div>
    </div>
  </div>
</div>

</div>
<script src="<?= BASE_URL ?>/js/trans.js"></script>
<script>
  function kurang() {
    var dbil1 = document.getElementById('total').value
    var dbil2 = document.getElementById('bayar').value
    var result = parseFloat(dbil2) - parseFloat(dbil1);
    if (!isNaN(result)) {
      document.getElementById('kembali').value = result;
    }
  }
</script>
<script>
  function valid() {
    if (document.getElementById('kembali').value < 0) {
      alert('Pembayaran kurang !!!!')
      document.getElementById('submit').type = "button";
    } else {
      document.getElementById('submit').type = "submit";
    }
  }
</script>