<div class="modal fade" id="tambah" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalLabel">Tambah Data User</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="<?= BASE_URL; ?>/user/create" method="POST">
          <input type="hidden" id="id" name="id">
          <div class="mb-3">
            <label for="id_pegawai" class="form-label">ID Pegawai</label>
            <select id="id_pegawai" name="id_pegawai" class="form-select" aria-label="Default select example">
              <?php foreach ($data['pegawai'] as $pegawai) { ?>
                <option value="<?= $pegawai['nip']; ?>"><?= $pegawai['nip']; ?></option>
              <?php } ?>
            </select>
          </div>
          <div class="mb-3">
            <label for="username" class="form-label">Username</label>
            <input type="text" class="form-control" id="username" name="username">
          </div>
          <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email">
          </div>
          <div class="mb-3 " id="groupPass">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password">
          </div>
          <div class="mb-3">
            <label for="level" class="form-label">Level</label>
            <select id="level" name="level" class="form-select" aria-label="Default select example">
              <option value="0">Admin</option>
              <option value="1">User</option>
            </select>
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