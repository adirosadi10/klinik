$(document).ready(function () {
  $(".tampilModalUbah").on("click", function () {
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
        $("#no_transaksi").val(data.no_transaksi);

        $("#id").val(data.id);
        $("#total").val(data.total);
      },
    });
  });
});
