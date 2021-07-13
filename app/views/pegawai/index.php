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
    foreach ($data['pegawai'] as $pegawai) { ?>
      <tr>
        <td><?= $no++; ?></td>
        <td><?= $pegawai['nama']; ?></td>
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
        <form action="<?= BASE_URL; ?>/pegawai/create" method="POST">
          <div class="mb-3">
            <label for="nip" class="form-label">NIP</label>
            <input type="number" class="form-control" id="nip" name="nip">
          </div>
          <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama">
          </div>
          <div class="mb-3">
            <label for="jk" class="form-label">Jenis Kelamin</label>
            <select id="jk" name="jk" class="form-select" aria-label="Default select example">
              <option value="Laki-laki">Laki-laki</option>
              <option value="Perempuan">Perempuan</option>
            </select>
          </div>
          <div class="mb-3">
            <label for="jabatan" class="form-label">Jabatan</label>
            <input type="text" class="form-control" id="jabatan" name="jabatan">
          </div>
          <div class="mb-3">
            <label for="poli" class="form-label">Poli</label>
            <input type="text" class="form-control" id="poli" name="poli">
          </div>
          <div class="mb-3">
            <label for="alamat" class="form-label">Alamat</label>
            <textarea class="form-control" name="alamat" id="alamat" rows="3"></textarea>
          </div>
          <div class="mb-3">
            <label for="no_hp" class="form-label">No. HP</label>
            <input type="number" class="form-control" id="no_hp" name="no_hp">
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