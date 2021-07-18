<div class="container-fluid">

  <div class="card">
    <div class="card-body">
      <div class="row">
        <div class="col-auto">
          <div class="row">
            <label for="awal">Tgl. Awal</label>
            <input type="date" name="awal" id="awal">
          </div>
        </div>
        <div class="col-auto mx-2">
          <div class="row">
            <label for="akhir">Tgl. Akhir</label>
            <input type="date" name="akhir" id="akhir">
          </div>
        </div>
        <div class="col-auto">
          <div class="row">
            <a href="" class="btn btn-primary mt-3" target="_blank" onclick="this.href='cetakPeriodik/'+document.getElementById('awal').value+'/'+document.getElementById('akhir').value" class="btn btn-primary">
              Cetak
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>