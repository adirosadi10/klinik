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
          <div id="Gnama_pasien" class="mb-3">
            <label for="nama_pasien" class="form-label">Nama Pasien</label>
            <input type="text" class="form-control" id="nama_pasien" name="nama_pasien">
          </div>
          <div id="Gjk" class="mb-3">
            <label for="jk" class="form-label">Jenis Kelamin</label>
            <select id="jk" name="jk" class="form-select" aria-label="Default select example">
              <option value="Laki-laki">Laki-laki</option>
              <option value="Perempuan">Perempuan</option>
            </select>
          </div>
          <div id="Gtmp_lahir" class="mb-3">
            <label for="tmp_lahir" class="form-label">Tempat Lahir</label>
            <input type="text" class="form-control" id="tmp_lahir" name="tmp_lahir">
          </div>
          <div id="Gtgl_lahir" class="mb-3">
            <label for="tgl_lahir" class="form-label">Tanggal Lahir</label>
            <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir">
          </div>
          <div id="Gid_wilayah" class="mb-3">
            <label for="id_wilayah" class="form-label">Zona</label>
            <select id="id_wilayah" name="id_wilayah" class="form-select" aria-label="Default select example">
              <?php foreach ($data['zona'] as $zona) { ?>
                <option value="<?= $zona['id']; ?>"><?= $zona['provinsi'] . '-' . $zona['distrik'] . '-' . $zona['kecamatan'] . '-' . $zona['kelurahan']; ?></option>
              <?php } ?>
            </select>
          </div>
          <div id="Galamat" class="mb-3">
            <label for="alamat" class="form-label">Alamat</label>
            <textarea class="form-control" name="alamat" id="alamat" rows="3"></textarea>
          </div>
          <div id="Gno_hp" class="mb-3">
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