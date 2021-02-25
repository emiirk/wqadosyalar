<?php 

require_once 'header.php'; 

//Belirli veriyi seçme işlemi
$slidersor=$db->prepare("SELECT * FROM slider");
$slidersor->execute();


?>


<!-- page content -->
<div class="right_col" role="main">
  <div class="">

    <div class="clearfix"></div>
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>Slider Listeleme <small>

              <?php 

              if (@$_GET['durum']=="ok") {?>

              <b style="color:green;">İşlem Başarılı...</b>

              <?php } elseif (@$_GET['durum']=="no") {?>

              <b style="color:red;">İşlem Başarısız...</b>

              <?php }

              ?>


            </small></h2>

            <div class="clearfix"></div>

            <div align="right">
              <a href="slider-ekle.php"><button class="btn btn-success btn-xs"> Yeni Ekle</button></a>

            </div>
          </div>

          <div class="x_content">
            <p class="text-muted font-13 m-b-30">

            </p>
            <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
              <thead>
                <tr>
                  <th>S.No</th>
                  <th>Resim</th>
                  <th>Yazı</th>
                  <th>Sıra</th>
                  <th>Durum</th>
                  <th class="text-center">İşlemler</th>
                </tr>
              </thead>
              <tbody>

               <?php 

              $say=0;

              while($slidercek=$slidersor->fetch(PDO::FETCH_ASSOC)) { $say++?>

               <tr>
               <td><?php echo $say ?></td>
                <td><img width="100" src="../../<?php echo $slidercek['slider_resimyol'] ?>"></td>
                <td><?php echo $slidercek['slider_yazi1']." ".$slidercek['slider_yazi2']; ?></td>
               <td><?php echo $slidercek['slider_sira'] ?></td>
                <td>
                  <?php if ($slidercek['slider_durum']=="1") { ?>
                  <span class="label label-success">Aktif</span>
                  <?php } else {?>
                  <span class="label label-danger">Pasif</span>
                  <?php } ?>
                </td>
                <td class="text-center">
                  <a href="slider-duzenle.php?slider_id=<?php echo $slidercek['slider_id']; ?>">
                    <button class="btn btn-primary btn-xs" data-toggle="tooltip" data-placement="top" title="Detay"><i class="fa fa-pencil" aria-hidden="true"></i></button>
                  </a>
                  <a onclick="return confirm('Bu ürünü silmek istediğinize emin misiniz?')" href="../netting/adminislem.php?slider_id=<?php echo $slidercek['slider_id']; ?>&slidersil=ok&slider_resimyol=<?php echo $slidercek['slider_resimyol'] ?>">
                    <button class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="Sil"><i class="fa fa-trash" aria-hidden="true"></i></button>
                  </a>
                </td>
              </tr>

              <?php } ?>
            </tbody>
          </table>

        </div>



  </div>
</div>
</div>




</div>
</div>
<!-- /page content -->

<?php require_once 'footer.php'; ?>
