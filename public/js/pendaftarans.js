$(document).ready(function () {
  $(".tombolModal").on("click", function () {
    $("#modalLabel").html("Tambah Data Pendaftaran");
    $(".modal-footer button[type=submit]").html("Simpan");
    $("#id").val("");
    $("#Gno_daftar").attr("hidden", true);
    $("#no_daftar").val("");
    $("#Gnama_pasien").attr("hidden", false);
    $("#Gjk").attr("hidden", false);
    $("#Gtmp_lahir").attr("hidden", false);
    $("#Gtgl_lahir").attr("hidden", false);
    $("#Gid_wilayah").attr("hidden", false);
    $("#Galamat").attr("hidden", false);
    $("#Gno_hp").attr("hidden", false);
  });
  $(".tampilModalProses").on("click", function () {
    $("#modalLabel").html("Proses Pendaftaran");
    $(".modal-footer button[type=submit]").html("Proses");
    $(".modal-body form").attr(
      "action",
      "http://localhost/klinik/public/pendaftaran/update"
    );
    const id = $(this).data("id");
    $.ajax({
      url: "http://localhost/klinik/public/pendaftaran/getId",
      data: { id: id },
      method: "post",
      dataType: "json",
      success: function (data) {
        $("#id").val(data.id);
        $("#Gno_daftar").attr("hidden", false);
        $("#no_daftar").val(data.no_daftar).attr("readonly", true);
        $("#Gnama_pasien").attr("hidden", true);
        $("#Gjk").attr("hidden", true);
        $("#Gtmp_lahir").attr("hidden", true);
        $("#Gtgl_lahir").attr("hidden", true);
        $("#Gid_wilayah").attr("hidden", true);
        $("#Galamat").attr("hidden", true);
        $("#Gno_hp").attr("hidden", true);
      },
    });
  });
});
