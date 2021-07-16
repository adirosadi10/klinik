$(document).ready(function () {
  $(".tampilModalProses").on("click", function () {
    $("#modalLabel").html("Edit Data Obat");
    $(".modal-footer button[type=submit]").html("Edit");
    $(".modal-body form").attr(
      "action",
      "http://localhost/klinik/public/periksa/update"
    );
    const id = $(this).data("id");
    $.ajax({
      url: "http://localhost/klinik/public/periksa/getId",
      data: { id: id },
      method: "post",
      dataType: "json",
      success: function (data) {
        $("#id").val(data.id);
        $("#id_daftar").val(data.id_daftar);
      },
    });
  });
});
