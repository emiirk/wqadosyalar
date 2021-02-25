<?php 
require_once 'header.php';

$hakkimizdasor=$db->prepare("SELECT * FROM hakkimizda where hakkimizda_id=:id");
$hakkimizdasor->execute(array(
  'id' => 1
  ));
$hakkimizdacek=$hakkimizdasor->fetch(PDO::FETCH_ASSOC);

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
      <div class="col-md-6 col-sm-6 col-12">
        <img src="<?php echo $hakkimizdacek['hakkimizda_resimyol']; ?>" class="rounded-border shadow-primary" alt="img">
      </div>
      <div class="col-md-6 col-sm-6 col-12">
        <div class="pl-30-md">
          <div class="section-heading">
            <h4><?php echo $hakkimizdacek['hakkimizda_baslik']; ?></h4>
          </div>
          <div class="section-heading-line-left"></div>
          <div class="text-content-big mt-20">
            <p><?php echo $hakkimizdacek['hakkimizda_icerik']; ?></p>
          </div>
          <!--<div class="row mt-20">
            <div class="col-md-6">
              <ul class="primary-list">
                <li><i class="fa fa-caret-right"></i>Sistem Belgelendirme Hizmeti</li>
                <li><i class="fa fa-caret-right"></i>Ürün Belgelendirme Hizmeti</li>
                <li><i class="fa fa-caret-right"></i>Eğitim Hizmeti</li>
              </ul>
            </div>
            <div class="col-md-6">
              <ul class="primary-list">
                <li><i class="fa fa-caret-right"></i>Immigration consultant, Information</li>
                <li><i class="fa fa-caret-right"></i>Consultant pharmacist Creative</li>
              </ul>
            </div>
          </div>
          <div class="mt-35">
            <a href="#" class="primary-button button-sm mb-15-xs">Contact Us</a>
          </div>-->
        </div>
      </div>
    </div>

    <!-- Feature Boxes START -->
    <div class="row mt-35">
      <div class="col-md-4 col-sm-4 col-12">
        <div class="feature-flex-square">
          <div class="clearfix">
            <div class="feature-flex-square-icon">
              <i class="icon-monitor"></i>
            </div>
            <div class="feature-flex-square-content">
              <h4><a href="#">Sistem Belgelendirme Hizmeti</a></h4>
              <div class="mt-35">
                <a href="#" class="primary-button button-sm mb-15-xs">Daha Fazla Bilgi Al</a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-4 col-sm-4 col-12">
        <div class="feature-flex-square">
          <div class="clearfix">
            <div class="feature-flex-square-icon">
              <i class="icon-wallet"></i>
            </div>
            <div class="feature-flex-square-content">
              <h4><a href="#">Ürün Belgelendirme Hizmeti</a></h4>
              <div class="mt-35">
                <a href="#" class="primary-button button-sm mb-15-xs">Daha Fazla Bilgi Al</a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-4 col-sm-4 col-12">
        <div class="feature-flex-square">
          <div class="clearfix">
            <div class="feature-flex-square-icon">
              <i class="icon-clock"></i>
            </div>
            <div class="feature-flex-square-content">
              <h4><a href="#">Eğitim Hizmeti</a></h4>
              <div class="mt-35">
                <a href="#" class="primary-button button-sm mb-15-xs">Daha Fazla Bilgi Al</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Feature Boxes END -->
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