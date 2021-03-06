<div class="modal fade" id="tambah" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalLabel">Tambah Data Pegawai</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="<?= BASE_URL; ?>/pegawai/create" method="POST">
          <input type="hidden" id="id" name="id">
          <div class="mb-3">
            <label for="nip" class="form-label">NIP</label>
            <input type="text" required class="form-control" id="nip" name="nip">
          </div>
          <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" required class="form-control" id="nama" name="nama">
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
            <input type="text" required class="form-control" id="jabatan" name="jabatan">
          </div>
          <div class="mb-3">
            <label for="poli" class="form-label">Poli</label>
            <input type="text" required class="form-control" id="poli" name="poli">
          </div>
          <div class="mb-3">
            <label for="alamat" class="form-label">Alamat</label>
            <textarea class="form-control" name="alamat" required id="alamat" rows="3"></textarea>
          </div>
          <div class="mb-3">
            <label for="no_hp" class="form-label">No. HP</label>
            <input type="number" required class="form-control" id="no_hp" name="no_hp">
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