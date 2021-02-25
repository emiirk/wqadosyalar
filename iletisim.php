<?php require_once 'header.php'; ?>
<head>
  <style>
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
    <h1>İletişim</h1>
    <ul>
      <li><a href="index.html">Home</a></li>
      <li><a href="about-2.html">About</a></li>
    </ul>
  </div>
</div>
<!-- Page Title END -->


<!-- Contact Section START -->
<div class="section-block">
  <div class="container">
    <div class="row">

      <div class="col-md-7 col-sm-7 col-12">
        <?php 

        if (@$_GET['durum']=="ok") {?>

        <div class="alert alert-success" role="alert">
          Mesajınız başarı ile tarafımıza ulaştı. Mesajınıza en kısa sürede yanıt verilecektir.
        </div>

        <?php } elseif (@$_GET['durum']=="no") {?>

        <div class="alert alert-danger" role="alert">
          Üzgünüz! Mesajınız tarafımıza ulaşmadı. Lütfen daha sonra tekrar deneyiniz.
        </div>

        <?php } ?>
        <div class="section-heading mt-15">
          <h4>Bize Ulaşın</h4>
          <div class="section-heading-line-left"></div>
        </div>
        <div class="contact-form-box mt-30">
          <!-- Form START -->
          <form action="admin/netting/adminislem.php" method="POST" class="contact-form">
            <div class="row">
              <div class="col-md-12">
                <input type="text" name="mesaj_konu" placeholder="Konu">
              </div>

              <div class="col-md-6 col-sm-6 col-12">
                <input type="text" name="mesaj_isim" placeholder="İsminiz">
              </div>
              <div class="col-md-6 col-sm-6 col-12">
                <input type="email" name="mesaj_mail" placeholder="example@example.com">
              </div>

              <div class="col-md-12">
                <textarea name="mesaj_icerik" placeholder="Mesajınızı buraya yazınız."></textarea>
              </div>
              <div class="col-md-12 mb-30">
                <div class="center-holder">
                  <button type="submit" name="mesajGonder">Mesaj Gönder</button>
                </div>
              </div>
            </div>
          </form>
          <!-- Form END -->
        </div>
      </div>

      <div class="col-md-5 col-sm-5 col-12">
        <div class="contact-info-box">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-12">
              <div class="contact-info-section">
                <div class="row">
                  <div class="col-md-2 col-sm-2 col-4 center-holder">
                    <i class="fa fa-phone"></i>
                  </div>
                  <div class="col-md-10 col-sm-10 col-8">
                    <h4>Başvuru</h4>
                    <p>Tel: +90 212 660 16 19</p>
                    <p>Fax: +90 212 660 16 19</p>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-12 col-sm-12 col-12">
              <div class="contact-info-section">
                <div class="row">
                  <div class="col-md-2 col-sm-2 col-4 center-holder">
                    <i class="fa fa-envelope-open"></i>
                  </div>
                  <div class="col-md-10 col-sm-10 col-8">
                    <h4>Bize Yazın</h4>
                    <p>info@wqacert.com</p>
                    <p>basvuru@wqacert.com</p>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-12 col-sm-12 col-12">
              <div class="contact-info-section">
                <div class="row">
                  <div class="col-md-2 col-sm-2 col-4 center-holder">
                    <i class="fa fa-globe"></i>
                  </div>
                  <div class="col-md-10 col-sm-10 col-8">
                    <h4>İletişim Adresi</h4>
                    <p>Yeşilköy Mh. Atatürk Cad. Egs Business Park No:12/1</p>
                    <p>Bakırköy/İstanbul</p>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-12 col-sm-12 col-12">
              <div class="contact-info-section">
                <div class="row">
                  <div class="col-md-2 col-sm-2 col-4 center-holder">
                    <i class="fa fa-clock-o"></i>
                  </div>
                  <div class="col-md-10 col-sm-10 col-8">
                    <h4>Çalışma Saatleri</h4>
                    <p>Pazartesi–Cumartesi: 09:00–18:00</p>
                    <p>Pazar:KAPALI</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Contact Section END -->


<!-- Map START -->
<div id="map" class="mt-10">
  <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBk25E4mNfVIEt3tNl3K1HwNZVruVoFBlA&callback=initMap">
  </script>
</div>
<!-- Map START -->


<?php require_once 'footer.php'; ?>