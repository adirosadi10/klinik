<table class="table table-hover">
  <thead>
    <tr>
      <th>No.</th>
      <th>No Pendaftaran</th>
      <th>Tindakan</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $no = 1;
    foreach ($data['detail'] as $detail) { ?>
      <tr>
        <td><?= $no++; ?></td>
        <td><?= $detail['no_daftar']; ?></td>
        <td><?= $detail['tindakan']; ?></td>
        <td>
          <span class="badge bg-success"><a style="text-decoration: none;color:white" href="<?= BASE_URL ?>/periksaDetail/resep/<?= $detail['id'] ?>">Resep obat</a></span>
        </td>
      </tr>
    <?php } ?>
  </tbody>
</table>