<ol class="list-group list-group-numbered">
  <?php foreach ($data['periksa'] as $periksa) { ?>
    <form action="<?= BASE_URL; ?>/periksa/tambahObat" method="post">
      <li class="list-group-item d-flex justify-content-between align-items-start">
        <div class="ms-2 me-auto">
          <div class="fw-bold"><?= $periksa['id']; ?></div>
        </div>
        <select>
          <?php foreach ($data['obat'] as $obat) { ?>
            <option value="<?= $obat['id'] ?>"><?= $obat['nama_obat'] ?></option>
          <?php } ?>
        </select>
        <input type="number" name="jumlah" id="jumlah">
        <button type="submit" class="btn btn-primary">Tambah</button>
      </li>
    </form>
  <?php } ?>
</ol>