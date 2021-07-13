<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tambah">
  Tambah
</button>
<table class="table table-hover">
  <thead>
    <tr>
      <th>No.</th>
      <th>Id Pegawai</th>
      <th>Username</th>
      <th>Email</th>
      <th>Level</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $no = 1;
    foreach ($data['tindakan'] as $tindakan) { ?>
      <tr>
        <td><?= $no++; ?></td>
        <td><?= $tindakan['tindakan']; ?></td>
      </tr>
    <?php } ?>
  </tbody>
</table>
<div class="modal fade" id="tambah" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Data Pegawai</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="<?= BASE_URL; ?>/tindakan/create" method="POST">
          <div class="mb-3">
            <label for="tindakan" class="form-label">Tindakan</label>
            <input type="text" class="form-control" id="tindakan" name="tindakan">
          </div>
          <div class="mb-3">
            <label for="tarif" class="form-label">Tarif</label>
            <input type="number" class="form-control" id="tarif" name="tarif">
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
</div>