<div class="row">
  <div class="col-auto">
    <form action="<?= BASE_URL; ?>/wilayah/search" method="post">
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Cari data wilayah..." id="keyword" name="keyword" autocomplete="off">
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
      <th>Provinsi</th>
      <th>Distrik</th>
      <th>Kecamatan</th>
      <th>Kelurahan</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $no = 1;
    foreach ($data['wilayah'] as $wilayah) { ?>
      <tr>
        <td><?= $no++; ?></td>
        <td><?= $wilayah['provinsi']; ?></td>
        <td><?= $wilayah['distrik']; ?></td>
        <td><?= $wilayah['kecamatan']; ?></td>
        <td><?= $wilayah['kelurahan']; ?></td>
        <td>
          <span class="badge bg-success"><a style="text-decoration: none;color:white" class="tampilModalUbah" data-id="<?= $wilayah['id']; ?>" data-bs-toggle="modal" data-bs-target="#tambah">Edit</a></span> |
          <span class="badge bg-danger"><a style="text-decoration: none;color:white" href="<?= BASE_URL; ?>/wilayah/delete/<?= $wilayah['id']; ?>" onclick="return confirm('Apakah anda yakin akan menghapus data?');">Hapus</a></span>
        </td>
      </tr>
    <?php } ?>
  </tbody>
</table>
<?php
include_once('form.php');
?>
</div>
<script src="<?= BASE_URL; ?>/js/wilayah.js" type="text/javascript"></script>