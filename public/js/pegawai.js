$(document).ready(function () {
  $(".tombolModal").on("click", function () {
    $("#modalLabel").html("Tambah Data Pegawai");
    $(".modal-footer button[type=submit]").html("Simpan");
    $("#id").val("");
    $("#nip").val("");
    $("#nama").val("");
    $("#jabatan").val("");
    $("#poli").val("");
    $("#alamat").val("");
    $("#no_hp").val("");
  });
  $(".tampilModalUbah").on("click", function () {
    $("#modalLabel").html("Edit Data Pegawai");
    $(".modal-footer button[type=submit]").html("Edit");
    $(".modal-body form").attr(
      "action",
      "http://localhost/klinik/public/pegawai/update"
    );
    const id = $(this).data("id");
    $.ajax({
      url: "http://localhost/klinik/public/pegawai/getId",
      data: { id: id },
      method: "post",
      dataType: "json",
      success: function (data) {
        $("#id").val(data.id);
        $("#nip").val(data.nip);
        $("#nama").val(data.nama);
        $("#jk").val(data.jk);
        $("#jabatan").val(data.jabatan);
        $("#poli").val(data.poli);
        $("#alamat").val(data.alamat);
        $("#no_hp").val(data.no_hp);
      },
    });
  });
});
