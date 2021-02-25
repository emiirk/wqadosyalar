<?php require_once 'header.php'; ?>

<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

  <style type="text/css">
    .page-title-section {
      padding: 120px 0px 28px 0px;
    }
    .page-title-section h1 {
      text-align: left;
    }
    .page-title-section h1 {
      font-size: 30px;
    }
    .tab-pane h3 {
      color: #d21e2b;
    }
    .section-heading p {
      font-size: 17px;
      color: #757575;
    }
    .tabMenu{
      color:white;
      font-size: 14px; 
      background-color: #d21e2b;
    }
    .nav>li>a:focus, .nav>li>a:hover {
      text-decoration: none;
      background-color: #a90712;
      color: white;
    }
  </style>
</head>
<!-- Page Title START -->
<div class="page-title-section" style="background-image: url(img/slider/slide11.jpg);">
  <div class="container text-left">
    <h1>Eğitim Hizmetlerimiz</h1>
    <ul>
      <li><a href="index.php">Anasayfa</a></li>
      <li><a href="hakkimizda.php">Hakkımızda</a></li>
    </ul>
  </div>
</div>
<!-- Page Title END -->


<!-- Service Single START -->
<div class="section-block">
  <div class="container">
    <div class="row">


      <!-- Right Side START -->
      <div class="col-md-12 col-sm-12 col-12">
        <div class="services-single-right">
          <div class="text-content-big mt-20">
            <div class="section-heading">
              <p>İçerisinde bulunduğumuz Covid-19 pandemi dönemi sebebiyle genel katılıma açık eğitimlerimiz Zoom platformu üzerinden gerçekleştirilmektedir.

                Eğitimini verdiğimiz standartlar aşağıdaki gibidir.</p>
              </div>
              <div class="section-heading-line-left"></div>
              <div class="container mt-25">
                <ul class="nav nav-tabs">
                  <li class="active"><a class="tabMenu" data-toggle="tab" href="#home">ISO 9001</a></li>
                  <li><a class= "tabMenu" data-toggle="tab" href="#menu1">ISO 14001</a></li>
                  <li><a class= "tabMenu" data-toggle="tab" href="#menu2">ISO 22000</a></li>
                  <li><a class= "tabMenu" data-toggle="tab" href="#menu3">ISO 45001</a></li>
                </ul>

                <div class="tab-content">
                  <div id="home" class="tab-pane fade in active">
                    <h3>Kalite Yönetim Sistemi</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                  </div>
                  <div id="menu1" class="tab-pane fade">
                    <h3>Menu 1</h3>
                    <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                  </div>
                  <div id="menu2" class="tab-pane fade">
                    <h3>Menu 2</h3>
                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
                  </div>
                  <div id="menu3" class="tab-pane fade">
                    <h3>Menu 3</h3>
                    <p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                  </div>
                </div>
              </div>
            </div>


          </div>
        </div>
        <!-- Right Side END -->
      </div>
    </div>
  </div>
  <!-- Service Single END -->

  <?php require_once 'footer-top.php'; ?>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <?php require_once 'footer.php'; ?>