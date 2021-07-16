<div class="card">
  <div class="card-body">
    <form class="row g-3">
      <div class="col-auto">
        <input type="date" class="form-control" id="awal" name="awal" required>
      </div>
      <div class="col-auto">
        <label for="date">Sampai</label>
      </div>
      <div class="col-auto">
        <input type="date" class="form-control" id="akhir" name="akhir" required>
      </div>
      <div class="col-auto">
        <a href="" target="_blank" onclick="this.href='/cetak-bulanan/'+document.getElementById('awal').value+'/'+document.getElementById('akhir').value" class="btn btn-primary">
          Cetak
        </a>
      </div>
    </form>
  </div>
</div>
</div>