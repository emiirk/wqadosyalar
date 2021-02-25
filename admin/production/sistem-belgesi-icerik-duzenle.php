<?php 

include 'header.php'; 




$sistemiceriksor=$db->prepare("SELECT * FROM sistemicerik where sistem_icerik_id=:icerik_id");
$sistemiceriksor->execute(array(
	'icerik_id' => @$_GET['sistem_icerik_id']
	));

$sistemicerikcek=$sistemiceriksor->fetch(PDO::FETCH_ASSOC);



?>


<!-- page content -->
<div class="right_col" role="main">
	<div class="">

		<div class="clearfix"></div>
		<div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12">
				<div class="x_panel">
					<div class="x_title">
						<h2><?php echo $sistemicerikcek['sistem_icerik_baslik']; ?> İçeriğini Düzenle <small>

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

							<?php if (!empty($sistemicerikcek['sistem_icerik_resimyol'])) { ?>

							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Yüklü Resim <span class="required">*</span>
								</label>
								<div class="col-md-6 col-sm-6 col-xs-12">
									<img width="150" src="../../<?php echo $sistemicerikcek['sistem_icerik_resimyol']; ?>">
								</div>
							</div>
							<?php } ?>

							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Resim Seç<span class="required">*</span>
								</label>
								<div class="col-md-6 col-sm-6 col-xs-12">
									<input type="file" id="first-name"  name="sistem_icerik_resimyol" class="form-control col-md-7 col-xs-12">
								</div>
							</div>


							
							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Belge Kategori <span class="required">*</span>
								</label>
								<div class="col-md-6 col-sm-6 col-xs-12">
									<?php  

									/*$sistem_icerik_id=$sistemicerikcek['sistem_icerik_id']; 

									$sistembelgesor=$db->prepare("SELECT * from sistembelge where sistem_belge_id=:id order by sistem_belge_id ASC");
									$sistembelgesor->execute(array(
										'id' => $_GET['sistem_belge_id']
										));*/

										$sistembelgesor=$db->prepare("SELECT * from sistembelge order by sistem_belge_id ASC");
										$sistembelgesor->execute();
										?>
										<select class="select2_multiple form-control" required="" name="sistem_belge_id" >


											<?php 

											while($sistembelgecek=$sistembelgesor->fetch(PDO::FETCH_ASSOC)) {

												//$sistem_belge_id=$sistembelgecek['sistem_belge_id'];

												?>

												<option value="<?php echo $sistembelgecek['sistem_belge_id']; ?>" <?php echo $sistembelgecek['sistem_belge_id'] == $sistemicerikcek['sistem_belge_id'] ? 'selected=""' : ''; ?>><?php echo $sistembelgecek['sistem_belge_ad']; ?></option>
												<?php } ?>

											</select>
										</div>
									</div>


									<div class="form-group">
										<label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Başlık <span class="required">*</span>
										</label>
										<div class="col-md-6 col-sm-6 col-xs-12">
											<input type="text" id="first-name" name="sistem_icerik_baslik" value="<?php echo $sistemicerikcek['sistem_icerik_baslik']; ?>" required="required" class="form-control col-md-7 col-xs-12">
										</div>
									</div>




									<!-- Ck Editör Başlangıç -->

									<div class="form-group">
										<label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">İçerik <span class="required">*</span>
										</label>
										<div class="col-md-6 col-sm-6 col-xs-12">

											<textarea  class="ckeditor" id="editor1" name="sistem_icerik_icerik"><?php echo $sistemicerikcek['sistem_icerik_icerik']; ?></textarea>
										</div>
									</div>

									<script type="text/javascript">

										CKEDITOR.replace( 'editor1',

										{

											filebrowserBrowseUrl : 'ckfinder/ckfinder.html',

											filebrowserImageBrowseUrl : 'ckfinder/ckfinder.html?type=Images',

											filebrowserFlashBrowseUrl : 'ckfinder/ckfinder.html?type=Flash',

											filebrowserUploadUrl : 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',

											filebrowserImageUploadUrl : 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',

											filebrowserFlashUploadUrl : 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash',

											forcePasteAsPlainText: true

										} 

										);

									</script>

									<!-- Ck Editör Bitiş -->

									<input type="hidden" name="sistem_icerik_id" value="<?php echo @$_GET['sistem_icerik_id'] ?>">
									<input type="hidden" name="sistem_icerik_resimyol" value="<?php echo $sistemicerikcek['sistem_icerik_resimyol']; ?>">


									<div class="ln_solid"></div>
									<div class="form-group">
										<div align="right" class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
											<button type="submit" name="sistemicerikduzenle" class="btn btn-success">Güncelle</button>
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
