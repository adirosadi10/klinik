<div class="modal fade" id="tambah" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalLabel">Tambah Data Tindakan</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="<?= BASE_URL; ?>/tindakan/create" method="POST">
          <input type="hidden" id="id" name="id">
          <div class="mb-3">
            <label for="tindakan" class="form-label">Tindakan</label>
            <input type="text" required class="form-control" id="tindakan" name="tindakan">
          </div>
          <div class="mb-3">
            <label for="tarif" class="form-label">Tarif</label>
            <input type="number" required class="form-control" id="tarif" name="tarif">
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