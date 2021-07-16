<div class="row">
  <div class="col-auto">
    <form action="<?= BASE_URL; ?>/obat/search" method="post">
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Cari data obat..." id="keyword" name="keyword" autocomplete="off">
        <button class="btn btn-primary" type="submit" id="tmblCari">Cari</button>
      </div>
    </form>
  </div>
  <div class="col-auto">
    <button type="button" class="btn btn-primary tombolModal" data-bs-toggle="modal" data-bs-target="#tambah">
      Tambah
    </button>
  </div>
</div>
<div class="row mt-3">
  <?php Flasher::flash(); ?>
</div>
<table class="table table-hover">
  <thead class="table-primary">
    <tr>
      <th>No.</th>
      <th>Nama Obat</th>
      <th>Jenis</th>
      <th>Harga</th>
      <th>Aksi</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $no = 1;
    foreach ($data['obat'] as $obat) { ?>
      <tr>
        <td><?= $no++; ?></td>
        <td><?= $obat['nama_obat']; ?></td>
        <td><?= $obat['jenis']; ?></td>
        <td><?= $obat['harga']; ?></td>
        <td>
          <a class="tampilModalUbah" data-id="<?= $obat['id']; ?>" data-bs-toggle="modal" data-bs-target="#tambah">Edit</a> |
          <a href="<?= BASE_URL; ?>/obat/delete/<?= $obat['id']; ?>" onclick="return confirm('Apakah anda yakin akan menghapus data?');">Hapus</a>
        </td>
      </tr>
    <?php } ?>
  </tbody>
</table>
<div class="modal fade" id="tambah" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalLabel">Tambah Data Pegawai</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="<?= BASE_URL; ?>/obat/create" method="POST">
          <input type="hidden" id="id" name="id">
          <div class="mb-3">
            <label for="no_obat" class="form-label">No. Obat</label>
            <input type="number" required class="form-control" id="no_obat" name="no_obat">
          </div>
          <div class="mb-3">
            <label for="nama_obat" class="form-label">Nama Obat</label>
            <input type="text" required class="form-control" id="nama_obat" name="nama_obat">
          </div>
          <div class="mb-3">
            <label for="jenis" class="form-label">Jenis </label>
            <input type="text" required class="form-control" id="jenis" name="jenis">
          </div>
          <div class="mb-3">
            <label for="harga" class="form-label">Harga</label>
            <input type="number" required class="form-control" id="harga" name="harga">
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
<script src="<?= BASE_URL; ?>/js/obat.js" type="text/javascript"></script>