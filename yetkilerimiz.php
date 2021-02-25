<?php 
require_once 'header.php';

$yetkisor=$db->prepare("SELECT * FROM yetkilerimiz where yetki_id=:id");
$yetkisor->execute(array(
  'id' => 1
  ));
$yetkicek=$yetkisor->fetch(PDO::FETCH_ASSOC);


?>
<head>
  <style type="text/css">
    .col-md-10 p{
      color: #383838;
    }
    #map {
      display: none;
    }
     .contactInput{
      border-color: transparent;
    }

    .page-title-section h1 {
      font-size: 30px;
    }
    .accordion-body, .text-white > p{
      color:#383838;
    }
    .page-title-section {
      padding: 120px 0px 28px 0px;
    }
    </style>
</head>

<!-- Page Title START -->
<div class="page-title-section" style="background-image: url(img/slider/slide11.jpg);">
  <div class="container">
    <h1>Hakkımızda</h1>
    <ul>
      <li><a href="index.html">Home</a></li>
      <li><a href="about-2.html">About</a></li>
    </ul>
  </div>
</div>
<!-- Page Title END -->


<!-- Info & Feature Section START -->
<div class="section-block">
  <div class="container">
    <div class="row">
      <div class="col-md-12 col-sm-12 col-12 offset-md-1">
        <img src="img/yetkilerimiz-logo-3.jpg" class="rounded-border" alt="img">
      </div>
      <div class="col-md-12 col-sm-12 col-12">
        <div class="pl-30-md">
          <div class="section-heading">
            <h5><?php echo $yetkicek['yetki_baslik'] ?></h5>
          </div>
          <div class="section-heading-line-left"></div>
          <br>
          
          <div class="text-content-big mt-20">
            <p>
              <?php echo $yetkicek['yetki_icerik']; ?>
            </p>
          </div>
          
        </div>
      </div>
    </div>


  </div>
</div>
<!-- Info & Feature Section END -->




<!-- Notice Section START -->
<div class="notice-section notice-section-sm border-top">
  <div class="container">
    <div class="row">
      <div class="col-md-9 col-sm-9 col-12">
        <div class="mt-5">
          <h6>Hizmetlerimiz hakkında daha fazla bilgi almak için lütfen bizimle iletişime geçiniz. </h6>
          <div class="section-heading-line-left"></div>
        </div>
      </div>
      <div class="col-md-3 col-sm-3 col-12">
        <div class="mt-10 right-holder-md text-center">
          <a href="#" class="primary-button" style="font-size: 14px; padding: 13px 25px 13px 25px;">Bize Ulaşın</a>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Notice Section END -->






<?php require_once 'footer.php'; ?>