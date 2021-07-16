$(document).ready(function () {
  $(".tampilModalUbah").on("click", function () {
    $("#modalLabel").html("Pembayaran".data.no_transaksi);
    $(".modal-footer button[type=submit]").html("Bayar");
    $(".modal-body form").attr(
      "action",
      "http://localhost/klinik/public/transaksi/update"
    );
    const id = $(this).data("id");
    $.ajax({
      url: "http://localhost/klinik/public/transaksi/getId",
      data: { id: id },
      method: "post",
      dataType: "json",
      success: function (data) {
        $("#id").val(data.id);
        $("#total").val(data.total);
        $("#bayar").val(data.bayar);
        $("#kembali").val(data.kembali);
      },
    });
  });
});
