<?php 

include 'header.php'; 

//Belirli veriyi seçme işlemi
$urunbelgesor=$db->prepare("SELECT * FROM urunbelge order by urun_belge_sira ASC");
$urunbelgesor->execute();

$sistemsor2=$db->prepare("SELECT * FROM sistemicerik order by sistem_belge_sira ASC");
$sistemsor2->execute();
$sistemcek2=$sistemsor2->fetch(PDO::FETCH_ASSOC)

?>


<!-- page content -->
<div class="right_col" role="main">
	<div class="">

		<div class="clearfix"></div>
		<div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12">
				<div class="x_panel">
					<div class="x_title">
						<h2>Ürün Belgeleri <small>

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
							<a href="urun-belgesi-ekle.php"><button class="btn btn-success btn-xs"> <i class="fa fa-plus"></i> Yeni Ürün Belgesi Ekle</button></a>

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
									<th>Sıra</th>
									<th>SeoUrl</th>
									<th>Durum</th>
									<th class="text-center">İşlemler</th>
								</tr>
							</thead>
							<tbody>

								<?php 

								$say=0;

								while($urunbelgecek=$urunbelgesor->fetch(PDO::FETCH_ASSOC)) { $say++?>

								<tr>
									<td><?php echo $say ?></td>
									<td><img width="100" src="../../<?php echo $urunbelgecek['urun_belge_resimyol'] ?>"></td>
									<td><?php echo $urunbelgecek['urun_belge_ad']; ?></td>
									<td><?php echo $urunbelgecek['urun_belge_sira'] ?></td>
									<td><?php echo $urunbelgecek['urun_belge_seourl'] ?></td>
									<td>
										<?php if ($urunbelgecek['urun_belge_durum']=="1") { ?>
										<span class="label label-success">Aktif</span>
										<?php } else {?>
										<span class="label label-danger">Pasif</span>
										<?php } ?>
									</td>
									<td class="text-center">
										<!--<a href="sistem-belgesi-icerik-ekle.php?sistem_belge_id=<?php echo $sistemcek['sistem_belge_id']; ?>">
											<button class="btn btn-success btn-xs" data-toggle="tooltip" data-placement="top" title="İçerik Ekle"><i class="fa fa-plus-circle" aria-hidden="true"></i></button>
										</a>
										<a href="sistem-belgesi-icerik-duzenle.php?sistem_belge_id=<?php echo $sistemcek['sistem_belge_id']; ?>&sistem_icerik_id=<?php echo $sistemcek2['sistem_icerik_id']; ?>">
											<button class="btn btn-warning btn-xs" data-toggle="tooltip" data-placement="top" title="İçeriği Düzenle"><i class="fa fa-file-text" aria-hidden="true"></i></button>
										</a>-->
										<a href="urun-belgesi-duzenle.php?urun_belge_id=<?php echo $urunbelgecek['urun_belge_id']; ?>">
											<button class="btn btn-primary btn-xs" data-toggle="tooltip" data-placement="top" title="Belgeyi Düzenle"><i class="fa fa-pencil" aria-hidden="true"></i></button>
										</a>
										<a onclick="return confirm('Bu ürünü silmek istediğinize emin misiniz?')" href="../netting/adminislem.php?urun_belge_id=<?php echo $urunbelgecek['urun_belge_id']; ?>&urun_belge_sil=ok&urun_belge_resimyol=<?php echo $urunbelgecek['urun_belge_resimyol'] ?>">
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
