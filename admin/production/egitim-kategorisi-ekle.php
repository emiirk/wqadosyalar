<?php 

include 'header.php'; 


?>

<!-- page content -->
<div class="right_col" role="main">
	<div class="">

		<div class="clearfix"></div>
		<div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12">
				<div class="x_panel">
					<div class="x_title">
						<h2>Eğitim Kategorisi Ekle <small>,

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


							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Eğitim Adı <span class="required">*</span>
								</label>
								<div class="col-md-6 col-sm-6 col-xs-12">
									<input type="text" id="first-name" name="egitim_ad" placeholder="Örnek: ISO 9001:2015" required="required" class="form-control col-md-7 col-xs-12">
								</div>
							</div>




							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">İçerik Başlığı <span class="required">*</span>
								</label>
								<div class="col-md-6 col-sm-6 col-xs-12">
									<input type="text" id="first-name" name="egitim_baslik" placeholder="Başlık Giriniz" required="required" class="form-control col-md-7 col-xs-12">
								</div>
							</div>




							<!-- Ck Editör Başlangıç -->

									<div class="form-group">
										<label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Eğitim İçeriği <span class="required">*</span>
										</label>
										<div class="col-md-6 col-sm-6 col-xs-12">

											<textarea  class="ckeditor" id="editor1" name="egitim_icerik"></textarea>
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





							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Durum<span class="required">*</span>
								</label>
								<div class="col-md-6 col-sm-6 col-xs-12">
									<select id="heard" class="form-control" name="egitim_durum" required>




										<option value="1">Aktif</option>



										<option value="0" >Pasif</option>



									</select>
								</div>
							</div>


							<!-- <input type="hidden" name="kategori_id" value="<?php echo $kategoricek['kategori_id'] ?>"> -->


							<div class="ln_solid"></div>
							<div class="form-group">
								<div align="right" class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
									<button type="submit" name="egitimkategoriekle" class="btn btn-success">Kaydet</button>
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
