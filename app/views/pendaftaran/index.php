<button type="button" class="tombolModal mt-2 btn btn-primary" data-bs-toggle="modal" data-bs-target="#tambah">
  Tambah
</button>
<div class="row mt-3">
  <?php Flasher::flash(); ?>
</div>
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
    foreach ($data['pendaftaran'] as $pendaftaran) { ?>
      <tr>
        <td><?= $no++; ?></td>
        <td><?= $pendaftaran['nama_pasien']; ?></td>
        <td>
          <a class="tampilModalDetail" data-id="<?= $pendaftaran['id']; ?>" data-bs-toggle="modal" data-bs-target="#tambah">Detail</a> |
          <a href="<?= BASE_URL; ?>/pendaftaran/update/<?= $pendaftaran['id']; ?>" onclick="return confirm('Apakah anda yakin akan memproses ini?');">Proses</a> |
          <a href="<?= BASE_URL; ?>/pendaftaran/delete/<?= $pendaftaran['id']; ?>" onclick="return confirm('Apakah anda yakin akan menghapus data?');">Hapus</a>
        </td>
      </tr>
    <?php } ?>
  </tbody>
</table>
<div class="modal fade" id="tambah" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalLabel">Tambah Data Pendaftaran</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="<?= BASE_URL; ?>/pendaftaran/create" method="POST">
          <input type="hidden" id="id" name="id">
          <div class="mb-3">
            <label for="no_daftar" class="form-label">No. pendaftaran</label>
            <input type="number" class="form-control" id="no_daftar" name="no_daftar">
          </div>
          <div class="mb-3">
            <label for="nama_pasien" class="form-label">Nama Pasien</label>
            <input type="text" class="form-control" id="nama_pasien" name="nama_pasien">
          </div>
          <div class="mb-3">
            <label for="jk" class="form-label">Jenis Kelamin</label>
            <select id="jk" name="jk" class="form-select" aria-label="Default select example">
              <option value="Laki-laki">Laki-laki</option>
              <option value="Perempuan">Perempuan</option>
            </select>
          </div>
          <div class="mb-3">
            <label for="tmp_lahir" class="form-label">Tempat Lahir</label>
            <input type="text" class="form-control" id="tmp_lahir" name="tmp_lahir">
          </div>
          <div class="mb-3">
            <label for="tgl_lahir" class="form-label">Tanggal Lahir</label>
            <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir">
          </div>
          <div class="mb-3">
            <label for="id_wilayah" class="form-label">Zona</label>
            <select id="id_wilayah" name="id_wilayah" class="form-select" aria-label="Default select example">
              <option value="1">1</option>
              <option value="2">2</option>
            </select>
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
        <button id="tmbl" type="submit" class="btn btn-primary">Tambah</button>
        </form>
      </div>
    </div>
  </div>
</div>
</div>
<script src="<?= BASE_URL; ?>/js/pendaftaran.js" type="text/javascript"></script>