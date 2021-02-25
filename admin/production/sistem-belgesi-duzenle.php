<?php 

include 'header.php'; 
$sistemsor=$db->prepare("SELECT * FROM sistembelge where sistem_belge_id=:id");
$sistemsor->execute(array(
	'id' => @$_GET['sistem_belge_id']
	));

$sistemcek=$sistemsor->fetch(PDO::FETCH_ASSOC);

?>

<!-- page content -->
<div class="right_col" role="main">
	<div class="">

		<div class="clearfix"></div>
		<div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12">
				<div class="x_panel">
					<div class="x_title">
						<h2>Sistem Belgesi Düzenle <small>

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

							<?php if (!empty($sistemcek['sistem_belge_resimyol'])) { ?>
							

							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Yüklü Resim <span class="required">*</span>
								</label>
								<div class="col-md-6 col-sm-6 col-xs-12">
									<img width="300" src="../../<?php echo $sistemcek['sistem_belge_resimyol']; ?>">
								</div>
							</div>
							<?php } ?>

							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Resim Seç (255 X 155)<span class="required">*</span>
								</label>
								<div class="col-md-6 col-sm-6 col-xs-12">
									<input type="file" id="first-name"  name="sistem_belge_resimyol" class="form-control col-md-7 col-xs-12">
								</div>
							</div>

							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Belge Adı <span class="required">*</span>
								</label>
								<div class="col-md-6 col-sm-6 col-xs-12">
									<input type="text" id="first-name" name="sistem_belge_ad" value="<?php echo $sistemcek['sistem_belge_ad'] ?>" required="required" class="form-control col-md-7 col-xs-12">
								</div>
							</div>




							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Sıra <span class="required">*</span>
								</label>
								<div class="col-md-6 col-sm-6 col-xs-12">
									<input type="number" id="first-name" name="sistem_belge_sira" value="<?php echo $sistemcek['sistem_belge_sira'] ?>" required="required" class="form-control col-md-7 col-xs-12">
								</div>
							</div>





							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Belge Durum<span class="required">*</span>
								</label>
								<div class="col-md-6 col-sm-6 col-xs-12">
									<select id="heard" class="form-control" name="sistem_belge_durum" required>


									<option value="1" <?php echo $sistemcek['sistem_belge_durum'] == '1' ? 'selected=""' : ''; ?>>Aktif</option>



										<option value="0" <?php if ($sistemcek['sistem_belge_durum']==0) { echo 'selected=""'; } ?>>Pasif</option>


									</select>
								</div>
							</div>


							<input type="hidden" name="sistem_belge_id" value="<?php echo $sistemcek['sistem_belge_id'] ?>">
							<input type="hidden" name="sistem_belge_resimyol" value="<?php echo $sistemcek['sistem_belge_resimyol'] ?>">


							<div class="ln_solid"></div>
							<div class="form-group">
								<div align="right" class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
									<button type="submit" name="sistembelgeduzenle" class="btn btn-success">Kaydet</button>
								</div>
							</div>

						</form>



					</div>
				</div>
			</div>
		</div>



		<hr>
		<hr>
		<hr>



	</div>
</div>
<!-- /page content -->

<?php include 'footer.php'; ?>
