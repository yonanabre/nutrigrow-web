<?php 
include_once 'cdn.php';
?>

<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="css/header.css">
</head>

<body style="width: 100%;">
  <div class="navbar sticky-top navbar-expand-lg" style="padding-left: 100px; background-color: white;">
    <!-- LOGO -->
    <img class="logo" src="images/bmm_logo.png">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse sticky-top navbar-collapse shift" id="navbarSupportedContent" style="font-family: sans-serif;  color: green;">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item ">
          <a class="nav-link" href="index.php">HOME</a>
        </li>

        <div class="dropdown">
          <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <a href="perusahaan.php">PERUSAHAAN</a>
          </button>

          <div class="dropdown-menu dropdown-multicol2" aria-labelledby="dropdownMenuButton" >
            <div class="dropdown-col">
              <a class="dropdown-item" href="profil-perusahaan.php">Profil Perusahaan</a><div class="dropdown-divider"></div>
              <a class="dropdown-item" href="profil-bisnis.php">Profil Bisnis</a><div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Visi Misi</a><div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Managemen</a><div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Struktur</a>
            </div>

            <div class="dropdown-col">
              <a class="dropdown-item" href="#">Direksi</a><div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Nilai Budaya</a><div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Makna Logo</a><div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Anak Perusahaan &amp; Afilasi</a><div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Sertifikat</a>
            </div>
          </div>
        </div>

        <div class="dropdown">
          <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <a href="produk.php">PRODUK</a>
          </button>

          <div class="dropdown-menu dropdown-multicol2" aria-labelledby="dropdownMenuButton">
            <div class="dropdown-col">
              <a class="dropdown-item"><strong>Nutrigrow® Plus</strong></a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="tentang-nutrigrow-plus.php">Tentang Nutrigrow® Plus</a>
              <a class="dropdown-item" href="jenis-nutrigrow-plus.php">Jenis Nutrigrow® Plus</a><br>

              <a class="dropdown-item"><strong>Fitgrow™</strong></a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="tentang-fitgrow.php">Tentang Fitgrow™</a>
              <a class="dropdown-item" href="jenis-fitgrow.php">Jenis Fitgrow™</a>

            </div>
            <div class="dropdown-col">
              <a class="dropdown-item"><strong>Bellium™</strong></a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="tentang-bellium.php">Tentang Bellium™</a>
              <a class="dropdown-item" href="manfaat-bellium.php">Manfaat Bellium™</a><br>

              <a class="dropdown-item"><strong>Harga &amp; Pemasaran</strong></a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="harga-nutrigrow-plus.php">Harga Nutrigrow® Plus</a>
              <a class="dropdown-item" href="harga-fitgrow.php">Harga Fitgrow™</a>
            </div>
          </div>
        </div>

        <div class="dropdown">
          <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <a>GALERI</a>
          </button>
          <div class="dropdown-menu dropdown-multicol2" aria-labelledby="dropdownMenuButton">
            <div class="dropdown-col">
              <a class="dropdown-item"><strong>Nutrigrow® Plus</strong></a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="foto-nutrigrow-plus.php">Foto</a>
              <a class="dropdown-item" href="testimoni-nutrigrow-plus.php">Testimoni</a>
            </div>
            <div class="dropdown-col">
              <a class="dropdown-item"><strong>Fitgrow™</strong></a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="foto-fitgrow.php">Foto</a>
              <a class="dropdown-item" href="testimoni-fitgrow.php">Testimoni</a>
            </div>
          </div>
        </div>

        <li class="nav-item">
          <a class="nav-link" href="tips-news.php">Tips &amp; News</a>
        </li>

        <li class="nav-item ">
          <a class="nav-link" href="faq.php">FAQ</a>
        </li>

        <li class="nav-item ">
          <a class="nav-link" href="contact-us.php">Contact</a>
        </li>
      </ul>
    </div>
  </div>

  <div class="header">
    <div style="float: center; padding-left: 100px; padding-top: 10px; padding-bottom: 15px;">
      <a style="color: red"><b>PHONE / WHATSAPP:</b></a> +62 821 3245 4545 
      <a style="color: green"><b>OPENING HOURS:</b></a> 09:00AM-04:00PM
    </div>
    <div style="float:right;">
      <form action="">
        <input type="search">
        <i class="fa fa-search"></i>
      </form>
    </div>
    
  </div>
</body>
</html>