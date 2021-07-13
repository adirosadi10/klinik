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
    foreach ($data['wilayah'] as $wilayah) { ?>
      <tr>
        <td><?= $no++; ?></td>
        <td><?= $wilayah['zona']; ?></td>
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
        <form action="<?= BASE_URL; ?>/wilayah/create" method="POST">
          <div class="mb-3">
            <label for="zona" class="form-label">Zona</label>
            <input type="text" class="form-control" id="zona" name="zona">
          </div>
          <div class="mb-3">
            <label for="provinsi" class="form-label">Provinsi</label>
            <input type="text" class="form-control" id="provinsi" name="provinsi">
          </div>
          <div class="mb-3">
            <label for="distrik" class="form-label">Distrik</label>
            <input type="text" class="form-control" id="distrik" name="distrik">

          </div>
          <div class="mb-3">
            <label for="kecamatan" class="form-label">Kecamatan</label>
            <input type="text" class="form-control" id="kecamatan" name="kecamatan">
          </div>
          <div class="mb-3">
            <label for="kelurahan" class="form-label">Kelurahan</label>
            <input type="text" class="form-control" id="kelurahan" name="kelurahan">
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