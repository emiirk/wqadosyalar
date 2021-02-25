<?php 
ob_start();
session_start();
include 'admin/netting/baglan.php';
//include 'nedmin/production/fonksiyon.php';
//Belirli veriyi seçme işlemi
$ayarsor=$db->prepare("SELECT * FROM ayar where ayar_id=:id");
$ayarsor->execute(array(
  'id' => 0
  ));
$ayarcek=$ayarsor->fetch(PDO::FETCH_ASSOC);



?>
<!DOCTYPE html>
<html lang="zxx">
<head>
  <title>Home 10</title>
  <meta charset="UTF-8">
  <link rel="shortcut icon" href="img/logos/wqalogo.png"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

  <!-- Bootstrap CSS-->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

  <!-- Font-Awesome -->
  <link rel="stylesheet" type="text/css" href="css/font-awesome.css">

  <!-- Icomoon -->
  <link rel="stylesheet" type="text/css" href="css/icomoon.css">

  <!-- Slider -->
  <link rel="stylesheet" type="text/css" href="css/swiper.min.css">
  <link rel="stylesheet" type="text/css" href="css/rev-settings.css">

  <!-- Animate.css -->
  <link rel="stylesheet" href="css/animate.css">

  <!-- Color Switcher -->
  <link rel="stylesheet" type="text/css" href="css/switcher.css">

  <!-- Owl Carousel  -->
  <link rel="stylesheet" href="css/owl.carousel.css">

  <!-- Main Styles -->
  <link rel="stylesheet" type="text/css" href="css/default.css">
  <link rel="stylesheet" type="text/css" href="css/styles.css" id="colors">

  <!-- Fonts Google -->
  <link href="https://fonts.googleapis.com/css?family=Fira+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet">
</head>
<body>


  <!-- Preloader Start-->
  <div id="preloader">
    <div class="row loader">
      <div class="loader-icon"></div>
    </div>
  </div>
  <!-- Preloader End -->

  <!-- Navbar START -->
  <header id="nav-transparent">
    <nav id="navigation4" class="container navigation">
      <div class="nav-header">
        <a class="nav-brand" href="index.html">
          <img src="img/logos/wqalogo.png" alt="logo"  class="main-logo" id="light_logo" style="width: 100px;">
          <img src="img/logos/wqalogo.png" alt="logo" class="main-logo" id="main_logo" style="width: 100px;">
        </a>
        <div class="nav-toggle"></div>
      </div>
      <div class="nav-menus-wrapper">
        <ul class="nav-menu align-to-right">
          <li><a href="index.php">Anasayfa</a>
          </li>
          <li><a href="#">KURUMSAL</a>
            <ul class="nav-dropdown">
              <li><a href="hakkimizda.php">Hakkımızda</a></li>
              <li><a href="yetkilerimiz.php">Yetkilerimiz</a></li>
              <li><a href="organizasyon-semasi.php">Organizasyon Şeması</a></li>
              <li><a href="kalite-politikasi.php">Kalite Politikamız</a></li>
              <li><a href="tarafsizlik-beyani.php">Tarafsızlık Beyanımız</a></li>
            </ul>
          </li>
          <li><a href="sistem-belgelendirme.php">SİSTEM BELGELENDİRME</a>
            <ul class="nav-dropdown">
              <li><a href="sistem-belgelendirme-detay.php">ISO 9001 Kalite Yönetim Sistemi</a></li>
              <li><a href="home-5.html">Home Page 05</a></li>
              <li><a href="home-6.html">Home Page 06</a></li>
            </ul>
          </li>
          <li><a href="urun-belgelendirme.php">ÜRÜN BELGELENDİRME</a>
            <ul class="nav-dropdown">
              <li><a href="home-7.html">FSC Belgelendirme</a></li>
              <li><a href="home-8.html">Home Page 08</a></li>
              <li><a href="home-9.html">Home Page 09</a></li>
            </ul>
          </li>
          <li><a href="egitim.php">EĞİTİM</a></li>
          <li><a href="blog.php">BLOG</a></li>
          <li><a href="sss.php">S.S.S</a></li>
          <li><a href="iletisim.php">İLETİŞİM</a></li>
          
          
        </ul>
      </div>
    </nav>
  </header>
<!-- Navbar END -->