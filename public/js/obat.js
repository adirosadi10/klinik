$(document).ready(function () {
  $(".tombolModal").on("click", function () {
    $("#modalLabel").html("Tambah Data Obat");
    $(".modal-footer button[type=submit]").html("Simpan");
    $("#id").val("");
    $("#no_obat").val("");
    $("#nama_obat").val("");
    $("#jenis").val("");
    $("#harga").val("");
    $("#stok").val("");
  });
  $(".tampilModalUbah").on("click", function () {
    $("#modalLabel").html("Edit Data Obat");
    $(".modal-footer button[type=submit]").html("Edit");
    $(".modal-body form").attr(
      "action",
      "http://localhost/klinik/public/obat/update"
    );
    const id = $(this).data("id");
    $.ajax({
      url: "http://localhost/klinik/public/obat/getId",
      data: { id: id },
      method: "post",
      dataType: "json",
      success: function (data) {
        $("#id").val(data.id);
        $("#no_obat").val(data.no_obat);
        $("#nama_obat").val(data.nama_obat);
        $("#jenis").val(data.jenis);
        $("#harga").val(data.harga);
        $("#stok").val(data.stok);
      },
    });
  });
});
