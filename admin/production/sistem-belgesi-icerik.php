<?php 

include 'header.php'; 


$sistemsor=$db->prepare("SELECT * FROM sistemicerik order by sistem_icerik_id DESC");
$sistemsor->execute();


?>


<!-- page content -->
<div class="right_col" role="main">
	<div class="">

		<div class="clearfix"></div>
		<div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12">
				<div class="x_panel">
					<div class="x_title">
						<h2>Sistem Belgesi İçerikleri <small>

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
							<a href="sistem-belgesi-icerik-ekle.php"><button class="btn btn-success btn-xs"> <i class="fa fa-plus"></i> Yeni İçerik Ekle</button></a>

						</div>
					</div>






					<div class="x_content">
						<p class="text-muted font-13 m-b-30">

						</p>
						<table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
							<thead>
								<tr>
									<th>S.No</th>
									<th>Belge Resim</th>
									<th>Belge Adı</th>
									<th>SeoUrl</th>
									<th>Sistem Belgesi Adı</th>
									<th class="text-center">İşlemler</th>
								</tr>
							</thead>
							<tbody>

								<?php 

								$say=0;

								while($sistemcek=$sistemsor->fetch(PDO::FETCH_ASSOC)) { $say++?>

								<tr>
									<td><?php echo $say ?></td>
									<td><img width="100" src="../../<?php echo $sistemcek['sistem_icerik_resimyol'] ?>"></td>
									<td><?php echo $sistemcek['sistem_icerik_baslik']; ?></td>
									<td><?php echo $sistemcek['sistem_icerik_seourl'] ?></td>
									<td>
										<?php  

										$sistem_icerik_id=$sistemcek['sistem_belge_id']; 

										$sistembelgesor=$db->prepare("SELECT * from sistembelge where sistem_belge_id=:id");
										$sistembelgesor->execute(array(
											'id' => $sistem_icerik_id
											));
										$sistembelgecek=$sistembelgesor->fetch(PDO::FETCH_ASSOC);
										$sistem_belge_id=$sistembelgecek['sistem_belge_id'];
										 if ($sistem_icerik_id==$sistem_belge_id) {
										 	echo $sistembelgecek['sistem_belge_ad'];
										 }
										?>

									</td>
									<td class="text-center">
										<!--<a href="sistem-belgesi-icerik-ekle.php?sistem_belge_id=<?php echo $sistemcek['sistem_belge_id']; ?>">
											<button class="btn btn-success btn-xs" data-toggle="tooltip" data-placement="top" title="İçerik Ekle"><i class="fa fa-plus-circle" aria-hidden="true"></i></button>
										</a>
										<a href="sistem-belgesi-icerik-duzenle.php?sistem_belge_id=<?php echo $sistemcek['sistem_belge_id']; ?>&sistem_icerik_id=<?php echo $sistemcek2['sistem_icerik_id']; ?>">
											<button class="btn btn-warning btn-xs" data-toggle="tooltip" data-placement="top" title="İçeriği Düzenle"><i class="fa fa-file-text" aria-hidden="true"></i></button>
										</a>-->
										<a href="sistem-belgesi-duzenle.php?sistem_belge_id=<?php echo $sistemcek['sistem_belge_id']; ?>">
											<button class="btn btn-warning btn-xs" data-toggle="tooltip" data-placement="top" title="İçeriği Gör"><i class="fa fa-search" aria-hidden="true"></i></button>
										</a>
										<a href="sistem-belgesi-icerik-duzenle.php?sistem_icerik_id=<?php echo $sistemcek['sistem_icerik_id']; ?>&sistem_belge_id=<?php echo $sistemcek['sistem_belge_id']; ?>">
											<button class="btn btn-primary btn-xs" data-toggle="tooltip" data-placement="top" title="İçeriği Düzenle"><i class="fa fa-pencil" aria-hidden="true"></i></button>
										</a>
										<a onclick="return confirm('Bu ürünü silmek istediğinize emin misiniz?')" href="../netting/adminislem.php?sistem_icerik_id=<?php echo $sistemcek['sistem_icerik_id']; ?>&sistem_icerik_sil=ok&sistem_icerik_resimyol=<?php echo $sistemcek['sistem_icerik_resimyol'] ?>">
											<button class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="Belgeyi Sil"><i class="fa fa-trash" aria-hidden="true"></i></button>
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

<?php include 'footer.php'; ?>
