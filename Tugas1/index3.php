<?php
$nama = "Achmad Putra Arifky";
$instagram = "@mamadputra12";
$linkedin = "www.linkedin.com/ahmad-arifki";
$noWa = "0858-5009-3110";
$github = "AchmadPutraA12";
$email = "062021107398@mhs.itats.ac.id";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <title>Bootstrap 4, from LayoutIt!</title>

  <meta name="description" content="Source code generated using layoutit.com" />
  <meta name="author" content="LayoutIt!" />

  <link href="css/bootstrap.min.css" rel="stylesheet" />
  <link href="css/style.css" rel="stylesheet" />
</head>

<body>
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <nav class="navbar navbar-toggleable-sm navbar-light bg-light static-top">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="navbar-toggler-icon"></span>
          </button>
          <a class="navbar-brand" href="https://labinformatika.itats.ac.id/informasi?lab=rpl" target="_blank"><img src="images/rpl.png" style="height: 40px" /></a>
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="navbar-nav ml-md-auto">
              <li class="nav-item active">
                <a class="nav-link" href="index.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="index2.php">Portofolio</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="index3.php">Contact</a>
              </li>
            </ul>
          </div>
        </nav>
      </div>
    </div>
    <br /><br />
    <div class="row">
      <div class="col-md-3"></div>
      <div class="col-md-6">
        <div class="text-center">
          <img alt="Bootstrap Image Preview" src="images/achmad.jpg" class="rounded-circle" />
          <br /><br />
          <h3><?= $nama ?></h3>
          <br />
          <h5>Contact</h5>
        </div>
        <div class="row">
          <div class="col-md-3"></div>
          <div class="col-md-6">
            <address>
              <strong>Instagram : </strong>
              <a href="https://www.instagram.com/mamadputra12/" target="_blank"><?= $instagram ?></a>
              <br />
              <strong>Linkedin : </strong>
              <a href="https://www.linkedin.com/in/ahmad-arifki-15275724a/" target="_blank"><?= $linkedin ?></a><br />
              <strong>No Whatsapp : </strong>
              <?= $noWa ?>
              <br />
              <strong>Github : </strong>
              <a href="https://github.com/AchmadPutraA12" target="_blank"><?= $github ?></a>
              <br />
              <strong>Email : </strong>
              <?= $email ?>
            </address>
          </div>
          <div class="col-md-3"></div>
        </div>
      </div>
      <div class="col-md-3"></div>
    </div>
  </div>
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/scripts.js"></script>
</body>

</html>