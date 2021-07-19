<div class="modal fade" id="tambah" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalLabel">Tambah Data Pegawai</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="<?= BASE_URL; ?>/obat/create" method="POST">
          <input type="hidden" id="id" name="id">
          <div class="mb-3">
            <label for="no_obat" class="form-label">No. Obat</label>
            <input type="number" required class="form-control" id="no_obat" name="no_obat">
          </div>
          <div class="mb-3">
            <label for="nama_obat" class="form-label">Nama Obat</label>
            <input type="text" required class="form-control" id="nama_obat" name="nama_obat">
          </div>
          <div class="mb-3">
            <label for="jenis" class="form-label">Jenis </label>
            <input type="text" required class="form-control" id="jenis" name="jenis">
          </div>
          <div class="mb-3">
            <label for="harga" class="form-label">Harga</label>
            <input type="number" required class="form-control" id="harga" name="harga">
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Tambah</button>
        </form>
      </div>
    </div>
  </div>
</div>