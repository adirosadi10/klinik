$(document).ready(function () {
  $(".tampilModalProses").on("click", function () {
    $("#modalLabel").html("Tindakan yang dilakukan");
    $(".modal-footer button[type=submit]").html("Proses");
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
        $("#no_daftar").val(data.no_daftar);
      },
    });
  });
});
