<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>WQACERT</title>

  <!-- Bootstrap -->
  <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome -->
  <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <!-- NProgress -->
  <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
  <!-- Animate.css -->
  <link href="../vendors/animate.css/animate.min.css" rel="stylesheet">

  <!-- Custom Theme Style -->
  <link href="../build/css/custom.min.css" rel="stylesheet">


  <style type="text/css">
    .login_content div .reset_pass {
      float: left;
    }
  </style>
</head>

<body class="login">
  <div>
    <a class="hiddenanchor" id="signup"></a>
    <a class="hiddenanchor" id="signin"></a>

    <div class="login_wrapper">
      <div class="animate form login_form">
        <section class="login_content">
          <form action="../netting/adminislem.php" method="POST">
            <h1>WQACERT Giriş</h1>
            <div>
              <input type="text" class="form-control" name="kullanici_mail" placeholder="E-Posta" required />
            </div>
            <div>
              <input type="password" class="form-control" name="kullanici_password" placeholder="Şifre" required />
            </div>
            <div>
              <button type="submit" class="btn btn-primary btn-block" name="admingiris">Giriş Yap</button>
              <a class="reset_pass text-center" href="#">Şifremi Unuttum</a>
            </div>

            <div class="clearfix"></div>

            <div class="separator">

              <?php if (@$_GET['durum']=='no') { ?>
                <div class="alert alert-danger" role="alert">
                  Giriş Başarısız...
                </div>
              <?php } else if (@$_GET['durum']=='exit') { ?>
                <div class="alert alert-success" role="alert">
                  Çıkış Başarılı...
                </div>
              <?php } ?>

              <div class="clearfix"></div>
              <br />

              <div>
                <p>©2021 TurkuvazSoft</p>
              </div>
            </div>
          </form>
        </section>
      </div>

    </div>
  </div>
</body>
</html>
