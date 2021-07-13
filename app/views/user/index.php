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
    foreach ($data['user'] as $user) { ?>
      <tr>
        <td><?= $no++; ?></td>
        <td><?= $user['username']; ?></td>
      </tr>
    <?php } ?>
  </tbody>
</table>
<div class="modal fade" id="tambah" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Data User</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="<?= BASE_URL; ?>/user/create" method="POST">
          <div class="mb-3">
            <label for="id_pegawai" class="form-label">ID Pegawai</label>
            <input type="number" class="form-control" id="id_pegawai" name="id_pegawai">
          </div>
          <div class="mb-3">
            <label for="username" class="form-label">Username</label>
            <input type="text" class="form-control" id="username" name="username">
          </div>
          <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email">
          </div>
          <div class="mb-3">
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
</div>