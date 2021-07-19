<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?= BASE_URL; ?>/css/style.css">
  <title>Klinik Sehat | <?= $data['title']; ?></title>
</head>

<body>
  <div class="container-login">
    <div class="wrapper-login">
      <div class="navbar-brand">
        <img src="<?= BASE_URL . "/img/logo.ico" ?>" style="width:50px" alt="">
        <h2>Klinik sehat</h2>
      </div>
      <form action="<?= BASE_URL; ?>/login/index" method="post">
        <input type="text" name="username" id="username" placeholder="username *">
        <span class="invalidFeedback">
          <?= $data['usernameError']; ?>
        </span>
        <input type="password" name="password" id="password" placeholder="password *">
        <span class="invalidFeedback">
          <?= $data['passwordError']; ?>
        </span>
        <button id="submit" name="submit" type="submit">Log In</button>
      </form>
    </div>
  </div>
</body>

</html>