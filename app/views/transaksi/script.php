<script>
  function kurang() {
    var dbil1 = document.getElementById('total').value
    var dbil2 = document.getElementById('bayar').value
    var result = parseFloat(dbil2) - parseFloat(dbil1);
    if (!isNaN(result)) {
      document.getElementById('kembali').value = result;
    }
  }

  function valid() {
    if (document.getElementById('kembali').value < 0) {
      alert('Pembayaran kurang !!!!')
      document.getElementById('submit').type = "button";
    } else {
      document.getElementById('submit').type = "submit";
    }
  }
</script>