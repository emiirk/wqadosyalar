<?php require_once 'header.php'; ?>

<head>
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
    .accordion-body, .text-white > p{
      color:#383838;
    }



    .collapsible-link {
      width: 100%;
      position: relative;
      text-align: left;
    }

    .collapsible-link::before {
      content: '\f107';
      position: absolute;
      top: 50%;
      right: 0.8rem;
      transform: translateY(-50%);
      display: block;
      font-family: 'FontAwesome';
      font-size: 1.1rem;
    }

    .collapsible-link[aria-expanded='true']::before {
      content: '\f106';
    }

  </style>
</head>
<!-- Page Title START -->
<div class="page-title-section" style="background-image: url(img/slider/slide11.jpg);">
  <div class="container text-left">
    <h1>Dökümanlar</h1>
    <ul>
      <li><a href="index.php">Anasayfa</a></li>
      <li><a href="hakkimizda.php">Hakkımızda</a></li>
    </ul>
  </div>
</div>
<!-- Page Title END -->





<!--FAQ and About Section START-->
<div class="section-block">
  <div class="container">
    <div class="row">
      <div class="col-md-12 col-sm-12 col-12">
              <!--<div class="section-heading">
                <h4>Sıkça Sorulan Sorular</h4>
                <div class="section-heading-line-left"></div>
              </div>-->
              <!-- Accordions START -->
              <div class="container">

                <!-- For demo purpose -->
                <div class="row py-5">
                  <div class="col-lg-9 mx-auto text-white text-center">
                    <h1 class="display-4">SSS</h1>
                    <p class="lead mb-0">Sıkça Sorulan Sorular</p>
                  </p>
                </div>
              </div><!-- End -->


              <div class="row">
                <div class="col-lg-9 mx-auto">
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

              <!--<div class="accordion border-bottom-0" id="accordion" role="tablist" aria-multiselectable="true">
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
              </div>-->
              <!-- Accordions END -->
            </div>
          </div>
        </div>
      </div>
      <!--FAQ and About Section END-->



      <?php require_once 'footer-top.php'; ?>
      
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

      <?php require_once 'footer.php'; ?>