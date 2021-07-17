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
    foreach ($data['detail'] as $detail) { ?>
      <tr>
        <td><?= $no++; ?></td>
        <td><?= $detail['id']; ?></td>
        <td><?= $detail['id_tindakan']; ?></td>
        <td>
          <a href="<?= BASE_URL ?>/periksaDetail/resep/<?= $detail['id'] ?>">Resep obat</a>

        </td>
      </tr>
    <?php } ?>
  </tbody>
</table>