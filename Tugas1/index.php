<?php 
$nama = "Achmad Putra Arifky";
$tempatTanggalLahir = "Surabaya, 9 April 2002";
$kampus = "ITATS Surabaya";
$semester = 5;
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
          <p>
            hallo, nama saya <? $nama ?> saya berasal dari Surabaya
            tempat tanggal lahir saya adalah <?=$tempatTanggalLahir ?> saya berkuliah di kampus <?= $kampus ?> 
            Mahasiswa Semester <?= $semester ?>. saya juga menjabat sebagai asisten
            lab RPL di kampus ITATS Surabaya. pada kesempatan mengikuti
            kegiatan kampus merdeka saya mendaftar di fullstack karena saya
            ingin mengembangkan rekayasa perangkat lunak saya terutama
            pemrograman website dengan baik.
          </p>
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