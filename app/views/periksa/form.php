<div class="modal fade" id="tambah" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalLabel">Tambah Data periksa</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="<?= BASE_URL; ?>/periksa/update" method="POST">
          <input type="hidden" id="id" name="id">
          <input type="hidden" id="id_daftar" name="id_daftar">
          <div class="mb-3">
            <label for="id_daftar" class="form-label">No. Pendaftaran</label>
            <input type="text" class="form-control" id="no_daftar" name="no_daftar" value="" readonly>
          </div>
          <div class="mb-3">
            <label for="id_tindakan" class="form-label">Tindakan</label>
            <select id="id_tindakan" name="id_tindakan" class="form-select" aria-label="Default select example">
              <?php foreach ($data['tindakan'] as $tindakan) {  ?>
                <option value="<?= $tindakan['id']; ?>"><?= $tindakan['tindakan']; ?></option>
              <?php } ?>
            </select>
          </div>
          <div class="mb-3">
            <label for="alamat" class="form-label">Keterangan</label>
            <textarea class="form-control" name="keterangan" id="keterangan" rows="3"></textarea>
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