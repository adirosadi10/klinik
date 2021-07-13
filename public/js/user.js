$(document).ready(function () {
  $(".tombolModal").on("click", function () {
    $("#modalLabel").html("Tambah Data User");
    $(".modal-footer button[type=submit]").html("Simpan");
    $("#groupPass").attr("class", "visually-true");
    $("#id").val("");
    $("#id_pegawai").val("");
    $("#username").val("");
    $("#email").val("");
    $("#password").val("");
    $("#level").val("");
  });
  $(".tampilModalUbah").on("click", function () {
    $("#modalLabel").html("Edit Data User");
    $(".modal-footer button[type=submit]").html("Edit");
    $("#groupPass").attr("class", "visually-hidden");
    $(".modal-body form").attr(
      "action",
      "http://localhost/klinik/public/user/update"
    );
    const id = $(this).data("id");
    $.ajax({
      url: "http://localhost/klinik/public/user/getId",
      data: { id: id },
      method: "post",
      dataType: "json",
      success: function (data) {
        $("#id").val(data.id);
        $("#id_pegawai").val(data.id_pegawai);
        $("#username").val(data.username);
        $("#email").val(data.email);
        $("#level").val(data.level);
      },
    });
  });
});
