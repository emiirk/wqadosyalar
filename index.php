<?php require_once 'header.php'; ?>
<head>
  <style type="text/css">
    .features-button {
      background: #101010;
      color: #fff;
      font-size: 14px;
      font-weight: 500;
      border-radius: 50px;
      padding: 10px 15px 10px 15px;
      -webkit-transition: all .4s ease;
      -moz-transition: all .4s ease;
      transition: all .4s ease;
    }
    .features-button:hover {
      background: #101010;
      color: #fff;
      font-size: 15px;
      font-weight: 500;
      border-radius: 50px;
      padding: 10px 15px 10px 15px;
      -webkit-transition: all .4s ease;
      -moz-transition: all .4s ease;
      transition: all .4s ease;
    }
    .features-button:visited {
      background: #101010;
      color: #fff;
      font-size: 14px;
      font-weight: 500;
      border-radius: 50px;
      padding: 10px 15px 10px 15px;
      -webkit-transition: all .4s ease;
      -moz-transition: all .4s ease;
      transition: all .4s ease;
    }
    .feature-box-5 h4 {
      font-size: 21px;
    }
    .section-heading h3 {
      font-size: 30px;
    }
  </style>
</head>
<!-- Start revolution slider -->
<div class="rev-slider-long">
  <div class="rev_slider_wrapper fs-slider-wrap">
    <div id="rev_slider" class="rev_slider">
      <ul>

        <?php 

        $slidersor=$db->prepare("SELECT * FROM slider");
        $slidersor->execute();
        while($slidercek=$slidersor->fetch(PDO::FETCH_ASSOC)) { ?>
        <!-- Slide 1 -->
        <li data-delay="5000" data-transition="slidingoverlayleft" data-slotamount="7" data-masterspeed="2500" data-fsmasterspeed="1000" class="bg-black">

          <!-- Main image-->
          <img src="<?php echo $slidercek['slider_resimyol']; ?>" alt="" data-bgposition="top left" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg">

          <!-- Layer 1 -->
          <div class="slide-title tp-caption tp-resizeme text-center text-lg-left"
          data-x="['left','left','center','center']" data-hoffset="['35','35','0','0']"
          data-y="['middle','middle','middle','middle']" data-voffset="['-145','-145', '-150', '-350']"
          data-fontsize="['65','65', '60', '125']"
          data-fontweight="700"
          data-lineheight="['70','70', '70', '135']"
          data-width="['1200','991','650']"
          data-height="none"
          data-color="#fff"
          data-whitespace="normal"
          data-transform_idle="o:1;"
          data-transform_in="x:[105%];z:0;rX:45deg;rY:0deg;rZ:90deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power2.easeInOut;"
          data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
          data-mask_in="x:50px;y:0px;s:inherit;e:inherit;"
          data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
          data-frames='[{"delay":0,"speed":4500,"frame":"0","from":"x:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
          data-start="500"
          data-responsive_offset="on"
          data-elementdelay="0.05"><?php echo $slidercek['slider_yazi1']."</br>".$slidercek['slider_yazi2']; ?>
        </div>

        <!-- Layer 2 -->
        <!--<div class="tp-caption rev-btn tp-resizeme slider-btn primary-button no-rounded"
        id="slide-1081-layer-14"
        data-x="['left','left','center','center']" data-hoffset="['35','35','0','0']"
        data-y="['middle','middle','middle','middle']" data-voffset="['-15','-15','0','0']"
        data-fontsize="['15','15','15','15']"
        data-fontweight="500"
        data-lineheight="['50','50','50','50']"
        data-width="['200','200','200','200']"
        data-height="none"
        data-whitespace="nowrap"
        data-start="1500"
        data-type="button"
        data-actions='[{"event":"click","action":"scrollbelow","offset":"-70px","delay":"","speed":"2500","ease":"Power1.easeInOut"}]'
        data-responsive_offset="on"
        data-splitin="none"
        data-splitout="none"
        data-frames='[{"delay":1100,"speed":1000,"frame":"0","from":"y:50px;opacity:0;fb:10px;fbr:100;","to":"o:1;fb:0;fbr:100;","ease":"Power4.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;fbr:100;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"200","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;fb:0;fbr:110%;","style":"c:rgba(255,255,255,1);bs:solid;bw:0 0 0 0;"}]'
        data-textAlign="['center','center','center','center']"
        data-paddingtop="[0,0,0,0]"
        data-paddingright="[0,0,0,0]"
        data-paddingbottom="[0,0,0,0]"
        data-paddingleft="[0,0,0,0]"
        style="">Learn More
      </div>-->
    </li>
    <?php } ?>

  </ul>
</div>
</div>
</div>
<!-- End revolution slider -->

<!--Features START-->
<div class="features-slider">
  <div class="container">
    <div class="row">
      <div class="col-md-4 col-sm-6 col-12">
        <div class="feature-box-5 emphasised">
          <i class="icon-tag2"></i>
          <h4>Sistem Belgelendirme Hizmeti</h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
          <div class="mt-25 text-center">
            <a href="#" class="primary-button btn-block button-sm mb-15-xs features-button">Daha Fazla Bilgi Al</a>
          </div>
        </div>
      </div>
      <div class="col-md-4 col-sm-6 col-12">
        <div class="feature-box-5 emphasised">
          <i class="icon-flag3"></i>
          <h4>Ürün Belgelendirme Hizmeti</h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
          <div class="mt-25 text-center">
            <a href="#" class="primary-button btn-block button-sm mb-15-xs features-button">Daha Fazla Bilgi Al</a>
          </div>
        </div>
      </div>
      <div class="col-md-4 col-sm-6 col-12">
        <div class="feature-box-5 emphasised">
          <i class="icon-wallet"></i>
          <h4>Eğitim Hizmetleri</h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
          <div class="mt-25 text-center">
            <a href="#" class="primary-button btn-block button-sm mb-15-xs features-button">Daha Fazla Bilgi Al</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--Features END-->

<!--Info Section START-->
<div class="section-block pb-0">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <img src="img/yetkilerimiz-logo.jpg" class="" alt="">
      </div>
      <div class="col-md-6">
        <div class="pl-30-md mt-30">
          <div class="section-heading">
            <h3>WQA Cert ve GFA Certification GmbH arasında yapılan işbirliği</h3>
          </div>
          <div class="section-heading-line-left"></div>
          <div class="text-content-big mt-20">
            <p>Belgelendirme sektörü için sürdürülebilirlik üzerine çalışmalar yapmayı öncelikli politikası kabul eden WQACert ve FSC® ve PEFCTM belgelendirme kuruluşlarının liderlerinden olduğu gibi FSC belgelendirmede de Almanya’nın lider belgelendirme kuruluşu olan, Hamburg’da yerleşik GFA Certification GmbH, Türkiye’deki FSC-COC belgelendirme işlemlerini yürütmek üzere işbirliğine karar vermiştir. GFA Certification GmbH, bu işbirliği kararı ile WQACert’i Türkiye temsilcisi olarak atamıştır.</p>
          </div>
          <div class="mt-20">
            <ul class="primary-list">
              <li><i class="fa fa-check-circle"></i>Başvurularınız için ofisimizle doğrudan iletişim kurabilir veya <a href="#" style="color: #d21e2b;">https://req.gfa-cert.com/callreport_prod/contact.html?classid=A17D9DDE-8D12-E511-8110-C4346BACDF00&lang=en</a></li>
              <li><i class="fa fa-check-circle"></i>GFA Certification GmbH adına yürüttüğümüz belgelendirme prosesleri konusunda tüm detaylara <a href="#" style="color: #d21e2b;">https://www.gfa-cert.com/en/types-of-certification/fsc-certification/</a> adresinden ulaşabilirsiniz.</li>
            </ul>
          </div>
          <div class="mt-25 mb-25">
            <a href="#" class="primary-button button-sm mb-15-xs">Devamını Oku</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--Info Section END-->



<!--Parallax Section START-->
<div class="section-block-parallax" style="background-image: url('img/bg14.jpg');">
  <div class="container">
    <div class="section-heading center-holder white-color">
      <h4>Hizmetlerimiz hakkında daha fazla bilgi almak için lütfen bizimle iletişime geçiniz.</h4>
      <a href="#" class="position-relative dark-button button-md mt-10">Bize Ulaşın</a>
    </div>
  </div>
</div>
<!--Parallax Section END-->

<!--FAQ and About Section START-->
<div class="section-block-grey">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-sm-6 col-12">
        <div class="section-heading">
          <h4>Biz Kimiz?</h4>
          <div class="section-heading-line-left"></div>
        </div>
        <div class="text-content-big mt-20">
          <p>WQA Belgelendirme Test Muayene Ve Gözetim Limited Şirketi, kısa adıyla WQA Cert, yönetim sistemi standartları alanında 3.taraf tetkik ve belgelendirme hizmetlerini ve ilgili standartlarda genel katılıma açık eğitimleri Türkiye Cumhuriyeti ve Balkan Yarımadası’nda hizmet vermek üzere, Türk Ticaret Hukuku’na uygun olarak %100 yerli sermaye ile 2019 yılında kurulmuştur. <br><br>
            WQA Cert, belgelendirme ve eğitim sektöründe yaklaşık 20 yıllık tecrübeye sahip kadrosu ile en başta tarafsızlık ve gizlilik prensipleri ile sorumluluk alarak hizmet vermektedir. 3.taraf tetkiki ve belgelendirmeye olan güveni sağlamak ve sürdürmek için uygunluk değerlendirme alanında kendi faaliyetleri ile ilgili geçerli olan ulusal/uluslararası standartları gönüllü olarak tamamen kabul etmiş ve uygulamaktadır.</p>
          </div>
          <div class="mt-20">
            <ul class="primary-list">
              <li><i class="fa fa-check-circle"></i>Deneyimli kadromuz, kaliteli hizmetimiz ve yılların tecrübesiyle, ulusal ve uluslararası alanda ilk tercih edilen belgelendirme kuruluşları arasında olmaktır</li>
              <li><i class="fa fa-check-circle"></i>İlkelerimizden taviz vermeksizin güvenli adımlarla insan sağlığına ve doğaya zarar vermeden ve kaynakları en etkin şekilde kullanarak belgelendirme alanında kaliteli hizmet vermekdir.</li>
            </ul>
          </div>
          <div class="mt-25">
            <a href="hakkimizda.php" class="primary-button button-sm mb-15-xs">Daha Fazla Bilgi Al</a>
          </div>
        </div>
        <div class="col-md-6 col-sm-6 col-12">
          <div class="section-heading">
            <h4>Sıkça Sorulan Sorular</h4>
            <div class="section-heading-line-left"></div>
          </div>
          <!-- Accordions START -->
          <div class="accordion border-bottom-0" id="accordion" role="tablist" aria-multiselectable="true">
            <div class="panel panel-default accordion">
              <div class="panel-heading accordion-heading" role="tab" id="headingOne">
                <h4 class="panel-title accordion-title">
                  <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    Where can I get access to Capital IQ?
                  </a>
                </h4>
              </div>
              <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne">
                <div class="panel-body accordion-body">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                  consequat.
                </div>
              </div>
            </div>

            <div class="panel panel-default accordion">
              <div class="panel-heading accordion-heading" role="tab" id="headingTwo">
                <h4 class="panel-title accordion-title">
                  <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    Where can I find market research reports?
                  </a>
                </h4>
              </div>
              <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo">
                <div class="panel-body accordion-body">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                  consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                  cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                  proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </div>
              </div>
            </div>

            <div class="panel panel-default accordion">
              <div class="panel-heading accordion-heading" role="tab" id="headingThree">
                <h4 class="panel-title accordion-title">
                  <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    How do I get access to case studies?
                  </a>
                </h4>
              </div>
              <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree">
                <div class="panel-body accordion-body">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                  consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                  cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                  proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </div>
              </div>
            </div>
          </div>
          <!-- Accordions END -->
        </div>
      </div>
    </div>
  </div>
  <!--FAQ and About Section END-->

  <!--Blog Grid START-->
  <div class="section-block">
    <div class="container">
      <div class="section-heading">
        <span>En Yeniler</span>
        <h4>Blog</h4>
        <div class="section-heading-line-left"></div>
      </div>

      <div class="row mt-20">
        <div class="col-lg-6 col-md-6 col-12">
          <div class="blog-box">
            <div class="blog-box-img">
              <img src="http://via.placeholder.com/540x360" alt="img">
            </div>
            <div class="blog-box-text">
              <div class="blog-box-date">
                <h4>19</h4>
                <h5>Apr</h5>
              </div>
              <h6>Staff, Startup, Work</h6>
              <a href="#"><h4>We take your design to next level</h4></a>
              <p>Corem ipsum dolor sit amet consectetur bas adipisicing eiusmod temp inciduntut labore us dolore magna aliqua veniama quis nostrud ullamco laboris eiusmod tempor incididunt utabore dolore magna...</p>
              <div class="pricing-box-1-button">
                <a href="#">Read More</a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-6 col-md-6 col-12 ">
          <div class="blog-box">
            <div class="blog-box-img">
              <img src="http://via.placeholder.com/540x360" alt="img">
            </div>
            <div class="blog-box-text">
              <div class="blog-box-date">
                <h4>23</h4>
                <h5>May</h5>
              </div>
              <h6>Branding, Creativity</h6>
              <a href="#"><h4>How to get started with a project</h4></a>
              <p>Corem ipsum dolor sit amet consectetur bas adipisicing eiusmod temp inciduntut labore us dolore magna aliqua veniama quis nostrud ullamco laboris eiusmod tempor incididunt utabore dolore magna...</p>
              <div class="pricing-box-1-button">
                <a href="#">Read More</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--Blog Grid END-->



  <!-- Clients Carousel START -->
  <div class="section-clients border-top">
    <div class="container">
      <div class="owl-carousel owl-theme clients" id="clients">
        <div class="item">
          <img src="http://via.placeholder.com/155x75" alt="partner-image">
        </div>

        <div class="item">
          <img src="http://via.placeholder.com/155x75" alt="partner-image">
        </div>

        <div class="item">
          <img src="http://via.placeholder.com/155x75" alt="partner-image">
        </div>

        <div class="item">
          <img src="http://via.placeholder.com/155x75" alt="partner-image">
        </div>

        <div class="item">
          <img src="http://via.placeholder.com/155x75" alt="partner-image">
        </div>

        <div class="item">
          <img src="http://via.placeholder.com/155x75" alt="partner-image">
        </div>
      </div>
    </div>
  </div>
  <!-- Clients Carousel END -->







  <?php require_once 'footer.php'; ?>