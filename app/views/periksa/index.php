<div class="row mt-3">
  <?php Flasher::flash(); ?>
</div>
<table class="table table-hover">
  <thead>
    <tr>
      <th>No.</th>
      <th>No. Pendaftaran</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $no = 1;
    foreach ($data['periksa'] as $periksa) { ?>
      <tr>
        <td><?= $no++; ?></td>
        <td><?= $periksa['no_daftar']; ?></td>
        <td>
          <span class="badge bg-success"><a style="text-decoration: none;color:white" class="tampilModalProses" data-id="<?= $periksa['id']; ?>" data-bs-toggle="modal" data-bs-target="#tambah">Proses</a></span>
        </td>
      </tr>
    <?php } ?>
  </tbody>
</table>
<?php
include_once('form.php');
?>
</div>
<script src="<?= BASE_URL; ?>/js/periksas.js"></script>