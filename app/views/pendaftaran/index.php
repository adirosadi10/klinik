<button type="button" class="tombolModal mt-2 btn btn-primary" data-bs-toggle="modal" data-bs-target="#tambah">
  Tambah
</button>
<div class="row mt-3">
  <?php Flasher::flash(); ?>
</div>
<table class="table table-hover">
  <thead class="table-primary">
    <tr>
      <th>No.</th>
      <th>Nama Pasien</th>
      <th>Gender</th>
      <th>Tempat, Tanggal lahir</th>
      <th>Alamat</th>
      <th>Aksi</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $no = 1;
    foreach ($data['pendaftaran'] as $pendaftaran) { ?>
      <tr>
        <td><?= $no++; ?></td>
        <td><?= $pendaftaran['nama_pasien']; ?></td>
        <td><?= $pendaftaran['jk']; ?></td>
        <td><?= $pendaftaran['tmp_lahir'] . ', ' . $pendaftaran['tgl_lahir']; ?></td>
        <td><?= $pendaftaran['alamat']; ?></td>
        <td>
          <span class="badge bg-success"><a style="text-decoration: none;color:white" class="tampilModalProses" data-id="<?= $pendaftaran['id']; ?>" data-bs-toggle="modal" data-bs-target="#tambah">Proses</a></span> |
          <span class="badge bg-danger"><a style="text-decoration: none;color:white" href="<?= BASE_URL; ?>/pendaftaran/delete/<?= $pendaftaran['id']; ?>" onclick="return confirm('Apakah anda yakin akan menghapus data?');">Hapus</a></span>
        </td>
      </tr>
    <?php } ?>
  </tbody>
</table>
<?php
include_once('form.php');
?>
</div>
<script src="<?= BASE_URL; ?>/js/pendaftarans.js" type="text/javascript"></script>