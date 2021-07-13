<button type="button" class="modalTambah mt-2 btn btn-primary" data-bs-toggle="modal" data-bs-target="#tambah">
  Tambah
</button>
<div class="row mt-3">
  <?php Flasher::flash(); ?>
</div>
<table class="table table-hover">
  <thead>
    <tr>
      <th>No.</th>
      <th>Id Tindakan</th>
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
        <td>
          <a class="tampilModalUbah" data-id="<?= $tindakan['id']; ?>" data-bs-toggle="modal" data-bs-target="#tambah">Edit</a> |
          <a href="<?= BASE_URL; ?>/tindakan/delete/<?= $tindakan['id']; ?>" onclick="return confirm('Apakah anda yakin akan menghapus data?');">Hapus</a>
        </td>
      </tr>
    <?php } ?>
  </tbody>
</table>
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
</div>
<script src="<?= BASE_URL; ?>/js/tindakan.js" type="text/javascript"></script>