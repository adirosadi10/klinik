<?php
// session_start(); // ini adalah kode untuk memulai session
require_once('../../config.php');

if (isset($_POST['login'])) { // mengecek apakah form variabelnya ada isinya
  $username = $_POST['username']; // isi varibel dengan mengambil data username pada form
  $password = $_POST['password']; // isi variabel dengan mengambil data password pada form

  try {
    $sql = "SELECT * FROM login WHERE username = :username AND password = :password"; // buat queri select
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':username', $username);
    $stmt->bindParam(':password', $password);
    $stmt->execute(); // jalankan query

    $count = $stmt->rowCount(); // mengecek row
    if ($count == 1) { // jika rownya ada 
      $_SESSION['username'] = $username; // set sesion dengan variabel username
      // header("Location: index.php"); // lempar variabel ke tampilan index.php
      header('Location: ' . BASE_URL . '/home');

      return;
    } else {
      echo "Anda tidak dapat login";
    }
  } catch (PDOException $e) {
    echo $e->getMessage();
  }
}

?>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <title>Klinik Sehat | <?= $data['title']; ?></title>
</head>

<body>
  <div class="container" style="padding: 150px;">
    <div class="row justify-content-center">
      <div class="row mt-3">
        <?php Flasher::flash(); ?>
      </div>
      <div class="col-lg-6" style="border: 1px solid; border-radius: 10px; padding: 30px">
        <form class="element-form" action="" method="POST">
          <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input type="email" class="form-control" id="email" require name="email">
          </div>
          <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" require id="password" name="password">
          </div>
          <div class="mb-3">
            <button type="submit" name="login" class="btn btn-primary">Submit</button>
          </div>
        </form>
      </div>
    </div>
  </div>