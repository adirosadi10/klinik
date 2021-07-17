<div class="card">
  <div class="card-body">
    <form method="post" action="<?= BASE_URL ?>/periksaDetail/insert" class="row">
      <div class="col-3 ">
        <label for="staticEmail2">No. pemeriksaan</label>
        <input type="text" name="id_periksa" readonly class="form-control-plaintext" id="staticEmail2" value="<?= $data['detail']['id'] ?>">
      </div>
      <div class="col-3 ">
        <label for="inputPassword2">Obat</label>
        <select name="id_obat" class="form-select">
          <?php foreach ($data['obat'] as $obat) {  ?>
            <option value="<?= $obat['id']; ?>"><?= $obat['nama_obat']; ?></option>
          <?php } ?>
        </select>
      </div>
      <div class="col-3 ">
        <label for="jumlah">jumlah</label>
        <input type="number" class="form-control" name="jumlah" id="jumlah" value="">
      </div>
      <div class="col-3 mt-4">
        <button type="submit" class="btn btn-primary">Confirm identity</button>
      </div>
    </form>
  </div>
</div>
<div class="row">
  <div class="col-8">
    <table class="table">
      <thead>
        <tr>

          <th scope="col">No.</th>
          <th scope="col">Obat</th>
          <th scope="col">Harga</th>
          <th scope="col">Jumlah</th>
          <th scope="col">Subtotal</th>
        </tr>
      <tbody>

        <?php
        $b_obat = $data['total']['tot'];
        $b_jasa = intval($data['detail']['tarif']);
        $total_bayar = $b_obat + $b_jasa;
        $id = $data['detail']['id']
        ?>
        </thead>
        <?php
        $no = 1;
        foreach ($data['data'] as $data) {  ?>

          <tr>
            <th scope="row"><?= $no++; ?></th>
            <td><?= $data['nama_obat']; ?></td>
            <td><?= $data['harga']; ?></td>
            <td><?= $data['jml']; ?></td>
            <td><?= $s = $data['harga'] * $data['jml']; ?></td>

          </tr>
        <?php } ?>

      </tbody>
    </table>
  </div>
  <div class="col-4">
    <div class="row">
      <table style="border-left: 1px solid;" class="table">

        <form action="<?= BASE_URL ?>/transaksi/create" method="post">
          <th>Rincian</th>
          <td><input name="id" hidden value="<?= $id ?>"></td>
          <tr>
            <td>B. Obat</th>
            <td><?= "Rp " . number_format($b_obat, 0, ',', '.'); ?></td>
          </tr>
          <tr>
            <td>B. Tindakan</td>
            <td><?= "Rp " . number_format($b_jasa, 0, ',', '.'); ?></td>
          </tr>
          <tr>
            <td>Total</td>
            <td><?= "Rp " . number_format($total_bayar, 0, ',', '.'); ?></td>
          </tr>
          <tr>
            <td><input name="total" hidden value="<?= $total_bayar ?>"></td>
            <td>
              <button type="submit" class="btn btn-primary">Proses</button>
            </td>
        </form>
        </tr>
      </table>
    </div>
  </div>
</div>