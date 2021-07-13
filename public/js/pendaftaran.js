$(document).ready(function () {
  $(".tombolModal").on("click", function () {
    $("#modalLabel").html("Tambah Data Pendaftaran");
    $("#tmbl").attr("hidden", false);
    $("#id").val("").attr("readonly", false);
    $("#no_daftar").val("").attr("readonly", false);
    $("#nama_pasien").val("").attr("readonly", false);
    $("#jk").val("").attr("readonly", false);
    $("#tmp_lahir").val("").attr("readonly", false);
    $("#tgl_lahir").val("").attr("readonly", false);
    $("#zona").val("").attr("readonly", false);
    $("#alamat").val("").attr("readonly", false);
    $("#no_hp").val("").attr("readonly", false);
  });
  $(".tampilModalDetail").on("click", function () {
    $("#modalLabel").html("Detail Data Pendaftaran");
    $("#tmbl").attr("hidden", "true");
    $(".modal-body form").attr("action", "");
    const id = $(this).data("id");
    $.ajax({
      url: "http://localhost/klinik/public/Pendaftaran/getId",
      data: { id: id },
      method: "post",
      dataType: "json",
      success: function (data) {
        $("#id").val(data.id).attr("readonly", true);
        $("#no_daftar").val(data.no_daftar).attr("readonly", true);
        $("#nama_pasien").val(data.nama_pasien).attr("readonly", true);
        $("#jk").val(data.jk).attr("readonly", true);
        $("#tmp_lahir").val(data.tmp_lahir).attr("readonly", true);
        $("#tgl_lahir").val(data.tgl_lahir).attr("readonly", true);
        $("#zona").val(data.zona).attr("readonly", true);
        $("#alamat").val(data.alamat).attr("readonly", true);
        $("#no_hp").val(data.no_hp).attr("readonly", true);
      },
    });
  });
});
