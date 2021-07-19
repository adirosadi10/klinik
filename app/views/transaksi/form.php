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