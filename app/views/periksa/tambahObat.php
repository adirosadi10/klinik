<ol class="list-group list-group-numbered">
  <li class="list-group-item d-flex justify-content-between align-items-start">
    <?php foreach ($data['periksa'] as $periksa) {  ?>
      <div class="ms-2 me-auto">
        <div class="fw-bold"><?= $periksa['id_daftar']; ?></div>
      </div>
      <form class="d-flex justify-content-between align-items-start" action="<?= BASE_URL; ?>/periksa/dosisObat" method="post">
        <div class="ms-2 me-auto">
          <!-- <label for="id_tindakan" class="form-label">obat</label> -->
          <input type="hidden" name="id" id="id">
        <?php } ?>
        <select id="id_tindakan" name="id_tindakan" class="form-select" aria-label="Default select example">
          <?php foreach ($data['obat'] as $obat) {  ?>
            <option value="<?= $obat['id']; ?>"><?= $obat['nama_obat']; ?></option>
          <?php } ?>
        </select>
        </div>
        <input type="number" name="jumlah" id="jumlah">
        <span class="badge bg-secondary rounded-pill"><a class="text-white" style="text-decoration: none;" href="<?= BASE_URL; ?>/periksa/tambahtambah">tambah</a></span>
      </form>
  </li>
</ol>

<ol class="list-group list-group-numbered">

  <li class="list-group-item d-flex justify-content-between align-items-start">
    <div class="ms-2 me-auto">
      <div class="fw-bold">Amoxillin</div>
    </div>
    <span class="badge bg-primary rounded-pill">4</span>
  </li>
  <li class="list-group-item d-flex justify-content-between align-items-start">
    <div class="ms-2 me-auto">
      <div class="fw-bold">Amorphin</div>
    </div>
    <span class="badge bg-primary rounded-pill">2</span>
  </li>



</ol>