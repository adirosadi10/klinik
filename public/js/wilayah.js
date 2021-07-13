$(document).ready(function () {
  $(".tombolModal").on("click", function () {
    $("#modalLabel").html("Tambah Data Wilayah");
    $(".modal-footer button[type=submit]").html("Simpan");
    $("#id").val("");
    $("#zona").val("");
    $("#provinsi").val("");
    $("#distrik").val("");
    $("#kecamatan").val("");
    $("#kelurahan").val("");
  });
  $(".tampilModalUbah").on("click", function () {
    $("#modalLabel").html("Edit Data Wilayah");
    $(".modal-footer button[type=submit]").html("Edit");
    $(".modal-body form").attr(
      "action",
      "http://localhost/klinik/public/wilayah/update"
    );
    const id = $(this).data("id");
    $.ajax({
      url: "http://localhost/klinik/public/wilayah/getId",
      data: { id: id },
      method: "post",
      dataType: "json",
      success: function (data) {
        $("#id").val(data.id);
        $("#zona").val(data.zona);
        $("#provinsi").val(data.provinsi);
        $("#distrik").val(data.distrik);
        $("#kecamatan").val(data.kecamatan);
        $("#kelurahan").val(data.kelurahan);
      },
    });
  });
});
