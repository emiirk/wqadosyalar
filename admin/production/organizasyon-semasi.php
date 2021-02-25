<?php 

include 'header.php'; 

//Belirli veriyi seçme işlemi
$organizasyonsor=$db->prepare("SELECT * FROM organizasyon where organizasyon_id=:id");
$organizasyonsor->execute(array(
	'id' => 1
	));
$organizasyoncek=$organizasyonsor->fetch(PDO::FETCH_ASSOC);

?>


<!-- page content -->
<div class="right_col" role="main">
	<div class="">

		<div class="clearfix"></div>
		<div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12">
				<div class="x_panel">
					<div class="x_title">
						<h2>Organizasyon <small>

							<?php 

							if (@$_GET['durum']=="ok") {?>

							<b style="color:green;">İşlem Başarılı...</b>

							<?php } elseif (@$_GET['durum']=="no") {?>

							<b style="color:red;">İşlem Başarısız...</b>

							<?php }

							?>


						</small></h2>

						<div class="clearfix"></div>
					</div>
					<div class="x_content">
						<br />

						<!-- / => en kök dizine çık ... ../ bir üst dizine çık -->
						<form action="../netting/adminislem.php" method="POST" enctype="multipart/form-data" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

							<?php if (!empty($organizasyoncek['organizasyon_resimyol'])) { ?>
							

							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Yüklü Resim <span class="required">*</span>
								</label>
								<div class="col-md-6 col-sm-6 col-xs-12">
									<img width="300" src="../../<?php echo $organizasyoncek['organizasyon_resimyol']; ?>">
								</div>
							</div>
							<?php } ?>

							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Resim Seç<span class="required">*</span>
								</label>
								<div class="col-md-6 col-sm-6 col-xs-12">
									<input type="file" id="first-name"  name="organizasyon_resimyol" class="form-control col-md-7 col-xs-12">
								</div>
							</div>

					


							<!-- Ck Editör Bitiş -->

							<input type="hidden" name="organizasyon_resimyol" value="<?php echo $organizasyoncek['organizasyon_resimyol'] ?>">


							<div class="ln_solid"></div>
							<div class="form-group">
								<div align="right" class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
									<button type="submit" name="organizasyonkaydet" class="btn btn-success">Güncelle</button>
								</div>
							</div>

						</form>



					</div>
				</div>
			</div>
		</div>






	</div>
</div>
<!-- /page content -->

<?php include 'footer.php'; ?>
