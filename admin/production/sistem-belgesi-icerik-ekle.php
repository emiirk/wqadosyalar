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
						<h2><?php echo $sistemcek['sistem_belge_ad']; ?> Belgesine İçerik Ekle <small>

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

									$sistem_icerik_id=$sistemcek['sistem_icerik_id']; 

									$sistembelgesor=$db->prepare("SELECT * FROM sistembelge order by sistem_belge_id ASC");
									$sistembelgesor->execute();

										?>
										<select class="select2_multiple form-control" required="" name="sistem_belge_id" >


											<?php 

											while($sistembelgecek=$sistembelgesor->fetch(PDO::FETCH_ASSOC)) {

												$sistem_belge_id=$sistembelgecek['sistem_belge_id'];

												?>

												<option <?php if ($sistem_icerik_id==$sistem_belge_id) { echo "selected='select'"; } ?> value="<?php echo $sistembelgecek['sistem_belge_id']; ?>"><?php echo $sistembelgecek['sistem_belge_ad']; ?></option>

												<?php } ?>

											</select>
										</div>
									</div>


									<div class="form-group">
										<label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Başlık <span class="required">*</span>
										</label>
										<div class="col-md-6 col-sm-6 col-xs-12">
											<input type="text" id="first-name" name="sistem_icerik_baslik" value="<?php echo $sistemcek['sistem_belge_ad']; ?>" required="required" class="form-control col-md-7 col-xs-12">
										</div>
									</div>




									<!-- Ck Editör Başlangıç -->

									<div class="form-group">
										<label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">İçerik <span class="required">*</span>
										</label>
										<div class="col-md-6 col-sm-6 col-xs-12">

											<textarea  class="ckeditor" id="editor1" name="sistem_icerik_icerik"></textarea>
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



									<div class="ln_solid"></div>
									<div class="form-group">
										<div align="right" class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
											<button type="submit" name="sistemicerikkaydet" class="btn btn-success">Ekle</button>
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
