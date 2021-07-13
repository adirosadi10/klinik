$(document).ready(function () {
  $(".tombolModal").on("click", function () {
    $("#modalLabel").html("Tambah Data Tindakan");
    $(".modal-footer button[type=submit]").html("Simpan");
    $("#id").val("");
    $("#tindakan").val("");
    $("#tarif").val("");
  });
  $(".tampilModalUbah").on("click", function () {
    $("#modalLabel").html("Edit Data tindakan");
    $(".modal-footer button[type=submit]").html("Edit");
    $(".modal-body form").attr(
      "action",
      "http://localhost/klinik/public/tindakan/update"
    );
    const id = $(this).data("id");
    $.ajax({
      url: "http://localhost/klinik/public/tindakan/getId",
      data: { id: id },
      method: "post",
      dataType: "json",
      success: function (data) {
        $("#id").val(data.id);
        $("#tindakan").val(data.tindakan);
        $("#tarif").val(data.tarif);
      },
    });
  });
});
